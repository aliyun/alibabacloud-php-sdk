<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class UpdateSubnetRequest extends Model
{
    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The subnet instance ID.
     *
     * This parameter is required.
     * @example subnet-f3zfzmnc
     *
     * @var string
     */
    public $subnetId;

    /**
     * @description The new name for the subnet instance.
     *
     * @example subnet-1
     *
     * @var string
     */
    public $subnetName;

    /**
     * @description The ID of the VPD to which the subnet belongs.
     *
     * This parameter is required.
     * @example vpd-aof7dat1
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The zone ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'regionId'   => 'RegionId',
        'subnetId'   => 'SubnetId',
        'subnetName' => 'SubnetName',
        'vpdId'      => 'VpdId',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->subnetName) {
            $res['SubnetName'] = $this->subnetName;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSubnetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['SubnetName'])) {
            $model->subnetName = $map['SubnetName'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
