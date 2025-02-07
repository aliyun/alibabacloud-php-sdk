<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretResponseBody\appSecret;

class CreateAppSecretResponseBody extends Model
{
    /**
     * @var appSecret
     */
    public $appSecret;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appSecret' => 'AppSecret',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appSecret) {
            $this->appSecret->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appSecret) {
            $res['AppSecret'] = null !== $this->appSecret ? $this->appSecret->toArray($noStream) : $this->appSecret;
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
        if (isset($map['AppSecret'])) {
            $model->appSecret = appSecret::fromMap($map['AppSecret']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
