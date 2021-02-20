<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AddAutoCcBlacklistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AddAutoCcBlacklistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AddAutoCcWhitelistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AddAutoCcWhitelistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AssociateWebCertRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AssociateWebCertResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AttachSceneDefenseObjectRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AttachSceneDefenseObjectResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigL7RsPolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigL7RsPolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigNetworkRegionBlockRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigNetworkRegionBlockResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigNetworkRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigNetworkRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebCCTemplateRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebCCTemplateResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebIpSetRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebIpSetResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateAsyncTaskRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateAsyncTaskResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateNetworkRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateNetworkRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateSceneDefensePolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateSceneDefensePolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateSchedulerRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateSchedulerRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateTagResourcesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateTagResourcesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateWebCCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateWebCCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateWebRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateWebRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteAsyncTaskRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteAsyncTaskResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteAutoCcBlacklistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteAutoCcBlacklistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteAutoCcWhitelistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteAutoCcWhitelistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteNetworkRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteNetworkRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteSceneDefensePolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteSceneDefensePolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteSchedulerRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteSchedulerRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteTagResourcesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteTagResourcesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebCacheCustomRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebCacheCustomRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebCCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebCCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebPreciseAccessRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebPreciseAccessRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAsyncTasksRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAsyncTasksResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcBlacklistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcBlacklistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcListCountRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcListCountResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcWhitelistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcWhitelistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBackSourceCidrRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBackSourceCidrResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlackholeStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlackholeStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCertsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCertsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCnameReusesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCnameReusesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosAllEventListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosAllEventListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAreaRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAreaResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAttackTypeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAttackTypeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventIspRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventIspResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventMaxRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventMaxResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventSrcIpRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventSrcIpResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDoSEventsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDoSEventsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseCountStatisticsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseCountStatisticsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseRecordsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseRecordsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainOverviewRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainOverviewResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainQPSListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainQPSListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainQpsWithCacheRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainQpsWithCacheResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainStatusCodeCountRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainStatusCodeCountResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainStatusCodeListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainStatusCodeListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopAttackListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopAttackListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceCountriesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceCountriesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceProvincesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceProvincesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopCostTimeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopCostTimeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopUrlRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopUrlResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticBandwidthSpecRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticBandwidthSpecResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceIdsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceIdsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceSpecsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceSpecsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceStatisticsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceStatisticsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLogStoreExistStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLogStoreExistStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRegionBlockRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRegionBlockResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeOpEntitiesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeOpEntitiesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortAttackMaxFlowRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortAttackMaxFlowResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortAutoCcStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortAutoCcStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortConnsCountRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortConnsCountResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortConnsListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortConnsListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortMaxConnsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortMaxConnsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceCountriesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceCountriesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceIspsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceIspsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceProvincesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceProvincesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefenseObjectsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefenseObjectsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlsAuthStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlsAuthStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlsLogstoreInfoRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlsLogstoreInfoResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlsOpenStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlsOpenStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeStsGrantStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeStsGrantStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagKeysRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagKeysResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagResourcesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagResourcesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeUnBlackholeCountRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeUnBlackholeCountResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeUnBlockCountRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeUnBlockCountResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogDispatchStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogDispatchStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogEmptyCountRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogEmptyCountResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessModeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCcProtectSwitchRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCcProtectSwitchResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCustomPortsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCustomPortsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DetachSceneDefenseObjectRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DetachSceneDefenseObjectResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DisableSceneDefensePolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DisableSceneDefensePolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DisableWebAccessLogConfigRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DisableWebAccessLogConfigResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DisableWebCCRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DisableWebCCResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DisableWebCCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DisableWebCCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EmptyAutoCcBlacklistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EmptyAutoCcBlacklistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EmptyAutoCcWhitelistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EmptyAutoCcWhitelistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EmptySlsLogstoreRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EmptySlsLogstoreResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EnableSceneDefensePolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EnableSceneDefensePolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EnableWebAccessLogConfigRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EnableWebAccessLogConfigResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EnableWebCCRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EnableWebCCResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EnableWebCCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\EnableWebCCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyBlackholeStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyBlackholeStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyBlockStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyBlockStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyCnameReuseRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyCnameReuseResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyElasticBandWidthRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyElasticBandWidthResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyFullLogTtlRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyFullLogTtlResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHealthCheckConfigRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHealthCheckConfigResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHttp2EnableRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHttp2EnableResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyInstanceRemarkRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyInstanceRemarkResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyNetworkRuleAttributeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyNetworkRuleAttributeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyPortAutoCcStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyPortAutoCcStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifySceneDefensePolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifySceneDefensePolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifySchedulerRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifySchedulerRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyTlsConfigRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyTlsConfigResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAccessModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAccessModeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAIProtectModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAIProtectModeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAIProtectSwitchRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAIProtectSwitchResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAreaBlockRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAreaBlockResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAreaBlockSwitchRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebAreaBlockSwitchResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCacheCustomRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCacheCustomRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCacheModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCacheModeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCacheSwitchRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCacheSwitchResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebIpSetSwitchRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebIpSetSwitchResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebPreciseAccessRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebPreciseAccessRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebPreciseAccessSwitchRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebPreciseAccessSwitchResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\SwitchSchedulerRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\SwitchSchedulerRuleResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ddoscoo extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddoscoo', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddAutoCcBlacklistRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddAutoCcBlacklistResponse
     */
    public function addAutoCcBlacklistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAutoCcBlacklistResponse::fromMap($this->doRPCRequest('AddAutoCcBlacklist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddAutoCcBlacklistRequest $request
     *
     * @return AddAutoCcBlacklistResponse
     */
    public function addAutoCcBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAutoCcBlacklistWithOptions($request, $runtime);
    }

    /**
     * @param AddAutoCcWhitelistRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddAutoCcWhitelistResponse
     */
    public function addAutoCcWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAutoCcWhitelistResponse::fromMap($this->doRPCRequest('AddAutoCcWhitelist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddAutoCcWhitelistRequest $request
     *
     * @return AddAutoCcWhitelistResponse
     */
    public function addAutoCcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAutoCcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param AssociateWebCertRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AssociateWebCertResponse
     */
    public function associateWebCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateWebCertResponse::fromMap($this->doRPCRequest('AssociateWebCert', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateWebCertRequest $request
     *
     * @return AssociateWebCertResponse
     */
    public function associateWebCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateWebCertWithOptions($request, $runtime);
    }

    /**
     * @param AttachSceneDefenseObjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AttachSceneDefenseObjectResponse
     */
    public function attachSceneDefenseObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachSceneDefenseObjectResponse::fromMap($this->doRPCRequest('AttachSceneDefenseObject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachSceneDefenseObjectRequest $request
     *
     * @return AttachSceneDefenseObjectResponse
     */
    public function attachSceneDefenseObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachSceneDefenseObjectWithOptions($request, $runtime);
    }

    /**
     * @param ConfigL7RsPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigL7RsPolicyResponse
     */
    public function configL7RsPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigL7RsPolicyResponse::fromMap($this->doRPCRequest('ConfigL7RsPolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigL7RsPolicyRequest $request
     *
     * @return ConfigL7RsPolicyResponse
     */
    public function configL7RsPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configL7RsPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ConfigNetworkRegionBlockRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfigNetworkRegionBlockResponse
     */
    public function configNetworkRegionBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigNetworkRegionBlockResponse::fromMap($this->doRPCRequest('ConfigNetworkRegionBlock', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigNetworkRegionBlockRequest $request
     *
     * @return ConfigNetworkRegionBlockResponse
     */
    public function configNetworkRegionBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configNetworkRegionBlockWithOptions($request, $runtime);
    }

    /**
     * @param ConfigNetworkRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigNetworkRulesResponse
     */
    public function configNetworkRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigNetworkRulesResponse::fromMap($this->doRPCRequest('ConfigNetworkRules', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigNetworkRulesRequest $request
     *
     * @return ConfigNetworkRulesResponse
     */
    public function configNetworkRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configNetworkRulesWithOptions($request, $runtime);
    }

    /**
     * @param ConfigWebCCTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigWebCCTemplateResponse
     */
    public function configWebCCTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigWebCCTemplateResponse::fromMap($this->doRPCRequest('ConfigWebCCTemplate', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigWebCCTemplateRequest $request
     *
     * @return ConfigWebCCTemplateResponse
     */
    public function configWebCCTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configWebCCTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ConfigWebIpSetRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConfigWebIpSetResponse
     */
    public function configWebIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigWebIpSetResponse::fromMap($this->doRPCRequest('ConfigWebIpSet', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigWebIpSetRequest $request
     *
     * @return ConfigWebIpSetResponse
     */
    public function configWebIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configWebIpSetWithOptions($request, $runtime);
    }

    /**
     * @param CreateAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAsyncTaskResponse
     */
    public function createAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAsyncTaskResponse::fromMap($this->doRPCRequest('CreateAsyncTask', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAsyncTaskRequest $request
     *
     * @return CreateAsyncTaskResponse
     */
    public function createAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateNetworkRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateNetworkRulesResponse
     */
    public function createNetworkRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNetworkRulesResponse::fromMap($this->doRPCRequest('CreateNetworkRules', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNetworkRulesRequest $request
     *
     * @return CreateNetworkRulesResponse
     */
    public function createNetworkRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateSceneDefensePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateSceneDefensePolicyResponse
     */
    public function createSceneDefensePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSceneDefensePolicyResponse::fromMap($this->doRPCRequest('CreateSceneDefensePolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSceneDefensePolicyRequest $request
     *
     * @return CreateSceneDefensePolicyResponse
     */
    public function createSceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateSchedulerRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSchedulerRuleResponse
     */
    public function createSchedulerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSchedulerRuleResponse::fromMap($this->doRPCRequest('CreateSchedulerRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSchedulerRuleRequest $request
     *
     * @return CreateSchedulerRuleResponse
     */
    public function createSchedulerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchedulerRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateTagResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTagResourcesResponse
     */
    public function createTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTagResourcesResponse::fromMap($this->doRPCRequest('CreateTagResources', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTagResourcesRequest $request
     *
     * @return CreateTagResourcesResponse
     */
    public function createTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param CreateWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWebCCRuleResponse
     */
    public function createWebCCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWebCCRuleResponse::fromMap($this->doRPCRequest('CreateWebCCRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateWebCCRuleRequest $request
     *
     * @return CreateWebCCRuleResponse
     */
    public function createWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateWebRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateWebRuleResponse
     */
    public function createWebRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWebRuleResponse::fromMap($this->doRPCRequest('CreateWebRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateWebRuleRequest $request
     *
     * @return CreateWebRuleResponse
     */
    public function createWebRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAsyncTaskResponse
     */
    public function deleteAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAsyncTaskResponse::fromMap($this->doRPCRequest('DeleteAsyncTask', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAsyncTaskRequest $request
     *
     * @return DeleteAsyncTaskResponse
     */
    public function deleteAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAutoCcBlacklistRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAutoCcBlacklistResponse
     */
    public function deleteAutoCcBlacklistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAutoCcBlacklistResponse::fromMap($this->doRPCRequest('DeleteAutoCcBlacklist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAutoCcBlacklistRequest $request
     *
     * @return DeleteAutoCcBlacklistResponse
     */
    public function deleteAutoCcBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoCcBlacklistWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAutoCcWhitelistRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAutoCcWhitelistResponse
     */
    public function deleteAutoCcWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAutoCcWhitelistResponse::fromMap($this->doRPCRequest('DeleteAutoCcWhitelist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAutoCcWhitelistRequest $request
     *
     * @return DeleteAutoCcWhitelistResponse
     */
    public function deleteAutoCcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoCcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteNetworkRuleResponse
     */
    public function deleteNetworkRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNetworkRuleResponse::fromMap($this->doRPCRequest('DeleteNetworkRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNetworkRuleRequest $request
     *
     * @return DeleteNetworkRuleResponse
     */
    public function deleteNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSceneDefensePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSceneDefensePolicyResponse
     */
    public function deleteSceneDefensePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSceneDefensePolicyResponse::fromMap($this->doRPCRequest('DeleteSceneDefensePolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSceneDefensePolicyRequest $request
     *
     * @return DeleteSceneDefensePolicyResponse
     */
    public function deleteSceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSchedulerRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSchedulerRuleResponse
     */
    public function deleteSchedulerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSchedulerRuleResponse::fromMap($this->doRPCRequest('DeleteSchedulerRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSchedulerRuleRequest $request
     *
     * @return DeleteSchedulerRuleResponse
     */
    public function deleteSchedulerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchedulerRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTagResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteTagResourcesResponse
     */
    public function deleteTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTagResourcesResponse::fromMap($this->doRPCRequest('DeleteTagResources', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTagResourcesRequest $request
     *
     * @return DeleteTagResourcesResponse
     */
    public function deleteTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWebCacheCustomRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteWebCacheCustomRuleResponse
     */
    public function deleteWebCacheCustomRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWebCacheCustomRuleResponse::fromMap($this->doRPCRequest('DeleteWebCacheCustomRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteWebCacheCustomRuleRequest $request
     *
     * @return DeleteWebCacheCustomRuleResponse
     */
    public function deleteWebCacheCustomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebCacheCustomRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWebCCRuleResponse
     */
    public function deleteWebCCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWebCCRuleResponse::fromMap($this->doRPCRequest('DeleteWebCCRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteWebCCRuleRequest $request
     *
     * @return DeleteWebCCRuleResponse
     */
    public function deleteWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWebPreciseAccessRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteWebPreciseAccessRuleResponse
     */
    public function deleteWebPreciseAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWebPreciseAccessRuleResponse::fromMap($this->doRPCRequest('DeleteWebPreciseAccessRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteWebPreciseAccessRuleRequest $request
     *
     * @return DeleteWebPreciseAccessRuleResponse
     */
    public function deleteWebPreciseAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebPreciseAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWebRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteWebRuleResponse
     */
    public function deleteWebRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWebRuleResponse::fromMap($this->doRPCRequest('DeleteWebRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteWebRuleRequest $request
     *
     * @return DeleteWebRuleResponse
     */
    public function deleteWebRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAsyncTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAsyncTasksResponse
     */
    public function describeAsyncTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAsyncTasksResponse::fromMap($this->doRPCRequest('DescribeAsyncTasks', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAsyncTasksRequest $request
     *
     * @return DescribeAsyncTasksResponse
     */
    public function describeAsyncTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAsyncTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoCcBlacklistRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAutoCcBlacklistResponse
     */
    public function describeAutoCcBlacklistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoCcBlacklistResponse::fromMap($this->doRPCRequest('DescribeAutoCcBlacklist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoCcBlacklistRequest $request
     *
     * @return DescribeAutoCcBlacklistResponse
     */
    public function describeAutoCcBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoCcBlacklistWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoCcListCountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAutoCcListCountResponse
     */
    public function describeAutoCcListCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoCcListCountResponse::fromMap($this->doRPCRequest('DescribeAutoCcListCount', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoCcListCountRequest $request
     *
     * @return DescribeAutoCcListCountResponse
     */
    public function describeAutoCcListCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoCcListCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoCcWhitelistRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAutoCcWhitelistResponse
     */
    public function describeAutoCcWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoCcWhitelistResponse::fromMap($this->doRPCRequest('DescribeAutoCcWhitelist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoCcWhitelistRequest $request
     *
     * @return DescribeAutoCcWhitelistResponse
     */
    public function describeAutoCcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoCcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackSourceCidrRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackSourceCidrResponse::fromMap($this->doRPCRequest('DescribeBackSourceCidr', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackSourceCidrRequest $request
     *
     * @return DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackSourceCidrWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlackholeStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeBlackholeStatusResponse
     */
    public function describeBlackholeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBlackholeStatusResponse::fromMap($this->doRPCRequest('DescribeBlackholeStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBlackholeStatusRequest $request
     *
     * @return DescribeBlackholeStatusResponse
     */
    public function describeBlackholeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlackholeStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBlockStatusResponse
     */
    public function describeBlockStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBlockStatusResponse::fromMap($this->doRPCRequest('DescribeBlockStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBlockStatusRequest $request
     *
     * @return DescribeBlockStatusResponse
     */
    public function describeBlockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeCertsResponse
     */
    public function describeCertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCertsResponse::fromMap($this->doRPCRequest('DescribeCerts', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCertsRequest $request
     *
     * @return DescribeCertsResponse
     */
    public function describeCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCnameReusesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCnameReusesResponse
     */
    public function describeCnameReusesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCnameReusesResponse::fromMap($this->doRPCRequest('DescribeCnameReuses', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCnameReusesRequest $request
     *
     * @return DescribeCnameReusesResponse
     */
    public function describeCnameReuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCnameReusesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDosAllEventListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDDosAllEventListResponse
     */
    public function describeDDosAllEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDDosAllEventListResponse::fromMap($this->doRPCRequest('DescribeDDosAllEventList', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDDosAllEventListRequest $request
     *
     * @return DescribeDDosAllEventListResponse
     */
    public function describeDDosAllEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosAllEventListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDosEventAreaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDDosEventAreaResponse
     */
    public function describeDDosEventAreaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDDosEventAreaResponse::fromMap($this->doRPCRequest('DescribeDDosEventArea', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDDosEventAreaRequest $request
     *
     * @return DescribeDDosEventAreaResponse
     */
    public function describeDDosEventArea($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventAreaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDosEventAttackTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDDosEventAttackTypeResponse
     */
    public function describeDDosEventAttackTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDDosEventAttackTypeResponse::fromMap($this->doRPCRequest('DescribeDDosEventAttackType', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDDosEventAttackTypeRequest $request
     *
     * @return DescribeDDosEventAttackTypeResponse
     */
    public function describeDDosEventAttackType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventAttackTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDosEventIspRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDDosEventIspResponse
     */
    public function describeDDosEventIspWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDDosEventIspResponse::fromMap($this->doRPCRequest('DescribeDDosEventIsp', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDDosEventIspRequest $request
     *
     * @return DescribeDDosEventIspResponse
     */
    public function describeDDosEventIsp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventIspWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDosEventMaxRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDDosEventMaxResponse
     */
    public function describeDDosEventMaxWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDDosEventMaxResponse::fromMap($this->doRPCRequest('DescribeDDosEventMax', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDDosEventMaxRequest $request
     *
     * @return DescribeDDosEventMaxResponse
     */
    public function describeDDosEventMax($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventMaxWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDoSEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDDoSEventsResponse
     */
    public function describeDDoSEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDDoSEventsResponse::fromMap($this->doRPCRequest('DescribeDDoSEvents', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDDoSEventsRequest $request
     *
     * @return DescribeDDoSEventsResponse
     */
    public function describeDDoSEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDosEventSrcIpRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDDosEventSrcIpResponse
     */
    public function describeDDosEventSrcIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDDosEventSrcIpResponse::fromMap($this->doRPCRequest('DescribeDDosEventSrcIp', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDDosEventSrcIpRequest $request
     *
     * @return DescribeDDosEventSrcIpResponse
     */
    public function describeDDosEventSrcIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventSrcIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefenseCountStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDefenseCountStatisticsResponse::fromMap($this->doRPCRequest('DescribeDefenseCountStatistics', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDefenseCountStatisticsRequest $request
     *
     * @return DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseCountStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefenseRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDefenseRecordsResponse
     */
    public function describeDefenseRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDefenseRecordsResponse::fromMap($this->doRPCRequest('DescribeDefenseRecords', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDefenseRecordsRequest $request
     *
     * @return DescribeDefenseRecordsResponse
     */
    public function describeDefenseRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAttackEventsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainAttackEventsResponse
     */
    public function describeDomainAttackEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainAttackEventsResponse::fromMap($this->doRPCRequest('DescribeDomainAttackEvents', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainAttackEventsRequest $request
     *
     * @return DescribeDomainAttackEventsResponse
     */
    public function describeDomainAttackEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAttackEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainOverviewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDomainOverviewResponse
     */
    public function describeDomainOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainOverviewResponse::fromMap($this->doRPCRequest('DescribeDomainOverview', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainOverviewRequest $request
     *
     * @return DescribeDomainOverviewResponse
     */
    public function describeDomainOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainOverviewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainQPSListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainQPSListResponse
     */
    public function describeDomainQPSListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainQPSListResponse::fromMap($this->doRPCRequest('DescribeDomainQPSList', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainQPSListRequest $request
     *
     * @return DescribeDomainQPSListResponse
     */
    public function describeDomainQPSList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQPSListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainQpsWithCacheRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainQpsWithCacheResponse
     */
    public function describeDomainQpsWithCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainQpsWithCacheResponse::fromMap($this->doRPCRequest('DescribeDomainQpsWithCache', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainQpsWithCacheRequest $request
     *
     * @return DescribeDomainQpsWithCacheResponse
     */
    public function describeDomainQpsWithCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsWithCacheWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainsResponse::fromMap($this->doRPCRequest('DescribeDomains', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainsRequest $request
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainStatusCodeCountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainStatusCodeCountResponse
     */
    public function describeDomainStatusCodeCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainStatusCodeCountResponse::fromMap($this->doRPCRequest('DescribeDomainStatusCodeCount', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainStatusCodeCountRequest $request
     *
     * @return DescribeDomainStatusCodeCountResponse
     */
    public function describeDomainStatusCodeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatusCodeCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainStatusCodeListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainStatusCodeListResponse
     */
    public function describeDomainStatusCodeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainStatusCodeListResponse::fromMap($this->doRPCRequest('DescribeDomainStatusCodeList', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainStatusCodeListRequest $request
     *
     * @return DescribeDomainStatusCodeListResponse
     */
    public function describeDomainStatusCodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatusCodeListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainTopAttackListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainTopAttackListResponse
     */
    public function describeDomainTopAttackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainTopAttackListResponse::fromMap($this->doRPCRequest('DescribeDomainTopAttackList', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainTopAttackListRequest $request
     *
     * @return DescribeDomainTopAttackListResponse
     */
    public function describeDomainTopAttackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopAttackListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainViewSourceCountriesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainViewSourceCountriesResponse
     */
    public function describeDomainViewSourceCountriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainViewSourceCountriesResponse::fromMap($this->doRPCRequest('DescribeDomainViewSourceCountries', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainViewSourceCountriesRequest $request
     *
     * @return DescribeDomainViewSourceCountriesResponse
     */
    public function describeDomainViewSourceCountries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainViewSourceCountriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainViewSourceProvincesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainViewSourceProvincesResponse
     */
    public function describeDomainViewSourceProvincesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainViewSourceProvincesResponse::fromMap($this->doRPCRequest('DescribeDomainViewSourceProvinces', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainViewSourceProvincesRequest $request
     *
     * @return DescribeDomainViewSourceProvincesResponse
     */
    public function describeDomainViewSourceProvinces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainViewSourceProvincesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainViewTopCostTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainViewTopCostTimeResponse
     */
    public function describeDomainViewTopCostTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainViewTopCostTimeResponse::fromMap($this->doRPCRequest('DescribeDomainViewTopCostTime', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainViewTopCostTimeRequest $request
     *
     * @return DescribeDomainViewTopCostTimeResponse
     */
    public function describeDomainViewTopCostTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainViewTopCostTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainViewTopUrlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainViewTopUrlResponse
     */
    public function describeDomainViewTopUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainViewTopUrlResponse::fromMap($this->doRPCRequest('DescribeDomainViewTopUrl', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainViewTopUrlRequest $request
     *
     * @return DescribeDomainViewTopUrlResponse
     */
    public function describeDomainViewTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainViewTopUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeElasticBandwidthSpecRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeElasticBandwidthSpecResponse::fromMap($this->doRPCRequest('DescribeElasticBandwidthSpec', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeElasticBandwidthSpecRequest $request
     *
     * @return DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticBandwidthSpecWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHealthCheckListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHealthCheckListResponse
     */
    public function describeHealthCheckListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHealthCheckListResponse::fromMap($this->doRPCRequest('DescribeHealthCheckList', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHealthCheckListRequest $request
     *
     * @return DescribeHealthCheckListResponse
     */
    public function describeHealthCheckList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHealthCheckStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHealthCheckStatusResponse
     */
    public function describeHealthCheckStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHealthCheckStatusResponse::fromMap($this->doRPCRequest('DescribeHealthCheckStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHealthCheckStatusRequest $request
     *
     * @return DescribeHealthCheckStatusResponse
     */
    public function describeHealthCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceDetailsResponse::fromMap($this->doRPCRequest('DescribeInstanceDetails', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceDetailsRequest $request
     *
     * @return DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceIdsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceIdsResponse
     */
    public function describeInstanceIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceIdsResponse::fromMap($this->doRPCRequest('DescribeInstanceIds', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceIdsRequest $request
     *
     * @return DescribeInstanceIdsResponse
     */
    public function describeInstanceIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceIdsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceSpecsResponse::fromMap($this->doRPCRequest('DescribeInstanceSpecs', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceStatisticsResponse::fromMap($this->doRPCRequest('DescribeInstanceStatistics', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceStatisticsRequest $request
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceStatusResponse
     */
    public function describeInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceStatusResponse::fromMap($this->doRPCRequest('DescribeInstanceStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceStatusRequest $request
     *
     * @return DescribeInstanceStatusResponse
     */
    public function describeInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeL7RsPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeL7RsPolicyResponse
     */
    public function describeL7RsPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeL7RsPolicyResponse::fromMap($this->doRPCRequest('DescribeL7RsPolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeL7RsPolicyRequest $request
     *
     * @return DescribeL7RsPolicyResponse
     */
    public function describeL7RsPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeL7RsPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogStoreExistStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLogStoreExistStatusResponse::fromMap($this->doRPCRequest('DescribeLogStoreExistStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLogStoreExistStatusRequest $request
     *
     * @return DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreExistStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkRegionBlockRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeNetworkRegionBlockResponse
     */
    public function describeNetworkRegionBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkRegionBlockResponse::fromMap($this->doRPCRequest('DescribeNetworkRegionBlock', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNetworkRegionBlockRequest $request
     *
     * @return DescribeNetworkRegionBlockResponse
     */
    public function describeNetworkRegionBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkRegionBlockWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkRuleAttributesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeNetworkRuleAttributesResponse
     */
    public function describeNetworkRuleAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkRuleAttributesResponse::fromMap($this->doRPCRequest('DescribeNetworkRuleAttributes', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNetworkRuleAttributesRequest $request
     *
     * @return DescribeNetworkRuleAttributesResponse
     */
    public function describeNetworkRuleAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkRuleAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeNetworkRulesResponse
     */
    public function describeNetworkRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNetworkRulesResponse::fromMap($this->doRPCRequest('DescribeNetworkRules', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNetworkRulesRequest $request
     *
     * @return DescribeNetworkRulesResponse
     */
    public function describeNetworkRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOpEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOpEntitiesResponse::fromMap($this->doRPCRequest('DescribeOpEntities', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribePortAttackMaxFlowRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePortAttackMaxFlowResponse
     */
    public function describePortAttackMaxFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortAttackMaxFlowResponse::fromMap($this->doRPCRequest('DescribePortAttackMaxFlow', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortAttackMaxFlowRequest $request
     *
     * @return DescribePortAttackMaxFlowResponse
     */
    public function describePortAttackMaxFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortAttackMaxFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortAutoCcStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePortAutoCcStatusResponse
     */
    public function describePortAutoCcStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortAutoCcStatusResponse::fromMap($this->doRPCRequest('DescribePortAutoCcStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortAutoCcStatusRequest $request
     *
     * @return DescribePortAutoCcStatusResponse
     */
    public function describePortAutoCcStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortAutoCcStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortConnsCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePortConnsCountResponse
     */
    public function describePortConnsCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortConnsCountResponse::fromMap($this->doRPCRequest('DescribePortConnsCount', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortConnsCountRequest $request
     *
     * @return DescribePortConnsCountResponse
     */
    public function describePortConnsCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortConnsCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortConnsListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePortConnsListResponse
     */
    public function describePortConnsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortConnsListResponse::fromMap($this->doRPCRequest('DescribePortConnsList', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortConnsListRequest $request
     *
     * @return DescribePortConnsListResponse
     */
    public function describePortConnsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortConnsListWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortFlowListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePortFlowListResponse
     */
    public function describePortFlowListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortFlowListResponse::fromMap($this->doRPCRequest('DescribePortFlowList', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortFlowListRequest $request
     *
     * @return DescribePortFlowListResponse
     */
    public function describePortFlowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortFlowListWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortMaxConnsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePortMaxConnsResponse
     */
    public function describePortMaxConnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortMaxConnsResponse::fromMap($this->doRPCRequest('DescribePortMaxConns', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortMaxConnsRequest $request
     *
     * @return DescribePortMaxConnsResponse
     */
    public function describePortMaxConns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortMaxConnsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortViewSourceCountriesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribePortViewSourceCountriesResponse
     */
    public function describePortViewSourceCountriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortViewSourceCountriesResponse::fromMap($this->doRPCRequest('DescribePortViewSourceCountries', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortViewSourceCountriesRequest $request
     *
     * @return DescribePortViewSourceCountriesResponse
     */
    public function describePortViewSourceCountries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortViewSourceCountriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortViewSourceIspsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePortViewSourceIspsResponse
     */
    public function describePortViewSourceIspsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortViewSourceIspsResponse::fromMap($this->doRPCRequest('DescribePortViewSourceIsps', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortViewSourceIspsRequest $request
     *
     * @return DescribePortViewSourceIspsResponse
     */
    public function describePortViewSourceIsps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortViewSourceIspsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortViewSourceProvincesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribePortViewSourceProvincesResponse
     */
    public function describePortViewSourceProvincesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortViewSourceProvincesResponse::fromMap($this->doRPCRequest('DescribePortViewSourceProvinces', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortViewSourceProvincesRequest $request
     *
     * @return DescribePortViewSourceProvincesResponse
     */
    public function describePortViewSourceProvinces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortViewSourceProvincesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneDefenseObjectsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSceneDefenseObjectsResponse
     */
    public function describeSceneDefenseObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSceneDefenseObjectsResponse::fromMap($this->doRPCRequest('DescribeSceneDefenseObjects', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSceneDefenseObjectsRequest $request
     *
     * @return DescribeSceneDefenseObjectsResponse
     */
    public function describeSceneDefenseObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneDefenseObjectsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneDefensePoliciesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSceneDefensePoliciesResponse
     */
    public function describeSceneDefensePoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSceneDefensePoliciesResponse::fromMap($this->doRPCRequest('DescribeSceneDefensePolicies', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSceneDefensePoliciesRequest $request
     *
     * @return DescribeSceneDefensePoliciesResponse
     */
    public function describeSceneDefensePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneDefensePoliciesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSchedulerRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSchedulerRulesResponse
     */
    public function describeSchedulerRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSchedulerRulesResponse::fromMap($this->doRPCRequest('DescribeSchedulerRules', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSchedulerRulesRequest $request
     *
     * @return DescribeSchedulerRulesResponse
     */
    public function describeSchedulerRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSchedulerRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlsAuthStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlsAuthStatusResponse::fromMap($this->doRPCRequest('DescribeSlsAuthStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSlsAuthStatusRequest $request
     *
     * @return DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlsLogstoreInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlsLogstoreInfoResponse::fromMap($this->doRPCRequest('DescribeSlsLogstoreInfo', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSlsLogstoreInfoRequest $request
     *
     * @return DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsLogstoreInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlsOpenStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlsOpenStatusResponse::fromMap($this->doRPCRequest('DescribeSlsOpenStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSlsOpenStatusRequest $request
     *
     * @return DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStsGrantStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeStsGrantStatusResponse
     */
    public function describeStsGrantStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStsGrantStatusResponse::fromMap($this->doRPCRequest('DescribeStsGrantStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStsGrantStatusRequest $request
     *
     * @return DescribeStsGrantStatusResponse
     */
    public function describeStsGrantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStsGrantStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTagKeysResponse
     */
    public function describeTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagKeysResponse::fromMap($this->doRPCRequest('DescribeTagKeys', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTagKeysRequest $request
     *
     * @return DescribeTagKeysResponse
     */
    public function describeTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagResourcesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeTagResourcesResponse
     */
    public function describeTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagResourcesResponse::fromMap($this->doRPCRequest('DescribeTagResources', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTagResourcesRequest $request
     *
     * @return DescribeTagResourcesResponse
     */
    public function describeTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUnBlackholeCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUnBlackholeCountResponse
     */
    public function describeUnBlackholeCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUnBlackholeCountResponse::fromMap($this->doRPCRequest('DescribeUnBlackholeCount', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUnBlackholeCountRequest $request
     *
     * @return DescribeUnBlackholeCountResponse
     */
    public function describeUnBlackholeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUnBlackholeCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUnBlockCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUnBlockCountResponse
     */
    public function describeUnBlockCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUnBlockCountResponse::fromMap($this->doRPCRequest('DescribeUnBlockCount', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUnBlockCountRequest $request
     *
     * @return DescribeUnBlockCountResponse
     */
    public function describeUnBlockCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUnBlockCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebAccessLogDispatchStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeWebAccessLogDispatchStatusResponse
     */
    public function describeWebAccessLogDispatchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebAccessLogDispatchStatusResponse::fromMap($this->doRPCRequest('DescribeWebAccessLogDispatchStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebAccessLogDispatchStatusRequest $request
     *
     * @return DescribeWebAccessLogDispatchStatusResponse
     */
    public function describeWebAccessLogDispatchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAccessLogDispatchStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebAccessLogEmptyCountRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeWebAccessLogEmptyCountResponse
     */
    public function describeWebAccessLogEmptyCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebAccessLogEmptyCountResponse::fromMap($this->doRPCRequest('DescribeWebAccessLogEmptyCount', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebAccessLogEmptyCountRequest $request
     *
     * @return DescribeWebAccessLogEmptyCountResponse
     */
    public function describeWebAccessLogEmptyCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAccessLogEmptyCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebAccessLogStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWebAccessLogStatusResponse
     */
    public function describeWebAccessLogStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebAccessLogStatusResponse::fromMap($this->doRPCRequest('DescribeWebAccessLogStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebAccessLogStatusRequest $request
     *
     * @return DescribeWebAccessLogStatusResponse
     */
    public function describeWebAccessLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAccessLogStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebAccessModeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeWebAccessModeResponse
     */
    public function describeWebAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebAccessModeResponse::fromMap($this->doRPCRequest('DescribeWebAccessMode', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebAccessModeRequest $request
     *
     * @return DescribeWebAccessModeResponse
     */
    public function describeWebAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAccessModeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebAreaBlockConfigsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeWebAreaBlockConfigsResponse
     */
    public function describeWebAreaBlockConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebAreaBlockConfigsResponse::fromMap($this->doRPCRequest('DescribeWebAreaBlockConfigs', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebAreaBlockConfigsRequest $request
     *
     * @return DescribeWebAreaBlockConfigsResponse
     */
    public function describeWebAreaBlockConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAreaBlockConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebCacheConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebCacheConfigsResponse
     */
    public function describeWebCacheConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebCacheConfigsResponse::fromMap($this->doRPCRequest('DescribeWebCacheConfigs', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebCacheConfigsRequest $request
     *
     * @return DescribeWebCacheConfigsResponse
     */
    public function describeWebCacheConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCacheConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebCcProtectSwitchRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWebCcProtectSwitchResponse
     */
    public function describeWebCcProtectSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebCcProtectSwitchResponse::fromMap($this->doRPCRequest('DescribeWebCcProtectSwitch', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebCcProtectSwitchRequest $request
     *
     * @return DescribeWebCcProtectSwitchResponse
     */
    public function describeWebCcProtectSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCcProtectSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebCCRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeWebCCRulesResponse
     */
    public function describeWebCCRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebCCRulesResponse::fromMap($this->doRPCRequest('DescribeWebCCRules', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebCCRulesRequest $request
     *
     * @return DescribeWebCCRulesResponse
     */
    public function describeWebCCRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCCRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebCustomPortsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeWebCustomPortsResponse
     */
    public function describeWebCustomPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebCustomPortsResponse::fromMap($this->doRPCRequest('DescribeWebCustomPorts', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebCustomPortsRequest $request
     *
     * @return DescribeWebCustomPortsResponse
     */
    public function describeWebCustomPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCustomPortsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebInstanceRelationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeWebInstanceRelationsResponse
     */
    public function describeWebInstanceRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebInstanceRelationsResponse::fromMap($this->doRPCRequest('DescribeWebInstanceRelations', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebInstanceRelationsRequest $request
     *
     * @return DescribeWebInstanceRelationsResponse
     */
    public function describeWebInstanceRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebInstanceRelationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebPreciseAccessRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeWebPreciseAccessRuleResponse
     */
    public function describeWebPreciseAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebPreciseAccessRuleResponse::fromMap($this->doRPCRequest('DescribeWebPreciseAccessRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebPreciseAccessRuleRequest $request
     *
     * @return DescribeWebPreciseAccessRuleResponse
     */
    public function describeWebPreciseAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebPreciseAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeWebRulesResponse
     */
    public function describeWebRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebRulesResponse::fromMap($this->doRPCRequest('DescribeWebRules', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWebRulesRequest $request
     *
     * @return DescribeWebRulesResponse
     */
    public function describeWebRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebRulesWithOptions($request, $runtime);
    }

    /**
     * @param DetachSceneDefenseObjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetachSceneDefenseObjectResponse
     */
    public function detachSceneDefenseObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachSceneDefenseObjectResponse::fromMap($this->doRPCRequest('DetachSceneDefenseObject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachSceneDefenseObjectRequest $request
     *
     * @return DetachSceneDefenseObjectResponse
     */
    public function detachSceneDefenseObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachSceneDefenseObjectWithOptions($request, $runtime);
    }

    /**
     * @param DisableSceneDefensePolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableSceneDefensePolicyResponse
     */
    public function disableSceneDefensePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableSceneDefensePolicyResponse::fromMap($this->doRPCRequest('DisableSceneDefensePolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableSceneDefensePolicyRequest $request
     *
     * @return DisableSceneDefensePolicyResponse
     */
    public function disableSceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DisableWebAccessLogConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableWebAccessLogConfigResponse
     */
    public function disableWebAccessLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableWebAccessLogConfigResponse::fromMap($this->doRPCRequest('DisableWebAccessLogConfig', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableWebAccessLogConfigRequest $request
     *
     * @return DisableWebAccessLogConfigResponse
     */
    public function disableWebAccessLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableWebAccessLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DisableWebCCRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DisableWebCCResponse
     */
    public function disableWebCCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableWebCCResponse::fromMap($this->doRPCRequest('DisableWebCC', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableWebCCRequest $request
     *
     * @return DisableWebCCResponse
     */
    public function disableWebCC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableWebCCWithOptions($request, $runtime);
    }

    /**
     * @param DisableWebCCRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DisableWebCCRuleResponse
     */
    public function disableWebCCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableWebCCRuleResponse::fromMap($this->doRPCRequest('DisableWebCCRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableWebCCRuleRequest $request
     *
     * @return DisableWebCCRuleResponse
     */
    public function disableWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @param EmptyAutoCcBlacklistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EmptyAutoCcBlacklistResponse
     */
    public function emptyAutoCcBlacklistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EmptyAutoCcBlacklistResponse::fromMap($this->doRPCRequest('EmptyAutoCcBlacklist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EmptyAutoCcBlacklistRequest $request
     *
     * @return EmptyAutoCcBlacklistResponse
     */
    public function emptyAutoCcBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emptyAutoCcBlacklistWithOptions($request, $runtime);
    }

    /**
     * @param EmptyAutoCcWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EmptyAutoCcWhitelistResponse
     */
    public function emptyAutoCcWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EmptyAutoCcWhitelistResponse::fromMap($this->doRPCRequest('EmptyAutoCcWhitelist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EmptyAutoCcWhitelistRequest $request
     *
     * @return EmptyAutoCcWhitelistResponse
     */
    public function emptyAutoCcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emptyAutoCcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param EmptySlsLogstoreRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EmptySlsLogstoreResponse
     */
    public function emptySlsLogstoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EmptySlsLogstoreResponse::fromMap($this->doRPCRequest('EmptySlsLogstore', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EmptySlsLogstoreRequest $request
     *
     * @return EmptySlsLogstoreResponse
     */
    public function emptySlsLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emptySlsLogstoreWithOptions($request, $runtime);
    }

    /**
     * @param EnableSceneDefensePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableSceneDefensePolicyResponse
     */
    public function enableSceneDefensePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableSceneDefensePolicyResponse::fromMap($this->doRPCRequest('EnableSceneDefensePolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableSceneDefensePolicyRequest $request
     *
     * @return EnableSceneDefensePolicyResponse
     */
    public function enableSceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @param EnableWebAccessLogConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableWebAccessLogConfigResponse
     */
    public function enableWebAccessLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableWebAccessLogConfigResponse::fromMap($this->doRPCRequest('EnableWebAccessLogConfig', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableWebAccessLogConfigRequest $request
     *
     * @return EnableWebAccessLogConfigResponse
     */
    public function enableWebAccessLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWebAccessLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param EnableWebCCRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableWebCCResponse
     */
    public function enableWebCCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableWebCCResponse::fromMap($this->doRPCRequest('EnableWebCC', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableWebCCRequest $request
     *
     * @return EnableWebCCResponse
     */
    public function enableWebCC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWebCCWithOptions($request, $runtime);
    }

    /**
     * @param EnableWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EnableWebCCRuleResponse
     */
    public function enableWebCCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableWebCCRuleResponse::fromMap($this->doRPCRequest('EnableWebCCRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableWebCCRuleRequest $request
     *
     * @return EnableWebCCRuleResponse
     */
    public function enableWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBlackholeStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyBlackholeStatusResponse
     */
    public function modifyBlackholeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBlackholeStatusResponse::fromMap($this->doRPCRequest('ModifyBlackholeStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBlackholeStatusRequest $request
     *
     * @return ModifyBlackholeStatusResponse
     */
    public function modifyBlackholeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBlackholeStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBlockStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyBlockStatusResponse
     */
    public function modifyBlockStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBlockStatusResponse::fromMap($this->doRPCRequest('ModifyBlockStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBlockStatusRequest $request
     *
     * @return ModifyBlockStatusResponse
     */
    public function modifyBlockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBlockStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCnameReuseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCnameReuseResponse
     */
    public function modifyCnameReuseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCnameReuseResponse::fromMap($this->doRPCRequest('ModifyCnameReuse', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCnameReuseRequest $request
     *
     * @return ModifyCnameReuseResponse
     */
    public function modifyCnameReuse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCnameReuseWithOptions($request, $runtime);
    }

    /**
     * @param ModifyElasticBandWidthRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyElasticBandWidthResponse::fromMap($this->doRPCRequest('ModifyElasticBandWidth', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyElasticBandWidthRequest $request
     *
     * @return ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBandWidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFullLogTtlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFullLogTtlResponse::fromMap($this->doRPCRequest('ModifyFullLogTtl', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFullLogTtlRequest $request
     *
     * @return ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFullLogTtlWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHealthCheckConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyHealthCheckConfigResponse
     */
    public function modifyHealthCheckConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHealthCheckConfigResponse::fromMap($this->doRPCRequest('ModifyHealthCheckConfig', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHealthCheckConfigRequest $request
     *
     * @return ModifyHealthCheckConfigResponse
     */
    public function modifyHealthCheckConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHealthCheckConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHttp2EnableRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyHttp2EnableResponse
     */
    public function modifyHttp2EnableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHttp2EnableResponse::fromMap($this->doRPCRequest('ModifyHttp2Enable', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHttp2EnableRequest $request
     *
     * @return ModifyHttp2EnableResponse
     */
    public function modifyHttp2Enable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHttp2EnableWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceRemarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceRemarkResponse::fromMap($this->doRPCRequest('ModifyInstanceRemark', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceRemarkRequest $request
     *
     * @return ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceRemarkWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkRuleAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyNetworkRuleAttributeResponse
     */
    public function modifyNetworkRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNetworkRuleAttributeResponse::fromMap($this->doRPCRequest('ModifyNetworkRuleAttribute', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyNetworkRuleAttributeRequest $request
     *
     * @return ModifyNetworkRuleAttributeResponse
     */
    public function modifyNetworkRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPortAutoCcStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyPortAutoCcStatusResponse
     */
    public function modifyPortAutoCcStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPortAutoCcStatusResponse::fromMap($this->doRPCRequest('ModifyPortAutoCcStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPortAutoCcStatusRequest $request
     *
     * @return ModifyPortAutoCcStatusResponse
     */
    public function modifyPortAutoCcStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPortAutoCcStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifySceneDefensePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySceneDefensePolicyResponse
     */
    public function modifySceneDefensePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySceneDefensePolicyResponse::fromMap($this->doRPCRequest('ModifySceneDefensePolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySceneDefensePolicyRequest $request
     *
     * @return ModifySceneDefensePolicyResponse
     */
    public function modifySceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifySchedulerRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifySchedulerRuleResponse
     */
    public function modifySchedulerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySchedulerRuleResponse::fromMap($this->doRPCRequest('ModifySchedulerRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySchedulerRuleRequest $request
     *
     * @return ModifySchedulerRuleResponse
     */
    public function modifySchedulerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySchedulerRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTlsConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyTlsConfigResponse
     */
    public function modifyTlsConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTlsConfigResponse::fromMap($this->doRPCRequest('ModifyTlsConfig', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyTlsConfigRequest $request
     *
     * @return ModifyTlsConfigResponse
     */
    public function modifyTlsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTlsConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebAccessModeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyWebAccessModeResponse
     */
    public function modifyWebAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebAccessModeResponse::fromMap($this->doRPCRequest('ModifyWebAccessMode', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebAccessModeRequest $request
     *
     * @return ModifyWebAccessModeResponse
     */
    public function modifyWebAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAccessModeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebAIProtectModeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyWebAIProtectModeResponse
     */
    public function modifyWebAIProtectModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebAIProtectModeResponse::fromMap($this->doRPCRequest('ModifyWebAIProtectMode', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebAIProtectModeRequest $request
     *
     * @return ModifyWebAIProtectModeResponse
     */
    public function modifyWebAIProtectMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAIProtectModeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebAIProtectSwitchRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyWebAIProtectSwitchResponse
     */
    public function modifyWebAIProtectSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebAIProtectSwitchResponse::fromMap($this->doRPCRequest('ModifyWebAIProtectSwitch', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebAIProtectSwitchRequest $request
     *
     * @return ModifyWebAIProtectSwitchResponse
     */
    public function modifyWebAIProtectSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAIProtectSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebAreaBlockRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyWebAreaBlockResponse
     */
    public function modifyWebAreaBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebAreaBlockResponse::fromMap($this->doRPCRequest('ModifyWebAreaBlock', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebAreaBlockRequest $request
     *
     * @return ModifyWebAreaBlockResponse
     */
    public function modifyWebAreaBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAreaBlockWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebAreaBlockSwitchRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyWebAreaBlockSwitchResponse
     */
    public function modifyWebAreaBlockSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebAreaBlockSwitchResponse::fromMap($this->doRPCRequest('ModifyWebAreaBlockSwitch', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebAreaBlockSwitchRequest $request
     *
     * @return ModifyWebAreaBlockSwitchResponse
     */
    public function modifyWebAreaBlockSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAreaBlockSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebCacheCustomRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyWebCacheCustomRuleResponse
     */
    public function modifyWebCacheCustomRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebCacheCustomRuleResponse::fromMap($this->doRPCRequest('ModifyWebCacheCustomRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebCacheCustomRuleRequest $request
     *
     * @return ModifyWebCacheCustomRuleResponse
     */
    public function modifyWebCacheCustomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCacheCustomRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebCacheModeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyWebCacheModeResponse
     */
    public function modifyWebCacheModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebCacheModeResponse::fromMap($this->doRPCRequest('ModifyWebCacheMode', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebCacheModeRequest $request
     *
     * @return ModifyWebCacheModeResponse
     */
    public function modifyWebCacheMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCacheModeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebCacheSwitchRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyWebCacheSwitchResponse
     */
    public function modifyWebCacheSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebCacheSwitchResponse::fromMap($this->doRPCRequest('ModifyWebCacheSwitch', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebCacheSwitchRequest $request
     *
     * @return ModifyWebCacheSwitchResponse
     */
    public function modifyWebCacheSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCacheSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyWebCCRuleResponse
     */
    public function modifyWebCCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebCCRuleResponse::fromMap($this->doRPCRequest('ModifyWebCCRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebCCRuleRequest $request
     *
     * @return ModifyWebCCRuleResponse
     */
    public function modifyWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebIpSetSwitchRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyWebIpSetSwitchResponse
     */
    public function modifyWebIpSetSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebIpSetSwitchResponse::fromMap($this->doRPCRequest('ModifyWebIpSetSwitch', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebIpSetSwitchRequest $request
     *
     * @return ModifyWebIpSetSwitchResponse
     */
    public function modifyWebIpSetSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebIpSetSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebPreciseAccessRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyWebPreciseAccessRuleResponse
     */
    public function modifyWebPreciseAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebPreciseAccessRuleResponse::fromMap($this->doRPCRequest('ModifyWebPreciseAccessRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebPreciseAccessRuleRequest $request
     *
     * @return ModifyWebPreciseAccessRuleResponse
     */
    public function modifyWebPreciseAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebPreciseAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebPreciseAccessSwitchRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyWebPreciseAccessSwitchResponse
     */
    public function modifyWebPreciseAccessSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebPreciseAccessSwitchResponse::fromMap($this->doRPCRequest('ModifyWebPreciseAccessSwitch', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebPreciseAccessSwitchRequest $request
     *
     * @return ModifyWebPreciseAccessSwitchResponse
     */
    public function modifyWebPreciseAccessSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebPreciseAccessSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyWebRuleResponse
     */
    public function modifyWebRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebRuleResponse::fromMap($this->doRPCRequest('ModifyWebRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWebRuleRequest $request
     *
     * @return ModifyWebRuleResponse
     */
    public function modifyWebRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebRuleWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseInstanceResponse::fromMap($this->doRPCRequest('ReleaseInstance', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SwitchSchedulerRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SwitchSchedulerRuleResponse
     */
    public function switchSchedulerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchSchedulerRuleResponse::fromMap($this->doRPCRequest('SwitchSchedulerRule', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SwitchSchedulerRuleRequest $request
     *
     * @return SwitchSchedulerRuleResponse
     */
    public function switchSchedulerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSchedulerRuleWithOptions($request, $runtime);
    }
}
