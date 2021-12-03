<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetGameStockRequest extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var int
     */
    public $userLevel;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'gameId'    => 'GameId',
        'userLevel' => 'UserLevel',
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
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->userLevel) {
            $res['UserLevel'] = $this->userLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGameStockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['UserLevel'])) {
            $model->userLevel = $map['UserLevel'];
        }

        return $model;
    }
}
