<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetStopGameTokenRequest extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $accessKey;
    protected $_name = [
        'gameId'    => 'GameId',
        'accessKey' => 'AccessKey',
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
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
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
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        return $model;
    }
}
