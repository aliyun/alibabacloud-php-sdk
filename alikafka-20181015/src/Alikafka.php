<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Alikafka extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'alikafka.aliyuncs.com',
            'ap-southeast-2'              => 'alikafka.aliyuncs.com',
            'cn-beijing-finance-1'        => 'alikafka.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'alikafka.aliyuncs.com',
            'cn-beijing-gov-1'            => 'alikafka.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'alikafka.aliyuncs.com',
            'cn-edge-1'                   => 'alikafka.aliyuncs.com',
            'cn-fujian'                   => 'alikafka.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'alikafka.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'alikafka.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'alikafka.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'alikafka.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'alikafka.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'alikafka.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'alikafka.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'alikafka.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'alikafka.aliyuncs.com',
            'cn-qingdao-nebula'           => 'alikafka.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'alikafka.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'alikafka.aliyuncs.com',
            'cn-shanghai-inner'           => 'alikafka.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'alikafka.aliyuncs.com',
            'cn-shenzhen-inner'           => 'alikafka.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'alikafka.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'alikafka.aliyuncs.com',
            'cn-wuhan'                    => 'alikafka.aliyuncs.com',
            'cn-wulanchabu'               => 'alikafka.aliyuncs.com',
            'cn-yushanfang'               => 'alikafka.aliyuncs.com',
            'cn-zhangbei'                 => 'alikafka.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'alikafka.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'alikafka.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'alikafka.aliyuncs.com',
            'eu-west-1-oxs'               => 'alikafka.aliyuncs.com',
            'me-east-1'                   => 'alikafka.aliyuncs.com',
            'rus-west-1-pop'              => 'alikafka.aliyuncs.com',
        ];
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreateConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConsumerGroupResponse::fromMap($this->doRPCRequest('CreateConsumerGroup', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateTopicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTopicResponse
     */
    public function createTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTopicResponse::fromMap($this->doRPCRequest('CreateTopic', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->doRPCRequest('DeleteConsumerGroup', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteTopicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTopicResponse::fromMap($this->doRPCRequest('DeleteTopic', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetConsumerListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetConsumerListResponse
     */
    public function getConsumerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConsumerListResponse::fromMap($this->doRPCRequest('GetConsumerList', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetConsumerProgressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConsumerProgressResponse
     */
    public function getConsumerProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConsumerProgressResponse::fromMap($this->doRPCRequest('GetConsumerProgress', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetInstanceListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetInstanceListResponse
     */
    public function getInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceListResponse::fromMap($this->doRPCRequest('GetInstanceList', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetTopicListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTopicListResponse
     */
    public function getTopicListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTopicListResponse::fromMap($this->doRPCRequest('GetTopicList', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetTopicStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTopicStatusResponse
     */
    public function getTopicStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTopicStatusResponse::fromMap($this->doRPCRequest('GetTopicStatus', '2018-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
