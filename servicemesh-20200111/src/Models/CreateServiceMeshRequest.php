<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceMeshRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $istioVersion;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @var bool
     */
    public $pilotPublicEip;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $vSwitches;

    /**
     * @var float
     */
    public $traceSampling;

    /**
     * @var bool
     */
    public $localityLoadBalancing;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var bool
     */
    public $openAgentPolicy;

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
     * @var string
     */
    public $OPALimitCPU;

    /**
     * @var string
     */
    public $OPALimitMemory;

    /**
     * @var bool
     */
    public $enableAudit;

    /**
     * @var string
     */
    public $auditProject;

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
    public $proxyLimitCPU;

    /**
     * @var string
     */
    public $proxyLimitMemory;

    /**
     * @var string
     */
    public $includeIPRanges;

    /**
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @var bool
     */
    public $opaEnabled;

    /**
     * @var bool
     */
    public $kialiEnabled;

    /**
     * @var bool
     */
    public $accessLogEnabled;

    /**
     * @var bool
     */
    public $customizedPrometheus;

    /**
     * @var string
     */
    public $prometheusUrl;

    /**
     * @var bool
     */
    public $redisFilterEnabled;

    /**
     * @var bool
     */
    public $mysqlFilterEnabled;

    /**
     * @var bool
     */
    public $thriftFilterEnabled;

    /**
     * @var bool
     */
    public $webAssemblyFilterEnabled;

    /**
     * @var bool
     */
    public $MSEEnabled;

    /**
     * @var bool
     */
    public $DNSProxyingEnabled;

    /**
     * @var string
     */
    public $edition;

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
    public $dubboFilterEnabled;

    /**
     * @var bool
     */
    public $filterGatewayClusterConfig;

    /**
     * @var bool
     */
    public $enableSDSServer;

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
    public $gatewayAPIEnabled;
    protected $_name = [
        'regionId'                   => 'RegionId',
        'istioVersion'               => 'IstioVersion',
        'vpcId'                      => 'VpcId',
        'apiServerPublicEip'         => 'ApiServerPublicEip',
        'pilotPublicEip'             => 'PilotPublicEip',
        'tracing'                    => 'Tracing',
        'name'                       => 'Name',
        'vSwitches'                  => 'VSwitches',
        'traceSampling'              => 'TraceSampling',
        'localityLoadBalancing'      => 'LocalityLoadBalancing',
        'telemetry'                  => 'Telemetry',
        'openAgentPolicy'            => 'OpenAgentPolicy',
        'OPALogLevel'                => 'OPALogLevel',
        'OPARequestCPU'              => 'OPARequestCPU',
        'OPARequestMemory'           => 'OPARequestMemory',
        'OPALimitCPU'                => 'OPALimitCPU',
        'OPALimitMemory'             => 'OPALimitMemory',
        'enableAudit'                => 'EnableAudit',
        'auditProject'               => 'AuditProject',
        'proxyRequestCPU'            => 'ProxyRequestCPU',
        'proxyRequestMemory'         => 'ProxyRequestMemory',
        'proxyLimitCPU'              => 'ProxyLimitCPU',
        'proxyLimitMemory'           => 'ProxyLimitMemory',
        'includeIPRanges'            => 'IncludeIPRanges',
        'excludeIPRanges'            => 'ExcludeIPRanges',
        'excludeOutboundPorts'       => 'ExcludeOutboundPorts',
        'excludeInboundPorts'        => 'ExcludeInboundPorts',
        'opaEnabled'                 => 'OpaEnabled',
        'kialiEnabled'               => 'KialiEnabled',
        'accessLogEnabled'           => 'AccessLogEnabled',
        'customizedPrometheus'       => 'CustomizedPrometheus',
        'prometheusUrl'              => 'PrometheusUrl',
        'redisFilterEnabled'         => 'RedisFilterEnabled',
        'mysqlFilterEnabled'         => 'MysqlFilterEnabled',
        'thriftFilterEnabled'        => 'ThriftFilterEnabled',
        'webAssemblyFilterEnabled'   => 'WebAssemblyFilterEnabled',
        'MSEEnabled'                 => 'MSEEnabled',
        'DNSProxyingEnabled'         => 'DNSProxyingEnabled',
        'edition'                    => 'Edition',
        'configSourceEnabled'        => 'ConfigSourceEnabled',
        'configSourceNacosID'        => 'ConfigSourceNacosID',
        'dubboFilterEnabled'         => 'DubboFilterEnabled',
        'filterGatewayClusterConfig' => 'FilterGatewayClusterConfig',
        'enableSDSServer'            => 'EnableSDSServer',
        'accessLogServiceEnabled'    => 'AccessLogServiceEnabled',
        'accessLogServiceHost'       => 'AccessLogServiceHost',
        'accessLogServicePort'       => 'AccessLogServicePort',
        'gatewayAPIEnabled'          => 'GatewayAPIEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->istioVersion) {
            $res['IstioVersion'] = $this->istioVersion;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }
        if (null !== $this->pilotPublicEip) {
            $res['PilotPublicEip'] = $this->pilotPublicEip;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }
        if (null !== $this->localityLoadBalancing) {
            $res['LocalityLoadBalancing'] = $this->localityLoadBalancing;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->openAgentPolicy) {
            $res['OpenAgentPolicy'] = $this->openAgentPolicy;
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
        if (null !== $this->OPALimitCPU) {
            $res['OPALimitCPU'] = $this->OPALimitCPU;
        }
        if (null !== $this->OPALimitMemory) {
            $res['OPALimitMemory'] = $this->OPALimitMemory;
        }
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->proxyRequestCPU) {
            $res['ProxyRequestCPU'] = $this->proxyRequestCPU;
        }
        if (null !== $this->proxyRequestMemory) {
            $res['ProxyRequestMemory'] = $this->proxyRequestMemory;
        }
        if (null !== $this->proxyLimitCPU) {
            $res['ProxyLimitCPU'] = $this->proxyLimitCPU;
        }
        if (null !== $this->proxyLimitMemory) {
            $res['ProxyLimitMemory'] = $this->proxyLimitMemory;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->excludeIPRanges) {
            $res['ExcludeIPRanges'] = $this->excludeIPRanges;
        }
        if (null !== $this->excludeOutboundPorts) {
            $res['ExcludeOutboundPorts'] = $this->excludeOutboundPorts;
        }
        if (null !== $this->excludeInboundPorts) {
            $res['ExcludeInboundPorts'] = $this->excludeInboundPorts;
        }
        if (null !== $this->opaEnabled) {
            $res['OpaEnabled'] = $this->opaEnabled;
        }
        if (null !== $this->kialiEnabled) {
            $res['KialiEnabled'] = $this->kialiEnabled;
        }
        if (null !== $this->accessLogEnabled) {
            $res['AccessLogEnabled'] = $this->accessLogEnabled;
        }
        if (null !== $this->customizedPrometheus) {
            $res['CustomizedPrometheus'] = $this->customizedPrometheus;
        }
        if (null !== $this->prometheusUrl) {
            $res['PrometheusUrl'] = $this->prometheusUrl;
        }
        if (null !== $this->redisFilterEnabled) {
            $res['RedisFilterEnabled'] = $this->redisFilterEnabled;
        }
        if (null !== $this->mysqlFilterEnabled) {
            $res['MysqlFilterEnabled'] = $this->mysqlFilterEnabled;
        }
        if (null !== $this->thriftFilterEnabled) {
            $res['ThriftFilterEnabled'] = $this->thriftFilterEnabled;
        }
        if (null !== $this->webAssemblyFilterEnabled) {
            $res['WebAssemblyFilterEnabled'] = $this->webAssemblyFilterEnabled;
        }
        if (null !== $this->MSEEnabled) {
            $res['MSEEnabled'] = $this->MSEEnabled;
        }
        if (null !== $this->DNSProxyingEnabled) {
            $res['DNSProxyingEnabled'] = $this->DNSProxyingEnabled;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->configSourceEnabled) {
            $res['ConfigSourceEnabled'] = $this->configSourceEnabled;
        }
        if (null !== $this->configSourceNacosID) {
            $res['ConfigSourceNacosID'] = $this->configSourceNacosID;
        }
        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }
        if (null !== $this->filterGatewayClusterConfig) {
            $res['FilterGatewayClusterConfig'] = $this->filterGatewayClusterConfig;
        }
        if (null !== $this->enableSDSServer) {
            $res['EnableSDSServer'] = $this->enableSDSServer;
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
        if (null !== $this->gatewayAPIEnabled) {
            $res['GatewayAPIEnabled'] = $this->gatewayAPIEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceMeshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IstioVersion'])) {
            $model->istioVersion = $map['IstioVersion'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }
        if (isset($map['PilotPublicEip'])) {
            $model->pilotPublicEip = $map['PilotPublicEip'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VSwitches'])) {
            $model->vSwitches = $map['VSwitches'];
        }
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }
        if (isset($map['LocalityLoadBalancing'])) {
            $model->localityLoadBalancing = $map['LocalityLoadBalancing'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['OpenAgentPolicy'])) {
            $model->openAgentPolicy = $map['OpenAgentPolicy'];
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
        if (isset($map['OPALimitCPU'])) {
            $model->OPALimitCPU = $map['OPALimitCPU'];
        }
        if (isset($map['OPALimitMemory'])) {
            $model->OPALimitMemory = $map['OPALimitMemory'];
        }
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['ProxyRequestCPU'])) {
            $model->proxyRequestCPU = $map['ProxyRequestCPU'];
        }
        if (isset($map['ProxyRequestMemory'])) {
            $model->proxyRequestMemory = $map['ProxyRequestMemory'];
        }
        if (isset($map['ProxyLimitCPU'])) {
            $model->proxyLimitCPU = $map['ProxyLimitCPU'];
        }
        if (isset($map['ProxyLimitMemory'])) {
            $model->proxyLimitMemory = $map['ProxyLimitMemory'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['ExcludeIPRanges'])) {
            $model->excludeIPRanges = $map['ExcludeIPRanges'];
        }
        if (isset($map['ExcludeOutboundPorts'])) {
            $model->excludeOutboundPorts = $map['ExcludeOutboundPorts'];
        }
        if (isset($map['ExcludeInboundPorts'])) {
            $model->excludeInboundPorts = $map['ExcludeInboundPorts'];
        }
        if (isset($map['OpaEnabled'])) {
            $model->opaEnabled = $map['OpaEnabled'];
        }
        if (isset($map['KialiEnabled'])) {
            $model->kialiEnabled = $map['KialiEnabled'];
        }
        if (isset($map['AccessLogEnabled'])) {
            $model->accessLogEnabled = $map['AccessLogEnabled'];
        }
        if (isset($map['CustomizedPrometheus'])) {
            $model->customizedPrometheus = $map['CustomizedPrometheus'];
        }
        if (isset($map['PrometheusUrl'])) {
            $model->prometheusUrl = $map['PrometheusUrl'];
        }
        if (isset($map['RedisFilterEnabled'])) {
            $model->redisFilterEnabled = $map['RedisFilterEnabled'];
        }
        if (isset($map['MysqlFilterEnabled'])) {
            $model->mysqlFilterEnabled = $map['MysqlFilterEnabled'];
        }
        if (isset($map['ThriftFilterEnabled'])) {
            $model->thriftFilterEnabled = $map['ThriftFilterEnabled'];
        }
        if (isset($map['WebAssemblyFilterEnabled'])) {
            $model->webAssemblyFilterEnabled = $map['WebAssemblyFilterEnabled'];
        }
        if (isset($map['MSEEnabled'])) {
            $model->MSEEnabled = $map['MSEEnabled'];
        }
        if (isset($map['DNSProxyingEnabled'])) {
            $model->DNSProxyingEnabled = $map['DNSProxyingEnabled'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['ConfigSourceEnabled'])) {
            $model->configSourceEnabled = $map['ConfigSourceEnabled'];
        }
        if (isset($map['ConfigSourceNacosID'])) {
            $model->configSourceNacosID = $map['ConfigSourceNacosID'];
        }
        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }
        if (isset($map['FilterGatewayClusterConfig'])) {
            $model->filterGatewayClusterConfig = $map['FilterGatewayClusterConfig'];
        }
        if (isset($map['EnableSDSServer'])) {
            $model->enableSDSServer = $map['EnableSDSServer'];
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
        if (isset($map['GatewayAPIEnabled'])) {
            $model->gatewayAPIEnabled = $map['GatewayAPIEnabled'];
        }

        return $model;
    }
}
