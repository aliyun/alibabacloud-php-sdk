<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesRequest\addZoneMappings;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesRequest\removeZoneMappings;

class UpdateTransitRouterVpcAttachmentZonesRequest extends Model
{
    /**
     * @var addZoneMappings[]
     */
    public $addZoneMappings;
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
     * @var removeZoneMappings[]
     */
    public $removeZoneMappings;
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
    public $transitRouterAttachmentId;
    protected $_name = [
        'addZoneMappings'           => 'AddZoneMappings',
        'clientToken'               => 'ClientToken',
        'dryRun'                    => 'DryRun',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'removeZoneMappings'        => 'RemoveZoneMappings',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
    ];

    public function validate()
    {
        if (\is_array($this->addZoneMappings)) {
            Model::validateArray($this->addZoneMappings);
        }
        if (\is_array($this->removeZoneMappings)) {
            Model::validateArray($this->removeZoneMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addZoneMappings) {
            if (\is_array($this->addZoneMappings)) {
                $res['AddZoneMappings'] = [];
                $n1                     = 0;
                foreach ($this->addZoneMappings as $item1) {
                    $res['AddZoneMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->removeZoneMappings) {
            if (\is_array($this->removeZoneMappings)) {
                $res['RemoveZoneMappings'] = [];
                $n1                        = 0;
                foreach ($this->removeZoneMappings as $item1) {
                    $res['RemoveZoneMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
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
        if (isset($map['AddZoneMappings'])) {
            if (!empty($map['AddZoneMappings'])) {
                $model->addZoneMappings = [];
                $n1                     = 0;
                foreach ($map['AddZoneMappings'] as $item1) {
                    $model->addZoneMappings[$n1++] = addZoneMappings::fromMap($item1);
                }
            }
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

        if (isset($map['RemoveZoneMappings'])) {
            if (!empty($map['RemoveZoneMappings'])) {
                $model->removeZoneMappings = [];
                $n1                        = 0;
                foreach ($map['RemoveZoneMappings'] as $item1) {
                    $model->removeZoneMappings[$n1++] = removeZoneMappings::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }

        return $model;
    }
}
