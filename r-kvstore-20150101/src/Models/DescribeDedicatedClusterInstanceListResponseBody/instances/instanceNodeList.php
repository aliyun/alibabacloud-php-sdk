<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListResponseBody\instances;

use AlibabaCloud\Tea\Model;

class instanceNodeList extends Model
{
    /**
     * @description The ID of the host in the dedicated cluster.
     *
     * @example ch-bp13vf0y9gx3c****
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1e7vl6ygf1yq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the node.
     *
     * @example 17921111
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The IP address of the node.
     *
     * @example 10.0.33.***
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description The node type. Valid values:
     *
     *   **db**: data node.
     *   **proxy**: proxy node.
     *   **normal**: regular node. This value is returned when the instance runs in the standard architecture.
     *
     * @example normal
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The port number that is used to connect to the node.
     *
     * @example 3001
     *
     * @var int
     */
    public $port;

    /**
     * @description The role of the node. Valid values:
     *
     *   **master**: master node
     *   **slave**: replica node
     *
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description The zone ID of the node.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dedicatedHostName' => 'DedicatedHostName',
        'instanceId'        => 'InstanceId',
        'nodeId'            => 'NodeId',
        'nodeIp'            => 'NodeIp',
        'nodeType'          => 'NodeType',
        'port'              => 'Port',
        'role'              => 'Role',
        'zoneId'            => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceNodeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
