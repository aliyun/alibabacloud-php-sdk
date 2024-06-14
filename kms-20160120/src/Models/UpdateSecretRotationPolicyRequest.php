<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSecretRotationPolicyRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic rotation. Valid values:
     *
     *   true: enables automatic rotation.
     *   false: does not enable automatic rotation. This is the default value.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @description The interval for automatic rotation. Valid values: 6 hours to 8,760 hours (365 days).
     *
     * >  This parameter is required if you set the EnableAutomaticRotation parameter to true. This parameter is ignored if you set the EnableAutomaticRotation parameter to false or does not specify the EnableAutomaticRotation parameter.
     * @example 30d
     *
     * @var string
     */
    public $rotationInterval;

    /**
     * @description The name of the secret.
     *
     * This parameter is required.
     * @example RdsSecret/Mysql5.4/MyCred
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'rotationInterval'        => 'RotationInterval',
        'secretName'              => 'SecretName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAutomaticRotation) {
            $res['EnableAutomaticRotation'] = $this->enableAutomaticRotation;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretRotationPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAutomaticRotation'])) {
            $model->enableAutomaticRotation = $map['EnableAutomaticRotation'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
