<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterPeerAttachmentRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateTransitRouterPeerAttachmentRequest extends Model
{
    /**
     * @description Specifies whether to enable the local Enterprise Edition transit router to automatically advertise the routes of the inter-region connection to the peer transit router. Valid values:
     *
     *   **false** (default): no
     *   **true**: yes
     *
     * @example false
     *
     * @var bool
     */
    public $autoPublishRouteEnabled;

    /**
     * @description The bandwidth value of the inter-region connection. Unit: Mbit/s.
     *
     *   This parameter specifies the maximum bandwidth value for the inter-region connection if you set **BandwidthType** to **BandwidthPackage**.
     *   This parameter specifies the bandwidth throttling threshold for the inter-region connection if you set **BandwidthType** to **DataTransfer**.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The method that is used to allocate bandwidth to the inter-region connection. Valid values:
     *
     *   **BandwidthPackage**: allocates bandwidth from a bandwidth plan.
     *   **DataTransfer**: bandwidth is billed based on the pay-by-data-transfer metering method.
     *
     * @example BandwidthPackage
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The ID of the bandwidth plan that you want to associate with the inter-region connection.
     *
     * >  If you set **BandwidthType** to **DataTransfer**, you can skip this parameter.
     * @example cenbwp-3xrxupouolw5ou****
     *
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The default line type.
     *
     * Platinum is supported only when BandwidthType is set to DataTransfer.
     * @example Gold
     *
     * @var string
     */
    public $defaultLinkType;

    /**
     * @description Specifies whether to perform a dry run. Default values:
     *
     *   **false** (default): performs a dry run and sends the request.
     *   **true**: performs a dry run. The system checks the required parameters and request syntax. If the request fails the dry run, an error message is returned. If the request passes the dry run, the system returns the ID of the request.
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
     * @description The ID of the peer transit router.
     *
     * This parameter is required.
     * @example tr-m5eq27g6bndum7e88****
     *
     * @var string
     */
    public $peerTransitRouterId;

    /**
     * @description The ID of the region where the peer transit router is deployed.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $peerTransitRouterRegionId;

    /**
     * @description The ID of the region where the local Enterprise Edition transit router is deployed.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
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
     * @description The description of the inter-region connection.
     *
     * This parameter is optional. If you enter a description, it must be 1 to 256 characters in length, and cannot start with http:// or https://.
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @description The name of the inter-region connection.
     *
     * The name can be empty or 1 to 128 characters in length, and cannot start with http:// or https://.
     * @example testname
     *
     * @var string
     */
    public $transitRouterAttachmentName;

    /**
     * @description The ID of the local Enterprise Edition transit router.
     *
     * @example tr-bp1su1ytdxtataupl****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'autoPublishRouteEnabled'            => 'AutoPublishRouteEnabled',
        'bandwidth'                          => 'Bandwidth',
        'bandwidthType'                      => 'BandwidthType',
        'cenBandwidthPackageId'              => 'CenBandwidthPackageId',
        'cenId'                              => 'CenId',
        'clientToken'                        => 'ClientToken',
        'defaultLinkType'                    => 'DefaultLinkType',
        'dryRun'                             => 'DryRun',
        'ownerAccount'                       => 'OwnerAccount',
        'ownerId'                            => 'OwnerId',
        'peerTransitRouterId'                => 'PeerTransitRouterId',
        'peerTransitRouterRegionId'          => 'PeerTransitRouterRegionId',
        'regionId'                           => 'RegionId',
        'resourceOwnerAccount'               => 'ResourceOwnerAccount',
        'resourceOwnerId'                    => 'ResourceOwnerId',
        'tag'                                => 'Tag',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentName'        => 'TransitRouterAttachmentName',
        'transitRouterId'                    => 'TransitRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPublishRouteEnabled) {
            $res['AutoPublishRouteEnabled'] = $this->autoPublishRouteEnabled;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->cenBandwidthPackageId) {
            $res['CenBandwidthPackageId'] = $this->cenBandwidthPackageId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->defaultLinkType) {
            $res['DefaultLinkType'] = $this->defaultLinkType;
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
        if (null !== $this->peerTransitRouterId) {
            $res['PeerTransitRouterId'] = $this->peerTransitRouterId;
        }
        if (null !== $this->peerTransitRouterRegionId) {
            $res['PeerTransitRouterRegionId'] = $this->peerTransitRouterRegionId;
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
        if (null !== $this->transitRouterAttachmentDescription) {
            $res['TransitRouterAttachmentDescription'] = $this->transitRouterAttachmentDescription;
        }
        if (null !== $this->transitRouterAttachmentName) {
            $res['TransitRouterAttachmentName'] = $this->transitRouterAttachmentName;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterPeerAttachmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPublishRouteEnabled'])) {
            $model->autoPublishRouteEnabled = $map['AutoPublishRouteEnabled'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['CenBandwidthPackageId'])) {
            $model->cenBandwidthPackageId = $map['CenBandwidthPackageId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DefaultLinkType'])) {
            $model->defaultLinkType = $map['DefaultLinkType'];
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
        if (isset($map['PeerTransitRouterId'])) {
            $model->peerTransitRouterId = $map['PeerTransitRouterId'];
        }
        if (isset($map['PeerTransitRouterRegionId'])) {
            $model->peerTransitRouterRegionId = $map['PeerTransitRouterRegionId'];
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
        if (isset($map['TransitRouterAttachmentDescription'])) {
            $model->transitRouterAttachmentDescription = $map['TransitRouterAttachmentDescription'];
        }
        if (isset($map['TransitRouterAttachmentName'])) {
            $model->transitRouterAttachmentName = $map['TransitRouterAttachmentName'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
