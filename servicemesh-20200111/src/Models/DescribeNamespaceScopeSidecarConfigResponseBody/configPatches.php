<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\proxyStatsMatcher;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\scaledSidecarResource;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyAckSloResource;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyInitAckSloResource;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyInitResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyInitResourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\sidecarProxyResourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\SMCConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches\tracing;

class configPatches extends Model
{
    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var bool
     */
    public $enableCoreDump;

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
     * @var bool
     */
    public $privileged;

    /**
     * @var string[]
     */
    public $proxyMetadata;

    /**
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
     * @var string[]
     */
    public $runtimeValues;

    /**
     * @var SMCConfiguration
     */
    public $SMCConfiguration;

    /**
     * @var scaledSidecarResource
     */
    public $scaledSidecarResource;

    /**
     * @var sidecarProxyAckSloResource
     */
    public $sidecarProxyAckSloResource;

    /**
     * @var sidecarProxyInitAckSloResource
     */
    public $sidecarProxyInitAckSloResource;

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
        'concurrency' => 'Concurrency',
        'enableCoreDump' => 'EnableCoreDump',
        'excludeInboundPorts' => 'ExcludeInboundPorts',
        'excludeOutboundIPRanges' => 'ExcludeOutboundIPRanges',
        'excludeOutboundPorts' => 'ExcludeOutboundPorts',
        'holdApplicationUntilProxyStarts' => 'HoldApplicationUntilProxyStarts',
        'includeInboundPorts' => 'IncludeInboundPorts',
        'includeOutboundIPRanges' => 'IncludeOutboundIPRanges',
        'includeOutboundPorts' => 'IncludeOutboundPorts',
        'interceptionMode' => 'InterceptionMode',
        'istioDNSProxyEnabled' => 'IstioDNSProxyEnabled',
        'lifecycleStr' => 'LifecycleStr',
        'logLevel' => 'LogLevel',
        'privileged' => 'Privileged',
        'proxyMetadata' => 'ProxyMetadata',
        'proxyStatsMatcher' => 'ProxyStatsMatcher',
        'readinessFailureThreshold' => 'ReadinessFailureThreshold',
        'readinessInitialDelaySeconds' => 'ReadinessInitialDelaySeconds',
        'readinessPeriodSeconds' => 'ReadinessPeriodSeconds',
        'runtimeValues' => 'RuntimeValues',
        'SMCConfiguration' => 'SMCConfiguration',
        'scaledSidecarResource' => 'ScaledSidecarResource',
        'sidecarProxyAckSloResource' => 'SidecarProxyAckSloResource',
        'sidecarProxyInitAckSloResource' => 'SidecarProxyInitAckSloResource',
        'sidecarProxyInitResourceLimit' => 'SidecarProxyInitResourceLimit',
        'sidecarProxyInitResourceRequest' => 'SidecarProxyInitResourceRequest',
        'sidecarProxyResourceLimit' => 'SidecarProxyResourceLimit',
        'sidecarProxyResourceRequest' => 'SidecarProxyResourceRequest',
        'terminationDrainDuration' => 'TerminationDrainDuration',
        'tracing' => 'Tracing',
    ];

    public function validate()
    {
        if (\is_array($this->proxyMetadata)) {
            Model::validateArray($this->proxyMetadata);
        }
        if (null !== $this->proxyStatsMatcher) {
            $this->proxyStatsMatcher->validate();
        }
        if (\is_array($this->runtimeValues)) {
            Model::validateArray($this->runtimeValues);
        }
        if (null !== $this->SMCConfiguration) {
            $this->SMCConfiguration->validate();
        }
        if (null !== $this->scaledSidecarResource) {
            $this->scaledSidecarResource->validate();
        }
        if (null !== $this->sidecarProxyAckSloResource) {
            $this->sidecarProxyAckSloResource->validate();
        }
        if (null !== $this->sidecarProxyInitAckSloResource) {
            $this->sidecarProxyInitAckSloResource->validate();
        }
        if (null !== $this->sidecarProxyInitResourceLimit) {
            $this->sidecarProxyInitResourceLimit->validate();
        }
        if (null !== $this->sidecarProxyInitResourceRequest) {
            $this->sidecarProxyInitResourceRequest->validate();
        }
        if (null !== $this->sidecarProxyResourceLimit) {
            $this->sidecarProxyResourceLimit->validate();
        }
        if (null !== $this->sidecarProxyResourceRequest) {
            $this->sidecarProxyResourceRequest->validate();
        }
        if (null !== $this->tracing) {
            $this->tracing->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->proxyMetadata)) {
                $res['ProxyMetadata'] = [];
                foreach ($this->proxyMetadata as $key1 => $value1) {
                    $res['ProxyMetadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->proxyStatsMatcher) {
            $res['ProxyStatsMatcher'] = null !== $this->proxyStatsMatcher ? $this->proxyStatsMatcher->toArray($noStream) : $this->proxyStatsMatcher;
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

        if (null !== $this->runtimeValues) {
            if (\is_array($this->runtimeValues)) {
                $res['RuntimeValues'] = [];
                foreach ($this->runtimeValues as $key1 => $value1) {
                    $res['RuntimeValues'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->SMCConfiguration) {
            $res['SMCConfiguration'] = null !== $this->SMCConfiguration ? $this->SMCConfiguration->toArray($noStream) : $this->SMCConfiguration;
        }

        if (null !== $this->scaledSidecarResource) {
            $res['ScaledSidecarResource'] = null !== $this->scaledSidecarResource ? $this->scaledSidecarResource->toArray($noStream) : $this->scaledSidecarResource;
        }

        if (null !== $this->sidecarProxyAckSloResource) {
            $res['SidecarProxyAckSloResource'] = null !== $this->sidecarProxyAckSloResource ? $this->sidecarProxyAckSloResource->toArray($noStream) : $this->sidecarProxyAckSloResource;
        }

        if (null !== $this->sidecarProxyInitAckSloResource) {
            $res['SidecarProxyInitAckSloResource'] = null !== $this->sidecarProxyInitAckSloResource ? $this->sidecarProxyInitAckSloResource->toArray($noStream) : $this->sidecarProxyInitAckSloResource;
        }

        if (null !== $this->sidecarProxyInitResourceLimit) {
            $res['SidecarProxyInitResourceLimit'] = null !== $this->sidecarProxyInitResourceLimit ? $this->sidecarProxyInitResourceLimit->toArray($noStream) : $this->sidecarProxyInitResourceLimit;
        }

        if (null !== $this->sidecarProxyInitResourceRequest) {
            $res['SidecarProxyInitResourceRequest'] = null !== $this->sidecarProxyInitResourceRequest ? $this->sidecarProxyInitResourceRequest->toArray($noStream) : $this->sidecarProxyInitResourceRequest;
        }

        if (null !== $this->sidecarProxyResourceLimit) {
            $res['SidecarProxyResourceLimit'] = null !== $this->sidecarProxyResourceLimit ? $this->sidecarProxyResourceLimit->toArray($noStream) : $this->sidecarProxyResourceLimit;
        }

        if (null !== $this->sidecarProxyResourceRequest) {
            $res['SidecarProxyResourceRequest'] = null !== $this->sidecarProxyResourceRequest ? $this->sidecarProxyResourceRequest->toArray($noStream) : $this->sidecarProxyResourceRequest;
        }

        if (null !== $this->terminationDrainDuration) {
            $res['TerminationDrainDuration'] = $this->terminationDrainDuration;
        }

        if (null !== $this->tracing) {
            $res['Tracing'] = null !== $this->tracing ? $this->tracing->toArray($noStream) : $this->tracing;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['ProxyMetadata'])) {
                $model->proxyMetadata = [];
                foreach ($map['ProxyMetadata'] as $key1 => $value1) {
                    $model->proxyMetadata[$key1] = $value1;
                }
            }
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

        if (isset($map['RuntimeValues'])) {
            if (!empty($map['RuntimeValues'])) {
                $model->runtimeValues = [];
                foreach ($map['RuntimeValues'] as $key1 => $value1) {
                    $model->runtimeValues[$key1] = $value1;
                }
            }
        }

        if (isset($map['SMCConfiguration'])) {
            $model->SMCConfiguration = SMCConfiguration::fromMap($map['SMCConfiguration']);
        }

        if (isset($map['ScaledSidecarResource'])) {
            $model->scaledSidecarResource = scaledSidecarResource::fromMap($map['ScaledSidecarResource']);
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
