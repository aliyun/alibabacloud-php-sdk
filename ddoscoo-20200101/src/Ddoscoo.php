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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigLayer4RealLimitRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigLayer4RealLimitResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainSecurityProfileRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainSecurityProfileResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsRecordRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsRecordResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHeadersRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHeadersResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceExtRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceExtResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortCcAttackTopIPRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortCcAttackTopIPResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlaEventListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlaEventListResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTotalAttackMaxFlowRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTotalAttackMaxFlowResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebReportTopIpRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebReportTopIpResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyBizBandWidthModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyBizBandWidthModeResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyElasticBizBandWidthRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyElasticBizBandWidthResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyElasticBizQpsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyElasticBizQpsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyFullLogTtlRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyFullLogTtlResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHeadersRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHeadersResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHealthCheckConfigRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHealthCheckConfigResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHttp2EnableRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyHttp2EnableResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyInstanceRemarkRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyInstanceRemarkResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyNetworkRuleAttributeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyNetworkRuleAttributeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyOcspStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyOcspStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyPortAutoCcStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyPortAutoCcStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyPortRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyPortResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyQpsModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyQpsModeResponse;
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
     * @param AddAutoCcBlacklistRequest $request AddAutoCcBlacklistRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAutoCcBlacklistResponse AddAutoCcBlacklistResponse
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
     * @param AddAutoCcBlacklistRequest $request AddAutoCcBlacklistRequest
     *
     * @return AddAutoCcBlacklistResponse AddAutoCcBlacklistResponse
     */
    public function addAutoCcBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAutoCcBlacklistWithOptions($request, $runtime);
    }

    /**
     * @summary Adds IP addresses to the IP address whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @description You can call the AddAutoCcWhitelist operation to add IP addresses to the whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance. This way, the Anti-DDoS Pro or Anti-DDoS Premium instance allows traffic from the IP addresses.
     * By default, the traffic from the IP addresses that you add to the whitelist is always allowed. If you no longer use the whitelist, you can call the [EmptyAutoCcWhitelist](https://help.aliyun.com/document_detail/157505.html) operation to remove the IP addresses from the whitelist.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddAutoCcWhitelistRequest $request AddAutoCcWhitelistRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAutoCcWhitelistResponse AddAutoCcWhitelistResponse
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
     * @summary Adds IP addresses to the IP address whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @description You can call the AddAutoCcWhitelist operation to add IP addresses to the whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance. This way, the Anti-DDoS Pro or Anti-DDoS Premium instance allows traffic from the IP addresses.
     * By default, the traffic from the IP addresses that you add to the whitelist is always allowed. If you no longer use the whitelist, you can call the [EmptyAutoCcWhitelist](https://help.aliyun.com/document_detail/157505.html) operation to remove the IP addresses from the whitelist.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddAutoCcWhitelistRequest $request AddAutoCcWhitelistRequest
     *
     * @return AddAutoCcWhitelistResponse AddAutoCcWhitelistResponse
     */
    public function addAutoCcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAutoCcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Associates an SSL certificate with the forwarding rule of a website.
     *  *
     * @param AssociateWebCertRequest $request AssociateWebCertRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateWebCertResponse AssociateWebCertResponse
     */
    public function associateWebCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $body = [];
        if (!Utils::isUnset($request->cert)) {
            $body['Cert'] = $request->cert;
        }
        if (!Utils::isUnset($request->certId)) {
            $body['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $body['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->certName)) {
            $body['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certRegion)) {
            $body['CertRegion'] = $request->certRegion;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @summary Associates an SSL certificate with the forwarding rule of a website.
     *  *
     * @param AssociateWebCertRequest $request AssociateWebCertRequest
     *
     * @return AssociateWebCertResponse AssociateWebCertResponse
     */
    public function associateWebCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateWebCertWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an object to a scenario-specific custom policy for protection.
     *  *
     * @param AttachSceneDefenseObjectRequest $request AttachSceneDefenseObjectRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachSceneDefenseObjectResponse AttachSceneDefenseObjectResponse
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
     * @summary Adds an object to a scenario-specific custom policy for protection.
     *  *
     * @param AttachSceneDefenseObjectRequest $request AttachSceneDefenseObjectRequest
     *
     * @return AttachSceneDefenseObjectResponse AttachSceneDefenseObjectResponse
     */
    public function attachSceneDefenseObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachSceneDefenseObjectWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a back-to-origin policy for the forwarding rule of a website.
     *  *
     * @description If multiple origin servers are configured for a website that is added to Anti-DDoS Pro or Anti-DDoS Premium, you can modify the load balancing algorithms for back-to-origin traffic based on back-to-origin policies. The IP hash algorithm is used by default. You can change the algorithm to the round-robin or least response time algorithm. For more information, see the description of the **Policy** parameter in the "Request parameters" section of this topic.
     *  *
     * @param ConfigL7RsPolicyRequest $request ConfigL7RsPolicyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigL7RsPolicyResponse ConfigL7RsPolicyResponse
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
        if (!Utils::isUnset($request->upstreamRetry)) {
            $query['UpstreamRetry'] = $request->upstreamRetry;
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
     * @summary Configures a back-to-origin policy for the forwarding rule of a website.
     *  *
     * @description If multiple origin servers are configured for a website that is added to Anti-DDoS Pro or Anti-DDoS Premium, you can modify the load balancing algorithms for back-to-origin traffic based on back-to-origin policies. The IP hash algorithm is used by default. You can change the algorithm to the round-robin or least response time algorithm. For more information, see the description of the **Policy** parameter in the "Request parameters" section of this topic.
     *  *
     * @param ConfigL7RsPolicyRequest $request ConfigL7RsPolicyRequest
     *
     * @return ConfigL7RsPolicyResponse ConfigL7RsPolicyResponse
     */
    public function configL7RsPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configL7RsPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies a threshold for the clean bandwidth of an Anti-DDoS Pro or Anti-DDoS premium instance. If the threshold is reached, rate limiting is triggered.
     *  *
     * @param ConfigLayer4RealLimitRequest $request ConfigLayer4RealLimitRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer4RealLimitResponse ConfigLayer4RealLimitResponse
     */
    public function configLayer4RealLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->limitValue)) {
            $query['LimitValue'] = $request->limitValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer4RealLimit',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigLayer4RealLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies a threshold for the clean bandwidth of an Anti-DDoS Pro or Anti-DDoS premium instance. If the threshold is reached, rate limiting is triggered.
     *  *
     * @param ConfigLayer4RealLimitRequest $request ConfigLayer4RealLimitRequest
     *
     * @return ConfigLayer4RealLimitResponse ConfigLayer4RealLimitResponse
     */
    public function configLayer4RealLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RealLimitWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a description to a port forwarding rule.
     *  *
     * @param ConfigLayer4RemarkRequest $request ConfigLayer4RemarkRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer4RemarkResponse ConfigLayer4RemarkResponse
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
     * @summary Adds a description to a port forwarding rule.
     *  *
     * @param ConfigLayer4RemarkRequest $request ConfigLayer4RemarkRequest
     *
     * @return ConfigLayer4RemarkResponse ConfigLayer4RemarkResponse
     */
    public function configLayer4Remark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RemarkWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the origin redundancy mode for a port forwarding rule.
     *  *
     * @param ConfigLayer4RuleBakModeRequest $request ConfigLayer4RuleBakModeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer4RuleBakModeResponse ConfigLayer4RuleBakModeResponse
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
     * @summary Enables or disables the origin redundancy mode for a port forwarding rule.
     *  *
     * @param ConfigLayer4RuleBakModeRequest $request ConfigLayer4RuleBakModeRequest
     *
     * @return ConfigLayer4RuleBakModeResponse ConfigLayer4RuleBakModeResponse
     */
    public function configLayer4RuleBakMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RuleBakModeWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the IP addresses of the primary and secondary origin servers for a port forwarding rule.
     *  *
     * @param ConfigLayer4RulePolicyRequest $request ConfigLayer4RulePolicyRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer4RulePolicyResponse ConfigLayer4RulePolicyResponse
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
     * @summary Configures the IP addresses of the primary and secondary origin servers for a port forwarding rule.
     *  *
     * @param ConfigLayer4RulePolicyRequest $request ConfigLayer4RulePolicyRequest
     *
     * @return ConfigLayer4RulePolicyResponse ConfigLayer4RulePolicyResponse
     */
    public function configLayer4RulePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RulePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Configures blocked locations for an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param ConfigNetworkRegionBlockRequest $request ConfigNetworkRegionBlockRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigNetworkRegionBlockResponse ConfigNetworkRegionBlockResponse
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
     * @summary Configures blocked locations for an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param ConfigNetworkRegionBlockRequest $request ConfigNetworkRegionBlockRequest
     *
     * @return ConfigNetworkRegionBlockResponse ConfigNetworkRegionBlockResponse
     */
    public function configNetworkRegionBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configNetworkRegionBlockWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the IP addresses of the origin server that is configured in a port forwarding rule.
     *  *
     * @param ConfigNetworkRulesRequest $request ConfigNetworkRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigNetworkRulesResponse ConfigNetworkRulesResponse
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
     * @summary Modifies the IP addresses of the origin server that is configured in a port forwarding rule.
     *  *
     * @param ConfigNetworkRulesRequest $request ConfigNetworkRulesRequest
     *
     * @return ConfigNetworkRulesResponse ConfigNetworkRulesResponse
     */
    public function configNetworkRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configNetworkRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Adds the filtering policies for UDP reflection attacks on an Anti-DDoS Pro or Anti-DDoS Premium instance to filter out the source ports of UDP traffic.
     *  *
     * @description You can call this operation to configure filtering policies to filter out UDP traffic from specific ports. This helps defend against UDP reflection attacks.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ConfigUdpReflectRequest $request ConfigUdpReflectRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigUdpReflectResponse ConfigUdpReflectResponse
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
     * @summary Adds the filtering policies for UDP reflection attacks on an Anti-DDoS Pro or Anti-DDoS Premium instance to filter out the source ports of UDP traffic.
     *  *
     * @description You can call this operation to configure filtering policies to filter out UDP traffic from specific ports. This helps defend against UDP reflection attacks.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ConfigUdpReflectRequest $request ConfigUdpReflectRequest
     *
     * @return ConfigUdpReflectResponse ConfigUdpReflectResponse
     */
    public function configUdpReflect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configUdpReflectWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the mode of the Frequency Control policy for a website.
     *  *
     * @param ConfigWebCCTemplateRequest $request ConfigWebCCTemplateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigWebCCTemplateResponse ConfigWebCCTemplateResponse
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
     * @summary Configures the mode of the Frequency Control policy for a website.
     *  *
     * @param ConfigWebCCTemplateRequest $request ConfigWebCCTemplateRequest
     *
     * @return ConfigWebCCTemplateResponse ConfigWebCCTemplateResponse
     */
    public function configWebCCTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configWebCCTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the IP address whitelist and blacklist for a website.
     *  *
     * @param ConfigWebIpSetRequest $request ConfigWebIpSetRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigWebIpSetResponse ConfigWebIpSetResponse
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
     * @summary Configures the IP address whitelist and blacklist for a website.
     *  *
     * @param ConfigWebIpSetRequest $request ConfigWebIpSetRequest
     *
     * @return ConfigWebIpSetResponse ConfigWebIpSetResponse
     */
    public function configWebIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configWebIpSetWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an asynchronous export task to export forwarding rules for websites, port forwarding rules, session persistence and health check settings, DDoS mitigation policies, the IP address blacklist, or the IP address whitelist.
     *  *
     * @param CreateAsyncTaskRequest $request CreateAsyncTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAsyncTaskResponse CreateAsyncTaskResponse
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
     * @summary Creates an asynchronous export task to export forwarding rules for websites, port forwarding rules, session persistence and health check settings, DDoS mitigation policies, the IP address blacklist, or the IP address whitelist.
     *  *
     * @param CreateAsyncTaskRequest $request CreateAsyncTaskRequest
     *
     * @return CreateAsyncTaskResponse CreateAsyncTaskResponse
     */
    public function createAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a forwarding rule for a website.
     *  *
     * @param CreateDomainResourceRequest $request CreateDomainResourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResourceResponse CreateDomainResourceResponse
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
     * @summary Creates a forwarding rule for a website.
     *  *
     * @param CreateDomainResourceRequest $request CreateDomainResourceRequest
     *
     * @return CreateDomainResourceResponse CreateDomainResourceResponse
     */
    public function createDomainResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a port forwarding rule.
     *  *
     * @param CreateNetworkRulesRequest $request CreateNetworkRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkRulesResponse CreateNetworkRulesResponse
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
     * @summary Creates a port forwarding rule.
     *  *
     * @param CreateNetworkRulesRequest $request CreateNetworkRulesRequest
     *
     * @return CreateNetworkRulesResponse CreateNetworkRulesResponse
     */
    public function createNetworkRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a port forwarding rule.
     *  *
     * @description You can call this operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     *  *
     * @param CreatePortRequest $request CreatePortRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePortResponse CreatePortResponse
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
     * @summary Creates a port forwarding rule.
     *  *
     * @description You can call this operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     *  *
     * @param CreatePortRequest $request CreatePortRequest
     *
     * @return CreatePortResponse CreatePortResponse
     */
    public function createPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPortWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a scenario-specific custom policy.
     *  *
     * @param CreateSceneDefensePolicyRequest $request CreateSceneDefensePolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSceneDefensePolicyResponse CreateSceneDefensePolicyResponse
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
     * @summary Creates a scenario-specific custom policy.
     *  *
     * @param CreateSceneDefensePolicyRequest $request CreateSceneDefensePolicyRequest
     *
     * @return CreateSceneDefensePolicyResponse CreateSceneDefensePolicyResponse
     */
    public function createSceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a scheduling rule for Sec-Traffic Manager.
     *  *
     * @param CreateSchedulerRuleRequest $request CreateSchedulerRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSchedulerRuleResponse CreateSchedulerRuleResponse
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
     * @summary Creates a scheduling rule for Sec-Traffic Manager.
     *  *
     * @param CreateSchedulerRuleRequest $request CreateSchedulerRuleRequest
     *
     * @return CreateSchedulerRuleResponse CreateSchedulerRuleResponse
     */
    public function createSchedulerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchedulerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to multiple Anti-DDoS Pro instances at a time.
     *  *
     * @description You can call the CreateTagResources operation to add a tag to multiple Anti-DDoS Pro instances at a time.
     * > Anti-DDoS Premium does not support the tag feature.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateTagResourcesRequest $request CreateTagResourcesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTagResourcesResponse CreateTagResourcesResponse
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
     * @summary Adds tags to multiple Anti-DDoS Pro instances at a time.
     *  *
     * @description You can call the CreateTagResources operation to add a tag to multiple Anti-DDoS Pro instances at a time.
     * > Anti-DDoS Premium does not support the tag feature.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateTagResourcesRequest $request CreateTagResourcesRequest
     *
     * @return CreateTagResourcesResponse CreateTagResourcesResponse
     */
    public function createTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param CreateWebCCRuleRequest $request CreateWebCCRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWebCCRuleResponse CreateWebCCRuleResponse
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
     * @param CreateWebCCRuleRequest $request CreateWebCCRuleRequest
     *
     * @return CreateWebCCRuleResponse CreateWebCCRuleResponse
     */
    public function createWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a forwarding rule for a website.
     *  *
     * @param CreateWebRuleRequest $request CreateWebRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWebRuleResponse CreateWebRuleResponse
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
     * @summary Creates a forwarding rule for a website.
     *  *
     * @param CreateWebRuleRequest $request CreateWebRuleRequest
     *
     * @return CreateWebRuleResponse CreateWebRuleResponse
     */
    public function createWebRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an asynchronous export task.
     *  *
     * @param DeleteAsyncTaskRequest $request DeleteAsyncTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAsyncTaskResponse DeleteAsyncTaskResponse
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
     * @summary Deletes an asynchronous export task.
     *  *
     * @param DeleteAsyncTaskRequest $request DeleteAsyncTaskRequest
     *
     * @return DeleteAsyncTaskResponse DeleteAsyncTaskResponse
     */
    public function deleteAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Removes IP addresses from the IP address blacklist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DeleteAutoCcBlacklistRequest $request DeleteAutoCcBlacklistRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAutoCcBlacklistResponse DeleteAutoCcBlacklistResponse
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
     * @summary Removes IP addresses from the IP address blacklist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DeleteAutoCcBlacklistRequest $request DeleteAutoCcBlacklistRequest
     *
     * @return DeleteAutoCcBlacklistResponse DeleteAutoCcBlacklistResponse
     */
    public function deleteAutoCcBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoCcBlacklistWithOptions($request, $runtime);
    }

    /**
     * @summary Removes IP addresses from the IP address whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DeleteAutoCcWhitelistRequest $request DeleteAutoCcWhitelistRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAutoCcWhitelistResponse DeleteAutoCcWhitelistResponse
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
     * @summary Removes IP addresses from the IP address whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DeleteAutoCcWhitelistRequest $request DeleteAutoCcWhitelistRequest
     *
     * @return DeleteAutoCcWhitelistResponse DeleteAutoCcWhitelistResponse
     */
    public function deleteAutoCcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoCcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a specified forwarding rule of a website.
     *  *
     * @param DeleteDomainResourceRequest $request DeleteDomainResourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResourceResponse DeleteDomainResourceResponse
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
     * @summary Deletes a specified forwarding rule of a website.
     *  *
     * @param DeleteDomainResourceRequest $request DeleteDomainResourceRequest
     *
     * @return DeleteDomainResourceResponse DeleteDomainResourceResponse
     */
    public function deleteDomainResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a port forwarding rule. You can delete only one port forwarding rule at a time.
     *  *
     * @param DeleteNetworkRuleRequest $request DeleteNetworkRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkRuleResponse DeleteNetworkRuleResponse
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
     * @summary Deletes a port forwarding rule. You can delete only one port forwarding rule at a time.
     *  *
     * @param DeleteNetworkRuleRequest $request DeleteNetworkRuleRequest
     *
     * @return DeleteNetworkRuleResponse DeleteNetworkRuleResponse
     */
    public function deleteNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the specified port forwarding rule.
     *  *
     * @description After you delete a port forwarding rule, the Anti-DDoS Pro or Anti-DDoS Premium instance no longer forwards service traffic on the Layer 4 port. Before you delete a specific port forwarding rule, make sure that the service traffic destined for the Layer 4 port is redirected to the origin server. This can prevent negative impacts on your services.
     * > You can call this operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     *  *
     * @param DeletePortRequest $request DeletePortRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePortResponse DeletePortResponse
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
     * @summary Deletes the specified port forwarding rule.
     *  *
     * @description After you delete a port forwarding rule, the Anti-DDoS Pro or Anti-DDoS Premium instance no longer forwards service traffic on the Layer 4 port. Before you delete a specific port forwarding rule, make sure that the service traffic destined for the Layer 4 port is redirected to the origin server. This can prevent negative impacts on your services.
     * > You can call this operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     *  *
     * @param DeletePortRequest $request DeletePortRequest
     *
     * @return DeletePortResponse DeletePortResponse
     */
    public function deletePort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePortWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scenario-specific custom policy.
     *  *
     * @param DeleteSceneDefensePolicyRequest $request DeleteSceneDefensePolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSceneDefensePolicyResponse DeleteSceneDefensePolicyResponse
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
     * @summary Deletes a scenario-specific custom policy.
     *  *
     * @param DeleteSceneDefensePolicyRequest $request DeleteSceneDefensePolicyRequest
     *
     * @return DeleteSceneDefensePolicyResponse DeleteSceneDefensePolicyResponse
     */
    public function deleteSceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scheduling rule of Sec-Traffic Manager.
     *  *
     * @param DeleteSchedulerRuleRequest $request DeleteSchedulerRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSchedulerRuleResponse DeleteSchedulerRuleResponse
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
     * @summary Deletes a scheduling rule of Sec-Traffic Manager.
     *  *
     * @param DeleteSchedulerRuleRequest $request DeleteSchedulerRuleRequest
     *
     * @return DeleteSchedulerRuleResponse DeleteSchedulerRuleResponse
     */
    public function deleteSchedulerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchedulerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from Anti-DDoS Pro instances.
     *  *
     * @description You can call the DeleteTagResources operation to remove tags from Anti-DDoS Pro instances.
     * > Only Anti-DDoS Pro supports tags.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteTagResourcesRequest $request DeleteTagResourcesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTagResourcesResponse DeleteTagResourcesResponse
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
     * @summary Removes tags from Anti-DDoS Pro instances.
     *  *
     * @description You can call the DeleteTagResources operation to remove tags from Anti-DDoS Pro instances.
     * > Only Anti-DDoS Pro supports tags.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteTagResourcesRequest $request DeleteTagResourcesRequest
     *
     * @return DeleteTagResourcesResponse DeleteTagResourcesResponse
     */
    public function deleteTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom frequency control rule of a website.
     *  *
     * @param DeleteWebCCRuleRequest $request DeleteWebCCRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWebCCRuleResponse DeleteWebCCRuleResponse
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
     * @summary Deletes a custom frequency control rule of a website.
     *  *
     * @param DeleteWebCCRuleRequest $request DeleteWebCCRuleRequest
     *
     * @return DeleteWebCCRuleResponse DeleteWebCCRuleResponse
     */
    public function deleteWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the custom rules of the Static Page Caching policy for a website.
     *  *
     * @description You can call the DeleteWebCacheCustomRule operation to delete the custom rules of the Static Page Caching policy for a website.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteWebCacheCustomRuleRequest $request DeleteWebCacheCustomRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWebCacheCustomRuleResponse DeleteWebCacheCustomRuleResponse
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
     * @summary Deletes the custom rules of the Static Page Caching policy for a website.
     *  *
     * @description You can call the DeleteWebCacheCustomRule operation to delete the custom rules of the Static Page Caching policy for a website.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteWebCacheCustomRuleRequest $request DeleteWebCacheCustomRuleRequest
     *
     * @return DeleteWebCacheCustomRuleResponse DeleteWebCacheCustomRuleResponse
     */
    public function deleteWebCacheCustomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebCacheCustomRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the accurate access control rules that are created for a website.
     *  *
     * @param DeleteWebPreciseAccessRuleRequest $request DeleteWebPreciseAccessRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWebPreciseAccessRuleResponse DeleteWebPreciseAccessRuleResponse
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
     * @summary Deletes the accurate access control rules that are created for a website.
     *  *
     * @param DeleteWebPreciseAccessRuleRequest $request DeleteWebPreciseAccessRuleRequest
     *
     * @return DeleteWebPreciseAccessRuleResponse DeleteWebPreciseAccessRuleResponse
     */
    public function deleteWebPreciseAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebPreciseAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a forwarding rule of a website.
     *  *
     * @param DeleteWebRuleRequest $request DeleteWebRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWebRuleResponse DeleteWebRuleResponse
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
     * @summary Deletes a forwarding rule of a website.
     *  *
     * @param DeleteWebRuleRequest $request DeleteWebRuleRequest
     *
     * @return DeleteWebRuleResponse DeleteWebRuleResponse
     */
    public function deleteWebRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of asynchronous export tasks, such as the IDs, start time, end time, status, parameters, and results.
     *  *
     * @description You can call the DescribeAsyncTasks operation to query the details of asynchronous export tasks, such as the IDs, start time, end time, status, parameters, and results.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeAsyncTasksRequest $request DescribeAsyncTasksRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAsyncTasksResponse DescribeAsyncTasksResponse
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
     * @summary Queries the details of asynchronous export tasks, such as the IDs, start time, end time, status, parameters, and results.
     *  *
     * @description You can call the DescribeAsyncTasks operation to query the details of asynchronous export tasks, such as the IDs, start time, end time, status, parameters, and results.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeAsyncTasksRequest $request DescribeAsyncTasksRequest
     *
     * @return DescribeAsyncTasksResponse DescribeAsyncTasksResponse
     */
    public function describeAsyncTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAsyncTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the peak QPS of DDoS attacks within the specific period of time.
     *  *
     * @param DescribeAttackAnalysisMaxQpsRequest $request DescribeAttackAnalysisMaxQpsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAttackAnalysisMaxQpsResponse DescribeAttackAnalysisMaxQpsResponse
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
     * @summary Queries the peak QPS of DDoS attacks within the specific period of time.
     *  *
     * @param DescribeAttackAnalysisMaxQpsRequest $request DescribeAttackAnalysisMaxQpsRequest
     *
     * @return DescribeAttackAnalysisMaxQpsResponse DescribeAttackAnalysisMaxQpsResponse
     */
    public function describeAttackAnalysisMaxQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackAnalysisMaxQpsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries IP addresses in the IP address blacklist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeAutoCcBlacklistRequest $request DescribeAutoCcBlacklistRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoCcBlacklistResponse DescribeAutoCcBlacklistResponse
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
     * @summary Queries IP addresses in the IP address blacklist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeAutoCcBlacklistRequest $request DescribeAutoCcBlacklistRequest
     *
     * @return DescribeAutoCcBlacklistResponse DescribeAutoCcBlacklistResponse
     */
    public function describeAutoCcBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoCcBlacklistWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the numbers of IP addresses in the IP address whitelist and IP address blacklist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeAutoCcListCountRequest $request DescribeAutoCcListCountRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoCcListCountResponse DescribeAutoCcListCountResponse
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
     * @summary Queries the numbers of IP addresses in the IP address whitelist and IP address blacklist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeAutoCcListCountRequest $request DescribeAutoCcListCountRequest
     *
     * @return DescribeAutoCcListCountResponse DescribeAutoCcListCountResponse
     */
    public function describeAutoCcListCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoCcListCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries IP addresses in the IP address whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeAutoCcWhitelistRequest $request DescribeAutoCcWhitelistRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoCcWhitelistResponse DescribeAutoCcWhitelistResponse
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
     * @summary Queries IP addresses in the IP address whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeAutoCcWhitelistRequest $request DescribeAutoCcWhitelistRequest
     *
     * @return DescribeAutoCcWhitelistResponse DescribeAutoCcWhitelistResponse
     */
    public function describeAutoCcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoCcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the back-to-origin CIDR blocks of Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param DescribeBackSourceCidrRequest $request DescribeBackSourceCidrRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackSourceCidrResponse DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
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
     * @summary Queries the back-to-origin CIDR blocks of Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param DescribeBackSourceCidrRequest $request DescribeBackSourceCidrRequest
     *
     * @return DescribeBackSourceCidrResponse DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackSourceCidrWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the blackhole filtering status of one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribeBlackholeStatusRequest $request DescribeBlackholeStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBlackholeStatusResponse DescribeBlackholeStatusResponse
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
     * @summary Queries the blackhole filtering status of one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribeBlackholeStatusRequest $request DescribeBlackholeStatusRequest
     *
     * @return DescribeBlackholeStatusResponse DescribeBlackholeStatusResponse
     */
    public function describeBlackholeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlackholeStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Diversion from Origin Server configurations of one or more Anti-DDoS Pro instances.
     *  *
     * @description This operation is used to query the Diversion from Origin Server configurations of one or more Anti-DDoS Pro instances.
     * > This operation is suitable only for Anti-DDoS Pro.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeBlockStatusRequest $request DescribeBlockStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBlockStatusResponse DescribeBlockStatusResponse
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
     * @summary Queries the Diversion from Origin Server configurations of one or more Anti-DDoS Pro instances.
     *  *
     * @description This operation is used to query the Diversion from Origin Server configurations of one or more Anti-DDoS Pro instances.
     * > This operation is suitable only for Anti-DDoS Pro.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeBlockStatusRequest $request DescribeBlockStatusRequest
     *
     * @return DescribeBlockStatusResponse DescribeBlockStatusResponse
     */
    public function describeBlockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the certificate information about a website.
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
     * @summary Queries the certificate information about a website.
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
     * @param DescribeCnameReusesRequest $request DescribeCnameReusesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCnameReusesResponse DescribeCnameReusesResponse
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
     * @param DescribeCnameReusesRequest $request DescribeCnameReusesRequest
     *
     * @return DescribeCnameReusesResponse DescribeCnameReusesResponse
     */
    public function describeCnameReuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCnameReusesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attack events launched against one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribeDDoSEventsRequest $request DescribeDDoSEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDoSEventsResponse DescribeDDoSEventsResponse
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
     * @summary Queries the attack events launched against one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribeDDoSEventsRequest $request DescribeDDoSEventsRequest
     *
     * @return DescribeDDoSEventsResponse DescribeDDoSEventsResponse
     */
    public function describeDDoSEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Query DDoS attacks by IP address.
     *  *
     * @description You can call the DescribeDDosAllEventList operation to query DDoS attack events within a specific time range by page. The information about a DDoS attack event includes the start time and end time of the attack, attack event type, attacked object, peak bandwidth of attack traffic, and peak packet forwarding rate.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDDosAllEventListRequest $request DescribeDDosAllEventListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDosAllEventListResponse DescribeDDosAllEventListResponse
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
     * @summary Query DDoS attacks by IP address.
     *  *
     * @description You can call the DescribeDDosAllEventList operation to query DDoS attack events within a specific time range by page. The information about a DDoS attack event includes the start time and end time of the attack, attack event type, attacked object, peak bandwidth of attack traffic, and peak packet forwarding rate.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDDosAllEventListRequest $request DescribeDDosAllEventListRequest
     *
     * @return DescribeDDosAllEventListResponse DescribeDDosAllEventListResponse
     */
    public function describeDDosAllEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosAllEventListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the source region from which a volumetric attack is initiated.
     *  *
     * @description > This operation is suitable only for volumetric attacks.
     *  *
     * @param DescribeDDosEventAreaRequest $request DescribeDDosEventAreaRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDosEventAreaResponse DescribeDDosEventAreaResponse
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
     * @summary Queries the source region from which a volumetric attack is initiated.
     *  *
     * @description > This operation is suitable only for volumetric attacks.
     *  *
     * @param DescribeDDosEventAreaRequest $request DescribeDDosEventAreaRequest
     *
     * @return DescribeDDosEventAreaResponse DescribeDDosEventAreaResponse
     */
    public function describeDDosEventArea($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventAreaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attack type details of a volumetric attack.
     *  *
     * @description > This operation is suitable only for volumetric attacks.
     *  *
     * @param DescribeDDosEventAttackTypeRequest $request DescribeDDosEventAttackTypeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDosEventAttackTypeResponse DescribeDDosEventAttackTypeResponse
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
     * @summary Queries the attack type details of a volumetric attack.
     *  *
     * @description > This operation is suitable only for volumetric attacks.
     *  *
     * @param DescribeDDosEventAttackTypeRequest $request DescribeDDosEventAttackTypeRequest
     *
     * @return DescribeDDosEventAttackTypeResponse DescribeDDosEventAttackTypeResponse
     */
    public function describeDDosEventAttackType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventAttackTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Internet service provider (ISP) information about a volumetric attack.
     *  *
     * @description > This operation is suitable only for volumetric attacks.
     *  *
     * @param DescribeDDosEventIspRequest $request DescribeDDosEventIspRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDosEventIspResponse DescribeDDosEventIspResponse
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
     * @summary Queries the Internet service provider (ISP) information about a volumetric attack.
     *  *
     * @description > This operation is suitable only for volumetric attacks.
     *  *
     * @param DescribeDDosEventIspRequest $request DescribeDDosEventIspRequest
     *
     * @return DescribeDDosEventIspResponse DescribeDDosEventIspResponse
     */
    public function describeDDosEventIsp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventIspWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the peaks of volumetric attacks (bit/s), connection flood attacks (CPS), and resource exhaustion attacks on websites (QPS).
     *  *
     * @param DescribeDDosEventMaxRequest $request DescribeDDosEventMaxRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDosEventMaxResponse DescribeDDosEventMaxResponse
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
     * @summary Queries the peaks of volumetric attacks (bit/s), connection flood attacks (CPS), and resource exhaustion attacks on websites (QPS).
     *  *
     * @param DescribeDDosEventMaxRequest $request DescribeDDosEventMaxRequest
     *
     * @return DescribeDDosEventMaxResponse DescribeDDosEventMaxResponse
     */
    public function describeDDosEventMax($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventMaxWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the source IP address from which a volumetric attack is initiated.
     *  *
     * @description > This operation is suitable only for volumetric attacks.
     *  *
     * @param DescribeDDosEventSrcIpRequest $request DescribeDDosEventSrcIpRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDosEventSrcIpResponse DescribeDDosEventSrcIpResponse
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
     * @summary Queries the source IP address from which a volumetric attack is initiated.
     *  *
     * @description > This operation is suitable only for volumetric attacks.
     *  *
     * @param DescribeDDosEventSrcIpRequest $request DescribeDDosEventSrcIpRequest
     *
     * @return DescribeDDosEventSrcIpResponse DescribeDDosEventSrcIpResponse
     */
    public function describeDDosEventSrcIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDosEventSrcIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on advanced mitigation sessions of an Anti-DDoS Premium instance.
     *  *
     * @description You can call the DescribeDefenseCountStatistics operation to query the information about advanced mitigation sessions of an Anti-DDoS Premium instance. For example, you can query the number of advanced mitigation sessions that are used within the current calendar month and the number of available global advanced mitigation sessions.
     * > This operation is suitable only for Anti-DDoS Premium.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDefenseCountStatisticsRequest $request DescribeDefenseCountStatisticsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseCountStatisticsResponse DescribeDefenseCountStatisticsResponse
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
     * @summary Queries the statistics on advanced mitigation sessions of an Anti-DDoS Premium instance.
     *  *
     * @description You can call the DescribeDefenseCountStatistics operation to query the information about advanced mitigation sessions of an Anti-DDoS Premium instance. For example, you can query the number of advanced mitigation sessions that are used within the current calendar month and the number of available global advanced mitigation sessions.
     * > This operation is suitable only for Anti-DDoS Premium.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDefenseCountStatisticsRequest $request DescribeDefenseCountStatisticsRequest
     *
     * @return DescribeDefenseCountStatisticsResponse DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseCountStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the advanced mitigation logs of Anti-DDoS Premium.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Premium.
     *  *
     * @param DescribeDefenseRecordsRequest $request DescribeDefenseRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseRecordsResponse DescribeDefenseRecordsResponse
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
     * @summary Queries the advanced mitigation logs of Anti-DDoS Premium.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Premium.
     *  *
     * @param DescribeDefenseRecordsRequest $request DescribeDefenseRecordsRequest
     *
     * @return DescribeDefenseRecordsResponse DescribeDefenseRecordsResponse
     */
    public function describeDefenseRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attack events launched against a website.
     *  *
     * @param DescribeDomainAttackEventsRequest $request DescribeDomainAttackEventsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainAttackEventsResponse DescribeDomainAttackEventsResponse
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
     * @summary Queries the attack events launched against a website.
     *  *
     * @param DescribeDomainAttackEventsRequest $request DescribeDomainAttackEventsRequest
     *
     * @return DescribeDomainAttackEventsResponse DescribeDomainAttackEventsResponse
     */
    public function describeDomainAttackEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAttackEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attack overview of a website, such as the peak HTTP and HTTPS traffic.
     *  *
     * @param DescribeDomainOverviewRequest $request DescribeDomainOverviewRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainOverviewResponse DescribeDomainOverviewResponse
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
     * @summary Queries the attack overview of a website, such as the peak HTTP and HTTPS traffic.
     *  *
     * @param DescribeDomainOverviewRequest $request DescribeDomainOverviewRequest
     *
     * @return DescribeDomainOverviewResponse DescribeDomainOverviewResponse
     */
    public function describeDomainOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainOverviewWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on the queries per second (QPS) of a website.
     *  *
     * @param DescribeDomainQPSListRequest $request DescribeDomainQPSListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainQPSListResponse DescribeDomainQPSListResponse
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
     * @summary Queries the statistics on the queries per second (QPS) of a website.
     *  *
     * @param DescribeDomainQPSListRequest $request DescribeDomainQPSListRequest
     *
     * @return DescribeDomainQPSListResponse DescribeDomainQPSListResponse
     */
    public function describeDomainQPSList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQPSListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a forwarding rule.
     *  *
     * @description You can call the DescribeDomainResource operation to query the configurations of the forwarding rules that you create for a website by page. The configurations include the domain name-related configurations, protocol-related configurations, HTTPS-related configurations, and configurations that are used to mitigate HTTP flood attacks.
     * You can call this operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     * ### Limits
     * You can call this operation up to 50 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDomainResourceRequest $request DescribeDomainResourceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainResourceResponse DescribeDomainResourceResponse
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
     * @summary Queries the configurations of a forwarding rule.
     *  *
     * @description You can call the DescribeDomainResource operation to query the configurations of the forwarding rules that you create for a website by page. The configurations include the domain name-related configurations, protocol-related configurations, HTTPS-related configurations, and configurations that are used to mitigate HTTP flood attacks.
     * You can call this operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     * ### Limits
     * You can call this operation up to 50 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDomainResourceRequest $request DescribeDomainResourceRequest
     *
     * @return DescribeDomainResourceResponse DescribeDomainResourceResponse
     */
    public function describeDomainResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the global mitigation policy for a domain name.
     *  *
     * @param DescribeDomainSecurityProfileRequest $request DescribeDomainSecurityProfileRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainSecurityProfileResponse DescribeDomainSecurityProfileResponse
     */
    public function describeDomainSecurityProfileWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainSecurityProfile',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainSecurityProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the global mitigation policy for a domain name.
     *  *
     * @param DescribeDomainSecurityProfileRequest $request DescribeDomainSecurityProfileRequest
     *
     * @return DescribeDomainSecurityProfileResponse DescribeDomainSecurityProfileResponse
     */
    public function describeDomainSecurityProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSecurityProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on HTTP status codes of a website within a specified period of time.
     *  *
     * @param DescribeDomainStatusCodeCountRequest $request DescribeDomainStatusCodeCountRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainStatusCodeCountResponse DescribeDomainStatusCodeCountResponse
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
     * @summary Queries the statistics on HTTP status codes of a website within a specified period of time.
     *  *
     * @param DescribeDomainStatusCodeCountRequest $request DescribeDomainStatusCodeCountRequest
     *
     * @return DescribeDomainStatusCodeCountResponse DescribeDomainStatusCodeCountResponse
     */
    public function describeDomainStatusCodeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatusCodeCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on HTTP status codes of a website.
     *  *
     * @param DescribeDomainStatusCodeListRequest $request DescribeDomainStatusCodeListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainStatusCodeListResponse DescribeDomainStatusCodeListResponse
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
     * @summary Queries the statistics on HTTP status codes of a website.
     *  *
     * @param DescribeDomainStatusCodeListRequest $request DescribeDomainStatusCodeListRequest
     *
     * @return DescribeDomainStatusCodeListResponse DescribeDomainStatusCodeListResponse
     */
    public function describeDomainStatusCodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatusCodeListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the peak queries per second (QPS) information about a website, such as the attack QPS and total QPS, within a specific period of time.
     *  *
     * @param DescribeDomainTopAttackListRequest $request DescribeDomainTopAttackListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainTopAttackListResponse DescribeDomainTopAttackListResponse
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
     * @summary Queries the peak queries per second (QPS) information about a website, such as the attack QPS and total QPS, within a specific period of time.
     *  *
     * @param DescribeDomainTopAttackListRequest $request DescribeDomainTopAttackListRequest
     *
     * @return DescribeDomainTopAttackListResponse DescribeDomainTopAttackListResponse
     */
    public function describeDomainTopAttackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopAttackListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the areas and countries from which requests are sent to a website within a specified period of time.
     *  *
     * @param DescribeDomainViewSourceCountriesRequest $request DescribeDomainViewSourceCountriesRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainViewSourceCountriesResponse DescribeDomainViewSourceCountriesResponse
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
     * @summary Queries the areas and countries from which requests are sent to a website within a specified period of time.
     *  *
     * @param DescribeDomainViewSourceCountriesRequest $request DescribeDomainViewSourceCountriesRequest
     *
     * @return DescribeDomainViewSourceCountriesResponse DescribeDomainViewSourceCountriesResponse
     */
    public function describeDomainViewSourceCountries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainViewSourceCountriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the administrative regions in China from which requests are sent to a website within a specified period of time.
     *  *
     * @param DescribeDomainViewSourceProvincesRequest $request DescribeDomainViewSourceProvincesRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainViewSourceProvincesResponse DescribeDomainViewSourceProvincesResponse
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
     * @summary Queries the administrative regions in China from which requests are sent to a website within a specified period of time.
     *  *
     * @param DescribeDomainViewSourceProvincesRequest $request DescribeDomainViewSourceProvincesRequest
     *
     * @return DescribeDomainViewSourceProvincesResponse DescribeDomainViewSourceProvincesResponse
     */
    public function describeDomainViewSourceProvinces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainViewSourceProvincesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top N URLs that require the longest time to respond to requests within a specified period of time.
     *  *
     * @param DescribeDomainViewTopCostTimeRequest $request DescribeDomainViewTopCostTimeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainViewTopCostTimeResponse DescribeDomainViewTopCostTimeResponse
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
     * @summary Queries the top N URLs that require the longest time to respond to requests within a specified period of time.
     *  *
     * @param DescribeDomainViewTopCostTimeRequest $request DescribeDomainViewTopCostTimeRequest
     *
     * @return DescribeDomainViewTopCostTimeResponse DescribeDomainViewTopCostTimeResponse
     */
    public function describeDomainViewTopCostTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainViewTopCostTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top N URLs that receive the most requests within a specified period of time.
     *  *
     * @param DescribeDomainViewTopUrlRequest $request DescribeDomainViewTopUrlRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainViewTopUrlResponse DescribeDomainViewTopUrlResponse
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
     * @summary Queries the top N URLs that receive the most requests within a specified period of time.
     *  *
     * @param DescribeDomainViewTopUrlRequest $request DescribeDomainViewTopUrlRequest
     *
     * @return DescribeDomainViewTopUrlResponse DescribeDomainViewTopUrlResponse
     */
    public function describeDomainViewTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainViewTopUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries domain names for which forwarding rules are created.
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
     * @summary Queries domain names for which forwarding rules are created.
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
     * @summary Queries the available burstable protection bandwidths of an Anti-DDoS Pro instance.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param DescribeElasticBandwidthSpecRequest $request DescribeElasticBandwidthSpecRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticBandwidthSpecResponse DescribeElasticBandwidthSpecResponse
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
     * @summary Queries the available burstable protection bandwidths of an Anti-DDoS Pro instance.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param DescribeElasticBandwidthSpecRequest $request DescribeElasticBandwidthSpecRequest
     *
     * @return DescribeElasticBandwidthSpecResponse DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticBandwidthSpecWithOptions($request, $runtime);
    }

    /**
     * @summary 高防弹性qps曲线图
     *  *
     * @param DescribeElasticQpsRequest $request DescribeElasticQpsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticQpsResponse DescribeElasticQpsResponse
     */
    public function describeElasticQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticQps',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 高防弹性qps曲线图
     *  *
     * @param DescribeElasticQpsRequest $request DescribeElasticQpsRequest
     *
     * @return DescribeElasticQpsResponse DescribeElasticQpsResponse
     */
    public function describeElasticQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticQpsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询qps日95流量图
     *  *
     * @param DescribeElasticQpsRecordRequest $request DescribeElasticQpsRecordRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticQpsRecordResponse DescribeElasticQpsRecordResponse
     */
    public function describeElasticQpsRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeElasticQpsRecord',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticQpsRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询qps日95流量图
     *  *
     * @param DescribeElasticQpsRecordRequest $request DescribeElasticQpsRecordRequest
     *
     * @return DescribeElasticQpsRecordResponse DescribeElasticQpsRecordResponse
     */
    public function describeElasticQpsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticQpsRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the custom header that is specified for a domain name.
     *  *
     * @param DescribeHeadersRequest $request DescribeHeadersRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHeadersResponse DescribeHeadersResponse
     */
    public function describeHeadersWithOptions($request, $runtime)
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
            'action'      => 'DescribeHeaders',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHeadersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the custom header that is specified for a domain name.
     *  *
     * @param DescribeHeadersRequest $request DescribeHeadersRequest
     *
     * @return DescribeHeadersResponse DescribeHeadersResponse
     */
    public function describeHeaders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHeadersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Layer 4 or Layer 7 health check configurations of a port forwarding rule.
     *  *
     * @param DescribeHealthCheckListRequest $request DescribeHealthCheckListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHealthCheckListResponse DescribeHealthCheckListResponse
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
     * @summary Queries the Layer 4 or Layer 7 health check configurations of a port forwarding rule.
     *  *
     * @param DescribeHealthCheckListRequest $request DescribeHealthCheckListRequest
     *
     * @return DescribeHealthCheckListResponse DescribeHealthCheckListResponse
     */
    public function describeHealthCheckList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the health status of an origin server.
     *  *
     * @param DescribeHealthCheckStatusRequest $request DescribeHealthCheckStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHealthCheckStatusResponse DescribeHealthCheckStatusResponse
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
     * @summary Queries the health status of an origin server.
     *  *
     * @param DescribeHealthCheckStatusRequest $request DescribeHealthCheckStatusRequest
     *
     * @return DescribeHealthCheckStatusResponse DescribeHealthCheckStatusResponse
     */
    public function describeHealthCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP addresses and Internet service provider (ISP) lines of Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @description You can call the DescribeInstanceDetails operation to query the information about the IP addresses and ISP lines of the instances. The information includes the IP address, status, and protection line.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceDetailsRequest $request DescribeInstanceDetailsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceDetailsResponse DescribeInstanceDetailsResponse
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
     * @summary Queries the IP addresses and Internet service provider (ISP) lines of Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @description You can call the DescribeInstanceDetails operation to query the information about the IP addresses and ISP lines of the instances. The information includes the IP address, status, and protection line.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceDetailsRequest $request DescribeInstanceDetailsRequest
     *
     * @return DescribeInstanceDetailsResponse DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about Anti-DDoS Pro and Anti-DDoS Premium instances.
     *  *
     * @param DescribeInstanceExtRequest $request DescribeInstanceExtRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceExtResponse DescribeInstanceExtResponse
     */
    public function describeInstanceExtWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceExt',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceExtResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about Anti-DDoS Pro and Anti-DDoS Premium instances.
     *  *
     * @param DescribeInstanceExtRequest $request DescribeInstanceExtRequest
     *
     * @return DescribeInstanceExtResponse DescribeInstanceExtResponse
     */
    public function describeInstanceExt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceExtWithOptions($request, $runtime);
    }

    /**
     * @summary The description of the instance.
     *  *
     * @param DescribeInstanceIdsRequest $request DescribeInstanceIdsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceIdsResponse DescribeInstanceIdsResponse
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
     * @summary The description of the instance.
     *  *
     * @param DescribeInstanceIdsRequest $request DescribeInstanceIdsRequest
     *
     * @return DescribeInstanceIdsResponse DescribeInstanceIdsResponse
     */
    public function describeInstanceIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceIdsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the specifications of Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @description You can call the DescribeInstanceSpecs operation to query the specifications of multiple Anti-DDoS Pro or Anti-DDoS Premium instances at a time. The specifications include the clean bandwidth, protection bandwidth, function plan, and the numbers of domain names and ports that can be protected.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceSpecsRequest $request DescribeInstanceSpecsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSpecsResponse DescribeInstanceSpecsResponse
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
     * @summary Queries the specifications of Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @description You can call the DescribeInstanceSpecs operation to query the specifications of multiple Anti-DDoS Pro or Anti-DDoS Premium instances at a time. The specifications include the clean bandwidth, protection bandwidth, function plan, and the numbers of domain names and ports that can be protected.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the statistics on one or more Anti-DDoS Pro or Anti-DDoS Premium instances, such as the numbers of protected domain names and ports.
     *  *
     * @param DescribeInstanceStatisticsRequest $request DescribeInstanceStatisticsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceStatisticsResponse DescribeInstanceStatisticsResponse
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
     * @summary Queries the statistics on one or more Anti-DDoS Pro or Anti-DDoS Premium instances, such as the numbers of protected domain names and ports.
     *  *
     * @param DescribeInstanceStatisticsRequest $request DescribeInstanceStatisticsRequest
     *
     * @return DescribeInstanceStatisticsResponse DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a specified Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeInstanceStatusRequest $request DescribeInstanceStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceStatusResponse DescribeInstanceStatusResponse
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
     * @summary Queries the status of a specified Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeInstanceStatusRequest $request DescribeInstanceStatusRequest
     *
     * @return DescribeInstanceStatusResponse DescribeInstanceStatusResponse
     */
    public function describeInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @description You can call the DescribeInstances operation to query the details of Anti-DDoS Pro or Anti-DDoS Premium instances within the Alibaba Cloud account by page. The details include the ID, mitigation plan, expiration time, and forwarding status.
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
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
     * @description You can call the DescribeInstances operation to query the details of Anti-DDoS Pro or Anti-DDoS Premium instances within the Alibaba Cloud account by page. The details include the ID, mitigation plan, expiration time, and forwarding status.
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the back-to-origin policies for the forwarding rule of a website.
     *  *
     * @param DescribeL7RsPolicyRequest $request DescribeL7RsPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeL7RsPolicyResponse DescribeL7RsPolicyResponse
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
     * @summary Queries the back-to-origin policies for the forwarding rule of a website.
     *  *
     * @param DescribeL7RsPolicyRequest $request DescribeL7RsPolicyRequest
     *
     * @return DescribeL7RsPolicyResponse DescribeL7RsPolicyResponse
     */
    public function describeL7RsPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeL7RsPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the back-to-origin settings of a port forwarding rule.
     *  *
     * @param DescribeLayer4RulePolicyRequest $request DescribeLayer4RulePolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLayer4RulePolicyResponse DescribeLayer4RulePolicyResponse
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
     * @summary Queries the back-to-origin settings of a port forwarding rule.
     *  *
     * @param DescribeLayer4RulePolicyRequest $request DescribeLayer4RulePolicyRequest
     *
     * @return DescribeLayer4RulePolicyResponse DescribeLayer4RulePolicyResponse
     */
    public function describeLayer4RulePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer4RulePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a Logstore is created for Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param DescribeLogStoreExistStatusRequest $request DescribeLogStoreExistStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogStoreExistStatusResponse DescribeLogStoreExistStatusResponse
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
     * @summary Checks whether a Logstore is created for Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param DescribeLogStoreExistStatusRequest $request DescribeLogStoreExistStatusRequest
     *
     * @return DescribeLogStoreExistStatusResponse DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreExistStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the blocked locations that are configured for an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeNetworkRegionBlockRequest $request DescribeNetworkRegionBlockRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkRegionBlockResponse DescribeNetworkRegionBlockResponse
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
     * @summary Queries the blocked locations that are configured for an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeNetworkRegionBlockRequest $request DescribeNetworkRegionBlockRequest
     *
     * @return DescribeNetworkRegionBlockResponse DescribeNetworkRegionBlockResponse
     */
    public function describeNetworkRegionBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkRegionBlockWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the mitigation settings of the port forwarding rule for a non-website service. The mitigation settings include session persistence and DDoS mitigation policies.
     *  *
     * @param DescribeNetworkRuleAttributesRequest $request DescribeNetworkRuleAttributesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkRuleAttributesResponse DescribeNetworkRuleAttributesResponse
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
     * @summary Queries the mitigation settings of the port forwarding rule for a non-website service. The mitigation settings include session persistence and DDoS mitigation policies.
     *  *
     * @param DescribeNetworkRuleAttributesRequest $request DescribeNetworkRuleAttributesRequest
     *
     * @return DescribeNetworkRuleAttributesResponse DescribeNetworkRuleAttributesResponse
     */
    public function describeNetworkRuleAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkRuleAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries port forwarding rules.
     *  *
     * @param DescribeNetworkRulesRequest $request DescribeNetworkRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkRulesResponse DescribeNetworkRulesResponse
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
     * @summary Queries port forwarding rules.
     *  *
     * @param DescribeNetworkRulesRequest $request DescribeNetworkRulesRequest
     *
     * @return DescribeNetworkRulesResponse DescribeNetworkRulesResponse
     */
    public function describeNetworkRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the operation logs of Anti-DDoS Pro.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     * You can query operations performed on Anti-DDoS Pro, such as configuring burstable protection bandwidth, deactivating blackhole filtering, configuring the Diversion from Origin Server policy, using Anti-DDoS plans, changing the IP addresses of Elastic Compute Service (ECS) instances, and clearing all logs.
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
     * @summary Queries the operation logs of Anti-DDoS Pro.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     * You can query operations performed on Anti-DDoS Pro, such as configuring burstable protection bandwidth, deactivating blackhole filtering, configuring the Diversion from Origin Server policy, using Anti-DDoS plans, changing the IP addresses of Elastic Compute Service (ECS) instances, and clearing all logs.
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
     * @summary Queries the port forwarding rules that are created for an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @description You can call this operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     *  *
     * @param DescribePortRequest $request DescribePortRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortResponse DescribePortResponse
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
     * @summary Queries the port forwarding rules that are created for an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @description You can call this operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     *  *
     * @param DescribePortRequest $request DescribePortRequest
     *
     * @return DescribePortResponse DescribePortResponse
     */
    public function describePort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the peak attack traffic bandwidth and peak attack traffic packet rates of one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specified period of time.
     *  *
     * @description You can call this operation to query the peak bandwidth and peak packet rate of attack traffic on one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specific period of time.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePortAttackMaxFlowRequest $request DescribePortAttackMaxFlowRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortAttackMaxFlowResponse DescribePortAttackMaxFlowResponse
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
     * @summary Queries the peak attack traffic bandwidth and peak attack traffic packet rates of one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specified period of time.
     *  *
     * @description You can call this operation to query the peak bandwidth and peak packet rate of attack traffic on one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specific period of time.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePortAttackMaxFlowRequest $request DescribePortAttackMaxFlowRequest
     *
     * @return DescribePortAttackMaxFlowResponse DescribePortAttackMaxFlowResponse
     */
    public function describePortAttackMaxFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortAttackMaxFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of the Intelligent Protection policy for non-website services.
     *  *
     * @param DescribePortAutoCcStatusRequest $request DescribePortAutoCcStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortAutoCcStatusResponse DescribePortAutoCcStatusResponse
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
     * @summary Queries the configurations of the Intelligent Protection policy for non-website services.
     *  *
     * @param DescribePortAutoCcStatusRequest $request DescribePortAutoCcStatusRequest
     *
     * @return DescribePortAutoCcStatusResponse DescribePortAutoCcStatusResponse
     */
    public function describePortAutoCcStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortAutoCcStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortCcAttackTopIPRequest $request DescribePortCcAttackTopIPRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortCcAttackTopIPResponse DescribePortCcAttackTopIPResponse
     */
    public function describePortCcAttackTopIPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePortCcAttackTopIP',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePortCcAttackTopIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePortCcAttackTopIPRequest $request DescribePortCcAttackTopIPRequest
     *
     * @return DescribePortCcAttackTopIPResponse DescribePortCcAttackTopIPResponse
     */
    public function describePortCcAttackTopIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortCcAttackTopIPWithOptions($request, $runtime);
    }

    /**
     * @summary The statistics on the connections established over the ports of one or more Anti-DDoS Pro or Anti-DDoS Premium instances are queried.
     *  *
     * @param DescribePortConnsCountRequest $request DescribePortConnsCountRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortConnsCountResponse DescribePortConnsCountResponse
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
     * @summary The statistics on the connections established over the ports of one or more Anti-DDoS Pro or Anti-DDoS Premium instances are queried.
     *  *
     * @param DescribePortConnsCountRequest $request DescribePortConnsCountRequest
     *
     * @return DescribePortConnsCountResponse DescribePortConnsCountResponse
     */
    public function describePortConnsCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortConnsCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the connections established over the ports of one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribePortConnsListRequest $request DescribePortConnsListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortConnsListResponse DescribePortConnsListResponse
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
     * @summary Queries the connections established over the ports of one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribePortConnsListRequest $request DescribePortConnsListRequest
     *
     * @return DescribePortConnsListResponse DescribePortConnsListResponse
     */
    public function describePortConnsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortConnsListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the traffic data of one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribePortFlowListRequest $request DescribePortFlowListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortFlowListResponse DescribePortFlowListResponse
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
     * @summary Queries the traffic data of one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribePortFlowListRequest $request DescribePortFlowListRequest
     *
     * @return DescribePortFlowListResponse DescribePortFlowListResponse
     */
    public function describePortFlowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortFlowListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the maximum number of connections that can be established over the ports of one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribePortMaxConnsRequest $request DescribePortMaxConnsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortMaxConnsResponse DescribePortMaxConnsResponse
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
     * @summary Queries the maximum number of connections that can be established over the ports of one or more Anti-DDoS Pro or Anti-DDoS Premium instances.
     *  *
     * @param DescribePortMaxConnsRequest $request DescribePortMaxConnsRequest
     *
     * @return DescribePortMaxConnsResponse DescribePortMaxConnsResponse
     */
    public function describePortMaxConns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortMaxConnsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the areas and countries from which requests are sent to one or more Anti-DDoS Pro or Anti-DDoS Premium instances within the specified period of time.
     *  *
     * @param DescribePortViewSourceCountriesRequest $request DescribePortViewSourceCountriesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortViewSourceCountriesResponse DescribePortViewSourceCountriesResponse
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
     * @summary Queries the areas and countries from which requests are sent to one or more Anti-DDoS Pro or Anti-DDoS Premium instances within the specified period of time.
     *  *
     * @param DescribePortViewSourceCountriesRequest $request DescribePortViewSourceCountriesRequest
     *
     * @return DescribePortViewSourceCountriesResponse DescribePortViewSourceCountriesResponse
     */
    public function describePortViewSourceCountries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortViewSourceCountriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Internet service providers (ISPs) from which requests are sent to one or more Anti-DDoS Pro or Anti-DDoS Premium instances within the specified period of time.
     *  *
     * @description You can call the DescribePortViewSourceIsps operation to query the ISPs from which requests are sent to one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specific period of time.
     * > The data returned for this operation cannot reflect the actual traffic volume because Layer 4 identity authentication algorithms are updated for Anti-DDoS Pro and Anti-DDoS Premium. You can call this operation to calculate only the proportion of requests sent from different ISPs. If you want to query the request traffic volume, we recommend that you call the [DescribePortFlowList](https://help.aliyun.com/document_detail/157460.html) operation.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePortViewSourceIspsRequest $request DescribePortViewSourceIspsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortViewSourceIspsResponse DescribePortViewSourceIspsResponse
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
     * @summary Queries the Internet service providers (ISPs) from which requests are sent to one or more Anti-DDoS Pro or Anti-DDoS Premium instances within the specified period of time.
     *  *
     * @description You can call the DescribePortViewSourceIsps operation to query the ISPs from which requests are sent to one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specific period of time.
     * > The data returned for this operation cannot reflect the actual traffic volume because Layer 4 identity authentication algorithms are updated for Anti-DDoS Pro and Anti-DDoS Premium. You can call this operation to calculate only the proportion of requests sent from different ISPs. If you want to query the request traffic volume, we recommend that you call the [DescribePortFlowList](https://help.aliyun.com/document_detail/157460.html) operation.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePortViewSourceIspsRequest $request DescribePortViewSourceIspsRequest
     *
     * @return DescribePortViewSourceIspsResponse DescribePortViewSourceIspsResponse
     */
    public function describePortViewSourceIsps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortViewSourceIspsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the administrative regions in China from which requests are sent to one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specified period of time.
     *  *
     * @param DescribePortViewSourceProvincesRequest $request DescribePortViewSourceProvincesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePortViewSourceProvincesResponse DescribePortViewSourceProvincesResponse
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
     * @summary Queries the administrative regions in China from which requests are sent to one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specified period of time.
     *  *
     * @param DescribePortViewSourceProvincesRequest $request DescribePortViewSourceProvincesRequest
     *
     * @return DescribePortViewSourceProvincesResponse DescribePortViewSourceProvincesResponse
     */
    public function describePortViewSourceProvinces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortViewSourceProvincesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the protected objects of a scenario-specific custom policy.
     *  *
     * @description You can call the DescribeSceneDefenseObjects operation to query the protected objects of a scenario-specific custom policy.
     * Before you call this operation, make sure that you have created a scenario-specific custom policy by calling the [CreateSceneDefensePolicy](https://help.aliyun.com/document_detail/159779.html) operation.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeSceneDefenseObjectsRequest $request DescribeSceneDefenseObjectsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSceneDefenseObjectsResponse DescribeSceneDefenseObjectsResponse
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
     * @summary Queries the protected objects of a scenario-specific custom policy.
     *  *
     * @description You can call the DescribeSceneDefenseObjects operation to query the protected objects of a scenario-specific custom policy.
     * Before you call this operation, make sure that you have created a scenario-specific custom policy by calling the [CreateSceneDefensePolicy](https://help.aliyun.com/document_detail/159779.html) operation.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeSceneDefenseObjectsRequest $request DescribeSceneDefenseObjectsRequest
     *
     * @return DescribeSceneDefenseObjectsResponse DescribeSceneDefenseObjectsResponse
     */
    public function describeSceneDefenseObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneDefenseObjectsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a scenario-specific custom policy.
     *  *
     * @description You can call the DescribeSceneDefensePolicies operation to query the configurations of a scenario-specific custom policy that is created. For example, you can query the status, protected objects, and protection rules of the policy.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeSceneDefensePoliciesRequest $request DescribeSceneDefensePoliciesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSceneDefensePoliciesResponse DescribeSceneDefensePoliciesResponse
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
     * @summary Queries the configurations of a scenario-specific custom policy.
     *  *
     * @description You can call the DescribeSceneDefensePolicies operation to query the configurations of a scenario-specific custom policy that is created. For example, you can query the status, protected objects, and protection rules of the policy.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeSceneDefensePoliciesRequest $request DescribeSceneDefensePoliciesRequest
     *
     * @return DescribeSceneDefensePoliciesResponse DescribeSceneDefensePoliciesResponse
     */
    public function describeSceneDefensePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneDefensePoliciesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSchedulerRulesRequest $request DescribeSchedulerRulesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSchedulerRulesResponse DescribeSchedulerRulesResponse
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
     * @param DescribeSchedulerRulesRequest $request DescribeSchedulerRulesRequest
     *
     * @return DescribeSchedulerRulesResponse DescribeSchedulerRulesResponse
     */
    public function describeSchedulerRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSchedulerRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the destination rate limit events.
     *  *
     * @param DescribeSlaEventListRequest $request DescribeSlaEventListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlaEventListResponse DescribeSlaEventListResponse
     */
    public function describeSlaEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlaEventList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlaEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the destination rate limit events.
     *  *
     * @param DescribeSlaEventListRequest $request DescribeSlaEventListRequest
     *
     * @return DescribeSlaEventListResponse DescribeSlaEventListResponse
     */
    public function describeSlaEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlaEventListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether Anti-DDoS Pro or Anti-DDoS Premium is authorized to access Log Service.
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
     * @summary Queries whether Anti-DDoS Pro or Anti-DDoS Premium is authorized to access Log Service.
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
     * @summary Queries the information about the Logstore of the Anti-DDoS Pro or Anti-DDoS Premium instance, such as the log storage capacity and log storage duration.
     *  *
     * @param DescribeSlsLogstoreInfoRequest $request DescribeSlsLogstoreInfoRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsLogstoreInfoResponse DescribeSlsLogstoreInfoResponse
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
     * @summary Queries the information about the Logstore of the Anti-DDoS Pro or Anti-DDoS Premium instance, such as the log storage capacity and log storage duration.
     *  *
     * @param DescribeSlsLogstoreInfoRequest $request DescribeSlsLogstoreInfoRequest
     *
     * @return DescribeSlsLogstoreInfoResponse DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsLogstoreInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether Log Service is activated.
     *  *
     * @param DescribeSlsOpenStatusRequest $request DescribeSlsOpenStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsOpenStatusResponse DescribeSlsOpenStatusResponse
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
     * @summary Checks whether Log Service is activated.
     *  *
     * @param DescribeSlsOpenStatusRequest $request DescribeSlsOpenStatusRequest
     *
     * @return DescribeSlsOpenStatusResponse DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether Anti-DDoS Pro or Anti-DDoS Premium is authorized to access other cloud services.
     *  *
     * @description You can call the DescribeStsGrantStatus operation to query whether Anti-DDoS Pro or Anti-DDoS Premium of the current Alibaba Cloud account is authorized to access other cloud services.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeStsGrantStatusRequest $request DescribeStsGrantStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStsGrantStatusResponse DescribeStsGrantStatusResponse
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
     * @summary Queries whether Anti-DDoS Pro or Anti-DDoS Premium is authorized to access other cloud services.
     *  *
     * @description You can call the DescribeStsGrantStatus operation to query whether Anti-DDoS Pro or Anti-DDoS Premium of the current Alibaba Cloud account is authorized to access other cloud services.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeStsGrantStatusRequest $request DescribeStsGrantStatusRequest
     *
     * @return DescribeStsGrantStatusResponse DescribeStsGrantStatusResponse
     */
    public function describeStsGrantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStsGrantStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the bills for the burstable clean bandwidth.
     *  *
     * @description You can call the DescribeSystemLog operation to query the system logs of Anti-DDoS Pro or Anti-DDoS Premium. The system logs contain only billing logs for the burstable clean bandwidth.
     * If you have enabled the burstable clean bandwidth feature, you can call this operation to query the details of the bills of the burstable clean bandwidth.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeSystemLogRequest $request DescribeSystemLogRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSystemLogResponse DescribeSystemLogResponse
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
     * @summary Queries the details of the bills for the burstable clean bandwidth.
     *  *
     * @description You can call the DescribeSystemLog operation to query the system logs of Anti-DDoS Pro or Anti-DDoS Premium. The system logs contain only billing logs for the burstable clean bandwidth.
     * If you have enabled the burstable clean bandwidth feature, you can call this operation to query the details of the bills of the burstable clean bandwidth.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeSystemLogRequest $request DescribeSystemLogRequest
     *
     * @return DescribeSystemLogResponse DescribeSystemLogResponse
     */
    public function describeSystemLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all tag keys and the Anti-DDoS Pro instances to which the tag keys are added.
     *  *
     * @description You can call this operation to query all tag keys and the Anti-DDoS Pro instances to which the tag keys are added by page.
     * > The tag feature is suitable only for Anti-DDoS Pro.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeTagKeysRequest $request DescribeTagKeysRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagKeysResponse DescribeTagKeysResponse
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
     * @summary Queries all tag keys and the Anti-DDoS Pro instances to which the tag keys are added.
     *  *
     * @description You can call this operation to query all tag keys and the Anti-DDoS Pro instances to which the tag keys are added by page.
     * > The tag feature is suitable only for Anti-DDoS Pro.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeTagKeysRequest $request DescribeTagKeysRequest
     *
     * @return DescribeTagKeysResponse DescribeTagKeysResponse
     */
    public function describeTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the tags that are added to an Anti-DDoS Pro instance.
     *  *
     * @description You can call the DescribeTagResources operation to query the information about the tags that are added to an Anti-DDoS Pro instance.
     * > Only Anti-DDoS Pro supports tags.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeTagResourcesRequest $request DescribeTagResourcesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagResourcesResponse DescribeTagResourcesResponse
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
     * @summary Queries the information about the tags that are added to an Anti-DDoS Pro instance.
     *  *
     * @description You can call the DescribeTagResources operation to query the information about the tags that are added to an Anti-DDoS Pro instance.
     * > Only Anti-DDoS Pro supports tags.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeTagResourcesRequest $request DescribeTagResourcesRequest
     *
     * @return DescribeTagResourcesResponse DescribeTagResourcesResponse
     */
    public function describeTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the peak bandwidth and peak packet rates of attack traffic on one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specific period of time.
     *  *
     * @param DescribeTotalAttackMaxFlowRequest $request DescribeTotalAttackMaxFlowRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTotalAttackMaxFlowResponse DescribeTotalAttackMaxFlowResponse
     */
    public function describeTotalAttackMaxFlowWithOptions($request, $runtime)
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
            'action'      => 'DescribeTotalAttackMaxFlow',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTotalAttackMaxFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the peak bandwidth and peak packet rates of attack traffic on one or more Anti-DDoS Pro or Anti-DDoS Premium instances within a specific period of time.
     *  *
     * @param DescribeTotalAttackMaxFlowRequest $request DescribeTotalAttackMaxFlowRequest
     *
     * @return DescribeTotalAttackMaxFlowResponse DescribeTotalAttackMaxFlowResponse
     */
    public function describeTotalAttackMaxFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTotalAttackMaxFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the source ports of UDP traffic that are filtered out by the filtering policies for UDP reflection attacks on an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeUdpReflectRequest $request DescribeUdpReflectRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUdpReflectResponse DescribeUdpReflectResponse
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
     * @summary Queries the source ports of UDP traffic that are filtered out by the filtering policies for UDP reflection attacks on an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param DescribeUdpReflectRequest $request DescribeUdpReflectRequest
     *
     * @return DescribeUdpReflectResponse DescribeUdpReflectResponse
     */
    public function describeUdpReflect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUdpReflectWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the total quota and remaining quota that allow you to deactivate blackhole filtering.
     *  *
     * @param DescribeUnBlackholeCountRequest $request DescribeUnBlackholeCountRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUnBlackholeCountResponse DescribeUnBlackholeCountResponse
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
     * @summary Queries the total quota and remaining quota that allow you to deactivate blackhole filtering.
     *  *
     * @param DescribeUnBlackholeCountRequest $request DescribeUnBlackholeCountRequest
     *
     * @return DescribeUnBlackholeCountResponse DescribeUnBlackholeCountResponse
     */
    public function describeUnBlackholeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUnBlackholeCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the remaining quota that allows you to use the Diversion from Origin Server policy.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param DescribeUnBlockCountRequest $request DescribeUnBlockCountRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUnBlockCountResponse DescribeUnBlockCountResponse
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
     * @summary Queries the remaining quota that allows you to use the Diversion from Origin Server policy.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param DescribeUnBlockCountRequest $request DescribeUnBlockCountRequest
     *
     * @return DescribeUnBlockCountResponse DescribeUnBlockCountResponse
     */
    public function describeUnBlockCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUnBlockCountWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the log analysis feature is enabled for all domain names.
     *  *
     * @description You can call the DescribeWebAccessLogDispatchStatus operation to check whether the log analysis feature is enabled for all domain names that are added to your Anti-DDoS Pro or Anti-DDoS Premium instance.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeWebAccessLogDispatchStatusRequest $request DescribeWebAccessLogDispatchStatusRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebAccessLogDispatchStatusResponse DescribeWebAccessLogDispatchStatusResponse
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
     * @summary Checks whether the log analysis feature is enabled for all domain names.
     *  *
     * @description You can call the DescribeWebAccessLogDispatchStatus operation to check whether the log analysis feature is enabled for all domain names that are added to your Anti-DDoS Pro or Anti-DDoS Premium instance.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeWebAccessLogDispatchStatusRequest $request DescribeWebAccessLogDispatchStatusRequest
     *
     * @return DescribeWebAccessLogDispatchStatusResponse DescribeWebAccessLogDispatchStatusResponse
     */
    public function describeWebAccessLogDispatchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAccessLogDispatchStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the remaining quota that allows you to clear the Logstore.
     *  *
     * @param DescribeWebAccessLogEmptyCountRequest $request DescribeWebAccessLogEmptyCountRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebAccessLogEmptyCountResponse DescribeWebAccessLogEmptyCountResponse
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
     * @summary Queries the remaining quota that allows you to clear the Logstore.
     *  *
     * @param DescribeWebAccessLogEmptyCountRequest $request DescribeWebAccessLogEmptyCountRequest
     *
     * @return DescribeWebAccessLogEmptyCountResponse DescribeWebAccessLogEmptyCountResponse
     */
    public function describeWebAccessLogEmptyCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAccessLogEmptyCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the Log Analysis feature for a website, such as the feature status and the Log Service project and Logstore that are used.
     *  *
     * @param DescribeWebAccessLogStatusRequest $request DescribeWebAccessLogStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebAccessLogStatusResponse DescribeWebAccessLogStatusResponse
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
     * @summary Queries the information about the Log Analysis feature for a website, such as the feature status and the Log Service project and Logstore that are used.
     *  *
     * @param DescribeWebAccessLogStatusRequest $request DescribeWebAccessLogStatusRequest
     *
     * @return DescribeWebAccessLogStatusResponse DescribeWebAccessLogStatusResponse
     */
    public function describeWebAccessLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAccessLogStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the mode in which a website service is added to Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param DescribeWebAccessModeRequest $request DescribeWebAccessModeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebAccessModeResponse DescribeWebAccessModeResponse
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
     * @summary Queries the mode in which a website service is added to Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param DescribeWebAccessModeRequest $request DescribeWebAccessModeRequest
     *
     * @return DescribeWebAccessModeResponse DescribeWebAccessModeResponse
     */
    public function describeWebAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAccessModeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Location Blacklist (Domain Names) configurations for websites.
     *  *
     * @param DescribeWebAreaBlockConfigsRequest $request DescribeWebAreaBlockConfigsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebAreaBlockConfigsResponse DescribeWebAreaBlockConfigsResponse
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
     * @summary Queries the Location Blacklist (Domain Names) configurations for websites.
     *  *
     * @param DescribeWebAreaBlockConfigsRequest $request DescribeWebAreaBlockConfigsRequest
     *
     * @return DescribeWebAreaBlockConfigsResponse DescribeWebAreaBlockConfigsResponse
     */
    public function describeWebAreaBlockConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebAreaBlockConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the custom frequency control rules that are created for a website.
     *  *
     * @param DescribeWebCCRulesRequest $request DescribeWebCCRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebCCRulesResponse DescribeWebCCRulesResponse
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
     * @summary Queries the custom frequency control rules that are created for a website.
     *  *
     * @param DescribeWebCCRulesRequest $request DescribeWebCCRulesRequest
     *
     * @return DescribeWebCCRulesResponse DescribeWebCCRulesResponse
     */
    public function describeWebCCRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCCRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Static Page Caching configuration of websites.
     *  *
     * @description You can call the DescribeWebCacheConfigs operation to query the Static Page Caching configurations of websites. The configurations include cache modes and custom caching rules.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeWebCacheConfigsRequest $request DescribeWebCacheConfigsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebCacheConfigsResponse DescribeWebCacheConfigsResponse
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
     * @summary Queries the Static Page Caching configuration of websites.
     *  *
     * @description You can call the DescribeWebCacheConfigs operation to query the Static Page Caching configurations of websites. The configurations include cache modes and custom caching rules.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeWebCacheConfigsRequest $request DescribeWebCacheConfigsRequest
     *
     * @return DescribeWebCacheConfigsResponse DescribeWebCacheConfigsResponse
     */
    public function describeWebCacheConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCacheConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of each mitigation policy for a website.
     *  *
     * @param DescribeWebCcProtectSwitchRequest $request DescribeWebCcProtectSwitchRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebCcProtectSwitchResponse DescribeWebCcProtectSwitchResponse
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
     * @summary Queries the status of each mitigation policy for a website.
     *  *
     * @param DescribeWebCcProtectSwitchRequest $request DescribeWebCcProtectSwitchRequest
     *
     * @return DescribeWebCcProtectSwitchResponse DescribeWebCcProtectSwitchResponse
     */
    public function describeWebCcProtectSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCcProtectSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the supported custom ports of a website.
     *  *
     * @param DescribeWebCustomPortsRequest $request DescribeWebCustomPortsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebCustomPortsResponse DescribeWebCustomPortsResponse
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
     * @summary Queries the supported custom ports of a website.
     *  *
     * @param DescribeWebCustomPortsRequest $request DescribeWebCustomPortsRequest
     *
     * @return DescribeWebCustomPortsResponse DescribeWebCustomPortsResponse
     */
    public function describeWebCustomPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCustomPortsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about Anti-DDoS Pro or Anti-DDoS Premium instances to which a website service is added.
     *  *
     * @param DescribeWebInstanceRelationsRequest $request DescribeWebInstanceRelationsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebInstanceRelationsResponse DescribeWebInstanceRelationsResponse
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
     * @summary Queries the information about Anti-DDoS Pro or Anti-DDoS Premium instances to which a website service is added.
     *  *
     * @param DescribeWebInstanceRelationsRequest $request DescribeWebInstanceRelationsRequest
     *
     * @return DescribeWebInstanceRelationsResponse DescribeWebInstanceRelationsResponse
     */
    public function describeWebInstanceRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebInstanceRelationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the accurate access control rules that are created for websites.
     *  *
     * @param DescribeWebPreciseAccessRuleRequest $request DescribeWebPreciseAccessRuleRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebPreciseAccessRuleResponse DescribeWebPreciseAccessRuleResponse
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
     * @summary Queries the accurate access control rules that are created for websites.
     *  *
     * @param DescribeWebPreciseAccessRuleRequest $request DescribeWebPreciseAccessRuleRequest
     *
     * @return DescribeWebPreciseAccessRuleResponse DescribeWebPreciseAccessRuleResponse
     */
    public function describeWebPreciseAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebPreciseAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebReportTopIpRequest $request DescribeWebReportTopIpRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebReportTopIpResponse DescribeWebReportTopIpResponse
     */
    public function describeWebReportTopIpWithOptions($request, $runtime)
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
            'action'      => 'DescribeWebReportTopIp',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebReportTopIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebReportTopIpRequest $request DescribeWebReportTopIpRequest
     *
     * @return DescribeWebReportTopIpResponse DescribeWebReportTopIpResponse
     */
    public function describeWebReportTopIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebReportTopIpWithOptions($request, $runtime);
    }

    /**
     * @summary Indicates whether Allow Access Only from SM Certificates-based Clients is turned on.
     * *   0: no
     * *   1: yes
     *  *
     * @param DescribeWebRulesRequest $request DescribeWebRulesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebRulesResponse DescribeWebRulesResponse
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
     * @summary Indicates whether Allow Access Only from SM Certificates-based Clients is turned on.
     * *   0: no
     * *   1: yes
     *  *
     * @param DescribeWebRulesRequest $request DescribeWebRulesRequest
     *
     * @return DescribeWebRulesResponse DescribeWebRulesResponse
     */
    public function describeWebRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a protected object from a scenario-specific custom policy.
     *  *
     * @param DetachSceneDefenseObjectRequest $request DetachSceneDefenseObjectRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachSceneDefenseObjectResponse DetachSceneDefenseObjectResponse
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
     * @summary Removes a protected object from a scenario-specific custom policy.
     *  *
     * @param DetachSceneDefenseObjectRequest $request DetachSceneDefenseObjectRequest
     *
     * @return DetachSceneDefenseObjectResponse DetachSceneDefenseObjectResponse
     */
    public function detachSceneDefenseObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachSceneDefenseObjectWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a scenario-specific custom policy.
     *  *
     * @param DisableSceneDefensePolicyRequest $request DisableSceneDefensePolicyRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableSceneDefensePolicyResponse DisableSceneDefensePolicyResponse
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
     * @summary Disables a scenario-specific custom policy.
     *  *
     * @param DisableSceneDefensePolicyRequest $request DisableSceneDefensePolicyRequest
     *
     * @return DisableSceneDefensePolicyResponse DisableSceneDefensePolicyResponse
     */
    public function disableSceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the log analysis feature for a website.
     *  *
     * @param DisableWebAccessLogConfigRequest $request DisableWebAccessLogConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableWebAccessLogConfigResponse DisableWebAccessLogConfigResponse
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
     * @summary Disables the log analysis feature for a website.
     *  *
     * @param DisableWebAccessLogConfigRequest $request DisableWebAccessLogConfigRequest
     *
     * @return DisableWebAccessLogConfigResponse DisableWebAccessLogConfigResponse
     */
    public function disableWebAccessLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableWebAccessLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the Frequency Control policy for a website.
     *  *
     * @param DisableWebCCRequest $request DisableWebCCRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableWebCCResponse DisableWebCCResponse
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
     * @summary Disables the Frequency Control policy for a website.
     *  *
     * @param DisableWebCCRequest $request DisableWebCCRequest
     *
     * @return DisableWebCCResponse DisableWebCCResponse
     */
    public function disableWebCC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableWebCCWithOptions($request, $runtime);
    }

    /**
     * @summary Turns off the Custom Rule switch of the Frequency Control policy for a website.
     *  *
     * @param DisableWebCCRuleRequest $request DisableWebCCRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableWebCCRuleResponse DisableWebCCRuleResponse
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
     * @summary Turns off the Custom Rule switch of the Frequency Control policy for a website.
     *  *
     * @param DisableWebCCRuleRequest $request DisableWebCCRuleRequest
     *
     * @return DisableWebCCRuleResponse DisableWebCCRuleResponse
     */
    public function disableWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Clears the IP address blacklist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param EmptyAutoCcBlacklistRequest $request EmptyAutoCcBlacklistRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return EmptyAutoCcBlacklistResponse EmptyAutoCcBlacklistResponse
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
     * @summary Clears the IP address blacklist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param EmptyAutoCcBlacklistRequest $request EmptyAutoCcBlacklistRequest
     *
     * @return EmptyAutoCcBlacklistResponse EmptyAutoCcBlacklistResponse
     */
    public function emptyAutoCcBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emptyAutoCcBlacklistWithOptions($request, $runtime);
    }

    /**
     * @summary Clears the IP address whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param EmptyAutoCcWhitelistRequest $request EmptyAutoCcWhitelistRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return EmptyAutoCcWhitelistResponse EmptyAutoCcWhitelistResponse
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
     * @summary Clears the IP address whitelist of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param EmptyAutoCcWhitelistRequest $request EmptyAutoCcWhitelistRequest
     *
     * @return EmptyAutoCcWhitelistResponse EmptyAutoCcWhitelistResponse
     */
    public function emptyAutoCcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emptyAutoCcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Clears the Logstore of Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param EmptySlsLogstoreRequest $request EmptySlsLogstoreRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return EmptySlsLogstoreResponse EmptySlsLogstoreResponse
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
     * @summary Clears the Logstore of Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param EmptySlsLogstoreRequest $request EmptySlsLogstoreRequest
     *
     * @return EmptySlsLogstoreResponse EmptySlsLogstoreResponse
     */
    public function emptySlsLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emptySlsLogstoreWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a scenario-specific custom policy.
     *  *
     * @param EnableSceneDefensePolicyRequest $request EnableSceneDefensePolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableSceneDefensePolicyResponse EnableSceneDefensePolicyResponse
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
     * @summary Enables a scenario-specific custom policy.
     *  *
     * @param EnableSceneDefensePolicyRequest $request EnableSceneDefensePolicyRequest
     *
     * @return EnableSceneDefensePolicyResponse EnableSceneDefensePolicyResponse
     */
    public function enableSceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the log analysis feature for a website.
     *  *
     * @param EnableWebAccessLogConfigRequest $request EnableWebAccessLogConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableWebAccessLogConfigResponse EnableWebAccessLogConfigResponse
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
     * @summary Enables the log analysis feature for a website.
     *  *
     * @param EnableWebAccessLogConfigRequest $request EnableWebAccessLogConfigRequest
     *
     * @return EnableWebAccessLogConfigResponse EnableWebAccessLogConfigResponse
     */
    public function enableWebAccessLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWebAccessLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the Frequency Control policy for a website.
     *  *
     * @param EnableWebCCRequest $request EnableWebCCRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableWebCCResponse EnableWebCCResponse
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
     * @summary Enables the Frequency Control policy for a website.
     *  *
     * @param EnableWebCCRequest $request EnableWebCCRequest
     *
     * @return EnableWebCCResponse EnableWebCCResponse
     */
    public function enableWebCC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWebCCWithOptions($request, $runtime);
    }

    /**
     * @summary Turns on the Custom Rule switch of the Frequency Control policy for a website.
     *  *
     * @param EnableWebCCRuleRequest $request EnableWebCCRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableWebCCRuleResponse EnableWebCCRuleResponse
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
     * @summary Turns on the Custom Rule switch of the Frequency Control policy for a website.
     *  *
     * @param EnableWebCCRuleRequest $request EnableWebCCRuleRequest
     *
     * @return EnableWebCCRuleResponse EnableWebCCRuleResponse
     */
    public function enableWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Switches between the metering methods of the burstable clean bandwidth feature.
     *  *
     * @description You can switch between the metering methods of the burstable clean bandwidth feature. The new metering method takes effect from 00:00 on the first day of the next month. You can change the metering method up to three times each calendar month. The most recent metering method that you select takes effect in the next month. You cannot change the metering method on the last day of each calendar month.
     *  *
     * @param ModifyBizBandWidthModeRequest $request ModifyBizBandWidthModeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBizBandWidthModeResponse ModifyBizBandWidthModeResponse
     */
    public function modifyBizBandWidthModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBizBandWidthMode',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBizBandWidthModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Switches between the metering methods of the burstable clean bandwidth feature.
     *  *
     * @description You can switch between the metering methods of the burstable clean bandwidth feature. The new metering method takes effect from 00:00 on the first day of the next month. You can change the metering method up to three times each calendar month. The most recent metering method that you select takes effect in the next month. You cannot change the metering method on the last day of each calendar month.
     *  *
     * @param ModifyBizBandWidthModeRequest $request ModifyBizBandWidthModeRequest
     *
     * @return ModifyBizBandWidthModeResponse ModifyBizBandWidthModeResponse
     */
    public function modifyBizBandWidthMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBizBandWidthModeWithOptions($request, $runtime);
    }

    /**
     * @summary Deactivates blackhole filtering that is triggered on an instance.
     *  *
     * @param ModifyBlackholeStatusRequest $request ModifyBlackholeStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBlackholeStatusResponse ModifyBlackholeStatusResponse
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
     * @summary Deactivates blackhole filtering that is triggered on an instance.
     *  *
     * @param ModifyBlackholeStatusRequest $request ModifyBlackholeStatusRequest
     *
     * @return ModifyBlackholeStatusResponse ModifyBlackholeStatusResponse
     */
    public function modifyBlackholeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBlackholeStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the Diversion from Origin Server configuration of an Anti-DDoS Pro instance.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param ModifyBlockStatusRequest $request ModifyBlockStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBlockStatusResponse ModifyBlockStatusResponse
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
     * @summary Modifies the Diversion from Origin Server configuration of an Anti-DDoS Pro instance.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param ModifyBlockStatusRequest $request ModifyBlockStatusRequest
     *
     * @return ModifyBlockStatusResponse ModifyBlockStatusResponse
     */
    public function modifyBlockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBlockStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables CNAME reuse for a website.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Premium.
     *  *
     * @param ModifyCnameReuseRequest $request ModifyCnameReuseRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCnameReuseResponse ModifyCnameReuseResponse
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
     * @summary Enables or disables CNAME reuse for a website.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Premium.
     *  *
     * @param ModifyCnameReuseRequest $request ModifyCnameReuseRequest
     *
     * @return ModifyCnameReuseResponse ModifyCnameReuseResponse
     */
    public function modifyCnameReuse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCnameReuseWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the forwarding rule of a website.
     *  *
     * @param ModifyDomainResourceRequest $request ModifyDomainResourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDomainResourceResponse ModifyDomainResourceResponse
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
     * @summary Modifies the forwarding rule of a website.
     *  *
     * @param ModifyDomainResourceRequest $request ModifyDomainResourceRequest
     *
     * @return ModifyDomainResourceResponse ModifyDomainResourceResponse
     */
    public function modifyDomainResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the burstable protection bandwidth of a specified Anti-DDoS Pro instance.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param ModifyElasticBandWidthRequest $request ModifyElasticBandWidthRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyElasticBandWidthResponse ModifyElasticBandWidthResponse
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
     * @summary Modifies the burstable protection bandwidth of a specified Anti-DDoS Pro instance.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param ModifyElasticBandWidthRequest $request ModifyElasticBandWidthRequest
     *
     * @return ModifyElasticBandWidthResponse ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBandWidthWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the burstable clean bandwidth for an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @description Before you call this operation, make sure that you have fully understood the billing method and [pricing](https://help.aliyun.com/document_detail/283754.html) of the burstable clean bandwidth feature. After you call this operation for the first time, the modification immediately takes effect.
     *  *
     * @param ModifyElasticBizBandWidthRequest $request ModifyElasticBizBandWidthRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyElasticBizBandWidthResponse ModifyElasticBizBandWidthResponse
     */
    public function modifyElasticBizBandWidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->elasticBizBandwidth)) {
            $query['ElasticBizBandwidth'] = $request->elasticBizBandwidth;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyElasticBizBandWidth',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyElasticBizBandWidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the burstable clean bandwidth for an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @description Before you call this operation, make sure that you have fully understood the billing method and [pricing](https://help.aliyun.com/document_detail/283754.html) of the burstable clean bandwidth feature. After you call this operation for the first time, the modification immediately takes effect.
     *  *
     * @param ModifyElasticBizBandWidthRequest $request ModifyElasticBizBandWidthRequest
     *
     * @return ModifyElasticBizBandWidthResponse ModifyElasticBizBandWidthResponse
     */
    public function modifyElasticBizBandWidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBizBandWidthWithOptions($request, $runtime);
    }

    /**
     * @summary 开启/关闭弹性QPS 首次模式直接生效
     *  *
     * @param ModifyElasticBizQpsRequest $request ModifyElasticBizQpsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyElasticBizQpsResponse ModifyElasticBizQpsResponse
     */
    public function modifyElasticBizQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->opsElasticQps)) {
            $query['OpsElasticQps'] = $request->opsElasticQps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyElasticBizQps',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyElasticBizQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启/关闭弹性QPS 首次模式直接生效
     *  *
     * @param ModifyElasticBizQpsRequest $request ModifyElasticBizQpsRequest
     *
     * @return ModifyElasticBizQpsResponse ModifyElasticBizQpsResponse
     */
    public function modifyElasticBizQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBizQpsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the log storage duration for Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param ModifyFullLogTtlRequest $request ModifyFullLogTtlRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFullLogTtlResponse ModifyFullLogTtlResponse
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
     * @summary Modifies the log storage duration for Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param ModifyFullLogTtlRequest $request ModifyFullLogTtlRequest
     *
     * @return ModifyFullLogTtlResponse ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFullLogTtlWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the custom header of a domain name that is added to an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param ModifyHeadersRequest $request ModifyHeadersRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHeadersResponse ModifyHeadersResponse
     */
    public function modifyHeadersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customHeaders)) {
            $query['CustomHeaders'] = $request->customHeaders;
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
            'action'      => 'ModifyHeaders',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHeadersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the custom header of a domain name that is added to an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param ModifyHeadersRequest $request ModifyHeadersRequest
     *
     * @return ModifyHeadersResponse ModifyHeadersResponse
     */
    public function modifyHeaders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHeadersWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the Layer 4 or Layer 7 health check configuration of a port forwarding rule.
     *  *
     * @param ModifyHealthCheckConfigRequest $request ModifyHealthCheckConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHealthCheckConfigResponse ModifyHealthCheckConfigResponse
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
     * @summary Modifies the Layer 4 or Layer 7 health check configuration of a port forwarding rule.
     *  *
     * @param ModifyHealthCheckConfigRequest $request ModifyHealthCheckConfigRequest
     *
     * @return ModifyHealthCheckConfigResponse ModifyHealthCheckConfigResponse
     */
    public function modifyHealthCheckConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHealthCheckConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables HTTP/2 for the forwarding rule of a website.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param ModifyHttp2EnableRequest $request ModifyHttp2EnableRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHttp2EnableResponse ModifyHttp2EnableResponse
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
     * @summary Enables or disables HTTP/2 for the forwarding rule of a website.
     *  *
     * @description > This operation is suitable only for Anti-DDoS Pro.
     *  *
     * @param ModifyHttp2EnableRequest $request ModifyHttp2EnableRequest
     *
     * @return ModifyHttp2EnableResponse ModifyHttp2EnableResponse
     */
    public function modifyHttp2Enable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHttp2EnableWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param ModifyInstanceRemarkRequest $request ModifyInstanceRemarkRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceRemarkResponse ModifyInstanceRemarkResponse
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
     * @summary Modifies the description of an Anti-DDoS Pro or Anti-DDoS Premium instance.
     *  *
     * @param ModifyInstanceRemarkRequest $request ModifyInstanceRemarkRequest
     *
     * @return ModifyInstanceRemarkResponse ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceRemarkWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the session persistence settings of a port forwarding rule.
     *  *
     * @param ModifyNetworkRuleAttributeRequest $request ModifyNetworkRuleAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNetworkRuleAttributeResponse ModifyNetworkRuleAttributeResponse
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
     * @summary Modifies the session persistence settings of a port forwarding rule.
     *  *
     * @param ModifyNetworkRuleAttributeRequest $request ModifyNetworkRuleAttributeRequest
     *
     * @return ModifyNetworkRuleAttributeResponse ModifyNetworkRuleAttributeResponse
     */
    public function modifyNetworkRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies whether to enable the Online Certificate Status Protocol (OCSP) feature.
     *  *
     * @description This feature is available only for a website that supports HTTPS. If HTTPS is selected for Protocol, we recommend that you enable this feature.
     *  *
     * @param ModifyOcspStatusRequest $request ModifyOcspStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyOcspStatusResponse ModifyOcspStatusResponse
     */
    public function modifyOcspStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOcspStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOcspStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies whether to enable the Online Certificate Status Protocol (OCSP) feature.
     *  *
     * @description This feature is available only for a website that supports HTTPS. If HTTPS is selected for Protocol, we recommend that you enable this feature.
     *  *
     * @param ModifyOcspStatusRequest $request ModifyOcspStatusRequest
     *
     * @return ModifyOcspStatusResponse ModifyOcspStatusResponse
     */
    public function modifyOcspStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOcspStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a port forwarding rule.
     *  *
     * @description You can call the ModifyPort operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     *  *
     * @param ModifyPortRequest $request ModifyPortRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPortResponse ModifyPortResponse
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
     * @summary Modifies a port forwarding rule.
     *  *
     * @description You can call the ModifyPort operation by using Terraform. For more information about Terraform, see [What is Terraform?](https://help.aliyun.com/document_detail/95820.html).
     *  *
     * @param ModifyPortRequest $request ModifyPortRequest
     *
     * @return ModifyPortResponse ModifyPortResponse
     */
    public function modifyPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPortWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the Intelligent Protection configuration of a non-website service.
     *  *
     * @param ModifyPortAutoCcStatusRequest $request ModifyPortAutoCcStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPortAutoCcStatusResponse ModifyPortAutoCcStatusResponse
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
     * @summary Modifies the Intelligent Protection configuration of a non-website service.
     *  *
     * @param ModifyPortAutoCcStatusRequest $request ModifyPortAutoCcStatusRequest
     *
     * @return ModifyPortAutoCcStatusResponse ModifyPortAutoCcStatusResponse
     */
    public function modifyPortAutoCcStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPortAutoCcStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改弹性qps模式
     *  *
     * @param ModifyQpsModeRequest $request ModifyQpsModeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyQpsModeResponse ModifyQpsModeResponse
     */
    public function modifyQpsModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyQpsMode',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyQpsModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改弹性qps模式
     *  *
     * @param ModifyQpsModeRequest $request ModifyQpsModeRequest
     *
     * @return ModifyQpsModeResponse ModifyQpsModeResponse
     */
    public function modifyQpsMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQpsModeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a scenario-specific custom policy.
     *  *
     * @param ModifySceneDefensePolicyRequest $request ModifySceneDefensePolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySceneDefensePolicyResponse ModifySceneDefensePolicyResponse
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
     * @summary Modifies a scenario-specific custom policy.
     *  *
     * @param ModifySceneDefensePolicyRequest $request ModifySceneDefensePolicyRequest
     *
     * @return ModifySceneDefensePolicyResponse ModifySceneDefensePolicyResponse
     */
    public function modifySceneDefensePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySceneDefensePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the scheduling rule of Sec-Traffic Manager.
     *  *
     * @param ModifySchedulerRuleRequest $request ModifySchedulerRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySchedulerRuleResponse ModifySchedulerRuleResponse
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
     * @summary Modifies the scheduling rule of Sec-Traffic Manager.
     *  *
     * @param ModifySchedulerRuleRequest $request ModifySchedulerRuleRequest
     *
     * @return ModifySchedulerRuleResponse ModifySchedulerRuleResponse
     */
    public function modifySchedulerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySchedulerRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the Transport Layer Security (TLS) policy configuration for the forwarding rule of a website.
     *  *
     * @param ModifyTlsConfigRequest $request ModifyTlsConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTlsConfigResponse ModifyTlsConfigResponse
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
     * @summary Modifies the Transport Layer Security (TLS) policy configuration for the forwarding rule of a website.
     *  *
     * @param ModifyTlsConfigRequest $request ModifyTlsConfigRequest
     *
     * @return ModifyTlsConfigResponse ModifyTlsConfigResponse
     */
    public function modifyTlsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTlsConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the mode of the Intelligent Protection policy for a website.
     *  *
     * @param ModifyWebAIProtectModeRequest $request ModifyWebAIProtectModeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebAIProtectModeResponse ModifyWebAIProtectModeResponse
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
     * @summary Changes the mode of the Intelligent Protection policy for a website.
     *  *
     * @param ModifyWebAIProtectModeRequest $request ModifyWebAIProtectModeRequest
     *
     * @return ModifyWebAIProtectModeResponse ModifyWebAIProtectModeResponse
     */
    public function modifyWebAIProtectMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAIProtectModeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the Intelligent Protection policy for a website.
     *  *
     * @param ModifyWebAIProtectSwitchRequest $request ModifyWebAIProtectSwitchRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebAIProtectSwitchResponse ModifyWebAIProtectSwitchResponse
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
     * @summary Enables or disables the Intelligent Protection policy for a website.
     *  *
     * @param ModifyWebAIProtectSwitchRequest $request ModifyWebAIProtectSwitchRequest
     *
     * @return ModifyWebAIProtectSwitchResponse ModifyWebAIProtectSwitchResponse
     */
    public function modifyWebAIProtectSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAIProtectSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the mode in which a website service is added to Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param ModifyWebAccessModeRequest $request ModifyWebAccessModeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebAccessModeResponse ModifyWebAccessModeResponse
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
     * @summary Changes the mode in which a website service is added to Anti-DDoS Pro or Anti-DDoS Premium.
     *  *
     * @param ModifyWebAccessModeRequest $request ModifyWebAccessModeRequest
     *
     * @return ModifyWebAccessModeResponse ModifyWebAccessModeResponse
     */
    public function modifyWebAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAccessModeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the blocked locations that are configured in the Location Blacklist (Domain Names) policy for a website.
     *  *
     * @param ModifyWebAreaBlockRequest $request ModifyWebAreaBlockRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebAreaBlockResponse ModifyWebAreaBlockResponse
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
     * @summary Modifies the blocked locations that are configured in the Location Blacklist (Domain Names) policy for a website.
     *  *
     * @param ModifyWebAreaBlockRequest $request ModifyWebAreaBlockRequest
     *
     * @return ModifyWebAreaBlockResponse ModifyWebAreaBlockResponse
     */
    public function modifyWebAreaBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAreaBlockWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the Location Blacklist (Domain Names) policy for a domain name.
     *  *
     * @description You can call the ModifyWebAreaBlockSwitch operation to enable or disable the Location Blacklist (Domain Names) policy for a domain name.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyWebAreaBlockSwitchRequest $request ModifyWebAreaBlockSwitchRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebAreaBlockSwitchResponse ModifyWebAreaBlockSwitchResponse
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
     * @summary Enables or disables the Location Blacklist (Domain Names) policy for a domain name.
     *  *
     * @description You can call the ModifyWebAreaBlockSwitch operation to enable or disable the Location Blacklist (Domain Names) policy for a domain name.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyWebAreaBlockSwitchRequest $request ModifyWebAreaBlockSwitchRequest
     *
     * @return ModifyWebAreaBlockSwitchResponse ModifyWebAreaBlockSwitchResponse
     */
    public function modifyWebAreaBlockSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebAreaBlockSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebCCRuleRequest $request ModifyWebCCRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebCCRuleResponse ModifyWebCCRuleResponse
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
     * @param ModifyWebCCRuleRequest $request ModifyWebCCRuleRequest
     *
     * @return ModifyWebCCRuleResponse ModifyWebCCRuleResponse
     */
    public function modifyWebCCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCCRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the custom rule of the Static Page Caching policy for a website.
     *  *
     * @param ModifyWebCacheCustomRuleRequest $request ModifyWebCacheCustomRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebCacheCustomRuleResponse ModifyWebCacheCustomRuleResponse
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
     * @summary Modifies the custom rule of the Static Page Caching policy for a website.
     *  *
     * @param ModifyWebCacheCustomRuleRequest $request ModifyWebCacheCustomRuleRequest
     *
     * @return ModifyWebCacheCustomRuleResponse ModifyWebCacheCustomRuleResponse
     */
    public function modifyWebCacheCustomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCacheCustomRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the cache mode of the Static Page Caching policy for a website.
     *  *
     * @param ModifyWebCacheModeRequest $request ModifyWebCacheModeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebCacheModeResponse ModifyWebCacheModeResponse
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
     * @summary Changes the cache mode of the Static Page Caching policy for a website.
     *  *
     * @param ModifyWebCacheModeRequest $request ModifyWebCacheModeRequest
     *
     * @return ModifyWebCacheModeResponse ModifyWebCacheModeResponse
     */
    public function modifyWebCacheMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCacheModeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the Static Page Caching policy for a website.
     *  *
     * @description You can call the ModifyWebCacheSwitch operation to enable or disable the Static Page Caching policy for a website.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyWebCacheSwitchRequest $request ModifyWebCacheSwitchRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebCacheSwitchResponse ModifyWebCacheSwitchResponse
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
     * @summary Enables or disables the Static Page Caching policy for a website.
     *  *
     * @description You can call the ModifyWebCacheSwitch operation to enable or disable the Static Page Caching policy for a website.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyWebCacheSwitchRequest $request ModifyWebCacheSwitchRequest
     *
     * @return ModifyWebCacheSwitchResponse ModifyWebCacheSwitchResponse
     */
    public function modifyWebCacheSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCacheSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the Black Lists and White Lists (Domain Names) policy for a domain name.
     *  *
     * @param ModifyWebIpSetSwitchRequest $request ModifyWebIpSetSwitchRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebIpSetSwitchResponse ModifyWebIpSetSwitchResponse
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
     * @summary Enables or disables the Black Lists and White Lists (Domain Names) policy for a domain name.
     *  *
     * @param ModifyWebIpSetSwitchRequest $request ModifyWebIpSetSwitchRequest
     *
     * @return ModifyWebIpSetSwitchResponse ModifyWebIpSetSwitchResponse
     */
    public function modifyWebIpSetSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebIpSetSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the accurate access control rule of a website.
     *  *
     * @param ModifyWebPreciseAccessRuleRequest $request ModifyWebPreciseAccessRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebPreciseAccessRuleResponse ModifyWebPreciseAccessRuleResponse
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
     * @summary Modifies the accurate access control rule of a website.
     *  *
     * @param ModifyWebPreciseAccessRuleRequest $request ModifyWebPreciseAccessRuleRequest
     *
     * @return ModifyWebPreciseAccessRuleResponse ModifyWebPreciseAccessRuleResponse
     */
    public function modifyWebPreciseAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebPreciseAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the Accurate Access Control policy for a website.
     *  *
     * @param ModifyWebPreciseAccessSwitchRequest $request ModifyWebPreciseAccessSwitchRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebPreciseAccessSwitchResponse ModifyWebPreciseAccessSwitchResponse
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
     * @summary Enables or disables the Accurate Access Control policy for a website.
     *  *
     * @param ModifyWebPreciseAccessSwitchRequest $request ModifyWebPreciseAccessSwitchRequest
     *
     * @return ModifyWebPreciseAccessSwitchResponse ModifyWebPreciseAccessSwitchResponse
     */
    public function modifyWebPreciseAccessSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebPreciseAccessSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebRuleRequest $request ModifyWebRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebRuleResponse ModifyWebRuleResponse
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
     * @param ModifyWebRuleRequest $request ModifyWebRuleRequest
     *
     * @return ModifyWebRuleResponse ModifyWebRuleResponse
     */
    public function modifyWebRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebRuleWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the instance that you want to release.
     * > You can release only expired instances. You can call the [DescribeInstances](https://help.aliyun.com/document_detail/91478.html) operation to query the IDs and expiration status of all instances.
     *  *
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *  *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
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
     * @summary The ID of the instance that you want to release.
     * > You can release only expired instances. You can call the [DescribeInstances](https://help.aliyun.com/document_detail/91478.html) operation to query the IDs and expiration status of all instances.
     *  *
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *  *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Switches service traffic to your Anti-DDoS Pro or Anti-DDoS Premium instance for scrubbing or switches service traffic back to the associated cloud resources.
     *  *
     * @description You can call the SwitchSchedulerRule operation to modify the resources to which service traffic is switched for a scheduling rule. For example, you can switch service traffic to an Anti-DDoS Pro or Anti-DDoS Premium instance for scrubbing or switch the service traffic back to the associated cloud resources.
     * Before you call this operation, you must have created a scheduling rule by calling the [CreateSchedulerRule](https://help.aliyun.com/document_detail/157479.html) operation.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SwitchSchedulerRuleRequest $request SwitchSchedulerRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchSchedulerRuleResponse SwitchSchedulerRuleResponse
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
     * @summary Switches service traffic to your Anti-DDoS Pro or Anti-DDoS Premium instance for scrubbing or switches service traffic back to the associated cloud resources.
     *  *
     * @description You can call the SwitchSchedulerRule operation to modify the resources to which service traffic is switched for a scheduling rule. For example, you can switch service traffic to an Anti-DDoS Pro or Anti-DDoS Premium instance for scrubbing or switch the service traffic back to the associated cloud resources.
     * Before you call this operation, you must have created a scheduling rule by calling the [CreateSchedulerRule](https://help.aliyun.com/document_detail/157479.html) operation.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SwitchSchedulerRuleRequest $request SwitchSchedulerRuleRequest
     *
     * @return SwitchSchedulerRuleResponse SwitchSchedulerRuleResponse
     */
    public function switchSchedulerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSchedulerRuleWithOptions($request, $runtime);
    }
}
