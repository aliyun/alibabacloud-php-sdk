<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetQueuingSizeRequest extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $userLevel;
    protected $_name = [
        'gameId'    => 'GameId',
        'projectId' => 'ProjectId',
        'userLevel' => 'UserLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->userLevel) {
            $res['UserLevel'] = $this->userLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueuingSizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UserLevel'])) {
            $model->userLevel = $map['UserLevel'];
        }

        return $model;
    }
}
