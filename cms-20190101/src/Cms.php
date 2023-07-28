<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cms\V20190101\Models\AddTagsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\AddTagsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateInstantSiteMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateInstantSiteMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateIntantSiteMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateIntantSiteMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchExportRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchExportResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchExportShrinkRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateCmsCallNumOrderRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateCmsCallNumOrderResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateCmsOrderRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateCmsOrderResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateCmsSmspackageOrderRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateCmsSmspackageOrderResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorNamespaceRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorNamespaceResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorSLSGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorSLSGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateInstantSiteMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateInstantSiteMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleBlackListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleBlackListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleResourcesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleResourcesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupByResourceGroupIdRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupByResourceGroupIdResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupNotifyPolicyRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupNotifyPolicyResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CursorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CursorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CursorShrinkRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteContactGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteContactGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteContactRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteContactResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteCustomMetricRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteCustomMetricResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteDynamicTagGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteDynamicTagGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteEventRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteEventRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteEventRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteEventRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteExporterOutputRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteExporterOutputResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteExporterRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteExporterRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteGroupMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteGroupMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHybridMonitorNamespaceRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHybridMonitorNamespaceResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHybridMonitorSLSGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHybridMonitorSLSGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHybridMonitorTaskRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHybridMonitorTaskResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteLogMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteLogMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleBlackListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleBlackListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleResourcesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleResourcesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupDynamicRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupDynamicRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupNotifyPolicyRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupNotifyPolicyResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteSiteMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteSiteMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogCountRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogCountResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogHistogramRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogHistogramResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomMetricListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomMetricListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorSLSGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorSLSGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricDataRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricDataResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricLastRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricLastResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricMetaListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricMetaListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleBlackListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleBlackListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleCountRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleCountResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricTopRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricTopResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentAccessKeyRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentAccessKeyResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentConfigRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentConfigResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringConfigRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringConfigResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductResourceTagKeyListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductResourceTagKeyListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProjectMetaRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProjectMetaResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorDataRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorDataResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorLogRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorLogResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorStatisticsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorStatisticsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventMetaListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventMetaListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagKeyListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagKeyListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagValueListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagValueListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableActiveMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableActiveMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableEventRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableEventRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableSiteMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableSiteMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableActiveMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableActiveMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableEventRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableEventRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableMetricRuleBlackListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableMetricRuleBlackListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableSiteMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableSiteMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\InstallMonitoringAgentRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\InstallMonitoringAgentResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostInfoRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostInfoResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorNamespaceRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorNamespaceResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorSLSGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorSLSGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleBlackListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleBlackListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifySiteMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifySiteMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\OpenCmsServiceResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutExporterOutputRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutExporterOutputResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutExporterRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutExporterRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitoringConfigRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitoringConfigResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleShrinkRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\RemoveTagsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\RemoveTagsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\SendDryRunSystemEventRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\SendDryRunSystemEventResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\UninstallMonitoringAgentRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\UninstallMonitoringAgentResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param AddTagsRequest $request AddTagsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTagsResponse AddTagsResponse
     */
    public function addTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTags',
            'version'     => '2019-01-01',
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
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
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
     * The ID of the application group to which the alert template is applied.
     *   * For more information about how to query the ID of an application group, see [DescribeMonitorGroups](~~115032~~).
     *   *
     * @param ApplyMetricRuleTemplateRequest $request ApplyMetricRuleTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyMetricRuleTemplateResponse ApplyMetricRuleTemplateResponse
     */
    public function applyMetricRuleTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyMode)) {
            $query['ApplyMode'] = $request->applyMode;
        }
        if (!Utils::isUnset($request->enableEndTime)) {
            $query['EnableEndTime'] = $request->enableEndTime;
        }
        if (!Utils::isUnset($request->enableStartTime)) {
            $query['EnableStartTime'] = $request->enableStartTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->notifyLevel)) {
            $query['NotifyLevel'] = $request->notifyLevel;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        if (!Utils::isUnset($request->webhook)) {
            $query['Webhook'] = $request->webhook;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyMetricRuleTemplate',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyMetricRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the application group to which the alert template is applied.
     *   * For more information about how to query the ID of an application group, see [DescribeMonitorGroups](~~115032~~).
     *   *
     * @param ApplyMetricRuleTemplateRequest $request ApplyMetricRuleTemplateRequest
     *
     * @return ApplyMetricRuleTemplateResponse ApplyMetricRuleTemplateResponse
     */
    public function applyMetricRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * The extended options of the protocol that is used by the site monitoring task. The options vary based on the protocol.
     *   *
     * @param BatchCreateInstantSiteMonitorRequest $request BatchCreateInstantSiteMonitorRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreateInstantSiteMonitorResponse BatchCreateInstantSiteMonitorResponse
     */
    public function batchCreateInstantSiteMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskList)) {
            $query['TaskList'] = $request->taskList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateInstantSiteMonitor',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCreateInstantSiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The extended options of the protocol that is used by the site monitoring task. The options vary based on the protocol.
     *   *
     * @param BatchCreateInstantSiteMonitorRequest $request BatchCreateInstantSiteMonitorRequest
     *
     * @return BatchCreateInstantSiteMonitorResponse BatchCreateInstantSiteMonitorResponse
     */
    public function batchCreateInstantSiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateInstantSiteMonitorWithOptions($request, $runtime);
    }

    /**
     * @deprecated : BatchCreateIntantSiteMonitor is deprecated, please use Cms::2019-01-01::BatchCreateInstantSiteMonitor instead.
     *   *
     * Deprecated
     *
     * @param BatchCreateIntantSiteMonitorRequest $request BatchCreateIntantSiteMonitorRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreateIntantSiteMonitorResponse BatchCreateIntantSiteMonitorResponse
     */
    public function batchCreateIntantSiteMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskList)) {
            $query['TaskList'] = $request->taskList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateIntantSiteMonitor',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCreateIntantSiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : BatchCreateIntantSiteMonitor is deprecated, please use Cms::2019-01-01::BatchCreateInstantSiteMonitor instead.
     *   *
     * Deprecated
     *
     * @param BatchCreateIntantSiteMonitorRequest $request BatchCreateIntantSiteMonitorRequest
     *
     * @return BatchCreateIntantSiteMonitorResponse BatchCreateIntantSiteMonitorResponse
     */
    public function batchCreateIntantSiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateIntantSiteMonitorWithOptions($request, $runtime);
    }

    /**
     * @param BatchExportRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return BatchExportResponse
     */
    public function batchExportWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchExportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->measurements)) {
            $request->measurementsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->measurements, 'Measurements', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cursor)) {
            $body['Cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->length)) {
            $body['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->measurementsShrink)) {
            $body['Measurements'] = $request->measurementsShrink;
        }
        if (!Utils::isUnset($request->metric)) {
            $body['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchExport',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchExportRequest $request
     *
     * @return BatchExportResponse
     */
    public function batchExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchExportWithOptions($request, $runtime);
    }

    /**
     * @param CreateCmsCallNumOrderRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCmsCallNumOrderResponse
     */
    public function createCmsCallNumOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->phoneCount)) {
            $query['PhoneCount'] = $request->phoneCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCmsCallNumOrder',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCmsCallNumOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCmsCallNumOrderRequest $request
     *
     * @return CreateCmsCallNumOrderResponse
     */
    public function createCmsCallNumOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCmsCallNumOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateCmsOrderRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCmsOrderResponse
     */
    public function createCmsOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiCount)) {
            $query['ApiCount'] = $request->apiCount;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->customTimeSeries)) {
            $query['CustomTimeSeries'] = $request->customTimeSeries;
        }
        if (!Utils::isUnset($request->eventStoreNum)) {
            $query['EventStoreNum'] = $request->eventStoreNum;
        }
        if (!Utils::isUnset($request->eventStoreTime)) {
            $query['EventStoreTime'] = $request->eventStoreTime;
        }
        if (!Utils::isUnset($request->logMonitorStream)) {
            $query['LogMonitorStream'] = $request->logMonitorStream;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->phoneCount)) {
            $query['PhoneCount'] = $request->phoneCount;
        }
        if (!Utils::isUnset($request->siteEcsNum)) {
            $query['SiteEcsNum'] = $request->siteEcsNum;
        }
        if (!Utils::isUnset($request->siteOperatorNum)) {
            $query['SiteOperatorNum'] = $request->siteOperatorNum;
        }
        if (!Utils::isUnset($request->siteTaskNum)) {
            $query['SiteTaskNum'] = $request->siteTaskNum;
        }
        if (!Utils::isUnset($request->smsCount)) {
            $query['SmsCount'] = $request->smsCount;
        }
        if (!Utils::isUnset($request->suggestType)) {
            $query['SuggestType'] = $request->suggestType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCmsOrder',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCmsOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCmsOrderRequest $request
     *
     * @return CreateCmsOrderResponse
     */
    public function createCmsOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCmsOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateCmsSmspackageOrderRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCmsSmspackageOrderResponse
     */
    public function createCmsSmspackageOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->smsCount)) {
            $query['SmsCount'] = $request->smsCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCmsSmspackageOrder',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCmsSmspackageOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCmsSmspackageOrderRequest $request
     *
     * @return CreateCmsSmspackageOrderResponse
     */
    public function createCmsSmspackageOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCmsSmspackageOrderWithOptions($request, $runtime);
    }

    /**
     * Specifies whether the application group automatically subscribes to event notifications. If events whose severity level is critical or warning occur on resources in an application group, CloudMonitor sends alert notifications. Valid values:
     *   * *   true: The application group automatically subscribes to event notifications.
     *   * *   false (default value): The application group does not automatically subscribe to event notifications.
     *   *
     * @param CreateDynamicTagGroupRequest $request CreateDynamicTagGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDynamicTagGroupResponse CreateDynamicTagGroupResponse
     */
    public function createDynamicTagGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupList)) {
            $query['ContactGroupList'] = $request->contactGroupList;
        }
        if (!Utils::isUnset($request->enableInstallAgent)) {
            $query['EnableInstallAgent'] = $request->enableInstallAgent;
        }
        if (!Utils::isUnset($request->enableSubscribeEvent)) {
            $query['EnableSubscribeEvent'] = $request->enableSubscribeEvent;
        }
        if (!Utils::isUnset($request->matchExpress)) {
            $query['MatchExpress'] = $request->matchExpress;
        }
        if (!Utils::isUnset($request->matchExpressFilterRelation)) {
            $query['MatchExpressFilterRelation'] = $request->matchExpressFilterRelation;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        if (!Utils::isUnset($request->tagRegionId)) {
            $query['TagRegionId'] = $request->tagRegionId;
        }
        if (!Utils::isUnset($request->templateIdList)) {
            $query['TemplateIdList'] = $request->templateIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDynamicTagGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDynamicTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies whether the application group automatically subscribes to event notifications. If events whose severity level is critical or warning occur on resources in an application group, CloudMonitor sends alert notifications. Valid values:
     *   * *   true: The application group automatically subscribes to event notifications.
     *   * *   false (default value): The application group does not automatically subscribe to event notifications.
     *   *
     * @param CreateDynamicTagGroupRequest $request CreateDynamicTagGroupRequest
     *
     * @return CreateDynamicTagGroupResponse CreateDynamicTagGroupResponse
     */
    public function createDynamicTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDynamicTagGroupWithOptions($request, $runtime);
    }

    /**
     * The details of the alert rules.
     *   *
     * @param CreateGroupMetricRulesRequest $request CreateGroupMetricRulesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupMetricRulesResponse CreateGroupMetricRulesResponse
     */
    public function createGroupMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupMetricRules)) {
            $query['GroupMetricRules'] = $request->groupMetricRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupMetricRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The details of the alert rules.
     *   *
     * @param CreateGroupMetricRulesRequest $request CreateGroupMetricRulesRequest
     *
     * @return CreateGroupMetricRulesResponse CreateGroupMetricRulesResponse
     */
    public function createGroupMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateGroupMonitoringAgentProcessResponse
     */
    public function createGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertConfig)) {
            $query['AlertConfig'] = $request->alertConfig;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->matchExpress)) {
            $query['MatchExpress'] = $request->matchExpress;
        }
        if (!Utils::isUnset($request->matchExpressFilterRelation)) {
            $query['MatchExpressFilterRelation'] = $request->matchExpressFilterRelation;
        }
        if (!Utils::isUnset($request->processName)) {
            $query['ProcessName'] = $request->processName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupMonitoringAgentProcess',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupMonitoringAgentProcessRequest $request
     *
     * @return CreateGroupMonitoringAgentProcessResponse
     */
    public function createGroupMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * The ID of the resource for which alerts are triggered.
     *   *
     * @param CreateHostAvailabilityRequest $request CreateHostAvailabilityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHostAvailabilityResponse CreateHostAvailabilityResponse
     */
    public function createHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertConfigEscalationList)) {
            $query['AlertConfigEscalationList'] = $request->alertConfigEscalationList;
        }
        if (!Utils::isUnset($request->alertConfigTargetList)) {
            $query['AlertConfigTargetList'] = $request->alertConfigTargetList;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceList)) {
            $query['InstanceList'] = $request->instanceList;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskScope)) {
            $query['TaskScope'] = $request->taskScope;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->alertConfig)) {
            $query['AlertConfig'] = $request->alertConfig;
        }
        if (!Utils::isUnset($request->taskOption)) {
            $query['TaskOption'] = $request->taskOption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHostAvailability',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the resource for which alerts are triggered.
     *   *
     * @param CreateHostAvailabilityRequest $request CreateHostAvailabilityRequest
     *
     * @return CreateHostAvailabilityResponse CreateHostAvailabilityResponse
     */
    public function createHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param CreateHybridMonitorNamespaceRequest $request CreateHybridMonitorNamespaceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHybridMonitorNamespaceResponse CreateHybridMonitorNamespaceResponse
     */
    public function createHybridMonitorNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHybridMonitorNamespace',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHybridMonitorNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param CreateHybridMonitorNamespaceRequest $request CreateHybridMonitorNamespaceRequest
     *
     * @return CreateHybridMonitorNamespaceResponse CreateHybridMonitorNamespaceResponse
     */
    public function createHybridMonitorNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridMonitorNamespaceWithOptions($request, $runtime);
    }

    /**
     * The Log Service projects.
     *   * Valid values of N: 1 to 25.
     *   *
     * @param CreateHybridMonitorSLSGroupRequest $request CreateHybridMonitorSLSGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHybridMonitorSLSGroupResponse CreateHybridMonitorSLSGroupResponse
     */
    public function createHybridMonitorSLSGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SLSGroupConfig)) {
            $query['SLSGroupConfig'] = $request->SLSGroupConfig;
        }
        if (!Utils::isUnset($request->SLSGroupDescription)) {
            $query['SLSGroupDescription'] = $request->SLSGroupDescription;
        }
        if (!Utils::isUnset($request->SLSGroupName)) {
            $query['SLSGroupName'] = $request->SLSGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHybridMonitorSLSGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHybridMonitorSLSGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The Log Service projects.
     *   * Valid values of N: 1 to 25.
     *   *
     * @param CreateHybridMonitorSLSGroupRequest $request CreateHybridMonitorSLSGroupRequest
     *
     * @return CreateHybridMonitorSLSGroupResponse CreateHybridMonitorSLSGroupResponse
     */
    public function createHybridMonitorSLSGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridMonitorSLSGroupWithOptions($request, $runtime);
    }

    /**
     * The dimension based on which data is aggregated. This parameter is equivalent to the GROUP BY clause in SQL.
     *   *
     * @param CreateHybridMonitorTaskRequest $request CreateHybridMonitorTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHybridMonitorTaskResponse CreateHybridMonitorTaskResponse
     */
    public function createHybridMonitorTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachLabels)) {
            $query['AttachLabels'] = $request->attachLabels;
        }
        if (!Utils::isUnset($request->collectInterval)) {
            $query['CollectInterval'] = $request->collectInterval;
        }
        if (!Utils::isUnset($request->collectTargetType)) {
            $query['CollectTargetType'] = $request->collectTargetType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->SLSProcessConfig)) {
            $query['SLSProcessConfig'] = $request->SLSProcessConfig;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        if (!Utils::isUnset($request->targetUserIdList)) {
            $query['TargetUserIdList'] = $request->targetUserIdList;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->YARMConfig)) {
            $query['YARMConfig'] = $request->YARMConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHybridMonitorTask',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHybridMonitorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The dimension based on which data is aggregated. This parameter is equivalent to the GROUP BY clause in SQL.
     *   *
     * @param CreateHybridMonitorTaskRequest $request CreateHybridMonitorTaskRequest
     *
     * @return CreateHybridMonitorTaskResponse CreateHybridMonitorTaskResponse
     */
    public function createHybridMonitorTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridMonitorTaskWithOptions($request, $runtime);
    }

    /**
     * You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring. For more information, see [Billing of Network Analysis and Monitoring](~~341649~~).
     *   * This topic provides an example to show how to create an instant test task. The name of the task is `task1`. The tested address is `http://www.aliyun.com`. The test type is `HTTP`. The number of detection points is `1`.
     *   *
     * @param CreateInstantSiteMonitorRequest $request CreateInstantSiteMonitorRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstantSiteMonitorResponse CreateInstantSiteMonitorResponse
     */
    public function createInstantSiteMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->ispCities)) {
            $query['IspCities'] = $request->ispCities;
        }
        if (!Utils::isUnset($request->optionsJson)) {
            $query['OptionsJson'] = $request->optionsJson;
        }
        if (!Utils::isUnset($request->randomIspCity)) {
            $query['RandomIspCity'] = $request->randomIspCity;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstantSiteMonitor',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstantSiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring. For more information, see [Billing of Network Analysis and Monitoring](~~341649~~).
     *   * This topic provides an example to show how to create an instant test task. The name of the task is `task1`. The tested address is `http://www.aliyun.com`. The test type is `HTTP`. The number of detection points is `1`.
     *   *
     * @param CreateInstantSiteMonitorRequest $request CreateInstantSiteMonitorRequest
     *
     * @return CreateInstantSiteMonitorResponse CreateInstantSiteMonitorResponse
     */
    public function createInstantSiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstantSiteMonitorWithOptions($request, $runtime);
    }

    /**
     * The name of the metric.
     *   * Valid values of N: 1 to 10.
     *   *
     * @param CreateMetricRuleBlackListRequest $request CreateMetricRuleBlackListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMetricRuleBlackListResponse CreateMetricRuleBlackListResponse
     */
    public function createMetricRuleBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->enableEndTime)) {
            $query['EnableEndTime'] = $request->enableEndTime;
        }
        if (!Utils::isUnset($request->enableStartTime)) {
            $query['EnableStartTime'] = $request->enableStartTime;
        }
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->scopeType)) {
            $query['ScopeType'] = $request->scopeType;
        }
        if (!Utils::isUnset($request->scopeValue)) {
            $query['ScopeValue'] = $request->scopeValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMetricRuleBlackList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the metric.
     *   * Valid values of N: 1 to 10.
     *   *
     * @param CreateMetricRuleBlackListRequest $request CreateMetricRuleBlackListRequest
     *
     * @return CreateMetricRuleBlackListResponse CreateMetricRuleBlackListResponse
     */
    public function createMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * @param CreateMetricRuleResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMetricRuleResourcesResponse
     */
    public function createMetricRuleResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->overwrite)) {
            $query['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMetricRuleResources',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMetricRuleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMetricRuleResourcesRequest $request
     *
     * @return CreateMetricRuleResourcesResponse
     */
    public function createMetricRuleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @param CreateMetricRuleTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMetricRuleTemplateResponse
     */
    public function createMetricRuleTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertTemplates)) {
            $query['AlertTemplates'] = $request->alertTemplates;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMetricRuleTemplate',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMetricRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMetricRuleTemplateRequest $request
     *
     * @return CreateMetricRuleTemplateResponse
     */
    public function createMetricRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateMonitorAgentProcessRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMonitorAgentProcessResponse
     */
    public function createMonitorAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->processName)) {
            $query['ProcessName'] = $request->processName;
        }
        if (!Utils::isUnset($request->processUser)) {
            $query['ProcessUser'] = $request->processUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitorAgentProcess',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMonitorAgentProcessRequest $request
     *
     * @return CreateMonitorAgentProcessResponse
     */
    public function createMonitorAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorAgentProcessWithOptions($request, $runtime);
    }

    /**
     * The name of the application group.
     *   *
     * @param CreateMonitorGroupRequest $request CreateMonitorGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitorGroupResponse CreateMonitorGroupResponse
     */
    public function createMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroups)) {
            $query['ContactGroups'] = $request->contactGroups;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitorGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the application group.
     *   *
     * @param CreateMonitorGroupRequest $request CreateMonitorGroupRequest
     *
     * @return CreateMonitorGroupResponse CreateMonitorGroupResponse
     */
    public function createMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * The ID of the region where the resource group resides.
     *   * For information about how to obtain the ID of the region where a resource group resides, see [GetResourceGroup](~~158866~~).
     *   *
     * @param CreateMonitorGroupByResourceGroupIdRequest $request CreateMonitorGroupByResourceGroupIdRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitorGroupByResourceGroupIdResponse CreateMonitorGroupByResourceGroupIdResponse
     */
    public function createMonitorGroupByResourceGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupList)) {
            $query['ContactGroupList'] = $request->contactGroupList;
        }
        if (!Utils::isUnset($request->enableInstallAgent)) {
            $query['EnableInstallAgent'] = $request->enableInstallAgent;
        }
        if (!Utils::isUnset($request->enableSubscribeEvent)) {
            $query['EnableSubscribeEvent'] = $request->enableSubscribeEvent;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitorGroupByResourceGroupId',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorGroupByResourceGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the region where the resource group resides.
     *   * For information about how to obtain the ID of the region where a resource group resides, see [GetResourceGroup](~~158866~~).
     *   *
     * @param CreateMonitorGroupByResourceGroupIdRequest $request CreateMonitorGroupByResourceGroupIdRequest
     *
     * @return CreateMonitorGroupByResourceGroupIdResponse CreateMonitorGroupByResourceGroupIdResponse
     */
    public function createMonitorGroupByResourceGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupByResourceGroupIdWithOptions($request, $runtime);
    }

    /**
     * The abbreviation of the Alibaba Cloud service name.
     *   * To obtain the abbreviation of an Alibaba Cloud service name, call the [DescribeProjectMeta](~~114916~~) operation. The `metricCategory` tag in the `Labels` response parameter indicates the abbreviation of the Alibaba Cloud service name.
     *   *
     * @param CreateMonitorGroupInstancesRequest $request CreateMonitorGroupInstancesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitorGroupInstancesResponse CreateMonitorGroupInstancesResponse
     */
    public function createMonitorGroupInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitorGroupInstances',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The abbreviation of the Alibaba Cloud service name.
     *   * To obtain the abbreviation of an Alibaba Cloud service name, call the [DescribeProjectMeta](~~114916~~) operation. The `metricCategory` tag in the `Labels` response parameter indicates the abbreviation of the Alibaba Cloud service name.
     *   *
     * @param CreateMonitorGroupInstancesRequest $request CreateMonitorGroupInstancesRequest
     *
     * @return CreateMonitorGroupInstancesResponse CreateMonitorGroupInstancesResponse
     */
    public function createMonitorGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * The type of the policy. Valid value: PauseNotify.
     *   *
     * @param CreateMonitorGroupNotifyPolicyRequest $request CreateMonitorGroupNotifyPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitorGroupNotifyPolicyResponse CreateMonitorGroupNotifyPolicyResponse
     */
    public function createMonitorGroupNotifyPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitorGroupNotifyPolicy',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorGroupNotifyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of the policy. Valid value: PauseNotify.
     *   *
     * @param CreateMonitorGroupNotifyPolicyRequest $request CreateMonitorGroupNotifyPolicyRequest
     *
     * @return CreateMonitorGroupNotifyPolicyResponse CreateMonitorGroupNotifyPolicyResponse
     */
    public function createMonitorGroupNotifyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupNotifyPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateMonitoringAgentProcessResponse
     */
    public function createMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->processName)) {
            $query['ProcessName'] = $request->processName;
        }
        if (!Utils::isUnset($request->processUser)) {
            $query['ProcessUser'] = $request->processUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitoringAgentProcess',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMonitoringAgentProcessRequest $request
     *
     * @return CreateMonitoringAgentProcessResponse
     */
    public function createMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param CreateSiteMonitorRequest $request CreateSiteMonitorRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSiteMonitorResponse CreateSiteMonitorResponse
     */
    public function createSiteMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->alertIds)) {
            $query['AlertIds'] = $request->alertIds;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispCities)) {
            $query['IspCities'] = $request->ispCities;
        }
        if (!Utils::isUnset($request->optionsJson)) {
            $query['OptionsJson'] = $request->optionsJson;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSiteMonitor',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param CreateSiteMonitorRequest $request CreateSiteMonitorRequest
     *
     * @return CreateSiteMonitorResponse CreateSiteMonitorResponse
     */
    public function createSiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteMonitorWithOptions($request, $runtime);
    }

    /**
     * @param CursorRequest  $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return CursorResponse
     */
    public function cursorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CursorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->matchers)) {
            $request->matchersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->matchers, 'Matchers', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->matchersShrink)) {
            $body['Matchers'] = $request->matchersShrink;
        }
        if (!Utils::isUnset($request->metric)) {
            $body['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Cursor',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CursorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CursorRequest $request
     *
     * @return CursorResponse
     */
    public function cursor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cursorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteContactResponse
     */
    public function deleteContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContact',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactRequest $request
     *
     * @return DeleteContactResponse
     */
    public function deleteContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteContactGroupResponse
     */
    public function deleteContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContactGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactGroupRequest $request
     *
     * @return DeleteContactGroupResponse
     */
    public function deleteContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCustomMetricResponse
     */
    public function deleteCustomMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->md5)) {
            $query['Md5'] = $request->md5;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->UUID)) {
            $query['UUID'] = $request->UUID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomMetric',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomMetricRequest $request
     *
     * @return DeleteCustomMetricResponse
     */
    public function deleteCustomMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomMetricWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDynamicTagGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDynamicTagGroupResponse
     */
    public function deleteDynamicTagGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dynamicTagRuleId)) {
            $query['DynamicTagRuleId'] = $request->dynamicTagRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDynamicTagGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDynamicTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDynamicTagGroupRequest $request
     *
     * @return DeleteDynamicTagGroupResponse
     */
    public function deleteDynamicTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDynamicTagGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventRuleTargetsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteEventRuleTargetsResponse
     */
    public function deleteEventRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventRuleTargets',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEventRuleTargetsRequest $request
     *
     * @return DeleteEventRuleTargetsResponse
     */
    public function deleteEventRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteEventRulesResponse
     */
    public function deleteEventRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleNames)) {
            $query['RuleNames'] = $request->ruleNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEventRulesRequest $request
     *
     * @return DeleteEventRulesResponse
     */
    public function deleteEventRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteExporterOutputRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteExporterOutputResponse
     */
    public function deleteExporterOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destName)) {
            $query['DestName'] = $request->destName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExporterOutput',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExporterOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteExporterOutputRequest $request
     *
     * @return DeleteExporterOutputResponse
     */
    public function deleteExporterOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExporterOutputWithOptions($request, $runtime);
    }

    /**
     * @param DeleteExporterRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteExporterRuleResponse
     */
    public function deleteExporterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExporterRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExporterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteExporterRuleRequest $request
     *
     * @return DeleteExporterRuleResponse
     */
    public function deleteExporterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExporterRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteGroupMonitoringAgentProcessResponse
     */
    public function deleteGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupMonitoringAgentProcess',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupMonitoringAgentProcessRequest $request
     *
     * @return DeleteGroupMonitoringAgentProcessResponse
     */
    public function deleteGroupMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHostAvailabilityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteHostAvailabilityResponse
     */
    public function deleteHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHostAvailability',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHostAvailabilityRequest $request
     *
     * @return DeleteHostAvailabilityResponse
     */
    public function deleteHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param DeleteHybridMonitorNamespaceRequest $request DeleteHybridMonitorNamespaceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHybridMonitorNamespaceResponse DeleteHybridMonitorNamespaceResponse
     */
    public function deleteHybridMonitorNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHybridMonitorNamespace',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHybridMonitorNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param DeleteHybridMonitorNamespaceRequest $request DeleteHybridMonitorNamespaceRequest
     *
     * @return DeleteHybridMonitorNamespaceResponse DeleteHybridMonitorNamespaceResponse
     */
    public function deleteHybridMonitorNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridMonitorNamespaceWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call is successful. Valid values:
     *   * *   true: The call is successful.
     *   * *   false: The call fails.
     *   *
     * @param DeleteHybridMonitorSLSGroupRequest $request DeleteHybridMonitorSLSGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHybridMonitorSLSGroupResponse DeleteHybridMonitorSLSGroupResponse
     */
    public function deleteHybridMonitorSLSGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SLSGroupName)) {
            $query['SLSGroupName'] = $request->SLSGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHybridMonitorSLSGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHybridMonitorSLSGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call is successful. Valid values:
     *   * *   true: The call is successful.
     *   * *   false: The call fails.
     *   *
     * @param DeleteHybridMonitorSLSGroupRequest $request DeleteHybridMonitorSLSGroupRequest
     *
     * @return DeleteHybridMonitorSLSGroupResponse DeleteHybridMonitorSLSGroupResponse
     */
    public function deleteHybridMonitorSLSGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridMonitorSLSGroupWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param DeleteHybridMonitorTaskRequest $request DeleteHybridMonitorTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHybridMonitorTaskResponse DeleteHybridMonitorTaskResponse
     */
    public function deleteHybridMonitorTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHybridMonitorTask',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHybridMonitorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param DeleteHybridMonitorTaskRequest $request DeleteHybridMonitorTaskRequest
     *
     * @return DeleteHybridMonitorTaskResponse DeleteHybridMonitorTaskResponse
     */
    public function deleteHybridMonitorTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridMonitorTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLogMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLogMonitorResponse
     */
    public function deleteLogMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logId)) {
            $query['LogId'] = $request->logId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLogMonitor',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLogMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLogMonitorRequest $request
     *
     * @return DeleteLogMonitorResponse
     */
    public function deleteLogMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMetricRuleBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMetricRuleBlackListResponse
     */
    public function deleteMetricRuleBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMetricRuleBlackList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMetricRuleBlackListRequest $request
     *
     * @return DeleteMetricRuleBlackListResponse
     */
    public function deleteMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMetricRuleResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMetricRuleResourcesResponse
     */
    public function deleteMetricRuleResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMetricRuleResources',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMetricRuleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMetricRuleResourcesRequest $request
     *
     * @return DeleteMetricRuleResourcesResponse
     */
    public function deleteMetricRuleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMetricRuleTargetsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->targetIds)) {
            $query['TargetIds'] = $request->targetIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMetricRuleTargets',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMetricRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMetricRuleTargetsRequest $request
     *
     * @return DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMetricRuleTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteMetricRuleTemplateResponse
     */
    public function deleteMetricRuleTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMetricRuleTemplate',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMetricRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMetricRuleTemplateRequest $request
     *
     * @return DeleteMetricRuleTemplateResponse
     */
    public function deleteMetricRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMetricRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMetricRulesResponse
     */
    public function deleteMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMetricRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMetricRulesRequest $request
     *
     * @return DeleteMetricRulesResponse
     */
    public function deleteMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMonitorGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMonitorGroupRequest $request
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMonitorGroupDynamicRuleRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteMonitorGroupDynamicRuleResponse
     */
    public function deleteMonitorGroupDynamicRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMonitorGroupDynamicRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMonitorGroupDynamicRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMonitorGroupDynamicRuleRequest $request
     *
     * @return DeleteMonitorGroupDynamicRuleResponse
     */
    public function deleteMonitorGroupDynamicRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupDynamicRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMonitorGroupInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteMonitorGroupInstancesResponse
     */
    public function deleteMonitorGroupInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMonitorGroupInstances',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMonitorGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMonitorGroupInstancesRequest $request
     *
     * @return DeleteMonitorGroupInstancesResponse
     */
    public function deleteMonitorGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMonitorGroupNotifyPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteMonitorGroupNotifyPolicyResponse
     */
    public function deleteMonitorGroupNotifyPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMonitorGroupNotifyPolicy',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMonitorGroupNotifyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMonitorGroupNotifyPolicyRequest $request
     *
     * @return DeleteMonitorGroupNotifyPolicyResponse
     */
    public function deleteMonitorGroupNotifyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupNotifyPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteMonitoringAgentProcessResponse
     */
    public function deleteMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->processId)) {
            $query['ProcessId'] = $request->processId;
        }
        if (!Utils::isUnset($request->processName)) {
            $query['ProcessName'] = $request->processName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMonitoringAgentProcess',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMonitoringAgentProcessRequest $request
     *
     * @return DeleteMonitoringAgentProcessResponse
     */
    public function deleteMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSiteMonitorsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSiteMonitorsResponse
     */
    public function deleteSiteMonitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isDeleteAlarms)) {
            $query['IsDeleteAlarms'] = $request->isDeleteAlarms;
        }
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSiteMonitors',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSiteMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSiteMonitorsRequest $request
     *
     * @return DeleteSiteMonitorsResponse
     */
    public function deleteSiteMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeActiveMetricRuleListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeActiveMetricRuleListResponse
     */
    public function describeActiveMetricRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveMetricRuleList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveMetricRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeActiveMetricRuleListRequest $request
     *
     * @return DescribeActiveMetricRuleListResponse
     */
    public function describeActiveMetricRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveMetricRuleListWithOptions($request, $runtime);
    }

    /**
     * @deprecated : DescribeAlertHistoryList is deprecated, please use Cms::2019-01-01::DescribeAlertLogList instead.
     *   * This API operation is no longer maintained. We recommend that you call the [DescribeAlertLogList](~~201087~~) operation.
     *   *
     * Deprecated
     *
     * @param DescribeAlertHistoryListRequest $request DescribeAlertHistoryListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertHistoryListResponse DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ascending)) {
            $query['Ascending'] = $request->ascending;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertHistoryList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : DescribeAlertHistoryList is deprecated, please use Cms::2019-01-01::DescribeAlertLogList instead.
     *   * This API operation is no longer maintained. We recommend that you call the [DescribeAlertLogList](~~201087~~) operation.
     *   *
     * Deprecated
     *
     * @param DescribeAlertHistoryListRequest $request DescribeAlertHistoryListRequest
     *
     * @return DescribeAlertHistoryListResponse DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertHistoryListWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example to show how to query the statistics of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *   *
     * @param DescribeAlertLogCountRequest $request DescribeAlertLogCountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertLogCountResponse DescribeAlertLogCountResponse
     */
    public function describeAlertLogCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroup)) {
            $query['ContactGroup'] = $request->contactGroup;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupBy)) {
            $query['GroupBy'] = $request->groupBy;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lastMin)) {
            $query['LastMin'] = $request->lastMin;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->sendStatus)) {
            $query['SendStatus'] = $request->sendStatus;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertLogCount',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertLogCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example to show how to query the statistics of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *   *
     * @param DescribeAlertLogCountRequest $request DescribeAlertLogCountRequest
     *
     * @return DescribeAlertLogCountResponse DescribeAlertLogCountResponse
     */
    public function describeAlertLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertLogCountWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to DescribeAlertLogHistogram.
     *   *
     * @param DescribeAlertLogHistogramRequest $request DescribeAlertLogHistogramRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertLogHistogramResponse DescribeAlertLogHistogramResponse
     */
    public function describeAlertLogHistogramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroup)) {
            $query['ContactGroup'] = $request->contactGroup;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupBy)) {
            $query['GroupBy'] = $request->groupBy;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lastMin)) {
            $query['LastMin'] = $request->lastMin;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->sendStatus)) {
            $query['SendStatus'] = $request->sendStatus;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertLogHistogram',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertLogHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to DescribeAlertLogHistogram.
     *   *
     * @param DescribeAlertLogHistogramRequest $request DescribeAlertLogHistogramRequest
     *
     * @return DescribeAlertLogHistogramResponse DescribeAlertLogHistogramResponse
     */
    public function describeAlertLogHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertLogHistogramWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param DescribeAlertLogListRequest $request DescribeAlertLogListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertLogListResponse DescribeAlertLogListResponse
     */
    public function describeAlertLogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroup)) {
            $query['ContactGroup'] = $request->contactGroup;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupBy)) {
            $query['GroupBy'] = $request->groupBy;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lastMin)) {
            $query['LastMin'] = $request->lastMin;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->sendStatus)) {
            $query['SendStatus'] = $request->sendStatus;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertLogList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param DescribeAlertLogListRequest $request DescribeAlertLogListRequest
     *
     * @return DescribeAlertLogListResponse DescribeAlertLogListResponse
     */
    public function describeAlertLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertLogListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertingMetricRuleResourcesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAlertingMetricRuleResourcesResponse
     */
    public function describeAlertingMetricRuleResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertingMetricRuleResources',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertingMetricRuleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertingMetricRuleResourcesRequest $request
     *
     * @return DescribeAlertingMetricRuleResourcesResponse
     */
    public function describeAlertingMetricRuleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertingMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContactGroupListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeContactGroupListResponse
     */
    public function describeContactGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeContactGroupList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContactGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContactGroupListRequest $request
     *
     * @return DescribeContactGroupListResponse
     */
    public function describeContactGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactGroupListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContactListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeContactListResponse
     */
    public function describeContactListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chanelType)) {
            $query['ChanelType'] = $request->chanelType;
        }
        if (!Utils::isUnset($request->chanelValue)) {
            $query['ChanelValue'] = $request->chanelValue;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
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
            'action'      => 'DescribeContactList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContactListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContactListRequest $request
     *
     * @return DescribeContactListResponse
     */
    public function describeContactList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContactListByContactGroupRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeContactListByContactGroupResponse
     */
    public function describeContactListByContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContactListByContactGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContactListByContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContactListByContactGroupRequest $request
     *
     * @return DescribeContactListByContactGroupResponse
     */
    public function describeContactListByContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactListByContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomEventAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCustomEventAttributeResponse
     */
    public function describeCustomEventAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKeywords)) {
            $query['SearchKeywords'] = $request->searchKeywords;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomEventAttribute',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomEventAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomEventAttributeRequest $request
     *
     * @return DescribeCustomEventAttributeResponse
     */
    public function describeCustomEventAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventAttributeWithOptions($request, $runtime);
    }

    /**
     * The name of the custom event.
     *   *
     * @param DescribeCustomEventCountRequest $request DescribeCustomEventCountRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomEventCountResponse DescribeCustomEventCountResponse
     */
    public function describeCustomEventCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->searchKeywords)) {
            $query['SearchKeywords'] = $request->searchKeywords;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomEventCount',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomEventCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the custom event.
     *   *
     * @param DescribeCustomEventCountRequest $request DescribeCustomEventCountRequest
     *
     * @return DescribeCustomEventCountResponse DescribeCustomEventCountResponse
     */
    public function describeCustomEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomEventHistogramRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCustomEventHistogramResponse
     */
    public function describeCustomEventHistogramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->searchKeywords)) {
            $query['SearchKeywords'] = $request->searchKeywords;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomEventHistogram',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomEventHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomEventHistogramRequest $request
     *
     * @return DescribeCustomEventHistogramResponse
     */
    public function describeCustomEventHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventHistogramWithOptions($request, $runtime);
    }

    /**
     * The ID of the application group.
     *   * For more information, see [DescribeMonitorGroups](~~115032~~).
     *   *
     * @param DescribeCustomMetricListRequest $request DescribeCustomMetricListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomMetricListResponse DescribeCustomMetricListResponse
     */
    public function describeCustomMetricListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dimension)) {
            $query['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->md5)) {
            $query['Md5'] = $request->md5;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
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
            'action'      => 'DescribeCustomMetricList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the application group.
     *   * For more information, see [DescribeMonitorGroups](~~115032~~).
     *   *
     * @param DescribeCustomMetricListRequest $request DescribeCustomMetricListRequest
     *
     * @return DescribeCustomMetricListResponse DescribeCustomMetricListResponse
     */
    public function describeCustomMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomMetricListWithOptions($request, $runtime);
    }

    /**
     * The HTTP status code.
     *   * >  The status code 200 indicates that the call was successful.
     *   *
     * @param DescribeDynamicTagRuleListRequest $request DescribeDynamicTagRuleListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDynamicTagRuleListResponse DescribeDynamicTagRuleListResponse
     */
    public function describeDynamicTagRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dynamicTagRuleId)) {
            $query['DynamicTagRuleId'] = $request->dynamicTagRuleId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        if (!Utils::isUnset($request->tagRegionId)) {
            $query['TagRegionId'] = $request->tagRegionId;
        }
        if (!Utils::isUnset($request->tagValue)) {
            $query['TagValue'] = $request->tagValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDynamicTagRuleList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDynamicTagRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The HTTP status code.
     *   * >  The status code 200 indicates that the call was successful.
     *   *
     * @param DescribeDynamicTagRuleListRequest $request DescribeDynamicTagRuleListRequest
     *
     * @return DescribeDynamicTagRuleListResponse DescribeDynamicTagRuleListResponse
     */
    public function describeDynamicTagRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDynamicTagRuleListWithOptions($request, $runtime);
    }

    /**
     * The name of the event-triggered alert rule.
     *   * For information about how to obtain the name of an event-triggered alert rule, see [DescribeEventRuleList](~~114996~~).
     *   *
     * @param DescribeEventRuleAttributeRequest $request DescribeEventRuleAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventRuleAttributeResponse DescribeEventRuleAttributeResponse
     */
    public function describeEventRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventRuleAttribute',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the event-triggered alert rule.
     *   * For information about how to obtain the name of an event-triggered alert rule, see [DescribeEventRuleList](~~114996~~).
     *   *
     * @param DescribeEventRuleAttributeRequest $request DescribeEventRuleAttributeRequest
     *
     * @return DescribeEventRuleAttributeResponse DescribeEventRuleAttributeResponse
     */
    public function describeEventRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventRuleListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEventRuleListResponse
     */
    public function describeEventRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namePrefix)) {
            $query['NamePrefix'] = $request->namePrefix;
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
            'action'      => 'DescribeEventRuleList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventRuleListRequest $request
     *
     * @return DescribeEventRuleListResponse
     */
    public function describeEventRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleListWithOptions($request, $runtime);
    }

    /**
     * The error message.
     *   *
     * @param DescribeEventRuleTargetListRequest $request DescribeEventRuleTargetListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventRuleTargetListResponse DescribeEventRuleTargetListResponse
     */
    public function describeEventRuleTargetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventRuleTargetList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventRuleTargetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The error message.
     *   *
     * @param DescribeEventRuleTargetListRequest $request DescribeEventRuleTargetListRequest
     *
     * @return DescribeEventRuleTargetListResponse DescribeEventRuleTargetListResponse
     */
    public function describeEventRuleTargetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleTargetListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExporterOutputListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeExporterOutputListResponse
     */
    public function describeExporterOutputListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeExporterOutputList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExporterOutputListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExporterOutputListRequest $request
     *
     * @return DescribeExporterOutputListResponse
     */
    public function describeExporterOutputList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExporterOutputListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExporterRuleListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeExporterRuleListResponse
     */
    public function describeExporterRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeExporterRuleList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExporterRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExporterRuleListRequest $request
     *
     * @return DescribeExporterRuleListResponse
     */
    public function describeExporterRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExporterRuleListWithOptions($request, $runtime);
    }

    /**
     * The ID of the application group.
     *   *
     * @param DescribeGroupMonitoringAgentProcessRequest $request DescribeGroupMonitoringAgentProcessRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupMonitoringAgentProcessResponse DescribeGroupMonitoringAgentProcessResponse
     */
    public function describeGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processName)) {
            $query['ProcessName'] = $request->processName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupMonitoringAgentProcess',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the application group.
     *   *
     * @param DescribeGroupMonitoringAgentProcessRequest $request DescribeGroupMonitoringAgentProcessRequest
     *
     * @return DescribeGroupMonitoringAgentProcessResponse DescribeGroupMonitoringAgentProcessResponse
     */
    public function describeGroupMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * The ID of the availability monitoring task.
     *   *
     * @param DescribeHostAvailabilityListRequest $request DescribeHostAvailabilityListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHostAvailabilityListResponse DescribeHostAvailabilityListResponse
     */
    public function describeHostAvailabilityListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHostAvailabilityList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHostAvailabilityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the availability monitoring task.
     *   *
     * @param DescribeHostAvailabilityListRequest $request DescribeHostAvailabilityListRequest
     *
     * @return DescribeHostAvailabilityListResponse DescribeHostAvailabilityListResponse
     */
    public function describeHostAvailabilityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostAvailabilityListWithOptions($request, $runtime);
    }

    /**
     * The tag key.
     *   *
     * @param DescribeHybridMonitorDataListRequest $request DescribeHybridMonitorDataListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridMonitorDataListResponse DescribeHybridMonitorDataListResponse
     */
    public function describeHybridMonitorDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->promSQL)) {
            $query['PromSQL'] = $request->promSQL;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridMonitorDataList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridMonitorDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The tag key.
     *   *
     * @param DescribeHybridMonitorDataListRequest $request DescribeHybridMonitorDataListRequest
     *
     * @return DescribeHybridMonitorDataListResponse DescribeHybridMonitorDataListResponse
     */
    public function describeHybridMonitorDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridMonitorDataListWithOptions($request, $runtime);
    }

    /**
     * The data retention period. Valid values:
     *   * *   cms.s1.large: Data is stored for 15 days.
     *   * *   cms.s1.xlarge: Data is stored for 32 days.
     *   * *   cms.s1.2xlarge: Data is stored for 63 days.
     *   * *   cms.s1.3xlarge: Data is stored for 93 days.
     *   * *   cms.s1.6xlarge: Data is stored for 185 days.
     *   * *   cms.s1.12xlarge: Data is stored for 376 days.
     *   *
     * @param DescribeHybridMonitorNamespaceListRequest $request DescribeHybridMonitorNamespaceListRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridMonitorNamespaceListResponse DescribeHybridMonitorNamespaceListResponse
     */
    public function describeHybridMonitorNamespaceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->showTaskStatistic)) {
            $query['ShowTaskStatistic'] = $request->showTaskStatistic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridMonitorNamespaceList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridMonitorNamespaceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The data retention period. Valid values:
     *   * *   cms.s1.large: Data is stored for 15 days.
     *   * *   cms.s1.xlarge: Data is stored for 32 days.
     *   * *   cms.s1.2xlarge: Data is stored for 63 days.
     *   * *   cms.s1.3xlarge: Data is stored for 93 days.
     *   * *   cms.s1.6xlarge: Data is stored for 185 days.
     *   * *   cms.s1.12xlarge: Data is stored for 376 days.
     *   *
     * @param DescribeHybridMonitorNamespaceListRequest $request DescribeHybridMonitorNamespaceListRequest
     *
     * @return DescribeHybridMonitorNamespaceListResponse DescribeHybridMonitorNamespaceListResponse
     */
    public function describeHybridMonitorNamespaceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridMonitorNamespaceListWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call is successful. Valid values:
     *   * *   true: The call is successful.
     *   * *   false: The call fails.
     *   *
     * @param DescribeHybridMonitorSLSGroupRequest $request DescribeHybridMonitorSLSGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridMonitorSLSGroupResponse DescribeHybridMonitorSLSGroupResponse
     */
    public function describeHybridMonitorSLSGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SLSGroupName)) {
            $query['SLSGroupName'] = $request->SLSGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridMonitorSLSGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridMonitorSLSGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call is successful. Valid values:
     *   * *   true: The call is successful.
     *   * *   false: The call fails.
     *   *
     * @param DescribeHybridMonitorSLSGroupRequest $request DescribeHybridMonitorSLSGroupRequest
     *
     * @return DescribeHybridMonitorSLSGroupResponse DescribeHybridMonitorSLSGroupResponse
     */
    public function describeHybridMonitorSLSGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridMonitorSLSGroupWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param DescribeHybridMonitorTaskListRequest $request DescribeHybridMonitorTaskListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHybridMonitorTaskListResponse DescribeHybridMonitorTaskListResponse
     */
    public function describeHybridMonitorTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->includeAliyunTask)) {
            $query['IncludeAliyunTask'] = $request->includeAliyunTask;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridMonitorTaskList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridMonitorTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param DescribeHybridMonitorTaskListRequest $request DescribeHybridMonitorTaskListRequest
     *
     * @return DescribeHybridMonitorTaskListResponse DescribeHybridMonitorTaskListResponse
     */
    public function describeHybridMonitorTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridMonitorTaskListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogMonitorAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLogMonitorAttributeResponse
     */
    public function describeLogMonitorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogMonitorAttribute',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogMonitorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogMonitorAttributeRequest $request
     *
     * @return DescribeLogMonitorAttributeResponse
     */
    public function describeLogMonitorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogMonitorAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogMonitorListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeLogMonitorListResponse
     */
    public function describeLogMonitorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogMonitorList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogMonitorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogMonitorListRequest $request
     *
     * @return DescribeLogMonitorListResponse
     */
    public function describeLogMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogMonitorListWithOptions($request, $runtime);
    }

    /**
     * The statistical period of the metric.
     *   * Valid values: 15, 60, 900, and 3600.
     *   * Unit: seconds.
     *   * >
     *   * *   If this parameter is not specified, monitoring data is queried based on the period in which metric values are reported.
     *   * *   For more information about the statistical period of a metric that is specified by the `MetricName` parameter, see [Appendix 1: Metrics](~~163515~~).
     *   *
     * @param DescribeMetricDataRequest $request DescribeMetricDataRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricDataResponse DescribeMetricDataResponse
     */
    public function describeMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->express)) {
            $query['Express'] = $request->express;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricData',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The statistical period of the metric.
     *   * Valid values: 15, 60, 900, and 3600.
     *   * Unit: seconds.
     *   * >
     *   * *   If this parameter is not specified, monitoring data is queried based on the period in which metric values are reported.
     *   * *   For more information about the statistical period of a metric that is specified by the `MetricName` parameter, see [Appendix 1: Metrics](~~163515~~).
     *   *
     * @param DescribeMetricDataRequest $request DescribeMetricDataRequest
     *
     * @return DescribeMetricDataResponse DescribeMetricDataResponse
     */
    public function describeMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricDataWithOptions($request, $runtime);
    }

    /**
     * The number of entries to return on each page.
     *   * Default value: 1000. This value indicates that a maximum of 1,000 entries of monitoring data can be returned on each page.
     *   * >  The maximum value of the Length parameter in a request is 1440.
     *   *
     * @param DescribeMetricLastRequest $request DescribeMetricLastRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricLastResponse DescribeMetricLastResponse
     */
    public function describeMetricLastWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->express)) {
            $query['Express'] = $request->express;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricLast',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricLastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of entries to return on each page.
     *   * Default value: 1000. This value indicates that a maximum of 1,000 entries of monitoring data can be returned on each page.
     *   * >  The maximum value of the Length parameter in a request is 1440.
     *   *
     * @param DescribeMetricLastRequest $request DescribeMetricLastRequest
     *
     * @return DescribeMetricLastResponse DescribeMetricLastResponse
     */
    public function describeMetricLast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricLastWithOptions($request, $runtime);
    }

    /**
     * The name of the metric.
     *   * For more information about metric names, see [Appendix 1: Metrics](~~163515~~).
     *   *
     * @param DescribeMetricListRequest $request DescribeMetricListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricListResponse DescribeMetricListResponse
     */
    public function describeMetricListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->express)) {
            $query['Express'] = $request->express;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the metric.
     *   * For more information about metric names, see [Appendix 1: Metrics](~~163515~~).
     *   *
     * @param DescribeMetricListRequest $request DescribeMetricListRequest
     *
     * @return DescribeMetricListResponse DescribeMetricListResponse
     */
    public function describeMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricListWithOptions($request, $runtime);
    }

    /**
     * The namespace of the service.
     *   * For more information, see [Appendix 1: Metrics](~~163515~~).
     *   *
     * @param DescribeMetricMetaListRequest $request DescribeMetricMetaListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricMetaListResponse DescribeMetricMetaListResponse
     */
    public function describeMetricMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
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
            'action'      => 'DescribeMetricMetaList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The namespace of the service.
     *   * For more information, see [Appendix 1: Metrics](~~163515~~).
     *   *
     * @param DescribeMetricMetaListRequest $request DescribeMetricMetaListRequest
     *
     * @return DescribeMetricMetaListResponse DescribeMetricMetaListResponse
     */
    public function describeMetricMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricMetaListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMetricRuleBlackListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMetricRuleBlackListResponse
     */
    public function describeMetricRuleBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->isEnable)) {
            $query['IsEnable'] = $request->isEnable;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scopeType)) {
            $query['ScopeType'] = $request->scopeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricRuleBlackList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMetricRuleBlackListRequest $request
     *
     * @return DescribeMetricRuleBlackListResponse
     */
    public function describeMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMetricRuleCountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMetricRuleCountResponse
     */
    public function describeMetricRuleCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricRuleCount',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricRuleCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMetricRuleCountRequest $request
     *
     * @return DescribeMetricRuleCountResponse
     */
    public function describeMetricRuleCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleCountWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query all alert rules within your Alibaba Cloud account. The returned result shows that only one alert rule is found. The name of the alert rule is `Rule_01` and the ID is `applyTemplate344cfd42-0f32-4fd6-805a-88d7908a****`.
     *   *
     * @param DescribeMetricRuleListRequest $request DescribeMetricRuleListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricRuleListResponse DescribeMetricRuleListResponse
     */
    public function describeMetricRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertState)) {
            $query['AlertState'] = $request->alertState;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->enableState)) {
            $query['EnableState'] = $request->enableState;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleIds)) {
            $query['RuleIds'] = $request->ruleIds;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricRuleList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query all alert rules within your Alibaba Cloud account. The returned result shows that only one alert rule is found. The name of the alert rule is `Rule_01` and the ID is `applyTemplate344cfd42-0f32-4fd6-805a-88d7908a****`.
     *   *
     * @param DescribeMetricRuleListRequest $request DescribeMetricRuleListRequest
     *
     * @return DescribeMetricRuleListResponse DescribeMetricRuleListResponse
     */
    public function describeMetricRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleListWithOptions($request, $runtime);
    }

    /**
     * The parameters of the alert callback. The parameters are in the JSON format.
     *   *
     * @param DescribeMetricRuleTargetsRequest $request DescribeMetricRuleTargetsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricRuleTargetsResponse DescribeMetricRuleTargetsResponse
     */
    public function describeMetricRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricRuleTargets',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The parameters of the alert callback. The parameters are in the JSON format.
     *   *
     * @param DescribeMetricRuleTargetsRequest $request DescribeMetricRuleTargetsRequest
     *
     * @return DescribeMetricRuleTargetsResponse DescribeMetricRuleTargetsResponse
     */
    public function describeMetricRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to DescribeMetricRuleTemplateAttribute.
     *   *
     * @param DescribeMetricRuleTemplateAttributeRequest $request DescribeMetricRuleTemplateAttributeRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricRuleTemplateAttributeResponse DescribeMetricRuleTemplateAttributeResponse
     */
    public function describeMetricRuleTemplateAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricRuleTemplateAttribute',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricRuleTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to DescribeMetricRuleTemplateAttribute.
     *   *
     * @param DescribeMetricRuleTemplateAttributeRequest $request DescribeMetricRuleTemplateAttributeRequest
     *
     * @return DescribeMetricRuleTemplateAttributeResponse DescribeMetricRuleTemplateAttributeResponse
     */
    public function describeMetricRuleTemplateAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTemplateAttributeWithOptions($request, $runtime);
    }

    /**
     * The HTTP status code.
     *   * >  The status code 200 indicates that the call was successful.
     *   *
     * @param DescribeMetricRuleTemplateListRequest $request DescribeMetricRuleTemplateListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricRuleTemplateListResponse DescribeMetricRuleTemplateListResponse
     */
    public function describeMetricRuleTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->history)) {
            $query['History'] = $request->history;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricRuleTemplateList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricRuleTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The HTTP status code.
     *   * >  The status code 200 indicates that the call was successful.
     *   *
     * @param DescribeMetricRuleTemplateListRequest $request DescribeMetricRuleTemplateListRequest
     *
     * @return DescribeMetricRuleTemplateListResponse DescribeMetricRuleTemplateListResponse
     */
    public function describeMetricRuleTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTemplateListWithOptions($request, $runtime);
    }

    /**
     * The order in which data is sorted. Valid values:
     *   * *   True: sorts data in ascending order.
     *   * *   False (default value): sorts data in descending order.
     *   *
     * @param DescribeMetricTopRequest $request DescribeMetricTopRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricTopResponse DescribeMetricTopResponse
     */
    public function describeMetricTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->express)) {
            $query['Express'] = $request->express;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->orderDesc)) {
            $query['OrderDesc'] = $request->orderDesc;
        }
        if (!Utils::isUnset($request->orderby)) {
            $query['Orderby'] = $request->orderby;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricTop',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The order in which data is sorted. Valid values:
     *   * *   True: sorts data in ascending order.
     *   * *   False (default value): sorts data in descending order.
     *   *
     * @param DescribeMetricTopRequest $request DescribeMetricTopRequest
     *
     * @return DescribeMetricTopResponse DescribeMetricTopResponse
     */
    public function describeMetricTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricTopWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitorGroupCategoriesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMonitorGroupCategoriesResponse
     */
    public function describeMonitorGroupCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorGroupCategories',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorGroupCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitorGroupCategoriesRequest $request
     *
     * @return DescribeMonitorGroupCategoriesResponse
     */
    public function describeMonitorGroupCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitorGroupDynamicRulesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeMonitorGroupDynamicRulesResponse
     */
    public function describeMonitorGroupDynamicRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorGroupDynamicRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorGroupDynamicRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitorGroupDynamicRulesRequest $request
     *
     * @return DescribeMonitorGroupDynamicRulesResponse
     */
    public function describeMonitorGroupDynamicRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupDynamicRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitorGroupInstanceAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeMonitorGroupInstanceAttributeResponse
     */
    public function describeMonitorGroupInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->total)) {
            $query['Total'] = $request->total;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorGroupInstanceAttribute',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorGroupInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitorGroupInstanceAttributeRequest $request
     *
     * @return DescribeMonitorGroupInstanceAttributeResponse
     */
    public function describeMonitorGroupInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitorGroupInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeMonitorGroupInstancesResponse
     */
    public function describeMonitorGroupInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
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
            'action'      => 'DescribeMonitorGroupInstances',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitorGroupInstancesRequest $request
     *
     * @return DescribeMonitorGroupInstancesResponse
     */
    public function describeMonitorGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitorGroupNotifyPolicyListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeMonitorGroupNotifyPolicyListResponse
     */
    public function describeMonitorGroupNotifyPolicyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorGroupNotifyPolicyList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorGroupNotifyPolicyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitorGroupNotifyPolicyListRequest $request
     *
     * @return DescribeMonitorGroupNotifyPolicyListResponse
     */
    public function describeMonitorGroupNotifyPolicyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupNotifyPolicyListWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example of how to query the application groups of the current account. The response shows that the current account has two application groups: `testGroup124` and `test123`.
     *   *
     * @param DescribeMonitorGroupsRequest $request DescribeMonitorGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorGroupsResponse DescribeMonitorGroupsResponse
     */
    public function describeMonitorGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dynamicTagRuleId)) {
            $query['DynamicTagRuleId'] = $request->dynamicTagRuleId;
        }
        if (!Utils::isUnset($request->groupFounderTagKey)) {
            $query['GroupFounderTagKey'] = $request->groupFounderTagKey;
        }
        if (!Utils::isUnset($request->groupFounderTagValue)) {
            $query['GroupFounderTagValue'] = $request->groupFounderTagValue;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->includeTemplateHistory)) {
            $query['IncludeTemplateHistory'] = $request->includeTemplateHistory;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->selectContactGroups)) {
            $query['SelectContactGroups'] = $request->selectContactGroups;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorGroups',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example of how to query the application groups of the current account. The response shows that the current account has two application groups: `testGroup124` and `test123`.
     *   *
     * @param DescribeMonitorGroupsRequest $request DescribeMonitorGroupsRequest
     *
     * @return DescribeMonitorGroupsResponse DescribeMonitorGroupsResponse
     */
    public function describeMonitorGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitorResourceQuotaAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeMonitorResourceQuotaAttributeResponse
     */
    public function describeMonitorResourceQuotaAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->showUsed)) {
            $query['ShowUsed'] = $request->showUsed;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorResourceQuotaAttribute',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorResourceQuotaAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitorResourceQuotaAttributeRequest $request
     *
     * @return DescribeMonitorResourceQuotaAttributeResponse
     */
    public function describeMonitorResourceQuotaAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorResourceQuotaAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitoringAgentAccessKeyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeMonitoringAgentAccessKeyResponse
     */
    public function describeMonitoringAgentAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeMonitoringAgentAccessKey',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitoringAgentAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitoringAgentAccessKeyRequest $request
     *
     * @return DescribeMonitoringAgentAccessKeyResponse
     */
    public function describeMonitoringAgentAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitoringAgentConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeMonitoringAgentConfigResponse
     */
    public function describeMonitoringAgentConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeMonitoringAgentConfig',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitoringAgentConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitoringAgentConfigRequest $request
     *
     * @return DescribeMonitoringAgentConfigResponse
     */
    public function describeMonitoringAgentConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitoringAgentHostsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeMonitoringAgentHostsResponse
     */
    public function describeMonitoringAgentHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunHost)) {
            $query['AliyunHost'] = $request->aliyunHost;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceRegionId)) {
            $query['InstanceRegionId'] = $request->instanceRegionId;
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
        if (!Utils::isUnset($request->serialNumbers)) {
            $query['SerialNumbers'] = $request->serialNumbers;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->sysomStatus)) {
            $query['SysomStatus'] = $request->sysomStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitoringAgentHosts',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitoringAgentHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitoringAgentHostsRequest $request
     *
     * @return DescribeMonitoringAgentHostsResponse
     */
    public function describeMonitoringAgentHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentHostsWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to DescribeMonitoringAgentProcesses.
     *   *
     * @param DescribeMonitoringAgentProcessesRequest $request DescribeMonitoringAgentProcessesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitoringAgentProcessesResponse DescribeMonitoringAgentProcessesResponse
     */
    public function describeMonitoringAgentProcessesWithOptions($request, $runtime)
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
            'action'      => 'DescribeMonitoringAgentProcesses',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitoringAgentProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to DescribeMonitoringAgentProcesses.
     *   *
     * @param DescribeMonitoringAgentProcessesRequest $request DescribeMonitoringAgentProcessesRequest
     *
     * @return DescribeMonitoringAgentProcessesResponse DescribeMonitoringAgentProcessesResponse
     */
    public function describeMonitoringAgentProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentProcessesWithOptions($request, $runtime);
    }

    /**
     * The details of the execution error. Valid values:
     *   * *   `Command.ErrorCode.Fail.Downlaod.REGIN_ID`: Failed to obtain the region ID.
     *   * *   `Command.ErrorCode.Fail.Downlaod.SYSAK`: Failed to download the .rpm package of System Analyse Kit (SysAK).
     *   * *   `Command.ErrorCode.Fail.Downlaod.CMON_FILE`: Failed to download the CMON file.
     *   * *   `Command.ErrorCode.Fail.Downlaod.BTF`: Failed to start SysAK because the BTF file is not found.
     *   * *   `Command.ErrorCode.Fail.Start.SYSAK`: Failed to start SysAK due to an unknown error.
     *   *
     * @param DescribeMonitoringAgentStatusesRequest $request DescribeMonitoringAgentStatusesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitoringAgentStatusesResponse DescribeMonitoringAgentStatusesResponse
     */
    public function describeMonitoringAgentStatusesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAvailabilityTaskId)) {
            $query['HostAvailabilityTaskId'] = $request->hostAvailabilityTaskId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitoringAgentStatuses',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitoringAgentStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The details of the execution error. Valid values:
     *   * *   `Command.ErrorCode.Fail.Downlaod.REGIN_ID`: Failed to obtain the region ID.
     *   * *   `Command.ErrorCode.Fail.Downlaod.SYSAK`: Failed to download the .rpm package of System Analyse Kit (SysAK).
     *   * *   `Command.ErrorCode.Fail.Downlaod.CMON_FILE`: Failed to download the CMON file.
     *   * *   `Command.ErrorCode.Fail.Downlaod.BTF`: Failed to start SysAK because the BTF file is not found.
     *   * *   `Command.ErrorCode.Fail.Start.SYSAK`: Failed to start SysAK due to an unknown error.
     *   *
     * @param DescribeMonitoringAgentStatusesRequest $request DescribeMonitoringAgentStatusesRequest
     *
     * @return DescribeMonitoringAgentStatusesResponse DescribeMonitoringAgentStatusesResponse
     */
    public function describeMonitoringAgentStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentStatusesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitoringConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMonitoringConfigResponse
     */
    public function describeMonitoringConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeMonitoringConfig',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitoringConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitoringConfigRequest $request
     *
     * @return DescribeMonitoringConfigResponse
     */
    public function describeMonitoringConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringConfigWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to DescribeProductResourceTagKeyList.
     *   *
     * @param DescribeProductResourceTagKeyListRequest $request DescribeProductResourceTagKeyListRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProductResourceTagKeyListResponse DescribeProductResourceTagKeyListResponse
     */
    public function describeProductResourceTagKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProductResourceTagKeyList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProductResourceTagKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to DescribeProductResourceTagKeyList.
     *   *
     * @param DescribeProductResourceTagKeyListRequest $request DescribeProductResourceTagKeyListRequest
     *
     * @return DescribeProductResourceTagKeyListResponse DescribeProductResourceTagKeyListResponse
     */
    public function describeProductResourceTagKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductResourceTagKeyListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProductsOfActiveMetricRuleRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeProductsOfActiveMetricRuleResponse
     */
    public function describeProductsOfActiveMetricRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeProductsOfActiveMetricRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProductsOfActiveMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProductsOfActiveMetricRuleRequest $request
     *
     * @return DescribeProductsOfActiveMetricRuleResponse
     */
    public function describeProductsOfActiveMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductsOfActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * The information obtained by this operation includes the service description, namespace, and tags.
     *   *
     * @param DescribeProjectMetaRequest $request DescribeProjectMetaRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProjectMetaResponse DescribeProjectMetaResponse
     */
    public function describeProjectMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
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
            'action'      => 'DescribeProjectMeta',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The information obtained by this operation includes the service description, namespace, and tags.
     *   *
     * @param DescribeProjectMetaRequest $request DescribeProjectMetaRequest
     *
     * @return DescribeProjectMetaResponse DescribeProjectMetaResponse
     */
    public function describeProjectMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectMetaWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to DescribeSiteMonitorAttribute.
     *   *
     * @param DescribeSiteMonitorAttributeRequest $request DescribeSiteMonitorAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSiteMonitorAttributeResponse DescribeSiteMonitorAttributeResponse
     */
    public function describeSiteMonitorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeAlert)) {
            $query['IncludeAlert'] = $request->includeAlert;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSiteMonitorAttribute',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSiteMonitorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to DescribeSiteMonitorAttribute.
     *   *
     * @param DescribeSiteMonitorAttributeRequest $request DescribeSiteMonitorAttributeRequest
     *
     * @return DescribeSiteMonitorAttributeResponse DescribeSiteMonitorAttributeResponse
     */
    public function describeSiteMonitorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSiteMonitorDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSiteMonitorDataResponse
     */
    public function describeSiteMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSiteMonitorData',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSiteMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSiteMonitorDataRequest $request
     *
     * @return DescribeSiteMonitorDataResponse
     */
    public function describeSiteMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorDataWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the detection points that are provided by China Unicom in Guiyang.
     *   *
     * @param DescribeSiteMonitorISPCityListRequest $request DescribeSiteMonitorISPCityListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSiteMonitorISPCityListResponse DescribeSiteMonitorISPCityListResponse
     */
    public function describeSiteMonitorISPCityListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->IPV4)) {
            $query['IPV4'] = $request->IPV4;
        }
        if (!Utils::isUnset($request->IPV6)) {
            $query['IPV6'] = $request->IPV6;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->viewAll)) {
            $query['ViewAll'] = $request->viewAll;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSiteMonitorISPCityList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSiteMonitorISPCityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the detection points that are provided by China Unicom in Guiyang.
     *   *
     * @param DescribeSiteMonitorISPCityListRequest $request DescribeSiteMonitorISPCityListRequest
     *
     * @return DescribeSiteMonitorISPCityListResponse DescribeSiteMonitorISPCityListResponse
     */
    public function describeSiteMonitorISPCityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorISPCityListWithOptions($request, $runtime);
    }

    /**
     * The content of the HTTP request.
     *   *
     * @param DescribeSiteMonitorListRequest $request DescribeSiteMonitorListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSiteMonitorListResponse DescribeSiteMonitorListResponse
     */
    public function describeSiteMonitorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskState)) {
            $query['TaskState'] = $request->taskState;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSiteMonitorList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSiteMonitorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The content of the HTTP request.
     *   *
     * @param DescribeSiteMonitorListRequest $request DescribeSiteMonitorListRequest
     *
     * @return DescribeSiteMonitorListResponse DescribeSiteMonitorListResponse
     */
    public function describeSiteMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorListWithOptions($request, $runtime);
    }

    /**
     * You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring. For more information, see [Billing of Network Analysis and Monitoring](~~341649~~).
     *   * This topic provides an example to show how to query the logs of an instant test task whose ID is `afa5c3ce-f944-4363-9edb-ce919a29****`.
     *   *
     * @param DescribeSiteMonitorLogRequest $request DescribeSiteMonitorLogRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSiteMonitorLogResponse DescribeSiteMonitorLogResponse
     */
    public function describeSiteMonitorLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSiteMonitorLog',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSiteMonitorLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring. For more information, see [Billing of Network Analysis and Monitoring](~~341649~~).
     *   * This topic provides an example to show how to query the logs of an instant test task whose ID is `afa5c3ce-f944-4363-9edb-ce919a29****`.
     *   *
     * @param DescribeSiteMonitorLogRequest $request DescribeSiteMonitorLogRequest
     *
     * @return DescribeSiteMonitorLogResponse DescribeSiteMonitorLogResponse
     */
    public function describeSiteMonitorLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSiteMonitorQuotaRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSiteMonitorQuotaResponse
     */
    public function describeSiteMonitorQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeSiteMonitorQuota',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSiteMonitorQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSiteMonitorQuotaRequest $request
     *
     * @return DescribeSiteMonitorQuotaResponse
     */
    public function describeSiteMonitorQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSiteMonitorStatisticsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSiteMonitorStatisticsResponse
     */
    public function describeSiteMonitorStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['TimeRange'] = $request->timeRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSiteMonitorStatistics',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSiteMonitorStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSiteMonitorStatisticsRequest $request
     *
     * @return DescribeSiteMonitorStatisticsResponse
     */
    public function describeSiteMonitorStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSystemEventAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSystemEventAttributeResponse
     */
    public function describeSystemEventAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->searchKeywords)) {
            $query['SearchKeywords'] = $request->searchKeywords;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSystemEventAttribute',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSystemEventAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSystemEventAttributeRequest $request
     *
     * @return DescribeSystemEventAttributeResponse
     */
    public function describeSystemEventAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventAttributeWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to DescribeSystemEventCount.
     *   *
     * @param DescribeSystemEventCountRequest $request DescribeSystemEventCountRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSystemEventCountResponse DescribeSystemEventCountResponse
     */
    public function describeSystemEventCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->searchKeywords)) {
            $query['SearchKeywords'] = $request->searchKeywords;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSystemEventCount',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSystemEventCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to DescribeSystemEventCount.
     *   *
     * @param DescribeSystemEventCountRequest $request DescribeSystemEventCountRequest
     *
     * @return DescribeSystemEventCountResponse DescribeSystemEventCountResponse
     */
    public function describeSystemEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSystemEventHistogramRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSystemEventHistogramResponse
     */
    public function describeSystemEventHistogramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->searchKeywords)) {
            $query['SearchKeywords'] = $request->searchKeywords;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSystemEventHistogram',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSystemEventHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSystemEventHistogramRequest $request
     *
     * @return DescribeSystemEventHistogramResponse
     */
    public function describeSystemEventHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventHistogramWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSystemEventMetaListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSystemEventMetaListResponse
     */
    public function describeSystemEventMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeSystemEventMetaList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSystemEventMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSystemEventMetaListRequest $request
     *
     * @return DescribeSystemEventMetaListResponse
     */
    public function describeSystemEventMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventMetaListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagKeyListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTagKeyListResponse
     */
    public function describeTagKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeTagKeyList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTagKeyListRequest $request
     *
     * @return DescribeTagKeyListResponse
     */
    public function describeTagKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagKeyListWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to DescribeTagValueList.
     *   *
     * @param DescribeTagValueListRequest $request DescribeTagValueListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagValueListResponse DescribeTagValueListResponse
     */
    public function describeTagValueListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagValueList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagValueListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to DescribeTagValueList.
     *   *
     * @param DescribeTagValueListRequest $request DescribeTagValueListRequest
     *
     * @return DescribeTagValueListResponse DescribeTagValueListResponse
     */
    public function describeTagValueList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagValueListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUnhealthyHostAvailabilityRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeUnhealthyHostAvailabilityResponse
     */
    public function describeUnhealthyHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUnhealthyHostAvailability',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUnhealthyHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUnhealthyHostAvailabilityRequest $request
     *
     * @return DescribeUnhealthyHostAvailabilityResponse
     */
    public function describeUnhealthyHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUnhealthyHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @param DisableActiveMetricRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableActiveMetricRuleResponse
     */
    public function disableActiveMetricRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableActiveMetricRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableActiveMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableActiveMetricRuleRequest $request
     *
     * @return DisableActiveMetricRuleResponse
     */
    public function disableActiveMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @param DisableEventRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableEventRulesResponse
     */
    public function disableEventRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleNames)) {
            $query['RuleNames'] = $request->ruleNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableEventRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableEventRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableEventRulesRequest $request
     *
     * @return DisableEventRulesResponse
     */
    public function disableEventRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableEventRulesWithOptions($request, $runtime);
    }

    /**
     * @param DisableHostAvailabilityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableHostAvailabilityResponse
     */
    public function disableHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableHostAvailability',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableHostAvailabilityRequest $request
     *
     * @return DisableHostAvailabilityResponse
     */
    public function disableHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @param DisableMetricRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableMetricRulesResponse
     */
    public function disableMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableMetricRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableMetricRulesRequest $request
     *
     * @return DisableMetricRulesResponse
     */
    public function disableMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @param DisableSiteMonitorsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableSiteMonitorsResponse
     */
    public function disableSiteMonitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableSiteMonitors',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableSiteMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableSiteMonitorsRequest $request
     *
     * @return DisableSiteMonitorsResponse
     */
    public function disableSiteMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * @param EnableActiveMetricRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableActiveMetricRuleResponse
     */
    public function enableActiveMetricRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableActiveMetricRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableActiveMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableActiveMetricRuleRequest $request
     *
     * @return EnableActiveMetricRuleResponse
     */
    public function enableActiveMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableEventRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EnableEventRulesResponse
     */
    public function enableEventRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleNames)) {
            $query['RuleNames'] = $request->ruleNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableEventRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableEventRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableEventRulesRequest $request
     *
     * @return EnableEventRulesResponse
     */
    public function enableEventRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableEventRulesWithOptions($request, $runtime);
    }

    /**
     * @param EnableHostAvailabilityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableHostAvailabilityResponse
     */
    public function enableHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableHostAvailability',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableHostAvailabilityRequest $request
     *
     * @return EnableHostAvailabilityResponse
     */
    public function enableHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @param EnableMetricRuleBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableMetricRuleBlackListResponse
     */
    public function enableMetricRuleBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->isEnable)) {
            $query['IsEnable'] = $request->isEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableMetricRuleBlackList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableMetricRuleBlackListRequest $request
     *
     * @return EnableMetricRuleBlackListResponse
     */
    public function enableMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * @param EnableMetricRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableMetricRulesResponse
     */
    public function enableMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableMetricRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableMetricRulesRequest $request
     *
     * @return EnableMetricRulesResponse
     */
    public function enableMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @param EnableSiteMonitorsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableSiteMonitorsResponse
     */
    public function enableSiteMonitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableSiteMonitors',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSiteMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableSiteMonitorsRequest $request
     *
     * @return EnableSiteMonitorsResponse
     */
    public function enableSiteMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param InstallMonitoringAgentRequest $request InstallMonitoringAgentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallMonitoringAgentResponse InstallMonitoringAgentResponse
     */
    public function installMonitoringAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->installCommand)) {
            $query['InstallCommand'] = $request->installCommand;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallMonitoringAgent',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallMonitoringAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param InstallMonitoringAgentRequest $request InstallMonitoringAgentRequest
     *
     * @return InstallMonitoringAgentResponse InstallMonitoringAgentResponse
     */
    public function installMonitoringAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installMonitoringAgentWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyGroupMonitoringAgentProcessResponse
     */
    public function modifyGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertConfig)) {
            $query['AlertConfig'] = $request->alertConfig;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->matchExpressFilterRelation)) {
            $query['MatchExpressFilterRelation'] = $request->matchExpressFilterRelation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGroupMonitoringAgentProcess',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGroupMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGroupMonitoringAgentProcessRequest $request
     *
     * @return ModifyGroupMonitoringAgentProcessResponse
     */
    public function modifyGroupMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param ModifyHostAvailabilityRequest $request ModifyHostAvailabilityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostAvailabilityResponse ModifyHostAvailabilityResponse
     */
    public function modifyHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertConfigEscalationList)) {
            $query['AlertConfigEscalationList'] = $request->alertConfigEscalationList;
        }
        if (!Utils::isUnset($request->alertConfigTargetList)) {
            $query['AlertConfigTargetList'] = $request->alertConfigTargetList;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceList)) {
            $query['InstanceList'] = $request->instanceList;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskScope)) {
            $query['TaskScope'] = $request->taskScope;
        }
        if (!Utils::isUnset($request->alertConfig)) {
            $query['AlertConfig'] = $request->alertConfig;
        }
        if (!Utils::isUnset($request->taskOption)) {
            $query['TaskOption'] = $request->taskOption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostAvailability',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param ModifyHostAvailabilityRequest $request ModifyHostAvailabilityRequest
     *
     * @return ModifyHostAvailabilityResponse ModifyHostAvailabilityResponse
     */
    public function modifyHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * ****
     *   *
     * @param ModifyHostInfoRequest $request ModifyHostInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostInfoResponse ModifyHostInfoResponse
     */
    public function modifyHostInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostInfo',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   *
     * @param ModifyHostInfoRequest $request ModifyHostInfoRequest
     *
     * @return ModifyHostInfoResponse ModifyHostInfoResponse
     */
    public function modifyHostInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostInfoWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param ModifyHybridMonitorNamespaceRequest $request ModifyHybridMonitorNamespaceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridMonitorNamespaceResponse ModifyHybridMonitorNamespaceResponse
     */
    public function modifyHybridMonitorNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHybridMonitorNamespace',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHybridMonitorNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param ModifyHybridMonitorNamespaceRequest $request ModifyHybridMonitorNamespaceRequest
     *
     * @return ModifyHybridMonitorNamespaceResponse ModifyHybridMonitorNamespaceResponse
     */
    public function modifyHybridMonitorNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridMonitorNamespaceWithOptions($request, $runtime);
    }

    /**
     * The Log Service projects.
     *   * Valid values of N: 1 to 25.
     *   *
     * @param ModifyHybridMonitorSLSGroupRequest $request ModifyHybridMonitorSLSGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridMonitorSLSGroupResponse ModifyHybridMonitorSLSGroupResponse
     */
    public function modifyHybridMonitorSLSGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SLSGroupConfig)) {
            $query['SLSGroupConfig'] = $request->SLSGroupConfig;
        }
        if (!Utils::isUnset($request->SLSGroupDescription)) {
            $query['SLSGroupDescription'] = $request->SLSGroupDescription;
        }
        if (!Utils::isUnset($request->SLSGroupName)) {
            $query['SLSGroupName'] = $request->SLSGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHybridMonitorSLSGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHybridMonitorSLSGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The Log Service projects.
     *   * Valid values of N: 1 to 25.
     *   *
     * @param ModifyHybridMonitorSLSGroupRequest $request ModifyHybridMonitorSLSGroupRequest
     *
     * @return ModifyHybridMonitorSLSGroupResponse ModifyHybridMonitorSLSGroupResponse
     */
    public function modifyHybridMonitorSLSGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridMonitorSLSGroupWithOptions($request, $runtime);
    }

    /**
     * The alias of the extended field that specifies the result of basic operations performed on aggregation results.
     *   *
     * @param ModifyHybridMonitorTaskRequest $request ModifyHybridMonitorTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHybridMonitorTaskResponse ModifyHybridMonitorTaskResponse
     */
    public function modifyHybridMonitorTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachLabels)) {
            $query['AttachLabels'] = $request->attachLabels;
        }
        if (!Utils::isUnset($request->collectInterval)) {
            $query['CollectInterval'] = $request->collectInterval;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->SLSProcessConfig)) {
            $query['SLSProcessConfig'] = $request->SLSProcessConfig;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHybridMonitorTask',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHybridMonitorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The alias of the extended field that specifies the result of basic operations performed on aggregation results.
     *   *
     * @param ModifyHybridMonitorTaskRequest $request ModifyHybridMonitorTaskRequest
     *
     * @return ModifyHybridMonitorTaskResponse ModifyHybridMonitorTaskResponse
     */
    public function modifyHybridMonitorTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridMonitorTaskWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMetricRuleBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyMetricRuleBlackListResponse
     */
    public function modifyMetricRuleBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->enableEndTime)) {
            $query['EnableEndTime'] = $request->enableEndTime;
        }
        if (!Utils::isUnset($request->enableStartTime)) {
            $query['EnableStartTime'] = $request->enableStartTime;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->scopeType)) {
            $query['ScopeType'] = $request->scopeType;
        }
        if (!Utils::isUnset($request->scopeValue)) {
            $query['ScopeValue'] = $request->scopeValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMetricRuleBlackList',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMetricRuleBlackListRequest $request
     *
     * @return ModifyMetricRuleBlackListResponse
     */
    public function modifyMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param ModifyMetricRuleTemplateRequest $request ModifyMetricRuleTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMetricRuleTemplateResponse ModifyMetricRuleTemplateResponse
     */
    public function modifyMetricRuleTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertTemplates)) {
            $query['AlertTemplates'] = $request->alertTemplates;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->restVersion)) {
            $query['RestVersion'] = $request->restVersion;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMetricRuleTemplate',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMetricRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param ModifyMetricRuleTemplateRequest $request ModifyMetricRuleTemplateRequest
     *
     * @return ModifyMetricRuleTemplateResponse ModifyMetricRuleTemplateResponse
     */
    public function modifyMetricRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyMonitorGroupResponse
     */
    public function modifyMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroups)) {
            $query['ContactGroups'] = $request->contactGroups;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMonitorGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMonitorGroupRequest $request
     *
     * @return ModifyMonitorGroupResponse
     */
    public function modifyMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMonitorGroupInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyMonitorGroupInstancesResponse
     */
    public function modifyMonitorGroupInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMonitorGroupInstances',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMonitorGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMonitorGroupInstancesRequest $request
     *
     * @return ModifyMonitorGroupInstancesResponse
     */
    public function modifyMonitorGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * The number of site monitoring tasks.
     *   *
     * @param ModifySiteMonitorRequest $request ModifySiteMonitorRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySiteMonitorResponse ModifySiteMonitorResponse
     */
    public function modifySiteMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->alertIds)) {
            $query['AlertIds'] = $request->alertIds;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->intervalUnit)) {
            $query['IntervalUnit'] = $request->intervalUnit;
        }
        if (!Utils::isUnset($request->ispCities)) {
            $query['IspCities'] = $request->ispCities;
        }
        if (!Utils::isUnset($request->optionsJson)) {
            $query['OptionsJson'] = $request->optionsJson;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySiteMonitor',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of site monitoring tasks.
     *   *
     * @param ModifySiteMonitorRequest $request ModifySiteMonitorRequest
     *
     * @return ModifySiteMonitorResponse ModifySiteMonitorResponse
     */
    public function modifySiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySiteMonitorWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenCmsServiceResponse OpenCmsServiceResponse
     */
    public function openCmsServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenCmsService',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenCmsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @return OpenCmsServiceResponse OpenCmsServiceResponse
     */
    public function openCmsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCmsServiceWithOptions($runtime);
    }

    /**
     * @param PutContactRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PutContactResponse
     */
    public function putContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->describe)) {
            $query['Describe'] = $request->describe;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->channels)) {
            $query['Channels'] = $request->channels;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutContact',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutContactRequest $request
     *
     * @return PutContactResponse
     */
    public function putContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putContactWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to PutContactGroup.
     *   *
     * @param PutContactGroupRequest $request PutContactGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PutContactGroupResponse PutContactGroupResponse
     */
    public function putContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactNames)) {
            $query['ContactNames'] = $request->contactNames;
        }
        if (!Utils::isUnset($request->describe)) {
            $query['Describe'] = $request->describe;
        }
        if (!Utils::isUnset($request->enableSubscribed)) {
            $query['EnableSubscribed'] = $request->enableSubscribed;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutContactGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to PutContactGroup.
     *   *
     * @param PutContactGroupRequest $request PutContactGroupRequest
     *
     * @return PutContactGroupResponse PutContactGroupResponse
     */
    public function putContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param PutCustomEventRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutCustomEventResponse
     */
    public function putCustomEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventInfo)) {
            $query['EventInfo'] = $request->eventInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutCustomEvent',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutCustomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutCustomEventRequest $request
     *
     * @return PutCustomEventResponse
     */
    public function putCustomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomEventWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to PutCustomEventRule.
     *   *
     * @param PutCustomEventRuleRequest $request PutCustomEventRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PutCustomEventRuleResponse PutCustomEventRuleResponse
     */
    public function putCustomEventRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroups)) {
            $query['ContactGroups'] = $request->contactGroups;
        }
        if (!Utils::isUnset($request->effectiveInterval)) {
            $query['EffectiveInterval'] = $request->effectiveInterval;
        }
        if (!Utils::isUnset($request->emailSubject)) {
            $query['EmailSubject'] = $request->emailSubject;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->webhook)) {
            $query['Webhook'] = $request->webhook;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutCustomEventRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutCustomEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to PutCustomEventRule.
     *   *
     * @param PutCustomEventRuleRequest $request PutCustomEventRuleRequest
     *
     * @return PutCustomEventRuleResponse PutCustomEventRuleResponse
     */
    public function putCustomEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomEventRuleWithOptions($request, $runtime);
    }

    /**
     * The dimensions that specify the resources whose monitoring data you want to query. Valid values of N: 1 to 21.
     *   * Set the value to a collection of key-value pairs. Format:`{"Key":"Value"}`.
     *   * The key or value must be 1 to 64 bytes in length. Excessive characters are truncated.
     *   * The key or value can contain letters, digits, periods (.), hyphens (-), underscores (\\_), forward slashes (/), and backslashes (\\\\).
     *   * >  Dimensions must be formatted as a JSON string in a specified order.
     *   *
     * @param PutCustomMetricRequest $request PutCustomMetricRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PutCustomMetricResponse PutCustomMetricResponse
     */
    public function putCustomMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->metricList)) {
            $query['MetricList'] = $request->metricList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutCustomMetric',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutCustomMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The dimensions that specify the resources whose monitoring data you want to query. Valid values of N: 1 to 21.
     *   * Set the value to a collection of key-value pairs. Format:`{"Key":"Value"}`.
     *   * The key or value must be 1 to 64 bytes in length. Excessive characters are truncated.
     *   * The key or value can contain letters, digits, periods (.), hyphens (-), underscores (\\_), forward slashes (/), and backslashes (\\\\).
     *   * >  Dimensions must be formatted as a JSON string in a specified order.
     *   *
     * @param PutCustomMetricRequest $request PutCustomMetricRequest
     *
     * @return PutCustomMetricResponse PutCustomMetricResponse
     */
    public function putCustomMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomMetricWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to PutCustomMetricRule.
     *   *
     * @param PutCustomMetricRuleRequest $request PutCustomMetricRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PutCustomMetricRuleResponse PutCustomMetricRuleResponse
     */
    public function putCustomMetricRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comparisonOperator)) {
            $query['ComparisonOperator'] = $request->comparisonOperator;
        }
        if (!Utils::isUnset($request->contactGroups)) {
            $query['ContactGroups'] = $request->contactGroups;
        }
        if (!Utils::isUnset($request->effectiveInterval)) {
            $query['EffectiveInterval'] = $request->effectiveInterval;
        }
        if (!Utils::isUnset($request->emailSubject)) {
            $query['EmailSubject'] = $request->emailSubject;
        }
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        if (!Utils::isUnset($request->statistics)) {
            $query['Statistics'] = $request->statistics;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->webhook)) {
            $query['Webhook'] = $request->webhook;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutCustomMetricRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutCustomMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to PutCustomMetricRule.
     *   *
     * @param PutCustomMetricRuleRequest $request PutCustomMetricRuleRequest
     *
     * @return PutCustomMetricRuleResponse PutCustomMetricRuleResponse
     */
    public function putCustomMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomMetricRuleWithOptions($request, $runtime);
    }

    /**
     * The ID of the application group to which the event-triggered alert rule belongs.
     *   *
     * @param PutEventRuleRequest $request PutEventRuleRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return PutEventRuleResponse PutEventRuleResponse
     */
    public function putEventRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventPattern)) {
            $query['EventPattern'] = $request->eventPattern;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutEventRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the application group to which the event-triggered alert rule belongs.
     *   *
     * @param PutEventRuleRequest $request PutEventRuleRequest
     *
     * @return PutEventRuleResponse PutEventRuleResponse
     */
    public function putEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventRuleWithOptions($request, $runtime);
    }

    /**
     * @param PutEventRuleTargetsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutEventRuleTargetsResponse
     */
    public function putEventRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactParameters)) {
            $query['ContactParameters'] = $request->contactParameters;
        }
        if (!Utils::isUnset($request->fcParameters)) {
            $query['FcParameters'] = $request->fcParameters;
        }
        if (!Utils::isUnset($request->mnsParameters)) {
            $query['MnsParameters'] = $request->mnsParameters;
        }
        if (!Utils::isUnset($request->openApiParameters)) {
            $query['OpenApiParameters'] = $request->openApiParameters;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->slsParameters)) {
            $query['SlsParameters'] = $request->slsParameters;
        }
        if (!Utils::isUnset($request->webhookParameters)) {
            $query['WebhookParameters'] = $request->webhookParameters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutEventRuleTargets',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutEventRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutEventRuleTargetsRequest $request
     *
     * @return PutEventRuleTargetsResponse
     */
    public function putEventRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * > The monitoring data can be exported only to Log Service. More services will be supported in the future.
     *   *
     * @param PutExporterOutputRequest $request PutExporterOutputRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return PutExporterOutputResponse PutExporterOutputResponse
     */
    public function putExporterOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configJson)) {
            $query['ConfigJson'] = $request->configJson;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->destName)) {
            $query['DestName'] = $request->destName;
        }
        if (!Utils::isUnset($request->destType)) {
            $query['DestType'] = $request->destType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutExporterOutput',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutExporterOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The monitoring data can be exported only to Log Service. More services will be supported in the future.
     *   *
     * @param PutExporterOutputRequest $request PutExporterOutputRequest
     *
     * @return PutExporterOutputResponse PutExporterOutputResponse
     */
    public function putExporterOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putExporterOutputWithOptions($request, $runtime);
    }

    /**
     * @param PutExporterRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutExporterRuleResponse
     */
    public function putExporterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->describe)) {
            $query['Describe'] = $request->describe;
        }
        if (!Utils::isUnset($request->dstNames)) {
            $query['DstNames'] = $request->dstNames;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->targetWindows)) {
            $query['TargetWindows'] = $request->targetWindows;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutExporterRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutExporterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutExporterRuleRequest $request
     *
     * @return PutExporterRuleResponse
     */
    public function putExporterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putExporterRuleWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param PutGroupMetricRuleRequest $request PutGroupMetricRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PutGroupMetricRuleResponse PutGroupMetricRuleResponse
     */
    public function putGroupMetricRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->contactGroups)) {
            $query['ContactGroups'] = $request->contactGroups;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->effectiveInterval)) {
            $query['EffectiveInterval'] = $request->effectiveInterval;
        }
        if (!Utils::isUnset($request->emailSubject)) {
            $query['EmailSubject'] = $request->emailSubject;
        }
        if (!Utils::isUnset($request->extraDimensionJson)) {
            $query['ExtraDimensionJson'] = $request->extraDimensionJson;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->noDataPolicy)) {
            $query['NoDataPolicy'] = $request->noDataPolicy;
        }
        if (!Utils::isUnset($request->noEffectiveInterval)) {
            $query['NoEffectiveInterval'] = $request->noEffectiveInterval;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        if (!Utils::isUnset($request->webhook)) {
            $query['Webhook'] = $request->webhook;
        }
        if (!Utils::isUnset($request->escalations)) {
            $query['Escalations'] = $request->escalations;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutGroupMetricRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutGroupMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param PutGroupMetricRuleRequest $request PutGroupMetricRuleRequest
     *
     * @return PutGroupMetricRuleResponse PutGroupMetricRuleResponse
     */
    public function putGroupMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putGroupMetricRuleWithOptions($request, $runtime);
    }

    /**
     * The tag value of the metric.
     *   * Valid values of N: 1 to 100.
     *   * >  You must specify a key and a value for a tag at the same time.
     *   *
     * @param PutHybridMonitorMetricDataRequest $request PutHybridMonitorMetricDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return PutHybridMonitorMetricDataResponse PutHybridMonitorMetricDataResponse
     */
    public function putHybridMonitorMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->metricList)) {
            $query['MetricList'] = $request->metricList;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutHybridMonitorMetricData',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutHybridMonitorMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The tag value of the metric.
     *   * Valid values of N: 1 to 100.
     *   * >  You must specify a key and a value for a tag at the same time.
     *   *
     * @param PutHybridMonitorMetricDataRequest $request PutHybridMonitorMetricDataRequest
     *
     * @return PutHybridMonitorMetricDataResponse PutHybridMonitorMetricDataResponse
     */
    public function putHybridMonitorMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putHybridMonitorMetricDataWithOptions($request, $runtime);
    }

    /**
     * The name of the log field that is used for matching in the filter condition. Valid values of N: 1 to 10.
     *   *
     * @param PutLogMonitorRequest $request PutLogMonitorRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return PutLogMonitorResponse PutLogMonitorResponse
     */
    public function putLogMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregates)) {
            $query['Aggregates'] = $request->aggregates;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupbys)) {
            $query['Groupbys'] = $request->groupbys;
        }
        if (!Utils::isUnset($request->logId)) {
            $query['LogId'] = $request->logId;
        }
        if (!Utils::isUnset($request->metricExpress)) {
            $query['MetricExpress'] = $request->metricExpress;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->slsLogstore)) {
            $query['SlsLogstore'] = $request->slsLogstore;
        }
        if (!Utils::isUnset($request->slsProject)) {
            $query['SlsProject'] = $request->slsProject;
        }
        if (!Utils::isUnset($request->slsRegionId)) {
            $query['SlsRegionId'] = $request->slsRegionId;
        }
        if (!Utils::isUnset($request->tumblingwindows)) {
            $query['Tumblingwindows'] = $request->tumblingwindows;
        }
        if (!Utils::isUnset($request->unit)) {
            $query['Unit'] = $request->unit;
        }
        if (!Utils::isUnset($request->valueFilter)) {
            $query['ValueFilter'] = $request->valueFilter;
        }
        if (!Utils::isUnset($request->valueFilterRelation)) {
            $query['ValueFilterRelation'] = $request->valueFilterRelation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutLogMonitor',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutLogMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the log field that is used for matching in the filter condition. Valid values of N: 1 to 10.
     *   *
     * @param PutLogMonitorRequest $request PutLogMonitorRequest
     *
     * @return PutLogMonitorResponse PutLogMonitorResponse
     */
    public function putLogMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putLogMonitorWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param PutMetricRuleTargetsRequest $request PutMetricRuleTargetsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return PutMetricRuleTargetsResponse PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->targets)) {
            $query['Targets'] = $request->targets;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutMetricRuleTargets',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutMetricRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param PutMetricRuleTargetsRequest $request PutMetricRuleTargetsRequest
     *
     * @return PutMetricRuleTargetsResponse PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @param PutMonitorGroupDynamicRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PutMonitorGroupDynamicRuleResponse
     */
    public function putMonitorGroupDynamicRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupRules)) {
            $query['GroupRules'] = $request->groupRules;
        }
        if (!Utils::isUnset($request->isAsync)) {
            $query['IsAsync'] = $request->isAsync;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutMonitorGroupDynamicRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutMonitorGroupDynamicRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutMonitorGroupDynamicRuleRequest $request
     *
     * @return PutMonitorGroupDynamicRuleResponse
     */
    public function putMonitorGroupDynamicRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMonitorGroupDynamicRuleWithOptions($request, $runtime);
    }

    /**
     * @param PutMonitoringConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutMonitoringConfigResponse
     */
    public function putMonitoringConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoInstall)) {
            $query['AutoInstall'] = $request->autoInstall;
        }
        if (!Utils::isUnset($request->enableInstallAgentNewECS)) {
            $query['EnableInstallAgentNewECS'] = $request->enableInstallAgentNewECS;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutMonitoringConfig',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutMonitoringConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutMonitoringConfigRequest $request
     *
     * @return PutMonitoringConfigResponse
     */
    public function putMonitoringConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMonitoringConfigWithOptions($request, $runtime);
    }

    /**
     * The mute period during which new alerts are not sent even if the trigger conditions are met. Unit: seconds. Default value: 86400.
     *   * >  If an alert is not cleared within the mute period, a new alert notification is sent when the mute period ends.
     *   *
     * @param PutResourceMetricRuleRequest $tmpReq  PutResourceMetricRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return PutResourceMetricRuleResponse PutResourceMetricRuleResponse
     */
    public function putResourceMetricRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PutResourceMetricRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->compositeExpression)) {
            $request->compositeExpressionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->compositeExpression, 'CompositeExpression', 'json');
        }
        if (!Utils::isUnset($tmpReq->prometheus)) {
            $request->prometheusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->prometheus, 'Prometheus', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->compositeExpressionShrink)) {
            $query['CompositeExpression'] = $request->compositeExpressionShrink;
        }
        if (!Utils::isUnset($request->contactGroups)) {
            $query['ContactGroups'] = $request->contactGroups;
        }
        if (!Utils::isUnset($request->effectiveInterval)) {
            $query['EffectiveInterval'] = $request->effectiveInterval;
        }
        if (!Utils::isUnset($request->emailSubject)) {
            $query['EmailSubject'] = $request->emailSubject;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->noDataPolicy)) {
            $query['NoDataPolicy'] = $request->noDataPolicy;
        }
        if (!Utils::isUnset($request->noEffectiveInterval)) {
            $query['NoEffectiveInterval'] = $request->noEffectiveInterval;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->prometheusShrink)) {
            $query['Prometheus'] = $request->prometheusShrink;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        if (!Utils::isUnset($request->webhook)) {
            $query['Webhook'] = $request->webhook;
        }
        if (!Utils::isUnset($request->escalations)) {
            $query['Escalations'] = $request->escalations;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutResourceMetricRule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutResourceMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The mute period during which new alerts are not sent even if the trigger conditions are met. Unit: seconds. Default value: 86400.
     *   * >  If an alert is not cleared within the mute period, a new alert notification is sent when the mute period ends.
     *   *
     * @param PutResourceMetricRuleRequest $request PutResourceMetricRuleRequest
     *
     * @return PutResourceMetricRuleResponse PutResourceMetricRuleResponse
     */
    public function putResourceMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putResourceMetricRuleWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param PutResourceMetricRulesRequest $request PutResourceMetricRulesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return PutResourceMetricRulesResponse PutResourceMetricRulesResponse
     */
    public function putResourceMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutResourceMetricRules',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutResourceMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the call was successful. Valid values:
     *   * *   true: The call was successful.
     *   * *   false: The call failed.
     *   *
     * @param PutResourceMetricRulesRequest $request PutResourceMetricRulesRequest
     *
     * @return PutResourceMetricRulesResponse PutResourceMetricRulesResponse
     */
    public function putResourceMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putResourceMetricRulesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTags',
            'version'     => '2019-01-01',
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
     * The name of the cloud service.
     *   * >  For information about the system events supported by Cloud Monitor for Alibaba Cloud services, see [System events](~~167388~~).
     *   *
     * @param SendDryRunSystemEventRequest $request SendDryRunSystemEventRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SendDryRunSystemEventResponse SendDryRunSystemEventResponse
     */
    public function sendDryRunSystemEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventContent)) {
            $query['EventContent'] = $request->eventContent;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendDryRunSystemEvent',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendDryRunSystemEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the cloud service.
     *   * >  For information about the system events supported by Cloud Monitor for Alibaba Cloud services, see [System events](~~167388~~).
     *   *
     * @param SendDryRunSystemEventRequest $request SendDryRunSystemEventRequest
     *
     * @return SendDryRunSystemEventResponse SendDryRunSystemEventResponse
     */
    public function sendDryRunSystemEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendDryRunSystemEventWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to UninstallMonitoringAgent.
     *   *
     * @param UninstallMonitoringAgentRequest $request UninstallMonitoringAgentRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallMonitoringAgentResponse UninstallMonitoringAgentResponse
     */
    public function uninstallMonitoringAgentWithOptions($request, $runtime)
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
            'action'      => 'UninstallMonitoringAgent',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UninstallMonitoringAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to UninstallMonitoringAgent.
     *   *
     * @param UninstallMonitoringAgentRequest $request UninstallMonitoringAgentRequest
     *
     * @return UninstallMonitoringAgentResponse UninstallMonitoringAgentResponse
     */
    public function uninstallMonitoringAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallMonitoringAgentWithOptions($request, $runtime);
    }
}
