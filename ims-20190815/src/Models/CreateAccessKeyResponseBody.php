<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAccessKeyResponseBody\accessKey;

class CreateAccessKeyResponseBody extends Model
{
    /**
     * @var accessKey
     */
    public $accessKey;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accessKey) {
            $this->accessKey->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = null !== $this->accessKey ? $this->accessKey->toArray($noStream) : $this->accessKey;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = accessKey::fromMap($map['AccessKey']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
