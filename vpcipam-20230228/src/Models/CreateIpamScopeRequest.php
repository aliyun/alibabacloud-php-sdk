<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamScopeRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateIpamScopeRequest extends Model
{
    /**
     * @description The client token used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including invalid AccessKey pairs, unauthorized RAM users, and missing parameter values. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**: performs a dry run and the actual request. After the request passes the dry run, a 2xx HTTP status code is returned and the IPAM scope is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the IPAM.
     *
     * This parameter is required.
     *
     * @example ipam-ccxbnsbhew0d6t****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @description The description of the IPAM scope.
     *
     * It must be 1 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`. This parameter is empty by default.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamScopeDescription;

    /**
     * @description The name of the IPAM scope.
     *
     * It must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     *
     * @example test
     *
     * @var string
     */
    public $ipamScopeName;

    /**
     * @description The type of IPAM scope: **private**
     **Usage notes** You can create only private IPAM scopes.
     * @example private
     *
     * @var string
     */
    public $ipamScopeType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the IPAM instance is hosted. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID of the IPAM scope.
     *
     * @example rg-acfmxazb4ph6aiy****
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
     * @description The tag list.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ipamId' => 'IpamId',
        'ipamScopeDescription' => 'IpamScopeDescription',
        'ipamScopeName' => 'IpamScopeName',
        'ipamScopeType' => 'IpamScopeType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }
        if (null !== $this->ipamScopeDescription) {
            $res['IpamScopeDescription'] = $this->ipamScopeDescription;
        }
        if (null !== $this->ipamScopeName) {
            $res['IpamScopeName'] = $this->ipamScopeName;
        }
        if (null !== $this->ipamScopeType) {
            $res['IpamScopeType'] = $this->ipamScopeType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpamScopeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }
        if (isset($map['IpamScopeDescription'])) {
            $model->ipamScopeDescription = $map['IpamScopeDescription'];
        }
        if (isset($map['IpamScopeName'])) {
            $model->ipamScopeName = $map['IpamScopeName'];
        }
        if (isset($map['IpamScopeType'])) {
            $model->ipamScopeType = $map['IpamScopeType'];
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
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
