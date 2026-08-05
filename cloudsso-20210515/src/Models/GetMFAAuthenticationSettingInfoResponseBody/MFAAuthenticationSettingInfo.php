<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingInfoResponseBody;

use AlibabaCloud\Dara\Model;

class MFAAuthenticationSettingInfo extends Model
{
    /**
     * @var string[]
     */
    public $allowedVerificationTypes;

    /**
     * @var string
     */
    public $mfaAuthenticationAdvanceSettings;

    /**
     * @var string
     */
    public $operationForRiskLogin;
    protected $_name = [
        'allowedVerificationTypes' => 'AllowedVerificationTypes',
        'mfaAuthenticationAdvanceSettings' => 'MfaAuthenticationAdvanceSettings',
        'operationForRiskLogin' => 'OperationForRiskLogin',
    ];

    public function validate()
    {
        if (\is_array($this->allowedVerificationTypes)) {
            Model::validateArray($this->allowedVerificationTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedVerificationTypes) {
            if (\is_array($this->allowedVerificationTypes)) {
                $res['AllowedVerificationTypes'] = [];
                $n1 = 0;
                foreach ($this->allowedVerificationTypes as $item1) {
                    $res['AllowedVerificationTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mfaAuthenticationAdvanceSettings) {
            $res['MfaAuthenticationAdvanceSettings'] = $this->mfaAuthenticationAdvanceSettings;
        }

        if (null !== $this->operationForRiskLogin) {
            $res['OperationForRiskLogin'] = $this->operationForRiskLogin;
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
        if (isset($map['AllowedVerificationTypes'])) {
            if (!empty($map['AllowedVerificationTypes'])) {
                $model->allowedVerificationTypes = [];
                $n1 = 0;
                foreach ($map['AllowedVerificationTypes'] as $item1) {
                    $model->allowedVerificationTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MfaAuthenticationAdvanceSettings'])) {
            $model->mfaAuthenticationAdvanceSettings = $map['MfaAuthenticationAdvanceSettings'];
        }

        if (isset($map['OperationForRiskLogin'])) {
            $model->operationForRiskLogin = $map['OperationForRiskLogin'];
        }

        return $model;
    }
}
