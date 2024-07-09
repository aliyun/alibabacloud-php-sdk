<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneVpcTreeResponseBody\zones\zone\vpcs;

use AlibabaCloud\Tea\Model;

class vpc extends Model
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
     * @description The name of the region.
     *
     * @example China North 2
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The VPC ID.
     *
     * @example vpc-2z21341ssdadsfzyd49ra
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example demo-vpc
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description The type of the VPC. Valid values:
     *
     *   STANDARD: standard VPC
     *   EDS: Elastic Desktop Service (EDS) workspace VPC
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'regionId'   => 'RegionId',
        'regionName' => 'RegionName',
        'vpcId'      => 'VpcId',
        'vpcName'    => 'VpcName',
        'vpcType'    => 'VpcType',
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        return $model;
    }
}
