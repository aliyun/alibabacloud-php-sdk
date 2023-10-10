<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\slbList;

use AlibabaCloud\Tea\Model;

class slbEntity extends Model
{
    /**
     * @description The IP address of the SLB instance.
     *
     * @example 192.168.xxx.xx
     *
     * @var string
     */
    public $address;

    /**
     * @description The type of the IP address of the SLB instance. Valid values:
     *
     *   Internet: Users can connect to the SLB instance over the Internet.
     *   Intranet: Users can connect to the SLB instance over the internal network.
     *
     * @example Intranet
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
     * @example true
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The ID of the group to which the SLB instance belongs.
     *
     * @example 64189****
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The network type of the SLB instance. Valid values:
     *
     *   Classic network
     *   VPC
     *
     * @example vpc
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
     * @description The unique ID of the SLB instance.
     *
     * @example lb-2zebf1fpbpkc7dnro****
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The name of the SLB instance.
     *
     * @example a9315af59b4cd11e9a18c00163e1****
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
     * @description The UID of the Alibaba Cloud account.
     *
     * @example ****@aliyun.com
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-m5e666n89m2bx8jar****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-mktkxkhah14****
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
        'slbId'       => 'SlbId',
        'slbName'     => 'SlbName',
        'slbStatus'   => 'SlbStatus',
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
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }
        if (null !== $this->slbStatus) {
            $res['SlbStatus'] = $this->slbStatus;
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
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }
        if (isset($map['SlbStatus'])) {
            $model->slbStatus = $map['SlbStatus'];
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
