<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddRdMemberListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddRdMemberListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddRdMemberListShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachToPolicyRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachToPolicyResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachToPolicyShrinkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckAccessLogAuthRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckAccessLogAuthResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckGrantRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckGrantResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteBlackholeRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteBlackholeResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteRdMemberListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteRdMemberListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteRdMemberListShrinkRequest;
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
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ReleaseDdosOriginInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ReleaseDdosOriginInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\UntagResourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ddosbgp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'ddosbgp.aliyuncs.com',
            'cn-beijing' => 'ddosbgp.aliyuncs.com',
            'cn-zhangjiakou' => 'ddosbgp.aliyuncs.com',
            'cn-huhehaote' => 'ddosbgp.aliyuncs.com',
            'cn-hangzhou' => 'ddosbgp.aliyuncs.com',
            'cn-shanghai' => 'ddosbgp.aliyuncs.com',
            'cn-shenzhen' => 'ddosbgp.aliyuncs.com',
            'ap-northeast-1' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'cn-chengdu' => 'ddosbgp.aliyuncs.com',
            'eu-central-1' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'ddosbgp.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'ddosbgp.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ddosbgp.aliyuncs.com',
            'cn-north-2-gov-1' => 'ddosbgp.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds IP addresses to an Anti-DDoS Origin instance.
     *
     * @param request - AddIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddIpResponse
     *
     * @param AddIpRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return AddIpResponse
     */
    public function addIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipList) {
            @$query['IpList'] = $request->ipList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddIp',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds IP addresses to an Anti-DDoS Origin instance.
     *
     * @param request - AddIpRequest
     *
     * @returns AddIpResponse
     *
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
     * Adds members to a resource directory.
     *
     * @remarks
     * Only a delegated administrator account or the management account of a resource directory can be used to add members to the resource directory.
     *
     * @param tmpReq - AddRdMemberListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRdMemberListResponse
     *
     * @param AddRdMemberListRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AddRdMemberListResponse
     */
    public function addRdMemberListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddRdMemberListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->memberList) {
            $request->memberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->memberList, 'MemberList', 'json');
        }

        $query = [];
        if (null !== $request->memberListShrink) {
            @$query['MemberList'] = $request->memberListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddRdMemberList',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRdMemberListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds members to a resource directory.
     *
     * @remarks
     * Only a delegated administrator account or the management account of a resource directory can be used to add members to the resource directory.
     *
     * @param request - AddRdMemberListRequest
     *
     * @returns AddRdMemberListResponse
     *
     * @param AddRdMemberListRequest $request
     *
     * @return AddRdMemberListResponse
     */
    public function addRdMemberList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRdMemberListWithOptions($request, $runtime);
    }

    /**
     * Associates an asset with an Anti-DDoS Origin instance of a paid edition.
     *
     * @param tmpReq - AttachAssetGroupToInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachAssetGroupToInstanceResponse
     *
     * @param AttachAssetGroupToInstanceRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return AttachAssetGroupToInstanceResponse
     */
    public function attachAssetGroupToInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachAssetGroupToInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assetGroupList) {
            $request->assetGroupListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assetGroupList, 'AssetGroupList', 'json');
        }

        $query = [];
        if (null !== $request->assetGroupListShrink) {
            @$query['AssetGroupList'] = $request->assetGroupListShrink;
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
            'action' => 'AttachAssetGroupToInstance',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachAssetGroupToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates an asset with an Anti-DDoS Origin instance of a paid edition.
     *
     * @param request - AttachAssetGroupToInstanceRequest
     *
     * @returns AttachAssetGroupToInstanceResponse
     *
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
     * Associates a mitigation policy to a protected object.
     *
     * @param tmpReq - AttachToPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachToPolicyResponse
     *
     * @param AttachToPolicyRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return AttachToPolicyResponse
     */
    public function attachToPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachToPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ipPortProtocolList) {
            $request->ipPortProtocolListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ipPortProtocolList, 'IpPortProtocolList', 'json');
        }

        $query = [];
        if (null !== $request->ipPortProtocolListShrink) {
            @$query['IpPortProtocolList'] = $request->ipPortProtocolListShrink;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->portVersion) {
            @$query['PortVersion'] = $request->portVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachToPolicy',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachToPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a mitigation policy to a protected object.
     *
     * @param request - AttachToPolicyRequest
     *
     * @returns AttachToPolicyResponse
     *
     * @param AttachToPolicyRequest $request
     *
     * @return AttachToPolicyResponse
     */
    public function attachToPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachToPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries whether Anti-DDoS Origin is authorized to access Simple Log Service.
     *
     * @param request - CheckAccessLogAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAccessLogAuthResponse
     *
     * @param CheckAccessLogAuthRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckAccessLogAuthResponse
     */
    public function checkAccessLogAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckAccessLogAuth',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckAccessLogAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether Anti-DDoS Origin is authorized to access Simple Log Service.
     *
     * @param request - CheckAccessLogAuthRequest
     *
     * @returns CheckAccessLogAuthResponse
     *
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
     * Queries whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     *
     * @remarks
     * You can call the CheckGrant operation to query whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CheckGrantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckGrantResponse
     *
     * @param CheckGrantRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CheckGrantResponse
     */
    public function checkGrantWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckGrant',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckGrantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     *
     * @remarks
     * You can call the CheckGrant operation to query whether Anti-DDoS Origin is authorized to obtain information about the assets within the current Alibaba Cloud account.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CheckGrantRequest
     *
     * @returns CheckGrantResponse
     *
     * @param CheckGrantRequest $request
     *
     * @return CheckGrantResponse
     */
    public function checkGrant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkGrantWithOptions($request, $runtime);
    }

    /**
     * Creates a mitigation policy.
     *
     * @param request - CreatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->portVersion) {
            @$query['PortVersion'] = $request->portVersion;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a mitigation policy.
     *
     * @param request - CreatePolicyRequest
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * Deactivates blackhole filtering for a protected IP address.
     *
     * @remarks
     * You can call the DeleteBlackhole operation to deactivate blackhole filtering for a protected IP address.
     * Before you call this operation, you can call the [DescribePackIpList](https://help.aliyun.com/document_detail/118701.html) operation to query the protection status of the IP addresses that are protected by your Anti-DDoS Origin instance. For example, you can query whether blackhole filtering is triggered for an IP address.
     * ### [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteBlackholeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBlackholeResponse
     *
     * @param DeleteBlackholeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteBlackholeResponse
     */
    public function deleteBlackholeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBlackhole',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBlackholeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deactivates blackhole filtering for a protected IP address.
     *
     * @remarks
     * You can call the DeleteBlackhole operation to deactivate blackhole filtering for a protected IP address.
     * Before you call this operation, you can call the [DescribePackIpList](https://help.aliyun.com/document_detail/118701.html) operation to query the protection status of the IP addresses that are protected by your Anti-DDoS Origin instance. For example, you can query whether blackhole filtering is triggered for an IP address.
     * ### [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteBlackholeRequest
     *
     * @returns DeleteBlackholeResponse
     *
     * @param DeleteBlackholeRequest $request
     *
     * @return DeleteBlackholeResponse
     */
    public function deleteBlackhole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBlackholeWithOptions($request, $runtime);
    }

    /**
     * Removes specific IP addresses from an Anti-DDoS Origin instance.
     *
     * @remarks
     * The Anti-DDoS Origin Enterprise instance no longer protects the IP addresses that are removed.
     *
     * @param request - DeleteIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpResponse
     *
     * @param DeleteIpRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteIpResponse
     */
    public function deleteIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipList) {
            @$query['IpList'] = $request->ipList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIp',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes specific IP addresses from an Anti-DDoS Origin instance.
     *
     * @remarks
     * The Anti-DDoS Origin Enterprise instance no longer protects the IP addresses that are removed.
     *
     * @param request - DeleteIpRequest
     *
     * @returns DeleteIpResponse
     *
     * @param DeleteIpRequest $request
     *
     * @return DeleteIpResponse
     */
    public function deleteIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpWithOptions($request, $runtime);
    }

    /**
     * Deletes a mitigation policy.
     *
     * @remarks
     * You cannot delete a mitigation policy to which a protected object is added.
     *
     * @param request - DeletePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a mitigation policy.
     *
     * @remarks
     * You cannot delete a mitigation policy to which a protected object is added.
     *
     * @param request - DeletePolicyRequest
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes members.
     *
     * @remarks
     * Only a delegated administrator account or the management account of a resource directory can be used to delete members.
     *
     * @param tmpReq - DeleteRdMemberListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRdMemberListResponse
     *
     * @param DeleteRdMemberListRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRdMemberListResponse
     */
    public function deleteRdMemberListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteRdMemberListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->memberList) {
            $request->memberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->memberList, 'MemberList', 'json');
        }

        $query = [];
        if (null !== $request->memberListShrink) {
            @$query['MemberList'] = $request->memberListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRdMemberList',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRdMemberListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes members.
     *
     * @remarks
     * Only a delegated administrator account or the management account of a resource directory can be used to delete members.
     *
     * @param request - DeleteRdMemberListRequest
     *
     * @returns DeleteRdMemberListResponse
     *
     * @param DeleteRdMemberListRequest $request
     *
     * @return DeleteRdMemberListResponse
     */
    public function deleteRdMemberList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRdMemberListWithOptions($request, $runtime);
    }

    /**
     * Queries the association between an asset and an Anti-DDoS Origin instance of a paid edition.
     *
     * @param request - DescribeAssetGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAssetGroupResponse
     *
     * @param DescribeAssetGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAssetGroupResponse
     */
    public function describeAssetGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAssetGroup',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAssetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the association between an asset and an Anti-DDoS Origin instance of a paid edition.
     *
     * @param request - DescribeAssetGroupRequest
     *
     * @returns DescribeAssetGroupResponse
     *
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
     * Queries the association between an asset and an Anti-DDoS Origin instance of a paid edition.
     *
     * @param request - DescribeAssetGroupToInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAssetGroupToInstanceResponse
     *
     * @param DescribeAssetGroupToInstanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAssetGroupToInstanceResponse
     */
    public function describeAssetGroupToInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAssetGroupToInstance',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAssetGroupToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the association between an asset and an Anti-DDoS Origin instance of a paid edition.
     *
     * @param request - DescribeAssetGroupToInstanceRequest
     *
     * @returns DescribeAssetGroupToInstanceResponse
     *
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
     * Queries the details about the DDoS attack events that occurred on an Anti-DDoS Origin instance.
     *
     * @remarks
     * You can call the DescribeDdosEvent operation to query the details about the DDoS attack events that occurred on an Anti-DDoS Origin instance by page. The details include the start time, end time, attacked IP address, and status of each event.
     * ### [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDdosEventResponse
     *
     * @param DescribeDdosEventRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDdosEventResponse
     */
    public function describeDdosEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDdosEvent',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDdosEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about the DDoS attack events that occurred on an Anti-DDoS Origin instance.
     *
     * @remarks
     * You can call the DescribeDdosEvent operation to query the details about the DDoS attack events that occurred on an Anti-DDoS Origin instance by page. The details include the start time, end time, attacked IP address, and status of each event.
     * ### [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosEventRequest
     *
     * @returns DescribeDdosEventResponse
     *
     * @param DescribeDdosEventRequest $request
     *
     * @return DescribeDdosEventResponse
     */
    public function describeDdosEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosEventWithOptions($request, $runtime);
    }

    /**
     * Queries the bill of an Anti-DDoS Origin (Pay-as-you-go) instance.
     *
     * @param request - DescribeDdosOriginInstanceBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDdosOriginInstanceBillResponse
     *
     * @param DescribeDdosOriginInstanceBillRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDdosOriginInstanceBillResponse
     */
    public function describeDdosOriginInstanceBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->isShowList) {
            @$query['IsShowList'] = $request->isShowList;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDdosOriginInstanceBill',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDdosOriginInstanceBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bill of an Anti-DDoS Origin (Pay-as-you-go) instance.
     *
     * @param request - DescribeDdosOriginInstanceBillRequest
     *
     * @returns DescribeDdosOriginInstanceBillResponse
     *
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
     * Queries the number of assets that are in an abnormal state and the number of Anti-DDoS Origin instances that are about to expire. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *
     * @remarks
     * ## Usage notes
     * You can call the DescribeExcpetionCount operation to query the number of assets that are in an abnormal state and the number of Anti-DDoS Origin instances that are about to expire in a specific region. For example, if blackhole filtering is triggered for an IP address, the IP address is in an abnormal state. An instance whose remaining validity period is less than seven days is considered as an instance that is about to expire.
     *
     * @param request - DescribeExcpetionCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExcpetionCountResponse
     *
     * @param DescribeExcpetionCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeExcpetionCountResponse
     */
    public function describeExcpetionCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExcpetionCount',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExcpetionCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of assets that are in an abnormal state and the number of Anti-DDoS Origin instances that are about to expire. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *
     * @remarks
     * ## Usage notes
     * You can call the DescribeExcpetionCount operation to query the number of assets that are in an abnormal state and the number of Anti-DDoS Origin instances that are about to expire in a specific region. For example, if blackhole filtering is triggered for an IP address, the IP address is in an abnormal state. An instance whose remaining validity period is less than seven days is considered as an instance that is about to expire.
     *
     * @param request - DescribeExcpetionCountRequest
     *
     * @returns DescribeExcpetionCountResponse
     *
     * @param DescribeExcpetionCountRequest $request
     *
     * @return DescribeExcpetionCountResponse
     */
    public function describeExcpetionCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcpetionCountWithOptions($request, $runtime);
    }

    /**
     * Queries the details of all Anti-DDoS Origin instances.
     *
     * @remarks
     * Queries the details of all Anti-DDoS Origin instances.
     *
     * @param request - DescribeInstanceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceListResponse
     *
     * @param DescribeInstanceListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceListResponse
     */
    public function describeInstanceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->instanceTypeList) {
            @$query['InstanceTypeList'] = $request->instanceTypeList;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->orderby) {
            @$query['Orderby'] = $request->orderby;
        }

        if (null !== $request->orderdire) {
            @$query['Orderdire'] = $request->orderdire;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceList',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of all Anti-DDoS Origin instances.
     *
     * @remarks
     * Queries the details of all Anti-DDoS Origin instances.
     *
     * @param request - DescribeInstanceListRequest
     *
     * @returns DescribeInstanceListResponse
     *
     * @param DescribeInstanceListRequest $request
     *
     * @return DescribeInstanceListResponse
     */
    public function describeInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceListWithOptions($request, $runtime);
    }

    /**
     * Queries the specifications of a specific Anti-DDoS Origin instance.
     *
     * @param request - DescribeInstanceSpecsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSpecsResponse
     *
     * @param DescribeInstanceSpecsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSpecs',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of a specific Anti-DDoS Origin instance.
     *
     * @param request - DescribeInstanceSpecsRequest
     *
     * @returns DescribeInstanceSpecsResponse
     *
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
     * Queries the operation logs of an Anti-DDoS Origin instance.
     *
     * @remarks
     * You can call the DescribeOpEntities operation to query the operation logs of an instance by page.
     * ### Limit
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeOpEntitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOpEntitiesResponse
     *
     * @param DescribeOpEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->opAction) {
            @$query['OpAction'] = $request->opAction;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDir) {
            @$query['OrderDir'] = $request->orderDir;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOpEntities',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOpEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operation logs of an Anti-DDoS Origin instance.
     *
     * @remarks
     * You can call the DescribeOpEntities operation to query the operation logs of an instance by page.
     * ### Limit
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeOpEntitiesRequest
     *
     * @returns DescribeOpEntitiesResponse
     *
     * @param DescribeOpEntitiesRequest $request
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpEntitiesWithOptions($request, $runtime);
    }

    /**
     * Queries the IP addresses that are protected by a specific Anti-DDoS Origin instance.
     *
     * @remarks
     * You can call the DescribePackIpList operation to query the details about each IP address that is protected by a specific Anti-DDoS Origin instance by page. The details include the IP address and the type of the cloud asset to which the IP address belongs. The details also include the status of the IP address, such as whether blackhole filtering is triggered for the IP address.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePackIpListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePackIpListResponse
     *
     * @param DescribePackIpListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePackIpListResponse
     */
    public function describePackIpListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePackIpList',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePackIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP addresses that are protected by a specific Anti-DDoS Origin instance.
     *
     * @remarks
     * You can call the DescribePackIpList operation to query the details about each IP address that is protected by a specific Anti-DDoS Origin instance by page. The details include the IP address and the type of the cloud asset to which the IP address belongs. The details also include the status of the IP address, such as whether blackhole filtering is triggered for the IP address.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePackIpListRequest
     *
     * @returns DescribePackIpListResponse
     *
     * @param DescribePackIpListRequest $request
     *
     * @return DescribePackIpListResponse
     */
    public function describePackIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackIpListWithOptions($request, $runtime);
    }

    /**
     * Queries members in a resource directory.
     *
     * @param request - DescribeRdMemberListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdMemberListResponse
     *
     * @param DescribeRdMemberListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRdMemberListResponse
     */
    public function describeRdMemberListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceDirectoryId) {
            @$query['ResourceDirectoryId'] = $request->resourceDirectoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRdMemberList',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdMemberListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries members in a resource directory.
     *
     * @param request - DescribeRdMemberListRequest
     *
     * @returns DescribeRdMemberListResponse
     *
     * @param DescribeRdMemberListRequest $request
     *
     * @return DescribeRdMemberListResponse
     */
    public function describeRdMemberList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdMemberListWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the multi-account management feature.
     *
     * @param request - DescribeRdStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRdStatusResponse
     */
    public function describeRdStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeRdStatus',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the multi-account management feature.
     *
     * @returns DescribeRdStatusResponse
     *
     * @return DescribeRdStatusResponse
     */
    public function describeRdStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdStatusWithOptions($runtime);
    }

    /**
     * Queries the regions of assets that can be protected by Anti-DDoS Origin Enterprise in a specific region.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions of assets that can be protected by Anti-DDoS Origin Enterprise in a specific region.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * Queries traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     *
     * @remarks
     * You can call the DescribeTraffic operation to query traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     * >  When you call this operation, you must configure the **InstanceId** parameter to specify the Anti-DDoS Origin instance whose traffic statistics you want to query.
     * ## Limits
     * You can call this operation once per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeTrafficRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrafficResponse
     *
     * @param DescribeTrafficRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTrafficResponse
     */
    public function describeTrafficWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->flowType) {
            @$query['FlowType'] = $request->flowType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->ipnet) {
            @$query['Ipnet'] = $request->ipnet;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTraffic',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     *
     * @remarks
     * You can call the DescribeTraffic operation to query traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     * >  When you call this operation, you must configure the **InstanceId** parameter to specify the Anti-DDoS Origin instance whose traffic statistics you want to query.
     * ## Limits
     * You can call this operation once per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeTrafficRequest
     *
     * @returns DescribeTrafficResponse
     *
     * @param DescribeTrafficRequest $request
     *
     * @return DescribeTrafficResponse
     */
    public function describeTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficWithOptions($request, $runtime);
    }

    /**
     * Removes protected objects from a mitigation policy.
     *
     * @param tmpReq - DetachFromPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachFromPolicyResponse
     *
     * @param DetachFromPolicyRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetachFromPolicyResponse
     */
    public function detachFromPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetachFromPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ipPortProtocolList) {
            $request->ipPortProtocolListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ipPortProtocolList, 'IpPortProtocolList', 'json');
        }

        $query = [];
        if (null !== $request->ipPortProtocolListShrink) {
            @$query['IpPortProtocolList'] = $request->ipPortProtocolListShrink;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->portVersion) {
            @$query['PortVersion'] = $request->portVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachFromPolicy',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachFromPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes protected objects from a mitigation policy.
     *
     * @param request - DetachFromPolicyRequest
     *
     * @returns DetachFromPolicyResponse
     *
     * @param DetachFromPolicyRequest $request
     *
     * @return DetachFromPolicyResponse
     */
    public function detachFromPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachFromPolicyWithOptions($request, $runtime);
    }

    /**
     * Dissociates an asset from an Anti-DDoS Origin instance of a paid edition.
     *
     * @param tmpReq - DettachAssetGroupToInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DettachAssetGroupToInstanceResponse
     *
     * @param DettachAssetGroupToInstanceRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return DettachAssetGroupToInstanceResponse
     */
    public function dettachAssetGroupToInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DettachAssetGroupToInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assetGroupList) {
            $request->assetGroupListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assetGroupList, 'AssetGroupList', 'json');
        }

        $query = [];
        if (null !== $request->assetGroupListShrink) {
            @$query['AssetGroupList'] = $request->assetGroupListShrink;
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
            'action' => 'DettachAssetGroupToInstance',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DettachAssetGroupToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates an asset from an Anti-DDoS Origin instance of a paid edition.
     *
     * @param request - DettachAssetGroupToInstanceRequest
     *
     * @returns DettachAssetGroupToInstanceResponse
     *
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
     * Queries whether Simple Log Service is activated.
     *
     * @param request - GetSlsOpenStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSlsOpenStatusResponse
     *
     * @param GetSlsOpenStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSlsOpenStatusResponse
     */
    public function getSlsOpenStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSlsOpenStatus',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSlsOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether Simple Log Service is activated.
     *
     * @param request - GetSlsOpenStatusRequest
     *
     * @returns GetSlsOpenStatusResponse
     *
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
     * Queries the Anti-DDoS Origin instances for which log analysis is enabled.
     *
     * @param request - ListOpenedAccessLogInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOpenedAccessLogInstancesResponse
     *
     * @param ListOpenedAccessLogInstancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListOpenedAccessLogInstancesResponse
     */
    public function listOpenedAccessLogInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOpenedAccessLogInstances',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOpenedAccessLogInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Anti-DDoS Origin instances for which log analysis is enabled.
     *
     * @param request - ListOpenedAccessLogInstancesRequest
     *
     * @returns ListOpenedAccessLogInstancesResponse
     *
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
     * Queries mitigation policies.
     *
     * @param request - ListPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyResponse
     *
     * @param ListPolicyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListPolicyResponse
     */
    public function listPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicy',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries mitigation policies.
     *
     * @param request - ListPolicyRequest
     *
     * @returns ListPolicyResponse
     *
     * @param ListPolicyRequest $request
     *
     * @return ListPolicyResponse
     */
    public function listPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries attachments to mitigation policies.
     *
     * @param tmpReq - ListPolicyAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyAttachmentResponse
     *
     * @param ListPolicyAttachmentRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListPolicyAttachmentResponse
     */
    public function listPolicyAttachmentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPolicyAttachmentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ipPortProtocolList) {
            $request->ipPortProtocolListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ipPortProtocolList, 'IpPortProtocolList', 'json');
        }

        $query = [];
        if (null !== $request->ipPortProtocolListShrink) {
            @$query['IpPortProtocolList'] = $request->ipPortProtocolListShrink;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->portVersion) {
            @$query['PortVersion'] = $request->portVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicyAttachment',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries attachments to mitigation policies.
     *
     * @param request - ListPolicyAttachmentRequest
     *
     * @returns ListPolicyAttachmentResponse
     *
     * @param ListPolicyAttachmentRequest $request
     *
     * @return ListPolicyAttachmentResponse
     */
    public function listPolicyAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyAttachmentWithOptions($request, $runtime);
    }

    /**
     * Queries all tags.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagKeys',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all tags.
     *
     * @param request - ListTagKeysRequest
     *
     * @returns ListTagKeysResponse
     *
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
     * Queries the relationship between Anti-DDoS Origin instances and tags.
     *
     * @remarks
     * You can call the ListTagResources operation to query the tags that are added to Anti-DDoS Origin instances at a time.
     * ### [](#qps-)Limits
     * You can call this API operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version' => '2018-07-20',
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
     * Queries the relationship between Anti-DDoS Origin instances and tags.
     *
     * @remarks
     * You can call the ListTagResources operation to query the tags that are added to Anti-DDoS Origin instances at a time.
     * ### [](#qps-)Limits
     * You can call this API operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * Modifies a mitigation policy.
     *
     * @remarks
     * Modifies a mitigation policy.
     *
     * @param tmpReq - ModifyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPolicyResponse
     *
     * @param ModifyPolicyRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyPolicyResponse
     */
    public function modifyPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->contentShrink) {
            @$query['Content'] = $request->contentShrink;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->portVersion) {
            @$query['PortVersion'] = $request->portVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPolicy',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a mitigation policy.
     *
     * @remarks
     * Modifies a mitigation policy.
     *
     * @param request - ModifyPolicyRequest
     *
     * @returns ModifyPolicyResponse
     *
     * @param ModifyPolicyRequest $request
     *
     * @return ModifyPolicyResponse
     */
    public function modifyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the content of the mitigation policy.
     *
     * @remarks
     * Make sure that all request parameters are configured when you call this operation. If any parameter is left empty, the configuration is deleted.
     *
     * @param tmpReq - ModifyPolicyContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPolicyContentResponse
     *
     * @param ModifyPolicyContentRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyPolicyContentResponse
     */
    public function modifyPolicyContentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyPolicyContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        $query = [];
        if (null !== $request->contentShrink) {
            @$query['Content'] = $request->contentShrink;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->portVersion) {
            @$query['PortVersion'] = $request->portVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPolicyContent',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPolicyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the content of the mitigation policy.
     *
     * @remarks
     * Make sure that all request parameters are configured when you call this operation. If any parameter is left empty, the configuration is deleted.
     *
     * @param request - ModifyPolicyContentRequest
     *
     * @returns ModifyPolicyContentResponse
     *
     * @param ModifyPolicyContentRequest $request
     *
     * @return ModifyPolicyContentResponse
     */
    public function modifyPolicyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyContentWithOptions($request, $runtime);
    }

    /**
     * Adds remarks for a single Anti-DDoS Origin instance.
     *
     * @remarks
     * You can call the ModifyRemark operation to add remarks for a single Anti-DDoS Origin instance.
     * ### [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRemarkResponse
     *
     * @param ModifyRemarkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyRemarkResponse
     */
    public function modifyRemarkWithOptions($request, $runtime)
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRemark',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds remarks for a single Anti-DDoS Origin instance.
     *
     * @remarks
     * You can call the ModifyRemark operation to add remarks for a single Anti-DDoS Origin instance.
     * ### [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyRemarkRequest
     *
     * @returns ModifyRemarkResponse
     *
     * @param ModifyRemarkRequest $request
     *
     * @return ModifyRemarkResponse
     */
    public function modifyRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRemarkWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group to which a cloud resource belongs.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which a cloud resource belongs.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Releases a pay-as-you-go Anti-DDoS Origin instance.
     *
     * @param request - ReleaseDdosOriginInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseDdosOriginInstanceResponse
     *
     * @param ReleaseDdosOriginInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ReleaseDdosOriginInstanceResponse
     */
    public function releaseDdosOriginInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseDdosOriginInstance',
            'version' => '2018-07-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseDdosOriginInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a pay-as-you-go Anti-DDoS Origin instance.
     *
     * @param request - ReleaseDdosOriginInstanceRequest
     *
     * @returns ReleaseDdosOriginInstanceResponse
     *
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
     * Add tags to Anti-DDoS Origin instances.
     *
     * @remarks
     * You can call the TagResources operation to add tags to instances.
     * ### Limit
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version' => '2018-07-20',
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
     * Add tags to Anti-DDoS Origin instances.
     *
     * @remarks
     * You can call the TagResources operation to add tags to instances.
     * ### Limit
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * Removes tags from Anti-DDoS Origin instances.
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version' => '2018-07-20',
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
     * Removes tags from Anti-DDoS Origin instances.
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
}
