<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceSourceRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceSourceRequest\k8sServiceSourceConfig\ingressConfig;
use AlibabaCloud\Tea\Model;

class k8sServiceSourceConfig extends Model
{
    /**
     * @var ingressConfig
     */
    public $ingressConfig;
    protected $_name = [
        'ingressConfig' => 'ingressConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ingressConfig) {
            $res['ingressConfig'] = null !== $this->ingressConfig ? $this->ingressConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return k8sServiceSourceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ingressConfig'])) {
            $model->ingressConfig = ingressConfig::fromMap($map['ingressConfig']);
        }

        return $model;
    }
}
