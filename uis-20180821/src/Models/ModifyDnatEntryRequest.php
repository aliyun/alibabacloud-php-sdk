<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class ModifyDnatEntryRequest extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $uisNodeId;

    /**
     * @var string
     */
    public $uisDnatId;

    /**
     * @var string
     */
    public $destinationIp;

    /**
     * @var int
     */
    public $destinationPort;

    /**
     * @var string
     */
    public $originalIp;

    /**
     * @var int
     */
    public $originalPort;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'uisNodeId'            => 'UisNodeId',
        'uisDnatId'            => 'UisDnatId',
        'destinationIp'        => 'DestinationIp',
        'destinationPort'      => 'DestinationPort',
        'originalIp'           => 'OriginalIp',
        'originalPort'         => 'OriginalPort',
        'ipProtocol'           => 'IpProtocol',
        'name'                 => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uisNodeId) {
            $res['UisNodeId'] = $this->uisNodeId;
        }
        if (null !== $this->uisDnatId) {
            $res['UisDnatId'] = $this->uisDnatId;
        }
        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->originalIp) {
            $res['OriginalIp'] = $this->originalIp;
        }
        if (null !== $this->originalPort) {
            $res['OriginalPort'] = $this->originalPort;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDnatEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UisNodeId'])) {
            $model->uisNodeId = $map['UisNodeId'];
        }
        if (isset($map['UisDnatId'])) {
            $model->uisDnatId = $map['UisDnatId'];
        }
        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }
        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }
        if (isset($map['OriginalIp'])) {
            $model->originalIp = $map['OriginalIp'];
        }
        if (isset($map['OriginalPort'])) {
            $model->originalPort = $map['OriginalPort'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
