<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeExecErrorSampleResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The name of the database.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbname;

    /**
     * @description The error code returned.
     *
     * @example 1146
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The IP address of the client that executes the SQL statement.
     *
     * @example 100.104.XX.XX
     *
     * @var string
     */
    public $origHost;

    /**
     * @description The SQL template ID.
     *
     * @example 2e8147b5ca2dfc640dfd5e43d96a****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The content of the SQL statement that failed to be executed.
     *
     * @example select * from test1
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The point in time when the failed SQL statement was executed. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1643020306739
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The username of the client that executes the SQL statement.
     *
     * @example test01
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'dbname'    => 'Dbname',
        'errorCode' => 'ErrorCode',
        'origHost'  => 'OrigHost',
        'sqlId'     => 'SqlId',
        'sqlText'   => 'SqlText',
        'timestamp' => 'Timestamp',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbname) {
            $res['Dbname'] = $this->dbname;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->origHost) {
            $res['OrigHost'] = $this->origHost;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dbname'])) {
            $model->dbname = $map['Dbname'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['OrigHost'])) {
            $model->origHost = $map['OrigHost'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
