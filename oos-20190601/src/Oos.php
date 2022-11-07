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
     * @param CancelExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelExecutionResponse
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
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
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
     * @param ContinueDeployApplicationGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ContinueDeployApplicationGroupResponse
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
     * @param CreateApplicationRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateApplicationShrinkRequest([]);
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
     * @param CreateApplicationGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateApplicationGroupResponse
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
     * @param CreateOpsItemRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateOpsItemResponse
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
     * @param CreateParameterRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateParameterResponse
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
     * @param CreatePatchBaselineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePatchBaselineResponse
     */
    public function createPatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->approvalRules)) {
            $query['ApprovalRules'] = $request->approvalRules;
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
     * @param CreateSecretParameterRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSecretParameterResponse
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
     * @param CreateStateConfigurationRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateStateConfigurationResponse
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
     * @param CreateTemplateRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
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
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
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
     * @param DeleteApplicationGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteApplicationGroupResponse
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
     * @param DeleteExecutionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteExecutionsResponse
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
     * @param DeleteParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteParameterResponse
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
     * @param DeletePatchBaselineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePatchBaselineResponse
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
     * @param DeleteSecretParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecretParameterResponse
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
     * @param DeleteStateConfigurationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteStateConfigurationsResponse
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
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
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
     * @param DeleteTemplatesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTemplatesResponse
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
     * @param DeployApplicationGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeployApplicationGroupResponse
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
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
     * @param GenerateExecutionPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateExecutionPolicyResponse
     */
    public function generateExecutionPolicyWithOptions($request, $runtime)
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
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
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
     * @param GetApplicationGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetApplicationGroupResponse
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
     * @param GetExecutionTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetExecutionTemplateResponse
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
     * @param GetInventorySchemaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInventorySchemaResponse
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
     * @param GetOpsItemRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetOpsItemResponse
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
     * @param GetParameterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetParameterResponse
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
     * @param GetParametersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetParametersResponse
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
     * @param GetParametersByPathRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetParametersByPathResponse
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
     * @param GetPatchBaselineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPatchBaselineResponse
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
     * @param GetSecretParameterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSecretParameterResponse
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
     * @param GetSecretParametersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSecretParametersResponse
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
     * @param GetSecretParametersByPathRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSecretParametersByPathResponse
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
     * @param GetServiceSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceSettingsResponse
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
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
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
     * @param ListActionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListActionsResponse
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
     * @param ListApplicationGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListApplicationGroupsResponse
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
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
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
     * @param ListApplicationsRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
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
     * @param ListExecutionLogsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListExecutionLogsResponse
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
     * @param ListExecutionRiskyTasksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListExecutionRiskyTasksResponse
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
     * @param ListExecutionsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListExecutionsResponse
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
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
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
     * @param ListInstancePatchStatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListInstancePatchStatesResponse
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
     * @param ListInstancePatchesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstancePatchesResponse
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
     * @param ListInventoryEntriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInventoryEntriesResponse
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
     * @param ListOpsItemsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListOpsItemsResponse
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
     * @param ListParameterVersionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListParameterVersionsResponse
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
     * @param ListParametersRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListParametersResponse
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
     * @param ListPatchBaselinesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPatchBaselinesResponse
     */
    public function listPatchBaselinesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->operationSystem)) {
            $query['OperationSystem'] = $request->operationSystem;
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
     * @param ListResourceExecutionStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListResourceExecutionStatusResponse
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
     * @param ListSecretParameterVersionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListSecretParameterVersionsResponse
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
     * @param ListSecretParametersRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretParametersResponse
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
     * @param ListStateConfigurationsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStateConfigurationsResponse
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
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
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
     * @param ListTagResourcesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
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
     * @param ListTaskExecutionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListTaskExecutionsResponse
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
     * @param ListTemplateVersionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListTemplateVersionsResponse
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
     * @param ListTemplatesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
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
     * @param NotifyExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return NotifyExecutionResponse
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
     * @param RegisterDefaultPatchBaselineRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RegisterDefaultPatchBaselineResponse
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
     * @param SearchInventoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SearchInventoryResponse
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
     * @param SetServiceSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetServiceSettingsResponse
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
     * @param StartExecutionRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StartExecutionResponse
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
     * @param TagResourcesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * @param TriggerExecutionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TriggerExecutionResponse
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
     * @param UntagResourcesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
     * @param UpdateApplicationRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateApplicationShrinkRequest([]);
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
     * @param UpdateApplicationGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateApplicationGroupResponse
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
     * @param UpdateExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateExecutionResponse
     */
    public function updateExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
     * @param UpdateOpsItemRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateOpsItemResponse
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
     * @param UpdateParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateParameterResponse
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
     * @param UpdatePatchBaselineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePatchBaselineResponse
     */
    public function updatePatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->approvalRules)) {
            $query['ApprovalRules'] = $request->approvalRules;
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
     * @param UpdateSecretParameterRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSecretParameterResponse
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
     * @param UpdateStateConfigurationRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateStateConfigurationResponse
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
     * @param UpdateTemplateRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
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
     * @param ValidateTemplateContentRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ValidateTemplateContentResponse
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
