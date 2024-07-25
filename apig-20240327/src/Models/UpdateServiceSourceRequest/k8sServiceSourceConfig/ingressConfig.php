<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceSourceRequest\k8sServiceSourceConfig;

use AlibabaCloud\Tea\Model;

class ingressConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example mse
     *
     * @var string
     */
    public $ingressClass;

    /**
     * @example false
     *
     * @var bool
     */
    public $overrideIngressIp;

    /**
     * @example default
     *
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'enable'            => 'enable',
        'ingressClass'      => 'ingressClass',
        'overrideIngressIp' => 'overrideIngressIp',
        'watchNamespace'    => 'watchNamespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->ingressClass) {
            $res['ingressClass'] = $this->ingressClass;
        }
        if (null !== $this->overrideIngressIp) {
            $res['overrideIngressIp'] = $this->overrideIngressIp;
        }
        if (null !== $this->watchNamespace) {
            $res['watchNamespace'] = $this->watchNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['ingressClass'])) {
            $model->ingressClass = $map['ingressClass'];
        }
        if (isset($map['overrideIngressIp'])) {
            $model->overrideIngressIp = $map['overrideIngressIp'];
        }
        if (isset($map['watchNamespace'])) {
            $model->watchNamespace = $map['watchNamespace'];
        }

        return $model;
    }
}
