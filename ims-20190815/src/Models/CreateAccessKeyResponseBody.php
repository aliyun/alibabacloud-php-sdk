<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAccessKeyResponseBody\accessKey;
use AlibabaCloud\Tea\Model;

class CreateAccessKeyResponseBody extends Model
{
    /**
     * @description The information of the AccessKey pair.
     *
     * @var accessKey
     */
    public $accessKey;

    /**
     * @description The ID of the request.
     *
     * @example 19DDD9F7-AFCC-4D72-8CBA-CCE5A142E7AB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = null !== $this->accessKey ? $this->accessKey->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = accessKey::fromMap($map['AccessKey']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
