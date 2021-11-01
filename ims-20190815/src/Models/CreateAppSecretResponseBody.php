<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretResponseBody\appSecret;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSecret) {
            $res['AppSecret'] = null !== $this->appSecret ? $this->appSecret->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSecretResponseBody
     */
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
