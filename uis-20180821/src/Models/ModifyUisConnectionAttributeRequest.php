<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class ModifyUisConnectionAttributeRequest extends Model
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
    public $uisConnectionId;

    /**
     * @var string
     */
    public $uisProtocol;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $greConfig;

    /**
     * @var string
     */
    public $sslConfig;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'uisNodeId'            => 'UisNodeId',
        'uisConnectionId'      => 'UisConnectionId',
        'uisProtocol'          => 'UisProtocol',
        'description'          => 'Description',
        'name'                 => 'Name',
        'greConfig'            => 'GreConfig',
        'sslConfig'            => 'SslConfig',
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
        if (null !== $this->uisConnectionId) {
            $res['UisConnectionId'] = $this->uisConnectionId;
        }
        if (null !== $this->uisProtocol) {
            $res['UisProtocol'] = $this->uisProtocol;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->greConfig) {
            $res['GreConfig'] = $this->greConfig;
        }
        if (null !== $this->sslConfig) {
            $res['SslConfig'] = $this->sslConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUisConnectionAttributeRequest
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
        if (isset($map['UisConnectionId'])) {
            $model->uisConnectionId = $map['UisConnectionId'];
        }
        if (isset($map['UisProtocol'])) {
            $model->uisProtocol = $map['UisProtocol'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GreConfig'])) {
            $model->greConfig = $map['GreConfig'];
        }
        if (isset($map['SslConfig'])) {
            $model->sslConfig = $map['SslConfig'];
        }

        return $model;
    }
}
