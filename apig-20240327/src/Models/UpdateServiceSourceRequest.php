<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceSourceRequest\k8sServiceSourceConfig;
use AlibabaCloud\Tea\Model;

class UpdateServiceSourceRequest extends Model
{
    /**
     * @var k8sServiceSourceConfig
     */
    public $k8sServiceSourceConfig;
    protected $_name = [
        'k8sServiceSourceConfig' => 'k8sServiceSourceConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sServiceSourceConfig) {
            $res['k8sServiceSourceConfig'] = null !== $this->k8sServiceSourceConfig ? $this->k8sServiceSourceConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['k8sServiceSourceConfig'])) {
            $model->k8sServiceSourceConfig = k8sServiceSourceConfig::fromMap($map['k8sServiceSourceConfig']);
        }

        return $model;
    }
}
