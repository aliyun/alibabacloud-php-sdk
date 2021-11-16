<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDagComplementRequest extends Model
{
    /**
     * @var string
     */
    public $bizBeginTime;

    /**
     * @var string
     */
    public $bizEndTime;

    /**
     * @var string
     */
    public $endBizDate;

    /**
     * @var string
     */
    public $excludeNodeIds;

    /**
     * @var string
     */
    public $includeNodeIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeParams;

    /**
     * @var bool
     */
    public $parallelism;

    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var int
     */
    public $rootNodeId;

    /**
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'bizBeginTime'   => 'BizBeginTime',
        'bizEndTime'     => 'BizEndTime',
        'endBizDate'     => 'EndBizDate',
        'excludeNodeIds' => 'ExcludeNodeIds',
        'includeNodeIds' => 'IncludeNodeIds',
        'name'           => 'Name',
        'nodeParams'     => 'NodeParams',
        'parallelism'    => 'Parallelism',
        'projectEnv'     => 'ProjectEnv',
        'rootNodeId'     => 'RootNodeId',
        'startBizDate'   => 'StartBizDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizBeginTime) {
            $res['BizBeginTime'] = $this->bizBeginTime;
        }
        if (null !== $this->bizEndTime) {
            $res['BizEndTime'] = $this->bizEndTime;
        }
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }
        if (null !== $this->excludeNodeIds) {
            $res['ExcludeNodeIds'] = $this->excludeNodeIds;
        }
        if (null !== $this->includeNodeIds) {
            $res['IncludeNodeIds'] = $this->includeNodeIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeParams) {
            $res['NodeParams'] = $this->nodeParams;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->rootNodeId) {
            $res['RootNodeId'] = $this->rootNodeId;
        }
        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDagComplementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizBeginTime'])) {
            $model->bizBeginTime = $map['BizBeginTime'];
        }
        if (isset($map['BizEndTime'])) {
            $model->bizEndTime = $map['BizEndTime'];
        }
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }
        if (isset($map['ExcludeNodeIds'])) {
            $model->excludeNodeIds = $map['ExcludeNodeIds'];
        }
        if (isset($map['IncludeNodeIds'])) {
            $model->includeNodeIds = $map['IncludeNodeIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeParams'])) {
            $model->nodeParams = $map['NodeParams'];
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['RootNodeId'])) {
            $model->rootNodeId = $map['RootNodeId'];
        }
        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }

        return $model;
    }
}
