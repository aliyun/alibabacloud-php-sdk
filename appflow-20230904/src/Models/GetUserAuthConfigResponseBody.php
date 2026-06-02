<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GetUserAuthConfigResponseBody\userAuthConfig;

class GetUserAuthConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userAuthConfig
     */
    public $userAuthConfig;
    protected $_name = [
        'requestId' => 'RequestId',
        'userAuthConfig' => 'UserAuthConfig',
    ];

    public function validate()
    {
        if (null !== $this->userAuthConfig) {
            $this->userAuthConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userAuthConfig) {
            $res['UserAuthConfig'] = null !== $this->userAuthConfig ? $this->userAuthConfig->toArray($noStream) : $this->userAuthConfig;
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

        if (isset($map['UserAuthConfig'])) {
            $model->userAuthConfig = userAuthConfig::fromMap($map['UserAuthConfig']);
        }

        return $model;
    }
}
