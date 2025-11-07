<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CancelExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CancelExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CheckGitRepoFileExistsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CheckGitRepoFileExistsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CheckGitRepositoryExistsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CheckGitRepositoryExistsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ContinueDeployApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ContinueDeployApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateGitRepositoryRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateGitRepositoryResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateOpsItemRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateOpsItemResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateOpsItemShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateParameterShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreatePatchBaselineRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreatePatchBaselineResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreatePatchBaselineShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateSecretParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateSecretParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateSecretParameterShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateStateConfigurationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateStateConfigurationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateStateConfigurationShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateTemplateShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteExecutionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteExecutionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteOpsItemsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteOpsItemsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeletePatchBaselineRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeletePatchBaselineResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteSecretParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteSecretParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteStateConfigurationsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteStateConfigurationsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteTemplatesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteTemplatesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeployApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeployApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DescribeApplicationGroupBillRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DescribeApplicationGroupBillResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GenerateExecutionPolicyRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GenerateExecutionPolicyResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GenerateOpsItemRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GenerateOpsItemResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetExecutionTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetExecutionTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetGitBranchRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetGitBranchResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetGitRepositoryRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetGitRepositoryResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetOpsItemRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetOpsItemResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersByPathRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersByPathResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetPatchBaselineRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetPatchBaselineResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersByPathRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersByPathResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetServiceSettingsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetServiceSettingsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetTemplateParameterConstraintsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetTemplateParameterConstraintsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListActionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListActionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationGroupsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationGroupsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationsShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitAccountsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitAccountsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitBranchesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitBranchesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitOrganizationsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitOrganizationsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoriesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoriesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoryContentsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoryContentsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePackageStatesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePackageStatesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchStatesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchStatesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInventoryEntriesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInventoryEntriesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListOpsItemsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListOpsItemsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListOpsItemsShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParametersRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParametersResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParametersShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParameterVersionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParameterVersionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListResourceExecutionStatusRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListResourceExecutionStatusResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParametersRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParametersResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParametersShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParameterVersionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParameterVersionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListStateConfigurationsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListStateConfigurationsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListStateConfigurationsShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplatesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplateVersionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplateVersionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\NotifyExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\NotifyExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\RegisterDefaultPatchBaselineRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\RegisterDefaultPatchBaselineResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\SearchInventoryRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\SearchInventoryResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\SetServiceSettingsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\SetServiceSettingsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\TagResourcesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\TriggerExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\TriggerExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationGroupShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateInstancePackageStateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateInstancePackageStateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateInstancePackageStateShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateOpsItemRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateOpsItemResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateOpsItemShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdatePatchBaselineRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdatePatchBaselineResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdatePatchBaselineShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateSecretParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateSecretParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateSecretParameterShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateStateConfigurationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateStateConfigurationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateStateConfigurationShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateTemplateShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ValidateTemplateContentRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ValidateTemplateContentResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Oos extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('oos', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 分析仓库.
     *
     * @param request - AnalyzeGitRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnalyzeGitRepositoryResponse
     *
     * @param AnalyzeGitRepositoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AnalyzeGitRepositoryResponse
     */
    public function analyzeGitRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branch) {
            @$query['Branch'] = $request->branch;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->repoFullName) {
            @$query['RepoFullName'] = $request->repoFullName;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AnalyzeGitRepository',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AnalyzeGitRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分析仓库.
     *
     * @param request - AnalyzeGitRepositoryRequest
     *
     * @returns AnalyzeGitRepositoryResponse
     *
     * @param AnalyzeGitRepositoryRequest $request
     *
     * @return AnalyzeGitRepositoryResponse
     */
    public function analyzeGitRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->analyzeGitRepositoryWithOptions($request, $runtime);
    }

    /**
     * Cancels an execution.
     *
     * @param request - CancelExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelExecutionResponse
     *
     * @param CancelExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelExecutionResponse
     */
    public function cancelExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelExecution',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an execution.
     *
     * @param request - CancelExecutionRequest
     *
     * @returns CancelExecutionResponse
     *
     * @param CancelExecutionRequest $request
     *
     * @return CancelExecutionResponse
     */
    public function cancelExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelExecutionWithOptions($request, $runtime);
    }

    /**
     * Modifies the resource group to which a cloud resource belongs.
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
            'version' => '2019-06-01',
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
     * Modifies the resource group to which a cloud resource belongs.
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
     * 检测仓库中文件是否存在.
     *
     * @param request - CheckGitRepoFileExistsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckGitRepoFileExistsResponse
     *
     * @param CheckGitRepoFileExistsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckGitRepoFileExistsResponse
     */
    public function checkGitRepoFileExistsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branch) {
            @$query['Branch'] = $request->branch;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->repoFullName) {
            @$query['RepoFullName'] = $request->repoFullName;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckGitRepoFileExists',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckGitRepoFileExistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检测仓库中文件是否存在.
     *
     * @param request - CheckGitRepoFileExistsRequest
     *
     * @returns CheckGitRepoFileExistsResponse
     *
     * @param CheckGitRepoFileExistsRequest $request
     *
     * @return CheckGitRepoFileExistsResponse
     */
    public function checkGitRepoFileExists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkGitRepoFileExistsWithOptions($request, $runtime);
    }

    /**
     * 检测仓库是否存在.
     *
     * @param request - CheckGitRepositoryExistsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckGitRepositoryExistsResponse
     *
     * @param CheckGitRepositoryExistsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckGitRepositoryExistsResponse
     */
    public function checkGitRepositoryExistsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->repoFullName) {
            @$query['RepoFullName'] = $request->repoFullName;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckGitRepositoryExists',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckGitRepositoryExistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检测仓库是否存在.
     *
     * @param request - CheckGitRepositoryExistsRequest
     *
     * @returns CheckGitRepositoryExistsResponse
     *
     * @param CheckGitRepositoryExistsRequest $request
     *
     * @return CheckGitRepositoryExistsResponse
     */
    public function checkGitRepositoryExists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkGitRepositoryExistsWithOptions($request, $runtime);
    }

    /**
     * Continues deploying an application group when an error occurs for calling the DeployApplicationGroup operation. You can call this operation only for the applications which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - ContinueDeployApplicationGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinueDeployApplicationGroupResponse
     *
     * @param ContinueDeployApplicationGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ContinueDeployApplicationGroupResponse
     */
    public function continueDeployApplicationGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->deployParameters) {
            @$query['DeployParameters'] = $request->deployParameters;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ContinueDeployApplicationGroup',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContinueDeployApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Continues deploying an application group when an error occurs for calling the DeployApplicationGroup operation. You can call this operation only for the applications which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - ContinueDeployApplicationGroupRequest
     *
     * @returns ContinueDeployApplicationGroupResponse
     *
     * @param ContinueDeployApplicationGroupRequest $request
     *
     * @return ContinueDeployApplicationGroupResponse
     */
    public function continueDeployApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueDeployApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param tmpReq - CreateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->alarmConfig) {
            $request->alarmConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alarmConfig, 'AlarmConfig', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->alarmConfigShrink) {
            @$query['AlarmConfig'] = $request->alarmConfigShrink;
        }

        if (null !== $request->applicationSource) {
            @$query['ApplicationSource'] = $request->applicationSource;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplication',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - CreateApplicationRequest
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * Creates an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - CreateApplicationGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationGroupResponse
     *
     * @param CreateApplicationGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateApplicationGroupResponse
     */
    public function createApplicationGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cmsGroupId) {
            @$query['CmsGroupId'] = $request->cmsGroupId;
        }

        if (null !== $request->deployRegionId) {
            @$query['DeployRegionId'] = $request->deployRegionId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->importTagKey) {
            @$query['ImportTagKey'] = $request->importTagKey;
        }

        if (null !== $request->importTagValue) {
            @$query['ImportTagValue'] = $request->importTagValue;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationGroup',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - CreateApplicationGroupRequest
     *
     * @returns CreateApplicationGroupResponse
     *
     * @param CreateApplicationGroupRequest $request
     *
     * @return CreateApplicationGroupResponse
     */
    public function createApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * 创建仓库.
     *
     * @param request - CreateGitRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGitRepositoryResponse
     *
     * @param CreateGitRepositoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateGitRepositoryResponse
     */
    public function createGitRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->isPrivate) {
            @$query['IsPrivate'] = $request->isPrivate;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceRepoBranch) {
            @$query['SourceRepoBranch'] = $request->sourceRepoBranch;
        }

        if (null !== $request->sourceRepoName) {
            @$query['SourceRepoName'] = $request->sourceRepoName;
        }

        if (null !== $request->sourceRepoOwner) {
            @$query['SourceRepoOwner'] = $request->sourceRepoOwner;
        }

        if (null !== $request->targetRepoName) {
            @$query['TargetRepoName'] = $request->targetRepoName;
        }

        if (null !== $request->targetRepoOwner) {
            @$query['TargetRepoOwner'] = $request->targetRepoOwner;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGitRepository',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGitRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建仓库.
     *
     * @param request - CreateGitRepositoryRequest
     *
     * @returns CreateGitRepositoryResponse
     *
     * @param CreateGitRepositoryRequest $request
     *
     * @return CreateGitRepositoryResponse
     */
    public function createGitRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGitRepositoryWithOptions($request, $runtime);
    }

    /**
     * Creates an O\\\\\\\\\\\\&M Item.
     *
     * @param tmpReq - CreateOpsItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOpsItemResponse
     *
     * @param CreateOpsItemRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateOpsItemResponse
     */
    public function createOpsItemWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOpsItemShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dedupString) {
            @$query['DedupString'] = $request->dedupString;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        if (null !== $request->solutions) {
            @$query['Solutions'] = $request->solutions;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOpsItem',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOpsItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an O\\\\\\\\\\\\&M Item.
     *
     * @param request - CreateOpsItemRequest
     *
     * @returns CreateOpsItemResponse
     *
     * @param CreateOpsItemRequest $request
     *
     * @return CreateOpsItemResponse
     */
    public function createOpsItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOpsItemWithOptions($request, $runtime);
    }

    /**
     * Creates a common parameter.
     *
     * @param tmpReq - CreateParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateParameterResponse
     *
     * @param CreateParameterRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateParameterResponse
     */
    public function createParameterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateParameterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->constraints) {
            @$query['Constraints'] = $request->constraints;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateParameter',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a common parameter.
     *
     * @param request - CreateParameterRequest
     *
     * @returns CreateParameterResponse
     *
     * @param CreateParameterRequest $request
     *
     * @return CreateParameterResponse
     */
    public function createParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParameterWithOptions($request, $runtime);
    }

    /**
     * Creates a patch baseline.
     *
     * @param tmpReq - CreatePatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePatchBaselineResponse
     *
     * @param CreatePatchBaselineRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePatchBaselineResponse
     */
    public function createPatchBaselineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePatchBaselineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->approvedPatches) {
            $request->approvedPatchesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->approvedPatches, 'ApprovedPatches', 'json');
        }

        if (null !== $tmpReq->rejectedPatches) {
            $request->rejectedPatchesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rejectedPatches, 'RejectedPatches', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->approvalRules) {
            @$query['ApprovalRules'] = $request->approvalRules;
        }

        if (null !== $request->approvedPatchesShrink) {
            @$query['ApprovedPatches'] = $request->approvedPatchesShrink;
        }

        if (null !== $request->approvedPatchesEnableNonSecurity) {
            @$query['ApprovedPatchesEnableNonSecurity'] = $request->approvedPatchesEnableNonSecurity;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->operationSystem) {
            @$query['OperationSystem'] = $request->operationSystem;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rejectedPatchesShrink) {
            @$query['RejectedPatches'] = $request->rejectedPatchesShrink;
        }

        if (null !== $request->rejectedPatchesAction) {
            @$query['RejectedPatchesAction'] = $request->rejectedPatchesAction;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourcesShrink) {
            @$query['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePatchBaseline',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a patch baseline.
     *
     * @param request - CreatePatchBaselineRequest
     *
     * @returns CreatePatchBaselineResponse
     *
     * @param CreatePatchBaselineRequest $request
     *
     * @return CreatePatchBaselineResponse
     */
    public function createPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * Creates an encryption parameter. Make sure that you have the permissions to call this operation.
     *
     * @param tmpReq - CreateSecretParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecretParameterResponse
     *
     * @param CreateSecretParameterRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSecretParameterResponse
     */
    public function createSecretParameterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSecretParameterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->constraints) {
            @$query['Constraints'] = $request->constraints;
        }

        if (null !== $request->DKMSInstanceId) {
            @$query['DKMSInstanceId'] = $request->DKMSInstanceId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecretParameter',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSecretParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an encryption parameter. Make sure that you have the permissions to call this operation.
     *
     * @param request - CreateSecretParameterRequest
     *
     * @returns CreateSecretParameterResponse
     *
     * @param CreateSecretParameterRequest $request
     *
     * @return CreateSecretParameterResponse
     */
    public function createSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecretParameterWithOptions($request, $runtime);
    }

    /**
     * Creates a desired-state configuration.
     *
     * @param tmpReq - CreateStateConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStateConfigurationResponse
     *
     * @param CreateStateConfigurationRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateStateConfigurationResponse
     */
    public function createStateConfigurationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateStateConfigurationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configureMode) {
            @$query['ConfigureMode'] = $request->configureMode;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scheduleExpression) {
            @$query['ScheduleExpression'] = $request->scheduleExpression;
        }

        if (null !== $request->scheduleType) {
            @$query['ScheduleType'] = $request->scheduleType;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStateConfiguration',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStateConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a desired-state configuration.
     *
     * @param request - CreateStateConfigurationRequest
     *
     * @returns CreateStateConfigurationResponse
     *
     * @param CreateStateConfigurationRequest $request
     *
     * @return CreateStateConfigurationResponse
     */
    public function createStateConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStateConfigurationWithOptions($request, $runtime);
    }

    /**
     * Creates a template.
     *
     * @param tmpReq - CreateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2019-06-01',
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
     * Creates a template.
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
     * Deletes an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - DeleteApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->retainResource) {
            @$query['RetainResource'] = $request->retainResource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplication',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - DeleteApplicationRequest
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * Deletes an application group. You can call this operation only for the application groups which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - DeleteApplicationGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationGroupResponse
     *
     * @param DeleteApplicationGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteApplicationGroupResponse
     */
    public function deleteApplicationGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->retainResource) {
            @$query['RetainResource'] = $request->retainResource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplicationGroup',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application group. You can call this operation only for the application groups which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - DeleteApplicationGroupRequest
     *
     * @returns DeleteApplicationGroupResponse
     *
     * @param DeleteApplicationGroupRequest $request
     *
     * @return DeleteApplicationGroupResponse
     */
    public function deleteApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple executions.
     *
     * @param request - DeleteExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExecutionsResponse
     *
     * @param DeleteExecutionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteExecutionsResponse
     */
    public function deleteExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->executionIds) {
            @$query['ExecutionIds'] = $request->executionIds;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExecutions',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple executions.
     *
     * @param request - DeleteExecutionsRequest
     *
     * @returns DeleteExecutionsResponse
     *
     * @param DeleteExecutionsRequest $request
     *
     * @return DeleteExecutionsResponse
     */
    public function deleteExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExecutionsWithOptions($request, $runtime);
    }

    /**
     * Deletes O\\\\\\&M Items.
     *
     * @param request - DeleteOpsItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOpsItemsResponse
     *
     * @param DeleteOpsItemsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteOpsItemsResponse
     */
    public function deleteOpsItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->opsItemIds) {
            @$query['OpsItemIds'] = $request->opsItemIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOpsItems',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOpsItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes O\\\\\\&M Items.
     *
     * @param request - DeleteOpsItemsRequest
     *
     * @returns DeleteOpsItemsResponse
     *
     * @param DeleteOpsItemsRequest $request
     *
     * @return DeleteOpsItemsResponse
     */
    public function deleteOpsItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOpsItemsWithOptions($request, $runtime);
    }

    /**
     * Deletes a common parameter.
     *
     * @param request - DeleteParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteParameterResponse
     *
     * @param DeleteParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteParameterResponse
     */
    public function deleteParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteParameter',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a common parameter.
     *
     * @param request - DeleteParameterRequest
     *
     * @returns DeleteParameterResponse
     *
     * @param DeleteParameterRequest $request
     *
     * @return DeleteParameterResponse
     */
    public function deleteParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParameterWithOptions($request, $runtime);
    }

    /**
     * Deletes a patch baseline.
     *
     * @param request - DeletePatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePatchBaselineResponse
     *
     * @param DeletePatchBaselineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePatchBaselineResponse
     */
    public function deletePatchBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePatchBaseline',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a patch baseline.
     *
     * @param request - DeletePatchBaselineRequest
     *
     * @returns DeletePatchBaselineResponse
     *
     * @param DeletePatchBaselineRequest $request
     *
     * @return DeletePatchBaselineResponse
     */
    public function deletePatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePatchBaselineWithOptions($request, $runtime);
    }

    /**
     * Deletes an encryption parameter. Make sure that you have the permissions to call the DeleteSecret operation before you call this operation.
     *
     * @param request - DeleteSecretParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretParameterResponse
     *
     * @param DeleteSecretParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecretParameterResponse
     */
    public function deleteSecretParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecretParameter',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecretParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an encryption parameter. Make sure that you have the permissions to call the DeleteSecret operation before you call this operation.
     *
     * @param request - DeleteSecretParameterRequest
     *
     * @returns DeleteSecretParameterResponse
     *
     * @param DeleteSecretParameterRequest $request
     *
     * @return DeleteSecretParameterResponse
     */
    public function deleteSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretParameterWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple desired-state configurations at a time.
     *
     * @param request - DeleteStateConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStateConfigurationsResponse
     *
     * @param DeleteStateConfigurationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteStateConfigurationsResponse
     */
    public function deleteStateConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stateConfigurationIds) {
            @$query['StateConfigurationIds'] = $request->stateConfigurationIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStateConfigurations',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStateConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple desired-state configurations at a time.
     *
     * @param request - DeleteStateConfigurationsRequest
     *
     * @returns DeleteStateConfigurationsResponse
     *
     * @param DeleteStateConfigurationsRequest $request
     *
     * @return DeleteStateConfigurationsResponse
     */
    public function deleteStateConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStateConfigurationsWithOptions($request, $runtime);
    }

    /**
     * Deletes a template.
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
        if (null !== $request->autoDeleteExecutions) {
            @$query['AutoDeleteExecutions'] = $request->autoDeleteExecutions;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2019-06-01',
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
     * Deletes multiple templates.
     *
     * @param request - DeleteTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplatesResponse
     *
     * @param DeleteTemplatesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTemplatesResponse
     */
    public function deleteTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoDeleteExecutions) {
            @$query['AutoDeleteExecutions'] = $request->autoDeleteExecutions;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateNames) {
            @$query['TemplateNames'] = $request->templateNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplates',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple templates.
     *
     * @param request - DeleteTemplatesRequest
     *
     * @returns DeleteTemplatesResponse
     *
     * @param DeleteTemplatesRequest $request
     *
     * @return DeleteTemplatesResponse
     */
    public function deleteTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplatesWithOptions($request, $runtime);
    }

    /**
     * Deploys an application group. You can call this operation only for the applications which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - DeployApplicationGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployApplicationGroupResponse
     *
     * @param DeployApplicationGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeployApplicationGroupResponse
     */
    public function deployApplicationGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->deployParameters) {
            @$query['DeployParameters'] = $request->deployParameters;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->revisionId) {
            @$query['RevisionId'] = $request->revisionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployApplicationGroup',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys an application group. You can call this operation only for the applications which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - DeployApplicationGroupRequest
     *
     * @returns DeployApplicationGroupResponse
     *
     * @param DeployApplicationGroupRequest $request
     *
     * @return DeployApplicationGroupResponse
     */
    public function deployApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * 查询应用分组资源成本.
     *
     * @param request - DescribeApplicationGroupBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationGroupBillResponse
     *
     * @param DescribeApplicationGroupBillRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApplicationGroupBillResponse
     */
    public function describeApplicationGroupBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'DescribeApplicationGroupBill',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationGroupBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用分组资源成本.
     *
     * @param request - DescribeApplicationGroupBillRequest
     *
     * @returns DescribeApplicationGroupBillResponse
     *
     * @param DescribeApplicationGroupBillRequest $request
     *
     * @return DescribeApplicationGroupBillResponse
     */
    public function describeApplicationGroupBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationGroupBillWithOptions($request, $runtime);
    }

    /**
     * Queries supported regions.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-06-01',
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
     * Queries supported regions.
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
     * Queries the Resource Access Management (RAM) policy required for template execution.
     *
     * @param request - GenerateExecutionPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateExecutionPolicyResponse
     *
     * @param GenerateExecutionPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateExecutionPolicyResponse
     */
    public function generateExecutionPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ramRole) {
            @$query['RamRole'] = $request->ramRole;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateExecutionPolicy',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateExecutionPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Resource Access Management (RAM) policy required for template execution.
     *
     * @param request - GenerateExecutionPolicyRequest
     *
     * @returns GenerateExecutionPolicyResponse
     *
     * @param GenerateExecutionPolicyRequest $request
     *
     * @return GenerateExecutionPolicyResponse
     */
    public function generateExecutionPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateExecutionPolicyWithOptions($request, $runtime);
    }

    /**
     * Generates an O\\\\\\&M item.
     *
     * @param request - GenerateOpsItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateOpsItemResponse
     *
     * @param GenerateOpsItemRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GenerateOpsItemResponse
     */
    public function generateOpsItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configurationId) {
            @$query['ConfigurationId'] = $request->configurationId;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataSource) {
            @$query['DataSource'] = $request->dataSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateOpsItem',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateOpsItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates an O\\\\\\&M item.
     *
     * @param request - GenerateOpsItemRequest
     *
     * @returns GenerateOpsItemResponse
     *
     * @param GenerateOpsItemRequest $request
     *
     * @return GenerateOpsItemResponse
     */
    public function generateOpsItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateOpsItemWithOptions($request, $runtime);
    }

    /**
     * Queries the information of an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - GetApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplication',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - GetApplicationRequest
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - GetApplicationGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationGroupResponse
     *
     * @param GetApplicationGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetApplicationGroupResponse
     */
    public function getApplicationGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplicationGroup',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - GetApplicationGroupRequest
     *
     * @returns GetApplicationGroupResponse
     *
     * @param GetApplicationGroupRequest $request
     *
     * @return GetApplicationGroupResponse
     */
    public function getApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the template of an execution, including the content of the template.
     *
     * @param request - GetExecutionTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExecutionTemplateResponse
     *
     * @param GetExecutionTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetExecutionTemplateResponse
     */
    public function getExecutionTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExecutionTemplate',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExecutionTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the template of an execution, including the content of the template.
     *
     * @param request - GetExecutionTemplateRequest
     *
     * @returns GetExecutionTemplateResponse
     *
     * @param GetExecutionTemplateRequest $request
     *
     * @return GetExecutionTemplateResponse
     */
    public function getExecutionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecutionTemplateWithOptions($request, $runtime);
    }

    /**
     * 查询Git分支详情.
     *
     * @param request - GetGitBranchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGitBranchResponse
     *
     * @param GetGitBranchRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetGitBranchResponse
     */
    public function getGitBranchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branch) {
            @$query['Branch'] = $request->branch;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->repoFullName) {
            @$query['RepoFullName'] = $request->repoFullName;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGitBranch',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGitBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Git分支详情.
     *
     * @param request - GetGitBranchRequest
     *
     * @returns GetGitBranchResponse
     *
     * @param GetGitBranchRequest $request
     *
     * @return GetGitBranchResponse
     */
    public function getGitBranch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGitBranchWithOptions($request, $runtime);
    }

    /**
     * 查询Git仓库详情.
     *
     * @param request - GetGitRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGitRepositoryResponse
     *
     * @param GetGitRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetGitRepositoryResponse
     */
    public function getGitRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->repoFullName) {
            @$query['RepoFullName'] = $request->repoFullName;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGitRepository',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGitRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Git仓库详情.
     *
     * @param request - GetGitRepositoryRequest
     *
     * @returns GetGitRepositoryResponse
     *
     * @param GetGitRepositoryRequest $request
     *
     * @return GetGitRepositoryResponse
     */
    public function getGitRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGitRepositoryWithOptions($request, $runtime);
    }

    /**
     * Queries the properties of a configuration list.
     *
     * @param request - GetInventorySchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInventorySchemaResponse
     *
     * @param GetInventorySchemaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInventorySchemaResponse
     */
    public function getInventorySchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregator) {
            @$query['Aggregator'] = $request->aggregator;
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

        if (null !== $request->typeName) {
            @$query['TypeName'] = $request->typeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInventorySchema',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInventorySchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the properties of a configuration list.
     *
     * @param request - GetInventorySchemaRequest
     *
     * @returns GetInventorySchemaResponse
     *
     * @param GetInventorySchemaRequest $request
     *
     * @return GetInventorySchemaResponse
     */
    public function getInventorySchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInventorySchemaWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an O\\\\\\\\\\\\&M item.
     *
     * @param request - GetOpsItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOpsItemResponse
     *
     * @param GetOpsItemRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetOpsItemResponse
     */
    public function getOpsItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->opsItemId) {
            @$query['OpsItemId'] = $request->opsItemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOpsItem',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOpsItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an O\\\\\\\\\\\\&M item.
     *
     * @param request - GetOpsItemRequest
     *
     * @returns GetOpsItemResponse
     *
     * @param GetOpsItemRequest $request
     *
     * @return GetOpsItemResponse
     */
    public function getOpsItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpsItemWithOptions($request, $runtime);
    }

    /**
     * Queries a common parameter and its value.
     *
     * @param request - GetParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParameterResponse
     *
     * @param GetParameterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetParameterResponse
     */
    public function getParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parameterVersion) {
            @$query['ParameterVersion'] = $request->parameterVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetParameter',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a common parameter and its value.
     *
     * @param request - GetParameterRequest
     *
     * @returns GetParameterResponse
     *
     * @param GetParameterRequest $request
     *
     * @return GetParameterResponse
     */
    public function getParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParameterWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more parameters.
     *
     * @param request - GetParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParametersResponse
     *
     * @param GetParametersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetParametersResponse
     */
    public function getParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->names) {
            @$query['Names'] = $request->names;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetParameters',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more parameters.
     *
     * @param request - GetParametersRequest
     *
     * @returns GetParametersResponse
     *
     * @param GetParametersRequest $request
     *
     * @return GetParametersResponse
     */
    public function getParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParametersWithOptions($request, $runtime);
    }

    /**
     * Queries one or more parameters by path.
     *
     * @param request - GetParametersByPathRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParametersByPathResponse
     *
     * @param GetParametersByPathRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetParametersByPathResponse
     */
    public function getParametersByPathWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->recursive) {
            @$query['Recursive'] = $request->recursive;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetParametersByPath',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetParametersByPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more parameters by path.
     *
     * @param request - GetParametersByPathRequest
     *
     * @returns GetParametersByPathResponse
     *
     * @param GetParametersByPathRequest $request
     *
     * @return GetParametersByPathResponse
     */
    public function getParametersByPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParametersByPathWithOptions($request, $runtime);
    }

    /**
     * Queries the information of a patch baseline.
     *
     * @param request - GetPatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPatchBaselineResponse
     *
     * @param GetPatchBaselineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPatchBaselineResponse
     */
    public function getPatchBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPatchBaseline',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a patch baseline.
     *
     * @param request - GetPatchBaselineRequest
     *
     * @returns GetPatchBaselineResponse
     *
     * @param GetPatchBaselineRequest $request
     *
     * @return GetPatchBaselineResponse
     */
    public function getPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an encryption parameter, including the parameter value. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *
     * @param request - GetSecretParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretParameterResponse
     *
     * @param GetSecretParameterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSecretParameterResponse
     */
    public function getSecretParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parameterVersion) {
            @$query['ParameterVersion'] = $request->parameterVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->withDecryption) {
            @$query['WithDecryption'] = $request->withDecryption;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecretParameter',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecretParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an encryption parameter, including the parameter value. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *
     * @param request - GetSecretParameterRequest
     *
     * @returns GetSecretParameterResponse
     *
     * @param GetSecretParameterRequest $request
     *
     * @return GetSecretParameterResponse
     */
    public function getSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParameterWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more encryption parameters. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *
     * @param request - GetSecretParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretParametersResponse
     *
     * @param GetSecretParametersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSecretParametersResponse
     */
    public function getSecretParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->names) {
            @$query['Names'] = $request->names;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->withDecryption) {
            @$query['WithDecryption'] = $request->withDecryption;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecretParameters',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecretParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more encryption parameters. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *
     * @param request - GetSecretParametersRequest
     *
     * @returns GetSecretParametersResponse
     *
     * @param GetSecretParametersRequest $request
     *
     * @return GetSecretParametersResponse
     */
    public function getSecretParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParametersWithOptions($request, $runtime);
    }

    /**
     * Queries encryption parameters by path. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *
     * @param request - GetSecretParametersByPathRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretParametersByPathResponse
     *
     * @param GetSecretParametersByPathRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSecretParametersByPathResponse
     */
    public function getSecretParametersByPathWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->recursive) {
            @$query['Recursive'] = $request->recursive;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->withDecryption) {
            @$query['WithDecryption'] = $request->withDecryption;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecretParametersByPath',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecretParametersByPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries encryption parameters by path. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *
     * @param request - GetSecretParametersByPathRequest
     *
     * @returns GetSecretParametersByPathResponse
     *
     * @param GetSecretParametersByPathRequest $request
     *
     * @return GetSecretParametersByPathResponse
     */
    public function getSecretParametersByPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParametersByPathWithOptions($request, $runtime);
    }

    /**
     * Queries the settings of the delivery feature.
     *
     * @param request - GetServiceSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceSettingsResponse
     *
     * @param GetServiceSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceSettingsResponse
     */
    public function getServiceSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceSettings',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the settings of the delivery feature.
     *
     * @param request - GetServiceSettingsRequest
     *
     * @returns GetServiceSettingsResponse
     *
     * @param GetServiceSettingsRequest $request
     *
     * @return GetServiceSettingsResponse
     */
    public function getServiceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceSettingsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a template, including the content of the template.
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2019-06-01',
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
     * Queries the information about a template, including the content of the template.
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
     * 获取参数可用值
     *
     * @param request - GetTemplateParameterConstraintsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateParameterConstraintsResponse
     *
     * @param GetTemplateParameterConstraintsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetTemplateParameterConstraintsResponse
     */
    public function getTemplateParameterConstraintsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
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
            'action' => 'GetTemplateParameterConstraints',
            'version' => '2019-06-01',
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
     * 获取参数可用值
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
     * Queries the available actions, including atomic actions and cloud product actions.
     *
     * @param request - ListActionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListActionsResponse
     *
     * @param ListActionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListActionsResponse
     */
    public function listActionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->OOSActionName) {
            @$query['OOSActionName'] = $request->OOSActionName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListActions',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available actions, including atomic actions and cloud product actions.
     *
     * @param request - ListActionsRequest
     *
     * @returns ListActionsResponse
     *
     * @param ListActionsRequest $request
     *
     * @return ListActionsResponse
     */
    public function listActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of application groups. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - ListApplicationGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationGroupsResponse
     *
     * @param ListApplicationGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListApplicationGroupsResponse
     */
    public function listApplicationGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->deployRegionId) {
            @$query['DeployRegionId'] = $request->deployRegionId;
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

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceProduct) {
            @$query['ResourceProduct'] = $request->resourceProduct;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationGroups',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of application groups. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - ListApplicationGroupsRequest
     *
     * @returns ListApplicationGroupsResponse
     *
     * @param ListApplicationGroupsRequest $request
     *
     * @return ListApplicationGroupsResponse
     */
    public function listApplicationGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of applications. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param tmpReq - ListApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListApplicationsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->applicationType) {
            @$query['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->names) {
            @$query['Names'] = $request->names;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplications',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of applications. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - ListApplicationsRequest
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of an execution.
     *
     * @remarks
     *
     * @param request - ListExecutionLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExecutionLogsResponse
     *
     * @param ListExecutionLogsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListExecutionLogsResponse
     */
    public function listExecutionLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
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

        if (null !== $request->taskExecutionId) {
            @$query['TaskExecutionId'] = $request->taskExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExecutionLogs',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExecutionLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of an execution.
     *
     * @remarks
     *
     * @param request - ListExecutionLogsRequest
     *
     * @returns ListExecutionLogsResponse
     *
     * @param ListExecutionLogsRequest $request
     *
     * @return ListExecutionLogsResponse
     */
    public function listExecutionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionLogsWithOptions($request, $runtime);
    }

    /**
     * Queries high-risk tasks in the execution of a template.
     *
     * @param request - ListExecutionRiskyTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExecutionRiskyTasksResponse
     *
     * @param ListExecutionRiskyTasksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListExecutionRiskyTasksResponse
     */
    public function listExecutionRiskyTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExecutionRiskyTasks',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExecutionRiskyTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries high-risk tasks in the execution of a template.
     *
     * @param request - ListExecutionRiskyTasksRequest
     *
     * @returns ListExecutionRiskyTasksResponse
     *
     * @param ListExecutionRiskyTasksRequest $request
     *
     * @return ListExecutionRiskyTasksResponse
     */
    public function listExecutionRiskyTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionRiskyTasksWithOptions($request, $runtime);
    }

    /**
     * Queries executions. Multiple methods are supported to filter executions.
     *
     * @param tmpReq - ListExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExecutionsResponse
     *
     * @param ListExecutionsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListExecutionsResponse
     */
    public function listExecutionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListExecutionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->categories) {
            @$query['Categories'] = $request->categories;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->depth) {
            @$query['Depth'] = $request->depth;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->endDateAfter) {
            @$query['EndDateAfter'] = $request->endDateAfter;
        }

        if (null !== $request->endDateBefore) {
            @$query['EndDateBefore'] = $request->endDateBefore;
        }

        if (null !== $request->executedBy) {
            @$query['ExecutedBy'] = $request->executedBy;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->includeChildExecution) {
            @$query['IncludeChildExecution'] = $request->includeChildExecution;
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

        if (null !== $request->parentExecutionId) {
            @$query['ParentExecutionId'] = $request->parentExecutionId;
        }

        if (null !== $request->ramRole) {
            @$query['RamRole'] = $request->ramRole;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceTemplateName) {
            @$query['ResourceTemplateName'] = $request->resourceTemplateName;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startDateAfter) {
            @$query['StartDateAfter'] = $request->startDateAfter;
        }

        if (null !== $request->startDateBefore) {
            @$query['StartDateBefore'] = $request->startDateBefore;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExecutions',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries executions. Multiple methods are supported to filter executions.
     *
     * @param request - ListExecutionsRequest
     *
     * @returns ListExecutionsResponse
     *
     * @param ListExecutionsRequest $request
     *
     * @return ListExecutionsResponse
     */
    public function listExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionsWithOptions($request, $runtime);
    }

    /**
     * 获取当前阿里云用户已授权在应用管理的托管平台账户.
     *
     * @param request - ListGitAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGitAccountsResponse
     *
     * @param ListGitAccountsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListGitAccountsResponse
     */
    public function listGitAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGitAccounts',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGitAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取当前阿里云用户已授权在应用管理的托管平台账户.
     *
     * @param request - ListGitAccountsRequest
     *
     * @returns ListGitAccountsResponse
     *
     * @param ListGitAccountsRequest $request
     *
     * @return ListGitAccountsResponse
     */
    public function listGitAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGitAccountsWithOptions($request, $runtime);
    }

    /**
     * 获取指定Git仓库的所有分支.
     *
     * @param request - ListGitBranchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGitBranchesResponse
     *
     * @param ListGitBranchesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListGitBranchesResponse
     */
    public function listGitBranchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->repoFullName) {
            @$query['RepoFullName'] = $request->repoFullName;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGitBranches',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGitBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定Git仓库的所有分支.
     *
     * @param request - ListGitBranchesRequest
     *
     * @returns ListGitBranchesResponse
     *
     * @param ListGitBranchesRequest $request
     *
     * @return ListGitBranchesResponse
     */
    public function listGitBranches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGitBranchesWithOptions($request, $runtime);
    }

    /**
     * 获取已授权用户的组织.
     *
     * @param request - ListGitOrganizationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGitOrganizationsResponse
     *
     * @param ListGitOrganizationsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListGitOrganizationsResponse
     */
    public function listGitOrganizationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGitOrganizations',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGitOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取已授权用户的组织.
     *
     * @param request - ListGitOrganizationsRequest
     *
     * @returns ListGitOrganizationsResponse
     *
     * @param ListGitOrganizationsRequest $request
     *
     * @return ListGitOrganizationsResponse
     */
    public function listGitOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGitOrganizationsWithOptions($request, $runtime);
    }

    /**
     * 查询Git仓库列表.
     *
     * @param request - ListGitRepositoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGitRepositoriesResponse
     *
     * @param ListGitRepositoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListGitRepositoriesResponse
     */
    public function listGitRepositoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$query['OrgName'] = $request->orgName;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGitRepositories',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGitRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Git仓库列表.
     *
     * @param request - ListGitRepositoriesRequest
     *
     * @returns ListGitRepositoriesResponse
     *
     * @param ListGitRepositoriesRequest $request
     *
     * @return ListGitRepositoriesResponse
     */
    public function listGitRepositories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGitRepositoriesWithOptions($request, $runtime);
    }

    /**
     * 获取仓库文件与目录信息.
     *
     * @param request - ListGitRepositoryContentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGitRepositoryContentsResponse
     *
     * @param ListGitRepositoryContentsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListGitRepositoryContentsResponse
     */
    public function listGitRepositoryContentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->branch) {
            @$query['Branch'] = $request->branch;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->repoFullName) {
            @$query['RepoFullName'] = $request->repoFullName;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGitRepositoryContents',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGitRepositoryContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取仓库文件与目录信息.
     *
     * @param request - ListGitRepositoryContentsRequest
     *
     * @returns ListGitRepositoryContentsResponse
     *
     * @param ListGitRepositoryContentsRequest $request
     *
     * @return ListGitRepositoryContentsResponse
     */
    public function listGitRepositoryContents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGitRepositoryContentsWithOptions($request, $runtime);
    }

    /**
     * List Instance Package States.
     *
     * @param request - ListInstancePackageStatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancePackageStatesResponse
     *
     * @param ListInstancePackageStatesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListInstancePackageStatesResponse
     */
    public function listInstancePackageStatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->templateNames) {
            @$query['TemplateNames'] = $request->templateNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstancePackageStates',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancePackageStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List Instance Package States.
     *
     * @param request - ListInstancePackageStatesRequest
     *
     * @returns ListInstancePackageStatesResponse
     *
     * @param ListInstancePackageStatesRequest $request
     *
     * @return ListInstancePackageStatesResponse
     */
    public function listInstancePackageStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancePackageStatesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the patches of an instance.
     *
     * @param request - ListInstancePatchStatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancePatchStatesResponse
     *
     * @param ListInstancePatchStatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListInstancePatchStatesResponse
     */
    public function listInstancePatchStatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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
            'action' => 'ListInstancePatchStates',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancePatchStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the patches of an instance.
     *
     * @param request - ListInstancePatchStatesRequest
     *
     * @returns ListInstancePatchStatesResponse
     *
     * @param ListInstancePatchStatesRequest $request
     *
     * @return ListInstancePatchStatesResponse
     */
    public function listInstancePatchStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancePatchStatesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the patches of an instance.
     *
     * @param request - ListInstancePatchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancePatchesResponse
     *
     * @param ListInstancePatchesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstancePatchesResponse
     */
    public function listInstancePatchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->patchStatuses) {
            @$query['PatchStatuses'] = $request->patchStatuses;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstancePatches',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancePatchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the patches of an instance.
     *
     * @param request - ListInstancePatchesRequest
     *
     * @returns ListInstancePatchesResponse
     *
     * @param ListInstancePatchesRequest $request
     *
     * @return ListInstancePatchesResponse
     */
    public function listInstancePatches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancePatchesWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an Elastic Compute Service (ECS) instance.
     *
     * @param request - ListInventoryEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInventoryEntriesResponse
     *
     * @param ListInventoryEntriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInventoryEntriesResponse
     */
    public function listInventoryEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->typeName) {
            @$query['TypeName'] = $request->typeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInventoryEntries',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInventoryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an Elastic Compute Service (ECS) instance.
     *
     * @param request - ListInventoryEntriesRequest
     *
     * @returns ListInventoryEntriesResponse
     *
     * @param ListInventoryEntriesRequest $request
     *
     * @return ListInventoryEntriesResponse
     */
    public function listInventoryEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInventoryEntriesWithOptions($request, $runtime);
    }

    /**
     * Queries O\\&M items.
     *
     * @param tmpReq - ListOpsItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOpsItemsResponse
     *
     * @param ListOpsItemsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListOpsItemsResponse
     */
    public function listOpsItemsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListOpsItemsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceTags) {
            $request->resourceTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceTags, 'ResourceTags', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

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

        if (null !== $request->resourceTagsShrink) {
            @$query['ResourceTags'] = $request->resourceTagsShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOpsItems',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOpsItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries O\\&M items.
     *
     * @param request - ListOpsItemsRequest
     *
     * @returns ListOpsItemsResponse
     *
     * @param ListOpsItemsRequest $request
     *
     * @return ListOpsItemsResponse
     */
    public function listOpsItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpsItemsWithOptions($request, $runtime);
    }

    /**
     * Queries the versions of a common parameter.
     *
     * @param request - ListParameterVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListParameterVersionsResponse
     *
     * @param ListParameterVersionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListParameterVersionsResponse
     */
    public function listParameterVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListParameterVersions',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListParameterVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the versions of a common parameter.
     *
     * @param request - ListParameterVersionsRequest
     *
     * @returns ListParameterVersionsResponse
     *
     * @param ListParameterVersionsRequest $request
     *
     * @return ListParameterVersionsResponse
     */
    public function listParameterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParameterVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries common parameters. Multiple methods are supported to filter common parameters.
     *
     * @param tmpReq - ListParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListParametersResponse
     *
     * @param ListParametersRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListParametersResponse
     */
    public function listParametersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListParametersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->recursive) {
            @$query['Recursive'] = $request->recursive;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListParameters',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries common parameters. Multiple methods are supported to filter common parameters.
     *
     * @param request - ListParametersRequest
     *
     * @returns ListParametersResponse
     *
     * @param ListParametersRequest $request
     *
     * @return ListParametersResponse
     */
    public function listParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParametersWithOptions($request, $runtime);
    }

    /**
     * Queries a list of patch baselines.
     *
     * @param tmpReq - ListPatchBaselinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPatchBaselinesResponse
     *
     * @param ListPatchBaselinesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListPatchBaselinesResponse
     */
    public function listPatchBaselinesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPatchBaselinesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->approvedPatches) {
            $request->approvedPatchesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->approvedPatches, 'ApprovedPatches', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->approvedPatchesShrink) {
            @$query['ApprovedPatches'] = $request->approvedPatchesShrink;
        }

        if (null !== $request->approvedPatchesEnableNonSecurity) {
            @$query['ApprovedPatchesEnableNonSecurity'] = $request->approvedPatchesEnableNonSecurity;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->operationSystem) {
            @$query['OperationSystem'] = $request->operationSystem;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->sourcesShrink) {
            @$query['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPatchBaselines',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPatchBaselinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of patch baselines.
     *
     * @param request - ListPatchBaselinesRequest
     *
     * @returns ListPatchBaselinesResponse
     *
     * @param ListPatchBaselinesRequest $request
     *
     * @return ListPatchBaselinesResponse
     */
    public function listPatchBaselines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPatchBaselinesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a scheduled execution that involves O&M operations on Elastic Compute Service (ECS) instances.
     *
     * @param request - ListResourceExecutionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceExecutionStatusResponse
     *
     * @param ListResourceExecutionStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListResourceExecutionStatusResponse
     */
    public function listResourceExecutionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
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
            'action' => 'ListResourceExecutionStatus',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceExecutionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a scheduled execution that involves O&M operations on Elastic Compute Service (ECS) instances.
     *
     * @param request - ListResourceExecutionStatusRequest
     *
     * @returns ListResourceExecutionStatusResponse
     *
     * @param ListResourceExecutionStatusRequest $request
     *
     * @return ListResourceExecutionStatusResponse
     */
    public function listResourceExecutionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceExecutionStatusWithOptions($request, $runtime);
    }

    /**
     * Queries versions of an encryption parameter.
     *
     * @param request - ListSecretParameterVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretParameterVersionsResponse
     *
     * @param ListSecretParameterVersionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListSecretParameterVersionsResponse
     */
    public function listSecretParameterVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->withDecryption) {
            @$query['WithDecryption'] = $request->withDecryption;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecretParameterVersions',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecretParameterVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries versions of an encryption parameter.
     *
     * @param request - ListSecretParameterVersionsRequest
     *
     * @returns ListSecretParameterVersionsResponse
     *
     * @param ListSecretParameterVersionsRequest $request
     *
     * @return ListSecretParameterVersionsResponse
     */
    public function listSecretParameterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretParameterVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries common parameters. Multiple types of queries are supported.
     *
     * @remarks
     * Before you call this operation, make sure that you have the permission to manage Key Management Service (KMS) secrets.
     *
     * @param tmpReq - ListSecretParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretParametersResponse
     *
     * @param ListSecretParametersRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretParametersResponse
     */
    public function listSecretParametersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListSecretParametersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->recursive) {
            @$query['Recursive'] = $request->recursive;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecretParameters',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecretParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries common parameters. Multiple types of queries are supported.
     *
     * @remarks
     * Before you call this operation, make sure that you have the permission to manage Key Management Service (KMS) secrets.
     *
     * @param request - ListSecretParametersRequest
     *
     * @returns ListSecretParametersResponse
     *
     * @param ListSecretParametersRequest $request
     *
     * @return ListSecretParametersResponse
     */
    public function listSecretParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretParametersWithOptions($request, $runtime);
    }

    /**
     * Queries desired-state configurations.
     *
     * @param tmpReq - ListStateConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStateConfigurationsResponse
     *
     * @param ListStateConfigurationsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStateConfigurationsResponse
     */
    public function listStateConfigurationsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListStateConfigurationsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->stateConfigurationIds) {
            @$query['StateConfigurationIds'] = $request->stateConfigurationIds;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStateConfigurations',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStateConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries desired-state configurations.
     *
     * @param request - ListStateConfigurationsRequest
     *
     * @returns ListStateConfigurationsResponse
     *
     * @param ListStateConfigurationsRequest $request
     *
     * @return ListStateConfigurationsResponse
     */
    public function listStateConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStateConfigurationsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags.
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
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
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
            'action' => 'ListTagKeys',
            'version' => '2019-06-01',
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
     * Queries the tags.
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
     * Queries the tags that are added to one or more resources.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['ResourceIds'] = $request->resourceIdsShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2019-06-01',
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
     * Queries the tags that are added to one or more resources.
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
     * Queries the values of created tags.
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

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
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
            'version' => '2019-06-01',
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
     * Queries the values of created tags.
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
     * Queries task executions. Multiple methods are supported to filter task executions.
     *
     * @param request - ListTaskExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTaskExecutionsResponse
     *
     * @param ListTaskExecutionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListTaskExecutionsResponse
     */
    public function listTaskExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDateAfter) {
            @$query['EndDateAfter'] = $request->endDateAfter;
        }

        if (null !== $request->endDateBefore) {
            @$query['EndDateBefore'] = $request->endDateBefore;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->includeChildTaskExecution) {
            @$query['IncludeChildTaskExecution'] = $request->includeChildTaskExecution;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentTaskExecutionId) {
            @$query['ParentTaskExecutionId'] = $request->parentTaskExecutionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startDateAfter) {
            @$query['StartDateAfter'] = $request->startDateAfter;
        }

        if (null !== $request->startDateBefore) {
            @$query['StartDateBefore'] = $request->startDateBefore;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskAction) {
            @$query['TaskAction'] = $request->taskAction;
        }

        if (null !== $request->taskExecutionId) {
            @$query['TaskExecutionId'] = $request->taskExecutionId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTaskExecutions',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTaskExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries task executions. Multiple methods are supported to filter task executions.
     *
     * @param request - ListTaskExecutionsRequest
     *
     * @returns ListTaskExecutionsResponse
     *
     * @param ListTaskExecutionsRequest $request
     *
     * @return ListTaskExecutionsResponse
     */
    public function listTaskExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskExecutionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of versions of a template.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplateVersions',
            'version' => '2019-06-01',
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
     * Queries a list of versions of a template.
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
     * Queries templates. Multiple methods are supported to filter templates.
     *
     * @param tmpReq - ListTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->createdBy) {
            @$query['CreatedBy'] = $request->createdBy;
        }

        if (null !== $request->createdDateAfter) {
            @$query['CreatedDateAfter'] = $request->createdDateAfter;
        }

        if (null !== $request->createdDateBefore) {
            @$query['CreatedDateBefore'] = $request->createdDateBefore;
        }

        if (null !== $request->hasTrigger) {
            @$query['HasTrigger'] = $request->hasTrigger;
        }

        if (null !== $request->isExample) {
            @$query['IsExample'] = $request->isExample;
        }

        if (null !== $request->isFavorite) {
            @$query['IsFavorite'] = $request->isFavorite;
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

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateFormat) {
            @$query['TemplateFormat'] = $request->templateFormat;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplates',
            'version' => '2019-06-01',
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
     * Queries templates. Multiple methods are supported to filter templates.
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
     * Notifies an execution in the Waiting state of the subsequent operations.
     *
     * @remarks
     * You can call this operation to notify an execution in the following scenarios:
     * *   If a template contains a special task, such as an approval task, the Operation Orchestration Service (OOS) execution engine sets the execution state to Waiting when the approval task is being run. You can call this operation to specify whether to continue the execution.
     * *   If you perform debugging in the debug mode, you can call this operation to notify the execution of the subsequent operations after the execution is created or a task is complete.
     * *   If a high-risk operation task waits for approval, you can call this operation to specify whether to continue the execution.
     *
     * @param request - NotifyExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NotifyExecutionResponse
     *
     * @param NotifyExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return NotifyExecutionResponse
     */
    public function notifyExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->executionStatus) {
            @$query['ExecutionStatus'] = $request->executionStatus;
        }

        if (null !== $request->loopItem) {
            @$query['LoopItem'] = $request->loopItem;
        }

        if (null !== $request->notifyNote) {
            @$query['NotifyNote'] = $request->notifyNote;
        }

        if (null !== $request->notifyType) {
            @$query['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskExecutionId) {
            @$query['TaskExecutionId'] = $request->taskExecutionId;
        }

        if (null !== $request->taskExecutionIds) {
            @$query['TaskExecutionIds'] = $request->taskExecutionIds;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'NotifyExecution',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NotifyExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Notifies an execution in the Waiting state of the subsequent operations.
     *
     * @remarks
     * You can call this operation to notify an execution in the following scenarios:
     * *   If a template contains a special task, such as an approval task, the Operation Orchestration Service (OOS) execution engine sets the execution state to Waiting when the approval task is being run. You can call this operation to specify whether to continue the execution.
     * *   If you perform debugging in the debug mode, you can call this operation to notify the execution of the subsequent operations after the execution is created or a task is complete.
     * *   If a high-risk operation task waits for approval, you can call this operation to specify whether to continue the execution.
     *
     * @param request - NotifyExecutionRequest
     *
     * @returns NotifyExecutionResponse
     *
     * @param NotifyExecutionRequest $request
     *
     * @return NotifyExecutionResponse
     */
    public function notifyExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyExecutionWithOptions($request, $runtime);
    }

    /**
     * Registers the default patch baseline.
     *
     * @param request - RegisterDefaultPatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterDefaultPatchBaselineResponse
     *
     * @param RegisterDefaultPatchBaselineRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RegisterDefaultPatchBaselineResponse
     */
    public function registerDefaultPatchBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterDefaultPatchBaseline',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterDefaultPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers the default patch baseline.
     *
     * @param request - RegisterDefaultPatchBaselineRequest
     *
     * @returns RegisterDefaultPatchBaselineResponse
     *
     * @param RegisterDefaultPatchBaselineRequest $request
     *
     * @return RegisterDefaultPatchBaselineResponse
     */
    public function registerDefaultPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDefaultPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * Queries the details or aggregate information of a configuration inventory.
     *
     * @param request - SearchInventoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchInventoryResponse
     *
     * @param SearchInventoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SearchInventoryResponse
     */
    public function searchInventoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregator) {
            @$query['Aggregator'] = $request->aggregator;
        }

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
            'action' => 'SearchInventory',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details or aggregate information of a configuration inventory.
     *
     * @param request - SearchInventoryRequest
     *
     * @returns SearchInventoryResponse
     *
     * @param SearchInventoryRequest $request
     *
     * @return SearchInventoryResponse
     */
    public function searchInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchInventoryWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the feature of delivering template execution records and sets the storage location.
     *
     * @param request - SetServiceSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetServiceSettingsResponse
     *
     * @param SetServiceSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetServiceSettingsResponse
     */
    public function setServiceSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryOssBucketName) {
            @$query['DeliveryOssBucketName'] = $request->deliveryOssBucketName;
        }

        if (null !== $request->deliveryOssEnabled) {
            @$query['DeliveryOssEnabled'] = $request->deliveryOssEnabled;
        }

        if (null !== $request->deliveryOssKeyPrefix) {
            @$query['DeliveryOssKeyPrefix'] = $request->deliveryOssKeyPrefix;
        }

        if (null !== $request->deliverySlsEnabled) {
            @$query['DeliverySlsEnabled'] = $request->deliverySlsEnabled;
        }

        if (null !== $request->deliverySlsProjectName) {
            @$query['DeliverySlsProjectName'] = $request->deliverySlsProjectName;
        }

        if (null !== $request->rdcEnterpriseId) {
            @$query['RdcEnterpriseId'] = $request->rdcEnterpriseId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetServiceSettings',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetServiceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the feature of delivering template execution records and sets the storage location.
     *
     * @param request - SetServiceSettingsRequest
     *
     * @returns SetServiceSettingsResponse
     *
     * @param SetServiceSettingsRequest $request
     *
     * @return SetServiceSettingsResponse
     */
    public function setServiceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setServiceSettingsWithOptions($request, $runtime);
    }

    /**
     * Starts an execution.
     *
     * @param tmpReq - StartExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartExecutionResponse
     *
     * @param StartExecutionRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StartExecutionResponse
     */
    public function startExecutionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartExecutionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->loopMode) {
            @$query['LoopMode'] = $request->loopMode;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->parentExecutionId) {
            @$query['ParentExecutionId'] = $request->parentExecutionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->safetyCheck) {
            @$query['SafetyCheck'] = $request->safetyCheck;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
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
            'action' => 'StartExecution',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an execution.
     *
     * @param request - StartExecutionRequest
     *
     * @returns StartExecutionResponse
     *
     * @param StartExecutionRequest $request
     *
     * @return StartExecutionResponse
     */
    public function startExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startExecutionWithOptions($request, $runtime);
    }

    /**
     * Adds tags to one or more resources.
     *
     * @param tmpReq - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['ResourceIds'] = $request->resourceIdsShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2019-06-01',
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
     * Adds tags to one or more resources.
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
     * Debugs a started execution that contains an event trigger task or alert trigger task. If the operation is called, a message body is sent to the event trigger task or alert trigger task. After the trigger task receives the message body, the trigger task generates a new child execution.
     *
     * @param request - TriggerExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerExecutionResponse
     *
     * @param TriggerExecutionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TriggerExecutionResponse
     */
    public function triggerExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TriggerExecution',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TriggerExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Debugs a started execution that contains an event trigger task or alert trigger task. If the operation is called, a message body is sent to the event trigger task or alert trigger task. After the trigger task receives the message body, the trigger task generates a new child execution.
     *
     * @param request - TriggerExecutionRequest
     *
     * @returns TriggerExecutionResponse
     *
     * @param TriggerExecutionRequest $request
     *
     * @return TriggerExecutionResponse
     */
    public function triggerExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerExecutionWithOptions($request, $runtime);
    }

    /**
     * Removes tags from one or more resources.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }

        if (null !== $tmpReq->tagKeys) {
            $request->tagKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'TagKeys', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['ResourceIds'] = $request->resourceIdsShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeysShrink) {
            @$query['TagKeys'] = $request->tagKeysShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2019-06-01',
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
     * Removes tags from one or more resources.
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
     * Updates an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param tmpReq - UpdateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationResponse
     *
     * @param UpdateApplicationRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->alarmConfig) {
            $request->alarmConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alarmConfig, 'AlarmConfig', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->alarmConfigShrink) {
            @$query['AlarmConfig'] = $request->alarmConfigShrink;
        }

        if (null !== $request->deleteAlarmRulesBeforeUpdate) {
            @$query['DeleteAlarmRulesBeforeUpdate'] = $request->deleteAlarmRulesBeforeUpdate;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplication',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - UpdateApplicationRequest
     *
     * @returns UpdateApplicationResponse
     *
     * @param UpdateApplicationRequest $request
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationWithOptions($request, $runtime);
    }

    /**
     * Updates the information of an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param tmpReq - UpdateApplicationGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationGroupResponse
     *
     * @param UpdateApplicationGroupRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateApplicationGroupResponse
     */
    public function updateApplicationGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateApplicationGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->deployedRevisionId) {
            @$query['DeployedRevisionId'] = $request->deployedRevisionId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->newName) {
            @$query['NewName'] = $request->newName;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationGroup',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *
     * @param request - UpdateApplicationGroupRequest
     *
     * @returns UpdateApplicationGroupResponse
     *
     * @param UpdateApplicationGroupRequest $request
     *
     * @return UpdateApplicationGroupResponse
     */
    public function updateApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * Update executions that are in Running or Waiting status.
     *
     * @param request - UpdateExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExecutionResponse
     *
     * @param UpdateExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateExecutionResponse
     */
    public function updateExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateExecution',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update executions that are in Running or Waiting status.
     *
     * @param request - UpdateExecutionRequest
     *
     * @returns UpdateExecutionResponse
     *
     * @param UpdateExecutionRequest $request
     *
     * @return UpdateExecutionResponse
     */
    public function updateExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExecutionWithOptions($request, $runtime);
    }

    /**
     * Updates the installed extensions of an instance.
     *
     * @param tmpReq - UpdateInstancePackageStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstancePackageStateResponse
     *
     * @param UpdateInstancePackageStateRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateInstancePackageStateResponse
     */
    public function updateInstancePackageStateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateInstancePackageStateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->configurationInfo) {
            @$query['ConfigurationInfo'] = $request->configurationInfo;
        }

        if (null !== $request->configureAction) {
            @$query['ConfigureAction'] = $request->configureAction;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstancePackageState',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstancePackageStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the installed extensions of an instance.
     *
     * @param request - UpdateInstancePackageStateRequest
     *
     * @returns UpdateInstancePackageStateResponse
     *
     * @param UpdateInstancePackageStateRequest $request
     *
     * @return UpdateInstancePackageStateResponse
     */
    public function updateInstancePackageState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstancePackageStateWithOptions($request, $runtime);
    }

    /**
     * Modifies an O\\\\\\\\\\\\&M item.
     *
     * @param tmpReq - UpdateOpsItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOpsItemResponse
     *
     * @param UpdateOpsItemRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateOpsItemResponse
     */
    public function updateOpsItemWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateOpsItemShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dedupString) {
            @$query['DedupString'] = $request->dedupString;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->opsItemId) {
            @$query['OpsItemId'] = $request->opsItemId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        if (null !== $request->solutions) {
            @$query['Solutions'] = $request->solutions;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOpsItem',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOpsItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an O\\\\\\\\\\\\&M item.
     *
     * @param request - UpdateOpsItemRequest
     *
     * @returns UpdateOpsItemResponse
     *
     * @param UpdateOpsItemRequest $request
     *
     * @return UpdateOpsItemResponse
     */
    public function updateOpsItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOpsItemWithOptions($request, $runtime);
    }

    /**
     * Updates a common parameter.
     *
     * @param request - UpdateParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateParameterResponse
     *
     * @param UpdateParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateParameterResponse
     */
    public function updateParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateParameter',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a common parameter.
     *
     * @param request - UpdateParameterRequest
     *
     * @returns UpdateParameterResponse
     *
     * @param UpdateParameterRequest $request
     *
     * @return UpdateParameterResponse
     */
    public function updateParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateParameterWithOptions($request, $runtime);
    }

    /**
     * Updates a patch baseline.
     *
     * @param tmpReq - UpdatePatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePatchBaselineResponse
     *
     * @param UpdatePatchBaselineRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePatchBaselineResponse
     */
    public function updatePatchBaselineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePatchBaselineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->approvedPatches) {
            $request->approvedPatchesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->approvedPatches, 'ApprovedPatches', 'json');
        }

        if (null !== $tmpReq->rejectedPatches) {
            $request->rejectedPatchesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rejectedPatches, 'RejectedPatches', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->approvalRules) {
            @$query['ApprovalRules'] = $request->approvalRules;
        }

        if (null !== $request->approvedPatchesShrink) {
            @$query['ApprovedPatches'] = $request->approvedPatchesShrink;
        }

        if (null !== $request->approvedPatchesEnableNonSecurity) {
            @$query['ApprovedPatchesEnableNonSecurity'] = $request->approvedPatchesEnableNonSecurity;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rejectedPatchesShrink) {
            @$query['RejectedPatches'] = $request->rejectedPatchesShrink;
        }

        if (null !== $request->rejectedPatchesAction) {
            @$query['RejectedPatchesAction'] = $request->rejectedPatchesAction;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourcesShrink) {
            @$query['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePatchBaseline',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a patch baseline.
     *
     * @param request - UpdatePatchBaselineRequest
     *
     * @returns UpdatePatchBaselineResponse
     *
     * @param UpdatePatchBaselineRequest $request
     *
     * @return UpdatePatchBaselineResponse
     */
    public function updatePatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePatchBaselineWithOptions($request, $runtime);
    }

    /**
     * Updates an encryption parameter.
     *
     * @param tmpReq - UpdateSecretParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecretParameterResponse
     *
     * @param UpdateSecretParameterRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSecretParameterResponse
     */
    public function updateSecretParameterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSecretParameterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSecretParameter',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSecretParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an encryption parameter.
     *
     * @param request - UpdateSecretParameterRequest
     *
     * @returns UpdateSecretParameterResponse
     *
     * @param UpdateSecretParameterRequest $request
     *
     * @return UpdateSecretParameterResponse
     */
    public function updateSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretParameterWithOptions($request, $runtime);
    }

    /**
     * Updates a desired-state configuration.
     *
     * @param tmpReq - UpdateStateConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStateConfigurationResponse
     *
     * @param UpdateStateConfigurationRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateStateConfigurationResponse
     */
    public function updateStateConfigurationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateStateConfigurationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configureMode) {
            @$query['ConfigureMode'] = $request->configureMode;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scheduleExpression) {
            @$query['ScheduleExpression'] = $request->scheduleExpression;
        }

        if (null !== $request->scheduleType) {
            @$query['ScheduleType'] = $request->scheduleType;
        }

        if (null !== $request->stateConfigurationId) {
            @$query['StateConfigurationId'] = $request->stateConfigurationId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateStateConfiguration',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateStateConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a desired-state configuration.
     *
     * @param request - UpdateStateConfigurationRequest
     *
     * @returns UpdateStateConfigurationResponse
     *
     * @param UpdateStateConfigurationRequest $request
     *
     * @return UpdateStateConfigurationResponse
     */
    public function updateStateConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStateConfigurationWithOptions($request, $runtime);
    }

    /**
     * Updates the information about an existing template.
     *
     * @param tmpReq - UpdateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateResponse
     *
     * @param UpdateTemplateRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2019-06-01',
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
     * Updates the information about an existing template.
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
     * Check whether a template is valid.
     *
     * @param request - ValidateTemplateContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateTemplateContentResponse
     *
     * @param ValidateTemplateContentRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ValidateTemplateContentResponse
     */
    public function validateTemplateContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateURL) {
            @$query['TemplateURL'] = $request->templateURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateTemplateContent',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateTemplateContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check whether a template is valid.
     *
     * @param request - ValidateTemplateContentRequest
     *
     * @returns ValidateTemplateContentResponse
     *
     * @param ValidateTemplateContentRequest $request
     *
     * @return ValidateTemplateContentResponse
     */
    public function validateTemplateContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTemplateContentWithOptions($request, $runtime);
    }
}
