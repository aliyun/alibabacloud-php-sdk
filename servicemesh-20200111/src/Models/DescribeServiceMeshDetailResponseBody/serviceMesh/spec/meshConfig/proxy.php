<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class proxy extends Model
{
    /**
     * @description The path to the file that stores the access logs of sidecar proxies.
     *
     * @example /dev/stdout
     *
     * @var string
     */
    public $accessLogFile;

    /**
     * @description The format of the access logs of sidecar proxies.
     *
     * @example {"authority_for":"%REQ(:AUTHORITY)%","bytes_received":"%BYTES_RECEIVED%","bytes_sent":"%BYTES_SENT%","downstream_local_address":"%DOWNSTREAM_LOCAL_ADDRESS%","downstream_remote_address":"%DOWNSTREAM_REMOTE_ADDRESS%","duration":"%DURATION%","istio_policy_status":"%DYNAMIC_METADATA(istio.mixer:status)%","method":"%REQ(:METHOD)%","path":"%REQ(X-ENVOY-ORIGINAL-PATH?:PATH)%","protocol":"%PROTOCOL%","request_id":"%REQ(X-REQUEST-ID)%","requested_server_name":"%REQUESTED_SERVER_NAME%","response_code":"%RESPONSE_CODE%","response_flags":"%RESPONSE_FLAGS%","route_name":"%ROUTE_NAME%","start_time":"%START_TIME%","trace_id":"%REQ(X-B3-TRACEID)%","upstream_cluster":"%UPSTREAM_CLUSTER%","upstream_host":"%UPSTREAM_HOST%","upstream_local_address":"%UPSTREAM_LOCAL_ADDRESS%","upstream_service_time":"%RESP(X-ENVOY-UPSTREAM-SERVICE-TIME)%","upstream_transport_failure_reason":"%UPSTREAM_TRANSPORT_FAILURE_REASON%","user_agent":"%REQ(USER-AGENT)%","x_forwarded_for":"%REQ(X-FORWARDED-FOR)%"}
     *
     * @var string
     */
    public $accessLogFormat;

    /**
     * @description Indicates whether gRPC Access Log Service (ALS) for Envoy is enabled. Valid values:
     *
     *   `true`: gRPC ALS for Envoy is enabled.
     *   `false`: gRPC ALS for Envoy is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $accessLogServiceEnabled;

    /**
     * @description The endpoint of gRPC ALS for Envoy.
     *
     * @example 0.0.0.0
     *
     * @var string
     */
    public $accessLogServiceHost;

    /**
     * @description The port of gRPC ALS for Envoy.
     *
     * @example 9999
     *
     * @var int
     */
    public $accessLogServicePort;

    /**
     * @description The trusted domain.
     *
     * @example cluster.domain
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description Indicates whether the Domain Name System (DNS) proxy feature is enabled. Valid values: Valid values:
     *
     *   `true`: The DNS proxy feature is enabled.
     *   `false`: The DNS proxy feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableDNSProxying;

    /**
     * @description The maximum number of CPU cores.
     *
     * @example 2000m
     *
     * @var string
     */
    public $limitCPU;

    /**
     * @description The maximum size of the memory.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $limitMemory;

    /**
     * @description The number of CPU cores that are requested.
     *
     * @example 100m
     *
     * @var string
     */
    public $requestCPU;

    /**
     * @description The size of the memory that is requested.
     *
     * @example 128Mi
     *
     * @var string
     */
    public $requestMemory;
    protected $_name = [
        'accessLogFile'           => 'AccessLogFile',
        'accessLogFormat'         => 'AccessLogFormat',
        'accessLogServiceEnabled' => 'AccessLogServiceEnabled',
        'accessLogServiceHost'    => 'AccessLogServiceHost',
        'accessLogServicePort'    => 'AccessLogServicePort',
        'clusterDomain'           => 'ClusterDomain',
        'enableDNSProxying'       => 'EnableDNSProxying',
        'limitCPU'                => 'LimitCPU',
        'limitMemory'             => 'LimitMemory',
        'requestCPU'              => 'RequestCPU',
        'requestMemory'           => 'RequestMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogFile) {
            $res['AccessLogFile'] = $this->accessLogFile;
        }
        if (null !== $this->accessLogFormat) {
            $res['AccessLogFormat'] = $this->accessLogFormat;
        }
        if (null !== $this->accessLogServiceEnabled) {
            $res['AccessLogServiceEnabled'] = $this->accessLogServiceEnabled;
        }
        if (null !== $this->accessLogServiceHost) {
            $res['AccessLogServiceHost'] = $this->accessLogServiceHost;
        }
        if (null !== $this->accessLogServicePort) {
            $res['AccessLogServicePort'] = $this->accessLogServicePort;
        }
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->enableDNSProxying) {
            $res['EnableDNSProxying'] = $this->enableDNSProxying;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogFile'])) {
            $model->accessLogFile = $map['AccessLogFile'];
        }
        if (isset($map['AccessLogFormat'])) {
            $model->accessLogFormat = $map['AccessLogFormat'];
        }
        if (isset($map['AccessLogServiceEnabled'])) {
            $model->accessLogServiceEnabled = $map['AccessLogServiceEnabled'];
        }
        if (isset($map['AccessLogServiceHost'])) {
            $model->accessLogServiceHost = $map['AccessLogServiceHost'];
        }
        if (isset($map['AccessLogServicePort'])) {
            $model->accessLogServicePort = $map['AccessLogServicePort'];
        }
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['EnableDNSProxying'])) {
            $model->enableDNSProxying = $map['EnableDNSProxying'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }

        return $model;
    }
}
