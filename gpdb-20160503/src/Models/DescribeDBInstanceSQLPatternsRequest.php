<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSQLPatternsRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $queryKeywords;

    /**
     * @var string
     */
    public $sourceIP;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'DBInstanceId'  => 'DBInstanceId',
        'database'      => 'Database',
        'endTime'       => 'EndTime',
        'queryKeywords' => 'QueryKeywords',
        'sourceIP'      => 'SourceIP',
        'startTime'     => 'StartTime',
        'user'          => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->queryKeywords) {
            $res['QueryKeywords'] = $this->queryKeywords;
        }
        if (null !== $this->sourceIP) {
            $res['SourceIP'] = $this->sourceIP;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSQLPatternsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['QueryKeywords'])) {
            $model->queryKeywords = $map['QueryKeywords'];
        }
        if (isset($map['SourceIP'])) {
            $model->sourceIP = $map['SourceIP'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
