<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeAgenticDBPerformanceRequest extends Model
{
    /**
     * @var bool
     */
    public $aggregate;

    /**
     * @var string
     */
    public $branchId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'aggregate' => 'Aggregate',
        'branchId' => 'BranchId',
        'DBClusterId' => 'DBClusterId',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'key' => 'Key',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregate) {
            $res['Aggregate'] = $this->aggregate;
        }

        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Aggregate'])) {
            $model->aggregate = $map['Aggregate'];
        }

        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
