<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class DescribeSlowQueryStatsRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $thresholdMs;

    /**
     * @var int
     */
    public $topN;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'endTime' => 'EndTime',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'thresholdMs' => 'ThresholdMs',
        'topN' => 'TopN',
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

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->thresholdMs) {
            $res['ThresholdMs'] = $this->thresholdMs;
        }

        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['ThresholdMs'])) {
            $model->thresholdMs = $map['ThresholdMs'];
        }

        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }

        return $model;
    }
}
