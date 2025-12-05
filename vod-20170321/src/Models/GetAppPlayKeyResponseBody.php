<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppPlayKeyResponseBody\appPlayKey;

class GetAppPlayKeyResponseBody extends Model
{
    /**
     * @var appPlayKey
     */
    public $appPlayKey;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appPlayKey' => 'AppPlayKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appPlayKey) {
            $this->appPlayKey->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPlayKey) {
            $res['AppPlayKey'] = null !== $this->appPlayKey ? $this->appPlayKey->toArray($noStream) : $this->appPlayKey;
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
        if (isset($map['AppPlayKey'])) {
            $model->appPlayKey = appPlayKey::fromMap($map['AppPlayKey']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
