<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class SetGameAliveRequest extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var int
     */
    public $keepAlive;
    protected $_name = [
        'accessKey'   => 'AccessKey',
        'gameSession' => 'GameSession',
        'keepAlive'   => 'KeepAlive',
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
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGameAliveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }

        return $model;
    }
}
