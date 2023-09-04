<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateMFAAuthenticationSettingsRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description Specifies whether to enable MFA for all users. Valid value:
     *
     * - OnlyRiskyLogin: MFA is required only for unusual logons.
     * @example Enabled
     *
     * @var string
     */
    public $MFAAuthenticationSettings;

    /**
     * @description Specifies whether MFA is required for users who initiated unusual logons. Valid value:
     *
     * - EnforceVerify: MFA is required. If no MFA devices are bound to a user who initiated an unusual logon, the user must bind an MFA device. If an MFA device is already bound to a user who initiated an unusual logon, the user must pass MFA.
     * @example Autonomous
     *
     * @var string
     */
    public $operationForRiskLogin;
    protected $_name = [
        'directoryId'               => 'DirectoryId',
        'MFAAuthenticationSettings' => 'MFAAuthenticationSettings',
        'operationForRiskLogin'     => 'OperationForRiskLogin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return UpdateMFAAuthenticationSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
