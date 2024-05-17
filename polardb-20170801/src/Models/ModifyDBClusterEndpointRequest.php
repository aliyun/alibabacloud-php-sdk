<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterEndpointRequest extends Model
{
    /**
     * @description Specifies whether to automatically associate newly added nodes with the cluster endpoint. Default value: Disable. Valid values:
     *
     *   **Enable**
     *   **Disable**
     *
     * @example Enable
     *
     * @var string
     */
    public $autoAddNewNodes;

    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example pc-*************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the custom cluster endpoint.
     *
     * @example test
     *
     * @var string
     */
    public $DBEndpointDescription;

    /**
     * @description The ID of the endpoint.
     *
     * This parameter is required.
     * @example pe-**************
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The advanced configurations of the cluster endpoint, which are in the JSON format. You can specify the configurations of the following attributes: consistency level, transaction splitting, connection pool, and primary node accepts read requests.
     *
     *   Specifies the load balancing policy in the format of `{\\"LoadBalancePolicy\\":\\"Selected value\\"}`. Default value: 0. Valid values:
     *
     *   **0**: connections-based load balancing
     *   **1**: active requests-based load balancing
     *
     *   Specifies whether to enable the primary node accepts read requests feature in the format of `{\\"MasterAcceptReads\\":\\"Selected value\\"}`. Default value: on. Valid values:
     *
     *   **on**
     *   **off**
     *
     *   Specifies whether to enable the transaction splitting feature in the format of `{\\"DistributedTransaction\\":\\"Selected value\\"}`. Default value: on. Valid values:
     *
     *   **on**
     *   **off**
     *
     *   Specifies the consistency level in the format of `{\\"ConsistLevel\\":\\"Selected value\\"}`. Default value: 1. Valid values:
     *
     *   **0**: eventual consistency (weak)
     *   **1**: session consistency (medium)
     *   **2**: global consistency (strong)
     *
     *   Specifies the connection pool in the format of `{\\"ConnectionPersist\\":\\"Selected value\\"}`. Default value: off. Valid values:
     *
     *   **off**: disables the connection pool.
     *   **Session**: enables the session-level connection pool.
     *   **Transaction**: enables the transaction-level connection pool.
     *
     *   Specifies whether to enable the parallel query feature in the format of `{\\"MaxParallelDegree\\":\\"Selected value\\"}`. Default value: off. Valid values:
     *
     *   **on**
     *   **off**
     *
     *   Specifies whether to enable the automatic request distribution between row store and column store nodes feature in the format of `{\\"EnableHtapImci\\":\\"Selected value\\"}`. Default value: off. Valid values:
     *
     *   **on**
     *   **off**
     *
     *   Specifies whether to enable the overload protection feature in the format of `{\\"EnableOverloadThrottle\\":\\"Selected value\\"}`. Default value: off. Valid values:
     *
     *   **on**
     *   **off**
     *
     * >
     *
     *   You can specify the transaction splitting, primary node accepts read requests, connection pool, and overload protection features for a PolarDB for MySQL cluster only if ReadWriteMode is set to ReadWrite for the cluster endpoint.
     *
     *   If the read /write mode of a PolarDB for MySQL cluster is set to **Read-only**, the **Connection-based SLB** and **Active Request-based SLB** SLB policies are supported. The **Read-write (Automatic read /write splitting) **mode of the cluster supports** Active Request-based SLB** policy.
     *   If ReadWriteMode is set to **ReadWrite** for the cluster endpoint of a PolarDB for MySQL cluster or if ReadWriteMode is set to **ReadOnly** and the load balancing policy is set to **active requests-based load balancing**, the automatic request distribution between row store and column store nodes feature is supported.
     *   Only PolarDB for MySQL supports global consistency.
     *   If the **ReadWriteMode** parameter is set to **ReadOnly**, the consistency level must be **0**.
     *   You can specify the consistency level, transaction splitting, connection pool, and primary node accepts read requests features at a time, such as `{\\"ConsistLevel\\":\\"1\\",\\"DistributedTransaction\\":\\"on\\",\\"ConnectionPersist\\":\\"Session\\",\\"MasterAcceptReads\\":\\"on\\"}`.
     *   The transaction splitting settings are restricted by the consistency level settings. For example, if you set the consistency level to **0**, transaction splitting cannot be enabled. If you set the consistency level to **1** or **2**, transaction splitting can be enabled.
     *
     * @example {"ConsistLevel":"1","DistributedTransaction":"on","MasterAcceptReads":"off","ConnectionPersist": "on"}
     *
     * @var string
     */
    public $endpointConfig;

    /**
     * @description The reader nodes to be associated with the endpoint. If you need to specify multiple reader nodes, separate the reader nodes with commas (,). If you do not specify this parameter, the predefined nodes are used by default.
     *
     * >
     *
     *   You must specify the node ID for each PolarDB for MySQL cluster.
     *
     *   You must specify the role name of each node for each PolarDB for PostgreSQL or PolarDB for Oracle cluster. Example: `Writer,Reader1,Reader2`.
     *
     *   If you set **ReadWriteMode** to **ReadOnly**, only one node can be associated with the cluster endpoint. If the only node becomes faulty, the cluster endpoint may be unavailable for up to an hour. We recommend that you do not associate only one node with the cluster endpoint in production environments. We recommend that you associate at least two nodes with the cluster endpoint to improve service availability.
     *
     *   If you set **ReadWriteMode** to **ReadWrite**, you must associate at least two nodes with the cluster endpoint.
     *
     *   No limits are imposed on the two nodes that you select for each PolarDB for MySQL cluster. If the two nodes are read-only nodes, write requests are forwarded to the primary node.
     *   The following limit applies to PolarDB for PostgreSQL and PolarDB for Oracle clusters: One of the selected nodes must be the primary node.
     *
     * @example pi-**************,pi-*************
     *
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
     * @description The read/write mode. Valid values:
     *
     *   **ReadWrite**: The cluster endpoint handles read and write requests. Automatic read/write splitting is enabled.
     *   **ReadOnly**: The cluster endpoint handles read-only requests.
     *
     * @example ReadWrite
     *
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
