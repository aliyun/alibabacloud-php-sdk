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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddBuiltinEnvoyFilterResponse::fromMap($this->doRPCRequest('AddBuiltinEnvoyFilter', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddClusterIntoServiceMeshResponse::fromMap($this->doRPCRequest('AddClusterIntoServiceMesh', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMeshTagToEcsResponse::fromMap($this->doRPCRequest('AddMeshTagToEcs', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVMIntoServiceMeshResponse::fromMap($this->doRPCRequest('AddVMIntoServiceMesh', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateExtensionProviderResponse::fromMap($this->doRPCRequest('CreateExtensionProvider', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceMeshResponse::fromMap($this->doRPCRequest('CreateServiceMesh', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteExtensionProviderResponse::fromMap($this->doRPCRequest('DeleteExtensionProvider', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteServiceMeshResponse::fromMap($this->doRPCRequest('DeleteServiceMesh', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlertActionPoliciesResponse::fromMap($this->doRPCRequest('DescribeAlertActionPolicies', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableNacosInstancesResponse::fromMap($this->doRPCRequest('DescribeAvailableNacosInstances', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCensResponse::fromMap($this->doRPCRequest('DescribeCens', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterGrafanaResponse::fromMap($this->doRPCRequest('DescribeClusterGrafana', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterPrometheusResponse::fromMap($this->doRPCRequest('DescribeClusterPrometheus', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClustersInServiceMeshResponse::fromMap($this->doRPCRequest('DescribeClustersInServiceMesh', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeControlPlaneLogAlertRulesResponse::fromMap($this->doRPCRequest('DescribeControlPlaneLogAlertRules', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCrTemplatesResponse::fromMap($this->doRPCRequest('DescribeCrTemplates', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExtensionProviderResponse::fromMap($this->doRPCRequest('DescribeExtensionProvider', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGuestClusterAccessLogDashboardsResponse::fromMap($this->doRPCRequest('DescribeGuestClusterAccessLogDashboards', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGuestClusterNamespacesResponse::fromMap($this->doRPCRequest('DescribeGuestClusterNamespaces', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGuestClusterPodsResponse::fromMap($this->doRPCRequest('DescribeGuestClusterPods', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeIngressGatewaysResponse::fromMap($this->doRPCRequest('DescribeIngressGateways', '2020-01-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNamespaceScopeSidecarConfigResponse::fromMap($this->doRPCRequest('DescribeNamespaceScopeSidecarConfig', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2020-01-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServiceMeshDetailResponse::fromMap($this->doRPCRequest('DescribeServiceMeshDetail', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServiceMeshGatewayPodStatusResponse::fromMap($this->doRPCRequest('DescribeServiceMeshGatewayPodStatus', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServiceMeshGatewaySLBStatusResponse::fromMap($this->doRPCRequest('DescribeServiceMeshGatewaySLBStatus', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServiceMeshKubeconfigResponse::fromMap($this->doRPCRequest('DescribeServiceMeshKubeconfig', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServiceMeshUpgradeStatusResponse::fromMap($this->doRPCRequest('DescribeServiceMeshUpgradeStatus', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServiceMeshVMsResponse::fromMap($this->doRPCRequest('DescribeServiceMeshVMs', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([]);

        return DescribeServiceMeshesResponse::fromMap($this->doRPCRequest('DescribeServiceMeshes', '2020-01-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUpgradeVersionResponse::fromMap($this->doRPCRequest('DescribeUpgradeVersion', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVMsInServiceMeshResponse::fromMap($this->doRPCRequest('DescribeVMsInServiceMesh', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVSwitchesResponse::fromMap($this->doRPCRequest('DescribeVSwitches', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVpcsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcsResponse::fromMap($this->doRPCRequest('DescribeVpcs', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableControlPlaneLogAlertResponse::fromMap($this->doRPCRequest('DisableControlPlaneLogAlert', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableControlPlaneLogAlertResponse::fromMap($this->doRPCRequest('EnableControlPlaneLogAlert', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAutoInjectionLabelSyncStatusResponse::fromMap($this->doRPCRequest('GetAutoInjectionLabelSyncStatus', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBuiltinEnvoyFilterResponse::fromMap($this->doRPCRequest('GetBuiltinEnvoyFilter', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBuiltinEnvoyFilterCatalogResponse::fromMap($this->doRPCRequest('GetBuiltinEnvoyFilterCatalog', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCaCertResponse::fromMap($this->doRPCRequest('GetCaCert', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDiagnosisResponse::fromMap($this->doRPCRequest('GetDiagnosis', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return GetEcsListResponse::fromMap($this->doRPCRequest('GetEcsList', '2020-01-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRegisteredServiceEndpointsResponse::fromMap($this->doRPCRequest('GetRegisteredServiceEndpoints', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRegisteredServiceNamespacesResponse::fromMap($this->doRPCRequest('GetRegisteredServiceNamespaces', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRegisteredServicesResponse::fromMap($this->doRPCRequest('GetRegisteredServices', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSaTokenResponse::fromMap($this->doRPCRequest('GetSaToken', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceMeshSlbResponse::fromMap($this->doRPCRequest('GetServiceMeshSlb', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceRegistrySourceResponse::fromMap($this->doRPCRequest('GetServiceRegistrySource', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return GetVmAppMeshInfoResponse::fromMap($this->doRPCRequest('GetVmAppMeshInfo', '2020-01-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return GetVmMetaResponse::fromMap($this->doRPCRequest('GetVmMeta', '2020-01-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([]);

        return InitializeASMRoleResponse::fromMap($this->doRPCRequest('InitializeASMRole', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBuiltinEnvoyFilterResponse::fromMap($this->doRPCRequest('ListBuiltinEnvoyFilter', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBuiltinEnvoyFilterResponse::fromMap($this->doRPCRequest('ModifyBuiltinEnvoyFilter', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyServiceMeshNameResponse::fromMap($this->doRPCRequest('ModifyServiceMeshName', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReActivateAuditResponse::fromMap($this->doRPCRequest('ReActivateAudit', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveBuiltinEnvoyFilterResponse::fromMap($this->doRPCRequest('RemoveBuiltinEnvoyFilter', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveClusterFromServiceMeshResponse::fromMap($this->doRPCRequest('RemoveClusterFromServiceMesh', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveVMFromServiceMeshResponse::fromMap($this->doRPCRequest('RemoveVMFromServiceMesh', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RunDiagnosisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunDiagnosisResponse
     */
    public function runDiagnosisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunDiagnosisResponse::fromMap($this->doRPCRequest('RunDiagnosis', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetServiceRegistrySourceResponse::fromMap($this->doRPCRequest('SetServiceRegistrySource', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateControlPlaneLogAlertActionPolicyResponse::fromMap($this->doRPCRequest('UpdateControlPlaneLogAlertActionPolicy', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateControlPlaneLogConfigResponse::fromMap($this->doRPCRequest('UpdateControlPlaneLogConfig', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateExtensionProviderResponse::fromMap($this->doRPCRequest('UpdateExtensionProvider', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateIstioInjectionConfigResponse::fromMap($this->doRPCRequest('UpdateIstioInjectionConfig', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMeshFeatureResponse::fromMap($this->doRPCRequest('UpdateMeshFeature', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateNamespaceScopeSidecarConfigResponse::fromMap($this->doRPCRequest('UpdateNamespaceScopeSidecarConfig', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeMeshVersionResponse::fromMap($this->doRPCRequest('UpgradeMeshVersion', '2020-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
