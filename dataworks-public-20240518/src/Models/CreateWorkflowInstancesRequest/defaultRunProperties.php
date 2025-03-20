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
     * @description Alarm configuration.
     *
     * @var alert
     */
    public $alert;

    /**
     * @description Analyze the configuration.
     *
     * @var analysis
     */
    public $analysis;

    /**
     * @description The list of project IDs that do not need to be run.
     *
     * @var int[]
     */
    public $excludeProjectIds;

    /**
     * @description The list of task IDs that you do not want to run.
     *
     * @var int[]
     */
    public $excludeTaskIds;

    /**
     * @description The list of project IDs to be run.
     *
     * @var int[]
     */
    public $includeProjectIds;

    /**
     * @description The list of task IDs to be run.
     *
     * @var int[]
     */
    public $includeTaskIds;

    /**
     * @description The data replenishment mode. The default value is ManualSelection.
     * - General: In normal mode, only one \\"roottaskkids\\" can be filled in, and \\"IncludeTaskIds\\" is optional. If not, the content in \\"roottaskkids\\" will be included by default.
     * - ManualSelection: manually select, \\"roottaskkids\\" can be filled in multiple, \\"IncludeTaskIds\\" optional, if not, the content in \\"roottaskkids\\" will be included by default.
     * - Chain: the link, \\"roottaskkids\\" is empty, and \\"IncludeTaskIds\\" is filled with two IDs, which are the start and end tasks respectively.
     * - AllDownstream: all downstream, \\"roottaskkids\\" can only be filled in one
     *
     * @example ManualSelection
     *
     * @var string
     */
    public $mode;

    /**
     * @description The running sequence. Default value: Asc.
     * - Asc: ascending order by business date.
     * - Desc: descending order by business date.
     *
     * @example Asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of rows that the task has. Values from 2 to 10 are parallelism and 1 is serial.
     *
     * @example 2
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description The ID list of the root task.
     *
     * @var int[]
     */
    public $rootTaskIds;

    /**
     * @description Run the policy. If this field is empty, the task configuration is followed.
     *
     * @var runPolicy
     */
    public $runPolicy;

    /**
     * @description The identifier of the custom scheduling Resource Group. If this field is empty, the task configuration is followed.
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
