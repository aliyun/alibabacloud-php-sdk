<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretRequest extends Model
{
    /**
     * @var string
     */
    public $forceDeleteWithoutRecovery;

    /**
     * @var string
     */
    public $recoveryWindowInDays;

    /**
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
