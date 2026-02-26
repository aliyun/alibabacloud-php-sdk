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
use AlibabaCloud\SDK\Config\V20200907\Models\CreateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateReportTemplateRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateReportTemplateResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateReportTemplateShrinkRequest;
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
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteReportTemplateRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteReportTemplateResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeDiscoveredResourceBatchRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeDiscoveredResourceBatchResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeIntegratedServiceStatusRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeIntegratedServiceStatusResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachAggregateConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachAggregateConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DryRunConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DryRunConfigRuleResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateReportFromTemplateRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateReportFromTemplateResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\GetReportFromTemplateRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetReportFromTemplateResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetReportTemplateRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetReportTemplateResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationSampleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationSampleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceTypePropertiesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceTypePropertiesResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRecommendManagedRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRecommendManagedRulesResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleOperatorsResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\ListRecommendManagedRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRecommendManagedRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListReportTemplatesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListReportTemplatesResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigRuleEvaluationByResourceRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigRuleEvaluationByResourceResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigRuleEvaluationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigRuleEvaluationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StopConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\TriggerReportSendRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\TriggerReportSendResponse;
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
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateIntegratedServiceStatusRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateIntegratedServiceStatusResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateReportTemplateRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateReportTemplateResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateReportTemplateShrinkRequest;
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
     * 启用账号组规则.
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
     * 启用账号组规则.
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
     * 启用指定规则.
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
     * 启用指定规则.
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
     * 将指定账号组规则加入指定账号组合规包.
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
     * 将指定账号组规则加入指定账号组合规包.
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
     * 将指定规则加入指定合规包.
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
     * 将指定规则加入指定合规包.
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
     * 合规包复制.
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
     * 合规包复制.
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
     * 规则复制.
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
     * 规则复制.
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
     * 生成当前账号搜索结果下载文件.
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
     * 生成当前账号搜索结果下载文件.
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
     * Creates a downloadable file of advanced search results for resources in an account group.
     *
     * @remarks
     * This topic provides an example of how to query for ECS instances in the account group `ca-edd3626622af00b3****` and create a downloadable file of the search results.
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
     * Creates a downloadable file of advanced search results for resources in an account group.
     *
     * @remarks
     * This topic provides an example of how to query for ECS instances in the account group `ca-edd3626622af00b3****` and create a downloadable file of the search results.
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
     * Creates a compliance pack for a specified account group.
     *
     * @remarks
     * A compliance pack is a collection of rules. When you create a compliance pack, you can select default rules from a compliance pack template. You can also select rules from rule templates and the list of existing rules.
     * After a compliance pack is created, its rules are evaluated once by default. Subsequent evaluations are automatically triggered based on the trigger mechanism of the rules. You can also manually trigger an evaluation.
     * A compliance pack template is a collection of rules created by CloudConfig for a specific compliance scenario.
     * This topic provides an example of how to create a compliance pack for the account group `ca-f632626622af0079****` using the compliance pack template `ClassifiedProtectionPreCheck` (Classified Protection Level 3 Pre-check).
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
     * Creates a compliance pack for a specified account group.
     *
     * @remarks
     * A compliance pack is a collection of rules. When you create a compliance pack, you can select default rules from a compliance pack template. You can also select rules from rule templates and the list of existing rules.
     * After a compliance pack is created, its rules are evaluated once by default. Subsequent evaluations are automatically triggered based on the trigger mechanism of the rules. You can also manually trigger an evaluation.
     * A compliance pack template is a collection of rules created by CloudConfig for a specific compliance scenario.
     * This topic provides an example of how to create a compliance pack for the account group `ca-f632626622af0079****` using the compliance pack template `ClassifiedProtectionPreCheck` (Classified Protection Level 3 Pre-check).
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
     * Creates a delivery channel for a specified account group to deliver resource data to Simple Log Service (SLS), Object Storage Service (OSS), or Simple Message Queue (formerly MNS).
     *
     * @remarks
     * ### Background information
     * - Deliver to Simple Log Service (SLS)
     *   To deliver configuration history, non-compliance events, and scheduled resource snapshots to a Logstore in Simple Log Service (SLS), you must first create a log project and a Logstore. This lets you query and analyze logs. For examples of the content in JSON format, see [Example of resource configuration change history](https://help.aliyun.com/document_detail/308347.html), [Example of resource non-compliance event](https://help.aliyun.com/document_detail/307122.html), and [Example of scheduled resource snapshot](https://help.aliyun.com/document_detail/611894.html).
     * - Deliver to Object Storage Service (OSS)
     *   To deliver scheduled resource snapshots or configuration history to a specified location in Object Storage Service (OSS), you must first create a bucket. This lets you view or download files in JSON format. For examples of the content in JSON format, see [Example of scheduled resource snapshot](https://help.aliyun.com/document_detail/305669.html) and [Example of resource configuration change history](https://help.aliyun.com/document_detail/189738.html).
     * - Deliver to Simple Message Queue (MNS)
     *   To deliver resource configuration change history and resource non-compliance events to a specified topic in Simple Message Queue (formerly MNS), you must first create a topic. This lets you configure the push method and content for the topic. For examples of the content in JSON format, see [Example of resource configuration change history](https://help.aliyun.com/document_detail/309462.html) and [Example of resource non-compliance event](https://help.aliyun.com/document_detail/309463.html).
     * ### Limits
     * You can create a maximum of five delivery channels for each account group.
     * ### Usage notes
     * This example shows how to create a delivery channel of the `OSS` type for the account group `ca-a4e5626622af0079****`. The Amazon Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The response shows that the delivery channel is created and its ID is `cdc-8e45ff4e06a3a8****`.
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
     * Creates a delivery channel for a specified account group to deliver resource data to Simple Log Service (SLS), Object Storage Service (OSS), or Simple Message Queue (formerly MNS).
     *
     * @remarks
     * ### Background information
     * - Deliver to Simple Log Service (SLS)
     *   To deliver configuration history, non-compliance events, and scheduled resource snapshots to a Logstore in Simple Log Service (SLS), you must first create a log project and a Logstore. This lets you query and analyze logs. For examples of the content in JSON format, see [Example of resource configuration change history](https://help.aliyun.com/document_detail/308347.html), [Example of resource non-compliance event](https://help.aliyun.com/document_detail/307122.html), and [Example of scheduled resource snapshot](https://help.aliyun.com/document_detail/611894.html).
     * - Deliver to Object Storage Service (OSS)
     *   To deliver scheduled resource snapshots or configuration history to a specified location in Object Storage Service (OSS), you must first create a bucket. This lets you view or download files in JSON format. For examples of the content in JSON format, see [Example of scheduled resource snapshot](https://help.aliyun.com/document_detail/305669.html) and [Example of resource configuration change history](https://help.aliyun.com/document_detail/189738.html).
     * - Deliver to Simple Message Queue (MNS)
     *   To deliver resource configuration change history and resource non-compliance events to a specified topic in Simple Message Queue (formerly MNS), you must first create a topic. This lets you configure the push method and content for the topic. For examples of the content in JSON format, see [Example of resource configuration change history](https://help.aliyun.com/document_detail/309462.html) and [Example of resource non-compliance event](https://help.aliyun.com/document_detail/309463.html).
     * ### Limits
     * You can create a maximum of five delivery channels for each account group.
     * ### Usage notes
     * This example shows how to create a delivery channel of the `OSS` type for the account group `ca-a4e5626622af0079****`. The Amazon Resource Name (ARN) of the delivery destination is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The response shows that the delivery channel is created and its ID is `cdc-8e45ff4e06a3a8****`.
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
     * Creates a rule for a specified account group. You can create a rule from a template or create a custom rule using Function Compute. The rule checks your resources for compliance. After a rule is created, it automatically runs once. Cloud Config then runs evaluations based on the rule\\"s trigger. You can also run evaluations manually.
     *
     * @remarks
     * ### Limits
     * Each management account and delegated administrator account can have up to 200 rules.
     * ### Background information
     * Cloud Config supports the following methods for creating rules:
     * - Create rules from templates
     *   Rule templates are predefined rule functions that Cloud Config provides in Function Compute (FC). Use rule templates to create rules quickly. For more information about rules, see [the referenced document](https://help.aliyun.com/document_detail/128273.html).
     * - Create rules based on functions in Function Compute
     *   Custom function rules are rules whose code is hosted in FC functions. If the predefined rule templates in Cloud Config do not meet your compliance requirements, write function code to check compliance in complex scenarios. For more information about custom function rules, see [the referenced document](https://help.aliyun.com/document_detail/127405.html).
     * ### Usage notes
     * This example shows how to create a rule for the account group `ca-a4e5626622af0079****` using the \\`required-tags\\` template. The response shows that the rule is created with the ID `cr-4e3d626622af0080****`.
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

        if (null !== $request->conditions) {
            @$body['Conditions'] = $request->conditions;
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
     * Creates a rule for a specified account group. You can create a rule from a template or create a custom rule using Function Compute. The rule checks your resources for compliance. After a rule is created, it automatically runs once. Cloud Config then runs evaluations based on the rule\\"s trigger. You can also run evaluations manually.
     *
     * @remarks
     * ### Limits
     * Each management account and delegated administrator account can have up to 200 rules.
     * ### Background information
     * Cloud Config supports the following methods for creating rules:
     * - Create rules from templates
     *   Rule templates are predefined rule functions that Cloud Config provides in Function Compute (FC). Use rule templates to create rules quickly. For more information about rules, see [the referenced document](https://help.aliyun.com/document_detail/128273.html).
     * - Create rules based on functions in Function Compute
     *   Custom function rules are rules whose code is hosted in FC functions. If the predefined rule templates in Cloud Config do not meet your compliance requirements, write function code to check compliance in complex scenarios. For more information about custom function rules, see [the referenced document](https://help.aliyun.com/document_detail/127405.html).
     * ### Usage notes
     * This example shows how to create a rule for the account group `ca-a4e5626622af0079****` using the \\`required-tags\\` template. The response shows that the rule is created with the ID `cr-4e3d626622af0080****`.
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
     * Creates a remediation for a rule in a specified account group.
     *
     * @remarks
     * ### Background information
     * - Template-based remediation: Uses public templates provided by Operation Orchestration Service (OOS) to quickly remediate non-compliant resources.
     *   Only one remediation can be created for a rule. This type of remediation is supported only for rules that are created from specific templates.
     * - Custom remediation: Runs custom code in Function Compute (FC) to quickly remediate non-compliant resources.
     *   Only one remediation can be created for a rule. This type of remediation is supported for rules created from templates and for custom rules.
     * ### Usage notes
     * This topic provides an example of how to create a remediation for the rule `cr-6b7c626622af00b4****` in the account group `ca-6b4a626622af0012****`. The response shows that the remediation is created and its ID is `crr-909ba2d4716700eb****`.
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
     * Creates a remediation for a rule in a specified account group.
     *
     * @remarks
     * ### Background information
     * - Template-based remediation: Uses public templates provided by Operation Orchestration Service (OOS) to quickly remediate non-compliant resources.
     *   Only one remediation can be created for a rule. This type of remediation is supported only for rules that are created from specific templates.
     * - Custom remediation: Runs custom code in Function Compute (FC) to quickly remediate non-compliant resources.
     *   Only one remediation can be created for a rule. This type of remediation is supported for rules created from templates and for custom rules.
     * ### Usage notes
     * This topic provides an example of how to create a remediation for the rule `cr-6b7c626622af00b4****` in the account group `ca-6b4a626622af0012****`. The response shows that the remediation is created and its ID is `crr-909ba2d4716700eb****`.
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
     * A management account or a delegated administrator account in a resource directory can create an account group to centrally manage resources, compliance packages, and rules across multiple member accounts.
     *
     * @remarks
     * ### Limits
     * A management account or a delegated administrator account can create a maximum of 5 account groups. Each account group can contain a maximum of 200 member accounts.
     * ### Background information
     * For more information about account groups, including their concepts, use cases, and the impact of member account changes on Cloud Config, see [Overview](https://help.aliyun.com/document_detail/211534.html).
     * Cloud Config supports the following types of account groups:
     * - Global account group: A global account group contains all members in a resource directory and automatically synchronizes member changes. A management account or a delegated administrator account can create only one global account group.
     * - Custom account group: To create a custom account group, a management account or a delegated administrator account selects some or all member accounts from the resource directory.
     *   - If a new member is added to the resource directory, the change is not automatically synchronized. The management account or delegated administrator account must manually add the new member to the account group.
     *   - If a member is removed from the resource directory, the management account or delegated administrator account loses the permissions to manage that member\\"s compliance. The custom account group automatically detects this change and removes the member from the group.
     * - Folder account group: When an account group is created from a folder, it automatically detects and synchronizes changes to the members within that folder. The members in a folder account group are always consistent with the members in the selected folder.
     *   A management account or a delegated administrator account can select only one non-empty folder to create a folder account group.
     * ### Usage notes
     * This topic provides an example of how to use a management account to create a custom account group of the `CUSTOM` type. The account group is named `Test_Group` and has the description `Test Group`. The member accounts are as follows:
     * - The member account ID is `171322098523****` and the member account name is `Alice`.
     * - The member account ID is `100532098349****` and the member account name is `Tom`.
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
     * A management account or a delegated administrator account in a resource directory can create an account group to centrally manage resources, compliance packages, and rules across multiple member accounts.
     *
     * @remarks
     * ### Limits
     * A management account or a delegated administrator account can create a maximum of 5 account groups. Each account group can contain a maximum of 200 member accounts.
     * ### Background information
     * For more information about account groups, including their concepts, use cases, and the impact of member account changes on Cloud Config, see [Overview](https://help.aliyun.com/document_detail/211534.html).
     * Cloud Config supports the following types of account groups:
     * - Global account group: A global account group contains all members in a resource directory and automatically synchronizes member changes. A management account or a delegated administrator account can create only one global account group.
     * - Custom account group: To create a custom account group, a management account or a delegated administrator account selects some or all member accounts from the resource directory.
     *   - If a new member is added to the resource directory, the change is not automatically synchronized. The management account or delegated administrator account must manually add the new member to the account group.
     *   - If a member is removed from the resource directory, the management account or delegated administrator account loses the permissions to manage that member\\"s compliance. The custom account group automatically detects this change and removes the member from the group.
     * - Folder account group: When an account group is created from a folder, it automatically detects and synchronizes changes to the members within that folder. The members in a folder account group are always consistent with the members in the selected folder.
     *   A management account or a delegated administrator account can select only one non-empty folder to create a folder account group.
     * ### Usage notes
     * This topic provides an example of how to use a management account to create a custom account group of the `CUSTOM` type. The account group is named `Test_Group` and has the description `Test Group`. The member accounts are as follows:
     * - The member account ID is `171322098523****` and the member account name is `Alice`.
     * - The member account ID is `100532098349****` and the member account name is `Tom`.
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
     * 为当前账号创建合规包.
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
     * 为当前账号创建合规包.
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
     * Creates a delivery channel to deliver resource data to Simple Log Service (SLS), Object Storage Service (OSS), or Simple Message Queue (formerly MNS).
     *
     * @remarks
     * ### Background information
     * - Deliver to Simple Log Service (SLS)
     *   When you deliver resource configuration histories, non-compliant events, and scheduled snapshots to a Logstore in SLS, you must first create a project and a Logstore. This lets you query and analyze logs. For examples of the content of the JSON files, see [Resource configuration history examples](https://help.aliyun.com/document_detail/308347.html), [Non-compliant event examples](https://help.aliyun.com/document_detail/307122.html), and [Scheduled resource snapshot examples](https://help.aliyun.com/document_detail/611894.html).
     * - Deliver to Object Storage Service (OSS)
     *   When you deliver scheduled resource snapshots or configuration histories to a specified location in OSS, you must first create a bucket. This lets you view or download the JSON files. For examples of the content of the JSON files, see [Scheduled resource snapshot examples](https://help.aliyun.com/document_detail/305669.html) and [Resource configuration history examples](https://help.aliyun.com/document_detail/189738.html).
     * - Deliver to Simple Message Queue (formerly MNS)
     *   When you deliver resource configuration histories and non-compliant events to a specified topic in MNS, you must first create a topic. This lets you set the push method and content for the topic. For examples of the content of the JSON files, see [Resource configuration history examples](https://help.aliyun.com/document_detail/309462.html) and [Non-compliant event examples](https://help.aliyun.com/document_detail/309463.html).
     * ### Limits
     * You can create a maximum of 5 delivery channels.
     * ### Usage notes
     * This topic provides an example of how to create a delivery channel. In this example, the channel type is `OSS` and the destination ARN is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The response shows that a delivery channel with the ID `cdc-8e45ff4e06a3a8****` is created.
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
     * Creates a delivery channel to deliver resource data to Simple Log Service (SLS), Object Storage Service (OSS), or Simple Message Queue (formerly MNS).
     *
     * @remarks
     * ### Background information
     * - Deliver to Simple Log Service (SLS)
     *   When you deliver resource configuration histories, non-compliant events, and scheduled snapshots to a Logstore in SLS, you must first create a project and a Logstore. This lets you query and analyze logs. For examples of the content of the JSON files, see [Resource configuration history examples](https://help.aliyun.com/document_detail/308347.html), [Non-compliant event examples](https://help.aliyun.com/document_detail/307122.html), and [Scheduled resource snapshot examples](https://help.aliyun.com/document_detail/611894.html).
     * - Deliver to Object Storage Service (OSS)
     *   When you deliver scheduled resource snapshots or configuration histories to a specified location in OSS, you must first create a bucket. This lets you view or download the JSON files. For examples of the content of the JSON files, see [Scheduled resource snapshot examples](https://help.aliyun.com/document_detail/305669.html) and [Resource configuration history examples](https://help.aliyun.com/document_detail/189738.html).
     * - Deliver to Simple Message Queue (formerly MNS)
     *   When you deliver resource configuration histories and non-compliant events to a specified topic in MNS, you must first create a topic. This lets you set the push method and content for the topic. For examples of the content of the JSON files, see [Resource configuration history examples](https://help.aliyun.com/document_detail/309462.html) and [Non-compliant event examples](https://help.aliyun.com/document_detail/309463.html).
     * ### Limits
     * You can create a maximum of 5 delivery channels.
     * ### Usage notes
     * This topic provides an example of how to create a delivery channel. In this example, the channel type is `OSS` and the destination ARN is `acs:oss:cn-shanghai:100931896542****:new-bucket`. The response shows that a delivery channel with the ID `cdc-8e45ff4e06a3a8****` is created.
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
     * Creates a rule from a template or a custom rule using Function Compute to check resource compliance. After you create a rule, Cloud Config runs an initial evaluation and then automatically triggers subsequent evaluations based on the rule\\"s trigger. You can also run evaluations manually.
     *
     * @remarks
     * ### Limits
     * You can create up to 200 rules per account.
     * ### Background information
     * You can create rules in Cloud Config in two ways:
     * - Create rules from templates
     *   Rule templates are predefined rule functions provided by Cloud Config in Function Compute. You can use rule templates to quickly create rules. For more information, see [Definition and working principles of rules](https://help.aliyun.com/document_detail/128273.html).
     * - Create custom rules using Function Compute
     *   Custom rules use Function Compute functions to host your rule code. If Cloud Config\\"s predefined rule templates do not meet your compliance requirements, you can write your own function code to check compliance in complex scenarios. For more information, see [Definition and working principles of custom rules](https://help.aliyun.com/document_detail/127405.html).
     * ### Usage notes
     * This topic demonstrates how to create a rule from the \\`required-tags\\` template. The response confirms that the rule was created successfully. Its ID is `cr-5772ba41209e007b****`.
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

        if (null !== $request->conditions) {
            @$body['Conditions'] = $request->conditions;
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
     * Creates a rule from a template or a custom rule using Function Compute to check resource compliance. After you create a rule, Cloud Config runs an initial evaluation and then automatically triggers subsequent evaluations based on the rule\\"s trigger. You can also run evaluations manually.
     *
     * @remarks
     * ### Limits
     * You can create up to 200 rules per account.
     * ### Background information
     * You can create rules in Cloud Config in two ways:
     * - Create rules from templates
     *   Rule templates are predefined rule functions provided by Cloud Config in Function Compute. You can use rule templates to quickly create rules. For more information, see [Definition and working principles of rules](https://help.aliyun.com/document_detail/128273.html).
     * - Create custom rules using Function Compute
     *   Custom rules use Function Compute functions to host your rule code. If Cloud Config\\"s predefined rule templates do not meet your compliance requirements, you can write your own function code to check compliance in complex scenarios. For more information, see [Definition and working principles of custom rules](https://help.aliyun.com/document_detail/127405.html).
     * ### Usage notes
     * This topic demonstrates how to create a rule from the \\`required-tags\\` template. The response confirms that the rule was created successfully. Its ID is `cr-5772ba41209e007b****`.
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

    /**
     * Creates a remediation for an existing rule.
     *
     * @remarks
     * ### Background information
     * - Template-based remediation: Uses public templates from Operation Orchestration Service (OOS) to remediate non-compliant resources.
     *   Each rule supports only one remediation. This remediation type is available only for rules created from specific templates.
     * - Custom remediation: Uses custom code in Function Compute (FC) to remediate non-compliant resources.
     *   Each rule supports only one remediation. This remediation type is available for rules created from templates and custom rules.
     * ### Usage notes
     * In this example, a remediation is created for the rule `cr-8a973ac2e2be00a2****`. The sample response shows that the remediation is created and has the ID `crr-909ba2d4716700eb****`.
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
     * Creates a remediation for an existing rule.
     *
     * @remarks
     * ### Background information
     * - Template-based remediation: Uses public templates from Operation Orchestration Service (OOS) to remediate non-compliant resources.
     *   Each rule supports only one remediation. This remediation type is available only for rules created from specific templates.
     * - Custom remediation: Uses custom code in Function Compute (FC) to remediate non-compliant resources.
     *   Each rule supports only one remediation. This remediation type is available for rules created from templates and custom rules.
     * ### Usage notes
     * In this example, a remediation is created for the rule `cr-8a973ac2e2be00a2****`. The sample response shows that the remediation is created and has the ID `crr-909ba2d4716700eb****`.
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
     * Create a compliance report template for the current UID.
     *
     * @param tmpReq - CreateReportTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReportTemplateResponse
     *
     * @param CreateReportTemplateRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateReportTemplateResponse
     */
    public function createReportTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateReportTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->reportScope) {
            $request->reportScopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reportScope, 'ReportScope', 'json');
        }

        $body = [];
        if (null !== $request->reportFileFormats) {
            @$body['ReportFileFormats'] = $request->reportFileFormats;
        }

        if (null !== $request->reportGranularity) {
            @$body['ReportGranularity'] = $request->reportGranularity;
        }

        if (null !== $request->reportLanguage) {
            @$body['ReportLanguage'] = $request->reportLanguage;
        }

        if (null !== $request->reportScopeShrink) {
            @$body['ReportScope'] = $request->reportScopeShrink;
        }

        if (null !== $request->reportTemplateDescription) {
            @$body['ReportTemplateDescription'] = $request->reportTemplateDescription;
        }

        if (null !== $request->reportTemplateName) {
            @$body['ReportTemplateName'] = $request->reportTemplateName;
        }

        if (null !== $request->subscriptionFrequency) {
            @$body['SubscriptionFrequency'] = $request->subscriptionFrequency;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateReportTemplate',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateReportTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a compliance report template for the current UID.
     *
     * @param request - CreateReportTemplateRequest
     *
     * @returns CreateReportTemplateResponse
     *
     * @param CreateReportTemplateRequest $request
     *
     * @return CreateReportTemplateResponse
     */
    public function createReportTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReportTemplateWithOptions($request, $runtime);
    }

    /**
     * 停用账号组规则.
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
     * 停用账号组规则.
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
     * 停用指定规则.
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
     * 停用指定规则.
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
     * 删除指定账号组内的合规包。删除合规包后，该合规包的检查结果和检查报告也自动被删除.
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
     * 删除指定账号组内的合规包。删除合规包后，该合规包的检查结果和检查报告也自动被删除.
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
     * 账号组删除投递渠道.
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
     * 账号组删除投递渠道.
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
     * 删除指定账号组内的规则。删除规则后，其配置信息不再保留.
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
     * 删除指定账号组内的规则。删除规则后，其配置信息不再保留.
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
     * Deletes the remediation settings for a rule in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to delete the remediation setting `crr-909ba2d4716700eb****` for a rule in the account group `ca-6b4a626622af0012****`. The response shows that the remediation setting is deleted.
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
     * Deletes the remediation settings for a rule in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to delete the remediation setting `crr-909ba2d4716700eb****` for a rule in the account group `ca-6b4a626622af0012****`. The response shows that the remediation setting is deleted.
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
     * 删除账号组.
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
     * 删除账号组.
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
     * 批量删除合规包.
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
     * 批量删除合规包.
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
     * 当前账号删除投递渠道.
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
     * 当前账号删除投递渠道.
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
     * 批量删除规则.
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
     * 批量删除规则.
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
     * Deletes specified remediation settings.
     *
     * @remarks
     * This topic provides an example of how to delete a remediation setting for a rule. In this example, the remediation setting with the ID `crr-909ba2d4716700eb****` is deleted. The response indicates that the operation is successful.
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
     * Deletes specified remediation settings.
     *
     * @remarks
     * This topic provides an example of how to delete a remediation setting for a rule. In this example, the remediation setting with the ID `crr-909ba2d4716700eb****` is deleted. The response indicates that the operation is successful.
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
     * Deletes a compliance report template.
     *
     * @param request - DeleteReportTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteReportTemplateResponse
     *
     * @param DeleteReportTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteReportTemplateResponse
     */
    public function deleteReportTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reportTemplateId) {
            @$body['ReportTemplateId'] = $request->reportTemplateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteReportTemplate',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteReportTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a compliance report template.
     *
     * @param request - DeleteReportTemplateRequest
     *
     * @returns DeleteReportTemplateResponse
     *
     * @param DeleteReportTemplateRequest $request
     *
     * @return DeleteReportTemplateResponse
     */
    public function deleteReportTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReportTemplateWithOptions($request, $runtime);
    }

    /**
     * This operation retrieves the details of multiple resources in a batch.
     *
     * @param request - DescribeDiscoveredResourceBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiscoveredResourceBatchResponse
     *
     * @param DescribeDiscoveredResourceBatchRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDiscoveredResourceBatchResponse
     */
    public function describeDiscoveredResourceBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiscoveredResourceBatch',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiscoveredResourceBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation retrieves the details of multiple resources in a batch.
     *
     * @param request - DescribeDiscoveredResourceBatchRequest
     *
     * @returns DescribeDiscoveredResourceBatchResponse
     *
     * @param DescribeDiscoveredResourceBatchRequest $request
     *
     * @return DescribeDiscoveredResourceBatchResponse
     */
    public function describeDiscoveredResourceBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiscoveredResourceBatchWithOptions($request, $runtime);
    }

    /**
     * Queries the authorization status of an integrated cloud service.
     *
     * @param request - DescribeIntegratedServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIntegratedServiceStatusResponse
     *
     * @param DescribeIntegratedServiceStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeIntegratedServiceStatusResponse
     */
    public function describeIntegratedServiceStatusWithOptions($request, $runtime)
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
            'action' => 'DescribeIntegratedServiceStatus',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIntegratedServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the authorization status of an integrated cloud service.
     *
     * @param request - DescribeIntegratedServiceStatusRequest
     *
     * @returns DescribeIntegratedServiceStatusResponse
     *
     * @param DescribeIntegratedServiceStatusRequest $request
     *
     * @return DescribeIntegratedServiceStatusResponse
     */
    public function describeIntegratedServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntegratedServiceStatusWithOptions($request, $runtime);
    }

    /**
     * 获取修正详情.
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
     * 获取修正详情.
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
     * 将指定账号组规则从指定账号组合规包中移出.
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
     * 将指定账号组规则从指定账号组合规包中移出.
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
     * This operation detaches one or more rules from a compliance package.
     *
     * @remarks
     * ### Prerequisites
     * Make sure that the destination compliance package contains rules.
     * ### Usage notes
     * This topic provides an example of detaching the rule `cr-6cc4626622af00e7****` from the compliance package `cp-5bb1626622af00bd****`.
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
     * This operation detaches one or more rules from a compliance package.
     *
     * @remarks
     * ### Prerequisites
     * Make sure that the destination compliance package contains rules.
     * ### Usage notes
     * This topic provides an example of detaching the rule `cr-6cc4626622af00e7****` from the compliance package `cp-5bb1626622af00bd****`.
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
     * This API performs a dry run on rules for proactive compliance pre-checks.
     *
     * @param request - DryRunConfigRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DryRunConfigRuleResponse
     *
     * @param DryRunConfigRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DryRunConfigRuleResponse
     */
    public function dryRunConfigRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->configurationItem) {
            @$body['ConfigurationItem'] = $request->configurationItem;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DryRunConfigRule',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DryRunConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API performs a dry run on rules for proactive compliance pre-checks.
     *
     * @param request - DryRunConfigRuleRequest
     *
     * @returns DryRunConfigRuleResponse
     *
     * @param DryRunConfigRuleRequest $request
     *
     * @return DryRunConfigRuleResponse
     */
    public function dryRunConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dryRunConfigRuleWithOptions($request, $runtime);
    }

    /**
     * Executes evaluation rules to perform compliance pre-checks on resources.
     *
     * @remarks
     * For more information about the concepts, operating principles, and integration process of evaluation rules, see [Definition and operating principles of evaluation rules](https://help.aliyun.com/document_detail/470802.html).
     * After you create an evaluation rule, a managed rule with the same settings is created. This managed rule can continuously check the compliance of resources after they are created.
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
     * Executes evaluation rules to perform compliance pre-checks on resources.
     *
     * @remarks
     * For more information about the concepts, operating principles, and integration process of evaluation rules, see [Definition and operating principles of evaluation rules](https://help.aliyun.com/document_detail/470802.html).
     * After you create an evaluation rule, a managed rule with the same settings is created. This managed rule can continuously check the compliance of resources after they are created.
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
     * Generates an assessment report for a specified compliance package in a specified account group.
     *
     * @remarks
     * > This operation only generates the latest assessment report. You need to call the GetAggregateCompliancePackReport operation to download the assessment report. For more information, see [GetAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262699.html).
     * This topic provides an example that shows how to generate an assessment report for the compliance package `cp-fdc8626622af00f9****` in the account group `ca-f632626622af0079****`.
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
     * Generates an assessment report for a specified compliance package in a specified account group.
     *
     * @remarks
     * > This operation only generates the latest assessment report. You need to call the GetAggregateCompliancePackReport operation to download the assessment report. For more information, see [GetAggregateCompliancePackReport](https://help.aliyun.com/document_detail/262699.html).
     * This topic provides an example that shows how to generate an assessment report for the compliance package `cp-fdc8626622af00f9****` in the account group `ca-f632626622af0079****`.
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
     * 生成指定账号组的合规报告.
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
     * 生成指定账号组的合规报告.
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
     * 账号组资源清单生成.
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
     * 账号组资源清单生成.
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
     * 生成合规包的合规包报告.
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
     * 生成合规包的合规包报告.
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
     * 生成规则的合规评估报告.
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
     * 生成规则的合规评估报告.
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
     * Generate a report ID from a report template.
     *
     * @param request - GenerateReportFromTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateReportFromTemplateResponse
     *
     * @param GenerateReportFromTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GenerateReportFromTemplateResponse
     */
    public function generateReportFromTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reportTemplateId) {
            @$body['ReportTemplateId'] = $request->reportTemplateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateReportFromTemplate',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateReportFromTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generate a report ID from a report template.
     *
     * @param request - GenerateReportFromTemplateRequest
     *
     * @returns GenerateReportFromTemplateResponse
     *
     * @param GenerateReportFromTemplateRequest $request
     *
     * @return GenerateReportFromTemplateResponse
     */
    public function generateReportFromTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateReportFromTemplateWithOptions($request, $runtime);
    }

    /**
     * Generates a downloadable inventory of global resources.
     *
     * @remarks
     * This topic provides an example of how to generate a downloadable inventory of global resources for the current account.
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
     * Generates a downloadable inventory of global resources.
     *
     * @remarks
     * This topic provides an example of how to generate a downloadable inventory of global resources for the current account.
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
     * 高级搜索 获取搜索结果下载文件地址
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
     * 高级搜索 获取搜索结果下载文件地址
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
     * 查询指定账号组内指定合规包中成员账号的合规结果.
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
     * 查询指定账号组内指定合规包中成员账号的合规结果.
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
     * 高级搜获取搜索结果下载文件地址
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
     * 高级搜获取搜索结果下载文件地址
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
     * Queries the details of a compliance pack in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to retrieve the details of the compliance pack `cp-fdc8626622af00f9****` in the account group `ca-f632626622af0079****`.
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
     * Queries the details of a compliance pack in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to retrieve the details of the compliance pack `cp-fdc8626622af00f9****` in the account group `ca-f632626622af0079****`.
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
     * 获取指定账号组内指定合规包的评估报告.
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
     * 获取指定账号组内指定合规包的评估报告.
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
     * Queries the compliance summary for a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the compliance summary by resource and by rule for the account group ca-a91d626622af0035\\*\\*\\*\\*.
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
     * Queries the compliance summary for a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the compliance summary by resource and by rule for the account group ca-a91d626622af0035\\*\\*\\*\\*.
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
     * 账号组查询单个投递渠道.
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
     * 账号组查询单个投递渠道.
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
     * Queries the details of a specific rule in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the details of the rule `cr-7f7d626622af0041****` in the account group `ca-7f00626622af0041****`.
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
     * Queries the details of a specific rule in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the details of the rule `cr-7f7d626622af0041****` in the account group `ca-7f00626622af0041****`.
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
     * Queries the compliance results of rules in a specified compliance pack within a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the compliance results of rules in the compliance pack `cp-541e626622af0087****` for the account group `ca-04b3fd170e340007****`. The response returns a total of `1` rule and `0` non-compliant rules.
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
     * Queries the compliance results of rules in a specified compliance pack within a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the compliance results of rules in the compliance pack `cp-541e626622af0087****` for the account group `ca-04b3fd170e340007****`. The response returns a total of `1` rule and `0` non-compliant rules.
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
     * 查询指定风险等级的账号组规则合规统计
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
     * 查询指定风险等级的账号组规则合规统计
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
     * 下载Excel格式的规则合规评估报告到本地，便于您云下分配任务并跟进不合规资源配置的修改.
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
     * 下载Excel格式的规则合规评估报告到本地，便于您云下分配任务并跟进不合规资源配置的修改.
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
     * This topic provides an example on how to query the details of an ECS instance `i-bp12g4xbl4i0brkn****` in the Hangzhou region within the account group `ca-5885626622af0008****`.
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
     * This topic provides an example on how to query the details of an ECS instance `i-bp12g4xbl4i0brkn****` in the Hangzhou region within the account group `ca-5885626622af0008****`.
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
     * 查询多账号规则合规情况.
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
     * 查询多账号规则合规情况.
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
     * Queries the compliance statistics for resources in a specified compliance package within a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the compliance results for resources in the compliance package `cp-fdc8626622af00f9****` within the account group `ca-f632626622af0079****`. The response shows that of a total of `10` resources, `7` are non-compliant.
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
     * Queries the compliance statistics for resources in a specified compliance package within a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the compliance results for resources in the compliance package `cp-fdc8626622af00f9****` within the account group `ca-f632626622af0079****`. The response shows that of a total of `10` resources, `7` are non-compliant.
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
     * 查询指定账号组内规则对资源的评估结果，评估结果按资源所属地域进行分组展示.
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
     * 查询指定账号组内规则对资源的评估结果，评估结果按资源所属地域进行分组展示.
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
     * 查询指定账号组内规则对资源的评估结果，评估结果按资源类型进行分组展示.
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
     * 查询指定账号组内规则对资源的评估结果，评估结果按资源类型进行分组展示.
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
     * Queries the compliance timeline of a specific resource in an account group. A compliance timeline is a set of compliance evaluation records for a resource. Each record includes the time and content of an evaluation.
     *
     * @remarks
     * In Cloud Config, each resource has its own compliance timeline, which is composed of compliance evaluation records. A record is generated each time a rule is triggered to evaluate the resource. Rules can be triggered by configuration changes, periodic executions, or manual executions.
     * This topic provides an example of how to query the compliance timeline for the resource `new-bucket` (an OSS bucket). The resource is in the `cn-hangzhou` region and belongs to the member account `100931896542****` within the account group `ca-5885626622af0008****`. The response shows that the resource\\"s compliance timeline includes records with the timestamps `1625200295276` (UTC+8: 2021-07-02 12:31:35) and `1625200228510` (UTC+8: 2021-07-02 12:30:28).
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
     * Queries the compliance timeline of a specific resource in an account group. A compliance timeline is a set of compliance evaluation records for a resource. Each record includes the time and content of an evaluation.
     *
     * @remarks
     * In Cloud Config, each resource has its own compliance timeline, which is composed of compliance evaluation records. A record is generated each time a rule is triggered to evaluate the resource. Rules can be triggered by configuration changes, periodic executions, or manual executions.
     * This topic provides an example of how to query the compliance timeline for the resource `new-bucket` (an OSS bucket). The resource is in the `cn-hangzhou` region and belongs to the member account `100931896542****` within the account group `ca-5885626622af0008****`. The response shows that the resource\\"s compliance timeline includes records with the timestamps `1625200295276` (UTC+8: 2021-07-02 12:31:35) and `1625200228510` (UTC+8: 2021-07-02 12:30:28).
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
     * Queries the configuration history of a specific resource in a specified account group. After you enable Cloud Config, the service records all configuration and relationship changes for your resources and organizes them into a configuration history. This history is saved for 10 years by default.
     *
     * @remarks
     * Cloud Config provides a configuration history for each resource within the monitoring scope:
     * - For resources that already exist when you enable Cloud Config, the configuration history begins when the service is enabled.
     * - For resources that are created after you enable Cloud Config, the configuration history begins when the resources are created. Cloud Config records resource configuration changes every 10 minutes. When the configuration of a resource changes, a node appears in the configuration history. This node contains the resource configuration details, change details, and the related management event.
     * This topic provides an example of how to query the configuration history of an OSS bucket named `new-bucket`. The bucket is in the `cn-hangzhou` region, belongs to the member account `100931896542****`, and is part of the account group `ca-5885626622af0008****`. The returned result indicates that a configuration change for the resource was recorded at the UNIX timestamp `1624961112000` (UTC+8: 2021-06-29 18:05:12).
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
     * Queries the configuration history of a specific resource in a specified account group. After you enable Cloud Config, the service records all configuration and relationship changes for your resources and organizes them into a configuration history. This history is saved for 10 years by default.
     *
     * @remarks
     * Cloud Config provides a configuration history for each resource within the monitoring scope:
     * - For resources that already exist when you enable Cloud Config, the configuration history begins when the service is enabled.
     * - For resources that are created after you enable Cloud Config, the configuration history begins when the resources are created. Cloud Config records resource configuration changes every 10 minutes. When the configuration of a resource changes, a node appears in the configuration history. This node contains the resource configuration details, change details, and the related management event.
     * This topic provides an example of how to query the configuration history of an OSS bucket named `new-bucket`. The bucket is in the `cn-hangzhou` region, belongs to the member account `100931896542****`, and is part of the account group `ca-5885626622af0008****`. The returned result indicates that a configuration change for the resource was recorded at the UNIX timestamp `1624961112000` (UTC+8: 2021-06-29 18:05:12).
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
     * 从地域维度查询指定账号组内资源的统计结果.
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
     * 从地域维度查询指定账号组内资源的统计结果.
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
     * 从资源类型维度查询指定账号组内资源的统计结果.
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
     * 从资源类型维度查询指定账号组内资源的统计结果.
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
     * 查询账号组内全局资源下载清单信息。
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
     * 查询账号组内全局资源下载清单信息。
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
     * Queries the name, creation time, members, and type of an account group.
     *
     * @remarks
     * This topic provides an example of how to query the details of the account group `ca-88ea626622af0055****`. The response shows that the account group name is `Test_Group`, the description is `Test Group`, the type is `CUSTOM` (custom account group), and the status is `1` (created).
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
     * Queries the name, creation time, members, and type of an account group.
     *
     * @remarks
     * This topic provides an example of how to query the details of the account group `ca-88ea626622af0055****`. The response shows that the account group name is `Test_Group`, the description is `Test Group`, the type is `CUSTOM` (custom account group), and the status is `1` (created).
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
     * Queries the details of a specific compliance package.
     *
     * @remarks
     * This topic provides an example of how to query the details of the compliance package `cp-fdc8626622af00f9****`. The response indicates that the compliance package is named `MLPS 2.0 Level 3 Pre-check Compliance Package`, its status is `ACTIVE`, and the risk level of its rules is `1` (high risk).
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
     * Queries the details of a specific compliance package.
     *
     * @remarks
     * This topic provides an example of how to query the details of the compliance package `cp-fdc8626622af00f9****`. The response indicates that the compliance package is named `MLPS 2.0 Level 3 Pre-check Compliance Package`, its status is `ACTIVE`, and the risk level of its rules is `1` (high risk).
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
     * 获取合规包的评估报告.
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
     * 获取合规包的评估报告.
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
     * Queries the compliance summary for the current account.
     *
     * @remarks
     * This topic provides an example of how to query the compliance summary by resource and rule for an account group.
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
     * Queries the compliance summary for the current account.
     *
     * @remarks
     * This topic provides an example of how to query the compliance summary by resource and rule for an account group.
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
     * Queries the details of a specified delivery channel.
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
     * Queries the details of a specified delivery channel.
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
     * Queries the details of a specified rule.
     *
     * @remarks
     * This topic provides an example of how to query the details of the rule `cr-7f7d626622af0041****`.
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
     * Queries the details of a specified rule.
     *
     * @remarks
     * This topic provides an example of how to query the details of the rule `cr-7f7d626622af0041****`.
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
     * Queries the compliance statistics for rules in a specified compliance package.
     *
     * @remarks
     * This example shows how to query the compliance results for rules in the compliance package `cp-541e626622af0087****`. The response shows that the total number of rules is 1 and the number of non-compliant rules is 0.
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
     * Queries the compliance statistics for rules in a specified compliance package.
     *
     * @remarks
     * This example shows how to query the compliance results for rules in the compliance package `cp-541e626622af0087****`. The response shows that the total number of rules is 1 and the number of non-compliant rules is 0.
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
     * 下载Excel格式的规则合规评估报告到本地，便于您云下分配任务并跟进不合规资源配置的修改.
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
     * 下载Excel格式的规则合规评估报告到本地，便于您云下分配任务并跟进不合规资源配置的修改.
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
     * Queries the status of the Cloud Config service and the resource monitoring scope for the current account.
     *
     * @remarks
     * This topic provides an example of how to query the status of the Cloud Config service and the resource monitoring scope for the current account.
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
     * Queries the status of the Cloud Config service and the resource monitoring scope for the current account.
     *
     * @remarks
     * This topic provides an example of how to query the status of the Cloud Config service and the resource monitoring scope for the current account.
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
     * This topic provides an example of how to query the details of the ECS instance `i-bp12g4xbl4i0brkn****` in the China (Hangzhou) region.
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
     * This topic provides an example of how to query the details of the ECS instance `i-bp12g4xbl4i0brkn****` in the China (Hangzhou) region.
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
     * 从地域维度查询资源的统计结果.
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
     * 从地域维度查询资源的统计结果.
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
     * 从资源类型维度查询资源的统计结果.
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
     * 从资源类型维度查询资源的统计结果.
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
     * 查询用户集成云产品的授权状态
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
     * 查询用户集成云产品的授权状态
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
     * Queries the details of a specified rule template.
     *
     * @remarks
     * This topic provides an example of how to query the details of the rule template `cdn-domain-https-enabled`.
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
     * Queries the details of a specified rule template.
     *
     * @remarks
     * This topic provides an example of how to query the details of the rule template `cdn-domain-https-enabled`.
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
     * This topic describes how to query the details of the `ACS-ALB-BulkyEnableDeletionProtection` automatic remediation template.
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
     * This topic describes how to query the details of the `ACS-ALB-BulkyEnableDeletionProtection` automatic remediation template.
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
     * Retrieves a report generated from a report template.
     *
     * @param request - GetReportFromTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReportFromTemplateResponse
     *
     * @param GetReportFromTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetReportFromTemplateResponse
     */
    public function getReportFromTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportTemplateId) {
            @$query['ReportTemplateId'] = $request->reportTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetReportFromTemplate',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetReportFromTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a report generated from a report template.
     *
     * @param request - GetReportFromTemplateRequest
     *
     * @returns GetReportFromTemplateResponse
     *
     * @param GetReportFromTemplateRequest $request
     *
     * @return GetReportFromTemplateResponse
     */
    public function getReportFromTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReportFromTemplateWithOptions($request, $runtime);
    }

    /**
     * Retrieve details of a compliance report template.
     *
     * @param request - GetReportTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReportTemplateResponse
     *
     * @param GetReportTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetReportTemplateResponse
     */
    public function getReportTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportTemplateId) {
            @$query['ReportTemplateId'] = $request->reportTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetReportTemplate',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetReportTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve details of a compliance report template.
     *
     * @param request - GetReportTemplateRequest
     *
     * @returns GetReportTemplateResponse
     *
     * @param GetReportTemplateRequest $request
     *
     * @return GetReportTemplateResponse
     */
    public function getReportTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReportTemplateWithOptions($request, $runtime);
    }

    /**
     * 从规则的合规评估结果维度查询合规概要
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
     * 从规则的合规评估结果维度查询合规概要
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
     * Queries the compliance results for resources in a compliance package.
     *
     * @remarks
     * This topic provides an example of how to query the compliance results for resources in the compliance package `cp-541e626622af0087****`. The response shows that 7 of the 10 resources are non-compliant.
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
     * Queries the compliance results for resources in a compliance package.
     *
     * @remarks
     * This topic provides an example of how to query the compliance results for resources in the compliance package `cp-541e626622af0087****`. The response shows that 7 of the 10 resources are non-compliant.
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
     * 查询合规情况按照地域分组统计
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
     * 查询合规情况按照地域分组统计
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
     * 查询规则对资源的评估结果，评估结果按资源类型进行分组展示.
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
     * 查询规则对资源的评估结果，评估结果按资源类型进行分组展示.
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
     * Queries the compliance evaluation history of a specified resource. The history is a set of compliance evaluation records that contain the timestamp and details of each evaluation.
     *
     * @remarks
     * In Cloud Config, each resource has its own compliance evaluation history. A compliance evaluation record is generated when a rule is triggered to evaluate a resource. The collection of these records forms the compliance evaluation history of the resource. Rules can be triggered by configuration changes, periodic execution, or manual execution.
     * This topic provides an example of how to query the compliance evaluation history of the resource `new-bucket`, which is an Object Storage Service (OSS) bucket in the `cn-hangzhou` region. The returned result shows that the compliance evaluation history of the resource includes records with the timestamps `1625200295276` (UTC+8: 2021-07-02 12:31:35) and `1625200228510` (UTC+8: 2021-07-02 12:30:28).
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
     * Queries the compliance evaluation history of a specified resource. The history is a set of compliance evaluation records that contain the timestamp and details of each evaluation.
     *
     * @remarks
     * In Cloud Config, each resource has its own compliance evaluation history. A compliance evaluation record is generated when a rule is triggered to evaluate a resource. The collection of these records forms the compliance evaluation history of the resource. Rules can be triggered by configuration changes, periodic execution, or manual execution.
     * This topic provides an example of how to query the compliance evaluation history of the resource `new-bucket`, which is an Object Storage Service (OSS) bucket in the `cn-hangzhou` region. The returned result shows that the compliance evaluation history of the resource includes records with the timestamps `1625200295276` (UTC+8: 2021-07-02 12:31:35) and `1625200228510` (UTC+8: 2021-07-02 12:30:28).
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
     * This operation obtains configuration samples for a specified resource type.
     *
     * @param request - GetResourceConfigurationSampleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceConfigurationSampleResponse
     *
     * @param GetResourceConfigurationSampleRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetResourceConfigurationSampleResponse
     */
    public function getResourceConfigurationSampleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mockOnly) {
            @$query['MockOnly'] = $request->mockOnly;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceConfigurationSample',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceConfigurationSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation obtains configuration samples for a specified resource type.
     *
     * @param request - GetResourceConfigurationSampleRequest
     *
     * @returns GetResourceConfigurationSampleResponse
     *
     * @param GetResourceConfigurationSampleRequest $request
     *
     * @return GetResourceConfigurationSampleResponse
     */
    public function getResourceConfigurationSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceConfigurationSampleWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration history of a specified resource. Cloud Config records every configuration and relationship change for a resource in a configuration history. Recording starts after you enable the Cloud Config service. By default, the history is retained for 10 years.
     *
     * @remarks
     * Cloud Config provides a configuration history for each resource that it monitors. The details are as follows:
     * - For existing resources, the configuration history starts when you enable the Cloud Config service.
     * - For new resources created after you enable the service, the configuration history starts when the resource is created. Cloud Config records configuration changes every 10 minutes. When a configuration changes, a new node appears in the history. This node contains the resource configuration details, change details, and the associated management event.
     * This topic provides an example of how to query the configuration history for a resource named `new-bucket`. The resource is a bucket in the `cn-hangzhou` region. The response shows that the creation time of the resource is `1624961112000` (18:05:12 on June 29, 2021, UTC+8).
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
     * Queries the configuration history of a specified resource. Cloud Config records every configuration and relationship change for a resource in a configuration history. Recording starts after you enable the Cloud Config service. By default, the history is retained for 10 years.
     *
     * @remarks
     * Cloud Config provides a configuration history for each resource that it monitors. The details are as follows:
     * - For existing resources, the configuration history starts when you enable the Cloud Config service.
     * - For new resources created after you enable the service, the configuration history starts when the resource is created. Cloud Config records configuration changes every 10 minutes. When a configuration changes, a new node appears in the history. This node contains the resource configuration details, change details, and the associated management event.
     * This topic provides an example of how to query the configuration history for a resource named `new-bucket`. The resource is a bucket in the `cn-hangzhou` region. The response shows that the creation time of the resource is `1624961112000` (18:05:12 on June 29, 2021, UTC+8).
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
     * Queries information about the most recently generated global resource inventory for the current account.
     *
     * @remarks
     * ### Prerequisites
     * You can call the [GenerateResourceInventory](https://help.aliyun.com/document_detail/2398354.html) operation to generate a global resource inventory. You can then call this operation to obtain the URL of the global resource inventory.
     * ### Usage notes
     * This topic provides an example of how to query the most recently generated global resource inventory for the current account.
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
     * Queries information about the most recently generated global resource inventory for the current account.
     *
     * @remarks
     * ### Prerequisites
     * You can call the [GenerateResourceInventory](https://help.aliyun.com/document_detail/2398354.html) operation to generate a global resource inventory. You can then call this operation to obtain the URL of the global resource inventory.
     * ### Usage notes
     * This topic provides an example of how to query the most recently generated global resource inventory for the current account.
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
     * This operation retrieves the property descriptions for a specified resource type.
     *
     * @param request - GetResourceTypePropertiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceTypePropertiesResponse
     *
     * @param GetResourceTypePropertiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetResourceTypePropertiesResponse
     */
    public function getResourceTypePropertiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceTypeProperties',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceTypePropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation retrieves the property descriptions for a specified resource type.
     *
     * @param request - GetResourceTypePropertiesRequest
     *
     * @returns GetResourceTypePropertiesResponse
     *
     * @param GetResourceTypePropertiesRequest $request
     *
     * @return GetResourceTypePropertiesResponse
     */
    public function getResourceTypeProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypePropertiesWithOptions($request, $runtime);
    }

    /**
     * Queries the supported resource relations for a specified resource type.
     *
     * @remarks
     * This topic provides an example of how to query the resource relations supported by the ACS::ECS::Instance resource type.
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
     * Queries the supported resource relations for a specified resource type.
     *
     * @remarks
     * This topic provides an example of how to query the resource relations supported by the ACS::ECS::Instance resource type.
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
     * 忽略评估结果增加截止时间.
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
     * 忽略评估结果增加截止时间.
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
     * Ignores the evaluation results of a rule for specific resources. You can also set a time period to ignore the rule. When the ignore period expires, the system automatically resumes displaying the evaluation results of the rule for the resources.
     *
     * @remarks
     * After a non-compliant resource is ignored, the rule still evaluates the resource. The evaluation result is Ignored.
     * This topic provides an example of how to ignore the evaluation results of the rule `cr-7e72626622af0051****` for a specified non-compliant resource in the Alibaba Cloud account `100931896542****`. The region ID of the resource is `cn-beijing`, the resource type is `ACS::SLB::LoadBalancer`, and the resource ID is `lb-hp3a3b4ztyfm2plgm****`.
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
     * Ignores the evaluation results of a rule for specific resources. You can also set a time period to ignore the rule. When the ignore period expires, the system automatically resumes displaying the evaluation results of the rule for the resources.
     *
     * @remarks
     * After a non-compliant resource is ignored, the rule still evaluates the resource. The evaluation result is Ignored.
     * This topic provides an example of how to ignore the evaluation results of the rule `cr-7e72626622af0051****` for a specified non-compliant resource in the Alibaba Cloud account `100931896542****`. The region ID of the resource is `cn-beijing`, the resource type is `ACS::SLB::LoadBalancer`, and the resource ID is `lb-hp3a3b4ztyfm2plgm****`.
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
     * Queries the compliance packs in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the compliance packs in the account group `ca-f632626622af0079****`. The response shows that the account group contains the compliance pack `cp-fdc8626622af00f9****`.
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

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
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
     * Queries the compliance packs in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the compliance packs in the account group `ca-f632626622af0079****`. The response shows that the account group contains the compliance pack `cp-fdc8626622af00f9****`.
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
     * 账号组查询投递渠道列表.
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
     * 账号组查询投递渠道列表.
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
     * Queries the evaluation results of a rule for resources in a specified account group.
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
     * Queries the evaluation results of a rule for resources in a specified account group.
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
     * 透出用户账号组维度的评估结果统计
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
     * 透出用户账号组维度的评估结果统计
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
     * Queries the rules in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the rules in the account group `ca-f632626622af0079****`. The response shows that the account group contains one rule. This rule evaluates two resources, and the compliance result is `COMPLIANT`.
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

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
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
     * Queries the rules in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the rules in the account group `ca-f632626622af0079****`. The response shows that the account group contains one rule. This rule evaluates two resources, and the compliance result is `COMPLIANT`.
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
     * Queries the resources in a specified account group.
     *
     * @remarks
     * ### Limits
     * The resource checklist displays only some of your resources because Cloud Config supports only specific Alibaba Cloud services and resource types. For more information about the supported services and resource types, see [Supported resource types and resource relationships](https://help.aliyun.com/document_detail/127411.html).
     * ### Usage notes
     * This topic provides an example of how to query the resources of a member with the ID `100931896542****` in the account group `ca-c560626622af0005****`. The response indicates that there are eight resources in total.
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

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
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
     * Queries the resources in a specified account group.
     *
     * @remarks
     * ### Limits
     * The resource checklist displays only some of your resources because Cloud Config supports only specific Alibaba Cloud services and resource types. For more information about the supported services and resource types, see [Supported resource types and resource relationships](https://help.aliyun.com/document_detail/127411.html).
     * ### Usage notes
     * This topic provides an example of how to query the resources of a member with the ID `100931896542****` in the account group `ca-c560626622af0005****`. The response indicates that there are eight resources in total.
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
     * This operation retrieves the list of recommended managed rules for an account group.
     *
     * @remarks
     * For more information about the concepts, working principles, and integration process of dry run rules, see [Definition and working principles of dry run rules](https://help.aliyun.com/document_detail/470802.html).
     * Dry run rules and rule templates are based on the same underlying rule definitions. After you create a resource, a dry run rule continuously checks the resource for compliance.
     *
     * @param request - ListAggregateRecommendManagedRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggregateRecommendManagedRulesResponse
     *
     * @param ListAggregateRecommendManagedRulesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListAggregateRecommendManagedRulesResponse
     */
    public function listAggregateRecommendManagedRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggregatorId) {
            @$query['AggregatorId'] = $request->aggregatorId;
        }

        if (null !== $request->excludeRegionIdsScope) {
            @$query['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$query['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$query['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionIdsScope) {
            @$query['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$query['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$query['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->selectedManagedRuleIdentifiers) {
            @$query['SelectedManagedRuleIdentifiers'] = $request->selectedManagedRuleIdentifiers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggregateRecommendManagedRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAggregateRecommendManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation retrieves the list of recommended managed rules for an account group.
     *
     * @remarks
     * For more information about the concepts, working principles, and integration process of dry run rules, see [Definition and working principles of dry run rules](https://help.aliyun.com/document_detail/470802.html).
     * Dry run rules and rule templates are based on the same underlying rule definitions. After you create a resource, a dry run rule continuously checks the resource for compliance.
     *
     * @param request - ListAggregateRecommendManagedRulesRequest
     *
     * @returns ListAggregateRecommendManagedRulesResponse
     *
     * @param ListAggregateRecommendManagedRulesRequest $request
     *
     * @return ListAggregateRecommendManagedRulesResponse
     */
    public function listAggregateRecommendManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateRecommendManagedRulesWithOptions($request, $runtime);
    }

    /**
     * 账号组规则修正执行历史.
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
     * 账号组规则修正执行历史.
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
     * Queries the remediations in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the remediation settings for the rule `cr-6b7c626622af00b4****` in the account group `ca-6b4a626622af0012****`.
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
     * Queries the remediations in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to query the remediation settings for the rule `cr-6b7c626622af00b4****` in the account group `ca-6b4a626622af0012****`.
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
     * Queries the rule evaluation results for resources in a specified account group.
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

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
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
     * Queries the rule evaluation results for resources in a specified account group.
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
     * 获取资源关系列表.
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
     * 获取资源关系列表.
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
     * You can use SQL Select statements to search for resources in a specific account group based on fields in the resource properties.
     *
     * @remarks
     * When you write an SQL `Select` statement, you can retrieve the search fields and their types from the property file of the target resource type. For more information about resource property files, see [alibabacloud-config-resource-schema](https://github.com/aliyun/alibabacloud-config-resource-schema).
     * > - The resource property files contain all resource types that are supported by Cloud Config. These files are named after their corresponding resource types. For example, the property file for the `ACS::ECS::Instance` resource type is `ACS_ECS_Instance.properties.json`. The path to the property files is `config/properties/resource-types`.
     * >
     * > - For more information about SQL search examples and limits, see [SQL search examples](https://help.aliyun.com/document_detail/398718.html) and [Limits of SQL search](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example of an advanced search query. The query finds all resources in the account group `ca-4b05626622af000c****` that have a tag key of `business` and a tag value of `online`.
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
     * You can use SQL Select statements to search for resources in a specific account group based on fields in the resource properties.
     *
     * @remarks
     * When you write an SQL `Select` statement, you can retrieve the search fields and their types from the property file of the target resource type. For more information about resource property files, see [alibabacloud-config-resource-schema](https://github.com/aliyun/alibabacloud-config-resource-schema).
     * > - The resource property files contain all resource types that are supported by Cloud Config. These files are named after their corresponding resource types. For example, the property file for the `ACS::ECS::Instance` resource type is `ACS_ECS_Instance.properties.json`. The path to the property files is `config/properties/resource-types`.
     * >
     * > - For more information about SQL search examples and limits, see [SQL search examples](https://help.aliyun.com/document_detail/398718.html) and [Limits of SQL search](https://help.aliyun.com/document_detail/398750.html).
     * This topic provides an example of an advanced search query. The query finds all resources in the account group `ca-4b05626622af000c****` that have a tag key of `business` and a tag value of `online`.
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
     * 获取账号组列表.
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
     * 获取账号组列表.
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
     * Queries the details of all compliance pack templates provided by CloudConfig.
     *
     * @remarks
     * A compliance pack template is a collection of rules customized by CloudConfig for compliance scenarios.
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

        if (null !== $request->filterType) {
            @$query['FilterType'] = $request->filterType;
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

        if (null !== $request->ruleRiskLevel) {
            @$query['RuleRiskLevel'] = $request->ruleRiskLevel;
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
     * Queries the details of all compliance pack templates provided by CloudConfig.
     *
     * @remarks
     * A compliance pack template is a collection of rules customized by CloudConfig for compliance scenarios.
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
     * Lists the compliance packs for the current account.
     *
     * @remarks
     * This topic provides an example of how to list compliance packs. The response returns one compliance pack record: `cp-fdc8626622af00f9****`.
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

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
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
     * Lists the compliance packs for the current account.
     *
     * @remarks
     * This topic provides an example of how to list compliance packs. The response returns one compliance pack record: `cp-fdc8626622af00f9****`.
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
     * Returns a list of delivery channels.
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
     * Returns a list of delivery channels.
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
     * Queries the compliance evaluation results of a rule.
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
        $query = [];
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

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfigRuleEvaluationResults',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigRuleEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the compliance evaluation results of a rule.
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
     * 透出用户维度的历史评估结果统计
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
     * 透出用户维度的历史评估结果统计
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
     * Lists the operators available for Cloud Config rules.
     *
     * @param request - ListConfigRuleOperatorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigRuleOperatorsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListConfigRuleOperatorsResponse
     */
    public function listConfigRuleOperatorsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListConfigRuleOperators',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigRuleOperatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the operators available for Cloud Config rules.
     *
     * @returns ListConfigRuleOperatorsResponse
     *
     * @return ListConfigRuleOperatorsResponse
     */
    public function listConfigRuleOperators()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRuleOperatorsWithOptions($runtime);
    }

    /**
     * Queries a list of rules.
     *
     * @remarks
     * This topic provides an example of how to query the list of rules for the current account. The sample response indicates that the rule list contains one rule, three resources are evaluated, and the compliance result is COMPLIANT.
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

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
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
     * Queries a list of rules.
     *
     * @remarks
     * This topic provides an example of how to query the list of rules for the current account. The sample response indicates that the rule list contains one rule, three resources are evaluated, and the compliance result is COMPLIANT.
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
     * Queries a list of resources that are aggregated across regions in the current Alibaba Cloud account.
     *
     * @remarks
     * ### Limits
     * Cloud Config supports only specific Alibaba Cloud services and resource types. The returned resource list includes only these supported resources. For more information about supported services and resource types, see [Supported resource types and resource relationships](https://help.aliyun.com/document_detail/127411.html).
     * ### Usage notes
     * This topic provides an example of how to query the resources in your account. The sample response shows that eight resources are returned.
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

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
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
     * Queries a list of resources that are aggregated across regions in the current Alibaba Cloud account.
     *
     * @remarks
     * ### Limits
     * Cloud Config supports only specific Alibaba Cloud services and resource types. The returned resource list includes only these supported resources. For more information about supported services and resource types, see [Supported resource types and resource relationships](https://help.aliyun.com/document_detail/127411.html).
     * ### Usage notes
     * This topic provides an example of how to query the resources in your account. The sample response shows that eight resources are returned.
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
     * Queries the services integrated with CloudConfig and their statuses.
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
     * Queries the services integrated with CloudConfig and their statuses.
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
     * Queries the rule templates that are supported by Cloud Config.
     *
     * @remarks
     * ### Background information
     * For more information about rule definitions, working principles, and templates, see [Definition and working principles of rules](https://help.aliyun.com/document_detail/128273.html).
     * ### Usage notes
     * This topic provides an example of how to query all rule templates that contain the keyword `CDN`. The sample response shows that a total of 21 rule templates are returned.
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
     * Queries the rule templates that are supported by Cloud Config.
     *
     * @remarks
     * ### Background information
     * For more information about rule definitions, working principles, and templates, see [Definition and working principles of rules](https://help.aliyun.com/document_detail/128273.html).
     * ### Usage notes
     * This topic provides an example of how to query all rule templates that contain the keyword `CDN`. The sample response shows that a total of 21 rule templates are returned.
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
     * Queries the proactive rules supported by Cloud Config.
     *
     * @remarks
     * For more information about the concepts, working principles, and integration procedure of proactive rules, see [Definitions and working principles of proactive rules](https://help.aliyun.com/document_detail/470802.html).
     * Proactive rules and rule templates originate from the same source rules. After you create resources, proactive rules continuously check your resources for compliance.
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
     * Queries the proactive rules supported by Cloud Config.
     *
     * @remarks
     * For more information about the concepts, working principles, and integration procedure of proactive rules, see [Definitions and working principles of proactive rules](https://help.aliyun.com/document_detail/470802.html).
     * Proactive rules and rule templates originate from the same source rules. After you create resources, proactive rules continuously check your resources for compliance.
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
     * This operation obtains a list of recommended managed rules.
     *
     * @param request - ListRecommendManagedRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecommendManagedRulesResponse
     *
     * @param ListRecommendManagedRulesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListRecommendManagedRulesResponse
     */
    public function listRecommendManagedRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->excludeRegionIdsScope) {
            @$query['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$query['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$query['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionIdsScope) {
            @$query['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$query['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$query['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->selectedManagedRuleIdentifiers) {
            @$query['SelectedManagedRuleIdentifiers'] = $request->selectedManagedRuleIdentifiers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecommendManagedRules',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecommendManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation obtains a list of recommended managed rules.
     *
     * @param request - ListRecommendManagedRulesRequest
     *
     * @returns ListRecommendManagedRulesResponse
     *
     * @param ListRecommendManagedRulesRequest $request
     *
     * @return ListRecommendManagedRulesResponse
     */
    public function listRecommendManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecommendManagedRulesWithOptions($request, $runtime);
    }

    /**
     * 修正执行历史.
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
     * 修正执行历史.
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
     * 修正模版列表.
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
     * 修正模版列表.
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
     * 查询规则的修正.
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
     * 查询规则的修正.
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
     * Queries the details of compliance report templates in batches.
     *
     * @param request - ListReportTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReportTemplatesResponse
     *
     * @param ListReportTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListReportTemplatesResponse
     */
    public function listReportTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
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
            'action' => 'ListReportTemplates',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListReportTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of compliance report templates in batches.
     *
     * @param request - ListReportTemplatesRequest
     *
     * @returns ListReportTemplatesResponse
     *
     * @param ListReportTemplatesRequest $request
     *
     * @return ListReportTemplatesResponse
     */
    public function listReportTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReportTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the evaluation results for a resource based on a rule.
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

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
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
     * Queries the evaluation results for a resource based on a rule.
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
     * 获取资源关系列表.
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
     * 获取资源关系列表.
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
     * 资源列表高级搜索接口.
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
     * 资源列表高级搜索接口.
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
     * Queries the tags attached to resources in Cloud Config.
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
     * Queries the tags attached to resources in Cloud Config.
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
     * 自定义规则评估结果回调.
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
     * 自定义规则评估结果回调.
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
     * 取消评估结果的忽略状态
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
     * 取消评估结果的忽略状态
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
     * 恢复已忽略的某条规则对某些资源的评估结果后，继续显示该规则对资源的评估结果.
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
     * 恢复已忽略的某条规则对某些资源的评估结果后，继续显示该规则对资源的评估结果.
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
     * 重新审计指定账号组内的某条规则或某个合规包中的所有规则.
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
     * 重新审计指定账号组内的某条规则或某个合规包中的所有规则.
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
     * Manually run remediation for a specified account group rule.
     *
     * @remarks
     * This topic describes how to manually run remediation once for the rule `cr-6b7c626622af00b4****` in the account group `ca-6b4a626622af0012****`. The response indicates that remediation completed successfully.
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

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
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
     * Manually run remediation for a specified account group rule.
     *
     * @remarks
     * This topic describes how to manually run remediation once for the rule `cr-6b7c626622af00b4****` in the account group `ca-6b4a626622af0012****`. The response indicates that remediation completed successfully.
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
     * Re-evaluates a specific rule or all rules in a compliance package.
     *
     * @remarks
     * This topic provides an example of how to re-evaluate the rule cr-9920626622af0035\\*\\*\\*\\*.
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
     * Re-evaluates a specific rule or all rules in a compliance package.
     *
     * @remarks
     * This topic provides an example of how to re-evaluate the rule cr-9920626622af0035\\*\\*\\*\\*.
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
     * Starts a re-evaluation of a single resource.
     *
     * @param request - StartConfigRuleEvaluationByResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartConfigRuleEvaluationByResourceResponse
     *
     * @param StartConfigRuleEvaluationByResourceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return StartConfigRuleEvaluationByResourceResponse
     */
    public function startConfigRuleEvaluationByResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartConfigRuleEvaluationByResource',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartConfigRuleEvaluationByResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a re-evaluation of a single resource.
     *
     * @param request - StartConfigRuleEvaluationByResourceRequest
     *
     * @returns StartConfigRuleEvaluationByResourceResponse
     *
     * @param StartConfigRuleEvaluationByResourceRequest $request
     *
     * @return StartConfigRuleEvaluationByResourceResponse
     */
    public function startConfigRuleEvaluationByResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConfigRuleEvaluationByResourceWithOptions($request, $runtime);
    }

    /**
     * 启用配置审计服务
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
     * 启用配置审计服务
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
     * Manually execute the specified rule remediation.
     *
     * @remarks
     * This topic provides an example of a manual remediation for rule `cr-8a973ac2e2be00a2****`. The returned result indicates a successful manual remediation.
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

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
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
     * Manually execute the specified rule remediation.
     *
     * @remarks
     * This topic provides an example of a manual remediation for rule `cr-8a973ac2e2be00a2****`. The returned result indicates a successful manual remediation.
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
     * 停用配置审计服务
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
     * 停用配置审计服务
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
     * Attaches tags to CloudConfig rules, account groups, and compliance packages.
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
     * Attaches tags to CloudConfig rules, account groups, and compliance packages.
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
     * Sends a real-time test notification.
     *
     * @param request - TriggerReportSendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerReportSendResponse
     *
     * @param TriggerReportSendRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TriggerReportSendResponse
     */
    public function triggerReportSendWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reportTemplateId) {
            @$body['ReportTemplateId'] = $request->reportTemplateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TriggerReportSend',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TriggerReportSendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a real-time test notification.
     *
     * @param request - TriggerReportSendRequest
     *
     * @returns TriggerReportSendResponse
     *
     * @param TriggerReportSendRequest $request
     *
     * @return TriggerReportSendResponse
     */
    public function triggerReportSend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerReportSendWithOptions($request, $runtime);
    }

    /**
     * Detaches tags from resources in Cloud Config.
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
     * Detaches tags from resources in Cloud Config.
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
     * Updates a compliance pack in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to change the value of a parameter for the `eip-bandwidth-limit` rule template to `20` in the `cp-fdc8626622af00f9****` compliance pack that belongs to the `ca-f632626622af0079****` account group.
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
     * Updates a compliance pack in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to change the value of a parameter for the `eip-bandwidth-limit` rule template to `20` in the `cp-fdc8626622af00f9****` compliance pack that belongs to the `ca-f632626622af0079****` account group.
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
     * 账号组修改投递渠道.
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
     * 账号组修改投递渠道.
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
     * Modifies the description, input parameters, and risk level of a rule in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to change the risk level of the rule `cr-4e3d626622af0080****` in the account group `ca-a4e5626622af0079****` to `3` (low risk).
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

        if (null !== $request->conditions) {
            @$body['Conditions'] = $request->conditions;
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
     * Modifies the description, input parameters, and risk level of a rule in a specified account group.
     *
     * @remarks
     * This topic provides an example of how to change the risk level of the rule `cr-4e3d626622af0080****` in the account group `ca-a4e5626622af0079****` to `3` (low risk).
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
     * Updates a specified rule remediation.
     *
     * @remarks
     * This topic provides an example of how to change the execution mode of the remediation `crr-909ba2d4716700eb****` to `AUTO_EXECUTION` (automatic execution) for a rule in the account group `ca-6b4a626622af0012****`.
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
     * Updates a specified rule remediation.
     *
     * @remarks
     * This topic provides an example of how to change the execution mode of the remediation `crr-909ba2d4716700eb****` to `AUTO_EXECUTION` (automatic execution) for a rule in the account group `ca-6b4a626622af0012****`.
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
     * The management account or a delegated administrator account of a resource directory can modify the name and description of an account group, and add or remove members.
     *
     * @remarks
     * This topic provides an example of how to add a member to the account group `ca-dacf86d8314e00eb****`. The member has an ID of `173808452267****`, a name of `Tony`, and an account type of `ResourceDirectory`.
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
     * The management account or a delegated administrator account of a resource directory can modify the name and description of an account group, and add or remove members.
     *
     * @remarks
     * This topic provides an example of how to add a member to the account group `ca-dacf86d8314e00eb****`. The member has an ID of `173808452267****`, a name of `Tony`, and an account type of `ResourceDirectory`.
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
     * Updates the configuration of a specified compliance pack in the current account.
     *
     * @remarks
     * This topic provides an example of how to change the parameter value for the `eip-bandwidth-limit` rule to `20` in the compliance pack `cp-a8a8626622af0082****`.
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
     * Updates the configuration of a specified compliance pack in the current account.
     *
     * @remarks
     * This topic provides an example of how to change the parameter value for the `eip-bandwidth-limit` rule to `20` in the compliance pack `cp-a8a8626622af0082****`.
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
     * This operation modifies a delivery channel for the current account.
     *
     * @remarks
     * This topic provides an example of how to change the status of the delivery channel `cdc-8e45ff4e06a3a8****` to `0` (disabled). After you disable the delivery channel, Cloud Config retains the most recent delivery configuration and stops delivering resource data.
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
     * This operation modifies a delivery channel for the current account.
     *
     * @remarks
     * This topic provides an example of how to change the status of the delivery channel `cdc-8e45ff4e06a3a8****` to `0` (disabled). After you disable the delivery channel, Cloud Config retains the most recent delivery configuration and stops delivering resource data.
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
     * This topic shows how to change the risk level of rule `cr-a260626622af0005****` to `3`, which indicates low risk.
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

        if (null !== $request->conditions) {
            @$body['Conditions'] = $request->conditions;
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
     * This topic shows how to change the risk level of rule `cr-a260626622af0005****` to `3`, which indicates low risk.
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
     * 修改配置审计监控资源范围.
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
     * 修改配置审计监控资源范围.
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

    /**
     * 修改云产品集成用户状态
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
     * 修改云产品集成用户状态
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
     * Updates the specified remediation setting.
     *
     * @remarks
     * This topic provides an example of how to change the execution mode for the remediation setting `crr-909ba2d4716700eb****` to `AUTO_EXECUTION` (automatic execution).
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
     * Updates the specified remediation setting.
     *
     * @remarks
     * This topic provides an example of how to change the execution mode for the remediation setting `crr-909ba2d4716700eb****` to `AUTO_EXECUTION` (automatic execution).
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

    /**
     * Updates a compliance report template.
     *
     * @param tmpReq - UpdateReportTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateReportTemplateResponse
     *
     * @param UpdateReportTemplateRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateReportTemplateResponse
     */
    public function updateReportTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateReportTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->reportScope) {
            $request->reportScopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reportScope, 'ReportScope', 'json');
        }

        $body = [];
        if (null !== $request->reportFileFormats) {
            @$body['ReportFileFormats'] = $request->reportFileFormats;
        }

        if (null !== $request->reportGranularity) {
            @$body['ReportGranularity'] = $request->reportGranularity;
        }

        if (null !== $request->reportLanguage) {
            @$body['ReportLanguage'] = $request->reportLanguage;
        }

        if (null !== $request->reportScopeShrink) {
            @$body['ReportScope'] = $request->reportScopeShrink;
        }

        if (null !== $request->reportTemplateDescription) {
            @$body['ReportTemplateDescription'] = $request->reportTemplateDescription;
        }

        if (null !== $request->reportTemplateId) {
            @$body['ReportTemplateId'] = $request->reportTemplateId;
        }

        if (null !== $request->reportTemplateName) {
            @$body['ReportTemplateName'] = $request->reportTemplateName;
        }

        if (null !== $request->subscriptionFrequency) {
            @$body['SubscriptionFrequency'] = $request->subscriptionFrequency;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateReportTemplate',
            'version' => '2020-09-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateReportTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a compliance report template.
     *
     * @param request - UpdateReportTemplateRequest
     *
     * @returns UpdateReportTemplateResponse
     *
     * @param UpdateReportTemplateRequest $request
     *
     * @return UpdateReportTemplateResponse
     */
    public function updateReportTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateReportTemplateWithOptions($request, $runtime);
    }
}
