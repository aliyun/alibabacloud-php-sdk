<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunCycleDagNodesRequest extends Model
{
    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var string
     */
    public $startBizDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $rootNodeId;

    /**
     * @var string
     */
    public $excludeNodeIds;

    /**
     * @var string
     */
    public $bizBeginTime;

    /**
     * @var string
     */
    public $bizEndTime;

    /**
     * @var bool
     */
    public $parallelism;

    /**
     * @var string
     */
    public $endBizDate;

    /**
     * @var string
     */
    public $nodeParams;

    /**
     * @var string
     */
    public $includeNodeIds;
    protected $_name = [
        'projectEnv'     => 'ProjectEnv',
        'startBizDate'   => 'StartBizDate',
        'name'           => 'Name',
        'rootNodeId'     => 'RootNodeId',
        'excludeNodeIds' => 'ExcludeNodeIds',
        'bizBeginTime'   => 'BizBeginTime',
        'bizEndTime'     => 'BizEndTime',
        'parallelism'    => 'Parallelism',
        'endBizDate'     => 'EndBizDate',
        'nodeParams'     => 'NodeParams',
        'includeNodeIds' => 'IncludeNodeIds',
    ];

    public function validate()
    {
        Model::validateRequired('projectEnv', $this->projectEnv, true);
        Model::validateRequired('startBizDate', $this->startBizDate, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('rootNodeId', $this->rootNodeId, true);
        Model::validateRequired('parallelism', $this->parallelism, true);
        Model::validateRequired('endBizDate', $this->endBizDate, true);
        Model::validateRequired('includeNodeIds', $this->includeNodeIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rootNodeId) {
            $res['RootNodeId'] = $this->rootNodeId;
        }
        if (null !== $this->excludeNodeIds) {
            $res['ExcludeNodeIds'] = $this->excludeNodeIds;
        }
        if (null !== $this->bizBeginTime) {
            $res['BizBeginTime'] = $this->bizBeginTime;
        }
        if (null !== $this->bizEndTime) {
            $res['BizEndTime'] = $this->bizEndTime;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }
        if (null !== $this->nodeParams) {
            $res['NodeParams'] = $this->nodeParams;
        }
        if (null !== $this->includeNodeIds) {
            $res['IncludeNodeIds'] = $this->includeNodeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCycleDagNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RootNodeId'])) {
            $model->rootNodeId = $map['RootNodeId'];
        }
        if (isset($map['ExcludeNodeIds'])) {
            $model->excludeNodeIds = $map['ExcludeNodeIds'];
        }
        if (isset($map['BizBeginTime'])) {
            $model->bizBeginTime = $map['BizBeginTime'];
        }
        if (isset($map['BizEndTime'])) {
            $model->bizEndTime = $map['BizEndTime'];
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }
        if (isset($map['NodeParams'])) {
            $model->nodeParams = $map['NodeParams'];
        }
        if (isset($map['IncludeNodeIds'])) {
            $model->includeNodeIds = $map['IncludeNodeIds'];
        }

        return $model;
    }
}
