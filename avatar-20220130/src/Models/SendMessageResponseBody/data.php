<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0A466686-8F3A-55A6-93D8-A0225DC965C0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 9929391f61ef9e1c0000000000000006
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
