<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterPeerAttachmentRequest\tag;

class CreateTransitRouterPeerAttachmentRequest extends Model
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
    public $clientToken;
    /**
     * @var string
     */
    public $defaultLinkType;
    /**
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
     * @var string
     */
    public $peerTransitRouterId;
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
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $transitRouterAttachmentDescription;
    /**
     * @var string
     */
    public $transitRouterAttachmentName;
    /**
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
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
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
