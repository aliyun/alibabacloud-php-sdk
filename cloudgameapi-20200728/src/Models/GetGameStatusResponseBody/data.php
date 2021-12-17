<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStatusResponseBody;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStatusResponseBody\data\playingUsers;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var int
     */
    public $gameStartAt;

    /**
     * @var int
     */
    public $playingCount;

    /**
     * @var playingUsers[]
     */
    public $playingUsers;
    protected $_name = [
        'gameId'       => 'GameId',
        'gameSession'  => 'GameSession',
        'gameStartAt'  => 'GameStartAt',
        'playingCount' => 'PlayingCount',
        'playingUsers' => 'PlayingUsers',
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
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->gameStartAt) {
            $res['GameStartAt'] = $this->gameStartAt;
        }
        if (null !== $this->playingCount) {
            $res['PlayingCount'] = $this->playingCount;
        }
        if (null !== $this->playingUsers) {
            $res['PlayingUsers'] = [];
            if (null !== $this->playingUsers && \is_array($this->playingUsers)) {
                $n = 0;
                foreach ($this->playingUsers as $item) {
                    $res['PlayingUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['GameStartAt'])) {
            $model->gameStartAt = $map['GameStartAt'];
        }
        if (isset($map['PlayingCount'])) {
            $model->playingCount = $map['PlayingCount'];
        }
        if (isset($map['PlayingUsers'])) {
            if (!empty($map['PlayingUsers'])) {
                $model->playingUsers = [];
                $n                   = 0;
                foreach ($map['PlayingUsers'] as $item) {
                    $model->playingUsers[$n++] = null !== $item ? playingUsers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
