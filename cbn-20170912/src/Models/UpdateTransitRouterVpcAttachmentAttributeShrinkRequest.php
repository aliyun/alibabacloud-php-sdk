<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class UpdateTransitRouterVpcAttachmentAttributeShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPublishRouteEnabled;
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
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
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
    public $transitRouterVPCAttachmentOptionsShrink;
    protected $_name = [
        'autoPublishRouteEnabled'                 => 'AutoPublishRouteEnabled',
        'clientToken'                             => 'ClientToken',
        'dryRun'                                  => 'DryRun',
        'ownerAccount'                            => 'OwnerAccount',
        'ownerId'                                 => 'OwnerId',
        'resourceOwnerAccount'                    => 'ResourceOwnerAccount',
        'resourceOwnerId'                         => 'ResourceOwnerId',
        'transitRouterAttachmentDescription'      => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentId'               => 'TransitRouterAttachmentId',
        'transitRouterAttachmentName'             => 'TransitRouterAttachmentName',
        'transitRouterVPCAttachmentOptionsShrink' => 'TransitRouterVPCAttachmentOptions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPublishRouteEnabled) {
            $res['AutoPublishRouteEnabled'] = $this->autoPublishRouteEnabled;
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

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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

        if (null !== $this->transitRouterVPCAttachmentOptionsShrink) {
            $res['TransitRouterVPCAttachmentOptions'] = $this->transitRouterVPCAttachmentOptionsShrink;
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

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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

        if (isset($map['TransitRouterVPCAttachmentOptions'])) {
            $model->transitRouterVPCAttachmentOptionsShrink = $map['TransitRouterVPCAttachmentOptions'];
        }

        return $model;
    }
}
