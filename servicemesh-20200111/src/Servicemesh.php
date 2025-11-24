<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddVMIntoServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddVMIntoServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateASMGatewayRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateASMGatewayResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateGatewaySecretRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateGatewaySecretResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayDomainsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayDomainsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesShrinkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateSwimLaneGroupRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateSwimLaneGroupResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateSwimLaneRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateSwimLaneResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateWaypointRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateWaypointResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteGatewayRouteRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteGatewayRouteResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteGatewaySecretRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteGatewaySecretResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteIstioGatewayDomainsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteIstioGatewayDomainsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteSwimLaneGroupRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteSwimLaneGroupResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteSwimLaneRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteSwimLaneResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteWaypointRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteWaypointResponse;
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
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeEipResourcesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeEipResourcesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGatewaySecretDetailsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGatewaySecretDetailsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterNamespacesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterNamespacesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterPodsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterPodsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeImportedServicesDetailRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeImportedServicesDetailResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayDomainsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayDomainsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRoutesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRoutesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMeshMultiClusterNetworkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMeshMultiClusterNetworkResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponse;
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
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesRequest;
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
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUserPermissionsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUserPermissionsResponse;
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
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetDeploymentBySelectorRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetDeploymentBySelectorResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetDeploymentBySelectorShrinkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetGrafanaDashboardUrlRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetGrafanaDashboardUrlResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceNamespacesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceNamespacesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneDetailRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneDetailResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneGroupListRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneGroupListResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneListRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneListResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmAppMeshInfoRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmAppMeshInfoResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GrantUserPermissionsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GrantUserPermissionsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GrantUserPermissionsShrinkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListServiceAccountsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListServiceAccountsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListWaypointsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListWaypointsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyApiServerEipResourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyApiServerEipResourceResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyPilotEipResourceRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ModifyPilotEipResourceResponse;
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
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMGatewayImportedServicesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMGatewayImportedServicesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMGatewayRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMGatewayResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMNamespaceFromGuestClusterRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateASMNamespaceFromGuestClusterResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateControlPlaneLogConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateControlPlaneLogConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateGuestClusterConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateGuestClusterConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesShrinkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioInjectionConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioInjectionConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioRouteAdditionalStatusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioRouteAdditionalStatusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshCRAggregationRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshCRAggregationResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshFeatureRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshFeatureResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshMultiClusterNetworkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshMultiClusterNetworkResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshMultiClusterNetworkShrinkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateNamespaceScopeSidecarConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateNamespaceScopeSidecarConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateNamespaceScopeSidecarConfigShrinkRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateSwimLaneGroupRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateSwimLaneGroupResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateSwimLaneRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateSwimLaneResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateWaypointRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateWaypointResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshEditionPartiallyRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshEditionPartiallyResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshVersionRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds a cluster to an ASM instance.
     *
     * @param request - AddClusterIntoServiceMeshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddClusterIntoServiceMeshResponse
     *
     * @param AddClusterIntoServiceMeshRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddClusterIntoServiceMeshResponse
     */
    public function addClusterIntoServiceMeshWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->discoveryOnly) {
            @$body['DiscoveryOnly'] = $request->discoveryOnly;
        }

        if (null !== $request->ignoreNamespaceCheck) {
            @$body['IgnoreNamespaceCheck'] = $request->ignoreNamespaceCheck;
        }

        if (null !== $request->kubeconfig) {
            @$body['Kubeconfig'] = $request->kubeconfig;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddClusterIntoServiceMesh',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddClusterIntoServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a cluster to an ASM instance.
     *
     * @param request - AddClusterIntoServiceMeshRequest
     *
     * @returns AddClusterIntoServiceMeshResponse
     *
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
     * Adds a virtual machine (VM) to a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI AddVMIntoServiceMesh is deprecated
     *
     * @param request - AddVMIntoServiceMeshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddVMIntoServiceMeshResponse
     *
     * @param AddVMIntoServiceMeshRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddVMIntoServiceMeshResponse
     */
    public function addVMIntoServiceMeshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecsId) {
            @$query['EcsId'] = $request->ecsId;
        }

        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddVMIntoServiceMesh',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddVMIntoServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Adds a virtual machine (VM) to a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI AddVMIntoServiceMesh is deprecated
     *
     * @param request - AddVMIntoServiceMeshRequest
     *
     * @returns AddVMIntoServiceMeshResponse
     *
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
     * Creates a Service Mesh (ASM) gateway.
     *
     * @param request - CreateASMGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateASMGatewayResponse
     *
     * @param CreateASMGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateASMGatewayResponse
     */
    public function createASMGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->body) {
            @$body['Body'] = $request->body;
        }

        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateASMGateway',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateASMGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Service Mesh (ASM) gateway.
     *
     * @param request - CreateASMGatewayRequest
     *
     * @returns CreateASMGatewayResponse
     *
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
     * Creates a secret for a Service Mesh (ASM) gateway.
     *
     * @param request - CreateGatewaySecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewaySecretResponse
     *
     * @param CreateGatewaySecretRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateGatewaySecretResponse
     */
    public function createGatewaySecretWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cert) {
            @$body['Cert'] = $request->cert;
        }

        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        if (null !== $request->secretName) {
            @$body['SecretName'] = $request->secretName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGatewaySecret',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGatewaySecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a secret for a Service Mesh (ASM) gateway.
     *
     * @param request - CreateGatewaySecretRequest
     *
     * @returns CreateGatewaySecretResponse
     *
     * @param CreateGatewaySecretRequest $request
     *
     * @return CreateGatewaySecretResponse
     */
    public function createGatewaySecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewaySecretWithOptions($request, $runtime);
    }

    /**
     * Adds domain names for a Service Mesh (ASM) gateway.
     *
     * @param request - CreateIstioGatewayDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIstioGatewayDomainsResponse
     *
     * @param CreateIstioGatewayDomainsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateIstioGatewayDomainsResponse
     */
    public function createIstioGatewayDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->credential) {
            @$body['Credential'] = $request->credential;
        }

        if (null !== $request->forceHttps) {
            @$body['ForceHttps'] = $request->forceHttps;
        }

        if (null !== $request->hosts) {
            @$body['Hosts'] = $request->hosts;
        }

        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->number) {
            @$body['Number'] = $request->number;
        }

        if (null !== $request->portName) {
            @$body['PortName'] = $request->portName;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIstioGatewayDomains',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIstioGatewayDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds domain names for a Service Mesh (ASM) gateway.
     *
     * @param request - CreateIstioGatewayDomainsRequest
     *
     * @returns CreateIstioGatewayDomainsResponse
     *
     * @param CreateIstioGatewayDomainsRequest $request
     *
     * @return CreateIstioGatewayDomainsResponse
     */
    public function createIstioGatewayDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIstioGatewayDomainsWithOptions($request, $runtime);
    }

    /**
     * Creates a routing rule for a Service Mesh (ASM) gateway.
     *
     * @param tmpReq - CreateIstioGatewayRoutesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIstioGatewayRoutesResponse
     *
     * @param CreateIstioGatewayRoutesRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateIstioGatewayRoutesResponse
     */
    public function createIstioGatewayRoutesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateIstioGatewayRoutesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->gatewayRoute) {
            $request->gatewayRouteShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->gatewayRoute, 'GatewayRoute', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->gatewayRouteShrink) {
            @$body['GatewayRoute'] = $request->gatewayRouteShrink;
        }

        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIstioGatewayRoutes',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIstioGatewayRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a routing rule for a Service Mesh (ASM) gateway.
     *
     * @param request - CreateIstioGatewayRoutesRequest
     *
     * @returns CreateIstioGatewayRoutesResponse
     *
     * @param CreateIstioGatewayRoutesRequest $request
     *
     * @return CreateIstioGatewayRoutesResponse
     */
    public function createIstioGatewayRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIstioGatewayRoutesWithOptions($request, $runtime);
    }

    /**
     * Creates a Service Mesh (ASM) instance.
     *
     * @param request - CreateServiceMeshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceMeshResponse
     *
     * @param CreateServiceMeshRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMeshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->accessLogEnabled) {
            @$body['AccessLogEnabled'] = $request->accessLogEnabled;
        }

        if (null !== $request->accessLogFile) {
            @$body['AccessLogFile'] = $request->accessLogFile;
        }

        if (null !== $request->accessLogFormat) {
            @$body['AccessLogFormat'] = $request->accessLogFormat;
        }

        if (null !== $request->accessLogProject) {
            @$body['AccessLogProject'] = $request->accessLogProject;
        }

        if (null !== $request->accessLogServiceEnabled) {
            @$body['AccessLogServiceEnabled'] = $request->accessLogServiceEnabled;
        }

        if (null !== $request->accessLogServiceHost) {
            @$body['AccessLogServiceHost'] = $request->accessLogServiceHost;
        }

        if (null !== $request->accessLogServicePort) {
            @$body['AccessLogServicePort'] = $request->accessLogServicePort;
        }

        if (null !== $request->apiServerLoadBalancerSpec) {
            @$body['ApiServerLoadBalancerSpec'] = $request->apiServerLoadBalancerSpec;
        }

        if (null !== $request->apiServerPublicEip) {
            @$body['ApiServerPublicEip'] = $request->apiServerPublicEip;
        }

        if (null !== $request->auditProject) {
            @$body['AuditProject'] = $request->auditProject;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$body['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->CRAggregationEnabled) {
            @$body['CRAggregationEnabled'] = $request->CRAggregationEnabled;
        }

        if (null !== $request->certChain) {
            @$body['CertChain'] = $request->certChain;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clusterDomain) {
            @$body['ClusterDomain'] = $request->clusterDomain;
        }

        if (null !== $request->clusterSpec) {
            @$body['ClusterSpec'] = $request->clusterSpec;
        }

        if (null !== $request->configSourceEnabled) {
            @$body['ConfigSourceEnabled'] = $request->configSourceEnabled;
        }

        if (null !== $request->configSourceNacosID) {
            @$body['ConfigSourceNacosID'] = $request->configSourceNacosID;
        }

        if (null !== $request->controlPlaneLogEnabled) {
            @$body['ControlPlaneLogEnabled'] = $request->controlPlaneLogEnabled;
        }

        if (null !== $request->controlPlaneLogProject) {
            @$body['ControlPlaneLogProject'] = $request->controlPlaneLogProject;
        }

        if (null !== $request->customizedPrometheus) {
            @$body['CustomizedPrometheus'] = $request->customizedPrometheus;
        }

        if (null !== $request->customizedZipkin) {
            @$body['CustomizedZipkin'] = $request->customizedZipkin;
        }

        if (null !== $request->DNSProxyingEnabled) {
            @$body['DNSProxyingEnabled'] = $request->DNSProxyingEnabled;
        }

        if (null !== $request->dubboFilterEnabled) {
            @$body['DubboFilterEnabled'] = $request->dubboFilterEnabled;
        }

        if (null !== $request->edition) {
            @$body['Edition'] = $request->edition;
        }

        if (null !== $request->enableACMG) {
            @$body['EnableACMG'] = $request->enableACMG;
        }

        if (null !== $request->enableAmbient) {
            @$body['EnableAmbient'] = $request->enableAmbient;
        }

        if (null !== $request->enableAudit) {
            @$body['EnableAudit'] = $request->enableAudit;
        }

        if (null !== $request->enableCRHistory) {
            @$body['EnableCRHistory'] = $request->enableCRHistory;
        }

        if (null !== $request->enableSDSServer) {
            @$body['EnableSDSServer'] = $request->enableSDSServer;
        }

        if (null !== $request->excludeIPRanges) {
            @$body['ExcludeIPRanges'] = $request->excludeIPRanges;
        }

        if (null !== $request->excludeInboundPorts) {
            @$body['ExcludeInboundPorts'] = $request->excludeInboundPorts;
        }

        if (null !== $request->excludeOutboundPorts) {
            @$body['ExcludeOutboundPorts'] = $request->excludeOutboundPorts;
        }

        if (null !== $request->existingCaCert) {
            @$body['ExistingCaCert'] = $request->existingCaCert;
        }

        if (null !== $request->existingCaKey) {
            @$body['ExistingCaKey'] = $request->existingCaKey;
        }

        if (null !== $request->existingCaType) {
            @$body['ExistingCaType'] = $request->existingCaType;
        }

        if (null !== $request->existingRootCaCert) {
            @$body['ExistingRootCaCert'] = $request->existingRootCaCert;
        }

        if (null !== $request->existingRootCaKey) {
            @$body['ExistingRootCaKey'] = $request->existingRootCaKey;
        }

        if (null !== $request->filterGatewayClusterConfig) {
            @$body['FilterGatewayClusterConfig'] = $request->filterGatewayClusterConfig;
        }

        if (null !== $request->gatewayAPIEnabled) {
            @$body['GatewayAPIEnabled'] = $request->gatewayAPIEnabled;
        }

        if (null !== $request->guestCluster) {
            @$body['GuestCluster'] = $request->guestCluster;
        }

        if (null !== $request->includeIPRanges) {
            @$body['IncludeIPRanges'] = $request->includeIPRanges;
        }

        if (null !== $request->istioVersion) {
            @$body['IstioVersion'] = $request->istioVersion;
        }

        if (null !== $request->kialiEnabled) {
            @$body['KialiEnabled'] = $request->kialiEnabled;
        }

        if (null !== $request->localityLBConf) {
            @$body['LocalityLBConf'] = $request->localityLBConf;
        }

        if (null !== $request->localityLoadBalancing) {
            @$body['LocalityLoadBalancing'] = $request->localityLoadBalancing;
        }

        if (null !== $request->MSEEnabled) {
            @$body['MSEEnabled'] = $request->MSEEnabled;
        }

        if (null !== $request->multiBufferEnabled) {
            @$body['MultiBufferEnabled'] = $request->multiBufferEnabled;
        }

        if (null !== $request->multiBufferPollDelay) {
            @$body['MultiBufferPollDelay'] = $request->multiBufferPollDelay;
        }

        if (null !== $request->mysqlFilterEnabled) {
            @$body['MysqlFilterEnabled'] = $request->mysqlFilterEnabled;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->OPALimitCPU) {
            @$body['OPALimitCPU'] = $request->OPALimitCPU;
        }

        if (null !== $request->OPALimitMemory) {
            @$body['OPALimitMemory'] = $request->OPALimitMemory;
        }

        if (null !== $request->OPALogLevel) {
            @$body['OPALogLevel'] = $request->OPALogLevel;
        }

        if (null !== $request->OPARequestCPU) {
            @$body['OPARequestCPU'] = $request->OPARequestCPU;
        }

        if (null !== $request->OPARequestMemory) {
            @$body['OPARequestMemory'] = $request->OPARequestMemory;
        }

        if (null !== $request->opaEnabled) {
            @$body['OpaEnabled'] = $request->opaEnabled;
        }

        if (null !== $request->openAgentPolicy) {
            @$body['OpenAgentPolicy'] = $request->openAgentPolicy;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->pilotLoadBalancerSpec) {
            @$body['PilotLoadBalancerSpec'] = $request->pilotLoadBalancerSpec;
        }

        if (null !== $request->playgroundScene) {
            @$body['PlaygroundScene'] = $request->playgroundScene;
        }

        if (null !== $request->prometheusUrl) {
            @$body['PrometheusUrl'] = $request->prometheusUrl;
        }

        if (null !== $request->proxyLimitCPU) {
            @$body['ProxyLimitCPU'] = $request->proxyLimitCPU;
        }

        if (null !== $request->proxyLimitMemory) {
            @$body['ProxyLimitMemory'] = $request->proxyLimitMemory;
        }

        if (null !== $request->proxyRequestCPU) {
            @$body['ProxyRequestCPU'] = $request->proxyRequestCPU;
        }

        if (null !== $request->proxyRequestMemory) {
            @$body['ProxyRequestMemory'] = $request->proxyRequestMemory;
        }

        if (null !== $request->redisFilterEnabled) {
            @$body['RedisFilterEnabled'] = $request->redisFilterEnabled;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->telemetry) {
            @$body['Telemetry'] = $request->telemetry;
        }

        if (null !== $request->thriftFilterEnabled) {
            @$body['ThriftFilterEnabled'] = $request->thriftFilterEnabled;
        }

        if (null !== $request->traceSampling) {
            @$body['TraceSampling'] = $request->traceSampling;
        }

        if (null !== $request->tracing) {
            @$body['Tracing'] = $request->tracing;
        }

        if (null !== $request->useExistingCA) {
            @$body['UseExistingCA'] = $request->useExistingCA;
        }

        if (null !== $request->vSwitches) {
            @$body['VSwitches'] = $request->vSwitches;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->webAssemblyFilterEnabled) {
            @$body['WebAssemblyFilterEnabled'] = $request->webAssemblyFilterEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceMesh',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Service Mesh (ASM) instance.
     *
     * @param request - CreateServiceMeshRequest
     *
     * @returns CreateServiceMeshResponse
     *
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
     * Creates a lane.
     *
     * @param request - CreateSwimLaneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSwimLaneResponse
     *
     * @param CreateSwimLaneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSwimLaneResponse
     */
    public function createSwimLaneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->labelSelectorKey) {
            @$body['LabelSelectorKey'] = $request->labelSelectorKey;
        }

        if (null !== $request->labelSelectorValue) {
            @$body['LabelSelectorValue'] = $request->labelSelectorValue;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->servicesList) {
            @$body['ServicesList'] = $request->servicesList;
        }

        if (null !== $request->swimLaneName) {
            @$body['SwimLaneName'] = $request->swimLaneName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSwimLane',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSwimLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a lane.
     *
     * @param request - CreateSwimLaneRequest
     *
     * @returns CreateSwimLaneResponse
     *
     * @param CreateSwimLaneRequest $request
     *
     * @return CreateSwimLaneResponse
     */
    public function createSwimLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSwimLaneWithOptions($request, $runtime);
    }

    /**
     * Creates a lane group.
     *
     * @param request - CreateSwimLaneGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSwimLaneGroupResponse
     *
     * @param CreateSwimLaneGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSwimLaneGroupResponse
     */
    public function createSwimLaneGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->ingressGatewayName) {
            @$body['IngressGatewayName'] = $request->ingressGatewayName;
        }

        if (null !== $request->ingressGatewayNamespace) {
            @$body['IngressGatewayNamespace'] = $request->ingressGatewayNamespace;
        }

        if (null !== $request->ingressType) {
            @$body['IngressType'] = $request->ingressType;
        }

        if (null !== $request->isPermissive) {
            @$body['IsPermissive'] = $request->isPermissive;
        }

        if (null !== $request->routeHeader) {
            @$body['RouteHeader'] = $request->routeHeader;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->servicesList) {
            @$body['ServicesList'] = $request->servicesList;
        }

        if (null !== $request->traceHeader) {
            @$body['TraceHeader'] = $request->traceHeader;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSwimLaneGroup',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSwimLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a lane group.
     *
     * @param request - CreateSwimLaneGroupRequest
     *
     * @returns CreateSwimLaneGroupResponse
     *
     * @param CreateSwimLaneGroupRequest $request
     *
     * @return CreateSwimLaneGroupResponse
     */
    public function createSwimLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSwimLaneGroupWithOptions($request, $runtime);
    }

    /**
     * 创建Waypoint.
     *
     * @param request - CreateWaypointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWaypointResponse
     *
     * @param CreateWaypointRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateWaypointResponse
     */
    public function createWaypointWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->HPAEnabled) {
            @$body['HPAEnabled'] = $request->HPAEnabled;
        }

        if (null !== $request->HPAMaxReplicas) {
            @$body['HPAMaxReplicas'] = $request->HPAMaxReplicas;
        }

        if (null !== $request->HPAMinReplicas) {
            @$body['HPAMinReplicas'] = $request->HPAMinReplicas;
        }

        if (null !== $request->HPATargetCPU) {
            @$body['HPATargetCPU'] = $request->HPATargetCPU;
        }

        if (null !== $request->HPATargetMemory) {
            @$body['HPATargetMemory'] = $request->HPATargetMemory;
        }

        if (null !== $request->limitCPU) {
            @$body['LimitCPU'] = $request->limitCPU;
        }

        if (null !== $request->limitMemory) {
            @$body['LimitMemory'] = $request->limitMemory;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->preferECI) {
            @$body['PreferECI'] = $request->preferECI;
        }

        if (null !== $request->replicas) {
            @$body['Replicas'] = $request->replicas;
        }

        if (null !== $request->requestCPU) {
            @$body['RequestCPU'] = $request->requestCPU;
        }

        if (null !== $request->requestMemory) {
            @$body['RequestMemory'] = $request->requestMemory;
        }

        if (null !== $request->serviceAccount) {
            @$body['ServiceAccount'] = $request->serviceAccount;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWaypoint',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWaypointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Waypoint.
     *
     * @param request - CreateWaypointRequest
     *
     * @returns CreateWaypointResponse
     *
     * @param CreateWaypointRequest $request
     *
     * @return CreateWaypointResponse
     */
    public function createWaypoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWaypointWithOptions($request, $runtime);
    }

    /**
     * Deletes a routing rule for a Service Mesh (ASM) gateway.
     *
     * @param request - DeleteGatewayRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayRouteResponse
     *
     * @param DeleteGatewayRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteGatewayRouteResponse
     */
    public function deleteGatewayRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->routeName) {
            @$body['RouteName'] = $request->routeName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayRoute',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a routing rule for a Service Mesh (ASM) gateway.
     *
     * @param request - DeleteGatewayRouteRequest
     *
     * @returns DeleteGatewayRouteResponse
     *
     * @param DeleteGatewayRouteRequest $request
     *
     * @return DeleteGatewayRouteResponse
     */
    public function deleteGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * Deletes a secret for a Service Mesh (ASM) gateway.
     *
     * @param request - DeleteGatewaySecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewaySecretResponse
     *
     * @param DeleteGatewaySecretRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteGatewaySecretResponse
     */
    public function deleteGatewaySecretWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->secretName) {
            @$body['SecretName'] = $request->secretName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewaySecret',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGatewaySecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a secret for a Service Mesh (ASM) gateway.
     *
     * @param request - DeleteGatewaySecretRequest
     *
     * @returns DeleteGatewaySecretResponse
     *
     * @param DeleteGatewaySecretRequest $request
     *
     * @return DeleteGatewaySecretResponse
     */
    public function deleteGatewaySecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewaySecretWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more domain names for a Service Mesh (ASM) gateway.
     *
     * @param request - DeleteIstioGatewayDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIstioGatewayDomainsResponse
     *
     * @param DeleteIstioGatewayDomainsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteIstioGatewayDomainsResponse
     */
    public function deleteIstioGatewayDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->hosts) {
            @$body['Hosts'] = $request->hosts;
        }

        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->portName) {
            @$body['PortName'] = $request->portName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteIstioGatewayDomains',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIstioGatewayDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more domain names for a Service Mesh (ASM) gateway.
     *
     * @param request - DeleteIstioGatewayDomainsRequest
     *
     * @returns DeleteIstioGatewayDomainsResponse
     *
     * @param DeleteIstioGatewayDomainsRequest $request
     *
     * @return DeleteIstioGatewayDomainsResponse
     */
    public function deleteIstioGatewayDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIstioGatewayDomainsWithOptions($request, $runtime);
    }

    /**
     * Deletes a Service Mesh (ASM) instance.
     *
     * @param request - DeleteServiceMeshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceMeshResponse
     *
     * @param DeleteServiceMeshRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteServiceMeshResponse
     */
    public function deleteServiceMeshWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->retainResources) {
            @$body['RetainResources'] = $request->retainResources;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceMesh',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Service Mesh (ASM) instance.
     *
     * @param request - DeleteServiceMeshRequest
     *
     * @returns DeleteServiceMeshResponse
     *
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
     * Deletes a lane.
     *
     * @param request - DeleteSwimLaneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSwimLaneResponse
     *
     * @param DeleteSwimLaneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSwimLaneResponse
     */
    public function deleteSwimLaneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->swimLaneName) {
            @$body['SwimLaneName'] = $request->swimLaneName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSwimLane',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSwimLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a lane.
     *
     * @param request - DeleteSwimLaneRequest
     *
     * @returns DeleteSwimLaneResponse
     *
     * @param DeleteSwimLaneRequest $request
     *
     * @return DeleteSwimLaneResponse
     */
    public function deleteSwimLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSwimLaneWithOptions($request, $runtime);
    }

    /**
     * Deletes a lane group. If a lane group is deleted, the lanes in the group and the traffic routing rules attached to the lanes are deleted.
     *
     * @param request - DeleteSwimLaneGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSwimLaneGroupResponse
     *
     * @param DeleteSwimLaneGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSwimLaneGroupResponse
     */
    public function deleteSwimLaneGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSwimLaneGroup',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSwimLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a lane group. If a lane group is deleted, the lanes in the group and the traffic routing rules attached to the lanes are deleted.
     *
     * @param request - DeleteSwimLaneGroupRequest
     *
     * @returns DeleteSwimLaneGroupResponse
     *
     * @param DeleteSwimLaneGroupRequest $request
     *
     * @return DeleteSwimLaneGroupResponse
     */
    public function deleteSwimLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSwimLaneGroupWithOptions($request, $runtime);
    }

    /**
     * 删除Waypoint资源.
     *
     * @param request - DeleteWaypointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWaypointResponse
     *
     * @param DeleteWaypointRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteWaypointResponse
     */
    public function deleteWaypointWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWaypoint',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWaypointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Waypoint资源.
     *
     * @param request - DeleteWaypointRequest
     *
     * @returns DeleteWaypointResponse
     *
     * @param DeleteWaypointRequest $request
     *
     * @return DeleteWaypointResponse
     */
    public function deleteWaypoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaypointWithOptions($request, $runtime);
    }

    /**
     * Queries the information about imported services on a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeASMGatewayImportedServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeASMGatewayImportedServicesResponse
     *
     * @param DescribeASMGatewayImportedServicesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeASMGatewayImportedServicesResponse
     */
    public function describeASMGatewayImportedServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ASMGatewayName) {
            @$body['ASMGatewayName'] = $request->ASMGatewayName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->serviceNamespace) {
            @$body['ServiceNamespace'] = $request->serviceNamespace;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeASMGatewayImportedServices',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeASMGatewayImportedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about imported services on a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeASMGatewayImportedServicesRequest
     *
     * @returns DescribeASMGatewayImportedServicesResponse
     *
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
     * Queries the versions of the Cloud Controller Manager (CCM) component.
     *
     * @param request - DescribeCCMVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCCMVersionResponse
     *
     * @param DescribeCCMVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCCMVersionResponse
     */
    public function describeCCMVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCCMVersion',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCCMVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the versions of the Cloud Controller Manager (CCM) component.
     *
     * @param request - DescribeCCMVersionRequest
     *
     * @returns DescribeCCMVersionResponse
     *
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
     * Queries the network connectivity between clusters that are deployed across virtual private clouds (VPCs) in a Service Mesh (ASM) instance.
     *
     * @param request - DescribeCensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCensResponse
     *
     * @param DescribeCensRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeCensResponse
     */
    public function describeCensWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCens',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network connectivity between clusters that are deployed across virtual private clouds (VPCs) in a Service Mesh (ASM) instance.
     *
     * @param request - DescribeCensRequest
     *
     * @returns DescribeCensResponse
     *
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
     * Queries the information about Grafana dashboards of a cluster in a Service Mesh (ASM) instance.
     *
     * @param request - DescribeClusterGrafanaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterGrafanaResponse
     *
     * @param DescribeClusterGrafanaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterGrafanaResponse
     */
    public function describeClusterGrafanaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->k8sClusterId) {
            @$query['K8sClusterId'] = $request->k8sClusterId;
        }

        if (null !== $request->reAddPrometheusIntegration) {
            @$query['ReAddPrometheusIntegration'] = $request->reAddPrometheusIntegration;
        }

        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterGrafana',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterGrafanaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about Grafana dashboards of a cluster in a Service Mesh (ASM) instance.
     *
     * @param request - DescribeClusterGrafanaRequest
     *
     * @returns DescribeClusterGrafanaResponse
     *
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
     * Queries the public endpoint of the Prometheus service that is used to monitor a cluster in an Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @param request - DescribeClusterPrometheusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterPrometheusResponse
     *
     * @param DescribeClusterPrometheusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterPrometheusResponse
     */
    public function describeClusterPrometheusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->k8sClusterId) {
            @$query['K8sClusterId'] = $request->k8sClusterId;
        }

        if (null !== $request->k8sClusterRegionId) {
            @$query['K8sClusterRegionId'] = $request->k8sClusterRegionId;
        }

        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterPrometheus',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterPrometheusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the public endpoint of the Prometheus service that is used to monitor a cluster in an Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @param request - DescribeClusterPrometheusRequest
     *
     * @returns DescribeClusterPrometheusResponse
     *
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
     * Queries the information about clusters in a Service Mesh (ASM) instance.
     *
     * @param request - DescribeClustersInServiceMeshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClustersInServiceMeshResponse
     *
     * @param DescribeClustersInServiceMeshRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClustersInServiceMeshResponse
     */
    public function describeClustersInServiceMeshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClustersInServiceMesh',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClustersInServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about clusters in a Service Mesh (ASM) instance.
     *
     * @param request - DescribeClustersInServiceMeshRequest
     *
     * @returns DescribeClustersInServiceMeshResponse
     *
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
     * Queries the common YAML templates of Istio resources used by Service Mesh (ASM) instances.
     *
     * @param request - DescribeCrTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCrTemplatesResponse
     *
     * @param DescribeCrTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCrTemplatesResponse
     */
    public function describeCrTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->istioVersion) {
            @$body['IstioVersion'] = $request->istioVersion;
        }

        if (null !== $request->kind) {
            @$body['Kind'] = $request->kind;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCrTemplates',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCrTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the common YAML templates of Istio resources used by Service Mesh (ASM) instances.
     *
     * @param request - DescribeCrTemplatesRequest
     *
     * @returns DescribeCrTemplatesResponse
     *
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
     * DescribeEipResources.
     *
     * @param request - DescribeEipResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEipResourcesResponse
     *
     * @param DescribeEipResourcesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEipResourcesResponse
     */
    public function describeEipResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeEipResources',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEipResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeEipResources.
     *
     * @param request - DescribeEipResourcesRequest
     *
     * @returns DescribeEipResourcesResponse
     *
     * @param DescribeEipResourcesRequest $request
     *
     * @return DescribeEipResourcesResponse
     */
    public function describeEipResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed information about a secret of a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeGatewaySecretDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGatewaySecretDetailsResponse
     *
     * @param DescribeGatewaySecretDetailsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeGatewaySecretDetailsResponse
     */
    public function describeGatewaySecretDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeGatewaySecretDetails',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGatewaySecretDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a secret of a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeGatewaySecretDetailsRequest
     *
     * @returns DescribeGatewaySecretDetailsResponse
     *
     * @param DescribeGatewaySecretDetailsRequest $request
     *
     * @return DescribeGatewaySecretDetailsResponse
     */
    public function describeGatewaySecretDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewaySecretDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the access log dashboards of a cluster on the data plane.
     *
     * @param request - DescribeGuestClusterAccessLogDashboardsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGuestClusterAccessLogDashboardsResponse
     *
     * @param DescribeGuestClusterAccessLogDashboardsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeGuestClusterAccessLogDashboardsResponse
     */
    public function describeGuestClusterAccessLogDashboardsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->k8sClusterId) {
            @$body['K8sClusterId'] = $request->k8sClusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeGuestClusterAccessLogDashboards',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGuestClusterAccessLogDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access log dashboards of a cluster on the data plane.
     *
     * @param request - DescribeGuestClusterAccessLogDashboardsRequest
     *
     * @returns DescribeGuestClusterAccessLogDashboardsResponse
     *
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
     * Queries a list of the namespaces of a Kubernetes cluster that is added to a Service Mesh (ASM) instance.
     *
     * @param request - DescribeGuestClusterNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGuestClusterNamespacesResponse
     *
     * @param DescribeGuestClusterNamespacesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGuestClusterNamespacesResponse
     */
    public function describeGuestClusterNamespacesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->guestClusterID) {
            @$body['GuestClusterID'] = $request->guestClusterID;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->showNsLabels) {
            @$body['ShowNsLabels'] = $request->showNsLabels;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeGuestClusterNamespaces',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGuestClusterNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of the namespaces of a Kubernetes cluster that is added to a Service Mesh (ASM) instance.
     *
     * @param request - DescribeGuestClusterNamespacesRequest
     *
     * @returns DescribeGuestClusterNamespacesResponse
     *
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
     * Queries a list of the pods in a specified namespace of a Kubernetes cluster that is added to a Service Mesh (ASM) instance.
     *
     * @param request - DescribeGuestClusterPodsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGuestClusterPodsResponse
     *
     * @param DescribeGuestClusterPodsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGuestClusterPodsResponse
     */
    public function describeGuestClusterPodsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->guestClusterID) {
            @$body['GuestClusterID'] = $request->guestClusterID;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeGuestClusterPods',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGuestClusterPodsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of the pods in a specified namespace of a Kubernetes cluster that is added to a Service Mesh (ASM) instance.
     *
     * @param request - DescribeGuestClusterPodsRequest
     *
     * @returns DescribeGuestClusterPodsResponse
     *
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
     * Queries the details of the imported services on a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeImportedServicesDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImportedServicesDetailResponse
     *
     * @param DescribeImportedServicesDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeImportedServicesDetailResponse
     */
    public function describeImportedServicesDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ASMGatewayName) {
            @$body['ASMGatewayName'] = $request->ASMGatewayName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->serviceNamespace) {
            @$body['ServiceNamespace'] = $request->serviceNamespace;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeImportedServicesDetail',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImportedServicesDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the imported services on a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeImportedServicesDetailRequest
     *
     * @returns DescribeImportedServicesDetailResponse
     *
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
     * Queries a list of the domain names that are exposed by a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeIstioGatewayDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIstioGatewayDomainsResponse
     *
     * @param DescribeIstioGatewayDomainsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeIstioGatewayDomainsResponse
     */
    public function describeIstioGatewayDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeIstioGatewayDomains',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIstioGatewayDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of the domain names that are exposed by a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeIstioGatewayDomainsRequest
     *
     * @returns DescribeIstioGatewayDomainsResponse
     *
     * @param DescribeIstioGatewayDomainsRequest $request
     *
     * @return DescribeIstioGatewayDomainsResponse
     */
    public function describeIstioGatewayDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIstioGatewayDomainsWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed information about a routing rule of an Alibaba Cloud Service Mesh (ASM) gateway.
     *
     * @param request - DescribeIstioGatewayRouteDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIstioGatewayRouteDetailResponse
     *
     * @param DescribeIstioGatewayRouteDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeIstioGatewayRouteDetailResponse
     */
    public function describeIstioGatewayRouteDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->routeName) {
            @$body['RouteName'] = $request->routeName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeIstioGatewayRouteDetail',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIstioGatewayRouteDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a routing rule of an Alibaba Cloud Service Mesh (ASM) gateway.
     *
     * @param request - DescribeIstioGatewayRouteDetailRequest
     *
     * @returns DescribeIstioGatewayRouteDetailResponse
     *
     * @param DescribeIstioGatewayRouteDetailRequest $request
     *
     * @return DescribeIstioGatewayRouteDetailResponse
     */
    public function describeIstioGatewayRouteDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIstioGatewayRouteDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the routing rules for a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeIstioGatewayRoutesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIstioGatewayRoutesResponse
     *
     * @param DescribeIstioGatewayRoutesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeIstioGatewayRoutesResponse
     */
    public function describeIstioGatewayRoutesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeIstioGatewayRoutes',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIstioGatewayRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the routing rules for a Service Mesh (ASM) gateway.
     *
     * @param request - DescribeIstioGatewayRoutesRequest
     *
     * @returns DescribeIstioGatewayRoutesResponse
     *
     * @param DescribeIstioGatewayRoutesRequest $request
     *
     * @return DescribeIstioGatewayRoutesResponse
     */
    public function describeIstioGatewayRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIstioGatewayRoutesWithOptions($request, $runtime);
    }

    /**
     * 获取ASM网格网络分区设置.
     *
     * @param request - DescribeMeshMultiClusterNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMeshMultiClusterNetworkResponse
     *
     * @param DescribeMeshMultiClusterNetworkRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMeshMultiClusterNetworkResponse
     */
    public function describeMeshMultiClusterNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeMeshMultiClusterNetwork',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMeshMultiClusterNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取ASM网格网络分区设置.
     *
     * @param request - DescribeMeshMultiClusterNetworkRequest
     *
     * @returns DescribeMeshMultiClusterNetworkResponse
     *
     * @param DescribeMeshMultiClusterNetworkRequest $request
     *
     * @return DescribeMeshMultiClusterNetworkResponse
     */
    public function describeMeshMultiClusterNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeshMultiClusterNetworkWithOptions($request, $runtime);
    }

    /**
     * Queries basic information about a Service Mesh (ASM) instance.
     *
     * @param request - DescribeMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetadataResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMetadataResponse
     */
    public function describeMetadataWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeMetadata',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries basic information about a Service Mesh (ASM) instance.
     *
     * @returns DescribeMetadataResponse
     *
     * @return DescribeMetadataResponse
     */
    public function describeMetadata()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetadataWithOptions($runtime);
    }

    /**
     * Queries the configurations of sidecar proxies at the namespace level.
     *
     * @param request - DescribeNamespaceScopeSidecarConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNamespaceScopeSidecarConfigResponse
     *
     * @param DescribeNamespaceScopeSidecarConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeNamespaceScopeSidecarConfigResponse
     */
    public function describeNamespaceScopeSidecarConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeNamespaceScopeSidecarConfig',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNamespaceScopeSidecarConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of sidecar proxies at the namespace level.
     *
     * @param request - DescribeNamespaceScopeSidecarConfigRequest
     *
     * @returns DescribeNamespaceScopeSidecarConfigResponse
     *
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
     * Queries the instance types of nodes on the data plane and whether the instance types support Multi-Buffer acceleration.
     *
     * @param request - DescribeNodesInstanceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodesInstanceTypeResponse
     *
     * @param DescribeNodesInstanceTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNodesInstanceTypeResponse
     */
    public function describeNodesInstanceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeNodesInstanceType',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNodesInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instance types of nodes on the data plane and whether the instance types support Multi-Buffer acceleration.
     *
     * @param request - DescribeNodesInstanceTypeRequest
     *
     * @returns DescribeNodesInstanceTypeResponse
     *
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
     * Queries the Server Load Balancer (SLB) instances that can be reused.
     *
     * @param request - DescribeReusableSlbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeReusableSlbResponse
     *
     * @param DescribeReusableSlbRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeReusableSlbResponse
     */
    public function describeReusableSlbWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->k8sClusterId) {
            @$body['K8sClusterId'] = $request->k8sClusterId;
        }

        if (null !== $request->lbType) {
            @$body['LbType'] = $request->lbType;
        }

        if (null !== $request->networkType) {
            @$body['NetworkType'] = $request->networkType;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeReusableSlb',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeReusableSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Server Load Balancer (SLB) instances that can be reused.
     *
     * @param request - DescribeReusableSlbRequest
     *
     * @returns DescribeReusableSlbResponse
     *
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
     * Queries the check results of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshAdditionalStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshAdditionalStatusResponse
     *
     * @param DescribeServiceMeshAdditionalStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeServiceMeshAdditionalStatusResponse
     */
    public function describeServiceMeshAdditionalStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->checkMode) {
            @$body['CheckMode'] = $request->checkMode;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshAdditionalStatus',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshAdditionalStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the check results of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshAdditionalStatusRequest
     *
     * @returns DescribeServiceMeshAdditionalStatusResponse
     *
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
     * Queries the clusters that can be added to a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshClustersResponse
     *
     * @param DescribeServiceMeshClustersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeServiceMeshClustersResponse
     */
    public function describeServiceMeshClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $body = [];
        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->offset) {
            @$body['Offset'] = $request->offset;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshClusters',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the clusters that can be added to a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshClustersRequest
     *
     * @returns DescribeServiceMeshClustersResponse
     *
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
     * Queries the details of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshDetailResponse
     *
     * @param DescribeServiceMeshDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeServiceMeshDetailResponse
     */
    public function describeServiceMeshDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshDetail',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshDetailRequest
     *
     * @returns DescribeServiceMeshDetailResponse
     *
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
     * Queries the content of the kubeconfig file of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshKubeconfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshKubeconfigResponse
     *
     * @param DescribeServiceMeshKubeconfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeServiceMeshKubeconfigResponse
     */
    public function describeServiceMeshKubeconfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshKubeconfig',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the content of the kubeconfig file of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshKubeconfigRequest
     *
     * @returns DescribeServiceMeshKubeconfigResponse
     *
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
     * Queries the logs of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshLogsResponse
     *
     * @param DescribeServiceMeshLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeServiceMeshLogsResponse
     */
    public function describeServiceMeshLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshLogs',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshLogsRequest
     *
     * @returns DescribeServiceMeshLogsResponse
     *
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
     * Queries the status of proxies on the data plane of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshProxyStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshProxyStatusResponse
     *
     * @param DescribeServiceMeshProxyStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeServiceMeshProxyStatusResponse
     */
    public function describeServiceMeshProxyStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshProxyStatus',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshProxyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of proxies on the data plane of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeServiceMeshProxyStatusRequest
     *
     * @returns DescribeServiceMeshProxyStatusResponse
     *
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
     * Queries the upgrade details of a Service Mesh (ASM) instance and its ingress gateways.
     *
     * @param request - DescribeServiceMeshUpgradeStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshUpgradeStatusResponse
     *
     * @param DescribeServiceMeshUpgradeStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeServiceMeshUpgradeStatusResponse
     */
    public function describeServiceMeshUpgradeStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $body = [];
        if (null !== $request->allIstioGatewayFullNames) {
            @$body['AllIstioGatewayFullNames'] = $request->allIstioGatewayFullNames;
        }

        if (null !== $request->guestClusterIds) {
            @$body['GuestClusterIds'] = $request->guestClusterIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshUpgradeStatus',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the upgrade details of a Service Mesh (ASM) instance and its ingress gateways.
     *
     * @param request - DescribeServiceMeshUpgradeStatusRequest
     *
     * @returns DescribeServiceMeshUpgradeStatusResponse
     *
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
     * Queries the Elastic Compute Service (ECS) instances that reside in the same virtual private cloud (VPC) as a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI DescribeServiceMeshVMs is deprecated
     *
     * @param request - DescribeServiceMeshVMsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshVMsResponse
     *
     * @param DescribeServiceMeshVMsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeServiceMeshVMsResponse
     */
    public function describeServiceMeshVMsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshVMs',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshVMsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the Elastic Compute Service (ECS) instances that reside in the same virtual private cloud (VPC) as a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI DescribeServiceMeshVMs is deprecated
     *
     * @param request - DescribeServiceMeshVMsRequest
     *
     * @returns DescribeServiceMeshVMsResponse
     *
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
     * Queries ASM instances.
     *
     * @param request - DescribeServiceMeshesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMeshesResponse
     *
     * @param DescribeServiceMeshesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeServiceMeshesResponse
     */
    public function describeServiceMeshesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMeshes',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMeshesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries ASM instances.
     *
     * @param request - DescribeServiceMeshesRequest
     *
     * @returns DescribeServiceMeshesResponse
     *
     * @param DescribeServiceMeshesRequest $request
     *
     * @return DescribeServiceMeshesResponse
     */
    public function describeServiceMeshes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshesWithOptions($request, $runtime);
    }

    /**
     * Queries the update status of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeUpgradeVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUpgradeVersionResponse
     *
     * @param DescribeUpgradeVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUpgradeVersionResponse
     */
    public function describeUpgradeVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUpgradeVersion',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUpgradeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the update status of a Service Mesh (ASM) instance.
     *
     * @param request - DescribeUpgradeVersionRequest
     *
     * @returns DescribeUpgradeVersionResponse
     *
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
     * Obtains role-based access control (RBAC) permissions.
     *
     * @param request - DescribeUserPermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserPermissionsResponse
     *
     * @param DescribeUserPermissionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeUserPermissionsResponse
     */
    public function describeUserPermissionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->subAccountUserId) {
            @$body['SubAccountUserId'] = $request->subAccountUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUserPermissions',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains role-based access control (RBAC) permissions.
     *
     * @param request - DescribeUserPermissionsRequest
     *
     * @returns DescribeUserPermissionsResponse
     *
     * @param DescribeUserPermissionsRequest $request
     *
     * @return DescribeUserPermissionsResponse
     */
    public function describeUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * Queries the IDs of all RAM users or RAM roles to which a Role-based Access Control (RBAC) role is assigned.
     *
     * @param request - DescribeUsersWithPermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsersWithPermissionsResponse
     *
     * @param DescribeUsersWithPermissionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeUsersWithPermissionsResponse
     */
    public function describeUsersWithPermissionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userType) {
            @$body['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUsersWithPermissions',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsersWithPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IDs of all RAM users or RAM roles to which a Role-based Access Control (RBAC) role is assigned.
     *
     * @param request - DescribeUsersWithPermissionsRequest
     *
     * @returns DescribeUsersWithPermissionsResponse
     *
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
     * Queries the virtual machines (VMs) that are added to a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI DescribeVMsInServiceMesh is deprecated
     *
     * @param request - DescribeVMsInServiceMeshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVMsInServiceMeshResponse
     *
     * @param DescribeVMsInServiceMeshRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVMsInServiceMeshResponse
     */
    public function describeVMsInServiceMeshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVMsInServiceMesh',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVMsInServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the virtual machines (VMs) that are added to a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI DescribeVMsInServiceMesh is deprecated
     *
     * @param request - DescribeVMsInServiceMeshRequest
     *
     * @returns DescribeVMsInServiceMeshResponse
     *
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
     * Queries a list of vSwitches that are deployed in a specified virtual private cloud (VPC) in a region.
     *
     * @param request - DescribeVSwitchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeVSwitches',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of vSwitches that are deployed in a specified virtual private cloud (VPC) in a region.
     *
     * @param request - DescribeVSwitchesRequest
     *
     * @returns DescribeVSwitchesResponse
     *
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
     * Queries available Service Mesh (ASM) versions when you create an ASM instance.
     *
     * @param request - DescribeVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVersionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeVersionsResponse
     */
    public function describeVersionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeVersions',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available Service Mesh (ASM) versions when you create an ASM instance.
     *
     * @returns DescribeVersionsResponse
     *
     * @return DescribeVersionsResponse
     */
    public function describeVersions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVersionsWithOptions($runtime);
    }

    /**
     * Queries the virtual private clouds (VPCs) that are available in a specified region.
     *
     * @param request - DescribeVpcsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcsResponse
     *
     * @param DescribeVpcsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcs',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the virtual private clouds (VPCs) that are available in a specified region.
     *
     * @param request - DescribeVpcsRequest
     *
     * @returns DescribeVpcsResponse
     *
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
     * Obtains a certificate issued by a certificate authority (CA).
     *
     * @param request - GetCaCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCaCertResponse
     *
     * @param GetCaCertRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetCaCertResponse
     */
    public function getCaCertWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCaCert',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCaCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a certificate issued by a certificate authority (CA).
     *
     * @param request - GetCaCertRequest
     *
     * @returns GetCaCertResponse
     *
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
     * Queries a list of workloads specified by a label selector.
     *
     * @param tmpReq - GetDeploymentBySelectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeploymentBySelectorResponse
     *
     * @param GetDeploymentBySelectorRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDeploymentBySelectorResponse
     */
    public function getDeploymentBySelectorWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDeploymentBySelectorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelSelector) {
            $request->labelSelectorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'LabelSelector', 'json');
        }

        $body = [];
        if (null !== $request->guestCluster) {
            @$body['GuestCluster'] = $request->guestCluster;
        }

        if (null !== $request->labelSelectorShrink) {
            @$body['LabelSelector'] = $request->labelSelectorShrink;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->mark) {
            @$body['Mark'] = $request->mark;
        }

        if (null !== $request->nameSpace) {
            @$body['NameSpace'] = $request->nameSpace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDeploymentBySelector',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeploymentBySelectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of workloads specified by a label selector.
     *
     * @param request - GetDeploymentBySelectorRequest
     *
     * @returns GetDeploymentBySelectorResponse
     *
     * @param GetDeploymentBySelectorRequest $request
     *
     * @return GetDeploymentBySelectorResponse
     */
    public function getDeploymentBySelector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeploymentBySelectorWithOptions($request, $runtime);
    }

    /**
     * Queries the Grafana dashboard URL from Application Real-Time Monitoring Service (ARMS).
     *
     * @param request - GetGrafanaDashboardUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGrafanaDashboardUrlResponse
     *
     * @param GetGrafanaDashboardUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetGrafanaDashboardUrlResponse
     */
    public function getGrafanaDashboardUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->k8sClusterId) {
            @$body['K8sClusterId'] = $request->k8sClusterId;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGrafanaDashboardUrl',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGrafanaDashboardUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Grafana dashboard URL from Application Real-Time Monitoring Service (ARMS).
     *
     * @param request - GetGrafanaDashboardUrlRequest
     *
     * @returns GetGrafanaDashboardUrlResponse
     *
     * @param GetGrafanaDashboardUrlRequest $request
     *
     * @return GetGrafanaDashboardUrlResponse
     */
    public function getGrafanaDashboardUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGrafanaDashboardUrlWithOptions($request, $runtime);
    }

    /**
     * 描述ServiceEndpoints信息.
     *
     * @param request - GetRegisteredServiceEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegisteredServiceEndpointsResponse
     *
     * @param GetRegisteredServiceEndpointsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetRegisteredServiceEndpointsResponse
     */
    public function getRegisteredServiceEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterIds) {
            @$body['ClusterIds'] = $request->clusterIds;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->serviceType) {
            @$body['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRegisteredServiceEndpoints',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRegisteredServiceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 描述ServiceEndpoints信息.
     *
     * @param request - GetRegisteredServiceEndpointsRequest
     *
     * @returns GetRegisteredServiceEndpointsResponse
     *
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
     * @param request - GetRegisteredServiceNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegisteredServiceNamespacesResponse
     *
     * @param GetRegisteredServiceNamespacesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetRegisteredServiceNamespacesResponse
     */
    public function getRegisteredServiceNamespacesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRegisteredServiceNamespaces',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRegisteredServiceNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetRegisteredServiceNamespacesRequest
     *
     * @returns GetRegisteredServiceNamespacesResponse
     *
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
     * Queries detailed information about a lane.
     *
     * @param request - GetSwimLaneDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSwimLaneDetailResponse
     *
     * @param GetSwimLaneDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSwimLaneDetailResponse
     */
    public function getSwimLaneDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->swimLaneName) {
            @$body['SwimLaneName'] = $request->swimLaneName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSwimLaneDetail',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSwimLaneDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries detailed information about a lane.
     *
     * @param request - GetSwimLaneDetailRequest
     *
     * @returns GetSwimLaneDetailResponse
     *
     * @param GetSwimLaneDetailRequest $request
     *
     * @return GetSwimLaneDetailResponse
     */
    public function getSwimLaneDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSwimLaneDetailWithOptions($request, $runtime);
    }

    /**
     * Queries a list of all lane groups in an Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @param request - GetSwimLaneGroupListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSwimLaneGroupListResponse
     *
     * @param GetSwimLaneGroupListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSwimLaneGroupListResponse
     */
    public function getSwimLaneGroupListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSwimLaneGroupList',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSwimLaneGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of all lane groups in an Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @param request - GetSwimLaneGroupListRequest
     *
     * @returns GetSwimLaneGroupListResponse
     *
     * @param GetSwimLaneGroupListRequest $request
     *
     * @return GetSwimLaneGroupListResponse
     */
    public function getSwimLaneGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSwimLaneGroupListWithOptions($request, $runtime);
    }

    /**
     * Queries a list of all the lanes in a lane group.
     *
     * @param request - GetSwimLaneListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSwimLaneListResponse
     *
     * @param GetSwimLaneListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSwimLaneListResponse
     */
    public function getSwimLaneListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSwimLaneList',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSwimLaneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of all the lanes in a lane group.
     *
     * @param request - GetSwimLaneListRequest
     *
     * @returns GetSwimLaneListResponse
     *
     * @param GetSwimLaneListRequest $request
     *
     * @return GetSwimLaneListResponse
     */
    public function getSwimLaneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSwimLaneListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about VMs that are added to a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI GetVmAppMeshInfo is deprecated
     *
     * @param request - GetVmAppMeshInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVmAppMeshInfoResponse
     *
     * @param GetVmAppMeshInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVmAppMeshInfoResponse
     */
    public function getVmAppMeshInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVmAppMeshInfo',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVmAppMeshInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the information about VMs that are added to a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI GetVmAppMeshInfo is deprecated
     *
     * @param request - GetVmAppMeshInfoRequest
     *
     * @returns GetVmAppMeshInfoResponse
     *
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
     * Queries the metadata that is required to add a non-containerized application to a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI GetVmMeta is deprecated
     *
     * @param request - GetVmMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVmMetaResponse
     *
     * @param GetVmMetaRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetVmMetaResponse
     */
    public function getVmMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVmMeta',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVmMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the metadata that is required to add a non-containerized application to a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI GetVmMeta is deprecated
     *
     * @param request - GetVmMetaRequest
     *
     * @returns GetVmMetaResponse
     *
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
     * Grants permissions to a Resource Access Management (RAM) user.
     *
     * @param tmpReq - GrantUserPermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantUserPermissionsResponse
     *
     * @param GrantUserPermissionsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GrantUserPermissionsResponse
     */
    public function grantUserPermissionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GrantUserPermissionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->subAccountUserIds) {
            $request->subAccountUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subAccountUserIds, 'SubAccountUserIds', 'json');
        }

        $body = [];
        if (null !== $request->permissions) {
            @$body['Permissions'] = $request->permissions;
        }

        if (null !== $request->subAccountUserId) {
            @$body['SubAccountUserId'] = $request->subAccountUserId;
        }

        if (null !== $request->subAccountUserIdsShrink) {
            @$body['SubAccountUserIds'] = $request->subAccountUserIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantUserPermissions',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants permissions to a Resource Access Management (RAM) user.
     *
     * @param request - GrantUserPermissionsRequest
     *
     * @returns GrantUserPermissionsResponse
     *
     * @param GrantUserPermissionsRequest $request
     *
     * @return GrantUserPermissionsResponse
     */
    public function grantUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * 列举所有服务账号.
     *
     * @param request - ListServiceAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceAccountsResponse
     *
     * @param ListServiceAccountsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListServiceAccountsResponse
     */
    public function listServiceAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListServiceAccounts',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举所有服务账号.
     *
     * @param request - ListServiceAccountsRequest
     *
     * @returns ListServiceAccountsResponse
     *
     * @param ListServiceAccountsRequest $request
     *
     * @return ListServiceAccountsResponse
     */
    public function listServiceAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries user tags on a Service Mesh (ASM) instance.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user tags on a Service Mesh (ASM) instance.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of all waypoint proxies in a namespace of a cluster on the data plane.
     *
     * @param request - ListWaypointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWaypointsResponse
     *
     * @param ListWaypointsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListWaypointsResponse
     */
    public function listWaypointsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->continue) {
            @$body['Continue'] = $request->continue;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWaypoints',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWaypointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of all waypoint proxies in a namespace of a cluster on the data plane.
     *
     * @param request - ListWaypointsRequest
     *
     * @returns ListWaypointsResponse
     *
     * @param ListWaypointsRequest $request
     *
     * @return ListWaypointsResponse
     */
    public function listWaypoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWaypointsWithOptions($request, $runtime);
    }

    /**
     * ModifyApiServerEipResource.
     *
     * @param request - ModifyApiServerEipResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApiServerEipResourceResponse
     *
     * @param ModifyApiServerEipResourceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyApiServerEipResourceResponse
     */
    public function modifyApiServerEipResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiServerEipId) {
            @$body['ApiServerEipId'] = $request->apiServerEipId;
        }

        if (null !== $request->operation) {
            @$body['Operation'] = $request->operation;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyApiServerEipResource',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApiServerEipResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifyApiServerEipResource.
     *
     * @param request - ModifyApiServerEipResourceRequest
     *
     * @returns ModifyApiServerEipResourceResponse
     *
     * @param ModifyApiServerEipResourceRequest $request
     *
     * @return ModifyApiServerEipResourceResponse
     */
    public function modifyApiServerEipResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiServerEipResourceWithOptions($request, $runtime);
    }

    /**
     * ModifyPilotEipResource.
     *
     * @param request - ModifyPilotEipResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPilotEipResourceResponse
     *
     * @param ModifyPilotEipResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyPilotEipResourceResponse
     */
    public function modifyPilotEipResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eipId) {
            @$body['EipId'] = $request->eipId;
        }

        if (null !== $request->isCanary) {
            @$body['IsCanary'] = $request->isCanary;
        }

        if (null !== $request->operation) {
            @$body['Operation'] = $request->operation;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPilotEipResource',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPilotEipResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifyPilotEipResource.
     *
     * @param request - ModifyPilotEipResourceRequest
     *
     * @returns ModifyPilotEipResourceResponse
     *
     * @param ModifyPilotEipResourceRequest $request
     *
     * @return ModifyPilotEipResourceResponse
     */
    public function modifyPilotEipResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPilotEipResourceWithOptions($request, $runtime);
    }

    /**
     * Modifies the name of a Service Mesh (ASM) instance.
     *
     * @param request - ModifyServiceMeshNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyServiceMeshNameResponse
     *
     * @param ModifyServiceMeshNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyServiceMeshNameResponse
     */
    public function modifyServiceMeshNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyServiceMeshName',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyServiceMeshNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a Service Mesh (ASM) instance.
     *
     * @param request - ModifyServiceMeshNameRequest
     *
     * @returns ModifyServiceMeshNameResponse
     *
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
     * Recreates a project that is used to store audit logs. After mesh audit is enabled, if you delete the log project that stores audit logs by mistake, you can recreate a project for storing audit logs.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods of Simple Log Service. For more information, visit the [pricing page](https://www.alibabacloud.com/zh/pricing-calculator?_p_lc=1\\&spm=a2796.7960336.3034855210.1.44e6b91aaSp2M7#/commodity/vm_intl).
     *
     * @param request - ReActivateAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReActivateAuditResponse
     *
     * @param ReActivateAuditRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReActivateAuditResponse
     */
    public function reActivateAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enableAudit) {
            @$body['EnableAudit'] = $request->enableAudit;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReActivateAudit',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReActivateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recreates a project that is used to store audit logs. After mesh audit is enabled, if you delete the log project that stores audit logs by mistake, you can recreate a project for storing audit logs.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods of Simple Log Service. For more information, visit the [pricing page](https://www.alibabacloud.com/zh/pricing-calculator?_p_lc=1\\&spm=a2796.7960336.3034855210.1.44e6b91aaSp2M7#/commodity/vm_intl).
     *
     * @param request - ReActivateAuditRequest
     *
     * @returns ReActivateAuditResponse
     *
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
     * Removes a cluster from a Service Mesh (ASM) instance.
     *
     * @param request - RemoveClusterFromServiceMeshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveClusterFromServiceMeshResponse
     *
     * @param RemoveClusterFromServiceMeshRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveClusterFromServiceMeshResponse
     */
    public function removeClusterFromServiceMeshWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->reserveNamespace) {
            @$body['ReserveNamespace'] = $request->reserveNamespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveClusterFromServiceMesh',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveClusterFromServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a cluster from a Service Mesh (ASM) instance.
     *
     * @param request - RemoveClusterFromServiceMeshRequest
     *
     * @returns RemoveClusterFromServiceMeshResponse
     *
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
     * Removes a virtual machine (VM) from a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI RemoveVMFromServiceMesh is deprecated
     *
     * @param request - RemoveVMFromServiceMeshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveVMFromServiceMeshResponse
     *
     * @param RemoveVMFromServiceMeshRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RemoveVMFromServiceMeshResponse
     */
    public function removeVMFromServiceMeshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecsId) {
            @$query['EcsId'] = $request->ecsId;
        }

        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveVMFromServiceMesh',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveVMFromServiceMeshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Removes a virtual machine (VM) from a Service Mesh (ASM) instance.
     *
     * @deprecated OpenAPI RemoveVMFromServiceMesh is deprecated
     *
     * @param request - RemoveVMFromServiceMeshRequest
     *
     * @returns RemoveVMFromServiceMeshResponse
     *
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
     * Revokes the kubeconfig file of a Service Mesh (ASM) instance and generates a new kubeconfig file.
     *
     * @param request - RevokeKubeconfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeKubeconfigResponse
     *
     * @param RevokeKubeconfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RevokeKubeconfigResponse
     */
    public function revokeKubeconfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->privateIpAddress) {
            @$body['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeKubeconfig',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the kubeconfig file of a Service Mesh (ASM) instance and generates a new kubeconfig file.
     *
     * @param request - RevokeKubeconfigRequest
     *
     * @returns RevokeKubeconfigResponse
     *
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
     * Adds or modifies user tags on a resource.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or modifies user tags on a resource.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Deletes user tags on a Service Mesh (ASM) instance.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes user tags on a Service Mesh (ASM) instance.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates a Service Mesh (ASM) gateway.
     *
     * @param request - UpdateASMGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateASMGatewayResponse
     *
     * @param UpdateASMGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateASMGatewayResponse
     */
    public function updateASMGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->body) {
            @$body['Body'] = $request->body;
        }

        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateASMGateway',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateASMGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a Service Mesh (ASM) gateway.
     *
     * @param request - UpdateASMGatewayRequest
     *
     * @returns UpdateASMGatewayResponse
     *
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
     * Updates imported services on a Service Mesh (ASM) gateway to import or delete upstream services associated with the gateway.
     *
     * @param request - UpdateASMGatewayImportedServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateASMGatewayImportedServicesResponse
     *
     * @param UpdateASMGatewayImportedServicesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateASMGatewayImportedServicesResponse
     */
    public function updateASMGatewayImportedServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ASMGatewayName) {
            @$body['ASMGatewayName'] = $request->ASMGatewayName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->serviceNames) {
            @$body['ServiceNames'] = $request->serviceNames;
        }

        if (null !== $request->serviceNamespace) {
            @$body['ServiceNamespace'] = $request->serviceNamespace;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateASMGatewayImportedServices',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateASMGatewayImportedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates imported services on a Service Mesh (ASM) gateway to import or delete upstream services associated with the gateway.
     *
     * @param request - UpdateASMGatewayImportedServicesRequest
     *
     * @returns UpdateASMGatewayImportedServicesResponse
     *
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
     * Synchronizes namespaces of a Kubernetes cluster that is added to a Service Mesh (ASM) instance.
     *
     * @param request - UpdateASMNamespaceFromGuestClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateASMNamespaceFromGuestClusterResponse
     *
     * @param UpdateASMNamespaceFromGuestClusterRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateASMNamespaceFromGuestClusterResponse
     */
    public function updateASMNamespaceFromGuestClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->k8sClusterId) {
            @$body['K8sClusterId'] = $request->k8sClusterId;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateASMNamespaceFromGuestCluster',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateASMNamespaceFromGuestClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes namespaces of a Kubernetes cluster that is added to a Service Mesh (ASM) instance.
     *
     * @param request - UpdateASMNamespaceFromGuestClusterRequest
     *
     * @returns UpdateASMNamespaceFromGuestClusterResponse
     *
     * @param UpdateASMNamespaceFromGuestClusterRequest $request
     *
     * @return UpdateASMNamespaceFromGuestClusterResponse
     */
    public function updateASMNamespaceFromGuestCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateASMNamespaceFromGuestClusterWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration for collecting control plane logs.
     *
     * @param request - UpdateControlPlaneLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateControlPlaneLogConfigResponse
     *
     * @param UpdateControlPlaneLogConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateControlPlaneLogConfigResponse
     */
    public function updateControlPlaneLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enabled) {
            @$body['Enabled'] = $request->enabled;
        }

        if (null !== $request->logTTLInDay) {
            @$body['LogTTLInDay'] = $request->logTTLInDay;
        }

        if (null !== $request->project) {
            @$body['Project'] = $request->project;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateControlPlaneLogConfig',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateControlPlaneLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration for collecting control plane logs.
     *
     * @param request - UpdateControlPlaneLogConfigRequest
     *
     * @returns UpdateControlPlaneLogConfigResponse
     *
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
     * 更新Guest Cluster配置.
     *
     * @param request - UpdateGuestClusterConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGuestClusterConfigResponse
     *
     * @param UpdateGuestClusterConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateGuestClusterConfigResponse
     */
    public function updateGuestClusterConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->guestClusterId) {
            @$body['GuestClusterId'] = $request->guestClusterId;
        }

        if (null !== $request->SMCEnabled) {
            @$body['SMCEnabled'] = $request->SMCEnabled;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGuestClusterConfig',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGuestClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Guest Cluster配置.
     *
     * @param request - UpdateGuestClusterConfigRequest
     *
     * @returns UpdateGuestClusterConfigResponse
     *
     * @param UpdateGuestClusterConfigRequest $request
     *
     * @return UpdateGuestClusterConfigResponse
     */
    public function updateGuestClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGuestClusterConfigWithOptions($request, $runtime);
    }

    /**
     * Updates a routing rule for a Service Mesh (ASM) gateway.
     *
     * @param tmpReq - UpdateIstioGatewayRoutesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIstioGatewayRoutesResponse
     *
     * @param UpdateIstioGatewayRoutesRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateIstioGatewayRoutesResponse
     */
    public function updateIstioGatewayRoutesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateIstioGatewayRoutesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->gatewayRoute) {
            $request->gatewayRouteShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->gatewayRoute, 'GatewayRoute', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->gatewayRouteShrink) {
            @$body['GatewayRoute'] = $request->gatewayRouteShrink;
        }

        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIstioGatewayRoutes',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIstioGatewayRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a routing rule for a Service Mesh (ASM) gateway.
     *
     * @param request - UpdateIstioGatewayRoutesRequest
     *
     * @returns UpdateIstioGatewayRoutesResponse
     *
     * @param UpdateIstioGatewayRoutesRequest $request
     *
     * @return UpdateIstioGatewayRoutesResponse
     */
    public function updateIstioGatewayRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIstioGatewayRoutesWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateIstioInjectionConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIstioInjectionConfigResponse
     *
     * @param UpdateIstioInjectionConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateIstioInjectionConfigResponse
     */
    public function updateIstioInjectionConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataPlaneMode) {
            @$body['DataPlaneMode'] = $request->dataPlaneMode;
        }

        if (null !== $request->enableIstioInjection) {
            @$body['EnableIstioInjection'] = $request->enableIstioInjection;
        }

        if (null !== $request->enableSidecarSetInjection) {
            @$body['EnableSidecarSetInjection'] = $request->enableSidecarSetInjection;
        }

        if (null !== $request->istioRev) {
            @$body['IstioRev'] = $request->istioRev;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIstioInjectionConfig',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIstioInjectionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateIstioInjectionConfigRequest
     *
     * @returns UpdateIstioInjectionConfigResponse
     *
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
     * Updates the information about a routing rule for a Service Mesh (ASM) gateway.
     *
     * @param request - UpdateIstioRouteAdditionalStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIstioRouteAdditionalStatusResponse
     *
     * @param UpdateIstioRouteAdditionalStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateIstioRouteAdditionalStatusResponse
     */
    public function updateIstioRouteAdditionalStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $body = [];
        if (null !== $request->istioGatewayName) {
            @$body['IstioGatewayName'] = $request->istioGatewayName;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIstioRouteAdditionalStatus',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIstioRouteAdditionalStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a routing rule for a Service Mesh (ASM) gateway.
     *
     * @param request - UpdateIstioRouteAdditionalStatusRequest
     *
     * @returns UpdateIstioRouteAdditionalStatusResponse
     *
     * @param UpdateIstioRouteAdditionalStatusRequest $request
     *
     * @return UpdateIstioRouteAdditionalStatusResponse
     */
    public function updateIstioRouteAdditionalStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIstioRouteAdditionalStatusWithOptions($request, $runtime);
    }

    /**
     * Updates the settings of whether to enable the Kubernetes API on the data plane to access Istio resources.
     *
     * @param request - UpdateMeshCRAggregationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMeshCRAggregationResponse
     *
     * @param UpdateMeshCRAggregationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMeshCRAggregationResponse
     */
    public function updateMeshCRAggregationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->CPULimit) {
            @$body['CPULimit'] = $request->CPULimit;
        }

        if (null !== $request->CPURequirement) {
            @$body['CPURequirement'] = $request->CPURequirement;
        }

        if (null !== $request->enabled) {
            @$body['Enabled'] = $request->enabled;
        }

        if (null !== $request->memoryLimit) {
            @$body['MemoryLimit'] = $request->memoryLimit;
        }

        if (null !== $request->memoryRequirement) {
            @$body['MemoryRequirement'] = $request->memoryRequirement;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->usePublicApiServer) {
            @$body['UsePublicApiServer'] = $request->usePublicApiServer;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMeshCRAggregation',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMeshCRAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the settings of whether to enable the Kubernetes API on the data plane to access Istio resources.
     *
     * @param request - UpdateMeshCRAggregationRequest
     *
     * @returns UpdateMeshCRAggregationResponse
     *
     * @param UpdateMeshCRAggregationRequest $request
     *
     * @return UpdateMeshCRAggregationResponse
     */
    public function updateMeshCRAggregation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMeshCRAggregationWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of a Service Mesh (ASM) instance.
     *
     * @param request - UpdateMeshFeatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMeshFeatureResponse
     *
     * @param UpdateMeshFeatureRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMeshFeatureResponse
     */
    public function updateMeshFeatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessLogGatewayEnabled) {
            @$query['AccessLogGatewayEnabled'] = $request->accessLogGatewayEnabled;
        }

        if (null !== $request->accessLogSidecarEnabled) {
            @$query['AccessLogSidecarEnabled'] = $request->accessLogSidecarEnabled;
        }

        if (null !== $request->labelsForOffloadedWorkloads) {
            @$query['LabelsForOffloadedWorkloads'] = $request->labelsForOffloadedWorkloads;
        }

        $body = [];
        if (null !== $request->accessLogEnabled) {
            @$body['AccessLogEnabled'] = $request->accessLogEnabled;
        }

        if (null !== $request->accessLogFile) {
            @$body['AccessLogFile'] = $request->accessLogFile;
        }

        if (null !== $request->accessLogFormat) {
            @$body['AccessLogFormat'] = $request->accessLogFormat;
        }

        if (null !== $request->accessLogGatewayLifecycle) {
            @$body['AccessLogGatewayLifecycle'] = $request->accessLogGatewayLifecycle;
        }

        if (null !== $request->accessLogProject) {
            @$body['AccessLogProject'] = $request->accessLogProject;
        }

        if (null !== $request->accessLogServiceEnabled) {
            @$body['AccessLogServiceEnabled'] = $request->accessLogServiceEnabled;
        }

        if (null !== $request->accessLogServiceHost) {
            @$body['AccessLogServiceHost'] = $request->accessLogServiceHost;
        }

        if (null !== $request->accessLogServicePort) {
            @$body['AccessLogServicePort'] = $request->accessLogServicePort;
        }

        if (null !== $request->accessLogSidecarLifecycle) {
            @$body['AccessLogSidecarLifecycle'] = $request->accessLogSidecarLifecycle;
        }

        if (null !== $request->auditProject) {
            @$body['AuditProject'] = $request->auditProject;
        }

        if (null !== $request->autoInjectionPolicyEnabled) {
            @$body['AutoInjectionPolicyEnabled'] = $request->autoInjectionPolicyEnabled;
        }

        if (null !== $request->CRAggregationEnabled) {
            @$body['CRAggregationEnabled'] = $request->CRAggregationEnabled;
        }

        if (null !== $request->certChain) {
            @$body['CertChain'] = $request->certChain;
        }

        if (null !== $request->clusterSpec) {
            @$body['ClusterSpec'] = $request->clusterSpec;
        }

        if (null !== $request->cniEnabled) {
            @$body['CniEnabled'] = $request->cniEnabled;
        }

        if (null !== $request->cniExcludeNamespaces) {
            @$body['CniExcludeNamespaces'] = $request->cniExcludeNamespaces;
        }

        if (null !== $request->concurrency) {
            @$body['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->configSourceEnabled) {
            @$body['ConfigSourceEnabled'] = $request->configSourceEnabled;
        }

        if (null !== $request->configSourceNacosID) {
            @$body['ConfigSourceNacosID'] = $request->configSourceNacosID;
        }

        if (null !== $request->customizedPrometheus) {
            @$body['CustomizedPrometheus'] = $request->customizedPrometheus;
        }

        if (null !== $request->customizedZipkin) {
            @$body['CustomizedZipkin'] = $request->customizedZipkin;
        }

        if (null !== $request->DNSProxyingEnabled) {
            @$body['DNSProxyingEnabled'] = $request->DNSProxyingEnabled;
        }

        if (null !== $request->defaultComponentsScheduleConfig) {
            @$body['DefaultComponentsScheduleConfig'] = $request->defaultComponentsScheduleConfig;
        }

        if (null !== $request->discoverySelectors) {
            @$body['DiscoverySelectors'] = $request->discoverySelectors;
        }

        if (null !== $request->dubboFilterEnabled) {
            @$body['DubboFilterEnabled'] = $request->dubboFilterEnabled;
        }

        if (null !== $request->enableAudit) {
            @$body['EnableAudit'] = $request->enableAudit;
        }

        if (null !== $request->enableAutoDiagnosis) {
            @$body['EnableAutoDiagnosis'] = $request->enableAutoDiagnosis;
        }

        if (null !== $request->enableBootstrapXdsAgent) {
            @$body['EnableBootstrapXdsAgent'] = $request->enableBootstrapXdsAgent;
        }

        if (null !== $request->enableCRHistory) {
            @$body['EnableCRHistory'] = $request->enableCRHistory;
        }

        if (null !== $request->enableNamespacesByDefault) {
            @$body['EnableNamespacesByDefault'] = $request->enableNamespacesByDefault;
        }

        if (null !== $request->enableSDSServer) {
            @$body['EnableSDSServer'] = $request->enableSDSServer;
        }

        if (null !== $request->excludeIPRanges) {
            @$body['ExcludeIPRanges'] = $request->excludeIPRanges;
        }

        if (null !== $request->excludeInboundPorts) {
            @$body['ExcludeInboundPorts'] = $request->excludeInboundPorts;
        }

        if (null !== $request->excludeOutboundPorts) {
            @$body['ExcludeOutboundPorts'] = $request->excludeOutboundPorts;
        }

        if (null !== $request->existingCaCert) {
            @$body['ExistingCaCert'] = $request->existingCaCert;
        }

        if (null !== $request->existingCaKey) {
            @$body['ExistingCaKey'] = $request->existingCaKey;
        }

        if (null !== $request->existingRootCaCert) {
            @$body['ExistingRootCaCert'] = $request->existingRootCaCert;
        }

        if (null !== $request->filterGatewayClusterConfig) {
            @$body['FilterGatewayClusterConfig'] = $request->filterGatewayClusterConfig;
        }

        if (null !== $request->gatewayAPIEnabled) {
            @$body['GatewayAPIEnabled'] = $request->gatewayAPIEnabled;
        }

        if (null !== $request->holdApplicationUntilProxyStarts) {
            @$body['HoldApplicationUntilProxyStarts'] = $request->holdApplicationUntilProxyStarts;
        }

        if (null !== $request->http10Enabled) {
            @$body['Http10Enabled'] = $request->http10Enabled;
        }

        if (null !== $request->includeIPRanges) {
            @$body['IncludeIPRanges'] = $request->includeIPRanges;
        }

        if (null !== $request->includeInboundPorts) {
            @$body['IncludeInboundPorts'] = $request->includeInboundPorts;
        }

        if (null !== $request->includeOutboundPorts) {
            @$body['IncludeOutboundPorts'] = $request->includeOutboundPorts;
        }

        if (null !== $request->integrateKiali) {
            @$body['IntegrateKiali'] = $request->integrateKiali;
        }

        if (null !== $request->interceptionMode) {
            @$body['InterceptionMode'] = $request->interceptionMode;
        }

        if (null !== $request->kialiArmsAuthTokens) {
            @$body['KialiArmsAuthTokens'] = $request->kialiArmsAuthTokens;
        }

        if (null !== $request->kialiEnabled) {
            @$body['KialiEnabled'] = $request->kialiEnabled;
        }

        if (null !== $request->kialiServiceAnnotations) {
            @$body['KialiServiceAnnotations'] = $request->kialiServiceAnnotations;
        }

        if (null !== $request->lifecycle) {
            @$body['Lifecycle'] = $request->lifecycle;
        }

        if (null !== $request->localityLBConf) {
            @$body['LocalityLBConf'] = $request->localityLBConf;
        }

        if (null !== $request->localityLoadBalancing) {
            @$body['LocalityLoadBalancing'] = $request->localityLoadBalancing;
        }

        if (null !== $request->logLevel) {
            @$body['LogLevel'] = $request->logLevel;
        }

        if (null !== $request->MSEEnabled) {
            @$body['MSEEnabled'] = $request->MSEEnabled;
        }

        if (null !== $request->multiBufferEnabled) {
            @$body['MultiBufferEnabled'] = $request->multiBufferEnabled;
        }

        if (null !== $request->multiBufferPollDelay) {
            @$body['MultiBufferPollDelay'] = $request->multiBufferPollDelay;
        }

        if (null !== $request->mysqlFilterEnabled) {
            @$body['MysqlFilterEnabled'] = $request->mysqlFilterEnabled;
        }

        if (null !== $request->NFDEnabled) {
            @$body['NFDEnabled'] = $request->NFDEnabled;
        }

        if (null !== $request->NFDLabelPruned) {
            @$body['NFDLabelPruned'] = $request->NFDLabelPruned;
        }

        if (null !== $request->OPAInjectorCPULimit) {
            @$body['OPAInjectorCPULimit'] = $request->OPAInjectorCPULimit;
        }

        if (null !== $request->OPAInjectorCPURequirement) {
            @$body['OPAInjectorCPURequirement'] = $request->OPAInjectorCPURequirement;
        }

        if (null !== $request->OPAInjectorMemoryLimit) {
            @$body['OPAInjectorMemoryLimit'] = $request->OPAInjectorMemoryLimit;
        }

        if (null !== $request->OPAInjectorMemoryRequirement) {
            @$body['OPAInjectorMemoryRequirement'] = $request->OPAInjectorMemoryRequirement;
        }

        if (null !== $request->OPALimitCPU) {
            @$body['OPALimitCPU'] = $request->OPALimitCPU;
        }

        if (null !== $request->OPALimitMemory) {
            @$body['OPALimitMemory'] = $request->OPALimitMemory;
        }

        if (null !== $request->OPALogLevel) {
            @$body['OPALogLevel'] = $request->OPALogLevel;
        }

        if (null !== $request->OPARequestCPU) {
            @$body['OPARequestCPU'] = $request->OPARequestCPU;
        }

        if (null !== $request->OPARequestMemory) {
            @$body['OPARequestMemory'] = $request->OPARequestMemory;
        }

        if (null !== $request->OPAScopeInjected) {
            @$body['OPAScopeInjected'] = $request->OPAScopeInjected;
        }

        if (null !== $request->opaEnabled) {
            @$body['OpaEnabled'] = $request->opaEnabled;
        }

        if (null !== $request->openAgentPolicy) {
            @$body['OpenAgentPolicy'] = $request->openAgentPolicy;
        }

        if (null !== $request->outboundTrafficPolicy) {
            @$body['OutboundTrafficPolicy'] = $request->outboundTrafficPolicy;
        }

        if (null !== $request->pilotEnableQuicListeners) {
            @$body['PilotEnableQuicListeners'] = $request->pilotEnableQuicListeners;
        }

        if (null !== $request->prometheusUrl) {
            @$body['PrometheusUrl'] = $request->prometheusUrl;
        }

        if (null !== $request->proxyInitCPUResourceLimit) {
            @$body['ProxyInitCPUResourceLimit'] = $request->proxyInitCPUResourceLimit;
        }

        if (null !== $request->proxyInitCPUResourceRequest) {
            @$body['ProxyInitCPUResourceRequest'] = $request->proxyInitCPUResourceRequest;
        }

        if (null !== $request->proxyInitMemoryResourceLimit) {
            @$body['ProxyInitMemoryResourceLimit'] = $request->proxyInitMemoryResourceLimit;
        }

        if (null !== $request->proxyInitMemoryResourceRequest) {
            @$body['ProxyInitMemoryResourceRequest'] = $request->proxyInitMemoryResourceRequest;
        }

        if (null !== $request->proxyLimitCPU) {
            @$body['ProxyLimitCPU'] = $request->proxyLimitCPU;
        }

        if (null !== $request->proxyLimitMemory) {
            @$body['ProxyLimitMemory'] = $request->proxyLimitMemory;
        }

        if (null !== $request->proxyRequestCPU) {
            @$body['ProxyRequestCPU'] = $request->proxyRequestCPU;
        }

        if (null !== $request->proxyRequestMemory) {
            @$body['ProxyRequestMemory'] = $request->proxyRequestMemory;
        }

        if (null !== $request->proxyStatsMatcher) {
            @$body['ProxyStatsMatcher'] = $request->proxyStatsMatcher;
        }

        if (null !== $request->redisFilterEnabled) {
            @$body['RedisFilterEnabled'] = $request->redisFilterEnabled;
        }

        if (null !== $request->SMCEnabled) {
            @$body['SMCEnabled'] = $request->SMCEnabled;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->sidecarInjectorLimitCPU) {
            @$body['SidecarInjectorLimitCPU'] = $request->sidecarInjectorLimitCPU;
        }

        if (null !== $request->sidecarInjectorLimitMemory) {
            @$body['SidecarInjectorLimitMemory'] = $request->sidecarInjectorLimitMemory;
        }

        if (null !== $request->sidecarInjectorRequestCPU) {
            @$body['SidecarInjectorRequestCPU'] = $request->sidecarInjectorRequestCPU;
        }

        if (null !== $request->sidecarInjectorRequestMemory) {
            @$body['SidecarInjectorRequestMemory'] = $request->sidecarInjectorRequestMemory;
        }

        if (null !== $request->sidecarInjectorWebhookAsYaml) {
            @$body['SidecarInjectorWebhookAsYaml'] = $request->sidecarInjectorWebhookAsYaml;
        }

        if (null !== $request->telemetry) {
            @$body['Telemetry'] = $request->telemetry;
        }

        if (null !== $request->terminationDrainDuration) {
            @$body['TerminationDrainDuration'] = $request->terminationDrainDuration;
        }

        if (null !== $request->thriftFilterEnabled) {
            @$body['ThriftFilterEnabled'] = $request->thriftFilterEnabled;
        }

        if (null !== $request->traceCustomTags) {
            @$body['TraceCustomTags'] = $request->traceCustomTags;
        }

        if (null !== $request->traceMaxPathTagLength) {
            @$body['TraceMaxPathTagLength'] = $request->traceMaxPathTagLength;
        }

        if (null !== $request->traceSampling) {
            @$body['TraceSampling'] = $request->traceSampling;
        }

        if (null !== $request->tracing) {
            @$body['Tracing'] = $request->tracing;
        }

        if (null !== $request->tracingOnExtZipkinLimitCPU) {
            @$body['TracingOnExtZipkinLimitCPU'] = $request->tracingOnExtZipkinLimitCPU;
        }

        if (null !== $request->tracingOnExtZipkinLimitMemory) {
            @$body['TracingOnExtZipkinLimitMemory'] = $request->tracingOnExtZipkinLimitMemory;
        }

        if (null !== $request->tracingOnExtZipkinReplicaCount) {
            @$body['TracingOnExtZipkinReplicaCount'] = $request->tracingOnExtZipkinReplicaCount;
        }

        if (null !== $request->tracingOnExtZipkinRequestCPU) {
            @$body['TracingOnExtZipkinRequestCPU'] = $request->tracingOnExtZipkinRequestCPU;
        }

        if (null !== $request->tracingOnExtZipkinRequestMemory) {
            @$body['TracingOnExtZipkinRequestMemory'] = $request->tracingOnExtZipkinRequestMemory;
        }

        if (null !== $request->webAssemblyFilterEnabled) {
            @$body['WebAssemblyFilterEnabled'] = $request->webAssemblyFilterEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMeshFeature',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMeshFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a Service Mesh (ASM) instance.
     *
     * @param request - UpdateMeshFeatureRequest
     *
     * @returns UpdateMeshFeatureResponse
     *
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
     * Updates the network configurations of multiple Kubernetes clusters in a Service Mesh (ASM) instance.
     *
     * @param tmpReq - UpdateMeshMultiClusterNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMeshMultiClusterNetworkResponse
     *
     * @param UpdateMeshMultiClusterNetworkRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateMeshMultiClusterNetworkResponse
     */
    public function updateMeshMultiClusterNetworkWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMeshMultiClusterNetworkShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->multiClusterNetworks) {
            $request->multiClusterNetworksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->multiClusterNetworks, 'MultiClusterNetworks', 'json');
        }

        $body = [];
        if (null !== $request->multiClusterNetworksShrink) {
            @$body['MultiClusterNetworks'] = $request->multiClusterNetworksShrink;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMeshMultiClusterNetwork',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMeshMultiClusterNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the network configurations of multiple Kubernetes clusters in a Service Mesh (ASM) instance.
     *
     * @param request - UpdateMeshMultiClusterNetworkRequest
     *
     * @returns UpdateMeshMultiClusterNetworkResponse
     *
     * @param UpdateMeshMultiClusterNetworkRequest $request
     *
     * @return UpdateMeshMultiClusterNetworkResponse
     */
    public function updateMeshMultiClusterNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMeshMultiClusterNetworkWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of sidecar proxies at the namespace level.
     *
     * @param tmpReq - UpdateNamespaceScopeSidecarConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNamespaceScopeSidecarConfigResponse
     *
     * @param UpdateNamespaceScopeSidecarConfigRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateNamespaceScopeSidecarConfigResponse
     */
    public function updateNamespaceScopeSidecarConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateNamespaceScopeSidecarConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scaledSidecarResource) {
            $request->scaledSidecarResourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scaledSidecarResource, 'ScaledSidecarResource', 'json');
        }

        $body = [];
        if (null !== $request->concurrency) {
            @$body['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->enableCoreDump) {
            @$body['EnableCoreDump'] = $request->enableCoreDump;
        }

        if (null !== $request->excludeIPRanges) {
            @$body['ExcludeIPRanges'] = $request->excludeIPRanges;
        }

        if (null !== $request->excludeInboundPorts) {
            @$body['ExcludeInboundPorts'] = $request->excludeInboundPorts;
        }

        if (null !== $request->excludeOutboundPorts) {
            @$body['ExcludeOutboundPorts'] = $request->excludeOutboundPorts;
        }

        if (null !== $request->holdApplicationUntilProxyStarts) {
            @$body['HoldApplicationUntilProxyStarts'] = $request->holdApplicationUntilProxyStarts;
        }

        if (null !== $request->includeIPRanges) {
            @$body['IncludeIPRanges'] = $request->includeIPRanges;
        }

        if (null !== $request->includeInboundPorts) {
            @$body['IncludeInboundPorts'] = $request->includeInboundPorts;
        }

        if (null !== $request->includeOutboundPorts) {
            @$body['IncludeOutboundPorts'] = $request->includeOutboundPorts;
        }

        if (null !== $request->interceptionMode) {
            @$body['InterceptionMode'] = $request->interceptionMode;
        }

        if (null !== $request->istioDNSProxyEnabled) {
            @$body['IstioDNSProxyEnabled'] = $request->istioDNSProxyEnabled;
        }

        if (null !== $request->lifecycle) {
            @$body['Lifecycle'] = $request->lifecycle;
        }

        if (null !== $request->logLevel) {
            @$body['LogLevel'] = $request->logLevel;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->postStart) {
            @$body['PostStart'] = $request->postStart;
        }

        if (null !== $request->preStop) {
            @$body['PreStop'] = $request->preStop;
        }

        if (null !== $request->privileged) {
            @$body['Privileged'] = $request->privileged;
        }

        if (null !== $request->proxyInitAckSloCPUResourceLimit) {
            @$body['ProxyInitAckSloCPUResourceLimit'] = $request->proxyInitAckSloCPUResourceLimit;
        }

        if (null !== $request->proxyInitAckSloCPUResourceRequest) {
            @$body['ProxyInitAckSloCPUResourceRequest'] = $request->proxyInitAckSloCPUResourceRequest;
        }

        if (null !== $request->proxyInitAckSloMemoryResourceLimit) {
            @$body['ProxyInitAckSloMemoryResourceLimit'] = $request->proxyInitAckSloMemoryResourceLimit;
        }

        if (null !== $request->proxyInitAckSloMemoryResourceRequest) {
            @$body['ProxyInitAckSloMemoryResourceRequest'] = $request->proxyInitAckSloMemoryResourceRequest;
        }

        if (null !== $request->proxyInitCPUResourceLimit) {
            @$body['ProxyInitCPUResourceLimit'] = $request->proxyInitCPUResourceLimit;
        }

        if (null !== $request->proxyInitCPUResourceRequest) {
            @$body['ProxyInitCPUResourceRequest'] = $request->proxyInitCPUResourceRequest;
        }

        if (null !== $request->proxyInitMemoryResourceLimit) {
            @$body['ProxyInitMemoryResourceLimit'] = $request->proxyInitMemoryResourceLimit;
        }

        if (null !== $request->proxyInitMemoryResourceRequest) {
            @$body['ProxyInitMemoryResourceRequest'] = $request->proxyInitMemoryResourceRequest;
        }

        if (null !== $request->proxyMetadata) {
            @$body['ProxyMetadata'] = $request->proxyMetadata;
        }

        if (null !== $request->proxyStatsMatcher) {
            @$body['ProxyStatsMatcher'] = $request->proxyStatsMatcher;
        }

        if (null !== $request->readinessFailureThreshold) {
            @$body['ReadinessFailureThreshold'] = $request->readinessFailureThreshold;
        }

        if (null !== $request->readinessInitialDelaySeconds) {
            @$body['ReadinessInitialDelaySeconds'] = $request->readinessInitialDelaySeconds;
        }

        if (null !== $request->readinessPeriodSeconds) {
            @$body['ReadinessPeriodSeconds'] = $request->readinessPeriodSeconds;
        }

        if (null !== $request->runtimeValues) {
            @$body['RuntimeValues'] = $request->runtimeValues;
        }

        if (null !== $request->SMCEnabled) {
            @$body['SMCEnabled'] = $request->SMCEnabled;
        }

        if (null !== $request->scaledSidecarResourceShrink) {
            @$body['ScaledSidecarResource'] = $request->scaledSidecarResourceShrink;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->sidecarProxyAckSloCPUResourceLimit) {
            @$body['SidecarProxyAckSloCPUResourceLimit'] = $request->sidecarProxyAckSloCPUResourceLimit;
        }

        if (null !== $request->sidecarProxyAckSloCPUResourceRequest) {
            @$body['SidecarProxyAckSloCPUResourceRequest'] = $request->sidecarProxyAckSloCPUResourceRequest;
        }

        if (null !== $request->sidecarProxyAckSloMemoryResourceLimit) {
            @$body['SidecarProxyAckSloMemoryResourceLimit'] = $request->sidecarProxyAckSloMemoryResourceLimit;
        }

        if (null !== $request->sidecarProxyAckSloMemoryResourceRequest) {
            @$body['SidecarProxyAckSloMemoryResourceRequest'] = $request->sidecarProxyAckSloMemoryResourceRequest;
        }

        if (null !== $request->sidecarProxyCPUResourceLimit) {
            @$body['SidecarProxyCPUResourceLimit'] = $request->sidecarProxyCPUResourceLimit;
        }

        if (null !== $request->sidecarProxyCPUResourceRequest) {
            @$body['SidecarProxyCPUResourceRequest'] = $request->sidecarProxyCPUResourceRequest;
        }

        if (null !== $request->sidecarProxyMemoryResourceLimit) {
            @$body['SidecarProxyMemoryResourceLimit'] = $request->sidecarProxyMemoryResourceLimit;
        }

        if (null !== $request->sidecarProxyMemoryResourceRequest) {
            @$body['SidecarProxyMemoryResourceRequest'] = $request->sidecarProxyMemoryResourceRequest;
        }

        if (null !== $request->terminationDrainDuration) {
            @$body['TerminationDrainDuration'] = $request->terminationDrainDuration;
        }

        if (null !== $request->tracing) {
            @$body['Tracing'] = $request->tracing;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNamespaceScopeSidecarConfig',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNamespaceScopeSidecarConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of sidecar proxies at the namespace level.
     *
     * @param request - UpdateNamespaceScopeSidecarConfigRequest
     *
     * @returns UpdateNamespaceScopeSidecarConfigResponse
     *
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
     * Updates the information about a lane.
     *
     * @param request - UpdateSwimLaneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSwimLaneResponse
     *
     * @param UpdateSwimLaneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSwimLaneResponse
     */
    public function updateSwimLaneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->labelSelectorKey) {
            @$body['LabelSelectorKey'] = $request->labelSelectorKey;
        }

        if (null !== $request->labelSelectorValue) {
            @$body['LabelSelectorValue'] = $request->labelSelectorValue;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->servicesList) {
            @$body['ServicesList'] = $request->servicesList;
        }

        if (null !== $request->swimLaneName) {
            @$body['SwimLaneName'] = $request->swimLaneName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSwimLane',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSwimLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a lane.
     *
     * @param request - UpdateSwimLaneRequest
     *
     * @returns UpdateSwimLaneResponse
     *
     * @param UpdateSwimLaneRequest $request
     *
     * @return UpdateSwimLaneResponse
     */
    public function updateSwimLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSwimLaneWithOptions($request, $runtime);
    }

    /**
     * Updates the information of a lane group.
     *
     * @param request - UpdateSwimLaneGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSwimLaneGroupResponse
     *
     * @param UpdateSwimLaneGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateSwimLaneGroupResponse
     */
    public function updateSwimLaneGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fallbackTarget) {
            @$body['FallbackTarget'] = $request->fallbackTarget;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->ingressRoutingStrategy) {
            @$body['IngressRoutingStrategy'] = $request->ingressRoutingStrategy;
        }

        if (null !== $request->serviceLevelFallbackTarget) {
            @$body['ServiceLevelFallbackTarget'] = $request->serviceLevelFallbackTarget;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->servicesList) {
            @$body['ServicesList'] = $request->servicesList;
        }

        if (null !== $request->weightedIngressRule) {
            @$body['WeightedIngressRule'] = $request->weightedIngressRule;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSwimLaneGroup',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSwimLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of a lane group.
     *
     * @param request - UpdateSwimLaneGroupRequest
     *
     * @returns UpdateSwimLaneGroupResponse
     *
     * @param UpdateSwimLaneGroupRequest $request
     *
     * @return UpdateSwimLaneGroupResponse
     */
    public function updateSwimLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSwimLaneGroupWithOptions($request, $runtime);
    }

    /**
     * 更新Waypoint.
     *
     * @param request - UpdateWaypointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWaypointResponse
     *
     * @param UpdateWaypointRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWaypointResponse
     */
    public function updateWaypointWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->HPAEnabled) {
            @$body['HPAEnabled'] = $request->HPAEnabled;
        }

        if (null !== $request->HPAMaxReplicas) {
            @$body['HPAMaxReplicas'] = $request->HPAMaxReplicas;
        }

        if (null !== $request->HPAMinReplicas) {
            @$body['HPAMinReplicas'] = $request->HPAMinReplicas;
        }

        if (null !== $request->HPATargetCPU) {
            @$body['HPATargetCPU'] = $request->HPATargetCPU;
        }

        if (null !== $request->HPATargetMemory) {
            @$body['HPATargetMemory'] = $request->HPATargetMemory;
        }

        if (null !== $request->limitCPU) {
            @$body['LimitCPU'] = $request->limitCPU;
        }

        if (null !== $request->limitMemory) {
            @$body['LimitMemory'] = $request->limitMemory;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->preferECI) {
            @$body['PreferECI'] = $request->preferECI;
        }

        if (null !== $request->replicas) {
            @$body['Replicas'] = $request->replicas;
        }

        if (null !== $request->requestCPU) {
            @$body['RequestCPU'] = $request->requestCPU;
        }

        if (null !== $request->requestMemory) {
            @$body['RequestMemory'] = $request->requestMemory;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWaypoint',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWaypointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Waypoint.
     *
     * @param request - UpdateWaypointRequest
     *
     * @returns UpdateWaypointResponse
     *
     * @param UpdateWaypointRequest $request
     *
     * @return UpdateWaypointResponse
     */
    public function updateWaypoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaypointWithOptions($request, $runtime);
    }

    /**
     * Upgrades a Service Mesh (ASM) instance to Professional Edition that is commercially released.
     *
     * @param request - UpgradeMeshEditionPartiallyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeMeshEditionPartiallyResponse
     *
     * @param UpgradeMeshEditionPartiallyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpgradeMeshEditionPartiallyResponse
     */
    public function upgradeMeshEditionPartiallyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ASMGatewayContinue) {
            @$body['ASMGatewayContinue'] = $request->ASMGatewayContinue;
        }

        if (null !== $request->expectedVersion) {
            @$body['ExpectedVersion'] = $request->expectedVersion;
        }

        if (null !== $request->preCheck) {
            @$body['PreCheck'] = $request->preCheck;
        }

        if (null !== $request->serviceMeshId) {
            @$body['ServiceMeshId'] = $request->serviceMeshId;
        }

        if (null !== $request->switchToPro) {
            @$body['SwitchToPro'] = $request->switchToPro;
        }

        if (null !== $request->upgradeGatewayRecords) {
            @$body['UpgradeGatewayRecords'] = $request->upgradeGatewayRecords;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpgradeMeshEditionPartially',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeMeshEditionPartiallyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades a Service Mesh (ASM) instance to Professional Edition that is commercially released.
     *
     * @param request - UpgradeMeshEditionPartiallyRequest
     *
     * @returns UpgradeMeshEditionPartiallyResponse
     *
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
     * Updates the version of a Service Mesh (ASM) instance.
     *
     * @param request - UpgradeMeshVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeMeshVersionResponse
     *
     * @param UpgradeMeshVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradeMeshVersionResponse
     */
    public function upgradeMeshVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->preCheck) {
            @$query['PreCheck'] = $request->preCheck;
        }

        if (null !== $request->serviceMeshId) {
            @$query['ServiceMeshId'] = $request->serviceMeshId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeMeshVersion',
            'version' => '2020-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeMeshVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the version of a Service Mesh (ASM) instance.
     *
     * @param request - UpgradeMeshVersionRequest
     *
     * @returns UpgradeMeshVersionResponse
     *
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
