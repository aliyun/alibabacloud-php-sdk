<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddAccessControlListEntryRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddAccessControlListEntryResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddListenerWhiteListItemRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddListenerWhiteListItemResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddTagsRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddTagsResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddVServerGroupBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddVServerGroupBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateAccessControlListRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateAccessControlListResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateDomainExtensionRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateDomainExtensionResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerHTTPListenerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerHTTPListenerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerHTTPSListenerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerHTTPSListenerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerTCPListenerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerTCPListenerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerUDPListenerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerUDPListenerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateMasterSlaveServerGroupRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateMasterSlaveServerGroupResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateRulesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateRulesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateTLSCipherPolicyRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateTLSCipherPolicyResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateVServerGroupRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateVServerGroupResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteAccessControlListRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteAccessControlListResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteAccessLogsDownloadAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteAccessLogsDownloadAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteCACertificateRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteCACertificateResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteDomainExtensionRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteDomainExtensionResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteLoadBalancerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteLoadBalancerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteMasterSlaveServerGroupRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteMasterSlaveServerGroupResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteRulesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteRulesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteServerCertificateRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteServerCertificateResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteTLSCipherPolicyRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteTLSCipherPolicyResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteVServerGroupRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DeleteVServerGroupResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListsRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListsResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessLogsDownloadAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessLogsDownloadAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionsRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionsResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeHealthStatusRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeHealthStatusResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeHighDefinationMonitorRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeHighDefinationMonitorResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeListenerAccessControlAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeListenerAccessControlAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerTCPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerTCPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerUDPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerUDPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeRuleAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeRuleAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeRulesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeRulesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\EnableHighDefinationMonitorRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\EnableHighDefinationMonitorResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyHighDefinationMonitorRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyHighDefinationMonitorResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInstanceSpecRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInstanceSpecResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInternetSpecRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInternetSpecResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerPayTypeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerPayTypeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyVServerGroupBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyVServerGroupBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveAccessControlListEntryRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveAccessControlListEntryResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveListenerWhiteListItemRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveListenerWhiteListItemResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveTagsRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveTagsResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveVServerGroupBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveVServerGroupBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetAccessControlListAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetAccessControlListAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetAccessLogsDownloadAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetAccessLogsDownloadAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetCACertificateNameRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetCACertificateNameResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetDomainExtensionAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetDomainExtensionAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetListenerAccessControlStatusRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetListenerAccessControlStatusResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerDeleteProtectionRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerDeleteProtectionResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerHTTPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerHTTPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerHTTPSListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerHTTPSListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerModificationProtectionRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerModificationProtectionResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerNameRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerNameResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerStatusRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerStatusResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerTCPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerTCPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerUDPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerUDPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetRuleRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetRuleResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetServerCertificateNameRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetServerCertificateNameResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetTLSCipherPolicyAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetTLSCipherPolicyAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetVServerGroupAttributeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\SetVServerGroupAttributeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\StartLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\StartLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\StopLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\StopLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\UploadCACertificateRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\UploadCACertificateResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\UploadServerCertificateRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\UploadServerCertificateResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Slb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'slb.aliyuncs.com',
            'cn-beijing' => 'slb.aliyuncs.com',
            'cn-hangzhou' => 'slb.aliyuncs.com',
            'cn-shanghai' => 'slb.aliyuncs.com',
            'cn-shenzhen' => 'slb.aliyuncs.com',
            'cn-hongkong' => 'slb.aliyuncs.com',
            'ap-southeast-1' => 'slb.aliyuncs.com',
            'us-east-1' => 'slb.aliyuncs.com',
            'us-west-1' => 'slb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'slb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'slb.aliyuncs.com',
            'cn-north-2-gov-1' => 'slb.aliyuncs.com',
            'ap-northeast-2-pop' => 'slb.aliyuncs.com',
            'cn-beijing-finance-pop' => 'slb.aliyuncs.com',
            'cn-beijing-gov-1' => 'slb.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'slb.aliyuncs.com',
            'cn-edge-1' => 'slb.aliyuncs.com',
            'cn-fujian' => 'slb.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'slb.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'slb.aliyuncs.com',
            'cn-hangzhou-finance' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'slb.aliyuncs.com',
            'cn-hangzhou-test-306' => 'slb.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'slb.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'slb-api.cn-qingdao-nebula.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'slb.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'slb.aliyuncs.com',
            'cn-shanghai-inner' => 'slb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'slb.aliyuncs.com',
            'cn-shenzhen-inner' => 'slb.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'slb.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'slb.aliyuncs.com',
            'cn-wuhan' => 'slb.aliyuncs.com',
            'cn-yushanfang' => 'slb.aliyuncs.com',
            'cn-zhangbei' => 'slb.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'slb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'slb.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'slb.aliyuncs.com',
            'eu-west-1-oxs' => 'slb.aliyuncs.com',
            'rus-west-1-pop' => 'slb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('slb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds IP entries to an access control list (ACL).
     *
     * @remarks
     * Each network ACL can contain one or more IP addresses or CIDR blocks. Take note of the following limits on network ACLs:
     * *   The number of IP entries that can be added to a network ACL with each Alibaba Cloud account at a time: 50
     * *   The maximum number of IP entries that each network ACL can contain: 300
     *
     * @param request - AddAccessControlListEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAccessControlListEntryResponse
     *
     * @param AddAccessControlListEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddAccessControlListEntryResponse
     */
    public function addAccessControlListEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclEntrys) {
            @$query['AclEntrys'] = $request->aclEntrys;
        }

        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAccessControlListEntry',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAccessControlListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds IP entries to an access control list (ACL).
     *
     * @remarks
     * Each network ACL can contain one or more IP addresses or CIDR blocks. Take note of the following limits on network ACLs:
     * *   The number of IP entries that can be added to a network ACL with each Alibaba Cloud account at a time: 50
     * *   The maximum number of IP entries that each network ACL can contain: 300
     *
     * @param request - AddAccessControlListEntryRequest
     *
     * @returns AddAccessControlListEntryResponse
     *
     * @param AddAccessControlListEntryRequest $request
     *
     * @return AddAccessControlListEntryResponse
     */
    public function addAccessControlListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAccessControlListEntryWithOptions($request, $runtime);
    }

    /**
     * Adds backend servers.
     *
     * @remarks
     * >  If multiple identical Elastic Compute Service (ECS) instances are specified in a request, only the first ECS instance is added. The other ECS instances are ignored. If the backend server that you add is the same as one of the existing backend servers that are already associated with the listener, an error message is returned.
     *
     * @param request - AddBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBackendServersResponse
     *
     * @param AddBackendServersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddBackendServersResponse
     */
    public function addBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBackendServers',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds backend servers.
     *
     * @remarks
     * >  If multiple identical Elastic Compute Service (ECS) instances are specified in a request, only the first ECS instance is added. The other ECS instances are ignored. If the backend server that you add is the same as one of the existing backend servers that are already associated with the listener, an error message is returned.
     *
     * @param request - AddBackendServersRequest
     *
     * @returns AddBackendServersResponse
     *
     * @param AddBackendServersRequest $request
     *
     * @return AddBackendServersResponse
     */
    public function addBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBackendServersWithOptions($request, $runtime);
    }

    /**
     * Adds IP addresses to the whitelist of a listener.
     *
     * @param request - AddListenerWhiteListItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddListenerWhiteListItemResponse
     *
     * @param AddListenerWhiteListItemRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddListenerWhiteListItemResponse
     */
    public function addListenerWhiteListItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceItems) {
            @$query['SourceItems'] = $request->sourceItems;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddListenerWhiteListItem',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddListenerWhiteListItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds IP addresses to the whitelist of a listener.
     *
     * @param request - AddListenerWhiteListItemRequest
     *
     * @returns AddListenerWhiteListItemResponse
     *
     * @param AddListenerWhiteListItemRequest $request
     *
     * @return AddListenerWhiteListItemResponse
     */
    public function addListenerWhiteListItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addListenerWhiteListItemWithOptions($request, $runtime);
    }

    /**
     * Adds tags to an SLB instance.
     *
     * @remarks
     * # Limits
     * Before you call this API, note the following limits:
     * *   You can add up to 10 tags to each SLB instance.
     * *   You can add up to five pairs of tags at a time.
     * *   All the tags and keys added to an SLB instance must be unique.
     * *   If you add a tag of which the key is the same as that of an existing tag, but the value is different, the new tag overwrites the existing one.
     *
     * @param request - AddTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTagsResponse
     *
     * @param AddTagsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddTagsResponse
     */
    public function addTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTags',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to an SLB instance.
     *
     * @remarks
     * # Limits
     * Before you call this API, note the following limits:
     * *   You can add up to 10 tags to each SLB instance.
     * *   You can add up to five pairs of tags at a time.
     * *   All the tags and keys added to an SLB instance must be unique.
     * *   If you add a tag of which the key is the same as that of an existing tag, but the value is different, the new tag overwrites the existing one.
     *
     * @param request - AddTagsRequest
     *
     * @returns AddTagsResponse
     *
     * @param AddTagsRequest $request
     *
     * @return AddTagsResponse
     */
    public function addTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsWithOptions($request, $runtime);
    }

    /**
     * Adds backend servers to a vServer group.
     *
     * @param request - AddVServerGroupBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddVServerGroupBackendServersResponse
     *
     * @param AddVServerGroupBackendServersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddVServerGroupBackendServersResponse
     */
    public function addVServerGroupBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddVServerGroupBackendServers',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddVServerGroupBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds backend servers to a vServer group.
     *
     * @param request - AddVServerGroupBackendServersRequest
     *
     * @returns AddVServerGroupBackendServersResponse
     *
     * @param AddVServerGroupBackendServersRequest $request
     *
     * @return AddVServerGroupBackendServersResponse
     */
    public function addVServerGroupBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVServerGroupBackendServersWithOptions($request, $runtime);
    }

    /**
     * Creates an access control list (ACL).
     *
     * @remarks
     * You can create multiple ACLs. Each ACL can contain one or more IP addresses or CIDR blocks. Before you create an ACL, take note of the following limits:
     * *   An account can have a maximum of 50 ACLs in each region.
     * *   You can add a maximum of 50 IP addresses or CIDR blocks at a time within an account.
     * *   Each ACL can contain a maximum of 300 IP addresses or CIDR blocks.
     *
     * @param request - CreateAccessControlListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessControlListResponse
     *
     * @param CreateAccessControlListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAccessControlListResponse
     */
    public function createAccessControlListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclName) {
            @$query['AclName'] = $request->aclName;
        }

        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessControlList',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control list (ACL).
     *
     * @remarks
     * You can create multiple ACLs. Each ACL can contain one or more IP addresses or CIDR blocks. Before you create an ACL, take note of the following limits:
     * *   An account can have a maximum of 50 ACLs in each region.
     * *   You can add a maximum of 50 IP addresses or CIDR blocks at a time within an account.
     * *   Each ACL can contain a maximum of 300 IP addresses or CIDR blocks.
     *
     * @param request - CreateAccessControlListRequest
     *
     * @returns CreateAccessControlListResponse
     *
     * @param CreateAccessControlListRequest $request
     *
     * @return CreateAccessControlListResponse
     */
    public function createAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessControlListWithOptions($request, $runtime);
    }

    /**
     * Adds an additional domain name.
     *
     * @param request - CreateDomainExtensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainExtensionResponse
     *
     * @param CreateDomainExtensionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDomainExtensionResponse
     */
    public function createDomainExtensionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDomainExtension',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDomainExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an additional domain name.
     *
     * @param request - CreateDomainExtensionRequest
     *
     * @returns CreateDomainExtensionResponse
     *
     * @param CreateDomainExtensionRequest $request
     *
     * @return CreateDomainExtensionResponse
     */
    public function createDomainExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainExtensionWithOptions($request, $runtime);
    }

    /**
     * Creates a Classic Load Balancer (CLB) instance.
     *
     * @remarks
     *   Before you create a CLB instance, call the [DescribeAvailableResource](~~DescribeAvailableResource~~) operation to query the resources available for purchase in the region where you want to create the CLB instance.
     * *   After a CLB instance is created, you are charged for using the CLB instance.
     * *   The pay-as-you-go billing method supports the pay-by-specification and pay-by-LCU metering methods.
     *
     * @param request - CreateLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deleteProtection) {
            @$query['DeleteProtection'] = $request->deleteProtection;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->loadBalancerSpec) {
            @$query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }

        if (null !== $request->masterZoneId) {
            @$query['MasterZoneId'] = $request->masterZoneId;
        }

        if (null !== $request->modificationProtectionReason) {
            @$query['ModificationProtectionReason'] = $request->modificationProtectionReason;
        }

        if (null !== $request->modificationProtectionStatus) {
            @$query['ModificationProtectionStatus'] = $request->modificationProtectionStatus;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->slaveZoneId) {
            @$query['SlaveZoneId'] = $request->slaveZoneId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancer',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Classic Load Balancer (CLB) instance.
     *
     * @remarks
     *   Before you create a CLB instance, call the [DescribeAvailableResource](~~DescribeAvailableResource~~) operation to query the resources available for purchase in the region where you want to create the CLB instance.
     * *   After a CLB instance is created, you are charged for using the CLB instance.
     * *   The pay-as-you-go billing method supports the pay-by-specification and pay-by-LCU metering methods.
     *
     * @param request - CreateLoadBalancerRequest
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Creates an HTTP listener for a Classic Load Balancer (CLB) instance.
     *
     * @remarks
     * A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](~~StartLoadBalancerListener~~) operation to start the listener. After the listener is started, the listener can forward traffic to backend servers.
     * ## Prerequisites
     * A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](~~StartLoadBalancerListener~~).
     *
     * @param request - CreateLoadBalancerHTTPListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerHTTPListenerResponse
     *
     * @param CreateLoadBalancerHTTPListenerRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclStatus) {
            @$query['AclStatus'] = $request->aclStatus;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->cookie) {
            @$query['Cookie'] = $request->cookie;
        }

        if (null !== $request->cookieTimeout) {
            @$query['CookieTimeout'] = $request->cookieTimeout;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->forwardPort) {
            @$query['ForwardPort'] = $request->forwardPort;
        }

        if (null !== $request->gzip) {
            @$query['Gzip'] = $request->gzip;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerForward) {
            @$query['ListenerForward'] = $request->listenerForward;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->stickySession) {
            @$query['StickySession'] = $request->stickySession;
        }

        if (null !== $request->stickySessionType) {
            @$query['StickySessionType'] = $request->stickySessionType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->XForwardedFor) {
            @$query['XForwardedFor'] = $request->XForwardedFor;
        }

        if (null !== $request->XForwardedFor_ClientSrcPort) {
            @$query['XForwardedFor_ClientSrcPort'] = $request->XForwardedFor_ClientSrcPort;
        }

        if (null !== $request->XForwardedFor_SLBID) {
            @$query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }

        if (null !== $request->XForwardedFor_SLBIP) {
            @$query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
        }

        if (null !== $request->XForwardedFor_SLBPORT) {
            @$query['XForwardedFor_SLBPORT'] = $request->XForwardedFor_SLBPORT;
        }

        if (null !== $request->XForwardedFor_proto) {
            @$query['XForwardedFor_proto'] = $request->XForwardedFor_proto;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerHTTPListener',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerHTTPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an HTTP listener for a Classic Load Balancer (CLB) instance.
     *
     * @remarks
     * A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](~~StartLoadBalancerListener~~) operation to start the listener. After the listener is started, the listener can forward traffic to backend servers.
     * ## Prerequisites
     * A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](~~StartLoadBalancerListener~~).
     *
     * @param request - CreateLoadBalancerHTTPListenerRequest
     *
     * @returns CreateLoadBalancerHTTPListenerResponse
     *
     * @param CreateLoadBalancerHTTPListenerRequest $request
     *
     * @return CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPListenerWithOptions($request, $runtime);
    }

    /**
     * Creates an HTTPS listener.
     *
     * @remarks
     * A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to start the listener. After the listener is started, the listener can forward traffic to backend servers.
     * ## Prerequisites
     * A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://www.alibabacloud.com/help/en/server-load-balancer/latest/createloadbalancer-2).
     *
     * @param request - CreateLoadBalancerHTTPSListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerHTTPSListenerResponse
     *
     * @param CreateLoadBalancerHTTPSListenerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclStatus) {
            @$query['AclStatus'] = $request->aclStatus;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->CACertificateId) {
            @$query['CACertificateId'] = $request->CACertificateId;
        }

        if (null !== $request->cookie) {
            @$query['Cookie'] = $request->cookie;
        }

        if (null !== $request->cookieTimeout) {
            @$query['CookieTimeout'] = $request->cookieTimeout;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableHttp2) {
            @$query['EnableHttp2'] = $request->enableHttp2;
        }

        if (null !== $request->gzip) {
            @$query['Gzip'] = $request->gzip;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        if (null !== $request->stickySession) {
            @$query['StickySession'] = $request->stickySession;
        }

        if (null !== $request->stickySessionType) {
            @$query['StickySessionType'] = $request->stickySessionType;
        }

        if (null !== $request->TLSCipherPolicy) {
            @$query['TLSCipherPolicy'] = $request->TLSCipherPolicy;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->XForwardedFor) {
            @$query['XForwardedFor'] = $request->XForwardedFor;
        }

        if (null !== $request->XForwardedFor_ClientSrcPort) {
            @$query['XForwardedFor_ClientSrcPort'] = $request->XForwardedFor_ClientSrcPort;
        }

        if (null !== $request->XForwardedFor_SLBID) {
            @$query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }

        if (null !== $request->XForwardedFor_SLBIP) {
            @$query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
        }

        if (null !== $request->XForwardedFor_SLBPORT) {
            @$query['XForwardedFor_SLBPORT'] = $request->XForwardedFor_SLBPORT;
        }

        if (null !== $request->XForwardedFor_proto) {
            @$query['XForwardedFor_proto'] = $request->XForwardedFor_proto;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerHTTPSListener',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerHTTPSListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an HTTPS listener.
     *
     * @remarks
     * A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to start the listener. After the listener is started, the listener can forward traffic to backend servers.
     * ## Prerequisites
     * A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://www.alibabacloud.com/help/en/server-load-balancer/latest/createloadbalancer-2).
     *
     * @param request - CreateLoadBalancerHTTPSListenerRequest
     *
     * @returns CreateLoadBalancerHTTPSListenerResponse
     *
     * @param CreateLoadBalancerHTTPSListenerRequest $request
     *
     * @return CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPSListenerWithOptions($request, $runtime);
    }

    /**
     * Creates a TCP listener.
     *
     * @remarks
     * >  Newly created listeners are in the **stopped** state. After a listener is created, call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/2401757.html) operation to enable the listener to forward network traffic.
     *
     * @param request - CreateLoadBalancerTCPListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerTCPListenerResponse
     *
     * @param CreateLoadBalancerTCPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclStatus) {
            @$query['AclStatus'] = $request->aclStatus;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->connectionDrain) {
            @$query['ConnectionDrain'] = $request->connectionDrain;
        }

        if (null !== $request->connectionDrainTimeout) {
            @$query['ConnectionDrainTimeout'] = $request->connectionDrainTimeout;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->establishedTimeout) {
            @$query['EstablishedTimeout'] = $request->establishedTimeout;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckConnectTimeout) {
            @$query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckSwitch) {
            @$query['HealthCheckSwitch'] = $request->healthCheckSwitch;
        }

        if (null !== $request->healthCheckType) {
            @$query['HealthCheckType'] = $request->healthCheckType;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->masterSlaveServerGroupId) {
            @$query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->persistenceTimeout) {
            @$query['PersistenceTimeout'] = $request->persistenceTimeout;
        }

        if (null !== $request->proxyProtocolV2Enabled) {
            @$query['ProxyProtocolV2Enabled'] = $request->proxyProtocolV2Enabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['healthCheckInterval'] = $request->healthCheckInterval;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerTCPListener',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerTCPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a TCP listener.
     *
     * @remarks
     * >  Newly created listeners are in the **stopped** state. After a listener is created, call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/2401757.html) operation to enable the listener to forward network traffic.
     *
     * @param request - CreateLoadBalancerTCPListenerRequest
     *
     * @returns CreateLoadBalancerTCPListenerResponse
     *
     * @param CreateLoadBalancerTCPListenerRequest $request
     *
     * @return CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerTCPListenerWithOptions($request, $runtime);
    }

    /**
     * Creates a UDP listener.
     *
     * @remarks
     * UDP listeners of Classic Load Balancer (CLB) instances in a classic network cannot pass client IP addresses to backend servers.
     * >  A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to enable the listener to forward traffic to backend servers.
     *
     * @param request - CreateLoadBalancerUDPListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerUDPListenerResponse
     *
     * @param CreateLoadBalancerUDPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclStatus) {
            @$query['AclStatus'] = $request->aclStatus;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckConnectTimeout) {
            @$query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }

        if (null !== $request->healthCheckSwitch) {
            @$query['HealthCheckSwitch'] = $request->healthCheckSwitch;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->masterSlaveServerGroupId) {
            @$query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->proxyProtocolV2Enabled) {
            @$query['ProxyProtocolV2Enabled'] = $request->proxyProtocolV2Enabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->healthCheckExp) {
            @$query['healthCheckExp'] = $request->healthCheckExp;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['healthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckReq) {
            @$query['healthCheckReq'] = $request->healthCheckReq;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerUDPListener',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerUDPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a UDP listener.
     *
     * @remarks
     * UDP listeners of Classic Load Balancer (CLB) instances in a classic network cannot pass client IP addresses to backend servers.
     * >  A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to enable the listener to forward traffic to backend servers.
     *
     * @param request - CreateLoadBalancerUDPListenerRequest
     *
     * @returns CreateLoadBalancerUDPListenerResponse
     *
     * @param CreateLoadBalancerUDPListenerRequest $request
     *
     * @return CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerUDPListenerWithOptions($request, $runtime);
    }

    /**
     * Creates a primary/secondary server group. Each primary/secondary server group consists of two backend servers. One backend server functions as the primary server, and the other backend server functions as the secondary backend server.
     *
     * @param request - CreateMasterSlaveServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMasterSlaveServerGroupResponse
     *
     * @param CreateMasterSlaveServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateMasterSlaveServerGroupResponse
     */
    public function createMasterSlaveServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->masterSlaveBackendServers) {
            @$query['MasterSlaveBackendServers'] = $request->masterSlaveBackendServers;
        }

        if (null !== $request->masterSlaveServerGroupName) {
            @$query['MasterSlaveServerGroupName'] = $request->masterSlaveServerGroupName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMasterSlaveServerGroup',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMasterSlaveServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a primary/secondary server group. Each primary/secondary server group consists of two backend servers. One backend server functions as the primary server, and the other backend server functions as the secondary backend server.
     *
     * @param request - CreateMasterSlaveServerGroupRequest
     *
     * @returns CreateMasterSlaveServerGroupResponse
     *
     * @param CreateMasterSlaveServerGroupRequest $request
     *
     * @return CreateMasterSlaveServerGroupResponse
     */
    public function createMasterSlaveServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMasterSlaveServerGroupWithOptions($request, $runtime);
    }

    /**
     * Creates forwarding rules for an HTTP or HTTPS listener.
     *
     * @param request - CreateRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRulesResponse
     *
     * @param CreateRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRulesResponse
     */
    public function createRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleList) {
            @$query['RuleList'] = $request->ruleList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRules',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates forwarding rules for an HTTP or HTTPS listener.
     *
     * @param request - CreateRulesRequest
     *
     * @returns CreateRulesResponse
     *
     * @param CreateRulesRequest $request
     *
     * @return CreateRulesResponse
     */
    public function createRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRulesWithOptions($request, $runtime);
    }

    /**
     * Creates a Transport Layer Security (TLS) policy.
     *
     * @param request - CreateTLSCipherPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTLSCipherPolicyResponse
     *
     * @param CreateTLSCipherPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateTLSCipherPolicyResponse
     */
    public function createTLSCipherPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ciphers) {
            @$query['Ciphers'] = $request->ciphers;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->TLSVersions) {
            @$query['TLSVersions'] = $request->TLSVersions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTLSCipherPolicy',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTLSCipherPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Transport Layer Security (TLS) policy.
     *
     * @param request - CreateTLSCipherPolicyRequest
     *
     * @returns CreateTLSCipherPolicyResponse
     *
     * @param CreateTLSCipherPolicyRequest $request
     *
     * @return CreateTLSCipherPolicyResponse
     */
    public function createTLSCipherPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTLSCipherPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a vServer group and adds backend servers to the vServer group.
     *
     * @param request - CreateVServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVServerGroupResponse
     *
     * @param CreateVServerGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateVServerGroupResponse
     */
    public function createVServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->VServerGroupName) {
            @$query['VServerGroupName'] = $request->VServerGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVServerGroup',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a vServer group and adds backend servers to the vServer group.
     *
     * @param request - CreateVServerGroupRequest
     *
     * @returns CreateVServerGroupResponse
     *
     * @param CreateVServerGroupRequest $request
     *
     * @return CreateVServerGroupResponse
     */
    public function createVServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVServerGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes an access control list (ACL).
     *
     * @remarks
     * You can delete an ACL only if it is not associated with a listener.
     *
     * @param request - DeleteAccessControlListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessControlListResponse
     *
     * @param DeleteAccessControlListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAccessControlListResponse
     */
    public function deleteAccessControlListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessControlList',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access control list (ACL).
     *
     * @remarks
     * You can delete an ACL only if it is not associated with a listener.
     *
     * @param request - DeleteAccessControlListRequest
     *
     * @returns DeleteAccessControlListResponse
     *
     * @param DeleteAccessControlListRequest $request
     *
     * @return DeleteAccessControlListResponse
     */
    public function deleteAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessControlListWithOptions($request, $runtime);
    }

    /**
     * Deletes the access log of a Classic Load Balancer (CLB) instance.
     *
     * @param request - DeleteAccessLogsDownloadAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessLogsDownloadAttributeResponse
     *
     * @param DeleteAccessLogsDownloadAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteAccessLogsDownloadAttributeResponse
     */
    public function deleteAccessLogsDownloadAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->logsDownloadAttributes) {
            @$query['LogsDownloadAttributes'] = $request->logsDownloadAttributes;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessLogsDownloadAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessLogsDownloadAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the access log of a Classic Load Balancer (CLB) instance.
     *
     * @param request - DeleteAccessLogsDownloadAttributeRequest
     *
     * @returns DeleteAccessLogsDownloadAttributeResponse
     *
     * @param DeleteAccessLogsDownloadAttributeRequest $request
     *
     * @return DeleteAccessLogsDownloadAttributeResponse
     */
    public function deleteAccessLogsDownloadAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessLogsDownloadAttributeWithOptions($request, $runtime);
    }

    /**
     * Deletes a certificate authority (CA) certificate.
     *
     * @remarks
     * You cannot delete a CA certificate that is in use.
     *
     * @param request - DeleteCACertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCACertificateResponse
     *
     * @param DeleteCACertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCACertificateResponse
     */
    public function deleteCACertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->CACertificateId) {
            @$query['CACertificateId'] = $request->CACertificateId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCACertificate',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a certificate authority (CA) certificate.
     *
     * @remarks
     * You cannot delete a CA certificate that is in use.
     *
     * @param request - DeleteCACertificateRequest
     *
     * @returns DeleteCACertificateResponse
     *
     * @param DeleteCACertificateRequest $request
     *
     * @return DeleteCACertificateResponse
     */
    public function deleteCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCACertificateWithOptions($request, $runtime);
    }

    /**
     * Deletes an additional domain name.
     *
     * @param request - DeleteDomainExtensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainExtensionResponse
     *
     * @param DeleteDomainExtensionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDomainExtensionResponse
     */
    public function deleteDomainExtensionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainExtensionId) {
            @$query['DomainExtensionId'] = $request->domainExtensionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomainExtension',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an additional domain name.
     *
     * @param request - DeleteDomainExtensionRequest
     *
     * @returns DeleteDomainExtensionResponse
     *
     * @param DeleteDomainExtensionRequest $request
     *
     * @return DeleteDomainExtensionResponse
     */
    public function deleteDomainExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainExtensionWithOptions($request, $runtime);
    }

    /**
     * Deletes a pay-as-you-go Server Load Balancer (SLB) instance.
     *
     * @remarks
     * > The listeners and tags of the SLB instance are deleted along with the SLB instance.
     *
     * @param request - DeleteLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoadBalancerResponse
     *
     * @param DeleteLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancer',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a pay-as-you-go Server Load Balancer (SLB) instance.
     *
     * @remarks
     * > The listeners and tags of the SLB instance are deleted along with the SLB instance.
     *
     * @param request - DeleteLoadBalancerRequest
     *
     * @returns DeleteLoadBalancerResponse
     *
     * @param DeleteLoadBalancerRequest $request
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Deletes a listener.
     *
     * @remarks
     * >  You can delete only listeners that are in the **stopped** or **running** state.
     *
     * @param request - DeleteLoadBalancerListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoadBalancerListenerResponse
     *
     * @param DeleteLoadBalancerListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancerListener',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a listener.
     *
     * @remarks
     * >  You can delete only listeners that are in the **stopped** or **running** state.
     *
     * @param request - DeleteLoadBalancerListenerRequest
     *
     * @returns DeleteLoadBalancerListenerResponse
     *
     * @param DeleteLoadBalancerListenerRequest $request
     *
     * @return DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * Deletes a primary/secondary server group.
     *
     * @param request - DeleteMasterSlaveServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMasterSlaveServerGroupResponse
     *
     * @param DeleteMasterSlaveServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteMasterSlaveServerGroupResponse
     */
    public function deleteMasterSlaveServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->masterSlaveServerGroupId) {
            @$query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMasterSlaveServerGroup',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMasterSlaveServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a primary/secondary server group.
     *
     * @param request - DeleteMasterSlaveServerGroupRequest
     *
     * @returns DeleteMasterSlaveServerGroupResponse
     *
     * @param DeleteMasterSlaveServerGroupRequest $request
     *
     * @return DeleteMasterSlaveServerGroupResponse
     */
    public function deleteMasterSlaveServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMasterSlaveServerGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes forwarding rules.
     *
     * @remarks
     * You must specify at least one forwarding rule that you want to delete. You can specify at most 10 forwarding rules in each call.
     *
     * @param request - DeleteRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRulesResponse
     *
     * @param DeleteRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteRulesResponse
     */
    public function deleteRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleIds) {
            @$query['RuleIds'] = $request->ruleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRules',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes forwarding rules.
     *
     * @remarks
     * You must specify at least one forwarding rule that you want to delete. You can specify at most 10 forwarding rules in each call.
     *
     * @param request - DeleteRulesRequest
     *
     * @returns DeleteRulesResponse
     *
     * @param DeleteRulesRequest $request
     *
     * @return DeleteRulesResponse
     */
    public function deleteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes a server certificate.
     *
     * @remarks
     * >  You cannot delete server certificates that are in use.
     *
     * @param request - DeleteServerCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServerCertificateResponse
     *
     * @param DeleteServerCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteServerCertificateResponse
     */
    public function deleteServerCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServerCertificate',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServerCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a server certificate.
     *
     * @remarks
     * >  You cannot delete server certificates that are in use.
     *
     * @param request - DeleteServerCertificateRequest
     *
     * @returns DeleteServerCertificateResponse
     *
     * @param DeleteServerCertificateRequest $request
     *
     * @return DeleteServerCertificateResponse
     */
    public function deleteServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerCertificateWithOptions($request, $runtime);
    }

    /**
     * Deletes a TLS policy.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Slb\\&api=DeleteTLSCipherPolicy\\&type=RPC\\&version=2014-05-15)
     *
     * @param request - DeleteTLSCipherPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTLSCipherPolicyResponse
     *
     * @param DeleteTLSCipherPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteTLSCipherPolicyResponse
     */
    public function deleteTLSCipherPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->TLSCipherPolicyId) {
            @$query['TLSCipherPolicyId'] = $request->TLSCipherPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTLSCipherPolicy',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTLSCipherPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a TLS policy.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Slb\\&api=DeleteTLSCipherPolicy\\&type=RPC\\&version=2014-05-15)
     *
     * @param request - DeleteTLSCipherPolicyRequest
     *
     * @returns DeleteTLSCipherPolicyResponse
     *
     * @param DeleteTLSCipherPolicyRequest $request
     *
     * @return DeleteTLSCipherPolicyResponse
     */
    public function deleteTLSCipherPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTLSCipherPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a VServer group.
     *
     * @param request - DeleteVServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVServerGroupResponse
     *
     * @param DeleteVServerGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVServerGroupResponse
     */
    public function deleteVServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVServerGroup',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a VServer group.
     *
     * @param request - DeleteVServerGroupRequest
     *
     * @returns DeleteVServerGroupResponse
     *
     * @param DeleteVServerGroupRequest $request
     *
     * @return DeleteVServerGroupResponse
     */
    public function deleteVServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVServerGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of an access control list (ACL).
     *
     * @param request - DescribeAccessControlListAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessControlListAttributeResponse
     *
     * @param DescribeAccessControlListAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeAccessControlListAttributeResponse
     */
    public function describeAccessControlListAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclEntryComment) {
            @$query['AclEntryComment'] = $request->aclEntryComment;
        }

        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessControlListAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessControlListAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of an access control list (ACL).
     *
     * @param request - DescribeAccessControlListAttributeRequest
     *
     * @returns DescribeAccessControlListAttributeResponse
     *
     * @param DescribeAccessControlListAttributeRequest $request
     *
     * @return DescribeAccessControlListAttributeResponse
     */
    public function describeAccessControlListAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessControlListAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries access control lists (ACLs).
     *
     * @param request - DescribeAccessControlListsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessControlListsResponse
     *
     * @param DescribeAccessControlListsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAccessControlListsResponse
     */
    public function describeAccessControlListsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclName) {
            @$query['AclName'] = $request->aclName;
        }

        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessControlLists',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessControlListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access control lists (ACLs).
     *
     * @param request - DescribeAccessControlListsRequest
     *
     * @returns DescribeAccessControlListsResponse
     *
     * @param DescribeAccessControlListsRequest $request
     *
     * @return DescribeAccessControlListsResponse
     */
    public function describeAccessControlLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessControlListsWithOptions($request, $runtime);
    }

    /**
     * Queries the access log of a Classic Load Balancer (CLB) instance.
     *
     * @param request - DescribeAccessLogsDownloadAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessLogsDownloadAttributeResponse
     *
     * @param DescribeAccessLogsDownloadAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAccessLogsDownloadAttributeResponse
     */
    public function describeAccessLogsDownloadAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessLogsDownloadAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessLogsDownloadAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access log of a Classic Load Balancer (CLB) instance.
     *
     * @param request - DescribeAccessLogsDownloadAttributeRequest
     *
     * @returns DescribeAccessLogsDownloadAttributeResponse
     *
     * @param DescribeAccessLogsDownloadAttributeRequest $request
     *
     * @return DescribeAccessLogsDownloadAttributeResponse
     */
    public function describeAccessLogsDownloadAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessLogsDownloadAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the available resources and resources that are available for purchase in the zones of a region.
     *
     * @remarks
     * > Only the available resources and zones are returned.
     *
     * @param request - DescribeAvailableResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableResource',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available resources and resources that are available for purchase in the zones of a region.
     *
     * @remarks
     * > Only the available resources and zones are returned.
     *
     * @param request - DescribeAvailableResourceRequest
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @param DescribeAvailableResourceRequest $request
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * Queries certificate authority (CA) certificates.
     *
     * @remarks
     * > To ensure data confidentiality, only the certificate fingerprint and name are returned. The certificate content is not returned.
     *
     * @param request - DescribeCACertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCACertificatesResponse
     *
     * @param DescribeCACertificatesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCACertificatesResponse
     */
    public function describeCACertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->CACertificateId) {
            @$query['CACertificateId'] = $request->CACertificateId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCACertificates',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCACertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries certificate authority (CA) certificates.
     *
     * @remarks
     * > To ensure data confidentiality, only the certificate fingerprint and name are returned. The certificate content is not returned.
     *
     * @param request - DescribeCACertificatesRequest
     *
     * @returns DescribeCACertificatesResponse
     *
     * @param DescribeCACertificatesRequest $request
     *
     * @return DescribeCACertificatesResponse
     */
    public function describeCACertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificatesWithOptions($request, $runtime);
    }

    /**
     * Queries the attributes of an additional domain name.
     *
     * @param request - DescribeDomainExtensionAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainExtensionAttributeResponse
     *
     * @param DescribeDomainExtensionAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDomainExtensionAttributeResponse
     */
    public function describeDomainExtensionAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainExtensionId) {
            @$query['DomainExtensionId'] = $request->domainExtensionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainExtensionAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainExtensionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attributes of an additional domain name.
     *
     * @param request - DescribeDomainExtensionAttributeRequest
     *
     * @returns DescribeDomainExtensionAttributeResponse
     *
     * @param DescribeDomainExtensionAttributeRequest $request
     *
     * @return DescribeDomainExtensionAttributeResponse
     */
    public function describeDomainExtensionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainExtensionAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries additional domain names.
     *
     * @param request - DescribeDomainExtensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainExtensionsResponse
     *
     * @param DescribeDomainExtensionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainExtensionsResponse
     */
    public function describeDomainExtensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainExtensionId) {
            @$query['DomainExtensionId'] = $request->domainExtensionId;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainExtensions',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries additional domain names.
     *
     * @param request - DescribeDomainExtensionsRequest
     *
     * @returns DescribeDomainExtensionsResponse
     *
     * @param DescribeDomainExtensionsRequest $request
     *
     * @return DescribeDomainExtensionsResponse
     */
    public function describeDomainExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainExtensionsWithOptions($request, $runtime);
    }

    /**
     * Queries the health status of backend servers.
     *
     * @param request - DescribeHealthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHealthStatusResponse
     *
     * @param DescribeHealthStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHealthStatusResponse
     */
    public function describeHealthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHealthStatus',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health status of backend servers.
     *
     * @param request - DescribeHealthStatusRequest
     *
     * @returns DescribeHealthStatusResponse
     *
     * @param DescribeHealthStatusRequest $request
     *
     * @return DescribeHealthStatusResponse
     */
    public function describeHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of fine-grained monitoring in a region.
     *
     * @param request - DescribeHighDefinationMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHighDefinationMonitorResponse
     *
     * @param DescribeHighDefinationMonitorRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHighDefinationMonitorResponse
     */
    public function describeHighDefinationMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHighDefinationMonitor',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHighDefinationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of fine-grained monitoring in a region.
     *
     * @param request - DescribeHighDefinationMonitorRequest
     *
     * @returns DescribeHighDefinationMonitorResponse
     *
     * @param DescribeHighDefinationMonitorRequest $request
     *
     * @return DescribeHighDefinationMonitorResponse
     */
    public function describeHighDefinationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighDefinationMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries the whitelist configurations of a listener.
     *
     * @param request - DescribeListenerAccessControlAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeListenerAccessControlAttributeResponse
     *
     * @param DescribeListenerAccessControlAttributeRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeListenerAccessControlAttributeResponse
     */
    public function describeListenerAccessControlAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeListenerAccessControlAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeListenerAccessControlAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the whitelist configurations of a listener.
     *
     * @param request - DescribeListenerAccessControlAttributeRequest
     *
     * @returns DescribeListenerAccessControlAttributeResponse
     *
     * @param DescribeListenerAccessControlAttributeRequest $request
     *
     * @return DescribeListenerAccessControlAttributeResponse
     */
    public function describeListenerAccessControlAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListenerAccessControlAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the detail of a Classic Load Balancer (CLB) instance.
     *
     * @remarks
     * >  If backend servers are deployed in a vServer group, you can call the [DescribeVServerGroupAttribute](https://help.aliyun.com/document_detail/35224.html) operation to query the backend servers.
     *
     * @param request - DescribeLoadBalancerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerAttributeResponse
     *
     * @param DescribeLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detail of a Classic Load Balancer (CLB) instance.
     *
     * @remarks
     * >  If backend servers are deployed in a vServer group, you can call the [DescribeVServerGroupAttribute](https://help.aliyun.com/document_detail/35224.html) operation to query the backend servers.
     *
     * @param request - DescribeLoadBalancerAttributeRequest
     *
     * @returns DescribeLoadBalancerAttributeResponse
     *
     * @param DescribeLoadBalancerAttributeRequest $request
     *
     * @return DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an HTTP listener.
     *
     * @remarks
     *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTP listener is created. For more information about how to create an HTTP listener, see [CreateLoadBalancerHTTPListener](https://help.aliyun.com/document_detail/27592.html).
     *
     * @param request - DescribeLoadBalancerHTTPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerHTTPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerHTTPListenerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an HTTP listener.
     *
     * @remarks
     *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTP listener is created. For more information about how to create an HTTP listener, see [CreateLoadBalancerHTTPListener](https://help.aliyun.com/document_detail/27592.html).
     *
     * @param request - DescribeLoadBalancerHTTPListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerHTTPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an HTTPS listener.
     *
     * @remarks
     *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTPS listener is created. For more information about how to create an HTTPS listener, see [CreateLoadBalancerHTTPSListener](https://help.aliyun.com/document_detail/27593.html).
     *
     * @param request - DescribeLoadBalancerHTTPSListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerHTTPSListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerHTTPSListenerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an HTTPS listener.
     *
     * @remarks
     *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTPS listener is created. For more information about how to create an HTTPS listener, see [CreateLoadBalancerHTTPSListener](https://help.aliyun.com/document_detail/27593.html).
     *
     * @param request - DescribeLoadBalancerHTTPSListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerHTTPSListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the listeners of a Classic Load Balancer (CLB) instance.
     *
     * @remarks
     *   A CLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/2401685.html).
     * *   One or more listeners are added to the CLB instance. For more information, see the following topics:
     *     *   [CreateLoadBalancerUDPListener](~~CreateLoadBalancerUDPListener~~)
     *     *   [CreateLoadBalancerTCPListener](~~CreateLoadBalancerTCPListener~~)
     *     *   [CreateLoadBalancerHTTPListener](~~CreateLoadBalancerHTTPListener~~)
     *     *   [CreateLoadBalancerHTTPSListener](~~CreateLoadBalancerHTTPSListener~~)
     *
     * @param request - DescribeLoadBalancerListenersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerListenersResponse
     *
     * @param DescribeLoadBalancerListenersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLoadBalancerListenersResponse
     */
    public function describeLoadBalancerListenersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerListeners',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the listeners of a Classic Load Balancer (CLB) instance.
     *
     * @remarks
     *   A CLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/2401685.html).
     * *   One or more listeners are added to the CLB instance. For more information, see the following topics:
     *     *   [CreateLoadBalancerUDPListener](~~CreateLoadBalancerUDPListener~~)
     *     *   [CreateLoadBalancerTCPListener](~~CreateLoadBalancerTCPListener~~)
     *     *   [CreateLoadBalancerHTTPListener](~~CreateLoadBalancerHTTPListener~~)
     *     *   [CreateLoadBalancerHTTPSListener](~~CreateLoadBalancerHTTPSListener~~)
     *
     * @param request - DescribeLoadBalancerListenersRequest
     *
     * @returns DescribeLoadBalancerListenersResponse
     *
     * @param DescribeLoadBalancerListenersRequest $request
     *
     * @return DescribeLoadBalancerListenersResponse
     */
    public function describeLoadBalancerListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerListenersWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a TCP listener of Classic Load Balancer (CLB).
     *
     * @param request - DescribeLoadBalancerTCPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerTCPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerTCPListenerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a TCP listener of Classic Load Balancer (CLB).
     *
     * @param request - DescribeLoadBalancerTCPListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerTCPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a UDP listener.
     *
     * @param request - DescribeLoadBalancerUDPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerUDPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerUDPListenerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a UDP listener.
     *
     * @param request - DescribeLoadBalancerUDPListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerUDPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries Classic Load Balancer (CLB) instances.
     *
     * @param request - DescribeLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancersResponse
     *
     * @param DescribeLoadBalancersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->loadBalancerStatus) {
            @$query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }

        if (null !== $request->masterZoneId) {
            @$query['MasterZoneId'] = $request->masterZoneId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serverId) {
            @$query['ServerId'] = $request->serverId;
        }

        if (null !== $request->serverIntranetAddress) {
            @$query['ServerIntranetAddress'] = $request->serverIntranetAddress;
        }

        if (null !== $request->slaveZoneId) {
            @$query['SlaveZoneId'] = $request->slaveZoneId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancers',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Classic Load Balancer (CLB) instances.
     *
     * @param request - DescribeLoadBalancersRequest
     *
     * @returns DescribeLoadBalancersResponse
     *
     * @param DescribeLoadBalancersRequest $request
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed information about a primary/secondary server group.
     *
     * @param request - DescribeMasterSlaveServerGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMasterSlaveServerGroupAttributeResponse
     *
     * @param DescribeMasterSlaveServerGroupAttributeRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeMasterSlaveServerGroupAttributeResponse
     */
    public function describeMasterSlaveServerGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->masterSlaveServerGroupId) {
            @$query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMasterSlaveServerGroupAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMasterSlaveServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a primary/secondary server group.
     *
     * @param request - DescribeMasterSlaveServerGroupAttributeRequest
     *
     * @returns DescribeMasterSlaveServerGroupAttributeResponse
     *
     * @param DescribeMasterSlaveServerGroupAttributeRequest $request
     *
     * @return DescribeMasterSlaveServerGroupAttributeResponse
     */
    public function describeMasterSlaveServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMasterSlaveServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries primary/secondary server groups.
     *
     * @param request - DescribeMasterSlaveServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMasterSlaveServerGroupsResponse
     *
     * @param DescribeMasterSlaveServerGroupsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMasterSlaveServerGroupsResponse
     */
    public function describeMasterSlaveServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->includeListener) {
            @$query['IncludeListener'] = $request->includeListener;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMasterSlaveServerGroups',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMasterSlaveServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries primary/secondary server groups.
     *
     * @param request - DescribeMasterSlaveServerGroupsRequest
     *
     * @returns DescribeMasterSlaveServerGroupsResponse
     *
     * @param DescribeMasterSlaveServerGroupsRequest $request
     *
     * @return DescribeMasterSlaveServerGroupsResponse
     */
    public function describeMasterSlaveServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMasterSlaveServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries available regions.
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2014-05-15',
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
     * Queries available regions.
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
     * Queries the configurations of a specified forwarding rule.
     *
     * @param request - DescribeRuleAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleAttributeResponse
     *
     * @param DescribeRuleAttributeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRuleAttributeResponse
     */
    public function describeRuleAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a specified forwarding rule.
     *
     * @param request - DescribeRuleAttributeRequest
     *
     * @returns DescribeRuleAttributeResponse
     *
     * @param DescribeRuleAttributeRequest $request
     *
     * @return DescribeRuleAttributeResponse
     */
    public function describeRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the forwarding rules that are configured for a specified listener.
     *
     * @param request - DescribeRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRulesResponse
     *
     * @param DescribeRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRulesResponse
     */
    public function describeRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRules',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the forwarding rules that are configured for a specified listener.
     *
     * @param request - DescribeRulesRequest
     *
     * @returns DescribeRulesResponse
     *
     * @param DescribeRulesRequest $request
     *
     * @return DescribeRulesResponse
     */
    public function describeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the server certificates in a region.
     *
     * @remarks
     * >  For security reasons, only the fingerprints and names of server certificates are returned. The content of server certificates and private keys is not returned.
     *
     * @param request - DescribeServerCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServerCertificatesResponse
     *
     * @param DescribeServerCertificatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeServerCertificatesResponse
     */
    public function describeServerCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServerCertificates',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServerCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the server certificates in a region.
     *
     * @remarks
     * >  For security reasons, only the fingerprints and names of server certificates are returned. The content of server certificates and private keys is not returned.
     *
     * @param request - DescribeServerCertificatesRequest
     *
     * @returns DescribeServerCertificatesResponse
     *
     * @param DescribeServerCertificatesRequest $request
     *
     * @return DescribeServerCertificatesResponse
     */
    public function describeServerCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerCertificatesWithOptions($request, $runtime);
    }

    /**
     * Queries tags.
     *
     * @remarks
     * Take note of the following items:
     * *   The system queries tags based on the instance ID, tag key, and tag value specified by you.
     * *   If the logical relationship among the specified conditions is AND, only tags that match all the specified conditions are returned.
     * *   If the Tagkey parameter is specified and but Tagvalue parameter is not specified, all tags that contain the specified tag key are returned.
     * *   If you specify the Tagvalue parameter in a request, you must also specify the Tagkey parameter in the request.
     * *   If you specify both the Tagkey and Tagvalue parameters, only tags that contain the specified keys and values are returned.
     *
     * @param request - DescribeTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->distinctKey) {
            @$query['DistinctKey'] = $request->distinctKey;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTags',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tags.
     *
     * @remarks
     * Take note of the following items:
     * *   The system queries tags based on the instance ID, tag key, and tag value specified by you.
     * *   If the logical relationship among the specified conditions is AND, only tags that match all the specified conditions are returned.
     * *   If the Tagkey parameter is specified and but Tagvalue parameter is not specified, all tags that contain the specified tag key are returned.
     * *   If you specify the Tagvalue parameter in a request, you must also specify the Tagkey parameter in the request.
     * *   If you specify both the Tagkey and Tagvalue parameters, only tags that contain the specified keys and values are returned.
     *
     * @param request - DescribeTagsRequest
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed information about a vServer group.
     *
     * @param request - DescribeVServerGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVServerGroupAttributeResponse
     *
     * @param DescribeVServerGroupAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVServerGroupAttributeResponse
     */
    public function describeVServerGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVServerGroupAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a vServer group.
     *
     * @param request - DescribeVServerGroupAttributeRequest
     *
     * @returns DescribeVServerGroupAttributeResponse
     *
     * @param DescribeVServerGroupAttributeRequest $request
     *
     * @return DescribeVServerGroupAttributeResponse
     */
    public function describeVServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries vServer groups.
     *
     * @param request - DescribeVServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVServerGroupsResponse
     *
     * @param DescribeVServerGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVServerGroupsResponse
     */
    public function describeVServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->includeListener) {
            @$query['IncludeListener'] = $request->includeListener;
        }

        if (null !== $request->includeRule) {
            @$query['IncludeRule'] = $request->includeRule;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVServerGroups',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries vServer groups.
     *
     * @param request - DescribeVServerGroupsRequest
     *
     * @returns DescribeVServerGroupsResponse
     *
     * @param DescribeVServerGroupsRequest $request
     *
     * @return DescribeVServerGroupsResponse
     */
    public function describeVServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the zones in a region.
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the zones in a region.
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * Enables fine-grained monitoring for the current region.
     *
     * @param request - EnableHighDefinationMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableHighDefinationMonitorResponse
     *
     * @param EnableHighDefinationMonitorRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableHighDefinationMonitorResponse
     */
    public function enableHighDefinationMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logProject) {
            @$query['LogProject'] = $request->logProject;
        }

        if (null !== $request->logStore) {
            @$query['LogStore'] = $request->logStore;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableHighDefinationMonitor',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableHighDefinationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables fine-grained monitoring for the current region.
     *
     * @param request - EnableHighDefinationMonitorRequest
     *
     * @returns EnableHighDefinationMonitorResponse
     *
     * @param EnableHighDefinationMonitorRequest $request
     *
     * @return EnableHighDefinationMonitorResponse
     */
    public function enableHighDefinationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHighDefinationMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries Transport Layer Security (TLS) policies.
     *
     * @param request - ListTLSCipherPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTLSCipherPoliciesResponse
     *
     * @param ListTLSCipherPoliciesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTLSCipherPoliciesResponse
     */
    public function listTLSCipherPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeListener) {
            @$query['IncludeListener'] = $request->includeListener;
        }

        if (null !== $request->maxItems) {
            @$query['MaxItems'] = $request->maxItems;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->TLSCipherPolicyId) {
            @$query['TLSCipherPolicyId'] = $request->TLSCipherPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTLSCipherPolicies',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTLSCipherPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Transport Layer Security (TLS) policies.
     *
     * @param request - ListTLSCipherPoliciesRequest
     *
     * @returns ListTLSCipherPoliciesResponse
     *
     * @param ListTLSCipherPoliciesRequest $request
     *
     * @return ListTLSCipherPoliciesResponse
     */
    public function listTLSCipherPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTLSCipherPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to resources.
     *
     * @remarks
     *   Set **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object to be queried.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you set only **Tag.N.Key**, all tag values that are associated with the specified tag key are returned. If you set only **Tag.N.Value**, an error message is returned.
     * *   If you set **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2014-05-15',
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
     * Queries the tags that are added to resources.
     *
     * @remarks
     *   Set **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object to be queried.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you set only **Tag.N.Key**, all tag values that are associated with the specified tag key are returned. If you set only **Tag.N.Value**, an error message is returned.
     * *   If you set **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
     * Modifies the configuration of fine-grained monitoring in a specified region.
     *
     * @param request - ModifyHighDefinationMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHighDefinationMonitorResponse
     *
     * @param ModifyHighDefinationMonitorRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyHighDefinationMonitorResponse
     */
    public function modifyHighDefinationMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logProject) {
            @$query['LogProject'] = $request->logProject;
        }

        if (null !== $request->logStore) {
            @$query['LogStore'] = $request->logStore;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHighDefinationMonitor',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHighDefinationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of fine-grained monitoring in a specified region.
     *
     * @param request - ModifyHighDefinationMonitorRequest
     *
     * @returns ModifyHighDefinationMonitorResponse
     *
     * @param ModifyHighDefinationMonitorRequest $request
     *
     * @return ModifyHighDefinationMonitorResponse
     */
    public function modifyHighDefinationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHighDefinationMonitorWithOptions($request, $runtime);
    }

    /**
     * Changes the metering method of a pay-as-you-go Classic Load Balancer (CLB) instance.
     *
     * @remarks
     * > *   For pay-as-you-go CLB instances, you can only change the metering method from pay-by-specification to pay-by-LCU. You cannot change the metering method from pay-by-LCU to pay-by-specification.
     * >*   This operation can change the metering method of only one instance at a time.
     *
     * @param request - ModifyLoadBalancerInstanceChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLoadBalancerInstanceChargeTypeResponse
     *
     * @param ModifyLoadBalancerInstanceChargeTypeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ModifyLoadBalancerInstanceChargeTypeResponse
     */
    public function modifyLoadBalancerInstanceChargeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerSpec) {
            @$query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLoadBalancerInstanceChargeType',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLoadBalancerInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the metering method of a pay-as-you-go Classic Load Balancer (CLB) instance.
     *
     * @remarks
     * > *   For pay-as-you-go CLB instances, you can only change the metering method from pay-by-specification to pay-by-LCU. You cannot change the metering method from pay-by-LCU to pay-by-specification.
     * >*   This operation can change the metering method of only one instance at a time.
     *
     * @param request - ModifyLoadBalancerInstanceChargeTypeRequest
     *
     * @returns ModifyLoadBalancerInstanceChargeTypeResponse
     *
     * @param ModifyLoadBalancerInstanceChargeTypeRequest $request
     *
     * @return ModifyLoadBalancerInstanceChargeTypeResponse
     */
    public function modifyLoadBalancerInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the specification of a Classic Load Balancer (CLB) instance.
     *
     * @param request - ModifyLoadBalancerInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLoadBalancerInstanceSpecResponse
     *
     * @param ModifyLoadBalancerInstanceSpecRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyLoadBalancerInstanceSpecResponse
     */
    public function modifyLoadBalancerInstanceSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerSpec) {
            @$query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLoadBalancerInstanceSpec',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLoadBalancerInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the specification of a Classic Load Balancer (CLB) instance.
     *
     * @param request - ModifyLoadBalancerInstanceSpecRequest
     *
     * @returns ModifyLoadBalancerInstanceSpecResponse
     *
     * @param ModifyLoadBalancerInstanceSpecRequest $request
     *
     * @return ModifyLoadBalancerInstanceSpecResponse
     */
    public function modifyLoadBalancerInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * Modifies the metering method of an Internet-facing Classic Load Balancer (CLB) instance.
     *
     * @remarks
     * ## Description
     * *   If you modify only the maximum bandwidth of a pay-by-bandwidth CLB instance, the new bandwidth immediately takes effect.
     * *   If you modify the metering method (for example, switch from pay-by-bandwidth to pay-by-data-transfer), the new metering method and the other changes specified in the operation take effect at 00:00:00 the next day.
     *
     * @param request - ModifyLoadBalancerInternetSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLoadBalancerInternetSpecResponse
     *
     * @param ModifyLoadBalancerInternetSpecRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyLoadBalancerInternetSpecResponse
     */
    public function modifyLoadBalancerInternetSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLoadBalancerInternetSpec',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLoadBalancerInternetSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the metering method of an Internet-facing Classic Load Balancer (CLB) instance.
     *
     * @remarks
     * ## Description
     * *   If you modify only the maximum bandwidth of a pay-by-bandwidth CLB instance, the new bandwidth immediately takes effect.
     * *   If you modify the metering method (for example, switch from pay-by-bandwidth to pay-by-data-transfer), the new metering method and the other changes specified in the operation take effect at 00:00:00 the next day.
     *
     * @param request - ModifyLoadBalancerInternetSpecRequest
     *
     * @returns ModifyLoadBalancerInternetSpecResponse
     *
     * @param ModifyLoadBalancerInternetSpecRequest $request
     *
     * @return ModifyLoadBalancerInternetSpecResponse
     */
    public function modifyLoadBalancerInternetSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerInternetSpecWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of a Classic Load Balancer (CLB) instance from pay-as-you-go to subscription.
     *
     * @deprecated OpenAPI ModifyLoadBalancerPayType is deprecated
     *
     * @param request - ModifyLoadBalancerPayTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLoadBalancerPayTypeResponse
     *
     * @param ModifyLoadBalancerPayTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyLoadBalancerPayTypeResponse
     */
    public function modifyLoadBalancerPayTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLoadBalancerPayType',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLoadBalancerPayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Changes the billing method of a Classic Load Balancer (CLB) instance from pay-as-you-go to subscription.
     *
     * @deprecated OpenAPI ModifyLoadBalancerPayType is deprecated
     *
     * @param request - ModifyLoadBalancerPayTypeRequest
     *
     * @returns ModifyLoadBalancerPayTypeResponse
     *
     * @param ModifyLoadBalancerPayTypeRequest $request
     *
     * @return ModifyLoadBalancerPayTypeResponse
     */
    public function modifyLoadBalancerPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerPayTypeWithOptions($request, $runtime);
    }

    /**
     * Replaces backend servers in a vServer group.
     *
     * @remarks
     * This operation can be used only to replace backend servers in a vServer group. To modify the attributes of backend servers, such as weights, call the [SetVServerGroupAttribute](https://help.aliyun.com/document_detail/35217.html) operation.
     *
     * @param request - ModifyVServerGroupBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVServerGroupBackendServersResponse
     *
     * @param ModifyVServerGroupBackendServersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyVServerGroupBackendServersResponse
     */
    public function modifyVServerGroupBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newBackendServers) {
            @$query['NewBackendServers'] = $request->newBackendServers;
        }

        if (null !== $request->oldBackendServers) {
            @$query['OldBackendServers'] = $request->oldBackendServers;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVServerGroupBackendServers',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVServerGroupBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replaces backend servers in a vServer group.
     *
     * @remarks
     * This operation can be used only to replace backend servers in a vServer group. To modify the attributes of backend servers, such as weights, call the [SetVServerGroupAttribute](https://help.aliyun.com/document_detail/35217.html) operation.
     *
     * @param request - ModifyVServerGroupBackendServersRequest
     *
     * @returns ModifyVServerGroupBackendServersResponse
     *
     * @param ModifyVServerGroupBackendServersRequest $request
     *
     * @return ModifyVServerGroupBackendServersResponse
     */
    public function modifyVServerGroupBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVServerGroupBackendServersWithOptions($request, $runtime);
    }

    /**
     * Moves a resource to another resource group.
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
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2014-05-15',
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
     * Moves a resource to another resource group.
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
     * Removes IP entries from the network access control list (ACL) of a Classic Load Balancer (CLB) instance.
     *
     * @param request - RemoveAccessControlListEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAccessControlListEntryResponse
     *
     * @param RemoveAccessControlListEntryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveAccessControlListEntryResponse
     */
    public function removeAccessControlListEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclEntrys) {
            @$query['AclEntrys'] = $request->aclEntrys;
        }

        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveAccessControlListEntry',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveAccessControlListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes IP entries from the network access control list (ACL) of a Classic Load Balancer (CLB) instance.
     *
     * @param request - RemoveAccessControlListEntryRequest
     *
     * @returns RemoveAccessControlListEntryResponse
     *
     * @param RemoveAccessControlListEntryRequest $request
     *
     * @return RemoveAccessControlListEntryResponse
     */
    public function removeAccessControlListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAccessControlListEntryWithOptions($request, $runtime);
    }

    /**
     * Removes backend servers.
     *
     * @remarks
     * >  If the backend servers that you want to remove are not in the server list of the Classic Load Balancer (CLB) instance, the request fails. However, the system does not report an error.
     *
     * @param request - RemoveBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveBackendServersResponse
     *
     * @param RemoveBackendServersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveBackendServersResponse
     */
    public function removeBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveBackendServers',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes backend servers.
     *
     * @remarks
     * >  If the backend servers that you want to remove are not in the server list of the Classic Load Balancer (CLB) instance, the request fails. However, the system does not report an error.
     *
     * @param request - RemoveBackendServersRequest
     *
     * @returns RemoveBackendServersResponse
     *
     * @param RemoveBackendServersRequest $request
     *
     * @return RemoveBackendServersResponse
     */
    public function removeBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackendServersWithOptions($request, $runtime);
    }

    /**
     * Removes IP addresses or CIDR blocks from the whitelist of a listener.
     *
     * @param request - RemoveListenerWhiteListItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveListenerWhiteListItemResponse
     *
     * @param RemoveListenerWhiteListItemRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveListenerWhiteListItemResponse
     */
    public function removeListenerWhiteListItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceItems) {
            @$query['SourceItems'] = $request->sourceItems;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveListenerWhiteListItem',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveListenerWhiteListItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes IP addresses or CIDR blocks from the whitelist of a listener.
     *
     * @param request - RemoveListenerWhiteListItemRequest
     *
     * @returns RemoveListenerWhiteListItemResponse
     *
     * @param RemoveListenerWhiteListItemRequest $request
     *
     * @return RemoveListenerWhiteListItemResponse
     */
    public function removeListenerWhiteListItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeListenerWhiteListItemWithOptions($request, $runtime);
    }

    /**
     * Removes tags from a Server Load Balancer (SLB) instance.
     *
     * @param request - RemoveTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveTagsResponse
     *
     * @param RemoveTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RemoveTagsResponse
     */
    public function removeTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveTags',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from a Server Load Balancer (SLB) instance.
     *
     * @param request - RemoveTagsRequest
     *
     * @returns RemoveTagsResponse
     *
     * @param RemoveTagsRequest $request
     *
     * @return RemoveTagsResponse
     */
    public function removeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * Removes backend servers from a vServer group.
     *
     * @remarks
     * >  If the backend servers specified by the **BackendServers** parameter do not exist in the vServer group, the backend servers are ignored. No error message is returned.
     *
     * @param request - RemoveVServerGroupBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveVServerGroupBackendServersResponse
     *
     * @param RemoveVServerGroupBackendServersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveVServerGroupBackendServersResponse
     */
    public function removeVServerGroupBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveVServerGroupBackendServers',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveVServerGroupBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes backend servers from a vServer group.
     *
     * @remarks
     * >  If the backend servers specified by the **BackendServers** parameter do not exist in the vServer group, the backend servers are ignored. No error message is returned.
     *
     * @param request - RemoveVServerGroupBackendServersRequest
     *
     * @returns RemoveVServerGroupBackendServersResponse
     *
     * @param RemoveVServerGroupBackendServersRequest $request
     *
     * @return RemoveVServerGroupBackendServersResponse
     */
    public function removeVServerGroupBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVServerGroupBackendServersWithOptions($request, $runtime);
    }

    /**
     * Renames an access control list (ACL).
     *
     * @param request - SetAccessControlListAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAccessControlListAttributeResponse
     *
     * @param SetAccessControlListAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetAccessControlListAttributeResponse
     */
    public function setAccessControlListAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclName) {
            @$query['AclName'] = $request->aclName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAccessControlListAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAccessControlListAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renames an access control list (ACL).
     *
     * @param request - SetAccessControlListAttributeRequest
     *
     * @returns SetAccessControlListAttributeResponse
     *
     * @param SetAccessControlListAttributeRequest $request
     *
     * @return SetAccessControlListAttributeResponse
     */
    public function setAccessControlListAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessControlListAttributeWithOptions($request, $runtime);
    }

    /**
     * Adds an access log forwarding rule to a Classic Load Balancer (CLB) instance.
     *
     * @param request - SetAccessLogsDownloadAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAccessLogsDownloadAttributeResponse
     *
     * @param SetAccessLogsDownloadAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SetAccessLogsDownloadAttributeResponse
     */
    public function setAccessLogsDownloadAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->logsDownloadAttributes) {
            @$query['LogsDownloadAttributes'] = $request->logsDownloadAttributes;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAccessLogsDownloadAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAccessLogsDownloadAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an access log forwarding rule to a Classic Load Balancer (CLB) instance.
     *
     * @param request - SetAccessLogsDownloadAttributeRequest
     *
     * @returns SetAccessLogsDownloadAttributeResponse
     *
     * @param SetAccessLogsDownloadAttributeRequest $request
     *
     * @return SetAccessLogsDownloadAttributeResponse
     */
    public function setAccessLogsDownloadAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessLogsDownloadAttributeWithOptions($request, $runtime);
    }

    /**
     * Specifies weights for backend servers.
     *
     * @param request - SetBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetBackendServersResponse
     *
     * @param SetBackendServersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetBackendServersResponse
     */
    public function setBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetBackendServers',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies weights for backend servers.
     *
     * @param request - SetBackendServersRequest
     *
     * @returns SetBackendServersResponse
     *
     * @param SetBackendServersRequest $request
     *
     * @return SetBackendServersResponse
     */
    public function setBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackendServersWithOptions($request, $runtime);
    }

    /**
     * Specifies a name for a CA certificate.
     *
     * @param request - SetCACertificateNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCACertificateNameResponse
     *
     * @param SetCACertificateNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetCACertificateNameResponse
     */
    public function setCACertificateNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->CACertificateId) {
            @$query['CACertificateId'] = $request->CACertificateId;
        }

        if (null !== $request->CACertificateName) {
            @$query['CACertificateName'] = $request->CACertificateName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCACertificateName',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCACertificateNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies a name for a CA certificate.
     *
     * @param request - SetCACertificateNameRequest
     *
     * @returns SetCACertificateNameResponse
     *
     * @param SetCACertificateNameRequest $request
     *
     * @return SetCACertificateNameResponse
     */
    public function setCACertificateName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCACertificateNameWithOptions($request, $runtime);
    }

    /**
     * Replaces the certificate of an additional domain name.
     *
     * @remarks
     * >  You cannot replace an additional certificate for a listener that is added to a shared-resource Server Load Balancer (SLB) instance.
     *
     * @param request - SetDomainExtensionAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDomainExtensionAttributeResponse
     *
     * @param SetDomainExtensionAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDomainExtensionAttributeResponse
     */
    public function setDomainExtensionAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainExtensionId) {
            @$query['DomainExtensionId'] = $request->domainExtensionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDomainExtensionAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDomainExtensionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replaces the certificate of an additional domain name.
     *
     * @remarks
     * >  You cannot replace an additional certificate for a listener that is added to a shared-resource Server Load Balancer (SLB) instance.
     *
     * @param request - SetDomainExtensionAttributeRequest
     *
     * @returns SetDomainExtensionAttributeResponse
     *
     * @param SetDomainExtensionAttributeRequest $request
     *
     * @return SetDomainExtensionAttributeResponse
     */
    public function setDomainExtensionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainExtensionAttributeWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the whitelist of a specified listener.
     *
     * @param request - SetListenerAccessControlStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetListenerAccessControlStatusResponse
     *
     * @param SetListenerAccessControlStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SetListenerAccessControlStatusResponse
     */
    public function setListenerAccessControlStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessControlStatus) {
            @$query['AccessControlStatus'] = $request->accessControlStatus;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetListenerAccessControlStatus',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetListenerAccessControlStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the whitelist of a specified listener.
     *
     * @param request - SetListenerAccessControlStatusRequest
     *
     * @returns SetListenerAccessControlStatusResponse
     *
     * @param SetListenerAccessControlStatusRequest $request
     *
     * @return SetListenerAccessControlStatusResponse
     */
    public function setListenerAccessControlStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setListenerAccessControlStatusWithOptions($request, $runtime);
    }

    /**
     * Enables or disables deletion protection for an SLB instance.
     *
     * @param request - SetLoadBalancerDeleteProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerDeleteProtectionResponse
     *
     * @param SetLoadBalancerDeleteProtectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetLoadBalancerDeleteProtectionResponse
     */
    public function setLoadBalancerDeleteProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteProtection) {
            @$query['DeleteProtection'] = $request->deleteProtection;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerDeleteProtection',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerDeleteProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables deletion protection for an SLB instance.
     *
     * @param request - SetLoadBalancerDeleteProtectionRequest
     *
     * @returns SetLoadBalancerDeleteProtectionResponse
     *
     * @param SetLoadBalancerDeleteProtectionRequest $request
     *
     * @return SetLoadBalancerDeleteProtectionResponse
     */
    public function setLoadBalancerDeleteProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerDeleteProtectionWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of an HTTP listener.
     *
     * @remarks
     * ### Prerequisites
     * *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTP listener is created. For more information about how to create an HTTP listener, see [CreateLoadBalancerHTTPListener](https://help.aliyun.com/document_detail/27592.html).
     *
     * @param request - SetLoadBalancerHTTPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerHTTPListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclStatus) {
            @$query['AclStatus'] = $request->aclStatus;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->cookie) {
            @$query['Cookie'] = $request->cookie;
        }

        if (null !== $request->cookieTimeout) {
            @$query['CookieTimeout'] = $request->cookieTimeout;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->gzip) {
            @$query['Gzip'] = $request->gzip;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->stickySession) {
            @$query['StickySession'] = $request->stickySession;
        }

        if (null !== $request->stickySessionType) {
            @$query['StickySessionType'] = $request->stickySessionType;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroup) {
            @$query['VServerGroup'] = $request->VServerGroup;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->XForwardedFor) {
            @$query['XForwardedFor'] = $request->XForwardedFor;
        }

        if (null !== $request->XForwardedFor_ClientSrcPort) {
            @$query['XForwardedFor_ClientSrcPort'] = $request->XForwardedFor_ClientSrcPort;
        }

        if (null !== $request->XForwardedFor_SLBID) {
            @$query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }

        if (null !== $request->XForwardedFor_SLBIP) {
            @$query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
        }

        if (null !== $request->XForwardedFor_SLBPORT) {
            @$query['XForwardedFor_SLBPORT'] = $request->XForwardedFor_SLBPORT;
        }

        if (null !== $request->XForwardedFor_proto) {
            @$query['XForwardedFor_proto'] = $request->XForwardedFor_proto;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerHTTPListenerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an HTTP listener.
     *
     * @remarks
     * ### Prerequisites
     * *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTP listener is created. For more information about how to create an HTTP listener, see [CreateLoadBalancerHTTPListener](https://help.aliyun.com/document_detail/27592.html).
     *
     * @param request - SetLoadBalancerHTTPListenerAttributeRequest
     *
     * @returns SetLoadBalancerHTTPListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of an HTTPS listener.
     *
     * @remarks
     *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTPS listener is created. For more information about how to create an HTTPS listener, see [CreateLoadBalancerHTTPSListener](https://help.aliyun.com/document_detail/27593.html).
     *
     * @param request - SetLoadBalancerHTTPSListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerHTTPSListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclStatus) {
            @$query['AclStatus'] = $request->aclStatus;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->CACertificateId) {
            @$query['CACertificateId'] = $request->CACertificateId;
        }

        if (null !== $request->cookie) {
            @$query['Cookie'] = $request->cookie;
        }

        if (null !== $request->cookieTimeout) {
            @$query['CookieTimeout'] = $request->cookieTimeout;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableHttp2) {
            @$query['EnableHttp2'] = $request->enableHttp2;
        }

        if (null !== $request->gzip) {
            @$query['Gzip'] = $request->gzip;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        if (null !== $request->stickySession) {
            @$query['StickySession'] = $request->stickySession;
        }

        if (null !== $request->stickySessionType) {
            @$query['StickySessionType'] = $request->stickySessionType;
        }

        if (null !== $request->TLSCipherPolicy) {
            @$query['TLSCipherPolicy'] = $request->TLSCipherPolicy;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroup) {
            @$query['VServerGroup'] = $request->VServerGroup;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->XForwardedFor) {
            @$query['XForwardedFor'] = $request->XForwardedFor;
        }

        if (null !== $request->XForwardedFor_ClientSrcPort) {
            @$query['XForwardedFor_ClientSrcPort'] = $request->XForwardedFor_ClientSrcPort;
        }

        if (null !== $request->XForwardedFor_SLBID) {
            @$query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }

        if (null !== $request->XForwardedFor_SLBIP) {
            @$query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
        }

        if (null !== $request->XForwardedFor_SLBPORT) {
            @$query['XForwardedFor_SLBPORT'] = $request->XForwardedFor_SLBPORT;
        }

        if (null !== $request->XForwardedFor_proto) {
            @$query['XForwardedFor_proto'] = $request->XForwardedFor_proto;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerHTTPSListenerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an HTTPS listener.
     *
     * @remarks
     *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTPS listener is created. For more information about how to create an HTTPS listener, see [CreateLoadBalancerHTTPSListener](https://help.aliyun.com/document_detail/27593.html).
     *
     * @param request - SetLoadBalancerHTTPSListenerAttributeRequest
     *
     * @returns SetLoadBalancerHTTPSListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of the configuration read-only mode for a Classic Load Balancer (CLB) instance.
     *
     * @param request - SetLoadBalancerModificationProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerModificationProtectionResponse
     *
     * @param SetLoadBalancerModificationProtectionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SetLoadBalancerModificationProtectionResponse
     */
    public function setLoadBalancerModificationProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->modificationProtectionReason) {
            @$query['ModificationProtectionReason'] = $request->modificationProtectionReason;
        }

        if (null !== $request->modificationProtectionStatus) {
            @$query['ModificationProtectionStatus'] = $request->modificationProtectionStatus;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerModificationProtection',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerModificationProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of the configuration read-only mode for a Classic Load Balancer (CLB) instance.
     *
     * @param request - SetLoadBalancerModificationProtectionRequest
     *
     * @returns SetLoadBalancerModificationProtectionResponse
     *
     * @param SetLoadBalancerModificationProtectionRequest $request
     *
     * @return SetLoadBalancerModificationProtectionResponse
     */
    public function setLoadBalancerModificationProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerModificationProtectionWithOptions($request, $runtime);
    }

    /**
     * Changes the name of a Classic Load Balancer (CLB) instance.
     *
     * @param request - SetLoadBalancerNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerNameResponse
     *
     * @param SetLoadBalancerNameRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetLoadBalancerNameResponse
     */
    public function setLoadBalancerNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerName',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name of a Classic Load Balancer (CLB) instance.
     *
     * @param request - SetLoadBalancerNameRequest
     *
     * @returns SetLoadBalancerNameResponse
     *
     * @param SetLoadBalancerNameRequest $request
     *
     * @return SetLoadBalancerNameResponse
     */
    public function setLoadBalancerName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerNameWithOptions($request, $runtime);
    }

    /**
     * Modifies the state of a Classic Load Balancer (CLB) instance.
     *
     * @param request - SetLoadBalancerStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerStatusResponse
     *
     * @param SetLoadBalancerStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerStatus) {
            @$query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerStatus',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the state of a Classic Load Balancer (CLB) instance.
     *
     * @param request - SetLoadBalancerStatusRequest
     *
     * @returns SetLoadBalancerStatusResponse
     *
     * @param SetLoadBalancerStatusRequest $request
     *
     * @return SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a TCP listener of Classic Load Balancer (CLB).
     *
     * @remarks
     *   A CLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/2401685.html).
     * *   A TCP listener is created. For more information, see [CreateLoadBalancerTCPListener](~~CreateLoadBalancerTCPListener~~).
     *
     * @param request - SetLoadBalancerTCPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerTCPListenerAttributeResponse
     *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclStatus) {
            @$query['AclStatus'] = $request->aclStatus;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->connectionDrain) {
            @$query['ConnectionDrain'] = $request->connectionDrain;
        }

        if (null !== $request->connectionDrainTimeout) {
            @$query['ConnectionDrainTimeout'] = $request->connectionDrainTimeout;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->establishedTimeout) {
            @$query['EstablishedTimeout'] = $request->establishedTimeout;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckConnectTimeout) {
            @$query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckSwitch) {
            @$query['HealthCheckSwitch'] = $request->healthCheckSwitch;
        }

        if (null !== $request->healthCheckType) {
            @$query['HealthCheckType'] = $request->healthCheckType;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->masterSlaveServerGroup) {
            @$query['MasterSlaveServerGroup'] = $request->masterSlaveServerGroup;
        }

        if (null !== $request->masterSlaveServerGroupId) {
            @$query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->persistenceTimeout) {
            @$query['PersistenceTimeout'] = $request->persistenceTimeout;
        }

        if (null !== $request->proxyProtocolV2Enabled) {
            @$query['ProxyProtocolV2Enabled'] = $request->proxyProtocolV2Enabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->synProxy) {
            @$query['SynProxy'] = $request->synProxy;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroup) {
            @$query['VServerGroup'] = $request->VServerGroup;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerTCPListenerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a TCP listener of Classic Load Balancer (CLB).
     *
     * @remarks
     *   A CLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/2401685.html).
     * *   A TCP listener is created. For more information, see [CreateLoadBalancerTCPListener](~~CreateLoadBalancerTCPListener~~).
     *
     * @param request - SetLoadBalancerTCPListenerAttributeRequest
     *
     * @returns SetLoadBalancerTCPListenerAttributeResponse
     *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a UDP listener.
     *
     * @remarks
     *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   A UDP listener is created. For more information, see [CreateLoadBalancerUDPListener](https://help.aliyun.com/document_detail/27595.html).
     *
     * @param request - SetLoadBalancerUDPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerUDPListenerAttributeResponse
     *
     * @param SetLoadBalancerUDPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclStatus) {
            @$query['AclStatus'] = $request->aclStatus;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckConnectTimeout) {
            @$query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckSwitch) {
            @$query['HealthCheckSwitch'] = $request->healthCheckSwitch;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->masterSlaveServerGroup) {
            @$query['MasterSlaveServerGroup'] = $request->masterSlaveServerGroup;
        }

        if (null !== $request->masterSlaveServerGroupId) {
            @$query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->proxyProtocolV2Enabled) {
            @$query['ProxyProtocolV2Enabled'] = $request->proxyProtocolV2Enabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroup) {
            @$query['VServerGroup'] = $request->VServerGroup;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->healthCheckExp) {
            @$query['healthCheckExp'] = $request->healthCheckExp;
        }

        if (null !== $request->healthCheckReq) {
            @$query['healthCheckReq'] = $request->healthCheckReq;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerUDPListenerAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a UDP listener.
     *
     * @remarks
     *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   A UDP listener is created. For more information, see [CreateLoadBalancerUDPListener](https://help.aliyun.com/document_detail/27595.html).
     *
     * @param request - SetLoadBalancerUDPListenerAttributeRequest
     *
     * @returns SetLoadBalancerUDPListenerAttributeResponse
     *
     * @param SetLoadBalancerUDPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies a forwarding rule that is associated with a vServer group.
     *
     * @param request - SetRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetRuleResponse
     *
     * @param SetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SetRuleResponse
     */
    public function setRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cookie) {
            @$query['Cookie'] = $request->cookie;
        }

        if (null !== $request->cookieTimeout) {
            @$query['CookieTimeout'] = $request->cookieTimeout;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerSync) {
            @$query['ListenerSync'] = $request->listenerSync;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->stickySession) {
            @$query['StickySession'] = $request->stickySession;
        }

        if (null !== $request->stickySessionType) {
            @$query['StickySessionType'] = $request->stickySessionType;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetRule',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a forwarding rule that is associated with a vServer group.
     *
     * @param request - SetRuleRequest
     *
     * @returns SetRuleResponse
     *
     * @param SetRuleRequest $request
     *
     * @return SetRuleResponse
     */
    public function setRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRuleWithOptions($request, $runtime);
    }

    /**
     * Sets a name for a server certificate.
     *
     * @param request - SetServerCertificateNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetServerCertificateNameResponse
     *
     * @param SetServerCertificateNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetServerCertificateNameResponse
     */
    public function setServerCertificateNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        if (null !== $request->serverCertificateName) {
            @$query['ServerCertificateName'] = $request->serverCertificateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetServerCertificateName',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetServerCertificateNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets a name for a server certificate.
     *
     * @param request - SetServerCertificateNameRequest
     *
     * @returns SetServerCertificateNameResponse
     *
     * @param SetServerCertificateNameRequest $request
     *
     * @return SetServerCertificateNameResponse
     */
    public function setServerCertificateName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setServerCertificateNameWithOptions($request, $runtime);
    }

    /**
     * Configures a Transport Layer Security (TLS) policy.
     *
     * @param request - SetTLSCipherPolicyAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetTLSCipherPolicyAttributeResponse
     *
     * @param SetTLSCipherPolicyAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetTLSCipherPolicyAttributeResponse
     */
    public function setTLSCipherPolicyAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ciphers) {
            @$query['Ciphers'] = $request->ciphers;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->TLSCipherPolicyId) {
            @$query['TLSCipherPolicyId'] = $request->TLSCipherPolicyId;
        }

        if (null !== $request->TLSVersions) {
            @$query['TLSVersions'] = $request->TLSVersions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetTLSCipherPolicyAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetTLSCipherPolicyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a Transport Layer Security (TLS) policy.
     *
     * @param request - SetTLSCipherPolicyAttributeRequest
     *
     * @returns SetTLSCipherPolicyAttributeResponse
     *
     * @param SetTLSCipherPolicyAttributeRequest $request
     *
     * @return SetTLSCipherPolicyAttributeResponse
     */
    public function setTLSCipherPolicyAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTLSCipherPolicyAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a vServer group.
     *
     * @remarks
     * This operation can be used to modify the weights of backend servers and names of vServer groups.
     * *   If you want to modify backend servers in a specified vServer group, call the [ModifyVServerGroupBackendServers](https://help.aliyun.com/document_detail/35220.html) operation.
     * *   If you want to add backend servers to a specified vServer group, call the [AddVServerGroupBackendServers](https://help.aliyun.com/document_detail/35218.html) operation.
     *
     * @param request - SetVServerGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetVServerGroupAttributeResponse
     *
     * @param SetVServerGroupAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetVServerGroupAttributeResponse
     */
    public function setVServerGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->VServerGroupName) {
            @$query['VServerGroupName'] = $request->VServerGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetVServerGroupAttribute',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetVServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a vServer group.
     *
     * @remarks
     * This operation can be used to modify the weights of backend servers and names of vServer groups.
     * *   If you want to modify backend servers in a specified vServer group, call the [ModifyVServerGroupBackendServers](https://help.aliyun.com/document_detail/35220.html) operation.
     * *   If you want to add backend servers to a specified vServer group, call the [AddVServerGroupBackendServers](https://help.aliyun.com/document_detail/35218.html) operation.
     *
     * @param request - SetVServerGroupAttributeRequest
     *
     * @returns SetVServerGroupAttributeResponse
     *
     * @param SetVServerGroupAttributeRequest $request
     *
     * @return SetVServerGroupAttributeResponse
     */
    public function setVServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Enables a listener.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * *   You can call the operation only when the listener is in the Stopped state.
     * *   If the operation is successful, the listener switches to the Starting state.
     * *   You cannot perform this operation when the Classic Load Balancer (CLB) instance to which the listener belongs is in the Locked state.
     *
     * @param request - StartLoadBalancerListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartLoadBalancerListenerResponse
     *
     * @param StartLoadBalancerListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartLoadBalancerListener',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a listener.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * *   You can call the operation only when the listener is in the Stopped state.
     * *   If the operation is successful, the listener switches to the Starting state.
     * *   You cannot perform this operation when the Classic Load Balancer (CLB) instance to which the listener belongs is in the Locked state.
     *
     * @param request - StartLoadBalancerListenerRequest
     *
     * @returns StartLoadBalancerListenerResponse
     *
     * @param StartLoadBalancerListenerRequest $request
     *
     * @return StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * Stops a listener.
     *
     * @remarks
     * Before you make this API call, note the following:
     * *   After the API call is successfully made, the listener enters the stopped state.
     * *   If the Classic Load Balancer (CLB) instance to which the listener to be stopped belongs is in the locked state, this API call cannot be made.
     * >  If you stop the listener, your services will be disrupted. Exercise caution when you perform this action.
     *
     * @param request - StopLoadBalancerListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopLoadBalancerListenerResponse
     *
     * @param StopLoadBalancerListenerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopLoadBalancerListener',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a listener.
     *
     * @remarks
     * Before you make this API call, note the following:
     * *   After the API call is successfully made, the listener enters the stopped state.
     * *   If the Classic Load Balancer (CLB) instance to which the listener to be stopped belongs is in the locked state, this API call cannot be made.
     * >  If you stop the listener, your services will be disrupted. Exercise caution when you perform this action.
     *
     * @param request - StopLoadBalancerListenerRequest
     *
     * @returns StopLoadBalancerListenerResponse
     *
     * @param StopLoadBalancerListenerRequest $request
     *
     * @return StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * Creates tags and adds the tags to resources.
     *
     * @remarks
     * >  You can add at most 20 tags to each instance. Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number is reached, an error message is returned.
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
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2014-05-15',
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
     * Creates tags and adds the tags to resources.
     *
     * @remarks
     * >  You can add at most 20 tags to each instance. Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number is reached, an error message is returned.
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
     * Removes tags from a resource.
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

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2014-05-15',
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
     * Removes tags from a resource.
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
     * Uploads a CA certificate.
     *
     * @remarks
     * You can upload only one CA certificate at a time. After a CA certificate is uploaded, the certificate ID, name, and fingerprint are returned.
     *
     * @param request - UploadCACertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadCACertificateResponse
     *
     * @param UploadCACertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UploadCACertificateResponse
     */
    public function uploadCACertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->CACertificate) {
            @$query['CACertificate'] = $request->CACertificate;
        }

        if (null !== $request->CACertificateName) {
            @$query['CACertificateName'] = $request->CACertificateName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadCACertificate',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a CA certificate.
     *
     * @remarks
     * You can upload only one CA certificate at a time. After a CA certificate is uploaded, the certificate ID, name, and fingerprint are returned.
     *
     * @param request - UploadCACertificateRequest
     *
     * @returns UploadCACertificateResponse
     *
     * @param UploadCACertificateRequest $request
     *
     * @return UploadCACertificateResponse
     */
    public function uploadCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCACertificateWithOptions($request, $runtime);
    }

    /**
     * Uploads a server certificate.
     *
     * @remarks
     *   You can upload only one server certificate and its private key in each call.
     * *   After a server certificate and its private key are uploaded, the fingerprints of all server certificates that belong to your Alibaba Cloud account are returned.
     *
     * @param request - UploadServerCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadServerCertificateResponse
     *
     * @param UploadServerCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UploadServerCertificateResponse
     */
    public function uploadServerCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliCloudCertificateId) {
            @$query['AliCloudCertificateId'] = $request->aliCloudCertificateId;
        }

        if (null !== $request->aliCloudCertificateName) {
            @$query['AliCloudCertificateName'] = $request->aliCloudCertificateName;
        }

        if (null !== $request->aliCloudCertificateRegionId) {
            @$query['AliCloudCertificateRegionId'] = $request->aliCloudCertificateRegionId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->privateKey) {
            @$query['PrivateKey'] = $request->privateKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serverCertificate) {
            @$query['ServerCertificate'] = $request->serverCertificate;
        }

        if (null !== $request->serverCertificateName) {
            @$query['ServerCertificateName'] = $request->serverCertificateName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadServerCertificate',
            'version' => '2014-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadServerCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a server certificate.
     *
     * @remarks
     *   You can upload only one server certificate and its private key in each call.
     * *   After a server certificate and its private key are uploaded, the fingerprints of all server certificates that belong to your Alibaba Cloud account are returned.
     *
     * @param request - UploadServerCertificateRequest
     *
     * @returns UploadServerCertificateResponse
     *
     * @param UploadServerCertificateRequest $request
     *
     * @return UploadServerCertificateResponse
     */
    public function uploadServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadServerCertificateWithOptions($request, $runtime);
    }
}
