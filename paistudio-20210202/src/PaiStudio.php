<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class PaiStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'     => 'pai.cn-beijing.aliyuncs.com',
            'cn-hangzhou'    => 'pai.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'    => 'pai.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'    => 'pai.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'    => 'pai.cn-hongkong.aliyuncs.com',
            'ap-southeast-1' => 'pai.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'pai.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'pai.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'pai.ap-southeast-5.aliyuncs.com',
            'us-west-1'      => 'pai.us-west-1.aliyuncs.com',
            'us-east-1'      => 'pai.us-east-1.aliyuncs.com',
            'eu-central-1'   => 'pai.eu-central-1.aliyuncs.com',
            'me-east-1'      => 'pai.me-east-1.aliyuncs.com',
            'ap-south-1'     => 'pai.ap-south-1.aliyuncs.com',
            'cn-qingdao'     => 'pai.cn-qingdao.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 复制实验
     *  *
     * @param string                $ExperimentId
     * @param CopyExperimentRequest $request      CopyExperimentRequest
     * @param string[]              $headers      map
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return CopyExperimentResponse CopyExperimentResponse
     */
    public function copyExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CopyExperiment',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/copy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CopyExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 复制实验
     *  *
     * @param string                $ExperimentId
     * @param CopyExperimentRequest $request      CopyExperimentRequest
     *
     * @return CopyExperimentResponse CopyExperimentResponse
     */
    public function copyExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->copyExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建实验，或根据实验模版创建实验
     *  *
     * @param CreateExperimentRequest $request CreateExperimentRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentResponse CreateExperimentResponse
     */
    public function createExperimentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExperiment',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验，或根据实验模版创建实验
     *  *
     * @param CreateExperimentRequest $request CreateExperimentRequest
     *
     * @return CreateExperimentResponse CreateExperimentResponse
     */
    public function createExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建算法文件夹
     *  *
     * @param CreateExperimentFolderRequest $request CreateExperimentFolderRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentFolderResponse CreateExperimentFolderResponse
     */
    public function createExperimentFolderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $body['ParentFolderId'] = $request->parentFolderId;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExperimentFolder',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentfolders',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建算法文件夹
     *  *
     * @param CreateExperimentFolderRequest $request CreateExperimentFolderRequest
     *
     * @return CreateExperimentFolderResponse CreateExperimentFolderResponse
     */
    public function createExperimentFolder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentFolderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 校验实验是否能迁移
     *  *
     * @param CreateExperimentMigrateValidationRequest $request CreateExperimentMigrateValidationRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentMigrateValidationResponse CreateExperimentMigrateValidationResponse
     */
    public function createExperimentMigrateValidationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceExpId)) {
            $query['SourceExpId'] = $request->sourceExpId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateExperimentMigrateValidation',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/migrate/experimentvalidation',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentMigrateValidationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验实验是否能迁移
     *  *
     * @param CreateExperimentMigrateValidationRequest $request CreateExperimentMigrateValidationRequest
     *
     * @return CreateExperimentMigrateValidationResponse CreateExperimentMigrateValidationResponse
     */
    public function createExperimentMigrateValidation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentMigrateValidationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建一个工作流的作业
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->executeType)) {
            $body['ExecuteType'] = $request->executeType;
        }
        if (!Utils::isUnset($request->experimentId)) {
            $body['ExperimentId'] = $request->experimentId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->pipelineDraftId)) {
            $body['PipelineDraftId'] = $request->pipelineDraftId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个工作流的作业
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除实验
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExperiment',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实验
     *  *
     * @param string $ExperimentId
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 删除算法文件夹
     *  *
     * @param string         $FolderId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentFolderResponse DeleteExperimentFolderResponse
     */
    public function deleteExperimentFolderWithOptions($FolderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExperimentFolder',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentfolders/' . OpenApiUtilClient::getEncodeParam($FolderId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除算法文件夹
     *  *
     * @param string $FolderId
     *
     * @return DeleteExperimentFolderResponse DeleteExperimentFolderResponse
     */
    public function deleteExperimentFolder($FolderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentFolderWithOptions($FolderId, $headers, $runtime);
    }

    /**
     * @summary 获取算法树
     *  *
     * @param GetAlgoTreeRequest $request GetAlgoTreeRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAlgoTreeResponse GetAlgoTreeResponse
     */
    public function getAlgoTreeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgoTree',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algo/tree',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlgoTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取算法树
     *  *
     * @param GetAlgoTreeRequest $request GetAlgoTreeRequest
     *
     * @return GetAlgoTreeResponse GetAlgoTreeResponse
     */
    public function getAlgoTree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgoTreeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取算法定义
     *  *
     * @param GetAlgorithmDefRequest $request GetAlgorithmDefRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAlgorithmDefResponse GetAlgorithmDefResponse
     */
    public function getAlgorithmDefWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algoVersion)) {
            $query['AlgoVersion'] = $request->algoVersion;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['Signature'] = $request->signature;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmDef',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithm/def',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmDefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取算法定义
     *  *
     * @param GetAlgorithmDefRequest $request GetAlgorithmDefRequest
     *
     * @return GetAlgorithmDefResponse GetAlgorithmDefResponse
     */
    public function getAlgorithmDef($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmDefWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量获取算法定义
     *  *
     * @param GetAlgorithmDefsRequest $request GetAlgorithmDefsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAlgorithmDefsResponse GetAlgorithmDefsResponse
     */
    public function getAlgorithmDefsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->latestTimestamp)) {
            $query['LatestTimestamp'] = $request->latestTimestamp;
        }
        if (!Utils::isUnset($request->rangeEnd)) {
            $query['RangeEnd'] = $request->rangeEnd;
        }
        if (!Utils::isUnset($request->rangeStart)) {
            $query['RangeStart'] = $request->rangeStart;
        }
        if (!Utils::isUnset($request->timestamp)) {
            $query['Timestamp'] = $request->timestamp;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmDefs',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithm/defs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmDefsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量获取算法定义
     *  *
     * @param GetAlgorithmDefsRequest $request GetAlgorithmDefsRequest
     *
     * @return GetAlgorithmDefsResponse GetAlgorithmDefsResponse
     */
    public function getAlgorithmDefs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmDefsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取算法树
     *  *
     * @param GetAlgorithmTreeRequest $request GetAlgorithmTreeRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAlgorithmTreeResponse GetAlgorithmTreeResponse
     */
    public function getAlgorithmTreeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmTree',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithm/tree',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取算法树
     *  *
     * @param GetAlgorithmTreeRequest $request GetAlgorithmTreeRequest
     *
     * @return GetAlgorithmTreeResponse GetAlgorithmTreeResponse
     */
    public function getAlgorithmTree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmTreeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验信息
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetExperimentResponse GetExperimentResponse
     */
    public function getExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetExperiment',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验信息
     *  *
     * @param string $ExperimentId
     *
     * @return GetExperimentResponse GetExperimentResponse
     */
    public function getExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 获取算法文件夹下的内容
     *  *
     * @param string                             $FolderId
     * @param GetExperimentFolderChildrenRequest $request  GetExperimentFolderChildrenRequest
     * @param string[]                           $headers  map
     * @param RuntimeOptions                     $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetExperimentFolderChildrenResponse GetExperimentFolderChildrenResponse
     */
    public function getExperimentFolderChildrenWithOptions($FolderId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessibility)) {
            $query['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->onlyFolder)) {
            $query['OnlyFolder'] = $request->onlyFolder;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
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
            'action'      => 'GetExperimentFolderChildren',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentfolders/' . OpenApiUtilClient::getEncodeParam($FolderId) . '/children',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentFolderChildrenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取算法文件夹下的内容
     *  *
     * @param string                             $FolderId
     * @param GetExperimentFolderChildrenRequest $request  GetExperimentFolderChildrenRequest
     *
     * @return GetExperimentFolderChildrenResponse GetExperimentFolderChildrenResponse
     */
    public function getExperimentFolderChildren($FolderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentFolderChildrenWithOptions($FolderId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取实验的元信息
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetExperimentMetaResponse GetExperimentMetaResponse
     */
    public function getExperimentMetaWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetExperimentMeta',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/meta',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验的元信息
     *  *
     * @param string $ExperimentId
     *
     * @return GetExperimentMetaResponse GetExperimentMetaResponse
     */
    public function getExperimentMeta($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentMetaWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 获取实验以及实验节点的状态
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetExperimentStatusResponse GetExperimentStatusResponse
     */
    public function getExperimentStatusWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetExperimentStatus',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验以及实验节点的状态
     *  *
     * @param string $ExperimentId
     *
     * @return GetExperimentStatusResponse GetExperimentStatusResponse
     */
    public function getExperimentStatus($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentStatusWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 查询实验的可视化meta
     *  *
     * @param string                                $ExperimentId
     * @param GetExperimentVisualizationMetaRequest $request      GetExperimentVisualizationMetaRequest
     * @param string[]                              $headers      map
     * @param RuntimeOptions                        $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetExperimentVisualizationMetaResponse GetExperimentVisualizationMetaResponse
     */
    public function getExperimentVisualizationMetaWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeIds)) {
            $query['NodeIds'] = $request->nodeIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperimentVisualizationMeta',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/visualizationMeta',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentVisualizationMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实验的可视化meta
     *  *
     * @param string                                $ExperimentId
     * @param GetExperimentVisualizationMetaRequest $request      GetExperimentVisualizationMetaRequest
     *
     * @return GetExperimentVisualizationMetaResponse GetExperimentVisualizationMetaResponse
     */
    public function getExperimentVisualizationMeta($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentVisualizationMetaWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取实验的统计信息
     *  *
     * @param GetExperimentsStatisticsRequest $request GetExperimentsStatisticsRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExperimentsStatisticsResponse GetExperimentsStatisticsResponse
     */
    public function getExperimentsStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->workspaceIds)) {
            $query['WorkspaceIds'] = $request->workspaceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperimentsStatistics',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statistics/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentsStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验的统计信息
     *  *
     * @param GetExperimentsStatisticsRequest $request GetExperimentsStatisticsRequest
     *
     * @return GetExperimentsStatisticsResponse GetExperimentsStatisticsResponse
     */
    public function getExperimentsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentsStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验或文件夹所有者列表
     *  *
     * @param GetExperimentsUsersStatisticsRequest $request GetExperimentsUsersStatisticsRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExperimentsUsersStatisticsResponse GetExperimentsUsersStatisticsResponse
     */
    public function getExperimentsUsersStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperimentsUsersStatistics',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statistics/experimentsusers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentsUsersStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验或文件夹所有者列表
     *  *
     * @param GetExperimentsUsersStatisticsRequest $request GetExperimentsUsersStatisticsRequest
     *
     * @return GetExperimentsUsersStatisticsResponse GetExperimentsUsersStatisticsResponse
     */
    public function getExperimentsUsersStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentsUsersStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取一个PAI Studio作业详情
     *  *
     * @param string         $JobId
     * @param GetJobRequest  $request GetJobRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJobWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个PAI Studio作业详情
     *  *
     * @param string        $JobId
     * @param GetJobRequest $request GetJobRequest
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJob($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取MaxCompute表schema
     *  *
     * @param string                  $TableName
     * @param GetMCTableSchemaRequest $request   GetMCTableSchemaRequest
     * @param string[]                $headers   map
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetMCTableSchemaResponse GetMCTableSchemaResponse
     */
    public function getMCTableSchemaWithOptions($TableName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMCTableSchema',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasources/maxcompute/tables/' . OpenApiUtilClient::getEncodeParam($TableName) . '/schema',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMCTableSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取MaxCompute表schema
     *  *
     * @param string                  $TableName
     * @param GetMCTableSchemaRequest $request   GetMCTableSchemaRequest
     *
     * @return GetMCTableSchemaResponse GetMCTableSchemaResponse
     */
    public function getMCTableSchema($TableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMCTableSchemaWithOptions($TableName, $request, $headers, $runtime);
    }

    /**
     * @summary 获取实验节点输入桩的输入表的格式
     *  *
     * @param string                    $ExperimentId
     * @param string                    $NodeId
     * @param GetNodeInputSchemaRequest $request      GetNodeInputSchemaRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetNodeInputSchemaResponse GetNodeInputSchemaResponse
     */
    public function getNodeInputSchemaWithOptions($ExperimentId, $NodeId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputId)) {
            $query['InputId'] = $request->inputId;
        }
        if (!Utils::isUnset($request->inputIndex)) {
            $query['InputIndex'] = $request->inputIndex;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNodeInputSchema',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/nodes/' . OpenApiUtilClient::getEncodeParam($NodeId) . '/schema',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetNodeInputSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验节点输入桩的输入表的格式
     *  *
     * @param string                    $ExperimentId
     * @param string                    $NodeId
     * @param GetNodeInputSchemaRequest $request      GetNodeInputSchemaRequest
     *
     * @return GetNodeInputSchemaResponse GetNodeInputSchemaResponse
     */
    public function getNodeInputSchema($ExperimentId, $NodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeInputSchemaWithOptions($ExperimentId, $NodeId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取某个节点的输出模型信息
     *  *
     * @param string               $ExperimentId
     * @param string               $NodeId
     * @param string               $OutputId
     * @param GetNodeOutputRequest $request      GetNodeOutputRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetNodeOutputResponse GetNodeOutputResponse
     */
    public function getNodeOutputWithOptions($ExperimentId, $NodeId, $OutputId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputIndex)) {
            $query['OutputIndex'] = $request->outputIndex;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNodeOutput',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/nodes/' . OpenApiUtilClient::getEncodeParam($NodeId) . '/outputs/' . OpenApiUtilClient::getEncodeParam($OutputId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetNodeOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某个节点的输出模型信息
     *  *
     * @param string               $ExperimentId
     * @param string               $NodeId
     * @param string               $OutputId
     * @param GetNodeOutputRequest $request      GetNodeOutputRequest
     *
     * @return GetNodeOutputResponse GetNodeOutputResponse
     */
    public function getNodeOutput($ExperimentId, $NodeId, $OutputId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeOutputWithOptions($ExperimentId, $NodeId, $OutputId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取PAI Studio中指定模板
     *  *
     * @param string             $TemplateId
     * @param GetTemplateRequest $request    GetTemplateRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplateWithOptions($TemplateId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取PAI Studio中指定模板
     *  *
     * @param string             $TemplateId
     * @param GetTemplateRequest $request    GetTemplateRequest
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplate($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取授权角色列表
     *  *
     * @param ListAuthRolesRequest $request ListAuthRolesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAuthRolesResponse ListAuthRolesResponse
     */
    public function listAuthRolesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isGenerateToken)) {
            $query['IsGenerateToken'] = $request->isGenerateToken;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthRoles',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/authorization/roles',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAuthRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取授权角色列表
     *  *
     * @param ListAuthRolesRequest $request ListAuthRolesRequest
     *
     * @return ListAuthRolesResponse ListAuthRolesResponse
     */
    public function listAuthRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验列表
     *  *
     * @param ListExperimentsRequest $request ListExperimentsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperimentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExperiments',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验列表
     *  *
     * @param ListExperimentsRequest $request ListExperimentsRequest
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举标签
     *  *
     * @param ListImageLabelsRequest $request ListImageLabelsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImageLabelsResponse ListImageLabelsResponse
     */
    public function listImageLabelsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->labelFilter)) {
            $query['LabelFilter'] = $request->labelFilter;
        }
        if (!Utils::isUnset($request->labelKeys)) {
            $query['LabelKeys'] = $request->labelKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImageLabels',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/image/labels',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举标签
     *  *
     * @param ListImageLabelsRequest $request ListImageLabelsRequest
     *
     * @return ListImageLabelsResponse ListImageLabelsResponse
     */
    public function listImageLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImageLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举已注册镜像
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
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
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举已注册镜像
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取作业详情
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取作业详情
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取某个节点的输出模型列表
     *  *
     * @param string         $ExperimentId
     * @param string         $NodeId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListNodeOutputsResponse ListNodeOutputsResponse
     */
    public function listNodeOutputsWithOptions($ExperimentId, $NodeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListNodeOutputs',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/nodes/' . OpenApiUtilClient::getEncodeParam($NodeId) . '/outputs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListNodeOutputsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某个节点的输出模型列表
     *  *
     * @param string $ExperimentId
     * @param string $NodeId
     *
     * @return ListNodeOutputsResponse ListNodeOutputsResponse
     */
    public function listNodeOutputs($ExperimentId, $NodeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodeOutputsWithOptions($ExperimentId, $NodeId, $headers, $runtime);
    }

    /**
     * @summary 获取最近的实验
     *  *
     * @param ListRecentExperimentsRequest $request ListRecentExperimentsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRecentExperimentsResponse ListRecentExperimentsResponse
     */
    public function listRecentExperimentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRecentExperiments',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/recentexperiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRecentExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取最近的实验
     *  *
     * @param ListRecentExperimentsRequest $request ListRecentExperimentsRequest
     *
     * @return ListRecentExperimentsResponse ListRecentExperimentsResponse
     */
    public function listRecentExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecentExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取PAI Studio中指定模板列表
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->list_)) {
            $query['List'] = $request->list_;
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->typeId)) {
            $query['TypeId'] = $request->typeId;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取PAI Studio中指定模板列表
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 迁移PAI Studio 1.0的实验目录
     *  *
     * @param MigrateExperimentFoldersRequest $request MigrateExperimentFoldersRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateExperimentFoldersResponse MigrateExperimentFoldersResponse
     */
    public function migrateExperimentFoldersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessibility)) {
            $query['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->isOwner)) {
            $query['IsOwner'] = $request->isOwner;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateExperimentFolders',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/migrate/folders',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateExperimentFoldersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 迁移PAI Studio 1.0的实验目录
     *  *
     * @param MigrateExperimentFoldersRequest $request MigrateExperimentFoldersRequest
     *
     * @return MigrateExperimentFoldersResponse MigrateExperimentFoldersResponse
     */
    public function migrateExperimentFolders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateExperimentFoldersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 迁移PAI Studio 1.0的实验
     *  *
     * @param MigrateExperimentsRequest $request MigrateExperimentsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateExperimentsResponse MigrateExperimentsResponse
     */
    public function migrateExperimentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessibility)) {
            $query['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->destFolderId)) {
            $query['DestFolderId'] = $request->destFolderId;
        }
        if (!Utils::isUnset($request->isOwner)) {
            $query['IsOwner'] = $request->isOwner;
        }
        if (!Utils::isUnset($request->sourceExpId)) {
            $query['SourceExpId'] = $request->sourceExpId;
        }
        if (!Utils::isUnset($request->updateIfExists)) {
            $query['UpdateIfExists'] = $request->updateIfExists;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateExperiments',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/migrate/experiments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 迁移PAI Studio 1.0的实验
     *  *
     * @param MigrateExperimentsRequest $request MigrateExperimentsRequest
     *
     * @return MigrateExperimentsResponse MigrateExperimentsResponse
     */
    public function migrateExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 预览Maxcompute表数据
     *  *
     * @param string                $TableName
     * @param PreviewMCTableRequest $request   PreviewMCTableRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return PreviewMCTableResponse PreviewMCTableResponse
     */
    public function previewMCTableWithOptions($TableName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->partition)) {
            $query['Partition'] = $request->partition;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreviewMCTable',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasources/maxcompute/tables/' . OpenApiUtilClient::getEncodeParam($TableName) . '/preview',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PreviewMCTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预览Maxcompute表数据
     *  *
     * @param string                $TableName
     * @param PreviewMCTableRequest $request   PreviewMCTableRequest
     *
     * @return PreviewMCTableResponse PreviewMCTableResponse
     */
    public function previewMCTable($TableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewMCTableWithOptions($TableName, $request, $headers, $runtime);
    }

    /**
     * @summary 发布实验
     *  *
     * @param string                   $ExperimentId
     * @param PublishExperimentRequest $request      PublishExperimentRequest
     * @param string[]                 $headers      map
     * @param RuntimeOptions           $runtime      runtime options for this request RuntimeOptions
     *
     * @return PublishExperimentResponse PublishExperimentResponse
     */
    public function publishExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishExperiment',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布实验
     *  *
     * @param string                   $ExperimentId
     * @param PublishExperimentRequest $request      PublishExperimentRequest
     *
     * @return PublishExperimentResponse PublishExperimentResponse
     */
    public function publishExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询实验的可视化数据
     *  *
     * @param string                                  $ExperimentId
     * @param QueryExperimentVisualizationDataRequest $request      QueryExperimentVisualizationDataRequest
     * @param string[]                                $headers      map
     * @param RuntimeOptions                          $runtime      runtime options for this request RuntimeOptions
     *
     * @return QueryExperimentVisualizationDataResponse QueryExperimentVisualizationDataResponse
     */
    public function queryExperimentVisualizationDataWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryExperimentVisualizationData',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/visualizationDataQuery',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryExperimentVisualizationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实验的可视化数据
     *  *
     * @param string                                  $ExperimentId
     * @param QueryExperimentVisualizationDataRequest $request      QueryExperimentVisualizationDataRequest
     *
     * @return QueryExperimentVisualizationDataResponse QueryExperimentVisualizationDataResponse
     */
    public function queryExperimentVisualizationData($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryExperimentVisualizationDataWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 搜索MaxCompute表
     *  *
     * @param SearchMCTablesRequest $request SearchMCTablesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMCTablesResponse SearchMCTablesResponse
     */
    public function searchMCTablesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMCTables',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasources/maxcompute/tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchMCTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 搜索MaxCompute表
     *  *
     * @param SearchMCTablesRequest $request SearchMCTablesRequest
     *
     * @return SearchMCTablesResponse SearchMCTablesResponse
     */
    public function searchMCTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchMCTablesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 停止实验所有运行中的作业
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return StopExperimentResponse StopExperimentResponse
     */
    public function stopExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopExperiment',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止实验所有运行中的作业
     *  *
     * @param string $ExperimentId
     *
     * @return StopExperimentResponse StopExperimentResponse
     */
    public function stopExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 停止一个实验的作业
     *  *
     * @param string         $JobId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StopJobResponse StopJobResponse
     */
    public function stopJobWithOptions($JobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopJob',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止一个实验的作业
     *  *
     * @param string $JobId
     *
     * @return StopJobResponse StopJobResponse
     */
    public function stopJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @summary 更新实验内容
     *  *
     * @param string                         $ExperimentId
     * @param UpdateExperimentContentRequest $request      UpdateExperimentContentRequest
     * @param string[]                       $headers      map
     * @param RuntimeOptions                 $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentContentResponse UpdateExperimentContentResponse
     */
    public function updateExperimentContentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->version)) {
            $body['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExperimentContent',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/content',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新实验内容
     *  *
     * @param string                         $ExperimentId
     * @param UpdateExperimentContentRequest $request      UpdateExperimentContentRequest
     *
     * @return UpdateExperimentContentResponse UpdateExperimentContentResponse
     */
    public function updateExperimentContent($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentContentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新算法文件夹
     *  *
     * @param string                        $FolderId
     * @param UpdateExperimentFolderRequest $request  UpdateExperimentFolderRequest
     * @param string[]                      $headers  map
     * @param RuntimeOptions                $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentFolderResponse UpdateExperimentFolderResponse
     */
    public function updateExperimentFolderWithOptions($FolderId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $body['ParentFolderId'] = $request->parentFolderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExperimentFolder',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentfolders/' . OpenApiUtilClient::getEncodeParam($FolderId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新算法文件夹
     *  *
     * @param string                        $FolderId
     * @param UpdateExperimentFolderRequest $request  UpdateExperimentFolderRequest
     *
     * @return UpdateExperimentFolderResponse UpdateExperimentFolderResponse
     */
    public function updateExperimentFolder($FolderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentFolderWithOptions($FolderId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新实验的Meta信息
     *  *
     * @param string                      $ExperimentId
     * @param UpdateExperimentMetaRequest $request      UpdateExperimentMetaRequest
     * @param string[]                    $headers      map
     * @param RuntimeOptions              $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentMetaResponse UpdateExperimentMetaResponse
     */
    public function updateExperimentMetaWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExperimentMeta',
            'version'     => '2021-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/meta',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新实验的Meta信息
     *  *
     * @param string                      $ExperimentId
     * @param UpdateExperimentMetaRequest $request      UpdateExperimentMetaRequest
     *
     * @return UpdateExperimentMetaResponse UpdateExperimentMetaResponse
     */
    public function updateExperimentMeta($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentMetaWithOptions($ExperimentId, $request, $headers, $runtime);
    }
}
