<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ApplyWsTokenResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $token;
    /**
     * @var string
     */
    public $wsEndpoint;
    protected $_name = [
        'sessionId'  => 'SessionId',
        'token'      => 'Token',
        'wsEndpoint' => 'WsEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
