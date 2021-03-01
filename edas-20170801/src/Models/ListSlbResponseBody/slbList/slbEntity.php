<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponseBody\slbList;

use AlibabaCloud\Tea\Model;

class slbEntity extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $slbName;

    /**
     * @var string
     */
    public $slbStatus;
    protected $_name = [
        'vpcId'       => 'VpcId',
        'slbId'       => 'SlbId',
        'vswitchId'   => 'VswitchId',
        'expired'     => 'Expired',
        'userId'      => 'UserId',
        'addressType' => 'AddressType',
        'networkType' => 'NetworkType',
        'regionId'    => 'RegionId',
        'groupId'     => 'GroupId',
        'address'     => 'Address',
        'slbName'     => 'SlbName',
        'slbStatus'   => 'SlbStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }
        if (null !== $this->slbStatus) {
            $res['SlbStatus'] = $this->slbStatus;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }
        if (isset($map['SlbStatus'])) {
            $model->slbStatus = $map['SlbStatus'];
        }

        return $model;
    }
}
