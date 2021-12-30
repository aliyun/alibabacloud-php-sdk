<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceADAuthServerResponseBody\AD;
use AlibabaCloud\Tea\Model;

class GetInstanceADAuthServerResponseBody extends Model
{
    /**
     * @var AD
     */
    public $AD;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AD'        => 'AD',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AD) {
            $res['AD'] = null !== $this->AD ? $this->AD->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceADAuthServerResponseBody
     */
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
