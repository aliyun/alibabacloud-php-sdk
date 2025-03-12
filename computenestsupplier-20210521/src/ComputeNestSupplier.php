<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ApproveServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ApproveServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CancelServiceRegistrationRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CancelServiceRegistrationResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ContinueDeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ContinueDeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceInstanceShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceTestCaseRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceTestCaseResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceTestTaskRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceTestTaskResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateSupplierRegistrationRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateSupplierRegistrationResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceTestCaseRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceTestCaseResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GenerateDefaultServiceTestConfigRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GenerateDefaultServiceTestConfigResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GenerateServicePolicyRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GenerateServicePolicyResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceProvisionsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceProvisionsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceProvisionsShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTestTaskRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTestTaskResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetSupplierInformationRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetSupplierInformationResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetUploadCredentialsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetUploadCredentialsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\LaunchServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\LaunchServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageRepositoriesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageRepositoriesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageTagsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageTagsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactRisksRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactRisksResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListResellersRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListResellersResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceLogsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceLogsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceUpgradeHistoryRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceUpgradeHistoryResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceSharedAccountsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceSharedAccountsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestCasesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestCasesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTaskLogsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTaskLogsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTasksRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTasksResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListSupplierRegistrationsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListSupplierRegistrationsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ModifyServiceInstanceResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ModifyServiceInstanceResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PreLaunchServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PreLaunchServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PushMeteringDataResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RegisterServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RegisterServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RejectServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RejectServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ReleaseArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ReleaseArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RemoveServiceSharedAccountsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RemoveServiceSharedAccountsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RestartServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RestartServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RollbackServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RollbackServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StartServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StartServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StopServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StopServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceTestCaseRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceTestCaseResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSharedAccountPermissionRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSharedAccountPermissionResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\WithdrawServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\WithdrawServiceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ComputeNestSupplier extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('computenestsupplier', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Adds a shared account of a service.
     *  *
     * @param AddServiceSharedAccountsRequest $request AddServiceSharedAccountsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddServiceSharedAccountsResponse AddServiceSharedAccountsResponse
     */
    public function addServiceSharedAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->sharedAccounts)) {
            $query['SharedAccounts'] = $request->sharedAccounts;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddServiceSharedAccounts',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddServiceSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddServiceSharedAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds a shared account of a service.
     *  *
     * @param AddServiceSharedAccountsRequest $request AddServiceSharedAccountsRequest
     *
     * @return AddServiceSharedAccountsResponse AddServiceSharedAccountsResponse
     */
    public function addServiceSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServiceSharedAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary 商家通过服务使用请求
     *  *
     * @param ApproveServiceUsageRequest $request ApproveServiceUsageRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ApproveServiceUsageResponse ApproveServiceUsageResponse
     */
    public function approveServiceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userAliUid)) {
            $query['UserAliUid'] = $request->userAliUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApproveServiceUsage',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ApproveServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApproveServiceUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 商家通过服务使用请求
     *  *
     * @param ApproveServiceUsageRequest $request ApproveServiceUsageRequest
     *
     * @return ApproveServiceUsageResponse ApproveServiceUsageResponse
     */
    public function approveServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveServiceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Cancel service registration.
     *  *
     * @description Only service registration in the Submitted status can be canceled.
     *  *
     * @param CancelServiceRegistrationRequest $request CancelServiceRegistrationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelServiceRegistrationResponse CancelServiceRegistrationResponse
     */
    public function cancelServiceRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->registrationId)) {
            $query['RegistrationId'] = $request->registrationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelServiceRegistration',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelServiceRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelServiceRegistrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cancel service registration.
     *  *
     * @description Only service registration in the Submitted status can be canceled.
     *  *
     * @param CancelServiceRegistrationRequest $request CancelServiceRegistrationRequest
     *
     * @return CancelServiceRegistrationResponse CancelServiceRegistrationResponse
     */
    public function cancelServiceRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelServiceRegistrationWithOptions($request, $runtime);
    }

    /**
     * @summary Redeploys a service instance after the service instance failed to be deployed.
     *  *
     * @param ContinueDeployServiceInstanceRequest $request ContinueDeployServiceInstanceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ContinueDeployServiceInstanceResponse ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinueDeployServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ContinueDeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ContinueDeployServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Redeploys a service instance after the service instance failed to be deployed.
     *  *
     * @param ContinueDeployServiceInstanceRequest $request ContinueDeployServiceInstanceRequest
     *
     * @return ContinueDeployServiceInstanceResponse ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueDeployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a deployment package.
     *  *
     * @param CreateArtifactRequest $tmpReq  CreateArtifactRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateArtifactResponse CreateArtifactResponse
     */
    public function createArtifactWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateArtifactShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->artifactBuildProperty)) {
            $request->artifactBuildPropertyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->artifactBuildProperty, 'ArtifactBuildProperty', 'json');
        }
        if (!Utils::isUnset($tmpReq->artifactProperty)) {
            $request->artifactPropertyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->artifactProperty, 'ArtifactProperty', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->artifactBuildPropertyShrink)) {
            $query['ArtifactBuildProperty'] = $request->artifactBuildPropertyShrink;
        }
        if (!Utils::isUnset($request->artifactBuildType)) {
            $query['ArtifactBuildType'] = $request->artifactBuildType;
        }
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactPropertyShrink)) {
            $query['ArtifactProperty'] = $request->artifactPropertyShrink;
        }
        if (!Utils::isUnset($request->artifactType)) {
            $query['ArtifactType'] = $request->artifactType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->supportRegionIds)) {
            $query['SupportRegionIds'] = $request->supportRegionIds;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a deployment package.
     *  *
     * @param CreateArtifactRequest $request CreateArtifactRequest
     *
     * @return CreateArtifactResponse CreateArtifactResponse
     */
    public function createArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArtifactWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a service.
     *  *
     * @param CreateServiceRequest $tmpReq  CreateServiceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createServiceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateServiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->complianceMetadata)) {
            $request->complianceMetadataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->complianceMetadata, 'ComplianceMetadata', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alarmMetadata)) {
            $query['AlarmMetadata'] = $request->alarmMetadata;
        }
        if (!Utils::isUnset($request->approvalType)) {
            $query['ApprovalType'] = $request->approvalType;
        }
        if (!Utils::isUnset($request->buildParameters)) {
            $query['BuildParameters'] = $request->buildParameters;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->complianceMetadataShrink)) {
            $query['ComplianceMetadata'] = $request->complianceMetadataShrink;
        }
        if (!Utils::isUnset($request->deployMetadata)) {
            $query['DeployMetadata'] = $request->deployMetadata;
        }
        if (!Utils::isUnset($request->deployType)) {
            $query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->isSupportOperated)) {
            $query['IsSupportOperated'] = $request->isSupportOperated;
        }
        if (!Utils::isUnset($request->licenseMetadata)) {
            $query['LicenseMetadata'] = $request->licenseMetadata;
        }
        if (!Utils::isUnset($request->logMetadata)) {
            $query['LogMetadata'] = $request->logMetadata;
        }
        if (!Utils::isUnset($request->operationMetadata)) {
            $query['OperationMetadata'] = $request->operationMetadata;
        }
        if (!Utils::isUnset($request->policyNames)) {
            $query['PolicyNames'] = $request->policyNames;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resellable)) {
            $query['Resellable'] = $request->resellable;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInfo)) {
            $query['ServiceInfo'] = $request->serviceInfo;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->sourceServiceId)) {
            $query['SourceServiceId'] = $request->sourceServiceId;
        }
        if (!Utils::isUnset($request->sourceServiceVersion)) {
            $query['SourceServiceVersion'] = $request->sourceServiceVersion;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tenantType)) {
            $query['TenantType'] = $request->tenantType;
        }
        if (!Utils::isUnset($request->trialDuration)) {
            $query['TrialDuration'] = $request->trialDuration;
        }
        if (!Utils::isUnset($request->upgradeMetadata)) {
            $query['UpgradeMetadata'] = $request->upgradeMetadata;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a service.
     *  *
     * @param CreateServiceRequest $request CreateServiceRequest
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates and deploys a service instance.
     *  *
     * @param CreateServiceInstanceRequest $tmpReq  CreateServiceInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceInstanceResponse CreateServiceInstanceResponse
     */
    public function createServiceInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateServiceInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates and deploys a service instance.
     *  *
     * @param CreateServiceInstanceRequest $request CreateServiceInstanceRequest
     *
     * @return CreateServiceInstanceResponse CreateServiceInstanceResponse
     */
    public function createServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Create service test case.
     *  *
     * @param CreateServiceTestCaseRequest $request CreateServiceTestCaseRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceTestCaseResponse CreateServiceTestCaseResponse
     */
    public function createServiceTestCaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->testCaseName)) {
            $query['TestCaseName'] = $request->testCaseName;
        }
        if (!Utils::isUnset($request->testConfig)) {
            $query['TestConfig'] = $request->testConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceTestCase',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateServiceTestCaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateServiceTestCaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create service test case.
     *  *
     * @param CreateServiceTestCaseRequest $request CreateServiceTestCaseRequest
     *
     * @return CreateServiceTestCaseResponse CreateServiceTestCaseResponse
     */
    public function createServiceTestCase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceTestCaseWithOptions($request, $runtime);
    }

    /**
     * @summary 创建服务测试任务
     *  *
     * @param CreateServiceTestTaskRequest $request CreateServiceTestTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceTestTaskResponse CreateServiceTestTaskResponse
     */
    public function createServiceTestTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskRegionId)) {
            $query['TaskRegionId'] = $request->taskRegionId;
        }
        if (!Utils::isUnset($request->testCaseIds)) {
            $query['TestCaseIds'] = $request->testCaseIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceTestTask',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateServiceTestTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateServiceTestTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建服务测试任务
     *  *
     * @param CreateServiceTestTaskRequest $request CreateServiceTestTaskRequest
     *
     * @return CreateServiceTestTaskResponse CreateServiceTestTaskResponse
     */
    public function createServiceTestTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceTestTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Create  Service resell application.
     *  *
     * @param CreateServiceUsageRequest $request CreateServiceUsageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceUsageResponse CreateServiceUsageResponse
     */
    public function createServiceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceUsage',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateServiceUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create  Service resell application.
     *  *
     * @param CreateServiceUsageRequest $request CreateServiceUsageRequest
     *
     * @return CreateServiceUsageResponse CreateServiceUsageResponse
     */
    public function createServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary 注册成为服务商
     *  *
     * @param CreateSupplierRegistrationRequest $request CreateSupplierRegistrationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSupplierRegistrationResponse CreateSupplierRegistrationResponse
     */
    public function createSupplierRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactPerson)) {
            $query['ContactPerson'] = $request->contactPerson;
        }
        if (!Utils::isUnset($request->contactPersonTitle)) {
            $query['ContactPersonTitle'] = $request->contactPersonTitle;
        }
        if (!Utils::isUnset($request->enableResellerMode)) {
            $query['EnableResellerMode'] = $request->enableResellerMode;
        }
        if (!Utils::isUnset($request->productAnnualRevenue)) {
            $query['ProductAnnualRevenue'] = $request->productAnnualRevenue;
        }
        if (!Utils::isUnset($request->productBusiness)) {
            $query['ProductBusiness'] = $request->productBusiness;
        }
        if (!Utils::isUnset($request->productDeliveryTypes)) {
            $query['ProductDeliveryTypes'] = $request->productDeliveryTypes;
        }
        if (!Utils::isUnset($request->productPublishTime)) {
            $query['ProductPublishTime'] = $request->productPublishTime;
        }
        if (!Utils::isUnset($request->productSellTypes)) {
            $query['ProductSellTypes'] = $request->productSellTypes;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resellBusinessDesc)) {
            $query['ResellBusinessDesc'] = $request->resellBusinessDesc;
        }
        if (!Utils::isUnset($request->suggestion)) {
            $query['Suggestion'] = $request->suggestion;
        }
        if (!Utils::isUnset($request->supplierDesc)) {
            $query['SupplierDesc'] = $request->supplierDesc;
        }
        if (!Utils::isUnset($request->supplierLogo)) {
            $query['SupplierLogo'] = $request->supplierLogo;
        }
        if (!Utils::isUnset($request->supplierName)) {
            $query['SupplierName'] = $request->supplierName;
        }
        if (!Utils::isUnset($request->supplierNameEn)) {
            $query['SupplierNameEn'] = $request->supplierNameEn;
        }
        if (!Utils::isUnset($request->supplierUrl)) {
            $query['SupplierUrl'] = $request->supplierUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSupplierRegistration',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSupplierRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSupplierRegistrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 注册成为服务商
     *  *
     * @param CreateSupplierRegistrationRequest $request CreateSupplierRegistrationRequest
     *
     * @return CreateSupplierRegistrationResponse CreateSupplierRegistrationResponse
     */
    public function createSupplierRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSupplierRegistrationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an artifact.
     *  *
     * @param DeleteArtifactRequest $request DeleteArtifactRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteArtifactResponse DeleteArtifactResponse
     */
    public function deleteArtifactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactVersion)) {
            $query['ArtifactVersion'] = $request->artifactVersion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an artifact.
     *  *
     * @param DeleteArtifactRequest $request DeleteArtifactRequest
     *
     * @return DeleteArtifactResponse DeleteArtifactResponse
     */
    public function deleteArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteArtifactWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a service.
     *  *
     * @param DeleteServiceRequest $request DeleteServiceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceResponse DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a service.
     *  *
     * @param DeleteServiceRequest $request DeleteServiceRequest
     *
     * @return DeleteServiceResponse DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a service instance.
     *  *
     * @param DeleteServiceInstancesRequest $request DeleteServiceInstancesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceInstancesResponse DeleteServiceInstancesResponse
     */
    public function deleteServiceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceInstances',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteServiceInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a service instance.
     *  *
     * @param DeleteServiceInstancesRequest $request DeleteServiceInstancesRequest
     *
     * @return DeleteServiceInstancesResponse DeleteServiceInstancesResponse
     */
    public function deleteServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除服务测试配置
     *  *
     * @param DeleteServiceTestCaseRequest $request DeleteServiceTestCaseRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceTestCaseResponse DeleteServiceTestCaseResponse
     */
    public function deleteServiceTestCaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->testCaseId)) {
            $query['TestCaseId'] = $request->testCaseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceTestCase',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteServiceTestCaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteServiceTestCaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除服务测试配置
     *  *
     * @param DeleteServiceTestCaseRequest $request DeleteServiceTestCaseRequest
     *
     * @return DeleteServiceTestCaseResponse DeleteServiceTestCaseResponse
     */
    public function deleteServiceTestCase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceTestCaseWithOptions($request, $runtime);
    }

    /**
     * @summary Deploys a service instance.
     *  *
     * @param DeployServiceInstanceRequest $request DeployServiceInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeployServiceInstanceResponse DeployServiceInstanceResponse
     */
    public function deployServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeployServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deploys a service instance.
     *  *
     * @param DeployServiceInstanceRequest $request DeployServiceInstanceRequest
     *
     * @return DeployServiceInstanceResponse DeployServiceInstanceResponse
     */
    public function deployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 生成默认服务测试配置
     *  *
     * @param GenerateDefaultServiceTestConfigRequest $request GenerateDefaultServiceTestConfigRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateDefaultServiceTestConfigResponse GenerateDefaultServiceTestConfigResponse
     */
    public function generateDefaultServiceTestConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDefaultServiceTestConfig',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateDefaultServiceTestConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateDefaultServiceTestConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 生成默认服务测试配置
     *  *
     * @param GenerateDefaultServiceTestConfigRequest $request GenerateDefaultServiceTestConfigRequest
     *
     * @return GenerateDefaultServiceTestConfigResponse GenerateDefaultServiceTestConfigResponse
     */
    public function generateDefaultServiceTestConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDefaultServiceTestConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 生成并校验服务创建stack所需要
     *  *
     * @param GenerateServicePolicyRequest $request GenerateServicePolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateServicePolicyResponse GenerateServicePolicyResponse
     */
    public function generateServicePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationTypes)) {
            $query['OperationTypes'] = $request->operationTypes;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->trialType)) {
            $query['TrialType'] = $request->trialType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateServicePolicy',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateServicePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateServicePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 生成并校验服务创建stack所需要
     *  *
     * @param GenerateServicePolicyRequest $request GenerateServicePolicyRequest
     *
     * @return GenerateServicePolicyResponse GenerateServicePolicyResponse
     */
    public function generateServicePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateServicePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a deployment package.
     *  *
     * @param GetArtifactRequest $request GetArtifactRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetArtifactResponse GetArtifactResponse
     */
    public function getArtifactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactName)) {
            $query['ArtifactName'] = $request->artifactName;
        }
        if (!Utils::isUnset($request->artifactVersion)) {
            $query['ArtifactVersion'] = $request->artifactVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a deployment package.
     *  *
     * @param GetArtifactRequest $request GetArtifactRequest
     *
     * @return GetArtifactResponse GetArtifactResponse
     */
    public function getArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the credentials that are required to upload a deployment package.
     *  *
     * @param GetArtifactRepositoryCredentialsRequest $request GetArtifactRepositoryCredentialsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetArtifactRepositoryCredentialsResponse GetArtifactRepositoryCredentialsResponse
     */
    public function getArtifactRepositoryCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactType)) {
            $query['ArtifactType'] = $request->artifactType;
        }
        if (!Utils::isUnset($request->deployRegionId)) {
            $query['DeployRegionId'] = $request->deployRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetArtifactRepositoryCredentials',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetArtifactRepositoryCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactRepositoryCredentialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the credentials that are required to upload a deployment package.
     *  *
     * @param GetArtifactRepositoryCredentialsRequest $request GetArtifactRepositoryCredentialsRequest
     *
     * @return GetArtifactRepositoryCredentialsResponse GetArtifactRepositoryCredentialsResponse
     */
    public function getArtifactRepositoryCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactRepositoryCredentialsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a service.
     *  *
     * @param GetServiceRequest $request GetServiceRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceResponse GetServiceResponse
     */
    public function getServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterAliUid)) {
            $query['FilterAliUid'] = $request->filterAliUid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->sharedAccountType)) {
            $query['SharedAccountType'] = $request->sharedAccountType;
        }
        if (!Utils::isUnset($request->showDetail)) {
            $query['ShowDetail'] = $request->showDetail;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a service.
     *  *
     * @param GetServiceRequest $request GetServiceRequest
     *
     * @return GetServiceResponse GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the estimated price for creating a service instance.
     *  *
     * @param GetServiceEstimateCostRequest $tmpReq  GetServiceEstimateCostRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceEstimateCostResponse GetServiceEstimateCostResponse
     */
    public function getServiceEstimateCostWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetServiceEstimateCostShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commodity)) {
            $request->commodityShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commodity, 'Commodity', 'json');
        }
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityShrink)) {
            $query['Commodity'] = $request->commodityShrink;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceEstimateCost',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetServiceEstimateCostResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceEstimateCostResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the estimated price for creating a service instance.
     *  *
     * @param GetServiceEstimateCostRequest $request GetServiceEstimateCostRequest
     *
     * @return GetServiceEstimateCostResponse GetServiceEstimateCostResponse
     */
    public function getServiceEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceEstimateCostWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a service instance.
     *  *
     * @param GetServiceInstanceRequest $request GetServiceInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceInstanceResponse GetServiceInstanceResponse
     */
    public function getServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a service instance.
     *  *
     * @param GetServiceInstanceRequest $request GetServiceInstanceRequest
     *
     * @return GetServiceInstanceResponse GetServiceInstanceResponse
     */
    public function getServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 计算巢查询服务是否开通
     *  *
     * @param GetServiceProvisionsRequest $tmpReq  GetServiceProvisionsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceProvisionsResponse GetServiceProvisionsResponse
     */
    public function getServiceProvisionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetServiceProvisionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceProvisions',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetServiceProvisionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceProvisionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 计算巢查询服务是否开通
     *  *
     * @param GetServiceProvisionsRequest $request GetServiceProvisionsRequest
     *
     * @return GetServiceProvisionsResponse GetServiceProvisionsResponse
     */
    public function getServiceProvisions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceProvisionsWithOptions($request, $runtime);
    }

    /**
     * @summary Get service registration detail.
     *  *
     * @param GetServiceRegistrationRequest $request GetServiceRegistrationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceRegistrationResponse GetServiceRegistrationResponse
     */
    public function getServiceRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->registrationId)) {
            $query['RegistrationId'] = $request->registrationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceRegistration',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetServiceRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceRegistrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get service registration detail.
     *  *
     * @param GetServiceRegistrationRequest $request GetServiceRegistrationRequest
     *
     * @return GetServiceRegistrationResponse GetServiceRegistrationResponse
     */
    public function getServiceRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceRegistrationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the valid values of parameters in a Resource Orchestration Service (ROS) template.
     *  *
     * @param GetServiceTemplateParameterConstraintsRequest $request GetServiceTemplateParameterConstraintsRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceTemplateParameterConstraintsResponse GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraintsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deployRegionId)) {
            $query['DeployRegionId'] = $request->deployRegionId;
        }
        if (!Utils::isUnset($request->enablePrivateVpcConnection)) {
            $query['EnablePrivateVpcConnection'] = $request->enablePrivateVpcConnection;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceTemplateParameterConstraints',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetServiceTemplateParameterConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceTemplateParameterConstraintsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the valid values of parameters in a Resource Orchestration Service (ROS) template.
     *  *
     * @param GetServiceTemplateParameterConstraintsRequest $request GetServiceTemplateParameterConstraintsRequest
     *
     * @return GetServiceTemplateParameterConstraintsResponse GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceTemplateParameterConstraintsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取服务测试任务中Cases执行情况
     *  *
     * @param GetServiceTestTaskRequest $request GetServiceTestTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceTestTaskResponse GetServiceTestTaskResponse
     */
    public function getServiceTestTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceTestTask',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetServiceTestTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceTestTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取服务测试任务中Cases执行情况
     *  *
     * @param GetServiceTestTaskRequest $request GetServiceTestTaskRequest
     *
     * @return GetServiceTestTaskResponse GetServiceTestTaskResponse
     */
    public function getServiceTestTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceTestTaskWithOptions($request, $runtime);
    }

    /**
     * @summary
     *  *
     * @param GetSupplierInformationRequest $request GetSupplierInformationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSupplierInformationResponse GetSupplierInformationResponse
     */
    public function getSupplierInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSupplierInformation',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSupplierInformationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSupplierInformationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary
     *  *
     * @param GetSupplierInformationRequest $request GetSupplierInformationRequest
     *
     * @return GetSupplierInformationResponse GetSupplierInformationResponse
     */
    public function getSupplierInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupplierInformationWithOptions($request, $runtime);
    }

    /**
     * @summary Obtain the AccessKey pair of uploaded files.
     *  *
     * @param GetUploadCredentialsRequest $request GetUploadCredentialsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadCredentialsResponse GetUploadCredentialsResponse
     */
    public function getUploadCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUploadCredentials',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUploadCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUploadCredentialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtain the AccessKey pair of uploaded files.
     *  *
     * @param GetUploadCredentialsRequest $request GetUploadCredentialsRequest
     *
     * @return GetUploadCredentialsResponse GetUploadCredentialsResponse
     */
    public function getUploadCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadCredentialsWithOptions($request, $runtime);
    }

    /**
     * @summary 上线服务
     *  *
     * @param LaunchServiceRequest $request LaunchServiceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return LaunchServiceResponse LaunchServiceResponse
     */
    public function launchServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categories)) {
            $query['Categories'] = $request->categories;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->recommend)) {
            $query['Recommend'] = $request->recommend;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LaunchService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return LaunchServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return LaunchServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 上线服务
     *  *
     * @param LaunchServiceRequest $request LaunchServiceRequest
     *
     * @return LaunchServiceResponse LaunchServiceResponse
     */
    public function launchService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of images uploaded to Container Registry.
     *  *
     * @param ListAcrImageRepositoriesRequest $request ListAcrImageRepositoriesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAcrImageRepositoriesResponse ListAcrImageRepositoriesResponse
     */
    public function listAcrImageRepositoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactType)) {
            $query['ArtifactType'] = $request->artifactType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAcrImageRepositories',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAcrImageRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAcrImageRepositoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of images uploaded to Container Registry.
     *  *
     * @param ListAcrImageRepositoriesRequest $request ListAcrImageRepositoriesRequest
     *
     * @return ListAcrImageRepositoriesResponse ListAcrImageRepositoriesResponse
     */
    public function listAcrImageRepositories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcrImageRepositoriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the versions of images that are uploaded to the image repository.
     *  *
     * @param ListAcrImageTagsRequest $request ListAcrImageTagsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAcrImageTagsResponse ListAcrImageTagsResponse
     */
    public function listAcrImageTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactType)) {
            $query['ArtifactType'] = $request->artifactType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->repoId)) {
            $query['RepoId'] = $request->repoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAcrImageTags',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAcrImageTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAcrImageTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the versions of images that are uploaded to the image repository.
     *  *
     * @param ListAcrImageTagsRequest $request ListAcrImageTagsRequest
     *
     * @return ListAcrImageTagsResponse ListAcrImageTagsResponse
     */
    public function listAcrImageTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcrImageTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Get the list of artifact security risks
     *  *
     * @param ListArtifactRisksRequest $request ListArtifactRisksRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListArtifactRisksResponse ListArtifactRisksResponse
     */
    public function listArtifactRisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactVersion)) {
            $query['ArtifactVersion'] = $request->artifactVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListArtifactRisks',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListArtifactRisksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactRisksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get the list of artifact security risks
     *  *
     * @param ListArtifactRisksRequest $request ListArtifactRisksRequest
     *
     * @return ListArtifactRisksResponse ListArtifactRisksResponse
     */
    public function listArtifactRisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactRisksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the version information about a deployment package.
     *  *
     * @param ListArtifactVersionsRequest $tmpReq  ListArtifactVersionsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListArtifactVersionsResponse ListArtifactVersionsResponse
     */
    public function listArtifactVersionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListArtifactVersionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filters)) {
            $request->filtersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->filtersShrink)) {
            $query['Filters'] = $request->filtersShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListArtifactVersions',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListArtifactVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the version information about a deployment package.
     *  *
     * @param ListArtifactVersionsRequest $request ListArtifactVersionsRequest
     *
     * @return ListArtifactVersionsResponse ListArtifactVersionsResponse
     */
    public function listArtifactVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of deployment packages.
     *  *
     * @param ListArtifactsRequest $request ListArtifactsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListArtifactsResponse ListArtifactsResponse
     */
    public function listArtifactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListArtifacts',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListArtifactsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of deployment packages.
     *  *
     * @param ListArtifactsRequest $request ListArtifactsRequest
     *
     * @return ListArtifactsResponse ListArtifactsResponse
     */
    public function listArtifacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactsWithOptions($request, $runtime);
    }

    /**
     * @summary Paginated query of distributor information list
     *  *
     * @param ListResellersRequest $request ListResellersRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResellersResponse ListResellersResponse
     */
    public function listResellersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResellers',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListResellersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResellersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Paginated query of distributor information list
     *  *
     * @param ListResellersRequest $request ListResellersRequest
     *
     * @return ListResellersResponse ListResellersResponse
     */
    public function listResellers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResellersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询服务实例部署详情
     *  *
     * @param ListServiceInstanceDeployDetailsRequest $request ListServiceInstanceDeployDetailsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceInstanceDeployDetailsResponse ListServiceInstanceDeployDetailsResponse
     */
    public function listServiceInstanceDeployDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cycleTimeZone)) {
            $query['CycleTimeZone'] = $request->cycleTimeZone;
        }
        if (!Utils::isUnset($request->cycleType)) {
            $query['CycleType'] = $request->cycleType;
        }
        if (!Utils::isUnset($request->dimension)) {
            $query['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstanceDeployDetails',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceInstanceDeployDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceInstanceDeployDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询服务实例部署详情
     *  *
     * @param ListServiceInstanceDeployDetailsRequest $request ListServiceInstanceDeployDetailsRequest
     *
     * @return ListServiceInstanceDeployDetailsResponse ListServiceInstanceDeployDetailsResponse
     */
    public function listServiceInstanceDeployDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceDeployDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary “Query logs at various levels, including service instance application, instance, and resource.”
     *  *
     * @param ListServiceInstanceLogsRequest $request ListServiceInstanceLogsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceInstanceLogsResponse ListServiceInstanceLogsResponse
     */
    public function listServiceInstanceLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->logSource)) {
            $query['LogSource'] = $request->logSource;
        }
        if (!Utils::isUnset($request->logstore)) {
            $query['Logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstanceLogs',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceInstanceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceInstanceLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary “Query logs at various levels, including service instance application, instance, and resource.”
     *  *
     * @param ListServiceInstanceLogsRequest $request ListServiceInstanceLogsRequest
     *
     * @return ListServiceInstanceLogsResponse ListServiceInstanceLogsResponse
     */
    public function listServiceInstanceLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询服务实例资源
     *  *
     * @param ListServiceInstanceResourcesRequest $request ListServiceInstanceResourcesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceInstanceResourcesResponse ListServiceInstanceResourcesResponse
     */
    public function listServiceInstanceResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceInstanceResourceType)) {
            $query['ServiceInstanceResourceType'] = $request->serviceInstanceResourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstanceResources',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceInstanceResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询服务实例资源
     *  *
     * @param ListServiceInstanceResourcesRequest $request ListServiceInstanceResourcesRequest
     *
     * @return ListServiceInstanceResourcesResponse ListServiceInstanceResourcesResponse
     */
    public function listServiceInstanceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary View the upgrade history of a service instance
     *  *
     * @param ListServiceInstanceUpgradeHistoryRequest $request ListServiceInstanceUpgradeHistoryRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceInstanceUpgradeHistoryResponse ListServiceInstanceUpgradeHistoryResponse
     */
    public function listServiceInstanceUpgradeHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstanceUpgradeHistory',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceInstanceUpgradeHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceInstanceUpgradeHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary View the upgrade history of a service instance
     *  *
     * @param ListServiceInstanceUpgradeHistoryRequest $request ListServiceInstanceUpgradeHistoryRequest
     *
     * @return ListServiceInstanceUpgradeHistoryResponse ListServiceInstanceUpgradeHistoryResponse
     */
    public function listServiceInstanceUpgradeHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceUpgradeHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of service instances.
     *  *
     * @param ListServiceInstancesRequest $request ListServiceInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceInstancesResponse ListServiceInstancesResponse
     */
    public function listServiceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->showDeleted)) {
            $query['ShowDeleted'] = $request->showDeleted;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstances',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of service instances.
     *  *
     * @param ListServiceInstancesRequest $request ListServiceInstancesRequest
     *
     * @return ListServiceInstancesResponse ListServiceInstancesResponse
     */
    public function listServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Query service registrations.
     *  *
     * @param ListServiceRegistrationsRequest $request ListServiceRegistrationsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceRegistrationsResponse ListServiceRegistrationsResponse
     */
    public function listServiceRegistrationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceRegistrations',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceRegistrationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceRegistrationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query service registrations.
     *  *
     * @param ListServiceRegistrationsRequest $request ListServiceRegistrationsRequest
     *
     * @return ListServiceRegistrationsResponse ListServiceRegistrationsResponse
     */
    public function listServiceRegistrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceRegistrationsWithOptions($request, $runtime);
    }

    /**
     * @summary 调用ListServiceSharedAccounts查看服务共享账号列表。
     *  *
     * @param ListServiceSharedAccountsRequest $request ListServiceSharedAccountsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceSharedAccountsResponse ListServiceSharedAccountsResponse
     */
    public function listServiceSharedAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->permission)) {
            $query['Permission'] = $request->permission;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceSharedAccounts',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceSharedAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 调用ListServiceSharedAccounts查看服务共享账号列表。
     *  *
     * @param ListServiceSharedAccountsRequest $request ListServiceSharedAccountsRequest
     *
     * @return ListServiceSharedAccountsResponse ListServiceSharedAccountsResponse
     */
    public function listServiceSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceSharedAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary 服务测试用例列表
     *  *
     * @param ListServiceTestCasesRequest $request ListServiceTestCasesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceTestCasesResponse ListServiceTestCasesResponse
     */
    public function listServiceTestCasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceTestCases',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceTestCasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceTestCasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 服务测试用例列表
     *  *
     * @param ListServiceTestCasesRequest $request ListServiceTestCasesRequest
     *
     * @return ListServiceTestCasesResponse ListServiceTestCasesResponse
     */
    public function listServiceTestCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceTestCasesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取服务测试实时日志
     *  *
     * @param ListServiceTestTaskLogsRequest $request ListServiceTestTaskLogsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceTestTaskLogsResponse ListServiceTestTaskLogsResponse
     */
    public function listServiceTestTaskLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceTestTaskLogs',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceTestTaskLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceTestTaskLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取服务测试实时日志
     *  *
     * @param ListServiceTestTaskLogsRequest $request ListServiceTestTaskLogsRequest
     *
     * @return ListServiceTestTaskLogsResponse ListServiceTestTaskLogsResponse
     */
    public function listServiceTestTaskLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceTestTaskLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取任务执行列表
     *  *
     * @param ListServiceTestTasksRequest $request ListServiceTestTasksRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceTestTasksResponse ListServiceTestTasksResponse
     */
    public function listServiceTestTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceTestTasks',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceTestTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceTestTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取任务执行列表
     *  *
     * @param ListServiceTestTasksRequest $request ListServiceTestTasksRequest
     *
     * @return ListServiceTestTasksResponse ListServiceTestTasksResponse
     */
    public function listServiceTestTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceTestTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the applications for using a service.
     *  *
     * @param ListServiceUsagesRequest $request ListServiceUsagesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceUsagesResponse ListServiceUsagesResponse
     */
    public function listServiceUsagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->supplierRole)) {
            $query['SupplierRole'] = $request->supplierRole;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceUsages',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServiceUsagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceUsagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the applications for using a service.
     *  *
     * @param ListServiceUsagesRequest $request ListServiceUsagesRequest
     *
     * @return ListServiceUsagesResponse ListServiceUsagesResponse
     */
    public function listServiceUsages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceUsagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of services.
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allVersions)) {
            $query['AllVersions'] = $request->allVersions;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of services.
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询服务商入职审核列表
     *  *
     * @param ListSupplierRegistrationsRequest $request ListSupplierRegistrationsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSupplierRegistrationsResponse ListSupplierRegistrationsResponse
     */
    public function listSupplierRegistrationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSupplierRegistrations',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSupplierRegistrationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSupplierRegistrationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询服务商入职审核列表
     *  *
     * @param ListSupplierRegistrationsRequest $request ListSupplierRegistrationsRequest
     *
     * @return ListSupplierRegistrationsResponse ListSupplierRegistrationsResponse
     */
    public function listSupplierRegistrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupplierRegistrationsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询标签键列表
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagKeysResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询标签键列表
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资源标签
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询资源标签
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询标签值列表
     *  *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagValuesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询标签值列表
     *  *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the resource information about a service instance.
     *  *
     * @param ModifyServiceInstanceResourcesRequest $request ModifyServiceInstanceResourcesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyServiceInstanceResourcesResponse ModifyServiceInstanceResourcesResponse
     */
    public function modifyServiceInstanceResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceInstanceResourcesAction)) {
            $query['ServiceInstanceResourcesAction'] = $request->serviceInstanceResourcesAction;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyServiceInstanceResources',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyServiceInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyServiceInstanceResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the resource information about a service instance.
     *  *
     * @param ModifyServiceInstanceResourcesRequest $request ModifyServiceInstanceResourcesRequest
     *
     * @return ModifyServiceInstanceResourcesResponse ModifyServiceInstanceResourcesResponse
     */
    public function modifyServiceInstanceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyServiceInstanceResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 预发布服务
     *  *
     * @param PreLaunchServiceRequest $request PreLaunchServiceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PreLaunchServiceResponse PreLaunchServiceResponse
     */
    public function preLaunchServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreLaunchService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PreLaunchServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PreLaunchServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 预发布服务
     *  *
     * @param PreLaunchServiceRequest $request PreLaunchServiceRequest
     *
     * @return PreLaunchServiceResponse PreLaunchServiceResponse
     */
    public function preLaunchService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preLaunchServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Pushes metering data of an Alibaba Cloud Marketplace commodity.
     *  *
     * @param PushMeteringDataRequest $request PushMeteringDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PushMeteringDataResponse PushMeteringDataResponse
     */
    public function pushMeteringDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->metering)) {
            $query['Metering'] = $request->metering;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushMeteringData',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PushMeteringDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Pushes metering data of an Alibaba Cloud Marketplace commodity.
     *  *
     * @param PushMeteringDataRequest $request PushMeteringDataRequest
     *
     * @return PushMeteringDataResponse PushMeteringDataResponse
     */
    public function pushMeteringData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMeteringDataWithOptions($request, $runtime);
    }

    /**
     * @summary Registers an artifact.
     *  *
     * @param RegisterServiceRequest $request RegisterServiceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterServiceResponse RegisterServiceResponse
     */
    public function registerServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RegisterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Registers an artifact.
     *  *
     * @param RegisterServiceRequest $request RegisterServiceRequest
     *
     * @return RegisterServiceResponse RegisterServiceResponse
     */
    public function registerService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Reject service usage.
     *  *
     * @param RejectServiceUsageRequest $request RejectServiceUsageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RejectServiceUsageResponse RejectServiceUsageResponse
     */
    public function rejectServiceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userAliUid)) {
            $query['UserAliUid'] = $request->userAliUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectServiceUsage',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RejectServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RejectServiceUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Reject service usage.
     *  *
     * @param RejectServiceUsageRequest $request RejectServiceUsageRequest
     *
     * @return RejectServiceUsageResponse RejectServiceUsageResponse
     */
    public function rejectServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectServiceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Publishes an artifact.
     *  *
     * @param ReleaseArtifactRequest $request ReleaseArtifactRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseArtifactResponse ReleaseArtifactResponse
     */
    public function releaseArtifactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReleaseArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Publishes an artifact.
     *  *
     * @param ReleaseArtifactRequest $request ReleaseArtifactRequest
     *
     * @return ReleaseArtifactResponse ReleaseArtifactResponse
     */
    public function releaseArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseArtifactWithOptions($request, $runtime);
    }

    /**
     * @summary Remove  service shared account.
     *  *
     * @param RemoveServiceSharedAccountsRequest $request RemoveServiceSharedAccountsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveServiceSharedAccountsResponse RemoveServiceSharedAccountsResponse
     */
    public function removeServiceSharedAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userAliUids)) {
            $query['UserAliUids'] = $request->userAliUids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveServiceSharedAccounts',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveServiceSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveServiceSharedAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Remove  service shared account.
     *  *
     * @param RemoveServiceSharedAccountsRequest $request RemoveServiceSharedAccountsRequest
     *
     * @return RemoveServiceSharedAccountsResponse RemoveServiceSharedAccountsResponse
     */
    public function removeServiceSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeServiceSharedAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary When the service instance is Deployed, call the RestartServiceInstance interface to restart the service instance.
     *  *
     * @param RestartServiceInstanceRequest $request RestartServiceInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartServiceInstanceResponse RestartServiceInstanceResponse
     */
    public function restartServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RestartServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary When the service instance is Deployed, call the RestartServiceInstance interface to restart the service instance.
     *  *
     * @param RestartServiceInstanceRequest $request RestartServiceInstanceRequest
     *
     * @return RestartServiceInstanceResponse RestartServiceInstanceResponse
     */
    public function restartServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Rollback Service Instance
     *  *
     * @param RollbackServiceInstanceRequest $request RollbackServiceInstanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackServiceInstanceResponse RollbackServiceInstanceResponse
     */
    public function rollbackServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RollbackServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RollbackServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Rollback Service Instance
     *  *
     * @param RollbackServiceInstanceRequest $request RollbackServiceInstanceRequest
     *
     * @return RollbackServiceInstanceResponse RollbackServiceInstanceResponse
     */
    public function rollbackServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary When the service instance status is Stopped (Stopped) or StartFailed (Startup failed), the StartServiceInstance interface is invoked to start the service instance.
     *  *
     * @param StartServiceInstanceRequest $request StartServiceInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StartServiceInstanceResponse StartServiceInstanceResponse
     */
    public function startServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary When the service instance status is Stopped (Stopped) or StartFailed (Startup failed), the StartServiceInstance interface is invoked to start the service instance.
     *  *
     * @param StartServiceInstanceRequest $request StartServiceInstanceRequest
     *
     * @return StartServiceInstanceResponse StartServiceInstanceResponse
     */
    public function startServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary When the service instance is Deployed and StopFailed, call the StopServiceInstance interface to stop the service instance.
     *  *
     * @param StopServiceInstanceRequest $request StopServiceInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StopServiceInstanceResponse StopServiceInstanceResponse
     */
    public function stopServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary When the service instance is Deployed and StopFailed, call the StopServiceInstance interface to stop the service instance.
     *  *
     * @param StopServiceInstanceRequest $request StopServiceInstanceRequest
     *
     * @return StopServiceInstanceResponse StopServiceInstanceResponse
     */
    public function stopServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 给资源打标签
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 给资源打标签
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 资源解绑标签
     *  *
     * @param UnTagResourcesRequest $request UnTagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UnTagResourcesResponse UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnTagResources',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 资源解绑标签
     *  *
     * @param UnTagResourcesRequest $request UnTagResourcesRequest
     *
     * @return UnTagResourcesResponse UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a deployment package.
     *  *
     * @param UpdateArtifactRequest $tmpReq  UpdateArtifactRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateArtifactResponse UpdateArtifactResponse
     */
    public function updateArtifactWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateArtifactShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->artifactBuildProperty)) {
            $request->artifactBuildPropertyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->artifactBuildProperty, 'ArtifactBuildProperty', 'json');
        }
        if (!Utils::isUnset($tmpReq->artifactProperty)) {
            $request->artifactPropertyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->artifactProperty, 'ArtifactProperty', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->artifactBuildPropertyShrink)) {
            $query['ArtifactBuildProperty'] = $request->artifactBuildPropertyShrink;
        }
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactPropertyShrink)) {
            $query['ArtifactProperty'] = $request->artifactPropertyShrink;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->permissionType)) {
            $query['PermissionType'] = $request->permissionType;
        }
        if (!Utils::isUnset($request->supportRegionIds)) {
            $query['SupportRegionIds'] = $request->supportRegionIds;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a deployment package.
     *  *
     * @param UpdateArtifactRequest $request UpdateArtifactRequest
     *
     * @return UpdateArtifactResponse UpdateArtifactResponse
     */
    public function updateArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateArtifactWithOptions($request, $runtime);
    }

    /**
     * @summary Update a service.
     *  *
     * @param UpdateServiceRequest $tmpReq  UpdateServiceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceResponse UpdateServiceResponse
     */
    public function updateServiceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateServiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commodity)) {
            $request->commodityShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commodity, 'Commodity', 'json');
        }
        if (!Utils::isUnset($tmpReq->complianceMetadata)) {
            $request->complianceMetadataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->complianceMetadata, 'ComplianceMetadata', 'json');
        }
        if (!Utils::isUnset($tmpReq->updateOption)) {
            $request->updateOptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateOption, 'UpdateOption', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alarmMetadata)) {
            $query['AlarmMetadata'] = $request->alarmMetadata;
        }
        if (!Utils::isUnset($request->approvalType)) {
            $query['ApprovalType'] = $request->approvalType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityShrink)) {
            $query['Commodity'] = $request->commodityShrink;
        }
        if (!Utils::isUnset($request->complianceMetadataShrink)) {
            $query['ComplianceMetadata'] = $request->complianceMetadataShrink;
        }
        if (!Utils::isUnset($request->deployMetadata)) {
            $query['DeployMetadata'] = $request->deployMetadata;
        }
        if (!Utils::isUnset($request->deployType)) {
            $query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->isSupportOperated)) {
            $query['IsSupportOperated'] = $request->isSupportOperated;
        }
        if (!Utils::isUnset($request->licenseMetadata)) {
            $query['LicenseMetadata'] = $request->licenseMetadata;
        }
        if (!Utils::isUnset($request->logMetadata)) {
            $query['LogMetadata'] = $request->logMetadata;
        }
        if (!Utils::isUnset($request->operationMetadata)) {
            $query['OperationMetadata'] = $request->operationMetadata;
        }
        if (!Utils::isUnset($request->policyNames)) {
            $query['PolicyNames'] = $request->policyNames;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resellable)) {
            $query['Resellable'] = $request->resellable;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInfo)) {
            $query['ServiceInfo'] = $request->serviceInfo;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->tenantType)) {
            $query['TenantType'] = $request->tenantType;
        }
        if (!Utils::isUnset($request->trialDuration)) {
            $query['TrialDuration'] = $request->trialDuration;
        }
        if (!Utils::isUnset($request->updateOptionShrink)) {
            $query['UpdateOption'] = $request->updateOptionShrink;
        }
        if (!Utils::isUnset($request->upgradeMetadata)) {
            $query['UpgradeMetadata'] = $request->upgradeMetadata;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update a service.
     *  *
     * @param UpdateServiceRequest $request UpdateServiceRequest
     *
     * @return UpdateServiceResponse UpdateServiceResponse
     */
    public function updateService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the properties of a service instance.
     *  *
     * @param UpdateServiceInstanceAttributeRequest $tmpReq  UpdateServiceInstanceAttributeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceInstanceAttributeResponse UpdateServiceInstanceAttributeResponse
     */
    public function updateServiceInstanceAttributeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateServiceInstanceAttributeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->licenseData)) {
            $request->licenseDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->licenseData, 'LicenseData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->licenseDataShrink)) {
            $query['LicenseData'] = $request->licenseDataShrink;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceInstanceAttribute',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateServiceInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceInstanceAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the properties of a service instance.
     *  *
     * @param UpdateServiceInstanceAttributeRequest $request UpdateServiceInstanceAttributeRequest
     *
     * @return UpdateServiceInstanceAttributeResponse UpdateServiceInstanceAttributeResponse
     */
    public function updateServiceInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configurations of a service instance.
     *  *
     * @param UpdateServiceInstanceSpecRequest $tmpReq  UpdateServiceInstanceSpecRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceInstanceSpecResponse UpdateServiceInstanceSpecResponse
     */
    public function updateServiceInstanceSpecWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateServiceInstanceSpecShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableUserPrometheus)) {
            $query['EnableUserPrometheus'] = $request->enableUserPrometheus;
        }
        if (!Utils::isUnset($request->operationName)) {
            $query['OperationName'] = $request->operationName;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->predefinedParametersName)) {
            $query['PredefinedParametersName'] = $request->predefinedParametersName;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceInstanceSpec',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateServiceInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceInstanceSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of a service instance.
     *  *
     * @param UpdateServiceInstanceSpecRequest $request UpdateServiceInstanceSpecRequest
     *
     * @return UpdateServiceInstanceSpecResponse UpdateServiceInstanceSpecResponse
     */
    public function updateServiceInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @summary 修改服务测试用例
     *  *
     * @param UpdateServiceTestCaseRequest $request UpdateServiceTestCaseRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceTestCaseResponse UpdateServiceTestCaseResponse
     */
    public function updateServiceTestCaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->testCaseId)) {
            $query['TestCaseId'] = $request->testCaseId;
        }
        if (!Utils::isUnset($request->testCaseName)) {
            $query['TestCaseName'] = $request->testCaseName;
        }
        if (!Utils::isUnset($request->testConfig)) {
            $query['TestConfig'] = $request->testConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceTestCase',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateServiceTestCaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceTestCaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 修改服务测试用例
     *  *
     * @param UpdateServiceTestCaseRequest $request UpdateServiceTestCaseRequest
     *
     * @return UpdateServiceTestCaseResponse UpdateServiceTestCaseResponse
     */
    public function updateServiceTestCase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceTestCaseWithOptions($request, $runtime);
    }

    /**
     * @summary Update Service Sharing Permissions
     *  *
     * @param UpdateSharedAccountPermissionRequest $request UpdateSharedAccountPermissionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSharedAccountPermissionResponse UpdateSharedAccountPermissionResponse
     */
    public function updateSharedAccountPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->permission)) {
            $query['Permission'] = $request->permission;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userAliUid)) {
            $query['UserAliUid'] = $request->userAliUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSharedAccountPermission',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSharedAccountPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSharedAccountPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update Service Sharing Permissions
     *  *
     * @param UpdateSharedAccountPermissionRequest $request UpdateSharedAccountPermissionRequest
     *
     * @return UpdateSharedAccountPermissionResponse UpdateSharedAccountPermissionResponse
     */
    public function updateSharedAccountPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSharedAccountPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新供应商全局信息
     *  *
     * @param UpdateSupplierInformationRequest $request UpdateSupplierInformationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSupplierInformationResponse UpdateSupplierInformationResponse
     */
    public function updateSupplierInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliverySettings)) {
            $query['DeliverySettings'] = $request->deliverySettings;
        }
        if (!Utils::isUnset($request->operationIp)) {
            $query['OperationIp'] = $request->operationIp;
        }
        if (!Utils::isUnset($request->operationMfaPresent)) {
            $query['OperationMfaPresent'] = $request->operationMfaPresent;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->supplierDesc)) {
            $query['SupplierDesc'] = $request->supplierDesc;
        }
        if (!Utils::isUnset($request->supplierLogo)) {
            $query['SupplierLogo'] = $request->supplierLogo;
        }
        if (!Utils::isUnset($request->supplierUrl)) {
            $query['SupplierUrl'] = $request->supplierUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSupplierInformation',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSupplierInformationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSupplierInformationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新供应商全局信息
     *  *
     * @param UpdateSupplierInformationRequest $request UpdateSupplierInformationRequest
     *
     * @return UpdateSupplierInformationResponse UpdateSupplierInformationResponse
     */
    public function updateSupplierInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSupplierInformationWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades a service instance.
     *  *
     * @param UpgradeServiceInstanceRequest $tmpReq  UpgradeServiceInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeServiceInstanceResponse UpgradeServiceInstanceResponse
     */
    public function upgradeServiceInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpgradeServiceInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Upgrades a service instance.
     *  *
     * @param UpgradeServiceInstanceRequest $request UpgradeServiceInstanceRequest
     *
     * @return UpgradeServiceInstanceResponse UpgradeServiceInstanceResponse
     */
    public function upgradeServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Withdraw service version.
     *  *
     * @param WithdrawServiceRequest $request WithdrawServiceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return WithdrawServiceResponse WithdrawServiceResponse
     */
    public function withdrawServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WithdrawService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return WithdrawServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return WithdrawServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Withdraw service version.
     *  *
     * @param WithdrawServiceRequest $request WithdrawServiceRequest
     *
     * @return WithdrawServiceResponse WithdrawServiceResponse
     */
    public function withdrawService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawServiceWithOptions($request, $runtime);
    }
}
