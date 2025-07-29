<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ClearMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ClearMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CopyDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CopyDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateApiExportRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateApiExportResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCertsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCertsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudClusterRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudClusterRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMemberAccountsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMemberAccountsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreatePostpaidInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreatePostpaidInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateSM2CertRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateSM2CertResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteApisecAbnormalsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteApisecAbnormalsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteApisecEventsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteApisecEventsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteCloudResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteCloudResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseRuleBlockIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseRuleBlockIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteHybridCloudClusterRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteHybridCloudClusterRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMemberAccountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMemberAccountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAccountDelegatedStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAccountDelegatedStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApiExportsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApiExportsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalDomainStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalDomainStatisticResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecApiResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecApiResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAssetTrendRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAssetTrendResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventDomainStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventDomainStatisticResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecLogDeliveriesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecLogDeliveriesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecMatchedHostsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecMatchedHostsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecProtectionGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecProtectionGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecProtectionResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecProtectionResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSensitiveDomainStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSensitiveDomainStatisticResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSlsLogStoresRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSlsLogStoresResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSlsProjectsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSlsProjectsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecStatisticsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecStatisticsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSuggestionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSuggestionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecUserOperationsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecUserOperationsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessedPortsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessedPortsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCnameCountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCnameCountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDDoSStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDDoSStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefaultHttpsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefaultHttpsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupNamesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupNamesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceNamesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceNamesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceOwnerUidRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceOwnerUidResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainUsedPortsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainUsedPortsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserAssetCountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserAssetCountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventCountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventCountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventTypesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventTypesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClustersRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClustersResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudServerRegionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudServerRegionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnassignedMachinesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnassignedMachinesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMemberAccountsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMemberAccountsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePauseProtectionStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePauseProtectionStatusResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventLogsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventLogsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventLogsShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveApiStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveApiStatisticResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundDistributionRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundDistributionResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundStatisticResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundTrendRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundTrendResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestLogRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestLogResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveStatisticRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveStatisticResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTrendRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTrendResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTypeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTypeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserApiRequestRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserApiRequestResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAssetRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAssetResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTrendRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTrendResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTypeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTypeResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecAbnormalsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecAbnormalsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecApiResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecApiResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecEventsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecEventsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecLogDeliveryRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecLogDeliveryResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecLogDeliveryStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecLogDeliveryStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecModuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecModuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyApisecStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefaultHttpsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefaultHttpsResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudGroupExpansionServerRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudGroupExpansionServerResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudGroupShrinkServerRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudGroupShrinkServerResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudSdkPullinStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudSdkPullinStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudServerRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudServerResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMemberAccountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMemberAccountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyPauseProtectionStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyPauseProtectionStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyTemplateResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyTemplateResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ReCreateCloudResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ReCreateCloudResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ReleaseInstanceResponse;
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
        $this->_endpointMap = [
            'cn-qingdao' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-chengdu' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-heyuan' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-wulanchabu' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hongkong' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-central-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'cn-shanghai-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-north-2-gov-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
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
     * @summary Changes the resource group to which a protected object belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the resource group to which a protected object belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
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
            'action' => 'ClearMajorProtectionBlackIp',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'CopyDefenseTemplate',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Creates a data export task in the API security module.
     *  *
     * @param CreateApiExportRequest $request CreateApiExportRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApiExportResponse CreateApiExportResponse
     */
    public function createApiExportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApiExport',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApiExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a data export task in the API security module.
     *  *
     * @param CreateApiExportRequest $request CreateApiExportRequest
     *
     * @return CreateApiExportResponse CreateApiExportResponse
     */
    public function createApiExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiExportWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads a certificate that uses an internationally accepted algorithm for a domain name added to Web Application Firewall (WAF) in CNAME record mode.
     *  *
     * @param CreateCertsRequest $request CreateCertsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCertsResponse CreateCertsResponse
     */
    public function createCertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certContent)) {
            $query['CertContent'] = $request->certContent;
        }
        if (!Utils::isUnset($request->certKey)) {
            $query['CertKey'] = $request->certKey;
        }
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
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
            'action' => 'CreateCerts',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads a certificate that uses an internationally accepted algorithm for a domain name added to Web Application Firewall (WAF) in CNAME record mode.
     *  *
     * @param CreateCertsRequest $request CreateCertsRequest
     *
     * @return CreateCertsResponse CreateCertsResponse
     */
    public function createCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertsWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a service to Web Application Firewall (WAF). This operation is supported for only the Elastic Compute Service (ECS) and Classic Load Balancer (CLB) services.
     *  *
     * @param CreateCloudResourceRequest $tmpReq  CreateCloudResourceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudResourceResponse CreateCloudResourceResponse
     */
    public function createCloudResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCloudResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listen)) {
            $request->listenShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirect)) {
            $request->redirectShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->listenShrink)) {
            $query['Listen'] = $request->listenShrink;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a service to Web Application Firewall (WAF). This operation is supported for only the Elastic Compute Service (ECS) and Classic Load Balancer (CLB) services.
     *  *
     * @param CreateCloudResourceRequest $request CreateCloudResourceRequest
     *
     * @return CreateCloudResourceResponse CreateCloudResourceResponse
     */
    public function createCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建防护对象
     *  *
     * @param CreateDefenseResourceRequest $tmpReq  CreateDefenseResourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDefenseResourceResponse CreateDefenseResourceResponse
     */
    public function createDefenseResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDefenseResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customHeaders)) {
            $request->customHeadersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customHeaders, 'CustomHeaders', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->customHeadersShrink)) {
            $query['CustomHeaders'] = $request->customHeadersShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->detail)) {
            $query['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
        }
        if (!Utils::isUnset($request->pattern)) {
            $query['Pattern'] = $request->pattern;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceGroup)) {
            $query['ResourceGroup'] = $request->resourceGroup;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOrigin)) {
            $query['ResourceOrigin'] = $request->resourceOrigin;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->xffStatus)) {
            $query['XffStatus'] = $request->xffStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDefenseResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDefenseResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建防护对象
     *  *
     * @param CreateDefenseResourceRequest $request CreateDefenseResourceRequest
     *
     * @return CreateDefenseResourceResponse CreateDefenseResourceResponse
     */
    public function createDefenseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseResourceWithOptions($request, $runtime);
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
            'action' => 'CreateDefenseResourceGroup',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $body = [];
        if (!Utils::isUnset($request->rules)) {
            $body['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDefenseRule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'CreateDefenseTemplate',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDomain',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary 新增集群规则信息
     *  *
     * @param CreateHybridCloudClusterRuleRequest $request CreateHybridCloudClusterRuleRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHybridCloudClusterRuleResponse CreateHybridCloudClusterRuleResponse
     */
    public function createHybridCloudClusterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->ruleConfig)) {
            $query['RuleConfig'] = $request->ruleConfig;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['RuleStatus'] = $request->ruleStatus;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHybridCloudClusterRule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHybridCloudClusterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增集群规则信息
     *  *
     * @param CreateHybridCloudClusterRuleRequest $request CreateHybridCloudClusterRuleRequest
     *
     * @return CreateHybridCloudClusterRuleResponse CreateHybridCloudClusterRuleResponse
     */
    public function createHybridCloudClusterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridCloudClusterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a node group for a hybrid cloud cluster.
     *  *
     * @param CreateHybridCloudGroupRequest $request CreateHybridCloudGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHybridCloudGroupResponse CreateHybridCloudGroupResponse
     */
    public function createHybridCloudGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backSourceMark)) {
            $query['BackSourceMark'] = $request->backSourceMark;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->loadBalanceIp)) {
            $query['LoadBalanceIp'] = $request->loadBalanceIp;
        }
        if (!Utils::isUnset($request->locationCode)) {
            $query['LocationCode'] = $request->locationCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHybridCloudGroup',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHybridCloudGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a node group for a hybrid cloud cluster.
     *  *
     * @param CreateHybridCloudGroupRequest $request CreateHybridCloudGroupRequest
     *
     * @return CreateHybridCloudGroupResponse CreateHybridCloudGroupResponse
     */
    public function createHybridCloudGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridCloudGroupWithOptions($request, $runtime);
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
            'action' => 'CreateMajorProtectionBlackIp',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'CreateMemberAccounts',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'CreatePostpaidInstance',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Uploads a ShangMi (SM) certificate for a domain name that is added to Web Application Firewall (WAF) in CNAME record mode.
     *  *
     * @param CreateSM2CertRequest $request CreateSM2CertRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSM2CertResponse CreateSM2CertResponse
     */
    public function createSM2CertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->encryptCertificate)) {
            $query['EncryptCertificate'] = $request->encryptCertificate;
        }
        if (!Utils::isUnset($request->encryptPrivateKey)) {
            $query['EncryptPrivateKey'] = $request->encryptPrivateKey;
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
        if (!Utils::isUnset($request->signCertificate)) {
            $query['SignCertificate'] = $request->signCertificate;
        }
        if (!Utils::isUnset($request->signPrivateKey)) {
            $query['SignPrivateKey'] = $request->signPrivateKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSM2Cert',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSM2CertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads a ShangMi (SM) certificate for a domain name that is added to Web Application Firewall (WAF) in CNAME record mode.
     *  *
     * @param CreateSM2CertRequest $request CreateSM2CertRequest
     *
     * @return CreateSM2CertResponse CreateSM2CertResponse
     */
    public function createSM2Cert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSM2CertWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple risks detected by the API security module at a time.
     *  *
     * @param DeleteApisecAbnormalsRequest $request DeleteApisecAbnormalsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApisecAbnormalsResponse DeleteApisecAbnormalsResponse
     */
    public function deleteApisecAbnormalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->abnormalIds)) {
            $query['AbnormalIds'] = $request->abnormalIds;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
            'action' => 'DeleteApisecAbnormals',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApisecAbnormalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple risks detected by the API security module at a time.
     *  *
     * @param DeleteApisecAbnormalsRequest $request DeleteApisecAbnormalsRequest
     *
     * @return DeleteApisecAbnormalsResponse DeleteApisecAbnormalsResponse
     */
    public function deleteApisecAbnormals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApisecAbnormalsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple security events detected by the API security module at a time.
     *  *
     * @param DeleteApisecEventsRequest $request DeleteApisecEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApisecEventsResponse DeleteApisecEventsResponse
     */
    public function deleteApisecEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->eventIds)) {
            $query['EventIds'] = $request->eventIds;
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
            'action' => 'DeleteApisecEvents',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApisecEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple security events detected by the API security module at a time.
     *  *
     * @param DeleteApisecEventsRequest $request DeleteApisecEventsRequest
     *
     * @return DeleteApisecEventsResponse DeleteApisecEventsResponse
     */
    public function deleteApisecEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApisecEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a service from Web Application Firewall (WAF). This operation is supported for only the Elastic Compute Service (ECS) and Classic Load Balancer (CLB) services.
     *  *
     * @param DeleteCloudResourceRequest $request DeleteCloudResourceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCloudResourceResponse DeleteCloudResourceResponse
     */
    public function deleteCloudResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
        if (!Utils::isUnset($request->resourceProduct)) {
            $query['ResourceProduct'] = $request->resourceProduct;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a service from Web Application Firewall (WAF). This operation is supported for only the Elastic Compute Service (ECS) and Classic Load Balancer (CLB) services.
     *  *
     * @param DeleteCloudResourceRequest $request DeleteCloudResourceRequest
     *
     * @return DeleteCloudResourceResponse DeleteCloudResourceResponse
     */
    public function deleteCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除单个防护对象
     *  *
     * @param DeleteDefenseResourceRequest $request DeleteDefenseResourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDefenseResourceResponse DeleteDefenseResourceResponse
     */
    public function deleteDefenseResourceWithOptions($request, $runtime)
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
            'action' => 'DeleteDefenseResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDefenseResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除单个防护对象
     *  *
     * @param DeleteDefenseResourceRequest $request DeleteDefenseResourceRequest
     *
     * @return DeleteDefenseResourceResponse DeleteDefenseResourceResponse
     */
    public function deleteDefenseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseResourceWithOptions($request, $runtime);
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
            'action' => 'DeleteDefenseResourceGroup',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
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
            'action' => 'DeleteDefenseRule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary 更新防护规则封禁Ip
     *  *
     * @param DeleteDefenseRuleBlockIpRequest $request DeleteDefenseRuleBlockIpRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDefenseRuleBlockIpResponse DeleteDefenseRuleBlockIpResponse
     */
    public function deleteDefenseRuleBlockIpWithOptions($request, $runtime)
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
            'action' => 'DeleteDefenseRuleBlockIp',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDefenseRuleBlockIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新防护规则封禁Ip
     *  *
     * @param DeleteDefenseRuleBlockIpRequest $request DeleteDefenseRuleBlockIpRequest
     *
     * @return DeleteDefenseRuleBlockIpResponse DeleteDefenseRuleBlockIpResponse
     */
    public function deleteDefenseRuleBlockIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseRuleBlockIpWithOptions($request, $runtime);
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
            'action' => 'DeleteDefenseTemplate',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DeleteDomain',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary 删除集群规则信息
     *  *
     * @param DeleteHybridCloudClusterRuleRequest $request DeleteHybridCloudClusterRuleRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHybridCloudClusterRuleResponse DeleteHybridCloudClusterRuleResponse
     */
    public function deleteHybridCloudClusterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterRuleResourceId)) {
            $query['ClusterRuleResourceId'] = $request->clusterRuleResourceId;
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
            'action' => 'DeleteHybridCloudClusterRule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHybridCloudClusterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除集群规则信息
     *  *
     * @param DeleteHybridCloudClusterRuleRequest $request DeleteHybridCloudClusterRuleRequest
     *
     * @return DeleteHybridCloudClusterRuleResponse DeleteHybridCloudClusterRuleResponse
     */
    public function deleteHybridCloudClusterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridCloudClusterRuleWithOptions($request, $runtime);
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
            'action' => 'DeleteMajorProtectionBlackIp',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DeleteMemberAccount',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary 查询异常的云产品接入资源
     *  *
     * @param DescribeAbnormalCloudResourcesRequest $request DescribeAbnormalCloudResourcesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAbnormalCloudResourcesResponse DescribeAbnormalCloudResourcesResponse
     */
    public function describeAbnormalCloudResourcesWithOptions($request, $runtime)
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
            'action' => 'DescribeAbnormalCloudResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAbnormalCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询异常的云产品接入资源
     *  *
     * @param DescribeAbnormalCloudResourcesRequest $request DescribeAbnormalCloudResourcesRequest
     *
     * @return DescribeAbnormalCloudResourcesResponse DescribeAbnormalCloudResourcesResponse
     */
    public function describeAbnormalCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAbnormalCloudResourcesWithOptions($request, $runtime);
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
            'action' => 'DescribeAccountDelegatedStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Queries the list of data export tasks in the API security module.
     *  *
     * @param DescribeApiExportsRequest $request DescribeApiExportsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiExportsResponse DescribeApiExportsResponse
     */
    public function describeApiExportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action' => 'DescribeApiExports',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiExportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of data export tasks in the API security module.
     *  *
     * @param DescribeApiExportsRequest $request DescribeApiExportsRequest
     *
     * @return DescribeApiExportsResponse DescribeApiExportsResponse
     */
    public function describeApiExports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiExportsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on domain names on which risks are detected by the API security module.
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
            'action' => 'DescribeApisecAbnormalDomainStatistic',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecAbnormalDomainStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on domain names on which risks are detected by the API security module.
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
     * @summary Queries the list of API security risks.
     *  *
     * @param DescribeApisecAbnormalsRequest $request DescribeApisecAbnormalsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecAbnormalsResponse DescribeApisecAbnormalsResponse
     */
    public function describeApisecAbnormalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->abnormalId)) {
            $query['AbnormalId'] = $request->abnormalId;
        }
        if (!Utils::isUnset($request->abnormalLevel)) {
            $query['AbnormalLevel'] = $request->abnormalLevel;
        }
        if (!Utils::isUnset($request->abnormalTag)) {
            $query['AbnormalTag'] = $request->abnormalTag;
        }
        if (!Utils::isUnset($request->apiFormat)) {
            $query['ApiFormat'] = $request->apiFormat;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiTag)) {
            $query['ApiTag'] = $request->apiTag;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->matchedHost)) {
            $query['MatchedHost'] = $request->matchedHost;
        }
        if (!Utils::isUnset($request->orderKey)) {
            $query['OrderKey'] = $request->orderKey;
        }
        if (!Utils::isUnset($request->orderWay)) {
            $query['OrderWay'] = $request->orderWay;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['Origin'] = $request->origin;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userStatus)) {
            $query['UserStatus'] = $request->userStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecAbnormals',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecAbnormalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of API security risks.
     *  *
     * @param DescribeApisecAbnormalsRequest $request DescribeApisecAbnormalsRequest
     *
     * @return DescribeApisecAbnormalsResponse DescribeApisecAbnormalsResponse
     */
    public function describeApisecAbnormals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecAbnormalsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries API assets in the API security module.
     *  *
     * @param DescribeApisecApiResourcesRequest $request DescribeApisecApiResourcesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecApiResourcesResponse DescribeApisecApiResourcesResponse
     */
    public function describeApisecApiResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiFormat)) {
            $query['ApiFormat'] = $request->apiFormat;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiMethod)) {
            $query['ApiMethod'] = $request->apiMethod;
        }
        if (!Utils::isUnset($request->apiStatus)) {
            $query['ApiStatus'] = $request->apiStatus;
        }
        if (!Utils::isUnset($request->apiTag)) {
            $query['ApiTag'] = $request->apiTag;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->authFlag)) {
            $query['AuthFlag'] = $request->authFlag;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->follow)) {
            $query['Follow'] = $request->follow;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->matchedHost)) {
            $query['MatchedHost'] = $request->matchedHost;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->orderKey)) {
            $query['OrderKey'] = $request->orderKey;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestSensitiveType)) {
            $query['RequestSensitiveType'] = $request->requestSensitiveType;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sensitiveLevel)) {
            $query['SensitiveLevel'] = $request->sensitiveLevel;
        }
        if (!Utils::isUnset($request->sensitiveType)) {
            $query['SensitiveType'] = $request->sensitiveType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecApiResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecApiResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries API assets in the API security module.
     *  *
     * @param DescribeApisecApiResourcesRequest $request DescribeApisecApiResourcesRequest
     *
     * @return DescribeApisecApiResourcesResponse DescribeApisecApiResourcesResponse
     */
    public function describeApisecApiResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecApiResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the asset trends in the API security module.
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
            'action' => 'DescribeApisecAssetTrend',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecAssetTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the asset trends in the API security module.
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
     * @summary Queries the statistics on domain names on which security events are detected by the API security module.
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
            'action' => 'DescribeApisecEventDomainStatistic',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecEventDomainStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on domain names on which security events are detected by the API security module.
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
     * @summary Queries API security events.
     *  *
     * @param DescribeApisecEventsRequest $request DescribeApisecEventsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecEventsResponse DescribeApisecEventsResponse
     */
    public function describeApisecEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiFormat)) {
            $query['ApiFormat'] = $request->apiFormat;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiTag)) {
            $query['ApiTag'] = $request->apiTag;
        }
        if (!Utils::isUnset($request->attackIp)) {
            $query['AttackIp'] = $request->attackIp;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->eventLevel)) {
            $query['EventLevel'] = $request->eventLevel;
        }
        if (!Utils::isUnset($request->eventTag)) {
            $query['EventTag'] = $request->eventTag;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->matchedHost)) {
            $query['MatchedHost'] = $request->matchedHost;
        }
        if (!Utils::isUnset($request->orderKey)) {
            $query['OrderKey'] = $request->orderKey;
        }
        if (!Utils::isUnset($request->orderWay)) {
            $query['OrderWay'] = $request->orderWay;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['Origin'] = $request->origin;
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
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->userStatus)) {
            $query['UserStatus'] = $request->userStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecEvents',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries API security events.
     *  *
     * @param DescribeApisecEventsRequest $request DescribeApisecEventsRequest
     *
     * @return DescribeApisecEventsResponse DescribeApisecEventsResponse
     */
    public function describeApisecEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of API security log subscription.
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
            'action' => 'DescribeApisecLogDeliveries',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecLogDeliveriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of API security log subscription.
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
     * @summary Queries the list of domain names detected in the API security module.
     *  *
     * @param DescribeApisecMatchedHostsRequest $request DescribeApisecMatchedHostsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecMatchedHostsResponse DescribeApisecMatchedHostsResponse
     */
    public function describeApisecMatchedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->matchedHost)) {
            $query['MatchedHost'] = $request->matchedHost;
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecMatchedHosts',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecMatchedHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of domain names detected in the API security module.
     *  *
     * @param DescribeApisecMatchedHostsRequest $request DescribeApisecMatchedHostsRequest
     *
     * @return DescribeApisecMatchedHostsResponse DescribeApisecMatchedHostsResponse
     */
    public function describeApisecMatchedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecMatchedHostsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of protected object groups to which API security policies are applied.
     *  *
     * @param DescribeApisecProtectionGroupsRequest $request DescribeApisecProtectionGroupsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecProtectionGroupsResponse DescribeApisecProtectionGroupsResponse
     */
    public function describeApisecProtectionGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apisecStatus)) {
            $query['ApisecStatus'] = $request->apisecStatus;
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
        if (!Utils::isUnset($request->resourceGroup)) {
            $query['ResourceGroup'] = $request->resourceGroup;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecProtectionGroups',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecProtectionGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of protected object groups to which API security policies are applied.
     *  *
     * @param DescribeApisecProtectionGroupsRequest $request DescribeApisecProtectionGroupsRequest
     *
     * @return DescribeApisecProtectionGroupsResponse DescribeApisecProtectionGroupsResponse
     */
    public function describeApisecProtectionGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecProtectionGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of protected objects to which API security policies are applied.
     *  *
     * @param DescribeApisecProtectionResourcesRequest $request DescribeApisecProtectionResourcesRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecProtectionResourcesResponse DescribeApisecProtectionResourcesResponse
     */
    public function describeApisecProtectionResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apisecStatus)) {
            $query['ApisecStatus'] = $request->apisecStatus;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecProtectionResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecProtectionResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of protected objects to which API security policies are applied.
     *  *
     * @param DescribeApisecProtectionResourcesRequest $request DescribeApisecProtectionResourcesRequest
     *
     * @return DescribeApisecProtectionResourcesResponse DescribeApisecProtectionResourcesResponse
     */
    public function describeApisecProtectionResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecProtectionResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the policies configured in the API security module.
     *  *
     * @param DescribeApisecRulesRequest $request DescribeApisecRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecRulesResponse DescribeApisecRulesResponse
     */
    public function describeApisecRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['Origin'] = $request->origin;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecRules',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the policies configured in the API security module.
     *  *
     * @param DescribeApisecRulesRequest $request DescribeApisecRulesRequest
     *
     * @return DescribeApisecRulesResponse DescribeApisecRulesResponse
     */
    public function describeApisecRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on domain names on which sensitive data is detected by the API security module.
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
            'action' => 'DescribeApisecSensitiveDomainStatistic',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecSensitiveDomainStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on domain names on which sensitive data is detected by the API security module.
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
     * @summary Queries the Logstores whose names start with apisec- in Simple Log Service.
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
            'action' => 'DescribeApisecSlsLogStores',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecSlsLogStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Logstores whose names start with apisec- in Simple Log Service.
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
     * @summary Queries the projects whose names start with apisec- in Simple Log Service.
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
            'action' => 'DescribeApisecSlsProjects',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecSlsProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the projects whose names start with apisec- in Simple Log Service.
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
     * @summary Queries the statistics of API security-related risks and events.
     *  *
     * @param DescribeApisecStatisticsRequest $request DescribeApisecStatisticsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecStatisticsResponse DescribeApisecStatisticsResponse
     */
    public function describeApisecStatisticsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->userStatusList)) {
            $query['UserStatusList'] = $request->userStatusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecStatistics',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics of API security-related risks and events.
     *  *
     * @param DescribeApisecStatisticsRequest $request DescribeApisecStatisticsRequest
     *
     * @return DescribeApisecStatisticsResponse DescribeApisecStatisticsResponse
     */
    public function describeApisecStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the protection suggestions for APIs.
     *  *
     * @param DescribeApisecSuggestionsRequest $request DescribeApisecSuggestionsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecSuggestionsResponse DescribeApisecSuggestionsResponse
     */
    public function describeApisecSuggestionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
            'action' => 'DescribeApisecSuggestions',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecSuggestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the protection suggestions for APIs.
     *  *
     * @param DescribeApisecSuggestionsRequest $request DescribeApisecSuggestionsRequest
     *
     * @return DescribeApisecSuggestionsResponse DescribeApisecSuggestionsResponse
     */
    public function describeApisecSuggestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecSuggestionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries user operation records in the API security module.
     *  *
     * @param DescribeApisecUserOperationsRequest $request DescribeApisecUserOperationsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisecUserOperationsResponse DescribeApisecUserOperationsResponse
     */
    public function describeApisecUserOperationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecUserOperations',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecUserOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries user operation records in the API security module.
     *  *
     * @param DescribeApisecUserOperationsRequest $request DescribeApisecUserOperationsRequest
     *
     * @return DescribeApisecUserOperationsResponse DescribeApisecUserOperationsResponse
     */
    public function describeApisecUserOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecUserOperationsWithOptions($request, $runtime);
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
            'action' => 'DescribeCertDetail',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeCerts',
            'version' => '2021-10-01',
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
     * @summary Queries a port of the cloud service that is added to Web Application Firewall (WAF). This operation is supported for only Elastic Compute Service (ECS) and Classic Load Balancer (CLB).
     *  *
     * @param DescribeCloudResourceAccessPortDetailsRequest $request DescribeCloudResourceAccessPortDetailsRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudResourceAccessPortDetailsResponse DescribeCloudResourceAccessPortDetailsResponse
     */
    public function describeCloudResourceAccessPortDetailsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
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
        if (!Utils::isUnset($request->resourceProduct)) {
            $query['ResourceProduct'] = $request->resourceProduct;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudResourceAccessPortDetails',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudResourceAccessPortDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a port of the cloud service that is added to Web Application Firewall (WAF). This operation is supported for only Elastic Compute Service (ECS) and Classic Load Balancer (CLB).
     *  *
     * @param DescribeCloudResourceAccessPortDetailsRequest $request DescribeCloudResourceAccessPortDetailsRequest
     *
     * @return DescribeCloudResourceAccessPortDetailsResponse DescribeCloudResourceAccessPortDetailsResponse
     */
    public function describeCloudResourceAccessPortDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudResourceAccessPortDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the ports of the cloud service that is added to Web Application Firewall (WAF). This operation is supported for only Elastic Compute Service (ECS) and Classic Load Balancer (CLB).
     *  *
     * @param DescribeCloudResourceAccessedPortsRequest $request DescribeCloudResourceAccessedPortsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudResourceAccessedPortsResponse DescribeCloudResourceAccessedPortsResponse
     */
    public function describeCloudResourceAccessedPortsWithOptions($request, $runtime)
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
            'action' => 'DescribeCloudResourceAccessedPorts',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudResourceAccessedPortsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the ports of the cloud service that is added to Web Application Firewall (WAF). This operation is supported for only Elastic Compute Service (ECS) and Classic Load Balancer (CLB).
     *  *
     * @param DescribeCloudResourceAccessedPortsRequest $request DescribeCloudResourceAccessedPortsRequest
     *
     * @return DescribeCloudResourceAccessedPortsResponse DescribeCloudResourceAccessedPortsResponse
     */
    public function describeCloudResourceAccessedPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudResourceAccessedPortsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->resourceInstanceName)) {
            $query['ResourceInstanceName'] = $request->resourceInstanceName;
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
            'action' => 'DescribeCloudResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Queries the total number of domain names that are added to Web Application Firewall (WAF) in CNAME record mode and hybrid cloud reverse proxy mode.
     *  *
     * @param DescribeCnameCountRequest $request DescribeCnameCountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCnameCountResponse DescribeCnameCountResponse
     */
    public function describeCnameCountWithOptions($request, $runtime)
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
            'action' => 'DescribeCnameCount',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCnameCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the total number of domain names that are added to Web Application Firewall (WAF) in CNAME record mode and hybrid cloud reverse proxy mode.
     *  *
     * @param DescribeCnameCountRequest $request DescribeCnameCountRequest
     *
     * @return DescribeCnameCountResponse DescribeCnameCountResponse
     */
    public function describeCnameCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCnameCountWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether DDoS attacks occur on specific domain names protected by a Web Application Firewall (WAF) instance.
     *  *
     * @param DescribeDDoSStatusRequest $request DescribeDDoSStatusRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDoSStatusResponse DescribeDDoSStatusResponse
     */
    public function describeDDoSStatusWithOptions($request, $runtime)
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
            'action' => 'DescribeDDoSStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDDoSStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether DDoS attacks occur on specific domain names protected by a Web Application Firewall (WAF) instance.
     *  *
     * @param DescribeDDoSStatusRequest $request DescribeDDoSStatusRequest
     *
     * @return DescribeDDoSStatusResponse DescribeDDoSStatusResponse
     */
    public function describeDDoSStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the default SSL and Transport Layer Security (TLS) settings.
     *  *
     * @param DescribeDefaultHttpsRequest $request DescribeDefaultHttpsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefaultHttpsResponse DescribeDefaultHttpsResponse
     */
    public function describeDefaultHttpsWithOptions($request, $runtime)
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
            'action' => 'DescribeDefaultHttps',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefaultHttpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the default SSL and Transport Layer Security (TLS) settings.
     *  *
     * @param DescribeDefaultHttpsRequest $request DescribeDefaultHttpsRequest
     *
     * @return DescribeDefaultHttpsResponse DescribeDefaultHttpsResponse
     */
    public function describeDefaultHttps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefaultHttpsWithOptions($request, $runtime);
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
            'action' => 'DescribeDefenseResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDefenseResourceGroup',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDefenseResourceGroupNames',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDefenseResourceGroups',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDefenseResourceNames',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary 查询防护对象和所属资源的关系
     *  *
     * @param DescribeDefenseResourceOwnerUidRequest $request DescribeDefenseResourceOwnerUidRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseResourceOwnerUidResponse DescribeDefenseResourceOwnerUidResponse
     */
    public function describeDefenseResourceOwnerUidWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceNames)) {
            $query['ResourceNames'] = $request->resourceNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseResourceOwnerUid',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefenseResourceOwnerUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询防护对象和所属资源的关系
     *  *
     * @param DescribeDefenseResourceOwnerUidRequest $request DescribeDefenseResourceOwnerUidRequest
     *
     * @return DescribeDefenseResourceOwnerUidResponse DescribeDefenseResourceOwnerUidResponse
     */
    public function describeDefenseResourceOwnerUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceOwnerUidWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseResourceTemplates',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDefenseResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
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
            'action' => 'DescribeDefenseRule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
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
            'action' => 'DescribeDefenseRules',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDefenseTemplate',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDefenseTemplateValidGroups',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseTemplates',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDomainDNSRecord',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeDomainDetail',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary 查询域名已使用的端口
     *  *
     * @param DescribeDomainUsedPortsRequest $request DescribeDomainUsedPortsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainUsedPortsResponse DescribeDomainUsedPortsResponse
     */
    public function describeDomainUsedPortsWithOptions($request, $runtime)
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
            'action' => 'DescribeDomainUsedPorts',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainUsedPortsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询域名已使用的端口
     *  *
     * @param DescribeDomainUsedPortsRequest $request DescribeDomainUsedPortsRequest
     *
     * @return DescribeDomainUsedPortsResponse DescribeDomainUsedPortsResponse
     */
    public function describeDomainUsedPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainUsedPortsWithOptions($request, $runtime);
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
            'action' => 'DescribeDomains',
            'version' => '2021-10-01',
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
            'action' => 'DescribeFlowChart',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeFlowTopResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeFlowTopUrl',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Queries the asset statistics provided by basic detection in the API security module.
     *  *
     * @param DescribeFreeUserAssetCountRequest $request DescribeFreeUserAssetCountRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFreeUserAssetCountResponse DescribeFreeUserAssetCountResponse
     */
    public function describeFreeUserAssetCountWithOptions($request, $runtime)
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
            'action' => 'DescribeFreeUserAssetCount',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFreeUserAssetCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the asset statistics provided by basic detection in the API security module.
     *  *
     * @param DescribeFreeUserAssetCountRequest $request DescribeFreeUserAssetCountRequest
     *
     * @return DescribeFreeUserAssetCountResponse DescribeFreeUserAssetCountResponse
     */
    public function describeFreeUserAssetCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFreeUserAssetCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics of security events that are detected by using the basic detection feature of the API security module.
     *  *
     * @param DescribeFreeUserEventCountRequest $request DescribeFreeUserEventCountRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFreeUserEventCountResponse DescribeFreeUserEventCountResponse
     */
    public function describeFreeUserEventCountWithOptions($request, $runtime)
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
            'action' => 'DescribeFreeUserEventCount',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFreeUserEventCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics of security events that are detected by using the basic detection feature of the API security module.
     *  *
     * @param DescribeFreeUserEventCountRequest $request DescribeFreeUserEventCountRequest
     *
     * @return DescribeFreeUserEventCountResponse DescribeFreeUserEventCountResponse
     */
    public function describeFreeUserEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFreeUserEventCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the types of security events on which basic detection is performed in the API security module.
     *  *
     * @param DescribeFreeUserEventTypesRequest $request DescribeFreeUserEventTypesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFreeUserEventTypesResponse DescribeFreeUserEventTypesResponse
     */
    public function describeFreeUserEventTypesWithOptions($request, $runtime)
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
            'action' => 'DescribeFreeUserEventTypes',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFreeUserEventTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the types of security events on which basic detection is performed in the API security module.
     *  *
     * @param DescribeFreeUserEventTypesRequest $request DescribeFreeUserEventTypesRequest
     *
     * @return DescribeFreeUserEventTypesResponse DescribeFreeUserEventTypesResponse
     */
    public function describeFreeUserEventTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFreeUserEventTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of security events on which basic detection is performed in the API security module.
     *  *
     * @param DescribeFreeUserEventsRequest $request DescribeFreeUserEventsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFreeUserEventsResponse DescribeFreeUserEventsResponse
     */
    public function describeFreeUserEventsWithOptions($request, $runtime)
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
            'action' => 'DescribeFreeUserEvents',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFreeUserEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of security events on which basic detection is performed in the API security module.
     *  *
     * @param DescribeFreeUserEventsRequest $request DescribeFreeUserEventsRequest
     *
     * @return DescribeFreeUserEventsResponse DescribeFreeUserEventsResponse
     */
    public function describeFreeUserEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFreeUserEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the rule information about a hybrid cloud cluster.
     *  *
     * @param DescribeHybridCloudClusterRuleRequest $request DescribeHybridCloudClusterRuleRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridCloudClusterRuleResponse DescribeHybridCloudClusterRuleResponse
     */
    public function describeHybridCloudClusterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudClusterRule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudClusterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the rule information about a hybrid cloud cluster.
     *  *
     * @param DescribeHybridCloudClusterRuleRequest $request DescribeHybridCloudClusterRuleRequest
     *
     * @return DescribeHybridCloudClusterRuleResponse DescribeHybridCloudClusterRuleResponse
     */
    public function describeHybridCloudClusterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudClusterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 集群规则列表
     *  *
     * @param DescribeHybridCloudClusterRulesRequest $request DescribeHybridCloudClusterRulesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridCloudClusterRulesResponse DescribeHybridCloudClusterRulesResponse
     */
    public function describeHybridCloudClusterRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->ruleContent)) {
            $query['RuleContent'] = $request->ruleContent;
        }
        if (!Utils::isUnset($request->ruleMatchType)) {
            $query['RuleMatchType'] = $request->ruleMatchType;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudClusterRules',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudClusterRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 集群规则列表
     *  *
     * @param DescribeHybridCloudClusterRulesRequest $request DescribeHybridCloudClusterRulesRequest
     *
     * @return DescribeHybridCloudClusterRulesResponse DescribeHybridCloudClusterRulesResponse
     */
    public function describeHybridCloudClusterRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudClusterRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of hybrid cloud clusters.
     *  *
     * @param DescribeHybridCloudClustersRequest $request DescribeHybridCloudClustersRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridCloudClustersResponse DescribeHybridCloudClustersResponse
     */
    public function describeHybridCloudClustersWithOptions($request, $runtime)
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
            'action' => 'DescribeHybridCloudClusters',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of hybrid cloud clusters.
     *  *
     * @param DescribeHybridCloudClustersRequest $request DescribeHybridCloudClustersRequest
     *
     * @return DescribeHybridCloudClustersResponse DescribeHybridCloudClustersResponse
     */
    public function describeHybridCloudClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudClustersWithOptions($request, $runtime);
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
            'action' => 'DescribeHybridCloudGroups',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeHybridCloudResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Queries information about the regions that the hybrid cloud mode supports, such as the Internet service providers (ISPs), continents, and cities.
     *  *
     * @param DescribeHybridCloudServerRegionsRequest $request DescribeHybridCloudServerRegionsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridCloudServerRegionsResponse DescribeHybridCloudServerRegionsResponse
     */
    public function describeHybridCloudServerRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionType)) {
            $query['RegionType'] = $request->regionType;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudServerRegions',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudServerRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about the regions that the hybrid cloud mode supports, such as the Internet service providers (ISPs), continents, and cities.
     *  *
     * @param DescribeHybridCloudServerRegionsRequest $request DescribeHybridCloudServerRegionsRequest
     *
     * @return DescribeHybridCloudServerRegionsResponse DescribeHybridCloudServerRegionsResponse
     */
    public function describeHybridCloudServerRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudServerRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries servers that are not assigned to a hybrid cloud cluster.
     *  *
     * @param DescribeHybridCloudUnassignedMachinesRequest $request DescribeHybridCloudUnassignedMachinesRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridCloudUnassignedMachinesResponse DescribeHybridCloudUnassignedMachinesResponse
     */
    public function describeHybridCloudUnassignedMachinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action' => 'DescribeHybridCloudUnassignedMachines',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudUnassignedMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries servers that are not assigned to a hybrid cloud cluster.
     *  *
     * @param DescribeHybridCloudUnassignedMachinesRequest $request DescribeHybridCloudUnassignedMachinesRequest
     *
     * @return DescribeHybridCloudUnassignedMachinesResponse DescribeHybridCloudUnassignedMachinesResponse
     */
    public function describeHybridCloudUnassignedMachines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudUnassignedMachinesWithOptions($request, $runtime);
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
            'action' => 'DescribeHybridCloudUser',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeInstance',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary 获取支持的海外IP区域封禁支持的国际及地域。
     *  *
     * @param DescribeIpAbroadCountryInfosRequest $request DescribeIpAbroadCountryInfosRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpAbroadCountryInfosResponse DescribeIpAbroadCountryInfosResponse
     */
    public function describeIpAbroadCountryInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->abroadRegion)) {
            $query['AbroadRegion'] = $request->abroadRegion;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
            'action' => 'DescribeIpAbroadCountryInfos',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIpAbroadCountryInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取支持的海外IP区域封禁支持的国际及地域。
     *  *
     * @param DescribeIpAbroadCountryInfosRequest $request DescribeIpAbroadCountryInfosRequest
     *
     * @return DescribeIpAbroadCountryInfosResponse DescribeIpAbroadCountryInfosResponse
     */
    public function describeIpAbroadCountryInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpAbroadCountryInfosWithOptions($request, $runtime);
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
            'action' => 'DescribeMajorProtectionBlackIps',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeMemberAccounts',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Retrieves time-series data for all network traffic, including both malicious and legitimate requests.
     *  *
     * @param DescribeNetworkFlowTimeSeriesMetricRequest $tmpReq  DescribeNetworkFlowTimeSeriesMetricRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkFlowTimeSeriesMetricResponse DescribeNetworkFlowTimeSeriesMetricResponse
     */
    public function describeNetworkFlowTimeSeriesMetricWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeNetworkFlowTimeSeriesMetricShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
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
            'action' => 'DescribeNetworkFlowTimeSeriesMetric',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkFlowTimeSeriesMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Retrieves time-series data for all network traffic, including both malicious and legitimate requests.
     *  *
     * @param DescribeNetworkFlowTimeSeriesMetricRequest $request DescribeNetworkFlowTimeSeriesMetricRequest
     *
     * @return DescribeNetworkFlowTimeSeriesMetricResponse DescribeNetworkFlowTimeSeriesMetricResponse
     */
    public function describeNetworkFlowTimeSeriesMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkFlowTimeSeriesMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Retrieves top aggregated traffic statistics, sorted by various dimensions, including malicious and legitimate requests.
     *  *
     * @param DescribeNetworkFlowTopNMetricRequest $tmpReq  DescribeNetworkFlowTopNMetricRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkFlowTopNMetricResponse DescribeNetworkFlowTopNMetricResponse
     */
    public function describeNetworkFlowTopNMetricWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeNetworkFlowTopNMetricShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
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
            'action' => 'DescribeNetworkFlowTopNMetric',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkFlowTopNMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Retrieves top aggregated traffic statistics, sorted by various dimensions, including malicious and legitimate requests.
     *  *
     * @param DescribeNetworkFlowTopNMetricRequest $request DescribeNetworkFlowTopNMetricRequest
     *
     * @return DescribeNetworkFlowTopNMetricResponse DescribeNetworkFlowTopNMetricResponse
     */
    public function describeNetworkFlowTopNMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkFlowTopNMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the protection status of Web Application Firewall (WAF).
     *  *
     * @param DescribePauseProtectionStatusRequest $request DescribePauseProtectionStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePauseProtectionStatusResponse DescribePauseProtectionStatusResponse
     */
    public function describePauseProtectionStatusWithOptions($request, $runtime)
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
            'action' => 'DescribePauseProtectionStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePauseProtectionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the protection status of Web Application Firewall (WAF).
     *  *
     * @param DescribePauseProtectionStatusRequest $request DescribePauseProtectionStatusRequest
     *
     * @return DescribePauseProtectionStatusResponse DescribePauseProtectionStatusResponse
     */
    public function describePauseProtectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePauseProtectionStatusWithOptions($request, $runtime);
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
            'action' => 'DescribePeakTrend',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->resourceInstanceAccessStatus)) {
            $query['ResourceInstanceAccessStatus'] = $request->resourceInstanceAccessStatus;
        }
        if (!Utils::isUnset($request->resourceInstanceId)) {
            $query['ResourceInstanceId'] = $request->resourceInstanceId;
        }
        if (!Utils::isUnset($request->resourceInstanceIp)) {
            $query['ResourceInstanceIp'] = $request->resourceInstanceIp;
        }
        if (!Utils::isUnset($request->resourceInstanceName)) {
            $query['ResourceInstanceName'] = $request->resourceInstanceName;
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
            'action' => 'DescribeProductInstances',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->punishType)) {
            $query['PunishType'] = $request->punishType;
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
            'action' => 'DescribePunishedDomains',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeResourceInstanceCerts',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeResourceLogStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeResourcePort',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Queries the region IDs of the resources that are added to Web Application Firewall (WAF) by using the SDK integration mode. The resources refer to Application Load Balancer (ALB) and Microservices Engine (MSE) instances.
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
            'action' => 'DescribeResourceRegionId',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceRegionIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the region IDs of the resources that are added to Web Application Firewall (WAF) by using the SDK integration mode. The resources refer to Application Load Balancer (ALB) and Microservices Engine (MSE) instances.
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
     * @summary Queries the region IDs of the Classic Load Balancer (CLB) and Elastic Compute Service (ECS) instances that are added to Web Application Firewall (WAF) in cloud native mode.
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
        if (!Utils::isUnset($request->resourceProduct)) {
            $query['ResourceProduct'] = $request->resourceProduct;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceSupportRegions',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceSupportRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the region IDs of the Classic Load Balancer (CLB) and Elastic Compute Service (ECS) instances that are added to Web Application Firewall (WAF) in cloud native mode.
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
            'action' => 'DescribeResponseCodeTrendGraph',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeRuleGroups',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeRuleHitsTopClientIp',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeRuleHitsTopResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeRuleHitsTopRuleId',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeRuleHitsTopTuleType',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeRuleHitsTopUa',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeRuleHitsTopUrl',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Queries the logs of attack traffic. Each log records the details of a request that matches protection rules.
     *  *
     * @description Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *  *
     * @param DescribeSecurityEventLogsRequest $tmpReq  DescribeSecurityEventLogsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityEventLogsResponse DescribeSecurityEventLogsResponse
     */
    public function describeSecurityEventLogsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeSecurityEventLogsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
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
            'action' => 'DescribeSecurityEventLogs',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityEventLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of attack traffic. Each log records the details of a request that matches protection rules.
     *  *
     * @description Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *  *
     * @param DescribeSecurityEventLogsRequest $request DescribeSecurityEventLogsRequest
     *
     * @return DescribeSecurityEventLogsResponse DescribeSecurityEventLogsResponse
     */
    public function describeSecurityEventLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the time series data of attack traffic. Attack requests refer to requests that match protection rules and are identified as risky.
     *  *
     * @description Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *  *
     * @param DescribeSecurityEventTimeSeriesMetricRequest $tmpReq  DescribeSecurityEventTimeSeriesMetricRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityEventTimeSeriesMetricResponse DescribeSecurityEventTimeSeriesMetricResponse
     */
    public function describeSecurityEventTimeSeriesMetricWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeSecurityEventTimeSeriesMetricShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
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
            'action' => 'DescribeSecurityEventTimeSeriesMetric',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityEventTimeSeriesMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the time series data of attack traffic. Attack requests refer to requests that match protection rules and are identified as risky.
     *  *
     * @description Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *  *
     * @param DescribeSecurityEventTimeSeriesMetricRequest $request DescribeSecurityEventTimeSeriesMetricRequest
     *
     * @return DescribeSecurityEventTimeSeriesMetricResponse DescribeSecurityEventTimeSeriesMetricResponse
     */
    public function describeSecurityEventTimeSeriesMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventTimeSeriesMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Queries top N data entries of attack traffic. The system performs statistical aggregation on attack traffic from specific dimensions and returns top N data entries.
     *  *
     * @description Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *  *
     * @param DescribeSecurityEventTopNMetricRequest $tmpReq  DescribeSecurityEventTopNMetricRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityEventTopNMetricResponse DescribeSecurityEventTopNMetricResponse
     */
    public function describeSecurityEventTopNMetricWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeSecurityEventTopNMetricShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
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
            'action' => 'DescribeSecurityEventTopNMetric',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityEventTopNMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries top N data entries of attack traffic. The system performs statistical aggregation on attack traffic from specific dimensions and returns top N data entries.
     *  *
     * @description Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *  *
     * @param DescribeSecurityEventTopNMetricRequest $request DescribeSecurityEventTopNMetricRequest
     *
     * @return DescribeSecurityEventTopNMetricResponse DescribeSecurityEventTopNMetricResponse
     */
    public function describeSecurityEventTopNMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventTopNMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the personal information-related APIs and domain names.
     *  *
     * @param DescribeSensitiveApiStatisticRequest $request DescribeSensitiveApiStatisticRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSensitiveApiStatisticResponse DescribeSensitiveApiStatisticResponse
     */
    public function describeSensitiveApiStatisticWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->matchedHost)) {
            $query['MatchedHost'] = $request->matchedHost;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSensitiveApiStatistic',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSensitiveApiStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the personal information-related APIs and domain names.
     *  *
     * @param DescribeSensitiveApiStatisticRequest $request DescribeSensitiveApiStatisticRequest
     *
     * @return DescribeSensitiveApiStatisticResponse DescribeSensitiveApiStatisticResponse
     */
    public function describeSensitiveApiStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveApiStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance check results of API security.
     *  *
     * @param DescribeSensitiveDetectionResultRequest $request DescribeSensitiveDetectionResultRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSensitiveDetectionResultResponse DescribeSensitiveDetectionResultResponse
     */
    public function describeSensitiveDetectionResultWithOptions($request, $runtime)
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
            'action' => 'DescribeSensitiveDetectionResult',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSensitiveDetectionResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance check results of API security.
     *  *
     * @param DescribeSensitiveDetectionResultRequest $request DescribeSensitiveDetectionResultRequest
     *
     * @return DescribeSensitiveDetectionResultResponse DescribeSensitiveDetectionResultResponse
     */
    public function describeSensitiveDetectionResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveDetectionResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the traffic distribution of personal information records involved in cross-border data transfer.
     *  *
     * @param DescribeSensitiveOutboundDistributionRequest $request DescribeSensitiveOutboundDistributionRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSensitiveOutboundDistributionResponse DescribeSensitiveOutboundDistributionResponse
     */
    public function describeSensitiveOutboundDistributionWithOptions($request, $runtime)
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
            'action' => 'DescribeSensitiveOutboundDistribution',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSensitiveOutboundDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the traffic distribution of personal information records involved in cross-border data transfer.
     *  *
     * @param DescribeSensitiveOutboundDistributionRequest $request DescribeSensitiveOutboundDistributionRequest
     *
     * @return DescribeSensitiveOutboundDistributionResponse DescribeSensitiveOutboundDistributionResponse
     */
    public function describeSensitiveOutboundDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveOutboundDistributionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the data types of personal information involved in cross-border data transfer.
     *  *
     * @param DescribeSensitiveOutboundStatisticRequest $request DescribeSensitiveOutboundStatisticRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSensitiveOutboundStatisticResponse DescribeSensitiveOutboundStatisticResponse
     */
    public function describeSensitiveOutboundStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->detectionResult)) {
            $query['DetectionResult'] = $request->detectionResult;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderKey)) {
            $query['OrderKey'] = $request->orderKey;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sensitiveCode)) {
            $query['SensitiveCode'] = $request->sensitiveCode;
        }
        if (!Utils::isUnset($request->sensitiveLevel)) {
            $query['SensitiveLevel'] = $request->sensitiveLevel;
        }
        if (!Utils::isUnset($request->sensitiveType)) {
            $query['SensitiveType'] = $request->sensitiveType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSensitiveOutboundStatistic',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSensitiveOutboundStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the data types of personal information involved in cross-border data transfer.
     *  *
     * @param DescribeSensitiveOutboundStatisticRequest $request DescribeSensitiveOutboundStatisticRequest
     *
     * @return DescribeSensitiveOutboundStatisticResponse DescribeSensitiveOutboundStatisticResponse
     */
    public function describeSensitiveOutboundStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveOutboundStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the trends of cross-border data transfer of personal information.
     *  *
     * @param DescribeSensitiveOutboundTrendRequest $request DescribeSensitiveOutboundTrendRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSensitiveOutboundTrendResponse DescribeSensitiveOutboundTrendResponse
     */
    public function describeSensitiveOutboundTrendWithOptions($request, $runtime)
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
            'action' => 'DescribeSensitiveOutboundTrend',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSensitiveOutboundTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trends of cross-border data transfer of personal information.
     *  *
     * @param DescribeSensitiveOutboundTrendRequest $request DescribeSensitiveOutboundTrendRequest
     *
     * @return DescribeSensitiveOutboundTrendResponse DescribeSensitiveOutboundTrendResponse
     */
    public function describeSensitiveOutboundTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveOutboundTrendWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the access logs of sensitive data.
     *  *
     * @param DescribeSensitiveRequestLogRequest $request DescribeSensitiveRequestLogRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSensitiveRequestLogResponse DescribeSensitiveRequestLogResponse
     */
    public function describeSensitiveRequestLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiFormat)) {
            $query['ApiFormat'] = $request->apiFormat;
        }
        if (!Utils::isUnset($request->clientIP)) {
            $query['ClientIP'] = $request->clientIP;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->matchedHost)) {
            $query['MatchedHost'] = $request->matchedHost;
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
        if (!Utils::isUnset($request->sensitiveCode)) {
            $query['SensitiveCode'] = $request->sensitiveCode;
        }
        if (!Utils::isUnset($request->sensitiveData)) {
            $query['SensitiveData'] = $request->sensitiveData;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSensitiveRequestLog',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSensitiveRequestLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the access logs of sensitive data.
     *  *
     * @param DescribeSensitiveRequestLogRequest $request DescribeSensitiveRequestLogRequest
     *
     * @return DescribeSensitiveRequestLogResponse DescribeSensitiveRequestLogResponse
     */
    public function describeSensitiveRequestLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveRequestLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tracing results of sensitive data.
     *  *
     * @param DescribeSensitiveRequestsRequest $request DescribeSensitiveRequestsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSensitiveRequestsResponse DescribeSensitiveRequestsResponse
     */
    public function describeSensitiveRequestsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->sensitiveCode)) {
            $query['SensitiveCode'] = $request->sensitiveCode;
        }
        if (!Utils::isUnset($request->sensitiveData)) {
            $query['SensitiveData'] = $request->sensitiveData;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSensitiveRequests',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSensitiveRequestsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tracing results of sensitive data.
     *  *
     * @param DescribeSensitiveRequestsRequest $request DescribeSensitiveRequestsRequest
     *
     * @return DescribeSensitiveRequestsResponse DescribeSensitiveRequestsResponse
     */
    public function describeSensitiveRequests($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveRequestsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the sensitive data statistics of the tracing and auditing feature.
     *  *
     * @param DescribeSensitiveStatisticRequest $request DescribeSensitiveStatisticRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSensitiveStatisticResponse DescribeSensitiveStatisticResponse
     */
    public function describeSensitiveStatisticWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statisticType)) {
            $query['StatisticType'] = $request->statisticType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSensitiveStatistic',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSensitiveStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the sensitive data statistics of the tracing and auditing feature.
     *  *
     * @param DescribeSensitiveStatisticRequest $request DescribeSensitiveStatisticRequest
     *
     * @return DescribeSensitiveStatisticResponse DescribeSensitiveStatisticResponse
     */
    public function describeSensitiveStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveStatisticWithOptions($request, $runtime);
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
            'action' => 'DescribeSlsAuthStatus',
            'version' => '2021-10-01',
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
            'action' => 'DescribeSlsLogStore',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeSlsLogStoreStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeTemplateResourceCount',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplateResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Queries the trends of API security risks.
     *  *
     * @param DescribeUserAbnormalTrendRequest $request DescribeUserAbnormalTrendRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserAbnormalTrendResponse DescribeUserAbnormalTrendResponse
     */
    public function describeUserAbnormalTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
            'action' => 'DescribeUserAbnormalTrend',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserAbnormalTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trends of API security risks.
     *  *
     * @param DescribeUserAbnormalTrendRequest $request DescribeUserAbnormalTrendRequest
     *
     * @return DescribeUserAbnormalTrendResponse DescribeUserAbnormalTrendResponse
     */
    public function describeUserAbnormalTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAbnormalTrendWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the types and statistics of risks in the API security module.
     *  *
     * @param DescribeUserAbnormalTypeRequest $request DescribeUserAbnormalTypeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserAbnormalTypeResponse DescribeUserAbnormalTypeResponse
     */
    public function describeUserAbnormalTypeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userStatusList)) {
            $query['UserStatusList'] = $request->userStatusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserAbnormalType',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserAbnormalTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the types and statistics of risks in the API security module.
     *  *
     * @param DescribeUserAbnormalTypeRequest $request DescribeUserAbnormalTypeRequest
     *
     * @return DescribeUserAbnormalTypeResponse DescribeUserAbnormalTypeResponse
     */
    public function describeUserAbnormalType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAbnormalTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the traffic statistics of an API.
     *  *
     * @param DescribeUserApiRequestRequest $request DescribeUserApiRequestRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserApiRequestResponse DescribeUserApiRequestResponse
     */
    public function describeUserApiRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiFormat)) {
            $query['ApiFormat'] = $request->apiFormat;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserApiRequest',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserApiRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the traffic statistics of an API.
     *  *
     * @param DescribeUserApiRequestRequest $request DescribeUserApiRequestRequest
     *
     * @return DescribeUserApiRequestResponse DescribeUserApiRequestResponse
     */
    public function describeUserApiRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserApiRequestWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the user asset statistics in the API security module.
     *  *
     * @param DescribeUserAssetRequest $request DescribeUserAssetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserAssetResponse DescribeUserAssetResponse
     */
    public function describeUserAssetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->days)) {
            $query['Days'] = $request->days;
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
            'action' => 'DescribeUserAsset',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the user asset statistics in the API security module.
     *  *
     * @param DescribeUserAssetRequest $request DescribeUserAssetRequest
     *
     * @return DescribeUserAssetResponse DescribeUserAssetResponse
     */
    public function describeUserAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAssetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the trends of attacks detected by the API security module.
     *  *
     * @param DescribeUserEventTrendRequest $request DescribeUserEventTrendRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserEventTrendResponse DescribeUserEventTrendResponse
     */
    public function describeUserEventTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
            'action' => 'DescribeUserEventTrend',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserEventTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trends of attacks detected by the API security module.
     *  *
     * @param DescribeUserEventTrendRequest $request DescribeUserEventTrendRequest
     *
     * @return DescribeUserEventTrendResponse DescribeUserEventTrendResponse
     */
    public function describeUserEventTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEventTrendWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the types and statistics of security events in the API security module.
     *  *
     * @param DescribeUserEventTypeRequest $request DescribeUserEventTypeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserEventTypeResponse DescribeUserEventTypeResponse
     */
    public function describeUserEventTypeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userStatusList)) {
            $query['UserStatusList'] = $request->userStatusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserEventType',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserEventTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the types and statistics of security events in the API security module.
     *  *
     * @param DescribeUserEventTypeRequest $request DescribeUserEventTypeRequest
     *
     * @return DescribeUserEventTypeResponse DescribeUserEventTypeResponse
     */
    public function describeUserEventType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEventTypeWithOptions($request, $runtime);
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
            'action' => 'DescribeUserSlsLogRegions',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeUserWafLogStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeVisitTopIp',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeVisitUas',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'DescribeWafSourceIpSegment',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'ListTagKeys',
            'version' => '2021-10-01',
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
            'action' => 'ListTagResources',
            'version' => '2021-10-01',
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagValues',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Modifies the status of multiple risks detected by the API security module at a time.
     *  *
     * @param ModifyApisecAbnormalsRequest $request ModifyApisecAbnormalsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApisecAbnormalsResponse ModifyApisecAbnormalsResponse
     */
    public function modifyApisecAbnormalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->abnormalIds)) {
            $query['AbnormalIds'] = $request->abnormalIds;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->userStatus)) {
            $query['UserStatus'] = $request->userStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApisecAbnormals',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApisecAbnormalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the status of multiple risks detected by the API security module at a time.
     *  *
     * @param ModifyApisecAbnormalsRequest $request ModifyApisecAbnormalsRequest
     *
     * @return ModifyApisecAbnormalsResponse ModifyApisecAbnormalsResponse
     */
    public function modifyApisecAbnormals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecAbnormalsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the annotations of APIs in the API security module.
     *  *
     * @param ModifyApisecApiResourceRequest $request ModifyApisecApiResourceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApisecApiResourceResponse ModifyApisecApiResourceResponse
     */
    public function modifyApisecApiResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->follow)) {
            $query['Follow'] = $request->follow;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
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
            'action' => 'ModifyApisecApiResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApisecApiResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the annotations of APIs in the API security module.
     *  *
     * @param ModifyApisecApiResourceRequest $request ModifyApisecApiResourceRequest
     *
     * @return ModifyApisecApiResourceResponse ModifyApisecApiResourceResponse
     */
    public function modifyApisecApiResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecApiResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the status of multiple security events detected by the API security module at a time.
     *  *
     * @param ModifyApisecEventsRequest $request ModifyApisecEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApisecEventsResponse ModifyApisecEventsResponse
     */
    public function modifyApisecEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->eventIds)) {
            $query['EventIds'] = $request->eventIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->userStatus)) {
            $query['UserStatus'] = $request->userStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApisecEvents',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApisecEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the status of multiple security events detected by the API security module at a time.
     *  *
     * @param ModifyApisecEventsRequest $request ModifyApisecEventsRequest
     *
     * @return ModifyApisecEventsResponse ModifyApisecEventsResponse
     */
    public function modifyApisecEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of API security log subscription.
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
            'action' => 'ModifyApisecLogDelivery',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApisecLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of API security log subscription.
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
     * @summary Modifies the status of API security log subscription.
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
            'action' => 'ModifyApisecLogDeliveryStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApisecLogDeliveryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the status of API security log subscription.
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
     * @summary Changes the status of features in the API security module for protected objects or protected object groups.
     *  *
     * @param ModifyApisecModuleStatusRequest $request ModifyApisecModuleStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApisecModuleStatusResponse ModifyApisecModuleStatusResponse
     */
    public function modifyApisecModuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reportStatus)) {
            $query['ReportStatus'] = $request->reportStatus;
        }
        if (!Utils::isUnset($request->resourceGroups)) {
            $query['ResourceGroups'] = $request->resourceGroups;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->traceStatus)) {
            $query['TraceStatus'] = $request->traceStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApisecModuleStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApisecModuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the status of features in the API security module for protected objects or protected object groups.
     *  *
     * @param ModifyApisecModuleStatusRequest $request ModifyApisecModuleStatusRequest
     *
     * @return ModifyApisecModuleStatusResponse ModifyApisecModuleStatusResponse
     */
    public function modifyApisecModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecModuleStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the status of the API security module for protected objects or protected object groups.
     *  *
     * @param ModifyApisecStatusRequest $request ModifyApisecStatusRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApisecStatusResponse ModifyApisecStatusResponse
     */
    public function modifyApisecStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apisecStatus)) {
            $query['ApisecStatus'] = $request->apisecStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroups)) {
            $query['ResourceGroups'] = $request->resourceGroups;
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
            'action' => 'ModifyApisecStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApisecStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the status of the API security module for protected objects or protected object groups.
     *  *
     * @param ModifyApisecStatusRequest $request ModifyApisecStatusRequest
     *
     * @return ModifyApisecStatusResponse ModifyApisecStatusResponse
     */
    public function modifyApisecStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a service that is added to Web Application Firewall (WAF).
     *  *
     * @param ModifyCloudResourceRequest $tmpReq  ModifyCloudResourceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCloudResourceResponse ModifyCloudResourceResponse
     */
    public function modifyCloudResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyCloudResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listen)) {
            $request->listenShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirect)) {
            $request->redirectShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }
        $query = [];
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
            'action' => 'ModifyCloudResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a service that is added to Web Application Firewall (WAF).
     *  *
     * @param ModifyCloudResourceRequest $request ModifyCloudResourceRequest
     *
     * @return ModifyCloudResourceResponse ModifyCloudResourceResponse
     */
    public function modifyCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the default Secure Sockets Layer (SSL) and Transport Layer Security (TLS) settings.
     *  *
     * @param ModifyDefaultHttpsRequest $request ModifyDefaultHttpsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefaultHttpsResponse ModifyDefaultHttpsResponse
     */
    public function modifyDefaultHttpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->cipherSuite)) {
            $query['CipherSuite'] = $request->cipherSuite;
        }
        if (!Utils::isUnset($request->customCiphers)) {
            $query['CustomCiphers'] = $request->customCiphers;
        }
        if (!Utils::isUnset($request->enableTLSv3)) {
            $query['EnableTLSv3'] = $request->enableTLSv3;
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
        if (!Utils::isUnset($request->TLSVersion)) {
            $query['TLSVersion'] = $request->TLSVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDefaultHttps',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDefaultHttpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the default Secure Sockets Layer (SSL) and Transport Layer Security (TLS) settings.
     *  *
     * @param ModifyDefaultHttpsRequest $request ModifyDefaultHttpsRequest
     *
     * @return ModifyDefaultHttpsResponse ModifyDefaultHttpsResponse
     */
    public function modifyDefaultHttps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefaultHttpsWithOptions($request, $runtime);
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
            'action' => 'ModifyDefenseResourceGroup',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->responseHeaders)) {
            $query['ResponseHeaders'] = $request->responseHeaders;
        }
        if (!Utils::isUnset($request->xffStatus)) {
            $query['XffStatus'] = $request->xffStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDefenseResourceXff',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $body = [];
        if (!Utils::isUnset($request->rules)) {
            $body['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDefenseRule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'ModifyDefenseRuleCache',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
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
            'action' => 'ModifyDefenseRuleStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'ModifyDefenseTemplate',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'ModifyDefenseTemplateStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
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
            'action' => 'ModifyDomain',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'ModifyDomainPunishStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Enables or disables manual bypass for a hybrid cloud cluster whose type is set to SDK Integration Mode.
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['RuleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHybridCloudClusterBypassStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridCloudClusterBypassStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables manual bypass for a hybrid cloud cluster whose type is set to SDK Integration Mode.
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
     * @summary Modifies the rule of a hybrid cloud cluster.
     *  *
     * @param ModifyHybridCloudClusterRuleRequest $request ModifyHybridCloudClusterRuleRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridCloudClusterRuleResponse ModifyHybridCloudClusterRuleResponse
     */
    public function modifyHybridCloudClusterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterRuleResourceId)) {
            $query['ClusterRuleResourceId'] = $request->clusterRuleResourceId;
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
        if (!Utils::isUnset($request->ruleConfig)) {
            $query['RuleConfig'] = $request->ruleConfig;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['RuleStatus'] = $request->ruleStatus;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHybridCloudClusterRule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridCloudClusterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the rule of a hybrid cloud cluster.
     *  *
     * @param ModifyHybridCloudClusterRuleRequest $request ModifyHybridCloudClusterRuleRequest
     *
     * @return ModifyHybridCloudClusterRuleResponse ModifyHybridCloudClusterRuleResponse
     */
    public function modifyHybridCloudClusterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudClusterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a node group in a hybrid cloud cluster.
     *  *
     * @param ModifyHybridCloudGroupRequest $request ModifyHybridCloudGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridCloudGroupResponse ModifyHybridCloudGroupResponse
     */
    public function modifyHybridCloudGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHybridCloudGroup',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridCloudGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a node group in a hybrid cloud cluster.
     *  *
     * @param ModifyHybridCloudGroupRequest $request ModifyHybridCloudGroupRequest
     *
     * @return ModifyHybridCloudGroupResponse ModifyHybridCloudGroupResponse
     */
    public function modifyHybridCloudGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a node to a node group of a hybrid cloud cluster.
     *  *
     * @param ModifyHybridCloudGroupExpansionServerRequest $request ModifyHybridCloudGroupExpansionServerRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridCloudGroupExpansionServerResponse ModifyHybridCloudGroupExpansionServerResponse
     */
    public function modifyHybridCloudGroupExpansionServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mids)) {
            $query['Mids'] = $request->mids;
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
            'action' => 'ModifyHybridCloudGroupExpansionServer',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridCloudGroupExpansionServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a node to a node group of a hybrid cloud cluster.
     *  *
     * @param ModifyHybridCloudGroupExpansionServerRequest $request ModifyHybridCloudGroupExpansionServerRequest
     *
     * @return ModifyHybridCloudGroupExpansionServerResponse ModifyHybridCloudGroupExpansionServerResponse
     */
    public function modifyHybridCloudGroupExpansionServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudGroupExpansionServerWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a node from a node group of a hybrid cloud cluster.
     *  *
     * @param ModifyHybridCloudGroupShrinkServerRequest $request ModifyHybridCloudGroupShrinkServerRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridCloudGroupShrinkServerResponse ModifyHybridCloudGroupShrinkServerResponse
     */
    public function modifyHybridCloudGroupShrinkServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mids)) {
            $query['Mids'] = $request->mids;
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
            'action' => 'ModifyHybridCloudGroupShrinkServer',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridCloudGroupShrinkServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a node from a node group of a hybrid cloud cluster.
     *  *
     * @param ModifyHybridCloudGroupShrinkServerRequest $request ModifyHybridCloudGroupShrinkServerRequest
     *
     * @return ModifyHybridCloudGroupShrinkServerResponse ModifyHybridCloudGroupShrinkServerResponse
     */
    public function modifyHybridCloudGroupShrinkServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudGroupShrinkServerWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the traffic redirection status of a hybrid cloud cluster by using an SDK.
     *  *
     * @param ModifyHybridCloudSdkPullinStatusRequest $request ModifyHybridCloudSdkPullinStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridCloudSdkPullinStatusResponse ModifyHybridCloudSdkPullinStatusResponse
     */
    public function modifyHybridCloudSdkPullinStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mid)) {
            $query['Mid'] = $request->mid;
        }
        if (!Utils::isUnset($request->pullinStatus)) {
            $query['PullinStatus'] = $request->pullinStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHybridCloudSdkPullinStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridCloudSdkPullinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the traffic redirection status of a hybrid cloud cluster by using an SDK.
     *  *
     * @param ModifyHybridCloudSdkPullinStatusRequest $request ModifyHybridCloudSdkPullinStatusRequest
     *
     * @return ModifyHybridCloudSdkPullinStatusResponse ModifyHybridCloudSdkPullinStatusResponse
     */
    public function modifyHybridCloudSdkPullinStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudSdkPullinStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a hybrid cloud node.
     *  *
     * @param ModifyHybridCloudServerRequest $request ModifyHybridCloudServerRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridCloudServerResponse ModifyHybridCloudServerResponse
     */
    public function modifyHybridCloudServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->continents)) {
            $query['Continents'] = $request->continents;
        }
        if (!Utils::isUnset($request->customName)) {
            $query['CustomName'] = $request->customName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mid)) {
            $query['Mid'] = $request->mid;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
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
            'action' => 'ModifyHybridCloudServer',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridCloudServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a hybrid cloud node.
     *  *
     * @param ModifyHybridCloudServerRequest $request ModifyHybridCloudServerRequest
     *
     * @return ModifyHybridCloudServerResponse ModifyHybridCloudServerResponse
     */
    public function modifyHybridCloudServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudServerWithOptions($request, $runtime);
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
            'action' => 'ModifyMajorProtectionBlackIp',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'ModifyMemberAccount',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary Modifies the protection status of Web Application Firewall (WAF).
     *  *
     * @param ModifyPauseProtectionStatusRequest $request ModifyPauseProtectionStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPauseProtectionStatusResponse ModifyPauseProtectionStatusResponse
     */
    public function modifyPauseProtectionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pauseStatus)) {
            $query['PauseStatus'] = $request->pauseStatus;
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
            'action' => 'ModifyPauseProtectionStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPauseProtectionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the protection status of Web Application Firewall (WAF).
     *  *
     * @param ModifyPauseProtectionStatusRequest $request ModifyPauseProtectionStatusRequest
     *
     * @return ModifyPauseProtectionStatusResponse ModifyPauseProtectionStatusResponse
     */
    public function modifyPauseProtectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPauseProtectionStatusWithOptions($request, $runtime);
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
            'action' => 'ModifyResourceLogStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
            'action' => 'ModifyTemplateResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
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
     * @summary 重新接入云产品
     *  *
     * @param ReCreateCloudResourceRequest $request ReCreateCloudResourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ReCreateCloudResourceResponse ReCreateCloudResourceResponse
     */
    public function reCreateCloudResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
        if (!Utils::isUnset($request->resourceProduct)) {
            $query['ResourceProduct'] = $request->resourceProduct;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ReCreateCloudResource',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReCreateCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重新接入云产品
     *  *
     * @param ReCreateCloudResourceRequest $request ReCreateCloudResourceRequest
     *
     * @return ReCreateCloudResourceResponse ReCreateCloudResourceResponse
     */
    public function reCreateCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reCreateCloudResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a Web Application Firewall (WAF) 3.0 instance.
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
            'action' => 'ReleaseInstance',
            'version' => '2021-10-01',
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
     * @summary Releases a Web Application Firewall (WAF) 3.0 instance.
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
     * @summary Synchronizes Elastic Compute Service (ECS), Classic Load Balancer (CLB), and Network Load Balancer (NLB) instances to Web Application Firewall (WAF).
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
            'action' => 'SyncProductInstance',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncProductInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Synchronizes Elastic Compute Service (ECS), Classic Load Balancer (CLB), and Network Load Balancer (NLB) instances to Web Application Firewall (WAF).
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
            'action' => 'TagResources',
            'version' => '2021-10-01',
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
            'action' => 'UntagResources',
            'version' => '2021-10-01',
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
