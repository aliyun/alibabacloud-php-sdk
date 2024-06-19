<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateComplianceSummaryRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateComplianceSummaryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigDeliveryChannelsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigDeliveryChannelsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationStatisticsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationStatisticsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigDeliveryChannelsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigDeliveryChannelsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationStatisticsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponse;
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
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Config extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-shanghai'    => 'config.cn-shanghai.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Enables one or more rules in an account group.
     *  *
     * @description This topic provides an example on how to enable the `cr-5772ba41209e007b****` rule in the `ca-a4e5626622af0079****` account group.
     *  *
     * @param ActiveAggregateConfigRulesRequest $request ActiveAggregateConfigRulesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ActiveAggregateConfigRulesResponse ActiveAggregateConfigRulesResponse
     */
    public function activeAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActiveAggregateConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActiveAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables one or more rules in an account group.
     *  *
     * @description This topic provides an example on how to enable the `cr-5772ba41209e007b****` rule in the `ca-a4e5626622af0079****` account group.
     *  *
     * @param ActiveAggregateConfigRulesRequest $request ActiveAggregateConfigRulesRequest
     *
     * @return ActiveAggregateConfigRulesResponse ActiveAggregateConfigRulesResponse
     */
    public function activeAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Enables multiple rules at a time so that these rules enter the Active state.
     *  *
     * @param ActiveConfigRulesRequest $request ActiveConfigRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ActiveConfigRulesResponse ActiveConfigRulesResponse
     */
    public function activeConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActiveConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActiveConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables multiple rules at a time so that these rules enter the Active state.
     *  *
     * @param ActiveConfigRulesRequest $request ActiveConfigRulesRequest
     *
     * @return ActiveConfigRulesResponse ActiveConfigRulesResponse
     */
    public function activeConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Adds one or more rules in an account group to a compliance package.
     *  *
     * @description The sample request in this topic shows you how to add the `cr-6cc4626622af00e7****` rule in the `ca-75b4626622af00c3****` account group to the `cp-5bb1626622af00bd****` compliance package.
     *  *
     * @param AttachAggregateConfigRuleToCompliancePackRequest $request AttachAggregateConfigRuleToCompliancePackRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachAggregateConfigRuleToCompliancePackResponse AttachAggregateConfigRuleToCompliancePackResponse
     */
    public function attachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachAggregateConfigRuleToCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachAggregateConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds one or more rules in an account group to a compliance package.
     *  *
     * @description The sample request in this topic shows you how to add the `cr-6cc4626622af00e7****` rule in the `ca-75b4626622af00c3****` account group to the `cp-5bb1626622af00bd****` compliance package.
     *  *
     * @param AttachAggregateConfigRuleToCompliancePackRequest $request AttachAggregateConfigRuleToCompliancePackRequest
     *
     * @return AttachAggregateConfigRuleToCompliancePackResponse AttachAggregateConfigRuleToCompliancePackResponse
     */
    public function attachAggregateConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Adds one or more rules to a compliance package.
     *  *
     * @description This topic provides an example on how to add the `cr-6cc4626622af00e7****` rule to the `cp-5bb1626622af00bd****` compliance package.
     *  *
     * @param AttachConfigRuleToCompliancePackRequest $request AttachConfigRuleToCompliancePackRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachConfigRuleToCompliancePackResponse AttachConfigRuleToCompliancePackResponse
     */
    public function attachConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachConfigRuleToCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds one or more rules to a compliance package.
     *  *
     * @description This topic provides an example on how to add the `cr-6cc4626622af00e7****` rule to the `cp-5bb1626622af00bd****` compliance package.
     *  *
     * @param AttachConfigRuleToCompliancePackRequest $request AttachConfigRuleToCompliancePackRequest
     *
     * @return AttachConfigRuleToCompliancePackResponse AttachConfigRuleToCompliancePackResponse
     */
    public function attachConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Replicates compliance packages.
     *  *
     * @param CopyCompliancePacksRequest $request CopyCompliancePacksRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyCompliancePacksResponse CopyCompliancePacksResponse
     */
    public function copyCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desAggregatorIds)) {
            $query['DesAggregatorIds'] = $request->desAggregatorIds;
        }
        if (!Utils::isUnset($request->srcAggregatorId)) {
            $query['SrcAggregatorId'] = $request->srcAggregatorId;
        }
        if (!Utils::isUnset($request->srcCompliancePackIds)) {
            $query['SrcCompliancePackIds'] = $request->srcCompliancePackIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Replicates compliance packages.
     *  *
     * @param CopyCompliancePacksRequest $request CopyCompliancePacksRequest
     *
     * @return CopyCompliancePacksResponse CopyCompliancePacksResponse
     */
    public function copyCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @summary Replicates rules.
     *  *
     * @param CopyConfigRulesRequest $request CopyConfigRulesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyConfigRulesResponse CopyConfigRulesResponse
     */
    public function copyConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desAggregatorIds)) {
            $query['DesAggregatorIds'] = $request->desAggregatorIds;
        }
        if (!Utils::isUnset($request->srcAggregatorId)) {
            $query['SrcAggregatorId'] = $request->srcAggregatorId;
        }
        if (!Utils::isUnset($request->srcConfigRuleIds)) {
            $query['SrcConfigRuleIds'] = $request->srcConfigRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Replicates rules.
     *  *
     * @param CopyConfigRulesRequest $request CopyConfigRulesRequest
     *
     * @return CopyConfigRulesResponse CopyConfigRulesResponse
     */
    public function copyConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a downloadable resource file for the current Alibaba Cloud account.
     *  *
     * @param CreateAdvancedSearchFileRequest $request CreateAdvancedSearchFileRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAdvancedSearchFileResponse CreateAdvancedSearchFileResponse
     */
    public function createAdvancedSearchFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sql)) {
            $query['Sql'] = $request->sql;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAdvancedSearchFile',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAdvancedSearchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a downloadable resource file for the current Alibaba Cloud account.
     *  *
     * @param CreateAdvancedSearchFileRequest $request CreateAdvancedSearchFileRequest
     *
     * @return CreateAdvancedSearchFileResponse CreateAdvancedSearchFileResponse
     */
    public function createAdvancedSearchFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdvancedSearchFileWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a downloadable resource file for an account group.
     *  *
     * @description This topic provides an example on how to create a downloadable resource file for an account group whose ID is `ca-edd3626622af00b3****`. The resource file includes all the ECS instances in the account group.
     *  *
     * @param CreateAggregateAdvancedSearchFileRequest $request CreateAggregateAdvancedSearchFileRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAggregateAdvancedSearchFileResponse CreateAggregateAdvancedSearchFileResponse
     */
    public function createAggregateAdvancedSearchFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->sql)) {
            $query['Sql'] = $request->sql;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateAdvancedSearchFile',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateAdvancedSearchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a downloadable resource file for an account group.
     *  *
     * @description This topic provides an example on how to create a downloadable resource file for an account group whose ID is `ca-edd3626622af00b3****`. The resource file includes all the ECS instances in the account group.
     *  *
     * @param CreateAggregateAdvancedSearchFileRequest $request CreateAggregateAdvancedSearchFileRequest
     *
     * @return CreateAggregateAdvancedSearchFileResponse CreateAggregateAdvancedSearchFileResponse
     */
    public function createAggregateAdvancedSearchFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateAdvancedSearchFileWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a compliance package for an account group.
     *  *
     * @description You can use your management account to create up to five compliance packages for each account group.
     * This topic provides an example on how to create a compliance package named ClassifiedProtectionPreCheck for the `ca-f632626622af0079****` account group. The compliance package contains the `eip-bandwidth-limit` managed rule.
     *  *
     * @param CreateAggregateCompliancePackRequest $tmpReq  CreateAggregateCompliancePackRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAggregateCompliancePackResponse CreateAggregateCompliancePackResponse
     */
    public function createAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackName)) {
            $body['CompliancePackName'] = $request->compliancePackName;
        }
        if (!Utils::isUnset($request->compliancePackTemplateId)) {
            $body['CompliancePackTemplateId'] = $request->compliancePackTemplateId;
        }
        if (!Utils::isUnset($request->configRulesShrink)) {
            $body['ConfigRules'] = $request->configRulesShrink;
        }
        if (!Utils::isUnset($request->defaultEnable)) {
            $body['DefaultEnable'] = $request->defaultEnable;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeRegionIdsScope)) {
            $body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceGroupIdsScope)) {
            $body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->excludeTagsScope)) {
            $bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceIdsScope)) {
            $body['ResourceIdsScope'] = $request->resourceIdsScope;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        if (!Utils::isUnset($request->tagsScope)) {
            $bodyFlat['TagsScope'] = $request->tagsScope;
        }
        if (!Utils::isUnset($request->templateContent)) {
            $body['TemplateContent'] = $request->templateContent;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a compliance package for an account group.
     *  *
     * @description You can use your management account to create up to five compliance packages for each account group.
     * This topic provides an example on how to create a compliance package named ClassifiedProtectionPreCheck for the `ca-f632626622af0079****` account group. The compliance package contains the `eip-bandwidth-limit` managed rule.
     *  *
     * @param CreateAggregateCompliancePackRequest $request CreateAggregateCompliancePackRequest
     *
     * @return CreateAggregateCompliancePackResponse CreateAggregateCompliancePackResponse
     */
    public function createAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a delivery channel for an account group.
     *  *
     * @description In this example, a delivery channel is created for an account group. The ID of the account group is `ca-a4e5626622af0079****`. The type of the delivery channel is `OSS` and the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The result indicates that the delivery channel is created. The ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *  *
     * @param CreateAggregateConfigDeliveryChannelRequest $request CreateAggregateConfigDeliveryChannelRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAggregateConfigDeliveryChannelResponse CreateAggregateConfigDeliveryChannelResponse
     */
    public function createAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $query['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->deliveryChannelType)) {
            $query['DeliveryChannelType'] = $request->deliveryChannelType;
        }
        if (!Utils::isUnset($request->deliverySnapshotTime)) {
            $query['DeliverySnapshotTime'] = $request->deliverySnapshotTime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a delivery channel for an account group.
     *  *
     * @description In this example, a delivery channel is created for an account group. The ID of the account group is `ca-a4e5626622af0079****`. The type of the delivery channel is `OSS` and the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The result indicates that the delivery channel is created. The ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *  *
     * @param CreateAggregateConfigDeliveryChannelRequest $request CreateAggregateConfigDeliveryChannelRequest
     *
     * @return CreateAggregateConfigDeliveryChannelResponse CreateAggregateConfigDeliveryChannelResponse
     */
    public function createAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a rule for an account group.
     *  *
     * @description ### Limits
     * You can create up to 200 rules for each management account.
     * ### Usage notes
     * This topic provides an example on how to create a rule based on the required-tags managed rule in the `ca-a4e5626622af0079****` account group. The returned result shows that the rule is created and its ID is `cr-4e3d626622af0080****`.
     *  *
     * @param CreateAggregateConfigRuleRequest $tmpReq  CreateAggregateConfigRuleRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAggregateConfigRuleResponse CreateAggregateConfigRuleResponse
     */
    public function createAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->accountIdsScope)) {
            $body['AccountIdsScope'] = $request->accountIdsScope;
        }
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleTriggerTypes)) {
            $body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeAccountIdsScope)) {
            $body['ExcludeAccountIdsScope'] = $request->excludeAccountIdsScope;
        }
        if (!Utils::isUnset($request->excludeFolderIdsScope)) {
            $body['ExcludeFolderIdsScope'] = $request->excludeFolderIdsScope;
        }
        if (!Utils::isUnset($request->excludeRegionIdsScope)) {
            $body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceGroupIdsScope)) {
            $body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->excludeTagsScope)) {
            $bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }
        if (!Utils::isUnset($request->folderIdsScope)) {
            $body['FolderIdsScope'] = $request->folderIdsScope;
        }
        if (!Utils::isUnset($request->inputParametersShrink)) {
            $body['InputParameters'] = $request->inputParametersShrink;
        }
        if (!Utils::isUnset($request->maximumExecutionFrequency)) {
            $body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceIdsScope)) {
            $body['ResourceIdsScope'] = $request->resourceIdsScope;
        }
        if (!Utils::isUnset($request->resourceTypesScopeShrink)) {
            $body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->sourceIdentifier)) {
            $body['SourceIdentifier'] = $request->sourceIdentifier;
        }
        if (!Utils::isUnset($request->sourceOwner)) {
            $body['SourceOwner'] = $request->sourceOwner;
        }
        if (!Utils::isUnset($request->tagKeyLogicScope)) {
            $body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        if (!Utils::isUnset($request->tagsScope)) {
            $bodyFlat['TagsScope'] = $request->tagsScope;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a rule for an account group.
     *  *
     * @description ### Limits
     * You can create up to 200 rules for each management account.
     * ### Usage notes
     * This topic provides an example on how to create a rule based on the required-tags managed rule in the `ca-a4e5626622af0079****` account group. The returned result shows that the rule is created and its ID is `cr-4e3d626622af0080****`.
     *  *
     * @param CreateAggregateConfigRuleRequest $request CreateAggregateConfigRuleRequest
     *
     * @return CreateAggregateConfigRuleResponse CreateAggregateConfigRuleResponse
     */
    public function createAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a remediation template for a rule in an account group.
     *  *
     * @description This topic provides an example on how to create a remediation template for the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`. The returned result shows that a remediation template is created and the ID of the remediation template is `crr-909ba2d4716700eb****`.
     *  *
     * @param CreateAggregateRemediationRequest $request CreateAggregateRemediationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAggregateRemediationResponse CreateAggregateRemediationResponse
     */
    public function createAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->invokeType)) {
            $body['InvokeType'] = $request->invokeType;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->remediationTemplateId)) {
            $body['RemediationTemplateId'] = $request->remediationTemplateId;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $body['RemediationType'] = $request->remediationType;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a remediation template for a rule in an account group.
     *  *
     * @description This topic provides an example on how to create a remediation template for the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`. The returned result shows that a remediation template is created and the ID of the remediation template is `crr-909ba2d4716700eb****`.
     *  *
     * @param CreateAggregateRemediationRequest $request CreateAggregateRemediationRequest
     *
     * @return CreateAggregateRemediationResponse CreateAggregateRemediationResponse
     */
    public function createAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an account group.
     *  *
     * @description Each management account can create a maximum of five account groups. Each account group can contain a maximum of 200 member accounts.
     * Cloud Config supports the following types of account groups:
     * *   Global account group: The global account group contains all the member accounts that are added to the resource directory. A management account can create only one global account group.
     * *   Custom account group: If you create a custom account group, you must manually add all or specific member accounts from the resource directory to the custom account group.
     * This topic provides an example on how to create an account group of the `CUSTOM` type. The custom account group is named `Test_Group`, and its description is `Test account group`. The custom account group contains the following two member accounts:
     * *   Member account ID: `171322098523****`. Member account name: `Alice`.
     * *   Member account ID: `100532098349****`. Member account name: `Tom`.
     *  *
     * @param CreateAggregatorRequest $tmpReq  CreateAggregatorRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAggregatorResponse CreateAggregatorResponse
     */
    public function createAggregatorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregatorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aggregatorAccounts)) {
            $request->aggregatorAccountsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aggregatorAccounts, 'AggregatorAccounts', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorAccountsShrink)) {
            $body['AggregatorAccounts'] = $request->aggregatorAccountsShrink;
        }
        if (!Utils::isUnset($request->aggregatorName)) {
            $body['AggregatorName'] = $request->aggregatorName;
        }
        if (!Utils::isUnset($request->aggregatorType)) {
            $body['AggregatorType'] = $request->aggregatorType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAggregator',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an account group.
     *  *
     * @description Each management account can create a maximum of five account groups. Each account group can contain a maximum of 200 member accounts.
     * Cloud Config supports the following types of account groups:
     * *   Global account group: The global account group contains all the member accounts that are added to the resource directory. A management account can create only one global account group.
     * *   Custom account group: If you create a custom account group, you must manually add all or specific member accounts from the resource directory to the custom account group.
     * This topic provides an example on how to create an account group of the `CUSTOM` type. The custom account group is named `Test_Group`, and its description is `Test account group`. The custom account group contains the following two member accounts:
     * *   Member account ID: `171322098523****`. Member account name: `Alice`.
     * *   Member account ID: `100532098349****`. Member account name: `Tom`.
     *  *
     * @param CreateAggregatorRequest $request CreateAggregatorRequest
     *
     * @return CreateAggregatorResponse CreateAggregatorResponse
     */
    public function createAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregatorWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a compliance package for the current account.
     *  *
     * @description Each ordinary account can create up to five compliance packages.
     * This topic provides an example on how to create a compliance package named ClassifiedProtectionPreCheck. The compliance package contains a managed rule named `eip-bandwidth-limit`.
     *  *
     * @param CreateCompliancePackRequest $tmpReq  CreateCompliancePackRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCompliancePackResponse CreateCompliancePackResponse
     */
    public function createCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackName)) {
            $body['CompliancePackName'] = $request->compliancePackName;
        }
        if (!Utils::isUnset($request->compliancePackTemplateId)) {
            $body['CompliancePackTemplateId'] = $request->compliancePackTemplateId;
        }
        if (!Utils::isUnset($request->configRulesShrink)) {
            $body['ConfigRules'] = $request->configRulesShrink;
        }
        if (!Utils::isUnset($request->defaultEnable)) {
            $body['DefaultEnable'] = $request->defaultEnable;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeRegionIdsScope)) {
            $body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceGroupIdsScope)) {
            $body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->excludeTagsScope)) {
            $bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceIdsScope)) {
            $body['ResourceIdsScope'] = $request->resourceIdsScope;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        if (!Utils::isUnset($request->tagsScope)) {
            $bodyFlat['TagsScope'] = $request->tagsScope;
        }
        if (!Utils::isUnset($request->templateContent)) {
            $body['TemplateContent'] = $request->templateContent;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a compliance package for the current account.
     *  *
     * @description Each ordinary account can create up to five compliance packages.
     * This topic provides an example on how to create a compliance package named ClassifiedProtectionPreCheck. The compliance package contains a managed rule named `eip-bandwidth-limit`.
     *  *
     * @param CreateCompliancePackRequest $request CreateCompliancePackRequest
     *
     * @return CreateCompliancePackResponse CreateCompliancePackResponse
     */
    public function createCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a delivery channel.
     *  *
     * @description In this example, a delivery channel is created. The type of the delivery channel is `OSS` and the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The result indicates that the delivery channel is created, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *  *
     * @param CreateConfigDeliveryChannelRequest $request CreateConfigDeliveryChannelRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConfigDeliveryChannelResponse CreateConfigDeliveryChannelResponse
     */
    public function createConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $query['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->deliveryChannelType)) {
            $query['DeliveryChannelType'] = $request->deliveryChannelType;
        }
        if (!Utils::isUnset($request->deliverySnapshotTime)) {
            $query['DeliverySnapshotTime'] = $request->deliverySnapshotTime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a delivery channel.
     *  *
     * @description In this example, a delivery channel is created. The type of the delivery channel is `OSS` and the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The result indicates that the delivery channel is created, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *  *
     * @param CreateConfigDeliveryChannelRequest $request CreateConfigDeliveryChannelRequest
     *
     * @return CreateConfigDeliveryChannelResponse CreateConfigDeliveryChannelResponse
     */
    public function createConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a rule for the current account.
     *  *
     * @description ## Limits
     * You can use a common account to create up to 200 rules.
     *  *
     * @param CreateConfigRuleRequest $tmpReq  CreateConfigRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConfigRuleResponse CreateConfigRuleResponse
     */
    public function createConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleTriggerTypes)) {
            $body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeRegionIdsScope)) {
            $body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceGroupIdsScope)) {
            $body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->excludeTagsScope)) {
            $bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }
        if (!Utils::isUnset($request->inputParametersShrink)) {
            $body['InputParameters'] = $request->inputParametersShrink;
        }
        if (!Utils::isUnset($request->maximumExecutionFrequency)) {
            $body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceIdsScope)) {
            $body['ResourceIdsScope'] = $request->resourceIdsScope;
        }
        if (!Utils::isUnset($request->resourceTypesScopeShrink)) {
            $body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->sourceIdentifier)) {
            $body['SourceIdentifier'] = $request->sourceIdentifier;
        }
        if (!Utils::isUnset($request->sourceOwner)) {
            $body['SourceOwner'] = $request->sourceOwner;
        }
        if (!Utils::isUnset($request->tagKeyLogicScope)) {
            $body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        if (!Utils::isUnset($request->tagsScope)) {
            $bodyFlat['TagsScope'] = $request->tagsScope;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a rule for the current account.
     *  *
     * @description ## Limits
     * You can use a common account to create up to 200 rules.
     *  *
     * @param CreateConfigRuleRequest $request CreateConfigRuleRequest
     *
     * @return CreateConfigRuleResponse CreateConfigRuleResponse
     */
    public function createConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI CreateDeliveryChannel is deprecated, please use Config::2020-09-07::CreateConfigDeliveryChannel,Config::2020-09-07::CreateAggregateConfigDeliveryChannel instead
     *  *
     * @summary Creates a delivery channel.
     *  *
     * @description In this example, a delivery channel is created. The type of the delivery channel is `OSS`, the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`, and the ARN of the role that is assigned to the delivery channel is `acs:ram::100931896542****:role/aliyunserviceroleforconfig`. The returned result shows that the delivery channel is created, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *  *
     * Deprecated
     *
     * @param CreateDeliveryChannelRequest $request CreateDeliveryChannelRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDeliveryChannelResponse CreateDeliveryChannelResponse
     */
    public function createDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $body['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $body['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelAssumeRoleArn)) {
            $body['DeliveryChannelAssumeRoleArn'] = $request->deliveryChannelAssumeRoleArn;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $body['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $body['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $body['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->deliveryChannelType)) {
            $body['DeliveryChannelType'] = $request->deliveryChannelType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $body['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $body['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI CreateDeliveryChannel is deprecated, please use Config::2020-09-07::CreateConfigDeliveryChannel,Config::2020-09-07::CreateAggregateConfigDeliveryChannel instead
     *  *
     * @summary Creates a delivery channel.
     *  *
     * @description In this example, a delivery channel is created. The type of the delivery channel is `OSS`, the Alibaba Cloud Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`, and the ARN of the role that is assigned to the delivery channel is `acs:ram::100931896542****:role/aliyunserviceroleforconfig`. The returned result shows that the delivery channel is created, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`.
     *  *
     * Deprecated
     *
     * @param CreateDeliveryChannelRequest $request CreateDeliveryChannelRequest
     *
     * @return CreateDeliveryChannelResponse CreateDeliveryChannelResponse
     */
    public function createDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a remediation template for a rule.
     *  *
     * @description This topic provides an example on how to create a remediation template for the rule `cr-8a973ac2e2be00a2****`. The returned result shows that a remediation template is created and the ID of the remediation template is `crr-909ba2d4716700eb****`.
     *  *
     * @param CreateRemediationRequest $request CreateRemediationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRemediationResponse CreateRemediationResponse
     */
    public function createRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->invokeType)) {
            $body['InvokeType'] = $request->invokeType;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->remediationTemplateId)) {
            $body['RemediationTemplateId'] = $request->remediationTemplateId;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $body['RemediationType'] = $request->remediationType;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a remediation template for a rule.
     *  *
     * @description This topic provides an example on how to create a remediation template for the rule `cr-8a973ac2e2be00a2****`. The returned result shows that a remediation template is created and the ID of the remediation template is `crr-909ba2d4716700eb****`.
     *  *
     * @param CreateRemediationRequest $request CreateRemediationRequest
     *
     * @return CreateRemediationResponse CreateRemediationResponse
     */
    public function createRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemediationWithOptions($request, $runtime);
    }

    /**
     * @summary Disables one or more rules in an account group.
     *  *
     * @description This topic provides an example on how to disable the `cr-5772ba41209e007b****` rule in the `ca-04b3fd170e340007****` account group.
     *  *
     * @param DeactiveAggregateConfigRulesRequest $request DeactiveAggregateConfigRulesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeactiveAggregateConfigRulesResponse DeactiveAggregateConfigRulesResponse
     */
    public function deactiveAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeactiveAggregateConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactiveAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables one or more rules in an account group.
     *  *
     * @description This topic provides an example on how to disable the `cr-5772ba41209e007b****` rule in the `ca-04b3fd170e340007****` account group.
     *  *
     * @param DeactiveAggregateConfigRulesRequest $request DeactiveAggregateConfigRulesRequest
     *
     * @return DeactiveAggregateConfigRulesResponse DeactiveAggregateConfigRulesResponse
     */
    public function deactiveAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables one or more rules.
     *  *
     * @description In this example, the `cr-19a56457e0d90058****` rule is used.
     *  *
     * @param DeactiveConfigRulesRequest $request DeactiveConfigRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeactiveConfigRulesResponse DeactiveConfigRulesResponse
     */
    public function deactiveConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeactiveConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactiveConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables one or more rules.
     *  *
     * @description In this example, the `cr-19a56457e0d90058****` rule is used.
     *  *
     * @param DeactiveConfigRulesRequest $request DeactiveConfigRulesRequest
     *
     * @return DeactiveConfigRulesResponse DeactiveConfigRulesResponse
     */
    public function deactiveConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the compliance packages of an account group.
     *  *
     * @description This topic provides an example on how to delete the `cp-541e626622af0087****` compliance package from the `ca-04b3fd170e340007****` account group.
     *  *
     * @param DeleteAggregateCompliancePacksRequest $request DeleteAggregateCompliancePacksRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAggregateCompliancePacksResponse DeleteAggregateCompliancePacksResponse
     */
    public function deleteAggregateCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackIds)) {
            $body['CompliancePackIds'] = $request->compliancePackIds;
        }
        if (!Utils::isUnset($request->deleteRule)) {
            $body['DeleteRule'] = $request->deleteRule;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregateCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregateCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the compliance packages of an account group.
     *  *
     * @description This topic provides an example on how to delete the `cp-541e626622af0087****` compliance package from the `ca-04b3fd170e340007****` account group.
     *  *
     * @param DeleteAggregateCompliancePacksRequest $request DeleteAggregateCompliancePacksRequest
     *
     * @return DeleteAggregateCompliancePacksResponse DeleteAggregateCompliancePacksResponse
     */
    public function deleteAggregateCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a delivery channel from an account group.
     *  *
     * @description This topic provides an example on how to delete the `cdc-38c3013b46c9002c****` delivery channel from the `ca-23c6626622af0041****` account group. The returned result shows that the `cdc-38c3013b46c9002c****` delivery channel is deleted.
     *  *
     * @param DeleteAggregateConfigDeliveryChannelRequest $request DeleteAggregateConfigDeliveryChannelRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAggregateConfigDeliveryChannelResponse DeleteAggregateConfigDeliveryChannelResponse
     */
    public function deleteAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a delivery channel from an account group.
     *  *
     * @description This topic provides an example on how to delete the `cdc-38c3013b46c9002c****` delivery channel from the `ca-23c6626622af0041****` account group. The returned result shows that the `cdc-38c3013b46c9002c****` delivery channel is deleted.
     *  *
     * @param DeleteAggregateConfigDeliveryChannelRequest $request DeleteAggregateConfigDeliveryChannelRequest
     *
     * @return DeleteAggregateConfigDeliveryChannelResponse DeleteAggregateConfigDeliveryChannelResponse
     */
    public function deleteAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more rules from an account group.
     *  *
     * @description ### Background information
     * You can delete a rule in the Cloud Config console. After you delete the rule, the configurations of the rule are deleted.
     * ### Usage notes
     * This topic provides an example on how to delete the `cr-4e3d626622af0080****` rule from the `ca-a4e5626622af0079****` account group.
     *  *
     * @param DeleteAggregateConfigRulesRequest $request DeleteAggregateConfigRulesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAggregateConfigRulesResponse DeleteAggregateConfigRulesResponse
     */
    public function deleteAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregateConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more rules from an account group.
     *  *
     * @description ### Background information
     * You can delete a rule in the Cloud Config console. After you delete the rule, the configurations of the rule are deleted.
     * ### Usage notes
     * This topic provides an example on how to delete the `cr-4e3d626622af0080****` rule from the `ca-a4e5626622af0079****` account group.
     *  *
     * @param DeleteAggregateConfigRulesRequest $request DeleteAggregateConfigRulesRequest
     *
     * @return DeleteAggregateConfigRulesResponse DeleteAggregateConfigRulesResponse
     */
    public function deleteAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more remediation templates from a rule in an account group.
     *  *
     * @description This topic provides an example on how to delete the remediation template whose ID is `crr-909ba2d4716700eb****` from the account group whose ID is `ca-6b4a626622af0012****`. The returned result shows that the remediation template whose ID is `crr-909ba2d4716700eb****` is deleted.
     *  *
     * @param DeleteAggregateRemediationsRequest $request DeleteAggregateRemediationsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAggregateRemediationsResponse DeleteAggregateRemediationsResponse
     */
    public function deleteAggregateRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->remediationIds)) {
            $body['RemediationIds'] = $request->remediationIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregateRemediations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregateRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more remediation templates from a rule in an account group.
     *  *
     * @description This topic provides an example on how to delete the remediation template whose ID is `crr-909ba2d4716700eb****` from the account group whose ID is `ca-6b4a626622af0012****`. The returned result shows that the remediation template whose ID is `crr-909ba2d4716700eb****` is deleted.
     *  *
     * @param DeleteAggregateRemediationsRequest $request DeleteAggregateRemediationsRequest
     *
     * @return DeleteAggregateRemediationsResponse DeleteAggregateRemediationsResponse
     */
    public function deleteAggregateRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateRemediationsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an account group.
     *  *
     * @description This topic provides an example on how to delete the account group whose ID is `ca-9190626622af00a9****`.
     *  *
     * @param DeleteAggregatorsRequest $request DeleteAggregatorsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAggregatorsResponse DeleteAggregatorsResponse
     */
    public function deleteAggregatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorIds)) {
            $body['AggregatorIds'] = $request->aggregatorIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAggregators',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAggregatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an account group.
     *  *
     * @description This topic provides an example on how to delete the account group whose ID is `ca-9190626622af00a9****`.
     *  *
     * @param DeleteAggregatorsRequest $request DeleteAggregatorsRequest
     *
     * @return DeleteAggregatorsResponse DeleteAggregatorsResponse
     */
    public function deleteAggregators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregatorsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more compliance packages.
     *  *
     * @description This topic provides an example on how to delete the `cp-541e626622af0087****` compliance package.
     *  *
     * @param DeleteCompliancePacksRequest $request DeleteCompliancePacksRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCompliancePacksResponse DeleteCompliancePacksResponse
     */
    public function deleteCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackIds)) {
            $body['CompliancePackIds'] = $request->compliancePackIds;
        }
        if (!Utils::isUnset($request->deleteRule)) {
            $body['DeleteRule'] = $request->deleteRule;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more compliance packages.
     *  *
     * @description This topic provides an example on how to delete the `cp-541e626622af0087****` compliance package.
     *  *
     * @param DeleteCompliancePacksRequest $request DeleteCompliancePacksRequest
     *
     * @return DeleteCompliancePacksResponse DeleteCompliancePacksResponse
     */
    public function deleteCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a delivery channel.
     *  *
     * @description This topic provides an example on how to delete the `cdc-38c3013b46c9002c****` delivery channel. The returned result shows that the `cdc-38c3013b46c9002c****` delivery channel is deleted.
     *  *
     * @param DeleteConfigDeliveryChannelRequest $request DeleteConfigDeliveryChannelRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConfigDeliveryChannelResponse DeleteConfigDeliveryChannelResponse
     */
    public function deleteConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a delivery channel.
     *  *
     * @description This topic provides an example on how to delete the `cdc-38c3013b46c9002c****` delivery channel. The returned result shows that the `cdc-38c3013b46c9002c****` delivery channel is deleted.
     *  *
     * @param DeleteConfigDeliveryChannelRequest $request DeleteConfigDeliveryChannelRequest
     *
     * @return DeleteConfigDeliveryChannelResponse DeleteConfigDeliveryChannelResponse
     */
    public function deleteConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes rules.
     *  *
     * @description In this example, the rule whose ID is cr-9908626622af0035\\*\\*\\*\\* is deleted.
     *  *
     * @param DeleteConfigRulesRequest $request DeleteConfigRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConfigRulesResponse DeleteConfigRulesResponse
     */
    public function deleteConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes rules.
     *  *
     * @description In this example, the rule whose ID is cr-9908626622af0035\\*\\*\\*\\* is deleted.
     *  *
     * @param DeleteConfigRulesRequest $request DeleteConfigRulesRequest
     *
     * @return DeleteConfigRulesResponse DeleteConfigRulesResponse
     */
    public function deleteConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more configured remediation templates that are associated with a rule.
     *  *
     * @description This topic provides an example on how to delete the remediation template `crr-909ba2d4716700eb****`. The returned result shows that the remediation template whose ID is `crr-909ba2d4716700eb****` is deleted.
     *  *
     * @param DeleteRemediationsRequest $request DeleteRemediationsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRemediationsResponse DeleteRemediationsResponse
     */
    public function deleteRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->remediationIds)) {
            $body['RemediationIds'] = $request->remediationIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRemediations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more configured remediation templates that are associated with a rule.
     *  *
     * @description This topic provides an example on how to delete the remediation template `crr-909ba2d4716700eb****`. The returned result shows that the remediation template whose ID is `crr-909ba2d4716700eb****` is deleted.
     *  *
     * @param DeleteRemediationsRequest $request DeleteRemediationsRequest
     *
     * @return DeleteRemediationsResponse DeleteRemediationsResponse
     */
    public function deleteRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemediationsWithOptions($request, $runtime);
    }

    /**
     * @summary This topic provides an example on how to query the details of a remediation configuration whose ID is crr-f381cf0c1c2f004e\\*\\*\\*\\*.
     *  *
     * @param DescribeRemediationRequest $request DescribeRemediationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRemediationResponse DescribeRemediationResponse
     */
    public function describeRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This topic provides an example on how to query the details of a remediation configuration whose ID is crr-f381cf0c1c2f004e\\*\\*\\*\\*.
     *  *
     * @param DescribeRemediationRequest $request DescribeRemediationRequest
     *
     * @return DescribeRemediationResponse DescribeRemediationResponse
     */
    public function describeRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRemediationWithOptions($request, $runtime);
    }

    /**
     * @summary Removes one or more rules in an account group from a compliance package.
     *  *
     * @description ### Prerequisites
     * One or more rules are added to a compliance package.
     * ### Usage notes
     * The sample request in this topic shows you how to remove the `cr-6cc4626622af00e7****` rule in the `ca-75b4626622af00c3****` account group from the `cp-5bb1626622af00bd****` compliance package.
     *  *
     * @param DetachAggregateConfigRuleToCompliancePackRequest $request DetachAggregateConfigRuleToCompliancePackRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachAggregateConfigRuleToCompliancePackResponse DetachAggregateConfigRuleToCompliancePackResponse
     */
    public function detachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachAggregateConfigRuleToCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachAggregateConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes one or more rules in an account group from a compliance package.
     *  *
     * @description ### Prerequisites
     * One or more rules are added to a compliance package.
     * ### Usage notes
     * The sample request in this topic shows you how to remove the `cr-6cc4626622af00e7****` rule in the `ca-75b4626622af00c3****` account group from the `cp-5bb1626622af00bd****` compliance package.
     *  *
     * @param DetachAggregateConfigRuleToCompliancePackRequest $request DetachAggregateConfigRuleToCompliancePackRequest
     *
     * @return DetachAggregateConfigRuleToCompliancePackResponse DetachAggregateConfigRuleToCompliancePackResponse
     */
    public function detachAggregateConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAggregateConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Removes one or more rules from a compliance package.
     *  *
     * @description ### Prerequisites
     * One or more rules are added to a compliance package.
     * ### Usage notes
     * This topic provides an example on how to remove the `cr-6cc4626622af00e7****` rule from the `cp-5bb1626622af00bd****` compliance package.
     *  *
     * @param DetachConfigRuleToCompliancePackRequest $request DetachConfigRuleToCompliancePackRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachConfigRuleToCompliancePackResponse DetachConfigRuleToCompliancePackResponse
     */
    public function detachConfigRuleToCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachConfigRuleToCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachConfigRuleToCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes one or more rules from a compliance package.
     *  *
     * @description ### Prerequisites
     * One or more rules are added to a compliance package.
     * ### Usage notes
     * This topic provides an example on how to remove the `cr-6cc4626622af00e7****` rule from the `cp-5bb1626622af00bd****` compliance package.
     *  *
     * @param DetachConfigRuleToCompliancePackRequest $request DetachConfigRuleToCompliancePackRequest
     *
     * @return DetachConfigRuleToCompliancePackResponse DetachConfigRuleToCompliancePackResponse
     */
    public function detachConfigRuleToCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachConfigRuleToCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Executes evaluation rules to evaluate resources.
     *  *
     * @param EvaluatePreConfigRulesRequest $tmpReq  EvaluatePreConfigRulesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return EvaluatePreConfigRulesResponse EvaluatePreConfigRulesResponse
     */
    public function evaluatePreConfigRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EvaluatePreConfigRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceEvaluateItems)) {
            $request->resourceEvaluateItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceEvaluateItems, 'ResourceEvaluateItems', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->enableManagedRules)) {
            $body['EnableManagedRules'] = $request->enableManagedRules;
        }
        if (!Utils::isUnset($request->resourceEvaluateItemsShrink)) {
            $body['ResourceEvaluateItems'] = $request->resourceEvaluateItemsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EvaluatePreConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EvaluatePreConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Executes evaluation rules to evaluate resources.
     *  *
     * @param EvaluatePreConfigRulesRequest $request EvaluatePreConfigRulesRequest
     *
     * @return EvaluatePreConfigRulesResponse EvaluatePreConfigRulesResponse
     */
    public function evaluatePreConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluatePreConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a compliance evaluation report based on a compliance package in an account group.
     *  *
     * @description > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetAggregateConfigRulesReport operation. For more information, see [GetAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262699.html).
     * This topic provides an example on how to generate a compliance evaluation report based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *  *
     * @param GenerateAggregateCompliancePackReportRequest $request GenerateAggregateCompliancePackReportRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateAggregateCompliancePackReportResponse GenerateAggregateCompliancePackReportResponse
     */
    public function generateAggregateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $body['CompliancePackId'] = $request->compliancePackId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateAggregateCompliancePackReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAggregateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a compliance evaluation report based on a compliance package in an account group.
     *  *
     * @description > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetAggregateConfigRulesReport operation. For more information, see [GetAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262699.html).
     * This topic provides an example on how to generate a compliance evaluation report based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *  *
     * @param GenerateAggregateCompliancePackReportRequest $request GenerateAggregateCompliancePackReportRequest
     *
     * @return GenerateAggregateCompliancePackReportResponse GenerateAggregateCompliancePackReportResponse
     */
    public function generateAggregateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a compliance evaluation report based on all rules in an account group.
     *  *
     * @description > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetAggregateConfigRulesReport operation. For more information, see [GetAggregateConfigRulesReport](https://help.aliyun.com/document_detail/262706.html).
     * The topic provides an example on how to generate a compliance evaluation report based on all rules in the `ca-f632626622af0079****` account group.
     *  *
     * @param GenerateAggregateConfigRulesReportRequest $request GenerateAggregateConfigRulesReportRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateAggregateConfigRulesReportResponse GenerateAggregateConfigRulesReportResponse
     */
    public function generateAggregateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $body['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateAggregateConfigRulesReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAggregateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a compliance evaluation report based on all rules in an account group.
     *  *
     * @description > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetAggregateConfigRulesReport operation. For more information, see [GetAggregateConfigRulesReport](https://help.aliyun.com/document_detail/262706.html).
     * The topic provides an example on how to generate a compliance evaluation report based on all rules in the `ca-f632626622af0079****` account group.
     *  *
     * @param GenerateAggregateConfigRulesReportRequest $request GenerateAggregateConfigRulesReportRequest
     *
     * @return GenerateAggregateConfigRulesReportResponse GenerateAggregateConfigRulesReportResponse
     */
    public function generateAggregateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a downloadable inventory for global resources in an account group.
     *  *
     * @description This topic provides an example to show how to generate a downloadable inventory for global resources in the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *  *
     * @param GenerateAggregateResourceInventoryRequest $request GenerateAggregateResourceInventoryRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateAggregateResourceInventoryResponse GenerateAggregateResourceInventoryResponse
     */
    public function generateAggregateResourceInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountIds)) {
            $query['AccountIds'] = $request->accountIds;
        }
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceDeleted)) {
            $query['ResourceDeleted'] = $request->resourceDeleted;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateAggregateResourceInventory',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAggregateResourceInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a downloadable inventory for global resources in an account group.
     *  *
     * @description This topic provides an example to show how to generate a downloadable inventory for global resources in the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *  *
     * @param GenerateAggregateResourceInventoryRequest $request GenerateAggregateResourceInventoryRequest
     *
     * @return GenerateAggregateResourceInventoryResponse GenerateAggregateResourceInventoryResponse
     */
    public function generateAggregateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a compliance evaluation report based on a compliance package.
     *  *
     * @description > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetCompliancePackReport operation. For more information, see [GetCompliancePackReport](https://help.aliyun.com/document_detail/263347.html).
     * This topic provides an example on how to generate a compliance evaluation report based on the `cp-a8a8626622af0082****` compliance package.
     *  *
     * @param GenerateCompliancePackReportRequest $request GenerateCompliancePackReportRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateCompliancePackReportResponse GenerateCompliancePackReportResponse
     */
    public function generateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $body['CompliancePackId'] = $request->compliancePackId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateCompliancePackReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a compliance evaluation report based on a compliance package.
     *  *
     * @description > You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetCompliancePackReport operation. For more information, see [GetCompliancePackReport](https://help.aliyun.com/document_detail/263347.html).
     * This topic provides an example on how to generate a compliance evaluation report based on the `cp-a8a8626622af0082****` compliance package.
     *  *
     * @param GenerateCompliancePackReportRequest $request GenerateCompliancePackReportRequest
     *
     * @return GenerateCompliancePackReportResponse GenerateCompliancePackReportResponse
     */
    public function generateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a compliance evaluation report based on all existing rules.
     *  *
     * @description >  You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetConfigRulesReport operation. For more information, see [GetConfigRulesReport](https://help.aliyun.com/document_detail/263608.html).
     * This topic provides an example of how to generate a compliance evaluation report based on all existing rules.
     *  *
     * @param GenerateConfigRulesReportRequest $request GenerateConfigRulesReportRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateConfigRulesReportResponse GenerateConfigRulesReportResponse
     */
    public function generateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $body['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateConfigRulesReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a compliance evaluation report based on all existing rules.
     *  *
     * @description >  You can call this operation to generate the latest compliance evaluation report. To download the report, call the GetConfigRulesReport operation. For more information, see [GetConfigRulesReport](https://help.aliyun.com/document_detail/263608.html).
     * This topic provides an example of how to generate a compliance evaluation report based on all existing rules.
     *  *
     * @param GenerateConfigRulesReportRequest $request GenerateConfigRulesReportRequest
     *
     * @return GenerateConfigRulesReportResponse GenerateConfigRulesReportResponse
     */
    public function generateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a resource inventory for global resources.
     *  *
     * @description This topic provides an example on how to generate a resource inventory for global resources of the current account.
     *  *
     * @param GenerateResourceInventoryRequest $request GenerateResourceInventoryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateResourceInventoryResponse GenerateResourceInventoryResponse
     */
    public function generateResourceInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceDeleted)) {
            $query['ResourceDeleted'] = $request->resourceDeleted;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateResourceInventory',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateResourceInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a resource inventory for global resources.
     *  *
     * @description This topic provides an example on how to generate a resource inventory for global resources of the current account.
     *  *
     * @param GenerateResourceInventoryRequest $request GenerateResourceInventoryRequest
     *
     * @return GenerateResourceInventoryResponse GenerateResourceInventoryResponse
     */
    public function generateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the last resource advanced search file that is generated within the current account. You can call this operation to obtain the URL of the resource advanced search file.
     *  *
     * @description ### [](#)Prerequisites
     * You must call the [CreateAdvancedSearchFile](https://help.aliyun.com/document_detail/2511967.html) operation to create a resource advanced search file. Then, you can call this operation to obtain the URL of the resource advanced search file.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAdvancedSearchFileResponse GetAdvancedSearchFileResponse
     */
    public function getAdvancedSearchFileWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAdvancedSearchFile',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAdvancedSearchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the last resource advanced search file that is generated within the current account. You can call this operation to obtain the URL of the resource advanced search file.
     *  *
     * @description ### [](#)Prerequisites
     * You must call the [CreateAdvancedSearchFile](https://help.aliyun.com/document_detail/2511967.html) operation to create a resource advanced search file. Then, you can call this operation to obtain the URL of the resource advanced search file.
     *  *
     * @return GetAdvancedSearchFileResponse GetAdvancedSearchFileResponse
     */
    public function getAdvancedSearchFile()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdvancedSearchFileWithOptions($runtime);
    }

    /**
     * @summary Queries the compliance evaluation results of member accounts for which a compliance package takes effect in an account group.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results of member accounts for which the `cp-541e626622af0087****` compliance package takes effect in the `ca-04b3fd170e340007****` account group. The returned result shows that two member accounts are monitored by the compliance package and they are both evaluated as compliant.
     *  *
     * @param GetAggregateAccountComplianceByPackRequest $request GetAggregateAccountComplianceByPackRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateAccountComplianceByPackResponse GetAggregateAccountComplianceByPackResponse
     */
    public function getAggregateAccountComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateAccountComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateAccountComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation results of member accounts for which a compliance package takes effect in an account group.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results of member accounts for which the `cp-541e626622af0087****` compliance package takes effect in the `ca-04b3fd170e340007****` account group. The returned result shows that two member accounts are monitored by the compliance package and they are both evaluated as compliant.
     *  *
     * @param GetAggregateAccountComplianceByPackRequest $request GetAggregateAccountComplianceByPackRequest
     *
     * @return GetAggregateAccountComplianceByPackResponse GetAggregateAccountComplianceByPackResponse
     */
    public function getAggregateAccountComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateAccountComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the most recently generated resource file of an account group.
     *  *
     * @param GetAggregateAdvancedSearchFileRequest $request GetAggregateAdvancedSearchFileRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateAdvancedSearchFileResponse GetAggregateAdvancedSearchFileResponse
     */
    public function getAggregateAdvancedSearchFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateAdvancedSearchFile',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateAdvancedSearchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the most recently generated resource file of an account group.
     *  *
     * @param GetAggregateAdvancedSearchFileRequest $request GetAggregateAdvancedSearchFileRequest
     *
     * @return GetAggregateAdvancedSearchFileResponse GetAggregateAdvancedSearchFileResponse
     */
    public function getAggregateAdvancedSearchFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateAdvancedSearchFileWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a compliance package in an account group.
     *  *
     * @description The topic provides an example on how to query the details of a compliance package whose ID is `cp-fdc8626622af00f9****` in an account group whose ID is `ca-f632626622af0079****`.
     *  *
     * @param GetAggregateCompliancePackRequest $request GetAggregateCompliancePackRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateCompliancePackResponse GetAggregateCompliancePackResponse
     */
    public function getAggregateCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a compliance package in an account group.
     *  *
     * @description The topic provides an example on how to query the details of a compliance package whose ID is `cp-fdc8626622af00f9****` in an account group whose ID is `ca-f632626622af0079****`.
     *  *
     * @param GetAggregateCompliancePackRequest $request GetAggregateCompliancePackRequest
     *
     * @return GetAggregateCompliancePackResponse GetAggregateCompliancePackResponse
     */
    public function getAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation report that is generated based on a compliance package of an account group.
     *  *
     * @description > Before you call this operation, you must call the GenerateAggregateCompliancePackReport operation to generate the latest compliance evaluation report based on a compliance package. For more information, see [GenerateAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262687.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *  *
     * @param GetAggregateCompliancePackReportRequest $request GetAggregateCompliancePackReportRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateCompliancePackReportResponse GetAggregateCompliancePackReportResponse
     */
    public function getAggregateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateCompliancePackReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation report that is generated based on a compliance package of an account group.
     *  *
     * @description > Before you call this operation, you must call the GenerateAggregateCompliancePackReport operation to generate the latest compliance evaluation report based on a compliance package. For more information, see [GenerateAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262687.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *  *
     * @param GetAggregateCompliancePackReportRequest $request GetAggregateCompliancePackReportRequest
     *
     * @return GetAggregateCompliancePackReportResponse GetAggregateCompliancePackReportResponse
     */
    public function getAggregateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance statistics of an account group.
     *  *
     * @description This topic provides an example on how to query the compliance statistics of resources and rules in the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *  *
     * @param GetAggregateComplianceSummaryRequest $request GetAggregateComplianceSummaryRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateComplianceSummaryResponse GetAggregateComplianceSummaryResponse
     */
    public function getAggregateComplianceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateComplianceSummary',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateComplianceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance statistics of an account group.
     *  *
     * @description This topic provides an example on how to query the compliance statistics of resources and rules in the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *  *
     * @param GetAggregateComplianceSummaryRequest $request GetAggregateComplianceSummaryRequest
     *
     * @return GetAggregateComplianceSummaryResponse GetAggregateComplianceSummaryResponse
     */
    public function getAggregateComplianceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateComplianceSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a delivery channel in an account group.
     *  *
     * @param GetAggregateConfigDeliveryChannelRequest $request GetAggregateConfigDeliveryChannelRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateConfigDeliveryChannelResponse GetAggregateConfigDeliveryChannelResponse
     */
    public function getAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a delivery channel in an account group.
     *  *
     * @param GetAggregateConfigDeliveryChannelRequest $request GetAggregateConfigDeliveryChannelRequest
     *
     * @return GetAggregateConfigDeliveryChannelResponse GetAggregateConfigDeliveryChannelResponse
     */
    public function getAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary 获取账号组规则详情
     *  *
     * @description This example shows how to query the details of the `cr-7f7d626622af0041****` rule in the `ca-7f00626622af0041****` account group.
     *  *
     * @param GetAggregateConfigRuleRequest $request GetAggregateConfigRuleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateConfigRuleResponse GetAggregateConfigRuleResponse
     */
    public function getAggregateConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取账号组规则详情
     *  *
     * @description This example shows how to query the details of the `cr-7f7d626622af0041****` rule in the `ca-7f00626622af0041****` account group.
     *  *
     * @param GetAggregateConfigRuleRequest $request GetAggregateConfigRuleRequest
     *
     * @return GetAggregateConfigRuleResponse GetAggregateConfigRuleResponse
     */
    public function getAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries compliance evaluation results based on the rules in a compliance package in an account group.
     *  *
     * @description The sample request in this topic shows you how to query the compliance evaluation results based on rules in the `cp-541e626622af0087****` compliance package that is created for the `ca-04b3fd170e340007****` account group. The return result shows a total of `one` rule. `No resources` are evaluated as non-compliant based on the rule.
     *  *
     * @param GetAggregateConfigRuleComplianceByPackRequest $request GetAggregateConfigRuleComplianceByPackRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateConfigRuleComplianceByPackResponse GetAggregateConfigRuleComplianceByPackResponse
     */
    public function getAggregateConfigRuleComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigRuleComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigRuleComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries compliance evaluation results based on the rules in a compliance package in an account group.
     *  *
     * @description The sample request in this topic shows you how to query the compliance evaluation results based on rules in the `cp-541e626622af0087****` compliance package that is created for the `ca-04b3fd170e340007****` account group. The return result shows a total of `one` rule. `No resources` are evaluated as non-compliant based on the rule.
     *  *
     * @param GetAggregateConfigRuleComplianceByPackRequest $request GetAggregateConfigRuleComplianceByPackRequest
     *
     * @return GetAggregateConfigRuleComplianceByPackResponse GetAggregateConfigRuleComplianceByPackResponse
     */
    public function getAggregateConfigRuleComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the summary of compliance evaluation results by rule risk level in an account group.
     *  *
     * @description This topic provides an example on how to query the summary of compliance evaluation results by rule risk level in the `ca-3a58626622af0005****` account group. The returned result shows four rules that are specified with the high risk level. One of the rules detects non-compliant resources, and the resources evaluated by the remaining three are compliant.
     *  *
     * @param GetAggregateConfigRuleSummaryByRiskLevelRequest $request GetAggregateConfigRuleSummaryByRiskLevelRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelResponse GetAggregateConfigRuleSummaryByRiskLevelResponse
     */
    public function getAggregateConfigRuleSummaryByRiskLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigRuleSummaryByRiskLevel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigRuleSummaryByRiskLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the summary of compliance evaluation results by rule risk level in an account group.
     *  *
     * @description This topic provides an example on how to query the summary of compliance evaluation results by rule risk level in the `ca-3a58626622af0005****` account group. The returned result shows four rules that are specified with the high risk level. One of the rules detects non-compliant resources, and the resources evaluated by the remaining three are compliant.
     *  *
     * @param GetAggregateConfigRuleSummaryByRiskLevelRequest $request GetAggregateConfigRuleSummaryByRiskLevelRequest
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelResponse GetAggregateConfigRuleSummaryByRiskLevelResponse
     */
    public function getAggregateConfigRuleSummaryByRiskLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleSummaryByRiskLevelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation report that is generated based on all rules in an account group.
     *  *
     * @description > Before you call this operation, you must call the GenerateAggregateConfigRulesReport operation to generate the latest compliance evaluation report based on all rules in an account group. For more information, see [GenerateAggregateConfigRulesReport](https://help.aliyun.com/document_detail/262701.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on all rules in the `ca-f632626622af0079****` account group.
     *  *
     * @param GetAggregateConfigRulesReportRequest $request GetAggregateConfigRulesReportRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateConfigRulesReportResponse GetAggregateConfigRulesReportResponse
     */
    public function getAggregateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateConfigRulesReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation report that is generated based on all rules in an account group.
     *  *
     * @description > Before you call this operation, you must call the GenerateAggregateConfigRulesReport operation to generate the latest compliance evaluation report based on all rules in an account group. For more information, see [GenerateAggregateConfigRulesReport](https://help.aliyun.com/document_detail/262701.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on all rules in the `ca-f632626622af0079****` account group.
     *  *
     * @param GetAggregateConfigRulesReportRequest $request GetAggregateConfigRulesReportRequest
     *
     * @return GetAggregateConfigRulesReportResponse GetAggregateConfigRulesReportResponse
     */
    public function getAggregateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a resource in an account group.
     *  *
     * @description This topic provides an example on how to query the `new-bucket` resource in the `ca-5885626622af0008****` account group.
     *  *
     * @param GetAggregateDiscoveredResourceRequest $request GetAggregateDiscoveredResourceRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateDiscoveredResourceResponse GetAggregateDiscoveredResourceResponse
     */
    public function getAggregateDiscoveredResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->complianceOption)) {
            $query['ComplianceOption'] = $request->complianceOption;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateDiscoveredResource',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a resource in an account group.
     *  *
     * @description This topic provides an example on how to query the `new-bucket` resource in the `ca-5885626622af0008****` account group.
     *  *
     * @param GetAggregateDiscoveredResourceRequest $request GetAggregateDiscoveredResourceRequest
     *
     * @return GetAggregateDiscoveredResourceResponse GetAggregateDiscoveredResourceResponse
     */
    public function getAggregateDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries compliance evaluation results based on the rules in a compliance package in an account group.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results based on the `cr-d369626622af008e****` rule in the `ca-a4e5626622af0079****` account group. The returned result shows that a total of 10 resources are evaluated by the rule and five of them are evaluated as compliant.
     *  *
     * @param GetAggregateResourceComplianceByConfigRuleRequest $request GetAggregateResourceComplianceByConfigRuleRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceComplianceByConfigRuleResponse GetAggregateResourceComplianceByConfigRuleResponse
     */
    public function getAggregateResourceComplianceByConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceByConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceByConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries compliance evaluation results based on the rules in a compliance package in an account group.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results based on the `cr-d369626622af008e****` rule in the `ca-a4e5626622af0079****` account group. The returned result shows that a total of 10 resources are evaluated by the rule and five of them are evaluated as compliant.
     *  *
     * @param GetAggregateResourceComplianceByConfigRuleRequest $request GetAggregateResourceComplianceByConfigRuleRequest
     *
     * @return GetAggregateResourceComplianceByConfigRuleResponse GetAggregateResourceComplianceByConfigRuleResponse
     */
    public function getAggregateResourceComplianceByConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceByConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation results of resources evaluated based on a compliance package of an account group.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results of resources monitored based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****`account group. The returned result shows that the total number of monitored resources is `10` and the number of non-compliant resources is `7`.
     *  *
     * @param GetAggregateResourceComplianceByPackRequest $request GetAggregateResourceComplianceByPackRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceComplianceByPackResponse GetAggregateResourceComplianceByPackResponse
     */
    public function getAggregateResourceComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation results of resources evaluated based on a compliance package of an account group.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results of resources monitored based on the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****`account group. The returned result shows that the total number of monitored resources is `10` and the number of non-compliant resources is `7`.
     *  *
     * @param GetAggregateResourceComplianceByPackRequest $request GetAggregateResourceComplianceByPackRequest
     *
     * @return GetAggregateResourceComplianceByPackResponse GetAggregateResourceComplianceByPackResponse
     */
    public function getAggregateResourceComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the evaluation results grouped by resource type for an account group rule.
     *  *
     * @param GetAggregateResourceComplianceGroupByRegionRequest $request GetAggregateResourceComplianceGroupByRegionRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceComplianceGroupByRegionResponse GetAggregateResourceComplianceGroupByRegionResponse
     */
    public function getAggregateResourceComplianceGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceGroupByRegion',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the evaluation results grouped by resource type for an account group rule.
     *  *
     * @param GetAggregateResourceComplianceGroupByRegionRequest $request GetAggregateResourceComplianceGroupByRegionRequest
     *
     * @return GetAggregateResourceComplianceGroupByRegionResponse GetAggregateResourceComplianceGroupByRegionResponse
     */
    public function getAggregateResourceComplianceGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the evaluation results grouped by resource type for an account group rule.
     *  *
     * @param GetAggregateResourceComplianceGroupByResourceTypeRequest $request GetAggregateResourceComplianceGroupByResourceTypeRequest
     * @param RuntimeOptions                                           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceComplianceGroupByResourceTypeResponse GetAggregateResourceComplianceGroupByResourceTypeResponse
     */
    public function getAggregateResourceComplianceGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceGroupByResourceType',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the evaluation results grouped by resource type for an account group rule.
     *  *
     * @param GetAggregateResourceComplianceGroupByResourceTypeRequest $request GetAggregateResourceComplianceGroupByResourceTypeRequest
     *
     * @return GetAggregateResourceComplianceGroupByResourceTypeResponse GetAggregateResourceComplianceGroupByResourceTypeResponse
     */
    public function getAggregateResourceComplianceGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance timeline of a resource in an account group.
     *  *
     * @description The sample request in this topic shows you how to query the compliance timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region within the `100931896542****` member account of the `ca-5885626622af0008****` account group. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows the following two timestamps on the compliance timeline: `1625200295276` and `1625200228510`. The first timestamp indicates 12:31:35 on July 2, 2021 (UTC+8), and the second timestamp indicates 12:30:28 on July 2, 2021 (UTC+8).
     *  *
     * @param GetAggregateResourceComplianceTimelineRequest $request GetAggregateResourceComplianceTimelineRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceComplianceTimelineResponse GetAggregateResourceComplianceTimelineResponse
     */
    public function getAggregateResourceComplianceTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceComplianceTimeline',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceComplianceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance timeline of a resource in an account group.
     *  *
     * @description The sample request in this topic shows you how to query the compliance timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region within the `100931896542****` member account of the `ca-5885626622af0008****` account group. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows the following two timestamps on the compliance timeline: `1625200295276` and `1625200228510`. The first timestamp indicates 12:31:35 on July 2, 2021 (UTC+8), and the second timestamp indicates 12:30:28 on July 2, 2021 (UTC+8).
     *  *
     * @param GetAggregateResourceComplianceTimelineRequest $request GetAggregateResourceComplianceTimelineRequest
     *
     * @return GetAggregateResourceComplianceTimelineResponse GetAggregateResourceComplianceTimelineResponse
     */
    public function getAggregateResourceComplianceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceTimelineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration timeline of a resource in an account group.
     *  *
     * @description The sample request in this topic shows you how to query the configuration timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region within the `100931896542****` member account of the `ca-5885626622af0008****` account group. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows that the timestamp when the resource configuration changes is `1624961112000`. The timestamp indicates 18:05:12 on June 29, 2021 (UTC+8).
     *  *
     * @param GetAggregateResourceConfigurationTimelineRequest $request GetAggregateResourceConfigurationTimelineRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceConfigurationTimelineResponse GetAggregateResourceConfigurationTimelineResponse
     */
    public function getAggregateResourceConfigurationTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceConfigurationTimeline',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceConfigurationTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration timeline of a resource in an account group.
     *  *
     * @description The sample request in this topic shows you how to query the configuration timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region within the `100931896542****` member account of the `ca-5885626622af0008****` account group. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows that the timestamp when the resource configuration changes is `1624961112000`. The timestamp indicates 18:05:12 on June 29, 2021 (UTC+8).
     *  *
     * @param GetAggregateResourceConfigurationTimelineRequest $request GetAggregateResourceConfigurationTimelineRequest
     *
     * @return GetAggregateResourceConfigurationTimelineResponse GetAggregateResourceConfigurationTimelineResponse
     */
    public function getAggregateResourceConfigurationTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceConfigurationTimelineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on the resources in an account group by region.
     *  *
     * @description This topic provides an example on how to query the statistics on the resources in an account group named `ca-a260626622af0005****` by region. The returned result shows that a total of `10` resources exist in the `cn-hangzhou` region.
     *  *
     * @param GetAggregateResourceCountsGroupByRegionRequest $request GetAggregateResourceCountsGroupByRegionRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceCountsGroupByRegionResponse GetAggregateResourceCountsGroupByRegionResponse
     */
    public function getAggregateResourceCountsGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->folderId)) {
            $query['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceCountsGroupByRegion',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceCountsGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on the resources in an account group by region.
     *  *
     * @description This topic provides an example on how to query the statistics on the resources in an account group named `ca-a260626622af0005****` by region. The returned result shows that a total of `10` resources exist in the `cn-hangzhou` region.
     *  *
     * @param GetAggregateResourceCountsGroupByRegionRequest $request GetAggregateResourceCountsGroupByRegionRequest
     *
     * @return GetAggregateResourceCountsGroupByRegionResponse GetAggregateResourceCountsGroupByRegionResponse
     */
    public function getAggregateResourceCountsGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceCountsGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on the resources in an account group by resource type.
     *  *
     * @description This topic provides an example on how to query the statistics on the resources in an account group whose ID is `ca-a260626622af0005****` by resource type. The returned result shows that the account group has a total of `seven` resources of the `ACS::RAM::Role` resource type.
     *  *
     * @param GetAggregateResourceCountsGroupByResourceTypeRequest $request GetAggregateResourceCountsGroupByResourceTypeRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponse GetAggregateResourceCountsGroupByResourceTypeResponse
     */
    public function getAggregateResourceCountsGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->folderId)) {
            $query['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceCountsGroupByResourceType',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceCountsGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on the resources in an account group by resource type.
     *  *
     * @description This topic provides an example on how to query the statistics on the resources in an account group whose ID is `ca-a260626622af0005****` by resource type. The returned result shows that the account group has a total of `seven` resources of the `ACS::RAM::Role` resource type.
     *  *
     * @param GetAggregateResourceCountsGroupByResourceTypeRequest $request GetAggregateResourceCountsGroupByResourceTypeRequest
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponse GetAggregateResourceCountsGroupByResourceTypeResponse
     */
    public function getAggregateResourceCountsGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceCountsGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the last resource inventory that is generated on the Global Resources page within the current account group.
     *  *
     * @description ### [](#)Prerequisites
     * The [GenerateAggregateResourceInventory](https://help.aliyun.com/document_detail/2398353.html) operation is called to generate a resource inventory. Then, this operation is called to obtain the URL of the resource inventory.
     * ### [](#)Description
     * This topic provides an example on how to obtain the last resource inventory that is generated within the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *  *
     * @param GetAggregateResourceInventoryRequest $request GetAggregateResourceInventoryRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregateResourceInventoryResponse GetAggregateResourceInventoryResponse
     */
    public function getAggregateResourceInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateResourceInventory',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateResourceInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the last resource inventory that is generated on the Global Resources page within the current account group.
     *  *
     * @description ### [](#)Prerequisites
     * The [GenerateAggregateResourceInventory](https://help.aliyun.com/document_detail/2398353.html) operation is called to generate a resource inventory. Then, this operation is called to obtain the URL of the resource inventory.
     * ### [](#)Description
     * This topic provides an example on how to obtain the last resource inventory that is generated within the account group ca-a91d626622af0035\\*\\*\\*\\*.
     *  *
     * @param GetAggregateResourceInventoryRequest $request GetAggregateResourceInventoryRequest
     *
     * @return GetAggregateResourceInventoryResponse GetAggregateResourceInventoryResponse
     */
    public function getAggregateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an account group.
     *  *
     * @description The sample request in this topic shows you how to query the details of the `ca-88ea626622af0055****` account group. The return result shows that the account group is named `Test_Group`, its description is `Test account group`, and it is of the `CUSTOM` type. The account group is in the `1` state, which indicates that it is created.
     *  *
     * @param GetAggregatorRequest $request GetAggregatorRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAggregatorResponse GetAggregatorResponse
     */
    public function getAggregatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregator',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an account group.
     *  *
     * @description The sample request in this topic shows you how to query the details of the `ca-88ea626622af0055****` account group. The return result shows that the account group is named `Test_Group`, its description is `Test account group`, and it is of the `CUSTOM` type. The account group is in the `1` state, which indicates that it is created.
     *  *
     * @param GetAggregatorRequest $request GetAggregatorRequest
     *
     * @return GetAggregatorResponse GetAggregatorResponse
     */
    public function getAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregatorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a compliance package.
     *  *
     * @description This topic provides an example on how to query the details of a compliance package whose ID is `cp-fdc8626622af00f9****`. The returned result shows that the name of the compliance package is `ClassifiedProtectionPreCheck`, the compliance package is in the `ACTIVE` state, and the risk level of the rules in the compliance package is `1`, which indicates high risk level.
     *  *
     * @param GetCompliancePackRequest $request GetCompliancePackRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCompliancePackResponse GetCompliancePackResponse
     */
    public function getCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a compliance package.
     *  *
     * @description This topic provides an example on how to query the details of a compliance package whose ID is `cp-fdc8626622af00f9****`. The returned result shows that the name of the compliance package is `ClassifiedProtectionPreCheck`, the compliance package is in the `ACTIVE` state, and the risk level of the rules in the compliance package is `1`, which indicates high risk level.
     *  *
     * @param GetCompliancePackRequest $request GetCompliancePackRequest
     *
     * @return GetCompliancePackResponse GetCompliancePackResponse
     */
    public function getCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation report that is generated based on a compliance package.
     *  *
     * @description > Before you call this operation, you must call the GenerateCompliancePackReport operation to generate the latest compliance evaluation report based on a compliance package. For more information, see [GenerateCompliancePackReport](https://help.aliyun.com/document_detail/263525.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on the `cp-fdc8626622af00f9****` compliance package.
     *  *
     * @param GetCompliancePackReportRequest $request GetCompliancePackReportRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCompliancePackReportResponse GetCompliancePackReportResponse
     */
    public function getCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCompliancePackReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCompliancePackReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation report that is generated based on a compliance package.
     *  *
     * @description > Before you call this operation, you must call the GenerateCompliancePackReport operation to generate the latest compliance evaluation report based on a compliance package. For more information, see [GenerateCompliancePackReport](https://help.aliyun.com/document_detail/263525.html).
     * This topic provides an example on how to query the compliance evaluation report that is generated based on the `cp-fdc8626622af00f9****` compliance package.
     *  *
     * @param GetCompliancePackReportRequest $request GetCompliancePackReportRequest
     *
     * @return GetCompliancePackReportResponse GetCompliancePackReportResponse
     */
    public function getCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the summary of compliance statistics within the current account.
     *  *
     * @description This topic provides an example on how to query the compliance statistics of resources and rules in the current account group.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetComplianceSummaryResponse GetComplianceSummaryResponse
     */
    public function getComplianceSummaryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetComplianceSummary',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetComplianceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the summary of compliance statistics within the current account.
     *  *
     * @description This topic provides an example on how to query the compliance statistics of resources and rules in the current account group.
     *  *
     * @return GetComplianceSummaryResponse GetComplianceSummaryResponse
     */
    public function getComplianceSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getComplianceSummaryWithOptions($runtime);
    }

    /**
     * @summary Queries the information about a delivery channel.
     *  *
     * @param GetConfigDeliveryChannelRequest $request GetConfigDeliveryChannelRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConfigDeliveryChannelResponse GetConfigDeliveryChannelResponse
     */
    public function getConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a delivery channel.
     *  *
     * @param GetConfigDeliveryChannelRequest $request GetConfigDeliveryChannelRequest
     *
     * @return GetConfigDeliveryChannelResponse GetConfigDeliveryChannelResponse
     */
    public function getConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a rule.
     *  *
     * @description This topic provides an example on how to query the details of the `cr-7f7d626622af0041****` rule.
     *  *
     * @param GetConfigRuleRequest $request GetConfigRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConfigRuleResponse GetConfigRuleResponse
     */
    public function getConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a rule.
     *  *
     * @description This topic provides an example on how to query the details of the `cr-7f7d626622af0041****` rule.
     *  *
     * @param GetConfigRuleRequest $request GetConfigRuleRequest
     *
     * @return GetConfigRuleResponse GetConfigRuleResponse
     */
    public function getConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries compliance evaluation results based on the rules in a compliance package.
     *  *
     * @description In this topic, the `cp-541e626622af0087****` compliance package is used as an example. The return result shows a total of one rule against which specific resources are evaluated as compliant.
     *  *
     * @param GetConfigRuleComplianceByPackRequest $request GetConfigRuleComplianceByPackRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConfigRuleComplianceByPackResponse GetConfigRuleComplianceByPackResponse
     */
    public function getConfigRuleComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigRuleComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigRuleComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries compliance evaluation results based on the rules in a compliance package.
     *  *
     * @description In this topic, the `cp-541e626622af0087****` compliance package is used as an example. The return result shows a total of one rule against which specific resources are evaluated as compliant.
     *  *
     * @param GetConfigRuleComplianceByPackRequest $request GetConfigRuleComplianceByPackRequest
     *
     * @return GetConfigRuleComplianceByPackResponse GetConfigRuleComplianceByPackResponse
     */
    public function getConfigRuleComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the summary of compliance evaluation results by rule risk level.
     *  *
     * @description This topic provides an example of how to query the summary of compliance evaluation results by rule risk level. The return result shows four rules that are specified with the high risk level. One of them detects non-compliant resources, and the resources evaluated by the remaining three are all compliant.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConfigRuleSummaryByRiskLevelResponse GetConfigRuleSummaryByRiskLevelResponse
     */
    public function getConfigRuleSummaryByRiskLevelWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetConfigRuleSummaryByRiskLevel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigRuleSummaryByRiskLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the summary of compliance evaluation results by rule risk level.
     *  *
     * @description This topic provides an example of how to query the summary of compliance evaluation results by rule risk level. The return result shows four rules that are specified with the high risk level. One of them detects non-compliant resources, and the resources evaluated by the remaining three are all compliant.
     *  *
     * @return GetConfigRuleSummaryByRiskLevelResponse GetConfigRuleSummaryByRiskLevelResponse
     */
    public function getConfigRuleSummaryByRiskLevel()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleSummaryByRiskLevelWithOptions($runtime);
    }

    /**
     * @summary Queries the compliance evaluation report that is generated based on all existing rules.
     *  *
     * @description >  Before you call this operation, you must call the GenerateConfigRulesReport operation to generate the latest compliance evaluation report based on all existing rules. For more information, see [GenerateConfigRulesReport](https://help.aliyun.com/document_detail/263601.html).
     * This topic provides an example of how to query the compliance evaluation report that is generated based on all existing rules.
     *  *
     * @param GetConfigRulesReportRequest $request GetConfigRulesReportRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConfigRulesReportResponse GetConfigRulesReportResponse
     */
    public function getConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigRulesReport',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigRulesReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation report that is generated based on all existing rules.
     *  *
     * @description >  Before you call this operation, you must call the GenerateConfigRulesReport operation to generate the latest compliance evaluation report based on all existing rules. For more information, see [GenerateConfigRulesReport](https://help.aliyun.com/document_detail/263601.html).
     * This topic provides an example of how to query the compliance evaluation report that is generated based on all existing rules.
     *  *
     * @param GetConfigRulesReportRequest $request GetConfigRulesReportRequest
     *
     * @return GetConfigRulesReportResponse GetConfigRulesReportResponse
     */
    public function getConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the activation status and resource monitoring scope of Cloud Config for the current account.
     *  *
     * @description This topic provides an example on how to query the activation status and resource monitoring scope of Cloud Config for the current account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConfigurationRecorderResponse GetConfigurationRecorderResponse
     */
    public function getConfigurationRecorderWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetConfigurationRecorder',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the activation status and resource monitoring scope of Cloud Config for the current account.
     *  *
     * @description This topic provides an example on how to query the activation status and resource monitoring scope of Cloud Config for the current account.
     *  *
     * @return GetConfigurationRecorderResponse GetConfigurationRecorderResponse
     */
    public function getConfigurationRecorder()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigurationRecorderWithOptions($runtime);
    }

    /**
     * @summary Queries the details of a resource.
     *  *
     * @description The sample request in this topic shows you how to query the details of the `new-bucket` resource.
     *  *
     * @param GetDiscoveredResourceRequest $request GetDiscoveredResourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDiscoveredResourceResponse GetDiscoveredResourceResponse
     */
    public function getDiscoveredResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->complianceOption)) {
            $query['ComplianceOption'] = $request->complianceOption;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiscoveredResource',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a resource.
     *  *
     * @description The sample request in this topic shows you how to query the details of the `new-bucket` resource.
     *  *
     * @param GetDiscoveredResourceRequest $request GetDiscoveredResourceRequest
     *
     * @return GetDiscoveredResourceResponse GetDiscoveredResourceResponse
     */
    public function getDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on resources by region.
     *  *
     * @description This topic provides an example to demonstrate how to query the statistics on resources by region. The returned result shows that a total of 10 resources exist in the `cn-hangzhou` region.
     *  *
     * @param GetDiscoveredResourceCountsGroupByRegionRequest $request GetDiscoveredResourceCountsGroupByRegionRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponse GetDiscoveredResourceCountsGroupByRegionResponse
     */
    public function getDiscoveredResourceCountsGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiscoveredResourceCountsGroupByRegion',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiscoveredResourceCountsGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on resources by region.
     *  *
     * @description This topic provides an example to demonstrate how to query the statistics on resources by region. The returned result shows that a total of 10 resources exist in the `cn-hangzhou` region.
     *  *
     * @param GetDiscoveredResourceCountsGroupByRegionRequest $request GetDiscoveredResourceCountsGroupByRegionRequest
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponse GetDiscoveredResourceCountsGroupByRegionResponse
     */
    public function getDiscoveredResourceCountsGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on resources by resource type.
     *  *
     * @description This topic describes how to query the statistics on resources by resource type. The returned result shows that a total of 10 resources of the `ACS::ECS::Instance` resource type exist.
     *  *
     * @param GetDiscoveredResourceCountsGroupByResourceTypeRequest $request GetDiscoveredResourceCountsGroupByResourceTypeRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeResponse GetDiscoveredResourceCountsGroupByResourceTypeResponse
     */
    public function getDiscoveredResourceCountsGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiscoveredResourceCountsGroupByResourceType',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiscoveredResourceCountsGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on resources by resource type.
     *  *
     * @description This topic describes how to query the statistics on resources by resource type. The returned result shows that a total of 10 resources of the `ACS::ECS::Instance` resource type exist.
     *  *
     * @param GetDiscoveredResourceCountsGroupByResourceTypeRequest $request GetDiscoveredResourceCountsGroupByResourceTypeRequest
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeResponse GetDiscoveredResourceCountsGroupByResourceTypeResponse
     */
    public function getDiscoveredResourceCountsGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a cloud service that is integrated with Cloud Config.
     *  *
     * @param GetIntegratedServiceStatusRequest $request GetIntegratedServiceStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIntegratedServiceStatusResponse GetIntegratedServiceStatusResponse
     */
    public function getIntegratedServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIntegratedServiceStatus',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIntegratedServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a cloud service that is integrated with Cloud Config.
     *  *
     * @param GetIntegratedServiceStatusRequest $request GetIntegratedServiceStatusRequest
     *
     * @return GetIntegratedServiceStatusResponse GetIntegratedServiceStatusResponse
     */
    public function getIntegratedServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntegratedServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a managed rule.
     *  *
     * @description In this topic, the `cdn-domain-https-enabled` managed rule is used as an example.
     *  *
     * @param GetManagedRuleRequest $request GetManagedRuleRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetManagedRuleResponse GetManagedRuleResponse
     */
    public function getManagedRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetManagedRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetManagedRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a managed rule.
     *  *
     * @description In this topic, the `cdn-domain-https-enabled` managed rule is used as an example.
     *  *
     * @param GetManagedRuleRequest $request GetManagedRuleRequest
     *
     * @return GetManagedRuleResponse GetManagedRuleResponse
     */
    public function getManagedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagedRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an automatic remediation template.
     *  *
     * @description This topic provides an example on how to query the details of the automatic remediation template ACS-ALB-BulkyEnableDeletionProtection.
     *  *
     * @param GetRemediationTemplateRequest $request GetRemediationTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRemediationTemplateResponse GetRemediationTemplateResponse
     */
    public function getRemediationTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateIdentifier)) {
            $query['TemplateIdentifier'] = $request->templateIdentifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRemediationTemplate',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRemediationTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an automatic remediation template.
     *  *
     * @description This topic provides an example on how to query the details of the automatic remediation template ACS-ALB-BulkyEnableDeletionProtection.
     *  *
     * @param GetRemediationTemplateRequest $request GetRemediationTemplateRequest
     *
     * @return GetRemediationTemplateResponse GetRemediationTemplateResponse
     */
    public function getRemediationTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRemediationTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation result of a resource by using a rule.
     *  *
     * @description In this topic, the `cr-d369626622af008e****` rule is used as an example. The return result shows that a total of 10 resources are evaluated by the rule and `five` of them are evaluated as compliant.
     *  *
     * @param GetResourceComplianceByConfigRuleRequest $request GetResourceComplianceByConfigRuleRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceComplianceByConfigRuleResponse GetResourceComplianceByConfigRuleResponse
     */
    public function getResourceComplianceByConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceByConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceByConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation result of a resource by using a rule.
     *  *
     * @description In this topic, the `cr-d369626622af008e****` rule is used as an example. The return result shows that a total of 10 resources are evaluated by the rule and `five` of them are evaluated as compliant.
     *  *
     * @param GetResourceComplianceByConfigRuleRequest $request GetResourceComplianceByConfigRuleRequest
     *
     * @return GetResourceComplianceByConfigRuleResponse GetResourceComplianceByConfigRuleResponse
     */
    public function getResourceComplianceByConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceByConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation results of resources evaluated based on a compliance package.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results of resources monitored by using the `cp-541e626622af0087****` compliance package. The returned result shows a total of 10 resources and seven of them are evaluated as non-compliant.
     *  *
     * @param GetResourceComplianceByPackRequest $request GetResourceComplianceByPackRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceComplianceByPackResponse GetResourceComplianceByPackResponse
     */
    public function getResourceComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceByPack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceByPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation results of resources evaluated based on a compliance package.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results of resources monitored by using the `cp-541e626622af0087****` compliance package. The returned result shows a total of 10 resources and seven of them are evaluated as non-compliant.
     *  *
     * @param GetResourceComplianceByPackRequest $request GetResourceComplianceByPackRequest
     *
     * @return GetResourceComplianceByPackResponse GetResourceComplianceByPackResponse
     */
    public function getResourceComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the evaluation results grouped by region for a rule.
     *  *
     * @param GetResourceComplianceGroupByRegionRequest $request GetResourceComplianceGroupByRegionRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceComplianceGroupByRegionResponse GetResourceComplianceGroupByRegionResponse
     */
    public function getResourceComplianceGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceGroupByRegion',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceGroupByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the evaluation results grouped by region for a rule.
     *  *
     * @param GetResourceComplianceGroupByRegionRequest $request GetResourceComplianceGroupByRegionRequest
     *
     * @return GetResourceComplianceGroupByRegionResponse GetResourceComplianceGroupByRegionResponse
     */
    public function getResourceComplianceGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the evaluation results grouped by resource type for a rule.
     *  *
     * @param GetResourceComplianceGroupByResourceTypeRequest $request GetResourceComplianceGroupByResourceTypeRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceComplianceGroupByResourceTypeResponse GetResourceComplianceGroupByResourceTypeResponse
     */
    public function getResourceComplianceGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceGroupByResourceType',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceGroupByResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the evaluation results grouped by resource type for a rule.
     *  *
     * @param GetResourceComplianceGroupByResourceTypeRequest $request GetResourceComplianceGroupByResourceTypeRequest
     *
     * @return GetResourceComplianceGroupByResourceTypeResponse GetResourceComplianceGroupByResourceTypeResponse
     */
    public function getResourceComplianceGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance timeline of a resource. The compliance timeline of a resource indicates the compliance evaluation record of the resource. A compliance timeline includes points and the content on the compliance timeline.
     *  *
     * @description In Cloud Config, each resource has a compliance timeline. Cloud Config generates a compliance evaluation record for a resource each time the resource is evaluated based on a rule. The compliance evaluation records of a resource are displayed in a compliance timeline. You can configure Cloud Config to execute a rule to evaluate a resource on a regular basis or each time you change the resource configuration. You can also manually execute a rule to evaluate a resource.
     * This topic provides an example on how to query the compliance timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region. The resource is an Object Storage Service (OSS) bucket. The returned result shows the following two timestamps on the compliance timeline: `1625200295276` and `1625200228510`. The first timestamp indicates 12:31:35 on July 2, 2021 (UTC+8) and the second timestamp indicates 12:30:28 on July 2, 2021 (UTC+8).
     *  *
     * @param GetResourceComplianceTimelineRequest $request GetResourceComplianceTimelineRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceComplianceTimelineResponse GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceTimeline',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance timeline of a resource. The compliance timeline of a resource indicates the compliance evaluation record of the resource. A compliance timeline includes points and the content on the compliance timeline.
     *  *
     * @description In Cloud Config, each resource has a compliance timeline. Cloud Config generates a compliance evaluation record for a resource each time the resource is evaluated based on a rule. The compliance evaluation records of a resource are displayed in a compliance timeline. You can configure Cloud Config to execute a rule to evaluate a resource on a regular basis or each time you change the resource configuration. You can also manually execute a rule to evaluate a resource.
     * This topic provides an example on how to query the compliance timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region. The resource is an Object Storage Service (OSS) bucket. The returned result shows the following two timestamps on the compliance timeline: `1625200295276` and `1625200228510`. The first timestamp indicates 12:31:35 on July 2, 2021 (UTC+8) and the second timestamp indicates 12:30:28 on July 2, 2021 (UTC+8).
     *  *
     * @param GetResourceComplianceTimelineRequest $request GetResourceComplianceTimelineRequest
     *
     * @return GetResourceComplianceTimelineResponse GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceTimelineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration timeline of a resource.
     *  *
     * @description The sample request in this topic shows you how to query the configuration timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows that the timestamp when the resource configuration changes is `1624961112000`. The timestamp indicates 18:05:12 on June 29, 2021 (UTC+8).
     *  *
     * @param GetResourceConfigurationTimelineRequest $request GetResourceConfigurationTimelineRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceConfigurationTimelineResponse GetResourceConfigurationTimelineResponse
     */
    public function getResourceConfigurationTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceConfigurationTimeline',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceConfigurationTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration timeline of a resource.
     *  *
     * @description The sample request in this topic shows you how to query the configuration timeline of the `new-bucket` resource that resides in the `cn-hangzhou` region. The new-bucket resource is an Object Storage Service (OSS) bucket. The return result shows that the timestamp when the resource configuration changes is `1624961112000`. The timestamp indicates 18:05:12 on June 29, 2021 (UTC+8).
     *  *
     * @param GetResourceConfigurationTimelineRequest $request GetResourceConfigurationTimelineRequest
     *
     * @return GetResourceConfigurationTimelineResponse GetResourceConfigurationTimelineResponse
     */
    public function getResourceConfigurationTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceConfigurationTimelineWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the last resource inventory that is generated within the current Alibaba Cloud account.
     *  *
     * @description ### [](#)Prerequisites
     * You can call the [GenerateResourceInventory](https://help.aliyun.com/document_detail/2398354.html) operation to generate a resource inventory. Then, you can call the GetResourceInventory operation to obtain the URL of the resource inventory.
     * ### [](#)Description
     * This topic provides an example on how to obtain the last resource inventory that is generated within the current Alibaba Cloud account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceInventoryResponse GetResourceInventoryResponse
     */
    public function getResourceInventoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetResourceInventory',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the last resource inventory that is generated within the current Alibaba Cloud account.
     *  *
     * @description ### [](#)Prerequisites
     * You can call the [GenerateResourceInventory](https://help.aliyun.com/document_detail/2398354.html) operation to generate a resource inventory. Then, you can call the GetResourceInventory operation to obtain the URL of the resource inventory.
     * ### [](#)Description
     * This topic provides an example on how to obtain the last resource inventory that is generated within the current Alibaba Cloud account.
     *  *
     * @return GetResourceInventoryResponse GetResourceInventoryResponse
     */
    public function getResourceInventory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceInventoryWithOptions($runtime);
    }

    /**
     * @summary Queries the resource relationships supported by a resource type.
     *  *
     * @description This topic provides an example to show how to query the resource relationships that are supported by the ACS::ECS::Instance resource type.
     *  *
     * @param GetSupportedResourceRelationConfigRequest $request GetSupportedResourceRelationConfigRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSupportedResourceRelationConfigResponse GetSupportedResourceRelationConfigResponse
     */
    public function getSupportedResourceRelationConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSupportedResourceRelationConfig',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSupportedResourceRelationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resource relationships supported by a resource type.
     *  *
     * @description This topic provides an example to show how to query the resource relationships that are supported by the ACS::ECS::Instance resource type.
     *  *
     * @param GetSupportedResourceRelationConfigRequest $request GetSupportedResourceRelationConfigRequest
     *
     * @return GetSupportedResourceRelationConfigResponse GetSupportedResourceRelationConfigResponse
     */
    public function getSupportedResourceRelationConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupportedResourceRelationConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Ignores the compliance evaluation results of one or more non-compliant resources that are evaluated based on a rule in an account group.
     *  *
     * @description After you ignore a resource that is evaluated as incompliant by using a rule, the resource is still evaluated by using the rule, but the compliance result is Ignored.
     * This example shows how to ignore the `lb-hp3a3b4ztyfm2plgm****` incompliant resource that is evaluated by using the `cr-7e72626622af0051***` rule in the `120886317861****` member account of the `ca-5b6c626622af008f****` account group. The ID of the region where the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *  *
     * @param IgnoreAggregateEvaluationResultsRequest $tmpReq  IgnoreAggregateEvaluationResultsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return IgnoreAggregateEvaluationResultsResponse IgnoreAggregateEvaluationResultsResponse
     */
    public function ignoreAggregateEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IgnoreAggregateEvaluationResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resources)) {
            $request->resourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->ignoreDate)) {
            $body['IgnoreDate'] = $request->ignoreDate;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->resourcesShrink)) {
            $body['Resources'] = $request->resourcesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IgnoreAggregateEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IgnoreAggregateEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Ignores the compliance evaluation results of one or more non-compliant resources that are evaluated based on a rule in an account group.
     *  *
     * @description After you ignore a resource that is evaluated as incompliant by using a rule, the resource is still evaluated by using the rule, but the compliance result is Ignored.
     * This example shows how to ignore the `lb-hp3a3b4ztyfm2plgm****` incompliant resource that is evaluated by using the `cr-7e72626622af0051***` rule in the `120886317861****` member account of the `ca-5b6c626622af008f****` account group. The ID of the region where the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *  *
     * @param IgnoreAggregateEvaluationResultsRequest $request IgnoreAggregateEvaluationResultsRequest
     *
     * @return IgnoreAggregateEvaluationResultsResponse IgnoreAggregateEvaluationResultsResponse
     */
    public function ignoreAggregateEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreAggregateEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Ignores one or more resources that are evaluated as non-compliant by using a rule.
     *  *
     * @description After you ignore a resource that is evaluated as incompliant by using a rule, the resource is still evaluated by using the rule, but the compliance result is Ignored.
     * This example shows how to ignore the `lb-hp3a3b4ztyfm2plgm****` resource that is evaluated as incompliant by using the `cr-7e72626622af0051****` rule in the `100931896542****` account. The ID of the region in which the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *  *
     * @param IgnoreEvaluationResultsRequest $tmpReq  IgnoreEvaluationResultsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return IgnoreEvaluationResultsResponse IgnoreEvaluationResultsResponse
     */
    public function ignoreEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IgnoreEvaluationResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resources)) {
            $request->resourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->ignoreDate)) {
            $body['IgnoreDate'] = $request->ignoreDate;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->resourcesShrink)) {
            $body['Resources'] = $request->resourcesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IgnoreEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IgnoreEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Ignores one or more resources that are evaluated as non-compliant by using a rule.
     *  *
     * @description After you ignore a resource that is evaluated as incompliant by using a rule, the resource is still evaluated by using the rule, but the compliance result is Ignored.
     * This example shows how to ignore the `lb-hp3a3b4ztyfm2plgm****` resource that is evaluated as incompliant by using the `cr-7e72626622af0051****` rule in the `100931896542****` account. The ID of the region in which the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *  *
     * @param IgnoreEvaluationResultsRequest $request IgnoreEvaluationResultsRequest
     *
     * @return IgnoreEvaluationResultsResponse IgnoreEvaluationResultsResponse
     */
    public function ignoreEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of compliance packages in an account group.
     *  *
     * @description In this topic, the `ca-f632626622af0079****` account group is used as an example. The return result shows one compliance package whose ID is `cp-fdc8626622af00f9****`.
     *  *
     * @param ListAggregateCompliancePacksRequest $request ListAggregateCompliancePacksRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateCompliancePacksResponse ListAggregateCompliancePacksResponse
     */
    public function listAggregateCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of compliance packages in an account group.
     *  *
     * @description In this topic, the `ca-f632626622af0079****` account group is used as an example. The return result shows one compliance package whose ID is `cp-fdc8626622af00f9****`.
     *  *
     * @param ListAggregateCompliancePacksRequest $request ListAggregateCompliancePacksRequest
     *
     * @return ListAggregateCompliancePacksResponse ListAggregateCompliancePacksResponse
     */
    public function listAggregateCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all delivery channels in an account group.
     *  *
     * @param ListAggregateConfigDeliveryChannelsRequest $request ListAggregateConfigDeliveryChannelsRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateConfigDeliveryChannelsResponse ListAggregateConfigDeliveryChannelsResponse
     */
    public function listAggregateConfigDeliveryChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->deliveryChannelIds)) {
            $query['DeliveryChannelIds'] = $request->deliveryChannelIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateConfigDeliveryChannels',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateConfigDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all delivery channels in an account group.
     *  *
     * @param ListAggregateConfigDeliveryChannelsRequest $request ListAggregateConfigDeliveryChannelsRequest
     *
     * @return ListAggregateConfigDeliveryChannelsResponse ListAggregateConfigDeliveryChannelsResponse
     */
    public function listAggregateConfigDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation results of resources based on a rule in an account group.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results of resources based on the `cr-888f626622af00ae****` rule in the `ca-d1e3326622af00cb****` account group. The returned result indicates that the `Bucket-test` resource is evaluated as `NON_COMPLIANT` by using the rule. The resource is an Object Storage Service (OSS) bucket.
     *  *
     * @param ListAggregateConfigRuleEvaluationResultsRequest $request ListAggregateConfigRuleEvaluationResultsRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponse ListAggregateConfigRuleEvaluationResultsResponse
     */
    public function listAggregateConfigRuleEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $query['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateConfigRuleEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateConfigRuleEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation results of resources based on a rule in an account group.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation results of resources based on the `cr-888f626622af00ae****` rule in the `ca-d1e3326622af00cb****` account group. The returned result indicates that the `Bucket-test` resource is evaluated as `NON_COMPLIANT` by using the rule. The resource is an Object Storage Service (OSS) bucket.
     *  *
     * @param ListAggregateConfigRuleEvaluationResultsRequest $request ListAggregateConfigRuleEvaluationResultsRequest
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponse ListAggregateConfigRuleEvaluationResultsResponse
     */
    public function listAggregateConfigRuleEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRuleEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics of compliance evaluation results of an account group.
     *  *
     * @description This topic provides an example on how to query the statistics of compliance evaluation results of an account group whose ID is ca-edd3626622af00b3\\*\\*\\*\\*.
     *  *
     * @param ListAggregateConfigRuleEvaluationStatisticsRequest $request ListAggregateConfigRuleEvaluationStatisticsRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateConfigRuleEvaluationStatisticsResponse ListAggregateConfigRuleEvaluationStatisticsResponse
     */
    public function listAggregateConfigRuleEvaluationStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateConfigRuleEvaluationStatistics',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateConfigRuleEvaluationStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics of compliance evaluation results of an account group.
     *  *
     * @description This topic provides an example on how to query the statistics of compliance evaluation results of an account group whose ID is ca-edd3626622af00b3\\*\\*\\*\\*.
     *  *
     * @param ListAggregateConfigRuleEvaluationStatisticsRequest $request ListAggregateConfigRuleEvaluationStatisticsRequest
     *
     * @return ListAggregateConfigRuleEvaluationStatisticsResponse ListAggregateConfigRuleEvaluationStatisticsResponse
     */
    public function listAggregateConfigRuleEvaluationStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRuleEvaluationStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of rules in an account group.
     *  *
     * @description This topic provides an example on how to query the rules in an account group whose ID is `ca-f632626622af0079****`. The returned result shows a total of one rule and two evaluated resources. The resources are both evaluated as `COMPLIANT`.
     *  *
     * @param ListAggregateConfigRulesRequest $request ListAggregateConfigRulesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateConfigRulesResponse ListAggregateConfigRulesResponse
     */
    public function listAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $query['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleState)) {
            $query['ConfigRuleState'] = $request->configRuleState;
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
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of rules in an account group.
     *  *
     * @description This topic provides an example on how to query the rules in an account group whose ID is `ca-f632626622af0079****`. The returned result shows a total of one rule and two evaluated resources. The resources are both evaluated as `COMPLIANT`.
     *  *
     * @param ListAggregateConfigRulesRequest $request ListAggregateConfigRulesRequest
     *
     * @return ListAggregateConfigRulesResponse ListAggregateConfigRulesResponse
     */
    public function listAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains a list of resources aggregated across regions within all member accounts of a specific account group.
     *  *
     * @description This topic provides an example on how to query the resources within the member account `100931896542****` of the account group `ca-c560626622af0005****`. The result indicates that eight resources are queried.
     *  *
     * @param ListAggregateDiscoveredResourcesRequest $request ListAggregateDiscoveredResourcesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateDiscoveredResourcesResponse ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        if (!Utils::isUnset($request->resourceDeleted)) {
            $query['ResourceDeleted'] = $request->resourceDeleted;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateDiscoveredResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateDiscoveredResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a list of resources aggregated across regions within all member accounts of a specific account group.
     *  *
     * @description This topic provides an example on how to query the resources within the member account `100931896542****` of the account group `ca-c560626622af0005****`. The result indicates that eight resources are queried.
     *  *
     * @param ListAggregateDiscoveredResourcesRequest $request ListAggregateDiscoveredResourcesRequest
     *
     * @return ListAggregateDiscoveredResourcesResponse ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateDiscoveredResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the remediation records of a rule in an account group.
     *  *
     * @description This topic provides an example on how to query the remediation records of the `cr-d04a626622af00af****` rule in the `ca-edd3626622af00b3****` account group.
     *  *
     * @param ListAggregateRemediationExecutionsRequest $request ListAggregateRemediationExecutionsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateRemediationExecutionsResponse ListAggregateRemediationExecutionsResponse
     */
    public function listAggregateRemediationExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->executionStatus)) {
            $query['ExecutionStatus'] = $request->executionStatus;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateRemediationExecutions',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateRemediationExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the remediation records of a rule in an account group.
     *  *
     * @description This topic provides an example on how to query the remediation records of the `cr-d04a626622af00af****` rule in the `ca-edd3626622af00b3****` account group.
     *  *
     * @param ListAggregateRemediationExecutionsRequest $request ListAggregateRemediationExecutionsRequest
     *
     * @return ListAggregateRemediationExecutionsResponse ListAggregateRemediationExecutionsResponse
     */
    public function listAggregateRemediationExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateRemediationExecutionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of remediation templates for a rule in an account group.
     *  *
     * @description This topic provides an example on how to query the remediation templates of the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`.
     *  *
     * @param ListAggregateRemediationsRequest $request ListAggregateRemediationsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateRemediationsResponse ListAggregateRemediationsResponse
     */
    public function listAggregateRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateRemediations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of remediation templates for a rule in an account group.
     *  *
     * @description This topic provides an example on how to query the remediation templates of the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`.
     *  *
     * @param ListAggregateRemediationsRequest $request ListAggregateRemediationsRequest
     *
     * @return ListAggregateRemediationsResponse ListAggregateRemediationsResponse
     */
    public function listAggregateRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateRemediationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation results of resources in an account group.
     *  *
     * @description This example shows how to query the compliance evaluation result of the `23642660635396****` resource in the `ca-7f00626622af0041****` account group. The resource is a RAM user. The returned result indicates that the resource is evaluated as `NON_COMPLIANT` by using the `cr-7f7d626622af0041****` rule.
     *  *
     * @param ListAggregateResourceEvaluationResultsRequest $request ListAggregateResourceEvaluationResultsRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateResourceEvaluationResultsResponse ListAggregateResourceEvaluationResultsResponse
     */
    public function listAggregateResourceEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateResourceEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateResourceEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation results of resources in an account group.
     *  *
     * @description This example shows how to query the compliance evaluation result of the `23642660635396****` resource in the `ca-7f00626622af0041****` account group. The resource is a RAM user. The returned result indicates that the resource is evaluated as `NON_COMPLIANT` by using the `cr-7f7d626622af0041****` rule.
     *  *
     * @param ListAggregateResourceEvaluationResultsRequest $request ListAggregateResourceEvaluationResultsRequest
     *
     * @return ListAggregateResourceEvaluationResultsResponse ListAggregateResourceEvaluationResultsResponse
     */
    public function listAggregateResourceEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateResourceEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of the resources of a specific resource in an account group.
     *  *
     * @description This topic provides an example on how to query the disks that are associated with an Elastic Compute Service (ECS) instance in an account group.
     *  *
     * @param ListAggregateResourceRelationsRequest $request ListAggregateResourceRelationsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateResourceRelationsResponse ListAggregateResourceRelationsResponse
     */
    public function listAggregateResourceRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->relationType)) {
            $query['RelationType'] = $request->relationType;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->targetResourceId)) {
            $query['TargetResourceId'] = $request->targetResourceId;
        }
        if (!Utils::isUnset($request->targetResourceType)) {
            $query['TargetResourceType'] = $request->targetResourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateResourceRelations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateResourceRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of the resources of a specific resource in an account group.
     *  *
     * @description This topic provides an example on how to query the disks that are associated with an Elastic Compute Service (ECS) instance in an account group.
     *  *
     * @param ListAggregateResourceRelationsRequest $request ListAggregateResourceRelationsRequest
     *
     * @return ListAggregateResourceRelationsResponse ListAggregateResourceRelationsResponse
     */
    public function listAggregateResourceRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateResourceRelationsWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains resources in a specific account group based on the fields in the resource properties by using a SELECT statement.
     *  *
     * @description When you write a `SELECT` statement, you must obtain the fields and the data types of the fields from the property file of the resource type. For more information about property files, see [Alibaba Cloud Config Resource Schema](javascript:void\\(0\\))
     * >
     * *   Each resource type supported by Cloud Config has a property file. Property files are named based on the related resource types. For example, the property file of the `ACS::ECS::Instance` resource type is named `ACS_ECS_Instance.properties.json`. Property files of different resource types are placed under the `config/properties/resource-types` path.
     * *   For more information about the examples and limits on SQL query statements, see [Examples of SQL query statements](https://help.aliyun.com/document_detail/398718.html) and [Limits on SQL query statements](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example on how to obtain all resources whose tag key is `business` and whose tag value is `online` in the account group `ca-4b05626622af000c****` by using the advanced search feature.
     *  *
     * @param ListAggregateResourcesByAdvancedSearchRequest $request ListAggregateResourcesByAdvancedSearchRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregateResourcesByAdvancedSearchResponse ListAggregateResourcesByAdvancedSearchResponse
     */
    public function listAggregateResourcesByAdvancedSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->sql)) {
            $query['Sql'] = $request->sql;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateResourcesByAdvancedSearch',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateResourcesByAdvancedSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains resources in a specific account group based on the fields in the resource properties by using a SELECT statement.
     *  *
     * @description When you write a `SELECT` statement, you must obtain the fields and the data types of the fields from the property file of the resource type. For more information about property files, see [Alibaba Cloud Config Resource Schema](javascript:void\\(0\\))
     * >
     * *   Each resource type supported by Cloud Config has a property file. Property files are named based on the related resource types. For example, the property file of the `ACS::ECS::Instance` resource type is named `ACS_ECS_Instance.properties.json`. Property files of different resource types are placed under the `config/properties/resource-types` path.
     * *   For more information about the examples and limits on SQL query statements, see [Examples of SQL query statements](https://help.aliyun.com/document_detail/398718.html) and [Limits on SQL query statements](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example on how to obtain all resources whose tag key is `business` and whose tag value is `online` in the account group `ca-4b05626622af000c****` by using the advanced search feature.
     *  *
     * @param ListAggregateResourcesByAdvancedSearchRequest $request ListAggregateResourcesByAdvancedSearchRequest
     *
     * @return ListAggregateResourcesByAdvancedSearchResponse ListAggregateResourcesByAdvancedSearchResponse
     */
    public function listAggregateResourcesByAdvancedSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateResourcesByAdvancedSearchWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of account groups that the current account manages or to which the current account belongs.
     *  *
     * @description The sample request in this topic shows you how to query account groups. A maximum of 10 entries can be returned for the request. As shown in the responses, the account group returned is named as `Test_Group`, its description is `Test account group`, and it is of the `CUSTOM` type, which indicates a custom account group. The account group contains two member accounts.
     *  *
     * @param ListAggregatorsRequest $request ListAggregatorsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAggregatorsResponse ListAggregatorsResponse
     */
    public function listAggregatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregators',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of account groups that the current account manages or to which the current account belongs.
     *  *
     * @description The sample request in this topic shows you how to query account groups. A maximum of 10 entries can be returned for the request. As shown in the responses, the account group returned is named as `Test_Group`, its description is `Test account group`, and it is of the `CUSTOM` type, which indicates a custom account group. The account group contains two member accounts.
     *  *
     * @param ListAggregatorsRequest $request ListAggregatorsRequest
     *
     * @return ListAggregatorsResponse ListAggregatorsResponse
     */
    public function listAggregators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregatorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of compliance package templates.
     *  *
     * @description This topic provides an example on how to query the details of a compliance package template whose ID is `ct-d254ff4e06a300cf****`. The returned result indicates that the template name is `BestPracticesForNetwork`, the template ID is `ct-d254ff4e06a300cf****`, and the ID of the managed rule of the template is `slb-servercertificate-expired-check`.
     *  *
     * @param ListCompliancePackTemplatesRequest $request ListCompliancePackTemplatesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCompliancePackTemplatesResponse ListCompliancePackTemplatesResponse
     */
    public function listCompliancePackTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compliancePackTemplateId)) {
            $query['CompliancePackTemplateId'] = $request->compliancePackTemplateId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCompliancePackTemplates',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCompliancePackTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of compliance package templates.
     *  *
     * @description This topic provides an example on how to query the details of a compliance package template whose ID is `ct-d254ff4e06a300cf****`. The returned result indicates that the template name is `BestPracticesForNetwork`, the template ID is `ct-d254ff4e06a300cf****`, and the ID of the managed rule of the template is `slb-servercertificate-expired-check`.
     *  *
     * @param ListCompliancePackTemplatesRequest $request ListCompliancePackTemplatesRequest
     *
     * @return ListCompliancePackTemplatesResponse ListCompliancePackTemplatesResponse
     */
    public function listCompliancePackTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompliancePackTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of compliance packages.
     *  *
     * @description This topic provides an example of how to query compliance packages. The return result shows the details of the `cp-fdc8626622af00f9****` compliance package.
     *  *
     * @param ListCompliancePacksRequest $request ListCompliancePacksRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCompliancePacksResponse ListCompliancePacksResponse
     */
    public function listCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCompliancePacks',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCompliancePacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of compliance packages.
     *  *
     * @description This topic provides an example of how to query compliance packages. The return result shows the details of the `cp-fdc8626622af00f9****` compliance package.
     *  *
     * @param ListCompliancePacksRequest $request ListCompliancePacksRequest
     *
     * @return ListCompliancePacksResponse ListCompliancePacksResponse
     */
    public function listCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of delivery channels.
     *  *
     * @param ListConfigDeliveryChannelsRequest $request ListConfigDeliveryChannelsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConfigDeliveryChannelsResponse ListConfigDeliveryChannelsResponse
     */
    public function listConfigDeliveryChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliveryChannelIds)) {
            $query['DeliveryChannelIds'] = $request->deliveryChannelIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigDeliveryChannels',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of delivery channels.
     *  *
     * @param ListConfigDeliveryChannelsRequest $request ListConfigDeliveryChannelsRequest
     *
     * @return ListConfigDeliveryChannelsResponse ListConfigDeliveryChannelsResponse
     */
    public function listConfigDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of compliance evaluation results of resources based on a rule.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation result of resources based on a rule whose ID is `cr-cac56457e0d900d3****`. The returned result indicates that the `i-hp3e4kvhzqn2s11t****` resource is evaluated as `NON_COMPLIANT` by using the rule. The resource is an Elastic Compute Service (ECS) instance.
     *  *
     * @param ListConfigRuleEvaluationResultsRequest $request ListConfigRuleEvaluationResultsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConfigRuleEvaluationResultsResponse ListConfigRuleEvaluationResultsResponse
     */
    public function listConfigRuleEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigRuleEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigRuleEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of compliance evaluation results of resources based on a rule.
     *  *
     * @description This topic provides an example on how to query the compliance evaluation result of resources based on a rule whose ID is `cr-cac56457e0d900d3****`. The returned result indicates that the `i-hp3e4kvhzqn2s11t****` resource is evaluated as `NON_COMPLIANT` by using the rule. The resource is an Elastic Compute Service (ECS) instance.
     *  *
     * @param ListConfigRuleEvaluationResultsRequest $request ListConfigRuleEvaluationResultsRequest
     *
     * @return ListConfigRuleEvaluationResultsResponse ListConfigRuleEvaluationResultsResponse
     */
    public function listConfigRuleEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRuleEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics of compliance evaluation results of the current Alibaba Cloud account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConfigRuleEvaluationStatisticsResponse ListConfigRuleEvaluationStatisticsResponse
     */
    public function listConfigRuleEvaluationStatisticsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListConfigRuleEvaluationStatistics',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigRuleEvaluationStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics of compliance evaluation results of the current Alibaba Cloud account.
     *  *
     * @return ListConfigRuleEvaluationStatisticsResponse ListConfigRuleEvaluationStatisticsResponse
     */
    public function listConfigRuleEvaluationStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRuleEvaluationStatisticsWithOptions($runtime);
    }

    /**
     * @summary Queries the rules of the current account.
     *  *
     * @description This topic provides an example on how to query the rules of the current account. The response shows that the current account has a total of one rule and three evaluated resources. The resources are evaluated as compliant.
     *  *
     * @param ListConfigRulesRequest $request ListConfigRulesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConfigRulesResponse ListConfigRulesResponse
     */
    public function listConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $query['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleState)) {
            $query['ConfigRuleState'] = $request->configRuleState;
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
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the rules of the current account.
     *  *
     * @description This topic provides an example on how to query the rules of the current account. The response shows that the current account has a total of one rule and three evaluated resources. The resources are evaluated as compliant.
     *  *
     * @param ListConfigRulesRequest $request ListConfigRulesRequest
     *
     * @return ListConfigRulesResponse ListConfigRulesResponse
     */
    public function listConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains a list of resources aggregated across regions within an Alibaba Cloud account.
     *  *
     * @description This topic provides an example on how to call the ListDiscoveredResources operation to query the resources in the current Alibaba Cloud account. The returned result indicates that a total of eight resources exist in the account.
     *  *
     * @param ListDiscoveredResourcesRequest $request ListDiscoveredResourcesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDiscoveredResourcesResponse ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceDeleted)) {
            $query['ResourceDeleted'] = $request->resourceDeleted;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiscoveredResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDiscoveredResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a list of resources aggregated across regions within an Alibaba Cloud account.
     *  *
     * @description This topic provides an example on how to call the ListDiscoveredResources operation to query the resources in the current Alibaba Cloud account. The returned result indicates that a total of eight resources exist in the account.
     *  *
     * @param ListDiscoveredResourcesRequest $request ListDiscoveredResourcesRequest
     *
     * @return ListDiscoveredResourcesResponse ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiscoveredResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the cloud services that can be integrated by the current Alibaba Cloud account.
     *  *
     * @description This topic provides an example on how to query the cloud services that can be integrated by the current Alibaba Cloud account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntegratedServiceResponse ListIntegratedServiceResponse
     */
    public function listIntegratedServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListIntegratedService',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntegratedServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the cloud services that can be integrated by the current Alibaba Cloud account.
     *  *
     * @description This topic provides an example on how to query the cloud services that can be integrated by the current Alibaba Cloud account.
     *  *
     * @return ListIntegratedServiceResponse ListIntegratedServiceResponse
     */
    public function listIntegratedService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntegratedServiceWithOptions($runtime);
    }

    /**
     * @summary Queries managed rules.
     *  *
     * @description This topic describes how to query the managed rules of Alibaba Cloud CDN by using the `CDN` keyword. The returned result shows that only one managed rule exists. You can view the rule details in the result.
     *  *
     * @param ListManagedRulesRequest $request ListManagedRulesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListManagedRulesResponse ListManagedRulesResponse
     */
    public function listManagedRulesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListManagedRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries managed rules.
     *  *
     * @description This topic describes how to query the managed rules of Alibaba Cloud CDN by using the `CDN` keyword. The returned result shows that only one managed rule exists. You can view the rule details in the result.
     *  *
     * @param ListManagedRulesRequest $request ListManagedRulesRequest
     *
     * @return ListManagedRulesResponse ListManagedRulesResponse
     */
    public function listManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listManagedRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of evaluation rules.
     *  *
     * @param ListPreManagedRulesRequest $tmpReq  ListPreManagedRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPreManagedRulesResponse ListPreManagedRulesResponse
     */
    public function listPreManagedRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPreManagedRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceTypes)) {
            $request->resourceTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypes, 'ResourceTypes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceTypesShrink)) {
            $body['ResourceTypes'] = $request->resourceTypesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPreManagedRules',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPreManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of evaluation rules.
     *  *
     * @param ListPreManagedRulesRequest $request ListPreManagedRulesRequest
     *
     * @return ListPreManagedRulesResponse ListPreManagedRulesResponse
     */
    public function listPreManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPreManagedRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the remediation records of a rule.
     *  *
     * @description This topic provides an example on how to query the remediation records of the rule cr-5392626622af0000\\*\\*\\*\\*.
     *  *
     * @param ListRemediationExecutionsRequest $request ListRemediationExecutionsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRemediationExecutionsResponse ListRemediationExecutionsResponse
     */
    public function listRemediationExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->executionStatus)) {
            $query['ExecutionStatus'] = $request->executionStatus;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRemediationExecutions',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRemediationExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the remediation records of a rule.
     *  *
     * @description This topic provides an example on how to query the remediation records of the rule cr-5392626622af0000\\*\\*\\*\\*.
     *  *
     * @param ListRemediationExecutionsRequest $request ListRemediationExecutionsRequest
     *
     * @return ListRemediationExecutionsResponse ListRemediationExecutionsResponse
     */
    public function listRemediationExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationExecutionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of remediation templates for a managed rule.
     *  *
     * @description In this topic, the `oss-bucket-public-write-prohibited` managed rule is used as an example. The return result shows the details of the remediation template of the `OOS` type for the managed rule. OOS represents Operation Orchestration Service.
     *  *
     * @param ListRemediationTemplatesRequest $request ListRemediationTemplatesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRemediationTemplatesResponse ListRemediationTemplatesResponse
     */
    public function listRemediationTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->managedRuleIdentifier)) {
            $query['ManagedRuleIdentifier'] = $request->managedRuleIdentifier;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $query['RemediationType'] = $request->remediationType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRemediationTemplates',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRemediationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of remediation templates for a managed rule.
     *  *
     * @description In this topic, the `oss-bucket-public-write-prohibited` managed rule is used as an example. The return result shows the details of the remediation template of the `OOS` type for the managed rule. OOS represents Operation Orchestration Service.
     *  *
     * @param ListRemediationTemplatesRequest $request ListRemediationTemplatesRequest
     *
     * @return ListRemediationTemplatesResponse ListRemediationTemplatesResponse
     */
    public function listRemediationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the execution of remediation templates.
     *  *
     * @description This topic provides an example on how to query the remediation templates for the rule whose ID is `cr-6b7c626622af00b4****`.
     *  *
     * @param ListRemediationsRequest $request ListRemediationsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRemediationsResponse ListRemediationsResponse
     */
    public function listRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
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
            'action'      => 'ListRemediations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the execution of remediation templates.
     *  *
     * @description This topic provides an example on how to query the remediation templates for the rule whose ID is `cr-6b7c626622af00b4****`.
     *  *
     * @param ListRemediationsRequest $request ListRemediationsRequest
     *
     * @return ListRemediationsResponse ListRemediationsResponse
     */
    public function listRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the compliance evaluation result of a resource.
     *  *
     * @description In this example, the compliance evaluation result of the `23642660635396****` resource is queried and the resource is a RAM user. The returned result indicates that the resource is evaluated as `NON_COMPLIANT` by using the `cr-7f7d626622af0041****` rule.
     *  *
     * @param ListResourceEvaluationResultsRequest $request ListResourceEvaluationResultsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceEvaluationResultsResponse ListResourceEvaluationResultsResponse
     */
    public function listResourceEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->complianceType)) {
            $query['ComplianceType'] = $request->complianceType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the compliance evaluation result of a resource.
     *  *
     * @description In this example, the compliance evaluation result of the `23642660635396****` resource is queried and the resource is a RAM user. The returned result indicates that the resource is evaluated as `NON_COMPLIANT` by using the `cr-7f7d626622af0041****` rule.
     *  *
     * @param ListResourceEvaluationResultsRequest $request ListResourceEvaluationResultsRequest
     *
     * @return ListResourceEvaluationResultsResponse ListResourceEvaluationResultsResponse
     */
    public function listResourceEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of resources that associate with a specific resource.
     *  *
     * @description This topic provides an example on how to query the disks that are associated with an Elastic Compute Service (ECS) instance within the current Alibaba Cloud account.
     *  *
     * @param ListResourceRelationsRequest $request ListResourceRelationsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceRelationsResponse ListResourceRelationsResponse
     */
    public function listResourceRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->relationType)) {
            $query['RelationType'] = $request->relationType;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->targetResourceId)) {
            $query['TargetResourceId'] = $request->targetResourceId;
        }
        if (!Utils::isUnset($request->targetResourceType)) {
            $query['TargetResourceType'] = $request->targetResourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceRelations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of resources that associate with a specific resource.
     *  *
     * @description This topic provides an example on how to query the disks that are associated with an Elastic Compute Service (ECS) instance within the current Alibaba Cloud account.
     *  *
     * @param ListResourceRelationsRequest $request ListResourceRelationsRequest
     *
     * @return ListResourceRelationsResponse ListResourceRelationsResponse
     */
    public function listResourceRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceRelationsWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains resources based on the fields in the resource properties by using a SELECT statement.
     *  *
     * @description When you write a `SELECT` statement, you must obtain the fields and the data types of the fields from the property file of the resource type. For more information about property files, see [Alibaba Cloud Config Resource Schema](javascript:void\\(0\\)).
     * >
     * *   Each resource type supported by Cloud Config has a property file. Property files are named based on the related resource types. For example, the property file of the `ACS::ECS::Instance` resource type is named `ACS_ECS_Instance.properties.json`. Property files of different resource types are placed under the `config/properties/resource-types` path.
     * *   For more information about the examples and limits on SQL query statements, see [Examples of SQL query statements](https://help.aliyun.com/document_detail/398718.html) and [Limits on SQL query statements](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example on how to obtain all resources whose tag key is `business` and whose tag value is `online` within the current account by using the advanced search feature.
     *  *
     * @param ListResourcesByAdvancedSearchRequest $request ListResourcesByAdvancedSearchRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourcesByAdvancedSearchResponse ListResourcesByAdvancedSearchResponse
     */
    public function listResourcesByAdvancedSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sql)) {
            $query['Sql'] = $request->sql;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourcesByAdvancedSearch',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcesByAdvancedSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains resources based on the fields in the resource properties by using a SELECT statement.
     *  *
     * @description When you write a `SELECT` statement, you must obtain the fields and the data types of the fields from the property file of the resource type. For more information about property files, see [Alibaba Cloud Config Resource Schema](javascript:void\\(0\\)).
     * >
     * *   Each resource type supported by Cloud Config has a property file. Property files are named based on the related resource types. For example, the property file of the `ACS::ECS::Instance` resource type is named `ACS_ECS_Instance.properties.json`. Property files of different resource types are placed under the `config/properties/resource-types` path.
     * *   For more information about the examples and limits on SQL query statements, see [Examples of SQL query statements](https://help.aliyun.com/document_detail/398718.html) and [Limits on SQL query statements](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example on how to obtain all resources whose tag key is `business` and whose tag value is `online` within the current account by using the advanced search feature.
     *  *
     * @param ListResourcesByAdvancedSearchRequest $request ListResourcesByAdvancedSearchRequest
     *
     * @return ListResourcesByAdvancedSearchResponse ListResourcesByAdvancedSearchResponse
     */
    public function listResourcesByAdvancedSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesByAdvancedSearchWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the cloud services and resource types that are supported by Cloud Config.
     *  *
     * @description This topic provides an example on how to query the Alibaba Cloud services and resource types supported by a Cloud Config.
     *  *
     * @param ListSupportedProductsRequest $request ListSupportedProductsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSupportedProductsResponse ListSupportedProductsResponse
     */
    public function listSupportedProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSupportedProducts',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSupportedProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the cloud services and resource types that are supported by Cloud Config.
     *  *
     * @description This topic provides an example on how to query the Alibaba Cloud services and resource types supported by a Cloud Config.
     *  *
     * @param ListSupportedProductsRequest $request ListSupportedProductsRequest
     *
     * @return ListSupportedProductsResponse ListSupportedProductsResponse
     */
    public function listSupportedProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupportedProductsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tags that are added to specified resources.
     *  *
     * @param ListTagResourcesRequest $tmpReq  ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $body['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries tags that are added to specified resources.
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
     * @summary Submits the evaluation results of a custom rule to Function Compute.
     *  *
     * @param PutEvaluationsRequest $request PutEvaluationsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return PutEvaluationsResponse PutEvaluationsResponse
     */
    public function putEvaluationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deleteMode)) {
            $body['DeleteMode'] = $request->deleteMode;
        }
        if (!Utils::isUnset($request->evaluations)) {
            $body['Evaluations'] = $request->evaluations;
        }
        if (!Utils::isUnset($request->resultToken)) {
            $body['ResultToken'] = $request->resultToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutEvaluations',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutEvaluationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits the evaluation results of a custom rule to Function Compute.
     *  *
     * @param PutEvaluationsRequest $request PutEvaluationsRequest
     *
     * @return PutEvaluationsResponse PutEvaluationsResponse
     */
    public function putEvaluations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEvaluationsWithOptions($request, $runtime);
    }

    /**
     * @summary Re-evaluates one or more incompliant resources that are evaluated based on a rule in an account group.
     *  *
     * @description ### Prerequisites
     * One or more non-compliant resources that are evaluated based on a rule are ignored.
     * ### Usage notes
     * The sample request in this topic shows you how to re-evaluate the `lb-hp3a3b4ztyfm2plgm****` non-compliant resource that is evaluated by the `cr-7e72626622af0051***` rule in the `120886317861****` member account of the `ca-5b6c626622af008f****` account group. The ID of the region in which the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *  *
     * @param RevertAggregateEvaluationResultsRequest $tmpReq  RevertAggregateEvaluationResultsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return RevertAggregateEvaluationResultsResponse RevertAggregateEvaluationResultsResponse
     */
    public function revertAggregateEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RevertAggregateEvaluationResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resources)) {
            $request->resourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->resourcesShrink)) {
            $body['Resources'] = $request->resourcesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevertAggregateEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevertAggregateEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Re-evaluates one or more incompliant resources that are evaluated based on a rule in an account group.
     *  *
     * @description ### Prerequisites
     * One or more non-compliant resources that are evaluated based on a rule are ignored.
     * ### Usage notes
     * The sample request in this topic shows you how to re-evaluate the `lb-hp3a3b4ztyfm2plgm****` non-compliant resource that is evaluated by the `cr-7e72626622af0051***` rule in the `120886317861****` member account of the `ca-5b6c626622af008f****` account group. The ID of the region in which the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.
     *  *
     * @param RevertAggregateEvaluationResultsRequest $request RevertAggregateEvaluationResultsRequest
     *
     * @return RevertAggregateEvaluationResultsResponse RevertAggregateEvaluationResultsResponse
     */
    public function revertAggregateEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertAggregateEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Re-evaluates non-compliant resources that are evaluated based on a rule.
     *  *
     * @description ### Prerequisites
     * One or more non-compliant resources that are evaluated by a rule are ignored.
     * ### Usage notes
     * The sample request in this topic shows you how to re-evaluate the `lb-hp3a3b4ztyfm2plgm****` non-compliant resource that is evaluated by the `cr-7e72626622af0051****` rule. The ID of the region in which the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.``
     *  *
     * @param RevertEvaluationResultsRequest $tmpReq  RevertEvaluationResultsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RevertEvaluationResultsResponse RevertEvaluationResultsResponse
     */
    public function revertEvaluationResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RevertEvaluationResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resources)) {
            $request->resourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resources, 'Resources', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->resourcesShrink)) {
            $body['Resources'] = $request->resourcesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevertEvaluationResults',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevertEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Re-evaluates non-compliant resources that are evaluated based on a rule.
     *  *
     * @description ### Prerequisites
     * One or more non-compliant resources that are evaluated by a rule are ignored.
     * ### Usage notes
     * The sample request in this topic shows you how to re-evaluate the `lb-hp3a3b4ztyfm2plgm****` non-compliant resource that is evaluated by the `cr-7e72626622af0051****` rule. The ID of the region in which the resource resides is `cn-beijing`, and the type of the resource is `ACS::SLB::LoadBalancer`.``
     *  *
     * @param RevertEvaluationResultsRequest $request RevertEvaluationResultsRequest
     *
     * @return RevertEvaluationResultsResponse RevertEvaluationResultsResponse
     */
    public function revertEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Starts to evaluate the involved resources by using a rule in an account group.
     *  *
     * @description > After you call this operation, the compliance evaluation is performed only once. To query the compliance evaluation results returned by the rule, call the ListAggregateConfigRuleEvaluationResults operation. For more information, see [ListAggregateConfigRuleEvaluationResults](https://help.aliyun.com/document_detail/265979.html).
     * The sample request in this topic shows how to use the `cr-c169626622af009f****` rule in the `ca-3a58626622af0005****` account group to evaluate resources.
     *  *
     * @param StartAggregateConfigRuleEvaluationRequest $request StartAggregateConfigRuleEvaluationRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAggregateConfigRuleEvaluationResponse StartAggregateConfigRuleEvaluationResponse
     */
    public function startAggregateConfigRuleEvaluationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->revertEvaluation)) {
            $query['RevertEvaluation'] = $request->revertEvaluation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAggregateConfigRuleEvaluation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartAggregateConfigRuleEvaluationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts to evaluate the involved resources by using a rule in an account group.
     *  *
     * @description > After you call this operation, the compliance evaluation is performed only once. To query the compliance evaluation results returned by the rule, call the ListAggregateConfigRuleEvaluationResults operation. For more information, see [ListAggregateConfigRuleEvaluationResults](https://help.aliyun.com/document_detail/265979.html).
     * The sample request in this topic shows how to use the `cr-c169626622af009f****` rule in the `ca-3a58626622af0005****` account group to evaluate resources.
     *  *
     * @param StartAggregateConfigRuleEvaluationRequest $request StartAggregateConfigRuleEvaluationRequest
     *
     * @return StartAggregateConfigRuleEvaluationResponse StartAggregateConfigRuleEvaluationResponse
     */
    public function startAggregateConfigRuleEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAggregateConfigRuleEvaluationWithOptions($request, $runtime);
    }

    /**
     * @summary Performs a remediation operation by using a rule in an account group.
     *  *
     * @description This topic provides an example on how to manually perform a remediation operation by using the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`. The return result shows that the manual execution is successful.
     *  *
     * @param StartAggregateRemediationRequest $request StartAggregateRemediationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAggregateRemediationResponse StartAggregateRemediationResponse
     */
    public function startAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->resourceAccountId)) {
            $query['ResourceAccountId'] = $request->resourceAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAggregateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a remediation operation by using a rule in an account group.
     *  *
     * @description This topic provides an example on how to manually perform a remediation operation by using the rule whose ID is `cr-6b7c626622af00b4****` in the account group whose ID is `ca-6b4a626622af0012****`. The return result shows that the manual execution is successful.
     *  *
     * @param StartAggregateRemediationRequest $request StartAggregateRemediationRequest
     *
     * @return StartAggregateRemediationResponse StartAggregateRemediationResponse
     */
    public function startAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @summary Re-evaluates the compliance of resources based on a rule or compliance package.
     *  *
     * @description In this example, the cr-9920626622af0035\\*\\*\\*\\* rule is used to re-evaluate the compliance of resources.
     *  *
     * @param StartConfigRuleEvaluationRequest $request StartConfigRuleEvaluationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return StartConfigRuleEvaluationResponse StartConfigRuleEvaluationResponse
     */
    public function startConfigRuleEvaluationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->revertEvaluation)) {
            $query['RevertEvaluation'] = $request->revertEvaluation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartConfigRuleEvaluation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartConfigRuleEvaluationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Re-evaluates the compliance of resources based on a rule or compliance package.
     *  *
     * @description In this example, the cr-9920626622af0035\\*\\*\\*\\* rule is used to re-evaluate the compliance of resources.
     *  *
     * @param StartConfigRuleEvaluationRequest $request StartConfigRuleEvaluationRequest
     *
     * @return StartConfigRuleEvaluationResponse StartConfigRuleEvaluationResponse
     */
    public function startConfigRuleEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConfigRuleEvaluationWithOptions($request, $runtime);
    }

    /**
     * @summary Enables Cloud Config to monitor the resources of your Alibaba Cloud account.
     *  *
     * @description This topic provides an example on how to enable Cloud Config to monitor the resources of your Alibaba Cloud account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StartConfigurationRecorderResponse StartConfigurationRecorderResponse
     */
    public function startConfigurationRecorderWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'StartConfigurationRecorder',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables Cloud Config to monitor the resources of your Alibaba Cloud account.
     *  *
     * @description This topic provides an example on how to enable Cloud Config to monitor the resources of your Alibaba Cloud account.
     *  *
     * @return StartConfigurationRecorderResponse StartConfigurationRecorderResponse
     */
    public function startConfigurationRecorder()
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConfigurationRecorderWithOptions($runtime);
    }

    /**
     * @summary Performs a remediation operation by using a rule.
     *  *
     * @description This topic provides an example on how to perform a remediation operation by using the rule whose ID is `cr-8a973ac2e2be00a2****`. The returned result shows that the manual execution is successful.
     *  *
     * @param StartRemediationRequest $request StartRemediationRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StartRemediationResponse StartRemediationResponse
     */
    public function startRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a remediation operation by using a rule.
     *  *
     * @description This topic provides an example on how to perform a remediation operation by using the rule whose ID is `cr-8a973ac2e2be00a2****`. The returned result shows that the manual execution is successful.
     *  *
     * @param StartRemediationRequest $request StartRemediationRequest
     *
     * @return StartRemediationResponse StartRemediationResponse
     */
    public function startRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRemediationWithOptions($request, $runtime);
    }

    /**
     * @summary Deactivates Cloud Config.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StopConfigurationRecorderResponse StopConfigurationRecorderResponse
     */
    public function stopConfigurationRecorderWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'StopConfigurationRecorder',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deactivates Cloud Config.
     *  *
     * @return StopConfigurationRecorderResponse StopConfigurationRecorderResponse
     */
    public function stopConfigurationRecorder()
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopConfigurationRecorderWithOptions($runtime);
    }

    /**
     * @summary Adds tags to resources.
     *  *
     * @param TagResourcesRequest $tmpReq  TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $body['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
     * @summary Removes tags from specified resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            $body['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $body['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from specified resources.
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

    /**
     * @summary Modifies the configurations of a compliance package in an account group.
     *  *
     * @description This topic provides an example on how to change the value of a parameter for a managed rule whose ID is `eip-bandwidth-limit` to `20`. The managed rule is included in the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *  *
     * @param UpdateAggregateCompliancePackRequest $tmpReq  UpdateAggregateCompliancePackRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAggregateCompliancePackResponse UpdateAggregateCompliancePackResponse
     */
    public function updateAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $body['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->compliancePackName)) {
            $body['CompliancePackName'] = $request->compliancePackName;
        }
        if (!Utils::isUnset($request->configRulesShrink)) {
            $body['ConfigRules'] = $request->configRulesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeRegionIdsScope)) {
            $body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceGroupIdsScope)) {
            $body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->excludeTagsScope)) {
            $bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceIdsScope)) {
            $body['ResourceIdsScope'] = $request->resourceIdsScope;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        if (!Utils::isUnset($request->tagsScope)) {
            $bodyFlat['TagsScope'] = $request->tagsScope;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a compliance package in an account group.
     *  *
     * @description This topic provides an example on how to change the value of a parameter for a managed rule whose ID is `eip-bandwidth-limit` to `20`. The managed rule is included in the `cp-fdc8626622af00f9****` compliance package in the `ca-f632626622af0079****` account group.
     *  *
     * @param UpdateAggregateCompliancePackRequest $request UpdateAggregateCompliancePackRequest
     *
     * @return UpdateAggregateCompliancePackResponse UpdateAggregateCompliancePackResponse
     */
    public function updateAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a delivery channel in an account group.
     *  *
     * @description This topic provides an example on how to disable a delivery channel in an account group. The ID of the account group is `ca-a4e5626622af0079****`, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`. The Status parameter is set to `0`. After the delivery channel is disabled, Cloud Config retains the most recent delivery configuration and stops resource data delivery.
     *  *
     * @param UpdateAggregateConfigDeliveryChannelRequest $request UpdateAggregateConfigDeliveryChannelRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAggregateConfigDeliveryChannelResponse UpdateAggregateConfigDeliveryChannelResponse
     */
    public function updateAggregateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $query['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->deliverySnapshotTime)) {
            $query['DeliverySnapshotTime'] = $request->deliverySnapshotTime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a delivery channel in an account group.
     *  *
     * @description This topic provides an example on how to disable a delivery channel in an account group. The ID of the account group is `ca-a4e5626622af0079****`, and the ID of the delivery channel is `cdc-8e45ff4e06a3a8****`. The Status parameter is set to `0`. After the delivery channel is disabled, Cloud Config retains the most recent delivery configuration and stops resource data delivery.
     *  *
     * @param UpdateAggregateConfigDeliveryChannelRequest $request UpdateAggregateConfigDeliveryChannelRequest
     *
     * @return UpdateAggregateConfigDeliveryChannelResponse UpdateAggregateConfigDeliveryChannelResponse
     */
    public function updateAggregateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a rule in an account group.
     *  *
     * @description The sample request in this topic shows you how to change the risk level specified for the `cr-4e3d626622af0080****` managed rule to `3`, which indicates low risk level, in the `ca-a4e5626622af0079****` account group.
     *  *
     * @param UpdateAggregateConfigRuleRequest $tmpReq  UpdateAggregateConfigRuleRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAggregateConfigRuleResponse UpdateAggregateConfigRuleResponse
     */
    public function updateAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->accountIdsScope)) {
            $body['AccountIdsScope'] = $request->accountIdsScope;
        }
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleTriggerTypes)) {
            $body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeAccountIdsScope)) {
            $body['ExcludeAccountIdsScope'] = $request->excludeAccountIdsScope;
        }
        if (!Utils::isUnset($request->excludeFolderIdsScope)) {
            $body['ExcludeFolderIdsScope'] = $request->excludeFolderIdsScope;
        }
        if (!Utils::isUnset($request->excludeRegionIdsScope)) {
            $body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceGroupIdsScope)) {
            $body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->excludeTagsScope)) {
            $bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }
        if (!Utils::isUnset($request->folderIdsScope)) {
            $body['FolderIdsScope'] = $request->folderIdsScope;
        }
        if (!Utils::isUnset($request->inputParametersShrink)) {
            $body['InputParameters'] = $request->inputParametersShrink;
        }
        if (!Utils::isUnset($request->maximumExecutionFrequency)) {
            $body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceIdsScope)) {
            $body['ResourceIdsScope'] = $request->resourceIdsScope;
        }
        if (!Utils::isUnset($request->resourceTypesScopeShrink)) {
            $body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->tagKeyLogicScope)) {
            $body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        if (!Utils::isUnset($request->tagsScope)) {
            $bodyFlat['TagsScope'] = $request->tagsScope;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a rule in an account group.
     *  *
     * @description The sample request in this topic shows you how to change the risk level specified for the `cr-4e3d626622af0080****` managed rule to `3`, which indicates low risk level, in the `ca-a4e5626622af0079****` account group.
     *  *
     * @param UpdateAggregateConfigRuleRequest $request UpdateAggregateConfigRuleRequest
     *
     * @return UpdateAggregateConfigRuleResponse UpdateAggregateConfigRuleResponse
     */
    public function updateAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a remediation template for a rule in an account group.
     *  *
     * @description This topic describes how to change the execution mode of the `crr-909ba2d4716700eb****` remediation setting for a rule in the `ca-6b4a626622af0012****` account group to `AUTO_EXECUTION`, which specifies automatic remediation. This topic also provides a sample request.
     *  *
     * @param UpdateAggregateRemediationRequest $request UpdateAggregateRemediationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAggregateRemediationResponse UpdateAggregateRemediationResponse
     */
    public function updateAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->invokeType)) {
            $body['InvokeType'] = $request->invokeType;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->remediationId)) {
            $body['RemediationId'] = $request->remediationId;
        }
        if (!Utils::isUnset($request->remediationTemplateId)) {
            $body['RemediationTemplateId'] = $request->remediationTemplateId;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $body['RemediationType'] = $request->remediationType;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a remediation template for a rule in an account group.
     *  *
     * @description This topic describes how to change the execution mode of the `crr-909ba2d4716700eb****` remediation setting for a rule in the `ca-6b4a626622af0012****` account group to `AUTO_EXECUTION`, which specifies automatic remediation. This topic also provides a sample request.
     *  *
     * @param UpdateAggregateRemediationRequest $request UpdateAggregateRemediationRequest
     *
     * @return UpdateAggregateRemediationResponse UpdateAggregateRemediationResponse
     */
    public function updateAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @summary Modify an account group
     *  *
     * @description The sample request in this topic shows you how to add a member account to the account group whose ID is `ca-dacf86d8314e00eb****`. The member account ID is `173808452267****` and the member account name is `Tony`. The member account belongs to `ResourceDirectory`.
     *  *
     * @param UpdateAggregatorRequest $tmpReq  UpdateAggregatorRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAggregatorResponse UpdateAggregatorResponse
     */
    public function updateAggregatorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregatorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aggregatorAccounts)) {
            $request->aggregatorAccountsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aggregatorAccounts, 'AggregatorAccounts', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aggregatorAccountsShrink)) {
            $body['AggregatorAccounts'] = $request->aggregatorAccountsShrink;
        }
        if (!Utils::isUnset($request->aggregatorId)) {
            $body['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->aggregatorName)) {
            $body['AggregatorName'] = $request->aggregatorName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAggregator',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAggregatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modify an account group
     *  *
     * @description The sample request in this topic shows you how to add a member account to the account group whose ID is `ca-dacf86d8314e00eb****`. The member account ID is `173808452267****` and the member account name is `Tony`. The member account belongs to `ResourceDirectory`.
     *  *
     * @param UpdateAggregatorRequest $request UpdateAggregatorRequest
     *
     * @return UpdateAggregatorResponse UpdateAggregatorResponse
     */
    public function updateAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregatorWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a compliance package within your account.
     *  *
     * @description This topic provides an example on how to change the value of a parameter for a managed rule whose ID is `eip-bandwidth-limit` to `20`. The managed rule is included in the `cp-a8a8626622af0082****` compliance package.
     *  *
     * @param UpdateCompliancePackRequest $tmpReq  UpdateCompliancePackRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCompliancePackResponse UpdateCompliancePackResponse
     */
    public function updateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compliancePackId)) {
            $body['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->compliancePackName)) {
            $body['CompliancePackName'] = $request->compliancePackName;
        }
        if (!Utils::isUnset($request->configRulesShrink)) {
            $body['ConfigRules'] = $request->configRulesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeRegionIdsScope)) {
            $body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceGroupIdsScope)) {
            $body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->excludeTagsScope)) {
            $bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceIdsScope)) {
            $body['ResourceIdsScope'] = $request->resourceIdsScope;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        if (!Utils::isUnset($request->tagsScope)) {
            $bodyFlat['TagsScope'] = $request->tagsScope;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCompliancePack',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCompliancePackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a compliance package within your account.
     *  *
     * @description This topic provides an example on how to change the value of a parameter for a managed rule whose ID is `eip-bandwidth-limit` to `20`. The managed rule is included in the `cp-a8a8626622af0082****` compliance package.
     *  *
     * @param UpdateCompliancePackRequest $request UpdateCompliancePackRequest
     *
     * @return UpdateCompliancePackResponse UpdateCompliancePackResponse
     */
    public function updateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a delivery channel.
     *  *
     * @description In this example, a delivery channel is disabled. The ID of the delivery channel is `cdc-8e45ff4e06a3a8****```. The Status parameter is set to 0. After the delivery channel is disabled, Cloud Config retains the most recent delivery configuration and stops the delivery of resource data.
     *  *
     * @param UpdateConfigDeliveryChannelRequest $request UpdateConfigDeliveryChannelRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConfigDeliveryChannelResponse UpdateConfigDeliveryChannelResponse
     */
    public function updateConfigDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $query['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $query['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $query['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $query['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $query['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $query['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->deliverySnapshotTime)) {
            $query['DeliverySnapshotTime'] = $request->deliverySnapshotTime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $query['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $query['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a delivery channel.
     *  *
     * @description In this example, a delivery channel is disabled. The ID of the delivery channel is `cdc-8e45ff4e06a3a8****```. The Status parameter is set to 0. After the delivery channel is disabled, Cloud Config retains the most recent delivery configuration and stops the delivery of resource data.
     *  *
     * @param UpdateConfigDeliveryChannelRequest $request UpdateConfigDeliveryChannelRequest
     *
     * @return UpdateConfigDeliveryChannelResponse UpdateConfigDeliveryChannelResponse
     */
    public function updateConfigDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the rules of an account.
     *  *
     * @description This topic provides an example on how to change the risk level of a managed rule whose ID is `cr-a260626622af0005****` to `3` (low risk level).
     *  *
     * @param UpdateConfigRuleRequest $tmpReq  UpdateConfigRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConfigRuleResponse UpdateConfigRuleResponse
     */
    public function updateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->configRuleTriggerTypes)) {
            $body['ConfigRuleTriggerTypes'] = $request->configRuleTriggerTypes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeRegionIdsScope)) {
            $body['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceGroupIdsScope)) {
            $body['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->excludeResourceIdsScope)) {
            $body['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->excludeTagsScope)) {
            $bodyFlat['ExcludeTagsScope'] = $request->excludeTagsScope;
        }
        if (!Utils::isUnset($request->inputParametersShrink)) {
            $body['InputParameters'] = $request->inputParametersShrink;
        }
        if (!Utils::isUnset($request->maximumExecutionFrequency)) {
            $body['MaximumExecutionFrequency'] = $request->maximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->regionIdsScope)) {
            $body['RegionIdsScope'] = $request->regionIdsScope;
        }
        if (!Utils::isUnset($request->resourceGroupIdsScope)) {
            $body['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }
        if (!Utils::isUnset($request->resourceIdsScope)) {
            $body['ResourceIdsScope'] = $request->resourceIdsScope;
        }
        if (!Utils::isUnset($request->resourceTypesScopeShrink)) {
            $body['ResourceTypesScope'] = $request->resourceTypesScopeShrink;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->tagKeyLogicScope)) {
            $body['TagKeyLogicScope'] = $request->tagKeyLogicScope;
        }
        if (!Utils::isUnset($request->tagKeyScope)) {
            $body['TagKeyScope'] = $request->tagKeyScope;
        }
        if (!Utils::isUnset($request->tagValueScope)) {
            $body['TagValueScope'] = $request->tagValueScope;
        }
        if (!Utils::isUnset($request->tagsScope)) {
            $bodyFlat['TagsScope'] = $request->tagsScope;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigRule',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the rules of an account.
     *  *
     * @description This topic provides an example on how to change the risk level of a managed rule whose ID is `cr-a260626622af0005****` to `3` (low risk level).
     *  *
     * @param UpdateConfigRuleRequest $request UpdateConfigRuleRequest
     *
     * @return UpdateConfigRuleResponse UpdateConfigRuleResponse
     */
    public function updateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the resource monitoring scope of the current account.
     *  *
     * @description This topic provides an example on how to change the resource monitoring scope of the current account to ACS::ECS::Instance.
     *  *
     * @param UpdateConfigurationRecorderRequest $request UpdateConfigurationRecorderRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConfigurationRecorderResponse UpdateConfigurationRecorderResponse
     */
    public function updateConfigurationRecorderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceTypes)) {
            $body['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigurationRecorder',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the resource monitoring scope of the current account.
     *  *
     * @description This topic provides an example on how to change the resource monitoring scope of the current account to ACS::ECS::Instance.
     *  *
     * @param UpdateConfigurationRecorderRequest $request UpdateConfigurationRecorderRequest
     *
     * @return UpdateConfigurationRecorderResponse UpdateConfigurationRecorderResponse
     */
    public function updateConfigurationRecorder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigurationRecorderWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI UpdateDeliveryChannel is deprecated, please use Config::2020-09-07::UpdateConfigDeliveryChannel,Config::2020-09-07::UpdateAggregateConfigDeliveryChannel instead
     *  *
     * @summary Modifies a delivery channel.
     *  *
     * @description This topic provides an example on how to change the status of the delivery channel whose ID is `cdc-8e45ff4e06a3a8****` to 0, which indicates that the delivery channel is disabled. After the delivery channel is disabled, Cloud Config retains the last delivery configuration and stops resource data delivery.
     *  *
     * Deprecated
     *
     * @param UpdateDeliveryChannelRequest $request UpdateDeliveryChannelRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDeliveryChannelResponse UpdateDeliveryChannelResponse
     */
    public function updateDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationItemChangeNotification)) {
            $body['ConfigurationItemChangeNotification'] = $request->configurationItemChangeNotification;
        }
        if (!Utils::isUnset($request->configurationSnapshot)) {
            $body['ConfigurationSnapshot'] = $request->configurationSnapshot;
        }
        if (!Utils::isUnset($request->deliveryChannelAssumeRoleArn)) {
            $body['DeliveryChannelAssumeRoleArn'] = $request->deliveryChannelAssumeRoleArn;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $body['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $body['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $body['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $body['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nonCompliantNotification)) {
            $body['NonCompliantNotification'] = $request->nonCompliantNotification;
        }
        if (!Utils::isUnset($request->oversizedDataOSSTargetArn)) {
            $body['OversizedDataOSSTargetArn'] = $request->oversizedDataOSSTargetArn;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeliveryChannel',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI UpdateDeliveryChannel is deprecated, please use Config::2020-09-07::UpdateConfigDeliveryChannel,Config::2020-09-07::UpdateAggregateConfigDeliveryChannel instead
     *  *
     * @summary Modifies a delivery channel.
     *  *
     * @description This topic provides an example on how to change the status of the delivery channel whose ID is `cdc-8e45ff4e06a3a8****` to 0, which indicates that the delivery channel is disabled. After the delivery channel is disabled, Cloud Config retains the last delivery configuration and stops resource data delivery.
     *  *
     * Deprecated
     *
     * @param UpdateDeliveryChannelRequest $request UpdateDeliveryChannelRequest
     *
     * @return UpdateDeliveryChannelResponse UpdateDeliveryChannelResponse
     */
    public function updateDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the integration of a cloud service.
     *  *
     * @param UpdateIntegratedServiceStatusRequest $request UpdateIntegratedServiceStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIntegratedServiceStatusResponse UpdateIntegratedServiceStatusResponse
     */
    public function updateIntegratedServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->integratedTypes)) {
            $body['IntegratedTypes'] = $request->integratedTypes;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIntegratedServiceStatus',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIntegratedServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables the integration of a cloud service.
     *  *
     * @param UpdateIntegratedServiceStatusRequest $request UpdateIntegratedServiceStatusRequest
     *
     * @return UpdateIntegratedServiceStatusResponse UpdateIntegratedServiceStatusResponse
     */
    public function updateIntegratedServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIntegratedServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a remediation template for a rule.
     *  *
     * @description This topic describes how to change the execution mode of the `crr-909ba2d4716700eb****` remediation setting to `AUTO_EXECUTION`, which specifies automatic remediation. This topic also provides a sample request.
     *  *
     * @param UpdateRemediationRequest $request UpdateRemediationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRemediationResponse UpdateRemediationResponse
     */
    public function updateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->invokeType)) {
            $body['InvokeType'] = $request->invokeType;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->remediationId)) {
            $body['RemediationId'] = $request->remediationId;
        }
        if (!Utils::isUnset($request->remediationTemplateId)) {
            $body['RemediationTemplateId'] = $request->remediationTemplateId;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $body['RemediationType'] = $request->remediationType;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRemediation',
            'version'     => '2020-09-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRemediationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a remediation template for a rule.
     *  *
     * @description This topic describes how to change the execution mode of the `crr-909ba2d4716700eb****` remediation setting to `AUTO_EXECUTION`, which specifies automatic remediation. This topic also provides a sample request.
     *  *
     * @param UpdateRemediationRequest $request UpdateRemediationRequest
     *
     * @return UpdateRemediationResponse UpdateRemediationResponse
     */
    public function updateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRemediationWithOptions($request, $runtime);
    }
}
