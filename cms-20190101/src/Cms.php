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
     * @summary Adds tags to an application group.
     *  *
     * @description This topic provides an example on how to add a tag to an application group whose ID is `7301****`. In this example, the key of the tag is `key1` and the value of the tag is `value1`.
     *  *
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
     * @summary Adds tags to an application group.
     *  *
     * @description This topic provides an example on how to add a tag to an application group whose ID is `7301****`. In this example, the key of the tag is `key1` and the value of the tag is `value1`.
     *  *
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
     * @summary Applies an alert template to an application group to generate an alert rule.
     *  *
     * @description In this example, the `700****` alert template is applied to the `123456` application group. For the generated alert rule, the ID is `applyTemplate8ab74c6b-9f27-47ab-8841-de01dc08****`, and the name is `test123`.
     *  *
     * @param ApplyMetricRuleTemplateRequest $request ApplyMetricRuleTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyMetricRuleTemplateResponse ApplyMetricRuleTemplateResponse
     */
    public function applyMetricRuleTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appendMode)) {
            $query['AppendMode'] = $request->appendMode;
        }
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
     * @summary Applies an alert template to an application group to generate an alert rule.
     *  *
     * @description In this example, the `700****` alert template is applied to the `123456` application group. For the generated alert rule, the ID is `applyTemplate8ab74c6b-9f27-47ab-8841-de01dc08****`, and the name is `test123`.
     *  *
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
     * @summary Creates site monitoring tasks.
     *  *
     * @description This topic provides an example on how to create a site monitoring task named `HangZhou_ECS1`. The URL that is monitored by the task is `https://www.aliyun.com` and the type of the task is `HTTP`. The returned result shows that the site monitoring task is created. The name of the site monitoring task is `HangZhou_ECS1` and the task ID is `679fbe4f-b80b-4706-91b2-5427b43e****`.
     *  *
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
     * @summary Creates site monitoring tasks.
     *  *
     * @description This topic provides an example on how to create a site monitoring task named `HangZhou_ECS1`. The URL that is monitored by the task is `https://www.aliyun.com` and the type of the task is `HTTP`. The returned result shows that the site monitoring task is created. The name of the site monitoring task is `HangZhou_ECS1` and the task ID is `679fbe4f-b80b-4706-91b2-5427b43e****`.
     *  *
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
     * @summary Exports the monitoring data that is defined in the Cursor operation.
     *  *
     * @description ### [](#)Prerequisites
     * The `Cursor` information is returned by calling the [Cursor](https://help.aliyun.com/document_detail/2330730.html) operation.
     * ### [](#)Description
     * This topic provides an example on how to export the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The `Cursor` information is specified. A maximum of 1,000 data entries can be returned in each response.
     *  *
     * @param BatchExportRequest $tmpReq  BatchExportRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchExportResponse BatchExportResponse
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
     * @summary Exports the monitoring data that is defined in the Cursor operation.
     *  *
     * @description ### [](#)Prerequisites
     * The `Cursor` information is returned by calling the [Cursor](https://help.aliyun.com/document_detail/2330730.html) operation.
     * ### [](#)Description
     * This topic provides an example on how to export the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The `Cursor` information is specified. A maximum of 1,000 data entries can be returned in each response.
     *  *
     * @param BatchExportRequest $request BatchExportRequest
     *
     * @return BatchExportResponse BatchExportResponse
     */
    public function batchExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchExportWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application group based on the tags of cloud resources.
     *  *
     * @description This operation is available for Elastic Compute Service (ECS), ApsaraDB RDS, and Server Load Balancer (SLB).
     * This topic provides an example to show how to create an application group for resources whose tag key is `ecs_instance`. In this example, the alert contact group of the application group is `ECS_Group`.
     *  *
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
     * @summary Creates an application group based on the tags of cloud resources.
     *  *
     * @description This operation is available for Elastic Compute Service (ECS), ApsaraDB RDS, and Server Load Balancer (SLB).
     * This topic provides an example to show how to create an application group for resources whose tag key is `ecs_instance`. In this example, the alert contact group of the application group is `ECS_Group`.
     *  *
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
     * @summary Creates one or more alert rules for a specified application group.
     *  *
     * @description This topic provides an example to show how to create an alert rule for the `cpu_total` metric of Elastic Compute Service (ECS) in the `123456` application group. The ID of the alert rule is `456789`. The name of the alert rule is `ECS_Rule1`. The alert level is `Critical`. The statistical method is `Average`. The comparison operator is `GreaterThanOrEqualToThreshold`. The alert threshold is `90`. The number of alert retries is `3`. The response shows that the alert rule named `ECS_Rule1` is created.
     *  *
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
     * @summary Creates one or more alert rules for a specified application group.
     *  *
     * @description This topic provides an example to show how to create an alert rule for the `cpu_total` metric of Elastic Compute Service (ECS) in the `123456` application group. The ID of the alert rule is `456789`. The name of the alert rule is `ECS_Rule1`. The alert level is `Critical`. The statistical method is `Average`. The comparison operator is `GreaterThanOrEqualToThreshold`. The alert threshold is `90`. The number of alert retries is `3`. The response shows that the alert rule named `ECS_Rule1` is created.
     *  *
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
     * @summary Creates a process monitoring task for an application group.
     *  *
     * @param CreateGroupMonitoringAgentProcessRequest $request CreateGroupMonitoringAgentProcessRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupMonitoringAgentProcessResponse CreateGroupMonitoringAgentProcessResponse
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
     * @summary Creates a process monitoring task for an application group.
     *  *
     * @param CreateGroupMonitoringAgentProcessRequest $request CreateGroupMonitoringAgentProcessRequest
     *
     * @return CreateGroupMonitoringAgentProcessResponse CreateGroupMonitoringAgentProcessResponse
     */
    public function createGroupMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an availability monitoring task.
     *  *
     * @description This topic provides an example on how to create an availability monitoring task named `task1` in an application group named `123456`. The TaskType parameter of the task is set to `HTTP`. After you start the task, the system sends alerts by using the specified email address and DingTalk chatbot.
     *  *
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
     * @summary Creates an availability monitoring task.
     *  *
     * @description This topic provides an example on how to create an availability monitoring task named `task1` in an application group named `123456`. The TaskType parameter of the task is set to `HTTP`. After you start the task, the system sends alerts by using the specified email address and DingTalk chatbot.
     *  *
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
     * @summary Creates a namespace.
     *  *
     * @description # [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * # [](#)Description
     * This topic provides an example on how to create a namespace named `aliyun`. In this example, the data retention period of the namespace is set to `cms.s1.3xlarge`. The returned result indicates that the namespace is created.
     *  *
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
        if (!Utils::isUnset($request->namespaceRegion)) {
            $query['NamespaceRegion'] = $request->namespaceRegion;
        }
        if (!Utils::isUnset($request->namespaceType)) {
            $query['NamespaceType'] = $request->namespaceType;
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
     * @summary Creates a namespace.
     *  *
     * @description # [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * # [](#)Description
     * This topic provides an example on how to create a namespace named `aliyun`. In this example, the data retention period of the namespace is set to `cms.s1.3xlarge`. The returned result indicates that the namespace is created.
     *  *
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
     * @summary Creates a Logstore group for the metrics of Simple Log Service logs.
     *  *
     * @description # Prerequisites
     * Simple Log Service is activated. A project and a Logstore are created in Simple Log Service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/54604.html).
     * # Description
     * In this example, a Logstore group named `Logstore_test` is created. The region ID is `cn-hangzhou`. The project is `aliyun-project`. The Logstore is `Logstore-ECS`. The response shows that the Logstore group is created.
     *  *
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
     * @summary Creates a Logstore group for the metrics of Simple Log Service logs.
     *  *
     * @description # Prerequisites
     * Simple Log Service is activated. A project and a Logstore are created in Simple Log Service. For more information, see [Getting Started](https://help.aliyun.com/document_detail/54604.html).
     * # Description
     * In this example, a Logstore group named `Logstore_test` is created. The region ID is `cn-hangzhou`. The project is `aliyun-project`. The Logstore is `Logstore-ECS`. The response shows that the Logstore group is created.
     *  *
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
     * @summary Creates a metric import task for an Alibaba Cloud service or creates a metric for logs imported from Simple Log Service.
     *  *
     * @description # [](#)Prerequisites
     * *   Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * *   If you want to create a metric for logs imported from Simple Log Service, make sure that you have activated Simple Log Service and created a project and a Logstore. For more information, see [Getting Started](https://help.aliyun.com/document_detail/54604.html).
     * # [](#)Description
     * This topic provides an example on how to create a metric import task named `aliyun_task` for Elastic Compute Service (ECS). The task imports the `cpu_total` metric to the `aliyun` namespace. The response shows that the metric import task is created.
     *  *
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
        if (!Utils::isUnset($request->cloudAccessId)) {
            $query['CloudAccessId'] = $request->cloudAccessId;
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
     * @summary Creates a metric import task for an Alibaba Cloud service or creates a metric for logs imported from Simple Log Service.
     *  *
     * @description # [](#)Prerequisites
     * *   Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * *   If you want to create a metric for logs imported from Simple Log Service, make sure that you have activated Simple Log Service and created a project and a Logstore. For more information, see [Getting Started](https://help.aliyun.com/document_detail/54604.html).
     * # [](#)Description
     * This topic provides an example on how to create a metric import task named `aliyun_task` for Elastic Compute Service (ECS). The task imports the `cpu_total` metric to the `aliyun` namespace. The response shows that the metric import task is created.
     *  *
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
     * @summary Creates an instant test task.
     *  *
     * @description You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring.
     * This topic provides an example to show how to create an instant test task. The name of the task is `task1`. The tested address is `http://www.aliyun.com`. The test type is `HTTP`. The number of detection points is `1`.
     *  *
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
     * @summary Creates an instant test task.
     *  *
     * @description You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring.
     * This topic provides an example to show how to create an instant test task. The name of the task is `task1`. The tested address is `http://www.aliyun.com`. The test type is `HTTP`. The number of detection points is `1`.
     *  *
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
     * @summary Creates a blacklist policy.
     *  *
     * @description ### Background information
     * *   CloudMonitor blocks alert notifications based on the blacklist policies that take effect. To block alert notifications when the value of a metric that belongs to a cloud service reaches the threshold that you specified, add the metric to a blacklist policy.
     * *   CloudMonitor allows you to create blacklist policies only based on threshold metrics. You cannot create blacklist policies based on system events. For more information about the cloud services and the thresholds of the metrics that are supported by CloudMonitor, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     *  *
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
     * @summary Creates a blacklist policy.
     *  *
     * @description ### Background information
     * *   CloudMonitor blocks alert notifications based on the blacklist policies that take effect. To block alert notifications when the value of a metric that belongs to a cloud service reaches the threshold that you specified, add the metric to a blacklist policy.
     * *   CloudMonitor allows you to create blacklist policies only based on threshold metrics. You cannot create blacklist policies based on system events. For more information about the cloud services and the thresholds of the metrics that are supported by CloudMonitor, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     *  *
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
     * @summary Associates resources with an alert rule.
     *  *
     * @param CreateMetricRuleResourcesRequest $request CreateMetricRuleResourcesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMetricRuleResourcesResponse CreateMetricRuleResourcesResponse
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
     * @summary Associates resources with an alert rule.
     *  *
     * @param CreateMetricRuleResourcesRequest $request CreateMetricRuleResourcesRequest
     *
     * @return CreateMetricRuleResourcesResponse CreateMetricRuleResourcesResponse
     */
    public function createMetricRuleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an alert template.
     *  *
     * @param CreateMetricRuleTemplateRequest $request CreateMetricRuleTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMetricRuleTemplateResponse CreateMetricRuleTemplateResponse
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
     * @summary Creates an alert template.
     *  *
     * @param CreateMetricRuleTemplateRequest $request CreateMetricRuleTemplateRequest
     *
     * @return CreateMetricRuleTemplateResponse CreateMetricRuleTemplateResponse
     */
    public function createMetricRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task to monitor a process.
     *  *
     * @param CreateMonitorAgentProcessRequest $request CreateMonitorAgentProcessRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitorAgentProcessResponse CreateMonitorAgentProcessResponse
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
     * @summary Creates a task to monitor a process.
     *  *
     * @param CreateMonitorAgentProcessRequest $request CreateMonitorAgentProcessRequest
     *
     * @return CreateMonitorAgentProcessResponse CreateMonitorAgentProcessResponse
     */
    public function createMonitorAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application group.
     *  *
     * @description In this example, an application group named `ECS_Group` is created.
     *  *
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
     * @summary Creates an application group.
     *  *
     * @description In this example, an application group named `ECS_Group` is created.
     *  *
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
     * @summary Creates an application group by using a resource group.
     *  *
     * @description This topic provides an example on how to create an application group by using the resource group `CloudMonitor` and the alert contact group `ECS_Group`. The region ID of the resource group is `cn-hangzhou`.
     *  *
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
     * @summary Creates an application group by using a resource group.
     *  *
     * @description This topic provides an example on how to create an application group by using the resource group `CloudMonitor` and the alert contact group `ECS_Group`. The region ID of the resource group is `cn-hangzhou`.
     *  *
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
     * @summary Adds resources to an application group.
     *  *
     * @description You can add a maximum of 1,000 instances to an application group at a time. You can add a maximum of 3,000 instances of an Alibaba Cloud service to an application group. The total number of instances that you can add to an application group is unlimited.
     * In this example, an Elastic Compute Service (ECS) instance in the `China (Hangzhou)` region is added to the `3607****` application group. The instance ID is `i-2ze26xj5wwy12****` and the instance name is `test-instance-ecs`.
     *  *
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
     * @summary Adds resources to an application group.
     *  *
     * @description You can add a maximum of 1,000 instances to an application group at a time. You can add a maximum of 3,000 instances of an Alibaba Cloud service to an application group. The total number of instances that you can add to an application group is unlimited.
     * In this example, an Elastic Compute Service (ECS) instance in the `China (Hangzhou)` region is added to the `3607****` application group. The instance ID is `i-2ze26xj5wwy12****` and the instance name is `test-instance-ecs`.
     *  *
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
     * @summary Creates a policy to pause alert notifications for an application group.
     *  *
     * @description If the policy is valid, no alert notifications are sent for the application group.
     * This topic describes how to create the `PauseNotify` policy to pause alert notifications for the `7301****` application group. The StartTime parameter is set to `1622949300000` and the EndTime parameter is set to `1623208500000`. This indicates that the policy is valid from `2021-06-06 11:15:00 UTC+8` to `2021-06-09 11:15:00 UTC+8`.
     *  *
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
     * @summary Creates a policy to pause alert notifications for an application group.
     *  *
     * @description If the policy is valid, no alert notifications are sent for the application group.
     * This topic describes how to create the `PauseNotify` policy to pause alert notifications for the `7301****` application group. The StartTime parameter is set to `1622949300000` and the EndTime parameter is set to `1623208500000`. This indicates that the policy is valid from `2021-06-06 11:15:00 UTC+8` to `2021-06-09 11:15:00 UTC+8`.
     *  *
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
     * @summary Creates a task to monitor a specified process.
     *  *
     * @param CreateMonitoringAgentProcessRequest $request CreateMonitoringAgentProcessRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitoringAgentProcessResponse CreateMonitoringAgentProcessResponse
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
     * @summary Creates a task to monitor a specified process.
     *  *
     * @param CreateMonitoringAgentProcessRequest $request CreateMonitoringAgentProcessRequest
     *
     * @return CreateMonitoringAgentProcessResponse CreateMonitoringAgentProcessResponse
     */
    public function createMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a site monitoring task.
     *  *
     * @description This topic provides an example on how to create a site monitoring task named `HanZhou_ECS1`. The URL that is monitored by the task is `https://www.aliyun.com` and the type of the task is `HTTPS`.
     *  *
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
        if (!Utils::isUnset($request->customSchedule)) {
            $query['CustomSchedule'] = $request->customSchedule;
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
        if (!Utils::isUnset($request->vpcConfig)) {
            $query['VpcConfig'] = $request->vpcConfig;
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
     * @summary Creates a site monitoring task.
     *  *
     * @description This topic provides an example on how to create a site monitoring task named `HanZhou_ECS1`. The URL that is monitored by the task is `https://www.aliyun.com` and the type of the task is `HTTPS`.
     *  *
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
     * @summary Defines the range of monitoring data that you want to export. The Cursor information is returned. When you call the BatchExport operation for the first time, you must specify the Cursor information.
     *  *
     * @description ### [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ### [](#)Background information
     * You can call this operation to obtain the Cursor information and then call the [BatchExport](https://help.aliyun.com/document_detail/2329847.html) operation to export the monitoring data.
     * ### [](#)Description
     * This topic provides an example on how to define the monitoring data of a specified metric for a specified cloud service. In this example, the namespace of the cloud service is set to `acs_ecs_dashboard`, the metric is set to `cpu_idle`, the start time is set to `1641627000000`, and the end time is set to `1641645000000`. The number of idle CPU cores on your Elastic Compute Service (ECS) instances is measured every 60 seconds from 15:30:00, January 8, 2022 to 20:30:00, January 8, 2022. The `Cursor` information is returned.
     *  *
     * @param CursorRequest  $tmpReq  CursorRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CursorResponse CursorResponse
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
     * @summary Defines the range of monitoring data that you want to export. The Cursor information is returned. When you call the BatchExport operation for the first time, you must specify the Cursor information.
     *  *
     * @description ### [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * ### [](#)Background information
     * You can call this operation to obtain the Cursor information and then call the [BatchExport](https://help.aliyun.com/document_detail/2329847.html) operation to export the monitoring data.
     * ### [](#)Description
     * This topic provides an example on how to define the monitoring data of a specified metric for a specified cloud service. In this example, the namespace of the cloud service is set to `acs_ecs_dashboard`, the metric is set to `cpu_idle`, the start time is set to `1641627000000`, and the end time is set to `1641645000000`. The number of idle CPU cores on your Elastic Compute Service (ECS) instances is measured every 60 seconds from 15:30:00, January 8, 2022 to 20:30:00, January 8, 2022. The `Cursor` information is returned.
     *  *
     * @param CursorRequest $request CursorRequest
     *
     * @return CursorResponse CursorResponse
     */
    public function cursor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cursorWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an alert contact.
     *  *
     * @param DeleteContactRequest $request DeleteContactRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContactResponse DeleteContactResponse
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
     * @summary Deletes an alert contact.
     *  *
     * @param DeleteContactRequest $request DeleteContactRequest
     *
     * @return DeleteContactResponse DeleteContactResponse
     */
    public function deleteContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an alert group.
     *  *
     * @param DeleteContactGroupRequest $request DeleteContactGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContactGroupResponse DeleteContactGroupResponse
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
     * @summary Deletes an alert group.
     *  *
     * @param DeleteContactGroupRequest $request DeleteContactGroupRequest
     *
     * @return DeleteContactGroupResponse DeleteContactGroupResponse
     */
    public function deleteContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the reported monitoring data of a metric.
     *  *
     * @param DeleteCustomMetricRequest $request DeleteCustomMetricRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomMetricResponse DeleteCustomMetricResponse
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
     * @summary Deletes the reported monitoring data of a metric.
     *  *
     * @param DeleteCustomMetricRequest $request DeleteCustomMetricRequest
     *
     * @return DeleteCustomMetricResponse DeleteCustomMetricResponse
     */
    public function deleteCustomMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a tag rule.
     *  *
     * @param DeleteDynamicTagGroupRequest $request DeleteDynamicTagGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDynamicTagGroupResponse DeleteDynamicTagGroupResponse
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
     * @summary Deletes a tag rule.
     *  *
     * @param DeleteDynamicTagGroupRequest $request DeleteDynamicTagGroupRequest
     *
     * @return DeleteDynamicTagGroupResponse DeleteDynamicTagGroupResponse
     */
    public function deleteDynamicTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDynamicTagGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the push channels of an event-triggered alert rule.
     *  *
     * @param DeleteEventRuleTargetsRequest $request DeleteEventRuleTargetsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEventRuleTargetsResponse DeleteEventRuleTargetsResponse
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
     * @summary Deletes the push channels of an event-triggered alert rule.
     *  *
     * @param DeleteEventRuleTargetsRequest $request DeleteEventRuleTargetsRequest
     *
     * @return DeleteEventRuleTargetsResponse DeleteEventRuleTargetsResponse
     */
    public function deleteEventRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more event-triggered alert rules.
     *  *
     * @param DeleteEventRulesRequest $request DeleteEventRulesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEventRulesResponse DeleteEventRulesResponse
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
     * @summary Deletes one or more event-triggered alert rules.
     *  *
     * @param DeleteEventRulesRequest $request DeleteEventRulesRequest
     *
     * @return DeleteEventRulesResponse DeleteEventRulesResponse
     */
    public function deleteEventRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a configuration set that is used to export monitoring data.
     *  *
     * @param DeleteExporterOutputRequest $request DeleteExporterOutputRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExporterOutputResponse DeleteExporterOutputResponse
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
     * @summary Deletes a configuration set that is used to export monitoring data.
     *  *
     * @param DeleteExporterOutputRequest $request DeleteExporterOutputRequest
     *
     * @return DeleteExporterOutputResponse DeleteExporterOutputResponse
     */
    public function deleteExporterOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExporterOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a data export rule.
     *  *
     * @param DeleteExporterRuleRequest $request DeleteExporterRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExporterRuleResponse DeleteExporterRuleResponse
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
     * @summary Deletes a data export rule.
     *  *
     * @param DeleteExporterRuleRequest $request DeleteExporterRuleRequest
     *
     * @return DeleteExporterRuleResponse DeleteExporterRuleResponse
     */
    public function deleteExporterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExporterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a process monitoring task for an application group.
     *  *
     * @param DeleteGroupMonitoringAgentProcessRequest $request DeleteGroupMonitoringAgentProcessRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupMonitoringAgentProcessResponse DeleteGroupMonitoringAgentProcessResponse
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
     * @summary Deletes a process monitoring task for an application group.
     *  *
     * @param DeleteGroupMonitoringAgentProcessRequest $request DeleteGroupMonitoringAgentProcessRequest
     *
     * @return DeleteGroupMonitoringAgentProcessResponse DeleteGroupMonitoringAgentProcessResponse
     */
    public function deleteGroupMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more availability monitoring tasks.
     *  *
     * @param DeleteHostAvailabilityRequest $request DeleteHostAvailabilityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHostAvailabilityResponse DeleteHostAvailabilityResponse
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
     * @summary Deletes one or more availability monitoring tasks.
     *  *
     * @param DeleteHostAvailabilityRequest $request DeleteHostAvailabilityRequest
     *
     * @return DeleteHostAvailabilityResponse DeleteHostAvailabilityResponse
     */
    public function deleteHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a namespace.
     *  *
     * @description > If a metric import task is created for metrics in a namespace, you cannot delete the namespace unless you delete the task first.
     * This topic provides an example on how to delete a namespace named `aliyun`. The response shows that the namespace is deleted.
     *  *
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
     * @summary Deletes a namespace.
     *  *
     * @description > If a metric import task is created for metrics in a namespace, you cannot delete the namespace unless you delete the task first.
     * This topic provides an example on how to delete a namespace named `aliyun`. The response shows that the namespace is deleted.
     *  *
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
     * @summary Deletes a Logstore group.
     *  *
     * @description This topic provides an example on how to delete a Logstore group named `Logstore_test`. The response shows that the Logstore group is deleted.
     *  *
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
     * @summary Deletes a Logstore group.
     *  *
     * @description This topic provides an example on how to delete a Logstore group named `Logstore_test`. The response shows that the Logstore group is deleted.
     *  *
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
     * @summary Deletes a metric import task for Alibaba Cloud services or a metric for the logs that are imported from Log Service.
     *  *
     * @description This topic provides an example on how to delete a metric import task whose ID is `36****`. The returned result indicates that the metric import task is deleted.
     *  *
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
     * @summary Deletes a metric import task for Alibaba Cloud services or a metric for the logs that are imported from Log Service.
     *  *
     * @description This topic provides an example on how to delete a metric import task whose ID is `36****`. The returned result indicates that the metric import task is deleted.
     *  *
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
     * @summary Deletes a log monitoring metric.
     *  *
     * @param DeleteLogMonitorRequest $request DeleteLogMonitorRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLogMonitorResponse DeleteLogMonitorResponse
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
     * @summary Deletes a log monitoring metric.
     *  *
     * @param DeleteLogMonitorRequest $request DeleteLogMonitorRequest
     *
     * @return DeleteLogMonitorResponse DeleteLogMonitorResponse
     */
    public function deleteLogMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple blacklist policies at a time.
     *  *
     * @param DeleteMetricRuleBlackListRequest $request DeleteMetricRuleBlackListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMetricRuleBlackListResponse DeleteMetricRuleBlackListResponse
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
     * @summary Deletes multiple blacklist policies at a time.
     *  *
     * @param DeleteMetricRuleBlackListRequest $request DeleteMetricRuleBlackListRequest
     *
     * @return DeleteMetricRuleBlackListResponse DeleteMetricRuleBlackListResponse
     */
    public function deleteMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates resources from an alert rule.
     *  *
     * @param DeleteMetricRuleResourcesRequest $request DeleteMetricRuleResourcesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMetricRuleResourcesResponse DeleteMetricRuleResourcesResponse
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
     * @summary Disassociates resources from an alert rule.
     *  *
     * @param DeleteMetricRuleResourcesRequest $request DeleteMetricRuleResourcesRequest
     *
     * @return DeleteMetricRuleResourcesResponse DeleteMetricRuleResourcesResponse
     */
    public function deleteMetricRuleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Delete the push channels of an alert rule.
     *  *
     * @param DeleteMetricRuleTargetsRequest $request DeleteMetricRuleTargetsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMetricRuleTargetsResponse DeleteMetricRuleTargetsResponse
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
     * @summary Delete the push channels of an alert rule.
     *  *
     * @param DeleteMetricRuleTargetsRequest $request DeleteMetricRuleTargetsRequest
     *
     * @return DeleteMetricRuleTargetsResponse DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an alert template.
     *  *
     * @param DeleteMetricRuleTemplateRequest $request DeleteMetricRuleTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMetricRuleTemplateResponse DeleteMetricRuleTemplateResponse
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
     * @summary Deletes an alert template.
     *  *
     * @param DeleteMetricRuleTemplateRequest $request DeleteMetricRuleTemplateRequest
     *
     * @return DeleteMetricRuleTemplateResponse DeleteMetricRuleTemplateResponse
     */
    public function deleteMetricRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more alert rules.
     *  *
     * @param DeleteMetricRulesRequest $request DeleteMetricRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMetricRulesResponse DeleteMetricRulesResponse
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
     * @summary Deletes one or more alert rules.
     *  *
     * @param DeleteMetricRulesRequest $request DeleteMetricRulesRequest
     *
     * @return DeleteMetricRulesResponse DeleteMetricRulesResponse
     */
    public function deleteMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an application group.
     *  *
     * @param DeleteMonitorGroupRequest $request DeleteMonitorGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMonitorGroupResponse DeleteMonitorGroupResponse
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
     * @summary Deletes an application group.
     *  *
     * @param DeleteMonitorGroupRequest $request DeleteMonitorGroupRequest
     *
     * @return DeleteMonitorGroupResponse DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a rule that is used to dynamically add instances of a service that meet the rule to an application group.
     *  *
     * @param DeleteMonitorGroupDynamicRuleRequest $request DeleteMonitorGroupDynamicRuleRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMonitorGroupDynamicRuleResponse DeleteMonitorGroupDynamicRuleResponse
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
     * @summary Deletes a rule that is used to dynamically add instances of a service that meet the rule to an application group.
     *  *
     * @param DeleteMonitorGroupDynamicRuleRequest $request DeleteMonitorGroupDynamicRuleRequest
     *
     * @return DeleteMonitorGroupDynamicRuleResponse DeleteMonitorGroupDynamicRuleResponse
     */
    public function deleteMonitorGroupDynamicRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupDynamicRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Removes instances from an application group.
     *  *
     * @param DeleteMonitorGroupInstancesRequest $request DeleteMonitorGroupInstancesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMonitorGroupInstancesResponse DeleteMonitorGroupInstancesResponse
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
     * @summary Removes instances from an application group.
     *  *
     * @param DeleteMonitorGroupInstancesRequest $request DeleteMonitorGroupInstancesRequest
     *
     * @return DeleteMonitorGroupInstancesResponse DeleteMonitorGroupInstancesResponse
     */
    public function deleteMonitorGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a policy that is used to pause alert notifications for an application group.
     *  *
     * @param DeleteMonitorGroupNotifyPolicyRequest $request DeleteMonitorGroupNotifyPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMonitorGroupNotifyPolicyResponse DeleteMonitorGroupNotifyPolicyResponse
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
     * @summary Deletes a policy that is used to pause alert notifications for an application group.
     *  *
     * @param DeleteMonitorGroupNotifyPolicyRequest $request DeleteMonitorGroupNotifyPolicyRequest
     *
     * @return DeleteMonitorGroupNotifyPolicyResponse DeleteMonitorGroupNotifyPolicyResponse
     */
    public function deleteMonitorGroupNotifyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupNotifyPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Disables monitoring on a process.
     *  *
     * @param DeleteMonitoringAgentProcessRequest $request DeleteMonitoringAgentProcessRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMonitoringAgentProcessResponse DeleteMonitoringAgentProcessResponse
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
     * @summary Disables monitoring on a process.
     *  *
     * @param DeleteMonitoringAgentProcessRequest $request DeleteMonitoringAgentProcessRequest
     *
     * @return DeleteMonitoringAgentProcessResponse DeleteMonitoringAgentProcessResponse
     */
    public function deleteMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more site monitoring tasks.
     *  *
     * @param DeleteSiteMonitorsRequest $request DeleteSiteMonitorsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSiteMonitorsResponse DeleteSiteMonitorsResponse
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
     * @summary Deletes one or more site monitoring tasks.
     *  *
     * @param DeleteSiteMonitorsRequest $request DeleteSiteMonitorsRequest
     *
     * @return DeleteSiteMonitorsResponse DeleteSiteMonitorsResponse
     */
    public function deleteSiteMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of initiative alert rules.
     *  *
     * @param DescribeActiveMetricRuleListRequest $request DescribeActiveMetricRuleListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveMetricRuleListResponse DescribeActiveMetricRuleListResponse
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
     * @summary Queries the details of initiative alert rules.
     *  *
     * @param DescribeActiveMetricRuleListRequest $request DescribeActiveMetricRuleListRequest
     *
     * @return DescribeActiveMetricRuleListResponse DescribeActiveMetricRuleListResponse
     */
    public function describeActiveMetricRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveMetricRuleListWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI DescribeAlertHistoryList is deprecated, please use Cms::2019-01-01::DescribeAlertLogList instead
     *  *
     * @summary Queries historical alerts.
     *  *
     * @description This API operation is no longer maintained. We recommend that you call the [DescribeAlertLogList](https://help.aliyun.com/document_detail/201087.html) operation.
     *  *
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
     * @deprecated openAPI DescribeAlertHistoryList is deprecated, please use Cms::2019-01-01::DescribeAlertLogList instead
     *  *
     * @summary Queries historical alerts.
     *  *
     * @description This API operation is no longer maintained. We recommend that you call the [DescribeAlertLogList](https://help.aliyun.com/document_detail/201087.html) operation.
     *  *
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
     * @summary Queries the statistics of alert logs.
     *  *
     * @description Queries the statistics of alert logs.
     * This topic provides an example on how to query the statistics of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *  *
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
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
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
     * @summary Queries the statistics of alert logs.
     *  *
     * @description Queries the statistics of alert logs.
     * This topic provides an example on how to query the statistics of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *  *
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
     * @summary Queries the number of alert logs that are generated during each interval within a period of time.
     *  *
     * @description This topic provides an example on how to query the number of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *  *
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
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
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
     * @summary Queries the number of alert logs that are generated during each interval within a period of time.
     *  *
     * @description This topic provides an example on how to query the number of alert logs for Elastic Compute Service (ECS) based on the `product` dimension.
     *  *
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
     * @summary Queries alert logs.
     *  *
     * @description You can call the operation to query only the alert logs within the last year.
     * This topic provides an example to show how to query the alert logs of Elastic Compute Service (ECS) based on the `product` dimension.
     *  *
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
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
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
     * @summary Queries alert logs.
     *  *
     * @description You can call the operation to query only the alert logs within the last year.
     * This topic provides an example to show how to query the alert logs of Elastic Compute Service (ECS) based on the `product` dimension.
     *  *
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
     * @summary Queries the resources for which active alerts are triggered based on an alert rule.
     *  *
     * @param DescribeAlertingMetricRuleResourcesRequest $request DescribeAlertingMetricRuleResourcesRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertingMetricRuleResourcesResponse DescribeAlertingMetricRuleResourcesResponse
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
     * @summary Queries the resources for which active alerts are triggered based on an alert rule.
     *  *
     * @param DescribeAlertingMetricRuleResourcesRequest $request DescribeAlertingMetricRuleResourcesRequest
     *
     * @return DescribeAlertingMetricRuleResourcesResponse DescribeAlertingMetricRuleResourcesResponse
     */
    public function describeAlertingMetricRuleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertingMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert groups.
     *  *
     * @param DescribeContactGroupListRequest $request DescribeContactGroupListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContactGroupListResponse DescribeContactGroupListResponse
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
     * @summary Queries alert groups.
     *  *
     * @param DescribeContactGroupListRequest $request DescribeContactGroupListRequest
     *
     * @return DescribeContactGroupListResponse DescribeContactGroupListResponse
     */
    public function describeContactGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactGroupListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert contacts.
     *  *
     * @param DescribeContactListRequest $request DescribeContactListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContactListResponse DescribeContactListResponse
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
     * @summary Queries alert contacts.
     *  *
     * @param DescribeContactListRequest $request DescribeContactListRequest
     *
     * @return DescribeContactListResponse DescribeContactListResponse
     */
    public function describeContactList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alert contacts in an alert contact group.
     *  *
     * @param DescribeContactListByContactGroupRequest $request DescribeContactListByContactGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContactListByContactGroupResponse DescribeContactListByContactGroupResponse
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
     * @summary Queries the alert contacts in an alert contact group.
     *  *
     * @param DescribeContactListByContactGroupRequest $request DescribeContactListByContactGroupRequest
     *
     * @return DescribeContactListByContactGroupResponse DescribeContactListByContactGroupResponse
     */
    public function describeContactListByContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactListByContactGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a custom event that occurred in a specified time period.
     *  *
     * @param DescribeCustomEventAttributeRequest $request DescribeCustomEventAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomEventAttributeResponse DescribeCustomEventAttributeResponse
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
     * @summary Queries the details of a custom event that occurred in a specified time period.
     *  *
     * @param DescribeCustomEventAttributeRequest $request DescribeCustomEventAttributeRequest
     *
     * @return DescribeCustomEventAttributeResponse DescribeCustomEventAttributeResponse
     */
    public function describeCustomEventAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of times that a custom event occurred in a specified time period.
     *  *
     * @description >  This operation counts the number of times that a custom event occurred for each service.
     *  *
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
     * @summary Queries the number of times that a custom event occurred in a specified time period.
     *  *
     * @description >  This operation counts the number of times that a custom event occurred for each service.
     *  *
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
     * @summary Queries the number of times that a custom event occurred during each interval of a time period.
     *  *
     * @param DescribeCustomEventHistogramRequest $request DescribeCustomEventHistogramRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomEventHistogramResponse DescribeCustomEventHistogramResponse
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
     * @summary Queries the number of times that a custom event occurred during each interval of a time period.
     *  *
     * @param DescribeCustomEventHistogramRequest $request DescribeCustomEventHistogramRequest
     *
     * @return DescribeCustomEventHistogramResponse DescribeCustomEventHistogramResponse
     */
    public function describeCustomEventHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventHistogramWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the reported monitoring data.
     *  *
     * @description >  You can call the DescribeMetricList operation to query the metrics of cloud services. For more information, see [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html).
     *  *
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
     * @summary Queries the reported monitoring data.
     *  *
     * @description >  You can call the DescribeMetricList operation to query the metrics of cloud services. For more information, see [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html).
     *  *
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
     * @summary Queries tag rules.
     *  *
     * @description This topic provides an example to show how to query tag rules that are related to `tagkey1`. The sample responses indicate that two tag rules are found. The rule IDs are `1536df65-a719-429d-8813-73cc40d7****` and `56e8cebb-b3d7-4a91-9880-78a8c84f****`.
     *  *
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
     * @summary Queries tag rules.
     *  *
     * @description This topic provides an example to show how to query tag rules that are related to `tagkey1`. The sample responses indicate that two tag rules are found. The rule IDs are `1536df65-a719-429d-8813-73cc40d7****` and `56e8cebb-b3d7-4a91-9880-78a8c84f****`.
     *  *
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
     * @summary Queries the details of an event-triggered alert rule.
     *  *
     * @description This topic provides an example to show how to query the details of an event-triggered alert rule named `testRule`.
     *  *
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
     * @summary Queries the details of an event-triggered alert rule.
     *  *
     * @description This topic provides an example to show how to query the details of an event-triggered alert rule named `testRule`.
     *  *
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
     * @summary Queries event-triggered alert rules.
     *  *
     * @param DescribeEventRuleListRequest $request DescribeEventRuleListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventRuleListResponse DescribeEventRuleListResponse
     */
    public function describeEventRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isEnable)) {
            $query['IsEnable'] = $request->isEnable;
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
     * @summary Queries event-triggered alert rules.
     *  *
     * @param DescribeEventRuleListRequest $request DescribeEventRuleListRequest
     *
     * @return DescribeEventRuleListResponse DescribeEventRuleListResponse
     */
    public function describeEventRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the push channels of an event-triggered alert rule.
     *  *
     * @description This topic provides an example to show how to query the details of an event-triggered alert rule named `testRule`.
     *  *
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
     * @summary Queries the push channels of an event-triggered alert rule.
     *  *
     * @description This topic provides an example to show how to query the details of an event-triggered alert rule named `testRule`.
     *  *
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
     * @summary Queries configuration sets that are used to export monitoring data.
     *  *
     * @param DescribeExporterOutputListRequest $request DescribeExporterOutputListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExporterOutputListResponse DescribeExporterOutputListResponse
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
     * @summary Queries configuration sets that are used to export monitoring data.
     *  *
     * @param DescribeExporterOutputListRequest $request DescribeExporterOutputListRequest
     *
     * @return DescribeExporterOutputListResponse DescribeExporterOutputListResponse
     */
    public function describeExporterOutputList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExporterOutputListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries data export rules.
     *  *
     * @param DescribeExporterRuleListRequest $request DescribeExporterRuleListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExporterRuleListResponse DescribeExporterRuleListResponse
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
     * @summary Queries data export rules.
     *  *
     * @param DescribeExporterRuleListRequest $request DescribeExporterRuleListRequest
     *
     * @return DescribeExporterRuleListResponse DescribeExporterRuleListResponse
     */
    public function describeExporterRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExporterRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the process monitoring tasks for an application group.
     *  *
     * @description You can create a process monitoring task to monitor all or the specified Elastic Compute Service (ECS) instances in an application group and configure alert rules for the process monitoring task.
     *  *
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
     * @summary Queries the process monitoring tasks for an application group.
     *  *
     * @description You can create a process monitoring task to monitor all or the specified Elastic Compute Service (ECS) instances in an application group and configure alert rules for the process monitoring task.
     *  *
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
     * @summary Queries availability monitoring tasks.
     *  *
     * @description This topic provides an example to show how to query all the availability monitoring tasks of your Alibaba Cloud account. The sample responses indicate that the account has one availability monitoring task named `ecs_instance`.
     *  *
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
     * @summary Queries availability monitoring tasks.
     *  *
     * @description This topic provides an example to show how to query all the availability monitoring tasks of your Alibaba Cloud account. The sample responses indicate that the account has one availability monitoring task named `ecs_instance`.
     *  *
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
     * @summary Queries the monitoring data in a namespace.
     *  *
     * @description # [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * # [](#)Limits
     * The size of monitoring data that is returned in each call cannot exceed 1.5 MB. If the returned data reaches the upper limit, the query fails. You must reset the query conditions.
     * # [](#)Description
     * This topic provides an example to show how to query the monitoring data of the `AliyunEcs_cpu_total` metric in the `default-aliyun` namespace from `1653804865` (14:14:25 on May 29, 2022) to `1653805225` (14:20:25 on May 29, 2022).
     *  *
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
     * @summary Queries the monitoring data in a namespace.
     *  *
     * @description # [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * # [](#)Limits
     * The size of monitoring data that is returned in each call cannot exceed 1.5 MB. If the returned data reaches the upper limit, the query fails. You must reset the query conditions.
     * # [](#)Description
     * This topic provides an example to show how to query the monitoring data of the `AliyunEcs_cpu_total` metric in the `default-aliyun` namespace from `1653804865` (14:14:25 on May 29, 2022) to `1653805225` (14:20:25 on May 29, 2022).
     *  *
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
     * @summary Queries namespaces and the details of the related metric import tasks.
     *  *
     * @description In this example, all namespaces within the current account are queried. The response shows that the current account has only one namespace named `aliyun-test`.
     *  *
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
     * @summary Queries namespaces and the details of the related metric import tasks.
     *  *
     * @description In this example, all namespaces within the current account are queried. The response shows that the current account has only one namespace named `aliyun-test`.
     *  *
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
     * @summary Queries Logstore groups.
     *  *
     * @description In this example, all Logstore groups within the current account are queried. The response shows that the current account has two Logstore groups: `Logstore_test` and `Logstore_aliyun`.
     *  *
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
     * @summary Queries Logstore groups.
     *  *
     * @description In this example, all Logstore groups within the current account are queried. The response shows that the current account has two Logstore groups: `Logstore_test` and `Logstore_aliyun`.
     *  *
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
     * @summary Queries metric import tasks.
     *  *
     * @description This topic provides an example on how to query all metric import tasks that belong to the current Alibaba Cloud account. The returned result indicates that the current account has only one metric import task. The metric import task is named `aliyun_task`.
     *  *
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
     * @summary Queries metric import tasks.
     *  *
     * @description This topic provides an example on how to query all metric import tasks that belong to the current Alibaba Cloud account. The returned result indicates that the current account has only one metric import task. The metric import task is named `aliyun_task`.
     *  *
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
     * @summary Queries the details of a log monitoring metric.
     *  *
     * @param DescribeLogMonitorAttributeRequest $request DescribeLogMonitorAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogMonitorAttributeResponse DescribeLogMonitorAttributeResponse
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
     * @summary Queries the details of a log monitoring metric.
     *  *
     * @param DescribeLogMonitorAttributeRequest $request DescribeLogMonitorAttributeRequest
     *
     * @return DescribeLogMonitorAttributeResponse DescribeLogMonitorAttributeResponse
     */
    public function describeLogMonitorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogMonitorAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries log monitoring metrics.
     *  *
     * @param DescribeLogMonitorListRequest $request DescribeLogMonitorListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogMonitorListResponse DescribeLogMonitorListResponse
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
     * @summary Queries log monitoring metrics.
     *  *
     * @param DescribeLogMonitorListRequest $request DescribeLogMonitorListRequest
     *
     * @return DescribeLogMonitorListResponse DescribeLogMonitorListResponse
     */
    public function describeLogMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogMonitorListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the monitoring data of a metric for a specified cloud service.
     *  *
     * @description ### [](#)Limits
     * Each API operation can be called up to 10 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * ### [](#)Description
     * >  Different from [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html), the DescribeMetricData operation provides statistical features. You can set the Dimension parameter to `{"instanceId": "i-abcdefgh12****"}` to aggregate all data of your Alibaba Cloud account.
     * This topic provides an example to show how to query the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`.
     *  *
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
     * @summary Queries the monitoring data of a metric for a specified cloud service.
     *  *
     * @description ### [](#)Limits
     * Each API operation can be called up to 10 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * ### [](#)Description
     * >  Different from [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html), the DescribeMetricData operation provides statistical features. You can set the Dimension parameter to `{"instanceId": "i-abcdefgh12****"}` to aggregate all data of your Alibaba Cloud account.
     * This topic provides an example to show how to query the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`.
     *  *
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
     * @summary Queries the latest monitoring data of a metric.
     *  *
     * @description ### [](#)Limits
     * Each API operation can be called up to 50 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * >  If `Throttling.User` or `Request was denied due to user flow control` is returned when you call an API operation, the API operation is throttled. For more information about how to handle the issue, see [How do I handle the throttling of a query API?](https://help.aliyun.com/document_detail/2615031.html)
     * ### [](#)Precautions
     * The storage duration of the monitoring data of each cloud service is related to the `Period` parameter (statistical period). A larger value of the `Period` parameter indicates that the monitoring data is distributed in a larger time range and the storage duration of the monitoring data is longer. The following list describes the specific relationships:
     * *   If the value of the `Period` parameter is less than 60 seconds, the storage duration is seven days.
     * *   If the value of the `Period` parameter is 60 seconds, the storage duration is 31 days.
     * *   If the value of the `Period` parameter is 300 seconds, the storage duration is 91 days.
     * ### [](#)Description
     * This topic provides an example on how to query the latest monitoring data of the `CPUUtilization` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The returned result indicates that the monitoring data for the instance `i-abcdefgh12****` of the account `123456789876****` is queried at an interval of 60 seconds. The maximum, minimum, and average values of the metric are 100, 93.1, and 99.52.
     *  *
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
     * @summary Queries the latest monitoring data of a metric.
     *  *
     * @description ### [](#)Limits
     * Each API operation can be called up to 50 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * >  If `Throttling.User` or `Request was denied due to user flow control` is returned when you call an API operation, the API operation is throttled. For more information about how to handle the issue, see [How do I handle the throttling of a query API?](https://help.aliyun.com/document_detail/2615031.html)
     * ### [](#)Precautions
     * The storage duration of the monitoring data of each cloud service is related to the `Period` parameter (statistical period). A larger value of the `Period` parameter indicates that the monitoring data is distributed in a larger time range and the storage duration of the monitoring data is longer. The following list describes the specific relationships:
     * *   If the value of the `Period` parameter is less than 60 seconds, the storage duration is seven days.
     * *   If the value of the `Period` parameter is 60 seconds, the storage duration is 31 days.
     * *   If the value of the `Period` parameter is 300 seconds, the storage duration is 91 days.
     * ### [](#)Description
     * This topic provides an example on how to query the latest monitoring data of the `CPUUtilization` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The returned result indicates that the monitoring data for the instance `i-abcdefgh12****` of the account `123456789876****` is queried at an interval of 60 seconds. The maximum, minimum, and average values of the metric are 100, 93.1, and 99.52.
     *  *
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
     * @summary Queries the monitoring data of a metric for a specified cloud service.
     *  *
     * @description ## Limits
     * Each API operation can be called up to 50 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * >This topic provides an example to show how to query the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The returned result indicates that the monitoring data for the instance `i-abcdefgh12****` of the account `120886317861****` is queried at an interval of 60 seconds. The maximum, minimum, and average values of the metric are 100, 93.1, and 99.52.
     *  *
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
     * @summary Queries the monitoring data of a metric for a specified cloud service.
     *  *
     * @description ## Limits
     * Each API operation can be called up to 50 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * >This topic provides an example to show how to query the monitoring data of the `cpu_idle` metric for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The returned result indicates that the monitoring data for the instance `i-abcdefgh12****` of the account `120886317861****` is queried at an interval of 60 seconds. The maximum, minimum, and average values of the metric are 100, 93.1, and 99.52.
     *  *
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
     * @summary Queries the details of metrics that are supported in CloudMonitor.
     *  *
     * @description This operation is used together with DescribeMetricList and DescribeMetricLast. For more information, see [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html) and [DescribeMetricLast](https://help.aliyun.com/document_detail/51939.html).
     *  *
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
     * @summary Queries the details of metrics that are supported in CloudMonitor.
     *  *
     * @description This operation is used together with DescribeMetricList and DescribeMetricLast. For more information, see [DescribeMetricList](https://help.aliyun.com/document_detail/51936.html) and [DescribeMetricLast](https://help.aliyun.com/document_detail/51939.html).
     *  *
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
     * @param DescribeMetricRuleBlackListRequest $request DescribeMetricRuleBlackListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricRuleBlackListResponse DescribeMetricRuleBlackListResponse
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
     * @param DescribeMetricRuleBlackListRequest $request DescribeMetricRuleBlackListRequest
     *
     * @return DescribeMetricRuleBlackListResponse DescribeMetricRuleBlackListResponse
     */
    public function describeMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of alert rules in each state.
     *  *
     * @param DescribeMetricRuleCountRequest $request DescribeMetricRuleCountRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricRuleCountResponse DescribeMetricRuleCountResponse
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
     * @summary Queries the number of alert rules in each state.
     *  *
     * @param DescribeMetricRuleCountRequest $request DescribeMetricRuleCountRequest
     *
     * @return DescribeMetricRuleCountResponse DescribeMetricRuleCountResponse
     */
    public function describeMetricRuleCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert rules.
     *  *
     * @description This topic provides an example on how to query all alert rules within your Alibaba Cloud account. The returned result shows that only one alert rule is found. The name of the alert rule is `Rule_01` and the ID is `applyTemplate344cfd42-0f32-4fd6-805a-88d7908a****`.
     *  *
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
     * @summary Queries alert rules.
     *  *
     * @description This topic provides an example on how to query all alert rules within your Alibaba Cloud account. The returned result shows that only one alert rule is found. The name of the alert rule is `Rule_01` and the ID is `applyTemplate344cfd42-0f32-4fd6-805a-88d7908a****`.
     *  *
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
     * @summary Queries the resources that are associated with a specified alert rule.
     *  *
     * @description ## Limit
     * This operation supports only Message Service (MNS) resources.
     * >This topic provides an example on how to query the resources that are associated with an alert rule whose ID is `ae06917_75a8c43178ab66****`.
     *  *
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
     * @summary Queries the resources that are associated with a specified alert rule.
     *  *
     * @description ## Limit
     * This operation supports only Message Service (MNS) resources.
     * >This topic provides an example on how to query the resources that are associated with an alert rule whose ID is `ae06917_75a8c43178ab66****`.
     *  *
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
     * @summary Queries the details of an alert template.
     *  *
     * @description This topic provides an example on how to query the details of an alert template whose ID is `70****`.
     *  *
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
     * @summary Queries the details of an alert template.
     *  *
     * @description This topic provides an example on how to query the details of an alert template whose ID is `70****`.
     *  *
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
     * @summary Queries alert templates.
     *  *
     * @description This topic provides an example on how to query alert templates. In this example, the following alert templates are returned in the response: `ECS_Template1` and `ECS_Template2`.
     *  *
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
     * @summary Queries alert templates.
     *  *
     * @description This topic provides an example on how to query alert templates. In this example, the following alert templates are returned in the response: `ECS_Template1` and `ECS_Template2`.
     *  *
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
     * @summary Queries the latest monitoring data of a metric for a cloud service. The data can be sorted by a specified order.
     *  *
     * @description ### [](#)Limits
     * Each API operation can be called up to 10 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * ### [](#)Precautions
     * The storage duration of the monitoring data of each cloud service is related to the `Period` parameter (statistical period). A larger value of the `Period` parameter indicates that the monitoring data is distributed in a larger time range and the storage duration of the monitoring data is longer. The following list describes the specific relationships:
     * *   If the value of the `Period` parameter is less than 60 seconds, the storage duration is seven days.
     * *   If the value of the `Period` parameter is 60 seconds, the storage duration is 31 days.
     * *   If the value of the `Period` parameter is 300 seconds, the storage duration is 91 days.
     * ### [](#)Description
     * This topic provides an example to show how to query the monitoring data of the `cpu_idle` metric in the last 60 seconds for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The monitoring data is sorted in the descending order based on the `Average` field.
     *  *
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
     * @summary Queries the latest monitoring data of a metric for a cloud service. The data can be sorted by a specified order.
     *  *
     * @description ### [](#)Limits
     * Each API operation can be called up to 10 times per second. An Alibaba Cloud account and the RAM users within the account share the quota.
     * ### [](#)Precautions
     * The storage duration of the monitoring data of each cloud service is related to the `Period` parameter (statistical period). A larger value of the `Period` parameter indicates that the monitoring data is distributed in a larger time range and the storage duration of the monitoring data is longer. The following list describes the specific relationships:
     * *   If the value of the `Period` parameter is less than 60 seconds, the storage duration is seven days.
     * *   If the value of the `Period` parameter is 60 seconds, the storage duration is 31 days.
     * *   If the value of the `Period` parameter is 300 seconds, the storage duration is 91 days.
     * ### [](#)Description
     * This topic provides an example to show how to query the monitoring data of the `cpu_idle` metric in the last 60 seconds for Elastic Compute Service (ECS). The namespace of ECS is `acs_ecs_dashboard`. The monitoring data is sorted in the descending order based on the `Average` field.
     *  *
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
     * @summary Queries the cloud services to which the resources in an application group belong and the number of resources that belong to each cloud service in the application group.
     *  *
     * @param DescribeMonitorGroupCategoriesRequest $request DescribeMonitorGroupCategoriesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorGroupCategoriesResponse DescribeMonitorGroupCategoriesResponse
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
     * @summary Queries the cloud services to which the resources in an application group belong and the number of resources that belong to each cloud service in the application group.
     *  *
     * @param DescribeMonitorGroupCategoriesRequest $request DescribeMonitorGroupCategoriesRequest
     *
     * @return DescribeMonitorGroupCategoriesResponse DescribeMonitorGroupCategoriesResponse
     */
    public function describeMonitorGroupCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupCategoriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the dynamic rules of an application group.
     *  *
     * @param DescribeMonitorGroupDynamicRulesRequest $request DescribeMonitorGroupDynamicRulesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorGroupDynamicRulesResponse DescribeMonitorGroupDynamicRulesResponse
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
     * @summary Queries the dynamic rules of an application group.
     *  *
     * @param DescribeMonitorGroupDynamicRulesRequest $request DescribeMonitorGroupDynamicRulesRequest
     *
     * @return DescribeMonitorGroupDynamicRulesResponse DescribeMonitorGroupDynamicRulesResponse
     */
    public function describeMonitorGroupDynamicRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupDynamicRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the resources in an application group.
     *  *
     * @param DescribeMonitorGroupInstanceAttributeRequest $request DescribeMonitorGroupInstanceAttributeRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorGroupInstanceAttributeResponse DescribeMonitorGroupInstanceAttributeResponse
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
     * @summary Queries the details of the resources in an application group.
     *  *
     * @param DescribeMonitorGroupInstanceAttributeRequest $request DescribeMonitorGroupInstanceAttributeRequest
     *
     * @return DescribeMonitorGroupInstanceAttributeResponse DescribeMonitorGroupInstanceAttributeResponse
     */
    public function describeMonitorGroupInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resources in an application group.
     *  *
     * @param DescribeMonitorGroupInstancesRequest $request DescribeMonitorGroupInstancesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorGroupInstancesResponse DescribeMonitorGroupInstancesResponse
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
     * @summary Queries the resources in an application group.
     *  *
     * @param DescribeMonitorGroupInstancesRequest $request DescribeMonitorGroupInstancesRequest
     *
     * @return DescribeMonitorGroupInstancesResponse DescribeMonitorGroupInstancesResponse
     */
    public function describeMonitorGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the policies that are used to pause alert notifications for an application group.
     *  *
     * @param DescribeMonitorGroupNotifyPolicyListRequest $request DescribeMonitorGroupNotifyPolicyListRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorGroupNotifyPolicyListResponse DescribeMonitorGroupNotifyPolicyListResponse
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
     * @summary Queries the policies that are used to pause alert notifications for an application group.
     *  *
     * @param DescribeMonitorGroupNotifyPolicyListRequest $request DescribeMonitorGroupNotifyPolicyListRequest
     *
     * @return DescribeMonitorGroupNotifyPolicyListResponse DescribeMonitorGroupNotifyPolicyListResponse
     */
    public function describeMonitorGroupNotifyPolicyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupNotifyPolicyListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries application groups.
     *  *
     * @description This topic provides an example of how to query the application groups of the current account. The response shows that the current account has two application groups: `testGroup124` and `test123`.
     *  *
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
     * @summary Queries application groups.
     *  *
     * @description This topic provides an example of how to query the application groups of the current account. The response shows that the current account has two application groups: `testGroup124` and `test123`.
     *  *
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
     * @summary Queries the resource quotas of CloudMonitor.
     *  *
     * @param DescribeMonitorResourceQuotaAttributeRequest $request DescribeMonitorResourceQuotaAttributeRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorResourceQuotaAttributeResponse DescribeMonitorResourceQuotaAttributeResponse
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
     * @summary Queries the resource quotas of CloudMonitor.
     *  *
     * @param DescribeMonitorResourceQuotaAttributeRequest $request DescribeMonitorResourceQuotaAttributeRequest
     *
     * @return DescribeMonitorResourceQuotaAttributeResponse DescribeMonitorResourceQuotaAttributeResponse
     */
    public function describeMonitorResourceQuotaAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorResourceQuotaAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the AccessKey ID and AccessKey secret that are required to install the CloudMonitor agent on a third-party host.
     *  *
     * @param DescribeMonitoringAgentAccessKeyRequest $request DescribeMonitoringAgentAccessKeyRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitoringAgentAccessKeyResponse DescribeMonitoringAgentAccessKeyResponse
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
     * @summary Queries the AccessKey ID and AccessKey secret that are required to install the CloudMonitor agent on a third-party host.
     *  *
     * @param DescribeMonitoringAgentAccessKeyRequest $request DescribeMonitoringAgentAccessKeyRequest
     *
     * @return DescribeMonitoringAgentAccessKeyResponse DescribeMonitoringAgentAccessKeyResponse
     */
    public function describeMonitoringAgentAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitoringAgentConfigRequest $request DescribeMonitoringAgentConfigRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitoringAgentConfigResponse DescribeMonitoringAgentConfigResponse
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
     * @param DescribeMonitoringAgentConfigRequest $request DescribeMonitoringAgentConfigRequest
     *
     * @return DescribeMonitoringAgentConfigResponse DescribeMonitoringAgentConfigResponse
     */
    public function describeMonitoringAgentConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all hosts within the current Alibaba Cloud account, including hosts on which the CloudMonitor agent is installed and uninstalled.
     *  *
     * @param DescribeMonitoringAgentHostsRequest $request DescribeMonitoringAgentHostsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitoringAgentHostsResponse DescribeMonitoringAgentHostsResponse
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
     * @summary Queries all hosts within the current Alibaba Cloud account, including hosts on which the CloudMonitor agent is installed and uninstalled.
     *  *
     * @param DescribeMonitoringAgentHostsRequest $request DescribeMonitoringAgentHostsRequest
     *
     * @return DescribeMonitoringAgentHostsResponse DescribeMonitoringAgentHostsResponse
     */
    public function describeMonitoringAgentHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentHostsWithOptions($request, $runtime);
    }

    /**
     * @description >  Before you call this operation, call the CreateMonitoringAgentProcess operation to create processes. For more information, see [CreateMonitoringAgentProcess](https://help.aliyun.com/document_detail/114951.html~).
     * This topic provides an example of how to query the processes of the `i-hp3hl3cx1pbahzy8****` instance. The response indicates the details of the `NGINX` and `HTTP` processes.
     *  *
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
     * @description >  Before you call this operation, call the CreateMonitoringAgentProcess operation to create processes. For more information, see [CreateMonitoringAgentProcess](https://help.aliyun.com/document_detail/114951.html~).
     * This topic provides an example of how to query the processes of the `i-hp3hl3cx1pbahzy8****` instance. The response indicates the details of the `NGINX` and `HTTP` processes.
     *  *
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
     * @summary Queries the status of the CloudMonitor agent.
     *  *
     * @description This topic describes how to query the status of the CloudMonitor agent that is installed on the `i-hp3dunahluwajv6f****` instance. The result indicates that the CloudMonitor agent is in the `running` state.
     *  *
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
     * @summary Queries the status of the CloudMonitor agent.
     *  *
     * @description This topic describes how to query the status of the CloudMonitor agent that is installed on the `i-hp3dunahluwajv6f****` instance. The result indicates that the CloudMonitor agent is in the `running` state.
     *  *
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
     * @param DescribeMonitoringConfigRequest $request DescribeMonitoringConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitoringConfigResponse DescribeMonitoringConfigResponse
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
     * @param DescribeMonitoringConfigRequest $request DescribeMonitoringConfigRequest
     *
     * @return DescribeMonitoringConfigResponse DescribeMonitoringConfigResponse
     */
    public function describeMonitoringConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringConfigWithOptions($request, $runtime);
    }

    /**
     * @description >  If a tag is attached to multiple cloud resources in the region, the key of the tag is returned only once.
     *  *
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
     * @description >  If a tag is attached to multiple cloud resources in the region, the key of the tag is returned only once.
     *  *
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
     * @summary Queries the cloud services for which the initiative alert feature is enabled.
     *  *
     * @param DescribeProductsOfActiveMetricRuleRequest $request DescribeProductsOfActiveMetricRuleRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProductsOfActiveMetricRuleResponse DescribeProductsOfActiveMetricRuleResponse
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
     * @summary Queries the cloud services for which the initiative alert feature is enabled.
     *  *
     * @param DescribeProductsOfActiveMetricRuleRequest $request DescribeProductsOfActiveMetricRuleRequest
     *
     * @return DescribeProductsOfActiveMetricRuleResponse DescribeProductsOfActiveMetricRuleResponse
     */
    public function describeProductsOfActiveMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductsOfActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about monitored services in CloudMonitor.
     *  *
     * @description The information obtained by this operation includes the service description, namespace, and tags.
     *  *
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
     * @summary Queries the information about monitored services in CloudMonitor.
     *  *
     * @description The information obtained by this operation includes the service description, namespace, and tags.
     *  *
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
     * @summary Queries the details of a site monitoring task.
     *  *
     * @description This topic provides an example on how to query the details of a site monitoring task whose ID is `cc641dff-c19d-45f3-ad0a-818a0c4f****`. The returned result indicates that the task name is `test123`, the URL that is monitored by the task is `https://aliyun.com`, and the name of the carrier is `Alibaba`.
     *  *
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
     * @summary Queries the details of a site monitoring task.
     *  *
     * @description This topic provides an example on how to query the details of a site monitoring task whose ID is `cc641dff-c19d-45f3-ad0a-818a0c4f****`. The returned result indicates that the task name is `test123`, the URL that is monitored by the task is `https://aliyun.com`, and the name of the carrier is `Alibaba`.
     *  *
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
     * @summary Queries the fine-grained monitoring data of a site monitoring task.
     *  *
     * @param DescribeSiteMonitorDataRequest $request DescribeSiteMonitorDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSiteMonitorDataResponse DescribeSiteMonitorDataResponse
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
     * @summary Queries the fine-grained monitoring data of a site monitoring task.
     *  *
     * @param DescribeSiteMonitorDataRequest $request DescribeSiteMonitorDataRequest
     *
     * @return DescribeSiteMonitorDataResponse DescribeSiteMonitorDataResponse
     */
    public function describeSiteMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detection points that are provided by carriers.
     *  *
     * @description This topic provides an example on how to query the detection points that are provided by China Unicom in Guiyang.
     *  *
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
     * @summary Queries the detection points that are provided by carriers.
     *  *
     * @description This topic provides an example on how to query the detection points that are provided by China Unicom in Guiyang.
     *  *
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
     * @summary Queries site monitoring tasks.
     *  *
     * @description This topic provides an example on how to query all the site monitoring tasks of your Alibaba Cloud account. In this example, the returned result indicates that the Alibaba Cloud account has one site monitoring task named `HanZhou_ECS2`.
     *  *
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
     * @summary Queries site monitoring tasks.
     *  *
     * @description This topic provides an example on how to query all the site monitoring tasks of your Alibaba Cloud account. In this example, the returned result indicates that the Alibaba Cloud account has one site monitoring task named `HanZhou_ECS2`.
     *  *
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
     * @summary Queries the logs of one or more instant test tasks.
     *  *
     * @description You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring.
     * This topic provides an example to show how to query the logs of an instant test task whose ID is `afa5c3ce-f944-4363-9edb-ce919a29****`.
     *  *
     * @param DescribeSiteMonitorLogRequest $request DescribeSiteMonitorLogRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSiteMonitorLogResponse DescribeSiteMonitorLogResponse
     */
    public function describeSiteMonitorLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->browser)) {
            $query['Browser'] = $request->browser;
        }
        if (!Utils::isUnset($request->browserInfo)) {
            $query['BrowserInfo'] = $request->browserInfo;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->device)) {
            $query['Device'] = $request->device;
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
     * @summary Queries the logs of one or more instant test tasks.
     *  *
     * @description You can create an instant test task only by using the Alibaba Cloud account that you used to enable Network Analysis and Monitoring.
     * This topic provides an example to show how to query the logs of an instant test task whose ID is `afa5c3ce-f944-4363-9edb-ce919a29****`.
     *  *
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
     * @summary Queries the quotas and version of site monitoring.
     *  *
     * @param DescribeSiteMonitorQuotaRequest $request DescribeSiteMonitorQuotaRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSiteMonitorQuotaResponse DescribeSiteMonitorQuotaResponse
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
     * @summary Queries the quotas and version of site monitoring.
     *  *
     * @param DescribeSiteMonitorQuotaRequest $request DescribeSiteMonitorQuotaRequest
     *
     * @return DescribeSiteMonitorQuotaResponse DescribeSiteMonitorQuotaResponse
     */
    public function describeSiteMonitorQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics of a specified metric for a specified site monitoring task.
     *  *
     * @description This topic provides an example on how to query the statistics of the `Availability` metric for a site monitoring task whose ID is `ef4cdc8b-9dc7-43e7-810e-f950e56c****`. The result indicates that the availability rate of the site is `100%`.
     *  *
     * @param DescribeSiteMonitorStatisticsRequest $request DescribeSiteMonitorStatisticsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSiteMonitorStatisticsResponse DescribeSiteMonitorStatisticsResponse
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
     * @summary Queries the statistics of a specified metric for a specified site monitoring task.
     *  *
     * @description This topic provides an example on how to query the statistics of the `Availability` metric for a site monitoring task whose ID is `ef4cdc8b-9dc7-43e7-810e-f950e56c****`. The result indicates that the availability rate of the site is `100%`.
     *  *
     * @param DescribeSiteMonitorStatisticsRequest $request DescribeSiteMonitorStatisticsRequest
     *
     * @return DescribeSiteMonitorStatisticsResponse DescribeSiteMonitorStatisticsResponse
     */
    public function describeSiteMonitorStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a system event.
     *  *
     * @param DescribeSystemEventAttributeRequest $request DescribeSystemEventAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSystemEventAttributeResponse DescribeSystemEventAttributeResponse
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
     * @summary Queries the details of a system event.
     *  *
     * @param DescribeSystemEventAttributeRequest $request DescribeSystemEventAttributeRequest
     *
     * @return DescribeSystemEventAttributeResponse DescribeSystemEventAttributeResponse
     */
    public function describeSystemEventAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of times that a system event of a cloud service has occurred.
     *  *
     * @description ### [](#)Background information
     * You can call the [DescribeSystemEventMetaList](https://help.aliyun.com/document_detail/114972.html) operation to query the cloud services supported by CloudMonitor and their system events.
     * ### [](#)Description
     * This topic provides an example on how to query the number of times that a system event of `Elastic Compute Service (ECS)` has occurred. The returned result shows that the specified system event has occurred three times.
     *  *
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
     * @summary Queries the number of times that a system event of a cloud service has occurred.
     *  *
     * @description ### [](#)Background information
     * You can call the [DescribeSystemEventMetaList](https://help.aliyun.com/document_detail/114972.html) operation to query the cloud services supported by CloudMonitor and their system events.
     * ### [](#)Description
     * This topic provides an example on how to query the number of times that a system event of `Elastic Compute Service (ECS)` has occurred. The returned result shows that the specified system event has occurred three times.
     *  *
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
     * @summary Queries the number of times a system event occurred during each interval within a period of time.
     *  *
     * @param DescribeSystemEventHistogramRequest $request DescribeSystemEventHistogramRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSystemEventHistogramResponse DescribeSystemEventHistogramResponse
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
     * @summary Queries the number of times a system event occurred during each interval within a period of time.
     *  *
     * @param DescribeSystemEventHistogramRequest $request DescribeSystemEventHistogramRequest
     *
     * @return DescribeSystemEventHistogramResponse DescribeSystemEventHistogramResponse
     */
    public function describeSystemEventHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventHistogramWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSystemEventMetaListRequest $request DescribeSystemEventMetaListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSystemEventMetaListResponse DescribeSystemEventMetaListResponse
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
     * @param DescribeSystemEventMetaListRequest $request DescribeSystemEventMetaListRequest
     *
     * @return DescribeSystemEventMetaListResponse DescribeSystemEventMetaListResponse
     */
    public function describeSystemEventMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventMetaListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagKeyListRequest $request DescribeTagKeyListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagKeyListResponse DescribeTagKeyListResponse
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
     * @param DescribeTagKeyListRequest $request DescribeTagKeyListRequest
     *
     * @return DescribeTagKeyListResponse DescribeTagKeyListResponse
     */
    public function describeTagKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagKeyListWithOptions($request, $runtime);
    }

    /**
     * @description This topic provides an example of how to query the tag values corresponding to `tagKey1`. The return results are `tagValue1` and `tagValue2`.
     *  *
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
     * @description This topic provides an example of how to query the tag values corresponding to `tagKey1`. The return results are `tagValue1` and `tagValue2`.
     *  *
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
     * @param DescribeUnhealthyHostAvailabilityRequest $request DescribeUnhealthyHostAvailabilityRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUnhealthyHostAvailabilityResponse DescribeUnhealthyHostAvailabilityResponse
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
     * @param DescribeUnhealthyHostAvailabilityRequest $request DescribeUnhealthyHostAvailabilityRequest
     *
     * @return DescribeUnhealthyHostAvailabilityResponse DescribeUnhealthyHostAvailabilityResponse
     */
    public function describeUnhealthyHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUnhealthyHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @param DisableActiveMetricRuleRequest $request DisableActiveMetricRuleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableActiveMetricRuleResponse DisableActiveMetricRuleResponse
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
     * @param DisableActiveMetricRuleRequest $request DisableActiveMetricRuleRequest
     *
     * @return DisableActiveMetricRuleResponse DisableActiveMetricRuleResponse
     */
    public function disableActiveMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @param DisableEventRulesRequest $request DisableEventRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableEventRulesResponse DisableEventRulesResponse
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
     * @param DisableEventRulesRequest $request DisableEventRulesRequest
     *
     * @return DisableEventRulesResponse DisableEventRulesResponse
     */
    public function disableEventRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableEventRulesWithOptions($request, $runtime);
    }

    /**
     * @param DisableHostAvailabilityRequest $request DisableHostAvailabilityRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableHostAvailabilityResponse DisableHostAvailabilityResponse
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
     * @param DisableHostAvailabilityRequest $request DisableHostAvailabilityRequest
     *
     * @return DisableHostAvailabilityResponse DisableHostAvailabilityResponse
     */
    public function disableHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @summary Disables alert rules.
     *  *
     * @param DisableMetricRulesRequest $request DisableMetricRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableMetricRulesResponse DisableMetricRulesResponse
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
     * @summary Disables alert rules.
     *  *
     * @param DisableMetricRulesRequest $request DisableMetricRulesRequest
     *
     * @return DisableMetricRulesResponse DisableMetricRulesResponse
     */
    public function disableMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables site monitoring tasks.
     *  *
     * @param DisableSiteMonitorsRequest $request DisableSiteMonitorsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableSiteMonitorsResponse DisableSiteMonitorsResponse
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
     * @summary Disables site monitoring tasks.
     *  *
     * @param DisableSiteMonitorsRequest $request DisableSiteMonitorsRequest
     *
     * @return DisableSiteMonitorsResponse DisableSiteMonitorsResponse
     */
    public function disableSiteMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * @param EnableActiveMetricRuleRequest $request EnableActiveMetricRuleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableActiveMetricRuleResponse EnableActiveMetricRuleResponse
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
     * @param EnableActiveMetricRuleRequest $request EnableActiveMetricRuleRequest
     *
     * @return EnableActiveMetricRuleResponse EnableActiveMetricRuleResponse
     */
    public function enableActiveMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableEventRulesRequest $request EnableEventRulesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableEventRulesResponse EnableEventRulesResponse
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
     * @param EnableEventRulesRequest $request EnableEventRulesRequest
     *
     * @return EnableEventRulesResponse EnableEventRulesResponse
     */
    public function enableEventRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableEventRulesWithOptions($request, $runtime);
    }

    /**
     * @param EnableHostAvailabilityRequest $request EnableHostAvailabilityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableHostAvailabilityResponse EnableHostAvailabilityResponse
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
     * @param EnableHostAvailabilityRequest $request EnableHostAvailabilityRequest
     *
     * @return EnableHostAvailabilityResponse EnableHostAvailabilityResponse
     */
    public function enableHostAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables multiple blacklist policies at a time.
     *  *
     * @param EnableMetricRuleBlackListRequest $request EnableMetricRuleBlackListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableMetricRuleBlackListResponse EnableMetricRuleBlackListResponse
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
     * @summary Enables or disables multiple blacklist policies at a time.
     *  *
     * @param EnableMetricRuleBlackListRequest $request EnableMetricRuleBlackListRequest
     *
     * @return EnableMetricRuleBlackListResponse EnableMetricRuleBlackListResponse
     */
    public function enableMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * @summary Enables one or more alert rules.
     *  *
     * @param EnableMetricRulesRequest $request EnableMetricRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableMetricRulesResponse EnableMetricRulesResponse
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
     * @summary Enables one or more alert rules.
     *  *
     * @param EnableMetricRulesRequest $request EnableMetricRulesRequest
     *
     * @return EnableMetricRulesResponse EnableMetricRulesResponse
     */
    public function enableMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Enables site monitoring tasks.
     *  *
     * @param EnableSiteMonitorsRequest $request EnableSiteMonitorsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableSiteMonitorsResponse EnableSiteMonitorsResponse
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
     * @summary Enables site monitoring tasks.
     *  *
     * @param EnableSiteMonitorsRequest $request EnableSiteMonitorsRequest
     *
     * @return EnableSiteMonitorsResponse EnableSiteMonitorsResponse
     */
    public function enableSiteMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * @description ## Prerequisites
     * The Cloud Assistant client is installed on an ECS instance. For more information about how to install the Cloud Assistant client, see [Overview](https://help.aliyun.com/document_detail/64601.html).
     *  *
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
     * @description ## Prerequisites
     * The Cloud Assistant client is installed on an ECS instance. For more information about how to install the Cloud Assistant client, see [Overview](https://help.aliyun.com/document_detail/64601.html).
     *  *
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
     * @param ModifyGroupMonitoringAgentProcessRequest $request ModifyGroupMonitoringAgentProcessRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGroupMonitoringAgentProcessResponse ModifyGroupMonitoringAgentProcessResponse
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
     * @param ModifyGroupMonitoringAgentProcessRequest $request ModifyGroupMonitoringAgentProcessRequest
     *
     * @return ModifyGroupMonitoringAgentProcessResponse ModifyGroupMonitoringAgentProcessResponse
     */
    public function modifyGroupMonitoringAgentProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an availability monitoring task.
     *  *
     * @description This topic provides an example on how to change the name of an availability monitoring task named `12345` in an application group named `123456` to `task2`.
     *  *
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
     * @summary Modifies an availability monitoring task.
     *  *
     * @description This topic provides an example on how to change the name of an availability monitoring task named `12345` in an application group named `123456` to `task2`.
     *  *
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
     * @description ****
     *  *
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
     * @description ****
     *  *
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
     * @summary Modifies a namespace.
     *  *
     * @description This topic provides an example on how to change the data retention period of the `aliyun` namespace to `cms.s1.2xlarge`. The response shows that the namespace is modified.
     *  *
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
     * @summary Modifies a namespace.
     *  *
     * @description This topic provides an example on how to change the data retention period of the `aliyun` namespace to `cms.s1.2xlarge`. The response shows that the namespace is modified.
     *  *
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
     * @summary Modifies a Logstore group.
     *  *
     * @description In this example, a Logstore group named `Logstore_test` is modified. The Logstore of the `aliyun-project` project in the `cn-hangzhou` region is changed to `Logstore-aliyun-all`. The response shows that the Logstore group is modified.
     *  *
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
     * @summary Modifies a Logstore group.
     *  *
     * @description In this example, a Logstore group named `Logstore_test` is modified. The Logstore of the `aliyun-project` project in the `cn-hangzhou` region is changed to `Logstore-aliyun-all`. The response shows that the Logstore group is modified.
     *  *
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
     * @summary Modifies a metric for the logs that are imported from Log Service.
     *  *
     * @description This topic provides an example on how to change the collection period of a metric import task whose ID is `36****` to `15` seconds. The task is used to monitor the logs that are imported from Log Service. The returned result indicates that the metric is modified.
     *  *
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
     * @summary Modifies a metric for the logs that are imported from Log Service.
     *  *
     * @description This topic provides an example on how to change the collection period of a metric import task whose ID is `36****` to `15` seconds. The task is used to monitor the logs that are imported from Log Service. The returned result indicates that the metric is modified.
     *  *
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
     * @summary Modifies a blacklist policy.
     *  *
     * @param ModifyMetricRuleBlackListRequest $request ModifyMetricRuleBlackListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMetricRuleBlackListResponse ModifyMetricRuleBlackListResponse
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
     * @summary Modifies a blacklist policy.
     *  *
     * @param ModifyMetricRuleBlackListRequest $request ModifyMetricRuleBlackListRequest
     *
     * @return ModifyMetricRuleBlackListResponse ModifyMetricRuleBlackListResponse
     */
    public function modifyMetricRuleBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMetricRuleBlackListWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an alert template.
     *  *
     * @description This topic provides an example on how to modify an alert template whose version is `1` and ID is `123456`. The alert level is changed to `Critical`. The statistical method is changed to `Average`. The alert threshold comparator is changed to `GreaterThanOrEqualToThreshold`. The alert threshold is changed to `90`. The number of alert retries is changed to `3`. The response shows that the alert template is modified.
     *  *
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
     * @summary Modifies an alert template.
     *  *
     * @description This topic provides an example on how to modify an alert template whose version is `1` and ID is `123456`. The alert level is changed to `Critical`. The statistical method is changed to `Average`. The alert threshold comparator is changed to `GreaterThanOrEqualToThreshold`. The alert threshold is changed to `90`. The number of alert retries is changed to `3`. The response shows that the alert template is modified.
     *  *
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
     * @param ModifyMonitorGroupRequest $request ModifyMonitorGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMonitorGroupResponse ModifyMonitorGroupResponse
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
     * @param ModifyMonitorGroupRequest $request ModifyMonitorGroupRequest
     *
     * @return ModifyMonitorGroupResponse ModifyMonitorGroupResponse
     */
    public function modifyMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMonitorGroupInstancesRequest $request ModifyMonitorGroupInstancesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMonitorGroupInstancesResponse ModifyMonitorGroupInstancesResponse
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
     * @param ModifyMonitorGroupInstancesRequest $request ModifyMonitorGroupInstancesRequest
     *
     * @return ModifyMonitorGroupInstancesResponse ModifyMonitorGroupInstancesResponse
     */
    public function modifyMonitorGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a site monitoring task.
     *  *
     * @description The number of site monitoring tasks.
     *  *
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
        if (!Utils::isUnset($request->customSchedule)) {
            $query['CustomSchedule'] = $request->customSchedule;
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
     * @summary Modifies a site monitoring task.
     *  *
     * @description The number of site monitoring tasks.
     *  *
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
     * @deprecated OpenAPI OpenCmsService is deprecated
     *  *
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
     * @deprecated OpenAPI OpenCmsService is deprecated
     *  *
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
     * @param PutContactRequest $request PutContactRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return PutContactResponse PutContactResponse
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
     * @param PutContactRequest $request PutContactRequest
     *
     * @return PutContactResponse PutContactResponse
     */
    public function putContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putContactWithOptions($request, $runtime);
    }

    /**
     * @summary 添加或者修改报警联系人组
     *  *
     * @description This topic provides an example on how to create an alert contact group named `ECS_Group`.
     *  *
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
     * @summary 添加或者修改报警联系人组
     *  *
     * @description This topic provides an example on how to create an alert contact group named `ECS_Group`.
     *  *
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
     * @summary Reports custom events.
     *  *
     * @param PutCustomEventRequest $request PutCustomEventRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return PutCustomEventResponse PutCustomEventResponse
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
     * @summary Reports custom events.
     *  *
     * @param PutCustomEventRequest $request PutCustomEventRequest
     *
     * @return PutCustomEventResponse PutCustomEventResponse
     */
    public function putCustomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomEventWithOptions($request, $runtime);
    }

    /**
     * @description Before you call this operation, call the PutCustomEvent operation to report the monitoring data of the custom event. For more information, see [PutCustomEvent](https://help.aliyun.com/document_detail/115012.html).
     *  *
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
     * @description Before you call this operation, call the PutCustomEvent operation to report the monitoring data of the custom event. For more information, see [PutCustomEvent](https://help.aliyun.com/document_detail/115012.html).
     *  *
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
     * @description >  We recommend that you call the [PutHybridMonitorMetricData](https://help.aliyun.com/document_detail/383455.html) operation of Hybrid Cloud Monitoring to report monitoring data.
     *  *
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
     * @description >  We recommend that you call the [PutHybridMonitorMetricData](https://help.aliyun.com/document_detail/383455.html) operation of Hybrid Cloud Monitoring to report monitoring data.
     *  *
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
     * @description Before you call this operation, call the PutCustomMetric operation to report custom monitoring data. For more information, see [PutCustomMetric](https://help.aliyun.com/document_detail/115004.html).
     *  *
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
     * @description Before you call this operation, call the PutCustomMetric operation to report custom monitoring data. For more information, see [PutCustomMetric](https://help.aliyun.com/document_detail/115004.html).
     *  *
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
     * @summary 创建或者修改事件监控
     *  *
     * @description If the specified rule name does not exist, an event-triggered alert rule is created. If the specified rule name exists, the specified event-triggered alert rule is modified.
     * In this example, the `myRuleName` alert rule is created for the `ecs` cloud service.
     *  *
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
     * @summary 创建或者修改事件监控
     *  *
     * @description If the specified rule name does not exist, an event-triggered alert rule is created. If the specified rule name exists, the specified event-triggered alert rule is modified.
     * In this example, the `myRuleName` alert rule is created for the `ecs` cloud service.
     *  *
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
     * @summary Adds or modifies the push channels of an event-triggered alert rule.
     *  *
     * @param PutEventRuleTargetsRequest $request PutEventRuleTargetsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PutEventRuleTargetsResponse PutEventRuleTargetsResponse
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
     * @summary Adds or modifies the push channels of an event-triggered alert rule.
     *  *
     * @param PutEventRuleTargetsRequest $request PutEventRuleTargetsRequest
     *
     * @return PutEventRuleTargetsResponse PutEventRuleTargetsResponse
     */
    public function putEventRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies a configuration set for exporting monitoring data.
     *  *
     * @description > The monitoring data can be exported only to Log Service. More services will be supported in the future.
     *  *
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
     * @summary Creates or modifies a configuration set for exporting monitoring data.
     *  *
     * @description > The monitoring data can be exported only to Log Service. More services will be supported in the future.
     *  *
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
     * @summary Creates or modifies a data export rule.
     *  *
     * @param PutExporterRuleRequest $request PutExporterRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PutExporterRuleResponse PutExporterRuleResponse
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
     * @summary Creates or modifies a data export rule.
     *  *
     * @param PutExporterRuleRequest $request PutExporterRuleRequest
     *
     * @return PutExporterRuleResponse PutExporterRuleResponse
     */
    public function putExporterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putExporterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies an alert rule for an application group.
     *  *
     * @description This topic provides an example on how to create an alert rule for the `cpu_total` metric of Elastic Compute Service (ECS) in the `17285****` application group. The ID of the alert rule is `123456`. The name of the alert rule is `Rule_test`. The alert level is `Critical`. The statistical method is `Average`. The alert threshold comparator is `GreaterThanOrEqualToThreshold`. The alert threshold is `90`. The number of alert retries is `3`. The returned result shows that the alert rule is created and the alert rule ID is `123456`.
     *  *
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
        if (!Utils::isUnset($request->options)) {
            $query['Options'] = $request->options;
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
     * @summary Creates or modifies an alert rule for an application group.
     *  *
     * @description This topic provides an example on how to create an alert rule for the `cpu_total` metric of Elastic Compute Service (ECS) in the `17285****` application group. The ID of the alert rule is `123456`. The name of the alert rule is `Rule_test`. The alert level is `Critical`. The statistical method is `Average`. The alert threshold comparator is `GreaterThanOrEqualToThreshold`. The alert threshold is `90`. The number of alert retries is `3`. The returned result shows that the alert rule is created and the alert rule ID is `123456`.
     *  *
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
     * @summary Imports the monitoring data of a metric to a namespace of Hybrid Cloud Monitoring.
     *  *
     * @description # [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * # [](#)Limits
     * The size of the monitoring data that you import at a time must be less than or equal to 1 MB.
     * # [](#)Description
     * This topic provides an example on how to import the monitoring data of the `CPU_Usage` metric to the `default-aliyun` namespace of Hybrid Cloud Monitoring.
     *  *
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
     * @summary Imports the monitoring data of a metric to a namespace of Hybrid Cloud Monitoring.
     *  *
     * @description # [](#)Prerequisites
     * Hybrid Cloud Monitoring is activated. For more information, see [Activate Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/250773.html).
     * # [](#)Limits
     * The size of the monitoring data that you import at a time must be less than or equal to 1 MB.
     * # [](#)Description
     * This topic provides an example on how to import the monitoring data of the `CPU_Usage` metric to the `default-aliyun` namespace of Hybrid Cloud Monitoring.
     *  *
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
     * @summary Creates or modifies a log monitoring metric.
     *  *
     * @description In the example of this topic, the `cpu_total` log monitoring metric is created. The response shows that the log monitoring metric is created and the metric ID is `16****`.
     *  *
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
     * @summary Creates or modifies a log monitoring metric.
     *  *
     * @description In the example of this topic, the `cpu_total` log monitoring metric is created. The response shows that the log monitoring metric is created and the metric ID is `16****`.
     *  *
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
     * @summary Adds or modifies the push channels of an alert rule.
     *  *
     * @description # [](#)
     * This topic provides an example on how to associate an alert rule with a resource. In this example, the alert rule is `ae06917_75a8c43178ab66****`, the resource is `acs:mns:cn-hangzhou:120886317861****:/queues/test/message`, and the ID of the resource for which alerts are triggered is `1`. The response indicates that the resource is associated with the specified alert rule.
     *  *
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
     * @summary Adds or modifies the push channels of an alert rule.
     *  *
     * @description # [](#)
     * This topic provides an example on how to associate an alert rule with a resource. In this example, the alert rule is `ae06917_75a8c43178ab66****`, the resource is `acs:mns:cn-hangzhou:120886317861****:/queues/test/message`, and the ID of the resource for which alerts are triggered is `1`. The response indicates that the resource is associated with the specified alert rule.
     *  *
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
     * @summary Creates or modifies an alert rule to dynamically add instances that meet the rule to an application group.
     *  *
     * @param PutMonitorGroupDynamicRuleRequest $request PutMonitorGroupDynamicRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return PutMonitorGroupDynamicRuleResponse PutMonitorGroupDynamicRuleResponse
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
     * @summary Creates or modifies an alert rule to dynamically add instances that meet the rule to an application group.
     *  *
     * @param PutMonitorGroupDynamicRuleRequest $request PutMonitorGroupDynamicRuleRequest
     *
     * @return PutMonitorGroupDynamicRuleResponse PutMonitorGroupDynamicRuleResponse
     */
    public function putMonitorGroupDynamicRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMonitorGroupDynamicRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Configures global settings for the CloudMonitor agent.
     *  *
     * @param PutMonitoringConfigRequest $request PutMonitoringConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PutMonitoringConfigResponse PutMonitoringConfigResponse
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
     * @summary Configures global settings for the CloudMonitor agent.
     *  *
     * @param PutMonitoringConfigRequest $request PutMonitoringConfigRequest
     *
     * @return PutMonitoringConfigResponse PutMonitoringConfigResponse
     */
    public function putMonitoringConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMonitoringConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Configures an alert rule.
     *  *
     * @description This topic provides an example on how to create a threshold-triggered alert rule for the `cpu_total` metric of an Elastic Compute Service (ECS) instance whose ID is `i-uf6j91r34rnwawoo****`. The namespace of ECS metrics is `acs_ecs_dashboard`. The alert contact group of the alert rule is `ECS_Group`. The name of the alert rule is `test123`. The ID of the alert rule is `a151cd6023eacee2f0978e03863cc1697c89508****`. The statistical method for Critical-level alerts is `Average`. The comparison operator for Critical-level alerts is `GreaterThanOrEqualToThreshold`. The threshold for Critical-level alerts is `90`. The consecutive number of times for which the metric value meets the trigger condition before a Critical-level alert is triggered is `3`.
     *  *
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
     * @summary Configures an alert rule.
     *  *
     * @description This topic provides an example on how to create a threshold-triggered alert rule for the `cpu_total` metric of an Elastic Compute Service (ECS) instance whose ID is `i-uf6j91r34rnwawoo****`. The namespace of ECS metrics is `acs_ecs_dashboard`. The alert contact group of the alert rule is `ECS_Group`. The name of the alert rule is `test123`. The ID of the alert rule is `a151cd6023eacee2f0978e03863cc1697c89508****`. The statistical method for Critical-level alerts is `Average`. The comparison operator for Critical-level alerts is `GreaterThanOrEqualToThreshold`. The threshold for Critical-level alerts is `90`. The consecutive number of times for which the metric value meets the trigger condition before a Critical-level alert is triggered is `3`.
     *  *
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
     * @summary Creates multiple alert rules for the specified metric of a specified resource.
     *  *
     * @description This topic provides an example on how to create a threshold-triggered alert rule for the `cpu_total` metric of an Elastic Compute Service (ECS) instance whose ID is `i-uf6j91r34rnwawoo****`. The namespace of ECS metrics is `acs_ecs_dashboard`. The alert contact group of the alert rule is `ECS_Group`. The name of the alert rule is `test123`. The ID of the alert rule is `a151cd6023eacee2f0978e03863cc1697c89508****`. The statistical method for Critical-level alerts is `Average`. The comparison operator for Critical-level alerts is `GreaterThanOrEqualToThreshold`. The threshold for Critical-level alerts is `90`. The consecutive number of times for which the metric value meets the trigger condition before a Critical-level alert is triggered is `3`.
     *  *
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
     * @summary Creates multiple alert rules for the specified metric of a specified resource.
     *  *
     * @description This topic provides an example on how to create a threshold-triggered alert rule for the `cpu_total` metric of an Elastic Compute Service (ECS) instance whose ID is `i-uf6j91r34rnwawoo****`. The namespace of ECS metrics is `acs_ecs_dashboard`. The alert contact group of the alert rule is `ECS_Group`. The name of the alert rule is `test123`. The ID of the alert rule is `a151cd6023eacee2f0978e03863cc1697c89508****`. The statistical method for Critical-level alerts is `Average`. The comparison operator for Critical-level alerts is `GreaterThanOrEqualToThreshold`. The threshold for Critical-level alerts is `90`. The consecutive number of times for which the metric value meets the trigger condition before a Critical-level alert is triggered is `3`.
     *  *
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
     * @summary Deletes tags.
     *  *
     * @param RemoveTagsRequest $request RemoveTagsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTagsResponse RemoveTagsResponse
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
     * @summary Deletes tags.
     *  *
     * @param RemoveTagsRequest $request RemoveTagsRequest
     *
     * @return RemoveTagsResponse RemoveTagsResponse
     */
    public function removeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * @description This operation is used to test whether a system event can be triggered as expected. You can call this operation to simulate a system event and check whether an expected response is returned after an alert is triggered by the system event.
     *  *
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
     * @description This operation is used to test whether a system event can be triggered as expected. You can call this operation to simulate a system event and check whether an expected response is returned after an alert is triggered by the system event.
     *  *
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
     * @description >  This API operation is not applicable to ECS instances. To uninstall the agent from an ECS instance, see [Install and uninstall the Cloud Monitor agent](https://help.aliyun.com/document_detail/183482.html).
     *  *
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
     * @description >  This API operation is not applicable to ECS instances. To uninstall the agent from an ECS instance, see [Install and uninstall the Cloud Monitor agent](https://help.aliyun.com/document_detail/183482.html).
     *  *
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
