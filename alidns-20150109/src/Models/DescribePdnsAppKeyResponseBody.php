<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeyResponseBody\appKey;

class DescribePdnsAppKeyResponseBody extends Model
{
    /**
     * @var appKey
     */
    public $appKey;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appKey' => 'AppKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appKey) {
            $this->appKey->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = null !== $this->appKey ? $this->appKey->toArray($noStream) : $this->appKey;
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
        if (isset($map['AppKey'])) {
            $model->appKey = appKey::fromMap($map['AppKey']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
