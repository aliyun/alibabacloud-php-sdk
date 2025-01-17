<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\DecryptKMSDataKeyResponseBody\dataKey;

class DecryptKMSDataKeyResponseBody extends Model
{
    /**
     * @var dataKey
     */
    public $dataKey;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataKey'   => 'DataKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataKey) {
            $this->dataKey->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataKey) {
            $res['DataKey'] = null !== $this->dataKey ? $this->dataKey->toArray($noStream) : $this->dataKey;
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
        if (isset($map['DataKey'])) {
            $model->dataKey = dataKey::fromMap($map['DataKey']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
