<?php

abstract class DatabaseConnectionFactory
{
    abstract public function createConnection():DBConnection;

    public function configureCOnnection($host, $user, $password)
    {
        $connection = $this->createConnection();
        $result = "Creator: The same creator's code has just worked with" . $connection->prepare() . $connection->executeQuery() . $connection->unload();
        return $result;
    }
}

class MySQLConnectionFactory extends DatabaseConnectionFactory
{
    public function createConnection():DBConnection
    {
        return new MySQLConnection();
    }
}

class MariaDBConnectionFactory extends DatabaseConnectionFactory
{
    public function createConnection():DBConnection
    {
        return new MariaDBConnection();
    }
}

class SQLServerConnectionFactory extends DatabaseConnectionFactory
{
    public function createConnection():DBConnection
    {
        return new MySQLConnection();
    }
}

class PostgreSQLConnectionFactory extends DatabaseConnectionFactory
{
    public function createConnection():DBConnection
    {
        return new PostgreSQLConnection();
    }
}

class OracleDBConnectionFactory extends DatabaseConnectionFactory
{
    public function createConnection():DBConnection
    {
        return new OracleDBConnection();
    }
}

class CassandraDBConnectionFactory extends DatabaseConnectionFactory
{
    public function createConnection():DBConnection
    {
        return new CassandraDBConnection();
    }
}

class IngresDBConnectionFactory extends DatabaseConnectionFactory
{
    public function createConnection():DBConnection
    {
        return new IngresDBConnection();
    }
}

interface DBConnection
{
    public function prepare();

    public function executeQuery();

    public function unload();
}

class MySQLConnection implements DBConnection
{
    public function prepare()
    {
        return "{Result of the MySQLConnectionFactory}";
    }

    public function executeQuery()
    {
        return "{Result of the MySQLConnectionFactory}";
    }

    public function unload()
    {
        return "{Return of the MySQLConnectionFactory}";
    }
}

class MariaDBConnection implements DBConnection
{
    public function prepare()
    {
        return "{Result of the MariaDBConnectionFactory}";
    }

    public function executeQuery()
    {
        return "{Result of the MariaDBConnectionFactory}";
    }

    public function unload()
    {
        return "{Return of the MariaDBConnectionFactory}";
    }
}

class OracleDBConnection implements DBConnection
{
    public function prepare()
    {
        return "{Result of the OracleDBConnectionFactory}";
    }

    public function executeQuery()
    {
        return "{Result of the OracleDBConnectionFactory}";
    }

    public function unload()
    {
        return "{Return of the OracleDBConnectionFactory}";
    }
}

class PostgreDBConnection implements DBConnection
{
    public function prepare()
    {
        return "{Result of the PostgreDBConnectionFactory}";
    }

    public function executeQuery()
    {
        return "{Result of the PostgreDBConnectionFactory}";
    }

    public function unload()
    {
        return "{Return of the PostgreDBConnectionFactory}";
    }
}

class SQLServerConnection implements DBConnection
{
    public function prepare()
    {
        return "{Result of the SQLServerConnectionFactory}";
    }

    public function executeQuery()
    {
        return "{Result of the SQLServerConnectionFactory}";
    }

    public function unload()
    {
        return "{Return of the SQLServerConnectionFactory}";
    }
}

class CassandraDBConnection implements DBConnection
{
    public function prepare()
    {
        return "{Result of the CassandraDBConnectionFactory}";
    }

    public function executeQuery()
    {
        return "{Result of the CassandraDBConnectionFactory}";
    }

    public function unload()
    {
        return "{Return of the CassandraDBConnectionFactory}";
    }
}

class IngreDBConnection implements DBConnection
{
    public function prepare()
    {
        return "{Result of the IngresDBConnectionFactory}";
    }

    public function executeQuery()
    {
        return "{Result of the IngresDBConnectionFactory}";
    }

    public function unload()
    {
        return "{Return of the IngresDBConnectionFactory}";
    }
}