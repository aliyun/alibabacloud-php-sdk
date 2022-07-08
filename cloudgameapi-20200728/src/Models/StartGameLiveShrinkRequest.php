<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class StartGameLiveShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $extensionShrink;

    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var string
     */
    public $videoPushAddress;
    protected $_name = [
        'extensionShrink'  => 'Extension',
        'gameSession'      => 'GameSession',
        'videoPushAddress' => 'VideoPushAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensionShrink) {
            $res['Extension'] = $this->extensionShrink;
        }
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
     * @return StartGameLiveShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extensionShrink = $map['Extension'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['VideoPushAddress'])) {
            $model->videoPushAddress = $map['VideoPushAddress'];
        }

        return $model;
    }
}
