<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateWebAuthnAuthenticatorRegistrationUrlResponseBody\webAuthnAuthenticatorRegistrationUrl;

class GenerateWebAuthnAuthenticatorRegistrationUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var webAuthnAuthenticatorRegistrationUrl
     */
    public $webAuthnAuthenticatorRegistrationUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'webAuthnAuthenticatorRegistrationUrl' => 'WebAuthnAuthenticatorRegistrationUrl',
    ];

    public function validate()
    {
        if (null !== $this->webAuthnAuthenticatorRegistrationUrl) {
            $this->webAuthnAuthenticatorRegistrationUrl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->webAuthnAuthenticatorRegistrationUrl) {
            $res['WebAuthnAuthenticatorRegistrationUrl'] = null !== $this->webAuthnAuthenticatorRegistrationUrl ? $this->webAuthnAuthenticatorRegistrationUrl->toArray($noStream) : $this->webAuthnAuthenticatorRegistrationUrl;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WebAuthnAuthenticatorRegistrationUrl'])) {
            $model->webAuthnAuthenticatorRegistrationUrl = webAuthnAuthenticatorRegistrationUrl::fromMap($map['WebAuthnAuthenticatorRegistrationUrl']);
        }

        return $model;
    }
}
