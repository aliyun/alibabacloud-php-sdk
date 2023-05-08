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
     * @description The number of worker threads running in the sidecar proxy.
     *
     * @example 2
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description The port that the inbound traffic of the sidecar proxy does not pass through.
     *
     * @example 82
     *
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @description The IP address from which the outbound traffic does not pass through the sidecar proxy.
     *
     * @example 192.168.1.3/31
     *
     * @var string
     */
    public $excludeOutboundIPRanges;

    /**
     * @description The port that the outbound traffic of the sidecar proxy does not pass through.
     *
     * @example 81
     *
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @description Indicates whether applications can be started only after Istio Proxy starts. Valid values:
     *
     *   `true`: Applications can be started only after Istio Proxy starts.
     *   false: Applications can be started before Istio Proxy starts.
     *
     * @example true
     *
     * @var bool
     */
    public $holdApplicationUntilProxyStarts;

    /**
     * @description The port that the inbound traffic of the sidecar proxy passes through.
     *
     * @example 83
     *
     * @var string
     */
    public $includeInboundPorts;

    /**
     * @description The IP address from which the outbound traffic passes through the sidecar proxy.
     *
     * @example 192.168.1.4/31
     *
     * @var string
     */
    public $includeOutboundIPRanges;

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
     * @description Indicates whether the Domain Name System (DNS) proxy feature is enabled. Valid values:
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
     * @var string[]
     */
    public $proxyMetadata;

    /**
     * @description The monitoring metrics for data collected by Envoy proxies.
     *
     * @var proxyStatsMatcher
     */
    public $proxyStatsMatcher;

    /**
     * @var sidecarProxyAckSloResource
     */
    public $sidecarProxyAckSloResource;

    /**
     * @var sidecarProxyInitAckSloResource
     */
    public $sidecarProxyInitAckSloResource;

    /**
     * @description The maximum size of resources that are available to the sidecar proxy init container.
     *
     * @var sidecarProxyInitResourceLimit
     */
    public $sidecarProxyInitResourceLimit;

    /**
     * @description The minimum size of resources that are requested by the sidecar proxy init container.
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
     * @description The minimum size of resources that are requested by the sidecar proxy container.
     *
     * @var sidecarProxyResourceRequest
     */
    public $sidecarProxyResourceRequest;

    /**
     * @description The maximum period of time that the sidecar proxy waits for a request to end.
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
        'proxyMetadata'                   => 'ProxyMetadata',
        'proxyStatsMatcher'               => 'ProxyStatsMatcher',
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
        if (null !== $this->proxyMetadata) {
            $res['ProxyMetadata'] = $this->proxyMetadata;
        }
        if (null !== $this->proxyStatsMatcher) {
            $res['ProxyStatsMatcher'] = null !== $this->proxyStatsMatcher ? $this->proxyStatsMatcher->toMap() : null;
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
        if (isset($map['ProxyMetadata'])) {
            $model->proxyMetadata = $map['ProxyMetadata'];
        }
        if (isset($map['ProxyStatsMatcher'])) {
            $model->proxyStatsMatcher = proxyStatsMatcher::fromMap($map['ProxyStatsMatcher']);
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
