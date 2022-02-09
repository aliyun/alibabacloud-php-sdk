<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $autoAddNewNodes;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBEndpointDescription;

    /**
     * @var string
     */
    public $DBEndpointId;

    /**
     * @var string
     */
    public $endpointConfig;

    /**
     * @var string
     */
    public $nodes;

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
    public $readWriteMode;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'autoAddNewNodes'       => 'AutoAddNewNodes',
        'DBClusterId'           => 'DBClusterId',
        'DBEndpointDescription' => 'DBEndpointDescription',
        'DBEndpointId'          => 'DBEndpointId',
        'endpointConfig'        => 'EndpointConfig',
        'nodes'                 => 'Nodes',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'readWriteMode'         => 'ReadWriteMode',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoAddNewNodes) {
            $res['AutoAddNewNodes'] = $this->autoAddNewNodes;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBEndpointDescription) {
            $res['DBEndpointDescription'] = $this->DBEndpointDescription;
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = $this->endpointConfig;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->readWriteMode) {
            $res['ReadWriteMode'] = $this->readWriteMode;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoAddNewNodes'])) {
            $model->autoAddNewNodes = $map['AutoAddNewNodes'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBEndpointDescription'])) {
            $model->DBEndpointDescription = $map['DBEndpointDescription'];
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['EndpointConfig'])) {
            $model->endpointConfig = $map['EndpointConfig'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReadWriteMode'])) {
            $model->readWriteMode = $map['ReadWriteMode'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
