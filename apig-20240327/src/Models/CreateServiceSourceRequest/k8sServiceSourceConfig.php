<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceRequest\k8sServiceSourceConfig\authorizeSecurityGroupRules;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceRequest\k8sServiceSourceConfig\ingressConfig;
use AlibabaCloud\Tea\Model;

class k8sServiceSourceConfig extends Model
{
    /**
     * @var authorizeSecurityGroupRules[]
     */
    public $authorizeSecurityGroupRules;

    /**
     * @example c4a21b3560fad4ec299f3e******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var ingressConfig
     */
    public $ingressConfig;
    protected $_name = [
        'authorizeSecurityGroupRules' => 'authorizeSecurityGroupRules',
        'clusterId'                   => 'clusterId',
        'ingressConfig'               => 'ingressConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizeSecurityGroupRules) {
            $res['authorizeSecurityGroupRules'] = [];
            if (null !== $this->authorizeSecurityGroupRules && \is_array($this->authorizeSecurityGroupRules)) {
                $n = 0;
                foreach ($this->authorizeSecurityGroupRules as $item) {
                    $res['authorizeSecurityGroupRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
     * @return k8sServiceSourceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorizeSecurityGroupRules'])) {
            if (!empty($map['authorizeSecurityGroupRules'])) {
                $model->authorizeSecurityGroupRules = [];
                $n                                  = 0;
                foreach ($map['authorizeSecurityGroupRules'] as $item) {
                    $model->authorizeSecurityGroupRules[$n++] = null !== $item ? authorizeSecurityGroupRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
        if (isset($map['ingressConfig'])) {
            $model->ingressConfig = ingressConfig::fromMap($map['ingressConfig']);
        }

        return $model;
    }
}
