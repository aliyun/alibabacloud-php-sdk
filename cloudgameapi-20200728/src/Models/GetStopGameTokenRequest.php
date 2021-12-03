<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetStopGameTokenRequest extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $gameId;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'gameId'    => 'GameId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStopGameTokenRequest
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

        return $model;
    }
}
