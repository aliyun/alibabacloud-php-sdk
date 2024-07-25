<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceRequest\k8sServiceSourceConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceRequest\nacosServiceSourceConfig;
use AlibabaCloud\Tea\Model;

class CreateServiceSourceRequest extends Model
{
    /**
     * @var k8sServiceSourceConfig
     */
    public $k8sServiceSourceConfig;

    /**
     * @var nacosServiceSourceConfig
     */
    public $nacosServiceSourceConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'k8sServiceSourceConfig'   => 'k8sServiceSourceConfig',
        'nacosServiceSourceConfig' => 'nacosServiceSourceConfig',
        'type'                     => 'type',
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
        if (null !== $this->nacosServiceSourceConfig) {
            $res['nacosServiceSourceConfig'] = null !== $this->nacosServiceSourceConfig ? $this->nacosServiceSourceConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['k8sServiceSourceConfig'])) {
            $model->k8sServiceSourceConfig = k8sServiceSourceConfig::fromMap($map['k8sServiceSourceConfig']);
        }
        if (isset($map['nacosServiceSourceConfig'])) {
            $model->nacosServiceSourceConfig = nacosServiceSourceConfig::fromMap($map['nacosServiceSourceConfig']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
