<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class KickPlayerRequest extends Model
{
    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var string
     */
    public $kickedAccountId;
    protected $_name = [
        'gameSession'     => 'GameSession',
        'kickedAccountId' => 'KickedAccountId',
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
        if (null !== $this->kickedAccountId) {
            $res['KickedAccountId'] = $this->kickedAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KickPlayerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['KickedAccountId'])) {
            $model->kickedAccountId = $map['KickedAccountId'];
        }

        return $model;
    }
}
