<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ChangeResourceGroupResponse;
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
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderShrinkRequest;
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
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\EnableAutoGroupCreationRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\EnableAutoGroupCreationResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\EnableAutoTopicCreationRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\EnableAutoTopicCreationResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllInstanceIdListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllInstanceIdListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetQuotaTipRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetQuotaTipResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicSubscribeStatusRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicSubscribeStatusResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyInstanceNameRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyInstanceNameResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyPartitionNumRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyPartitionNumResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyTopicRemarkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyTopicRemarkResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\QueryMessageRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\QueryMessageResponse;
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
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateConsumerOffsetRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateConsumerOffsetResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateConsumerOffsetShrinkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateInstanceConfigRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateInstanceConfigResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateTopicConfigRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateTopicConfigResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradeInstanceVersionRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradeInstanceVersionResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePostPayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePostPayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePostPayOrderShrinkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePrePayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePrePayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePrePayOrderShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConvertPostPayOrder',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertPostPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aclOperationType)) {
            $query['AclOperationType'] = $request->aclOperationType;
        }
        if (!Utils::isUnset($request->aclResourceName)) {
            $query['AclResourceName'] = $request->aclResourceName;
        }
        if (!Utils::isUnset($request->aclResourcePatternType)) {
            $query['AclResourcePatternType'] = $request->aclResourcePatternType;
        }
        if (!Utils::isUnset($request->aclResourceType)) {
            $query['AclResourceType'] = $request->aclResourceType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAcl',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAclResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConsumerGroup',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](~~84737~~).
     *   *
     * @param CreatePostPayOrderRequest $request CreatePostPayOrderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePostPayOrderResponse CreatePostPayOrderResponse
     */
    public function createPostPayOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deployType)) {
            $query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $query['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->eipMax)) {
            $query['EipMax'] = $request->eipMax;
        }
        if (!Utils::isUnset($request->ioMax)) {
            $query['IoMax'] = $request->ioMax;
        }
        if (!Utils::isUnset($request->ioMaxSpec)) {
            $query['IoMaxSpec'] = $request->ioMaxSpec;
        }
        if (!Utils::isUnset($request->partitionNum)) {
            $query['PartitionNum'] = $request->partitionNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['SpecType'] = $request->specType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->topicQuota)) {
            $query['TopicQuota'] = $request->topicQuota;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePostPayOrder',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePostPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](~~84737~~).
     *   *
     * @param CreatePostPayOrderRequest $request CreatePostPayOrderRequest
     *
     * @return CreatePostPayOrderResponse CreatePostPayOrderResponse
     */
    public function createPostPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPostPayOrderWithOptions($request, $runtime);
    }

    /**
     * *   Before you call this operation, make sure that you understand the billing methods and pricing of subscription ApsaraMQ for Kafka instances. For more information, see [Billing](~~84737~~).
     *   * *   If you create an ApsaraMQ for Kafka instance by calling this operation, the subscription duration is one month and the auto-renewal feature is enabled by default. The auto-renewal cycle is also one month. If you want to change the auto-renewal cycle or disable the auto-renewal feature, you can go to the [Renewal](https://renew.console.aliyun.com/#/ecs) page in the Alibaba Cloud Management Console.
     *   *
     * @param CreatePrePayOrderRequest $tmpReq  CreatePrePayOrderRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrePayOrderResponse CreatePrePayOrderResponse
     */
    public function createPrePayOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePrePayOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->confluentConfig)) {
            $request->confluentConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->confluentConfig, 'ConfluentConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->confluentConfigShrink)) {
            $query['ConfluentConfig'] = $request->confluentConfigShrink;
        }
        if (!Utils::isUnset($request->deployType)) {
            $query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $query['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->eipMax)) {
            $query['EipMax'] = $request->eipMax;
        }
        if (!Utils::isUnset($request->ioMax)) {
            $query['IoMax'] = $request->ioMax;
        }
        if (!Utils::isUnset($request->ioMaxSpec)) {
            $query['IoMaxSpec'] = $request->ioMaxSpec;
        }
        if (!Utils::isUnset($request->partitionNum)) {
            $query['PartitionNum'] = $request->partitionNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['SpecType'] = $request->specType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->topicQuota)) {
            $query['TopicQuota'] = $request->topicQuota;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePrePayOrder',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePrePayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Before you call this operation, make sure that you understand the billing methods and pricing of subscription ApsaraMQ for Kafka instances. For more information, see [Billing](~~84737~~).
     *   * *   If you create an ApsaraMQ for Kafka instance by calling this operation, the subscription duration is one month and the auto-renewal feature is enabled by default. The auto-renewal cycle is also one month. If you want to change the auto-renewal cycle or disable the auto-renewal feature, you can go to the [Renewal](https://renew.console.aliyun.com/#/ecs) page in the Alibaba Cloud Management Console.
     *   *
     * @param CreatePrePayOrderRequest $request CreatePrePayOrderRequest
     *
     * @return CreatePrePayOrderResponse CreatePrePayOrderResponse
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSaslUser',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSaslUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * *   Each Alibaba Cloud account can call this operation up to once per second.
     *   * *   The maximum number of topics that you can create in an instance is determined by the specification of the instance.
     *   *
     * @param CreateTopicRequest $request CreateTopicRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTopicResponse CreateTopicResponse
     */
    public function createTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compactTopic)) {
            $query['CompactTopic'] = $request->compactTopic;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->localTopic)) {
            $query['LocalTopic'] = $request->localTopic;
        }
        if (!Utils::isUnset($request->minInsyncReplicas)) {
            $query['MinInsyncReplicas'] = $request->minInsyncReplicas;
        }
        if (!Utils::isUnset($request->partitionNum)) {
            $query['PartitionNum'] = $request->partitionNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->replicationFactor)) {
            $query['ReplicationFactor'] = $request->replicationFactor;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTopic',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Each Alibaba Cloud account can call this operation up to once per second.
     *   * *   The maximum number of topics that you can create in an instance is determined by the specification of the instance.
     *   *
     * @param CreateTopicRequest $request CreateTopicRequest
     *
     * @return CreateTopicResponse CreateTopicResponse
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
        $query = [];
        if (!Utils::isUnset($request->aclOperationType)) {
            $query['AclOperationType'] = $request->aclOperationType;
        }
        if (!Utils::isUnset($request->aclResourceName)) {
            $query['AclResourceName'] = $request->aclResourceName;
        }
        if (!Utils::isUnset($request->aclResourcePatternType)) {
            $query['AclResourcePatternType'] = $request->aclResourcePatternType;
        }
        if (!Utils::isUnset($request->aclResourceType)) {
            $query['AclResourceType'] = $request->aclResourceType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAcl',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAclResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConsumerGroup',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSaslUser',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSaslUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTopic',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTopicResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aclResourceName)) {
            $query['AclResourceName'] = $request->aclResourceName;
        }
        if (!Utils::isUnset($request->aclResourcePatternType)) {
            $query['AclResourcePatternType'] = $request->aclResourcePatternType;
        }
        if (!Utils::isUnset($request->aclResourceType)) {
            $query['AclResourceType'] = $request->aclResourceType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAcls',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAclsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeSaslUsersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSaslUsersResponse
     */
    public function describeSaslUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSaslUsers',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSaslUsersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param EnableAutoGroupCreationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableAutoGroupCreationResponse
     */
    public function enableAutoGroupCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableAutoGroupCreation',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAutoGroupCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableAutoGroupCreationRequest $request
     *
     * @return EnableAutoGroupCreationResponse
     */
    public function enableAutoGroupCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAutoGroupCreationWithOptions($request, $runtime);
    }

    /**
     * @param EnableAutoTopicCreationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableAutoTopicCreationResponse
     */
    public function enableAutoTopicCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operate)) {
            $query['Operate'] = $request->operate;
        }
        if (!Utils::isUnset($request->partitionNum)) {
            $query['PartitionNum'] = $request->partitionNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableAutoTopicCreation',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAutoTopicCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableAutoTopicCreationRequest $request
     *
     * @return EnableAutoTopicCreationResponse
     */
    public function enableAutoTopicCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAutoTopicCreationWithOptions($request, $runtime);
    }

    /**
     * @param GetAllInstanceIdListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAllInstanceIdListResponse
     */
    public function getAllInstanceIdListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAllInstanceIdList',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllInstanceIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAllInstanceIdListRequest $request
     *
     * @return GetAllInstanceIdListResponse
     */
    public function getAllInstanceIdList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllInstanceIdListWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAllowedIpList',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllowedIpListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConsumerList',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConsumerListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConsumerProgress',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConsumerProgressResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceList',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetQuotaTipRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetQuotaTipResponse
     */
    public function getQuotaTipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQuotaTip',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQuotaTipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQuotaTipRequest $request
     *
     * @return GetQuotaTipResponse
     */
    public function getQuotaTip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaTipWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTopicList',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTopicListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTopicStatus',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTopicStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetTopicSubscribeStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTopicSubscribeStatusResponse
     */
    public function getTopicSubscribeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTopicSubscribeStatus',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTopicSubscribeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTopicSubscribeStatusRequest $request
     *
     * @return GetTopicSubscribeStatusResponse
     */
    public function getTopicSubscribeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicSubscribeStatusWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceName',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->addPartitionNum)) {
            $query['AddPartitionNum'] = $request->addPartitionNum;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPartitionNum',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPartitionNumResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTopicRemark',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTopicRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryMessageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMessageResponse
     */
    public function queryMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMessage',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMessageRequest $request
     *
     * @return QueryMessageResponse
     */
    public function queryMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageWithOptions($request, $runtime);
    }

    /**
     * You cannot call this operation to release a subscription Message Queue for Apache Kafka instance.
     *   *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceDeleteInstance)) {
            $query['ForceDeleteInstance'] = $request->forceDeleteInstance;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstance',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot call this operation to release a subscription Message Queue for Apache Kafka instance.
     *   *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to twice per second.
     *   *
     * @param StartInstanceRequest $request StartInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->crossZone)) {
            $query['CrossZone'] = $request->crossZone;
        }
        if (!Utils::isUnset($request->deployModule)) {
            $query['DeployModule'] = $request->deployModule;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isEipInner)) {
            $query['IsEipInner'] = $request->isEipInner;
        }
        if (!Utils::isUnset($request->isForceSelectedZones)) {
            $query['IsForceSelectedZones'] = $request->isForceSelectedZones;
        }
        if (!Utils::isUnset($request->isSetUserAndPassword)) {
            $query['IsSetUserAndPassword'] = $request->isSetUserAndPassword;
        }
        if (!Utils::isUnset($request->KMSKeyId)) {
            $query['KMSKeyId'] = $request->KMSKeyId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifier)) {
            $query['Notifier'] = $request->notifier;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroup)) {
            $query['SecurityGroup'] = $request->securityGroup;
        }
        if (!Utils::isUnset($request->selectedZones)) {
            $query['SelectedZones'] = $request->selectedZones;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->userPhoneNum)) {
            $query['UserPhoneNum'] = $request->userPhoneNum;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to twice per second.
     *   *
     * @param StartInstanceRequest $request StartInstanceRequest
     *
     * @return StartInstanceResponse StartInstanceResponse
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->allowedListIp)) {
            $query['AllowedListIp'] = $request->allowedListIp;
        }
        if (!Utils::isUnset($request->allowedListType)) {
            $query['AllowedListType'] = $request->allowedListType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->updateType)) {
            $query['UpdateType'] = $request->updateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAllowedIp',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAllowedIpResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can call this operation to reset the consumer offsets of the subscribed topics of a consumer group. You can specify a timestamp or an offset to reset a consumer offset. You can implement the following features by configuring a combination of different parameters:
     *   * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to the latest offset. This way, you can consume messages in the topics from the latest offset.
     *   * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to a specific point in time. This way, you can consume messages in the topics from the specified point in time.
     *   * *   Reset the consumer offset of one subscribed topic of a consumer group to a specific offset in a specific partition. This way, you can consume messages from the specified offset in the specified partition.
     *   *
     * @param UpdateConsumerOffsetRequest $tmpReq  UpdateConsumerOffsetRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConsumerOffsetResponse UpdateConsumerOffsetResponse
     */
    public function updateConsumerOffsetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateConsumerOffsetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->offsets)) {
            $request->offsetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->offsets, 'Offsets', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->offsetsShrink)) {
            $query['Offsets'] = $request->offsetsShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resetType)) {
            $query['ResetType'] = $request->resetType;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConsumerOffset',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConsumerOffsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to reset the consumer offsets of the subscribed topics of a consumer group. You can specify a timestamp or an offset to reset a consumer offset. You can implement the following features by configuring a combination of different parameters:
     *   * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to the latest offset. This way, you can consume messages in the topics from the latest offset.
     *   * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to a specific point in time. This way, you can consume messages in the topics from the specified point in time.
     *   * *   Reset the consumer offset of one subscribed topic of a consumer group to a specific offset in a specific partition. This way, you can consume messages from the specified offset in the specified partition.
     *   *
     * @param UpdateConsumerOffsetRequest $request UpdateConsumerOffsetRequest
     *
     * @return UpdateConsumerOffsetResponse UpdateConsumerOffsetResponse
     */
    public function updateConsumerOffset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConsumerOffsetWithOptions($request, $runtime);
    }

    /**
     * ## **Permissions**
     *   * If a RAM user wants to call the **UpdateInstanceConfig** operation, the RAM user must be granted the required permissions. For more information about how to grant permissions, see [RAM policies](~~185815~~).
     *   * |API|Action|Resource|
     *   * |---|---|---|
     *   * |UpdateInstanceConfig|alikafka: UpdateInstance|acs:alikafka:*:*:{instanceId}|.
     *   *
     * @param UpdateInstanceConfigRequest $request UpdateInstanceConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceConfigResponse UpdateInstanceConfigResponse
     */
    public function updateInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceConfig',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## **Permissions**
     *   * If a RAM user wants to call the **UpdateInstanceConfig** operation, the RAM user must be granted the required permissions. For more information about how to grant permissions, see [RAM policies](~~185815~~).
     *   * |API|Action|Resource|
     *   * |---|---|---|
     *   * |UpdateInstanceConfig|alikafka: UpdateInstance|acs:alikafka:*:*:{instanceId}|.
     *   *
     * @param UpdateInstanceConfigRequest $request UpdateInstanceConfigRequest
     *
     * @return UpdateInstanceConfigResponse UpdateInstanceConfigResponse
     */
    public function updateInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTopicConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateTopicConfigResponse
     */
    public function updateTopicConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTopicConfig',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTopicConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTopicConfigRequest $request
     *
     * @return UpdateTopicConfigResponse
     */
    public function updateTopicConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTopicConfigWithOptions($request, $runtime);
    }

    /**
     * ## **Permissions**
     *   * A RAM user must be granted the required permissions before the RAM user calls the **UpgradeInstanceVersion** operation. For information about how to grant permissions, see [RAM policies](~~185815~~).
     *   * |API|Action|Resource|
     *   * |---|---|---|
     *   * |UpgradeInstanceVersion|UpdateInstance|acs:alikafka:*:*:{instanceId}|
     *   * ## **QPS limits**
     *   * You can send a maximum of two queries per second (QPS).
     *   *
     * @param UpgradeInstanceVersionRequest $request UpgradeInstanceVersionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeInstanceVersionResponse UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->targetVersion)) {
            $query['TargetVersion'] = $request->targetVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeInstanceVersion',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## **Permissions**
     *   * A RAM user must be granted the required permissions before the RAM user calls the **UpgradeInstanceVersion** operation. For information about how to grant permissions, see [RAM policies](~~185815~~).
     *   * |API|Action|Resource|
     *   * |---|---|---|
     *   * |UpgradeInstanceVersion|UpdateInstance|acs:alikafka:*:*:{instanceId}|
     *   * ## **QPS limits**
     *   * You can send a maximum of two queries per second (QPS).
     *   *
     * @param UpgradeInstanceVersionRequest $request UpgradeInstanceVersionRequest
     *
     * @return UpgradeInstanceVersionResponse UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](~~84737~~).
     *   *
     * @param UpgradePostPayOrderRequest $tmpReq  UpgradePostPayOrderRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradePostPayOrderResponse UpgradePostPayOrderResponse
     */
    public function upgradePostPayOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpgradePostPayOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serverlessConfig)) {
            $request->serverlessConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->diskSize)) {
            $query['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->eipMax)) {
            $query['EipMax'] = $request->eipMax;
        }
        if (!Utils::isUnset($request->eipModel)) {
            $query['EipModel'] = $request->eipModel;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ioMax)) {
            $query['IoMax'] = $request->ioMax;
        }
        if (!Utils::isUnset($request->ioMaxSpec)) {
            $query['IoMaxSpec'] = $request->ioMaxSpec;
        }
        if (!Utils::isUnset($request->partitionNum)) {
            $query['PartitionNum'] = $request->partitionNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serverlessConfigShrink)) {
            $query['ServerlessConfig'] = $request->serverlessConfigShrink;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['SpecType'] = $request->specType;
        }
        if (!Utils::isUnset($request->topicQuota)) {
            $query['TopicQuota'] = $request->topicQuota;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradePostPayOrder',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradePostPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](~~84737~~).
     *   *
     * @param UpgradePostPayOrderRequest $request UpgradePostPayOrderRequest
     *
     * @return UpgradePostPayOrderResponse UpgradePostPayOrderResponse
     */
    public function upgradePostPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradePostPayOrderWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing method and pricing of subscription Message Queue for Apache Kafka instances. For more information, see [Billing overview](~~84737~~).
     *   *
     * @param UpgradePrePayOrderRequest $tmpReq  UpgradePrePayOrderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradePrePayOrderResponse UpgradePrePayOrderResponse
     */
    public function upgradePrePayOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpgradePrePayOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->confluentConfig)) {
            $request->confluentConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->confluentConfig, 'ConfluentConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->confluentConfigShrink)) {
            $query['ConfluentConfig'] = $request->confluentConfigShrink;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $query['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->eipMax)) {
            $query['EipMax'] = $request->eipMax;
        }
        if (!Utils::isUnset($request->eipModel)) {
            $query['EipModel'] = $request->eipModel;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ioMax)) {
            $query['IoMax'] = $request->ioMax;
        }
        if (!Utils::isUnset($request->ioMaxSpec)) {
            $query['IoMaxSpec'] = $request->ioMaxSpec;
        }
        if (!Utils::isUnset($request->paidType)) {
            $query['PaidType'] = $request->paidType;
        }
        if (!Utils::isUnset($request->partitionNum)) {
            $query['PartitionNum'] = $request->partitionNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['SpecType'] = $request->specType;
        }
        if (!Utils::isUnset($request->topicQuota)) {
            $query['TopicQuota'] = $request->topicQuota;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradePrePayOrder',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradePrePayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing method and pricing of subscription Message Queue for Apache Kafka instances. For more information, see [Billing overview](~~84737~~).
     *   *
     * @param UpgradePrePayOrderRequest $request UpgradePrePayOrderRequest
     *
     * @return UpgradePrePayOrderResponse UpgradePrePayOrderResponse
     */
    public function upgradePrePayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradePrePayOrderWithOptions($request, $runtime);
    }
}
