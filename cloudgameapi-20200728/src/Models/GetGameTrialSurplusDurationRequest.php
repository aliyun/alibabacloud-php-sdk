<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetGameTrialSurplusDurationRequest extends Model
{
    /**
     * @description 账号ID
     *
     * @var string
     */
    public $accountId;

    /**
     * @description 游戏ID
     *
     * @var string
     */
    public $gameId;

    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'accountId' => 'AccountId',
        'gameId'    => 'GameId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGameTrialSurplusDurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
