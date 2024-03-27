<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckAccessLogAuthRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckAccessLogAuthResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckGrantRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckGrantResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ConfigSchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ConfigSchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreateSchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreateSchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteBlackholeRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteBlackholeResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteSchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteSchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeAssetGroupRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeAssetGroupResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeAssetGroupToInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeAssetGroupToInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosEventRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosEventResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeExcpetionCountRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeExcpetionCountResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandDdosEventRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandDdosEventResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandInstanceStatusRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandInstanceStatusResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOpEntitiesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOpEntitiesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DettachAssetGroupToInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DettachAssetGroupToInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DettachAssetGroupToInstanceShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\GetSlsOpenStatusRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\GetSlsOpenStatusResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyRemarkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyRemarkResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ReleaseDdosOriginInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ReleaseDdosOriginInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\SetInstanceModeOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\SetInstanceModeOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ddosbgp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'ddosbgp.aliyuncs.com',
            'cn-beijing'            => 'ddosbgp.aliyuncs.com',
            'cn-zhangjiakou'        => 'ddosbgp.aliyuncs.com',
            'cn-huhehaote'          => 'ddosbgp.aliyuncs.com',
            'cn-hangzhou'           => 'ddosbgp.aliyuncs.com',
            'cn-shanghai'           => 'ddosbgp.aliyuncs.com',
            'cn-shenzhen'           => 'ddosbgp.aliyuncs.com',
            'ap-northeast-1'        => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'cn-chengdu'            => 'ddosbgp.aliyuncs.com',
            'eu-central-1'          => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'ddosbgp.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'ddosbgp.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ddosbgp.aliyuncs.com',
            'cn-north-2-gov-1'      => 'ddosbgp.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddosbgp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddIpRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return AddIpResponse
     */
    public function addIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipList)) {
            $query['IpList'] = $request->ipList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIp',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddIpRequest $request
     *
     * @return AddIpResponse
     */
    public function addIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpWithOptions($request, $runtime);
    }

    /**
     * @param AttachAssetGroupToInstanceRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return AttachAssetGroupToInstanceResponse
     */
    public function attachAssetGroupToInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AttachAssetGroupToInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->assetGroupList)) {
            $request->assetGroupListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->assetGroupList, 'AssetGroupList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->assetGroupListShrink)) {
            $query['AssetGroupList'] = $request->assetGroupListShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachAssetGroupToInstance',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachAssetGroupToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachAssetGroupToInstanceRequest $request
     *
     * @return AttachAssetGroupToInstanceResponse
     */
    public function attachAssetGroupToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAssetGroupToInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CheckAccessLogAuthRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckAccessLogAuthResponse
     */
    public function checkAccessLogAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckAccessLogAuth',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAccessLogAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckAccessLogAuthRequest $request
     *
     * @return CheckAccessLogAuthResponse
     */
    public function checkAccessLogAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccessLogAuthWithOptions($request, $runtime);
    }

    /**
     * You can call the CheckGrant operation to query whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CheckGrantRequest $request CheckGrantRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckGrantResponse CheckGrantResponse
     */
    public function checkGrantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckGrant',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckGrantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the CheckGrant operation to query whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CheckGrantRequest $request CheckGrantRequest
     *
     * @return CheckGrantResponse CheckGrantResponse
     */
    public function checkGrant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkGrantWithOptions($request, $runtime);
    }

    /**
     * @param ConfigSchedruleOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigSchedruleOnDemandResponse
     */
    public function configSchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleAction)) {
            $query['RuleAction'] = $request->ruleAction;
        }
        if (!Utils::isUnset($request->ruleConditionCnt)) {
            $query['RuleConditionCnt'] = $request->ruleConditionCnt;
        }
        if (!Utils::isUnset($request->ruleConditionKpps)) {
            $query['RuleConditionKpps'] = $request->ruleConditionKpps;
        }
        if (!Utils::isUnset($request->ruleConditionMbps)) {
            $query['RuleConditionMbps'] = $request->ruleConditionMbps;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleSwitch)) {
            $query['RuleSwitch'] = $request->ruleSwitch;
        }
        if (!Utils::isUnset($request->ruleUndoBeginTime)) {
            $query['RuleUndoBeginTime'] = $request->ruleUndoBeginTime;
        }
        if (!Utils::isUnset($request->ruleUndoEndTime)) {
            $query['RuleUndoEndTime'] = $request->ruleUndoEndTime;
        }
        if (!Utils::isUnset($request->ruleUndoMode)) {
            $query['RuleUndoMode'] = $request->ruleUndoMode;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $query['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigSchedruleOnDemand',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigSchedruleOnDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigSchedruleOnDemandRequest $request
     *
     * @return ConfigSchedruleOnDemandResponse
     */
    public function configSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @param CreateSchedruleOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateSchedruleOnDemandResponse
     */
    public function createSchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleAction)) {
            $query['RuleAction'] = $request->ruleAction;
        }
        if (!Utils::isUnset($request->ruleConditionCnt)) {
            $query['RuleConditionCnt'] = $request->ruleConditionCnt;
        }
        if (!Utils::isUnset($request->ruleConditionKpps)) {
            $query['RuleConditionKpps'] = $request->ruleConditionKpps;
        }
        if (!Utils::isUnset($request->ruleConditionMbps)) {
            $query['RuleConditionMbps'] = $request->ruleConditionMbps;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleSwitch)) {
            $query['RuleSwitch'] = $request->ruleSwitch;
        }
        if (!Utils::isUnset($request->ruleUndoBeginTime)) {
            $query['RuleUndoBeginTime'] = $request->ruleUndoBeginTime;
        }
        if (!Utils::isUnset($request->ruleUndoEndTime)) {
            $query['RuleUndoEndTime'] = $request->ruleUndoEndTime;
        }
        if (!Utils::isUnset($request->ruleUndoMode)) {
            $query['RuleUndoMode'] = $request->ruleUndoMode;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $query['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSchedruleOnDemand',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSchedruleOnDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSchedruleOnDemandRequest $request
     *
     * @return CreateSchedruleOnDemandResponse
     */
    public function createSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * You can call the DeleteBlackhole operation to deactivate blackhole filtering for a protected IP address.
     *   * Before you call this operation, you can call the [DescribePackIpList](~~118701~~) operation to query the protection status of the IP addresses that are protected by your Anti-DDoS Origin instance. For example, you can query whether blackhole filtering is triggered for an IP address.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteBlackholeRequest $request DeleteBlackholeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBlackholeResponse DeleteBlackholeResponse
     */
    public function deleteBlackholeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBlackhole',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBlackholeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DeleteBlackhole operation to deactivate blackhole filtering for a protected IP address.
     *   * Before you call this operation, you can call the [DescribePackIpList](~~118701~~) operation to query the protection status of the IP addresses that are protected by your Anti-DDoS Origin instance. For example, you can query whether blackhole filtering is triggered for an IP address.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteBlackholeRequest $request DeleteBlackholeRequest
     *
     * @return DeleteBlackholeResponse DeleteBlackholeResponse
     */
    public function deleteBlackhole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBlackholeWithOptions($request, $runtime);
    }

    /**
     * The Anti-DDoS Origin Enterprise instance no longer protects the IP addresses that are removed.
     *   *
     * @param DeleteIpRequest $request DeleteIpRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpResponse DeleteIpResponse
     */
    public function deleteIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipList)) {
            $query['IpList'] = $request->ipList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIp',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The Anti-DDoS Origin Enterprise instance no longer protects the IP addresses that are removed.
     *   *
     * @param DeleteIpRequest $request DeleteIpRequest
     *
     * @return DeleteIpResponse DeleteIpResponse
     */
    public function deleteIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSchedruleOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSchedruleOnDemandResponse
     */
    public function deleteSchedruleOnDemandWithOptions($request, $runtime)
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
            'action'      => 'DeleteSchedruleOnDemand',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSchedruleOnDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSchedruleOnDemandRequest $request
     *
     * @return DeleteSchedruleOnDemandResponse
     */
    public function deleteSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssetGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAssetGroupResponse
     */
    public function describeAssetGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAssetGroup',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAssetGroupRequest $request
     *
     * @return DescribeAssetGroupResponse
     */
    public function describeAssetGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssetGroupToInstanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAssetGroupToInstanceResponse
     */
    public function describeAssetGroupToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAssetGroupToInstance',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetGroupToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAssetGroupToInstanceRequest $request
     *
     * @return DescribeAssetGroupToInstanceResponse
     */
    public function describeAssetGroupToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetGroupToInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeDdosEvent operation to query the details about the DDoS attack events that occurred on a specific Anti-DDoS Origin instance by page. The details include the start time, end time, attacked IP address, and status of each event.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDdosEventRequest $request DescribeDdosEventRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDdosEventResponse DescribeDdosEventResponse
     */
    public function describeDdosEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosEvent',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeDdosEvent operation to query the details about the DDoS attack events that occurred on a specific Anti-DDoS Origin instance by page. The details include the start time, end time, attacked IP address, and status of each event.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDdosEventRequest $request DescribeDdosEventRequest
     *
     * @return DescribeDdosEventResponse DescribeDdosEventResponse
     */
    public function describeDdosEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosEventWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosOriginInstanceBillRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDdosOriginInstanceBillResponse
     */
    public function describeDdosOriginInstanceBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isShowList)) {
            $query['IsShowList'] = $request->isShowList;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosOriginInstanceBill',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosOriginInstanceBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDdosOriginInstanceBillRequest $request
     *
     * @return DescribeDdosOriginInstanceBillResponse
     */
    public function describeDdosOriginInstanceBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosOriginInstanceBillWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * You can call the DescribeExcpetionCount operation to query the number of assets that are in an abnormal state and the number of Anti-DDoS Origin instances that are about to expire in a specific region. For example, if blackhole filtering is triggered for an IP address, the IP address is in an abnormal state. An instance whose remaining validity period is less than seven days is considered as an instance that is about to expire.
     *   *
     * @param DescribeExcpetionCountRequest $request DescribeExcpetionCountRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExcpetionCountResponse DescribeExcpetionCountResponse
     */
    public function describeExcpetionCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExcpetionCount',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExcpetionCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * You can call the DescribeExcpetionCount operation to query the number of assets that are in an abnormal state and the number of Anti-DDoS Origin instances that are about to expire in a specific region. For example, if blackhole filtering is triggered for an IP address, the IP address is in an abnormal state. An instance whose remaining validity period is less than seven days is considered as an instance that is about to expire.
     *   *
     * @param DescribeExcpetionCountRequest $request DescribeExcpetionCountRequest
     *
     * @return DescribeExcpetionCountResponse DescribeExcpetionCountResponse
     */
    public function describeExcpetionCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcpetionCountWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeInstanceList operation to query the details of all Anti-DDoS Origin instances within your Alibaba Cloud account by page. The details include the ID, validity period, and status of each instance.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeInstanceListRequest $request DescribeInstanceListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceListResponse DescribeInstanceListResponse
     */
    public function describeInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->instanceTypeList)) {
            $query['InstanceTypeList'] = $request->instanceTypeList;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->orderby)) {
            $query['Orderby'] = $request->orderby;
        }
        if (!Utils::isUnset($request->orderdire)) {
            $query['Orderdire'] = $request->orderdire;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
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
            'action'      => 'DescribeInstanceList',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeInstanceList operation to query the details of all Anti-DDoS Origin instances within your Alibaba Cloud account by page. The details include the ID, validity period, and status of each instance.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeInstanceListRequest $request DescribeInstanceListRequest
     *
     * @return DescribeInstanceListResponse DescribeInstanceListResponse
     */
    public function describeInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSpecsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSpecs',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSpecsRequest $request
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecsWithOptions($request, $runtime);
    }

    /**
     * >  Anti-DDoS Origin API operations are available for only Anti-DDoS Origin Enterprise users.
     *   *
     * @param DescribeOnDemandDdosEventRequest $request DescribeOnDemandDdosEventRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOnDemandDdosEventResponse DescribeOnDemandDdosEventResponse
     */
    public function describeOnDemandDdosEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOnDemandDdosEvent',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOnDemandDdosEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  Anti-DDoS Origin API operations are available for only Anti-DDoS Origin Enterprise users.
     *   *
     * @param DescribeOnDemandDdosEventRequest $request DescribeOnDemandDdosEventRequest
     *
     * @return DescribeOnDemandDdosEventResponse DescribeOnDemandDdosEventResponse
     */
    public function describeOnDemandDdosEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnDemandDdosEventWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOnDemandInstanceStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeOnDemandInstanceStatusResponse
     */
    public function describeOnDemandInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOnDemandInstanceStatus',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOnDemandInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOnDemandInstanceStatusRequest $request
     *
     * @return DescribeOnDemandInstanceStatusResponse
     */
    public function describeOnDemandInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnDemandInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * The start time. Operation logs that were generated after this time are queried.**** This value is a UNIX timestamp. Unit: milliseconds.
     *   *
     * @param DescribeOpEntitiesRequest $request DescribeOpEntitiesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOpEntitiesResponse DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderDir)) {
            $query['OrderDir'] = $request->orderDir;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOpEntities',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOpEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The start time. Operation logs that were generated after this time are queried.**** This value is a UNIX timestamp. Unit: milliseconds.
     *   *
     * @param DescribeOpEntitiesRequest $request DescribeOpEntitiesRequest
     *
     * @return DescribeOpEntitiesResponse DescribeOpEntitiesResponse
     */
    public function describeOpEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpEntitiesWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribePackIpList operation to query the details about each IP address that is protected by a specific Anti-DDoS Origin instance by page. The details include the IP address and the type of the cloud asset to which the IP address belongs. The details also include the status of the IP address, such as whether blackhole filtering is triggered for the IP address.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribePackIpListRequest $request DescribePackIpListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePackIpListResponse DescribePackIpListResponse
     */
    public function describePackIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productName)) {
            $query['ProductName'] = $request->productName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePackIpList',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePackIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribePackIpList operation to query the details about each IP address that is protected by a specific Anti-DDoS Origin instance by page. The details include the IP address and the type of the cloud asset to which the IP address belongs. The details also include the status of the IP address, such as whether blackhole filtering is triggered for the IP address.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribePackIpListRequest $request DescribePackIpListRequest
     *
     * @return DescribePackIpListResponse DescribePackIpListResponse
     */
    public function describePackIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackIpListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeTraffic operation to query traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     *   * >  When you call this operation, you must configure the **InstanceId** parameter to specify the Anti-DDoS Origin instance whose traffic statistics you want to query.
     *   * ## Limits
     *   * You can call this operation once per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeTrafficRequest $request DescribeTrafficRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrafficResponse DescribeTrafficResponse
     */
    public function describeTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->flowType)) {
            $query['FlowType'] = $request->flowType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->ipnet)) {
            $query['Ipnet'] = $request->ipnet;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTraffic',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeTraffic operation to query traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     *   * >  When you call this operation, you must configure the **InstanceId** parameter to specify the Anti-DDoS Origin instance whose traffic statistics you want to query.
     *   * ## Limits
     *   * You can call this operation once per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeTrafficRequest $request DescribeTrafficRequest
     *
     * @return DescribeTrafficResponse DescribeTrafficResponse
     */
    public function describeTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficWithOptions($request, $runtime);
    }

    /**
     * @param DettachAssetGroupToInstanceRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return DettachAssetGroupToInstanceResponse
     */
    public function dettachAssetGroupToInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DettachAssetGroupToInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->assetGroupList)) {
            $request->assetGroupListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->assetGroupList, 'AssetGroupList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->assetGroupListShrink)) {
            $query['AssetGroupList'] = $request->assetGroupListShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DettachAssetGroupToInstance',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DettachAssetGroupToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DettachAssetGroupToInstanceRequest $request
     *
     * @return DettachAssetGroupToInstanceResponse
     */
    public function dettachAssetGroupToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dettachAssetGroupToInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetSlsOpenStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSlsOpenStatusResponse
     */
    public function getSlsOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSlsOpenStatus',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSlsOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSlsOpenStatusRequest $request
     *
     * @return GetSlsOpenStatusResponse
     */
    public function getSlsOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSlsOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListOpenedAccessLogInstancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListOpenedAccessLogInstancesResponse
     */
    public function listOpenedAccessLogInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOpenedAccessLogInstances',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOpenedAccessLogInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOpenedAccessLogInstancesRequest $request
     *
     * @return ListOpenedAccessLogInstancesResponse
     */
    public function listOpenedAccessLogInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenedAccessLogInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * You can call the ListTagResources operation to query the tags that are added to Anti-DDoS Origin instances at a time.
     *   *
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version'     => '2018-07-20',
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
     * You can call the ListTagResources operation to query the tags that are added to Anti-DDoS Origin instances at a time.
     *   *
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
     * You can call the ModifyRemark operation to add remarks for a single Anti-DDoS Origin instance.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyRemarkRequest $request ModifyRemarkRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRemarkResponse ModifyRemarkResponse
     */
    public function modifyRemarkWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRemark',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyRemark operation to add remarks for a single Anti-DDoS Origin instance.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyRemarkRequest $request ModifyRemarkRequest
     *
     * @return ModifyRemarkResponse ModifyRemarkResponse
     */
    public function modifyRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRemarkWithOptions($request, $runtime);
    }

    /**
     * @param QuerySchedruleOnDemandRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySchedruleOnDemandResponse
     */
    public function querySchedruleOnDemandWithOptions($request, $runtime)
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
            'action'      => 'QuerySchedruleOnDemand',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySchedruleOnDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySchedruleOnDemandRequest $request
     *
     * @return QuerySchedruleOnDemandResponse
     */
    public function querySchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseDdosOriginInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ReleaseDdosOriginInstanceResponse
     */
    public function releaseDdosOriginInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseDdosOriginInstance',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseDdosOriginInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseDdosOriginInstanceRequest $request
     *
     * @return ReleaseDdosOriginInstanceResponse
     */
    public function releaseDdosOriginInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseDdosOriginInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SetInstanceModeOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetInstanceModeOnDemandResponse
     */
    public function setInstanceModeOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetInstanceModeOnDemand',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetInstanceModeOnDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetInstanceModeOnDemandRequest $request
     *
     * @return SetInstanceModeOnDemandResponse
     */
    public function setInstanceModeOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceModeOnDemandWithOptions($request, $runtime);
    }

    /**
     * You can call the TagResources operation to add tags to Anti-DDoS Origin instances.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version'     => '2018-07-20',
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
     * You can call the TagResources operation to add tags to Anti-DDoS Origin instances.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version'     => '2018-07-20',
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
}
