<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetClientPublicKeyResponseBody\clientPublicKey;

class GetClientPublicKeyResponseBody extends Model
{
    /**
     * @var clientPublicKey
     */
    public $clientPublicKey;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientPublicKey' => 'ClientPublicKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clientPublicKey) {
            $this->clientPublicKey->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientPublicKey) {
            $res['ClientPublicKey'] = null !== $this->clientPublicKey ? $this->clientPublicKey->toArray($noStream) : $this->clientPublicKey;
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
        if (isset($map['ClientPublicKey'])) {
            $model->clientPublicKey = clientPublicKey::fromMap($map['ClientPublicKey']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
