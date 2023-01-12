<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ReplaceBandwidthPackageRequest extends Model
{
    /**
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The ID of the replacement bandwidth plan. When you specify a replacement bandwidth plan, take note of the following items:
     *
     *   Only a bandwidth plan that is not associated with a GA instance can be specified.
     *   If you want to replace a basic bandwidth plan, make sure that the bandwidth provided by the replacement bandwidth plan is not less than the total bandwidth allocated to the acceleration area.
     *
     * @example gbwp-bp176neb61yhcymow****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the bandwidth plan that you want to replace.
     *
     * @example gbwp-o978hgeb61yhcymow****
     *
     * @var string
     */
    public $targetBandwidthPackageId;
    protected $_name = [
        'acceleratorId'            => 'AcceleratorId',
        'bandwidthPackageId'       => 'BandwidthPackageId',
        'regionId'                 => 'RegionId',
        'targetBandwidthPackageId' => 'TargetBandwidthPackageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetBandwidthPackageId) {
            $res['TargetBandwidthPackageId'] = $this->targetBandwidthPackageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceBandwidthPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetBandwidthPackageId'])) {
            $model->targetBandwidthPackageId = $map['TargetBandwidthPackageId'];
        }

        return $model;
    }
}
