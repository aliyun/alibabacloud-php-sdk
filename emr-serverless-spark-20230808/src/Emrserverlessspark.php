<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\AddMembersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\AddMembersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSqlStatementResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GrantRoleToUsersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GrantRoleToUsersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\TerminateSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\TerminateSqlStatementResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Emrserverlessspark extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emr-serverless-spark', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Adds a RAM user or RAM role to a workspace as a member.
     *  *
     * @param AddMembersRequest $request AddMembersRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMembersResponse AddMembersResponse
     */
    public function addMembersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->memberArns)) {
            $body['memberArns'] = $request->memberArns;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddMembers',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/auth/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a RAM user or RAM role to a workspace as a member.
     *  *
     * @param AddMembersRequest $request AddMembersRequest
     *
     * @return AddMembersResponse AddMembersResponse
     */
    public function addMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Terminates a Spark job.
     *  *
     * @param string              $workspaceId
     * @param string              $jobRunId
     * @param CancelJobRunRequest $request     CancelJobRunRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return CancelJobRunResponse CancelJobRunResponse
     */
    public function cancelJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelJobRun',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/jobRuns/' . OpenApiUtilClient::getEncodeParam($jobRunId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Terminates a Spark job.
     *  *
     * @param string              $workspaceId
     * @param string              $jobRunId
     * @param CancelJobRunRequest $request     CancelJobRunRequest
     *
     * @return CancelJobRunResponse CancelJobRunResponse
     */
    public function cancelJobRun($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an SQL query task.
     *  *
     * @param string                    $workspaceId
     * @param CreateSqlStatementRequest $request     CreateSqlStatementRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateSqlStatementResponse CreateSqlStatementResponse
     */
    public function createSqlStatementWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->codeContent)) {
            $body['codeContent'] = $request->codeContent;
        }
        if (!Utils::isUnset($request->defaultCatalog)) {
            $body['defaultCatalog'] = $request->defaultCatalog;
        }
        if (!Utils::isUnset($request->defaultDatabase)) {
            $body['defaultDatabase'] = $request->defaultDatabase;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->sqlComputeId)) {
            $body['sqlComputeId'] = $request->sqlComputeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSqlStatement',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/interactive/v1/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/statement',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an SQL query task.
     *  *
     * @param string                    $workspaceId
     * @param CreateSqlStatementRequest $request     CreateSqlStatementRequest
     *
     * @return CreateSqlStatementResponse CreateSqlStatementResponse
     */
    public function createSqlStatement($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSqlStatementWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary Obtain the job details.
     *  *
     * @param string           $workspaceId
     * @param string           $jobRunId
     * @param GetJobRunRequest $request     GetJobRunRequest
     * @param string[]         $headers     map
     * @param RuntimeOptions   $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetJobRunResponse GetJobRunResponse
     */
    public function getJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobRun',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/jobRuns/' . OpenApiUtilClient::getEncodeParam($jobRunId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtain the job details.
     *  *
     * @param string           $workspaceId
     * @param string           $jobRunId
     * @param GetJobRunRequest $request     GetJobRunRequest
     *
     * @return GetJobRunResponse GetJobRunResponse
     */
    public function getJobRun($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询SessionCluster集群
     *  *
     * @param string                   $workspaceId
     * @param string                   $sessionClusterId
     * @param GetSessionClusterRequest $request          GetSessionClusterRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetSessionClusterResponse GetSessionClusterResponse
     */
    public function getSessionClusterWithOptions($workspaceId, $sessionClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSessionCluster',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/sessionClusters/' . OpenApiUtilClient::getEncodeParam($sessionClusterId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询SessionCluster集群
     *  *
     * @param string                   $workspaceId
     * @param string                   $sessionClusterId
     * @param GetSessionClusterRequest $request          GetSessionClusterRequest
     *
     * @return GetSessionClusterResponse GetSessionClusterResponse
     */
    public function getSessionCluster($workspaceId, $sessionClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSessionClusterWithOptions($workspaceId, $sessionClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the status of an SQL query task.
     *  *
     * @param string                 $workspaceId
     * @param string                 $statementId
     * @param GetSqlStatementRequest $request     GetSqlStatementRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetSqlStatementResponse GetSqlStatementResponse
     */
    public function getSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSqlStatement',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/interactive/v1/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/statement/' . OpenApiUtilClient::getEncodeParam($statementId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of an SQL query task.
     *  *
     * @param string                 $workspaceId
     * @param string                 $statementId
     * @param GetSqlStatementRequest $request     GetSqlStatementRequest
     *
     * @return GetSqlStatementResponse GetSqlStatementResponse
     */
    public function getSqlStatement($workspaceId, $statementId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime);
    }

    /**
     * @summary Assigns a specified role to users.
     *  *
     * @param GrantRoleToUsersRequest $request GrantRoleToUsersRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantRoleToUsersResponse GrantRoleToUsersResponse
     */
    public function grantRoleToUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->roleArn)) {
            $body['roleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->userArns)) {
            $body['userArns'] = $request->userArns;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantRoleToUsers',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/auth/roles/grant',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GrantRoleToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Assigns a specified role to users.
     *  *
     * @param GrantRoleToUsersRequest $request GrantRoleToUsersRequest
     *
     * @return GrantRoleToUsersResponse GrantRoleToUsersResponse
     */
    public function grantRoleToUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantRoleToUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of Spark jobs.
     *  *
     * @param string             $workspaceId
     * @param ListJobRunsRequest $tmpReq      ListJobRunsRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListJobRunsResponse ListJobRunsResponse
     */
    public function listJobRunsWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListJobRunsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->endTime)) {
            $request->endTimeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->endTime, 'endTime', 'json');
        }
        if (!Utils::isUnset($tmpReq->startTime)) {
            $request->startTimeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->startTime, 'startTime', 'json');
        }
        if (!Utils::isUnset($tmpReq->states)) {
            $request->statesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->states, 'states', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->creator)) {
            $query['creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->endTimeShrink)) {
            $query['endTime'] = $request->endTimeShrink;
        }
        if (!Utils::isUnset($request->jobRunDeploymentId)) {
            $query['jobRunDeploymentId'] = $request->jobRunDeploymentId;
        }
        if (!Utils::isUnset($request->jobRunId)) {
            $query['jobRunId'] = $request->jobRunId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceQueueId)) {
            $query['resourceQueueId'] = $request->resourceQueueId;
        }
        if (!Utils::isUnset($request->startTimeShrink)) {
            $query['startTime'] = $request->startTimeShrink;
        }
        if (!Utils::isUnset($request->statesShrink)) {
            $query['states'] = $request->statesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobRuns',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/jobRuns',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Spark jobs.
     *  *
     * @param string             $workspaceId
     * @param ListJobRunsRequest $request     ListJobRunsRequest
     *
     * @return ListJobRunsResponse ListJobRunsResponse
     */
    public function listJobRuns($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobRunsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取日志内容
     *  *
     * @param string                 $workspaceId
     * @param ListLogContentsRequest $request     ListLogContentsRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListLogContentsResponse ListLogContentsResponse
     */
    public function listLogContentsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->length)) {
            $query['length'] = $request->length;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogContents',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/action/listLogContents',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取日志内容
     *  *
     * @param string                 $workspaceId
     * @param ListLogContentsRequest $request     ListLogContentsRequest
     *
     * @return ListLogContentsResponse ListLogContentsResponse
     */
    public function listLogContents($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogContentsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the list of published versions of E-MapReduce (EMR) Serverless Spark.
     *  *
     * @param ListReleaseVersionsRequest $request ListReleaseVersionsRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListReleaseVersionsResponse ListReleaseVersionsResponse
     */
    public function listReleaseVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseType)) {
            $query['releaseType'] = $request->releaseType;
        }
        if (!Utils::isUnset($request->releaseVersion)) {
            $query['releaseVersion'] = $request->releaseVersion;
        }
        if (!Utils::isUnset($request->releaseVersionStatus)) {
            $query['releaseVersionStatus'] = $request->releaseVersionStatus;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListReleaseVersions',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/releaseVersions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListReleaseVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of published versions of E-MapReduce (EMR) Serverless Spark.
     *  *
     * @param ListReleaseVersionsRequest $request ListReleaseVersionsRequest
     *
     * @return ListReleaseVersionsResponse ListReleaseVersionsResponse
     */
    public function listReleaseVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReleaseVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of sessions.
     *  *
     * @param string                     $workspaceId
     * @param ListSessionClustersRequest $request     ListSessionClustersRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListSessionClustersResponse ListSessionClustersResponse
     */
    public function listSessionClustersWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->kind)) {
            $query['kind'] = $request->kind;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->queueName)) {
            $query['queueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionClusterId)) {
            $query['sessionClusterId'] = $request->sessionClusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSessionClusters',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/sessionClusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSessionClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of sessions.
     *  *
     * @param string                     $workspaceId
     * @param ListSessionClustersRequest $request     ListSessionClustersRequest
     *
     * @return ListSessionClustersResponse ListSessionClustersResponse
     */
    public function listSessionClusters($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSessionClustersWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查看工作空间队列列表
     *  *
     * @param string                     $workspaceId
     * @param ListWorkspaceQueuesRequest $request     ListWorkspaceQueuesRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListWorkspaceQueuesResponse ListWorkspaceQueuesResponse
     */
    public function listWorkspaceQueuesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environment)) {
            $query['environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaceQueues',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/queues',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspaceQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看工作空间队列列表
     *  *
     * @param string                     $workspaceId
     * @param ListWorkspaceQueuesRequest $request     ListWorkspaceQueuesRequest
     *
     * @return ListWorkspaceQueuesResponse ListWorkspaceQueuesResponse
     */
    public function listWorkspaceQueues($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspaceQueuesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of workspaces.
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of workspaces.
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Starts a Spark job.
     *  *
     * @param string             $workspaceId
     * @param StartJobRunRequest $request     StartJobRunRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return StartJobRunResponse StartJobRunResponse
     */
    public function startJobRunWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->codeType)) {
            $body['codeType'] = $request->codeType;
        }
        if (!Utils::isUnset($request->configurationOverrides)) {
            $body['configurationOverrides'] = $request->configurationOverrides;
        }
        if (!Utils::isUnset($request->displayReleaseVersion)) {
            $body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }
        if (!Utils::isUnset($request->executionTimeoutSeconds)) {
            $body['executionTimeoutSeconds'] = $request->executionTimeoutSeconds;
        }
        if (!Utils::isUnset($request->fusion)) {
            $body['fusion'] = $request->fusion;
        }
        if (!Utils::isUnset($request->jobDriver)) {
            $body['jobDriver'] = $request->jobDriver;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['jobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->releaseVersion)) {
            $body['releaseVersion'] = $request->releaseVersion;
        }
        if (!Utils::isUnset($request->resourceQueueId)) {
            $body['resourceQueueId'] = $request->resourceQueueId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartJobRun',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/jobRuns',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a Spark job.
     *  *
     * @param string             $workspaceId
     * @param StartJobRunRequest $request     StartJobRunRequest
     *
     * @return StartJobRunResponse StartJobRunResponse
     */
    public function startJobRun($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startJobRunWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary Starts a session.
     *  *
     * @param string                     $workspaceId
     * @param StartSessionClusterRequest $request     StartSessionClusterRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return StartSessionClusterResponse StartSessionClusterResponse
     */
    public function startSessionClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->queueName)) {
            $body['queueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->sessionClusterId)) {
            $body['sessionClusterId'] = $request->sessionClusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartSessionCluster',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/sessionClusters/action/startSessionCluster',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a session.
     *  *
     * @param string                     $workspaceId
     * @param StartSessionClusterRequest $request     StartSessionClusterRequest
     *
     * @return StartSessionClusterResponse StartSessionClusterResponse
     */
    public function startSessionCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startSessionClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary Stops a session.
     *  *
     * @param string                    $workspaceId
     * @param StopSessionClusterRequest $request     StopSessionClusterRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return StopSessionClusterResponse StopSessionClusterResponse
     */
    public function stopSessionClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->queueName)) {
            $body['queueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->sessionClusterId)) {
            $body['sessionClusterId'] = $request->sessionClusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopSessionCluster',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/sessionClusters/action/stopSessionCluster',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a session.
     *  *
     * @param string                    $workspaceId
     * @param StopSessionClusterRequest $request     StopSessionClusterRequest
     *
     * @return StopSessionClusterResponse StopSessionClusterResponse
     */
    public function stopSessionCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopSessionClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary Terminates an SQL query task.
     *  *
     * @param string                       $workspaceId
     * @param string                       $statementId
     * @param TerminateSqlStatementRequest $request     TerminateSqlStatementRequest
     * @param string[]                     $headers     map
     * @param RuntimeOptions               $runtime     runtime options for this request RuntimeOptions
     *
     * @return TerminateSqlStatementResponse TerminateSqlStatementResponse
     */
    public function terminateSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TerminateSqlStatement',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/interactive/v1/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/statement/' . OpenApiUtilClient::getEncodeParam($statementId) . '/terminate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TerminateSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Terminates an SQL query task.
     *  *
     * @param string                       $workspaceId
     * @param string                       $statementId
     * @param TerminateSqlStatementRequest $request     TerminateSqlStatementRequest
     *
     * @return TerminateSqlStatementResponse TerminateSqlStatementResponse
     */
    public function terminateSqlStatement($workspaceId, $statementId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->terminateSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime);
    }
}
