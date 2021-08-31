<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateHostGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateResourceMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSshKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateVariableGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListResourceMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ResetSshKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RetryPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\SkipPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StartPipelineRunRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\StartPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateHostGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateResourceMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateVariableGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateVariableGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RetryPipelineJobRunResponse::fromMap($this->doROARequest('RetryPipelineJobRun', '2021-06-25', 'HTTPS', 'PUT', 'AK', '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/jobs/' . $jobId . '', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListResourceMembersResponse::fromMap($this->doROARequest('ListResourceMembers', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/' . $resourceType . '/' . $resourceId . '/members', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetHostGroupResponse::fromMap($this->doROARequest('GetHostGroup', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/hostGroups/' . $id . '', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetVariableGroupResponse::fromMap($this->doROARequest('GetVariableGroup', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/variableGroups/' . $id . '', 'json', $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->pipelineName)) {
            @$query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->creatorAccountIds)) {
            @$query['creatorAccountIds'] = $request->creatorAccountIds;
        }
        if (!Utils::isUnset($request->executeAccountIds)) {
            @$query['executeAccountIds'] = $request->executeAccountIds;
        }
        if (!Utils::isUnset($request->statusList)) {
            @$query['statusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            @$query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->createEndTime)) {
            @$query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->executeStartTime)) {
            @$query['executeStartTime'] = $request->executeStartTime;
        }
        if (!Utils::isUnset($request->executeEndTime)) {
            @$query['executeEndTime'] = $request->executeEndTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            @$query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListPipelinesResponse::fromMap($this->doROARequest('ListPipelines', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/pipelines', 'json', $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->roleName)) {
            @$body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateResourceMemberResponse::fromMap($this->doROARequestWithForm('UpdateResourceMember', '2021-06-25', 'HTTPS', 'PUT', 'AK', '/organization/' . $organizationId . '/' . $resourceType . '/' . $resourceId . '/members/' . $accountId . '', 'json', $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->variables)) {
            @$body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateVariableGroupResponse::fromMap($this->doROARequestWithForm('UpdateVariableGroup', '2021-06-25', 'HTTPS', 'PUT', 'AK', '/organization/' . $organizationId . '/variableGroups/' . $id . '', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteResourceMemberResponse::fromMap($this->doROARequest('DeleteResourceMember', '2021-06-25', 'HTTPS', 'DELETE', 'AK', '/organization/' . $organizationId . '/' . $resourceType . '/' . $resourceId . '/members/' . $accountId . '', 'json', $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            @$query['ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            @$query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->createEndTime)) {
            @$query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->creatorAccountIds)) {
            @$query['creatorAccountIds'] = $request->creatorAccountIds;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            @$query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->pageSort)) {
            @$query['pageSort'] = $request->pageSort;
        }
        if (!Utils::isUnset($request->pageOrder)) {
            @$query['pageOrder'] = $request->pageOrder;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListHostGroupsResponse::fromMap($this->doROARequest('ListHostGroups', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/hostGroups', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ResetSshKeyResponse::fromMap($this->doROARequest('ResetSshKey', '2021-06-25', 'HTTPS', 'PUT', 'AK', '/organization/' . $organizationId . '/sshKey', 'json', $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->sericeConnectionType)) {
            @$query['sericeConnectionType'] = $request->sericeConnectionType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListServiceConnectionsResponse::fromMap($this->doROARequest('ListServiceConnections', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/serviceConnections', 'json', $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->type)) {
            @$body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->envId)) {
            @$body['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceConnectionId)) {
            @$body['serviceConnectionId'] = $request->serviceConnectionId;
        }
        if (!Utils::isUnset($request->tagIds)) {
            @$body['tagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->ecsType)) {
            @$body['ecsType'] = $request->ecsType;
        }
        if (!Utils::isUnset($request->ecsLabelKey)) {
            @$body['ecsLabelKey'] = $request->ecsLabelKey;
        }
        if (!Utils::isUnset($request->ecsLabelValue)) {
            @$body['ecsLabelValue'] = $request->ecsLabelValue;
        }
        if (!Utils::isUnset($request->aliyunRegion)) {
            @$body['aliyunRegion'] = $request->aliyunRegion;
        }
        if (!Utils::isUnset($request->machineInfos)) {
            @$body['machineInfos'] = $request->machineInfos;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateHostGroupResponse::fromMap($this->doROARequestWithForm('CreateHostGroup', '2021-06-25', 'HTTPS', 'POST', 'AK', '/organization/' . $organizationId . '/hostGroups', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StopPipelineRunResponse::fromMap($this->doROARequest('StopPipelineRun', '2021-06-25', 'HTTPS', 'PUT', 'AK', '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/stop', 'json', $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->type)) {
            @$body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->envId)) {
            @$body['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceConnectionId)) {
            @$body['serviceConnectionId'] = $request->serviceConnectionId;
        }
        if (!Utils::isUnset($request->tagIds)) {
            @$body['tagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->ecsType)) {
            @$body['ecsType'] = $request->ecsType;
        }
        if (!Utils::isUnset($request->ecsLabelKey)) {
            @$body['ecsLabelKey'] = $request->ecsLabelKey;
        }
        if (!Utils::isUnset($request->ecsLabelValue)) {
            @$body['ecsLabelValue'] = $request->ecsLabelValue;
        }
        if (!Utils::isUnset($request->aliyunRegion)) {
            @$body['aliyunRegion'] = $request->aliyunRegion;
        }
        if (!Utils::isUnset($request->machineInfos)) {
            @$body['machineInfos'] = $request->machineInfos;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateHostGroupResponse::fromMap($this->doROARequestWithForm('UpdateHostGroup', '2021-06-25', 'HTTPS', 'PUT', 'AK', '/organization/' . $organizationId . '/hostGroups/' . $id . '', 'json', $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            @$body['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->roleName)) {
            @$body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateResourceMemberResponse::fromMap($this->doROARequestWithForm('CreateResourceMember', '2021-06-25', 'HTTPS', 'POST', 'AK', '/organization/' . $organizationId . '/' . $resourceType . '/' . $resourceId . '/members', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return SkipPipelineJobRunResponse::fromMap($this->doROARequest('SkipPipelineJobRun', '2021-06-25', 'HTTPS', 'PUT', 'AK', '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/jobs/' . $jobId . '/skip', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StopPipelineJobRunResponse::fromMap($this->doROARequest('StopPipelineJobRun', '2021-06-25', 'HTTPS', 'PUT', 'AK', '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '/jobs/' . $jobId . '/stop', 'json', $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->params)) {
            @$body['params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return StartPipelineRunResponse::fromMap($this->doROARequestWithForm('StartPipelineRun', '2021-06-25', 'HTTPS', 'POST', 'AK', '/organizations/' . $organizationId . '/pipelines/' . $pipelineId . '/run', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetPipelineRunResponse::fromMap($this->doROARequest('GetPipelineRun', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns/' . $pipelineRunId . '', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetPipelineResponse::fromMap($this->doROARequest('GetPipeline', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '', 'json', $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->variables)) {
            @$body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateVariableGroupResponse::fromMap($this->doROARequestWithForm('CreateVariableGroup', '2021-06-25', 'HTTPS', 'POST', 'AK', '/organization/' . $organizationId . '/variableGroups', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteVariableGroupResponse::fromMap($this->doROARequest('DeleteVariableGroup', '2021-06-25', 'HTTPS', 'DELETE', 'AK', '/organization/' . $organizationId . '/variableGroups/' . $id . '', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateSshKeyResponse::fromMap($this->doROARequest('CreateSshKey', '2021-06-25', 'HTTPS', 'POST', 'AK', '/organization/' . $organizationId . '/sshKey', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteHostGroupResponse::fromMap($this->doROARequest('DeleteHostGroup', '2021-06-25', 'HTTPS', 'DELETE', 'AK', '/organization/' . $organizationId . '/hostGroups/' . $id . '', 'json', $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->pageSort)) {
            @$query['pageSort'] = $request->pageSort;
        }
        if (!Utils::isUnset($request->pageOrder)) {
            @$query['pageOrder'] = $request->pageOrder;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            @$query['maxResults'] = $request->maxResults;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListVariableGroupsResponse::fromMap($this->doROARequest('ListVariableGroups', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/variableGroups', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeletePipelineResponse::fromMap($this->doROARequest('DeletePipeline', '2021-06-25', 'HTTPS', 'DELETE', 'AK', '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '', 'json', $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->maxResults)) {
            @$query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->triggerMode)) {
            @$query['triggerMode'] = $request->triggerMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListPipelineRunsResponse::fromMap($this->doROARequest('ListPipelineRuns', '2021-06-25', 'HTTPS', 'GET', 'AK', '/organization/' . $organizationId . '/pipelines/' . $pipelineId . '/pipelineRuns', 'json', $req, $runtime));
    }
}
