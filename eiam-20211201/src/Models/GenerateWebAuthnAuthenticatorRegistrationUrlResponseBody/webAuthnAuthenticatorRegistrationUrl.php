<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateWebAuthnAuthenticatorRegistrationUrlResponseBody;

use AlibabaCloud\Dara\Model;

class webAuthnAuthenticatorRegistrationUrl extends Model
{
    /**
     * @var string
     */
    public $registrationUrl;

    /**
     * @var string
     */
    public $registrationUrlParameters;
    protected $_name = [
        'registrationUrl' => 'RegistrationUrl',
        'registrationUrlParameters' => 'RegistrationUrlParameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registrationUrl) {
            $res['RegistrationUrl'] = $this->registrationUrl;
        }

        if (null !== $this->registrationUrlParameters) {
            $res['RegistrationUrlParameters'] = $this->registrationUrlParameters;
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
        if (isset($map['RegistrationUrl'])) {
            $model->registrationUrl = $map['RegistrationUrl'];
        }

        if (isset($map['RegistrationUrlParameters'])) {
            $model->registrationUrlParameters = $map['RegistrationUrlParameters'];
        }

        return $model;
    }
}
