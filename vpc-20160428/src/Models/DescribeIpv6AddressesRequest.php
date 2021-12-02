<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpv6AddressesRequest extends Model
{
    /**
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string
     */
    public $ipv6AddressId;

    /**
     * @var string
     */
    public $ipv6InternetBandwidthId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
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

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associatedInstanceId'    => 'AssociatedInstanceId',
        'associatedInstanceType'  => 'AssociatedInstanceType',
        'ipv6Address'             => 'Ipv6Address',
        'ipv6AddressId'           => 'Ipv6AddressId',
        'ipv6InternetBandwidthId' => 'Ipv6InternetBandwidthId',
        'name'                    => 'Name',
        'networkType'             => 'NetworkType',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'vSwitchId'               => 'VSwitchId',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedInstanceId) {
            $res['AssociatedInstanceId'] = $this->associatedInstanceId;
        }
        if (null !== $this->associatedInstanceType) {
            $res['AssociatedInstanceType'] = $this->associatedInstanceType;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->ipv6AddressId) {
            $res['Ipv6AddressId'] = $this->ipv6AddressId;
        }
        if (null !== $this->ipv6InternetBandwidthId) {
            $res['Ipv6InternetBandwidthId'] = $this->ipv6InternetBandwidthId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpv6AddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedInstanceId'])) {
            $model->associatedInstanceId = $map['AssociatedInstanceId'];
        }
        if (isset($map['AssociatedInstanceType'])) {
            $model->associatedInstanceType = $map['AssociatedInstanceType'];
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['Ipv6AddressId'])) {
            $model->ipv6AddressId = $map['Ipv6AddressId'];
        }
        if (isset($map['Ipv6InternetBandwidthId'])) {
            $model->ipv6InternetBandwidthId = $map['Ipv6InternetBandwidthId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
