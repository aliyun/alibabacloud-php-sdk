<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class AsyncEditTimelineShrinkRequest extends Model
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
     * @var string
     */
    public $timelinesShrink;

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
        'timelinesShrink' => 'Timelines',
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
        if (null !== $this->timelinesShrink) {
            $res['Timelines'] = $this->timelinesShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncEditTimelineShrinkRequest
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
            $model->timelinesShrink = $map['Timelines'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
