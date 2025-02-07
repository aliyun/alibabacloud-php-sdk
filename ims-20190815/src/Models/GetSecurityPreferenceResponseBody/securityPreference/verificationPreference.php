<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Dara\Model;

class verificationPreference extends Model
{
    /**
     * @var string[]
     */
    public $verificationTypes;
    protected $_name = [
        'verificationTypes' => 'VerificationTypes',
    ];

    public function validate()
    {
        if (\is_array($this->verificationTypes)) {
            Model::validateArray($this->verificationTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->verificationTypes) {
            if (\is_array($this->verificationTypes)) {
                $res['VerificationTypes'] = [];
                $n1                       = 0;
                foreach ($this->verificationTypes as $item1) {
                    $res['VerificationTypes'][$n1++] = $item1;
                }
            }
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
        if (isset($map['VerificationTypes'])) {
            if (!empty($map['VerificationTypes'])) {
                $model->verificationTypes = [];
                $n1                       = 0;
                foreach ($map['VerificationTypes'] as $item1) {
                    $model->verificationTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
