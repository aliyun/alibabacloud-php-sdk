<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class DeleteGameRequest extends Model
{
    /**
     * @description 游戏ID
     *
     * @var string
     */
    public $gameId;
    protected $_name = [
        'gameId' => 'GameId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }

        return $model;
    }
}
