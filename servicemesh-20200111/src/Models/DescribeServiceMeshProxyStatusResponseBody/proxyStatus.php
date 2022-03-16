<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshProxyStatusResponseBody;

use AlibabaCloud\Tea\Model;

class proxyStatus extends Model
{
    /**
     * @var string
     */
    public $clusterSynced;

    /**
     * @var string
     */
    public $endpointPercent;

    /**
     * @var string
     */
    public $endpointSynced;

    /**
     * @var string
     */
    public $istioVersion;

    /**
     * @var string
     */
    public $listenerSynced;

    /**
     * @var string
     */
    public $proxyId;

    /**
     * @var string
     */
    public $proxyVersion;

    /**
     * @var string
     */
    public $routeSynced;
    protected $_name = [
        'clusterSynced'   => 'ClusterSynced',
        'endpointPercent' => 'EndpointPercent',
        'endpointSynced'  => 'EndpointSynced',
        'istioVersion'    => 'IstioVersion',
        'listenerSynced'  => 'ListenerSynced',
        'proxyId'         => 'ProxyId',
        'proxyVersion'    => 'ProxyVersion',
        'routeSynced'     => 'RouteSynced',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterSynced) {
            $res['ClusterSynced'] = $this->clusterSynced;
        }
        if (null !== $this->endpointPercent) {
            $res['EndpointPercent'] = $this->endpointPercent;
        }
        if (null !== $this->endpointSynced) {
            $res['EndpointSynced'] = $this->endpointSynced;
        }
        if (null !== $this->istioVersion) {
            $res['IstioVersion'] = $this->istioVersion;
        }
        if (null !== $this->listenerSynced) {
            $res['ListenerSynced'] = $this->listenerSynced;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->proxyVersion) {
            $res['ProxyVersion'] = $this->proxyVersion;
        }
        if (null !== $this->routeSynced) {
            $res['RouteSynced'] = $this->routeSynced;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxyStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterSynced'])) {
            $model->clusterSynced = $map['ClusterSynced'];
        }
        if (isset($map['EndpointPercent'])) {
            $model->endpointPercent = $map['EndpointPercent'];
        }
        if (isset($map['EndpointSynced'])) {
            $model->endpointSynced = $map['EndpointSynced'];
        }
        if (isset($map['IstioVersion'])) {
            $model->istioVersion = $map['IstioVersion'];
        }
        if (isset($map['ListenerSynced'])) {
            $model->listenerSynced = $map['ListenerSynced'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['ProxyVersion'])) {
            $model->proxyVersion = $map['ProxyVersion'];
        }
        if (isset($map['RouteSynced'])) {
            $model->routeSynced = $map['RouteSynced'];
        }

        return $model;
    }
}
