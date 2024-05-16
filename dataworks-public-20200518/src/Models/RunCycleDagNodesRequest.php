<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunCycleDagNodesRequest extends Model
{
    /**
     * @var string
     */
    public $alertNoticeType;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @description The time when the node started to run. This parameter is required only for auto triggered nodes that are scheduled by hour. Specify the value in the HH:mm:ss format. Valid values: 00:00:00 to 23:59:59.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $bizBeginTime;

    /**
     * @description The time when the node stopped running. This parameter is required only for auto triggered nodes that are scheduled by hour. Specify the value in the HH:mm:ss format. Valid values: 00:00:00 to 23:59:59.
     *
     * @example 01:00:00
     *
     * @var string
     */
    public $bizEndTime;

    /**
     * @var int
     */
    public $concurrentRuns;

    /**
     * @description The data timestamp at which data is no longer backfilled. Specify the value in the yyyy-MM-dd 00:00:00 format.
     *
     * This parameter is required.
     * @example 2020-05-21 00:00:00
     *
     * @var string
     */
    public $endBizDate;

    /**
     * @description The IDs of the nodes for which no data needs to be backfilled. The system generates dry-run instances for all these nodes. After these dry-run instances are scheduled, the statuses of these instances are directly set to successful, but the script is not run.
     *
     * @example 1234,123465
     *
     * @var string
     */
    public $excludeNodeIds;

    /**
     * @description The ID of the node for which you want to backfill data. If you want to backfill data for multiple nodes, separate the IDs of the nodes with commas (,). You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 74324,74325
     *
     * @var string
     */
    public $includeNodeIds;

    /**
     * @description The name of the workflow.
     *
     * This parameter is required.
     * @example xm_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The parameters that need to be configured for the node. Set this parameter to a JSON string. The key indicates the ID of the node, and the value indicates the actual values of the parameters.
     *
     * @example {74324:"a=123 b=456"}
     *
     * @var string
     */
    public $nodeParams;

    /**
     * @description Specifies whether data can be backfilled for multiple nodes at the same time.
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $parallelism;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV. The value PROD indicates the production environment, and the value DEV indicates the development environment.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The ID of the node for which data is first backfilled. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $rootNodeId;

    /**
     * @description The data timestamp at which data starts to be backfilled. Specify the value in the yyyy-MM-dd 00:00:00 format.
     *
     * This parameter is required.
     * @example 2020-05-20 00:00:00
     *
     * @var string
     */
    public $startBizDate;

    /**
     * @description Specifies whether to immediately run an instance that is scheduled to run in the future. If you set this parameter to true, the instance that is scheduled to run in the future is run immediately. Otherwise, the instance is run as scheduled.
     *
     * @example false
     *
     * @var bool
     */
    public $startFutureInstanceImmediately;
    protected $_name = [
        'alertNoticeType'                => 'AlertNoticeType',
        'alertType'                      => 'AlertType',
        'bizBeginTime'                   => 'BizBeginTime',
        'bizEndTime'                     => 'BizEndTime',
        'concurrentRuns'                 => 'ConcurrentRuns',
        'endBizDate'                     => 'EndBizDate',
        'excludeNodeIds'                 => 'ExcludeNodeIds',
        'includeNodeIds'                 => 'IncludeNodeIds',
        'name'                           => 'Name',
        'nodeParams'                     => 'NodeParams',
        'parallelism'                    => 'Parallelism',
        'projectEnv'                     => 'ProjectEnv',
        'rootNodeId'                     => 'RootNodeId',
        'startBizDate'                   => 'StartBizDate',
        'startFutureInstanceImmediately' => 'StartFutureInstanceImmediately',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertNoticeType) {
            $res['AlertNoticeType'] = $this->alertNoticeType;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->bizBeginTime) {
            $res['BizBeginTime'] = $this->bizBeginTime;
        }
        if (null !== $this->bizEndTime) {
            $res['BizEndTime'] = $this->bizEndTime;
        }
        if (null !== $this->concurrentRuns) {
            $res['ConcurrentRuns'] = $this->concurrentRuns;
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
        if (null !== $this->startFutureInstanceImmediately) {
            $res['StartFutureInstanceImmediately'] = $this->startFutureInstanceImmediately;
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
        if (isset($map['AlertNoticeType'])) {
            $model->alertNoticeType = $map['AlertNoticeType'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['BizBeginTime'])) {
            $model->bizBeginTime = $map['BizBeginTime'];
        }
        if (isset($map['BizEndTime'])) {
            $model->bizEndTime = $map['BizEndTime'];
        }
        if (isset($map['ConcurrentRuns'])) {
            $model->concurrentRuns = $map['ConcurrentRuns'];
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
        if (isset($map['StartFutureInstanceImmediately'])) {
            $model->startFutureInstanceImmediately = $map['StartFutureInstanceImmediately'];
        }

        return $model;
    }
}
