<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsInstanceMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $periodMultiple;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'endTime'        => 'EndTime',
        'key'            => 'Key',
        'periodMultiple' => 'PeriodMultiple',
        'regionId'       => 'RegionId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->periodMultiple) {
            $res['PeriodMultiple'] = $this->periodMultiple;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsInstanceMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['PeriodMultiple'])) {
            $model->periodMultiple = $map['PeriodMultiple'];
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
