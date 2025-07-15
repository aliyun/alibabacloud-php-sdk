<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamPreloadTasksResponseBody\preloadTasksMessages;

use AlibabaCloud\Tea\Model;

class preloadTasksMessage extends Model
{
    /**
     * @description Indicates whether the prefetch task is successful. Valid values:
     *
     *   Successfully
     *   InternalError
     *
     * @example Successfully
     *
     * @var string
     */
    public $description;

    /**
     * @description The streaming URL.
     *
     * @var string
     */
    public $playUrl;

    /**
     * @description The ID of the prefetch task.
     *
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'description' => 'Description',
        'playUrl' => 'PlayUrl',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->playUrl) {
            $res['PlayUrl'] = $this->playUrl;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preloadTasksMessage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PlayUrl'])) {
            $model->playUrl = $map['PlayUrl'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
