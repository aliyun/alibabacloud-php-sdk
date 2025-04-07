<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetWarningEventMetricRequest extends Model
{
    /**
     * @description The SAE application type. Valid values:
     *
     *   **micro_service**
     *   **web**
     *   **job**
     *
     * @example micro_service
     *
     * @var string
     */
    public $appSource;

    /**
     * @description The CPU allocation policy. Valid values:
     *
     *   **request**: CPU cores are allocated only when a request is initiated.
     *   **always**: Fixed CPU cores are always allocated.
     *
     * @example always
     *
     * @var string
     */
    public $cpuStrategy;

    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     *
     * @example 1675824035951
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of entries to return. Valid values: 0 to 100.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     *
     * @example 1675823135951
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'appSource' => 'AppSource',
        'cpuStrategy' => 'CpuStrategy',
        'endTime' => 'EndTime',
        'limit' => 'Limit',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSource) {
            $res['AppSource'] = $this->appSource;
        }
        if (null !== $this->cpuStrategy) {
            $res['CpuStrategy'] = $this->cpuStrategy;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
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
     * @return GetWarningEventMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppSource'])) {
            $model->appSource = $map['AppSource'];
        }
        if (isset($map['CpuStrategy'])) {
            $model->cpuStrategy = $map['CpuStrategy'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
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
