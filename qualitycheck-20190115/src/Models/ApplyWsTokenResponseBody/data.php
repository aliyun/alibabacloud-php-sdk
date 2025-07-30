<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ApplyWsTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 42e59bcd-7206-44c5-ad34-525d364687c4
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 5607b21d1728700640
     *
     * @var string
     */
    public $token;

    /**
     * @example wss://ws-gateway-real-voice.aliyuncs.com
     *
     * @var string
     */
    public $wsEndpoint;
    protected $_name = [
        'sessionId' => 'SessionId',
        'token' => 'Token',
        'wsEndpoint' => 'WsEndpoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->wsEndpoint) {
            $res['WsEndpoint'] = $this->wsEndpoint;
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
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['WsEndpoint'])) {
            $model->wsEndpoint = $map['WsEndpoint'];
        }

        return $model;
    }
}
