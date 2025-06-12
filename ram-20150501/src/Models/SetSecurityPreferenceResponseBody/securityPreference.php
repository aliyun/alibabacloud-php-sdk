<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody\securityPreference\accessKeyPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody\securityPreference\loginProfilePreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody\securityPreference\MFAPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody\securityPreference\publicKeyPreference;

class securityPreference extends Model
{
    /**
     * @var accessKeyPreference
     */
    public $accessKeyPreference;

    /**
     * @var loginProfilePreference
     */
    public $loginProfilePreference;

    /**
     * @var MFAPreference
     */
    public $MFAPreference;

    /**
     * @var publicKeyPreference
     */
    public $publicKeyPreference;
    protected $_name = [
        'accessKeyPreference' => 'AccessKeyPreference',
        'loginProfilePreference' => 'LoginProfilePreference',
        'MFAPreference' => 'MFAPreference',
        'publicKeyPreference' => 'PublicKeyPreference',
    ];

    public function validate()
    {
        if (null !== $this->accessKeyPreference) {
            $this->accessKeyPreference->validate();
        }
        if (null !== $this->loginProfilePreference) {
            $this->loginProfilePreference->validate();
        }
        if (null !== $this->MFAPreference) {
            $this->MFAPreference->validate();
        }
        if (null !== $this->publicKeyPreference) {
            $this->publicKeyPreference->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyPreference) {
            $res['AccessKeyPreference'] = null !== $this->accessKeyPreference ? $this->accessKeyPreference->toArray($noStream) : $this->accessKeyPreference;
        }

        if (null !== $this->loginProfilePreference) {
            $res['LoginProfilePreference'] = null !== $this->loginProfilePreference ? $this->loginProfilePreference->toArray($noStream) : $this->loginProfilePreference;
        }

        if (null !== $this->MFAPreference) {
            $res['MFAPreference'] = null !== $this->MFAPreference ? $this->MFAPreference->toArray($noStream) : $this->MFAPreference;
        }

        if (null !== $this->publicKeyPreference) {
            $res['PublicKeyPreference'] = null !== $this->publicKeyPreference ? $this->publicKeyPreference->toArray($noStream) : $this->publicKeyPreference;
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
        if (isset($map['AccessKeyPreference'])) {
            $model->accessKeyPreference = accessKeyPreference::fromMap($map['AccessKeyPreference']);
        }

        if (isset($map['LoginProfilePreference'])) {
            $model->loginProfilePreference = loginProfilePreference::fromMap($map['LoginProfilePreference']);
        }

        if (isset($map['MFAPreference'])) {
            $model->MFAPreference = MFAPreference::fromMap($map['MFAPreference']);
        }

        if (isset($map['PublicKeyPreference'])) {
            $model->publicKeyPreference = publicKeyPreference::fromMap($map['PublicKeyPreference']);
        }

        return $model;
    }
}
