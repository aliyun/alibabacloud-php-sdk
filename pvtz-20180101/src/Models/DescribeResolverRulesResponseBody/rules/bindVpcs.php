<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody\rules;

use AlibabaCloud\Tea\Model;

class bindVpcs extends Model
{
    /**
     * @description The region ID of the VPC.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region to which the VPC belongs.
     *
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The VPC ID. This ID uniquely identifies the VPC.
     *
     * @example vpc-0jl96awrjt75ezglc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The VPC name.
     *
     * @example vpc-name-test
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description The VPC type. Valid values:
     *
     *   STANDARD: standard VPC
     *   EDS: Elastic Desktop Service (EDS) workspace VPC
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vpcType;

    /**
     * @description The user ID to which the VPC belongs.
     *
     * @example 141339776561****
     *
     * @var string
     */
    public $vpcUserId;
    protected $_name = [
        'regionId'   => 'RegionId',
        'regionName' => 'RegionName',
        'vpcId'      => 'VpcId',
        'vpcName'    => 'VpcName',
        'vpcType'    => 'VpcType',
        'vpcUserId'  => 'VpcUserId',
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
        if (null !== $this->vpcUserId) {
            $res['VpcUserId'] = $this->vpcUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindVpcs
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
        if (isset($map['VpcUserId'])) {
            $model->vpcUserId = $map['VpcUserId'];
        }

        return $model;
    }
}
