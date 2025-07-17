<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties\alert;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties\analysis;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties\runPolicy;
use AlibabaCloud\Tea\Model;

class defaultRunProperties extends Model
{
    /**
     * @description The alert settings.
     *
     * @var alert
     */
    public $alert;

    /**
     * @description The configurations for analysis. If you set the Type parameter to SupplementData, this parameter is required.
     *
     * @var analysis
     */
    public $analysis;

    /**
     * @description The IDs of the projects that do not need to be run.
     *
     * @var int[]
     */
    public $excludeProjectIds;

    /**
     * @description The IDs of the tasks that do not need to be run.
     *
     * @var int[]
     */
    public $excludeTaskIds;

    /**
     * @description The IDs of the projects that need to be run.
     *
     * @var int[]
     */
    public $includeProjectIds;

    /**
     * @description The IDs of the tasks that need to be run.
     *
     * @var int[]
     */
    public $includeTaskIds;

    /**
     * @description The data backfill mode. Default value: ManualSelection. If you set the Type parameter to SupplementData, this parameter is required. Valid values:
     *
     *   General: You can specify only `one root task ID`. The `IncludeTaskIds` parameter is optional. If you do not configure the IncludeTaskIds parameter, the tasks that are specified by the `RootTaskIds` parameter are included by default.
     *   ManualSelection: You can specify `multiple root task IDs`. The `IncludeTaskIds` parameter is optional. If you do not configure the IncludeTaskIds parameter, the tasks that are specified by the `RootTaskIds` parameter are included by default.
     *   Chain: If you set the Mode parameter to Chain, you must leave the `RootTaskIds` parameter empty and set the `IncludeTaskIds` parameter to the start task ID and the end task ID.
     *   AllDownstream: You can specify only one `root task ID`.
     *
     * @example ManualSelection
     *
     * @var string
     */
    public $mode;

    /**
     * @description The running order. Valid values:
     *
     *   Asc (default): The tasks are sorted by data timestamp in ascending order.
     *   Desc: The tasks are sorted by data timestamp in descending order.
     *
     * @example Asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of tasks that can be run in parallel. If you specify a value that ranges from 2 to 10, the value indicates the number of tasks that can be run in parallel. If you set the value to 1, the tasks are run one by one. If you set the Type parameter to SupplementData, this parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description The running priority. Valid values: 1 to 11. A larger value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The weight policy for the priority. Valid values:
     *
     *   `Disable`: No weight policy for the priority is enabled. This is the default value.
     *   `Upstream`: The sum of the weights for the ancestor nodes of the current node is calculated. The more ancestor nodes, the higher the weight.
     *
     * @example Upstream
     *
     * @var string
     */
    public $priorityWeightStrategy;

    /**
     * @description The root task IDs.
     *
     *   If you set the Type parameter to SupplementData and the Mode parameter to a value other than Chain, the RootTaskIds parameter is required.
     *   If you set the Type parameter to ManualWorkflow, the RootTaskIds parameter is optional. If you do not configure the RootTaskIds parameter, the IDs of the default root nodes of the manually triggered workflow are used.
     *   If you set the Type parameter to Manual, the RootTaskIds parameter is required. The RootTaskIds parameter specifies the IDs of the manually triggered tasks that need to be run.
     *   If you set the Type parameter to SmokeTest, the RootTaskIds parameter is required. The RootTaskIds parameter specifies the IDs of the test tasks that need to be run.
     *
     * @var int[]
     */
    public $rootTaskIds;

    /**
     * @description The policy for running. If you leave this parameter empty, the task configuration is used.
     *
     * @var runPolicy
     */
    public $runPolicy;

    /**
     * @description The identifier of the custom resource group for scheduling. If you leave this parameter empty, the runtime configuration is used.
     *
     * @example S_res_group_524258031846018_1684XXXXXXXXX
     *
     * @var string
     */
    public $runtimeResource;
    protected $_name = [
        'alert' => 'Alert',
        'analysis' => 'Analysis',
        'excludeProjectIds' => 'ExcludeProjectIds',
        'excludeTaskIds' => 'ExcludeTaskIds',
        'includeProjectIds' => 'IncludeProjectIds',
        'includeTaskIds' => 'IncludeTaskIds',
        'mode' => 'Mode',
        'order' => 'Order',
        'parallelism' => 'Parallelism',
        'priority' => 'Priority',
        'priorityWeightStrategy' => 'PriorityWeightStrategy',
        'rootTaskIds' => 'RootTaskIds',
        'runPolicy' => 'RunPolicy',
        'runtimeResource' => 'RuntimeResource',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alert) {
            $res['Alert'] = null !== $this->alert ? $this->alert->toMap() : null;
        }
        if (null !== $this->analysis) {
            $res['Analysis'] = null !== $this->analysis ? $this->analysis->toMap() : null;
        }
        if (null !== $this->excludeProjectIds) {
            $res['ExcludeProjectIds'] = $this->excludeProjectIds;
        }
        if (null !== $this->excludeTaskIds) {
            $res['ExcludeTaskIds'] = $this->excludeTaskIds;
        }
        if (null !== $this->includeProjectIds) {
            $res['IncludeProjectIds'] = $this->includeProjectIds;
        }
        if (null !== $this->includeTaskIds) {
            $res['IncludeTaskIds'] = $this->includeTaskIds;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->priorityWeightStrategy) {
            $res['PriorityWeightStrategy'] = $this->priorityWeightStrategy;
        }
        if (null !== $this->rootTaskIds) {
            $res['RootTaskIds'] = $this->rootTaskIds;
        }
        if (null !== $this->runPolicy) {
            $res['RunPolicy'] = null !== $this->runPolicy ? $this->runPolicy->toMap() : null;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = $this->runtimeResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultRunProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alert'])) {
            $model->alert = alert::fromMap($map['Alert']);
        }
        if (isset($map['Analysis'])) {
            $model->analysis = analysis::fromMap($map['Analysis']);
        }
        if (isset($map['ExcludeProjectIds'])) {
            if (!empty($map['ExcludeProjectIds'])) {
                $model->excludeProjectIds = $map['ExcludeProjectIds'];
            }
        }
        if (isset($map['ExcludeTaskIds'])) {
            if (!empty($map['ExcludeTaskIds'])) {
                $model->excludeTaskIds = $map['ExcludeTaskIds'];
            }
        }
        if (isset($map['IncludeProjectIds'])) {
            if (!empty($map['IncludeProjectIds'])) {
                $model->includeProjectIds = $map['IncludeProjectIds'];
            }
        }
        if (isset($map['IncludeTaskIds'])) {
            if (!empty($map['IncludeTaskIds'])) {
                $model->includeTaskIds = $map['IncludeTaskIds'];
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['PriorityWeightStrategy'])) {
            $model->priorityWeightStrategy = $map['PriorityWeightStrategy'];
        }
        if (isset($map['RootTaskIds'])) {
            if (!empty($map['RootTaskIds'])) {
                $model->rootTaskIds = $map['RootTaskIds'];
            }
        }
        if (isset($map['RunPolicy'])) {
            $model->runPolicy = runPolicy::fromMap($map['RunPolicy']);
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = $map['RuntimeResource'];
        }

        return $model;
    }
}
