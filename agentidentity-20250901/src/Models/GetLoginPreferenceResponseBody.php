<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetLoginPreferenceResponseBody\loginPreference;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetLoginPreferenceResponseBody\passwordPolicy;

class GetLoginPreferenceResponseBody extends Model
{
    /**
     * @var loginPreference
     */
    public $loginPreference;

    /**
     * @var passwordPolicy
     */
    public $passwordPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginPreference' => 'LoginPreference',
        'passwordPolicy' => 'PasswordPolicy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->loginPreference) {
            $this->loginPreference->validate();
        }
        if (null !== $this->passwordPolicy) {
            $this->passwordPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginPreference) {
            $res['LoginPreference'] = null !== $this->loginPreference ? $this->loginPreference->toArray($noStream) : $this->loginPreference;
        }

        if (null !== $this->passwordPolicy) {
            $res['PasswordPolicy'] = null !== $this->passwordPolicy ? $this->passwordPolicy->toArray($noStream) : $this->passwordPolicy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LoginPreference'])) {
            $model->loginPreference = loginPreference::fromMap($map['LoginPreference']);
        }

        if (isset($map['PasswordPolicy'])) {
            $model->passwordPolicy = passwordPolicy::fromMap($map['PasswordPolicy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
