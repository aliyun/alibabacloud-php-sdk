<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\strategy;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\trigger;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description 节点的创建时间
     *
     * @example 1722910655000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 数据源信息
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @example 860438872620113XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description 节点输入
     *
     * @var inputs
     */
    public $inputs;

    /**
     * @description 属性修改时间
     *
     * @example 1722910655000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description 节点名
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description 节点输出
     *
     * @var outputs
     */
    public $outputs;

    /**
     * @description 节点的责任人
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @example 33233
     *
     * @var string
     */
    public $projectId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $recurrence;

    /**
     * @description 资源组信息
     *
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @description 工作流的脚本信息
     *
     * @var script
     */
    public $script;

    /**
     * @description 调度策略
     *
     * @var strategy
     */
    public $strategy;

    /**
     * @description 标签信息
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description 调度任务Id
     *
     * @example 88888888888
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 触发器信息
     *
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'dataSource'      => 'DataSource',
        'description'     => 'Description',
        'id'              => 'Id',
        'inputs'          => 'Inputs',
        'modifyTime'      => 'ModifyTime',
        'name'            => 'Name',
        'outputs'         => 'Outputs',
        'owner'           => 'Owner',
        'projectId'       => 'ProjectId',
        'recurrence'      => 'Recurrence',
        'runtimeResource' => 'RuntimeResource',
        'script'          => 'Script',
        'strategy'        => 'Strategy',
        'tags'            => 'Tags',
        'taskId'          => 'TaskId',
        'trigger'         => 'Trigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = null !== $this->outputs ? $this->outputs->toMap() : null;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->recurrence) {
            $res['Recurrence'] = $this->recurrence;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = outputs::fromMap($map['Outputs']);
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Recurrence'])) {
            $model->recurrence = $map['Recurrence'];
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }
        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }
        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
