<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ClearMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ClearMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CopyDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CopyDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMemberAccountsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMemberAccountsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreatePostpaidInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreatePostpaidInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteApisecAbnormalRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteApisecAbnormalResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteApisecEventRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteApisecEventResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMemberAccountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMemberAccountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAccountDelegatedStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAccountDelegatedStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalDomainStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalDomainStatisticResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAssetTrendRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAssetTrendResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventDomainStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventDomainStatisticResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecLogDeliveriesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecLogDeliveriesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSensitiveDomainStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSensitiveDomainStatisticResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSlsLogStoresRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSlsLogStoresResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSlsProjectsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSlsProjectsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupNamesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupNamesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceNamesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceNamesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceTemplatesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceTemplatesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplatesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplatesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateValidGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateValidGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDNSRecordRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDNSRecordResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMemberAccountsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMemberAccountsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePeakTrendRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePeakTrendResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePunishedDomainsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePunishedDomainsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceInstanceCertsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceInstanceCertsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourcePortRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourcePortResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceRegionIdRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceRegionIdResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceSupportRegionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceSupportRegionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResponseCodeTrendGraphRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResponseCodeTrendGraphResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopClientIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopClientIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopRuleIdRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopRuleIdResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUaRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUaResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUrlRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUrlResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSlsAuthStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSlsAuthStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSlsLogStoreRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSlsLogStoreResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSlsLogStoreStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSlsLogStoreStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourceCountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourceCountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserSlsLogRegionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserSlsLogRegionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserWafLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserWafLogStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecLogDeliveryRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecLogDeliveryResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecLogDeliveryStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecLogDeliveryStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseResourceXffRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseResourceXffResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleCacheRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleCacheResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainPunishStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainPunishStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterBypassStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterBypassStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMemberAccountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMemberAccountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyTemplateResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyTemplateResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\SyncProductInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\SyncProductInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Wafopenapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-beijing'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-chengdu'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou'        => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote'          => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-heyuan'             => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-wulanchabu'         => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-west-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-central-1'          => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'cn-shanghai-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-north-2-gov-1'      => 'wafopenapi.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('waf-openapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Clears an IP address blacklist for major event protection.
     *  *
     * @param ClearMajorProtectionBlackIpRequest $request ClearMajorProtectionBlackIpRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ClearMajorProtectionBlackIpResponse ClearMajorProtectionBlackIpResponse
     */
    public function clearMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearMajorProtectionBlackIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearMajorProtectionBlackIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Clears an IP address blacklist for major event protection.
     *  *
     * @param ClearMajorProtectionBlackIpRequest $request ClearMajorProtectionBlackIpRequest
     *
     * @return ClearMajorProtectionBlackIpResponse ClearMajorProtectionBlackIpResponse
     */
    public function clearMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a new protection template from the copy.
     *  *
     * @param CopyDefenseTemplateRequest $request CopyDefenseTemplateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyDefenseTemplateResponse CopyDefenseTemplateResponse
     */
    public function copyDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a new protection template from the copy.
     *  *
     * @param CopyDefenseTemplateRequest $request CopyDefenseTemplateRequest
     *
     * @return CopyDefenseTemplateResponse CopyDefenseTemplateResponse
     */
    public function copyDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a protected object group.
     *  *
     * @param CreateDefenseResourceGroupRequest $request CreateDefenseResourceGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDefenseResourceGroupResponse CreateDefenseResourceGroupResponse
     */
    public function createDefenseResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addList)) {
            $query['AddList'] = $request->addList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDefenseResourceGroup',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDefenseResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a protected object group.
     *  *
     * @param CreateDefenseResourceGroupRequest $request CreateDefenseResourceGroupRequest
     *
     * @return CreateDefenseResourceGroupResponse CreateDefenseResourceGroupResponse
     */
    public function createDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a protection rule.
     *  *
     * @param CreateDefenseRuleRequest $request CreateDefenseRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDefenseRuleResponse CreateDefenseRuleResponse
     */
    public function createDefenseRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDefenseRule',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDefenseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a protection rule.
     *  *
     * @param CreateDefenseRuleRequest $request CreateDefenseRuleRequest
     *
     * @return CreateDefenseRuleResponse CreateDefenseRuleResponse
     */
    public function createDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a protection rule template.
     *  *
     * @param CreateDefenseTemplateRequest $request CreateDefenseTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDefenseTemplateResponse CreateDefenseTemplateResponse
     */
    public function createDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateOrigin)) {
            $query['TemplateOrigin'] = $request->templateOrigin;
        }
        if (!Utils::isUnset($request->templateStatus)) {
            $query['TemplateStatus'] = $request->templateStatus;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a protection rule template.
     *  *
     * @param CreateDefenseTemplateRequest $request CreateDefenseTemplateRequest
     *
     * @return CreateDefenseTemplateResponse CreateDefenseTemplateResponse
     */
    public function createDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a domain name to Web Application Firewall (WAF).
     *  *
     * @param CreateDomainRequest $tmpReq  CreateDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDomainShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listen)) {
            $request->listenShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirect)) {
            $request->redirectShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->listenShrink)) {
            $query['Listen'] = $request->listenShrink;
        }
        if (!Utils::isUnset($request->redirectShrink)) {
            $query['Redirect'] = $request->redirectShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a domain name to Web Application Firewall (WAF).
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an IP address blacklist for major event protection.
     *  *
     * @description This operation is available only on the China site (aliyun.com).
     *  *
     * @param CreateMajorProtectionBlackIpRequest $request CreateMajorProtectionBlackIpRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMajorProtectionBlackIpResponse CreateMajorProtectionBlackIpResponse
     */
    public function createMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipList)) {
            $query['IpList'] = $request->ipList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMajorProtectionBlackIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMajorProtectionBlackIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an IP address blacklist for major event protection.
     *  *
     * @description This operation is available only on the China site (aliyun.com).
     *  *
     * @param CreateMajorProtectionBlackIpRequest $request CreateMajorProtectionBlackIpRequest
     *
     * @return CreateMajorProtectionBlackIpResponse CreateMajorProtectionBlackIpResponse
     */
    public function createMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @summary Adds members to use the multi-account management feature of Web Application Firewall (WAF).
     *  *
     * @param CreateMemberAccountsRequest $request CreateMemberAccountsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMemberAccountsResponse CreateMemberAccountsResponse
     */
    public function createMemberAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memberAccountIds)) {
            $query['MemberAccountIds'] = $request->memberAccountIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMemberAccounts',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMemberAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds members to use the multi-account management feature of Web Application Firewall (WAF).
     *  *
     * @param CreateMemberAccountsRequest $request CreateMemberAccountsRequest
     *
     * @return CreateMemberAccountsResponse CreateMemberAccountsResponse
     */
    public function createMemberAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMemberAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a pay-as-you-go Web Application Firewall (WAF) 3.0 instance.
     *  *
     * @param CreatePostpaidInstanceRequest $request CreatePostpaidInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePostpaidInstanceResponse CreatePostpaidInstanceResponse
     */
    public function createPostpaidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePostpaidInstance',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePostpaidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a pay-as-you-go Web Application Firewall (WAF) 3.0 instance.
     *  *
     * @param CreatePostpaidInstanceRequest $request CreatePostpaidInstanceRequest
     *
     * @return CreatePostpaidInstanceResponse CreatePostpaidInstanceResponse
     */
    public function createPostpaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPostpaidInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除API安全风险
     *  *
     * @param DeleteApisecAbnormalRequest $request DeleteApisecAbnormalRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApisecAbnormalResponse DeleteApisecAbnormalResponse
     */
    public function deleteApisecAbnormalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->abnormalId)) {
            $query['AbnormalId'] = $request->abnormalId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApisecAbnormal',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApisecAbnormalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除API安全风险
     *  *
     * @param DeleteApisecAbnormalRequest $request DeleteApisecAbnormalRequest
     *
     * @return DeleteApisecAbnormalResponse DeleteApisecAbnormalResponse
     */
    public function deleteApisecAbnormal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApisecAbnormalWithOptions($request, $runtime);
    }

    /**
     * @summary 删除API安全事件
     *  *
     * @param DeleteApisecEventRequest $request DeleteApisecEventRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApisecEventResponse DeleteApisecEventResponse
     */
    public function deleteApisecEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApisecEvent',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApisecEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除API安全事件
     *  *
     * @param DeleteApisecEventRequest $request DeleteApisecEventRequest
     *
     * @return DeleteApisecEventResponse DeleteApisecEventResponse
     */
    public function deleteApisecEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApisecEventWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a protected object group.
     *  *
     * @param DeleteDefenseResourceGroupRequest $request DeleteDefenseResourceGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDefenseResourceGroupResponse DeleteDefenseResourceGroupResponse
     */
    public function deleteDefenseResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDefenseResourceGroup',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDefenseResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a protected object group.
     *  *
     * @param DeleteDefenseResourceGroupRequest $request DeleteDefenseResourceGroupRequest
     *
     * @return DeleteDefenseResourceGroupResponse DeleteDefenseResourceGroupResponse
     */
    public function deleteDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a protection rule.
     *  *
     * @param DeleteDefenseRuleRequest $request DeleteDefenseRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDefenseRuleResponse DeleteDefenseRuleResponse
     */
    public function deleteDefenseRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleIds)) {
            $query['RuleIds'] = $request->ruleIds;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDefenseRule',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDefenseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a protection rule.
     *  *
     * @param DeleteDefenseRuleRequest $request DeleteDefenseRuleRequest
     *
     * @return DeleteDefenseRuleResponse DeleteDefenseRuleResponse
     */
    public function deleteDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a protection rule template.
     *  *
     * @param DeleteDefenseTemplateRequest $request DeleteDefenseTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDefenseTemplateResponse DeleteDefenseTemplateResponse
     */
    public function deleteDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a protection rule template.
     *  *
     * @param DeleteDefenseTemplateRequest $request DeleteDefenseTemplateRequest
     *
     * @return DeleteDefenseTemplateResponse DeleteDefenseTemplateResponse
     */
    public function deleteDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a domain name that is added to Web Application Firewall (WAF).
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
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
            'action'      => 'DeleteDomain',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a domain name that is added to Web Application Firewall (WAF).
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an IP address blacklist for major event protection.
     *  *
     * @param DeleteMajorProtectionBlackIpRequest $request DeleteMajorProtectionBlackIpRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMajorProtectionBlackIpResponse DeleteMajorProtectionBlackIpResponse
     */
    public function deleteMajorProtectionBlackIpWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMajorProtectionBlackIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMajorProtectionBlackIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an IP address blacklist for major event protection.
     *  *
     * @param DeleteMajorProtectionBlackIpRequest $request DeleteMajorProtectionBlackIpRequest
     *
     * @return DeleteMajorProtectionBlackIpResponse DeleteMajorProtectionBlackIpResponse
     */
    public function deleteMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @summary Removes the members that are added for multi-account management in Web Application Firewall (WAF).
     *  *
     * @param DeleteMemberAccountRequest $request DeleteMemberAccountRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMemberAccountResponse DeleteMemberAccountResponse
     */
    public function deleteMemberAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memberAccountId)) {
            $query['MemberAccountId'] = $request->memberAccountId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMemberAccount',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMemberAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes the members that are added for multi-account management in Web Application Firewall (WAF).
     *  *
     * @param DeleteMemberAccountRequest $request DeleteMemberAccountRequest
     *
     * @return DeleteMemberAccountResponse DeleteMemberAccountResponse
     */
    public function deleteMemberAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMemberAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether an Alibaba Cloud account is the delegated administrator account of a Web Application Firewall (WAF) instance.
     *  *
     * @param DescribeAccountDelegatedStatusRequest $request DescribeAccountDelegatedStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountDelegatedStatusResponse DescribeAccountDelegatedStatusResponse
     */
    public function describeAccountDelegatedStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountDelegatedStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountDelegatedStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether an Alibaba Cloud account is the delegated administrator account of a Web Application Firewall (WAF) instance.
     *  *
     * @param DescribeAccountDelegatedStatusRequest $request DescribeAccountDelegatedStatusRequest
     *
     * @return DescribeAccountDelegatedStatusResponse DescribeAccountDelegatedStatusResponse
     */
    public function describeAccountDelegatedStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountDelegatedStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 查询API安全风险站点统计
     *  *
     * @param DescribeApisecAbnormalDomainStatisticRequest $request DescribeApisecAbnormalDomainStatisticRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecAbnormalDomainStatisticResponse DescribeApisecAbnormalDomainStatisticResponse
     */
    public function describeApisecAbnormalDomainStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderWay)) {
            $query['OrderWay'] = $request->orderWay;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisecAbnormalDomainStatistic',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisecAbnormalDomainStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询API安全风险站点统计
     *  *
     * @param DescribeApisecAbnormalDomainStatisticRequest $request DescribeApisecAbnormalDomainStatisticRequest
     *
     * @return DescribeApisecAbnormalDomainStatisticResponse DescribeApisecAbnormalDomainStatisticResponse
     */
    public function describeApisecAbnormalDomainStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecAbnormalDomainStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary 查询API安全资产趋势图
     *  *
     * @param DescribeApisecAssetTrendRequest $request DescribeApisecAssetTrendRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecAssetTrendResponse DescribeApisecAssetTrendResponse
     */
    public function describeApisecAssetTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisecAssetTrend',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisecAssetTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询API安全资产趋势图
     *  *
     * @param DescribeApisecAssetTrendRequest $request DescribeApisecAssetTrendRequest
     *
     * @return DescribeApisecAssetTrendResponse DescribeApisecAssetTrendResponse
     */
    public function describeApisecAssetTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecAssetTrendWithOptions($request, $runtime);
    }

    /**
     * @summary 查询API安全事件站点统计
     *  *
     * @param DescribeApisecEventDomainStatisticRequest $request DescribeApisecEventDomainStatisticRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecEventDomainStatisticResponse DescribeApisecEventDomainStatisticResponse
     */
    public function describeApisecEventDomainStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderWay)) {
            $query['OrderWay'] = $request->orderWay;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisecEventDomainStatistic',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisecEventDomainStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询API安全事件站点统计
     *  *
     * @param DescribeApisecEventDomainStatisticRequest $request DescribeApisecEventDomainStatisticRequest
     *
     * @return DescribeApisecEventDomainStatisticResponse DescribeApisecEventDomainStatisticResponse
     */
    public function describeApisecEventDomainStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecEventDomainStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary 获取API安全日志订阅列表
     *  *
     * @param DescribeApisecLogDeliveriesRequest $request DescribeApisecLogDeliveriesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecLogDeliveriesResponse DescribeApisecLogDeliveriesResponse
     */
    public function describeApisecLogDeliveriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisecLogDeliveries',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisecLogDeliveriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取API安全日志订阅列表
     *  *
     * @param DescribeApisecLogDeliveriesRequest $request DescribeApisecLogDeliveriesRequest
     *
     * @return DescribeApisecLogDeliveriesResponse DescribeApisecLogDeliveriesResponse
     */
    public function describeApisecLogDeliveries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecLogDeliveriesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询API安全敏感数据类型统计
     *  *
     * @param DescribeApisecSensitiveDomainStatisticRequest $request DescribeApisecSensitiveDomainStatisticRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecSensitiveDomainStatisticResponse DescribeApisecSensitiveDomainStatisticResponse
     */
    public function describeApisecSensitiveDomainStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderWay)) {
            $query['OrderWay'] = $request->orderWay;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
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
            'action'      => 'DescribeApisecSensitiveDomainStatistic',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisecSensitiveDomainStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询API安全敏感数据类型统计
     *  *
     * @param DescribeApisecSensitiveDomainStatisticRequest $request DescribeApisecSensitiveDomainStatisticRequest
     *
     * @return DescribeApisecSensitiveDomainStatisticResponse DescribeApisecSensitiveDomainStatisticResponse
     */
    public function describeApisecSensitiveDomainStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecSensitiveDomainStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary 查询日志服务SLS的LogStore列表
     *  *
     * @param DescribeApisecSlsLogStoresRequest $request DescribeApisecSlsLogStoresRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecSlsLogStoresResponse DescribeApisecSlsLogStoresResponse
     */
    public function describeApisecSlsLogStoresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logRegionId)) {
            $query['LogRegionId'] = $request->logRegionId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisecSlsLogStores',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisecSlsLogStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询日志服务SLS的LogStore列表
     *  *
     * @param DescribeApisecSlsLogStoresRequest $request DescribeApisecSlsLogStoresRequest
     *
     * @return DescribeApisecSlsLogStoresResponse DescribeApisecSlsLogStoresResponse
     */
    public function describeApisecSlsLogStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecSlsLogStoresWithOptions($request, $runtime);
    }

    /**
     * @summary 查询日志服务SLS的Project列表
     *  *
     * @param DescribeApisecSlsProjectsRequest $request DescribeApisecSlsProjectsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecSlsProjectsResponse DescribeApisecSlsProjectsResponse
     */
    public function describeApisecSlsProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logRegionId)) {
            $query['LogRegionId'] = $request->logRegionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisecSlsProjects',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisecSlsProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询日志服务SLS的Project列表
     *  *
     * @param DescribeApisecSlsProjectsRequest $request DescribeApisecSlsProjectsRequest
     *
     * @return DescribeApisecSlsProjectsResponse DescribeApisecSlsProjectsResponse
     */
    public function describeApisecSlsProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecSlsProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a certificate, such as the certificate name, expiration time, issuance time, and associated domain name.
     *  *
     * @param DescribeCertDetailRequest $request DescribeCertDetailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCertDetailResponse DescribeCertDetailResponse
     */
    public function describeCertDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCertDetail',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCertDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a certificate, such as the certificate name, expiration time, issuance time, and associated domain name.
     *  *
     * @param DescribeCertDetailRequest $request DescribeCertDetailRequest
     *
     * @return DescribeCertDetailResponse DescribeCertDetailResponse
     */
    public function describeCertDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the certificates issued for your domain names that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeCertsRequest $request DescribeCertsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCertsResponse DescribeCertsResponse
     */
    public function describeCertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCerts',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the certificates issued for your domain names that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeCertsRequest $request DescribeCertsRequest
     *
     * @return DescribeCertsResponse DescribeCertsResponse
     */
    public function describeCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries cloud service resources that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeCloudResourcesRequest $request DescribeCloudResourcesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudResourcesResponse DescribeCloudResourcesResponse
     */
    public function describeCloudResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
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
        if (!Utils::isUnset($request->resourceDomain)) {
            $query['ResourceDomain'] = $request->resourceDomain;
        }
        if (!Utils::isUnset($request->resourceFunction)) {
            $query['ResourceFunction'] = $request->resourceFunction;
        }
        if (!Utils::isUnset($request->resourceInstanceId)) {
            $query['ResourceInstanceId'] = $request->resourceInstanceId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceProduct)) {
            $query['ResourceProduct'] = $request->resourceProduct;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->resourceRouteName)) {
            $query['ResourceRouteName'] = $request->resourceRouteName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries cloud service resources that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeCloudResourcesRequest $request DescribeCloudResourcesRequest
     *
     * @return DescribeCloudResourcesResponse DescribeCloudResourcesResponse
     */
    public function describeCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a protected object.
     *  *
     * @param DescribeDefenseResourceRequest $request DescribeDefenseResourceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseResourceResponse DescribeDefenseResourceResponse
     */
    public function describeDefenseResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResource',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a protected object.
     *  *
     * @param DescribeDefenseResourceRequest $request DescribeDefenseResourceRequest
     *
     * @return DescribeDefenseResourceResponse DescribeDefenseResourceResponse
     */
    public function describeDefenseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a protected object group.
     *  *
     * @param DescribeDefenseResourceGroupRequest $request DescribeDefenseResourceGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseResourceGroupResponse DescribeDefenseResourceGroupResponse
     */
    public function describeDefenseResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResourceGroup',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a protected object group.
     *  *
     * @param DescribeDefenseResourceGroupRequest $request DescribeDefenseResourceGroupRequest
     *
     * @return DescribeDefenseResourceGroupResponse DescribeDefenseResourceGroupResponse
     */
    public function describeDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the names of protected object groups.
     *  *
     * @param DescribeDefenseResourceGroupNamesRequest $request DescribeDefenseResourceGroupNamesRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseResourceGroupNamesResponse DescribeDefenseResourceGroupNamesResponse
     */
    public function describeDefenseResourceGroupNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupNameLike)) {
            $query['GroupNameLike'] = $request->groupNameLike;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResourceGroupNames',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourceGroupNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the names of protected object groups.
     *  *
     * @param DescribeDefenseResourceGroupNamesRequest $request DescribeDefenseResourceGroupNamesRequest
     *
     * @return DescribeDefenseResourceGroupNamesResponse DescribeDefenseResourceGroupNamesResponse
     */
    public function describeDefenseResourceGroupNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceGroupNamesWithOptions($request, $runtime);
    }

    /**
     * @summary Performs a pagination query to retrieve the information about protected object groups.
     *  *
     * @param DescribeDefenseResourceGroupsRequest $request DescribeDefenseResourceGroupsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseResourceGroupsResponse DescribeDefenseResourceGroupsResponse
     */
    public function describeDefenseResourceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupNameLike)) {
            $query['GroupNameLike'] = $request->groupNameLike;
        }
        if (!Utils::isUnset($request->groupNames)) {
            $query['GroupNames'] = $request->groupNames;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResourceGroups',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a pagination query to retrieve the information about protected object groups.
     *  *
     * @param DescribeDefenseResourceGroupsRequest $request DescribeDefenseResourceGroupsRequest
     *
     * @return DescribeDefenseResourceGroupsResponse DescribeDefenseResourceGroupsResponse
     */
    public function describeDefenseResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Performs a pagination query to retrieve the names of protected objects.
     *  *
     * @param DescribeDefenseResourceNamesRequest $request DescribeDefenseResourceNamesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseResourceNamesResponse DescribeDefenseResourceNamesResponse
     */
    public function describeDefenseResourceNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResourceNames',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourceNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a pagination query to retrieve the names of protected objects.
     *  *
     * @param DescribeDefenseResourceNamesRequest $request DescribeDefenseResourceNamesRequest
     *
     * @return DescribeDefenseResourceNamesResponse DescribeDefenseResourceNamesResponse
     */
    public function describeDefenseResourceNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceNamesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the protection templates that are associated with a protected object or protected object group.
     *  *
     * @param DescribeDefenseResourceTemplatesRequest $request DescribeDefenseResourceTemplatesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseResourceTemplatesResponse DescribeDefenseResourceTemplatesResponse
     */
    public function describeDefenseResourceTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResourceTemplates',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourceTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the protection templates that are associated with a protected object or protected object group.
     *  *
     * @param DescribeDefenseResourceTemplatesRequest $request DescribeDefenseResourceTemplatesRequest
     *
     * @return DescribeDefenseResourceTemplatesResponse DescribeDefenseResourceTemplatesResponse
     */
    public function describeDefenseResourceTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries protected objects by page.
     *  *
     * @param DescribeDefenseResourcesRequest $request DescribeDefenseResourcesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseResourcesResponse DescribeDefenseResourcesResponse
     */
    public function describeDefenseResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries protected objects by page.
     *  *
     * @param DescribeDefenseResourcesRequest $request DescribeDefenseResourcesRequest
     *
     * @return DescribeDefenseResourcesResponse DescribeDefenseResourcesResponse
     */
    public function describeDefenseResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a protection rule.
     *  *
     * @param DescribeDefenseRuleRequest $request DescribeDefenseRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseRuleResponse DescribeDefenseRuleResponse
     */
    public function describeDefenseRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseRule',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a protection rule.
     *  *
     * @param DescribeDefenseRuleRequest $request DescribeDefenseRuleRequest
     *
     * @return DescribeDefenseRuleResponse DescribeDefenseRuleResponse
     */
    public function describeDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries protection rules by page.
     *  *
     * @param DescribeDefenseRulesRequest $request DescribeDefenseRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseRulesResponse DescribeDefenseRulesResponse
     */
    public function describeDefenseRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseRules',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries protection rules by page.
     *  *
     * @param DescribeDefenseRulesRequest $request DescribeDefenseRulesRequest
     *
     * @return DescribeDefenseRulesResponse DescribeDefenseRulesResponse
     */
    public function describeDefenseRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a protection rule template.
     *  *
     * @param DescribeDefenseTemplateRequest $request DescribeDefenseTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseTemplateResponse DescribeDefenseTemplateResponse
     */
    public function describeDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a protection rule template.
     *  *
     * @param DescribeDefenseTemplateRequest $request DescribeDefenseTemplateRequest
     *
     * @return DescribeDefenseTemplateResponse DescribeDefenseTemplateResponse
     */
    public function describeDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the names of protected object groups for which a protection template can take effect.
     *  *
     * @param DescribeDefenseTemplateValidGroupsRequest $request DescribeDefenseTemplateValidGroupsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseTemplateValidGroupsResponse DescribeDefenseTemplateValidGroupsResponse
     */
    public function describeDefenseTemplateValidGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseTemplateValidGroups',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseTemplateValidGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the names of protected object groups for which a protection template can take effect.
     *  *
     * @param DescribeDefenseTemplateValidGroupsRequest $request DescribeDefenseTemplateValidGroupsRequest
     *
     * @return DescribeDefenseTemplateValidGroupsResponse DescribeDefenseTemplateValidGroupsResponse
     */
    public function describeDefenseTemplateValidGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseTemplateValidGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Performs a paging query to retrieve protection templates.
     *  *
     * @param DescribeDefenseTemplatesRequest $request DescribeDefenseTemplatesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseTemplatesResponse DescribeDefenseTemplatesResponse
     */
    public function describeDefenseTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->defenseSubScene)) {
            $query['DefenseSubScene'] = $request->defenseSubScene;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseTemplates',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a paging query to retrieve protection templates.
     *  *
     * @param DescribeDefenseTemplatesRequest $request DescribeDefenseTemplatesRequest
     *
     * @return DescribeDefenseTemplatesResponse DescribeDefenseTemplatesResponse
     */
    public function describeDefenseTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the Domain Name System (DNS) settings of a domain name are properly configured.
     *  *
     * @param DescribeDomainDNSRecordRequest $request DescribeDomainDNSRecordRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainDNSRecordResponse DescribeDomainDNSRecordResponse
     */
    public function describeDomainDNSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainDNSRecord',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainDNSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the Domain Name System (DNS) settings of a domain name are properly configured.
     *  *
     * @param DescribeDomainDNSRecordRequest $request DescribeDomainDNSRecordRequest
     *
     * @return DescribeDomainDNSRecordResponse DescribeDomainDNSRecordResponse
     */
    public function describeDomainDNSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDNSRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a domain name that is added to Web Application Firewall (WAF).
     *  *
     * @param DescribeDomainDetailRequest $request DescribeDomainDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainDetailResponse DescribeDomainDetailResponse
     */
    public function describeDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
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
            'action'      => 'DescribeDomainDetail',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a domain name that is added to Web Application Firewall (WAF).
     *  *
     * @param DescribeDomainDetailRequest $request DescribeDomainDetailRequest
     *
     * @return DescribeDomainDetailResponse DescribeDomainDetailResponse
     */
    public function describeDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the domain names that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeDomainsRequest $request DescribeDomainsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainsResponse DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backend)) {
            $query['Backend'] = $request->backend;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomains',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the domain names that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeDomainsRequest $request DescribeDomainsRequest
     *
     * @return DescribeDomainsResponse DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the traffic statistics of requests that are forwarded to Web Application Firewall (WAF).
     *  *
     * @param DescribeFlowChartRequest $request DescribeFlowChartRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFlowChartResponse DescribeFlowChartResponse
     */
    public function describeFlowChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowChart',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the traffic statistics of requests that are forwarded to Web Application Firewall (WAF).
     *  *
     * @param DescribeFlowChartRequest $request DescribeFlowChartRequest
     *
     * @return DescribeFlowChartResponse DescribeFlowChartResponse
     */
    public function describeFlowChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowChartWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 protected objects that receive requests.
     *  *
     * @param DescribeFlowTopResourceRequest $request DescribeFlowTopResourceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFlowTopResourceResponse DescribeFlowTopResourceResponse
     */
    public function describeFlowTopResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowTopResource',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowTopResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 protected objects that receive requests.
     *  *
     * @param DescribeFlowTopResourceRequest $request DescribeFlowTopResourceRequest
     *
     * @return DescribeFlowTopResourceResponse DescribeFlowTopResourceResponse
     */
    public function describeFlowTopResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowTopResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 URLs that are used to initiate requests.
     *  *
     * @param DescribeFlowTopUrlRequest $request DescribeFlowTopUrlRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFlowTopUrlResponse DescribeFlowTopUrlResponse
     */
    public function describeFlowTopUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowTopUrl',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowTopUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 URLs that are used to initiate requests.
     *  *
     * @param DescribeFlowTopUrlRequest $request DescribeFlowTopUrlRequest
     *
     * @return DescribeFlowTopUrlResponse DescribeFlowTopUrlResponse
     */
    public function describeFlowTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowTopUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the hybrid cloud node groups that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeHybridCloudGroupsRequest $request DescribeHybridCloudGroupsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridCloudGroupsResponse DescribeHybridCloudGroupsResponse
     */
    public function describeHybridCloudGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterProxyType)) {
            $query['ClusterProxyType'] = $request->clusterProxyType;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridCloudGroups',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridCloudGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the hybrid cloud node groups that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeHybridCloudGroupsRequest $request DescribeHybridCloudGroupsRequest
     *
     * @return DescribeHybridCloudGroupsResponse DescribeHybridCloudGroupsResponse
     */
    public function describeHybridCloudGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the domain names that are added to a Web Application Firewall (WAF) instance in hybrid cloud mode.
     *  *
     * @param DescribeHybridCloudResourcesRequest $request DescribeHybridCloudResourcesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridCloudResourcesResponse DescribeHybridCloudResourcesResponse
     */
    public function describeHybridCloudResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backend)) {
            $query['Backend'] = $request->backend;
        }
        if (!Utils::isUnset($request->cnameEnabled)) {
            $query['CnameEnabled'] = $request->cnameEnabled;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridCloudResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the domain names that are added to a Web Application Firewall (WAF) instance in hybrid cloud mode.
     *  *
     * @param DescribeHybridCloudResourcesRequest $request DescribeHybridCloudResourcesRequest
     *
     * @return DescribeHybridCloudResourcesResponse DescribeHybridCloudResourcesResponse
     */
    public function describeHybridCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the HTTP and HTTPS ports that you can use when you add a domain name to Web Application Firewall (WAF) in hybrid cloud mode.
     *  *
     * @param DescribeHybridCloudUserRequest $request DescribeHybridCloudUserRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridCloudUserResponse DescribeHybridCloudUserResponse
     */
    public function describeHybridCloudUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridCloudUser',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridCloudUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the HTTP and HTTPS ports that you can use when you add a domain name to Web Application Firewall (WAF) in hybrid cloud mode.
     *  *
     * @param DescribeHybridCloudUserRequest $request DescribeHybridCloudUserRequest
     *
     * @return DescribeHybridCloudUserResponse DescribeHybridCloudUserResponse
     */
    public function describeHybridCloudUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a Web Application Firewall (WAF) instance within the current Alibaba Cloud account.
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Web Application Firewall (WAF) instance within the current Alibaba Cloud account.
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries IP addresses in an IP address blacklist for major event protection by page.
     *  *
     * @param DescribeMajorProtectionBlackIpsRequest $request DescribeMajorProtectionBlackIpsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMajorProtectionBlackIpsResponse DescribeMajorProtectionBlackIpsResponse
     */
    public function describeMajorProtectionBlackIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipLike)) {
            $query['IpLike'] = $request->ipLike;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMajorProtectionBlackIps',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMajorProtectionBlackIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries IP addresses in an IP address blacklist for major event protection by page.
     *  *
     * @param DescribeMajorProtectionBlackIpsRequest $request DescribeMajorProtectionBlackIpsRequest
     *
     * @return DescribeMajorProtectionBlackIpsResponse DescribeMajorProtectionBlackIpsResponse
     */
    public function describeMajorProtectionBlackIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMajorProtectionBlackIpsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about members.
     *  *
     * @param DescribeMemberAccountsRequest $request DescribeMemberAccountsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMemberAccountsResponse DescribeMemberAccountsResponse
     */
    public function describeMemberAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountStatus)) {
            $query['AccountStatus'] = $request->accountStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMemberAccounts',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMemberAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about members.
     *  *
     * @param DescribeMemberAccountsRequest $request DescribeMemberAccountsRequest
     *
     * @return DescribeMemberAccountsResponse DescribeMemberAccountsResponse
     */
    public function describeMemberAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMemberAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the queries per second (QPS) statistics of a WAF instance.
     *  *
     * @param DescribePeakTrendRequest $request DescribePeakTrendRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePeakTrendResponse DescribePeakTrendResponse
     */
    public function describePeakTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePeakTrend',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePeakTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the queries per second (QPS) statistics of a WAF instance.
     *  *
     * @param DescribePeakTrendRequest $request DescribePeakTrendRequest
     *
     * @return DescribePeakTrendResponse DescribePeakTrendResponse
     */
    public function describePeakTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePeakTrendWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the cloud service instances to be added to Web Application Firewall (WAF) in transparent proxy mode.
     *  *
     * @param DescribeProductInstancesRequest $request DescribeProductInstancesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProductInstancesResponse DescribeProductInstancesResponse
     */
    public function describeProductInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
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
        if (!Utils::isUnset($request->resourceInstanceId)) {
            $query['ResourceInstanceId'] = $request->resourceInstanceId;
        }
        if (!Utils::isUnset($request->resourceIp)) {
            $query['ResourceIp'] = $request->resourceIp;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceProduct)) {
            $query['ResourceProduct'] = $request->resourceProduct;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProductInstances',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProductInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the cloud service instances to be added to Web Application Firewall (WAF) in transparent proxy mode.
     *  *
     * @param DescribeProductInstancesRequest $request DescribeProductInstancesRequest
     *
     * @return DescribeProductInstancesResponse DescribeProductInstancesResponse
     */
    public function describeProductInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of domain names that are added to Web Application Firewall (WAF) and penalized for failing to obtain an Internet Content Provider (ICP) filing.
     *  *
     * @param DescribePunishedDomainsRequest $request DescribePunishedDomainsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePunishedDomainsResponse DescribePunishedDomainsResponse
     */
    public function describePunishedDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePunishedDomains',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePunishedDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of domain names that are added to Web Application Firewall (WAF) and penalized for failing to obtain an Internet Content Provider (ICP) filing.
     *  *
     * @param DescribePunishedDomainsRequest $request DescribePunishedDomainsRequest
     *
     * @return DescribePunishedDomainsResponse DescribePunishedDomainsResponse
     */
    public function describePunishedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePunishedDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the certificates that are used in cloud service instances. The certificates returned include the certificates within the delegated administrator account and the certificates within members to which specific instances belong. For example, the delegated administrator account has certificate 1, instance lb-xx-1 belongs to member B, and member B has certificate 2. If you specify instance lb-xx-1 in the request, certificate 1 and certificate 2 are returned.
     *  *
     * @param DescribeResourceInstanceCertsRequest $request DescribeResourceInstanceCertsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceInstanceCertsResponse DescribeResourceInstanceCertsResponse
     */
    public function describeResourceInstanceCertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceInstanceId)) {
            $query['ResourceInstanceId'] = $request->resourceInstanceId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceInstanceCerts',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceInstanceCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the certificates that are used in cloud service instances. The certificates returned include the certificates within the delegated administrator account and the certificates within members to which specific instances belong. For example, the delegated administrator account has certificate 1, instance lb-xx-1 belongs to member B, and member B has certificate 2. If you specify instance lb-xx-1 in the request, certificate 1 and certificate 2 are returned.
     *  *
     * @param DescribeResourceInstanceCertsRequest $request DescribeResourceInstanceCertsRequest
     *
     * @return DescribeResourceInstanceCertsResponse DescribeResourceInstanceCertsResponse
     */
    public function describeResourceInstanceCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceInstanceCertsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the log collection feature is enabled for a protected object.
     *  *
     * @param DescribeResourceLogStatusRequest $request DescribeResourceLogStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceLogStatusResponse DescribeResourceLogStatusResponse
     */
    public function describeResourceLogStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceLogStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the log collection feature is enabled for a protected object.
     *  *
     * @param DescribeResourceLogStatusRequest $request DescribeResourceLogStatusRequest
     *
     * @return DescribeResourceLogStatusResponse DescribeResourceLogStatusResponse
     */
    public function describeResourceLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceLogStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the ports of a cloud service instance that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeResourcePortRequest $request DescribeResourcePortRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourcePortResponse DescribeResourcePortResponse
     */
    public function describeResourcePortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceInstanceId)) {
            $query['ResourceInstanceId'] = $request->resourceInstanceId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourcePort',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourcePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the ports of a cloud service instance that are added to Web Application Firewall (WAF).
     *  *
     * @param DescribeResourcePortRequest $request DescribeResourcePortRequest
     *
     * @return DescribeResourcePortResponse DescribeResourcePortResponse
     */
    public function describeResourcePort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePortWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the region IDs of the resources that are added to Web Application Firewall (WAF) in cloud native mode. The resources include Application Load Balancer (ALB) instances, Microservices Engine (MSE) instances, and custom domain names bound to web applications in Function Compute.
     *  *
     * @param DescribeResourceRegionIdRequest $request DescribeResourceRegionIdRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceRegionIdResponse DescribeResourceRegionIdResponse
     */
    public function describeResourceRegionIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceRegionId',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceRegionIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the region IDs of the resources that are added to Web Application Firewall (WAF) in cloud native mode. The resources include Application Load Balancer (ALB) instances, Microservices Engine (MSE) instances, and custom domain names bound to web applications in Function Compute.
     *  *
     * @param DescribeResourceRegionIdRequest $request DescribeResourceRegionIdRequest
     *
     * @return DescribeResourceRegionIdResponse DescribeResourceRegionIdResponse
     */
    public function describeResourceRegionId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceRegionIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the region IDs of Classic Load Balancer (CLB) and Elastic Compute Service (ECS) instances that can be added to Web Application Firewall (WAF) in transparent proxy mode.
     *  *
     * @param DescribeResourceSupportRegionsRequest $request DescribeResourceSupportRegionsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceSupportRegionsResponse DescribeResourceSupportRegionsResponse
     */
    public function describeResourceSupportRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceSupportRegions',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceSupportRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the region IDs of Classic Load Balancer (CLB) and Elastic Compute Service (ECS) instances that can be added to Web Application Firewall (WAF) in transparent proxy mode.
     *  *
     * @param DescribeResourceSupportRegionsRequest $request DescribeResourceSupportRegionsRequest
     *
     * @return DescribeResourceSupportRegionsResponse DescribeResourceSupportRegionsResponse
     */
    public function describeResourceSupportRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceSupportRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the trend of the number of error codes that are returned to clients or Web Application Firewall (WAF). The error codes include 302, 405, 444, 499, and 5XX.
     *  *
     * @param DescribeResponseCodeTrendGraphRequest $request DescribeResponseCodeTrendGraphRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResponseCodeTrendGraphResponse DescribeResponseCodeTrendGraphResponse
     */
    public function describeResponseCodeTrendGraphWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResponseCodeTrendGraph',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResponseCodeTrendGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trend of the number of error codes that are returned to clients or Web Application Firewall (WAF). The error codes include 302, 405, 444, 499, and 5XX.
     *  *
     * @param DescribeResponseCodeTrendGraphRequest $request DescribeResponseCodeTrendGraphRequest
     *
     * @return DescribeResponseCodeTrendGraphResponse DescribeResponseCodeTrendGraphResponse
     */
    public function describeResponseCodeTrendGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResponseCodeTrendGraphWithOptions($request, $runtime);
    }

    /**
     * @summary Queries regular expression rule groups by page.
     *  *
     * @param DescribeRuleGroupsRequest $request DescribeRuleGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleGroupsResponse DescribeRuleGroupsResponse
     */
    public function describeRuleGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['SearchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleGroups',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries regular expression rule groups by page.
     *  *
     * @param DescribeRuleGroupsRequest $request DescribeRuleGroupsRequest
     *
     * @return DescribeRuleGroupsResponse DescribeRuleGroupsResponse
     */
    public function describeRuleGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 IP addresses from which attacks are initiated.
     *  *
     * @param DescribeRuleHitsTopClientIpRequest $request DescribeRuleHitsTopClientIpRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleHitsTopClientIpResponse DescribeRuleHitsTopClientIpResponse
     */
    public function describeRuleHitsTopClientIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopClientIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopClientIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 IP addresses from which attacks are initiated.
     *  *
     * @param DescribeRuleHitsTopClientIpRequest $request DescribeRuleHitsTopClientIpRequest
     *
     * @return DescribeRuleHitsTopClientIpResponse DescribeRuleHitsTopClientIpResponse
     */
    public function describeRuleHitsTopClientIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopClientIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 protected objects that trigger protection rules.
     *  *
     * @param DescribeRuleHitsTopResourceRequest $request DescribeRuleHitsTopResourceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleHitsTopResourceResponse DescribeRuleHitsTopResourceResponse
     */
    public function describeRuleHitsTopResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopResource',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 protected objects that trigger protection rules.
     *  *
     * @param DescribeRuleHitsTopResourceRequest $request DescribeRuleHitsTopResourceRequest
     *
     * @return DescribeRuleHitsTopResourceResponse DescribeRuleHitsTopResourceResponse
     */
    public function describeRuleHitsTopResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IDs of the top 10 protection rules that are matched by requests.
     *  *
     * @param DescribeRuleHitsTopRuleIdRequest $request DescribeRuleHitsTopRuleIdRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleHitsTopRuleIdResponse DescribeRuleHitsTopRuleIdResponse
     */
    public function describeRuleHitsTopRuleIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isGroupResource)) {
            $query['IsGroupResource'] = $request->isGroupResource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopRuleId',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopRuleIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IDs of the top 10 protection rules that are matched by requests.
     *  *
     * @param DescribeRuleHitsTopRuleIdRequest $request DescribeRuleHitsTopRuleIdRequest
     *
     * @return DescribeRuleHitsTopRuleIdResponse DescribeRuleHitsTopRuleIdResponse
     */
    public function describeRuleHitsTopRuleId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopRuleIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 protection modules that are matched.
     *  *
     * @param DescribeRuleHitsTopTuleTypeRequest $request DescribeRuleHitsTopTuleTypeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleHitsTopTuleTypeResponse DescribeRuleHitsTopTuleTypeResponse
     */
    public function describeRuleHitsTopTuleTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopTuleType',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopTuleTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 protection modules that are matched.
     *  *
     * @param DescribeRuleHitsTopTuleTypeRequest $request DescribeRuleHitsTopTuleTypeRequest
     *
     * @return DescribeRuleHitsTopTuleTypeResponse DescribeRuleHitsTopTuleTypeResponse
     */
    public function describeRuleHitsTopTuleType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopTuleTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 user agents that are used to initiate attacks.
     *  *
     * @param DescribeRuleHitsTopUaRequest $request DescribeRuleHitsTopUaRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleHitsTopUaResponse DescribeRuleHitsTopUaResponse
     */
    public function describeRuleHitsTopUaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopUa',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopUaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 user agents that are used to initiate attacks.
     *  *
     * @param DescribeRuleHitsTopUaRequest $request DescribeRuleHitsTopUaRequest
     *
     * @return DescribeRuleHitsTopUaResponse DescribeRuleHitsTopUaResponse
     */
    public function describeRuleHitsTopUa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopUaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 URLs that trigger protection rules.
     *  *
     * @param DescribeRuleHitsTopUrlRequest $request DescribeRuleHitsTopUrlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleHitsTopUrlResponse DescribeRuleHitsTopUrlResponse
     */
    public function describeRuleHitsTopUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopUrl',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 URLs that trigger protection rules.
     *  *
     * @param DescribeRuleHitsTopUrlRequest $request DescribeRuleHitsTopUrlRequest
     *
     * @return DescribeRuleHitsTopUrlResponse DescribeRuleHitsTopUrlResponse
     */
    public function describeRuleHitsTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether Web Application Firewall (WAF) is authorized to access Logstores.
     *  *
     * @param DescribeSlsAuthStatusRequest $request DescribeSlsAuthStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsAuthStatusResponse DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsAuthStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlsAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether Web Application Firewall (WAF) is authorized to access Logstores.
     *  *
     * @param DescribeSlsAuthStatusRequest $request DescribeSlsAuthStatusRequest
     *
     * @return DescribeSlsAuthStatusResponse DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a Logstore, such as the total capacity, storage duration, and used capacity.
     *  *
     * @param DescribeSlsLogStoreRequest $request DescribeSlsLogStoreRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsLogStoreResponse DescribeSlsLogStoreResponse
     */
    public function describeSlsLogStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsLogStore',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlsLogStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a Logstore, such as the total capacity, storage duration, and used capacity.
     *  *
     * @param DescribeSlsLogStoreRequest $request DescribeSlsLogStoreRequest
     *
     * @return DescribeSlsLogStoreResponse DescribeSlsLogStoreResponse
     */
    public function describeSlsLogStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsLogStoreWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a Simple Log Service Logstore.
     *  *
     * @param DescribeSlsLogStoreStatusRequest $request DescribeSlsLogStoreStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsLogStoreStatusResponse DescribeSlsLogStoreStatusResponse
     */
    public function describeSlsLogStoreStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsLogStoreStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlsLogStoreStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a Simple Log Service Logstore.
     *  *
     * @param DescribeSlsLogStoreStatusRequest $request DescribeSlsLogStoreStatusRequest
     *
     * @return DescribeSlsLogStoreStatusResponse DescribeSlsLogStoreStatusResponse
     */
    public function describeSlsLogStoreStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsLogStoreStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of protected resources for which a protection template takes effect.
     *  *
     * @param DescribeTemplateResourceCountRequest $request DescribeTemplateResourceCountRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplateResourceCountResponse DescribeTemplateResourceCountResponse
     */
    public function describeTemplateResourceCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateResourceCount',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplateResourceCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of protected resources for which a protection template takes effect.
     *  *
     * @param DescribeTemplateResourceCountRequest $request DescribeTemplateResourceCountRequest
     *
     * @return DescribeTemplateResourceCountResponse DescribeTemplateResourceCountResponse
     */
    public function describeTemplateResourceCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateResourceCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resources that are associated to a protection rule template.
     *  *
     * @param DescribeTemplateResourcesRequest $request DescribeTemplateResourcesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplateResourcesResponse DescribeTemplateResourcesResponse
     */
    public function describeTemplateResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplateResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resources that are associated to a protection rule template.
     *  *
     * @param DescribeTemplateResourcesRequest $request DescribeTemplateResourcesRequest
     *
     * @return DescribeTemplateResourcesResponse DescribeTemplateResourcesResponse
     */
    public function describeTemplateResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available regions for log storage.
     *  *
     * @param DescribeUserSlsLogRegionsRequest $request DescribeUserSlsLogRegionsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserSlsLogRegionsResponse DescribeUserSlsLogRegionsResponse
     */
    public function describeUserSlsLogRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserSlsLogRegions',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserSlsLogRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available regions for log storage.
     *  *
     * @param DescribeUserSlsLogRegionsRequest $request DescribeUserSlsLogRegionsRequest
     *
     * @return DescribeUserSlsLogRegionsResponse DescribeUserSlsLogRegionsResponse
     */
    public function describeUserSlsLogRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserSlsLogRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status, region ID, and status modification time of Web Application Firewall (WAF) logs.
     *  *
     * @param DescribeUserWafLogStatusRequest $request DescribeUserWafLogStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserWafLogStatusResponse DescribeUserWafLogStatusResponse
     */
    public function describeUserWafLogStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserWafLogStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserWafLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status, region ID, and status modification time of Web Application Firewall (WAF) logs.
     *  *
     * @param DescribeUserWafLogStatusRequest $request DescribeUserWafLogStatusRequest
     *
     * @return DescribeUserWafLogStatusResponse DescribeUserWafLogStatusResponse
     */
    public function describeUserWafLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserWafLogStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 IP addresses from which requests are sent.
     *  *
     * @param DescribeVisitTopIpRequest $request DescribeVisitTopIpRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVisitTopIpResponse DescribeVisitTopIpResponse
     */
    public function describeVisitTopIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVisitTopIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVisitTopIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 IP addresses from which requests are sent.
     *  *
     * @param DescribeVisitTopIpRequest $request DescribeVisitTopIpRequest
     *
     * @return DescribeVisitTopIpResponse DescribeVisitTopIpResponse
     */
    public function describeVisitTopIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVisitTopIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 10 user agents that are used to initiate requests.
     *  *
     * @param DescribeVisitUasRequest $request DescribeVisitUasRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVisitUasResponse DescribeVisitUasResponse
     */
    public function describeVisitUasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVisitUas',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVisitUasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 10 user agents that are used to initiate requests.
     *  *
     * @param DescribeVisitUasRequest $request DescribeVisitUasRequest
     *
     * @return DescribeVisitUasResponse DescribeVisitUasResponse
     */
    public function describeVisitUas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVisitUasWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the back-to-origin CIDR blocks of a Web Application Firewall (WAF) instance.
     *  *
     * @param DescribeWafSourceIpSegmentRequest $request DescribeWafSourceIpSegmentRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWafSourceIpSegmentResponse DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWafSourceIpSegment',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWafSourceIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the back-to-origin CIDR blocks of a Web Application Firewall (WAF) instance.
     *  *
     * @param DescribeWafSourceIpSegmentRequest $request DescribeWafSourceIpSegmentRequest
     *
     * @return DescribeWafSourceIpSegmentResponse DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWafSourceIpSegmentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tag keys.
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2021-10-01',
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
     * @summary Queries tag keys.
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
     * @summary Queries the tags that are added to a resource.
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
            'version'     => '2021-10-01',
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
     * @summary Queries the tags that are added to a resource.
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
     * @summary Queries the tag values of a tag key.
     *  *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tag values of a tag key.
     *  *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @summary 修改API安全日志订阅
     *  *
     * @param ModifyApisecLogDeliveryRequest $request ModifyApisecLogDeliveryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApisecLogDeliveryResponse ModifyApisecLogDeliveryResponse
     */
    public function modifyApisecLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assertKey)) {
            $query['AssertKey'] = $request->assertKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logRegionId)) {
            $query['LogRegionId'] = $request->logRegionId;
        }
        if (!Utils::isUnset($request->logStoreName)) {
            $query['LogStoreName'] = $request->logStoreName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApisecLogDelivery',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApisecLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改API安全日志订阅
     *  *
     * @param ModifyApisecLogDeliveryRequest $request ModifyApisecLogDeliveryRequest
     *
     * @return ModifyApisecLogDeliveryResponse ModifyApisecLogDeliveryResponse
     */
    public function modifyApisecLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary 修改API安全日志订阅状态
     *  *
     * @param ModifyApisecLogDeliveryStatusRequest $request ModifyApisecLogDeliveryStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApisecLogDeliveryStatusResponse ModifyApisecLogDeliveryStatusResponse
     */
    public function modifyApisecLogDeliveryStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assertKey)) {
            $query['AssertKey'] = $request->assertKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApisecLogDeliveryStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApisecLogDeliveryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改API安全日志订阅状态
     *  *
     * @param ModifyApisecLogDeliveryStatusRequest $request ModifyApisecLogDeliveryStatusRequest
     *
     * @return ModifyApisecLogDeliveryStatusResponse ModifyApisecLogDeliveryStatusResponse
     */
    public function modifyApisecLogDeliveryStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecLogDeliveryStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a protected object group.
     *  *
     * @param ModifyDefenseResourceGroupRequest $request ModifyDefenseResourceGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefenseResourceGroupResponse ModifyDefenseResourceGroupResponse
     */
    public function modifyDefenseResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addList)) {
            $query['AddList'] = $request->addList;
        }
        if (!Utils::isUnset($request->deleteList)) {
            $query['DeleteList'] = $request->deleteList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseResourceGroup',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a protected object group.
     *  *
     * @param ModifyDefenseResourceGroupRequest $request ModifyDefenseResourceGroupRequest
     *
     * @return ModifyDefenseResourceGroupResponse ModifyDefenseResourceGroupResponse
     */
    public function modifyDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the cookie settings of a protected object and the method to identify the originating IP addresses of clients.
     *  *
     * @param ModifyDefenseResourceXffRequest $request ModifyDefenseResourceXffRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefenseResourceXffResponse ModifyDefenseResourceXffResponse
     */
    public function modifyDefenseResourceXffWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acwCookieStatus)) {
            $query['AcwCookieStatus'] = $request->acwCookieStatus;
        }
        if (!Utils::isUnset($request->acwSecureStatus)) {
            $query['AcwSecureStatus'] = $request->acwSecureStatus;
        }
        if (!Utils::isUnset($request->acwV3SecureStatus)) {
            $query['AcwV3SecureStatus'] = $request->acwV3SecureStatus;
        }
        if (!Utils::isUnset($request->customHeaders)) {
            $query['CustomHeaders'] = $request->customHeaders;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->xffStatus)) {
            $query['XffStatus'] = $request->xffStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseResourceXff',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseResourceXffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the cookie settings of a protected object and the method to identify the originating IP addresses of clients.
     *  *
     * @param ModifyDefenseResourceXffRequest $request ModifyDefenseResourceXffRequest
     *
     * @return ModifyDefenseResourceXffResponse ModifyDefenseResourceXffResponse
     */
    public function modifyDefenseResourceXff($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseResourceXffWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a protection rule.
     *  *
     * @param ModifyDefenseRuleRequest $request ModifyDefenseRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefenseRuleResponse ModifyDefenseRuleResponse
     */
    public function modifyDefenseRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseRule',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a protection rule.
     *  *
     * @param ModifyDefenseRuleRequest $request ModifyDefenseRuleRequest
     *
     * @return ModifyDefenseRuleResponse ModifyDefenseRuleResponse
     */
    public function modifyDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the cached page of a website that is protected based on a website tamper-proofing rule.
     *  *
     * @param ModifyDefenseRuleCacheRequest $request ModifyDefenseRuleCacheRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefenseRuleCacheResponse ModifyDefenseRuleCacheResponse
     */
    public function modifyDefenseRuleCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseRuleCache',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseRuleCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the cached page of a website that is protected based on a website tamper-proofing rule.
     *  *
     * @param ModifyDefenseRuleCacheRequest $request ModifyDefenseRuleCacheRequest
     *
     * @return ModifyDefenseRuleCacheResponse ModifyDefenseRuleCacheResponse
     */
    public function modifyDefenseRuleCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseRuleCacheWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the status of a protection rule.
     *  *
     * @param ModifyDefenseRuleStatusRequest $request ModifyDefenseRuleStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefenseRuleStatusResponse ModifyDefenseRuleStatusResponse
     */
    public function modifyDefenseRuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['RuleStatus'] = $request->ruleStatus;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseRuleStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the status of a protection rule.
     *  *
     * @param ModifyDefenseRuleStatusRequest $request ModifyDefenseRuleStatusRequest
     *
     * @return ModifyDefenseRuleStatusResponse ModifyDefenseRuleStatusResponse
     */
    public function modifyDefenseRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseRuleStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a protection rule template.
     *  *
     * @param ModifyDefenseTemplateRequest $request ModifyDefenseTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefenseTemplateResponse ModifyDefenseTemplateResponse
     */
    public function modifyDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a protection rule template.
     *  *
     * @param ModifyDefenseTemplateRequest $request ModifyDefenseTemplateRequest
     *
     * @return ModifyDefenseTemplateResponse ModifyDefenseTemplateResponse
     */
    public function modifyDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the status of a protection rule template.
     *  *
     * @param ModifyDefenseTemplateStatusRequest $request ModifyDefenseTemplateStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefenseTemplateStatusResponse ModifyDefenseTemplateStatusResponse
     */
    public function modifyDefenseTemplateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateStatus)) {
            $query['TemplateStatus'] = $request->templateStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseTemplateStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseTemplateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the status of a protection rule template.
     *  *
     * @param ModifyDefenseTemplateStatusRequest $request ModifyDefenseTemplateStatusRequest
     *
     * @return ModifyDefenseTemplateStatusResponse ModifyDefenseTemplateStatusResponse
     */
    public function modifyDefenseTemplateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseTemplateStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a domain name that is added to Web Application Firewall (WAF) in CNAME record mode.
     *  *
     * @param ModifyDomainRequest $tmpReq  ModifyDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDomainResponse ModifyDomainResponse
     */
    public function modifyDomainWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDomainShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listen)) {
            $request->listenShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirect)) {
            $request->redirectShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->listenShrink)) {
            $query['Listen'] = $request->listenShrink;
        }
        if (!Utils::isUnset($request->redirectShrink)) {
            $query['Redirect'] = $request->redirectShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDomain',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a domain name that is added to Web Application Firewall (WAF) in CNAME record mode.
     *  *
     * @param ModifyDomainRequest $request ModifyDomainRequest
     *
     * @return ModifyDomainResponse ModifyDomainResponse
     */
    public function modifyDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Re-adds a domain name that is penalized for failing to obtain an Internet Content Provider (ICP) filing to Web Application Firewall (WAF).
     *  *
     * @param ModifyDomainPunishStatusRequest $request ModifyDomainPunishStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDomainPunishStatusResponse ModifyDomainPunishStatusResponse
     */
    public function modifyDomainPunishStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDomainPunishStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDomainPunishStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Re-adds a domain name that is penalized for failing to obtain an Internet Content Provider (ICP) filing to Web Application Firewall (WAF).
     *  *
     * @param ModifyDomainPunishStatusRequest $request ModifyDomainPunishStatusRequest
     *
     * @return ModifyDomainPunishStatusResponse ModifyDomainPunishStatusResponse
     */
    public function modifyDomainPunishStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainPunishStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables manual bypass for a hybrid cloud cluster of the SDK-based traffic mirroring mode.
     *  *
     * @param ModifyHybridCloudClusterBypassStatusRequest $request ModifyHybridCloudClusterBypassStatusRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridCloudClusterBypassStatusResponse ModifyHybridCloudClusterBypassStatusResponse
     */
    public function modifyHybridCloudClusterBypassStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterResourceId)) {
            $query['ClusterResourceId'] = $request->clusterResourceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['RuleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHybridCloudClusterBypassStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHybridCloudClusterBypassStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables manual bypass for a hybrid cloud cluster of the SDK-based traffic mirroring mode.
     *  *
     * @param ModifyHybridCloudClusterBypassStatusRequest $request ModifyHybridCloudClusterBypassStatusRequest
     *
     * @return ModifyHybridCloudClusterBypassStatusResponse ModifyHybridCloudClusterBypassStatusResponse
     */
    public function modifyHybridCloudClusterBypassStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudClusterBypassStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an IP address blacklist for major event protection.
     *  *
     * @param ModifyMajorProtectionBlackIpRequest $request ModifyMajorProtectionBlackIpRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMajorProtectionBlackIpResponse ModifyMajorProtectionBlackIpResponse
     */
    public function modifyMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipList)) {
            $query['IpList'] = $request->ipList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMajorProtectionBlackIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMajorProtectionBlackIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an IP address blacklist for major event protection.
     *  *
     * @param ModifyMajorProtectionBlackIpRequest $request ModifyMajorProtectionBlackIpRequest
     *
     * @return ModifyMajorProtectionBlackIpResponse ModifyMajorProtectionBlackIpResponse
     */
    public function modifyMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about members that are added for multi-account management.
     *  *
     * @param ModifyMemberAccountRequest $request ModifyMemberAccountRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMemberAccountResponse ModifyMemberAccountResponse
     */
    public function modifyMemberAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memberAccountId)) {
            $query['MemberAccountId'] = $request->memberAccountId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMemberAccount',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMemberAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about members that are added for multi-account management.
     *  *
     * @param ModifyMemberAccountRequest $request ModifyMemberAccountRequest
     *
     * @return ModifyMemberAccountResponse ModifyMemberAccountResponse
     */
    public function modifyMemberAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMemberAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the log collection feature for a protected object.
     *  *
     * @param ModifyResourceLogStatusRequest $request ModifyResourceLogStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyResourceLogStatusResponse ModifyResourceLogStatusResponse
     */
    public function modifyResourceLogStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourceLogStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResourceLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables the log collection feature for a protected object.
     *  *
     * @param ModifyResourceLogStatusRequest $request ModifyResourceLogStatusRequest
     *
     * @return ModifyResourceLogStatusResponse ModifyResourceLogStatusResponse
     */
    public function modifyResourceLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceLogStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Associates or disassociates a protected object or protected object group with or from a protection rule template.
     *  *
     * @param ModifyTemplateResourcesRequest $request ModifyTemplateResourcesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTemplateResourcesResponse ModifyTemplateResourcesResponse
     */
    public function modifyTemplateResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bindResourceGroups)) {
            $query['BindResourceGroups'] = $request->bindResourceGroups;
        }
        if (!Utils::isUnset($request->bindResources)) {
            $query['BindResources'] = $request->bindResources;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->unbindResourceGroups)) {
            $query['UnbindResourceGroups'] = $request->unbindResourceGroups;
        }
        if (!Utils::isUnset($request->unbindResources)) {
            $query['UnbindResources'] = $request->unbindResources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTemplateResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTemplateResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates or disassociates a protected object or protected object group with or from a protection rule template.
     *  *
     * @param ModifyTemplateResourcesRequest $request ModifyTemplateResourcesRequest
     *
     * @return ModifyTemplateResourcesResponse ModifyTemplateResourcesResponse
     */
    public function modifyTemplateResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Synchronizes Elastic Compute Service (ECS) instances and Classic Load Balancer (CLB) instances to Web Application Firewall (WAF).
     *  *
     * @description SyncProductInstance is an asynchronous operation. You can call the [DescribeProductInstances](https://help.aliyun.com/document_detail/2743168.html) operation to query the status of the task.
     *  *
     * @param SyncProductInstanceRequest $request SyncProductInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncProductInstanceResponse SyncProductInstanceResponse
     */
    public function syncProductInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncProductInstance',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncProductInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Synchronizes Elastic Compute Service (ECS) instances and Classic Load Balancer (CLB) instances to Web Application Firewall (WAF).
     *  *
     * @description SyncProductInstance is an asynchronous operation. You can call the [DescribeProductInstances](https://help.aliyun.com/document_detail/2743168.html) operation to query the status of the task.
     *  *
     * @param SyncProductInstanceRequest $request SyncProductInstanceRequest
     *
     * @return SyncProductInstanceResponse SyncProductInstanceResponse
     */
    public function syncProductInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncProductInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to resources.
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
            'version'     => '2021-10-01',
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
     * @summary Adds tags to resources.
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
     * @summary Removes tags from resources and then deletes the tags.
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
            'version'     => '2021-10-01',
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
     * @summary Removes tags from resources and then deletes the tags.
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
