<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\proxyStatsMatcher;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyAckSloResource;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyInitAckSloResource;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyInitResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyInitResourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyResourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\tracing;
use AlibabaCloud\Tea\Model;

class configPatches extends Model
{
    /**
     * @description The number of worker threads to run in the istio-proxy container.
     *
     * @example 2
     *
     * @var int
     */
    public $concurrency;

    /**
     * @var bool
     */
    public $enableCoreDump;

    /**
     * @description The inbound ports to be excluded from redirection to the sidecar proxy in the ASM instance.
     *
     * @example 82
     *
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @description The outbound IP ranges in CIDR form to be excluded from redirection to the sidecar proxy in the ASM instance.
     *
     * @example 192.168.1.3/31
     *
     * @var string
     */
    public $excludeOutboundIPRanges;

    /**
     * @description The outbound ports to be excluded from redirection to the sidecar proxy in the ASM instance.
     *
     * @example 81
     *
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @description Indicates whether applications can be started only after the istio-proxy container starts. Valid values:
     *
     *   `true`
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $holdApplicationUntilProxyStarts;

    /**
     * @description The inbound ports for which traffic is to be redirected to the sidecar proxy in the ASM instance.
     *
     * @example 83
     *
     * @var string
     */
    public $includeInboundPorts;

    /**
     * @description The outbound IP ranges in CIDR form for which traffic is to be redirected to the sidecar proxy in the ASM instance.
     *
     * @example 192.168.1.4/31
     *
     * @var string
     */
    public $includeOutboundIPRanges;

    /**
     * @description The outbound ports for which traffic is to be redirected to the sidecar proxy in the ASM instance.
     *
     * @example 84
     *
     * @var string
     */
    public $includeOutboundPorts;

    /**
     * @description The mode in which the sidecar proxy intercepts inbound traffic. Valid values:
     *
     *   `REDIRECT` (default): In this mode, source IP addresses are lost during traffic redirection to the sidecar proxy.
     *   `TPROXY`: In this mode, both the source and destination IP addresses and ports are preserved.
     *
     * @example TPROXY
     *
     * @var string
     */
    public $interceptionMode;

    /**
     * @description Indicates whether the Domain Name System (DNS) proxy feature is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $istioDNSProxyEnabled;

    /**
     * @description The JSON string that describes the lifecycle of the sidecar proxy.
     *
     * @example {"postStart":{"exec":{"command":["pilot-agent","wait"]}},"preStop":{"exec":{"command":["/bin/sh","-c","sleep 15"]}}}
     *
     * @var string
     */
    public $lifecycleStr;

    /**
     * @description The log level. Valid values: `info`, `debug`, `trace`, and `error`.
     *
     * @example info
     *
     * @var string
     */
    public $logLevel;

    /**
     * @var bool
     */
    public $privileged;

    /**
     * @var string[]
     */
    public $proxyMetadata;

    /**
     * @description The custom Envoy statistics that are reported by the sidecar proxy.
     *
     * @var proxyStatsMatcher
     */
    public $proxyStatsMatcher;

    /**
     * @var int
     */
    public $readinessFailureThreshold;

    /**
     * @var int
     */
    public $readinessInitialDelaySeconds;

    /**
     * @var int
     */
    public $readinessPeriodSeconds;

    /**
     * @var sidecarProxyAckSloResource
     */
    public $sidecarProxyAckSloResource;

    /**
     * @var sidecarProxyInitAckSloResource
     */
    public $sidecarProxyInitAckSloResource;

    /**
     * @description The maximum size of resources that are available to the istio-init container in the pod into which the sidecar proxy is injected. The istio-init container is used in this topic.
     *
     * @var sidecarProxyInitResourceLimit
     */
    public $sidecarProxyInitResourceLimit;

    /**
     * @description The minimum size of resources that are required by the istio-init container.
     *
     * @var sidecarProxyInitResourceRequest
     */
    public $sidecarProxyInitResourceRequest;

    /**
     * @description The maximum size of resources that are available to the sidecar proxy container.
     *
     * @var sidecarProxyResourceLimit
     */
    public $sidecarProxyResourceLimit;

    /**
     * @description The minimum size of resources that are required by the sidecar proxy container.
     *
     * @var sidecarProxyResourceRequest
     */
    public $sidecarProxyResourceRequest;

    /**
     * @description The maximum period of time allowed for connections to complete on sidecar proxy shutdown.
     *
     * @example 6s
     *
     * @var string
     */
    public $terminationDrainDuration;

