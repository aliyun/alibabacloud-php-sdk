<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetAvailabilityMetricRequest extends Model
{
    /**
     * @var string
     */
    public $appSource;

    /**
     * @var string
     */
    public $cpuStrategy;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $limit;

    /**
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
     * @return GetAvailabilityMetricRequest
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
