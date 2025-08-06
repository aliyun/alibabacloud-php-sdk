<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ConvertPostPayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ConvertPostPayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateAclRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateAclResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayInstanceResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayInstanceShrinkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayOrderShrinkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayInstanceResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayInstanceShrinkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderShrinkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateSaslUserRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateSaslUserResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateScheduledScalingRuleRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateScheduledScalingRuleResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateScheduledScalingRuleShrinkRequest;
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
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteScheduledScalingRuleRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteScheduledScalingRuleResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteTopicRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclResourceNameRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclResourceNameResponse;
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
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetQuotaTipRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetQuotaTipResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetRiskListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetRiskListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicSubscribeStatusRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicSubscribeStatusResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ListRebalanceInfoRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ListRebalanceInfoResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyInstanceNameRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyInstanceNameResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyPartitionNumRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyPartitionNumResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyScheduledScalingRuleRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyScheduledScalingRuleResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyTopicRemarkRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ModifyTopicRemarkResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\QueryMessageRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\QueryMessageResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ReopenInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\ReopenInstanceResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\StopInstanceResponse;
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
     * Changes the resource group of an ApsaraMQ for Kafka instance.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group of an ApsaraMQ for Kafka instance.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
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
     * Changes the billing method of a Message Queue for Apache Kafka instance from pay-as-you-go to subscription.
     *
     * @param request - ConvertPostPayOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertPostPayOrderResponse
     *
     * @param ConvertPostPayOrderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConvertPostPayOrderResponse
     */
    public function convertPostPayOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->paidType) {
            @$query['PaidType'] = $request->paidType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConvertPostPayOrder',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertPostPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the billing method of a Message Queue for Apache Kafka instance from pay-as-you-go to subscription.
     *
     * @param request - ConvertPostPayOrderRequest
     *
     * @returns ConvertPostPayOrderResponse
     *
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
     * Creates an access control list (ACL).
     *
     * @param request - CreateAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAclResponse
     *
     * @param CreateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclOperationType) {
            @$query['AclOperationType'] = $request->aclOperationType;
        }

        if (null !== $request->aclOperationTypes) {
            @$query['AclOperationTypes'] = $request->aclOperationTypes;
        }

        if (null !== $request->aclPermissionType) {
            @$query['AclPermissionType'] = $request->aclPermissionType;
        }

        if (null !== $request->aclResourceName) {
            @$query['AclResourceName'] = $request->aclResourceName;
        }

        if (null !== $request->aclResourcePatternType) {
            @$query['AclResourcePatternType'] = $request->aclResourcePatternType;
        }

        if (null !== $request->aclResourceType) {
            @$query['AclResourceType'] = $request->aclResourceType;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAcl',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control list (ACL).
     *
     * @param request - CreateAclRequest
     *
     * @returns CreateAclResponse
     *
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
     * Creates a consumer group.
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

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerGroup',
            'version' => '2019-09-16',
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
     * Creates a consumer group.
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
     * 创建后付费实例。
     *
     * @param tmpReq - CreatePostPayInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePostPayInstanceResponse
     *
     * @param CreatePostPayInstanceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePostPayInstanceResponse
     */
    public function createPostPayInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePostPayInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serverlessConfig) {
            $request->serverlessConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }

        $query = [];
        if (null !== $request->deployType) {
            @$query['DeployType'] = $request->deployType;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->eipMax) {
            @$query['EipMax'] = $request->eipMax;
        }

        if (null !== $request->ioMaxSpec) {
            @$query['IoMaxSpec'] = $request->ioMaxSpec;
        }

        if (null !== $request->paidType) {
            @$query['PaidType'] = $request->paidType;
        }

        if (null !== $request->partitionNum) {
            @$query['PartitionNum'] = $request->partitionNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serverlessConfigShrink) {
            @$query['ServerlessConfig'] = $request->serverlessConfigShrink;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePostPayInstance',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePostPayInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建后付费实例。
     *
     * @param request - CreatePostPayInstanceRequest
     *
     * @returns CreatePostPayInstanceResponse
     *
     * @param CreatePostPayInstanceRequest $request
     *
     * @return CreatePostPayInstanceResponse
     */
    public function createPostPayInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPostPayInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a pay-as-you-go ApsaraMQ for Kafka instance. Pay-as-you-go instances allow you to pay after you use the resources. You are charged for pay-as-you-go instances based on the actual resource usage. You can use pay-as-you-go instances in test scenarios or scenarios in which the peak traffic is uncertain.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * @param tmpReq - CreatePostPayOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePostPayOrderResponse
     *
     * @param CreatePostPayOrderRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePostPayOrderResponse
     */
    public function createPostPayOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePostPayOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serverlessConfig) {
            $request->serverlessConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }

        $query = [];
        if (null !== $request->deployType) {
            @$query['DeployType'] = $request->deployType;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->eipMax) {
            @$query['EipMax'] = $request->eipMax;
        }

        if (null !== $request->ioMax) {
            @$query['IoMax'] = $request->ioMax;
        }

        if (null !== $request->ioMaxSpec) {
            @$query['IoMaxSpec'] = $request->ioMaxSpec;
        }

        if (null !== $request->paidType) {
            @$query['PaidType'] = $request->paidType;
        }

        if (null !== $request->partitionNum) {
            @$query['PartitionNum'] = $request->partitionNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serverlessConfigShrink) {
            @$query['ServerlessConfig'] = $request->serverlessConfigShrink;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->topicQuota) {
            @$query['TopicQuota'] = $request->topicQuota;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePostPayOrder',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePostPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a pay-as-you-go ApsaraMQ for Kafka instance. Pay-as-you-go instances allow you to pay after you use the resources. You are charged for pay-as-you-go instances based on the actual resource usage. You can use pay-as-you-go instances in test scenarios or scenarios in which the peak traffic is uncertain.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * @param request - CreatePostPayOrderRequest
     *
     * @returns CreatePostPayOrderResponse
     *
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
     * 创建预付费实例.
     *
     * @param tmpReq - CreatePrePayInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrePayInstanceResponse
     *
     * @param CreatePrePayInstanceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePrePayInstanceResponse
     */
    public function createPrePayInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePrePayInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->confluentConfig) {
            $request->confluentConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->confluentConfig, 'ConfluentConfig', 'json');
        }

        $query = [];
        if (null !== $request->confluentConfigShrink) {
            @$query['ConfluentConfig'] = $request->confluentConfigShrink;
        }

        if (null !== $request->deployType) {
            @$query['DeployType'] = $request->deployType;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->eipMax) {
            @$query['EipMax'] = $request->eipMax;
        }

        if (null !== $request->ioMaxSpec) {
            @$query['IoMaxSpec'] = $request->ioMaxSpec;
        }

        if (null !== $request->paidType) {
            @$query['PaidType'] = $request->paidType;
        }

        if (null !== $request->partitionNum) {
            @$query['PartitionNum'] = $request->partitionNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePrePayInstance',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePrePayInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建预付费实例.
     *
     * @param request - CreatePrePayInstanceRequest
     *
     * @returns CreatePrePayInstanceResponse
     *
     * @param CreatePrePayInstanceRequest $request
     *
     * @return CreatePrePayInstanceResponse
     */
    public function createPrePayInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrePayInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a subscription ApsaraMQ for Kafka instance. You can use subscription instances only after you pay for them. Subscription instances are suitable for long-term and stable business scenarios.
     *
     * @remarks
     *   Before you call this operation, make sure that you understand the billing methods and pricing of subscription ApsaraMQ for Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     * *   If you create an ApsaraMQ for Kafka instance by calling this operation, the subscription duration is one month and the auto-renewal feature is enabled by default. The auto-renewal cycle is also one month. If you want to change the auto-renewal cycle or disable the auto-renewal feature, you can go to the [Renewal](https://renew.console.aliyun.com/#/ecs) page in the Alibaba Cloud Management Console.
     *
     * @param tmpReq - CreatePrePayOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrePayOrderResponse
     *
     * @param CreatePrePayOrderRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePrePayOrderResponse
     */
    public function createPrePayOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePrePayOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->confluentConfig) {
            $request->confluentConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->confluentConfig, 'ConfluentConfig', 'json');
        }

        $query = [];
        if (null !== $request->confluentConfigShrink) {
            @$query['ConfluentConfig'] = $request->confluentConfigShrink;
        }

        if (null !== $request->deployType) {
            @$query['DeployType'] = $request->deployType;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->eipMax) {
            @$query['EipMax'] = $request->eipMax;
        }

        if (null !== $request->ioMax) {
            @$query['IoMax'] = $request->ioMax;
        }

        if (null !== $request->ioMaxSpec) {
            @$query['IoMaxSpec'] = $request->ioMaxSpec;
        }

        if (null !== $request->paidType) {
            @$query['PaidType'] = $request->paidType;
        }

        if (null !== $request->partitionNum) {
            @$query['PartitionNum'] = $request->partitionNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->topicQuota) {
            @$query['TopicQuota'] = $request->topicQuota;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePrePayOrder',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePrePayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a subscription ApsaraMQ for Kafka instance. You can use subscription instances only after you pay for them. Subscription instances are suitable for long-term and stable business scenarios.
     *
     * @remarks
     *   Before you call this operation, make sure that you understand the billing methods and pricing of subscription ApsaraMQ for Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     * *   If you create an ApsaraMQ for Kafka instance by calling this operation, the subscription duration is one month and the auto-renewal feature is enabled by default. The auto-renewal cycle is also one month. If you want to change the auto-renewal cycle or disable the auto-renewal feature, you can go to the [Renewal](https://renew.console.aliyun.com/#/ecs) page in the Alibaba Cloud Management Console.
     *
     * @param request - CreatePrePayOrderRequest
     *
     * @returns CreatePrePayOrderResponse
     *
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
     * Creates a Simple Authentication and Security Layer (SASL) user.
     *
     * @param request - CreateSaslUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSaslUserResponse
     *
     * @param CreateSaslUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSaslUserResponse
     */
    public function createSaslUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mechanism) {
            @$query['Mechanism'] = $request->mechanism;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSaslUser',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSaslUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Simple Authentication and Security Layer (SASL) user.
     *
     * @param request - CreateSaslUserRequest
     *
     * @returns CreateSaslUserResponse
     *
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
     * Creates a scheduled scaling rule for a serverless ApsaraMQ for Kafka V3 instance.
     *
     * @remarks
     * ###### [](#-v3-serverless-)This operation is supported only by serverless ApsaraMQ for Kafka V3 instances.
     *
     * @param tmpReq - CreateScheduledScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledScalingRuleResponse
     *
     * @param CreateScheduledScalingRuleRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateScheduledScalingRuleResponse
     */
    public function createScheduledScalingRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateScheduledScalingRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->weeklyTypes) {
            $request->weeklyTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->weeklyTypes, 'WeeklyTypes', 'json');
        }

        $query = [];
        if (null !== $request->durationMinutes) {
            @$query['DurationMinutes'] = $request->durationMinutes;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->firstScheduledTime) {
            @$query['FirstScheduledTime'] = $request->firstScheduledTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->reservedPubFlow) {
            @$query['ReservedPubFlow'] = $request->reservedPubFlow;
        }

        if (null !== $request->reservedSubFlow) {
            @$query['ReservedSubFlow'] = $request->reservedSubFlow;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->scheduleType) {
            @$query['ScheduleType'] = $request->scheduleType;
        }

        if (null !== $request->timeZone) {
            @$query['TimeZone'] = $request->timeZone;
        }

        if (null !== $request->weeklyTypesShrink) {
            @$query['WeeklyTypes'] = $request->weeklyTypesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledScalingRule',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScheduledScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scheduled scaling rule for a serverless ApsaraMQ for Kafka V3 instance.
     *
     * @remarks
     * ###### [](#-v3-serverless-)This operation is supported only by serverless ApsaraMQ for Kafka V3 instances.
     *
     * @param request - CreateScheduledScalingRuleRequest
     *
     * @returns CreateScheduledScalingRuleResponse
     *
     * @param CreateScheduledScalingRuleRequest $request
     *
     * @return CreateScheduledScalingRuleResponse
     */
    public function createScheduledScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledScalingRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a topic.
     *
     * @remarks
     *   Each Alibaba Cloud account can call this operation up to once per second.
     * *   The maximum number of topics that you can create in an instance is determined by the specification of the instance.
     *
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
        if (null !== $request->compactTopic) {
            @$query['CompactTopic'] = $request->compactTopic;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->localTopic) {
            @$query['LocalTopic'] = $request->localTopic;
        }

        if (null !== $request->minInsyncReplicas) {
            @$query['MinInsyncReplicas'] = $request->minInsyncReplicas;
        }

        if (null !== $request->partitionNum) {
            @$query['PartitionNum'] = $request->partitionNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->replicationFactor) {
            @$query['ReplicationFactor'] = $request->replicationFactor;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->topic) {
            @$query['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTopic',
            'version' => '2019-09-16',
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
     * Creates a topic.
     *
     * @remarks
     *   Each Alibaba Cloud account can call this operation up to once per second.
     * *   The maximum number of topics that you can create in an instance is determined by the specification of the instance.
     *
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
     * Deletes an access control list (ACL).
     *
     * @param request - DeleteAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAclResponse
     *
     * @param DeleteAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclOperationType) {
            @$query['AclOperationType'] = $request->aclOperationType;
        }

        if (null !== $request->aclOperationTypes) {
            @$query['AclOperationTypes'] = $request->aclOperationTypes;
        }

        if (null !== $request->aclPermissionType) {
            @$query['AclPermissionType'] = $request->aclPermissionType;
        }

        if (null !== $request->aclResourceName) {
            @$query['AclResourceName'] = $request->aclResourceName;
        }

        if (null !== $request->aclResourcePatternType) {
            @$query['AclResourcePatternType'] = $request->aclResourcePatternType;
        }

        if (null !== $request->aclResourceType) {
            @$query['AclResourceType'] = $request->aclResourceType;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAcl',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access control list (ACL).
     *
     * @param request - DeleteAclRequest
     *
     * @returns DeleteAclResponse
     *
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
     * Deletes a consumer group from a specified Message Queue for Apache Kafka instance.
     *
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
            'version' => '2019-09-16',
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
     * Deletes a consumer group from a specified Message Queue for Apache Kafka instance.
     *
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
     * Deletes an instance. You can delete subscription and pay-as-you-go instances after you release them.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
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
            'action' => 'DeleteInstance',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an instance. You can delete subscription and pay-as-you-go instances after you release them.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
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
     * Deletes a Simple Authentication and Security Layer (SASL) user.
     *
     * @param request - DeleteSaslUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSaslUserResponse
     *
     * @param DeleteSaslUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSaslUserResponse
     */
    public function deleteSaslUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mechanism) {
            @$query['Mechanism'] = $request->mechanism;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSaslUser',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSaslUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Simple Authentication and Security Layer (SASL) user.
     *
     * @param request - DeleteSaslUserRequest
     *
     * @returns DeleteSaslUserResponse
     *
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
     * Deletes the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *
     * @remarks
     * ###### [](#-serverless-)This operation is available only for serverless ApsaraMQ for Kafka instances.
     *
     * @param request - DeleteScheduledScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScheduledScalingRuleResponse
     *
     * @param DeleteScheduledScalingRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteScheduledScalingRuleResponse
     */
    public function deleteScheduledScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScheduledScalingRule',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScheduledScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *
     * @remarks
     * ###### [](#-serverless-)This operation is available only for serverless ApsaraMQ for Kafka instances.
     *
     * @param request - DeleteScheduledScalingRuleRequest
     *
     * @returns DeleteScheduledScalingRuleResponse
     *
     * @param DeleteScheduledScalingRuleRequest $request
     *
     * @return DeleteScheduledScalingRuleResponse
     */
    public function deleteScheduledScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledScalingRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a topic.
     *
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
            'version' => '2019-09-16',
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
     * Deletes a topic.
     *
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
     * 查询acl资源名.
     *
     * @param request - DescribeAclResourceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAclResourceNameResponse
     *
     * @param DescribeAclResourceNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAclResourceNameResponse
     */
    public function describeAclResourceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclResourcePatternType) {
            @$query['AclResourcePatternType'] = $request->aclResourcePatternType;
        }

        if (null !== $request->aclResourceType) {
            @$query['AclResourceType'] = $request->aclResourceType;
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
            'action' => 'DescribeAclResourceName',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAclResourceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询acl资源名.
     *
     * @param request - DescribeAclResourceNameRequest
     *
     * @returns DescribeAclResourceNameResponse
     *
     * @param DescribeAclResourceNameRequest $request
     *
     * @return DescribeAclResourceNameResponse
     */
    public function describeAclResourceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAclResourceNameWithOptions($request, $runtime);
    }

    /**
     * Queries access control lists (ACLs).
     *
     * @param request - DescribeAclsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAclsResponse
     *
     * @param DescribeAclsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeAclsResponse
     */
    public function describeAclsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclOperationType) {
            @$query['AclOperationType'] = $request->aclOperationType;
        }

        if (null !== $request->aclPermissionType) {
            @$query['AclPermissionType'] = $request->aclPermissionType;
        }

        if (null !== $request->aclResourceName) {
            @$query['AclResourceName'] = $request->aclResourceName;
        }

        if (null !== $request->aclResourcePatternType) {
            @$query['AclResourcePatternType'] = $request->aclResourcePatternType;
        }

        if (null !== $request->aclResourceType) {
            @$query['AclResourceType'] = $request->aclResourceType;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAcls',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAclsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access control lists (ACLs).
     *
     * @param request - DescribeAclsRequest
     *
     * @returns DescribeAclsResponse
     *
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
     * Queries Simple Authentication and Security Layer (SASL) users.
     *
     * @param request - DescribeSaslUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSaslUsersResponse
     *
     * @param DescribeSaslUsersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSaslUsersResponse
     */
    public function describeSaslUsersWithOptions($request, $runtime)
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
            'action' => 'DescribeSaslUsers',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSaslUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Simple Authentication and Security Layer (SASL) users.
     *
     * @param request - DescribeSaslUsersRequest
     *
     * @returns DescribeSaslUsersResponse
     *
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
     * Enables and disables the flexible group creation feature.
     *
     * @param request - EnableAutoGroupCreationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAutoGroupCreationResponse
     *
     * @param EnableAutoGroupCreationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableAutoGroupCreationResponse
     */
    public function enableAutoGroupCreationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
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
            'action' => 'EnableAutoGroupCreation',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAutoGroupCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables and disables the flexible group creation feature.
     *
     * @param request - EnableAutoGroupCreationRequest
     *
     * @returns EnableAutoGroupCreationResponse
     *
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
     * Enables or disables the automatic topic creation feature, or changes the number of partitions in topics that are automatically created.
     *
     * @param request - EnableAutoTopicCreationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAutoTopicCreationResponse
     *
     * @param EnableAutoTopicCreationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableAutoTopicCreationResponse
     */
    public function enableAutoTopicCreationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->operate) {
            @$query['Operate'] = $request->operate;
        }

        if (null !== $request->partitionNum) {
            @$query['PartitionNum'] = $request->partitionNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->updatePartition) {
            @$query['UpdatePartition'] = $request->updatePartition;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableAutoTopicCreation',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAutoTopicCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the automatic topic creation feature, or changes the number of partitions in topics that are automatically created.
     *
     * @param request - EnableAutoTopicCreationRequest
     *
     * @returns EnableAutoTopicCreationResponse
     *
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
     * Queries the IDs of all instances in the current account.
     *
     * @param request - GetAllInstanceIdListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAllInstanceIdListResponse
     *
     * @param GetAllInstanceIdListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAllInstanceIdListResponse
     */
    public function getAllInstanceIdListWithOptions($request, $runtime)
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
            'action' => 'GetAllInstanceIdList',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAllInstanceIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IDs of all instances in the current account.
     *
     * @param request - GetAllInstanceIdListRequest
     *
     * @returns GetAllInstanceIdListResponse
     *
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
     * Queries the IP address whitelist.
     *
     * @param request - GetAllowedIpListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAllowedIpListResponse
     *
     * @param GetAllowedIpListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAllowedIpListResponse
     */
    public function getAllowedIpListWithOptions($request, $runtime)
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
            'action' => 'GetAllowedIpList',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAllowedIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP address whitelist.
     *
     * @param request - GetAllowedIpListRequest
     *
     * @returns GetAllowedIpListResponse
     *
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
     * Queries the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *
     * @remarks
     * ###### [](#-serverless-)**This operation is available only for serverless ApsaraMQ for Kafka instances.
     *
     * @param request - GetAutoScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoScalingConfigurationResponse
     *
     * @param GetAutoScalingConfigurationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAutoScalingConfigurationResponse
     */
    public function getAutoScalingConfigurationWithOptions($request, $runtime)
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
            'action' => 'GetAutoScalingConfiguration',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *
     * @remarks
     * ###### [](#-serverless-)**This operation is available only for serverless ApsaraMQ for Kafka instances.
     *
     * @param request - GetAutoScalingConfigurationRequest
     *
     * @returns GetAutoScalingConfigurationResponse
     *
     * @param GetAutoScalingConfigurationRequest $request
     *
     * @return GetAutoScalingConfigurationResponse
     */
    public function getAutoScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries one or more consumer groups in a specified Message Queue for Apache Kafka instance.
     *
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
        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

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
            'action' => 'GetConsumerList',
            'version' => '2019-09-16',
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
     * Queries one or more consumer groups in a specified Message Queue for Apache Kafka instance.
     *
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
     * Queries the consumer progress of a consumer group.
     *
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

        if (null !== $request->hideLastTimestamp) {
            @$query['HideLastTimestamp'] = $request->hideLastTimestamp;
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
            'version' => '2019-09-16',
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
     * Queries the consumer progress of a consumer group.
     *
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
     * Queries the information about instances in a specified region.
     *
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->series) {
            @$query['Series'] = $request->series;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceList',
            'version' => '2019-09-16',
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
     * Queries the information about instances in a specified region.
     *
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
     * Queries the IP addresses of the clients that are connected to an ApsaraMQ for Kafka instance.
     *
     * @remarks
     *   The IP information is obtained from the sampled logs generated for the requests that the client sends to the broker by calling the API operations of ApsaraMQ for Kafka.
     * *   Statistics refers to the number of connections on different ports of an IP address within a specific period of time.
     * *   If the broker is not of the latest minor version, the sampled logs may not be accurate. This may cause inaccurate IP information. Therefore, we recommend that you update your broker to the latest version at the earliest opportunity.
     *
     * @param request - GetKafkaClientIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKafkaClientIpResponse
     *
     * @param GetKafkaClientIpRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetKafkaClientIpResponse
     */
    public function getKafkaClientIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->topic) {
            @$query['Topic'] = $request->topic;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKafkaClientIp',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetKafkaClientIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP addresses of the clients that are connected to an ApsaraMQ for Kafka instance.
     *
     * @remarks
     *   The IP information is obtained from the sampled logs generated for the requests that the client sends to the broker by calling the API operations of ApsaraMQ for Kafka.
     * *   Statistics refers to the number of connections on different ports of an IP address within a specific period of time.
     * *   If the broker is not of the latest minor version, the sampled logs may not be accurate. This may cause inaccurate IP information. Therefore, we recommend that you update your broker to the latest version at the earliest opportunity.
     *
     * @param request - GetKafkaClientIpRequest
     *
     * @returns GetKafkaClientIpResponse
     *
     * @param GetKafkaClientIpRequest $request
     *
     * @return GetKafkaClientIpResponse
     */
    public function getKafkaClientIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKafkaClientIpWithOptions($request, $runtime);
    }

    /**
     * Queries the used quota of topics and partitions.
     *
     * @param request - GetQuotaTipRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaTipResponse
     *
     * @param GetQuotaTipRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetQuotaTipResponse
     */
    public function getQuotaTipWithOptions($request, $runtime)
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
            'action' => 'GetQuotaTip',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQuotaTipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the used quota of topics and partitions.
     *
     * @param request - GetQuotaTipRequest
     *
     * @returns GetQuotaTipResponse
     *
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
     * 查询实例风险列表.
     *
     * @param request - GetRiskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRiskListResponse
     *
     * @param GetRiskListRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetRiskListResponse
     */
    public function getRiskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startIndex) {
            @$query['StartIndex'] = $request->startIndex;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRiskList',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRiskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例风险列表.
     *
     * @param request - GetRiskListRequest
     *
     * @returns GetRiskListResponse
     *
     * @param GetRiskListRequest $request
     *
     * @return GetRiskListResponse
     */
    public function getRiskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a topic.
     *
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

        if (null !== $request->topic) {
            @$query['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTopicList',
            'version' => '2019-09-16',
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
     * Queries the information about a topic.
     *
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
     * Queries the messaging status of a topic.
     *
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
            'version' => '2019-09-16',
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
     * Queries the messaging status of a topic.
     *
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

    /**
     * Queries the information about the groups that subscribe to a topic.
     *
     * @param request - GetTopicSubscribeStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicSubscribeStatusResponse
     *
     * @param GetTopicSubscribeStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTopicSubscribeStatusResponse
     */
    public function getTopicSubscribeStatusWithOptions($request, $runtime)
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
            'action' => 'GetTopicSubscribeStatus',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTopicSubscribeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the groups that subscribe to a topic.
     *
     * @param request - GetTopicSubscribeStatusRequest
     *
     * @returns GetTopicSubscribeStatusResponse
     *
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
     * 获取Rebalance详情.
     *
     * @param request - ListRebalanceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRebalanceInfoResponse
     *
     * @param ListRebalanceInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRebalanceInfoResponse
     */
    public function listRebalanceInfoWithOptions($request, $runtime)
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
            'action' => 'ListRebalanceInfo',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRebalanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Rebalance详情.
     *
     * @param request - ListRebalanceInfoRequest
     *
     * @returns ListRebalanceInfoResponse
     *
     * @param ListRebalanceInfoRequest $request
     *
     * @return ListRebalanceInfoResponse
     */
    public function listRebalanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRebalanceInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are attached to a specified resource.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are attached to a specified resource.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
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
     * Changes the name of an ApsaraMQ for Kafka instance. After you deploy an instance, you can call this operation to change the name of the instance.
     *
     * @param request - ModifyInstanceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceNameResponse
     *
     * @param ModifyInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceName',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name of an ApsaraMQ for Kafka instance. After you deploy an instance, you can call this operation to change the name of the instance.
     *
     * @param request - ModifyInstanceNameRequest
     *
     * @returns ModifyInstanceNameResponse
     *
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
     * Changes the number of partitions in a topic.
     *
     * @param request - ModifyPartitionNumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPartitionNumResponse
     *
     * @param ModifyPartitionNumRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyPartitionNumResponse
     */
    public function modifyPartitionNumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addPartitionNum) {
            @$query['AddPartitionNum'] = $request->addPartitionNum;
        }

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
            'action' => 'ModifyPartitionNum',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPartitionNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the number of partitions in a topic.
     *
     * @param request - ModifyPartitionNumRequest
     *
     * @returns ModifyPartitionNumResponse
     *
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
     * Modifies the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *
     * @remarks
     * ###### [](#-serverless-)This operation is available only for serverless ApsaraMQ for Kafka instances.
     *
     * @param request - ModifyScheduledScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScheduledScalingRuleResponse
     *
     * @param ModifyScheduledScalingRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyScheduledScalingRuleResponse
     */
    public function modifyScheduledScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScheduledScalingRule',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScheduledScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *
     * @remarks
     * ###### [](#-serverless-)This operation is available only for serverless ApsaraMQ for Kafka instances.
     *
     * @param request - ModifyScheduledScalingRuleRequest
     *
     * @returns ModifyScheduledScalingRuleResponse
     *
     * @param ModifyScheduledScalingRuleRequest $request
     *
     * @return ModifyScheduledScalingRuleResponse
     */
    public function modifyScheduledScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScheduledScalingRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a topic.
     *
     * @param request - ModifyTopicRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTopicRemarkResponse
     *
     * @param ModifyTopicRemarkRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyTopicRemarkResponse
     */
    public function modifyTopicRemarkWithOptions($request, $runtime)
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
            'action' => 'ModifyTopicRemark',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTopicRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a topic.
     *
     * @param request - ModifyTopicRemarkRequest
     *
     * @returns ModifyTopicRemarkResponse
     *
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
     * Queries messages stored in a topic. You can query messages by creation time or offset.
     *
     * @param request - QueryMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMessageResponse
     *
     * @param QueryMessageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMessageResponse
     */
    public function queryMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMessage',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries messages stored in a topic. You can query messages by creation time or offset.
     *
     * @param request - QueryMessageRequest
     *
     * @returns QueryMessageResponse
     *
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
     * Releases a pay-as-you-go instance.
     *
     * @remarks
     * You cannot call this operation to release a subscription Message Queue for Apache Kafka instance.
     *
     * @param request - ReleaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceDeleteInstance) {
            @$query['ForceDeleteInstance'] = $request->forceDeleteInstance;
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
            'action' => 'ReleaseInstance',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a pay-as-you-go instance.
     *
     * @remarks
     * You cannot call this operation to release a subscription Message Queue for Apache Kafka instance.
     *
     * @param request - ReleaseInstanceRequest
     *
     * @returns ReleaseInstanceResponse
     *
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
     * Enables an ApsaraMQ for Kafka instance.
     *
     * @remarks
     * You can call this operation only if your instance is in the Stopped state.
     *
     * @param request - ReopenInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReopenInstanceResponse
     *
     * @param ReopenInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReopenInstanceResponse
     */
    public function reopenInstanceWithOptions($request, $runtime)
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
            'action' => 'ReopenInstance',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReopenInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an ApsaraMQ for Kafka instance.
     *
     * @remarks
     * You can call this operation only if your instance is in the Stopped state.
     *
     * @param request - ReopenInstanceRequest
     *
     * @returns ReopenInstanceResponse
     *
     * @param ReopenInstanceRequest $request
     *
     * @return ReopenInstanceResponse
     */
    public function reopenInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reopenInstanceWithOptions($request, $runtime);
    }

    /**
     * Deploys an ApsaraMQ for Kafka instance. You must purchase and deploy an ApsaraMQ for Kafka instance before you can use the instance to send and receive messages.
     *
     * @remarks
     * >  You can call this operation up to twice per second.
     *
     * @param request - StartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->crossZone) {
            @$query['CrossZone'] = $request->crossZone;
        }

        if (null !== $request->deployModule) {
            @$query['DeployModule'] = $request->deployModule;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isEipInner) {
            @$query['IsEipInner'] = $request->isEipInner;
        }

        if (null !== $request->isForceSelectedZones) {
            @$query['IsForceSelectedZones'] = $request->isForceSelectedZones;
        }

        if (null !== $request->isSetUserAndPassword) {
            @$query['IsSetUserAndPassword'] = $request->isSetUserAndPassword;
        }

        if (null !== $request->KMSKeyId) {
            @$query['KMSKeyId'] = $request->KMSKeyId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->notifier) {
            @$query['Notifier'] = $request->notifier;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroup) {
            @$query['SecurityGroup'] = $request->securityGroup;
        }

        if (null !== $request->selectedZones) {
            @$query['SelectedZones'] = $request->selectedZones;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->userPhoneNum) {
            @$query['UserPhoneNum'] = $request->userPhoneNum;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartInstance',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys an ApsaraMQ for Kafka instance. You must purchase and deploy an ApsaraMQ for Kafka instance before you can use the instance to send and receive messages.
     *
     * @remarks
     * >  You can call this operation up to twice per second.
     *
     * @param request - StartInstanceRequest
     *
     * @returns StartInstanceResponse
     *
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
     * Stops an ApsaraMQ for Kafka instance.
     *
     * @remarks
     * You cannot stop a subscription ApsaraMQ for Kafka instance. If you want to stop a subscription ApsaraMQ for Kafka instance, submit a ticket.
     *
     * @param request - StopInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
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
            'action' => 'StopInstance',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an ApsaraMQ for Kafka instance.
     *
     * @remarks
     * You cannot stop a subscription ApsaraMQ for Kafka instance. If you want to stop a subscription ApsaraMQ for Kafka instance, submit a ticket.
     *
     * @param request - StopInstanceRequest
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * Attaches a tag to a resource.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a tag to a resource.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Detaches tags from a specified resource.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches tags from a specified resource.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
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
     * Updates the IP address whitelist of an ApsaraMQ for Kafka instance. Only IP addresses and ports that are configured in the IP address whitelist of an instance can access the instance.
     *
     * @param request - UpdateAllowedIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAllowedIpResponse
     *
     * @param UpdateAllowedIpRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAllowedIpResponse
     */
    public function updateAllowedIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowedListIp) {
            @$query['AllowedListIp'] = $request->allowedListIp;
        }

        if (null !== $request->allowedListType) {
            @$query['AllowedListType'] = $request->allowedListType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->portRange) {
            @$query['PortRange'] = $request->portRange;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->updateType) {
            @$query['UpdateType'] = $request->updateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAllowedIp',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAllowedIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the IP address whitelist of an ApsaraMQ for Kafka instance. Only IP addresses and ports that are configured in the IP address whitelist of an instance can access the instance.
     *
     * @param request - UpdateAllowedIpRequest
     *
     * @returns UpdateAllowedIpResponse
     *
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
     * Resets the consumer offsets of the subscribed topics of a consumer group.
     *
     * @remarks
     * You can call this operation to reset the consumer offset of a specific consumer group. You can use the timestamp or offset parameter to reset the consumer offset of a consumer group. You can implement the following features by configuring a combination of different parameters:
     * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to the latest offset. This way, you can consume messages in the topics from the latest offset.
     * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to a specific point in time. This way, you can consume messages in the topics from the specified point in time.
     * *   Reset the consumer offset of one subscribed topic of a consumer group to a specific offset in a specific partition. This way, you can consume messages from the specified offset in the specified partition.
     *
     * @param tmpReq - UpdateConsumerOffsetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerOffsetResponse
     *
     * @param UpdateConsumerOffsetRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateConsumerOffsetResponse
     */
    public function updateConsumerOffsetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateConsumerOffsetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->offsets) {
            $request->offsetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->offsets, 'Offsets', 'json');
        }

        $query = [];
        if (null !== $request->consumerId) {
            @$query['ConsumerId'] = $request->consumerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->offsetsShrink) {
            @$query['Offsets'] = $request->offsetsShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resetType) {
            @$query['ResetType'] = $request->resetType;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        if (null !== $request->topic) {
            @$query['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerOffset',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerOffsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the consumer offsets of the subscribed topics of a consumer group.
     *
     * @remarks
     * You can call this operation to reset the consumer offset of a specific consumer group. You can use the timestamp or offset parameter to reset the consumer offset of a consumer group. You can implement the following features by configuring a combination of different parameters:
     * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to the latest offset. This way, you can consume messages in the topics from the latest offset.
     * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to a specific point in time. This way, you can consume messages in the topics from the specified point in time.
     * *   Reset the consumer offset of one subscribed topic of a consumer group to a specific offset in a specific partition. This way, you can consume messages from the specified offset in the specified partition.
     *
     * @param request - UpdateConsumerOffsetRequest
     *
     * @returns UpdateConsumerOffsetResponse
     *
     * @param UpdateConsumerOffsetRequest $request
     *
     * @return UpdateConsumerOffsetResponse
     */
    public function updateConsumerOffset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConsumerOffsetWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of an ApsaraMQ for Kafka instance. ApsaraMQ for Kafka allows you to modify the configurations of an instance, including the access control list (ACL) feature, the Secure Sockets Layer (SSL) feature, the message retention period, and the maximum message size.
     *
     * @remarks
     * ## **Permissions**
     * If a RAM user wants to call the **UpdateInstanceConfig** operation, the RAM user must be granted the required permissions. For more information about how to grant permissions, see [RAM policies](https://help.aliyun.com/document_detail/185815.html).
     * |API|Action|Resource|
     * |---|---|---|
     * |UpdateInstanceConfig|alikafka: UpdateInstance|acs:alikafka:*:*:{instanceId}|
     *
     * @param request - UpdateInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceConfigResponse
     *
     * @param UpdateInstanceConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateInstanceConfigResponse
     */
    public function updateInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
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
            'action' => 'UpdateInstanceConfig',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an ApsaraMQ for Kafka instance. ApsaraMQ for Kafka allows you to modify the configurations of an instance, including the access control list (ACL) feature, the Secure Sockets Layer (SSL) feature, the message retention period, and the maximum message size.
     *
     * @remarks
     * ## **Permissions**
     * If a RAM user wants to call the **UpdateInstanceConfig** operation, the RAM user must be granted the required permissions. For more information about how to grant permissions, see [RAM policies](https://help.aliyun.com/document_detail/185815.html).
     * |API|Action|Resource|
     * |---|---|---|
     * |UpdateInstanceConfig|alikafka: UpdateInstance|acs:alikafka:*:*:{instanceId}|
     *
     * @param request - UpdateInstanceConfigRequest
     *
     * @returns UpdateInstanceConfigResponse
     *
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
     * Modifies the configurations of a topic. After you create a topic, you can modify the message retention period and maximum message size of the topic.
     *
     * @param request - UpdateTopicConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTopicConfigResponse
     *
     * @param UpdateTopicConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateTopicConfigResponse
     */
    public function updateTopicConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topic) {
            @$query['Topic'] = $request->topic;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTopicConfig',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTopicConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a topic. After you create a topic, you can modify the message retention period and maximum message size of the topic.
     *
     * @param request - UpdateTopicConfigRequest
     *
     * @returns UpdateTopicConfigResponse
     *
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
     * Updates the version of an instance.
     *
     * @remarks
     * ## **Permissions**
     * A RAM user must be granted the required permissions before the RAM user calls the **UpgradeInstanceVersion** operation. For information about how to grant permissions, see [RAM policies](https://help.aliyun.com/document_detail/185815.html).
     * |API|Action|Resource|
     * |---|---|---|
     * |UpgradeInstanceVersion|UpdateInstance|acs:alikafka:*:*:{instanceId}|
     * ## **QPS limits**
     * You can send a maximum of two queries per second (QPS).
     *
     * @param request - UpgradeInstanceVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeInstanceVersionResponse
     *
     * @param UpgradeInstanceVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->targetVersion) {
            @$query['TargetVersion'] = $request->targetVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeInstanceVersion',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the version of an instance.
     *
     * @remarks
     * ## **Permissions**
     * A RAM user must be granted the required permissions before the RAM user calls the **UpgradeInstanceVersion** operation. For information about how to grant permissions, see [RAM policies](https://help.aliyun.com/document_detail/185815.html).
     * |API|Action|Resource|
     * |---|---|---|
     * |UpgradeInstanceVersion|UpdateInstance|acs:alikafka:*:*:{instanceId}|
     * ## **QPS limits**
     * You can send a maximum of two queries per second (QPS).
     *
     * @param request - UpgradeInstanceVersionRequest
     *
     * @returns UpgradeInstanceVersionResponse
     *
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
     * Upgrades a pay-as-you-go ApsaraMQ for Kafka instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * @param tmpReq - UpgradePostPayOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradePostPayOrderResponse
     *
     * @param UpgradePostPayOrderRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpgradePostPayOrderResponse
     */
    public function upgradePostPayOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpgradePostPayOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serverlessConfig) {
            $request->serverlessConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }

        $query = [];
        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->eipMax) {
            @$query['EipMax'] = $request->eipMax;
        }

        if (null !== $request->eipModel) {
            @$query['EipModel'] = $request->eipModel;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ioMax) {
            @$query['IoMax'] = $request->ioMax;
        }

        if (null !== $request->ioMaxSpec) {
            @$query['IoMaxSpec'] = $request->ioMaxSpec;
        }

        if (null !== $request->partitionNum) {
            @$query['PartitionNum'] = $request->partitionNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serverlessConfigShrink) {
            @$query['ServerlessConfig'] = $request->serverlessConfigShrink;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        if (null !== $request->topicQuota) {
            @$query['TopicQuota'] = $request->topicQuota;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradePostPayOrder',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradePostPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades a pay-as-you-go ApsaraMQ for Kafka instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * @param request - UpgradePostPayOrderRequest
     *
     * @returns UpgradePostPayOrderResponse
     *
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
     * Upgrades a Message Queue for Apache Kafka instance that uses the subscription billing method.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of subscription Message Queue for Apache Kafka instances. For more information, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *
     * @param tmpReq - UpgradePrePayOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradePrePayOrderResponse
     *
     * @param UpgradePrePayOrderRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradePrePayOrderResponse
     */
    public function upgradePrePayOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpgradePrePayOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->confluentConfig) {
            $request->confluentConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->confluentConfig, 'ConfluentConfig', 'json');
        }

        $query = [];
        if (null !== $request->confluentConfigShrink) {
            @$query['ConfluentConfig'] = $request->confluentConfigShrink;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->eipMax) {
            @$query['EipMax'] = $request->eipMax;
        }

        if (null !== $request->eipModel) {
            @$query['EipModel'] = $request->eipModel;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ioMax) {
            @$query['IoMax'] = $request->ioMax;
        }

        if (null !== $request->ioMaxSpec) {
            @$query['IoMaxSpec'] = $request->ioMaxSpec;
        }

        if (null !== $request->paidType) {
            @$query['PaidType'] = $request->paidType;
        }

        if (null !== $request->partitionNum) {
            @$query['PartitionNum'] = $request->partitionNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        if (null !== $request->topicQuota) {
            @$query['TopicQuota'] = $request->topicQuota;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradePrePayOrder',
            'version' => '2019-09-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradePrePayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades a Message Queue for Apache Kafka instance that uses the subscription billing method.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of subscription Message Queue for Apache Kafka instances. For more information, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *
     * @param request - UpgradePrePayOrderRequest
     *
     * @returns UpgradePrePayOrderResponse
     *
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
