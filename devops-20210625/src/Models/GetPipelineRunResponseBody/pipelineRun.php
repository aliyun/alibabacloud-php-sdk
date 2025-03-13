<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\sources;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\stages;
use AlibabaCloud\Tea\Model;

class pipelineRun extends Model
{
    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1111111111
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @example 11111111111
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $pipelineId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pipelineRunId;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @var string[][]
     */
    public $stageGroup;

    /**
     * @var stages[]
     */
    public $stages;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $triggerMode;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'createTime',
        'creatorAccountId'  => 'creatorAccountId',
        'modifierAccountId' => 'modifierAccountId',
        'pipelineId'        => 'pipelineId',
        'pipelineRunId'     => 'pipelineRunId',
        'sources'           => 'sources',
        'stageGroup'        => 'stageGroup',
        'stages'            => 'stages',
        'status'            => 'status',
        'triggerMode'       => 'triggerMode',
        'updateTime'        => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
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
        if (null !== $this->sources) {
            $res['sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stageGroup) {
            $res['stageGroup'] = $this->stageGroup;
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->triggerMode) {
            $res['triggerMode'] = $this->triggerMode;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
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
        if (isset($map['sources'])) {
            if (!empty($map['sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['stageGroup'])) {
            if (!empty($map['stageGroup'])) {
                $model->stageGroup = $map['stageGroup'];
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['triggerMode'])) {
            $model->triggerMode = $map['triggerMode'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
