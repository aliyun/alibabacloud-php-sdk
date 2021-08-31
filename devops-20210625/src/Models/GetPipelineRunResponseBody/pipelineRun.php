<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\sources;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\stages;
use AlibabaCloud\Tea\Model;

class pipelineRun extends Model
{
    /**
     * @description 创建者阿里云账号id
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 更新时间
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 更新人阿里云账号id
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @description 流水线Id
     *
     * @var int
     */
    public $pipelineId;

    /**
     * @description 流水线运行实例id
     *
     * @var int
     */
    public $pipelineRunId;

    /**
     * @description 状态 FAIL 运行失败 SUCCESS 运行成功 RUNNING 运行中
     *
     * @var string
     */
    public $status;

    /**
     * @description 触发模式 1人工触发 2定时触发 3代码提交触发
     *
     * @var int
     */
    public $triggerMode;

    /**
     * @description 阶段拓扑信息
     *
     * @var string[][]
     */
    public $stageGroup;

    /**
     * @description 代码源
     *
     * @var sources[]
     */
    public $sources;

    /**
     * @description 阶段信息
     *
     * @var stages[]
     */
    public $stages;
    protected $_name = [
        'creatorAccountId'  => 'creatorAccountId',
        'createTime'        => 'createTime',
        'updateTime'        => 'updateTime',
        'modifierAccountId' => 'modifierAccountId',
        'pipelineId'        => 'pipelineId',
        'pipelineRunId'     => 'pipelineRunId',
        'status'            => 'status',
        'triggerMode'       => 'triggerMode',
        'stageGroup'        => 'stageGroup',
        'sources'           => 'sources',
        'stages'            => 'stages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineRunId) {
            $res['pipelineRunId'] = $this->pipelineRunId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->triggerMode) {
            $res['triggerMode'] = $this->triggerMode;
        }
        if (null !== $this->stageGroup) {
            $res['stageGroup'] = $this->stageGroup;
        }
        if (null !== $this->sources) {
            $res['sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stages) {
            $res['stages'] = [];
            if (null !== $this->stages && \is_array($this->stages)) {
                $n = 0;
                foreach ($this->stages as $item) {
                    $res['stages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineRun
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }
        if (isset($map['pipelineRunId'])) {
            $model->pipelineRunId = $map['pipelineRunId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['triggerMode'])) {
            $model->triggerMode = $map['triggerMode'];
        }
        if (isset($map['stageGroup'])) {
            if (!empty($map['stageGroup'])) {
                $model->stageGroup = $map['stageGroup'];
            }
        }
        if (isset($map['sources'])) {
            if (!empty($map['sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['stages'])) {
            if (!empty($map['stages'])) {
                $model->stages = [];
                $n             = 0;
                foreach ($map['stages'] as $item) {
                    $model->stages[$n++] = null !== $item ? stages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
