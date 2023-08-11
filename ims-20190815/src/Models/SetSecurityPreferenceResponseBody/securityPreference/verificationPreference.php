<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class verificationPreference extends Model
{
    /**
     * @description The MFA methods.
     *
     * @var string[]
     */
    public $verificationTypes;
    protected $_name = [
        'verificationTypes' => 'VerificationTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verificationTypes) {
            $res['VerificationTypes'] = $this->verificationTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return verificationPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerificationTypes'])) {
            if (!empty($map['VerificationTypes'])) {
                $model->verificationTypes = $map['VerificationTypes'];
            }
        }

        return $model;
    }
}
