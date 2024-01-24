<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo\vswitchInfos;

use AlibabaCloud\Tea\Model;

class vswitchInfo extends Model
{
    /**
     * @description Indicates the ID of the zone in which the instance is deployed.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $azoneId;

    /**
     * @description Indicates whether you can change the network type of the instance.
     *
     * @example true
     *
     * @var bool
     */
    public $drdsSupported;

    /**
     * @description Indicates the ID of the VPC.
     *
     * @example vpc_id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Indicates the ID of the vSwitch.
     *
     * @example vswitch_id
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description Indicates the name of the vSwitch.
     *
     * @example vswitch_name
     *
     * @var string
     */
    public $vswitchName;
    protected $_name = [
        'azoneId'       => 'AzoneId',
        'drdsSupported' => 'DrdsSupported',
        'vpcId'         => 'VpcId',
        'vswitchId'     => 'VswitchId',
        'vswitchName'   => 'VswitchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->drdsSupported) {
            $res['DrdsSupported'] = $this->drdsSupported;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->vswitchName) {
            $res['VswitchName'] = $this->vswitchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vswitchInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['DrdsSupported'])) {
            $model->drdsSupported = $map['DrdsSupported'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['VswitchName'])) {
            $model->vswitchName = $map['VswitchName'];
        }

        return $model;
    }
}
