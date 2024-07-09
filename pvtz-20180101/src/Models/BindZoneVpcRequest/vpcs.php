<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\BindZoneVpcRequest;

use AlibabaCloud\Tea\Model;

class vpcs extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The VPC ID. If you do not specify this parameter, the VPCs that are bound to the zone are unbound from the zone.
     *
     * @example daily-vpc-id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The type of the VPC. Valid values:
     *
     *   **STANDARD**: standard VPC
     *   **EDS**: Elastic Desktop Service (EDS) workspace VPC
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'regionId' => 'RegionId',
        'vpcId'    => 'VpcId',
        'vpcType'  => 'VpcType',
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        return $model;
    }
}
