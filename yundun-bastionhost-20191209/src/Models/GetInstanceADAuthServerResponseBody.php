<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceADAuthServerResponseBody\AD;

class GetInstanceADAuthServerResponseBody extends Model
{
    /**
     * @var AD
     */
    public $AD;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AD' => 'AD',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AD) {
            $this->AD->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AD) {
            $res['AD'] = null !== $this->AD ? $this->AD->toArray($noStream) : $this->AD;
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
        if (isset($map['AD'])) {
            $model->AD = AD::fromMap($map['AD']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
