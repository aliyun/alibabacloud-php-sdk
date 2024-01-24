<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo\vswitchInfos;
use AlibabaCloud\Tea\Model;

class vpcInfo extends Model
{
    /**
     * @description Indicates the ID of the region in which the instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates the ID of the VPC.
     *
     * @example vpc_id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Indicates the name of the VPC.
     *
     * @example vpc_name
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description Indicates information about the vSwitch to which the instance is connected.
     *
     * @var vswitchInfos
     */
    public $vswitchInfos;
    protected $_name = [
        'regionId'     => 'RegionId',
        'vpcId'        => 'VpcId',
        'vpcName'      => 'VpcName',
        'vswitchInfos' => 'VswitchInfos',
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
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->vswitchInfos) {
            $res['VswitchInfos'] = null !== $this->vswitchInfos ? $this->vswitchInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcInfo
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
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['VswitchInfos'])) {
            $model->vswitchInfos = vswitchInfos::fromMap($map['VswitchInfos']);
        }

        return $model;
    }
}
