<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateBuildRecordByRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateBuildRecordByRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceEndpointAclPolicyRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceEndpointAclPolicyResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceVpcEndpointLinkedVpcRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceVpcEndpointLinkedVpcResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskByRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskByRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagScanTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagScanTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartReleaseRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartReleaseResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceEndpointAclPolicyRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceEndpointAclPolicyResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceVpcEndpointLinkedVpcRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceVpcEndpointLinkedVpcResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetAuthorizationTokenRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetAuthorizationTokenResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceCountResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceUsageRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceUsageResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagLayersRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagLayersResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanSummaryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanSummaryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRegionRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRegionResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ResetLoginPasswordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ResetLoginPasswordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateInstanceEndpointStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateInstanceEndpointStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoTriggerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelRepoBuildRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelRepoBuildRecordResponse
     */
    public function cancelRepoBuildRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelRepoBuildRecordResponse::fromMap($this->doRPCRequest('CancelRepoBuildRecord', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelRepoBuildRecordRequest $request
     *
     * @return CancelRepoBuildRecordResponse
     */
    public function cancelRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * @param CreateBuildRecordByRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateBuildRecordByRuleResponse
     */
    public function createBuildRecordByRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBuildRecordByRuleResponse::fromMap($this->doRPCRequest('CreateBuildRecordByRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBuildRecordByRuleRequest $request
     *
     * @return CreateBuildRecordByRuleResponse
     */
    public function createBuildRecordByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBuildRecordByRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateChartNamespaceResponse
     */
    public function createChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateChartNamespaceResponse::fromMap($this->doRPCRequest('CreateChartNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateChartNamespaceRequest $request
     *
     * @return CreateChartNamespaceResponse
     */
    public function createChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateChartRepositoryResponse
     */
    public function createChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateChartRepositoryResponse::fromMap($this->doRPCRequest('CreateChartRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateChartRepositoryRequest $request
     *
     * @return CreateChartRepositoryResponse
     */
    public function createChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceEndpointAclPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateInstanceEndpointAclPolicyResponse
     */
    public function createInstanceEndpointAclPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceEndpointAclPolicyResponse::fromMap($this->doRPCRequest('CreateInstanceEndpointAclPolicy', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstanceEndpointAclPolicyRequest $request
     *
     * @return CreateInstanceEndpointAclPolicyResponse
     */
    public function createInstanceEndpointAclPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceEndpointAclPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceVpcEndpointLinkedVpcRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateInstanceVpcEndpointLinkedVpcResponse
     */
    public function createInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceVpcEndpointLinkedVpcResponse::fromMap($this->doRPCRequest('CreateInstanceVpcEndpointLinkedVpc', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstanceVpcEndpointLinkedVpcRequest $request
     *
     * @return CreateInstanceVpcEndpointLinkedVpcResponse
     */
    public function createInstanceVpcEndpointLinkedVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime);
    }

    /**
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNamespaceResponse::fromMap($this->doRPCRequest('CreateNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateRepoBuildRuleResponse
     */
    public function createRepoBuildRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRepoBuildRuleResponse::fromMap($this->doRPCRequest('CreateRepoBuildRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRepoBuildRuleRequest $request
     *
     * @return CreateRepoBuildRuleResponse
     */
    public function createRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRepositoryResponse
     */
    public function createRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRepositoryResponse::fromMap($this->doRPCRequest('CreateRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRepositoryRequest $request
     *
     * @return CreateRepositoryResponse
     */
    public function createRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoSyncRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRepoSyncRuleResponse
     */
    public function createRepoSyncRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRepoSyncRuleResponse::fromMap($this->doRPCRequest('CreateRepoSyncRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRepoSyncRuleRequest $request
     *
     * @return CreateRepoSyncRuleResponse
     */
    public function createRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoSyncTaskByRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateRepoSyncTaskByRuleResponse
     */
    public function createRepoSyncTaskByRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRepoSyncTaskByRuleResponse::fromMap($this->doRPCRequest('CreateRepoSyncTaskByRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRepoSyncTaskByRuleRequest $request
     *
     * @return CreateRepoSyncTaskByRuleResponse
     */
    public function createRepoSyncTaskByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSyncTaskByRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoTagScanTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateRepoTagScanTaskResponse
     */
    public function createRepoTagScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRepoTagScanTaskResponse::fromMap($this->doRPCRequest('CreateRepoTagScanTask', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRepoTagScanTaskRequest $request
     *
     * @return CreateRepoTagScanTaskResponse
     */
    public function createRepoTagScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoTagScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRepoTriggerResponse
     */
    public function createRepoTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRepoTriggerResponse::fromMap($this->doRPCRequest('CreateRepoTrigger', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRepoTriggerRequest $request
     *
     * @return CreateRepoTriggerResponse
     */
    public function createRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteChartNamespaceResponse
     */
    public function deleteChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteChartNamespaceResponse::fromMap($this->doRPCRequest('DeleteChartNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteChartNamespaceRequest $request
     *
     * @return DeleteChartNamespaceResponse
     */
    public function deleteChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChartReleaseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteChartReleaseResponse
     */
    public function deleteChartReleaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteChartReleaseResponse::fromMap($this->doRPCRequest('DeleteChartRelease', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteChartReleaseRequest $request
     *
     * @return DeleteChartReleaseResponse
     */
    public function deleteChartRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartReleaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteChartRepositoryResponse
     */
    public function deleteChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteChartRepositoryResponse::fromMap($this->doRPCRequest('DeleteChartRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteChartRepositoryRequest $request
     *
     * @return DeleteChartRepositoryResponse
     */
    public function deleteChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceEndpointAclPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteInstanceEndpointAclPolicyResponse
     */
    public function deleteInstanceEndpointAclPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceEndpointAclPolicyResponse::fromMap($this->doRPCRequest('DeleteInstanceEndpointAclPolicy', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceEndpointAclPolicyRequest $request
     *
     * @return DeleteInstanceEndpointAclPolicyResponse
     */
    public function deleteInstanceEndpointAclPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceEndpointAclPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceVpcEndpointLinkedVpcRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteInstanceVpcEndpointLinkedVpcResponse
     */
    public function deleteInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceVpcEndpointLinkedVpcResponse::fromMap($this->doRPCRequest('DeleteInstanceVpcEndpointLinkedVpc', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceVpcEndpointLinkedVpcRequest $request
     *
     * @return DeleteInstanceVpcEndpointLinkedVpcResponse
     */
    public function deleteInstanceVpcEndpointLinkedVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNamespaceResponse::fromMap($this->doRPCRequest('DeleteNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRepoBuildRuleResponse
     */
    public function deleteRepoBuildRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRepoBuildRuleResponse::fromMap($this->doRPCRequest('DeleteRepoBuildRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRepoBuildRuleRequest $request
     *
     * @return DeleteRepoBuildRuleResponse
     */
    public function deleteRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRepositoryResponse::fromMap($this->doRPCRequest('DeleteRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRepositoryRequest $request
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepoSyncRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRepoSyncRuleResponse
     */
    public function deleteRepoSyncRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRepoSyncRuleResponse::fromMap($this->doRPCRequest('DeleteRepoSyncRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRepoSyncRuleRequest $request
     *
     * @return DeleteRepoSyncRuleResponse
     */
    public function deleteRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepoTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRepoTagResponse
     */
    public function deleteRepoTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRepoTagResponse::fromMap($this->doRPCRequest('DeleteRepoTag', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRepoTagRequest $request
     *
     * @return DeleteRepoTagResponse
     */
    public function deleteRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteRepoTriggerResponse
     */
    public function deleteRepoTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRepoTriggerResponse::fromMap($this->doRPCRequest('DeleteRepoTrigger', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRepoTriggerRequest $request
     *
     * @return DeleteRepoTriggerResponse
     */
    public function deleteRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthorizationTokenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuthorizationTokenResponse::fromMap($this->doRPCRequest('GetAuthorizationToken', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAuthorizationTokenRequest $request
     *
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetChartNamespaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetChartNamespaceResponse
     */
    public function getChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetChartNamespaceResponse::fromMap($this->doRPCRequest('GetChartNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetChartNamespaceRequest $request
     *
     * @return GetChartNamespaceResponse
     */
    public function getChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param GetChartRepositoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetChartRepositoryResponse
     */
    public function getChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetChartRepositoryResponse::fromMap($this->doRPCRequest('GetChartRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetChartRepositoryRequest $request
     *
     * @return GetChartRepositoryResponse
     */
    public function getChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceResponse::fromMap($this->doRPCRequest('GetInstance', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceCountResponse
     */
    public function getInstanceCountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetInstanceCountResponse::fromMap($this->doRPCRequest('GetInstanceCount', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetInstanceCountResponse
     */
    public function getInstanceCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceCountWithOptions($runtime);
    }

    /**
     * @param GetInstanceEndpointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetInstanceEndpointResponse
     */
    public function getInstanceEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceEndpointResponse::fromMap($this->doRPCRequest('GetInstanceEndpoint', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceEndpointRequest $request
     *
     * @return GetInstanceEndpointResponse
     */
    public function getInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceUsageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetInstanceUsageResponse
     */
    public function getInstanceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceUsageResponse::fromMap($this->doRPCRequest('GetInstanceUsage', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceUsageRequest $request
     *
     * @return GetInstanceUsageResponse
     */
    public function getInstanceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceUsageWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceVpcEndpointRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceVpcEndpointResponse
     */
    public function getInstanceVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceVpcEndpointResponse::fromMap($this->doRPCRequest('GetInstanceVpcEndpoint', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceVpcEndpointRequest $request
     *
     * @return GetInstanceVpcEndpointResponse
     */
    public function getInstanceVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * @param GetNamespaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetNamespaceResponse
     */
    public function getNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNamespaceResponse::fromMap($this->doRPCRequest('GetNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNamespaceRequest $request
     *
     * @return GetNamespaceResponse
     */
    public function getNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoBuildRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRepoBuildRecordResponse
     */
    public function getRepoBuildRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRepoBuildRecordResponse::fromMap($this->doRPCRequest('GetRepoBuildRecord', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRepoBuildRecordRequest $request
     *
     * @return GetRepoBuildRecordResponse
     */
    public function getRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoBuildRecordStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRepoBuildRecordStatusResponse
     */
    public function getRepoBuildRecordStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRepoBuildRecordStatusResponse::fromMap($this->doRPCRequest('GetRepoBuildRecordStatus', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRepoBuildRecordStatusRequest $request
     *
     * @return GetRepoBuildRecordStatusResponse
     */
    public function getRepoBuildRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoBuildRecordStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetRepositoryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRepositoryResponse
     */
    public function getRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRepositoryResponse::fromMap($this->doRPCRequest('GetRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRepositoryRequest $request
     *
     * @return GetRepositoryResponse
     */
    public function getRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoSyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRepoSyncTaskResponse
     */
    public function getRepoSyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRepoSyncTaskResponse::fromMap($this->doRPCRequest('GetRepoSyncTask', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRepoSyncTaskRequest $request
     *
     * @return GetRepoSyncTaskResponse
     */
    public function getRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoTagLayersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetRepoTagLayersResponse
     */
    public function getRepoTagLayersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRepoTagLayersResponse::fromMap($this->doRPCRequest('GetRepoTagLayers', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRepoTagLayersRequest $request
     *
     * @return GetRepoTagLayersResponse
     */
    public function getRepoTagLayers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagLayersWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoTagManifestRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRepoTagManifestResponse
     */
    public function getRepoTagManifestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRepoTagManifestResponse::fromMap($this->doRPCRequest('GetRepoTagManifest', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRepoTagManifestRequest $request
     *
     * @return GetRepoTagManifestResponse
     */
    public function getRepoTagManifest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagManifestWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoTagScanStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetRepoTagScanStatusResponse
     */
    public function getRepoTagScanStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRepoTagScanStatusResponse::fromMap($this->doRPCRequest('GetRepoTagScanStatus', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRepoTagScanStatusRequest $request
     *
     * @return GetRepoTagScanStatusResponse
     */
    public function getRepoTagScanStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagScanStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoTagScanSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRepoTagScanSummaryResponse
     */
    public function getRepoTagScanSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRepoTagScanSummaryResponse::fromMap($this->doRPCRequest('GetRepoTagScanSummary', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRepoTagScanSummaryRequest $request
     *
     * @return GetRepoTagScanSummaryResponse
     */
    public function getRepoTagScanSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagScanSummaryWithOptions($request, $runtime);
    }

    /**
     * @param ListChartNamespaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListChartNamespaceResponse
     */
    public function listChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListChartNamespaceResponse::fromMap($this->doRPCRequest('ListChartNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListChartNamespaceRequest $request
     *
     * @return ListChartNamespaceResponse
     */
    public function listChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param ListChartReleaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListChartReleaseResponse
     */
    public function listChartReleaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListChartReleaseResponse::fromMap($this->doRPCRequest('ListChartRelease', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListChartReleaseRequest $request
     *
     * @return ListChartReleaseResponse
     */
    public function listChartRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartReleaseWithOptions($request, $runtime);
    }

    /**
     * @param ListChartRepositoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListChartRepositoryResponse
     */
    public function listChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListChartRepositoryResponse::fromMap($this->doRPCRequest('ListChartRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListChartRepositoryRequest $request
     *
     * @return ListChartRepositoryResponse
     */
    public function listChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstanceResponse::fromMap($this->doRPCRequest('ListInstance', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceEndpointRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInstanceEndpointResponse
     */
    public function listInstanceEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstanceEndpointResponse::fromMap($this->doRPCRequest('ListInstanceEndpoint', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstanceEndpointRequest $request
     *
     * @return ListInstanceEndpointResponse
     */
    public function listInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceRegionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceRegionResponse
     */
    public function listInstanceRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstanceRegionResponse::fromMap($this->doRPCRequest('ListInstanceRegion', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstanceRegionRequest $request
     *
     * @return ListInstanceRegionResponse
     */
    public function listInstanceRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceRegionWithOptions($request, $runtime);
    }

    /**
     * @param ListNamespaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListNamespaceResponse
     */
    public function listNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNamespaceResponse::fromMap($this->doRPCRequest('ListNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListNamespaceRequest $request
     *
     * @return ListNamespaceResponse
     */
    public function listNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoBuildRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListRepoBuildRecordResponse
     */
    public function listRepoBuildRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoBuildRecordResponse::fromMap($this->doRPCRequest('ListRepoBuildRecord', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoBuildRecordRequest $request
     *
     * @return ListRepoBuildRecordResponse
     */
    public function listRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoBuildRecordLogRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListRepoBuildRecordLogResponse
     */
    public function listRepoBuildRecordLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoBuildRecordLogResponse::fromMap($this->doRPCRequest('ListRepoBuildRecordLog', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoBuildRecordLogRequest $request
     *
     * @return ListRepoBuildRecordLogResponse
     */
    public function listRepoBuildRecordLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRecordLogWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoBuildRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRepoBuildRuleResponse
     */
    public function listRepoBuildRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoBuildRuleResponse::fromMap($this->doRPCRequest('ListRepoBuildRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoBuildRuleRequest $request
     *
     * @return ListRepoBuildRuleResponse
     */
    public function listRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListRepositoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListRepositoryResponse
     */
    public function listRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepositoryResponse::fromMap($this->doRPCRequest('ListRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepositoryRequest $request
     *
     * @return ListRepositoryResponse
     */
    public function listRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoSyncRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepoSyncRuleResponse
     */
    public function listRepoSyncRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoSyncRuleResponse::fromMap($this->doRPCRequest('ListRepoSyncRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoSyncRuleRequest $request
     *
     * @return ListRepoSyncRuleResponse
     */
    public function listRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoSyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepoSyncTaskResponse
     */
    public function listRepoSyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoSyncTaskResponse::fromMap($this->doRPCRequest('ListRepoSyncTask', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoSyncTaskRequest $request
     *
     * @return ListRepoSyncTaskResponse
     */
    public function listRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRepoTagResponse
     */
    public function listRepoTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoTagResponse::fromMap($this->doRPCRequest('ListRepoTag', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoTagRequest $request
     *
     * @return ListRepoTagResponse
     */
    public function listRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTagWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoTagScanResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepoTagScanResultResponse
     */
    public function listRepoTagScanResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoTagScanResultResponse::fromMap($this->doRPCRequest('ListRepoTagScanResult', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoTagScanResultRequest $request
     *
     * @return ListRepoTagScanResultResponse
     */
    public function listRepoTagScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTagScanResultWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoTriggerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRepoTriggerResponse
     */
    public function listRepoTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoTriggerResponse::fromMap($this->doRPCRequest('ListRepoTrigger', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoTriggerRequest $request
     *
     * @return ListRepoTriggerResponse
     */
    public function listRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoTriggerRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepoTriggerRecordResponse
     */
    public function listRepoTriggerRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRepoTriggerRecordResponse::fromMap($this->doRPCRequest('ListRepoTriggerRecord', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRepoTriggerRecordRequest $request
     *
     * @return ListRepoTriggerRecordResponse
     */
    public function listRepoTriggerRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTriggerRecordWithOptions($request, $runtime);
    }

    /**
     * @param ResetLoginPasswordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ResetLoginPasswordResponse
     */
    public function resetLoginPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetLoginPasswordResponse::fromMap($this->doRPCRequest('ResetLoginPassword', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetLoginPasswordRequest $request
     *
     * @return ResetLoginPasswordResponse
     */
    public function resetLoginPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetLoginPasswordWithOptions($request, $runtime);
    }

    /**
     * @param UpdateChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateChartNamespaceResponse
     */
    public function updateChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateChartNamespaceResponse::fromMap($this->doRPCRequest('UpdateChartNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateChartNamespaceRequest $request
     *
     * @return UpdateChartNamespaceResponse
     */
    public function updateChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateChartRepositoryResponse
     */
    public function updateChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateChartRepositoryResponse::fromMap($this->doRPCRequest('UpdateChartRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateChartRepositoryRequest $request
     *
     * @return UpdateChartRepositoryResponse
     */
    public function updateChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceEndpointStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateInstanceEndpointStatusResponse
     */
    public function updateInstanceEndpointStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateInstanceEndpointStatusResponse::fromMap($this->doRPCRequest('UpdateInstanceEndpointStatus', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInstanceEndpointStatusRequest $request
     *
     * @return UpdateInstanceEndpointStatusResponse
     */
    public function updateInstanceEndpointStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceEndpointStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateNamespaceResponse::fromMap($this->doRPCRequest('UpdateNamespace', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateNamespaceRequest $request
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateRepoBuildRuleResponse
     */
    public function updateRepoBuildRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRepoBuildRuleResponse::fromMap($this->doRPCRequest('UpdateRepoBuildRule', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRepoBuildRuleRequest $request
     *
     * @return UpdateRepoBuildRuleResponse
     */
    public function updateRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRepositoryResponse::fromMap($this->doRPCRequest('UpdateRepository', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRepositoryRequest $request
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateRepoTriggerResponse
     */
    public function updateRepoTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRepoTriggerResponse::fromMap($this->doRPCRequest('UpdateRepoTrigger', '2018-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRepoTriggerRequest $request
     *
     * @return UpdateRepoTriggerResponse
     */
    public function updateRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepoTriggerWithOptions($request, $runtime);
    }
}
