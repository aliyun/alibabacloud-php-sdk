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
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInstanceSpecRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInstanceSpecResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInternetSpecRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerInternetSpecResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerPayTypeRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyLoadBalancerPayTypeResponse;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyVServerGroupBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20140515\Models\ModifyVServerGroupBackendServersResponse;
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
            'us-west-1'                   => 'slb.aliyuncs.com',
            'us-east-1'                   => 'slb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'slb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'slb.aliyuncs.com',
            'cn-north-2-gov-1'            => 'slb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'slb.aliyuncs.com',
            'cn-beijing-finance-1'        => 'slb.aliyuncs.com',
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
     * @param AddAccessControlListEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddAccessControlListEntryResponse
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
     * @param AddBackendServersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddBackendServersResponse
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
     * @param AddListenerWhiteListItemRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddListenerWhiteListItemResponse
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
     * @param AddTagsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddTagsResponse
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
     * @param AddVServerGroupBackendServersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddVServerGroupBackendServersResponse
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
     * @param CreateAccessControlListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAccessControlListResponse
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
     * @param CreateDomainExtensionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDomainExtensionResponse
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
     * @param CreateLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
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
     * @param CreateLoadBalancerHTTPListenerRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateLoadBalancerHTTPListenerResponse
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
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->XForwardedFor)) {
            $query['XForwardedFor'] = $request->XForwardedFor;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBID)) {
            $query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBIP)) {
            $query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
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
     * @param CreateLoadBalancerHTTPSListenerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateLoadBalancerHTTPSListenerResponse
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
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->XForwardedFor)) {
            $query['XForwardedFor'] = $request->XForwardedFor;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBID)) {
            $query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBIP)) {
            $query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
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
     * @param CreateLoadBalancerTCPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerTCPListenerResponse
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
     * @param CreateLoadBalancerUDPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerUDPListenerResponse
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
     * @param CreateMasterSlaveServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateMasterSlaveServerGroupResponse
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
     * @param CreateRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRulesResponse
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
     * @param CreateTLSCipherPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateTLSCipherPolicyResponse
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
     * @param CreateVServerGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateVServerGroupResponse
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
     * @param DeleteAccessControlListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAccessControlListResponse
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
     * @param DeleteCACertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCACertificateResponse
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
     * @param DeleteDomainExtensionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDomainExtensionResponse
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
     * @param DeleteLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoadBalancerResponse
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
     * @param DeleteLoadBalancerListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLoadBalancerListenerResponse
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
     * @param DeleteMasterSlaveServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteMasterSlaveServerGroupResponse
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
     * @param DeleteRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteRulesResponse
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
     * @param DeleteServerCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteServerCertificateResponse
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
     * @param DeleteTLSCipherPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteTLSCipherPolicyResponse
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
     * @param DeleteVServerGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVServerGroupResponse
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
     * @param DescribeAccessControlListAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeAccessControlListAttributeResponse
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
     * @param DescribeAccessControlListsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAccessControlListsResponse
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
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
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
     * @param DescribeCACertificatesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCACertificatesResponse
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
     * @param DescribeDomainExtensionAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDomainExtensionAttributeResponse
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
     * @param DescribeDomainExtensionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainExtensionsResponse
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
     * @param DescribeHealthStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHealthStatusResponse
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
     * @param DescribeListenerAccessControlAttributeRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeListenerAccessControlAttributeResponse
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
     * @param DescribeLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLoadBalancerAttributeResponse
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
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
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
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse
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
     * @param DescribeLoadBalancerListenersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLoadBalancerListenersResponse
     */
    public function describeLoadBalancerListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
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
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse
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
     * @param DescribeLoadBalancersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLoadBalancersResponse
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
     * @param DescribeMasterSlaveServerGroupAttributeRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeMasterSlaveServerGroupAttributeResponse
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
     * @param DescribeMasterSlaveServerGroupsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMasterSlaveServerGroupsResponse
     */
    public function describeMasterSlaveServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
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
     * @param DescribeRuleAttributeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRuleAttributeResponse
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
     * @param DescribeRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRulesResponse
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
     * @param DescribeServerCertificatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeServerCertificatesResponse
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
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
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
     * @param DescribeVServerGroupAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVServerGroupAttributeResponse
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
     * @param DescribeVServerGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVServerGroupsResponse
     */
    public function describeVServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
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
     * @param ListTLSCipherPoliciesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTLSCipherPoliciesResponse
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
     * @param ModifyLoadBalancerInstanceSpecRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyLoadBalancerInstanceSpecResponse
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
     * @param ModifyLoadBalancerInternetSpecRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyLoadBalancerInternetSpecResponse
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
     * @param ModifyLoadBalancerPayTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyLoadBalancerPayTypeResponse
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
     * @param ModifyVServerGroupBackendServersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyVServerGroupBackendServersResponse
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
     * @param RemoveAccessControlListEntryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveAccessControlListEntryResponse
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
     * @param RemoveBackendServersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveBackendServersResponse
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
     * @param RemoveListenerWhiteListItemRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveListenerWhiteListItemResponse
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
     * @param RemoveTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RemoveTagsResponse
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
     * @param RemoveVServerGroupBackendServersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveVServerGroupBackendServersResponse
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
     * @param SetAccessControlListAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetAccessControlListAttributeResponse
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
     * @param SetBackendServersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetBackendServersResponse
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
     * @param SetCACertificateNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetCACertificateNameResponse
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
     * @param SetDomainExtensionAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDomainExtensionAttributeResponse
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
     * @param SetListenerAccessControlStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SetListenerAccessControlStatusResponse
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
     * @param SetLoadBalancerDeleteProtectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetLoadBalancerDeleteProtectionResponse
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
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
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
        if (!Utils::isUnset($request->XForwardedFor_SLBID)) {
            $query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBIP)) {
            $query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
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
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse
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
        if (!Utils::isUnset($request->XForwardedFor_SLBID)) {
            $query['XForwardedFor_SLBID'] = $request->XForwardedFor_SLBID;
        }
        if (!Utils::isUnset($request->XForwardedFor_SLBIP)) {
            $query['XForwardedFor_SLBIP'] = $request->XForwardedFor_SLBIP;
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
     * @param SetLoadBalancerModificationProtectionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SetLoadBalancerModificationProtectionResponse
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
     * @param SetLoadBalancerNameRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetLoadBalancerNameResponse
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
     * @param SetLoadBalancerStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetLoadBalancerStatusResponse
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
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
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
     * @param SetLoadBalancerUDPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse
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
     * @param SetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SetRuleResponse
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
     * @param SetServerCertificateNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetServerCertificateNameResponse
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
     * @param SetTLSCipherPolicyAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetTLSCipherPolicyAttributeResponse
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
     * @param SetVServerGroupAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetVServerGroupAttributeResponse
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
     * @param StartLoadBalancerListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartLoadBalancerListenerResponse
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
     * @param StopLoadBalancerListenerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StopLoadBalancerListenerResponse
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * @param UploadCACertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UploadCACertificateResponse
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
     * @param UploadServerCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UploadServerCertificateResponse
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
