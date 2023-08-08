<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesRequest\addZoneMappings;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesRequest\removeZoneMappings;
use AlibabaCloud\Tea\Model;

class UpdateTransitRouterVpcAttachmentZonesRequest extends Model
{
    /**
     * @description The zones and vSwitches that you want to add to the VPC connection.
     *
     * @var addZoneMappings[]
     */
    public $addZoneMappings;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not set this parameter, ClientToken is set to the value of RequestId. The value of RequestId for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
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
     * @description The zones and vSwitches that you want to remove from the VPC connection.
     *
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
     * @description The ID of the VPC connection.
     *
     * @example tr-attach-9bbqyygouv4cpn****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addZoneMappings) {
            $res['AddZoneMappings'] = [];
            if (null !== $this->addZoneMappings && \is_array($this->addZoneMappings)) {
                $n = 0;
                foreach ($this->addZoneMappings as $item) {
                    $res['AddZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['RemoveZoneMappings'] = [];
            if (null !== $this->removeZoneMappings && \is_array($this->removeZoneMappings)) {
                $n = 0;
                foreach ($this->removeZoneMappings as $item) {
                    $res['RemoveZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return UpdateTransitRouterVpcAttachmentZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddZoneMappings'])) {
            if (!empty($map['AddZoneMappings'])) {
                $model->addZoneMappings = [];
                $n                      = 0;
                foreach ($map['AddZoneMappings'] as $item) {
                    $model->addZoneMappings[$n++] = null !== $item ? addZoneMappings::fromMap($item) : $item;
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
                $n                         = 0;
                foreach ($map['RemoveZoneMappings'] as $item) {
                    $model->removeZoneMappings[$n++] = null !== $item ? removeZoneMappings::fromMap($item) : $item;
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
