<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Oos\V20190601\Models\CancelExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CancelExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ContinueDeployApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ContinueDeployApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationShrinkRequest;
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
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationGroupRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationGroupResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetExecutionTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetExecutionTemplateResponse;
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
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoriesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoriesResponse;
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
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateExecutionResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Cancels an execution.
     *  *
     * @param CancelExecutionRequest $request CancelExecutionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelExecutionResponse CancelExecutionResponse
     */
    public function cancelExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelExecution',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels an execution.
     *  *
     * @param CancelExecutionRequest $request CancelExecutionRequest
     *
     * @return CancelExecutionResponse CancelExecutionResponse
     */
    public function cancelExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the resource group to which a cloud resource belongs.
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
            'action'      => 'ChangeResourceGroup',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the resource group to which a cloud resource belongs.
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
     * @summary Continues deploying an application group when an error occurs for calling the DeployApplicationGroup operation. You can call this operation only for the applications which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param ContinueDeployApplicationGroupRequest $request ContinueDeployApplicationGroupRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ContinueDeployApplicationGroupResponse ContinueDeployApplicationGroupResponse
     */
    public function continueDeployApplicationGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->deployParameters)) {
            $query['DeployParameters'] = $request->deployParameters;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinueDeployApplicationGroup',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContinueDeployApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Continues deploying an application group when an error occurs for calling the DeployApplicationGroup operation. You can call this operation only for the applications which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param ContinueDeployApplicationGroupRequest $request ContinueDeployApplicationGroupRequest
     *
     * @return ContinueDeployApplicationGroupResponse ContinueDeployApplicationGroupResponse
     */
    public function continueDeployApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueDeployApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param CreateApplicationRequest $tmpReq  CreateApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplicationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateApplicationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alarmConfig)) {
            $request->alarmConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alarmConfig, 'AlarmConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alarmConfigShrink)) {
            $query['AlarmConfig'] = $request->alarmConfigShrink;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param CreateApplicationGroupRequest $request CreateApplicationGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationGroupResponse CreateApplicationGroupResponse
     */
    public function createApplicationGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cmsGroupId)) {
            $query['CmsGroupId'] = $request->cmsGroupId;
        }
        if (!Utils::isUnset($request->deployRegionId)) {
            $query['DeployRegionId'] = $request->deployRegionId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->importTagKey)) {
            $query['ImportTagKey'] = $request->importTagKey;
        }
        if (!Utils::isUnset($request->importTagValue)) {
            $query['ImportTagValue'] = $request->importTagValue;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplicationGroup',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param CreateApplicationGroupRequest $request CreateApplicationGroupRequest
     *
     * @return CreateApplicationGroupResponse CreateApplicationGroupResponse
     */
    public function createApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an O\\\\\\\\\\\\&M Item.
     *  *
     * @param CreateOpsItemRequest $tmpReq  CreateOpsItemRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOpsItemResponse CreateOpsItemResponse
     */
    public function createOpsItemWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOpsItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedupString)) {
            $query['DedupString'] = $request->dedupString;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->solutions)) {
            $query['Solutions'] = $request->solutions;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOpsItem',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOpsItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an O\\\\\\\\\\\\&M Item.
     *  *
     * @param CreateOpsItemRequest $request CreateOpsItemRequest
     *
     * @return CreateOpsItemResponse CreateOpsItemResponse
     */
    public function createOpsItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOpsItemWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a common parameter.
     *  *
     * @param CreateParameterRequest $tmpReq  CreateParameterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateParameterResponse CreateParameterResponse
     */
    public function createParameterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateParameterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->constraints)) {
            $query['Constraints'] = $request->constraints;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a common parameter.
     *  *
     * @param CreateParameterRequest $request CreateParameterRequest
     *
     * @return CreateParameterResponse CreateParameterResponse
     */
    public function createParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a patch baseline.
     *  *
     * @param CreatePatchBaselineRequest $tmpReq  CreatePatchBaselineRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePatchBaselineResponse CreatePatchBaselineResponse
     */
    public function createPatchBaselineWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePatchBaselineShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->approvedPatches)) {
            $request->approvedPatchesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->approvedPatches, 'ApprovedPatches', 'json');
        }
        if (!Utils::isUnset($tmpReq->rejectedPatches)) {
            $request->rejectedPatchesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rejectedPatches, 'RejectedPatches', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->approvalRules)) {
            $query['ApprovalRules'] = $request->approvalRules;
        }
        if (!Utils::isUnset($request->approvedPatchesShrink)) {
            $query['ApprovedPatches'] = $request->approvedPatchesShrink;
        }
        if (!Utils::isUnset($request->approvedPatchesEnableNonSecurity)) {
            $query['ApprovedPatchesEnableNonSecurity'] = $request->approvedPatchesEnableNonSecurity;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operationSystem)) {
            $query['OperationSystem'] = $request->operationSystem;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rejectedPatchesShrink)) {
            $query['RejectedPatches'] = $request->rejectedPatchesShrink;
        }
        if (!Utils::isUnset($request->rejectedPatchesAction)) {
            $query['RejectedPatchesAction'] = $request->rejectedPatchesAction;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourcesShrink)) {
            $query['Sources'] = $request->sourcesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a patch baseline.
     *  *
     * @param CreatePatchBaselineRequest $request CreatePatchBaselineRequest
     *
     * @return CreatePatchBaselineResponse CreatePatchBaselineResponse
     */
    public function createPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an encryption parameter. Make sure that you have the permissions to call this operation.
     *  *
     * @param CreateSecretParameterRequest $tmpReq  CreateSecretParameterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSecretParameterResponse CreateSecretParameterResponse
     */
    public function createSecretParameterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSecretParameterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->constraints)) {
            $query['Constraints'] = $request->constraints;
        }
        if (!Utils::isUnset($request->DKMSInstanceId)) {
            $query['DKMSInstanceId'] = $request->DKMSInstanceId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecretParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecretParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an encryption parameter. Make sure that you have the permissions to call this operation.
     *  *
     * @param CreateSecretParameterRequest $request CreateSecretParameterRequest
     *
     * @return CreateSecretParameterResponse CreateSecretParameterResponse
     */
    public function createSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecretParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a desired-state configuration.
     *  *
     * @param CreateStateConfigurationRequest $tmpReq  CreateStateConfigurationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStateConfigurationResponse CreateStateConfigurationResponse
     */
    public function createStateConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStateConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configureMode)) {
            $query['ConfigureMode'] = $request->configureMode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scheduleExpression)) {
            $query['ScheduleExpression'] = $request->scheduleExpression;
        }
        if (!Utils::isUnset($request->scheduleType)) {
            $query['ScheduleType'] = $request->scheduleType;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->targets)) {
            $query['Targets'] = $request->targets;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStateConfiguration',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStateConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a desired-state configuration.
     *  *
     * @param CreateStateConfigurationRequest $request CreateStateConfigurationRequest
     *
     * @return CreateStateConfigurationResponse CreateStateConfigurationResponse
     */
    public function createStateConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStateConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a template.
     *  *
     * @param CreateTemplateRequest $tmpReq  CreateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2019-06-01',
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
     * @summary Creates a template.
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
     * @summary Deletes an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retainResource)) {
            $query['RetainResource'] = $request->retainResource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplication',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an application group. You can call this operation only for the application groups which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param DeleteApplicationGroupRequest $request DeleteApplicationGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationGroupResponse DeleteApplicationGroupResponse
     */
    public function deleteApplicationGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retainResource)) {
            $query['RetainResource'] = $request->retainResource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplicationGroup',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an application group. You can call this operation only for the application groups which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param DeleteApplicationGroupRequest $request DeleteApplicationGroupRequest
     *
     * @return DeleteApplicationGroupResponse DeleteApplicationGroupResponse
     */
    public function deleteApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple executions.
     *  *
     * @param DeleteExecutionsRequest $request DeleteExecutionsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExecutionsResponse DeleteExecutionsResponse
     */
    public function deleteExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->executionIds)) {
            $query['ExecutionIds'] = $request->executionIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExecutions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple executions.
     *  *
     * @param DeleteExecutionsRequest $request DeleteExecutionsRequest
     *
     * @return DeleteExecutionsResponse DeleteExecutionsResponse
     */
    public function deleteExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExecutionsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a common parameter.
     *  *
     * @param DeleteParameterRequest $request DeleteParameterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteParameterResponse DeleteParameterResponse
     */
    public function deleteParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a common parameter.
     *  *
     * @param DeleteParameterRequest $request DeleteParameterRequest
     *
     * @return DeleteParameterResponse DeleteParameterResponse
     */
    public function deleteParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a patch baseline.
     *  *
     * @param DeletePatchBaselineRequest $request DeletePatchBaselineRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePatchBaselineResponse DeletePatchBaselineResponse
     */
    public function deletePatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a patch baseline.
     *  *
     * @param DeletePatchBaselineRequest $request DeletePatchBaselineRequest
     *
     * @return DeletePatchBaselineResponse DeletePatchBaselineResponse
     */
    public function deletePatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an encryption parameter. Make sure that you have the permissions to call the DeleteSecret operation before you call this operation.
     *  *
     * @param DeleteSecretParameterRequest $request DeleteSecretParameterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecretParameterResponse DeleteSecretParameterResponse
     */
    public function deleteSecretParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecretParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecretParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an encryption parameter. Make sure that you have the permissions to call the DeleteSecret operation before you call this operation.
     *  *
     * @param DeleteSecretParameterRequest $request DeleteSecretParameterRequest
     *
     * @return DeleteSecretParameterResponse DeleteSecretParameterResponse
     */
    public function deleteSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple desired-state configurations at a time.
     *  *
     * @param DeleteStateConfigurationsRequest $request DeleteStateConfigurationsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStateConfigurationsResponse DeleteStateConfigurationsResponse
     */
    public function deleteStateConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stateConfigurationIds)) {
            $query['StateConfigurationIds'] = $request->stateConfigurationIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStateConfigurations',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStateConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple desired-state configurations at a time.
     *  *
     * @param DeleteStateConfigurationsRequest $request DeleteStateConfigurationsRequest
     *
     * @return DeleteStateConfigurationsResponse DeleteStateConfigurationsResponse
     */
    public function deleteStateConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStateConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a template.
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
        if (!Utils::isUnset($request->autoDeleteExecutions)) {
            $query['AutoDeleteExecutions'] = $request->autoDeleteExecutions;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2019-06-01',
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
     * @summary Deletes multiple templates.
     *  *
     * @param DeleteTemplatesRequest $request DeleteTemplatesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplatesResponse DeleteTemplatesResponse
     */
    public function deleteTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoDeleteExecutions)) {
            $query['AutoDeleteExecutions'] = $request->autoDeleteExecutions;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateNames)) {
            $query['TemplateNames'] = $request->templateNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplates',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple templates.
     *  *
     * @param DeleteTemplatesRequest $request DeleteTemplatesRequest
     *
     * @return DeleteTemplatesResponse DeleteTemplatesResponse
     */
    public function deleteTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Deploys an application group. You can call this operation only for the applications which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param DeployApplicationGroupRequest $request DeployApplicationGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeployApplicationGroupResponse DeployApplicationGroupResponse
     */
    public function deployApplicationGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->deployParameters)) {
            $query['DeployParameters'] = $request->deployParameters;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployApplicationGroup',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deploys an application group. You can call this operation only for the applications which reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param DeployApplicationGroupRequest $request DeployApplicationGroupRequest
     *
     * @return DeployApplicationGroupResponse DeployApplicationGroupResponse
     */
    public function deployApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 查询应用分组资源成本
     *  *
     * @param DescribeApplicationGroupBillRequest $request DescribeApplicationGroupBillRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationGroupBillResponse DescribeApplicationGroupBillResponse
     */
    public function describeApplicationGroupBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
            'action'      => 'DescribeApplicationGroupBill',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationGroupBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询应用分组资源成本
     *  *
     * @param DescribeApplicationGroupBillRequest $request DescribeApplicationGroupBillRequest
     *
     * @return DescribeApplicationGroupBillResponse DescribeApplicationGroupBillResponse
     */
    public function describeApplicationGroupBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationGroupBillWithOptions($request, $runtime);
    }

    /**
     * @summary Queries supported regions.
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-06-01',
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
     * @summary Queries supported regions.
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
     * @summary Queries the Resource Access Management (RAM) policy required for template execution.
     *  *
     * @param GenerateExecutionPolicyRequest $request GenerateExecutionPolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateExecutionPolicyResponse GenerateExecutionPolicyResponse
     */
    public function generateExecutionPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ramRole)) {
            $query['RamRole'] = $request->ramRole;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateContent)) {
            $query['TemplateContent'] = $request->templateContent;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateExecutionPolicy',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateExecutionPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Resource Access Management (RAM) policy required for template execution.
     *  *
     * @param GenerateExecutionPolicyRequest $request GenerateExecutionPolicyRequest
     *
     * @return GenerateExecutionPolicyResponse GenerateExecutionPolicyResponse
     */
    public function generateExecutionPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateExecutionPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param GetApplicationRequest $request GetApplicationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param GetApplicationRequest $request GetApplicationRequest
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param GetApplicationGroupRequest $request GetApplicationGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationGroupResponse GetApplicationGroupResponse
     */
    public function getApplicationGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationGroup',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param GetApplicationGroupRequest $request GetApplicationGroupRequest
     *
     * @return GetApplicationGroupResponse GetApplicationGroupResponse
     */
    public function getApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the template of an execution, including the content of the template.
     *  *
     * @param GetExecutionTemplateRequest $request GetExecutionTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExecutionTemplateResponse GetExecutionTemplateResponse
     */
    public function getExecutionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExecutionTemplate',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExecutionTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the template of an execution, including the content of the template.
     *  *
     * @param GetExecutionTemplateRequest $request GetExecutionTemplateRequest
     *
     * @return GetExecutionTemplateResponse GetExecutionTemplateResponse
     */
    public function getExecutionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecutionTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the properties of a configuration list.
     *  *
     * @param GetInventorySchemaRequest $request GetInventorySchemaRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInventorySchemaResponse GetInventorySchemaResponse
     */
    public function getInventorySchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregator)) {
            $query['Aggregator'] = $request->aggregator;
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
        if (!Utils::isUnset($request->typeName)) {
            $query['TypeName'] = $request->typeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInventorySchema',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInventorySchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the properties of a configuration list.
     *  *
     * @param GetInventorySchemaRequest $request GetInventorySchemaRequest
     *
     * @return GetInventorySchemaResponse GetInventorySchemaResponse
     */
    public function getInventorySchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInventorySchemaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an O\\\\\\\\\\\\&M item.
     *  *
     * @param GetOpsItemRequest $request GetOpsItemRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOpsItemResponse GetOpsItemResponse
     */
    public function getOpsItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->opsItemId)) {
            $query['OpsItemId'] = $request->opsItemId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOpsItem',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOpsItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an O\\\\\\\\\\\\&M item.
     *  *
     * @param GetOpsItemRequest $request GetOpsItemRequest
     *
     * @return GetOpsItemResponse GetOpsItemResponse
     */
    public function getOpsItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpsItemWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a common parameter and its value.
     *  *
     * @param GetParameterRequest $request GetParameterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetParameterResponse GetParameterResponse
     */
    public function getParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameterVersion)) {
            $query['ParameterVersion'] = $request->parameterVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a common parameter and its value.
     *  *
     * @param GetParameterRequest $request GetParameterRequest
     *
     * @return GetParameterResponse GetParameterResponse
     */
    public function getParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more parameters.
     *  *
     * @param GetParametersRequest $request GetParametersRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetParametersResponse GetParametersResponse
     */
    public function getParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->names)) {
            $query['Names'] = $request->names;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetParameters',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more parameters.
     *  *
     * @param GetParametersRequest $request GetParametersRequest
     *
     * @return GetParametersResponse GetParametersResponse
     */
    public function getParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more parameters by path.
     *  *
     * @param GetParametersByPathRequest $request GetParametersByPathRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetParametersByPathResponse GetParametersByPathResponse
     */
    public function getParametersByPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->recursive)) {
            $query['Recursive'] = $request->recursive;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetParametersByPath',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetParametersByPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more parameters by path.
     *  *
     * @param GetParametersByPathRequest $request GetParametersByPathRequest
     *
     * @return GetParametersByPathResponse GetParametersByPathResponse
     */
    public function getParametersByPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParametersByPathWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of a patch baseline.
     *  *
     * @param GetPatchBaselineRequest $request GetPatchBaselineRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPatchBaselineResponse GetPatchBaselineResponse
     */
    public function getPatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of a patch baseline.
     *  *
     * @param GetPatchBaselineRequest $request GetPatchBaselineRequest
     *
     * @return GetPatchBaselineResponse GetPatchBaselineResponse
     */
    public function getPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an encryption parameter, including the parameter value. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *  *
     * @param GetSecretParameterRequest $request GetSecretParameterRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSecretParameterResponse GetSecretParameterResponse
     */
    public function getSecretParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameterVersion)) {
            $query['ParameterVersion'] = $request->parameterVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->withDecryption)) {
            $query['WithDecryption'] = $request->withDecryption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSecretParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSecretParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an encryption parameter, including the parameter value. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *  *
     * @param GetSecretParameterRequest $request GetSecretParameterRequest
     *
     * @return GetSecretParameterResponse GetSecretParameterResponse
     */
    public function getSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more encryption parameters. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *  *
     * @param GetSecretParametersRequest $request GetSecretParametersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSecretParametersResponse GetSecretParametersResponse
     */
    public function getSecretParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->names)) {
            $query['Names'] = $request->names;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->withDecryption)) {
            $query['WithDecryption'] = $request->withDecryption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSecretParameters',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSecretParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more encryption parameters. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *  *
     * @param GetSecretParametersRequest $request GetSecretParametersRequest
     *
     * @return GetSecretParametersResponse GetSecretParametersResponse
     */
    public function getSecretParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries encryption parameters by path. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *  *
     * @param GetSecretParametersByPathRequest $request GetSecretParametersByPathRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSecretParametersByPathResponse GetSecretParametersByPathResponse
     */
    public function getSecretParametersByPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->recursive)) {
            $query['Recursive'] = $request->recursive;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->withDecryption)) {
            $query['WithDecryption'] = $request->withDecryption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSecretParametersByPath',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSecretParametersByPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries encryption parameters by path. Make sure that you have the permissions to call the GetSecretValue operation before you call this operation.
     *  *
     * @param GetSecretParametersByPathRequest $request GetSecretParametersByPathRequest
     *
     * @return GetSecretParametersByPathResponse GetSecretParametersByPathResponse
     */
    public function getSecretParametersByPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParametersByPathWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the settings of the delivery feature.
     *  *
     * @param GetServiceSettingsRequest $request GetServiceSettingsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceSettingsResponse GetServiceSettingsResponse
     */
    public function getServiceSettingsWithOptions($request, $runtime)
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
            'action'      => 'GetServiceSettings',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the settings of the delivery feature.
     *  *
     * @param GetServiceSettingsRequest $request GetServiceSettingsRequest
     *
     * @return GetServiceSettingsResponse GetServiceSettingsResponse
     */
    public function getServiceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceSettingsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a template, including the content of the template.
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2019-06-01',
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
     * @summary Queries the information about a template, including the content of the template.
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
     * @summary Queries the available actions, including atomic actions and cloud product actions.
     *  *
     * @param ListActionsRequest $request ListActionsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListActionsResponse ListActionsResponse
     */
    public function listActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->OOSActionName)) {
            $query['OOSActionName'] = $request->OOSActionName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListActions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the available actions, including atomic actions and cloud product actions.
     *  *
     * @param ListActionsRequest $request ListActionsRequest
     *
     * @return ListActionsResponse ListActionsResponse
     */
    public function listActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of application groups. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param ListApplicationGroupsRequest $request ListApplicationGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationGroupsResponse ListApplicationGroupsResponse
     */
    public function listApplicationGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->deployRegionId)) {
            $query['DeployRegionId'] = $request->deployRegionId;
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
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceProduct)) {
            $query['ResourceProduct'] = $request->resourceProduct;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationGroups',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of application groups. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param ListApplicationGroupsRequest $request ListApplicationGroupsRequest
     *
     * @return ListApplicationGroupsResponse ListApplicationGroupsResponse
     */
    public function listApplicationGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of applications. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param ListApplicationsRequest $tmpReq  ListApplicationsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplicationsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListApplicationsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->applicationType)) {
            $query['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->names)) {
            $query['Names'] = $request->names;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplications',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of applications. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logs of an execution.
     *  *
     * @description ****
     *  *
     * @param ListExecutionLogsRequest $request ListExecutionLogsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExecutionLogsResponse ListExecutionLogsResponse
     */
    public function listExecutionLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
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
        if (!Utils::isUnset($request->taskExecutionId)) {
            $query['TaskExecutionId'] = $request->taskExecutionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExecutionLogs',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExecutionLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of an execution.
     *  *
     * @description ****
     *  *
     * @param ListExecutionLogsRequest $request ListExecutionLogsRequest
     *
     * @return ListExecutionLogsResponse ListExecutionLogsResponse
     */
    public function listExecutionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries high-risk tasks in the execution of a template.
     *  *
     * @param ListExecutionRiskyTasksRequest $request ListExecutionRiskyTasksRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExecutionRiskyTasksResponse ListExecutionRiskyTasksResponse
     */
    public function listExecutionRiskyTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExecutionRiskyTasks',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExecutionRiskyTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries high-risk tasks in the execution of a template.
     *  *
     * @param ListExecutionRiskyTasksRequest $request ListExecutionRiskyTasksRequest
     *
     * @return ListExecutionRiskyTasksResponse ListExecutionRiskyTasksResponse
     */
    public function listExecutionRiskyTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionRiskyTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries executions. Multiple methods are supported to filter executions.
     *  *
     * @param ListExecutionsRequest $tmpReq  ListExecutionsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExecutionsResponse ListExecutionsResponse
     */
    public function listExecutionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListExecutionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->categories)) {
            $query['Categories'] = $request->categories;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->depth)) {
            $query['Depth'] = $request->depth;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endDateAfter)) {
            $query['EndDateAfter'] = $request->endDateAfter;
        }
        if (!Utils::isUnset($request->endDateBefore)) {
            $query['EndDateBefore'] = $request->endDateBefore;
        }
        if (!Utils::isUnset($request->executedBy)) {
            $query['ExecutedBy'] = $request->executedBy;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->includeChildExecution)) {
            $query['IncludeChildExecution'] = $request->includeChildExecution;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->parentExecutionId)) {
            $query['ParentExecutionId'] = $request->parentExecutionId;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $query['RamRole'] = $request->ramRole;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceTemplateName)) {
            $query['ResourceTemplateName'] = $request->resourceTemplateName;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startDateAfter)) {
            $query['StartDateAfter'] = $request->startDateAfter;
        }
        if (!Utils::isUnset($request->startDateBefore)) {
            $query['StartDateBefore'] = $request->startDateBefore;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExecutions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries executions. Multiple methods are supported to filter executions.
     *  *
     * @param ListExecutionsRequest $request ListExecutionsRequest
     *
     * @return ListExecutionsResponse ListExecutionsResponse
     */
    public function listExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取仓库信息
     *  *
     * @param ListGitRepositoriesRequest $request ListGitRepositoriesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGitRepositoriesResponse ListGitRepositoriesResponse
     */
    public function listGitRepositoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->orgName)) {
            $query['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGitRepositories',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGitRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取仓库信息
     *  *
     * @param ListGitRepositoriesRequest $request ListGitRepositoriesRequest
     *
     * @return ListGitRepositoriesResponse ListGitRepositoriesResponse
     */
    public function listGitRepositories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGitRepositoriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the patches of an instance.
     *  *
     * @param ListInstancePatchStatesRequest $request ListInstancePatchStatesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancePatchStatesResponse ListInstancePatchStatesResponse
     */
    public function listInstancePatchStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstancePatchStates',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancePatchStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the patches of an instance.
     *  *
     * @param ListInstancePatchStatesRequest $request ListInstancePatchStatesRequest
     *
     * @return ListInstancePatchStatesResponse ListInstancePatchStatesResponse
     */
    public function listInstancePatchStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancePatchStatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the patches of an instance.
     *  *
     * @param ListInstancePatchesRequest $request ListInstancePatchesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancePatchesResponse ListInstancePatchesResponse
     */
    public function listInstancePatchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->patchStatuses)) {
            $query['PatchStatuses'] = $request->patchStatuses;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstancePatches',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancePatchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the patches of an instance.
     *  *
     * @param ListInstancePatchesRequest $request ListInstancePatchesRequest
     *
     * @return ListInstancePatchesResponse ListInstancePatchesResponse
     */
    public function listInstancePatches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancePatchesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of an Elastic Compute Service (ECS) instance.
     *  *
     * @param ListInventoryEntriesRequest $request ListInventoryEntriesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInventoryEntriesResponse ListInventoryEntriesResponse
     */
    public function listInventoryEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->typeName)) {
            $query['TypeName'] = $request->typeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInventoryEntries',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInventoryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of an Elastic Compute Service (ECS) instance.
     *  *
     * @param ListInventoryEntriesRequest $request ListInventoryEntriesRequest
     *
     * @return ListInventoryEntriesResponse ListInventoryEntriesResponse
     */
    public function listInventoryEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInventoryEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries O\\&M items.
     *  *
     * @param ListOpsItemsRequest $tmpReq  ListOpsItemsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOpsItemsResponse ListOpsItemsResponse
     */
    public function listOpsItemsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListOpsItemsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceTags)) {
            $request->resourceTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTags, 'ResourceTags', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
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
        if (!Utils::isUnset($request->resourceTagsShrink)) {
            $query['ResourceTags'] = $request->resourceTagsShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOpsItems',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOpsItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries O\\&M items.
     *  *
     * @param ListOpsItemsRequest $request ListOpsItemsRequest
     *
     * @return ListOpsItemsResponse ListOpsItemsResponse
     */
    public function listOpsItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpsItemsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the versions of a common parameter.
     *  *
     * @param ListParameterVersionsRequest $request ListParameterVersionsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListParameterVersionsResponse ListParameterVersionsResponse
     */
    public function listParameterVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListParameterVersions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListParameterVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the versions of a common parameter.
     *  *
     * @param ListParameterVersionsRequest $request ListParameterVersionsRequest
     *
     * @return ListParameterVersionsResponse ListParameterVersionsResponse
     */
    public function listParameterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParameterVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries common parameters. Multiple methods are supported to filter common parameters.
     *  *
     * @param ListParametersRequest $tmpReq  ListParametersRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListParametersResponse ListParametersResponse
     */
    public function listParametersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListParametersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->recursive)) {
            $query['Recursive'] = $request->recursive;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListParameters',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries common parameters. Multiple methods are supported to filter common parameters.
     *  *
     * @param ListParametersRequest $request ListParametersRequest
     *
     * @return ListParametersResponse ListParametersResponse
     */
    public function listParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of patch baselines.
     *  *
     * @param ListPatchBaselinesRequest $tmpReq  ListPatchBaselinesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPatchBaselinesResponse ListPatchBaselinesResponse
     */
    public function listPatchBaselinesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPatchBaselinesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->approvedPatches)) {
            $request->approvedPatchesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->approvedPatches, 'ApprovedPatches', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->approvedPatchesShrink)) {
            $query['ApprovedPatches'] = $request->approvedPatchesShrink;
        }
        if (!Utils::isUnset($request->approvedPatchesEnableNonSecurity)) {
            $query['ApprovedPatchesEnableNonSecurity'] = $request->approvedPatchesEnableNonSecurity;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->operationSystem)) {
            $query['OperationSystem'] = $request->operationSystem;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->sourcesShrink)) {
            $query['Sources'] = $request->sourcesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPatchBaselines',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPatchBaselinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of patch baselines.
     *  *
     * @param ListPatchBaselinesRequest $request ListPatchBaselinesRequest
     *
     * @return ListPatchBaselinesResponse ListPatchBaselinesResponse
     */
    public function listPatchBaselines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPatchBaselinesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a scheduled execution that involves O&M operations on Elastic Compute Service (ECS) instances.
     *  *
     * @param ListResourceExecutionStatusRequest $request ListResourceExecutionStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceExecutionStatusResponse ListResourceExecutionStatusResponse
     */
    public function listResourceExecutionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceExecutionStatus',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceExecutionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a scheduled execution that involves O&M operations on Elastic Compute Service (ECS) instances.
     *  *
     * @param ListResourceExecutionStatusRequest $request ListResourceExecutionStatusRequest
     *
     * @return ListResourceExecutionStatusResponse ListResourceExecutionStatusResponse
     */
    public function listResourceExecutionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceExecutionStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries versions of an encryption parameter.
     *  *
     * @param ListSecretParameterVersionsRequest $request ListSecretParameterVersionsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSecretParameterVersionsResponse ListSecretParameterVersionsResponse
     */
    public function listSecretParameterVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->withDecryption)) {
            $query['WithDecryption'] = $request->withDecryption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecretParameterVersions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecretParameterVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries versions of an encryption parameter.
     *  *
     * @param ListSecretParameterVersionsRequest $request ListSecretParameterVersionsRequest
     *
     * @return ListSecretParameterVersionsResponse ListSecretParameterVersionsResponse
     */
    public function listSecretParameterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretParameterVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries common parameters. Multiple types of queries are supported.
     *  *
     * @description Before you call this operation, make sure that you have the permission to manage Key Management Service (KMS) secrets.
     *  *
     * @param ListSecretParametersRequest $tmpReq  ListSecretParametersRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSecretParametersResponse ListSecretParametersResponse
     */
    public function listSecretParametersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSecretParametersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->recursive)) {
            $query['Recursive'] = $request->recursive;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecretParameters',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecretParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries common parameters. Multiple types of queries are supported.
     *  *
     * @description Before you call this operation, make sure that you have the permission to manage Key Management Service (KMS) secrets.
     *  *
     * @param ListSecretParametersRequest $request ListSecretParametersRequest
     *
     * @return ListSecretParametersResponse ListSecretParametersResponse
     */
    public function listSecretParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries desired-state configurations.
     *  *
     * @param ListStateConfigurationsRequest $tmpReq  ListStateConfigurationsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStateConfigurationsResponse ListStateConfigurationsResponse
     */
    public function listStateConfigurationsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListStateConfigurationsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->stateConfigurationIds)) {
            $query['StateConfigurationIds'] = $request->stateConfigurationIds;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStateConfigurations',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStateConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries desired-state configurations.
     *  *
     * @param ListStateConfigurationsRequest $request ListStateConfigurationsRequest
     *
     * @return ListStateConfigurationsResponse ListStateConfigurationsResponse
     */
    public function listStateConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStateConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags.
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
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
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
            'action'      => 'ListTagKeys',
            'version'     => '2019-06-01',
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
     * @summary Queries the tags.
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
     * @summary Queries the tags that are added to one or more resources.
     *  *
     * @param ListTagResourcesRequest $tmpReq  ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIdsShrink)) {
            $query['ResourceIds'] = $request->resourceIdsShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-06-01',
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
     * @summary Queries the tags that are added to one or more resources.
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
     * @summary Queries the values of created tags.
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
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
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
            'version'     => '2019-06-01',
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
     * @summary Queries the values of created tags.
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
     * @summary Queries task executions. Multiple methods are supported to filter task executions.
     *  *
     * @param ListTaskExecutionsRequest $request ListTaskExecutionsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskExecutionsResponse ListTaskExecutionsResponse
     */
    public function listTaskExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDateAfter)) {
            $query['EndDateAfter'] = $request->endDateAfter;
        }
        if (!Utils::isUnset($request->endDateBefore)) {
            $query['EndDateBefore'] = $request->endDateBefore;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->includeChildTaskExecution)) {
            $query['IncludeChildTaskExecution'] = $request->includeChildTaskExecution;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->parentTaskExecutionId)) {
            $query['ParentTaskExecutionId'] = $request->parentTaskExecutionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startDateAfter)) {
            $query['StartDateAfter'] = $request->startDateAfter;
        }
        if (!Utils::isUnset($request->startDateBefore)) {
            $query['StartDateBefore'] = $request->startDateBefore;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskAction)) {
            $query['TaskAction'] = $request->taskAction;
        }
        if (!Utils::isUnset($request->taskExecutionId)) {
            $query['TaskExecutionId'] = $request->taskExecutionId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskExecutions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries task executions. Multiple methods are supported to filter task executions.
     *  *
     * @param ListTaskExecutionsRequest $request ListTaskExecutionsRequest
     *
     * @return ListTaskExecutionsResponse ListTaskExecutionsResponse
     */
    public function listTaskExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskExecutionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of versions of a template.
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplateVersions',
            'version'     => '2019-06-01',
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
     * @summary Queries a list of versions of a template.
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
     * @summary Queries templates. Multiple methods are supported to filter templates.
     *  *
     * @param ListTemplatesRequest $tmpReq  ListTemplatesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplatesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTemplatesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->createdBy)) {
            $query['CreatedBy'] = $request->createdBy;
        }
        if (!Utils::isUnset($request->createdDateAfter)) {
            $query['CreatedDateAfter'] = $request->createdDateAfter;
        }
        if (!Utils::isUnset($request->createdDateBefore)) {
            $query['CreatedDateBefore'] = $request->createdDateBefore;
        }
        if (!Utils::isUnset($request->hasTrigger)) {
            $query['HasTrigger'] = $request->hasTrigger;
        }
        if (!Utils::isUnset($request->isExample)) {
            $query['IsExample'] = $request->isExample;
        }
        if (!Utils::isUnset($request->isFavorite)) {
            $query['IsFavorite'] = $request->isFavorite;
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
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->templateFormat)) {
            $query['TemplateFormat'] = $request->templateFormat;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2019-06-01',
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
     * @summary Queries templates. Multiple methods are supported to filter templates.
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
     * @summary Notifies an execution in the Waiting state of the subsequent operations.
     *  *
     * @description You can call this operation to notify an execution in the following scenarios:
     * *   If a template contains a special task, such as an approval task, the Operation Orchestration Service (OOS) execution engine sets the execution state to Waiting when the approval task is being run. You can call this operation to specify whether to continue the execution.
     * *   If you perform debugging in the debug mode, you can call this operation to notify the execution of the subsequent operations after the execution is created or a task is complete.
     * *   If a high-risk operation task waits for approval, you can call this operation to specify whether to continue the execution.
     *  *
     * @param NotifyExecutionRequest $request NotifyExecutionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return NotifyExecutionResponse NotifyExecutionResponse
     */
    public function notifyExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->executionStatus)) {
            $query['ExecutionStatus'] = $request->executionStatus;
        }
        if (!Utils::isUnset($request->loopItem)) {
            $query['LoopItem'] = $request->loopItem;
        }
        if (!Utils::isUnset($request->notifyNote)) {
            $query['NotifyNote'] = $request->notifyNote;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $query['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskExecutionId)) {
            $query['TaskExecutionId'] = $request->taskExecutionId;
        }
        if (!Utils::isUnset($request->taskExecutionIds)) {
            $query['TaskExecutionIds'] = $request->taskExecutionIds;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NotifyExecution',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NotifyExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Notifies an execution in the Waiting state of the subsequent operations.
     *  *
     * @description You can call this operation to notify an execution in the following scenarios:
     * *   If a template contains a special task, such as an approval task, the Operation Orchestration Service (OOS) execution engine sets the execution state to Waiting when the approval task is being run. You can call this operation to specify whether to continue the execution.
     * *   If you perform debugging in the debug mode, you can call this operation to notify the execution of the subsequent operations after the execution is created or a task is complete.
     * *   If a high-risk operation task waits for approval, you can call this operation to specify whether to continue the execution.
     *  *
     * @param NotifyExecutionRequest $request NotifyExecutionRequest
     *
     * @return NotifyExecutionResponse NotifyExecutionResponse
     */
    public function notifyExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary Registers the default patch baseline.
     *  *
     * @param RegisterDefaultPatchBaselineRequest $request RegisterDefaultPatchBaselineRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterDefaultPatchBaselineResponse RegisterDefaultPatchBaselineResponse
     */
    public function registerDefaultPatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterDefaultPatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDefaultPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Registers the default patch baseline.
     *  *
     * @param RegisterDefaultPatchBaselineRequest $request RegisterDefaultPatchBaselineRequest
     *
     * @return RegisterDefaultPatchBaselineResponse RegisterDefaultPatchBaselineResponse
     */
    public function registerDefaultPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDefaultPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details or aggregate information of a configuration inventory.
     *  *
     * @param SearchInventoryRequest $request SearchInventoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchInventoryResponse SearchInventoryResponse
     */
    public function searchInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregator)) {
            $query['Aggregator'] = $request->aggregator;
        }
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchInventory',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details or aggregate information of a configuration inventory.
     *  *
     * @param SearchInventoryRequest $request SearchInventoryRequest
     *
     * @return SearchInventoryResponse SearchInventoryResponse
     */
    public function searchInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchInventoryWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the feature of delivering template execution records and sets the storage location.
     *  *
     * @param SetServiceSettingsRequest $request SetServiceSettingsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetServiceSettingsResponse SetServiceSettingsResponse
     */
    public function setServiceSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliveryOssBucketName)) {
            $query['DeliveryOssBucketName'] = $request->deliveryOssBucketName;
        }
        if (!Utils::isUnset($request->deliveryOssEnabled)) {
            $query['DeliveryOssEnabled'] = $request->deliveryOssEnabled;
        }
        if (!Utils::isUnset($request->deliveryOssKeyPrefix)) {
            $query['DeliveryOssKeyPrefix'] = $request->deliveryOssKeyPrefix;
        }
        if (!Utils::isUnset($request->deliverySlsEnabled)) {
            $query['DeliverySlsEnabled'] = $request->deliverySlsEnabled;
        }
        if (!Utils::isUnset($request->deliverySlsProjectName)) {
            $query['DeliverySlsProjectName'] = $request->deliverySlsProjectName;
        }
        if (!Utils::isUnset($request->rdcEnterpriseId)) {
            $query['RdcEnterpriseId'] = $request->rdcEnterpriseId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetServiceSettings',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetServiceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables the feature of delivering template execution records and sets the storage location.
     *  *
     * @param SetServiceSettingsRequest $request SetServiceSettingsRequest
     *
     * @return SetServiceSettingsResponse SetServiceSettingsResponse
     */
    public function setServiceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setServiceSettingsWithOptions($request, $runtime);
    }

    /**
     * @summary Starts an execution.
     *  *
     * @param StartExecutionRequest $tmpReq  StartExecutionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartExecutionResponse StartExecutionResponse
     */
    public function startExecutionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartExecutionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->loopMode)) {
            $query['LoopMode'] = $request->loopMode;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->parentExecutionId)) {
            $query['ParentExecutionId'] = $request->parentExecutionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->safetyCheck)) {
            $query['SafetyCheck'] = $request->safetyCheck;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->templateContent)) {
            $query['TemplateContent'] = $request->templateContent;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
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
            'action'      => 'StartExecution',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts an execution.
     *  *
     * @param StartExecutionRequest $request StartExecutionRequest
     *
     * @return StartExecutionResponse StartExecutionResponse
     */
    public function startExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to one or more resources.
     *  *
     * @param TagResourcesRequest $tmpReq  TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIdsShrink)) {
            $query['ResourceIds'] = $request->resourceIdsShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-06-01',
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
     * @summary Adds tags to one or more resources.
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
     * @summary Debugs a started execution that contains an event trigger task or alert trigger task. If the operation is called, a message body is sent to the event trigger task or alert trigger task. After the trigger task receives the message body, the trigger task generates a new child execution.
     *  *
     * @param TriggerExecutionRequest $request TriggerExecutionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TriggerExecutionResponse TriggerExecutionResponse
     */
    public function triggerExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerExecution',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Debugs a started execution that contains an event trigger task or alert trigger task. If the operation is called, a message body is sent to the event trigger task or alert trigger task. After the trigger task receives the message body, the trigger task generates a new child execution.
     *  *
     * @param TriggerExecutionRequest $request TriggerExecutionRequest
     *
     * @return TriggerExecutionResponse TriggerExecutionResponse
     */
    public function triggerExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from one or more resources.
     *  *
     * @param UntagResourcesRequest $tmpReq  UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UntagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagKeys)) {
            $request->tagKeysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'TagKeys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIdsShrink)) {
            $query['ResourceIds'] = $request->resourceIdsShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeysShrink)) {
            $query['TagKeys'] = $request->tagKeysShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-06-01',
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
     * @summary Removes tags from one or more resources.
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
     * @summary Updates an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param UpdateApplicationRequest $tmpReq  UpdateApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationResponse UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateApplicationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alarmConfig)) {
            $request->alarmConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alarmConfig, 'AlarmConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alarmConfigShrink)) {
            $query['AlarmConfig'] = $request->alarmConfigShrink;
        }
        if (!Utils::isUnset($request->deleteAlarmRulesBeforeUpdate)) {
            $query['DeleteAlarmRulesBeforeUpdate'] = $request->deleteAlarmRulesBeforeUpdate;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplication',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an application. You can call this operation only for the applications that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param UpdateApplicationRequest $request UpdateApplicationRequest
     *
     * @return UpdateApplicationResponse UpdateApplicationResponse
     */
    public function updateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information of an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param UpdateApplicationGroupRequest $request UpdateApplicationGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationGroupResponse UpdateApplicationGroupResponse
     */
    public function updateApplicationGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newName)) {
            $query['NewName'] = $request->newName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationGroup',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information of an application group. You can call this operation only for the application groups that reside in the China (Hangzhou) region. Use an endpoint of the China (Hangzhou) region.
     *  *
     * @param UpdateApplicationGroupRequest $request UpdateApplicationGroupRequest
     *
     * @return UpdateApplicationGroupResponse UpdateApplicationGroupResponse
     */
    public function updateApplicationGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Updates an execution.
     *  *
     * @param UpdateExecutionRequest $request UpdateExecutionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateExecutionResponse UpdateExecutionResponse
     */
    public function updateExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateExecution',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an execution.
     *  *
     * @param UpdateExecutionRequest $request UpdateExecutionRequest
     *
     * @return UpdateExecutionResponse UpdateExecutionResponse
     */
    public function updateExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an O\\\\\\\\\\\\&M item.
     *  *
     * @param UpdateOpsItemRequest $tmpReq  UpdateOpsItemRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOpsItemResponse UpdateOpsItemResponse
     */
    public function updateOpsItemWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateOpsItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedupString)) {
            $query['DedupString'] = $request->dedupString;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->opsItemId)) {
            $query['OpsItemId'] = $request->opsItemId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->solutions)) {
            $query['Solutions'] = $request->solutions;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOpsItem',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOpsItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an O\\\\\\\\\\\\&M item.
     *  *
     * @param UpdateOpsItemRequest $request UpdateOpsItemRequest
     *
     * @return UpdateOpsItemResponse UpdateOpsItemResponse
     */
    public function updateOpsItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOpsItemWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a common parameter.
     *  *
     * @param UpdateParameterRequest $request UpdateParameterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateParameterResponse UpdateParameterResponse
     */
    public function updateParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a common parameter.
     *  *
     * @param UpdateParameterRequest $request UpdateParameterRequest
     *
     * @return UpdateParameterResponse UpdateParameterResponse
     */
    public function updateParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a patch baseline.
     *  *
     * @param UpdatePatchBaselineRequest $tmpReq  UpdatePatchBaselineRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePatchBaselineResponse UpdatePatchBaselineResponse
     */
    public function updatePatchBaselineWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdatePatchBaselineShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->approvedPatches)) {
            $request->approvedPatchesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->approvedPatches, 'ApprovedPatches', 'json');
        }
        if (!Utils::isUnset($tmpReq->rejectedPatches)) {
            $request->rejectedPatchesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rejectedPatches, 'RejectedPatches', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->approvalRules)) {
            $query['ApprovalRules'] = $request->approvalRules;
        }
        if (!Utils::isUnset($request->approvedPatchesShrink)) {
            $query['ApprovedPatches'] = $request->approvedPatchesShrink;
        }
        if (!Utils::isUnset($request->approvedPatchesEnableNonSecurity)) {
            $query['ApprovedPatchesEnableNonSecurity'] = $request->approvedPatchesEnableNonSecurity;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rejectedPatchesShrink)) {
            $query['RejectedPatches'] = $request->rejectedPatchesShrink;
        }
        if (!Utils::isUnset($request->rejectedPatchesAction)) {
            $query['RejectedPatchesAction'] = $request->rejectedPatchesAction;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourcesShrink)) {
            $query['Sources'] = $request->sourcesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a patch baseline.
     *  *
     * @param UpdatePatchBaselineRequest $request UpdatePatchBaselineRequest
     *
     * @return UpdatePatchBaselineResponse UpdatePatchBaselineResponse
     */
    public function updatePatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @summary Updates an encryption parameter.
     *  *
     * @param UpdateSecretParameterRequest $tmpReq  UpdateSecretParameterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSecretParameterResponse UpdateSecretParameterResponse
     */
    public function updateSecretParameterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSecretParameterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSecretParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSecretParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an encryption parameter.
     *  *
     * @param UpdateSecretParameterRequest $request UpdateSecretParameterRequest
     *
     * @return UpdateSecretParameterResponse UpdateSecretParameterResponse
     */
    public function updateSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a desired-state configuration.
     *  *
     * @param UpdateStateConfigurationRequest $tmpReq  UpdateStateConfigurationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStateConfigurationResponse UpdateStateConfigurationResponse
     */
    public function updateStateConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStateConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configureMode)) {
            $query['ConfigureMode'] = $request->configureMode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scheduleExpression)) {
            $query['ScheduleExpression'] = $request->scheduleExpression;
        }
        if (!Utils::isUnset($request->scheduleType)) {
            $query['ScheduleType'] = $request->scheduleType;
        }
        if (!Utils::isUnset($request->stateConfigurationId)) {
            $query['StateConfigurationId'] = $request->stateConfigurationId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->targets)) {
            $query['Targets'] = $request->targets;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateStateConfiguration',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStateConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a desired-state configuration.
     *  *
     * @param UpdateStateConfigurationRequest $request UpdateStateConfigurationRequest
     *
     * @return UpdateStateConfigurationResponse UpdateStateConfigurationResponse
     */
    public function updateStateConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStateConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about an existing template.
     *  *
     * @param UpdateTemplateRequest $tmpReq  UpdateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2019-06-01',
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
     * @summary Updates the information about an existing template.
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
     * @summary Check whether a template is valid.
     *  *
     * @param ValidateTemplateContentRequest $request ValidateTemplateContentRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateTemplateContentResponse ValidateTemplateContentResponse
     */
    public function validateTemplateContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateURL)) {
            $query['TemplateURL'] = $request->templateURL;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateTemplateContent',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateTemplateContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Check whether a template is valid.
     *  *
     * @param ValidateTemplateContentRequest $request ValidateTemplateContentRequest
     *
     * @return ValidateTemplateContentResponse ValidateTemplateContentResponse
     */
    public function validateTemplateContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTemplateContentWithOptions($request, $runtime);
    }
}
