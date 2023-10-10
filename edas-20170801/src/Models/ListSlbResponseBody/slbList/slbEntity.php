<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponseBody\slbList;

use AlibabaCloud\Tea\Model;

class slbEntity extends Model
{
    /**
     * @description The IP address of the SLB instance.
     *
     * @example 39.176.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The type of the IP addresses. Valid values:
     *
     *   internet: Users can connect to the SLB instance over the Internet.
     *   intranet: Users can connect to the SLB instance over the internal network.
     *
     * @example internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description Indicates whether the SLB instance has expired. Valid values:
     *
     *   true: The SLB instance has expired.
     *   false: The SLB instance has not expired.
     *
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The ID of the resource group in Enterprise Distributed Application Service (EDAS).
     *
     * @example 0
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The type of the network.
     *
     * @example classic
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether Kubernetes applications can be reused. Valid values:
     *
     *   true: Kubernetes applications can be reused.
     *   false: Kubernetes applications cannot be reused.
     *
     * @example true
     *
     * @var bool
     */
    public $reusable;

    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-2ze055t3xv7s8****
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The name of the SLB instance.
     *
     * @example adce
     *
     * @var string
     */
    public $slbName;

    /**
     * @description The status of the SLB instance.
     *
     * @example active
     *
     * @var string
     */
    public $slbStatus;

    /**
     * @description The tag of the SLB instance.
     *
     * @example [{"tagKey":"tag","tagValue":"value"}]
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the user.
     *
     * @example edas_****_**st@aliyun-****.com
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1f90rfybszjogyw****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch in the VPC.
     *
     * @example vsw-bp156w1gpbv0o50hs****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'address'     => 'Address',
        'addressType' => 'AddressType',
        'expired'     => 'Expired',
        'groupId'     => 'GroupId',
        'networkType' => 'NetworkType',
        'regionId'    => 'RegionId',
        'reusable'    => 'Reusable',
        'slbId'       => 'SlbId',
        'slbName'     => 'SlbName',
        'slbStatus'   => 'SlbStatus',
        'tags'        => 'Tags',
        'userId'      => 'UserId',
        'vpcId'       => 'VpcId',
        'vswitchId'   => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reusable) {
            $res['Reusable'] = $this->reusable;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }
        if (null !== $this->slbStatus) {
            $res['SlbStatus'] = $this->slbStatus;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reusable'])) {
            $model->reusable = $map['Reusable'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }
        if (isset($map['SlbStatus'])) {
            $model->slbStatus = $map['SlbStatus'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
