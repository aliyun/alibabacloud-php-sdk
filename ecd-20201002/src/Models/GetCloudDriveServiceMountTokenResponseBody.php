<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetCloudDriveServiceMountTokenResponseBody\token;

class GetCloudDriveServiceMountTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var token
     */
    public $token;
    protected $_name = [
        'requestId' => 'RequestId',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (null !== $this->token) {
            $this->token->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = null !== $this->token ? $this->token->toArray($noStream) : $this->token;
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

        if (isset($map['Token'])) {
            $model->token = token::fromMap($map['Token']);
        }

        return $model;
    }
}
