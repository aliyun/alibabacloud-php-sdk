<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPeerAttachmentsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPeerAttachmentsResponseBody\transitRouterAttachments\tags;
use AlibabaCloud\Tea\Model;

class transitRouterAttachments extends Model
{
    /**
     * @description Indicates whether the local Enterprise Edition transit router automatically advertises routes of the inter-region connection to the peer transit router. Valid values:
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
     * @description The maximum bandwidth value of the inter-region connection. Unit: Mbit/s.
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
     * @description The bandwidth allocation method. Valid values:
     *
     **BandwidthPackage**: allocates bandwidth from a bandwidth plan.
     *
     **DataTransfer**: bills bandwidth based on the pay-by-data-transfer metering method.
     *
     * @example BandwidthPackage
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The ID of the bandwidth plan that is used to allocate bandwidth to the inter-region connection.
     *
     * @example cenbwp-3xrxupouolw5ou****
     *
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @description The CEN instance ID.
     *
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The time when the inter-region connection was created.
     *
     * The time follows the ISO8601 standard in the `YYYY-MM-DDThh:mmZ` format. The time is displayed in UTC.
     * @example 2021-06-16T02:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $defaultLinkType;

    /**
     * @description The areas that are connected by the bandwidth plan.
     *
     * @example china_china
     *
     * @var string
     */
    public $geographicSpanId;

    /**
     * @description The ID of the peer transit router.
     *
     * @example tr-m5eq27g6bndum7e88****
     *
     * @var string
     */
    public $peerTransitRouterId;

    /**
     * @description The ID of the Alibaba Cloud account to which the peer transit router belongs.
     *
     * @example 253460731706911258
     *
     * @var int
     */
    public $peerTransitRouterOwnerId;

    /**
     * @description The region ID of the peer transit router.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $peerTransitRouterRegionId;

    /**
     * @description The region ID of the Enterprise Edition transit router.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the resource to which the transit router is connected. Valid values:
     *
     *   **VPC**: VPC
     *   **CCN**: Cloud Connect Network (CCN) instance
     *   **VBR**: virtual border router (VBR)
     *   **TR**: transit router
     *
     * @example TR
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the inter-region connection. Valid values:
     *
     *   **Attached**: The inter-region connection is created.
     *   **Attaching**: The inter-region connection is being created on the transit router.
     *   **Detaching**: The inter-region connection is being deleted from the transit router.
     *   **Detached**: The inter-region connection is deleted from the transit router.
     *
     * @example Attached
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The description of the inter-region connection.
     *
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @description The ID of the inter-region connection.
     *
     * @example tr-attach-5u4qbayfv2io5v****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The name of the inter-region connection.
     *
     * @example test
     *
     * @var string
     */
    public $transitRouterAttachmentName;

    /**
     * @description The ID of the Enterprise Edition transit router.
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
        'creationTime'                       => 'CreationTime',
        'defaultLinkType'                    => 'DefaultLinkType',
        'geographicSpanId'                   => 'GeographicSpanId',
        'peerTransitRouterId'                => 'PeerTransitRouterId',
        'peerTransitRouterOwnerId'           => 'PeerTransitRouterOwnerId',
        'peerTransitRouterRegionId'          => 'PeerTransitRouterRegionId',
        'regionId'                           => 'RegionId',
        'resourceType'                       => 'ResourceType',
        'status'                             => 'Status',
        'tags'                               => 'Tags',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentId'          => 'TransitRouterAttachmentId',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->defaultLinkType) {
            $res['DefaultLinkType'] = $this->defaultLinkType;
        }
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
        }
        if (null !== $this->peerTransitRouterId) {
            $res['PeerTransitRouterId'] = $this->peerTransitRouterId;
        }
        if (null !== $this->peerTransitRouterOwnerId) {
            $res['PeerTransitRouterOwnerId'] = $this->peerTransitRouterOwnerId;
        }
        if (null !== $this->peerTransitRouterRegionId) {
            $res['PeerTransitRouterRegionId'] = $this->peerTransitRouterRegionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterAttachmentDescription) {
            $res['TransitRouterAttachmentDescription'] = $this->transitRouterAttachmentDescription;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
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
     * @return transitRouterAttachments
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DefaultLinkType'])) {
            $model->defaultLinkType = $map['DefaultLinkType'];
        }
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['PeerTransitRouterId'])) {
            $model->peerTransitRouterId = $map['PeerTransitRouterId'];
        }
        if (isset($map['PeerTransitRouterOwnerId'])) {
            $model->peerTransitRouterOwnerId = $map['PeerTransitRouterOwnerId'];
        }
        if (isset($map['PeerTransitRouterRegionId'])) {
            $model->peerTransitRouterRegionId = $map['PeerTransitRouterRegionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterAttachmentDescription'])) {
            $model->transitRouterAttachmentDescription = $map['TransitRouterAttachmentDescription'];
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
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
