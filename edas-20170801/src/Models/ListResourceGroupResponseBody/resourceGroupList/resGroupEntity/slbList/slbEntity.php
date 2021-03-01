<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\slbList;

use AlibabaCloud\Tea\Model;

class slbEntity extends Model
{
    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $slbStatus;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var bool
     */
    public $expired;
    protected $_name = [
        'slbId'       => 'SlbId',
        'slbName'     => 'SlbName',
        'regionId'    => 'RegionId',
        'userId'      => 'UserId',
        'address'     => 'Address',
        'slbStatus'   => 'SlbStatus',
        'addressType' => 'AddressType',
        'vswitchId'   => 'VswitchId',
        'vpcId'       => 'VpcId',
        'networkType' => 'NetworkType',
        'groupId'     => 'GroupId',
        'expired'     => 'Expired',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->slbStatus) {
            $res['SlbStatus'] = $this->slbStatus;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
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
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['SlbStatus'])) {
            $model->slbStatus = $map['SlbStatus'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        return $model;
    }
}
