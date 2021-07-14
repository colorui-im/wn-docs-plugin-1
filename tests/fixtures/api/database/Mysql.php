<?php namespace Docs\Test\Database;

use BaseDb;
use Docs\Test\Contracts\Db as DbContract;
use Docs\Test\Utilities\{
    StringUtility,
    NumberUtility
};

/**
 * Mysql library.
 *
 * This is a test case for the API docs generation of the Docs plugin.
 *
 * @author Ben Thomson <git@alfreido.com>
 * @deprecated 1.0.1
 */
class Mysql extends BaseDb implements DbContract
{
    /** Whether this MySQL query should be treated as safe */
    const MYSQL_SAFE = 1;

    /** Run query in a statement */
    const MYSQL_STMT = 2;

    /**
     * Query cache.
     *
     * @var array
     */
    private $queryCache = [];

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->queryCache = [];
    }

    /**
     * @inheritDoc
     */
    public function query(string $statement, array $params = [])
    {
        return [];
    }
}
