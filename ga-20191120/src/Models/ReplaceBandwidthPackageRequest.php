<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ReplaceBandwidthPackageRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $regionId;

    /**
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
