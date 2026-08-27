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
use AlibabaCloud\SDK\ROS\V20190910\Models\EnableServiceAccessResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\EnableServicesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\EnableServicesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\EnableServicesShrinkRequest;
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
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceAccessResponse;
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
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChatMessagesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChatMessagesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChatSessionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChatSessionsResponse;
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
use AlibabaCloud\SDK\ROS\V20190910\Models\ListSummariesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListSummariesResponse;
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
use AlibabaCloud\SDK\ROS\V20190910\Models\StartChatRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\StartChatResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\StopChatRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\StopChatResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'ros.aliyuncs.com',
            'ap-northeast-2' => 'ros.aliyuncs.com',
            'ap-southeast-1' => 'ros.aliyuncs.com',
            'ap-southeast-2' => 'ros.aliyuncs.com',
            'ap-southeast-3' => 'ros.aliyuncs.com',
            'ap-southeast-5' => 'ros.aliyuncs.com',
            'ap-southeast-6' => 'ros.aliyuncs.com',
            'ap-southeast-7' => 'ros.aliyuncs.com',
            'ap-southeast-8' => 'ros.aliyuncs.com',
            'cn-beijing' => 'ros.aliyuncs.com',
            'cn-chengdu' => 'ros.aliyuncs.com',
            'cn-fuzhou' => 'ros.aliyuncs.com',
            'cn-guangzhou' => 'ros.aliyuncs.com',
            'cn-hangzhou' => 'ros.aliyuncs.com',
            'cn-heyuan' => 'ros.aliyuncs.com',
            'cn-hongkong' => 'ros.aliyuncs.com',
            'cn-huhehaote' => 'ros.aliyuncs.com',
            'cn-nanjing' => 'ros.aliyuncs.com',
            'cn-qingdao' => 'ros.aliyuncs.com',
            'cn-shanghai' => 'ros.aliyuncs.com',
            'cn-shenzhen' => 'ros.aliyuncs.com',
            'cn-wuhan-lr' => 'ros.aliyuncs.com',
            'cn-wulanchabu' => 'ros.aliyuncs.com',
            'cn-zhangjiakou' => 'ros.aliyuncs.com',
            'cn-zhengzhou-jva' => 'ros.aliyuncs.com',
            'cn-zhongwei' => 'ros.aliyuncs.com',
            'eu-central-1' => 'ros.aliyuncs.com',
            'eu-west-1' => 'ros.aliyuncs.com',
            'eu-west-2' => 'ros.aliyuncs.com',
            'na-south-1' => 'ros.aliyuncs.com',
            'sa-east-1' => 'ros.aliyuncs.com',
            'us-east-1' => 'ros.aliyuncs.com',
            'us-southeast-1' => 'ros.aliyuncs.com',
            'us-west-1' => 'ros.aliyuncs.com',
            'ap-south-1' => 'ros.aliyuncs.com',
            'me-central-1' => 'ros.aliyuncs.com',
            'me-east-1' => 'ros.aliyuncs.com',
            'cn-hangzhou-finance' => 'ros.aliyuncs.com',
            'cn-heyuan-acdr-1' => 'ros.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ros.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'ros.aliyuncs.com',
            'cn-wulanchabu-gic-1' => 'ros.aliyuncs.com',
        ];
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
     * Creates a change set for a stack so you can preview changes before execution.
     *
     * @remarks
     * ### Scenarios
     * #### Create a stack using a change set
     * To manage cloud resources and preview creation results before the stack is created, set `ChangeSetType` to CREATE. [Change sets](https://help.aliyun.com/document_detail/155649.html).
     * #### Update a stack using a change set
     * To preview the impact of an update before applying changes, set `ChangeSetType` to UPDATE. [Change sets](https://help.aliyun.com/document_detail/155649.html).
     * #### Create a stack from existing resources
     * To import existing cloud resources into a new stack, set `ChangeSetType` to IMPORT. [Overview](https://help.aliyun.com/document_detail/193454.html).
     * #### Import existing resources to a stack
     * To import existing resources into an existing stack, set `ChangeSetType` to IMPORT. [Overview](https://help.aliyun.com/document_detail/193454.html).
     * ### Limits
     * - Only stacks in specific states can be updated using change sets. [Update a stack using a change set](https://help.aliyun.com/document_detail/155873.html).
     * - A stack can have a maximum of 20 change sets at a time.
     * - A change set shows only the changes to a stack. It does not indicate whether the stack will be successfully updated.
     * - A change set does not check for issues such as exceeded account quotas, non-updatable resources, or insufficient permissions. These issues can cause the stack update to fail. If the update fails, ROS attempts to roll back resources to their previous state.
     * In this example, a change set named `MyChangeSet` is created in the China (Hangzhou) region (`cn-hangzhou`) to update the template of stack `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
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
     * Creates a change set for a stack so you can preview changes before execution.
     *
     * @remarks
     * ### Scenarios
     * #### Create a stack using a change set
     * To manage cloud resources and preview creation results before the stack is created, set `ChangeSetType` to CREATE. [Change sets](https://help.aliyun.com/document_detail/155649.html).
     * #### Update a stack using a change set
     * To preview the impact of an update before applying changes, set `ChangeSetType` to UPDATE. [Change sets](https://help.aliyun.com/document_detail/155649.html).
     * #### Create a stack from existing resources
     * To import existing cloud resources into a new stack, set `ChangeSetType` to IMPORT. [Overview](https://help.aliyun.com/document_detail/193454.html).
     * #### Import existing resources to a stack
     * To import existing resources into an existing stack, set `ChangeSetType` to IMPORT. [Overview](https://help.aliyun.com/document_detail/193454.html).
     * ### Limits
     * - Only stacks in specific states can be updated using change sets. [Update a stack using a change set](https://help.aliyun.com/document_detail/155873.html).
     * - A stack can have a maximum of 20 change sets at a time.
     * - A change set shows only the changes to a stack. It does not indicate whether the stack will be successfully updated.
     * - A change set does not check for issues such as exceeded account quotas, non-updatable resources, or insufficient permissions. These issues can cause the stack update to fail. If the update fails, ROS attempts to roll back resources to their previous state.
     * In this example, a change set named `MyChangeSet` is created in the China (Hangzhou) region (`cn-hangzhou`) to update the template of stack `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
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
     * Creates a stack from a ROS template to deploy a group of resources.
     *
     * @remarks
     * A stack is the management unit for ROS resources ([Overview](https://help.aliyun.com/document_detail/172973.html)). Limits:
     * - Each Alibaba Cloud account can create up to 200 stacks.
     * - Each stack can contain up to 200 resources.
     * The following example creates a stack named `MyStack` in the China (Hangzhou) region with `TemplateBody` set to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
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
     * Creates a stack from a ROS template to deploy a group of resources.
     *
     * @remarks
     * A stack is the management unit for ROS resources ([Overview](https://help.aliyun.com/document_detail/172973.html)). Limits:
     * - Each Alibaba Cloud account can create up to 200 stacks.
     * - Each stack can contain up to 200 resources.
     * The following example creates a stack named `MyStack` in the China (Hangzhou) region with `TemplateBody` set to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
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
     * Creates a stack group from an ROS template to create stacks across multiple Alibaba Cloud accounts and regions.
     *
     * @remarks
     * A stack group manages multiple ROS stacks as a unit, enabling you to create stacks across Alibaba Cloud accounts and regions.
     * Stack groups support two permission models:
     * - Self-managed: Both the administrator and execution accounts are Alibaba Cloud accounts.
     * - Service-managed: The administrator account is the management account or delegated administrator account of a resource directory. The execution account is a member account of that directory.
     * [Overview](https://help.aliyun.com/document_detail/154578.html).
     * This example creates a self-managed stack group named `MyStackGroup` in the `China (Hangzhou)` region using template `5ecd1e10-b0e9-4389-a565-e4c15efc****`.
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
     * Creates a stack group from an ROS template to create stacks across multiple Alibaba Cloud accounts and regions.
     *
     * @remarks
     * A stack group manages multiple ROS stacks as a unit, enabling you to create stacks across Alibaba Cloud accounts and regions.
     * Stack groups support two permission models:
     * - Self-managed: Both the administrator and execution accounts are Alibaba Cloud accounts.
     * - Service-managed: The administrator account is the management account or delegated administrator account of a resource directory. The execution account is a member account of that directory.
     * [Overview](https://help.aliyun.com/document_detail/154578.html).
     * This example creates a self-managed stack group named `MyStackGroup` in the `China (Hangzhou)` region using template `5ecd1e10-b0e9-4389-a565-e4c15efc****`.
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
     * Creates stack instances for one or more accounts in the specified regions.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that a stack group is created. For more information, see [CreateStackGroup](https://help.aliyun.com/document_detail/151333.html).
     * ### Scenarios
     * #### Create stacks across accounts
     * To create identical resources in multiple accounts, an administrator account can create a stack group, add multiple destination accounts, and deploy resources in a single region. This process creates multiple stacks in different accounts within the same region, improving deployment efficiency.
     * #### Create stacks across regions
     * To create identical resources in multiple regions, an administrator account can create a stack group, add a destination account, and deploy resources in multiple regions. This process creates multiple stacks in different regions within the same account, improving deployment efficiency.
     * #### Create stacks across accounts and regions
     * To create identical resources in multiple accounts across multiple regions, an administrator account can create a stack group, add multiple destination accounts, and deploy resources in multiple regions. This process creates multiple stacks in different accounts across different regions, improving deployment efficiency.
     * This topic provides an example of creating stacks in the China (Hangzhou) and China (Beijing) regions in the Alibaba Cloud accounts `151266687691****` and `141261387191****`. The example uses a stack group named `MyStackGroup` that is created in the China (Hangzhou) region and uses self-managed permissions.
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
     * Creates stack instances for one or more accounts in the specified regions.
     *
     * @remarks
     * ### Prerequisites
     * Ensure that a stack group is created. For more information, see [CreateStackGroup](https://help.aliyun.com/document_detail/151333.html).
     * ### Scenarios
     * #### Create stacks across accounts
     * To create identical resources in multiple accounts, an administrator account can create a stack group, add multiple destination accounts, and deploy resources in a single region. This process creates multiple stacks in different accounts within the same region, improving deployment efficiency.
     * #### Create stacks across regions
     * To create identical resources in multiple regions, an administrator account can create a stack group, add a destination account, and deploy resources in multiple regions. This process creates multiple stacks in different regions within the same account, improving deployment efficiency.
     * #### Create stacks across accounts and regions
     * To create identical resources in multiple accounts across multiple regions, an administrator account can create a stack group, add multiple destination accounts, and deploy resources in multiple regions. This process creates multiple stacks in different accounts across different regions, improving deployment efficiency.
     * This topic provides an example of creating stacks in the China (Hangzhou) and China (Beijing) regions in the Alibaba Cloud accounts `151266687691****` and `141261387191****`. The example uses a stack group named `MyStackGroup` that is created in the China (Hangzhou) region and uses self-managed permissions.
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
     * This topic provides an example of how to create a template named `MyTemplate` in the China (Hangzhou) region (`cn-hangzhou`). The `TemplateBody` parameter is set to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
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
     * This topic provides an example of how to create a template named `MyTemplate` in the China (Hangzhou) region (`cn-hangzhou`). The `TemplateBody` parameter is set to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
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
     * Creates templatescratch: scenario.
     *
     * @remarks
     * ### Limits
     * Only specific resource types support the resource scenario feature. For more information, refer to [Resource types that support scenarios](https://help.aliyun.com/document_detail/353175.html).
     * ### Description
     * Resource Orchestration Service (ROS) provides the resource scenario feature. You can select a resource scope in the UI and perform operations such as replication or management of a group of resources, helping simplify resource management. For more information about resource scenarios, refer to [Overview](https://help.aliyun.com/document_detail/352074.html).
     * #### Resource replication scenario
     * If you want to replicate a collection of resources and dependencies between the resources, you can create a resource replication scenario. This type of scenario lets you replicate all existing resources within the specified scope and generate a collection of resources that have the same architecture as the existing resources. For more information, refer to [Resource replication scenario](https://help.aliyun.com/document_detail/353133.html).
     * #### Resource profiling scenario
     * If the relationships between resources that you want to create are complicated, you can create a resource profiling scenario to preview the overall resource architecture or the architecture starting from a specific resource. This helps simplify resource management. For more information, refer to [Resource detection scenario](https://help.aliyun.com/document_detail/2591901.html).
     * #### Resource management scenario
     * If you need to import a collection of existing resources into a new resource stack for unified management, you can create a resource management scenario. For more information, refer to [Resource management scenario](https://help.aliyun.com/document_detail/353163.html).
     * #### Resource migration scenario
     * If you want to migrate a collection of resources and dependencies between the resources, you can create a resource migration scenario. When you migrate the resources, ROS generates a stack. You can view the migration progress on the Stacks tab of the scenario details page. After you migrate the resources, you can delete source resources. For more information, refer to [Resource migration scenario](https://help.aliyun.com/document_detail/379902.html).
     * This topic provides an example of how to create a resource replication scenario in the China (Hangzhou) region to replicate a virtual private cloud (VPC) with the ID of `vpc-bp1m6fww66xbntjyc****`.
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
     * Creates templatescratch: scenario.
     *
     * @remarks
     * ### Limits
     * Only specific resource types support the resource scenario feature. For more information, refer to [Resource types that support scenarios](https://help.aliyun.com/document_detail/353175.html).
     * ### Description
     * Resource Orchestration Service (ROS) provides the resource scenario feature. You can select a resource scope in the UI and perform operations such as replication or management of a group of resources, helping simplify resource management. For more information about resource scenarios, refer to [Overview](https://help.aliyun.com/document_detail/352074.html).
     * #### Resource replication scenario
     * If you want to replicate a collection of resources and dependencies between the resources, you can create a resource replication scenario. This type of scenario lets you replicate all existing resources within the specified scope and generate a collection of resources that have the same architecture as the existing resources. For more information, refer to [Resource replication scenario](https://help.aliyun.com/document_detail/353133.html).
     * #### Resource profiling scenario
     * If the relationships between resources that you want to create are complicated, you can create a resource profiling scenario to preview the overall resource architecture or the architecture starting from a specific resource. This helps simplify resource management. For more information, refer to [Resource detection scenario](https://help.aliyun.com/document_detail/2591901.html).
     * #### Resource management scenario
     * If you need to import a collection of existing resources into a new resource stack for unified management, you can create a resource management scenario. For more information, refer to [Resource management scenario](https://help.aliyun.com/document_detail/353163.html).
     * #### Resource migration scenario
     * If you want to migrate a collection of resources and dependencies between the resources, you can create a resource migration scenario. When you migrate the resources, ROS generates a stack. You can view the migration progress on the Stacks tab of the scenario details page. After you migrate the resources, you can delete source resources. For more information, refer to [Resource migration scenario](https://help.aliyun.com/document_detail/379902.html).
     * This topic provides an example of how to create a resource replication scenario in the China (Hangzhou) region to replicate a virtual private cloud (VPC) with the ID of `vpc-bp1m6fww66xbntjyc****`.
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
     * - Before you call this operation, make sure that the following requirements are met:
     *   - The status of the change set is CREATE_COMPLETE, CREATE_FAILED, or DELETE_FAILED.
     *   - The execution status is UNAVAILABLE or AVAILABLE.
     * - After a change set is executed, other change sets associated with the same stack as this change set are also deleted.
     * - After a stack is deleted, change sets associated with the stack are deleted.
     * - If a change set of the CREATE type is deleted, you must delete stacks associated with the change set.
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
     * - Before you call this operation, make sure that the following requirements are met:
     *   - The status of the change set is CREATE_COMPLETE, CREATE_FAILED, or DELETE_FAILED.
     *   - The execution status is UNAVAILABLE or AVAILABLE.
     * - After a change set is executed, other change sets associated with the same stack as this change set are also deleted.
     * - After a stack is deleted, change sets associated with the stack are deleted.
     * - If a change set of the CREATE type is deleted, you must delete stacks associated with the change set.
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
     * Deletes a stack, optionally retaining resources.
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
     * Deletes a stack, optionally retaining resources.
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
     * Deletes stack instances from specified accounts and regions. You can choose to retain the resources.
     *
     * @remarks
     * This topic provides an example of how to delete a stack instance from the `MyStackGroup` stack group. The stack group uses self-managed permissions and is in the China (Hangzhou) region. This example deletes the stack instance that is deployed in the China (Beijing) region for the Alibaba Cloud account `151266687691****`.
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
     * Deletes stack instances from specified accounts and regions. You can choose to retain the resources.
     *
     * @remarks
     * This topic provides an example of how to delete a stack instance from the `MyStackGroup` stack group. The stack group uses self-managed permissions and is in the China (Hangzhou) region. This example deletes the stack instance that is deployed in the China (Beijing) region for the Alibaba Cloud account `151266687691****`.
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
     * If a template is shared with other Alibaba Cloud accounts, unshare it before deletion.
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
     * If a template is shared with other Alibaba Cloud accounts, unshare it before deletion.
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
     * Deletes a resource type or a specific version of a resource type.
     *
     * @remarks
     * - If you delete a resource type, it can no longer be used in ROS.
     * - If you delete a version of a resource type, that version can no longer be used in ROS.
     * - You can delete a resource type only if it has a single version. If a resource type has multiple versions, you must delete the other versions first.
     * - You cannot delete the default version if the resource type has more than one version.
     * - If a resource type has only one version, deleting that version also deletes the resource type.
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
     * Deletes a resource type or a specific version of a resource type.
     *
     * @remarks
     * - If you delete a resource type, it can no longer be used in ROS.
     * - If you delete a version of a resource type, that version can no longer be used in ROS.
     * - You can delete a resource type only if it has a single version. If a resource type has multiple versions, you must delete the other versions first.
     * - You cannot delete the default version if the resource type has more than one version.
     * - If a resource type has only one version, deleting that version also deletes the resource type.
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
     * Performs drift detection on resources in a stack to check whether the resources have drifted from the expected template configurations.
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
     * Performs drift detection on resources in a stack to check whether the resources have drifted from the expected template configurations.
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
     * Performs drift detection on stack groups to check whether the stack groups have drifted from the expected template configurations.
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
     * Performs drift detection on stack groups to check whether the stack groups have drifted from the expected template configurations.
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
     * Enables trusted service access.
     *
     * @remarks
     * ### Description
     * Enables trusted service access.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableServiceAccessResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableServiceAccessResponse
     */
    public function enableServiceAccessWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableServiceAccess',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableServiceAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables trusted service access.
     *
     * @remarks
     * ### Description
     * Enables trusted service access.
     *
     * @returns EnableServiceAccessResponse
     *
     * @return EnableServiceAccessResponse
     */
    public function enableServiceAccess()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServiceAccessWithOptions($runtime);
    }

    /**
     * Enables services in a batch.
     *
     * @remarks
     * ### Description
     * This operation enables multiple Alibaba Cloud services in a batch.
     *
     * @param tmpReq - EnableServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableServicesResponse
     *
     * @param EnableServicesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return EnableServicesResponse
     */
    public function enableServicesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EnableServicesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serviceNames) {
            $request->serviceNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serviceNames, 'ServiceNames', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceNamesShrink) {
            @$query['ServiceNames'] = $request->serviceNamesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableServices',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables services in a batch.
     *
     * @remarks
     * ### Description
     * This operation enables multiple Alibaba Cloud services in a batch.
     *
     * @param request - EnableServicesRequest
     *
     * @returns EnableServicesResponse
     *
     * @param EnableServicesRequest $request
     *
     * @return EnableServicesResponse
     */
    public function enableServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServicesWithOptions($request, $runtime);
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
     * > You cannot generate a template for a resource detection scenario.
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
     * > You cannot generate a template for a resource detection scenario.
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
     * Generates the policy information required by a specified template.
     *
     * @remarks
     * If the policies required by the template include Enterprise Distributed Application Service (EDAS), log on to your Alibaba Cloud account and upgrade the RAM permissions for the Resource Access Management (RAM) users that require authorization.
     * This topic provides an example of how to generate access policies for a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****`.
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
        if (null !== $request->generateOptions) {
            @$query['GenerateOptions'] = $request->generateOptions;
        }

        if (null !== $request->operationTypes) {
            @$query['OperationTypes'] = $request->operationTypes;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
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
     * Generates the policy information required by a specified template.
     *
     * @remarks
     * If the policies required by the template include Enterprise Distributed Application Service (EDAS), log on to your Alibaba Cloud account and upgrade the RAM permissions for the Resource Access Management (RAM) users that require authorization.
     * This topic provides an example of how to generate access policies for a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****`.
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
     * Returns details for a specified change set, optionally including the details of its associated template.
     *
     * @remarks
     * This topic demonstrates how to query a change set with the ID `4c11658d-bd47-4dd0-ba64-727edc62****` in the China (Hangzhou) region.
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
     * Returns details for a specified change set, optionally including the details of its associated template.
     *
     * @remarks
     * This topic demonstrates how to query a change set with the ID `4c11658d-bd47-4dd0-ba64-727edc62****` in the China (Hangzhou) region.
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
     * > In the Examples section, only part of the sample code is provided.
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
     * > In the Examples section, only part of the sample code is provided.
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
     * Queries the details of a resource type.
     *
     * @remarks
     * This topic provides an example of how to query the details of the `ALIYUN::ROS::WaitConditionHandle` resource type.
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
     * Queries the details of a resource type.
     *
     * @remarks
     * This topic provides an example of how to query the details of the `ALIYUN::ROS::WaitConditionHandle` resource type.
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
     * Queries the access status of a trusted service.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceAccessResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceAccessResponse
     */
    public function getServiceAccessWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetServiceAccess',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access status of a trusted service.
     *
     * @returns GetServiceAccessResponse
     *
     * @return GetServiceAccessResponse
     */
    public function getServiceAccess()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceAccessWithOptions($runtime);
    }

    /**
     * Queries the activation status of an Alibaba Cloud service and information about its service-linked roles.
     *
     * @remarks
     * ### Usage notes
     * This topic provides an example of how to query the activation status of Elastic High Performance Computing (EHPC) and information about the service-linked roles for EHPC in the China (Hangzhou) region.
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
     * Queries the activation status of an Alibaba Cloud service and information about its service-linked roles.
     *
     * @remarks
     * ### Usage notes
     * This topic provides an example of how to query the activation status of Elastic High Performance Computing (EHPC) and information about the service-linked roles for EHPC in the China (Hangzhou) region.
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
     * Queries stack information.
     *
     * @remarks
     * This topic provides an example of how to query the information of a stack whose ID is `c754d2a4-28f1-46df-b557-9586173a****` in the China (Hangzhou) region.
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
     * Queries stack information.
     *
     * @remarks
     * This topic provides an example of how to query the information of a stack whose ID is `c754d2a4-28f1-46df-b557-9586173a****` in the China (Hangzhou) region.
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
     * Queries the details of a stack group by its name in an Alibaba Cloud region.
     *
     * @remarks
     * This topic provides an example of how to query a stack group named `MyStackGroup`. The stack group is in the China (Hangzhou) region and uses the self-managed permission mode.
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
     * Queries the details of a stack group by its name in an Alibaba Cloud region.
     *
     * @remarks
     * This topic provides an example of how to query a stack group named `MyStackGroup`. The stack group is in the China (Hangzhou) region and uses the self-managed permission mode.
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
     * Queries the stack policy of a specified stack.
     *
     * @remarks
     * This example queries the stack policy of stack `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region.
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
     * Queries the stack policy of a specified stack.
     *
     * @remarks
     * This example queries the stack policy of stack `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region.
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
     * Query a resource in a specific stack.
     *
     * @remarks
     * This topic provides an example on how to query the details of a resource named `WebServer` in a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region.
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
     * Query a resource in a specific stack.
     *
     * @remarks
     * This topic provides an example on how to query the details of a resource named `WebServer` in a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region.
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
     * - For more information about the resources that support price inquiry in Resource Orchestration Service (ROS) templates, see the "**Resource types that support price inquiry**" section of the [Estimate resource prices](https://help.aliyun.com/document_detail/203165.html) topic.
     * - For more information about the resources that support price inquiry in Terraform templates, see the "**ROS resources supported by Terraform**" section of the [ROS features and resources supported by Terraform](https://help.aliyun.com/document_detail/184389.html) topic.
     * The following sample code provides an example on how to query the estimated price of an elastic IP address (EIP) that you want to create based on a template. In this example, the following template is used:
     * ```
     * {
     *   "ROSTemplateFormatVersion": "2015-09-01",
     *   "Parameters": {
     *     "Isp": {
     *       "Type": "String",
     *       "Default": "BGP"
     *     },
     *     "Name": {
     *       "Type": "String",
     *       "Default": "test"
     *     },
     *     "Netmode": {
     *       "Type": "String",
     *       "Default": "public"
     *     },
     *     "Bandwidth": {
     *       "Type": "Number",
     *       "Default": 5
     *     }
     *   },
     *   "Resources": {
     *     "NewEip": {
     *       "Type": "ALIYUN::VPC::EIP",
     *       "Properties": {
     *         "InstanceChargeType": "Prepaid",
     *         "PricingCycle": "Month",
     *         "Isp": {
     *           "Ref": "Isp"
     *         },
     *         "Period": 1,
     *         "DeletionProtection": false,
     *         "AutoPay": false,
     *         "Name": {
     *           "Ref": "Name"
     *         },
     *         "InternetChargeType": "PayByTraffic",
     *         "Netmode": {
     *           "Ref": "Netmode"
     *         },
     *         "Bandwidth": {
     *           "Ref": "Bandwidth"
     *         }
     *       }
     *     }
     *   }
     * }
     * ```
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
     * - For more information about the resources that support price inquiry in Resource Orchestration Service (ROS) templates, see the "**Resource types that support price inquiry**" section of the [Estimate resource prices](https://help.aliyun.com/document_detail/203165.html) topic.
     * - For more information about the resources that support price inquiry in Terraform templates, see the "**ROS resources supported by Terraform**" section of the [ROS features and resources supported by Terraform](https://help.aliyun.com/document_detail/184389.html) topic.
     * The following sample code provides an example on how to query the estimated price of an elastic IP address (EIP) that you want to create based on a template. In this example, the following template is used:
     * ```
     * {
     *   "ROSTemplateFormatVersion": "2015-09-01",
     *   "Parameters": {
     *     "Isp": {
     *       "Type": "String",
     *       "Default": "BGP"
     *     },
     *     "Name": {
     *       "Type": "String",
     *       "Default": "test"
     *     },
     *     "Netmode": {
     *       "Type": "String",
     *       "Default": "public"
     *     },
     *     "Bandwidth": {
     *       "Type": "Number",
     *       "Default": 5
     *     }
     *   },
     *   "Resources": {
     *     "NewEip": {
     *       "Type": "ALIYUN::VPC::EIP",
     *       "Properties": {
     *         "InstanceChargeType": "Prepaid",
     *         "PricingCycle": "Month",
     *         "Isp": {
     *           "Ref": "Isp"
     *         },
     *         "Period": 1,
     *         "DeletionProtection": false,
     *         "AutoPay": false,
     *         "Name": {
     *           "Ref": "Name"
     *         },
     *         "InternetChargeType": "PayByTraffic",
     *         "Netmode": {
     *           "Ref": "Netmode"
     *         },
     *         "Bandwidth": {
     *           "Ref": "Bandwidth"
     *         }
     *       }
     *     }
     *   }
     * }
     * ```
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
     * Queries the valid values of the parameters in a template.
     *
     * @remarks
     * ### Description
     * This topic provides an example of how to query the valid values for the `ZoneInfo` parameter in a template specific to the China (Hangzhou) region. The template is `{ "ROSTemplateFormatVersion": "2015-09-01", "Parameters": { "ZoneInfo": { "Type": "String" }, "InstanceType": { "Type": "String" } }, "Resources": { "ECS": { "Type": "ALIYUN::ECS::Instance", "Properties": { "ZoneId": { "Ref": "ZoneInfo" }, "InstanceType": { "Ref": "InstanceType" } } } } }`.
     * For more information about the queryable parameters and template content, refer to [Query parameter constraints](https://help.aliyun.com/document_detail/432820.html).
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
     * Queries the valid values of the parameters in a template.
     *
     * @remarks
     * ### Description
     * This topic provides an example of how to query the valid values for the `ZoneInfo` parameter in a template specific to the China (Hangzhou) region. The template is `{ "ROSTemplateFormatVersion": "2015-09-01", "Parameters": { "ZoneInfo": { "Type": "String" }, "InstanceType": { "Type": "String" } }, "Resources": { "ECS": { "Type": "ALIYUN::ECS::Instance", "Properties": { "ZoneId": { "Ref": "ZoneInfo" }, "InstanceType": { "Ref": "InstanceType" } } } } }`.
     * For more information about the queryable parameters and template content, refer to [Query parameter constraints](https://help.aliyun.com/document_detail/432820.html).
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
     * Retrieves the details of a resource scenario.
     *
     * @remarks
     * This topic provides an example of how to query the details of the resource scenario `ts-7f7a704cf71c49a6****` in the China (Hangzhou) region and display source node data.
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
     * Retrieves the details of a resource scenario.
     *
     * @remarks
     * This topic provides an example of how to query the details of the resource scenario `ts-7f7a704cf71c49a6****` in the China (Hangzhou) region and display source node data.
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
     * Queries the details of created change sets.
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
     * Queries the details of created change sets.
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
     * Retrieves the message history and Pipeline snapshot temporary download URL for a specified session by session ID.
     *
     * @remarks
     * ## Request description
     * - When calling the V2 service, set the `AgentVersion` parameter to `V2`.
     * - This operation only accepts the `SessionId` of the current user\\"s session. It does not directly return a message array. Instead, it returns pre-signed download URLs for `session.jsonl` and `a2a-snapshot.json`.
     * - The download URLs are valid for 1800 seconds (30 minutes). Complete the download within the validity period.
     * - The URLs in the response contain signature parameters. Do not log, share, or cache them for extended periods.
     * - `MaxResults` and `NextToken` are compatibility fields that are not consumed in V2.
     *
     * @param request - ListChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatMessagesResponse
     *
     * @param ListChatMessagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListChatMessagesResponse
     */
    public function listChatMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentVersion) {
            @$query['AgentVersion'] = $request->agentVersion;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChatMessages',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListChatMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the message history and Pipeline snapshot temporary download URL for a specified session by session ID.
     *
     * @remarks
     * ## Request description
     * - When calling the V2 service, set the `AgentVersion` parameter to `V2`.
     * - This operation only accepts the `SessionId` of the current user\\"s session. It does not directly return a message array. Instead, it returns pre-signed download URLs for `session.jsonl` and `a2a-snapshot.json`.
     * - The download URLs are valid for 1800 seconds (30 minutes). Complete the download within the validity period.
     * - The URLs in the response contain signature parameters. Do not log, share, or cache them for extended periods.
     * - `MaxResults` and `NextToken` are compatibility fields that are not consumed in V2.
     *
     * @param request - ListChatMessagesRequest
     *
     * @returns ListChatMessagesResponse
     *
     * @param ListChatMessagesRequest $request
     *
     * @return ListChatMessagesResponse
     */
    public function listChatMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatMessagesWithOptions($request, $runtime);
    }

    /**
     * Queries the ROS Agent V2 session list of the current user by paging.
     *
     * @remarks
     * ## Operation description
     * - Set `AgentVersion` to `V2` when calling the V2 service.
     * - This operation returns only sessions of the current user, sorted by `UpdatedAt` in descending order by default.
     * - Use the `Mode` parameter to filter sessions by mode. Valid values: `IaCCodeNormal` and `IaCCodePipeline`.
     * - Do not reuse an old `NextToken` after switching `Mode`.
     * - Use the `CreatedAt` and `UpdatedAt` fields for time information. The `UpdatedTime` field in the metadata is a compatibility field and is not returned in the current response.
     * - Set the `MaxResults` request parameter to specify the number of entries per page. Valid values: 1 to 100.
     *
     * @param request - ListChatSessionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatSessionsResponse
     *
     * @param ListChatSessionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListChatSessionsResponse
     */
    public function listChatSessionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentVersion) {
            @$query['AgentVersion'] = $request->agentVersion;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChatSessions',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListChatSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ROS Agent V2 session list of the current user by paging.
     *
     * @remarks
     * ## Operation description
     * - Set `AgentVersion` to `V2` when calling the V2 service.
     * - This operation returns only sessions of the current user, sorted by `UpdatedAt` in descending order by default.
     * - Use the `Mode` parameter to filter sessions by mode. Valid values: `IaCCodeNormal` and `IaCCodePipeline`.
     * - Do not reuse an old `NextToken` after switching `Mode`.
     * - Use the `CreatedAt` and `UpdatedAt` fields for time information. The `UpdatedTime` field in the metadata is a compatibility field and is not returned in the current response.
     * - Set the `MaxResults` request parameter to specify the number of entries per page. Valid values: 1 to 100.
     *
     * @param request - ListChatSessionsRequest
     *
     * @returns ListChatSessionsResponse
     *
     * @param ListChatSessionsRequest $request
     *
     * @return ListChatSessionsResponse
     */
    public function listChatSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatSessionsWithOptions($request, $runtime);
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
     * Queries a list of resource registration records.
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
     * Queries a list of resource registration records.
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
     * Queries the list of resource type versions, including resource types created by the user and those provided by Resource Orchestration Service (ROS).
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
     * Queries the list of resource type versions, including resource types created by the user and those provided by Resource Orchestration Service (ROS).
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
     * Queries the list of supported resource types.
     *
     * @remarks
     * This topic provides an example of how to query the list of regular resource types supported by ROS.
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
     * Queries the list of supported resource types.
     *
     * @remarks
     * This topic provides an example of how to query the list of regular resource types supported by ROS.
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
     * Queries events of a stack and the resources in the stack.
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
     * Queries events of a stack and the resources in the stack.
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
     * Queries stack groups in a region.
     *
     * @remarks
     * This example queries stack groups in the ACTIVE state in the China (Hangzhou) region.
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
     * Queries stack groups in a region.
     *
     * @remarks
     * This example queries stack groups in the ACTIVE state in the China (Hangzhou) region.
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
     * - You want to detect high risks that may arise in resources when you delete a stack that contains the resources, and query the cause of each risk in a resource.
     * - When you create a stack, the creation may fail. In this case, you can call this operation to check which types of permissions that are required to create stacks are missing.
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
     * - You want to detect high risks that may arise in resources when you delete a stack that contains the resources, and query the cause of each risk in a resource.
     * - When you create a stack, the creation may fail. In this case, you can call this operation to check which types of permissions that are required to create stacks are missing.
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
     * Queries the resources in a specified stack.
     *
     * @remarks
     * This topic provides an example on how to query the resources in a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region.
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
     * Queries the resources in a specified stack.
     *
     * @remarks
     * This topic provides an example on how to query the resources in a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region.
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
     * Queries the list of stacks.
     *
     * @remarks
     * ### Operation description
     * This topic provides an example of how to query the list of stacks in the China (Hangzhou) region.
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
     * Queries the list of stacks.
     *
     * @remarks
     * ### Operation description
     * This topic provides an example of how to query the list of stacks in the China (Hangzhou) region.
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
     * Queries for an overview.
     *
     * @remarks
     * ### Usage notes
     * This topic provides an example of how to query a list of stacks in the China (Hangzhou) region.
     *
     * @param request - ListSummariesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSummariesResponse
     *
     * @param ListSummariesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSummariesResponse
     */
    public function listSummariesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSummaries',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries for an overview.
     *
     * @remarks
     * ### Usage notes
     * This topic provides an example of how to query a list of stacks in the China (Hangzhou) region.
     *
     * @param request - ListSummariesRequest
     *
     * @returns ListSummariesResponse
     *
     * @param ListSummariesRequest $request
     *
     * @return ListSummariesResponse
     */
    public function listSummaries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSummariesWithOptions($request, $runtime);
    }

    /**
     * Queries the tag keys for stacks or templates in a specified region.
     *
     * @remarks
     * This topic provides an example of how to query the tag keys that are attached to a stack in the China (Hangzhou) region.
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
     * Queries the tag keys for stacks or templates in a specified region.
     *
     * @remarks
     * This topic provides an example of how to query the tag keys that are attached to a stack in the China (Hangzhou) region.
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
     * - To specify the query object, specify ResourceId or Tag in the request. Tag consists of Key and Value.
     * - If you specify Tag and ResourceId, ROS resources that match both the parameters are returned.
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
     * - To specify the query object, specify ResourceId or Tag in the request. Tag consists of Key and Value.
     * - If you specify Tag and ResourceId, ROS resources that match both the parameters are returned.
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
     * Queries a list of resource scenarios.
     *
     * @remarks
     * This topic provides an example of how to query the list of resource scenarios in the China (Hangzhou) region. The response shows that there are two resource scenarios in the China (Hangzhou) region: resource management and resource replication.
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
     * Queries a list of resource scenarios.
     *
     * @remarks
     * This topic provides an example of how to query the list of resource scenarios in the China (Hangzhou) region. The response shows that there are two resource scenarios in the China (Hangzhou) region: resource management and resource replication.
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
     * Queries a list of private and shared templates.
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
     * Queries a list of private and shared templates.
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
     * Previews the information about a stack that you want to create or update based on a template. You can call this operation to verify whether the template resources are valid.
     *
     * @remarks
     * In this example, a stack named `MyStack` is created in the China (Hangzhou) region and previewed. The `TemplateBody` parameter of the stack is set to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
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
     * Previews the information about a stack that you want to create or update based on a template. You can call this operation to verify whether the template resources are valid.
     *
     * @remarks
     * In this example, a stack named `MyStack` is created in the China (Hangzhou) region and previewed. The `TemplateBody` parameter of the stack is set to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
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
     * - Versions increase from v1.
     * - If you create a new resource type, v1 is used as the default version of the resource type. You can call the SetResourceType operation to change the default version of a resource type.
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
     * - Versions increase from v1.
     * - If you create a new resource type, v1 is used as the default version of the resource type. You can call the SetResourceType operation to change the default version of a resource type.
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
     * Modifies the deletion protection setting for a stack.
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
     * Modifies the deletion protection setting for a stack.
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
     * Modifies the description of a resource type or a version of that type.
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
     * Modifies the description of a resource type or a version of that type.
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
     * Configures a stack policy for a stack.
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
     * Configures a stack policy for a stack.
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
     * Returns agent events through SSE streaming. Supports creating a new session or continuing an existing session.
     *
     * @remarks
     * ## Operation description
     * - When calling this API, ensure that `AgentVersion` is set to `V2`.
     * - If `SessionId` is not provided, a new session is created. If `SessionId` is provided, the existing session is continued.
     * - The default value of `Mode` is `IaCCodeNormal`. Only `IaCCodeNormal` and `IaCCodePipeline` modes are supported. An existing session cannot switch modes.
     * - `EnableThinking` defaults to `true`, which specifies whether to output thinking content. This can be reset in each request.
     * - A maximum of 5 image attachments are supported. Each attachment can be up to 5 MiB and must be accessed through an OssObjectKey under the current user directory.
     * - `ClientContext` is a page context JSON string with a maximum size of 16 KiB. It is valid only in `IaCCodeNormal` mode.
     * - The response type is `text/event-stream`. A successful HTTP connection does not indicate that the operation is complete. Continue reading SSE events until a terminal state is reached.
     * - When the `TASK_STATE_INPUT_REQUIRED` status is received, it indicates that user input is required. This is not a failure state.
     *
     * @param request - StartChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartChatResponse
     *
     * @param StartChatRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartChatResponse
     */
    public function startChatWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentVersion) {
            @$query['AgentVersion'] = $request->agentVersion;
        }

        if (null !== $request->attachments) {
            @$query['Attachments'] = $request->attachments;
        }

        if (null !== $request->enablePartialMessage) {
            @$query['EnablePartialMessage'] = $request->enablePartialMessage;
        }

        if (null !== $request->enableThinking) {
            @$query['EnableThinking'] = $request->enableThinking;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartChat',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield StartChatResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Returns agent events through SSE streaming. Supports creating a new session or continuing an existing session.
     *
     * @remarks
     * ## Operation description
     * - When calling this API, ensure that `AgentVersion` is set to `V2`.
     * - If `SessionId` is not provided, a new session is created. If `SessionId` is provided, the existing session is continued.
     * - The default value of `Mode` is `IaCCodeNormal`. Only `IaCCodeNormal` and `IaCCodePipeline` modes are supported. An existing session cannot switch modes.
     * - `EnableThinking` defaults to `true`, which specifies whether to output thinking content. This can be reset in each request.
     * - A maximum of 5 image attachments are supported. Each attachment can be up to 5 MiB and must be accessed through an OssObjectKey under the current user directory.
     * - `ClientContext` is a page context JSON string with a maximum size of 16 KiB. It is valid only in `IaCCodeNormal` mode.
     * - The response type is `text/event-stream`. A successful HTTP connection does not indicate that the operation is complete. Continue reading SSE events until a terminal state is reached.
     * - When the `TASK_STATE_INPUT_REQUIRED` status is received, it indicates that user input is required. This is not a failure state.
     *
     * @param request - StartChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartChatResponse
     *
     * @param StartChatRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartChatResponse
     */
    public function startChatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentVersion) {
            @$query['AgentVersion'] = $request->agentVersion;
        }

        if (null !== $request->attachments) {
            @$query['Attachments'] = $request->attachments;
        }

        if (null !== $request->enablePartialMessage) {
            @$query['EnablePartialMessage'] = $request->enablePartialMessage;
        }

        if (null !== $request->enableThinking) {
            @$query['EnableThinking'] = $request->enableThinking;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartChat',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);

        return StartChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns agent events through SSE streaming. Supports creating a new session or continuing an existing session.
     *
     * @remarks
     * ## Operation description
     * - When calling this API, ensure that `AgentVersion` is set to `V2`.
     * - If `SessionId` is not provided, a new session is created. If `SessionId` is provided, the existing session is continued.
     * - The default value of `Mode` is `IaCCodeNormal`. Only `IaCCodeNormal` and `IaCCodePipeline` modes are supported. An existing session cannot switch modes.
     * - `EnableThinking` defaults to `true`, which specifies whether to output thinking content. This can be reset in each request.
     * - A maximum of 5 image attachments are supported. Each attachment can be up to 5 MiB and must be accessed through an OssObjectKey under the current user directory.
     * - `ClientContext` is a page context JSON string with a maximum size of 16 KiB. It is valid only in `IaCCodeNormal` mode.
     * - The response type is `text/event-stream`. A successful HTTP connection does not indicate that the operation is complete. Continue reading SSE events until a terminal state is reached.
     * - When the `TASK_STATE_INPUT_REQUIRED` status is received, it indicates that user input is required. This is not a failure state.
     *
     * @param request - StartChatRequest
     *
     * @returns StartChatResponse
     *
     * @param StartChatRequest $request
     *
     * @return StartChatResponse
     */
    public function startChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startChatWithOptions($request, $runtime);
    }

    /**
     * Stops a running task in a specified ROS Agent V2 session.
     *
     * @remarks
     * ## Request description
     * - When calling this operation, ensure that `AgentVersion` is set to `V2` to route to the correct backend service.
     * - `SessionId` is required to identify the specific session to stop.
     * - In a multi-process environment, if the target session is within the calling process, a cancel signal is sent directly and the system waits for cleanup to complete. If the session is managed by another process, a cancel request is sent to the remote end through the persisted active session state, and a `Stopping` status is returned immediately.
     * - When no active task exists, the API returns the `NoActiveStream` status code, which is not considered an error condition.
     *
     * @param request - StopChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopChatResponse
     *
     * @param StopChatRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopChatResponse
     */
    public function stopChatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentVersion) {
            @$query['AgentVersion'] = $request->agentVersion;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopChat',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a running task in a specified ROS Agent V2 session.
     *
     * @remarks
     * ## Request description
     * - When calling this operation, ensure that `AgentVersion` is set to `V2` to route to the correct backend service.
     * - `SessionId` is required to identify the specific session to stop.
     * - In a multi-process environment, if the target session is within the calling process, a cancel signal is sent directly and the system waits for cleanup to complete. If the session is managed by another process, a cancel request is sent to the remote end through the persisted active session state, and a `Stopping` status is returned immediately.
     * - When no active task exists, the API returns the `NoActiveStream` status code, which is not considered an error condition.
     *
     * @param request - StopChatRequest
     *
     * @returns StopChatResponse
     *
     * @param StopChatRequest $request
     *
     * @return StopChatResponse
     */
    public function stopChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopChatWithOptions($request, $runtime);
    }

    /**
     * Stops an ongoing operation in a stack group.
     *
     * @remarks
     * This example stops the stack group operation `6da106ca-1784-4a6f-a7e1-e723863****` in the China (Hangzhou) region.
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
     * Stops an ongoing operation in a stack group.
     *
     * @remarks
     * This example stops the stack group operation `6da106ca-1784-4a6f-a7e1-e723863****` in the China (Hangzhou) region.
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
     * This topic provides an example of how to create and add a tag to a resource stack in China (Hangzhou) region. The resource stack ID is `7fee80e1-8c48-4c2f-8300-0f6dc40b****`, with the tag key of `FinanceDept` and the tag value of `FinanceJoshua`.
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
     * This topic provides an example of how to create and add a tag to a resource stack in China (Hangzhou) region. The resource stack ID is `7fee80e1-8c48-4c2f-8300-0f6dc40b****`, with the tag key of `FinanceDept` and the tag value of `FinanceJoshua`.
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
     * Updates the resource information of a created stack.
     *
     * @remarks
     * The values of Parameters and UsePreviousParameters are related. If a parameter defined in the template is not specified in Parameters:
     * - If UsePreviousParameters is set to false: the default value of the parameter in the template is used if available. If no default value exists, you must specify the parameter in Parameters.
     * - If UsePreviousParameters is set to true: if the parameter was specified when the stack was created, the specified value is used. If the parameter was not specified when the stack was created and the parameter has a default value in the template, the default value is used.
     *
     * This topic provides an example to show how to update the template content of a stack in the China (Beijing) region to `{"ROSTemplateFormatVersion": "2015-09-01"}`. The stack ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`.
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
     * Updates the resource information of a created stack.
     *
     * @remarks
     * The values of Parameters and UsePreviousParameters are related. If a parameter defined in the template is not specified in Parameters:
     * - If UsePreviousParameters is set to false: the default value of the parameter in the template is used if available. If no default value exists, you must specify the parameter in Parameters.
     * - If UsePreviousParameters is set to true: if the parameter was specified when the stack was created, the specified value is used. If the parameter was not specified when the stack was created and the parameter has a default value in the template, the default value is used.
     *
     * This topic provides an example to show how to update the template content of a stack in the China (Beijing) region to `{"ROSTemplateFormatVersion": "2015-09-01"}`. The stack ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`.
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
     * Updates an existing stack group.
     *
     * @remarks
     * This topic provides an example of how to update the template of the stack group `MyStackGroup` to `{"ROSTemplateFormatVersion": "2015-09-01"}`. The stack group is in the China (Hangzhou) region and uses self-managed permissions.
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
     * Updates an existing stack group.
     *
     * @remarks
     * This topic provides an example of how to update the template of the stack group `MyStackGroup` to `{"ROSTemplateFormatVersion": "2015-09-01"}`. The stack group is in the China (Hangzhou) region and uses self-managed permissions.
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
     * Updates stack instances for one or more accounts in specified regions.
     *
     * @remarks
     * This topic provides an example of how to update stacks for the stack group `MyStackGroup`, which is in the China (Hangzhou) region and uses self-managed permissions. The stacks are updated for the Alibaba Cloud accounts `151266687691****` and `141261387191****` in the China (Hangzhou) and China (Beijing) regions.
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
     * Updates stack instances for one or more accounts in specified regions.
     *
     * @remarks
     * This topic provides an example of how to update stacks for the stack group `MyStackGroup`, which is in the China (Hangzhou) region and uses self-managed permissions. The stacks are updated for the Alibaba Cloud accounts `151266687691****` and `141261387191****` in the China (Hangzhou) and China (Beijing) regions.
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
     * Eliminates stack drifts by performing drift detection.
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
     * Eliminates stack drifts by performing drift detection.
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
     * - If you want to update a resource migration scenario in which the migrated source resources are retained, you can delete the source resources to manage the updated resource migration scenario. You can also call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     *   \\*\\*
     *   **Note** Make sure that the source resources that you want to delete from a resource migration scenario are associated only with the resource scenario. Otherwise, the source resources fail to be deleted.
     * - If you want to update a resource migration scenario in which the migrated source resources are deleted, you can only call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
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
     * - If you want to update a resource migration scenario in which the migrated source resources are retained, you can delete the source resources to manage the updated resource migration scenario. You can also call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
     *   \\*\\*
     *   **Note** Make sure that the source resources that you want to delete from a resource migration scenario are associated only with the resource scenario. Otherwise, the source resources fail to be deleted.
     * - If you want to update a resource migration scenario in which the migrated source resources are deleted, you can only call the [GenerateTemplateByScratch](https://help.aliyun.com/document_detail/610829.html) operation to generate a template for the resource scenario.
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
     * Validates a template that is used to create a stack by specifying template URL or body.
     *
     * @remarks
     * This API operation validates only templates and does not involve user data. RAM authentication is not required.
     * This topic provides an example of how to validate a stack template. In this example, the `TemplateURL` of the template file is `oss://ros/template/demo`.
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
     * Validates a template that is used to create a stack by specifying template URL or body.
     *
     * @remarks
     * This API operation validates only templates and does not involve user data. RAM authentication is not required.
     * This topic provides an example of how to validate a stack template. In this example, the `TemplateURL` of the template file is `oss://ros/template/demo`.
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
