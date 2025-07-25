<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamResourceDiscoveryRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateIpamResourceDiscoveryRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run, without sending the actual request. Valid value:
     *
     *   **true**: Performs the dry run without creating a custom resource discovery instance. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the DryRunOperation error code is returned.
     *   **false** (default): Performs a dry run and the actual request. If the request passes the dry run, an HTTP 2xx status code is returned and a custom resource discovery instance is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The description of resource discovery.
     *
     * @example description
     *
     * @var string
     */
    public $ipamResourceDiscoveryDescription;

    /**
     * @description The name of the resource discovery.
     *
     * @example name
     *
     * @var string
     */
    public $ipamResourceDiscoveryName;

    /**
     * @description The list of effective regions.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $operatingRegionList;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The request region.
     *
     * >  The request region is the hosted region of the resource discovery instance.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2sermdd6****
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
     * @description The tag information.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ipamResourceDiscoveryDescription' => 'IpamResourceDiscoveryDescription',
        'ipamResourceDiscoveryName' => 'IpamResourceDiscoveryName',
        'operatingRegionList' => 'OperatingRegionList',
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
        if (null !== $this->ipamResourceDiscoveryDescription) {
            $res['IpamResourceDiscoveryDescription'] = $this->ipamResourceDiscoveryDescription;
        }
        if (null !== $this->ipamResourceDiscoveryName) {
            $res['IpamResourceDiscoveryName'] = $this->ipamResourceDiscoveryName;
        }
        if (null !== $this->operatingRegionList) {
            $res['OperatingRegionList'] = $this->operatingRegionList;
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
     * @return CreateIpamResourceDiscoveryRequest
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
        if (isset($map['IpamResourceDiscoveryDescription'])) {
            $model->ipamResourceDiscoveryDescription = $map['IpamResourceDiscoveryDescription'];
        }
        if (isset($map['IpamResourceDiscoveryName'])) {
            $model->ipamResourceDiscoveryName = $map['IpamResourceDiscoveryName'];
        }
        if (isset($map['OperatingRegionList'])) {
            if (!empty($map['OperatingRegionList'])) {
                $model->operatingRegionList = $map['OperatingRegionList'];
            }
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
