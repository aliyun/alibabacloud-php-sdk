<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515;

use AlibabaCloud\Endpoint\Endpoint;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAccessControlListEntryResponse::fromMap($this->doRPCRequest('AddAccessControlListEntry', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddBackendServersResponse::fromMap($this->doRPCRequest('AddBackendServers', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddListenerWhiteListItemResponse::fromMap($this->doRPCRequest('AddListenerWhiteListItem', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTagsResponse::fromMap($this->doRPCRequest('AddTags', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVServerGroupBackendServersResponse::fromMap($this->doRPCRequest('AddVServerGroupBackendServers', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAccessControlListResponse::fromMap($this->doRPCRequest('CreateAccessControlList', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDomainExtensionResponse::fromMap($this->doRPCRequest('CreateDomainExtension', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLoadBalancerResponse::fromMap($this->doRPCRequest('CreateLoadBalancer', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLoadBalancerHTTPListenerResponse::fromMap($this->doRPCRequest('CreateLoadBalancerHTTPListener', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLoadBalancerHTTPSListenerResponse::fromMap($this->doRPCRequest('CreateLoadBalancerHTTPSListener', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLoadBalancerTCPListenerResponse::fromMap($this->doRPCRequest('CreateLoadBalancerTCPListener', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLoadBalancerUDPListenerResponse::fromMap($this->doRPCRequest('CreateLoadBalancerUDPListener', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMasterSlaveServerGroupResponse::fromMap($this->doRPCRequest('CreateMasterSlaveServerGroup', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRulesResponse::fromMap($this->doRPCRequest('CreateRules', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTLSCipherPolicyResponse::fromMap($this->doRPCRequest('CreateTLSCipherPolicy', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVServerGroupResponse::fromMap($this->doRPCRequest('CreateVServerGroup', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAccessControlListResponse::fromMap($this->doRPCRequest('DeleteAccessControlList', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCACertificateResponse::fromMap($this->doRPCRequest('DeleteCACertificate', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainExtensionResponse::fromMap($this->doRPCRequest('DeleteDomainExtension', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLoadBalancerResponse::fromMap($this->doRPCRequest('DeleteLoadBalancer', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLoadBalancerListenerResponse::fromMap($this->doRPCRequest('DeleteLoadBalancerListener', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMasterSlaveServerGroupResponse::fromMap($this->doRPCRequest('DeleteMasterSlaveServerGroup', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRulesResponse::fromMap($this->doRPCRequest('DeleteRules', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteServerCertificateResponse::fromMap($this->doRPCRequest('DeleteServerCertificate', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTLSCipherPolicyResponse::fromMap($this->doRPCRequest('DeleteTLSCipherPolicy', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVServerGroupResponse::fromMap($this->doRPCRequest('DeleteVServerGroup', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccessControlListAttributeResponse::fromMap($this->doRPCRequest('DescribeAccessControlListAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccessControlListsResponse::fromMap($this->doRPCRequest('DescribeAccessControlLists', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCACertificatesResponse::fromMap($this->doRPCRequest('DescribeCACertificates', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainExtensionAttributeResponse::fromMap($this->doRPCRequest('DescribeDomainExtensionAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainExtensionsResponse::fromMap($this->doRPCRequest('DescribeDomainExtensions', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHealthStatusResponse::fromMap($this->doRPCRequest('DescribeHealthStatus', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeListenerAccessControlAttributeResponse::fromMap($this->doRPCRequest('DescribeListenerAccessControlAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoadBalancerAttributeResponse::fromMap($this->doRPCRequest('DescribeLoadBalancerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoadBalancerHTTPListenerAttributeResponse::fromMap($this->doRPCRequest('DescribeLoadBalancerHTTPListenerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->doRPCRequest('DescribeLoadBalancerHTTPSListenerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoadBalancerListenersResponse::fromMap($this->doRPCRequest('DescribeLoadBalancerListeners', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLoadBalancersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoadBalancersResponse::fromMap($this->doRPCRequest('DescribeLoadBalancers', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoadBalancerTCPListenerAttributeResponse::fromMap($this->doRPCRequest('DescribeLoadBalancerTCPListenerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoadBalancerUDPListenerAttributeResponse::fromMap($this->doRPCRequest('DescribeLoadBalancerUDPListenerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeMasterSlaveServerGroupAttributeRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeMasterSlaveServerGroupAttributeResponse
     */
    public function describeMasterSlaveServerGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMasterSlaveServerGroupAttributeResponse::fromMap($this->doRPCRequest('DescribeMasterSlaveServerGroupAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMasterSlaveServerGroupsResponse::fromMap($this->doRPCRequest('DescribeMasterSlaveServerGroups', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRuleAttributeResponse::fromMap($this->doRPCRequest('DescribeRuleAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRulesResponse::fromMap($this->doRPCRequest('DescribeRules', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServerCertificatesResponse::fromMap($this->doRPCRequest('DescribeServerCertificates', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagsResponse::fromMap($this->doRPCRequest('DescribeTags', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVServerGroupAttributeResponse::fromMap($this->doRPCRequest('DescribeVServerGroupAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVServerGroupsResponse::fromMap($this->doRPCRequest('DescribeVServerGroups', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZonesResponse::fromMap($this->doRPCRequest('DescribeZones', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTLSCipherPoliciesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTLSCipherPoliciesResponse
     */
    public function listTLSCipherPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTLSCipherPoliciesResponse::fromMap($this->doRPCRequest('ListTLSCipherPolicies', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyLoadBalancerInstanceSpecRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyLoadBalancerInstanceSpecResponse
     */
    public function modifyLoadBalancerInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLoadBalancerInstanceSpecResponse::fromMap($this->doRPCRequest('ModifyLoadBalancerInstanceSpec', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLoadBalancerInternetSpecResponse::fromMap($this->doRPCRequest('ModifyLoadBalancerInternetSpec', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLoadBalancerPayTypeResponse::fromMap($this->doRPCRequest('ModifyLoadBalancerPayType', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVServerGroupBackendServersResponse::fromMap($this->doRPCRequest('ModifyVServerGroupBackendServers', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveAccessControlListEntryResponse::fromMap($this->doRPCRequest('RemoveAccessControlListEntry', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveBackendServersResponse::fromMap($this->doRPCRequest('RemoveBackendServers', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveListenerWhiteListItemResponse::fromMap($this->doRPCRequest('RemoveListenerWhiteListItem', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveTagsResponse::fromMap($this->doRPCRequest('RemoveTags', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveVServerGroupBackendServersResponse::fromMap($this->doRPCRequest('RemoveVServerGroupBackendServers', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAccessControlListAttributeResponse::fromMap($this->doRPCRequest('SetAccessControlListAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetBackendServersResponse::fromMap($this->doRPCRequest('SetBackendServers', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetCACertificateNameResponse::fromMap($this->doRPCRequest('SetCACertificateName', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDomainExtensionAttributeResponse::fromMap($this->doRPCRequest('SetDomainExtensionAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetListenerAccessControlStatusResponse::fromMap($this->doRPCRequest('SetListenerAccessControlStatus', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLoadBalancerDeleteProtectionResponse::fromMap($this->doRPCRequest('SetLoadBalancerDeleteProtection', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLoadBalancerHTTPListenerAttributeResponse::fromMap($this->doRPCRequest('SetLoadBalancerHTTPListenerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->doRPCRequest('SetLoadBalancerHTTPSListenerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLoadBalancerModificationProtectionResponse::fromMap($this->doRPCRequest('SetLoadBalancerModificationProtection', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLoadBalancerNameResponse::fromMap($this->doRPCRequest('SetLoadBalancerName', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLoadBalancerStatusResponse::fromMap($this->doRPCRequest('SetLoadBalancerStatus', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLoadBalancerTCPListenerAttributeResponse::fromMap($this->doRPCRequest('SetLoadBalancerTCPListenerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLoadBalancerUDPListenerAttributeResponse::fromMap($this->doRPCRequest('SetLoadBalancerUDPListenerAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetRuleResponse::fromMap($this->doRPCRequest('SetRule', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetServerCertificateNameResponse::fromMap($this->doRPCRequest('SetServerCertificateName', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetTLSCipherPolicyAttributeResponse::fromMap($this->doRPCRequest('SetTLSCipherPolicyAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetVServerGroupAttributeResponse::fromMap($this->doRPCRequest('SetVServerGroupAttribute', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartLoadBalancerListenerResponse::fromMap($this->doRPCRequest('StartLoadBalancerListener', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopLoadBalancerListenerResponse::fromMap($this->doRPCRequest('StopLoadBalancerListener', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadCACertificateResponse::fromMap($this->doRPCRequest('UploadCACertificate', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadServerCertificateResponse::fromMap($this->doRPCRequest('UploadServerCertificate', '2014-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
