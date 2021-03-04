<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretRequest extends Model
{
    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $forceDeleteWithoutRecovery;

    /**
     * @var string
     */
    public $recoveryWindowInDays;
    protected $_name = [
        'secretName'                 => 'SecretName',
        'forceDeleteWithoutRecovery' => 'ForceDeleteWithoutRecovery',
        'recoveryWindowInDays'       => 'RecoveryWindowInDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->forceDeleteWithoutRecovery) {
            $res['ForceDeleteWithoutRecovery'] = $this->forceDeleteWithoutRecovery;
        }
        if (null !== $this->recoveryWindowInDays) {
            $res['RecoveryWindowInDays'] = $this->recoveryWindowInDays;
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
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['ForceDeleteWithoutRecovery'])) {
            $model->forceDeleteWithoutRecovery = $map['ForceDeleteWithoutRecovery'];
        }
        if (isset($map['RecoveryWindowInDays'])) {
            $model->recoveryWindowInDays = $map['RecoveryWindowInDays'];
        }

        return $model;
    }
}
