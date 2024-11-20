<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeMeterImsMediaConvertUHDUsageRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a 10-digit timestamp.
     *
     * This parameter is required.
     * @example 1656995036
     *
     * @var int
     */
    public $endTs;

    /**
     * @description The time granularity of the query. Valid values: 3600 (hour) and 86400 (day).
     *
     * This parameter is required.
     * @example 3600
     *
     * @var string
     */
    public $interval;

    /**
     * @description This parameter does not take effect. By default, the usage data of all regions is returned.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. The value is a 10-digit timestamp.
     *
     * This parameter is required.
     * @example 1654403036
     *
     * @var int
     */
    public $startTs;
    protected $_name = [
        'endTs'    => 'EndTs',
        'interval' => 'Interval',
        'regionId' => 'RegionId',
        'startTs'  => 'StartTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeterImsMediaConvertUHDUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        return $model;
    }
}
