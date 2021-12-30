<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostShareKeyResponseBody\hostShareKey;
use AlibabaCloud\Tea\Model;

class GetHostShareKeyResponseBody extends Model
{
    /**
     * @var hostShareKey
     */
    public $hostShareKey;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostShareKey' => 'HostShareKey',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostShareKey) {
            $res['HostShareKey'] = null !== $this->hostShareKey ? $this->hostShareKey->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHostShareKeyResponseBody
     */
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
