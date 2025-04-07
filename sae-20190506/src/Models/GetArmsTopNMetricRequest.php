<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetArmsTopNMetricRequest extends Model
{
    /**
     * @description The CPU allocation policy. Valid values:
     *
     *   **request**: CPU cores are allocated only when a request is initiated.
     *   **always**: Fixed CPU cores are always allocated.
     *
     * @example micro_service
     *
     * @var string
     */
    public $appSource;

    /**
     * @description The additional information that is returned. The following limits are imposed on the ID:
     *
     *   success: If the call is successful, **success** is returned.
     *   An error code: If the call fails, an error code is returned.
     *
     * @example always
     *
     * @var string
     */
    public $cpuStrategy;

    /**
     * @description The SAE application type. Valid values:
     *
     *   **micro_service**
     *   **web**
     *   **job**
     *
     * This parameter is required.
     *
     * @example 1675824035951
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The number of entries to return. Valid values: 0 to 100.
     *
     * This parameter is required.
     *
     * @example count
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The field based on which you want to sort the returned entries.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The end of the time range to query.
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
        'orderBy' => 'OrderBy',
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
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
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
     * @return GetArmsTopNMetricRequest
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
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
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
