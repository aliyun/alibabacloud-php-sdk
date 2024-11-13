<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest\connectionTrackingConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest\enhancedNetwork;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest\networkInterfaceTrafficConfig;
use AlibabaCloud\Tea\Model;

class ModifyNetworkInterfaceAttributeRequest extends Model
{
    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @var connectionTrackingConfiguration
     */
    public $connectionTrackingConfiguration;

    /**
     * @description Specifies whether to release the ENI when the associated instance is released. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $deleteOnRelease;

    /**
     * @description The description of the ENI. The description must be 2 to 255 characters in length and cannot start with [http:// or https://](http://https://。).
     *
     * This parameter is left empty by default.
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is not publicly available.
     *
     * @var enhancedNetwork
     */
    public $enhancedNetwork;

    /**
     * @description The ID of the ENI.
     *
     * This parameter is required.
     * @example eni-bp67acfmxazb4p****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The name of the ENI. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * This parameter is left empty by default.
     * @example eniTestName
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The communication parameters of the ENI.
     *
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
     * @description The number of queues supported by the ENI. Valid values: 1 to 2048.
     *
     *   You can change only the number of queues supported by the secondary ENI.
     *   You can change the number of queues supported by the secondary ENI only when the ENI is in the `Available` state or the ENI is attached (`InUse`) to an instance that is in the `Stopped` state.
     *   The number of queues supported by the secondary ENI cannot exceed the maximum number of queues that the instance allows for each ENI. The total number of queues for all ENIs on the instance cannot exceed the queue quota that the instance allows. To query the maximum number of queues per ENI and the queue quota for an instance type, you can call the [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) operation and check the values of `MaximumQueueNumberPerEni` and `TotalEniQueueQuantity` in the response.
     *
     * @example 8
     *
     * @var int
     */
    public $queueNumber;

    /**
     * @description The region ID of the ENI. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
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
     * @description The receive (Rx) queue depth of the ENI.
     *
     * Take note of the following items:
     *
     *   The Rx queue depth of an ENI must be the same as the transmit (Tx) queue depth of the ENI. Valid values: powers of 2 in the range of 8192 to 16384.
     *   A larger Rx queue depth yields higher inbound throughput but consumes more memory.
     *
     * @example 8192
     *
     * @var int
     */
    public $rxQueueSize;

    /**
     * @description The IDs of the security groups to which to add the secondary ENI. The secondary ENI is added to the specified security groups and removed from the original security groups.
     *
     *   The valid values of N vary based on the maximum number of security groups to which an ENI can be added. For more information, see the [Security group limits](~~25412#SecurityGroupQuota~~) section of the "Limits and quotas" topic.
     *   The new security groups take effect after a short delay.
     *
     * @var string[]
     */
    public $securityGroupId;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $sourceDestCheck;

    /**
     * @description The Tx queue depth of the ENI.
     *
     * Take note of the following items:
     *
     *   The Tx queue depth of an ENI must be the same as the Rx queue depth of the ENI. Valid values: powers of 2 in the range of 8192 to 16384.
     *   A larger Tx queue depth yields higher outbound throughput but consumes more memory.
     *
     * @example 8192
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionTrackingConfiguration) {
            $res['ConnectionTrackingConfiguration'] = null !== $this->connectionTrackingConfiguration ? $this->connectionTrackingConfiguration->toMap() : null;
        }
        if (null !== $this->deleteOnRelease) {
            $res['DeleteOnRelease'] = $this->deleteOnRelease;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enhancedNetwork) {
            $res['EnhancedNetwork'] = null !== $this->enhancedNetwork ? $this->enhancedNetwork->toMap() : null;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->networkInterfaceTrafficConfig) {
            $res['NetworkInterfaceTrafficConfig'] = null !== $this->networkInterfaceTrafficConfig ? $this->networkInterfaceTrafficConfig->toMap() : null;
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
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sourceDestCheck) {
            $res['SourceDestCheck'] = $this->sourceDestCheck;
        }
        if (null !== $this->txQueueSize) {
            $res['TxQueueSize'] = $this->txQueueSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNetworkInterfaceAttributeRequest
     */
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
                $model->securityGroupId = $map['SecurityGroupId'];
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
