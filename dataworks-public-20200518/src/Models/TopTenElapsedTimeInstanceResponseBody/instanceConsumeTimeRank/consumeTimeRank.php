<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceResponseBody\instanceConsumeTimeRank;

use AlibabaCloud\Tea\Model;

class consumeTimeRank extends Model
{
    /**
     * @description The data timestamp of the instance.
     *
     * @example 1600963200000
     *
     * @var int
     */
    public $businessDate;

    /**
     * @description The running duration of the instance. Unit: seconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $consumed;

    /**
     * @description The ID of the instance.
     *
     * @example 95279527
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the node.
     *
     * @example 9527
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the Alibaba Cloud account used by the owner of the node.
     *
     * @example 952795279527
     *
     * @var string
     */
    public $owner;

    /**
     * @description The type of the node.
     *
     * 6 (Shell), 10 (ODPS SQL), 11 (ODPS MR), 23 (Data Integration), 24 (ODPS Script), 99 (zero load), 221 (PyODPS 2), 225 (ODPS Spark), 227 (EMR Hive), 228 (EMR Spark), 229 (EMR Spark SQL), 230 (EMR MR), 239 (OSS object inspection), 257 (EMR Shell), 258 (EMR Spark Shell), 259 (EMR Presto), 260 (EMR Impala), 900 (real-time synchronization), 1089 (cross-tenant collaboration), 1091 (Hologres development), 1093 (Hologres SQL), 1100 (assignment), and 1221 (PyODPS 3)
     * @example 10
     *
     * @var int
     */
    public $programType;
    protected $_name = [
        'businessDate' => 'BusinessDate',
        'consumed'     => 'Consumed',
        'instanceId'   => 'InstanceId',
        'nodeId'       => 'NodeId',
        'nodeName'     => 'NodeName',
        'owner'        => 'Owner',
        'programType'  => 'ProgramType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessDate) {
            $res['BusinessDate'] = $this->businessDate;
        }
        if (null !== $this->consumed) {
            $res['Consumed'] = $this->consumed;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumeTimeRank
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessDate'])) {
            $model->businessDate = $map['BusinessDate'];
        }
        if (isset($map['Consumed'])) {
            $model->consumed = $map['Consumed'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }

        return $model;
    }
}
