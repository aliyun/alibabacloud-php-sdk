<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateNamespaceScopeSidecarConfigRequest extends Model
{
    /**
     * @description The number of worker threads to run in Istio Proxy.
     *
     * @example 2
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description The range of IP addresses that are allowed to access external services. (`global.proxy.excludelPRanges`)
     *
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @description The port that the inbound traffic of the sidecar proxy does not pass through.
     *
     * @example 82
     *
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @description The port that the outbound traffic of the sidecar proxy does not pass through.
     *
     * @example 81
     *
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @description Specifies whether applications can be started only after Istio Proxy starts. Valid values:
     *
     *   `true`: Applications can be started only after Istio Proxy starts.
     *   `false`: Applications can be started before Istio Proxy starts.
     *
     * @example true
     *
     * @var bool
     */
    public $holdApplicationUntilProxyStarts;

    /**
     * @description The range of IP addresses that are denied to access external services. (`global.proxy.includelPRanges`)
     *
     * @example *
     *
     * @var string
     */
    public $includeIPRanges;

    /**
     * @description The port that the inbound traffic of the sidecar proxy passes through.
     *
     * @example 83
     *
     * @var string
     */
    public $includeInboundPorts;

    /**
     * @description The port that the outbound traffic of the sidecar proxy passes through.
     *
     * @example 84
     *
     * @var string
     */
    public $includeOutboundPorts;

    /**
     * @description The mode in which the sidecar proxy intercepts inbound traffic. Valid values:
     *
     *   `REDIRECT`: The sidecar proxy intercepts inbound traffic in the REDIRECT mode.
     *   `TPROXY`: The sidecar proxy intercepts inbound traffic in the TPROXY mode.
     *
     * @var string
     */
    public $interceptionMode;

    /**
     * @description Specifies whether to enable the Domain Name System (DNS) proxy feature. Valid values:
     *
     *   `true`: The DNS proxy feature is enabled.
     *   `false`: The DNS proxy feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $istioDNSProxyEnabled;

    /**
     * @description The lifecycle of the sidecar proxy.
     *
     * @example {"postStart":{"exec":{"command":["pilot-agent","wait"]}},"preStop":{"exec":{"command":["/bin/sh","-c","sleep 15"]}}}
     *
     * @var string
     */
    public $lifecycle;

    /**
     * @description The log level. Valid values: `info`, `debug`, `tracing`, and `error`.
     *
     * @example info
     *
     * @var string
     */
    public $logLevel;

    /**
     * @description The namespace for which you want to update the sidecar proxy configurations.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The post-start parameters of Istio Proxy.
     *
     * @example {"exec":{"command":["pilot-agent","wait"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The pre-close parameters of Istio Proxy.
     *
     * @example {"exec":{"command":["/bin/sh","-c","sleep 15"]}}
     *
     * @var string
     */
    public $preStop;

    /**
     * @var string
     */
    public $proxyInitAckSloCPUResourceLimit;

    /**
     * @var string
     */
    public $proxyInitAckSloCPUResourceRequest;

    /**
     * @var string
     */
    public $proxyInitAckSloMemoryResourceLimit;

    /**
     * @var string
     */
    public $proxyInitAckSloMemoryResourceRequest;

    /**
     * @description The maximum number of CPU cores that are available to the sidecar proxy init container.
     *
     * @example 2000 m
     *
     * @var string
     */
    public $proxyInitCPUResourceLimit;

    /**
     * @description The minimum number of CPU cores that are requested by the sidecar proxy init container.
     *
     * @example 60 m
     *
     * @var string
     */
    public $proxyInitCPUResourceRequest;

    /**
     * @description The maximum size of memory that is available to the sidecar proxy init container.
     *
     * @example 50 Mi
     *
     * @var string
     */
    public $proxyInitMemoryResourceLimit;

    /**
     * @description The minimum size of memory that is requested by the sidecar proxy init container.
     *
     * @example 30 Mi
     *
     * @var string
     */
    public $proxyInitMemoryResourceRequest;

    /**
     * @var string
     */
    public $proxyMetadata;

    /**
     * @description The monitoring metrics for data collected by Envoy proxies. The value is in the JSON format.
     *
     * @example { "inclusionPrefixes": [ "cluster.outbound", "cluster_manager", "listener_manager", "server", "cluster.xds-grpc" ], "inclusionRegexps": [ "listener.*.downstream_cx_total", "listener.*.downstream_cx_active" ] }
     *
     * @var string
     */
    public $proxyStatsMatcher;

    /**
     * @description The ID of the ASM instance.
     *
     * @example ca04bc38979214bf2882be79d39b4****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $sidecarProxyAckSloCPUResourceLimit;

    /**
     * @var string
     */
    public $sidecarProxyAckSloCPUResourceRequest;

    /**
     * @var string
     */
    public $sidecarProxyAckSloMemoryResourceLimit;

    /**
     * @var string
     */
    public $sidecarProxyAckSloMemoryResourceRequest;

    /**
     * @description The maximum number of CPU cores that are available to the sidecar proxy container.
     *
     * @example 2000 m
     *
     * @var string
     */
    public $sidecarProxyCPUResourceLimit;

    /**
     * @description The minimum number of CPU cores that are requested by the sidecar proxy container.
     *
     * @example 60 m
     *
     * @var string
     */
    public $sidecarProxyCPUResourceRequest;

    /**
     * @description The maximum size of memory that is available to the sidecar proxy container.
     *
     * @example 50 Mi
     *
     * @var string
     */
    public $sidecarProxyMemoryResourceLimit;

    /**
     * @description The minimum size of memory that is requested by the sidecar proxy container.
     *
     * @example 30 Mi
     *
     * @var string
     */
    public $sidecarProxyMemoryResourceRequest;

    /**
     * @description The maximum period of time that the sidecar proxy waits for a request to end.
     *
     * @example 6s
     *
     * @var string
     */
    public $terminationDrainDuration;

    /**
     * @description The custom configurations of Tracing Analysis. The configurations must be serialized into JSON strings. The configurations contain the following parameters:
     *
     *   `sampling`: The sampling rate, which is of the DOUBLE type.
     *
     *   `custom_tags`: The custom tags added to reported spans, which are of the MAP type. The key of a tag is of the string type. The value of a tag is in the JSON format. A custom tag can belong to one of the following types:
     *
     *   `literal`: The tag value is a fixed value in the JSON format. This tag must contain the `value` field that specifies a literal. Example: `{"value":"test"}`.
     *   `header`: The tag value is a request header in the JSON format. This tag must contain the `name` field and `defaultValue` field.The name field indicates the name of the request header. The defaultValue field indicates the default value that is used when no request header is available. Example: `{"name":"test","defaultValue":"test"}`.
     *   `environment`: The tag value is an environment variable in the JSON format. This tag must contain the `name` field and `defaultValue` field. The name field indicates the name of the environment variable. The defaultValue field indicates the environment variable that is used when no environment variable is available. Example: `{"name":"test","defaultValue":"test"}`.
     *
     * @var string
     */
    public $tracing;
    protected $_name = [
        'concurrency'                             => 'Concurrency',
        'excludeIPRanges'                         => 'ExcludeIPRanges',
        'excludeInboundPorts'                     => 'ExcludeInboundPorts',
        'excludeOutboundPorts'                    => 'ExcludeOutboundPorts',
        'holdApplicationUntilProxyStarts'         => 'HoldApplicationUntilProxyStarts',
        'includeIPRanges'                         => 'IncludeIPRanges',
        'includeInboundPorts'                     => 'IncludeInboundPorts',
        'includeOutboundPorts'                    => 'IncludeOutboundPorts',
        'interceptionMode'                        => 'InterceptionMode',
        'istioDNSProxyEnabled'                    => 'IstioDNSProxyEnabled',
        'lifecycle'                               => 'Lifecycle',
        'logLevel'                                => 'LogLevel',
        'namespace'                               => 'Namespace',
        'postStart'                               => 'PostStart',
        'preStop'                                 => 'PreStop',
        'proxyInitAckSloCPUResourceLimit'         => 'ProxyInitAckSloCPUResourceLimit',
        'proxyInitAckSloCPUResourceRequest'       => 'ProxyInitAckSloCPUResourceRequest',
        'proxyInitAckSloMemoryResourceLimit'      => 'ProxyInitAckSloMemoryResourceLimit',
        'proxyInitAckSloMemoryResourceRequest'    => 'ProxyInitAckSloMemoryResourceRequest',
        'proxyInitCPUResourceLimit'               => 'ProxyInitCPUResourceLimit',
        'proxyInitCPUResourceRequest'             => 'ProxyInitCPUResourceRequest',
        'proxyInitMemoryResourceLimit'            => 'ProxyInitMemoryResourceLimit',
        'proxyInitMemoryResourceRequest'          => 'ProxyInitMemoryResourceRequest',
        'proxyMetadata'                           => 'ProxyMetadata',
        'proxyStatsMatcher'                       => 'ProxyStatsMatcher',
        'serviceMeshId'                           => 'ServiceMeshId',
        'sidecarProxyAckSloCPUResourceLimit'      => 'SidecarProxyAckSloCPUResourceLimit',
        'sidecarProxyAckSloCPUResourceRequest'    => 'SidecarProxyAckSloCPUResourceRequest',
        'sidecarProxyAckSloMemoryResourceLimit'   => 'SidecarProxyAckSloMemoryResourceLimit',
        'sidecarProxyAckSloMemoryResourceRequest' => 'SidecarProxyAckSloMemoryResourceRequest',
        'sidecarProxyCPUResourceLimit'            => 'SidecarProxyCPUResourceLimit',
        'sidecarProxyCPUResourceRequest'          => 'SidecarProxyCPUResourceRequest',
        'sidecarProxyMemoryResourceLimit'         => 'SidecarProxyMemoryResourceLimit',
        'sidecarProxyMemoryResourceRequest'       => 'SidecarProxyMemoryResourceRequest',
        'terminationDrainDuration'                => 'TerminationDrainDuration',
        'tracing'                                 => 'Tracing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->excludeIPRanges) {
            $res['ExcludeIPRanges'] = $this->excludeIPRanges;
        }
        if (null !== $this->excludeInboundPorts) {
            $res['ExcludeInboundPorts'] = $this->excludeInboundPorts;
        }
        if (null !== $this->excludeOutboundPorts) {
            $res['ExcludeOutboundPorts'] = $this->excludeOutboundPorts;
        }
        if (null !== $this->holdApplicationUntilProxyStarts) {
            $res['HoldApplicationUntilProxyStarts'] = $this->holdApplicationUntilProxyStarts;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->includeInboundPorts) {
            $res['IncludeInboundPorts'] = $this->includeInboundPorts;
        }
        if (null !== $this->includeOutboundPorts) {
            $res['IncludeOutboundPorts'] = $this->includeOutboundPorts;
        }
        if (null !== $this->interceptionMode) {
            $res['InterceptionMode'] = $this->interceptionMode;
        }
        if (null !== $this->istioDNSProxyEnabled) {
            $res['IstioDNSProxyEnabled'] = $this->istioDNSProxyEnabled;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->proxyInitAckSloCPUResourceLimit) {
            $res['ProxyInitAckSloCPUResourceLimit'] = $this->proxyInitAckSloCPUResourceLimit;
        }
        if (null !== $this->proxyInitAckSloCPUResourceRequest) {
            $res['ProxyInitAckSloCPUResourceRequest'] = $this->proxyInitAckSloCPUResourceRequest;
        }
        if (null !== $this->proxyInitAckSloMemoryResourceLimit) {
            $res['ProxyInitAckSloMemoryResourceLimit'] = $this->proxyInitAckSloMemoryResourceLimit;
        }
        if (null !== $this->proxyInitAckSloMemoryResourceRequest) {
            $res['ProxyInitAckSloMemoryResourceRequest'] = $this->proxyInitAckSloMemoryResourceRequest;
        }
        if (null !== $this->proxyInitCPUResourceLimit) {
            $res['ProxyInitCPUResourceLimit'] = $this->proxyInitCPUResourceLimit;
        }
        if (null !== $this->proxyInitCPUResourceRequest) {
            $res['ProxyInitCPUResourceRequest'] = $this->proxyInitCPUResourceRequest;
        }
        if (null !== $this->proxyInitMemoryResourceLimit) {
            $res['ProxyInitMemoryResourceLimit'] = $this->proxyInitMemoryResourceLimit;
        }
        if (null !== $this->proxyInitMemoryResourceRequest) {
            $res['ProxyInitMemoryResourceRequest'] = $this->proxyInitMemoryResourceRequest;
        }
        if (null !== $this->proxyMetadata) {
            $res['ProxyMetadata'] = $this->proxyMetadata;
        }
        if (null !== $this->proxyStatsMatcher) {
            $res['ProxyStatsMatcher'] = $this->proxyStatsMatcher;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->sidecarProxyAckSloCPUResourceLimit) {
            $res['SidecarProxyAckSloCPUResourceLimit'] = $this->sidecarProxyAckSloCPUResourceLimit;
        }
        if (null !== $this->sidecarProxyAckSloCPUResourceRequest) {
            $res['SidecarProxyAckSloCPUResourceRequest'] = $this->sidecarProxyAckSloCPUResourceRequest;
        }
        if (null !== $this->sidecarProxyAckSloMemoryResourceLimit) {
            $res['SidecarProxyAckSloMemoryResourceLimit'] = $this->sidecarProxyAckSloMemoryResourceLimit;
        }
        if (null !== $this->sidecarProxyAckSloMemoryResourceRequest) {
            $res['SidecarProxyAckSloMemoryResourceRequest'] = $this->sidecarProxyAckSloMemoryResourceRequest;
        }
        if (null !== $this->sidecarProxyCPUResourceLimit) {
            $res['SidecarProxyCPUResourceLimit'] = $this->sidecarProxyCPUResourceLimit;
        }
        if (null !== $this->sidecarProxyCPUResourceRequest) {
            $res['SidecarProxyCPUResourceRequest'] = $this->sidecarProxyCPUResourceRequest;
        }
        if (null !== $this->sidecarProxyMemoryResourceLimit) {
            $res['SidecarProxyMemoryResourceLimit'] = $this->sidecarProxyMemoryResourceLimit;
        }
        if (null !== $this->sidecarProxyMemoryResourceRequest) {
            $res['SidecarProxyMemoryResourceRequest'] = $this->sidecarProxyMemoryResourceRequest;
        }
        if (null !== $this->terminationDrainDuration) {
            $res['TerminationDrainDuration'] = $this->terminationDrainDuration;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNamespaceScopeSidecarConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ExcludeIPRanges'])) {
            $model->excludeIPRanges = $map['ExcludeIPRanges'];
        }
        if (isset($map['ExcludeInboundPorts'])) {
            $model->excludeInboundPorts = $map['ExcludeInboundPorts'];
        }
        if (isset($map['ExcludeOutboundPorts'])) {
            $model->excludeOutboundPorts = $map['ExcludeOutboundPorts'];
        }
        if (isset($map['HoldApplicationUntilProxyStarts'])) {
            $model->holdApplicationUntilProxyStarts = $map['HoldApplicationUntilProxyStarts'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['IncludeInboundPorts'])) {
            $model->includeInboundPorts = $map['IncludeInboundPorts'];
        }
        if (isset($map['IncludeOutboundPorts'])) {
            $model->includeOutboundPorts = $map['IncludeOutboundPorts'];
        }
        if (isset($map['InterceptionMode'])) {
            $model->interceptionMode = $map['InterceptionMode'];
        }
        if (isset($map['IstioDNSProxyEnabled'])) {
            $model->istioDNSProxyEnabled = $map['IstioDNSProxyEnabled'];
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['ProxyInitAckSloCPUResourceLimit'])) {
            $model->proxyInitAckSloCPUResourceLimit = $map['ProxyInitAckSloCPUResourceLimit'];
        }
        if (isset($map['ProxyInitAckSloCPUResourceRequest'])) {
            $model->proxyInitAckSloCPUResourceRequest = $map['ProxyInitAckSloCPUResourceRequest'];
        }
        if (isset($map['ProxyInitAckSloMemoryResourceLimit'])) {
            $model->proxyInitAckSloMemoryResourceLimit = $map['ProxyInitAckSloMemoryResourceLimit'];
        }
        if (isset($map['ProxyInitAckSloMemoryResourceRequest'])) {
            $model->proxyInitAckSloMemoryResourceRequest = $map['ProxyInitAckSloMemoryResourceRequest'];
        }
        if (isset($map['ProxyInitCPUResourceLimit'])) {
            $model->proxyInitCPUResourceLimit = $map['ProxyInitCPUResourceLimit'];
        }
        if (isset($map['ProxyInitCPUResourceRequest'])) {
            $model->proxyInitCPUResourceRequest = $map['ProxyInitCPUResourceRequest'];
        }
        if (isset($map['ProxyInitMemoryResourceLimit'])) {
            $model->proxyInitMemoryResourceLimit = $map['ProxyInitMemoryResourceLimit'];
        }
        if (isset($map['ProxyInitMemoryResourceRequest'])) {
            $model->proxyInitMemoryResourceRequest = $map['ProxyInitMemoryResourceRequest'];
        }
        if (isset($map['ProxyMetadata'])) {
            $model->proxyMetadata = $map['ProxyMetadata'];
        }
        if (isset($map['ProxyStatsMatcher'])) {
            $model->proxyStatsMatcher = $map['ProxyStatsMatcher'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['SidecarProxyAckSloCPUResourceLimit'])) {
            $model->sidecarProxyAckSloCPUResourceLimit = $map['SidecarProxyAckSloCPUResourceLimit'];
        }
        if (isset($map['SidecarProxyAckSloCPUResourceRequest'])) {
            $model->sidecarProxyAckSloCPUResourceRequest = $map['SidecarProxyAckSloCPUResourceRequest'];
        }
        if (isset($map['SidecarProxyAckSloMemoryResourceLimit'])) {
            $model->sidecarProxyAckSloMemoryResourceLimit = $map['SidecarProxyAckSloMemoryResourceLimit'];
        }
        if (isset($map['SidecarProxyAckSloMemoryResourceRequest'])) {
            $model->sidecarProxyAckSloMemoryResourceRequest = $map['SidecarProxyAckSloMemoryResourceRequest'];
        }
        if (isset($map['SidecarProxyCPUResourceLimit'])) {
            $model->sidecarProxyCPUResourceLimit = $map['SidecarProxyCPUResourceLimit'];
        }
        if (isset($map['SidecarProxyCPUResourceRequest'])) {
            $model->sidecarProxyCPUResourceRequest = $map['SidecarProxyCPUResourceRequest'];
        }
        if (isset($map['SidecarProxyMemoryResourceLimit'])) {
            $model->sidecarProxyMemoryResourceLimit = $map['SidecarProxyMemoryResourceLimit'];
        }
        if (isset($map['SidecarProxyMemoryResourceRequest'])) {
            $model->sidecarProxyMemoryResourceRequest = $map['SidecarProxyMemoryResourceRequest'];
        }
        if (isset($map['TerminationDrainDuration'])) {
            $model->terminationDrainDuration = $map['TerminationDrainDuration'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }

        return $model;
    }
}
