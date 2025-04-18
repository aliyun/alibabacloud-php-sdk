<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

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
    public $polarSccTimeoutAction;

    /**
     * @var string
     */
    public $polarSccWaitTimeout;

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

    /**
     * @var string
     */
    public $sccMode;
    protected $_name = [
        'autoAddNewNodes' => 'AutoAddNewNodes',
        'DBClusterId' => 'DBClusterId',
        'DBEndpointDescription' => 'DBEndpointDescription',
        'DBEndpointId' => 'DBEndpointId',
        'endpointConfig' => 'EndpointConfig',
        'nodes' => 'Nodes',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'polarSccTimeoutAction' => 'PolarSccTimeoutAction',
        'polarSccWaitTimeout' => 'PolarSccWaitTimeout',
        'readWriteMode' => 'ReadWriteMode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sccMode' => 'SccMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->polarSccTimeoutAction) {
            $res['PolarSccTimeoutAction'] = $this->polarSccTimeoutAction;
        }

        if (null !== $this->polarSccWaitTimeout) {
            $res['PolarSccWaitTimeout'] = $this->polarSccWaitTimeout;
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

        if (null !== $this->sccMode) {
            $res['SccMode'] = $this->sccMode;
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

        if (isset($map['PolarSccTimeoutAction'])) {
            $model->polarSccTimeoutAction = $map['PolarSccTimeoutAction'];
        }

        if (isset($map['PolarSccWaitTimeout'])) {
            $model->polarSccWaitTimeout = $map['PolarSccWaitTimeout'];
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

        if (isset($map['SccMode'])) {
            $model->sccMode = $map['SccMode'];
        }

        return $model;
    }
}
