<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\vpcInfoList\vpcInfo\vswitchInfoList;

use AlibabaCloud\Tea\Model;

class vswitchInfo extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $vswitchName;

    /**
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'creationTime'            => 'CreationTime',
        'vpcId'                   => 'VpcId',
        'cidrBlock'               => 'CidrBlock',
        'description'             => 'Description',
        'vswitchId'               => 'VswitchId',
        'vswitchName'             => 'VswitchName',
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->vswitchName) {
            $res['VswitchName'] = $this->vswitchName;
        }
        if (null !== $this->availableIpAddressCount) {
            $res['AvailableIpAddressCount'] = $this->availableIpAddressCount;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['VswitchName'])) {
            $model->vswitchName = $map['VswitchName'];
        }
        if (isset($map['AvailableIpAddressCount'])) {
            $model->availableIpAddressCount = $map['AvailableIpAddressCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
