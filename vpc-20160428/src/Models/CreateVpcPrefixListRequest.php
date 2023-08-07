<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcPrefixListRequest\prefixListEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcPrefixListRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateVpcPrefixListRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The IP version. Valid values:
     *
     *   **IPv4** (default)
     *   **IPv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The maximum number of CIDR blocks that you can specify in the prefix list. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $maxEntries;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The description of the prefix list.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example description
     *
     * @var string
     */
    public $prefixListDescription;

    /**
     * @var prefixListEntries[]
     */
    public $prefixListEntries;

    /**
     * @description The name of the prefix list.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example name
     *
     * @var string
     */
    public $prefixListName;

    /**
     * @description The ID of the region where you want to create the prefix list.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the prefix list belongs.
     *
     * @example rg-bp67acfmxazb4ph****
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
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'dryRun'                => 'DryRun',
        'ipVersion'             => 'IpVersion',
        'maxEntries'            => 'MaxEntries',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'prefixListDescription' => 'PrefixListDescription',
        'prefixListEntries'     => 'PrefixListEntries',
        'prefixListName'        => 'PrefixListName',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'tag'                   => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->prefixListDescription) {
            $res['PrefixListDescription'] = $this->prefixListDescription;
        }
        if (null !== $this->prefixListEntries) {
            $res['PrefixListEntries'] = [];
            if (null !== $this->prefixListEntries && \is_array($this->prefixListEntries)) {
                $n = 0;
                foreach ($this->prefixListEntries as $item) {
                    $res['PrefixListEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
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
     * @return CreateVpcPrefixListRequest
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
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrefixListDescription'])) {
            $model->prefixListDescription = $map['PrefixListDescription'];
        }
        if (isset($map['PrefixListEntries'])) {
            if (!empty($map['PrefixListEntries'])) {
                $model->prefixListEntries = [];
                $n                        = 0;
                foreach ($map['PrefixListEntries'] as $item) {
                    $model->prefixListEntries[$n++] = null !== $item ? prefixListEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
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

        return $model;
    }
}
