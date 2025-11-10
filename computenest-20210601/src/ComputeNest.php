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
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyResponse;
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
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetUserInformationRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetUserInformationResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListBackupsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListBackupsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesResponse;
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
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesResponse;
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
     * Cancels the application for using a service.
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
     * Cancels the application for using a service.
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
     * Changes the resource group to which a cloud resource belongs.
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
     * Changes the resource group to which a cloud resource belongs.
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
     * 服务实例部署前的预检查.
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
     * 服务实例部署前的预检查.
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
     * Continues to deploy a service instance after the service instance failed to be deployed.
     *
     * @remarks
     * This operation is available only for service instances that belong to private services deployed by using Resource Orchestration Service (ROS).
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
     * Continues to deploy a service instance after the service instance failed to be deployed.
     *
     * @remarks
     * This operation is available only for service instances that belong to private services deployed by using Resource Orchestration Service (ROS).
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
     * Create backup for Compute Nest instance.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Create backup for Compute Nest instance.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Create restore task.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Create restore task.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Creates and deploys a service instance.
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
     * Creates and deploys a service instance.
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
     * Creates an application for using a service.
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
     * Creates an application for using a service.
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
     * Delete Compute Nest instance backups.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Delete Compute Nest instance backups.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Delete service instances.
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
     * Delete service instances.
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
     * Deploy service instance in Created status.
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
     * Deploy service instance in Created status.
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
     * List available regions.
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
     * List available regions.
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
     * 生成并校验服务创建stack所需要的权限.
     *
     * @param request - GenerateServicePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateServicePolicyResponse
     *
     * @param GenerateServicePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateServicePolicyResponse
     */
    public function generateServicePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationTypes) {
            @$query['OperationTypes'] = $request->operationTypes;
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
     * 生成并校验服务创建stack所需要的权限.
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
     * Queries the information about backup task.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Queries the information about backup task.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * 根据指定地域获取可用区列表.
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
     * 根据指定地域获取可用区列表.
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
     * Queries the information about a service.
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
     * Queries the information about a service.
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
     * Queries the estimated price for creating a service instance.
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
     * Queries the estimated price for creating a service instance.
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
     * Queries the information about a service instance based on the region ID and the ID of the service instance or the Alibaba Cloud Marketplace instance. Information including the service status, template name, and involved resources are returned.
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
     * Queries the information about a service instance based on the region ID and the ID of the service instance or the Alibaba Cloud Marketplace instance. Information including the service status, template name, and involved resources are returned.
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
     * Query renewal prices for prepaid resources of private deployment service instance. You can query renewal prices for all prepaid resources included in a service instance, or query renewal prices for specified resources. Only one of the two methods can be used.
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
     * Query renewal prices for prepaid resources of private deployment service instance. You can query renewal prices for all prepaid resources included in a service instance, or query renewal prices for specified resources. Only one of the two methods can be used.
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
     * Queries the information about the activation status and Resource Access Management (RAM) roles of the cloud services required by a service.
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
     * Queries the information about the activation status and Resource Access Management (RAM) roles of the cloud services required by a service.
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
     * Queries the constraints on the parameters in an Resource Orchestration Service (ROS) template.
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
     * Queries the constraints on the parameters in an Resource Orchestration Service (ROS) template.
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
     * Queries the information about a customer.
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
     * Queries the information about a customer.
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
     * Query and list Compute Nest instance backups.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Query and list Compute Nest instance backups.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Query Permission Policy List.
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
     * Query Permission Policy List.
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
     * Query and list restore tasks.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * Query and list restore tasks.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Please ensure that the service provider has enabled the configuration change feature and completed the change parameter settings.
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
     * 查询服务类别.
     *
     * @param request - ListServiceCategoriesRequest
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
     * 查询服务类别.
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
     * 展示服务实例账单.
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
     * 展示服务实例账单.
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
     * Queries the deployment and upgrade logs of a service instance.
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
     * Queries the deployment and upgrade logs of a service instance.
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
     * Queries the resources contained in a service instance.
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
     * Queries the resources contained in a service instance.
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
     * Queries the upgrade history of a service instance.
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
     * Queries the upgrade history of a service instance.
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
     * {}.
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
     * {}.
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
     * Queries the applications for using a service.
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
     * Queries the applications for using a service.
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
     * Queries a list of services.
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
     * Queries a list of services.
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
     * 查询标签键列表.
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
     * 查询标签键列表.
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
     * 查询标签资源列表.
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
     * 查询标签资源列表.
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
     * 查询标签值列表.
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
     * 查询标签值列表.
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
     * Renew the prepaid resources included in the private deployment service instance. You can renew all prepaid resources under the specified service instance ID, or you can renew the specified resources. Only one of the two renewal methods can be used.
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
     * Renew the prepaid resources included in the private deployment service instance. You can renew all prepaid resources under the specified service instance ID, or you can renew the specified resources. Only one of the two renewal methods can be used.
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
     * When the service instance is Deployed, call the RestartServiceInstance interface to restart the service instance.
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
     * When the service instance is Deployed, call the RestartServiceInstance interface to restart the service instance.
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
     * Rolls back an upgraded service instance to the previous version.
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
     * Rolls back an upgraded service instance to the previous version.
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
     * When the service instance status is Stopped (Stopped) or StartFailed (Startup failed), the StartServiceInstance interface is invoked to start the service instance.
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
     * When the service instance status is Stopped (Stopped) or StartFailed (Startup failed), the StartServiceInstance interface is invoked to start the service instance.
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
     * When the service instance is Deployed and StopFailed, call the StopServiceInstance interface to stop the service instance.
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
     * When the service instance is Deployed and StopFailed, call the StopServiceInstance interface to stop the service instance.
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
     * 给资源打标签.
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
     * 给资源打标签.
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
     * 给资源解除标签.
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
     * 给资源解除标签.
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
     * Changes the configurations of a service instance.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Configuration change is enabled and the related parameters are configured for the service by the service provider.
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
     * Changes the configurations of a service instance.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Configuration change is enabled and the related parameters are configured for the service by the service provider.
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
     * Updates the application for using a service.
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
     * Updates the application for using a service.
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
     * Updates the information about a customer.
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
     * Updates the information about a customer.
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
     * Upgrades the version of a service instance.
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
     * Upgrades the version of a service instance.
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
     * 校验服务实例名称.
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
     * 校验服务实例名称.
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
