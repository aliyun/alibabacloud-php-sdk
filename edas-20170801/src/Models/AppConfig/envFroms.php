<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Dara\Model;

class envFroms extends Model
{
    /**
     * @var string
     */
    public $configMapRef;

    /**
     * @var string
     */
    public $secretRef;
    protected $_name = [
        'configMapRef' => 'ConfigMapRef',
        'secretRef' => 'SecretRef',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configMapRef) {
            $res['ConfigMapRef'] = $this->configMapRef;
        }

        if (null !== $this->secretRef) {
            $res['SecretRef'] = $this->secretRef;
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
        if (isset($map['ConfigMapRef'])) {
            $model->configMapRef = $map['ConfigMapRef'];
        }

        if (isset($map['SecretRef'])) {
            $model->secretRef = $map['SecretRef'];
        }

        return $model;
    }
}
