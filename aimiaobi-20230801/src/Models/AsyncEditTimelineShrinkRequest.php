<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class AsyncEditTimelineShrinkRequest extends Model
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
     * @var string
     */
    public $timelinesShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'autoClips' => 'AutoClips',
        'taskId' => 'TaskId',
        'timelinesShrink' => 'Timelines',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
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

        if (null !== $this->timelinesShrink) {
            $res['Timelines'] = $this->timelinesShrink;
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
            $model->timelinesShrink = $map['Timelines'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
