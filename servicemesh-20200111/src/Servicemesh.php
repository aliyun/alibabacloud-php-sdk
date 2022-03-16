<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddVMIntoServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddVMIntoServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateASMGatewayRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateASMGatewayResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeAhasProRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeAhasProResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeASMGatewayImportedServicesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeASMGatewayImportedServicesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCCMVersionRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCCMVersionResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCensRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCensResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterGrafanaRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterGrafanaResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterPrometheusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterPrometheusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCrTemplatesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCrTemplatesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterNamespacesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterNamespacesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterPodsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterPodsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeImportedServicesDetailRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeImportedServicesDetailResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIngressGatewaysRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIngressGatewaysResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNodesInstanceTypeRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNodesInstanceTypeResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeReusableSlbRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeReusableSlbResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshClustersRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshClustersResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshKubeconfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshKubeconfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshLogsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshLogsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshProxyStatusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshProxyStatusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshUpgradeStatusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshUpgradeStatusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshVMsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshVMsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUsersWithPermissionsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUsersWithPermissionsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVMsInServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVMsInServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetCaCertRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetCaCertResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceNamespacesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceNamespacesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmAppMeshInfoRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmAppMeshInfoResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyServiceMeshNameRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyServiceMeshNameResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ReActivateAuditRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ReActivateAuditResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveClusterFromServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveClusterFromServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveVMFromServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveVMFromServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RevokeKubeconfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RevokeKubeconfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMGatewayImportedServicesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMGatewayImportedServicesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMGatewayRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMGatewayResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshFeatureRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshFeatureResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateNamespaceScopeSidecarConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateNamespaceScopeSidecarConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshEditionPartiallyRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshEditionPartiallyResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshVersionRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Servicemesh extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('servicemesh', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddClusterIntoServiceMeshRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddClusterIntoServiceMeshResponse
     */
    public function addClusterIntoServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddClusterIntoServiceMesh',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddClusterIntoServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddClusterIntoServiceMeshRequest $request
     *
     * @return AddClusterIntoServiceMeshResponse
     */
    public function addClusterIntoServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClusterIntoServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param AddVMIntoServiceMeshRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddVMIntoServiceMeshResponse
     */
    public function addVMIntoServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ecsId)) {
            $query['EcsId'] = $request->ecsId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVMIntoServiceMesh',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddVMIntoServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddVMIntoServiceMeshRequest $request
     *
     * @return AddVMIntoServiceMeshResponse
     */
    public function addVMIntoServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVMIntoServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param CreateASMGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateASMGatewayResponse
     */
    public function createASMGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->istioGatewayName)) {
            $body['IstioGatewayName'] = $request->istioGatewayName;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateASMGateway',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateASMGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateASMGatewayRequest $request
     *
     * @return CreateASMGatewayResponse
     */
    public function createASMGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createASMGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceMeshRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessLogEnabled)) {
            $body['AccessLogEnabled'] = $request->accessLogEnabled;
        }
        if (!Utils::isUnset($request->accessLogFile)) {
            $body['AccessLogFile'] = $request->accessLogFile;
        }
        if (!Utils::isUnset($request->accessLogFormat)) {
            $body['AccessLogFormat'] = $request->accessLogFormat;
        }
        if (!Utils::isUnset($request->accessLogProject)) {
            $body['AccessLogProject'] = $request->accessLogProject;
        }
        if (!Utils::isUnset($request->accessLogServiceEnabled)) {
            $body['AccessLogServiceEnabled'] = $request->accessLogServiceEnabled;
        }
        if (!Utils::isUnset($request->accessLogServiceHost)) {
            $body['AccessLogServiceHost'] = $request->accessLogServiceHost;
        }
        if (!Utils::isUnset($request->accessLogServicePort)) {
            $body['AccessLogServicePort'] = $request->accessLogServicePort;
        }
        if (!Utils::isUnset($request->apiServerLoadBalancerSpec)) {
            $body['ApiServerLoadBalancerSpec'] = $request->apiServerLoadBalancerSpec;
        }
        if (!Utils::isUnset($request->apiServerPublicEip)) {
            $body['ApiServerPublicEip'] = $request->apiServerPublicEip;
        }
        if (!Utils::isUnset($request->auditProject)) {
            $body['AuditProject'] = $request->auditProject;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $body['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->CRAggregationEnabled)) {
            $body['CRAggregationEnabled'] = $request->CRAggregationEnabled;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $body['ClusterSpec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->configSourceEnabled)) {
            $body['ConfigSourceEnabled'] = $request->configSourceEnabled;
        }
        if (!Utils::isUnset($request->configSourceNacosID)) {
            $body['ConfigSourceNacosID'] = $request->configSourceNacosID;
        }
        if (!Utils::isUnset($request->controlPlaneLogEnabled)) {
            $body['ControlPlaneLogEnabled'] = $request->controlPlaneLogEnabled;
        }
        if (!Utils::isUnset($request->controlPlaneLogProject)) {
            $body['ControlPlaneLogProject'] = $request->controlPlaneLogProject;
        }
        if (!Utils::isUnset($request->customizedPrometheus)) {
            $body['CustomizedPrometheus'] = $request->customizedPrometheus;
        }
        if (!Utils::isUnset($request->customizedZipkin)) {
            $body['CustomizedZipkin'] = $request->customizedZipkin;
        }
        if (!Utils::isUnset($request->DNSProxyingEnabled)) {
            $body['DNSProxyingEnabled'] = $request->DNSProxyingEnabled;
        }
        if (!Utils::isUnset($request->dubboFilterEnabled)) {
            $body['DubboFilterEnabled'] = $request->dubboFilterEnabled;
        }
        if (!Utils::isUnset($request->edition)) {
            $body['Edition'] = $request->edition;
        }
        if (!Utils::isUnset($request->enableAudit)) {
            $body['EnableAudit'] = $request->enableAudit;
        }
        if (!Utils::isUnset($request->enableCRHistory)) {
            $body['EnableCRHistory'] = $request->enableCRHistory;
        }
        if (!Utils::isUnset($request->enableSDSServer)) {
            $body['EnableSDSServer'] = $request->enableSDSServer;
        }
        if (!Utils::isUnset($request->excludeIPRanges)) {
            $body['ExcludeIPRanges'] = $request->excludeIPRanges;
        }
        if (!Utils::isUnset($request->excludeInboundPorts)) {
            $body['ExcludeInboundPorts'] = $request->excludeInboundPorts;
        }
        if (!Utils::isUnset($request->excludeOutboundPorts)) {
            $body['ExcludeOutboundPorts'] = $request->excludeOutboundPorts;
        }
        if (!Utils::isUnset($request->filterGatewayClusterConfig)) {
            $body['FilterGatewayClusterConfig'] = $request->filterGatewayClusterConfig;
        }
        if (!Utils::isUnset($request->gatewayAPIEnabled)) {
            $body['GatewayAPIEnabled'] = $request->gatewayAPIEnabled;
        }
        if (!Utils::isUnset($request->globalRateLimitEnabled)) {
            $body['GlobalRateLimitEnabled'] = $request->globalRateLimitEnabled;
        }
        if (!Utils::isUnset($request->includeIPRanges)) {
            $body['IncludeIPRanges'] = $request->includeIPRanges;
        }
        if (!Utils::isUnset($request->istioVersion)) {
            $body['IstioVersion'] = $request->istioVersion;
        }
        if (!Utils::isUnset($request->kialiEnabled)) {
            $body['KialiEnabled'] = $request->kialiEnabled;
        }
        if (!Utils::isUnset($request->localityLBConf)) {
            $body['LocalityLBConf'] = $request->localityLBConf;
        }
        if (!Utils::isUnset($request->localityLoadBalancing)) {
            $body['LocalityLoadBalancing'] = $request->localityLoadBalancing;
        }
        if (!Utils::isUnset($request->MSEEnabled)) {
            $body['MSEEnabled'] = $request->MSEEnabled;
        }
        if (!Utils::isUnset($request->multiBufferEnabled)) {
            $body['MultiBufferEnabled'] = $request->multiBufferEnabled;
        }
        if (!Utils::isUnset($request->multiBufferPollDelay)) {
            $body['MultiBufferPollDelay'] = $request->multiBufferPollDelay;
        }
        if (!Utils::isUnset($request->mysqlFilterEnabled)) {
            $body['MysqlFilterEnabled'] = $request->mysqlFilterEnabled;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->OPALimitCPU)) {
            $body['OPALimitCPU'] = $request->OPALimitCPU;
        }
        if (!Utils::isUnset($request->OPALimitMemory)) {
            $body['OPALimitMemory'] = $request->OPALimitMemory;
        }
        if (!Utils::isUnset($request->OPALogLevel)) {
            $body['OPALogLevel'] = $request->OPALogLevel;
        }
        if (!Utils::isUnset($request->OPARequestCPU)) {
            $body['OPARequestCPU'] = $request->OPARequestCPU;
        }
        if (!Utils::isUnset($request->OPARequestMemory)) {
            $body['OPARequestMemory'] = $request->OPARequestMemory;
        }
        if (!Utils::isUnset($request->opaEnabled)) {
            $body['OpaEnabled'] = $request->opaEnabled;
        }
        if (!Utils::isUnset($request->openAgentPolicy)) {
            $body['OpenAgentPolicy'] = $request->openAgentPolicy;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->pilotLoadBalancerSpec)) {
            $body['PilotLoadBalancerSpec'] = $request->pilotLoadBalancerSpec;
        }
        if (!Utils::isUnset($request->prometheusUrl)) {
            $body['PrometheusUrl'] = $request->prometheusUrl;
        }
        if (!Utils::isUnset($request->proxyLimitCPU)) {
            $body['ProxyLimitCPU'] = $request->proxyLimitCPU;
        }
        if (!Utils::isUnset($request->proxyLimitMemory)) {
            $body['ProxyLimitMemory'] = $request->proxyLimitMemory;
        }
        if (!Utils::isUnset($request->proxyRequestCPU)) {
            $body['ProxyRequestCPU'] = $request->proxyRequestCPU;
        }
        if (!Utils::isUnset($request->proxyRequestMemory)) {
            $body['ProxyRequestMemory'] = $request->proxyRequestMemory;
        }
        if (!Utils::isUnset($request->redisFilterEnabled)) {
            $body['RedisFilterEnabled'] = $request->redisFilterEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->telemetry)) {
            $body['Telemetry'] = $request->telemetry;
        }
        if (!Utils::isUnset($request->thriftFilterEnabled)) {
            $body['ThriftFilterEnabled'] = $request->thriftFilterEnabled;
        }
        if (!Utils::isUnset($request->traceSampling)) {
            $body['TraceSampling'] = $request->traceSampling;
        }
        if (!Utils::isUnset($request->tracing)) {
            $body['Tracing'] = $request->tracing;
        }
        if (!Utils::isUnset($request->vSwitches)) {
            $body['VSwitches'] = $request->vSwitches;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->webAssemblyFilterEnabled)) {
            $body['WebAssemblyFilterEnabled'] = $request->webAssemblyFilterEnabled;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceMesh',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceMeshRequest $request
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceMeshRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteServiceMeshResponse
     */
    public function deleteServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->force)) {
            $body['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->retainResources)) {
            $body['RetainResources'] = $request->retainResources;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceMesh',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceMeshRequest $request
     *
     * @return DeleteServiceMeshResponse
     */
    public function deleteServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param DescribeASMGatewayImportedServicesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeASMGatewayImportedServicesResponse
     */
    public function describeASMGatewayImportedServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ASMGatewayName)) {
            $body['ASMGatewayName'] = $request->ASMGatewayName;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->serviceNamespace)) {
            $body['ServiceNamespace'] = $request->serviceNamespace;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeASMGatewayImportedServices',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeASMGatewayImportedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeASMGatewayImportedServicesRequest $request
     *
     * @return DescribeASMGatewayImportedServicesResponse
     */
    public function describeASMGatewayImportedServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeASMGatewayImportedServicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAhasProRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAhasProResponse
     */
    public function describeAhasProWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAhasPro',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAhasProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAhasProRequest $request
     *
     * @return DescribeAhasProResponse
     */
    public function describeAhasPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAhasProWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCCMVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCCMVersionResponse
     */
    public function describeCCMVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCCMVersion',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCCMVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCCMVersionRequest $request
     *
     * @return DescribeCCMVersionResponse
     */
    public function describeCCMVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCCMVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCensRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeCensResponse
     */
    public function describeCensWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCens',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCensRequest $request
     *
     * @return DescribeCensResponse
     */
    public function describeCens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCensWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterGrafanaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterGrafanaResponse
     */
    public function describeClusterGrafanaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->k8sClusterId)) {
            $query['K8sClusterId'] = $request->k8sClusterId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterGrafana',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterGrafanaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterGrafanaRequest $request
     *
     * @return DescribeClusterGrafanaResponse
     */
    public function describeClusterGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterGrafanaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterPrometheusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterPrometheusResponse
     */
    public function describeClusterPrometheusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->k8sClusterId)) {
            $query['K8sClusterId'] = $request->k8sClusterId;
        }
        if (!Utils::isUnset($request->k8sClusterRegionId)) {
            $query['K8sClusterRegionId'] = $request->k8sClusterRegionId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterPrometheus',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterPrometheusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterPrometheusRequest $request
     *
     * @return DescribeClusterPrometheusResponse
     */
    public function describeClusterPrometheus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterPrometheusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClustersInServiceMeshRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClustersInServiceMeshResponse
     */
    public function describeClustersInServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClustersInServiceMesh',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClustersInServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClustersInServiceMeshRequest $request
     *
     * @return DescribeClustersInServiceMeshResponse
     */
    public function describeClustersInServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersInServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCrTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCrTemplatesResponse
     */
    public function describeCrTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->istioVersion)) {
            $body['IstioVersion'] = $request->istioVersion;
        }
        if (!Utils::isUnset($request->kind)) {
            $body['Kind'] = $request->kind;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCrTemplates',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCrTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCrTemplatesRequest $request
     *
     * @return DescribeCrTemplatesResponse
     */
    public function describeCrTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGuestClusterAccessLogDashboardsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeGuestClusterAccessLogDashboardsResponse
     */
    public function describeGuestClusterAccessLogDashboardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->k8sClusterId)) {
            $body['K8sClusterId'] = $request->k8sClusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeGuestClusterAccessLogDashboards',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGuestClusterAccessLogDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGuestClusterAccessLogDashboardsRequest $request
     *
     * @return DescribeGuestClusterAccessLogDashboardsResponse
     */
    public function describeGuestClusterAccessLogDashboards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGuestClusterAccessLogDashboardsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGuestClusterNamespacesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGuestClusterNamespacesResponse
     */
    public function describeGuestClusterNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->guestClusterID)) {
            $body['GuestClusterID'] = $request->guestClusterID;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeGuestClusterNamespaces',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGuestClusterNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGuestClusterNamespacesRequest $request
     *
     * @return DescribeGuestClusterNamespacesResponse
     */
    public function describeGuestClusterNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGuestClusterNamespacesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGuestClusterPodsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGuestClusterPodsResponse
     */
    public function describeGuestClusterPodsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->guestClusterID)) {
            $body['GuestClusterID'] = $request->guestClusterID;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeGuestClusterPods',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGuestClusterPodsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGuestClusterPodsRequest $request
     *
     * @return DescribeGuestClusterPodsResponse
     */
    public function describeGuestClusterPods($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGuestClusterPodsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImportedServicesDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeImportedServicesDetailResponse
     */
    public function describeImportedServicesDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ASMGatewayName)) {
            $body['ASMGatewayName'] = $request->ASMGatewayName;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->serviceNamespace)) {
            $body['ServiceNamespace'] = $request->serviceNamespace;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeImportedServicesDetail',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImportedServicesDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImportedServicesDetailRequest $request
     *
     * @return DescribeImportedServicesDetailResponse
     */
    public function describeImportedServicesDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImportedServicesDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIngressGatewaysRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeIngressGatewaysResponse
     */
    public function describeIngressGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIngressGateways',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIngressGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIngressGatewaysRequest $request
     *
     * @return DescribeIngressGatewaysResponse
     */
    public function describeIngressGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIngressGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNamespaceScopeSidecarConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeNamespaceScopeSidecarConfigResponse
     */
    public function describeNamespaceScopeSidecarConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespaceScopeSidecarConfig',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespaceScopeSidecarConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNamespaceScopeSidecarConfigRequest $request
     *
     * @return DescribeNamespaceScopeSidecarConfigResponse
     */
    public function describeNamespaceScopeSidecarConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNamespaceScopeSidecarConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNodesInstanceTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNodesInstanceTypeResponse
     */
    public function describeNodesInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodesInstanceType',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNodesInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNodesInstanceTypeRequest $request
     *
     * @return DescribeNodesInstanceTypeResponse
     */
    public function describeNodesInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodesInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReusableSlbRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeReusableSlbResponse
     */
    public function describeReusableSlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->k8sClusterId)) {
            $body['K8sClusterId'] = $request->k8sClusterId;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['NetworkType'] = $request->networkType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeReusableSlb',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReusableSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReusableSlbRequest $request
     *
     * @return DescribeReusableSlbResponse
     */
    public function describeReusableSlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReusableSlbWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshAdditionalStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeServiceMeshAdditionalStatusResponse
     */
    public function describeServiceMeshAdditionalStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkMode)) {
            $body['CheckMode'] = $request->checkMode;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshAdditionalStatus',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshAdditionalStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshAdditionalStatusRequest $request
     *
     * @return DescribeServiceMeshAdditionalStatusResponse
     */
    public function describeServiceMeshAdditionalStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshAdditionalStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshClustersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeServiceMeshClustersResponse
     */
    public function describeServiceMeshClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshClusters',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshClustersRequest $request
     *
     * @return DescribeServiceMeshClustersResponse
     */
    public function describeServiceMeshClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeServiceMeshDetailResponse
     */
    public function describeServiceMeshDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshDetail',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshDetailRequest $request
     *
     * @return DescribeServiceMeshDetailResponse
     */
    public function describeServiceMeshDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshKubeconfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeServiceMeshKubeconfigResponse
     */
    public function describeServiceMeshKubeconfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshKubeconfig',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshKubeconfigRequest $request
     *
     * @return DescribeServiceMeshKubeconfigResponse
     */
    public function describeServiceMeshKubeconfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshKubeconfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeServiceMeshLogsResponse
     */
    public function describeServiceMeshLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshLogs',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshLogsRequest $request
     *
     * @return DescribeServiceMeshLogsResponse
     */
    public function describeServiceMeshLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshProxyStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeServiceMeshProxyStatusResponse
     */
    public function describeServiceMeshProxyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshProxyStatus',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshProxyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshProxyStatusRequest $request
     *
     * @return DescribeServiceMeshProxyStatusResponse
     */
    public function describeServiceMeshProxyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshProxyStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshUpgradeStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeServiceMeshUpgradeStatusResponse
     */
    public function describeServiceMeshUpgradeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $body = [];
        if (!Utils::isUnset($request->allIstioGatewayFullNames)) {
            $body['AllIstioGatewayFullNames'] = $request->allIstioGatewayFullNames;
        }
        if (!Utils::isUnset($request->guestClusterIds)) {
            $body['GuestClusterIds'] = $request->guestClusterIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshUpgradeStatus',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshUpgradeStatusRequest $request
     *
     * @return DescribeServiceMeshUpgradeStatusResponse
     */
    public function describeServiceMeshUpgradeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshUpgradeStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshVMsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeServiceMeshVMsResponse
     */
    public function describeServiceMeshVMsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshVMs',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshVMsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshVMsRequest $request
     *
     * @return DescribeServiceMeshVMsResponse
     */
    public function describeServiceMeshVMs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshVMsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceMeshesResponse
     */
    public function describeServiceMeshesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshes',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeServiceMeshesResponse
     */
    public function describeServiceMeshes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshesWithOptions($runtime);
    }

    /**
     * @param DescribeUpgradeVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUpgradeVersionResponse
     */
    public function describeUpgradeVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpgradeVersion',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpgradeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpgradeVersionRequest $request
     *
     * @return DescribeUpgradeVersionResponse
     */
    public function describeUpgradeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpgradeVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUsersWithPermissionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeUsersWithPermissionsResponse
     */
    public function describeUsersWithPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userType)) {
            $body['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsersWithPermissions',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUsersWithPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsersWithPermissionsRequest $request
     *
     * @return DescribeUsersWithPermissionsResponse
     */
    public function describeUsersWithPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersWithPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVMsInServiceMeshRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVMsInServiceMeshResponse
     */
    public function describeVMsInServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVMsInServiceMesh',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVMsInServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVMsInServiceMeshRequest $request
     *
     * @return DescribeVMsInServiceMeshResponse
     */
    public function describeVMsInServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVMsInServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeVSwitches',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeVersionsResponse
     */
    public function describeVersionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeVersions',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeVersionsResponse
     */
    public function describeVersions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVersionsWithOptions($runtime);
    }

    /**
     * @param DescribeVpcsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcs',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpcsRequest $request
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcsWithOptions($request, $runtime);
    }

    /**
     * @param GetCaCertRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetCaCertResponse
     */
    public function getCaCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCaCert',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCaCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCaCertRequest $request
     *
     * @return GetCaCertResponse
     */
    public function getCaCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCaCertWithOptions($request, $runtime);
    }

    /**
     * @param GetRegisteredServiceEndpointsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetRegisteredServiceEndpointsResponse
     */
    public function getRegisteredServiceEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $body['ClusterIds'] = $request->clusterIds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $body['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRegisteredServiceEndpoints',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRegisteredServiceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRegisteredServiceEndpointsRequest $request
     *
     * @return GetRegisteredServiceEndpointsResponse
     */
    public function getRegisteredServiceEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegisteredServiceEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param GetRegisteredServiceNamespacesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetRegisteredServiceNamespacesResponse
     */
    public function getRegisteredServiceNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRegisteredServiceNamespaces',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRegisteredServiceNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRegisteredServiceNamespacesRequest $request
     *
     * @return GetRegisteredServiceNamespacesResponse
     */
    public function getRegisteredServiceNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegisteredServiceNamespacesWithOptions($request, $runtime);
    }

    /**
     * @param GetVmAppMeshInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVmAppMeshInfoResponse
     */
    public function getVmAppMeshInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVmAppMeshInfo',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVmAppMeshInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVmAppMeshInfoRequest $request
     *
     * @return GetVmAppMeshInfoResponse
     */
    public function getVmAppMeshInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVmAppMeshInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetVmMetaRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetVmMetaResponse
     */
    public function getVmMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVmMeta',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVmMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVmMetaRequest $request
     *
     * @return GetVmMetaResponse
     */
    public function getVmMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVmMetaWithOptions($request, $runtime);
    }

    /**
     * @param ModifyServiceMeshNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyServiceMeshNameResponse
     */
    public function modifyServiceMeshNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyServiceMeshName',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyServiceMeshNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyServiceMeshNameRequest $request
     *
     * @return ModifyServiceMeshNameResponse
     */
    public function modifyServiceMeshName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyServiceMeshNameWithOptions($request, $runtime);
    }

    /**
     * @param ReActivateAuditRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReActivateAuditResponse
     */
    public function reActivateAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enableAudit)) {
            $body['EnableAudit'] = $request->enableAudit;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReActivateAudit',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReActivateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReActivateAuditRequest $request
     *
     * @return ReActivateAuditResponse
     */
    public function reActivateAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reActivateAuditWithOptions($request, $runtime);
    }

    /**
     * @param RemoveClusterFromServiceMeshRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveClusterFromServiceMeshResponse
     */
    public function removeClusterFromServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveClusterFromServiceMesh',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveClusterFromServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveClusterFromServiceMeshRequest $request
     *
     * @return RemoveClusterFromServiceMeshResponse
     */
    public function removeClusterFromServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClusterFromServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVMFromServiceMeshRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RemoveVMFromServiceMeshResponse
     */
    public function removeVMFromServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ecsId)) {
            $query['EcsId'] = $request->ecsId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveVMFromServiceMesh',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveVMFromServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveVMFromServiceMeshRequest $request
     *
     * @return RemoveVMFromServiceMeshResponse
     */
    public function removeVMFromServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVMFromServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param RevokeKubeconfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RevokeKubeconfigResponse
     */
    public function revokeKubeconfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->privateIpAddress)) {
            $body['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokeKubeconfig',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeKubeconfigRequest $request
     *
     * @return RevokeKubeconfigResponse
     */
    public function revokeKubeconfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeKubeconfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateASMGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateASMGatewayResponse
     */
    public function updateASMGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->istioGatewayName)) {
            $body['IstioGatewayName'] = $request->istioGatewayName;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateASMGateway',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateASMGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateASMGatewayRequest $request
     *
     * @return UpdateASMGatewayResponse
     */
    public function updateASMGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateASMGatewayWithOptions($request, $runtime);
    }

    /**
     * @param UpdateASMGatewayImportedServicesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateASMGatewayImportedServicesResponse
     */
    public function updateASMGatewayImportedServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ASMGatewayName)) {
            $body['ASMGatewayName'] = $request->ASMGatewayName;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->serviceNames)) {
            $body['ServiceNames'] = $request->serviceNames;
        }
        if (!Utils::isUnset($request->serviceNamespace)) {
            $body['ServiceNamespace'] = $request->serviceNamespace;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateASMGatewayImportedServices',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateASMGatewayImportedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateASMGatewayImportedServicesRequest $request
     *
     * @return UpdateASMGatewayImportedServicesResponse
     */
    public function updateASMGatewayImportedServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateASMGatewayImportedServicesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMeshFeatureRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMeshFeatureResponse
     */
    public function updateMeshFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessLogEnabled)) {
            $body['AccessLogEnabled'] = $request->accessLogEnabled;
        }
        if (!Utils::isUnset($request->accessLogFile)) {
            $body['AccessLogFile'] = $request->accessLogFile;
        }
        if (!Utils::isUnset($request->accessLogFormat)) {
            $body['AccessLogFormat'] = $request->accessLogFormat;
        }
        if (!Utils::isUnset($request->accessLogProject)) {
            $body['AccessLogProject'] = $request->accessLogProject;
        }
        if (!Utils::isUnset($request->accessLogServiceEnabled)) {
            $body['AccessLogServiceEnabled'] = $request->accessLogServiceEnabled;
        }
        if (!Utils::isUnset($request->accessLogServiceHost)) {
            $body['AccessLogServiceHost'] = $request->accessLogServiceHost;
        }
        if (!Utils::isUnset($request->accessLogServicePort)) {
            $body['AccessLogServicePort'] = $request->accessLogServicePort;
        }
        if (!Utils::isUnset($request->auditProject)) {
            $body['AuditProject'] = $request->auditProject;
        }
        if (!Utils::isUnset($request->autoInjectionPolicyEnabled)) {
            $body['AutoInjectionPolicyEnabled'] = $request->autoInjectionPolicyEnabled;
        }
        if (!Utils::isUnset($request->CRAggregationEnabled)) {
            $body['CRAggregationEnabled'] = $request->CRAggregationEnabled;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $body['ClusterSpec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->cniEnabled)) {
            $body['CniEnabled'] = $request->cniEnabled;
        }
        if (!Utils::isUnset($request->cniExcludeNamespaces)) {
            $body['CniExcludeNamespaces'] = $request->cniExcludeNamespaces;
        }
        if (!Utils::isUnset($request->configSourceEnabled)) {
            $body['ConfigSourceEnabled'] = $request->configSourceEnabled;
        }
        if (!Utils::isUnset($request->configSourceNacosID)) {
            $body['ConfigSourceNacosID'] = $request->configSourceNacosID;
        }
        if (!Utils::isUnset($request->customizedPrometheus)) {
            $body['CustomizedPrometheus'] = $request->customizedPrometheus;
        }
        if (!Utils::isUnset($request->customizedZipkin)) {
            $body['CustomizedZipkin'] = $request->customizedZipkin;
        }
        if (!Utils::isUnset($request->DNSProxyingEnabled)) {
            $body['DNSProxyingEnabled'] = $request->DNSProxyingEnabled;
        }
        if (!Utils::isUnset($request->discoverySelectors)) {
            $body['DiscoverySelectors'] = $request->discoverySelectors;
        }
        if (!Utils::isUnset($request->dubboFilterEnabled)) {
            $body['DubboFilterEnabled'] = $request->dubboFilterEnabled;
        }
        if (!Utils::isUnset($request->enableAudit)) {
            $body['EnableAudit'] = $request->enableAudit;
        }
        if (!Utils::isUnset($request->enableCRHistory)) {
            $body['EnableCRHistory'] = $request->enableCRHistory;
        }
        if (!Utils::isUnset($request->enableNamespacesByDefault)) {
            $body['EnableNamespacesByDefault'] = $request->enableNamespacesByDefault;
        }
        if (!Utils::isUnset($request->enableSDSServer)) {
            $body['EnableSDSServer'] = $request->enableSDSServer;
        }
        if (!Utils::isUnset($request->excludeIPRanges)) {
            $body['ExcludeIPRanges'] = $request->excludeIPRanges;
        }
        if (!Utils::isUnset($request->excludeInboundPorts)) {
            $body['ExcludeInboundPorts'] = $request->excludeInboundPorts;
        }
        if (!Utils::isUnset($request->excludeOutboundPorts)) {
            $body['ExcludeOutboundPorts'] = $request->excludeOutboundPorts;
        }
        if (!Utils::isUnset($request->filterGatewayClusterConfig)) {
            $body['FilterGatewayClusterConfig'] = $request->filterGatewayClusterConfig;
        }
        if (!Utils::isUnset($request->gatewayAPIEnabled)) {
            $body['GatewayAPIEnabled'] = $request->gatewayAPIEnabled;
        }
        if (!Utils::isUnset($request->globalRateLimitEnabled)) {
            $body['GlobalRateLimitEnabled'] = $request->globalRateLimitEnabled;
        }
        if (!Utils::isUnset($request->http10Enabled)) {
            $body['Http10Enabled'] = $request->http10Enabled;
        }
        if (!Utils::isUnset($request->includeIPRanges)) {
            $body['IncludeIPRanges'] = $request->includeIPRanges;
        }
        if (!Utils::isUnset($request->includeInboundPorts)) {
            $body['IncludeInboundPorts'] = $request->includeInboundPorts;
        }
        if (!Utils::isUnset($request->kialiEnabled)) {
            $body['KialiEnabled'] = $request->kialiEnabled;
        }
        if (!Utils::isUnset($request->lifecycle)) {
            $body['Lifecycle'] = $request->lifecycle;
        }
        if (!Utils::isUnset($request->localityLBConf)) {
            $body['LocalityLBConf'] = $request->localityLBConf;
        }
        if (!Utils::isUnset($request->localityLoadBalancing)) {
            $body['LocalityLoadBalancing'] = $request->localityLoadBalancing;
        }
        if (!Utils::isUnset($request->MSEEnabled)) {
            $body['MSEEnabled'] = $request->MSEEnabled;
        }
        if (!Utils::isUnset($request->multiBufferEnabled)) {
            $body['MultiBufferEnabled'] = $request->multiBufferEnabled;
        }
        if (!Utils::isUnset($request->multiBufferPollDelay)) {
            $body['MultiBufferPollDelay'] = $request->multiBufferPollDelay;
        }
        if (!Utils::isUnset($request->mysqlFilterEnabled)) {
            $body['MysqlFilterEnabled'] = $request->mysqlFilterEnabled;
        }
        if (!Utils::isUnset($request->OPALimitCPU)) {
            $body['OPALimitCPU'] = $request->OPALimitCPU;
        }
        if (!Utils::isUnset($request->OPALimitMemory)) {
            $body['OPALimitMemory'] = $request->OPALimitMemory;
        }
        if (!Utils::isUnset($request->OPALogLevel)) {
            $body['OPALogLevel'] = $request->OPALogLevel;
        }
        if (!Utils::isUnset($request->OPARequestCPU)) {
            $body['OPARequestCPU'] = $request->OPARequestCPU;
        }
        if (!Utils::isUnset($request->OPARequestMemory)) {
            $body['OPARequestMemory'] = $request->OPARequestMemory;
        }
        if (!Utils::isUnset($request->opaEnabled)) {
            $body['OpaEnabled'] = $request->opaEnabled;
        }
        if (!Utils::isUnset($request->openAgentPolicy)) {
            $body['OpenAgentPolicy'] = $request->openAgentPolicy;
        }
        if (!Utils::isUnset($request->outboundTrafficPolicy)) {
            $body['OutboundTrafficPolicy'] = $request->outboundTrafficPolicy;
        }
        if (!Utils::isUnset($request->prometheusUrl)) {
            $body['PrometheusUrl'] = $request->prometheusUrl;
        }
        if (!Utils::isUnset($request->proxyInitCPUResourceLimit)) {
            $body['ProxyInitCPUResourceLimit'] = $request->proxyInitCPUResourceLimit;
        }
        if (!Utils::isUnset($request->proxyInitCPUResourceRequest)) {
            $body['ProxyInitCPUResourceRequest'] = $request->proxyInitCPUResourceRequest;
        }
        if (!Utils::isUnset($request->proxyInitMemoryResourceLimit)) {
            $body['ProxyInitMemoryResourceLimit'] = $request->proxyInitMemoryResourceLimit;
        }
        if (!Utils::isUnset($request->proxyInitMemoryResourceRequest)) {
            $body['ProxyInitMemoryResourceRequest'] = $request->proxyInitMemoryResourceRequest;
        }
        if (!Utils::isUnset($request->proxyLimitCPU)) {
            $body['ProxyLimitCPU'] = $request->proxyLimitCPU;
        }
        if (!Utils::isUnset($request->proxyLimitMemory)) {
            $body['ProxyLimitMemory'] = $request->proxyLimitMemory;
        }
        if (!Utils::isUnset($request->proxyRequestCPU)) {
            $body['ProxyRequestCPU'] = $request->proxyRequestCPU;
        }
        if (!Utils::isUnset($request->proxyRequestMemory)) {
            $body['ProxyRequestMemory'] = $request->proxyRequestMemory;
        }
        if (!Utils::isUnset($request->redisFilterEnabled)) {
            $body['RedisFilterEnabled'] = $request->redisFilterEnabled;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->sidecarInjectorLimitCPU)) {
            $body['SidecarInjectorLimitCPU'] = $request->sidecarInjectorLimitCPU;
        }
        if (!Utils::isUnset($request->sidecarInjectorLimitMemory)) {
            $body['SidecarInjectorLimitMemory'] = $request->sidecarInjectorLimitMemory;
        }
        if (!Utils::isUnset($request->sidecarInjectorRequestCPU)) {
            $body['SidecarInjectorRequestCPU'] = $request->sidecarInjectorRequestCPU;
        }
        if (!Utils::isUnset($request->sidecarInjectorRequestMemory)) {
            $body['SidecarInjectorRequestMemory'] = $request->sidecarInjectorRequestMemory;
        }
        if (!Utils::isUnset($request->sidecarInjectorWebhookAsYaml)) {
            $body['SidecarInjectorWebhookAsYaml'] = $request->sidecarInjectorWebhookAsYaml;
        }
        if (!Utils::isUnset($request->telemetry)) {
            $body['Telemetry'] = $request->telemetry;
        }
        if (!Utils::isUnset($request->terminationDrainDuration)) {
            $body['TerminationDrainDuration'] = $request->terminationDrainDuration;
        }
        if (!Utils::isUnset($request->thriftFilterEnabled)) {
            $body['ThriftFilterEnabled'] = $request->thriftFilterEnabled;
        }
        if (!Utils::isUnset($request->traceSampling)) {
            $body['TraceSampling'] = $request->traceSampling;
        }
        if (!Utils::isUnset($request->tracing)) {
            $body['Tracing'] = $request->tracing;
        }
        if (!Utils::isUnset($request->webAssemblyFilterEnabled)) {
            $body['WebAssemblyFilterEnabled'] = $request->webAssemblyFilterEnabled;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMeshFeature',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMeshFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMeshFeatureRequest $request
     *
     * @return UpdateMeshFeatureResponse
     */
    public function updateMeshFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMeshFeatureWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNamespaceScopeSidecarConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateNamespaceScopeSidecarConfigResponse
     */
    public function updateNamespaceScopeSidecarConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->excludeIPRanges)) {
            $body['ExcludeIPRanges'] = $request->excludeIPRanges;
        }
        if (!Utils::isUnset($request->excludeInboundPorts)) {
            $body['ExcludeInboundPorts'] = $request->excludeInboundPorts;
        }
        if (!Utils::isUnset($request->excludeOutboundPorts)) {
            $body['ExcludeOutboundPorts'] = $request->excludeOutboundPorts;
        }
        if (!Utils::isUnset($request->includeIPRanges)) {
            $body['IncludeIPRanges'] = $request->includeIPRanges;
        }
        if (!Utils::isUnset($request->includeInboundPorts)) {
            $body['IncludeInboundPorts'] = $request->includeInboundPorts;
        }
        if (!Utils::isUnset($request->includeOutboundPorts)) {
            $body['IncludeOutboundPorts'] = $request->includeOutboundPorts;
        }
        if (!Utils::isUnset($request->istioDNSProxyEnabled)) {
            $body['IstioDNSProxyEnabled'] = $request->istioDNSProxyEnabled;
        }
        if (!Utils::isUnset($request->lifecycle)) {
            $body['Lifecycle'] = $request->lifecycle;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->proxyInitCPUResourceLimit)) {
            $body['ProxyInitCPUResourceLimit'] = $request->proxyInitCPUResourceLimit;
        }
        if (!Utils::isUnset($request->proxyInitCPUResourceRequest)) {
            $body['ProxyInitCPUResourceRequest'] = $request->proxyInitCPUResourceRequest;
        }
        if (!Utils::isUnset($request->proxyInitMemoryResourceLimit)) {
            $body['ProxyInitMemoryResourceLimit'] = $request->proxyInitMemoryResourceLimit;
        }
        if (!Utils::isUnset($request->proxyInitMemoryResourceRequest)) {
            $body['ProxyInitMemoryResourceRequest'] = $request->proxyInitMemoryResourceRequest;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->sidecarProxyCPUResourceLimit)) {
            $body['SidecarProxyCPUResourceLimit'] = $request->sidecarProxyCPUResourceLimit;
        }
        if (!Utils::isUnset($request->sidecarProxyCPUResourceRequest)) {
            $body['SidecarProxyCPUResourceRequest'] = $request->sidecarProxyCPUResourceRequest;
        }
        if (!Utils::isUnset($request->sidecarProxyMemoryResourceLimit)) {
            $body['SidecarProxyMemoryResourceLimit'] = $request->sidecarProxyMemoryResourceLimit;
        }
        if (!Utils::isUnset($request->sidecarProxyMemoryResourceRequest)) {
            $body['SidecarProxyMemoryResourceRequest'] = $request->sidecarProxyMemoryResourceRequest;
        }
        if (!Utils::isUnset($request->terminationDrainDuration)) {
            $body['TerminationDrainDuration'] = $request->terminationDrainDuration;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateNamespaceScopeSidecarConfig',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNamespaceScopeSidecarConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNamespaceScopeSidecarConfigRequest $request
     *
     * @return UpdateNamespaceScopeSidecarConfigResponse
     */
    public function updateNamespaceScopeSidecarConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNamespaceScopeSidecarConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeMeshEditionPartiallyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpgradeMeshEditionPartiallyResponse
     */
    public function upgradeMeshEditionPartiallyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ASMGatewayContinue)) {
            $body['ASMGatewayContinue'] = $request->ASMGatewayContinue;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->switchToPro)) {
            $body['SwitchToPro'] = $request->switchToPro;
        }
        if (!Utils::isUnset($request->upgradeGatewayRecords)) {
            $body['UpgradeGatewayRecords'] = $request->upgradeGatewayRecords;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeMeshEditionPartially',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeMeshEditionPartiallyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeMeshEditionPartiallyRequest $request
     *
     * @return UpgradeMeshEditionPartiallyResponse
     */
    public function upgradeMeshEditionPartially($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMeshEditionPartiallyWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeMeshVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradeMeshVersionResponse
     */
    public function upgradeMeshVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeMeshVersion',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeMeshVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeMeshVersionRequest $request
     *
     * @return UpgradeMeshVersionResponse
     */
    public function upgradeMeshVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMeshVersionWithOptions($request, $runtime);
    }
}
