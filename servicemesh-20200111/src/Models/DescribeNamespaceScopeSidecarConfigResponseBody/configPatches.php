<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\proxyStatsMatcher;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyInitResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyInitResourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyResourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\tracing;
use AlibabaCloud\Tea\Model;

class configPatches extends Model
{
    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @var string
     */
    public $excludeOutboundIPRanges;

    /**
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @var bool
     */
    public $holdApplicationUntilProxyStarts;

    /**
     * @var string
     */
    public $includeInboundPorts;

    /**
     * @var string
     */
    public $includeOutboundIPRanges;

    /**
     * @var string
     */
    public $includeOutboundPorts;

    /**
     * @var string
     */
    public $interceptionMode;

    /**
     * @var bool
     */
    public $istioDNSProxyEnabled;

    /**
     * @var string
     */
    public $lifecycleStr;

    /**
     * @var string
     */
    public $logLevel;

    /**
     * @var proxyStatsMatcher
     */
    public $proxyStatsMatcher;

    /**
     * @var sidecarProxyInitResourceLimit
     */
    public $sidecarProxyInitResourceLimit;

    /**
     * @var sidecarProxyInitResourceRequest
     */
    public $sidecarProxyInitResourceRequest;

    /**
     * @var sidecarProxyResourceLimit
     */
    public $sidecarProxyResourceLimit;

    /**
     * @var sidecarProxyResourceRequest
     */
    public $sidecarProxyResourceRequest;

    /**
     * @var string
     */
    public $terminationDrainDuration;

    /**
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
        'proxyStatsMatcher'               => 'ProxyStatsMatcher',
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
        if (null !== $this->proxyStatsMatcher) {
            $res['ProxyStatsMatcher'] = null !== $this->proxyStatsMatcher ? $this->proxyStatsMatcher->toMap() : null;
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
        if (isset($map['ProxyStatsMatcher'])) {
            $model->proxyStatsMatcher = proxyStatsMatcher::fromMap($map['ProxyStatsMatcher']);
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
