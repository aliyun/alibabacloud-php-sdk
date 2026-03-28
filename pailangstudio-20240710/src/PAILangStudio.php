<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateDeploymentRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateDeploymentResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseJobRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseJobResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateRuntimeRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateRuntimeResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteDeploymentRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteDeploymentResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteKnowledgeBaseJobRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteKnowledgeBaseJobResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteRuntimeRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteRuntimeResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetDeploymentRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetRuntimeRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetRuntimeResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetSnapshotRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetSnapshotResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListDeploymentsRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListDeploymentsResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseChunksRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseChunksResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseJobsRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseJobsResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBasesRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBasesResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListRuntimesRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListRuntimesResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\RetrieveKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\RetrieveKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateDeploymentRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateDeploymentResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseChunkRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseChunkResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseJobRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseJobResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateRuntimeRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateRuntimeResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateSnapshotRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateSnapshotResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PAILangStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pailangstudio', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Create a deployment job.
     *
     * @param request - CreateDeploymentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeploymentResponse
     *
     * @param CreateDeploymentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDeploymentResponse
     */
    public function createDeploymentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->autoApproval) {
            @$body['AutoApproval'] = $request->autoApproval;
        }

        if (null !== $request->chatHistoryConfig) {
            @$body['ChatHistoryConfig'] = $request->chatHistoryConfig;
        }

        if (null !== $request->contentModerationConfig) {
            @$body['ContentModerationConfig'] = $request->contentModerationConfig;
        }

        if (null !== $request->deploymentConfig) {
            @$body['DeploymentConfig'] = $request->deploymentConfig;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enableTrace) {
            @$body['EnableTrace'] = $request->enableTrace;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceSnapshotId) {
            @$body['ResourceSnapshotId'] = $request->resourceSnapshotId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceName) {
            @$body['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->workDir) {
            @$body['WorkDir'] = $request->workDir;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDeployment',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/deployments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a deployment job.
     *
     * @param request - CreateDeploymentRequest
     *
     * @returns CreateDeploymentResponse
     *
     * @param CreateDeploymentRequest $request
     *
     * @return CreateDeploymentResponse
     */
    public function createDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeploymentWithOptions($request, $headers, $runtime);
    }

    /**
     * Create a knowledge base.
     *
     * @param request - CreateKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseResponse
     *
     * @param CreateKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateKnowledgeBaseResponse
     */
    public function createKnowledgeBaseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->chunkConfig) {
            @$body['ChunkConfig'] = $request->chunkConfig;
        }

        if (null !== $request->dataSources) {
            @$body['DataSources'] = $request->dataSources;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->embeddingConfig) {
            @$body['EmbeddingConfig'] = $request->embeddingConfig;
        }

        if (null !== $request->indexColumnConfig) {
            @$body['IndexColumnConfig'] = $request->indexColumnConfig;
        }

        if (null !== $request->knowledgeBaseType) {
            @$body['KnowledgeBaseType'] = $request->knowledgeBaseType;
        }

        if (null !== $request->metaDataConfig) {
            @$body['MetaDataConfig'] = $request->metaDataConfig;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->outputDir) {
            @$body['OutputDir'] = $request->outputDir;
        }

        if (null !== $request->runtimeId) {
            @$body['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->vectorDBConfig) {
            @$body['VectorDBConfig'] = $request->vectorDBConfig;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a knowledge base.
     *
     * @param request - CreateKnowledgeBaseRequest
     *
     * @returns CreateKnowledgeBaseResponse
     *
     * @param CreateKnowledgeBaseRequest $request
     *
     * @return CreateKnowledgeBaseResponse
     */
    public function createKnowledgeBase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseWithOptions($request, $headers, $runtime);
    }

    /**
     * Create a Knowledge Base Task.
     *
     * @param request - CreateKnowledgeBaseJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param CreateKnowledgeBaseJobRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateKnowledgeBaseJobResponse
     */
    public function createKnowledgeBaseJobWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->ecsSpecs) {
            @$body['EcsSpecs'] = $request->ecsSpecs;
        }

        if (null !== $request->embeddingConfig) {
            @$body['EmbeddingConfig'] = $request->embeddingConfig;
        }

        if (null !== $request->jobAction) {
            @$body['JobAction'] = $request->jobAction;
        }

        if (null !== $request->maxRunningTimeInSeconds) {
            @$body['MaxRunningTimeInSeconds'] = $request->maxRunningTimeInSeconds;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->userVpc) {
            @$body['UserVpc'] = $request->userVpc;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBaseJob',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a Knowledge Base Task.
     *
     * @param request - CreateKnowledgeBaseJobRequest
     *
     * @returns CreateKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param CreateKnowledgeBaseJobRequest $request
     *
     * @return CreateKnowledgeBaseJobResponse
     */
    public function createKnowledgeBaseJob($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseJobWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * Create a runtime.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/zh/pai/dsw-billing-description?spm=a2c4g.11186623.help-menu-30347.d_1_1_3.fb4453d9l200bE) of PAI-DSW product.
     *
     * @param request - CreateRuntimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRuntimeResponse
     *
     * @param CreateRuntimeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateRuntimeResponse
     */
    public function createRuntimeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->autoUpdateImage) {
            @$body['AutoUpdateImage'] = $request->autoUpdateImage;
        }

        if (null !== $request->credentialConfig) {
            @$body['CredentialConfig'] = $request->credentialConfig;
        }

        if (null !== $request->dataSources) {
            @$body['DataSources'] = $request->dataSources;
        }

        if (null !== $request->ecsSpec) {
            @$body['EcsSpec'] = $request->ecsSpec;
        }

        if (null !== $request->envs) {
            @$body['Envs'] = $request->envs;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->runTimeout) {
            @$body['RunTimeout'] = $request->runTimeout;
        }

        if (null !== $request->runtimeName) {
            @$body['RuntimeName'] = $request->runtimeName;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        if (null !== $request->userVpc) {
            @$body['UserVpc'] = $request->userVpc;
        }

        if (null !== $request->workDir) {
            @$body['WorkDir'] = $request->workDir;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRuntime',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/runtimes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a runtime.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/zh/pai/dsw-billing-description?spm=a2c4g.11186623.help-menu-30347.d_1_1_3.fb4453d9l200bE) of PAI-DSW product.
     *
     * @param request - CreateRuntimeRequest
     *
     * @returns CreateRuntimeResponse
     *
     * @param CreateRuntimeRequest $request
     *
     * @return CreateRuntimeResponse
     */
    public function createRuntime($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRuntimeWithOptions($request, $headers, $runtime);
    }

    /**
     * Create a snapshot.
     *
     * @param request - CreateSnapshotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSnapshotResponse
     *
     * @param CreateSnapshotRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->creationType) {
            @$body['CreationType'] = $request->creationType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->snapshotName) {
            @$body['SnapshotName'] = $request->snapshotName;
        }

        if (null !== $request->snapshotResourceId) {
            @$body['SnapshotResourceId'] = $request->snapshotResourceId;
        }

        if (null !== $request->snapshotResourceType) {
            @$body['SnapshotResourceType'] = $request->snapshotResourceType;
        }

        if (null !== $request->sourceStoragePath) {
            @$body['SourceStoragePath'] = $request->sourceStoragePath;
        }

        if (null !== $request->workDir) {
            @$body['WorkDir'] = $request->workDir;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSnapshot',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/snapshots',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a snapshot.
     *
     * @param request - CreateSnapshotRequest
     *
     * @returns CreateSnapshotResponse
     *
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSnapshotWithOptions($request, $headers, $runtime);
    }

    /**
     * Delete a deployment job.
     *
     * @param request - DeleteDeploymentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeploymentResponse
     *
     * @param string                  $DeploymentId
     * @param DeleteDeploymentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDeploymentResponse
     */
    public function deleteDeploymentWithOptions($DeploymentId, $request, $headers, $runtime)
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
            'action' => 'DeleteDeployment',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/deployments/' . Url::percentEncode($DeploymentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a deployment job.
     *
     * @param request - DeleteDeploymentRequest
     *
     * @returns DeleteDeploymentResponse
     *
     * @param string                  $DeploymentId
     * @param DeleteDeploymentRequest $request
     *
     * @return DeleteDeploymentResponse
     */
    public function deleteDeployment($DeploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeploymentWithOptions($DeploymentId, $request, $headers, $runtime);
    }

    /**
     * Delete knowledge base.
     *
     * @param request - DeleteKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKnowledgeBaseResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param DeleteKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
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
            'action' => 'DeleteKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete knowledge base.
     *
     * @param request - DeleteKnowledgeBaseRequest
     *
     * @returns DeleteKnowledgeBaseResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param DeleteKnowledgeBaseRequest $request
     *
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBase($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * Delete Knowledge Base Task.
     *
     * @param request - DeleteKnowledgeBaseJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param string                        $KnowledgeBaseJobId
     * @param DeleteKnowledgeBaseJobRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteKnowledgeBaseJobResponse
     */
    public function deleteKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime)
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
            'action' => 'DeleteKnowledgeBaseJob',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs/' . Url::percentEncode($KnowledgeBaseJobId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteKnowledgeBaseJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Knowledge Base Task.
     *
     * @param request - DeleteKnowledgeBaseJobRequest
     *
     * @returns DeleteKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param string                        $KnowledgeBaseJobId
     * @param DeleteKnowledgeBaseJobRequest $request
     *
     * @return DeleteKnowledgeBaseJobResponse
     */
    public function deleteKnowledgeBaseJob($KnowledgeBaseId, $KnowledgeBaseJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime);
    }

    /**
     * Delete a runtime.
     *
     * @param request - DeleteRuntimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRuntimeResponse
     *
     * @param string               $RuntimeId
     * @param DeleteRuntimeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRuntimeResponse
     */
    public function deleteRuntimeWithOptions($RuntimeId, $request, $headers, $runtime)
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
            'action' => 'DeleteRuntime',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/runtimes/' . Url::percentEncode($RuntimeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a runtime.
     *
     * @param request - DeleteRuntimeRequest
     *
     * @returns DeleteRuntimeResponse
     *
     * @param string               $RuntimeId
     * @param DeleteRuntimeRequest $request
     *
     * @return DeleteRuntimeResponse
     */
    public function deleteRuntime($RuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRuntimeWithOptions($RuntimeId, $request, $headers, $runtime);
    }

    /**
     * Delete a snapshot.
     *
     * @param request - DeleteSnapshotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSnapshotResponse
     *
     * @param string                $SnapshotId
     * @param DeleteSnapshotRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($SnapshotId, $request, $headers, $runtime)
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
            'action' => 'DeleteSnapshot',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/snapshots/' . Url::percentEncode($SnapshotId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a snapshot.
     *
     * @param request - DeleteSnapshotRequest
     *
     * @returns DeleteSnapshotResponse
     *
     * @param string                $SnapshotId
     * @param DeleteSnapshotRequest $request
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($SnapshotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSnapshotWithOptions($SnapshotId, $request, $headers, $runtime);
    }

    /**
     * Retrieve the details of a deployment job.
     *
     * @param request - GetDeploymentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeploymentResponse
     *
     * @param string               $DeploymentId
     * @param GetDeploymentRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentWithOptions($DeploymentId, $request, $headers, $runtime)
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
            'action' => 'GetDeployment',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/deployments/' . Url::percentEncode($DeploymentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the details of a deployment job.
     *
     * @param request - GetDeploymentRequest
     *
     * @returns GetDeploymentResponse
     *
     * @param string               $DeploymentId
     * @param GetDeploymentRequest $request
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment($DeploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeploymentWithOptions($DeploymentId, $request, $headers, $runtime);
    }

    /**
     * Get knowledge base.
     *
     * @param request - GetKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeBaseResponse
     *
     * @param string                  $KnowledgeBaseId
     * @param GetKnowledgeBaseRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get knowledge base.
     *
     * @param request - GetKnowledgeBaseRequest
     *
     * @returns GetKnowledgeBaseResponse
     *
     * @param string                  $KnowledgeBaseId
     * @param GetKnowledgeBaseRequest $request
     *
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBase($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * 查看知识库任务
     *
     * @param request - GetKnowledgeBaseJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeBaseJobResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param string                     $KnowledgeBaseJobId
     * @param GetKnowledgeBaseJobRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetKnowledgeBaseJobResponse
     */
    public function getKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime)
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
            'action' => 'GetKnowledgeBaseJob',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs/' . Url::percentEncode($KnowledgeBaseJobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeBaseJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看知识库任务
     *
     * @param request - GetKnowledgeBaseJobRequest
     *
     * @returns GetKnowledgeBaseJobResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param string                     $KnowledgeBaseJobId
     * @param GetKnowledgeBaseJobRequest $request
     *
     * @return GetKnowledgeBaseJobResponse
     */
    public function getKnowledgeBaseJob($KnowledgeBaseId, $KnowledgeBaseJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime);
    }

    /**
     * Obtain the details of the runtime.
     *
     * @param request - GetRuntimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRuntimeResponse
     *
     * @param string            $RuntimeId
     * @param GetRuntimeRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetRuntimeResponse
     */
    public function getRuntimeWithOptions($RuntimeId, $request, $headers, $runtime)
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
            'action' => 'GetRuntime',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/runtimes/' . Url::percentEncode($RuntimeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the details of the runtime.
     *
     * @param request - GetRuntimeRequest
     *
     * @returns GetRuntimeResponse
     *
     * @param string            $RuntimeId
     * @param GetRuntimeRequest $request
     *
     * @return GetRuntimeResponse
     */
    public function getRuntime($RuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRuntimeWithOptions($RuntimeId, $request, $headers, $runtime);
    }

    /**
     * Obtain snapshot details.
     *
     * @param request - GetSnapshotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSnapshotResponse
     *
     * @param string             $SnapshotId
     * @param GetSnapshotRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetSnapshotResponse
     */
    public function getSnapshotWithOptions($SnapshotId, $request, $headers, $runtime)
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
            'action' => 'GetSnapshot',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/snapshots/' . Url::percentEncode($SnapshotId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain snapshot details.
     *
     * @param request - GetSnapshotRequest
     *
     * @returns GetSnapshotResponse
     *
     * @param string             $SnapshotId
     * @param GetSnapshotRequest $request
     *
     * @return GetSnapshotResponse
     */
    public function getSnapshot($SnapshotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSnapshotWithOptions($SnapshotId, $request, $headers, $runtime);
    }

    /**
     * Retrieve a list of deployment jobs.
     *
     * @param request - ListDeploymentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeploymentsResponse
     *
     * @param ListDeploymentsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->deploymentId) {
            @$query['DeploymentId'] = $request->deploymentId;
        }

        if (null !== $request->deploymentStatus) {
            @$query['DeploymentStatus'] = $request->deploymentStatus;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
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

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceSnapshotId) {
            @$query['ResourceSnapshotId'] = $request->resourceSnapshotId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeployments',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/deployments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve a list of deployment jobs.
     *
     * @param request - ListDeploymentsRequest
     *
     * @returns ListDeploymentsResponse
     *
     * @param ListDeploymentsRequest $request
     *
     * @return ListDeploymentsResponse
     */
    public function listDeployments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeploymentsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieve the knowledge base segment list.
     *
     * @param request - ListKnowledgeBaseChunksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKnowledgeBaseChunksResponse
     *
     * @param string                         $KnowledgeBaseId
     * @param ListKnowledgeBaseChunksRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListKnowledgeBaseChunksResponse
     */
    public function listKnowledgeBaseChunksWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chunkStatus) {
            @$query['ChunkStatus'] = $request->chunkStatus;
        }

        if (null !== $request->metaData) {
            @$query['MetaData'] = $request->metaData;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKnowledgeBaseChunks',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasechunks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKnowledgeBaseChunksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the knowledge base segment list.
     *
     * @param request - ListKnowledgeBaseChunksRequest
     *
     * @returns ListKnowledgeBaseChunksResponse
     *
     * @param string                         $KnowledgeBaseId
     * @param ListKnowledgeBaseChunksRequest $request
     *
     * @return ListKnowledgeBaseChunksResponse
     */
    public function listKnowledgeBaseChunks($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKnowledgeBaseChunksWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * Get the Knowledge Base task list.
     *
     * @param request - ListKnowledgeBaseJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKnowledgeBaseJobsResponse
     *
     * @param string                       $KnowledgeBaseId
     * @param ListKnowledgeBaseJobsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListKnowledgeBaseJobsResponse
     */
    public function listKnowledgeBaseJobsWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobAction) {
            @$query['JobAction'] = $request->jobAction;
        }

        if (null !== $request->knowledgeBaseJobId) {
            @$query['KnowledgeBaseJobId'] = $request->knowledgeBaseJobId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKnowledgeBaseJobs',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKnowledgeBaseJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the Knowledge Base task list.
     *
     * @param request - ListKnowledgeBaseJobsRequest
     *
     * @returns ListKnowledgeBaseJobsResponse
     *
     * @param string                       $KnowledgeBaseId
     * @param ListKnowledgeBaseJobsRequest $request
     *
     * @return ListKnowledgeBaseJobsResponse
     */
    public function listKnowledgeBaseJobs($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKnowledgeBaseJobsWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of knowledge bases.
     *
     * @param request - ListKnowledgeBasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKnowledgeBasesResponse
     *
     * @param ListKnowledgeBasesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListKnowledgeBasesResponse
     */
    public function listKnowledgeBasesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->knowledgeBaseId) {
            @$query['KnowledgeBaseId'] = $request->knowledgeBaseId;
        }

        if (null !== $request->knowledgeBaseType) {
            @$query['KnowledgeBaseType'] = $request->knowledgeBaseType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKnowledgeBases',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKnowledgeBasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of knowledge bases.
     *
     * @param request - ListKnowledgeBasesRequest
     *
     * @returns ListKnowledgeBasesResponse
     *
     * @param ListKnowledgeBasesRequest $request
     *
     * @return ListKnowledgeBasesResponse
     */
    public function listKnowledgeBases($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKnowledgeBasesWithOptions($request, $headers, $runtime);
    }

    /**
     * Get the list of runtimes.
     *
     * @param request - ListRuntimesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRuntimesResponse
     *
     * @param ListRuntimesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListRuntimesResponse
     */
    public function listRuntimesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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

        if (null !== $request->runtimeId) {
            @$query['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->runtimeName) {
            @$query['RuntimeName'] = $request->runtimeName;
        }

        if (null !== $request->runtimeStatus) {
            @$query['RuntimeStatus'] = $request->runtimeStatus;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        if (null !== $request->workDir) {
            @$query['WorkDir'] = $request->workDir;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRuntimes',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/runtimes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRuntimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of runtimes.
     *
     * @param request - ListRuntimesRequest
     *
     * @returns ListRuntimesResponse
     *
     * @param ListRuntimesRequest $request
     *
     * @return ListRuntimesResponse
     */
    public function listRuntimes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRuntimesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieve a snapshot list.
     *
     * @param request - ListSnapshotsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSnapshotsResponse
     *
     * @param ListSnapshotsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creationType) {
            @$query['CreationType'] = $request->creationType;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->snapshotResourceId) {
            @$query['SnapshotResourceId'] = $request->snapshotResourceId;
        }

        if (null !== $request->snapshotResourceType) {
            @$query['SnapshotResourceType'] = $request->snapshotResourceType;
        }

        if (null !== $request->snapshotStatus) {
            @$query['SnapshotStatus'] = $request->snapshotStatus;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSnapshots',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/snapshots',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve a snapshot list.
     *
     * @param request - ListSnapshotsRequest
     *
     * @returns ListSnapshotsResponse
     *
     * @param ListSnapshotsRequest $request
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieve the knowledge base.
     *
     * @param request - RetrieveKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetrieveKnowledgeBaseResponse
     *
     * @param string                       $KnowledgeBaseId
     * @param RetrieveKnowledgeBaseRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RetrieveKnowledgeBaseResponse
     */
    public function retrieveKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->hybridStrategyConfig) {
            @$body['HybridStrategyConfig'] = $request->hybridStrategyConfig;
        }

        if (null !== $request->metaDataFilterConditions) {
            @$body['MetaDataFilterConditions'] = $request->metaDataFilterConditions;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->queryMode) {
            @$body['QueryMode'] = $request->queryMode;
        }

        if (null !== $request->rerankConfig) {
            @$body['RerankConfig'] = $request->rerankConfig;
        }

        if (null !== $request->rewriteConfig) {
            @$body['RewriteConfig'] = $request->rewriteConfig;
        }

        if (null !== $request->scoreThreshold) {
            @$body['ScoreThreshold'] = $request->scoreThreshold;
        }

        if (null !== $request->topK) {
            @$body['TopK'] = $request->topK;
        }

        if (null !== $request->versionName) {
            @$body['VersionName'] = $request->versionName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetrieveKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/action/retrieve',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetrieveKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the knowledge base.
     *
     * @param request - RetrieveKnowledgeBaseRequest
     *
     * @returns RetrieveKnowledgeBaseResponse
     *
     * @param string                       $KnowledgeBaseId
     * @param RetrieveKnowledgeBaseRequest $request
     *
     * @return RetrieveKnowledgeBaseResponse
     */
    public function retrieveKnowledgeBase($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retrieveKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * Update a deployment job.
     *
     * @param request - UpdateDeploymentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeploymentResponse
     *
     * @param string                  $DeploymentId
     * @param UpdateDeploymentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDeploymentResponse
     */
    public function updateDeploymentWithOptions($DeploymentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoApproval) {
            @$body['AutoApproval'] = $request->autoApproval;
        }

        if (null !== $request->deploymentConfig) {
            @$body['DeploymentConfig'] = $request->deploymentConfig;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->stageAction) {
            @$body['StageAction'] = $request->stageAction;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeployment',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/deployments/' . Url::percentEncode($DeploymentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update a deployment job.
     *
     * @param request - UpdateDeploymentRequest
     *
     * @returns UpdateDeploymentResponse
     *
     * @param string                  $DeploymentId
     * @param UpdateDeploymentRequest $request
     *
     * @return UpdateDeploymentResponse
     */
    public function updateDeployment($DeploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeploymentWithOptions($DeploymentId, $request, $headers, $runtime);
    }

    /**
     * Update Knowledge Base.
     *
     * @param request - UpdateKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param UpdateKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateKnowledgeBaseResponse
     */
    public function updateKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoUpdateConfig) {
            @$body['AutoUpdateConfig'] = $request->autoUpdateConfig;
        }

        if (null !== $request->bindRuntime) {
            @$body['BindRuntime'] = $request->bindRuntime;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->metaDataConfig) {
            @$body['MetaDataConfig'] = $request->metaDataConfig;
        }

        if (null !== $request->runtimeId) {
            @$body['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Knowledge Base.
     *
     * @param request - UpdateKnowledgeBaseRequest
     *
     * @returns UpdateKnowledgeBaseResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param UpdateKnowledgeBaseRequest $request
     *
     * @return UpdateKnowledgeBaseResponse
     */
    public function updateKnowledgeBase($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * Update Knowledge Base Chunk.
     *
     * @param request - UpdateKnowledgeBaseChunkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseChunkResponse
     *
     * @param string                          $KnowledgeBaseId
     * @param string                          $KnowledgeBaseChunkId
     * @param UpdateKnowledgeBaseChunkRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateKnowledgeBaseChunkResponse
     */
    public function updateKnowledgeBaseChunkWithOptions($KnowledgeBaseId, $KnowledgeBaseChunkId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chunkContent) {
            @$body['ChunkContent'] = $request->chunkContent;
        }

        if (null !== $request->chunkStatus) {
            @$body['ChunkStatus'] = $request->chunkStatus;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBaseChunk',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasechunks/' . Url::percentEncode($KnowledgeBaseChunkId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseChunkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Knowledge Base Chunk.
     *
     * @param request - UpdateKnowledgeBaseChunkRequest
     *
     * @returns UpdateKnowledgeBaseChunkResponse
     *
     * @param string                          $KnowledgeBaseId
     * @param string                          $KnowledgeBaseChunkId
     * @param UpdateKnowledgeBaseChunkRequest $request
     *
     * @return UpdateKnowledgeBaseChunkResponse
     */
    public function updateKnowledgeBaseChunk($KnowledgeBaseId, $KnowledgeBaseChunkId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseChunkWithOptions($KnowledgeBaseId, $KnowledgeBaseChunkId, $request, $headers, $runtime);
    }

    /**
     * Update Knowledge Base Task.
     *
     * @param request - UpdateKnowledgeBaseJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param string                        $KnowledgeBaseJobId
     * @param UpdateKnowledgeBaseJobRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateKnowledgeBaseJobResponse
     */
    public function updateKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBaseJob',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs/' . Url::percentEncode($KnowledgeBaseJobId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Knowledge Base Task.
     *
     * @param request - UpdateKnowledgeBaseJobRequest
     *
     * @returns UpdateKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param string                        $KnowledgeBaseJobId
     * @param UpdateKnowledgeBaseJobRequest $request
     *
     * @return UpdateKnowledgeBaseJobResponse
     */
    public function updateKnowledgeBaseJob($KnowledgeBaseId, $KnowledgeBaseJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime);
    }

    /**
     * Update runtime.
     *
     * @param request - UpdateRuntimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRuntimeResponse
     *
     * @param string               $RuntimeId
     * @param UpdateRuntimeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateRuntimeResponse
     */
    public function updateRuntimeWithOptions($RuntimeId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['Action'] = $request->action;
        }

        if (null !== $request->autoUpdateImage) {
            @$body['AutoUpdateImage'] = $request->autoUpdateImage;
        }

        if (null !== $request->runTimeout) {
            @$body['RunTimeout'] = $request->runTimeout;
        }

        if (null !== $request->version) {
            @$body['Version'] = $request->version;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRuntime',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/runtimes/' . Url::percentEncode($RuntimeId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update runtime.
     *
     * @param request - UpdateRuntimeRequest
     *
     * @returns UpdateRuntimeResponse
     *
     * @param string               $RuntimeId
     * @param UpdateRuntimeRequest $request
     *
     * @return UpdateRuntimeResponse
     */
    public function updateRuntime($RuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRuntimeWithOptions($RuntimeId, $request, $headers, $runtime);
    }

    /**
     * Update a snapshot.
     *
     * @param request - UpdateSnapshotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSnapshotResponse
     *
     * @param string                $SnapshotId
     * @param UpdateSnapshotRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSnapshotResponse
     */
    public function updateSnapshotWithOptions($SnapshotId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->snapshotName) {
            @$body['SnapshotName'] = $request->snapshotName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSnapshot',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/snapshots/' . Url::percentEncode($SnapshotId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update a snapshot.
     *
     * @param request - UpdateSnapshotRequest
     *
     * @returns UpdateSnapshotResponse
     *
     * @param string                $SnapshotId
     * @param UpdateSnapshotRequest $request
     *
     * @return UpdateSnapshotResponse
     */
    public function updateSnapshot($SnapshotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSnapshotWithOptions($SnapshotId, $request, $headers, $runtime);
    }
}
