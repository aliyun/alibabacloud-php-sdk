<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigLayer4RemarkRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigLayer4RemarkResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigLayer4RuleBakModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigLayer4RuleBakModeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigLayer4RulePolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigLayer4RulePolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigNetworkRegionBlockRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigNetworkRegionBlockResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigNetworkRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigNetworkRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigUdpReflectRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigUdpReflectResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebCCTemplateRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebCCTemplateResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebIpSetRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebIpSetResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateAsyncTaskRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateAsyncTaskResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateDomainResourceRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateDomainResourceResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateNetworkRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateNetworkRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreatePortRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreatePortResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteDomainResourceRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteDomainResourceResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteNetworkRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteNetworkRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeletePortRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeletePortResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAttackAnalysisMaxQpsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAttackAnalysisMaxQpsResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSystemLogRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSystemLogResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagKeysRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagKeysResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagResourcesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagResourcesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeUdpReflectRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeUdpReflectResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyDomainResourceRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyDomainResourceResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyPortRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyPortResponse;
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
use Darabonba\OpenApi\Models\Params;
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
        $query = [];
        if (!Utils::isUnset($request->blacklist)) {
            $query['Blacklist'] = $request->blacklist;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAutoCcBlacklist',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAutoCcBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->whitelist)) {
            $query['Whitelist'] = $request->whitelist;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAutoCcWhitelist',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAutoCcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cert)) {
            $query['Cert'] = $request->cert;
        }
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateWebCert',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateWebCertResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->objects)) {
            $query['Objects'] = $request->objects;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachSceneDefenseObject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachSceneDefenseObjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigL7RsPolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigL7RsPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ConfigLayer4RemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigLayer4RemarkResponse
     */
    public function configLayer4RemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer4Remark',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigLayer4RemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer4RemarkRequest $request
     *
     * @return ConfigLayer4RemarkResponse
     */
    public function configLayer4Remark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RemarkWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer4RuleBakModeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigLayer4RuleBakModeResponse
     */
    public function configLayer4RuleBakModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bakMode)) {
            $query['BakMode'] = $request->bakMode;
        }
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer4RuleBakMode',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigLayer4RuleBakModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer4RuleBakModeRequest $request
     *
     * @return ConfigLayer4RuleBakModeResponse
     */
    public function configLayer4RuleBakMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RuleBakModeWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer4RulePolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigLayer4RulePolicyResponse
     */
    public function configLayer4RulePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer4RulePolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigLayer4RulePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer4RulePolicyRequest $request
     *
     * @return ConfigLayer4RulePolicyResponse
     */
    public function configLayer4RulePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RulePolicyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigNetworkRegionBlock',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigNetworkRegionBlockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->networkRules)) {
            $query['NetworkRules'] = $request->networkRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigNetworkRules',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigNetworkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ConfigUdpReflectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigUdpReflectResponse
     */
    public function configUdpReflectWithOptions($request, $runtime)
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
            'action'      => 'ConfigUdpReflect',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigUdpReflectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigUdpReflectRequest $request
     *
     * @return ConfigUdpReflectResponse
     */
    public function configUdpReflect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configUdpReflectWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigWebCCTemplate',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigWebCCTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->blackList)) {
            $query['BlackList'] = $request->blackList;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->whiteList)) {
            $query['WhiteList'] = $request->whiteList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigWebIpSet',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigWebIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->taskParams)) {
            $query['TaskParams'] = $request->taskParams;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAsyncTask',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateDomainResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDomainResourceResponse
     */
    public function createDomainResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->httpsExt)) {
            $query['HttpsExt'] = $request->httpsExt;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->proxyTypes)) {
            $query['ProxyTypes'] = $request->proxyTypes;
        }
        if (!Utils::isUnset($request->realServers)) {
            $query['RealServers'] = $request->realServers;
        }
        if (!Utils::isUnset($request->rsType)) {
            $query['RsType'] = $request->rsType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomainResource',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDomainResourceRequest $request
     *
     * @return CreateDomainResourceResponse
     */
    public function createDomainResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainResourceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->networkRules)) {
            $query['NetworkRules'] = $request->networkRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkRules',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreatePortRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreatePortResponse
     */
    public function createPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendPort)) {
            $query['BackendPort'] = $request->backendPort;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->frontendProtocol)) {
            $query['FrontendProtocol'] = $request->frontendProtocol;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->realServers)) {
            $query['RealServers'] = $request->realServers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePort',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePortRequest $request
     *
     * @return CreatePortResponse
     */
    public function createPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPortWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSceneDefensePolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSchedulerRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSchedulerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTagResources',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->act)) {
            $query['Act'] = $request->act;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->uri)) {
            $query['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWebCCRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->defenseId)) {
            $query['DefenseId'] = $request->defenseId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->httpsExt)) {
            $query['HttpsExt'] = $request->httpsExt;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->rsType)) {
            $query['RsType'] = $request->rsType;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWebRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWebRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAsyncTask',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->blacklist)) {
            $query['Blacklist'] = $request->blacklist;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAutoCcBlacklist',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAutoCcBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->whitelist)) {
            $query['Whitelist'] = $request->whitelist;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAutoCcWhitelist',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAutoCcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteDomainResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDomainResourceResponse
     */
    public function deleteDomainResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainResource',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDomainResourceRequest $request
     *
     * @return DeleteDomainResourceResponse
     */
    public function deleteDomainResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainResourceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->networkRule)) {
            $query['NetworkRule'] = $request->networkRule;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeletePortRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeletePortResponse
     */
    public function deletePortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendPort)) {
            $query['BackendPort'] = $request->backendPort;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->frontendProtocol)) {
            $query['FrontendProtocol'] = $request->frontendProtocol;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->realServers)) {
            $query['RealServers'] = $request->realServers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePort',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePortRequest $request
     *
     * @return DeletePortResponse
     */
    public function deletePort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePortWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSceneDefensePolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSchedulerRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSchedulerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
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
            'action'      => 'DeleteTagResources',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWebCCRuleResponse
     */
    public function deleteWebCCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWebCCRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteWebCacheCustomRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteWebCacheCustomRuleResponse
     */
    public function deleteWebCacheCustomRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleNames)) {
            $query['RuleNames'] = $request->ruleNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWebCacheCustomRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWebCacheCustomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteWebPreciseAccessRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteWebPreciseAccessRuleResponse
     */
    public function deleteWebPreciseAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleNames)) {
            $query['RuleNames'] = $request->ruleNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWebPreciseAccessRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWebPreciseAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWebRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWebRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'DescribeAsyncTasks',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAsyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeAttackAnalysisMaxQpsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAttackAnalysisMaxQpsResponse
     */
    public function describeAttackAnalysisMaxQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAttackAnalysisMaxQps',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAttackAnalysisMaxQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAttackAnalysisMaxQpsRequest $request
     *
     * @return DescribeAttackAnalysisMaxQpsResponse
     */
    public function describeAttackAnalysisMaxQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackAnalysisMaxQpsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoCcBlacklist',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoCcBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoCcListCount',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoCcListCountResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoCcWhitelist',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoCcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackSourceCidr',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackSourceCidrResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlackholeStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlackholeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCerts',
            'version'     => '2020-01-01',
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
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCnameReuses',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCnameReusesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeDDoSEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDDoSEventsResponse
     */
    public function describeDDoSEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'DescribeDDoSEvents',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDDoSEventsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeDDosAllEventListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDDosAllEventListResponse
     */
    public function describeDDosAllEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDDosAllEventList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDDosAllEventListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDDosEventArea',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDDosEventAreaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDDosEventAttackType',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDDosEventAttackTypeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDDosEventIsp',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDDosEventIspResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDDosEventMax',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDDosEventMaxResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeDDosEventSrcIpRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDDosEventSrcIpResponse
     */
    public function describeDDosEventSrcIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->range)) {
            $query['Range'] = $request->range;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDDosEventSrcIp',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDDosEventSrcIpResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseCountStatistics',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseCountStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeDefenseRecords',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'DescribeDomainAttackEvents',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainAttackEventsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeDomainOverview',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
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
            'action'      => 'DescribeDomainQPSList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainQPSListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeDomainQpsWithCache',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainQpsWithCacheResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeDomainResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDomainResourceResponse
     */
    public function describeDomainResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryDomainPattern)) {
            $query['QueryDomainPattern'] = $request->queryDomainPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainResource',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainResourceRequest $request
     *
     * @return DescribeDomainResourceResponse
     */
    public function describeDomainResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainResourceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeDomainStatusCodeCount',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainStatusCodeCountResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
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
            'action'      => 'DescribeDomainStatusCodeList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainStatusCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeDomainTopAttackList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainTopAttackListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeDomainViewSourceCountries',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainViewSourceCountriesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeDomainViewSourceProvinces',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainViewSourceProvincesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->top)) {
            $query['Top'] = $request->top;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainViewTopCostTime',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainViewTopCostTimeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->top)) {
            $query['Top'] = $request->top;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainViewTopUrl',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainViewTopUrlResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomains',
            'version'     => '2020-01-01',
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
     * @param DescribeElasticBandwidthSpecRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpecWithOptions($request, $runtime)
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
            'action'      => 'DescribeElasticBandwidthSpec',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticBandwidthSpecResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->networkRules)) {
            $query['NetworkRules'] = $request->networkRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHealthCheckList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHealthCheckListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->networkRules)) {
            $query['NetworkRules'] = $request->networkRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHealthCheckStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHealthCheckStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceDetails',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->edition)) {
            $query['Edition'] = $request->edition;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceIds',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceIdsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeInstanceSpecsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSpecs',
            'version'     => '2020-01-01',
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
     * @param DescribeInstanceStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceStatistics',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->edition)) {
            $query['Edition'] = $request->edition;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->expireEndTime)) {
            $query['ExpireEndTime'] = $request->expireEndTime;
        }
        if (!Utils::isUnset($request->expireStartTime)) {
            $query['ExpireStartTime'] = $request->expireStartTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeL7RsPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeL7RsPolicyResponse
     */
    public function describeL7RsPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->realServers)) {
            $query['RealServers'] = $request->realServers;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeL7RsPolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeL7RsPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeLayer4RulePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLayer4RulePolicyResponse
     */
    public function describeLayer4RulePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLayer4RulePolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLayer4RulePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLayer4RulePolicyRequest $request
     *
     * @return DescribeLayer4RulePolicyResponse
     */
    public function describeLayer4RulePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer4RulePolicyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogStoreExistStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogStoreExistStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkRegionBlock',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkRegionBlockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->networkRules)) {
            $query['NetworkRules'] = $request->networkRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkRuleAttributes',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkRuleAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->forwardProtocol)) {
            $query['ForwardProtocol'] = $request->forwardProtocol;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkRules',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->entityObject)) {
            $query['EntityObject'] = $request->entityObject;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'version'     => '2020-01-01',
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
     * @param DescribePortRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribePortResponse
     */
    public function describePortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->frontendProtocol)) {
            $query['FrontendProtocol'] = $request->frontendProtocol;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePort',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePortRequest $request
     *
     * @return DescribePortResponse
     */
    public function describePort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
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
            'action'      => 'DescribePortAttackMaxFlow',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortAttackMaxFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePortAutoCcStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortAutoCcStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
            'action'      => 'DescribePortConnsCount',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortConnsCountResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
            'action'      => 'DescribePortConnsList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortConnsListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
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
            'action'      => 'DescribePortFlowList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortFlowListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
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
            'action'      => 'DescribePortMaxConns',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortMaxConnsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
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
            'action'      => 'DescribePortViewSourceCountries',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortViewSourceCountriesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
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
            'action'      => 'DescribePortViewSourceIsps',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortViewSourceIspsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
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
            'action'      => 'DescribePortViewSourceProvinces',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortViewSourceProvincesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneDefenseObjects',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneDefenseObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneDefensePolicies',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneDefensePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSchedulerRules',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSchedulerRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsAuthStatus',
            'version'     => '2020-01-01',
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsLogstoreInfo',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlsLogstoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsOpenStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlsOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStsGrantStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStsGrantStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeSystemLogRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSystemLogResponse
     */
    public function describeSystemLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->entityObject)) {
            $query['EntityObject'] = $request->entityObject;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSystemLog',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSystemLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSystemLogRequest $request
     *
     * @return DescribeSystemLogResponse
     */
    public function describeSystemLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemLogWithOptions($request, $runtime);
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
        $query = [];
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
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagKeys',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagResources',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeUdpReflectRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUdpReflectResponse
     */
    public function describeUdpReflectWithOptions($request, $runtime)
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
            'action'      => 'DescribeUdpReflect',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUdpReflectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUdpReflectRequest $request
     *
     * @return DescribeUdpReflectResponse
     */
    public function describeUdpReflect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUdpReflectWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUnBlackholeCount',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUnBlackholeCountResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUnBlockCount',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUnBlockCountResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'DescribeWebAccessLogDispatchStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebAccessLogDispatchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebAccessLogEmptyCount',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebAccessLogEmptyCountResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebAccessLogStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebAccessLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebAccessMode',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebAreaBlockConfigs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebAreaBlockConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeWebCCRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeWebCCRulesResponse
     */
    public function describeWebCCRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
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
            'action'      => 'DescribeWebCCRules',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebCCRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeWebCacheConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebCacheConfigsResponse
     */
    public function describeWebCacheConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebCacheConfigs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebCacheConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebCcProtectSwitch',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebCcProtectSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeWebCustomPortsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeWebCustomPortsResponse
     */
    public function describeWebCustomPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebCustomPorts',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebCustomPortsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebInstanceRelations',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebInstanceRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebPreciseAccessRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebPreciseAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cname)) {
            $query['Cname'] = $request->cname;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryDomainPattern)) {
            $query['QueryDomainPattern'] = $request->queryDomainPattern;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebRules',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->objects)) {
            $query['Objects'] = $request->objects;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachSceneDefenseObject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachSceneDefenseObjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableSceneDefensePolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableSceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableWebAccessLogConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableWebAccessLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableWebCC',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableWebCCResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableWebCCRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EmptyAutoCcBlacklist',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EmptyAutoCcBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EmptyAutoCcWhitelist',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EmptyAutoCcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EmptySlsLogstore',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EmptySlsLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableSceneDefensePolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableWebAccessLogConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableWebAccessLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableWebCC',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableWebCCResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableWebCCRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->blackholeStatus)) {
            $query['BlackholeStatus'] = $request->blackholeStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBlackholeStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBlackholeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lines)) {
            $query['Lines'] = $request->lines;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBlockStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBlockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cname)) {
            $query['Cname'] = $request->cname;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCnameReuse',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCnameReuseResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyDomainResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDomainResourceResponse
     */
    public function modifyDomainResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->httpsExt)) {
            $query['HttpsExt'] = $request->httpsExt;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->proxyTypes)) {
            $query['ProxyTypes'] = $request->proxyTypes;
        }
        if (!Utils::isUnset($request->realServers)) {
            $query['RealServers'] = $request->realServers;
        }
        if (!Utils::isUnset($request->rsType)) {
            $query['RsType'] = $request->rsType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDomainResource',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDomainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDomainResourceRequest $request
     *
     * @return ModifyDomainResourceResponse
     */
    public function modifyDomainResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainResourceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->elasticBandwidth)) {
            $query['ElasticBandwidth'] = $request->elasticBandwidth;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyElasticBandWidth',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyElasticBandWidthResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFullLogTtl',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFullLogTtlResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->forwardProtocol)) {
            $query['ForwardProtocol'] = $request->forwardProtocol;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHealthCheckConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHealthCheckConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHttp2Enable',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHttp2EnableResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceRemark',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->forwardProtocol)) {
            $query['ForwardProtocol'] = $request->forwardProtocol;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNetworkRuleAttribute',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNetworkRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyPortRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyPortResponse
     */
    public function modifyPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendPort)) {
            $query['BackendPort'] = $request->backendPort;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->frontendProtocol)) {
            $query['FrontendProtocol'] = $request->frontendProtocol;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->realServers)) {
            $query['RealServers'] = $request->realServers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPort',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPortRequest $request
     *
     * @return ModifyPortResponse
     */
    public function modifyPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPortWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->switch_)) {
            $query['Switch'] = $request->switch_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPortAutoCcStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPortAutoCcStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySceneDefensePolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySchedulerRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySchedulerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTlsConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTlsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyWebAIProtectModeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyWebAIProtectModeResponse
     */
    public function modifyWebAIProtectModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebAIProtectMode',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebAIProtectModeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebAIProtectSwitch',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebAIProtectSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyWebAccessModeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyWebAccessModeResponse
     */
    public function modifyWebAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessMode)) {
            $query['AccessMode'] = $request->accessMode;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebAccessMode',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyWebAreaBlockRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyWebAreaBlockResponse
     */
    public function modifyWebAreaBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebAreaBlock',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebAreaBlockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebAreaBlockSwitch',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebAreaBlockSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyWebCCRuleResponse
     */
    public function modifyWebCCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->act)) {
            $query['Act'] = $request->act;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->uri)) {
            $query['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebCCRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyWebCacheCustomRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyWebCacheCustomRuleResponse
     */
    public function modifyWebCacheCustomRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebCacheCustomRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebCacheCustomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebCacheMode',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebCacheModeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebCacheSwitch',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebCacheSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyWebIpSetSwitchRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyWebIpSetSwitchResponse
     */
    public function modifyWebIpSetSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebIpSetSwitch',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebIpSetSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->expires)) {
            $query['Expires'] = $request->expires;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebPreciseAccessRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebPreciseAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebPreciseAccessSwitch',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebPreciseAccessSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->httpsExt)) {
            $query['HttpsExt'] = $request->httpsExt;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->proxyTypes)) {
            $query['ProxyTypes'] = $request->proxyTypes;
        }
        if (!Utils::isUnset($request->realServers)) {
            $query['RealServers'] = $request->realServers;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->rsType)) {
            $query['RsType'] = $request->rsType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstance',
            'version'     => '2020-01-01',
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
        $query = [];
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->switchData)) {
            $query['SwitchData'] = $request->switchData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchSchedulerRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchSchedulerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
