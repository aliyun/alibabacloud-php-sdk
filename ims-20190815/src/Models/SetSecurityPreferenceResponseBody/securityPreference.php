<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference\accessKeyPreference;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference\loginProfilePreference;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference\maxIdleDays;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference\MFAPreference;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference\personalInfoPreference;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference\verificationPreference;

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
     * @var maxIdleDays
     */
    public $maxIdleDays;
    /**
     * @var personalInfoPreference
     */
    public $personalInfoPreference;
    /**
     * @var verificationPreference
     */
    public $verificationPreference;
    protected $_name = [
        'accessKeyPreference'    => 'AccessKeyPreference',
        'loginProfilePreference' => 'LoginProfilePreference',
        'MFAPreference'          => 'MFAPreference',
        'maxIdleDays'            => 'MaxIdleDays',
        'personalInfoPreference' => 'PersonalInfoPreference',
        'verificationPreference' => 'VerificationPreference',
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
        if (null !== $this->maxIdleDays) {
            $this->maxIdleDays->validate();
        }
        if (null !== $this->personalInfoPreference) {
            $this->personalInfoPreference->validate();
        }
        if (null !== $this->verificationPreference) {
            $this->verificationPreference->validate();
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

        if (null !== $this->maxIdleDays) {
            $res['MaxIdleDays'] = null !== $this->maxIdleDays ? $this->maxIdleDays->toArray($noStream) : $this->maxIdleDays;
        }

        if (null !== $this->personalInfoPreference) {
            $res['PersonalInfoPreference'] = null !== $this->personalInfoPreference ? $this->personalInfoPreference->toArray($noStream) : $this->personalInfoPreference;
        }

        if (null !== $this->verificationPreference) {
            $res['VerificationPreference'] = null !== $this->verificationPreference ? $this->verificationPreference->toArray($noStream) : $this->verificationPreference;
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

        if (isset($map['MaxIdleDays'])) {
            $model->maxIdleDays = maxIdleDays::fromMap($map['MaxIdleDays']);
        }

        if (isset($map['PersonalInfoPreference'])) {
            $model->personalInfoPreference = personalInfoPreference::fromMap($map['PersonalInfoPreference']);
        }

        if (isset($map['VerificationPreference'])) {
            $model->verificationPreference = verificationPreference::fromMap($map['VerificationPreference']);
        }

        return $model;
    }
}
