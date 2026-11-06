<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\CreateJobPlanRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\CreateJobPlanResponse;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DeleteJobPlanRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DeleteJobPlanResponse;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\GetDistillationTemplateRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\GetDistillationTemplateResponse;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\GetJobPlanRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\GetJobPlanResponse;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\ListDistillationTemplatesRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\ListDistillationTemplatesResponse;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\ListJobPlansRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\ListJobPlansResponse;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\ListJobPlansShrinkRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\ListModelGalleryModelsRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\ListModelGalleryModelsResponse;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\ListModelGalleryModelsShrinkRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\UpdateJobPlanRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\UpdateJobPlanResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PAIModelGallery extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'PAIModelGallery';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paimodelgallery', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建任务计划。
     *
     * @param request - CreateJobPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobPlanResponse
     *
     * @param CreateJobPlanRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateJobPlanResponse
     */
    public function createJobPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobPlanName) {
            @$body['JobPlanName'] = $request->jobPlanName;
        }

        if (null !== $request->jobPlanSteps) {
            @$body['JobPlanSteps'] = $request->jobPlanSteps;
        }

        if (null !== $request->jobPlanType) {
            @$body['JobPlanType'] = $request->jobPlanType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJobPlan',
            'version' => '2025-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobplans',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateJobPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建任务计划。
     *
     * @param request - CreateJobPlanRequest
     *
     * @returns CreateJobPlanResponse
     *
     * @param CreateJobPlanRequest $request
     *
     * @return CreateJobPlanResponse
     */
    public function createJobPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除任务计划。
     *
     * @param request - DeleteJobPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobPlanResponse
     *
     * @param string               $JobPlanId
     * @param DeleteJobPlanRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteJobPlanResponse
     */
    public function deleteJobPlanWithOptions($JobPlanId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteJobPlan',
            'version' => '2025-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobplans/' . Url::percentEncode($JobPlanId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteJobPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除任务计划。
     *
     * @param request - DeleteJobPlanRequest
     *
     * @returns DeleteJobPlanResponse
     *
     * @param string               $JobPlanId
     * @param DeleteJobPlanRequest $request
     *
     * @return DeleteJobPlanResponse
     */
    public function deleteJobPlan($JobPlanId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobPlanWithOptions($JobPlanId, $request, $headers, $runtime);
    }

    /**
     * 查询蒸馏模板详情。
     *
     * @param request - GetDistillationTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDistillationTemplateResponse
     *
     * @param string                         $TemplateId
     * @param GetDistillationTemplateRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDistillationTemplateResponse
     */
    public function getDistillationTemplateWithOptions($TemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDistillationTemplate',
            'version' => '2025-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/distillationtemplates/' . Url::percentEncode($TemplateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDistillationTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询蒸馏模板详情。
     *
     * @param request - GetDistillationTemplateRequest
     *
     * @returns GetDistillationTemplateResponse
     *
     * @param string                         $TemplateId
     * @param GetDistillationTemplateRequest $request
     *
     * @return GetDistillationTemplateResponse
     */
    public function getDistillationTemplate($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDistillationTemplateWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * 获取任务计划。
     *
     * @param request - GetJobPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobPlanResponse
     *
     * @param string            $JobPlanId
     * @param GetJobPlanRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetJobPlanResponse
     */
    public function getJobPlanWithOptions($JobPlanId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetJobPlan',
            'version' => '2025-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobplans/' . Url::percentEncode($JobPlanId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务计划。
     *
     * @param request - GetJobPlanRequest
     *
     * @returns GetJobPlanResponse
     *
     * @param string            $JobPlanId
     * @param GetJobPlanRequest $request
     *
     * @return GetJobPlanResponse
     */
    public function getJobPlan($JobPlanId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobPlanWithOptions($JobPlanId, $request, $headers, $runtime);
    }

    /**
     * 查询蒸馏模板列表。
     *
     * @param request - ListDistillationTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDistillationTemplatesResponse
     *
     * @param ListDistillationTemplatesRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDistillationTemplatesResponse
     */
    public function listDistillationTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateKind) {
            @$query['TemplateKind'] = $request->templateKind;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDistillationTemplates',
            'version' => '2025-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/distillationtemplates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDistillationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询蒸馏模板列表。
     *
     * @param request - ListDistillationTemplatesRequest
     *
     * @returns ListDistillationTemplatesResponse
     *
     * @param ListDistillationTemplatesRequest $request
     *
     * @return ListDistillationTemplatesResponse
     */
    public function listDistillationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDistillationTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取任务计划列表。
     *
     * @param tmpReq - ListJobPlansRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobPlansResponse
     *
     * @param ListJobPlansRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListJobPlansResponse
     */
    public function listJobPlansWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListJobPlansShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->hasTemplate) {
            @$query['HasTemplate'] = $request->hasTemplate;
        }

        if (null !== $request->jobPlanName) {
            @$query['JobPlanName'] = $request->jobPlanName;
        }

        if (null !== $request->jobPlanType) {
            @$query['JobPlanType'] = $request->jobPlanType;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobPlans',
            'version' => '2025-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobplans',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务计划列表。
     *
     * @param request - ListJobPlansRequest
     *
     * @returns ListJobPlansResponse
     *
     * @param ListJobPlansRequest $request
     *
     * @return ListJobPlansResponse
     */
    public function listJobPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobPlansWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取ModelGallery模型列表.
     *
     * @param tmpReq - ListModelGalleryModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelGalleryModelsResponse
     *
     * @param ListModelGalleryModelsRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListModelGalleryModelsResponse
     */
    public function listModelGalleryModelsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModelGalleryModelsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->conditions) {
            $request->conditionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->conditions, 'Conditions', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->collections) {
            @$query['Collections'] = $request->collections;
        }

        if (null !== $request->compressible) {
            @$query['Compressible'] = $request->compressible;
        }

        if (null !== $request->conditionsShrink) {
            @$query['Conditions'] = $request->conditionsShrink;
        }

        if (null !== $request->deepThink) {
            @$query['DeepThink'] = $request->deepThink;
        }

        if (null !== $request->demonstrable) {
            @$query['Demonstrable'] = $request->demonstrable;
        }

        if (null !== $request->deployable) {
            @$query['Deployable'] = $request->deployable;
        }

        if (null !== $request->distillable) {
            @$query['Distillable'] = $request->distillable;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->evaluable) {
            @$query['Evaluable'] = $request->evaluable;
        }

        if (null !== $request->functionCall) {
            @$query['FunctionCall'] = $request->functionCall;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelSeries) {
            @$query['ModelSeries'] = $request->modelSeries;
        }

        if (null !== $request->modelType) {
            @$query['ModelType'] = $request->modelType;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->supportedCompressionResource) {
            @$query['SupportedCompressionResource'] = $request->supportedCompressionResource;
        }

        if (null !== $request->supportedDistillationResource) {
            @$query['SupportedDistillationResource'] = $request->supportedDistillationResource;
        }

        if (null !== $request->supportedEvaluationResource) {
            @$query['SupportedEvaluationResource'] = $request->supportedEvaluationResource;
        }

        if (null !== $request->supportedInferenceResource) {
            @$query['SupportedInferenceResource'] = $request->supportedInferenceResource;
        }

        if (null !== $request->supportedTrainingResource) {
            @$query['SupportedTrainingResource'] = $request->supportedTrainingResource;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->task) {
            @$query['Task'] = $request->task;
        }

        if (null !== $request->trainable) {
            @$query['Trainable'] = $request->trainable;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelGalleryModels',
            'version' => '2025-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/modelgallery/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelGalleryModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取ModelGallery模型列表.
     *
     * @param request - ListModelGalleryModelsRequest
     *
     * @returns ListModelGalleryModelsResponse
     *
     * @param ListModelGalleryModelsRequest $request
     *
     * @return ListModelGalleryModelsResponse
     */
    public function listModelGalleryModels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelGalleryModelsWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新任务计划。
     *
     * @param request - UpdateJobPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJobPlanResponse
     *
     * @param string               $JobPlanId
     * @param UpdateJobPlanRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateJobPlanResponse
     */
    public function updateJobPlanWithOptions($JobPlanId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobPlanCurrentStep) {
            @$body['JobPlanCurrentStep'] = $request->jobPlanCurrentStep;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJobPlan',
            'version' => '2025-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobplans/' . Url::percentEncode($JobPlanId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateJobPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新任务计划。
     *
     * @param request - UpdateJobPlanRequest
     *
     * @returns UpdateJobPlanResponse
     *
     * @param string               $JobPlanId
     * @param UpdateJobPlanRequest $request
     *
     * @return UpdateJobPlanResponse
     */
    public function updateJobPlan($JobPlanId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateJobPlanWithOptions($JobPlanId, $request, $headers, $runtime);
    }
}
