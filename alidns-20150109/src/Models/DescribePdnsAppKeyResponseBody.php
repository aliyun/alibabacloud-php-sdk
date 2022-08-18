<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeyResponseBody\appKey;
use AlibabaCloud\Tea\Model;

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
        'appKey'    => 'AppKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = null !== $this->appKey ? $this->appKey->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePdnsAppKeyResponseBody
     */
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
