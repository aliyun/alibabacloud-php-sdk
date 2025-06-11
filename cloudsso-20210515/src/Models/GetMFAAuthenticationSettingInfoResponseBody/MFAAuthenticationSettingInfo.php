<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingInfoResponseBody;

use AlibabaCloud\Dara\Model;

class MFAAuthenticationSettingInfo extends Model
{
    /**
     * @var string
     */
    public $mfaAuthenticationAdvanceSettings;

    /**
     * @var string
     */
    public $operationForRiskLogin;
    protected $_name = [
        'mfaAuthenticationAdvanceSettings' => 'MfaAuthenticationAdvanceSettings',
        'operationForRiskLogin' => 'OperationForRiskLogin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['MfaAuthenticationAdvanceSettings'])) {
            $model->mfaAuthenticationAdvanceSettings = $map['MfaAuthenticationAdvanceSettings'];
        }

        if (isset($map['OperationForRiskLogin'])) {
            $model->operationForRiskLogin = $map['OperationForRiskLogin'];
        }

        return $model;
    }
}
