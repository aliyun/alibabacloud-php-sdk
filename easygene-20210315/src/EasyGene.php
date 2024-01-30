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
     * @param AbortRunRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AbortRunResponse
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
     * @param AbortRunRequest $request
     *
     * @return AbortRunResponse
     */
    public function abortRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abortRunWithOptions($request, $runtime);
    }

    /**
     * @param AbortSubmissionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AbortSubmissionResponse
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
     * @param AbortSubmissionRequest $request
     *
     * @return AbortSubmissionResponse
     */
    public function abortSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abortSubmissionWithOptions($request, $runtime);
    }

    /**
     * @param CopyPublicEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CopyPublicEntityResponse
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
     * @param CopyPublicEntityRequest $request
     *
     * @return CopyPublicEntityResponse
     */
    public function copyPublicEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyPublicEntityWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
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
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateEntityRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEntityResponse
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
     * @param CreateEntityRequest $request
     *
     * @return CreateEntityResponse
     */
    public function createEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEntityWithOptions($request, $runtime);
    }

    /**
     * @param CreateRunRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateRunResponse
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
     * @param CreateRunRequest $request
     *
     * @return CreateRunResponse
     */
    public function createRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRunWithOptions($request, $runtime);
    }

    /**
     * @param CreateSubmissionRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSubmissionResponse
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
     * @param CreateSubmissionRequest $request
     *
     * @return CreateSubmissionResponse
     */
    public function createSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubmissionWithOptions($request, $runtime);
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
     * @param CreateWorkspaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
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
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
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
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEntityRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteEntityResponse
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
     * @param DeleteEntityRequest $request
     *
     * @return DeleteEntityResponse
     */
    public function deleteEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEntityWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEntityItemsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEntityItemsResponse
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
     * @param DeleteEntityItemsRequest $request
     *
     * @return DeleteEntityItemsResponse
     */
    public function deleteEntityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEntityItemsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRunRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteRunResponse
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
     * @param DeleteRunRequest $request
     *
     * @return DeleteRunResponse
     */
    public function deleteRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRunWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSubmissionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSubmissionResponse
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
     * @param DeleteSubmissionRequest $request
     *
     * @return DeleteSubmissionResponse
     */
    public function deleteSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubmissionWithOptions($request, $runtime);
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
     * @param DeleteWorkspaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkspaceResponse
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
     * @param DeleteWorkspaceRequest $request
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param DownloadEntityRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return DownloadEntityResponse
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
     * @param DownloadEntityRequest $request
     *
     * @return DownloadEntityResponse
     */
    public function downloadEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadEntityWithOptions($request, $runtime);
    }

    /**
     * @param GetAppRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
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
     * @param GetAppRequest $request
     *
     * @return GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @param GetEntityRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetEntityResponse
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
     * @param GetEntityRequest $request
     *
     * @return GetEntityResponse
     */
    public function getEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEntityWithOptions($request, $runtime);
    }

    /**
     * @param GetGlobalAppRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return GetGlobalAppResponse
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
     * @param GetGlobalAppRequest $request
     *
     * @return GetGlobalAppResponse
     */
    public function getGlobalApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGlobalAppWithOptions($request, $runtime);
    }

    /**
     * @param GetPublicDatasetRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return GetPublicDatasetResponse
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
     * @param GetPublicDatasetRequest $request
     *
     * @return GetPublicDatasetResponse
     */
    public function getPublicDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicDatasetWithOptions($request, $runtime);
    }

    /**
     * @param GetPublicDatasetEntityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPublicDatasetEntityResponse
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
     * @param GetPublicDatasetEntityRequest $request
     *
     * @return GetPublicDatasetEntityResponse
     */
    public function getPublicDatasetEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicDatasetEntityWithOptions($request, $runtime);
    }

    /**
     * @param GetRunRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRunResponse
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
     * @param GetRunRequest $request
     *
     * @return GetRunResponse
     */
    public function getRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRunWithOptions($request, $runtime);
    }

    /**
     * @param GetSubmissionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSubmissionResponse
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
     * @param GetSubmissionRequest $request
     *
     * @return GetSubmissionResponse
     */
    public function getSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubmissionWithOptions($request, $runtime);
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
     * @param GetWorkspaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
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
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param ImportAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ImportAppResponse
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
     * @param ImportAppRequest $request
     *
     * @return ImportAppResponse
     */
    public function importApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAppWithOptions($request, $runtime);
    }

    /**
     * @param InstallGlobalAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InstallGlobalAppResponse
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
     * @param InstallGlobalAppRequest $request
     *
     * @return InstallGlobalAppResponse
     */
    public function installGlobalApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installGlobalAppWithOptions($request, $runtime);
    }

    /**
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
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
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListAuthorizedSoftwareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAuthorizedSoftwareResponse
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
     * @param ListAuthorizedSoftwareRequest $request
     *
     * @return ListAuthorizedSoftwareResponse
     */
    public function listAuthorizedSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedSoftwareWithOptions($request, $runtime);
    }

    /**
     * @param ListContainerImagesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListContainerImagesResponse
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
     * @param ListContainerImagesRequest $request
     *
     * @return ListContainerImagesResponse
     */
    public function listContainerImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContainerImagesWithOptions($request, $runtime);
    }

    /**
     * @param ListEntitiesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListEntitiesResponse
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
     * @param ListEntitiesRequest $request
     *
     * @return ListEntitiesResponse
     */
    public function listEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param ListEntityItemsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListEntityItemsResponse
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
     * @param ListEntityItemsRequest $request
     *
     * @return ListEntityItemsResponse
     */
    public function listEntityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEntityItemsWithOptions($request, $runtime);
    }

    /**
     * @param ListGlobalAppsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListGlobalAppsResponse
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
     * @param ListGlobalAppsRequest $request
     *
     * @return ListGlobalAppsResponse
     */
    public function listGlobalApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGlobalAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicDatasetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPublicDatasetResponse
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
     * @param ListPublicDatasetRequest $request
     *
     * @return ListPublicDatasetResponse
     */
    public function listPublicDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicDatasetWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicDatasetEntitiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPublicDatasetEntitiesResponse
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
     * @param ListPublicDatasetEntitiesRequest $request
     *
     * @return ListPublicDatasetEntitiesResponse
     */
    public function listPublicDatasetEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicDatasetEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicDatasetEntityItemsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListPublicDatasetEntityItemsResponse
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
     * @param ListPublicDatasetEntityItemsRequest $request
     *
     * @return ListPublicDatasetEntityItemsResponse
     */
    public function listPublicDatasetEntityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicDatasetEntityItemsWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicDatasetTagsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPublicDatasetTagsResponse
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
     * @param ListPublicDatasetTagsRequest $request
     *
     * @return ListPublicDatasetTagsResponse
     */
    public function listPublicDatasetTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicDatasetTagsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
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
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @param ListRunsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListRunsResponse
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
     * @param ListRunsRequest $request
     *
     * @return ListRunsResponse
     */
    public function listRuns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRunsWithOptions($request, $runtime);
    }

    /**
     * @param ListSubmissionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSubmissionsResponse
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
     * @param ListSubmissionsRequest $request
     *
     * @return ListSubmissionsResponse
     */
    public function listSubmissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubmissionsWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
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
     * @param ListUserActiveRunsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserActiveRunsResponse
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
     * @param ListUserActiveRunsRequest $request
     *
     * @return ListUserActiveRunsResponse
     */
    public function listUserActiveRuns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserActiveRunsWithOptions($request, $runtime);
    }

    /**
     * @param ListWorkspacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
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
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkspacesWithOptions($request, $runtime);
    }

    /**
     * @param ResumeSubmissionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ResumeSubmissionResponse
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
     * @param ResumeSubmissionRequest $request
     *
     * @return ResumeSubmissionResponse
     */
    public function resumeSubmission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeSubmissionWithOptions($request, $runtime);
    }

    /**
     * @param TagAppRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return TagAppResponse
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
     * @param TagAppRequest $request
     *
     * @return TagAppResponse
     */
    public function tagApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagAppWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
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
     * @deprecated
     *   *
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
     * @param UpdateEntityItemsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEntityItemsResponse
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
     * @param UpdateEntityItemsRequest $request
     *
     * @return UpdateEntityItemsResponse
     */
    public function updateEntityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEntityItemsWithOptions($request, $runtime);
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
     * @param UpdateWorkspaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWorkspaceResponse
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
     * @param UpdateWorkspaceRequest $request
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param UploadEntityRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UploadEntityResponse
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
     * @param UploadEntityRequest $request
     *
     * @return UploadEntityResponse
     */
    public function uploadEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadEntityWithOptions($request, $runtime);
    }
}
