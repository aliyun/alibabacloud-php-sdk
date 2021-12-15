<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateHostGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateResourceMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSshKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateVariableGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\FrozenWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetProjectInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListFlowTagGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListResourceMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\LogPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\LogVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\PassPipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RefusePipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ReleaseWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ResetSshKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ResumeVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RetryPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RetryVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\SkipPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\SkipVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StartPipelineRunRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\StartPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateHostGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineBaseInfoRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineBaseInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateResourceMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateVariableGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateVariableGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Devops extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('devops', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string               $organizationId
     * @param CreateFlowTagRequest $request
     *
     * @return CreateFlowTagResponse
     */
    public function createFlowTag($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowTagWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param CreateFlowTagRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowTagResponse
     */
    public function createFlowTagWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $query          = [];
        if (!Utils::isUnset($request->color)) {
            $query['color'] = $request->color;
        }
        if (!Utils::isUnset($request->flowTagGroupId)) {
            $query['flowTagGroupId'] = $request->flowTagGroupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/flow/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param CreateFlowTagGroupRequest $request
     *
     * @return CreateFlowTagGroupResponse
     */
    public function createFlowTagGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowTagGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param CreateFlowTagGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowTagGroupResponse
     */
    public function createFlowTagGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $query          = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/flow/tagGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $organizationId
     * @param CreateHostGroupRequest $request
     *
     * @return CreateHostGroupResponse
     */
    public function createHostGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHostGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $organizationId
     * @param CreateHostGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateHostGroupResponse
     */
    public function createHostGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $body           = [];
        if (!Utils::isUnset($request->aliyunRegion)) {
            $body['aliyunRegion'] = $request->aliyunRegion;
        }
        if (!Utils::isUnset($request->ecsLabelKey)) {
            $body['ecsLabelKey'] = $request->ecsLabelKey;
        }
        if (!Utils::isUnset($request->ecsLabelValue)) {
            $body['ecsLabelValue'] = $request->ecsLabelValue;
        }
        if (!Utils::isUnset($request->ecsType)) {
            $body['ecsType'] = $request->ecsType;
        }
        if (!Utils::isUnset($request->envId)) {
            $body['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->machineInfos)) {
            $body['machineInfos'] = $request->machineInfos;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceConnectionId)) {
            $body['serviceConnectionId'] = $request->serviceConnectionId;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $body['tagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/hostGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param CreateResourceMemberRequest $request
     *
     * @return CreateResourceMemberResponse
     */
    public function createResourceMember($organizationId, $resourceType, $resourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param CreateResourceMemberRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateResourceMemberResponse
     */
    public function createResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $resourceType   = OpenApiUtilClient::getEncodeParam($resourceType);
        $resourceId     = OpenApiUtilClient::getEncodeParam($resourceId);
        $body           = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/' . $resourceType . '/' . $resourceId . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     *
     * @return CreateSshKeyResponse
     */
    public function createSshKey($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSshKeyWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateSshKeyResponse
     */
    public function createSshKeyWithOptions($organizationId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateSshKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/sshKey',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSshKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $organizationId
     * @param CreateVariableGroupRequest $request
     *
     * @return CreateVariableGroupResponse
     */
    public function createVariableGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVariableGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $organizationId
     * @param CreateVariableGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVariableGroupResponse
     */
    public function createVariableGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $body           = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/variableGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeUrl)) {
            $body['codeUrl'] = $request->codeUrl;
        }
        if (!Utils::isUnset($request->codeVersion)) {
            $body['codeVersion'] = $request->codeVersion;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->requestFrom)) {
            $body['requestFrom'] = $request->requestFrom;
        }
        if (!Utils::isUnset($request->resourceIdentifier)) {
            $body['resourceIdentifier'] = $request->resourceIdentifier;
        }
        if (!Utils::isUnset($request->reuse)) {
            $body['reuse'] = $request->reuse;
        }
        if (!Utils::isUnset($request->workspaceTemplate)) {
            $body['workspaceTemplate'] = $request->workspaceTemplate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteFlowTagResponse
     */
    public function deleteFlowTag($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowTagWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFlowTagResponse
     */
    public function deleteFlowTagWithOptions($organizationId, $id, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/flow/tags/' . $id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteFlowTagGroupResponse
     */
    public function deleteFlowTagGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFlowTagGroupResponse
     */
    public function deleteFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/flow/tagGroups/' . $id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteHostGroupResponse
     */
    public function deleteHostGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHostGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHostGroupResponse
     */
    public function deleteHostGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/hostGroups/' . $id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($organizationId, $pipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineWithOptions($organizationId, $pipelineId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($organizationId, $pipelineId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipeline',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $resourceType
     * @param string $resourceId
     * @param string $accountId
     *
     * @return DeleteResourceMemberResponse
     */
    public function deleteResourceMember($organizationId, $resourceType, $resourceId, $accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $resourceType
     * @param string         $resourceId
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceMemberResponse
     */
    public function deleteResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $resourceType   = OpenApiUtilClient::getEncodeParam($resourceType);
        $resourceId     = OpenApiUtilClient::getEncodeParam($resourceId);
        $accountId      = OpenApiUtilClient::getEncodeParam($accountId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/' . $resourceType . '/' . $resourceId . '/members/' . $accountId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteVariableGroupResponse
     */
    public function deleteVariableGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVariableGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteVariableGroupResponse
     */
    public function deleteVariableGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/variableGroups/' . $id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $workspaceId
     *
     * @return FrozenWorkspaceResponse
     */
    public function frozenWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->frozenWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return FrozenWorkspaceResponse
     */
    public function frozenWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $workspaceId = OpenApiUtilClient::getEncodeParam($workspaceId);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'FrozenWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . $workspaceId . '/frozen',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FrozenWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return GetFlowTagGroupResponse
     */
    public function getFlowTagGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFlowTagGroupResponse
     */
    public function getFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/flow/tagGroups/' . $id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return GetHostGroupResponse
     */
    public function getHostGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHostGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHostGroupResponse
     */
    public function getHostGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/hostGroups/' . $id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $accountId
     *
     * @return GetOrganizationMemberResponse
     */
    public function getOrganizationMember($organizationId, $accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrganizationMemberWithOptions($organizationId, $accountId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOrganizationMemberResponse
     */
    public function getOrganizationMemberWithOptions($organizationId, $accountId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $accountId      = OpenApiUtilClient::getEncodeParam($accountId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOrganizationMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/members/' . $accountId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($organizationId, $pipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($organizationId, $pipelineId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($organizationId, $pipelineId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipeline',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRun($organizationId, $pipelineId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $pipelineRunId  = OpenApiUtilClient::getEncodeParam($pipelineRunId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $projectId
     *
     * @return GetProjectInfoResponse
     */
    public function getProjectInfo($organizationId, $projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectInfoWithOptions($organizationId, $projectId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $projectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectInfoResponse
     */
    public function getProjectInfoWithOptions($organizationId, $projectId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $projectId      = OpenApiUtilClient::getEncodeParam($projectId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/project/' . $projectId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return GetVMDeployOrderResponse
     */
    public function getVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetVMDeployOrderResponse
     */
    public function getVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $deployOrderId  = OpenApiUtilClient::getEncodeParam($deployOrderId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/deploy/' . $deployOrderId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return GetVariableGroupResponse
     */
    public function getVariableGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVariableGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetVariableGroupResponse
     */
    public function getVariableGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/variableGroups/' . $id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $workspaceId
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $workspaceId = OpenApiUtilClient::getEncodeParam($workspaceId);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . $workspaceId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     *
     * @return ListFlowTagGroupsResponse
     */
    public function listFlowTagGroups($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowTagGroupsWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListFlowTagGroupsResponse
     */
    public function listFlowTagGroupsWithOptions($organizationId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListFlowTagGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/flow/tagGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowTagGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $organizationId
     * @param ListHostGroupsRequest $request
     *
     * @return ListHostGroupsResponse
     */
    public function listHostGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHostGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                $organizationId
     * @param ListHostGroupsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListHostGroupsResponse
     */
    public function listHostGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $query          = [];
        if (!Utils::isUnset($request->createEndTime)) {
            $query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->creatorAccountIds)) {
            $query['creatorAccountIds'] = $request->creatorAccountIds;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageOrder)) {
            $query['pageOrder'] = $request->pageOrder;
        }
        if (!Utils::isUnset($request->pageSort)) {
            $query['pageSort'] = $request->pageSort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/hostGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $organizationId
     * @param ListOrganizationMembersRequest $request
     *
     * @return ListOrganizationMembersResponse
     */
    public function listOrganizationMembers($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationMembersWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $organizationId
     * @param ListOrganizationMembersRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOrganizationMembersResponse
     */
    public function listOrganizationMembersWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $query          = [];
        if (!Utils::isUnset($request->externUid)) {
            $query['externUid'] = $request->externUid;
        }
        if (!Utils::isUnset($request->joinTimeFrom)) {
            $query['joinTimeFrom'] = $request->joinTimeFrom;
        }
        if (!Utils::isUnset($request->joinTimeTo)) {
            $query['joinTimeTo'] = $request->joinTimeTo;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->organizationMemberName)) {
            $query['organizationMemberName'] = $request->organizationMemberName;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->state)) {
            $query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrganizationMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOrganizationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineRunsRequest $request
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRuns($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineRunsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRunsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $query          = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->triggerMode)) {
            $query['triggerMode'] = $request->triggerMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRuns',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $organizationId
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param ListPipelinesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $query          = [];
        if (!Utils::isUnset($request->createEndTime)) {
            $query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->creatorAccountIds)) {
            $query['creatorAccountIds'] = $request->creatorAccountIds;
        }
        if (!Utils::isUnset($request->executeAccountIds)) {
            $query['executeAccountIds'] = $request->executeAccountIds;
        }
        if (!Utils::isUnset($request->executeEndTime)) {
            $query['executeEndTime'] = $request->executeEndTime;
        }
        if (!Utils::isUnset($request->executeStartTime)) {
            $query['executeStartTime'] = $request->executeStartTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pipelineName)) {
            $query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['statusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelines',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param string                    $projectId
     * @param ListProjectMembersRequest $request
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembers($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectMembersWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param string                    $projectId
     * @param ListProjectMembersRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembersWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $projectId      = OpenApiUtilClient::getEncodeParam($projectId);
        $query          = [];
        if (!Utils::isUnset($request->targetType)) {
            $query['targetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/projects/' . $projectId . '/listMembers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $resourceType
     * @param string $resourceId
     *
     * @return ListResourceMembersResponse
     */
    public function listResourceMembers($organizationId, $resourceType, $resourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceMembersWithOptions($organizationId, $resourceType, $resourceId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $resourceType
     * @param string         $resourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListResourceMembersResponse
     */
    public function listResourceMembersWithOptions($organizationId, $resourceType, $resourceId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $resourceType   = OpenApiUtilClient::getEncodeParam($resourceType);
        $resourceId     = OpenApiUtilClient::getEncodeParam($resourceId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListResourceMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/' . $resourceType . '/' . $resourceId . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $organizationId
     * @param ListServiceConnectionsRequest $request
     *
     * @return ListServiceConnectionsResponse
     */
    public function listServiceConnections($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceConnectionsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $organizationId
     * @param ListServiceConnectionsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListServiceConnectionsResponse
     */
    public function listServiceConnectionsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $query          = [];
        if (!Utils::isUnset($request->sericeConnectionType)) {
            $query['sericeConnectionType'] = $request->sericeConnectionType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceConnections',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/serviceConnections',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param ListVariableGroupsRequest $request
     *
     * @return ListVariableGroupsResponse
     */
    public function listVariableGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVariableGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param ListVariableGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListVariableGroupsResponse
     */
    public function listVariableGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $query          = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageOrder)) {
            $query['pageOrder'] = $request->pageOrder;
        }
        if (!Utils::isUnset($request->pageSort)) {
            $query['pageSort'] = $request->pageSort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVariableGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/variableGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVariableGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListWorkspacesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->statusList)) {
            $request->statusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'statusList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->workspaceTemplateList)) {
            $request->workspaceTemplateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workspaceTemplateList, 'workspaceTemplateList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->statusListShrink)) {
            $query['statusList'] = $request->statusListShrink;
        }
        if (!Utils::isUnset($request->workspaceTemplateListShrink)) {
            $query['workspaceTemplateList'] = $request->workspaceTemplateListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $jobId
     * @param string $pipelineRunId
     *
     * @return LogPipelineJobRunResponse
     */
    public function logPipelineJobRun($organizationId, $pipelineId, $jobId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logPipelineJobRunWithOptions($organizationId, $pipelineId, $jobId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $jobId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return LogPipelineJobRunResponse
     */
    public function logPipelineJobRunWithOptions($organizationId, $pipelineId, $jobId, $pipelineRunId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $jobId          = OpenApiUtilClient::getEncodeParam($jobId);
        $pipelineRunId  = OpenApiUtilClient::getEncodeParam($pipelineRunId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'LogPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipeline/' . $pipelineId . '/pipelineRun/' . $pipelineRunId . '/job/' . $jobId . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LogPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return LogVMDeployMachineResponse
     */
    public function logVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return LogVMDeployMachineResponse
     */
    public function logVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $deployOrderId  = OpenApiUtilClient::getEncodeParam($deployOrderId);
        $machineSn      = OpenApiUtilClient::getEncodeParam($machineSn);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'LogVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/deploy/' . $deployOrderId . '/machine/' . $machineSn . '/log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LogVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return PassPipelineValidateResponse
     */
    public function passPipelineValidate($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->passPipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PassPipelineValidateResponse
     */
    public function passPipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $pipelineRunId  = OpenApiUtilClient::getEncodeParam($pipelineRunId);
        $jobId          = OpenApiUtilClient::getEncodeParam($jobId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PassPipelineValidate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/jobs/' . $jobId . '/pass',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PassPipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return RefusePipelineValidateResponse
     */
    public function refusePipelineValidate($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refusePipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RefusePipelineValidateResponse
     */
    public function refusePipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $pipelineRunId  = OpenApiUtilClient::getEncodeParam($pipelineRunId);
        $jobId          = OpenApiUtilClient::getEncodeParam($jobId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RefusePipelineValidate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/jobs/' . $jobId . '/refuse',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefusePipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $workspaceId
     *
     * @return ReleaseWorkspaceResponse
     */
    public function releaseWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReleaseWorkspaceResponse
     */
    public function releaseWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $workspaceId = OpenApiUtilClient::getEncodeParam($workspaceId);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ReleaseWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . $workspaceId . '/release',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     *
     * @return ResetSshKeyResponse
     */
    public function resetSshKey($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetSshKeyWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResetSshKeyResponse
     */
    public function resetSshKeyWithOptions($organizationId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ResetSshKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/sshKey',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetSshKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return ResumeVMDeployOrderResponse
     */
    public function resumeVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeVMDeployOrderResponse
     */
    public function resumeVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $deployOrderId  = OpenApiUtilClient::getEncodeParam($deployOrderId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ResumeVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/deploy/' . $deployOrderId . '/resume',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return RetryPipelineJobRunResponse
     */
    public function retryPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RetryPipelineJobRunResponse
     */
    public function retryPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $pipelineRunId  = OpenApiUtilClient::getEncodeParam($pipelineRunId);
        $jobId          = OpenApiUtilClient::getEncodeParam($jobId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RetryPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/jobs/' . $jobId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return RetryVMDeployMachineResponse
     */
    public function retryVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RetryVMDeployMachineResponse
     */
    public function retryVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $deployOrderId  = OpenApiUtilClient::getEncodeParam($deployOrderId);
        $machineSn      = OpenApiUtilClient::getEncodeParam($machineSn);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RetryVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/deploy/' . $deployOrderId . '/machine/' . $machineSn . '/retry',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return SkipPipelineJobRunResponse
     */
    public function skipPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->skipPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SkipPipelineJobRunResponse
     */
    public function skipPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $pipelineRunId  = OpenApiUtilClient::getEncodeParam($pipelineRunId);
        $jobId          = OpenApiUtilClient::getEncodeParam($jobId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SkipPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/jobs/' . $jobId . '/skip',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SkipPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return SkipVMDeployMachineResponse
     */
    public function skipVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->skipVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SkipVMDeployMachineResponse
     */
    public function skipVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $deployOrderId  = OpenApiUtilClient::getEncodeParam($deployOrderId);
        $machineSn      = OpenApiUtilClient::getEncodeParam($machineSn);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SkipVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/deploy/' . $deployOrderId . '/machine/' . $machineSn . '/skip',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SkipVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param StartPipelineRunRequest $request
     *
     * @return StartPipelineRunResponse
     */
    public function startPipelineRun($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startPipelineRunWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param StartPipelineRunRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartPipelineRunResponse
     */
    public function startPipelineRunWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $body           = [];
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organizations/' . $organizationId . '/pipelines/' . $pipelineId . '/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return StopPipelineJobRunResponse
     */
    public function stopPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopPipelineJobRunResponse
     */
    public function stopPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $pipelineRunId  = OpenApiUtilClient::getEncodeParam($pipelineRunId);
        $jobId          = OpenApiUtilClient::getEncodeParam($jobId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/jobs/' . $jobId . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     *
     * @return StopPipelineRunResponse
     */
    public function stopPipelineRun($organizationId, $pipelineId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopPipelineRunResponse
     */
    public function stopPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $pipelineRunId  = OpenApiUtilClient::getEncodeParam($pipelineRunId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return StopVMDeployOrderResponse
     */
    public function stopVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopVMDeployOrderResponse
     */
    public function stopVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $deployOrderId  = OpenApiUtilClient::getEncodeParam($deployOrderId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/deploy/' . $deployOrderId . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $organizationId
     * @param string               $id
     * @param UpdateFlowTagRequest $request
     *
     * @return UpdateFlowTagResponse
     */
    public function updateFlowTag($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowTagWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param string               $id
     * @param UpdateFlowTagRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateFlowTagResponse
     */
    public function updateFlowTagWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $query          = [];
        if (!Utils::isUnset($request->color)) {
            $query['color'] = $request->color;
        }
        if (!Utils::isUnset($request->flowTagGroupId)) {
            $query['flowTagGroupId'] = $request->flowTagGroupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/flow/tags/' . $id . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param string                    $id
     * @param UpdateFlowTagGroupRequest $request
     *
     * @return UpdateFlowTagGroupResponse
     */
    public function updateFlowTagGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowTagGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param string                    $id
     * @param UpdateFlowTagGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateFlowTagGroupResponse
     */
    public function updateFlowTagGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $query          = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/flow/tagGroups/' . $id . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $organizationId
     * @param string                 $id
     * @param UpdateHostGroupRequest $request
     *
     * @return UpdateHostGroupResponse
     */
    public function updateHostGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHostGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string                 $organizationId
     * @param string                 $id
     * @param UpdateHostGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateHostGroupResponse
     */
    public function updateHostGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $body           = [];
        if (!Utils::isUnset($request->aliyunRegion)) {
            $body['aliyunRegion'] = $request->aliyunRegion;
        }
        if (!Utils::isUnset($request->ecsLabelKey)) {
            $body['ecsLabelKey'] = $request->ecsLabelKey;
        }
        if (!Utils::isUnset($request->ecsLabelValue)) {
            $body['ecsLabelValue'] = $request->ecsLabelValue;
        }
        if (!Utils::isUnset($request->ecsType)) {
            $body['ecsType'] = $request->ecsType;
        }
        if (!Utils::isUnset($request->envId)) {
            $body['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->machineInfos)) {
            $body['machineInfos'] = $request->machineInfos;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceConnectionId)) {
            $body['serviceConnectionId'] = $request->serviceConnectionId;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $body['tagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/hostGroups/' . $id . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $organizationId
     * @param string                        $pipelineId
     * @param UpdatePipelineBaseInfoRequest $request
     *
     * @return UpdatePipelineBaseInfoResponse
     */
    public function updatePipelineBaseInfo($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineBaseInfoWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $organizationId
     * @param string                        $pipelineId
     * @param UpdatePipelineBaseInfoRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePipelineBaseInfoResponse
     */
    public function updatePipelineBaseInfoWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $pipelineId     = OpenApiUtilClient::getEncodeParam($pipelineId);
        $query          = [];
        if (!Utils::isUnset($request->envId)) {
            $query['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->pipelineName)) {
            $query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['tagList'] = $request->tagList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineBaseInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/baseInfo',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param string                      $accountId
     * @param UpdateResourceMemberRequest $request
     *
     * @return UpdateResourceMemberResponse
     */
    public function updateResourceMember($organizationId, $resourceType, $resourceId, $accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param string                      $accountId
     * @param UpdateResourceMemberRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateResourceMemberResponse
     */
    public function updateResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $resourceType   = OpenApiUtilClient::getEncodeParam($resourceType);
        $resourceId     = OpenApiUtilClient::getEncodeParam($resourceId);
        $accountId      = OpenApiUtilClient::getEncodeParam($accountId);
        $body           = [];
        if (!Utils::isUnset($request->roleName)) {
            $body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/' . $resourceType . '/' . $resourceId . '/members/' . $accountId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $organizationId
     * @param string                     $id
     * @param UpdateVariableGroupRequest $request
     *
     * @return UpdateVariableGroupResponse
     */
    public function updateVariableGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVariableGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string                     $organizationId
     * @param string                     $id
     * @param UpdateVariableGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateVariableGroupResponse
     */
    public function updateVariableGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $organizationId = OpenApiUtilClient::getEncodeParam($organizationId);
        $id             = OpenApiUtilClient::getEncodeParam($id);
        $body           = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . $organizationId . '/variableGroups/' . $id . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
