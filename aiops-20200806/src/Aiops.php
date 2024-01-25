<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddAlgorithmRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddAlgorithmResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddBusinessGroupOneRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddBusinessGroupOneResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddBusinessGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddBusinessGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddBusinessGroupShrinkRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddScenarioRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddScenarioResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddSceneListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddSceneListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddScriptRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddScriptResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddTagInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AddTagInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AgainSubmitApplyPermissionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\AgainSubmitApplyPermissionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ApplyAuthorizationRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ApplyAuthorizationResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CheckDataSourceLinkConnectionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CheckDataSourceLinkConnectionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CheckLogRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CheckLogResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CloseEventRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CloseEventResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ConfirmAuthorizationRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ConfirmAuthorizationResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CountLatestReportsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CountLatestReportsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateAlertContactGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateAlertContactGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateAlertContactRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateAlertContactResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateCommandRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateCommandResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateDumpRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateDumpResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateInspectionRecordRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateInspectionRecordResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateMessageRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateMessageResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateSceneModelApplyRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateSceneModelApplyResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateSceneModelRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateSceneModelResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateSceneRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\CreateSceneResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DelBusinessGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DelBusinessGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertContactFromGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertContactFromGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertContactGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertContactGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertContactRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertContactResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertSettingListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertSettingListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertSettingRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlertSettingResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlgorithmInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteAlgorithmInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteBusinessGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteBusinessGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteBusinessResourceTagRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteBusinessResourceTagResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteDataSourceConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteDataSourceConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteGroupTopologyTagLogRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteGroupTopologyTagLogResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteRealSceneInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteRealSceneInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteReportEmailConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteReportEmailConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteResourceWhitelistRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteResourceWhitelistResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteScenarioRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteScenarioResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteSceneListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteSceneListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteSceneModelRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteSceneModelResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteSceneRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteSceneResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteTagInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DeleteTagInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAccountAlertEventRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAccountAlertEventResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAdvisorInspectionProductsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAdvisorInspectionProductsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertBusinessGroupWithAlertSettingIdRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertBusinessGroupWithAlertSettingIdResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertContactGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertContactGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertContactRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertContactResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertContactWithAlertSettingIdRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertContactWithAlertSettingIdResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertContactWithGroupIdRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertContactWithGroupIdResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertDetailDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertDetailDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertDetailTrendDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertDetailTrendDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertEventRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertEventResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertFinalDataListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertFinalDataListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertResourceRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertResourceResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertSettingByIdRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertSettingByIdResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertSettingRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertSettingResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAllAlertContactGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAllAlertContactGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAllAlertContactRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAllAlertContactResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAllBusinessGroupInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAllBusinessGroupInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAllSceneModelRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAllSceneModelResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAnalysisDataListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAnalysisDataListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeBusinessAnalysisDataListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeBusinessAnalysisDataListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeDiagnoseRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeDiagnoseResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeDiagnoseResultRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeDiagnoseResultResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeEventTopologyDetailRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeEventTopologyDetailResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeEventTopologyRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeEventTopologyResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeFcFunctionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeFcFunctionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeFcRegionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeFcRegionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeFcServiceRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeFcServiceResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeHistoryRiskRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeHistoryRiskResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionProgressRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionProgressResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionResourcesRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionResourcesResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionResultRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionResultResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionSettingsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionSettingsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionThresholdRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionThresholdResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionWhitelistsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInspectionWhitelistsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInvocationResultsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeInvocationResultsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeLastInspectionSummaryRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeLastInspectionSummaryResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeModelRelationScenesRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeModelRelationScenesResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeProductRiskPieRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeProductRiskPieResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeReportDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeReportEmailConfigsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeReportEmailConfigsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeReportSubscriptionsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeReportSubscriptionsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeResourceMetricRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeResourceMetricResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskEventDetailsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskEventDetailsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskEventListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskEventListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskEventTopologyRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskEventTopologyResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskResultSeveritySummaryRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskResultSeveritySummaryResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskResultStatisticalRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeRiskResultStatisticalResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneDetailRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneDetailResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneModelByTypeRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneModelByTypeResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneModelDetailRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneModelDetailResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneModelsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneModelsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneModelVersionHistoryRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneModelVersionHistoryResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeScenesRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeScenesResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneSystemModelRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeSceneSystemModelResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeStatisticalDataByProductRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeStatisticalDataByProductResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeStatisticalDataByRiskCodeRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeStatisticalDataByRiskCodeResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeWhitelistResourcesRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeWhitelistResourcesResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\EndScriptListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\EndScriptListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\FeedbackAlertAlgorithmRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\FeedbackAlertAlgorithmResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAiopsEventListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAiopsEventListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAiopsEventNewListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAiopsEventNewListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlertDetailTrendDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlertDetailTrendDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlertListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlertListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlertTrentRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlertTrentResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmDetailsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmDetailsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmForecastDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmForecastDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmForecastDetailsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmForecastDetailsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAlgorithmResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAllAlgorithmConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAllAlgorithmConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAllTagResourceNumListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAllTagResourceNumListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAnalysisProcessRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAnalysisProcessResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAuthorizationRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAuthorizationResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAvgRepairTimeRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetAvgRepairTimeResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBackScriptListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBackScriptListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupAllRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupAllResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupIndexRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupIndexResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupOverviewListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupOverviewListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessLogAlertDetailRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessLogAlertDetailResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessLogAlertListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessLogAlertListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessLogAlertTopNRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessLogAlertTopNResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricAlertDetailListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricAlertDetailListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricAlertListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricAlertListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricAlertTopNRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricAlertTopNResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricAllListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricAllListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricForecastListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricForecastListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricResourceByMetricIdRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricResourceByMetricIdResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricSceneListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetBusinessMetricSceneListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetCidInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetCidInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetCloudAllResourceListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetCloudAllResourceListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetCloudResourceListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetCloudResourceListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetCloudResourceRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetCloudResourceResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetConnectInstancesRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetConnectInstancesResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDataSourceDetailRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDataSourceDetailResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDataSourceListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDataSourceListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDataSourceTargetParamListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDataSourceTargetParamListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDataVolumeRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDataVolumeResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDiagInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDiagInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDomainConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetDomainConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventAbNormalDetailRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventAbNormalDetailResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventAbNormalDetailTrendDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventAbNormalDetailTrendDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventAbNormalListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventAbNormalListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventBusinessMetricListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventBusinessMetricListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventDetailRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventDetailResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventRootCauseRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventRootCauseResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventSequentialTrentRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventSequentialTrentResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventStatisticsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventStatisticsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventTrentRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventTrentResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventTypeRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetEventTypeResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetExceptionsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetExceptionsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetExtendRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetExtendResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetForecastBusinessMetricRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetForecastBusinessMetricResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetFunctionValidInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetFunctionValidInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetGroupByDimensionDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetGroupByDimensionDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetGroupResourceNumRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetGroupResourceNumResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetGroupTopologyTagRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetGroupTopologyTagResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetIncidentAllRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetIncidentAllResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetIndexDialysisArrayRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetIndexDialysisArrayResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetIndexDialysisListLineRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetIndexDialysisListLineResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetIndexDialysisListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetIndexDialysisListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetInspectionReportDownloadUrlRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetInspectionReportDownloadUrlResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetInstancesNumRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetInstancesNumResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetLogSampleColumnRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetLogSampleColumnResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetLogSampleRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetLogSampleResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetMetricEventSequentialTrentRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetMetricEventSequentialTrentResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetNewOptimizationItemDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetNewOptimizationItemDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionDetailListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionDetailListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionDetailThrendDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionDetailThrendDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionItemsListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionItemsListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionStatusRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetPatrolInspectionStatusResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetProductInstanceRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetProductInstanceResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetProductMetricListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRealDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRealDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRegionListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRepairScriptRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRepairScriptResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetResourceListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetResourceListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetResourceTagDropListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetResourceTagDropListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetResourceTypeListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskInAllRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskInAllResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskInspectionTypeListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskInspectionTypeListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskInspectStatisticsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskInspectStatisticsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolDetailListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolDetailListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolStatisticalTrendsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolStatisticalTrendsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolStatisticsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolStatisticsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolStatusRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRiskPatrolStatusResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRoleResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRootCauseRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetRootCauseResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetScenarioDetailRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetScenarioDetailResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetScenarioListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetScenarioListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetScenarioStatisticsListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetScenarioStatisticsListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSceneByIdRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSceneByIdResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSceneDetailsListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSceneDetailsListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSceneListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSceneListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSceneMetricTableRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSceneMetricTableResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetScriptEventRootCauseRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetScriptEventRootCauseResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSlsLogDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSlsLogDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSynCloudResourceListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetSynCloudResourceListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetTagBusinessGroupListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetTagBusinessGroupListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetTagDropListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetTagDropListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetTargetDimensionDataRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetTargetDimensionDataResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetThresholdListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetThresholdListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetThroughPutRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetThroughPutResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetTrendSlsReportsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetTrendSlsReportsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetUserInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetUserInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetUserLoginInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetUserLoginInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetUserOrderConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\GetUserOrderConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\IgnoreAlarmsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\IgnoreAlarmsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListApplyAuthorizationRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListApplyAuthorizationResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListAuthorizedUidResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListAuthRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListAuthResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListCausePlanRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListCausePlanResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListConfirmAuthorizationRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListConfirmAuthorizationResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListEventRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListEventResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListNotAuthorizedUidResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListReportsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListReportsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListRootCauseRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListRootCauseResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListSlsReportsRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ListSlsReportsResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertContactGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertContactGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertContactRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertContactResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertContactToGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertContactToGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertIgnoreRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertIgnoreResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertSettingListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertSettingListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertSettingRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertSettingResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertSettingStatusRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutAlertSettingStatusResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutDataSourceConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutDataSourceConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutGroupResourceTagRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutGroupResourceTagResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutGroupTopologyTagLogRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutGroupTopologyTagLogResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutReportEmailConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutReportEmailConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutResourceWhitelistRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\PutResourceWhitelistResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ReplaceScriptListRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\ReplaceScriptListResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RevokeSubmitApplyPermissionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RevokeSubmitApplyPermissionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunAnalysisProcessRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunAnalysisProcessResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunCommandRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunCommandResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunForecastAnalyzeRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunForecastAnalyzeResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunPatrolInspectionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunPatrolInspectionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunRepairScriptRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunRepairScriptResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunRiskPatrolRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\RunRiskPatrolResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\SwitchUserTopRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\SwitchUserTopResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateAuthorizationRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateAuthorizationResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBindMetricRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBindMetricResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBusinessGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBusinessGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBusinessGroupShrinkRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBusinessMetricAlertConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBusinessMetricAlertConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBusinessMetricResourceRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateBusinessMetricResourceResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateDataSourceConfigRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateDataSourceConfigResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateHandleRiskBaseRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateHandleRiskBaseResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateHandleRiskRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateHandleRiskResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateIgnoreRiskBaseRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateIgnoreRiskBaseResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateIgnoreRiskRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateIgnoreRiskResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateInspectionSettingStatusRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateInspectionSettingStatusResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateInspectionThresholdRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateInspectionThresholdResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateOperationPermissionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateOperationPermissionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateReportEmailConfigStatusRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateReportEmailConfigStatusResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateReportSubscriptionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateReportSubscriptionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateScenarioRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateScenarioResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneModelApplyRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneModelApplyResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneModelCurVersionRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneModelCurVersionResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneModelRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneModelResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateScenestatusRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateScenestatusResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneSystemModelStatusRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateSceneSystemModelStatusResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateScriptRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateScriptResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateStatusOfSceneRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateStatusOfSceneResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateTagInfoRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdateTagInfoResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdBusinessGroupRequest;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdBusinessGroupResponse;
use AlibabaCloud\SDK\Aiops\V20200806\Models\UpdBusinessGroupShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Aiops extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aiops', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddAlgorithmRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddAlgorithmResponse
     */
    public function addAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithmId)) {
            $query['AlgorithmId'] = $request->algorithmId;
        }
        if (!Utils::isUnset($request->algorithmType)) {
            $query['AlgorithmType'] = $request->algorithmType;
        }
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->expandInformation)) {
            $query['ExpandInformation'] = $request->expandInformation;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAlgorithm',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAlgorithmRequest $request
     *
     * @return AddAlgorithmResponse
     */
    public function addAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param AddBusinessGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AddBusinessGroupResponse
     */
    public function addBusinessGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddBusinessGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceList)) {
            $request->instanceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->businessGroupDesc)) {
            $query['BusinessGroupDesc'] = $request->businessGroupDesc;
        }
        if (!Utils::isUnset($request->businessGroupName)) {
            $query['BusinessGroupName'] = $request->businessGroupName;
        }
        if (!Utils::isUnset($request->createUser)) {
            $query['CreateUser'] = $request->createUser;
        }
        if (!Utils::isUnset($request->instanceListShrink)) {
            $query['InstanceList'] = $request->instanceListShrink;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->updateUser)) {
            $query['UpdateUser'] = $request->updateUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBusinessGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBusinessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBusinessGroupRequest $request
     *
     * @return AddBusinessGroupResponse
     */
    public function addBusinessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBusinessGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddBusinessGroupOneRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddBusinessGroupOneResponse
     */
    public function addBusinessGroupOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->businessGroupDesc)) {
            $body['BusinessGroupDesc'] = $request->businessGroupDesc;
        }
        if (!Utils::isUnset($request->businessGroupName)) {
            $body['BusinessGroupName'] = $request->businessGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddBusinessGroupOne',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBusinessGroupOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBusinessGroupOneRequest $request
     *
     * @return AddBusinessGroupOneResponse
     */
    public function addBusinessGroupOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBusinessGroupOneWithOptions($request, $runtime);
    }

    /**
     * @param AddScenarioRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddScenarioResponse
     */
    public function addScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertSettingId)) {
            $query['AlertSettingId'] = $request->alertSettingId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddScenario',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddScenarioRequest $request
     *
     * @return AddScenarioResponse
     */
    public function addScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addScenarioWithOptions($request, $runtime);
    }

    /**
     * @param AddSceneListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddSceneListResponse
     */
    public function addSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSceneList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSceneListRequest $request
     *
     * @return AddSceneListResponse
     */
    public function addSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSceneListWithOptions($request, $runtime);
    }

    /**
     * @param AddScriptRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddScriptResponse
     */
    public function addScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->handleSuggestDesc)) {
            $query['HandleSuggestDesc'] = $request->handleSuggestDesc;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->rootCauseDesc)) {
            $query['RootCauseDesc'] = $request->rootCauseDesc;
        }
        if (!Utils::isUnset($request->rootCausesLog)) {
            $query['RootCausesLog'] = $request->rootCausesLog;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->script)) {
            $query['Script'] = $request->script;
        }
        if (!Utils::isUnset($request->scriptDesc)) {
            $query['ScriptDesc'] = $request->scriptDesc;
        }
        if (!Utils::isUnset($request->scriptLanguage)) {
            $query['ScriptLanguage'] = $request->scriptLanguage;
        }
        if (!Utils::isUnset($request->scriptName)) {
            $query['ScriptName'] = $request->scriptName;
        }
        if (!Utils::isUnset($request->scriptVersion)) {
            $query['ScriptVersion'] = $request->scriptVersion;
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
            'action'      => 'AddScript',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddScriptRequest $request
     *
     * @return AddScriptResponse
     */
    public function addScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addScriptWithOptions($request, $runtime);
    }

    /**
     * @param AddTagInfoRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddTagInfoResponse
     */
    public function addTagInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTagInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTagInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTagInfoRequest $request
     *
     * @return AddTagInfoResponse
     */
    public function addTagInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagInfoWithOptions($request, $runtime);
    }

    /**
     * @param AgainSubmitApplyPermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AgainSubmitApplyPermissionResponse
     */
    public function againSubmitApplyPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->switchFrontOperaUid)) {
            $query['SwitchFrontOperaUid'] = $request->switchFrontOperaUid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AgainSubmitApplyPermission',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AgainSubmitApplyPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AgainSubmitApplyPermissionRequest $request
     *
     * @return AgainSubmitApplyPermissionResponse
     */
    public function againSubmitApplyPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->againSubmitApplyPermissionWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAuthorizationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ApplyAuthorizationResponse
     */
    public function applyAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->switchFrontOperaUid)) {
            $query['SwitchFrontOperaUid'] = $request->switchFrontOperaUid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyAuthorization',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyAuthorizationRequest $request
     *
     * @return ApplyAuthorizationResponse
     */
    public function applyAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param CheckDataSourceLinkConnectionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CheckDataSourceLinkConnectionResponse
     */
    public function checkDataSourceLinkConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceParams)) {
            $query['DataSourceParams'] = $request->dataSourceParams;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDataSourceLinkConnection',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDataSourceLinkConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDataSourceLinkConnectionRequest $request
     *
     * @return CheckDataSourceLinkConnectionResponse
     */
    public function checkDataSourceLinkConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDataSourceLinkConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CheckLogRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CheckLogResponse
     */
    public function checkLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckLog',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckLogRequest $request
     *
     * @return CheckLogResponse
     */
    public function checkLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkLogWithOptions($request, $runtime);
    }

    /**
     * @param CloseEventRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CloseEventResponse
     */
    public function closeEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->closeDesc)) {
            $query['CloseDesc'] = $request->closeDesc;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseEvent',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseEventRequest $request
     *
     * @return CloseEventResponse
     */
    public function closeEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeEventWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmAuthorizationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ConfirmAuthorizationResponse
     */
    public function confirmAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->permissionType)) {
            $query['PermissionType'] = $request->permissionType;
        }
        if (!Utils::isUnset($request->switchFrontOperaUid)) {
            $query['SwitchFrontOperaUid'] = $request->switchFrontOperaUid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmAuthorization',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmAuthorizationRequest $request
     *
     * @return ConfirmAuthorizationResponse
     */
    public function confirmAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param CountLatestReportsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CountLatestReportsResponse
     */
    public function countLatestReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logStore)) {
            $query['LogStore'] = $request->logStore;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CountLatestReports',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CountLatestReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CountLatestReportsRequest $request
     *
     * @return CountLatestReportsResponse
     */
    public function countLatestReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countLatestReportsWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->webhook)) {
            $body['Webhook'] = $request->webhook;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAlertContact',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlertContactRequest $request
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertContactGroupJson)) {
            $body['AlertContactGroupJson'] = $request->alertContactGroupJson;
        }
        if (!Utils::isUnset($request->contactIdsJson)) {
            $body['ContactIdsJson'] = $request->contactIdsJson;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAlertContactGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlertContactGroupRequest $request
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCommandResponse
     */
    public function createCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandContent)) {
            $query['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workingDir)) {
            $query['WorkingDir'] = $request->workingDir;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCommand',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCommandRequest $request
     *
     * @return CreateCommandResponse
     */
    public function createCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommandWithOptions($request, $runtime);
    }

    /**
     * @param CreateDumpRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateDumpResponse
     */
    public function createDumpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDump',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDumpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDumpRequest $request
     *
     * @return CreateDumpResponse
     */
    public function createDump($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDumpWithOptions($request, $runtime);
    }

    /**
     * @param CreateInspectionRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateInspectionRecordResponse
     */
    public function createInspectionRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInspectionRecord',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInspectionRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInspectionRecordRequest $request
     *
     * @return CreateInspectionRecordResponse
     */
    public function createInspectionRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInspectionRecordWithOptions($request, $runtime);
    }

    /**
     * @param CreateMessageRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateMessageResponse
     */
    public function createMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMessage',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMessageRequest $request
     *
     * @return CreateMessageResponse
     */
    public function createMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMessageWithOptions($request, $runtime);
    }

    /**
     * @param CreateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSceneResponse
     */
    public function createSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->metricListJson)) {
            $body['MetricListJson'] = $request->metricListJson;
        }
        if (!Utils::isUnset($request->nodeListJson)) {
            $body['NodeListJson'] = $request->nodeListJson;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->sceneDesc)) {
            $body['SceneDesc'] = $request->sceneDesc;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $body['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->sceneOwner)) {
            $body['SceneOwner'] = $request->sceneOwner;
        }
        if (!Utils::isUnset($request->sceneWebhook)) {
            $body['SceneWebhook'] = $request->sceneWebhook;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateScene',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSceneRequest $request
     *
     * @return CreateSceneResponse
     */
    public function createScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneWithOptions($request, $runtime);
    }

    /**
     * @param CreateSceneModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSceneModelResponse
     */
    public function createSceneModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fcFunctionName)) {
            $body['FcFunctionName'] = $request->fcFunctionName;
        }
        if (!Utils::isUnset($request->fcHandler)) {
            $body['FcHandler'] = $request->fcHandler;
        }
        if (!Utils::isUnset($request->fcInitializer)) {
            $body['FcInitializer'] = $request->fcInitializer;
        }
        if (!Utils::isUnset($request->fcRegionNo)) {
            $body['FcRegionNo'] = $request->fcRegionNo;
        }
        if (!Utils::isUnset($request->fcServiceName)) {
            $body['FcServiceName'] = $request->fcServiceName;
        }
        if (!Utils::isUnset($request->modelDesc)) {
            $body['ModelDesc'] = $request->modelDesc;
        }
        if (!Utils::isUnset($request->modelLanguage)) {
            $body['ModelLanguage'] = $request->modelLanguage;
        }
        if (!Utils::isUnset($request->modelMemo)) {
            $body['ModelMemo'] = $request->modelMemo;
        }
        if (!Utils::isUnset($request->modelName)) {
            $body['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->rootCauseDesc)) {
            $body['RootCauseDesc'] = $request->rootCauseDesc;
        }
        if (!Utils::isUnset($request->rootCauseSolution)) {
            $body['RootCauseSolution'] = $request->rootCauseSolution;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSceneModel',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSceneModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSceneModelRequest $request
     *
     * @return CreateSceneModelResponse
     */
    public function createSceneModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateSceneModelApplyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSceneModelApplyResponse
     */
    public function createSceneModelApplyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSceneModelApply',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSceneModelApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSceneModelApplyRequest $request
     *
     * @return CreateSceneModelApplyResponse
     */
    public function createSceneModelApply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneModelApplyWithOptions($request, $runtime);
    }

    /**
     * @param DelBusinessGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DelBusinessGroupResponse
     */
    public function delBusinessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DelBusinessGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DelBusinessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DelBusinessGroupRequest $request
     *
     * @return DelBusinessGroupResponse
     */
    public function delBusinessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delBusinessGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->contactIdListJson)) {
            $body['ContactIdListJson'] = $request->contactIdListJson;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContact',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertContactRequest $request
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertContactFromGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAlertContactFromGroupResponse
     */
    public function deleteAlertContactFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->contactIdListJson)) {
            $body['ContactIdListJson'] = $request->contactIdListJson;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContactFromGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertContactFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertContactFromGroupRequest $request
     *
     * @return DeleteAlertContactFromGroupResponse
     */
    public function deleteAlertContactFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactFromGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContactGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertContactGroupRequest $request
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertSettingRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAlertSettingResponse
     */
    public function deleteAlertSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->alertSettingId)) {
            $body['AlertSettingId'] = $request->alertSettingId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertSetting',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertSettingRequest $request
     *
     * @return DeleteAlertSettingResponse
     */
    public function deleteAlertSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertSettingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertSettingListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAlertSettingListResponse
     */
    public function deleteAlertSettingListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->customerIdsJson)) {
            $body['CustomerIdsJson'] = $request->customerIdsJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertSettingList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertSettingListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertSettingListRequest $request
     *
     * @return DeleteAlertSettingListResponse
     */
    public function deleteAlertSettingList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertSettingListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlgorithmInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAlgorithmInfoResponse
     */
    public function deleteAlgorithmInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlgorithmInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlgorithmInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlgorithmInfoRequest $request
     *
     * @return DeleteAlgorithmInfoResponse
     */
    public function deleteAlgorithmInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlgorithmInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBusinessGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteBusinessGroupResponse
     */
    public function deleteBusinessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBusinessGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBusinessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBusinessGroupRequest $request
     *
     * @return DeleteBusinessGroupResponse
     */
    public function deleteBusinessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBusinessGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBusinessResourceTagRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteBusinessResourceTagResponse
     */
    public function deleteBusinessResourceTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBusinessResourceTag',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBusinessResourceTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBusinessResourceTagRequest $request
     *
     * @return DeleteBusinessResourceTagResponse
     */
    public function deleteBusinessResourceTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBusinessResourceTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataSourceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDataSourceConfigResponse
     */
    public function deleteDataSourceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSourceConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataSourceConfigRequest $request
     *
     * @return DeleteDataSourceConfigResponse
     */
    public function deleteDataSourceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupTopologyTagLogRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteGroupTopologyTagLogResponse
     */
    public function deleteGroupTopologyTagLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupTopologyTagLog',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupTopologyTagLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupTopologyTagLogRequest $request
     *
     * @return DeleteGroupTopologyTagLogResponse
     */
    public function deleteGroupTopologyTagLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupTopologyTagLogWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRealSceneInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRealSceneInfoResponse
     */
    public function deleteRealSceneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRealSceneInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRealSceneInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRealSceneInfoRequest $request
     *
     * @return DeleteRealSceneInfoResponse
     */
    public function deleteRealSceneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRealSceneInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteReportEmailConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteReportEmailConfigResponse
     */
    public function deleteReportEmailConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mailConfigId)) {
            $body['MailConfigId'] = $request->mailConfigId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteReportEmailConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteReportEmailConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteReportEmailConfigRequest $request
     *
     * @return DeleteReportEmailConfigResponse
     */
    public function deleteReportEmailConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReportEmailConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceWhitelistRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteResourceWhitelistResponse
     */
    public function deleteResourceWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inspectionWhitelistId)) {
            $body['InspectionWhitelistId'] = $request->inspectionWhitelistId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceWhitelist',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourceWhitelistRequest $request
     *
     * @return DeleteResourceWhitelistResponse
     */
    public function deleteResourceWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteScenarioResponse
     */
    public function deleteScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScenario',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScenarioRequest $request
     *
     * @return DeleteScenarioResponse
     */
    public function deleteScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScenarioWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSceneResponse
     */
    public function deleteSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteScene',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSceneRequest $request
     *
     * @return DeleteSceneResponse
     */
    public function deleteScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSceneWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSceneListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSceneListResponse
     */
    public function deleteSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSceneList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSceneListRequest $request
     *
     * @return DeleteSceneListResponse
     */
    public function deleteSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSceneListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSceneModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSceneModelResponse
     */
    public function deleteSceneModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->sureDelete)) {
            $body['SureDelete'] = $request->sureDelete;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSceneModel',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSceneModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSceneModelRequest $request
     *
     * @return DeleteSceneModelResponse
     */
    public function deleteSceneModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSceneModelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTagInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTagInfoResponse
     */
    public function deleteTagInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTagInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTagInfoRequest $request
     *
     * @return DeleteTagInfoResponse
     */
    public function deleteTagInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountAlertEventRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAccountAlertEventResponse
     */
    public function describeAccountAlertEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountAlertEvent',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountAlertEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccountAlertEventRequest $request
     *
     * @return DescribeAccountAlertEventResponse
     */
    public function describeAccountAlertEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAlertEventWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAdvisorInspectionProductsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeAdvisorInspectionProductsResponse
     */
    public function describeAdvisorInspectionProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdvisorInspectionProducts',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdvisorInspectionProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAdvisorInspectionProductsRequest $request
     *
     * @return DescribeAdvisorInspectionProductsResponse
     */
    public function describeAdvisorInspectionProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvisorInspectionProductsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertBusinessGroupWithAlertSettingIdRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DescribeAlertBusinessGroupWithAlertSettingIdResponse
     */
    public function describeAlertBusinessGroupWithAlertSettingIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertSettingId)) {
            $body['AlertSettingId'] = $request->alertSettingId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertBusinessGroupWithAlertSettingId',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertBusinessGroupWithAlertSettingIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertBusinessGroupWithAlertSettingIdRequest $request
     *
     * @return DescribeAlertBusinessGroupWithAlertSettingIdResponse
     */
    public function describeAlertBusinessGroupWithAlertSettingId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertBusinessGroupWithAlertSettingIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertContactRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAlertContactResponse
     */
    public function describeAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchBy)) {
            $body['SearchBy'] = $request->searchBy;
        }
        if (!Utils::isUnset($request->searchLike)) {
            $body['SearchLike'] = $request->searchLike;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertContact',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertContactRequest $request
     *
     * @return DescribeAlertContactResponse
     */
    public function describeAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertContactGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAlertContactGroupResponse
     */
    public function describeAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLike)) {
            $body['SearchLike'] = $request->searchLike;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertContactGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertContactGroupRequest $request
     *
     * @return DescribeAlertContactGroupResponse
     */
    public function describeAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertContactWithAlertSettingIdRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeAlertContactWithAlertSettingIdResponse
     */
    public function describeAlertContactWithAlertSettingIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertSettingId)) {
            $body['AlertSettingId'] = $request->alertSettingId;
        }
        if (!Utils::isUnset($request->contactType)) {
            $body['ContactType'] = $request->contactType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertContactWithAlertSettingId',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertContactWithAlertSettingIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertContactWithAlertSettingIdRequest $request
     *
     * @return DescribeAlertContactWithAlertSettingIdResponse
     */
    public function describeAlertContactWithAlertSettingId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertContactWithAlertSettingIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertContactWithGroupIdRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeAlertContactWithGroupIdResponse
     */
    public function describeAlertContactWithGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertContactWithGroupId',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertContactWithGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertContactWithGroupIdRequest $request
     *
     * @return DescribeAlertContactWithGroupIdResponse
     */
    public function describeAlertContactWithGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertContactWithGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertDetailDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAlertDetailDataResponse
     */
    public function describeAlertDetailDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertDetailData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertDetailDataRequest $request
     *
     * @return DescribeAlertDetailDataResponse
     */
    public function describeAlertDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertDetailDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertDetailTrendDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAlertDetailTrendDataResponse
     */
    public function describeAlertDetailTrendDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertDetailTrendData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertDetailTrendDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertDetailTrendDataRequest $request
     *
     * @return DescribeAlertDetailTrendDataResponse
     */
    public function describeAlertDetailTrendData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertDetailTrendDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertEventRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAlertEventResponse
     */
    public function describeAlertEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertEvent',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertEventRequest $request
     *
     * @return DescribeAlertEventResponse
     */
    public function describeAlertEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertEventWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertFinalDataListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAlertFinalDataListResponse
     */
    public function describeAlertFinalDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertFinalDataList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertFinalDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertFinalDataListRequest $request
     *
     * @return DescribeAlertFinalDataListResponse
     */
    public function describeAlertFinalDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertFinalDataListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAlertResourceResponse
     */
    public function describeAlertResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertResource',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertResourceRequest $request
     *
     * @return DescribeAlertResourceResponse
     */
    public function describeAlertResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertSettingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAlertSettingResponse
     */
    public function describeAlertSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->customerName)) {
            $body['CustomerName'] = $request->customerName;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKeyword)) {
            $body['SearchKeyword'] = $request->searchKeyword;
        }
        if (!Utils::isUnset($request->settingStatus)) {
            $body['SettingStatus'] = $request->settingStatus;
        }
        if (!Utils::isUnset($request->uid)) {
            $body['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertSetting',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertSettingRequest $request
     *
     * @return DescribeAlertSettingResponse
     */
    public function describeAlertSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertSettingByIdRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAlertSettingByIdResponse
     */
    public function describeAlertSettingByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertSettingId)) {
            $body['AlertSettingId'] = $request->alertSettingId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertSettingById',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertSettingByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertSettingByIdRequest $request
     *
     * @return DescribeAlertSettingByIdResponse
     */
    public function describeAlertSettingById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSettingByIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllAlertContactRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAllAlertContactResponse
     */
    public function describeAllAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllAlertContact',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAllAlertContactRequest $request
     *
     * @return DescribeAllAlertContactResponse
     */
    public function describeAllAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllAlertContactGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAllAlertContactGroupResponse
     */
    public function describeAllAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllAlertContactGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAllAlertContactGroupRequest $request
     *
     * @return DescribeAllAlertContactGroupResponse
     */
    public function describeAllAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllBusinessGroupInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAllBusinessGroupInfoResponse
     */
    public function describeAllBusinessGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllBusinessGroupInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllBusinessGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAllBusinessGroupInfoRequest $request
     *
     * @return DescribeAllBusinessGroupInfoResponse
     */
    public function describeAllBusinessGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllBusinessGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllSceneModelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAllSceneModelResponse
     */
    public function describeAllSceneModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllSceneModel',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllSceneModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAllSceneModelRequest $request
     *
     * @return DescribeAllSceneModelResponse
     */
    public function describeAllSceneModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllSceneModelWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAnalysisDataListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAnalysisDataListResponse
     */
    public function describeAnalysisDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metricExtend)) {
            $query['MetricExtend'] = $request->metricExtend;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnalysisDataList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnalysisDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAnalysisDataListRequest $request
     *
     * @return DescribeAnalysisDataListResponse
     */
    public function describeAnalysisDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisDataListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBusinessAnalysisDataListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeBusinessAnalysisDataListResponse
     */
    public function describeBusinessAnalysisDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiPath)) {
            $query['ApiPath'] = $request->apiPath;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBusinessAnalysisDataList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBusinessAnalysisDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBusinessAnalysisDataListRequest $request
     *
     * @return DescribeBusinessAnalysisDataListResponse
     */
    public function describeBusinessAnalysisDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBusinessAnalysisDataListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiagnoseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDiagnoseResponse
     */
    public function describeDiagnoseWithOptions($request, $runtime)
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
            'action'      => 'DescribeDiagnose',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDiagnoseRequest $request
     *
     * @return DescribeDiagnoseResponse
     */
    public function describeDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnoseWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiagnoseResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDiagnoseResultResponse
     */
    public function describeDiagnoseResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnoseResult',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnoseResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDiagnoseResultRequest $request
     *
     * @return DescribeDiagnoseResultResponse
     */
    public function describeDiagnoseResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnoseResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventTopologyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEventTopologyResponse
     */
    public function describeEventTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventTopology',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventTopologyRequest $request
     *
     * @return DescribeEventTopologyResponse
     */
    public function describeEventTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTopologyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventTopologyDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEventTopologyDetailResponse
     */
    public function describeEventTopologyDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventTopologyDetail',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventTopologyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventTopologyDetailRequest $request
     *
     * @return DescribeEventTopologyDetailResponse
     */
    public function describeEventTopologyDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTopologyDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFcFunctionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFcFunctionResponse
     */
    public function describeFcFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->prefix)) {
            $body['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $body['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFcFunction',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFcFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFcFunctionRequest $request
     *
     * @return DescribeFcFunctionResponse
     */
    public function describeFcFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFcFunctionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFcRegionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFcRegionResponse
     */
    public function describeFcRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFcRegion',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFcRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFcRegionRequest $request
     *
     * @return DescribeFcRegionResponse
     */
    public function describeFcRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFcRegionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFcServiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFcServiceResponse
     */
    public function describeFcServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->prefix)) {
            $body['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $body['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFcService',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFcServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFcServiceRequest $request
     *
     * @return DescribeFcServiceResponse
     */
    public function describeFcService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFcServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHistoryRiskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeHistoryRiskResponse
     */
    public function describeHistoryRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lastFindTimeEnd)) {
            $body['LastFindTimeEnd'] = $request->lastFindTimeEnd;
        }
        if (!Utils::isUnset($request->lastFindTimeStart)) {
            $body['LastFindTimeStart'] = $request->lastFindTimeStart;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->severity)) {
            $body['Severity'] = $request->severity;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeHistoryRisk',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHistoryRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHistoryRiskRequest $request
     *
     * @return DescribeHistoryRiskResponse
     */
    public function describeHistoryRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryRiskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInspectionProgressRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInspectionProgressResponse
     */
    public function describeInspectionProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inspectionRecordId)) {
            $body['InspectionRecordId'] = $request->inspectionRecordId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInspectionProgress',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInspectionProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInspectionProgressRequest $request
     *
     * @return DescribeInspectionProgressResponse
     */
    public function describeInspectionProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInspectionProgressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInspectionResourcesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInspectionResourcesResponse
     */
    public function describeInspectionResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInspectionResources',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInspectionResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInspectionResourcesRequest $request
     *
     * @return DescribeInspectionResourcesResponse
     */
    public function describeInspectionResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInspectionResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInspectionResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInspectionResultResponse
     */
    public function describeInspectionResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->continuousDays)) {
            $body['ContinuousDays'] = $request->continuousDays;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskCode)) {
            $body['RiskCode'] = $request->riskCode;
        }
        if (!Utils::isUnset($request->severity)) {
            $body['Severity'] = $request->severity;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInspectionResult',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInspectionResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInspectionResultRequest $request
     *
     * @return DescribeInspectionResultResponse
     */
    public function describeInspectionResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInspectionResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInspectionSettingsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInspectionSettingsResponse
     */
    public function describeInspectionSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->riskDesc)) {
            $body['RiskDesc'] = $request->riskDesc;
        }
        if (!Utils::isUnset($request->riskEnableStatus)) {
            $body['RiskEnableStatus'] = $request->riskEnableStatus;
        }
        if (!Utils::isUnset($request->riskName)) {
            $body['RiskName'] = $request->riskName;
        }
        if (!Utils::isUnset($request->riskType)) {
            $body['RiskType'] = $request->riskType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInspectionSettings',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInspectionSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInspectionSettingsRequest $request
     *
     * @return DescribeInspectionSettingsResponse
     */
    public function describeInspectionSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInspectionSettingsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInspectionThresholdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInspectionThresholdResponse
     */
    public function describeInspectionThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->riskCode)) {
            $body['RiskCode'] = $request->riskCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInspectionThreshold',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInspectionThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInspectionThresholdRequest $request
     *
     * @return DescribeInspectionThresholdResponse
     */
    public function describeInspectionThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInspectionThresholdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInspectionWhitelistsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInspectionWhitelistsResponse
     */
    public function describeInspectionWhitelistsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInspectionWhitelists',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInspectionWhitelistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInspectionWhitelistsRequest $request
     *
     * @return DescribeInspectionWhitelistsResponse
     */
    public function describeInspectionWhitelists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInspectionWhitelistsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInvocationResultsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInvocationResultsResponse
     */
    public function describeInvocationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->invokeId)) {
            $query['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInvocationResults',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInvocationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInvocationResultsRequest $request
     *
     * @return DescribeInvocationResultsResponse
     */
    public function describeInvocationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationResultsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLastInspectionSummaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLastInspectionSummaryResponse
     */
    public function describeLastInspectionSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLastInspectionSummary',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLastInspectionSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLastInspectionSummaryRequest $request
     *
     * @return DescribeLastInspectionSummaryResponse
     */
    public function describeLastInspectionSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLastInspectionSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeModelRelationScenesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeModelRelationScenesResponse
     */
    public function describeModelRelationScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeModelRelationScenes',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeModelRelationScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeModelRelationScenesRequest $request
     *
     * @return DescribeModelRelationScenesResponse
     */
    public function describeModelRelationScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelRelationScenesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProductRiskPieRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeProductRiskPieResponse
     */
    public function describeProductRiskPieWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProductRiskPie',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProductRiskPieResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProductRiskPieRequest $request
     *
     * @return DescribeProductRiskPieResponse
     */
    public function describeProductRiskPie($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductRiskPieWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeReportDataResponse
     */
    public function describeReportDataWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeReportData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReportDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeReportDataResponse
     */
    public function describeReportData()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReportDataWithOptions($runtime);
    }

    /**
     * @param DescribeReportEmailConfigsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeReportEmailConfigsResponse
     */
    public function describeReportEmailConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeReportEmailConfigs',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReportEmailConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReportEmailConfigsRequest $request
     *
     * @return DescribeReportEmailConfigsResponse
     */
    public function describeReportEmailConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReportEmailConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReportSubscriptionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeReportSubscriptionsResponse
     */
    public function describeReportSubscriptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeReportSubscriptions',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReportSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReportSubscriptionsRequest $request
     *
     * @return DescribeReportSubscriptionsResponse
     */
    public function describeReportSubscriptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReportSubscriptionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceMetricRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeResourceMetricResponse
     */
    public function describeResourceMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->firstLoad)) {
            $query['FirstLoad'] = $request->firstLoad;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceMetric',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceMetricRequest $request
     *
     * @return DescribeResourceMetricResponse
     */
    public function describeResourceMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeRiskResponse
     */
    public function describeRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRisk',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskRequest $request
     *
     * @return DescribeRiskResponse
     */
    public function describeRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRiskConfigResponse
     */
    public function describeRiskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskConfigRequest $request
     *
     * @return DescribeRiskConfigResponse
     */
    public function describeRiskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskEventDetailsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRiskEventDetailsResponse
     */
    public function describeRiskEventDetailsWithOptions($request, $runtime)
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
            'action'      => 'DescribeRiskEventDetails',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskEventDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskEventDetailsRequest $request
     *
     * @return DescribeRiskEventDetailsResponse
     */
    public function describeRiskEventDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskEventListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRiskEventListResponse
     */
    public function describeRiskEventListWithOptions($request, $runtime)
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
            'action'      => 'DescribeRiskEventList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskEventListRequest $request
     *
     * @return DescribeRiskEventListResponse
     */
    public function describeRiskEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskEventTopologyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRiskEventTopologyResponse
     */
    public function describeRiskEventTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskEventTopology',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskEventTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskEventTopologyRequest $request
     *
     * @return DescribeRiskEventTopologyResponse
     */
    public function describeRiskEventTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventTopologyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskResultSeveritySummaryRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeRiskResultSeveritySummaryResponse
     */
    public function describeRiskResultSeveritySummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->continuousDays)) {
            $body['ContinuousDays'] = $request->continuousDays;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskResultSeveritySummary',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskResultSeveritySummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskResultSeveritySummaryRequest $request
     *
     * @return DescribeRiskResultSeveritySummaryResponse
     */
    public function describeRiskResultSeveritySummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskResultSeveritySummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskResultStatisticalRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRiskResultStatisticalResponse
     */
    public function describeRiskResultStatisticalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->continuousDays)) {
            $body['ContinuousDays'] = $request->continuousDays;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskResultStatistical',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskResultStatisticalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskResultStatisticalRequest $request
     *
     * @return DescribeRiskResultStatisticalResponse
     */
    public function describeRiskResultStatistical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskResultStatisticalWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSceneDetailResponse
     */
    public function describeSceneDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneDetail',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSceneDetailRequest $request
     *
     * @return DescribeSceneDetailResponse
     */
    public function describeSceneDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneModelByTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSceneModelByTypeResponse
     */
    public function describeSceneModelByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->modelType)) {
            $body['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneModelByType',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneModelByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSceneModelByTypeRequest $request
     *
     * @return DescribeSceneModelByTypeResponse
     */
    public function describeSceneModelByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneModelByTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneModelDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSceneModelDetailResponse
     */
    public function describeSceneModelDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneModelDetail',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneModelDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSceneModelDetailRequest $request
     *
     * @return DescribeSceneModelDetailResponse
     */
    public function describeSceneModelDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneModelDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneModelVersionHistoryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeSceneModelVersionHistoryResponse
     */
    public function describeSceneModelVersionHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneModelVersionHistory',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneModelVersionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSceneModelVersionHistoryRequest $request
     *
     * @return DescribeSceneModelVersionHistoryResponse
     */
    public function describeSceneModelVersionHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneModelVersionHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneModelsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSceneModelsResponse
     */
    public function describeSceneModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyStatus)) {
            $body['ApplyStatus'] = $request->applyStatus;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->modelName)) {
            $body['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneModels',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSceneModelsRequest $request
     *
     * @return DescribeSceneModelsResponse
     */
    public function describeSceneModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneModelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneSystemModelRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSceneSystemModelResponse
     */
    public function describeSceneSystemModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->modelName)) {
            $body['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelStatus)) {
            $body['ModelStatus'] = $request->modelStatus;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->typeId)) {
            $body['TypeId'] = $request->typeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneSystemModel',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneSystemModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSceneSystemModelRequest $request
     *
     * @return DescribeSceneSystemModelResponse
     */
    public function describeSceneSystemModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneSystemModelWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScenesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeScenesResponse
     */
    public function describeScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $body['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->sceneStatus)) {
            $body['SceneStatus'] = $request->sceneStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeScenes',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScenesRequest $request
     *
     * @return DescribeScenesResponse
     */
    public function describeScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScenesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStatisticalDataByProductRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeStatisticalDataByProductResponse
     */
    public function describeStatisticalDataByProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeStatisticalDataByProduct',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStatisticalDataByProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStatisticalDataByProductRequest $request
     *
     * @return DescribeStatisticalDataByProductResponse
     */
    public function describeStatisticalDataByProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStatisticalDataByProductWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStatisticalDataByRiskCodeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeStatisticalDataByRiskCodeResponse
     */
    public function describeStatisticalDataByRiskCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeStatisticalDataByRiskCode',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStatisticalDataByRiskCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStatisticalDataByRiskCodeRequest $request
     *
     * @return DescribeStatisticalDataByRiskCodeResponse
     */
    public function describeStatisticalDataByRiskCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStatisticalDataByRiskCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWhitelistResourcesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWhitelistResourcesResponse
     */
    public function describeWhitelistResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeWhitelistResources',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWhitelistResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWhitelistResourcesRequest $request
     *
     * @return DescribeWhitelistResourcesResponse
     */
    public function describeWhitelistResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistResourcesWithOptions($request, $runtime);
    }

    /**
     * @param EndScriptListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EndScriptListResponse
     */
    public function endScriptListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EndScriptList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EndScriptListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EndScriptListRequest $request
     *
     * @return EndScriptListResponse
     */
    public function endScriptList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endScriptListWithOptions($request, $runtime);
    }

    /**
     * @param FeedbackAlertAlgorithmRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return FeedbackAlertAlgorithmResponse
     */
    public function feedbackAlertAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->algorithmAccurateDescribe)) {
            $query['AlgorithmAccurateDescribe'] = $request->algorithmAccurateDescribe;
        }
        if (!Utils::isUnset($request->algorithmAccurateState)) {
            $query['AlgorithmAccurateState'] = $request->algorithmAccurateState;
        }
        if (!Utils::isUnset($request->feedbackType)) {
            $query['FeedbackType'] = $request->feedbackType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FeedbackAlertAlgorithm',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FeedbackAlertAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FeedbackAlertAlgorithmRequest $request
     *
     * @return FeedbackAlertAlgorithmResponse
     */
    public function feedbackAlertAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackAlertAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param GetAiopsEventListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAiopsEventListResponse
     */
    public function getAiopsEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->businessGroupName)) {
            $query['BusinessGroupName'] = $request->businessGroupName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->eventUniqueId)) {
            $query['EventUniqueId'] = $request->eventUniqueId;
        }
        if (!Utils::isUnset($request->feedbackStatus)) {
            $query['FeedbackStatus'] = $request->feedbackStatus;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->predictionState)) {
            $query['PredictionState'] = $request->predictionState;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAiopsEventList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiopsEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAiopsEventListRequest $request
     *
     * @return GetAiopsEventListResponse
     */
    public function getAiopsEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiopsEventListWithOptions($request, $runtime);
    }

    /**
     * @param GetAiopsEventNewListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAiopsEventNewListResponse
     */
    public function getAiopsEventNewListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAiopsEventNewList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiopsEventNewListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAiopsEventNewListRequest $request
     *
     * @return GetAiopsEventNewListResponse
     */
    public function getAiopsEventNewList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiopsEventNewListWithOptions($request, $runtime);
    }

    /**
     * @param GetAlertDetailTrendDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAlertDetailTrendDataResponse
     */
    public function getAlertDetailTrendDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->abnormalId)) {
            $query['AbnormalId'] = $request->abnormalId;
        }
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlertDetailTrendData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlertDetailTrendDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlertDetailTrendDataRequest $request
     *
     * @return GetAlertDetailTrendDataResponse
     */
    public function getAlertDetailTrendData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertDetailTrendDataWithOptions($request, $runtime);
    }

    /**
     * @param GetAlertListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAlertListResponse
     */
    public function getAlertListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlertList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlertListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlertListRequest $request
     *
     * @return GetAlertListResponse
     */
    public function getAlertList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertListWithOptions($request, $runtime);
    }

    /**
     * @param GetAlertTrentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAlertTrentResponse
     */
    public function getAlertTrentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlertTrent',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlertTrentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlertTrentRequest $request
     *
     * @return GetAlertTrentResponse
     */
    public function getAlertTrent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertTrentWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAlgorithmResponse
     */
    public function getAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expandInformation)) {
            $query['ExpandInformation'] = $request->expandInformation;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithm',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlgorithmRequest $request
     *
     * @return GetAlgorithmResponse
     */
    public function getAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAlgorithmConfigResponse
     */
    public function getAlgorithmConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithmTypeCode)) {
            $query['AlgorithmTypeCode'] = $request->algorithmTypeCode;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlgorithmConfigRequest $request
     *
     * @return GetAlgorithmConfigResponse
     */
    public function getAlgorithmConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAlgorithmDataResponse
     */
    public function getAlgorithmDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlgorithmDataRequest $request
     *
     * @return GetAlgorithmDataResponse
     */
    public function getAlgorithmData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmDataWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmDetailsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAlgorithmDetailsResponse
     */
    public function getAlgorithmDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmDetails',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlgorithmDetailsRequest $request
     *
     * @return GetAlgorithmDetailsResponse
     */
    public function getAlgorithmDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmForecastDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAlgorithmForecastDataResponse
     */
    public function getAlgorithmForecastDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmForecastData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmForecastDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlgorithmForecastDataRequest $request
     *
     * @return GetAlgorithmForecastDataResponse
     */
    public function getAlgorithmForecastData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmForecastDataWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmForecastDetailsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAlgorithmForecastDetailsResponse
     */
    public function getAlgorithmForecastDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmForecastDetails',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmForecastDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlgorithmForecastDetailsRequest $request
     *
     * @return GetAlgorithmForecastDetailsResponse
     */
    public function getAlgorithmForecastDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmForecastDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAlgorithmListResponse
     */
    public function getAlgorithmListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithmList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlgorithmListRequest $request
     *
     * @return GetAlgorithmListResponse
     */
    public function getAlgorithmList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmListWithOptions($request, $runtime);
    }

    /**
     * @param GetAllAlgorithmConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAllAlgorithmConfigResponse
     */
    public function getAllAlgorithmConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAllAlgorithmConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllAlgorithmConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAllAlgorithmConfigRequest $request
     *
     * @return GetAllAlgorithmConfigResponse
     */
    public function getAllAlgorithmConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllAlgorithmConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetAllTagResourceNumListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAllTagResourceNumListResponse
     */
    public function getAllTagResourceNumListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAllTagResourceNumList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllTagResourceNumListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAllTagResourceNumListRequest $request
     *
     * @return GetAllTagResourceNumListResponse
     */
    public function getAllTagResourceNumList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllTagResourceNumListWithOptions($request, $runtime);
    }

    /**
     * @param GetAnalysisProcessRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAnalysisProcessResponse
     */
    public function getAnalysisProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAnalysisProcess',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAnalysisProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAnalysisProcessRequest $request
     *
     * @return GetAnalysisProcessResponse
     */
    public function getAnalysisProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAnalysisProcessWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthorizationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAuthorizationResponse
     */
    public function getAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuthorization',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAuthorizationRequest $request
     *
     * @return GetAuthorizationResponse
     */
    public function getAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param GetAvgRepairTimeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAvgRepairTimeResponse
     */
    public function getAvgRepairTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAvgRepairTime',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAvgRepairTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAvgRepairTimeRequest $request
     *
     * @return GetAvgRepairTimeResponse
     */
    public function getAvgRepairTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvgRepairTimeWithOptions($request, $runtime);
    }

    /**
     * @param GetBackScriptListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBackScriptListResponse
     */
    public function getBackScriptListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBackScriptList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBackScriptListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBackScriptListRequest $request
     *
     * @return GetBackScriptListResponse
     */
    public function getBackScriptList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackScriptListWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetBusinessGroupResponse
     */
    public function getBusinessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessGroupRequest $request
     *
     * @return GetBusinessGroupResponse
     */
    public function getBusinessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessGroupAllRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetBusinessGroupAllResponse
     */
    public function getBusinessGroupAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupName)) {
            $query['BusinessGroupName'] = $request->businessGroupName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
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
            'action'      => 'GetBusinessGroupAll',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessGroupAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessGroupAllRequest $request
     *
     * @return GetBusinessGroupAllResponse
     */
    public function getBusinessGroupAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessGroupAllWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessGroupIndexRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBusinessGroupIndexResponse
     */
    public function getBusinessGroupIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessGroupIndex',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessGroupIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessGroupIndexRequest $request
     *
     * @return GetBusinessGroupIndexResponse
     */
    public function getBusinessGroupIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessGroupIndexWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessGroupInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetBusinessGroupInfoResponse
     */
    public function getBusinessGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessGroupInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessGroupInfoRequest $request
     *
     * @return GetBusinessGroupInfoResponse
     */
    public function getBusinessGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessGroupOverviewListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetBusinessGroupOverviewListResponse
     */
    public function getBusinessGroupOverviewListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessGroupOverviewList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessGroupOverviewListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessGroupOverviewListRequest $request
     *
     * @return GetBusinessGroupOverviewListResponse
     */
    public function getBusinessGroupOverviewList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessGroupOverviewListWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessLogAlertDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetBusinessLogAlertDetailResponse
     */
    public function getBusinessLogAlertDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessLogAlertDetail',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessLogAlertDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessLogAlertDetailRequest $request
     *
     * @return GetBusinessLogAlertDetailResponse
     */
    public function getBusinessLogAlertDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessLogAlertDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessLogAlertListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBusinessLogAlertListResponse
     */
    public function getBusinessLogAlertListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessLogAlertList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessLogAlertListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessLogAlertListRequest $request
     *
     * @return GetBusinessLogAlertListResponse
     */
    public function getBusinessLogAlertList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessLogAlertListWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessLogAlertTopNRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBusinessLogAlertTopNResponse
     */
    public function getBusinessLogAlertTopNWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertType)) {
            $query['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->topNum)) {
            $query['TopNum'] = $request->topNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessLogAlertTopN',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessLogAlertTopNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessLogAlertTopNRequest $request
     *
     * @return GetBusinessLogAlertTopNResponse
     */
    public function getBusinessLogAlertTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessLogAlertTopNWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessMetricAlertDetailListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetBusinessMetricAlertDetailListResponse
     */
    public function getBusinessMetricAlertDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessMetricAlertDetailList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessMetricAlertDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessMetricAlertDetailListRequest $request
     *
     * @return GetBusinessMetricAlertDetailListResponse
     */
    public function getBusinessMetricAlertDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessMetricAlertDetailListWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessMetricAlertListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetBusinessMetricAlertListResponse
     */
    public function getBusinessMetricAlertListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessMetricAlertList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessMetricAlertListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessMetricAlertListRequest $request
     *
     * @return GetBusinessMetricAlertListResponse
     */
    public function getBusinessMetricAlertList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessMetricAlertListWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessMetricAlertTopNRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetBusinessMetricAlertTopNResponse
     */
    public function getBusinessMetricAlertTopNWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertType)) {
            $query['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->topNum)) {
            $query['TopNum'] = $request->topNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessMetricAlertTopN',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessMetricAlertTopNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessMetricAlertTopNRequest $request
     *
     * @return GetBusinessMetricAlertTopNResponse
     */
    public function getBusinessMetricAlertTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessMetricAlertTopNWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessMetricAllListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetBusinessMetricAllListResponse
     */
    public function getBusinessMetricAllListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessMetricAllList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessMetricAllListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessMetricAllListRequest $request
     *
     * @return GetBusinessMetricAllListResponse
     */
    public function getBusinessMetricAllList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessMetricAllListWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessMetricForecastListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetBusinessMetricForecastListResponse
     */
    public function getBusinessMetricForecastListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessMetricForecastList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessMetricForecastListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessMetricForecastListRequest $request
     *
     * @return GetBusinessMetricForecastListResponse
     */
    public function getBusinessMetricForecastList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessMetricForecastListWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessMetricResourceByMetricIdRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetBusinessMetricResourceByMetricIdResponse
     */
    public function getBusinessMetricResourceByMetricIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessMetricResourceByMetricId',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessMetricResourceByMetricIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessMetricResourceByMetricIdRequest $request
     *
     * @return GetBusinessMetricResourceByMetricIdResponse
     */
    public function getBusinessMetricResourceByMetricId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessMetricResourceByMetricIdWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessMetricSceneListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetBusinessMetricSceneListResponse
     */
    public function getBusinessMetricSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessMetricSceneList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessMetricSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessMetricSceneListRequest $request
     *
     * @return GetBusinessMetricSceneListResponse
     */
    public function getBusinessMetricSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessMetricSceneListWithOptions($request, $runtime);
    }

    /**
     * @param GetCidInfoRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetCidInfoResponse
     */
    public function getCidInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCidInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCidInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCidInfoRequest $request
     *
     * @return GetCidInfoResponse
     */
    public function getCidInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCidInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetCloudAllResourceListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetCloudAllResourceListResponse
     */
    public function getCloudAllResourceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCloudAllResourceList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCloudAllResourceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCloudAllResourceListRequest $request
     *
     * @return GetCloudAllResourceListResponse
     */
    public function getCloudAllResourceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudAllResourceListWithOptions($request, $runtime);
    }

    /**
     * @param GetCloudResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetCloudResourceResponse
     */
    public function getCloudResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cloudTypeName)) {
            $query['CloudTypeName'] = $request->cloudTypeName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
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
            'action'      => 'GetCloudResource',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCloudResourceRequest $request
     *
     * @return GetCloudResourceResponse
     */
    public function getCloudResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetCloudResourceListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetCloudResourceListResponse
     */
    public function getCloudResourceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->cloudRegionId)) {
            $query['CloudRegionId'] = $request->cloudRegionId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->isOptional)) {
            $query['IsOptional'] = $request->isOptional;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->privateIp)) {
            $query['PrivateIp'] = $request->privateIp;
        }
        if (!Utils::isUnset($request->releaseStatus)) {
            $query['ReleaseStatus'] = $request->releaseStatus;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCloudResourceList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCloudResourceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCloudResourceListRequest $request
     *
     * @return GetCloudResourceListResponse
     */
    public function getCloudResourceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudResourceListWithOptions($request, $runtime);
    }

    /**
     * @param GetConnectInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectInstancesResponse
     */
    public function getConnectInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConnectInstances',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnectInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConnectInstancesRequest $request
     *
     * @return GetConnectInstancesResponse
     */
    public function getConnectInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectInstancesWithOptions($request, $runtime);
    }

    /**
     * @param GetDataSourceDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDataSourceDetailResponse
     */
    public function getDataSourceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataSourceDetail',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataSourceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataSourceDetailRequest $request
     *
     * @return GetDataSourceDetailResponse
     */
    public function getDataSourceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDataSourceListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDataSourceListResponse
     */
    public function getDataSourceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $query['DataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataSourceList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataSourceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataSourceListRequest $request
     *
     * @return GetDataSourceListResponse
     */
    public function getDataSourceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceListWithOptions($request, $runtime);
    }

    /**
     * @param GetDataSourceTargetParamListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDataSourceTargetParamListResponse
     */
    public function getDataSourceTargetParamListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataSourceTargetParamList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataSourceTargetParamListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataSourceTargetParamListRequest $request
     *
     * @return GetDataSourceTargetParamListResponse
     */
    public function getDataSourceTargetParamList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceTargetParamListWithOptions($request, $runtime);
    }

    /**
     * @param GetDataVolumeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDataVolumeResponse
     */
    public function getDataVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataVolume',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataVolumeRequest $request
     *
     * @return GetDataVolumeResponse
     */
    public function getDataVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataVolumeWithOptions($request, $runtime);
    }

    /**
     * @param GetDiagInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetDiagInfoResponse
     */
    public function getDiagInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->diagnosticId)) {
            $query['DiagnosticId'] = $request->diagnosticId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiagInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiagInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDiagInfoRequest $request
     *
     * @return GetDiagInfoResponse
     */
    public function getDiagInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiagInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetDomainConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDomainConfigResponse
     */
    public function getDomainConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomainConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDomainConfigRequest $request
     *
     * @return GetDomainConfigResponse
     */
    public function getDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetEventAbNormalDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetEventAbNormalDetailResponse
     */
    public function getEventAbNormalDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventAbNormalDetail',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventAbNormalDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventAbNormalDetailRequest $request
     *
     * @return GetEventAbNormalDetailResponse
     */
    public function getEventAbNormalDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventAbNormalDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetEventAbNormalDetailTrendDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetEventAbNormalDetailTrendDataResponse
     */
    public function getEventAbNormalDetailTrendDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventAbNormalDetailTrendData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventAbNormalDetailTrendDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventAbNormalDetailTrendDataRequest $request
     *
     * @return GetEventAbNormalDetailTrendDataResponse
     */
    public function getEventAbNormalDetailTrendData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventAbNormalDetailTrendDataWithOptions($request, $runtime);
    }

    /**
     * @param GetEventAbNormalListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEventAbNormalListResponse
     */
    public function getEventAbNormalListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventAbNormalList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventAbNormalListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventAbNormalListRequest $request
     *
     * @return GetEventAbNormalListResponse
     */
    public function getEventAbNormalList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventAbNormalListWithOptions($request, $runtime);
    }

    /**
     * @param GetEventBusinessMetricListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEventBusinessMetricListResponse
     */
    public function getEventBusinessMetricListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventBusinessMetricList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventBusinessMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventBusinessMetricListRequest $request
     *
     * @return GetEventBusinessMetricListResponse
     */
    public function getEventBusinessMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventBusinessMetricListWithOptions($request, $runtime);
    }

    /**
     * @param GetEventDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetEventDetailResponse
     */
    public function getEventDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventDetail',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventDetailRequest $request
     *
     * @return GetEventDetailResponse
     */
    public function getEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetEventRootCauseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEventRootCauseResponse
     */
    public function getEventRootCauseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventRootCause',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventRootCauseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventRootCauseRequest $request
     *
     * @return GetEventRootCauseResponse
     */
    public function getEventRootCause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventRootCauseWithOptions($request, $runtime);
    }

    /**
     * @param GetEventSequentialTrentRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetEventSequentialTrentResponse
     */
    public function getEventSequentialTrentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventSequentialTrent',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventSequentialTrentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventSequentialTrentRequest $request
     *
     * @return GetEventSequentialTrentResponse
     */
    public function getEventSequentialTrent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventSequentialTrentWithOptions($request, $runtime);
    }

    /**
     * @param GetEventStatisticsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetEventStatisticsResponse
     */
    public function getEventStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventStatistics',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventStatisticsRequest $request
     *
     * @return GetEventStatisticsResponse
     */
    public function getEventStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetEventTrentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetEventTrentResponse
     */
    public function getEventTrentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->granularityType)) {
            $query['GranularityType'] = $request->granularityType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeType)) {
            $query['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventTrent',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventTrentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventTrentRequest $request
     *
     * @return GetEventTrentResponse
     */
    public function getEventTrent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventTrentWithOptions($request, $runtime);
    }

    /**
     * @param GetEventTypeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetEventTypeResponse
     */
    public function getEventTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventType',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventTypeRequest $request
     *
     * @return GetEventTypeResponse
     */
    public function getEventType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetExceptionsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetExceptionsResponse
     */
    public function getExceptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExceptions',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExceptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetExceptionsRequest $request
     *
     * @return GetExceptionsResponse
     */
    public function getExceptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExceptionsWithOptions($request, $runtime);
    }

    /**
     * @param GetExtendRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetExtendResponse
     */
    public function getExtendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExtend',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'none',
        ]);

        return GetExtendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetExtendRequest $request
     *
     * @return GetExtendResponse
     */
    public function getExtend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExtendWithOptions($request, $runtime);
    }

    /**
     * @param GetForecastBusinessMetricRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetForecastBusinessMetricResponse
     */
    public function getForecastBusinessMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetForecastBusinessMetric',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetForecastBusinessMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetForecastBusinessMetricRequest $request
     *
     * @return GetForecastBusinessMetricResponse
     */
    public function getForecastBusinessMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getForecastBusinessMetricWithOptions($request, $runtime);
    }

    /**
     * @param GetFunctionValidInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetFunctionValidInfoResponse
     */
    public function getFunctionValidInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->functionName)) {
            $body['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $body['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionValidInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFunctionValidInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFunctionValidInfoRequest $request
     *
     * @return GetFunctionValidInfoResponse
     */
    public function getFunctionValidInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFunctionValidInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetGroupByDimensionDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetGroupByDimensionDataResponse
     */
    public function getGroupByDimensionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->flag)) {
            $query['Flag'] = $request->flag;
        }
        if (!Utils::isUnset($request->groupBy)) {
            $query['GroupBy'] = $request->groupBy;
        }
        if (!Utils::isUnset($request->metricId)) {
            $query['MetricId'] = $request->metricId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroupByDimensionData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGroupByDimensionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGroupByDimensionDataRequest $request
     *
     * @return GetGroupByDimensionDataResponse
     */
    public function getGroupByDimensionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupByDimensionDataWithOptions($request, $runtime);
    }

    /**
     * @param GetGroupResourceNumRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetGroupResourceNumResponse
     */
    public function getGroupResourceNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroupResourceNum',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGroupResourceNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGroupResourceNumRequest $request
     *
     * @return GetGroupResourceNumResponse
     */
    public function getGroupResourceNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupResourceNumWithOptions($request, $runtime);
    }

    /**
     * @param GetGroupTopologyTagRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetGroupTopologyTagResponse
     */
    public function getGroupTopologyTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroupTopologyTag',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGroupTopologyTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGroupTopologyTagRequest $request
     *
     * @return GetGroupTopologyTagResponse
     */
    public function getGroupTopologyTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupTopologyTagWithOptions($request, $runtime);
    }

    /**
     * @param GetIncidentAllRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetIncidentAllResponse
     */
    public function getIncidentAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIncidentAll',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIncidentAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIncidentAllRequest $request
     *
     * @return GetIncidentAllResponse
     */
    public function getIncidentAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIncidentAllWithOptions($request, $runtime);
    }

    /**
     * @param GetIndexDialysisArrayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetIndexDialysisArrayResponse
     */
    public function getIndexDialysisArrayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->cloudResourceId)) {
            $query['CloudResourceId'] = $request->cloudResourceId;
        }
        if (!Utils::isUnset($request->cloudTypeName)) {
            $query['CloudTypeName'] = $request->cloudTypeName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->indexCode)) {
            $query['IndexCode'] = $request->indexCode;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIndexDialysisArray',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIndexDialysisArrayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIndexDialysisArrayRequest $request
     *
     * @return GetIndexDialysisArrayResponse
     */
    public function getIndexDialysisArray($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIndexDialysisArrayWithOptions($request, $runtime);
    }

    /**
     * @param GetIndexDialysisListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetIndexDialysisListResponse
     */
    public function getIndexDialysisListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->cloudResourceId)) {
            $query['CloudResourceId'] = $request->cloudResourceId;
        }
        if (!Utils::isUnset($request->cloudTypeName)) {
            $query['CloudTypeName'] = $request->cloudTypeName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->indexCode)) {
            $query['IndexCode'] = $request->indexCode;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIndexDialysisList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIndexDialysisListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIndexDialysisListRequest $request
     *
     * @return GetIndexDialysisListResponse
     */
    public function getIndexDialysisList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIndexDialysisListWithOptions($request, $runtime);
    }

    /**
     * @param GetIndexDialysisListLineRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetIndexDialysisListLineResponse
     */
    public function getIndexDialysisListLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->cloudResourceId)) {
            $query['CloudResourceId'] = $request->cloudResourceId;
        }
        if (!Utils::isUnset($request->cloudTypeName)) {
            $query['CloudTypeName'] = $request->cloudTypeName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->indexCode)) {
            $query['IndexCode'] = $request->indexCode;
        }
        if (!Utils::isUnset($request->metricExtend)) {
            $query['MetricExtend'] = $request->metricExtend;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIndexDialysisListLine',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIndexDialysisListLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIndexDialysisListLineRequest $request
     *
     * @return GetIndexDialysisListLineResponse
     */
    public function getIndexDialysisListLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIndexDialysisListLineWithOptions($request, $runtime);
    }

    /**
     * @param GetInspectionReportDownloadUrlRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetInspectionReportDownloadUrlResponse
     */
    public function getInspectionReportDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->downloadReportListJson)) {
            $body['DownloadReportListJson'] = $request->downloadReportListJson;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInspectionReportDownloadUrl',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInspectionReportDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInspectionReportDownloadUrlRequest $request
     *
     * @return GetInspectionReportDownloadUrlResponse
     */
    public function getInspectionReportDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInspectionReportDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetInstancesNumRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetInstancesNumResponse
     */
    public function getInstancesNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstancesNum',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstancesNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstancesNumRequest $request
     *
     * @return GetInstancesNumResponse
     */
    public function getInstancesNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstancesNumWithOptions($request, $runtime);
    }

    /**
     * @param GetLogSampleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetLogSampleResponse
     */
    public function getLogSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appField)) {
            $query['AppField'] = $request->appField;
        }
        if (!Utils::isUnset($request->appValue)) {
            $query['AppValue'] = $request->appValue;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->logField)) {
            $query['LogField'] = $request->logField;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLogSample',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLogSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLogSampleRequest $request
     *
     * @return GetLogSampleResponse
     */
    public function getLogSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogSampleWithOptions($request, $runtime);
    }

    /**
     * @param GetLogSampleColumnRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLogSampleColumnResponse
     */
    public function getLogSampleColumnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLogSampleColumn',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLogSampleColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLogSampleColumnRequest $request
     *
     * @return GetLogSampleColumnResponse
     */
    public function getLogSampleColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogSampleColumnWithOptions($request, $runtime);
    }

    /**
     * @param GetMetricEventSequentialTrentRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetMetricEventSequentialTrentResponse
     */
    public function getMetricEventSequentialTrentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetricEventSequentialTrent',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetricEventSequentialTrentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetricEventSequentialTrentRequest $request
     *
     * @return GetMetricEventSequentialTrentResponse
     */
    public function getMetricEventSequentialTrent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetricEventSequentialTrentWithOptions($request, $runtime);
    }

    /**
     * @param GetNewOptimizationItemDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetNewOptimizationItemDataResponse
     */
    public function getNewOptimizationItemDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNewOptimizationItemData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNewOptimizationItemDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNewOptimizationItemDataRequest $request
     *
     * @return GetNewOptimizationItemDataResponse
     */
    public function getNewOptimizationItemData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNewOptimizationItemDataWithOptions($request, $runtime);
    }

    /**
     * @param GetPatrolInspectionDetailListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetPatrolInspectionDetailListResponse
     */
    public function getPatrolInspectionDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPatrolInspectionDetailList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPatrolInspectionDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPatrolInspectionDetailListRequest $request
     *
     * @return GetPatrolInspectionDetailListResponse
     */
    public function getPatrolInspectionDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPatrolInspectionDetailListWithOptions($request, $runtime);
    }

    /**
     * @param GetPatrolInspectionDetailThrendDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetPatrolInspectionDetailThrendDataResponse
     */
    public function getPatrolInspectionDetailThrendDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->requestContent)) {
            $query['RequestContent'] = $request->requestContent;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPatrolInspectionDetailThrendData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPatrolInspectionDetailThrendDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPatrolInspectionDetailThrendDataRequest $request
     *
     * @return GetPatrolInspectionDetailThrendDataResponse
     */
    public function getPatrolInspectionDetailThrendData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPatrolInspectionDetailThrendDataWithOptions($request, $runtime);
    }

    /**
     * @param GetPatrolInspectionItemsListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetPatrolInspectionItemsListResponse
     */
    public function getPatrolInspectionItemsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPatrolInspectionItemsList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPatrolInspectionItemsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPatrolInspectionItemsListRequest $request
     *
     * @return GetPatrolInspectionItemsListResponse
     */
    public function getPatrolInspectionItemsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPatrolInspectionItemsListWithOptions($request, $runtime);
    }

    /**
     * @param GetPatrolInspectionListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPatrolInspectionListResponse
     */
    public function getPatrolInspectionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPatrolInspectionList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPatrolInspectionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPatrolInspectionListRequest $request
     *
     * @return GetPatrolInspectionListResponse
     */
    public function getPatrolInspectionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPatrolInspectionListWithOptions($request, $runtime);
    }

    /**
     * @param GetPatrolInspectionStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetPatrolInspectionStatusResponse
     */
    public function getPatrolInspectionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPatrolInspectionStatus',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPatrolInspectionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPatrolInspectionStatusRequest $request
     *
     * @return GetPatrolInspectionStatusResponse
     */
    public function getPatrolInspectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPatrolInspectionStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetProductInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetProductInstanceResponse
     */
    public function getProductInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductInstance',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProductInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProductInstanceRequest $request
     *
     * @return GetProductInstanceResponse
     */
    public function getProductInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetProductMetricListResponse
     */
    public function getProductMetricListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetProductMetricList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProductMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetProductMetricListResponse
     */
    public function getProductMetricList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductMetricListWithOptions($runtime);
    }

    /**
     * @param GetRealDataRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetRealDataResponse
     */
    public function getRealDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->flowName)) {
            $query['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRealDataRequest $request
     *
     * @return GetRealDataResponse
     */
    public function getRealData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealDataWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetRegionListResponse
     */
    public function getRegionListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetRegionList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRegionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetRegionListResponse
     */
    public function getRegionList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegionListWithOptions($runtime);
    }

    /**
     * @param GetRepairScriptRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRepairScriptResponse
     */
    public function getRepairScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepairScript',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRepairScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepairScriptRequest $request
     *
     * @return GetRepairScriptResponse
     */
    public function getRepairScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepairScriptWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceListResponse
     */
    public function getResourceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceListRequest $request
     *
     * @return GetResourceListResponse
     */
    public function getResourceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceListWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceTagDropListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetResourceTagDropListResponse
     */
    public function getResourceTagDropListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceTagDropList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceTagDropListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceTagDropListRequest $request
     *
     * @return GetResourceTagDropListResponse
     */
    public function getResourceTagDropList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTagDropListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceTypeListResponse
     */
    public function getResourceTypeListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetResourceTypeList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceTypeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetResourceTypeListResponse
     */
    public function getResourceTypeList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeListWithOptions($runtime);
    }

    /**
     * @param GetRiskInAllRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetRiskInAllResponse
     */
    public function getRiskInAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->screen)) {
            $query['Screen'] = $request->screen;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRiskInAll',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRiskInAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRiskInAllRequest $request
     *
     * @return GetRiskInAllResponse
     */
    public function getRiskInAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskInAllWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskInspectStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRiskInspectStatisticsResponse
     */
    public function getRiskInspectStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRiskInspectStatistics',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRiskInspectStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRiskInspectStatisticsRequest $request
     *
     * @return GetRiskInspectStatisticsResponse
     */
    public function getRiskInspectStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskInspectStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskInspectionTypeListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetRiskInspectionTypeListResponse
     */
    public function getRiskInspectionTypeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRiskInspectionTypeList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRiskInspectionTypeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRiskInspectionTypeListRequest $request
     *
     * @return GetRiskInspectionTypeListResponse
     */
    public function getRiskInspectionTypeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskInspectionTypeListWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskPatrolDetailListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetRiskPatrolDetailListResponse
     */
    public function getRiskPatrolDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRiskPatrolDetailList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRiskPatrolDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRiskPatrolDetailListRequest $request
     *
     * @return GetRiskPatrolDetailListResponse
     */
    public function getRiskPatrolDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskPatrolDetailListWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskPatrolListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRiskPatrolListResponse
     */
    public function getRiskPatrolListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->businessGroupName)) {
            $query['BusinessGroupName'] = $request->businessGroupName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->patrolId)) {
            $query['PatrolId'] = $request->patrolId;
        }
        if (!Utils::isUnset($request->riskPatrolItem)) {
            $query['RiskPatrolItem'] = $request->riskPatrolItem;
        }
        if (!Utils::isUnset($request->severityLevel)) {
            $query['SeverityLevel'] = $request->severityLevel;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRiskPatrolList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRiskPatrolListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRiskPatrolListRequest $request
     *
     * @return GetRiskPatrolListResponse
     */
    public function getRiskPatrolList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskPatrolListWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskPatrolStatisticalTrendsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetRiskPatrolStatisticalTrendsResponse
     */
    public function getRiskPatrolStatisticalTrendsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRiskPatrolStatisticalTrends',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRiskPatrolStatisticalTrendsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRiskPatrolStatisticalTrendsRequest $request
     *
     * @return GetRiskPatrolStatisticalTrendsResponse
     */
    public function getRiskPatrolStatisticalTrends($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskPatrolStatisticalTrendsWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskPatrolStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetRiskPatrolStatisticsResponse
     */
    public function getRiskPatrolStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRiskPatrolStatistics',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRiskPatrolStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRiskPatrolStatisticsRequest $request
     *
     * @return GetRiskPatrolStatisticsResponse
     */
    public function getRiskPatrolStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskPatrolStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskPatrolStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetRiskPatrolStatusResponse
     */
    public function getRiskPatrolStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRiskPatrolStatus',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRiskPatrolStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRiskPatrolStatusRequest $request
     *
     * @return GetRiskPatrolStatusResponse
     */
    public function getRiskPatrolStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskPatrolStatusWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleResponse
     */
    public function getRoleWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetRole',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetRoleResponse
     */
    public function getRole()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoleWithOptions($runtime);
    }

    /**
     * @param GetRootCauseRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetRootCauseResponse
     */
    public function getRootCauseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->rootCauseId)) {
            $query['RootCauseId'] = $request->rootCauseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRootCause',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRootCauseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRootCauseRequest $request
     *
     * @return GetRootCauseResponse
     */
    public function getRootCause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRootCauseWithOptions($request, $runtime);
    }

    /**
     * @param GetScenarioDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetScenarioDetailResponse
     */
    public function getScenarioDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScenarioDetail',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScenarioDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetScenarioDetailRequest $request
     *
     * @return GetScenarioDetailResponse
     */
    public function getScenarioDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenarioDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetScenarioListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetScenarioListResponse
     */
    public function getScenarioListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scenarioName)) {
            $query['ScenarioName'] = $request->scenarioName;
        }
        if (!Utils::isUnset($request->sceneSelectLabel)) {
            $query['SceneSelectLabel'] = $request->sceneSelectLabel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScenarioList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScenarioListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetScenarioListRequest $request
     *
     * @return GetScenarioListResponse
     */
    public function getScenarioList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenarioListWithOptions($request, $runtime);
    }

    /**
     * @param GetScenarioStatisticsListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetScenarioStatisticsListResponse
     */
    public function getScenarioStatisticsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->scenarioIds)) {
            $query['ScenarioIds'] = $request->scenarioIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScenarioStatisticsList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScenarioStatisticsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetScenarioStatisticsListRequest $request
     *
     * @return GetScenarioStatisticsListResponse
     */
    public function getScenarioStatisticsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenarioStatisticsListWithOptions($request, $runtime);
    }

    /**
     * @param GetSceneByIdRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSceneByIdResponse
     */
    public function getSceneByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSceneById',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSceneByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSceneByIdRequest $request
     *
     * @return GetSceneByIdResponse
     */
    public function getSceneById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetSceneDetailsListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSceneDetailsListResponse
     */
    public function getSceneDetailsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSceneDetailsList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSceneDetailsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSceneDetailsListRequest $request
     *
     * @return GetSceneDetailsListResponse
     */
    public function getSceneDetailsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneDetailsListWithOptions($request, $runtime);
    }

    /**
     * @param GetSceneListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSceneListResponse
     */
    public function getSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageTotal)) {
            $query['PageTotal'] = $request->pageTotal;
        }
        if (!Utils::isUnset($request->sceneType)) {
            $query['SceneType'] = $request->sceneType;
        }
        if (!Utils::isUnset($request->searchName)) {
            $query['SearchName'] = $request->searchName;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSceneList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSceneListRequest $request
     *
     * @return GetSceneListResponse
     */
    public function getSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneListWithOptions($request, $runtime);
    }

    /**
     * @param GetSceneMetricTableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSceneMetricTableResponse
     */
    public function getSceneMetricTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->metricId)) {
            $query['MetricId'] = $request->metricId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSceneMetricTable',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSceneMetricTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSceneMetricTableRequest $request
     *
     * @return GetSceneMetricTableResponse
     */
    public function getSceneMetricTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneMetricTableWithOptions($request, $runtime);
    }

    /**
     * @param GetScriptEventRootCauseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetScriptEventRootCauseResponse
     */
    public function getScriptEventRootCauseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScriptEventRootCause',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScriptEventRootCauseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetScriptEventRootCauseRequest $request
     *
     * @return GetScriptEventRootCauseResponse
     */
    public function getScriptEventRootCause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScriptEventRootCauseWithOptions($request, $runtime);
    }

    /**
     * @param GetSlsLogDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSlsLogDataResponse
     */
    public function getSlsLogDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSlsLogData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSlsLogDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSlsLogDataRequest $request
     *
     * @return GetSlsLogDataResponse
     */
    public function getSlsLogData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSlsLogDataWithOptions($request, $runtime);
    }

    /**
     * @param GetSynCloudResourceListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSynCloudResourceListResponse
     */
    public function getSynCloudResourceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSynCloudResourceList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSynCloudResourceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSynCloudResourceListRequest $request
     *
     * @return GetSynCloudResourceListResponse
     */
    public function getSynCloudResourceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSynCloudResourceListWithOptions($request, $runtime);
    }

    /**
     * @param GetTagBusinessGroupListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTagBusinessGroupListResponse
     */
    public function getTagBusinessGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTagBusinessGroupList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTagBusinessGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTagBusinessGroupListRequest $request
     *
     * @return GetTagBusinessGroupListResponse
     */
    public function getTagBusinessGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagBusinessGroupListWithOptions($request, $runtime);
    }

    /**
     * @param GetTagDropListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTagDropListResponse
     */
    public function getTagDropListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTagDropList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTagDropListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTagDropListRequest $request
     *
     * @return GetTagDropListResponse
     */
    public function getTagDropList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagDropListWithOptions($request, $runtime);
    }

    /**
     * @param GetTargetDimensionDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetTargetDimensionDataResponse
     */
    public function getTargetDimensionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->flag)) {
            $query['Flag'] = $request->flag;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->labelValue)) {
            $query['LabelValue'] = $request->labelValue;
        }
        if (!Utils::isUnset($request->metricId)) {
            $query['MetricId'] = $request->metricId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTargetDimensionData',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTargetDimensionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTargetDimensionDataRequest $request
     *
     * @return GetTargetDimensionDataResponse
     */
    public function getTargetDimensionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTargetDimensionDataWithOptions($request, $runtime);
    }

    /**
     * @param GetThresholdListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetThresholdListResponse
     */
    public function getThresholdListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThresholdList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThresholdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetThresholdListRequest $request
     *
     * @return GetThresholdListResponse
     */
    public function getThresholdList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThresholdListWithOptions($request, $runtime);
    }

    /**
     * @param GetThroughPutRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetThroughPutResponse
     */
    public function getThroughPutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThroughPut',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThroughPutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetThroughPutRequest $request
     *
     * @return GetThroughPutResponse
     */
    public function getThroughPut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThroughPutWithOptions($request, $runtime);
    }

    /**
     * @param GetTrendSlsReportsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTrendSlsReportsResponse
     */
    public function getTrendSlsReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrendSlsReports',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrendSlsReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrendSlsReportsRequest $request
     *
     * @return GetTrendSlsReportsResponse
     */
    public function getTrendSlsReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrendSlsReportsWithOptions($request, $runtime);
    }

    /**
     * @param GetUserInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserInfoRequest $request
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetUserLoginInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUserLoginInfoResponse
     */
    public function getUserLoginInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPrincipalName)) {
            $query['AccountPrincipalName'] = $request->accountPrincipalName;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->currentPk)) {
            $query['CurrentPk'] = $request->currentPk;
        }
        if (!Utils::isUnset($request->mainAccountPk)) {
            $query['MainAccountPk'] = $request->mainAccountPk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserLoginInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserLoginInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserLoginInfoRequest $request
     *
     * @return GetUserLoginInfoResponse
     */
    public function getUserLoginInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserLoginInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetUserOrderConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserOrderConfigResponse
     */
    public function getUserOrderConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserOrderConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserOrderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserOrderConfigRequest $request
     *
     * @return GetUserOrderConfigResponse
     */
    public function getUserOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserOrderConfigWithOptions($request, $runtime);
    }

    /**
     * @param IgnoreAlarmsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return IgnoreAlarmsResponse
     */
    public function ignoreAlarmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmId)) {
            $query['AlarmId'] = $request->alarmId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IgnoreAlarms',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IgnoreAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IgnoreAlarmsRequest $request
     *
     * @return IgnoreAlarmsResponse
     */
    public function ignoreAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreAlarmsWithOptions($request, $runtime);
    }

    /**
     * @param ListApplyAuthorizationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListApplyAuthorizationResponse
     */
    public function listApplyAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->permissionType)) {
            $query['PermissionType'] = $request->permissionType;
        }
        if (!Utils::isUnset($request->switchFrontOperaUid)) {
            $query['SwitchFrontOperaUid'] = $request->switchFrontOperaUid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplyAuthorization',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplyAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApplyAuthorizationRequest $request
     *
     * @return ListApplyAuthorizationResponse
     */
    public function listApplyAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplyAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param ListAuthRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAuthResponse
     */
    public function listAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuth',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAuthRequest $request
     *
     * @return ListAuthResponse
     */
    public function listAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListAuthorizedUidResponse
     */
    public function listAuthorizedUidWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListAuthorizedUid',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthorizedUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListAuthorizedUidResponse
     */
    public function listAuthorizedUid()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedUidWithOptions($runtime);
    }

    /**
     * @param ListCausePlanRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListCausePlanResponse
     */
    public function listCausePlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->rootCauseId)) {
            $query['RootCauseId'] = $request->rootCauseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCausePlan',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCausePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCausePlanRequest $request
     *
     * @return ListCausePlanResponse
     */
    public function listCausePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCausePlanWithOptions($request, $runtime);
    }

    /**
     * @param ListConfirmAuthorizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListConfirmAuthorizationResponse
     */
    public function listConfirmAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->permissionType)) {
            $query['PermissionType'] = $request->permissionType;
        }
        if (!Utils::isUnset($request->switchFrontOperaUid)) {
            $query['SwitchFrontOperaUid'] = $request->switchFrontOperaUid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfirmAuthorization',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfirmAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConfirmAuthorizationRequest $request
     *
     * @return ListConfirmAuthorizationResponse
     */
    public function listConfirmAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfirmAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param ListEventRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListEventResponse
     */
    public function listEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEvent',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEventRequest $request
     *
     * @return ListEventResponse
     */
    public function listEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListNotAuthorizedUidResponse
     */
    public function listNotAuthorizedUidWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListNotAuthorizedUid',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNotAuthorizedUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListNotAuthorizedUidResponse
     */
    public function listNotAuthorizedUid()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotAuthorizedUidWithOptions($runtime);
    }

    /**
     * @param ListReportsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListReportsResponse
     */
    public function listReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListReports',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListReportsRequest $request
     *
     * @return ListReportsResponse
     */
    public function listReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReportsWithOptions($request, $runtime);
    }

    /**
     * @param ListRootCauseRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListRootCauseResponse
     */
    public function listRootCauseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->rootCauseId)) {
            $query['RootCauseId'] = $request->rootCauseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRootCause',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRootCauseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRootCauseRequest $request
     *
     * @return ListRootCauseResponse
     */
    public function listRootCause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRootCauseWithOptions($request, $runtime);
    }

    /**
     * @param ListSlsReportsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListSlsReportsResponse
     */
    public function listSlsReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logStore)) {
            $query['LogStore'] = $request->logStore;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSlsReports',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSlsReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSlsReportsRequest $request
     *
     * @return ListSlsReportsResponse
     */
    public function listSlsReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSlsReportsWithOptions($request, $runtime);
    }

    /**
     * @param PutAlertContactRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutAlertContactResponse
     */
    public function putAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->webhook)) {
            $body['Webhook'] = $request->webhook;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutAlertContact',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutAlertContactRequest $request
     *
     * @return PutAlertContactResponse
     */
    public function putAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param PutAlertContactGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutAlertContactGroupResponse
     */
    public function putAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->alertContactGroupJson)) {
            $body['AlertContactGroupJson'] = $request->alertContactGroupJson;
        }
        if (!Utils::isUnset($request->contactIdsJson)) {
            $body['ContactIdsJson'] = $request->contactIdsJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutAlertContactGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutAlertContactGroupRequest $request
     *
     * @return PutAlertContactGroupResponse
     */
    public function putAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param PutAlertContactToGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PutAlertContactToGroupResponse
     */
    public function putAlertContactToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $body = [];
        if (!Utils::isUnset($request->contactIdListJson)) {
            $body['ContactIdListJson'] = $request->contactIdListJson;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupIdListJson)) {
            $body['GroupIdListJson'] = $request->groupIdListJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutAlertContactToGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutAlertContactToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutAlertContactToGroupRequest $request
     *
     * @return PutAlertContactToGroupResponse
     */
    public function putAlertContactToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAlertContactToGroupWithOptions($request, $runtime);
    }

    /**
     * @param PutAlertIgnoreRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutAlertIgnoreResponse
     */
    public function putAlertIgnoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutAlertIgnore',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutAlertIgnoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutAlertIgnoreRequest $request
     *
     * @return PutAlertIgnoreResponse
     */
    public function putAlertIgnore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAlertIgnoreWithOptions($request, $runtime);
    }

    /**
     * @param PutAlertSettingRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutAlertSettingResponse
     */
    public function putAlertSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertSilenceConfig)) {
            $query['AlertSilenceConfig'] = $request->alertSilenceConfig;
        }
        $body = [];
        if (!Utils::isUnset($request->alarmLevel)) {
            $body['AlarmLevel'] = $request->alarmLevel;
        }
        if (!Utils::isUnset($request->alertName)) {
            $body['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->alertSettingId)) {
            $body['AlertSettingId'] = $request->alertSettingId;
        }
        if (!Utils::isUnset($request->businessGroupIdsJson)) {
            $body['BusinessGroupIdsJson'] = $request->businessGroupIdsJson;
        }
        if (!Utils::isUnset($request->contactGroupIdsJson)) {
            $body['ContactGroupIdsJson'] = $request->contactGroupIdsJson;
        }
        if (!Utils::isUnset($request->contactIdsJson)) {
            $body['ContactIdsJson'] = $request->contactIdsJson;
        }
        if (!Utils::isUnset($request->customerUid)) {
            $body['CustomerUid'] = $request->customerUid;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->sendDingtalkNotice)) {
            $body['SendDingtalkNotice'] = $request->sendDingtalkNotice;
        }
        if (!Utils::isUnset($request->sendEmailNotice)) {
            $body['SendEmailNotice'] = $request->sendEmailNotice;
        }
        if (!Utils::isUnset($request->sendSmsNotice)) {
            $body['SendSmsNotice'] = $request->sendSmsNotice;
        }
        if (!Utils::isUnset($request->stopDuration)) {
            $body['StopDuration'] = $request->stopDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutAlertSetting',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutAlertSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutAlertSettingRequest $request
     *
     * @return PutAlertSettingResponse
     */
    public function putAlertSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAlertSettingWithOptions($request, $runtime);
    }

    /**
     * @param PutAlertSettingListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutAlertSettingListResponse
     */
    public function putAlertSettingListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertSettingEditRequestListJson)) {
            $body['AlertSettingEditRequestListJson'] = $request->alertSettingEditRequestListJson;
        }
        if (!Utils::isUnset($request->contactGroupIdsJson)) {
            $body['ContactGroupIdsJson'] = $request->contactGroupIdsJson;
        }
        if (!Utils::isUnset($request->contactIdsJson)) {
            $body['ContactIdsJson'] = $request->contactIdsJson;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutAlertSettingList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutAlertSettingListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutAlertSettingListRequest $request
     *
     * @return PutAlertSettingListResponse
     */
    public function putAlertSettingList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAlertSettingListWithOptions($request, $runtime);
    }

    /**
     * @param PutAlertSettingStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PutAlertSettingStatusResponse
     */
    public function putAlertSettingStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertSettingId)) {
            $body['AlertSettingId'] = $request->alertSettingId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->settingStatus)) {
            $body['SettingStatus'] = $request->settingStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutAlertSettingStatus',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutAlertSettingStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutAlertSettingStatusRequest $request
     *
     * @return PutAlertSettingStatusResponse
     */
    public function putAlertSettingStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAlertSettingStatusWithOptions($request, $runtime);
    }

    /**
     * @param PutDataSourceConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutDataSourceConfigResponse
     */
    public function putDataSourceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceDescribe)) {
            $query['DataSourceDescribe'] = $request->dataSourceDescribe;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $query['DataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->dataSourceParams)) {
            $query['DataSourceParams'] = $request->dataSourceParams;
        }
        if (!Utils::isUnset($request->dataSourceParamsMapping)) {
            $query['DataSourceParamsMapping'] = $request->dataSourceParamsMapping;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutDataSourceConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutDataSourceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutDataSourceConfigRequest $request
     *
     * @return PutDataSourceConfigResponse
     */
    public function putDataSourceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDataSourceConfigWithOptions($request, $runtime);
    }

    /**
     * @param PutGroupResourceTagRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutGroupResourceTagResponse
     */
    public function putGroupResourceTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutGroupResourceTag',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutGroupResourceTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutGroupResourceTagRequest $request
     *
     * @return PutGroupResourceTagResponse
     */
    public function putGroupResourceTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putGroupResourceTagWithOptions($request, $runtime);
    }

    /**
     * @param PutGroupTopologyTagLogRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PutGroupTopologyTagLogResponse
     */
    public function putGroupTopologyTagLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutGroupTopologyTagLog',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutGroupTopologyTagLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutGroupTopologyTagLogRequest $request
     *
     * @return PutGroupTopologyTagLogResponse
     */
    public function putGroupTopologyTagLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putGroupTopologyTagLogWithOptions($request, $runtime);
    }

    /**
     * @param PutReportEmailConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutReportEmailConfigResponse
     */
    public function putReportEmailConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutReportEmailConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutReportEmailConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutReportEmailConfigRequest $request
     *
     * @return PutReportEmailConfigResponse
     */
    public function putReportEmailConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putReportEmailConfigWithOptions($request, $runtime);
    }

    /**
     * @param PutResourceWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutResourceWhitelistResponse
     */
    public function putResourceWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutResourceWhitelist',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutResourceWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutResourceWhitelistRequest $request
     *
     * @return PutResourceWhitelistResponse
     */
    public function putResourceWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putResourceWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceScriptListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReplaceScriptListResponse
     */
    public function replaceScriptListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplaceScriptList',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceScriptListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplaceScriptListRequest $request
     *
     * @return ReplaceScriptListResponse
     */
    public function replaceScriptList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceScriptListWithOptions($request, $runtime);
    }

    /**
     * @param RevokeSubmitApplyPermissionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RevokeSubmitApplyPermissionResponse
     */
    public function revokeSubmitApplyPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->switchFrontOperaUid)) {
            $query['SwitchFrontOperaUid'] = $request->switchFrontOperaUid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeSubmitApplyPermission',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeSubmitApplyPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeSubmitApplyPermissionRequest $request
     *
     * @return RevokeSubmitApplyPermissionResponse
     */
    public function revokeSubmitApplyPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSubmitApplyPermissionWithOptions($request, $runtime);
    }

    /**
     * @param RunAnalysisProcessRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunAnalysisProcessResponse
     */
    public function runAnalysisProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunAnalysisProcess',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunAnalysisProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunAnalysisProcessRequest $request
     *
     * @return RunAnalysisProcessResponse
     */
    public function runAnalysisProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runAnalysisProcessWithOptions($request, $runtime);
    }

    /**
     * @param RunCommandRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RunCommandResponse
     */
    public function runCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandContent)) {
            $query['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunCommand',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunCommandRequest $request
     *
     * @return RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * @param RunForecastAnalyzeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunForecastAnalyzeResponse
     */
    public function runForecastAnalyzeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunForecastAnalyze',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunForecastAnalyzeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunForecastAnalyzeRequest $request
     *
     * @return RunForecastAnalyzeResponse
     */
    public function runForecastAnalyze($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runForecastAnalyzeWithOptions($request, $runtime);
    }

    /**
     * @param RunPatrolInspectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RunPatrolInspectionResponse
     */
    public function runPatrolInspectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunPatrolInspection',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunPatrolInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunPatrolInspectionRequest $request
     *
     * @return RunPatrolInspectionResponse
     */
    public function runPatrolInspection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runPatrolInspectionWithOptions($request, $runtime);
    }

    /**
     * @param RunRepairScriptRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RunRepairScriptResponse
     */
    public function runRepairScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunRepairScript',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunRepairScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunRepairScriptRequest $request
     *
     * @return RunRepairScriptResponse
     */
    public function runRepairScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runRepairScriptWithOptions($request, $runtime);
    }

    /**
     * @param RunRiskPatrolRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RunRiskPatrolResponse
     */
    public function runRiskPatrolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunRiskPatrol',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunRiskPatrolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunRiskPatrolRequest $request
     *
     * @return RunRiskPatrolResponse
     */
    public function runRiskPatrol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runRiskPatrolWithOptions($request, $runtime);
    }

    /**
     * @param SwitchUserTopRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SwitchUserTopResponse
     */
    public function switchUserTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->switchFrontOperaUid)) {
            $query['SwitchFrontOperaUid'] = $request->switchFrontOperaUid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchUserTop',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchUserTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchUserTopRequest $request
     *
     * @return SwitchUserTopResponse
     */
    public function switchUserTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchUserTopWithOptions($request, $runtime);
    }

    /**
     * @param UpdBusinessGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdBusinessGroupResponse
     */
    public function updBusinessGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdBusinessGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceList)) {
            $request->instanceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->businessGroupDesc)) {
            $query['BusinessGroupDesc'] = $request->businessGroupDesc;
        }
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->businessGroupName)) {
            $query['BusinessGroupName'] = $request->businessGroupName;
        }
        if (!Utils::isUnset($request->instanceListShrink)) {
            $query['InstanceList'] = $request->instanceListShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->updateUser)) {
            $query['UpdateUser'] = $request->updateUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdBusinessGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdBusinessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdBusinessGroupRequest $request
     *
     * @return UpdBusinessGroupResponse
     */
    public function updBusinessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updBusinessGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuthorizationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAuthorizationResponse
     */
    public function updateAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthorization',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuthorizationRequest $request
     *
     * @return UpdateAuthorizationResponse
     */
    public function updateAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBindMetricRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateBindMetricResponse
     */
    public function updateBindMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->metricId)) {
            $query['MetricId'] = $request->metricId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBindMetric',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBindMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBindMetricRequest $request
     *
     * @return UpdateBindMetricResponse
     */
    public function updateBindMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBindMetricWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBusinessGroupRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateBusinessGroupResponse
     */
    public function updateBusinessGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateBusinessGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceList)) {
            $request->instanceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->businessGroupDesc)) {
            $query['BusinessGroupDesc'] = $request->businessGroupDesc;
        }
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->businessGroupName)) {
            $query['BusinessGroupName'] = $request->businessGroupName;
        }
        if (!Utils::isUnset($request->cloudResourceTypeId)) {
            $query['CloudResourceTypeId'] = $request->cloudResourceTypeId;
        }
        if (!Utils::isUnset($request->dealType)) {
            $query['DealType'] = $request->dealType;
        }
        if (!Utils::isUnset($request->instanceListShrink)) {
            $query['InstanceList'] = $request->instanceListShrink;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->updateUser)) {
            $query['UpdateUser'] = $request->updateUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBusinessGroup',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBusinessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBusinessGroupRequest $request
     *
     * @return UpdateBusinessGroupResponse
     */
    public function updateBusinessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBusinessGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBusinessMetricAlertConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateBusinessMetricAlertConfigResponse
     */
    public function updateBusinessMetricAlertConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBusinessMetricAlertConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBusinessMetricAlertConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBusinessMetricAlertConfigRequest $request
     *
     * @return UpdateBusinessMetricAlertConfigResponse
     */
    public function updateBusinessMetricAlertConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBusinessMetricAlertConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBusinessMetricResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateBusinessMetricResourceResponse
     */
    public function updateBusinessMetricResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessMetricId)) {
            $query['BusinessMetricId'] = $request->businessMetricId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->resourceList)) {
            $query['ResourceList'] = $request->resourceList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBusinessMetricResource',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBusinessMetricResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBusinessMetricResourceRequest $request
     *
     * @return UpdateBusinessMetricResourceResponse
     */
    public function updateBusinessMetricResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBusinessMetricResourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDataSourceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDataSourceConfigResponse
     */
    public function updateDataSourceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceDescribe)) {
            $query['DataSourceDescribe'] = $request->dataSourceDescribe;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $query['DataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->dataSourceParams)) {
            $query['DataSourceParams'] = $request->dataSourceParams;
        }
        if (!Utils::isUnset($request->dataSourceParamsMapping)) {
            $query['DataSourceParamsMapping'] = $request->dataSourceParamsMapping;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataSourceConfig',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDataSourceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDataSourceConfigRequest $request
     *
     * @return UpdateDataSourceConfigResponse
     */
    public function updateDataSourceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHandleRiskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateHandleRiskResponse
     */
    public function updateHandleRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHandleRisk',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHandleRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHandleRiskRequest $request
     *
     * @return UpdateHandleRiskResponse
     */
    public function updateHandleRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHandleRiskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHandleRiskBaseRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateHandleRiskBaseResponse
     */
    public function updateHandleRiskBaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHandleRiskBase',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHandleRiskBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHandleRiskBaseRequest $request
     *
     * @return UpdateHandleRiskBaseResponse
     */
    public function updateHandleRiskBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHandleRiskBaseWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIgnoreRiskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateIgnoreRiskResponse
     */
    public function updateIgnoreRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIgnoreRisk',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIgnoreRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIgnoreRiskRequest $request
     *
     * @return UpdateIgnoreRiskResponse
     */
    public function updateIgnoreRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIgnoreRiskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIgnoreRiskBaseRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateIgnoreRiskBaseResponse
     */
    public function updateIgnoreRiskBaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIgnoreRiskBase',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIgnoreRiskBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIgnoreRiskBaseRequest $request
     *
     * @return UpdateIgnoreRiskBaseResponse
     */
    public function updateIgnoreRiskBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIgnoreRiskBaseWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInspectionSettingStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateInspectionSettingStatusResponse
     */
    public function updateInspectionSettingStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->riskCode)) {
            $body['RiskCode'] = $request->riskCode;
        }
        if (!Utils::isUnset($request->riskEnableStatus)) {
            $body['RiskEnableStatus'] = $request->riskEnableStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInspectionSettingStatus',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInspectionSettingStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInspectionSettingStatusRequest $request
     *
     * @return UpdateInspectionSettingStatusResponse
     */
    public function updateInspectionSettingStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInspectionSettingStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInspectionThresholdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInspectionThresholdResponse
     */
    public function updateInspectionThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->riskCode)) {
            $body['RiskCode'] = $request->riskCode;
        }
        if (!Utils::isUnset($request->thresholdItemListJson)) {
            $body['ThresholdItemListJson'] = $request->thresholdItemListJson;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInspectionThreshold',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInspectionThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInspectionThresholdRequest $request
     *
     * @return UpdateInspectionThresholdResponse
     */
    public function updateInspectionThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInspectionThresholdWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOperationPermissionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateOperationPermissionResponse
     */
    public function updateOperationPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->permissionType)) {
            $query['PermissionType'] = $request->permissionType;
        }
        if (!Utils::isUnset($request->switchFrontOperaUid)) {
            $query['SwitchFrontOperaUid'] = $request->switchFrontOperaUid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOperationPermission',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOperationPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateOperationPermissionRequest $request
     *
     * @return UpdateOperationPermissionResponse
     */
    public function updateOperationPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOperationPermissionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateReportEmailConfigStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateReportEmailConfigStatusResponse
     */
    public function updateReportEmailConfigStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->configStatus)) {
            $body['ConfigStatus'] = $request->configStatus;
        }
        if (!Utils::isUnset($request->mailConfigId)) {
            $body['MailConfigId'] = $request->mailConfigId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateReportEmailConfigStatus',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateReportEmailConfigStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateReportEmailConfigStatusRequest $request
     *
     * @return UpdateReportEmailConfigStatusResponse
     */
    public function updateReportEmailConfigStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateReportEmailConfigStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateReportSubscriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateReportSubscriptionResponse
     */
    public function updateReportSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dayOfWeek)) {
            $body['DayOfWeek'] = $request->dayOfWeek;
        }
        if (!Utils::isUnset($request->hourOfDay)) {
            $body['HourOfDay'] = $request->hourOfDay;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->reportName)) {
            $body['ReportName'] = $request->reportName;
        }
        if (!Utils::isUnset($request->subscribe)) {
            $body['Subscribe'] = $request->subscribe;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateReportSubscription',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateReportSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateReportSubscriptionRequest $request
     *
     * @return UpdateReportSubscriptionResponse
     */
    public function updateReportSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateReportSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateScenarioResponse
     */
    public function updateScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertSettingId)) {
            $query['AlertSettingId'] = $request->alertSettingId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateScenario',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateScenarioRequest $request
     *
     * @return UpdateScenarioResponse
     */
    public function updateScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScenarioWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSceneResponse
     */
    public function updateSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->metricListJson)) {
            $body['MetricListJson'] = $request->metricListJson;
        }
        if (!Utils::isUnset($request->nodeListJson)) {
            $body['NodeListJson'] = $request->nodeListJson;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->sceneDesc)) {
            $body['SceneDesc'] = $request->sceneDesc;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $body['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->sceneOwner)) {
            $body['SceneOwner'] = $request->sceneOwner;
        }
        if (!Utils::isUnset($request->sceneWebhook)) {
            $body['SceneWebhook'] = $request->sceneWebhook;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateScene',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSceneRequest $request
     *
     * @return UpdateSceneResponse
     */
    public function updateScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSceneModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSceneModelResponse
     */
    public function updateSceneModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fcFunctionName)) {
            $body['FcFunctionName'] = $request->fcFunctionName;
        }
        if (!Utils::isUnset($request->fcHandler)) {
            $body['FcHandler'] = $request->fcHandler;
        }
        if (!Utils::isUnset($request->fcInitializer)) {
            $body['FcInitializer'] = $request->fcInitializer;
        }
        if (!Utils::isUnset($request->fcRegionNo)) {
            $body['FcRegionNo'] = $request->fcRegionNo;
        }
        if (!Utils::isUnset($request->fcServiceName)) {
            $body['FcServiceName'] = $request->fcServiceName;
        }
        if (!Utils::isUnset($request->modelDesc)) {
            $body['ModelDesc'] = $request->modelDesc;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelLanguage)) {
            $body['ModelLanguage'] = $request->modelLanguage;
        }
        if (!Utils::isUnset($request->modelMemo)) {
            $body['ModelMemo'] = $request->modelMemo;
        }
        if (!Utils::isUnset($request->modelName)) {
            $body['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->rootCauseDesc)) {
            $body['RootCauseDesc'] = $request->rootCauseDesc;
        }
        if (!Utils::isUnset($request->rootCauseSolution)) {
            $body['RootCauseSolution'] = $request->rootCauseSolution;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSceneModel',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSceneModelRequest $request
     *
     * @return UpdateSceneModelResponse
     */
    public function updateSceneModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneModelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSceneModelApplyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSceneModelApplyResponse
     */
    public function updateSceneModelApplyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyContent)) {
            $body['ApplyContent'] = $request->applyContent;
        }
        if (!Utils::isUnset($request->applyId)) {
            $body['ApplyId'] = $request->applyId;
        }
        if (!Utils::isUnset($request->applyStatus)) {
            $body['ApplyStatus'] = $request->applyStatus;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSceneModelApply',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneModelApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSceneModelApplyRequest $request
     *
     * @return UpdateSceneModelApplyResponse
     */
    public function updateSceneModelApply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneModelApplyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSceneModelCurVersionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateSceneModelCurVersionResponse
     */
    public function updateSceneModelCurVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extId)) {
            $body['ExtId'] = $request->extId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSceneModelCurVersion',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneModelCurVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSceneModelCurVersionRequest $request
     *
     * @return UpdateSceneModelCurVersionResponse
     */
    public function updateSceneModelCurVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneModelCurVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSceneSystemModelStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateSceneSystemModelStatusResponse
     */
    public function updateSceneSystemModelStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelStatus)) {
            $body['ModelStatus'] = $request->modelStatus;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSceneSystemModelStatus',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneSystemModelStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSceneSystemModelStatusRequest $request
     *
     * @return UpdateSceneSystemModelStatusResponse
     */
    public function updateSceneSystemModelStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneSystemModelStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateScenestatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateScenestatusResponse
     */
    public function updateScenestatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateScenestatus',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScenestatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateScenestatusRequest $request
     *
     * @return UpdateScenestatusResponse
     */
    public function updateScenestatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScenestatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateScriptResponse
     */
    public function updateScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->handleSuggestDesc)) {
            $query['HandleSuggestDesc'] = $request->handleSuggestDesc;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->operaUid)) {
            $query['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->rootCauseDesc)) {
            $query['RootCauseDesc'] = $request->rootCauseDesc;
        }
        if (!Utils::isUnset($request->rootCausesLog)) {
            $query['RootCausesLog'] = $request->rootCausesLog;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->script)) {
            $query['Script'] = $request->script;
        }
        if (!Utils::isUnset($request->scriptLanguage)) {
            $query['ScriptLanguage'] = $request->scriptLanguage;
        }
        if (!Utils::isUnset($request->scriptName)) {
            $query['ScriptName'] = $request->scriptName;
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
            'action'      => 'UpdateScript',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateScriptRequest $request
     *
     * @return UpdateScriptResponse
     */
    public function updateScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScriptWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStatusOfSceneRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateStatusOfSceneResponse
     */
    public function updateStatusOfSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operaUid)) {
            $body['OperaUid'] = $request->operaUid;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sceneStatus)) {
            $body['SceneStatus'] = $request->sceneStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStatusOfScene',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStatusOfSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStatusOfSceneRequest $request
     *
     * @return UpdateStatusOfSceneResponse
     */
    public function updateStatusOfScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStatusOfSceneWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTagInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateTagInfoResponse
     */
    public function updateTagInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTagInfo',
            'version'     => '2020-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTagInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTagInfoRequest $request
     *
     * @return UpdateTagInfoResponse
     */
    public function updateTagInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTagInfoWithOptions($request, $runtime);
    }
}
