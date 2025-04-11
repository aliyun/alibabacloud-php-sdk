<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPeerAttachmentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPeerAttachmentsResponseBody\transitRouterAttachments\tags;

class transitRouterAttachments extends Model
{
    /**
     * @var bool
     */
    public $autoPublishRouteEnabled;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthType;

    /**
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $defaultLinkType;

    /**
     * @var string
     */
    public $geographicSpanId;

    /**
     * @var string
     */
    public $peerTransitRouterId;

    /**
     * @var int
     */
    public $peerTransitRouterOwnerId;

    /**
     * @var string
     */
    public $peerTransitRouterRegionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @var string
     */
    public $transitRouterAttachmentName;

    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'autoPublishRouteEnabled' => 'AutoPublishRouteEnabled',
        'bandwidth' => 'Bandwidth',
        'bandwidthType' => 'BandwidthType',
        'cenBandwidthPackageId' => 'CenBandwidthPackageId',
        'cenId' => 'CenId',
        'creationTime' => 'CreationTime',
        'defaultLinkType' => 'DefaultLinkType',
        'geographicSpanId' => 'GeographicSpanId',
        'peerTransitRouterId' => 'PeerTransitRouterId',
        'peerTransitRouterOwnerId' => 'PeerTransitRouterOwnerId',
        'peerTransitRouterRegionId' => 'PeerTransitRouterRegionId',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'tags' => 'Tags',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterAttachmentName' => 'TransitRouterAttachmentName',
        'transitRouterId' => 'TransitRouterId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
