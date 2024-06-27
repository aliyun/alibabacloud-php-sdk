<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveSQLRecordsRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example testdb
     *
     * @var string
     */
    public $database;

    /**
     * @example 2022-05-07T07:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example SELECT
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 600
     *
     * @var string
     */
    public $maxDuration;

    /**
     * @example 300
     *
     * @var string
     */
    public $minDuration;

    /**
     * @example {"Field":"StartTime","Type":"Desc"}
     *
     * @var string
     */
    public $order;

    /**
     * @example 2021-08-03T09:30Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the database account.
     *
     * @example testuser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'database'     => 'Database',
        'endTime'      => 'EndTime',
        'keyword'      => 'Keyword',
        'maxDuration'  => 'MaxDuration',
        'minDuration'  => 'MinDuration',
        'order'        => 'Order',
        'startTime'    => 'StartTime',
        'user'         => 'User',
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
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->maxDuration) {
            $res['MaxDuration'] = $this->maxDuration;
        }
        if (null !== $this->minDuration) {
            $res['MinDuration'] = $this->minDuration;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
     * @return DescribeActiveSQLRecordsRequest
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MaxDuration'])) {
            $model->maxDuration = $map['MaxDuration'];
        }
        if (isset($map['MinDuration'])) {
            $model->minDuration = $map['MinDuration'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
