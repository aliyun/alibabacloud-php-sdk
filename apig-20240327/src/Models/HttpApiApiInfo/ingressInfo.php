<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\ingressInfo\environmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\ingressInfo\k8sClusterInfo;
use AlibabaCloud\Tea\Model;

class ingressInfo extends Model
{
    /**
     * @var environmentInfo
     */
    public $environmentInfo;

    /**
     * @var string
     */
    public $ingressClass;

    /**
     * @var k8sClusterInfo
     */
    public $k8sClusterInfo;

    /**
     * @var bool
     */
    public $overrideIngressIp;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'environmentInfo'   => 'environmentInfo',
        'ingressClass'      => 'ingressClass',
        'k8sClusterInfo'    => 'k8sClusterInfo',
        'overrideIngressIp' => 'overrideIngressIp',
        'sourceId'          => 'sourceId',
        'watchNamespace'    => 'watchNamespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toMap() : null;
        }
        if (null !== $this->ingressClass) {
            $res['ingressClass'] = $this->ingressClass;
        }
        if (null !== $this->k8sClusterInfo) {
            $res['k8sClusterInfo'] = null !== $this->k8sClusterInfo ? $this->k8sClusterInfo->toMap() : null;
        }
        if (null !== $this->overrideIngressIp) {
            $res['overrideIngressIp'] = $this->overrideIngressIp;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->watchNamespace) {
            $res['watchNamespace'] = $this->watchNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentInfo'])) {
            $model->environmentInfo = environmentInfo::fromMap($map['environmentInfo']);
        }
        if (isset($map['ingressClass'])) {
            $model->ingressClass = $map['ingressClass'];
        }
        if (isset($map['k8sClusterInfo'])) {
            $model->k8sClusterInfo = k8sClusterInfo::fromMap($map['k8sClusterInfo']);
        }
        if (isset($map['overrideIngressIp'])) {
            $model->overrideIngressIp = $map['overrideIngressIp'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['watchNamespace'])) {
            $model->watchNamespace = $map['watchNamespace'];
        }

        return $model;
    }
}
