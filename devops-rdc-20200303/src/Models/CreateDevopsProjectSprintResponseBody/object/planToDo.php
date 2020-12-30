<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectSprintResponseBody\object;

use AlibabaCloud\Tea\Model;

class planToDo extends Model
{
    /**
     * @var int
     */
    public $tasks;

    /**
     * @var int
     */
    public $workTimes;

    /**
     * @var int
     */
    public $storyPoints;
    protected $_name = [
        'tasks'       => 'Tasks',
        'workTimes'   => 'WorkTimes',
        'storyPoints' => 'StoryPoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tasks) {
            $res['Tasks'] = $this->tasks;
        }
        if (null !== $this->workTimes) {
            $res['WorkTimes'] = $this->workTimes;
        }
        if (null !== $this->storyPoints) {
            $res['StoryPoints'] = $this->storyPoints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planToDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tasks'])) {
            $model->tasks = $map['Tasks'];
        }
        if (isset($map['WorkTimes'])) {
            $model->workTimes = $map['WorkTimes'];
        }
        if (isset($map['StoryPoints'])) {
            $model->storyPoints = $map['StoryPoints'];
        }

        return $model;
    }
}