    /**
     * @description The custom configurations of Tracing Analysis.
     *
     * @var tracing
     */
    public $tracing;
    protected $_name = [
        'concurrency'                     => 'Concurrency',
        'enableCoreDump'                  => 'EnableCoreDump',
        'excludeInboundPorts'             => 'ExcludeInboundPorts',
        'excludeOutboundIPRanges'         => 'ExcludeOutboundIPRanges',
        'excludeOutboundPorts'            => 'ExcludeOutboundPorts',
        'holdApplicationUntilProxyStarts' => 'HoldApplicationUntilProxyStarts',
        'includeInboundPorts'             => 'IncludeInboundPorts',
        'includeOutboundIPRanges'         => 'IncludeOutboundIPRanges',
        'includeOutboundPorts'            => 'IncludeOutboundPorts',
        'interceptionMode'                => 'InterceptionMode',
        'istioDNSProxyEnabled'            => 'IstioDNSProxyEnabled',
        'lifecycleStr'                    => 'LifecycleStr',
        'logLevel'                        => 'LogLevel',
        'privileged'                      => 'Privileged',
        'proxyMetadata'                   => 'ProxyMetadata',
        'proxyStatsMatcher'               => 'ProxyStatsMatcher',
        'readinessFailureThreshold'       => 'ReadinessFailureThreshold',
        'readinessInitialDelaySeconds'    => 'ReadinessInitialDelaySeconds',
        'readinessPeriodSeconds'          => 'ReadinessPeriodSeconds',
        'sidecarProxyAckSloResource'      => 'SidecarProxyAckSloResource',
        'sidecarProxyInitAckSloResource'  => 'SidecarProxyInitAckSloResource',
        'sidecarProxyInitResourceLimit'   => 'SidecarProxyInitResourceLimit',
        'sidecarProxyInitResourceRequest' => 'SidecarProxyInitResourceRequest',
        'sidecarProxyResourceLimit'       => 'SidecarProxyResourceLimit',
        'sidecarProxyResourceRequest'     => 'SidecarProxyResourceRequest',
        'terminationDrainDuration'        => 'TerminationDrainDuration',
        'tracing'                         => 'Tracing',
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
        if (null !== $this->enableCoreDump) {
            $res['EnableCoreDump'] = $this->enableCoreDump;
        }
        if (null !== $this->excludeInboundPorts) {
            $res['ExcludeInboundPorts'] = $this->excludeInboundPorts;
        }
        if (null !== $this->excludeOutboundIPRanges) {
            $res['ExcludeOutboundIPRanges'] = $this->excludeOutboundIPRanges;
        }
        if (null !== $this->excludeOutboundPorts) {
            $res['ExcludeOutboundPorts'] = $this->excludeOutboundPorts;
        }
        if (null !== $this->holdApplicationUntilProxyStarts) {
            $res['HoldApplicationUntilProxyStarts'] = $this->holdApplicationUntilProxyStarts;
        }
        if (null !== $this->includeInboundPorts) {
            $res['IncludeInboundPorts'] = $this->includeInboundPorts;
        }
        if (null !== $this->includeOutboundIPRanges) {
            $res['IncludeOutboundIPRanges'] = $this->includeOutboundIPRanges;
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
        if (null !== $this->lifecycleStr) {
            $res['LifecycleStr'] = $this->lifecycleStr;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }
        if (null !== $this->privileged) {
            $res['Privileged'] = $this->privileged;
        }
        if (null !== $this->proxyMetadata) {
            $res['ProxyMetadata'] = $this->proxyMetadata;
        }
        if (null !== $this->proxyStatsMatcher) {
            $res['ProxyStatsMatcher'] = null !== $this->proxyStatsMatcher ? $this->proxyStatsMatcher->toMap() : null;
        }
        if (null !== $this->readinessFailureThreshold) {
            $res['ReadinessFailureThreshold'] = $this->readinessFailureThreshold;
        }
        if (null !== $this->readinessInitialDelaySeconds) {
            $res['ReadinessInitialDelaySeconds'] = $this->readinessInitialDelaySeconds;
        }
        if (null !== $this->readinessPeriodSeconds) {
            $res['ReadinessPeriodSeconds'] = $this->readinessPeriodSeconds;
        }
        if (null !== $this->sidecarProxyAckSloResource) {
            $res['SidecarProxyAckSloResource'] = null !== $this->sidecarProxyAckSloResource ? $this->sidecarProxyAckSloResource->toMap() : null;
        }
        if (null !== $this->sidecarProxyInitAckSloResource) {
            $res['SidecarProxyInitAckSloResource'] = null !== $this->sidecarProxyInitAckSloResource ? $this->sidecarProxyInitAckSloResource->toMap() : null;
        }
        if (null !== $this->sidecarProxyInitResourceLimit) {
            $res['SidecarProxyInitResourceLimit'] = null !== $this->sidecarProxyInitResourceLimit ? $this->sidecarProxyInitResourceLimit->toMap() : null;
        }
        if (null !== $this->sidecarProxyInitResourceRequest) {
            $res['SidecarProxyInitResourceRequest'] = null !== $this->sidecarProxyInitResourceRequest ? $this->sidecarProxyInitResourceRequest->toMap() : null;
        }
        if (null !== $this->sidecarProxyResourceLimit) {
            $res['SidecarProxyResourceLimit'] = null !== $this->sidecarProxyResourceLimit ? $this->sidecarProxyResourceLimit->toMap() : null;
        }
        if (null !== $this->sidecarProxyResourceRequest) {
            $res['SidecarProxyResourceRequest'] = null !== $this->sidecarProxyResourceRequest ? $this->sidecarProxyResourceRequest->toMap() : null;
        }
        if (null !== $this->terminationDrainDuration) {
            $res['TerminationDrainDuration'] = $this->terminationDrainDuration;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = null !== $this->tracing ? $this->tracing->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configPatches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['EnableCoreDump'])) {
            $model->enableCoreDump = $map['EnableCoreDump'];
        }
        if (isset($map['ExcludeInboundPorts'])) {
            $model->excludeInboundPorts = $map['ExcludeInboundPorts'];
        }
        if (isset($map['ExcludeOutboundIPRanges'])) {
            $model->excludeOutboundIPRanges = $map['ExcludeOutboundIPRanges'];
        }
        if (isset($map['ExcludeOutboundPorts'])) {
            $model->excludeOutboundPorts = $map['ExcludeOutboundPorts'];
        }
        if (isset($map['HoldApplicationUntilProxyStarts'])) {
            $model->holdApplicationUntilProxyStarts = $map['HoldApplicationUntilProxyStarts'];
        }
        if (isset($map['IncludeInboundPorts'])) {
            $model->includeInboundPorts = $map['IncludeInboundPorts'];
        }
        if (isset($map['IncludeOutboundIPRanges'])) {
            $model->includeOutboundIPRanges = $map['IncludeOutboundIPRanges'];
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
        if (isset($map['LifecycleStr'])) {
            $model->lifecycleStr = $map['LifecycleStr'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }
        if (isset($map['Privileged'])) {
            $model->privileged = $map['Privileged'];
        }
        if (isset($map['ProxyMetadata'])) {
            $model->proxyMetadata = $map['ProxyMetadata'];
        }
        if (isset($map['ProxyStatsMatcher'])) {
            $model->proxyStatsMatcher = proxyStatsMatcher::fromMap($map['ProxyStatsMatcher']);
        }
        if (isset($map['ReadinessFailureThreshold'])) {
            $model->readinessFailureThreshold = $map['ReadinessFailureThreshold'];
        }
        if (isset($map['ReadinessInitialDelaySeconds'])) {
            $model->readinessInitialDelaySeconds = $map['ReadinessInitialDelaySeconds'];
        }
        if (isset($map['ReadinessPeriodSeconds'])) {
            $model->readinessPeriodSeconds = $map['ReadinessPeriodSeconds'];
        }
        if (isset($map['SidecarProxyAckSloResource'])) {
            $model->sidecarProxyAckSloResource = sidecarProxyAckSloResource::fromMap($map['SidecarProxyAckSloResource']);
        }
        if (isset($map['SidecarProxyInitAckSloResource'])) {
            $model->sidecarProxyInitAckSloResource = sidecarProxyInitAckSloResource::fromMap($map['SidecarProxyInitAckSloResource']);
        }
        if (isset($map['SidecarProxyInitResourceLimit'])) {
            $model->sidecarProxyInitResourceLimit = sidecarProxyInitResourceLimit::fromMap($map['SidecarProxyInitResourceLimit']);
        }
        if (isset($map['SidecarProxyInitResourceRequest'])) {
            $model->sidecarProxyInitResourceRequest = sidecarProxyInitResourceRequest::fromMap($map['SidecarProxyInitResourceRequest']);
        }
        if (isset($map['SidecarProxyResourceLimit'])) {
            $model->sidecarProxyResourceLimit = sidecarProxyResourceLimit::fromMap($map['SidecarProxyResourceLimit']);
        }
        if (isset($map['SidecarProxyResourceRequest'])) {
            $model->sidecarProxyResourceRequest = sidecarProxyResourceRequest::fromMap($map['SidecarProxyResourceRequest']);
        }
        if (isset($map['TerminationDrainDuration'])) {
            $model->terminationDrainDuration = $map['TerminationDrainDuration'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = tracing::fromMap($map['Tracing']);
        }

        return $model;
    }
}
