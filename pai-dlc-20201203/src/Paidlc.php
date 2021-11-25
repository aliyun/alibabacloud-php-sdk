<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\BatchGetJobsStatisticsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\BatchGetJobsStatisticsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateCodeSourceRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateCodeSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteCodeSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetAuthorizationResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetCodeSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetDataSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobEventsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobEventsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobMetricsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobMetricsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobsStatisticsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobsStatisticsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodEventsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodEventsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodLogsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodLogsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetSecurityGroupResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetSwitchResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTokenRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTokenResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetUserAuthorizationResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetVpcResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobDispatchQueryRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobDispatchQueryResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobDispatchQueryShrinkRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobDispatchSubmitRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobDispatchSubmitResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListCodeSourcesRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListCodeSourcesResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListEcsSpecsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListEcsSpecsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListImagesRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListImagesResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsShrinkRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSecurityGroupsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSecurityGroupsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSwitchesRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSwitchesResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListTensorboardsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListTensorboardsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListVpcsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListVpcsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StartTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StartTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateTensorboardResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Paidlc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pai-dlc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BatchGetJobsStatisticsRequest $request
     *
     * @return BatchGetJobsStatisticsResponse
     */
    public function batchGetJobsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetJobsStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchGetJobsStatisticsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return BatchGetJobsStatisticsResponse
     */
    public function batchGetJobsStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceIds)) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return BatchGetJobsStatisticsResponse::fromMap($this->doROARequest('BatchGetJobsStatistics', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/batch/statistics/jobs', 'json', $req, $runtime));
    }

    /**
     * @param CreateCodeSourceRequest $request
     *
     * @return CreateCodeSourceResponse
     */
    public function createCodeSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCodeSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateCodeSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCodeSourceResponse
     */
    public function createCodeSourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeBranch)) {
            @$body['CodeBranch'] = $request->codeBranch;
        }
        if (!Utils::isUnset($request->codeRepo)) {
            @$body['CodeRepo'] = $request->codeRepo;
        }
        if (!Utils::isUnset($request->codeRepoAccessToken)) {
            @$body['CodeRepoAccessToken'] = $request->codeRepoAccessToken;
        }
        if (!Utils::isUnset($request->codeRepoUserName)) {
            @$body['CodeRepoUserName'] = $request->codeRepoUserName;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            @$body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->mountPath)) {
            @$body['MountPath'] = $request->mountPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateCodeSourceResponse::fromMap($this->doROARequest('CreateCodeSource', '2020-12-03', 'HTTPS', 'POST', 'AK', '/api/v1/codesources', 'json', $req, $runtime));
    }

    /**
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateDataSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataSourceType)) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            @$body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endpoint)) {
            @$body['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            @$body['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountPath)) {
            @$body['MountPath'] = $request->mountPath;
        }
        if (!Utils::isUnset($request->options)) {
            @$body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->path)) {
            @$body['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateDataSourceResponse::fromMap($this->doROARequest('CreateDataSource', '2020-12-03', 'HTTPS', 'POST', 'AK', '/api/v1/datasources', 'json', $req, $runtime));
    }

    /**
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeSource)) {
            @$body['CodeSource'] = $request->codeSource;
        }
        if (!Utils::isUnset($request->dataSources)) {
            @$body['DataSources'] = $request->dataSources;
        }
        if (!Utils::isUnset($request->displayName)) {
            @$body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->elasticSpec)) {
            @$body['ElasticSpec'] = $request->elasticSpec;
        }
        if (!Utils::isUnset($request->envs)) {
            @$body['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->jobMaxRunningTimeMinutes)) {
            @$body['JobMaxRunningTimeMinutes'] = $request->jobMaxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->jobSpecs)) {
            @$body['JobSpecs'] = $request->jobSpecs;
        }
        if (!Utils::isUnset($request->jobType)) {
            @$body['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->priority)) {
            @$body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceId)) {
            @$body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->settings)) {
            @$body['Settings'] = $request->settings;
        }
        if (!Utils::isUnset($request->thirdpartyLibDir)) {
            @$body['ThirdpartyLibDir'] = $request->thirdpartyLibDir;
        }
        if (!Utils::isUnset($request->thirdpartyLibs)) {
            @$body['ThirdpartyLibs'] = $request->thirdpartyLibs;
        }
        if (!Utils::isUnset($request->userCommand)) {
            @$body['UserCommand'] = $request->userCommand;
        }
        if (!Utils::isUnset($request->userVpc)) {
            @$body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateJobResponse::fromMap($this->doROARequest('CreateJob', '2020-12-03', 'HTTPS', 'POST', 'AK', '/api/v1/jobs', 'json', $req, $runtime));
    }

    /**
     * @param CreateTensorboardRequest $request
     *
     * @return CreateTensorboardResponse
     */
    public function createTensorboard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTensorboardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTensorboardResponse
     */
    public function createTensorboardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->dataSources)) {
            @$body['DataSources'] = $request->dataSources;
        }
        if (!Utils::isUnset($request->displayName)) {
            @$body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->jobId)) {
            @$body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maxRunningTimeMinutes)) {
            @$body['MaxRunningTimeMinutes'] = $request->maxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->summaryPath)) {
            @$body['SummaryPath'] = $request->summaryPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateTensorboardResponse::fromMap($this->doROARequest('CreateTensorboard', '2020-12-03', 'HTTPS', 'POST', 'AK', '/api/v1/tensorboards', 'json', $req, $runtime));
    }

    /**
     * @param string $CodeSourceId
     *
     * @return DeleteCodeSourceResponse
     */
    public function deleteCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * @param string         $CodeSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCodeSourceResponse
     */
    public function deleteCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $CodeSourceId = OpenApiUtilClient::getEncodeParam($CodeSourceId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteCodeSourceResponse::fromMap($this->doROARequest('DeleteCodeSource', '2020-12-03', 'HTTPS', 'DELETE', 'AK', '/api/v1/codesources/' . $CodeSourceId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $DataSourceId
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($DataSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataSourceWithOptions($DataSourceId, $headers, $runtime);
    }

    /**
     * @param string         $DataSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($DataSourceId, $headers, $runtime)
    {
        $DataSourceId = OpenApiUtilClient::getEncodeParam($DataSourceId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteDataSourceResponse::fromMap($this->doROARequest('DeleteDataSource', '2020-12-03', 'HTTPS', 'DELETE', 'AK', '/api/v1/datasources/' . $DataSourceId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $JobId
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($JobId, $headers, $runtime)
    {
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteJobResponse::fromMap($this->doROARequest('DeleteJob', '2020-12-03', 'HTTPS', 'DELETE', 'AK', '/api/v1/jobs/' . $JobId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                   $TensorboardId
     * @param DeleteTensorboardRequest $request
     *
     * @return DeleteTensorboardResponse
     */
    public function deleteTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $TensorboardId
     * @param DeleteTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteTensorboardResponse
     */
    public function deleteTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteTensorboardResponse::fromMap($this->doROARequest('DeleteTensorboard', '2020-12-03', 'HTTPS', 'DELETE', 'AK', '/api/v1/tensorboards/' . $TensorboardId . '', 'json', $req, $runtime));
    }

    /**
     * @return GetAuthorizationResponse
     */
    public function getAuthorization()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAuthorizationWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAuthorizationResponse
     */
    public function getAuthorizationWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetAuthorizationResponse::fromMap($this->doROARequest('GetAuthorization', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/authorization', 'json', $req, $runtime));
    }

    /**
     * @param string $CodeSourceId
     *
     * @return GetCodeSourceResponse
     */
    public function getCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * @param string         $CodeSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCodeSourceResponse
     */
    public function getCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $CodeSourceId = OpenApiUtilClient::getEncodeParam($CodeSourceId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetCodeSourceResponse::fromMap($this->doROARequest('GetCodeSource', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/codesources/' . $CodeSourceId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $DataSourceId
     *
     * @return GetDataSourceResponse
     */
    public function getDataSource($DataSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataSourceWithOptions($DataSourceId, $headers, $runtime);
    }

    /**
     * @param string         $DataSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDataSourceResponse
     */
    public function getDataSourceWithOptions($DataSourceId, $headers, $runtime)
    {
        $DataSourceId = OpenApiUtilClient::getEncodeParam($DataSourceId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetDataSourceResponse::fromMap($this->doROARequest('GetDataSource', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/datasources/' . $DataSourceId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $JobId
     *
     * @return GetJobResponse
     */
    public function getJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($JobId, $headers, $runtime)
    {
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetJobResponse::fromMap($this->doROARequest('GetJob', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/jobs/' . $JobId . '', 'json', $req, $runtime));
    }

    /**
     * @param string              $JobId
     * @param GetJobEventsRequest $request
     *
     * @return GetJobEventsResponse
     */
    public function getJobEvents($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobEventsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @param string              $JobId
     * @param GetJobEventsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobEventsResponse
     */
    public function getJobEventsWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxEventsNum)) {
            @$query['MaxEventsNum'] = $request->maxEventsNum;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetJobEventsResponse::fromMap($this->doROARequest('GetJobEvents', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/jobs/' . $JobId . '/events', 'json', $req, $runtime));
    }

    /**
     * @param string               $JobId
     * @param GetJobMetricsRequest $request
     *
     * @return GetJobMetricsResponse
     */
    public function getJobMetrics($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobMetricsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @param string               $JobId
     * @param GetJobMetricsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetJobMetricsResponse
     */
    public function getJobMetricsWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            @$query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeStep)) {
            @$query['TimeStep'] = $request->timeStep;
        }
        if (!Utils::isUnset($request->token)) {
            @$query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetJobMetricsResponse::fromMap($this->doROARequest('GetJobMetrics', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/jobs/' . $JobId . '/metrics', 'json', $req, $runtime));
    }

    /**
     * @param GetJobsStatisticsRequest $request
     *
     * @return GetJobsStatisticsResponse
     */
    public function getJobsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobsStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetJobsStatisticsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetJobsStatisticsResponse
     */
    public function getJobsStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetJobsStatisticsResponse::fromMap($this->doROARequest('GetJobsStatistics', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/statistics/jobs', 'json', $req, $runtime));
    }

    /**
     * @param string              $JobId
     * @param string              $PodId
     * @param GetPodEventsRequest $request
     *
     * @return GetPodEventsResponse
     */
    public function getPodEvents($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPodEventsWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * @param string              $JobId
     * @param string              $PodId
     * @param GetPodEventsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetPodEventsResponse
     */
    public function getPodEventsWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $PodId = OpenApiUtilClient::getEncodeParam($PodId);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxEventsNum)) {
            @$query['MaxEventsNum'] = $request->maxEventsNum;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetPodEventsResponse::fromMap($this->doROARequest('GetPodEvents', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/jobs/' . $JobId . '/pods/' . $PodId . '/events', 'json', $req, $runtime));
    }

    /**
     * @param string            $JobId
     * @param string            $PodId
     * @param GetPodLogsRequest $request
     *
     * @return GetPodLogsResponse
     */
    public function getPodLogs($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPodLogsWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * @param string            $JobId
     * @param string            $PodId
     * @param GetPodLogsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetPodLogsResponse
     */
    public function getPodLogsWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $PodId = OpenApiUtilClient::getEncodeParam($PodId);
        $query = [];
        if (!Utils::isUnset($request->downloadToFile)) {
            @$query['DownloadToFile'] = $request->downloadToFile;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxLines)) {
            @$query['MaxLines'] = $request->maxLines;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetPodLogsResponse::fromMap($this->doROARequest('GetPodLogs', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/jobs/' . $JobId . '/pods/' . $PodId . '/logs', 'json', $req, $runtime));
    }

    /**
     * @param string $SecurityGroupId
     *
     * @return GetSecurityGroupResponse
     */
    public function getSecurityGroup($SecurityGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSecurityGroupWithOptions($SecurityGroupId, $headers, $runtime);
    }

    /**
     * @param string         $SecurityGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSecurityGroupResponse
     */
    public function getSecurityGroupWithOptions($SecurityGroupId, $headers, $runtime)
    {
        $SecurityGroupId = OpenApiUtilClient::getEncodeParam($SecurityGroupId);
        $req             = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetSecurityGroupResponse::fromMap($this->doROARequest('GetSecurityGroup', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/securitygroups/' . $SecurityGroupId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $SwitchId
     *
     * @return GetSwitchResponse
     */
    public function getSwitch($SwitchId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSwitchWithOptions($SwitchId, $headers, $runtime);
    }

    /**
     * @param string         $SwitchId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSwitchResponse
     */
    public function getSwitchWithOptions($SwitchId, $headers, $runtime)
    {
        $SwitchId = OpenApiUtilClient::getEncodeParam($SwitchId);
        $req      = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetSwitchResponse::fromMap($this->doROARequest('GetSwitch', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/switches/' . $SwitchId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                $TensorboardId
     * @param GetTensorboardRequest $request
     *
     * @return GetTensorboardResponse
     */
    public function getTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                $TensorboardId
     * @param GetTensorboardRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetTensorboardResponse
     */
    public function getTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->jodId)) {
            @$query['JodId'] = $request->jodId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetTensorboardResponse::fromMap($this->doROARequest('GetTensorboard', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/tensorboards/' . $TensorboardId . '', 'json', $req, $runtime));
    }

    /**
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expireTime)) {
            @$query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->targetId)) {
            @$query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            @$query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetTokenResponse::fromMap($this->doROARequest('GetToken', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/tokens', 'json', $req, $runtime));
    }

    /**
     * @param string $UserId
     *
     * @return GetUserAuthorizationResponse
     */
    public function getUserAuthorization($UserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserAuthorizationWithOptions($UserId, $headers, $runtime);
    }

    /**
     * @param string         $UserId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserAuthorizationResponse
     */
    public function getUserAuthorizationWithOptions($UserId, $headers, $runtime)
    {
        $UserId = OpenApiUtilClient::getEncodeParam($UserId);
        $req    = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetUserAuthorizationResponse::fromMap($this->doROARequest('GetUserAuthorization', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/users/' . $UserId . '/authorization', 'json', $req, $runtime));
    }

    /**
     * @param string $VpcId
     *
     * @return GetVpcResponse
     */
    public function getVpc($VpcId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVpcWithOptions($VpcId, $headers, $runtime);
    }

    /**
     * @param string         $VpcId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetVpcResponse
     */
    public function getVpcWithOptions($VpcId, $headers, $runtime)
    {
        $VpcId = OpenApiUtilClient::getEncodeParam($VpcId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetVpcResponse::fromMap($this->doROARequest('GetVpc', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/vpcs/' . $VpcId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $WorkspaceId
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($WorkspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($WorkspaceId, $headers, $runtime);
    }

    /**
     * @param string         $WorkspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($WorkspaceId, $headers, $runtime)
    {
        $WorkspaceId = OpenApiUtilClient::getEncodeParam($WorkspaceId);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetWorkspaceResponse::fromMap($this->doROARequest('GetWorkspace', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/workspaces/' . $WorkspaceId . '', 'json', $req, $runtime));
    }

    /**
     * @param JobDispatchQueryRequest $request
     *
     * @return JobDispatchQueryResponse
     */
    public function jobDispatchQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->jobDispatchQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param JobDispatchQueryRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return JobDispatchQueryResponse
     */
    public function jobDispatchQueryWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new JobDispatchQueryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->properties)) {
            $request->propertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->properties, 'Properties', 'json');
        }
        if (!Utils::isUnset($tmpReq->settings)) {
            $request->settingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->settings, 'Settings', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->algoName)) {
            @$query['AlgoName'] = $request->algoName;
        }
        if (!Utils::isUnset($request->projectName)) {
            @$query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->propertiesShrink)) {
            @$query['Properties'] = $request->propertiesShrink;
        }
        if (!Utils::isUnset($request->settingsShrink)) {
            @$query['Settings'] = $request->settingsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return JobDispatchQueryResponse::fromMap($this->doROARequest('JobDispatchQuery', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/jobdispatch', 'json', $req, $runtime));
    }

    /**
     * @param JobDispatchSubmitRequest $request
     *
     * @return JobDispatchSubmitResponse
     */
    public function jobDispatchSubmit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->jobDispatchSubmitWithOptions($request, $headers, $runtime);
    }

    /**
     * @param JobDispatchSubmitRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return JobDispatchSubmitResponse
     */
    public function jobDispatchSubmitWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->algoName)) {
            @$body['AlgoName'] = $request->algoName;
        }
        if (!Utils::isUnset($request->projectName)) {
            @$body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->properties)) {
            @$body['Properties'] = $request->properties;
        }
        if (!Utils::isUnset($request->settings)) {
            @$body['Settings'] = $request->settings;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return JobDispatchSubmitResponse::fromMap($this->doROARequest('JobDispatchSubmit', '2020-12-03', 'HTTPS', 'POST', 'AK', '/api/v1/jobdispatch', 'json', $req, $runtime));
    }

    /**
     * @param ListCodeSourcesRequest $request
     *
     * @return ListCodeSourcesResponse
     */
    public function listCodeSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCodeSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCodeSourcesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListCodeSourcesResponse
     */
    public function listCodeSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            @$query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListCodeSourcesResponse::fromMap($this->doROARequest('ListCodeSources', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/codesources', 'json', $req, $runtime));
    }

    /**
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDataSourcesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceType)) {
            @$query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->displayName)) {
            @$query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDataSourcesResponse::fromMap($this->doROARequest('ListDataSources', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/datasources', 'json', $req, $runtime));
    }

    /**
     * @param ListEcsSpecsRequest $request
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsSpecsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEcsSpecsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListEcsSpecsResponse::fromMap($this->doROARequest('ListEcsSpecs', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/ecsspecs', 'json', $req, $runtime));
    }

    /**
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListImagesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            @$query['AcceleratorType'] = $request->acceleratorType;
        }
        if (!Utils::isUnset($request->framework)) {
            @$query['Framework'] = $request->framework;
        }
        if (!Utils::isUnset($request->imageProviderType)) {
            @$query['ImageProviderType'] = $request->imageProviderType;
        }
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListImagesResponse::fromMap($this->doROARequest('ListImages', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/images', 'json', $req, $runtime));
    }

    /**
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListJobsRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->businessUserId)) {
            @$query['BusinessUserId'] = $request->businessUserId;
        }
        if (!Utils::isUnset($request->caller)) {
            @$query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->displayName)) {
            @$query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobType)) {
            @$query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            @$query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            @$query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->showOwn)) {
            @$query['ShowOwn'] = $request->showOwn;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            @$query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListJobsResponse::fromMap($this->doROARequest('ListJobs', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/jobs', 'json', $req, $runtime));
    }

    /**
     * @param ListSecurityGroupsRequest $request
     *
     * @return ListSecurityGroupsResponse
     */
    public function listSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecurityGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSecurityGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListSecurityGroupsResponse
     */
    public function listSecurityGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSecurityGroupsResponse::fromMap($this->doROARequest('ListSecurityGroups', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/securitygroups', 'json', $req, $runtime));
    }

    /**
     * @param ListSwitchesRequest $request
     *
     * @return ListSwitchesResponse
     */
    public function listSwitches($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSwitchesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSwitchesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSwitchesResponse
     */
    public function listSwitchesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSwitchesResponse::fromMap($this->doROARequest('ListSwitches', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/switches', 'json', $req, $runtime));
    }

    /**
     * @param ListTensorboardsRequest $request
     *
     * @return ListTensorboardsResponse
     */
    public function listTensorboards($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTensorboardsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTensorboardsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTensorboardsResponse
     */
    public function listTensorboardsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            @$query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            @$query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tensorboardId)) {
            @$query['TensorboardId'] = $request->tensorboardId;
        }
        if (!Utils::isUnset($request->verbose)) {
            @$query['Verbose'] = $request->verbose;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListTensorboardsResponse::fromMap($this->doROARequest('ListTensorboards', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/tensorboards', 'json', $req, $runtime));
    }

    /**
     * @param ListVpcsRequest $request
     *
     * @return ListVpcsResponse
     */
    public function listVpcs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVpcsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListVpcsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListVpcsResponse
     */
    public function listVpcsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListVpcsResponse::fromMap($this->doROARequest('ListVpcs', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/vpcs', 'json', $req, $runtime));
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
     * @param ListWorkspacesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needDetail)) {
            @$query['NeedDetail'] = $request->needDetail;
        }
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListWorkspacesResponse::fromMap($this->doROARequest('ListWorkspaces', '2020-12-03', 'HTTPS', 'GET', 'AK', '/api/v1/workspaces', 'json', $req, $runtime));
    }

    /**
     * @param string                  $TensorboardId
     * @param StartTensorboardRequest $request
     *
     * @return StartTensorboardResponse
     */
    public function startTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $TensorboardId
     * @param StartTensorboardRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartTensorboardResponse
     */
    public function startTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StartTensorboardResponse::fromMap($this->doROARequest('StartTensorboard', '2020-12-03', 'HTTPS', 'PUT', 'AK', '/api/v1/tensorboards/' . $TensorboardId . '/start', 'json', $req, $runtime));
    }

    /**
     * @param string $JobId
     *
     * @return StopJobResponse
     */
    public function stopJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopJobResponse
     */
    public function stopJobWithOptions($JobId, $headers, $runtime)
    {
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StopJobResponse::fromMap($this->doROARequest('StopJob', '2020-12-03', 'HTTPS', 'POST', 'AK', '/api/v1/jobs/' . $JobId . '/stop', 'json', $req, $runtime));
    }

    /**
     * @param string                 $TensorboardId
     * @param StopTensorboardRequest $request
     *
     * @return StopTensorboardResponse
     */
    public function stopTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $TensorboardId
     * @param StopTensorboardRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopTensorboardResponse
     */
    public function stopTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StopTensorboardResponse::fromMap($this->doROARequest('StopTensorboard', '2020-12-03', 'HTTPS', 'PUT', 'AK', '/api/v1/tensorboards/' . $TensorboardId . '/stop', 'json', $req, $runtime));
    }

    /**
     * @param string                   $TensorboardId
     * @param UpdateTensorboardRequest $request
     *
     * @return UpdateTensorboardResponse
     */
    public function updateTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $TensorboardId
     * @param UpdateTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateTensorboardResponse
     */
    public function updateTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->maxRunningTimeMinutes)) {
            @$query['MaxRunningTimeMinutes'] = $request->maxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateTensorboardResponse::fromMap($this->doROARequest('UpdateTensorboard', '2020-12-03', 'HTTPS', 'PUT', 'AK', '/api/v1/tensorboards/' . $TensorboardId . '', 'json', $req, $runtime));
    }
}
