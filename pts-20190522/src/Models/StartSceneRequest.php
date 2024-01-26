<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190522\Models;

use AlibabaCloud\Tea\Model;

class StartSceneRequest extends Model
{
    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $teamId;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'sceneId' => 'SceneId',
        'taskId'  => 'TaskId',
        'teamId'  => 'TeamId',
        'userId'  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->teamId) {
            $res['TeamId'] = $this->teamId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TeamId'])) {
            $model->teamId = $map['TeamId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
