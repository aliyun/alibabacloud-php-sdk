<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CancelServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CancelServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CheckServiceDeployableRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CheckServiceDeployableResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateBackupRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateBackupResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateRestoreTaskRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateRestoreTaskResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceUsageShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateSkillFileDetectRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateSkillFileDetectResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateSkillHubConfigRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateSkillHubConfigResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateSkillRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateSkillResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateSkillSpaceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateSkillSpaceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteSkillRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteSkillResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteSkillSpaceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteSkillSpaceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetBackupRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetBackupResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetNetworkAvailableZonesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetNetworkAvailableZonesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceEstimateCostRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceEstimateCostResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceEstimateCostShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillFileDetectResultRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillFileDetectResultResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillHubConfigRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillHubConfigResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillSpaceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillSpaceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetUserInformationRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetUserInformationResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListBackupsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListBackupsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPublicSkillsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPublicSkillsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListRestoreTasksRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListRestoreTasksResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceCategoriesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceBillRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceBillResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceResourcesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceResourcesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceUpgradeHistoryRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceUpgradeHistoryResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceUsagesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceUsagesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListSkillFilesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListSkillFilesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListSkillSpacesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListSkillSpacesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListSkillsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListSkillsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RestartServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RestartServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RollbackServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RollbackServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\StartServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\StartServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\StopServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\StopServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceInstanceAttributesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceInstanceAttributesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceInstanceSpecRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceInstanceSpecResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceUsageShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateSkillRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateSkillResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateUserInformationRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateUserInformationResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpgradeServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpgradeServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpgradeServiceInstanceShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ValidateServiceInstanceNameRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ValidateServiceInstanceNameResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ComputeNest extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('computenest', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Cancels a service usage request.
     *
     * @param request - CancelServiceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelServiceUsageResponse
     *
     * @param CancelServiceUsageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelServiceUsageResponse
     */
    public function cancelServiceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->needDelete) {
            @$query['NeedDelete'] = $request->needDelete;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelServiceUsage',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a service usage request.
     *
     * @param request - CancelServiceUsageRequest
     *
     * @returns CancelServiceUsageResponse
     *
     * @param CancelServiceUsageRequest $request
     *
     * @return CancelServiceUsageResponse
     */
    public function cancelServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelServiceUsageWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group for a cloud resource.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group for a cloud resource.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Performs a precheck to verify that a service instance can be deployed.
     *
     * @param request - CheckServiceDeployableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckServiceDeployableResponse
     *
     * @param CheckServiceDeployableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceDeployableResponse
     */
    public function checkServiceDeployableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->postPaidAmount) {
            @$query['PostPaidAmount'] = $request->postPaidAmount;
        }

        if (null !== $request->prePaidAmount) {
            @$query['PrePaidAmount'] = $request->prePaidAmount;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->trialType) {
            @$query['TrialType'] = $request->trialType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckServiceDeployable',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckServiceDeployableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a precheck to verify that a service instance can be deployed.
     *
     * @param request - CheckServiceDeployableRequest
     *
     * @returns CheckServiceDeployableResponse
     *
     * @param CheckServiceDeployableRequest $request
     *
     * @return CheckServiceDeployableResponse
     */
    public function checkServiceDeployable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceDeployableWithOptions($request, $runtime);
    }

    /**
     * If a service instance fails to deploy, you can call the ContinueDeployServiceInstance operation to resume the deployment.
     *
     * @remarks
     * If a private service instance that uses the ROS deployment type fails to deploy, you can call the ContinueDeployServiceInstance operation to resume the deployment.
     *
     * @param request - ContinueDeployServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinueDeployServiceInstanceResponse
     *
     * @param ContinueDeployServiceInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ContinueDeployServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContinueDeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If a service instance fails to deploy, you can call the ContinueDeployServiceInstance operation to resume the deployment.
     *
     * @remarks
     * If a private service instance that uses the ROS deployment type fails to deploy, you can call the ContinueDeployServiceInstance operation to resume the deployment.
     *
     * @param request - ContinueDeployServiceInstanceRequest
     *
     * @returns ContinueDeployServiceInstanceResponse
     *
     * @param ContinueDeployServiceInstanceRequest $request
     *
     * @return ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueDeployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a backup for a Compute Nest service instance.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade/downgrade feature and configured the corresponding parameters when the service was created.
     *
     * @param request - CreateBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupResponse
     *
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackup',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backup for a Compute Nest service instance.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade/downgrade feature and configured the corresponding parameters when the service was created.
     *
     * @param request - CreateBackupRequest
     *
     * @returns CreateBackupResponse
     *
     * @param CreateBackupRequest $request
     *
     * @return CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * Creates a restore job.
     *
     * @remarks
     * ### Prerequisites
     * Before you call this operation, ensure that the service provider enabled the upgrade and downgrade feature and configured its parameters when the service was created.
     *
     * @param request - CreateRestoreTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRestoreTaskResponse
     *
     * @param CreateRestoreTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRestoreTaskResponse
     */
    public function createRestoreTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRestoreTask',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRestoreTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a restore job.
     *
     * @remarks
     * ### Prerequisites
     * Before you call this operation, ensure that the service provider enabled the upgrade and downgrade feature and configured its parameters when the service was created.
     *
     * @param request - CreateRestoreTaskRequest
     *
     * @returns CreateRestoreTaskResponse
     *
     * @param CreateRestoreTaskRequest $request
     *
     * @return CreateRestoreTaskResponse
     */
    public function createRestoreTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRestoreTaskWithOptions($request, $runtime);
    }

    /**
     * Creates and deploys a service instance in Compute Nest by specifying parameters such as a region ID, a service instance name, and a service ID.
     *
     * @param tmpReq - CreateServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceInstanceResponse
     *
     * @param CreateServiceInstanceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateServiceInstanceResponse
     */
    public function createServiceInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateServiceInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commodity) {
            @$query['Commodity'] = $request->commodity;
        }

        if (null !== $request->contactGroup) {
            @$query['ContactGroup'] = $request->contactGroup;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->enableInstanceOps) {
            @$query['EnableInstanceOps'] = $request->enableInstanceOps;
        }

        if (null !== $request->enableUserPrometheus) {
            @$query['EnableUserPrometheus'] = $request->enableUserPrometheus;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->operationMetadata) {
            @$query['OperationMetadata'] = $request->operationMetadata;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceAutoPay) {
            @$query['ResourceAutoPay'] = $request->resourceAutoPay;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->specificationCode) {
            @$query['SpecificationCode'] = $request->specificationCode;
        }

        if (null !== $request->specificationName) {
            @$query['SpecificationName'] = $request->specificationName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->trialType) {
            @$query['TrialType'] = $request->trialType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and deploys a service instance in Compute Nest by specifying parameters such as a region ID, a service instance name, and a service ID.
     *
     * @param request - CreateServiceInstanceRequest
     *
     * @returns CreateServiceInstanceResponse
     *
     * @param CreateServiceInstanceRequest $request
     *
     * @return CreateServiceInstanceResponse
     */
    public function createServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a service usage request.
     *
     * @param tmpReq - CreateServiceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceUsageResponse
     *
     * @param CreateServiceUsageRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateServiceUsageResponse
     */
    public function createServiceUsageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateServiceUsageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userInformation) {
            $request->userInformationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInformation, 'UserInformation', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->userInformationShrink) {
            @$query['UserInformation'] = $request->userInformationShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceUsage',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service usage request.
     *
     * @param request - CreateServiceUsageRequest
     *
     * @returns CreateServiceUsageResponse
     *
     * @param CreateServiceUsageRequest $request
     *
     * @return CreateServiceUsageResponse
     */
    public function createServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceUsageWithOptions($request, $runtime);
    }

    /**
     * Creates a Skill.
     *
     * @remarks
     * ### Prerequisites
     * Before you begin, ensure that the service provider has enabled the modification feature and configured its parameters during service creation.
     *
     * @param request - CreateSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillResponse
     *
     * @param CreateSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSkillResponse
     */
    public function createSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ossUrl) {
            @$query['OssUrl'] = $request->ossUrl;
        }

        if (null !== $request->skillDescription) {
            @$query['SkillDescription'] = $request->skillDescription;
        }

        if (null !== $request->skillLabels) {
            @$query['SkillLabels'] = $request->skillLabels;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->skillSpaceId) {
            @$query['SkillSpaceId'] = $request->skillSpaceId;
        }

        if (null !== $request->sourceSkillId) {
            @$query['SourceSkillId'] = $request->sourceSkillId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSkill',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Skill.
     *
     * @remarks
     * ### Prerequisites
     * Before you begin, ensure that the service provider has enabled the modification feature and configured its parameters during service creation.
     *
     * @param request - CreateSkillRequest
     *
     * @returns CreateSkillResponse
     *
     * @param CreateSkillRequest $request
     *
     * @return CreateSkillResponse
     */
    public function createSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillWithOptions($request, $runtime);
    }

    /**
     * Creates a Skill file detection task.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled the modification feature and configured its parameters during service creation.
     *
     * @param request - CreateSkillFileDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillFileDetectResponse
     *
     * @param CreateSkillFileDetectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSkillFileDetectResponse
     */
    public function createSkillFileDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ossUrl) {
            @$query['OssUrl'] = $request->ossUrl;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSkillFileDetect',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillFileDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Skill file detection task.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled the modification feature and configured its parameters during service creation.
     *
     * @param request - CreateSkillFileDetectRequest
     *
     * @returns CreateSkillFileDetectResponse
     *
     * @param CreateSkillFileDetectRequest $request
     *
     * @return CreateSkillFileDetectResponse
     */
    public function createSkillFileDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillFileDetectWithOptions($request, $runtime);
    }

    /**
     * Creates a SkillHub config.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled the modify configuration feature and set the required parameters.
     *
     * @param request - CreateSkillHubConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillHubConfigResponse
     *
     * @param CreateSkillHubConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSkillHubConfigResponse
     */
    public function createSkillHubConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossRegionId) {
            @$query['OssRegionId'] = $request->ossRegionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSkillHubConfig',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillHubConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a SkillHub config.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled the modify configuration feature and set the required parameters.
     *
     * @param request - CreateSkillHubConfigRequest
     *
     * @returns CreateSkillHubConfigResponse
     *
     * @param CreateSkillHubConfigRequest $request
     *
     * @return CreateSkillHubConfigResponse
     */
    public function createSkillHubConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillHubConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a skill space.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider has enabled the modify configuration feature and set the required parameters during service creation.
     *
     * @param request - CreateSkillSpaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillSpaceResponse
     *
     * @param CreateSkillSpaceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillSpaceResponse
     */
    public function createSkillSpaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->skillSpaceDescription) {
            @$query['SkillSpaceDescription'] = $request->skillSpaceDescription;
        }

        if (null !== $request->skillSpaceName) {
            @$query['SkillSpaceName'] = $request->skillSpaceName;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSkillSpace',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a skill space.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider has enabled the modify configuration feature and set the required parameters during service creation.
     *
     * @param request - CreateSkillSpaceRequest
     *
     * @returns CreateSkillSpaceResponse
     *
     * @param CreateSkillSpaceRequest $request
     *
     * @return CreateSkillSpaceResponse
     */
    public function createSkillSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillSpaceWithOptions($request, $runtime);
    }

    /**
     * Deletes a Compute Nest instance backup.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade/downgrade feature and configured the upgrade/downgrade parameters when the service was created.
     *
     * @param request - DeleteBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupResponse
     *
     * @param DeleteBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackup',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Compute Nest instance backup.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade/downgrade feature and configured the upgrade/downgrade parameters when the service was created.
     *
     * @param request - DeleteBackupRequest
     *
     * @returns DeleteBackupResponse
     *
     * @param DeleteBackupRequest $request
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupWithOptions($request, $runtime);
    }

    /**
     * Deletes the specified service instances in a region.
     *
     * @param request - DeleteServiceInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceInstancesResponse
     *
     * @param DeleteServiceInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceInstances',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the specified service instances in a region.
     *
     * @param request - DeleteServiceInstancesRequest
     *
     * @returns DeleteServiceInstancesResponse
     *
     * @param DeleteServiceInstancesRequest $request
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * Deletes a skill.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider has enabled the modification feature and configured the modification parameters when creating the service.
     *
     * @param request - DeleteSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillResponse
     *
     * @param DeleteSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSkill',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a skill.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider has enabled the modification feature and configured the modification parameters when creating the service.
     *
     * @param request - DeleteSkillRequest
     *
     * @returns DeleteSkillResponse
     *
     * @param DeleteSkillRequest $request
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillWithOptions($request, $runtime);
    }

    /**
     * Deletes a SkillSpace.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the modify configuration feature and set the required parameters during service creation.
     *
     * @param request - DeleteSkillSpaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillSpaceResponse
     *
     * @param DeleteSkillSpaceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSkillSpaceResponse
     */
    public function deleteSkillSpaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->skillSpaceId) {
            @$query['SkillSpaceId'] = $request->skillSpaceId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSkillSpace',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSkillSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a SkillSpace.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the modify configuration feature and set the required parameters during service creation.
     *
     * @param request - DeleteSkillSpaceRequest
     *
     * @returns DeleteSkillSpaceResponse
     *
     * @param DeleteSkillSpaceRequest $request
     *
     * @return DeleteSkillSpaceResponse
     */
    public function deleteSkillSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillSpaceWithOptions($request, $runtime);
    }

    /**
     * Deploys a service instance.
     *
     * @param request - DeployServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployServiceInstanceResponse
     *
     * @param DeployServiceInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeployServiceInstanceResponse
     */
    public function deployServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys a service instance.
     *
     * @param request - DeployServiceInstanceRequest
     *
     * @returns DeployServiceInstanceResponse
     *
     * @param DeployServiceInstanceRequest $request
     *
     * @return DeployServiceInstanceResponse
     */
    public function deployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the available regions.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available regions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * Check for missing access policies before you create a service instance.
     *
     * @param tmpReq - GenerateServicePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateServicePolicyResponse
     *
     * @param GenerateServicePolicyRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateServicePolicyResponse
     */
    public function generateServicePolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateServicePolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->operationTypes) {
            @$query['OperationTypes'] = $request->operationTypes;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->trialType) {
            @$query['TrialType'] = $request->trialType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateServicePolicy',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateServicePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check for missing access policies before you create a service instance.
     *
     * @param request - GenerateServicePolicyRequest
     *
     * @returns GenerateServicePolicyResponse
     *
     * @param GenerateServicePolicyRequest $request
     *
     * @return GenerateServicePolicyResponse
     */
    public function generateServicePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateServicePolicyWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a backup.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade and downgrade feature and configured its parameters when the service was created.
     *
     * @param request - GetBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBackupResponse
     *
     * @param GetBackupRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetBackupResponse
     */
    public function getBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBackup',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a backup.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade and downgrade feature and configured its parameters when the service was created.
     *
     * @param request - GetBackupRequest
     *
     * @returns GetBackupResponse
     *
     * @param GetBackupRequest $request
     *
     * @return GetBackupResponse
     */
    public function getBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupWithOptions($request, $runtime);
    }

    /**
     * Returns a list of available zones for a specified region.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade/downgrade feature and set the related parameters when the service was created.
     *
     * @param request - GetNetworkAvailableZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetworkAvailableZonesResponse
     *
     * @param GetNetworkAvailableZonesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetNetworkAvailableZonesResponse
     */
    public function getNetworkAvailableZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isPoc) {
            @$body['IsPoc'] = $request->isPoc;
        }

        if (null !== $request->networkRegionId) {
            @$body['NetworkRegionId'] = $request->networkRegionId;
        }

        if (null !== $request->privateVpcConnectionMode) {
            @$body['PrivateVpcConnectionMode'] = $request->privateVpcConnectionMode;
        }

        if (null !== $request->serviceId) {
            @$body['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceEndpointServiceType) {
            @$body['ServiceInstanceEndpointServiceType'] = $request->serviceInstanceEndpointServiceType;
        }

        if (null !== $request->serviceRegionId) {
            @$body['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->serviceVersion) {
            @$body['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNetworkAvailableZones',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNetworkAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns a list of available zones for a specified region.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade/downgrade feature and set the related parameters when the service was created.
     *
     * @param request - GetNetworkAvailableZonesRequest
     *
     * @returns GetNetworkAvailableZonesResponse
     *
     * @param GetNetworkAvailableZonesRequest $request
     *
     * @return GetNetworkAvailableZonesResponse
     */
    public function getNetworkAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a specified service.
     *
     * @param request - GetServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceResponse
     *
     * @param GetServiceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->showDetails) {
            @$query['ShowDetails'] = $request->showDetails;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetService',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified service.
     *
     * @param request - GetServiceRequest
     *
     * @returns GetServiceResponse
     *
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the estimated cost of creating a service instance.
     *
     * @param tmpReq - GetServiceEstimateCostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceEstimateCostResponse
     *
     * @param GetServiceEstimateCostRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GetServiceEstimateCostResponse
     */
    public function getServiceEstimateCostWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetServiceEstimateCostShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->commodity) {
            $request->commodityShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commodity, 'Commodity', 'json');
        }

        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commodityShrink) {
            @$query['Commodity'] = $request->commodityShrink;
        }

        if (null !== $request->operationName) {
            @$query['OperationName'] = $request->operationName;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->specificationName) {
            @$query['SpecificationName'] = $request->specificationName;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->trialType) {
            @$query['TrialType'] = $request->trialType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceEstimateCost',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceEstimateCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the estimated cost of creating a service instance.
     *
     * @param request - GetServiceEstimateCostRequest
     *
     * @returns GetServiceEstimateCostResponse
     *
     * @param GetServiceEstimateCostRequest $request
     *
     * @return GetServiceEstimateCostResponse
     */
    public function getServiceEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceEstimateCostWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a service instance by its region ID, service instance ID, or Alibaba Cloud Marketplace instance ID. The returned information includes the service status, template name, and a list of resources.
     *
     * @param request - GetServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceInstanceResponse
     *
     * @param GetServiceInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marketInstanceId) {
            @$query['MarketInstanceId'] = $request->marketInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a service instance by its region ID, service instance ID, or Alibaba Cloud Marketplace instance ID. The returned information includes the service status, template name, and a list of resources.
     *
     * @param request - GetServiceInstanceRequest
     *
     * @returns GetServiceInstanceResponse
     *
     * @param GetServiceInstanceRequest $request
     *
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the estimated renewal cost of subscription resources in a privately deployed service instance. You can query the cost for all resources associated with a service instance ID, or for a specific set of resources.
     *
     * @param request - GetServiceInstanceSubscriptionEstimateCostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceInstanceSubscriptionEstimateCostResponse
     *
     * @param GetServiceInstanceSubscriptionEstimateCostRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return GetServiceInstanceSubscriptionEstimateCostResponse
     */
    public function getServiceInstanceSubscriptionEstimateCostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourcePeriod) {
            @$query['ResourcePeriod'] = $request->resourcePeriod;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceInstanceSubscriptionEstimateCost',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceInstanceSubscriptionEstimateCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the estimated renewal cost of subscription resources in a privately deployed service instance. You can query the cost for all resources associated with a service instance ID, or for a specific set of resources.
     *
     * @param request - GetServiceInstanceSubscriptionEstimateCostRequest
     *
     * @returns GetServiceInstanceSubscriptionEstimateCostResponse
     *
     * @param GetServiceInstanceSubscriptionEstimateCostRequest $request
     *
     * @return GetServiceInstanceSubscriptionEstimateCostResponse
     */
    public function getServiceInstanceSubscriptionEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInstanceSubscriptionEstimateCostWithOptions($request, $runtime);
    }

    /**
     * Retrieves the provisions of a service, such as its activation status and service roles.
     *
     * @param tmpReq - GetServiceProvisionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceProvisionsResponse
     *
     * @param GetServiceProvisionsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceProvisionsResponse
     */
    public function getServiceProvisionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetServiceProvisionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->trialType) {
            @$query['TrialType'] = $request->trialType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceProvisions',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceProvisionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the provisions of a service, such as its activation status and service roles.
     *
     * @param request - GetServiceProvisionsRequest
     *
     * @returns GetServiceProvisionsResponse
     *
     * @param GetServiceProvisionsRequest $request
     *
     * @return GetServiceProvisionsResponse
     */
    public function getServiceProvisions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceProvisionsWithOptions($request, $runtime);
    }

    /**
     * Queries the parameter constraints for a Resource Orchestration Service (ROS) template in a specified region using the template name and service ID.
     *
     * @param request - GetServiceTemplateParameterConstraintsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceTemplateParameterConstraintsResponse
     *
     * @param GetServiceTemplateParameterConstraintsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraintsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deployRegionId) {
            @$query['DeployRegionId'] = $request->deployRegionId;
        }

        if (null !== $request->enablePrivateVpcConnection) {
            @$query['EnablePrivateVpcConnection'] = $request->enablePrivateVpcConnection;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->specificationName) {
            @$query['SpecificationName'] = $request->specificationName;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->trialType) {
            @$query['TrialType'] = $request->trialType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceTemplateParameterConstraints',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceTemplateParameterConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parameter constraints for a Resource Orchestration Service (ROS) template in a specified region using the template name and service ID.
     *
     * @param request - GetServiceTemplateParameterConstraintsRequest
     *
     * @returns GetServiceTemplateParameterConstraintsResponse
     *
     * @param GetServiceTemplateParameterConstraintsRequest $request
     *
     * @return GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceTemplateParameterConstraintsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Skill.
     *
     * @remarks
     * ### Prerequisites
     * Before calling this operation, ensure that the service provider enabled the modification feature and configured the required parameters during service creation.
     *
     * @param request - GetSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillResponse
     *
     * @param GetSkillRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetSkillResponse
     */
    public function getSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkill',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Skill.
     *
     * @remarks
     * ### Prerequisites
     * Before calling this operation, ensure that the service provider enabled the modification feature and configured the required parameters during service creation.
     *
     * @param request - GetSkillRequest
     *
     * @returns GetSkillResponse
     *
     * @param GetSkillRequest $request
     *
     * @return GetSkillResponse
     */
    public function getSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillWithOptions($request, $runtime);
    }

    /**
     * Retrieves the result of a Skill file detection task.
     *
     * @remarks
     * ### Prerequisites
     * This operation is available only if the service provider enabled the modification feature and configured the relevant parameters during service creation.
     *
     * @param request - GetSkillFileDetectResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillFileDetectResultResponse
     *
     * @param GetSkillFileDetectResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSkillFileDetectResultResponse
     */
    public function getSkillFileDetectResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hashKey) {
            @$query['HashKey'] = $request->hashKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillFileDetectResult',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillFileDetectResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the result of a Skill file detection task.
     *
     * @remarks
     * ### Prerequisites
     * This operation is available only if the service provider enabled the modification feature and configured the relevant parameters during service creation.
     *
     * @param request - GetSkillFileDetectResultRequest
     *
     * @returns GetSkillFileDetectResultResponse
     *
     * @param GetSkillFileDetectResultRequest $request
     *
     * @return GetSkillFileDetectResultResponse
     */
    public function getSkillFileDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillFileDetectResultWithOptions($request, $runtime);
    }

    /**
     * Retrieves the SkillHub configuration.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider enabled the modification feature and configured its parameters when creating the service.
     *
     * @param request - GetSkillHubConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillHubConfigResponse
     *
     * @param GetSkillHubConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSkillHubConfigResponse
     */
    public function getSkillHubConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetSkillHubConfig',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillHubConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the SkillHub configuration.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider enabled the modification feature and configured its parameters when creating the service.
     *
     * @param request - GetSkillHubConfigRequest
     *
     * @returns GetSkillHubConfigResponse
     *
     * @param GetSkillHubConfigRequest $request
     *
     * @return GetSkillHubConfigResponse
     */
    public function getSkillHubConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillHubConfigWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a SkillSpace.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled the modification feature and configured the modification parameters for the service.
     *
     * @param request - GetSkillSpaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillSpaceResponse
     *
     * @param GetSkillSpaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSkillSpaceResponse
     */
    public function getSkillSpaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->skillSpaceId) {
            @$query['SkillSpaceId'] = $request->skillSpaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillSpace',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a SkillSpace.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled the modification feature and configured the modification parameters for the service.
     *
     * @param request - GetSkillSpaceRequest
     *
     * @returns GetSkillSpaceResponse
     *
     * @param GetSkillSpaceRequest $request
     *
     * @return GetSkillSpaceResponse
     */
    public function getSkillSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillSpaceWithOptions($request, $runtime);
    }

    /**
     * Queries user information.
     *
     * @param request - GetUserInformationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserInformationResponse
     *
     * @param GetUserInformationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserInformationResponse
     */
    public function getUserInformationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserInformation',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user information.
     *
     * @param request - GetUserInformationRequest
     *
     * @returns GetUserInformationResponse
     *
     * @param GetUserInformationRequest $request
     *
     * @return GetUserInformationResponse
     */
    public function getUserInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserInformationWithOptions($request, $runtime);
    }

    /**
     * Queries a list of backups for Compute Nest service instances.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade and downgrade feature and configured the related parameters when the service was created.
     *
     * @param request - ListBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBackupsResponse
     *
     * @param ListBackupsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBackupsResponse
     */
    public function listBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBackups',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of backups for Compute Nest service instances.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade and downgrade feature and configured the related parameters when the service was created.
     *
     * @param request - ListBackupsRequest
     *
     * @returns ListBackupsResponse
     *
     * @param ListBackupsRequest $request
     *
     * @return ListBackupsResponse
     */
    public function listBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBackupsWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of access policies.
     *
     * @param request - ListPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of access policies.
     *
     * @param request - ListPoliciesRequest
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * Lists public skills.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider enabled the change specification feature and configured the relevant parameters during service creation.
     *
     * @param request - ListPublicSkillsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublicSkillsResponse
     *
     * @param ListPublicSkillsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPublicSkillsResponse
     */
    public function listPublicSkillsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->needDownloadUrl) {
            @$query['NeedDownloadUrl'] = $request->needDownloadUrl;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublicSkills',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPublicSkillsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Lists public skills.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider enabled the change specification feature and configured the relevant parameters during service creation.
     *
     * @param request - ListPublicSkillsRequest
     *
     * @returns ListPublicSkillsResponse
     *
     * @param ListPublicSkillsRequest $request
     *
     * @return ListPublicSkillsResponse
     */
    public function listPublicSkills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicSkillsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of restore jobs.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade and downgrade feature and configured its parameters when creating the service.
     *
     * @param request - ListRestoreTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRestoreTasksResponse
     *
     * @param ListRestoreTasksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRestoreTasksResponse
     */
    public function listRestoreTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRestoreTasks',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRestoreTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of restore jobs.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the upgrade and downgrade feature and configured its parameters when creating the service.
     *
     * @param request - ListRestoreTasksRequest
     *
     * @returns ListRestoreTasksResponse
     *
     * @param ListRestoreTasksRequest $request
     *
     * @return ListRestoreTasksResponse
     */
    public function listRestoreTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRestoreTasksWithOptions($request, $runtime);
    }

    /**
     * Lists the available service categories.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceCategoriesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListServiceCategoriesResponse
     */
    public function listServiceCategoriesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListServiceCategories',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the available service categories.
     *
     * @returns ListServiceCategoriesResponse
     *
     * @return ListServiceCategoriesResponse
     */
    public function listServiceCategories()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceCategoriesWithOptions($runtime);
    }

    /**
     * Call the ListServiceInstanceBill operation to query bills for service instances.
     *
     * @param request - ListServiceInstanceBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceInstanceBillResponse
     *
     * @param ListServiceInstanceBillRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListServiceInstanceBillResponse
     */
    public function listServiceInstanceBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->billingDate) {
            @$query['BillingDate'] = $request->billingDate;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceInstanceBill',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceInstanceBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the ListServiceInstanceBill operation to query bills for service instances.
     *
     * @param request - ListServiceInstanceBillRequest
     *
     * @returns ListServiceInstanceBillResponse
     *
     * @param ListServiceInstanceBillRequest $request
     *
     * @return ListServiceInstanceBillResponse
     */
    public function listServiceInstanceBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceBillWithOptions($request, $runtime);
    }

    /**
     * Retrieves the deployment and upgrade logs of a service instance.
     *
     * @param request - ListServiceInstanceLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceInstanceLogsResponse
     *
     * @param ListServiceInstanceLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListServiceInstanceLogsResponse
     */
    public function listServiceInstanceLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->logSource) {
            @$query['LogSource'] = $request->logSource;
        }

        if (null !== $request->logstore) {
            @$query['Logstore'] = $request->logstore;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceInstanceLogs',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceInstanceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the deployment and upgrade logs of a service instance.
     *
     * @param request - ListServiceInstanceLogsRequest
     *
     * @returns ListServiceInstanceLogsResponse
     *
     * @param ListServiceInstanceLogsRequest $request
     *
     * @return ListServiceInstanceLogsResponse
     */
    public function listServiceInstanceLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the resources of a service instance based on parameters such as the service instance ID, Alibaba Cloud Resource Name (ARN), and region ID.
     *
     * @param request - ListServiceInstanceResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceInstanceResourcesResponse
     *
     * @param ListServiceInstanceResourcesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListServiceInstanceResourcesResponse
     */
    public function listServiceInstanceResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceInstanceResourceType) {
            @$query['ServiceInstanceResourceType'] = $request->serviceInstanceResourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceInstanceResources',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources of a service instance based on parameters such as the service instance ID, Alibaba Cloud Resource Name (ARN), and region ID.
     *
     * @param request - ListServiceInstanceResourcesRequest
     *
     * @returns ListServiceInstanceResourcesResponse
     *
     * @param ListServiceInstanceResourcesRequest $request
     *
     * @return ListServiceInstanceResourcesResponse
     */
    public function listServiceInstanceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceResourcesWithOptions($request, $runtime);
    }

    /**
     * You can call ListServiceInstanceUpgradeHistory to query the upgrade history of a service instance.
     *
     * @param request - ListServiceInstanceUpgradeHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceInstanceUpgradeHistoryResponse
     *
     * @param ListServiceInstanceUpgradeHistoryRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListServiceInstanceUpgradeHistoryResponse
     */
    public function listServiceInstanceUpgradeHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceInstanceUpgradeHistory',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceInstanceUpgradeHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call ListServiceInstanceUpgradeHistory to query the upgrade history of a service instance.
     *
     * @param request - ListServiceInstanceUpgradeHistoryRequest
     *
     * @returns ListServiceInstanceUpgradeHistoryResponse
     *
     * @param ListServiceInstanceUpgradeHistoryRequest $request
     *
     * @return ListServiceInstanceUpgradeHistoryResponse
     */
    public function listServiceInstanceUpgradeHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceUpgradeHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries service instances for your account in a specified region.
     *
     * @param request - ListServiceInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceInstancesResponse
     *
     * @param ListServiceInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceInstances',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries service instances for your account in a specified region.
     *
     * @param request - ListServiceInstancesRequest
     *
     * @returns ListServiceInstancesResponse
     *
     * @param ListServiceInstancesRequest $request
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries your service usages.
     *
     * @param request - ListServiceUsagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceUsagesResponse
     *
     * @param ListServiceUsagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListServiceUsagesResponse
     */
    public function listServiceUsagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceUsages',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceUsagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries your service usages.
     *
     * @param request - ListServiceUsagesRequest
     *
     * @returns ListServiceUsagesResponse
     *
     * @param ListServiceUsagesRequest $request
     *
     * @return ListServiceUsagesResponse
     */
    public function listServiceUsages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceUsagesWithOptions($request, $runtime);
    }

    /**
     * Queries information about your services.
     *
     * @param request - ListServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->fuzzyKeyword) {
            @$query['FuzzyKeyword'] = $request->fuzzyKeyword;
        }

        if (null !== $request->inUsed) {
            @$query['InUsed'] = $request->inUsed;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderByType) {
            @$query['OrderByType'] = $request->orderByType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceAccessType) {
            @$query['ServiceAccessType'] = $request->serviceAccessType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about your services.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * Lists the files of a specified Skill.
     *
     * @remarks
     * ### Prerequisites
     * Before you call this operation, ensure that the service provider has enabled the modification feature and configured the modification parameters when creating the service.
     *
     * @param request - ListSkillFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillFilesResponse
     *
     * @param ListSkillFilesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListSkillFilesResponse
     */
    public function listSkillFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillFiles',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the files of a specified Skill.
     *
     * @remarks
     * ### Prerequisites
     * Before you call this operation, ensure that the service provider has enabled the modification feature and configured the modification parameters when creating the service.
     *
     * @param request - ListSkillFilesRequest
     *
     * @returns ListSkillFilesResponse
     *
     * @param ListSkillFilesRequest $request
     *
     * @return ListSkillFilesResponse
     */
    public function listSkillFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillFilesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of SkillSpaces.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider enabled the upgrade feature and configured its parameters when creating the service.
     *
     * @param request - ListSkillSpacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillSpacesResponse
     *
     * @param ListSkillSpacesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSkillSpacesResponse
     */
    public function listSkillSpacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillSpaces',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillSpacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of SkillSpaces.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider enabled the upgrade feature and configured its parameters when creating the service.
     *
     * @param request - ListSkillSpacesRequest
     *
     * @returns ListSkillSpacesResponse
     *
     * @param ListSkillSpacesRequest $request
     *
     * @return ListSkillSpacesResponse
     */
    public function listSkillSpaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillSpacesWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of Skills.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled modification and configured the modification parameters when creating the service.
     *
     * @param request - ListSkillsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListSkillsResponse
     */
    public function listSkillsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->needDownloadUrl) {
            @$query['NeedDownloadUrl'] = $request->needDownloadUrl;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkills',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of Skills.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled modification and configured the modification parameters when creating the service.
     *
     * @param request - ListSkillsRequest
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     *
     * @return ListSkillsResponse
     */
    public function listSkills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillsWithOptions($request, $runtime);
    }

    /**
     * This operation lists existing tag keys.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagKeys',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation lists existing tag keys.
     *
     * @param request - ListTagKeysRequest
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tagged resources.
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
            'version' => '2021-06-01',
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
     * Queries a list of tagged resources.
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
     * Lists the tag values for a specified tag key.
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagValues',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the tag values for a specified tag key.
     *
     * @param request - ListTagValuesRequest
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * Renews a service instance.
     *
     * @param request - RenewServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewServiceInstanceResponse
     *
     * @param RenewServiceInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewServiceInstanceResponse
     */
    public function renewServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a service instance.
     *
     * @param request - RenewServiceInstanceRequest
     *
     * @returns RenewServiceInstanceResponse
     *
     * @param RenewServiceInstanceRequest $request
     *
     * @return RenewServiceInstanceResponse
     */
    public function renewServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Renews the subscription resources for a private deployment service instance. This operation supports two renewal methods: renewing all subscription resources for a service instance or renewing only specific resources. You can use only one method per request.
     *
     * @param request - RenewServiceInstanceResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewServiceInstanceResourcesResponse
     *
     * @param RenewServiceInstanceResourcesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RenewServiceInstanceResourcesResponse
     */
    public function renewServiceInstanceResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourcePeriod) {
            @$query['ResourcePeriod'] = $request->resourcePeriod;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewServiceInstanceResources',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewServiceInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews the subscription resources for a private deployment service instance. This operation supports two renewal methods: renewing all subscription resources for a service instance or renewing only specific resources. You can use only one method per request.
     *
     * @param request - RenewServiceInstanceResourcesRequest
     *
     * @returns RenewServiceInstanceResourcesResponse
     *
     * @param RenewServiceInstanceResourcesRequest $request
     *
     * @return RenewServiceInstanceResourcesResponse
     */
    public function renewServiceInstanceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewServiceInstanceResourcesWithOptions($request, $runtime);
    }

    /**
     * Restarts a service instance in the Deployed state.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the restart O\\&M operation when the service was created.
     *
     * @param request - RestartServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartServiceInstanceResponse
     *
     * @param RestartServiceInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RestartServiceInstanceResponse
     */
    public function restartServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a service instance in the Deployed state.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider enabled the restart O\\&M operation when the service was created.
     *
     * @param request - RestartServiceInstanceRequest
     *
     * @returns RestartServiceInstanceResponse
     *
     * @param RestartServiceInstanceRequest $request
     *
     * @return RestartServiceInstanceResponse
     */
    public function restartServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Rolls back an upgraded service instance.
     *
     * @param request - RollbackServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackServiceInstanceResponse
     *
     * @param RollbackServiceInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackServiceInstanceResponse
     */
    public function rollbackServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back an upgraded service instance.
     *
     * @param request - RollbackServiceInstanceRequest
     *
     * @returns RollbackServiceInstanceResponse
     *
     * @param RollbackServiceInstanceRequest $request
     *
     * @return RollbackServiceInstanceResponse
     */
    public function rollbackServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Call the StartServiceInstance operation to start a service instance that is in the Stopped or StartFailed state.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider configured the start and stop O\\&M actions when creating the service.
     *
     * @param request - StartServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartServiceInstanceResponse
     *
     * @param StartServiceInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartServiceInstanceResponse
     */
    public function startServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the StartServiceInstance operation to start a service instance that is in the Stopped or StartFailed state.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider configured the start and stop O\\&M actions when creating the service.
     *
     * @param request - StartServiceInstanceRequest
     *
     * @returns StartServiceInstanceResponse
     *
     * @param StartServiceInstanceRequest $request
     *
     * @return StartServiceInstanceResponse
     */
    public function startServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Call the StopServiceInstance operation to shut down a service instance that is in the Deployed or StopFailed state.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider configured the Operations and Maintenance (O\\&M) operations for startup and shutdown when the service was created.
     *
     * @param request - StopServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopServiceInstanceResponse
     *
     * @param StopServiceInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopServiceInstanceResponse
     */
    public function stopServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the StopServiceInstance operation to shut down a service instance that is in the Deployed or StopFailed state.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider configured the Operations and Maintenance (O\\&M) operations for startup and shutdown when the service was created.
     *
     * @param request - StopServiceInstanceRequest
     *
     * @returns StopServiceInstanceResponse
     *
     * @param StopServiceInstanceRequest $request
     *
     * @return StopServiceInstanceResponse
     */
    public function stopServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call TagResources to create and attach tags to multiple resources.
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
            'version' => '2021-06-01',
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
     * You can call TagResources to create and attach tags to multiple resources.
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
     * Detaches tags from specified resources.
     *
     * @param request - UnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
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
            'action' => 'UnTagResources',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches tags from specified resources.
     *
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates the attributes of a service instance.
     *
     * @param request - UpdateServiceInstanceAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceInstanceAttributesResponse
     *
     * @param UpdateServiceInstanceAttributesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateServiceInstanceAttributesResponse
     */
    public function updateServiceInstanceAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableOperation) {
            @$query['EnableOperation'] = $request->enableOperation;
        }

        if (null !== $request->grantedPermission) {
            @$query['GrantedPermission'] = $request->grantedPermission;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceInstanceAttributes',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateServiceInstanceAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a service instance.
     *
     * @param request - UpdateServiceInstanceAttributesRequest
     *
     * @returns UpdateServiceInstanceAttributesResponse
     *
     * @param UpdateServiceInstanceAttributesRequest $request
     *
     * @return UpdateServiceInstanceAttributesResponse
     */
    public function updateServiceInstanceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceAttributesWithOptions($request, $runtime);
    }

    /**
     * You can call the UpdateServiceInstanceSpec operation to upgrade or downgrade a service instance if its parameters or package settings do not meet your requirements.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled the upgrade/downgrade feature and configured the related parameters when the service was created.
     *
     * @param tmpReq - UpdateServiceInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceInstanceSpecResponse
     *
     * @param UpdateServiceInstanceSpecRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateServiceInstanceSpecResponse
     */
    public function updateServiceInstanceSpecWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateServiceInstanceSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commodity) {
            @$query['Commodity'] = $request->commodity;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->enableUserPrometheus) {
            @$query['EnableUserPrometheus'] = $request->enableUserPrometheus;
        }

        if (null !== $request->operationName) {
            @$query['OperationName'] = $request->operationName;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->predefinedParametersName) {
            @$query['PredefinedParametersName'] = $request->predefinedParametersName;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceInstanceSpec',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateServiceInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the UpdateServiceInstanceSpec operation to upgrade or downgrade a service instance if its parameters or package settings do not meet your requirements.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that the service provider has enabled the upgrade/downgrade feature and configured the related parameters when the service was created.
     *
     * @param request - UpdateServiceInstanceSpecRequest
     *
     * @returns UpdateServiceInstanceSpecResponse
     *
     * @param UpdateServiceInstanceSpecRequest $request
     *
     * @return UpdateServiceInstanceSpecResponse
     */
    public function updateServiceInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a service usage request.
     *
     * @param tmpReq - UpdateServiceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceUsageResponse
     *
     * @param UpdateServiceUsageRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateServiceUsageResponse
     */
    public function updateServiceUsageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateServiceUsageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userInformation) {
            $request->userInformationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInformation, 'UserInformation', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->userInformationShrink) {
            @$query['UserInformation'] = $request->userInformationShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceUsage',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a service usage request.
     *
     * @param request - UpdateServiceUsageRequest
     *
     * @returns UpdateServiceUsageResponse
     *
     * @param UpdateServiceUsageRequest $request
     *
     * @return UpdateServiceUsageResponse
     */
    public function updateServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceUsageWithOptions($request, $runtime);
    }

    /**
     * Updates a skill.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider has enabled the option to modify configurations and configured the relevant parameters during service creation.
     *
     * @param request - UpdateSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillResponse
     *
     * @param UpdateSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSkillResponse
     */
    public function updateSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ossUrl) {
            @$query['OssUrl'] = $request->ossUrl;
        }

        if (null !== $request->skillDescription) {
            @$query['SkillDescription'] = $request->skillDescription;
        }

        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        if (null !== $request->skillLabels) {
            @$query['SkillLabels'] = $request->skillLabels;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->sourceSkillId) {
            @$query['SourceSkillId'] = $request->sourceSkillId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSkill',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a skill.
     *
     * @remarks
     * ### Prerequisites
     * Ensure the service provider has enabled the option to modify configurations and configured the relevant parameters during service creation.
     *
     * @param request - UpdateSkillRequest
     *
     * @returns UpdateSkillResponse
     *
     * @param UpdateSkillRequest $request
     *
     * @return UpdateSkillResponse
     */
    public function updateSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillWithOptions($request, $runtime);
    }

    /**
     * The UpdateUserInformation operation updates user information.
     *
     * @param request - UpdateUserInformationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserInformationResponse
     *
     * @param UpdateUserInformationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateUserInformationResponse
     */
    public function updateUserInformationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliverySettings) {
            @$query['DeliverySettings'] = $request->deliverySettings;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserInformation',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The UpdateUserInformation operation updates user information.
     *
     * @param request - UpdateUserInformationRequest
     *
     * @returns UpdateUserInformationResponse
     *
     * @param UpdateUserInformationRequest $request
     *
     * @return UpdateUserInformationResponse
     */
    public function updateUserInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserInformationWithOptions($request, $runtime);
    }

    /**
     * Upgrades a service instance to a new version.
     *
     * @param tmpReq - UpgradeServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeServiceInstanceResponse
     *
     * @param UpgradeServiceInstanceRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeServiceInstanceResponse
     */
    public function upgradeServiceInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpgradeServiceInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeServiceInstance',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades a service instance to a new version.
     *
     * @param request - UpgradeServiceInstanceRequest
     *
     * @returns UpgradeServiceInstanceResponse
     *
     * @param UpgradeServiceInstanceRequest $request
     *
     * @return UpgradeServiceInstanceResponse
     */
    public function upgradeServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Validates the name of a service instance.
     *
     * @param request - ValidateServiceInstanceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateServiceInstanceNameResponse
     *
     * @param ValidateServiceInstanceNameRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ValidateServiceInstanceNameResponse
     */
    public function validateServiceInstanceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->isTrial) {
            @$query['IsTrial'] = $request->isTrial;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceName) {
            @$query['ServiceInstanceName'] = $request->serviceInstanceName;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateServiceInstanceName',
            'version' => '2021-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateServiceInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates the name of a service instance.
     *
     * @param request - ValidateServiceInstanceNameRequest
     *
     * @returns ValidateServiceInstanceNameResponse
     *
     * @param ValidateServiceInstanceNameRequest $request
     *
     * @return ValidateServiceInstanceNameResponse
     */
    public function validateServiceInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateServiceInstanceNameWithOptions($request, $runtime);
    }
}
