<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateOauthTokenResponseBody\tokenResponse;

class GenerateOauthTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tokenResponse
     */
    public $tokenResponse;
    protected $_name = [
        'requestId' => 'RequestId',
        'tokenResponse' => 'TokenResponse',
    ];

    public function validate()
    {
        if (null !== $this->tokenResponse) {
            $this->tokenResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tokenResponse) {
            $res['TokenResponse'] = null !== $this->tokenResponse ? $this->tokenResponse->toArray($noStream) : $this->tokenResponse;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TokenResponse'])) {
            $model->tokenResponse = tokenResponse::fromMap($map['TokenResponse']);
        }

        return $model;
    }
}
