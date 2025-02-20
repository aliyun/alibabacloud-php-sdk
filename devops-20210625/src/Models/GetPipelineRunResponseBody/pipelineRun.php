<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\sources;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\stages;

class pipelineRun extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $creatorAccountId;
    /**
     * @var string
     */
    public $modifierAccountId;
    /**
     * @var int
     */
    public $pipelineId;
    /**
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
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $triggerMode;
    /**
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
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        if (\is_array($this->stageGroup)) {
            Model::validateArray($this->stageGroup);
        }
        if (\is_array($this->stages)) {
            Model::validateArray($this->stages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sources)) {
                $res['sources'] = [];
                $n1             = 0;
                foreach ($this->sources as $item1) {
                    $res['sources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->stageGroup) {
            if (\is_array($this->stageGroup)) {
                $res['stageGroup'] = [];
                $n1                = 0;
                foreach ($this->stageGroup as $item1) {
                    if (\is_array($item1)) {
                        $res['stageGroup'][$n1++] = [];
                        $n2                       = 0;
                        foreach ($item1 as $item2) {
                            $res['stageGroup'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->stages) {
            if (\is_array($this->stages)) {
                $res['stages'] = [];
                $n1            = 0;
                foreach ($this->stages as $item1) {
                    $res['stages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1             = 0;
                foreach ($map['sources'] as $item1) {
                    $model->sources[$n1++] = sources::fromMap($item1);
                }
            }
        }

        if (isset($map['stageGroup'])) {
            if (!empty($map['stageGroup'])) {
                $model->stageGroup = [];
                $n1                = 0;
                foreach ($map['stageGroup'] as $item1) {
                    if (!empty($item1)) {
                        $model->stageGroup[$n1++] = [];
                        $n2                       = 0;
                        foreach ($item1 as $item2) {
                            $model->stageGroup[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['stages'])) {
            if (!empty($map['stages'])) {
                $model->stages = [];
                $n1            = 0;
                foreach ($map['stages'] as $item1) {
                    $model->stages[$n1++] = stages::fromMap($item1);
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
