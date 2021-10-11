<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Viapi\V20210930\Models\CheckServiceLinkedRoleForDeletingRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\CheckServiceLinkedRoleForDeletingResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\CreateAiStoreBucketRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\CreateAiStoreBucketResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\CreateAiStoreReceiveConfigRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\CreateAiStoreReceiveConfigResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\CreateAiStoreUserTaskRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\CreateAiStoreUserTaskResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\DeleteAiStoreUserTaskRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\DeleteAiStoreUserTaskResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\DisableAiStoreUserTaskRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\DisableAiStoreUserTaskResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\EnableAiStoreUserTaskRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\EnableAiStoreUserTaskResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\GetAiStoreReceiveConfigRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\GetAiStoreReceiveConfigResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\GetAiStoreUserTaskByNameRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\GetAiStoreUserTaskByNameResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\GetAiStoreUserTaskRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\GetAiStoreUserTaskResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\ListAiStoreBucketsRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\ListAiStoreBucketsResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\QueryAiStoreApiTreeResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\QueryAiStoreRegionsResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\QueryAiStoreUserTaskPageRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\QueryAiStoreUserTaskPageResponse;
use AlibabaCloud\SDK\Viapi\V20210930\Models\UpdateAiStoreUserTaskRequest;
use AlibabaCloud\SDK\Viapi\V20210930\Models\UpdateAiStoreUserTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Viapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('viapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetAiStoreUserTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAiStoreUserTaskResponse
     */
    public function getAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAiStoreUserTaskResponse::fromMap($this->doRPCRequest('GetAiStoreUserTask', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAiStoreUserTaskRequest $request
     *
     * @return GetAiStoreUserTaskResponse
     */
    public function getAiStoreUserTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiStoreUserTaskWithOptions($request, $runtime);
    }

    /**
     * @param QueryAiStoreUserTaskPageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryAiStoreUserTaskPageResponse
     */
    public function queryAiStoreUserTaskPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAiStoreUserTaskPageResponse::fromMap($this->doRPCRequest('QueryAiStoreUserTaskPage', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAiStoreUserTaskPageRequest $request
     *
     * @return QueryAiStoreUserTaskPageResponse
     */
    public function queryAiStoreUserTaskPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAiStoreUserTaskPageWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryAiStoreRegionsResponse
     */
    public function queryAiStoreRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return QueryAiStoreRegionsResponse::fromMap($this->doRPCRequest('QueryAiStoreRegions', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return QueryAiStoreRegionsResponse
     */
    public function queryAiStoreRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAiStoreRegionsWithOptions($runtime);
    }

    /**
     * @param ListAiStoreBucketsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAiStoreBucketsResponse
     */
    public function listAiStoreBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAiStoreBucketsResponse::fromMap($this->doRPCRequest('ListAiStoreBuckets', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAiStoreBucketsRequest $request
     *
     * @return ListAiStoreBucketsResponse
     */
    public function listAiStoreBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAiStoreBucketsWithOptions($request, $runtime);
    }

    /**
     * @param GetAiStoreUserTaskByNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAiStoreUserTaskByNameResponse
     */
    public function getAiStoreUserTaskByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAiStoreUserTaskByNameResponse::fromMap($this->doRPCRequest('GetAiStoreUserTaskByName', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAiStoreUserTaskByNameRequest $request
     *
     * @return GetAiStoreUserTaskByNameResponse
     */
    public function getAiStoreUserTaskByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiStoreUserTaskByNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAiStoreUserTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAiStoreUserTaskResponse
     */
    public function updateAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAiStoreUserTaskResponse::fromMap($this->doRPCRequest('UpdateAiStoreUserTask', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAiStoreUserTaskRequest $request
     *
     * @return UpdateAiStoreUserTaskResponse
     */
    public function updateAiStoreUserTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAiStoreUserTaskWithOptions($request, $runtime);
    }

    /**
     * @param DisableAiStoreUserTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DisableAiStoreUserTaskResponse
     */
    public function disableAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableAiStoreUserTaskResponse::fromMap($this->doRPCRequest('DisableAiStoreUserTask', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableAiStoreUserTaskRequest $request
     *
     * @return DisableAiStoreUserTaskResponse
     */
    public function disableAiStoreUserTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAiStoreUserTaskWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryAiStoreApiTreeResponse
     */
    public function queryAiStoreApiTreeWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return QueryAiStoreApiTreeResponse::fromMap($this->doRPCRequest('QueryAiStoreApiTree', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return QueryAiStoreApiTreeResponse
     */
    public function queryAiStoreApiTree()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAiStoreApiTreeWithOptions($runtime);
    }

    /**
     * @param DeleteAiStoreUserTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAiStoreUserTaskResponse
     */
    public function deleteAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAiStoreUserTaskResponse::fromMap($this->doRPCRequest('DeleteAiStoreUserTask', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAiStoreUserTaskRequest $request
     *
     * @return DeleteAiStoreUserTaskResponse
     */
    public function deleteAiStoreUserTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAiStoreUserTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateAiStoreUserTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAiStoreUserTaskResponse
     */
    public function createAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAiStoreUserTaskResponse::fromMap($this->doRPCRequest('CreateAiStoreUserTask', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAiStoreUserTaskRequest $request
     *
     * @return CreateAiStoreUserTaskResponse
     */
    public function createAiStoreUserTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAiStoreUserTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateAiStoreReceiveConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAiStoreReceiveConfigResponse
     */
    public function createAiStoreReceiveConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAiStoreReceiveConfigResponse::fromMap($this->doRPCRequest('CreateAiStoreReceiveConfig', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAiStoreReceiveConfigRequest $request
     *
     * @return CreateAiStoreReceiveConfigResponse
     */
    public function createAiStoreReceiveConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAiStoreReceiveConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetAiStoreReceiveConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAiStoreReceiveConfigResponse
     */
    public function getAiStoreReceiveConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAiStoreReceiveConfigResponse::fromMap($this->doRPCRequest('GetAiStoreReceiveConfig', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAiStoreReceiveConfigRequest $request
     *
     * @return GetAiStoreReceiveConfigResponse
     */
    public function getAiStoreReceiveConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiStoreReceiveConfigWithOptions($request, $runtime);
    }

    /**
     * @param EnableAiStoreUserTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EnableAiStoreUserTaskResponse
     */
    public function enableAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableAiStoreUserTaskResponse::fromMap($this->doRPCRequest('EnableAiStoreUserTask', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableAiStoreUserTaskRequest $request
     *
     * @return EnableAiStoreUserTaskResponse
     */
    public function enableAiStoreUserTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAiStoreUserTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateAiStoreBucketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAiStoreBucketResponse
     */
    public function createAiStoreBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAiStoreBucketResponse::fromMap($this->doRPCRequest('CreateAiStoreBucket', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAiStoreBucketRequest $request
     *
     * @return CreateAiStoreBucketResponse
     */
    public function createAiStoreBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAiStoreBucketWithOptions($request, $runtime);
    }

    /**
     * @param CheckServiceLinkedRoleForDeletingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeletingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckServiceLinkedRoleForDeletingResponse::fromMap($this->doRPCRequest('CheckServiceLinkedRoleForDeleting', '2021-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckServiceLinkedRoleForDeletingRequest $request
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeleting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleForDeletingWithOptions($request, $runtime);
    }
}
