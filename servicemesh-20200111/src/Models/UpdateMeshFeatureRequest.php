<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class UpdateMeshFeatureRequest extends Model
{
    /**
     * @var bool
     */
    public $accessLogEnabled;

    /**
     * @var string
     */
    public $accessLogFile;

    /**
     * @var string
     */
    public $accessLogFormat;

    /**
     * @var bool
     */
    public $accessLogGatewayEnabled;

    /**
     * @var int
     */
    public $accessLogGatewayLifecycle;

    /**
     * @var string
     */
    public $accessLogProject;

    /**
     * @var bool
     */
    public $accessLogServiceEnabled;

    /**
     * @var string
     */
    public $accessLogServiceHost;

    /**
     * @var int
     */
    public $accessLogServicePort;

    /**
     * @var bool
     */
    public $accessLogSidecarEnabled;

    /**
     * @var int
     */
    public $accessLogSidecarLifecycle;

    /**
     * @var string
     */
    public $auditProject;

    /**
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

    /**
     * @var bool
     */
    public $CRAggregationEnabled;

    /**
     * @var string
     */
    public $certChain;

    /**
     * @var string
     */
    public $clusterSpec;

    /**
     * @var bool
     */
    public $cniEnabled;

    /**
     * @var string
     */
    public $cniExcludeNamespaces;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var bool
     */
    public $configSourceEnabled;

    /**
     * @var string
     */
    public $configSourceNacosID;

    /**
     * @var bool
     */
    public $customizedPrometheus;

    /**
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @var bool
     */
    public $DNSProxyingEnabled;

    /**
     * @var string
     */
    public $defaultComponentsScheduleConfig;

    /**
     * @var string
     */
    public $discoverySelectors;

    /**
     * @var bool
     */
    public $dubboFilterEnabled;

    /**
     * @var bool
     */
    public $enableAudit;

    /**
     * @var bool
     */
    public $enableAutoDiagnosis;

    /**
     * @var bool
     */
    public $enableBootstrapXdsAgent;

    /**
     * @var bool
     */
    public $enableCRHistory;

    /**
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @var bool
     */
    public $enableSDSServer;

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
     * @var string
     */
    public $existingCaCert;

    /**
     * @var string
     */
    public $existingCaKey;

    /**
     * @var string
     */
    public $existingRootCaCert;

    /**
     * @var bool
     */
    public $filterGatewayClusterConfig;

    /**
     * @var bool
     */
    public $gatewayAPIEnabled;

    /**
     * @var bool
     */
    public $holdApplicationUntilProxyStarts;

    /**
     * @var bool
     */
    public $http10Enabled;

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
    public $integrateKiali;

    /**
     * @var string
     */
    public $interceptionMode;

    /**
     * @var string
     */
    public $kialiArmsAuthTokens;

    /**
     * @var bool
     */
    public $kialiEnabled;

    /**
     * @var string
     */
    public $kialiServiceAnnotations;

    /**
     * @var string
     */
    public $labelsForOffloadedWorkloads;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $localityLBConf;

    /**
     * @var bool
     */
    public $localityLoadBalancing;

    /**
     * @var string
     */
    public $logLevel;

    /**
     * @var bool
     */
    public $MSEEnabled;

    /**
     * @var bool
     */
    public $multiBufferEnabled;

    /**
     * @var string
     */
    public $multiBufferPollDelay;

    /**
     * @var bool
     */
    public $mysqlFilterEnabled;

    /**
     * @var bool
     */
    public $NFDEnabled;

    /**
     * @var bool
     */
    public $NFDLabelPruned;

    /**
     * @var string
     */
    public $OPAInjectorCPULimit;

    /**
     * @var string
     */
    public $OPAInjectorCPURequirement;

    /**
     * @var string
     */
    public $OPAInjectorMemoryLimit;

    /**
     * @var string
     */
    public $OPAInjectorMemoryRequirement;

    /**
     * @var string
     */
    public $OPALimitCPU;

    /**
     * @var string
     */
    public $OPALimitMemory;

    /**
     * @var string
     */
    public $OPALogLevel;

    /**
     * @var string
     */
    public $OPARequestCPU;

    /**
     * @var string
     */
    public $OPARequestMemory;

    /**
     * @var bool
     */
    public $OPAScopeInjected;

    /**
     * @var bool
     */
    public $opaEnabled;

    /**
     * @var bool
     */
    public $openAgentPolicy;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var bool
     */
    public $pilotEnableQuicListeners;

    /**
     * @var string
     */
    public $prometheusUrl;

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
    public $proxyLimitCPU;

    /**
     * @var string
     */
    public $proxyLimitMemory;

    /**
     * @var string
     */
    public $proxyRequestCPU;

    /**
     * @var string
     */
    public $proxyRequestMemory;

    /**
     * @var string
     */
    public $proxyStatsMatcher;

    /**
     * @var bool
     */
    public $redisFilterEnabled;

    /**
     * @var bool
     */
    public $SMCEnabled;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $sidecarInjectorLimitCPU;

    /**
     * @var string
     */
    public $sidecarInjectorLimitMemory;

    /**
     * @var string
     */
    public $sidecarInjectorRequestCPU;

    /**
     * @var string
     */
    public $sidecarInjectorRequestMemory;

    /**
     * @var string
     */
    public $sidecarInjectorWebhookAsYaml;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var string
     */
    public $terminationDrainDuration;

    /**
     * @var bool
     */
    public $thriftFilterEnabled;

    /**
     * @var string
     */
    public $traceCustomTags;

    /**
     * @var string
     */
    public $traceMaxPathTagLength;

    /**
     * @var float
     */
    public $traceSampling;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var string
     */
    public $tracingOnExtZipkinLimitCPU;

    /**
     * @var string
     */
    public $tracingOnExtZipkinLimitMemory;

    /**
     * @var string
     */
    public $tracingOnExtZipkinReplicaCount;

    /**
     * @var string
     */
    public $tracingOnExtZipkinRequestCPU;

    /**
     * @var string
     */
    public $tracingOnExtZipkinRequestMemory;

    /**
     * @var bool
     */
    public $webAssemblyFilterEnabled;
    protected $_name = [
        'accessLogEnabled' => 'AccessLogEnabled',
        'accessLogFile' => 'AccessLogFile',
        'accessLogFormat' => 'AccessLogFormat',
        'accessLogGatewayEnabled' => 'AccessLogGatewayEnabled',
        'accessLogGatewayLifecycle' => 'AccessLogGatewayLifecycle',
        'accessLogProject' => 'AccessLogProject',
        'accessLogServiceEnabled' => 'AccessLogServiceEnabled',
        'accessLogServiceHost' => 'AccessLogServiceHost',
        'accessLogServicePort' => 'AccessLogServicePort',
        'accessLogSidecarEnabled' => 'AccessLogSidecarEnabled',
        'accessLogSidecarLifecycle' => 'AccessLogSidecarLifecycle',
        'auditProject' => 'AuditProject',
        'autoInjectionPolicyEnabled' => 'AutoInjectionPolicyEnabled',
        'CRAggregationEnabled' => 'CRAggregationEnabled',
        'certChain' => 'CertChain',
        'clusterSpec' => 'ClusterSpec',
        'cniEnabled' => 'CniEnabled',
        'cniExcludeNamespaces' => 'CniExcludeNamespaces',
        'concurrency' => 'Concurrency',
        'configSourceEnabled' => 'ConfigSourceEnabled',
        'configSourceNacosID' => 'ConfigSourceNacosID',
        'customizedPrometheus' => 'CustomizedPrometheus',
        'customizedZipkin' => 'CustomizedZipkin',
        'DNSProxyingEnabled' => 'DNSProxyingEnabled',
        'defaultComponentsScheduleConfig' => 'DefaultComponentsScheduleConfig',
        'discoverySelectors' => 'DiscoverySelectors',
        'dubboFilterEnabled' => 'DubboFilterEnabled',
        'enableAudit' => 'EnableAudit',
        'enableAutoDiagnosis' => 'EnableAutoDiagnosis',
        'enableBootstrapXdsAgent' => 'EnableBootstrapXdsAgent',
        'enableCRHistory' => 'EnableCRHistory',
        'enableNamespacesByDefault' => 'EnableNamespacesByDefault',
        'enableSDSServer' => 'EnableSDSServer',
        'excludeIPRanges' => 'ExcludeIPRanges',
        'excludeInboundPorts' => 'ExcludeInboundPorts',
        'excludeOutboundPorts' => 'ExcludeOutboundPorts',
        'existingCaCert' => 'ExistingCaCert',
        'existingCaKey' => 'ExistingCaKey',
        'existingRootCaCert' => 'ExistingRootCaCert',
        'filterGatewayClusterConfig' => 'FilterGatewayClusterConfig',
        'gatewayAPIEnabled' => 'GatewayAPIEnabled',
        'holdApplicationUntilProxyStarts' => 'HoldApplicationUntilProxyStarts',
        'http10Enabled' => 'Http10Enabled',
        'includeIPRanges' => 'IncludeIPRanges',
        'includeInboundPorts' => 'IncludeInboundPorts',
        'includeOutboundPorts' => 'IncludeOutboundPorts',
        'integrateKiali' => 'IntegrateKiali',
        'interceptionMode' => 'InterceptionMode',
        'kialiArmsAuthTokens' => 'KialiArmsAuthTokens',
        'kialiEnabled' => 'KialiEnabled',
        'kialiServiceAnnotations' => 'KialiServiceAnnotations',
        'labelsForOffloadedWorkloads' => 'LabelsForOffloadedWorkloads',
        'lifecycle' => 'Lifecycle',
        'localityLBConf' => 'LocalityLBConf',
        'localityLoadBalancing' => 'LocalityLoadBalancing',
        'logLevel' => 'LogLevel',
        'MSEEnabled' => 'MSEEnabled',
        'multiBufferEnabled' => 'MultiBufferEnabled',
        'multiBufferPollDelay' => 'MultiBufferPollDelay',
        'mysqlFilterEnabled' => 'MysqlFilterEnabled',
        'NFDEnabled' => 'NFDEnabled',
        'NFDLabelPruned' => 'NFDLabelPruned',
        'OPAInjectorCPULimit' => 'OPAInjectorCPULimit',
        'OPAInjectorCPURequirement' => 'OPAInjectorCPURequirement',
        'OPAInjectorMemoryLimit' => 'OPAInjectorMemoryLimit',
        'OPAInjectorMemoryRequirement' => 'OPAInjectorMemoryRequirement',
        'OPALimitCPU' => 'OPALimitCPU',
        'OPALimitMemory' => 'OPALimitMemory',
        'OPALogLevel' => 'OPALogLevel',
        'OPARequestCPU' => 'OPARequestCPU',
        'OPARequestMemory' => 'OPARequestMemory',
        'OPAScopeInjected' => 'OPAScopeInjected',
        'opaEnabled' => 'OpaEnabled',
        'openAgentPolicy' => 'OpenAgentPolicy',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'pilotEnableQuicListeners' => 'PilotEnableQuicListeners',
        'prometheusUrl' => 'PrometheusUrl',
        'proxyInitCPUResourceLimit' => 'ProxyInitCPUResourceLimit',
        'proxyInitCPUResourceRequest' => 'ProxyInitCPUResourceRequest',
        'proxyInitMemoryResourceLimit' => 'ProxyInitMemoryResourceLimit',
        'proxyInitMemoryResourceRequest' => 'ProxyInitMemoryResourceRequest',
        'proxyLimitCPU' => 'ProxyLimitCPU',
        'proxyLimitMemory' => 'ProxyLimitMemory',
        'proxyRequestCPU' => 'ProxyRequestCPU',
        'proxyRequestMemory' => 'ProxyRequestMemory',
        'proxyStatsMatcher' => 'ProxyStatsMatcher',
        'redisFilterEnabled' => 'RedisFilterEnabled',
        'SMCEnabled' => 'SMCEnabled',
        'serviceMeshId' => 'ServiceMeshId',
        'sidecarInjectorLimitCPU' => 'SidecarInjectorLimitCPU',
        'sidecarInjectorLimitMemory' => 'SidecarInjectorLimitMemory',
        'sidecarInjectorRequestCPU' => 'SidecarInjectorRequestCPU',
        'sidecarInjectorRequestMemory' => 'SidecarInjectorRequestMemory',
        'sidecarInjectorWebhookAsYaml' => 'SidecarInjectorWebhookAsYaml',
        'telemetry' => 'Telemetry',
        'terminationDrainDuration' => 'TerminationDrainDuration',
        'thriftFilterEnabled' => 'ThriftFilterEnabled',
        'traceCustomTags' => 'TraceCustomTags',
        'traceMaxPathTagLength' => 'TraceMaxPathTagLength',
        'traceSampling' => 'TraceSampling',
        'tracing' => 'Tracing',
        'tracingOnExtZipkinLimitCPU' => 'TracingOnExtZipkinLimitCPU',
        'tracingOnExtZipkinLimitMemory' => 'TracingOnExtZipkinLimitMemory',
        'tracingOnExtZipkinReplicaCount' => 'TracingOnExtZipkinReplicaCount',
        'tracingOnExtZipkinRequestCPU' => 'TracingOnExtZipkinRequestCPU',
        'tracingOnExtZipkinRequestMemory' => 'TracingOnExtZipkinRequestMemory',
        'webAssemblyFilterEnabled' => 'WebAssemblyFilterEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLogEnabled) {
            $res['AccessLogEnabled'] = $this->accessLogEnabled;
        }

        if (null !== $this->accessLogFile) {
            $res['AccessLogFile'] = $this->accessLogFile;
        }

        if (null !== $this->accessLogFormat) {
            $res['AccessLogFormat'] = $this->accessLogFormat;
        }

        if (null !== $this->accessLogGatewayEnabled) {
            $res['AccessLogGatewayEnabled'] = $this->accessLogGatewayEnabled;
        }

        if (null !== $this->accessLogGatewayLifecycle) {
            $res['AccessLogGatewayLifecycle'] = $this->accessLogGatewayLifecycle;
        }

        if (null !== $this->accessLogProject) {
            $res['AccessLogProject'] = $this->accessLogProject;
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

        if (null !== $this->accessLogSidecarEnabled) {
            $res['AccessLogSidecarEnabled'] = $this->accessLogSidecarEnabled;
        }

        if (null !== $this->accessLogSidecarLifecycle) {
            $res['AccessLogSidecarLifecycle'] = $this->accessLogSidecarLifecycle;
        }

        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }

        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }

        if (null !== $this->CRAggregationEnabled) {
            $res['CRAggregationEnabled'] = $this->CRAggregationEnabled;
        }

        if (null !== $this->certChain) {
            $res['CertChain'] = $this->certChain;
        }

        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }

        if (null !== $this->cniEnabled) {
            $res['CniEnabled'] = $this->cniEnabled;
        }

        if (null !== $this->cniExcludeNamespaces) {
            $res['CniExcludeNamespaces'] = $this->cniExcludeNamespaces;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->configSourceEnabled) {
            $res['ConfigSourceEnabled'] = $this->configSourceEnabled;
        }

        if (null !== $this->configSourceNacosID) {
            $res['ConfigSourceNacosID'] = $this->configSourceNacosID;
        }

        if (null !== $this->customizedPrometheus) {
            $res['CustomizedPrometheus'] = $this->customizedPrometheus;
        }

        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }

        if (null !== $this->DNSProxyingEnabled) {
            $res['DNSProxyingEnabled'] = $this->DNSProxyingEnabled;
        }

        if (null !== $this->defaultComponentsScheduleConfig) {
            $res['DefaultComponentsScheduleConfig'] = $this->defaultComponentsScheduleConfig;
        }

        if (null !== $this->discoverySelectors) {
            $res['DiscoverySelectors'] = $this->discoverySelectors;
        }

        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }

        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }

        if (null !== $this->enableAutoDiagnosis) {
            $res['EnableAutoDiagnosis'] = $this->enableAutoDiagnosis;
        }

        if (null !== $this->enableBootstrapXdsAgent) {
            $res['EnableBootstrapXdsAgent'] = $this->enableBootstrapXdsAgent;
        }

        if (null !== $this->enableCRHistory) {
            $res['EnableCRHistory'] = $this->enableCRHistory;
        }

        if (null !== $this->enableNamespacesByDefault) {
            $res['EnableNamespacesByDefault'] = $this->enableNamespacesByDefault;
        }

        if (null !== $this->enableSDSServer) {
            $res['EnableSDSServer'] = $this->enableSDSServer;
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

        if (null !== $this->existingCaCert) {
            $res['ExistingCaCert'] = $this->existingCaCert;
        }

        if (null !== $this->existingCaKey) {
            $res['ExistingCaKey'] = $this->existingCaKey;
        }

        if (null !== $this->existingRootCaCert) {
            $res['ExistingRootCaCert'] = $this->existingRootCaCert;
        }

        if (null !== $this->filterGatewayClusterConfig) {
            $res['FilterGatewayClusterConfig'] = $this->filterGatewayClusterConfig;
        }

        if (null !== $this->gatewayAPIEnabled) {
            $res['GatewayAPIEnabled'] = $this->gatewayAPIEnabled;
        }

        if (null !== $this->holdApplicationUntilProxyStarts) {
            $res['HoldApplicationUntilProxyStarts'] = $this->holdApplicationUntilProxyStarts;
        }

        if (null !== $this->http10Enabled) {
            $res['Http10Enabled'] = $this->http10Enabled;
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

        if (null !== $this->integrateKiali) {
            $res['IntegrateKiali'] = $this->integrateKiali;
        }

        if (null !== $this->interceptionMode) {
            $res['InterceptionMode'] = $this->interceptionMode;
        }

        if (null !== $this->kialiArmsAuthTokens) {
            $res['KialiArmsAuthTokens'] = $this->kialiArmsAuthTokens;
        }

        if (null !== $this->kialiEnabled) {
            $res['KialiEnabled'] = $this->kialiEnabled;
        }

        if (null !== $this->kialiServiceAnnotations) {
            $res['KialiServiceAnnotations'] = $this->kialiServiceAnnotations;
        }

        if (null !== $this->labelsForOffloadedWorkloads) {
            $res['LabelsForOffloadedWorkloads'] = $this->labelsForOffloadedWorkloads;
        }

        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }

        if (null !== $this->localityLBConf) {
            $res['LocalityLBConf'] = $this->localityLBConf;
        }

        if (null !== $this->localityLoadBalancing) {
            $res['LocalityLoadBalancing'] = $this->localityLoadBalancing;
        }

        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }

        if (null !== $this->MSEEnabled) {
            $res['MSEEnabled'] = $this->MSEEnabled;
        }

        if (null !== $this->multiBufferEnabled) {
            $res['MultiBufferEnabled'] = $this->multiBufferEnabled;
        }

        if (null !== $this->multiBufferPollDelay) {
            $res['MultiBufferPollDelay'] = $this->multiBufferPollDelay;
        }

        if (null !== $this->mysqlFilterEnabled) {
            $res['MysqlFilterEnabled'] = $this->mysqlFilterEnabled;
        }

        if (null !== $this->NFDEnabled) {
            $res['NFDEnabled'] = $this->NFDEnabled;
        }

        if (null !== $this->NFDLabelPruned) {
            $res['NFDLabelPruned'] = $this->NFDLabelPruned;
        }

        if (null !== $this->OPAInjectorCPULimit) {
            $res['OPAInjectorCPULimit'] = $this->OPAInjectorCPULimit;
        }

        if (null !== $this->OPAInjectorCPURequirement) {
            $res['OPAInjectorCPURequirement'] = $this->OPAInjectorCPURequirement;
        }

        if (null !== $this->OPAInjectorMemoryLimit) {
            $res['OPAInjectorMemoryLimit'] = $this->OPAInjectorMemoryLimit;
        }

        if (null !== $this->OPAInjectorMemoryRequirement) {
            $res['OPAInjectorMemoryRequirement'] = $this->OPAInjectorMemoryRequirement;
        }

        if (null !== $this->OPALimitCPU) {
            $res['OPALimitCPU'] = $this->OPALimitCPU;
        }

        if (null !== $this->OPALimitMemory) {
            $res['OPALimitMemory'] = $this->OPALimitMemory;
        }

        if (null !== $this->OPALogLevel) {
            $res['OPALogLevel'] = $this->OPALogLevel;
        }

        if (null !== $this->OPARequestCPU) {
            $res['OPARequestCPU'] = $this->OPARequestCPU;
        }

        if (null !== $this->OPARequestMemory) {
            $res['OPARequestMemory'] = $this->OPARequestMemory;
        }

        if (null !== $this->OPAScopeInjected) {
            $res['OPAScopeInjected'] = $this->OPAScopeInjected;
        }

        if (null !== $this->opaEnabled) {
            $res['OpaEnabled'] = $this->opaEnabled;
        }

        if (null !== $this->openAgentPolicy) {
            $res['OpenAgentPolicy'] = $this->openAgentPolicy;
        }

        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }

        if (null !== $this->pilotEnableQuicListeners) {
            $res['PilotEnableQuicListeners'] = $this->pilotEnableQuicListeners;
        }

        if (null !== $this->prometheusUrl) {
            $res['PrometheusUrl'] = $this->prometheusUrl;
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

        if (null !== $this->proxyLimitCPU) {
            $res['ProxyLimitCPU'] = $this->proxyLimitCPU;
        }

        if (null !== $this->proxyLimitMemory) {
            $res['ProxyLimitMemory'] = $this->proxyLimitMemory;
        }

        if (null !== $this->proxyRequestCPU) {
            $res['ProxyRequestCPU'] = $this->proxyRequestCPU;
        }

        if (null !== $this->proxyRequestMemory) {
            $res['ProxyRequestMemory'] = $this->proxyRequestMemory;
        }

        if (null !== $this->proxyStatsMatcher) {
            $res['ProxyStatsMatcher'] = $this->proxyStatsMatcher;
        }

        if (null !== $this->redisFilterEnabled) {
            $res['RedisFilterEnabled'] = $this->redisFilterEnabled;
        }

        if (null !== $this->SMCEnabled) {
            $res['SMCEnabled'] = $this->SMCEnabled;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        if (null !== $this->sidecarInjectorLimitCPU) {
            $res['SidecarInjectorLimitCPU'] = $this->sidecarInjectorLimitCPU;
        }

        if (null !== $this->sidecarInjectorLimitMemory) {
            $res['SidecarInjectorLimitMemory'] = $this->sidecarInjectorLimitMemory;
        }

        if (null !== $this->sidecarInjectorRequestCPU) {
            $res['SidecarInjectorRequestCPU'] = $this->sidecarInjectorRequestCPU;
        }

        if (null !== $this->sidecarInjectorRequestMemory) {
            $res['SidecarInjectorRequestMemory'] = $this->sidecarInjectorRequestMemory;
        }

        if (null !== $this->sidecarInjectorWebhookAsYaml) {
            $res['SidecarInjectorWebhookAsYaml'] = $this->sidecarInjectorWebhookAsYaml;
        }

        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }

        if (null !== $this->terminationDrainDuration) {
            $res['TerminationDrainDuration'] = $this->terminationDrainDuration;
        }

        if (null !== $this->thriftFilterEnabled) {
            $res['ThriftFilterEnabled'] = $this->thriftFilterEnabled;
        }

        if (null !== $this->traceCustomTags) {
            $res['TraceCustomTags'] = $this->traceCustomTags;
        }

        if (null !== $this->traceMaxPathTagLength) {
            $res['TraceMaxPathTagLength'] = $this->traceMaxPathTagLength;
        }

        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }

        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }

        if (null !== $this->tracingOnExtZipkinLimitCPU) {
            $res['TracingOnExtZipkinLimitCPU'] = $this->tracingOnExtZipkinLimitCPU;
        }

        if (null !== $this->tracingOnExtZipkinLimitMemory) {
            $res['TracingOnExtZipkinLimitMemory'] = $this->tracingOnExtZipkinLimitMemory;
        }

        if (null !== $this->tracingOnExtZipkinReplicaCount) {
            $res['TracingOnExtZipkinReplicaCount'] = $this->tracingOnExtZipkinReplicaCount;
        }

        if (null !== $this->tracingOnExtZipkinRequestCPU) {
            $res['TracingOnExtZipkinRequestCPU'] = $this->tracingOnExtZipkinRequestCPU;
        }

        if (null !== $this->tracingOnExtZipkinRequestMemory) {
            $res['TracingOnExtZipkinRequestMemory'] = $this->tracingOnExtZipkinRequestMemory;
        }

        if (null !== $this->webAssemblyFilterEnabled) {
            $res['WebAssemblyFilterEnabled'] = $this->webAssemblyFilterEnabled;
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
        if (isset($map['AccessLogEnabled'])) {
            $model->accessLogEnabled = $map['AccessLogEnabled'];
        }

        if (isset($map['AccessLogFile'])) {
            $model->accessLogFile = $map['AccessLogFile'];
        }

        if (isset($map['AccessLogFormat'])) {
            $model->accessLogFormat = $map['AccessLogFormat'];
        }

        if (isset($map['AccessLogGatewayEnabled'])) {
            $model->accessLogGatewayEnabled = $map['AccessLogGatewayEnabled'];
        }

        if (isset($map['AccessLogGatewayLifecycle'])) {
            $model->accessLogGatewayLifecycle = $map['AccessLogGatewayLifecycle'];
        }

        if (isset($map['AccessLogProject'])) {
            $model->accessLogProject = $map['AccessLogProject'];
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

        if (isset($map['AccessLogSidecarEnabled'])) {
            $model->accessLogSidecarEnabled = $map['AccessLogSidecarEnabled'];
        }

        if (isset($map['AccessLogSidecarLifecycle'])) {
            $model->accessLogSidecarLifecycle = $map['AccessLogSidecarLifecycle'];
        }

        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }

        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }

        if (isset($map['CRAggregationEnabled'])) {
            $model->CRAggregationEnabled = $map['CRAggregationEnabled'];
        }

        if (isset($map['CertChain'])) {
            $model->certChain = $map['CertChain'];
        }

        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }

        if (isset($map['CniEnabled'])) {
            $model->cniEnabled = $map['CniEnabled'];
        }

        if (isset($map['CniExcludeNamespaces'])) {
            $model->cniExcludeNamespaces = $map['CniExcludeNamespaces'];
        }

        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['ConfigSourceEnabled'])) {
            $model->configSourceEnabled = $map['ConfigSourceEnabled'];
        }

        if (isset($map['ConfigSourceNacosID'])) {
            $model->configSourceNacosID = $map['ConfigSourceNacosID'];
        }

        if (isset($map['CustomizedPrometheus'])) {
            $model->customizedPrometheus = $map['CustomizedPrometheus'];
        }

        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }

        if (isset($map['DNSProxyingEnabled'])) {
            $model->DNSProxyingEnabled = $map['DNSProxyingEnabled'];
        }

        if (isset($map['DefaultComponentsScheduleConfig'])) {
            $model->defaultComponentsScheduleConfig = $map['DefaultComponentsScheduleConfig'];
        }

        if (isset($map['DiscoverySelectors'])) {
            $model->discoverySelectors = $map['DiscoverySelectors'];
        }

        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }

        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }

        if (isset($map['EnableAutoDiagnosis'])) {
            $model->enableAutoDiagnosis = $map['EnableAutoDiagnosis'];
        }

        if (isset($map['EnableBootstrapXdsAgent'])) {
            $model->enableBootstrapXdsAgent = $map['EnableBootstrapXdsAgent'];
        }

        if (isset($map['EnableCRHistory'])) {
            $model->enableCRHistory = $map['EnableCRHistory'];
        }

        if (isset($map['EnableNamespacesByDefault'])) {
            $model->enableNamespacesByDefault = $map['EnableNamespacesByDefault'];
        }

        if (isset($map['EnableSDSServer'])) {
            $model->enableSDSServer = $map['EnableSDSServer'];
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

        if (isset($map['ExistingCaCert'])) {
            $model->existingCaCert = $map['ExistingCaCert'];
        }

        if (isset($map['ExistingCaKey'])) {
            $model->existingCaKey = $map['ExistingCaKey'];
        }

        if (isset($map['ExistingRootCaCert'])) {
            $model->existingRootCaCert = $map['ExistingRootCaCert'];
        }

        if (isset($map['FilterGatewayClusterConfig'])) {
            $model->filterGatewayClusterConfig = $map['FilterGatewayClusterConfig'];
        }

        if (isset($map['GatewayAPIEnabled'])) {
            $model->gatewayAPIEnabled = $map['GatewayAPIEnabled'];
        }

        if (isset($map['HoldApplicationUntilProxyStarts'])) {
            $model->holdApplicationUntilProxyStarts = $map['HoldApplicationUntilProxyStarts'];
        }

        if (isset($map['Http10Enabled'])) {
            $model->http10Enabled = $map['Http10Enabled'];
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

        if (isset($map['IntegrateKiali'])) {
            $model->integrateKiali = $map['IntegrateKiali'];
        }

        if (isset($map['InterceptionMode'])) {
            $model->interceptionMode = $map['InterceptionMode'];
        }

        if (isset($map['KialiArmsAuthTokens'])) {
            $model->kialiArmsAuthTokens = $map['KialiArmsAuthTokens'];
        }

        if (isset($map['KialiEnabled'])) {
            $model->kialiEnabled = $map['KialiEnabled'];
        }

        if (isset($map['KialiServiceAnnotations'])) {
            $model->kialiServiceAnnotations = $map['KialiServiceAnnotations'];
        }

        if (isset($map['LabelsForOffloadedWorkloads'])) {
            $model->labelsForOffloadedWorkloads = $map['LabelsForOffloadedWorkloads'];
        }

        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }

        if (isset($map['LocalityLBConf'])) {
            $model->localityLBConf = $map['LocalityLBConf'];
        }

        if (isset($map['LocalityLoadBalancing'])) {
            $model->localityLoadBalancing = $map['LocalityLoadBalancing'];
        }

        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }

        if (isset($map['MSEEnabled'])) {
            $model->MSEEnabled = $map['MSEEnabled'];
        }

        if (isset($map['MultiBufferEnabled'])) {
            $model->multiBufferEnabled = $map['MultiBufferEnabled'];
        }

        if (isset($map['MultiBufferPollDelay'])) {
            $model->multiBufferPollDelay = $map['MultiBufferPollDelay'];
        }

        if (isset($map['MysqlFilterEnabled'])) {
            $model->mysqlFilterEnabled = $map['MysqlFilterEnabled'];
        }

        if (isset($map['NFDEnabled'])) {
            $model->NFDEnabled = $map['NFDEnabled'];
        }

        if (isset($map['NFDLabelPruned'])) {
            $model->NFDLabelPruned = $map['NFDLabelPruned'];
        }

        if (isset($map['OPAInjectorCPULimit'])) {
            $model->OPAInjectorCPULimit = $map['OPAInjectorCPULimit'];
        }

        if (isset($map['OPAInjectorCPURequirement'])) {
            $model->OPAInjectorCPURequirement = $map['OPAInjectorCPURequirement'];
        }

        if (isset($map['OPAInjectorMemoryLimit'])) {
            $model->OPAInjectorMemoryLimit = $map['OPAInjectorMemoryLimit'];
        }

        if (isset($map['OPAInjectorMemoryRequirement'])) {
            $model->OPAInjectorMemoryRequirement = $map['OPAInjectorMemoryRequirement'];
        }

        if (isset($map['OPALimitCPU'])) {
            $model->OPALimitCPU = $map['OPALimitCPU'];
        }

        if (isset($map['OPALimitMemory'])) {
            $model->OPALimitMemory = $map['OPALimitMemory'];
        }

        if (isset($map['OPALogLevel'])) {
            $model->OPALogLevel = $map['OPALogLevel'];
        }

        if (isset($map['OPARequestCPU'])) {
            $model->OPARequestCPU = $map['OPARequestCPU'];
        }

        if (isset($map['OPARequestMemory'])) {
            $model->OPARequestMemory = $map['OPARequestMemory'];
        }

        if (isset($map['OPAScopeInjected'])) {
            $model->OPAScopeInjected = $map['OPAScopeInjected'];
        }

        if (isset($map['OpaEnabled'])) {
            $model->opaEnabled = $map['OpaEnabled'];
        }

        if (isset($map['OpenAgentPolicy'])) {
            $model->openAgentPolicy = $map['OpenAgentPolicy'];
        }

        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }

        if (isset($map['PilotEnableQuicListeners'])) {
            $model->pilotEnableQuicListeners = $map['PilotEnableQuicListeners'];
        }

        if (isset($map['PrometheusUrl'])) {
            $model->prometheusUrl = $map['PrometheusUrl'];
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

        if (isset($map['ProxyLimitCPU'])) {
            $model->proxyLimitCPU = $map['ProxyLimitCPU'];
        }

        if (isset($map['ProxyLimitMemory'])) {
            $model->proxyLimitMemory = $map['ProxyLimitMemory'];
        }

        if (isset($map['ProxyRequestCPU'])) {
            $model->proxyRequestCPU = $map['ProxyRequestCPU'];
        }

        if (isset($map['ProxyRequestMemory'])) {
            $model->proxyRequestMemory = $map['ProxyRequestMemory'];
        }

        if (isset($map['ProxyStatsMatcher'])) {
            $model->proxyStatsMatcher = $map['ProxyStatsMatcher'];
        }

        if (isset($map['RedisFilterEnabled'])) {
            $model->redisFilterEnabled = $map['RedisFilterEnabled'];
        }

        if (isset($map['SMCEnabled'])) {
            $model->SMCEnabled = $map['SMCEnabled'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        if (isset($map['SidecarInjectorLimitCPU'])) {
            $model->sidecarInjectorLimitCPU = $map['SidecarInjectorLimitCPU'];
        }

        if (isset($map['SidecarInjectorLimitMemory'])) {
            $model->sidecarInjectorLimitMemory = $map['SidecarInjectorLimitMemory'];
        }

        if (isset($map['SidecarInjectorRequestCPU'])) {
            $model->sidecarInjectorRequestCPU = $map['SidecarInjectorRequestCPU'];
        }

        if (isset($map['SidecarInjectorRequestMemory'])) {
            $model->sidecarInjectorRequestMemory = $map['SidecarInjectorRequestMemory'];
        }

        if (isset($map['SidecarInjectorWebhookAsYaml'])) {
            $model->sidecarInjectorWebhookAsYaml = $map['SidecarInjectorWebhookAsYaml'];
        }

        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }

        if (isset($map['TerminationDrainDuration'])) {
            $model->terminationDrainDuration = $map['TerminationDrainDuration'];
        }

        if (isset($map['ThriftFilterEnabled'])) {
            $model->thriftFilterEnabled = $map['ThriftFilterEnabled'];
        }

        if (isset($map['TraceCustomTags'])) {
            $model->traceCustomTags = $map['TraceCustomTags'];
        }

        if (isset($map['TraceMaxPathTagLength'])) {
            $model->traceMaxPathTagLength = $map['TraceMaxPathTagLength'];
        }

        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }

        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }

        if (isset($map['TracingOnExtZipkinLimitCPU'])) {
            $model->tracingOnExtZipkinLimitCPU = $map['TracingOnExtZipkinLimitCPU'];
        }

        if (isset($map['TracingOnExtZipkinLimitMemory'])) {
            $model->tracingOnExtZipkinLimitMemory = $map['TracingOnExtZipkinLimitMemory'];
        }

        if (isset($map['TracingOnExtZipkinReplicaCount'])) {
            $model->tracingOnExtZipkinReplicaCount = $map['TracingOnExtZipkinReplicaCount'];
        }

        if (isset($map['TracingOnExtZipkinRequestCPU'])) {
            $model->tracingOnExtZipkinRequestCPU = $map['TracingOnExtZipkinRequestCPU'];
        }

        if (isset($map['TracingOnExtZipkinRequestMemory'])) {
            $model->tracingOnExtZipkinRequestMemory = $map['TracingOnExtZipkinRequestMemory'];
        }

        if (isset($map['WebAssemblyFilterEnabled'])) {
            $model->webAssemblyFilterEnabled = $map['WebAssemblyFilterEnabled'];
        }

        return $model;
    }
}
