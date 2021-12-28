<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceMeshRequest extends Model
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
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @var string
     */
    public $auditProject;

    /**
     * @var bool
     */
    public $CRAggregationEnabled;

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
    public $controlPlaneLogEnabled;

    /**
     * @var string
     */
    public $controlPlaneLogProject;

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
     * @var bool
     */
    public $dubboFilterEnabled;

    /**
     * @var string
     */
    public $edition;

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
     * @var string
     */
    public $includeIPRanges;

    /**
     * @var string
     */
    public $istioVersion;

    /**
     * @var bool
     */
    public $kialiEnabled;

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
    public $mysqlFilterEnabled;

    /**
     * @var string
     */
    public $name;

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
    public $opaEnabled;

    /**
     * @var bool
     */
    public $openAgentPolicy;

    /**
     * @var bool
     */
    public $pilotPublicEip;

    /**
     * @var string
     */
    public $prometheusUrl;

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
    public $regionId;

    /**
     * @var bool
     */
    public $telemetry;

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
     * @var string
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $webAssemblyFilterEnabled;
    protected $_name = [
        'accessLogEnabled'           => 'AccessLogEnabled',
        'accessLogFile'              => 'AccessLogFile',
        'accessLogFormat'            => 'AccessLogFormat',
        'accessLogProject'           => 'AccessLogProject',
        'accessLogServiceEnabled'    => 'AccessLogServiceEnabled',
        'accessLogServiceHost'       => 'AccessLogServiceHost',
        'accessLogServicePort'       => 'AccessLogServicePort',
        'apiServerPublicEip'         => 'ApiServerPublicEip',
        'auditProject'               => 'AuditProject',
        'CRAggregationEnabled'       => 'CRAggregationEnabled',
        'configSourceEnabled'        => 'ConfigSourceEnabled',
        'configSourceNacosID'        => 'ConfigSourceNacosID',
        'controlPlaneLogEnabled'     => 'ControlPlaneLogEnabled',
        'controlPlaneLogProject'     => 'ControlPlaneLogProject',
        'customizedPrometheus'       => 'CustomizedPrometheus',
        'customizedZipkin'           => 'CustomizedZipkin',
        'DNSProxyingEnabled'         => 'DNSProxyingEnabled',
        'dubboFilterEnabled'         => 'DubboFilterEnabled',
        'edition'                    => 'Edition',
        'enableAudit'                => 'EnableAudit',
        'enableCRHistory'            => 'EnableCRHistory',
        'enableSDSServer'            => 'EnableSDSServer',
        'excludeIPRanges'            => 'ExcludeIPRanges',
        'excludeInboundPorts'        => 'ExcludeInboundPorts',
        'excludeOutboundPorts'       => 'ExcludeOutboundPorts',
        'filterGatewayClusterConfig' => 'FilterGatewayClusterConfig',
        'gatewayAPIEnabled'          => 'GatewayAPIEnabled',
        'includeIPRanges'            => 'IncludeIPRanges',
        'istioVersion'               => 'IstioVersion',
        'kialiEnabled'               => 'KialiEnabled',
        'localityLBConf'             => 'LocalityLBConf',
        'localityLoadBalancing'      => 'LocalityLoadBalancing',
        'MSEEnabled'                 => 'MSEEnabled',
        'mysqlFilterEnabled'         => 'MysqlFilterEnabled',
        'name'                       => 'Name',
        'OPALimitCPU'                => 'OPALimitCPU',
        'OPALimitMemory'             => 'OPALimitMemory',
        'OPALogLevel'                => 'OPALogLevel',
        'OPARequestCPU'              => 'OPARequestCPU',
        'OPARequestMemory'           => 'OPARequestMemory',
        'opaEnabled'                 => 'OpaEnabled',
        'openAgentPolicy'            => 'OpenAgentPolicy',
        'pilotPublicEip'             => 'PilotPublicEip',
        'prometheusUrl'              => 'PrometheusUrl',
        'proxyLimitCPU'              => 'ProxyLimitCPU',
        'proxyLimitMemory'           => 'ProxyLimitMemory',
        'proxyRequestCPU'            => 'ProxyRequestCPU',
        'proxyRequestMemory'         => 'ProxyRequestMemory',
        'redisFilterEnabled'         => 'RedisFilterEnabled',
        'regionId'                   => 'RegionId',
        'telemetry'                  => 'Telemetry',
        'thriftFilterEnabled'        => 'ThriftFilterEnabled',
        'traceSampling'              => 'TraceSampling',
        'tracing'                    => 'Tracing',
        'vSwitches'                  => 'VSwitches',
        'vpcId'                      => 'VpcId',
        'webAssemblyFilterEnabled'   => 'WebAssemblyFilterEnabled',
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
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->CRAggregationEnabled) {
            $res['CRAggregationEnabled'] = $this->CRAggregationEnabled;
        }
        if (null !== $this->configSourceEnabled) {
            $res['ConfigSourceEnabled'] = $this->configSourceEnabled;
        }
        if (null !== $this->configSourceNacosID) {
            $res['ConfigSourceNacosID'] = $this->configSourceNacosID;
        }
        if (null !== $this->controlPlaneLogEnabled) {
            $res['ControlPlaneLogEnabled'] = $this->controlPlaneLogEnabled;
        }
        if (null !== $this->controlPlaneLogProject) {
            $res['ControlPlaneLogProject'] = $this->controlPlaneLogProject;
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
        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->enableCRHistory) {
            $res['EnableCRHistory'] = $this->enableCRHistory;
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
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->istioVersion) {
            $res['IstioVersion'] = $this->istioVersion;
        }
        if (null !== $this->kialiEnabled) {
            $res['KialiEnabled'] = $this->kialiEnabled;
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
        if (null !== $this->mysqlFilterEnabled) {
            $res['MysqlFilterEnabled'] = $this->mysqlFilterEnabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->opaEnabled) {
            $res['OpaEnabled'] = $this->opaEnabled;
        }
        if (null !== $this->openAgentPolicy) {
            $res['OpenAgentPolicy'] = $this->openAgentPolicy;
        }
        if (null !== $this->pilotPublicEip) {
            $res['PilotPublicEip'] = $this->pilotPublicEip;
        }
        if (null !== $this->prometheusUrl) {
            $res['PrometheusUrl'] = $this->prometheusUrl;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
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
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->webAssemblyFilterEnabled) {
            $res['WebAssemblyFilterEnabled'] = $this->webAssemblyFilterEnabled;
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
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['CRAggregationEnabled'])) {
            $model->CRAggregationEnabled = $map['CRAggregationEnabled'];
        }
        if (isset($map['ConfigSourceEnabled'])) {
            $model->configSourceEnabled = $map['ConfigSourceEnabled'];
        }
        if (isset($map['ConfigSourceNacosID'])) {
            $model->configSourceNacosID = $map['ConfigSourceNacosID'];
        }
        if (isset($map['ControlPlaneLogEnabled'])) {
            $model->controlPlaneLogEnabled = $map['ControlPlaneLogEnabled'];
        }
        if (isset($map['ControlPlaneLogProject'])) {
            $model->controlPlaneLogProject = $map['ControlPlaneLogProject'];
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
        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['EnableCRHistory'])) {
            $model->enableCRHistory = $map['EnableCRHistory'];
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
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['IstioVersion'])) {
            $model->istioVersion = $map['IstioVersion'];
        }
        if (isset($map['KialiEnabled'])) {
            $model->kialiEnabled = $map['KialiEnabled'];
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
        if (isset($map['MysqlFilterEnabled'])) {
            $model->mysqlFilterEnabled = $map['MysqlFilterEnabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['OpaEnabled'])) {
            $model->opaEnabled = $map['OpaEnabled'];
        }
        if (isset($map['OpenAgentPolicy'])) {
            $model->openAgentPolicy = $map['OpenAgentPolicy'];
        }
        if (isset($map['PilotPublicEip'])) {
            $model->pilotPublicEip = $map['PilotPublicEip'];
        }
        if (isset($map['PrometheusUrl'])) {
            $model->prometheusUrl = $map['PrometheusUrl'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
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
        if (isset($map['VSwitches'])) {
            $model->vSwitches = $map['VSwitches'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WebAssemblyFilterEnabled'])) {
            $model->webAssemblyFilterEnabled = $map['WebAssemblyFilterEnabled'];
        }

        return $model;
    }
}
