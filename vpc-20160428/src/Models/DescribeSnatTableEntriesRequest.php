<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnatTableEntriesRequest extends Model
{
    /**
     * @description The ID of the NAT gateway.
     *
     * >  You must specify at least one of **SnatTableId** and **NatGatewayId**.
     * @example ngw-bp1uewa15k4iy5770****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region where you want to create the NAT gateway.
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

    /**
     * @description The ID of the SNAT entry.
     *
     * @example snat-8vbae8uqh7rjpk7d2****
     *
     * @var string
     */
    public $snatEntryId;

    /**
     * @description The name of the SNAT entry.
     *
     * The name must be 2 to 128 characters in length, and can contain digits, underscores (_), and hyphens (-). The name must start with a letter.
     * @example SnatEntry-1
     *
     * @var string
     */
    public $snatEntryName;

    /**
     * @description *   When you query SNAT entries of Internet NAT gateways, this parameter specifies the EIP in an SNAT entry.
     *   When you query SNAT entries of VPC NAT gateways, this parameter specifies the NAT IP address in an SNAT entry.
     *
     * @example 116.22.XX.XX
     *
     * @var string
     */
    public $snatIp;

    /**
     * @description The ID of the SNAT table.
     *
     * >  You must specify at least one of **SnatTableId** and **NatGatewayId**.
     * @example stb-8vbczigrhop8x5u3t****
     *
     * @var string
     */
    public $snatTableId;

    /**
     * @description The source CIDR block specified in the SNAT entry.
     *
     * @example 116.22.XX.XX/24
     *
     * @var string
     */
    public $sourceCIDR;

    /**
     * @description The ID of the vSwitch.
     *
     *   When you query SNAT entries of Internet NAT gateways, this parameter specifies that Elastic Compute Service (ECS) instances in the vSwitch can use SNAT entries to access the Internet.
     *   When you query SNAT entries of virtual private cloud (VPC) NAT gateways, this parameter specifies that ECS instances in the vSwitch can use SNAT entries to access external networks.
     *
     * @example vsw-3xbjkhjshjdf****
     *
     * @var string
     */
    public $sourceVSwitchId;
    protected $_name = [
        'natGatewayId'         => 'NatGatewayId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'snatEntryId'          => 'SnatEntryId',
        'snatEntryName'        => 'SnatEntryName',
        'snatIp'               => 'SnatIp',
        'snatTableId'          => 'SnatTableId',
        'sourceCIDR'           => 'SourceCIDR',
        'sourceVSwitchId'      => 'SourceVSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
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
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }
        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }
        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnatTableEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
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
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }
        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }
        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }

        return $model;
    }
}
