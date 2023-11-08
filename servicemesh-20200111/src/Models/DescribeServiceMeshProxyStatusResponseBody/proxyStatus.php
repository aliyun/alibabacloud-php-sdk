<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshProxyStatusResponseBody;

use AlibabaCloud\Tea\Model;

class proxyStatus extends Model
{
    /**
     * @description The update status of the proxy. Valid values:
     *
     *   `SYNCED`: The status of the proxy is updated.
     *   `NOT SENT`: The status of the proxy is not updated.
     *   `STALE (Never Acknowledged)`: Istiod has sent multiple requests to the Envoy proxy to update the status of the proxy but receives no response.
     *   `STALE`: Istiod has sent a request to the Envoy proxy to update the status of the proxy but receives no response.
     *
     * @example SYNCED
     *
     * @var string
     */
    public $clusterSynced;

    /**
     * @description The percentage of the updated endpoints.
     *
     * @example 1
     *
     * @var string
     */
    public $endpointPercent;

    /**
     * @description The update status of the endpoint. Valid values:
     *
     *   `SYNCED`: The status of the endpoint is updated.
     *   `NOT SENT`: The status of the endpoint is not updated.
     *   `STALE (Never Acknowledged)`: Istiod has sent multiple requests to the Envoy proxy to update the status of the endpoint but receives no response.
     *   `STALE`: Istiod has sent a request to the Envoy proxy to update the status of the endpoint but receives no response.
     *
     * @example SYNCED
     *
     * @var string
     */
    public $endpointSynced;

    /**
     * @description The version of Istiod.
     *
     * @example 1.9.7
     *
     * @var string
     */
    public $istioVersion;

    /**
     * @description The update status of the listener. Valid values:
     *
     *   `SYNCED`: The status of the listener is updated.
     *   `NOT SENT`: The status of the listener is not updated.
     *   `STALE (Never Acknowledged)`: Istiod has sent multiple requests to the Envoy proxy to update the status of the listener but receives no response.
     *   `STALE`: Istiod has sent a request to the Envoy proxy to update the status of the listener but receives no response.
     *
     * @example SYNCED
     *
     * @var string
     */
    public $listenerSynced;

    /**
     * @description The ID of the proxy on the data plane.
     *
     * @example 119q****
     *
     * @var string
     */
    public $proxyId;

    /**
     * @description The version number of a proxy on the data plane.
     *
     * @example 1.9.7
     *
     * @var string
     */
    public $proxyVersion;

    /**
     * @description The update status of the route. Valid values:
     *
     *   `SYNCED`: The status of the route is updated.
     *   `NOT SENT`: The status of the route is not updated.
     *   `STALE (Never Acknowledged)`: Istiod has sent multiple requests to the Envoy proxy to update the status of the route but receives no response.
     *   `STALE`: Istiod has sent a request to the Envoy proxy to update the status of the route but receives no response.
     *
     * @example SYNCED
     *
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
