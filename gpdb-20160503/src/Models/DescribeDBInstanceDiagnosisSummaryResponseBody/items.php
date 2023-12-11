<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The name of the node.
     *
     * @example gp-t4np568qe9710****-master-100984919
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The IP address of the node.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $nodeAddress;

    /**
     * @description The node group ID.
     *
     * @example -1
     *
     * @var string
     */
    public $nodeCID;

    /**
     * @description The node ID.
     *
     * @example 1
     *
     * @var string
     */
    public $nodeID;

    /**
     * @description The name of the host where the node resides.
     *
     * @example ap-southeast-1.i-t4n4c4ryr0yr441d****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The port number of the node.
     *
     * @example 3000
     *
     * @var string
     */
    public $nodePort;

    /**
     * @description The initial role of the node. Valid values:
     *
     *   **primary**: primary node.
     *   **mirror**: secondary node.
     *
     * If the value of this parameter is the same as that of **NodeRole**, no primary/secondary switchover occurs. If the value of this parameter is different from that of **NodeRole**, a primary/secondary switchover occurs.
     * @example primary
     *
     * @var string
     */
    public $nodePreferredRole;

    /**
     * @description The data synchronization state of the node. Valid values:
     *
     *   **Synced**: The node data is synchronized.
     *   **Not Syncing**: The node data is not synchronized.
     *   **No sync required**: Data synchronization is not required. This value may be returned only for the coordinator node.
     *
     * @example Synced
     *
     * @var string
     */
    public $nodeReplicationMode;

    /**
     * @description The current role of the node. Valid values:
     *
     *   **primary**: primary node.
     *   **mirror**: secondary node.
     *
     * @example primary
     *
     * @var string
     */
    public $nodeRole;

    /**
     * @description The running state of the node. Valid values:
     *
     *   **UP**: The node is running.
     *   **DOWN**: The node is faulty.
     *
     * @example UP
     *
     * @var string
     */
    public $nodeStatus;

    /**
     * @description The type of the node. Valid values:
     *
     *   **master**: primary coordinator node.
     *   **slave**: standby coordinator node.
     *   **segment**: compute node.
     *
     * @example master
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'hostname'            => 'Hostname',
        'nodeAddress'         => 'NodeAddress',
        'nodeCID'             => 'NodeCID',
        'nodeID'              => 'NodeID',
        'nodeName'            => 'NodeName',
        'nodePort'            => 'NodePort',
        'nodePreferredRole'   => 'NodePreferredRole',
        'nodeReplicationMode' => 'NodeReplicationMode',
        'nodeRole'            => 'NodeRole',
        'nodeStatus'          => 'NodeStatus',
        'nodeType'            => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->nodeAddress) {
            $res['NodeAddress'] = $this->nodeAddress;
        }
        if (null !== $this->nodeCID) {
            $res['NodeCID'] = $this->nodeCID;
        }
        if (null !== $this->nodeID) {
            $res['NodeID'] = $this->nodeID;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodePort) {
            $res['NodePort'] = $this->nodePort;
        }
        if (null !== $this->nodePreferredRole) {
            $res['NodePreferredRole'] = $this->nodePreferredRole;
        }
        if (null !== $this->nodeReplicationMode) {
            $res['NodeReplicationMode'] = $this->nodeReplicationMode;
        }
        if (null !== $this->nodeRole) {
            $res['NodeRole'] = $this->nodeRole;
        }
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['NodeAddress'])) {
            $model->nodeAddress = $map['NodeAddress'];
        }
        if (isset($map['NodeCID'])) {
            $model->nodeCID = $map['NodeCID'];
        }
        if (isset($map['NodeID'])) {
            $model->nodeID = $map['NodeID'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodePort'])) {
            $model->nodePort = $map['NodePort'];
        }
        if (isset($map['NodePreferredRole'])) {
            $model->nodePreferredRole = $map['NodePreferredRole'];
        }
        if (isset($map['NodeReplicationMode'])) {
            $model->nodeReplicationMode = $map['NodeReplicationMode'];
        }
        if (isset($map['NodeRole'])) {
            $model->nodeRole = $map['NodeRole'];
        }
        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
