<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ConvertPostPayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ConvertPostPayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateAclRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateAclResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateSaslUserRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateSaslUserResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateTopicRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateTopicResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteAclRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteAclResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteConsumerGroupRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteSaslUserRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteSaslUserResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteTopicRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeNodeStatusRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeNodeStatusResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyInstanceNameRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyInstanceNameResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyPartitionNumRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyPartitionNumResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyTopicRemarkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyTopicRemarkResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateAllowedIpRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateAllowedIpResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateInstanceConfigRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateInstanceConfigResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradeInstanceVersionRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradeInstanceVersionResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePostPayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePostPayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePrePayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePrePayOrderResponse;
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
     * @param ConvertPostPayOrderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConvertPostPayOrderResponse
     */
    public function convertPostPayOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConvertPostPayOrderResponse::fromMap($this->doRPCRequest('ConvertPostPayOrder', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConvertPostPayOrderRequest $request
     *
     * @return ConvertPostPayOrderResponse
     */
    public function convertPostPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertPostPayOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAclResponse::fromMap($this->doRPCRequest('CreateAcl', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAclRequest $request
     *
     * @return CreateAclResponse
     */
    public function createAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclWithOptions($request, $runtime);
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

        return CreateConsumerGroupResponse::fromMap($this->doRPCRequest('CreateConsumerGroup', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreatePostPayOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePostPayOrderResponse
     */
    public function createPostPayOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePostPayOrderResponse::fromMap($this->doRPCRequest('CreatePostPayOrder', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePostPayOrderRequest $request
     *
     * @return CreatePostPayOrderResponse
     */
    public function createPostPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPostPayOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreatePrePayOrderRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePrePayOrderResponse
     */
    public function createPrePayOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePrePayOrderResponse::fromMap($this->doRPCRequest('CreatePrePayOrder', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePrePayOrderRequest $request
     *
     * @return CreatePrePayOrderResponse
     */
    public function createPrePayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrePayOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateSaslUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSaslUserResponse
     */
    public function createSaslUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSaslUserResponse::fromMap($this->doRPCRequest('CreateSaslUser', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSaslUserRequest $request
     *
     * @return CreateSaslUserResponse
     */
    public function createSaslUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSaslUserWithOptions($request, $runtime);
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

        return CreateTopicResponse::fromMap($this->doRPCRequest('CreateTopic', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAclResponse::fromMap($this->doRPCRequest('DeleteAcl', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAclRequest $request
     *
     * @return DeleteAclResponse
     */
    public function deleteAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclWithOptions($request, $runtime);
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

        return DeleteConsumerGroupResponse::fromMap($this->doRPCRequest('DeleteConsumerGroup', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSaslUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSaslUserResponse
     */
    public function deleteSaslUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSaslUserResponse::fromMap($this->doRPCRequest('DeleteSaslUser', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSaslUserRequest $request
     *
     * @return DeleteSaslUserResponse
     */
    public function deleteSaslUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSaslUserWithOptions($request, $runtime);
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

        return DeleteTopicResponse::fromMap($this->doRPCRequest('DeleteTopic', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAclsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeAclsResponse
     */
    public function describeAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAclsResponse::fromMap($this->doRPCRequest('DescribeAcls', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAclsRequest $request
     *
     * @return DescribeAclsResponse
     */
    public function describeAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAclsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNodeStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNodeStatusResponse
     */
    public function describeNodeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNodeStatusResponse::fromMap($this->doRPCRequest('DescribeNodeStatus', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNodeStatusRequest $request
     *
     * @return DescribeNodeStatusResponse
     */
    public function describeNodeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSaslUsersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSaslUsersResponse
     */
    public function describeSaslUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSaslUsersResponse::fromMap($this->doRPCRequest('DescribeSaslUsers', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSaslUsersRequest $request
     *
     * @return DescribeSaslUsersResponse
     */
    public function describeSaslUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSaslUsersWithOptions($request, $runtime);
    }

    /**
     * @param GetAllowedIpListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAllowedIpListResponse
     */
    public function getAllowedIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAllowedIpListResponse::fromMap($this->doRPCRequest('GetAllowedIpList', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAllowedIpListRequest $request
     *
     * @return GetAllowedIpListResponse
     */
    public function getAllowedIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllowedIpListWithOptions($request, $runtime);
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

        return GetConsumerListResponse::fromMap($this->doRPCRequest('GetConsumerList', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return GetConsumerProgressResponse::fromMap($this->doRPCRequest('GetConsumerProgress', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return GetInstanceListResponse::fromMap($this->doRPCRequest('GetInstanceList', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetMetaProductListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaProductListResponse
     */
    public function getMetaProductListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMetaProductListResponse::fromMap($this->doRPCRequest('GetMetaProductList', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMetaProductListRequest $request
     *
     * @return GetMetaProductListResponse
     */
    public function getMetaProductList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaProductListWithOptions($request, $runtime);
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

        return GetTopicListResponse::fromMap($this->doRPCRequest('GetTopicList', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return GetTopicStatusResponse::fromMap($this->doRPCRequest('GetTopicStatus', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceNameResponse::fromMap($this->doRPCRequest('ModifyInstanceName', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceNameRequest $request
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPartitionNumRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyPartitionNumResponse
     */
    public function modifyPartitionNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPartitionNumResponse::fromMap($this->doRPCRequest('ModifyPartitionNum', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPartitionNumRequest $request
     *
     * @return ModifyPartitionNumResponse
     */
    public function modifyPartitionNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPartitionNumWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTopicRemarkRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyTopicRemarkResponse
     */
    public function modifyTopicRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTopicRemarkResponse::fromMap($this->doRPCRequest('ModifyTopicRemark', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyTopicRemarkRequest $request
     *
     * @return ModifyTopicRemarkResponse
     */
    public function modifyTopicRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTopicRemarkWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseInstanceResponse::fromMap($this->doRPCRequest('ReleaseInstance', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartInstanceResponse::fromMap($this->doRPCRequest('StartInstance', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAllowedIpRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAllowedIpResponse
     */
    public function updateAllowedIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAllowedIpResponse::fromMap($this->doRPCRequest('UpdateAllowedIp', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAllowedIpRequest $request
     *
     * @return UpdateAllowedIpResponse
     */
    public function updateAllowedIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAllowedIpWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateInstanceConfigResponse
     */
    public function updateInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateInstanceConfigResponse::fromMap($this->doRPCRequest('UpdateInstanceConfig', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInstanceConfigRequest $request
     *
     * @return UpdateInstanceConfigResponse
     */
    public function updateInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeInstanceVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeInstanceVersionResponse::fromMap($this->doRPCRequest('UpgradeInstanceVersion', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeInstanceVersionRequest $request
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpgradePostPayOrderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpgradePostPayOrderResponse
     */
    public function upgradePostPayOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradePostPayOrderResponse::fromMap($this->doRPCRequest('UpgradePostPayOrder', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradePostPayOrderRequest $request
     *
     * @return UpgradePostPayOrderResponse
     */
    public function upgradePostPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradePostPayOrderWithOptions($request, $runtime);
    }

    /**
     * @param UpgradePrePayOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradePrePayOrderResponse
     */
    public function upgradePrePayOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradePrePayOrderResponse::fromMap($this->doRPCRequest('UpgradePrePayOrder', '2019-09-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradePrePayOrderRequest $request
     *
     * @return UpgradePrePayOrderResponse
     */
    public function upgradePrePayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradePrePayOrderWithOptions($request, $runtime);
    }
}
