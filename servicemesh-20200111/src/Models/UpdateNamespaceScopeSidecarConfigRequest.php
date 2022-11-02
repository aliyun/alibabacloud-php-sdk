<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateNamespaceScopeSidecarConfigRequest extends Model
{
    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @var string
     */
    public $excludeInboundPorts;

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
    public $includeIPRanges;

    /**
     * @var string
     */
    public $includeInboundPorts;

    /**
     * @var string
     */
    public $includeOutboundPorts;

    /**
     * @var bool
     */
    public $istioDNSProxyEnabled;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $logLevel;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $postStart;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @var string
     */
    public $proxyInitCPUResourceLimit;

    /**
     * @var string
     */
    public $proxyInitCPUResourceRequest;

    /**
     * @var string
     */
    public $proxyInitMemoryResourceLimit;

    /**
     * @var string
     */
    public $proxyInitMemoryResourceRequest;

    /**
     * @var string
     */
    public $proxyStatsMatcher;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $sidecarProxyCPUResourceLimit;

    /**
     * @var string
     */
    public $sidecarProxyCPUResourceRequest;

    /**
     * @var string
     */
    public $sidecarProxyMemoryResourceLimit;

    /**
     * @var string
     */
    public $sidecarProxyMemoryResourceRequest;

    /**
     * @var string
     */
    public $terminationDrainDuration;

    /**
     * @var string
     */
    public $tracing;
    protected $_name = [
        'concurrency'                       => 'Concurrency',
        'excludeIPRanges'                   => 'ExcludeIPRanges',
        'excludeInboundPorts'               => 'ExcludeInboundPorts',
        'excludeOutboundPorts'              => 'ExcludeOutboundPorts',
        'holdApplicationUntilProxyStarts'   => 'HoldApplicationUntilProxyStarts',
        'includeIPRanges'                   => 'IncludeIPRanges',
        'includeInboundPorts'               => 'IncludeInboundPorts',
        'includeOutboundPorts'              => 'IncludeOutboundPorts',
        'istioDNSProxyEnabled'              => 'IstioDNSProxyEnabled',
        'lifecycle'                         => 'Lifecycle',
        'logLevel'                          => 'LogLevel',
        'namespace'                         => 'Namespace',
        'postStart'                         => 'PostStart',
        'preStop'                           => 'PreStop',
        'proxyInitCPUResourceLimit'         => 'ProxyInitCPUResourceLimit',
        'proxyInitCPUResourceRequest'       => 'ProxyInitCPUResourceRequest',
        'proxyInitMemoryResourceLimit'      => 'ProxyInitMemoryResourceLimit',
        'proxyInitMemoryResourceRequest'    => 'ProxyInitMemoryResourceRequest',
        'proxyStatsMatcher'                 => 'ProxyStatsMatcher',
        'serviceMeshId'                     => 'ServiceMeshId',
        'sidecarProxyCPUResourceLimit'      => 'SidecarProxyCPUResourceLimit',
        'sidecarProxyCPUResourceRequest'    => 'SidecarProxyCPUResourceRequest',
        'sidecarProxyMemoryResourceLimit'   => 'SidecarProxyMemoryResourceLimit',
        'sidecarProxyMemoryResourceRequest' => 'SidecarProxyMemoryResourceRequest',
        'terminationDrainDuration'          => 'TerminationDrainDuration',
        'tracing'                           => 'Tracing',
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
        if (null !== $this->proxyStatsMatcher) {
            $res['ProxyStatsMatcher'] = $this->proxyStatsMatcher;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['ProxyStatsMatcher'])) {
            $model->proxyStatsMatcher = $map['ProxyStatsMatcher'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
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
