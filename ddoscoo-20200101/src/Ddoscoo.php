<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AddAutoCcBlacklistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AddAutoCcBlacklistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AddAutoCcWhitelistRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AddAutoCcWhitelistResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AssociateWebCertRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AssociateWebCertResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AttachSceneDefenseObjectRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\AttachSceneDefenseObjectResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigDomainSecurityProfileRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigDomainSecurityProfileResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigL7GlobalRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigL7GlobalRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigL7RsPolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigL7RsPolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigL7UsKeepaliveRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigL7UsKeepaliveResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebCCRuleV2Request;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ConfigWebCCRuleV2Response;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebCCRuleV2Request;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DeleteWebCCRuleV2Response;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCdnLinkageRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCdnLinkageRulesResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDestinationPortEventRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDestinationPortEventResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainBpsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainBpsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainCcProtectSwitchRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainCcProtectSwitchResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainH2FingerprintRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainH2FingerprintResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopFingerprintRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopFingerprintResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopHttpMethodRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopHttpMethodResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopRefererRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopRefererResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopUserAgentRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopUserAgentResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7GlobalRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7GlobalRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponse;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7UsKeepaliveRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7UsKeepaliveResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2Request;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2Response;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyInstanceResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCCGlobalSwitchRequest;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyWebCCGlobalSwitchResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ddoscoo extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-southeast-1' => 'ddoscoo.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou' => 'ddoscoo.cn-hangzhou.aliyuncs.com',
        ];
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - AddAutoCcBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAutoCcBlacklistResponse
     *
     * @param AddAutoCcBlacklistRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddAutoCcBlacklistResponse
     */
    public function addAutoCcBlacklistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blacklist) {
            @$query['Blacklist'] = $request->blacklist;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAutoCcBlacklist',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAutoCcBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddAutoCcBlacklistRequest
     *
     * @returns AddAutoCcBlacklistResponse
     *
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
     * @param request - AddAutoCcWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAutoCcWhitelistResponse
     *
     * @param AddAutoCcWhitelistRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddAutoCcWhitelistResponse
     */
    public function addAutoCcWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->whitelist) {
            @$query['Whitelist'] = $request->whitelist;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAutoCcWhitelist',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAutoCcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddAutoCcWhitelistRequest
     *
     * @returns AddAutoCcWhitelistResponse
     *
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
     * 绑定证书.
     *
     * @param request - AssociateWebCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateWebCertResponse
     *
     * @param AssociateWebCertRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AssociateWebCertResponse
     */
    public function associateWebCertWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cert) {
            @$body['Cert'] = $request->cert;
        }

        if (null !== $request->certId) {
            @$body['CertId'] = $request->certId;
        }

        if (null !== $request->certIdentifier) {
            @$body['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->certName) {
            @$body['CertName'] = $request->certName;
        }

        if (null !== $request->certRegion) {
            @$body['CertRegion'] = $request->certRegion;
        }

        if (null !== $request->domain) {
            @$body['Domain'] = $request->domain;
        }

        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateWebCert',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateWebCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定证书.
     *
     * @param request - AssociateWebCertRequest
     *
     * @returns AssociateWebCertResponse
     *
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
     * 绑定场景策略生效对象
     *
     * @param request - AttachSceneDefenseObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachSceneDefenseObjectResponse
     *
     * @param AttachSceneDefenseObjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AttachSceneDefenseObjectResponse
     */
    public function attachSceneDefenseObjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->objects) {
            @$query['Objects'] = $request->objects;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachSceneDefenseObject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachSceneDefenseObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定场景策略生效对象
     *
     * @param request - AttachSceneDefenseObjectRequest
     *
     * @returns AttachSceneDefenseObjectResponse
     *
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
     * 配置安全概要属性.
     *
     * @param request - ConfigDomainSecurityProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigDomainSecurityProfileResponse
     *
     * @param ConfigDomainSecurityProfileRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ConfigDomainSecurityProfileResponse
     */
    public function configDomainSecurityProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['Cluster'] = $request->cluster;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigDomainSecurityProfile',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigDomainSecurityProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置安全概要属性.
     *
     * @param request - ConfigDomainSecurityProfileRequest
     *
     * @returns ConfigDomainSecurityProfileResponse
     *
     * @param ConfigDomainSecurityProfileRequest $request
     *
     * @return ConfigDomainSecurityProfileResponse
     */
    public function configDomainSecurityProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configDomainSecurityProfileWithOptions($request, $runtime);
    }

    /**
     * 配置全局模板规则.
     *
     * @param request - ConfigL7GlobalRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigL7GlobalRuleResponse
     *
     * @param ConfigL7GlobalRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigL7GlobalRuleResponse
     */
    public function configL7GlobalRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->ruleAttr) {
            @$query['RuleAttr'] = $request->ruleAttr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigL7GlobalRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigL7GlobalRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置全局模板规则.
     *
     * @param request - ConfigL7GlobalRuleRequest
     *
     * @returns ConfigL7GlobalRuleResponse
     *
     * @param ConfigL7GlobalRuleRequest $request
     *
     * @return ConfigL7GlobalRuleResponse
     */
    public function configL7GlobalRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configL7GlobalRuleWithOptions($request, $runtime);
    }

    /**
     * 设置域名接入回源策略.
     *
     * @param request - ConfigL7RsPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigL7RsPolicyResponse
     *
     * @param ConfigL7RsPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigL7RsPolicyResponse
     */
    public function configL7RsPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->upstreamRetry) {
            @$query['UpstreamRetry'] = $request->upstreamRetry;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigL7RsPolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigL7RsPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置域名接入回源策略.
     *
     * @param request - ConfigL7RsPolicyRequest
     *
     * @returns ConfigL7RsPolicyResponse
     *
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
     * 配置长连接.
     *
     * @param request - ConfigL7UsKeepaliveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigL7UsKeepaliveResponse
     *
     * @param ConfigL7UsKeepaliveRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigL7UsKeepaliveResponse
     */
    public function configL7UsKeepaliveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->downstreamKeepalive) {
            @$query['DownstreamKeepalive'] = $request->downstreamKeepalive;
        }

        if (null !== $request->upstreamKeepalive) {
            @$query['UpstreamKeepalive'] = $request->upstreamKeepalive;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigL7UsKeepalive',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigL7UsKeepaliveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置长连接.
     *
     * @param request - ConfigL7UsKeepaliveRequest
     *
     * @returns ConfigL7UsKeepaliveResponse
     *
     * @param ConfigL7UsKeepaliveRequest $request
     *
     * @return ConfigL7UsKeepaliveResponse
     */
    public function configL7UsKeepalive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configL7UsKeepaliveWithOptions($request, $runtime);
    }

    /**
     * 4层带宽限速 客户专用.
     *
     * @param request - ConfigLayer4RealLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer4RealLimitResponse
     *
     * @param ConfigLayer4RealLimitRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigLayer4RealLimitResponse
     */
    public function configLayer4RealLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->limitValue) {
            @$query['LimitValue'] = $request->limitValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer4RealLimit',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigLayer4RealLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 4层带宽限速 客户专用.
     *
     * @param request - ConfigLayer4RealLimitRequest
     *
     * @returns ConfigLayer4RealLimitResponse
     *
     * @param ConfigLayer4RealLimitRequest $request
     *
     * @return ConfigLayer4RealLimitResponse
     */
    public function configLayer4RealLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RealLimitWithOptions($request, $runtime);
    }

    /**
     * 设置端口接入备注.
     *
     * @param request - ConfigLayer4RemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer4RemarkResponse
     *
     * @param ConfigLayer4RemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigLayer4RemarkResponse
     */
    public function configLayer4RemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer4Remark',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigLayer4RemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置端口接入备注.
     *
     * @param request - ConfigLayer4RemarkRequest
     *
     * @returns ConfigLayer4RemarkResponse
     *
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
     * 设置端口接入回源主备模式.
     *
     * @param request - ConfigLayer4RuleBakModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer4RuleBakModeResponse
     *
     * @param ConfigLayer4RuleBakModeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigLayer4RuleBakModeResponse
     */
    public function configLayer4RuleBakModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bakMode) {
            @$query['BakMode'] = $request->bakMode;
        }

        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer4RuleBakMode',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigLayer4RuleBakModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置端口接入回源主备模式.
     *
     * @param request - ConfigLayer4RuleBakModeRequest
     *
     * @returns ConfigLayer4RuleBakModeResponse
     *
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
     * 设置端口接入策略.
     *
     * @param request - ConfigLayer4RulePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer4RulePolicyResponse
     *
     * @param ConfigLayer4RulePolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigLayer4RulePolicyResponse
     */
    public function configLayer4RulePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer4RulePolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigLayer4RulePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置端口接入策略.
     *
     * @param request - ConfigLayer4RulePolicyRequest
     *
     * @returns ConfigLayer4RulePolicyResponse
     *
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
     * 设置区域封禁
     *
     * @param request - ConfigNetworkRegionBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigNetworkRegionBlockResponse
     *
     * @param ConfigNetworkRegionBlockRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfigNetworkRegionBlockResponse
     */
    public function configNetworkRegionBlockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigNetworkRegionBlock',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigNetworkRegionBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置区域封禁
     *
     * @param request - ConfigNetworkRegionBlockRequest
     *
     * @returns ConfigNetworkRegionBlockResponse
     *
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
     * 配置端口接入规则.
     *
     * @param request - ConfigNetworkRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigNetworkRulesResponse
     *
     * @param ConfigNetworkRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigNetworkRulesResponse
     */
    public function configNetworkRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkRules) {
            @$query['NetworkRules'] = $request->networkRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigNetworkRules',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigNetworkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置端口接入规则.
     *
     * @param request - ConfigNetworkRulesRequest
     *
     * @returns ConfigNetworkRulesResponse
     *
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
     * 配置UDP反射.
     *
     * @param request - ConfigUdpReflectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigUdpReflectResponse
     *
     * @param ConfigUdpReflectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigUdpReflectResponse
     */
    public function configUdpReflectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
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
            'action' => 'ConfigUdpReflect',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigUdpReflectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置UDP反射.
     *
     * @param request - ConfigUdpReflectRequest
     *
     * @returns ConfigUdpReflectResponse
     *
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
     * 配置新版基于匹配条件的cc规则.
     *
     * @param request - ConfigWebCCRuleV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigWebCCRuleV2Response
     *
     * @param ConfigWebCCRuleV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConfigWebCCRuleV2Response
     */
    public function configWebCCRuleV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->expires) {
            @$query['Expires'] = $request->expires;
        }

        if (null !== $request->ruleList) {
            @$query['RuleList'] = $request->ruleList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigWebCCRuleV2',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigWebCCRuleV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置新版基于匹配条件的cc规则.
     *
     * @param request - ConfigWebCCRuleV2Request
     *
     * @returns ConfigWebCCRuleV2Response
     *
     * @param ConfigWebCCRuleV2Request $request
     *
     * @return ConfigWebCCRuleV2Response
     */
    public function configWebCCRuleV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configWebCCRuleV2WithOptions($request, $runtime);
    }

    /**
     * 设置WEB CC防护模板
     *
     * @param request - ConfigWebCCTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigWebCCTemplateResponse
     *
     * @param ConfigWebCCTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigWebCCTemplateResponse
     */
    public function configWebCCTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigWebCCTemplate',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigWebCCTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置WEB CC防护模板
     *
     * @param request - ConfigWebCCTemplateRequest
     *
     * @returns ConfigWebCCTemplateResponse
     *
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
     * 设置防护黑白名单.
     *
     * @param request - ConfigWebIpSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigWebIpSetResponse
     *
     * @param ConfigWebIpSetRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConfigWebIpSetResponse
     */
    public function configWebIpSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blackList) {
            @$query['BlackList'] = $request->blackList;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->whiteList) {
            @$query['WhiteList'] = $request->whiteList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigWebIpSet',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigWebIpSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置防护黑白名单.
     *
     * @param request - ConfigWebIpSetRequest
     *
     * @returns ConfigWebIpSetResponse
     *
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
     * @param request - CreateAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAsyncTaskResponse
     *
     * @param CreateAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAsyncTaskResponse
     */
    public function createAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskParams) {
            @$query['TaskParams'] = $request->taskParams;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAsyncTask',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAsyncTaskRequest
     *
     * @returns CreateAsyncTaskResponse
     *
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
     * 域名资源.
     *
     * @param request - CreateDomainResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResourceResponse
     *
     * @param CreateDomainResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDomainResourceResponse
     */
    public function createDomainResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->httpsExt) {
            @$query['HttpsExt'] = $request->httpsExt;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->proxyTypes) {
            @$query['ProxyTypes'] = $request->proxyTypes;
        }

        if (null !== $request->realServers) {
            @$query['RealServers'] = $request->realServers;
        }

        if (null !== $request->rsType) {
            @$query['RsType'] = $request->rsType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDomainResource',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDomainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 域名资源.
     *
     * @param request - CreateDomainResourceRequest
     *
     * @returns CreateDomainResourceResponse
     *
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
     * 创建全局端口防护规则.
     *
     * @param request - CreateNetworkRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkRulesResponse
     *
     * @param CreateNetworkRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateNetworkRulesResponse
     */
    public function createNetworkRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipMode) {
            @$query['IpMode'] = $request->ipMode;
        }

        if (null !== $request->networkRules) {
            @$query['NetworkRules'] = $request->networkRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkRules',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建全局端口防护规则.
     *
     * @param request - CreateNetworkRulesRequest
     *
     * @returns CreateNetworkRulesResponse
     *
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
     * Terraform创建端口.
     *
     * @param request - CreatePortRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePortResponse
     *
     * @param CreatePortRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreatePortResponse
     */
    public function createPortWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendPort) {
            @$query['BackendPort'] = $request->backendPort;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->frontendProtocol) {
            @$query['FrontendProtocol'] = $request->frontendProtocol;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipMode) {
            @$query['IpMode'] = $request->ipMode;
        }

        if (null !== $request->proxyEnable) {
            @$query['ProxyEnable'] = $request->proxyEnable;
        }

        if (null !== $request->realServers) {
            @$query['RealServers'] = $request->realServers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePort',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terraform创建端口.
     *
     * @param request - CreatePortRequest
     *
     * @returns CreatePortResponse
     *
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
     * @param request - CreateSceneDefensePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSceneDefensePolicyResponse
     *
     * @param CreateSceneDefensePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateSceneDefensePolicyResponse
     */
    public function createSceneDefensePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSceneDefensePolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSceneDefensePolicyRequest
     *
     * @returns CreateSceneDefensePolicyResponse
     *
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
     * @param request - CreateSchedulerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSchedulerRuleResponse
     *
     * @param CreateSchedulerRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSchedulerRuleResponse
     */
    public function createSchedulerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->param) {
            @$query['Param'] = $request->param;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSchedulerRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSchedulerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSchedulerRuleRequest
     *
     * @returns CreateSchedulerRuleResponse
     *
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
     * 创建资源标签.
     *
     * @param request - CreateTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagResourcesResponse
     *
     * @param CreateTagResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTagResourcesResponse
     */
    public function createTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTagResources',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建资源标签.
     *
     * @param request - CreateTagResourcesRequest
     *
     * @returns CreateTagResourcesResponse
     *
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
     * @deprecated openAPI CreateWebCCRule is deprecated, please use ddoscoo::2020-01-01::ConfigWebCCRuleV2 instead
     *
     * @param request - CreateWebCCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWebCCRuleResponse
     *
     * @param CreateWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWebCCRuleResponse
     */
    public function createWebCCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->act) {
            @$query['Act'] = $request->act;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->uri) {
            @$query['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWebCCRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * @deprecated openAPI CreateWebCCRule is deprecated, please use ddoscoo::2020-01-01::ConfigWebCCRuleV2 instead
     *
     * @param request - CreateWebCCRuleRequest
     *
     * @returns CreateWebCCRuleResponse
     *
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
     * @param request - CreateWebRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWebRuleResponse
     *
     * @param CreateWebRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateWebRuleResponse
     */
    public function createWebRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseId) {
            @$query['DefenseId'] = $request->defenseId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->httpsExt) {
            @$query['HttpsExt'] = $request->httpsExt;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rsType) {
            @$query['RsType'] = $request->rsType;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWebRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWebRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateWebRuleRequest
     *
     * @returns CreateWebRuleResponse
     *
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
     * @param request - DeleteAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAsyncTaskResponse
     *
     * @param DeleteAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAsyncTaskResponse
     */
    public function deleteAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAsyncTask',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAsyncTaskRequest
     *
     * @returns DeleteAsyncTaskResponse
     *
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
     * @param request - DeleteAutoCcBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoCcBlacklistResponse
     *
     * @param DeleteAutoCcBlacklistRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAutoCcBlacklistResponse
     */
    public function deleteAutoCcBlacklistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blacklist) {
            @$query['Blacklist'] = $request->blacklist;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAutoCcBlacklist',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutoCcBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAutoCcBlacklistRequest
     *
     * @returns DeleteAutoCcBlacklistResponse
     *
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
     * @param request - DeleteAutoCcWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoCcWhitelistResponse
     *
     * @param DeleteAutoCcWhitelistRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAutoCcWhitelistResponse
     */
    public function deleteAutoCcWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->whitelist) {
            @$query['Whitelist'] = $request->whitelist;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAutoCcWhitelist',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutoCcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAutoCcWhitelistRequest
     *
     * @returns DeleteAutoCcWhitelistResponse
     *
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
     * 删除域名资源.
     *
     * @param request - DeleteDomainResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResourceResponse
     *
     * @param DeleteDomainResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDomainResourceResponse
     */
    public function deleteDomainResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomainResource',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除域名资源.
     *
     * @param request - DeleteDomainResourceRequest
     *
     * @returns DeleteDomainResourceResponse
     *
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
     * 删除端口转发规则.
     *
     * @param request - DeleteNetworkRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkRuleResponse
     *
     * @param DeleteNetworkRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteNetworkRuleResponse
     */
    public function deleteNetworkRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkRule) {
            @$query['NetworkRule'] = $request->networkRule;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除端口转发规则.
     *
     * @param request - DeleteNetworkRuleRequest
     *
     * @returns DeleteNetworkRuleResponse
     *
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
     * @param request - DeletePortRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePortResponse
     *
     * @param DeletePortRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeletePortResponse
     */
    public function deletePortWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendPort) {
            @$query['BackendPort'] = $request->backendPort;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->frontendProtocol) {
            @$query['FrontendProtocol'] = $request->frontendProtocol;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->realServers) {
            @$query['RealServers'] = $request->realServers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePort',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeletePortRequest
     *
     * @returns DeletePortResponse
     *
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
     * @param request - DeleteSceneDefensePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSceneDefensePolicyResponse
     *
     * @param DeleteSceneDefensePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSceneDefensePolicyResponse
     */
    public function deleteSceneDefensePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSceneDefensePolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteSceneDefensePolicyRequest
     *
     * @returns DeleteSceneDefensePolicyResponse
     *
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
     * @param request - DeleteSchedulerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSchedulerRuleResponse
     *
     * @param DeleteSchedulerRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSchedulerRuleResponse
     */
    public function deleteSchedulerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSchedulerRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSchedulerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteSchedulerRuleRequest
     *
     * @returns DeleteSchedulerRuleResponse
     *
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
     * @param request - DeleteTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagResourcesResponse
     *
     * @param DeleteTagResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteTagResourcesResponse
     */
    public function deleteTagResourcesWithOptions($request, $runtime)
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

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
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
            'action' => 'DeleteTagResources',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteTagResourcesRequest
     *
     * @returns DeleteTagResourcesResponse
     *
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
     * @deprecated openAPI DeleteWebCCRule is deprecated, please use ddoscoo::2020-01-01::DeleteWebCCRuleV2 instead
     *
     * @param request - DeleteWebCCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebCCRuleResponse
     *
     * @param DeleteWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWebCCRuleResponse
     */
    public function deleteWebCCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWebCCRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * @deprecated openAPI DeleteWebCCRule is deprecated, please use ddoscoo::2020-01-01::DeleteWebCCRuleV2 instead
     *
     * @param request - DeleteWebCCRuleRequest
     *
     * @returns DeleteWebCCRuleResponse
     *
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
     * 删除新版cc规则.
     *
     * @param request - DeleteWebCCRuleV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebCCRuleV2Response
     *
     * @param DeleteWebCCRuleV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteWebCCRuleV2Response
     */
    public function deleteWebCCRuleV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->ruleNames) {
            @$query['RuleNames'] = $request->ruleNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWebCCRuleV2',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWebCCRuleV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除新版cc规则.
     *
     * @param request - DeleteWebCCRuleV2Request
     *
     * @returns DeleteWebCCRuleV2Response
     *
     * @param DeleteWebCCRuleV2Request $request
     *
     * @return DeleteWebCCRuleV2Response
     */
    public function deleteWebCCRuleV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebCCRuleV2WithOptions($request, $runtime);
    }

    /**
     * 删除缓存规则.
     *
     * @param request - DeleteWebCacheCustomRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebCacheCustomRuleResponse
     *
     * @param DeleteWebCacheCustomRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteWebCacheCustomRuleResponse
     */
    public function deleteWebCacheCustomRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleNames) {
            @$query['RuleNames'] = $request->ruleNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWebCacheCustomRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWebCacheCustomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除缓存规则.
     *
     * @param request - DeleteWebCacheCustomRuleRequest
     *
     * @returns DeleteWebCacheCustomRuleResponse
     *
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
     * 删除精准域名规则.
     *
     * @param request - DeleteWebPreciseAccessRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebPreciseAccessRuleResponse
     *
     * @param DeleteWebPreciseAccessRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteWebPreciseAccessRuleResponse
     */
    public function deleteWebPreciseAccessRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleNames) {
            @$query['RuleNames'] = $request->ruleNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWebPreciseAccessRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWebPreciseAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除精准域名规则.
     *
     * @param request - DeleteWebPreciseAccessRuleRequest
     *
     * @returns DeleteWebPreciseAccessRuleResponse
     *
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
     * @param request - DeleteWebRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebRuleResponse
     *
     * @param DeleteWebRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteWebRuleResponse
     */
    public function deleteWebRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWebRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWebRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteWebRuleRequest
     *
     * @returns DeleteWebRuleResponse
     *
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
     * @param request - DescribeAsyncTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAsyncTasksResponse
     *
     * @param DescribeAsyncTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAsyncTasksResponse
     */
    public function describeAsyncTasksWithOptions($request, $runtime)
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
            'action' => 'DescribeAsyncTasks',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAsyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAsyncTasksRequest
     *
     * @returns DescribeAsyncTasksResponse
     *
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
     * @param request - DescribeAttackAnalysisMaxQpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAttackAnalysisMaxQpsResponse
     *
     * @param DescribeAttackAnalysisMaxQpsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAttackAnalysisMaxQpsResponse
     */
    public function describeAttackAnalysisMaxQpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAttackAnalysisMaxQps',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAttackAnalysisMaxQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAttackAnalysisMaxQpsRequest
     *
     * @returns DescribeAttackAnalysisMaxQpsResponse
     *
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
     * @param request - DescribeAutoCcBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoCcBlacklistResponse
     *
     * @param DescribeAutoCcBlacklistRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAutoCcBlacklistResponse
     */
    public function describeAutoCcBlacklistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoCcBlacklist',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoCcBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAutoCcBlacklistRequest
     *
     * @returns DescribeAutoCcBlacklistResponse
     *
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
     * @param request - DescribeAutoCcListCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoCcListCountResponse
     *
     * @param DescribeAutoCcListCountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAutoCcListCountResponse
     */
    public function describeAutoCcListCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoCcListCount',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoCcListCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAutoCcListCountRequest
     *
     * @returns DescribeAutoCcListCountResponse
     *
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
     * @param request - DescribeAutoCcWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoCcWhitelistResponse
     *
     * @param DescribeAutoCcWhitelistRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAutoCcWhitelistResponse
     */
    public function describeAutoCcWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoCcWhitelist',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoCcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAutoCcWhitelistRequest
     *
     * @returns DescribeAutoCcWhitelistResponse
     *
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
     * @param request - DescribeBackSourceCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackSourceCidrResponse
     *
     * @param DescribeBackSourceCidrRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackSourceCidr',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackSourceCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackSourceCidrRequest
     *
     * @returns DescribeBackSourceCidrResponse
     *
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
     * @param request - DescribeBlackholeStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBlackholeStatusResponse
     *
     * @param DescribeBlackholeStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeBlackholeStatusResponse
     */
    public function describeBlackholeStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBlackholeStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBlackholeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBlackholeStatusRequest
     *
     * @returns DescribeBlackholeStatusResponse
     *
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
     * @param request - DescribeBlockStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBlockStatusResponse
     *
     * @param DescribeBlockStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBlockStatusResponse
     */
    public function describeBlockStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBlockStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBlockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBlockStatusRequest
     *
     * @returns DescribeBlockStatusResponse
     *
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
     * @param request - DescribeCdnLinkageRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnLinkageRulesResponse
     *
     * @param DescribeCdnLinkageRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCdnLinkageRulesResponse
     */
    public function describeCdnLinkageRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

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
            'action' => 'DescribeCdnLinkageRules',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnLinkageRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCdnLinkageRulesRequest
     *
     * @returns DescribeCdnLinkageRulesResponse
     *
     * @param DescribeCdnLinkageRulesRequest $request
     *
     * @return DescribeCdnLinkageRulesResponse
     */
    public function describeCdnLinkageRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnLinkageRulesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeCertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCertsResponse
     *
     * @param DescribeCertsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeCertsResponse
     */
    public function describeCertsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCerts',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCertsRequest
     *
     * @returns DescribeCertsResponse
     *
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
     * @param request - DescribeCnameReusesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCnameReusesResponse
     *
     * @param DescribeCnameReusesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCnameReusesResponse
     */
    public function describeCnameReusesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCnameReuses',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCnameReusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCnameReusesRequest
     *
     * @returns DescribeCnameReusesResponse
     *
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
     * 查询DDoS事件.
     *
     * @param request - DescribeDDoSEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDoSEventsResponse
     *
     * @param DescribeDDoSEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDDoSEventsResponse
     */
    public function describeDDoSEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'action' => 'DescribeDDoSEvents',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDDoSEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询DDoS事件.
     *
     * @param request - DescribeDDoSEventsRequest
     *
     * @returns DescribeDDoSEventsResponse
     *
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
     * @param request - DescribeDDosAllEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDosAllEventListResponse
     *
     * @param DescribeDDosAllEventListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDDosAllEventListResponse
     */
    public function describeDDosAllEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDosAllEventList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDDosAllEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDDosAllEventListRequest
     *
     * @returns DescribeDDosAllEventListResponse
     *
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
     * @param request - DescribeDDosEventAreaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDosEventAreaResponse
     *
     * @param DescribeDDosEventAreaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDDosEventAreaResponse
     */
    public function describeDDosEventAreaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->range) {
            @$query['Range'] = $request->range;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDosEventArea',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDDosEventAreaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDDosEventAreaRequest
     *
     * @returns DescribeDDosEventAreaResponse
     *
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
     * @param request - DescribeDDosEventAttackTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDosEventAttackTypeResponse
     *
     * @param DescribeDDosEventAttackTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDDosEventAttackTypeResponse
     */
    public function describeDDosEventAttackTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDosEventAttackType',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDDosEventAttackTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDDosEventAttackTypeRequest
     *
     * @returns DescribeDDosEventAttackTypeResponse
     *
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
     * @param request - DescribeDDosEventIspRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDosEventIspResponse
     *
     * @param DescribeDDosEventIspRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDDosEventIspResponse
     */
    public function describeDDosEventIspWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->range) {
            @$query['Range'] = $request->range;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDosEventIsp',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDDosEventIspResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDDosEventIspRequest
     *
     * @returns DescribeDDosEventIspResponse
     *
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
     * @param request - DescribeDDosEventMaxRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDosEventMaxResponse
     *
     * @param DescribeDDosEventMaxRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDDosEventMaxResponse
     */
    public function describeDDosEventMaxWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDosEventMax',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDDosEventMaxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDDosEventMaxRequest
     *
     * @returns DescribeDDosEventMaxResponse
     *
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
     * @param request - DescribeDDosEventSrcIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDosEventSrcIpResponse
     *
     * @param DescribeDDosEventSrcIpRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDDosEventSrcIpResponse
     */
    public function describeDDosEventSrcIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->range) {
            @$query['Range'] = $request->range;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDosEventSrcIp',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDDosEventSrcIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDDosEventSrcIpRequest
     *
     * @returns DescribeDDosEventSrcIpResponse
     *
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
     * @param request - DescribeDefenseCountStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseCountStatisticsResponse
     *
     * @param DescribeDefenseCountStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseCountStatistics',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefenseCountStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDefenseCountStatisticsRequest
     *
     * @returns DescribeDefenseCountStatisticsResponse
     *
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
     * @param request - DescribeDefenseRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseRecordsResponse
     *
     * @param DescribeDefenseRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDefenseRecordsResponse
     */
    public function describeDefenseRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'action' => 'DescribeDefenseRecords',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefenseRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDefenseRecordsRequest
     *
     * @returns DescribeDefenseRecordsResponse
     *
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
     * 查询目的端口事件.
     *
     * @param request - DescribeDestinationPortEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDestinationPortEventResponse
     *
     * @param DescribeDestinationPortEventRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDestinationPortEventResponse
     */
    public function describeDestinationPortEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->range) {
            @$query['Range'] = $request->range;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDestinationPortEvent',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDestinationPortEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询目的端口事件.
     *
     * @param request - DescribeDestinationPortEventRequest
     *
     * @returns DescribeDestinationPortEventResponse
     *
     * @param DescribeDestinationPortEventRequest $request
     *
     * @return DescribeDestinationPortEventResponse
     */
    public function describeDestinationPortEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDestinationPortEventWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainAttackEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainAttackEventsResponse
     *
     * @param DescribeDomainAttackEventsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainAttackEventsResponse
     */
    public function describeDomainAttackEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'action' => 'DescribeDomainAttackEvents',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainAttackEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainAttackEventsRequest
     *
     * @returns DescribeDomainAttackEventsResponse
     *
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
     * 查询域名业务带宽流量.
     *
     * @param request - DescribeDomainBpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainBpsResponse
     *
     * @param DescribeDomainBpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDomainBpsResponse
     */
    public function describeDomainBpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainBps',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainBpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名业务带宽流量.
     *
     * @param request - DescribeDomainBpsRequest
     *
     * @returns DescribeDomainBpsResponse
     *
     * @param DescribeDomainBpsRequest $request
     *
     * @return DescribeDomainBpsResponse
     */
    public function describeDomainBps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBpsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainCcProtectSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainCcProtectSwitchResponse
     *
     * @param DescribeDomainCcProtectSwitchRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainCcProtectSwitchResponse
     */
    public function describeDomainCcProtectSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainCcProtectSwitch',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainCcProtectSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainCcProtectSwitchRequest
     *
     * @returns DescribeDomainCcProtectSwitchResponse
     *
     * @param DescribeDomainCcProtectSwitchRequest $request
     *
     * @return DescribeDomainCcProtectSwitchResponse
     */
    public function describeDomainCcProtectSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCcProtectSwitchWithOptions($request, $runtime);
    }

    /**
     * 查询HTTP2指纹.
     *
     * @param request - DescribeDomainH2FingerprintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainH2FingerprintResponse
     *
     * @param DescribeDomainH2FingerprintRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainH2FingerprintResponse
     */
    public function describeDomainH2FingerprintWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainH2Fingerprint',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainH2FingerprintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询HTTP2指纹.
     *
     * @param request - DescribeDomainH2FingerprintRequest
     *
     * @returns DescribeDomainH2FingerprintResponse
     *
     * @param DescribeDomainH2FingerprintRequest $request
     *
     * @return DescribeDomainH2FingerprintResponse
     */
    public function describeDomainH2Fingerprint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainH2FingerprintWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainOverviewResponse
     *
     * @param DescribeDomainOverviewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDomainOverviewResponse
     */
    public function describeDomainOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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
            'action' => 'DescribeDomainOverview',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainOverviewRequest
     *
     * @returns DescribeDomainOverviewResponse
     *
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
     * @param request - DescribeDomainQPSListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainQPSListResponse
     *
     * @param DescribeDomainQPSListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainQPSListResponse
     */
    public function describeDomainQPSListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
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
            'action' => 'DescribeDomainQPSList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainQPSListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainQPSListRequest
     *
     * @returns DescribeDomainQPSListResponse
     *
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
     * @param request - DescribeDomainResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainResourceResponse
     *
     * @param DescribeDomainResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDomainResourceResponse
     */
    public function describeDomainResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryDomainPattern) {
            @$query['QueryDomainPattern'] = $request->queryDomainPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainResource',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainResourceRequest
     *
     * @returns DescribeDomainResourceResponse
     *
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
     * 查询安全概要属性开关.
     *
     * @param request - DescribeDomainSecurityProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainSecurityProfileResponse
     *
     * @param DescribeDomainSecurityProfileRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainSecurityProfileResponse
     */
    public function describeDomainSecurityProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainSecurityProfile',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainSecurityProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询安全概要属性开关.
     *
     * @param request - DescribeDomainSecurityProfileRequest
     *
     * @returns DescribeDomainSecurityProfileResponse
     *
     * @param DescribeDomainSecurityProfileRequest $request
     *
     * @return DescribeDomainSecurityProfileResponse
     */
    public function describeDomainSecurityProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSecurityProfileWithOptions($request, $runtime);
    }

    /**
     * 查询各类响应状态码统计信息.
     *
     * @param request - DescribeDomainStatusCodeCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainStatusCodeCountResponse
     *
     * @param DescribeDomainStatusCodeCountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainStatusCodeCountResponse
     */
    public function describeDomainStatusCodeCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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
            'action' => 'DescribeDomainStatusCodeCount',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainStatusCodeCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询各类响应状态码统计信息.
     *
     * @param request - DescribeDomainStatusCodeCountRequest
     *
     * @returns DescribeDomainStatusCodeCountResponse
     *
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
     * 查询网站业务的响应状态码统计信息.
     *
     * @param request - DescribeDomainStatusCodeListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainStatusCodeListResponse
     *
     * @param DescribeDomainStatusCodeListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainStatusCodeListResponse
     */
    public function describeDomainStatusCodeListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
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
            'action' => 'DescribeDomainStatusCodeList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainStatusCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询网站业务的响应状态码统计信息.
     *
     * @param request - DescribeDomainStatusCodeListRequest
     *
     * @returns DescribeDomainStatusCodeListResponse
     *
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
     * @param request - DescribeDomainTopAttackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTopAttackListResponse
     *
     * @param DescribeDomainTopAttackListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainTopAttackListResponse
     */
    public function describeDomainTopAttackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
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
            'action' => 'DescribeDomainTopAttackList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTopAttackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainTopAttackListRequest
     *
     * @returns DescribeDomainTopAttackListResponse
     *
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
     * 查询域名 top fingerprint.
     *
     * @param request - DescribeDomainTopFingerprintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTopFingerprintResponse
     *
     * @param DescribeDomainTopFingerprintRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainTopFingerprintResponse
     */
    public function describeDomainTopFingerprintWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainTopFingerprint',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTopFingerprintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名 top fingerprint.
     *
     * @param request - DescribeDomainTopFingerprintRequest
     *
     * @returns DescribeDomainTopFingerprintResponse
     *
     * @param DescribeDomainTopFingerprintRequest $request
     *
     * @return DescribeDomainTopFingerprintResponse
     */
    public function describeDomainTopFingerprint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopFingerprintWithOptions($request, $runtime);
    }

    /**
     * 查询域名 top HttpMethod.
     *
     * @param request - DescribeDomainTopHttpMethodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTopHttpMethodResponse
     *
     * @param DescribeDomainTopHttpMethodRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainTopHttpMethodResponse
     */
    public function describeDomainTopHttpMethodWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainTopHttpMethod',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTopHttpMethodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名 top HttpMethod.
     *
     * @param request - DescribeDomainTopHttpMethodRequest
     *
     * @returns DescribeDomainTopHttpMethodResponse
     *
     * @param DescribeDomainTopHttpMethodRequest $request
     *
     * @return DescribeDomainTopHttpMethodResponse
     */
    public function describeDomainTopHttpMethod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopHttpMethodWithOptions($request, $runtime);
    }

    /**
     * 查询域名top referer.
     *
     * @param request - DescribeDomainTopRefererRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTopRefererResponse
     *
     * @param DescribeDomainTopRefererRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainTopRefererResponse
     */
    public function describeDomainTopRefererWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainTopReferer',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTopRefererResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名top referer.
     *
     * @param request - DescribeDomainTopRefererRequest
     *
     * @returns DescribeDomainTopRefererResponse
     *
     * @param DescribeDomainTopRefererRequest $request
     *
     * @return DescribeDomainTopRefererResponse
     */
    public function describeDomainTopReferer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopRefererWithOptions($request, $runtime);
    }

    /**
     * 查询top user agent.
     *
     * @param request - DescribeDomainTopUserAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTopUserAgentResponse
     *
     * @param DescribeDomainTopUserAgentRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainTopUserAgentResponse
     */
    public function describeDomainTopUserAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainTopUserAgent',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTopUserAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询top user agent.
     *
     * @param request - DescribeDomainTopUserAgentRequest
     *
     * @returns DescribeDomainTopUserAgentResponse
     *
     * @param DescribeDomainTopUserAgentRequest $request
     *
     * @return DescribeDomainTopUserAgentResponse
     */
    public function describeDomainTopUserAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopUserAgentWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainViewSourceCountriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainViewSourceCountriesResponse
     *
     * @param DescribeDomainViewSourceCountriesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainViewSourceCountriesResponse
     */
    public function describeDomainViewSourceCountriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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
            'action' => 'DescribeDomainViewSourceCountries',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainViewSourceCountriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainViewSourceCountriesRequest
     *
     * @returns DescribeDomainViewSourceCountriesResponse
     *
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
     * @param request - DescribeDomainViewSourceProvincesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainViewSourceProvincesResponse
     *
     * @param DescribeDomainViewSourceProvincesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainViewSourceProvincesResponse
     */
    public function describeDomainViewSourceProvincesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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
            'action' => 'DescribeDomainViewSourceProvinces',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainViewSourceProvincesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainViewSourceProvincesRequest
     *
     * @returns DescribeDomainViewSourceProvincesResponse
     *
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
     * @param request - DescribeDomainViewTopCostTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainViewTopCostTimeResponse
     *
     * @param DescribeDomainViewTopCostTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainViewTopCostTimeResponse
     */
    public function describeDomainViewTopCostTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->top) {
            @$query['Top'] = $request->top;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainViewTopCostTime',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainViewTopCostTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainViewTopCostTimeRequest
     *
     * @returns DescribeDomainViewTopCostTimeResponse
     *
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
     * @param request - DescribeDomainViewTopUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainViewTopUrlResponse
     *
     * @param DescribeDomainViewTopUrlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainViewTopUrlResponse
     */
    public function describeDomainViewTopUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->inerval) {
            @$query['Inerval'] = $request->inerval;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->top) {
            @$query['Top'] = $request->top;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainViewTopUrl',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainViewTopUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainViewTopUrlRequest
     *
     * @returns DescribeDomainViewTopUrlResponse
     *
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
     * @param request - DescribeDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainsResponse
     *
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomains',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainsRequest
     *
     * @returns DescribeDomainsResponse
     *
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
     * @param request - DescribeElasticBandwidthSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticBandwidthSpecResponse
     *
     * @param DescribeElasticBandwidthSpecRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpecWithOptions($request, $runtime)
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
            'action' => 'DescribeElasticBandwidthSpec',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticBandwidthSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeElasticBandwidthSpecRequest
     *
     * @returns DescribeElasticBandwidthSpecResponse
     *
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
     * 高防弹性qps曲线图.
     *
     * @param request - DescribeElasticQpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticQpsResponse
     *
     * @param DescribeElasticQpsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeElasticQpsResponse
     */
    public function describeElasticQpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticQps',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 高防弹性qps曲线图.
     *
     * @param request - DescribeElasticQpsRequest
     *
     * @returns DescribeElasticQpsResponse
     *
     * @param DescribeElasticQpsRequest $request
     *
     * @return DescribeElasticQpsResponse
     */
    public function describeElasticQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticQpsWithOptions($request, $runtime);
    }

    /**
     * 查询qps日95流量图.
     *
     * @param request - DescribeElasticQpsRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticQpsRecordResponse
     *
     * @param DescribeElasticQpsRecordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeElasticQpsRecordResponse
     */
    public function describeElasticQpsRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticQpsRecord',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticQpsRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询qps日95流量图.
     *
     * @param request - DescribeElasticQpsRecordRequest
     *
     * @returns DescribeElasticQpsRecordResponse
     *
     * @param DescribeElasticQpsRecordRequest $request
     *
     * @return DescribeElasticQpsRecordResponse
     */
    public function describeElasticQpsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticQpsRecordWithOptions($request, $runtime);
    }

    /**
     * 获取header.
     *
     * @param request - DescribeHeadersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHeadersResponse
     *
     * @param DescribeHeadersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeHeadersResponse
     */
    public function describeHeadersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHeaders',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHeadersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取header.
     *
     * @param request - DescribeHeadersRequest
     *
     * @returns DescribeHeadersResponse
     *
     * @param DescribeHeadersRequest $request
     *
     * @return DescribeHeadersResponse
     */
    public function describeHeaders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHeadersWithOptions($request, $runtime);
    }

    /**
     * 查询健康检查列表.
     *
     * @param request - DescribeHealthCheckListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHealthCheckListResponse
     *
     * @param DescribeHealthCheckListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHealthCheckListResponse
     */
    public function describeHealthCheckListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkRules) {
            @$query['NetworkRules'] = $request->networkRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHealthCheckList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHealthCheckListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询健康检查列表.
     *
     * @param request - DescribeHealthCheckListRequest
     *
     * @returns DescribeHealthCheckListResponse
     *
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
     * @param request - DescribeHealthCheckStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHealthCheckStatusResponse
     *
     * @param DescribeHealthCheckStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHealthCheckStatusResponse
     */
    public function describeHealthCheckStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkRules) {
            @$query['NetworkRules'] = $request->networkRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHealthCheckStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHealthCheckStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeHealthCheckStatusRequest
     *
     * @returns DescribeHealthCheckStatusResponse
     *
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
     * @param request - DescribeInstanceDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceDetailsResponse
     *
     * @param DescribeInstanceDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceDetails',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceDetailsRequest
     *
     * @returns DescribeInstanceDetailsResponse
     *
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
     * 查询实例扩展信息用户terraform.
     *
     * @param request - DescribeInstanceExtRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceExtResponse
     *
     * @param DescribeInstanceExtRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceExtResponse
     */
    public function describeInstanceExtWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceExt',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceExtResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例扩展信息用户terraform.
     *
     * @param request - DescribeInstanceExtRequest
     *
     * @returns DescribeInstanceExtResponse
     *
     * @param DescribeInstanceExtRequest $request
     *
     * @return DescribeInstanceExtResponse
     */
    public function describeInstanceExt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceExtWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstanceIdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceIdsResponse
     *
     * @param DescribeInstanceIdsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceIdsResponse
     */
    public function describeInstanceIdsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceIds',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceIdsRequest
     *
     * @returns DescribeInstanceIdsResponse
     *
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
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSpecs',
            'version' => '2020-01-01',
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
     * @param request - DescribeInstanceStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceStatisticsResponse
     *
     * @param DescribeInstanceStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceStatistics',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceStatisticsRequest
     *
     * @returns DescribeInstanceStatisticsResponse
     *
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
     * @param request - DescribeInstanceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceStatusResponse
     *
     * @param DescribeInstanceStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceStatusResponse
     */
    public function describeInstanceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceStatusRequest
     *
     * @returns DescribeInstanceStatusResponse
     *
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
     * 查询实例列表.
     *
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->expireEndTime) {
            @$query['ExpireEndTime'] = $request->expireEndTime;
        }

        if (null !== $request->expireStartTime) {
            @$query['ExpireStartTime'] = $request->expireStartTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例列表.
     *
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
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
     * 展示全局模板规则.
     *
     * @param request - DescribeL7GlobalRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeL7GlobalRuleResponse
     *
     * @param DescribeL7GlobalRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeL7GlobalRuleResponse
     */
    public function describeL7GlobalRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeL7GlobalRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeL7GlobalRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 展示全局模板规则.
     *
     * @param request - DescribeL7GlobalRuleRequest
     *
     * @returns DescribeL7GlobalRuleResponse
     *
     * @param DescribeL7GlobalRuleRequest $request
     *
     * @return DescribeL7GlobalRuleResponse
     */
    public function describeL7GlobalRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeL7GlobalRuleWithOptions($request, $runtime);
    }

    /**
     * 查询域名接入回源策略.
     *
     * @param request - DescribeL7RsPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeL7RsPolicyResponse
     *
     * @param DescribeL7RsPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeL7RsPolicyResponse
     */
    public function describeL7RsPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->realServers) {
            @$query['RealServers'] = $request->realServers;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeL7RsPolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeL7RsPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名接入回源策略.
     *
     * @param request - DescribeL7RsPolicyRequest
     *
     * @returns DescribeL7RsPolicyResponse
     *
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
     * 查询长连接.
     *
     * @param request - DescribeL7UsKeepaliveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeL7UsKeepaliveResponse
     *
     * @param DescribeL7UsKeepaliveRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeL7UsKeepaliveResponse
     */
    public function describeL7UsKeepaliveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeL7UsKeepalive',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeL7UsKeepaliveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询长连接.
     *
     * @param request - DescribeL7UsKeepaliveRequest
     *
     * @returns DescribeL7UsKeepaliveResponse
     *
     * @param DescribeL7UsKeepaliveRequest $request
     *
     * @return DescribeL7UsKeepaliveResponse
     */
    public function describeL7UsKeepalive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeL7UsKeepaliveWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeLayer4RulePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLayer4RulePolicyResponse
     *
     * @param DescribeLayer4RulePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLayer4RulePolicyResponse
     */
    public function describeLayer4RulePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLayer4RulePolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLayer4RulePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeLayer4RulePolicyRequest
     *
     * @returns DescribeLayer4RulePolicyResponse
     *
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
     * @param request - DescribeLogStoreExistStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogStoreExistStatusResponse
     *
     * @param DescribeLogStoreExistStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogStoreExistStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogStoreExistStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeLogStoreExistStatusRequest
     *
     * @returns DescribeLogStoreExistStatusResponse
     *
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
     * @param request - DescribeNetworkRegionBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkRegionBlockResponse
     *
     * @param DescribeNetworkRegionBlockRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeNetworkRegionBlockResponse
     */
    public function describeNetworkRegionBlockWithOptions($request, $runtime)
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
            'action' => 'DescribeNetworkRegionBlock',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkRegionBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeNetworkRegionBlockRequest
     *
     * @returns DescribeNetworkRegionBlockResponse
     *
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
     * @param request - DescribeNetworkRuleAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkRuleAttributesResponse
     *
     * @param DescribeNetworkRuleAttributesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeNetworkRuleAttributesResponse
     */
    public function describeNetworkRuleAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkRules) {
            @$query['NetworkRules'] = $request->networkRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNetworkRuleAttributes',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkRuleAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeNetworkRuleAttributesRequest
     *
     * @returns DescribeNetworkRuleAttributesResponse
     *
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
     * 查询端口转发规则.
     *
     * @param request - DescribeNetworkRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkRulesResponse
     *
     * @param DescribeNetworkRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeNetworkRulesResponse
     */
    public function describeNetworkRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forwardProtocol) {
            @$query['ForwardProtocol'] = $request->forwardProtocol;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNetworkRules',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询端口转发规则.
     *
     * @param request - DescribeNetworkRulesRequest
     *
     * @returns DescribeNetworkRulesResponse
     *
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
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->entityObject) {
            @$query['EntityObject'] = $request->entityObject;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'version' => '2020-01-01',
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
     * Terraform 查询端口.
     *
     * @param request - DescribePortRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortResponse
     *
     * @param DescribePortRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribePortResponse
     */
    public function describePortWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->frontendProtocol) {
            @$query['FrontendProtocol'] = $request->frontendProtocol;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePort',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terraform 查询端口.
     *
     * @param request - DescribePortRequest
     *
     * @returns DescribePortResponse
     *
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
     * 查询端口攻击最大峰值
     *
     * @param request - DescribePortAttackMaxFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortAttackMaxFlowResponse
     *
     * @param DescribePortAttackMaxFlowRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePortAttackMaxFlowResponse
     */
    public function describePortAttackMaxFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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
            'action' => 'DescribePortAttackMaxFlow',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortAttackMaxFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询端口攻击最大峰值
     *
     * @param request - DescribePortAttackMaxFlowRequest
     *
     * @returns DescribePortAttackMaxFlowResponse
     *
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
     * @param request - DescribePortAutoCcStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortAutoCcStatusResponse
     *
     * @param DescribePortAutoCcStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePortAutoCcStatusResponse
     */
    public function describePortAutoCcStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePortAutoCcStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortAutoCcStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePortAutoCcStatusRequest
     *
     * @returns DescribePortAutoCcStatusResponse
     *
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
     * @param request - DescribePortCcAttackTopIPRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortCcAttackTopIPResponse
     *
     * @param DescribePortCcAttackTopIPRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePortCcAttackTopIPResponse
     */
    public function describePortCcAttackTopIPWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePortCcAttackTopIP',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortCcAttackTopIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePortCcAttackTopIPRequest
     *
     * @returns DescribePortCcAttackTopIPResponse
     *
     * @param DescribePortCcAttackTopIPRequest $request
     *
     * @return DescribePortCcAttackTopIPResponse
     */
    public function describePortCcAttackTopIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortCcAttackTopIPWithOptions($request, $runtime);
    }

    /**
     * 查询端口连接数统计
     *
     * @param request - DescribePortConnsCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortConnsCountResponse
     *
     * @param DescribePortConnsCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePortConnsCountResponse
     */
    public function describePortConnsCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
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
            'action' => 'DescribePortConnsCount',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortConnsCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询端口连接数统计
     *
     * @param request - DescribePortConnsCountRequest
     *
     * @returns DescribePortConnsCountResponse
     *
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
     * 查询端口连接列表.
     *
     * @param request - DescribePortConnsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortConnsListResponse
     *
     * @param DescribePortConnsListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePortConnsListResponse
     */
    public function describePortConnsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
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
            'action' => 'DescribePortConnsList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortConnsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询端口连接列表.
     *
     * @param request - DescribePortConnsListRequest
     *
     * @returns DescribePortConnsListResponse
     *
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
     * @param request - DescribePortFlowListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortFlowListResponse
     *
     * @param DescribePortFlowListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePortFlowListResponse
     */
    public function describePortFlowListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
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
            'action' => 'DescribePortFlowList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortFlowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePortFlowListRequest
     *
     * @returns DescribePortFlowListResponse
     *
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
     * @param request - DescribePortMaxConnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortMaxConnsResponse
     *
     * @param DescribePortMaxConnsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePortMaxConnsResponse
     */
    public function describePortMaxConnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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
            'action' => 'DescribePortMaxConns',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortMaxConnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePortMaxConnsRequest
     *
     * @returns DescribePortMaxConnsResponse
     *
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
     * @param request - DescribePortViewSourceCountriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortViewSourceCountriesResponse
     *
     * @param DescribePortViewSourceCountriesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribePortViewSourceCountriesResponse
     */
    public function describePortViewSourceCountriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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
            'action' => 'DescribePortViewSourceCountries',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortViewSourceCountriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePortViewSourceCountriesRequest
     *
     * @returns DescribePortViewSourceCountriesResponse
     *
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
     * @param request - DescribePortViewSourceIspsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortViewSourceIspsResponse
     *
     * @param DescribePortViewSourceIspsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePortViewSourceIspsResponse
     */
    public function describePortViewSourceIspsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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
            'action' => 'DescribePortViewSourceIsps',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortViewSourceIspsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePortViewSourceIspsRequest
     *
     * @returns DescribePortViewSourceIspsResponse
     *
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
     * @param request - DescribePortViewSourceProvincesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePortViewSourceProvincesResponse
     *
     * @param DescribePortViewSourceProvincesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribePortViewSourceProvincesResponse
     */
    public function describePortViewSourceProvincesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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
            'action' => 'DescribePortViewSourceProvinces',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePortViewSourceProvincesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePortViewSourceProvincesRequest
     *
     * @returns DescribePortViewSourceProvincesResponse
     *
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
     * @param request - DescribeSceneDefenseObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSceneDefenseObjectsResponse
     *
     * @param DescribeSceneDefenseObjectsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSceneDefenseObjectsResponse
     */
    public function describeSceneDefenseObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSceneDefenseObjects',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSceneDefenseObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSceneDefenseObjectsRequest
     *
     * @returns DescribeSceneDefenseObjectsResponse
     *
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
     * @param request - DescribeSceneDefensePoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSceneDefensePoliciesResponse
     *
     * @param DescribeSceneDefensePoliciesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSceneDefensePoliciesResponse
     */
    public function describeSceneDefensePoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSceneDefensePolicies',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSceneDefensePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSceneDefensePoliciesRequest
     *
     * @returns DescribeSceneDefensePoliciesResponse
     *
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
     * @param request - DescribeSchedulerRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSchedulerRulesResponse
     *
     * @param DescribeSchedulerRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSchedulerRulesResponse
     */
    public function describeSchedulerRulesWithOptions($request, $runtime)
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

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSchedulerRules',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSchedulerRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSchedulerRulesRequest
     *
     * @returns DescribeSchedulerRulesResponse
     *
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
     * 查询目的限速事件列表.
     *
     * @param request - DescribeSlaEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlaEventListResponse
     *
     * @param DescribeSlaEventListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSlaEventListResponse
     */
    public function describeSlaEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlaEventList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlaEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询目的限速事件列表.
     *
     * @param request - DescribeSlaEventListRequest
     *
     * @returns DescribeSlaEventListResponse
     *
     * @param DescribeSlaEventListRequest $request
     *
     * @return DescribeSlaEventListResponse
     */
    public function describeSlaEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlaEventListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSlsAuthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsAuthStatusResponse
     *
     * @param DescribeSlsAuthStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlsAuthStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlsAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSlsAuthStatusRequest
     *
     * @returns DescribeSlsAuthStatusResponse
     *
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
     * 查询全量日志信息.
     *
     * @param request - DescribeSlsLogstoreInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsLogstoreInfoResponse
     *
     * @param DescribeSlsLogstoreInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlsLogstoreInfo',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlsLogstoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询全量日志信息.
     *
     * @param request - DescribeSlsLogstoreInfoRequest
     *
     * @returns DescribeSlsLogstoreInfoResponse
     *
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
     * @param request - DescribeSlsOpenStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsOpenStatusResponse
     *
     * @param DescribeSlsOpenStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlsOpenStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlsOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSlsOpenStatusRequest
     *
     * @returns DescribeSlsOpenStatusResponse
     *
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
     * @param request - DescribeStsGrantStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStsGrantStatusResponse
     *
     * @param DescribeStsGrantStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeStsGrantStatusResponse
     */
    public function describeStsGrantStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStsGrantStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStsGrantStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeStsGrantStatusRequest
     *
     * @returns DescribeStsGrantStatusResponse
     *
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
     * 查询系统日志.
     *
     * @param request - DescribeSystemLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemLogResponse
     *
     * @param DescribeSystemLogRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSystemLogResponse
     */
    public function describeSystemLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->entityObject) {
            @$query['EntityObject'] = $request->entityObject;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSystemLog',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSystemLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询系统日志.
     *
     * @param request - DescribeSystemLogRequest
     *
     * @returns DescribeSystemLogResponse
     *
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
     * @param request - DescribeTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagKeysResponse
     *
     * @param DescribeTagKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTagKeysResponse
     */
    public function describeTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagKeys',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeTagKeysRequest
     *
     * @returns DescribeTagKeysResponse
     *
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
     * @param request - DescribeTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagResourcesResponse
     *
     * @param DescribeTagResourcesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeTagResourcesResponse
     */
    public function describeTagResourcesWithOptions($request, $runtime)
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

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagResources',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeTagResourcesRequest
     *
     * @returns DescribeTagResourcesResponse
     *
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
     * 新峰值接口.
     *
     * @param request - DescribeTotalAttackMaxFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTotalAttackMaxFlowResponse
     *
     * @param DescribeTotalAttackMaxFlowRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeTotalAttackMaxFlowResponse
     */
    public function describeTotalAttackMaxFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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
            'action' => 'DescribeTotalAttackMaxFlow',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTotalAttackMaxFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新峰值接口.
     *
     * @param request - DescribeTotalAttackMaxFlowRequest
     *
     * @returns DescribeTotalAttackMaxFlowResponse
     *
     * @param DescribeTotalAttackMaxFlowRequest $request
     *
     * @return DescribeTotalAttackMaxFlowResponse
     */
    public function describeTotalAttackMaxFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTotalAttackMaxFlowWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeUdpReflectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUdpReflectResponse
     *
     * @param DescribeUdpReflectRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUdpReflectResponse
     */
    public function describeUdpReflectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeUdpReflect',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUdpReflectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeUdpReflectRequest
     *
     * @returns DescribeUdpReflectResponse
     *
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
     * @param request - DescribeUnBlackholeCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUnBlackholeCountResponse
     *
     * @param DescribeUnBlackholeCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUnBlackholeCountResponse
     */
    public function describeUnBlackholeCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUnBlackholeCount',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUnBlackholeCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeUnBlackholeCountRequest
     *
     * @returns DescribeUnBlackholeCountResponse
     *
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
     * 查询解封次数.
     *
     * @param request - DescribeUnBlockCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUnBlockCountResponse
     *
     * @param DescribeUnBlockCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUnBlockCountResponse
     */
    public function describeUnBlockCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUnBlockCount',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUnBlockCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询解封次数.
     *
     * @param request - DescribeUnBlockCountRequest
     *
     * @returns DescribeUnBlockCountResponse
     *
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
     * 查询域名的全量日志分发状态
     *
     * @param request - DescribeWebAccessLogDispatchStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebAccessLogDispatchStatusResponse
     *
     * @param DescribeWebAccessLogDispatchStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeWebAccessLogDispatchStatusResponse
     */
    public function describeWebAccessLogDispatchStatusWithOptions($request, $runtime)
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
            'action' => 'DescribeWebAccessLogDispatchStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebAccessLogDispatchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名的全量日志分发状态
     *
     * @param request - DescribeWebAccessLogDispatchStatusRequest
     *
     * @returns DescribeWebAccessLogDispatchStatusResponse
     *
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
     * @param request - DescribeWebAccessLogEmptyCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebAccessLogEmptyCountResponse
     *
     * @param DescribeWebAccessLogEmptyCountRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeWebAccessLogEmptyCountResponse
     */
    public function describeWebAccessLogEmptyCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebAccessLogEmptyCount',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebAccessLogEmptyCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeWebAccessLogEmptyCountRequest
     *
     * @returns DescribeWebAccessLogEmptyCountResponse
     *
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
     * @param request - DescribeWebAccessLogStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebAccessLogStatusResponse
     *
     * @param DescribeWebAccessLogStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWebAccessLogStatusResponse
     */
    public function describeWebAccessLogStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebAccessLogStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebAccessLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeWebAccessLogStatusRequest
     *
     * @returns DescribeWebAccessLogStatusResponse
     *
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
     * @param request - DescribeWebAccessModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebAccessModeResponse
     *
     * @param DescribeWebAccessModeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeWebAccessModeResponse
     */
    public function describeWebAccessModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebAccessMode',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeWebAccessModeRequest
     *
     * @returns DescribeWebAccessModeResponse
     *
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
     * @param request - DescribeWebAreaBlockConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebAreaBlockConfigsResponse
     *
     * @param DescribeWebAreaBlockConfigsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeWebAreaBlockConfigsResponse
     */
    public function describeWebAreaBlockConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebAreaBlockConfigs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebAreaBlockConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeWebAreaBlockConfigsRequest
     *
     * @returns DescribeWebAreaBlockConfigsResponse
     *
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
     * @deprecated openAPI DescribeWebCCRules is deprecated, please use ddoscoo::2020-01-01::ConfigWebCCRuleV2 instead
     *
     * @param request - DescribeWebCCRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebCCRulesResponse
     *
     * @param DescribeWebCCRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeWebCCRulesResponse
     */
    public function describeWebCCRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

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
            'action' => 'DescribeWebCCRules',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebCCRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * @deprecated openAPI DescribeWebCCRules is deprecated, please use ddoscoo::2020-01-01::ConfigWebCCRuleV2 instead
     *
     * @param request - DescribeWebCCRulesRequest
     *
     * @returns DescribeWebCCRulesResponse
     *
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
     * 查询新版cc规则.
     *
     * @param request - DescribeWebCCRulesV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebCCRulesV2Response
     *
     * @param DescribeWebCCRulesV2Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeWebCCRulesV2Response
     */
    public function describeWebCCRulesV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebCCRulesV2',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebCCRulesV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询新版cc规则.
     *
     * @param request - DescribeWebCCRulesV2Request
     *
     * @returns DescribeWebCCRulesV2Response
     *
     * @param DescribeWebCCRulesV2Request $request
     *
     * @return DescribeWebCCRulesV2Response
     */
    public function describeWebCCRulesV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebCCRulesV2WithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeWebCacheConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebCacheConfigsResponse
     *
     * @param DescribeWebCacheConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebCacheConfigsResponse
     */
    public function describeWebCacheConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebCacheConfigs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebCacheConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeWebCacheConfigsRequest
     *
     * @returns DescribeWebCacheConfigsResponse
     *
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
     * @param request - DescribeWebCcProtectSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebCcProtectSwitchResponse
     *
     * @param DescribeWebCcProtectSwitchRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWebCcProtectSwitchResponse
     */
    public function describeWebCcProtectSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebCcProtectSwitch',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebCcProtectSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeWebCcProtectSwitchRequest
     *
     * @returns DescribeWebCcProtectSwitchResponse
     *
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
     * @param request - DescribeWebCustomPortsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebCustomPortsResponse
     *
     * @param DescribeWebCustomPortsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeWebCustomPortsResponse
     */
    public function describeWebCustomPortsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebCustomPorts',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebCustomPortsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeWebCustomPortsRequest
     *
     * @returns DescribeWebCustomPortsResponse
     *
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
     * 查询网站业务关联的DDoS高防实例信息.
     *
     * @param request - DescribeWebInstanceRelationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebInstanceRelationsResponse
     *
     * @param DescribeWebInstanceRelationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeWebInstanceRelationsResponse
     */
    public function describeWebInstanceRelationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebInstanceRelations',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebInstanceRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询网站业务关联的DDoS高防实例信息.
     *
     * @param request - DescribeWebInstanceRelationsRequest
     *
     * @returns DescribeWebInstanceRelationsResponse
     *
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
     * 查询网站业务精确访问控制规则.
     *
     * @param request - DescribeWebPreciseAccessRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebPreciseAccessRuleResponse
     *
     * @param DescribeWebPreciseAccessRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeWebPreciseAccessRuleResponse
     */
    public function describeWebPreciseAccessRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebPreciseAccessRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebPreciseAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询网站业务精确访问控制规则.
     *
     * @param request - DescribeWebPreciseAccessRuleRequest
     *
     * @returns DescribeWebPreciseAccessRuleResponse
     *
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
     * 查询报表top IP.
     *
     * @param request - DescribeWebReportTopIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebReportTopIpResponse
     *
     * @param DescribeWebReportTopIpRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeWebReportTopIpResponse
     */
    public function describeWebReportTopIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->top) {
            @$query['Top'] = $request->top;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebReportTopIp',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebReportTopIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询报表top IP.
     *
     * @param request - DescribeWebReportTopIpRequest
     *
     * @returns DescribeWebReportTopIpResponse
     *
     * @param DescribeWebReportTopIpRequest $request
     *
     * @return DescribeWebReportTopIpResponse
     */
    public function describeWebReportTopIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebReportTopIpWithOptions($request, $runtime);
    }

    /**
     * 查询域名接入规则.
     *
     * @param request - DescribeWebRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebRulesResponse
     *
     * @param DescribeWebRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeWebRulesResponse
     */
    public function describeWebRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cname) {
            @$query['Cname'] = $request->cname;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryDomainPattern) {
            @$query['QueryDomainPattern'] = $request->queryDomainPattern;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebRules',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWebRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名接入规则.
     *
     * @param request - DescribeWebRulesRequest
     *
     * @returns DescribeWebRulesResponse
     *
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
     * 查询场景策略防护对象
     *
     * @param request - DetachSceneDefenseObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachSceneDefenseObjectResponse
     *
     * @param DetachSceneDefenseObjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetachSceneDefenseObjectResponse
     */
    public function detachSceneDefenseObjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->objects) {
            @$query['Objects'] = $request->objects;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachSceneDefenseObject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachSceneDefenseObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询场景策略防护对象
     *
     * @param request - DetachSceneDefenseObjectRequest
     *
     * @returns DetachSceneDefenseObjectResponse
     *
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
     * @param request - DisableSceneDefensePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSceneDefensePolicyResponse
     *
     * @param DisableSceneDefensePolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableSceneDefensePolicyResponse
     */
    public function disableSceneDefensePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableSceneDefensePolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableSceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableSceneDefensePolicyRequest
     *
     * @returns DisableSceneDefensePolicyResponse
     *
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
     * @param request - DisableWebAccessLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableWebAccessLogConfigResponse
     *
     * @param DisableWebAccessLogConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableWebAccessLogConfigResponse
     */
    public function disableWebAccessLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableWebAccessLogConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableWebAccessLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableWebAccessLogConfigRequest
     *
     * @returns DisableWebAccessLogConfigResponse
     *
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
     * @param request - DisableWebCCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableWebCCResponse
     *
     * @param DisableWebCCRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DisableWebCCResponse
     */
    public function disableWebCCWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableWebCC',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableWebCCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableWebCCRequest
     *
     * @returns DisableWebCCResponse
     *
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
     * @param request - DisableWebCCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableWebCCRuleResponse
     *
     * @param DisableWebCCRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DisableWebCCRuleResponse
     */
    public function disableWebCCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableWebCCRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableWebCCRuleRequest
     *
     * @returns DisableWebCCRuleResponse
     *
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
     * 查询CC黑名单.
     *
     * @param request - EmptyAutoCcBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EmptyAutoCcBlacklistResponse
     *
     * @param EmptyAutoCcBlacklistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EmptyAutoCcBlacklistResponse
     */
    public function emptyAutoCcBlacklistWithOptions($request, $runtime)
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
            'action' => 'EmptyAutoCcBlacklist',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EmptyAutoCcBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询CC黑名单.
     *
     * @param request - EmptyAutoCcBlacklistRequest
     *
     * @returns EmptyAutoCcBlacklistResponse
     *
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
     * 清空CC白名单.
     *
     * @param request - EmptyAutoCcWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EmptyAutoCcWhitelistResponse
     *
     * @param EmptyAutoCcWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EmptyAutoCcWhitelistResponse
     */
    public function emptyAutoCcWhitelistWithOptions($request, $runtime)
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
            'action' => 'EmptyAutoCcWhitelist',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EmptyAutoCcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 清空CC白名单.
     *
     * @param request - EmptyAutoCcWhitelistRequest
     *
     * @returns EmptyAutoCcWhitelistResponse
     *
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
     * 清空全量日志库.
     *
     * @param request - EmptySlsLogstoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EmptySlsLogstoreResponse
     *
     * @param EmptySlsLogstoreRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EmptySlsLogstoreResponse
     */
    public function emptySlsLogstoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EmptySlsLogstore',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EmptySlsLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 清空全量日志库.
     *
     * @param request - EmptySlsLogstoreRequest
     *
     * @returns EmptySlsLogstoreResponse
     *
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
     * @param request - EnableSceneDefensePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSceneDefensePolicyResponse
     *
     * @param EnableSceneDefensePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableSceneDefensePolicyResponse
     */
    public function enableSceneDefensePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableSceneDefensePolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableSceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableSceneDefensePolicyRequest
     *
     * @returns EnableSceneDefensePolicyResponse
     *
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
     * @param request - EnableWebAccessLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableWebAccessLogConfigResponse
     *
     * @param EnableWebAccessLogConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableWebAccessLogConfigResponse
     */
    public function enableWebAccessLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableWebAccessLogConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableWebAccessLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableWebAccessLogConfigRequest
     *
     * @returns EnableWebAccessLogConfigResponse
     *
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
     * @param request - EnableWebCCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableWebCCResponse
     *
     * @param EnableWebCCRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableWebCCResponse
     */
    public function enableWebCCWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableWebCC',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableWebCCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableWebCCRequest
     *
     * @returns EnableWebCCResponse
     *
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
     * @param request - EnableWebCCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableWebCCRuleResponse
     *
     * @param EnableWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EnableWebCCRuleResponse
     */
    public function enableWebCCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableWebCCRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableWebCCRuleRequest
     *
     * @returns EnableWebCCRuleResponse
     *
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
     * 95计费切换模式.
     *
     * @param request - ModifyBizBandWidthModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBizBandWidthModeResponse
     *
     * @param ModifyBizBandWidthModeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBizBandWidthModeResponse
     */
    public function modifyBizBandWidthModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBizBandWidthMode',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBizBandWidthModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 95计费切换模式.
     *
     * @param request - ModifyBizBandWidthModeRequest
     *
     * @returns ModifyBizBandWidthModeResponse
     *
     * @param ModifyBizBandWidthModeRequest $request
     *
     * @return ModifyBizBandWidthModeResponse
     */
    public function modifyBizBandWidthMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBizBandWidthModeWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyBlackholeStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBlackholeStatusResponse
     *
     * @param ModifyBlackholeStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyBlackholeStatusResponse
     */
    public function modifyBlackholeStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blackholeStatus) {
            @$query['BlackholeStatus'] = $request->blackholeStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBlackholeStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBlackholeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyBlackholeStatusRequest
     *
     * @returns ModifyBlackholeStatusResponse
     *
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
     * @param request - ModifyBlockStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBlockStatusResponse
     *
     * @param ModifyBlockStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyBlockStatusResponse
     */
    public function modifyBlockStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lines) {
            @$query['Lines'] = $request->lines;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBlockStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBlockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyBlockStatusRequest
     *
     * @returns ModifyBlockStatusResponse
     *
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
     * @param request - ModifyCnameReuseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCnameReuseResponse
     *
     * @param ModifyCnameReuseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCnameReuseResponse
     */
    public function modifyCnameReuseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cname) {
            @$query['Cname'] = $request->cname;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCnameReuse',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCnameReuseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyCnameReuseRequest
     *
     * @returns ModifyCnameReuseResponse
     *
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
     * 修改域名接入资源.
     *
     * @param request - ModifyDomainResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDomainResourceResponse
     *
     * @param ModifyDomainResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDomainResourceResponse
     */
    public function modifyDomainResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->httpsExt) {
            @$query['HttpsExt'] = $request->httpsExt;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->proxyTypes) {
            @$query['ProxyTypes'] = $request->proxyTypes;
        }

        if (null !== $request->realServers) {
            @$query['RealServers'] = $request->realServers;
        }

        if (null !== $request->rsType) {
            @$query['RsType'] = $request->rsType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDomainResource',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDomainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改域名接入资源.
     *
     * @param request - ModifyDomainResourceRequest
     *
     * @returns ModifyDomainResourceResponse
     *
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
     * @param request - ModifyElasticBandWidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyElasticBandWidthResponse
     *
     * @param ModifyElasticBandWidthRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->elasticBandwidth) {
            @$query['ElasticBandwidth'] = $request->elasticBandwidth;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyElasticBandWidth',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyElasticBandWidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyElasticBandWidthRequest
     *
     * @returns ModifyElasticBandWidthResponse
     *
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
     * 修改弹性业务带宽.
     *
     * @param request - ModifyElasticBizBandWidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyElasticBizBandWidthResponse
     *
     * @param ModifyElasticBizBandWidthRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyElasticBizBandWidthResponse
     */
    public function modifyElasticBizBandWidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->elasticBizBandwidth) {
            @$query['ElasticBizBandwidth'] = $request->elasticBizBandwidth;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyElasticBizBandWidth',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyElasticBizBandWidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改弹性业务带宽.
     *
     * @param request - ModifyElasticBizBandWidthRequest
     *
     * @returns ModifyElasticBizBandWidthResponse
     *
     * @param ModifyElasticBizBandWidthRequest $request
     *
     * @return ModifyElasticBizBandWidthResponse
     */
    public function modifyElasticBizBandWidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBizBandWidthWithOptions($request, $runtime);
    }

    /**
     * 开启/关闭弹性QPS 首次模式直接生效.
     *
     * @param request - ModifyElasticBizQpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyElasticBizQpsResponse
     *
     * @param ModifyElasticBizQpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyElasticBizQpsResponse
     */
    public function modifyElasticBizQpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->opsElasticQps) {
            @$query['OpsElasticQps'] = $request->opsElasticQps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyElasticBizQps',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyElasticBizQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启/关闭弹性QPS 首次模式直接生效.
     *
     * @param request - ModifyElasticBizQpsRequest
     *
     * @returns ModifyElasticBizQpsResponse
     *
     * @param ModifyElasticBizQpsRequest $request
     *
     * @return ModifyElasticBizQpsResponse
     */
    public function modifyElasticBizQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBizQpsWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyFullLogTtlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFullLogTtlResponse
     *
     * @param ModifyFullLogTtlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyFullLogTtl',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFullLogTtlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyFullLogTtlRequest
     *
     * @returns ModifyFullLogTtlResponse
     *
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
     * 流量标记.
     *
     * @param request - ModifyHeadersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHeadersResponse
     *
     * @param ModifyHeadersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyHeadersResponse
     */
    public function modifyHeadersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customHeaders) {
            @$query['CustomHeaders'] = $request->customHeaders;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->embeddedHeaders) {
            @$query['EmbeddedHeaders'] = $request->embeddedHeaders;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHeaders',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHeadersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 流量标记.
     *
     * @param request - ModifyHeadersRequest
     *
     * @returns ModifyHeadersResponse
     *
     * @param ModifyHeadersRequest $request
     *
     * @return ModifyHeadersResponse
     */
    public function modifyHeaders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHeadersWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyHealthCheckConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHealthCheckConfigResponse
     *
     * @param ModifyHealthCheckConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyHealthCheckConfigResponse
     */
    public function modifyHealthCheckConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forwardProtocol) {
            @$query['ForwardProtocol'] = $request->forwardProtocol;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHealthCheckConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHealthCheckConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyHealthCheckConfigRequest
     *
     * @returns ModifyHealthCheckConfigResponse
     *
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
     * @param request - ModifyHttp2EnableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHttp2EnableResponse
     *
     * @param ModifyHttp2EnableRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyHttp2EnableResponse
     */
    public function modifyHttp2EnableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHttp2Enable',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHttp2EnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyHttp2EnableRequest
     *
     * @returns ModifyHttp2EnableResponse
     *
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
     * 实例变配  类似bss的变配.
     *
     * @param request - ModifyInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceResponse
     *
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->baseBandwidth) {
            @$query['BaseBandwidth'] = $request->baseBandwidth;
        }

        if (null !== $request->domainCount) {
            @$query['DomainCount'] = $request->domainCount;
        }

        if (null !== $request->editionSale) {
            @$query['EditionSale'] = $request->editionSale;
        }

        if (null !== $request->functionVersion) {
            @$query['FunctionVersion'] = $request->functionVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->normalBandwidth) {
            @$query['NormalBandwidth'] = $request->normalBandwidth;
        }

        if (null !== $request->normalQps) {
            @$query['NormalQps'] = $request->normalQps;
        }

        if (null !== $request->portCount) {
            @$query['PortCount'] = $request->portCount;
        }

        if (null !== $request->productPlan) {
            @$query['ProductPlan'] = $request->productPlan;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->serviceBandwidth) {
            @$query['ServiceBandwidth'] = $request->serviceBandwidth;
        }

        if (null !== $request->servicePartner) {
            @$query['ServicePartner'] = $request->servicePartner;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实例变配  类似bss的变配.
     *
     * @param request - ModifyInstanceRequest
     *
     * @returns ModifyInstanceResponse
     *
     * @param ModifyInstanceRequest $request
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
    }

    /**
     * 修改实例备注.
     *
     * @param request - ModifyInstanceRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceRemarkResponse
     *
     * @param ModifyInstanceRemarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceRemark',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例备注.
     *
     * @param request - ModifyInstanceRemarkRequest
     *
     * @returns ModifyInstanceRemarkResponse
     *
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
     * 编辑端口转发规则的会话保持和DDoS防护策略设置.
     *
     * @param request - ModifyNetworkRuleAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNetworkRuleAttributeResponse
     *
     * @param ModifyNetworkRuleAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyNetworkRuleAttributeResponse
     */
    public function modifyNetworkRuleAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->forwardProtocol) {
            @$query['ForwardProtocol'] = $request->forwardProtocol;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->module) {
            @$query['Module'] = $request->module;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNetworkRuleAttribute',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNetworkRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑端口转发规则的会话保持和DDoS防护策略设置.
     *
     * @param request - ModifyNetworkRuleAttributeRequest
     *
     * @returns ModifyNetworkRuleAttributeResponse
     *
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
     * @param request - ModifyOcspStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOcspStatusResponse
     *
     * @param ModifyOcspStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyOcspStatusResponse
     */
    public function modifyOcspStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyOcspStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyOcspStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyOcspStatusRequest
     *
     * @returns ModifyOcspStatusResponse
     *
     * @param ModifyOcspStatusRequest $request
     *
     * @return ModifyOcspStatusResponse
     */
    public function modifyOcspStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOcspStatusWithOptions($request, $runtime);
    }

    /**
     * 修改端口接入配置.
     *
     * @param request - ModifyPortRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPortResponse
     *
     * @param ModifyPortRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyPortResponse
     */
    public function modifyPortWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendPort) {
            @$query['BackendPort'] = $request->backendPort;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->frontendProtocol) {
            @$query['FrontendProtocol'] = $request->frontendProtocol;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->proxyEnable) {
            @$query['ProxyEnable'] = $request->proxyEnable;
        }

        if (null !== $request->realServers) {
            @$query['RealServers'] = $request->realServers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPort',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改端口接入配置.
     *
     * @param request - ModifyPortRequest
     *
     * @returns ModifyPortResponse
     *
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
     * @param request - ModifyPortAutoCcStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPortAutoCcStatusResponse
     *
     * @param ModifyPortAutoCcStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyPortAutoCcStatusResponse
     */
    public function modifyPortAutoCcStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->switch) {
            @$query['Switch'] = $request->switch;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPortAutoCcStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPortAutoCcStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyPortAutoCcStatusRequest
     *
     * @returns ModifyPortAutoCcStatusResponse
     *
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
     * 修改弹性qps模式.
     *
     * @param request - ModifyQpsModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyQpsModeResponse
     *
     * @param ModifyQpsModeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyQpsModeResponse
     */
    public function modifyQpsModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyQpsMode',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyQpsModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改弹性qps模式.
     *
     * @param request - ModifyQpsModeRequest
     *
     * @returns ModifyQpsModeResponse
     *
     * @param ModifyQpsModeRequest $request
     *
     * @return ModifyQpsModeResponse
     */
    public function modifyQpsMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQpsModeWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifySceneDefensePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySceneDefensePolicyResponse
     *
     * @param ModifySceneDefensePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySceneDefensePolicyResponse
     */
    public function modifySceneDefensePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySceneDefensePolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySceneDefensePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifySceneDefensePolicyRequest
     *
     * @returns ModifySceneDefensePolicyResponse
     *
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
     * @param request - ModifySchedulerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySchedulerRuleResponse
     *
     * @param ModifySchedulerRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifySchedulerRuleResponse
     */
    public function modifySchedulerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->param) {
            @$query['Param'] = $request->param;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySchedulerRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySchedulerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifySchedulerRuleRequest
     *
     * @returns ModifySchedulerRuleResponse
     *
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
     * 修改证书配置.
     *
     * @param request - ModifyTlsConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTlsConfigResponse
     *
     * @param ModifyTlsConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyTlsConfigResponse
     */
    public function modifyTlsConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTlsConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTlsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改证书配置.
     *
     * @param request - ModifyTlsConfigRequest
     *
     * @returns ModifyTlsConfigResponse
     *
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
     * @param request - ModifyWebAIProtectModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebAIProtectModeResponse
     *
     * @param ModifyWebAIProtectModeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyWebAIProtectModeResponse
     */
    public function modifyWebAIProtectModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebAIProtectMode',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebAIProtectModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebAIProtectModeRequest
     *
     * @returns ModifyWebAIProtectModeResponse
     *
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
     * @param request - ModifyWebAIProtectSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebAIProtectSwitchResponse
     *
     * @param ModifyWebAIProtectSwitchRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyWebAIProtectSwitchResponse
     */
    public function modifyWebAIProtectSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebAIProtectSwitch',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebAIProtectSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebAIProtectSwitchRequest
     *
     * @returns ModifyWebAIProtectSwitchResponse
     *
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
     * @param request - ModifyWebAccessModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebAccessModeResponse
     *
     * @param ModifyWebAccessModeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyWebAccessModeResponse
     */
    public function modifyWebAccessModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessMode) {
            @$query['AccessMode'] = $request->accessMode;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebAccessMode',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebAccessModeRequest
     *
     * @returns ModifyWebAccessModeResponse
     *
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
     * @param request - ModifyWebAreaBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebAreaBlockResponse
     *
     * @param ModifyWebAreaBlockRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyWebAreaBlockResponse
     */
    public function modifyWebAreaBlockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebAreaBlock',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebAreaBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebAreaBlockRequest
     *
     * @returns ModifyWebAreaBlockResponse
     *
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
     * @param request - ModifyWebAreaBlockSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebAreaBlockSwitchResponse
     *
     * @param ModifyWebAreaBlockSwitchRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyWebAreaBlockSwitchResponse
     */
    public function modifyWebAreaBlockSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebAreaBlockSwitch',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebAreaBlockSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebAreaBlockSwitchRequest
     *
     * @returns ModifyWebAreaBlockSwitchResponse
     *
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
     * 统一全局CC开关.
     *
     * @param request - ModifyWebCCGlobalSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebCCGlobalSwitchResponse
     *
     * @param ModifyWebCCGlobalSwitchRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyWebCCGlobalSwitchResponse
     */
    public function modifyWebCCGlobalSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ccGlobalSwitch) {
            @$query['CcGlobalSwitch'] = $request->ccGlobalSwitch;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebCCGlobalSwitch',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebCCGlobalSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 统一全局CC开关.
     *
     * @param request - ModifyWebCCGlobalSwitchRequest
     *
     * @returns ModifyWebCCGlobalSwitchResponse
     *
     * @param ModifyWebCCGlobalSwitchRequest $request
     *
     * @return ModifyWebCCGlobalSwitchResponse
     */
    public function modifyWebCCGlobalSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebCCGlobalSwitchWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ModifyWebCCRule is deprecated, please use ddoscoo::2020-01-01::ConfigWebCCRuleV2 instead
     *
     * @param request - ModifyWebCCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebCCRuleResponse
     *
     * @param ModifyWebCCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyWebCCRuleResponse
     */
    public function modifyWebCCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->act) {
            @$query['Act'] = $request->act;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->uri) {
            @$query['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebCCRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebCCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * @deprecated openAPI ModifyWebCCRule is deprecated, please use ddoscoo::2020-01-01::ConfigWebCCRuleV2 instead
     *
     * @param request - ModifyWebCCRuleRequest
     *
     * @returns ModifyWebCCRuleResponse
     *
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
     * @param request - ModifyWebCacheCustomRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebCacheCustomRuleResponse
     *
     * @param ModifyWebCacheCustomRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyWebCacheCustomRuleResponse
     */
    public function modifyWebCacheCustomRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebCacheCustomRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebCacheCustomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebCacheCustomRuleRequest
     *
     * @returns ModifyWebCacheCustomRuleResponse
     *
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
     * @param request - ModifyWebCacheModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebCacheModeResponse
     *
     * @param ModifyWebCacheModeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyWebCacheModeResponse
     */
    public function modifyWebCacheModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebCacheMode',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebCacheModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebCacheModeRequest
     *
     * @returns ModifyWebCacheModeResponse
     *
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
     * @param request - ModifyWebCacheSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebCacheSwitchResponse
     *
     * @param ModifyWebCacheSwitchRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyWebCacheSwitchResponse
     */
    public function modifyWebCacheSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebCacheSwitch',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebCacheSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebCacheSwitchRequest
     *
     * @returns ModifyWebCacheSwitchResponse
     *
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
     * @param request - ModifyWebIpSetSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebIpSetSwitchResponse
     *
     * @param ModifyWebIpSetSwitchRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyWebIpSetSwitchResponse
     */
    public function modifyWebIpSetSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebIpSetSwitch',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebIpSetSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebIpSetSwitchRequest
     *
     * @returns ModifyWebIpSetSwitchResponse
     *
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
     * @param request - ModifyWebPreciseAccessRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebPreciseAccessRuleResponse
     *
     * @param ModifyWebPreciseAccessRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyWebPreciseAccessRuleResponse
     */
    public function modifyWebPreciseAccessRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->expires) {
            @$query['Expires'] = $request->expires;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebPreciseAccessRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebPreciseAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebPreciseAccessRuleRequest
     *
     * @returns ModifyWebPreciseAccessRuleResponse
     *
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
     * @param request - ModifyWebPreciseAccessSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebPreciseAccessSwitchResponse
     *
     * @param ModifyWebPreciseAccessSwitchRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyWebPreciseAccessSwitchResponse
     */
    public function modifyWebPreciseAccessSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebPreciseAccessSwitch',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebPreciseAccessSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyWebPreciseAccessSwitchRequest
     *
     * @returns ModifyWebPreciseAccessSwitchResponse
     *
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
     * 修改已经创建的网站业务转发规则.
     *
     * @param request - ModifyWebRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWebRuleResponse
     *
     * @param ModifyWebRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyWebRuleResponse
     */
    public function modifyWebRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->httpsExt) {
            @$query['HttpsExt'] = $request->httpsExt;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->proxyTypes) {
            @$query['ProxyTypes'] = $request->proxyTypes;
        }

        if (null !== $request->realServers) {
            @$query['RealServers'] = $request->realServers;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rsType) {
            @$query['RsType'] = $request->rsType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWebRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWebRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改已经创建的网站业务转发规则.
     *
     * @param request - ModifyWebRuleRequest
     *
     * @returns ModifyWebRuleResponse
     *
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
     * @param request - ReleaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
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
            'action' => 'ReleaseInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseInstanceRequest
     *
     * @returns ReleaseInstanceResponse
     *
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
     * 切换流量调度器.
     *
     * @param request - SwitchSchedulerRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchSchedulerRuleResponse
     *
     * @param SwitchSchedulerRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SwitchSchedulerRuleResponse
     */
    public function switchSchedulerRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->switchData) {
            @$query['SwitchData'] = $request->switchData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchSchedulerRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchSchedulerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 切换流量调度器.
     *
     * @param request - SwitchSchedulerRuleRequest
     *
     * @returns SwitchSchedulerRuleResponse
     *
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
