<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateSqlPatternCompareReportRequest extends Model
{
    /**
     * @var string
     */
    public $compareEndTime;

    /**
     * @var string
     */
    public $compareStartTime;

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
    public $patternType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'compareEndTime' => 'CompareEndTime',
        'compareStartTime' => 'CompareStartTime',
        'DBClusterId' => 'DBClusterId',
        'endTime' => 'EndTime',
        'patternType' => 'PatternType',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compareEndTime) {
            $res['CompareEndTime'] = $this->compareEndTime;
        }

        if (null !== $this->compareStartTime) {
            $res['CompareStartTime'] = $this->compareStartTime;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->patternType) {
            $res['PatternType'] = $this->patternType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CompareEndTime'])) {
            $model->compareEndTime = $map['CompareEndTime'];
        }

        if (isset($map['CompareStartTime'])) {
            $model->compareStartTime = $map['CompareStartTime'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['PatternType'])) {
            $model->patternType = $map['PatternType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
