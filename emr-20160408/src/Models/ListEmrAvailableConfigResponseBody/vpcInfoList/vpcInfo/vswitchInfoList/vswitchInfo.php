<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\vpcInfoList\vpcInfo\vswitchInfoList;

use AlibabaCloud\Tea\Model;

class vswitchInfo extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @example 2018-11-22T07:38:49Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example switch desc
     *
     * @var string
     */
    public $description;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp1d618azoa9go6wo****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-bp18amcazibt1u0d8****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @example hangzhou_g
     *
     * @var string
     */
    public $vswitchName;

    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'cidrBlock'               => 'CidrBlock',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'vpcId'                   => 'VpcId',
        'vswitchId'               => 'VswitchId',
        'vswitchName'             => 'VswitchName',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableIpAddressCount) {
            $res['AvailableIpAddressCount'] = $this->availableIpAddressCount;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AvailableIpAddressCount'])) {
            $model->availableIpAddressCount = $map['AvailableIpAddressCount'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
