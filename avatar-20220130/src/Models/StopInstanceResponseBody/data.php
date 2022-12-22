<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\StopInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 210f07d216386696072501427d3fdb
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 6296cc143d2c42899dae6eff19e8ac28
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
