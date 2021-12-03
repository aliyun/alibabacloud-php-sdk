<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class StopGameSessionRequest extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $bizParam;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accessKey'   => 'AccessKey',
        'bizParam'    => 'BizParam',
        'gameId'      => 'GameId',
        'gameSession' => 'GameSession',
        'reason'      => 'Reason',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->bizParam) {
            $res['BizParam'] = $this->bizParam;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopGameSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['BizParam'])) {
            $model->bizParam = $map['BizParam'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
