<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretRequest extends Model
{
    /**
     * @description Specifies whether to forcibly delete the secret. If this parameter is set to true, the secret cannot be recovered.
     *
     * Valid values:
     *
     *   **true**
     *   **false** (default value)
     *
     * @example false
     *
     * @var string
     */
    public $forceDeleteWithoutRecovery;

    /**
     * @description Specifies the recovery period of the secret if you do not forcibly delete it. Default value: 30. Unit: Days.
     *
     * @example 10
     *
     * @var string
     */
    public $recoveryWindowInDays;

    /**
     * @description The name of the secret.
     *
     * This parameter is required.
     * @example secret001
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'forceDeleteWithoutRecovery' => 'ForceDeleteWithoutRecovery',
        'recoveryWindowInDays'       => 'RecoveryWindowInDays',
        'secretName'                 => 'SecretName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceDeleteWithoutRecovery) {
            $res['ForceDeleteWithoutRecovery'] = $this->forceDeleteWithoutRecovery;
        }
        if (null !== $this->recoveryWindowInDays) {
            $res['RecoveryWindowInDays'] = $this->recoveryWindowInDays;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceDeleteWithoutRecovery'])) {
            $model->forceDeleteWithoutRecovery = $map['ForceDeleteWithoutRecovery'];
        }
        if (isset($map['RecoveryWindowInDays'])) {
            $model->recoveryWindowInDays = $map['RecoveryWindowInDays'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
