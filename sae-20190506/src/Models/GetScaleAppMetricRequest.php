<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetScaleAppMetricRequest extends Model
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
     * @description The number of entries to return. Valid values: 0 to 100.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appSource'   => 'AppSource',
        'cpuStrategy' => 'CpuStrategy',
        'limit'       => 'Limit',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSource) {
            $res['AppSource'] = $this->appSource;
        }
        if (null !== $this->cpuStrategy) {
            $res['CpuStrategy'] = $this->cpuStrategy;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScaleAppMetricRequest
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
