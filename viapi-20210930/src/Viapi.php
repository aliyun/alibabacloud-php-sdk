<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use Darabonba\OpenApi\Models\Params;
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
     * @param CheckServiceLinkedRoleForDeletingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeletingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->deletionTaskId)) {
            $query['DeletionTaskId'] = $request->deletionTaskId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->SPIRegionId)) {
            $query['SPIRegionId'] = $request->SPIRegionId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceLinkedRoleForDeleting',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckServiceLinkedRoleForDeletingResponse::fromMap($this->callApi($params, $req, $runtime));
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

    /**
     * @param CreateAiStoreBucketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAiStoreBucketResponse
     */
    public function createAiStoreBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bucketName)) {
            $body['BucketName'] = $request->bucketName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAiStoreBucket',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAiStoreBucketResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateAiStoreReceiveConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAiStoreReceiveConfigResponse
     */
    public function createAiStoreReceiveConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiName)) {
            $body['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->product)) {
            $body['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAiStoreReceiveConfig',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAiStoreReceiveConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateAiStoreUserTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAiStoreUserTaskResponse
     */
    public function createAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiName)) {
            $body['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->bucketKeyPrefix)) {
            $body['BucketKeyPrefix'] = $request->bucketKeyPrefix;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $body['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->createConfig)) {
            $body['CreateConfig'] = $request->createConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->paramInfo)) {
            $body['ParamInfo'] = $request->paramInfo;
        }
        if (!Utils::isUnset($request->product)) {
            $body['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->receiveConfig)) {
            $body['ReceiveConfig'] = $request->receiveConfig;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAiStoreUserTask',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAiStoreUserTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteAiStoreUserTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAiStoreUserTaskResponse
     */
    public function deleteAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aistoreVersion)) {
            $body['AistoreVersion'] = $request->aistoreVersion;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAiStoreUserTask',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAiStoreUserTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DisableAiStoreUserTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DisableAiStoreUserTaskResponse
     */
    public function disableAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aistoreVersion)) {
            $body['AistoreVersion'] = $request->aistoreVersion;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableAiStoreUserTask',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAiStoreUserTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param EnableAiStoreUserTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EnableAiStoreUserTaskResponse
     */
    public function enableAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aistoreVersion)) {
            $body['AistoreVersion'] = $request->aistoreVersion;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableAiStoreUserTask',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAiStoreUserTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetAiStoreReceiveConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAiStoreReceiveConfigResponse
     */
    public function getAiStoreReceiveConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiName)) {
            $body['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->product)) {
            $body['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAiStoreReceiveConfig',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiStoreReceiveConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetAiStoreUserTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAiStoreUserTaskResponse
     */
    public function getAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAiStoreUserTask',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiStoreUserTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetAiStoreUserTaskByNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAiStoreUserTaskByNameResponse
     */
    public function getAiStoreUserTaskByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAiStoreUserTaskByName',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiStoreUserTaskByNameResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListAiStoreBucketsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAiStoreBucketsResponse
     */
    public function listAiStoreBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiName)) {
            $body['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->product)) {
            $body['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAiStoreBuckets',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAiStoreBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return QueryAiStoreApiTreeResponse
     */
    public function queryAiStoreApiTreeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryAiStoreApiTree',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAiStoreApiTreeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return QueryAiStoreRegionsResponse
     */
    public function queryAiStoreRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryAiStoreRegions',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAiStoreRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryAiStoreUserTaskPageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryAiStoreUserTaskPageResponse
     */
    public function queryAiStoreUserTaskPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAiStoreUserTaskPage',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAiStoreUserTaskPageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateAiStoreUserTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAiStoreUserTaskResponse
     */
    public function updateAiStoreUserTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiName)) {
            $body['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->bucketKeyPrefix)) {
            $body['BucketKeyPrefix'] = $request->bucketKeyPrefix;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $body['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->paramInfo)) {
            $body['ParamInfo'] = $request->paramInfo;
        }
        if (!Utils::isUnset($request->product)) {
            $body['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->receiveConfig)) {
            $body['ReceiveConfig'] = $request->receiveConfig;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAiStoreUserTask',
            'version'     => '2021-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAiStoreUserTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
}
