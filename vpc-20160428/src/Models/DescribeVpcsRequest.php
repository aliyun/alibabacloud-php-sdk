<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeVpcsRequest extends Model
{
    /**
     * @description The ID of the DHCP options set.
     *
     * @example dopt-o6w0df4epg9zo8isy****
     *
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system prechecks whether your AccessKey pair is valid, whether the RAM user is authorized, and whether the required parameters are specified. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the check, a 2xx HTTP status code is returned and VPCs are queried.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to query the default VPC in the specified region. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Default value: **1**.
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
     * @description The region ID of the VPC.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the VPC to be queried belongs.
     *
     * @example rg-acfmxvfvazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tags of the resource.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The VPC ID.
     *
     * You can specify up to 20 VPC IDs. Separate multiple IDs with commas (,).
     * @example vpc-bp1b1xjllp3ve5yze****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example Vpc-1
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 253460731706911258
     *
     * @var int
     */
    public $vpcOwnerId;
    protected $_name = [
        'dhcpOptionsSetId'     => 'DhcpOptionsSetId',
        'dryRun'               => 'DryRun',
        'isDefault'            => 'IsDefault',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tag'                  => 'Tag',
        'vpcId'                => 'VpcId',
        'vpcName'              => 'VpcName',
        'vpcOwnerId'           => 'VpcOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->vpcOwnerId) {
            $res['VpcOwnerId'] = $this->vpcOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['VpcOwnerId'])) {
            $model->vpcOwnerId = $map['VpcOwnerId'];
        }

        return $model;
    }
}
