<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cms\V20190101\Models\AddTagsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\AddTagsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponse;
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
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteLogMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteLogMonitorResponse;
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
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentAccessKeyResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentConfigResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringConfigResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductResourceTagKeyListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductResourceTagKeyListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProjectMetaRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProjectMetaResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorDataRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorDataResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorStatisticsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorStatisticsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponse;
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
     * @param AddTagsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddTagsResponse
     */
    public function addTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTagsResponse::fromMap($this->doRPCRequest('AddTags', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ApplyMetricRuleTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApplyMetricRuleTemplateResponse
     */
    public function applyMetricRuleTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyMetricRuleTemplateResponse::fromMap($this->doRPCRequest('ApplyMetricRuleTemplate', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateCmsCallNumOrderRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCmsCallNumOrderResponse
     */
    public function createCmsCallNumOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCmsCallNumOrderResponse::fromMap($this->doRPCRequest('CreateCmsCallNumOrder', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCmsOrderResponse::fromMap($this->doRPCRequest('CreateCmsOrder', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCmsSmspackageOrderResponse::fromMap($this->doRPCRequest('CreateCmsSmspackageOrder', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDynamicTagGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDynamicTagGroupResponse
     */
    public function createDynamicTagGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDynamicTagGroupResponse::fromMap($this->doRPCRequest('CreateDynamicTagGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateGroupMetricRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateGroupMetricRulesResponse
     */
    public function createGroupMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGroupMetricRulesResponse::fromMap($this->doRPCRequest('CreateGroupMetricRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateGroupMonitoringAgentProcessResponse
     */
    public function createGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGroupMonitoringAgentProcessResponse::fromMap($this->doRPCRequest('CreateGroupMonitoringAgentProcess', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateHostAvailabilityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateHostAvailabilityResponse
     */
    public function createHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHostAvailabilityResponse::fromMap($this->doRPCRequest('CreateHostAvailability', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateMetricRuleResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMetricRuleResourcesResponse
     */
    public function createMetricRuleResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMetricRuleResourcesResponse::fromMap($this->doRPCRequest('CreateMetricRuleResources', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMetricRuleTemplateResponse::fromMap($this->doRPCRequest('CreateMetricRuleTemplate', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMonitorAgentProcessResponse::fromMap($this->doRPCRequest('CreateMonitorAgentProcess', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMonitorGroupResponse::fromMap($this->doRPCRequest('CreateMonitorGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateMonitorGroupByResourceGroupIdRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateMonitorGroupByResourceGroupIdResponse
     */
    public function createMonitorGroupByResourceGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMonitorGroupByResourceGroupIdResponse::fromMap($this->doRPCRequest('CreateMonitorGroupByResourceGroupId', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateMonitorGroupInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateMonitorGroupInstancesResponse
     */
    public function createMonitorGroupInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMonitorGroupInstancesResponse::fromMap($this->doRPCRequest('CreateMonitorGroupInstances', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateMonitorGroupNotifyPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateMonitorGroupNotifyPolicyResponse
     */
    public function createMonitorGroupNotifyPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMonitorGroupNotifyPolicyResponse::fromMap($this->doRPCRequest('CreateMonitorGroupNotifyPolicy', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateMonitoringAgentProcessResponse
     */
    public function createMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMonitoringAgentProcessResponse::fromMap($this->doRPCRequest('CreateMonitoringAgentProcess', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSiteMonitorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSiteMonitorResponse
     */
    public function createSiteMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSiteMonitorResponse::fromMap($this->doRPCRequest('CreateSiteMonitor', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteContactRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteContactResponse
     */
    public function deleteContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteContactResponse::fromMap($this->doRPCRequest('DeleteContact', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteContactGroupResponse::fromMap($this->doRPCRequest('DeleteContactGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCustomMetricResponse::fromMap($this->doRPCRequest('DeleteCustomMetric', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDynamicTagGroupResponse::fromMap($this->doRPCRequest('DeleteDynamicTagGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteEventRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteEventRulesResponse
     */
    public function deleteEventRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEventRulesResponse::fromMap($this->doRPCRequest('DeleteEventRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteEventRuleTargetsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteEventRuleTargetsResponse
     */
    public function deleteEventRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEventRuleTargetsResponse::fromMap($this->doRPCRequest('DeleteEventRuleTargets', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteExporterOutputRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteExporterOutputResponse
     */
    public function deleteExporterOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteExporterOutputResponse::fromMap($this->doRPCRequest('DeleteExporterOutput', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteExporterRuleResponse::fromMap($this->doRPCRequest('DeleteExporterRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGroupMonitoringAgentProcessResponse::fromMap($this->doRPCRequest('DeleteGroupMonitoringAgentProcess', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHostAvailabilityResponse::fromMap($this->doRPCRequest('DeleteHostAvailability', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLogMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLogMonitorResponse
     */
    public function deleteLogMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLogMonitorResponse::fromMap($this->doRPCRequest('DeleteLogMonitor', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteMetricRuleResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMetricRuleResourcesResponse
     */
    public function deleteMetricRuleResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMetricRuleResourcesResponse::fromMap($this->doRPCRequest('DeleteMetricRuleResources', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteMetricRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMetricRulesResponse
     */
    public function deleteMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMetricRulesResponse::fromMap($this->doRPCRequest('DeleteMetricRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteMetricRuleTargetsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMetricRuleTargetsResponse::fromMap($this->doRPCRequest('DeleteMetricRuleTargets', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMetricRuleTemplateResponse::fromMap($this->doRPCRequest('DeleteMetricRuleTemplate', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMonitorGroupResponse::fromMap($this->doRPCRequest('DeleteMonitorGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMonitorGroupDynamicRuleResponse::fromMap($this->doRPCRequest('DeleteMonitorGroupDynamicRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMonitorGroupInstancesResponse::fromMap($this->doRPCRequest('DeleteMonitorGroupInstances', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMonitorGroupNotifyPolicyResponse::fromMap($this->doRPCRequest('DeleteMonitorGroupNotifyPolicy', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMonitoringAgentProcessResponse::fromMap($this->doRPCRequest('DeleteMonitoringAgentProcess', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSiteMonitorsResponse::fromMap($this->doRPCRequest('DeleteSiteMonitors', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeActiveMetricRuleListResponse::fromMap($this->doRPCRequest('DescribeActiveMetricRuleList', '2019-01-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAlertHistoryListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlertHistoryListResponse::fromMap($this->doRPCRequest('DescribeAlertHistoryList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeAlertLogCountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAlertLogCountResponse
     */
    public function describeAlertLogCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlertLogCountResponse::fromMap($this->doRPCRequest('DescribeAlertLogCount', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeAlertLogHistogramRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAlertLogHistogramResponse
     */
    public function describeAlertLogHistogramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlertLogHistogramResponse::fromMap($this->doRPCRequest('DescribeAlertLogHistogram', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeAlertLogListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAlertLogListResponse
     */
    public function describeAlertLogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlertLogListResponse::fromMap($this->doRPCRequest('DescribeAlertLogList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeContactGroupListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeContactGroupListResponse
     */
    public function describeContactGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContactGroupListResponse::fromMap($this->doRPCRequest('DescribeContactGroupList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContactListResponse::fromMap($this->doRPCRequest('DescribeContactList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContactListByContactGroupResponse::fromMap($this->doRPCRequest('DescribeContactListByContactGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomEventAttributeResponse::fromMap($this->doRPCRequest('DescribeCustomEventAttribute', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCustomEventCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCustomEventCountResponse
     */
    public function describeCustomEventCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomEventCountResponse::fromMap($this->doRPCRequest('DescribeCustomEventCount', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeCustomEventHistogramRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCustomEventHistogramResponse
     */
    public function describeCustomEventHistogramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomEventHistogramResponse::fromMap($this->doRPCRequest('DescribeCustomEventHistogram', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCustomMetricListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCustomMetricListResponse
     */
    public function describeCustomMetricListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomMetricListResponse::fromMap($this->doRPCRequest('DescribeCustomMetricList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeDynamicTagRuleListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDynamicTagRuleListResponse
     */
    public function describeDynamicTagRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDynamicTagRuleListResponse::fromMap($this->doRPCRequest('DescribeDynamicTagRuleList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeEventRuleAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEventRuleAttributeResponse
     */
    public function describeEventRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventRuleAttributeResponse::fromMap($this->doRPCRequest('DescribeEventRuleAttribute', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeEventRuleListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEventRuleListResponse
     */
    public function describeEventRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventRuleListResponse::fromMap($this->doRPCRequest('DescribeEventRuleList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeEventRuleTargetListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEventRuleTargetListResponse
     */
    public function describeEventRuleTargetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventRuleTargetListResponse::fromMap($this->doRPCRequest('DescribeEventRuleTargetList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeExporterOutputListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeExporterOutputListResponse
     */
    public function describeExporterOutputListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExporterOutputListResponse::fromMap($this->doRPCRequest('DescribeExporterOutputList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExporterRuleListResponse::fromMap($this->doRPCRequest('DescribeExporterRuleList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeGroupMonitoringAgentProcessResponse
     */
    public function describeGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupMonitoringAgentProcessResponse::fromMap($this->doRPCRequest('DescribeGroupMonitoringAgentProcess', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeHostAvailabilityListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHostAvailabilityListResponse
     */
    public function describeHostAvailabilityListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHostAvailabilityListResponse::fromMap($this->doRPCRequest('DescribeHostAvailabilityList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
            'query' => $query,
        ]);

        return DescribeLogMonitorAttributeResponse::fromMap($this->doRPCRequest('DescribeLogMonitorAttribute', '2019-01-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLogMonitorListResponse::fromMap($this->doRPCRequest('DescribeLogMonitorList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeMetricDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricDataResponse
     */
    public function describeMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricDataResponse::fromMap($this->doRPCRequest('DescribeMetricData', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMetricLastRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricLastResponse
     */
    public function describeMetricLastWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricLastResponse::fromMap($this->doRPCRequest('DescribeMetricLast', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMetricListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricListResponse::fromMap($this->doRPCRequest('DescribeMetricList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMetricMetaListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMetricMetaListResponse
     */
    public function describeMetricMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricMetaListResponse::fromMap($this->doRPCRequest('DescribeMetricMetaList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
            'query' => $query,
        ]);

        return DescribeMetricRuleCountResponse::fromMap($this->doRPCRequest('DescribeMetricRuleCount', '2019-01-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param DescribeMetricRuleListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMetricRuleListResponse
     */
    public function describeMetricRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricRuleListResponse::fromMap($this->doRPCRequest('DescribeMetricRuleList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMetricRuleTargetsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMetricRuleTargetsResponse
     */
    public function describeMetricRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricRuleTargetsResponse::fromMap($this->doRPCRequest('DescribeMetricRuleTargets', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMetricRuleTemplateAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeMetricRuleTemplateAttributeResponse
     */
    public function describeMetricRuleTemplateAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricRuleTemplateAttributeResponse::fromMap($this->doRPCRequest('DescribeMetricRuleTemplateAttribute', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMetricRuleTemplateListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMetricRuleTemplateListResponse
     */
    public function describeMetricRuleTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricRuleTemplateListResponse::fromMap($this->doRPCRequest('DescribeMetricRuleTemplateList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMetricTopRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeMetricTopResponse
     */
    public function describeMetricTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricTopResponse::fromMap($this->doRPCRequest('DescribeMetricTop', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMonitorGroupCategoriesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMonitorGroupCategoriesResponse
     */
    public function describeMonitorGroupCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitorGroupCategoriesResponse::fromMap($this->doRPCRequest('DescribeMonitorGroupCategories', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitorGroupDynamicRulesResponse::fromMap($this->doRPCRequest('DescribeMonitorGroupDynamicRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitorGroupInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeMonitorGroupInstanceAttribute', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitorGroupInstancesResponse::fromMap($this->doRPCRequest('DescribeMonitorGroupInstances', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitorGroupNotifyPolicyListResponse::fromMap($this->doRPCRequest('DescribeMonitorGroupNotifyPolicyList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeMonitorGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeMonitorGroupsResponse
     */
    public function describeMonitorGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitorGroupsResponse::fromMap($this->doRPCRequest('DescribeMonitorGroups', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMonitoringAgentAccessKeyResponse
     */
    public function describeMonitoringAgentAccessKeyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeMonitoringAgentAccessKeyResponse::fromMap($this->doRPCRequest('DescribeMonitoringAgentAccessKey', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeMonitoringAgentAccessKeyResponse
     */
    public function describeMonitoringAgentAccessKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentAccessKeyWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMonitoringAgentConfigResponse
     */
    public function describeMonitoringAgentConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeMonitoringAgentConfigResponse::fromMap($this->doRPCRequest('DescribeMonitoringAgentConfig', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeMonitoringAgentConfigResponse
     */
    public function describeMonitoringAgentConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentConfigWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitoringAgentHostsResponse::fromMap($this->doRPCRequest('DescribeMonitoringAgentHosts', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeMonitoringAgentProcessesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeMonitoringAgentProcessesResponse
     */
    public function describeMonitoringAgentProcessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitoringAgentProcessesResponse::fromMap($this->doRPCRequest('DescribeMonitoringAgentProcesses', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeMonitoringAgentStatusesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMonitoringAgentStatusesResponse
     */
    public function describeMonitoringAgentStatusesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitoringAgentStatusesResponse::fromMap($this->doRPCRequest('DescribeMonitoringAgentStatuses', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMonitoringConfigResponse
     */
    public function describeMonitoringConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeMonitoringConfigResponse::fromMap($this->doRPCRequest('DescribeMonitoringConfig', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeMonitoringConfigResponse
     */
    public function describeMonitoringConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringConfigWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitorResourceQuotaAttributeResponse::fromMap($this->doRPCRequest('DescribeMonitorResourceQuotaAttribute', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeProductResourceTagKeyListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeProductResourceTagKeyListResponse
     */
    public function describeProductResourceTagKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProductResourceTagKeyListResponse::fromMap($this->doRPCRequest('DescribeProductResourceTagKeyList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeProductsOfActiveMetricRuleResponse
     */
    public function describeProductsOfActiveMetricRuleWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeProductsOfActiveMetricRuleResponse::fromMap($this->doRPCRequest('DescribeProductsOfActiveMetricRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeProductsOfActiveMetricRuleResponse
     */
    public function describeProductsOfActiveMetricRule()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductsOfActiveMetricRuleWithOptions($runtime);
    }

    /**
     * @param DescribeProjectMetaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeProjectMetaResponse
     */
    public function describeProjectMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProjectMetaResponse::fromMap($this->doRPCRequest('DescribeProjectMeta', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeSiteMonitorAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSiteMonitorAttributeResponse
     */
    public function describeSiteMonitorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSiteMonitorAttributeResponse::fromMap($this->doRPCRequest('DescribeSiteMonitorAttribute', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeSiteMonitorDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSiteMonitorDataResponse
     */
    public function describeSiteMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSiteMonitorDataResponse::fromMap($this->doRPCRequest('DescribeSiteMonitorData', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSiteMonitorListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSiteMonitorListResponse
     */
    public function describeSiteMonitorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSiteMonitorListResponse::fromMap($this->doRPCRequest('DescribeSiteMonitorList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSiteMonitorQuotaResponse
     */
    public function describeSiteMonitorQuotaWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeSiteMonitorQuotaResponse::fromMap($this->doRPCRequest('DescribeSiteMonitorQuota', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeSiteMonitorQuotaResponse
     */
    public function describeSiteMonitorQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorQuotaWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSiteMonitorStatisticsResponse::fromMap($this->doRPCRequest('DescribeSiteMonitorStatistics', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSystemEventAttributeResponse::fromMap($this->doRPCRequest('DescribeSystemEventAttribute', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSystemEventCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSystemEventCountResponse
     */
    public function describeSystemEventCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSystemEventCountResponse::fromMap($this->doRPCRequest('DescribeSystemEventCount', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeSystemEventHistogramRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSystemEventHistogramResponse
     */
    public function describeSystemEventHistogramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSystemEventHistogramResponse::fromMap($this->doRPCRequest('DescribeSystemEventHistogram', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeTagKeyListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTagKeyListResponse
     */
    public function describeTagKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagKeyListResponse::fromMap($this->doRPCRequest('DescribeTagKeyList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeTagValueListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeTagValueListResponse
     */
    public function describeTagValueListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagValueListResponse::fromMap($this->doRPCRequest('DescribeTagValueList', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeUnhealthyHostAvailabilityRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeUnhealthyHostAvailabilityResponse
     */
    public function describeUnhealthyHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUnhealthyHostAvailabilityResponse::fromMap($this->doRPCRequest('DescribeUnhealthyHostAvailability', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableActiveMetricRuleResponse::fromMap($this->doRPCRequest('DisableActiveMetricRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableEventRulesResponse::fromMap($this->doRPCRequest('DisableEventRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableHostAvailabilityResponse::fromMap($this->doRPCRequest('DisableHostAvailability', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableMetricRulesResponse::fromMap($this->doRPCRequest('DisableMetricRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableSiteMonitorsResponse::fromMap($this->doRPCRequest('DisableSiteMonitors', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableActiveMetricRuleResponse::fromMap($this->doRPCRequest('EnableActiveMetricRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableEventRulesResponse::fromMap($this->doRPCRequest('EnableEventRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableHostAvailabilityResponse::fromMap($this->doRPCRequest('EnableHostAvailability', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param EnableMetricRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableMetricRulesResponse
     */
    public function enableMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableMetricRulesResponse::fromMap($this->doRPCRequest('EnableMetricRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableSiteMonitorsResponse::fromMap($this->doRPCRequest('EnableSiteMonitors', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param InstallMonitoringAgentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return InstallMonitoringAgentResponse
     */
    public function installMonitoringAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InstallMonitoringAgentResponse::fromMap($this->doRPCRequest('InstallMonitoringAgent', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyGroupMonitoringAgentProcessRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyGroupMonitoringAgentProcessResponse
     */
    public function modifyGroupMonitoringAgentProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyGroupMonitoringAgentProcessResponse::fromMap($this->doRPCRequest('ModifyGroupMonitoringAgentProcess', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyHostAvailabilityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyHostAvailabilityResponse
     */
    public function modifyHostAvailabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHostAvailabilityResponse::fromMap($this->doRPCRequest('ModifyHostAvailability', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyHostInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyHostInfoResponse
     */
    public function modifyHostInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHostInfoResponse::fromMap($this->doRPCRequest('ModifyHostInfo', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyMetricRuleTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyMetricRuleTemplateResponse
     */
    public function modifyMetricRuleTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMetricRuleTemplateResponse::fromMap($this->doRPCRequest('ModifyMetricRuleTemplate', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyMonitorGroupResponse
     */
    public function modifyMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMonitorGroupResponse::fromMap($this->doRPCRequest('ModifyMonitorGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMonitorGroupInstancesResponse::fromMap($this->doRPCRequest('ModifyMonitorGroupInstances', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifySiteMonitorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySiteMonitorResponse
     */
    public function modifySiteMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySiteMonitorResponse::fromMap($this->doRPCRequest('ModifySiteMonitor', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return OpenCmsServiceResponse
     */
    public function openCmsServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return OpenCmsServiceResponse::fromMap($this->doRPCRequest('OpenCmsService', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return OpenCmsServiceResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutContactResponse::fromMap($this->doRPCRequest('PutContact', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PutContactGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutContactGroupResponse
     */
    public function putContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutContactGroupResponse::fromMap($this->doRPCRequest('PutContactGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutCustomEventRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutCustomEventResponse
     */
    public function putCustomEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutCustomEventResponse::fromMap($this->doRPCRequest('PutCustomEvent', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PutCustomEventRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutCustomEventRuleResponse
     */
    public function putCustomEventRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutCustomEventRuleResponse::fromMap($this->doRPCRequest('PutCustomEventRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutCustomMetricRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutCustomMetricResponse
     */
    public function putCustomMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutCustomMetricResponse::fromMap($this->doRPCRequest('PutCustomMetric', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutCustomMetricRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutCustomMetricRuleResponse
     */
    public function putCustomMetricRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutCustomMetricRuleResponse::fromMap($this->doRPCRequest('PutCustomMetricRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutEventRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PutEventRuleResponse
     */
    public function putEventRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutEventRuleResponse::fromMap($this->doRPCRequest('PutEventRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutEventRuleTargetsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutEventRuleTargetsResponse
     */
    public function putEventRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutEventRuleTargetsResponse::fromMap($this->doRPCRequest('PutEventRuleTargets', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PutExporterOutputRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PutExporterOutputResponse
     */
    public function putExporterOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutExporterOutputResponse::fromMap($this->doRPCRequest('PutExporterOutput', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutExporterRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutExporterRuleResponse
     */
    public function putExporterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutExporterRuleResponse::fromMap($this->doRPCRequest('PutExporterRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PutGroupMetricRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutGroupMetricRuleResponse
     */
    public function putGroupMetricRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutGroupMetricRuleResponse::fromMap($this->doRPCRequest('PutGroupMetricRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutLogMonitorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PutLogMonitorResponse
     */
    public function putLogMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutLogMonitorResponse::fromMap($this->doRPCRequest('PutLogMonitor', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutMetricRuleTargetsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutMetricRuleTargetsResponse::fromMap($this->doRPCRequest('PutMetricRuleTargets', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutMonitorGroupDynamicRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PutMonitorGroupDynamicRuleResponse
     */
    public function putMonitorGroupDynamicRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutMonitorGroupDynamicRuleResponse::fromMap($this->doRPCRequest('PutMonitorGroupDynamicRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutMonitoringConfigResponse::fromMap($this->doRPCRequest('PutMonitoringConfig', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PutResourceMetricRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PutResourceMetricRuleResponse
     */
    public function putResourceMetricRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutResourceMetricRuleResponse::fromMap($this->doRPCRequest('PutResourceMetricRule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PutResourceMetricRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PutResourceMetricRulesResponse
     */
    public function putResourceMetricRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutResourceMetricRulesResponse::fromMap($this->doRPCRequest('PutResourceMetricRules', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RemoveTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RemoveTagsResponse
     */
    public function removeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveTagsResponse::fromMap($this->doRPCRequest('RemoveTags', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SendDryRunSystemEventRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SendDryRunSystemEventResponse
     */
    public function sendDryRunSystemEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendDryRunSystemEventResponse::fromMap($this->doRPCRequest('SendDryRunSystemEvent', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UninstallMonitoringAgentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UninstallMonitoringAgentResponse
     */
    public function uninstallMonitoringAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UninstallMonitoringAgentResponse::fromMap($this->doRPCRequest('UninstallMonitoringAgent', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
