<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

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
    public $globalRateLimitEnabled;

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
     * @var bool
     */
    public $integrateKiali;

    /**
     * @var bool
     */
    public $kialiEnabled;

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
     * @var bool
     */
    public $redisFilterEnabled;

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
     * @var float
     */
    public $traceSampling;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var bool
     */
    public $webAssemblyFilterEnabled;
    protected $_name = [
        'accessLogEnabled'               => 'AccessLogEnabled',
        'accessLogFile'                  => 'AccessLogFile',
        'accessLogFormat'                => 'AccessLogFormat',
        'accessLogProject'               => 'AccessLogProject',
        'accessLogServiceEnabled'        => 'AccessLogServiceEnabled',
        'accessLogServiceHost'           => 'AccessLogServiceHost',
        'accessLogServicePort'           => 'AccessLogServicePort',
        'auditProject'                   => 'AuditProject',
        'autoInjectionPolicyEnabled'     => 'AutoInjectionPolicyEnabled',
        'CRAggregationEnabled'           => 'CRAggregationEnabled',
        'clusterSpec'                    => 'ClusterSpec',
        'cniEnabled'                     => 'CniEnabled',
        'cniExcludeNamespaces'           => 'CniExcludeNamespaces',
        'configSourceEnabled'            => 'ConfigSourceEnabled',
        'configSourceNacosID'            => 'ConfigSourceNacosID',
        'customizedPrometheus'           => 'CustomizedPrometheus',
        'customizedZipkin'               => 'CustomizedZipkin',
        'DNSProxyingEnabled'             => 'DNSProxyingEnabled',
        'discoverySelectors'             => 'DiscoverySelectors',
        'dubboFilterEnabled'             => 'DubboFilterEnabled',
        'enableAudit'                    => 'EnableAudit',
        'enableCRHistory'                => 'EnableCRHistory',
        'enableNamespacesByDefault'      => 'EnableNamespacesByDefault',
        'enableSDSServer'                => 'EnableSDSServer',
        'excludeIPRanges'                => 'ExcludeIPRanges',
        'excludeInboundPorts'            => 'ExcludeInboundPorts',
        'excludeOutboundPorts'           => 'ExcludeOutboundPorts',
        'filterGatewayClusterConfig'     => 'FilterGatewayClusterConfig',
        'gatewayAPIEnabled'              => 'GatewayAPIEnabled',
        'globalRateLimitEnabled'         => 'GlobalRateLimitEnabled',
        'http10Enabled'                  => 'Http10Enabled',
        'includeIPRanges'                => 'IncludeIPRanges',
        'includeInboundPorts'            => 'IncludeInboundPorts',
        'integrateKiali'                 => 'IntegrateKiali',
        'kialiEnabled'                   => 'KialiEnabled',
        'lifecycle'                      => 'Lifecycle',
        'localityLBConf'                 => 'LocalityLBConf',
        'localityLoadBalancing'          => 'LocalityLoadBalancing',
        'MSEEnabled'                     => 'MSEEnabled',
        'multiBufferEnabled'             => 'MultiBufferEnabled',
        'multiBufferPollDelay'           => 'MultiBufferPollDelay',
        'mysqlFilterEnabled'             => 'MysqlFilterEnabled',
        'OPAInjectorCPULimit'            => 'OPAInjectorCPULimit',
        'OPAInjectorCPURequirement'      => 'OPAInjectorCPURequirement',
        'OPAInjectorMemoryLimit'         => 'OPAInjectorMemoryLimit',
        'OPAInjectorMemoryRequirement'   => 'OPAInjectorMemoryRequirement',
        'OPALimitCPU'                    => 'OPALimitCPU',
        'OPALimitMemory'                 => 'OPALimitMemory',
        'OPALogLevel'                    => 'OPALogLevel',
        'OPARequestCPU'                  => 'OPARequestCPU',
        'OPARequestMemory'               => 'OPARequestMemory',
        'OPAScopeInjected'               => 'OPAScopeInjected',
        'opaEnabled'                     => 'OpaEnabled',
        'openAgentPolicy'                => 'OpenAgentPolicy',
        'outboundTrafficPolicy'          => 'OutboundTrafficPolicy',
        'prometheusUrl'                  => 'PrometheusUrl',
        'proxyInitCPUResourceLimit'      => 'ProxyInitCPUResourceLimit',
        'proxyInitCPUResourceRequest'    => 'ProxyInitCPUResourceRequest',
        'proxyInitMemoryResourceLimit'   => 'ProxyInitMemoryResourceLimit',
        'proxyInitMemoryResourceRequest' => 'ProxyInitMemoryResourceRequest',
        'proxyLimitCPU'                  => 'ProxyLimitCPU',
        'proxyLimitMemory'               => 'ProxyLimitMemory',
        'proxyRequestCPU'                => 'ProxyRequestCPU',
        'proxyRequestMemory'             => 'ProxyRequestMemory',
        'redisFilterEnabled'             => 'RedisFilterEnabled',
        'serviceMeshId'                  => 'ServiceMeshId',
        'sidecarInjectorLimitCPU'        => 'SidecarInjectorLimitCPU',
        'sidecarInjectorLimitMemory'     => 'SidecarInjectorLimitMemory',
        'sidecarInjectorRequestCPU'      => 'SidecarInjectorRequestCPU',
        'sidecarInjectorRequestMemory'   => 'SidecarInjectorRequestMemory',
        'sidecarInjectorWebhookAsYaml'   => 'SidecarInjectorWebhookAsYaml',
        'telemetry'                      => 'Telemetry',
        'terminationDrainDuration'       => 'TerminationDrainDuration',
        'thriftFilterEnabled'            => 'ThriftFilterEnabled',
        'traceSampling'                  => 'TraceSampling',
        'tracing'                        => 'Tracing',
        'webAssemblyFilterEnabled'       => 'WebAssemblyFilterEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }
        if (null !== $this->CRAggregationEnabled) {
            $res['CRAggregationEnabled'] = $this->CRAggregationEnabled;
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
        if (null !== $this->discoverySelectors) {
            $res['DiscoverySelectors'] = $this->discoverySelectors;
        }
        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
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
        if (null !== $this->filterGatewayClusterConfig) {
            $res['FilterGatewayClusterConfig'] = $this->filterGatewayClusterConfig;
        }
        if (null !== $this->gatewayAPIEnabled) {
            $res['GatewayAPIEnabled'] = $this->gatewayAPIEnabled;
        }
        if (null !== $this->globalRateLimitEnabled) {
            $res['GlobalRateLimitEnabled'] = $this->globalRateLimitEnabled;
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
        if (null !== $this->integrateKiali) {
            $res['IntegrateKiali'] = $this->integrateKiali;
        }
        if (null !== $this->kialiEnabled) {
            $res['KialiEnabled'] = $this->kialiEnabled;
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
        if (null !== $this->redisFilterEnabled) {
            $res['RedisFilterEnabled'] = $this->redisFilterEnabled;
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
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->webAssemblyFilterEnabled) {
            $res['WebAssemblyFilterEnabled'] = $this->webAssemblyFilterEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMeshFeatureRequest
     */
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
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }
        if (isset($map['CRAggregationEnabled'])) {
            $model->CRAggregationEnabled = $map['CRAggregationEnabled'];
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
        if (isset($map['DiscoverySelectors'])) {
            $model->discoverySelectors = $map['DiscoverySelectors'];
        }
        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
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
        if (isset($map['FilterGatewayClusterConfig'])) {
            $model->filterGatewayClusterConfig = $map['FilterGatewayClusterConfig'];
        }
        if (isset($map['GatewayAPIEnabled'])) {
            $model->gatewayAPIEnabled = $map['GatewayAPIEnabled'];
        }
        if (isset($map['GlobalRateLimitEnabled'])) {
            $model->globalRateLimitEnabled = $map['GlobalRateLimitEnabled'];
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
        if (isset($map['IntegrateKiali'])) {
            $model->integrateKiali = $map['IntegrateKiali'];
        }
        if (isset($map['KialiEnabled'])) {
            $model->kialiEnabled = $map['KialiEnabled'];
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
        if (isset($map['RedisFilterEnabled'])) {
            $model->redisFilterEnabled = $map['RedisFilterEnabled'];
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
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['WebAssemblyFilterEnabled'])) {
            $model->webAssemblyFilterEnabled = $map['WebAssemblyFilterEnabled'];
        }

        return $model;
    }
}
