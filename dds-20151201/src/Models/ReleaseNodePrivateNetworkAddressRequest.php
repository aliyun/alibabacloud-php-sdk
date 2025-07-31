<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ReleaseNodePrivateNetworkAddressRequest extends Model
{
    /**
     * @description The public endpoint type. Valid values:
     *
     *   **SRV**
     *   **Normal**
     *
     * >  This parameter is valid only when you want to release an SRV endpoint.
     *
     * @example SRV
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description The ID of the sharded cluster instance.
     *
     * This parameter is required.
     *
     * @example dds-bp1a7009eb24****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The network type of the internal endpoint. Valid values:
     *
     *   **VPC**: virtual private cloud (VPC).
     *   **Classic**: classic network.
     *
     * >  You can call the [DescribeShardingNetworkAddress](https://help.aliyun.com/document_detail/62135.html) operation to query the network type of the internal endpoint.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The ID of the shard or Configserver node.
     *
     * >  You can call the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/62010.html) operation to query the ID of the shard or Configserver node.
     *
     * This parameter is required.
     *
     * @example d-bp128a003436****
     *
     * @var string
     */
    public $nodeId;

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
    protected $_name = [
        'connectionType' => 'ConnectionType',
        'DBInstanceId' => 'DBInstanceId',
        'networkType' => 'NetworkType',
        'nodeId' => 'NodeId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseNodePrivateNetworkAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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

        return $model;
    }
}
