<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\CreatePipelineRunRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\CreatePipelineRunResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\DeletePipelineRunResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeLogsRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeLogsResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeOutputsRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeOutputsResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeStatusRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeStatusResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\RerunPipelineRunResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\StartPipelineRunResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\TerminatePipelineRunResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\UpdatePipelineRunRequest;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\UpdatePipelineRunResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class PAIFlow extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paiflow', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
     */
    public function createPipelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->manifest)) {
            $body['Manifest'] = $request->manifest;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePipeline',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePipelineRequest $request
     *
     * @return CreatePipelineResponse
     */
    public function createPipeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreatePipelineRunRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePipelineRunResponse
     */
    public function createPipelineRunWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->arguments)) {
            $body['Arguments'] = $request->arguments;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->noConfirmRequired)) {
            $body['NoConfirmRequired'] = $request->noConfirmRequired;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $body['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->pipelineManifest)) {
            $body['PipelineManifest'] = $request->pipelineManifest;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePipelineRun',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePipelineRunRequest $request
     *
     * @return CreatePipelineRunResponse
     */
    public function createPipelineRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineRunWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $PipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($PipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipeline',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelines/' . OpenApiUtilClient::getEncodeParam($PipelineId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $PipelineId
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($PipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineWithOptions($PipelineId, $headers, $runtime);
    }

    /**
     * @param string         $PipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePipelineRunResponse
     */
    public function deletePipelineRunWithOptions($PipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipelineRun',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $PipelineRunId
     *
     * @return DeletePipelineRunResponse
     */
    public function deletePipelineRun($PipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineRunWithOptions($PipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $PipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($PipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipeline',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelines/' . OpenApiUtilClient::getEncodeParam($PipelineId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $PipelineId
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($PipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($PipelineId, $headers, $runtime);
    }

    /**
     * @param string                $PipelineRunId
     * @param GetPipelineRunRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRunWithOptions($PipelineRunId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->manifestType)) {
            $query['ManifestType'] = $request->manifestType;
        }
        if (!Utils::isUnset($request->tokenId)) {
            $query['TokenId'] = $request->tokenId;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPipelineRun',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $PipelineRunId
     * @param GetPipelineRunRequest $request
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRun($PipelineRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineRunWithOptions($PipelineRunId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $PipelineRunId
     * @param string                    $NodeId
     * @param GetPipelineRunNodeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetPipelineRunNodeResponse
     */
    public function getPipelineRunNodeWithOptions($PipelineRunId, $NodeId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->depth)) {
            $query['Depth'] = $request->depth;
        }
        if (!Utils::isUnset($request->tokenId)) {
            $query['TokenId'] = $request->tokenId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPipelineRunNode',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '/nodes/' . OpenApiUtilClient::getEncodeParam($NodeId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineRunNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $PipelineRunId
     * @param string                    $NodeId
     * @param GetPipelineRunNodeRequest $request
     *
     * @return GetPipelineRunNodeResponse
     */
    public function getPipelineRunNode($PipelineRunId, $NodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineRunNodeWithOptions($PipelineRunId, $NodeId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $PipelineRunId
     * @param string                         $NodeId
     * @param ListPipelineRunNodeLogsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPipelineRunNodeLogsResponse
     */
    public function listPipelineRunNodeLogsWithOptions($PipelineRunId, $NodeId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromTimeInSeconds)) {
            $query['FromTimeInSeconds'] = $request->fromTimeInSeconds;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->toTimeInSeconds)) {
            $query['ToTimeInSeconds'] = $request->toTimeInSeconds;
        }
        if (!Utils::isUnset($request->tokenId)) {
            $query['TokenId'] = $request->tokenId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRunNodeLogs',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '/nodes/' . OpenApiUtilClient::getEncodeParam($NodeId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRunNodeLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $PipelineRunId
     * @param string                         $NodeId
     * @param ListPipelineRunNodeLogsRequest $request
     *
     * @return ListPipelineRunNodeLogsResponse
     */
    public function listPipelineRunNodeLogs($PipelineRunId, $NodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunNodeLogsWithOptions($PipelineRunId, $NodeId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $PipelineRunId
     * @param string                            $NodeId
     * @param ListPipelineRunNodeOutputsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListPipelineRunNodeOutputsResponse
     */
    public function listPipelineRunNodeOutputsWithOptions($PipelineRunId, $NodeId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->depth)) {
            $query['Depth'] = $request->depth;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->tokenId)) {
            $query['TokenId'] = $request->tokenId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRunNodeOutputs',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '/nodes/' . OpenApiUtilClient::getEncodeParam($NodeId) . '/outputs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRunNodeOutputsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $PipelineRunId
     * @param string                            $NodeId
     * @param ListPipelineRunNodeOutputsRequest $request
     *
     * @return ListPipelineRunNodeOutputsResponse
     */
    public function listPipelineRunNodeOutputs($PipelineRunId, $NodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunNodeOutputsWithOptions($PipelineRunId, $NodeId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $PipelineRunId
     * @param string                           $NodeId
     * @param ListPipelineRunNodeStatusRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPipelineRunNodeStatusResponse
     */
    public function listPipelineRunNodeStatusWithOptions($PipelineRunId, $NodeId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->depth)) {
            $query['Depth'] = $request->depth;
        }
        if (!Utils::isUnset($request->tokenId)) {
            $query['TokenId'] = $request->tokenId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRunNodeStatus',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '/nodes/' . OpenApiUtilClient::getEncodeParam($NodeId) . '/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRunNodeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $PipelineRunId
     * @param string                           $NodeId
     * @param ListPipelineRunNodeStatusRequest $request
     *
     * @return ListPipelineRunNodeStatusResponse
     */
    public function listPipelineRunNodeStatus($PipelineRunId, $NodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunNodeStatusWithOptions($PipelineRunId, $NodeId, $request, $headers, $runtime);
    }

    /**
     * @param ListPipelineRunsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRunsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['PipelineIds'] = $request->pipelineIds;
        }
        if (!Utils::isUnset($request->pipelineRunId)) {
            $query['PipelineRunId'] = $request->pipelineRunId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRuns',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPipelineRunsRequest $request
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRuns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListPipelineRunsStatusRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListPipelineRunsStatusResponse
     */
    public function listPipelineRunsStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodes)) {
            $body['Nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->outputType)) {
            $body['OutputType'] = $request->outputType;
        }
        if (!Utils::isUnset($request->pipelineRuns)) {
            $body['PipelineRuns'] = $request->pipelineRuns;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRunsStatus',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRunsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPipelineRunsStatusRequest $request
     *
     * @return ListPipelineRunsStatusResponse
     */
    public function listPipelineRunsStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunsStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListPipelinesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fuzzyMatching)) {
            $query['FuzzyMatching'] = $request->fuzzyMatching;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pipelineIdentifier)) {
            $query['PipelineIdentifier'] = $request->pipelineIdentifier;
        }
        if (!Utils::isUnset($request->pipelineProvider)) {
            $query['PipelineProvider'] = $request->pipelineProvider;
        }
        if (!Utils::isUnset($request->pipelineVersion)) {
            $query['PipelineVersion'] = $request->pipelineVersion;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelines',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $PipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RerunPipelineRunResponse
     */
    public function rerunPipelineRunWithOptions($PipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RerunPipelineRun',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '/rerun',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RerunPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $PipelineRunId
     *
     * @return RerunPipelineRunResponse
     */
    public function rerunPipelineRun($PipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rerunPipelineRunWithOptions($PipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $PipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartPipelineRunResponse
     */
    public function startPipelineRunWithOptions($PipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartPipelineRun',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $PipelineRunId
     *
     * @return StartPipelineRunResponse
     */
    public function startPipelineRun($PipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startPipelineRunWithOptions($PipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $PipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return TerminatePipelineRunResponse
     */
    public function terminatePipelineRunWithOptions($PipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'TerminatePipelineRun',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '/termination',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TerminatePipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $PipelineRunId
     *
     * @return TerminatePipelineRunResponse
     */
    public function terminatePipelineRun($PipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->terminatePipelineRunWithOptions($PipelineRunId, $headers, $runtime);
    }

    /**
     * @param string                $PipelineId
     * @param UpdatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($PipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->manifest)) {
            $body['Manifest'] = $request->manifest;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipeline',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelines/' . OpenApiUtilClient::getEncodeParam($PipelineId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $PipelineId
     * @param UpdatePipelineRequest $request
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipeline($PipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineWithOptions($PipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $PipelineRunId
     * @param UpdatePipelineRunRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdatePipelineRunResponse
     */
    public function updatePipelineRunWithOptions($PipelineRunId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineRun',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/pipelineruns/' . OpenApiUtilClient::getEncodeParam($PipelineRunId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $PipelineRunId
     * @param UpdatePipelineRunRequest $request
     *
     * @return UpdatePipelineRunResponse
     */
    public function updatePipelineRun($PipelineRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineRunWithOptions($PipelineRunId, $request, $headers, $runtime);
    }
}
