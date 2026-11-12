<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class LoginInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $redirectUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'protocol' => 'Protocol',
        'redirectUrl' => 'RedirectUrl',
        'requestId' => 'RequestId',
        'securityToken' => 'SecurityToken',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->redirectUrl) {
            $res['RedirectUrl'] = $this->redirectUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
