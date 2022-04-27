<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class SetGameHangRequest extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $gameSession;
    protected $_name = [
        'accessKey'   => 'AccessKey',
        'duration'    => 'Duration',
        'gameSession' => 'GameSession',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGameHangRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }

        return $model;
    }
}
