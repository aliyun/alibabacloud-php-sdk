<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentPlanRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentPlanResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentPlanTemplateRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentPlanTemplateResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanTemplateRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanTemplateResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourcePredictResultRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourcePredictResultResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetWorkloadRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetWorkloadResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlansRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlansResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlansShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\StopExperimentRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\StopExperimentResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanTemplateRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanTemplateResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanTemplateShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ValidateResourceRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ValidateResourceResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ValidateResourceShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eflocnp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eflo-cnp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Change resource group.
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version' => '2023-08-28',
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
     * Change resource group.
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
     * Create Experiment Plan.
     *
     * @param tmpReq - CreateExperimentPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExperimentPlanResponse
     *
     * @param CreateExperimentPlanRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateExperimentPlanResponse
     */
    public function createExperimentPlanWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateExperimentPlanShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->externalParams) {
            $request->externalParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalParams, 'ExternalParams', 'json');
        }

        $query = [];
        if (null !== $request->externalParamsShrink) {
            @$query['ExternalParams'] = $request->externalParamsShrink;
        }

        if (null !== $request->planTemplateName) {
            @$query['PlanTemplateName'] = $request->planTemplateName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateExperimentPlan',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExperimentPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Experiment Plan.
     *
     * @param request - CreateExperimentPlanRequest
     *
     * @returns CreateExperimentPlanResponse
     *
     * @param CreateExperimentPlanRequest $request
     *
     * @return CreateExperimentPlanResponse
     */
    public function createExperimentPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExperimentPlanWithOptions($request, $runtime);
    }

    /**
     * Create/Update Test Plan Template.
     *
     * @param tmpReq - CreateExperimentPlanTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExperimentPlanTemplateResponse
     *
     * @param CreateExperimentPlanTemplateRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateExperimentPlanTemplateResponse
     */
    public function createExperimentPlanTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateExperimentPlanTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->templatePipeline) {
            $request->templatePipelineShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templatePipeline, 'TemplatePipeline', 'json');
        }

        $query = [];
        if (null !== $request->privacyLevel) {
            @$query['PrivacyLevel'] = $request->privacyLevel;
        }

        if (null !== $request->templateDescription) {
            @$query['TemplateDescription'] = $request->templateDescription;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $body = [];
        if (null !== $request->templatePipelineShrink) {
            @$body['TemplatePipeline'] = $request->templatePipelineShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExperimentPlanTemplate',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExperimentPlanTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create/Update Test Plan Template.
     *
     * @param request - CreateExperimentPlanTemplateRequest
     *
     * @returns CreateExperimentPlanTemplateResponse
     *
     * @param CreateExperimentPlanTemplateRequest $request
     *
     * @return CreateExperimentPlanTemplateResponse
     */
    public function createExperimentPlanTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExperimentPlanTemplateWithOptions($request, $runtime);
    }

    /**
     * Create Evaluation Resource.
     *
     * @param tmpReq - CreateResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceResponse
     *
     * @param CreateResourceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->machineTypes) {
            $request->machineTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->machineTypes, 'MachineTypes', 'json');
        }

        if (null !== $tmpReq->userAccessParam) {
            $request->userAccessParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userAccessParam, 'UserAccessParam', 'json');
        }

        $query = [];
        if (null !== $request->clusterDesc) {
            @$query['ClusterDesc'] = $request->clusterDesc;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        $body = [];
        if (null !== $request->machineTypesShrink) {
            @$body['MachineTypes'] = $request->machineTypesShrink;
        }

        if (null !== $request->userAccessParamShrink) {
            @$body['UserAccessParam'] = $request->userAccessParamShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResource',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Evaluation Resource.
     *
     * @param request - CreateResourceRequest
     *
     * @returns CreateResourceResponse
     *
     * @param CreateResourceRequest $request
     *
     * @return CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceWithOptions($request, $runtime);
    }

    /**
     * Delete Experiment.
     *
     * @param request - DeleteExperimentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExperimentResponse
     *
     * @param DeleteExperimentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->experimentId) {
            @$query['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExperiment',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Experiment.
     *
     * @param request - DeleteExperimentRequest
     *
     * @returns DeleteExperimentResponse
     *
     * @param DeleteExperimentRequest $request
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExperimentWithOptions($request, $runtime);
    }

    /**
     * 获取实验计划详情.
     *
     * @param request - DeleteExperimentPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExperimentPlanResponse
     *
     * @param DeleteExperimentPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteExperimentPlanResponse
     */
    public function deleteExperimentPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExperimentPlan',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExperimentPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验计划详情.
     *
     * @param request - DeleteExperimentPlanRequest
     *
     * @returns DeleteExperimentPlanResponse
     *
     * @param DeleteExperimentPlanRequest $request
     *
     * @return DeleteExperimentPlanResponse
     */
    public function deleteExperimentPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExperimentPlanWithOptions($request, $runtime);
    }

    /**
     * Delete Test Plan Template.
     *
     * @param request - DeleteExperimentPlanTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExperimentPlanTemplateResponse
     *
     * @param DeleteExperimentPlanTemplateRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteExperimentPlanTemplateResponse
     */
    public function deleteExperimentPlanTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExperimentPlanTemplate',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExperimentPlanTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Test Plan Template.
     *
     * @param request - DeleteExperimentPlanTemplateRequest
     *
     * @returns DeleteExperimentPlanTemplateResponse
     *
     * @param DeleteExperimentPlanTemplateRequest $request
     *
     * @return DeleteExperimentPlanTemplateResponse
     */
    public function deleteExperimentPlanTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExperimentPlanTemplateWithOptions($request, $runtime);
    }

    /**
     * Get Experiment Details.
     *
     * @param request - GetExperimentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentResponse
     *
     * @param GetExperimentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetExperimentResponse
     */
    public function getExperimentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->experimentId) {
            @$query['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperiment',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Experiment Details.
     *
     * @param request - GetExperimentRequest
     *
     * @returns GetExperimentResponse
     *
     * @param GetExperimentRequest $request
     *
     * @return GetExperimentResponse
     */
    public function getExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentWithOptions($request, $runtime);
    }

    /**
     * Get Experiment Plan Details.
     *
     * @param request - GetExperimentPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentPlanResponse
     *
     * @param GetExperimentPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetExperimentPlanResponse
     */
    public function getExperimentPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperimentPlan',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExperimentPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Experiment Plan Details.
     *
     * @param request - GetExperimentPlanRequest
     *
     * @returns GetExperimentPlanResponse
     *
     * @param GetExperimentPlanRequest $request
     *
     * @return GetExperimentPlanResponse
     */
    public function getExperimentPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentPlanWithOptions($request, $runtime);
    }

    /**
     * Query Test Plan Template Details.
     *
     * @param request - GetExperimentPlanTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentPlanTemplateResponse
     *
     * @param GetExperimentPlanTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetExperimentPlanTemplateResponse
     */
    public function getExperimentPlanTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperimentPlanTemplate',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExperimentPlanTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Test Plan Template Details.
     *
     * @param request - GetExperimentPlanTemplateRequest
     *
     * @returns GetExperimentPlanTemplateResponse
     *
     * @param GetExperimentPlanTemplateRequest $request
     *
     * @return GetExperimentPlanTemplateResponse
     */
    public function getExperimentPlanTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentPlanTemplateWithOptions($request, $runtime);
    }

    /**
     * Fetch Experiment Result Data.
     *
     * @param request - GetExperimentResultDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentResultDataResponse
     *
     * @param GetExperimentResultDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetExperimentResultDataResponse
     */
    public function getExperimentResultDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->experimentId) {
            @$query['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->hostname) {
            @$query['Hostname'] = $request->hostname;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->workloadType) {
            @$query['WorkloadType'] = $request->workloadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperimentResultData',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExperimentResultDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Fetch Experiment Result Data.
     *
     * @param request - GetExperimentResultDataRequest
     *
     * @returns GetExperimentResultDataResponse
     *
     * @param GetExperimentResultDataRequest $request
     *
     * @return GetExperimentResultDataResponse
     */
    public function getExperimentResultData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentResultDataWithOptions($request, $runtime);
    }

    /**
     * Get Resource Information.
     *
     * @param request - GetResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceResponse
     *
     * @param GetResourceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetResourceResponse
     */
    public function getResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResource',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Resource Information.
     *
     * @param request - GetResourceRequest
     *
     * @returns GetResourceResponse
     *
     * @param GetResourceRequest $request
     *
     * @return GetResourceResponse
     */
    public function getResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceWithOptions($request, $runtime);
    }

    /**
     * Query the resource prediction results of the test plan template.
     *
     * @param request - GetResourcePredictResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourcePredictResultResponse
     *
     * @param GetResourcePredictResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetResourcePredictResultResponse
     */
    public function getResourcePredictResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourcePredictResult',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourcePredictResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the resource prediction results of the test plan template.
     *
     * @param request - GetResourcePredictResultRequest
     *
     * @returns GetResourcePredictResultResponse
     *
     * @param GetResourcePredictResultRequest $request
     *
     * @return GetResourcePredictResultResponse
     */
    public function getResourcePredictResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePredictResultWithOptions($request, $runtime);
    }

    /**
     * Retrieve workload information by ID.
     *
     * @param request - GetWorkloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkloadResponse
     *
     * @param GetWorkloadRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetWorkloadResponse
     */
    public function getWorkloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workloadId) {
            @$query['WorkloadId'] = $request->workloadId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkload',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve workload information by ID.
     *
     * @param request - GetWorkloadRequest
     *
     * @returns GetWorkloadResponse
     *
     * @param GetWorkloadRequest $request
     *
     * @return GetWorkloadResponse
     */
    public function getWorkload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkloadWithOptions($request, $runtime);
    }

    /**
     * Query Test Plan Template List.
     *
     * @param request - ListExperimentPlanTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExperimentPlanTemplatesResponse
     *
     * @param ListExperimentPlanTemplatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListExperimentPlanTemplatesResponse
     */
    public function listExperimentPlanTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->privacyLevel) {
            @$query['PrivacyLevel'] = $request->privacyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExperimentPlanTemplates',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExperimentPlanTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Test Plan Template List.
     *
     * @param request - ListExperimentPlanTemplatesRequest
     *
     * @returns ListExperimentPlanTemplatesResponse
     *
     * @param ListExperimentPlanTemplatesRequest $request
     *
     * @return ListExperimentPlanTemplatesResponse
     */
    public function listExperimentPlanTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExperimentPlanTemplatesWithOptions($request, $runtime);
    }

    /**
     * Query Experiment Plan List.
     *
     * @param tmpReq - ListExperimentPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExperimentPlansResponse
     *
     * @param ListExperimentPlansRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListExperimentPlansResponse
     */
    public function listExperimentPlansWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListExperimentPlansShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->planTaskStatus) {
            $request->planTaskStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->planTaskStatus, 'PlanTaskStatus', 'json');
        }

        if (null !== $tmpReq->resourceName) {
            $request->resourceNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceName, 'ResourceName', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->creatTimeOrder) {
            @$query['CreatTimeOrder'] = $request->creatTimeOrder;
        }

        if (null !== $request->endTimeOrder) {
            @$query['EndTimeOrder'] = $request->endTimeOrder;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->startTimeOrder) {
            @$query['StartTimeOrder'] = $request->startTimeOrder;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $body = [];
        if (null !== $request->planTaskStatusShrink) {
            @$body['PlanTaskStatus'] = $request->planTaskStatusShrink;
        }

        if (null !== $request->resourceNameShrink) {
            @$body['ResourceName'] = $request->resourceNameShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListExperimentPlans',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExperimentPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Experiment Plan List.
     *
     * @param request - ListExperimentPlansRequest
     *
     * @returns ListExperimentPlansResponse
     *
     * @param ListExperimentPlansRequest $request
     *
     * @return ListExperimentPlansResponse
     */
    public function listExperimentPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExperimentPlansWithOptions($request, $runtime);
    }

    /**
     * Query the experiment list based on the plan ID.
     *
     * @param request - ListExperimentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExperimentsResponse
     *
     * @param ListExperimentsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListExperimentsResponse
     */
    public function listExperimentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExperiments',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the experiment list based on the plan ID.
     *
     * @param request - ListExperimentsRequest
     *
     * @returns ListExperimentsResponse
     *
     * @param ListExperimentsRequest $request
     *
     * @return ListExperimentsResponse
     */
    public function listExperiments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExperimentsWithOptions($request, $runtime);
    }

    /**
     * Query Resource Tags.
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
            'version' => '2023-08-28',
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
     * Query Resource Tags.
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
     * Get Workload List.
     *
     * @param request - ListWorkloadsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkloadsResponse
     *
     * @param ListWorkloadsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListWorkloadsResponse
     */
    public function listWorkloadsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkloads',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkloadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Workload List.
     *
     * @param request - ListWorkloadsRequest
     *
     * @returns ListWorkloadsResponse
     *
     * @param ListWorkloadsRequest $request
     *
     * @return ListWorkloadsResponse
     */
    public function listWorkloads($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkloadsWithOptions($request, $runtime);
    }

    /**
     * Stop Experiment.
     *
     * @param request - StopExperimentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopExperimentResponse
     *
     * @param StopExperimentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopExperimentResponse
     */
    public function stopExperimentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->experimentId) {
            @$query['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopExperiment',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stop Experiment.
     *
     * @param request - StopExperimentRequest
     *
     * @returns StopExperimentResponse
     *
     * @param StopExperimentRequest $request
     *
     * @return StopExperimentResponse
     */
    public function stopExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopExperimentWithOptions($request, $runtime);
    }

    /**
     * Tag Resources with User Labels.
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
            'version' => '2023-08-28',
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
     * Tag Resources with User Labels.
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
     * Remove User Tags from Resources.
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
            'version' => '2023-08-28',
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
     * Remove User Tags from Resources.
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
     * Update Experiment Plan.
     *
     * @param request - UpdateExperimentPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExperimentPlanResponse
     *
     * @param UpdateExperimentPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateExperimentPlanResponse
     */
    public function updateExperimentPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->planTemplateName) {
            @$query['PlanTemplateName'] = $request->planTemplateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateExperimentPlan',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateExperimentPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Experiment Plan.
     *
     * @param request - UpdateExperimentPlanRequest
     *
     * @returns UpdateExperimentPlanResponse
     *
     * @param UpdateExperimentPlanRequest $request
     *
     * @return UpdateExperimentPlanResponse
     */
    public function updateExperimentPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExperimentPlanWithOptions($request, $runtime);
    }

    /**
     * Update Test Plan Template.
     *
     * @param tmpReq - UpdateExperimentPlanTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExperimentPlanTemplateResponse
     *
     * @param UpdateExperimentPlanTemplateRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateExperimentPlanTemplateResponse
     */
    public function updateExperimentPlanTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateExperimentPlanTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->templatePipeline) {
            $request->templatePipelineShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templatePipeline, 'TemplatePipeline', 'json');
        }

        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $body = [];
        if (null !== $request->templatePipelineShrink) {
            @$body['TemplatePipeline'] = $request->templatePipelineShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExperimentPlanTemplate',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateExperimentPlanTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Test Plan Template.
     *
     * @param request - UpdateExperimentPlanTemplateRequest
     *
     * @returns UpdateExperimentPlanTemplateResponse
     *
     * @param UpdateExperimentPlanTemplateRequest $request
     *
     * @return UpdateExperimentPlanTemplateResponse
     */
    public function updateExperimentPlanTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExperimentPlanTemplateWithOptions($request, $runtime);
    }

    /**
     * Resource Connectivity Test.
     *
     * @param tmpReq - ValidateResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateResourceResponse
     *
     * @param ValidateResourceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ValidateResourceResponse
     */
    public function validateResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ValidateResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userAccessParam) {
            $request->userAccessParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userAccessParam, 'UserAccessParam', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $body = [];
        if (null !== $request->userAccessParamShrink) {
            @$body['UserAccessParam'] = $request->userAccessParamShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateResource',
            'version' => '2023-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resource Connectivity Test.
     *
     * @param request - ValidateResourceRequest
     *
     * @returns ValidateResourceResponse
     *
     * @param ValidateResourceRequest $request
     *
     * @return ValidateResourceResponse
     */
    public function validateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateResourceWithOptions($request, $runtime);
    }
}
