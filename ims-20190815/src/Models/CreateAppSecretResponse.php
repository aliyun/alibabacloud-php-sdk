<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretResponse\appSecret;
use AlibabaCloud\Tea\Model;

class CreateAppSecretResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appSecret
     */
    public $appSecret;
    protected $_name = [
        'requestId' => 'RequestId',
        'appSecret' => 'AppSecret',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appSecret', $this->appSecret, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = null !== $this->appSecret ? $this->appSecret->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSecretResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = appSecret::fromMap($map['AppSecret']);
        }

        return $model;
    }
}
