<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Slb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'slb.aliyuncs.com',
            'cn-beijing'                  => 'slb.aliyuncs.com',
            'cn-hangzhou'                 => 'slb.aliyuncs.com',
            'cn-shanghai'                 => 'slb.aliyuncs.com',
            'cn-shenzhen'                 => 'slb.aliyuncs.com',
            'cn-hongkong'                 => 'slb.aliyuncs.com',
            'ap-southeast-1'              => 'slb.aliyuncs.com',
            'us-east-1'                   => 'slb.aliyuncs.com',
            'us-west-1'                   => 'slb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'slb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'slb.aliyuncs.com',
            'cn-north-2-gov-1'            => 'slb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'slb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'slb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'slb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'slb.aliyuncs.com',
            'cn-edge-1'                   => 'slb.aliyuncs.com',
            'cn-fujian'                   => 'slb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'slb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'slb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'slb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'slb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'slb.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'slb-api.cn-qingdao-nebula.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'slb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'slb.aliyuncs.com',
            'cn-shanghai-inner'           => 'slb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'slb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'slb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'slb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'slb.aliyuncs.com',
            'cn-wuhan'                    => 'slb.aliyuncs.com',
            'cn-yushanfang'               => 'slb.aliyuncs.com',
            'cn-zhangbei'                 => 'slb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'slb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'slb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'slb.aliyuncs.com',
            'eu-west-1-oxs'               => 'slb.aliyuncs.com',
            'rus-west-1-pop'              => 'slb.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds IP entries to a network access control list (ACL).
     *  *
     * @description Each network ACL can contain one or more IP addresses or CIDR blocks. Take note of the following limits on network ACLs:
     * *   The number of IP entries that can be added to a network ACL with each Alibaba Cloud account at a time: 50
     * *   The maximum number of IP entries that each network ACL can contain: 300
     *  *
     * @param AddAccessControlListEntryRequest $request AddAccessControlListEntryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAccessControlListEntryResponse AddAccessControlListEntryResponse
     */
    public function addAccessControlListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntrys)) {
            $query['AclEntrys'] = $request->aclEntrys;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAccessControlListEntry',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAccessControlListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds IP entries to a network access control list (ACL).
     *  *
     * @description Each network ACL can contain one or more IP addresses or CIDR blocks. Take note of the following limits on network ACLs:
     * *   The number of IP entries that can be added to a network ACL with each Alibaba Cloud account at a time: 50
     * *   The maximum number of IP entries that each network ACL can contain: 300
     *  *
     * @param AddAccessControlListEntryRequest $request AddAccessControlListEntryRequest
     *
     * @return AddAccessControlListEntryResponse AddAccessControlListEntryResponse
     */
    public function addAccessControlListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAccessControlListEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Adds backend servers.
     *  *
     * @description >  If multiple identical Elastic Compute Service (ECS) instances are specified in a request, only the first ECS instance is added. The other ECS instances are ignored. If the backend server that you add is the same as one of the existing backend servers that are already associated with the listener, an error message is returned.
     *  *
     * @param AddBackendServersRequest $request AddBackendServersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddBackendServersResponse AddBackendServersResponse
     */
    public function addBackendServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServers)) {
            $query['BackendServers'] = $request->backendServers;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBackendServers',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds backend servers.
     *  *
     * @description >  If multiple identical Elastic Compute Service (ECS) instances are specified in a request, only the first ECS instance is added. The other ECS instances are ignored. If the backend server that you add is the same as one of the existing backend servers that are already associated with the listener, an error message is returned.
     *  *
     * @param AddBackendServersRequest $request AddBackendServersRequest
     *
     * @return AddBackendServersResponse AddBackendServersResponse
     */
    public function addBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Adds IP addresses to the whitelist of a listener.
     *  *
     * @param AddListenerWhiteListItemRequest $request AddListenerWhiteListItemRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddListenerWhiteListItemResponse AddListenerWhiteListItemResponse
     */
    public function addListenerWhiteListItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceItems)) {
            $query['SourceItems'] = $request->sourceItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddListenerWhiteListItem',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddListenerWhiteListItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds IP addresses to the whitelist of a listener.
     *  *
     * @param AddListenerWhiteListItemRequest $request AddListenerWhiteListItemRequest
     *
     * @return AddListenerWhiteListItemResponse AddListenerWhiteListItemResponse
     */
    public function addListenerWhiteListItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addListenerWhiteListItemWithOptions($request, $runtime);
    }

    /**
     * @description # Limits
     * Before you call this API, note the following limits:
     * *   You can add up to 10 tags to each SLB instance.
     * *   You can add up to five pairs of tags at a time.
     * *   All the tags and keys added to an SLB instance must be unique.
     * *   If you add a tag of which the key is the same as that of an existing tag, but the value is different, the new tag overwrites the existing one.
     *  *
     * @param AddTagsRequest $request AddTagsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTagsResponse AddTagsResponse
     */
    public function addTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTags',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description # Limits
     * Before you call this API, note the following limits:
     * *   You can add up to 10 tags to each SLB instance.
     * *   You can add up to five pairs of tags at a time.
     * *   All the tags and keys added to an SLB instance must be unique.
     * *   If you add a tag of which the key is the same as that of an existing tag, but the value is different, the new tag overwrites the existing one.
     *  *
     * @param AddTagsRequest $request AddTagsRequest
     *
     * @return AddTagsResponse AddTagsResponse
     */
    public function addTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Adds backend servers to a specified server group.
     *  *
     * @param AddVServerGroupBackendServersRequest $request AddVServerGroupBackendServersRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddVServerGroupBackendServersResponse AddVServerGroupBackendServersResponse
     */
    public function addVServerGroupBackendServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServers)) {
            $query['BackendServers'] = $request->backendServers;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVServerGroupBackendServers',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddVServerGroupBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds backend servers to a specified server group.
     *  *
     * @param AddVServerGroupBackendServersRequest $request AddVServerGroupBackendServersRequest
     *
     * @return AddVServerGroupBackendServersResponse AddVServerGroupBackendServersResponse
     */
    public function addVServerGroupBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVServerGroupBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access control list (ACL).
     *  *
     * @description You can create multiple ACLs. Each ACL can contain one or more IP addresses or CIDR blocks. Before you create an ACL, take note of the following limits:
     * *   An account can have a maximum of 50 ACLs in each region.
     * *   You can add a maximum of 50 IP addresses or CIDR blocks at a time within an account.
     * *   Each ACL can contain a maximum of 300 IP addresses or CIDR blocks.
     *  *
     * @param CreateAccessControlListRequest $request CreateAccessControlListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessControlListResponse CreateAccessControlListResponse
     */
    public function createAccessControlListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessControlList',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an access control list (ACL).
     *  *
     * @description You can create multiple ACLs. Each ACL can contain one or more IP addresses or CIDR blocks. Before you create an ACL, take note of the following limits:
     * *   An account can have a maximum of 50 ACLs in each region.
     * *   You can add a maximum of 50 IP addresses or CIDR blocks at a time within an account.
     * *   Each ACL can contain a maximum of 300 IP addresses or CIDR blocks.
     *  *
     * @param CreateAccessControlListRequest $request CreateAccessControlListRequest
     *
     * @return CreateAccessControlListResponse CreateAccessControlListResponse
     */
    public function createAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessControlListWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a domain name extension.
     *  *
     * @param CreateDomainExtensionRequest $request CreateDomainExtensionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainExtensionResponse CreateDomainExtensionResponse
     */
    public function createDomainExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomainExtension',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDomainExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a domain name extension.
     *  *
     * @param CreateDomainExtensionRequest $request CreateDomainExtensionRequest
     *
     * @return CreateDomainExtensionResponse CreateDomainExtensionResponse
     */
    public function createDomainExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainExtensionWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Classic Load Balancer (CLB) instance.
     *  *
     * @description *   Before you create a CLB instance, call the [DescribeAvailableResource](~~DescribeAvailableResource~~) operation to query the resources available for purchase in the region where you want to create the CLB instance.
     * *   After a CLB instance is created, you are charged for using the CLB instance.
     * *   The pay-as-you-go billing method supports the pay-by-specification and pay-by-LCU metering methods.
     *  *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteProtection)) {
            $query['DeleteProtection'] = $request->deleteProtection;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->loadBalancerSpec)) {
            $query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }
        if (!Utils::isUnset($request->masterZoneId)) {
            $query['MasterZoneId'] = $request->masterZoneId;
        }
        if (!Utils::isUnset($request->modificationProtectionReason)) {
            $query['ModificationProtectionReason'] = $request->modificationProtectionReason;
        }
        if (!Utils::isUnset($request->modificationProtectionStatus)) {
            $query['ModificationProtectionStatus'] = $request->modificationProtectionStatus;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->slaveZoneId)) {
            $query['SlaveZoneId'] = $request->slaveZoneId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancer',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Classic Load Balancer (CLB) instance.
     *  *
     * @description *   Before you create a CLB instance, call the [DescribeAvailableResource](~~DescribeAvailableResource~~) operation to query the resources available for purchase in the region where you want to create the CLB instance.
     * *   After a CLB instance is created, you are charged for using the CLB instance.
     * *   The pay-as-you-go billing method supports the pay-by-specification and pay-by-LCU metering methods.
     *  *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an HTTP listener for a Classic Load Balancer (CLB) instance.
     *  *
     * @description A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](~~StartLoadBalancerListener~~) operation to start the listener. After the listener is started, the listener can forward traffic to backend servers.
     * ## Prerequisites
     * A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](~~StartLoadBalancerListener~~).
     *  *
     * @param CreateLoadBalancerHTTPListenerRequest $request CreateLoadBalancerHTTPListenerRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerHTTPListenerResponse CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->backendServerPort)) {
            $query['BackendServerPort'] = $request->backendServerPort;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->cookie)) {
            $query['Cookie'] = $request->cookie;
        }
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->forwardPort)) {
            $query['ForwardPort'] = $request->forwardPort;
        }
        if (!Utils::isUnset($request->gzip)) {
            $query['Gzip'] = $request->gzip;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerForward)) {
            $query['ListenerForward'] = $request->listenerForward;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->stickySession)) {
            $query['StickySession'] = $request->stickySession;
        }
        if (!Utils::isUnset($request->stickySessionType)) {
            $query['StickySessionType'] = $request->stickySessionType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->XForwardedFor)) {
            $query['XForwardedFor'] = $request->XForwardedFor;
        }
        if (!Utils::isUnset($request->XForwardedFor_ClientSrcPort)) {
            $query['XForwardedFor_ClientSrcPort'] = $request->XForwardedFor_ClientSrcPort;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBID)) {
            $query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBIP)) {
            $query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBPORT)) {
            $query['XForwardedFor_SLBPORT'] = $request->XForwardedFor_SLBPORT;
        }
        if (!Utils::isUnset($request->XForwardedFor_proto)) {
            $query['XForwardedFor_proto'] = $request->XForwardedFor_proto;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerHTTPListener',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerHTTPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an HTTP listener for a Classic Load Balancer (CLB) instance.
     *  *
     * @description A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](~~StartLoadBalancerListener~~) operation to start the listener. After the listener is started, the listener can forward traffic to backend servers.
     * ## Prerequisites
     * A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](~~StartLoadBalancerListener~~).
     *  *
     * @param CreateLoadBalancerHTTPListenerRequest $request CreateLoadBalancerHTTPListenerRequest
     *
     * @return CreateLoadBalancerHTTPListenerResponse CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an HTTPS listener.
     *  *
     * @description A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to start the listener. After the listener is started, the listener can forward traffic to backend servers.
     * ## Prerequisites
     * A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://www.alibabacloud.com/help/en/server-load-balancer/latest/createloadbalancer-2).
     *  *
     * @param CreateLoadBalancerHTTPSListenerRequest $request CreateLoadBalancerHTTPSListenerRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerHTTPSListenerResponse CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->backendServerPort)) {
            $query['BackendServerPort'] = $request->backendServerPort;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->CACertificateId)) {
            $query['CACertificateId'] = $request->CACertificateId;
        }
        if (!Utils::isUnset($request->cookie)) {
            $query['Cookie'] = $request->cookie;
        }
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableHttp2)) {
            $query['EnableHttp2'] = $request->enableHttp2;
        }
        if (!Utils::isUnset($request->gzip)) {
            $query['Gzip'] = $request->gzip;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        if (!Utils::isUnset($request->stickySession)) {
            $query['StickySession'] = $request->stickySession;
        }
        if (!Utils::isUnset($request->stickySessionType)) {
            $query['StickySessionType'] = $request->stickySessionType;
        }
        if (!Utils::isUnset($request->TLSCipherPolicy)) {
            $query['TLSCipherPolicy'] = $request->TLSCipherPolicy;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->XForwardedFor)) {
            $query['XForwardedFor'] = $request->XForwardedFor;
        }
        if (!Utils::isUnset($request->XForwardedFor_ClientSrcPort)) {
            $query['XForwardedFor_ClientSrcPort'] = $request->XForwardedFor_ClientSrcPort;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBID)) {
            $query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBIP)) {
            $query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBPORT)) {
            $query['XForwardedFor_SLBPORT'] = $request->XForwardedFor_SLBPORT;
        }
        if (!Utils::isUnset($request->XForwardedFor_proto)) {
            $query['XForwardedFor_proto'] = $request->XForwardedFor_proto;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerHTTPSListener',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerHTTPSListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an HTTPS listener.
     *  *
     * @description A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to start the listener. After the listener is started, the listener can forward traffic to backend servers.
     * ## Prerequisites
     * A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://www.alibabacloud.com/help/en/server-load-balancer/latest/createloadbalancer-2).
     *  *
     * @param CreateLoadBalancerHTTPSListenerRequest $request CreateLoadBalancerHTTPSListenerRequest
     *
     * @return CreateLoadBalancerHTTPSListenerResponse CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPSListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a TCP listener.
     *  *
     * @description >  A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to enable the listener to forward traffic to backend servers.
     *  *
     * @param CreateLoadBalancerTCPListenerRequest $request CreateLoadBalancerTCPListenerRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerTCPListenerResponse CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->backendServerPort)) {
            $query['BackendServerPort'] = $request->backendServerPort;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->connectionDrain)) {
            $query['ConnectionDrain'] = $request->connectionDrain;
        }
        if (!Utils::isUnset($request->connectionDrainTimeout)) {
            $query['ConnectionDrainTimeout'] = $request->connectionDrainTimeout;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->establishedTimeout)) {
            $query['EstablishedTimeout'] = $request->establishedTimeout;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckSwitch)) {
            $query['HealthCheckSwitch'] = $request->healthCheckSwitch;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $query['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->masterSlaveServerGroupId)) {
            $query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->persistenceTimeout)) {
            $query['PersistenceTimeout'] = $request->persistenceTimeout;
        }
        if (!Utils::isUnset($request->proxyProtocolV2Enabled)) {
            $query['ProxyProtocolV2Enabled'] = $request->proxyProtocolV2Enabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['healthCheckInterval'] = $request->healthCheckInterval;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerTCPListener',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerTCPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a TCP listener.
     *  *
     * @description >  A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to enable the listener to forward traffic to backend servers.
     *  *
     * @param CreateLoadBalancerTCPListenerRequest $request CreateLoadBalancerTCPListenerRequest
     *
     * @return CreateLoadBalancerTCPListenerResponse CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerTCPListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a UDP listener.
     *  *
     * @description UDP listeners of Classic Load Balancer (CLB) instances in a classic network cannot pass client IP addresses to backend servers.
     * >  A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to enable the listener to forward traffic to backend servers.
     *  *
     * @param CreateLoadBalancerUDPListenerRequest $request CreateLoadBalancerUDPListenerRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerUDPListenerResponse CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->backendServerPort)) {
            $query['BackendServerPort'] = $request->backendServerPort;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckSwitch)) {
            $query['HealthCheckSwitch'] = $request->healthCheckSwitch;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->masterSlaveServerGroupId)) {
            $query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->proxyProtocolV2Enabled)) {
            $query['ProxyProtocolV2Enabled'] = $request->proxyProtocolV2Enabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->healthCheckExp)) {
            $query['healthCheckExp'] = $request->healthCheckExp;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['healthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckReq)) {
            $query['healthCheckReq'] = $request->healthCheckReq;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerUDPListener',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerUDPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a UDP listener.
     *  *
     * @description UDP listeners of Classic Load Balancer (CLB) instances in a classic network cannot pass client IP addresses to backend servers.
     * >  A newly created listener is in the **stopped** state. After a listener is created, you can call the [StartLoadBalancerListener](https://help.aliyun.com/document_detail/27597.html) operation to enable the listener to forward traffic to backend servers.
     *  *
     * @param CreateLoadBalancerUDPListenerRequest $request CreateLoadBalancerUDPListenerRequest
     *
     * @return CreateLoadBalancerUDPListenerResponse CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerUDPListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a primary/secondary server group. A primary/secondary server group can contain only two Elastic Compute Service (ECS) instances. One of the ECS instances functions as the primary server and the other functions as the secondary server.
     *  *
     * @param CreateMasterSlaveServerGroupRequest $request CreateMasterSlaveServerGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMasterSlaveServerGroupResponse CreateMasterSlaveServerGroupResponse
     */
    public function createMasterSlaveServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->masterSlaveBackendServers)) {
            $query['MasterSlaveBackendServers'] = $request->masterSlaveBackendServers;
        }
        if (!Utils::isUnset($request->masterSlaveServerGroupName)) {
            $query['MasterSlaveServerGroupName'] = $request->masterSlaveServerGroupName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMasterSlaveServerGroup',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMasterSlaveServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a primary/secondary server group. A primary/secondary server group can contain only two Elastic Compute Service (ECS) instances. One of the ECS instances functions as the primary server and the other functions as the secondary server.
     *  *
     * @param CreateMasterSlaveServerGroupRequest $request CreateMasterSlaveServerGroupRequest
     *
     * @return CreateMasterSlaveServerGroupResponse CreateMasterSlaveServerGroupResponse
     */
    public function createMasterSlaveServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMasterSlaveServerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates forwarding rules for an HTTP or HTTPS listener.
     *  *
     * @param CreateRulesRequest $request CreateRulesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRulesResponse CreateRulesResponse
     */
    public function createRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ruleList)) {
            $query['RuleList'] = $request->ruleList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRules',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates forwarding rules for an HTTP or HTTPS listener.
     *  *
     * @param CreateRulesRequest $request CreateRulesRequest
     *
     * @return CreateRulesResponse CreateRulesResponse
     */
    public function createRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Transport Layer Security (TLS) policy.
     *  *
     * @param CreateTLSCipherPolicyRequest $request CreateTLSCipherPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTLSCipherPolicyResponse CreateTLSCipherPolicyResponse
     */
    public function createTLSCipherPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ciphers)) {
            $query['Ciphers'] = $request->ciphers;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->TLSVersions)) {
            $query['TLSVersions'] = $request->TLSVersions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTLSCipherPolicy',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTLSCipherPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Transport Layer Security (TLS) policy.
     *  *
     * @param CreateTLSCipherPolicyRequest $request CreateTLSCipherPolicyRequest
     *
     * @return CreateTLSCipherPolicyResponse CreateTLSCipherPolicyResponse
     */
    public function createTLSCipherPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTLSCipherPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a vServer group and adds backend servers to the vServer group.
     *  *
     * @param CreateVServerGroupRequest $request CreateVServerGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVServerGroupResponse CreateVServerGroupResponse
     */
    public function createVServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServers)) {
            $query['BackendServers'] = $request->backendServers;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->VServerGroupName)) {
            $query['VServerGroupName'] = $request->VServerGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVServerGroup',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a vServer group and adds backend servers to the vServer group.
     *  *
     * @param CreateVServerGroupRequest $request CreateVServerGroupRequest
     *
     * @return CreateVServerGroupResponse CreateVServerGroupResponse
     */
    public function createVServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVServerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an access control list (ACL).
     *  *
     * @description You can delete an ACL only if it is not associated with a listener.
     *  *
     * @param DeleteAccessControlListRequest $request DeleteAccessControlListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessControlListResponse DeleteAccessControlListResponse
     */
    public function deleteAccessControlListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessControlList',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an access control list (ACL).
     *  *
     * @description You can delete an ACL only if it is not associated with a listener.
     *  *
     * @param DeleteAccessControlListRequest $request DeleteAccessControlListRequest
     *
     * @return DeleteAccessControlListResponse DeleteAccessControlListResponse
     */
    public function deleteAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessControlListWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the access log of a Classic Load Balancer (CLB) instance.
     *  *
     * @param DeleteAccessLogsDownloadAttributeRequest $request DeleteAccessLogsDownloadAttributeRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessLogsDownloadAttributeResponse DeleteAccessLogsDownloadAttributeResponse
     */
    public function deleteAccessLogsDownloadAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->logsDownloadAttributes)) {
            $query['LogsDownloadAttributes'] = $request->logsDownloadAttributes;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessLogsDownloadAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessLogsDownloadAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the access log of a Classic Load Balancer (CLB) instance.
     *  *
     * @param DeleteAccessLogsDownloadAttributeRequest $request DeleteAccessLogsDownloadAttributeRequest
     *
     * @return DeleteAccessLogsDownloadAttributeResponse DeleteAccessLogsDownloadAttributeResponse
     */
    public function deleteAccessLogsDownloadAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessLogsDownloadAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a certificate authority (CA) certificate.
     *  *
     * @description You cannot delete a CA certificate that is in use.
     *  *
     * @param DeleteCACertificateRequest $request DeleteCACertificateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCACertificateResponse DeleteCACertificateResponse
     */
    public function deleteCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->CACertificateId)) {
            $query['CACertificateId'] = $request->CACertificateId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCACertificate',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a certificate authority (CA) certificate.
     *  *
     * @description You cannot delete a CA certificate that is in use.
     *  *
     * @param DeleteCACertificateRequest $request DeleteCACertificateRequest
     *
     * @return DeleteCACertificateResponse DeleteCACertificateResponse
     */
    public function deleteCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCACertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an additional domain name.
     *  *
     * @param DeleteDomainExtensionRequest $request DeleteDomainExtensionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainExtensionResponse DeleteDomainExtensionResponse
     */
    public function deleteDomainExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainExtensionId)) {
            $query['DomainExtensionId'] = $request->domainExtensionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainExtension',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an additional domain name.
     *  *
     * @param DeleteDomainExtensionRequest $request DeleteDomainExtensionRequest
     *
     * @return DeleteDomainExtensionResponse DeleteDomainExtensionResponse
     */
    public function deleteDomainExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainExtensionWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a pay-as-you-go Server Load Balancer (SLB) instance.
     *  *
     * @description > The listeners and tags of the SLB instance are deleted along with the SLB instance.
     *  *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoadBalancer',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a pay-as-you-go Server Load Balancer (SLB) instance.
     *  *
     * @description > The listeners and tags of the SLB instance are deleted along with the SLB instance.
     *  *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a listener.
     *  *
     * @description >  You can delete only listeners that are in the **stopped** or **running** state.
     *  *
     * @param DeleteLoadBalancerListenerRequest $request DeleteLoadBalancerListenerRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoadBalancerListenerResponse DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoadBalancerListener',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a listener.
     *  *
     * @description >  You can delete only listeners that are in the **stopped** or **running** state.
     *  *
     * @param DeleteLoadBalancerListenerRequest $request DeleteLoadBalancerListenerRequest
     *
     * @return DeleteLoadBalancerListenerResponse DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an active/standby server group.
     *  *
     * @param DeleteMasterSlaveServerGroupRequest $request DeleteMasterSlaveServerGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMasterSlaveServerGroupResponse DeleteMasterSlaveServerGroupResponse
     */
    public function deleteMasterSlaveServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->masterSlaveServerGroupId)) {
            $query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMasterSlaveServerGroup',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMasterSlaveServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an active/standby server group.
     *  *
     * @param DeleteMasterSlaveServerGroupRequest $request DeleteMasterSlaveServerGroupRequest
     *
     * @return DeleteMasterSlaveServerGroupResponse DeleteMasterSlaveServerGroupResponse
     */
    public function deleteMasterSlaveServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMasterSlaveServerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes forwarding rules.
     *  *
     * @description ## Limits
     * The RuleIds parameter is required. You can specify up to 10 forwarding rules in each request.
     *  *
     * @param DeleteRulesRequest $request DeleteRulesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRulesResponse DeleteRulesResponse
     */
    public function deleteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ruleIds)) {
            $query['RuleIds'] = $request->ruleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRules',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes forwarding rules.
     *  *
     * @description ## Limits
     * The RuleIds parameter is required. You can specify up to 10 forwarding rules in each request.
     *  *
     * @param DeleteRulesRequest $request DeleteRulesRequest
     *
     * @return DeleteRulesResponse DeleteRulesResponse
     */
    public function deleteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a server certificate.
     *  *
     * @description >  You cannot delete server certificates that are in use.
     *  *
     * @param DeleteServerCertificateRequest $request DeleteServerCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServerCertificateResponse DeleteServerCertificateResponse
     */
    public function deleteServerCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServerCertificate',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServerCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a server certificate.
     *  *
     * @description >  You cannot delete server certificates that are in use.
     *  *
     * @param DeleteServerCertificateRequest $request DeleteServerCertificateRequest
     *
     * @return DeleteServerCertificateResponse DeleteServerCertificateResponse
     */
    public function deleteServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a TLS policy.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Slb\\&api=DeleteTLSCipherPolicy\\&type=RPC\\&version=2014-05-15)
     *  *
     * @param DeleteTLSCipherPolicyRequest $request DeleteTLSCipherPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTLSCipherPolicyResponse DeleteTLSCipherPolicyResponse
     */
    public function deleteTLSCipherPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->TLSCipherPolicyId)) {
            $query['TLSCipherPolicyId'] = $request->TLSCipherPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTLSCipherPolicy',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTLSCipherPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a TLS policy.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Slb\\&api=DeleteTLSCipherPolicy\\&type=RPC\\&version=2014-05-15)
     *  *
     * @param DeleteTLSCipherPolicyRequest $request DeleteTLSCipherPolicyRequest
     *
     * @return DeleteTLSCipherPolicyResponse DeleteTLSCipherPolicyResponse
     */
    public function deleteTLSCipherPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTLSCipherPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a VServer group.
     *  *
     * @param DeleteVServerGroupRequest $request DeleteVServerGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVServerGroupResponse DeleteVServerGroupResponse
     */
    public function deleteVServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVServerGroup',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a VServer group.
     *  *
     * @param DeleteVServerGroupRequest $request DeleteVServerGroupRequest
     *
     * @return DeleteVServerGroupResponse DeleteVServerGroupResponse
     */
    public function deleteVServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVServerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration of an access control list (ACL).
     *  *
     * @param DescribeAccessControlListAttributeRequest $request DescribeAccessControlListAttributeRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessControlListAttributeResponse DescribeAccessControlListAttributeResponse
     */
    public function describeAccessControlListAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntryComment)) {
            $query['AclEntryComment'] = $request->aclEntryComment;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessControlListAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessControlListAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration of an access control list (ACL).
     *  *
     * @param DescribeAccessControlListAttributeRequest $request DescribeAccessControlListAttributeRequest
     *
     * @return DescribeAccessControlListAttributeResponse DescribeAccessControlListAttributeResponse
     */
    public function describeAccessControlListAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessControlListAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries access control lists (ACLs).
     *  *
     * @param DescribeAccessControlListsRequest $request DescribeAccessControlListsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessControlListsResponse DescribeAccessControlListsResponse
     */
    public function describeAccessControlListsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessControlLists',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessControlListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries access control lists (ACLs).
     *  *
     * @param DescribeAccessControlListsRequest $request DescribeAccessControlListsRequest
     *
     * @return DescribeAccessControlListsResponse DescribeAccessControlListsResponse
     */
    public function describeAccessControlLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessControlListsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the access log of a Classic Load Balancer (CLB) instance.
     *  *
     * @param DescribeAccessLogsDownloadAttributeRequest $request DescribeAccessLogsDownloadAttributeRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessLogsDownloadAttributeResponse DescribeAccessLogsDownloadAttributeResponse
     */
    public function describeAccessLogsDownloadAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessLogsDownloadAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessLogsDownloadAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the access log of a Classic Load Balancer (CLB) instance.
     *  *
     * @param DescribeAccessLogsDownloadAttributeRequest $request DescribeAccessLogsDownloadAttributeRequest
     *
     * @return DescribeAccessLogsDownloadAttributeResponse DescribeAccessLogsDownloadAttributeResponse
     */
    public function describeAccessLogsDownloadAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessLogsDownloadAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the available resources and resources that are available for purchase in the zones of a region.
     *  *
     * @description > Only the available resources and zones are returned.
     *  *
     * @param DescribeAvailableResourceRequest $request DescribeAvailableResourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResource',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the available resources and resources that are available for purchase in the zones of a region.
     *  *
     * @description > Only the available resources and zones are returned.
     *  *
     * @param DescribeAvailableResourceRequest $request DescribeAvailableResourceRequest
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries certificate authority (CA) certificates.
     *  *
     * @description > To ensure data confidentiality, only the certificate fingerprint and name are returned. The certificate content is not returned.
     *  *
     * @param DescribeCACertificatesRequest $request DescribeCACertificatesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCACertificatesResponse DescribeCACertificatesResponse
     */
    public function describeCACertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->CACertificateId)) {
            $query['CACertificateId'] = $request->CACertificateId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCACertificates',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCACertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries certificate authority (CA) certificates.
     *  *
     * @description > To ensure data confidentiality, only the certificate fingerprint and name are returned. The certificate content is not returned.
     *  *
     * @param DescribeCACertificatesRequest $request DescribeCACertificatesRequest
     *
     * @return DescribeCACertificatesResponse DescribeCACertificatesResponse
     */
    public function describeCACertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attributes of an additional certificate.
     *  *
     * @param DescribeDomainExtensionAttributeRequest $request DescribeDomainExtensionAttributeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainExtensionAttributeResponse DescribeDomainExtensionAttributeResponse
     */
    public function describeDomainExtensionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainExtensionId)) {
            $query['DomainExtensionId'] = $request->domainExtensionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainExtensionAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainExtensionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attributes of an additional certificate.
     *  *
     * @param DescribeDomainExtensionAttributeRequest $request DescribeDomainExtensionAttributeRequest
     *
     * @return DescribeDomainExtensionAttributeResponse DescribeDomainExtensionAttributeResponse
     */
    public function describeDomainExtensionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainExtensionAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries additional certificates.
     *  *
     * @param DescribeDomainExtensionsRequest $request DescribeDomainExtensionsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainExtensionsResponse DescribeDomainExtensionsResponse
     */
    public function describeDomainExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainExtensionId)) {
            $query['DomainExtensionId'] = $request->domainExtensionId;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainExtensions',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries additional certificates.
     *  *
     * @param DescribeDomainExtensionsRequest $request DescribeDomainExtensionsRequest
     *
     * @return DescribeDomainExtensionsResponse DescribeDomainExtensionsResponse
     */
    public function describeDomainExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainExtensionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the health status of backend servers.
     *  *
     * @param DescribeHealthStatusRequest $request DescribeHealthStatusRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHealthStatusResponse DescribeHealthStatusResponse
     */
    public function describeHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHealthStatus',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the health status of backend servers.
     *  *
     * @param DescribeHealthStatusRequest $request DescribeHealthStatusRequest
     *
     * @return DescribeHealthStatusResponse DescribeHealthStatusResponse
     */
    public function describeHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of fine-grained monitoring in a region.
     *  *
     * @param DescribeHighDefinationMonitorRequest $request DescribeHighDefinationMonitorRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHighDefinationMonitorResponse DescribeHighDefinationMonitorResponse
     */
    public function describeHighDefinationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHighDefinationMonitor',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHighDefinationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of fine-grained monitoring in a region.
     *  *
     * @param DescribeHighDefinationMonitorRequest $request DescribeHighDefinationMonitorRequest
     *
     * @return DescribeHighDefinationMonitorResponse DescribeHighDefinationMonitorResponse
     */
    public function describeHighDefinationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighDefinationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the whitelist configurations of a listener.
     *  *
     * @param DescribeListenerAccessControlAttributeRequest $request DescribeListenerAccessControlAttributeRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeListenerAccessControlAttributeResponse DescribeListenerAccessControlAttributeResponse
     */
    public function describeListenerAccessControlAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeListenerAccessControlAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeListenerAccessControlAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the whitelist configurations of a listener.
     *  *
     * @param DescribeListenerAccessControlAttributeRequest $request DescribeListenerAccessControlAttributeRequest
     *
     * @return DescribeListenerAccessControlAttributeResponse DescribeListenerAccessControlAttributeResponse
     */
    public function describeListenerAccessControlAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListenerAccessControlAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detail of a Classic Load Balancer (CLB) instance.
     *  *
     * @description >  If backend servers are deployed in a vServer group, you can call the [DescribeVServerGroupAttribute](https://help.aliyun.com/document_detail/35224.html) operation to query the backend servers.
     *  *
     * @param DescribeLoadBalancerAttributeRequest $request DescribeLoadBalancerAttributeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerAttributeResponse DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detail of a Classic Load Balancer (CLB) instance.
     *  *
     * @description >  If backend servers are deployed in a vServer group, you can call the [DescribeVServerGroupAttribute](https://help.aliyun.com/document_detail/35224.html) operation to query the backend servers.
     *  *
     * @param DescribeLoadBalancerAttributeRequest $request DescribeLoadBalancerAttributeRequest
     *
     * @return DescribeLoadBalancerAttributeResponse DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of an HTTP listener.
     *  *
     * @description *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTP listener is created. For more information about how to create an HTTP listener, see [CreateLoadBalancerHTTPListener](https://help.aliyun.com/document_detail/27592.html).
     *  *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request DescribeLoadBalancerHTTPListenerAttributeRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerHTTPListenerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of an HTTP listener.
     *  *
     * @description *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTP listener is created. For more information about how to create an HTTP listener, see [CreateLoadBalancerHTTPListener](https://help.aliyun.com/document_detail/27592.html).
     *  *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request DescribeLoadBalancerHTTPListenerAttributeRequest
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of an HTTPS listener.
     *  *
     * @description *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTPS listener is created. For more information about how to create an HTTPS listener, see [CreateLoadBalancerHTTPSListener](https://help.aliyun.com/document_detail/27593.html).
     *  *
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request DescribeLoadBalancerHTTPSListenerAttributeRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerHTTPSListenerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of an HTTPS listener.
     *  *
     * @description *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTPS listener is created. For more information about how to create an HTTPS listener, see [CreateLoadBalancerHTTPSListener](https://help.aliyun.com/document_detail/27593.html).
     *  *
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request DescribeLoadBalancerHTTPSListenerAttributeRequest
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the listeners of a Classic Load Balancer (CLB) instance.
     *  *
     * @description *   A CLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/2401685.html).
     * *   One or more listeners are added to the CLB instance. For more information, see the following topics:
     *     *   [CreateLoadBalancerUDPListener](~~CreateLoadBalancerUDPListener~~)
     *     *   [CreateLoadBalancerTCPListener](~~CreateLoadBalancerTCPListener~~)
     *     *   [CreateLoadBalancerHTTPListener](~~CreateLoadBalancerHTTPListener~~)
     *     *   [CreateLoadBalancerHTTPSListener](~~CreateLoadBalancerHTTPSListener~~)
     *  *
     * @param DescribeLoadBalancerListenersRequest $request DescribeLoadBalancerListenersRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerListenersResponse DescribeLoadBalancerListenersResponse
     */
    public function describeLoadBalancerListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerListeners',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the listeners of a Classic Load Balancer (CLB) instance.
     *  *
     * @description *   A CLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/2401685.html).
     * *   One or more listeners are added to the CLB instance. For more information, see the following topics:
     *     *   [CreateLoadBalancerUDPListener](~~CreateLoadBalancerUDPListener~~)
     *     *   [CreateLoadBalancerTCPListener](~~CreateLoadBalancerTCPListener~~)
     *     *   [CreateLoadBalancerHTTPListener](~~CreateLoadBalancerHTTPListener~~)
     *     *   [CreateLoadBalancerHTTPSListener](~~CreateLoadBalancerHTTPSListener~~)
     *  *
     * @param DescribeLoadBalancerListenersRequest $request DescribeLoadBalancerListenersRequest
     *
     * @return DescribeLoadBalancerListenersResponse DescribeLoadBalancerListenersResponse
     */
    public function describeLoadBalancerListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerListenersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a TCP listener of Classic Load Balancer (CLB).
     *  *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request DescribeLoadBalancerTCPListenerAttributeRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerTCPListenerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a TCP listener of Classic Load Balancer (CLB).
     *  *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request DescribeLoadBalancerTCPListenerAttributeRequest
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a UDP listener.
     *  *
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request DescribeLoadBalancerUDPListenerAttributeRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerUDPListenerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a UDP listener.
     *  *
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request DescribeLoadBalancerUDPListenerAttributeRequest
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Classic Load Balancer (CLB) instances.
     *  *
     * @param DescribeLoadBalancersRequest $request DescribeLoadBalancersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancersResponse DescribeLoadBalancersResponse
     */
    public function describeLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->loadBalancerStatus)) {
            $query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }
        if (!Utils::isUnset($request->masterZoneId)) {
            $query['MasterZoneId'] = $request->masterZoneId;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        if (!Utils::isUnset($request->serverIntranetAddress)) {
            $query['ServerIntranetAddress'] = $request->serverIntranetAddress;
        }
        if (!Utils::isUnset($request->slaveZoneId)) {
            $query['SlaveZoneId'] = $request->slaveZoneId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancers',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Classic Load Balancer (CLB) instances.
     *  *
     * @param DescribeLoadBalancersRequest $request DescribeLoadBalancersRequest
     *
     * @return DescribeLoadBalancersResponse DescribeLoadBalancersResponse
     */
    public function describeLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about a primary/secondary server group.
     *  *
     * @param DescribeMasterSlaveServerGroupAttributeRequest $request DescribeMasterSlaveServerGroupAttributeRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMasterSlaveServerGroupAttributeResponse DescribeMasterSlaveServerGroupAttributeResponse
     */
    public function describeMasterSlaveServerGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->masterSlaveServerGroupId)) {
            $query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMasterSlaveServerGroupAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMasterSlaveServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about a primary/secondary server group.
     *  *
     * @param DescribeMasterSlaveServerGroupAttributeRequest $request DescribeMasterSlaveServerGroupAttributeRequest
     *
     * @return DescribeMasterSlaveServerGroupAttributeResponse DescribeMasterSlaveServerGroupAttributeResponse
     */
    public function describeMasterSlaveServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMasterSlaveServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries primary/secondary server groups.
     *  *
     * @param DescribeMasterSlaveServerGroupsRequest $request DescribeMasterSlaveServerGroupsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMasterSlaveServerGroupsResponse DescribeMasterSlaveServerGroupsResponse
     */
    public function describeMasterSlaveServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->includeListener)) {
            $query['IncludeListener'] = $request->includeListener;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMasterSlaveServerGroups',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMasterSlaveServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries primary/secondary server groups.
     *  *
     * @param DescribeMasterSlaveServerGroupsRequest $request DescribeMasterSlaveServerGroupsRequest
     *
     * @return DescribeMasterSlaveServerGroupsResponse DescribeMasterSlaveServerGroupsResponse
     */
    public function describeMasterSlaveServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMasterSlaveServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries regions.
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
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2014-05-15',
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
     * @summary Queries regions.
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
     * @summary Queries the configurations of a specified forwarding rule.
     *  *
     * @param DescribeRuleAttributeRequest $request DescribeRuleAttributeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleAttributeResponse DescribeRuleAttributeResponse
     */
    public function describeRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a specified forwarding rule.
     *  *
     * @param DescribeRuleAttributeRequest $request DescribeRuleAttributeRequest
     *
     * @return DescribeRuleAttributeResponse DescribeRuleAttributeResponse
     */
    public function describeRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the forwarding rules that are configured for a specified listener.
     *  *
     * @param DescribeRulesRequest $request DescribeRulesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRulesResponse DescribeRulesResponse
     */
    public function describeRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRules',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the forwarding rules that are configured for a specified listener.
     *  *
     * @param DescribeRulesRequest $request DescribeRulesRequest
     *
     * @return DescribeRulesResponse DescribeRulesResponse
     */
    public function describeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries server certificates of Classic Load Balancer (CLB) instances in a specified region.
     *  *
     * @description >  For security reasons, only fingerprints and names of the server certificates are returned. The content of the server certificates and private keys is not returned.
     *  *
     * @param DescribeServerCertificatesRequest $request DescribeServerCertificatesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServerCertificatesResponse DescribeServerCertificatesResponse
     */
    public function describeServerCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServerCertificates',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServerCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries server certificates of Classic Load Balancer (CLB) instances in a specified region.
     *  *
     * @description >  For security reasons, only fingerprints and names of the server certificates are returned. The content of the server certificates and private keys is not returned.
     *  *
     * @param DescribeServerCertificatesRequest $request DescribeServerCertificatesRequest
     *
     * @return DescribeServerCertificatesResponse DescribeServerCertificatesResponse
     */
    public function describeServerCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerCertificatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tags.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   You can query tags by instance ID, tag key, and tag value. If the operation is successful, the system returns all tags that match the specified conditions.
     * *   The logical relationship among the specified conditions is AND. Only tags that match all the specified conditions are returned.
     * *   If the Tagkey parameter is set and the Tagvalue parameter is not set, all tags that contain the specified tag key are returned.
     * *   If you set the Tagvalue parameter in a request, you must also set the Tagkey parameter in the request.
     * *   If you set both the Tagkey and Tagvalue parameters, only tags that contain the specified keys and values are returned.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->distinctKey)) {
            $query['DistinctKey'] = $request->distinctKey;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTags',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries tags.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   You can query tags by instance ID, tag key, and tag value. If the operation is successful, the system returns all tags that match the specified conditions.
     * *   The logical relationship among the specified conditions is AND. Only tags that match all the specified conditions are returned.
     * *   If the Tagkey parameter is set and the Tagvalue parameter is not set, all tags that contain the specified tag key are returned.
     * *   If you set the Tagvalue parameter in a request, you must also set the Tagkey parameter in the request.
     * *   If you set both the Tagkey and Tagvalue parameters, only tags that contain the specified keys and values are returned.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about a vServer group.
     *  *
     * @param DescribeVServerGroupAttributeRequest $request DescribeVServerGroupAttributeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVServerGroupAttributeResponse DescribeVServerGroupAttributeResponse
     */
    public function describeVServerGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVServerGroupAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about a vServer group.
     *  *
     * @param DescribeVServerGroupAttributeRequest $request DescribeVServerGroupAttributeRequest
     *
     * @return DescribeVServerGroupAttributeResponse DescribeVServerGroupAttributeResponse
     */
    public function describeVServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries server groups.
     *  *
     * @param DescribeVServerGroupsRequest $request DescribeVServerGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVServerGroupsResponse DescribeVServerGroupsResponse
     */
    public function describeVServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->includeListener)) {
            $query['IncludeListener'] = $request->includeListener;
        }
        if (!Utils::isUnset($request->includeRule)) {
            $query['IncludeRule'] = $request->includeRule;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVServerGroups',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries server groups.
     *  *
     * @param DescribeVServerGroupsRequest $request DescribeVServerGroupsRequest
     *
     * @return DescribeVServerGroupsResponse DescribeVServerGroupsResponse
     */
    public function describeVServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the zones in a region.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the zones in a region.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Enables fine-grained monitoring for the current region.
     *  *
     * @param EnableHighDefinationMonitorRequest $request EnableHighDefinationMonitorRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableHighDefinationMonitorResponse EnableHighDefinationMonitorResponse
     */
    public function enableHighDefinationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logProject)) {
            $query['LogProject'] = $request->logProject;
        }
        if (!Utils::isUnset($request->logStore)) {
            $query['LogStore'] = $request->logStore;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableHighDefinationMonitor',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableHighDefinationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables fine-grained monitoring for the current region.
     *  *
     * @param EnableHighDefinationMonitorRequest $request EnableHighDefinationMonitorRequest
     *
     * @return EnableHighDefinationMonitorResponse EnableHighDefinationMonitorResponse
     */
    public function enableHighDefinationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHighDefinationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Transport Layer Security (TLS) policies.
     *  *
     * @param ListTLSCipherPoliciesRequest $request ListTLSCipherPoliciesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTLSCipherPoliciesResponse ListTLSCipherPoliciesResponse
     */
    public function listTLSCipherPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeListener)) {
            $query['IncludeListener'] = $request->includeListener;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->TLSCipherPolicyId)) {
            $query['TLSCipherPolicyId'] = $request->TLSCipherPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTLSCipherPolicies',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTLSCipherPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Transport Layer Security (TLS) policies.
     *  *
     * @param ListTLSCipherPoliciesRequest $request ListTLSCipherPoliciesRequest
     *
     * @return ListTLSCipherPoliciesResponse ListTLSCipherPoliciesResponse
     */
    public function listTLSCipherPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTLSCipherPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tags that are added to one or more instances.
     *  *
     * @description *   Set **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object to be queried.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you set only **Tag.N.Key**, all tag values that are associated with the specified tag key are returned. If you set only **Tag.N.Value**, an error message is returned.
     * *   If you set **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version'     => '2014-05-15',
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
     * @summary Queries tags that are added to one or more instances.
     *  *
     * @description *   Set **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object to be queried.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you set only **Tag.N.Key**, all tag values that are associated with the specified tag key are returned. If you set only **Tag.N.Value**, an error message is returned.
     * *   If you set **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
     * @summary Modifies the configuration of fine-grained monitoring in a specified region.
     *  *
     * @param ModifyHighDefinationMonitorRequest $request ModifyHighDefinationMonitorRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHighDefinationMonitorResponse ModifyHighDefinationMonitorResponse
     */
    public function modifyHighDefinationMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logProject)) {
            $query['LogProject'] = $request->logProject;
        }
        if (!Utils::isUnset($request->logStore)) {
            $query['LogStore'] = $request->logStore;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHighDefinationMonitor',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHighDefinationMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of fine-grained monitoring in a specified region.
     *  *
     * @param ModifyHighDefinationMonitorRequest $request ModifyHighDefinationMonitorRequest
     *
     * @return ModifyHighDefinationMonitorResponse ModifyHighDefinationMonitorResponse
     */
    public function modifyHighDefinationMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHighDefinationMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the metering method of a pay-as-you-go Classic Load Balancer (CLB) instance.
     *  *
     * @description > *   For pay-as-you-go CLB instances, you can only change the metering method from pay-by-specification to pay-by-LCU. You cannot change the metering method from pay-by-LCU to pay-by-specification.
     * >*   This operation can change the metering method of only one instance at a time.
     *  *
     * @param ModifyLoadBalancerInstanceChargeTypeRequest $request ModifyLoadBalancerInstanceChargeTypeRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLoadBalancerInstanceChargeTypeResponse ModifyLoadBalancerInstanceChargeTypeResponse
     */
    public function modifyLoadBalancerInstanceChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerSpec)) {
            $query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLoadBalancerInstanceChargeType',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLoadBalancerInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the metering method of a pay-as-you-go Classic Load Balancer (CLB) instance.
     *  *
     * @description > *   For pay-as-you-go CLB instances, you can only change the metering method from pay-by-specification to pay-by-LCU. You cannot change the metering method from pay-by-LCU to pay-by-specification.
     * >*   This operation can change the metering method of only one instance at a time.
     *  *
     * @param ModifyLoadBalancerInstanceChargeTypeRequest $request ModifyLoadBalancerInstanceChargeTypeRequest
     *
     * @return ModifyLoadBalancerInstanceChargeTypeResponse ModifyLoadBalancerInstanceChargeTypeResponse
     */
    public function modifyLoadBalancerInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the specification of a Classic Load Balancer (CLB) instance.
     *  *
     * @param ModifyLoadBalancerInstanceSpecRequest $request ModifyLoadBalancerInstanceSpecRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLoadBalancerInstanceSpecResponse ModifyLoadBalancerInstanceSpecResponse
     */
    public function modifyLoadBalancerInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerSpec)) {
            $query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLoadBalancerInstanceSpec',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLoadBalancerInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the specification of a Classic Load Balancer (CLB) instance.
     *  *
     * @param ModifyLoadBalancerInstanceSpecRequest $request ModifyLoadBalancerInstanceSpecRequest
     *
     * @return ModifyLoadBalancerInstanceSpecResponse ModifyLoadBalancerInstanceSpecResponse
     */
    public function modifyLoadBalancerInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the metering method of an Internet-facing Classic Load Balancer (CLB) instance.
     *  *
     * @description ## Description
     * *   If you modify only the maximum bandwidth of a pay-by-bandwidth CLB instance, the new bandwidth immediately takes effect.
     * *   If you modify the metering method (for example, switch from pay-by-bandwidth to pay-by-data-transfer), the new metering method and the other changes specified in the operation take effect at 00:00:00 the next day.
     *  *
     * @param ModifyLoadBalancerInternetSpecRequest $request ModifyLoadBalancerInternetSpecRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLoadBalancerInternetSpecResponse ModifyLoadBalancerInternetSpecResponse
     */
    public function modifyLoadBalancerInternetSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLoadBalancerInternetSpec',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLoadBalancerInternetSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the metering method of an Internet-facing Classic Load Balancer (CLB) instance.
     *  *
     * @description ## Description
     * *   If you modify only the maximum bandwidth of a pay-by-bandwidth CLB instance, the new bandwidth immediately takes effect.
     * *   If you modify the metering method (for example, switch from pay-by-bandwidth to pay-by-data-transfer), the new metering method and the other changes specified in the operation take effect at 00:00:00 the next day.
     *  *
     * @param ModifyLoadBalancerInternetSpecRequest $request ModifyLoadBalancerInternetSpecRequest
     *
     * @return ModifyLoadBalancerInternetSpecResponse ModifyLoadBalancerInternetSpecResponse
     */
    public function modifyLoadBalancerInternetSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerInternetSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the billing method of a Classic Load Balancer (CLB) instance from pay-as-you-go to subscription.
     *  *
     * @param ModifyLoadBalancerPayTypeRequest $request ModifyLoadBalancerPayTypeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLoadBalancerPayTypeResponse ModifyLoadBalancerPayTypeResponse
     */
    public function modifyLoadBalancerPayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLoadBalancerPayType',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLoadBalancerPayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the billing method of a Classic Load Balancer (CLB) instance from pay-as-you-go to subscription.
     *  *
     * @param ModifyLoadBalancerPayTypeRequest $request ModifyLoadBalancerPayTypeRequest
     *
     * @return ModifyLoadBalancerPayTypeResponse ModifyLoadBalancerPayTypeResponse
     */
    public function modifyLoadBalancerPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerPayTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Replaces backend servers in a specified vServer group.
     *  *
     * @description You can call this operation to replace the backend servers in a specified vServer group. To modify the configurations of the backend servers, such as their weights, you can call the [SetVServerGroupAttribute](https://help.aliyun.com/document_detail/35217.html) operation.
     *  *
     * @param ModifyVServerGroupBackendServersRequest $request ModifyVServerGroupBackendServersRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVServerGroupBackendServersResponse ModifyVServerGroupBackendServersResponse
     */
    public function modifyVServerGroupBackendServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newBackendServers)) {
            $query['NewBackendServers'] = $request->newBackendServers;
        }
        if (!Utils::isUnset($request->oldBackendServers)) {
            $query['OldBackendServers'] = $request->oldBackendServers;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVServerGroupBackendServers',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVServerGroupBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Replaces backend servers in a specified vServer group.
     *  *
     * @description You can call this operation to replace the backend servers in a specified vServer group. To modify the configurations of the backend servers, such as their weights, you can call the [SetVServerGroupAttribute](https://help.aliyun.com/document_detail/35217.html) operation.
     *  *
     * @param ModifyVServerGroupBackendServersRequest $request ModifyVServerGroupBackendServersRequest
     *
     * @return ModifyVServerGroupBackendServersResponse ModifyVServerGroupBackendServersResponse
     */
    public function modifyVServerGroupBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVServerGroupBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a resource to another resource group.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->accessKeyId)) {
            $query['access_key_id'] = $request->accessKeyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a resource to another resource group.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Removes IP entries from the network access control list (ACL) of a Classic Load Balancer (CLB) instance.
     *  *
     * @param RemoveAccessControlListEntryRequest $request RemoveAccessControlListEntryRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveAccessControlListEntryResponse RemoveAccessControlListEntryResponse
     */
    public function removeAccessControlListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntrys)) {
            $query['AclEntrys'] = $request->aclEntrys;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAccessControlListEntry',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAccessControlListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes IP entries from the network access control list (ACL) of a Classic Load Balancer (CLB) instance.
     *  *
     * @param RemoveAccessControlListEntryRequest $request RemoveAccessControlListEntryRequest
     *
     * @return RemoveAccessControlListEntryResponse RemoveAccessControlListEntryResponse
     */
    public function removeAccessControlListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAccessControlListEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Removes backend servers.
     *  *
     * @description >  If the backend servers that you want to remove are not in the server list of the Classic Load Balancer (CLB) instance, the request fails. However, the system does not report an error.
     *  *
     * @param RemoveBackendServersRequest $request RemoveBackendServersRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveBackendServersResponse RemoveBackendServersResponse
     */
    public function removeBackendServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServers)) {
            $query['BackendServers'] = $request->backendServers;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveBackendServers',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes backend servers.
     *  *
     * @description >  If the backend servers that you want to remove are not in the server list of the Classic Load Balancer (CLB) instance, the request fails. However, the system does not report an error.
     *  *
     * @param RemoveBackendServersRequest $request RemoveBackendServersRequest
     *
     * @return RemoveBackendServersResponse RemoveBackendServersResponse
     */
    public function removeBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Removes IP addresses or CIDR blocks from the whitelist of a listener.
     *  *
     * @param RemoveListenerWhiteListItemRequest $request RemoveListenerWhiteListItemRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveListenerWhiteListItemResponse RemoveListenerWhiteListItemResponse
     */
    public function removeListenerWhiteListItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceItems)) {
            $query['SourceItems'] = $request->sourceItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveListenerWhiteListItem',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveListenerWhiteListItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes IP addresses or CIDR blocks from the whitelist of a listener.
     *  *
     * @param RemoveListenerWhiteListItemRequest $request RemoveListenerWhiteListItemRequest
     *
     * @return RemoveListenerWhiteListItemResponse RemoveListenerWhiteListItemResponse
     */
    public function removeListenerWhiteListItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeListenerWhiteListItemWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTagsRequest $request RemoveTagsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTagsResponse RemoveTagsResponse
     */
    public function removeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTags',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveTagsRequest $request RemoveTagsRequest
     *
     * @return RemoveTagsResponse RemoveTagsResponse
     */
    public function removeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Removes one or more backend servers from a specified vServer group.
     *  *
     * @description >  If one or more backend servers specified by the **BackendServers** parameter do not exist in the specified vServer group, these backend servers are ignored and no error message is returned.
     *  *
     * @param RemoveVServerGroupBackendServersRequest $request RemoveVServerGroupBackendServersRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveVServerGroupBackendServersResponse RemoveVServerGroupBackendServersResponse
     */
    public function removeVServerGroupBackendServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServers)) {
            $query['BackendServers'] = $request->backendServers;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveVServerGroupBackendServers',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveVServerGroupBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes one or more backend servers from a specified vServer group.
     *  *
     * @description >  If one or more backend servers specified by the **BackendServers** parameter do not exist in the specified vServer group, these backend servers are ignored and no error message is returned.
     *  *
     * @param RemoveVServerGroupBackendServersRequest $request RemoveVServerGroupBackendServersRequest
     *
     * @return RemoveVServerGroupBackendServersResponse RemoveVServerGroupBackendServersResponse
     */
    public function removeVServerGroupBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVServerGroupBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of a network access control list (ACL).
     *  *
     * @param SetAccessControlListAttributeRequest $request SetAccessControlListAttributeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAccessControlListAttributeResponse SetAccessControlListAttributeResponse
     */
    public function setAccessControlListAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessControlListAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccessControlListAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name of a network access control list (ACL).
     *  *
     * @param SetAccessControlListAttributeRequest $request SetAccessControlListAttributeRequest
     *
     * @return SetAccessControlListAttributeResponse SetAccessControlListAttributeResponse
     */
    public function setAccessControlListAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessControlListAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an access log forwarding rule for a Classic Load Balancer (CLB) instance.
     *  *
     * @param SetAccessLogsDownloadAttributeRequest $request SetAccessLogsDownloadAttributeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAccessLogsDownloadAttributeResponse SetAccessLogsDownloadAttributeResponse
     */
    public function setAccessLogsDownloadAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->logsDownloadAttributes)) {
            $query['LogsDownloadAttributes'] = $request->logsDownloadAttributes;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessLogsDownloadAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccessLogsDownloadAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an access log forwarding rule for a Classic Load Balancer (CLB) instance.
     *  *
     * @param SetAccessLogsDownloadAttributeRequest $request SetAccessLogsDownloadAttributeRequest
     *
     * @return SetAccessLogsDownloadAttributeResponse SetAccessLogsDownloadAttributeResponse
     */
    public function setAccessLogsDownloadAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessLogsDownloadAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the weights of backend servers.
     *  *
     * @param SetBackendServersRequest $request SetBackendServersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetBackendServersResponse SetBackendServersResponse
     */
    public function setBackendServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServers)) {
            $query['BackendServers'] = $request->backendServers;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetBackendServers',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the weights of backend servers.
     *  *
     * @param SetBackendServersRequest $request SetBackendServersRequest
     *
     * @return SetBackendServersResponse SetBackendServersResponse
     */
    public function setBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the name of a CA Certificate.
     *  *
     * @param SetCACertificateNameRequest $request SetCACertificateNameRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCACertificateNameResponse SetCACertificateNameResponse
     */
    public function setCACertificateNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->CACertificateId)) {
            $query['CACertificateId'] = $request->CACertificateId;
        }
        if (!Utils::isUnset($request->CACertificateName)) {
            $query['CACertificateName'] = $request->CACertificateName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCACertificateName',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCACertificateNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the name of a CA Certificate.
     *  *
     * @param SetCACertificateNameRequest $request SetCACertificateNameRequest
     *
     * @return SetCACertificateNameResponse SetCACertificateNameResponse
     */
    public function setCACertificateName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCACertificateNameWithOptions($request, $runtime);
    }

    /**
     * @summary Replaces an additional certificate.
     *  *
     * @description >  You cannot replace an additional certificate for a listener that is added to a shared-resource Server Load Balancer (SLB) instance.
     *  *
     * @param SetDomainExtensionAttributeRequest $request SetDomainExtensionAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDomainExtensionAttributeResponse SetDomainExtensionAttributeResponse
     */
    public function setDomainExtensionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainExtensionId)) {
            $query['DomainExtensionId'] = $request->domainExtensionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainExtensionAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainExtensionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Replaces an additional certificate.
     *  *
     * @description >  You cannot replace an additional certificate for a listener that is added to a shared-resource Server Load Balancer (SLB) instance.
     *  *
     * @param SetDomainExtensionAttributeRequest $request SetDomainExtensionAttributeRequest
     *
     * @return SetDomainExtensionAttributeResponse SetDomainExtensionAttributeResponse
     */
    public function setDomainExtensionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainExtensionAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the whitelist of a specified listener.
     *  *
     * @param SetListenerAccessControlStatusRequest $request SetListenerAccessControlStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetListenerAccessControlStatusResponse SetListenerAccessControlStatusResponse
     */
    public function setListenerAccessControlStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessControlStatus)) {
            $query['AccessControlStatus'] = $request->accessControlStatus;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetListenerAccessControlStatus',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetListenerAccessControlStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables the whitelist of a specified listener.
     *  *
     * @param SetListenerAccessControlStatusRequest $request SetListenerAccessControlStatusRequest
     *
     * @return SetListenerAccessControlStatusResponse SetListenerAccessControlStatusResponse
     */
    public function setListenerAccessControlStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setListenerAccessControlStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables deletion protection for an SLB instance.
     *  *
     * @param SetLoadBalancerDeleteProtectionRequest $request SetLoadBalancerDeleteProtectionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerDeleteProtectionResponse SetLoadBalancerDeleteProtectionResponse
     */
    public function setLoadBalancerDeleteProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteProtection)) {
            $query['DeleteProtection'] = $request->deleteProtection;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerDeleteProtection',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerDeleteProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables deletion protection for an SLB instance.
     *  *
     * @param SetLoadBalancerDeleteProtectionRequest $request SetLoadBalancerDeleteProtectionRequest
     *
     * @return SetLoadBalancerDeleteProtectionResponse SetLoadBalancerDeleteProtectionResponse
     */
    public function setLoadBalancerDeleteProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerDeleteProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an HTTP listener.
     *  *
     * @description ### Prerequisites
     * *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTP listener is created. For more information about how to create an HTTP listener, see [CreateLoadBalancerHTTPListener](https://help.aliyun.com/document_detail/27592.html).
     *  *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request SetLoadBalancerHTTPListenerAttributeRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->cookie)) {
            $query['Cookie'] = $request->cookie;
        }
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->gzip)) {
            $query['Gzip'] = $request->gzip;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->stickySession)) {
            $query['StickySession'] = $request->stickySession;
        }
        if (!Utils::isUnset($request->stickySessionType)) {
            $query['StickySessionType'] = $request->stickySessionType;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroup)) {
            $query['VServerGroup'] = $request->VServerGroup;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->XForwardedFor)) {
            $query['XForwardedFor'] = $request->XForwardedFor;
        }
        if (!Utils::isUnset($request->XForwardedFor_ClientSrcPort)) {
            $query['XForwardedFor_ClientSrcPort'] = $request->XForwardedFor_ClientSrcPort;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBID)) {
            $query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBIP)) {
            $query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBPORT)) {
            $query['XForwardedFor_SLBPORT'] = $request->XForwardedFor_SLBPORT;
        }
        if (!Utils::isUnset($request->XForwardedFor_proto)) {
            $query['XForwardedFor_proto'] = $request->XForwardedFor_proto;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerHTTPListenerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an HTTP listener.
     *  *
     * @description ### Prerequisites
     * *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTP listener is created. For more information about how to create an HTTP listener, see [CreateLoadBalancerHTTPListener](https://help.aliyun.com/document_detail/27592.html).
     *  *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request SetLoadBalancerHTTPListenerAttributeRequest
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an HTTPS listener.
     *  *
     * @description *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTPS listener is created. For more information about how to create an HTTPS listener, see [CreateLoadBalancerHTTPSListener](https://help.aliyun.com/document_detail/27593.html).
     *  *
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request SetLoadBalancerHTTPSListenerAttributeRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->CACertificateId)) {
            $query['CACertificateId'] = $request->CACertificateId;
        }
        if (!Utils::isUnset($request->cookie)) {
            $query['Cookie'] = $request->cookie;
        }
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableHttp2)) {
            $query['EnableHttp2'] = $request->enableHttp2;
        }
        if (!Utils::isUnset($request->gzip)) {
            $query['Gzip'] = $request->gzip;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        if (!Utils::isUnset($request->stickySession)) {
            $query['StickySession'] = $request->stickySession;
        }
        if (!Utils::isUnset($request->stickySessionType)) {
            $query['StickySessionType'] = $request->stickySessionType;
        }
        if (!Utils::isUnset($request->TLSCipherPolicy)) {
            $query['TLSCipherPolicy'] = $request->TLSCipherPolicy;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroup)) {
            $query['VServerGroup'] = $request->VServerGroup;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->XForwardedFor)) {
            $query['XForwardedFor'] = $request->XForwardedFor;
        }
        if (!Utils::isUnset($request->XForwardedFor_ClientSrcPort)) {
            $query['XForwardedFor_ClientSrcPort'] = $request->XForwardedFor_ClientSrcPort;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBID)) {
            $query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBIP)) {
            $query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBPORT)) {
            $query['XForwardedFor_SLBPORT'] = $request->XForwardedFor_SLBPORT;
        }
        if (!Utils::isUnset($request->XForwardedFor_proto)) {
            $query['XForwardedFor_proto'] = $request->XForwardedFor_proto;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerHTTPSListenerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an HTTPS listener.
     *  *
     * @description *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   An HTTPS listener is created. For more information about how to create an HTTPS listener, see [CreateLoadBalancerHTTPSListener](https://help.aliyun.com/document_detail/27593.html).
     *  *
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request SetLoadBalancerHTTPSListenerAttributeRequest
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configuration of the configuration read-only mode for a Classic Load Balancer (CLB) instance.
     *  *
     * @param SetLoadBalancerModificationProtectionRequest $request SetLoadBalancerModificationProtectionRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerModificationProtectionResponse SetLoadBalancerModificationProtectionResponse
     */
    public function setLoadBalancerModificationProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->modificationProtectionReason)) {
            $query['ModificationProtectionReason'] = $request->modificationProtectionReason;
        }
        if (!Utils::isUnset($request->modificationProtectionStatus)) {
            $query['ModificationProtectionStatus'] = $request->modificationProtectionStatus;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerModificationProtection',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerModificationProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of the configuration read-only mode for a Classic Load Balancer (CLB) instance.
     *  *
     * @param SetLoadBalancerModificationProtectionRequest $request SetLoadBalancerModificationProtectionRequest
     *
     * @return SetLoadBalancerModificationProtectionResponse SetLoadBalancerModificationProtectionResponse
     */
    public function setLoadBalancerModificationProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerModificationProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of a Classic Load Balancer (CLB) instance.
     *  *
     * @param SetLoadBalancerNameRequest $request SetLoadBalancerNameRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerNameResponse SetLoadBalancerNameResponse
     */
    public function setLoadBalancerNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerName',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name of a Classic Load Balancer (CLB) instance.
     *  *
     * @param SetLoadBalancerNameRequest $request SetLoadBalancerNameRequest
     *
     * @return SetLoadBalancerNameResponse SetLoadBalancerNameResponse
     */
    public function setLoadBalancerName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerNameWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the state of a Classic Load Balancer (CLB) instance.
     *  *
     * @param SetLoadBalancerStatusRequest $request SetLoadBalancerStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerStatusResponse SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerStatus)) {
            $query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerStatus',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the state of a Classic Load Balancer (CLB) instance.
     *  *
     * @param SetLoadBalancerStatusRequest $request SetLoadBalancerStatusRequest
     *
     * @return SetLoadBalancerStatusResponse SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a TCP listener of Classic Load Balancer (CLB).
     *  *
     * @description *   A CLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/2401685.html).
     * *   A TCP listener is created. For more information, see [CreateLoadBalancerTCPListener](~~CreateLoadBalancerTCPListener~~).
     *  *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request SetLoadBalancerTCPListenerAttributeRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->connectionDrain)) {
            $query['ConnectionDrain'] = $request->connectionDrain;
        }
        if (!Utils::isUnset($request->connectionDrainTimeout)) {
            $query['ConnectionDrainTimeout'] = $request->connectionDrainTimeout;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->establishedTimeout)) {
            $query['EstablishedTimeout'] = $request->establishedTimeout;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckSwitch)) {
            $query['HealthCheckSwitch'] = $request->healthCheckSwitch;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $query['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->masterSlaveServerGroup)) {
            $query['MasterSlaveServerGroup'] = $request->masterSlaveServerGroup;
        }
        if (!Utils::isUnset($request->masterSlaveServerGroupId)) {
            $query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->persistenceTimeout)) {
            $query['PersistenceTimeout'] = $request->persistenceTimeout;
        }
        if (!Utils::isUnset($request->proxyProtocolV2Enabled)) {
            $query['ProxyProtocolV2Enabled'] = $request->proxyProtocolV2Enabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->synProxy)) {
            $query['SynProxy'] = $request->synProxy;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroup)) {
            $query['VServerGroup'] = $request->VServerGroup;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerTCPListenerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a TCP listener of Classic Load Balancer (CLB).
     *  *
     * @description *   A CLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/2401685.html).
     * *   A TCP listener is created. For more information, see [CreateLoadBalancerTCPListener](~~CreateLoadBalancerTCPListener~~).
     *  *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request SetLoadBalancerTCPListenerAttributeRequest
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a UDP listener.
     *  *
     * @description *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   A UDP listener is created. For more information, see [CreateLoadBalancerUDPListener](https://help.aliyun.com/document_detail/27595.html).
     *  *
     * @param SetLoadBalancerUDPListenerAttributeRequest $request SetLoadBalancerUDPListenerAttributeRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclStatus)) {
            $query['AclStatus'] = $request->aclStatus;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckSwitch)) {
            $query['HealthCheckSwitch'] = $request->healthCheckSwitch;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->masterSlaveServerGroup)) {
            $query['MasterSlaveServerGroup'] = $request->masterSlaveServerGroup;
        }
        if (!Utils::isUnset($request->masterSlaveServerGroupId)) {
            $query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->proxyProtocolV2Enabled)) {
            $query['ProxyProtocolV2Enabled'] = $request->proxyProtocolV2Enabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroup)) {
            $query['VServerGroup'] = $request->VServerGroup;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->healthCheckExp)) {
            $query['healthCheckExp'] = $request->healthCheckExp;
        }
        if (!Utils::isUnset($request->healthCheckReq)) {
            $query['healthCheckReq'] = $request->healthCheckReq;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerUDPListenerAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a UDP listener.
     *  *
     * @description *   A Classic Load Balancer (CLB) instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/27577.html).
     * *   A UDP listener is created. For more information, see [CreateLoadBalancerUDPListener](https://help.aliyun.com/document_detail/27595.html).
     *  *
     * @param SetLoadBalancerUDPListenerAttributeRequest $request SetLoadBalancerUDPListenerAttributeRequest
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a forwarding rule that is associated with a vServer group.
     *  *
     * @param SetRuleRequest $request SetRuleRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SetRuleResponse SetRuleResponse
     */
    public function setRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cookie)) {
            $query['Cookie'] = $request->cookie;
        }
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerSync)) {
            $query['ListenerSync'] = $request->listenerSync;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->stickySession)) {
            $query['StickySession'] = $request->stickySession;
        }
        if (!Utils::isUnset($request->stickySessionType)) {
            $query['StickySessionType'] = $request->stickySessionType;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetRule',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a forwarding rule that is associated with a vServer group.
     *  *
     * @param SetRuleRequest $request SetRuleRequest
     *
     * @return SetRuleResponse SetRuleResponse
     */
    public function setRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Sets a name for a server certificate.
     *  *
     * @param SetServerCertificateNameRequest $request SetServerCertificateNameRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetServerCertificateNameResponse SetServerCertificateNameResponse
     */
    public function setServerCertificateNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        if (!Utils::isUnset($request->serverCertificateName)) {
            $query['ServerCertificateName'] = $request->serverCertificateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetServerCertificateName',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetServerCertificateNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets a name for a server certificate.
     *  *
     * @param SetServerCertificateNameRequest $request SetServerCertificateNameRequest
     *
     * @return SetServerCertificateNameResponse SetServerCertificateNameResponse
     */
    public function setServerCertificateName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setServerCertificateNameWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a Transport Layer Security (TLS) policy.
     *  *
     * @param SetTLSCipherPolicyAttributeRequest $request SetTLSCipherPolicyAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetTLSCipherPolicyAttributeResponse SetTLSCipherPolicyAttributeResponse
     */
    public function setTLSCipherPolicyAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ciphers)) {
            $query['Ciphers'] = $request->ciphers;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->TLSCipherPolicyId)) {
            $query['TLSCipherPolicyId'] = $request->TLSCipherPolicyId;
        }
        if (!Utils::isUnset($request->TLSVersions)) {
            $query['TLSVersions'] = $request->TLSVersions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetTLSCipherPolicyAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetTLSCipherPolicyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a Transport Layer Security (TLS) policy.
     *  *
     * @param SetTLSCipherPolicyAttributeRequest $request SetTLSCipherPolicyAttributeRequest
     *
     * @return SetTLSCipherPolicyAttributeResponse SetTLSCipherPolicyAttributeResponse
     */
    public function setTLSCipherPolicyAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTLSCipherPolicyAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a vServer group.
     *  *
     * @description This operation allows you to modify only the name of a vServer group and the weights of the backend servers in the vServer group.
     * *   If you want to modify backend servers in a specified vServer group, call the [ModifyVServerGroupBackendServers](https://help.aliyun.com/document_detail/35220.html) operation.
     * *   If you want to add backend servers to a specified vServer group, call the [AddVServerGroupBackendServers](https://help.aliyun.com/document_detail/35218.html) operation.
     *  *
     * @param SetVServerGroupAttributeRequest $request SetVServerGroupAttributeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetVServerGroupAttributeResponse SetVServerGroupAttributeResponse
     */
    public function setVServerGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServers)) {
            $query['BackendServers'] = $request->backendServers;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->VServerGroupName)) {
            $query['VServerGroupName'] = $request->VServerGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetVServerGroupAttribute',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetVServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a vServer group.
     *  *
     * @description This operation allows you to modify only the name of a vServer group and the weights of the backend servers in the vServer group.
     * *   If you want to modify backend servers in a specified vServer group, call the [ModifyVServerGroupBackendServers](https://help.aliyun.com/document_detail/35220.html) operation.
     * *   If you want to add backend servers to a specified vServer group, call the [AddVServerGroupBackendServers](https://help.aliyun.com/document_detail/35218.html) operation.
     *  *
     * @param SetVServerGroupAttributeRequest $request SetVServerGroupAttributeRequest
     *
     * @return SetVServerGroupAttributeResponse SetVServerGroupAttributeResponse
     */
    public function setVServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to start a listener.
     *  *
     * @description When you call this operation, note the following items:
     * *   You can call the operation only when the listener is in the Stopped state.
     * *   After the operation is called, the status of the listener changes to Starting.
     * *   You cannot call this operation when the SLB instance to which the listener is bound is in the Locked state.
     *  *
     * @param StartLoadBalancerListenerRequest $request StartLoadBalancerListenerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return StartLoadBalancerListenerResponse StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartLoadBalancerListener',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to start a listener.
     *  *
     * @description When you call this operation, note the following items:
     * *   You can call the operation only when the listener is in the Stopped state.
     * *   After the operation is called, the status of the listener changes to Starting.
     * *   You cannot call this operation when the SLB instance to which the listener is bound is in the Locked state.
     *  *
     * @param StartLoadBalancerListenerRequest $request StartLoadBalancerListenerRequest
     *
     * @return StartLoadBalancerListenerResponse StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a listener.
     *  *
     * @description Before you make this API call, note the following:
     * *   After the API call is successfully made, the listener enters the stopped state.
     * *   If the Server Load Balancer (SLB) instance to which the listener to be stopped belongs is in the locked state, this API call cannot be made.
     * >  If you stop the listener, your services will be disrupted. Exercise caution when you perform this action.
     *  *
     * @param StopLoadBalancerListenerRequest $request StopLoadBalancerListenerRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return StopLoadBalancerListenerResponse StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopLoadBalancerListener',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a listener.
     *  *
     * @description Before you make this API call, note the following:
     * *   After the API call is successfully made, the listener enters the stopped state.
     * *   If the Server Load Balancer (SLB) instance to which the listener to be stopped belongs is in the locked state, this API call cannot be made.
     * >  If you stop the listener, your services will be disrupted. Exercise caution when you perform this action.
     *  *
     * @param StopLoadBalancerListenerRequest $request StopLoadBalancerListenerRequest
     *
     * @return StopLoadBalancerListenerResponse StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates tags and adds the tags to resources.
     *  *
     * @description >  You can add at most 20 tags to each instance. Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number is reached, an error message is returned.
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version'     => '2014-05-15',
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
     * @summary Creates tags and adds the tags to resources.
     *  *
     * @description >  You can add at most 20 tags to each instance. Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number is reached, an error message is returned.
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
     * @summary Removes tags from specified resources.
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version'     => '2014-05-15',
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
     * @summary Removes tags from specified resources.
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
     * @summary Uploads a CA certificate.
     *  *
     * @description You can upload only one CA certificate at a time. After a CA certificate is uploaded, the certificate ID, name, and fingerprint are returned.
     *  *
     * @param UploadCACertificateRequest $request UploadCACertificateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadCACertificateResponse UploadCACertificateResponse
     */
    public function uploadCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->CACertificate)) {
            $query['CACertificate'] = $request->CACertificate;
        }
        if (!Utils::isUnset($request->CACertificateName)) {
            $query['CACertificateName'] = $request->CACertificateName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadCACertificate',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads a CA certificate.
     *  *
     * @description You can upload only one CA certificate at a time. After a CA certificate is uploaded, the certificate ID, name, and fingerprint are returned.
     *  *
     * @param UploadCACertificateRequest $request UploadCACertificateRequest
     *
     * @return UploadCACertificateResponse UploadCACertificateResponse
     */
    public function uploadCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCACertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads a server certificate.
     *  *
     * @description *   You can upload only one server certificate and its private key in each call.
     * *   After a server certificate and its private key are uploaded, the fingerprints of all server certificates that belong to your Alibaba Cloud account are returned.
     *  *
     * @param UploadServerCertificateRequest $request UploadServerCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadServerCertificateResponse UploadServerCertificateResponse
     */
    public function uploadServerCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliCloudCertificateId)) {
            $query['AliCloudCertificateId'] = $request->aliCloudCertificateId;
        }
        if (!Utils::isUnset($request->aliCloudCertificateName)) {
            $query['AliCloudCertificateName'] = $request->aliCloudCertificateName;
        }
        if (!Utils::isUnset($request->aliCloudCertificateRegionId)) {
            $query['AliCloudCertificateRegionId'] = $request->aliCloudCertificateRegionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serverCertificate)) {
            $query['ServerCertificate'] = $request->serverCertificate;
        }
        if (!Utils::isUnset($request->serverCertificateName)) {
            $query['ServerCertificateName'] = $request->serverCertificateName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadServerCertificate',
            'version'     => '2014-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadServerCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads a server certificate.
     *  *
     * @description *   You can upload only one server certificate and its private key in each call.
     * *   After a server certificate and its private key are uploaded, the fingerprints of all server certificates that belong to your Alibaba Cloud account are returned.
     *  *
     * @param UploadServerCertificateRequest $request UploadServerCertificateRequest
     *
     * @return UploadServerCertificateResponse UploadServerCertificateResponse
     */
    public function uploadServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadServerCertificateWithOptions($request, $runtime);
    }
}
