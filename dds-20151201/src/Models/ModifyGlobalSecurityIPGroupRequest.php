<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyGlobalSecurityIPGroupRequest extends Model
{
    /**
     * @description The IP addresses in the whitelist template.
     *
     * This parameter is required.
     * @example 27.16.214.10,111.60.117.181
     *
     * @var string
     */
    public $GIpList;

    /**
     * @description The name of the IP whitelist template.
     *
     * This parameter is required.
     * @example dps
     *
     * @var string
     */
    public $globalIgName;

    /**
     * @description The ID of the IP whitelist template.
     *
     * This parameter is required.
     * @example g-fwjk62egbsrp4sftxmmr
     *
     * @var string
     */
    public $globalSecurityGroupId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61933.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'GIpList'               => 'GIpList',
        'globalIgName'          => 'GlobalIgName',
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->GIpList) {
            $res['GIpList'] = $this->GIpList;
        }
        if (null !== $this->globalIgName) {
            $res['GlobalIgName'] = $this->globalIgName;
        }
        if (null !== $this->globalSecurityGroupId) {
            $res['GlobalSecurityGroupId'] = $this->globalSecurityGroupId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGlobalSecurityIPGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GIpList'])) {
            $model->GIpList = $map['GIpList'];
        }
        if (isset($map['GlobalIgName'])) {
            $model->globalIgName = $map['GlobalIgName'];
        }
        if (isset($map['GlobalSecurityGroupId'])) {
            $model->globalSecurityGroupId = $map['GlobalSecurityGroupId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
