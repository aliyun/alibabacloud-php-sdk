<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class envFroms extends Model
{
    /**
     * @description 配置项引用
     *
     * @var string
     */
    public $configMapRef;

    /**
     * @description 保密字典引用
     *
     * @var string
     */
    public $secretRef;
    protected $_name = [
        'configMapRef' => 'ConfigMapRef',
        'secretRef'    => 'SecretRef',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return envFroms
     */
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
