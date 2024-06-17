<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelStackOperationRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelStackOperationResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelUpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelUpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Cancels operations on a stack.
     *  *
     * @param CancelStackOperationRequest $request CancelStackOperationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelStackOperationResponse CancelStackOperationResponse
     */
    public function cancelStackOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowedStackOperations)) {
            $query['AllowedStackOperations'] = $request->allowedStackOperations;
        }
        if (!Utils::isUnset($request->cancelType)) {
            $query['CancelType'] = $request->cancelType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelStackOperation',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelStackOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels operations on a stack.
     *  *
     * @param CancelStackOperationRequest $request CancelStackOperationRequest
     *
     * @return CancelStackOperationResponse CancelStackOperationResponse
     */
    public function cancelStackOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelStackOperationWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels an update operation on a stack. You can call this operation to cancel an update operation on a stack when the stack is being updated or created.
     *  *
     * @param CancelUpdateStackRequest $request CancelUpdateStackRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelUpdateStackResponse CancelUpdateStackResponse
     */
    public function cancelUpdateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cancelType)) {
            $query['CancelType'] = $request->cancelType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelUpdateStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelUpdateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels an update operation on a stack. You can call this operation to cancel an update operation on a stack when the stack is being updated or created.
     *  *
     * @param CancelUpdateStackRequest $request CancelUpdateStackRequest
     *
     * @return CancelUpdateStackResponse CancelUpdateStackResponse
     */
    public function cancelUpdateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUpdateStackWithOptions($request, $runtime);
    }

    /**
     * @summary Continues to create a stack after the stack fails to be created.
     *  *
     * @description This topic provides an example on how to continue to create a stack after the stack fails to be created. In this example, the stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is created in the China (Hangzhou) region.
     *  *
     * @param ContinueCreateStackRequest $request ContinueCreateStackRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ContinueCreateStackResponse ContinueCreateStackResponse
     */
    public function continueCreateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->parallelism)) {
            $query['Parallelism'] = $request->parallelism;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->recreatingOptions)) {
            $query['RecreatingOptions'] = $request->recreatingOptions;
        }
        if (!Utils::isUnset($request->recreatingResources)) {
            $query['RecreatingResources'] = $request->recreatingResources;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->templateBody)) {
            $query['TemplateBody'] = $request->templateBody;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinueCreateStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContinueCreateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Continues to create a stack after the stack fails to be created.
     *  *
     * @description This topic provides an example on how to continue to create a stack after the stack fails to be created. In this example, the stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is created in the China (Hangzhou) region.
     *  *
     * @param ContinueCreateStackRequest $request ContinueCreateStackRequest
     *
     * @return ContinueCreateStackResponse ContinueCreateStackResponse
     */
    public function continueCreateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueCreateStackWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a change set for a stack. You can view proposed changes before you execute the change set.
     *  *
     * @description ### [](#)Scenarios
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
     *  *
     * @param CreateChangeSetRequest $request CreateChangeSetRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateChangeSetResponse CreateChangeSetResponse
     */
    public function createChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeSetName)) {
            $query['ChangeSetName'] = $request->changeSetName;
        }
        if (!Utils::isUnset($request->changeSetType)) {
            $query['ChangeSetType'] = $request->changeSetType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            $query['DisableRollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->notificationURLs)) {
            $query['NotificationURLs'] = $request->notificationURLs;
        }
        if (!Utils::isUnset($request->parallelism)) {
            $query['Parallelism'] = $request->parallelism;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replacementOption)) {
            $query['ReplacementOption'] = $request->replacementOption;
        }
        if (!Utils::isUnset($request->resourcesToImport)) {
            $query['ResourcesToImport'] = $request->resourcesToImport;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->stackName)) {
            $query['StackName'] = $request->stackName;
        }
        if (!Utils::isUnset($request->stackPolicyBody)) {
            $query['StackPolicyBody'] = $request->stackPolicyBody;
        }
        if (!Utils::isUnset($request->stackPolicyDuringUpdateBody)) {
            $query['StackPolicyDuringUpdateBody'] = $request->stackPolicyDuringUpdateBody;
        }
        if (!Utils::isUnset($request->stackPolicyDuringUpdateURL)) {
            $query['StackPolicyDuringUpdateURL'] = $request->stackPolicyDuringUpdateURL;
        }
        if (!Utils::isUnset($request->stackPolicyURL)) {
            $query['StackPolicyURL'] = $request->stackPolicyURL;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        if (!Utils::isUnset($request->usePreviousParameters)) {
            $query['UsePreviousParameters'] = $request->usePreviousParameters;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateChangeSet',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a change set for a stack. You can view proposed changes before you execute the change set.
     *  *
     * @description ### [](#)Scenarios
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
     *  *
     * @param CreateChangeSetRequest $request CreateChangeSetRequest
     *
     * @return CreateChangeSetResponse CreateChangeSetResponse
     */
    public function createChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChangeSetWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a dignosis task.
     *  *
     * @param CreateDiagnosticRequest $request CreateDiagnosticRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiagnosticResponse CreateDiagnosticResponse
     */
    public function createDiagnosticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnosticKey)) {
            $query['DiagnosticKey'] = $request->diagnosticKey;
        }
        if (!Utils::isUnset($request->diagnosticType)) {
            $query['DiagnosticType'] = $request->diagnosticType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiagnostic',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiagnosticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a dignosis task.
     *  *
     * @param CreateDiagnosticRequest $request CreateDiagnosticRequest
     *
     * @return CreateDiagnosticResponse CreateDiagnosticResponse
     */
    public function createDiagnostic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a stack that contains a collection of resources by using a Resource Orchestration Service (ROS) template.
     *  *
     * @description A stack is a collection of ROS resources that you can manage as a single unit. To create a collection of resources, you can create a stack. For more information about stacks, see [Overview](https://help.aliyun.com/document_detail/172973.html).\\
     * When you call the operation, take note of the following limits:
     * *   You can create up to 200 stacks within an Alibaba Cloud account.
     * *   You can create up to 200 resources in a stack.
     * This topic provides an example on how to create a stack named `MyStack` in the China (Hangzhou) region by using a template. In this example, `TemplateBody` is set to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *  *
     * @param CreateStackRequest $request CreateStackRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStackResponse CreateStackResponse
     */
    public function createStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createOption)) {
            $query['CreateOption'] = $request->createOption;
        }
        if (!Utils::isUnset($request->createOptions)) {
            $query['CreateOptions'] = $request->createOptions;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            $query['DisableRollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->notificationURLs)) {
            $query['NotificationURLs'] = $request->notificationURLs;
        }
        if (!Utils::isUnset($request->parallelism)) {
            $query['Parallelism'] = $request->parallelism;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->stackName)) {
            $query['StackName'] = $request->stackName;
        }
        if (!Utils::isUnset($request->stackPolicyBody)) {
            $query['StackPolicyBody'] = $request->stackPolicyBody;
        }
        if (!Utils::isUnset($request->stackPolicyURL)) {
            $query['StackPolicyURL'] = $request->stackPolicyURL;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        if (!Utils::isUnset($request->templateScratchRegionId)) {
            $query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a stack that contains a collection of resources by using a Resource Orchestration Service (ROS) template.
     *  *
     * @description A stack is a collection of ROS resources that you can manage as a single unit. To create a collection of resources, you can create a stack. For more information about stacks, see [Overview](https://help.aliyun.com/document_detail/172973.html).\\
     * When you call the operation, take note of the following limits:
     * *   You can create up to 200 stacks within an Alibaba Cloud account.
     * *   You can create up to 200 resources in a stack.
     * This topic provides an example on how to create a stack named `MyStack` in the China (Hangzhou) region by using a template. In this example, `TemplateBody` is set to `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *  *
     * @param CreateStackRequest $request CreateStackRequest
     *
     * @return CreateStackResponse CreateStackResponse
     */
    public function createStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackWithOptions($request, $runtime);
    }

    /**
     * @summary Creates stack groups based on Resource Orchestration Service (ROS) templates. Stack groups allow you to create stacks within multiple Alibaba Cloud accounts across regions.
     *  *
     * @description A stack group is a collection of ROS stacks that you can manage as a unit. You can use an ROS template of a stack group to create stacks within Alibaba Cloud accounts across regions.
     * You can create a stack group that is granted self-managed or service-managed permissions:
     * *   If you use an Alibaba Cloud account to create a self-managed stack group, the administrator account and the execution account are Alibaba Cloud accounts.
     * *   If you enable a resource directory and use the management account or a delegated administrator account of the resource directory to create a service-managed stack group, the administrator account is the management account or delegated administrator account, and the execution account is a member account of the resource directory.
     * For more information about stack groups, see [Overview](https://help.aliyun.com/document_detail/154578.html).
     * In this topic, a stack group named `MyStackGroup` is created in the `China (Hangzhou)` region and granted the self-managed permissions. In this example, the template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is used.
     *  *
     * @param CreateStackGroupRequest $tmpReq  CreateStackGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStackGroupResponse CreateStackGroupResponse
     */
    public function createStackGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStackGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->autoDeployment)) {
            $request->autoDeploymentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->autoDeployment, 'AutoDeployment', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->administrationRoleName)) {
            $query['AdministrationRoleName'] = $request->administrationRoleName;
        }
        if (!Utils::isUnset($request->autoDeploymentShrink)) {
            $query['AutoDeployment'] = $request->autoDeploymentShrink;
        }
        if (!Utils::isUnset($request->capabilities)) {
            $query['Capabilities'] = $request->capabilities;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionRoleName)) {
            $query['ExecutionRoleName'] = $request->executionRoleName;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->permissionModel)) {
            $query['PermissionModel'] = $request->permissionModel;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateStackGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates stack groups based on Resource Orchestration Service (ROS) templates. Stack groups allow you to create stacks within multiple Alibaba Cloud accounts across regions.
     *  *
     * @description A stack group is a collection of ROS stacks that you can manage as a unit. You can use an ROS template of a stack group to create stacks within Alibaba Cloud accounts across regions.
     * You can create a stack group that is granted self-managed or service-managed permissions:
     * *   If you use an Alibaba Cloud account to create a self-managed stack group, the administrator account and the execution account are Alibaba Cloud accounts.
     * *   If you enable a resource directory and use the management account or a delegated administrator account of the resource directory to create a service-managed stack group, the administrator account is the management account or delegated administrator account, and the execution account is a member account of the resource directory.
     * For more information about stack groups, see [Overview](https://help.aliyun.com/document_detail/154578.html).
     * In this topic, a stack group named `MyStackGroup` is created in the `China (Hangzhou)` region and granted the self-managed permissions. In this example, the template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is used.
     *  *
     * @param CreateStackGroupRequest $request CreateStackGroupRequest
     *
     * @return CreateStackGroupResponse CreateStackGroupResponse
     */
    public function createStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates stack instances in the specified accounts and regions.
     *  *
     * @description Before you call this operation, make sure that a stack group is created. For more information, see [CreateStackGroup](https://help.aliyun.com/document_detail/151333.html).
     * In this topic, the stack group named `MyStackGroup` is used. The stack group is created in the China (Hangzhou) region and granted the self-managed permissions. In this example, stacks are created by using Alibaba Cloud accounts whose IDs are `151266687691****` and `141261387191****` in the China (Hangzhou) region and China (Beijing) region.
     *  *
     * @param CreateStackInstancesRequest $tmpReq  CreateStackInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStackInstancesResponse CreateStackInstancesResponse
     */
    public function createStackInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStackInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentTargets)) {
            $request->deploymentTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deploymentTargets, 'DeploymentTargets', 'json');
        }
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIdsShrink)) {
            $query['AccountIds'] = $request->accountIdsShrink;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deploymentTargetsShrink)) {
            $query['DeploymentTargets'] = $request->deploymentTargetsShrink;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            $query['DisableRollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->operationDescription)) {
            $query['OperationDescription'] = $request->operationDescription;
        }
        if (!Utils::isUnset($request->operationPreferencesShrink)) {
            $query['OperationPreferences'] = $request->operationPreferencesShrink;
        }
        if (!Utils::isUnset($request->parameterOverrides)) {
            $query['ParameterOverrides'] = $request->parameterOverrides;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionIdsShrink)) {
            $query['RegionIds'] = $request->regionIdsShrink;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStackInstances',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates stack instances in the specified accounts and regions.
     *  *
     * @description Before you call this operation, make sure that a stack group is created. For more information, see [CreateStackGroup](https://help.aliyun.com/document_detail/151333.html).
     * In this topic, the stack group named `MyStackGroup` is used. The stack group is created in the China (Hangzhou) region and granted the self-managed permissions. In this example, stacks are created by using Alibaba Cloud accounts whose IDs are `151266687691****` and `141261387191****` in the China (Hangzhou) region and China (Beijing) region.
     *  *
     * @param CreateStackInstancesRequest $request CreateStackInstancesRequest
     *
     * @return CreateStackInstancesResponse CreateStackInstancesResponse
     */
    public function createStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom template.
     *  *
     * @description In this topic, a custom template named `MyTemplate` is created in the `cn-hangzhou` region. The `TemplateBody` parameter of the template is set to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
     *  *
     * @param CreateTemplateRequest $request CreateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom template.
     *  *
     * @description In this topic, a custom template named `MyTemplate` is created in the `cn-hangzhou` region. The `TemplateBody` parameter of the template is set to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
     *  *
     * @param CreateTemplateRequest $request CreateTemplateRequest
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a scenario.
     *  *
     * @description ###
     * You can call this operation to create a scenario that allows you to specify a resource scope on a visualized interface and easily replicate and manage the resources that you specify. For more information about scenarios, see [Overview](https://help.aliyun.com/document_detail/352074.html).
     * In this example, a scenario of the Resource Replication type is created in the China (Hangzhou) region. In the scenario, the virtual private cloud (VPC) whose ID is `vpc-bp1m6fww66xbntjyc****` is replicated.
     *  *
     * @param CreateTemplateScratchRequest $tmpReq  CreateTemplateScratchRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateScratchResponse CreateTemplateScratchResponse
     */
    public function createTemplateScratchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTemplateScratchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->preferenceParameters)) {
            $request->preferenceParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->preferenceParameters, 'PreferenceParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceResourceGroup)) {
            $request->sourceResourceGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceResourceGroup, 'SourceResourceGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceResources)) {
            $request->sourceResourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceResources, 'SourceResources', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceTag)) {
            $request->sourceTagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceTag, 'SourceTag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionMode)) {
            $query['ExecutionMode'] = $request->executionMode;
        }
        if (!Utils::isUnset($request->logicalIdStrategy)) {
            $query['LogicalIdStrategy'] = $request->logicalIdStrategy;
        }
        if (!Utils::isUnset($request->preferenceParametersShrink)) {
            $query['PreferenceParameters'] = $request->preferenceParametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceResourceGroupShrink)) {
            $query['SourceResourceGroup'] = $request->sourceResourceGroupShrink;
        }
        if (!Utils::isUnset($request->sourceResourcesShrink)) {
            $query['SourceResources'] = $request->sourceResourcesShrink;
        }
        if (!Utils::isUnset($request->sourceTagShrink)) {
            $query['SourceTag'] = $request->sourceTagShrink;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->templateScratchType)) {
            $query['TemplateScratchType'] = $request->templateScratchType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplateScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a scenario.
     *  *
     * @description ###
     * You can call this operation to create a scenario that allows you to specify a resource scope on a visualized interface and easily replicate and manage the resources that you specify. For more information about scenarios, see [Overview](https://help.aliyun.com/document_detail/352074.html).
     * In this example, a scenario of the Resource Replication type is created in the China (Hangzhou) region. In the scenario, the virtual private cloud (VPC) whose ID is `vpc-bp1m6fww66xbntjyc****` is replicated.
     *  *
     * @param CreateTemplateScratchRequest $request CreateTemplateScratchRequest
     *
     * @return CreateTemplateScratchResponse CreateTemplateScratchResponse
     */
    public function createTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes change sets.
     *  *
     * @description *   Before you call this operation, make sure that the following requirements are met:
     *     *   The status of the change set is CREATE_COMPLETE, CREATE_FAILED, or DELETE_FAILED.
     *     *   The execution status is UNAVAILABLE or AVAILABLE.
     * *   After a change set is executed, other change sets associated with the same stack as this change set are also deleted.
     * *   After a stack is deleted, change sets associated with the stack are deleted.
     * *   If a change set of the CREATE type is deleted, you must delete stacks associated with the change set.
     * In this example, a change set whose ID is `1f6521a4-05af-4975-afe9-bc4b45ad****` is deleted. The change set is created in the China (Hangzhou) region.
     *  *
     * @param DeleteChangeSetRequest $request DeleteChangeSetRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteChangeSetResponse DeleteChangeSetResponse
     */
    public function deleteChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeSetId)) {
            $query['ChangeSetId'] = $request->changeSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteChangeSet',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes change sets.
     *  *
     * @description *   Before you call this operation, make sure that the following requirements are met:
     *     *   The status of the change set is CREATE_COMPLETE, CREATE_FAILED, or DELETE_FAILED.
     *     *   The execution status is UNAVAILABLE or AVAILABLE.
     * *   After a change set is executed, other change sets associated with the same stack as this change set are also deleted.
     * *   After a stack is deleted, change sets associated with the stack are deleted.
     * *   If a change set of the CREATE type is deleted, you must delete stacks associated with the change set.
     * In this example, a change set whose ID is `1f6521a4-05af-4975-afe9-bc4b45ad****` is deleted. The change set is created in the China (Hangzhou) region.
     *  *
     * @param DeleteChangeSetRequest $request DeleteChangeSetRequest
     *
     * @return DeleteChangeSetResponse DeleteChangeSetResponse
     */
    public function deleteChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChangeSetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a diagnostic record.
     *  *
     * @param DeleteDiagnosticRequest $request DeleteDiagnosticRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDiagnosticResponse DeleteDiagnosticResponse
     */
    public function deleteDiagnosticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDiagnostic',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDiagnosticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a diagnostic record.
     *  *
     * @param DeleteDiagnosticRequest $request DeleteDiagnosticRequest
     *
     * @return DeleteDiagnosticResponse DeleteDiagnosticResponse
     */
    public function deleteDiagnostic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiagnosticWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a stack. You can specify whether to retain resources.
     *  *
     * @param DeleteStackRequest $request DeleteStackRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStackResponse DeleteStackResponse
     */
    public function deleteStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteOptions)) {
            $query['DeleteOptions'] = $request->deleteOptions;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retainAllResources)) {
            $query['RetainAllResources'] = $request->retainAllResources;
        }
        if (!Utils::isUnset($request->retainResources)) {
            $query['RetainResources'] = $request->retainResources;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a stack. You can specify whether to retain resources.
     *  *
     * @param DeleteStackRequest $request DeleteStackRequest
     *
     * @return DeleteStackResponse DeleteStackResponse
     */
    public function deleteStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a stack group.
     *  *
     * @description A stack group can be deleted only when the stack group does not contain stacks. You can call the [DeleteStackInstances](https://help.aliyun.com/document_detail/151715.html) operation to delete stacks.
     * This topic provides an example on how to delete a stack group. In this example, a stack group named `MyStackGroup` in the China (Hangzhou) region is deleted.
     *  *
     * @param DeleteStackGroupRequest $request DeleteStackGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStackGroupResponse DeleteStackGroupResponse
     */
    public function deleteStackGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStackGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a stack group.
     *  *
     * @description A stack group can be deleted only when the stack group does not contain stacks. You can call the [DeleteStackInstances](https://help.aliyun.com/document_detail/151715.html) operation to delete stacks.
     * This topic provides an example on how to delete a stack group. In this example, a stack group named `MyStackGroup` in the China (Hangzhou) region is deleted.
     *  *
     * @param DeleteStackGroupRequest $request DeleteStackGroupRequest
     *
     * @return DeleteStackGroupResponse DeleteStackGroupResponse
     */
    public function deleteStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes stack instances in the specified accounts and regions. You can retain specific resources based on your business requirements when you call this operation.
     *  *
     * @description In this topic, the stack group named `MyStackGroup` that is created in the China (Hangzhou) region is used. In this example, the stacks of the stack group that are deployed in the China (Beijing) region by using the Alibaba Cloud account whose ID is `151266687691****` are deleted.
     *  *
     * @param DeleteStackInstancesRequest $tmpReq  DeleteStackInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStackInstancesResponse DeleteStackInstancesResponse
     */
    public function deleteStackInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteStackInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentTargets)) {
            $request->deploymentTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deploymentTargets, 'DeploymentTargets', 'json');
        }
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIdsShrink)) {
            $query['AccountIds'] = $request->accountIdsShrink;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deploymentTargetsShrink)) {
            $query['DeploymentTargets'] = $request->deploymentTargetsShrink;
        }
        if (!Utils::isUnset($request->operationDescription)) {
            $query['OperationDescription'] = $request->operationDescription;
        }
        if (!Utils::isUnset($request->operationPreferencesShrink)) {
            $query['OperationPreferences'] = $request->operationPreferencesShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionIdsShrink)) {
            $query['RegionIds'] = $request->regionIdsShrink;
        }
        if (!Utils::isUnset($request->retainStacks)) {
            $query['RetainStacks'] = $request->retainStacks;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStackInstances',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes stack instances in the specified accounts and regions. You can retain specific resources based on your business requirements when you call this operation.
     *  *
     * @description In this topic, the stack group named `MyStackGroup` that is created in the China (Hangzhou) region is used. In this example, the stacks of the stack group that are deployed in the China (Beijing) region by using the Alibaba Cloud account whose ID is `151266687691****` are deleted.
     *  *
     * @param DeleteStackInstancesRequest $request DeleteStackInstancesRequest
     *
     * @return DeleteStackInstancesResponse DeleteStackInstancesResponse
     */
    public function deleteStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a template.
     *  *
     * @description If a template is shared with other Alibaba Cloud accounts, you must unshare the template before you delete it.
     *  *
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a template.
     *  *
     * @description If a template is shared with other Alibaba Cloud accounts, you must unshare the template before you delete it.
     *  *
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scenario.
     *  *
     * @description In this topic, a scenario whose ID is `ts-4f83704400994409****` is deleted in the China (Hangzhou) region.
     *  *
     * @param DeleteTemplateScratchRequest $request DeleteTemplateScratchRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateScratchResponse DeleteTemplateScratchResponse
     */
    public function deleteTemplateScratchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplateScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a scenario.
     *  *
     * @description In this topic, a scenario whose ID is `ts-4f83704400994409****` is deleted in the China (Hangzhou) region.
     *  *
     * @param DeleteTemplateScratchRequest $request DeleteTemplateScratchRequest
     *
     * @return DeleteTemplateScratchResponse DeleteTemplateScratchResponse
     */
    public function deleteTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a resource type or a version of a resource type.
     *  *
     * @description *   If you delete a resource type, you can no longer use the resource type in Resource Orchestration Service (ROS).
     * *   If you delete a version of a resource type, you can no longer use the version in ROS.
     * *   If a resource type has only one version, you can delete the version by calling the operation. If a resource type has more than one version, you must manually delete the remaining versions.
     * *   When a resource type has more than one version, you cannot delete the default version by calling the operation.
     * *   When a resource type has only one version, you can delete the resource type and the version by calling the operation.
     *  *
     * @param DeregisterResourceTypeRequest $request DeregisterResourceTypeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeregisterResourceTypeResponse DeregisterResourceTypeResponse
     */
    public function deregisterResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeregisterResourceType',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeregisterResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a resource type or a version of a resource type.
     *  *
     * @description *   If you delete a resource type, you can no longer use the resource type in Resource Orchestration Service (ROS).
     * *   If you delete a version of a resource type, you can no longer use the version in ROS.
     * *   If a resource type has only one version, you can delete the version by calling the operation. If a resource type has more than one version, you must manually delete the remaining versions.
     * *   When a resource type has more than one version, you cannot delete the default version by calling the operation.
     * *   When a resource type has only one version, you can delete the resource type and the version by calling the operation.
     *  *
     * @param DeregisterResourceTypeRequest $request DeregisterResourceTypeRequest
     *
     * @return DeregisterResourceTypeResponse DeregisterResourceTypeResponse
     */
    public function deregisterResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of available regions.
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
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of available regions.
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
     * @summary You can call this operation to detect drift on a stack.
     *  *
     * @param DetectStackDriftRequest $request DetectStackDriftRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectStackDriftResponse DetectStackDriftResponse
     */
    public function detectStackDriftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->logicalResourceId)) {
            $query['LogicalResourceId'] = $request->logicalResourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectStackDrift',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectStackDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to detect drift on a stack.
     *  *
     * @param DetectStackDriftRequest $request DetectStackDriftRequest
     *
     * @return DetectStackDriftResponse DetectStackDriftResponse
     */
    public function detectStackDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackDriftWithOptions($request, $runtime);
    }

    /**
     * @param DetectStackGroupDriftRequest $tmpReq  DetectStackGroupDriftRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectStackGroupDriftResponse DetectStackGroupDriftResponse
     */
    public function detectStackGroupDriftWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectStackGroupDriftShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->operationPreferencesShrink)) {
            $query['OperationPreferences'] = $request->operationPreferencesShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectStackGroupDrift',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectStackGroupDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectStackGroupDriftRequest $request DetectStackGroupDriftRequest
     *
     * @return DetectStackGroupDriftResponse DetectStackGroupDriftResponse
     */
    public function detectStackGroupDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackGroupDriftWithOptions($request, $runtime);
    }

    /**
     * @summary Performs drift detection on resources in a stack to determine whether the resources have drifted from the expected configurations.
     *  *
     * @param DetectStackResourceDriftRequest $request DetectStackResourceDriftRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectStackResourceDriftResponse DetectStackResourceDriftResponse
     */
    public function detectStackResourceDriftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->logicalResourceId)) {
            $query['LogicalResourceId'] = $request->logicalResourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectStackResourceDrift',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectStackResourceDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs drift detection on resources in a stack to determine whether the resources have drifted from the expected configurations.
     *  *
     * @param DetectStackResourceDriftRequest $request DetectStackResourceDriftRequest
     *
     * @return DetectStackResourceDriftResponse DetectStackResourceDriftResponse
     */
    public function detectStackResourceDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackResourceDriftWithOptions($request, $runtime);
    }

    /**
     * @summary Executes change sets.
     *  *
     * @description In this example, the change set whose ID is `1f6521a4-05af-4975-afe9-bc4b45ad****` is executed. The change set is created in the `China (Hangzhou)` region.
     *  *
     * @param ExecuteChangeSetRequest $request ExecuteChangeSetRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteChangeSetResponse ExecuteChangeSetResponse
     */
    public function executeChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeSetId)) {
            $query['ChangeSetId'] = $request->changeSetId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteChangeSet',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Executes change sets.
     *  *
     * @description In this example, the change set whose ID is `1f6521a4-05af-4975-afe9-bc4b45ad****` is executed. The change set is created in the `China (Hangzhou)` region.
     *  *
     * @param ExecuteChangeSetRequest $request ExecuteChangeSetRequest
     *
     * @return ExecuteChangeSetResponse ExecuteChangeSetResponse
     */
    public function executeChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeChangeSetWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a template for a resource scenario.
     *  *
     * @description In this example, a template is generated for a resource management scenario that resides in the China (Hangzhou) region. The ID of the resource scenario is `ts-aa9c62feab844a6b****`.
     * >  You cannot generate a template for a resource detection scenario.
     *  *
     * @param GenerateTemplateByScratchRequest $request GenerateTemplateByScratchRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateTemplateByScratchResponse GenerateTemplateByScratchResponse
     */
    public function generateTemplateByScratchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->provisionRegionId)) {
            $query['ProvisionRegionId'] = $request->provisionRegionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateTemplateByScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateTemplateByScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a template for a resource scenario.
     *  *
     * @description In this example, a template is generated for a resource management scenario that resides in the China (Hangzhou) region. The ID of the resource scenario is `ts-aa9c62feab844a6b****`.
     * >  You cannot generate a template for a resource detection scenario.
     *  *
     * @param GenerateTemplateByScratchRequest $request GenerateTemplateByScratchRequest
     *
     * @return GenerateTemplateByScratchResponse GenerateTemplateByScratchResponse
     */
    public function generateTemplateByScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateTemplateByScratchWithOptions($request, $runtime);
    }

    /**
     * @summary Generates the information about a policy that is required by a template.
     *  *
     * @description If the policy information is related to Enterprise Distributed Application Service (EDAS), you must log on to your Alibaba Cloud account and grant the required permissions to the relevant RAM users.
     * In this example, a policy is generated for a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****`.
     *  *
     * @param GenerateTemplatePolicyRequest $request GenerateTemplatePolicyRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateTemplatePolicyResponse GenerateTemplatePolicyResponse
     */
    public function generateTemplatePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationTypes)) {
            $query['OperationTypes'] = $request->operationTypes;
        }
        if (!Utils::isUnset($request->templateBody)) {
            $query['TemplateBody'] = $request->templateBody;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateTemplatePolicy',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateTemplatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates the information about a policy that is required by a template.
     *  *
     * @description If the policy information is related to Enterprise Distributed Application Service (EDAS), you must log on to your Alibaba Cloud account and grant the required permissions to the relevant RAM users.
     * In this example, a policy is generated for a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****`.
     *  *
     * @param GenerateTemplatePolicyRequest $request GenerateTemplatePolicyRequest
     *
     * @return GenerateTemplatePolicyResponse GenerateTemplatePolicyResponse
     */
    public function generateTemplatePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateTemplatePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries change sets. You can determine whether to query the templates of change sets.
     *  *
     * @description In this example, the details of a change set whose ID is `4c11658d-bd47-4dd0-ba64-727edc62****` is queried. The change set is created in the China (Hangzhou) region.
     *  *
     * @param GetChangeSetRequest $request GetChangeSetRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetChangeSetResponse GetChangeSetResponse
     */
    public function getChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeSetId)) {
            $query['ChangeSetId'] = $request->changeSetId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->showTemplate)) {
            $query['ShowTemplate'] = $request->showTemplate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChangeSet',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries change sets. You can determine whether to query the templates of change sets.
     *  *
     * @description In this example, the details of a change set whose ID is `4c11658d-bd47-4dd0-ba64-727edc62****` is queried. The change set is created in the China (Hangzhou) region.
     *  *
     * @param GetChangeSetRequest $request GetChangeSetRequest
     *
     * @return GetChangeSetResponse GetChangeSetResponse
     */
    public function getChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChangeSetWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the diagnosis details based on a specified diagnostic report ID.
     *  *
     * @param GetDiagnosticRequest $request GetDiagnosticRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDiagnosticResponse GetDiagnosticResponse
     */
    public function getDiagnosticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiagnostic',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiagnosticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the diagnosis details based on a specified diagnostic report ID.
     *  *
     * @param GetDiagnosticRequest $request GetDiagnosticRequest
     *
     * @return GetDiagnosticResponse GetDiagnosticResponse
     */
    public function getDiagnostic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiagnosticWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of features that are supported by Resource Orchestration Service (ROS).
     *  *
     * @description You can call this operation to query the Terraform hosting, resource cleaner, and scenario features.
     * This topic provides an example on how to query the details of features supported by ROS in the China (Hangzhou) region. The details include Terraform versions, provider versions, and supported resource types.
     * >  In the Examples section, only part of the sample code is provided.
     *  *
     * @param GetFeatureDetailsRequest $request GetFeatureDetailsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFeatureDetailsResponse GetFeatureDetailsResponse
     */
    public function getFeatureDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->feature)) {
            $query['Feature'] = $request->feature;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFeatureDetails',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFeatureDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of features that are supported by Resource Orchestration Service (ROS).
     *  *
     * @description You can call this operation to query the Terraform hosting, resource cleaner, and scenario features.
     * This topic provides an example on how to query the details of features supported by ROS in the China (Hangzhou) region. The details include Terraform versions, provider versions, and supported resource types.
     * >  In the Examples section, only part of the sample code is provided.
     *  *
     * @param GetFeatureDetailsRequest $request GetFeatureDetailsRequest
     *
     * @return GetFeatureDetailsResponse GetFeatureDetailsResponse
     */
    public function getFeatureDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFeatureDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary This topic provides an example on how to query the details of `ALIYUN::ROS::WaitConditionHandle`.
     *  *
     * @description For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *  *
     * @param GetResourceTypeRequest $request GetResourceTypeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceTypeResponse GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceType',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This topic provides an example on how to query the details of `ALIYUN::ROS::WaitConditionHandle`.
     *  *
     * @description For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *  *
     * @param GetResourceTypeRequest $request GetResourceTypeRequest
     *
     * @return GetResourceTypeResponse GetResourceTypeResponse
     */
    public function getResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a sample template based on a resource type.
     *  *
     * @param GetResourceTypeTemplateRequest $request GetResourceTypeTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceTypeTemplateResponse GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceTypeTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceTypeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a sample template based on a resource type.
     *  *
     * @param GetResourceTypeTemplateRequest $request GetResourceTypeTemplateRequest
     *
     * @return GetResourceTypeTemplateResponse GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the activation status and the RAM roles of an Alibaba Cloud service.
     *  *
     * @description ### Description
     * This topic describes how to query the activation status and the RAM roles of an Alibaba Cloud service. In this example, the Elastic High Performance Computing (E-HPC) service that is deployed in the China (Hangzhou) region is queried.
     * > Make sure that you have the permissions to call the [GetRole](https://help.aliyun.com/document_detail/28711.html) operation.
     *  *
     * @param GetServiceProvisionsRequest $request GetServiceProvisionsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceProvisionsResponse GetServiceProvisionsResponse
     */
    public function getServiceProvisionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->services)) {
            $query['Services'] = $request->services;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceProvisions',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceProvisionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the activation status and the RAM roles of an Alibaba Cloud service.
     *  *
     * @description ### Description
     * This topic describes how to query the activation status and the RAM roles of an Alibaba Cloud service. In this example, the Elastic High Performance Computing (E-HPC) service that is deployed in the China (Hangzhou) region is queried.
     * > Make sure that you have the permissions to call the [GetRole](https://help.aliyun.com/document_detail/28711.html) operation.
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
     * @summary Queries the information about a stack in Resource Orchestration Service (ROS).
     *  *
     * @description In this example, the information about a stack whose ID is `c754d2a4-28f1-46df-b557-9586173a****` in the China (Hangzhou) region is queried.
     *  *
     * @param GetStackRequest $request GetStackRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStackResponse GetStackResponse
     */
    public function getStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->logOption)) {
            $query['LogOption'] = $request->logOption;
        }
        if (!Utils::isUnset($request->outputOption)) {
            $query['OutputOption'] = $request->outputOption;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->showResourceProgress)) {
            $query['ShowResourceProgress'] = $request->showResourceProgress;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a stack in Resource Orchestration Service (ROS).
     *  *
     * @description In this example, the information about a stack whose ID is `c754d2a4-28f1-46df-b557-9586173a****` in the China (Hangzhou) region is queried.
     *  *
     * @param GetStackRequest $request GetStackRequest
     *
     * @return GetStackResponse GetStackResponse
     */
    public function getStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the drift detection status of a stack.
     *  *
     * @description In this topic, the status of a drift detection operation whose ID is `a7044f0d-6f2e-4128-a307-4524ef88****` is queried. The operation is performed in the China (Hangzhou) region.
     *  *
     * @param GetStackDriftDetectionStatusRequest $request GetStackDriftDetectionStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStackDriftDetectionStatusResponse GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->driftDetectionId)) {
            $query['DriftDetectionId'] = $request->driftDetectionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackDriftDetectionStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackDriftDetectionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the drift detection status of a stack.
     *  *
     * @description In this topic, the status of a drift detection operation whose ID is `a7044f0d-6f2e-4128-a307-4524ef88****` is queried. The operation is performed in the China (Hangzhou) region.
     *  *
     * @param GetStackDriftDetectionStatusRequest $request GetStackDriftDetectionStatusRequest
     *
     * @return GetStackDriftDetectionStatusResponse GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackDriftDetectionStatusWithOptions($request, $runtime);
    }

    /**
     * @summary In this example, the information about a stack group named \\`MyStackGroup\\` is queried. The stack group is granted self-managed permissions and created in the China (Hangzhou) region.
     *  *
     * @description For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *  *
     * @param GetStackGroupRequest $request GetStackGroupRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStackGroupResponse GetStackGroupResponse
     */
    public function getStackGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackGroupId)) {
            $query['StackGroupId'] = $request->stackGroupId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary In this example, the information about a stack group named \\`MyStackGroup\\` is queried. The stack group is granted self-managed permissions and created in the China (Hangzhou) region.
     *  *
     * @description For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *  *
     * @param GetStackGroupRequest $request GetStackGroupRequest
     *
     * @return GetStackGroupResponse GetStackGroupResponse
     */
    public function getStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a stack group operation in an Alibaba Cloud region.
     *  *
     * @description In this example, the information about the stack group operation whose ID is `6da106ca-1784-4a6f-a7e1-e723863d****` is queried. The stack group named `MyStackGroup` is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *  *
     * @param GetStackGroupOperationRequest $request GetStackGroupOperationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStackGroupOperationResponse GetStackGroupOperationResponse
     */
    public function getStackGroupOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackGroupOperation',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackGroupOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a stack group operation in an Alibaba Cloud region.
     *  *
     * @description In this example, the information about the stack group operation whose ID is `6da106ca-1784-4a6f-a7e1-e723863d****` is queried. The stack group named `MyStackGroup` is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *  *
     * @param GetStackGroupOperationRequest $request GetStackGroupOperationRequest
     *
     * @return GetStackGroupOperationResponse GetStackGroupOperationResponse
     */
    public function getStackGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a stack instance that is associated with a stack group.
     *  *
     * @description In this example, the information about a stack instance associated with a stack group named `MyStackGroup` is queried. The stack instance is deployed in the China (Beijing) region within the `151266687691****` Alibaba Cloud account. The stack group is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *  *
     * @param GetStackInstanceRequest $request GetStackInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStackInstanceResponse GetStackInstanceResponse
     */
    public function getStackInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputOption)) {
            $query['OutputOption'] = $request->outputOption;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        if (!Utils::isUnset($request->stackInstanceAccountId)) {
            $query['StackInstanceAccountId'] = $request->stackInstanceAccountId;
        }
        if (!Utils::isUnset($request->stackInstanceRegionId)) {
            $query['StackInstanceRegionId'] = $request->stackInstanceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackInstance',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a stack instance that is associated with a stack group.
     *  *
     * @description In this example, the information about a stack instance associated with a stack group named `MyStackGroup` is queried. The stack instance is deployed in the China (Beijing) region within the `151266687691****` Alibaba Cloud account. The stack group is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *  *
     * @param GetStackInstanceRequest $request GetStackInstanceRequest
     *
     * @return GetStackInstanceResponse GetStackInstanceResponse
     */
    public function getStackInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query information about a stack policy.
     *  *
     * @description In this example, the stack policy of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is queried. The stack is deployed in the China (Hangzhou) region.
     *  *
     * @param GetStackPolicyRequest $request GetStackPolicyRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStackPolicyResponse GetStackPolicyResponse
     */
    public function getStackPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackPolicy',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query information about a stack policy.
     *  *
     * @description In this example, the stack policy of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` is queried. The stack is deployed in the China (Hangzhou) region.
     *  *
     * @param GetStackPolicyRequest $request GetStackPolicyRequest
     *
     * @return GetStackPolicyResponse GetStackPolicyResponse
     */
    public function getStackPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary For more information about common request parameters, see [Common parameters]\\(~~131957~~).
     *  *
     * @description | Http status code | Error code | Error message | Description |
     * | ---------------- | ---------- | ------------- | ----------- |
     * | 404 | ResourceNotFound | The Resource ({name}) could not be found in Stack {stack}. | The error message returned because the specified resource does not exist in the stack. name indicates the resource name. stack indicates the stack name or ID. |
     * | 404 | StackNotFound | The Stack ({name}) could not be found. | The error message returned because the stack does not exist. name indicates the name or ID of the stack. |
     *  *
     * @param GetStackResourceRequest $request GetStackResourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStackResourceResponse GetStackResourceResponse
     */
    public function getStackResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->logicalResourceId)) {
            $query['LogicalResourceId'] = $request->logicalResourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceAttributes)) {
            $query['ResourceAttributes'] = $request->resourceAttributes;
        }
        if (!Utils::isUnset($request->showResourceAttributes)) {
            $query['ShowResourceAttributes'] = $request->showResourceAttributes;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackResource',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary For more information about common request parameters, see [Common parameters]\\(~~131957~~).
     *  *
     * @description | Http status code | Error code | Error message | Description |
     * | ---------------- | ---------- | ------------- | ----------- |
     * | 404 | ResourceNotFound | The Resource ({name}) could not be found in Stack {stack}. | The error message returned because the specified resource does not exist in the stack. name indicates the resource name. stack indicates the stack name or ID. |
     * | 404 | StackNotFound | The Stack ({name}) could not be found. | The error message returned because the stack does not exist. name indicates the name or ID of the stack. |
     *  *
     * @param GetStackResourceRequest $request GetStackResourceRequest
     *
     * @return GetStackResourceResponse GetStackResourceResponse
     */
    public function getStackResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a template based on stacks, stack groups, change sets, or any custom template information.
     *  *
     * @description In this example, the details of a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is queried. The region ID of the template is `cn-hangzhou`.
     *  *
     * @param GetTemplateRequest $request GetTemplateRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeSetId)) {
            $query['ChangeSetId'] = $request->changeSetId;
        }
        if (!Utils::isUnset($request->includePermission)) {
            $query['IncludePermission'] = $request->includePermission;
        }
        if (!Utils::isUnset($request->includeTags)) {
            $query['IncludeTags'] = $request->includeTags;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateStage)) {
            $query['TemplateStage'] = $request->templateStage;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a template based on stacks, stack groups, change sets, or any custom template information.
     *  *
     * @description In this example, the details of a template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is queried. The region ID of the template is `cn-hangzhou`.
     *  *
     * @param GetTemplateRequest $request GetTemplateRequest
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the estimated prices of the resources in a template.
     *  *
     * @description ###
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
     *  *
     * @param GetTemplateEstimateCostRequest $request GetTemplateEstimateCostRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateEstimateCostResponse GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        if (!Utils::isUnset($request->templateScratchRegionId)) {
            $query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateEstimateCost',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateEstimateCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the estimated prices of the resources in a template.
     *  *
     * @description ###
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
     *  *
     * @param GetTemplateEstimateCostRequest $request GetTemplateEstimateCostRequest
     *
     * @return GetTemplateEstimateCostResponse GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateEstimateCostWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the values of one or more parameters in a template.
     *  *
     * @description This topic provides an example on how to query the values of a parameter. In this example, the values of the `ZoneInfo` parameter in a template that is created in the China (Hangzhou) region are queried. The template body is `{"Parameters":{"ZoneInfo":{"Type": "String"},"InstanceType": {"Type": "String"}},"ROSTemplateFormatVersion": "2015-09-01","Resources":{"ECS":{"Properties":{"ZoneId":{"Ref": "ZoneInfo"},"InstanceType": {"Ref": "InstanceType"}},"Type": "ALIYUN::ECS::Instance"}}}`.
     * For more information about the template parameters whose values you can query by calling this operation and the sample code of the template, see [Query the constraints of parameters](https://help.aliyun.com/document_detail/432820.html).
     *  *
     * @param GetTemplateParameterConstraintsRequest $tmpReq  GetTemplateParameterConstraintsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateParameterConstraintsResponse GetTemplateParameterConstraintsResponse
     */
    public function getTemplateParameterConstraintsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetTemplateParameterConstraintsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parametersKeyFilter)) {
            $request->parametersKeyFilterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parametersKeyFilter, 'ParametersKeyFilter', 'json');
        }
        if (!Utils::isUnset($tmpReq->parametersOrder)) {
            $request->parametersOrderShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parametersOrder, 'ParametersOrder', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->parametersKeyFilterShrink)) {
            $query['ParametersKeyFilter'] = $request->parametersKeyFilterShrink;
        }
        if (!Utils::isUnset($request->parametersOrderShrink)) {
            $query['ParametersOrder'] = $request->parametersOrderShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateParameterConstraints',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateParameterConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the values of one or more parameters in a template.
     *  *
     * @description This topic provides an example on how to query the values of a parameter. In this example, the values of the `ZoneInfo` parameter in a template that is created in the China (Hangzhou) region are queried. The template body is `{"Parameters":{"ZoneInfo":{"Type": "String"},"InstanceType": {"Type": "String"}},"ROSTemplateFormatVersion": "2015-09-01","Resources":{"ECS":{"Properties":{"ZoneId":{"Ref": "ZoneInfo"},"InstanceType": {"Ref": "InstanceType"}},"Type": "ALIYUN::ECS::Instance"}}}`.
     * For more information about the template parameters whose values you can query by calling this operation and the sample code of the template, see [Query the constraints of parameters](https://help.aliyun.com/document_detail/432820.html).
     *  *
     * @param GetTemplateParameterConstraintsRequest $request GetTemplateParameterConstraintsRequest
     *
     * @return GetTemplateParameterConstraintsResponse GetTemplateParameterConstraintsResponse
     */
    public function getTemplateParameterConstraints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateParameterConstraintsWithOptions($request, $runtime);
    }

    /**
     * @summary 推荐参数
     *  *
     * @param GetTemplateRecommendParametersRequest $request GetTemplateRecommendParametersRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateRecommendParametersResponse GetTemplateRecommendParametersResponse
     */
    public function getTemplateRecommendParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateBody)) {
            $query['TemplateBody'] = $request->templateBody;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateRecommendParameters',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateRecommendParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 推荐参数
     *  *
     * @param GetTemplateRecommendParametersRequest $request GetTemplateRecommendParametersRequest
     *
     * @return GetTemplateRecommendParametersResponse GetTemplateRecommendParametersResponse
     */
    public function getTemplateRecommendParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateRecommendParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a scenario.
     *  *
     * @description In this example, the details of the scenario whose ID is `ts-7f7a704cf71c49a6****` is queried. In the response, the source node data is displayed.
     *  *
     * @param GetTemplateScratchRequest $request GetTemplateScratchRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateScratchResponse GetTemplateScratchResponse
     */
    public function getTemplateScratchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->showDataOption)) {
            $query['ShowDataOption'] = $request->showDataOption;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a scenario.
     *  *
     * @description In this example, the details of the scenario whose ID is `ts-7f7a704cf71c49a6****` is queried. In the response, the source node data is displayed.
     *  *
     * @param GetTemplateScratchRequest $request GetTemplateScratchRequest
     *
     * @return GetTemplateScratchResponse GetTemplateScratchResponse
     */
    public function getTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a template resource by using the relevant template, stack, stack group, or change set.
     *  *
     * @param GetTemplateSummaryRequest $request GetTemplateSummaryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateSummaryResponse GetTemplateSummaryResponse
     */
    public function getTemplateSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeSetId)) {
            $query['ChangeSetId'] = $request->changeSetId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->templateBody)) {
            $query['TemplateBody'] = $request->templateBody;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateSummary',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a template resource by using the relevant template, stack, stack group, or change set.
     *  *
     * @param GetTemplateSummaryRequest $request GetTemplateSummaryRequest
     *
     * @return GetTemplateSummaryResponse GetTemplateSummaryResponse
     */
    public function getTemplateSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries change sets.
     *  *
     * @param ListChangeSetsRequest $request ListChangeSetsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChangeSetsResponse ListChangeSetsResponse
     */
    public function listChangeSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeSetId)) {
            $query['ChangeSetId'] = $request->changeSetId;
        }
        if (!Utils::isUnset($request->changeSetName)) {
            $query['ChangeSetName'] = $request->changeSetName;
        }
        if (!Utils::isUnset($request->executionStatus)) {
            $query['ExecutionStatus'] = $request->executionStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChangeSets',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListChangeSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries change sets.
     *  *
     * @param ListChangeSetsRequest $request ListChangeSetsRequest
     *
     * @return ListChangeSetsResponse ListChangeSetsResponse
     */
    public function listChangeSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChangeSetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a diagnostic report.
     *  *
     * @param ListDiagnosticsRequest $request ListDiagnosticsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDiagnosticsResponse ListDiagnosticsResponse
     */
    public function listDiagnosticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnosticKey)) {
            $query['DiagnosticKey'] = $request->diagnosticKey;
        }
        if (!Utils::isUnset($request->diagnosticProduct)) {
            $query['DiagnosticProduct'] = $request->diagnosticProduct;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiagnostics',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDiagnosticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a diagnostic report.
     *  *
     * @param ListDiagnosticsRequest $request ListDiagnosticsRequest
     *
     * @return ListDiagnosticsResponse ListDiagnosticsResponse
     */
    public function listDiagnostics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiagnosticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the registration records of a resource.
     *  *
     * @param ListResourceTypeRegistrationsRequest $request ListResourceTypeRegistrationsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceTypeRegistrationsResponse ListResourceTypeRegistrationsResponse
     */
    public function listResourceTypeRegistrationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->registrationId)) {
            $query['RegistrationId'] = $request->registrationId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceTypeRegistrations',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceTypeRegistrationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the registration records of a resource.
     *  *
     * @param ListResourceTypeRegistrationsRequest $request ListResourceTypeRegistrationsRequest
     *
     * @return ListResourceTypeRegistrationsResponse ListResourceTypeRegistrationsResponse
     */
    public function listResourceTypeRegistrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypeRegistrationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the versions of resource types, including the resource types created by you and provided by Resource Orchestration Service (ROS).
     *  *
     * @param ListResourceTypeVersionsRequest $request ListResourceTypeVersionsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceTypeVersionsResponse ListResourceTypeVersionsResponse
     */
    public function listResourceTypeVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceTypeVersions',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceTypeVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the versions of resource types, including the resource types created by you and provided by Resource Orchestration Service (ROS).
     *  *
     * @param ListResourceTypeVersionsRequest $request ListResourceTypeVersionsRequest
     *
     * @return ListResourceTypeVersionsResponse ListResourceTypeVersionsResponse
     */
    public function listResourceTypeVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypeVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary This topic provides an example on how to query the list of resource types supported by Resource Orchestration Service (ROS).
     *  *
     * @description For more information about errors common to all operations, see [Common error codes](/help/en/resource-orchestration-service/latest/common-error-codes).
     *  *
     * @param ListResourceTypesRequest $request ListResourceTypesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceTypesResponse ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceTypes',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This topic provides an example on how to query the list of resource types supported by Resource Orchestration Service (ROS).
     *  *
     * @description For more information about errors common to all operations, see [Common error codes](/help/en/resource-orchestration-service/latest/common-error-codes).
     *  *
     * @param ListResourceTypesRequest $request ListResourceTypesRequest
     *
     * @return ListResourceTypesResponse ListResourceTypesResponse
     */
    public function listResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a stack and the resource events of the stack.
     *  *
     * @param ListStackEventsRequest $request ListStackEventsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStackEventsResponse ListStackEventsResponse
     */
    public function listStackEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalResourceId)) {
            $query['LogicalResourceId'] = $request->logicalResourceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackEvents',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a stack and the resource events of the stack.
     *  *
     * @param ListStackEventsRequest $request ListStackEventsRequest
     *
     * @return ListStackEventsResponse ListStackEventsResponse
     */
    public function listStackEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of an operation on a stack group.
     *  *
     * @description In this example, the operation ID `6da106ca-1784-4a6f-a7e1-e723863d∗∗∗∗` is set to query the results of an operation on a stack group named `MyStackGroup`. The stack group is granted self-managed permissions and created in the China (Hangzhou) region.
     *  *
     * @param ListStackGroupOperationResultsRequest $request ListStackGroupOperationResultsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStackGroupOperationResultsResponse ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackGroupOperationResults',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackGroupOperationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of an operation on a stack group.
     *  *
     * @description In this example, the operation ID `6da106ca-1784-4a6f-a7e1-e723863d∗∗∗∗` is set to query the results of an operation on a stack group named `MyStackGroup`. The stack group is granted self-managed permissions and created in the China (Hangzhou) region.
     *  *
     * @param ListStackGroupOperationResultsRequest $request ListStackGroupOperationResultsRequest
     *
     * @return ListStackGroupOperationResultsResponse ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about stack group operations in an Alibaba Cloud region.
     *  *
     * @param ListStackGroupOperationsRequest $request ListStackGroupOperationsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStackGroupOperationsResponse ListStackGroupOperationsResponse
     */
    public function listStackGroupOperationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackGroupOperations',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackGroupOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about stack group operations in an Alibaba Cloud region.
     *  *
     * @param ListStackGroupOperationsRequest $request ListStackGroupOperationsRequest
     *
     * @return ListStackGroupOperationsResponse ListStackGroupOperationsResponse
     */
    public function listStackGroupOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of stack groups in an Alibaba Cloud region.
     *  *
     * @description In this example, the list of stack groups that are in the ACTIVE state and deployed in the China (Hangzhou) region is queried.
     *  *
     * @param ListStackGroupsRequest $request ListStackGroupsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStackGroupsResponse ListStackGroupsResponse
     */
    public function listStackGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackGroups',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of stack groups in an Alibaba Cloud region.
     *  *
     * @description In this example, the list of stack groups that are in the ACTIVE state and deployed in the China (Hangzhou) region is queried.
     *  *
     * @param ListStackGroupsRequest $request ListStackGroupsRequest
     *
     * @return ListStackGroupsResponse ListStackGroupsResponse
     */
    public function listStackGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of stack instances that are associated with a stack group in an Alibaba Cloud region.
     *  *
     * @description In this example, the list of stack instances that are associated with a stack group named `MyStackGroup` is queried. The stack group is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *  *
     * @param ListStackInstancesRequest $request ListStackInstancesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStackInstancesResponse ListStackInstancesResponse
     */
    public function listStackInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        if (!Utils::isUnset($request->stackInstanceAccountId)) {
            $query['StackInstanceAccountId'] = $request->stackInstanceAccountId;
        }
        if (!Utils::isUnset($request->stackInstanceRegionId)) {
            $query['StackInstanceRegionId'] = $request->stackInstanceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackInstances',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of stack instances that are associated with a stack group in an Alibaba Cloud region.
     *  *
     * @description In this example, the list of stack instances that are associated with a stack group named `MyStackGroup` is queried. The stack group is granted self-managed permissions and deployed in the China (Hangzhou) region.
     *  *
     * @param ListStackInstancesRequest $request ListStackInstancesRequest
     *
     * @return ListStackInstancesResponse ListStackInstancesResponse
     */
    public function listStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Detects stack-related operation risks and returns missing permissions and the causes of the risks.
     *  *
     * @description The ListStackOperationRisks operation is suitable for the following scenarios:
     * *   You want to detect high risks that may arise in resources when you delete a stack that contains the resources, and query the cause of each risk in a resource.
     * *   When you create a stack, the creation may fail. In this case, you can call this operation to check which types of permissions that are required to create stacks are missing.
     *  *
     * @param ListStackOperationRisksRequest $request ListStackOperationRisksRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStackOperationRisksResponse ListStackOperationRisksResponse
     */
    public function listStackOperationRisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retainAllResources)) {
            $query['RetainAllResources'] = $request->retainAllResources;
        }
        if (!Utils::isUnset($request->retainResources)) {
            $query['RetainResources'] = $request->retainResources;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListStackOperationRisks',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackOperationRisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects stack-related operation risks and returns missing permissions and the causes of the risks.
     *  *
     * @description The ListStackOperationRisks operation is suitable for the following scenarios:
     * *   You want to detect high risks that may arise in resources when you delete a stack that contains the resources, and query the cause of each risk in a resource.
     * *   When you create a stack, the creation may fail. In this case, you can call this operation to check which types of permissions that are required to create stacks are missing.
     *  *
     * @param ListStackOperationRisksRequest $request ListStackOperationRisksRequest
     *
     * @return ListStackOperationRisksResponse ListStackOperationRisksResponse
     */
    public function listStackOperationRisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackOperationRisksWithOptions($request, $runtime);
    }

    /**
     * @summary The query token. Set this parameter to the NextToken value returned in the last API call.
     *  *
     * @param ListStackResourceDriftsRequest $request ListStackResourceDriftsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStackResourceDriftsResponse ListStackResourceDriftsResponse
     */
    public function listStackResourceDriftsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceDriftStatus)) {
            $query['ResourceDriftStatus'] = $request->resourceDriftStatus;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackResourceDrifts',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackResourceDriftsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The query token. Set this parameter to the NextToken value returned in the last API call.
     *  *
     * @param ListStackResourceDriftsRequest $request ListStackResourceDriftsRequest
     *
     * @return ListStackResourceDriftsResponse ListStackResourceDriftsResponse
     */
    public function listStackResourceDrifts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourceDriftsWithOptions($request, $runtime);
    }

    /**
     * @summary This topic provides an example on how to query the resources in a specified stack. In this example, the resources in the stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region are queried.
     *  *
     * @description For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *  *
     * @param ListStackResourcesRequest $request ListStackResourcesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStackResourcesResponse ListStackResourcesResponse
     */
    public function listStackResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackResources',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This topic provides an example on how to query the resources in a specified stack. In this example, the resources in the stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Hangzhou) region are queried.
     *  *
     * @description For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/131957.html).
     *  *
     * @param ListStackResourcesRequest $request ListStackResourcesRequest
     *
     * @return ListStackResourcesResponse ListStackResourcesResponse
     */
    public function listStackResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of stacks.
     *  *
     * @description ###
     * This topic provides an example on how to query a list of stacks. In this example, the stacks that are deployed in the China (Hangzhou) region are queried.
     *  *
     * @param ListStacksRequest $request ListStacksRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStacksResponse ListStacksResponse
     */
    public function listStacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentStackId)) {
            $query['ParentStackId'] = $request->parentStackId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->showNestedStack)) {
            $query['ShowNestedStack'] = $request->showNestedStack;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->stackIds)) {
            $query['StackIds'] = $request->stackIds;
        }
        if (!Utils::isUnset($request->stackName)) {
            $query['StackName'] = $request->stackName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStacks',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of stacks.
     *  *
     * @description ###
     * This topic provides an example on how to query a list of stacks. In this example, the stacks that are deployed in the China (Hangzhou) region are queried.
     *  *
     * @param ListStacksRequest $request ListStacksRequest
     *
     * @return ListStacksResponse ListStacksResponse
     */
    public function listStacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStacksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tag keys that are added to resources in a template or stack in an Alibaba Cloud region.
     *  *
     * @description In this example, the tag keys that are added to a stack in the China (Hangzhou) region are queried.
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
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tag keys that are added to resources in a template or stack in an Alibaba Cloud region.
     *  *
     * @description In this example, the tag keys that are added to a stack in the China (Hangzhou) region are queried.
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
     * @summary Queries the tags that are added to resources in a template or stack in an Alibaba Cloud region.
     *  *
     * @description ###
     * *   To specify the query object, specify ResourceId or Tag in the request. Tag consists of Key and Value.
     * *   If you specify Tag and ResourceId, ROS resources that match both the parameters are returned.
     * This topic provides an example on how to query the tags that are added to a stack. In this example, the stack ID is `6bc589b5-9c02-4944-8fc3-f3624234****`. The stack is deployed in the China (Hangzhou) region.
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
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags that are added to resources in a template or stack in an Alibaba Cloud region.
     *  *
     * @description ###
     * *   To specify the query object, specify ResourceId or Tag in the request. Tag consists of Key and Value.
     * *   If you specify Tag and ResourceId, ROS resources that match both the parameters are returned.
     * This topic provides an example on how to query the tags that are added to a stack. In this example, the stack ID is `6bc589b5-9c02-4944-8fc3-f3624234****`. The stack is deployed in the China (Hangzhou) region.
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
     * @summary Queries the tag values that are added to resources in a template or stack in an Alibaba Cloud region.
     *  *
     * @description In this example, the tag values of `TagKey1` that is added to a stack in the China (Hangzhou) region are queried.
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
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tag values that are added to resources in a template or stack in an Alibaba Cloud region.
     *  *
     * @description In this example, the tag values of `TagKey1` that is added to a stack in the China (Hangzhou) region are queried.
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
     * @summary Queries scenarios.
     *  *
     * @description In this example, the scenarios that are created in the China (Hangzhou) region are queried. In the response, a scenario of the Resource Management and a scenario of the Resource Replication type are returned.
     *  *
     * @param ListTemplateScratchesRequest $request ListTemplateScratchesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplateScratchesResponse ListTemplateScratchesResponse
     */
    public function listTemplateScratchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        if (!Utils::isUnset($request->templateScratchType)) {
            $query['TemplateScratchType'] = $request->templateScratchType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplateScratches',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplateScratchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries scenarios.
     *  *
     * @description In this example, the scenarios that are created in the China (Hangzhou) region are queried. In the response, a scenario of the Resource Management and a scenario of the Resource Replication type are returned.
     *  *
     * @param ListTemplateScratchesRequest $request ListTemplateScratchesRequest
     *
     * @return ListTemplateScratchesResponse ListTemplateScratchesResponse
     */
    public function listTemplateScratches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateScratchesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of versions of a template.
     *  *
     * @param ListTemplateVersionsRequest $request ListTemplateVersionsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplateVersionsResponse ListTemplateVersionsResponse
     */
    public function listTemplateVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplateVersions',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplateVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of versions of a template.
     *  *
     * @param ListTemplateVersionsRequest $request ListTemplateVersionsRequest
     *
     * @return ListTemplateVersionsResponse ListTemplateVersionsResponse
     */
    public function listTemplateVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of private or shared templates.
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeTags)) {
            $query['IncludeTags'] = $request->includeTags;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of private or shared templates.
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a resource to a specific resource group.
     *  *
     * @description In this example, a stack deployed in the `China (Hangzhou)` region is moved to a specific resource group. The ID of the stack is `4e8611cb-251e-42b7-b9cb-3496362c****` and the ID of the resource group is `rg-acfm3peow3k****`.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
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
            'action'      => 'MoveResourceGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a resource to a specific resource group.
     *  *
     * @description In this example, a stack deployed in the `China (Hangzhou)` region is moved to a specific resource group. The ID of the stack is `4e8611cb-251e-42b7-b9cb-3496362c****` and the ID of the resource group is `rg-acfm3peow3k****`.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Previews the information about a stack that you want to create based on a template. You can call this operation to verify whether the template resources are valid.
     *  *
     * @description This topic provides an example on how to create a stack named `MyStack` in the China (Hangzhou) region by using a template and preview the information about the stack. In this example, the `template body` is `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *  *
     * @param PreviewStackRequest $request PreviewStackRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return PreviewStackResponse PreviewStackResponse
     */
    public function previewStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            $query['DisableRollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->enablePreConfig)) {
            $query['EnablePreConfig'] = $request->enablePreConfig;
        }
        if (!Utils::isUnset($request->parallelism)) {
            $query['Parallelism'] = $request->parallelism;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->stackName)) {
            $query['StackName'] = $request->stackName;
        }
        if (!Utils::isUnset($request->stackPolicyBody)) {
            $query['StackPolicyBody'] = $request->stackPolicyBody;
        }
        if (!Utils::isUnset($request->stackPolicyURL)) {
            $query['StackPolicyURL'] = $request->stackPolicyURL;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        if (!Utils::isUnset($request->templateScratchRegionId)) {
            $query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PreviewStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreviewStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Previews the information about a stack that you want to create based on a template. You can call this operation to verify whether the template resources are valid.
     *  *
     * @description This topic provides an example on how to create a stack named `MyStack` in the China (Hangzhou) region by using a template and preview the information about the stack. In this example, the `template body` is `{"ROSTemplateFormatVersion":"2015-09-01"}`.
     *  *
     * @param PreviewStackRequest $request PreviewStackRequest
     *
     * @return PreviewStackResponse PreviewStackResponse
     */
    public function previewStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewStackWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a new resource type, or creates a new version for an existing resource type.
     *  *
     * @description *   Versions increase from v1.
     * *   If you create a new resource type, v1 is used as the default version of the resource type. You can call the SetResourceType operation to change the default version of a resource type.
     *  *
     * @param RegisterResourceTypeRequest $request RegisterResourceTypeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterResourceTypeResponse RegisterResourceTypeResponse
     */
    public function registerResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterResourceType',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a new resource type, or creates a new version for an existing resource type.
     *  *
     * @description *   Versions increase from v1.
     * *   If you create a new resource type, v1 is used as the default version of the resource type. You can call the SetResourceType operation to change the default version of a resource type.
     *  *
     * @param RegisterResourceTypeRequest $request RegisterResourceTypeRequest
     *
     * @return RegisterResourceTypeResponse RegisterResourceTypeResponse
     */
    public function registerResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param SetDeletionProtectionRequest $request SetDeletionProtectionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDeletionProtectionResponse SetDeletionProtectionResponse
     */
    public function setDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDeletionProtection',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDeletionProtectionRequest $request SetDeletionProtectionRequest
     *
     * @return SetDeletionProtectionResponse SetDeletionProtectionResponse
     */
    public function setDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a resource type or a version of a resource type.
     *  *
     * @param SetResourceTypeRequest $request SetResourceTypeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetResourceTypeResponse SetResourceTypeResponse
     */
    public function setResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defaultVersionId)) {
            $query['DefaultVersionId'] = $request->defaultVersionId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetResourceType',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a resource type or a version of a resource type.
     *  *
     * @param SetResourceTypeRequest $request SetResourceTypeRequest
     *
     * @return SetResourceTypeResponse SetResourceTypeResponse
     */
    public function setResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to configure a stack policy.
     *  *
     * @description In this example, a stack policy is configured for a stack deployed in the `China (Hangzhou)` region whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`. The URL to the stack policy body is `oss://ros/stack-policy/demo`.
     *  *
     * @param SetStackPolicyRequest $request SetStackPolicyRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetStackPolicyResponse SetStackPolicyResponse
     */
    public function setStackPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->stackPolicyBody)) {
            $query['StackPolicyBody'] = $request->stackPolicyBody;
        }
        if (!Utils::isUnset($request->stackPolicyURL)) {
            $query['StackPolicyURL'] = $request->stackPolicyURL;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetStackPolicy',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetStackPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to configure a stack policy.
     *  *
     * @description In this example, a stack policy is configured for a stack deployed in the `China (Hangzhou)` region whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`. The URL to the stack policy body is `oss://ros/stack-policy/demo`.
     *  *
     * @param SetStackPolicyRequest $request SetStackPolicyRequest
     *
     * @return SetStackPolicyResponse SetStackPolicyResponse
     */
    public function setStackPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setStackPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Shares or unshares a template.
     *  *
     * @description In this example, the template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is shared with an Alibaba Cloud account. The ID of the Alibaba Cloud account is `151266687691****`.
     * > The recipient Alibaba Cloud account (ID: `151266687691****`) can authorize RAM users to use the shared template.
     *  *
     * @param SetTemplatePermissionRequest $request SetTemplatePermissionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetTemplatePermissionResponse SetTemplatePermissionResponse
     */
    public function setTemplatePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountIds)) {
            $query['AccountIds'] = $request->accountIds;
        }
        if (!Utils::isUnset($request->shareOption)) {
            $query['ShareOption'] = $request->shareOption;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->versionOption)) {
            $query['VersionOption'] = $request->versionOption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetTemplatePermission',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetTemplatePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Shares or unshares a template.
     *  *
     * @description In this example, the template whose ID is `5ecd1e10-b0e9-4389-a565-e4c15efc****` is shared with an Alibaba Cloud account. The ID of the Alibaba Cloud account is `151266687691****`.
     * > The recipient Alibaba Cloud account (ID: `151266687691****`) can authorize RAM users to use the shared template.
     *  *
     * @param SetTemplatePermissionRequest $request SetTemplatePermissionRequest
     *
     * @return SetTemplatePermissionResponse SetTemplatePermissionResponse
     */
    public function setTemplatePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTemplatePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a signal to a resource in a stack.
     *  *
     * @param SignalResourceRequest $request SignalResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SignalResourceResponse SignalResourceResponse
     */
    public function signalResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->logicalResourceId)) {
            $query['LogicalResourceId'] = $request->logicalResourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uniqueId)) {
            $query['UniqueId'] = $request->uniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SignalResource',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SignalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends a signal to a resource in a stack.
     *  *
     * @param SignalResourceRequest $request SignalResourceRequest
     *
     * @return SignalResourceResponse SignalResourceResponse
     */
    public function signalResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signalResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a stack group operation.
     *  *
     * @description This topic provides an example on how to stop a stack group operation whose ID is `6da106ca-1784-4a6f-a7e1-e723863****` in the China (Hangzhou) region.
     *  *
     * @param StopStackGroupOperationRequest $request StopStackGroupOperationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return StopStackGroupOperationResponse StopStackGroupOperationResponse
     */
    public function stopStackGroupOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopStackGroupOperation',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopStackGroupOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a stack group operation.
     *  *
     * @description This topic provides an example on how to stop a stack group operation whose ID is `6da106ca-1784-4a6f-a7e1-e723863****` in the China (Hangzhou) region.
     *  *
     * @param StopStackGroupOperationRequest $request StopStackGroupOperationRequest
     *
     * @return StopStackGroupOperationResponse StopStackGroupOperationResponse
     */
    public function stopStackGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates and adds tags to resources.
     *  *
     * @description This topic provides an example on how to create a tag and add the tag to a stack. In this example, the stack ID is `7fee80e1-8c48-4c2f-8300-0f6dc40b****`, the tag key is `FinanceDept`, and the tag value is `FinanceJoshua`.
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
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates and adds tags to resources.
     *  *
     * @description This topic provides an example on how to create a tag and add the tag to a stack. In this example, the stack ID is `7fee80e1-8c48-4c2f-8300-0f6dc40b****`, the tag key is `FinanceDept`, and the tag value is `FinanceJoshua`.
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
     * @summary Removes tags from resources and then deletes the tags.
     *  *
     * @description This topic provides an example on how to remove all tags from a stack that is deployed in the China (Hangzhou) region. In this example, the stack ID is `46ec7b78-9d5e-4b21-aefd-448c90aa****`.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
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
            'action'      => 'UntagResources',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from resources and then deletes the tags.
     *  *
     * @description This topic provides an example on how to remove all tags from a stack that is deployed in the China (Hangzhou) region. In this example, the stack ID is `46ec7b78-9d5e-4b21-aefd-448c90aa****`.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a stack.
     *  *
     * @description The values of parameters in the Parameters section vary based on the value that you specify for the UsePreviousParameters parameter in the request. If you do not add the parameters that are defined in the template to the Parameters section, take note of the following items:
     * *   UsePreviousParameters is set to false: If the template parameters have default values, the default values are used. Otherwise, you must specify values for the template parameters in the Parameters section.
     * *   UsePreviousParameters is set to true: If you specify values for the template parameters when you create a stack, the values are used. If you leave the template parameters empty when you create a stack but the template parameters have default values, the default values are used.
     * This topic describes how to update a stack. In this example, the template body of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Beijing) region is updated to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
     *  *
     * @param UpdateStackRequest $request UpdateStackRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStackResponse UpdateStackResponse
     */
    public function updateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            $query['DisableRollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->dryRunOptions)) {
            $query['DryRunOptions'] = $request->dryRunOptions;
        }
        if (!Utils::isUnset($request->parallelism)) {
            $query['Parallelism'] = $request->parallelism;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replacementOption)) {
            $query['ReplacementOption'] = $request->replacementOption;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->stackPolicyBody)) {
            $query['StackPolicyBody'] = $request->stackPolicyBody;
        }
        if (!Utils::isUnset($request->stackPolicyDuringUpdateBody)) {
            $query['StackPolicyDuringUpdateBody'] = $request->stackPolicyDuringUpdateBody;
        }
        if (!Utils::isUnset($request->stackPolicyDuringUpdateURL)) {
            $query['StackPolicyDuringUpdateURL'] = $request->stackPolicyDuringUpdateURL;
        }
        if (!Utils::isUnset($request->stackPolicyURL)) {
            $query['StackPolicyURL'] = $request->stackPolicyURL;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        if (!Utils::isUnset($request->usePreviousParameters)) {
            $query['UsePreviousParameters'] = $request->usePreviousParameters;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a stack.
     *  *
     * @description The values of parameters in the Parameters section vary based on the value that you specify for the UsePreviousParameters parameter in the request. If you do not add the parameters that are defined in the template to the Parameters section, take note of the following items:
     * *   UsePreviousParameters is set to false: If the template parameters have default values, the default values are used. Otherwise, you must specify values for the template parameters in the Parameters section.
     * *   UsePreviousParameters is set to true: If you specify values for the template parameters when you create a stack, the values are used. If you leave the template parameters empty when you create a stack but the template parameters have default values, the default values are used.
     * This topic describes how to update a stack. In this example, the template body of a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****` in the China (Beijing) region is updated to `{"ROSTemplateFormatVersion": "2015-09-01"}`.
     *  *
     * @param UpdateStackRequest $request UpdateStackRequest
     *
     * @return UpdateStackResponse UpdateStackResponse
     */
    public function updateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackWithOptions($request, $runtime);
    }

    /**
     * @summary The region ID of the stack group. You can call the [DescribeRegions]\\(~~131035~~) operation to query the latest list of Alibaba Cloud regions.
     *  *
     * @description The name of the stack group. The name must be unique within a region.
     * The name can be up to 255 characters in length and can contain digits, letters, hyphens (-), and underscores (_). The name must start with a digit or a letter.
     *  *
     * @param UpdateStackGroupRequest $tmpReq  UpdateStackGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStackGroupResponse UpdateStackGroupResponse
     */
    public function updateStackGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStackGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->autoDeployment)) {
            $request->autoDeploymentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->autoDeployment, 'AutoDeployment', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentTargets)) {
            $request->deploymentTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deploymentTargets, 'DeploymentTargets', 'json');
        }
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIdsShrink)) {
            $query['AccountIds'] = $request->accountIdsShrink;
        }
        if (!Utils::isUnset($request->administrationRoleName)) {
            $query['AdministrationRoleName'] = $request->administrationRoleName;
        }
        if (!Utils::isUnset($request->autoDeploymentShrink)) {
            $query['AutoDeployment'] = $request->autoDeploymentShrink;
        }
        if (!Utils::isUnset($request->capabilities)) {
            $query['Capabilities'] = $request->capabilities;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deploymentTargetsShrink)) {
            $query['DeploymentTargets'] = $request->deploymentTargetsShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionRoleName)) {
            $query['ExecutionRoleName'] = $request->executionRoleName;
        }
        if (!Utils::isUnset($request->operationDescription)) {
            $query['OperationDescription'] = $request->operationDescription;
        }
        if (!Utils::isUnset($request->operationPreferencesShrink)) {
            $query['OperationPreferences'] = $request->operationPreferencesShrink;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->permissionModel)) {
            $query['PermissionModel'] = $request->permissionModel;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionIdsShrink)) {
            $query['RegionIds'] = $request->regionIdsShrink;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStackGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The region ID of the stack group. You can call the [DescribeRegions]\\(~~131035~~) operation to query the latest list of Alibaba Cloud regions.
     *  *
     * @description The name of the stack group. The name must be unique within a region.
     * The name can be up to 255 characters in length and can contain digits, letters, hyphens (-), and underscores (_). The name must start with a digit or a letter.
     *  *
     * @param UpdateStackGroupRequest $request UpdateStackGroupRequest
     *
     * @return UpdateStackGroupResponse UpdateStackGroupResponse
     */
    public function updateStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Updates stack instances in the specified accounts and regions.
     *  *
     * @description In this topic, the stack group named `MyStackGroup` that is created in the China (Hangzhou) region is used. The stack group is granted the self-managed permissions. In this example, stacks of the stack group are updated by using the Alibaba Cloud accounts whose IDs are `151266687691****` and `141261387191****` in the China (Hangzhou) region and China (Beijing) region.
     *  *
     * @param UpdateStackInstancesRequest $tmpReq  UpdateStackInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStackInstancesResponse UpdateStackInstancesResponse
     */
    public function updateStackInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStackInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentTargets)) {
            $request->deploymentTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deploymentTargets, 'DeploymentTargets', 'json');
        }
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIdsShrink)) {
            $query['AccountIds'] = $request->accountIdsShrink;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deploymentTargetsShrink)) {
            $query['DeploymentTargets'] = $request->deploymentTargetsShrink;
        }
        if (!Utils::isUnset($request->operationDescription)) {
            $query['OperationDescription'] = $request->operationDescription;
        }
        if (!Utils::isUnset($request->operationPreferencesShrink)) {
            $query['OperationPreferences'] = $request->operationPreferencesShrink;
        }
        if (!Utils::isUnset($request->parameterOverrides)) {
            $query['ParameterOverrides'] = $request->parameterOverrides;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionIdsShrink)) {
            $query['RegionIds'] = $request->regionIdsShrink;
        }
        if (!Utils::isUnset($request->stackGroupName)) {
            $query['StackGroupName'] = $request->stackGroupName;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateStackInstances',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates stack instances in the specified accounts and regions.
     *  *
     * @description In this topic, the stack group named `MyStackGroup` that is created in the China (Hangzhou) region is used. The stack group is granted the self-managed permissions. In this example, stacks of the stack group are updated by using the Alibaba Cloud accounts whose IDs are `151266687691****` and `141261387191****` in the China (Hangzhou) region and China (Beijing) region.
     *  *
     * @param UpdateStackInstancesRequest $request UpdateStackInstancesRequest
     *
     * @return UpdateStackInstancesResponse UpdateStackInstancesResponse
     */
    public function updateStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Corrects a template to eliminate stack drift.
     *  *
     * @description Limits: You can eliminate only drift on stacks that have drifted. You must call the [DetectStackDrift](https://help.aliyun.com/document_detail/155094.html) operation to perform drift detection on a stack, call the [GetStackDriftDetectionStatus](https://help.aliyun.com/document_detail/155097.html) operation to query the drift status of the stack to make sure that the stack has drifted, and then call the UpdateStackTemplateByResources operation to eliminate drift.
     * In this topic, drift is eliminated for a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`. The stack is deployed in the China (Hangzhou) region.
     *  *
     * @param UpdateStackTemplateByResourcesRequest $request UpdateStackTemplateByResourcesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStackTemplateByResourcesResponse UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->logicalResourceId)) {
            $query['LogicalResourceId'] = $request->logicalResourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stackId)) {
            $query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->templateFormat)) {
            $query['TemplateFormat'] = $request->templateFormat;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateStackTemplateByResources',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStackTemplateByResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Corrects a template to eliminate stack drift.
     *  *
     * @description Limits: You can eliminate only drift on stacks that have drifted. You must call the [DetectStackDrift](https://help.aliyun.com/document_detail/155094.html) operation to perform drift detection on a stack, call the [GetStackDriftDetectionStatus](https://help.aliyun.com/document_detail/155097.html) operation to query the drift status of the stack to make sure that the stack has drifted, and then call the UpdateStackTemplateByResources operation to eliminate drift.
     * In this topic, drift is eliminated for a stack whose ID is `4a6c9851-3b0f-4f5f-b4ca-a14bf691****`. The stack is deployed in the China (Hangzhou) region.
     *  *
     * @param UpdateStackTemplateByResourcesRequest $request UpdateStackTemplateByResourcesRequest
     *
     * @return UpdateStackTemplateByResourcesResponse UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackTemplateByResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a template by specifying the template URL or template details.
     *  *
     * @description When you update a template, take note of the following items:
     * *   If you specify TemplateBody or TemplateURL, the existing version number is automatically incremented by 1 after the template is updated. For example, the version is changed from v1 to v2.
     * *   If you do not specify TemplateBody or TemplateURL, the version number remains unchanged.
     * *   A template can have up to 100 versions. If the number of templates reaches the upper limit, the template fails to be updated. You must create another template.
     *  *
     * @param UpdateTemplateRequest $request UpdateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a template by specifying the template URL or template details.
     *  *
     * @description When you update a template, take note of the following items:
     * *   If you specify TemplateBody or TemplateURL, the existing version number is automatically incremented by 1 after the template is updated. For example, the version is changed from v1 to v2.
     * *   If you do not specify TemplateBody or TemplateURL, the version number remains unchanged.
     * *   A template can have up to 100 versions. If the number of templates reaches the upper limit, the template fails to be updated. You must create another template.
     *  *
     * @param UpdateTemplateRequest $request UpdateTemplateRequest
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a scenario.
     *  *
     * @description ### [](#)Resource replication scenario
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
     *  *
     * @param UpdateTemplateScratchRequest $tmpReq  UpdateTemplateScratchRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateScratchResponse UpdateTemplateScratchResponse
     */
    public function updateTemplateScratchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTemplateScratchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->preferenceParameters)) {
            $request->preferenceParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->preferenceParameters, 'PreferenceParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceResourceGroup)) {
            $request->sourceResourceGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceResourceGroup, 'SourceResourceGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceResources)) {
            $request->sourceResourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceResources, 'SourceResources', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceTag)) {
            $request->sourceTagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceTag, 'SourceTag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionMode)) {
            $query['ExecutionMode'] = $request->executionMode;
        }
        if (!Utils::isUnset($request->logicalIdStrategy)) {
            $query['LogicalIdStrategy'] = $request->logicalIdStrategy;
        }
        if (!Utils::isUnset($request->preferenceParametersShrink)) {
            $query['PreferenceParameters'] = $request->preferenceParametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceResourceGroupShrink)) {
            $query['SourceResourceGroup'] = $request->sourceResourceGroupShrink;
        }
        if (!Utils::isUnset($request->sourceResourcesShrink)) {
            $query['SourceResources'] = $request->sourceResourcesShrink;
        }
        if (!Utils::isUnset($request->sourceTagShrink)) {
            $query['SourceTag'] = $request->sourceTagShrink;
        }
        if (!Utils::isUnset($request->templateScratchId)) {
            $query['TemplateScratchId'] = $request->templateScratchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplateScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a scenario.
     *  *
     * @description ### [](#)Resource replication scenario
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
     *  *
     * @param UpdateTemplateScratchRequest $request UpdateTemplateScratchRequest
     *
     * @return UpdateTemplateScratchResponse UpdateTemplateScratchResponse
     */
    public function updateTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * @summary Validates a template by using a template URL or template body. The template is used to create a stack.
     *  *
     * @description In this example, a template that you want to use to create a stack is validated. `TemplateURL` is set to `oss://ros/template/demo`.
     *  *
     * @param ValidateTemplateRequest $request ValidateTemplateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateTemplateResponse ValidateTemplateResponse
     */
    public function validateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        if (!Utils::isUnset($request->updateInfoOptions)) {
            $query['UpdateInfoOptions'] = $request->updateInfoOptions;
        }
        if (!Utils::isUnset($request->validationOption)) {
            $query['ValidationOption'] = $request->validationOption;
        }
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ValidateTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Validates a template by using a template URL or template body. The template is used to create a stack.
     *  *
     * @description In this example, a template that you want to use to create a stack is validated. `TemplateURL` is set to `oss://ros/template/demo`.
     *  *
     * @param ValidateTemplateRequest $request ValidateTemplateRequest
     *
     * @return ValidateTemplateResponse ValidateTemplateResponse
     */
    public function validateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTemplateWithOptions($request, $runtime);
    }
}
