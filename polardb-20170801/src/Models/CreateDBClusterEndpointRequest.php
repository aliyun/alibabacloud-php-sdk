<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDBClusterEndpointRequest extends Model
{
    /**
     * @description Specifies whether to automatically associate newly added nodes with the cluster endpoint. Valid values:
     *
     *   **Enable**: Newly added nodes are automatically associated with the cluster endpoint.
     *   **Disable**: Newly added nodes are not automatically associated with the cluster endpoint.
     *
     * Default value: **Disable**.
     * @example Disable
     *
     * @var string
     */
    public $autoAddNewNodes;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. The token is case-sensitive.
     *
     * @example 6000170000591aed949d0f******************
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of cluster.
     *
     * This parameter is required.
     * @example pc-**************
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
     * @description The advanced configurations of the cluster endpoint. You must specify the configurations in the JSON format. You can specify the configurations of the following attributes: consistency level, transaction splitting, connection pool, and offload reads from the primary node.
     *
     *   Specify the consistency level in the format of `{"ConsistLevel":"Consistency level"}`. Default value: 1. Valid values:
     *
     *   **0**: eventual consistency.
     *   **1**: session consistency.
     *   **2**: global consistency.
     *
     *   Specify the transaction splitting feature in the format of `{"DistributedTransaction":"Transaction splitting"}`. Valid values:
     *
     *   **on**: enables the transaction splitting feature. By default, the feature is enabled.
     *   **off**: disables the transaction splitting feature.
     *
     *   Specify the offload reads from the primary node feature in the format of `{"MasterAcceptReads":"Offload reads from the primary node"}`. Default value: off. Valid values:
     *
     *   **on**: The primary node accepts read requests.
     *   **off**: The primary node does not accept read requests.
     *
     *   Specify the connection pool in the format of `{"ConnectionPersist":"Connection pool"}`. Default value: off. Valid values:
     *
     *   **off**: disables the connection pool.
     *   **Session**: enables the session-level connection pool.
     *   **Transaction**: enables the transaction-level connection pool.
     *
     * >- Only PolarDB for MySQL supports global consistency.
     * >- If the **ReadWriteMode** parameter is set to **ReadOnly**, the consistency level must be **0**.
     * >- You can use one record to specify the consistency level, transaction splitting, connection pool, and offload reads from the primary node features, such as `{"ConsistLevel":"1","DistributedTransaction":"on","ConnectionPersist":"Session","MasterAcceptReads":"on"}`.
     * >- The transaction splitting settings are restricted by the consistency level settings. For example, if you set the consistency level to **0**, transaction splitting cannot be enabled. If you set the consistency level to **1** or **2**, transaction splitting can be enabled.
     * @example {"ConsistLevel": "1","DistributedTransaction": "on"}
     *
     * @var string
     */
    public $endpointConfig;

    /**
     * @description The type of the cluster endpoint. Set the value to **Custom**.
     *
     * This parameter is required.
     * @example Custom
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The reader nodes that you want to associate with the endpoint. If you want to specify multiple reader nodes, separate the reader nodes with commas (,). If you do not specify this parameter, all nodes are used.
     *
     * >- You need to specify the role name of each node for a PolarDB for PostgreSQL cluster or a PolarDB for PostgreSQL (Compatible with Oracle) cluster. Example: `Writer, Reader1, Reader2`.
     * >- If you set **ReadWriteMode** to **ReadOnly**, you can associate only one node with the endpoint. If the only node becomes faulty, the cluster endpoint may be unavailable for up to 1 hour. We recommend that you associate more than one node with the cluster endpoint in production environments. We recommend that you associate at least two nodes with the cluster endpoint to improve service availability.
     * >- If you set **ReadWriteMode** to **ReadWrite**, you need to associate at least two nodes with the cluster endpoint.
     * >- PolarDB for PostgreSQL and PolarDB for PostgreSQL (compatible with Oracle) require a primary node.
     * @example pi-**********,pi-*********
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
     *   **ReadWrite**: receives and forwards read and write requests. Automatic read/write splitting is enabled.
     *   **ReadOnly**: The account has the read-only permissions on the database.
     *
     * Default value: **ReadOnly**.
     * @example ReadOnly
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
        'clientToken'           => 'ClientToken',
        'DBClusterId'           => 'DBClusterId',
        'DBEndpointDescription' => 'DBEndpointDescription',
        'endpointConfig'        => 'EndpointConfig',
        'endpointType'          => 'EndpointType',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBEndpointDescription) {
            $res['DBEndpointDescription'] = $this->DBEndpointDescription;
        }
        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = $this->endpointConfig;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
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
     * @return CreateDBClusterEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoAddNewNodes'])) {
            $model->autoAddNewNodes = $map['AutoAddNewNodes'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBEndpointDescription'])) {
            $model->DBEndpointDescription = $map['DBEndpointDescription'];
        }
        if (isset($map['EndpointConfig'])) {
            $model->endpointConfig = $map['EndpointConfig'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
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
