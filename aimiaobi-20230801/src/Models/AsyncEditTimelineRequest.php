<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncEditTimelineRequest\timelines;
use AlibabaCloud\Tea\Model;

class AsyncEditTimelineRequest extends Model
{
    /**
     * @var bool
     */
    public $autoClips;

    /**
     * @description This parameter is required.
     *
     * @example 0dbf1055f8a2475d99904c3b76a0ffba
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @var timelines[]
     */
    public $timelines;

    /**
     * @description This parameter is required.
     *
     * @example llm-az2gglkjauwnnhpq
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'autoClips' => 'AutoClips',
        'taskId' => 'TaskId',
        'timelines' => 'Timelines',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoClips) {
            $res['AutoClips'] = $this->autoClips;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->timelines) {
            $res['Timelines'] = [];
            if (null !== $this->timelines && \is_array($this->timelines)) {
                $n = 0;
                foreach ($this->timelines as $item) {
                    $res['Timelines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncEditTimelineRequest
     */
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
                $n = 0;
                foreach ($map['Timelines'] as $item) {
                    $model->timelines[$n++] = null !== $item ? timelines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
