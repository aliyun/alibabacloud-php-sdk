<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeGlobalDatabaseNetworksRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * > You can call the [DescribeDBClusters](https://help.aliyun.com/document_detail/98094.html) operation to query information about all clusters that are deployed in a specified region, such as the cluster ID.
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specify the region in which you want to query GDNs. You can create secondary clusters for the GDNs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $filterRegion;

    /**
     * @description The description of the GDN. The description must meet the following requirements:
     *
     *   It cannot start with `http://` or `https://`.
     *   It must start with a letter.
     *   It can contain letters, digits, underscores (_), and hyphens (-).
     *   It must be 2 to 126 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $GDNDescription;

    /**
     * @description The ID of the GDN.
     *
     * @example gdn-****************
     *
     * @var string
     */
    public $GDNId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: 1. The value must be an integer that is greater than 0.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 30. Valid values:
     *
     *   30
     *   50
     *   100
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
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
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'filterRegion'         => 'FilterRegion',
        'GDNDescription'       => 'GDNDescription',
        'GDNId'                => 'GDNId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->filterRegion) {
            $res['FilterRegion'] = $this->filterRegion;
        }
        if (null !== $this->GDNDescription) {
            $res['GDNDescription'] = $this->GDNDescription;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGlobalDatabaseNetworksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['FilterRegion'])) {
            $model->filterRegion = $map['FilterRegion'];
        }
        if (isset($map['GDNDescription'])) {
            $model->GDNDescription = $map['GDNDescription'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
