<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\DBClusterNodes;

use AlibabaCloud\Tea\Model;

class DBClusterNode extends Model
{
    /**
     * @description The specification of the node.
     *
     * @example mysql.n2.medium.xc
     *
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $classType;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $memory;

    /**
     * @description The node ID.
     *
     * @example rn-****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $nodeRegionId;

    /**
     * @description The role of the node. Valid values:
     *
     *   **primary**: primary node
     *   **secondary**: secondary node
     *
     * @example primary
     *
     * @var string
     */
    public $nodeRole;

    /**
     * @description The zone ID.
     *
     * @example cn-beijing-h
     *
     * @var string
     */
    public $nodeZoneId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'classCode'    => 'ClassCode',
        'classType'    => 'ClassType',
        'cpu'          => 'Cpu',
        'memory'       => 'Memory',
        'nodeId'       => 'NodeId',
        'nodeRegionId' => 'NodeRegionId',
        'nodeRole'     => 'NodeRole',
        'nodeZoneId'   => 'NodeZoneId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->classType) {
            $res['ClassType'] = $this->classType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeRegionId) {
            $res['NodeRegionId'] = $this->nodeRegionId;
        }
        if (null !== $this->nodeRole) {
            $res['NodeRole'] = $this->nodeRole;
        }
        if (null !== $this->nodeZoneId) {
            $res['NodeZoneId'] = $this->nodeZoneId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusterNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['ClassType'])) {
            $model->classType = $map['ClassType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeRegionId'])) {
            $model->nodeRegionId = $map['NodeRegionId'];
        }
        if (isset($map['NodeRole'])) {
            $model->nodeRole = $map['NodeRole'];
        }
        if (isset($map['NodeZoneId'])) {
            $model->nodeZoneId = $map['NodeZoneId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
