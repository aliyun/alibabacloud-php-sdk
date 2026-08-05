<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class UpdateMFAAuthenticationSettingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $allowedVerificationTypesShrink;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $MFAAuthenticationSettings;

    /**
     * @var string
     */
    public $operationForRiskLogin;
    protected $_name = [
        'allowedVerificationTypesShrink' => 'AllowedVerificationTypes',
        'directoryId' => 'DirectoryId',
        'MFAAuthenticationSettings' => 'MFAAuthenticationSettings',
        'operationForRiskLogin' => 'OperationForRiskLogin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedVerificationTypesShrink) {
            $res['AllowedVerificationTypes'] = $this->allowedVerificationTypesShrink;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->MFAAuthenticationSettings) {
            $res['MFAAuthenticationSettings'] = $this->MFAAuthenticationSettings;
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
            $model->allowedVerificationTypesShrink = $map['AllowedVerificationTypes'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['MFAAuthenticationSettings'])) {
            $model->MFAAuthenticationSettings = $map['MFAAuthenticationSettings'];
        }

        if (isset($map['OperationForRiskLogin'])) {
            $model->operationForRiskLogin = $map['OperationForRiskLogin'];
        }

        return $model;
    }
}
