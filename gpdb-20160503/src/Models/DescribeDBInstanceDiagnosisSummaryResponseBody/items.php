<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $nodeAddress;

    /**
     * @var string
     */
    public $nodeCID;

    /**
     * @var string
     */
    public $nodeID;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodePort;

    /**
     * @var string
     */
    public $nodePreferredRole;

    /**
     * @var string
     */
    public $nodeReplicationMode;

    /**
     * @var string
     */
    public $nodeRole;

    /**
     * @var string
     */
    public $nodeStatus;

    /**
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
