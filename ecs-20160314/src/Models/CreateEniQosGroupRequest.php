<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class CreateEniQosGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $qosGroupName;

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
     * @var int
     */
    public $rx;

    /**
     * @var int
     */
    public $rxPps;

    /**
     * @var int
     */
    public $tx;

    /**
     * @var int
     */
    public $txPps;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'ownerId'              => 'OwnerId',
        'qosGroupName'         => 'QosGroupName',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'rx'                   => 'Rx',
        'rxPps'                => 'RxPps',
        'tx'                   => 'Tx',
        'txPps'                => 'TxPps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qosGroupName) {
            $res['QosGroupName'] = $this->qosGroupName;
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
        if (null !== $this->rx) {
            $res['Rx'] = $this->rx;
        }
        if (null !== $this->rxPps) {
            $res['RxPps'] = $this->rxPps;
        }
        if (null !== $this->tx) {
            $res['Tx'] = $this->tx;
        }
        if (null !== $this->txPps) {
            $res['TxPps'] = $this->txPps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEniQosGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QosGroupName'])) {
            $model->qosGroupName = $map['QosGroupName'];
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
        if (isset($map['Rx'])) {
            $model->rx = $map['Rx'];
        }
        if (isset($map['RxPps'])) {
            $model->rxPps = $map['RxPps'];
        }
        if (isset($map['Tx'])) {
            $model->tx = $map['Tx'];
        }
        if (isset($map['TxPps'])) {
            $model->txPps = $map['TxPps'];
        }

        return $model;
    }
}
