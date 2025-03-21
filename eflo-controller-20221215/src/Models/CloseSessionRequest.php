<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CloseSessionRequest extends Model
{
    /**
     * @description Session ID
     *
     * @example i207023871669364793713
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description Session token
     *
     * @example 03f53c719015a9ad4f4f55d66cac2dac161b18e8065ca75a3220b89de389c980
     *
     * @var string
     */
    public $sessionToken;
    protected $_name = [
        'sessionId' => 'SessionId',
        'sessionToken' => 'SessionToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sessionToken) {
            $res['SessionToken'] = $this->sessionToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SessionToken'])) {
            $model->sessionToken = $map['SessionToken'];
        }

        return $model;
    }
}
