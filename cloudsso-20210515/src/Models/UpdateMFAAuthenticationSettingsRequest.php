<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateMFAAuthenticationSettingsRequest extends Model
{
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
