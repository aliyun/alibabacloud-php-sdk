<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetPlayerConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $playerConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playerConfig' => 'PlayerConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playerConfig) {
            $res['PlayerConfig'] = $this->playerConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayerConfig'])) {
            $model->playerConfig = $map['PlayerConfig'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
