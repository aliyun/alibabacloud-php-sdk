<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class UpdateSecretRotationPolicyRequest extends Model
{
    /**
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @var string
     */
    public $rotationInterval;

    /**
     * @var string
     */
    public $secretName;
    protected $_name = [
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'rotationInterval' => 'RotationInterval',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
