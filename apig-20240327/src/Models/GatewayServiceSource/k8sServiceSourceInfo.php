<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GatewayServiceSource;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayServiceSource\k8sServiceSourceInfo\ingressConfig;
use AlibabaCloud\Tea\Model;

class k8sServiceSourceInfo extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var ingressConfig
     */
    public $ingressConfig;
    protected $_name = [
        'clusterId'     => 'clusterId',
        'ingressConfig' => 'ingressConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }
        if (null !== $this->ingressConfig) {
            $res['ingressConfig'] = null !== $this->ingressConfig ? $this->ingressConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return k8sServiceSourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
        if (isset($map['ingressConfig'])) {
            $model->ingressConfig = ingressConfig::fromMap($map['ingressConfig']);
        }

        return $model;
    }
}
