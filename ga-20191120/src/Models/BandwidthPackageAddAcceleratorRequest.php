<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class BandwidthPackageAddAcceleratorRequest extends Model
{
    /**
     * @description The GA instance ID.
     *
     * @example ga-bp1qe94o52ot4pkfn****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The bandwidth plan ID.
     *
     * @example gbwp-bp1sgzldyj6b4q7cx****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The region ID of the GA instance. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId'      => 'AcceleratorId',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'regionId'           => 'RegionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BandwidthPackageAddAcceleratorRequest
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

        return $model;
    }
}
