<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostShareKeyResponseBody\hostShareKey;

class GetHostShareKeyResponseBody extends Model
{
    /**
     * @var hostShareKey
     */
    public $hostShareKey;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostShareKey' => 'HostShareKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->hostShareKey) {
            $this->hostShareKey->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostShareKey) {
            $res['HostShareKey'] = null !== $this->hostShareKey ? $this->hostShareKey->toArray($noStream) : $this->hostShareKey;
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
        if (isset($map['HostShareKey'])) {
            $model->hostShareKey = hostShareKey::fromMap($map['HostShareKey']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
