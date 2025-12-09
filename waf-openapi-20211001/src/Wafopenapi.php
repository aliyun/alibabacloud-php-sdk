<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudClusterRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudClusterResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudClusterRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudClusterRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateHybridCloudGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateLogDeliveryConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateLogDeliveryConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMemberAccountsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMemberAccountsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreatePocFunctionRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreatePocFunctionResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteHybridCloudGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteHybridCloudGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteLogDeliveryConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteLogDeliveryConfigResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventDetailRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventDetailResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeBaseSystemRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeBaseSystemRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeBotRuleLabelsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeBotRuleLabelsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeModuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeModuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeResultRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeResultResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessedPortsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessedPortsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCnameCountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCnameCountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCommonLogFieldsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCommonLogFieldsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCommonLogFieldsShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCustomBaseRuleCompileResultRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCustomBaseRuleCompileResultResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDDoSStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDDoSStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefaultHttpsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefaultHttpsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseGroupValidResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseGroupValidResourcesResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleStatisticsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleStatisticsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseSceneConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseSceneConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplatesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplatesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateValidGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateValidGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateValidResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateValidResourcesResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudBasicMonitorRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudBasicMonitorResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterServersRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterServersResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClustersRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClustersResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudProcessMonitorRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudProcessMonitorResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudProtectableCountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudProtectableCountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourceDetailRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourceDetailResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudSdkServersRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudSdkServersResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudServerRegionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudServerRegionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudSupportRegionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudSupportRegionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnassignedMachinesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnassignedMachinesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnsupportPortsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnsupportPortsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeLogDeliveryConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeLogDeliveryConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeLogDeliveryConfigsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeLogDeliveryConfigsResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePocFunctionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePocFunctionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePunishedDomainsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePunishedDomainsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceInstanceCertsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceInstanceCertsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogDeliveryStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogDeliveryStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogFieldConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogFieldConfigResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRoleAuthStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRoleAuthStatusResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserLogFieldConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserLogFieldConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserSlsLogRegionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserSlsLogRegionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserWafLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserWafLogStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVerifyContentRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVerifyContentResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\InitializeWafOperationRoleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\InitializeWafOperationRoleResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceCertRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceCertResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseSceneConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseSceneConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainCertRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainCertResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainPunishStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainPunishStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterBypassStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterBypassStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyLogDeliveryConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyLogDeliveryConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMemberAccountRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMemberAccountResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyPauseProtectionStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyPauseProtectionStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogDeliveryStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogDeliveryStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogFieldConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogFieldConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyTemplateResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyTemplateResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyUserLogFieldConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyUserLogFieldConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyUserWafLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyUserWafLogStatusResponse;
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
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\VerifyDomainOwnerRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\VerifyDomainOwnerResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Changes the resource group to which a protected object belongs.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Changes the resource group to which a protected object belongs.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Clears an IP address blacklist for major event protection.
     *
     * @param request - ClearMajorProtectionBlackIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearMajorProtectionBlackIpResponse
     *
     * @param ClearMajorProtectionBlackIpRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ClearMajorProtectionBlackIpResponse
     */
    public function clearMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Clears an IP address blacklist for major event protection.
     *
     * @param request - ClearMajorProtectionBlackIpRequest
     *
     * @returns ClearMajorProtectionBlackIpResponse
     *
     * @param ClearMajorProtectionBlackIpRequest $request
     *
     * @return ClearMajorProtectionBlackIpResponse
     */
    public function clearMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * Creates a new protection template from the copy.
     *
     * @param request - CopyDefenseTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyDefenseTemplateResponse
     *
     * @param CopyDefenseTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CopyDefenseTemplateResponse
     */
    public function copyDefenseTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a new protection template from the copy.
     *
     * @param request - CopyDefenseTemplateRequest
     *
     * @returns CopyDefenseTemplateResponse
     *
     * @param CopyDefenseTemplateRequest $request
     *
     * @return CopyDefenseTemplateResponse
     */
    public function copyDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a data export task in the API security module.
     *
     * @param request - CreateApiExportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiExportResponse
     *
     * @param CreateApiExportRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateApiExportResponse
     */
    public function createApiExportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->param) {
            @$query['Param'] = $request->param;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a data export task in the API security module.
     *
     * @param request - CreateApiExportRequest
     *
     * @returns CreateApiExportResponse
     *
     * @param CreateApiExportRequest $request
     *
     * @return CreateApiExportResponse
     */
    public function createApiExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiExportWithOptions($request, $runtime);
    }

    /**
     * Uploads a certificate that uses an internationally accepted algorithm for a domain name added to Web Application Firewall (WAF) in CNAME record mode.
     *
     * @param request - CreateCertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCertsResponse
     *
     * @param CreateCertsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateCertsResponse
     */
    public function createCertsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certContent) {
            @$query['CertContent'] = $request->certContent;
        }

        if (null !== $request->certKey) {
            @$query['CertKey'] = $request->certKey;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Uploads a certificate that uses an internationally accepted algorithm for a domain name added to Web Application Firewall (WAF) in CNAME record mode.
     *
     * @param request - CreateCertsRequest
     *
     * @returns CreateCertsResponse
     *
     * @param CreateCertsRequest $request
     *
     * @return CreateCertsResponse
     */
    public function createCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertsWithOptions($request, $runtime);
    }

    /**
     * Adds a service to Web Application Firewall (WAF). This operation is supported for only the Elastic Compute Service (ECS) and Classic Load Balancer (CLB) services.
     *
     * @param tmpReq - CreateCloudResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudResourceResponse
     *
     * @param CreateCloudResourceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateCloudResourceResponse
     */
    public function createCloudResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCloudResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->listen) {
            $request->listenShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }

        if (null !== $tmpReq->redirect) {
            $request->redirectShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->listenShrink) {
            @$query['Listen'] = $request->listenShrink;
        }

        if (null !== $request->ownerUserId) {
            @$query['OwnerUserId'] = $request->ownerUserId;
        }

        if (null !== $request->redirectShrink) {
            @$query['Redirect'] = $request->redirectShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Adds a service to Web Application Firewall (WAF). This operation is supported for only the Elastic Compute Service (ECS) and Classic Load Balancer (CLB) services.
     *
     * @param request - CreateCloudResourceRequest
     *
     * @returns CreateCloudResourceResponse
     *
     * @param CreateCloudResourceRequest $request
     *
     * @return CreateCloudResourceResponse
     */
    public function createCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudResourceWithOptions($request, $runtime);
    }

    /**
     * 创建防护对象
     *
     * @param tmpReq - CreateDefenseResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDefenseResourceResponse
     *
     * @param CreateDefenseResourceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDefenseResourceResponse
     */
    public function createDefenseResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDefenseResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customHeaders) {
            $request->customHeadersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customHeaders, 'CustomHeaders', 'json');
        }

        $query = [];
        if (null !== $request->customHeadersShrink) {
            @$query['CustomHeaders'] = $request->customHeadersShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->detail) {
            @$query['Detail'] = $request->detail;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerUserId) {
            @$query['OwnerUserId'] = $request->ownerUserId;
        }

        if (null !== $request->pattern) {
            @$query['Pattern'] = $request->pattern;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceGroup) {
            @$query['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceOrigin) {
            @$query['ResourceOrigin'] = $request->resourceOrigin;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->xffStatus) {
            @$query['XffStatus'] = $request->xffStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 创建防护对象
     *
     * @param request - CreateDefenseResourceRequest
     *
     * @returns CreateDefenseResourceResponse
     *
     * @param CreateDefenseResourceRequest $request
     *
     * @return CreateDefenseResourceResponse
     */
    public function createDefenseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseResourceWithOptions($request, $runtime);
    }

    /**
     * Creates a protected object group.
     *
     * @param request - CreateDefenseResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDefenseResourceGroupResponse
     *
     * @param CreateDefenseResourceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDefenseResourceGroupResponse
     */
    public function createDefenseResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addList) {
            @$query['AddList'] = $request->addList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a protected object group.
     *
     * @param request - CreateDefenseResourceGroupRequest
     *
     * @returns CreateDefenseResourceGroupResponse
     *
     * @param CreateDefenseResourceGroupRequest $request
     *
     * @return CreateDefenseResourceGroupResponse
     */
    public function createDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a protection rule.
     *
     * @param request - CreateDefenseRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDefenseRuleResponse
     *
     * @param CreateDefenseRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDefenseRuleResponse
     */
    public function createDefenseRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $body = [];
        if (null !== $request->rules) {
            @$body['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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
     * Creates a protection rule.
     *
     * @param request - CreateDefenseRuleRequest
     *
     * @returns CreateDefenseRuleResponse
     *
     * @param CreateDefenseRuleRequest $request
     *
     * @return CreateDefenseRuleResponse
     */
    public function createDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a protection rule template.
     *
     * @param request - CreateDefenseTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDefenseTemplateResponse
     *
     * @param CreateDefenseTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDefenseTemplateResponse
     */
    public function createDefenseTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateOrigin) {
            @$query['TemplateOrigin'] = $request->templateOrigin;
        }

        if (null !== $request->templateStatus) {
            @$query['TemplateStatus'] = $request->templateStatus;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        if (null !== $request->unbindResourceGroups) {
            @$query['UnbindResourceGroups'] = $request->unbindResourceGroups;
        }

        if (null !== $request->unbindResources) {
            @$query['UnbindResources'] = $request->unbindResources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a protection rule template.
     *
     * @param request - CreateDefenseTemplateRequest
     *
     * @returns CreateDefenseTemplateResponse
     *
     * @param CreateDefenseTemplateRequest $request
     *
     * @return CreateDefenseTemplateResponse
     */
    public function createDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * Adds a domain name to Web Application Firewall (WAF).
     *
     * @param tmpReq - CreateDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDomainShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->listen) {
            $request->listenShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }

        if (null !== $tmpReq->redirect) {
            $request->redirectShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }

        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->listenShrink) {
            @$query['Listen'] = $request->listenShrink;
        }

        if (null !== $request->redirectShrink) {
            @$query['Redirect'] = $request->redirectShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Adds a domain name to Web Application Firewall (WAF).
     *
     * @param request - CreateDomainRequest
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * Creates a hybrid cloud cluster.
     *
     * @param request - CreateHybridCloudClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHybridCloudClusterResponse
     *
     * @param CreateHybridCloudClusterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateHybridCloudClusterResponse
     */
    public function createHybridCloudClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessMode) {
            @$query['AccessMode'] = $request->accessMode;
        }

        if (null !== $request->accessRegion) {
            @$query['AccessRegion'] = $request->accessRegion;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->httpPorts) {
            @$query['HttpPorts'] = $request->httpPorts;
        }

        if (null !== $request->httpsPorts) {
            @$query['HttpsPorts'] = $request->httpsPorts;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logFieldsNotReturned) {
            @$query['LogFieldsNotReturned'] = $request->logFieldsNotReturned;
        }

        if (null !== $request->protectionServerCount) {
            @$query['ProtectionServerCount'] = $request->protectionServerCount;
        }

        if (null !== $request->proxyStatus) {
            @$query['ProxyStatus'] = $request->proxyStatus;
        }

        if (null !== $request->proxyType) {
            @$query['ProxyType'] = $request->proxyType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleConfig) {
            @$query['RuleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->ruleStatus) {
            @$query['RuleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHybridCloudCluster',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHybridCloudClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a hybrid cloud cluster.
     *
     * @param request - CreateHybridCloudClusterRequest
     *
     * @returns CreateHybridCloudClusterResponse
     *
     * @param CreateHybridCloudClusterRequest $request
     *
     * @return CreateHybridCloudClusterResponse
     */
    public function createHybridCloudCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridCloudClusterWithOptions($request, $runtime);
    }

    /**
     * 新增集群规则信息.
     *
     * @param request - CreateHybridCloudClusterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHybridCloudClusterRuleResponse
     *
     * @param CreateHybridCloudClusterRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateHybridCloudClusterRuleResponse
     */
    public function createHybridCloudClusterRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleConfig) {
            @$query['RuleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->ruleStatus) {
            @$query['RuleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 新增集群规则信息.
     *
     * @param request - CreateHybridCloudClusterRuleRequest
     *
     * @returns CreateHybridCloudClusterRuleResponse
     *
     * @param CreateHybridCloudClusterRuleRequest $request
     *
     * @return CreateHybridCloudClusterRuleResponse
     */
    public function createHybridCloudClusterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridCloudClusterRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a node group for a hybrid cloud cluster.
     *
     * @param request - CreateHybridCloudGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHybridCloudGroupResponse
     *
     * @param CreateHybridCloudGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateHybridCloudGroupResponse
     */
    public function createHybridCloudGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backSourceMark) {
            @$query['BackSourceMark'] = $request->backSourceMark;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->loadBalanceIp) {
            @$query['LoadBalanceIp'] = $request->loadBalanceIp;
        }

        if (null !== $request->locationCode) {
            @$query['LocationCode'] = $request->locationCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a node group for a hybrid cloud cluster.
     *
     * @param request - CreateHybridCloudGroupRequest
     *
     * @returns CreateHybridCloudGroupResponse
     *
     * @param CreateHybridCloudGroupRequest $request
     *
     * @return CreateHybridCloudGroupResponse
     */
    public function createHybridCloudGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridCloudGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a hybrid cloud log delivery configuration.
     *
     * @param request - CreateLogDeliveryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogDeliveryConfigResponse
     *
     * @param CreateLogDeliveryConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateLogDeliveryConfigResponse
     */
    public function createLogDeliveryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryDetail) {
            @$query['DeliveryDetail'] = $request->deliveryDetail;
        }

        if (null !== $request->deliveryName) {
            @$query['DeliveryName'] = $request->deliveryName;
        }

        if (null !== $request->deliveryType) {
            @$query['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLogDeliveryConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLogDeliveryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a hybrid cloud log delivery configuration.
     *
     * @param request - CreateLogDeliveryConfigRequest
     *
     * @returns CreateLogDeliveryConfigResponse
     *
     * @param CreateLogDeliveryConfigRequest $request
     *
     * @return CreateLogDeliveryConfigResponse
     */
    public function createLogDeliveryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogDeliveryConfigWithOptions($request, $runtime);
    }

    /**
     * Creates an IP address blacklist for major event protection.
     *
     * @remarks
     * This operation is available only on the China site (aliyun.com).
     *
     * @param request - CreateMajorProtectionBlackIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMajorProtectionBlackIpResponse
     *
     * @param CreateMajorProtectionBlackIpRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateMajorProtectionBlackIpResponse
     */
    public function createMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->expiredTime) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipList) {
            @$query['IpList'] = $request->ipList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates an IP address blacklist for major event protection.
     *
     * @remarks
     * This operation is available only on the China site (aliyun.com).
     *
     * @param request - CreateMajorProtectionBlackIpRequest
     *
     * @returns CreateMajorProtectionBlackIpResponse
     *
     * @param CreateMajorProtectionBlackIpRequest $request
     *
     * @return CreateMajorProtectionBlackIpResponse
     */
    public function createMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * Adds members to use the multi-account management feature of Web Application Firewall (WAF).
     *
     * @param request - CreateMemberAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemberAccountsResponse
     *
     * @param CreateMemberAccountsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMemberAccountsResponse
     */
    public function createMemberAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memberAccountIds) {
            @$query['MemberAccountIds'] = $request->memberAccountIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Adds members to use the multi-account management feature of Web Application Firewall (WAF).
     *
     * @param request - CreateMemberAccountsRequest
     *
     * @returns CreateMemberAccountsResponse
     *
     * @param CreateMemberAccountsRequest $request
     *
     * @return CreateMemberAccountsResponse
     */
    public function createMemberAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMemberAccountsWithOptions($request, $runtime);
    }

    /**
     * 开启防护功能POC.
     *
     * @param request - CreatePocFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePocFunctionResponse
     *
     * @param CreatePocFunctionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePocFunctionResponse
     */
    public function createPocFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePocFunction',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePocFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启防护功能POC.
     *
     * @param request - CreatePocFunctionRequest
     *
     * @returns CreatePocFunctionResponse
     *
     * @param CreatePocFunctionRequest $request
     *
     * @return CreatePocFunctionResponse
     */
    public function createPocFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPocFunctionWithOptions($request, $runtime);
    }

    /**
     * Creates a pay-as-you-go Web Application Firewall (WAF) 3.0 instance.
     *
     * @param request - CreatePostpaidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePostpaidInstanceResponse
     *
     * @param CreatePostpaidInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePostpaidInstanceResponse
     */
    public function createPostpaidInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a pay-as-you-go Web Application Firewall (WAF) 3.0 instance.
     *
     * @param request - CreatePostpaidInstanceRequest
     *
     * @returns CreatePostpaidInstanceResponse
     *
     * @param CreatePostpaidInstanceRequest $request
     *
     * @return CreatePostpaidInstanceResponse
     */
    public function createPostpaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPostpaidInstanceWithOptions($request, $runtime);
    }

    /**
     * Uploads a ShangMi (SM) certificate for a domain name that is added to Web Application Firewall (WAF) in CNAME record mode.
     *
     * @param request - CreateSM2CertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSM2CertResponse
     *
     * @param CreateSM2CertRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSM2CertResponse
     */
    public function createSM2CertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->encryptCertificate) {
            @$query['EncryptCertificate'] = $request->encryptCertificate;
        }

        if (null !== $request->encryptPrivateKey) {
            @$query['EncryptPrivateKey'] = $request->encryptPrivateKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->signCertificate) {
            @$query['SignCertificate'] = $request->signCertificate;
        }

        if (null !== $request->signPrivateKey) {
            @$query['SignPrivateKey'] = $request->signPrivateKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Uploads a ShangMi (SM) certificate for a domain name that is added to Web Application Firewall (WAF) in CNAME record mode.
     *
     * @param request - CreateSM2CertRequest
     *
     * @returns CreateSM2CertResponse
     *
     * @param CreateSM2CertRequest $request
     *
     * @return CreateSM2CertResponse
     */
    public function createSM2Cert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSM2CertWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple risks detected by the API security module at a time.
     *
     * @param request - DeleteApisecAbnormalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApisecAbnormalsResponse
     *
     * @param DeleteApisecAbnormalsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteApisecAbnormalsResponse
     */
    public function deleteApisecAbnormalsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->abnormalIds) {
            @$query['AbnormalIds'] = $request->abnormalIds;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes multiple risks detected by the API security module at a time.
     *
     * @param request - DeleteApisecAbnormalsRequest
     *
     * @returns DeleteApisecAbnormalsResponse
     *
     * @param DeleteApisecAbnormalsRequest $request
     *
     * @return DeleteApisecAbnormalsResponse
     */
    public function deleteApisecAbnormals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApisecAbnormalsWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple security events detected by the API security module at a time.
     *
     * @param request - DeleteApisecEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApisecEventsResponse
     *
     * @param DeleteApisecEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteApisecEventsResponse
     */
    public function deleteApisecEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->eventIds) {
            @$query['EventIds'] = $request->eventIds;
        }

        if (null !== $request->eventScope) {
            @$query['EventScope'] = $request->eventScope;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes multiple security events detected by the API security module at a time.
     *
     * @param request - DeleteApisecEventsRequest
     *
     * @returns DeleteApisecEventsResponse
     *
     * @param DeleteApisecEventsRequest $request
     *
     * @return DeleteApisecEventsResponse
     */
    public function deleteApisecEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApisecEventsWithOptions($request, $runtime);
    }

    /**
     * Removes a service from Web Application Firewall (WAF). This operation is supported for only the Elastic Compute Service (ECS) and Classic Load Balancer (CLB) services.
     *
     * @param request - DeleteCloudResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudResourceResponse
     *
     * @param DeleteCloudResourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCloudResourceResponse
     */
    public function deleteCloudResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudResourceId) {
            @$query['CloudResourceId'] = $request->cloudResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceProduct) {
            @$query['ResourceProduct'] = $request->resourceProduct;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Removes a service from Web Application Firewall (WAF). This operation is supported for only the Elastic Compute Service (ECS) and Classic Load Balancer (CLB) services.
     *
     * @param request - DeleteCloudResourceRequest
     *
     * @returns DeleteCloudResourceResponse
     *
     * @param DeleteCloudResourceRequest $request
     *
     * @return DeleteCloudResourceResponse
     */
    public function deleteCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudResourceWithOptions($request, $runtime);
    }

    /**
     * 删除单个防护对象
     *
     * @param request - DeleteDefenseResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDefenseResourceResponse
     *
     * @param DeleteDefenseResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDefenseResourceResponse
     */
    public function deleteDefenseResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 删除单个防护对象
     *
     * @param request - DeleteDefenseResourceRequest
     *
     * @returns DeleteDefenseResourceResponse
     *
     * @param DeleteDefenseResourceRequest $request
     *
     * @return DeleteDefenseResourceResponse
     */
    public function deleteDefenseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseResourceWithOptions($request, $runtime);
    }

    /**
     * Deletes a protected object group.
     *
     * @param request - DeleteDefenseResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDefenseResourceGroupResponse
     *
     * @param DeleteDefenseResourceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDefenseResourceGroupResponse
     */
    public function deleteDefenseResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes a protected object group.
     *
     * @param request - DeleteDefenseResourceGroupRequest
     *
     * @returns DeleteDefenseResourceGroupResponse
     *
     * @param DeleteDefenseResourceGroupRequest $request
     *
     * @return DeleteDefenseResourceGroupResponse
     */
    public function deleteDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a protection rule.
     *
     * @param request - DeleteDefenseRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDefenseRuleResponse
     *
     * @param DeleteDefenseRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDefenseRuleResponse
     */
    public function deleteDefenseRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleIds) {
            @$query['RuleIds'] = $request->ruleIds;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes a protection rule.
     *
     * @param request - DeleteDefenseRuleRequest
     *
     * @returns DeleteDefenseRuleResponse
     *
     * @param DeleteDefenseRuleRequest $request
     *
     * @return DeleteDefenseRuleResponse
     */
    public function deleteDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * 更新防护规则封禁Ip.
     *
     * @param request - DeleteDefenseRuleBlockIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDefenseRuleBlockIpResponse
     *
     * @param DeleteDefenseRuleBlockIpRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDefenseRuleBlockIpResponse
     */
    public function deleteDefenseRuleBlockIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 更新防护规则封禁Ip.
     *
     * @param request - DeleteDefenseRuleBlockIpRequest
     *
     * @returns DeleteDefenseRuleBlockIpResponse
     *
     * @param DeleteDefenseRuleBlockIpRequest $request
     *
     * @return DeleteDefenseRuleBlockIpResponse
     */
    public function deleteDefenseRuleBlockIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseRuleBlockIpWithOptions($request, $runtime);
    }

    /**
     * Deletes a protection rule template.
     *
     * @param request - DeleteDefenseTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDefenseTemplateResponse
     *
     * @param DeleteDefenseTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDefenseTemplateResponse
     */
    public function deleteDefenseTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes a protection rule template.
     *
     * @param request - DeleteDefenseTemplateRequest
     *
     * @returns DeleteDefenseTemplateResponse
     *
     * @param DeleteDefenseTemplateRequest $request
     *
     * @return DeleteDefenseTemplateResponse
     */
    public function deleteDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a domain name that is added to Web Application Firewall (WAF).
     *
     * @param request - DeleteDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
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
     * Deletes a domain name that is added to Web Application Firewall (WAF).
     *
     * @param request - DeleteDomainRequest
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * 删除集群规则信息.
     *
     * @param request - DeleteHybridCloudClusterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHybridCloudClusterRuleResponse
     *
     * @param DeleteHybridCloudClusterRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteHybridCloudClusterRuleResponse
     */
    public function deleteHybridCloudClusterRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterRuleResourceId) {
            @$query['ClusterRuleResourceId'] = $request->clusterRuleResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 删除集群规则信息.
     *
     * @param request - DeleteHybridCloudClusterRuleRequest
     *
     * @returns DeleteHybridCloudClusterRuleResponse
     *
     * @param DeleteHybridCloudClusterRuleRequest $request
     *
     * @return DeleteHybridCloudClusterRuleResponse
     */
    public function deleteHybridCloudClusterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridCloudClusterRuleWithOptions($request, $runtime);
    }

    /**
     * 删除组信息.
     *
     * @param request - DeleteHybridCloudGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHybridCloudGroupResponse
     *
     * @param DeleteHybridCloudGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteHybridCloudGroupResponse
     */
    public function deleteHybridCloudGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHybridCloudGroup',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHybridCloudGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除组信息.
     *
     * @param request - DeleteHybridCloudGroupRequest
     *
     * @returns DeleteHybridCloudGroupResponse
     *
     * @param DeleteHybridCloudGroupRequest $request
     *
     * @return DeleteHybridCloudGroupResponse
     */
    public function deleteHybridCloudGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridCloudGroupWithOptions($request, $runtime);
    }

    /**
     * 删除日志外发配置.
     *
     * @param request - DeleteLogDeliveryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogDeliveryConfigResponse
     *
     * @param DeleteLogDeliveryConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteLogDeliveryConfigResponse
     */
    public function deleteLogDeliveryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryName) {
            @$query['DeliveryName'] = $request->deliveryName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLogDeliveryConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLogDeliveryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除日志外发配置.
     *
     * @param request - DeleteLogDeliveryConfigRequest
     *
     * @returns DeleteLogDeliveryConfigResponse
     *
     * @param DeleteLogDeliveryConfigRequest $request
     *
     * @return DeleteLogDeliveryConfigResponse
     */
    public function deleteLogDeliveryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogDeliveryConfigWithOptions($request, $runtime);
    }

    /**
     * Deletes an IP address blacklist for major event protection.
     *
     * @param request - DeleteMajorProtectionBlackIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMajorProtectionBlackIpResponse
     *
     * @param DeleteMajorProtectionBlackIpRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteMajorProtectionBlackIpResponse
     */
    public function deleteMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipList) {
            @$query['IpList'] = $request->ipList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes an IP address blacklist for major event protection.
     *
     * @param request - DeleteMajorProtectionBlackIpRequest
     *
     * @returns DeleteMajorProtectionBlackIpResponse
     *
     * @param DeleteMajorProtectionBlackIpRequest $request
     *
     * @return DeleteMajorProtectionBlackIpResponse
     */
    public function deleteMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * Removes the members that are added for multi-account management in Web Application Firewall (WAF).
     *
     * @param request - DeleteMemberAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemberAccountResponse
     *
     * @param DeleteMemberAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMemberAccountResponse
     */
    public function deleteMemberAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memberAccountId) {
            @$query['MemberAccountId'] = $request->memberAccountId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Removes the members that are added for multi-account management in Web Application Firewall (WAF).
     *
     * @param request - DeleteMemberAccountRequest
     *
     * @returns DeleteMemberAccountResponse
     *
     * @param DeleteMemberAccountRequest $request
     *
     * @return DeleteMemberAccountResponse
     */
    public function deleteMemberAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMemberAccountWithOptions($request, $runtime);
    }

    /**
     * 查询异常的云产品接入资源.
     *
     * @param request - DescribeAbnormalCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAbnormalCloudResourcesResponse
     *
     * @param DescribeAbnormalCloudResourcesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAbnormalCloudResourcesResponse
     */
    public function describeAbnormalCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 查询异常的云产品接入资源.
     *
     * @param request - DescribeAbnormalCloudResourcesRequest
     *
     * @returns DescribeAbnormalCloudResourcesResponse
     *
     * @param DescribeAbnormalCloudResourcesRequest $request
     *
     * @return DescribeAbnormalCloudResourcesResponse
     */
    public function describeAbnormalCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAbnormalCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries whether an Alibaba Cloud account is the delegated administrator account of a Web Application Firewall (WAF) instance.
     *
     * @param request - DescribeAccountDelegatedStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountDelegatedStatusResponse
     *
     * @param DescribeAccountDelegatedStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAccountDelegatedStatusResponse
     */
    public function describeAccountDelegatedStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries whether an Alibaba Cloud account is the delegated administrator account of a Web Application Firewall (WAF) instance.
     *
     * @param request - DescribeAccountDelegatedStatusRequest
     *
     * @returns DescribeAccountDelegatedStatusResponse
     *
     * @param DescribeAccountDelegatedStatusRequest $request
     *
     * @return DescribeAccountDelegatedStatusResponse
     */
    public function describeAccountDelegatedStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountDelegatedStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the list of data export tasks in the API security module.
     *
     * @param request - DescribeApiExportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiExportsResponse
     *
     * @param DescribeApiExportsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiExportsResponse
     */
    public function describeApiExportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the list of data export tasks in the API security module.
     *
     * @param request - DescribeApiExportsRequest
     *
     * @returns DescribeApiExportsResponse
     *
     * @param DescribeApiExportsRequest $request
     *
     * @return DescribeApiExportsResponse
     */
    public function describeApiExports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiExportsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on domain names on which risks are detected by the API security module.
     *
     * @param request - DescribeApisecAbnormalDomainStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecAbnormalDomainStatisticResponse
     *
     * @param DescribeApisecAbnormalDomainStatisticRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeApisecAbnormalDomainStatisticResponse
     */
    public function describeApisecAbnormalDomainStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderWay) {
            @$query['OrderWay'] = $request->orderWay;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the statistics on domain names on which risks are detected by the API security module.
     *
     * @param request - DescribeApisecAbnormalDomainStatisticRequest
     *
     * @returns DescribeApisecAbnormalDomainStatisticResponse
     *
     * @param DescribeApisecAbnormalDomainStatisticRequest $request
     *
     * @return DescribeApisecAbnormalDomainStatisticResponse
     */
    public function describeApisecAbnormalDomainStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecAbnormalDomainStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the list of API security risks.
     *
     * @param request - DescribeApisecAbnormalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecAbnormalsResponse
     *
     * @param DescribeApisecAbnormalsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApisecAbnormalsResponse
     */
    public function describeApisecAbnormalsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->abnormalId) {
            @$query['AbnormalId'] = $request->abnormalId;
        }

        if (null !== $request->abnormalLevel) {
            @$query['AbnormalLevel'] = $request->abnormalLevel;
        }

        if (null !== $request->abnormalTag) {
            @$query['AbnormalTag'] = $request->abnormalTag;
        }

        if (null !== $request->apiFormat) {
            @$query['ApiFormat'] = $request->apiFormat;
        }

        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiTag) {
            @$query['ApiTag'] = $request->apiTag;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->matchedHost) {
            @$query['MatchedHost'] = $request->matchedHost;
        }

        if (null !== $request->orderKey) {
            @$query['OrderKey'] = $request->orderKey;
        }

        if (null !== $request->orderWay) {
            @$query['OrderWay'] = $request->orderWay;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userStatus) {
            @$query['UserStatus'] = $request->userStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the list of API security risks.
     *
     * @param request - DescribeApisecAbnormalsRequest
     *
     * @returns DescribeApisecAbnormalsResponse
     *
     * @param DescribeApisecAbnormalsRequest $request
     *
     * @return DescribeApisecAbnormalsResponse
     */
    public function describeApisecAbnormals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecAbnormalsWithOptions($request, $runtime);
    }

    /**
     * Queries API assets in the API security module.
     *
     * @param request - DescribeApisecApiResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecApiResourcesResponse
     *
     * @param DescribeApisecApiResourcesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeApisecApiResourcesResponse
     */
    public function describeApisecApiResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiFormat) {
            @$query['ApiFormat'] = $request->apiFormat;
        }

        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiMethod) {
            @$query['ApiMethod'] = $request->apiMethod;
        }

        if (null !== $request->apiStatus) {
            @$query['ApiStatus'] = $request->apiStatus;
        }

        if (null !== $request->apiTag) {
            @$query['ApiTag'] = $request->apiTag;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->authFlag) {
            @$query['AuthFlag'] = $request->authFlag;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->follow) {
            @$query['Follow'] = $request->follow;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->matchedHost) {
            @$query['MatchedHost'] = $request->matchedHost;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->orderKey) {
            @$query['OrderKey'] = $request->orderKey;
        }

        if (null !== $request->orderWay) {
            @$query['OrderWay'] = $request->orderWay;
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

        if (null !== $request->requestSensitiveType) {
            @$query['RequestSensitiveType'] = $request->requestSensitiveType;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->sensitiveLevel) {
            @$query['SensitiveLevel'] = $request->sensitiveLevel;
        }

        if (null !== $request->sensitiveType) {
            @$query['SensitiveType'] = $request->sensitiveType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries API assets in the API security module.
     *
     * @param request - DescribeApisecApiResourcesRequest
     *
     * @returns DescribeApisecApiResourcesResponse
     *
     * @param DescribeApisecApiResourcesRequest $request
     *
     * @return DescribeApisecApiResourcesResponse
     */
    public function describeApisecApiResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecApiResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the asset trends in the API security module.
     *
     * @param request - DescribeApisecAssetTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecAssetTrendResponse
     *
     * @param DescribeApisecAssetTrendRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeApisecAssetTrendResponse
     */
    public function describeApisecAssetTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the asset trends in the API security module.
     *
     * @param request - DescribeApisecAssetTrendRequest
     *
     * @returns DescribeApisecAssetTrendResponse
     *
     * @param DescribeApisecAssetTrendRequest $request
     *
     * @return DescribeApisecAssetTrendResponse
     */
    public function describeApisecAssetTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecAssetTrendWithOptions($request, $runtime);
    }

    /**
     * 查询安全事件详情.
     *
     * @param request - DescribeApisecEventDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecEventDetailResponse
     *
     * @param DescribeApisecEventDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApisecEventDetailResponse
     */
    public function describeApisecEventDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->detailType) {
            @$query['DetailType'] = $request->detailType;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->eventScope) {
            @$query['EventScope'] = $request->eventScope;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisecEventDetail',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisecEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询安全事件详情.
     *
     * @param request - DescribeApisecEventDetailRequest
     *
     * @returns DescribeApisecEventDetailResponse
     *
     * @param DescribeApisecEventDetailRequest $request
     *
     * @return DescribeApisecEventDetailResponse
     */
    public function describeApisecEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecEventDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on domain names on which security events are detected by the API security module.
     *
     * @param request - DescribeApisecEventDomainStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecEventDomainStatisticResponse
     *
     * @param DescribeApisecEventDomainStatisticRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeApisecEventDomainStatisticResponse
     */
    public function describeApisecEventDomainStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderWay) {
            @$query['OrderWay'] = $request->orderWay;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the statistics on domain names on which security events are detected by the API security module.
     *
     * @param request - DescribeApisecEventDomainStatisticRequest
     *
     * @returns DescribeApisecEventDomainStatisticResponse
     *
     * @param DescribeApisecEventDomainStatisticRequest $request
     *
     * @return DescribeApisecEventDomainStatisticResponse
     */
    public function describeApisecEventDomainStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecEventDomainStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries API security events.
     *
     * @param request - DescribeApisecEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecEventsResponse
     *
     * @param DescribeApisecEventsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeApisecEventsResponse
     */
    public function describeApisecEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->apiFormat) {
            @$query['ApiFormat'] = $request->apiFormat;
        }

        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiTag) {
            @$query['ApiTag'] = $request->apiTag;
        }

        if (null !== $request->attackIp) {
            @$query['AttackIp'] = $request->attackIp;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->eventLevel) {
            @$query['EventLevel'] = $request->eventLevel;
        }

        if (null !== $request->eventScope) {
            @$query['EventScope'] = $request->eventScope;
        }

        if (null !== $request->eventTag) {
            @$query['EventTag'] = $request->eventTag;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->matchedHost) {
            @$query['MatchedHost'] = $request->matchedHost;
        }

        if (null !== $request->orderKey) {
            @$query['OrderKey'] = $request->orderKey;
        }

        if (null !== $request->orderWay) {
            @$query['OrderWay'] = $request->orderWay;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        if (null !== $request->userStatus) {
            @$query['UserStatus'] = $request->userStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries API security events.
     *
     * @param request - DescribeApisecEventsRequest
     *
     * @returns DescribeApisecEventsResponse
     *
     * @param DescribeApisecEventsRequest $request
     *
     * @return DescribeApisecEventsResponse
     */
    public function describeApisecEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of API security log subscription.
     *
     * @param request - DescribeApisecLogDeliveriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecLogDeliveriesResponse
     *
     * @param DescribeApisecLogDeliveriesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeApisecLogDeliveriesResponse
     */
    public function describeApisecLogDeliveriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the configurations of API security log subscription.
     *
     * @param request - DescribeApisecLogDeliveriesRequest
     *
     * @returns DescribeApisecLogDeliveriesResponse
     *
     * @param DescribeApisecLogDeliveriesRequest $request
     *
     * @return DescribeApisecLogDeliveriesResponse
     */
    public function describeApisecLogDeliveries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecLogDeliveriesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of domain names detected in the API security module.
     *
     * @param request - DescribeApisecMatchedHostsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecMatchedHostsResponse
     *
     * @param DescribeApisecMatchedHostsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeApisecMatchedHostsResponse
     */
    public function describeApisecMatchedHostsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->matchedHost) {
            @$query['MatchedHost'] = $request->matchedHost;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the list of domain names detected in the API security module.
     *
     * @param request - DescribeApisecMatchedHostsRequest
     *
     * @returns DescribeApisecMatchedHostsResponse
     *
     * @param DescribeApisecMatchedHostsRequest $request
     *
     * @return DescribeApisecMatchedHostsResponse
     */
    public function describeApisecMatchedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecMatchedHostsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of protected object groups to which API security policies are applied.
     *
     * @param request - DescribeApisecProtectionGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecProtectionGroupsResponse
     *
     * @param DescribeApisecProtectionGroupsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeApisecProtectionGroupsResponse
     */
    public function describeApisecProtectionGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apisecStatus) {
            @$query['ApisecStatus'] = $request->apisecStatus;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroup) {
            @$query['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the list of protected object groups to which API security policies are applied.
     *
     * @param request - DescribeApisecProtectionGroupsRequest
     *
     * @returns DescribeApisecProtectionGroupsResponse
     *
     * @param DescribeApisecProtectionGroupsRequest $request
     *
     * @return DescribeApisecProtectionGroupsResponse
     */
    public function describeApisecProtectionGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecProtectionGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of protected objects to which API security policies are applied.
     *
     * @param request - DescribeApisecProtectionResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecProtectionResourcesResponse
     *
     * @param DescribeApisecProtectionResourcesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeApisecProtectionResourcesResponse
     */
    public function describeApisecProtectionResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apisecStatus) {
            @$query['ApisecStatus'] = $request->apisecStatus;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the list of protected objects to which API security policies are applied.
     *
     * @param request - DescribeApisecProtectionResourcesRequest
     *
     * @returns DescribeApisecProtectionResourcesResponse
     *
     * @param DescribeApisecProtectionResourcesRequest $request
     *
     * @return DescribeApisecProtectionResourcesResponse
     */
    public function describeApisecProtectionResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecProtectionResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the policies configured in the API security module.
     *
     * @param request - DescribeApisecRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecRulesResponse
     *
     * @param DescribeApisecRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApisecRulesResponse
     */
    public function describeApisecRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the policies configured in the API security module.
     *
     * @param request - DescribeApisecRulesRequest
     *
     * @returns DescribeApisecRulesResponse
     *
     * @param DescribeApisecRulesRequest $request
     *
     * @return DescribeApisecRulesResponse
     */
    public function describeApisecRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on domain names on which sensitive data is detected by the API security module.
     *
     * @param request - DescribeApisecSensitiveDomainStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecSensitiveDomainStatisticResponse
     *
     * @param DescribeApisecSensitiveDomainStatisticRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeApisecSensitiveDomainStatisticResponse
     */
    public function describeApisecSensitiveDomainStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderWay) {
            @$query['OrderWay'] = $request->orderWay;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the statistics on domain names on which sensitive data is detected by the API security module.
     *
     * @param request - DescribeApisecSensitiveDomainStatisticRequest
     *
     * @returns DescribeApisecSensitiveDomainStatisticResponse
     *
     * @param DescribeApisecSensitiveDomainStatisticRequest $request
     *
     * @return DescribeApisecSensitiveDomainStatisticResponse
     */
    public function describeApisecSensitiveDomainStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecSensitiveDomainStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the Logstores whose names start with apisec- in Simple Log Service.
     *
     * @param request - DescribeApisecSlsLogStoresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecSlsLogStoresResponse
     *
     * @param DescribeApisecSlsLogStoresRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeApisecSlsLogStoresResponse
     */
    public function describeApisecSlsLogStoresWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logRegionId) {
            @$query['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the Logstores whose names start with apisec- in Simple Log Service.
     *
     * @param request - DescribeApisecSlsLogStoresRequest
     *
     * @returns DescribeApisecSlsLogStoresResponse
     *
     * @param DescribeApisecSlsLogStoresRequest $request
     *
     * @return DescribeApisecSlsLogStoresResponse
     */
    public function describeApisecSlsLogStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecSlsLogStoresWithOptions($request, $runtime);
    }

    /**
     * Queries the projects whose names start with apisec- in Simple Log Service.
     *
     * @param request - DescribeApisecSlsProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecSlsProjectsResponse
     *
     * @param DescribeApisecSlsProjectsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApisecSlsProjectsResponse
     */
    public function describeApisecSlsProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logRegionId) {
            @$query['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the projects whose names start with apisec- in Simple Log Service.
     *
     * @param request - DescribeApisecSlsProjectsRequest
     *
     * @returns DescribeApisecSlsProjectsResponse
     *
     * @param DescribeApisecSlsProjectsRequest $request
     *
     * @return DescribeApisecSlsProjectsResponse
     */
    public function describeApisecSlsProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecSlsProjectsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of API security-related risks and events.
     *
     * @param request - DescribeApisecStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecStatisticsResponse
     *
     * @param DescribeApisecStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeApisecStatisticsResponse
     */
    public function describeApisecStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userStatusList) {
            @$query['UserStatusList'] = $request->userStatusList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the statistics of API security-related risks and events.
     *
     * @param request - DescribeApisecStatisticsRequest
     *
     * @returns DescribeApisecStatisticsResponse
     *
     * @param DescribeApisecStatisticsRequest $request
     *
     * @return DescribeApisecStatisticsResponse
     */
    public function describeApisecStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the protection suggestions for APIs.
     *
     * @param request - DescribeApisecSuggestionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecSuggestionsResponse
     *
     * @param DescribeApisecSuggestionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApisecSuggestionsResponse
     */
    public function describeApisecSuggestionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the protection suggestions for APIs.
     *
     * @param request - DescribeApisecSuggestionsRequest
     *
     * @returns DescribeApisecSuggestionsResponse
     *
     * @param DescribeApisecSuggestionsRequest $request
     *
     * @return DescribeApisecSuggestionsResponse
     */
    public function describeApisecSuggestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecSuggestionsWithOptions($request, $runtime);
    }

    /**
     * Queries user operation records in the API security module.
     *
     * @param request - DescribeApisecUserOperationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisecUserOperationsResponse
     *
     * @param DescribeApisecUserOperationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApisecUserOperationsResponse
     */
    public function describeApisecUserOperationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries user operation records in the API security module.
     *
     * @param request - DescribeApisecUserOperationsRequest
     *
     * @returns DescribeApisecUserOperationsResponse
     *
     * @param DescribeApisecUserOperationsRequest $request
     *
     * @return DescribeApisecUserOperationsResponse
     */
    public function describeApisecUserOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisecUserOperationsWithOptions($request, $runtime);
    }

    /**
     * 查询基础防护系统规则集.
     *
     * @param request - DescribeBaseSystemRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBaseSystemRulesResponse
     *
     * @param DescribeBaseSystemRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeBaseSystemRulesResponse
     */
    public function describeBaseSystemRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->detectType) {
            @$query['DetectType'] = $request->detectType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->ruleAction) {
            @$query['RuleAction'] = $request->ruleAction;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleStatus) {
            @$query['RuleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBaseSystemRules',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBaseSystemRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询基础防护系统规则集.
     *
     * @param request - DescribeBaseSystemRulesRequest
     *
     * @returns DescribeBaseSystemRulesResponse
     *
     * @param DescribeBaseSystemRulesRequest $request
     *
     * @return DescribeBaseSystemRulesResponse
     */
    public function describeBaseSystemRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBaseSystemRulesWithOptions($request, $runtime);
    }

    /**
     * 分页获取Bot管理规则标签信息.
     *
     * @param request - DescribeBotRuleLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBotRuleLabelsResponse
     *
     * @param DescribeBotRuleLabelsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBotRuleLabelsResponse
     */
    public function describeBotRuleLabelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->labelType) {
            @$query['LabelType'] = $request->labelType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->subScene) {
            @$query['SubScene'] = $request->subScene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBotRuleLabels',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBotRuleLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页获取Bot管理规则标签信息.
     *
     * @param request - DescribeBotRuleLabelsRequest
     *
     * @returns DescribeBotRuleLabelsResponse
     *
     * @param DescribeBotRuleLabelsRequest $request
     *
     * @return DescribeBotRuleLabelsResponse
     */
    public function describeBotRuleLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBotRuleLabelsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a certificate, such as the certificate name, expiration time, issuance time, and associated domain name.
     *
     * @param request - DescribeCertDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCertDetailResponse
     *
     * @param DescribeCertDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCertDetailResponse
     */
    public function describeCertDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the details of a certificate, such as the certificate name, expiration time, issuance time, and associated domain name.
     *
     * @param request - DescribeCertDetailRequest
     *
     * @returns DescribeCertDetailResponse
     *
     * @param DescribeCertDetailRequest $request
     *
     * @return DescribeCertDetailResponse
     */
    public function describeCertDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the certificates issued for your domain names that are added to Web Application Firewall (WAF).
     *
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
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the certificates issued for your domain names that are added to Web Application Firewall (WAF).
     *
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
     * 查询WAF计价模块信息.
     *
     * @param request - DescribeChargeModuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChargeModuleResponse
     *
     * @param DescribeChargeModuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeChargeModuleResponse
     */
    public function describeChargeModuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChargeModule',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChargeModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询WAF计价模块信息.
     *
     * @param request - DescribeChargeModuleRequest
     *
     * @returns DescribeChargeModuleResponse
     *
     * @param DescribeChargeModuleRequest $request
     *
     * @return DescribeChargeModuleResponse
     */
    public function describeChargeModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChargeModuleWithOptions($request, $runtime);
    }

    /**
     * 查询WAF计价模块的计价结果.
     *
     * @param request - DescribeChargeResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChargeResultResponse
     *
     * @param DescribeChargeResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeChargeResultResponse
     */
    public function describeChargeResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeCycle) {
            @$query['ChargeCycle'] = $request->chargeCycle;
        }

        if (null !== $request->chargeModules) {
            @$query['ChargeModules'] = $request->chargeModules;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChargeResult',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChargeResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询WAF计价模块的计价结果.
     *
     * @param request - DescribeChargeResultRequest
     *
     * @returns DescribeChargeResultResponse
     *
     * @param DescribeChargeResultRequest $request
     *
     * @return DescribeChargeResultResponse
     */
    public function describeChargeResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChargeResultWithOptions($request, $runtime);
    }

    /**
     * Queries a port of the cloud service that is added to Web Application Firewall (WAF). This operation is supported for only Elastic Compute Service (ECS) and Classic Load Balancer (CLB).
     *
     * @param request - DescribeCloudResourceAccessPortDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudResourceAccessPortDetailsResponse
     *
     * @param DescribeCloudResourceAccessPortDetailsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeCloudResourceAccessPortDetailsResponse
     */
    public function describeCloudResourceAccessPortDetailsWithOptions($request, $runtime)
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

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceProduct) {
            @$query['ResourceProduct'] = $request->resourceProduct;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a port of the cloud service that is added to Web Application Firewall (WAF). This operation is supported for only Elastic Compute Service (ECS) and Classic Load Balancer (CLB).
     *
     * @param request - DescribeCloudResourceAccessPortDetailsRequest
     *
     * @returns DescribeCloudResourceAccessPortDetailsResponse
     *
     * @param DescribeCloudResourceAccessPortDetailsRequest $request
     *
     * @return DescribeCloudResourceAccessPortDetailsResponse
     */
    public function describeCloudResourceAccessPortDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudResourceAccessPortDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the ports of the cloud service that is added to Web Application Firewall (WAF). This operation is supported for only Elastic Compute Service (ECS) and Classic Load Balancer (CLB).
     *
     * @param request - DescribeCloudResourceAccessedPortsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudResourceAccessedPortsResponse
     *
     * @param DescribeCloudResourceAccessedPortsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeCloudResourceAccessedPortsResponse
     */
    public function describeCloudResourceAccessedPortsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the ports of the cloud service that is added to Web Application Firewall (WAF). This operation is supported for only Elastic Compute Service (ECS) and Classic Load Balancer (CLB).
     *
     * @param request - DescribeCloudResourceAccessedPortsRequest
     *
     * @returns DescribeCloudResourceAccessedPortsResponse
     *
     * @param DescribeCloudResourceAccessedPortsRequest $request
     *
     * @return DescribeCloudResourceAccessedPortsResponse
     */
    public function describeCloudResourceAccessedPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudResourceAccessedPortsWithOptions($request, $runtime);
    }

    /**
     * Queries cloud service resources that are added to Web Application Firewall (WAF).
     *
     * @param request - DescribeCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudResourcesResponse
     *
     * @param DescribeCloudResourcesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCloudResourcesResponse
     */
    public function describeCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerUserId) {
            @$query['OwnerUserId'] = $request->ownerUserId;
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

        if (null !== $request->resourceDomain) {
            @$query['ResourceDomain'] = $request->resourceDomain;
        }

        if (null !== $request->resourceFunction) {
            @$query['ResourceFunction'] = $request->resourceFunction;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceInstanceName) {
            @$query['ResourceInstanceName'] = $request->resourceInstanceName;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceProduct) {
            @$query['ResourceProduct'] = $request->resourceProduct;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceRouteName) {
            @$query['ResourceRouteName'] = $request->resourceRouteName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries cloud service resources that are added to Web Application Firewall (WAF).
     *
     * @param request - DescribeCloudResourcesRequest
     *
     * @returns DescribeCloudResourcesResponse
     *
     * @param DescribeCloudResourcesRequest $request
     *
     * @return DescribeCloudResourcesResponse
     */
    public function describeCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the total number of domain names that are added to Web Application Firewall (WAF) in CNAME record mode and hybrid cloud reverse proxy mode.
     *
     * @param request - DescribeCnameCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCnameCountResponse
     *
     * @param DescribeCnameCountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCnameCountResponse
     */
    public function describeCnameCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the total number of domain names that are added to Web Application Firewall (WAF) in CNAME record mode and hybrid cloud reverse proxy mode.
     *
     * @param request - DescribeCnameCountRequest
     *
     * @returns DescribeCnameCountResponse
     *
     * @param DescribeCnameCountRequest $request
     *
     * @return DescribeCnameCountResponse
     */
    public function describeCnameCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCnameCountWithOptions($request, $runtime);
    }

    /**
     * 查询日志服务支持的所有字段.
     *
     * @param tmpReq - DescribeCommonLogFieldsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCommonLogFieldsResponse
     *
     * @param DescribeCommonLogFieldsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCommonLogFieldsResponse
     */
    public function describeCommonLogFieldsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCommonLogFieldsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->logKeyList) {
            $request->logKeyListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->logKeyList, 'LogKeyList', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isDefault) {
            @$query['IsDefault'] = $request->isDefault;
        }

        if (null !== $request->isRequired) {
            @$query['IsRequired'] = $request->isRequired;
        }

        if (null !== $request->logKeyListShrink) {
            @$query['LogKeyList'] = $request->logKeyListShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCommonLogFields',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCommonLogFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询日志服务支持的所有字段.
     *
     * @param request - DescribeCommonLogFieldsRequest
     *
     * @returns DescribeCommonLogFieldsResponse
     *
     * @param DescribeCommonLogFieldsRequest $request
     *
     * @return DescribeCommonLogFieldsResponse
     */
    public function describeCommonLogFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommonLogFieldsWithOptions($request, $runtime);
    }

    /**
     * 查询自定义正则规则编译结果.
     *
     * @param request - DescribeCustomBaseRuleCompileResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomBaseRuleCompileResultResponse
     *
     * @param DescribeCustomBaseRuleCompileResultRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCustomBaseRuleCompileResultResponse
     */
    public function describeCustomBaseRuleCompileResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomBaseRuleCompileResult',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomBaseRuleCompileResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询自定义正则规则编译结果.
     *
     * @param request - DescribeCustomBaseRuleCompileResultRequest
     *
     * @returns DescribeCustomBaseRuleCompileResultResponse
     *
     * @param DescribeCustomBaseRuleCompileResultRequest $request
     *
     * @return DescribeCustomBaseRuleCompileResultResponse
     */
    public function describeCustomBaseRuleCompileResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomBaseRuleCompileResultWithOptions($request, $runtime);
    }

    /**
     * Checks whether DDoS attacks occur on specific domain names protected by a Web Application Firewall (WAF) instance.
     *
     * @param request - DescribeDDoSStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDoSStatusResponse
     *
     * @param DescribeDDoSStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDDoSStatusResponse
     */
    public function describeDDoSStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Checks whether DDoS attacks occur on specific domain names protected by a Web Application Firewall (WAF) instance.
     *
     * @param request - DescribeDDoSStatusRequest
     *
     * @returns DescribeDDoSStatusResponse
     *
     * @param DescribeDDoSStatusRequest $request
     *
     * @return DescribeDDoSStatusResponse
     */
    public function describeDDoSStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the default SSL and Transport Layer Security (TLS) settings.
     *
     * @param request - DescribeDefaultHttpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefaultHttpsResponse
     *
     * @param DescribeDefaultHttpsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDefaultHttpsResponse
     */
    public function describeDefaultHttpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the default SSL and Transport Layer Security (TLS) settings.
     *
     * @param request - DescribeDefaultHttpsRequest
     *
     * @returns DescribeDefaultHttpsResponse
     *
     * @param DescribeDefaultHttpsRequest $request
     *
     * @return DescribeDefaultHttpsResponse
     */
    public function describeDefaultHttps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefaultHttpsWithOptions($request, $runtime);
    }

    /**
     * 分页查询可以被防护组绑定的防护对象列表.
     *
     * @param request - DescribeDefenseGroupValidResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseGroupValidResourcesResponse
     *
     * @param DescribeDefenseGroupValidResourcesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDefenseGroupValidResourcesResponse
     */
    public function describeDefenseGroupValidResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseGroupValidResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefenseGroupValidResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询可以被防护组绑定的防护对象列表.
     *
     * @param request - DescribeDefenseGroupValidResourcesRequest
     *
     * @returns DescribeDefenseGroupValidResourcesResponse
     *
     * @param DescribeDefenseGroupValidResourcesRequest $request
     *
     * @return DescribeDefenseGroupValidResourcesResponse
     */
    public function describeDefenseGroupValidResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseGroupValidResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a protected object.
     *
     * @param request - DescribeDefenseResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseResourceResponse
     *
     * @param DescribeDefenseResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDefenseResourceResponse
     */
    public function describeDefenseResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the information about a protected object.
     *
     * @param request - DescribeDefenseResourceRequest
     *
     * @returns DescribeDefenseResourceResponse
     *
     * @param DescribeDefenseResourceRequest $request
     *
     * @return DescribeDefenseResourceResponse
     */
    public function describeDefenseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a protected object group.
     *
     * @param request - DescribeDefenseResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseResourceGroupResponse
     *
     * @param DescribeDefenseResourceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDefenseResourceGroupResponse
     */
    public function describeDefenseResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the information about a protected object group.
     *
     * @param request - DescribeDefenseResourceGroupRequest
     *
     * @returns DescribeDefenseResourceGroupResponse
     *
     * @param DescribeDefenseResourceGroupRequest $request
     *
     * @return DescribeDefenseResourceGroupResponse
     */
    public function describeDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the names of protected object groups.
     *
     * @param request - DescribeDefenseResourceGroupNamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseResourceGroupNamesResponse
     *
     * @param DescribeDefenseResourceGroupNamesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDefenseResourceGroupNamesResponse
     */
    public function describeDefenseResourceGroupNamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupNameLike) {
            @$query['GroupNameLike'] = $request->groupNameLike;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the names of protected object groups.
     *
     * @param request - DescribeDefenseResourceGroupNamesRequest
     *
     * @returns DescribeDefenseResourceGroupNamesResponse
     *
     * @param DescribeDefenseResourceGroupNamesRequest $request
     *
     * @return DescribeDefenseResourceGroupNamesResponse
     */
    public function describeDefenseResourceGroupNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceGroupNamesWithOptions($request, $runtime);
    }

    /**
     * Performs a pagination query to retrieve the information about protected object groups.
     *
     * @param request - DescribeDefenseResourceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseResourceGroupsResponse
     *
     * @param DescribeDefenseResourceGroupsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDefenseResourceGroupsResponse
     */
    public function describeDefenseResourceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupNameLike) {
            @$query['GroupNameLike'] = $request->groupNameLike;
        }

        if (null !== $request->groupNames) {
            @$query['GroupNames'] = $request->groupNames;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Performs a pagination query to retrieve the information about protected object groups.
     *
     * @param request - DescribeDefenseResourceGroupsRequest
     *
     * @returns DescribeDefenseResourceGroupsResponse
     *
     * @param DescribeDefenseResourceGroupsRequest $request
     *
     * @return DescribeDefenseResourceGroupsResponse
     */
    public function describeDefenseResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * Performs a pagination query to retrieve the names of protected objects.
     *
     * @param request - DescribeDefenseResourceNamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseResourceNamesResponse
     *
     * @param DescribeDefenseResourceNamesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDefenseResourceNamesResponse
     */
    public function describeDefenseResourceNamesWithOptions($request, $runtime)
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Performs a pagination query to retrieve the names of protected objects.
     *
     * @param request - DescribeDefenseResourceNamesRequest
     *
     * @returns DescribeDefenseResourceNamesResponse
     *
     * @param DescribeDefenseResourceNamesRequest $request
     *
     * @return DescribeDefenseResourceNamesResponse
     */
    public function describeDefenseResourceNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceNamesWithOptions($request, $runtime);
    }

    /**
     * 查询防护对象和所属资源的关系.
     *
     * @param request - DescribeDefenseResourceOwnerUidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseResourceOwnerUidResponse
     *
     * @param DescribeDefenseResourceOwnerUidRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDefenseResourceOwnerUidResponse
     */
    public function describeDefenseResourceOwnerUidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceNames) {
            @$query['ResourceNames'] = $request->resourceNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 查询防护对象和所属资源的关系.
     *
     * @param request - DescribeDefenseResourceOwnerUidRequest
     *
     * @returns DescribeDefenseResourceOwnerUidResponse
     *
     * @param DescribeDefenseResourceOwnerUidRequest $request
     *
     * @return DescribeDefenseResourceOwnerUidResponse
     */
    public function describeDefenseResourceOwnerUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceOwnerUidWithOptions($request, $runtime);
    }

    /**
     * Queries the protection templates that are associated with a protected object or protected object group.
     *
     * @param request - DescribeDefenseResourceTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseResourceTemplatesResponse
     *
     * @param DescribeDefenseResourceTemplatesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDefenseResourceTemplatesResponse
     */
    public function describeDefenseResourceTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the protection templates that are associated with a protected object or protected object group.
     *
     * @param request - DescribeDefenseResourceTemplatesRequest
     *
     * @returns DescribeDefenseResourceTemplatesResponse
     *
     * @param DescribeDefenseResourceTemplatesRequest $request
     *
     * @return DescribeDefenseResourceTemplatesResponse
     */
    public function describeDefenseResourceTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries protected objects by page.
     *
     * @param request - DescribeDefenseResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseResourcesResponse
     *
     * @param DescribeDefenseResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDefenseResourcesResponse
     */
    public function describeDefenseResourcesWithOptions($request, $runtime)
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

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries protected objects by page.
     *
     * @param request - DescribeDefenseResourcesRequest
     *
     * @returns DescribeDefenseResourcesResponse
     *
     * @param DescribeDefenseResourcesRequest $request
     *
     * @return DescribeDefenseResourcesResponse
     */
    public function describeDefenseResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a protection rule.
     *
     * @param request - DescribeDefenseRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseRuleResponse
     *
     * @param DescribeDefenseRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDefenseRuleResponse
     */
    public function describeDefenseRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a protection rule.
     *
     * @param request - DescribeDefenseRuleRequest
     *
     * @returns DescribeDefenseRuleResponse
     *
     * @param DescribeDefenseRuleRequest $request
     *
     * @return DescribeDefenseRuleResponse
     */
    public function describeDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * 查询防护规则的统计信息.
     *
     * @param request - DescribeDefenseRuleStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseRuleStatisticsResponse
     *
     * @param DescribeDefenseRuleStatisticsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDefenseRuleStatisticsResponse
     */
    public function describeDefenseRuleStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fourthKey) {
            @$query['FourthKey'] = $request->fourthKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->primaryKey) {
            @$query['PrimaryKey'] = $request->primaryKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->secondaryKey) {
            @$query['SecondaryKey'] = $request->secondaryKey;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->thirdKey) {
            @$query['ThirdKey'] = $request->thirdKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseRuleStatistics',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefenseRuleStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询防护规则的统计信息.
     *
     * @param request - DescribeDefenseRuleStatisticsRequest
     *
     * @returns DescribeDefenseRuleStatisticsResponse
     *
     * @param DescribeDefenseRuleStatisticsRequest $request
     *
     * @return DescribeDefenseRuleStatisticsResponse
     */
    public function describeDefenseRuleStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRuleStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries protection rules by page.
     *
     * @param request - DescribeDefenseRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseRulesResponse
     *
     * @param DescribeDefenseRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDefenseRulesResponse
     */
    public function describeDefenseRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
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

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries protection rules by page.
     *
     * @param request - DescribeDefenseRulesRequest
     *
     * @returns DescribeDefenseRulesResponse
     *
     * @param DescribeDefenseRulesRequest $request
     *
     * @return DescribeDefenseRulesResponse
     */
    public function describeDefenseRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRulesWithOptions($request, $runtime);
    }

    /**
     * 查询用户防护场景的配置.
     *
     * @param request - DescribeDefenseSceneConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseSceneConfigResponse
     *
     * @param DescribeDefenseSceneConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDefenseSceneConfigResponse
     */
    public function describeDefenseSceneConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configKey) {
            @$query['ConfigKey'] = $request->configKey;
        }

        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseSceneConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefenseSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户防护场景的配置.
     *
     * @param request - DescribeDefenseSceneConfigRequest
     *
     * @returns DescribeDefenseSceneConfigResponse
     *
     * @param DescribeDefenseSceneConfigRequest $request
     *
     * @return DescribeDefenseSceneConfigResponse
     */
    public function describeDefenseSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseSceneConfigWithOptions($request, $runtime);
    }

    /**
     * Queries a protection rule template.
     *
     * @param request - DescribeDefenseTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseTemplateResponse
     *
     * @param DescribeDefenseTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDefenseTemplateResponse
     */
    public function describeDefenseTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a protection rule template.
     *
     * @param request - DescribeDefenseTemplateRequest
     *
     * @returns DescribeDefenseTemplateResponse
     *
     * @param DescribeDefenseTemplateRequest $request
     *
     * @return DescribeDefenseTemplateResponse
     */
    public function describeDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the names of protected object groups for which a protection template can take effect.
     *
     * @param request - DescribeDefenseTemplateValidGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseTemplateValidGroupsResponse
     *
     * @param DescribeDefenseTemplateValidGroupsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDefenseTemplateValidGroupsResponse
     */
    public function describeDefenseTemplateValidGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the names of protected object groups for which a protection template can take effect.
     *
     * @param request - DescribeDefenseTemplateValidGroupsRequest
     *
     * @returns DescribeDefenseTemplateValidGroupsResponse
     *
     * @param DescribeDefenseTemplateValidGroupsRequest $request
     *
     * @return DescribeDefenseTemplateValidGroupsResponse
     */
    public function describeDefenseTemplateValidGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseTemplateValidGroupsWithOptions($request, $runtime);
    }

    /**
     * 分页查询可以被自定义模板绑定的防护对象列表.
     *
     * @param request - DescribeDefenseTemplateValidResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseTemplateValidResourcesResponse
     *
     * @param DescribeDefenseTemplateValidResourcesRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDefenseTemplateValidResourcesResponse
     */
    public function describeDefenseTemplateValidResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseTemplateValidResources',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefenseTemplateValidResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询可以被自定义模板绑定的防护对象列表.
     *
     * @param request - DescribeDefenseTemplateValidResourcesRequest
     *
     * @returns DescribeDefenseTemplateValidResourcesResponse
     *
     * @param DescribeDefenseTemplateValidResourcesRequest $request
     *
     * @return DescribeDefenseTemplateValidResourcesResponse
     */
    public function describeDefenseTemplateValidResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseTemplateValidResourcesWithOptions($request, $runtime);
    }

    /**
     * Performs a paging query to retrieve protection templates.
     *
     * @param request - DescribeDefenseTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseTemplatesResponse
     *
     * @param DescribeDefenseTemplatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDefenseTemplatesResponse
     */
    public function describeDefenseTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->defenseSubScene) {
            @$query['DefenseSubScene'] = $request->defenseSubScene;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Performs a paging query to retrieve protection templates.
     *
     * @param request - DescribeDefenseTemplatesRequest
     *
     * @returns DescribeDefenseTemplatesResponse
     *
     * @param DescribeDefenseTemplatesRequest $request
     *
     * @return DescribeDefenseTemplatesResponse
     */
    public function describeDefenseTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseTemplatesWithOptions($request, $runtime);
    }

    /**
     * Checks whether the Domain Name System (DNS) settings of a domain name are properly configured.
     *
     * @param request - DescribeDomainDNSRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainDNSRecordResponse
     *
     * @param DescribeDomainDNSRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainDNSRecordResponse
     */
    public function describeDomainDNSRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Checks whether the Domain Name System (DNS) settings of a domain name are properly configured.
     *
     * @param request - DescribeDomainDNSRecordRequest
     *
     * @returns DescribeDomainDNSRecordResponse
     *
     * @param DescribeDomainDNSRecordRequest $request
     *
     * @return DescribeDomainDNSRecordResponse
     */
    public function describeDomainDNSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDNSRecordWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a domain name that is added to Web Application Firewall (WAF).
     *
     * @param request - DescribeDomainDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainDetailResponse
     *
     * @param DescribeDomainDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainDetailResponse
     */
    public function describeDomainDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
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
     * Queries the details of a domain name that is added to Web Application Firewall (WAF).
     *
     * @param request - DescribeDomainDetailRequest
     *
     * @returns DescribeDomainDetailResponse
     *
     * @param DescribeDomainDetailRequest $request
     *
     * @return DescribeDomainDetailResponse
     */
    public function describeDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDetailWithOptions($request, $runtime);
    }

    /**
     * 查询域名已使用的端口.
     *
     * @param request - DescribeDomainUsedPortsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainUsedPortsResponse
     *
     * @param DescribeDomainUsedPortsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainUsedPortsResponse
     */
    public function describeDomainUsedPortsWithOptions($request, $runtime)
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
     * 查询域名已使用的端口.
     *
     * @param request - DescribeDomainUsedPortsRequest
     *
     * @returns DescribeDomainUsedPortsResponse
     *
     * @param DescribeDomainUsedPortsRequest $request
     *
     * @return DescribeDomainUsedPortsResponse
     */
    public function describeDomainUsedPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainUsedPortsWithOptions($request, $runtime);
    }

    /**
     * Queries the domain names that are added to Web Application Firewall (WAF).
     *
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
        if (null !== $request->backend) {
            @$query['Backend'] = $request->backend;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the domain names that are added to Web Application Firewall (WAF).
     *
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
     * Queries the traffic statistics of requests that are forwarded to Web Application Firewall (WAF).
     *
     * @param request - DescribeFlowChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFlowChartResponse
     *
     * @param DescribeFlowChartRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFlowChartResponse
     */
    public function describeFlowChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the traffic statistics of requests that are forwarded to Web Application Firewall (WAF).
     *
     * @param request - DescribeFlowChartRequest
     *
     * @returns DescribeFlowChartResponse
     *
     * @param DescribeFlowChartRequest $request
     *
     * @return DescribeFlowChartResponse
     */
    public function describeFlowChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowChartWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 protected objects that receive requests.
     *
     * @param request - DescribeFlowTopResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFlowTopResourceResponse
     *
     * @param DescribeFlowTopResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeFlowTopResourceResponse
     */
    public function describeFlowTopResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 protected objects that receive requests.
     *
     * @param request - DescribeFlowTopResourceRequest
     *
     * @returns DescribeFlowTopResourceResponse
     *
     * @param DescribeFlowTopResourceRequest $request
     *
     * @return DescribeFlowTopResourceResponse
     */
    public function describeFlowTopResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowTopResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 URLs that are used to initiate requests.
     *
     * @param request - DescribeFlowTopUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFlowTopUrlResponse
     *
     * @param DescribeFlowTopUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFlowTopUrlResponse
     */
    public function describeFlowTopUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 URLs that are used to initiate requests.
     *
     * @param request - DescribeFlowTopUrlRequest
     *
     * @returns DescribeFlowTopUrlResponse
     *
     * @param DescribeFlowTopUrlRequest $request
     *
     * @return DescribeFlowTopUrlResponse
     */
    public function describeFlowTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowTopUrlWithOptions($request, $runtime);
    }

    /**
     * Queries the asset statistics provided by basic detection in the API security module.
     *
     * @param request - DescribeFreeUserAssetCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFreeUserAssetCountResponse
     *
     * @param DescribeFreeUserAssetCountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeFreeUserAssetCountResponse
     */
    public function describeFreeUserAssetCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the asset statistics provided by basic detection in the API security module.
     *
     * @param request - DescribeFreeUserAssetCountRequest
     *
     * @returns DescribeFreeUserAssetCountResponse
     *
     * @param DescribeFreeUserAssetCountRequest $request
     *
     * @return DescribeFreeUserAssetCountResponse
     */
    public function describeFreeUserAssetCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFreeUserAssetCountWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of security events that are detected by using the basic detection feature of the API security module.
     *
     * @param request - DescribeFreeUserEventCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFreeUserEventCountResponse
     *
     * @param DescribeFreeUserEventCountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeFreeUserEventCountResponse
     */
    public function describeFreeUserEventCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the statistics of security events that are detected by using the basic detection feature of the API security module.
     *
     * @param request - DescribeFreeUserEventCountRequest
     *
     * @returns DescribeFreeUserEventCountResponse
     *
     * @param DescribeFreeUserEventCountRequest $request
     *
     * @return DescribeFreeUserEventCountResponse
     */
    public function describeFreeUserEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFreeUserEventCountWithOptions($request, $runtime);
    }

    /**
     * Queries the types of security events on which basic detection is performed in the API security module.
     *
     * @param request - DescribeFreeUserEventTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFreeUserEventTypesResponse
     *
     * @param DescribeFreeUserEventTypesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeFreeUserEventTypesResponse
     */
    public function describeFreeUserEventTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the types of security events on which basic detection is performed in the API security module.
     *
     * @param request - DescribeFreeUserEventTypesRequest
     *
     * @returns DescribeFreeUserEventTypesResponse
     *
     * @param DescribeFreeUserEventTypesRequest $request
     *
     * @return DescribeFreeUserEventTypesResponse
     */
    public function describeFreeUserEventTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFreeUserEventTypesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of security events on which basic detection is performed in the API security module.
     *
     * @param request - DescribeFreeUserEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFreeUserEventsResponse
     *
     * @param DescribeFreeUserEventsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeFreeUserEventsResponse
     */
    public function describeFreeUserEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the list of security events on which basic detection is performed in the API security module.
     *
     * @param request - DescribeFreeUserEventsRequest
     *
     * @returns DescribeFreeUserEventsResponse
     *
     * @param DescribeFreeUserEventsRequest $request
     *
     * @return DescribeFreeUserEventsResponse
     */
    public function describeFreeUserEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFreeUserEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the system status of a node in a hybrid cloud cluster.
     *
     * @param request - DescribeHybridCloudBasicMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudBasicMonitorResponse
     *
     * @param DescribeHybridCloudBasicMonitorRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeHybridCloudBasicMonitorResponse
     */
    public function describeHybridCloudBasicMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mid) {
            @$query['Mid'] = $request->mid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudBasicMonitor',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudBasicMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the system status of a node in a hybrid cloud cluster.
     *
     * @param request - DescribeHybridCloudBasicMonitorRequest
     *
     * @returns DescribeHybridCloudBasicMonitorResponse
     *
     * @param DescribeHybridCloudBasicMonitorRequest $request
     *
     * @return DescribeHybridCloudBasicMonitorResponse
     */
    public function describeHybridCloudBasicMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudBasicMonitorWithOptions($request, $runtime);
    }

    /**
     * Obtains the rule information about a hybrid cloud cluster.
     *
     * @param request - DescribeHybridCloudClusterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudClusterRuleResponse
     *
     * @param DescribeHybridCloudClusterRuleRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeHybridCloudClusterRuleResponse
     */
    public function describeHybridCloudClusterRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Obtains the rule information about a hybrid cloud cluster.
     *
     * @param request - DescribeHybridCloudClusterRuleRequest
     *
     * @returns DescribeHybridCloudClusterRuleResponse
     *
     * @param DescribeHybridCloudClusterRuleRequest $request
     *
     * @return DescribeHybridCloudClusterRuleResponse
     */
    public function describeHybridCloudClusterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudClusterRuleWithOptions($request, $runtime);
    }

    /**
     * 集群规则列表.
     *
     * @param request - DescribeHybridCloudClusterRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudClusterRulesResponse
     *
     * @param DescribeHybridCloudClusterRulesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeHybridCloudClusterRulesResponse
     */
    public function describeHybridCloudClusterRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleContent) {
            @$query['RuleContent'] = $request->ruleContent;
        }

        if (null !== $request->ruleMatchType) {
            @$query['RuleMatchType'] = $request->ruleMatchType;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 集群规则列表.
     *
     * @param request - DescribeHybridCloudClusterRulesRequest
     *
     * @returns DescribeHybridCloudClusterRulesResponse
     *
     * @param DescribeHybridCloudClusterRulesRequest $request
     *
     * @return DescribeHybridCloudClusterRulesResponse
     */
    public function describeHybridCloudClusterRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudClusterRulesWithOptions($request, $runtime);
    }

    /**
     * 集群机器列表.
     *
     * @param request - DescribeHybridCloudClusterServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudClusterServersResponse
     *
     * @param DescribeHybridCloudClusterServersRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeHybridCloudClusterServersResponse
     */
    public function describeHybridCloudClusterServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudClusterServers',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudClusterServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 集群机器列表.
     *
     * @param request - DescribeHybridCloudClusterServersRequest
     *
     * @returns DescribeHybridCloudClusterServersResponse
     *
     * @param DescribeHybridCloudClusterServersRequest $request
     *
     * @return DescribeHybridCloudClusterServersResponse
     */
    public function describeHybridCloudClusterServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudClusterServersWithOptions($request, $runtime);
    }

    /**
     * Queries a list of hybrid cloud clusters.
     *
     * @param request - DescribeHybridCloudClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudClustersResponse
     *
     * @param DescribeHybridCloudClustersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeHybridCloudClustersResponse
     */
    public function describeHybridCloudClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a list of hybrid cloud clusters.
     *
     * @param request - DescribeHybridCloudClustersRequest
     *
     * @returns DescribeHybridCloudClustersResponse
     *
     * @param DescribeHybridCloudClustersRequest $request
     *
     * @return DescribeHybridCloudClustersResponse
     */
    public function describeHybridCloudClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudClustersWithOptions($request, $runtime);
    }

    /**
     * Queries the hybrid cloud node groups that are added to Web Application Firewall (WAF).
     *
     * @param request - DescribeHybridCloudGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudGroupsResponse
     *
     * @param DescribeHybridCloudGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHybridCloudGroupsResponse
     */
    public function describeHybridCloudGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterProxyType) {
            @$query['ClusterProxyType'] = $request->clusterProxyType;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the hybrid cloud node groups that are added to Web Application Firewall (WAF).
     *
     * @param request - DescribeHybridCloudGroupsRequest
     *
     * @returns DescribeHybridCloudGroupsResponse
     *
     * @param DescribeHybridCloudGroupsRequest $request
     *
     * @return DescribeHybridCloudGroupsResponse
     */
    public function describeHybridCloudGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the status of applications running on a hybrid cloud cluster node.
     *
     * @param request - DescribeHybridCloudProcessMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudProcessMonitorResponse
     *
     * @param DescribeHybridCloudProcessMonitorRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeHybridCloudProcessMonitorResponse
     */
    public function describeHybridCloudProcessMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mid) {
            @$query['Mid'] = $request->mid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudProcessMonitor',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudProcessMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of applications running on a hybrid cloud cluster node.
     *
     * @param request - DescribeHybridCloudProcessMonitorRequest
     *
     * @returns DescribeHybridCloudProcessMonitorResponse
     *
     * @param DescribeHybridCloudProcessMonitorRequest $request
     *
     * @return DescribeHybridCloudProcessMonitorResponse
     */
    public function describeHybridCloudProcessMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudProcessMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries the number of protection nodes that can be added to a hybrid cloud cluster.
     *
     * @param request - DescribeHybridCloudProtectableCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudProtectableCountResponse
     *
     * @param DescribeHybridCloudProtectableCountRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeHybridCloudProtectableCountResponse
     */
    public function describeHybridCloudProtectableCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudProtectableCount',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudProtectableCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of protection nodes that can be added to a hybrid cloud cluster.
     *
     * @param request - DescribeHybridCloudProtectableCountRequest
     *
     * @returns DescribeHybridCloudProtectableCountResponse
     *
     * @param DescribeHybridCloudProtectableCountRequest $request
     *
     * @return DescribeHybridCloudProtectableCountResponse
     */
    public function describeHybridCloudProtectableCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudProtectableCountWithOptions($request, $runtime);
    }

    /**
     * 查询混合云域名详情.
     *
     * @param request - DescribeHybridCloudResourceDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudResourceDetailResponse
     *
     * @param DescribeHybridCloudResourceDetailRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeHybridCloudResourceDetailResponse
     */
    public function describeHybridCloudResourceDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backend) {
            @$query['Backend'] = $request->backend;
        }

        if (null !== $request->cnameEnabled) {
            @$query['CnameEnabled'] = $request->cnameEnabled;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudResourceDetail',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudResourceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询混合云域名详情.
     *
     * @param request - DescribeHybridCloudResourceDetailRequest
     *
     * @returns DescribeHybridCloudResourceDetailResponse
     *
     * @param DescribeHybridCloudResourceDetailRequest $request
     *
     * @return DescribeHybridCloudResourceDetailResponse
     */
    public function describeHybridCloudResourceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudResourceDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the domain names that are added to a Web Application Firewall (WAF) instance in hybrid cloud mode.
     *
     * @param request - DescribeHybridCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudResourcesResponse
     *
     * @param DescribeHybridCloudResourcesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHybridCloudResourcesResponse
     */
    public function describeHybridCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backend) {
            @$query['Backend'] = $request->backend;
        }

        if (null !== $request->cnameEnabled) {
            @$query['CnameEnabled'] = $request->cnameEnabled;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the domain names that are added to a Web Application Firewall (WAF) instance in hybrid cloud mode.
     *
     * @param request - DescribeHybridCloudResourcesRequest
     *
     * @returns DescribeHybridCloudResourcesResponse
     *
     * @param DescribeHybridCloudResourcesRequest $request
     *
     * @return DescribeHybridCloudResourcesResponse
     */
    public function describeHybridCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * 获取SDK信息.
     *
     * @param request - DescribeHybridCloudSdkServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudSdkServersResponse
     *
     * @param DescribeHybridCloudSdkServersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHybridCloudSdkServersResponse
     */
    public function describeHybridCloudSdkServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudSdkServers',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudSdkServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取SDK信息.
     *
     * @param request - DescribeHybridCloudSdkServersRequest
     *
     * @returns DescribeHybridCloudSdkServersResponse
     *
     * @param DescribeHybridCloudSdkServersRequest $request
     *
     * @return DescribeHybridCloudSdkServersResponse
     */
    public function describeHybridCloudSdkServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudSdkServersWithOptions($request, $runtime);
    }

    /**
     * Queries information about the regions that the hybrid cloud mode supports, such as the Internet service providers (ISPs), continents, and cities.
     *
     * @param request - DescribeHybridCloudServerRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudServerRegionsResponse
     *
     * @param DescribeHybridCloudServerRegionsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeHybridCloudServerRegionsResponse
     */
    public function describeHybridCloudServerRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionType) {
            @$query['RegionType'] = $request->regionType;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries information about the regions that the hybrid cloud mode supports, such as the Internet service providers (ISPs), continents, and cities.
     *
     * @param request - DescribeHybridCloudServerRegionsRequest
     *
     * @returns DescribeHybridCloudServerRegionsResponse
     *
     * @param DescribeHybridCloudServerRegionsRequest $request
     *
     * @return DescribeHybridCloudServerRegionsResponse
     */
    public function describeHybridCloudServerRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudServerRegionsWithOptions($request, $runtime);
    }

    /**
     * 查询接入区域
     *
     * @param request - DescribeHybridCloudSupportRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudSupportRegionsResponse
     *
     * @param DescribeHybridCloudSupportRegionsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeHybridCloudSupportRegionsResponse
     */
    public function describeHybridCloudSupportRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudSupportRegions',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudSupportRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询接入区域
     *
     * @param request - DescribeHybridCloudSupportRegionsRequest
     *
     * @returns DescribeHybridCloudSupportRegionsResponse
     *
     * @param DescribeHybridCloudSupportRegionsRequest $request
     *
     * @return DescribeHybridCloudSupportRegionsResponse
     */
    public function describeHybridCloudSupportRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudSupportRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries servers that are not assigned to a hybrid cloud cluster.
     *
     * @param request - DescribeHybridCloudUnassignedMachinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudUnassignedMachinesResponse
     *
     * @param DescribeHybridCloudUnassignedMachinesRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeHybridCloudUnassignedMachinesResponse
     */
    public function describeHybridCloudUnassignedMachinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries servers that are not assigned to a hybrid cloud cluster.
     *
     * @param request - DescribeHybridCloudUnassignedMachinesRequest
     *
     * @returns DescribeHybridCloudUnassignedMachinesResponse
     *
     * @param DescribeHybridCloudUnassignedMachinesRequest $request
     *
     * @return DescribeHybridCloudUnassignedMachinesResponse
     */
    public function describeHybridCloudUnassignedMachines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudUnassignedMachinesWithOptions($request, $runtime);
    }

    /**
     * Queries the ports that are not supported by the hybrid cloud mode.
     *
     * @param request - DescribeHybridCloudUnsupportPortsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudUnsupportPortsResponse
     *
     * @param DescribeHybridCloudUnsupportPortsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeHybridCloudUnsupportPortsResponse
     */
    public function describeHybridCloudUnsupportPortsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridCloudUnsupportPorts',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridCloudUnsupportPortsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ports that are not supported by the hybrid cloud mode.
     *
     * @param request - DescribeHybridCloudUnsupportPortsRequest
     *
     * @returns DescribeHybridCloudUnsupportPortsResponse
     *
     * @param DescribeHybridCloudUnsupportPortsRequest $request
     *
     * @return DescribeHybridCloudUnsupportPortsResponse
     */
    public function describeHybridCloudUnsupportPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudUnsupportPortsWithOptions($request, $runtime);
    }

    /**
     * Queries the HTTP and HTTPS ports that you can use when you add a domain name to Web Application Firewall (WAF) in hybrid cloud mode.
     *
     * @param request - DescribeHybridCloudUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridCloudUserResponse
     *
     * @param DescribeHybridCloudUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHybridCloudUserResponse
     */
    public function describeHybridCloudUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the HTTP and HTTPS ports that you can use when you add a domain name to Web Application Firewall (WAF) in hybrid cloud mode.
     *
     * @param request - DescribeHybridCloudUserRequest
     *
     * @returns DescribeHybridCloudUserResponse
     *
     * @param DescribeHybridCloudUserRequest $request
     *
     * @return DescribeHybridCloudUserResponse
     */
    public function describeHybridCloudUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudUserWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Web Application Firewall (WAF) instance within the current Alibaba Cloud account.
     *
     * @param request - DescribeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the details of a Web Application Firewall (WAF) instance within the current Alibaba Cloud account.
     *
     * @param request - DescribeInstanceRequest
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * 获取支持的海外IP区域封禁支持的国际及地域。
     *
     * @param request - DescribeIpAbroadCountryInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpAbroadCountryInfosResponse
     *
     * @param DescribeIpAbroadCountryInfosRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeIpAbroadCountryInfosResponse
     */
    public function describeIpAbroadCountryInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->abroadRegion) {
            @$query['AbroadRegion'] = $request->abroadRegion;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取支持的海外IP区域封禁支持的国际及地域。
     *
     * @param request - DescribeIpAbroadCountryInfosRequest
     *
     * @returns DescribeIpAbroadCountryInfosResponse
     *
     * @param DescribeIpAbroadCountryInfosRequest $request
     *
     * @return DescribeIpAbroadCountryInfosResponse
     */
    public function describeIpAbroadCountryInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpAbroadCountryInfosWithOptions($request, $runtime);
    }

    /**
     * Queries a hybrid cloud log delivery configuration.
     *
     * @param request - DescribeLogDeliveryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogDeliveryConfigResponse
     *
     * @param DescribeLogDeliveryConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLogDeliveryConfigResponse
     */
    public function describeLogDeliveryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryName) {
            @$query['DeliveryName'] = $request->deliveryName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogDeliveryConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogDeliveryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a hybrid cloud log delivery configuration.
     *
     * @param request - DescribeLogDeliveryConfigRequest
     *
     * @returns DescribeLogDeliveryConfigResponse
     *
     * @param DescribeLogDeliveryConfigRequest $request
     *
     * @return DescribeLogDeliveryConfigResponse
     */
    public function describeLogDeliveryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogDeliveryConfigWithOptions($request, $runtime);
    }

    /**
     * Queries all hybrid cloud log delivery configurations.
     *
     * @param request - DescribeLogDeliveryConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogDeliveryConfigsResponse
     *
     * @param DescribeLogDeliveryConfigsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLogDeliveryConfigsResponse
     */
    public function describeLogDeliveryConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryNameLike) {
            @$query['DeliveryNameLike'] = $request->deliveryNameLike;
        }

        if (null !== $request->deliveryType) {
            @$query['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogDeliveryConfigs',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogDeliveryConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all hybrid cloud log delivery configurations.
     *
     * @param request - DescribeLogDeliveryConfigsRequest
     *
     * @returns DescribeLogDeliveryConfigsResponse
     *
     * @param DescribeLogDeliveryConfigsRequest $request
     *
     * @return DescribeLogDeliveryConfigsResponse
     */
    public function describeLogDeliveryConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogDeliveryConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries IP addresses in an IP address blacklist for major event protection by page.
     *
     * @param request - DescribeMajorProtectionBlackIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMajorProtectionBlackIpsResponse
     *
     * @param DescribeMajorProtectionBlackIpsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMajorProtectionBlackIpsResponse
     */
    public function describeMajorProtectionBlackIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipLike) {
            @$query['IpLike'] = $request->ipLike;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries IP addresses in an IP address blacklist for major event protection by page.
     *
     * @param request - DescribeMajorProtectionBlackIpsRequest
     *
     * @returns DescribeMajorProtectionBlackIpsResponse
     *
     * @param DescribeMajorProtectionBlackIpsRequest $request
     *
     * @return DescribeMajorProtectionBlackIpsResponse
     */
    public function describeMajorProtectionBlackIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMajorProtectionBlackIpsWithOptions($request, $runtime);
    }

    /**
     * Queries information about members.
     *
     * @param request - DescribeMemberAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMemberAccountsResponse
     *
     * @param DescribeMemberAccountsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMemberAccountsResponse
     */
    public function describeMemberAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountStatus) {
            @$query['AccountStatus'] = $request->accountStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries information about members.
     *
     * @param request - DescribeMemberAccountsRequest
     *
     * @returns DescribeMemberAccountsResponse
     *
     * @param DescribeMemberAccountsRequest $request
     *
     * @return DescribeMemberAccountsResponse
     */
    public function describeMemberAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMemberAccountsWithOptions($request, $runtime);
    }

    /**
     * Retrieves time-series data for all network traffic, including both malicious and legitimate requests.
     *
     * @param tmpReq - DescribeNetworkFlowTimeSeriesMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkFlowTimeSeriesMetricResponse
     *
     * @param DescribeNetworkFlowTimeSeriesMetricRequest $tmpReq
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeNetworkFlowTimeSeriesMetricResponse
     */
    public function describeNetworkFlowTimeSeriesMetricWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeNetworkFlowTimeSeriesMetricShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Retrieves time-series data for all network traffic, including both malicious and legitimate requests.
     *
     * @param request - DescribeNetworkFlowTimeSeriesMetricRequest
     *
     * @returns DescribeNetworkFlowTimeSeriesMetricResponse
     *
     * @param DescribeNetworkFlowTimeSeriesMetricRequest $request
     *
     * @return DescribeNetworkFlowTimeSeriesMetricResponse
     */
    public function describeNetworkFlowTimeSeriesMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkFlowTimeSeriesMetricWithOptions($request, $runtime);
    }

    /**
     * Retrieves top aggregated traffic statistics, sorted by various dimensions, including malicious and legitimate requests.
     *
     * @param tmpReq - DescribeNetworkFlowTopNMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkFlowTopNMetricResponse
     *
     * @param DescribeNetworkFlowTopNMetricRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeNetworkFlowTopNMetricResponse
     */
    public function describeNetworkFlowTopNMetricWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeNetworkFlowTopNMetricShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Retrieves top aggregated traffic statistics, sorted by various dimensions, including malicious and legitimate requests.
     *
     * @param request - DescribeNetworkFlowTopNMetricRequest
     *
     * @returns DescribeNetworkFlowTopNMetricResponse
     *
     * @param DescribeNetworkFlowTopNMetricRequest $request
     *
     * @return DescribeNetworkFlowTopNMetricResponse
     */
    public function describeNetworkFlowTopNMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkFlowTopNMetricWithOptions($request, $runtime);
    }

    /**
     * Queries the protection status of Web Application Firewall (WAF).
     *
     * @param request - DescribePauseProtectionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePauseProtectionStatusResponse
     *
     * @param DescribePauseProtectionStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePauseProtectionStatusResponse
     */
    public function describePauseProtectionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the protection status of Web Application Firewall (WAF).
     *
     * @param request - DescribePauseProtectionStatusRequest
     *
     * @returns DescribePauseProtectionStatusResponse
     *
     * @param DescribePauseProtectionStatusRequest $request
     *
     * @return DescribePauseProtectionStatusResponse
     */
    public function describePauseProtectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePauseProtectionStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the queries per second (QPS) statistics of a WAF instance.
     *
     * @param request - DescribePeakTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePeakTrendResponse
     *
     * @param DescribePeakTrendRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribePeakTrendResponse
     */
    public function describePeakTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the queries per second (QPS) statistics of a WAF instance.
     *
     * @param request - DescribePeakTrendRequest
     *
     * @returns DescribePeakTrendResponse
     *
     * @param DescribePeakTrendRequest $request
     *
     * @return DescribePeakTrendResponse
     */
    public function describePeakTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePeakTrendWithOptions($request, $runtime);
    }

    /**
     * 查询开启POC的功能信息.
     *
     * @param request - DescribePocFunctionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePocFunctionsResponse
     *
     * @param DescribePocFunctionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePocFunctionsResponse
     */
    public function describePocFunctionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePocFunctions',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePocFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询开启POC的功能信息.
     *
     * @param request - DescribePocFunctionsRequest
     *
     * @returns DescribePocFunctionsResponse
     *
     * @param DescribePocFunctionsRequest $request
     *
     * @return DescribePocFunctionsResponse
     */
    public function describePocFunctions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePocFunctionsWithOptions($request, $runtime);
    }

    /**
     * Queries the cloud service instances to be added to Web Application Firewall (WAF) in transparent proxy mode.
     *
     * @param request - DescribeProductInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProductInstancesResponse
     *
     * @param DescribeProductInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeProductInstancesResponse
     */
    public function describeProductInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerUserId) {
            @$query['OwnerUserId'] = $request->ownerUserId;
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

        if (null !== $request->resourceInstanceAccessStatus) {
            @$query['ResourceInstanceAccessStatus'] = $request->resourceInstanceAccessStatus;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceInstanceIp) {
            @$query['ResourceInstanceIp'] = $request->resourceInstanceIp;
        }

        if (null !== $request->resourceInstanceName) {
            @$query['ResourceInstanceName'] = $request->resourceInstanceName;
        }

        if (null !== $request->resourceIp) {
            @$query['ResourceIp'] = $request->resourceIp;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceProduct) {
            @$query['ResourceProduct'] = $request->resourceProduct;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the cloud service instances to be added to Web Application Firewall (WAF) in transparent proxy mode.
     *
     * @param request - DescribeProductInstancesRequest
     *
     * @returns DescribeProductInstancesResponse
     *
     * @param DescribeProductInstancesRequest $request
     *
     * @return DescribeProductInstancesResponse
     */
    public function describeProductInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of domain names that are added to Web Application Firewall (WAF) and penalized for failing to obtain an Internet Content Provider (ICP) filing.
     *
     * @param request - DescribePunishedDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePunishedDomainsResponse
     *
     * @param DescribePunishedDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePunishedDomainsResponse
     */
    public function describePunishedDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->punishType) {
            @$query['PunishType'] = $request->punishType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a list of domain names that are added to Web Application Firewall (WAF) and penalized for failing to obtain an Internet Content Provider (ICP) filing.
     *
     * @param request - DescribePunishedDomainsRequest
     *
     * @returns DescribePunishedDomainsResponse
     *
     * @param DescribePunishedDomainsRequest $request
     *
     * @return DescribePunishedDomainsResponse
     */
    public function describePunishedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePunishedDomainsWithOptions($request, $runtime);
    }

    /**
     * Queries the certificates that are used in cloud service instances. The certificates returned include the certificates within the delegated administrator account and the certificates within members to which specific instances belong. For example, the delegated administrator account has certificate 1, instance lb-xx-1 belongs to member B, and member B has certificate 2. If you specify instance lb-xx-1 in the request, certificate 1 and certificate 2 are returned.
     *
     * @param request - DescribeResourceInstanceCertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceInstanceCertsResponse
     *
     * @param DescribeResourceInstanceCertsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeResourceInstanceCertsResponse
     */
    public function describeResourceInstanceCertsWithOptions($request, $runtime)
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the certificates that are used in cloud service instances. The certificates returned include the certificates within the delegated administrator account and the certificates within members to which specific instances belong. For example, the delegated administrator account has certificate 1, instance lb-xx-1 belongs to member B, and member B has certificate 2. If you specify instance lb-xx-1 in the request, certificate 1 and certificate 2 are returned.
     *
     * @param request - DescribeResourceInstanceCertsRequest
     *
     * @returns DescribeResourceInstanceCertsResponse
     *
     * @param DescribeResourceInstanceCertsRequest $request
     *
     * @return DescribeResourceInstanceCertsResponse
     */
    public function describeResourceInstanceCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceInstanceCertsWithOptions($request, $runtime);
    }

    /**
     * 查询防护对象日志外发状态
     *
     * @param request - DescribeResourceLogDeliveryStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceLogDeliveryStatusResponse
     *
     * @param DescribeResourceLogDeliveryStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeResourceLogDeliveryStatusResponse
     */
    public function describeResourceLogDeliveryStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceLogDeliveryStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceLogDeliveryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询防护对象日志外发状态
     *
     * @param request - DescribeResourceLogDeliveryStatusRequest
     *
     * @returns DescribeResourceLogDeliveryStatusResponse
     *
     * @param DescribeResourceLogDeliveryStatusRequest $request
     *
     * @return DescribeResourceLogDeliveryStatusResponse
     */
    public function describeResourceLogDeliveryStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceLogDeliveryStatusWithOptions($request, $runtime);
    }

    /**
     * 查询防护对象日志字段配置.
     *
     * @param request - DescribeResourceLogFieldConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceLogFieldConfigResponse
     *
     * @param DescribeResourceLogFieldConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourceLogFieldConfigResponse
     */
    public function describeResourceLogFieldConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryType) {
            @$query['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceLogFieldConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceLogFieldConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询防护对象日志字段配置.
     *
     * @param request - DescribeResourceLogFieldConfigRequest
     *
     * @returns DescribeResourceLogFieldConfigResponse
     *
     * @param DescribeResourceLogFieldConfigRequest $request
     *
     * @return DescribeResourceLogFieldConfigResponse
     */
    public function describeResourceLogFieldConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceLogFieldConfigWithOptions($request, $runtime);
    }

    /**
     * Queries whether the log collection feature is enabled for a protected object.
     *
     * @param request - DescribeResourceLogStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceLogStatusResponse
     *
     * @param DescribeResourceLogStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResourceLogStatusResponse
     */
    public function describeResourceLogStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries whether the log collection feature is enabled for a protected object.
     *
     * @param request - DescribeResourceLogStatusRequest
     *
     * @returns DescribeResourceLogStatusResponse
     *
     * @param DescribeResourceLogStatusRequest $request
     *
     * @return DescribeResourceLogStatusResponse
     */
    public function describeResourceLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceLogStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the ports of a cloud service instance that are added to Web Application Firewall (WAF).
     *
     * @param request - DescribeResourcePortRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourcePortResponse
     *
     * @param DescribeResourcePortRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeResourcePortResponse
     */
    public function describeResourcePortWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the ports of a cloud service instance that are added to Web Application Firewall (WAF).
     *
     * @param request - DescribeResourcePortRequest
     *
     * @returns DescribeResourcePortResponse
     *
     * @param DescribeResourcePortRequest $request
     *
     * @return DescribeResourcePortResponse
     */
    public function describeResourcePort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePortWithOptions($request, $runtime);
    }

    /**
     * Queries the region IDs of the resources that are added to Web Application Firewall (WAF) by using the SDK integration mode. The resources refer to Application Load Balancer (ALB) and Microservices Engine (MSE) instances.
     *
     * @param request - DescribeResourceRegionIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceRegionIdResponse
     *
     * @param DescribeResourceRegionIdRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeResourceRegionIdResponse
     */
    public function describeResourceRegionIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the region IDs of the resources that are added to Web Application Firewall (WAF) by using the SDK integration mode. The resources refer to Application Load Balancer (ALB) and Microservices Engine (MSE) instances.
     *
     * @param request - DescribeResourceRegionIdRequest
     *
     * @returns DescribeResourceRegionIdResponse
     *
     * @param DescribeResourceRegionIdRequest $request
     *
     * @return DescribeResourceRegionIdResponse
     */
    public function describeResourceRegionId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceRegionIdWithOptions($request, $runtime);
    }

    /**
     * Queries the region IDs of the Classic Load Balancer (CLB) and Elastic Compute Service (ECS) instances that are added to Web Application Firewall (WAF) in cloud native mode.
     *
     * @param request - DescribeResourceSupportRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceSupportRegionsResponse
     *
     * @param DescribeResourceSupportRegionsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourceSupportRegionsResponse
     */
    public function describeResourceSupportRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceProduct) {
            @$query['ResourceProduct'] = $request->resourceProduct;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the region IDs of the Classic Load Balancer (CLB) and Elastic Compute Service (ECS) instances that are added to Web Application Firewall (WAF) in cloud native mode.
     *
     * @param request - DescribeResourceSupportRegionsRequest
     *
     * @returns DescribeResourceSupportRegionsResponse
     *
     * @param DescribeResourceSupportRegionsRequest $request
     *
     * @return DescribeResourceSupportRegionsResponse
     */
    public function describeResourceSupportRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceSupportRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the trend of the number of error codes that are returned to clients or Web Application Firewall (WAF). The error codes include 302, 405, 444, 499, and 5XX.
     *
     * @param request - DescribeResponseCodeTrendGraphRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResponseCodeTrendGraphResponse
     *
     * @param DescribeResponseCodeTrendGraphRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResponseCodeTrendGraphResponse
     */
    public function describeResponseCodeTrendGraphWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the trend of the number of error codes that are returned to clients or Web Application Firewall (WAF). The error codes include 302, 405, 444, 499, and 5XX.
     *
     * @param request - DescribeResponseCodeTrendGraphRequest
     *
     * @returns DescribeResponseCodeTrendGraphResponse
     *
     * @param DescribeResponseCodeTrendGraphRequest $request
     *
     * @return DescribeResponseCodeTrendGraphResponse
     */
    public function describeResponseCodeTrendGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResponseCodeTrendGraphWithOptions($request, $runtime);
    }

    /**
     * 查询授权状态
     *
     * @param request - DescribeRoleAuthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoleAuthStatusResponse
     *
     * @param DescribeRoleAuthStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRoleAuthStatusResponse
     */
    public function describeRoleAuthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRoleAuthStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoleAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询授权状态
     *
     * @param request - DescribeRoleAuthStatusRequest
     *
     * @returns DescribeRoleAuthStatusResponse
     *
     * @param DescribeRoleAuthStatusRequest $request
     *
     * @return DescribeRoleAuthStatusResponse
     */
    public function describeRoleAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoleAuthStatusWithOptions($request, $runtime);
    }

    /**
     * Queries regular expression rule groups by page.
     *
     * @param request - DescribeRuleGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleGroupsResponse
     *
     * @param DescribeRuleGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRuleGroupsResponse
     */
    public function describeRuleGroupsWithOptions($request, $runtime)
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->searchType) {
            @$query['SearchType'] = $request->searchType;
        }

        if (null !== $request->searchValue) {
            @$query['SearchValue'] = $request->searchValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries regular expression rule groups by page.
     *
     * @param request - DescribeRuleGroupsRequest
     *
     * @returns DescribeRuleGroupsResponse
     *
     * @param DescribeRuleGroupsRequest $request
     *
     * @return DescribeRuleGroupsResponse
     */
    public function describeRuleGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 IP addresses from which attacks are initiated.
     *
     * @param request - DescribeRuleHitsTopClientIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleHitsTopClientIpResponse
     *
     * @param DescribeRuleHitsTopClientIpRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRuleHitsTopClientIpResponse
     */
    public function describeRuleHitsTopClientIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 IP addresses from which attacks are initiated.
     *
     * @param request - DescribeRuleHitsTopClientIpRequest
     *
     * @returns DescribeRuleHitsTopClientIpResponse
     *
     * @param DescribeRuleHitsTopClientIpRequest $request
     *
     * @return DescribeRuleHitsTopClientIpResponse
     */
    public function describeRuleHitsTopClientIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopClientIpWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 protected objects that trigger protection rules.
     *
     * @param request - DescribeRuleHitsTopResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleHitsTopResourceResponse
     *
     * @param DescribeRuleHitsTopResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRuleHitsTopResourceResponse
     */
    public function describeRuleHitsTopResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 protected objects that trigger protection rules.
     *
     * @param request - DescribeRuleHitsTopResourceRequest
     *
     * @returns DescribeRuleHitsTopResourceResponse
     *
     * @param DescribeRuleHitsTopResourceRequest $request
     *
     * @return DescribeRuleHitsTopResourceResponse
     */
    public function describeRuleHitsTopResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the IDs of the top 10 protection rules that are matched by requests.
     *
     * @param request - DescribeRuleHitsTopRuleIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleHitsTopRuleIdResponse
     *
     * @param DescribeRuleHitsTopRuleIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRuleHitsTopRuleIdResponse
     */
    public function describeRuleHitsTopRuleIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isGroupResource) {
            @$query['IsGroupResource'] = $request->isGroupResource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the IDs of the top 10 protection rules that are matched by requests.
     *
     * @param request - DescribeRuleHitsTopRuleIdRequest
     *
     * @returns DescribeRuleHitsTopRuleIdResponse
     *
     * @param DescribeRuleHitsTopRuleIdRequest $request
     *
     * @return DescribeRuleHitsTopRuleIdResponse
     */
    public function describeRuleHitsTopRuleId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopRuleIdWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 protection modules that are matched.
     *
     * @param request - DescribeRuleHitsTopTuleTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleHitsTopTuleTypeResponse
     *
     * @param DescribeRuleHitsTopTuleTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRuleHitsTopTuleTypeResponse
     */
    public function describeRuleHitsTopTuleTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 protection modules that are matched.
     *
     * @param request - DescribeRuleHitsTopTuleTypeRequest
     *
     * @returns DescribeRuleHitsTopTuleTypeResponse
     *
     * @param DescribeRuleHitsTopTuleTypeRequest $request
     *
     * @return DescribeRuleHitsTopTuleTypeResponse
     */
    public function describeRuleHitsTopTuleType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopTuleTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 user agents that are used to initiate attacks.
     *
     * @param request - DescribeRuleHitsTopUaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleHitsTopUaResponse
     *
     * @param DescribeRuleHitsTopUaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRuleHitsTopUaResponse
     */
    public function describeRuleHitsTopUaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 user agents that are used to initiate attacks.
     *
     * @param request - DescribeRuleHitsTopUaRequest
     *
     * @returns DescribeRuleHitsTopUaResponse
     *
     * @param DescribeRuleHitsTopUaRequest $request
     *
     * @return DescribeRuleHitsTopUaResponse
     */
    public function describeRuleHitsTopUa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopUaWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 URLs that trigger protection rules.
     *
     * @param request - DescribeRuleHitsTopUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleHitsTopUrlResponse
     *
     * @param DescribeRuleHitsTopUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRuleHitsTopUrlResponse
     */
    public function describeRuleHitsTopUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 URLs that trigger protection rules.
     *
     * @param request - DescribeRuleHitsTopUrlRequest
     *
     * @returns DescribeRuleHitsTopUrlResponse
     *
     * @param DescribeRuleHitsTopUrlRequest $request
     *
     * @return DescribeRuleHitsTopUrlResponse
     */
    public function describeRuleHitsTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopUrlWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of attack traffic. Each log records the details of a request that matches protection rules.
     *
     * @remarks
     * Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *
     * @param tmpReq - DescribeSecurityEventLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityEventLogsResponse
     *
     * @param DescribeSecurityEventLogsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSecurityEventLogsResponse
     */
    public function describeSecurityEventLogsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSecurityEventLogsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the logs of attack traffic. Each log records the details of a request that matches protection rules.
     *
     * @remarks
     * Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *
     * @param request - DescribeSecurityEventLogsRequest
     *
     * @returns DescribeSecurityEventLogsResponse
     *
     * @param DescribeSecurityEventLogsRequest $request
     *
     * @return DescribeSecurityEventLogsResponse
     */
    public function describeSecurityEventLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the time series data of attack traffic. Attack requests refer to requests that match protection rules and are identified as risky.
     *
     * @remarks
     * Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *
     * @param tmpReq - DescribeSecurityEventTimeSeriesMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityEventTimeSeriesMetricResponse
     *
     * @param DescribeSecurityEventTimeSeriesMetricRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeSecurityEventTimeSeriesMetricResponse
     */
    public function describeSecurityEventTimeSeriesMetricWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSecurityEventTimeSeriesMetricShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the time series data of attack traffic. Attack requests refer to requests that match protection rules and are identified as risky.
     *
     * @remarks
     * Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *
     * @param request - DescribeSecurityEventTimeSeriesMetricRequest
     *
     * @returns DescribeSecurityEventTimeSeriesMetricResponse
     *
     * @param DescribeSecurityEventTimeSeriesMetricRequest $request
     *
     * @return DescribeSecurityEventTimeSeriesMetricResponse
     */
    public function describeSecurityEventTimeSeriesMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventTimeSeriesMetricWithOptions($request, $runtime);
    }

    /**
     * Queries top N data entries of attack traffic. The system performs statistical aggregation on attack traffic from specific dimensions and returns top N data entries.
     *
     * @remarks
     * Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *
     * @param tmpReq - DescribeSecurityEventTopNMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityEventTopNMetricResponse
     *
     * @param DescribeSecurityEventTopNMetricRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSecurityEventTopNMetricResponse
     */
    public function describeSecurityEventTopNMetricWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSecurityEventTopNMetricShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries top N data entries of attack traffic. The system performs statistical aggregation on attack traffic from specific dimensions and returns top N data entries.
     *
     * @remarks
     * Attack traffic refers to the traffic of requests that match protection rules and are identified as risky. The following types of requests are excluded:
     * *   Requests that match the protection rules of the whitelist module.
     * *   Requests that match the protection rules of the bot management module. The actions of the protection rules are set to Add Tag.
     * *   Requests that match protection rules with actions set to Dynamic Token-based Authentication, Slider CAPTCHA, Strict Slider CAPTCHA Verification, and JavaScript Validation, pass the verifications specified by the actions, and are allowed.
     *
     * @param request - DescribeSecurityEventTopNMetricRequest
     *
     * @returns DescribeSecurityEventTopNMetricResponse
     *
     * @param DescribeSecurityEventTopNMetricRequest $request
     *
     * @return DescribeSecurityEventTopNMetricResponse
     */
    public function describeSecurityEventTopNMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventTopNMetricWithOptions($request, $runtime);
    }

    /**
     * Queries the personal information-related APIs and domain names.
     *
     * @param request - DescribeSensitiveApiStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSensitiveApiStatisticResponse
     *
     * @param DescribeSensitiveApiStatisticRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSensitiveApiStatisticResponse
     */
    public function describeSensitiveApiStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->matchedHost) {
            @$query['MatchedHost'] = $request->matchedHost;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the personal information-related APIs and domain names.
     *
     * @param request - DescribeSensitiveApiStatisticRequest
     *
     * @returns DescribeSensitiveApiStatisticResponse
     *
     * @param DescribeSensitiveApiStatisticRequest $request
     *
     * @return DescribeSensitiveApiStatisticResponse
     */
    public function describeSensitiveApiStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveApiStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance check results of API security.
     *
     * @param request - DescribeSensitiveDetectionResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSensitiveDetectionResultResponse
     *
     * @param DescribeSensitiveDetectionResultRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeSensitiveDetectionResultResponse
     */
    public function describeSensitiveDetectionResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the compliance check results of API security.
     *
     * @param request - DescribeSensitiveDetectionResultRequest
     *
     * @returns DescribeSensitiveDetectionResultResponse
     *
     * @param DescribeSensitiveDetectionResultRequest $request
     *
     * @return DescribeSensitiveDetectionResultResponse
     */
    public function describeSensitiveDetectionResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveDetectionResultWithOptions($request, $runtime);
    }

    /**
     * Queries the traffic distribution of personal information records involved in cross-border data transfer.
     *
     * @param request - DescribeSensitiveOutboundDistributionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSensitiveOutboundDistributionResponse
     *
     * @param DescribeSensitiveOutboundDistributionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeSensitiveOutboundDistributionResponse
     */
    public function describeSensitiveOutboundDistributionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the traffic distribution of personal information records involved in cross-border data transfer.
     *
     * @param request - DescribeSensitiveOutboundDistributionRequest
     *
     * @returns DescribeSensitiveOutboundDistributionResponse
     *
     * @param DescribeSensitiveOutboundDistributionRequest $request
     *
     * @return DescribeSensitiveOutboundDistributionResponse
     */
    public function describeSensitiveOutboundDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveOutboundDistributionWithOptions($request, $runtime);
    }

    /**
     * Queries the data types of personal information involved in cross-border data transfer.
     *
     * @param request - DescribeSensitiveOutboundStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSensitiveOutboundStatisticResponse
     *
     * @param DescribeSensitiveOutboundStatisticRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSensitiveOutboundStatisticResponse
     */
    public function describeSensitiveOutboundStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->detectionResult) {
            @$query['DetectionResult'] = $request->detectionResult;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderKey) {
            @$query['OrderKey'] = $request->orderKey;
        }

        if (null !== $request->orderWay) {
            @$query['OrderWay'] = $request->orderWay;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->sensitiveCode) {
            @$query['SensitiveCode'] = $request->sensitiveCode;
        }

        if (null !== $request->sensitiveLevel) {
            @$query['SensitiveLevel'] = $request->sensitiveLevel;
        }

        if (null !== $request->sensitiveType) {
            @$query['SensitiveType'] = $request->sensitiveType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the data types of personal information involved in cross-border data transfer.
     *
     * @param request - DescribeSensitiveOutboundStatisticRequest
     *
     * @returns DescribeSensitiveOutboundStatisticResponse
     *
     * @param DescribeSensitiveOutboundStatisticRequest $request
     *
     * @return DescribeSensitiveOutboundStatisticResponse
     */
    public function describeSensitiveOutboundStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveOutboundStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the trends of cross-border data transfer of personal information.
     *
     * @param request - DescribeSensitiveOutboundTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSensitiveOutboundTrendResponse
     *
     * @param DescribeSensitiveOutboundTrendRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSensitiveOutboundTrendResponse
     */
    public function describeSensitiveOutboundTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the trends of cross-border data transfer of personal information.
     *
     * @param request - DescribeSensitiveOutboundTrendRequest
     *
     * @returns DescribeSensitiveOutboundTrendResponse
     *
     * @param DescribeSensitiveOutboundTrendRequest $request
     *
     * @return DescribeSensitiveOutboundTrendResponse
     */
    public function describeSensitiveOutboundTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveOutboundTrendWithOptions($request, $runtime);
    }

    /**
     * Queries the access logs of sensitive data.
     *
     * @param request - DescribeSensitiveRequestLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSensitiveRequestLogResponse
     *
     * @param DescribeSensitiveRequestLogRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSensitiveRequestLogResponse
     */
    public function describeSensitiveRequestLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->apiFormat) {
            @$query['ApiFormat'] = $request->apiFormat;
        }

        if (null !== $request->clientIP) {
            @$query['ClientIP'] = $request->clientIP;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->matchedHost) {
            @$query['MatchedHost'] = $request->matchedHost;
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

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->sensitiveCode) {
            @$query['SensitiveCode'] = $request->sensitiveCode;
        }

        if (null !== $request->sensitiveData) {
            @$query['SensitiveData'] = $request->sensitiveData;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the access logs of sensitive data.
     *
     * @param request - DescribeSensitiveRequestLogRequest
     *
     * @returns DescribeSensitiveRequestLogResponse
     *
     * @param DescribeSensitiveRequestLogRequest $request
     *
     * @return DescribeSensitiveRequestLogResponse
     */
    public function describeSensitiveRequestLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveRequestLogWithOptions($request, $runtime);
    }

    /**
     * Queries the tracing results of sensitive data.
     *
     * @param request - DescribeSensitiveRequestsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSensitiveRequestsResponse
     *
     * @param DescribeSensitiveRequestsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSensitiveRequestsResponse
     */
    public function describeSensitiveRequestsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->sensitiveCode) {
            @$query['SensitiveCode'] = $request->sensitiveCode;
        }

        if (null !== $request->sensitiveData) {
            @$query['SensitiveData'] = $request->sensitiveData;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the tracing results of sensitive data.
     *
     * @param request - DescribeSensitiveRequestsRequest
     *
     * @returns DescribeSensitiveRequestsResponse
     *
     * @param DescribeSensitiveRequestsRequest $request
     *
     * @return DescribeSensitiveRequestsResponse
     */
    public function describeSensitiveRequests($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveRequestsWithOptions($request, $runtime);
    }

    /**
     * Queries the sensitive data statistics of the tracing and auditing feature.
     *
     * @param request - DescribeSensitiveStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSensitiveStatisticResponse
     *
     * @param DescribeSensitiveStatisticRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSensitiveStatisticResponse
     */
    public function describeSensitiveStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statisticType) {
            @$query['StatisticType'] = $request->statisticType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the sensitive data statistics of the tracing and auditing feature.
     *
     * @param request - DescribeSensitiveStatisticRequest
     *
     * @returns DescribeSensitiveStatisticResponse
     *
     * @param DescribeSensitiveStatisticRequest $request
     *
     * @return DescribeSensitiveStatisticResponse
     */
    public function describeSensitiveStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSensitiveStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries whether Web Application Firewall (WAF) is authorized to access Logstores.
     *
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries whether Web Application Firewall (WAF) is authorized to access Logstores.
     *
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
     * Queries information about a Logstore, such as the total capacity, storage duration, and used capacity.
     *
     * @param request - DescribeSlsLogStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsLogStoreResponse
     *
     * @param DescribeSlsLogStoreRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSlsLogStoreResponse
     */
    public function describeSlsLogStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries information about a Logstore, such as the total capacity, storage duration, and used capacity.
     *
     * @param request - DescribeSlsLogStoreRequest
     *
     * @returns DescribeSlsLogStoreResponse
     *
     * @param DescribeSlsLogStoreRequest $request
     *
     * @return DescribeSlsLogStoreResponse
     */
    public function describeSlsLogStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsLogStoreWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a Simple Log Service Logstore.
     *
     * @param request - DescribeSlsLogStoreStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsLogStoreStatusResponse
     *
     * @param DescribeSlsLogStoreStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSlsLogStoreStatusResponse
     */
    public function describeSlsLogStoreStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the status of a Simple Log Service Logstore.
     *
     * @param request - DescribeSlsLogStoreStatusRequest
     *
     * @returns DescribeSlsLogStoreStatusResponse
     *
     * @param DescribeSlsLogStoreStatusRequest $request
     *
     * @return DescribeSlsLogStoreStatusResponse
     */
    public function describeSlsLogStoreStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsLogStoreStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the number of protected resources for which a protection template takes effect.
     *
     * @param request - DescribeTemplateResourceCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplateResourceCountResponse
     *
     * @param DescribeTemplateResourceCountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeTemplateResourceCountResponse
     */
    public function describeTemplateResourceCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the number of protected resources for which a protection template takes effect.
     *
     * @param request - DescribeTemplateResourceCountRequest
     *
     * @returns DescribeTemplateResourceCountResponse
     *
     * @param DescribeTemplateResourceCountRequest $request
     *
     * @return DescribeTemplateResourceCountResponse
     */
    public function describeTemplateResourceCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateResourceCountWithOptions($request, $runtime);
    }

    /**
     * Queries the resources that are associated to a protection rule template.
     *
     * @param request - DescribeTemplateResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplateResourcesResponse
     *
     * @param DescribeTemplateResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTemplateResourcesResponse
     */
    public function describeTemplateResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assetApi) {
            @$query['AssetApi'] = $request->assetApi;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the resources that are associated to a protection rule template.
     *
     * @param request - DescribeTemplateResourcesRequest
     *
     * @returns DescribeTemplateResourcesResponse
     *
     * @param DescribeTemplateResourcesRequest $request
     *
     * @return DescribeTemplateResourcesResponse
     */
    public function describeTemplateResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the trends of API security risks.
     *
     * @param request - DescribeUserAbnormalTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserAbnormalTrendResponse
     *
     * @param DescribeUserAbnormalTrendRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserAbnormalTrendResponse
     */
    public function describeUserAbnormalTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the trends of API security risks.
     *
     * @param request - DescribeUserAbnormalTrendRequest
     *
     * @returns DescribeUserAbnormalTrendResponse
     *
     * @param DescribeUserAbnormalTrendRequest $request
     *
     * @return DescribeUserAbnormalTrendResponse
     */
    public function describeUserAbnormalTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAbnormalTrendWithOptions($request, $runtime);
    }

    /**
     * Queries the types and statistics of risks in the API security module.
     *
     * @param request - DescribeUserAbnormalTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserAbnormalTypeResponse
     *
     * @param DescribeUserAbnormalTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUserAbnormalTypeResponse
     */
    public function describeUserAbnormalTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userStatusList) {
            @$query['UserStatusList'] = $request->userStatusList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the types and statistics of risks in the API security module.
     *
     * @param request - DescribeUserAbnormalTypeRequest
     *
     * @returns DescribeUserAbnormalTypeResponse
     *
     * @param DescribeUserAbnormalTypeRequest $request
     *
     * @return DescribeUserAbnormalTypeResponse
     */
    public function describeUserAbnormalType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAbnormalTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the traffic statistics of an API.
     *
     * @param request - DescribeUserApiRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserApiRequestResponse
     *
     * @param DescribeUserApiRequestRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserApiRequestResponse
     */
    public function describeUserApiRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiFormat) {
            @$query['ApiFormat'] = $request->apiFormat;
        }

        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the traffic statistics of an API.
     *
     * @param request - DescribeUserApiRequestRequest
     *
     * @returns DescribeUserApiRequestResponse
     *
     * @param DescribeUserApiRequestRequest $request
     *
     * @return DescribeUserApiRequestResponse
     */
    public function describeUserApiRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserApiRequestWithOptions($request, $runtime);
    }

    /**
     * Queries the user asset statistics in the API security module.
     *
     * @param request - DescribeUserAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserAssetResponse
     *
     * @param DescribeUserAssetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeUserAssetResponse
     */
    public function describeUserAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->days) {
            @$query['Days'] = $request->days;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the user asset statistics in the API security module.
     *
     * @param request - DescribeUserAssetRequest
     *
     * @returns DescribeUserAssetResponse
     *
     * @param DescribeUserAssetRequest $request
     *
     * @return DescribeUserAssetResponse
     */
    public function describeUserAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAssetWithOptions($request, $runtime);
    }

    /**
     * Queries the trends of attacks detected by the API security module.
     *
     * @param request - DescribeUserEventTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserEventTrendResponse
     *
     * @param DescribeUserEventTrendRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserEventTrendResponse
     */
    public function describeUserEventTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->eventScope) {
            @$query['EventScope'] = $request->eventScope;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the trends of attacks detected by the API security module.
     *
     * @param request - DescribeUserEventTrendRequest
     *
     * @returns DescribeUserEventTrendResponse
     *
     * @param DescribeUserEventTrendRequest $request
     *
     * @return DescribeUserEventTrendResponse
     */
    public function describeUserEventTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEventTrendWithOptions($request, $runtime);
    }

    /**
     * Queries the types and statistics of security events in the API security module.
     *
     * @param request - DescribeUserEventTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserEventTypeResponse
     *
     * @param DescribeUserEventTypeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUserEventTypeResponse
     */
    public function describeUserEventTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventScope) {
            @$query['EventScope'] = $request->eventScope;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userStatusList) {
            @$query['UserStatusList'] = $request->userStatusList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the types and statistics of security events in the API security module.
     *
     * @param request - DescribeUserEventTypeRequest
     *
     * @returns DescribeUserEventTypeResponse
     *
     * @param DescribeUserEventTypeRequest $request
     *
     * @return DescribeUserEventTypeResponse
     */
    public function describeUserEventType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEventTypeWithOptions($request, $runtime);
    }

    /**
     * 查询用户日志配置.
     *
     * @param request - DescribeUserLogFieldConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserLogFieldConfigResponse
     *
     * @param DescribeUserLogFieldConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeUserLogFieldConfigResponse
     */
    public function describeUserLogFieldConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryType) {
            @$query['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserLogFieldConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserLogFieldConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户日志配置.
     *
     * @param request - DescribeUserLogFieldConfigRequest
     *
     * @returns DescribeUserLogFieldConfigResponse
     *
     * @param DescribeUserLogFieldConfigRequest $request
     *
     * @return DescribeUserLogFieldConfigResponse
     */
    public function describeUserLogFieldConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserLogFieldConfigWithOptions($request, $runtime);
    }

    /**
     * Queries available regions for log storage.
     *
     * @param request - DescribeUserSlsLogRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserSlsLogRegionsResponse
     *
     * @param DescribeUserSlsLogRegionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserSlsLogRegionsResponse
     */
    public function describeUserSlsLogRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries available regions for log storage.
     *
     * @param request - DescribeUserSlsLogRegionsRequest
     *
     * @returns DescribeUserSlsLogRegionsResponse
     *
     * @param DescribeUserSlsLogRegionsRequest $request
     *
     * @return DescribeUserSlsLogRegionsResponse
     */
    public function describeUserSlsLogRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserSlsLogRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the status, region ID, and status modification time of Web Application Firewall (WAF) logs.
     *
     * @param request - DescribeUserWafLogStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserWafLogStatusResponse
     *
     * @param DescribeUserWafLogStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUserWafLogStatusResponse
     */
    public function describeUserWafLogStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the status, region ID, and status modification time of Web Application Firewall (WAF) logs.
     *
     * @param request - DescribeUserWafLogStatusRequest
     *
     * @returns DescribeUserWafLogStatusResponse
     *
     * @param DescribeUserWafLogStatusRequest $request
     *
     * @return DescribeUserWafLogStatusResponse
     */
    public function describeUserWafLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserWafLogStatusWithOptions($request, $runtime);
    }

    /**
     * 查询归属校验内容.
     *
     * @param request - DescribeVerifyContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyContentResponse
     *
     * @param DescribeVerifyContentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVerifyContentResponse
     */
    public function describeVerifyContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessOrigin) {
            @$query['AccessOrigin'] = $request->accessOrigin;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyContent',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询归属校验内容.
     *
     * @param request - DescribeVerifyContentRequest
     *
     * @returns DescribeVerifyContentResponse
     *
     * @param DescribeVerifyContentRequest $request
     *
     * @return DescribeVerifyContentResponse
     */
    public function describeVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyContentWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 IP addresses from which requests are sent.
     *
     * @param request - DescribeVisitTopIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVisitTopIpResponse
     *
     * @param DescribeVisitTopIpRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeVisitTopIpResponse
     */
    public function describeVisitTopIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 IP addresses from which requests are sent.
     *
     * @param request - DescribeVisitTopIpRequest
     *
     * @returns DescribeVisitTopIpResponse
     *
     * @param DescribeVisitTopIpRequest $request
     *
     * @return DescribeVisitTopIpResponse
     */
    public function describeVisitTopIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVisitTopIpWithOptions($request, $runtime);
    }

    /**
     * Queries the top 10 user agents that are used to initiate requests.
     *
     * @param request - DescribeVisitUasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVisitUasResponse
     *
     * @param DescribeVisitUasRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeVisitUasResponse
     */
    public function describeVisitUasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the top 10 user agents that are used to initiate requests.
     *
     * @param request - DescribeVisitUasRequest
     *
     * @returns DescribeVisitUasResponse
     *
     * @param DescribeVisitUasRequest $request
     *
     * @return DescribeVisitUasResponse
     */
    public function describeVisitUas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVisitUasWithOptions($request, $runtime);
    }

    /**
     * Queries the back-to-origin CIDR blocks of a Web Application Firewall (WAF) instance.
     *
     * @param request - DescribeWafSourceIpSegmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWafSourceIpSegmentResponse
     *
     * @param DescribeWafSourceIpSegmentRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the back-to-origin CIDR blocks of a Web Application Firewall (WAF) instance.
     *
     * @param request - DescribeWafSourceIpSegmentRequest
     *
     * @returns DescribeWafSourceIpSegmentResponse
     *
     * @param DescribeWafSourceIpSegmentRequest $request
     *
     * @return DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWafSourceIpSegmentWithOptions($request, $runtime);
    }

    /**
     * 创建WAF服务关联角色.
     *
     * @param request - InitializeWafOperationRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeWafOperationRoleResponse
     *
     * @param InitializeWafOperationRoleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return InitializeWafOperationRoleResponse
     */
    public function initializeWafOperationRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitializeWafOperationRole',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeWafOperationRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建WAF服务关联角色.
     *
     * @param request - InitializeWafOperationRoleRequest
     *
     * @returns InitializeWafOperationRoleResponse
     *
     * @param InitializeWafOperationRoleRequest $request
     *
     * @return InitializeWafOperationRoleResponse
     */
    public function initializeWafOperationRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeWafOperationRoleWithOptions($request, $runtime);
    }

    /**
     * Queries tag keys.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries tag keys.
     *
     * @param request - ListTagKeysRequest
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to a resource.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
     * Queries the tags that are added to a resource.
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
     * Queries the tag values of a tag key.
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the tag values of a tag key.
     *
     * @param request - ListTagValuesRequest
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * Modifies the status of multiple risks detected by the API security module at a time.
     *
     * @param request - ModifyApisecAbnormalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApisecAbnormalsResponse
     *
     * @param ModifyApisecAbnormalsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyApisecAbnormalsResponse
     */
    public function modifyApisecAbnormalsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->abnormalIds) {
            @$query['AbnormalIds'] = $request->abnormalIds;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->userStatus) {
            @$query['UserStatus'] = $request->userStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the status of multiple risks detected by the API security module at a time.
     *
     * @param request - ModifyApisecAbnormalsRequest
     *
     * @returns ModifyApisecAbnormalsResponse
     *
     * @param ModifyApisecAbnormalsRequest $request
     *
     * @return ModifyApisecAbnormalsResponse
     */
    public function modifyApisecAbnormals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecAbnormalsWithOptions($request, $runtime);
    }

    /**
     * Modifies the annotations of APIs in the API security module.
     *
     * @param request - ModifyApisecApiResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApisecApiResourceResponse
     *
     * @param ModifyApisecApiResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyApisecApiResourceResponse
     */
    public function modifyApisecApiResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->follow) {
            @$query['Follow'] = $request->follow;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the annotations of APIs in the API security module.
     *
     * @param request - ModifyApisecApiResourceRequest
     *
     * @returns ModifyApisecApiResourceResponse
     *
     * @param ModifyApisecApiResourceRequest $request
     *
     * @return ModifyApisecApiResourceResponse
     */
    public function modifyApisecApiResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecApiResourceWithOptions($request, $runtime);
    }

    /**
     * Modifies the status of multiple security events detected by the API security module at a time.
     *
     * @param request - ModifyApisecEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApisecEventsResponse
     *
     * @param ModifyApisecEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyApisecEventsResponse
     */
    public function modifyApisecEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->eventIds) {
            @$query['EventIds'] = $request->eventIds;
        }

        if (null !== $request->eventScope) {
            @$query['EventScope'] = $request->eventScope;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->userStatus) {
            @$query['UserStatus'] = $request->userStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the status of multiple security events detected by the API security module at a time.
     *
     * @param request - ModifyApisecEventsRequest
     *
     * @returns ModifyApisecEventsResponse
     *
     * @param ModifyApisecEventsRequest $request
     *
     * @return ModifyApisecEventsResponse
     */
    public function modifyApisecEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecEventsWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of API security log subscription.
     *
     * @param request - ModifyApisecLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApisecLogDeliveryResponse
     *
     * @param ModifyApisecLogDeliveryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyApisecLogDeliveryResponse
     */
    public function modifyApisecLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assertKey) {
            @$query['AssertKey'] = $request->assertKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logRegionId) {
            @$query['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the configurations of API security log subscription.
     *
     * @param request - ModifyApisecLogDeliveryRequest
     *
     * @returns ModifyApisecLogDeliveryResponse
     *
     * @param ModifyApisecLogDeliveryRequest $request
     *
     * @return ModifyApisecLogDeliveryResponse
     */
    public function modifyApisecLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * Modifies the status of API security log subscription.
     *
     * @param request - ModifyApisecLogDeliveryStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApisecLogDeliveryStatusResponse
     *
     * @param ModifyApisecLogDeliveryStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyApisecLogDeliveryStatusResponse
     */
    public function modifyApisecLogDeliveryStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assertKey) {
            @$query['AssertKey'] = $request->assertKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the status of API security log subscription.
     *
     * @param request - ModifyApisecLogDeliveryStatusRequest
     *
     * @returns ModifyApisecLogDeliveryStatusResponse
     *
     * @param ModifyApisecLogDeliveryStatusRequest $request
     *
     * @return ModifyApisecLogDeliveryStatusResponse
     */
    public function modifyApisecLogDeliveryStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecLogDeliveryStatusWithOptions($request, $runtime);
    }

    /**
     * Changes the status of features in the API security module for protected objects or protected object groups.
     *
     * @param request - ModifyApisecModuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApisecModuleStatusResponse
     *
     * @param ModifyApisecModuleStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyApisecModuleStatusResponse
     */
    public function modifyApisecModuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reportStatus) {
            @$query['ReportStatus'] = $request->reportStatus;
        }

        if (null !== $request->resourceGroups) {
            @$query['ResourceGroups'] = $request->resourceGroups;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->traceStatus) {
            @$query['TraceStatus'] = $request->traceStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Changes the status of features in the API security module for protected objects or protected object groups.
     *
     * @param request - ModifyApisecModuleStatusRequest
     *
     * @returns ModifyApisecModuleStatusResponse
     *
     * @param ModifyApisecModuleStatusRequest $request
     *
     * @return ModifyApisecModuleStatusResponse
     */
    public function modifyApisecModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecModuleStatusWithOptions($request, $runtime);
    }

    /**
     * Changes the status of the API security module for protected objects or protected object groups.
     *
     * @param request - ModifyApisecStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApisecStatusResponse
     *
     * @param ModifyApisecStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyApisecStatusResponse
     */
    public function modifyApisecStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apisecStatus) {
            @$query['ApisecStatus'] = $request->apisecStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroups) {
            @$query['ResourceGroups'] = $request->resourceGroups;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Changes the status of the API security module for protected objects or protected object groups.
     *
     * @param request - ModifyApisecStatusRequest
     *
     * @returns ModifyApisecStatusResponse
     *
     * @param ModifyApisecStatusRequest $request
     *
     * @return ModifyApisecStatusResponse
     */
    public function modifyApisecStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApisecStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a service that is added to Web Application Firewall (WAF).
     *
     * @param tmpReq - ModifyCloudResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCloudResourceResponse
     *
     * @param ModifyCloudResourceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyCloudResourceResponse
     */
    public function modifyCloudResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyCloudResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->listen) {
            $request->listenShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }

        if (null !== $tmpReq->redirect) {
            $request->redirectShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }

        $query = [];
        if (null !== $request->cloudResourceId) {
            @$query['CloudResourceId'] = $request->cloudResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->listenShrink) {
            @$query['Listen'] = $request->listenShrink;
        }

        if (null !== $request->redirectShrink) {
            @$query['Redirect'] = $request->redirectShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the configurations of a service that is added to Web Application Firewall (WAF).
     *
     * @param request - ModifyCloudResourceRequest
     *
     * @returns ModifyCloudResourceResponse
     *
     * @param ModifyCloudResourceRequest $request
     *
     * @return ModifyCloudResourceResponse
     */
    public function modifyCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudResourceWithOptions($request, $runtime);
    }

    /**
     * 修改云产品接入的证书.
     *
     * @param request - ModifyCloudResourceCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCloudResourceCertResponse
     *
     * @param ModifyCloudResourceCertRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyCloudResourceCertResponse
     */
    public function modifyCloudResourceCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificates) {
            @$query['Certificates'] = $request->certificates;
        }

        if (null !== $request->cloudResourceId) {
            @$query['CloudResourceId'] = $request->cloudResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceProduct) {
            @$query['ResourceProduct'] = $request->resourceProduct;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCloudResourceCert',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCloudResourceCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改云产品接入的证书.
     *
     * @param request - ModifyCloudResourceCertRequest
     *
     * @returns ModifyCloudResourceCertResponse
     *
     * @param ModifyCloudResourceCertRequest $request
     *
     * @return ModifyCloudResourceCertResponse
     */
    public function modifyCloudResourceCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudResourceCertWithOptions($request, $runtime);
    }

    /**
     * Modifies the default Secure Sockets Layer (SSL) and Transport Layer Security (TLS) settings.
     *
     * @param request - ModifyDefaultHttpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefaultHttpsResponse
     *
     * @param ModifyDefaultHttpsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDefaultHttpsResponse
     */
    public function modifyDefaultHttpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        if (null !== $request->cipherSuite) {
            @$query['CipherSuite'] = $request->cipherSuite;
        }

        if (null !== $request->customCiphers) {
            @$query['CustomCiphers'] = $request->customCiphers;
        }

        if (null !== $request->enableTLSv3) {
            @$query['EnableTLSv3'] = $request->enableTLSv3;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->TLSVersion) {
            @$query['TLSVersion'] = $request->TLSVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the default Secure Sockets Layer (SSL) and Transport Layer Security (TLS) settings.
     *
     * @param request - ModifyDefaultHttpsRequest
     *
     * @returns ModifyDefaultHttpsResponse
     *
     * @param ModifyDefaultHttpsRequest $request
     *
     * @return ModifyDefaultHttpsResponse
     */
    public function modifyDefaultHttps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefaultHttpsWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a protected object group.
     *
     * @param request - ModifyDefenseResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseResourceGroupResponse
     *
     * @param ModifyDefenseResourceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDefenseResourceGroupResponse
     */
    public function modifyDefenseResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addList) {
            @$query['AddList'] = $request->addList;
        }

        if (null !== $request->deleteList) {
            @$query['DeleteList'] = $request->deleteList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the configurations of a protected object group.
     *
     * @param request - ModifyDefenseResourceGroupRequest
     *
     * @returns ModifyDefenseResourceGroupResponse
     *
     * @param ModifyDefenseResourceGroupRequest $request
     *
     * @return ModifyDefenseResourceGroupResponse
     */
    public function modifyDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies the cookie settings of a protected object and the method to identify the originating IP addresses of clients.
     *
     * @param request - ModifyDefenseResourceXffRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseResourceXffResponse
     *
     * @param ModifyDefenseResourceXffRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDefenseResourceXffResponse
     */
    public function modifyDefenseResourceXffWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acwCookieStatus) {
            @$query['AcwCookieStatus'] = $request->acwCookieStatus;
        }

        if (null !== $request->acwSecureStatus) {
            @$query['AcwSecureStatus'] = $request->acwSecureStatus;
        }

        if (null !== $request->acwV3SecureStatus) {
            @$query['AcwV3SecureStatus'] = $request->acwV3SecureStatus;
        }

        if (null !== $request->customHeaders) {
            @$query['CustomHeaders'] = $request->customHeaders;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->responseHeaders) {
            @$query['ResponseHeaders'] = $request->responseHeaders;
        }

        if (null !== $request->xffStatus) {
            @$query['XffStatus'] = $request->xffStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the cookie settings of a protected object and the method to identify the originating IP addresses of clients.
     *
     * @param request - ModifyDefenseResourceXffRequest
     *
     * @returns ModifyDefenseResourceXffResponse
     *
     * @param ModifyDefenseResourceXffRequest $request
     *
     * @return ModifyDefenseResourceXffResponse
     */
    public function modifyDefenseResourceXff($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseResourceXffWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a protection rule.
     *
     * @param request - ModifyDefenseRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseRuleResponse
     *
     * @param ModifyDefenseRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDefenseRuleResponse
     */
    public function modifyDefenseRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $body = [];
        if (null !== $request->rules) {
            @$body['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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
     * Modifies the configurations of a protection rule.
     *
     * @param request - ModifyDefenseRuleRequest
     *
     * @returns ModifyDefenseRuleResponse
     *
     * @param ModifyDefenseRuleRequest $request
     *
     * @return ModifyDefenseRuleResponse
     */
    public function modifyDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * Updates the cached page of a website that is protected based on a website tamper-proofing rule.
     *
     * @param request - ModifyDefenseRuleCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseRuleCacheResponse
     *
     * @param ModifyDefenseRuleCacheRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDefenseRuleCacheResponse
     */
    public function modifyDefenseRuleCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Updates the cached page of a website that is protected based on a website tamper-proofing rule.
     *
     * @param request - ModifyDefenseRuleCacheRequest
     *
     * @returns ModifyDefenseRuleCacheResponse
     *
     * @param ModifyDefenseRuleCacheRequest $request
     *
     * @return ModifyDefenseRuleCacheResponse
     */
    public function modifyDefenseRuleCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseRuleCacheWithOptions($request, $runtime);
    }

    /**
     * Changes the status of a protection rule.
     *
     * @param request - ModifyDefenseRuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseRuleStatusResponse
     *
     * @param ModifyDefenseRuleStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDefenseRuleStatusResponse
     */
    public function modifyDefenseRuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleStatus) {
            @$query['RuleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Changes the status of a protection rule.
     *
     * @param request - ModifyDefenseRuleStatusRequest
     *
     * @returns ModifyDefenseRuleStatusResponse
     *
     * @param ModifyDefenseRuleStatusRequest $request
     *
     * @return ModifyDefenseRuleStatusResponse
     */
    public function modifyDefenseRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseRuleStatusWithOptions($request, $runtime);
    }

    /**
     * 修改用户防护场景的配置.
     *
     * @param request - ModifyDefenseSceneConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseSceneConfigResponse
     *
     * @param ModifyDefenseSceneConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDefenseSceneConfigResponse
     */
    public function modifyDefenseSceneConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configKey) {
            @$query['ConfigKey'] = $request->configKey;
        }

        if (null !== $request->configValue) {
            @$query['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDefenseSceneConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDefenseSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改用户防护场景的配置.
     *
     * @param request - ModifyDefenseSceneConfigRequest
     *
     * @returns ModifyDefenseSceneConfigResponse
     *
     * @param ModifyDefenseSceneConfigRequest $request
     *
     * @return ModifyDefenseSceneConfigResponse
     */
    public function modifyDefenseSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseSceneConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a protection rule template.
     *
     * @param request - ModifyDefenseTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseTemplateResponse
     *
     * @param ModifyDefenseTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDefenseTemplateResponse
     */
    public function modifyDefenseTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the configurations of a protection rule template.
     *
     * @param request - ModifyDefenseTemplateRequest
     *
     * @returns ModifyDefenseTemplateResponse
     *
     * @param ModifyDefenseTemplateRequest $request
     *
     * @return ModifyDefenseTemplateResponse
     */
    public function modifyDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * Changes the status of a protection rule template.
     *
     * @param request - ModifyDefenseTemplateStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseTemplateStatusResponse
     *
     * @param ModifyDefenseTemplateStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDefenseTemplateStatusResponse
     */
    public function modifyDefenseTemplateStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateStatus) {
            @$query['TemplateStatus'] = $request->templateStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Changes the status of a protection rule template.
     *
     * @param request - ModifyDefenseTemplateStatusRequest
     *
     * @returns ModifyDefenseTemplateStatusResponse
     *
     * @param ModifyDefenseTemplateStatusRequest $request
     *
     * @return ModifyDefenseTemplateStatusResponse
     */
    public function modifyDefenseTemplateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseTemplateStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a domain name that is added to Web Application Firewall (WAF) in CNAME record mode.
     *
     * @param tmpReq - ModifyDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDomainResponse
     *
     * @param ModifyDomainRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDomainResponse
     */
    public function modifyDomainWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyDomainShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->listen) {
            $request->listenShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }

        if (null !== $tmpReq->redirect) {
            $request->redirectShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }

        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->listenShrink) {
            @$query['Listen'] = $request->listenShrink;
        }

        if (null !== $request->redirectShrink) {
            @$query['Redirect'] = $request->redirectShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the configurations of a domain name that is added to Web Application Firewall (WAF) in CNAME record mode.
     *
     * @param request - ModifyDomainRequest
     *
     * @returns ModifyDomainResponse
     *
     * @param ModifyDomainRequest $request
     *
     * @return ModifyDomainResponse
     */
    public function modifyDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainWithOptions($request, $runtime);
    }

    /**
     * 修改域名的证书.
     *
     * @param request - ModifyDomainCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDomainCertResponse
     *
     * @param ModifyDomainCertRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDomainCertResponse
     */
    public function modifyDomainCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        if (null !== $request->cipherSuite) {
            @$query['CipherSuite'] = $request->cipherSuite;
        }

        if (null !== $request->customCiphers) {
            @$query['CustomCiphers'] = $request->customCiphers;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enableTLSv3) {
            @$query['EnableTLSv3'] = $request->enableTLSv3;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->TLSVersion) {
            @$query['TLSVersion'] = $request->TLSVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDomainCert',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDomainCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改域名的证书.
     *
     * @param request - ModifyDomainCertRequest
     *
     * @returns ModifyDomainCertResponse
     *
     * @param ModifyDomainCertRequest $request
     *
     * @return ModifyDomainCertResponse
     */
    public function modifyDomainCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainCertWithOptions($request, $runtime);
    }

    /**
     * Re-adds a domain name that is penalized for failing to obtain an Internet Content Provider (ICP) filing to Web Application Firewall (WAF).
     *
     * @param request - ModifyDomainPunishStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDomainPunishStatusResponse
     *
     * @param ModifyDomainPunishStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDomainPunishStatusResponse
     */
    public function modifyDomainPunishStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Re-adds a domain name that is penalized for failing to obtain an Internet Content Provider (ICP) filing to Web Application Firewall (WAF).
     *
     * @param request - ModifyDomainPunishStatusRequest
     *
     * @returns ModifyDomainPunishStatusResponse
     *
     * @param ModifyDomainPunishStatusRequest $request
     *
     * @return ModifyDomainPunishStatusResponse
     */
    public function modifyDomainPunishStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainPunishStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies information about a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridCloudClusterResponse
     *
     * @param ModifyHybridCloudClusterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyHybridCloudClusterResponse
     */
    public function modifyHybridCloudClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessMode) {
            @$query['AccessMode'] = $request->accessMode;
        }

        if (null !== $request->accessRegion) {
            @$query['AccessRegion'] = $request->accessRegion;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->httpPorts) {
            @$query['HttpPorts'] = $request->httpPorts;
        }

        if (null !== $request->httpsPorts) {
            @$query['HttpsPorts'] = $request->httpsPorts;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logFieldsNotReturned) {
            @$query['LogFieldsNotReturned'] = $request->logFieldsNotReturned;
        }

        if (null !== $request->protectionServerCount) {
            @$query['ProtectionServerCount'] = $request->protectionServerCount;
        }

        if (null !== $request->proxyStatus) {
            @$query['ProxyStatus'] = $request->proxyStatus;
        }

        if (null !== $request->proxyType) {
            @$query['ProxyType'] = $request->proxyType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleConfig) {
            @$query['RuleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->ruleStatus) {
            @$query['RuleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHybridCloudCluster',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridCloudClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies information about a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudClusterRequest
     *
     * @returns ModifyHybridCloudClusterResponse
     *
     * @param ModifyHybridCloudClusterRequest $request
     *
     * @return ModifyHybridCloudClusterResponse
     */
    public function modifyHybridCloudCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudClusterWithOptions($request, $runtime);
    }

    /**
     * Enables or disables manual bypass for a hybrid cloud cluster whose type is set to SDK Integration Mode.
     *
     * @param request - ModifyHybridCloudClusterBypassStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridCloudClusterBypassStatusResponse
     *
     * @param ModifyHybridCloudClusterBypassStatusRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ModifyHybridCloudClusterBypassStatusResponse
     */
    public function modifyHybridCloudClusterBypassStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterResourceId) {
            @$query['ClusterResourceId'] = $request->clusterResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleStatus) {
            @$query['RuleStatus'] = $request->ruleStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Enables or disables manual bypass for a hybrid cloud cluster whose type is set to SDK Integration Mode.
     *
     * @param request - ModifyHybridCloudClusterBypassStatusRequest
     *
     * @returns ModifyHybridCloudClusterBypassStatusResponse
     *
     * @param ModifyHybridCloudClusterBypassStatusRequest $request
     *
     * @return ModifyHybridCloudClusterBypassStatusResponse
     */
    public function modifyHybridCloudClusterBypassStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudClusterBypassStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the rule of a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudClusterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridCloudClusterRuleResponse
     *
     * @param ModifyHybridCloudClusterRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyHybridCloudClusterRuleResponse
     */
    public function modifyHybridCloudClusterRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterRuleResourceId) {
            @$query['ClusterRuleResourceId'] = $request->clusterRuleResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleConfig) {
            @$query['RuleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->ruleStatus) {
            @$query['RuleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the rule of a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudClusterRuleRequest
     *
     * @returns ModifyHybridCloudClusterRuleResponse
     *
     * @param ModifyHybridCloudClusterRuleRequest $request
     *
     * @return ModifyHybridCloudClusterRuleResponse
     */
    public function modifyHybridCloudClusterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudClusterRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies a node group in a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridCloudGroupResponse
     *
     * @param ModifyHybridCloudGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyHybridCloudGroupResponse
     */
    public function modifyHybridCloudGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies a node group in a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudGroupRequest
     *
     * @returns ModifyHybridCloudGroupResponse
     *
     * @param ModifyHybridCloudGroupRequest $request
     *
     * @return ModifyHybridCloudGroupResponse
     */
    public function modifyHybridCloudGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudGroupWithOptions($request, $runtime);
    }

    /**
     * Adds a node to a node group of a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudGroupExpansionServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridCloudGroupExpansionServerResponse
     *
     * @param ModifyHybridCloudGroupExpansionServerRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyHybridCloudGroupExpansionServerResponse
     */
    public function modifyHybridCloudGroupExpansionServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mids) {
            @$query['Mids'] = $request->mids;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Adds a node to a node group of a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudGroupExpansionServerRequest
     *
     * @returns ModifyHybridCloudGroupExpansionServerResponse
     *
     * @param ModifyHybridCloudGroupExpansionServerRequest $request
     *
     * @return ModifyHybridCloudGroupExpansionServerResponse
     */
    public function modifyHybridCloudGroupExpansionServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudGroupExpansionServerWithOptions($request, $runtime);
    }

    /**
     * Deletes a node from a node group of a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudGroupShrinkServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridCloudGroupShrinkServerResponse
     *
     * @param ModifyHybridCloudGroupShrinkServerRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyHybridCloudGroupShrinkServerResponse
     */
    public function modifyHybridCloudGroupShrinkServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mids) {
            @$query['Mids'] = $request->mids;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes a node from a node group of a hybrid cloud cluster.
     *
     * @param request - ModifyHybridCloudGroupShrinkServerRequest
     *
     * @returns ModifyHybridCloudGroupShrinkServerResponse
     *
     * @param ModifyHybridCloudGroupShrinkServerRequest $request
     *
     * @return ModifyHybridCloudGroupShrinkServerResponse
     */
    public function modifyHybridCloudGroupShrinkServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudGroupShrinkServerWithOptions($request, $runtime);
    }

    /**
     * Modifies the traffic redirection status of a hybrid cloud cluster by using an SDK.
     *
     * @param request - ModifyHybridCloudSdkPullinStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridCloudSdkPullinStatusResponse
     *
     * @param ModifyHybridCloudSdkPullinStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyHybridCloudSdkPullinStatusResponse
     */
    public function modifyHybridCloudSdkPullinStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mid) {
            @$query['Mid'] = $request->mid;
        }

        if (null !== $request->pullinStatus) {
            @$query['PullinStatus'] = $request->pullinStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the traffic redirection status of a hybrid cloud cluster by using an SDK.
     *
     * @param request - ModifyHybridCloudSdkPullinStatusRequest
     *
     * @returns ModifyHybridCloudSdkPullinStatusResponse
     *
     * @param ModifyHybridCloudSdkPullinStatusRequest $request
     *
     * @return ModifyHybridCloudSdkPullinStatusResponse
     */
    public function modifyHybridCloudSdkPullinStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudSdkPullinStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a hybrid cloud node.
     *
     * @param request - ModifyHybridCloudServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridCloudServerResponse
     *
     * @param ModifyHybridCloudServerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyHybridCloudServerResponse
     */
    public function modifyHybridCloudServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->continents) {
            @$query['Continents'] = $request->continents;
        }

        if (null !== $request->customName) {
            @$query['CustomName'] = $request->customName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mid) {
            @$query['Mid'] = $request->mid;
        }

        if (null !== $request->operator) {
            @$query['Operator'] = $request->operator;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the information about a hybrid cloud node.
     *
     * @param request - ModifyHybridCloudServerRequest
     *
     * @returns ModifyHybridCloudServerResponse
     *
     * @param ModifyHybridCloudServerRequest $request
     *
     * @return ModifyHybridCloudServerResponse
     */
    public function modifyHybridCloudServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudServerWithOptions($request, $runtime);
    }

    /**
     * Modifies a hybrid cloud log delivery configuration.
     *
     * @param request - ModifyLogDeliveryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLogDeliveryConfigResponse
     *
     * @param ModifyLogDeliveryConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyLogDeliveryConfigResponse
     */
    public function modifyLogDeliveryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryDetail) {
            @$query['DeliveryDetail'] = $request->deliveryDetail;
        }

        if (null !== $request->deliveryName) {
            @$query['DeliveryName'] = $request->deliveryName;
        }

        if (null !== $request->deliveryType) {
            @$query['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLogDeliveryConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLogDeliveryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a hybrid cloud log delivery configuration.
     *
     * @param request - ModifyLogDeliveryConfigRequest
     *
     * @returns ModifyLogDeliveryConfigResponse
     *
     * @param ModifyLogDeliveryConfigRequest $request
     *
     * @return ModifyLogDeliveryConfigResponse
     */
    public function modifyLogDeliveryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogDeliveryConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies an IP address blacklist for major event protection.
     *
     * @param request - ModifyMajorProtectionBlackIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMajorProtectionBlackIpResponse
     *
     * @param ModifyMajorProtectionBlackIpRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyMajorProtectionBlackIpResponse
     */
    public function modifyMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->expiredTime) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipList) {
            @$query['IpList'] = $request->ipList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies an IP address blacklist for major event protection.
     *
     * @param request - ModifyMajorProtectionBlackIpRequest
     *
     * @returns ModifyMajorProtectionBlackIpResponse
     *
     * @param ModifyMajorProtectionBlackIpRequest $request
     *
     * @return ModifyMajorProtectionBlackIpResponse
     */
    public function modifyMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about members that are added for multi-account management.
     *
     * @param request - ModifyMemberAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMemberAccountResponse
     *
     * @param ModifyMemberAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyMemberAccountResponse
     */
    public function modifyMemberAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memberAccountId) {
            @$query['MemberAccountId'] = $request->memberAccountId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the information about members that are added for multi-account management.
     *
     * @param request - ModifyMemberAccountRequest
     *
     * @returns ModifyMemberAccountResponse
     *
     * @param ModifyMemberAccountRequest $request
     *
     * @return ModifyMemberAccountResponse
     */
    public function modifyMemberAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMemberAccountWithOptions($request, $runtime);
    }

    /**
     * Modifies the protection status of Web Application Firewall (WAF).
     *
     * @param request - ModifyPauseProtectionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPauseProtectionStatusResponse
     *
     * @param ModifyPauseProtectionStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyPauseProtectionStatusResponse
     */
    public function modifyPauseProtectionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pauseStatus) {
            @$query['PauseStatus'] = $request->pauseStatus;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the protection status of Web Application Firewall (WAF).
     *
     * @param request - ModifyPauseProtectionStatusRequest
     *
     * @returns ModifyPauseProtectionStatusResponse
     *
     * @param ModifyPauseProtectionStatusRequest $request
     *
     * @return ModifyPauseProtectionStatusResponse
     */
    public function modifyPauseProtectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPauseProtectionStatusWithOptions($request, $runtime);
    }

    /**
     * 修改防护对象日志外发状态
     *
     * @param request - ModifyResourceLogDeliveryStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyResourceLogDeliveryStatusResponse
     *
     * @param ModifyResourceLogDeliveryStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyResourceLogDeliveryStatusResponse
     */
    public function modifyResourceLogDeliveryStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryName) {
            @$query['DeliveryName'] = $request->deliveryName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyResourceLogDeliveryStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyResourceLogDeliveryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改防护对象日志外发状态
     *
     * @param request - ModifyResourceLogDeliveryStatusRequest
     *
     * @returns ModifyResourceLogDeliveryStatusResponse
     *
     * @param ModifyResourceLogDeliveryStatusRequest $request
     *
     * @return ModifyResourceLogDeliveryStatusResponse
     */
    public function modifyResourceLogDeliveryStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceLogDeliveryStatusWithOptions($request, $runtime);
    }

    /**
     * 修改防护对象的日志字段配置.
     *
     * @param request - ModifyResourceLogFieldConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyResourceLogFieldConfigResponse
     *
     * @param ModifyResourceLogFieldConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyResourceLogFieldConfigResponse
     */
    public function modifyResourceLogFieldConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryType) {
            @$query['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->extendConfig) {
            @$query['ExtendConfig'] = $request->extendConfig;
        }

        if (null !== $request->fieldList) {
            @$query['FieldList'] = $request->fieldList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logDeliveryStrategy) {
            @$query['LogDeliveryStrategy'] = $request->logDeliveryStrategy;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyResourceLogFieldConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyResourceLogFieldConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改防护对象的日志字段配置.
     *
     * @param request - ModifyResourceLogFieldConfigRequest
     *
     * @returns ModifyResourceLogFieldConfigResponse
     *
     * @param ModifyResourceLogFieldConfigRequest $request
     *
     * @return ModifyResourceLogFieldConfigResponse
     */
    public function modifyResourceLogFieldConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceLogFieldConfigWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the log collection feature for a protected object.
     *
     * @param request - ModifyResourceLogStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyResourceLogStatusResponse
     *
     * @param ModifyResourceLogStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyResourceLogStatusResponse
     */
    public function modifyResourceLogStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Enables or disables the log collection feature for a protected object.
     *
     * @param request - ModifyResourceLogStatusRequest
     *
     * @returns ModifyResourceLogStatusResponse
     *
     * @param ModifyResourceLogStatusRequest $request
     *
     * @return ModifyResourceLogStatusResponse
     */
    public function modifyResourceLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceLogStatusWithOptions($request, $runtime);
    }

    /**
     * Associates or disassociates a protected object or protected object group with or from a protection rule template.
     *
     * @param request - ModifyTemplateResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTemplateResourcesResponse
     *
     * @param ModifyTemplateResourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyTemplateResourcesResponse
     */
    public function modifyTemplateResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindAssets) {
            @$query['BindAssets'] = $request->bindAssets;
        }

        if (null !== $request->bindResourceGroups) {
            @$query['BindResourceGroups'] = $request->bindResourceGroups;
        }

        if (null !== $request->bindResources) {
            @$query['BindResources'] = $request->bindResources;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->unbindAssets) {
            @$query['UnbindAssets'] = $request->unbindAssets;
        }

        if (null !== $request->unbindResourceGroups) {
            @$query['UnbindResourceGroups'] = $request->unbindResourceGroups;
        }

        if (null !== $request->unbindResources) {
            @$query['UnbindResources'] = $request->unbindResources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Associates or disassociates a protected object or protected object group with or from a protection rule template.
     *
     * @param request - ModifyTemplateResourcesRequest
     *
     * @returns ModifyTemplateResourcesResponse
     *
     * @param ModifyTemplateResourcesRequest $request
     *
     * @return ModifyTemplateResourcesResponse
     */
    public function modifyTemplateResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateResourcesWithOptions($request, $runtime);
    }

    /**
     * 修改用户日志服务的默认字段配置.
     *
     * @param request - ModifyUserLogFieldConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserLogFieldConfigResponse
     *
     * @param ModifyUserLogFieldConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyUserLogFieldConfigResponse
     */
    public function modifyUserLogFieldConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryType) {
            @$query['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->extendConfig) {
            @$query['ExtendConfig'] = $request->extendConfig;
        }

        if (null !== $request->fieldList) {
            @$query['FieldList'] = $request->fieldList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logDeliveryStrategy) {
            @$query['LogDeliveryStrategy'] = $request->logDeliveryStrategy;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserLogFieldConfig',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserLogFieldConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改用户日志服务的默认字段配置.
     *
     * @param request - ModifyUserLogFieldConfigRequest
     *
     * @returns ModifyUserLogFieldConfigResponse
     *
     * @param ModifyUserLogFieldConfigRequest $request
     *
     * @return ModifyUserLogFieldConfigResponse
     */
    public function modifyUserLogFieldConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserLogFieldConfigWithOptions($request, $runtime);
    }

    /**
     * 开通或关闭WAF日志服务
     *
     * @param request - ModifyUserWafLogStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserWafLogStatusResponse
     *
     * @param ModifyUserWafLogStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyUserWafLogStatusResponse
     */
    public function modifyUserWafLogStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logRegionId) {
            @$query['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStatus) {
            @$query['LogStatus'] = $request->logStatus;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserWafLogStatus',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserWafLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通或关闭WAF日志服务
     *
     * @param request - ModifyUserWafLogStatusRequest
     *
     * @returns ModifyUserWafLogStatusResponse
     *
     * @param ModifyUserWafLogStatusRequest $request
     *
     * @return ModifyUserWafLogStatusResponse
     */
    public function modifyUserWafLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserWafLogStatusWithOptions($request, $runtime);
    }

    /**
     * 重新接入云产品
     *
     * @param request - ReCreateCloudResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReCreateCloudResourceResponse
     *
     * @param ReCreateCloudResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReCreateCloudResourceResponse
     */
    public function reCreateCloudResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudResourceId) {
            @$query['CloudResourceId'] = $request->cloudResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInstanceId) {
            @$query['ResourceInstanceId'] = $request->resourceInstanceId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        if (null !== $request->resourceProduct) {
            @$query['ResourceProduct'] = $request->resourceProduct;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 重新接入云产品
     *
     * @param request - ReCreateCloudResourceRequest
     *
     * @returns ReCreateCloudResourceResponse
     *
     * @param ReCreateCloudResourceRequest $request
     *
     * @return ReCreateCloudResourceResponse
     */
    public function reCreateCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reCreateCloudResourceWithOptions($request, $runtime);
    }

    /**
     * Releases a Web Application Firewall (WAF) 3.0 instance.
     *
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Releases a Web Application Firewall (WAF) 3.0 instance.
     *
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
     * Synchronizes Elastic Compute Service (ECS), Classic Load Balancer (CLB), and Network Load Balancer (NLB) instances to Web Application Firewall (WAF).
     *
     * @remarks
     * SyncProductInstance is an asynchronous operation. You can call the [DescribeProductInstances](https://help.aliyun.com/document_detail/2743168.html) operation to query the status of the task.
     *
     * @param request - SyncProductInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncProductInstanceResponse
     *
     * @param SyncProductInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SyncProductInstanceResponse
     */
    public function syncProductInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceManagerResourceGroupId) {
            @$query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Synchronizes Elastic Compute Service (ECS), Classic Load Balancer (CLB), and Network Load Balancer (NLB) instances to Web Application Firewall (WAF).
     *
     * @remarks
     * SyncProductInstance is an asynchronous operation. You can call the [DescribeProductInstances](https://help.aliyun.com/document_detail/2743168.html) operation to query the status of the task.
     *
     * @param request - SyncProductInstanceRequest
     *
     * @returns SyncProductInstanceResponse
     *
     * @param SyncProductInstanceRequest $request
     *
     * @return SyncProductInstanceResponse
     */
    public function syncProductInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncProductInstanceWithOptions($request, $runtime);
    }

    /**
     * Adds tags to resources.
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
     * Adds tags to resources.
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
     * Removes tags from resources and then deletes the tags.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
     * Removes tags from resources and then deletes the tags.
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
     * Verifies the ownership of a domain name.
     *
     * @param request - VerifyDomainOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyDomainOwnerResponse
     *
     * @param VerifyDomainOwnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VerifyDomainOwnerResponse
     */
    public function verifyDomainOwnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyDomainOwner',
            'version' => '2021-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the ownership of a domain name.
     *
     * @param request - VerifyDomainOwnerRequest
     *
     * @returns VerifyDomainOwnerResponse
     *
     * @param VerifyDomainOwnerRequest $request
     *
     * @return VerifyDomainOwnerResponse
     */
    public function verifyDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyDomainOwnerWithOptions($request, $runtime);
    }
}
