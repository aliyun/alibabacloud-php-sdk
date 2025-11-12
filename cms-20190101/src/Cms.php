<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cms\V20190101\Models\AddTagsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\AddTagsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateInstantSiteMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateInstantSiteMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchExportRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchExportResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\BatchExportShrinkRequest;
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
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSyntheticProbeListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSyntheticProbeListResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds tags to an application group.
     *
     * @remarks
     * This topic provides an example on how to add a tag to an application group whose ID is `7301****`. In this example, the key of the tag is `key1` and the value of the tag is `value1`.
     *
     * @param request - AddTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTagsResponse
     *
     * @param AddTagsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddTagsResponse
     */
    public function addTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTags',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to an application group.
     *
     * @remarks
     * This topic provides an example on how to add a tag to an application group whose ID is `7301****`. In this example, the key of the tag is `key1` and the value of the tag is `value1`.
     *
     * @param request - AddTagsRequest
     *
     * @returns AddTagsResponse
     *
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
     * Applies an alert template to an application group to generate an alert rule.
     *
     * @remarks
     * In this example, the `700****` alert template is applied to the `123456` application group. For the generated alert rule, the ID is `applyTemplate8ab74c6b-9f27-47ab-8841-de01dc08****`, and the name is `test123`.
     *
     * @param request - ApplyMetricRuleTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyMetricRuleTemplateResponse
     *
     * @param ApplyMetricRuleTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApplyMetricRuleTemplateResponse
     */
    public function applyMetricRuleTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appendMode) {
            @$query['AppendMode'] = $request->appendMode;
        }

        if (null !== $request->applyMode) {
            @$query['ApplyMode'] = $request->applyMode;
        }

        if (null !== $request->enableEndTime) {
            @$query['EnableEndTime'] = $request->enableEndTime;
        }

        if (null !== $request->enableStartTime) {
            @$query['EnableStartTime'] = $request->enableStartTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->notifyLevel) {
            @$query['NotifyLevel'] = $request->notifyLevel;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyMetricRuleTemplate',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyMetricRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies an alert template to an application group to generate an alert rule.
     *
     * @remarks
     * In this example, the `700****` alert template is applied to the `123456` application group. For the generated alert rule, the ID is `applyTemplate8ab74c6b-9f27-47ab-8841-de01dc08****`, and the name is `test123`.
     *
     * @param request - ApplyMetricRuleTemplateRequest
     *
     * @returns ApplyMetricRuleTemplateResponse
     *
     * @param ApplyMetricRuleTemplateRequest $request
     *
     * @return ApplyMetricRuleTemplateResponse
     */
    public function applyMetricRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates site monitoring tasks.
     *
     * @remarks
     * This topic provides an example on how to create a site monitoring task named `HangZhou_ECS1`. The URL that is monitored by the task is `https://www.aliyun.com` and the type of the task is `HTTP`. The returned result shows that the site monitoring task is created. The name of the site monitoring task is `HangZhou_ECS1` and the task ID is `679fbe4f-b80b-4706-91b2-5427b43e****`.
     *
     * @param request - BatchCreateInstantSiteMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateInstantSiteMonitorResponse
     *
     * @param BatchCreateInstantSiteMonitorRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchCreateInstantSiteMonitorResponse
     */
    public function batchCreateInstantSiteMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskList) {
            @$query['TaskList'] = $request->taskList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchCreateInstantSiteMonitor',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateInstantSiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates site monitoring tasks.
     *
     * @remarks
     * This topic provides an example on how to create a site monitoring task named `HangZhou_ECS1`. The URL that is monitored by the task is `https://www.aliyun.com` and the type of the task is `HTTP`. The returned result shows that the site monitoring task is created. The name of the site monitoring task is `HangZhou_ECS1` and the task ID is `679fbe4f-b80b-4706-91b2-5427b43e****`.
     *
     * @param request - BatchCreateInstantSiteMonitorRequest
     *
     * @returns BatchCreateInstantSiteMonitorResponse
     *
     * @param BatchCreateInstantSiteMonitorRequest $request
     *
     * @return BatchCreateInstantSiteMonitorResponse
     */
    public function batchCreateInstantSiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateInstantSiteMonitorWithOptions($request, $runtime);
    }

    /**
     * Exports the monitoring data that is defined in the Cursor operation.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The `Cursor` information is returned by calling the [Cursor](https://help.aliyun.com/document_detail/2330730.html) operation.
     * ### [](#)Description
     * This topic provides an example on how to export the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The `Cursor` information is specified. A maximum of 1,000 data entries can be returned in each response.
     *
     * @param tmpReq - BatchExportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchExportResponse
     *
     * @param BatchExportRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return BatchExportResponse
     */
    public function batchExportWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchExportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->measurements) {
            $request->measurementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->measurements, 'Measurements', 'json');
        }

        $body = [];
        if (null !== $request->cursor) {
            @$body['Cursor'] = $request->cursor;
        }

        if (null !== $request->length) {
            @$body['Length'] = $request->length;
        }

        if (null !== $request->measurementsShrink) {
            @$body['Measurements'] = $request->measurementsShrink;
        }

        if (null !== $request->metric) {
            @$body['Metric'] = $request->metric;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchExport',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports the monitoring data that is defined in the Cursor operation.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The `Cursor` information is returned by calling the [Cursor](https://help.aliyun.com/document_detail/2330730.html) operation.
     * ### [](#)Description
     * This topic provides an example on how to export the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The `Cursor` information is specified. A maximum of 1,000 data entries can be returned in each response.
     *
     * @param request - BatchExportRequest
     *
     * @returns BatchExportResponse
     *
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
     * Creates an application group based on the tags of cloud resources.
     *
     * @remarks
     * This operation is available for Elastic Compute Service (ECS), ApsaraDB RDS, and Server Load Balancer (SLB).
     * This topic provides an example to show how to create an application group for resources whose tag key is `ecs_instance`. In this example, the alert contact group of the application group is `ECS_Group`.
     *
     * @param request - CreateDynamicTagGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDynamicTagGroupResponse
     *
     * @param CreateDynamicTagGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDynamicTagGroupResponse
     */
    public function createDynamicTagGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupList) {
            @$query['ContactGroupList'] = $request->contactGroupList;
        }

        if (null !== $request->enableInstallAgent) {
            @$query['EnableInstallAgent'] = $request->enableInstallAgent;
        }

        if (null !== $request->enableSubscribeEvent) {
            @$query['EnableSubscribeEvent'] = $request->enableSubscribeEvent;
        }

        if (null !== $request->matchExpress) {
            @$query['MatchExpress'] = $request->matchExpress;
        }

        if (null !== $request->matchExpressFilterRelation) {
            @$query['MatchExpressFilterRelation'] = $request->matchExpressFilterRelation;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->tagRegionId) {
            @$query['TagRegionId'] = $request->tagRegionId;
        }

        if (null !== $request->templateIdList) {
            @$query['TemplateIdList'] = $request->templateIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDynamicTagGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDynamicTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application group based on the tags of cloud resources.
     *
     * @remarks
     * This operation is available for Elastic Compute Service (ECS), ApsaraDB RDS, and Server Load Balancer (SLB).
     * This topic provides an example to show how to create an application group for resources whose tag key is `ecs_instance`. In this example, the alert contact group of the application group is `ECS_Group`.
     *
     * @param request - CreateDynamicTagGroupRequest
     *
     * @returns CreateDynamicTagGroupResponse
     *
     * @param CreateDynamicTagGroupRequest $request
     *
     * @return CreateDynamicTagGroupResponse
     */
    public function createDynamicTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDynamicTagGroupWithOptions($request, $runtime);
    }

    /**
     * Creates one or more alert rules for a specified application group.
     *
     * @remarks
     * This topic provides an example to show how to create an alert rule for the `cpu_total` metric of Elastic Compute Service (ECS) in the `123456` application group. The ID of the alert rule is `456789`. The name of the alert rule is `ECS_Rule1`. The alert level is `Critical`. The statistical method is `Average`. The comparison operator is `GreaterThanOrEqualToThreshold`. The alert threshold is `90`. The number of alert retries is `3`. The response shows that the alert rule named `ECS_Rule1` is created.
     *
     * @param request - CreateGroupMetricRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupMetricRulesResponse
     *
     * @param CreateGroupMetricRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateGroupMetricRulesResponse
     */
    public function createGroupMetricRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupMetricRules) {
            @$query['GroupMetricRules'] = $request->groupMetricRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroupMetricRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGroupMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates one or more alert rules for a specified application group.
     *
     * @remarks
     * This topic provides an example to show how to create an alert rule for the `cpu_total` metric of Elastic Compute Service (ECS) in the `123456` application group. The ID of the alert rule is `456789`. The name of the alert rule is `ECS_Rule1`. The alert level is `Critical`. The statistical method is `Average`. The comparison operator is `GreaterThanOrEqualToThreshold`. The alert threshold is `90`. The number of alert retries is `3`. The response shows that the alert rule named `ECS_Rule1` is created.
     *
     * @param request - CreateGroupMetricRulesRequest
     *
     * @returns CreateGroupMetricRulesResponse
     *
     * @param CreateGroupMetricRulesRequest $request
     *
     * @return CreateGroupMetricRulesResponse
     */
    public function createGroupMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupMetricRulesWithOptions($request, $runtime);
    }

    /**
     * Creates a process monitoring task for an application group.
     *
     * @param request - CreateGroupMonitoringAgentProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupMonitoringAgentProcessResponse
     *
     * @param CreateGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateGroupMonitoringAgentProcessResponse
     */
    public function createGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertConfig) {
            @$query['AlertConfig'] = $request->alertConfig;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->matchExpress) {
            @$query['MatchExpress'] = $request->matchExpress;
        }

        if (null !== $request->matchExpressFilterRelation) {
            @$query['MatchExpressFilterRelation'] = $request->matchExpressFilterRelation;
        }

        if (null !== $request->processName) {
            @$query['ProcessName'] = $request->processName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroupMonitoringAgentProcess',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGroupMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a process monitoring task for an application group.
     *
     * @param request - CreateGroupMonitoringAgentProcessRequest
     *
     * @returns CreateGroupMonitoringAgentProcessResponse
     *
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
     * Creates an availability monitoring task.
     *
     * @remarks
     * This topic provides an example on how to create an availability monitoring task named `task1` in an application group named `123456`. The TaskType parameter of the task is set to `HTTP`. After you start the task, the system sends alerts by using the specified email address and DingTalk chatbot.
     *
     * @param request - CreateHostAvailabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHostAvailabilityResponse
     *
     * @param CreateHostAvailabilityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateHostAvailabilityResponse
     */
    public function createHostAvailabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertConfigEscalationList) {
            @$query['AlertConfigEscalationList'] = $request->alertConfigEscalationList;
        }

        if (null !== $request->alertConfigTargetList) {
            @$query['AlertConfigTargetList'] = $request->alertConfigTargetList;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceList) {
            @$query['InstanceList'] = $request->instanceList;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskScope) {
            @$query['TaskScope'] = $request->taskScope;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->alertConfig) {
            @$query['AlertConfig'] = $request->alertConfig;
        }

        if (null !== $request->taskOption) {
            @$query['TaskOption'] = $request->taskOption;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHostAvailability',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an availability monitoring task.
     *
     * @remarks
     * This topic provides an example on how to create an availability monitoring task named `task1` in an application group named `123456`. The TaskType parameter of the task is set to `HTTP`. After you start the task, the system sends alerts by using the specified email address and DingTalk chatbot.
     *
     * @param request - CreateHostAvailabilityRequest
     *
     * @returns CreateHostAvailabilityResponse
     *
     * @param CreateHostAvailabilityRequest $request
     *
     * @return CreateHostAvailabilityResponse
     */
    public function createHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * Creates a namespace.
     *
     * @remarks
     * ## [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ## [](#)Operation description
     * This topic provides an example on how to create a namespace named `aliyun`. In this example, the data retention period of the namespace is set to `cms.s1.3xlarge`. The returned result indicates that the namespace is created.
     *
     * @param request - CreateHybridMonitorNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHybridMonitorNamespaceResponse
     *
     * @param CreateHybridMonitorNamespaceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateHybridMonitorNamespaceResponse
     */
    public function createHybridMonitorNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceRegion) {
            @$query['NamespaceRegion'] = $request->namespaceRegion;
        }

        if (null !== $request->namespaceType) {
            @$query['NamespaceType'] = $request->namespaceType;
        }

        if (null !== $request->spec) {
            @$query['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHybridMonitorNamespace',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHybridMonitorNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a namespace.
     *
     * @remarks
     * ## [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ## [](#)Operation description
     * This topic provides an example on how to create a namespace named `aliyun`. In this example, the data retention period of the namespace is set to `cms.s1.3xlarge`. The returned result indicates that the namespace is created.
     *
     * @param request - CreateHybridMonitorNamespaceRequest
     *
     * @returns CreateHybridMonitorNamespaceResponse
     *
     * @param CreateHybridMonitorNamespaceRequest $request
     *
     * @return CreateHybridMonitorNamespaceResponse
     */
    public function createHybridMonitorNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridMonitorNamespaceWithOptions($request, $runtime);
    }

    /**
     * Creates a Logstore group of Hybrid Cloud Monitoring.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Simple Log Service is activated. A project and a Logstore are created in Simple Log Service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/54604.html).
     * ### [](#)Operation description
     * This topic provides an example on how to create a Logstore group named `Logstore_test`. The region ID is `cn-hangzhou`. The project is `aliyun-project`. The Logstore is `Logstore-ECS`. The response shows that the Logstore group is created.
     *
     * @param request - CreateHybridMonitorSLSGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHybridMonitorSLSGroupResponse
     *
     * @param CreateHybridMonitorSLSGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateHybridMonitorSLSGroupResponse
     */
    public function createHybridMonitorSLSGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->SLSGroupConfig) {
            @$query['SLSGroupConfig'] = $request->SLSGroupConfig;
        }

        if (null !== $request->SLSGroupDescription) {
            @$query['SLSGroupDescription'] = $request->SLSGroupDescription;
        }

        if (null !== $request->SLSGroupName) {
            @$query['SLSGroupName'] = $request->SLSGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHybridMonitorSLSGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHybridMonitorSLSGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Logstore group of Hybrid Cloud Monitoring.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Simple Log Service is activated. A project and a Logstore are created in Simple Log Service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/54604.html).
     * ### [](#)Operation description
     * This topic provides an example on how to create a Logstore group named `Logstore_test`. The region ID is `cn-hangzhou`. The project is `aliyun-project`. The Logstore is `Logstore-ECS`. The response shows that the Logstore group is created.
     *
     * @param request - CreateHybridMonitorSLSGroupRequest
     *
     * @returns CreateHybridMonitorSLSGroupResponse
     *
     * @param CreateHybridMonitorSLSGroupRequest $request
     *
     * @return CreateHybridMonitorSLSGroupResponse
     */
    public function createHybridMonitorSLSGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridMonitorSLSGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a metric import task for an Alibaba Cloud service or creates a metric for logs imported from Simple Log Service.
     *
     * @remarks
     * # [](#)Prerequisites
     * *   Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * *   If you want to create a metric for logs imported from Simple Log Service, make sure that you have activated Simple Log Service and created a project and a Logstore. For more information, see [Getting Started](https://help.aliyun.com/document_detail/54604.html).
     * # [](#)Description
     * This topic provides an example on how to create a metric import task named `aliyun_task` for Elastic Compute Service (ECS). The task imports the `cpu_total` metric to the `aliyun` namespace. The response shows that the metric import task is created.
     *
     * @param request - CreateHybridMonitorTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHybridMonitorTaskResponse
     *
     * @param CreateHybridMonitorTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateHybridMonitorTaskResponse
     */
    public function createHybridMonitorTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachLabels) {
            @$query['AttachLabels'] = $request->attachLabels;
        }

        if (null !== $request->cloudAccessId) {
            @$query['CloudAccessId'] = $request->cloudAccessId;
        }

        if (null !== $request->collectInterval) {
            @$query['CollectInterval'] = $request->collectInterval;
        }

        if (null !== $request->collectTargetType) {
            @$query['CollectTargetType'] = $request->collectTargetType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->SLSProcessConfig) {
            @$query['SLSProcessConfig'] = $request->SLSProcessConfig;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        if (null !== $request->targetUserIdList) {
            @$query['TargetUserIdList'] = $request->targetUserIdList;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->YARMConfig) {
            @$query['YARMConfig'] = $request->YARMConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHybridMonitorTask',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHybridMonitorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a metric import task for an Alibaba Cloud service or creates a metric for logs imported from Simple Log Service.
     *
     * @remarks
     * # [](#)Prerequisites
     * *   Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * *   If you want to create a metric for logs imported from Simple Log Service, make sure that you have activated Simple Log Service and created a project and a Logstore. For more information, see [Getting Started](https://help.aliyun.com/document_detail/54604.html).
     * # [](#)Description
     * This topic provides an example on how to create a metric import task named `aliyun_task` for Elastic Compute Service (ECS). The task imports the `cpu_total` metric to the `aliyun` namespace. The response shows that the metric import task is created.
     *
     * @param request - CreateHybridMonitorTaskRequest
     *
     * @returns CreateHybridMonitorTaskResponse
     *
     * @param CreateHybridMonitorTaskRequest $request
     *
     * @return CreateHybridMonitorTaskResponse
     */
    public function createHybridMonitorTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridMonitorTaskWithOptions($request, $runtime);
    }

    /**
     * Creates an instant test task.
     *
     * @remarks
     * You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring.
     * This topic provides an example to show how to create an instant test task. The name of the task is `task1`. The tested address is `http://www.aliyun.com`. The test type is `HTTP`. The number of detection points is `1`.
     *
     * @param request - CreateInstantSiteMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstantSiteMonitorResponse
     *
     * @param CreateInstantSiteMonitorRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateInstantSiteMonitorResponse
     */
    public function createInstantSiteMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->agentGroup) {
            @$query['AgentGroup'] = $request->agentGroup;
        }

        if (null !== $request->ispCities) {
            @$query['IspCities'] = $request->ispCities;
        }

        if (null !== $request->optionsJson) {
            @$query['OptionsJson'] = $request->optionsJson;
        }

        if (null !== $request->randomIspCity) {
            @$query['RandomIspCity'] = $request->randomIspCity;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstantSiteMonitor',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstantSiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instant test task.
     *
     * @remarks
     * You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring.
     * This topic provides an example to show how to create an instant test task. The name of the task is `task1`. The tested address is `http://www.aliyun.com`. The test type is `HTTP`. The number of detection points is `1`.
     *
     * @param request - CreateInstantSiteMonitorRequest
     *
     * @returns CreateInstantSiteMonitorResponse
     *
     * @param CreateInstantSiteMonitorRequest $request
     *
     * @return CreateInstantSiteMonitorResponse
     */
    public function createInstantSiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstantSiteMonitorWithOptions($request, $runtime);
    }

    /**
     * Creates a blacklist policy.
     *
     * @remarks
     * ### Background information
     * *   CloudMonitor blocks alert notifications based on the blacklist policies that take effect. To block alert notifications when the value of a metric that belongs to a cloud service reaches the threshold that you specified, add the metric to a blacklist policy.
     * *   CloudMonitor allows you to create blacklist policies only based on threshold metrics. You cannot create blacklist policies based on system events. For more information about the cloud services and the thresholds of the metrics that are supported by CloudMonitor, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     *
     * @param request - CreateMetricRuleBlackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMetricRuleBlackListResponse
     *
     * @param CreateMetricRuleBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMetricRuleBlackListResponse
     */
    public function createMetricRuleBlackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->enableEndTime) {
            @$query['EnableEndTime'] = $request->enableEndTime;
        }

        if (null !== $request->enableStartTime) {
            @$query['EnableStartTime'] = $request->enableStartTime;
        }

        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->scopeType) {
            @$query['ScopeType'] = $request->scopeType;
        }

        if (null !== $request->scopeValue) {
            @$query['ScopeValue'] = $request->scopeValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMetricRuleBlackList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a blacklist policy.
     *
     * @remarks
     * ### Background information
     * *   CloudMonitor blocks alert notifications based on the blacklist policies that take effect. To block alert notifications when the value of a metric that belongs to a cloud service reaches the threshold that you specified, add the metric to a blacklist policy.
     * *   CloudMonitor allows you to create blacklist policies only based on threshold metrics. You cannot create blacklist policies based on system events. For more information about the cloud services and the thresholds of the metrics that are supported by CloudMonitor, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     *
     * @param request - CreateMetricRuleBlackListRequest
     *
     * @returns CreateMetricRuleBlackListResponse
     *
     * @param CreateMetricRuleBlackListRequest $request
     *
     * @return CreateMetricRuleBlackListResponse
     */
    public function createMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * Associates resources with an alert rule.
     *
     * @param request - CreateMetricRuleResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMetricRuleResourcesResponse
     *
     * @param CreateMetricRuleResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMetricRuleResourcesResponse
     */
    public function createMetricRuleResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMetricRuleResources',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMetricRuleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates resources with an alert rule.
     *
     * @param request - CreateMetricRuleResourcesRequest
     *
     * @returns CreateMetricRuleResourcesResponse
     *
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
     * Creates an alert template.
     *
     * @param request - CreateMetricRuleTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMetricRuleTemplateResponse
     *
     * @param CreateMetricRuleTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMetricRuleTemplateResponse
     */
    public function createMetricRuleTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertTemplates) {
            @$query['AlertTemplates'] = $request->alertTemplates;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMetricRuleTemplate',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMetricRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an alert template.
     *
     * @param request - CreateMetricRuleTemplateRequest
     *
     * @returns CreateMetricRuleTemplateResponse
     *
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
     * Creates a task to monitor a process.
     *
     * @param request - CreateMonitorAgentProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorAgentProcessResponse
     *
     * @param CreateMonitorAgentProcessRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMonitorAgentProcessResponse
     */
    public function createMonitorAgentProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->processName) {
            @$query['ProcessName'] = $request->processName;
        }

        if (null !== $request->processUser) {
            @$query['ProcessUser'] = $request->processUser;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorAgentProcess',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitorAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task to monitor a process.
     *
     * @param request - CreateMonitorAgentProcessRequest
     *
     * @returns CreateMonitorAgentProcessResponse
     *
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
     * Creates an application group.
     *
     * @remarks
     * In this example, an application group named `ECS_Group` is created.
     *
     * @param request - CreateMonitorGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorGroupResponse
     *
     * @param CreateMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application group.
     *
     * @remarks
     * In this example, an application group named `ECS_Group` is created.
     *
     * @param request - CreateMonitorGroupRequest
     *
     * @returns CreateMonitorGroupResponse
     *
     * @param CreateMonitorGroupRequest $request
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an application group by using a resource group.
     *
     * @remarks
     * This topic provides an example on how to create an application group by using the resource group `CloudMonitor` and the alert contact group `ECS_Group`. The region ID of the resource group is `cn-hangzhou`.
     *
     * @param request - CreateMonitorGroupByResourceGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorGroupByResourceGroupIdResponse
     *
     * @param CreateMonitorGroupByResourceGroupIdRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateMonitorGroupByResourceGroupIdResponse
     */
    public function createMonitorGroupByResourceGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupList) {
            @$query['ContactGroupList'] = $request->contactGroupList;
        }

        if (null !== $request->enableInstallAgent) {
            @$query['EnableInstallAgent'] = $request->enableInstallAgent;
        }

        if (null !== $request->enableSubscribeEvent) {
            @$query['EnableSubscribeEvent'] = $request->enableSubscribeEvent;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorGroupByResourceGroupId',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitorGroupByResourceGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application group by using a resource group.
     *
     * @remarks
     * This topic provides an example on how to create an application group by using the resource group `CloudMonitor` and the alert contact group `ECS_Group`. The region ID of the resource group is `cn-hangzhou`.
     *
     * @param request - CreateMonitorGroupByResourceGroupIdRequest
     *
     * @returns CreateMonitorGroupByResourceGroupIdResponse
     *
     * @param CreateMonitorGroupByResourceGroupIdRequest $request
     *
     * @return CreateMonitorGroupByResourceGroupIdResponse
     */
    public function createMonitorGroupByResourceGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupByResourceGroupIdWithOptions($request, $runtime);
    }

    /**
     * Adds resources to an application group.
     *
     * @remarks
     * You can add a maximum of 1,000 instances to an application group at a time. You can add a maximum of 3,000 instances of an Alibaba Cloud service to an application group. The total number of instances that you can add to an application group is unlimited.
     * In this example, an Elastic Compute Service (ECS) instance in the `China (Hangzhou)` region is added to the `3607****` application group. The instance ID is `i-2ze26xj5wwy12****` and the instance name is `test-instance-ecs`.
     *
     * @param request - CreateMonitorGroupInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorGroupInstancesResponse
     *
     * @param CreateMonitorGroupInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateMonitorGroupInstancesResponse
     */
    public function createMonitorGroupInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorGroupInstances',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitorGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds resources to an application group.
     *
     * @remarks
     * You can add a maximum of 1,000 instances to an application group at a time. You can add a maximum of 3,000 instances of an Alibaba Cloud service to an application group. The total number of instances that you can add to an application group is unlimited.
     * In this example, an Elastic Compute Service (ECS) instance in the `China (Hangzhou)` region is added to the `3607****` application group. The instance ID is `i-2ze26xj5wwy12****` and the instance name is `test-instance-ecs`.
     *
     * @param request - CreateMonitorGroupInstancesRequest
     *
     * @returns CreateMonitorGroupInstancesResponse
     *
     * @param CreateMonitorGroupInstancesRequest $request
     *
     * @return CreateMonitorGroupInstancesResponse
     */
    public function createMonitorGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * Creates a policy to pause alert notifications for an application group.
     *
     * @remarks
     * If the policy is valid, no alert notifications are sent for the application group.
     * This topic describes how to create a `PauseNotify` policy to pause alert notifications for the `7301****` application group. The StartTime parameter is set to `1622949300000` and the EndTime parameter is set to `1623208500000`. This indicates that the policy is valid from `2021-06-06 11:15:00 UTC+8` to `2021-06-09 11:15:00 UTC+8`.
     *
     * @param request - CreateMonitorGroupNotifyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorGroupNotifyPolicyResponse
     *
     * @param CreateMonitorGroupNotifyPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateMonitorGroupNotifyPolicyResponse
     */
    public function createMonitorGroupNotifyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorGroupNotifyPolicy',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitorGroupNotifyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a policy to pause alert notifications for an application group.
     *
     * @remarks
     * If the policy is valid, no alert notifications are sent for the application group.
     * This topic describes how to create a `PauseNotify` policy to pause alert notifications for the `7301****` application group. The StartTime parameter is set to `1622949300000` and the EndTime parameter is set to `1623208500000`. This indicates that the policy is valid from `2021-06-06 11:15:00 UTC+8` to `2021-06-09 11:15:00 UTC+8`.
     *
     * @param request - CreateMonitorGroupNotifyPolicyRequest
     *
     * @returns CreateMonitorGroupNotifyPolicyResponse
     *
     * @param CreateMonitorGroupNotifyPolicyRequest $request
     *
     * @return CreateMonitorGroupNotifyPolicyResponse
     */
    public function createMonitorGroupNotifyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupNotifyPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a task to monitor a process.
     *
     * @param request - CreateMonitoringAgentProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitoringAgentProcessResponse
     *
     * @param CreateMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateMonitoringAgentProcessResponse
     */
    public function createMonitoringAgentProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->processName) {
            @$query['ProcessName'] = $request->processName;
        }

        if (null !== $request->processUser) {
            @$query['ProcessUser'] = $request->processUser;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMonitoringAgentProcess',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task to monitor a process.
     *
     * @param request - CreateMonitoringAgentProcessRequest
     *
     * @returns CreateMonitoringAgentProcessResponse
     *
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
     * Creates a site monitoring task.
     *
     * @remarks
     * This topic provides an example on how to create a site monitoring task named `HanZhou_ECS1`. The URL that is monitored by the task is `https://www.aliyun.com` and the type of the task is `HTTPS`.
     *
     * @param request - CreateSiteMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSiteMonitorResponse
     *
     * @param CreateSiteMonitorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSiteMonitorResponse
     */
    public function createSiteMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->agentGroup) {
            @$query['AgentGroup'] = $request->agentGroup;
        }

        if (null !== $request->alertIds) {
            @$query['AlertIds'] = $request->alertIds;
        }

        if (null !== $request->customSchedule) {
            @$query['CustomSchedule'] = $request->customSchedule;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispCities) {
            @$query['IspCities'] = $request->ispCities;
        }

        if (null !== $request->optionsJson) {
            @$query['OptionsJson'] = $request->optionsJson;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->vpcConfig) {
            @$query['VpcConfig'] = $request->vpcConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSiteMonitor',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a site monitoring task.
     *
     * @remarks
     * This topic provides an example on how to create a site monitoring task named `HanZhou_ECS1`. The URL that is monitored by the task is `https://www.aliyun.com` and the type of the task is `HTTPS`.
     *
     * @param request - CreateSiteMonitorRequest
     *
     * @returns CreateSiteMonitorResponse
     *
     * @param CreateSiteMonitorRequest $request
     *
     * @return CreateSiteMonitorResponse
     */
    public function createSiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteMonitorWithOptions($request, $runtime);
    }

    /**
     * Defines the range of monitoring data that you want to export. The Cursor information is returned. When you call the BatchExport operation for the first time, you must specify the Cursor information.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ### [](#)Background information
     * You can call this operation to obtain the Cursor information and then call the [BatchExport](https://help.aliyun.com/document_detail/2329847.html) operation to export the monitoring data.
     * ### [](#)Description
     * This topic provides an example on how to define the monitoring data of a specified metric for a specified cloud service. In this example, the namespace of the cloud service is set to `acs_ecs_dashboard`, the metric is set to `cpu_idle`, the start time is set to `1641627000000`, and the end time is set to `1641645000000`. The number of idle CPU cores on your Elastic Compute Service (ECS) instances is measured every 60 seconds from 15:30:00, January 8, 2022 to 20:30:00, January 8, 2022. The `Cursor` information is returned.
     *
     * @param tmpReq - CursorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CursorResponse
     *
     * @param CursorRequest  $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return CursorResponse
     */
    public function cursorWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CursorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->matchers) {
            $request->matchersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->matchers, 'Matchers', 'json');
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->matchersShrink) {
            @$body['Matchers'] = $request->matchersShrink;
        }

        if (null !== $request->metric) {
            @$body['Metric'] = $request->metric;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Cursor',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CursorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Defines the range of monitoring data that you want to export. The Cursor information is returned. When you call the BatchExport operation for the first time, you must specify the Cursor information.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ### [](#)Background information
     * You can call this operation to obtain the Cursor information and then call the [BatchExport](https://help.aliyun.com/document_detail/2329847.html) operation to export the monitoring data.
     * ### [](#)Description
     * This topic provides an example on how to define the monitoring data of a specified metric for a specified cloud service. In this example, the namespace of the cloud service is set to `acs_ecs_dashboard`, the metric is set to `cpu_idle`, the start time is set to `1641627000000`, and the end time is set to `1641645000000`. The number of idle CPU cores on your Elastic Compute Service (ECS) instances is measured every 60 seconds from 15:30:00, January 8, 2022 to 20:30:00, January 8, 2022. The `Cursor` information is returned.
     *
     * @param request - CursorRequest
     *
     * @returns CursorResponse
     *
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
     * Deletes an alert contact.
     *
     * @param request - DeleteContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactResponse
     *
     * @param DeleteContactRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteContactResponse
     */
    public function deleteContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContact',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an alert contact.
     *
     * @param request - DeleteContactRequest
     *
     * @returns DeleteContactResponse
     *
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
     * Deletes an alert contact group.
     *
     * @param request - DeleteContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactGroupResponse
     *
     * @param DeleteContactGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteContactGroupResponse
     */
    public function deleteContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupName) {
            @$query['ContactGroupName'] = $request->contactGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContactGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an alert contact group.
     *
     * @param request - DeleteContactGroupRequest
     *
     * @returns DeleteContactGroupResponse
     *
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
     * Deletes the reported monitoring data of a metric.
     *
     * @param request - DeleteCustomMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomMetricResponse
     *
     * @param DeleteCustomMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCustomMetricResponse
     */
    public function deleteCustomMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->UUID) {
            @$query['UUID'] = $request->UUID;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomMetric',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the reported monitoring data of a metric.
     *
     * @param request - DeleteCustomMetricRequest
     *
     * @returns DeleteCustomMetricResponse
     *
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
     * Deletes a tag rule.
     *
     * @param request - DeleteDynamicTagGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDynamicTagGroupResponse
     *
     * @param DeleteDynamicTagGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDynamicTagGroupResponse
     */
    public function deleteDynamicTagGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dynamicTagRuleId) {
            @$query['DynamicTagRuleId'] = $request->dynamicTagRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDynamicTagGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDynamicTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a tag rule.
     *
     * @param request - DeleteDynamicTagGroupRequest
     *
     * @returns DeleteDynamicTagGroupResponse
     *
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
     * Deletes the push channels of an event-triggered alert rule.
     *
     * @param request - DeleteEventRuleTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventRuleTargetsResponse
     *
     * @param DeleteEventRuleTargetsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteEventRuleTargetsResponse
     */
    public function deleteEventRuleTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEventRuleTargets',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the push channels of an event-triggered alert rule.
     *
     * @param request - DeleteEventRuleTargetsRequest
     *
     * @returns DeleteEventRuleTargetsResponse
     *
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
     * Deletes event-triggered alert rules.
     *
     * @param request - DeleteEventRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventRulesResponse
     *
     * @param DeleteEventRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteEventRulesResponse
     */
    public function deleteEventRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleNames) {
            @$query['RuleNames'] = $request->ruleNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEventRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes event-triggered alert rules.
     *
     * @param request - DeleteEventRulesRequest
     *
     * @returns DeleteEventRulesResponse
     *
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
     * Deletes a configuration set that is used to export monitoring data.
     *
     * @param request - DeleteExporterOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExporterOutputResponse
     *
     * @param DeleteExporterOutputRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteExporterOutputResponse
     */
    public function deleteExporterOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destName) {
            @$query['DestName'] = $request->destName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExporterOutput',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExporterOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a configuration set that is used to export monitoring data.
     *
     * @param request - DeleteExporterOutputRequest
     *
     * @returns DeleteExporterOutputResponse
     *
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
     * Deletes a data export rule.
     *
     * @param request - DeleteExporterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExporterRuleResponse
     *
     * @param DeleteExporterRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteExporterRuleResponse
     */
    public function deleteExporterRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExporterRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExporterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data export rule.
     *
     * @param request - DeleteExporterRuleRequest
     *
     * @returns DeleteExporterRuleResponse
     *
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
     * Deletes a process monitoring task for an application group.
     *
     * @param request - DeleteGroupMonitoringAgentProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupMonitoringAgentProcessResponse
     *
     * @param DeleteGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteGroupMonitoringAgentProcessResponse
     */
    public function deleteGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGroupMonitoringAgentProcess',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGroupMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a process monitoring task for an application group.
     *
     * @param request - DeleteGroupMonitoringAgentProcessRequest
     *
     * @returns DeleteGroupMonitoringAgentProcessResponse
     *
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
     * Deletes availability monitoring tasks.
     *
     * @param request - DeleteHostAvailabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHostAvailabilityResponse
     *
     * @param DeleteHostAvailabilityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteHostAvailabilityResponse
     */
    public function deleteHostAvailabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHostAvailability',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes availability monitoring tasks.
     *
     * @param request - DeleteHostAvailabilityRequest
     *
     * @returns DeleteHostAvailabilityResponse
     *
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
     * Deletes a namespace.
     *
     * @remarks
     * > If a metric import task is created for metrics in a namespace, you cannot delete the namespace unless you delete the task first.
     * This topic provides an example on how to delete a namespace named `aliyun`. The response shows that the namespace is deleted.
     *
     * @param request - DeleteHybridMonitorNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHybridMonitorNamespaceResponse
     *
     * @param DeleteHybridMonitorNamespaceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteHybridMonitorNamespaceResponse
     */
    public function deleteHybridMonitorNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHybridMonitorNamespace',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHybridMonitorNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a namespace.
     *
     * @remarks
     * > If a metric import task is created for metrics in a namespace, you cannot delete the namespace unless you delete the task first.
     * This topic provides an example on how to delete a namespace named `aliyun`. The response shows that the namespace is deleted.
     *
     * @param request - DeleteHybridMonitorNamespaceRequest
     *
     * @returns DeleteHybridMonitorNamespaceResponse
     *
     * @param DeleteHybridMonitorNamespaceRequest $request
     *
     * @return DeleteHybridMonitorNamespaceResponse
     */
    public function deleteHybridMonitorNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridMonitorNamespaceWithOptions($request, $runtime);
    }

    /**
     * Deletes a Logstore group.
     *
     * @remarks
     * This topic provides an example on how to delete a Logstore group named `Logstore_test`. The response shows that the Logstore group is deleted.
     *
     * @param request - DeleteHybridMonitorSLSGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHybridMonitorSLSGroupResponse
     *
     * @param DeleteHybridMonitorSLSGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteHybridMonitorSLSGroupResponse
     */
    public function deleteHybridMonitorSLSGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->SLSGroupName) {
            @$query['SLSGroupName'] = $request->SLSGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHybridMonitorSLSGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHybridMonitorSLSGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Logstore group.
     *
     * @remarks
     * This topic provides an example on how to delete a Logstore group named `Logstore_test`. The response shows that the Logstore group is deleted.
     *
     * @param request - DeleteHybridMonitorSLSGroupRequest
     *
     * @returns DeleteHybridMonitorSLSGroupResponse
     *
     * @param DeleteHybridMonitorSLSGroupRequest $request
     *
     * @return DeleteHybridMonitorSLSGroupResponse
     */
    public function deleteHybridMonitorSLSGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridMonitorSLSGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a metric import task for Alibaba Cloud services or a metric for the logs that are imported from Log Service.
     *
     * @remarks
     * This topic provides an example on how to delete a metric import task whose ID is `36****`. The returned result indicates that the metric import task is deleted.
     *
     * @param request - DeleteHybridMonitorTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHybridMonitorTaskResponse
     *
     * @param DeleteHybridMonitorTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteHybridMonitorTaskResponse
     */
    public function deleteHybridMonitorTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHybridMonitorTask',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHybridMonitorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a metric import task for Alibaba Cloud services or a metric for the logs that are imported from Log Service.
     *
     * @remarks
     * This topic provides an example on how to delete a metric import task whose ID is `36****`. The returned result indicates that the metric import task is deleted.
     *
     * @param request - DeleteHybridMonitorTaskRequest
     *
     * @returns DeleteHybridMonitorTaskResponse
     *
     * @param DeleteHybridMonitorTaskRequest $request
     *
     * @return DeleteHybridMonitorTaskResponse
     */
    public function deleteHybridMonitorTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridMonitorTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes a log monitoring metric.
     *
     * @param request - DeleteLogMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogMonitorResponse
     *
     * @param DeleteLogMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLogMonitorResponse
     */
    public function deleteLogMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logId) {
            @$query['LogId'] = $request->logId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLogMonitor',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLogMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a log monitoring metric.
     *
     * @param request - DeleteLogMonitorRequest
     *
     * @returns DeleteLogMonitorResponse
     *
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
     * Deletes multiple blacklist policies at a time.
     *
     * @param request - DeleteMetricRuleBlackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMetricRuleBlackListResponse
     *
     * @param DeleteMetricRuleBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMetricRuleBlackListResponse
     */
    public function deleteMetricRuleBlackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMetricRuleBlackList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple blacklist policies at a time.
     *
     * @param request - DeleteMetricRuleBlackListRequest
     *
     * @returns DeleteMetricRuleBlackListResponse
     *
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
     * Disassociates resources from an alert rule.
     *
     * @param request - DeleteMetricRuleResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMetricRuleResourcesResponse
     *
     * @param DeleteMetricRuleResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMetricRuleResourcesResponse
     */
    public function deleteMetricRuleResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMetricRuleResources',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMetricRuleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates resources from an alert rule.
     *
     * @param request - DeleteMetricRuleResourcesRequest
     *
     * @returns DeleteMetricRuleResourcesResponse
     *
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
     * Delete the push channels of an alert rule.
     *
     * @param request - DeleteMetricRuleTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMetricRuleTargetsResponse
     *
     * @param DeleteMetricRuleTargetsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->targetIds) {
            @$query['TargetIds'] = $request->targetIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMetricRuleTargets',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMetricRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete the push channels of an alert rule.
     *
     * @param request - DeleteMetricRuleTargetsRequest
     *
     * @returns DeleteMetricRuleTargetsResponse
     *
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
     * Deletes an alert template.
     *
     * @param request - DeleteMetricRuleTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMetricRuleTemplateResponse
     *
     * @param DeleteMetricRuleTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteMetricRuleTemplateResponse
     */
    public function deleteMetricRuleTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMetricRuleTemplate',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMetricRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an alert template.
     *
     * @param request - DeleteMetricRuleTemplateRequest
     *
     * @returns DeleteMetricRuleTemplateResponse
     *
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
     * Deletes one or more alert rules.
     *
     * @param request - DeleteMetricRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMetricRulesResponse
     *
     * @param DeleteMetricRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMetricRulesResponse
     */
    public function deleteMetricRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMetricRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more alert rules.
     *
     * @param request - DeleteMetricRulesRequest
     *
     * @returns DeleteMetricRulesResponse
     *
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
     * Deletes an application group.
     *
     * @param request - DeleteMonitorGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorGroupResponse
     *
     * @param DeleteMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application group.
     *
     * @param request - DeleteMonitorGroupRequest
     *
     * @returns DeleteMonitorGroupResponse
     *
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
     * Deletes a rule that is used to dynamically add the instances of a service to an application group.
     *
     * @param request - DeleteMonitorGroupDynamicRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorGroupDynamicRuleResponse
     *
     * @param DeleteMonitorGroupDynamicRuleRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteMonitorGroupDynamicRuleResponse
     */
    public function deleteMonitorGroupDynamicRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorGroupDynamicRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMonitorGroupDynamicRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a rule that is used to dynamically add the instances of a service to an application group.
     *
     * @param request - DeleteMonitorGroupDynamicRuleRequest
     *
     * @returns DeleteMonitorGroupDynamicRuleResponse
     *
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
     * Removes instances from an application group.
     *
     * @param request - DeleteMonitorGroupInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorGroupInstancesResponse
     *
     * @param DeleteMonitorGroupInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteMonitorGroupInstancesResponse
     */
    public function deleteMonitorGroupInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorGroupInstances',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMonitorGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes instances from an application group.
     *
     * @param request - DeleteMonitorGroupInstancesRequest
     *
     * @returns DeleteMonitorGroupInstancesResponse
     *
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
     * Deletes a policy that is used to pause alert notifications for an application group.
     *
     * @param request - DeleteMonitorGroupNotifyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorGroupNotifyPolicyResponse
     *
     * @param DeleteMonitorGroupNotifyPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteMonitorGroupNotifyPolicyResponse
     */
    public function deleteMonitorGroupNotifyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorGroupNotifyPolicy',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMonitorGroupNotifyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a policy that is used to pause alert notifications for an application group.
     *
     * @param request - DeleteMonitorGroupNotifyPolicyRequest
     *
     * @returns DeleteMonitorGroupNotifyPolicyResponse
     *
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
     * Disables monitoring on a process.
     *
     * @param request - DeleteMonitoringAgentProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitoringAgentProcessResponse
     *
     * @param DeleteMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteMonitoringAgentProcessResponse
     */
    public function deleteMonitoringAgentProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->processId) {
            @$query['ProcessId'] = $request->processId;
        }

        if (null !== $request->processName) {
            @$query['ProcessName'] = $request->processName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMonitoringAgentProcess',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables monitoring on a process.
     *
     * @param request - DeleteMonitoringAgentProcessRequest
     *
     * @returns DeleteMonitoringAgentProcessResponse
     *
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
     * Deletes one or more site monitoring tasks.
     *
     * @param request - DeleteSiteMonitorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSiteMonitorsResponse
     *
     * @param DeleteSiteMonitorsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSiteMonitorsResponse
     */
    public function deleteSiteMonitorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isDeleteAlarms) {
            @$query['IsDeleteAlarms'] = $request->isDeleteAlarms;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSiteMonitors',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSiteMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more site monitoring tasks.
     *
     * @param request - DeleteSiteMonitorsRequest
     *
     * @returns DeleteSiteMonitorsResponse
     *
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
     * Queries the details of initiative alert rules.
     *
     * @param request - DescribeActiveMetricRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveMetricRuleListResponse
     *
     * @param DescribeActiveMetricRuleListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeActiveMetricRuleListResponse
     */
    public function describeActiveMetricRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveMetricRuleList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveMetricRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of initiative alert rules.
     *
     * @param request - DescribeActiveMetricRuleListRequest
     *
     * @returns DescribeActiveMetricRuleListResponse
     *
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
     * Queries historical alerts.
     *
     * @remarks
     * This API operation is no longer maintained. We recommend that you call the [DescribeAlertLogList](https://help.aliyun.com/document_detail/201087.html) operation.
     *
     * @deprecated openAPI DescribeAlertHistoryList is deprecated, please use Cms::2019-01-01::DescribeAlertLogList instead
     *
     * @param request - DescribeAlertHistoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertHistoryListResponse
     *
     * @param DescribeAlertHistoryListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ascending) {
            @$query['Ascending'] = $request->ascending;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertHistoryList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries historical alerts.
     *
     * @remarks
     * This API operation is no longer maintained. We recommend that you call the [DescribeAlertLogList](https://help.aliyun.com/document_detail/201087.html) operation.
     *
     * @deprecated openAPI DescribeAlertHistoryList is deprecated, please use Cms::2019-01-01::DescribeAlertLogList instead
     *
     * @param request - DescribeAlertHistoryListRequest
     *
     * @returns DescribeAlertHistoryListResponse
     *
     * @param DescribeAlertHistoryListRequest $request
     *
     * @return DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertHistoryListWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of alert logs.
     *
     * @remarks
     * Queries the statistics of alert logs.
     * This topic provides an example on how to query the statistics of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *
     * @param request - DescribeAlertLogCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertLogCountResponse
     *
     * @param DescribeAlertLogCountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAlertLogCountResponse
     */
    public function describeAlertLogCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroup) {
            @$query['ContactGroup'] = $request->contactGroup;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->lastMin) {
            @$query['LastMin'] = $request->lastMin;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->sendStatus) {
            @$query['SendStatus'] = $request->sendStatus;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertLogCount',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertLogCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of alert logs.
     *
     * @remarks
     * Queries the statistics of alert logs.
     * This topic provides an example on how to query the statistics of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *
     * @param request - DescribeAlertLogCountRequest
     *
     * @returns DescribeAlertLogCountResponse
     *
     * @param DescribeAlertLogCountRequest $request
     *
     * @return DescribeAlertLogCountResponse
     */
    public function describeAlertLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertLogCountWithOptions($request, $runtime);
    }

    /**
     * Queries the number of alert logs that are generated during each interval within a period of time.
     *
     * @remarks
     * This topic provides an example on how to query the number of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *
     * @param request - DescribeAlertLogHistogramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertLogHistogramResponse
     *
     * @param DescribeAlertLogHistogramRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAlertLogHistogramResponse
     */
    public function describeAlertLogHistogramWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroup) {
            @$query['ContactGroup'] = $request->contactGroup;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->lastMin) {
            @$query['LastMin'] = $request->lastMin;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->sendStatus) {
            @$query['SendStatus'] = $request->sendStatus;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertLogHistogram',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertLogHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of alert logs that are generated during each interval within a period of time.
     *
     * @remarks
     * This topic provides an example on how to query the number of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *
     * @param request - DescribeAlertLogHistogramRequest
     *
     * @returns DescribeAlertLogHistogramResponse
     *
     * @param DescribeAlertLogHistogramRequest $request
     *
     * @return DescribeAlertLogHistogramResponse
     */
    public function describeAlertLogHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertLogHistogramWithOptions($request, $runtime);
    }

    /**
     * Queries alert logs.
     *
     * @remarks
     * You can call the operation to query only the alert logs within the last year.
     * This topic provides an example to show how to query the alert logs of Elastic Compute Service (ECS) based on the `product` dimension.
     *
     * @param request - DescribeAlertLogListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertLogListResponse
     *
     * @param DescribeAlertLogListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAlertLogListResponse
     */
    public function describeAlertLogListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroup) {
            @$query['ContactGroup'] = $request->contactGroup;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->lastMin) {
            @$query['LastMin'] = $request->lastMin;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->sendStatus) {
            @$query['SendStatus'] = $request->sendStatus;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertLogList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alert logs.
     *
     * @remarks
     * You can call the operation to query only the alert logs within the last year.
     * This topic provides an example to show how to query the alert logs of Elastic Compute Service (ECS) based on the `product` dimension.
     *
     * @param request - DescribeAlertLogListRequest
     *
     * @returns DescribeAlertLogListResponse
     *
     * @param DescribeAlertLogListRequest $request
     *
     * @return DescribeAlertLogListResponse
     */
    public function describeAlertLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertLogListWithOptions($request, $runtime);
    }

    /**
     * Queries the resources for which active alerts are triggered based on an alert rule.
     *
     * @param request - DescribeAlertingMetricRuleResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertingMetricRuleResourcesResponse
     *
     * @param DescribeAlertingMetricRuleResourcesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAlertingMetricRuleResourcesResponse
     */
    public function describeAlertingMetricRuleResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertingMetricRuleResources',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertingMetricRuleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources for which active alerts are triggered based on an alert rule.
     *
     * @param request - DescribeAlertingMetricRuleResourcesRequest
     *
     * @returns DescribeAlertingMetricRuleResourcesResponse
     *
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
     * Call the DescribeContactGroupList interface to query the list of alarm contact groups.
     *
     * @param request - DescribeContactGroupListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContactGroupListResponse
     *
     * @param DescribeContactGroupListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeContactGroupListResponse
     */
    public function describeContactGroupListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeContactGroupList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContactGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the DescribeContactGroupList interface to query the list of alarm contact groups.
     *
     * @param request - DescribeContactGroupListRequest
     *
     * @returns DescribeContactGroupListResponse
     *
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
     * Queries alert contacts.
     *
     * @param request - DescribeContactListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContactListResponse
     *
     * @param DescribeContactListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeContactListResponse
     */
    public function describeContactListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chanelType) {
            @$query['ChanelType'] = $request->chanelType;
        }

        if (null !== $request->chanelValue) {
            @$query['ChanelValue'] = $request->chanelValue;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
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
            'action' => 'DescribeContactList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContactListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alert contacts.
     *
     * @param request - DescribeContactListRequest
     *
     * @returns DescribeContactListResponse
     *
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
     * Queries the alert contacts in an alert contact group.
     *
     * @param request - DescribeContactListByContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContactListByContactGroupResponse
     *
     * @param DescribeContactListByContactGroupRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeContactListByContactGroupResponse
     */
    public function describeContactListByContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupName) {
            @$query['ContactGroupName'] = $request->contactGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContactListByContactGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContactListByContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the alert contacts in an alert contact group.
     *
     * @param request - DescribeContactListByContactGroupRequest
     *
     * @returns DescribeContactListByContactGroupResponse
     *
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
     * Queries the details of a custom event.
     *
     * @param request - DescribeCustomEventAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomEventAttributeResponse
     *
     * @param DescribeCustomEventAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCustomEventAttributeResponse
     */
    public function describeCustomEventAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKeywords) {
            @$query['SearchKeywords'] = $request->searchKeywords;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomEventAttribute',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomEventAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a custom event.
     *
     * @param request - DescribeCustomEventAttributeRequest
     *
     * @returns DescribeCustomEventAttributeResponse
     *
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
     * Queries the number of times that a custom event occurred within a period of time.
     *
     * @remarks
     * >  This operation queries the number of times that a custom event occurred for each service.
     *
     * @param request - DescribeCustomEventCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomEventCountResponse
     *
     * @param DescribeCustomEventCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCustomEventCountResponse
     */
    public function describeCustomEventCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->searchKeywords) {
            @$query['SearchKeywords'] = $request->searchKeywords;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomEventCount',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomEventCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of times that a custom event occurred within a period of time.
     *
     * @remarks
     * >  This operation queries the number of times that a custom event occurred for each service.
     *
     * @param request - DescribeCustomEventCountRequest
     *
     * @returns DescribeCustomEventCountResponse
     *
     * @param DescribeCustomEventCountRequest $request
     *
     * @return DescribeCustomEventCountResponse
     */
    public function describeCustomEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventCountWithOptions($request, $runtime);
    }

    /**
     * Queries the number of times that a custom event occurred during each interval within a period of time.
     *
     * @param request - DescribeCustomEventHistogramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomEventHistogramResponse
     *
     * @param DescribeCustomEventHistogramRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCustomEventHistogramResponse
     */
    public function describeCustomEventHistogramWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->searchKeywords) {
            @$query['SearchKeywords'] = $request->searchKeywords;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomEventHistogram',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomEventHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of times that a custom event occurred during each interval within a period of time.
     *
     * @param request - DescribeCustomEventHistogramRequest
     *
     * @returns DescribeCustomEventHistogramResponse
     *
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
     * Queries the reported monitoring data.
     *
     * @remarks
     * >  You can call the DescribeMetricList operation to query the metrics of cloud services. For more information, see [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html).
     *
     * @param request - DescribeCustomMetricListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomMetricListResponse
     *
     * @param DescribeCustomMetricListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCustomMetricListResponse
     */
    public function describeCustomMetricListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
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
            'action' => 'DescribeCustomMetricList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the reported monitoring data.
     *
     * @remarks
     * >  You can call the DescribeMetricList operation to query the metrics of cloud services. For more information, see [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html).
     *
     * @param request - DescribeCustomMetricListRequest
     *
     * @returns DescribeCustomMetricListResponse
     *
     * @param DescribeCustomMetricListRequest $request
     *
     * @return DescribeCustomMetricListResponse
     */
    public function describeCustomMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomMetricListWithOptions($request, $runtime);
    }

    /**
     * Queries tag rules.
     *
     * @remarks
     * This topic provides an example to show how to query tag rules that are related to `tagkey1`. The sample responses indicate that two tag rules are found. The rule IDs are `1536df65-a719-429d-8813-73cc40d7****` and `56e8cebb-b3d7-4a91-9880-78a8c84f****`.
     *
     * @param request - DescribeDynamicTagRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDynamicTagRuleListResponse
     *
     * @param DescribeDynamicTagRuleListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDynamicTagRuleListResponse
     */
    public function describeDynamicTagRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dynamicTagRuleId) {
            @$query['DynamicTagRuleId'] = $request->dynamicTagRuleId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->tagRegionId) {
            @$query['TagRegionId'] = $request->tagRegionId;
        }

        if (null !== $request->tagValue) {
            @$query['TagValue'] = $request->tagValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDynamicTagRuleList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDynamicTagRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tag rules.
     *
     * @remarks
     * This topic provides an example to show how to query tag rules that are related to `tagkey1`. The sample responses indicate that two tag rules are found. The rule IDs are `1536df65-a719-429d-8813-73cc40d7****` and `56e8cebb-b3d7-4a91-9880-78a8c84f****`.
     *
     * @param request - DescribeDynamicTagRuleListRequest
     *
     * @returns DescribeDynamicTagRuleListResponse
     *
     * @param DescribeDynamicTagRuleListRequest $request
     *
     * @return DescribeDynamicTagRuleListResponse
     */
    public function describeDynamicTagRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDynamicTagRuleListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an event-triggered alert rule.
     *
     * @remarks
     * This topic provides an example to show how to query the details of an event-triggered alert rule named `testRule`.
     *
     * @param request - DescribeEventRuleAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventRuleAttributeResponse
     *
     * @param DescribeEventRuleAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEventRuleAttributeResponse
     */
    public function describeEventRuleAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventRuleAttribute',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an event-triggered alert rule.
     *
     * @remarks
     * This topic provides an example to show how to query the details of an event-triggered alert rule named `testRule`.
     *
     * @param request - DescribeEventRuleAttributeRequest
     *
     * @returns DescribeEventRuleAttributeResponse
     *
     * @param DescribeEventRuleAttributeRequest $request
     *
     * @return DescribeEventRuleAttributeResponse
     */
    public function describeEventRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries event-triggered alert rules.
     *
     * @param request - DescribeEventRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventRuleListResponse
     *
     * @param DescribeEventRuleListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEventRuleListResponse
     */
    public function describeEventRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->isEnable) {
            @$query['IsEnable'] = $request->isEnable;
        }

        if (null !== $request->namePrefix) {
            @$query['NamePrefix'] = $request->namePrefix;
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
            'action' => 'DescribeEventRuleList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries event-triggered alert rules.
     *
     * @param request - DescribeEventRuleListRequest
     *
     * @returns DescribeEventRuleListResponse
     *
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
     * Queries event-triggered alert rules.
     *
     * @remarks
     * This topic provides an example to show how to query the details of an event-triggered alert rule named `testRule`.
     *
     * @param request - DescribeEventRuleTargetListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventRuleTargetListResponse
     *
     * @param DescribeEventRuleTargetListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEventRuleTargetListResponse
     */
    public function describeEventRuleTargetListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventRuleTargetList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventRuleTargetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries event-triggered alert rules.
     *
     * @remarks
     * This topic provides an example to show how to query the details of an event-triggered alert rule named `testRule`.
     *
     * @param request - DescribeEventRuleTargetListRequest
     *
     * @returns DescribeEventRuleTargetListResponse
     *
     * @param DescribeEventRuleTargetListRequest $request
     *
     * @return DescribeEventRuleTargetListResponse
     */
    public function describeEventRuleTargetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleTargetListWithOptions($request, $runtime);
    }

    /**
     * Queries configuration sets that are used to export monitoring data.
     *
     * @param request - DescribeExporterOutputListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExporterOutputListResponse
     *
     * @param DescribeExporterOutputListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeExporterOutputListResponse
     */
    public function describeExporterOutputListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeExporterOutputList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExporterOutputListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries configuration sets that are used to export monitoring data.
     *
     * @param request - DescribeExporterOutputListRequest
     *
     * @returns DescribeExporterOutputListResponse
     *
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
     * Queries data export rules.
     *
     * @param request - DescribeExporterRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExporterRuleListResponse
     *
     * @param DescribeExporterRuleListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeExporterRuleListResponse
     */
    public function describeExporterRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeExporterRuleList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExporterRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries data export rules.
     *
     * @param request - DescribeExporterRuleListRequest
     *
     * @returns DescribeExporterRuleListResponse
     *
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
     * Queries the process monitoring tasks for an application group.
     *
     * @remarks
     * You can create a process monitoring task to monitor all or the specified Elastic Compute Service (ECS) instances in an application group and configure alert rules for the process monitoring task.
     *
     * @param request - DescribeGroupMonitoringAgentProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupMonitoringAgentProcessResponse
     *
     * @param DescribeGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeGroupMonitoringAgentProcessResponse
     */
    public function describeGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processName) {
            @$query['ProcessName'] = $request->processName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupMonitoringAgentProcess',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the process monitoring tasks for an application group.
     *
     * @remarks
     * You can create a process monitoring task to monitor all or the specified Elastic Compute Service (ECS) instances in an application group and configure alert rules for the process monitoring task.
     *
     * @param request - DescribeGroupMonitoringAgentProcessRequest
     *
     * @returns DescribeGroupMonitoringAgentProcessResponse
     *
     * @param DescribeGroupMonitoringAgentProcessRequest $request
     *
     * @return DescribeGroupMonitoringAgentProcessResponse
     */
    public function describeGroupMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * Queries availability monitoring tasks.
     *
     * @remarks
     * This topic provides an example to show how to query all the availability monitoring tasks of your Alibaba Cloud account. The sample responses indicate that the account has one availability monitoring task named `ecs_instance`.
     *
     * @param request - DescribeHostAvailabilityListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHostAvailabilityListResponse
     *
     * @param DescribeHostAvailabilityListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHostAvailabilityListResponse
     */
    public function describeHostAvailabilityListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHostAvailabilityList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHostAvailabilityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries availability monitoring tasks.
     *
     * @remarks
     * This topic provides an example to show how to query all the availability monitoring tasks of your Alibaba Cloud account. The sample responses indicate that the account has one availability monitoring task named `ecs_instance`.
     *
     * @param request - DescribeHostAvailabilityListRequest
     *
     * @returns DescribeHostAvailabilityListResponse
     *
     * @param DescribeHostAvailabilityListRequest $request
     *
     * @return DescribeHostAvailabilityListResponse
     */
    public function describeHostAvailabilityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostAvailabilityListWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring data in a namespace.
     *
     * @remarks
     * ## [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ## [](#)Limits
     * The size of monitoring data that is returned in each call cannot exceed 1.5 MB. If the returned data reaches the upper limit, the query fails. You must reset the query conditions.
     * ## [](#)Operation description
     * This topic provides an example to show how to query the monitoring data of the `AliyunEcs_cpu_total` metric in the `default-aliyun` namespace from `1653804865` (14:14:25 on May 29, 2022) to `1653805225` (14:20:25 on May 29, 2022).
     *
     * @param request - DescribeHybridMonitorDataListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridMonitorDataListResponse
     *
     * @param DescribeHybridMonitorDataListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHybridMonitorDataListResponse
     */
    public function describeHybridMonitorDataListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->promSQL) {
            @$query['PromSQL'] = $request->promSQL;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridMonitorDataList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridMonitorDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data in a namespace.
     *
     * @remarks
     * ## [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ## [](#)Limits
     * The size of monitoring data that is returned in each call cannot exceed 1.5 MB. If the returned data reaches the upper limit, the query fails. You must reset the query conditions.
     * ## [](#)Operation description
     * This topic provides an example to show how to query the monitoring data of the `AliyunEcs_cpu_total` metric in the `default-aliyun` namespace from `1653804865` (14:14:25 on May 29, 2022) to `1653805225` (14:20:25 on May 29, 2022).
     *
     * @param request - DescribeHybridMonitorDataListRequest
     *
     * @returns DescribeHybridMonitorDataListResponse
     *
     * @param DescribeHybridMonitorDataListRequest $request
     *
     * @return DescribeHybridMonitorDataListResponse
     */
    public function describeHybridMonitorDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridMonitorDataListWithOptions($request, $runtime);
    }

    /**
     * Queries namespaces and the details of the related metric import tasks.
     *
     * @remarks
     * In this example, all namespaces within the current account are queried. The response shows that the current account has only one namespace named `aliyun-test`.
     *
     * @param request - DescribeHybridMonitorNamespaceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridMonitorNamespaceListResponse
     *
     * @param DescribeHybridMonitorNamespaceListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeHybridMonitorNamespaceListResponse
     */
    public function describeHybridMonitorNamespaceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->showTaskStatistic) {
            @$query['ShowTaskStatistic'] = $request->showTaskStatistic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridMonitorNamespaceList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridMonitorNamespaceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries namespaces and the details of the related metric import tasks.
     *
     * @remarks
     * In this example, all namespaces within the current account are queried. The response shows that the current account has only one namespace named `aliyun-test`.
     *
     * @param request - DescribeHybridMonitorNamespaceListRequest
     *
     * @returns DescribeHybridMonitorNamespaceListResponse
     *
     * @param DescribeHybridMonitorNamespaceListRequest $request
     *
     * @return DescribeHybridMonitorNamespaceListResponse
     */
    public function describeHybridMonitorNamespaceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridMonitorNamespaceListWithOptions($request, $runtime);
    }

    /**
     * Queries Logstore groups.
     *
     * @remarks
     * In this example, all Logstore groups within the current account are queried. The response shows that the current account has two Logstore groups: `Logstore_test` and `Logstore_aliyun`.
     *
     * @param request - DescribeHybridMonitorSLSGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridMonitorSLSGroupResponse
     *
     * @param DescribeHybridMonitorSLSGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHybridMonitorSLSGroupResponse
     */
    public function describeHybridMonitorSLSGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->SLSGroupName) {
            @$query['SLSGroupName'] = $request->SLSGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridMonitorSLSGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridMonitorSLSGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Logstore groups.
     *
     * @remarks
     * In this example, all Logstore groups within the current account are queried. The response shows that the current account has two Logstore groups: `Logstore_test` and `Logstore_aliyun`.
     *
     * @param request - DescribeHybridMonitorSLSGroupRequest
     *
     * @returns DescribeHybridMonitorSLSGroupResponse
     *
     * @param DescribeHybridMonitorSLSGroupRequest $request
     *
     * @return DescribeHybridMonitorSLSGroupResponse
     */
    public function describeHybridMonitorSLSGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridMonitorSLSGroupWithOptions($request, $runtime);
    }

    /**
     * Queries metric import tasks.
     *
     * @remarks
     * This topic provides an example on how to query all metric import tasks that belong to the current Alibaba Cloud account. The returned result indicates that the current account has only one metric import task. The metric import task is named `aliyun_task`.
     *
     * @param request - DescribeHybridMonitorTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridMonitorTaskListResponse
     *
     * @param DescribeHybridMonitorTaskListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHybridMonitorTaskListResponse
     */
    public function describeHybridMonitorTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->includeAliyunTask) {
            @$query['IncludeAliyunTask'] = $request->includeAliyunTask;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridMonitorTaskList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridMonitorTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries metric import tasks.
     *
     * @remarks
     * This topic provides an example on how to query all metric import tasks that belong to the current Alibaba Cloud account. The returned result indicates that the current account has only one metric import task. The metric import task is named `aliyun_task`.
     *
     * @param request - DescribeHybridMonitorTaskListRequest
     *
     * @returns DescribeHybridMonitorTaskListResponse
     *
     * @param DescribeHybridMonitorTaskListRequest $request
     *
     * @return DescribeHybridMonitorTaskListResponse
     */
    public function describeHybridMonitorTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridMonitorTaskListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a log monitoring metric.
     *
     * @param request - DescribeLogMonitorAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogMonitorAttributeResponse
     *
     * @param DescribeLogMonitorAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLogMonitorAttributeResponse
     */
    public function describeLogMonitorAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogMonitorAttribute',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogMonitorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a log monitoring metric.
     *
     * @param request - DescribeLogMonitorAttributeRequest
     *
     * @returns DescribeLogMonitorAttributeResponse
     *
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
     * Queries log monitoring metrics.
     *
     * @param request - DescribeLogMonitorListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogMonitorListResponse
     *
     * @param DescribeLogMonitorListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeLogMonitorListResponse
     */
    public function describeLogMonitorListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchValue) {
            @$query['SearchValue'] = $request->searchValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogMonitorList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogMonitorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries log monitoring metrics.
     *
     * @param request - DescribeLogMonitorListRequest
     *
     * @returns DescribeLogMonitorListResponse
     *
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
     * Queries the monitoring data of a metric for a cloud service.
     *
     * @remarks
     * ### [](#)Limits
     * *   The total free quota is 1 million calls per month for the DescribeMetricLast, DescribeMetricList, DescribeMetricData, and DescribeMetricTop operations. If the free quota is used up and CloudMonitor Basic (pay-as-you-go) is not activated, these API operations can no longer be called as expected. If you have activated CloudMonitor Basic (pay-as-you-go), these API operations can still be called even if the free quota is used up. If the free quota is used up, you are automatically charged for the excess usage based on the pay-as-you-go billing method. For more information about how to activate CloudMonitor Basic (pay-as-you-go), see [Enable the pay-as-you-go billing method](https://common-buy.aliyun.com/?spm=a2c4g.11186623.0.0.6c8f3481IbSHgG\\&commodityCode=cms_basic_public_cn\\&from_biz_channel=help_bill).
     * *   Each API operation can be called up to 10 times per second. An Alibaba Cloud account and the Resource Access Management (RAM) users within the account share the quota.
     * ### [](#)Description
     * >  Different from [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html), the DescribeMetricData operation provides statistical features. You can set the Dimension parameter to `{"instanceId": "i-abcdefgh12****"}` to aggregate all data of your Alibaba Cloud account.
     * This topic provides an example on how to query the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`.
     *
     * @param request - DescribeMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricDataResponse
     *
     * @param DescribeMetricDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricDataResponse
     */
    public function describeMetricDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->express) {
            @$query['Express'] = $request->express;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricData',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of a metric for a cloud service.
     *
     * @remarks
     * ### [](#)Limits
     * *   The total free quota is 1 million calls per month for the DescribeMetricLast, DescribeMetricList, DescribeMetricData, and DescribeMetricTop operations. If the free quota is used up and CloudMonitor Basic (pay-as-you-go) is not activated, these API operations can no longer be called as expected. If you have activated CloudMonitor Basic (pay-as-you-go), these API operations can still be called even if the free quota is used up. If the free quota is used up, you are automatically charged for the excess usage based on the pay-as-you-go billing method. For more information about how to activate CloudMonitor Basic (pay-as-you-go), see [Enable the pay-as-you-go billing method](https://common-buy.aliyun.com/?spm=a2c4g.11186623.0.0.6c8f3481IbSHgG\\&commodityCode=cms_basic_public_cn\\&from_biz_channel=help_bill).
     * *   Each API operation can be called up to 10 times per second. An Alibaba Cloud account and the Resource Access Management (RAM) users within the account share the quota.
     * ### [](#)Description
     * >  Different from [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html), the DescribeMetricData operation provides statistical features. You can set the Dimension parameter to `{"instanceId": "i-abcdefgh12****"}` to aggregate all data of your Alibaba Cloud account.
     * This topic provides an example on how to query the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`.
     *
     * @param request - DescribeMetricDataRequest
     *
     * @returns DescribeMetricDataResponse
     *
     * @param DescribeMetricDataRequest $request
     *
     * @return DescribeMetricDataResponse
     */
    public function describeMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricDataWithOptions($request, $runtime);
    }

    /**
     * Queries the latest monitoring data of a metric.
     *
     * @remarks
     * ### [](#)Limits
     * *   The total free quota is 1 million calls per month for the DescribeMetricLast, DescribeMetricList, DescribeMetricData, and DescribeMetricTop operations. If the free quota is used up and CloudMonitor Basic (pay-as-you-go) is not activated, these API operations can no longer be called as expected. If you have activated CloudMonitor Basic (pay-as-you-go), these API operations can still be called even if the free quota is used up. After the free quota is used up, you are charged for the excess usage based on the pay-as-you-go billing method. For more information about how to activate CloudMonitor Basic (pay-as-you-go), see [Enable the pay-as-you-go billing method](https://common-buy.aliyun.com/?spm=a2c4g.11186623.0.0.6c8f3481IbSHgG\\&commodityCode=cms_basic_public_cn\\&from_biz_channel=help_bill).
     * *   Each API operation can be called up to 50 times per second. An Alibaba Cloud account and the Resource Access Management (RAM) users within the account share the quota.
     * >  If `Throttling.User` or `Request was denied due to user flow control` is returned when you call an API operation, the API operation is throttled. For more information about how to handle the issue, see [How do I handle the throttling of a query API?](https://help.aliyun.com/document_detail/2615031.html)
     * ### [](#)Precautions
     * The storage duration of the monitoring data of each cloud service is related to the `Period` parameter (statistical period). A larger value of the `Period` parameter indicates that the monitoring data is distributed in a larger time range and the storage duration of the monitoring data is longer. The following list describes the specific relationships:
     * *   The storage duration is 7 days if the value of the `Period` parameter is less than 60 seconds.
     * *   The storage duration is 31 days if the value of the `Period` parameter is 60 seconds.
     * *   The storage duration is 91 days if the value of the `Period` parameter is greater than or equal to 300 seconds.
     * ### [](#)Operation description
     * This topic provides an example on how to query the latest monitoring data of the `CPUUtilization` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The returned result indicates that the monitoring data for the instance `i-abcdefgh12****` of the account `123456789876****` is queried at an interval of 60 seconds. The maximum, minimum, and average values of the metric are 100, 93.1, and 99.52.
     *
     * @param request - DescribeMetricLastRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricLastResponse
     *
     * @param DescribeMetricLastRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricLastResponse
     */
    public function describeMetricLastWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->express) {
            @$query['Express'] = $request->express;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricLast',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricLastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the latest monitoring data of a metric.
     *
     * @remarks
     * ### [](#)Limits
     * *   The total free quota is 1 million calls per month for the DescribeMetricLast, DescribeMetricList, DescribeMetricData, and DescribeMetricTop operations. If the free quota is used up and CloudMonitor Basic (pay-as-you-go) is not activated, these API operations can no longer be called as expected. If you have activated CloudMonitor Basic (pay-as-you-go), these API operations can still be called even if the free quota is used up. After the free quota is used up, you are charged for the excess usage based on the pay-as-you-go billing method. For more information about how to activate CloudMonitor Basic (pay-as-you-go), see [Enable the pay-as-you-go billing method](https://common-buy.aliyun.com/?spm=a2c4g.11186623.0.0.6c8f3481IbSHgG\\&commodityCode=cms_basic_public_cn\\&from_biz_channel=help_bill).
     * *   Each API operation can be called up to 50 times per second. An Alibaba Cloud account and the Resource Access Management (RAM) users within the account share the quota.
     * >  If `Throttling.User` or `Request was denied due to user flow control` is returned when you call an API operation, the API operation is throttled. For more information about how to handle the issue, see [How do I handle the throttling of a query API?](https://help.aliyun.com/document_detail/2615031.html)
     * ### [](#)Precautions
     * The storage duration of the monitoring data of each cloud service is related to the `Period` parameter (statistical period). A larger value of the `Period` parameter indicates that the monitoring data is distributed in a larger time range and the storage duration of the monitoring data is longer. The following list describes the specific relationships:
     * *   The storage duration is 7 days if the value of the `Period` parameter is less than 60 seconds.
     * *   The storage duration is 31 days if the value of the `Period` parameter is 60 seconds.
     * *   The storage duration is 91 days if the value of the `Period` parameter is greater than or equal to 300 seconds.
     * ### [](#)Operation description
     * This topic provides an example on how to query the latest monitoring data of the `CPUUtilization` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The returned result indicates that the monitoring data for the instance `i-abcdefgh12****` of the account `123456789876****` is queried at an interval of 60 seconds. The maximum, minimum, and average values of the metric are 100, 93.1, and 99.52.
     *
     * @param request - DescribeMetricLastRequest
     *
     * @returns DescribeMetricLastResponse
     *
     * @param DescribeMetricLastRequest $request
     *
     * @return DescribeMetricLastResponse
     */
    public function describeMetricLast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricLastWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring data of a metric for a specified cloud service.
     *
     * @remarks
     * ## Limits
     * Each API operation can be called up to 50 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * >This topic provides an example to show how to query the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The returned result indicates that the monitoring data for the instance `i-abcdefgh12****` of the account `120886317861****` is queried at an interval of 60 seconds. The maximum, minimum, and average values of the metric are 100, 93.1, and 99.52.
     *
     * @param request - DescribeMetricListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricListResponse
     *
     * @param DescribeMetricListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->express) {
            @$query['Express'] = $request->express;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of a metric for a specified cloud service.
     *
     * @remarks
     * ## Limits
     * Each API operation can be called up to 50 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * >This topic provides an example to show how to query the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The returned result indicates that the monitoring data for the instance `i-abcdefgh12****` of the account `120886317861****` is queried at an interval of 60 seconds. The maximum, minimum, and average values of the metric are 100, 93.1, and 99.52.
     *
     * @param request - DescribeMetricListRequest
     *
     * @returns DescribeMetricListResponse
     *
     * @param DescribeMetricListRequest $request
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of metrics that are supported in CloudMonitor.
     *
     * @remarks
     * This operation is used together with DescribeMetricList and DescribeMetricLast. For more information, see [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html) and [DescribeMetricLast](https://help.aliyun.com/document_detail/51939.html).
     *
     * @param request - DescribeMetricMetaListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricMetaListResponse
     *
     * @param DescribeMetricMetaListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMetricMetaListResponse
     */
    public function describeMetricMetaListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
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
            'action' => 'DescribeMetricMetaList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of metrics that are supported in CloudMonitor.
     *
     * @remarks
     * This operation is used together with DescribeMetricList and DescribeMetricLast. For more information, see [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html) and [DescribeMetricLast](https://help.aliyun.com/document_detail/51939.html).
     *
     * @param request - DescribeMetricMetaListRequest
     *
     * @returns DescribeMetricMetaListResponse
     *
     * @param DescribeMetricMetaListRequest $request
     *
     * @return DescribeMetricMetaListResponse
     */
    public function describeMetricMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricMetaListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeMetricRuleBlackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricRuleBlackListResponse
     *
     * @param DescribeMetricRuleBlackListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMetricRuleBlackListResponse
     */
    public function describeMetricRuleBlackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->isEnable) {
            @$query['IsEnable'] = $request->isEnable;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scopeType) {
            @$query['ScopeType'] = $request->scopeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricRuleBlackList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMetricRuleBlackListRequest
     *
     * @returns DescribeMetricRuleBlackListResponse
     *
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
     * Queries the number of alert rules in each state.
     *
     * @param request - DescribeMetricRuleCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricRuleCountResponse
     *
     * @param DescribeMetricRuleCountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMetricRuleCountResponse
     */
    public function describeMetricRuleCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricRuleCount',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricRuleCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of alert rules in each state.
     *
     * @param request - DescribeMetricRuleCountRequest
     *
     * @returns DescribeMetricRuleCountResponse
     *
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
     * Queries alert rules.
     *
     * @remarks
     * This topic provides an example on how to query all alert rules within your Alibaba Cloud account. The returned result shows that only one alert rule is found. The name of the alert rule is `Rule_01` and the ID is `applyTemplate344cfd42-0f32-4fd6-805a-88d7908a****`.
     *
     * @param request - DescribeMetricRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricRuleListResponse
     *
     * @param DescribeMetricRuleListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMetricRuleListResponse
     */
    public function describeMetricRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertState) {
            @$query['AlertState'] = $request->alertState;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->enableState) {
            @$query['EnableState'] = $request->enableState;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleIds) {
            @$query['RuleIds'] = $request->ruleIds;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricRuleList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alert rules.
     *
     * @remarks
     * This topic provides an example on how to query all alert rules within your Alibaba Cloud account. The returned result shows that only one alert rule is found. The name of the alert rule is `Rule_01` and the ID is `applyTemplate344cfd42-0f32-4fd6-805a-88d7908a****`.
     *
     * @param request - DescribeMetricRuleListRequest
     *
     * @returns DescribeMetricRuleListResponse
     *
     * @param DescribeMetricRuleListRequest $request
     *
     * @return DescribeMetricRuleListResponse
     */
    public function describeMetricRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleListWithOptions($request, $runtime);
    }

    /**
     * Queries the resources that are associated with a specified alert rule.
     *
     * @remarks
     * ## Limit
     * This operation supports only Message Service (MNS) resources.
     * >This topic provides an example on how to query the resources that are associated with an alert rule whose ID is `ae06917_75a8c43178ab66****`.
     *
     * @param request - DescribeMetricRuleTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricRuleTargetsResponse
     *
     * @param DescribeMetricRuleTargetsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMetricRuleTargetsResponse
     */
    public function describeMetricRuleTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricRuleTargets',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources that are associated with a specified alert rule.
     *
     * @remarks
     * ## Limit
     * This operation supports only Message Service (MNS) resources.
     * >This topic provides an example on how to query the resources that are associated with an alert rule whose ID is `ae06917_75a8c43178ab66****`.
     *
     * @param request - DescribeMetricRuleTargetsRequest
     *
     * @returns DescribeMetricRuleTargetsResponse
     *
     * @param DescribeMetricRuleTargetsRequest $request
     *
     * @return DescribeMetricRuleTargetsResponse
     */
    public function describeMetricRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an alert template.
     *
     * @remarks
     * This topic provides an example on how to query the details of an alert template whose ID is `70****`.
     *
     * @param request - DescribeMetricRuleTemplateAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricRuleTemplateAttributeResponse
     *
     * @param DescribeMetricRuleTemplateAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeMetricRuleTemplateAttributeResponse
     */
    public function describeMetricRuleTemplateAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricRuleTemplateAttribute',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricRuleTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an alert template.
     *
     * @remarks
     * This topic provides an example on how to query the details of an alert template whose ID is `70****`.
     *
     * @param request - DescribeMetricRuleTemplateAttributeRequest
     *
     * @returns DescribeMetricRuleTemplateAttributeResponse
     *
     * @param DescribeMetricRuleTemplateAttributeRequest $request
     *
     * @return DescribeMetricRuleTemplateAttributeResponse
     */
    public function describeMetricRuleTemplateAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTemplateAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries alert templates.
     *
     * @remarks
     * This topic provides an example on how to query alert templates. In this example, the following alert templates are returned in the response: `ECS_Template1` and `ECS_Template2`.
     *
     * @param request - DescribeMetricRuleTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricRuleTemplateListResponse
     *
     * @param DescribeMetricRuleTemplateListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMetricRuleTemplateListResponse
     */
    public function describeMetricRuleTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->history) {
            @$query['History'] = $request->history;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
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

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricRuleTemplateList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricRuleTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alert templates.
     *
     * @remarks
     * This topic provides an example on how to query alert templates. In this example, the following alert templates are returned in the response: `ECS_Template1` and `ECS_Template2`.
     *
     * @param request - DescribeMetricRuleTemplateListRequest
     *
     * @returns DescribeMetricRuleTemplateListResponse
     *
     * @param DescribeMetricRuleTemplateListRequest $request
     *
     * @return DescribeMetricRuleTemplateListResponse
     */
    public function describeMetricRuleTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTemplateListWithOptions($request, $runtime);
    }

    /**
     * Queries the latest monitoring data of a metric for a cloud service. The data can be sorted by a specified order.
     *
     * @remarks
     * ### [](#)Limits
     * *   The total free quota is 1 million calls per month for the DescribeMetricLast, DescribeMetricList, DescribeMetricData, and DescribeMetricTop operations. If the free quota is used up and CloudMonitor Basic (pay-as-you-go) is not activated, these API operations can no longer be called as expected. If you have activated CloudMonitor Basic (pay-as-you-go), these API operations can still be called even if the free quota is used up. After the free quota is used up, you are charged for the excess usage based on the pay-as-you-go billing method. For more information about how to activate CloudMonitor Basic (pay-as-you-go), see [Enable the pay-as-you-go billing method](https://common-buy.aliyun.com/?spm=a2c4g.11186623.0.0.6c8f3481IbSHgG\\&commodityCode=cms_basic_public_cn\\&from_biz_channel=help_bill).
     * *   Each API operation can be called up to 10 times per second. An Alibaba Cloud account and the Resource Access Management (RAM) users within the account share the quota.
     * ### [](#)Precautions
     * The storage duration of the monitoring data of each cloud service is related to the `Period` parameter (statistical period). A larger value of the `Period` parameter indicates that the monitoring data is distributed in a larger time range and the storage duration of the monitoring data is longer. The following list describes the specific relationships:
     * *   The storage duration is 7 days if the value of the `Period` parameter is less than 60 seconds.
     * *   The storage duration is 31 days if the value of the `Period` parameter is 60 seconds.
     * *   The storage duration is 91 days if the value of the `Period` is greater than or equal to 300 seconds.
     * ### [](#)Operation description
     * This topic provides an example on how to query the monitoring data of the `cpu_idle` metric in the last 60 seconds for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The monitoring data is sorted in descending order based on the `Average` field.
     *
     * @param request - DescribeMetricTopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricTopResponse
     *
     * @param DescribeMetricTopRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeMetricTopResponse
     */
    public function describeMetricTopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->express) {
            @$query['Express'] = $request->express;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->orderDesc) {
            @$query['OrderDesc'] = $request->orderDesc;
        }

        if (null !== $request->orderby) {
            @$query['Orderby'] = $request->orderby;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricTop',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the latest monitoring data of a metric for a cloud service. The data can be sorted by a specified order.
     *
     * @remarks
     * ### [](#)Limits
     * *   The total free quota is 1 million calls per month for the DescribeMetricLast, DescribeMetricList, DescribeMetricData, and DescribeMetricTop operations. If the free quota is used up and CloudMonitor Basic (pay-as-you-go) is not activated, these API operations can no longer be called as expected. If you have activated CloudMonitor Basic (pay-as-you-go), these API operations can still be called even if the free quota is used up. After the free quota is used up, you are charged for the excess usage based on the pay-as-you-go billing method. For more information about how to activate CloudMonitor Basic (pay-as-you-go), see [Enable the pay-as-you-go billing method](https://common-buy.aliyun.com/?spm=a2c4g.11186623.0.0.6c8f3481IbSHgG\\&commodityCode=cms_basic_public_cn\\&from_biz_channel=help_bill).
     * *   Each API operation can be called up to 10 times per second. An Alibaba Cloud account and the Resource Access Management (RAM) users within the account share the quota.
     * ### [](#)Precautions
     * The storage duration of the monitoring data of each cloud service is related to the `Period` parameter (statistical period). A larger value of the `Period` parameter indicates that the monitoring data is distributed in a larger time range and the storage duration of the monitoring data is longer. The following list describes the specific relationships:
     * *   The storage duration is 7 days if the value of the `Period` parameter is less than 60 seconds.
     * *   The storage duration is 31 days if the value of the `Period` parameter is 60 seconds.
     * *   The storage duration is 91 days if the value of the `Period` is greater than or equal to 300 seconds.
     * ### [](#)Operation description
     * This topic provides an example on how to query the monitoring data of the `cpu_idle` metric in the last 60 seconds for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The monitoring data is sorted in descending order based on the `Average` field.
     *
     * @param request - DescribeMetricTopRequest
     *
     * @returns DescribeMetricTopResponse
     *
     * @param DescribeMetricTopRequest $request
     *
     * @return DescribeMetricTopResponse
     */
    public function describeMetricTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricTopWithOptions($request, $runtime);
    }

    /**
     * Queries the cloud services to which the resources in an application group belong and the number of resources that belong to each cloud service in the application group.
     *
     * @param request - DescribeMonitorGroupCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorGroupCategoriesResponse
     *
     * @param DescribeMonitorGroupCategoriesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMonitorGroupCategoriesResponse
     */
    public function describeMonitorGroupCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorGroupCategories',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorGroupCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cloud services to which the resources in an application group belong and the number of resources that belong to each cloud service in the application group.
     *
     * @param request - DescribeMonitorGroupCategoriesRequest
     *
     * @returns DescribeMonitorGroupCategoriesResponse
     *
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
     * Queries the dynamic rules of an application group.
     *
     * @param request - DescribeMonitorGroupDynamicRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorGroupDynamicRulesResponse
     *
     * @param DescribeMonitorGroupDynamicRulesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeMonitorGroupDynamicRulesResponse
     */
    public function describeMonitorGroupDynamicRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorGroupDynamicRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorGroupDynamicRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the dynamic rules of an application group.
     *
     * @param request - DescribeMonitorGroupDynamicRulesRequest
     *
     * @returns DescribeMonitorGroupDynamicRulesResponse
     *
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
     * Queries the details of the resources in an application group.
     *
     * @param request - DescribeMonitorGroupInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorGroupInstanceAttributeResponse
     *
     * @param DescribeMonitorGroupInstanceAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeMonitorGroupInstanceAttributeResponse
     */
    public function describeMonitorGroupInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->total) {
            @$query['Total'] = $request->total;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorGroupInstanceAttribute',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorGroupInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the resources in an application group.
     *
     * @param request - DescribeMonitorGroupInstanceAttributeRequest
     *
     * @returns DescribeMonitorGroupInstanceAttributeResponse
     *
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
     * Queries the resources in an application group.
     *
     * @param request - DescribeMonitorGroupInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorGroupInstancesResponse
     *
     * @param DescribeMonitorGroupInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeMonitorGroupInstancesResponse
     */
    public function describeMonitorGroupInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
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
            'action' => 'DescribeMonitorGroupInstances',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources in an application group.
     *
     * @param request - DescribeMonitorGroupInstancesRequest
     *
     * @returns DescribeMonitorGroupInstancesResponse
     *
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
     * Queries the policies that are used to pause alert notifications for an application group.
     *
     * @param request - DescribeMonitorGroupNotifyPolicyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorGroupNotifyPolicyListResponse
     *
     * @param DescribeMonitorGroupNotifyPolicyListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeMonitorGroupNotifyPolicyListResponse
     */
    public function describeMonitorGroupNotifyPolicyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorGroupNotifyPolicyList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorGroupNotifyPolicyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the policies that are used to pause alert notifications for an application group.
     *
     * @param request - DescribeMonitorGroupNotifyPolicyListRequest
     *
     * @returns DescribeMonitorGroupNotifyPolicyListResponse
     *
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
     * Queries application groups.
     *
     * @remarks
     * This topic provides an example of how to query the application groups of the current account. The response shows that the current account has two application groups: `testGroup124` and `test123`.
     *
     * @param request - DescribeMonitorGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorGroupsResponse
     *
     * @param DescribeMonitorGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeMonitorGroupsResponse
     */
    public function describeMonitorGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dynamicTagRuleId) {
            @$query['DynamicTagRuleId'] = $request->dynamicTagRuleId;
        }

        if (null !== $request->groupFounderTagKey) {
            @$query['GroupFounderTagKey'] = $request->groupFounderTagKey;
        }

        if (null !== $request->groupFounderTagValue) {
            @$query['GroupFounderTagValue'] = $request->groupFounderTagValue;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->includeTemplateHistory) {
            @$query['IncludeTemplateHistory'] = $request->includeTemplateHistory;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->selectContactGroups) {
            @$query['SelectContactGroups'] = $request->selectContactGroups;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->types) {
            @$query['Types'] = $request->types;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorGroups',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries application groups.
     *
     * @remarks
     * This topic provides an example of how to query the application groups of the current account. The response shows that the current account has two application groups: `testGroup124` and `test123`.
     *
     * @param request - DescribeMonitorGroupsRequest
     *
     * @returns DescribeMonitorGroupsResponse
     *
     * @param DescribeMonitorGroupsRequest $request
     *
     * @return DescribeMonitorGroupsResponse
     */
    public function describeMonitorGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the resource quotas of CloudMonitor.
     *
     * @param request - DescribeMonitorResourceQuotaAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorResourceQuotaAttributeResponse
     *
     * @param DescribeMonitorResourceQuotaAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeMonitorResourceQuotaAttributeResponse
     */
    public function describeMonitorResourceQuotaAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->showUsed) {
            @$query['ShowUsed'] = $request->showUsed;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorResourceQuotaAttribute',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorResourceQuotaAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource quotas of CloudMonitor.
     *
     * @param request - DescribeMonitorResourceQuotaAttributeRequest
     *
     * @returns DescribeMonitorResourceQuotaAttributeResponse
     *
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
     * Queries the AccessKey ID and AccessKey secret that are required to install the CloudMonitor agent on a third-party host.
     *
     * @param request - DescribeMonitoringAgentAccessKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitoringAgentAccessKeyResponse
     *
     * @param DescribeMonitoringAgentAccessKeyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeMonitoringAgentAccessKeyResponse
     */
    public function describeMonitoringAgentAccessKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeMonitoringAgentAccessKey',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitoringAgentAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the AccessKey ID and AccessKey secret that are required to install the CloudMonitor agent on a third-party host.
     *
     * @param request - DescribeMonitoringAgentAccessKeyRequest
     *
     * @returns DescribeMonitoringAgentAccessKeyResponse
     *
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
     * Queries the configurations of the CloudMonitor agent.
     *
     * @param request - DescribeMonitoringAgentConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitoringAgentConfigResponse
     *
     * @param DescribeMonitoringAgentConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeMonitoringAgentConfigResponse
     */
    public function describeMonitoringAgentConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeMonitoringAgentConfig',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitoringAgentConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of the CloudMonitor agent.
     *
     * @param request - DescribeMonitoringAgentConfigRequest
     *
     * @returns DescribeMonitoringAgentConfigResponse
     *
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
     * Queries all hosts within the current Alibaba Cloud account, including hosts on which the CloudMonitor agent is installed and uninstalled.
     *
     * @param request - DescribeMonitoringAgentHostsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitoringAgentHostsResponse
     *
     * @param DescribeMonitoringAgentHostsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeMonitoringAgentHostsResponse
     */
    public function describeMonitoringAgentHostsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunHost) {
            @$query['AliyunHost'] = $request->aliyunHost;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceRegionId) {
            @$query['InstanceRegionId'] = $request->instanceRegionId;
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

        if (null !== $request->serialNumbers) {
            @$query['SerialNumbers'] = $request->serialNumbers;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->sysomStatus) {
            @$query['SysomStatus'] = $request->sysomStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitoringAgentHosts',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitoringAgentHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all hosts within the current Alibaba Cloud account, including hosts on which the CloudMonitor agent is installed and uninstalled.
     *
     * @param request - DescribeMonitoringAgentHostsRequest
     *
     * @returns DescribeMonitoringAgentHostsResponse
     *
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
     * 查询指定资源的进程数列表.
     *
     * @remarks
     * >  Before you call this operation, call the CreateMonitoringAgentProcess operation to create processes. For more information, see [CreateMonitoringAgentProcess](https://help.aliyun.com/document_detail/114951.html~).
     * This topic provides an example of how to query the processes of the `i-hp3hl3cx1pbahzy8****` instance. The response indicates the details of the `NGINX` and `HTTP` processes.
     *
     * @param request - DescribeMonitoringAgentProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitoringAgentProcessesResponse
     *
     * @param DescribeMonitoringAgentProcessesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeMonitoringAgentProcessesResponse
     */
    public function describeMonitoringAgentProcessesWithOptions($request, $runtime)
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
            'action' => 'DescribeMonitoringAgentProcesses',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitoringAgentProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定资源的进程数列表.
     *
     * @remarks
     * >  Before you call this operation, call the CreateMonitoringAgentProcess operation to create processes. For more information, see [CreateMonitoringAgentProcess](https://help.aliyun.com/document_detail/114951.html~).
     * This topic provides an example of how to query the processes of the `i-hp3hl3cx1pbahzy8****` instance. The response indicates the details of the `NGINX` and `HTTP` processes.
     *
     * @param request - DescribeMonitoringAgentProcessesRequest
     *
     * @returns DescribeMonitoringAgentProcessesResponse
     *
     * @param DescribeMonitoringAgentProcessesRequest $request
     *
     * @return DescribeMonitoringAgentProcessesResponse
     */
    public function describeMonitoringAgentProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentProcessesWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the CloudMonitor agent.
     *
     * @remarks
     * This topic describes how to query the status of the CloudMonitor agent that is installed on the `i-hp3dunahluwajv6f****` instance. The result indicates that the CloudMonitor agent is in the `running` state.
     *
     * @param request - DescribeMonitoringAgentStatusesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitoringAgentStatusesResponse
     *
     * @param DescribeMonitoringAgentStatusesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMonitoringAgentStatusesResponse
     */
    public function describeMonitoringAgentStatusesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hostAvailabilityTaskId) {
            @$query['HostAvailabilityTaskId'] = $request->hostAvailabilityTaskId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitoringAgentStatuses',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitoringAgentStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the CloudMonitor agent.
     *
     * @remarks
     * This topic describes how to query the status of the CloudMonitor agent that is installed on the `i-hp3dunahluwajv6f****` instance. The result indicates that the CloudMonitor agent is in the `running` state.
     *
     * @param request - DescribeMonitoringAgentStatusesRequest
     *
     * @returns DescribeMonitoringAgentStatusesResponse
     *
     * @param DescribeMonitoringAgentStatusesRequest $request
     *
     * @return DescribeMonitoringAgentStatusesResponse
     */
    public function describeMonitoringAgentStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentStatusesWithOptions($request, $runtime);
    }

    /**
     * Queries the global configurations of the CloudMonitor agent.
     *
     * @param request - DescribeMonitoringConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitoringConfigResponse
     *
     * @param DescribeMonitoringConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMonitoringConfigResponse
     */
    public function describeMonitoringConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeMonitoringConfig',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitoringConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the global configurations of the CloudMonitor agent.
     *
     * @param request - DescribeMonitoringConfigRequest
     *
     * @returns DescribeMonitoringConfigResponse
     *
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
     * Queries the keys of all tags that are attached to cloud resources in a region.
     *
     * @remarks
     * >  If a tag is attached to multiple cloud resources in the region, the key of the tag is returned only once.
     *
     * @param request - DescribeProductResourceTagKeyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProductResourceTagKeyListResponse
     *
     * @param DescribeProductResourceTagKeyListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeProductResourceTagKeyListResponse
     */
    public function describeProductResourceTagKeyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProductResourceTagKeyList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProductResourceTagKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the keys of all tags that are attached to cloud resources in a region.
     *
     * @remarks
     * >  If a tag is attached to multiple cloud resources in the region, the key of the tag is returned only once.
     *
     * @param request - DescribeProductResourceTagKeyListRequest
     *
     * @returns DescribeProductResourceTagKeyListResponse
     *
     * @param DescribeProductResourceTagKeyListRequest $request
     *
     * @return DescribeProductResourceTagKeyListResponse
     */
    public function describeProductResourceTagKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductResourceTagKeyListWithOptions($request, $runtime);
    }

    /**
     * Queries the cloud services for which the initiative alert feature is enabled.
     *
     * @param request - DescribeProductsOfActiveMetricRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProductsOfActiveMetricRuleResponse
     *
     * @param DescribeProductsOfActiveMetricRuleRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeProductsOfActiveMetricRuleResponse
     */
    public function describeProductsOfActiveMetricRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeProductsOfActiveMetricRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProductsOfActiveMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cloud services for which the initiative alert feature is enabled.
     *
     * @param request - DescribeProductsOfActiveMetricRuleRequest
     *
     * @returns DescribeProductsOfActiveMetricRuleResponse
     *
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
     * Queries the information about monitored services in CloudMonitor.
     *
     * @remarks
     * The information obtained by this operation includes the service description, namespace, and tags.
     *
     * @param request - DescribeProjectMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProjectMetaResponse
     *
     * @param DescribeProjectMetaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeProjectMetaResponse
     */
    public function describeProjectMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
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
            'action' => 'DescribeProjectMeta',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProjectMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about monitored services in CloudMonitor.
     *
     * @remarks
     * The information obtained by this operation includes the service description, namespace, and tags.
     *
     * @param request - DescribeProjectMetaRequest
     *
     * @returns DescribeProjectMetaResponse
     *
     * @param DescribeProjectMetaRequest $request
     *
     * @return DescribeProjectMetaResponse
     */
    public function describeProjectMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectMetaWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a site monitoring task.
     *
     * @remarks
     * This topic provides an example on how to query the details of a site monitoring task whose ID is `cc641dff-c19d-45f3-ad0a-818a0c4f****`. The returned result indicates that the task name is `test123`, the URL that is monitored by the task is `https://aliyun.com`, and the name of the carrier is `Alibaba`.
     *
     * @param request - DescribeSiteMonitorAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteMonitorAttributeResponse
     *
     * @param DescribeSiteMonitorAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSiteMonitorAttributeResponse
     */
    public function describeSiteMonitorAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeAlert) {
            @$query['IncludeAlert'] = $request->includeAlert;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteMonitorAttribute',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteMonitorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a site monitoring task.
     *
     * @remarks
     * This topic provides an example on how to query the details of a site monitoring task whose ID is `cc641dff-c19d-45f3-ad0a-818a0c4f****`. The returned result indicates that the task name is `test123`, the URL that is monitored by the task is `https://aliyun.com`, and the name of the carrier is `Alibaba`.
     *
     * @param request - DescribeSiteMonitorAttributeRequest
     *
     * @returns DescribeSiteMonitorAttributeResponse
     *
     * @param DescribeSiteMonitorAttributeRequest $request
     *
     * @return DescribeSiteMonitorAttributeResponse
     */
    public function describeSiteMonitorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the fine-grained monitoring data of a site monitoring task.
     *
     * @param request - DescribeSiteMonitorDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteMonitorDataResponse
     *
     * @param DescribeSiteMonitorDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSiteMonitorDataResponse
     */
    public function describeSiteMonitorDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteMonitorData',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the fine-grained monitoring data of a site monitoring task.
     *
     * @param request - DescribeSiteMonitorDataRequest
     *
     * @returns DescribeSiteMonitorDataResponse
     *
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
     * Queries the detection points that are provided by carriers.
     *
     * @remarks
     * This topic provides an example on how to query the detection points that are provided by China Unicom in Guiyang.
     *
     * @param request - DescribeSiteMonitorISPCityListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteMonitorISPCityListResponse
     *
     * @param DescribeSiteMonitorISPCityListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSiteMonitorISPCityListResponse
     */
    public function describeSiteMonitorISPCityListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->IPV4) {
            @$query['IPV4'] = $request->IPV4;
        }

        if (null !== $request->IPV6) {
            @$query['IPV6'] = $request->IPV6;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->viewAll) {
            @$query['ViewAll'] = $request->viewAll;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteMonitorISPCityList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteMonitorISPCityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detection points that are provided by carriers.
     *
     * @remarks
     * This topic provides an example on how to query the detection points that are provided by China Unicom in Guiyang.
     *
     * @param request - DescribeSiteMonitorISPCityListRequest
     *
     * @returns DescribeSiteMonitorISPCityListResponse
     *
     * @param DescribeSiteMonitorISPCityListRequest $request
     *
     * @return DescribeSiteMonitorISPCityListResponse
     */
    public function describeSiteMonitorISPCityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorISPCityListWithOptions($request, $runtime);
    }

    /**
     * Queries site monitoring tasks.
     *
     * @remarks
     * This topic provides an example on how to query all the site monitoring tasks of your Alibaba Cloud account. In this example, the returned result indicates that the Alibaba Cloud account has one site monitoring task named `HanZhou_ECS2`.
     *
     * @param request - DescribeSiteMonitorListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteMonitorListResponse
     *
     * @param DescribeSiteMonitorListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSiteMonitorListResponse
     */
    public function describeSiteMonitorListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentGroup) {
            @$query['AgentGroup'] = $request->agentGroup;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskState) {
            @$query['TaskState'] = $request->taskState;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteMonitorList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteMonitorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries site monitoring tasks.
     *
     * @remarks
     * This topic provides an example on how to query all the site monitoring tasks of your Alibaba Cloud account. In this example, the returned result indicates that the Alibaba Cloud account has one site monitoring task named `HanZhou_ECS2`.
     *
     * @param request - DescribeSiteMonitorListRequest
     *
     * @returns DescribeSiteMonitorListResponse
     *
     * @param DescribeSiteMonitorListRequest $request
     *
     * @return DescribeSiteMonitorListResponse
     */
    public function describeSiteMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorListWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of one or more instant test tasks.
     *
     * @remarks
     * You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring.
     * This topic provides an example to show how to query the logs of an instant test task whose ID is `afa5c3ce-f944-4363-9edb-ce919a29****`.
     *
     * @param request - DescribeSiteMonitorLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteMonitorLogResponse
     *
     * @param DescribeSiteMonitorLogRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSiteMonitorLogResponse
     */
    public function describeSiteMonitorLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->browser) {
            @$query['Browser'] = $request->browser;
        }

        if (null !== $request->browserInfo) {
            @$query['BrowserInfo'] = $request->browserInfo;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->device) {
            @$query['Device'] = $request->device;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteMonitorLog',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteMonitorLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of one or more instant test tasks.
     *
     * @remarks
     * You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring.
     * This topic provides an example to show how to query the logs of an instant test task whose ID is `afa5c3ce-f944-4363-9edb-ce919a29****`.
     *
     * @param request - DescribeSiteMonitorLogRequest
     *
     * @returns DescribeSiteMonitorLogResponse
     *
     * @param DescribeSiteMonitorLogRequest $request
     *
     * @return DescribeSiteMonitorLogResponse
     */
    public function describeSiteMonitorLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorLogWithOptions($request, $runtime);
    }

    /**
     * Queries the quotas and version of site monitoring.
     *
     * @param request - DescribeSiteMonitorQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteMonitorQuotaResponse
     *
     * @param DescribeSiteMonitorQuotaRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSiteMonitorQuotaResponse
     */
    public function describeSiteMonitorQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeSiteMonitorQuota',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteMonitorQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quotas and version of site monitoring.
     *
     * @param request - DescribeSiteMonitorQuotaRequest
     *
     * @returns DescribeSiteMonitorQuotaResponse
     *
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
     * Queries the statistics of a specified metric for a specified site monitoring task.
     *
     * @remarks
     * This topic provides an example on how to query the statistics of the `Availability` metric for a site monitoring task whose ID is `ef4cdc8b-9dc7-43e7-810e-f950e56c****`. The result indicates that the availability rate of the site is `100%`.
     *
     * @param request - DescribeSiteMonitorStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteMonitorStatisticsResponse
     *
     * @param DescribeSiteMonitorStatisticsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSiteMonitorStatisticsResponse
     */
    public function describeSiteMonitorStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteMonitorStatistics',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteMonitorStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of a specified metric for a specified site monitoring task.
     *
     * @remarks
     * This topic provides an example on how to query the statistics of the `Availability` metric for a site monitoring task whose ID is `ef4cdc8b-9dc7-43e7-810e-f950e56c****`. The result indicates that the availability rate of the site is `100%`.
     *
     * @param request - DescribeSiteMonitorStatisticsRequest
     *
     * @returns DescribeSiteMonitorStatisticsResponse
     *
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
     * 查询拨测探测节点列表.
     *
     * @param request - DescribeSyntheticProbeListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSyntheticProbeListResponse
     *
     * @param DescribeSyntheticProbeListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSyntheticProbeListResponse
     */
    public function describeSyntheticProbeListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->idcProbe) {
            @$query['IdcProbe'] = $request->idcProbe;
        }

        if (null !== $request->ipv4) {
            @$query['Ipv4'] = $request->ipv4;
        }

        if (null !== $request->ipv6) {
            @$query['Ipv6'] = $request->ipv6;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->lmProbe) {
            @$query['LmProbe'] = $request->lmProbe;
        }

        if (null !== $request->mbProbe) {
            @$query['MbProbe'] = $request->mbProbe;
        }

        if (null !== $request->viewAll) {
            @$query['ViewAll'] = $request->viewAll;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSyntheticProbeList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSyntheticProbeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询拨测探测节点列表.
     *
     * @param request - DescribeSyntheticProbeListRequest
     *
     * @returns DescribeSyntheticProbeListResponse
     *
     * @param DescribeSyntheticProbeListRequest $request
     *
     * @return DescribeSyntheticProbeListResponse
     */
    public function describeSyntheticProbeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyntheticProbeListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a system event.
     *
     * @param request - DescribeSystemEventAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemEventAttributeResponse
     *
     * @param DescribeSystemEventAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSystemEventAttributeResponse
     */
    public function describeSystemEventAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->searchKeywords) {
            @$query['SearchKeywords'] = $request->searchKeywords;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSystemEventAttribute',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSystemEventAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a system event.
     *
     * @param request - DescribeSystemEventAttributeRequest
     *
     * @returns DescribeSystemEventAttributeResponse
     *
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
     * Queries the number of times that a system event of a cloud service has occurred.
     *
     * @remarks
     * ### [](#)Background information
     * You can call the [DescribeSystemEventMetaList](https://help.aliyun.com/document_detail/114972.html) operation to query the cloud services supported by CloudMonitor and their system events.
     * ### [](#)Description
     * This topic provides an example on how to query the number of times that a system event of `Elastic Compute Service (ECS)` has occurred. The returned result shows that the specified system event has occurred three times.
     *
     * @param request - DescribeSystemEventCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemEventCountResponse
     *
     * @param DescribeSystemEventCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSystemEventCountResponse
     */
    public function describeSystemEventCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->searchKeywords) {
            @$query['SearchKeywords'] = $request->searchKeywords;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSystemEventCount',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSystemEventCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of times that a system event of a cloud service has occurred.
     *
     * @remarks
     * ### [](#)Background information
     * You can call the [DescribeSystemEventMetaList](https://help.aliyun.com/document_detail/114972.html) operation to query the cloud services supported by CloudMonitor and their system events.
     * ### [](#)Description
     * This topic provides an example on how to query the number of times that a system event of `Elastic Compute Service (ECS)` has occurred. The returned result shows that the specified system event has occurred three times.
     *
     * @param request - DescribeSystemEventCountRequest
     *
     * @returns DescribeSystemEventCountResponse
     *
     * @param DescribeSystemEventCountRequest $request
     *
     * @return DescribeSystemEventCountResponse
     */
    public function describeSystemEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventCountWithOptions($request, $runtime);
    }

    /**
     * Queries the number of times a system event occurred during each interval within a period of time.
     *
     * @param request - DescribeSystemEventHistogramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemEventHistogramResponse
     *
     * @param DescribeSystemEventHistogramRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSystemEventHistogramResponse
     */
    public function describeSystemEventHistogramWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->searchKeywords) {
            @$query['SearchKeywords'] = $request->searchKeywords;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSystemEventHistogram',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSystemEventHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of times a system event occurred during each interval within a period of time.
     *
     * @param request - DescribeSystemEventHistogramRequest
     *
     * @returns DescribeSystemEventHistogramResponse
     *
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
     * Queries the meta information about system events.
     *
     * @param request - DescribeSystemEventMetaListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemEventMetaListResponse
     *
     * @param DescribeSystemEventMetaListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSystemEventMetaListResponse
     */
    public function describeSystemEventMetaListWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeSystemEventMetaList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSystemEventMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the meta information about system events.
     *
     * @param request - DescribeSystemEventMetaListRequest
     *
     * @returns DescribeSystemEventMetaListResponse
     *
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
     * Queries tag keys.
     *
     * @param request - DescribeTagKeyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagKeyListResponse
     *
     * @param DescribeTagKeyListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTagKeyListResponse
     */
    public function describeTagKeyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeTagKeyList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tag keys.
     *
     * @param request - DescribeTagKeyListRequest
     *
     * @returns DescribeTagKeyListResponse
     *
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
     * Queries the tag values corresponding to a specified tag key.
     *
     * @remarks
     * This topic provides an example of how to query the tag values corresponding to `tagKey1`. The return results are `tagValue1` and `tagValue2`.
     *
     * @param request - DescribeTagValueListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagValueListResponse
     *
     * @param DescribeTagValueListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeTagValueListResponse
     */
    public function describeTagValueListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagValueList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagValueListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tag values corresponding to a specified tag key.
     *
     * @remarks
     * This topic provides an example of how to query the tag values corresponding to `tagKey1`. The return results are `tagValue1` and `tagValue2`.
     *
     * @param request - DescribeTagValueListRequest
     *
     * @returns DescribeTagValueListResponse
     *
     * @param DescribeTagValueListRequest $request
     *
     * @return DescribeTagValueListResponse
     */
    public function describeTagValueList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagValueListWithOptions($request, $runtime);
    }

    /**
     * Queries unhealthy instances detected by availability monitoring tasks.
     *
     * @param request - DescribeUnhealthyHostAvailabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUnhealthyHostAvailabilityResponse
     *
     * @param DescribeUnhealthyHostAvailabilityRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeUnhealthyHostAvailabilityResponse
     */
    public function describeUnhealthyHostAvailabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUnhealthyHostAvailability',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUnhealthyHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries unhealthy instances detected by availability monitoring tasks.
     *
     * @param request - DescribeUnhealthyHostAvailabilityRequest
     *
     * @returns DescribeUnhealthyHostAvailabilityResponse
     *
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
     * Disables the initiative alert feature for a cloud service.
     *
     * @param request - DisableActiveMetricRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableActiveMetricRuleResponse
     *
     * @param DisableActiveMetricRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableActiveMetricRuleResponse
     */
    public function disableActiveMetricRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableActiveMetricRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableActiveMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the initiative alert feature for a cloud service.
     *
     * @param request - DisableActiveMetricRuleRequest
     *
     * @returns DisableActiveMetricRuleResponse
     *
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
     * @param request - DisableEventRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableEventRulesResponse
     *
     * @param DisableEventRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableEventRulesResponse
     */
    public function disableEventRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleNames) {
            @$query['RuleNames'] = $request->ruleNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableEventRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableEventRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableEventRulesRequest
     *
     * @returns DisableEventRulesResponse
     *
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
     * Disables availability monitoring tasks.
     *
     * @param request - DisableHostAvailabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableHostAvailabilityResponse
     *
     * @param DisableHostAvailabilityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableHostAvailabilityResponse
     */
    public function disableHostAvailabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableHostAvailability',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables availability monitoring tasks.
     *
     * @param request - DisableHostAvailabilityRequest
     *
     * @returns DisableHostAvailabilityResponse
     *
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
     * Disables alert rules.
     *
     * @param request - DisableMetricRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableMetricRulesResponse
     *
     * @param DisableMetricRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableMetricRulesResponse
     */
    public function disableMetricRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableMetricRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables alert rules.
     *
     * @param request - DisableMetricRulesRequest
     *
     * @returns DisableMetricRulesResponse
     *
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
     * Disables site monitoring tasks.
     *
     * @param request - DisableSiteMonitorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSiteMonitorsResponse
     *
     * @param DisableSiteMonitorsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableSiteMonitorsResponse
     */
    public function disableSiteMonitorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableSiteMonitors',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableSiteMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables site monitoring tasks.
     *
     * @param request - DisableSiteMonitorsRequest
     *
     * @returns DisableSiteMonitorsResponse
     *
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
     * Enables the initiative alert feature for a cloud service.
     *
     * @param request - EnableActiveMetricRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableActiveMetricRuleResponse
     *
     * @param EnableActiveMetricRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableActiveMetricRuleResponse
     */
    public function enableActiveMetricRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableActiveMetricRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableActiveMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the initiative alert feature for a cloud service.
     *
     * @param request - EnableActiveMetricRuleRequest
     *
     * @returns EnableActiveMetricRuleResponse
     *
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
     * @param request - EnableEventRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableEventRulesResponse
     *
     * @param EnableEventRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EnableEventRulesResponse
     */
    public function enableEventRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleNames) {
            @$query['RuleNames'] = $request->ruleNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableEventRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableEventRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableEventRulesRequest
     *
     * @returns EnableEventRulesResponse
     *
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
     * Enables availability monitoring tasks.
     *
     * @param request - EnableHostAvailabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableHostAvailabilityResponse
     *
     * @param EnableHostAvailabilityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableHostAvailabilityResponse
     */
    public function enableHostAvailabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableHostAvailability',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables availability monitoring tasks.
     *
     * @param request - EnableHostAvailabilityRequest
     *
     * @returns EnableHostAvailabilityResponse
     *
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
     * Enables or disables multiple blacklist policies at a time.
     *
     * @param request - EnableMetricRuleBlackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableMetricRuleBlackListResponse
     *
     * @param EnableMetricRuleBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableMetricRuleBlackListResponse
     */
    public function enableMetricRuleBlackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->isEnable) {
            @$query['IsEnable'] = $request->isEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableMetricRuleBlackList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables multiple blacklist policies at a time.
     *
     * @param request - EnableMetricRuleBlackListRequest
     *
     * @returns EnableMetricRuleBlackListResponse
     *
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
     * Enables alert rules.
     *
     * @param request - EnableMetricRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableMetricRulesResponse
     *
     * @param EnableMetricRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableMetricRulesResponse
     */
    public function enableMetricRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableMetricRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables alert rules.
     *
     * @param request - EnableMetricRulesRequest
     *
     * @returns EnableMetricRulesResponse
     *
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
     * Enables site monitoring tasks.
     *
     * @param request - EnableSiteMonitorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSiteMonitorsResponse
     *
     * @param EnableSiteMonitorsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableSiteMonitorsResponse
     */
    public function enableSiteMonitorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableSiteMonitors',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableSiteMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables site monitoring tasks.
     *
     * @param request - EnableSiteMonitorsRequest
     *
     * @returns EnableSiteMonitorsResponse
     *
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
     * InstallMonitoringAgent.
     *
     * @remarks
     * ## Prerequisites
     * The Cloud Assistant client is installed on an ECS instance. For more information about how to install the Cloud Assistant client, see [Overview](https://help.aliyun.com/document_detail/64601.html).
     *
     * @param request - InstallMonitoringAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallMonitoringAgentResponse
     *
     * @param InstallMonitoringAgentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return InstallMonitoringAgentResponse
     */
    public function installMonitoringAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->installCommand) {
            @$query['InstallCommand'] = $request->installCommand;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstallMonitoringAgent',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallMonitoringAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * InstallMonitoringAgent.
     *
     * @remarks
     * ## Prerequisites
     * The Cloud Assistant client is installed on an ECS instance. For more information about how to install the Cloud Assistant client, see [Overview](https://help.aliyun.com/document_detail/64601.html).
     *
     * @param request - InstallMonitoringAgentRequest
     *
     * @returns InstallMonitoringAgentResponse
     *
     * @param InstallMonitoringAgentRequest $request
     *
     * @return InstallMonitoringAgentResponse
     */
    public function installMonitoringAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installMonitoringAgentWithOptions($request, $runtime);
    }

    /**
     * 修改应用分组内的进程监控.
     *
     * @param request - ModifyGroupMonitoringAgentProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGroupMonitoringAgentProcessResponse
     *
     * @param ModifyGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyGroupMonitoringAgentProcessResponse
     */
    public function modifyGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertConfig) {
            @$query['AlertConfig'] = $request->alertConfig;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->matchExpressFilterRelation) {
            @$query['MatchExpressFilterRelation'] = $request->matchExpressFilterRelation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGroupMonitoringAgentProcess',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGroupMonitoringAgentProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用分组内的进程监控.
     *
     * @param request - ModifyGroupMonitoringAgentProcessRequest
     *
     * @returns ModifyGroupMonitoringAgentProcessResponse
     *
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
     * Modifies an availability monitoring task.
     *
     * @remarks
     * This topic provides an example on how to change the name of an availability monitoring task named `12345` in an application group named `123456` to `task2`.
     *
     * @param request - ModifyHostAvailabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHostAvailabilityResponse
     *
     * @param ModifyHostAvailabilityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyHostAvailabilityResponse
     */
    public function modifyHostAvailabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertConfigEscalationList) {
            @$query['AlertConfigEscalationList'] = $request->alertConfigEscalationList;
        }

        if (null !== $request->alertConfigTargetList) {
            @$query['AlertConfigTargetList'] = $request->alertConfigTargetList;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceList) {
            @$query['InstanceList'] = $request->instanceList;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskScope) {
            @$query['TaskScope'] = $request->taskScope;
        }

        if (null !== $request->alertConfig) {
            @$query['AlertConfig'] = $request->alertConfig;
        }

        if (null !== $request->taskOption) {
            @$query['TaskOption'] = $request->taskOption;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHostAvailability',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHostAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an availability monitoring task.
     *
     * @remarks
     * This topic provides an example on how to change the name of an availability monitoring task named `12345` in an application group named `123456` to `task2`.
     *
     * @param request - ModifyHostAvailabilityRequest
     *
     * @returns ModifyHostAvailabilityResponse
     *
     * @param ModifyHostAvailabilityRequest $request
     *
     * @return ModifyHostAvailabilityResponse
     */
    public function modifyHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * 修改非阿里云的主机显示信息.
     *
     * @remarks
     *
     * @param request - ModifyHostInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHostInfoResponse
     *
     * @param ModifyHostInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyHostInfoResponse
     */
    public function modifyHostInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHostInfo',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHostInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改非阿里云的主机显示信息.
     *
     * @remarks
     *
     * @param request - ModifyHostInfoRequest
     *
     * @returns ModifyHostInfoResponse
     *
     * @param ModifyHostInfoRequest $request
     *
     * @return ModifyHostInfoResponse
     */
    public function modifyHostInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostInfoWithOptions($request, $runtime);
    }

    /**
     * Modifies a namespace.
     *
     * @remarks
     * This topic provides an example on how to change the data retention period of the `aliyun` namespace to `cms.s1.2xlarge`. The response shows that the namespace is modified.
     *
     * @param request - ModifyHybridMonitorNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridMonitorNamespaceResponse
     *
     * @param ModifyHybridMonitorNamespaceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyHybridMonitorNamespaceResponse
     */
    public function modifyHybridMonitorNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->spec) {
            @$query['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHybridMonitorNamespace',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridMonitorNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a namespace.
     *
     * @remarks
     * This topic provides an example on how to change the data retention period of the `aliyun` namespace to `cms.s1.2xlarge`. The response shows that the namespace is modified.
     *
     * @param request - ModifyHybridMonitorNamespaceRequest
     *
     * @returns ModifyHybridMonitorNamespaceResponse
     *
     * @param ModifyHybridMonitorNamespaceRequest $request
     *
     * @return ModifyHybridMonitorNamespaceResponse
     */
    public function modifyHybridMonitorNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridMonitorNamespaceWithOptions($request, $runtime);
    }

    /**
     * Modifies a Logstore group.
     *
     * @remarks
     * In this example, a Logstore group named `Logstore_test` is modified. The Logstore of the `aliyun-project` project in the `cn-hangzhou` region is changed to `Logstore-aliyun-all`. The response shows that the Logstore group is modified.
     *
     * @param request - ModifyHybridMonitorSLSGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridMonitorSLSGroupResponse
     *
     * @param ModifyHybridMonitorSLSGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyHybridMonitorSLSGroupResponse
     */
    public function modifyHybridMonitorSLSGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->SLSGroupConfig) {
            @$query['SLSGroupConfig'] = $request->SLSGroupConfig;
        }

        if (null !== $request->SLSGroupDescription) {
            @$query['SLSGroupDescription'] = $request->SLSGroupDescription;
        }

        if (null !== $request->SLSGroupName) {
            @$query['SLSGroupName'] = $request->SLSGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHybridMonitorSLSGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridMonitorSLSGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Logstore group.
     *
     * @remarks
     * In this example, a Logstore group named `Logstore_test` is modified. The Logstore of the `aliyun-project` project in the `cn-hangzhou` region is changed to `Logstore-aliyun-all`. The response shows that the Logstore group is modified.
     *
     * @param request - ModifyHybridMonitorSLSGroupRequest
     *
     * @returns ModifyHybridMonitorSLSGroupResponse
     *
     * @param ModifyHybridMonitorSLSGroupRequest $request
     *
     * @return ModifyHybridMonitorSLSGroupResponse
     */
    public function modifyHybridMonitorSLSGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridMonitorSLSGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies a metric for the logs that are imported from Log Service.
     *
     * @remarks
     * This topic provides an example on how to change the collection period of a metric import task whose ID is `36****` to `15` seconds. The task is used to monitor the logs that are imported from Log Service. The returned result indicates that the metric is modified.
     *
     * @param request - ModifyHybridMonitorTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHybridMonitorTaskResponse
     *
     * @param ModifyHybridMonitorTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyHybridMonitorTaskResponse
     */
    public function modifyHybridMonitorTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachLabels) {
            @$query['AttachLabels'] = $request->attachLabels;
        }

        if (null !== $request->collectInterval) {
            @$query['CollectInterval'] = $request->collectInterval;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->SLSProcessConfig) {
            @$query['SLSProcessConfig'] = $request->SLSProcessConfig;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHybridMonitorTask',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHybridMonitorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a metric for the logs that are imported from Log Service.
     *
     * @remarks
     * This topic provides an example on how to change the collection period of a metric import task whose ID is `36****` to `15` seconds. The task is used to monitor the logs that are imported from Log Service. The returned result indicates that the metric is modified.
     *
     * @param request - ModifyHybridMonitorTaskRequest
     *
     * @returns ModifyHybridMonitorTaskResponse
     *
     * @param ModifyHybridMonitorTaskRequest $request
     *
     * @return ModifyHybridMonitorTaskResponse
     */
    public function modifyHybridMonitorTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridMonitorTaskWithOptions($request, $runtime);
    }

    /**
     * Modifies a blacklist policy.
     *
     * @param request - ModifyMetricRuleBlackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMetricRuleBlackListResponse
     *
     * @param ModifyMetricRuleBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyMetricRuleBlackListResponse
     */
    public function modifyMetricRuleBlackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->enableEndTime) {
            @$query['EnableEndTime'] = $request->enableEndTime;
        }

        if (null !== $request->enableStartTime) {
            @$query['EnableStartTime'] = $request->enableStartTime;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->scopeType) {
            @$query['ScopeType'] = $request->scopeType;
        }

        if (null !== $request->scopeValue) {
            @$query['ScopeValue'] = $request->scopeValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMetricRuleBlackList',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMetricRuleBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a blacklist policy.
     *
     * @param request - ModifyMetricRuleBlackListRequest
     *
     * @returns ModifyMetricRuleBlackListResponse
     *
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
     * Modifies an alert template.
     *
     * @remarks
     * This topic provides an example on how to modify an alert template whose version is `1` and ID is `123456`. The alert level is changed to `Critical`. The statistical method is changed to `Average`. The alert threshold comparator is changed to `GreaterThanOrEqualToThreshold`. The alert threshold is changed to `90`. The number of alert retries is changed to `3`. The response shows that the alert template is modified.
     *
     * @param request - ModifyMetricRuleTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMetricRuleTemplateResponse
     *
     * @param ModifyMetricRuleTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyMetricRuleTemplateResponse
     */
    public function modifyMetricRuleTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertTemplates) {
            @$query['AlertTemplates'] = $request->alertTemplates;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->restVersion) {
            @$query['RestVersion'] = $request->restVersion;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMetricRuleTemplate',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMetricRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an alert template.
     *
     * @remarks
     * This topic provides an example on how to modify an alert template whose version is `1` and ID is `123456`. The alert level is changed to `Critical`. The statistical method is changed to `Average`. The alert threshold comparator is changed to `GreaterThanOrEqualToThreshold`. The alert threshold is changed to `90`. The number of alert retries is changed to `3`. The response shows that the alert template is modified.
     *
     * @param request - ModifyMetricRuleTemplateRequest
     *
     * @returns ModifyMetricRuleTemplateResponse
     *
     * @param ModifyMetricRuleTemplateRequest $request
     *
     * @return ModifyMetricRuleTemplateResponse
     */
    public function modifyMetricRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * 修改应用分组.
     *
     * @param request - ModifyMonitorGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMonitorGroupResponse
     *
     * @param ModifyMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyMonitorGroupResponse
     */
    public function modifyMonitorGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMonitorGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用分组.
     *
     * @param request - ModifyMonitorGroupRequest
     *
     * @returns ModifyMonitorGroupResponse
     *
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
     * 修改应用分组中的资源.
     *
     * @param request - ModifyMonitorGroupInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMonitorGroupInstancesResponse
     *
     * @param ModifyMonitorGroupInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyMonitorGroupInstancesResponse
     */
    public function modifyMonitorGroupInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMonitorGroupInstances',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMonitorGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用分组中的资源.
     *
     * @param request - ModifyMonitorGroupInstancesRequest
     *
     * @returns ModifyMonitorGroupInstancesResponse
     *
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
     * Modifies a site monitoring task.
     *
     * @remarks
     * The number of site monitoring tasks.
     *
     * @param request - ModifySiteMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySiteMonitorResponse
     *
     * @param ModifySiteMonitorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySiteMonitorResponse
     */
    public function modifySiteMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->alertIds) {
            @$query['AlertIds'] = $request->alertIds;
        }

        if (null !== $request->customSchedule) {
            @$query['CustomSchedule'] = $request->customSchedule;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->intervalUnit) {
            @$query['IntervalUnit'] = $request->intervalUnit;
        }

        if (null !== $request->ispCities) {
            @$query['IspCities'] = $request->ispCities;
        }

        if (null !== $request->optionsJson) {
            @$query['OptionsJson'] = $request->optionsJson;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySiteMonitor',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySiteMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a site monitoring task.
     *
     * @remarks
     * The number of site monitoring tasks.
     *
     * @param request - ModifySiteMonitorRequest
     *
     * @returns ModifySiteMonitorResponse
     *
     * @param ModifySiteMonitorRequest $request
     *
     * @return ModifySiteMonitorResponse
     */
    public function modifySiteMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySiteMonitorWithOptions($request, $runtime);
    }

    /**
     * Creates or modifies an alert contact.
     *
     * @param request - PutContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutContactResponse
     *
     * @param PutContactRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PutContactResponse
     */
    public function putContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->describe) {
            @$query['Describe'] = $request->describe;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->channels) {
            @$query['Channels'] = $request->channels;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutContact',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies an alert contact.
     *
     * @param request - PutContactRequest
     *
     * @returns PutContactResponse
     *
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
     * Creates or modifies an alert contact group.
     *
     * @remarks
     * This topic provides an example on how to create an alert contact group named `ECS_Group`.
     *
     * @param request - PutContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutContactGroupResponse
     *
     * @param PutContactGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutContactGroupResponse
     */
    public function putContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupName) {
            @$query['ContactGroupName'] = $request->contactGroupName;
        }

        if (null !== $request->contactNames) {
            @$query['ContactNames'] = $request->contactNames;
        }

        if (null !== $request->describe) {
            @$query['Describe'] = $request->describe;
        }

        if (null !== $request->enableSubscribed) {
            @$query['EnableSubscribed'] = $request->enableSubscribed;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutContactGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies an alert contact group.
     *
     * @remarks
     * This topic provides an example on how to create an alert contact group named `ECS_Group`.
     *
     * @param request - PutContactGroupRequest
     *
     * @returns PutContactGroupResponse
     *
     * @param PutContactGroupRequest $request
     *
     * @return PutContactGroupResponse
     */
    public function putContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putContactGroupWithOptions($request, $runtime);
    }

    /**
     * Reports custom events.
     *
     * @param request - PutCustomEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutCustomEventResponse
     *
     * @param PutCustomEventRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutCustomEventResponse
     */
    public function putCustomEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventInfo) {
            @$query['EventInfo'] = $request->eventInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutCustomEvent',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutCustomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reports custom events.
     *
     * @param request - PutCustomEventRequest
     *
     * @returns PutCustomEventResponse
     *
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
     * @remarks
     * Before you call this operation, call the PutCustomEvent operation to report the monitoring data of the custom event. For more information, see [PutCustomEvent](https://help.aliyun.com/document_detail/115012.html).
     *
     * @param request - PutCustomEventRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutCustomEventRuleResponse
     *
     * @param PutCustomEventRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutCustomEventRuleResponse
     */
    public function putCustomEventRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->effectiveInterval) {
            @$query['EffectiveInterval'] = $request->effectiveInterval;
        }

        if (null !== $request->emailSubject) {
            @$query['EmailSubject'] = $request->emailSubject;
        }

        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutCustomEventRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutCustomEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * Before you call this operation, call the PutCustomEvent operation to report the monitoring data of the custom event. For more information, see [PutCustomEvent](https://help.aliyun.com/document_detail/115012.html).
     *
     * @param request - PutCustomEventRuleRequest
     *
     * @returns PutCustomEventRuleResponse
     *
     * @param PutCustomEventRuleRequest $request
     *
     * @return PutCustomEventRuleResponse
     */
    public function putCustomEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomEventRuleWithOptions($request, $runtime);
    }

    /**
     * Reports monitoring data.
     *
     * @remarks
     * >  We recommend that you call the [PutHybridMonitorMetricData](https://help.aliyun.com/document_detail/383455.html) operation of Hybrid Cloud Monitoring to report monitoring data.
     *
     * @param request - PutCustomMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutCustomMetricResponse
     *
     * @param PutCustomMetricRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutCustomMetricResponse
     */
    public function putCustomMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->metricList) {
            @$query['MetricList'] = $request->metricList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutCustomMetric',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutCustomMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reports monitoring data.
     *
     * @remarks
     * >  We recommend that you call the [PutHybridMonitorMetricData](https://help.aliyun.com/document_detail/383455.html) operation of Hybrid Cloud Monitoring to report monitoring data.
     *
     * @param request - PutCustomMetricRequest
     *
     * @returns PutCustomMetricResponse
     *
     * @param PutCustomMetricRequest $request
     *
     * @return PutCustomMetricResponse
     */
    public function putCustomMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomMetricWithOptions($request, $runtime);
    }

    /**
     * Creates a custom alert rule.
     *
     * @remarks
     * Before you call this operation, call the PutCustomMetric operation to report custom monitoring data. For more information, see [PutCustomMetric](https://help.aliyun.com/document_detail/115004.html).
     *
     * @param request - PutCustomMetricRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutCustomMetricRuleResponse
     *
     * @param PutCustomMetricRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutCustomMetricRuleResponse
     */
    public function putCustomMetricRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comparisonOperator) {
            @$query['ComparisonOperator'] = $request->comparisonOperator;
        }

        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->effectiveInterval) {
            @$query['EffectiveInterval'] = $request->effectiveInterval;
        }

        if (null !== $request->emailSubject) {
            @$query['EmailSubject'] = $request->emailSubject;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->statistics) {
            @$query['Statistics'] = $request->statistics;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutCustomMetricRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutCustomMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom alert rule.
     *
     * @remarks
     * Before you call this operation, call the PutCustomMetric operation to report custom monitoring data. For more information, see [PutCustomMetric](https://help.aliyun.com/document_detail/115004.html).
     *
     * @param request - PutCustomMetricRuleRequest
     *
     * @returns PutCustomMetricRuleResponse
     *
     * @param PutCustomMetricRuleRequest $request
     *
     * @return PutCustomMetricRuleResponse
     */
    public function putCustomMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomMetricRuleWithOptions($request, $runtime);
    }

    /**
     * 创建或者修改事件监控.
     *
     * @remarks
     * If the specified rule name does not exist, an event-triggered alert rule is created. If the specified rule name exists, the specified event-triggered alert rule is modified.
     * In this example, the `myRuleName` alert rule is created for the `ecs` cloud service.
     *
     * @param request - PutEventRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutEventRuleResponse
     *
     * @param PutEventRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PutEventRuleResponse
     */
    public function putEventRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eventPattern) {
            @$query['EventPattern'] = $request->eventPattern;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutEventRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建或者修改事件监控.
     *
     * @remarks
     * If the specified rule name does not exist, an event-triggered alert rule is created. If the specified rule name exists, the specified event-triggered alert rule is modified.
     * In this example, the `myRuleName` alert rule is created for the `ecs` cloud service.
     *
     * @param request - PutEventRuleRequest
     *
     * @returns PutEventRuleResponse
     *
     * @param PutEventRuleRequest $request
     *
     * @return PutEventRuleResponse
     */
    public function putEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventRuleWithOptions($request, $runtime);
    }

    /**
     * Adds or modifies the push channels of an event-triggered alert rule.
     *
     * @param request - PutEventRuleTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutEventRuleTargetsResponse
     *
     * @param PutEventRuleTargetsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutEventRuleTargetsResponse
     */
    public function putEventRuleTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactParameters) {
            @$query['ContactParameters'] = $request->contactParameters;
        }

        if (null !== $request->fcParameters) {
            @$query['FcParameters'] = $request->fcParameters;
        }

        if (null !== $request->mnsParameters) {
            @$query['MnsParameters'] = $request->mnsParameters;
        }

        if (null !== $request->openApiParameters) {
            @$query['OpenApiParameters'] = $request->openApiParameters;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->slsParameters) {
            @$query['SlsParameters'] = $request->slsParameters;
        }

        if (null !== $request->webhookParameters) {
            @$query['WebhookParameters'] = $request->webhookParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutEventRuleTargets',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutEventRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or modifies the push channels of an event-triggered alert rule.
     *
     * @param request - PutEventRuleTargetsRequest
     *
     * @returns PutEventRuleTargetsResponse
     *
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
     * Creates or modifies a configuration set for exporting monitoring data.
     *
     * @remarks
     * > The monitoring data can be exported only to Log Service. More services will be supported in the future.
     *
     * @param request - PutExporterOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutExporterOutputResponse
     *
     * @param PutExporterOutputRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PutExporterOutputResponse
     */
    public function putExporterOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configJson) {
            @$query['ConfigJson'] = $request->configJson;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->destName) {
            @$query['DestName'] = $request->destName;
        }

        if (null !== $request->destType) {
            @$query['DestType'] = $request->destType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutExporterOutput',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutExporterOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies a configuration set for exporting monitoring data.
     *
     * @remarks
     * > The monitoring data can be exported only to Log Service. More services will be supported in the future.
     *
     * @param request - PutExporterOutputRequest
     *
     * @returns PutExporterOutputResponse
     *
     * @param PutExporterOutputRequest $request
     *
     * @return PutExporterOutputResponse
     */
    public function putExporterOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putExporterOutputWithOptions($request, $runtime);
    }

    /**
     * Creates or modifies a data export rule.
     *
     * @param request - PutExporterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutExporterRuleResponse
     *
     * @param PutExporterRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutExporterRuleResponse
     */
    public function putExporterRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->describe) {
            @$query['Describe'] = $request->describe;
        }

        if (null !== $request->dstNames) {
            @$query['DstNames'] = $request->dstNames;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->targetWindows) {
            @$query['TargetWindows'] = $request->targetWindows;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutExporterRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutExporterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies a data export rule.
     *
     * @param request - PutExporterRuleRequest
     *
     * @returns PutExporterRuleResponse
     *
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
     * Creates or modifies an alert rule for an application group.
     *
     * @remarks
     * This topic provides an example on how to create an alert rule for the `cpu_total` metric of Elastic Compute Service (ECS) in the `17285****` application group. The ID of the alert rule is `123456`. The name of the alert rule is `Rule_test`. The alert level is `Critical`. The statistical method is `Average`. The alert threshold comparator is `GreaterThanOrEqualToThreshold`. The alert threshold is `90`. The number of alert retries is `3`. The returned result shows that the alert rule is created and the alert rule ID is `123456`.
     *
     * @param request - PutGroupMetricRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutGroupMetricRuleResponse
     *
     * @param PutGroupMetricRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutGroupMetricRuleResponse
     */
    public function putGroupMetricRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->effectiveInterval) {
            @$query['EffectiveInterval'] = $request->effectiveInterval;
        }

        if (null !== $request->emailSubject) {
            @$query['EmailSubject'] = $request->emailSubject;
        }

        if (null !== $request->extraDimensionJson) {
            @$query['ExtraDimensionJson'] = $request->extraDimensionJson;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->noDataPolicy) {
            @$query['NoDataPolicy'] = $request->noDataPolicy;
        }

        if (null !== $request->noEffectiveInterval) {
            @$query['NoEffectiveInterval'] = $request->noEffectiveInterval;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        if (null !== $request->escalations) {
            @$query['Escalations'] = $request->escalations;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutGroupMetricRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutGroupMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies an alert rule for an application group.
     *
     * @remarks
     * This topic provides an example on how to create an alert rule for the `cpu_total` metric of Elastic Compute Service (ECS) in the `17285****` application group. The ID of the alert rule is `123456`. The name of the alert rule is `Rule_test`. The alert level is `Critical`. The statistical method is `Average`. The alert threshold comparator is `GreaterThanOrEqualToThreshold`. The alert threshold is `90`. The number of alert retries is `3`. The returned result shows that the alert rule is created and the alert rule ID is `123456`.
     *
     * @param request - PutGroupMetricRuleRequest
     *
     * @returns PutGroupMetricRuleResponse
     *
     * @param PutGroupMetricRuleRequest $request
     *
     * @return PutGroupMetricRuleResponse
     */
    public function putGroupMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putGroupMetricRuleWithOptions($request, $runtime);
    }

    /**
     * Imports the monitoring data of a metric to a namespace of Hybrid Cloud Monitoring.
     *
     * @remarks
     * ## [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ## [](#)Limits
     * The size of the monitoring data that you import at a time must be less than or equal to 1 MB.
     * ## [](#)Operation description
     * This topic provides an example on how to import the monitoring data of the `CPU_Usage` metric to the `default-aliyun` namespace of Hybrid Cloud Monitoring.
     *
     * @param request - PutHybridMonitorMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutHybridMonitorMetricDataResponse
     *
     * @param PutHybridMonitorMetricDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PutHybridMonitorMetricDataResponse
     */
    public function putHybridMonitorMetricDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->metricList) {
            @$query['MetricList'] = $request->metricList;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutHybridMonitorMetricData',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutHybridMonitorMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports the monitoring data of a metric to a namespace of Hybrid Cloud Monitoring.
     *
     * @remarks
     * ## [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ## [](#)Limits
     * The size of the monitoring data that you import at a time must be less than or equal to 1 MB.
     * ## [](#)Operation description
     * This topic provides an example on how to import the monitoring data of the `CPU_Usage` metric to the `default-aliyun` namespace of Hybrid Cloud Monitoring.
     *
     * @param request - PutHybridMonitorMetricDataRequest
     *
     * @returns PutHybridMonitorMetricDataResponse
     *
     * @param PutHybridMonitorMetricDataRequest $request
     *
     * @return PutHybridMonitorMetricDataResponse
     */
    public function putHybridMonitorMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putHybridMonitorMetricDataWithOptions($request, $runtime);
    }

    /**
     * Creates or modifies a log monitoring metric.
     *
     * @remarks
     * In the example of this topic, the `cpu_total` log monitoring metric is created. The response shows that the log monitoring metric is created and the metric ID is `16****`.
     *
     * @param request - PutLogMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutLogMonitorResponse
     *
     * @param PutLogMonitorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PutLogMonitorResponse
     */
    public function putLogMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregates) {
            @$query['Aggregates'] = $request->aggregates;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupbys) {
            @$query['Groupbys'] = $request->groupbys;
        }

        if (null !== $request->logId) {
            @$query['LogId'] = $request->logId;
        }

        if (null !== $request->metricExpress) {
            @$query['MetricExpress'] = $request->metricExpress;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->slsLogstore) {
            @$query['SlsLogstore'] = $request->slsLogstore;
        }

        if (null !== $request->slsProject) {
            @$query['SlsProject'] = $request->slsProject;
        }

        if (null !== $request->slsRegionId) {
            @$query['SlsRegionId'] = $request->slsRegionId;
        }

        if (null !== $request->tumblingwindows) {
            @$query['Tumblingwindows'] = $request->tumblingwindows;
        }

        if (null !== $request->unit) {
            @$query['Unit'] = $request->unit;
        }

        if (null !== $request->valueFilter) {
            @$query['ValueFilter'] = $request->valueFilter;
        }

        if (null !== $request->valueFilterRelation) {
            @$query['ValueFilterRelation'] = $request->valueFilterRelation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutLogMonitor',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutLogMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies a log monitoring metric.
     *
     * @remarks
     * In the example of this topic, the `cpu_total` log monitoring metric is created. The response shows that the log monitoring metric is created and the metric ID is `16****`.
     *
     * @param request - PutLogMonitorRequest
     *
     * @returns PutLogMonitorResponse
     *
     * @param PutLogMonitorRequest $request
     *
     * @return PutLogMonitorResponse
     */
    public function putLogMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putLogMonitorWithOptions($request, $runtime);
    }

    /**
     * Adds or modifies the push channels of an alert rule.
     *
     * @remarks
     * # [](#)
     * This topic provides an example on how to associate an alert rule with a resource. In this example, the alert rule is `ae06917_75a8c43178ab66****`, the resource is `acs:mns:cn-hangzhou:120886317861****:/queues/test/message`, and the ID of the resource for which alerts are triggered is `1`. The response indicates that the resource is associated with the specified alert rule.
     *
     * @param request - PutMetricRuleTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutMetricRuleTargetsResponse
     *
     * @param PutMetricRuleTargetsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutMetricRuleTargets',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutMetricRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or modifies the push channels of an alert rule.
     *
     * @remarks
     * # [](#)
     * This topic provides an example on how to associate an alert rule with a resource. In this example, the alert rule is `ae06917_75a8c43178ab66****`, the resource is `acs:mns:cn-hangzhou:120886317861****:/queues/test/message`, and the ID of the resource for which alerts are triggered is `1`. The response indicates that the resource is associated with the specified alert rule.
     *
     * @param request - PutMetricRuleTargetsRequest
     *
     * @returns PutMetricRuleTargetsResponse
     *
     * @param PutMetricRuleTargetsRequest $request
     *
     * @return PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * Creates or modifies an alert rule to dynamically add instances that meet the rule to an application group.
     *
     * @param request - PutMonitorGroupDynamicRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutMonitorGroupDynamicRuleResponse
     *
     * @param PutMonitorGroupDynamicRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PutMonitorGroupDynamicRuleResponse
     */
    public function putMonitorGroupDynamicRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupRules) {
            @$query['GroupRules'] = $request->groupRules;
        }

        if (null !== $request->isAsync) {
            @$query['IsAsync'] = $request->isAsync;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutMonitorGroupDynamicRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutMonitorGroupDynamicRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies an alert rule to dynamically add instances that meet the rule to an application group.
     *
     * @param request - PutMonitorGroupDynamicRuleRequest
     *
     * @returns PutMonitorGroupDynamicRuleResponse
     *
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
     * Configures global settings for the CloudMonitor agent.
     *
     * @param request - PutMonitoringConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutMonitoringConfigResponse
     *
     * @param PutMonitoringConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutMonitoringConfigResponse
     */
    public function putMonitoringConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoInstall) {
            @$query['AutoInstall'] = $request->autoInstall;
        }

        if (null !== $request->enableInstallAgentNewECS) {
            @$query['EnableInstallAgentNewECS'] = $request->enableInstallAgentNewECS;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutMonitoringConfig',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutMonitoringConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures global settings for the CloudMonitor agent.
     *
     * @param request - PutMonitoringConfigRequest
     *
     * @returns PutMonitoringConfigResponse
     *
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
     * Configures an alert rule.
     *
     * @remarks
     * This topic provides an example on how to create a threshold-triggered alert rule for the `cpu_total` metric of an Elastic Compute Service (ECS) instance whose ID is `i-uf6j91r34rnwawoo****`. The namespace of ECS metrics is `acs_ecs_dashboard`. The alert contact group of the alert rule is `ECS_Group`. The name of the alert rule is `test123`. The ID of the alert rule is `a151cd6023eacee2f0978e03863cc1697c89508****`. The statistical method for Critical-level alerts is `Average`. The comparison operator for Critical-level alerts is `GreaterThanOrEqualToThreshold`. The threshold for Critical-level alerts is `90`. The consecutive number of times for which the metric value meets the trigger condition before a Critical-level alert is triggered is `3`.
     * >  Statistics verification was added on August 15, 2024. Only the statistical value of the corresponding metric can be set for the Statistics parameter. For more information about how to obtain the value of this parameter, see [Appendix 1: Metrics](https://www.alibabacloud.com/help/en/cms/support/appendix-1-metrics).
     *
     * @param tmpReq - PutResourceMetricRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutResourceMetricRuleResponse
     *
     * @param PutResourceMetricRuleRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return PutResourceMetricRuleResponse
     */
    public function putResourceMetricRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PutResourceMetricRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->compositeExpression) {
            $request->compositeExpressionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->compositeExpression, 'CompositeExpression', 'json');
        }

        if (null !== $tmpReq->prometheus) {
            $request->prometheusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->prometheus, 'Prometheus', 'json');
        }

        $query = [];
        if (null !== $request->compositeExpressionShrink) {
            @$query['CompositeExpression'] = $request->compositeExpressionShrink;
        }

        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->effectiveInterval) {
            @$query['EffectiveInterval'] = $request->effectiveInterval;
        }

        if (null !== $request->emailSubject) {
            @$query['EmailSubject'] = $request->emailSubject;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->noDataPolicy) {
            @$query['NoDataPolicy'] = $request->noDataPolicy;
        }

        if (null !== $request->noEffectiveInterval) {
            @$query['NoEffectiveInterval'] = $request->noEffectiveInterval;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->prometheusShrink) {
            @$query['Prometheus'] = $request->prometheusShrink;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        if (null !== $request->escalations) {
            @$query['Escalations'] = $request->escalations;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutResourceMetricRule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutResourceMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures an alert rule.
     *
     * @remarks
     * This topic provides an example on how to create a threshold-triggered alert rule for the `cpu_total` metric of an Elastic Compute Service (ECS) instance whose ID is `i-uf6j91r34rnwawoo****`. The namespace of ECS metrics is `acs_ecs_dashboard`. The alert contact group of the alert rule is `ECS_Group`. The name of the alert rule is `test123`. The ID of the alert rule is `a151cd6023eacee2f0978e03863cc1697c89508****`. The statistical method for Critical-level alerts is `Average`. The comparison operator for Critical-level alerts is `GreaterThanOrEqualToThreshold`. The threshold for Critical-level alerts is `90`. The consecutive number of times for which the metric value meets the trigger condition before a Critical-level alert is triggered is `3`.
     * >  Statistics verification was added on August 15, 2024. Only the statistical value of the corresponding metric can be set for the Statistics parameter. For more information about how to obtain the value of this parameter, see [Appendix 1: Metrics](https://www.alibabacloud.com/help/en/cms/support/appendix-1-metrics).
     *
     * @param request - PutResourceMetricRuleRequest
     *
     * @returns PutResourceMetricRuleResponse
     *
     * @param PutResourceMetricRuleRequest $request
     *
     * @return PutResourceMetricRuleResponse
     */
    public function putResourceMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putResourceMetricRuleWithOptions($request, $runtime);
    }

    /**
     * Creates multiple alert rules for the specified metric of a specified resource.
     *
     * @remarks
     * This topic provides an example on how to create a threshold-triggered alert rule for the `cpu_total` metric of an Elastic Compute Service (ECS) instance whose ID is `i-uf6j91r34rnwawoo****`. The namespace of ECS metrics is `acs_ecs_dashboard`. The alert contact group of the alert rule is `ECS_Group`. The name of the alert rule is `test123`. The ID of the alert rule is `a151cd6023eacee2f0978e03863cc1697c89508****`. The statistical method for Critical-level alerts is `Average`. The comparison operator for Critical-level alerts is `GreaterThanOrEqualToThreshold`. The threshold for Critical-level alerts is `90`. The consecutive number of times for which the metric value meets the trigger condition before a Critical-level alert is triggered is `3`.
     * >  Statistics verification was added on August 15, 2024. Only the statistical value of the corresponding metric can be set for the Statistics parameter. For more information about how to obtain the value of this parameter, see [Appendix 1: Metrics](https://www.alibabacloud.com/help/en/cms/support/appendix-1-metrics).
     *
     * @param request - PutResourceMetricRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutResourceMetricRulesResponse
     *
     * @param PutResourceMetricRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PutResourceMetricRulesResponse
     */
    public function putResourceMetricRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutResourceMetricRules',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutResourceMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates multiple alert rules for the specified metric of a specified resource.
     *
     * @remarks
     * This topic provides an example on how to create a threshold-triggered alert rule for the `cpu_total` metric of an Elastic Compute Service (ECS) instance whose ID is `i-uf6j91r34rnwawoo****`. The namespace of ECS metrics is `acs_ecs_dashboard`. The alert contact group of the alert rule is `ECS_Group`. The name of the alert rule is `test123`. The ID of the alert rule is `a151cd6023eacee2f0978e03863cc1697c89508****`. The statistical method for Critical-level alerts is `Average`. The comparison operator for Critical-level alerts is `GreaterThanOrEqualToThreshold`. The threshold for Critical-level alerts is `90`. The consecutive number of times for which the metric value meets the trigger condition before a Critical-level alert is triggered is `3`.
     * >  Statistics verification was added on August 15, 2024. Only the statistical value of the corresponding metric can be set for the Statistics parameter. For more information about how to obtain the value of this parameter, see [Appendix 1: Metrics](https://www.alibabacloud.com/help/en/cms/support/appendix-1-metrics).
     *
     * @param request - PutResourceMetricRulesRequest
     *
     * @returns PutResourceMetricRulesResponse
     *
     * @param PutResourceMetricRulesRequest $request
     *
     * @return PutResourceMetricRulesResponse
     */
    public function putResourceMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putResourceMetricRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes tags.
     *
     * @param request - RemoveTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveTagsResponse
     *
     * @param RemoveTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RemoveTagsResponse
     */
    public function removeTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveTags',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes tags.
     *
     * @param request - RemoveTagsRequest
     *
     * @returns RemoveTagsResponse
     *
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
     * Debugs a system event of an Alibaba Cloud service.
     *
     * @remarks
     * This operation is used to test whether a system event can be triggered as expected. You can call this operation to simulate a system event and check whether an expected response is returned after the system event triggers an alert.
     *
     * @param request - SendDryRunSystemEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendDryRunSystemEventResponse
     *
     * @param SendDryRunSystemEventRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SendDryRunSystemEventResponse
     */
    public function sendDryRunSystemEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventContent) {
            @$query['EventContent'] = $request->eventContent;
        }

        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendDryRunSystemEvent',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendDryRunSystemEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Debugs a system event of an Alibaba Cloud service.
     *
     * @remarks
     * This operation is used to test whether a system event can be triggered as expected. You can call this operation to simulate a system event and check whether an expected response is returned after the system event triggers an alert.
     *
     * @param request - SendDryRunSystemEventRequest
     *
     * @returns SendDryRunSystemEventResponse
     *
     * @param SendDryRunSystemEventRequest $request
     *
     * @return SendDryRunSystemEventResponse
     */
    public function sendDryRunSystemEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendDryRunSystemEventWithOptions($request, $runtime);
    }

    /**
     * Uninstalls the CloudMonitor agent from a third-party host.
     *
     * @remarks
     * >  This API operation is not applicable to Elastic Compute Service (ECS) instances. To uninstall the agent from an ECS instance, see [Install and uninstall the CloudMonitor agent](https://help.aliyun.com/document_detail/183482.html).
     *
     * @param request - UninstallMonitoringAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallMonitoringAgentResponse
     *
     * @param UninstallMonitoringAgentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UninstallMonitoringAgentResponse
     */
    public function uninstallMonitoringAgentWithOptions($request, $runtime)
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
            'action' => 'UninstallMonitoringAgent',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UninstallMonitoringAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls the CloudMonitor agent from a third-party host.
     *
     * @remarks
     * >  This API operation is not applicable to Elastic Compute Service (ECS) instances. To uninstall the agent from an ECS instance, see [Install and uninstall the CloudMonitor agent](https://help.aliyun.com/document_detail/183482.html).
     *
     * @param request - UninstallMonitoringAgentRequest
     *
     * @returns UninstallMonitoringAgentResponse
     *
     * @param UninstallMonitoringAgentRequest $request
     *
     * @return UninstallMonitoringAgentResponse
     */
    public function uninstallMonitoringAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallMonitoringAgentWithOptions($request, $runtime);
    }
}
