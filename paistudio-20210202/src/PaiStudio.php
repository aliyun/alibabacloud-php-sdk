<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CopyExperimentRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CopyExperimentResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CreateExperimentFolderRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CreateExperimentFolderResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CreateExperimentMigrateValidationRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CreateExperimentMigrateValidationResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CreateExperimentRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CreateExperimentResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CreateJobRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\CreateJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\DeleteExperimentFolderResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\DeleteExperimentResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetAlgorithmDefRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetAlgorithmDefResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetAlgorithmDefsRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetAlgorithmDefsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetAlgorithmTreeRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetAlgorithmTreeResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetAlgoTreeRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetAlgoTreeResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentFolderChildrenRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentFolderChildrenResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentMetaResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentsStatisticsRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentsStatisticsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentStatusResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentsUsersStatisticsRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentsUsersStatisticsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentVisualizationMetaRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentVisualizationMetaResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetJobRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetMCTableSchemaRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetMCTableSchemaResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetNodeInputSchemaRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetNodeInputSchemaResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetNodeOutputRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetNodeOutputResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetTemplateRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetTemplateResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListAuthRolesRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListAuthRolesResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListExperimentsRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListExperimentsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListImageLabelsRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListImageLabelsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListImagesRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListImagesResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListJobsRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListJobsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListNodeOutputsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListRecentExperimentsRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListRecentExperimentsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\MigrateExperimentFoldersRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\MigrateExperimentFoldersResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\MigrateExperimentsRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\MigrateExperimentsResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\PreviewMCTableRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\PreviewMCTableResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\PublishExperimentRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\PublishExperimentResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\QueryExperimentVisualizationDataRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\QueryExperimentVisualizationDataResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\SearchMCTablesRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\SearchMCTablesResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\StopExperimentResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\StopJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\UpdateExperimentContentRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\UpdateExperimentContentResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\UpdateExperimentFolderRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\UpdateExperimentFolderResponse;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\UpdateExperimentMetaRequest;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\UpdateExperimentMetaResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PaiStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'pai.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'pai.cn-hangzhou.data.aliyun.com',
            'cn-shanghai' => 'pai.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'pai.cn-shenzhen.aliyuncs.com',
            'cn-hongkong' => 'pai.cn-hongkong.aliyuncs.com',
            'ap-southeast-1' => 'pai.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'pai.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'pai.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'pai.ap-southeast-5.aliyuncs.com',
            'us-east-1' => 'pai.us-east-1.aliyuncs.com',
            'us-west-1' => 'pai.us-west-1.aliyuncs.com',
            'eu-central-1' => 'pai.eu-central-1.aliyuncs.com',
            'ap-south-1' => 'pai.ap-south-1.aliyuncs.com',
            'me-east-1' => 'pai.me-east-1.aliyuncs.com',
            'ap-northeast-1' => 'pai.ap-northeast-1.aliyuncs.com',
            'cn-qingdao' => 'pai.cn-qingdao.aliyuncs.com',
            'cn-shanghai-finance-1' => 'pai.cn-shanghai-finance-1.aliyuncs.com',
            'cn-wulanchabu' => 'pai.cn-wulanchabu.aliyuncs.com',
            'cn-zhangjiakou' => 'pai.cn-zhangjiakou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paistudio', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 复制实验.
     *
     * @param request - CopyExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyExperimentResponse
     *
     * @param string                $ExperimentId
     * @param CopyExperimentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CopyExperimentResponse
     */
    public function copyExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->folderId) {
            @$body['FolderId'] = $request->folderId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CopyExperiment',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/copy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CopyExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 复制实验.
     *
     * @param request - CopyExperimentRequest
     *
     * @returns CopyExperimentResponse
     *
     * @param string                $ExperimentId
     * @param CopyExperimentRequest $request
     *
     * @return CopyExperimentResponse
     */
    public function copyExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->copyExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 创建实验，或根据实验模版创建实验.
     *
     * @param request - CreateExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExperimentResponse
     *
     * @param CreateExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateExperimentResponse
     */
    public function createExperimentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->folderId) {
            @$body['FolderId'] = $request->folderId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExperiment',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实验，或根据实验模版创建实验.
     *
     * @param request - CreateExperimentRequest
     *
     * @returns CreateExperimentResponse
     *
     * @param CreateExperimentRequest $request
     *
     * @return CreateExperimentResponse
     */
    public function createExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建算法文件夹.
     *
     * @param request - CreateExperimentFolderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExperimentFolderResponse
     *
     * @param CreateExperimentFolderRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateExperimentFolderResponse
     */
    public function createExperimentFolderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->parentFolderId) {
            @$body['ParentFolderId'] = $request->parentFolderId;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExperimentFolder',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentfolders',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExperimentFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建算法文件夹.
     *
     * @param request - CreateExperimentFolderRequest
     *
     * @returns CreateExperimentFolderResponse
     *
     * @param CreateExperimentFolderRequest $request
     *
     * @return CreateExperimentFolderResponse
     */
    public function createExperimentFolder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentFolderWithOptions($request, $headers, $runtime);
    }

    /**
     * 校验实验是否能迁移.
     *
     * @param request - CreateExperimentMigrateValidationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExperimentMigrateValidationResponse
     *
     * @param CreateExperimentMigrateValidationRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateExperimentMigrateValidationResponse
     */
    public function createExperimentMigrateValidationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceExpId) {
            @$query['SourceExpId'] = $request->sourceExpId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateExperimentMigrateValidation',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/migrate/experimentvalidation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExperimentMigrateValidationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验实验是否能迁移.
     *
     * @param request - CreateExperimentMigrateValidationRequest
     *
     * @returns CreateExperimentMigrateValidationResponse
     *
     * @param CreateExperimentMigrateValidationRequest $request
     *
     * @return CreateExperimentMigrateValidationResponse
     */
    public function createExperimentMigrateValidation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentMigrateValidationWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建一个工作流的作业.
     *
     * @param request - CreateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->executeType) {
            @$body['ExecuteType'] = $request->executeType;
        }

        if (null !== $request->experimentId) {
            @$body['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->pipelineDraftId) {
            @$body['PipelineDraftId'] = $request->pipelineDraftId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个工作流的作业.
     *
     * @param request - CreateJobRequest
     *
     * @returns CreateJobResponse
     *
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
     * 删除实验.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExperimentResponse
     *
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteExperiment',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实验.
     *
     * @returns DeleteExperimentResponse
     *
     * @param string $ExperimentId
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * 删除算法文件夹.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExperimentFolderResponse
     *
     * @param string         $FolderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteExperimentFolderResponse
     */
    public function deleteExperimentFolderWithOptions($FolderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteExperimentFolder',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentfolders/' . Url::percentEncode($FolderId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteExperimentFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除算法文件夹.
     *
     * @returns DeleteExperimentFolderResponse
     *
     * @param string $FolderId
     *
     * @return DeleteExperimentFolderResponse
     */
    public function deleteExperimentFolder($FolderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentFolderWithOptions($FolderId, $headers, $runtime);
    }

    /**
     * 获取算法树.
     *
     * @param request - GetAlgoTreeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlgoTreeResponse
     *
     * @param GetAlgoTreeRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetAlgoTreeResponse
     */
    public function getAlgoTreeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlgoTree',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algo/tree',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlgoTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取算法树.
     *
     * @param request - GetAlgoTreeRequest
     *
     * @returns GetAlgoTreeResponse
     *
     * @param GetAlgoTreeRequest $request
     *
     * @return GetAlgoTreeResponse
     */
    public function getAlgoTree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgoTreeWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取算法定义.
     *
     * @param request - GetAlgorithmDefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlgorithmDefResponse
     *
     * @param GetAlgorithmDefRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetAlgorithmDefResponse
     */
    public function getAlgorithmDefWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algoVersion) {
            @$query['AlgoVersion'] = $request->algoVersion;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->signature) {
            @$query['Signature'] = $request->signature;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlgorithmDef',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithm/def',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlgorithmDefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取算法定义.
     *
     * @param request - GetAlgorithmDefRequest
     *
     * @returns GetAlgorithmDefResponse
     *
     * @param GetAlgorithmDefRequest $request
     *
     * @return GetAlgorithmDefResponse
     */
    public function getAlgorithmDef($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmDefWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量获取算法定义.
     *
     * @param request - GetAlgorithmDefsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlgorithmDefsResponse
     *
     * @param GetAlgorithmDefsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAlgorithmDefsResponse
     */
    public function getAlgorithmDefsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->latestTimestamp) {
            @$query['LatestTimestamp'] = $request->latestTimestamp;
        }

        if (null !== $request->rangeEnd) {
            @$query['RangeEnd'] = $request->rangeEnd;
        }

        if (null !== $request->rangeStart) {
            @$query['RangeStart'] = $request->rangeStart;
        }

        if (null !== $request->timestamp) {
            @$query['Timestamp'] = $request->timestamp;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlgorithmDefs',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithm/defs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlgorithmDefsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量获取算法定义.
     *
     * @param request - GetAlgorithmDefsRequest
     *
     * @returns GetAlgorithmDefsResponse
     *
     * @param GetAlgorithmDefsRequest $request
     *
     * @return GetAlgorithmDefsResponse
     */
    public function getAlgorithmDefs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmDefsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取算法树.
     *
     * @param request - GetAlgorithmTreeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlgorithmTreeResponse
     *
     * @param GetAlgorithmTreeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAlgorithmTreeResponse
     */
    public function getAlgorithmTreeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlgorithmTree',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithm/tree',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlgorithmTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取算法树.
     *
     * @param request - GetAlgorithmTreeRequest
     *
     * @returns GetAlgorithmTreeResponse
     *
     * @param GetAlgorithmTreeRequest $request
     *
     * @return GetAlgorithmTreeResponse
     */
    public function getAlgorithmTree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmTreeWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实验信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentResponse
     *
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetExperimentResponse
     */
    public function getExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExperiment',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验信息.
     *
     * @returns GetExperimentResponse
     *
     * @param string $ExperimentId
     *
     * @return GetExperimentResponse
     */
    public function getExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * 获取算法文件夹下的内容.
     *
     * @param request - GetExperimentFolderChildrenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentFolderChildrenResponse
     *
     * @param string                             $FolderId
     * @param GetExperimentFolderChildrenRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetExperimentFolderChildrenResponse
     */
    public function getExperimentFolderChildrenWithOptions($FolderId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->onlyFolder) {
            @$query['OnlyFolder'] = $request->onlyFolder;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperimentFolderChildren',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentfolders/' . Url::percentEncode($FolderId) . '/children',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentFolderChildrenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取算法文件夹下的内容.
     *
     * @param request - GetExperimentFolderChildrenRequest
     *
     * @returns GetExperimentFolderChildrenResponse
     *
     * @param string                             $FolderId
     * @param GetExperimentFolderChildrenRequest $request
     *
     * @return GetExperimentFolderChildrenResponse
     */
    public function getExperimentFolderChildren($FolderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentFolderChildrenWithOptions($FolderId, $request, $headers, $runtime);
    }

    /**
     * 获取实验的元信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentMetaResponse
     *
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetExperimentMetaResponse
     */
    public function getExperimentMetaWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExperimentMeta',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/meta',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验的元信息.
     *
     * @returns GetExperimentMetaResponse
     *
     * @param string $ExperimentId
     *
     * @return GetExperimentMetaResponse
     */
    public function getExperimentMeta($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentMetaWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * 获取实验以及实验节点的状态
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentStatusResponse
     *
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetExperimentStatusResponse
     */
    public function getExperimentStatusWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExperimentStatus',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验以及实验节点的状态
     *
     * @returns GetExperimentStatusResponse
     *
     * @param string $ExperimentId
     *
     * @return GetExperimentStatusResponse
     */
    public function getExperimentStatus($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentStatusWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * 查询实验的可视化meta.
     *
     * @param request - GetExperimentVisualizationMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentVisualizationMetaResponse
     *
     * @param string                                $ExperimentId
     * @param GetExperimentVisualizationMetaRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetExperimentVisualizationMetaResponse
     */
    public function getExperimentVisualizationMetaWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nodeIds) {
            @$query['NodeIds'] = $request->nodeIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperimentVisualizationMeta',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/visualizationMeta',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentVisualizationMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实验的可视化meta.
     *
     * @param request - GetExperimentVisualizationMetaRequest
     *
     * @returns GetExperimentVisualizationMetaResponse
     *
     * @param string                                $ExperimentId
     * @param GetExperimentVisualizationMetaRequest $request
     *
     * @return GetExperimentVisualizationMetaResponse
     */
    public function getExperimentVisualizationMeta($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentVisualizationMetaWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 获取实验的统计信息.
     *
     * @param request - GetExperimentsStatisticsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentsStatisticsResponse
     *
     * @param GetExperimentsStatisticsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetExperimentsStatisticsResponse
     */
    public function getExperimentsStatisticsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->workspaceIds) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperimentsStatistics',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/statistics/experiments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentsStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验的统计信息.
     *
     * @param request - GetExperimentsStatisticsRequest
     *
     * @returns GetExperimentsStatisticsResponse
     *
     * @param GetExperimentsStatisticsRequest $request
     *
     * @return GetExperimentsStatisticsResponse
     */
    public function getExperimentsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentsStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实验或文件夹所有者列表.
     *
     * @param request - GetExperimentsUsersStatisticsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentsUsersStatisticsResponse
     *
     * @param GetExperimentsUsersStatisticsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetExperimentsUsersStatisticsResponse
     */
    public function getExperimentsUsersStatisticsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperimentsUsersStatistics',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/statistics/experimentsusers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentsUsersStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验或文件夹所有者列表.
     *
     * @param request - GetExperimentsUsersStatisticsRequest
     *
     * @returns GetExperimentsUsersStatisticsResponse
     *
     * @param GetExperimentsUsersStatisticsRequest $request
     *
     * @return GetExperimentsUsersStatisticsResponse
     */
    public function getExperimentsUsersStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentsUsersStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取一个PAI Studio作业详情.
     *
     * @param request - GetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param string         $JobId
     * @param GetJobRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($JobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一个PAI Studio作业详情.
     *
     * @param request - GetJobRequest
     *
     * @returns GetJobResponse
     *
     * @param string        $JobId
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * 获取MaxCompute表schema.
     *
     * @param request - GetMCTableSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMCTableSchemaResponse
     *
     * @param string                  $TableName
     * @param GetMCTableSchemaRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetMCTableSchemaResponse
     */
    public function getMCTableSchemaWithOptions($TableName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMCTableSchema',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datasources/maxcompute/tables/' . Url::percentEncode($TableName) . '/schema',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMCTableSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取MaxCompute表schema.
     *
     * @param request - GetMCTableSchemaRequest
     *
     * @returns GetMCTableSchemaResponse
     *
     * @param string                  $TableName
     * @param GetMCTableSchemaRequest $request
     *
     * @return GetMCTableSchemaResponse
     */
    public function getMCTableSchema($TableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMCTableSchemaWithOptions($TableName, $request, $headers, $runtime);
    }

    /**
     * 获取实验节点输入桩的输入表的格式.
     *
     * @param request - GetNodeInputSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeInputSchemaResponse
     *
     * @param string                    $ExperimentId
     * @param string                    $NodeId
     * @param GetNodeInputSchemaRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetNodeInputSchemaResponse
     */
    public function getNodeInputSchemaWithOptions($ExperimentId, $NodeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputId) {
            @$query['InputId'] = $request->inputId;
        }

        if (null !== $request->inputIndex) {
            @$query['InputIndex'] = $request->inputIndex;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNodeInputSchema',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/nodes/' . Url::percentEncode($NodeId) . '/schema',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetNodeInputSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验节点输入桩的输入表的格式.
     *
     * @param request - GetNodeInputSchemaRequest
     *
     * @returns GetNodeInputSchemaResponse
     *
     * @param string                    $ExperimentId
     * @param string                    $NodeId
     * @param GetNodeInputSchemaRequest $request
     *
     * @return GetNodeInputSchemaResponse
     */
    public function getNodeInputSchema($ExperimentId, $NodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeInputSchemaWithOptions($ExperimentId, $NodeId, $request, $headers, $runtime);
    }

    /**
     * 获取某个节点的输出模型信息.
     *
     * @param request - GetNodeOutputRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeOutputResponse
     *
     * @param string               $ExperimentId
     * @param string               $NodeId
     * @param string               $OutputId
     * @param GetNodeOutputRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetNodeOutputResponse
     */
    public function getNodeOutputWithOptions($ExperimentId, $NodeId, $OutputId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputIndex) {
            @$query['OutputIndex'] = $request->outputIndex;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNodeOutput',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/nodes/' . Url::percentEncode($NodeId) . '/outputs/' . Url::percentEncode($OutputId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetNodeOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取某个节点的输出模型信息.
     *
     * @param request - GetNodeOutputRequest
     *
     * @returns GetNodeOutputResponse
     *
     * @param string               $ExperimentId
     * @param string               $NodeId
     * @param string               $OutputId
     * @param GetNodeOutputRequest $request
     *
     * @return GetNodeOutputResponse
     */
    public function getNodeOutput($ExperimentId, $NodeId, $OutputId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeOutputWithOptions($ExperimentId, $NodeId, $OutputId, $request, $headers, $runtime);
    }

    /**
     * 获取PAI Studio中指定模板
     *
     * @param request - GetTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param string             $TemplateId
     * @param GetTemplateRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($TemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/templates/' . Url::percentEncode($TemplateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取PAI Studio中指定模板
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param string             $TemplateId
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * 获取授权角色列表.
     *
     * @param request - ListAuthRolesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthRolesResponse
     *
     * @param ListAuthRolesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListAuthRolesResponse
     */
    public function listAuthRolesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isGenerateToken) {
            @$query['IsGenerateToken'] = $request->isGenerateToken;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthRoles',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/authorization/roles',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAuthRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取授权角色列表.
     *
     * @param request - ListAuthRolesRequest
     *
     * @returns ListAuthRolesResponse
     *
     * @param ListAuthRolesRequest $request
     *
     * @return ListAuthRolesResponse
     */
    public function listAuthRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实验列表.
     *
     * @param request - ListExperimentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExperimentsResponse
     *
     * @param ListExperimentsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListExperimentsResponse
     */
    public function listExperimentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->experimentId) {
            @$query['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExperiments',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验列表.
     *
     * @param request - ListExperimentsRequest
     *
     * @returns ListExperimentsResponse
     *
     * @param ListExperimentsRequest $request
     *
     * @return ListExperimentsResponse
     */
    public function listExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举标签.
     *
     * @param request - ListImageLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImageLabelsResponse
     *
     * @param ListImageLabelsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListImageLabelsResponse
     */
    public function listImageLabelsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->labelFilter) {
            @$query['LabelFilter'] = $request->labelFilter;
        }

        if (null !== $request->labelKeys) {
            @$query['LabelKeys'] = $request->labelKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListImageLabels',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/image/labels',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举标签.
     *
     * @param request - ListImageLabelsRequest
     *
     * @returns ListImageLabelsResponse
     *
     * @param ListImageLabelsRequest $request
     *
     * @return ListImageLabelsResponse
     */
    public function listImageLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImageLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举已注册镜像.
     *
     * @param request - ListImagesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListImages',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/images',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举已注册镜像.
     *
     * @param request - ListImagesRequest
     *
     * @returns ListImagesResponse
     *
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
     * 获取作业详情.
     *
     * @param request - ListJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->experimentId) {
            @$query['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取作业详情.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
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
     * 获取某个节点的输出模型列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodeOutputsResponse
     *
     * @param string         $ExperimentId
     * @param string         $NodeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListNodeOutputsResponse
     */
    public function listNodeOutputsWithOptions($ExperimentId, $NodeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListNodeOutputs',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/nodes/' . Url::percentEncode($NodeId) . '/outputs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNodeOutputsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取某个节点的输出模型列表.
     *
     * @returns ListNodeOutputsResponse
     *
     * @param string $ExperimentId
     * @param string $NodeId
     *
     * @return ListNodeOutputsResponse
     */
    public function listNodeOutputs($ExperimentId, $NodeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodeOutputsWithOptions($ExperimentId, $NodeId, $headers, $runtime);
    }

    /**
     * 获取最近的实验.
     *
     * @param request - ListRecentExperimentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecentExperimentsResponse
     *
     * @param ListRecentExperimentsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRecentExperimentsResponse
     */
    public function listRecentExperimentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecentExperiments',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recentexperiments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRecentExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取最近的实验.
     *
     * @param request - ListRecentExperimentsRequest
     *
     * @returns ListRecentExperimentsResponse
     *
     * @param ListRecentExperimentsRequest $request
     *
     * @return ListRecentExperimentsResponse
     */
    public function listRecentExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecentExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取PAI Studio中指定模板列表.
     *
     * @param request - ListTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->label) {
            @$query['Label'] = $request->label;
        }

        if (null !== $request->list) {
            @$query['List'] = $request->list;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        if (null !== $request->typeId) {
            @$query['TypeId'] = $request->typeId;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplates',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取PAI Studio中指定模板列表.
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
        $headers = [];

        return $this->listTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * 迁移PAI Studio 1.0的实验目录.
     *
     * @param request - MigrateExperimentFoldersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateExperimentFoldersResponse
     *
     * @param MigrateExperimentFoldersRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return MigrateExperimentFoldersResponse
     */
    public function migrateExperimentFoldersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->isOwner) {
            @$query['IsOwner'] = $request->isOwner;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MigrateExperimentFolders',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/migrate/folders',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MigrateExperimentFoldersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 迁移PAI Studio 1.0的实验目录.
     *
     * @param request - MigrateExperimentFoldersRequest
     *
     * @returns MigrateExperimentFoldersResponse
     *
     * @param MigrateExperimentFoldersRequest $request
     *
     * @return MigrateExperimentFoldersResponse
     */
    public function migrateExperimentFolders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateExperimentFoldersWithOptions($request, $headers, $runtime);
    }

    /**
     * 迁移PAI Studio 1.0的实验.
     *
     * @param request - MigrateExperimentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateExperimentsResponse
     *
     * @param MigrateExperimentsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return MigrateExperimentsResponse
     */
    public function migrateExperimentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->destFolderId) {
            @$query['DestFolderId'] = $request->destFolderId;
        }

        if (null !== $request->isOwner) {
            @$query['IsOwner'] = $request->isOwner;
        }

        if (null !== $request->sourceExpId) {
            @$query['SourceExpId'] = $request->sourceExpId;
        }

        if (null !== $request->updateIfExists) {
            @$query['UpdateIfExists'] = $request->updateIfExists;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MigrateExperiments',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/migrate/experiments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MigrateExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 迁移PAI Studio 1.0的实验.
     *
     * @param request - MigrateExperimentsRequest
     *
     * @returns MigrateExperimentsResponse
     *
     * @param MigrateExperimentsRequest $request
     *
     * @return MigrateExperimentsResponse
     */
    public function migrateExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 预览Maxcompute表数据.
     *
     * @param request - PreviewMCTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewMCTableResponse
     *
     * @param string                $TableName
     * @param PreviewMCTableRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PreviewMCTableResponse
     */
    public function previewMCTableWithOptions($TableName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpoint) {
            @$query['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->partition) {
            @$query['Partition'] = $request->partition;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PreviewMCTable',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datasources/maxcompute/tables/' . Url::percentEncode($TableName) . '/preview',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PreviewMCTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预览Maxcompute表数据.
     *
     * @param request - PreviewMCTableRequest
     *
     * @returns PreviewMCTableResponse
     *
     * @param string                $TableName
     * @param PreviewMCTableRequest $request
     *
     * @return PreviewMCTableResponse
     */
    public function previewMCTable($TableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewMCTableWithOptions($TableName, $request, $headers, $runtime);
    }

    /**
     * 发布实验.
     *
     * @param request - PublishExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishExperimentResponse
     *
     * @param string                   $ExperimentId
     * @param PublishExperimentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return PublishExperimentResponse
     */
    public function publishExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->folderId) {
            @$body['FolderId'] = $request->folderId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishExperiment',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/publish',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布实验.
     *
     * @param request - PublishExperimentRequest
     *
     * @returns PublishExperimentResponse
     *
     * @param string                   $ExperimentId
     * @param PublishExperimentRequest $request
     *
     * @return PublishExperimentResponse
     */
    public function publishExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 查询实验的可视化数据.
     *
     * @param request - QueryExperimentVisualizationDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryExperimentVisualizationDataResponse
     *
     * @param string                                  $ExperimentId
     * @param QueryExperimentVisualizationDataRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryExperimentVisualizationDataResponse
     */
    public function queryExperimentVisualizationDataWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'QueryExperimentVisualizationData',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/visualizationDataQuery',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryExperimentVisualizationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实验的可视化数据.
     *
     * @param request - QueryExperimentVisualizationDataRequest
     *
     * @returns QueryExperimentVisualizationDataResponse
     *
     * @param string                                  $ExperimentId
     * @param QueryExperimentVisualizationDataRequest $request
     *
     * @return QueryExperimentVisualizationDataResponse
     */
    public function queryExperimentVisualizationData($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryExperimentVisualizationDataWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 搜索MaxCompute表.
     *
     * @param request - SearchMCTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMCTablesResponse
     *
     * @param SearchMCTablesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SearchMCTablesResponse
     */
    public function searchMCTablesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchMCTables',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datasources/maxcompute/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchMCTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索MaxCompute表.
     *
     * @param request - SearchMCTablesRequest
     *
     * @returns SearchMCTablesResponse
     *
     * @param SearchMCTablesRequest $request
     *
     * @return SearchMCTablesResponse
     */
    public function searchMCTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchMCTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * 停止实验所有运行中的作业.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopExperimentResponse
     *
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopExperimentResponse
     */
    public function stopExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopExperiment',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止实验所有运行中的作业.
     *
     * @returns StopExperimentResponse
     *
     * @param string $ExperimentId
     *
     * @return StopExperimentResponse
     */
    public function stopExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * 停止一个实验的作业.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopJobResponse
     *
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopJobResponse
     */
    public function stopJobWithOptions($JobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopJob',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止一个实验的作业.
     *
     * @returns StopJobResponse
     *
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
     * 更新实验内容.
     *
     * @param request - UpdateExperimentContentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExperimentContentResponse
     *
     * @param string                         $ExperimentId
     * @param UpdateExperimentContentRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateExperimentContentResponse
     */
    public function updateExperimentContentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->version) {
            @$body['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExperimentContent',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/content',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExperimentContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实验内容.
     *
     * @param request - UpdateExperimentContentRequest
     *
     * @returns UpdateExperimentContentResponse
     *
     * @param string                         $ExperimentId
     * @param UpdateExperimentContentRequest $request
     *
     * @return UpdateExperimentContentResponse
     */
    public function updateExperimentContent($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentContentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 更新算法文件夹.
     *
     * @param request - UpdateExperimentFolderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExperimentFolderResponse
     *
     * @param string                        $FolderId
     * @param UpdateExperimentFolderRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateExperimentFolderResponse
     */
    public function updateExperimentFolderWithOptions($FolderId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->parentFolderId) {
            @$body['ParentFolderId'] = $request->parentFolderId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExperimentFolder',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentfolders/' . Url::percentEncode($FolderId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExperimentFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新算法文件夹.
     *
     * @param request - UpdateExperimentFolderRequest
     *
     * @returns UpdateExperimentFolderResponse
     *
     * @param string                        $FolderId
     * @param UpdateExperimentFolderRequest $request
     *
     * @return UpdateExperimentFolderResponse
     */
    public function updateExperimentFolder($FolderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentFolderWithOptions($FolderId, $request, $headers, $runtime);
    }

    /**
     * 更新实验的Meta信息.
     *
     * @param request - UpdateExperimentMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExperimentMetaResponse
     *
     * @param string                      $ExperimentId
     * @param UpdateExperimentMetaRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateExperimentMetaResponse
     */
    public function updateExperimentMetaWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->folderId) {
            @$body['FolderId'] = $request->folderId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExperimentMeta',
            'version' => '2021-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/meta',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExperimentMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实验的Meta信息.
     *
     * @param request - UpdateExperimentMetaRequest
     *
     * @returns UpdateExperimentMetaResponse
     *
     * @param string                      $ExperimentId
     * @param UpdateExperimentMetaRequest $request
     *
     * @return UpdateExperimentMetaResponse
     */
    public function updateExperimentMeta($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentMetaWithOptions($ExperimentId, $request, $headers, $runtime);
    }
}
