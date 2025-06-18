<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncEditTimelineRequest\timelines;

class AsyncEditTimelineRequest extends Model
{
    /**
     * @var bool
     */
    public $autoClips;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var timelines[]
     */
    public $timelines;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'autoClips' => 'AutoClips',
        'taskId' => 'TaskId',
        'timelines' => 'Timelines',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->timelines)) {
            Model::validateArray($this->timelines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoClips) {
            $res['AutoClips'] = $this->autoClips;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->timelines) {
            if (\is_array($this->timelines)) {
                $res['Timelines'] = [];
                $n1 = 0;
                foreach ($this->timelines as $item1) {
                    $res['Timelines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AutoClips'])) {
            $model->autoClips = $map['AutoClips'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Timelines'])) {
            if (!empty($map['Timelines'])) {
                $model->timelines = [];
                $n1 = 0;
                foreach ($map['Timelines'] as $item1) {
                    $model->timelines[$n1] = timelines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
