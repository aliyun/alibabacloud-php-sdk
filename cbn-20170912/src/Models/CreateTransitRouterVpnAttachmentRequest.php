<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpnAttachmentRequest\tag;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpnAttachmentRequest\zone;

class CreateTransitRouterVpnAttachmentRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPublishRouteEnabled;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clientToken;

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

    /**
     * @var string
     */
    public $vpnId;

    /**
     * @var int
     */
    public $vpnOwnerId;

    /**
     * @var zone[]
     */
    public $zone;
    protected $_name = [
        'autoPublishRouteEnabled' => 'AutoPublishRouteEnabled',
        'cenId' => 'CenId',
        'chargeType' => 'ChargeType',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentName' => 'TransitRouterAttachmentName',
        'transitRouterId' => 'TransitRouterId',
        'vpnId' => 'VpnId',
        'vpnOwnerId' => 'VpnOwnerId',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->zone)) {
            Model::validateArray($this->zone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPublishRouteEnabled) {
            $res['AutoPublishRouteEnabled'] = $this->autoPublishRouteEnabled;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
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

        if (null !== $this->vpnId) {
            $res['VpnId'] = $this->vpnId;
        }

        if (null !== $this->vpnOwnerId) {
            $res['VpnOwnerId'] = $this->vpnOwnerId;
        }

        if (null !== $this->zone) {
            if (\is_array($this->zone)) {
                $res['Zone'] = [];
                $n1 = 0;
                foreach ($this->zone as $item1) {
                    $res['Zone'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
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
                $n1 = 0;
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

        if (isset($map['VpnId'])) {
            $model->vpnId = $map['VpnId'];
        }

        if (isset($map['VpnOwnerId'])) {
            $model->vpnOwnerId = $map['VpnOwnerId'];
        }

        if (isset($map['Zone'])) {
            if (!empty($map['Zone'])) {
                $model->zone = [];
                $n1 = 0;
                foreach ($map['Zone'] as $item1) {
                    $model->zone[$n1++] = zone::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
