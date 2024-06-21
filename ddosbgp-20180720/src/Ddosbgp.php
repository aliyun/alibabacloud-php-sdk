<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddRdMemberListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddRdMemberListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddRdMemberListShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckAccessLogAuthRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckAccessLogAuthResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckGrantRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckGrantResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ConfigSchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ConfigSchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreateSchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreateSchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteBlackholeRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteBlackholeResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteRdMemberListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteRdMemberListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteRdMemberListShrinkRequest;
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
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRdMemberListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRdMemberListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRdStatusResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DetachFromPolicyRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DetachFromPolicyResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DetachFromPolicyShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DettachAssetGroupToInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DettachAssetGroupToInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DettachAssetGroupToInstanceShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\GetSlsOpenStatusRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\GetSlsOpenStatusResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyContentRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyContentResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyContentShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyShrinkRequest;
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
     * @summary Adds IP addresses to an Anti-DDoS Origin Enterprise instance.
     *  *
     * @param AddIpRequest   $request AddIpRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AddIpResponse AddIpResponse
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
     * @summary Adds IP addresses to an Anti-DDoS Origin Enterprise instance.
     *  *
     * @param AddIpRequest $request AddIpRequest
     *
     * @return AddIpResponse AddIpResponse
     */
    public function addIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpWithOptions($request, $runtime);
    }

    /**
     * @summary 添加资源目录成员账号列表
     *  *
     * @param AddRdMemberListRequest $tmpReq  AddRdMemberListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddRdMemberListResponse AddRdMemberListResponse
     */
    public function addRdMemberListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddRdMemberListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->memberList)) {
            $request->memberListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->memberList, 'MemberList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->memberListShrink)) {
            $query['MemberList'] = $request->memberListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRdMemberList',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRdMemberListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加资源目录成员账号列表
     *  *
     * @param AddRdMemberListRequest $request AddRdMemberListRequest
     *
     * @return AddRdMemberListResponse AddRdMemberListResponse
     */
    public function addRdMemberList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRdMemberListWithOptions($request, $runtime);
    }

    /**
     * @summary Associates an asset with an Anti-DDoS Origin instance of a paid edition.
     *  *
     * @param AttachAssetGroupToInstanceRequest $tmpReq  AttachAssetGroupToInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachAssetGroupToInstanceResponse AttachAssetGroupToInstanceResponse
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
     * @summary Associates an asset with an Anti-DDoS Origin instance of a paid edition.
     *  *
     * @param AttachAssetGroupToInstanceRequest $request AttachAssetGroupToInstanceRequest
     *
     * @return AttachAssetGroupToInstanceResponse AttachAssetGroupToInstanceResponse
     */
    public function attachAssetGroupToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAssetGroupToInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether Anti-DDoS Origin is authorized to access Log Service.
     *  *
     * @param CheckAccessLogAuthRequest $request CheckAccessLogAuthRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckAccessLogAuthResponse CheckAccessLogAuthResponse
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
     * @summary Checks whether Anti-DDoS Origin is authorized to access Log Service.
     *  *
     * @param CheckAccessLogAuthRequest $request CheckAccessLogAuthRequest
     *
     * @return CheckAccessLogAuthResponse CheckAccessLogAuthResponse
     */
    public function checkAccessLogAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccessLogAuthWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     *  *
     * @description You can call the CheckGrant operation to query whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     *  *
     * @description You can call the CheckGrant operation to query whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @param ConfigSchedruleOnDemandRequest $request ConfigSchedruleOnDemandRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigSchedruleOnDemandResponse ConfigSchedruleOnDemandResponse
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
     * @param ConfigSchedruleOnDemandRequest $request ConfigSchedruleOnDemandRequest
     *
     * @return ConfigSchedruleOnDemandResponse ConfigSchedruleOnDemandResponse
     */
    public function configSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @summary 创建策略
     *  *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicy',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建策略
     *  *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a scheduling rule for an on-demand instance.
     *  *
     * @param CreateSchedruleOnDemandRequest $request CreateSchedruleOnDemandRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSchedruleOnDemandResponse CreateSchedruleOnDemandResponse
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
     * @summary Creates a scheduling rule for an on-demand instance.
     *  *
     * @param CreateSchedruleOnDemandRequest $request CreateSchedruleOnDemandRequest
     *
     * @return CreateSchedruleOnDemandResponse CreateSchedruleOnDemandResponse
     */
    public function createSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @summary Deactivates blackhole filtering for a protected IP address.
     *  *
     * @description You can call the DeleteBlackhole operation to deactivate blackhole filtering for a protected IP address.
     * Before you call this operation, you can call the [DescribePackIpList](https://help.aliyun.com/document_detail/118701.html) operation to query the protection status of the IP addresses that are protected by your Anti-DDoS Origin instance. For example, you can query whether blackhole filtering is triggered for an IP address.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Deactivates blackhole filtering for a protected IP address.
     *  *
     * @description You can call the DeleteBlackhole operation to deactivate blackhole filtering for a protected IP address.
     * Before you call this operation, you can call the [DescribePackIpList](https://help.aliyun.com/document_detail/118701.html) operation to query the protection status of the IP addresses that are protected by your Anti-DDoS Origin instance. For example, you can query whether blackhole filtering is triggered for an IP address.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Removes specific IP addresses from an Anti-DDoS Origin Enterprise instance.
     *  *
     * @description The Anti-DDoS Origin Enterprise instance no longer protects the IP addresses that are removed.
     *  *
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
     * @summary Removes specific IP addresses from an Anti-DDoS Origin Enterprise instance.
     *  *
     * @description The Anti-DDoS Origin Enterprise instance no longer protects the IP addresses that are removed.
     *  *
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
     * @summary 删除策略
     *  *
     * @param DeletePolicyRequest $request DeletePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicy',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除策略
     *  *
     * @param DeletePolicyRequest $request DeletePolicyRequest
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 删除资源目录成员账号列表
     *  *
     * @param DeleteRdMemberListRequest $tmpReq  DeleteRdMemberListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRdMemberListResponse DeleteRdMemberListResponse
     */
    public function deleteRdMemberListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteRdMemberListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->memberList)) {
            $request->memberListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->memberList, 'MemberList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->memberListShrink)) {
            $query['MemberList'] = $request->memberListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRdMemberList',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRdMemberListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除资源目录成员账号列表
     *  *
     * @param DeleteRdMemberListRequest $request DeleteRdMemberListRequest
     *
     * @return DeleteRdMemberListResponse DeleteRdMemberListResponse
     */
    public function deleteRdMemberList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRdMemberListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSchedruleOnDemandRequest $request DeleteSchedruleOnDemandRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSchedruleOnDemandResponse DeleteSchedruleOnDemandResponse
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
     * @param DeleteSchedruleOnDemandRequest $request DeleteSchedruleOnDemandRequest
     *
     * @return DeleteSchedruleOnDemandResponse DeleteSchedruleOnDemandResponse
     */
    public function deleteSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the association between an asset and an Anti-DDoS Origin instance of a paid edition.
     *  *
     * @param DescribeAssetGroupRequest $request DescribeAssetGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAssetGroupResponse DescribeAssetGroupResponse
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
     * @summary Queries the association between an asset and an Anti-DDoS Origin instance of a paid edition.
     *  *
     * @param DescribeAssetGroupRequest $request DescribeAssetGroupRequest
     *
     * @return DescribeAssetGroupResponse DescribeAssetGroupResponse
     */
    public function describeAssetGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the association between an asset and an Anti-DDoS Origin instance of a paid edition.
     *  *
     * @param DescribeAssetGroupToInstanceRequest $request DescribeAssetGroupToInstanceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAssetGroupToInstanceResponse DescribeAssetGroupToInstanceResponse
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
     * @summary Queries the association between an asset and an Anti-DDoS Origin instance of a paid edition.
     *  *
     * @param DescribeAssetGroupToInstanceRequest $request DescribeAssetGroupToInstanceRequest
     *
     * @return DescribeAssetGroupToInstanceResponse DescribeAssetGroupToInstanceResponse
     */
    public function describeAssetGroupToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetGroupToInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about the DDoS attack events that occurred on a specific Anti-DDoS Origin instance.
     *  *
     * @description You can call the DescribeDdosEvent operation to query the details about the DDoS attack events that occurred on a specific Anti-DDoS Origin instance by page. The details include the start time, end time, attacked IP address, and status of each event.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the details about the DDoS attack events that occurred on a specific Anti-DDoS Origin instance.
     *  *
     * @description You can call the DescribeDdosEvent operation to query the details about the DDoS attack events that occurred on a specific Anti-DDoS Origin instance by page. The details include the start time, end time, attacked IP address, and status of each event.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary 查询账单
     *  *
     * @param DescribeDdosOriginInstanceBillRequest $request DescribeDdosOriginInstanceBillRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDdosOriginInstanceBillResponse DescribeDdosOriginInstanceBillResponse
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
     * @summary 查询账单
     *  *
     * @param DescribeDdosOriginInstanceBillRequest $request DescribeDdosOriginInstanceBillRequest
     *
     * @return DescribeDdosOriginInstanceBillResponse DescribeDdosOriginInstanceBillResponse
     */
    public function describeDdosOriginInstanceBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosOriginInstanceBillWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of assets that are in an abnormal state and the number of Anti-DDoS
     *                   Origin instances that are about to expire in a specific region. The assets can be
     *                   elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS)
     *                   instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description ## Usage notes
     * You can call the DescribeExcpetionCount operation to query the number of assets that are in an abnormal state and the number of Anti-DDoS Origin instances that are about to expire in a specific region. For example, if blackhole filtering is triggered for an IP address, the IP address is in an abnormal state. An instance whose remaining validity period is less than seven days is considered as an instance that is about to expire.
     *  *
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
     * @summary Queries the number of assets that are in an abnormal state and the number of Anti-DDoS
     *                   Origin instances that are about to expire in a specific region. The assets can be
     *                   elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS)
     *                   instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description ## Usage notes
     * You can call the DescribeExcpetionCount operation to query the number of assets that are in an abnormal state and the number of Anti-DDoS Origin instances that are about to expire in a specific region. For example, if blackhole filtering is triggered for an IP address, the IP address is in an abnormal state. An instance whose remaining validity period is less than seven days is considered as an instance that is about to expire.
     *  *
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
     * @summary Queries the details of all Anti-DDoS Origin instances.
     *  *
     * @description You can call the DescribeInstanceList operation to query the details of all Anti-DDoS Origin instances within your Alibaba Cloud account by page. The details include the ID, validity period, and status of each instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the details of all Anti-DDoS Origin instances.
     *  *
     * @description You can call the DescribeInstanceList operation to query the details of all Anti-DDoS Origin instances within your Alibaba Cloud account by page. The details include the ID, validity period, and status of each instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @param DescribeInstanceSpecsRequest $request DescribeInstanceSpecsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSpecsResponse DescribeInstanceSpecsResponse
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
     * @param DescribeInstanceSpecsRequest $request DescribeInstanceSpecsRequest
     *
     * @return DescribeInstanceSpecsResponse DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecsWithOptions($request, $runtime);
    }

    /**
     * @summary Call the DescribeOnDemandDdosEvent operation to query the DDoS events recorded for the IP address of the Anti-DDoS on-demand instance.
     *  *
     * @description >  Anti-DDoS Origin API operations are available for only Anti-DDoS Origin Enterprise users.
     *  *
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
     * @summary Call the DescribeOnDemandDdosEvent operation to query the DDoS events recorded for the IP address of the Anti-DDoS on-demand instance.
     *  *
     * @description >  Anti-DDoS Origin API operations are available for only Anti-DDoS Origin Enterprise users.
     *  *
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
     * @param DescribeOnDemandInstanceStatusRequest $request DescribeOnDemandInstanceStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOnDemandInstanceStatusResponse DescribeOnDemandInstanceStatusResponse
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
     * @param DescribeOnDemandInstanceStatusRequest $request DescribeOnDemandInstanceStatusRequest
     *
     * @return DescribeOnDemandInstanceStatusResponse DescribeOnDemandInstanceStatusResponse
     */
    public function describeOnDemandInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnDemandInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary The number of entries to return on each page.
     *  *
     * @description The start time. Operation logs that were generated after this time are queried.**** This value is a UNIX timestamp. Unit: milliseconds.
     *  *
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
     * @summary The number of entries to return on each page.
     *  *
     * @description The start time. Operation logs that were generated after this time are queried.**** This value is a UNIX timestamp. Unit: milliseconds.
     *  *
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
     * @summary Queries the IP addresses that are protected by a specific Anti-DDoS Origin instance.
     *  *
     * @description You can call the DescribePackIpList operation to query the details about each IP address that is protected by a specific Anti-DDoS Origin instance by page. The details include the IP address and the type of the cloud asset to which the IP address belongs. The details also include the status of the IP address, such as whether blackhole filtering is triggered for the IP address.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the IP addresses that are protected by a specific Anti-DDoS Origin instance.
     *  *
     * @description You can call the DescribePackIpList operation to query the details about each IP address that is protected by a specific Anti-DDoS Origin instance by page. The details include the IP address and the type of the cloud asset to which the IP address belongs. The details also include the status of the IP address, such as whether blackhole filtering is triggered for the IP address.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary 查询资源目录成员账号列表
     *  *
     * @param DescribeRdMemberListRequest $request DescribeRdMemberListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdMemberListResponse DescribeRdMemberListResponse
     */
    public function describeRdMemberListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceDirectoryId)) {
            $query['ResourceDirectoryId'] = $request->resourceDirectoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdMemberList',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdMemberListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询资源目录成员账号列表
     *  *
     * @param DescribeRdMemberListRequest $request DescribeRdMemberListRequest
     *
     * @return DescribeRdMemberListResponse DescribeRdMemberListResponse
     */
    public function describeRdMemberList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdMemberListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询RD状态
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdStatusResponse DescribeRdStatusResponse
     */
    public function describeRdStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRdStatus',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询RD状态
     *  *
     * @return DescribeRdStatusResponse DescribeRdStatusResponse
     */
    public function describeRdStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdStatusWithOptions($runtime);
    }

    /**
     * @summary Queries the regions of cloud assets that are supported by an Anti-DDoS Origin instance.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
     * @summary Queries the regions of cloud assets that are supported by an Anti-DDoS Origin instance.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     *  *
     * @description You can call the DescribeTraffic operation to query traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     * >  When you call this operation, you must configure the **InstanceId** parameter to specify the Anti-DDoS Origin instance whose traffic statistics you want to query.
     * ## Limits
     * You can call this operation once per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     *  *
     * @description You can call the DescribeTraffic operation to query traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     * >  When you call this operation, you must configure the **InstanceId** parameter to specify the Anti-DDoS Origin instance whose traffic statistics you want to query.
     * ## Limits
     * You can call this operation once per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary 策略解绑
     *  *
     * @param DetachFromPolicyRequest $tmpReq  DetachFromPolicyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachFromPolicyResponse DetachFromPolicyResponse
     */
    public function detachFromPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetachFromPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ipPortProtocolList)) {
            $request->ipPortProtocolListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ipPortProtocolList, 'IpPortProtocolList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ipPortProtocolListShrink)) {
            $query['IpPortProtocolList'] = $request->ipPortProtocolListShrink;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachFromPolicy',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachFromPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 策略解绑
     *  *
     * @param DetachFromPolicyRequest $request DetachFromPolicyRequest
     *
     * @return DetachFromPolicyResponse DetachFromPolicyResponse
     */
    public function detachFromPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachFromPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Dissociates an asset from an Anti-DDoS Origin instance of a paid edition.
     *  *
     * @param DettachAssetGroupToInstanceRequest $tmpReq  DettachAssetGroupToInstanceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DettachAssetGroupToInstanceResponse DettachAssetGroupToInstanceResponse
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
     * @summary Dissociates an asset from an Anti-DDoS Origin instance of a paid edition.
     *  *
     * @param DettachAssetGroupToInstanceRequest $request DettachAssetGroupToInstanceRequest
     *
     * @return DettachAssetGroupToInstanceResponse DettachAssetGroupToInstanceResponse
     */
    public function dettachAssetGroupToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dettachAssetGroupToInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether Log Service is activated.
     *  *
     * @param GetSlsOpenStatusRequest $request GetSlsOpenStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSlsOpenStatusResponse GetSlsOpenStatusResponse
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
     * @summary Checks whether Log Service is activated.
     *  *
     * @param GetSlsOpenStatusRequest $request GetSlsOpenStatusRequest
     *
     * @return GetSlsOpenStatusResponse GetSlsOpenStatusResponse
     */
    public function getSlsOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSlsOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Anti-DDoS Origin instances for which log analysis is enabled.
     *  *
     * @param ListOpenedAccessLogInstancesRequest $request ListOpenedAccessLogInstancesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOpenedAccessLogInstancesResponse ListOpenedAccessLogInstancesResponse
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
     * @summary Queries the Anti-DDoS Origin instances for which log analysis is enabled.
     *  *
     * @param ListOpenedAccessLogInstancesRequest $request ListOpenedAccessLogInstancesRequest
     *
     * @return ListOpenedAccessLogInstancesResponse ListOpenedAccessLogInstancesResponse
     */
    public function listOpenedAccessLogInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenedAccessLogInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询策略
     *  *
     * @param ListPolicyRequest $request ListPolicyRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicyResponse ListPolicyResponse
     */
    public function listPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicy',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询策略
     *  *
     * @param ListPolicyRequest $request ListPolicyRequest
     *
     * @return ListPolicyResponse ListPolicyResponse
     */
    public function listPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 查询策略绑定
     *  *
     * @param ListPolicyAttachmentRequest $tmpReq  ListPolicyAttachmentRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicyAttachmentResponse ListPolicyAttachmentResponse
     */
    public function listPolicyAttachmentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPolicyAttachmentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ipPortProtocolList)) {
            $request->ipPortProtocolListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ipPortProtocolList, 'IpPortProtocolList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ipPortProtocolListShrink)) {
            $query['IpPortProtocolList'] = $request->ipPortProtocolListShrink;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicyAttachment',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询策略绑定
     *  *
     * @param ListPolicyAttachmentRequest $request ListPolicyAttachmentRequest
     *
     * @return ListPolicyAttachmentResponse ListPolicyAttachmentResponse
     */
    public function listPolicyAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyAttachmentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all tags.
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagKeysResponse ListTagKeysResponse
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
     * @summary Queries all tags.
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @description You can call the ListTagResources operation to query the tags that are added to Anti-DDoS Origin instances at a time.
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
     * @description You can call the ListTagResources operation to query the tags that are added to Anti-DDoS Origin instances at a time.
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
     * @summary 修改策略
     *  *
     * @param ModifyPolicyRequest $tmpReq  ModifyPolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyResponse ModifyPolicyResponse
     */
    public function modifyPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->contentShrink)) {
            $query['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicy',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改策略
     *  *
     * @param ModifyPolicyRequest $request ModifyPolicyRequest
     *
     * @return ModifyPolicyResponse ModifyPolicyResponse
     */
    public function modifyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 修改策略
     *  *
     * @param ModifyPolicyContentRequest $tmpReq  ModifyPolicyContentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyContentResponse ModifyPolicyContentResponse
     */
    public function modifyPolicyContentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPolicyContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->contentShrink)) {
            $query['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicyContent',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPolicyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改策略
     *  *
     * @param ModifyPolicyContentRequest $request ModifyPolicyContentRequest
     *
     * @return ModifyPolicyContentResponse ModifyPolicyContentResponse
     */
    public function modifyPolicyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyContentWithOptions($request, $runtime);
    }

    /**
     * @summary Adds remarks for a specific Anti-DDoS Origin instance.
     *  *
     * @description You can call the ModifyRemark operation to add remarks for a single Anti-DDoS Origin instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Adds remarks for a specific Anti-DDoS Origin instance.
     *  *
     * @description You can call the ModifyRemark operation to add remarks for a single Anti-DDoS Origin instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the scheduling rule of an on-demand instance.
     *  *
     * @param QuerySchedruleOnDemandRequest $request QuerySchedruleOnDemandRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySchedruleOnDemandResponse QuerySchedruleOnDemandResponse
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
     * @summary Queries the scheduling rule of an on-demand instance.
     *  *
     * @param QuerySchedruleOnDemandRequest $request QuerySchedruleOnDemandRequest
     *
     * @return QuerySchedruleOnDemandResponse QuerySchedruleOnDemandResponse
     */
    public function querySchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @summary 释放原生防护全局实例
     *  *
     * @param ReleaseDdosOriginInstanceRequest $request ReleaseDdosOriginInstanceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseDdosOriginInstanceResponse ReleaseDdosOriginInstanceResponse
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
     * @summary 释放原生防护全局实例
     *  *
     * @param ReleaseDdosOriginInstanceRequest $request ReleaseDdosOriginInstanceRequest
     *
     * @return ReleaseDdosOriginInstanceResponse ReleaseDdosOriginInstanceResponse
     */
    public function releaseDdosOriginInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseDdosOriginInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SetInstanceModeOnDemandRequest $request SetInstanceModeOnDemandRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetInstanceModeOnDemandResponse SetInstanceModeOnDemandResponse
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
     * @param SetInstanceModeOnDemandRequest $request SetInstanceModeOnDemandRequest
     *
     * @return SetInstanceModeOnDemandResponse SetInstanceModeOnDemandResponse
     */
    public function setInstanceModeOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceModeOnDemandWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to Anti-DDoS Origin instances.
     *  *
     * @description You can call the TagResources operation to add tags to Anti-DDoS Origin instances.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Adds tags to Anti-DDoS Origin instances.
     *  *
     * @description You can call the TagResources operation to add tags to Anti-DDoS Origin instances.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Removes tags from Anti-DDoS Origin Enterprise instances.
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
     * @summary Removes tags from Anti-DDoS Origin Enterprise instances.
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
}
