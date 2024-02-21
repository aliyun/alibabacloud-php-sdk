<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetErrorRequestSampleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The database name.
     *
     * @example dbgateway
     *
     * @var string
     */
    public $database;

    /**
     * @description The error code that is returned.
     *
     * @example 1062
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the client that executes the SQL statement.
     *
     * @example 172.16.1****
     *
     * @var string
     */
    public $originHost;

    /**
     * @description The SQL statement.
     *
     * @example insert into meter_****
     *
     * @var string
     */
    public $sql;

    /**
     * @description The SQL query ID.
     *
     * @example 2cd4432556c3dab9d825ba363637****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The table information.
     *
     * @var string[]
     */
    public $tables;

    /**
     * @description The time when the SQL query was executed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1644476100435
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The username of the account that is used to log on to the database.
     *
     * @example dbgat****
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'database'   => 'database',
        'errorCode'  => 'errorCode',
        'instanceId' => 'instanceId',
        'originHost' => 'originHost',
        'sql'        => 'sql',
        'sqlId'      => 'sqlId',
        'tables'     => 'tables',
        'timestamp'  => 'timestamp',
        'user'       => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->originHost) {
            $res['originHost'] = $this->originHost;
        }
        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }
        if (null !== $this->sqlId) {
            $res['sqlId'] = $this->sqlId;
        }
        if (null !== $this->tables) {
            $res['tables'] = $this->tables;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['originHost'])) {
            $model->originHost = $map['originHost'];
        }
        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }
        if (isset($map['sqlId'])) {
            $model->sqlId = $map['sqlId'];
        }
        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = $map['tables'];
            }
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
