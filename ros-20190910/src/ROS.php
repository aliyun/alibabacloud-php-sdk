<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelStackOperationRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelStackOperationResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelUpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelUpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateAITaskRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateAITaskResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateDiagnosticRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateDiagnosticResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteDiagnosticRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteDiagnosticResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeregisterResourceTypeRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeregisterResourceTypeResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackGroupDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackGroupDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackGroupDriftShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackResourceDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackResourceDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ExecuteChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ExecuteChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplateByScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplateByScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetAITaskRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetAITaskResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetDiagnosticRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetDiagnosticResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackDriftDetectionStatusRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackDriftDetectionStatusResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackPolicyRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackPolicyResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResourceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResourceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRecommendParametersRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRecommendParametersResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ImportStacksToStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ImportStacksToStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ImportStacksToStackGroupShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListAITaskEventsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListAITaskEventsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListAITasksRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListAITasksResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListDiagnosticsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListDiagnosticsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeRegistrationsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeRegistrationsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeVersionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeVersionsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackEventsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackEventsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateVersionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateVersionsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\RegisterResourceTypeRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\RegisterResourceTypeResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetDeletionProtectionRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetDeletionProtectionResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetResourceTypeRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetResourceTypeResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetStackPolicyRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetStackPolicyResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetTemplatePermissionRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetTemplatePermissionResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SignalResourceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SignalResourceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\StopStackGroupOperationRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\StopStackGroupOperationResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackTemplateByResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackTemplateByResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ROS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ros', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Cancels operations on a stack.
     *
     * @param request - CancelStackOperationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelStackOperationResponse
     *
     * @param CancelStackOperationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelStackOperationResponse
     */
    public function cancelStackOperationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowedStackOperations) {
            @$query['AllowedStackOperations'] = $request->allowedStackOperations;
        }

        if (null !== $request->cancelType) {
            @$query['CancelType'] = $request->cancelType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelStackOperation',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelStackOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels operations on a stack.
     *
     * @param request - CancelStackOperationRequest
     *
     * @returns CancelStackOperationResponse
     *
     * @param CancelStackOperationRequest $request
     *
     * @return CancelStackOperationResponse
     */
    public function cancelStackOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelStackOperationWithOptions($request, $runtime);
    }

    /**
     * Cancels an update operation on a stack. You can call this operation to cancel an update operation on a stack when the stack is being updated or created.
     *
     * @param request - CancelUpdateStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelUpdateStackResponse
     *
     * @param CancelUpdateStackRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelUpdateStackResponse
     */
    public function cancelUpdateStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cancelType) {
            @$query['CancelType'] = $request->cancelType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelUpdateStack',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelUpdateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an update operation on a stack. You can call this operation to cancel an update operation on a stack when the stack is being updated or created.
     *
     * @param request - CancelUpdateStackRequest
     *
     * @returns CancelUpdateStackResponse
     *
     * @param CancelUpdateStackRequest $request
     *
     * @return CancelUpdateStackResponse
     */
    public function cancelUpdateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUpdateStackWithOptions($request, $runtime);
    }

    /**
     * Continues to create a stack after the stack fails to be created.
     *
     * @remarks
     * This topic provides an example on how to continue to create a stack after the stack fails to be created. In this example, the stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is created in the China (Hangzhou) region.
     *
     * @param request - ContinueCreateStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinueCreateStackResponse
     *
     * @param ContinueCreateStackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ContinueCreateStackResponse
     */
    public function continueCreateStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->parallelism) {
            @$query['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->recreatingOptions) {
            @$query['RecreatingOptions'] = $request->recreatingOptions;
        }

        if (null !== $request->recreatingResources) {
            @$query['RecreatingResources'] = $request->recreatingResources;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->templateBody) {
            @$query['TemplateBody'] = $request->templateBody;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ContinueCreateStack',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContinueCreateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Continues to create a stack after the stack fails to be created.
     *
     * @remarks
     * This topic provides an example on how to continue to create a stack after the stack fails to be created. In this example, the stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is created in the China (Hangzhou) region.
     *
     * @param request - ContinueCreateStackRequest
     *
     * @returns ContinueCreateStackResponse
     *
     * @param ContinueCreateStackRequest $request
     *
     * @return ContinueCreateStackResponse
     */
    public function continueCreateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueCreateStackWithOptions($request, $runtime);
    }

    /**
     * Create AI Task.
     *
     * @remarks
     * This API allows users to create an AI task based on the specified task type, covering a range of capabilities from natural language understanding to resource stack deployment. Users need to provide the task type and any required parameters, and the API will return a unique TaskId for tracking the status and results of the task.
     *
     * @param request - CreateAITaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAITaskResponse
     *
     * @param CreateAITaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAITaskResponse
     */
    public function createAITaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $body = [];
        if (null !== $request->template) {
            @$body['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAITask',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAITaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create AI Task.
     *
     * @remarks
     * This API allows users to create an AI task based on the specified task type, covering a range of capabilities from natural language understanding to resource stack deployment. Users need to provide the task type and any required parameters, and the API will return a unique TaskId for tracking the status and results of the task.
     *
     * @param request - CreateAITaskRequest
     *
     * @returns CreateAITaskResponse
     *
     * @param CreateAITaskRequest $request
     *
     * @return CreateAITaskResponse
     */
    public function createAITask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAITaskWithOptions($request, $runtime);
    }

    /**
     * Creates a change set for a stack. You can view proposed changes before you execute the change set.
     *
     * @remarks
     * ### [](#)Scenarios
     * #### [](#)Use a change set to create a stack
     * If you want to manage a large number of cloud resources and preview the creation effect of the resources before a stack that contains the resources is created, you can create the stack by using a change set. In this case, you must set `ChangeSetType` to CREATE and configure the relevant parameters. For more information about change sets, see [Change set](https://help.aliyun.com/document_detail/155649.html).
     * #### [](#)Use a change set to update a stack
     * If you want to preview the impacts of changes to an existing stack before you update the stack resources, you can create a change set for the stack. In this case, you must set ChangeSetType to UPDATE and configure the relevant parameters. For more information about change sets, see [Change set](https://help.aliyun.com/document_detail/155649.html).
     * #### [](#)Use a change set and existing resources to create a stack
     * If you want to add existing cloud resources to a new stack for centralized management, you can use a change set to create a stack and import the resources to the stack. In this case, you must set ChangeSetType to IMPORT and configure the relevant parameters. For more information about the resource import feature, see [Overview](https://help.aliyun.com/document_detail/193454.html).
     * #### [](#)Use a change set and existing resources to update a stack
     * If you want to import existing resources to an existing stack for centralized management, you can use a change set to update the stack. In this case, you must set ChangeSetType to IMPORT and configure the relevant parameters. For more information about the resource import feature, see [Overview](https://help.aliyun.com/document_detail/193454.html).
     * ### [](#)Limits
     * *   You can use change sets to update only stacks that are in specific states. For more information, see [Use a change set to update a stack](https://help.aliyun.com/document_detail/155873.html).
     * *   A stack can have up to 20 change sets.
     * *   Change sets reflect only the changes to stacks. Change sets do not reflect whether stacks can be successfully updated.
     * *   A change set does not check if you exceed an account limit, if you update resources that cannot be updated, or if you have insufficient permissions to modify resources, all of which can cause a stack update to fail. If a stack update fails, Resource Orchestration Service (ROS) attempts to roll back your resources to their original status.
     * This topic provides an example on how to use a change set to update a stack. In this example, a change set named `MyChangeSet` is created in the `China (Hangzhou)` region. The template of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is updated to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *
     * @param request - CreateChangeSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChangeSetResponse
     *
     * @param CreateChangeSetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateChangeSetResponse
     */
    public function createChangeSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeSetName) {
            @$query['ChangeSetName'] = $request->changeSetName;
        }

        if (null !== $request->changeSetType) {
            @$query['ChangeSetType'] = $request->changeSetType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableRollback) {
            @$query['DisableRollback'] = $request->disableRollback;
        }

        if (null !== $request->notificationURLs) {
            @$query['NotificationURLs'] = $request->notificationURLs;
        }

        if (null !== $request->parallelism) {
            @$query['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replacementOption) {
            @$query['ReplacementOption'] = $request->replacementOption;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourcesToImport) {
            @$query['ResourcesToImport'] = $request->resourcesToImport;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->stackName) {
            @$query['StackName'] = $request->stackName;
        }

        if (null !== $request->stackPolicyBody) {
            @$query['StackPolicyBody'] = $request->stackPolicyBody;
        }

        if (null !== $request->stackPolicyDuringUpdateBody) {
            @$query['StackPolicyDuringUpdateBody'] = $request->stackPolicyDuringUpdateBody;
        }

        if (null !== $request->stackPolicyDuringUpdateURL) {
            @$query['StackPolicyDuringUpdateURL'] = $request->stackPolicyDuringUpdateURL;
        }

        if (null !== $request->stackPolicyURL) {
            @$query['StackPolicyURL'] = $request->stackPolicyURL;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->taintResources) {
            @$query['TaintResources'] = $request->taintResources;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        if (null !== $request->timeoutInMinutes) {
            @$query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }

        if (null !== $request->usePreviousParameters) {
            @$query['UsePreviousParameters'] = $request->usePreviousParameters;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChangeSet',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a change set for a stack. You can view proposed changes before you execute the change set.
     *
     * @remarks
     * ### [](#)Scenarios
     * #### [](#)Use a change set to create a stack
     * If you want to manage a large number of cloud resources and preview the creation effect of the resources before a stack that contains the resources is created, you can create the stack by using a change set. In this case, you must set `ChangeSetType` to CREATE and configure the relevant parameters. For more information about change sets, see [Change set](https://help.aliyun.com/document_detail/155649.html).
     * #### [](#)Use a change set to update a stack
     * If you want to preview the impacts of changes to an existing stack before you update the stack resources, you can create a change set for the stack. In this case, you must set ChangeSetType to UPDATE and configure the relevant parameters. For more information about change sets, see [Change set](https://help.aliyun.com/document_detail/155649.html).
     * #### [](#)Use a change set and existing resources to create a stack
     * If you want to add existing cloud resources to a new stack for centralized management, you can use a change set to create a stack and import the resources to the stack. In this case, you must set ChangeSetType to IMPORT and configure the relevant parameters. For more information about the resource import feature, see [Overview](https://help.aliyun.com/document_detail/193454.html).
     * #### [](#)Use a change set and existing resources to update a stack
     * If you want to import existing resources to an existing stack for centralized management, you can use a change set to update the stack. In this case, you must set ChangeSetType to IMPORT and configure the relevant parameters. For more information about the resource import feature, see [Overview](https://help.aliyun.com/document_detail/193454.html).
     * ### [](#)Limits
     * *   You can use change sets to update only stacks that are in specific states. For more information, see [Use a change set to update a stack](https://help.aliyun.com/document_detail/155873.html).
     * *   A stack can have up to 20 change sets.
     * *   Change sets reflect only the changes to stacks. Change sets do not reflect whether stacks can be successfully updated.
     * *   A change set does not check if you exceed an account limit, if you update resources that cannot be updated, or if you have insufficient permissions to modify resources, all of which can cause a stack update to fail. If a stack update fails, Resource Orchestration Service (ROS) attempts to roll back your resources to their original status.
     * This topic provides an example on how to use a change set to update a stack. In this example, a change set named `MyChangeSet` is created in the `China (Hangzhou)` region. The template of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is updated to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *
     * @param request - CreateChangeSetRequest
     *
     * @returns CreateChangeSetResponse
     *
     * @param CreateChangeSetRequest $request
     *
     * @return CreateChangeSetResponse
     */
    public function createChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChangeSetWithOptions($request, $runtime);
    }

    /**
     * Creates a dignosis task.
     *
     * @param request - CreateDiagnosticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDiagnosticResponse
     *
     * @param CreateDiagnosticRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDiagnosticResponse
     */
    public function createDiagnosticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diagnosticKey) {
            @$query['DiagnosticKey'] = $request->diagnosticKey;
        }

        if (null !== $request->diagnosticType) {
            @$query['DiagnosticType'] = $request->diagnosticType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDiagnostic',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDiagnosticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a dignosis task.
     *
     * @param request - CreateDiagnosticRequest
     *
     * @returns CreateDiagnosticResponse
     *
     * @param CreateDiagnosticRequest $request
     *
     * @return CreateDiagnosticResponse
     */
    public function createDiagnostic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticWithOptions($request, $runtime);
    }

    /**
     * Creates a stack that contains a collection of resources by using a Resource Orchestration Service (ROS) template.
     *
     * @remarks
     * A stack is a collection of ROS resources that you can manage as a single unit. To create a collection of resources, you can create a stack. For more information about stacks, see [Overview](https://help.aliyun.com/document_detail/172973.html).\\
     * When you call the operation, take note of the following limits:
     * *   You can create up to 200 stacks within an Alibaba Cloud account.
     * *   You can create up to 200 resources in a stack.
     * This topic provides an example on how to create a stack named `MyStack` in the China (Hangzhou) region by using a template. In this example, `TemplateBody` is set to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *
     * @param request - CreateStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStackResponse
     *
     * @param CreateStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStackResponse
     */
    public function createStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->createOption) {
            @$query['CreateOption'] = $request->createOption;
        }

        if (null !== $request->createOptions) {
            @$query['CreateOptions'] = $request->createOptions;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->disableRollback) {
            @$query['DisableRollback'] = $request->disableRollback;
        }

        if (null !== $request->notificationURLs) {
            @$query['NotificationURLs'] = $request->notificationURLs;
        }

        if (null !== $request->parallelism) {
            @$query['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->stackName) {
            @$query['StackName'] = $request->stackName;
        }

        if (null !== $request->stackPolicyBody) {
            @$query['StackPolicyBody'] = $request->stackPolicyBody;
        }

        if (null !== $request->stackPolicyURL) {
            @$query['StackPolicyURL'] = $request->stackPolicyURL;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        if (null !== $request->templateScratchRegionId) {
            @$query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        if (null !== $request->timeoutInMinutes) {
            @$query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateStack',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a stack that contains a collection of resources by using a Resource Orchestration Service (ROS) template.
     *
     * @remarks
     * A stack is a collection of ROS resources that you can manage as a single unit. To create a collection of resources, you can create a stack. For more information about stacks, see [Overview](https://help.aliyun.com/document_detail/172973.html).\\
     * When you call the operation, take note of the following limits:
     * *   You can create up to 200 stacks within an Alibaba Cloud account.
     * *   You can create up to 200 resources in a stack.
     * This topic provides an example on how to create a stack named `MyStack` in the China (Hangzhou) region by using a template. In this example, `TemplateBody` is set to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *
     * @param request - CreateStackRequest
     *
     * @returns CreateStackResponse
     *
     * @param CreateStackRequest $request
     *
     * @return CreateStackResponse
     */
    public function createStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackWithOptions($request, $runtime);
    }

    /**
     * Creates stack groups based on Resource Orchestration Service (ROS) templates. Stack groups allow you to create stacks within multiple Alibaba Cloud accounts across regions.
     *
     * @remarks
     * A stack group is a collection of ROS stacks that you can manage as a unit. You can use an ROS template of a stack group to create stacks within Alibaba Cloud accounts across regions.
     * You can create a stack group that is granted self-managed or service-managed permissions:
     * *   If you use an Alibaba Cloud account to create a self-managed stack group, the administrator account and the execution account are Alibaba Cloud accounts.
     * *   If you enable a resource directory and use the management account or a delegated administrator account of the resource directory to create a service-managed stack group, the administrator account is the management account or delegated administrator account, and the execution account is a member account of the resource directory.
     * For more information about stack groups, see [Overview](https://help.aliyun.com/document_detail/154578.html).
     * In this topic, a stack group named `MyStackGroup` is created in the `China (Hangzhou)` region and granted the self-managed permissions. In this example, the template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is used.
     *
     * @param tmpReq - CreateStackGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStackGroupResponse
     *
     * @param CreateStackGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateStackGroupResponse
     */
    public function createStackGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateStackGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->autoDeployment) {
            $request->autoDeploymentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->autoDeployment, 'AutoDeployment', 'json');
        }

        $query = [];
        if (null !== $request->administrationRoleName) {
            @$query['AdministrationRoleName'] = $request->administrationRoleName;
        }

        if (null !== $request->autoDeploymentShrink) {
            @$query['AutoDeployment'] = $request->autoDeploymentShrink;
        }

        if (null !== $request->capabilities) {
            @$query['Capabilities'] = $request->capabilities;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->executionRoleName) {
            @$query['ExecutionRoleName'] = $request->executionRoleName;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->permissionModel) {
            @$query['PermissionModel'] = $request->permissionModel;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->stackArn) {
            @$query['StackArn'] = $request->stackArn;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateStackGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates stack groups based on Resource Orchestration Service (ROS) templates. Stack groups allow you to create stacks within multiple Alibaba Cloud accounts across regions.
     *
     * @remarks
     * A stack group is a collection of ROS stacks that you can manage as a unit. You can use an ROS template of a stack group to create stacks within Alibaba Cloud accounts across regions.
     * You can create a stack group that is granted self-managed or service-managed permissions:
     * *   If you use an Alibaba Cloud account to create a self-managed stack group, the administrator account and the execution account are Alibaba Cloud accounts.
     * *   If you enable a resource directory and use the management account or a delegated administrator account of the resource directory to create a service-managed stack group, the administrator account is the management account or delegated administrator account, and the execution account is a member account of the resource directory.
     * For more information about stack groups, see [Overview](https://help.aliyun.com/document_detail/154578.html).
     * In this topic, a stack group named `MyStackGroup` is created in the `China (Hangzhou)` region and granted the self-managed permissions. In this example, the template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is used.
     *
     * @param request - CreateStackGroupRequest
     *
     * @returns CreateStackGroupResponse
     *
     * @param CreateStackGroupRequest $request
     *
     * @return CreateStackGroupResponse
     */
    public function createStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackGroupWithOptions($request, $runtime);
    }

    /**
     * Creates stack instances in the specified accounts and regions.
     *
     * @remarks
     * Before you call this operation, make sure that a stack group is created. For more information, see [CreateStackGroup](https://help.aliyun.com/document_detail/151333.html).
     * In this topic, the stack group named `MyStackGroup` is used. The stack group is created in the China (Hangzhou) region and granted the self-managed permissions. In this example, stacks are created by using Alibaba Cloud accounts whose IDs are `151266687691****` and `141261387191****` in the China (Hangzhou) region and China (Beijing) region.
     *
     * @param tmpReq - CreateStackInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStackInstancesResponse
     *
     * @param CreateStackInstancesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateStackInstancesResponse
     */
    public function createStackInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateStackInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }

        if (null !== $tmpReq->deploymentTargets) {
            $request->deploymentTargetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deploymentTargets, 'DeploymentTargets', 'json');
        }

        if (null !== $tmpReq->operationPreferences) {
            $request->operationPreferencesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }

        if (null !== $tmpReq->regionIds) {
            $request->regionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['AccountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deploymentOptions) {
            @$query['DeploymentOptions'] = $request->deploymentOptions;
        }

        if (null !== $request->deploymentTargetsShrink) {
            @$query['DeploymentTargets'] = $request->deploymentTargetsShrink;
        }

        if (null !== $request->disableRollback) {
            @$query['DisableRollback'] = $request->disableRollback;
        }

        if (null !== $request->operationDescription) {
            @$query['OperationDescription'] = $request->operationDescription;
        }

        if (null !== $request->operationPreferencesShrink) {
            @$query['OperationPreferences'] = $request->operationPreferencesShrink;
        }

        if (null !== $request->parameterOverrides) {
            @$query['ParameterOverrides'] = $request->parameterOverrides;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionIdsShrink) {
            @$query['RegionIds'] = $request->regionIdsShrink;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        if (null !== $request->timeoutInMinutes) {
            @$query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStackInstances',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates stack instances in the specified accounts and regions.
     *
     * @remarks
     * Before you call this operation, make sure that a stack group is created. For more information, see [CreateStackGroup](https://help.aliyun.com/document_detail/151333.html).
     * In this topic, the stack group named `MyStackGroup` is used. The stack group is created in the China (Hangzhou) region and granted the self-managed permissions. In this example, stacks are created by using Alibaba Cloud accounts whose IDs are `151266687691****` and `141261387191****` in the China (Hangzhou) region and China (Beijing) region.
     *
     * @param request - CreateStackInstancesRequest
     *
     * @returns CreateStackInstancesResponse
     *
     * @param CreateStackInstancesRequest $request
     *
     * @return CreateStackInstancesResponse
     */
    public function createStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackInstancesWithOptions($request, $runtime);
    }

    /**
     * Creates a custom template.
     *
     * @remarks
     * In this topic, a custom template named `MyTemplate` is created in the `cn-hangzhou` region. The `TemplateBody` parameter of the template is set to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
     *
     * @param request - CreateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->validationOptions) {
            @$query['ValidationOptions'] = $request->validationOptions;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom template.
     *
     * @remarks
     * In this topic, a custom template named `MyTemplate` is created in the `cn-hangzhou` region. The `TemplateBody` parameter of the template is set to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
     *
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a resource scenario.
     *
     * @remarks
     * ### [](#)Limits
     * Only specific resource types support the resource scenario feature. For more information, see [Resource types that support the scenario feature](https://help.aliyun.com/document_detail/353175.htmll).
     * ### [](#)Description
     * Resource Orchestration Service (ROS) provides the resource scenario feature that allows you to specify the scope of a collection of resources on a user interface (UI) and perform operations, such as replication and management, on the resources. This helps you manage resources in a simplified manner. For more information about resource scenarios, see [Overview](https://help.aliyun.com/document_detail/352074.html).
     * #### [](#)Resource replication scenario
     * If you want to replicate a collection of resources and dependencies between the resources, you can create a resource replication scenario. This type of resource scenario allows you to replicate all existing resources within the specified scope and generate a collection of resources that have the same architecture as the existing resources. For more information, see [Resource replication scenario](https://help.aliyun.com/document_detail/353133.html).
     * #### [](#)Resource detection scenario
     * If the relationships between resources that you want to create are complicated, you can create a resource detection scenario to preview the overall resource architecture or the architecture of a specific resource. This facilitates resource management. For more information, see [Resource detection scenario](https://help.aliyun.com/document_detail/2591901.html).
     * #### [](#)Resource management scenario
     * If you want to import a collection of existing resources to a stack and manage the resources in a centralized manner, you can create a resource management scenario. For more information, see [Resource management scenario](https://help.aliyun.com/document_detail/353163.html).
     * #### [](#)Resource migration scenario
     * If you want to migrate a collection of resources and dependencies between the resources, you can create a resource migration scenario. When you migrate the resources, ROS generates a stack. You can view the migration progress on the Stacks tab of the scenario details page. After you migrate the resources, you can delete source resources. For more information, see [Resource migration scenario](https://help.aliyun.com/document_detail/379902.html).
     * This topic provides an example on how to create a resource replication scenario in the China (Hangzhou) region to replicate a resource. In this example, a virtual private cloud (VPC) whose ID is `vpc-bp1m6fww66xbntjyc****` is replicated.
     *
     * @param tmpReq - CreateTemplateScratchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateScratchResponse
     *
     * @param CreateTemplateScratchRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateTemplateScratchResponse
     */
    public function createTemplateScratchWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTemplateScratchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->preferenceParameters) {
            $request->preferenceParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->preferenceParameters, 'PreferenceParameters', 'json');
        }

        if (null !== $tmpReq->sourceResourceGroup) {
            $request->sourceResourceGroupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceResourceGroup, 'SourceResourceGroup', 'json');
        }

        if (null !== $tmpReq->sourceResources) {
            $request->sourceResourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceResources, 'SourceResources', 'json');
        }

        if (null !== $tmpReq->sourceTag) {
            $request->sourceTagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceTag, 'SourceTag', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->executionMode) {
            @$query['ExecutionMode'] = $request->executionMode;
        }

        if (null !== $request->logicalIdStrategy) {
            @$query['LogicalIdStrategy'] = $request->logicalIdStrategy;
        }

        if (null !== $request->preferenceParametersShrink) {
            @$query['PreferenceParameters'] = $request->preferenceParametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceResourceGroupShrink) {
            @$query['SourceResourceGroup'] = $request->sourceResourceGroupShrink;
        }

        if (null !== $request->sourceResourcesShrink) {
            @$query['SourceResources'] = $request->sourceResourcesShrink;
        }

        if (null !== $request->sourceTagShrink) {
            @$query['SourceTag'] = $request->sourceTagShrink;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templateScratchType) {
            @$query['TemplateScratchType'] = $request->templateScratchType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTemplateScratch',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource scenario.
     *
     * @remarks
     * ### [](#)Limits
     * Only specific resource types support the resource scenario feature. For more information, see [Resource types that support the scenario feature](https://help.aliyun.com/document_detail/353175.htmll).
     * ### [](#)Description
     * Resource Orchestration Service (ROS) provides the resource scenario feature that allows you to specify the scope of a collection of resources on a user interface (UI) and perform operations, such as replication and management, on the resources. This helps you manage resources in a simplified manner. For more information about resource scenarios, see [Overview](https://help.aliyun.com/document_detail/352074.html).
     * #### [](#)Resource replication scenario
     * If you want to replicate a collection of resources and dependencies between the resources, you can create a resource replication scenario. This type of resource scenario allows you to replicate all existing resources within the specified scope and generate a collection of resources that have the same architecture as the existing resources. For more information, see [Resource replication scenario](https://help.aliyun.com/document_detail/353133.html).
     * #### [](#)Resource detection scenario
     * If the relationships between resources that you want to create are complicated, you can create a resource detection scenario to preview the overall resource architecture or the architecture of a specific resource. This facilitates resource management. For more information, see [Resource detection scenario](https://help.aliyun.com/document_detail/2591901.html).
     * #### [](#)Resource management scenario
     * If you want to import a collection of existing resources to a stack and manage the resources in a centralized manner, you can create a resource management scenario. For more information, see [Resource management scenario](https://help.aliyun.com/document_detail/353163.html).
     * #### [](#)Resource migration scenario
     * If you want to migrate a collection of resources and dependencies between the resources, you can create a resource migration scenario. When you migrate the resources, ROS generates a stack. You can view the migration progress on the Stacks tab of the scenario details page. After you migrate the resources, you can delete source resources. For more information, see [Resource migration scenario](https://help.aliyun.com/document_detail/379902.html).
     * This topic provides an example on how to create a resource replication scenario in the China (Hangzhou) region to replicate a resource. In this example, a virtual private cloud (VPC) whose ID is `vpc-bp1m6fww66xbntjyc****` is replicated.
     *
     * @param request - CreateTemplateScratchRequest
     *
     * @returns CreateTemplateScratchResponse
     *
     * @param CreateTemplateScratchRequest $request
     *
     * @return CreateTemplateScratchResponse
     */
    public function createTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * Deletes change sets.
     *
     * @remarks
     *   Before you call this operation, make sure that the following requirements are met:
     *     *   The status of the change set is CREATE_COMPLETE, CREATE_FAILED, or DELETE_FAILED.
     *     *   The execution status is UNAVAILABLE or AVAILABLE.
     * *   After a change set is executed, other change sets associated with the same stack as this change set are also deleted.
     * *   After a stack is deleted, change sets associated with the stack are deleted.
     * *   If a change set of the CREATE type is deleted, you must delete stacks associated with the change set.
     * In this example, a change set whose ID is `1f6521a4-05af-4975-afe9-bc4b45ad****` is deleted. The change set is created in the China (Hangzhou) region.
     *
     * @param request - DeleteChangeSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChangeSetResponse
     *
     * @param DeleteChangeSetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeSetId) {
            @$query['ChangeSetId'] = $request->changeSetId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChangeSet',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes change sets.
     *
     * @remarks
     *   Before you call this operation, make sure that the following requirements are met:
     *     *   The status of the change set is CREATE_COMPLETE, CREATE_FAILED, or DELETE_FAILED.
     *     *   The execution status is UNAVAILABLE or AVAILABLE.
     * *   After a change set is executed, other change sets associated with the same stack as this change set are also deleted.
     * *   After a stack is deleted, change sets associated with the stack are deleted.
     * *   If a change set of the CREATE type is deleted, you must delete stacks associated with the change set.
     * In this example, a change set whose ID is `1f6521a4-05af-4975-afe9-bc4b45ad****` is deleted. The change set is created in the China (Hangzhou) region.
     *
     * @param request - DeleteChangeSetRequest
     *
     * @returns DeleteChangeSetResponse
     *
     * @param DeleteChangeSetRequest $request
     *
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChangeSetWithOptions($request, $runtime);
    }

    /**
     * Deletes a diagnostic record.
     *
     * @param request - DeleteDiagnosticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDiagnosticResponse
     *
     * @param DeleteDiagnosticRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDiagnosticResponse
     */
    public function deleteDiagnosticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDiagnostic',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDiagnosticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a diagnostic record.
     *
     * @param request - DeleteDiagnosticRequest
     *
     * @returns DeleteDiagnosticResponse
     *
     * @param DeleteDiagnosticRequest $request
     *
     * @return DeleteDiagnosticResponse
     */
    public function deleteDiagnostic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiagnosticWithOptions($request, $runtime);
    }

    /**
     * Deletes a stack. You can specify whether to retain resources.
     *
     * @param request - DeleteStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStackResponse
     *
     * @param DeleteStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStackResponse
     */
    public function deleteStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteOptions) {
            @$query['DeleteOptions'] = $request->deleteOptions;
        }

        if (null !== $request->parallelism) {
            @$query['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->retainAllResources) {
            @$query['RetainAllResources'] = $request->retainAllResources;
        }

        if (null !== $request->retainResources) {
            @$query['RetainResources'] = $request->retainResources;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStack',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a stack. You can specify whether to retain resources.
     *
     * @param request - DeleteStackRequest
     *
     * @returns DeleteStackResponse
     *
     * @param DeleteStackRequest $request
     *
     * @return DeleteStackResponse
     */
    public function deleteStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackWithOptions($request, $runtime);
    }

    /**
     * Deletes a stack group.
     *
     * @remarks
     * A stack group can be deleted only when the stack group does not contain stacks. You can call the [DeleteStackInstances](https://help.aliyun.com/document_detail/151715.html) operation to delete stacks.
     * This topic provides an example on how to delete a stack group. In this example, a stack group named `MyStackGroup` in the China (Hangzhou) region is deleted.
     *
     * @param request - DeleteStackGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStackGroupResponse
     *
     * @param DeleteStackGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteStackGroupResponse
     */
    public function deleteStackGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStackGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a stack group.
     *
     * @remarks
     * A stack group can be deleted only when the stack group does not contain stacks. You can call the [DeleteStackInstances](https://help.aliyun.com/document_detail/151715.html) operation to delete stacks.
     * This topic provides an example on how to delete a stack group. In this example, a stack group named `MyStackGroup` in the China (Hangzhou) region is deleted.
     *
     * @param request - DeleteStackGroupRequest
     *
     * @returns DeleteStackGroupResponse
     *
     * @param DeleteStackGroupRequest $request
     *
     * @return DeleteStackGroupResponse
     */
    public function deleteStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes stack instances in the specified accounts and regions. You can retain specific resources based on your business requirements when you call this operation.
     *
     * @remarks
     * In this topic, the stack group named `MyStackGroup` that is created in the China (Hangzhou) region is used. In this example, the stacks of the stack group that are deployed in the China (Beijing) region by using the Alibaba Cloud account whose ID is `151266687691****` are deleted.
     *
     * @param tmpReq - DeleteStackInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStackInstancesResponse
     *
     * @param DeleteStackInstancesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteStackInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }

        if (null !== $tmpReq->deploymentTargets) {
            $request->deploymentTargetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deploymentTargets, 'DeploymentTargets', 'json');
        }

        if (null !== $tmpReq->operationPreferences) {
            $request->operationPreferencesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }

        if (null !== $tmpReq->regionIds) {
            $request->regionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['AccountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deploymentTargetsShrink) {
            @$query['DeploymentTargets'] = $request->deploymentTargetsShrink;
        }

        if (null !== $request->operationDescription) {
            @$query['OperationDescription'] = $request->operationDescription;
        }

        if (null !== $request->operationPreferencesShrink) {
            @$query['OperationPreferences'] = $request->operationPreferencesShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionIdsShrink) {
            @$query['RegionIds'] = $request->regionIdsShrink;
        }

        if (null !== $request->retainStacks) {
            @$query['RetainStacks'] = $request->retainStacks;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStackInstances',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes stack instances in the specified accounts and regions. You can retain specific resources based on your business requirements when you call this operation.
     *
     * @remarks
     * In this topic, the stack group named `MyStackGroup` that is created in the China (Hangzhou) region is used. In this example, the stacks of the stack group that are deployed in the China (Beijing) region by using the Alibaba Cloud account whose ID is `151266687691****` are deleted.
     *
     * @param request - DeleteStackInstancesRequest
     *
     * @returns DeleteStackInstancesResponse
     *
     * @param DeleteStackInstancesRequest $request
     *
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackInstancesWithOptions($request, $runtime);
    }

    /**
     * Deletes a template.
     *
     * @remarks
     * If a template is shared with other Alibaba Cloud accounts, you must unshare the template before you delete it.
     *
     * @param request - DeleteTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
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
            'action' => 'DeleteTemplate',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a template.
     *
     * @remarks
     * If a template is shared with other Alibaba Cloud accounts, you must unshare the template before you delete it.
     *
     * @param request - DeleteTemplateRequest
     *
     * @returns DeleteTemplateResponse
     *
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a scenario.
     *
     * @remarks
     * In this topic, a scenario whose ID is `ts-4f83704400994409****` is deleted in the China (Hangzhou) region.
     *
     * @param request - DeleteTemplateScratchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateScratchResponse
     *
     * @param DeleteTemplateScratchRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteTemplateScratchResponse
     */
    public function deleteTemplateScratchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplateScratch',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scenario.
     *
     * @remarks
     * In this topic, a scenario whose ID is `ts-4f83704400994409****` is deleted in the China (Hangzhou) region.
     *
     * @param request - DeleteTemplateScratchRequest
     *
     * @returns DeleteTemplateScratchResponse
     *
     * @param DeleteTemplateScratchRequest $request
     *
     * @return DeleteTemplateScratchResponse
     */
    public function deleteTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * Deletes a resource type or a version of a resource type.
     *
     * @remarks
     *   If you delete a resource type, you can no longer use the resource type in Resource Orchestration Service (ROS).
     * *   If you delete a version of a resource type, you can no longer use the version in ROS.
     * *   If a resource type has only one version, you can delete the version by calling the operation. If a resource type has more than one version, you must manually delete the remaining versions.
     * *   When a resource type has more than one version, you cannot delete the default version by calling the operation.
     * *   When a resource type has only one version, you can delete the resource type and the version by calling the operation.
     *
     * @param request - DeregisterResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeregisterResourceTypeResponse
     *
     * @param DeregisterResourceTypeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeregisterResourceTypeResponse
     */
    public function deregisterResourceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeregisterResourceType',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeregisterResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource type or a version of a resource type.
     *
     * @remarks
     *   If you delete a resource type, you can no longer use the resource type in Resource Orchestration Service (ROS).
     * *   If you delete a version of a resource type, you can no longer use the version in ROS.
     * *   If a resource type has only one version, you can delete the version by calling the operation. If a resource type has more than one version, you must manually delete the remaining versions.
     * *   When a resource type has more than one version, you cannot delete the default version by calling the operation.
     * *   When a resource type has only one version, you can delete the resource type and the version by calling the operation.
     *
     * @param request - DeregisterResourceTypeRequest
     *
     * @returns DeregisterResourceTypeResponse
     *
     * @param DeregisterResourceTypeRequest $request
     *
     * @return DeregisterResourceTypeResponse
     */
    public function deregisterResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterResourceTypeWithOptions($request, $runtime);
    }

    /**
     * Queries a list of available regions.
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-09-10',
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
     * Queries a list of available regions.
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
     * You can call this operation to detect drift on a stack.
     *
     * @param request - DetectStackDriftRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectStackDriftResponse
     *
     * @param DetectStackDriftRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectStackDriftResponse
     */
    public function detectStackDriftWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->logicalResourceId) {
            @$query['LogicalResourceId'] = $request->logicalResourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectStackDrift',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectStackDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to detect drift on a stack.
     *
     * @param request - DetectStackDriftRequest
     *
     * @returns DetectStackDriftResponse
     *
     * @param DetectStackDriftRequest $request
     *
     * @return DetectStackDriftResponse
     */
    public function detectStackDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackDriftWithOptions($request, $runtime);
    }

    /**
     * 对资源栈组进行偏差检测.
     *
     * @param tmpReq - DetectStackGroupDriftRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectStackGroupDriftResponse
     *
     * @param DetectStackGroupDriftRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DetectStackGroupDriftResponse
     */
    public function detectStackGroupDriftWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectStackGroupDriftShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationPreferences) {
            $request->operationPreferencesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->operationPreferencesShrink) {
            @$query['OperationPreferences'] = $request->operationPreferencesShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectStackGroupDrift',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectStackGroupDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 对资源栈组进行偏差检测.
     *
     * @param request - DetectStackGroupDriftRequest
     *
     * @returns DetectStackGroupDriftResponse
     *
     * @param DetectStackGroupDriftRequest $request
     *
     * @return DetectStackGroupDriftResponse
     */
    public function detectStackGroupDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackGroupDriftWithOptions($request, $runtime);
    }

    /**
     * Performs drift detection on resources in a stack to determine whether the resources have drifted from the expected configurations.
     *
     * @param request - DetectStackResourceDriftRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectStackResourceDriftResponse
     *
     * @param DetectStackResourceDriftRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDriftWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->logicalResourceId) {
            @$query['LogicalResourceId'] = $request->logicalResourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectStackResourceDrift',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectStackResourceDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs drift detection on resources in a stack to determine whether the resources have drifted from the expected configurations.
     *
     * @param request - DetectStackResourceDriftRequest
     *
     * @returns DetectStackResourceDriftResponse
     *
     * @param DetectStackResourceDriftRequest $request
     *
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackResourceDriftWithOptions($request, $runtime);
    }

    /**
     * Executes change sets.
     *
     * @remarks
     * In this example, the change set whose ID is `1f6521a4-05af-4975-afe9-bc4b45ad****` is executed. The change set is created in the `China (Hangzhou)` region.
     *
     * @param request - ExecuteChangeSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteChangeSetResponse
     *
     * @param ExecuteChangeSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeSetId) {
            @$query['ChangeSetId'] = $request->changeSetId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteChangeSet',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes change sets.
     *
     * @remarks
     * In this example, the change set whose ID is `1f6521a4-05af-4975-afe9-bc4b45ad****` is executed. The change set is created in the `China (Hangzhou)` region.
     *
     * @param request - ExecuteChangeSetRequest
     *
     * @returns ExecuteChangeSetResponse
     *
     * @param ExecuteChangeSetRequest $request
     *
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeChangeSetWithOptions($request, $runtime);
    }

    /**
     * Generates a template for a resource scenario.
     *
     * @remarks
     * In this example, a template is generated for a resource management scenario that resides in the China (Hangzhou) region. The ID of the resource scenario is `ts-aa9c62feab844a6b****`.
     * >  You cannot generate a template for a resource detection scenario.
     *
     * @param request - GenerateTemplateByScratchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateTemplateByScratchResponse
     *
     * @param GenerateTemplateByScratchRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateTemplateByScratchResponse
     */
    public function generateTemplateByScratchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->provisionRegionId) {
            @$query['ProvisionRegionId'] = $request->provisionRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateTemplateByScratch',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateTemplateByScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a template for a resource scenario.
     *
     * @remarks
     * In this example, a template is generated for a resource management scenario that resides in the China (Hangzhou) region. The ID of the resource scenario is `ts-aa9c62feab844a6b****`.
     * >  You cannot generate a template for a resource detection scenario.
     *
     * @param request - GenerateTemplateByScratchRequest
     *
     * @returns GenerateTemplateByScratchResponse
     *
     * @param GenerateTemplateByScratchRequest $request
     *
     * @return GenerateTemplateByScratchResponse
     */
    public function generateTemplateByScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateTemplateByScratchWithOptions($request, $runtime);
    }

    /**
     * Generates the information about a policy that is required by a template.
     *
     * @remarks
     * If the policy information is related to Enterprise Distributed Application Service (EDAS), you must log on to your Alibaba Cloud account and grant the required permissions to the relevant RAM users.
     * In this example, a policy is generated for a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****`.
     *
     * @param request - GenerateTemplatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateTemplatePolicyResponse
     *
     * @param GenerateTemplatePolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GenerateTemplatePolicyResponse
     */
    public function generateTemplatePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationTypes) {
            @$query['OperationTypes'] = $request->operationTypes;
        }

        if (null !== $request->templateBody) {
            @$query['TemplateBody'] = $request->templateBody;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateTemplatePolicy',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateTemplatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates the information about a policy that is required by a template.
     *
     * @remarks
     * If the policy information is related to Enterprise Distributed Application Service (EDAS), you must log on to your Alibaba Cloud account and grant the required permissions to the relevant RAM users.
     * In this example, a policy is generated for a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****`.
     *
     * @param request - GenerateTemplatePolicyRequest
     *
     * @returns GenerateTemplatePolicyResponse
     *
     * @param GenerateTemplatePolicyRequest $request
     *
     * @return GenerateTemplatePolicyResponse
     */
    public function generateTemplatePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateTemplatePolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an AI task by task ID.
     *
     * @param request - GetAITaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAITaskResponse
     *
     * @param GetAITaskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetAITaskResponse
     */
    public function getAITaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputOption) {
            @$query['OutputOption'] = $request->outputOption;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAITask',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAITaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an AI task by task ID.
     *
     * @param request - GetAITaskRequest
     *
     * @returns GetAITaskResponse
     *
     * @param GetAITaskRequest $request
     *
     * @return GetAITaskResponse
     */
    public function getAITask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAITaskWithOptions($request, $runtime);
    }

    /**
     * Queries change sets. You can determine whether to query the templates of change sets.
     *
     * @remarks
     * In this example, the details of a change set whose ID is `4c11658d-bd47-4dd0-ba64-727edc62****` is queried. The change set is created in the China (Hangzhou) region.
     *
     * @param request - GetChangeSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChangeSetResponse
     *
     * @param GetChangeSetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetChangeSetResponse
     */
    public function getChangeSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeSetId) {
            @$query['ChangeSetId'] = $request->changeSetId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->showTemplate) {
            @$query['ShowTemplate'] = $request->showTemplate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChangeSet',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries change sets. You can determine whether to query the templates of change sets.
     *
     * @remarks
     * In this example, the details of a change set whose ID is `4c11658d-bd47-4dd0-ba64-727edc62****` is queried. The change set is created in the China (Hangzhou) region.
     *
     * @param request - GetChangeSetRequest
     *
     * @returns GetChangeSetResponse
     *
     * @param GetChangeSetRequest $request
     *
     * @return GetChangeSetResponse
     */
    public function getChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChangeSetWithOptions($request, $runtime);
    }

    /**
     * Obtains the diagnosis details based on a specified diagnostic report ID.
     *
     * @param request - GetDiagnosticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDiagnosticResponse
     *
     * @param GetDiagnosticRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDiagnosticResponse
     */
    public function getDiagnosticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDiagnostic',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDiagnosticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the diagnosis details based on a specified diagnostic report ID.
     *
     * @param request - GetDiagnosticRequest
     *
     * @returns GetDiagnosticResponse
     *
     * @param GetDiagnosticRequest $request
     *
     * @return GetDiagnosticResponse
     */
    public function getDiagnostic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiagnosticWithOptions($request, $runtime);
    }

    /**
     * Queries the details of features that are supported by Resource Orchestration Service (ROS).
     *
     * @remarks
     * You can call this operation to query the Terraform hosting, resource cleaner, and scenario features.
     * This topic provides an example on how to query the details of features supported by ROS in the China (Hangzhou) region. The details include Terraform versions, provider versions, and supported resource types.
     * >  In the Examples section, only part of the sample code is provided.
     *
     * @param request - GetFeatureDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFeatureDetailsResponse
     *
     * @param GetFeatureDetailsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetFeatureDetailsResponse
     */
    public function getFeatureDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feature) {
            @$query['Feature'] = $request->feature;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFeatureDetails',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFeatureDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of features that are supported by Resource Orchestration Service (ROS).
     *
     * @remarks
     * You can call this operation to query the Terraform hosting, resource cleaner, and scenario features.
     * This topic provides an example on how to query the details of features supported by ROS in the China (Hangzhou) region. The details include Terraform versions, provider versions, and supported resource types.
     * >  In the Examples section, only part of the sample code is provided.
     *
     * @param request - GetFeatureDetailsRequest
     *
     * @returns GetFeatureDetailsResponse
     *
     * @param GetFeatureDetailsRequest $request
     *
     * @return GetFeatureDetailsResponse
     */
    public function getFeatureDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFeatureDetailsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the details of `ALIYUN::ROS::WaitConditionHandle`.
     *
     * @remarks
     * For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *
     * @param request - GetResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceTypeResponse
     *
     * @param GetResourceTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceType',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the details of `ALIYUN::ROS::WaitConditionHandle`.
     *
     * @remarks
     * For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *
     * @param request - GetResourceTypeRequest
     *
     * @returns GetResourceTypeResponse
     *
     * @param GetResourceTypeRequest $request
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeWithOptions($request, $runtime);
    }

    /**
     * Generates a sample template based on a resource type.
     *
     * @param request - GetResourceTypeTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceTypeTemplateResponse
     *
     * @param GetResourceTypeTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceTypeTemplate',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceTypeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a sample template based on a resource type.
     *
     * @param request - GetResourceTypeTemplateRequest
     *
     * @returns GetResourceTypeTemplateResponse
     *
     * @param GetResourceTypeTemplateRequest $request
     *
     * @return GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the activation status and the RAM roles of an Alibaba Cloud service.
     *
     * @remarks
     * ### Description
     * This topic describes how to query the activation status and the RAM roles of an Alibaba Cloud service. In this example, the Elastic High Performance Computing (E-HPC) service that is deployed in the China (Hangzhou) region is queried.
     * > Make sure that you have the permissions to call the [GetRole](https://help.aliyun.com/document_detail/28711.html) operation.
     *
     * @param request - GetServiceProvisionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceProvisionsResponse
     *
     * @param GetServiceProvisionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceProvisionsResponse
     */
    public function getServiceProvisionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->services) {
            @$query['Services'] = $request->services;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetServiceProvisions',
            'version' => '2019-09-10',
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
     * Queries the activation status and the RAM roles of an Alibaba Cloud service.
     *
     * @remarks
     * ### Description
     * This topic describes how to query the activation status and the RAM roles of an Alibaba Cloud service. In this example, the Elastic High Performance Computing (E-HPC) service that is deployed in the China (Hangzhou) region is queried.
     * > Make sure that you have the permissions to call the [GetRole](https://help.aliyun.com/document_detail/28711.html) operation.
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
     * Queries the information about a stack in Resource Orchestration Service (ROS).
     *
     * @remarks
     * In this example, the information about a stack whose ID is `c754d2a4-28f1-46df-b557-9586173a****` in the China (Hangzhou) region is queried.
     *
     * @param request - GetStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackResponse
     *
     * @param GetStackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->logOption) {
            @$query['LogOption'] = $request->logOption;
        }

        if (null !== $request->outputOption) {
            @$query['OutputOption'] = $request->outputOption;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->showResourceProgress) {
            @$query['ShowResourceProgress'] = $request->showResourceProgress;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStack',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a stack in Resource Orchestration Service (ROS).
     *
     * @remarks
     * In this example, the information about a stack whose ID is `c754d2a4-28f1-46df-b557-9586173a****` in the China (Hangzhou) region is queried.
     *
     * @param request - GetStackRequest
     *
     * @returns GetStackResponse
     *
     * @param GetStackRequest $request
     *
     * @return GetStackResponse
     */
    public function getStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * Queries the drift detection status of a stack.
     *
     * @remarks
     * In this topic, the status of a drift detection operation whose ID is `a7044f0d-6f2e-4128-a307-4524ef88****` is queried. The operation is performed in the China (Hangzhou) region.
     *
     * @param request - GetStackDriftDetectionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackDriftDetectionStatusResponse
     *
     * @param GetStackDriftDetectionStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->driftDetectionId) {
            @$query['DriftDetectionId'] = $request->driftDetectionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStackDriftDetectionStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStackDriftDetectionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the drift detection status of a stack.
     *
     * @remarks
     * In this topic, the status of a drift detection operation whose ID is `a7044f0d-6f2e-4128-a307-4524ef88****` is queried. The operation is performed in the China (Hangzhou) region.
     *
     * @param request - GetStackDriftDetectionStatusRequest
     *
     * @returns GetStackDriftDetectionStatusResponse
     *
     * @param GetStackDriftDetectionStatusRequest $request
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackDriftDetectionStatusWithOptions($request, $runtime);
    }

    /**
     * In this example, the information about a stack group named \\`MyStackGroup\\` is queried. The stack group is granted self-managed permissions and created in the China (Hangzhou) region.
     *
     * @remarks
     * For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *
     * @param request - GetStackGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackGroupResponse
     *
     * @param GetStackGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetStackGroupResponse
     */
    public function getStackGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackGroupId) {
            @$query['StackGroupId'] = $request->stackGroupId;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStackGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In this example, the information about a stack group named \\`MyStackGroup\\` is queried. The stack group is granted self-managed permissions and created in the China (Hangzhou) region.
     *
     * @remarks
     * For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *
     * @param request - GetStackGroupRequest
     *
     * @returns GetStackGroupResponse
     *
     * @param GetStackGroupRequest $request
     *
     * @return GetStackGroupResponse
     */
    public function getStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a stack group operation in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the information about the stack group operation whose ID is `6da106ca-1784-4a6f-a7e1-e723863d****` is queried. The stack group named `MyStackGroup` is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *
     * @param request - GetStackGroupOperationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackGroupOperationResponse
     *
     * @param GetStackGroupOperationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetStackGroupOperationResponse
     */
    public function getStackGroupOperationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationId) {
            @$query['OperationId'] = $request->operationId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStackGroupOperation',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStackGroupOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a stack group operation in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the information about the stack group operation whose ID is `6da106ca-1784-4a6f-a7e1-e723863d****` is queried. The stack group named `MyStackGroup` is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *
     * @param request - GetStackGroupOperationRequest
     *
     * @returns GetStackGroupOperationResponse
     *
     * @param GetStackGroupOperationRequest $request
     *
     * @return GetStackGroupOperationResponse
     */
    public function getStackGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a stack instance that is associated with a stack group.
     *
     * @remarks
     * In this example, the information about a stack instance associated with a stack group named `MyStackGroup` is queried. The stack instance is deployed in the China (Beijing) region within the `151266687691****` Alibaba Cloud account. The stack group is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *
     * @param request - GetStackInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackInstanceResponse
     *
     * @param GetStackInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStackInstanceResponse
     */
    public function getStackInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputOption) {
            @$query['OutputOption'] = $request->outputOption;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        if (null !== $request->stackInstanceAccountId) {
            @$query['StackInstanceAccountId'] = $request->stackInstanceAccountId;
        }

        if (null !== $request->stackInstanceRegionId) {
            @$query['StackInstanceRegionId'] = $request->stackInstanceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStackInstance',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStackInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a stack instance that is associated with a stack group.
     *
     * @remarks
     * In this example, the information about a stack instance associated with a stack group named `MyStackGroup` is queried. The stack instance is deployed in the China (Beijing) region within the `151266687691****` Alibaba Cloud account. The stack group is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *
     * @param request - GetStackInstanceRequest
     *
     * @returns GetStackInstanceResponse
     *
     * @param GetStackInstanceRequest $request
     *
     * @return GetStackInstanceResponse
     */
    public function getStackInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query information about a stack policy.
     *
     * @remarks
     * In this example, the stack policy of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is queried. The stack is deployed in the China (Hangzhou) region.
     *
     * @param request - GetStackPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackPolicyResponse
     *
     * @param GetStackPolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetStackPolicyResponse
     */
    public function getStackPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStackPolicy',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStackPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query information about a stack policy.
     *
     * @remarks
     * In this example, the stack policy of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is queried. The stack is deployed in the China (Hangzhou) region.
     *
     * @param request - GetStackPolicyRequest
     *
     * @returns GetStackPolicyResponse
     *
     * @param GetStackPolicyRequest $request
     *
     * @return GetStackPolicyResponse
     */
    public function getStackPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackPolicyWithOptions($request, $runtime);
    }

    /**
     * For more information about common request parameters, see [Common parameters]\\(~~131957~~).
     *
     * @remarks
     * | Http status code | Error code | Error message | Description |
     * | ---------------- | ---------- | ------------- | ----------- |
     * | 404 | ResourceNotFound | The Resource ({name}) could not be found in Stack {stack}. | The error message returned because the specified resource does not exist in the stack. name indicates the resource name. stack indicates the stack name or ID. |
     * | 404 | StackNotFound | The Stack ({name}) could not be found. | The error message returned because the stack does not exist. name indicates the name or ID of the stack. |
     *
     * @param request - GetStackResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackResourceResponse
     *
     * @param GetStackResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStackResourceResponse
     */
    public function getStackResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->logicalResourceId) {
            @$query['LogicalResourceId'] = $request->logicalResourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceAttributes) {
            @$query['ResourceAttributes'] = $request->resourceAttributes;
        }

        if (null !== $request->showResourceAttributes) {
            @$query['ShowResourceAttributes'] = $request->showResourceAttributes;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStackResource',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStackResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about common request parameters, see [Common parameters]\\(~~131957~~).
     *
     * @remarks
     * | Http status code | Error code | Error message | Description |
     * | ---------------- | ---------- | ------------- | ----------- |
     * | 404 | ResourceNotFound | The Resource ({name}) could not be found in Stack {stack}. | The error message returned because the specified resource does not exist in the stack. name indicates the resource name. stack indicates the stack name or ID. |
     * | 404 | StackNotFound | The Stack ({name}) could not be found. | The error message returned because the stack does not exist. name indicates the name or ID of the stack. |
     *
     * @param request - GetStackResourceRequest
     *
     * @returns GetStackResourceResponse
     *
     * @param GetStackResourceRequest $request
     *
     * @return GetStackResourceResponse
     */
    public function getStackResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a template based on stacks, stack groups, change sets, or any custom template information.
     *
     * @remarks
     * In this example, the details of a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is queried. The region ID of the template is `cn-hangzhou`.
     *
     * @param request - GetTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeSetId) {
            @$query['ChangeSetId'] = $request->changeSetId;
        }

        if (null !== $request->includePermission) {
            @$query['IncludePermission'] = $request->includePermission;
        }

        if (null !== $request->includeTags) {
            @$query['IncludeTags'] = $request->includeTags;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateStage) {
            @$query['TemplateStage'] = $request->templateStage;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a template based on stacks, stack groups, change sets, or any custom template information.
     *
     * @remarks
     * In this example, the details of a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is queried. The region ID of the template is `cn-hangzhou`.
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the estimated prices of the resources in a template.
     *
     * @remarks
     * ###
     * *   For more information about the resources that support price inquiry in Resource Orchestration Service (ROS) templates, see the "**Resource types that support price inquiry**" section of the [Estimate resource prices](https://help.aliyun.com/document_detail/203165.html) topic.
     * *   For more information about the resources that support price inquiry in Terraform templates, see the "**ROS resources supported by Terraform**" section of the [ROS features and resources supported by Terraform](https://help.aliyun.com/document_detail/184389.html) topic.
     * The following sample code provides an example on how to query the estimated price of an elastic IP address (EIP) that you want to create based on a template. In this example, the following template is used:
     *     {
     *       "ROSTemplateFormatVersion": "2015-09-01",
     *       "Parameters": {
     *         "Isp": {
     *           "Type": "String",
     *           "Default": "BGP"
     *         },
     *         "Name": {
     *           "Type": "String",
     *           "Default": "test"
     *         },
     *         "Netmode": {
     *           "Type": "String",
     *           "Default": "public"
     *         },
     *         "Bandwidth": {
     *           "Type": "Number",
     *           "Default": 5
     *         }
     *       },
     *       "Resources": {
     *         "NewEip": {
     *           "Type": "ALIYUN::VPC::EIP",
     *           "Properties": {
     *             "InstanceChargeType": "Prepaid",
     *             "PricingCycle": "Month",
     *             "Isp": {
     *               "Ref": "Isp"
     *             },
     *             "Period": 1,
     *             "DeletionProtection": false,
     *             "AutoPay": false,
     *             "Name": {
     *               "Ref": "Name"
     *             },
     *             "InternetChargeType": "PayByTraffic",
     *             "Netmode": {
     *               "Ref": "Netmode"
     *             },
     *             "Bandwidth": {
     *               "Ref": "Bandwidth"
     *             }
     *           }
     *         }
     *       }
     *     }
     *
     * @param request - GetTemplateEstimateCostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateEstimateCostResponse
     *
     * @param GetTemplateEstimateCostRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        if (null !== $request->templateScratchRegionId) {
            @$query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTemplateEstimateCost',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateEstimateCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the estimated prices of the resources in a template.
     *
     * @remarks
     * ###
     * *   For more information about the resources that support price inquiry in Resource Orchestration Service (ROS) templates, see the "**Resource types that support price inquiry**" section of the [Estimate resource prices](https://help.aliyun.com/document_detail/203165.html) topic.
     * *   For more information about the resources that support price inquiry in Terraform templates, see the "**ROS resources supported by Terraform**" section of the [ROS features and resources supported by Terraform](https://help.aliyun.com/document_detail/184389.html) topic.
     * The following sample code provides an example on how to query the estimated price of an elastic IP address (EIP) that you want to create based on a template. In this example, the following template is used:
     *     {
     *       "ROSTemplateFormatVersion": "2015-09-01",
     *       "Parameters": {
     *         "Isp": {
     *           "Type": "String",
     *           "Default": "BGP"
     *         },
     *         "Name": {
     *           "Type": "String",
     *           "Default": "test"
     *         },
     *         "Netmode": {
     *           "Type": "String",
     *           "Default": "public"
     *         },
     *         "Bandwidth": {
     *           "Type": "Number",
     *           "Default": 5
     *         }
     *       },
     *       "Resources": {
     *         "NewEip": {
     *           "Type": "ALIYUN::VPC::EIP",
     *           "Properties": {
     *             "InstanceChargeType": "Prepaid",
     *             "PricingCycle": "Month",
     *             "Isp": {
     *               "Ref": "Isp"
     *             },
     *             "Period": 1,
     *             "DeletionProtection": false,
     *             "AutoPay": false,
     *             "Name": {
     *               "Ref": "Name"
     *             },
     *             "InternetChargeType": "PayByTraffic",
     *             "Netmode": {
     *               "Ref": "Netmode"
     *             },
     *             "Bandwidth": {
     *               "Ref": "Bandwidth"
     *             }
     *           }
     *         }
     *       }
     *     }
     *
     * @param request - GetTemplateEstimateCostRequest
     *
     * @returns GetTemplateEstimateCostResponse
     *
     * @param GetTemplateEstimateCostRequest $request
     *
     * @return GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateEstimateCostWithOptions($request, $runtime);
    }

    /**
     * Queries the values of one or more parameters in a template.
     *
     * @remarks
     * This topic provides an example on how to query the values of a parameter. In this example, the values of the `ZoneInfo` parameter in a template that is created in the China (Hangzhou) region are queried. The template body is `{"Parameters":{"ZoneInfo":{"Type": "String"},"InstanceType": {"Type": "String"}},"ROSTemplateFormatVersion": "2015-09-01","Resources":{"ECS":{"Properties":{"ZoneId":{"Ref": "ZoneInfo"},"InstanceType": {"Ref": "InstanceType"}},"Type": "ALIYUN::ECS::Instance"}}}`.
     * For more information about the template parameters whose values you can query by calling this operation and the sample code of the template, see [Query the constraints of parameters](https://help.aliyun.com/document_detail/432820.html).
     *
     * @param tmpReq - GetTemplateParameterConstraintsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateParameterConstraintsResponse
     *
     * @param GetTemplateParameterConstraintsRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return GetTemplateParameterConstraintsResponse
     */
    public function getTemplateParameterConstraintsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetTemplateParameterConstraintsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parametersKeyFilter) {
            $request->parametersKeyFilterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parametersKeyFilter, 'ParametersKeyFilter', 'json');
        }

        if (null !== $tmpReq->parametersOrder) {
            $request->parametersOrderShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parametersOrder, 'ParametersOrder', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->parametersKeyFilterShrink) {
            @$query['ParametersKeyFilter'] = $request->parametersKeyFilterShrink;
        }

        if (null !== $request->parametersOrderShrink) {
            @$query['ParametersOrder'] = $request->parametersOrderShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTemplateParameterConstraints',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateParameterConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the values of one or more parameters in a template.
     *
     * @remarks
     * This topic provides an example on how to query the values of a parameter. In this example, the values of the `ZoneInfo` parameter in a template that is created in the China (Hangzhou) region are queried. The template body is `{"Parameters":{"ZoneInfo":{"Type": "String"},"InstanceType": {"Type": "String"}},"ROSTemplateFormatVersion": "2015-09-01","Resources":{"ECS":{"Properties":{"ZoneId":{"Ref": "ZoneInfo"},"InstanceType": {"Ref": "InstanceType"}},"Type": "ALIYUN::ECS::Instance"}}}`.
     * For more information about the template parameters whose values you can query by calling this operation and the sample code of the template, see [Query the constraints of parameters](https://help.aliyun.com/document_detail/432820.html).
     *
     * @param request - GetTemplateParameterConstraintsRequest
     *
     * @returns GetTemplateParameterConstraintsResponse
     *
     * @param GetTemplateParameterConstraintsRequest $request
     *
     * @return GetTemplateParameterConstraintsResponse
     */
    public function getTemplateParameterConstraints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateParameterConstraintsWithOptions($request, $runtime);
    }

    /**
     * 推荐参数.
     *
     * @param request - GetTemplateRecommendParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateRecommendParametersResponse
     *
     * @param GetTemplateRecommendParametersRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetTemplateRecommendParametersResponse
     */
    public function getTemplateRecommendParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateBody) {
            @$query['TemplateBody'] = $request->templateBody;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplateRecommendParameters',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateRecommendParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推荐参数.
     *
     * @param request - GetTemplateRecommendParametersRequest
     *
     * @returns GetTemplateRecommendParametersResponse
     *
     * @param GetTemplateRecommendParametersRequest $request
     *
     * @return GetTemplateRecommendParametersResponse
     */
    public function getTemplateRecommendParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateRecommendParametersWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a resource scenario.
     *
     * @remarks
     * In this example, the details of the resource scenario whose ID is `ts-7f7a704cf71c49a6****` is queried. In the response, the source node data is displayed.
     *
     * @param request - GetTemplateScratchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateScratchResponse
     *
     * @param GetTemplateScratchRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTemplateScratchResponse
     */
    public function getTemplateScratchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->showDataOption) {
            @$query['ShowDataOption'] = $request->showDataOption;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplateScratch',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a resource scenario.
     *
     * @remarks
     * In this example, the details of the resource scenario whose ID is `ts-7f7a704cf71c49a6****` is queried. In the response, the source node data is displayed.
     *
     * @param request - GetTemplateScratchRequest
     *
     * @returns GetTemplateScratchResponse
     *
     * @param GetTemplateScratchRequest $request
     *
     * @return GetTemplateScratchResponse
     */
    public function getTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a template resource by using the relevant template, stack, stack group, or change set.
     *
     * @param request - GetTemplateSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateSummaryResponse
     *
     * @param GetTemplateSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTemplateSummaryResponse
     */
    public function getTemplateSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeSetId) {
            @$query['ChangeSetId'] = $request->changeSetId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->templateBody) {
            @$query['TemplateBody'] = $request->templateBody;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplateSummary',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a template resource by using the relevant template, stack, stack group, or change set.
     *
     * @param request - GetTemplateSummaryRequest
     *
     * @returns GetTemplateSummaryResponse
     *
     * @param GetTemplateSummaryRequest $request
     *
     * @return GetTemplateSummaryResponse
     */
    public function getTemplateSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateSummaryWithOptions($request, $runtime);
    }

    /**
     * Import stacks from multiple different accounts into a stack group.
     *
     * @param tmpReq - ImportStacksToStackGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportStacksToStackGroupResponse
     *
     * @param ImportStacksToStackGroupRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportStacksToStackGroupResponse
     */
    public function importStacksToStackGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportStacksToStackGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationPreferences) {
            $request->operationPreferencesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }

        if (null !== $tmpReq->resourceDirectoryFolderIds) {
            $request->resourceDirectoryFolderIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceDirectoryFolderIds, 'ResourceDirectoryFolderIds', 'json');
        }

        if (null !== $tmpReq->stackArns) {
            $request->stackArnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->stackArns, 'StackArns', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->operationDescription) {
            @$query['OperationDescription'] = $request->operationDescription;
        }

        if (null !== $request->operationPreferencesShrink) {
            @$query['OperationPreferences'] = $request->operationPreferencesShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceDirectoryFolderIdsShrink) {
            @$query['ResourceDirectoryFolderIds'] = $request->resourceDirectoryFolderIdsShrink;
        }

        if (null !== $request->stackArnsShrink) {
            @$query['StackArns'] = $request->stackArnsShrink;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportStacksToStackGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportStacksToStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Import stacks from multiple different accounts into a stack group.
     *
     * @param request - ImportStacksToStackGroupRequest
     *
     * @returns ImportStacksToStackGroupResponse
     *
     * @param ImportStacksToStackGroupRequest $request
     *
     * @return ImportStacksToStackGroupResponse
     */
    public function importStacksToStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importStacksToStackGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the events of an AI task.
     *
     * @param request - ListAITaskEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAITaskEventsResponse
     *
     * @param ListAITaskEventsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAITaskEventsResponse
     */
    public function listAITaskEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAITaskEvents',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAITaskEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the events of an AI task.
     *
     * @param request - ListAITaskEventsRequest
     *
     * @returns ListAITaskEventsResponse
     *
     * @param ListAITaskEventsRequest $request
     *
     * @return ListAITaskEventsResponse
     */
    public function listAITaskEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAITaskEventsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of AI tasks.
     *
     * @param request - ListAITasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAITasksResponse
     *
     * @param ListAITasksRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListAITasksResponse
     */
    public function listAITasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAITasks',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAITasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AI tasks.
     *
     * @param request - ListAITasksRequest
     *
     * @returns ListAITasksResponse
     *
     * @param ListAITasksRequest $request
     *
     * @return ListAITasksResponse
     */
    public function listAITasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAITasksWithOptions($request, $runtime);
    }

    /**
     * Queries change sets.
     *
     * @param request - ListChangeSetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChangeSetsResponse
     *
     * @param ListChangeSetsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListChangeSetsResponse
     */
    public function listChangeSetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeSetId) {
            @$query['ChangeSetId'] = $request->changeSetId;
        }

        if (null !== $request->changeSetName) {
            @$query['ChangeSetName'] = $request->changeSetName;
        }

        if (null !== $request->executionStatus) {
            @$query['ExecutionStatus'] = $request->executionStatus;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChangeSets',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListChangeSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries change sets.
     *
     * @param request - ListChangeSetsRequest
     *
     * @returns ListChangeSetsResponse
     *
     * @param ListChangeSetsRequest $request
     *
     * @return ListChangeSetsResponse
     */
    public function listChangeSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChangeSetsWithOptions($request, $runtime);
    }

    /**
     * Queries a diagnostic report.
     *
     * @param request - ListDiagnosticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDiagnosticsResponse
     *
     * @param ListDiagnosticsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDiagnosticsResponse
     */
    public function listDiagnosticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diagnosticKey) {
            @$query['DiagnosticKey'] = $request->diagnosticKey;
        }

        if (null !== $request->diagnosticProduct) {
            @$query['DiagnosticProduct'] = $request->diagnosticProduct;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDiagnostics',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDiagnosticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a diagnostic report.
     *
     * @param request - ListDiagnosticsRequest
     *
     * @returns ListDiagnosticsResponse
     *
     * @param ListDiagnosticsRequest $request
     *
     * @return ListDiagnosticsResponse
     */
    public function listDiagnostics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiagnosticsWithOptions($request, $runtime);
    }

    /**
     * Queries the registration records of a resource.
     *
     * @param request - ListResourceTypeRegistrationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceTypeRegistrationsResponse
     *
     * @param ListResourceTypeRegistrationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListResourceTypeRegistrationsResponse
     */
    public function listResourceTypeRegistrationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->registrationId) {
            @$query['RegistrationId'] = $request->registrationId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceTypeRegistrations',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceTypeRegistrationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the registration records of a resource.
     *
     * @param request - ListResourceTypeRegistrationsRequest
     *
     * @returns ListResourceTypeRegistrationsResponse
     *
     * @param ListResourceTypeRegistrationsRequest $request
     *
     * @return ListResourceTypeRegistrationsResponse
     */
    public function listResourceTypeRegistrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypeRegistrationsWithOptions($request, $runtime);
    }

    /**
     * Queries the versions of resource types, including the resource types created by you and provided by Resource Orchestration Service (ROS).
     *
     * @param request - ListResourceTypeVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceTypeVersionsResponse
     *
     * @param ListResourceTypeVersionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListResourceTypeVersionsResponse
     */
    public function listResourceTypeVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceTypeVersions',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceTypeVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the versions of resource types, including the resource types created by you and provided by Resource Orchestration Service (ROS).
     *
     * @param request - ListResourceTypeVersionsRequest
     *
     * @returns ListResourceTypeVersionsResponse
     *
     * @param ListResourceTypeVersionsRequest $request
     *
     * @return ListResourceTypeVersionsResponse
     */
    public function listResourceTypeVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypeVersionsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the list of resource types supported by Resource Orchestration Service (ROS).
     *
     * @remarks
     * For more information about errors common to all operations, see [Common error codes](/help/en/resource-orchestration-service/latest/common-error-codes).
     *
     * @param request - ListResourceTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceTypesResponse
     *
     * @param ListResourceTypesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceTypes',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the list of resource types supported by Resource Orchestration Service (ROS).
     *
     * @remarks
     * For more information about errors common to all operations, see [Common error codes](/help/en/resource-orchestration-service/latest/common-error-codes).
     *
     * @param request - ListResourceTypesRequest
     *
     * @returns ListResourceTypesResponse
     *
     * @param ListResourceTypesRequest $request
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypesWithOptions($request, $runtime);
    }

    /**
     * Queries a stack and the resource events of the stack.
     *
     * @param request - ListStackEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackEventsResponse
     *
     * @param ListStackEventsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListStackEventsResponse
     */
    public function listStackEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logicalResourceId) {
            @$query['LogicalResourceId'] = $request->logicalResourceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStackEvents',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStackEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a stack and the resource events of the stack.
     *
     * @param request - ListStackEventsRequest
     *
     * @returns ListStackEventsResponse
     *
     * @param ListStackEventsRequest $request
     *
     * @return ListStackEventsResponse
     */
    public function listStackEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the results of an operation on a stack group.
     *
     * @remarks
     * In this example, the operation ID `6da106ca-1784-4a6f-a7e1-e723863d∗∗∗∗` is set to query the results of an operation on a stack group named `MyStackGroup`. The stack group is granted self-managed permissions and created in the China (Hangzhou) region.
     *
     * @param request - ListStackGroupOperationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackGroupOperationResultsResponse
     *
     * @param ListStackGroupOperationResultsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationId) {
            @$query['OperationId'] = $request->operationId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStackGroupOperationResults',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStackGroupOperationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of an operation on a stack group.
     *
     * @remarks
     * In this example, the operation ID `6da106ca-1784-4a6f-a7e1-e723863d∗∗∗∗` is set to query the results of an operation on a stack group named `MyStackGroup`. The stack group is granted self-managed permissions and created in the China (Hangzhou) region.
     *
     * @param request - ListStackGroupOperationResultsRequest
     *
     * @returns ListStackGroupOperationResultsResponse
     *
     * @param ListStackGroupOperationResultsRequest $request
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationResultsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about stack group operations in an Alibaba Cloud region.
     *
     * @param request - ListStackGroupOperationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackGroupOperationsResponse
     *
     * @param ListStackGroupOperationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListStackGroupOperationsResponse
     */
    public function listStackGroupOperationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStackGroupOperations',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStackGroupOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about stack group operations in an Alibaba Cloud region.
     *
     * @param request - ListStackGroupOperationsRequest
     *
     * @returns ListStackGroupOperationsResponse
     *
     * @param ListStackGroupOperationsRequest $request
     *
     * @return ListStackGroupOperationsResponse
     */
    public function listStackGroupOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of stack groups in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the list of stack groups that are in the ACTIVE state and deployed in the China (Hangzhou) region is queried.
     *
     * @param request - ListStackGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackGroupsResponse
     *
     * @param ListStackGroupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListStackGroupsResponse
     */
    public function listStackGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStackGroups',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStackGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of stack groups in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the list of stack groups that are in the ACTIVE state and deployed in the China (Hangzhou) region is queried.
     *
     * @param request - ListStackGroupsRequest
     *
     * @returns ListStackGroupsResponse
     *
     * @param ListStackGroupsRequest $request
     *
     * @return ListStackGroupsResponse
     */
    public function listStackGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of stack instances that are associated with a stack group in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the list of stack instances that are associated with a stack group named `MyStackGroup` is queried. The stack group is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *
     * @param request - ListStackInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackInstancesResponse
     *
     * @param ListStackInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStackInstancesResponse
     */
    public function listStackInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        if (null !== $request->stackInstanceAccountId) {
            @$query['StackInstanceAccountId'] = $request->stackInstanceAccountId;
        }

        if (null !== $request->stackInstanceRegionId) {
            @$query['StackInstanceRegionId'] = $request->stackInstanceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStackInstances',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of stack instances that are associated with a stack group in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the list of stack instances that are associated with a stack group named `MyStackGroup` is queried. The stack group is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *
     * @param request - ListStackInstancesRequest
     *
     * @returns ListStackInstancesResponse
     *
     * @param ListStackInstancesRequest $request
     *
     * @return ListStackInstancesResponse
     */
    public function listStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackInstancesWithOptions($request, $runtime);
    }

    /**
     * Detects stack-related operation risks and returns missing permissions and the causes of the risks.
     *
     * @remarks
     * The ListStackOperationRisks operation is suitable for the following scenarios:
     * *   You want to detect high risks that may arise in resources when you delete a stack that contains the resources, and query the cause of each risk in a resource.
     * *   When you create a stack, the creation may fail. In this case, you can call this operation to check which types of permissions that are required to create stacks are missing.
     *
     * @param request - ListStackOperationRisksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackOperationRisksResponse
     *
     * @param ListStackOperationRisksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStackOperationRisksResponse
     */
    public function listStackOperationRisksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->retainAllResources) {
            @$query['RetainAllResources'] = $request->retainAllResources;
        }

        if (null !== $request->retainResources) {
            @$query['RetainResources'] = $request->retainResources;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListStackOperationRisks',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStackOperationRisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects stack-related operation risks and returns missing permissions and the causes of the risks.
     *
     * @remarks
     * The ListStackOperationRisks operation is suitable for the following scenarios:
     * *   You want to detect high risks that may arise in resources when you delete a stack that contains the resources, and query the cause of each risk in a resource.
     * *   When you create a stack, the creation may fail. In this case, you can call this operation to check which types of permissions that are required to create stacks are missing.
     *
     * @param request - ListStackOperationRisksRequest
     *
     * @returns ListStackOperationRisksResponse
     *
     * @param ListStackOperationRisksRequest $request
     *
     * @return ListStackOperationRisksResponse
     */
    public function listStackOperationRisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackOperationRisksWithOptions($request, $runtime);
    }

    /**
     * The query token. Set this parameter to the NextToken value returned in the last API call.
     *
     * @param request - ListStackResourceDriftsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackResourceDriftsResponse
     *
     * @param ListStackResourceDriftsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStackResourceDriftsResponse
     */
    public function listStackResourceDriftsWithOptions($request, $runtime)
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

        if (null !== $request->resourceDriftStatus) {
            @$query['ResourceDriftStatus'] = $request->resourceDriftStatus;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStackResourceDrifts',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStackResourceDriftsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The query token. Set this parameter to the NextToken value returned in the last API call.
     *
     * @param request - ListStackResourceDriftsRequest
     *
     * @returns ListStackResourceDriftsResponse
     *
     * @param ListStackResourceDriftsRequest $request
     *
     * @return ListStackResourceDriftsResponse
     */
    public function listStackResourceDrifts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourceDriftsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the resources in a specified stack. In this example, the resources in the stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region are queried.
     *
     * @remarks
     * For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *
     * @param request - ListStackResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackResourcesResponse
     *
     * @param ListStackResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStackResourcesResponse
     */
    public function listStackResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStackResources',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStackResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the resources in a specified stack. In this example, the resources in the stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region are queried.
     *
     * @remarks
     * For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *
     * @param request - ListStackResourcesRequest
     *
     * @returns ListStackResourcesResponse
     *
     * @param ListStackResourcesRequest $request
     *
     * @return ListStackResourcesResponse
     */
    public function listStackResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of stacks.
     *
     * @remarks
     * ###
     * This topic provides an example on how to query a list of stacks. In this example, the stacks that are deployed in the China (Hangzhou) region are queried.
     *
     * @param request - ListStacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStacksResponse
     *
     * @param ListStacksRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListStacksResponse
     */
    public function listStacksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentStackId) {
            @$query['ParentStackId'] = $request->parentStackId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->showNestedStack) {
            @$query['ShowNestedStack'] = $request->showNestedStack;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->stackIds) {
            @$query['StackIds'] = $request->stackIds;
        }

        if (null !== $request->stackName) {
            @$query['StackName'] = $request->stackName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStacks',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of stacks.
     *
     * @remarks
     * ###
     * This topic provides an example on how to query a list of stacks. In this example, the stacks that are deployed in the China (Hangzhou) region are queried.
     *
     * @param request - ListStacksRequest
     *
     * @returns ListStacksResponse
     *
     * @param ListStacksRequest $request
     *
     * @return ListStacksResponse
     */
    public function listStacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStacksWithOptions($request, $runtime);
    }

    /**
     * Queries the tag keys that are added to resources in a template or stack in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the tag keys that are added to a stack in the China (Hangzhou) region are queried.
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
            'version' => '2019-09-10',
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
     * Queries the tag keys that are added to resources in a template or stack in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the tag keys that are added to a stack in the China (Hangzhou) region are queried.
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
     * Queries the tags that are added to resources in a template or stack in an Alibaba Cloud region.
     *
     * @remarks
     * ###
     * *   To specify the query object, specify ResourceId or Tag in the request. Tag consists of Key and Value.
     * *   If you specify Tag and ResourceId, ROS resources that match both the parameters are returned.
     * This topic provides an example on how to query the tags that are added to a stack. In this example, the stack ID is `6bc589b5-9c02-4944-8fc3-f3624234****`. The stack is deployed in the China (Hangzhou) region.
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
            'version' => '2019-09-10',
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
     * Queries the tags that are added to resources in a template or stack in an Alibaba Cloud region.
     *
     * @remarks
     * ###
     * *   To specify the query object, specify ResourceId or Tag in the request. Tag consists of Key and Value.
     * *   If you specify Tag and ResourceId, ROS resources that match both the parameters are returned.
     * This topic provides an example on how to query the tags that are added to a stack. In this example, the stack ID is `6bc589b5-9c02-4944-8fc3-f3624234****`. The stack is deployed in the China (Hangzhou) region.
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
     * Queries the tag values that are added to resources in a template or stack in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the tag values of `TagKey1` that is added to a stack in the China (Hangzhou) region are queried.
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
            'version' => '2019-09-10',
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
     * Queries the tag values that are added to resources in a template or stack in an Alibaba Cloud region.
     *
     * @remarks
     * In this example, the tag values of `TagKey1` that is added to a stack in the China (Hangzhou) region are queried.
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
     * Queries scenarios.
     *
     * @remarks
     * In this example, the scenarios that are created in the China (Hangzhou) region are queried. In the response, a scenario of the Resource Management and a scenario of the Resource Replication type are returned.
     *
     * @param request - ListTemplateScratchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplateScratchesResponse
     *
     * @param ListTemplateScratchesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTemplateScratchesResponse
     */
    public function listTemplateScratchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        if (null !== $request->templateScratchType) {
            @$query['TemplateScratchType'] = $request->templateScratchType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplateScratches',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTemplateScratchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries scenarios.
     *
     * @remarks
     * In this example, the scenarios that are created in the China (Hangzhou) region are queried. In the response, a scenario of the Resource Management and a scenario of the Resource Replication type are returned.
     *
     * @param request - ListTemplateScratchesRequest
     *
     * @returns ListTemplateScratchesResponse
     *
     * @param ListTemplateScratchesRequest $request
     *
     * @return ListTemplateScratchesResponse
     */
    public function listTemplateScratches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateScratchesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of versions of a template.
     *
     * @param request - ListTemplateVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplateVersionsResponse
     *
     * @param ListTemplateVersionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListTemplateVersionsResponse
     */
    public function listTemplateVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplateVersions',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTemplateVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of versions of a template.
     *
     * @param request - ListTemplateVersionsRequest
     *
     * @returns ListTemplateVersionsResponse
     *
     * @param ListTemplateVersionsRequest $request
     *
     * @return ListTemplateVersionsResponse
     */
    public function listTemplateVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateVersionsWithOptions($request, $runtime);
    }

    /**
     * List Templates.
     *
     * @param request - ListTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->includeTags) {
            @$query['IncludeTags'] = $request->includeTags;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplates',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List Templates.
     *
     * @param request - ListTemplatesRequest
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * Moves a resource to a specific resource group.
     *
     * @remarks
     * In this example, a stack deployed in the `China (Hangzhou)` region is moved to a specific resource group. The ID of the stack is `4e8611cb-251e-42b7-b9cb-3496362c****` and the ID of the resource group is `rg-acfm3peow3k****`.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
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
            'action' => 'MoveResourceGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a resource to a specific resource group.
     *
     * @remarks
     * In this example, a stack deployed in the `China (Hangzhou)` region is moved to a specific resource group. The ID of the stack is `4e8611cb-251e-42b7-b9cb-3496362c****` and the ID of the resource group is `rg-acfm3peow3k****`.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Previews the information about a stack that you want to create based on a template. You can call this operation to verify whether the template resources are valid.
     *
     * @remarks
     * This topic provides an example on how to create a stack named `MyStack` in the China (Hangzhou) region by using a template and preview the information about the stack. In this example, the `template body` is `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *
     * @param request - PreviewStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewStackResponse
     *
     * @param PreviewStackRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PreviewStackResponse
     */
    public function previewStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->disableRollback) {
            @$query['DisableRollback'] = $request->disableRollback;
        }

        if (null !== $request->enablePreConfig) {
            @$query['EnablePreConfig'] = $request->enablePreConfig;
        }

        if (null !== $request->parallelism) {
            @$query['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->stackName) {
            @$query['StackName'] = $request->stackName;
        }

        if (null !== $request->stackPolicyBody) {
            @$query['StackPolicyBody'] = $request->stackPolicyBody;
        }

        if (null !== $request->stackPolicyURL) {
            @$query['StackPolicyURL'] = $request->stackPolicyURL;
        }

        if (null !== $request->taintResources) {
            @$query['TaintResources'] = $request->taintResources;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        if (null !== $request->templateScratchRegionId) {
            @$query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        if (null !== $request->timeoutInMinutes) {
            @$query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PreviewStack',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreviewStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Previews the information about a stack that you want to create based on a template. You can call this operation to verify whether the template resources are valid.
     *
     * @remarks
     * This topic provides an example on how to create a stack named `MyStack` in the China (Hangzhou) region by using a template and preview the information about the stack. In this example, the `template body` is `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *
     * @param request - PreviewStackRequest
     *
     * @returns PreviewStackResponse
     *
     * @param PreviewStackRequest $request
     *
     * @return PreviewStackResponse
     */
    public function previewStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewStackWithOptions($request, $runtime);
    }

    /**
     * Creates a new resource type, or creates a new version for an existing resource type.
     *
     * @remarks
     *   Versions increase from v1.
     * *   If you create a new resource type, v1 is used as the default version of the resource type. You can call the SetResourceType operation to change the default version of a resource type.
     *
     * @param request - RegisterResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterResourceTypeResponse
     *
     * @param RegisterResourceTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RegisterResourceTypeResponse
     */
    public function registerResourceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RegisterResourceType',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new resource type, or creates a new version for an existing resource type.
     *
     * @remarks
     *   Versions increase from v1.
     * *   If you create a new resource type, v1 is used as the default version of the resource type. You can call the SetResourceType operation to change the default version of a resource type.
     *
     * @param request - RegisterResourceTypeRequest
     *
     * @returns RegisterResourceTypeResponse
     *
     * @param RegisterResourceTypeRequest $request
     *
     * @return RegisterResourceTypeResponse
     */
    public function registerResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerResourceTypeWithOptions($request, $runtime);
    }

    /**
     * 修改资源栈的删除保护属性.
     *
     * @param request - SetDeletionProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDeletionProtectionResponse
     *
     * @param SetDeletionProtectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDeletionProtection',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改资源栈的删除保护属性.
     *
     * @param request - SetDeletionProtectionRequest
     *
     * @returns SetDeletionProtectionResponse
     *
     * @param SetDeletionProtectionRequest $request
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * Modifies a resource type or a version of a resource type.
     *
     * @param request - SetResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetResourceTypeResponse
     *
     * @param SetResourceTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetResourceTypeResponse
     */
    public function setResourceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultVersionId) {
            @$query['DefaultVersionId'] = $request->defaultVersionId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetResourceType',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a resource type or a version of a resource type.
     *
     * @param request - SetResourceTypeRequest
     *
     * @returns SetResourceTypeResponse
     *
     * @param SetResourceTypeRequest $request
     *
     * @return SetResourceTypeResponse
     */
    public function setResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setResourceTypeWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to configure a stack policy.
     *
     * @remarks
     * In this example, a stack policy is configured for a stack deployed in the `China (Hangzhou)` region whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`. The URL to the stack policy body is `oss://ros/stack-policy/demo`.
     *
     * @param request - SetStackPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetStackPolicyResponse
     *
     * @param SetStackPolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetStackPolicyResponse
     */
    public function setStackPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->stackPolicyBody) {
            @$query['StackPolicyBody'] = $request->stackPolicyBody;
        }

        if (null !== $request->stackPolicyURL) {
            @$query['StackPolicyURL'] = $request->stackPolicyURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetStackPolicy',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetStackPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to configure a stack policy.
     *
     * @remarks
     * In this example, a stack policy is configured for a stack deployed in the `China (Hangzhou)` region whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`. The URL to the stack policy body is `oss://ros/stack-policy/demo`.
     *
     * @param request - SetStackPolicyRequest
     *
     * @returns SetStackPolicyResponse
     *
     * @param SetStackPolicyRequest $request
     *
     * @return SetStackPolicyResponse
     */
    public function setStackPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setStackPolicyWithOptions($request, $runtime);
    }

    /**
     * Shares or unshares a template.
     *
     * @remarks
     * In this example, the template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is shared with an Alibaba Cloud account. The ID of the Alibaba Cloud account is `151266687691****`.
     * > The recipient Alibaba Cloud account (ID: `151266687691****`) can authorize RAM users to use the shared template.
     *
     * @param request - SetTemplatePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetTemplatePermissionResponse
     *
     * @param SetTemplatePermissionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetTemplatePermissionResponse
     */
    public function setTemplatePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountIds) {
            @$query['AccountIds'] = $request->accountIds;
        }

        if (null !== $request->shareOption) {
            @$query['ShareOption'] = $request->shareOption;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        if (null !== $request->versionOption) {
            @$query['VersionOption'] = $request->versionOption;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetTemplatePermission',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetTemplatePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shares or unshares a template.
     *
     * @remarks
     * In this example, the template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is shared with an Alibaba Cloud account. The ID of the Alibaba Cloud account is `151266687691****`.
     * > The recipient Alibaba Cloud account (ID: `151266687691****`) can authorize RAM users to use the shared template.
     *
     * @param request - SetTemplatePermissionRequest
     *
     * @returns SetTemplatePermissionResponse
     *
     * @param SetTemplatePermissionRequest $request
     *
     * @return SetTemplatePermissionResponse
     */
    public function setTemplatePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTemplatePermissionWithOptions($request, $runtime);
    }

    /**
     * Sends a signal to a resource in a stack.
     *
     * @param request - SignalResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SignalResourceResponse
     *
     * @param SignalResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SignalResourceResponse
     */
    public function signalResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->logicalResourceId) {
            @$query['LogicalResourceId'] = $request->logicalResourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SignalResource',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SignalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a signal to a resource in a stack.
     *
     * @param request - SignalResourceRequest
     *
     * @returns SignalResourceResponse
     *
     * @param SignalResourceRequest $request
     *
     * @return SignalResourceResponse
     */
    public function signalResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signalResourceWithOptions($request, $runtime);
    }

    /**
     * Stops a stack group operation.
     *
     * @remarks
     * This topic provides an example on how to stop a stack group operation whose ID is `6da106ca-1784-4a6f-a7e1-e723863****` in the China (Hangzhou) region.
     *
     * @param request - StopStackGroupOperationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopStackGroupOperationResponse
     *
     * @param StopStackGroupOperationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StopStackGroupOperationResponse
     */
    public function stopStackGroupOperationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationId) {
            @$query['OperationId'] = $request->operationId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopStackGroupOperation',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopStackGroupOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a stack group operation.
     *
     * @remarks
     * This topic provides an example on how to stop a stack group operation whose ID is `6da106ca-1784-4a6f-a7e1-e723863****` in the China (Hangzhou) region.
     *
     * @param request - StopStackGroupOperationRequest
     *
     * @returns StopStackGroupOperationResponse
     *
     * @param StopStackGroupOperationRequest $request
     *
     * @return StopStackGroupOperationResponse
     */
    public function stopStackGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * Creates and adds tags to resources.
     *
     * @remarks
     * This topic provides an example on how to create a tag and add the tag to a stack. In this example, the stack ID is `7fee80e1-8c48-4c2f-8300-0f6dc40b****`, the tag key is `FinanceDept`, and the tag value is `FinanceJoshua`.
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
            'version' => '2019-09-10',
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
     * Creates and adds tags to resources.
     *
     * @remarks
     * This topic provides an example on how to create a tag and add the tag to a stack. In this example, the stack ID is `7fee80e1-8c48-4c2f-8300-0f6dc40b****`, the tag key is `FinanceDept`, and the tag value is `FinanceJoshua`.
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
     * Removes tags from resources and then deletes the tags.
     *
     * @remarks
     * This topic provides an example on how to remove all tags from a stack that is deployed in the China (Hangzhou) region. In this example, the stack ID is `46ec7b78-9d5e-4b21-aefd-448c90aa****`.
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
            'version' => '2019-09-10',
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
     * Removes tags from resources and then deletes the tags.
     *
     * @remarks
     * This topic provides an example on how to remove all tags from a stack that is deployed in the China (Hangzhou) region. In this example, the stack ID is `46ec7b78-9d5e-4b21-aefd-448c90aa****`.
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
     * Updates a stack.
     *
     * @remarks
     * The values of parameters in the Parameters section vary based on the value that you specify for the UsePreviousParameters parameter in the request. If you do not add the parameters that are defined in the template to the Parameters section, take note of the following items:
     * *   UsePreviousParameters is set to false: If the template parameters have default values, the default values are used. Otherwise, you must specify values for the template parameters in the Parameters section.
     * *   UsePreviousParameters is set to true: If you specify values for the template parameters when you create a stack, the values are used. If you leave the template parameters empty when you create a stack but the template parameters have default values, the default values are used.
     * This topic describes how to update a stack. In this example, the template body of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Beijing) region is updated to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
     *
     * @param request - UpdateStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStackResponse
     *
     * @param UpdateStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStackResponse
     */
    public function updateStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->disableRollback) {
            @$query['DisableRollback'] = $request->disableRollback;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->dryRunOptions) {
            @$query['DryRunOptions'] = $request->dryRunOptions;
        }

        if (null !== $request->parallelism) {
            @$query['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replacementOption) {
            @$query['ReplacementOption'] = $request->replacementOption;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->stackPolicyBody) {
            @$query['StackPolicyBody'] = $request->stackPolicyBody;
        }

        if (null !== $request->stackPolicyDuringUpdateBody) {
            @$query['StackPolicyDuringUpdateBody'] = $request->stackPolicyDuringUpdateBody;
        }

        if (null !== $request->stackPolicyDuringUpdateURL) {
            @$query['StackPolicyDuringUpdateURL'] = $request->stackPolicyDuringUpdateURL;
        }

        if (null !== $request->stackPolicyURL) {
            @$query['StackPolicyURL'] = $request->stackPolicyURL;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->taintResources) {
            @$query['TaintResources'] = $request->taintResources;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        if (null !== $request->timeoutInMinutes) {
            @$query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }

        if (null !== $request->usePreviousParameters) {
            @$query['UsePreviousParameters'] = $request->usePreviousParameters;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateStack',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a stack.
     *
     * @remarks
     * The values of parameters in the Parameters section vary based on the value that you specify for the UsePreviousParameters parameter in the request. If you do not add the parameters that are defined in the template to the Parameters section, take note of the following items:
     * *   UsePreviousParameters is set to false: If the template parameters have default values, the default values are used. Otherwise, you must specify values for the template parameters in the Parameters section.
     * *   UsePreviousParameters is set to true: If you specify values for the template parameters when you create a stack, the values are used. If you leave the template parameters empty when you create a stack but the template parameters have default values, the default values are used.
     * This topic describes how to update a stack. In this example, the template body of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Beijing) region is updated to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
     *
     * @param request - UpdateStackRequest
     *
     * @returns UpdateStackResponse
     *
     * @param UpdateStackRequest $request
     *
     * @return UpdateStackResponse
     */
    public function updateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackWithOptions($request, $runtime);
    }

    /**
     * The region ID of the stack group. You can call the [DescribeRegions]\\(~~131035~~) operation to query the latest list of Alibaba Cloud regions.
     *
     * @remarks
     * The name of the stack group. The name must be unique within a region.
     * The name can be up to 255 characters in length and can contain digits, letters, hyphens (-), and underscores (_). The name must start with a digit or a letter.
     *
     * @param tmpReq - UpdateStackGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStackGroupResponse
     *
     * @param UpdateStackGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateStackGroupResponse
     */
    public function updateStackGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateStackGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }

        if (null !== $tmpReq->autoDeployment) {
            $request->autoDeploymentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->autoDeployment, 'AutoDeployment', 'json');
        }

        if (null !== $tmpReq->deploymentTargets) {
            $request->deploymentTargetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deploymentTargets, 'DeploymentTargets', 'json');
        }

        if (null !== $tmpReq->operationPreferences) {
            $request->operationPreferencesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }

        if (null !== $tmpReq->regionIds) {
            $request->regionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['AccountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->administrationRoleName) {
            @$query['AdministrationRoleName'] = $request->administrationRoleName;
        }

        if (null !== $request->autoDeploymentShrink) {
            @$query['AutoDeployment'] = $request->autoDeploymentShrink;
        }

        if (null !== $request->capabilities) {
            @$query['Capabilities'] = $request->capabilities;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deploymentOptions) {
            @$query['DeploymentOptions'] = $request->deploymentOptions;
        }

        if (null !== $request->deploymentTargetsShrink) {
            @$query['DeploymentTargets'] = $request->deploymentTargetsShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->executionRoleName) {
            @$query['ExecutionRoleName'] = $request->executionRoleName;
        }

        if (null !== $request->operationDescription) {
            @$query['OperationDescription'] = $request->operationDescription;
        }

        if (null !== $request->operationPreferencesShrink) {
            @$query['OperationPreferences'] = $request->operationPreferencesShrink;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->permissionModel) {
            @$query['PermissionModel'] = $request->permissionModel;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionIdsShrink) {
            @$query['RegionIds'] = $request->regionIdsShrink;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateStackGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The region ID of the stack group. You can call the [DescribeRegions]\\(~~131035~~) operation to query the latest list of Alibaba Cloud regions.
     *
     * @remarks
     * The name of the stack group. The name must be unique within a region.
     * The name can be up to 255 characters in length and can contain digits, letters, hyphens (-), and underscores (_). The name must start with a digit or a letter.
     *
     * @param request - UpdateStackGroupRequest
     *
     * @returns UpdateStackGroupResponse
     *
     * @param UpdateStackGroupRequest $request
     *
     * @return UpdateStackGroupResponse
     */
    public function updateStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackGroupWithOptions($request, $runtime);
    }

    /**
     * Updates stack instances in the specified accounts and regions.
     *
     * @remarks
     * In this topic, the stack group named `MyStackGroup` that is created in the China (Hangzhou) region is used. The stack group is granted the self-managed permissions. In this example, stacks of the stack group are updated by using the Alibaba Cloud accounts whose IDs are `151266687691****` and `141261387191****` in the China (Hangzhou) region and China (Beijing) region.
     *
     * @param tmpReq - UpdateStackInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStackInstancesResponse
     *
     * @param UpdateStackInstancesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateStackInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }

        if (null !== $tmpReq->deploymentTargets) {
            $request->deploymentTargetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deploymentTargets, 'DeploymentTargets', 'json');
        }

        if (null !== $tmpReq->operationPreferences) {
            $request->operationPreferencesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }

        if (null !== $tmpReq->regionIds) {
            $request->regionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['AccountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deploymentTargetsShrink) {
            @$query['DeploymentTargets'] = $request->deploymentTargetsShrink;
        }

        if (null !== $request->operationDescription) {
            @$query['OperationDescription'] = $request->operationDescription;
        }

        if (null !== $request->operationPreferencesShrink) {
            @$query['OperationPreferences'] = $request->operationPreferencesShrink;
        }

        if (null !== $request->parameterOverrides) {
            @$query['ParameterOverrides'] = $request->parameterOverrides;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionIdsShrink) {
            @$query['RegionIds'] = $request->regionIdsShrink;
        }

        if (null !== $request->stackGroupName) {
            @$query['StackGroupName'] = $request->stackGroupName;
        }

        if (null !== $request->timeoutInMinutes) {
            @$query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateStackInstances',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates stack instances in the specified accounts and regions.
     *
     * @remarks
     * In this topic, the stack group named `MyStackGroup` that is created in the China (Hangzhou) region is used. The stack group is granted the self-managed permissions. In this example, stacks of the stack group are updated by using the Alibaba Cloud accounts whose IDs are `151266687691****` and `141261387191****` in the China (Hangzhou) region and China (Beijing) region.
     *
     * @param request - UpdateStackInstancesRequest
     *
     * @returns UpdateStackInstancesResponse
     *
     * @param UpdateStackInstancesRequest $request
     *
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackInstancesWithOptions($request, $runtime);
    }

    /**
     * Corrects a template to eliminate stack drift.
     *
     * @remarks
     * Limits: You can eliminate only drift on stacks that have drifted. You must call the [DetectStackDrift](https://help.aliyun.com/document_detail/155094.html) operation to perform drift detection on a stack, call the [GetStackDriftDetectionStatus](https://help.aliyun.com/document_detail/155097.html) operation to query the drift status of the stack to make sure that the stack has drifted, and then call the UpdateStackTemplateByResources operation to eliminate drift.
     * In this topic, drift is eliminated for a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`. The stack is deployed in the China (Hangzhou) region.
     *
     * @param request - UpdateStackTemplateByResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStackTemplateByResourcesResponse
     *
     * @param UpdateStackTemplateByResourcesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->logicalResourceId) {
            @$query['LogicalResourceId'] = $request->logicalResourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stackId) {
            @$query['StackId'] = $request->stackId;
        }

        if (null !== $request->templateFormat) {
            @$query['TemplateFormat'] = $request->templateFormat;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateStackTemplateByResources',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateStackTemplateByResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Corrects a template to eliminate stack drift.
     *
     * @remarks
     * Limits: You can eliminate only drift on stacks that have drifted. You must call the [DetectStackDrift](https://help.aliyun.com/document_detail/155094.html) operation to perform drift detection on a stack, call the [GetStackDriftDetectionStatus](https://help.aliyun.com/document_detail/155097.html) operation to query the drift status of the stack to make sure that the stack has drifted, and then call the UpdateStackTemplateByResources operation to eliminate drift.
     * In this topic, drift is eliminated for a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`. The stack is deployed in the China (Hangzhou) region.
     *
     * @param request - UpdateStackTemplateByResourcesRequest
     *
     * @returns UpdateStackTemplateByResourcesResponse
     *
     * @param UpdateStackTemplateByResourcesRequest $request
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackTemplateByResourcesWithOptions($request, $runtime);
    }

    /**
     * Update Template.
     *
     * @remarks
     * When updating a template, please note:
     * - If you specify `TemplateBody` or `TemplateURL`, the template version will be incremented by 1 after a successful update. For example, the version changes from v1 to v2.
     * - If neither `TemplateBody` nor `TemplateURL` is specified, the template version remains unchanged.
     * - A template can have up to 100 versions. If the version limit is reached, the template update will fail, and you need to recreate the template.
     *
     * @param request - UpdateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateResponse
     *
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->isDraft) {
            @$query['IsDraft'] = $request->isDraft;
        }

        if (null !== $request->rotateStrategy) {
            @$query['RotateStrategy'] = $request->rotateStrategy;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->validationOptions) {
            @$query['ValidationOptions'] = $request->validationOptions;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Template.
     *
     * @remarks
     * When updating a template, please note:
     * - If you specify `TemplateBody` or `TemplateURL`, the template version will be incremented by 1 after a successful update. For example, the version changes from v1 to v2.
     * - If neither `TemplateBody` nor `TemplateURL` is specified, the template version remains unchanged.
     * - A template can have up to 100 versions. If the version limit is reached, the template update will fail, and you need to recreate the template.
     *
     * @param request - UpdateTemplateRequest
     *
     * @returns UpdateTemplateResponse
     *
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * Updates a scenario.
     *
     * @remarks
     * ### [](#)Resource replication scenario
     * Resource Orchestration Service (ROS) allows you to update a resource replication scenario. The updates that you make to a resource replication scenario do not affect the stack that is generated by using the resource scenario. You can call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     * ### [](#)Resource migration scenario
     * *   If you want to update a resource migration scenario in which the migrated source resources are retained, you can delete the source resources to manage the updated resource migration scenario. You can also call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     *     **
     *     **Note** Make sure that the source resources that you want to delete from a resource migration scenario are associated only with the resource scenario. Otherwise, the source resources fail to be deleted.
     * *   If you want to update a resource migration scenario in which the migrated source resources are deleted, you can only call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     * ### [](#)Resource management scenario
     * If you want to update a resource management scenario after you use the resource scenario to manage resources, you can only call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     * ### [](#)Resource detection scenario
     * After you update a resource detection scenario, ROS obtains the most recent data from Resource Center and renders the architecture diagram.
     * This topic provides an example on how to update a resource scenario. In this example, the ID of a virtual private cloud (VPC) in a resource scenario whose ID is `ts-7f7a704cf71c49a6****` is updated to `vpc-bp1m6fww66xbntjyc****`.
     *
     * @param tmpReq - UpdateTemplateScratchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateScratchResponse
     *
     * @param UpdateTemplateScratchRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateTemplateScratchResponse
     */
    public function updateTemplateScratchWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTemplateScratchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->preferenceParameters) {
            $request->preferenceParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->preferenceParameters, 'PreferenceParameters', 'json');
        }

        if (null !== $tmpReq->sourceResourceGroup) {
            $request->sourceResourceGroupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceResourceGroup, 'SourceResourceGroup', 'json');
        }

        if (null !== $tmpReq->sourceResources) {
            $request->sourceResourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceResources, 'SourceResources', 'json');
        }

        if (null !== $tmpReq->sourceTag) {
            $request->sourceTagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceTag, 'SourceTag', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->executionMode) {
            @$query['ExecutionMode'] = $request->executionMode;
        }

        if (null !== $request->logicalIdStrategy) {
            @$query['LogicalIdStrategy'] = $request->logicalIdStrategy;
        }

        if (null !== $request->preferenceParametersShrink) {
            @$query['PreferenceParameters'] = $request->preferenceParametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceResourceGroupShrink) {
            @$query['SourceResourceGroup'] = $request->sourceResourceGroupShrink;
        }

        if (null !== $request->sourceResourcesShrink) {
            @$query['SourceResources'] = $request->sourceResourcesShrink;
        }

        if (null !== $request->sourceTagShrink) {
            @$query['SourceTag'] = $request->sourceTagShrink;
        }

        if (null !== $request->templateScratchId) {
            @$query['TemplateScratchId'] = $request->templateScratchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplateScratch',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a scenario.
     *
     * @remarks
     * ### [](#)Resource replication scenario
     * Resource Orchestration Service (ROS) allows you to update a resource replication scenario. The updates that you make to a resource replication scenario do not affect the stack that is generated by using the resource scenario. You can call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     * ### [](#)Resource migration scenario
     * *   If you want to update a resource migration scenario in which the migrated source resources are retained, you can delete the source resources to manage the updated resource migration scenario. You can also call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     *     **
     *     **Note** Make sure that the source resources that you want to delete from a resource migration scenario are associated only with the resource scenario. Otherwise, the source resources fail to be deleted.
     * *   If you want to update a resource migration scenario in which the migrated source resources are deleted, you can only call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     * ### [](#)Resource management scenario
     * If you want to update a resource management scenario after you use the resource scenario to manage resources, you can only call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     * ### [](#)Resource detection scenario
     * After you update a resource detection scenario, ROS obtains the most recent data from Resource Center and renders the architecture diagram.
     * This topic provides an example on how to update a resource scenario. In this example, the ID of a virtual private cloud (VPC) in a resource scenario whose ID is `ts-7f7a704cf71c49a6****` is updated to `vpc-bp1m6fww66xbntjyc****`.
     *
     * @param request - UpdateTemplateScratchRequest
     *
     * @returns UpdateTemplateScratchResponse
     *
     * @param UpdateTemplateScratchRequest $request
     *
     * @return UpdateTemplateScratchResponse
     */
    public function updateTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * Validates a template by using a template URL or template body. The template is used to create a stack.
     *
     * @remarks
     * In this example, a template that you want to use to create a stack is validated. `TemplateURL` is set to `oss://ros/template/demo`.
     *
     * @param request - ValidateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateTemplateResponse
     *
     * @param ValidateTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ValidateTemplateResponse
     */
    public function validateTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        if (null !== $request->updateInfoOptions) {
            @$query['UpdateInfoOptions'] = $request->updateInfoOptions;
        }

        if (null !== $request->validationOption) {
            @$query['ValidationOption'] = $request->validationOption;
        }

        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateTemplate',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates a template by using a template URL or template body. The template is used to create a stack.
     *
     * @remarks
     * In this example, a template that you want to use to create a stack is validated. `TemplateURL` is set to `oss://ros/template/demo`.
     *
     * @param request - ValidateTemplateRequest
     *
     * @returns ValidateTemplateResponse
     *
     * @param ValidateTemplateRequest $request
     *
     * @return ValidateTemplateResponse
     */
    public function validateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTemplateWithOptions($request, $runtime);
    }
}
