<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\CreateTopicRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\CreateTopicResponse;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\DeleteConsumerGroupRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\DeleteTopicRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerListRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerListResponse;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponse;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponse;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetTopicListRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetTopicListResponse;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetTopicStatusRequest;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetTopicStatusResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Alikafka extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alikafka', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建 Group.
     *
     * @param request - CreateConsumerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param CreateConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerGroup',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 Group.
     *
     * @param request - CreateConsumerGroupRequest
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTopicResponse
     *
     * @param CreateTopicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTopicResponse
     */
    public function createTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->topic) {
            @$query['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTopic',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateTopicRequest
     *
     * @returns CreateTopicResponse
     *
     * @param CreateTopicRequest $request
     *
     * @return CreateTopicResponse
     */
    public function createTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTopicWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteConsumerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param DeleteConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerGroup',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteConsumerGroupRequest
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param DeleteConsumerGroupRequest $request
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTopicResponse
     *
     * @param DeleteTopicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topic) {
            @$query['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTopic',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteTopicRequest
     *
     * @returns DeleteTopicResponse
     *
     * @param DeleteTopicRequest $request
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTopicWithOptions($request, $runtime);
    }

    /**
     * @param request - GetConsumerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerListResponse
     *
     * @param GetConsumerListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetConsumerListResponse
     */
    public function getConsumerListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConsumerList',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConsumerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetConsumerListRequest
     *
     * @returns GetConsumerListResponse
     *
     * @param GetConsumerListRequest $request
     *
     * @return GetConsumerListResponse
     */
    public function getConsumerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsumerListWithOptions($request, $runtime);
    }

    /**
     * @param request - GetConsumerProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerProgressResponse
     *
     * @param GetConsumerProgressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConsumerProgressResponse
     */
    public function getConsumerProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConsumerProgress',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConsumerProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetConsumerProgressRequest
     *
     * @returns GetConsumerProgressResponse
     *
     * @param GetConsumerProgressRequest $request
     *
     * @return GetConsumerProgressResponse
     */
    public function getConsumerProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsumerProgressWithOptions($request, $runtime);
    }

    /**
     * @param request - GetInstanceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceListResponse
     *
     * @param GetInstanceListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetInstanceListResponse
     */
    public function getInstanceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceList',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetInstanceListRequest
     *
     * @returns GetInstanceListResponse
     *
     * @param GetInstanceListRequest $request
     *
     * @return GetInstanceListResponse
     */
    public function getInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param request - GetTopicListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicListResponse
     *
     * @param GetTopicListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTopicListResponse
     */
    public function getTopicListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTopicList',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTopicListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTopicListRequest
     *
     * @returns GetTopicListResponse
     *
     * @param GetTopicListRequest $request
     *
     * @return GetTopicListResponse
     */
    public function getTopicList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicListWithOptions($request, $runtime);
    }

    /**
     * @param request - GetTopicStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicStatusResponse
     *
     * @param GetTopicStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTopicStatusResponse
     */
    public function getTopicStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topic) {
            @$query['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTopicStatus',
            'version' => '2018-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTopicStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTopicStatusRequest
     *
     * @returns GetTopicStatusResponse
     *
     * @param GetTopicStatusRequest $request
     *
     * @return GetTopicStatusResponse
     */
    public function getTopicStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicStatusWithOptions($request, $runtime);
    }
}
