<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CancelServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CancelServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CheckServiceDeployableRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CheckServiceDeployableResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceUsageShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyResponse;
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
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Cancels the application for using a service.
     *  *
     * @param CancelServiceUsageRequest $request CancelServiceUsageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelServiceUsageResponse CancelServiceUsageResponse
     */
    public function cancelServiceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->needDelete)) {
            $query['NeedDelete'] = $request->needDelete;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Cancels the application for using a service.
     *  *
     * @param CancelServiceUsageRequest $request CancelServiceUsageRequest
     *
     * @return CancelServiceUsageResponse CancelServiceUsageResponse
     */
    public function cancelServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelServiceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group to which a cloud resource belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Changes the resource group to which a cloud resource belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 服务实例部署前的预检查
     *  *
     * @param CheckServiceDeployableRequest $request CheckServiceDeployableRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckServiceDeployableResponse CheckServiceDeployableResponse
     */
    public function checkServiceDeployableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->postPaidAmount)) {
            $query['PostPaidAmount'] = $request->postPaidAmount;
        }
        if (!Utils::isUnset($request->prePaidAmount)) {
            $query['PrePaidAmount'] = $request->prePaidAmount;
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
        if (!Utils::isUnset($request->trialType)) {
            $query['TrialType'] = $request->trialType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 服务实例部署前的预检查
     *  *
     * @param CheckServiceDeployableRequest $request CheckServiceDeployableRequest
     *
     * @return CheckServiceDeployableResponse CheckServiceDeployableResponse
     */
    public function checkServiceDeployable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceDeployableWithOptions($request, $runtime);
    }

    /**
     * @summary Continues to deploy a service instance after the service instance failed to be deployed.
     *  *
     * @description This operation is available only for service instances that belong to private services deployed by using Resource Orchestration Service (ROS).
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
        if (!Utils::isUnset($request->option)) {
            $query['Option'] = $request->option;
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
     * @summary Continues to deploy a service instance after the service instance failed to be deployed.
     *  *
     * @description This operation is available only for service instances that belong to private services deployed by using Resource Orchestration Service (ROS).
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
        if (!Utils::isUnset($request->commodity)) {
            $query['Commodity'] = $request->commodity;
        }
        if (!Utils::isUnset($request->contactGroup)) {
            $query['ContactGroup'] = $request->contactGroup;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->enableInstanceOps)) {
            $query['EnableInstanceOps'] = $request->enableInstanceOps;
        }
        if (!Utils::isUnset($request->enableUserPrometheus)) {
            $query['EnableUserPrometheus'] = $request->enableUserPrometheus;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operationMetadata)) {
            $query['OperationMetadata'] = $request->operationMetadata;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceAutoPay)) {
            $query['ResourceAutoPay'] = $request->resourceAutoPay;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->specificationCode)) {
            $query['SpecificationCode'] = $request->specificationCode;
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
        if (!Utils::isUnset($request->trialType)) {
            $query['TrialType'] = $request->trialType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates an application for using a service.
     *  *
     * @param CreateServiceUsageRequest $tmpReq  CreateServiceUsageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceUsageResponse CreateServiceUsageResponse
     */
    public function createServiceUsageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateServiceUsageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInformation)) {
            $request->userInformationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInformation, 'UserInformation', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->userInformationShrink)) {
            $query['UserInformation'] = $request->userInformationShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates an application for using a service.
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
     * @summary Delete service instances.
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
     * @summary Delete service instances.
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
     * @summary Deploy service instance in Created status.
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
     * @summary Deploy service instance in Created status.
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
     * @summary List available regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
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
     * @summary List available regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 生成并校验服务创建stack所需要的权限
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
     * @summary 生成并校验服务创建stack所需要的权限
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
        if (!Utils::isUnset($request->showDetails)) {
            $query['ShowDetails'] = $request->showDetails;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (!Utils::isUnset($request->operationName)) {
            $query['OperationName'] = $request->operationName;
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
        if (!Utils::isUnset($request->trialType)) {
            $query['TrialType'] = $request->trialType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the information about a service instance based on the region ID and the ID of the service instance or the Alibaba Cloud Marketplace instance. Information including the service status, template name, and involved resources are returned.
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
        if (!Utils::isUnset($request->marketInstanceId)) {
            $query['MarketInstanceId'] = $request->marketInstanceId;
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
     * @summary Queries the information about a service instance based on the region ID and the ID of the service instance or the Alibaba Cloud Marketplace instance. Information including the service status, template name, and involved resources are returned.
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
     * @summary Query renewal prices for prepaid resources of private deployment service instance. You can query renewal prices for all prepaid resources included in a service instance, or query renewal prices for specified resources. Only one of the two methods can be used.
     *  *
     * @param GetServiceInstanceSubscriptionEstimateCostRequest $request GetServiceInstanceSubscriptionEstimateCostRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceInstanceSubscriptionEstimateCostResponse GetServiceInstanceSubscriptionEstimateCostResponse
     */
    public function getServiceInstanceSubscriptionEstimateCostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourcePeriod)) {
            $query['ResourcePeriod'] = $request->resourcePeriod;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query renewal prices for prepaid resources of private deployment service instance. You can query renewal prices for all prepaid resources included in a service instance, or query renewal prices for specified resources. Only one of the two methods can be used.
     *  *
     * @param GetServiceInstanceSubscriptionEstimateCostRequest $request GetServiceInstanceSubscriptionEstimateCostRequest
     *
     * @return GetServiceInstanceSubscriptionEstimateCostResponse GetServiceInstanceSubscriptionEstimateCostResponse
     */
    public function getServiceInstanceSubscriptionEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInstanceSubscriptionEstimateCostWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the activation status and Resource Access Management (RAM) roles of the cloud services required by a service.
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
        if (!Utils::isUnset($request->trialType)) {
            $query['TrialType'] = $request->trialType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the information about the activation status and Resource Access Management (RAM) roles of the cloud services required by a service.
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
     * @summary Queries the constraints on the parameters in an Resource Orchestration Service (ROS) template.
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
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
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
     * @summary Queries the constraints on the parameters in an Resource Orchestration Service (ROS) template.
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
     * @summary Queries the information about a customer.
     *  *
     * @param GetUserInformationRequest $request GetUserInformationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserInformationResponse GetUserInformationResponse
     */
    public function getUserInformationWithOptions($request, $runtime)
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
     * @summary Queries the information about a customer.
     *  *
     * @param GetUserInformationRequest $request GetUserInformationRequest
     *
     * @return GetUserInformationResponse GetUserInformationResponse
     */
    public function getUserInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserInformationWithOptions($request, $runtime);
    }

    /**
     * @summary Query Permission Policy List
     *  *
     * @param ListPoliciesRequest $request ListPoliciesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPoliciesResponse ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query Permission Policy List
     *  *
     * @param ListPoliciesRequest $request ListPoliciesRequest
     *
     * @return ListPoliciesResponse ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询服务类别
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceCategoriesResponse ListServiceCategoriesResponse
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
     * @summary 查询服务类别
     *  *
     * @return ListServiceCategoriesResponse ListServiceCategoriesResponse
     */
    public function listServiceCategories()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceCategoriesWithOptions($runtime);
    }

    /**
     * @summary 展示服务实例账单
     *  *
     * @param ListServiceInstanceBillRequest $request ListServiceInstanceBillRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceInstanceBillResponse ListServiceInstanceBillResponse
     */
    public function listServiceInstanceBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->billingDate)) {
            $query['BillingDate'] = $request->billingDate;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 展示服务实例账单
     *  *
     * @param ListServiceInstanceBillRequest $request ListServiceInstanceBillRequest
     *
     * @return ListServiceInstanceBillResponse ListServiceInstanceBillResponse
     */
    public function listServiceInstanceBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceBillWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the deployment and upgrade logs of a service instance.
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
     * @summary Queries the deployment and upgrade logs of a service instance.
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
     * @summary Queries the resources contained in a service instance.
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
     * @summary Queries the resources contained in a service instance.
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
     * @summary Queries the upgrade history of a service instance.
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
     * @summary Queries the upgrade history of a service instance.
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
     * @summary {}
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary {}
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->fuzzyKeyword)) {
            $query['FuzzyKeyword'] = $request->fuzzyKeyword;
        }
        if (!Utils::isUnset($request->inUsed)) {
            $query['InUsed'] = $request->inUsed;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderByType)) {
            $query['OrderByType'] = $request->orderByType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceAccessType)) {
            $query['ServiceAccessType'] = $request->serviceAccessType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询标签资源列表
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
     * @summary 查询标签资源列表
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
     * @summary Renew the prepaid resources included in the private deployment service instance. You can renew all prepaid resources under the specified service instance ID, or you can renew the specified resources. Only one of the two renewal methods can be used.
     *  *
     * @param RenewServiceInstanceResourcesRequest $request RenewServiceInstanceResourcesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewServiceInstanceResourcesResponse RenewServiceInstanceResourcesResponse
     */
    public function renewServiceInstanceResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourcePeriod)) {
            $query['ResourcePeriod'] = $request->resourcePeriod;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Renew the prepaid resources included in the private deployment service instance. You can renew all prepaid resources under the specified service instance ID, or you can renew the specified resources. Only one of the two renewal methods can be used.
     *  *
     * @param RenewServiceInstanceResourcesRequest $request RenewServiceInstanceResourcesRequest
     *
     * @return RenewServiceInstanceResourcesResponse RenewServiceInstanceResourcesResponse
     */
    public function renewServiceInstanceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewServiceInstanceResourcesWithOptions($request, $runtime);
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
     * @summary Rolls back an upgraded service instance to the previous version.
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
     * @summary Rolls back an upgraded service instance to the previous version.
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
     * @summary 给资源解除标签
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
     * @summary 给资源解除标签
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
     * @summary Updates the attributes of a service instance.
     *  *
     * @param UpdateServiceInstanceAttributesRequest $request UpdateServiceInstanceAttributesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceInstanceAttributesResponse UpdateServiceInstanceAttributesResponse
     */
    public function updateServiceInstanceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableOperation)) {
            $query['EnableOperation'] = $request->enableOperation;
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
     * @summary Updates the attributes of a service instance.
     *  *
     * @param UpdateServiceInstanceAttributesRequest $request UpdateServiceInstanceAttributesRequest
     *
     * @return UpdateServiceInstanceAttributesResponse UpdateServiceInstanceAttributesResponse
     */
    public function updateServiceInstanceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the configurations of a service instance.
     *  *
     * @description ### [](#)Prerequisites
     * Configuration change is enabled and the related parameters are configured for the service by the service provider.
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
        if (!Utils::isUnset($request->commodity)) {
            $query['Commodity'] = $request->commodity;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
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
     * @summary Changes the configurations of a service instance.
     *  *
     * @description ### [](#)Prerequisites
     * Configuration change is enabled and the related parameters are configured for the service by the service provider.
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
     * @summary Updates the application for using a service.
     *  *
     * @param UpdateServiceUsageRequest $tmpReq  UpdateServiceUsageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceUsageResponse UpdateServiceUsageResponse
     */
    public function updateServiceUsageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateServiceUsageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInformation)) {
            $request->userInformationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInformation, 'UserInformation', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->userInformationShrink)) {
            $query['UserInformation'] = $request->userInformationShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Updates the application for using a service.
     *  *
     * @param UpdateServiceUsageRequest $request UpdateServiceUsageRequest
     *
     * @return UpdateServiceUsageResponse UpdateServiceUsageResponse
     */
    public function updateServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a customer.
     *  *
     * @param UpdateUserInformationRequest $request UpdateUserInformationRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserInformationResponse UpdateUserInformationResponse
     */
    public function updateUserInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliverySettings)) {
            $query['DeliverySettings'] = $request->deliverySettings;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Updates the information about a customer.
     *  *
     * @param UpdateUserInformationRequest $request UpdateUserInformationRequest
     *
     * @return UpdateUserInformationResponse UpdateUserInformationResponse
     */
    public function updateUserInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserInformationWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades the version of a service instance.
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
     * @summary Upgrades the version of a service instance.
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
}
