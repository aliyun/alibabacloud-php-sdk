<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceResponseBody\instanceErrorRank;

use AlibabaCloud\Tea\Model;

class errorRank extends Model
{
    /**
     * @description The number of errors that occur on the node.
     *
     * @example 5
     *
     * @var int
     */
    public $count;

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
     * @description The user identifier (UID) of the Alibaba Cloud account used by the owner of the node.
     *
     * @example 952795279527
     *
     * @var string
     */
    public $owner;

    /**
     * @description The type of the node.
     *
     * 6 (Shell node), 10 (ODPS SQL node), 11 (ODPS MR node), 23 (Data Integration node), 24 (ODPS Script node), 99 (zero load node), 221 (PyODPS 2 node), 225 (ODPS Spark node), 227 (EMR Hive node), 228 (EMR Spark node), 229 (EMR Spark SQL node), 230 (EMR MR node), 239 (OSS object inspection node), 257 (EMR Shell node), 258 (EMR Spark Shell node), 259 (EMR Presto node), 260 (EMR Impala node), 900 (real-time data synchronization node), 1089 (cross-tenant collaboration node), 1091 (Hologres development node), 1093 (Hologres SQL node), 1100 (assignment node), and 1221 (PyODPS 3 node).
     * @example 10
     *
     * @var int
     */
    public $programType;

    /**
     * @description The ID of the DataWorks workspace.
     *
     * @example 9527
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'count'       => 'Count',
        'nodeId'      => 'NodeId',
        'nodeName'    => 'NodeName',
        'owner'       => 'Owner',
        'programType' => 'ProgramType',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorRank
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
