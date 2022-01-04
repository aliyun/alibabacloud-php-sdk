<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddBuiltinEnvoyFilterRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddBuiltinEnvoyFilterResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddMeshTagToEcsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddMeshTagToEcsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddVMIntoServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddVMIntoServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateExtensionProviderRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateExtensionProviderResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteExtensionProviderRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteExtensionProviderResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeAlertActionPoliciesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeAlertActionPoliciesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeAvailableNacosInstancesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeAvailableNacosInstancesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCensRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCensResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterGrafanaRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterGrafanaResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterPrometheusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterPrometheusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeControlPlaneLogAlertRulesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeControlPlaneLogAlertRulesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCrTemplatesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCrTemplatesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeExtensionProviderRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeExtensionProviderResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterNamespacesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterNamespacesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterPodsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterPodsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIngressGatewaysRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIngressGatewaysResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshGatewayPodStatusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshGatewayPodStatusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshGatewaySLBStatusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshGatewaySLBStatusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshKubeconfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshKubeconfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshUpgradeStatusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshUpgradeStatusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshVMsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshVMsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVMsInServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVMsInServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DisableControlPlaneLogAlertRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DisableControlPlaneLogAlertResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\EnableControlPlaneLogAlertRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\EnableControlPlaneLogAlertResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetAutoInjectionLabelSyncStatusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetAutoInjectionLabelSyncStatusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetBuiltinEnvoyFilterCatalogRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetBuiltinEnvoyFilterCatalogResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetBuiltinEnvoyFilterRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetBuiltinEnvoyFilterResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetCaCertRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetCaCertResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetDiagnosisRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetDiagnosisResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetEcsListRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetEcsListResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceNamespacesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceNamespacesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServicesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServicesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSaTokenRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSaTokenResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetServiceMeshSlbRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetServiceMeshSlbResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetServiceRegistrySourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetServiceRegistrySourceResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmAppMeshInfoRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmAppMeshInfoResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\InitializeASMRoleResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListBuiltinEnvoyFilterRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListBuiltinEnvoyFilterResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyBuiltinEnvoyFilterRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyBuiltinEnvoyFilterResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyServiceMeshNameRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyServiceMeshNameResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ReActivateAuditRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ReActivateAuditResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveBuiltinEnvoyFilterRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveBuiltinEnvoyFilterResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveClusterFromServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveClusterFromServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveVMFromServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveVMFromServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RevokeKubeconfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RevokeKubeconfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RunDiagnosisRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RunDiagnosisResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\SetServiceRegistrySourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\SetServiceRegistrySourceResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\SetServiceRegistrySourceShrinkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateControlPlaneLogAlertActionPolicyRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateControlPlaneLogAlertActionPolicyResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateControlPlaneLogConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateControlPlaneLogConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateExtensionProviderRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateExtensionProviderResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioInjectionConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioInjectionConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshFeatureRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshFeatureResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateNamespaceScopeSidecarConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateNamespaceScopeSidecarConfigResponse;
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
     * @param AddBuiltinEnvoyFilterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddBuiltinEnvoyFilterResponse
     */
    public function addBuiltinEnvoyFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->istioVersion)) {
            $body['IstioVersion'] = $request->istioVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddBuiltinEnvoyFilter',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBuiltinEnvoyFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBuiltinEnvoyFilterRequest $request
     *
     * @return AddBuiltinEnvoyFilterResponse
     */
    public function addBuiltinEnvoyFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBuiltinEnvoyFilterWithOptions($request, $runtime);
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
     * @param AddMeshTagToEcsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddMeshTagToEcsResponse
     */
    public function addMeshTagToEcsWithOptions($request, $runtime)
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
            'action'      => 'AddMeshTagToEcs',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMeshTagToEcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMeshTagToEcsRequest $request
     *
     * @return AddMeshTagToEcsResponse
     */
    public function addMeshTagToEcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMeshTagToEcsWithOptions($request, $runtime);
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
     * @param CreateExtensionProviderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateExtensionProviderResponse
     */
    public function createExtensionProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExtensionProvider',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExtensionProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateExtensionProviderRequest $request
     *
     * @return CreateExtensionProviderResponse
     */
    public function createExtensionProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExtensionProviderWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->apiServerPublicEip)) {
            $body['ApiServerPublicEip'] = $request->apiServerPublicEip;
        }
        if (!Utils::isUnset($request->auditProject)) {
            $body['AuditProject'] = $request->auditProject;
        }
        if (!Utils::isUnset($request->CRAggregationEnabled)) {
            $body['CRAggregationEnabled'] = $request->CRAggregationEnabled;
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
     * @param DeleteExtensionProviderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteExtensionProviderResponse
     */
    public function deleteExtensionProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteExtensionProvider',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExtensionProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteExtensionProviderRequest $request
     *
     * @return DeleteExtensionProviderResponse
     */
    public function deleteExtensionProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExtensionProviderWithOptions($request, $runtime);
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
     * @param DescribeAlertActionPoliciesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAlertActionPoliciesResponse
     */
    public function describeAlertActionPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->page)) {
            $body['Page'] = $request->page;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertActionPolicies',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertActionPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertActionPoliciesRequest $request
     *
     * @return DescribeAlertActionPoliciesResponse
     */
    public function describeAlertActionPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertActionPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableNacosInstancesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeAvailableNacosInstancesResponse
     */
    public function describeAvailableNacosInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableNacosInstances',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableNacosInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableNacosInstancesRequest $request
     *
     * @return DescribeAvailableNacosInstancesResponse
     */
    public function describeAvailableNacosInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableNacosInstancesWithOptions($request, $runtime);
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
     * @param DescribeControlPlaneLogAlertRulesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeControlPlaneLogAlertRulesResponse
     */
    public function describeControlPlaneLogAlertRulesWithOptions($request, $runtime)
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
            'action'      => 'DescribeControlPlaneLogAlertRules',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeControlPlaneLogAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeControlPlaneLogAlertRulesRequest $request
     *
     * @return DescribeControlPlaneLogAlertRulesResponse
     */
    public function describeControlPlaneLogAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeControlPlaneLogAlertRulesWithOptions($request, $runtime);
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
     * @param DescribeExtensionProviderRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExtensionProviderResponse
     */
    public function describeExtensionProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeExtensionProvider',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExtensionProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExtensionProviderRequest $request
     *
     * @return DescribeExtensionProviderResponse
     */
    public function describeExtensionProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExtensionProviderWithOptions($request, $runtime);
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
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
     * @param DescribeServiceMeshGatewayPodStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeServiceMeshGatewayPodStatusResponse
     */
    public function describeServiceMeshGatewayPodStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $body = [];
        if (!Utils::isUnset($request->gatewayFullName)) {
            $body['GatewayFullName'] = $request->gatewayFullName;
        }
        if (!Utils::isUnset($request->guestClusterIds)) {
            $body['GuestClusterIds'] = $request->guestClusterIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshGatewayPodStatus',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshGatewayPodStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshGatewayPodStatusRequest $request
     *
     * @return DescribeServiceMeshGatewayPodStatusResponse
     */
    public function describeServiceMeshGatewayPodStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshGatewayPodStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshGatewaySLBStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeServiceMeshGatewaySLBStatusResponse
     */
    public function describeServiceMeshGatewaySLBStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $body = [];
        if (!Utils::isUnset($request->gatewayAddresses)) {
            $body['GatewayAddresses'] = $request->gatewayAddresses;
        }
        if (!Utils::isUnset($request->gatewayFullName)) {
            $body['GatewayFullName'] = $request->gatewayFullName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMeshGatewaySLBStatus',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMeshGatewaySLBStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceMeshGatewaySLBStatusRequest $request
     *
     * @return DescribeServiceMeshGatewaySLBStatusResponse
     */
    public function describeServiceMeshGatewaySLBStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshGatewaySLBStatusWithOptions($request, $runtime);
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
     * @param DisableControlPlaneLogAlertRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DisableControlPlaneLogAlertResponse
     */
    public function disableControlPlaneLogAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableControlPlaneLogAlert',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableControlPlaneLogAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableControlPlaneLogAlertRequest $request
     *
     * @return DisableControlPlaneLogAlertResponse
     */
    public function disableControlPlaneLogAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableControlPlaneLogAlertWithOptions($request, $runtime);
    }

    /**
     * @param EnableControlPlaneLogAlertRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnableControlPlaneLogAlertResponse
     */
    public function enableControlPlaneLogAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actionPolicyId)) {
            $body['ActionPolicyId'] = $request->actionPolicyId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableControlPlaneLogAlert',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableControlPlaneLogAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableControlPlaneLogAlertRequest $request
     *
     * @return EnableControlPlaneLogAlertResponse
     */
    public function enableControlPlaneLogAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableControlPlaneLogAlertWithOptions($request, $runtime);
    }

    /**
     * @param GetAutoInjectionLabelSyncStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetAutoInjectionLabelSyncStatusResponse
     */
    public function getAutoInjectionLabelSyncStatusWithOptions($request, $runtime)
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
            'action'      => 'GetAutoInjectionLabelSyncStatus',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutoInjectionLabelSyncStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAutoInjectionLabelSyncStatusRequest $request
     *
     * @return GetAutoInjectionLabelSyncStatusResponse
     */
    public function getAutoInjectionLabelSyncStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoInjectionLabelSyncStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetBuiltinEnvoyFilterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBuiltinEnvoyFilterResponse
     */
    public function getBuiltinEnvoyFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->istioVersion)) {
            $body['IstioVersion'] = $request->istioVersion;
        }
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
            'action'      => 'GetBuiltinEnvoyFilter',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBuiltinEnvoyFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBuiltinEnvoyFilterRequest $request
     *
     * @return GetBuiltinEnvoyFilterResponse
     */
    public function getBuiltinEnvoyFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBuiltinEnvoyFilterWithOptions($request, $runtime);
    }

    /**
     * @param GetBuiltinEnvoyFilterCatalogRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetBuiltinEnvoyFilterCatalogResponse
     */
    public function getBuiltinEnvoyFilterCatalogWithOptions($request, $runtime)
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
            'action'      => 'GetBuiltinEnvoyFilterCatalog',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBuiltinEnvoyFilterCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBuiltinEnvoyFilterCatalogRequest $request
     *
     * @return GetBuiltinEnvoyFilterCatalogResponse
     */
    public function getBuiltinEnvoyFilterCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBuiltinEnvoyFilterCatalogWithOptions($request, $runtime);
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
     * @param GetDiagnosisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetDiagnosisResponse
     */
    public function getDiagnosisWithOptions($request, $runtime)
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
            'action'      => 'GetDiagnosis',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDiagnosisRequest $request
     *
     * @return GetDiagnosisResponse
     */
    public function getDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiagnosisWithOptions($request, $runtime);
    }

    /**
     * @param GetEcsListRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetEcsListResponse
     */
    public function getEcsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEcsList',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEcsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEcsListRequest $request
     *
     * @return GetEcsListResponse
     */
    public function getEcsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEcsListWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param GetRegisteredServicesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRegisteredServicesResponse
     */
    public function getRegisteredServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $query['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRegisteredServices',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRegisteredServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRegisteredServicesRequest $request
     *
     * @return GetRegisteredServicesResponse
     */
    public function getRegisteredServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegisteredServicesWithOptions($request, $runtime);
    }

    /**
     * @param GetSaTokenRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetSaTokenResponse
     */
    public function getSaTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->needRefresh)) {
            $body['NeedRefresh'] = $request->needRefresh;
        }
        if (!Utils::isUnset($request->serviceAccountName)) {
            $body['ServiceAccountName'] = $request->serviceAccountName;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSaToken',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSaTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSaTokenRequest $request
     *
     * @return GetSaTokenResponse
     */
    public function getSaToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSaTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceMeshSlbRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetServiceMeshSlbResponse
     */
    public function getServiceMeshSlbWithOptions($request, $runtime)
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
            'action'      => 'GetServiceMeshSlb',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceMeshSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceMeshSlbRequest $request
     *
     * @return GetServiceMeshSlbResponse
     */
    public function getServiceMeshSlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceMeshSlbWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceRegistrySourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetServiceRegistrySourceResponse
     */
    public function getServiceRegistrySourceWithOptions($request, $runtime)
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
            'action'      => 'GetServiceRegistrySource',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceRegistrySourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceRegistrySourceRequest $request
     *
     * @return GetServiceRegistrySourceResponse
     */
    public function getServiceRegistrySource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceRegistrySourceWithOptions($request, $runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return InitializeASMRoleResponse
     */
    public function initializeASMRoleWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'InitializeASMRole',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeASMRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return InitializeASMRoleResponse
     */
    public function initializeASMRole()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeASMRoleWithOptions($runtime);
    }

    /**
     * @param ListBuiltinEnvoyFilterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListBuiltinEnvoyFilterResponse
     */
    public function listBuiltinEnvoyFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBuiltinEnvoyFilter',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBuiltinEnvoyFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBuiltinEnvoyFilterRequest $request
     *
     * @return ListBuiltinEnvoyFilterResponse
     */
    public function listBuiltinEnvoyFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBuiltinEnvoyFilterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBuiltinEnvoyFilterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyBuiltinEnvoyFilterResponse
     */
    public function modifyBuiltinEnvoyFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->istioVersion)) {
            $body['IstioVersion'] = $request->istioVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyBuiltinEnvoyFilter',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBuiltinEnvoyFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBuiltinEnvoyFilterRequest $request
     *
     * @return ModifyBuiltinEnvoyFilterResponse
     */
    public function modifyBuiltinEnvoyFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBuiltinEnvoyFilterWithOptions($request, $runtime);
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
     * @param RemoveBuiltinEnvoyFilterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RemoveBuiltinEnvoyFilterResponse
     */
    public function removeBuiltinEnvoyFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->istioVersion)) {
            $body['IstioVersion'] = $request->istioVersion;
        }
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
            'action'      => 'RemoveBuiltinEnvoyFilter',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveBuiltinEnvoyFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveBuiltinEnvoyFilterRequest $request
     *
     * @return RemoveBuiltinEnvoyFilterResponse
     */
    public function removeBuiltinEnvoyFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBuiltinEnvoyFilterWithOptions($request, $runtime);
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
     * @param RunDiagnosisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunDiagnosisResponse
     */
    public function runDiagnosisWithOptions($request, $runtime)
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
            'action'      => 'RunDiagnosis',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunDiagnosisRequest $request
     *
     * @return RunDiagnosisResponse
     */
    public function runDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDiagnosisWithOptions($request, $runtime);
    }

    /**
     * @param SetServiceRegistrySourceRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return SetServiceRegistrySourceResponse
     */
    public function setServiceRegistrySourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetServiceRegistrySourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->configShrink)) {
            $body['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetServiceRegistrySource',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetServiceRegistrySourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetServiceRegistrySourceRequest $request
     *
     * @return SetServiceRegistrySourceResponse
     */
    public function setServiceRegistrySource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setServiceRegistrySourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateControlPlaneLogAlertActionPolicyRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateControlPlaneLogAlertActionPolicyResponse
     */
    public function updateControlPlaneLogAlertActionPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actionPolicyId)) {
            $body['ActionPolicyId'] = $request->actionPolicyId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateControlPlaneLogAlertActionPolicy',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateControlPlaneLogAlertActionPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateControlPlaneLogAlertActionPolicyRequest $request
     *
     * @return UpdateControlPlaneLogAlertActionPolicyResponse
     */
    public function updateControlPlaneLogAlertActionPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateControlPlaneLogAlertActionPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateControlPlaneLogConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateControlPlaneLogConfigResponse
     */
    public function updateControlPlaneLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enabled)) {
            $body['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->project)) {
            $body['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateControlPlaneLogConfig',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateControlPlaneLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateControlPlaneLogConfigRequest $request
     *
     * @return UpdateControlPlaneLogConfigResponse
     */
    public function updateControlPlaneLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateControlPlaneLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateExtensionProviderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateExtensionProviderResponse
     */
    public function updateExtensionProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceMeshId)) {
            $body['ServiceMeshId'] = $request->serviceMeshId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExtensionProvider',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateExtensionProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateExtensionProviderRequest $request
     *
     * @return UpdateExtensionProviderResponse
     */
    public function updateExtensionProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExtensionProviderWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIstioInjectionConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateIstioInjectionConfigResponse
     */
    public function updateIstioInjectionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enableIstioInjection)) {
            $body['EnableIstioInjection'] = $request->enableIstioInjection;
        }
        if (!Utils::isUnset($request->enableSidecarSetInjection)) {
            $body['EnableSidecarSetInjection'] = $request->enableSidecarSetInjection;
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
            'action'      => 'UpdateIstioInjectionConfig',
            'version'     => '2020-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIstioInjectionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIstioInjectionConfigRequest $request
     *
     * @return UpdateIstioInjectionConfigResponse
     */
    public function updateIstioInjectionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIstioInjectionConfigWithOptions($request, $runtime);
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
