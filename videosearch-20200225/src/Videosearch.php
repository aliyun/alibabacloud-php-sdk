<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CreateBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CreateBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetStorageHistoryRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetStorageHistoryResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchVideoTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchVideoTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageVideoTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageVideoTasksResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Videosearch extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'  => 'multisearch.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'multisearch.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('videosearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param CreateBatchTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateBatchTaskResponse
     */
    public function createBatchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBatchTaskResponse::fromMap($this->doRequest('CreateBatchTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateBatchTaskRequest $request
     *
     * @return CreateBatchTaskResponse
     */
    public function createBatchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetStorageHistoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetStorageHistoryResponse
     */
    public function getStorageHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStorageHistoryResponse::fromMap($this->doRequest('GetStorageHistory', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetStorageHistoryRequest $request
     *
     * @return GetStorageHistoryResponse
     */
    public function getStorageHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageHistoryWithOptions($request, $runtime);
    }

    /**
     * @param ListBatchTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListBatchTaskResponse
     */
    public function listBatchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBatchTaskResponse::fromMap($this->doRequest('ListBatchTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListBatchTaskRequest $request
     *
     * @return ListBatchTaskResponse
     */
    public function listBatchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListInstancesResponse::fromMap($this->doRequest('ListInstances', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListStorageVideoTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListStorageVideoTasksResponse
     */
    public function listStorageVideoTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStorageVideoTasksResponse::fromMap($this->doRequest('ListStorageVideoTasks', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListStorageVideoTasksRequest $request
     *
     * @return ListStorageVideoTasksResponse
     */
    public function listStorageVideoTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStorageVideoTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListSearchVideoTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSearchVideoTasksResponse
     */
    public function listSearchVideoTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListSearchVideoTasksResponse::fromMap($this->doRequest('ListSearchVideoTasks', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListSearchVideoTasksRequest $request
     *
     * @return ListSearchVideoTasksResponse
     */
    public function listSearchVideoTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchVideoTasksWithOptions($request, $runtime);
    }

    /**
     * @param AddStorageVideoTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddStorageVideoTaskResponse
     */
    public function addStorageVideoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddStorageVideoTaskResponse::fromMap($this->doRequest('AddStorageVideoTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddStorageVideoTaskRequest $request
     *
     * @return AddStorageVideoTaskResponse
     */
    public function addStorageVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addStorageVideoTaskWithOptions($request, $runtime);
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

        return GetInstanceResponse::fromMap($this->doRequest('GetInstance', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddDeletionVideoTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDeletionVideoTaskResponse
     */
    public function addDeletionVideoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDeletionVideoTaskResponse::fromMap($this->doRequest('AddDeletionVideoTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddDeletionVideoTaskRequest $request
     *
     * @return AddDeletionVideoTaskResponse
     */
    public function addDeletionVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeletionVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTaskStatusResponse::fromMap($this->doRequest('GetTaskStatus', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param AddSearchVideoTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddSearchVideoTaskResponse
     */
    public function addSearchVideoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddSearchVideoTaskResponse::fromMap($this->doRequest('AddSearchVideoTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddSearchVideoTaskRequest $request
     *
     * @return AddSearchVideoTaskResponse
     */
    public function addSearchVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSearchVideoTaskWithOptions($request, $runtime);
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
}
