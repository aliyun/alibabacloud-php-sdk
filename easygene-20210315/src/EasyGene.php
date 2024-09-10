<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\AbortRunRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\AbortRunResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\AbortSubmissionRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\AbortSubmissionResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CopyPublicEntityRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CopyPublicEntityResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateAppRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateAppResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateAppShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateEntityRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateEntityResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateEntityShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateRunRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateRunResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateRunShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateSubmissionRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateSubmissionResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateSubmissionShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateTemplateShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteAppRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteAppResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteEntityItemsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteEntityItemsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteEntityItemsShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteEntityRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteEntityResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteRunRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteRunResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteSubmissionRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteSubmissionResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DownloadEntityRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DownloadEntityResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\DownloadEntityShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetEntityRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetEntityResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetGlobalAppRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetGlobalAppResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetGlobalAppShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetPublicDatasetEntityRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetPublicDatasetEntityResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetPublicDatasetRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetPublicDatasetResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetPublicDatasetShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetRunRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetRunResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetSubmissionRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetSubmissionResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetTemplateRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetTemplateResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ImportAppRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ImportAppResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\InstallGlobalAppRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\InstallGlobalAppResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListAppsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListAppsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListAuthorizedSoftwareRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListAuthorizedSoftwareResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListContainerImagesRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListContainerImagesResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListEntitiesRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListEntitiesResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListEntityItemsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListEntityItemsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListGlobalAppsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListGlobalAppsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetEntitiesRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetEntitiesResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetEntityItemsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetEntityItemsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetTagsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetTagsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListRegionsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListRunsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListRunsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListSubmissionsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListSubmissionsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListUserActiveRunsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListUserActiveRunsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ResumeSubmissionRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ResumeSubmissionResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\TagAppRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\TagAppResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityItemsRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityItemsResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityItemsShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateTemplateShrinkRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateWorkspaceRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateWorkspaceResponse;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UploadEntityRequest;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\UploadEntityResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EasyGene extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('easygene', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 暂停任务
     *  *
     * @param AbortRunRequest $request AbortRunRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return AbortRunResponse AbortRunResponse
     */
    public function abortRunWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->runId)) {
            $query['RunId'] = $request->runId;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortRun',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbortRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停任务
     *  *
     * @param AbortRunRequest $request AbortRunRequest
     *
     * @return AbortRunResponse AbortRunResponse
     */
    public function abortRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abortRunWithOptions($request, $runtime);
    }

    /**
     * @summary 取消投递
     *  *
     * @param AbortSubmissionRequest $request AbortSubmissionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AbortSubmissionResponse AbortSubmissionResponse
     */
    public function abortSubmissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->submissionId)) {
            $query['SubmissionId'] = $request->submissionId;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortSubmission',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbortSubmissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消投递
     *  *
     * @param AbortSubmissionRequest $request AbortSubmissionRequest
     *
     * @return AbortSubmissionResponse AbortSubmissionResponse
     */
    public function abortSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abortSubmissionWithOptions($request, $runtime);
    }

    /**
     * @summary 拷贝公共数据集的数据表格
     *  *
     * @param CopyPublicEntityRequest $request CopyPublicEntityRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyPublicEntityResponse CopyPublicEntityResponse
     */
    public function copyPublicEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataset)) {
            $query['Dataset'] = $request->dataset;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyPublicEntity',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyPublicEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拷贝公共数据集的数据表格
     *  *
     * @param CopyPublicEntityRequest $request CopyPublicEntityRequest
     *
     * @return CopyPublicEntityResponse CopyPublicEntityResponse
     */
    public function copyPublicEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyPublicEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 创建应用
     *  *
     * @param CreateAppRequest $tmpReq  CreateAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createAppWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configs)) {
            $request->configsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configs, 'Configs', 'json');
        }
        if (!Utils::isUnset($tmpReq->dependencies)) {
            $request->dependenciesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dependencies, 'Dependencies', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->languageVersion)) {
            $query['LanguageVersion'] = $request->languageVersion;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->revisionComment)) {
            $query['RevisionComment'] = $request->revisionComment;
        }
        if (!Utils::isUnset($request->revisionTag)) {
            $query['RevisionTag'] = $request->revisionTag;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $body = [];
        if (!Utils::isUnset($request->configsShrink)) {
            $body['Configs'] = $request->configsShrink;
        }
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->dependenciesShrink)) {
            $body['Dependencies'] = $request->dependenciesShrink;
        }
        if (!Utils::isUnset($request->documentation)) {
            $body['Documentation'] = $request->documentation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建应用
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @summary 创建数据表格
     *  *
     * @param CreateEntityRequest $tmpReq  CreateEntityRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEntityResponse CreateEntityResponse
     */
    public function createEntityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEntityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityItems)) {
            $request->entityItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityItems, 'EntityItems', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $body = [];
        if (!Utils::isUnset($request->entityItemsShrink)) {
            $body['EntityItems'] = $request->entityItemsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEntity',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据表格
     *  *
     * @param CreateEntityRequest $request CreateEntityRequest
     *
     * @return CreateEntityResponse CreateEntityResponse
     */
    public function createEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateRunRequest $tmpReq  CreateRunRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRunResponse CreateRunResponse
     */
    public function createRunWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRunShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->executeOptions)) {
            $request->executeOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executeOptions, 'ExecuteOptions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appRevision)) {
            $query['AppRevision'] = $request->appRevision;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->defaultRuntime)) {
            $query['DefaultRuntime'] = $request->defaultRuntime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executeDirectory)) {
            $query['ExecuteDirectory'] = $request->executeDirectory;
        }
        if (!Utils::isUnset($request->executeOptionsShrink)) {
            $query['ExecuteOptions'] = $request->executeOptionsShrink;
        }
        if (!Utils::isUnset($request->inputs)) {
            $query['Inputs'] = $request->inputs;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->outputFolder)) {
            $query['OutputFolder'] = $request->outputFolder;
        }
        if (!Utils::isUnset($request->revisionTag)) {
            $query['RevisionTag'] = $request->revisionTag;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->runName)) {
            $query['RunName'] = $request->runName;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRun',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateRunRequest $request CreateRunRequest
     *
     * @return CreateRunResponse CreateRunResponse
     */
    public function createRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRunWithOptions($request, $runtime);
    }

    /**
     * @summary 创建提交
     *  *
     * @param CreateSubmissionRequest $tmpReq  CreateSubmissionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSubmissionResponse CreateSubmissionResponse
     */
    public function createSubmissionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSubmissionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityNames)) {
            $request->entityNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityNames, 'EntityNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->defaultRuntime)) {
            $query['DefaultRuntime'] = $request->defaultRuntime;
        }
        if (!Utils::isUnset($request->entityNamesShrink)) {
            $query['EntityNames'] = $request->entityNamesShrink;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->executeDirectory)) {
            $query['ExecuteDirectory'] = $request->executeDirectory;
        }
        if (!Utils::isUnset($request->executeOptions)) {
            $query['ExecuteOptions'] = $request->executeOptions;
        }
        if (!Utils::isUnset($request->inputs)) {
            $query['Inputs'] = $request->inputs;
        }
        if (!Utils::isUnset($request->outputFolder)) {
            $query['OutputFolder'] = $request->outputFolder;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['Outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->revision)) {
            $query['Revision'] = $request->revision;
        }
        if (!Utils::isUnset($request->revisionTag)) {
            $query['RevisionTag'] = $request->revisionTag;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSubmission',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubmissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建提交
     *  *
     * @param CreateSubmissionRequest $request CreateSubmissionRequest
     *
     * @return CreateSubmissionResponse CreateSubmissionResponse
     */
    public function createSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubmissionWithOptions($request, $runtime);
    }

    /**
     * @summary 创建应用模板
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
        if (!Utils::isUnset($tmpReq->inputsExpression)) {
            $request->inputsExpressionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputsExpression, 'InputsExpression', 'json');
        }
        if (!Utils::isUnset($tmpReq->outputsExpression)) {
            $request->outputsExpressionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outputsExpression, 'OutputsExpression', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appRevision)) {
            $query['AppRevision'] = $request->appRevision;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->revisionTag)) {
            $query['RevisionTag'] = $request->revisionTag;
        }
        if (!Utils::isUnset($request->rootEntity)) {
            $query['RootEntity'] = $request->rootEntity;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $body = [];
        if (!Utils::isUnset($request->inputsExpressionShrink)) {
            $body['InputsExpression'] = $request->inputsExpressionShrink;
        }
        if (!Utils::isUnset($request->outputsExpressionShrink)) {
            $body['OutputsExpression'] = $request->outputsExpressionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2021-03-15',
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
     * @summary 创建应用模板
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
     * @summary 创建工作空间
     *  *
     * @param CreateWorkspaceRequest $request CreateWorkspaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWorkspaceResponse CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->jobLifecycle)) {
            $query['JobLifecycle'] = $request->jobLifecycle;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param CreateWorkspaceRequest $request CreateWorkspaceRequest
     *
     * @return CreateWorkspaceResponse CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除应用
     *  *
     * @param DeleteAppRequest $request DeleteAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->revision)) {
            $query['Revision'] = $request->revision;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除应用
     *  *
     * @param DeleteAppRequest $request DeleteAppRequest
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @summary 删除实体表格
     *  *
     * @param DeleteEntityRequest $request DeleteEntityRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEntityResponse DeleteEntityResponse
     */
    public function deleteEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEntity',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实体表格
     *  *
     * @param DeleteEntityRequest $request DeleteEntityRequest
     *
     * @return DeleteEntityResponse DeleteEntityResponse
     */
    public function deleteEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 删除数据表格的条目
     *  *
     * @param DeleteEntityItemsRequest $tmpReq  DeleteEntityItemsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEntityItemsResponse DeleteEntityItemsResponse
     */
    public function deleteEntityItemsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteEntityItemsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityNames)) {
            $request->entityNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityNames, 'EntityNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->entityNamesShrink)) {
            $query['EntityNames'] = $request->entityNamesShrink;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEntityItems',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEntityItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据表格的条目
     *  *
     * @param DeleteEntityItemsRequest $request DeleteEntityItemsRequest
     *
     * @return DeleteEntityItemsResponse DeleteEntityItemsResponse
     */
    public function deleteEntityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEntityItemsWithOptions($request, $runtime);
    }

    /**
     * @summary 删除任务
     *  *
     * @param DeleteRunRequest $request DeleteRunRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRunResponse DeleteRunResponse
     */
    public function deleteRunWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->runId)) {
            $query['RunId'] = $request->runId;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRun',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除任务
     *  *
     * @param DeleteRunRequest $request DeleteRunRequest
     *
     * @return DeleteRunResponse DeleteRunResponse
     */
    public function deleteRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRunWithOptions($request, $runtime);
    }

    /**
     * @summary 删除投递
     *  *
     * @param DeleteSubmissionRequest $request DeleteSubmissionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSubmissionResponse DeleteSubmissionResponse
     */
    public function deleteSubmissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->submissionId)) {
            $query['SubmissionId'] = $request->submissionId;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubmission',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSubmissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除投递
     *  *
     * @param DeleteSubmissionRequest $request DeleteSubmissionRequest
     *
     * @return DeleteSubmissionResponse DeleteSubmissionResponse
     */
    public function deleteSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubmissionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除应用模板
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
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2021-03-15',
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
     * @summary 删除应用模板
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
     * @summary 删除工作空间
     *  *
     * @param DeleteWorkspaceRequest $request DeleteWorkspaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkspaceResponse DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspace',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除工作空间
     *  *
     * @param DeleteWorkspaceRequest $request DeleteWorkspaceRequest
     *
     * @return DeleteWorkspaceResponse DeleteWorkspaceResponse
     */
    public function deleteWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary 下载数据表格
     *  *
     * @param DownloadEntityRequest $tmpReq  DownloadEntityRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadEntityResponse DownloadEntityResponse
     */
    public function downloadEntityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DownloadEntityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityNames)) {
            $request->entityNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityNames, 'EntityNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->entityNamesShrink)) {
            $query['EntityNames'] = $request->entityNamesShrink;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadEntity',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下载数据表格
     *  *
     * @param DownloadEntityRequest $request DownloadEntityRequest
     *
     * @return DownloadEntityResponse DownloadEntityResponse
     */
    public function downloadEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 查询应用详情
     *  *
     * @param GetAppRequest  $request GetAppRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppResponse GetAppResponse
     */
    public function getAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->revision)) {
            $query['Revision'] = $request->revision;
        }
        if (!Utils::isUnset($request->revisionTag)) {
            $query['RevisionTag'] = $request->revisionTag;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApp',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询应用详情
     *  *
     * @param GetAppRequest $request GetAppRequest
     *
     * @return GetAppResponse GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @summary 查询数据表格信息
     *  *
     * @param GetEntityRequest $request GetEntityRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEntityResponse GetEntityResponse
     */
    public function getEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEntity',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询数据表格信息
     *  *
     * @param GetEntityRequest $request GetEntityRequest
     *
     * @return GetEntityResponse GetEntityResponse
     */
    public function getEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 查询平台公共应用详情
     *  *
     * @param GetGlobalAppRequest $tmpReq  GetGlobalAppRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGlobalAppResponse GetGlobalAppResponse
     */
    public function getGlobalAppWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetGlobalAppShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->attributes)) {
            $request->attributesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'Attributes', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGlobalApp',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGlobalAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询平台公共应用详情
     *  *
     * @param GetGlobalAppRequest $request GetGlobalAppRequest
     *
     * @return GetGlobalAppResponse GetGlobalAppResponse
     */
    public function getGlobalApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGlobalAppWithOptions($request, $runtime);
    }

    /**
     * @summary 查询平台公共数据集详情
     *  *
     * @param GetPublicDatasetRequest $tmpReq  GetPublicDatasetRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPublicDatasetResponse GetPublicDatasetResponse
     */
    public function getPublicDatasetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetPublicDatasetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->attributes)) {
            $request->attributesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'Attributes', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublicDataset',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPublicDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询平台公共数据集详情
     *  *
     * @param GetPublicDatasetRequest $request GetPublicDatasetRequest
     *
     * @return GetPublicDatasetResponse GetPublicDatasetResponse
     */
    public function getPublicDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary 查询平台公共数据集特定的实体定义
     *  *
     * @param GetPublicDatasetEntityRequest $request GetPublicDatasetEntityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPublicDatasetEntityResponse GetPublicDatasetEntityResponse
     */
    public function getPublicDatasetEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublicDatasetEntity',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPublicDatasetEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询平台公共数据集特定的实体定义
     *  *
     * @param GetPublicDatasetEntityRequest $request GetPublicDatasetEntityRequest
     *
     * @return GetPublicDatasetEntityResponse GetPublicDatasetEntityResponse
     */
    public function getPublicDatasetEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicDatasetEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 获取任务详情
     *  *
     * @param GetRunRequest  $request GetRunRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRunResponse GetRunResponse
     */
    public function getRunWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRun',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务详情
     *  *
     * @param GetRunRequest $request GetRunRequest
     *
     * @return GetRunResponse GetRunResponse
     */
    public function getRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRunWithOptions($request, $runtime);
    }

    /**
     * @summary 获取投递详情
     *  *
     * @param GetSubmissionRequest $request GetSubmissionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSubmissionResponse GetSubmissionResponse
     */
    public function getSubmissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubmission',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubmissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取投递详情
     *  *
     * @param GetSubmissionRequest $request GetSubmissionRequest
     *
     * @return GetSubmissionResponse GetSubmissionResponse
     */
    public function getSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubmissionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询应用模板的详情
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
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2021-03-15',
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
     * @summary 查询应用模板的详情
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
     * @summary 查询工作空间详情
     *  *
     * @param GetWorkspaceRequest $request GetWorkspaceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkspace',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询工作空间详情
     *  *
     * @param GetWorkspaceRequest $request GetWorkspaceRequest
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary 导入应用。
     *  *
     * @param ImportAppRequest $request ImportAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportAppResponse ImportAppResponse
     */
    public function importAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportApp',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导入应用。
     *  *
     * @param ImportAppRequest $request ImportAppRequest
     *
     * @return ImportAppResponse ImportAppResponse
     */
    public function importApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAppWithOptions($request, $runtime);
    }

    /**
     * @summary 安装平台公共应用到工作空间中。
     *  *
     * @param InstallGlobalAppRequest $request InstallGlobalAppRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallGlobalAppResponse InstallGlobalAppResponse
     */
    public function installGlobalAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->installedAppName)) {
            $query['InstalledAppName'] = $request->installedAppName;
        }
        if (!Utils::isUnset($request->namespaceName)) {
            $query['NamespaceName'] = $request->namespaceName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallGlobalApp',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallGlobalAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 安装平台公共应用到工作空间中。
     *  *
     * @param InstallGlobalAppRequest $request InstallGlobalAppRequest
     *
     * @return InstallGlobalAppResponse InstallGlobalAppResponse
     */
    public function installGlobalApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installGlobalAppWithOptions($request, $runtime);
    }

    /**
     * @summary 列出应用
     *  *
     * @param ListAppsRequest $request ListAppsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppsResponse ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->isReversed)) {
            $query['IsReversed'] = $request->isReversed;
        }
        if (!Utils::isUnset($request->labelSelector)) {
            $query['LabelSelector'] = $request->labelSelector;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->search)) {
            $query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApps',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出应用
     *  *
     * @param ListAppsRequest $request ListAppsRequest
     *
     * @return ListAppsResponse ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取平台第三方软件列表
     *  *
     * @param ListAuthorizedSoftwareRequest $request ListAuthorizedSoftwareRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAuthorizedSoftwareResponse ListAuthorizedSoftwareResponse
     */
    public function listAuthorizedSoftwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthorizedSoftware',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthorizedSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取平台第三方软件列表
     *  *
     * @param ListAuthorizedSoftwareRequest $request ListAuthorizedSoftwareRequest
     *
     * @return ListAuthorizedSoftwareResponse ListAuthorizedSoftwareResponse
     */
    public function listAuthorizedSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedSoftwareWithOptions($request, $runtime);
    }

    /**
     * @summary 获取平台公共容器镜像列表
     *  *
     * @param ListContainerImagesRequest $request ListContainerImagesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListContainerImagesResponse ListContainerImagesResponse
     */
    public function listContainerImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListContainerImages',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListContainerImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取平台公共容器镜像列表
     *  *
     * @param ListContainerImagesRequest $request ListContainerImagesRequest
     *
     * @return ListContainerImagesResponse ListContainerImagesResponse
     */
    public function listContainerImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContainerImagesWithOptions($request, $runtime);
    }

    /**
     * @summary 列出数据实体列表
     *  *
     * @param ListEntitiesRequest $request ListEntitiesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEntitiesResponse ListEntitiesResponse
     */
    public function listEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEntities',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出数据实体列表
     *  *
     * @param ListEntitiesRequest $request ListEntitiesRequest
     *
     * @return ListEntitiesResponse ListEntitiesResponse
     */
    public function listEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEntitiesWithOptions($request, $runtime);
    }

    /**
     * @summary 列出数据表格的条目
     *  *
     * @param ListEntityItemsRequest $request ListEntityItemsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEntityItemsResponse ListEntityItemsResponse
     */
    public function listEntityItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->isReversed)) {
            $query['IsReversed'] = $request->isReversed;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->search)) {
            $query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEntityItems',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEntityItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出数据表格的条目
     *  *
     * @param ListEntityItemsRequest $request ListEntityItemsRequest
     *
     * @return ListEntityItemsResponse ListEntityItemsResponse
     */
    public function listEntityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEntityItemsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取平台公共应用列表
     *  *
     * @param ListGlobalAppsRequest $request ListGlobalAppsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGlobalAppsResponse ListGlobalAppsResponse
     */
    public function listGlobalAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGlobalApps',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGlobalAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取平台公共应用列表
     *  *
     * @param ListGlobalAppsRequest $request ListGlobalAppsRequest
     *
     * @return ListGlobalAppsResponse ListGlobalAppsResponse
     */
    public function listGlobalApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGlobalAppsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取平台公共数据集列表
     *  *
     * @param ListPublicDatasetRequest $request ListPublicDatasetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicDatasetResponse ListPublicDatasetResponse
     */
    public function listPublicDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicDataset',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取平台公共数据集列表
     *  *
     * @param ListPublicDatasetRequest $request ListPublicDatasetRequest
     *
     * @return ListPublicDatasetResponse ListPublicDatasetResponse
     */
    public function listPublicDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary 查询平台公共数据集包含的实体列表
     *  *
     * @param ListPublicDatasetEntitiesRequest $request ListPublicDatasetEntitiesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicDatasetEntitiesResponse ListPublicDatasetEntitiesResponse
     */
    public function listPublicDatasetEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicDatasetEntities',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicDatasetEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询平台公共数据集包含的实体列表
     *  *
     * @param ListPublicDatasetEntitiesRequest $request ListPublicDatasetEntitiesRequest
     *
     * @return ListPublicDatasetEntitiesResponse ListPublicDatasetEntitiesResponse
     */
    public function listPublicDatasetEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicDatasetEntitiesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询平台公共数据集特定的实体表格数据
     *  *
     * @param ListPublicDatasetEntityItemsRequest $request ListPublicDatasetEntityItemsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicDatasetEntityItemsResponse ListPublicDatasetEntityItemsResponse
     */
    public function listPublicDatasetEntityItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicDatasetEntityItems',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicDatasetEntityItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询平台公共数据集特定的实体表格数据
     *  *
     * @param ListPublicDatasetEntityItemsRequest $request ListPublicDatasetEntityItemsRequest
     *
     * @return ListPublicDatasetEntityItemsResponse ListPublicDatasetEntityItemsResponse
     */
    public function listPublicDatasetEntityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicDatasetEntityItemsWithOptions($request, $runtime);
    }

    /**
     * @summary 列出所有公共数据集标签
     *  *
     * @param ListPublicDatasetTagsRequest $request ListPublicDatasetTagsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicDatasetTagsResponse ListPublicDatasetTagsResponse
     */
    public function listPublicDatasetTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicDatasetTags',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicDatasetTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出所有公共数据集标签
     *  *
     * @param ListPublicDatasetTagsRequest $request ListPublicDatasetTagsRequest
     *
     * @return ListPublicDatasetTagsResponse ListPublicDatasetTagsResponse
     */
    public function listPublicDatasetTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicDatasetTagsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询基因分析平台产品的可用地域。
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询基因分析平台产品的可用地域。
     *  *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @summary 列出任务
     *  *
     * @param ListRunsRequest $request ListRunsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRunsResponse ListRunsResponse
     */
    public function listRunsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRuns',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出任务
     *  *
     * @param ListRunsRequest $request ListRunsRequest
     *
     * @return ListRunsResponse ListRunsResponse
     */
    public function listRuns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRunsWithOptions($request, $runtime);
    }

    /**
     * @summary 列出投递
     *  *
     * @param ListSubmissionsRequest $request ListSubmissionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSubmissionsResponse ListSubmissionsResponse
     */
    public function listSubmissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSubmissions',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSubmissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出投递
     *  *
     * @param ListSubmissionsRequest $request ListSubmissionsRequest
     *
     * @return ListSubmissionsResponse ListSubmissionsResponse
     */
    public function listSubmissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubmissionsWithOptions($request, $runtime);
    }

    /**
     * @summary 列出应用模板
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isReversed)) {
            $query['IsReversed'] = $request->isReversed;
        }
        if (!Utils::isUnset($request->labelSelector)) {
            $query['LabelSelector'] = $request->labelSelector;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->search)) {
            $query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2021-03-15',
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
     * @summary 列出应用模板
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
     * @summary 最近任务列表
     *  *
     * @param ListUserActiveRunsRequest $request ListUserActiveRunsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserActiveRunsResponse ListUserActiveRunsResponse
     */
    public function listUserActiveRunsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserActiveRuns',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserActiveRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 最近任务列表
     *  *
     * @param ListUserActiveRunsRequest $request ListUserActiveRunsRequest
     *
     * @return ListUserActiveRunsResponse ListUserActiveRunsResponse
     */
    public function listUserActiveRuns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserActiveRunsWithOptions($request, $runtime);
    }

    /**
     * @summary 列出工作空间
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出工作空间
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkspacesWithOptions($request, $runtime);
    }

    /**
     * @summary 恢复投递
     *  *
     * @param ResumeSubmissionRequest $request ResumeSubmissionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeSubmissionResponse ResumeSubmissionResponse
     */
    public function resumeSubmissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->submissionId)) {
            $query['SubmissionId'] = $request->submissionId;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeSubmission',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeSubmissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 恢复投递
     *  *
     * @param ResumeSubmissionRequest $request ResumeSubmissionRequest
     *
     * @return ResumeSubmissionResponse ResumeSubmissionResponse
     */
    public function resumeSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeSubmissionWithOptions($request, $runtime);
    }

    /**
     * @summary 应用版本打标
     *  *
     * @param TagAppRequest  $request TagAppRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return TagAppResponse TagAppResponse
     */
    public function tagAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appRevision)) {
            $query['AppRevision'] = $request->appRevision;
        }
        if (!Utils::isUnset($request->revisionTag)) {
            $query['RevisionTag'] = $request->revisionTag;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagApp',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用版本打标
     *  *
     * @param TagAppRequest $request TagAppRequest
     *
     * @return TagAppResponse TagAppResponse
     */
    public function tagApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagAppWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI UpdateEntity is deprecated, please use EasyGene::2021-03-15::UpdateEntityItems instead
     *  *
     * @summary 修改数据表格
     *  *
     * Deprecated
     *
     * @param UpdateEntityRequest $tmpReq  UpdateEntityRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEntityResponse UpdateEntityResponse
     */
    public function updateEntityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEntityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityItems)) {
            $request->entityItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityItems, 'EntityItems', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $body = [];
        if (!Utils::isUnset($request->entityItemsShrink)) {
            $body['EntityItems'] = $request->entityItemsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEntity',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI UpdateEntity is deprecated, please use EasyGene::2021-03-15::UpdateEntityItems instead
     *  *
     * @summary 修改数据表格
     *  *
     * Deprecated
     *
     * @param UpdateEntityRequest $request UpdateEntityRequest
     *
     * @return UpdateEntityResponse UpdateEntityResponse
     */
    public function updateEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 修改表格数据
     *  *
     * @param UpdateEntityItemsRequest $tmpReq  UpdateEntityItemsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEntityItemsResponse UpdateEntityItemsResponse
     */
    public function updateEntityItemsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEntityItemsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityItems)) {
            $request->entityItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityItems, 'EntityItems', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $body = [];
        if (!Utils::isUnset($request->entityItemsShrink)) {
            $body['EntityItems'] = $request->entityItemsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEntityItems',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEntityItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改表格数据
     *  *
     * @param UpdateEntityItemsRequest $request UpdateEntityItemsRequest
     *
     * @return UpdateEntityItemsResponse UpdateEntityItemsResponse
     */
    public function updateEntityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEntityItemsWithOptions($request, $runtime);
    }

    /**
     * @summary 修改应用模板
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
        if (!Utils::isUnset($tmpReq->inputsExpression)) {
            $request->inputsExpressionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputsExpression, 'InputsExpression', 'json');
        }
        if (!Utils::isUnset($tmpReq->outputsExpression)) {
            $request->outputsExpressionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outputsExpression, 'OutputsExpression', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->rootEntity)) {
            $query['RootEntity'] = $request->rootEntity;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $body = [];
        if (!Utils::isUnset($request->inputsExpressionShrink)) {
            $body['InputsExpression'] = $request->inputsExpressionShrink;
        }
        if (!Utils::isUnset($request->outputsExpressionShrink)) {
            $body['OutputsExpression'] = $request->outputsExpressionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2021-03-15',
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
     * @summary 修改应用模板
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
     * @summary 修改工作空间
     *  *
     * @param UpdateWorkspaceRequest $request UpdateWorkspaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkspaceResponse UpdateWorkspaceResponse
     */
    public function updateWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->jobLifecycle)) {
            $query['JobLifecycle'] = $request->jobLifecycle;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspace',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改工作空间
     *  *
     * @param UpdateWorkspaceRequest $request UpdateWorkspaceRequest
     *
     * @return UpdateWorkspaceResponse UpdateWorkspaceResponse
     */
    public function updateWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary 上传数据表格
     *  *
     * @param UploadEntityRequest $request UploadEntityRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadEntityResponse UploadEntityResponse
     */
    public function uploadEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityCSVFile)) {
            $query['EntityCSVFile'] = $request->entityCSVFile;
        }
        if (!Utils::isUnset($request->workspace)) {
            $query['Workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadEntity',
            'version'     => '2021-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上传数据表格
     *  *
     * @param UploadEntityRequest $request UploadEntityRequest
     *
     * @return UploadEntityResponse UploadEntityResponse
     */
    public function uploadEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadEntityWithOptions($request, $runtime);
    }
}
