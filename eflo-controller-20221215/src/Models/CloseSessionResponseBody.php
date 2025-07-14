<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CloseSessionResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 07AA3A1F-321E-50D8-B834-88C411331C94
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The session ID.
     *
     * @example i206495551737511455528
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description status of session
     *
     * @example Inactive
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'state' => 'State',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseSessionResponseBody
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
