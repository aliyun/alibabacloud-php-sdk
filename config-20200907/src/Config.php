<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Config\V20200907\Models\ActiveAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ActiveAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ActiveConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ActiveConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\AttachAggregateConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\AttachAggregateConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\AttachConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\AttachConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CopyCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CopyCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CopyConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CopyConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAdvancedSearchFileRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAdvancedSearchFileResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateAdvancedSearchFileRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateAdvancedSearchFileResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachAggregateConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachAggregateConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateResourceInventoryRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateResourceInventoryRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAdvancedSearchFileResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAdvancedSearchFileRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAdvancedSearchFileResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateComplianceSummaryRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateComplianceSummaryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateDiscoveredResourceRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateDiscoveredResourceResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceInventoryRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleSummaryByRiskLevelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetIntegratedServiceStatusRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetIntegratedServiceStatusResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetRemediationTemplateRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetRemediationTemplateResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetSupportedResourceRelationConfigRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetSupportedResourceRelationConfigResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreAggregateEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreAggregateEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreAggregateEvaluationResultsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreEvaluationResultsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigDeliveryChannelsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigDeliveryChannelsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationStatisticsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationStatisticsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateDiscoveredResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateDiscoveredResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationExecutionsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationExecutionsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceRelationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceRelationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourcesByAdvancedSearchRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourcesByAdvancedSearchResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigDeliveryChannelsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigDeliveryChannelsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationStatisticsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListIntegratedServiceResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListPreManagedRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListPreManagedRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListPreManagedRulesShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceRelationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceRelationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourcesByAdvancedSearchRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourcesByAdvancedSearchResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\PutEvaluationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\PutEvaluationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertAggregateEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertAggregateEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertAggregateEvaluationResultsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\RevertEvaluationResultsShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateConfigRuleEvaluationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateConfigRuleEvaluationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigRuleEvaluationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigRuleEvaluationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StopConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigurationRecorderRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateIntegratedServiceStatusRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateIntegratedServiceStatusResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateRemediationResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Config extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'cn-shanghai' => 'config.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'config.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('config', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Enables one or more rules in an account group. After a rule is enabled, the rule continues to automatically evaluate resources based on the trigger mechanism.
     *
     * @remarks
     * Enables one or more rules in an account group. After a rule is enabled, the rule continues to automatically evaluate resources based on the trigger mechanism.
     *
     * @param request - ActiveAggregateConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActiveAggregateConfigRulesResponse
     *
     * @param ActiveAggregateConfigRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ActiveAggregateConfigRulesResponse
     */
    public function activeAggregateConfigRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActiveAggregateConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActiveAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables one or more rules in an account group. After a rule is enabled, the rule continues to automatically evaluate resources based on the trigger mechanism.
     *
     * @remarks
     * Enables one or more rules in an account group. After a rule is enabled, the rule continues to automatically evaluate resources based on the trigger mechanism.
     *
     * @param request - ActiveAggregateConfigRulesRequest
     *
     * @returns ActiveAggregateConfigRulesResponse
     *
     * @param ActiveAggregateConfigRulesRequest $request
     *
     * @return ActiveAggregateConfigRulesResponse
     */
    public function activeAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Enables a rule in Cloud Config. After a rule is enabled, Cloud Config automatically evaluates the compliance of a resource based on the trigger mechanism of the rule.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The rule is in the `INACTIVE` state.
     *
     * @param request - ActiveConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActiveConfigRulesResponse
     *
     * @param ActiveConfigRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ActiveConfigRulesResponse
     */
    public function activeConfigRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActiveConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActiveConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a rule in Cloud Config. After a rule is enabled, Cloud Config automatically evaluates the compliance of a resource based on the trigger mechanism of the rule.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The rule is in the `INACTIVE` state.
     *
     * @param request - ActiveConfigRulesRequest
     *
     * @returns ActiveConfigRulesResponse
     *
     * @param ActiveConfigRulesRequest $request
     *
     * @return ActiveConfigRulesResponse
     */
    public function activeConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Adds one or more rules in an account group to a compliance package.
     *
     * @remarks
     * The sample request in this topic shows you how to add the `cr-6cc4626622af00e7****` rule in the `ca-75b4626622af00c3****` account group to the `cp-5bb1626622af00bd****` compliance package.
     *
     * @param request - AttachAggregateConfigRuleToCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachAggregateConfigRuleToCompliancePackResponse
     *
     * @param AttachAggregateConfigRuleToCompliancePackRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return AttachAggregateConfigRuleToCompliancePackResponse
     */
    public function attachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachAggregateConfigRuleToCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachAggregateConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more rules in an account group to a compliance package.
     *
     * @remarks
     * The sample request in this topic shows you how to add the `cr-6cc4626622af00e7****` rule in the `ca-75b4626622af00c3****` account group to the `cp-5bb1626622af00bd****` compliance package.
     *
     * @param request - AttachAggregateConfigRuleToCompliancePackRequest
     *
     * @returns AttachAggregateConfigRuleToCompliancePackResponse
     *
     * @param AttachAggregateConfigRuleToCompliancePackRequest $request
     *
     * @return AttachAggregateConfigRuleToCompliancePackResponse
     */
    public function attachAggregateConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Adds one or more rules to a compliance package.
     *
     * @remarks
     * This topic provides an example on how to add the `cr-6cc4626622af00e7****` rule to the `cp-5bb1626622af00bd****` compliance package.
     *
     * @param request - AttachConfigRuleToCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachConfigRuleToCompliancePackResponse
     *
     * @param AttachConfigRuleToCompliancePackRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AttachConfigRuleToCompliancePackResponse
     */
    public function attachConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachConfigRuleToCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more rules to a compliance package.
     *
     * @remarks
     * This topic provides an example on how to add the `cr-6cc4626622af00e7****` rule to the `cp-5bb1626622af00bd****` compliance package.
     *
     * @param request - AttachConfigRuleToCompliancePackRequest
     *
     * @returns AttachConfigRuleToCompliancePackResponse
     *
     * @param AttachConfigRuleToCompliancePackRequest $request
     *
     * @return AttachConfigRuleToCompliancePackResponse
     */
    public function attachConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Replicates compliance packages.
     *
     * @param request - CopyCompliancePacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyCompliancePacksResponse
     *
     * @param CopyCompliancePacksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CopyCompliancePacksResponse
     */
    public function copyCompliancePacksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desAggregatorIds) {
            @$query['DesAggregatorIds'] = $request->desAggregatorIds;
        }

        if (null !== $request->srcAggregatorId) {
            @$query['SrcAggregatorId'] = $request->srcAggregatorId;
        }

        if (null !== $request->srcCompliancePackIds) {
            @$query['SrcCompliancePackIds'] = $request->srcCompliancePackIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyCompliancePacks',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replicates compliance packages.
     *
     * @param request - CopyCompliancePacksRequest
     *
     * @returns CopyCompliancePacksResponse
     *
     * @param CopyCompliancePacksRequest $request
     *
     * @return CopyCompliancePacksResponse
     */
    public function copyCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * Replicates rules.
     *
     * @param request - CopyConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyConfigRulesResponse
     *
     * @param CopyConfigRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CopyConfigRulesResponse
     */
    public function copyConfigRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desAggregatorIds) {
            @$query['DesAggregatorIds'] = $request->desAggregatorIds;
        }

        if (null !== $request->srcAggregatorId) {
            @$query['SrcAggregatorId'] = $request->srcAggregatorId;
        }

        if (null !== $request->srcConfigRuleIds) {
            @$query['SrcConfigRuleIds'] = $request->srcConfigRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replicates rules.
     *
     * @param request - CopyConfigRulesRequest
     *
     * @returns CopyConfigRulesResponse
     *
     * @param CopyConfigRulesRequest $request
     *
     * @return CopyConfigRulesResponse
     */
    public function copyConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Creates a downloadable resource file for the current Alibaba Cloud account.
     *
     * @param request - CreateAdvancedSearchFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAdvancedSearchFileResponse
     *
     * @param CreateAdvancedSearchFileRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAdvancedSearchFileResponse
     */
    public function createAdvancedSearchFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sql) {
            @$query['Sql'] = $request->sql;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAdvancedSearchFile',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAdvancedSearchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a downloadable resource file for the current Alibaba Cloud account.
     *
     * @param request - CreateAdvancedSearchFileRequest
     *
     * @returns CreateAdvancedSearchFileResponse
     *
     * @param CreateAdvancedSearchFileRequest $request
     *
     * @return CreateAdvancedSearchFileResponse
     */
    public function createAdvancedSearchFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdvancedSearchFileWithOptions($request, $runtime);
    }

    /**
     * Creates a downloadable resource file for an account group.
     *
     * @remarks
     * This topic provides an example on how to create a downloadable resource file for an account group whose ID is `ca-edd3626622af00b3****`. The resource file includes all the ECS instances in the account group.
     *
     * @param request - CreateAggregateAdvancedSearchFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAggregateAdvancedSearchFileResponse
     *
     * @param CreateAggregateAdvancedSearchFileRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateAggregateAdvancedSearchFileResponse
     */
    public function createAggregateAdvancedSearchFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->sql) {
            @$query['Sql'] = $request->sql;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAggregateAdvancedSearchFile',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAggregateAdvancedSearchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a downloadable resource file for an account group.
     *
     * @remarks
     * This topic provides an example on how to create a downloadable resource file for an account group whose ID is `ca-edd3626622af00b3****`. The resource file includes all the ECS instances in the account group.
     *
     * @param request - CreateAggregateAdvancedSearchFileRequest
     *
     * @returns CreateAggregateAdvancedSearchFileResponse
     *
     * @param CreateAggregateAdvancedSearchFileRequest $request
     *
     * @return CreateAggregateAdvancedSearchFileResponse
     */
    public function createAggregateAdvancedSearchFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateAdvancedSearchFileWithOptions($request, $runtime);
    }

    /**
     * Creates a compliance package for an account group.
     *
     * @remarks
     * This topic provides an example on how to create a compliance package for the account group `ca-f632626622af0079****` by using the compliance package template `ClassifiedProtectionPreCheck`.
     *
     * @param tmpReq - CreateAggregateCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAggregateCompliancePackResponse
     *
     * @param CreateAggregateCompliancePackRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateAggregateCompliancePackResponse
     */
    public function createAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAggregateCompliancePackShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configRules) {
            $request->configRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliancePackName) {
            @$body['CompliancePackName'] = $request->compliancePackName;
        }

        if (null !== $request->compliancePackTemplateId) {
            @$body['CompliancePackTemplateId'] = $request->compliancePackTemplateId;
        }

        if (null !== $request->configRulesShrink) {
            @$body['ConfigRules'] = $request->configRulesShrink;
        }

        if (null !== $request->defaultEnable) {
            @$body['DefaultEnable'] = $request->defaultEnable;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        $bodyFlat = [];
        if (null !== $request->excludeTagsScope) {
            @$bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }

        if (null !== $request->regionIdsScope) {
            @$body['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$body['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->tagKeyScope) {
            @$body['TagKeyScope'] = $request->tagKeyScope;
        }

        if (null !== $request->tagValueScope) {
            @$body['TagValueScope'] = $request->tagValueScope;
        }

        if (null !== $request->tagsScope) {
            @$bodyFlat['TagsScope'] = $request->tagsScope;
        }

        if (null !== $request->templateContent) {
            @$body['TemplateContent'] = $request->templateContent;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAggregateCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a compliance package for an account group.
     *
     * @remarks
     * This topic provides an example on how to create a compliance package for the account group `ca-f632626622af0079****` by using the compliance package template `ClassifiedProtectionPreCheck`.
     *
     * @param request - CreateAggregateCompliancePackRequest
     *
     * @returns CreateAggregateCompliancePackResponse
     *
     * @param CreateAggregateCompliancePackRequest $request
     *
     * @return CreateAggregateCompliancePackResponse
     */
    public function createAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Creates a delivery channel for an account group.
     *
     * @remarks
     * In this example, a delivery channel is created for an account group. The ID of the account group is `ca-a4e5626622af0079****`. The type of the delivery channel is `OSS` and the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The result indicates that the delivery channel is created. The ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *
     * @param request - CreateAggregateConfigDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAggregateConfigDeliveryChannelResponse
     *
     * @param CreateAggregateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateAggregateConfigDeliveryChannelResponse
     */
    public function createAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliantSnapshot) {
            @$query['CompliantSnapshot'] = $request->compliantSnapshot;
        }

        if (null !== $request->configurationItemChangeNotification) {
            @$query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }

        if (null !== $request->configurationSnapshot) {
            @$query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }

        if (null !== $request->deliveryChannelCondition) {
            @$query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }

        if (null !== $request->deliveryChannelName) {
            @$query['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->deliveryChannelTargetArn) {
            @$query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }

        if (null !== $request->deliveryChannelType) {
            @$query['DeliveryChannelType'] = $request->deliveryChannelType;
        }

        if (null !== $request->deliverySnapshotTime) {
            @$query['DeliverySnapshotTime'] = $request->deliverySnapshotTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->nonCompliantNotification) {
            @$query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }

        if (null !== $request->oversizedDataOSSTargetArn) {
            @$query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAggregateConfigDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a delivery channel for an account group.
     *
     * @remarks
     * In this example, a delivery channel is created for an account group. The ID of the account group is `ca-a4e5626622af0079****`. The type of the delivery channel is `OSS` and the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The result indicates that the delivery channel is created. The ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *
     * @param request - CreateAggregateConfigDeliveryChannelRequest
     *
     * @returns CreateAggregateConfigDeliveryChannelResponse
     *
     * @param CreateAggregateConfigDeliveryChannelRequest $request
     *
     * @return CreateAggregateConfigDeliveryChannelResponse
     */
    public function createAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Creates a rule for an account group.
     *
     * @remarks
     * ### Limits
     * You can create up to 200 rules for each management account.
     * ### Usage notes
     * This topic provides an example on how to create a rule based on the required-tags managed rule in the `ca-a4e5626622af0079****` account group. The returned result shows that the rule is created and its ID is `cr-4e3d626622af0080****`.
     *
     * @param tmpReq - CreateAggregateConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAggregateConfigRuleResponse
     *
     * @param CreateAggregateConfigRuleRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAggregateConfigRuleResponse
     */
    public function createAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAggregateConfigRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inputParameters) {
            $request->inputParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }

        if (null !== $tmpReq->resourceTypesScope) {
            $request->resourceTypesScopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->resourceNameScope) {
            @$query['ResourceNameScope'] = $request->resourceNameScope;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->accountIdsScope) {
            @$body['AccountIdsScope'] = $request->accountIdsScope;
        }

        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configRuleName) {
            @$body['ConfigRuleName'] = $request->configRuleName;
        }

        if (null !== $request->configRuleTriggerTypes) {
            @$body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->excludeAccountIdsScope) {
            @$body['ExcludeAccountIdsScope'] = $request->excludeAccountIdsScope;
        }

        if (null !== $request->excludeFolderIdsScope) {
            @$body['ExcludeFolderIdsScope'] = $request->excludeFolderIdsScope;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        $bodyFlat = [];
        if (null !== $request->excludeTagsScope) {
            @$bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }

        if (null !== $request->extendContent) {
            @$body['ExtendContent'] = $request->extendContent;
        }

        if (null !== $request->folderIdsScope) {
            @$body['FolderIdsScope'] = $request->folderIdsScope;
        }

        if (null !== $request->inputParametersShrink) {
            @$body['InputParameters'] = $request->inputParametersShrink;
        }

        if (null !== $request->maximumExecutionFrequency) {
            @$body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }

        if (null !== $request->regionIdsScope) {
            @$body['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$body['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->resourceTypesScopeShrink) {
            @$body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->sourceIdentifier) {
            @$body['SourceIdentifier'] = $request->sourceIdentifier;
        }

        if (null !== $request->sourceOwner) {
            @$body['SourceOwner'] = $request->sourceOwner;
        }

        if (null !== $request->tagKeyLogicScope) {
            @$body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }

        if (null !== $request->tagKeyScope) {
            @$body['TagKeyScope'] = $request->tagKeyScope;
        }

        if (null !== $request->tagValueScope) {
            @$body['TagValueScope'] = $request->tagValueScope;
        }

        if (null !== $request->tagsScope) {
            @$bodyFlat['TagsScope'] = $request->tagsScope;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAggregateConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a rule for an account group.
     *
     * @remarks
     * ### Limits
     * You can create up to 200 rules for each management account.
     * ### Usage notes
     * This topic provides an example on how to create a rule based on the required-tags managed rule in the `ca-a4e5626622af0079****` account group. The returned result shows that the rule is created and its ID is `cr-4e3d626622af0080****`.
     *
     * @param request - CreateAggregateConfigRuleRequest
     *
     * @returns CreateAggregateConfigRuleResponse
     *
     * @param CreateAggregateConfigRuleRequest $request
     *
     * @return CreateAggregateConfigRuleResponse
     */
    public function createAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a remediation template for a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to create a remediation template for the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`. The returned result shows that a remediation template is created and the ID of the remediation template is `crr-909ba2d4716700eb****`.
     *
     * @param request - CreateAggregateRemediationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAggregateRemediationResponse
     *
     * @param CreateAggregateRemediationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAggregateRemediationResponse
     */
    public function createAggregateRemediationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configRuleId) {
            @$body['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->invokeType) {
            @$body['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->params) {
            @$body['Params'] = $request->params;
        }

        if (null !== $request->remediationTemplateId) {
            @$body['RemediationTemplateId'] = $request->remediationTemplateId;
        }

        if (null !== $request->remediationType) {
            @$body['RemediationType'] = $request->remediationType;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAggregateRemediation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a remediation template for a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to create a remediation template for the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`. The returned result shows that a remediation template is created and the ID of the remediation template is `crr-909ba2d4716700eb****`.
     *
     * @param request - CreateAggregateRemediationRequest
     *
     * @returns CreateAggregateRemediationResponse
     *
     * @param CreateAggregateRemediationRequest $request
     *
     * @return CreateAggregateRemediationResponse
     */
    public function createAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * Creates an account group.
     *
     * @remarks
     * Each management account can create a maximum of five account groups. Each account group can contain a maximum of 200 member accounts.
     * Cloud Config supports the following types of account groups:
     * *   Global account group: The global account group contains all the member accounts that are added to the resource directory. A management account can create only one global account group.
     * *   Custom account group: If you create a custom account group, you must manually add all or specific member accounts from the resource directory to the custom account group.
     * This topic provides an example on how to create an account group of the `CUSTOM` type. The custom account group is named `Test_Group`, and its description is `Test account group`. The custom account group contains the following two member accounts:
     * *   Member account ID: `171322098523****`. Member account name: `Alice`.
     * *   Member account ID: `100532098349****`. Member account name: `Tom`.
     *
     * @param tmpReq - CreateAggregatorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAggregatorResponse
     *
     * @param CreateAggregatorRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAggregatorResponse
     */
    public function createAggregatorWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAggregatorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aggregatorAccounts) {
            $request->aggregatorAccountsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aggregatorAccounts, 'AggregatorAccounts', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->aggregatorAccountsShrink) {
            @$body['AggregatorAccounts'] = $request->aggregatorAccountsShrink;
        }

        if (null !== $request->aggregatorName) {
            @$body['AggregatorName'] = $request->aggregatorName;
        }

        if (null !== $request->aggregatorType) {
            @$body['AggregatorType'] = $request->aggregatorType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->folderId) {
            @$body['FolderId'] = $request->folderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAggregator',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an account group.
     *
     * @remarks
     * Each management account can create a maximum of five account groups. Each account group can contain a maximum of 200 member accounts.
     * Cloud Config supports the following types of account groups:
     * *   Global account group: The global account group contains all the member accounts that are added to the resource directory. A management account can create only one global account group.
     * *   Custom account group: If you create a custom account group, you must manually add all or specific member accounts from the resource directory to the custom account group.
     * This topic provides an example on how to create an account group of the `CUSTOM` type. The custom account group is named `Test_Group`, and its description is `Test account group`. The custom account group contains the following two member accounts:
     * *   Member account ID: `171322098523****`. Member account name: `Alice`.
     * *   Member account ID: `100532098349****`. Member account name: `Tom`.
     *
     * @param request - CreateAggregatorRequest
     *
     * @returns CreateAggregatorResponse
     *
     * @param CreateAggregatorRequest $request
     *
     * @return CreateAggregatorResponse
     */
    public function createAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregatorWithOptions($request, $runtime);
    }

    /**
     * Creates a compliance package for the current account.
     *
     * @remarks
     * Each ordinary account can create up to five compliance packages.
     * This topic provides an example on how to create a compliance package named ClassifiedProtectionPreCheck. The compliance package contains a managed rule named `eip-bandwidth-limit`.
     *
     * @param tmpReq - CreateCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCompliancePackResponse
     *
     * @param CreateCompliancePackRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCompliancePackResponse
     */
    public function createCompliancePackWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCompliancePackShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configRules) {
            $request->configRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliancePackName) {
            @$body['CompliancePackName'] = $request->compliancePackName;
        }

        if (null !== $request->compliancePackTemplateId) {
            @$body['CompliancePackTemplateId'] = $request->compliancePackTemplateId;
        }

        if (null !== $request->configRulesShrink) {
            @$body['ConfigRules'] = $request->configRulesShrink;
        }

        if (null !== $request->defaultEnable) {
            @$body['DefaultEnable'] = $request->defaultEnable;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        $bodyFlat = [];
        if (null !== $request->excludeTagsScope) {
            @$bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }

        if (null !== $request->regionIdsScope) {
            @$body['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$body['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->tagKeyScope) {
            @$body['TagKeyScope'] = $request->tagKeyScope;
        }

        if (null !== $request->tagValueScope) {
            @$body['TagValueScope'] = $request->tagValueScope;
        }

        if (null !== $request->tagsScope) {
            @$bodyFlat['TagsScope'] = $request->tagsScope;
        }

        if (null !== $request->templateContent) {
            @$body['TemplateContent'] = $request->templateContent;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a compliance package for the current account.
     *
     * @remarks
     * Each ordinary account can create up to five compliance packages.
     * This topic provides an example on how to create a compliance package named ClassifiedProtectionPreCheck. The compliance package contains a managed rule named `eip-bandwidth-limit`.
     *
     * @param request - CreateCompliancePackRequest
     *
     * @returns CreateCompliancePackResponse
     *
     * @param CreateCompliancePackRequest $request
     *
     * @return CreateCompliancePackResponse
     */
    public function createCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Creates a delivery channel.
     *
     * @remarks
     * In this example, a delivery channel is created. The type of the delivery channel is `OSS` and the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The result indicates that the delivery channel is created, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *
     * @param request - CreateConfigDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigDeliveryChannelResponse
     *
     * @param CreateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateConfigDeliveryChannelResponse
     */
    public function createConfigDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliantSnapshot) {
            @$query['CompliantSnapshot'] = $request->compliantSnapshot;
        }

        if (null !== $request->configurationItemChangeNotification) {
            @$query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }

        if (null !== $request->configurationSnapshot) {
            @$query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }

        if (null !== $request->deliveryChannelCondition) {
            @$query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }

        if (null !== $request->deliveryChannelName) {
            @$query['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->deliveryChannelTargetArn) {
            @$query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }

        if (null !== $request->deliveryChannelType) {
            @$query['DeliveryChannelType'] = $request->deliveryChannelType;
        }

        if (null !== $request->deliverySnapshotTime) {
            @$query['DeliverySnapshotTime'] = $request->deliverySnapshotTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->nonCompliantNotification) {
            @$query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }

        if (null !== $request->oversizedDataOSSTargetArn) {
            @$query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateConfigDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a delivery channel.
     *
     * @remarks
     * In this example, a delivery channel is created. The type of the delivery channel is `OSS` and the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The result indicates that the delivery channel is created, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *
     * @param request - CreateConfigDeliveryChannelRequest
     *
     * @returns CreateConfigDeliveryChannelResponse
     *
     * @param CreateConfigDeliveryChannelRequest $request
     *
     * @return CreateConfigDeliveryChannelResponse
     */
    public function createConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Creates a rule for the current account.
     *
     * @remarks
     * ## Limits
     * You can use a common account to create up to 200 rules.
     *
     * @param tmpReq - CreateConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigRuleResponse
     *
     * @param CreateConfigRuleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConfigRuleResponse
     */
    public function createConfigRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateConfigRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inputParameters) {
            $request->inputParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }

        if (null !== $tmpReq->resourceTypesScope) {
            $request->resourceTypesScopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configRuleName) {
            @$body['ConfigRuleName'] = $request->configRuleName;
        }

        if (null !== $request->configRuleTriggerTypes) {
            @$body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        $bodyFlat = [];
        if (null !== $request->excludeTagsScope) {
            @$bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }

        if (null !== $request->extendContent) {
            @$body['ExtendContent'] = $request->extendContent;
        }

        if (null !== $request->inputParametersShrink) {
            @$body['InputParameters'] = $request->inputParametersShrink;
        }

        if (null !== $request->maximumExecutionFrequency) {
            @$body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }

        if (null !== $request->regionIdsScope) {
            @$body['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$body['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->resourceNameScope) {
            @$body['ResourceNameScope'] = $request->resourceNameScope;
        }

        if (null !== $request->resourceTypesScopeShrink) {
            @$body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->sourceIdentifier) {
            @$body['SourceIdentifier'] = $request->sourceIdentifier;
        }

        if (null !== $request->sourceOwner) {
            @$body['SourceOwner'] = $request->sourceOwner;
        }

        if (null !== $request->tagKeyLogicScope) {
            @$body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }

        if (null !== $request->tagKeyScope) {
            @$body['TagKeyScope'] = $request->tagKeyScope;
        }

        if (null !== $request->tagValueScope) {
            @$body['TagValueScope'] = $request->tagValueScope;
        }

        if (null !== $request->tagsScope) {
            @$bodyFlat['TagsScope'] = $request->tagsScope;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a rule for the current account.
     *
     * @remarks
     * ## Limits
     * You can use a common account to create up to 200 rules.
     *
     * @param request - CreateConfigRuleRequest
     *
     * @returns CreateConfigRuleResponse
     *
     * @param CreateConfigRuleRequest $request
     *
     * @return CreateConfigRuleResponse
     */
    public function createConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigRuleWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * Creates a delivery channel.
     *
     * @remarks
     * In this example, a delivery channel is created. The type of the delivery channel is `OSS`, the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`, and the ARN of the role that is assigned to the delivery channel is `acs:ram::100931896542****:role/aliyunserviceroleforconfig`. The returned result shows that the delivery channel is created, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *
     * @deprecated openAPI CreateDeliveryChannel is deprecated, please use Config::2020-09-07::CreateConfigDeliveryChannel,Config::2020-09-07::CreateAggregateConfigDeliveryChannel instead
     *
     * @param request - CreateDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeliveryChannelResponse
     *
     * @param CreateDeliveryChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDeliveryChannelResponse
     */
    public function createDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configurationItemChangeNotification) {
            @$body['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }

        if (null !== $request->configurationSnapshot) {
            @$body['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }

        if (null !== $request->deliveryChannelAssumeRoleArn) {
            @$body['DeliveryChannelAssumeRoleArn'] = $request->deliveryChannelAssumeRoleArn;
        }

        if (null !== $request->deliveryChannelCondition) {
            @$body['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }

        if (null !== $request->deliveryChannelName) {
            @$body['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->deliveryChannelTargetArn) {
            @$body['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }

        if (null !== $request->deliveryChannelType) {
            @$body['DeliveryChannelType'] = $request->deliveryChannelType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->nonCompliantNotification) {
            @$body['NonCompliantNotification'] = $request->nonCompliantNotification;
        }

        if (null !== $request->oversizedDataOSSTargetArn) {
            @$body['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Creates a delivery channel.
     *
     * @remarks
     * In this example, a delivery channel is created. The type of the delivery channel is `OSS`, the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`, and the ARN of the role that is assigned to the delivery channel is `acs:ram::100931896542****:role/aliyunserviceroleforconfig`. The returned result shows that the delivery channel is created, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *
     * @deprecated openAPI CreateDeliveryChannel is deprecated, please use Config::2020-09-07::CreateConfigDeliveryChannel,Config::2020-09-07::CreateAggregateConfigDeliveryChannel instead
     *
     * @param request - CreateDeliveryChannelRequest
     *
     * @returns CreateDeliveryChannelResponse
     *
     * @param CreateDeliveryChannelRequest $request
     *
     * @return CreateDeliveryChannelResponse
     */
    public function createDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Creates a remediation template for a rule.
     *
     * @remarks
     * This topic provides an example on how to create a remediation template for the rule `cr-8a973ac2e2be00a2****`. The returned result shows that a remediation template is created and the ID of the remediation template is `crr-909ba2d4716700eb****`.
     *
     * @param request - CreateRemediationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRemediationResponse
     *
     * @param CreateRemediationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRemediationResponse
     */
    public function createRemediationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configRuleId) {
            @$body['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->invokeType) {
            @$body['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->params) {
            @$body['Params'] = $request->params;
        }

        if (null !== $request->remediationTemplateId) {
            @$body['RemediationTemplateId'] = $request->remediationTemplateId;
        }

        if (null !== $request->remediationType) {
            @$body['RemediationType'] = $request->remediationType;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRemediation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a remediation template for a rule.
     *
     * @remarks
     * This topic provides an example on how to create a remediation template for the rule `cr-8a973ac2e2be00a2****`. The returned result shows that a remediation template is created and the ID of the remediation template is `crr-909ba2d4716700eb****`.
     *
     * @param request - CreateRemediationRequest
     *
     * @returns CreateRemediationResponse
     *
     * @param CreateRemediationRequest $request
     *
     * @return CreateRemediationResponse
     */
    public function createRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemediationWithOptions($request, $runtime);
    }

    /**
     * Disables one or more rules in an account group. After a rule is disabled, the resource in the rule is no longer evaluated. The compliance evaluation results before the rule is disabled are still displayed.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The status of the rule is `ACTIVE`.
     * ### [](#)Description
     * This topic provides an example on how to disable the `cr-5772ba41209e007b****` rule in the `ca-04b3fd170e340007****` account group.
     *
     * @param request - DeactiveAggregateConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeactiveAggregateConfigRulesResponse
     *
     * @param DeactiveAggregateConfigRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeactiveAggregateConfigRulesResponse
     */
    public function deactiveAggregateConfigRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeactiveAggregateConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeactiveAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables one or more rules in an account group. After a rule is disabled, the resource in the rule is no longer evaluated. The compliance evaluation results before the rule is disabled are still displayed.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The status of the rule is `ACTIVE`.
     * ### [](#)Description
     * This topic provides an example on how to disable the `cr-5772ba41209e007b****` rule in the `ca-04b3fd170e340007****` account group.
     *
     * @param request - DeactiveAggregateConfigRulesRequest
     *
     * @returns DeactiveAggregateConfigRulesResponse
     *
     * @param DeactiveAggregateConfigRulesRequest $request
     *
     * @return DeactiveAggregateConfigRulesResponse
     */
    public function deactiveAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Disables a rule. After a rule is disabled, the resource in the rule is no longer evaluated. The compliance evaluation results before the rule is disabled are still displayed.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The status of the rule is `ACTIVE`.
     * ### [](#)Description
     * This topic provides an example on how to disable the `cr-19a56457e0d90058****` rule.
     *
     * @param request - DeactiveConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeactiveConfigRulesResponse
     *
     * @param DeactiveConfigRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeactiveConfigRulesResponse
     */
    public function deactiveConfigRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeactiveConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeactiveConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a rule. After a rule is disabled, the resource in the rule is no longer evaluated. The compliance evaluation results before the rule is disabled are still displayed.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The status of the rule is `ACTIVE`.
     * ### [](#)Description
     * This topic provides an example on how to disable the `cr-19a56457e0d90058****` rule.
     *
     * @param request - DeactiveConfigRulesRequest
     *
     * @returns DeactiveConfigRulesResponse
     *
     * @param DeactiveConfigRulesRequest $request
     *
     * @return DeactiveConfigRulesResponse
     */
    public function deactiveConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes the compliance packages of an account group.
     *
     * @remarks
     * This topic provides an example on how to delete the `cp-541e626622af0087****` compliance package from the `ca-04b3fd170e340007****` account group.
     *
     * @param request - DeleteAggregateCompliancePacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAggregateCompliancePacksResponse
     *
     * @param DeleteAggregateCompliancePacksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteAggregateCompliancePacksResponse
     */
    public function deleteAggregateCompliancePacksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliancePackIds) {
            @$body['CompliancePackIds'] = $request->compliancePackIds;
        }

        if (null !== $request->deleteRule) {
            @$body['DeleteRule'] = $request->deleteRule;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAggregateCompliancePacks',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAggregateCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the compliance packages of an account group.
     *
     * @remarks
     * This topic provides an example on how to delete the `cp-541e626622af0087****` compliance package from the `ca-04b3fd170e340007****` account group.
     *
     * @param request - DeleteAggregateCompliancePacksRequest
     *
     * @returns DeleteAggregateCompliancePacksResponse
     *
     * @param DeleteAggregateCompliancePacksRequest $request
     *
     * @return DeleteAggregateCompliancePacksResponse
     */
    public function deleteAggregateCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * Deletes a delivery channel from an account group.
     *
     * @remarks
     * This topic provides an example on how to delete the `cdc-38c3013b46c9002c****` delivery channel from the `ca-23c6626622af0041****` account group. The returned result shows that the `cdc-38c3013b46c9002c****` delivery channel is deleted.
     *
     * @param request - DeleteAggregateConfigDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAggregateConfigDeliveryChannelResponse
     *
     * @param DeleteAggregateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DeleteAggregateConfigDeliveryChannelResponse
     */
    public function deleteAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAggregateConfigDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a delivery channel from an account group.
     *
     * @remarks
     * This topic provides an example on how to delete the `cdc-38c3013b46c9002c****` delivery channel from the `ca-23c6626622af0041****` account group. The returned result shows that the `cdc-38c3013b46c9002c****` delivery channel is deleted.
     *
     * @param request - DeleteAggregateConfigDeliveryChannelRequest
     *
     * @returns DeleteAggregateConfigDeliveryChannelResponse
     *
     * @param DeleteAggregateConfigDeliveryChannelRequest $request
     *
     * @return DeleteAggregateConfigDeliveryChannelResponse
     */
    public function deleteAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more rules from an account group. You can delete a rule in the Cloud Config console. After you delete the rule, the configurations of the rule are deleted.
     *
     * @remarks
     * This topic provides an example on how to delete the `cr-4e3d626622af0080****` rule from the `ca-a4e5626622af0079****` account group.
     *
     * @param request - DeleteAggregateConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAggregateConfigRulesResponse
     *
     * @param DeleteAggregateConfigRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAggregateConfigRulesResponse
     */
    public function deleteAggregateConfigRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAggregateConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more rules from an account group. You can delete a rule in the Cloud Config console. After you delete the rule, the configurations of the rule are deleted.
     *
     * @remarks
     * This topic provides an example on how to delete the `cr-4e3d626622af0080****` rule from the `ca-a4e5626622af0079****` account group.
     *
     * @param request - DeleteAggregateConfigRulesRequest
     *
     * @returns DeleteAggregateConfigRulesResponse
     *
     * @param DeleteAggregateConfigRulesRequest $request
     *
     * @return DeleteAggregateConfigRulesResponse
     */
    public function deleteAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more remediation templates from a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to delete the remediation template whose ID is `crr-909ba2d4716700eb****` from the account group whose ID is `ca-6b4a626622af0012****`. The returned result shows that the remediation template whose ID is `crr-909ba2d4716700eb****` is deleted.
     *
     * @param request - DeleteAggregateRemediationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAggregateRemediationsResponse
     *
     * @param DeleteAggregateRemediationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAggregateRemediationsResponse
     */
    public function deleteAggregateRemediationsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->remediationIds) {
            @$body['RemediationIds'] = $request->remediationIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAggregateRemediations',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAggregateRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more remediation templates from a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to delete the remediation template whose ID is `crr-909ba2d4716700eb****` from the account group whose ID is `ca-6b4a626622af0012****`. The returned result shows that the remediation template whose ID is `crr-909ba2d4716700eb****` is deleted.
     *
     * @param request - DeleteAggregateRemediationsRequest
     *
     * @returns DeleteAggregateRemediationsResponse
     *
     * @param DeleteAggregateRemediationsRequest $request
     *
     * @return DeleteAggregateRemediationsResponse
     */
    public function deleteAggregateRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateRemediationsWithOptions($request, $runtime);
    }

    /**
     * The management account or delegated administrator account of a resource directory can delete an account group.
     *
     * @remarks
     * ### [](#)Background information
     * After you delete an account group, the following changes occur to Cloud Config:
     * *   The rules and compliance packages of the account group are deleted and cannot be recovered.
     * *   All compliance results generated in the account group are automatically deleted and cannot be recovered.
     * *   Service-linked roles for Cloud Config of member accounts in the account group are retained.
     * *   If the account groups to which a member belongs are all deleted, the member account uses Cloud Config as an independent Alibaba Cloud account.
     * ### [](#)Description
     * This topic provides an example on how to delete the account group whose ID is `ca-9190626622af00a9****`.
     *
     * @param request - DeleteAggregatorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAggregatorsResponse
     *
     * @param DeleteAggregatorsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAggregatorsResponse
     */
    public function deleteAggregatorsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregatorIds) {
            @$body['AggregatorIds'] = $request->aggregatorIds;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAggregators',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAggregatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The management account or delegated administrator account of a resource directory can delete an account group.
     *
     * @remarks
     * ### [](#)Background information
     * After you delete an account group, the following changes occur to Cloud Config:
     * *   The rules and compliance packages of the account group are deleted and cannot be recovered.
     * *   All compliance results generated in the account group are automatically deleted and cannot be recovered.
     * *   Service-linked roles for Cloud Config of member accounts in the account group are retained.
     * *   If the account groups to which a member belongs are all deleted, the member account uses Cloud Config as an independent Alibaba Cloud account.
     * ### [](#)Description
     * This topic provides an example on how to delete the account group whose ID is `ca-9190626622af00a9****`.
     *
     * @param request - DeleteAggregatorsRequest
     *
     * @returns DeleteAggregatorsResponse
     *
     * @param DeleteAggregatorsRequest $request
     *
     * @return DeleteAggregatorsResponse
     */
    public function deleteAggregators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregatorsWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more compliance packages.
     *
     * @remarks
     * This topic provides an example on how to delete the `cp-541e626622af0087****` compliance package.
     *
     * @param request - DeleteCompliancePacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCompliancePacksResponse
     *
     * @param DeleteCompliancePacksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCompliancePacksResponse
     */
    public function deleteCompliancePacksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliancePackIds) {
            @$body['CompliancePackIds'] = $request->compliancePackIds;
        }

        if (null !== $request->deleteRule) {
            @$body['DeleteRule'] = $request->deleteRule;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCompliancePacks',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more compliance packages.
     *
     * @remarks
     * This topic provides an example on how to delete the `cp-541e626622af0087****` compliance package.
     *
     * @param request - DeleteCompliancePacksRequest
     *
     * @returns DeleteCompliancePacksResponse
     *
     * @param DeleteCompliancePacksRequest $request
     *
     * @return DeleteCompliancePacksResponse
     */
    public function deleteCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * Deletes a delivery channel.
     *
     * @remarks
     * This topic provides an example on how to delete the `cdc-38c3013b46c9002c****` delivery channel. The returned result shows that the `cdc-38c3013b46c9002c****` delivery channel is deleted.
     *
     * @param request - DeleteConfigDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigDeliveryChannelResponse
     *
     * @param DeleteConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteConfigDeliveryChannelResponse
     */
    public function deleteConfigDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConfigDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a delivery channel.
     *
     * @remarks
     * This topic provides an example on how to delete the `cdc-38c3013b46c9002c****` delivery channel. The returned result shows that the `cdc-38c3013b46c9002c****` delivery channel is deleted.
     *
     * @param request - DeleteConfigDeliveryChannelRequest
     *
     * @returns DeleteConfigDeliveryChannelResponse
     *
     * @param DeleteConfigDeliveryChannelRequest $request
     *
     * @return DeleteConfigDeliveryChannelResponse
     */
    public function deleteConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Deletes rules.
     *
     * @remarks
     * In this example, the rule whose ID is cr-9908626622af0035\\*\\*\\*\\* is deleted.
     *
     * @param request - DeleteConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigRulesResponse
     *
     * @param DeleteConfigRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteConfigRulesResponse
     */
    public function deleteConfigRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes rules.
     *
     * @remarks
     * In this example, the rule whose ID is cr-9908626622af0035\\*\\*\\*\\* is deleted.
     *
     * @param request - DeleteConfigRulesRequest
     *
     * @returns DeleteConfigRulesResponse
     *
     * @param DeleteConfigRulesRequest $request
     *
     * @return DeleteConfigRulesResponse
     */
    public function deleteConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more configured remediation templates that are associated with a rule.
     *
     * @remarks
     * This topic provides an example on how to delete the remediation template `crr-909ba2d4716700eb****`. The returned result shows that the remediation template whose ID is `crr-909ba2d4716700eb****` is deleted.
     *
     * @param request - DeleteRemediationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRemediationsResponse
     *
     * @param DeleteRemediationsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRemediationsResponse
     */
    public function deleteRemediationsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->remediationIds) {
            @$body['RemediationIds'] = $request->remediationIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRemediations',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more configured remediation templates that are associated with a rule.
     *
     * @remarks
     * This topic provides an example on how to delete the remediation template `crr-909ba2d4716700eb****`. The returned result shows that the remediation template whose ID is `crr-909ba2d4716700eb****` is deleted.
     *
     * @param request - DeleteRemediationsRequest
     *
     * @returns DeleteRemediationsResponse
     *
     * @param DeleteRemediationsRequest $request
     *
     * @return DeleteRemediationsResponse
     */
    public function deleteRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemediationsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the details of a remediation configuration whose ID is crr-f381cf0c1c2f004e\\*\\*\\*\\*.
     *
     * @param request - DescribeRemediationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRemediationResponse
     *
     * @param DescribeRemediationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRemediationResponse
     */
    public function describeRemediationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRemediation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the details of a remediation configuration whose ID is crr-f381cf0c1c2f004e\\*\\*\\*\\*.
     *
     * @param request - DescribeRemediationRequest
     *
     * @returns DescribeRemediationResponse
     *
     * @param DescribeRemediationRequest $request
     *
     * @return DescribeRemediationResponse
     */
    public function describeRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRemediationWithOptions($request, $runtime);
    }

    /**
     * Removes one or more rules in an account group from a compliance package.
     *
     * @remarks
     * ### Prerequisites
     * One or more rules are added to a compliance package.
     * ### Usage notes
     * The sample request in this topic shows you how to remove the `cr-6cc4626622af00e7****` rule in the `ca-75b4626622af00c3****` account group from the `cp-5bb1626622af00bd****` compliance package.
     *
     * @param request - DetachAggregateConfigRuleToCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachAggregateConfigRuleToCompliancePackResponse
     *
     * @param DetachAggregateConfigRuleToCompliancePackRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DetachAggregateConfigRuleToCompliancePackResponse
     */
    public function detachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachAggregateConfigRuleToCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachAggregateConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes one or more rules in an account group from a compliance package.
     *
     * @remarks
     * ### Prerequisites
     * One or more rules are added to a compliance package.
     * ### Usage notes
     * The sample request in this topic shows you how to remove the `cr-6cc4626622af00e7****` rule in the `ca-75b4626622af00c3****` account group from the `cp-5bb1626622af00bd****` compliance package.
     *
     * @param request - DetachAggregateConfigRuleToCompliancePackRequest
     *
     * @returns DetachAggregateConfigRuleToCompliancePackResponse
     *
     * @param DetachAggregateConfigRuleToCompliancePackRequest $request
     *
     * @return DetachAggregateConfigRuleToCompliancePackResponse
     */
    public function detachAggregateConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Removes one or more rules from a compliance package.
     *
     * @remarks
     * ### Prerequisites
     * One or more rules are added to a compliance package.
     * ### Usage notes
     * This topic provides an example on how to remove the `cr-6cc4626622af00e7****` rule from the `cp-5bb1626622af00bd****` compliance package.
     *
     * @param request - DetachConfigRuleToCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachConfigRuleToCompliancePackResponse
     *
     * @param DetachConfigRuleToCompliancePackRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DetachConfigRuleToCompliancePackResponse
     */
    public function detachConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachConfigRuleToCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes one or more rules from a compliance package.
     *
     * @remarks
     * ### Prerequisites
     * One or more rules are added to a compliance package.
     * ### Usage notes
     * This topic provides an example on how to remove the `cr-6cc4626622af00e7****` rule from the `cp-5bb1626622af00bd****` compliance package.
     *
     * @param request - DetachConfigRuleToCompliancePackRequest
     *
     * @returns DetachConfigRuleToCompliancePackResponse
     *
     * @param DetachConfigRuleToCompliancePackRequest $request
     *
     * @return DetachConfigRuleToCompliancePackResponse
     */
    public function detachConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Executes evaluation rules to evaluate resources.
     *
     * @param tmpReq - EvaluatePreConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvaluatePreConfigRulesResponse
     *
     * @param EvaluatePreConfigRulesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return EvaluatePreConfigRulesResponse
     */
    public function evaluatePreConfigRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EvaluatePreConfigRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceEvaluateItems) {
            $request->resourceEvaluateItemsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceEvaluateItems, 'ResourceEvaluateItems', 'json');
        }

        $body = [];
        if (null !== $request->enableManagedRules) {
            @$body['EnableManagedRules'] = $request->enableManagedRules;
        }

        if (null !== $request->resourceEvaluateItemsShrink) {
            @$body['ResourceEvaluateItems'] = $request->resourceEvaluateItemsShrink;
        }

        if (null !== $request->resourceTypeFormat) {
            @$body['ResourceTypeFormat'] = $request->resourceTypeFormat;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EvaluatePreConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EvaluatePreConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes evaluation rules to evaluate resources.
     *
     * @param request - EvaluatePreConfigRulesRequest
     *
     * @returns EvaluatePreConfigRulesResponse
     *
     * @param EvaluatePreConfigRulesRequest $request
     *
     * @return EvaluatePreConfigRulesResponse
     */
    public function evaluatePreConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluatePreConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Generates a compliance evaluation report based on a compliance package in an account group.
     *
     * @remarks
     * > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetAggregateConfigRulesReport operation. For more information, see [GetAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262699.html).
     * This topic provides an example on how to generate a compliance evaluation report based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *
     * @param request - GenerateAggregateCompliancePackReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAggregateCompliancePackReportResponse
     *
     * @param GenerateAggregateCompliancePackReportRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GenerateAggregateCompliancePackReportResponse
     */
    public function generateAggregateCompliancePackReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliancePackId) {
            @$body['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->multiFiles) {
            @$body['MultiFiles'] = $request->multiFiles;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateAggregateCompliancePackReport',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateAggregateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a compliance evaluation report based on a compliance package in an account group.
     *
     * @remarks
     * > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetAggregateConfigRulesReport operation. For more information, see [GetAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262699.html).
     * This topic provides an example on how to generate a compliance evaluation report based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *
     * @param request - GenerateAggregateCompliancePackReportRequest
     *
     * @returns GenerateAggregateCompliancePackReportResponse
     *
     * @param GenerateAggregateCompliancePackReportRequest $request
     *
     * @return GenerateAggregateCompliancePackReportResponse
     */
    public function generateAggregateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * Generates a compliance evaluation report for the rules in a specified account group.
     *
     * @remarks
     * > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetAggregateConfigRulesReport operation. For more information, see [GetAggregateConfigRulesReport](https://help.aliyun.com/document_detail/262706.html).
     * The topic provides an example on how to generate a compliance evaluation report based on all rules in the `ca-f632626622af0079****` account group.
     *
     * @param request - GenerateAggregateConfigRulesReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAggregateConfigRulesReportResponse
     *
     * @param GenerateAggregateConfigRulesReportRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GenerateAggregateConfigRulesReportResponse
     */
    public function generateAggregateConfigRulesReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configRuleIds) {
            @$body['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateAggregateConfigRulesReport',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateAggregateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a compliance evaluation report for the rules in a specified account group.
     *
     * @remarks
     * > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetAggregateConfigRulesReport operation. For more information, see [GetAggregateConfigRulesReport](https://help.aliyun.com/document_detail/262706.html).
     * The topic provides an example on how to generate a compliance evaluation report based on all rules in the `ca-f632626622af0079****` account group.
     *
     * @param request - GenerateAggregateConfigRulesReportRequest
     *
     * @returns GenerateAggregateConfigRulesReportResponse
     *
     * @param GenerateAggregateConfigRulesReportRequest $request
     *
     * @return GenerateAggregateConfigRulesReportResponse
     */
    public function generateAggregateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * Generates a downloadable inventory for global resources in an account group.
     *
     * @remarks
     * This topic provides an example to show how to generate a downloadable inventory for global resources in the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *
     * @param request - GenerateAggregateResourceInventoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAggregateResourceInventoryResponse
     *
     * @param GenerateAggregateResourceInventoryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GenerateAggregateResourceInventoryResponse
     */
    public function generateAggregateResourceInventoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountIds) {
            @$query['AccountIds'] = $request->accountIds;
        }

        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->resourceDeleted) {
            @$query['ResourceDeleted'] = $request->resourceDeleted;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateAggregateResourceInventory',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateAggregateResourceInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a downloadable inventory for global resources in an account group.
     *
     * @remarks
     * This topic provides an example to show how to generate a downloadable inventory for global resources in the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *
     * @param request - GenerateAggregateResourceInventoryRequest
     *
     * @returns GenerateAggregateResourceInventoryResponse
     *
     * @param GenerateAggregateResourceInventoryRequest $request
     *
     * @return GenerateAggregateResourceInventoryResponse
     */
    public function generateAggregateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * Generates a compliance evaluation report based on a compliance package.
     *
     * @remarks
     * > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetCompliancePackReport operation. For more information, see [GetCompliancePackReport](https://help.aliyun.com/document_detail/263347.html).
     * This topic provides an example on how to generate a compliance evaluation report based on the `cp-a8a8626622af0082****` compliance package.
     *
     * @param request - GenerateCompliancePackReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateCompliancePackReportResponse
     *
     * @param GenerateCompliancePackReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GenerateCompliancePackReportResponse
     */
    public function generateCompliancePackReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliancePackId) {
            @$body['CompliancePackId'] = $request->compliancePackId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateCompliancePackReport',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a compliance evaluation report based on a compliance package.
     *
     * @remarks
     * > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetCompliancePackReport operation. For more information, see [GetCompliancePackReport](https://help.aliyun.com/document_detail/263347.html).
     * This topic provides an example on how to generate a compliance evaluation report based on the `cp-a8a8626622af0082****` compliance package.
     *
     * @param request - GenerateCompliancePackReportRequest
     *
     * @returns GenerateCompliancePackReportResponse
     *
     * @param GenerateCompliancePackReportRequest $request
     *
     * @return GenerateCompliancePackReportResponse
     */
    public function generateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * Generates a compliance evaluation report for a rule.
     *
     * @remarks
     * >  You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetConfigRulesReport operation. For more information, see [GetConfigRulesReport](https://help.aliyun.com/document_detail/263608.html).
     * This topic provides an example of how to generate a compliance evaluation report based on all existing rules.
     *
     * @param request - GenerateConfigRulesReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateConfigRulesReportResponse
     *
     * @param GenerateConfigRulesReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateConfigRulesReportResponse
     */
    public function generateConfigRulesReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configRuleIds) {
            @$body['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateConfigRulesReport',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a compliance evaluation report for a rule.
     *
     * @remarks
     * >  You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetConfigRulesReport operation. For more information, see [GetConfigRulesReport](https://help.aliyun.com/document_detail/263608.html).
     * This topic provides an example of how to generate a compliance evaluation report based on all existing rules.
     *
     * @param request - GenerateConfigRulesReportRequest
     *
     * @returns GenerateConfigRulesReportResponse
     *
     * @param GenerateConfigRulesReportRequest $request
     *
     * @return GenerateConfigRulesReportResponse
     */
    public function generateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * Generates a resource inventory for global resources.
     *
     * @remarks
     * This topic provides an example on how to generate a resource inventory for global resources of the current account.
     *
     * @param request - GenerateResourceInventoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateResourceInventoryResponse
     *
     * @param GenerateResourceInventoryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateResourceInventoryResponse
     */
    public function generateResourceInventoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->resourceDeleted) {
            @$query['ResourceDeleted'] = $request->resourceDeleted;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateResourceInventory',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateResourceInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a resource inventory for global resources.
     *
     * @remarks
     * This topic provides an example on how to generate a resource inventory for global resources of the current account.
     *
     * @param request - GenerateResourceInventoryRequest
     *
     * @returns GenerateResourceInventoryResponse
     *
     * @param GenerateResourceInventoryRequest $request
     *
     * @return GenerateResourceInventoryResponse
     */
    public function generateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * Obtains the last resource advanced search file that is generated within the current account. You can call this operation to obtain the URL of the resource advanced search file.
     *
     * @remarks
     * ### [](#)Prerequisites
     * You must call the [CreateAdvancedSearchFile](https://help.aliyun.com/document_detail/2511967.html) operation to create a resource advanced search file. Then, you can call this operation to obtain the URL of the resource advanced search file.
     *
     * @param request - GetAdvancedSearchFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAdvancedSearchFileResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAdvancedSearchFileResponse
     */
    public function getAdvancedSearchFileWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAdvancedSearchFile',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAdvancedSearchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the last resource advanced search file that is generated within the current account. You can call this operation to obtain the URL of the resource advanced search file.
     *
     * @remarks
     * ### [](#)Prerequisites
     * You must call the [CreateAdvancedSearchFile](https://help.aliyun.com/document_detail/2511967.html) operation to create a resource advanced search file. Then, you can call this operation to obtain the URL of the resource advanced search file.
     *
     * @returns GetAdvancedSearchFileResponse
     *
     * @return GetAdvancedSearchFileResponse
     */
    public function getAdvancedSearchFile()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdvancedSearchFileWithOptions($runtime);
    }

    /**
     * Queries the compliance evaluation results of member accounts for which a compliance package takes effect in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results of member accounts for which the `cp-541e626622af0087****` compliance package takes effect in the `ca-04b3fd170e340007****` account group. The returned result shows that two member accounts are monitored by the compliance package and they are both evaluated as compliant.
     *
     * @param request - GetAggregateAccountComplianceByPackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateAccountComplianceByPackResponse
     *
     * @param GetAggregateAccountComplianceByPackRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetAggregateAccountComplianceByPackResponse
     */
    public function getAggregateAccountComplianceByPackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateAccountComplianceByPack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateAccountComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation results of member accounts for which a compliance package takes effect in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results of member accounts for which the `cp-541e626622af0087****` compliance package takes effect in the `ca-04b3fd170e340007****` account group. The returned result shows that two member accounts are monitored by the compliance package and they are both evaluated as compliant.
     *
     * @param request - GetAggregateAccountComplianceByPackRequest
     *
     * @returns GetAggregateAccountComplianceByPackResponse
     *
     * @param GetAggregateAccountComplianceByPackRequest $request
     *
     * @return GetAggregateAccountComplianceByPackResponse
     */
    public function getAggregateAccountComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateAccountComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * Queries the most recently generated resource file of an account group.
     *
     * @param request - GetAggregateAdvancedSearchFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateAdvancedSearchFileResponse
     *
     * @param GetAggregateAdvancedSearchFileRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAggregateAdvancedSearchFileResponse
     */
    public function getAggregateAdvancedSearchFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateAdvancedSearchFile',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateAdvancedSearchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the most recently generated resource file of an account group.
     *
     * @param request - GetAggregateAdvancedSearchFileRequest
     *
     * @returns GetAggregateAdvancedSearchFileResponse
     *
     * @param GetAggregateAdvancedSearchFileRequest $request
     *
     * @return GetAggregateAdvancedSearchFileResponse
     */
    public function getAggregateAdvancedSearchFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateAdvancedSearchFileWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a compliance package in an account group.
     *
     * @remarks
     * The topic provides an example on how to query the details of a compliance package whose ID is `cp-fdc8626622af00f9****` in an account group whose ID is `ca-f632626622af0079****`.
     *
     * @param tmpReq - GetAggregateCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateCompliancePackResponse
     *
     * @param GetAggregateCompliancePackRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAggregateCompliancePackResponse
     */
    public function getAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAggregateCompliancePackShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a compliance package in an account group.
     *
     * @remarks
     * The topic provides an example on how to query the details of a compliance package whose ID is `cp-fdc8626622af00f9****` in an account group whose ID is `ca-f632626622af0079****`.
     *
     * @param request - GetAggregateCompliancePackRequest
     *
     * @returns GetAggregateCompliancePackResponse
     *
     * @param GetAggregateCompliancePackRequest $request
     *
     * @return GetAggregateCompliancePackResponse
     */
    public function getAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance evaluation report that is generated based on a compliance package of an account group.
     *
     * @remarks
     * > Before you call this operation, you must call the GenerateAggregateCompliancePackReport operation to generate the latest compliance evaluation report based on a compliance package. For more information, see [GenerateAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262687.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *
     * @param request - GetAggregateCompliancePackReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateCompliancePackReportResponse
     *
     * @param GetAggregateCompliancePackReportRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetAggregateCompliancePackReportResponse
     */
    public function getAggregateCompliancePackReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateCompliancePackReport',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation report that is generated based on a compliance package of an account group.
     *
     * @remarks
     * > Before you call this operation, you must call the GenerateAggregateCompliancePackReport operation to generate the latest compliance evaluation report based on a compliance package. For more information, see [GenerateAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262687.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *
     * @param request - GetAggregateCompliancePackReportRequest
     *
     * @returns GetAggregateCompliancePackReportResponse
     *
     * @param GetAggregateCompliancePackReportRequest $request
     *
     * @return GetAggregateCompliancePackReportResponse
     */
    public function getAggregateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance statistics of an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance statistics of resources and rules in the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *
     * @param request - GetAggregateComplianceSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateComplianceSummaryResponse
     *
     * @param GetAggregateComplianceSummaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAggregateComplianceSummaryResponse
     */
    public function getAggregateComplianceSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateComplianceSummary',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateComplianceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance statistics of an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance statistics of resources and rules in the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *
     * @param request - GetAggregateComplianceSummaryRequest
     *
     * @returns GetAggregateComplianceSummaryResponse
     *
     * @param GetAggregateComplianceSummaryRequest $request
     *
     * @return GetAggregateComplianceSummaryResponse
     */
    public function getAggregateComplianceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateComplianceSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a delivery channel in an account group.
     *
     * @param request - GetAggregateConfigDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateConfigDeliveryChannelResponse
     *
     * @param GetAggregateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetAggregateConfigDeliveryChannelResponse
     */
    public function getAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateConfigDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a delivery channel in an account group.
     *
     * @param request - GetAggregateConfigDeliveryChannelRequest
     *
     * @returns GetAggregateConfigDeliveryChannelResponse
     *
     * @param GetAggregateConfigDeliveryChannelRequest $request
     *
     * @return GetAggregateConfigDeliveryChannelResponse
     */
    public function getAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a rule in an account group.
     *
     * @remarks
     * This example shows how to query the details of the `cr-7f7d626622af0041****` rule in the `ca-7f00626622af0041****` account group.
     *
     * @param tmpReq - GetAggregateConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateConfigRuleResponse
     *
     * @param GetAggregateConfigRuleRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GetAggregateConfigRuleResponse
     */
    public function getAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAggregateConfigRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a rule in an account group.
     *
     * @remarks
     * This example shows how to query the details of the `cr-7f7d626622af0041****` rule in the `ca-7f00626622af0041****` account group.
     *
     * @param request - GetAggregateConfigRuleRequest
     *
     * @returns GetAggregateConfigRuleResponse
     *
     * @param GetAggregateConfigRuleRequest $request
     *
     * @return GetAggregateConfigRuleResponse
     */
    public function getAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * Queries compliance evaluation results based on the rules in a compliance package in an account group.
     *
     * @remarks
     * The sample request in this topic shows you how to query the compliance evaluation results based on rules in the `cp-541e626622af0087****` compliance package that is created for the `ca-04b3fd170e340007****` account group. The return result shows a total of `one` rule. `No resources` are evaluated as non-compliant based on the rule.
     *
     * @param request - GetAggregateConfigRuleComplianceByPackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateConfigRuleComplianceByPackResponse
     *
     * @param GetAggregateConfigRuleComplianceByPackRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetAggregateConfigRuleComplianceByPackResponse
     */
    public function getAggregateConfigRuleComplianceByPackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateConfigRuleComplianceByPack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateConfigRuleComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries compliance evaluation results based on the rules in a compliance package in an account group.
     *
     * @remarks
     * The sample request in this topic shows you how to query the compliance evaluation results based on rules in the `cp-541e626622af0087****` compliance package that is created for the `ca-04b3fd170e340007****` account group. The return result shows a total of `one` rule. `No resources` are evaluated as non-compliant based on the rule.
     *
     * @param request - GetAggregateConfigRuleComplianceByPackRequest
     *
     * @returns GetAggregateConfigRuleComplianceByPackResponse
     *
     * @param GetAggregateConfigRuleComplianceByPackRequest $request
     *
     * @return GetAggregateConfigRuleComplianceByPackResponse
     */
    public function getAggregateConfigRuleComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * Queries the summary of compliance evaluation results by rule risk level in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the summary of compliance evaluation results by rule risk level in the `ca-3a58626622af0005****` account group. The returned result shows four rules that are specified with the high risk level. One of the rules detects non-compliant resources, and the resources evaluated by the remaining three are compliant.
     *
     * @param request - GetAggregateConfigRuleSummaryByRiskLevelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateConfigRuleSummaryByRiskLevelResponse
     *
     * @param GetAggregateConfigRuleSummaryByRiskLevelRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelResponse
     */
    public function getAggregateConfigRuleSummaryByRiskLevelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateConfigRuleSummaryByRiskLevel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateConfigRuleSummaryByRiskLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the summary of compliance evaluation results by rule risk level in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the summary of compliance evaluation results by rule risk level in the `ca-3a58626622af0005****` account group. The returned result shows four rules that are specified with the high risk level. One of the rules detects non-compliant resources, and the resources evaluated by the remaining three are compliant.
     *
     * @param request - GetAggregateConfigRuleSummaryByRiskLevelRequest
     *
     * @returns GetAggregateConfigRuleSummaryByRiskLevelResponse
     *
     * @param GetAggregateConfigRuleSummaryByRiskLevelRequest $request
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelResponse
     */
    public function getAggregateConfigRuleSummaryByRiskLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleSummaryByRiskLevelWithOptions($request, $runtime);
    }

    /**
     * Downloads the compliance evaluation report in the Excel format to your on-premises machine. This allows you to assign tasks and modify incompliant resource configurations.
     *
     * @remarks
     * > Before you call this operation, you must call the GenerateAggregateConfigRulesReport operation to generate the latest compliance evaluation report based on all rules in an account group. For more information, see [GenerateAggregateConfigRulesReport](https://help.aliyun.com/document_detail/262701.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on all rules in the `ca-f632626622af0079****` account group.
     *
     * @param request - GetAggregateConfigRulesReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateConfigRulesReportResponse
     *
     * @param GetAggregateConfigRulesReportRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAggregateConfigRulesReportResponse
     */
    public function getAggregateConfigRulesReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateConfigRulesReport',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Downloads the compliance evaluation report in the Excel format to your on-premises machine. This allows you to assign tasks and modify incompliant resource configurations.
     *
     * @remarks
     * > Before you call this operation, you must call the GenerateAggregateConfigRulesReport operation to generate the latest compliance evaluation report based on all rules in an account group. For more information, see [GenerateAggregateConfigRulesReport](https://help.aliyun.com/document_detail/262701.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on all rules in the `ca-f632626622af0079****` account group.
     *
     * @param request - GetAggregateConfigRulesReportRequest
     *
     * @returns GetAggregateConfigRulesReportResponse
     *
     * @param GetAggregateConfigRulesReportRequest $request
     *
     * @return GetAggregateConfigRulesReportResponse
     */
    public function getAggregateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specific resource in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the details of an Elastic Compute Service (ECS) instance `i-bp12g4xbl4i0brkn****` that resides in the China (Hangzhou) region in the account group `ca-5885626622af0008****`.
     *
     * @param request - GetAggregateDiscoveredResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateDiscoveredResourceResponse
     *
     * @param GetAggregateDiscoveredResourceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAggregateDiscoveredResourceResponse
     */
    public function getAggregateDiscoveredResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->complianceOption) {
            @$query['ComplianceOption'] = $request->complianceOption;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateDiscoveredResource',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific resource in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the details of an Elastic Compute Service (ECS) instance `i-bp12g4xbl4i0brkn****` that resides in the China (Hangzhou) region in the account group `ca-5885626622af0008****`.
     *
     * @param request - GetAggregateDiscoveredResourceRequest
     *
     * @returns GetAggregateDiscoveredResourceResponse
     *
     * @param GetAggregateDiscoveredResourceRequest $request
     *
     * @return GetAggregateDiscoveredResourceResponse
     */
    public function getAggregateDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * Queries compliance evaluation results based on the rules in a compliance package in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results based on the `cr-d369626622af008e****` rule in the `ca-a4e5626622af0079****` account group. The returned result shows that a total of 10 resources are evaluated by the rule and five of them are evaluated as compliant.
     *
     * @param request - GetAggregateResourceComplianceByConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceComplianceByConfigRuleResponse
     *
     * @param GetAggregateResourceComplianceByConfigRuleRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return GetAggregateResourceComplianceByConfigRuleResponse
     */
    public function getAggregateResourceComplianceByConfigRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->complianceType) {
            @$query['ComplianceType'] = $request->complianceType;
        }

        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceComplianceByConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceComplianceByConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries compliance evaluation results based on the rules in a compliance package in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results based on the `cr-d369626622af008e****` rule in the `ca-a4e5626622af0079****` account group. The returned result shows that a total of 10 resources are evaluated by the rule and five of them are evaluated as compliant.
     *
     * @param request - GetAggregateResourceComplianceByConfigRuleRequest
     *
     * @returns GetAggregateResourceComplianceByConfigRuleResponse
     *
     * @param GetAggregateResourceComplianceByConfigRuleRequest $request
     *
     * @return GetAggregateResourceComplianceByConfigRuleResponse
     */
    public function getAggregateResourceComplianceByConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceByConfigRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance evaluation results of resources evaluated based on a compliance package of an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results of resources monitored based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****`account group. The returned result shows that the total number of monitored resources is `10` and the number of non-compliant resources is `7`.
     *
     * @param request - GetAggregateResourceComplianceByPackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceComplianceByPackResponse
     *
     * @param GetAggregateResourceComplianceByPackRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetAggregateResourceComplianceByPackResponse
     */
    public function getAggregateResourceComplianceByPackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceComplianceByPack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation results of resources evaluated based on a compliance package of an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results of resources monitored based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****`account group. The returned result shows that the total number of monitored resources is `10` and the number of non-compliant resources is `7`.
     *
     * @param request - GetAggregateResourceComplianceByPackRequest
     *
     * @returns GetAggregateResourceComplianceByPackResponse
     *
     * @param GetAggregateResourceComplianceByPackRequest $request
     *
     * @return GetAggregateResourceComplianceByPackResponse
     */
    public function getAggregateResourceComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * Queries the evaluation results grouped by resource type for an account group rule.
     *
     * @param request - GetAggregateResourceComplianceGroupByRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceComplianceGroupByRegionResponse
     *
     * @param GetAggregateResourceComplianceGroupByRegionRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return GetAggregateResourceComplianceGroupByRegionResponse
     */
    public function getAggregateResourceComplianceGroupByRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceComplianceGroupByRegion',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceComplianceGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the evaluation results grouped by resource type for an account group rule.
     *
     * @param request - GetAggregateResourceComplianceGroupByRegionRequest
     *
     * @returns GetAggregateResourceComplianceGroupByRegionResponse
     *
     * @param GetAggregateResourceComplianceGroupByRegionRequest $request
     *
     * @return GetAggregateResourceComplianceGroupByRegionResponse
     */
    public function getAggregateResourceComplianceGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * Queries the evaluation results grouped by resource type for an account group rule.
     *
     * @param request - GetAggregateResourceComplianceGroupByResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceComplianceGroupByResourceTypeResponse
     *
     * @param GetAggregateResourceComplianceGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                           $runtime
     *
     * @return GetAggregateResourceComplianceGroupByResourceTypeResponse
     */
    public function getAggregateResourceComplianceGroupByResourceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceComplianceGroupByResourceType',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceComplianceGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the evaluation results grouped by resource type for an account group rule.
     *
     * @param request - GetAggregateResourceComplianceGroupByResourceTypeRequest
     *
     * @returns GetAggregateResourceComplianceGroupByResourceTypeResponse
     *
     * @param GetAggregateResourceComplianceGroupByResourceTypeRequest $request
     *
     * @return GetAggregateResourceComplianceGroupByResourceTypeResponse
     */
    public function getAggregateResourceComplianceGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance timeline of a resource in an account group.
     *
     * @remarks
     * The sample request in this topic shows you how to query the compliance timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region within the `100931896542****` member account of the `ca-5885626622af0008****` account group. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows the following two timestamps on the compliance timeline: `1625200295276` and `1625200228510`. The first timestamp indicates 12:31:35 on July 2, 2021 (UTC+8), and the second timestamp indicates 12:30:28 on July 2, 2021 (UTC+8).
     *
     * @param request - GetAggregateResourceComplianceTimelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceComplianceTimelineResponse
     *
     * @param GetAggregateResourceComplianceTimelineRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetAggregateResourceComplianceTimelineResponse
     */
    public function getAggregateResourceComplianceTimelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceComplianceTimeline',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceComplianceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance timeline of a resource in an account group.
     *
     * @remarks
     * The sample request in this topic shows you how to query the compliance timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region within the `100931896542****` member account of the `ca-5885626622af0008****` account group. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows the following two timestamps on the compliance timeline: `1625200295276` and `1625200228510`. The first timestamp indicates 12:31:35 on July 2, 2021 (UTC+8), and the second timestamp indicates 12:30:28 on July 2, 2021 (UTC+8).
     *
     * @param request - GetAggregateResourceComplianceTimelineRequest
     *
     * @returns GetAggregateResourceComplianceTimelineResponse
     *
     * @param GetAggregateResourceComplianceTimelineRequest $request
     *
     * @return GetAggregateResourceComplianceTimelineResponse
     */
    public function getAggregateResourceComplianceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceTimelineWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration timeline of a resource in an account group.
     *
     * @remarks
     * The sample request in this topic shows you how to query the configuration timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region within the `100931896542****` member account of the `ca-5885626622af0008****` account group. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows that the timestamp when the resource configuration changes is `1624961112000`. The timestamp indicates 18:05:12 on June 29, 2021 (UTC+8).
     *
     * @param request - GetAggregateResourceConfigurationTimelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceConfigurationTimelineResponse
     *
     * @param GetAggregateResourceConfigurationTimelineRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return GetAggregateResourceConfigurationTimelineResponse
     */
    public function getAggregateResourceConfigurationTimelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceConfigurationTimeline',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceConfigurationTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration timeline of a resource in an account group.
     *
     * @remarks
     * The sample request in this topic shows you how to query the configuration timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region within the `100931896542****` member account of the `ca-5885626622af0008****` account group. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows that the timestamp when the resource configuration changes is `1624961112000`. The timestamp indicates 18:05:12 on June 29, 2021 (UTC+8).
     *
     * @param request - GetAggregateResourceConfigurationTimelineRequest
     *
     * @returns GetAggregateResourceConfigurationTimelineResponse
     *
     * @param GetAggregateResourceConfigurationTimelineRequest $request
     *
     * @return GetAggregateResourceConfigurationTimelineResponse
     */
    public function getAggregateResourceConfigurationTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceConfigurationTimelineWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on the resources in an account group by region.
     *
     * @remarks
     * This topic provides an example on how to query the statistics on the resources in an account group named `ca-a260626622af0005****` by region. The returned result shows that a total of `10` resources exist in the `cn-hangzhou` region.
     *
     * @param request - GetAggregateResourceCountsGroupByRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceCountsGroupByRegionResponse
     *
     * @param GetAggregateResourceCountsGroupByRegionRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return GetAggregateResourceCountsGroupByRegionResponse
     */
    public function getAggregateResourceCountsGroupByRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->folderId) {
            @$query['FolderId'] = $request->folderId;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceCountsGroupByRegion',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceCountsGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on the resources in an account group by region.
     *
     * @remarks
     * This topic provides an example on how to query the statistics on the resources in an account group named `ca-a260626622af0005****` by region. The returned result shows that a total of `10` resources exist in the `cn-hangzhou` region.
     *
     * @param request - GetAggregateResourceCountsGroupByRegionRequest
     *
     * @returns GetAggregateResourceCountsGroupByRegionResponse
     *
     * @param GetAggregateResourceCountsGroupByRegionRequest $request
     *
     * @return GetAggregateResourceCountsGroupByRegionResponse
     */
    public function getAggregateResourceCountsGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceCountsGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on the resources in an account group by resource type.
     *
     * @remarks
     * This topic provides an example on how to query the statistics on the resources in an account group whose ID is `ca-a260626622af0005****` by resource type. The returned result shows that the account group has a total of `seven` resources of the `ACS::RAM::Role` resource type.
     *
     * @param request - GetAggregateResourceCountsGroupByResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceCountsGroupByResourceTypeResponse
     *
     * @param GetAggregateResourceCountsGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponse
     */
    public function getAggregateResourceCountsGroupByResourceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->folderId) {
            @$query['FolderId'] = $request->folderId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceCountsGroupByResourceType',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceCountsGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on the resources in an account group by resource type.
     *
     * @remarks
     * This topic provides an example on how to query the statistics on the resources in an account group whose ID is `ca-a260626622af0005****` by resource type. The returned result shows that the account group has a total of `seven` resources of the `ACS::RAM::Role` resource type.
     *
     * @param request - GetAggregateResourceCountsGroupByResourceTypeRequest
     *
     * @returns GetAggregateResourceCountsGroupByResourceTypeResponse
     *
     * @param GetAggregateResourceCountsGroupByResourceTypeRequest $request
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponse
     */
    public function getAggregateResourceCountsGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceCountsGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * Obtains the last resource inventory that is generated on the Global Resources page within the current account group.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The [GenerateAggregateResourceInventory](https://help.aliyun.com/document_detail/2398353.html) operation is called to generate a resource inventory. Then, this operation is called to obtain the URL of the resource inventory.
     * ### [](#)Description
     * This topic provides an example on how to obtain the last resource inventory that is generated within the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *
     * @param request - GetAggregateResourceInventoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregateResourceInventoryResponse
     *
     * @param GetAggregateResourceInventoryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAggregateResourceInventoryResponse
     */
    public function getAggregateResourceInventoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregateResourceInventory',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregateResourceInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the last resource inventory that is generated on the Global Resources page within the current account group.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The [GenerateAggregateResourceInventory](https://help.aliyun.com/document_detail/2398353.html) operation is called to generate a resource inventory. Then, this operation is called to obtain the URL of the resource inventory.
     * ### [](#)Description
     * This topic provides an example on how to obtain the last resource inventory that is generated within the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *
     * @param request - GetAggregateResourceInventoryRequest
     *
     * @returns GetAggregateResourceInventoryResponse
     *
     * @param GetAggregateResourceInventoryRequest $request
     *
     * @return GetAggregateResourceInventoryResponse
     */
    public function getAggregateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an account group. You can query the name, creation time, member, and type of an account group.
     *
     * @remarks
     * The sample request in this topic shows you how to query the details of the `ca-88ea626622af0055****` account group. The return result shows that the account group is named `Test_Group`, its description is `Test account group`, and it is of the `CUSTOM` type. The account group is in the `1` state, which indicates that it is created.
     *
     * @param tmpReq - GetAggregatorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggregatorResponse
     *
     * @param GetAggregatorRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetAggregatorResponse
     */
    public function getAggregatorWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAggregatorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAggregator',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an account group. You can query the name, creation time, member, and type of an account group.
     *
     * @remarks
     * The sample request in this topic shows you how to query the details of the `ca-88ea626622af0055****` account group. The return result shows that the account group is named `Test_Group`, its description is `Test account group`, and it is of the `CUSTOM` type. The account group is in the `1` state, which indicates that it is created.
     *
     * @param request - GetAggregatorRequest
     *
     * @returns GetAggregatorResponse
     *
     * @param GetAggregatorRequest $request
     *
     * @return GetAggregatorResponse
     */
    public function getAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregatorWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a compliance package.
     *
     * @remarks
     * This topic provides an example on how to query the details of a compliance package whose ID is `cp-fdc8626622af00f9****`. The returned result shows that the name of the compliance package is `ClassifiedProtectionPreCheck`, the compliance package is in the `ACTIVE` state, and the risk level of the rules in the compliance package is `1`, which indicates high risk level.
     *
     * @param tmpReq - GetCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCompliancePackResponse
     *
     * @param GetCompliancePackRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GetCompliancePackResponse
     */
    public function getCompliancePackWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetCompliancePackShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a compliance package.
     *
     * @remarks
     * This topic provides an example on how to query the details of a compliance package whose ID is `cp-fdc8626622af00f9****`. The returned result shows that the name of the compliance package is `ClassifiedProtectionPreCheck`, the compliance package is in the `ACTIVE` state, and the risk level of the rules in the compliance package is `1`, which indicates high risk level.
     *
     * @param request - GetCompliancePackRequest
     *
     * @returns GetCompliancePackResponse
     *
     * @param GetCompliancePackRequest $request
     *
     * @return GetCompliancePackResponse
     */
    public function getCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance evaluation report that is generated based on a compliance package.
     *
     * @remarks
     * > Before you call this operation, you must call the GenerateCompliancePackReport operation to generate the latest compliance evaluation report based on a compliance package. For more information, see [GenerateCompliancePackReport](https://help.aliyun.com/document_detail/263525.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on the `cp-fdc8626622af00f9****` compliance package.
     *
     * @param request - GetCompliancePackReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCompliancePackReportResponse
     *
     * @param GetCompliancePackReportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetCompliancePackReportResponse
     */
    public function getCompliancePackReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCompliancePackReport',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation report that is generated based on a compliance package.
     *
     * @remarks
     * > Before you call this operation, you must call the GenerateCompliancePackReport operation to generate the latest compliance evaluation report based on a compliance package. For more information, see [GenerateCompliancePackReport](https://help.aliyun.com/document_detail/263525.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on the `cp-fdc8626622af00f9****` compliance package.
     *
     * @param request - GetCompliancePackReportRequest
     *
     * @returns GetCompliancePackReportResponse
     *
     * @param GetCompliancePackReportRequest $request
     *
     * @return GetCompliancePackReportResponse
     */
    public function getCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * Queries the summary of compliance statistics within the current account.
     *
     * @remarks
     * This topic provides an example on how to query the compliance statistics of resources and rules in the current account group.
     *
     * @param request - GetComplianceSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetComplianceSummaryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetComplianceSummaryResponse
     */
    public function getComplianceSummaryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetComplianceSummary',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetComplianceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the summary of compliance statistics within the current account.
     *
     * @remarks
     * This topic provides an example on how to query the compliance statistics of resources and rules in the current account group.
     *
     * @returns GetComplianceSummaryResponse
     *
     * @return GetComplianceSummaryResponse
     */
    public function getComplianceSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getComplianceSummaryWithOptions($runtime);
    }

    /**
     * Queries the information about a delivery channel.
     *
     * @param request - GetConfigDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigDeliveryChannelResponse
     *
     * @param GetConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetConfigDeliveryChannelResponse
     */
    public function getConfigDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConfigDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a delivery channel.
     *
     * @param request - GetConfigDeliveryChannelRequest
     *
     * @returns GetConfigDeliveryChannelResponse
     *
     * @param GetConfigDeliveryChannelRequest $request
     *
     * @return GetConfigDeliveryChannelResponse
     */
    public function getConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a rule.
     *
     * @remarks
     * This topic provides an example on how to query the details of the `cr-7f7d626622af0041****` rule.
     *
     * @param tmpReq - GetConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigRuleResponse
     *
     * @param GetConfigRuleRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetConfigRuleResponse
     */
    public function getConfigRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetConfigRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a rule.
     *
     * @remarks
     * This topic provides an example on how to query the details of the `cr-7f7d626622af0041****` rule.
     *
     * @param request - GetConfigRuleRequest
     *
     * @returns GetConfigRuleResponse
     *
     * @param GetConfigRuleRequest $request
     *
     * @return GetConfigRuleResponse
     */
    public function getConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleWithOptions($request, $runtime);
    }

    /**
     * Queries compliance evaluation results based on the rules in a compliance package.
     *
     * @remarks
     * In this topic, the `cp-541e626622af0087****` compliance package is used as an example. The return result shows a total of one rule against which specific resources are evaluated as compliant.
     *
     * @param request - GetConfigRuleComplianceByPackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigRuleComplianceByPackResponse
     *
     * @param GetConfigRuleComplianceByPackRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetConfigRuleComplianceByPackResponse
     */
    public function getConfigRuleComplianceByPackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConfigRuleComplianceByPack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigRuleComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries compliance evaluation results based on the rules in a compliance package.
     *
     * @remarks
     * In this topic, the `cp-541e626622af0087****` compliance package is used as an example. The return result shows a total of one rule against which specific resources are evaluated as compliant.
     *
     * @param request - GetConfigRuleComplianceByPackRequest
     *
     * @returns GetConfigRuleComplianceByPackResponse
     *
     * @param GetConfigRuleComplianceByPackRequest $request
     *
     * @return GetConfigRuleComplianceByPackResponse
     */
    public function getConfigRuleComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance summary based on the risk level of a rule.
     *
     * @remarks
     * This topic provides an example of how to query the summary of compliance evaluation results by rule risk level. The return result shows four rules that are specified with the high risk level. One of them detects non-compliant resources, and the resources evaluated by the remaining three are all compliant.
     *
     * @param request - GetConfigRuleSummaryByRiskLevelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigRuleSummaryByRiskLevelResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetConfigRuleSummaryByRiskLevelResponse
     */
    public function getConfigRuleSummaryByRiskLevelWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetConfigRuleSummaryByRiskLevel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigRuleSummaryByRiskLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance summary based on the risk level of a rule.
     *
     * @remarks
     * This topic provides an example of how to query the summary of compliance evaluation results by rule risk level. The return result shows four rules that are specified with the high risk level. One of them detects non-compliant resources, and the resources evaluated by the remaining three are all compliant.
     *
     * @returns GetConfigRuleSummaryByRiskLevelResponse
     *
     * @return GetConfigRuleSummaryByRiskLevelResponse
     */
    public function getConfigRuleSummaryByRiskLevel()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleSummaryByRiskLevelWithOptions($runtime);
    }

    /**
     * Downloads the compliance evaluation report in the Excel format to your on-premises machine. This allows you to assign tasks and modify incompliant resource configurations.
     *
     * @remarks
     * >  Before you call this operation, you must call the GenerateConfigRulesReport operation to generate the latest compliance evaluation report based on all existing rules. For more information, see [GenerateConfigRulesReport](https://help.aliyun.com/document_detail/263601.html).
     * This topic provides an example of how to query the compliance evaluation report that is generated based on all existing rules.
     *
     * @param request - GetConfigRulesReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigRulesReportResponse
     *
     * @param GetConfigRulesReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetConfigRulesReportResponse
     */
    public function getConfigRulesReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConfigRulesReport',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Downloads the compliance evaluation report in the Excel format to your on-premises machine. This allows you to assign tasks and modify incompliant resource configurations.
     *
     * @remarks
     * >  Before you call this operation, you must call the GenerateConfigRulesReport operation to generate the latest compliance evaluation report based on all existing rules. For more information, see [GenerateConfigRulesReport](https://help.aliyun.com/document_detail/263601.html).
     * This topic provides an example of how to query the compliance evaluation report that is generated based on all existing rules.
     *
     * @param request - GetConfigRulesReportRequest
     *
     * @returns GetConfigRulesReportResponse
     *
     * @param GetConfigRulesReportRequest $request
     *
     * @return GetConfigRulesReportResponse
     */
    public function getConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * Queries the activation status and resource monitoring scope of Cloud Config for the current account.
     *
     * @remarks
     * This topic provides an example on how to query the activation status and resource monitoring scope of Cloud Config for the current account.
     *
     * @param request - GetConfigurationRecorderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigurationRecorderResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetConfigurationRecorderResponse
     */
    public function getConfigurationRecorderWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetConfigurationRecorder',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the activation status and resource monitoring scope of Cloud Config for the current account.
     *
     * @remarks
     * This topic provides an example on how to query the activation status and resource monitoring scope of Cloud Config for the current account.
     *
     * @returns GetConfigurationRecorderResponse
     *
     * @return GetConfigurationRecorderResponse
     */
    public function getConfigurationRecorder()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigurationRecorderWithOptions($runtime);
    }

    /**
     * Queries the details of a specific resource.
     *
     * @remarks
     * This topic provides an example on how to query the details of the Elastic Compute Service (ECS) instance `i-bp12g4xbl4i0brkn****` that resides in the China (Hangzhou) region.
     *
     * @param request - GetDiscoveredResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDiscoveredResourceResponse
     *
     * @param GetDiscoveredResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDiscoveredResourceResponse
     */
    public function getDiscoveredResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->complianceOption) {
            @$query['ComplianceOption'] = $request->complianceOption;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDiscoveredResource',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific resource.
     *
     * @remarks
     * This topic provides an example on how to query the details of the Elastic Compute Service (ECS) instance `i-bp12g4xbl4i0brkn****` that resides in the China (Hangzhou) region.
     *
     * @param request - GetDiscoveredResourceRequest
     *
     * @returns GetDiscoveredResourceResponse
     *
     * @param GetDiscoveredResourceRequest $request
     *
     * @return GetDiscoveredResourceResponse
     */
    public function getDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on resources by region.
     *
     * @remarks
     * This topic provides an example to demonstrate how to query the statistics on resources by region. The returned result shows that a total of 10 resources exist in the `cn-hangzhou` region.
     *
     * @param request - GetDiscoveredResourceCountsGroupByRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDiscoveredResourceCountsGroupByRegionResponse
     *
     * @param GetDiscoveredResourceCountsGroupByRegionRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponse
     */
    public function getDiscoveredResourceCountsGroupByRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDiscoveredResourceCountsGroupByRegion',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDiscoveredResourceCountsGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on resources by region.
     *
     * @remarks
     * This topic provides an example to demonstrate how to query the statistics on resources by region. The returned result shows that a total of 10 resources exist in the `cn-hangzhou` region.
     *
     * @param request - GetDiscoveredResourceCountsGroupByRegionRequest
     *
     * @returns GetDiscoveredResourceCountsGroupByRegionResponse
     *
     * @param GetDiscoveredResourceCountsGroupByRegionRequest $request
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponse
     */
    public function getDiscoveredResourceCountsGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on resources by resource type.
     *
     * @remarks
     * This topic describes how to query the statistics on resources by resource type. The returned result shows that a total of 10 resources of the `ACS::ECS::Instance` resource type exist.
     *
     * @param request - GetDiscoveredResourceCountsGroupByResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDiscoveredResourceCountsGroupByResourceTypeResponse
     *
     * @param GetDiscoveredResourceCountsGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeResponse
     */
    public function getDiscoveredResourceCountsGroupByResourceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDiscoveredResourceCountsGroupByResourceType',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDiscoveredResourceCountsGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on resources by resource type.
     *
     * @remarks
     * This topic describes how to query the statistics on resources by resource type. The returned result shows that a total of 10 resources of the `ACS::ECS::Instance` resource type exist.
     *
     * @param request - GetDiscoveredResourceCountsGroupByResourceTypeRequest
     *
     * @returns GetDiscoveredResourceCountsGroupByResourceTypeResponse
     *
     * @param GetDiscoveredResourceCountsGroupByResourceTypeRequest $request
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeResponse
     */
    public function getDiscoveredResourceCountsGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the integration status of a specific cloud service.
     *
     * @param request - GetIntegratedServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIntegratedServiceStatusResponse
     *
     * @param GetIntegratedServiceStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetIntegratedServiceStatusResponse
     */
    public function getIntegratedServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetIntegratedServiceStatus',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIntegratedServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the integration status of a specific cloud service.
     *
     * @param request - GetIntegratedServiceStatusRequest
     *
     * @returns GetIntegratedServiceStatusResponse
     *
     * @param GetIntegratedServiceStatusRequest $request
     *
     * @return GetIntegratedServiceStatusResponse
     */
    public function getIntegratedServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntegratedServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specific managed rule.
     *
     * @remarks
     * This topic provides an example on how to query the details of the managed rule `cdn-domain-https-enabled`.
     *
     * @param request - GetManagedRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetManagedRuleResponse
     *
     * @param GetManagedRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetManagedRuleResponse
     */
    public function getManagedRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetManagedRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetManagedRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific managed rule.
     *
     * @remarks
     * This topic provides an example on how to query the details of the managed rule `cdn-domain-https-enabled`.
     *
     * @param request - GetManagedRuleRequest
     *
     * @returns GetManagedRuleResponse
     *
     * @param GetManagedRuleRequest $request
     *
     * @return GetManagedRuleResponse
     */
    public function getManagedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagedRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an automatic remediation template.
     *
     * @remarks
     * This topic provides an example on how to query the details of the automatic remediation template ACS-ALB-BulkyEnableDeletionProtection.
     *
     * @param request - GetRemediationTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRemediationTemplateResponse
     *
     * @param GetRemediationTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetRemediationTemplateResponse
     */
    public function getRemediationTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateIdentifier) {
            @$query['TemplateIdentifier'] = $request->templateIdentifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRemediationTemplate',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRemediationTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an automatic remediation template.
     *
     * @remarks
     * This topic provides an example on how to query the details of the automatic remediation template ACS-ALB-BulkyEnableDeletionProtection.
     *
     * @param request - GetRemediationTemplateRequest
     *
     * @returns GetRemediationTemplateResponse
     *
     * @param GetRemediationTemplateRequest $request
     *
     * @return GetRemediationTemplateResponse
     */
    public function getRemediationTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRemediationTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance summary based on the compliance evaluation result of a rule.
     *
     * @remarks
     * In this topic, the `cr-d369626622af008e****` rule is used as an example. The return result shows that a total of 10 resources are evaluated by the rule and `five` of them are evaluated as compliant.
     *
     * @param request - GetResourceComplianceByConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceComplianceByConfigRuleResponse
     *
     * @param GetResourceComplianceByConfigRuleRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetResourceComplianceByConfigRuleResponse
     */
    public function getResourceComplianceByConfigRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceComplianceByConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceComplianceByConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance summary based on the compliance evaluation result of a rule.
     *
     * @remarks
     * In this topic, the `cr-d369626622af008e****` rule is used as an example. The return result shows that a total of 10 resources are evaluated by the rule and `five` of them are evaluated as compliant.
     *
     * @param request - GetResourceComplianceByConfigRuleRequest
     *
     * @returns GetResourceComplianceByConfigRuleResponse
     *
     * @param GetResourceComplianceByConfigRuleRequest $request
     *
     * @return GetResourceComplianceByConfigRuleResponse
     */
    public function getResourceComplianceByConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceByConfigRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance evaluation results of resources evaluated based on a compliance package.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results of resources monitored by using the `cp-541e626622af0087****` compliance package. The returned result shows a total of 10 resources and seven of them are evaluated as non-compliant.
     *
     * @param request - GetResourceComplianceByPackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceComplianceByPackResponse
     *
     * @param GetResourceComplianceByPackRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetResourceComplianceByPackResponse
     */
    public function getResourceComplianceByPackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceComplianceByPack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation results of resources evaluated based on a compliance package.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results of resources monitored by using the `cp-541e626622af0087****` compliance package. The returned result shows a total of 10 resources and seven of them are evaluated as non-compliant.
     *
     * @param request - GetResourceComplianceByPackRequest
     *
     * @returns GetResourceComplianceByPackResponse
     *
     * @param GetResourceComplianceByPackRequest $request
     *
     * @return GetResourceComplianceByPackResponse
     */
    public function getResourceComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * Queries the evaluation results grouped by region for a rule.
     *
     * @param request - GetResourceComplianceGroupByRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceComplianceGroupByRegionResponse
     *
     * @param GetResourceComplianceGroupByRegionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetResourceComplianceGroupByRegionResponse
     */
    public function getResourceComplianceGroupByRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceComplianceGroupByRegion',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceComplianceGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the evaluation results grouped by region for a rule.
     *
     * @param request - GetResourceComplianceGroupByRegionRequest
     *
     * @returns GetResourceComplianceGroupByRegionResponse
     *
     * @param GetResourceComplianceGroupByRegionRequest $request
     *
     * @return GetResourceComplianceGroupByRegionResponse
     */
    public function getResourceComplianceGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * Queries the evaluation results grouped by resource type for a rule.
     *
     * @param request - GetResourceComplianceGroupByResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceComplianceGroupByResourceTypeResponse
     *
     * @param GetResourceComplianceGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetResourceComplianceGroupByResourceTypeResponse
     */
    public function getResourceComplianceGroupByResourceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceComplianceGroupByResourceType',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceComplianceGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the evaluation results grouped by resource type for a rule.
     *
     * @param request - GetResourceComplianceGroupByResourceTypeRequest
     *
     * @returns GetResourceComplianceGroupByResourceTypeResponse
     *
     * @param GetResourceComplianceGroupByResourceTypeRequest $request
     *
     * @return GetResourceComplianceGroupByResourceTypeResponse
     */
    public function getResourceComplianceGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance timeline of a resource. The compliance timeline of a resource indicates the compliance evaluation record of the resource. A compliance timeline includes points and the content on the compliance timeline.
     *
     * @remarks
     * In Cloud Config, each resource has a compliance timeline. Cloud Config generates a compliance evaluation record for a resource each time the resource is evaluated based on a rule. The compliance evaluation records of a resource are displayed in a compliance timeline. You can configure Cloud Config to execute a rule to evaluate a resource on a regular basis or each time you change the resource configuration. You can also manually execute a rule to evaluate a resource.
     * This topic provides an example on how to query the compliance timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region. The resource is an Object Storage Service (OSS) bucket. The returned result shows the following two timestamps on the compliance timeline: `1625200295276` and `1625200228510`. The first timestamp indicates 12:31:35 on July 2, 2021 (UTC+8) and the second timestamp indicates 12:30:28 on July 2, 2021 (UTC+8).
     *
     * @param request - GetResourceComplianceTimelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceComplianceTimelineResponse
     *
     * @param GetResourceComplianceTimelineRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceComplianceTimeline',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceComplianceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance timeline of a resource. The compliance timeline of a resource indicates the compliance evaluation record of the resource. A compliance timeline includes points and the content on the compliance timeline.
     *
     * @remarks
     * In Cloud Config, each resource has a compliance timeline. Cloud Config generates a compliance evaluation record for a resource each time the resource is evaluated based on a rule. The compliance evaluation records of a resource are displayed in a compliance timeline. You can configure Cloud Config to execute a rule to evaluate a resource on a regular basis or each time you change the resource configuration. You can also manually execute a rule to evaluate a resource.
     * This topic provides an example on how to query the compliance timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region. The resource is an Object Storage Service (OSS) bucket. The returned result shows the following two timestamps on the compliance timeline: `1625200295276` and `1625200228510`. The first timestamp indicates 12:31:35 on July 2, 2021 (UTC+8) and the second timestamp indicates 12:30:28 on July 2, 2021 (UTC+8).
     *
     * @param request - GetResourceComplianceTimelineRequest
     *
     * @returns GetResourceComplianceTimelineResponse
     *
     * @param GetResourceComplianceTimelineRequest $request
     *
     * @return GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceTimelineWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration timeline of a resource.
     *
     * @remarks
     * The sample request in this topic shows you how to query the configuration timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows that the timestamp when the resource configuration changes is `1624961112000`. The timestamp indicates 18:05:12 on June 29, 2021 (UTC+8).
     *
     * @param request - GetResourceConfigurationTimelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceConfigurationTimelineResponse
     *
     * @param GetResourceConfigurationTimelineRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetResourceConfigurationTimelineResponse
     */
    public function getResourceConfigurationTimelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceConfigurationTimeline',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceConfigurationTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration timeline of a resource.
     *
     * @remarks
     * The sample request in this topic shows you how to query the configuration timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows that the timestamp when the resource configuration changes is `1624961112000`. The timestamp indicates 18:05:12 on June 29, 2021 (UTC+8).
     *
     * @param request - GetResourceConfigurationTimelineRequest
     *
     * @returns GetResourceConfigurationTimelineResponse
     *
     * @param GetResourceConfigurationTimelineRequest $request
     *
     * @return GetResourceConfigurationTimelineResponse
     */
    public function getResourceConfigurationTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceConfigurationTimelineWithOptions($request, $runtime);
    }

    /**
     * Obtains the last resource inventory that is generated within the current Alibaba Cloud account.
     *
     * @remarks
     * ### [](#)Prerequisites
     * You can call the [GenerateResourceInventory](https://help.aliyun.com/document_detail/2398354.html) operation to generate a resource inventory. Then, you can call the GetResourceInventory operation to obtain the URL of the resource inventory.
     * ### [](#)Description
     * This topic provides an example on how to obtain the last resource inventory that is generated within the current Alibaba Cloud account.
     *
     * @param request - GetResourceInventoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceInventoryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceInventoryResponse
     */
    public function getResourceInventoryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetResourceInventory',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the last resource inventory that is generated within the current Alibaba Cloud account.
     *
     * @remarks
     * ### [](#)Prerequisites
     * You can call the [GenerateResourceInventory](https://help.aliyun.com/document_detail/2398354.html) operation to generate a resource inventory. Then, you can call the GetResourceInventory operation to obtain the URL of the resource inventory.
     * ### [](#)Description
     * This topic provides an example on how to obtain the last resource inventory that is generated within the current Alibaba Cloud account.
     *
     * @returns GetResourceInventoryResponse
     *
     * @return GetResourceInventoryResponse
     */
    public function getResourceInventory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceInventoryWithOptions($runtime);
    }

    /**
     * Queries the resource relationships supported by a resource type.
     *
     * @remarks
     * This topic provides an example to show how to query the resource relationships that are supported by the ACS::ECS::Instance resource type.
     *
     * @param request - GetSupportedResourceRelationConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSupportedResourceRelationConfigResponse
     *
     * @param GetSupportedResourceRelationConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetSupportedResourceRelationConfigResponse
     */
    public function getSupportedResourceRelationConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSupportedResourceRelationConfig',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSupportedResourceRelationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource relationships supported by a resource type.
     *
     * @remarks
     * This topic provides an example to show how to query the resource relationships that are supported by the ACS::ECS::Instance resource type.
     *
     * @param request - GetSupportedResourceRelationConfigRequest
     *
     * @returns GetSupportedResourceRelationConfigResponse
     *
     * @param GetSupportedResourceRelationConfigRequest $request
     *
     * @return GetSupportedResourceRelationConfigResponse
     */
    public function getSupportedResourceRelationConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupportedResourceRelationConfigWithOptions($request, $runtime);
    }

    /**
     * Ignores the evaluation results of some resources in an account group based on a specific rule. You can also specify a time period for ignoring the evaluation results. After the period elapses, the evaluation results of the resources based on the rule are automatically displayed.
     *
     * @remarks
     * After you ignore a resource that is evaluated as incompliant by using a rule, the resource is still evaluated by using the rule, but the compliance result is Ignored.
     * This example shows how to ignore the `lb-hp3a3b4ztyfm2plgm****` incompliant resource that is evaluated by using the `cr-7e72626622af0051***` rule in the `120886317861****` member account of the `ca-5b6c626622af008f****` account group. The ID of the region where the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *
     * @param tmpReq - IgnoreAggregateEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IgnoreAggregateEvaluationResultsResponse
     *
     * @param IgnoreAggregateEvaluationResultsRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return IgnoreAggregateEvaluationResultsResponse
     */
    public function ignoreAggregateEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new IgnoreAggregateEvaluationResultsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resources) {
            $request->resourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }

        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleId) {
            @$body['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->ignoreDate) {
            @$body['IgnoreDate'] = $request->ignoreDate;
        }

        if (null !== $request->reason) {
            @$body['Reason'] = $request->reason;
        }

        if (null !== $request->resourcesShrink) {
            @$body['Resources'] = $request->resourcesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IgnoreAggregateEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IgnoreAggregateEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Ignores the evaluation results of some resources in an account group based on a specific rule. You can also specify a time period for ignoring the evaluation results. After the period elapses, the evaluation results of the resources based on the rule are automatically displayed.
     *
     * @remarks
     * After you ignore a resource that is evaluated as incompliant by using a rule, the resource is still evaluated by using the rule, but the compliance result is Ignored.
     * This example shows how to ignore the `lb-hp3a3b4ztyfm2plgm****` incompliant resource that is evaluated by using the `cr-7e72626622af0051***` rule in the `120886317861****` member account of the `ca-5b6c626622af008f****` account group. The ID of the region where the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *
     * @param request - IgnoreAggregateEvaluationResultsRequest
     *
     * @returns IgnoreAggregateEvaluationResultsResponse
     *
     * @param IgnoreAggregateEvaluationResultsRequest $request
     *
     * @return IgnoreAggregateEvaluationResultsResponse
     */
    public function ignoreAggregateEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreAggregateEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Ignores the evaluation results of some resources based on a specific rule. You can also specify a time period for ignoring the evaluation results. After the period elapses, the evaluation results of the resources based on the rule are automatically displayed.
     *
     * @remarks
     * After you ignore a resource that is evaluated as incompliant by using a rule, the resource is still evaluated by using the rule, but the compliance result is Ignored.
     * This example shows how to ignore the `lb-hp3a3b4ztyfm2plgm****` resource that is evaluated as incompliant by using the `cr-7e72626622af0051****` rule in the `100931896542****` account. The ID of the region in which the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *
     * @param tmpReq - IgnoreEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IgnoreEvaluationResultsResponse
     *
     * @param IgnoreEvaluationResultsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return IgnoreEvaluationResultsResponse
     */
    public function ignoreEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new IgnoreEvaluationResultsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resources) {
            $request->resourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }

        $body = [];
        if (null !== $request->configRuleId) {
            @$body['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->ignoreDate) {
            @$body['IgnoreDate'] = $request->ignoreDate;
        }

        if (null !== $request->reason) {
            @$body['Reason'] = $request->reason;
        }

        if (null !== $request->resourcesShrink) {
            @$body['Resources'] = $request->resourcesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IgnoreEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IgnoreEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Ignores the evaluation results of some resources based on a specific rule. You can also specify a time period for ignoring the evaluation results. After the period elapses, the evaluation results of the resources based on the rule are automatically displayed.
     *
     * @remarks
     * After you ignore a resource that is evaluated as incompliant by using a rule, the resource is still evaluated by using the rule, but the compliance result is Ignored.
     * This example shows how to ignore the `lb-hp3a3b4ztyfm2plgm****` resource that is evaluated as incompliant by using the `cr-7e72626622af0051****` rule in the `100931896542****` account. The ID of the region in which the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *
     * @param request - IgnoreEvaluationResultsRequest
     *
     * @returns IgnoreEvaluationResultsResponse
     *
     * @param IgnoreEvaluationResultsRequest $request
     *
     * @return IgnoreEvaluationResultsResponse
     */
    public function ignoreEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of compliance packages in an account group.
     *
     * @remarks
     * In this topic, the `ca-f632626622af0079****` account group is used as an example. The return result shows one compliance package whose ID is `cp-fdc8626622af00f9****`.
     *
     * @param tmpReq - ListAggregateCompliancePacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateCompliancePacksResponse
     *
     * @param ListAggregateCompliancePacksRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAggregateCompliancePacksResponse
     */
    public function listAggregateCompliancePacksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAggregateCompliancePacksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateCompliancePacks',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of compliance packages in an account group.
     *
     * @remarks
     * In this topic, the `ca-f632626622af0079****` account group is used as an example. The return result shows one compliance package whose ID is `cp-fdc8626622af00f9****`.
     *
     * @param request - ListAggregateCompliancePacksRequest
     *
     * @returns ListAggregateCompliancePacksResponse
     *
     * @param ListAggregateCompliancePacksRequest $request
     *
     * @return ListAggregateCompliancePacksResponse
     */
    public function listAggregateCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all delivery channels in an account group.
     *
     * @param request - ListAggregateConfigDeliveryChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateConfigDeliveryChannelsResponse
     *
     * @param ListAggregateConfigDeliveryChannelsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListAggregateConfigDeliveryChannelsResponse
     */
    public function listAggregateConfigDeliveryChannelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->deliveryChannelIds) {
            @$query['DeliveryChannelIds'] = $request->deliveryChannelIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateConfigDeliveryChannels',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateConfigDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all delivery channels in an account group.
     *
     * @param request - ListAggregateConfigDeliveryChannelsRequest
     *
     * @returns ListAggregateConfigDeliveryChannelsResponse
     *
     * @param ListAggregateConfigDeliveryChannelsRequest $request
     *
     * @return ListAggregateConfigDeliveryChannelsResponse
     */
    public function listAggregateConfigDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance evaluation results of resources based on a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results of resources based on the `cr-888f626622af00ae****` rule in the `ca-d1e3326622af00cb****` account group. The returned result indicates that the `Bucket-test` resource is evaluated as `NON_COMPLIANT` by using the rule. The resource is an Object Storage Service (OSS) bucket.
     *
     * @param request - ListAggregateConfigRuleEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateConfigRuleEvaluationResultsResponse
     *
     * @param ListAggregateConfigRuleEvaluationResultsRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponse
     */
    public function listAggregateConfigRuleEvaluationResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->complianceType) {
            @$query['ComplianceType'] = $request->complianceType;
        }

        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateConfigRuleEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateConfigRuleEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation results of resources based on a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation results of resources based on the `cr-888f626622af00ae****` rule in the `ca-d1e3326622af00cb****` account group. The returned result indicates that the `Bucket-test` resource is evaluated as `NON_COMPLIANT` by using the rule. The resource is an Object Storage Service (OSS) bucket.
     *
     * @param request - ListAggregateConfigRuleEvaluationResultsRequest
     *
     * @returns ListAggregateConfigRuleEvaluationResultsResponse
     *
     * @param ListAggregateConfigRuleEvaluationResultsRequest $request
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponse
     */
    public function listAggregateConfigRuleEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRuleEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of compliance evaluation results of an account group.
     *
     * @remarks
     * This topic provides an example on how to query the statistics of compliance evaluation results of an account group whose ID is ca-edd3626622af00b3\\*\\*\\*\\*.
     *
     * @param request - ListAggregateConfigRuleEvaluationStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateConfigRuleEvaluationStatisticsResponse
     *
     * @param ListAggregateConfigRuleEvaluationStatisticsRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ListAggregateConfigRuleEvaluationStatisticsResponse
     */
    public function listAggregateConfigRuleEvaluationStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateConfigRuleEvaluationStatistics',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateConfigRuleEvaluationStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of compliance evaluation results of an account group.
     *
     * @remarks
     * This topic provides an example on how to query the statistics of compliance evaluation results of an account group whose ID is ca-edd3626622af00b3\\*\\*\\*\\*.
     *
     * @param request - ListAggregateConfigRuleEvaluationStatisticsRequest
     *
     * @returns ListAggregateConfigRuleEvaluationStatisticsResponse
     *
     * @param ListAggregateConfigRuleEvaluationStatisticsRequest $request
     *
     * @return ListAggregateConfigRuleEvaluationStatisticsResponse
     */
    public function listAggregateConfigRuleEvaluationStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRuleEvaluationStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of rules in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the rules in an account group whose ID is `ca-f632626622af0079****`. The returned result shows a total of one rule and two evaluated resources. The resources are both evaluated as `COMPLIANT`.
     *
     * @param tmpReq - ListAggregateConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateConfigRulesResponse
     *
     * @param ListAggregateConfigRulesRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAggregateConfigRulesResponse
     */
    public function listAggregateConfigRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAggregateConfigRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->complianceType) {
            @$query['ComplianceType'] = $request->complianceType;
        }

        if (null !== $request->configRuleName) {
            @$query['ConfigRuleName'] = $request->configRuleName;
        }

        if (null !== $request->configRuleState) {
            @$query['ConfigRuleState'] = $request->configRuleState;
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

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of rules in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the rules in an account group whose ID is `ca-f632626622af0079****`. The returned result shows a total of one rule and two evaluated resources. The resources are both evaluated as `COMPLIANT`.
     *
     * @param request - ListAggregateConfigRulesRequest
     *
     * @returns ListAggregateConfigRulesResponse
     *
     * @param ListAggregateConfigRulesRequest $request
     *
     * @return ListAggregateConfigRulesResponse
     */
    public function listAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Obtains a list of resources aggregated across regions within all member accounts of a specific account group.
     *
     * @remarks
     * This topic provides an example on how to query the resources within the member account `100931896542****` of the account group `ca-c560626622af0005****`. The result indicates that eight resources are queried.
     *
     * @param request - ListAggregateDiscoveredResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateDiscoveredResourcesResponse
     *
     * @param ListAggregateDiscoveredResourcesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->endUpdateTimestamp) {
            @$query['EndUpdateTimestamp'] = $request->endUpdateTimestamp;
        }

        if (null !== $request->excludeResourceTypes) {
            @$query['ExcludeResourceTypes'] = $request->excludeResourceTypes;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        if (null !== $request->resourceDeleted) {
            @$query['ResourceDeleted'] = $request->resourceDeleted;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->startUpdateTimestamp) {
            @$query['StartUpdateTimestamp'] = $request->startUpdateTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateDiscoveredResources',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateDiscoveredResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of resources aggregated across regions within all member accounts of a specific account group.
     *
     * @remarks
     * This topic provides an example on how to query the resources within the member account `100931896542****` of the account group `ca-c560626622af0005****`. The result indicates that eight resources are queried.
     *
     * @param request - ListAggregateDiscoveredResourcesRequest
     *
     * @returns ListAggregateDiscoveredResourcesResponse
     *
     * @param ListAggregateDiscoveredResourcesRequest $request
     *
     * @return ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateDiscoveredResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the remediation records of a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the remediation records of the `cr-d04a626622af00af****` rule in the `ca-edd3626622af00b3****` account group.
     *
     * @param request - ListAggregateRemediationExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateRemediationExecutionsResponse
     *
     * @param ListAggregateRemediationExecutionsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListAggregateRemediationExecutionsResponse
     */
    public function listAggregateRemediationExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->executionStatus) {
            @$query['ExecutionStatus'] = $request->executionStatus;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateRemediationExecutions',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateRemediationExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the remediation records of a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the remediation records of the `cr-d04a626622af00af****` rule in the `ca-edd3626622af00b3****` account group.
     *
     * @param request - ListAggregateRemediationExecutionsRequest
     *
     * @returns ListAggregateRemediationExecutionsResponse
     *
     * @param ListAggregateRemediationExecutionsRequest $request
     *
     * @return ListAggregateRemediationExecutionsResponse
     */
    public function listAggregateRemediationExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateRemediationExecutionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of remediation templates for a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the remediation templates of the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`.
     *
     * @param request - ListAggregateRemediationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateRemediationsResponse
     *
     * @param ListAggregateRemediationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAggregateRemediationsResponse
     */
    public function listAggregateRemediationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateRemediations',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of remediation templates for a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the remediation templates of the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`.
     *
     * @param request - ListAggregateRemediationsRequest
     *
     * @returns ListAggregateRemediationsResponse
     *
     * @param ListAggregateRemediationsRequest $request
     *
     * @return ListAggregateRemediationsResponse
     */
    public function listAggregateRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateRemediationsWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance evaluation results of resources in an account group.
     *
     * @remarks
     * This example shows how to query the compliance evaluation result of the `23642660635396****` resource in the `ca-7f00626622af0041****` account group. The resource is a RAM user. The returned result indicates that the resource is evaluated as `NON_COMPLIANT` by using the `cr-7f7d626622af0041****` rule.
     *
     * @param request - ListAggregateResourceEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateResourceEvaluationResultsResponse
     *
     * @param ListAggregateResourceEvaluationResultsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListAggregateResourceEvaluationResultsResponse
     */
    public function listAggregateResourceEvaluationResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->complianceType) {
            @$query['ComplianceType'] = $request->complianceType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateResourceEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateResourceEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation results of resources in an account group.
     *
     * @remarks
     * This example shows how to query the compliance evaluation result of the `23642660635396****` resource in the `ca-7f00626622af0041****` account group. The resource is a RAM user. The returned result indicates that the resource is evaluated as `NON_COMPLIANT` by using the `cr-7f7d626622af0041****` rule.
     *
     * @param request - ListAggregateResourceEvaluationResultsRequest
     *
     * @returns ListAggregateResourceEvaluationResultsResponse
     *
     * @param ListAggregateResourceEvaluationResultsRequest $request
     *
     * @return ListAggregateResourceEvaluationResultsResponse
     */
    public function listAggregateResourceEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateResourceEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of the resources of a specific resource in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the disks that are associated with an Elastic Compute Service (ECS) instance in an account group.
     *
     * @param request - ListAggregateResourceRelationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateResourceRelationsResponse
     *
     * @param ListAggregateResourceRelationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListAggregateResourceRelationsResponse
     */
    public function listAggregateResourceRelationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->relationType) {
            @$query['RelationType'] = $request->relationType;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->targetResourceId) {
            @$query['TargetResourceId'] = $request->targetResourceId;
        }

        if (null !== $request->targetResourceType) {
            @$query['TargetResourceType'] = $request->targetResourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateResourceRelations',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateResourceRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of the resources of a specific resource in an account group.
     *
     * @remarks
     * This topic provides an example on how to query the disks that are associated with an Elastic Compute Service (ECS) instance in an account group.
     *
     * @param request - ListAggregateResourceRelationsRequest
     *
     * @returns ListAggregateResourceRelationsResponse
     *
     * @param ListAggregateResourceRelationsRequest $request
     *
     * @return ListAggregateResourceRelationsResponse
     */
    public function listAggregateResourceRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateResourceRelationsWithOptions($request, $runtime);
    }

    /**
     * Obtains resources in a specific account group based on the fields in the resource properties by using a SELECT statement.
     *
     * @remarks
     * When you write a `SELECT` statement, you must obtain the fields and the data types of the fields from the property file of the resource type. For more information about property files, see[ Alibaba Cloud Config Resource Schema](https://github.com/aliyun/alibabacloud-config-resource-schema)
     * >
     * *   Each resource type supported by Cloud Config has a property file. Property files are named based on the related resource types. For example, the property file of the `ACS::ECS::Instance` resource type is named `ACS_ECS_Instance.properties.json`. Property files of different resource types are placed under the `config/properties/resource-types` path.
     * *   For more information about the examples and limits on SQL query statements, see [Examples of SQL query statements](https://help.aliyun.com/document_detail/398718.html) and [Limits on SQL query statements](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example on how to obtain all resources whose tag key is `business` and whose tag value is `online` in the account group `ca-4b05626622af000c****` by using the advanced search feature.
     *
     * @param request - ListAggregateResourcesByAdvancedSearchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateResourcesByAdvancedSearchResponse
     *
     * @param ListAggregateResourcesByAdvancedSearchRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListAggregateResourcesByAdvancedSearchResponse
     */
    public function listAggregateResourcesByAdvancedSearchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->sql) {
            @$query['Sql'] = $request->sql;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateResourcesByAdvancedSearch',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateResourcesByAdvancedSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains resources in a specific account group based on the fields in the resource properties by using a SELECT statement.
     *
     * @remarks
     * When you write a `SELECT` statement, you must obtain the fields and the data types of the fields from the property file of the resource type. For more information about property files, see[ Alibaba Cloud Config Resource Schema](https://github.com/aliyun/alibabacloud-config-resource-schema)
     * >
     * *   Each resource type supported by Cloud Config has a property file. Property files are named based on the related resource types. For example, the property file of the `ACS::ECS::Instance` resource type is named `ACS_ECS_Instance.properties.json`. Property files of different resource types are placed under the `config/properties/resource-types` path.
     * *   For more information about the examples and limits on SQL query statements, see [Examples of SQL query statements](https://help.aliyun.com/document_detail/398718.html) and [Limits on SQL query statements](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example on how to obtain all resources whose tag key is `business` and whose tag value is `online` in the account group `ca-4b05626622af000c****` by using the advanced search feature.
     *
     * @param request - ListAggregateResourcesByAdvancedSearchRequest
     *
     * @returns ListAggregateResourcesByAdvancedSearchResponse
     *
     * @param ListAggregateResourcesByAdvancedSearchRequest $request
     *
     * @return ListAggregateResourcesByAdvancedSearchResponse
     */
    public function listAggregateResourcesByAdvancedSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateResourcesByAdvancedSearchWithOptions($request, $runtime);
    }

    /**
     * Queries all account groups within the current management account or delegated administrator account.
     *
     * @remarks
     * The sample request in this topic shows you how to query account groups. A maximum of 10 entries can be returned for the request. As shown in the responses, the account group returned is named as `Test_Group`, its description is `Test account group`, and it is of the `CUSTOM` type, which indicates a custom account group. The account group contains two member accounts.
     *
     * @param tmpReq - ListAggregatorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregatorsResponse
     *
     * @param ListAggregatorsRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListAggregatorsResponse
     */
    public function listAggregatorsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAggregatorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregators',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all account groups within the current management account or delegated administrator account.
     *
     * @remarks
     * The sample request in this topic shows you how to query account groups. A maximum of 10 entries can be returned for the request. As shown in the responses, the account group returned is named as `Test_Group`, its description is `Test account group`, and it is of the `CUSTOM` type, which indicates a custom account group. The account group contains two member accounts.
     *
     * @param request - ListAggregatorsRequest
     *
     * @returns ListAggregatorsResponse
     *
     * @param ListAggregatorsRequest $request
     *
     * @return ListAggregatorsResponse
     */
    public function listAggregators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregatorsWithOptions($request, $runtime);
    }

    /**
     * Queries all compliance package templates provided by Cloud Config and the details of the compliance package templates.
     *
     * @remarks
     * A compliance package template is a collection of rules that Cloud Config can create based on compliance scenarios.
     *
     * @param request - ListCompliancePackTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCompliancePackTemplatesResponse
     *
     * @param ListCompliancePackTemplatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCompliancePackTemplatesResponse
     */
    public function listCompliancePackTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compliancePackTemplateId) {
            @$query['CompliancePackTemplateId'] = $request->compliancePackTemplateId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCompliancePackTemplates',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCompliancePackTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all compliance package templates provided by Cloud Config and the details of the compliance package templates.
     *
     * @remarks
     * A compliance package template is a collection of rules that Cloud Config can create based on compliance scenarios.
     *
     * @param request - ListCompliancePackTemplatesRequest
     *
     * @returns ListCompliancePackTemplatesResponse
     *
     * @param ListCompliancePackTemplatesRequest $request
     *
     * @return ListCompliancePackTemplatesResponse
     */
    public function listCompliancePackTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompliancePackTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of compliance packages.
     *
     * @remarks
     * This topic provides an example of how to query compliance packages. The return result shows the details of the `cp-fdc8626622af00f9****` compliance package.
     *
     * @param tmpReq - ListCompliancePacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCompliancePacksResponse
     *
     * @param ListCompliancePacksRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListCompliancePacksResponse
     */
    public function listCompliancePacksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCompliancePacksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCompliancePacks',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of compliance packages.
     *
     * @remarks
     * This topic provides an example of how to query compliance packages. The return result shows the details of the `cp-fdc8626622af00f9****` compliance package.
     *
     * @param request - ListCompliancePacksRequest
     *
     * @returns ListCompliancePacksResponse
     *
     * @param ListCompliancePacksRequest $request
     *
     * @return ListCompliancePacksResponse
     */
    public function listCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of delivery channels.
     *
     * @param request - ListConfigDeliveryChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigDeliveryChannelsResponse
     *
     * @param ListConfigDeliveryChannelsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListConfigDeliveryChannelsResponse
     */
    public function listConfigDeliveryChannelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelIds) {
            @$query['DeliveryChannelIds'] = $request->deliveryChannelIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfigDeliveryChannels',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of delivery channels.
     *
     * @param request - ListConfigDeliveryChannelsRequest
     *
     * @returns ListConfigDeliveryChannelsResponse
     *
     * @param ListConfigDeliveryChannelsRequest $request
     *
     * @return ListConfigDeliveryChannelsResponse
     */
    public function listConfigDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance evaluation results of resources based on a rule.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation result of resources based on a rule whose ID is `cr-cac56457e0d900d3****`. The returned result indicates that the `i-hp3e4kvhzqn2s11t****` resource is evaluated as `NON_COMPLIANT` by using the rule. The resource is an Elastic Compute Service (ECS) instance.
     *
     * @param request - ListConfigRuleEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigRuleEvaluationResultsResponse
     *
     * @param ListConfigRuleEvaluationResultsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListConfigRuleEvaluationResultsResponse
     */
    public function listConfigRuleEvaluationResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfigRuleEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigRuleEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation results of resources based on a rule.
     *
     * @remarks
     * This topic provides an example on how to query the compliance evaluation result of resources based on a rule whose ID is `cr-cac56457e0d900d3****`. The returned result indicates that the `i-hp3e4kvhzqn2s11t****` resource is evaluated as `NON_COMPLIANT` by using the rule. The resource is an Elastic Compute Service (ECS) instance.
     *
     * @param request - ListConfigRuleEvaluationResultsRequest
     *
     * @returns ListConfigRuleEvaluationResultsResponse
     *
     * @param ListConfigRuleEvaluationResultsRequest $request
     *
     * @return ListConfigRuleEvaluationResultsResponse
     */
    public function listConfigRuleEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRuleEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of compliance evaluation results of the current Alibaba Cloud account.
     *
     * @param request - ListConfigRuleEvaluationStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigRuleEvaluationStatisticsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListConfigRuleEvaluationStatisticsResponse
     */
    public function listConfigRuleEvaluationStatisticsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListConfigRuleEvaluationStatistics',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigRuleEvaluationStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of compliance evaluation results of the current Alibaba Cloud account.
     *
     * @returns ListConfigRuleEvaluationStatisticsResponse
     *
     * @return ListConfigRuleEvaluationStatisticsResponse
     */
    public function listConfigRuleEvaluationStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRuleEvaluationStatisticsWithOptions($runtime);
    }

    /**
     * Queries the rules of the current account.
     *
     * @remarks
     * This topic provides an example on how to query the rules of the current account. The response shows that the current account has a total of one rule and three evaluated resources. The resources are evaluated as compliant.
     *
     * @param tmpReq - ListConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigRulesResponse
     *
     * @param ListConfigRulesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListConfigRulesResponse
     */
    public function listConfigRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListConfigRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->complianceType) {
            @$query['ComplianceType'] = $request->complianceType;
        }

        if (null !== $request->configRuleName) {
            @$query['ConfigRuleName'] = $request->configRuleName;
        }

        if (null !== $request->configRuleState) {
            @$query['ConfigRuleState'] = $request->configRuleState;
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

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfigRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the rules of the current account.
     *
     * @remarks
     * This topic provides an example on how to query the rules of the current account. The response shows that the current account has a total of one rule and three evaluated resources. The resources are evaluated as compliant.
     *
     * @param request - ListConfigRulesRequest
     *
     * @returns ListConfigRulesResponse
     *
     * @param ListConfigRulesRequest $request
     *
     * @return ListConfigRulesResponse
     */
    public function listConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Obtains a list of resources aggregated across regions within an Alibaba Cloud account.
     *
     * @remarks
     * This topic provides an example on how to call the ListDiscoveredResources operation to query the resources in the current Alibaba Cloud account. The returned result indicates that a total of eight resources exist in the account.
     *
     * @param request - ListDiscoveredResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDiscoveredResourcesResponse
     *
     * @param ListDiscoveredResourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endUpdateTimestamp) {
            @$query['EndUpdateTimestamp'] = $request->endUpdateTimestamp;
        }

        if (null !== $request->excludeResourceTypes) {
            @$query['ExcludeResourceTypes'] = $request->excludeResourceTypes;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->resourceDeleted) {
            @$query['ResourceDeleted'] = $request->resourceDeleted;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->startUpdateTimestamp) {
            @$query['StartUpdateTimestamp'] = $request->startUpdateTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDiscoveredResources',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDiscoveredResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of resources aggregated across regions within an Alibaba Cloud account.
     *
     * @remarks
     * This topic provides an example on how to call the ListDiscoveredResources operation to query the resources in the current Alibaba Cloud account. The returned result indicates that a total of eight resources exist in the account.
     *
     * @param request - ListDiscoveredResourcesRequest
     *
     * @returns ListDiscoveredResourcesResponse
     *
     * @param ListDiscoveredResourcesRequest $request
     *
     * @return ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiscoveredResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of cloud services that are integrated with Cloud Config and the status of each cloud service.
     *
     * @remarks
     * This topic provides an example on how to query the cloud services that can be integrated by the current Alibaba Cloud account.
     *
     * @param request - ListIntegratedServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegratedServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListIntegratedServiceResponse
     */
    public function listIntegratedServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListIntegratedService',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntegratedServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of cloud services that are integrated with Cloud Config and the status of each cloud service.
     *
     * @remarks
     * This topic provides an example on how to query the cloud services that can be integrated by the current Alibaba Cloud account.
     *
     * @returns ListIntegratedServiceResponse
     *
     * @return ListIntegratedServiceResponse
     */
    public function listIntegratedService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntegratedServiceWithOptions($runtime);
    }

    /**
     * Queries a list of managed rules supported by Cloud Config.
     *
     * @remarks
     * ### [](#)Background information
     * For more information about how to define, execute, and integrate a managed rule, see [Definition and execution of rules](https://help.aliyun.com/document_detail/128273.html).
     * ### [](#)Description
     * This topic provides an example on how to query all managed rules whose keyword is `CDN`. The response shows that 21 managed rules exist.
     *
     * @param request - ListManagedRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListManagedRulesResponse
     *
     * @param ListManagedRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListManagedRulesResponse
     */
    public function listManagedRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterType) {
            @$query['FilterType'] = $request->filterType;
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

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListManagedRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of managed rules supported by Cloud Config.
     *
     * @remarks
     * ### [](#)Background information
     * For more information about how to define, execute, and integrate a managed rule, see [Definition and execution of rules](https://help.aliyun.com/document_detail/128273.html).
     * ### [](#)Description
     * This topic provides an example on how to query all managed rules whose keyword is `CDN`. The response shows that 21 managed rules exist.
     *
     * @param request - ListManagedRulesRequest
     *
     * @returns ListManagedRulesResponse
     *
     * @param ListManagedRulesRequest $request
     *
     * @return ListManagedRulesResponse
     */
    public function listManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listManagedRulesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of evaluation rules supported by Cloud Config.
     *
     * @remarks
     * For more information about how to define, execute, and integrate an evaluation rule, see [Definition and execution of evaluation rules](https://help.aliyun.com/document_detail/470802.html).
     * After you create an evaluation rule, a managed rule that has the same settings as the evaluation rule is created. After you create a resource, the managed rule can be used to continuously check the compliance of the resource.
     *
     * @param tmpReq - ListPreManagedRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPreManagedRulesResponse
     *
     * @param ListPreManagedRulesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListPreManagedRulesResponse
     */
    public function listPreManagedRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPreManagedRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceTypes) {
            $request->resourceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypes, 'ResourceTypes', 'json');
        }

        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceTypesShrink) {
            @$body['ResourceTypes'] = $request->resourceTypesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPreManagedRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPreManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of evaluation rules supported by Cloud Config.
     *
     * @remarks
     * For more information about how to define, execute, and integrate an evaluation rule, see [Definition and execution of evaluation rules](https://help.aliyun.com/document_detail/470802.html).
     * After you create an evaluation rule, a managed rule that has the same settings as the evaluation rule is created. After you create a resource, the managed rule can be used to continuously check the compliance of the resource.
     *
     * @param request - ListPreManagedRulesRequest
     *
     * @returns ListPreManagedRulesResponse
     *
     * @param ListPreManagedRulesRequest $request
     *
     * @return ListPreManagedRulesResponse
     */
    public function listPreManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPreManagedRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the remediation records of a rule.
     *
     * @remarks
     * This topic provides an example on how to query the remediation records of the rule cr-5392626622af0000\\*\\*\\*\\*.
     *
     * @param request - ListRemediationExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRemediationExecutionsResponse
     *
     * @param ListRemediationExecutionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListRemediationExecutionsResponse
     */
    public function listRemediationExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->executionStatus) {
            @$query['ExecutionStatus'] = $request->executionStatus;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRemediationExecutions',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRemediationExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the remediation records of a rule.
     *
     * @remarks
     * This topic provides an example on how to query the remediation records of the rule cr-5392626622af0000\\*\\*\\*\\*.
     *
     * @param request - ListRemediationExecutionsRequest
     *
     * @returns ListRemediationExecutionsResponse
     *
     * @param ListRemediationExecutionsRequest $request
     *
     * @return ListRemediationExecutionsResponse
     */
    public function listRemediationExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationExecutionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of remediation templates for a managed rule.
     *
     * @remarks
     * In this topic, the `oss-bucket-public-write-prohibited` managed rule is used as an example. The return result shows the details of the remediation template of the `OOS` type for the managed rule. OOS represents Operation Orchestration Service.
     *
     * @param request - ListRemediationTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRemediationTemplatesResponse
     *
     * @param ListRemediationTemplatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRemediationTemplatesResponse
     */
    public function listRemediationTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->managedRuleIdentifier) {
            @$query['ManagedRuleIdentifier'] = $request->managedRuleIdentifier;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remediationType) {
            @$query['RemediationType'] = $request->remediationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRemediationTemplates',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRemediationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of remediation templates for a managed rule.
     *
     * @remarks
     * In this topic, the `oss-bucket-public-write-prohibited` managed rule is used as an example. The return result shows the details of the remediation template of the `OOS` type for the managed rule. OOS represents Operation Orchestration Service.
     *
     * @param request - ListRemediationTemplatesRequest
     *
     * @returns ListRemediationTemplatesResponse
     *
     * @param ListRemediationTemplatesRequest $request
     *
     * @return ListRemediationTemplatesResponse
     */
    public function listRemediationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the execution of remediation templates.
     *
     * @remarks
     * This topic provides an example on how to query the remediation templates for the rule whose ID is `cr-6b7c626622af00b4****`.
     *
     * @param request - ListRemediationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRemediationsResponse
     *
     * @param ListRemediationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRemediationsResponse
     */
    public function listRemediationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configRuleIds) {
            @$query['ConfigRuleIds'] = $request->configRuleIds;
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
            'action' => 'ListRemediations',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the execution of remediation templates.
     *
     * @remarks
     * This topic provides an example on how to query the remediation templates for the rule whose ID is `cr-6b7c626622af00b4****`.
     *
     * @param request - ListRemediationsRequest
     *
     * @returns ListRemediationsResponse
     *
     * @param ListRemediationsRequest $request
     *
     * @return ListRemediationsResponse
     */
    public function listRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationsWithOptions($request, $runtime);
    }

    /**
     * Queries the compliance evaluation results of resources.
     *
     * @remarks
     * In this example, the compliance evaluation result of the `23642660635396****` resource is queried and the resource is a RAM user. The returned result indicates that the resource is evaluated as `NON_COMPLIANT` by using the `cr-7f7d626622af0041****` rule.
     *
     * @param request - ListResourceEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceEvaluationResultsResponse
     *
     * @param ListResourceEvaluationResultsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListResourceEvaluationResultsResponse
     */
    public function listResourceEvaluationResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->complianceType) {
            @$query['ComplianceType'] = $request->complianceType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation results of resources.
     *
     * @remarks
     * In this example, the compliance evaluation result of the `23642660635396****` resource is queried and the resource is a RAM user. The returned result indicates that the resource is evaluated as `NON_COMPLIANT` by using the `cr-7f7d626622af0041****` rule.
     *
     * @param request - ListResourceEvaluationResultsRequest
     *
     * @returns ListResourceEvaluationResultsResponse
     *
     * @param ListResourceEvaluationResultsRequest $request
     *
     * @return ListResourceEvaluationResultsResponse
     */
    public function listResourceEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of resources that associate with a specific resource.
     *
     * @remarks
     * For information about the Alibaba Cloud services and resource types supported by Cloud Config, see [Alibaba Cloud services and resource types supported by Cloud Config](https://help.aliyun.com/document_detail/127411.html).
     * This topic provides an example on how to query the information about the disks that are attached to an Elastic Compute Service (ECS) instance named `i-j6cajg9yrfoh4sas****` that is created by the current Alibaba Cloud account in the China (Shanghai) region.
     *
     * @param request - ListResourceRelationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceRelationsResponse
     *
     * @param ListResourceRelationsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListResourceRelationsResponse
     */
    public function listResourceRelationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->relationType) {
            @$query['RelationType'] = $request->relationType;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->targetResourceId) {
            @$query['TargetResourceId'] = $request->targetResourceId;
        }

        if (null !== $request->targetResourceType) {
            @$query['TargetResourceType'] = $request->targetResourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceRelations',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of resources that associate with a specific resource.
     *
     * @remarks
     * For information about the Alibaba Cloud services and resource types supported by Cloud Config, see [Alibaba Cloud services and resource types supported by Cloud Config](https://help.aliyun.com/document_detail/127411.html).
     * This topic provides an example on how to query the information about the disks that are attached to an Elastic Compute Service (ECS) instance named `i-j6cajg9yrfoh4sas****` that is created by the current Alibaba Cloud account in the China (Shanghai) region.
     *
     * @param request - ListResourceRelationsRequest
     *
     * @returns ListResourceRelationsResponse
     *
     * @param ListResourceRelationsRequest $request
     *
     * @return ListResourceRelationsResponse
     */
    public function listResourceRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceRelationsWithOptions($request, $runtime);
    }

    /**
     * Obtains resources based on the fields in the resource properties by using a SELECT statement.
     *
     * @remarks
     * When you write a `SELECT` statement, you must obtain the fields and the data types of the fields from the property file of the resource type. For more information about property files, see [Alibaba Cloud Config Resource Schema](https://github.com/aliyun/alibabacloud-config-resource-schema).
     * >
     * *   Each resource type supported by Cloud Config has a property file. Property files are named based on the related resource types. For example, the property file of the `ACS::ECS::Instance` resource type is named `ACS_ECS_Instance.properties.json`. Property files of different resource types are placed under the `config/properties/resource-types` path.
     * *   For more information about the examples and limits on SQL query statements, see [Examples of SQL query statements](https://help.aliyun.com/document_detail/398718.html) and [Limits on SQL query statements](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example on how to obtain all resources whose tag key is `business` and whose tag value is `online` within the current account by using the advanced search feature.
     *
     * @param request - ListResourcesByAdvancedSearchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesByAdvancedSearchResponse
     *
     * @param ListResourcesByAdvancedSearchRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListResourcesByAdvancedSearchResponse
     */
    public function listResourcesByAdvancedSearchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sql) {
            @$query['Sql'] = $request->sql;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourcesByAdvancedSearch',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourcesByAdvancedSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains resources based on the fields in the resource properties by using a SELECT statement.
     *
     * @remarks
     * When you write a `SELECT` statement, you must obtain the fields and the data types of the fields from the property file of the resource type. For more information about property files, see [Alibaba Cloud Config Resource Schema](https://github.com/aliyun/alibabacloud-config-resource-schema).
     * >
     * *   Each resource type supported by Cloud Config has a property file. Property files are named based on the related resource types. For example, the property file of the `ACS::ECS::Instance` resource type is named `ACS_ECS_Instance.properties.json`. Property files of different resource types are placed under the `config/properties/resource-types` path.
     * *   For more information about the examples and limits on SQL query statements, see [Examples of SQL query statements](https://help.aliyun.com/document_detail/398718.html) and [Limits on SQL query statements](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example on how to obtain all resources whose tag key is `business` and whose tag value is `online` within the current account by using the advanced search feature.
     *
     * @param request - ListResourcesByAdvancedSearchRequest
     *
     * @returns ListResourcesByAdvancedSearchResponse
     *
     * @param ListResourcesByAdvancedSearchRequest $request
     *
     * @return ListResourcesByAdvancedSearchResponse
     */
    public function listResourcesByAdvancedSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesByAdvancedSearchWithOptions($request, $runtime);
    }

    /**
     * Queries the cloud services and resource types that are supported by Cloud Config.
     *
     * @remarks
     * This topic provides an example on how to query the Alibaba Cloud services and resource types supported by a Cloud Config.
     *
     * @param request - ListSupportedProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSupportedProductsResponse
     *
     * @param ListSupportedProductsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSupportedProductsResponse
     */
    public function listSupportedProductsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSupportedProducts',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSupportedProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cloud services and resource types that are supported by Cloud Config.
     *
     * @remarks
     * This topic provides an example on how to query the Alibaba Cloud services and resource types supported by a Cloud Config.
     *
     * @param request - ListSupportedProductsRequest
     *
     * @returns ListSupportedProductsResponse
     *
     * @param ListSupportedProductsRequest $request
     *
     * @return ListSupportedProductsResponse
     */
    public function listSupportedProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupportedProductsWithOptions($request, $runtime);
    }

    /**
     * Queries tags that are added to specified resources.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $body = [];
        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$body['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-09-07',
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
     * Queries tags that are added to specified resources.
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
     * Submits the evaluation results of a rule from Function Compute.
     *
     * @remarks
     * For more information about the definition, use scenarios, and execution of custom function rules, see [Definition and execution of custom function rules](https://help.aliyun.com/document_detail/127405.html).
     *
     * @param request - PutEvaluationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutEvaluationsResponse
     *
     * @param PutEvaluationsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutEvaluationsResponse
     */
    public function putEvaluationsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deleteMode) {
            @$body['DeleteMode'] = $request->deleteMode;
        }

        if (null !== $request->evaluations) {
            @$body['Evaluations'] = $request->evaluations;
        }

        if (null !== $request->resultToken) {
            @$body['ResultToken'] = $request->resultToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutEvaluations',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutEvaluationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits the evaluation results of a rule from Function Compute.
     *
     * @remarks
     * For more information about the definition, use scenarios, and execution of custom function rules, see [Definition and execution of custom function rules](https://help.aliyun.com/document_detail/127405.html).
     *
     * @param request - PutEvaluationsRequest
     *
     * @returns PutEvaluationsResponse
     *
     * @param PutEvaluationsRequest $request
     *
     * @return PutEvaluationsResponse
     */
    public function putEvaluations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEvaluationsWithOptions($request, $runtime);
    }

    /**
     * Re-evaluates resources that are evaluated based on a rule after the evaluation results on some resources of an ignored rule in an account group are resumed.
     *
     * @remarks
     * ### [](#)Prerequisites
     * One or more non-compliant resources that are evaluated by a rule are ignored. For more information, see [IgnoreAggregateEvaluationResults](https://help.aliyun.com/document_detail/607054.html).
     * ### [](#)Description
     * This topic provides an example on how to re-evaluate the non-compliant resource that is evaluated by the `cr-7e72626622af0051****` rule of the `120886317861****` member in the `ca-5b6c626622af008f****` group account. The ID of the region in which the resource resides is `cn-beijing`, the type of the resource is `ACS::SLB::LoadBalancer`, and the ID of the resource is `lb-hp3a3b4ztyfm2plgm****`.
     *
     * @param tmpReq - RevertAggregateEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevertAggregateEvaluationResultsResponse
     *
     * @param RevertAggregateEvaluationResultsRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return RevertAggregateEvaluationResultsResponse
     */
    public function revertAggregateEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RevertAggregateEvaluationResultsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resources) {
            $request->resourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }

        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleId) {
            @$body['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->resourcesShrink) {
            @$body['Resources'] = $request->resourcesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevertAggregateEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevertAggregateEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Re-evaluates resources that are evaluated based on a rule after the evaluation results on some resources of an ignored rule in an account group are resumed.
     *
     * @remarks
     * ### [](#)Prerequisites
     * One or more non-compliant resources that are evaluated by a rule are ignored. For more information, see [IgnoreAggregateEvaluationResults](https://help.aliyun.com/document_detail/607054.html).
     * ### [](#)Description
     * This topic provides an example on how to re-evaluate the non-compliant resource that is evaluated by the `cr-7e72626622af0051****` rule of the `120886317861****` member in the `ca-5b6c626622af008f****` group account. The ID of the region in which the resource resides is `cn-beijing`, the type of the resource is `ACS::SLB::LoadBalancer`, and the ID of the resource is `lb-hp3a3b4ztyfm2plgm****`.
     *
     * @param request - RevertAggregateEvaluationResultsRequest
     *
     * @returns RevertAggregateEvaluationResultsResponse
     *
     * @param RevertAggregateEvaluationResultsRequest $request
     *
     * @return RevertAggregateEvaluationResultsResponse
     */
    public function revertAggregateEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertAggregateEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Re-evaluates resources that are evaluated based on a rule after the evaluation results on some resources of an ignored rule are resumed.
     *
     * @remarks
     * ### [](#)Prerequisites
     * One or more non-compliant resources that are evaluated by a rule are ignored. For more information, see [IgnoreEvaluationResults](https://help.aliyun.com/document_detail/606990.html).
     * ### [](#)Description
     * This topic provides an example on how to re-evaluate the `lb-hp3a3b4ztyfm2plgm****` non-compliant resource that is evaluated by the `cr-7e72626622af0051****` rule. The ID of the region in which the resource resides is`cn-beijing`, the type of the resource is `ACS::SLB::LoadBalancer`, and the ID of the resource is `lb-hp3a3b4ztyfm2plgm****`.
     *
     * @param tmpReq - RevertEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevertEvaluationResultsResponse
     *
     * @param RevertEvaluationResultsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return RevertEvaluationResultsResponse
     */
    public function revertEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RevertEvaluationResultsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resources) {
            $request->resourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }

        $body = [];
        if (null !== $request->configRuleId) {
            @$body['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->resourcesShrink) {
            @$body['Resources'] = $request->resourcesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevertEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevertEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Re-evaluates resources that are evaluated based on a rule after the evaluation results on some resources of an ignored rule are resumed.
     *
     * @remarks
     * ### [](#)Prerequisites
     * One or more non-compliant resources that are evaluated by a rule are ignored. For more information, see [IgnoreEvaluationResults](https://help.aliyun.com/document_detail/606990.html).
     * ### [](#)Description
     * This topic provides an example on how to re-evaluate the `lb-hp3a3b4ztyfm2plgm****` non-compliant resource that is evaluated by the `cr-7e72626622af0051****` rule. The ID of the region in which the resource resides is`cn-beijing`, the type of the resource is `ACS::SLB::LoadBalancer`, and the ID of the resource is `lb-hp3a3b4ztyfm2plgm****`.
     *
     * @param request - RevertEvaluationResultsRequest
     *
     * @returns RevertEvaluationResultsResponse
     *
     * @param RevertEvaluationResultsRequest $request
     *
     * @return RevertEvaluationResultsResponse
     */
    public function revertEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Re-evaluates the compliance of resources based on a rule or based on all rules in a compliance package in a specific account group.
     *
     * @remarks
     * > After you call this operation, the compliance evaluation is performed only once. To query the compliance evaluation results returned by the rule, call the ListAggregateConfigRuleEvaluationResults operation. For more information, see [ListAggregateConfigRuleEvaluationResults](https://help.aliyun.com/document_detail/265979.html).
     * The sample request in this topic shows how to use the `cr-c169626622af009f****` rule in the `ca-3a58626622af0005****` account group to evaluate resources.
     *
     * @param request - StartAggregateConfigRuleEvaluationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAggregateConfigRuleEvaluationResponse
     *
     * @param StartAggregateConfigRuleEvaluationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return StartAggregateConfigRuleEvaluationResponse
     */
    public function startAggregateConfigRuleEvaluationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->revertEvaluation) {
            @$query['RevertEvaluation'] = $request->revertEvaluation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartAggregateConfigRuleEvaluation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartAggregateConfigRuleEvaluationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Re-evaluates the compliance of resources based on a rule or based on all rules in a compliance package in a specific account group.
     *
     * @remarks
     * > After you call this operation, the compliance evaluation is performed only once. To query the compliance evaluation results returned by the rule, call the ListAggregateConfigRuleEvaluationResults operation. For more information, see [ListAggregateConfigRuleEvaluationResults](https://help.aliyun.com/document_detail/265979.html).
     * The sample request in this topic shows how to use the `cr-c169626622af009f****` rule in the `ca-3a58626622af0005****` account group to evaluate resources.
     *
     * @param request - StartAggregateConfigRuleEvaluationRequest
     *
     * @returns StartAggregateConfigRuleEvaluationResponse
     *
     * @param StartAggregateConfigRuleEvaluationRequest $request
     *
     * @return StartAggregateConfigRuleEvaluationResponse
     */
    public function startAggregateConfigRuleEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAggregateConfigRuleEvaluationWithOptions($request, $runtime);
    }

    /**
     * Performs a remediation operation by using a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to manually perform a remediation operation by using the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`. The return result shows that the manual execution is successful.
     *
     * @param request - StartAggregateRemediationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAggregateRemediationResponse
     *
     * @param StartAggregateRemediationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartAggregateRemediationResponse
     */
    public function startAggregateRemediationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->resourceAccountId) {
            @$query['ResourceAccountId'] = $request->resourceAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartAggregateRemediation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a remediation operation by using a rule in an account group.
     *
     * @remarks
     * This topic provides an example on how to manually perform a remediation operation by using the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`. The return result shows that the manual execution is successful.
     *
     * @param request - StartAggregateRemediationRequest
     *
     * @returns StartAggregateRemediationResponse
     *
     * @param StartAggregateRemediationRequest $request
     *
     * @return StartAggregateRemediationResponse
     */
    public function startAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * Re-evaluates the compliance of resources based on a rule or based on all rules in a compliance package.
     *
     * @remarks
     * In this example, the cr-9920626622af0035\\*\\*\\*\\* rule is used to re-evaluate the compliance of resources.
     *
     * @param request - StartConfigRuleEvaluationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartConfigRuleEvaluationResponse
     *
     * @param StartConfigRuleEvaluationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartConfigRuleEvaluationResponse
     */
    public function startConfigRuleEvaluationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compliancePackId) {
            @$query['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->revertEvaluation) {
            @$query['RevertEvaluation'] = $request->revertEvaluation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartConfigRuleEvaluation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartConfigRuleEvaluationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Re-evaluates the compliance of resources based on a rule or based on all rules in a compliance package.
     *
     * @remarks
     * In this example, the cr-9920626622af0035\\*\\*\\*\\* rule is used to re-evaluate the compliance of resources.
     *
     * @param request - StartConfigRuleEvaluationRequest
     *
     * @returns StartConfigRuleEvaluationResponse
     *
     * @param StartConfigRuleEvaluationRequest $request
     *
     * @return StartConfigRuleEvaluationResponse
     */
    public function startConfigRuleEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConfigRuleEvaluationWithOptions($request, $runtime);
    }

    /**
     * Enables Cloud Config to monitor the resources of your Alibaba Cloud account.
     *
     * @remarks
     * This topic provides an example on how to enable Cloud Config to monitor the resources of your Alibaba Cloud account.
     *
     * @param request - StartConfigurationRecorderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartConfigurationRecorderResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return StartConfigurationRecorderResponse
     */
    public function startConfigurationRecorderWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'StartConfigurationRecorder',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables Cloud Config to monitor the resources of your Alibaba Cloud account.
     *
     * @remarks
     * This topic provides an example on how to enable Cloud Config to monitor the resources of your Alibaba Cloud account.
     *
     * @returns StartConfigurationRecorderResponse
     *
     * @return StartConfigurationRecorderResponse
     */
    public function startConfigurationRecorder()
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConfigurationRecorderWithOptions($runtime);
    }

    /**
     * Performs a remediation operation by using a rule.
     *
     * @remarks
     * This topic provides an example on how to perform a remediation operation by using the rule whose ID is `cr-8a973ac2e2be00a2****`. The returned result shows that the manual execution is successful.
     *
     * @param request - StartRemediationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRemediationResponse
     *
     * @param StartRemediationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartRemediationResponse
     */
    public function startRemediationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configRuleId) {
            @$query['ConfigRuleId'] = $request->configRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartRemediation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a remediation operation by using a rule.
     *
     * @remarks
     * This topic provides an example on how to perform a remediation operation by using the rule whose ID is `cr-8a973ac2e2be00a2****`. The returned result shows that the manual execution is successful.
     *
     * @param request - StartRemediationRequest
     *
     * @returns StartRemediationResponse
     *
     * @param StartRemediationRequest $request
     *
     * @return StartRemediationResponse
     */
    public function startRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRemediationWithOptions($request, $runtime);
    }

    /**
     * Deactivates Cloud Config.
     *
     * @remarks
     * >  After you deactivate Cloud Config, the resource configurations, created rules, and compliance evaluation results that are stored in Cloud Config are automatically cleared and cannot be restored. Proceed with caution.
     *
     * @param request - StopConfigurationRecorderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopConfigurationRecorderResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return StopConfigurationRecorderResponse
     */
    public function stopConfigurationRecorderWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'StopConfigurationRecorder',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deactivates Cloud Config.
     *
     * @remarks
     * >  After you deactivate Cloud Config, the resource configurations, created rules, and compliance evaluation results that are stored in Cloud Config are automatically cleared and cannot be restored. Proceed with caution.
     *
     * @returns StopConfigurationRecorderResponse
     *
     * @return StopConfigurationRecorderResponse
     */
    public function stopConfigurationRecorder()
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopConfigurationRecorderWithOptions($runtime);
    }

    /**
     * Adds tags to resources.
     *
     * @param tmpReq - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$body['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-09-07',
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
     * Removes tags from specified resources.
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
        $body = [];
        if (null !== $request->all) {
            @$body['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$body['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-09-07',
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
     * Removes tags from specified resources.
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
     * Modifies the configurations of a compliance package in an account group.
     *
     * @remarks
     * This topic provides an example on how to change the value of the `eip-bandwidth-limit` parameter in the rule template of the compliance package `cp-fdc8626622af00f9****` in the account group `ca-f632626622af0079****` to `20`.
     *
     * @param tmpReq - UpdateAggregateCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggregateCompliancePackResponse
     *
     * @param UpdateAggregateCompliancePackRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateAggregateCompliancePackResponse
     */
    public function updateAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAggregateCompliancePackShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configRules) {
            $request->configRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliancePackId) {
            @$body['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->compliancePackName) {
            @$body['CompliancePackName'] = $request->compliancePackName;
        }

        if (null !== $request->configRulesShrink) {
            @$body['ConfigRules'] = $request->configRulesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        $bodyFlat = [];
        if (null !== $request->excludeTagsScope) {
            @$bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }

        if (null !== $request->regionIdsScope) {
            @$body['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$body['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->tagKeyScope) {
            @$body['TagKeyScope'] = $request->tagKeyScope;
        }

        if (null !== $request->tagValueScope) {
            @$body['TagValueScope'] = $request->tagValueScope;
        }

        if (null !== $request->tagsScope) {
            @$bodyFlat['TagsScope'] = $request->tagsScope;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAggregateCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a compliance package in an account group.
     *
     * @remarks
     * This topic provides an example on how to change the value of the `eip-bandwidth-limit` parameter in the rule template of the compliance package `cp-fdc8626622af00f9****` in the account group `ca-f632626622af0079****` to `20`.
     *
     * @param request - UpdateAggregateCompliancePackRequest
     *
     * @returns UpdateAggregateCompliancePackResponse
     *
     * @param UpdateAggregateCompliancePackRequest $request
     *
     * @return UpdateAggregateCompliancePackResponse
     */
    public function updateAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Modifies a delivery channel in an account group.
     *
     * @remarks
     * This topic provides an example on how to disable a delivery channel in an account group. The ID of the account group is `ca-a4e5626622af0079****`, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`. The Status parameter is set to `0`. After the delivery channel is disabled, Cloud Config retains the most recent delivery configuration and stops resource data delivery.
     *
     * @param request - UpdateAggregateConfigDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggregateConfigDeliveryChannelResponse
     *
     * @param UpdateAggregateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateAggregateConfigDeliveryChannelResponse
     */
    public function updateAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliantSnapshot) {
            @$query['CompliantSnapshot'] = $request->compliantSnapshot;
        }

        if (null !== $request->configurationItemChangeNotification) {
            @$query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }

        if (null !== $request->configurationSnapshot) {
            @$query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }

        if (null !== $request->deliveryChannelCondition) {
            @$query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }

        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        if (null !== $request->deliveryChannelName) {
            @$query['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->deliveryChannelTargetArn) {
            @$query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }

        if (null !== $request->deliverySnapshotTime) {
            @$query['DeliverySnapshotTime'] = $request->deliverySnapshotTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->nonCompliantNotification) {
            @$query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }

        if (null !== $request->oversizedDataOSSTargetArn) {
            @$query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAggregateConfigDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a delivery channel in an account group.
     *
     * @remarks
     * This topic provides an example on how to disable a delivery channel in an account group. The ID of the account group is `ca-a4e5626622af0079****`, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`. The Status parameter is set to `0`. After the delivery channel is disabled, Cloud Config retains the most recent delivery configuration and stops resource data delivery.
     *
     * @param request - UpdateAggregateConfigDeliveryChannelRequest
     *
     * @returns UpdateAggregateConfigDeliveryChannelResponse
     *
     * @param UpdateAggregateConfigDeliveryChannelRequest $request
     *
     * @return UpdateAggregateConfigDeliveryChannelResponse
     */
    public function updateAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Modifies the description, input parameters, and risk level of a rule in a specific account group.
     *
     * @remarks
     * This topic provides an example on how to change the risk level of the rule `cr-4e3d626622af0080****` in an account group `ca-a4e5626622af0079****` to `3`, which indicates low risk level.
     *
     * @param tmpReq - UpdateAggregateConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggregateConfigRuleResponse
     *
     * @param UpdateAggregateConfigRuleRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateAggregateConfigRuleResponse
     */
    public function updateAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAggregateConfigRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inputParameters) {
            $request->inputParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }

        if (null !== $tmpReq->resourceTypesScope) {
            $request->resourceTypesScopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->accountIdsScope) {
            @$body['AccountIdsScope'] = $request->accountIdsScope;
        }

        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configRuleId) {
            @$body['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->configRuleName) {
            @$body['ConfigRuleName'] = $request->configRuleName;
        }

        if (null !== $request->configRuleTriggerTypes) {
            @$body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->excludeAccountIdsScope) {
            @$body['ExcludeAccountIdsScope'] = $request->excludeAccountIdsScope;
        }

        if (null !== $request->excludeFolderIdsScope) {
            @$body['ExcludeFolderIdsScope'] = $request->excludeFolderIdsScope;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        $bodyFlat = [];
        if (null !== $request->excludeTagsScope) {
            @$bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }

        if (null !== $request->folderIdsScope) {
            @$body['FolderIdsScope'] = $request->folderIdsScope;
        }

        if (null !== $request->inputParametersShrink) {
            @$body['InputParameters'] = $request->inputParametersShrink;
        }

        if (null !== $request->maximumExecutionFrequency) {
            @$body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }

        if (null !== $request->regionIdsScope) {
            @$body['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$body['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->resourceNameScope) {
            @$body['ResourceNameScope'] = $request->resourceNameScope;
        }

        if (null !== $request->resourceTypesScopeShrink) {
            @$body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->tagKeyLogicScope) {
            @$body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }

        if (null !== $request->tagKeyScope) {
            @$body['TagKeyScope'] = $request->tagKeyScope;
        }

        if (null !== $request->tagValueScope) {
            @$body['TagValueScope'] = $request->tagValueScope;
        }

        if (null !== $request->tagsScope) {
            @$bodyFlat['TagsScope'] = $request->tagsScope;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAggregateConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description, input parameters, and risk level of a rule in a specific account group.
     *
     * @remarks
     * This topic provides an example on how to change the risk level of the rule `cr-4e3d626622af0080****` in an account group `ca-a4e5626622af0079****` to `3`, which indicates low risk level.
     *
     * @param request - UpdateAggregateConfigRuleRequest
     *
     * @returns UpdateAggregateConfigRuleResponse
     *
     * @param UpdateAggregateConfigRuleRequest $request
     *
     * @return UpdateAggregateConfigRuleResponse
     */
    public function updateAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies a remediation template for a rule in an account group.
     *
     * @remarks
     * This topic describes how to change the execution mode of the `crr-909ba2d4716700eb****` remediation setting for a rule in the `ca-6b4a626622af0012****` account group to `AUTO_EXECUTION`, which specifies automatic remediation. This topic also provides a sample request.
     *
     * @param request - UpdateAggregateRemediationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggregateRemediationResponse
     *
     * @param UpdateAggregateRemediationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateAggregateRemediationResponse
     */
    public function updateAggregateRemediationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->invokeType) {
            @$body['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->params) {
            @$body['Params'] = $request->params;
        }

        if (null !== $request->remediationId) {
            @$body['RemediationId'] = $request->remediationId;
        }

        if (null !== $request->remediationTemplateId) {
            @$body['RemediationTemplateId'] = $request->remediationTemplateId;
        }

        if (null !== $request->remediationType) {
            @$body['RemediationType'] = $request->remediationType;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAggregateRemediation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a remediation template for a rule in an account group.
     *
     * @remarks
     * This topic describes how to change the execution mode of the `crr-909ba2d4716700eb****` remediation setting for a rule in the `ca-6b4a626622af0012****` account group to `AUTO_EXECUTION`, which specifies automatic remediation. This topic also provides a sample request.
     *
     * @param request - UpdateAggregateRemediationRequest
     *
     * @returns UpdateAggregateRemediationResponse
     *
     * @param UpdateAggregateRemediationRequest $request
     *
     * @return UpdateAggregateRemediationResponse
     */
    public function updateAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * The management account or delegated administrator account of a resource directory can be used to modify the name and description of an account group. The management account or delegated administrator account can also be used to add or remove members from the account group.
     *
     * @remarks
     * This topic provides an example on how to add a member to the account group `ca-dacf86d8314e00eb****`. The member ID is `173808452267****`, the member name is `Tony`, and the member belongs to the resource directory `ResourceDirectory`.
     *
     * @param tmpReq - UpdateAggregatorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggregatorResponse
     *
     * @param UpdateAggregatorRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAggregatorResponse
     */
    public function updateAggregatorWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAggregatorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aggregatorAccounts) {
            $request->aggregatorAccountsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aggregatorAccounts, 'AggregatorAccounts', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->aggregatorAccountsShrink) {
            @$body['AggregatorAccounts'] = $request->aggregatorAccountsShrink;
        }

        if (null !== $request->aggregatorId) {
            @$body['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->aggregatorName) {
            @$body['AggregatorName'] = $request->aggregatorName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->folderId) {
            @$body['FolderId'] = $request->folderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAggregator',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The management account or delegated administrator account of a resource directory can be used to modify the name and description of an account group. The management account or delegated administrator account can also be used to add or remove members from the account group.
     *
     * @remarks
     * This topic provides an example on how to add a member to the account group `ca-dacf86d8314e00eb****`. The member ID is `173808452267****`, the member name is `Tony`, and the member belongs to the resource directory `ResourceDirectory`.
     *
     * @param request - UpdateAggregatorRequest
     *
     * @returns UpdateAggregatorResponse
     *
     * @param UpdateAggregatorRequest $request
     *
     * @return UpdateAggregatorResponse
     */
    public function updateAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregatorWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a specific compliance package in the current account.
     *
     * @remarks
     * This topic provides an example on how to change the value of the `eip-bandwidth-limit` parameter of a rule in the compliance package `cp-a8a8626622af0082****` to `20`.
     *
     * @param tmpReq - UpdateCompliancePackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCompliancePackResponse
     *
     * @param UpdateCompliancePackRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCompliancePackResponse
     */
    public function updateCompliancePackWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCompliancePackShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configRules) {
            $request->configRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliancePackId) {
            @$body['CompliancePackId'] = $request->compliancePackId;
        }

        if (null !== $request->compliancePackName) {
            @$body['CompliancePackName'] = $request->compliancePackName;
        }

        if (null !== $request->configRulesShrink) {
            @$body['ConfigRules'] = $request->configRulesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        $bodyFlat = [];
        if (null !== $request->excludeTagsScope) {
            @$bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }

        if (null !== $request->regionIdsScope) {
            @$body['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$body['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->tagKeyScope) {
            @$body['TagKeyScope'] = $request->tagKeyScope;
        }

        if (null !== $request->tagValueScope) {
            @$body['TagValueScope'] = $request->tagValueScope;
        }

        if (null !== $request->tagsScope) {
            @$bodyFlat['TagsScope'] = $request->tagsScope;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCompliancePack',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a specific compliance package in the current account.
     *
     * @remarks
     * This topic provides an example on how to change the value of the `eip-bandwidth-limit` parameter of a rule in the compliance package `cp-a8a8626622af0082****` to `20`.
     *
     * @param request - UpdateCompliancePackRequest
     *
     * @returns UpdateCompliancePackResponse
     *
     * @param UpdateCompliancePackRequest $request
     *
     * @return UpdateCompliancePackResponse
     */
    public function updateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * Modifies a delivery channel by using the current account.
     *
     * @remarks
     * In this example, a delivery channel is disabled. The ID of the delivery channel is `cdc-8e45ff4e06a3a8****```. The Status parameter is set to 0. After the delivery channel is disabled, Cloud Config retains the most recent delivery configuration and stops the delivery of resource data.
     *
     * @param request - UpdateConfigDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigDeliveryChannelResponse
     *
     * @param UpdateConfigDeliveryChannelRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateConfigDeliveryChannelResponse
     */
    public function updateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compliantSnapshot) {
            @$query['CompliantSnapshot'] = $request->compliantSnapshot;
        }

        if (null !== $request->configurationItemChangeNotification) {
            @$query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }

        if (null !== $request->configurationSnapshot) {
            @$query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }

        if (null !== $request->deliveryChannelCondition) {
            @$query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }

        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        if (null !== $request->deliveryChannelName) {
            @$query['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->deliveryChannelTargetArn) {
            @$query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }

        if (null !== $request->deliverySnapshotTime) {
            @$query['DeliverySnapshotTime'] = $request->deliverySnapshotTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->nonCompliantNotification) {
            @$query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }

        if (null !== $request->oversizedDataOSSTargetArn) {
            @$query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateConfigDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a delivery channel by using the current account.
     *
     * @remarks
     * In this example, a delivery channel is disabled. The ID of the delivery channel is `cdc-8e45ff4e06a3a8****```. The Status parameter is set to 0. After the delivery channel is disabled, Cloud Config retains the most recent delivery configuration and stops the delivery of resource data.
     *
     * @param request - UpdateConfigDeliveryChannelRequest
     *
     * @returns UpdateConfigDeliveryChannelResponse
     *
     * @param UpdateConfigDeliveryChannelRequest $request
     *
     * @return UpdateConfigDeliveryChannelResponse
     */
    public function updateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Modifies the description, input parameters, and risk level of a rule.
     *
     * @remarks
     * This topic provides an example on how to change the risk level of the rule `cr-a260626622af0005****` to `3`, which indicates low risk level.
     *
     * @param tmpReq - UpdateConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigRuleResponse
     *
     * @param UpdateConfigRuleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConfigRuleResponse
     */
    public function updateConfigRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateConfigRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inputParameters) {
            $request->inputParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }

        if (null !== $tmpReq->resourceTypesScope) {
            $request->resourceTypesScopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configRuleId) {
            @$body['ConfigRuleId'] = $request->configRuleId;
        }

        if (null !== $request->configRuleName) {
            @$body['ConfigRuleName'] = $request->configRuleName;
        }

        if (null !== $request->configRuleTriggerTypes) {
            @$body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        $bodyFlat = [];
        if (null !== $request->excludeTagsScope) {
            @$bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }

        if (null !== $request->extendContent) {
            @$body['ExtendContent'] = $request->extendContent;
        }

        if (null !== $request->inputParametersShrink) {
            @$body['InputParameters'] = $request->inputParametersShrink;
        }

        if (null !== $request->maximumExecutionFrequency) {
            @$body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }

        if (null !== $request->regionIdsScope) {
            @$body['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$body['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->resourceNameScope) {
            @$body['ResourceNameScope'] = $request->resourceNameScope;
        }

        if (null !== $request->resourceTypesScopeShrink) {
            @$body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->tagKeyLogicScope) {
            @$body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }

        if (null !== $request->tagKeyScope) {
            @$body['TagKeyScope'] = $request->tagKeyScope;
        }

        if (null !== $request->tagValueScope) {
            @$body['TagValueScope'] = $request->tagValueScope;
        }

        if (null !== $request->tagsScope) {
            @$bodyFlat['TagsScope'] = $request->tagsScope;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description, input parameters, and risk level of a rule.
     *
     * @remarks
     * This topic provides an example on how to change the risk level of the rule `cr-a260626622af0005****` to `3`, which indicates low risk level.
     *
     * @param request - UpdateConfigRuleRequest
     *
     * @returns UpdateConfigRuleResponse
     *
     * @param UpdateConfigRuleRequest $request
     *
     * @return UpdateConfigRuleResponse
     */
    public function updateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the resource monitoring scope of the current account.
     *
     * @remarks
     * This topic provides an example on how to change the resource monitoring scope of the current account to ACS::ECS::Instance.
     *
     * @param request - UpdateConfigurationRecorderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigurationRecorderResponse
     *
     * @param UpdateConfigurationRecorderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateConfigurationRecorderResponse
     */
    public function updateConfigurationRecorderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceTypes) {
            @$body['ResourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConfigurationRecorder',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource monitoring scope of the current account.
     *
     * @remarks
     * This topic provides an example on how to change the resource monitoring scope of the current account to ACS::ECS::Instance.
     *
     * @param request - UpdateConfigurationRecorderRequest
     *
     * @returns UpdateConfigurationRecorderResponse
     *
     * @param UpdateConfigurationRecorderRequest $request
     *
     * @return UpdateConfigurationRecorderResponse
     */
    public function updateConfigurationRecorder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigurationRecorderWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * Modifies a delivery channel.
     *
     * @remarks
     * This topic provides an example on how to change the status of the delivery channel whose ID is `cdc-8e45ff4e06a3a8****` to 0, which indicates that the delivery channel is disabled. After the delivery channel is disabled, Cloud Config retains the last delivery configuration and stops resource data delivery.
     *
     * @deprecated openAPI UpdateDeliveryChannel is deprecated, please use Config::2020-09-07::UpdateConfigDeliveryChannel,Config::2020-09-07::UpdateAggregateConfigDeliveryChannel instead
     *
     * @param request - UpdateDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeliveryChannelResponse
     *
     * @param UpdateDeliveryChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDeliveryChannelResponse
     */
    public function updateDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configurationItemChangeNotification) {
            @$body['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }

        if (null !== $request->configurationSnapshot) {
            @$body['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }

        if (null !== $request->deliveryChannelAssumeRoleArn) {
            @$body['DeliveryChannelAssumeRoleArn'] = $request->deliveryChannelAssumeRoleArn;
        }

        if (null !== $request->deliveryChannelCondition) {
            @$body['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }

        if (null !== $request->deliveryChannelId) {
            @$body['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        if (null !== $request->deliveryChannelName) {
            @$body['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->deliveryChannelTargetArn) {
            @$body['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->nonCompliantNotification) {
            @$body['NonCompliantNotification'] = $request->nonCompliantNotification;
        }

        if (null !== $request->oversizedDataOSSTargetArn) {
            @$body['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeliveryChannel',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Modifies a delivery channel.
     *
     * @remarks
     * This topic provides an example on how to change the status of the delivery channel whose ID is `cdc-8e45ff4e06a3a8****` to 0, which indicates that the delivery channel is disabled. After the delivery channel is disabled, Cloud Config retains the last delivery configuration and stops resource data delivery.
     *
     * @deprecated openAPI UpdateDeliveryChannel is deprecated, please use Config::2020-09-07::UpdateConfigDeliveryChannel,Config::2020-09-07::UpdateAggregateConfigDeliveryChannel instead
     *
     * @param request - UpdateDeliveryChannelRequest
     *
     * @returns UpdateDeliveryChannelResponse
     *
     * @param UpdateDeliveryChannelRequest $request
     *
     * @return UpdateDeliveryChannelResponse
     */
    public function updateDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the integration of a cloud service.
     *
     * @param request - UpdateIntegratedServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIntegratedServiceStatusResponse
     *
     * @param UpdateIntegratedServiceStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateIntegratedServiceStatusResponse
     */
    public function updateIntegratedServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregatorDeliveryDataType) {
            @$body['AggregatorDeliveryDataType'] = $request->aggregatorDeliveryDataType;
        }

        if (null !== $request->integratedTypes) {
            @$body['IntegratedTypes'] = $request->integratedTypes;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIntegratedServiceStatus',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIntegratedServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the integration of a cloud service.
     *
     * @param request - UpdateIntegratedServiceStatusRequest
     *
     * @returns UpdateIntegratedServiceStatusResponse
     *
     * @param UpdateIntegratedServiceStatusRequest $request
     *
     * @return UpdateIntegratedServiceStatusResponse
     */
    public function updateIntegratedServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIntegratedServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Updates a remediation template for a rule.
     *
     * @remarks
     * This topic describes how to change the execution mode of the `crr-909ba2d4716700eb****` remediation setting to `AUTO_EXECUTION`, which specifies automatic remediation. This topic also provides a sample request.
     *
     * @param request - UpdateRemediationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRemediationResponse
     *
     * @param UpdateRemediationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateRemediationResponse
     */
    public function updateRemediationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->invokeType) {
            @$body['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->params) {
            @$body['Params'] = $request->params;
        }

        if (null !== $request->remediationId) {
            @$body['RemediationId'] = $request->remediationId;
        }

        if (null !== $request->remediationTemplateId) {
            @$body['RemediationTemplateId'] = $request->remediationTemplateId;
        }

        if (null !== $request->remediationType) {
            @$body['RemediationType'] = $request->remediationType;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRemediation',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a remediation template for a rule.
     *
     * @remarks
     * This topic describes how to change the execution mode of the `crr-909ba2d4716700eb****` remediation setting to `AUTO_EXECUTION`, which specifies automatic remediation. This topic also provides a sample request.
     *
     * @param request - UpdateRemediationRequest
     *
     * @returns UpdateRemediationResponse
     *
     * @param UpdateRemediationRequest $request
     *
     * @return UpdateRemediationResponse
     */
    public function updateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRemediationWithOptions($request, $runtime);
    }
}
