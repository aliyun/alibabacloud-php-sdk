<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamPreloadTasksResponseBody\preloadTasksMessages;

use AlibabaCloud\Dara\Model;

class preloadTasksMessage extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $playUrl;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'description' => 'Description',
        'playUrl' => 'PlayUrl',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
