<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAppSecretResponseBody\appSecret;
use AlibabaCloud\Tea\Model;

class GetAppSecretResponseBody extends Model
{
    /**
     * @description The details of the application secret.
     *
     * @var appSecret
     */
    public $appSecret;

    /**
     * @description The request ID.
     *
     * @example EE46FC3C-3BDE-4771-B531-27B7B6EB533D
     *
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
     * @return GetAppSecretResponseBody
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
