<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterMulticastDomainRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateTransitRouterMulticastDomainRequest extends Model
{
    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example cen-a7syd349kne38g****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     * @example 123e4567-e89b-12d3-a456-4266****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request format, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the transit router.
     *
     * You can call the [DescribeChildInstanceRegions](https://help.aliyun.com/document_detail/132080.html) operation to query the most recent region list.
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
     * @description The information about the tags.
     *
     * You can specify at most 20 tags in each call.
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-p0wr9p28r92d598y6****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The description of the multicast domain.
     *
     * The description must be 1 to 256 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example desctest
     *
     * @var string
     */
    public $transitRouterMulticastDomainDescription;

    /**
     * @description The name of the multicast domain.
     *
     * The name must be 1 to 128 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example nametest
     *
     * @var string
     */
    public $transitRouterMulticastDomainName;
    protected $_name = [
        'cenId'                                   => 'CenId',
        'clientToken'                             => 'ClientToken',
        'dryRun'                                  => 'DryRun',
        'ownerAccount'                            => 'OwnerAccount',
        'ownerId'                                 => 'OwnerId',
        'regionId'                                => 'RegionId',
        'resourceOwnerAccount'                    => 'ResourceOwnerAccount',
        'resourceOwnerId'                         => 'ResourceOwnerId',
        'tag'                                     => 'Tag',
        'transitRouterId'                         => 'TransitRouterId',
        'transitRouterMulticastDomainDescription' => 'TransitRouterMulticastDomainDescription',
        'transitRouterMulticastDomainName'        => 'TransitRouterMulticastDomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterMulticastDomainDescription) {
            $res['TransitRouterMulticastDomainDescription'] = $this->transitRouterMulticastDomainDescription;
        }
        if (null !== $this->transitRouterMulticastDomainName) {
            $res['TransitRouterMulticastDomainName'] = $this->transitRouterMulticastDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterMulticastDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterMulticastDomainDescription'])) {
            $model->transitRouterMulticastDomainDescription = $map['TransitRouterMulticastDomainDescription'];
        }
        if (isset($map['TransitRouterMulticastDomainName'])) {
            $model->transitRouterMulticastDomainName = $map['TransitRouterMulticastDomainName'];
        }

        return $model;
    }
}
