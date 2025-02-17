<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest\connectionTrackingConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest\enhancedNetwork;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest\networkInterfaceTrafficConfig;

class ModifyNetworkInterfaceAttributeRequest extends Model
{
    /**
     * @var connectionTrackingConfiguration
     */
    public $connectionTrackingConfiguration;
    /**
     * @var bool
     */
    public $deleteOnRelease;
    /**
     * @var string
     */
    public $description;
    /**
     * @var enhancedNetwork
     */
    public $enhancedNetwork;
    /**
     * @var string
     */
    public $networkInterfaceId;
    /**
     * @var string
     */
    public $networkInterfaceName;
    /**
     * @var networkInterfaceTrafficConfig
     */
    public $networkInterfaceTrafficConfig;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var int
     */
    public $queueNumber;
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
    public $rxQueueSize;
    /**
     * @var string[]
     */
    public $securityGroupId;
    /**
     * @var bool
     */
    public $sourceDestCheck;
    /**
     * @var int
     */
    public $txQueueSize;
    protected $_name = [
        'connectionTrackingConfiguration' => 'ConnectionTrackingConfiguration',
        'deleteOnRelease'                 => 'DeleteOnRelease',
        'description'                     => 'Description',
        'enhancedNetwork'                 => 'EnhancedNetwork',
        'networkInterfaceId'              => 'NetworkInterfaceId',
        'networkInterfaceName'            => 'NetworkInterfaceName',
        'networkInterfaceTrafficConfig'   => 'NetworkInterfaceTrafficConfig',
        'ownerAccount'                    => 'OwnerAccount',
        'ownerId'                         => 'OwnerId',
        'queueNumber'                     => 'QueueNumber',
        'regionId'                        => 'RegionId',
        'resourceOwnerAccount'            => 'ResourceOwnerAccount',
        'resourceOwnerId'                 => 'ResourceOwnerId',
        'rxQueueSize'                     => 'RxQueueSize',
        'securityGroupId'                 => 'SecurityGroupId',
        'sourceDestCheck'                 => 'SourceDestCheck',
        'txQueueSize'                     => 'TxQueueSize',
    ];

    public function validate()
    {
        if (null !== $this->connectionTrackingConfiguration) {
            $this->connectionTrackingConfiguration->validate();
        }
        if (null !== $this->enhancedNetwork) {
            $this->enhancedNetwork->validate();
        }
        if (null !== $this->networkInterfaceTrafficConfig) {
            $this->networkInterfaceTrafficConfig->validate();
        }
        if (\is_array($this->securityGroupId)) {
            Model::validateArray($this->securityGroupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionTrackingConfiguration) {
            $res['ConnectionTrackingConfiguration'] = null !== $this->connectionTrackingConfiguration ? $this->connectionTrackingConfiguration->toArray($noStream) : $this->connectionTrackingConfiguration;
        }

        if (null !== $this->deleteOnRelease) {
            $res['DeleteOnRelease'] = $this->deleteOnRelease;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enhancedNetwork) {
            $res['EnhancedNetwork'] = null !== $this->enhancedNetwork ? $this->enhancedNetwork->toArray($noStream) : $this->enhancedNetwork;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }

        if (null !== $this->networkInterfaceTrafficConfig) {
            $res['NetworkInterfaceTrafficConfig'] = null !== $this->networkInterfaceTrafficConfig ? $this->networkInterfaceTrafficConfig->toArray($noStream) : $this->networkInterfaceTrafficConfig;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->queueNumber) {
            $res['QueueNumber'] = $this->queueNumber;
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

        if (null !== $this->rxQueueSize) {
            $res['RxQueueSize'] = $this->rxQueueSize;
        }

        if (null !== $this->securityGroupId) {
            if (\is_array($this->securityGroupId)) {
                $res['SecurityGroupId'] = [];
                $n1                     = 0;
                foreach ($this->securityGroupId as $item1) {
                    $res['SecurityGroupId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceDestCheck) {
            $res['SourceDestCheck'] = $this->sourceDestCheck;
        }

        if (null !== $this->txQueueSize) {
            $res['TxQueueSize'] = $this->txQueueSize;
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
        if (isset($map['ConnectionTrackingConfiguration'])) {
            $model->connectionTrackingConfiguration = connectionTrackingConfiguration::fromMap($map['ConnectionTrackingConfiguration']);
        }

        if (isset($map['DeleteOnRelease'])) {
            $model->deleteOnRelease = $map['DeleteOnRelease'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnhancedNetwork'])) {
            $model->enhancedNetwork = enhancedNetwork::fromMap($map['EnhancedNetwork']);
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }

        if (isset($map['NetworkInterfaceTrafficConfig'])) {
            $model->networkInterfaceTrafficConfig = networkInterfaceTrafficConfig::fromMap($map['NetworkInterfaceTrafficConfig']);
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['QueueNumber'])) {
            $model->queueNumber = $map['QueueNumber'];
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

        if (isset($map['RxQueueSize'])) {
            $model->rxQueueSize = $map['RxQueueSize'];
        }

        if (isset($map['SecurityGroupId'])) {
            if (!empty($map['SecurityGroupId'])) {
                $model->securityGroupId = [];
                $n1                     = 0;
                foreach ($map['SecurityGroupId'] as $item1) {
                    $model->securityGroupId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceDestCheck'])) {
            $model->sourceDestCheck = $map['SourceDestCheck'];
        }

        if (isset($map['TxQueueSize'])) {
            $model->txQueueSize = $map['TxQueueSize'];
        }

        return $model;
    }
}
