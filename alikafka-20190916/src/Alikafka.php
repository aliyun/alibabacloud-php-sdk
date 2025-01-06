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
     * @summary Changes the resource group of an ApsaraMQ for Kafka instance.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
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
     * @summary Changes the resource group of an ApsaraMQ for Kafka instance.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the billing method of a Message Queue for Apache Kafka instance from pay-as-you-go to subscription.
     *  *
     * @param ConvertPostPayOrderRequest $request ConvertPostPayOrderRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ConvertPostPayOrderResponse ConvertPostPayOrderResponse
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
        if (!Utils::isUnset($request->paidType)) {
            $query['PaidType'] = $request->paidType;
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
     * @summary Changes the billing method of a Message Queue for Apache Kafka instance from pay-as-you-go to subscription.
     *  *
     * @param ConvertPostPayOrderRequest $request ConvertPostPayOrderRequest
     *
     * @return ConvertPostPayOrderResponse ConvertPostPayOrderResponse
     */
    public function convertPostPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertPostPayOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access control list (ACL).
     *  *
     * @param CreateAclRequest $request CreateAclRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAclResponse CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclOperationType)) {
            $query['AclOperationType'] = $request->aclOperationType;
        }
        if (!Utils::isUnset($request->aclOperationTypes)) {
            $query['AclOperationTypes'] = $request->aclOperationTypes;
        }
        if (!Utils::isUnset($request->aclPermissionType)) {
            $query['AclPermissionType'] = $request->aclPermissionType;
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
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
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
     * @summary Creates an access control list (ACL).
     *  *
     * @param CreateAclRequest $request CreateAclRequest
     *
     * @return CreateAclResponse CreateAclResponse
     */
    public function createAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a consumer group.
     *  *
     * @param CreateConsumerGroupRequest $request CreateConsumerGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConsumerGroupResponse CreateConsumerGroupResponse
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
     * @summary Creates a consumer group.
     *  *
     * @param CreateConsumerGroupRequest $request CreateConsumerGroupRequest
     *
     * @return CreateConsumerGroupResponse CreateConsumerGroupResponse
     */
    public function createConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建后付费实例。
     *  *
     * @param CreatePostPayInstanceRequest $tmpReq  CreatePostPayInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePostPayInstanceResponse CreatePostPayInstanceResponse
     */
    public function createPostPayInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePostPayInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serverlessConfig)) {
            $request->serverlessConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serverlessConfigShrink)) {
            $query['ServerlessConfig'] = $request->serverlessConfigShrink;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['SpecType'] = $request->specType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePostPayInstance',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePostPayInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建后付费实例。
     *  *
     * @param CreatePostPayInstanceRequest $request CreatePostPayInstanceRequest
     *
     * @return CreatePostPayInstanceResponse CreatePostPayInstanceResponse
     */
    public function createPostPayInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPostPayInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a pay-as-you-go ApsaraMQ for Kafka instance. Pay-as-you-go instances allow you to pay after you use the resources. You are charged for pay-as-you-go instances based on the actual resource usage. You can use pay-as-you-go instances in test scenarios or scenarios in which the peak traffic is uncertain.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *  *
     * @param CreatePostPayOrderRequest $tmpReq  CreatePostPayOrderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePostPayOrderResponse CreatePostPayOrderResponse
     */
    public function createPostPayOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePostPayOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serverlessConfig)) {
            $request->serverlessConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }
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
        if (!Utils::isUnset($request->paidType)) {
            $query['PaidType'] = $request->paidType;
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
        if (!Utils::isUnset($request->serverlessConfigShrink)) {
            $query['ServerlessConfig'] = $request->serverlessConfigShrink;
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
     * @summary Creates a pay-as-you-go ApsaraMQ for Kafka instance. Pay-as-you-go instances allow you to pay after you use the resources. You are charged for pay-as-you-go instances based on the actual resource usage. You can use pay-as-you-go instances in test scenarios or scenarios in which the peak traffic is uncertain.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *  *
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
     * @summary 创建预付费实例
     *  *
     * @param CreatePrePayInstanceRequest $tmpReq  CreatePrePayInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrePayInstanceResponse CreatePrePayInstanceResponse
     */
    public function createPrePayInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePrePayInstanceShrinkRequest([]);
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
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->eipMax)) {
            $query['EipMax'] = $request->eipMax;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['SpecType'] = $request->specType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePrePayInstance',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePrePayInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建预付费实例
     *  *
     * @param CreatePrePayInstanceRequest $request CreatePrePayInstanceRequest
     *
     * @return CreatePrePayInstanceResponse CreatePrePayInstanceResponse
     */
    public function createPrePayInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrePayInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a subscription ApsaraMQ for Kafka instance. You can use subscription instances only after you pay for them. Subscription instances are suitable for long-term and stable business scenarios.
     *  *
     * @description *   Before you call this operation, make sure that you understand the billing methods and pricing of subscription ApsaraMQ for Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     * *   If you create an ApsaraMQ for Kafka instance by calling this operation, the subscription duration is one month and the auto-renewal feature is enabled by default. The auto-renewal cycle is also one month. If you want to change the auto-renewal cycle or disable the auto-renewal feature, you can go to the [Renewal](https://renew.console.aliyun.com/#/ecs) page in the Alibaba Cloud Management Console.
     *  *
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
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
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
        if (!Utils::isUnset($request->paidType)) {
            $query['PaidType'] = $request->paidType;
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
     * @summary Creates a subscription ApsaraMQ for Kafka instance. You can use subscription instances only after you pay for them. Subscription instances are suitable for long-term and stable business scenarios.
     *  *
     * @description *   Before you call this operation, make sure that you understand the billing methods and pricing of subscription ApsaraMQ for Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     * *   If you create an ApsaraMQ for Kafka instance by calling this operation, the subscription duration is one month and the auto-renewal feature is enabled by default. The auto-renewal cycle is also one month. If you want to change the auto-renewal cycle or disable the auto-renewal feature, you can go to the [Renewal](https://renew.console.aliyun.com/#/ecs) page in the Alibaba Cloud Management Console.
     *  *
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
     * @summary Creates a Simple Authentication and Security Layer (SASL) user.
     *  *
     * @param CreateSaslUserRequest $request CreateSaslUserRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSaslUserResponse CreateSaslUserResponse
     */
    public function createSaslUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mechanism)) {
            $query['Mechanism'] = $request->mechanism;
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
     * @summary Creates a Simple Authentication and Security Layer (SASL) user.
     *  *
     * @param CreateSaslUserRequest $request CreateSaslUserRequest
     *
     * @return CreateSaslUserResponse CreateSaslUserResponse
     */
    public function createSaslUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSaslUserWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a scheduled scaling rule for a serverless ApsaraMQ for Kafka V3 instance.
     *  *
     * @description ###### [](#-v3-serverless-)This operation is supported only by serverless ApsaraMQ for Kafka V3 instances.
     *  *
     * @param CreateScheduledScalingRuleRequest $tmpReq  CreateScheduledScalingRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScheduledScalingRuleResponse CreateScheduledScalingRuleResponse
     */
    public function createScheduledScalingRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateScheduledScalingRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->weeklyTypes)) {
            $request->weeklyTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->weeklyTypes, 'WeeklyTypes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->durationMinutes)) {
            $query['DurationMinutes'] = $request->durationMinutes;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->firstScheduledTime)) {
            $query['FirstScheduledTime'] = $request->firstScheduledTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->reservedPubFlow)) {
            $query['ReservedPubFlow'] = $request->reservedPubFlow;
        }
        if (!Utils::isUnset($request->reservedSubFlow)) {
            $query['ReservedSubFlow'] = $request->reservedSubFlow;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->scheduleType)) {
            $query['ScheduleType'] = $request->scheduleType;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $query['TimeZone'] = $request->timeZone;
        }
        if (!Utils::isUnset($request->weeklyTypesShrink)) {
            $query['WeeklyTypes'] = $request->weeklyTypesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScheduledScalingRule',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScheduledScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a scheduled scaling rule for a serverless ApsaraMQ for Kafka V3 instance.
     *  *
     * @description ###### [](#-v3-serverless-)This operation is supported only by serverless ApsaraMQ for Kafka V3 instances.
     *  *
     * @param CreateScheduledScalingRuleRequest $request CreateScheduledScalingRuleRequest
     *
     * @return CreateScheduledScalingRuleResponse CreateScheduledScalingRuleResponse
     */
    public function createScheduledScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a topic.
     *  *
     * @description *   Each Alibaba Cloud account can call this operation up to once per second.
     * *   The maximum number of topics that you can create in an instance is determined by the specification of the instance.
     *  *
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
     * @summary Creates a topic.
     *  *
     * @description *   Each Alibaba Cloud account can call this operation up to once per second.
     * *   The maximum number of topics that you can create in an instance is determined by the specification of the instance.
     *  *
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
     * @summary Deletes an access control list (ACL).
     *  *
     * @param DeleteAclRequest $request DeleteAclRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAclResponse DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclOperationType)) {
            $query['AclOperationType'] = $request->aclOperationType;
        }
        if (!Utils::isUnset($request->aclOperationTypes)) {
            $query['AclOperationTypes'] = $request->aclOperationTypes;
        }
        if (!Utils::isUnset($request->aclPermissionType)) {
            $query['AclPermissionType'] = $request->aclPermissionType;
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
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
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
     * @summary Deletes an access control list (ACL).
     *  *
     * @param DeleteAclRequest $request DeleteAclRequest
     *
     * @return DeleteAclResponse DeleteAclResponse
     */
    public function deleteAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a consumer group from a specified Message Queue for Apache Kafka instance.
     *  *
     * @param DeleteConsumerGroupRequest $request DeleteConsumerGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConsumerGroupResponse DeleteConsumerGroupResponse
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
     * @summary Deletes a consumer group from a specified Message Queue for Apache Kafka instance.
     *  *
     * @param DeleteConsumerGroupRequest $request DeleteConsumerGroupRequest
     *
     * @return DeleteConsumerGroupResponse DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an instance. You can delete subscription and pay-as-you-go instances after you release them.
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
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
     * @summary Deletes an instance. You can delete subscription and pay-as-you-go instances after you release them.
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Simple Authentication and Security Layer (SASL) user.
     *  *
     * @param DeleteSaslUserRequest $request DeleteSaslUserRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSaslUserResponse DeleteSaslUserResponse
     */
    public function deleteSaslUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mechanism)) {
            $query['Mechanism'] = $request->mechanism;
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
     * @summary Deletes a Simple Authentication and Security Layer (SASL) user.
     *  *
     * @param DeleteSaslUserRequest $request DeleteSaslUserRequest
     *
     * @return DeleteSaslUserResponse DeleteSaslUserResponse
     */
    public function deleteSaslUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSaslUserWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *  *
     * @description ###### [](#-serverless-)This operation is available only for serverless ApsaraMQ for Kafka instances.
     *  *
     * @param DeleteScheduledScalingRuleRequest $request DeleteScheduledScalingRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScheduledScalingRuleResponse DeleteScheduledScalingRuleResponse
     */
    public function deleteScheduledScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScheduledScalingRule',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScheduledScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *  *
     * @description ###### [](#-serverless-)This operation is available only for serverless ApsaraMQ for Kafka instances.
     *  *
     * @param DeleteScheduledScalingRuleRequest $request DeleteScheduledScalingRuleRequest
     *
     * @return DeleteScheduledScalingRuleResponse DeleteScheduledScalingRuleResponse
     */
    public function deleteScheduledScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a topic.
     *  *
     * @param DeleteTopicRequest $request DeleteTopicRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTopicResponse DeleteTopicResponse
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
     * @summary Deletes a topic.
     *  *
     * @param DeleteTopicRequest $request DeleteTopicRequest
     *
     * @return DeleteTopicResponse DeleteTopicResponse
     */
    public function deleteTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTopicWithOptions($request, $runtime);
    }

    /**
     * @summary Queries access control lists (ACLs).
     *  *
     * @param DescribeAclsRequest $request DescribeAclsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAclsResponse DescribeAclsResponse
     */
    public function describeAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclOperationType)) {
            $query['AclOperationType'] = $request->aclOperationType;
        }
        if (!Utils::isUnset($request->aclPermissionType)) {
            $query['AclPermissionType'] = $request->aclPermissionType;
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
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
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
     * @summary Queries access control lists (ACLs).
     *  *
     * @param DescribeAclsRequest $request DescribeAclsRequest
     *
     * @return DescribeAclsResponse DescribeAclsResponse
     */
    public function describeAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAclsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Simple Authentication and Security Layer (SASL) users.
     *  *
     * @param DescribeSaslUsersRequest $request DescribeSaslUsersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSaslUsersResponse DescribeSaslUsersResponse
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
     * @summary Queries Simple Authentication and Security Layer (SASL) users.
     *  *
     * @param DescribeSaslUsersRequest $request DescribeSaslUsersRequest
     *
     * @return DescribeSaslUsersResponse DescribeSaslUsersResponse
     */
    public function describeSaslUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSaslUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Enables and disables the flexible group creation feature.
     *  *
     * @param EnableAutoGroupCreationRequest $request EnableAutoGroupCreationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableAutoGroupCreationResponse EnableAutoGroupCreationResponse
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
     * @summary Enables and disables the flexible group creation feature.
     *  *
     * @param EnableAutoGroupCreationRequest $request EnableAutoGroupCreationRequest
     *
     * @return EnableAutoGroupCreationResponse EnableAutoGroupCreationResponse
     */
    public function enableAutoGroupCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAutoGroupCreationWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the automatic topic creation feature, or changes the number of partitions in topics that are automatically created.
     *  *
     * @param EnableAutoTopicCreationRequest $request EnableAutoTopicCreationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableAutoTopicCreationResponse EnableAutoTopicCreationResponse
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
        if (!Utils::isUnset($request->updatePartition)) {
            $query['UpdatePartition'] = $request->updatePartition;
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
     * @summary Enables or disables the automatic topic creation feature, or changes the number of partitions in topics that are automatically created.
     *  *
     * @param EnableAutoTopicCreationRequest $request EnableAutoTopicCreationRequest
     *
     * @return EnableAutoTopicCreationResponse EnableAutoTopicCreationResponse
     */
    public function enableAutoTopicCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAutoTopicCreationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IDs of all instances in the current account.
     *  *
     * @param GetAllInstanceIdListRequest $request GetAllInstanceIdListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAllInstanceIdListResponse GetAllInstanceIdListResponse
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
     * @summary Queries the IDs of all instances in the current account.
     *  *
     * @param GetAllInstanceIdListRequest $request GetAllInstanceIdListRequest
     *
     * @return GetAllInstanceIdListResponse GetAllInstanceIdListResponse
     */
    public function getAllInstanceIdList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllInstanceIdListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP address whitelist.
     *  *
     * @param GetAllowedIpListRequest $request GetAllowedIpListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAllowedIpListResponse GetAllowedIpListResponse
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
     * @summary Queries the IP address whitelist.
     *  *
     * @param GetAllowedIpListRequest $request GetAllowedIpListRequest
     *
     * @return GetAllowedIpListResponse GetAllowedIpListResponse
     */
    public function getAllowedIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllowedIpListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *  *
     * @description ###### [](#-serverless-)**This operation is available only for serverless ApsaraMQ for Kafka instances.
     *  *
     * @param GetAutoScalingConfigurationRequest $request GetAutoScalingConfigurationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutoScalingConfigurationResponse GetAutoScalingConfigurationResponse
     */
    public function getAutoScalingConfigurationWithOptions($request, $runtime)
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
            'action'      => 'GetAutoScalingConfiguration',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutoScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *  *
     * @description ###### [](#-serverless-)**This operation is available only for serverless ApsaraMQ for Kafka instances.
     *  *
     * @param GetAutoScalingConfigurationRequest $request GetAutoScalingConfigurationRequest
     *
     * @return GetAutoScalingConfigurationResponse GetAutoScalingConfigurationResponse
     */
    public function getAutoScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more consumer groups in a specified Message Queue for Apache Kafka instance.
     *  *
     * @param GetConsumerListRequest $request GetConsumerListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConsumerListResponse GetConsumerListResponse
     */
    public function getConsumerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
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
     * @summary Queries one or more consumer groups in a specified Message Queue for Apache Kafka instance.
     *  *
     * @param GetConsumerListRequest $request GetConsumerListRequest
     *
     * @return GetConsumerListResponse GetConsumerListResponse
     */
    public function getConsumerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsumerListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the consumer progress of a consumer group.
     *  *
     * @param GetConsumerProgressRequest $request GetConsumerProgressRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConsumerProgressResponse GetConsumerProgressResponse
     */
    public function getConsumerProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->hideLastTimestamp)) {
            $query['HideLastTimestamp'] = $request->hideLastTimestamp;
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
     * @summary Queries the consumer progress of a consumer group.
     *  *
     * @param GetConsumerProgressRequest $request GetConsumerProgressRequest
     *
     * @return GetConsumerProgressResponse GetConsumerProgressResponse
     */
    public function getConsumerProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsumerProgressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about instances in a specified region.
     *  *
     * @param GetInstanceListRequest $request GetInstanceListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceListResponse GetInstanceListResponse
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
        if (!Utils::isUnset($request->series)) {
            $query['Series'] = $request->series;
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
     * @summary Queries the information about instances in a specified region.
     *  *
     * @param GetInstanceListRequest $request GetInstanceListRequest
     *
     * @return GetInstanceListResponse GetInstanceListResponse
     */
    public function getInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP addresses of the clients that are connected to an ApsaraMQ for Kafka instance.
     *  *
     * @description *   The IP information is obtained from the sampled logs generated for the requests that the client sends to the broker by calling the API operations of ApsaraMQ for Kafka.
     * *   Statistics refers to the number of connections on different ports of an IP address within a specific period of time.
     * *   If the broker is not of the latest minor version, the sampled logs may not be accurate. This may cause inaccurate IP information. Therefore, we recommend that you update your broker to the latest version at the earliest opportunity.
     *  *
     * @param GetKafkaClientIpRequest $request GetKafkaClientIpRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKafkaClientIpResponse GetKafkaClientIpResponse
     */
    public function getKafkaClientIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKafkaClientIp',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKafkaClientIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IP addresses of the clients that are connected to an ApsaraMQ for Kafka instance.
     *  *
     * @description *   The IP information is obtained from the sampled logs generated for the requests that the client sends to the broker by calling the API operations of ApsaraMQ for Kafka.
     * *   Statistics refers to the number of connections on different ports of an IP address within a specific period of time.
     * *   If the broker is not of the latest minor version, the sampled logs may not be accurate. This may cause inaccurate IP information. Therefore, we recommend that you update your broker to the latest version at the earliest opportunity.
     *  *
     * @param GetKafkaClientIpRequest $request GetKafkaClientIpRequest
     *
     * @return GetKafkaClientIpResponse GetKafkaClientIpResponse
     */
    public function getKafkaClientIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKafkaClientIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the used quota of topics and partitions.
     *  *
     * @param GetQuotaTipRequest $request GetQuotaTipRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQuotaTipResponse GetQuotaTipResponse
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
     * @summary Queries the used quota of topics and partitions.
     *  *
     * @param GetQuotaTipRequest $request GetQuotaTipRequest
     *
     * @return GetQuotaTipResponse GetQuotaTipResponse
     */
    public function getQuotaTip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaTipWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a topic.
     *  *
     * @param GetTopicListRequest $request GetTopicListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTopicListResponse GetTopicListResponse
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
     * @summary Queries the information about a topic.
     *  *
     * @param GetTopicListRequest $request GetTopicListRequest
     *
     * @return GetTopicListResponse GetTopicListResponse
     */
    public function getTopicList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the messaging status of a topic.
     *  *
     * @param GetTopicStatusRequest $request GetTopicStatusRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTopicStatusResponse GetTopicStatusResponse
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
     * @summary Queries the messaging status of a topic.
     *  *
     * @param GetTopicStatusRequest $request GetTopicStatusRequest
     *
     * @return GetTopicStatusResponse GetTopicStatusResponse
     */
    public function getTopicStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the groups that subscribe to a topic.
     *  *
     * @param GetTopicSubscribeStatusRequest $request GetTopicSubscribeStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTopicSubscribeStatusResponse GetTopicSubscribeStatusResponse
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
     * @summary Queries the information about the groups that subscribe to a topic.
     *  *
     * @param GetTopicSubscribeStatusRequest $request GetTopicSubscribeStatusRequest
     *
     * @return GetTopicSubscribeStatusResponse GetTopicSubscribeStatusResponse
     */
    public function getTopicSubscribeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicSubscribeStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags that are attached to a specified resource.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
     * @summary Queries the tags that are attached to a specified resource.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the name of an ApsaraMQ for Kafka instance. After you deploy an instance, you can call this operation to change the name of the instance.
     *  *
     * @param ModifyInstanceNameRequest $request ModifyInstanceNameRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceNameResponse ModifyInstanceNameResponse
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
     * @summary Changes the name of an ApsaraMQ for Kafka instance. After you deploy an instance, you can call this operation to change the name of the instance.
     *  *
     * @param ModifyInstanceNameRequest $request ModifyInstanceNameRequest
     *
     * @return ModifyInstanceNameResponse ModifyInstanceNameResponse
     */
    public function modifyInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNameWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the number of partitions in a topic.
     *  *
     * @param ModifyPartitionNumRequest $request ModifyPartitionNumRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPartitionNumResponse ModifyPartitionNumResponse
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
     * @summary Changes the number of partitions in a topic.
     *  *
     * @param ModifyPartitionNumRequest $request ModifyPartitionNumRequest
     *
     * @return ModifyPartitionNumResponse ModifyPartitionNumResponse
     */
    public function modifyPartitionNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPartitionNumWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *  *
     * @description ###### [](#-serverless-)This operation is available only for serverless ApsaraMQ for Kafka instances.
     *  *
     * @param ModifyScheduledScalingRuleRequest $request ModifyScheduledScalingRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyScheduledScalingRuleResponse ModifyScheduledScalingRuleResponse
     */
    public function modifyScheduledScalingRuleWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScheduledScalingRule',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScheduledScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the scheduled scaling policy of a serverless ApsaraMQ for Kafka instance after you deploy the instance.
     *  *
     * @description ###### [](#-serverless-)This operation is available only for serverless ApsaraMQ for Kafka instances.
     *  *
     * @param ModifyScheduledScalingRuleRequest $request ModifyScheduledScalingRuleRequest
     *
     * @return ModifyScheduledScalingRuleResponse ModifyScheduledScalingRuleResponse
     */
    public function modifyScheduledScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScheduledScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a topic.
     *  *
     * @param ModifyTopicRemarkRequest $request ModifyTopicRemarkRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTopicRemarkResponse ModifyTopicRemarkResponse
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
     * @summary Modifies the description of a topic.
     *  *
     * @param ModifyTopicRemarkRequest $request ModifyTopicRemarkRequest
     *
     * @return ModifyTopicRemarkResponse ModifyTopicRemarkResponse
     */
    public function modifyTopicRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTopicRemarkWithOptions($request, $runtime);
    }

    /**
     * @summary Queries messages stored in a topic. You can query messages by creation time or offset.
     *  *
     * @param QueryMessageRequest $request QueryMessageRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMessageResponse QueryMessageResponse
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
     * @summary Queries messages stored in a topic. You can query messages by creation time or offset.
     *  *
     * @param QueryMessageRequest $request QueryMessageRequest
     *
     * @return QueryMessageResponse QueryMessageResponse
     */
    public function queryMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a pay-as-you-go instance.
     *  *
     * @description You cannot call this operation to release a subscription Message Queue for Apache Kafka instance.
     *  *
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
     * @summary Releases a pay-as-you-go instance.
     *  *
     * @description You cannot call this operation to release a subscription Message Queue for Apache Kafka instance.
     *  *
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
     * @summary Enables an ApsaraMQ for Kafka instance.
     *  *
     * @description You can call this operation only if your instance is in the Stopped state.
     *  *
     * @param ReopenInstanceRequest $request ReopenInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ReopenInstanceResponse ReopenInstanceResponse
     */
    public function reopenInstanceWithOptions($request, $runtime)
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
            'action'      => 'ReopenInstance',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReopenInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables an ApsaraMQ for Kafka instance.
     *  *
     * @description You can call this operation only if your instance is in the Stopped state.
     *  *
     * @param ReopenInstanceRequest $request ReopenInstanceRequest
     *
     * @return ReopenInstanceResponse ReopenInstanceResponse
     */
    public function reopenInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reopenInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deploys an ApsaraMQ for Kafka instance. You must purchase and deploy an ApsaraMQ for Kafka instance before you can use the instance to send and receive messages.
     *  *
     * @description >  You can call this operation up to twice per second.
     *  *
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
     * @summary Deploys an ApsaraMQ for Kafka instance. You must purchase and deploy an ApsaraMQ for Kafka instance before you can use the instance to send and receive messages.
     *  *
     * @description >  You can call this operation up to twice per second.
     *  *
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
     * @summary Stops an ApsaraMQ for Kafka instance.
     *  *
     * @description You cannot stop a subscription ApsaraMQ for Kafka instance. If you want to stop a subscription ApsaraMQ for Kafka instance, submit a ticket.
     *  *
     * @param StopInstanceRequest $request StopInstanceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
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
            'action'      => 'StopInstance',
            'version'     => '2019-09-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops an ApsaraMQ for Kafka instance.
     *  *
     * @description You cannot stop a subscription ApsaraMQ for Kafka instance. If you want to stop a subscription ApsaraMQ for Kafka instance, submit a ticket.
     *  *
     * @param StopInstanceRequest $request StopInstanceRequest
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches a tag to a resource.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
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
     * @summary Attaches a tag to a resource.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Detaches tags from a specified resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
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
     * @summary Detaches tags from a specified resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the IP address whitelist of an ApsaraMQ for Kafka instance. Only IP addresses and ports that are configured in the IP address whitelist of an instance can access the instance.
     *  *
     * @param UpdateAllowedIpRequest $request UpdateAllowedIpRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAllowedIpResponse UpdateAllowedIpResponse
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
     * @summary Updates the IP address whitelist of an ApsaraMQ for Kafka instance. Only IP addresses and ports that are configured in the IP address whitelist of an instance can access the instance.
     *  *
     * @param UpdateAllowedIpRequest $request UpdateAllowedIpRequest
     *
     * @return UpdateAllowedIpResponse UpdateAllowedIpResponse
     */
    public function updateAllowedIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAllowedIpWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the consumer offsets of the subscribed topics of a consumer group.
     *  *
     * @description You can call this operation to reset the consumer offset of a specific consumer group. You can use the timestamp or offset parameter to reset the consumer offset of a consumer group. You can implement the following features by configuring a combination of different parameters:
     * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to the latest offset. This way, you can consume messages in the topics from the latest offset.
     * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to a specific point in time. This way, you can consume messages in the topics from the specified point in time.
     * *   Reset the consumer offset of one subscribed topic of a consumer group to a specific offset in a specific partition. This way, you can consume messages from the specified offset in the specified partition.
     *  *
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
     * @summary Resets the consumer offsets of the subscribed topics of a consumer group.
     *  *
     * @description You can call this operation to reset the consumer offset of a specific consumer group. You can use the timestamp or offset parameter to reset the consumer offset of a consumer group. You can implement the following features by configuring a combination of different parameters:
     * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to the latest offset. This way, you can consume messages in the topics from the latest offset.
     * *   Reset the consumer offsets of one or all subscribed topics of a consumer group to a specific point in time. This way, you can consume messages in the topics from the specified point in time.
     * *   Reset the consumer offset of one subscribed topic of a consumer group to a specific offset in a specific partition. This way, you can consume messages from the specified offset in the specified partition.
     *  *
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
     * @summary Modifies the configurations of an ApsaraMQ for Kafka instance. ApsaraMQ for Kafka allows you to modify the configurations of an instance, including the access control list (ACL) feature, the Secure Sockets Layer (SSL) feature, the message retention period, and the maximum message size.
     *  *
     * @description ## **Permissions**
     * If a RAM user wants to call the **UpdateInstanceConfig** operation, the RAM user must be granted the required permissions. For more information about how to grant permissions, see [RAM policies](https://help.aliyun.com/document_detail/185815.html).
     * |API|Action|Resource|
     * |---|---|---|
     * |UpdateInstanceConfig|alikafka: UpdateInstance|acs:alikafka:*:*:{instanceId}|
     *  *
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
     * @summary Modifies the configurations of an ApsaraMQ for Kafka instance. ApsaraMQ for Kafka allows you to modify the configurations of an instance, including the access control list (ACL) feature, the Secure Sockets Layer (SSL) feature, the message retention period, and the maximum message size.
     *  *
     * @description ## **Permissions**
     * If a RAM user wants to call the **UpdateInstanceConfig** operation, the RAM user must be granted the required permissions. For more information about how to grant permissions, see [RAM policies](https://help.aliyun.com/document_detail/185815.html).
     * |API|Action|Resource|
     * |---|---|---|
     * |UpdateInstanceConfig|alikafka: UpdateInstance|acs:alikafka:*:*:{instanceId}|
     *  *
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
     * @summary Modifies the configurations of a topic. After you create a topic, you can modify the message retention period and maximum message size of the topic.
     *  *
     * @param UpdateTopicConfigRequest $request UpdateTopicConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTopicConfigResponse UpdateTopicConfigResponse
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
     * @summary Modifies the configurations of a topic. After you create a topic, you can modify the message retention period and maximum message size of the topic.
     *  *
     * @param UpdateTopicConfigRequest $request UpdateTopicConfigRequest
     *
     * @return UpdateTopicConfigResponse UpdateTopicConfigResponse
     */
    public function updateTopicConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTopicConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the version of an instance.
     *  *
     * @description ## **Permissions**
     * A RAM user must be granted the required permissions before the RAM user calls the **UpgradeInstanceVersion** operation. For information about how to grant permissions, see [RAM policies](https://help.aliyun.com/document_detail/185815.html).
     * |API|Action|Resource|
     * |---|---|---|
     * |UpgradeInstanceVersion|UpdateInstance|acs:alikafka:*:*:{instanceId}|
     * ## **QPS limits**
     * You can send a maximum of two queries per second (QPS).
     *  *
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
     * @summary Updates the version of an instance.
     *  *
     * @description ## **Permissions**
     * A RAM user must be granted the required permissions before the RAM user calls the **UpgradeInstanceVersion** operation. For information about how to grant permissions, see [RAM policies](https://help.aliyun.com/document_detail/185815.html).
     * |API|Action|Resource|
     * |---|---|---|
     * |UpgradeInstanceVersion|UpdateInstance|acs:alikafka:*:*:{instanceId}|
     * ## **QPS limits**
     * You can send a maximum of two queries per second (QPS).
     *  *
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
     * @summary Upgrades a pay-as-you-go ApsaraMQ for Kafka instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *  *
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
     * @summary Upgrades a pay-as-you-go ApsaraMQ for Kafka instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of pay-as-you-go Message Queue for Apache Kafka instances. For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *  *
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
     * @summary Upgrades a Message Queue for Apache Kafka instance that uses the subscription billing method.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of subscription Message Queue for Apache Kafka instances. For more information, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *  *
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
     * @summary Upgrades a Message Queue for Apache Kafka instance that uses the subscription billing method.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of subscription Message Queue for Apache Kafka instances. For more information, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *  *
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
