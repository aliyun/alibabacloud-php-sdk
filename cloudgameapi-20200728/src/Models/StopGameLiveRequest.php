<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class StopGameLiveRequest extends Model
{
    /**
     * @var string
     */
    public $gameSession;
    protected $_name = [
        'gameSession' => 'GameSession',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopGameLiveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }

        return $model;
    }
}
