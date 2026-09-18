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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PAIModelGallery extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
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
     * Creates a new job plan that supports task types such as distillation.
     *
     * @remarks
     * ## Operation description
     * - This API operation creates a new node plan. You can specify the workspace ID, node plan type, name, and steps.
     * - If you use a scenario-specific distillation template, provide the `TemplateId` parameter and make sure that `JobPlanSteps` contains distillation configurations that match the template.
     * - The `Tag` parameter follows the Alibaba Cloud label system specification and is used to add additional identity information to the node plan.
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
     * Creates a new job plan that supports task types such as distillation.
     *
     * @remarks
     * ## Operation description
     * - This API operation creates a new node plan. You can specify the workspace ID, node plan type, name, and steps.
     * - If you use a scenario-specific distillation template, provide the `TemplateId` parameter and make sure that `JobPlanSteps` contains distillation configurations that match the template.
     * - The `Tag` parameter follows the Alibaba Cloud label system specification and is used to add additional identity information to the node plan.
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
     * Deletes a specified task plan by task plan ID.
     *
     * @remarks
     * ## Operation description.
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
     * Deletes a specified task plan by task plan ID.
     *
     * @remarks
     * ## Operation description.
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
     * Retrieves the details of a specified distillation template, including preset configurations and default YAML.
     *
     * @remarks
     * ## Operation description
     * - This API operation queries the full details of a specific distillation template to facilitate rendering the creation form.
     * - The template ID is a required parameter, obtained from the `ListDistillationTemplates` operation.
     * - The `DefaultConfig` field provides the complete EasyDistill configuration YAML (with comments). All paths in the YAML are relative paths, and callers do not need to perform absolute path conversion or string replacement.
     * - All translatable fields are automatically parsed into the corresponding language version based on the `x-acs-accept-language` request header.
     * - If the `TrainingOptions` field is missing, the template supports only the first stage of processing. Attempts to use such a template to create a task that includes the second stage will fail.
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
     * Retrieves the details of a specified distillation template, including preset configurations and default YAML.
     *
     * @remarks
     * ## Operation description
     * - This API operation queries the full details of a specific distillation template to facilitate rendering the creation form.
     * - The template ID is a required parameter, obtained from the `ListDistillationTemplates` operation.
     * - The `DefaultConfig` field provides the complete EasyDistill configuration YAML (with comments). All paths in the YAML are relative paths, and callers do not need to perform absolute path conversion or string replacement.
     * - All translatable fields are automatically parsed into the corresponding language version based on the `x-acs-accept-language` request header.
     * - If the `TrainingOptions` field is missing, the template supports only the first stage of processing. Attempts to use such a template to create a task that includes the second stage will fail.
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
     * Queries the details of a specified job plan by job plan ID.
     *
     * @remarks
     * ## Description
     * This API operation retrieves the details of a job plan based on the specified job plan ID (`JobPlanId`), including but not limited to the name, type, and current step status of the job plan. Make sure the `JobPlanId` provided in the request is valid and belongs to your workspace.
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
     * Queries the details of a specified job plan by job plan ID.
     *
     * @remarks
     * ## Description
     * This API operation retrieves the details of a job plan based on the specified job plan ID (`JobPlanId`), including but not limited to the name, type, and current step status of the job plan. Make sure the `JobPlanId` provided in the request is valid and belongs to your workspace.
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
     * Retrieves summary information of distillation templates for rendering the template card list.
     *
     * @remarks
     * ## Operation description
     * - This operation supports filtered queries by using the TemplateId, Category, and Keyword parameters.
     * - Pagination is controlled by the PageNumber and PageSize parameters, consistent with other paginated operations of the same service.
     * - Templates are public resources that do not belong to any workspace. Therefore, you do not need to specify WorkspaceId.
     * - All translatable fields such as TemplateName and Description are automatically parsed into the corresponding language version based on the x-acs-accept-language request header.
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
     * Retrieves summary information of distillation templates for rendering the template card list.
     *
     * @remarks
     * ## Operation description
     * - This operation supports filtered queries by using the TemplateId, Category, and Keyword parameters.
     * - Pagination is controlled by the PageNumber and PageSize parameters, consistent with other paginated operations of the same service.
     * - Templates are public resources that do not belong to any workspace. Therefore, you do not need to specify WorkspaceId.
     * - All translatable fields such as TemplateName and Description are automatically parsed into the corresponding language version based on the x-acs-accept-language request header.
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
     * Retrieves the list of job plans in a specified workspace.
     *
     * @remarks
     * ## Operation description
     * - `WorkspaceId` is a required parameter that specifies the workspace to which the job plans belong.
     * - The `Tag` parameter must be encoded by using `EncodeURI` before being passed.
     * - If both `TemplateId` and `HasTemplate` are specified, the value of `TemplateId` takes precedence for filtering.
     * - `JobPlanName` supports exact match. Enclose the specific name in quotation marks.
     * - By default, results are sorted in descending order by creation time (`GmtCreateTime`). Set the `Order` parameter to `ASC` to change the sort order.
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
     * Retrieves the list of job plans in a specified workspace.
     *
     * @remarks
     * ## Operation description
     * - `WorkspaceId` is a required parameter that specifies the workspace to which the job plans belong.
     * - The `Tag` parameter must be encoded by using `EncodeURI` before being passed.
     * - If both `TemplateId` and `HasTemplate` are specified, the value of `TemplateId` takes precedence for filtering.
     * - `JobPlanName` supports exact match. Enclose the specific name in quotation marks.
     * - By default, results are sorted in descending order by creation time (`GmtCreateTime`). Set the `Order` parameter to `ASC` to change the sort order.
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
     * Retrieves the list of models from ModelGallery (deprecated, use the 2026-06-03 version instead).
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
     * Retrieves the list of models from ModelGallery (deprecated, use the 2026-06-03 version instead).
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
     * Updates the current step and tag information of a specified task plan.
     *
     * @remarks
     * ## Request description
     * You can use this API operation to update the current execution step (`JobPlanCurrentStep`) and related tags (`Tag`) of a specific task plan identified by `JobPlanId`. If the request contains tag information, tags are updated or added based on the provided key-value pairs.
     * - **JobPlanId** is a path parameter. You must provide a valid task plan ID.
     * - **JobPlanCurrentStep** is an optional parameter that specifies the new current step of the task.
     * - **Tag** is an optional parameter that specifies a list of key-value pairs used to label the task plan. Each tag consists of a `Key` and a `Value`.
     * Note: Ensure that the `JobPlanId` you provide exists and that you have the permissions to modify it.
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
     * Updates the current step and tag information of a specified task plan.
     *
     * @remarks
     * ## Request description
     * You can use this API operation to update the current execution step (`JobPlanCurrentStep`) and related tags (`Tag`) of a specific task plan identified by `JobPlanId`. If the request contains tag information, tags are updated or added based on the provided key-value pairs.
     * - **JobPlanId** is a path parameter. You must provide a valid task plan ID.
     * - **JobPlanCurrentStep** is an optional parameter that specifies the new current step of the task.
     * - **Tag** is an optional parameter that specifies a list of key-value pairs used to label the task plan. Each tag consists of a `Key` and a `Value`.
     * Note: Ensure that the `JobPlanId` you provide exists and that you have the permissions to modify it.
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
