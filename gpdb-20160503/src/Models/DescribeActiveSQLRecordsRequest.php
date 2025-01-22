<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeActiveSQLRecordsRequest extends Model
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
    public $keyword;
    /**
     * @var string
     */
    public $maxDuration;
    /**
     * @var string
     */
    public $minDuration;
    /**
     * @var string
     */
    public $order;
    /**
     * @var string
     */
    public $startTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
