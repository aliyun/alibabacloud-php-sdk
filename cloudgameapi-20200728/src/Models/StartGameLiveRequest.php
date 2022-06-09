<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class StartGameLiveRequest extends Model
{
    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var string
     */
    public $videoPushAddress;
    protected $_name = [
        'gameSession'      => 'GameSession',
        'videoPushAddress' => 'VideoPushAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->videoPushAddress) {
            $res['VideoPushAddress'] = $this->videoPushAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartGameLiveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['VideoPushAddress'])) {
            $model->videoPushAddress = $map['VideoPushAddress'];
        }

        return $model;
    }
}
