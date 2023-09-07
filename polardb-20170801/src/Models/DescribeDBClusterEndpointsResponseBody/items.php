<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponseBody\items\addressItems;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The details of the endpoint.
     *
     * @var addressItems[]
     */
    public $addressItems;

    /**
     * @description Indicates whether new nodes are automatically associated with the default cluster endpoint. Valid values:
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
     * @example pc-bp1s826a1up******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the endpoint.
     *
     * @example test
     *
     * @var string
     */
    public $DBEndpointDescription;

    /**
     * @description The ID of the endpoint.
     *
     * @example pe-*************
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The advanced configurations of the endpoint.
     *
     *   **DistributedTransaction**: indicates whether transaction splitting is enabled. Valid values:
     *
     *   **on**
     *   **off**
     *
     *   **ConsistLevel**: the consistency level of sessions. Valid values:
     *
     *   **0**: eventual consistency.
     *   **1**: session consistency.
     *   **2**: global consistency.
     *
     *   **LoadBalanceStrategy**: the load balancing policy that automatically schedules loads. Only **load** may be returned.
     *
     *   **MasterAcceptReads**: indicates whether the primary node processes read requests. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example {\"DistributedTransaction\":\"off\",\"ConsistLevel\":\"0\",\"LoadBalanceStrategy\":\"load\",\"MasterAcceptReads\":\"on\"}
     *
     * @var string
     */
    public $endpointConfig;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Cluster**: the default endpoint.
     *   **Primary**: the primary endpoint.
     *   **Custom**: a custom cluster endpoint.
     *
     * @example Custom
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The role name of each node in the endpoint. The role name of the primary node is **Writer**. Multiple read-only nodes can be associated with an endpoint. Therefore, the role name of each read-only node is suffixed with a number, such as **Reader1** and **Reader2**.
     *
     * > This parameter is valid only for PolarDB for PostgreSQL clusters and PolarDB for PostgreSQL (Compatible with Oracle)) clusters.
     * @example Reader1
     *
     * @var string
     */
    public $nodeWithRoles;

    /**
     * @description The nodes in the endpoint.
     *
     * @example pi-***************,pi-***************
     *
     * @var string
     */
    public $nodes;

    /**
     * @description The read/write mode. Valid values:
     *
     *   **ReadWrite**: handles read and write requests. Automatic read/write splitting is enabled.
     *   **ReadOnly**: handles read-only requests.
     *
     * @example ReadOnly
     *
     * @var string
     */
    public $readWriteMode;
    protected $_name = [
        'addressItems'          => 'AddressItems',
        'autoAddNewNodes'       => 'AutoAddNewNodes',
        'DBClusterId'           => 'DBClusterId',
        'DBEndpointDescription' => 'DBEndpointDescription',
        'DBEndpointId'          => 'DBEndpointId',
        'endpointConfig'        => 'EndpointConfig',
        'endpointType'          => 'EndpointType',
        'nodeWithRoles'         => 'NodeWithRoles',
        'nodes'                 => 'Nodes',
        'readWriteMode'         => 'ReadWriteMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressItems) {
            $res['AddressItems'] = [];
            if (null !== $this->addressItems && \is_array($this->addressItems)) {
                $n = 0;
                foreach ($this->addressItems as $item) {
                    $res['AddressItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->nodeWithRoles) {
            $res['NodeWithRoles'] = $this->nodeWithRoles;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->readWriteMode) {
            $res['ReadWriteMode'] = $this->readWriteMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressItems'])) {
            if (!empty($map['AddressItems'])) {
                $model->addressItems = [];
                $n                   = 0;
                foreach ($map['AddressItems'] as $item) {
                    $model->addressItems[$n++] = null !== $item ? addressItems::fromMap($item) : $item;
                }
            }
        }
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
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['NodeWithRoles'])) {
            $model->nodeWithRoles = $map['NodeWithRoles'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['ReadWriteMode'])) {
            $model->readWriteMode = $map['ReadWriteMode'];
        }

        return $model;
    }
}
