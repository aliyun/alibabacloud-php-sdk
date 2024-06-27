<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Xtee\V20210910\Models\BindVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\BindVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckCustVariableLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckCustVariableLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckExpressionVariableLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckExpressionVariableLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckFieldLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckFieldLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckPermissionRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckPermissionResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckUsageVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckUsageVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ClearNameListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ClearNameListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisConditionFavoriteRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisConditionFavoriteResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisExportTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisExportTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAppKeyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAppKeyResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAuthorizationUserRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAuthorizationUserResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateCustVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateCustVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateExpressionVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateExpressionVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateFieldRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateFieldResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateGroupSignRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateGroupSignResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateMonitorTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateMonitorTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreatePocEvRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreatePocEvResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreatePocRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreatePocResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateQueryVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateQueryVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRecommendEventRuleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRecommendEventRuleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRecommendTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRecommendTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateReplenishTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateReplenishTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleApiRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleApiResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleDataRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleDataResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSimulationTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSimulationTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteAnalysisConditionFavoriteRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteAnalysisConditionFavoriteResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteAuthUserRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteAuthUserResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteByPassShuntEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteByPassShuntEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteCustVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteCustVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteExpressionVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteExpressionVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteFieldRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteFieldResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteNameListDataRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteNameListDataResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteNameListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteNameListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteQueryVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteQueryVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleBatchRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleBatchResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleDataRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleDataResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAdvanceSearchLeftVariableListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAdvanceSearchLeftVariableListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAdvanceSearchPageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAdvanceSearchPageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllDataSourceRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllDataSourceResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllEventNameAndCodeRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllEventNameAndCodeResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllRootVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllRootVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisColumnFieldListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisColumnFieldListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisColumnListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisColumnListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisConditionFavoriteListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisConditionFavoriteListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisExportTaskDownloadUrlRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisExportTaskDownloadUrlResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiGroupsRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiGroupsResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiNameListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiNameListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApisRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApisResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAppKeyPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAppKeyPageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuditConfigRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuditConfigResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuditDetailsRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuditDetailsResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuditPageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuditPageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthEventNameListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthEventNameListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthRulePageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthRulePageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthSceneListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthSceneListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthScenePageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthScenePageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthStatusRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthStatusResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAvgExecuteCostReportRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAvgExecuteCostReportResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeBasicSearchPageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeBasicSearchPageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeBasicStartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeBasicStartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeByPassShuntEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeByPassShuntEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariableConfigListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariableConfigListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariableDetailRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariableDetailResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariablePageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariablePageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDataSourceDataDownloadUrlRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDataSourceDataDownloadUrlResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDataSourceFieldsRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDataSourceFieldsResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDataSourcePageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDataSourcePageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDecisionResultFluctuationRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDecisionResultFluctuationResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDecisionResultTrendRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDecisionResultTrendResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDetailStartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDetailStartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDownloadUrlRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDownloadUrlResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventBaseInfoByEventCodeRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventBaseInfoByEventCodeResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventCountRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventCountResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventDetailByRequestIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventDetailByRequestIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventLogDetailRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventLogDetailResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventLogPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventLogPageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventPageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventPageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventResultBarChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventResultBarChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventResultListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventResultListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventsVariableListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventsVariableListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventTaskHistoryRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventTaskHistoryResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventTotalCountReportRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventTotalCountReportResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventUploadPolicyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventUploadPolicyResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateBindRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateBindResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExcuteNumRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExcuteNumResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExistNameRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExistNameResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExistSceneRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExistSceneResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariableDetailRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariableDetailResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariableFunctionListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariableFunctionListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariablePageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariablePageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeFieldByIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeFieldByIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeFieldListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeFieldListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeFieldPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeFieldPageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupAccountPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupAccountPageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupConditionListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupConditionListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupPageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupStatisticsByTodayRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupStatisticsByTodayResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupTrendRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupTrendResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHasRuleNameByEventCodeRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHasRuleNameByEventCodeResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleFluctuationRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleFluctuationResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleTrendRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleTrendResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeInputFeildCountByEventCodeRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeInputFeildCountByEventCodeResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeListPocRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeListPocResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeLoanExecListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeLoanExecListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeLoanTaskListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeLoanTaskListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeMarkPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeMarkPageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeMenuPermissionRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeMenuPermissionResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeMonitorTaskLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeMonitorTaskLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListDownloadUrlRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListDownloadUrlResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListPageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListPageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListTypeListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListTypeListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListVariablePageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListVariablePageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperationLogPageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperationLogPageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListBySceneRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListBySceneResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListByTypeRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListByTypeResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOssAuthStatusRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOssAuthStatusResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOssPolicyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOssPolicyResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOssTokenRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOssTokenResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeParamByEventCodesRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeParamByEventCodesResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeParamListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeParamListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribePocDetailRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribePocDetailResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribePocOssTokenRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribePocOssTokenResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribePocTaskListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribePocTaskListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribePrivateStackRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribePrivateStackResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeQueryVariableDetailRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeQueryVariableDetailResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeQueryVariablePageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeQueryVariablePageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendSceneVariablesRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendSceneVariablesResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskPageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskPageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendVariablesVelocityRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendVariablesVelocityResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendVelocitiesRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendVelocitiesResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestHitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestHitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestPeakReportRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestPeakReportResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeResultCountRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeResultCountResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRiskLineChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRiskLineChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleBarChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleBarChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleCountByUserIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleCountByUserIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleDetailByRuleIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleDetailByRuleIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleHitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleHitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleListByEventCodesListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleListByEventCodesListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRulePageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRulePageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleSnapshotRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleSnapshotResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleVersionListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleVersionListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafConsoleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafConsoleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafDeOrderRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafDeOrderResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafOrderRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafOrderResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafStartConfigRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafStartConfigResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafStartStepsRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafStartStepsResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafTagListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafTagListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDemoDownloadUrlRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDemoDownloadUrlResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDownloadUrlRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDownloadUrlResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleInfoRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleInfoResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleSceneListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleSceneListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleTagListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleTagListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleUploadPolicyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleUploadPolicyResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneAllEventNameCodeListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneAllEventNameCodeListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneEventPageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneEventPageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneRulePageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneRulePageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionNumLineChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionNumLineChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionPieChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionPieChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionRatioLineChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionRatioLineChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSDKDownloadListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSDKDownloadListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSelectItemRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSelectItemResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceAppKeyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceAppKeyResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceConsumeDownloadUrlRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceConsumeDownloadUrlResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceConsumeRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceConsumeResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSimulationPreditInfoRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSimulationPreditInfoResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSimulationTaskCountRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSimulationTaskCountResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSimulationTaskListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSimulationTaskListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSlsUrlConfigRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSlsUrlConfigResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSupportRuleListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSupportRuleListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsBarChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsBarChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsFluctuationRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsFluctuationResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsNumLineChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsNumLineChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsRatioLineChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsRatioLineChartResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsTrendRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsTrendResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTaskListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTaskListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTaskLogListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTaskLogListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateBaseInfoByTemplateIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateBaseInfoByTemplateIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateCountRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateCountResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateDownloadRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateDownloadResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplatePageListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplatePageListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeUsedServiceRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeUsedServiceResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeUserInfoRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeUserInfoResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableBindDetailRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableBindDetailResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableDetailRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableDetailResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableFeeRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableFeeResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableMarketListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableMarketListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableSceneListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableSceneListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ExpressionTestRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ExpressionTestResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\FileUploadRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\FileUploadResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportNameListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportNameListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportTemplateEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportTemplateEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyAppKeyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyAppKeyResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyCustVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyCustVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyEventStatusRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyEventStatusResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyExpressionVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyExpressionVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyFieldRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyFieldResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyPocTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyPocTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyRulePriorityRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyRulePriorityResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyRuleStatusRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyRuleStatusResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyTemplateRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyTemplateResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyTemplateStatusRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyTemplateStatusResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\OpenConsoleSlsRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\OpenConsoleSlsResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\OperateFavoriteVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\OperateFavoriteVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PermissionCheckRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PermissionCheckResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthorizationUserListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthorizationUserListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthRuleDetailByRuleIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthRuleDetailByRuleIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthUserNameRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthUserNameResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RecallRuleAuditRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RecallRuleAuditResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RemoveEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RemoveEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RemoveTemplateRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RemoveTemplateResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SampleFileDownloadRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SampleFileDownloadResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SaveAnalysisColumnRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SaveAnalysisColumnResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SaveByPassOrShuntEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SaveByPassOrShuntEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\StartOrStopByPassShuntEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\StartOrStopByPassShuntEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\StartSimulationTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\StartSimulationTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\StopSimulationTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\StopSimulationTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SubmitImportTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SubmitImportTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchExpressionVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchExpressionVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchFieldRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchFieldResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchQueryVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchQueryVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchToOnlineRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchToOnlineResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\SwitchVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\TaskNameByUserIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\TaskNameByUserIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateAnalysisConditionFavoriteRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateAnalysisConditionFavoriteResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateAuditRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateAuditResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateAuthRuleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateAuthRuleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateByPassShuntEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateByPassShuntEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateDataSourceRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateDataSourceResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateQueryVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateQueryVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateRuleBaseRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateRuleBaseResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateRuleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateSampleBatchRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UpdateSampleBatchResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UploadSampleApiRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UploadSampleApiResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Xtee extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('xtee', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 变量绑定操作
     *  *
     * @param BindVariableRequest $request BindVariableRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return BindVariableResponse BindVariableResponse
     */
    public function bindVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->apiRegionId)) {
            $query['apiRegionId'] = $request->apiRegionId;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['apiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->defineId)) {
            $query['defineId'] = $request->defineId;
        }
        if (!Utils::isUnset($request->defineIds)) {
            $query['defineIds'] = $request->defineIds;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->exceptionValue)) {
            $query['exceptionValue'] = $request->exceptionValue;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->outputField)) {
            $query['outputField'] = $request->outputField;
        }
        if (!Utils::isUnset($request->outputType)) {
            $query['outputType'] = $request->outputType;
        }
        if (!Utils::isUnset($request->params)) {
            $query['params'] = $request->params;
        }
        if (!Utils::isUnset($request->paramsList)) {
            $query['paramsList'] = $request->paramsList;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['sourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 变量绑定操作
     *  *
     * @param BindVariableRequest $request BindVariableRequest
     *
     * @return BindVariableResponse BindVariableResponse
     */
    public function bindVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 校验累计变量数目是否超过限定值
     *  *
     * @param CheckCustVariableLimitRequest $request CheckCustVariableLimitRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCustVariableLimitResponse CheckCustVariableLimitResponse
     */
    public function checkCustVariableLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCustVariableLimit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCustVariableLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验累计变量数目是否超过限定值
     *  *
     * @param CheckCustVariableLimitRequest $request CheckCustVariableLimitRequest
     *
     * @return CheckCustVariableLimitResponse CheckCustVariableLimitResponse
     */
    public function checkCustVariableLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCustVariableLimitWithOptions($request, $runtime);
    }

    /**
     * @summary 校验创建变量是否超过上限
     *  *
     * @param CheckExpressionVariableLimitRequest $request CheckExpressionVariableLimitRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckExpressionVariableLimitResponse CheckExpressionVariableLimitResponse
     */
    public function checkExpressionVariableLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckExpressionVariableLimit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckExpressionVariableLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验创建变量是否超过上限
     *  *
     * @param CheckExpressionVariableLimitRequest $request CheckExpressionVariableLimitRequest
     *
     * @return CheckExpressionVariableLimitResponse CheckExpressionVariableLimitResponse
     */
    public function checkExpressionVariableLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkExpressionVariableLimitWithOptions($request, $runtime);
    }

    /**
     * @summary 校验字段数目是否操过限定值
     *  *
     * @param CheckFieldLimitRequest $request CheckFieldLimitRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckFieldLimitResponse CheckFieldLimitResponse
     */
    public function checkFieldLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckFieldLimit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckFieldLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验字段数目是否操过限定值
     *  *
     * @param CheckFieldLimitRequest $request CheckFieldLimitRequest
     *
     * @return CheckFieldLimitResponse CheckFieldLimitResponse
     */
    public function checkFieldLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFieldLimitWithOptions($request, $runtime);
    }

    /**
     * @summary 运营权限检查
     *  *
     * @param CheckPermissionRequest $request CheckPermissionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckPermissionResponse CheckPermissionResponse
     */
    public function checkPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckPermission',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 运营权限检查
     *  *
     * @param CheckPermissionRequest $request CheckPermissionRequest
     *
     * @return CheckPermissionResponse CheckPermissionResponse
     */
    public function checkPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 校验变量引用
     *  *
     * @param CheckUsageVariableRequest $request CheckUsageVariableRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckUsageVariableResponse CheckUsageVariableResponse
     */
    public function checkUsageVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckUsageVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUsageVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验变量引用
     *  *
     * @param CheckUsageVariableRequest $request CheckUsageVariableRequest
     *
     * @return CheckUsageVariableResponse CheckUsageVariableResponse
     */
    public function checkUsageVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUsageVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 清除名单
     *  *
     * @param ClearNameListRequest $request ClearNameListRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ClearNameListResponse ClearNameListResponse
     */
    public function clearNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->variableId)) {
            $query['variableId'] = $request->variableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearNameList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 清除名单
     *  *
     * @param ClearNameListRequest $request ClearNameListRequest
     *
     * @return ClearNameListResponse ClearNameListResponse
     */
    public function clearNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearNameListWithOptions($request, $runtime);
    }

    /**
     * @summary 新增查询条件
     *  *
     * @param CreateAnalysisConditionFavoriteRequest $request CreateAnalysisConditionFavoriteRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAnalysisConditionFavoriteResponse CreateAnalysisConditionFavoriteResponse
     */
    public function createAnalysisConditionFavoriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->eventBeginTime)) {
            $query['eventBeginTime'] = $request->eventBeginTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->eventEndTime)) {
            $query['eventEndTime'] = $request->eventEndTime;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $query['fieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['fieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAnalysisConditionFavorite',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAnalysisConditionFavoriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增查询条件
     *  *
     * @param CreateAnalysisConditionFavoriteRequest $request CreateAnalysisConditionFavoriteRequest
     *
     * @return CreateAnalysisConditionFavoriteResponse CreateAnalysisConditionFavoriteResponse
     */
    public function createAnalysisConditionFavorite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAnalysisConditionFavoriteWithOptions($request, $runtime);
    }

    /**
     * @summary 新建导出任务
     *  *
     * @param CreateAnalysisExportTaskRequest $request CreateAnalysisExportTaskRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAnalysisExportTaskResponse CreateAnalysisExportTaskResponse
     */
    public function createAnalysisExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->columns)) {
            $query['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->conditions)) {
            $query['conditions'] = $request->conditions;
        }
        if (!Utils::isUnset($request->eventBeginTime)) {
            $query['eventBeginTime'] = $request->eventBeginTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->eventEndTime)) {
            $query['eventEndTime'] = $request->eventEndTime;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $query['fieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['fieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->fileFormat)) {
            $query['fileFormat'] = $request->fileFormat;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAnalysisExportTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAnalysisExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建导出任务
     *  *
     * @param CreateAnalysisExportTaskRequest $request CreateAnalysisExportTaskRequest
     *
     * @return CreateAnalysisExportTaskResponse CreateAnalysisExportTaskResponse
     */
    public function createAnalysisExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAnalysisExportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建appKey
     *  *
     * @param CreateAppKeyRequest $request CreateAppKeyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppKeyResponse CreateAppKeyResponse
     */
    public function createAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppKey',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建appKey
     *  *
     * @param CreateAppKeyRequest $request CreateAppKeyRequest
     *
     * @return CreateAppKeyResponse CreateAppKeyResponse
     */
    public function createAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 新增用户授权
     *  *
     * @param CreateAuthorizationUserRequest $request CreateAuthorizationUserRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAuthorizationUserResponse CreateAuthorizationUserResponse
     */
    public function createAuthorizationUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->bindId)) {
            $query['bindId'] = $request->bindId;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventTemplateId)) {
            $query['eventTemplateId'] = $request->eventTemplateId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthorizationUser',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuthorizationUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增用户授权
     *  *
     * @param CreateAuthorizationUserRequest $request CreateAuthorizationUserRequest
     *
     * @return CreateAuthorizationUserResponse CreateAuthorizationUserResponse
     */
    public function createAuthorizationUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorizationUserWithOptions($request, $runtime);
    }

    /**
     * @summary 创建累计变量
     *  *
     * @param CreateCustVariableRequest $request CreateCustVariableRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustVariableResponse CreateCustVariableResponse
     */
    public function createCustVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->historyValueType)) {
            $query['historyValueType'] = $request->historyValueType;
        }
        if (!Utils::isUnset($request->object)) {
            $query['object'] = $request->object;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->timeType)) {
            $query['timeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        if (!Utils::isUnset($request->twCount)) {
            $query['twCount'] = $request->twCount;
        }
        if (!Utils::isUnset($request->velocityFC)) {
            $query['velocityFC'] = $request->velocityFC;
        }
        if (!Utils::isUnset($request->velocityTW)) {
            $query['velocityTW'] = $request->velocityTW;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建累计变量
     *  *
     * @param CreateCustVariableRequest $request CreateCustVariableRequest
     *
     * @return CreateCustVariableResponse CreateCustVariableResponse
     */
    public function createCustVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 新增数据源
     *  *
     * @param CreateDataSourceRequest $request CreateDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataSourceResponse CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['ossKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataSource',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增数据源
     *  *
     * @param CreateDataSourceRequest $request CreateDataSourceRequest
     *
     * @return CreateDataSourceResponse CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建事件
     *  *
     * @param CreateEventRequest $request CreateEventRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEventResponse CreateEventResponse
     */
    public function createEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['eventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->inputFieldsStr)) {
            $query['inputFieldsStr'] = $request->inputFieldsStr;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['templateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['templateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['templateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建事件
     *  *
     * @param CreateEventRequest $request CreateEventRequest
     *
     * @return CreateEventResponse CreateEventResponse
     */
    public function createEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventWithOptions($request, $runtime);
    }

    /**
     * @summary 创建自定义变量
     *  *
     * @param CreateExpressionVariableRequest $request CreateExpressionVariableRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExpressionVariableResponse CreateExpressionVariableResponse
     */
    public function createExpressionVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->expressionTitle)) {
            $query['expressionTitle'] = $request->expressionTitle;
        }
        if (!Utils::isUnset($request->expressionVariable)) {
            $query['expressionVariable'] = $request->expressionVariable;
        }
        if (!Utils::isUnset($request->outlier)) {
            $query['outlier'] = $request->outlier;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateExpressionVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExpressionVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义变量
     *  *
     * @param CreateExpressionVariableRequest $request CreateExpressionVariableRequest
     *
     * @return CreateExpressionVariableResponse CreateExpressionVariableResponse
     */
    public function createExpressionVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressionVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 新增字段
     *  *
     * @param CreateFieldRequest $request CreateFieldRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFieldResponse CreateFieldResponse
     */
    public function createFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->classify)) {
            $query['classify'] = $request->classify;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enumData)) {
            $query['enumData'] = $request->enumData;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateField',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增字段
     *  *
     * @param CreateFieldRequest $request CreateFieldRequest
     *
     * @return CreateFieldResponse CreateFieldResponse
     */
    public function createField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFieldWithOptions($request, $runtime);
    }

    /**
     * @summary 社群打标
     *  *
     * @param CreateGroupSignRequest $request CreateGroupSignRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupSignResponse CreateGroupSignResponse
     */
    public function createGroupSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->signList)) {
            $query['SignList'] = $request->signList;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupSign',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 社群打标
     *  *
     * @param CreateGroupSignRequest $request CreateGroupSignRequest
     *
     * @return CreateGroupSignResponse CreateGroupSignResponse
     */
    public function createGroupSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupSignWithOptions($request, $runtime);
    }

    /**
     * @summary 创建监控任务
     *  *
     * @param CreateMonitorTaskRequest $request CreateMonitorTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitorTaskResponse CreateMonitorTaskResponse
     */
    public function createMonitorTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['bizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->cycleType)) {
            $query['cycleType'] = $request->cycleType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->listdayStr)) {
            $query['listdayStr'] = $request->listdayStr;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitorTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建监控任务
     *  *
     * @param CreateMonitorTaskRequest $request CreateMonitorTaskRequest
     *
     * @return CreateMonitorTaskResponse CreateMonitorTaskResponse
     */
    public function createMonitorTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建poc
     *  *
     * @param CreatePocRequest $request CreatePocRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePocResponse CreatePocResponse
     */
    public function createPocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->configStr)) {
            $query['configStr'] = $request->configStr;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['fileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['fileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['serviceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['taskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePoc',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建poc
     *  *
     * @param CreatePocRequest $request CreatePocRequest
     *
     * @return CreatePocResponse CreatePocResponse
     */
    public function createPoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPocWithOptions($request, $runtime);
    }

    /**
     * @summary 创建poc
     *  *
     * @param CreatePocEvRequest $request CreatePocEvRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePocEvResponse CreatePocEvResponse
     */
    public function createPocEvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dateFormat)) {
            $query['DateFormat'] = $request->dateFormat;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['RegId'] = $request->regId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->tab)) {
            $query['Tab'] = $request->tab;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePocEv',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePocEvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建poc
     *  *
     * @param CreatePocEvRequest $request CreatePocEvRequest
     *
     * @return CreatePocEvResponse CreatePocEvResponse
     */
    public function createPocEv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPocEvWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义查询变量新增
     *  *
     * @param CreateQueryVariableRequest $request CreateQueryVariableRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQueryVariableResponse CreateQueryVariableResponse
     */
    public function createQueryVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataSourceCode)) {
            $query['dataSourceCode'] = $request->dataSourceCode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->expressionTitle)) {
            $query['expressionTitle'] = $request->expressionTitle;
        }
        if (!Utils::isUnset($request->expressionVariable)) {
            $query['expressionVariable'] = $request->expressionVariable;
        }
        if (!Utils::isUnset($request->outlier)) {
            $query['outlier'] = $request->outlier;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateQueryVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQueryVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义查询变量新增
     *  *
     * @param CreateQueryVariableRequest $request CreateQueryVariableRequest
     *
     * @return CreateQueryVariableResponse CreateQueryVariableResponse
     */
    public function createQueryVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueryVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 创建推荐事件策略
     *  *
     * @param CreateRecommendEventRuleRequest $request CreateRecommendEventRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRecommendEventRuleResponse CreateRecommendEventRuleResponse
     */
    public function createRecommendEventRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['eventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->recommendRuleIdsStr)) {
            $query['recommendRuleIdsStr'] = $request->recommendRuleIdsStr;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRecommendEventRule',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRecommendEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建推荐事件策略
     *  *
     * @param CreateRecommendEventRuleRequest $request CreateRecommendEventRuleRequest
     *
     * @return CreateRecommendEventRuleResponse CreateRecommendEventRuleResponse
     */
    public function createRecommendEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecommendEventRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建推荐任务
     *  *
     * @param CreateRecommendTaskRequest $request CreateRecommendTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRecommendTaskResponse CreateRecommendTaskResponse
     */
    public function createRecommendTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sampleId)) {
            $query['sampleId'] = $request->sampleId;
        }
        if (!Utils::isUnset($request->variablesStr)) {
            $query['variablesStr'] = $request->variablesStr;
        }
        if (!Utils::isUnset($request->velocitiesStr)) {
            $query['velocitiesStr'] = $request->velocitiesStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRecommendTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRecommendTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建推荐任务
     *  *
     * @param CreateRecommendTaskRequest $request CreateRecommendTaskRequest
     *
     * @return CreateRecommendTaskResponse CreateRecommendTaskResponse
     */
    public function createRecommendTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecommendTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 补充上传
     *  *
     * @param CreateReplenishTaskRequest $request CreateReplenishTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateReplenishTaskResponse CreateReplenishTaskResponse
     */
    public function createReplenishTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientFileName)) {
            $query['ClientFileName'] = $request->clientFileName;
        }
        if (!Utils::isUnset($request->clientPath)) {
            $query['ClientPath'] = $request->clientPath;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateReplenishTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReplenishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 补充上传
     *  *
     * @param CreateReplenishTaskRequest $request CreateReplenishTaskRequest
     *
     * @return CreateReplenishTaskResponse CreateReplenishTaskResponse
     */
    public function createReplenishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReplenishTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建策略&版本
     *  *
     * @param CreateRuleRequest $request CreateRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['eventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->logicExpression)) {
            $query['logicExpression'] = $request->logicExpression;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleActions)) {
            $query['ruleActions'] = $request->ruleActions;
        }
        if (!Utils::isUnset($request->ruleExpressions)) {
            $query['ruleExpressions'] = $request->ruleExpressions;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['ruleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRule',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建策略&版本
     *  *
     * @param CreateRuleRequest $request CreateRuleRequest
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 添加样本
     *  *
     * @param CreateSampleRequest $request CreateSampleRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSampleResponse CreateSampleResponse
     */
    public function createSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->clientFileName)) {
            $query['clientFileName'] = $request->clientFileName;
        }
        if (!Utils::isUnset($request->clientPath)) {
            $query['clientPath'] = $request->clientPath;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['fileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sampleTag)) {
            $query['sampleTag'] = $request->sampleTag;
        }
        if (!Utils::isUnset($request->sampleType)) {
            $query['sampleType'] = $request->sampleType;
        }
        if (!Utils::isUnset($request->sampleValues)) {
            $query['sampleValues'] = $request->sampleValues;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $query['uploadType'] = $request->uploadType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSample',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加样本
     *  *
     * @param CreateSampleRequest $request CreateSampleRequest
     *
     * @return CreateSampleResponse CreateSampleResponse
     */
    public function createSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleWithOptions($request, $runtime);
    }

    /**
     * @summary 用户级别单API创建样本批
     *  *
     * @param CreateSampleApiRequest $request CreateSampleApiRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSampleApiResponse CreateSampleApiResponse
     */
    public function createSampleApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->dataValue)) {
            $query['DataValue'] = $request->dataValue;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['RegId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sampleBatchType)) {
            $query['SampleBatchType'] = $request->sampleBatchType;
        }
        if (!Utils::isUnset($request->serviceList)) {
            $query['ServiceList'] = $request->serviceList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSampleApi',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSampleApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用户级别单API创建样本批
     *  *
     * @param CreateSampleApiRequest $request CreateSampleApiRequest
     *
     * @return CreateSampleApiResponse CreateSampleApiResponse
     */
    public function createSampleApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleApiWithOptions($request, $runtime);
    }

    /**
     * @summary 创建样本数据
     *  *
     * @param CreateSampleDataRequest $request CreateSampleDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSampleDataResponse CreateSampleDataResponse
     */
    public function createSampleDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['encryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->riskValue)) {
            $query['riskValue'] = $request->riskValue;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->storePath)) {
            $query['storePath'] = $request->storePath;
        }
        if (!Utils::isUnset($request->storeType)) {
            $query['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSampleData',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建样本数据
     *  *
     * @param CreateSampleDataRequest $request CreateSampleDataRequest
     *
     * @return CreateSampleDataResponse CreateSampleDataResponse
     */
    public function createSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleDataWithOptions($request, $runtime);
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateSimulationTaskRequest $request CreateSimulationTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSimulationTaskResponse CreateSimulationTaskResponse
     */
    public function createSimulationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataSourceConfig)) {
            $query['dataSourceConfig'] = $request->dataSourceConfig;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['dataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->filtersStr)) {
            $query['filtersStr'] = $request->filtersStr;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->rulesStr)) {
            $query['rulesStr'] = $request->rulesStr;
        }
        if (!Utils::isUnset($request->runTask)) {
            $query['runTask'] = $request->runTask;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['taskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSimulationTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSimulationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateSimulationTaskRequest $request CreateSimulationTaskRequest
     *
     * @return CreateSimulationTaskResponse CreateSimulationTaskResponse
     */
    public function createSimulationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimulationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateTaskRequest $request CreateTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientFileName)) {
            $query['ClientFileName'] = $request->clientFileName;
        }
        if (!Utils::isUnset($request->clientPath)) {
            $query['ClientPath'] = $request->clientPath;
        }
        if (!Utils::isUnset($request->describe)) {
            $query['Describe'] = $request->describe;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $query['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateTaskRequest $request CreateTaskRequest
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建模版
     *  *
     * @param CreateTemplateRequest $request CreateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['eventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->logicExpression)) {
            $query['logicExpression'] = $request->logicExpression;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleActions)) {
            $query['ruleActions'] = $request->ruleActions;
        }
        if (!Utils::isUnset($request->ruleExpressions)) {
            $query['ruleExpressions'] = $request->ruleExpressions;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['ruleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建模版
     *  *
     * @param CreateTemplateRequest $request CreateTemplateRequest
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除查询条件
     *  *
     * @param DeleteAnalysisConditionFavoriteRequest $request DeleteAnalysisConditionFavoriteRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAnalysisConditionFavoriteResponse DeleteAnalysisConditionFavoriteResponse
     */
    public function deleteAnalysisConditionFavoriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAnalysisConditionFavorite',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAnalysisConditionFavoriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除查询条件
     *  *
     * @param DeleteAnalysisConditionFavoriteRequest $request DeleteAnalysisConditionFavoriteRequest
     *
     * @return DeleteAnalysisConditionFavoriteResponse DeleteAnalysisConditionFavoriteResponse
     */
    public function deleteAnalysisConditionFavorite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAnalysisConditionFavoriteWithOptions($request, $runtime);
    }

    /**
     * @summary 删除用户授权
     *  *
     * @param DeleteAuthUserRequest $request DeleteAuthUserRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAuthUserResponse DeleteAuthUserResponse
     */
    public function deleteAuthUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthUser',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAuthUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除用户授权
     *  *
     * @param DeleteAuthUserRequest $request DeleteAuthUserRequest
     *
     * @return DeleteAuthUserResponse DeleteAuthUserResponse
     */
    public function deleteAuthUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthUserWithOptions($request, $runtime);
    }

    /**
     * @summary 删除旁路事件
     *  *
     * @param DeleteByPassShuntEventRequest $request DeleteByPassShuntEventRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteByPassShuntEventResponse DeleteByPassShuntEventResponse
     */
    public function deleteByPassShuntEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['eventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteByPassShuntEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteByPassShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除旁路事件
     *  *
     * @param DeleteByPassShuntEventRequest $request DeleteByPassShuntEventRequest
     *
     * @return DeleteByPassShuntEventResponse DeleteByPassShuntEventResponse
     */
    public function deleteByPassShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteByPassShuntEventWithOptions($request, $runtime);
    }

    /**
     * @summary 删除累计变量
     *  *
     * @param DeleteCustVariableRequest $request DeleteCustVariableRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustVariableResponse DeleteCustVariableResponse
     */
    public function deleteCustVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->dataVersion)) {
            $query['dataVersion'] = $request->dataVersion;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->variableId)) {
            $query['variableId'] = $request->variableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除累计变量
     *  *
     * @param DeleteCustVariableRequest $request DeleteCustVariableRequest
     *
     * @return DeleteCustVariableResponse DeleteCustVariableResponse
     */
    public function deleteCustVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 删除数据源
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSource',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据源
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除自定义变量
     *  *
     * @param DeleteExpressionVariableRequest $request DeleteExpressionVariableRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExpressionVariableResponse DeleteExpressionVariableResponse
     */
    public function deleteExpressionVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataVersion)) {
            $query['dataVersion'] = $request->dataVersion;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExpressionVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExpressionVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义变量
     *  *
     * @param DeleteExpressionVariableRequest $request DeleteExpressionVariableRequest
     *
     * @return DeleteExpressionVariableResponse DeleteExpressionVariableResponse
     */
    public function deleteExpressionVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressionVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 删除字段
     *  *
     * @param DeleteFieldRequest $request DeleteFieldRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFieldResponse DeleteFieldResponse
     */
    public function deleteFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteField',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除字段
     *  *
     * @param DeleteFieldRequest $request DeleteFieldRequest
     *
     * @return DeleteFieldResponse DeleteFieldResponse
     */
    public function deleteField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFieldWithOptions($request, $runtime);
    }

    /**
     * @summary 删除名单
     *  *
     * @param DeleteNameListRequest $request DeleteNameListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNameListResponse DeleteNameListResponse
     */
    public function deleteNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNameList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除名单
     *  *
     * @param DeleteNameListRequest $request DeleteNameListRequest
     *
     * @return DeleteNameListResponse DeleteNameListResponse
     */
    public function deleteNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNameListWithOptions($request, $runtime);
    }

    /**
     * @summary 删除(伪)名单变量数据
     *  *
     * @param DeleteNameListDataRequest $request DeleteNameListDataRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNameListDataResponse DeleteNameListDataResponse
     */
    public function deleteNameListDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->variableId)) {
            $query['variableId'] = $request->variableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNameListData',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNameListDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除(伪)名单变量数据
     *  *
     * @param DeleteNameListDataRequest $request DeleteNameListDataRequest
     *
     * @return DeleteNameListDataResponse DeleteNameListDataResponse
     */
    public function deleteNameListData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNameListDataWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量删除
     *  *
     * @param DeleteQueryVariableRequest $request DeleteQueryVariableRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQueryVariableResponse DeleteQueryVariableResponse
     */
    public function deleteQueryVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQueryVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQueryVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量删除
     *  *
     * @param DeleteQueryVariableRequest $request DeleteQueryVariableRequest
     *
     * @return DeleteQueryVariableResponse DeleteQueryVariableResponse
     */
    public function deleteQueryVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQueryVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 删除策略版本
     *  *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleVersionId)) {
            $query['ruleVersionId'] = $request->ruleVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRule',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除策略版本
     *  *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 批量删除样本
     *  *
     * @param DeleteSampleBatchRequest $request DeleteSampleBatchRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSampleBatchResponse DeleteSampleBatchResponse
     */
    public function deleteSampleBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->versions)) {
            $query['versions'] = $request->versions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSampleBatch',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSampleBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除样本
     *  *
     * @param DeleteSampleBatchRequest $request DeleteSampleBatchRequest
     *
     * @return DeleteSampleBatchResponse DeleteSampleBatchResponse
     */
    public function deleteSampleBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSampleBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 删除样本数据
     *  *
     * @param DeleteSampleDataRequest $request DeleteSampleDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSampleDataResponse DeleteSampleDataResponse
     */
    public function deleteSampleDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSampleData',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除样本数据
     *  *
     * @param DeleteSampleDataRequest $request DeleteSampleDataRequest
     *
     * @return DeleteSampleDataResponse DeleteSampleDataResponse
     */
    public function deleteSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSampleDataWithOptions($request, $runtime);
    }

    /**
     * @summary 删除社群任务
     *  *
     * @param DeleteTaskRequest $request DeleteTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTaskResponse DeleteTaskResponse
     */
    public function deleteTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除社群任务
     *  *
     * @param DeleteTaskRequest $request DeleteTaskRequest
     *
     * @return DeleteTaskResponse DeleteTaskResponse
     */
    public function deleteTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 高级查询获取左变量接口
     *  *
     * @param DescribeAdvanceSearchLeftVariableListRequest $request DescribeAdvanceSearchLeftVariableListRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAdvanceSearchLeftVariableListResponse DescribeAdvanceSearchLeftVariableListResponse
     */
    public function describeAdvanceSearchLeftVariableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdvanceSearchLeftVariableList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdvanceSearchLeftVariableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 高级查询获取左变量接口
     *  *
     * @param DescribeAdvanceSearchLeftVariableListRequest $request DescribeAdvanceSearchLeftVariableListRequest
     *
     * @return DescribeAdvanceSearchLeftVariableListResponse DescribeAdvanceSearchLeftVariableListResponse
     */
    public function describeAdvanceSearchLeftVariableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvanceSearchLeftVariableListWithOptions($request, $runtime);
    }

    /**
     * @summary 高级查询
     *  *
     * @param DescribeAdvanceSearchPageListRequest $request DescribeAdvanceSearchPageListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAdvanceSearchPageListResponse DescribeAdvanceSearchPageListResponse
     */
    public function describeAdvanceSearchPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventBeginTime)) {
            $query['eventBeginTime'] = $request->eventBeginTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->eventEndTime)) {
            $query['eventEndTime'] = $request->eventEndTime;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $query['fieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['fieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdvanceSearchPageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdvanceSearchPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 高级查询
     *  *
     * @param DescribeAdvanceSearchPageListRequest $request DescribeAdvanceSearchPageListRequest
     *
     * @return DescribeAdvanceSearchPageListResponse DescribeAdvanceSearchPageListResponse
     */
    public function describeAdvanceSearchPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvanceSearchPageListWithOptions($request, $runtime);
    }

    /**
     * @summary 数据源列表
     *  *
     * @param DescribeAllDataSourceRequest $request DescribeAllDataSourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllDataSourceResponse DescribeAllDataSourceResponse
     */
    public function describeAllDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllDataSource',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 数据源列表
     *  *
     * @param DescribeAllDataSourceRequest $request DescribeAllDataSourceRequest
     *
     * @return DescribeAllDataSourceResponse DescribeAllDataSourceResponse
     */
    public function describeAllDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 事件列表查询
     *  *
     * @param DescribeAllEventNameAndCodeRequest $request DescribeAllEventNameAndCodeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllEventNameAndCodeResponse DescribeAllEventNameAndCodeResponse
     */
    public function describeAllEventNameAndCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllEventNameAndCode',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllEventNameAndCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 事件列表查询
     *  *
     * @param DescribeAllEventNameAndCodeRequest $request DescribeAllEventNameAndCodeRequest
     *
     * @return DescribeAllEventNameAndCodeResponse DescribeAllEventNameAndCodeResponse
     */
    public function describeAllEventNameAndCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllEventNameAndCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义表达式测试时，展示所有的根变量
     *  *
     * @param DescribeAllRootVariableRequest $request DescribeAllRootVariableRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllRootVariableResponse DescribeAllRootVariableResponse
     */
    public function describeAllRootVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->deviceVariableIds)) {
            $query['deviceVariableIds'] = $request->deviceVariableIds;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->expressionVariableIds)) {
            $query['expressionVariableIds'] = $request->expressionVariableIds;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->nativeVariableIds)) {
            $query['nativeVariableIds'] = $request->nativeVariableIds;
        }
        if (!Utils::isUnset($request->queryVariableIds)) {
            $query['queryVariableIds'] = $request->queryVariableIds;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->velocityVariableIds)) {
            $query['velocityVariableIds'] = $request->velocityVariableIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllRootVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllRootVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义表达式测试时，展示所有的根变量
     *  *
     * @param DescribeAllRootVariableRequest $request DescribeAllRootVariableRequest
     *
     * @return DescribeAllRootVariableResponse DescribeAllRootVariableResponse
     */
    public function describeAllRootVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllRootVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 展示所有字段
     *  *
     * @param DescribeAnalysisColumnFieldListRequest $request DescribeAnalysisColumnFieldListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnalysisColumnFieldListResponse DescribeAnalysisColumnFieldListResponse
     */
    public function describeAnalysisColumnFieldListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnalysisColumnFieldList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnalysisColumnFieldListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示所有字段
     *  *
     * @param DescribeAnalysisColumnFieldListRequest $request DescribeAnalysisColumnFieldListRequest
     *
     * @return DescribeAnalysisColumnFieldListResponse DescribeAnalysisColumnFieldListResponse
     */
    public function describeAnalysisColumnFieldList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisColumnFieldListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询自定义列
     *  *
     * @param DescribeAnalysisColumnListRequest $request DescribeAnalysisColumnListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnalysisColumnListResponse DescribeAnalysisColumnListResponse
     */
    public function describeAnalysisColumnListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnalysisColumnList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnalysisColumnListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询自定义列
     *  *
     * @param DescribeAnalysisColumnListRequest $request DescribeAnalysisColumnListRequest
     *
     * @return DescribeAnalysisColumnListResponse DescribeAnalysisColumnListResponse
     */
    public function describeAnalysisColumnList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisColumnListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询条件列表
     *  *
     * @param DescribeAnalysisConditionFavoriteListRequest $request DescribeAnalysisConditionFavoriteListRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnalysisConditionFavoriteListResponse DescribeAnalysisConditionFavoriteListResponse
     */
    public function describeAnalysisConditionFavoriteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnalysisConditionFavoriteList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnalysisConditionFavoriteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询条件列表
     *  *
     * @param DescribeAnalysisConditionFavoriteListRequest $request DescribeAnalysisConditionFavoriteListRequest
     *
     * @return DescribeAnalysisConditionFavoriteListResponse DescribeAnalysisConditionFavoriteListResponse
     */
    public function describeAnalysisConditionFavoriteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisConditionFavoriteListWithOptions($request, $runtime);
    }

    /**
     * @summary 下载查询结果
     *  *
     * @param DescribeAnalysisExportTaskDownloadUrlRequest $request DescribeAnalysisExportTaskDownloadUrlRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnalysisExportTaskDownloadUrlResponse DescribeAnalysisExportTaskDownloadUrlResponse
     */
    public function describeAnalysisExportTaskDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnalysisExportTaskDownloadUrl',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnalysisExportTaskDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下载查询结果
     *  *
     * @param DescribeAnalysisExportTaskDownloadUrlRequest $request DescribeAnalysisExportTaskDownloadUrlRequest
     *
     * @return DescribeAnalysisExportTaskDownloadUrlResponse DescribeAnalysisExportTaskDownloadUrlResponse
     */
    public function describeAnalysisExportTaskDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisExportTaskDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 得到api详情
     *  *
     * @param DescribeApiRequest $request DescribeApiRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiResponse DescribeApiResponse
     */
    public function describeApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['apiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiRegionId)) {
            $query['apiRegionId'] = $request->apiRegionId;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['apiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApi',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 得到api详情
     *  *
     * @param DescribeApiRequest $request DescribeApiRequest
     *
     * @return DescribeApiResponse DescribeApiResponse
     */
    public function describeApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiWithOptions($request, $runtime);
    }

    /**
     * @summary 得到api分组包括用户购买的以及自定义的
     *  *
     * @param DescribeApiGroupsRequest $request DescribeApiGroupsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiGroupsResponse DescribeApiGroupsResponse
     */
    public function describeApiGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->apiRegionId)) {
            $query['apiRegionId'] = $request->apiRegionId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroups',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 得到api分组包括用户购买的以及自定义的
     *  *
     * @param DescribeApiGroupsRequest $request DescribeApiGroupsRequest
     *
     * @return DescribeApiGroupsResponse DescribeApiGroupsResponse
     */
    public function describeApiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询创建api任务的limit信息
     *  *
     * @param DescribeApiLimitRequest $request DescribeApiLimitRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiLimitResponse DescribeApiLimitResponse
     */
    public function describeApiLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiLimit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询创建api任务的limit信息
     *  *
     * @param DescribeApiLimitRequest $request DescribeApiLimitRequest
     *
     * @return DescribeApiLimitResponse DescribeApiLimitResponse
     */
    public function describeApiLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiLimitWithOptions($request, $runtime);
    }

    /**
     * @summary 获取api服务名称
     *  *
     * @param DescribeApiNameListRequest $request DescribeApiNameListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiNameListResponse DescribeApiNameListResponse
     */
    public function describeApiNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiNameList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取api服务名称
     *  *
     * @param DescribeApiNameListRequest $request DescribeApiNameListRequest
     *
     * @return DescribeApiNameListResponse DescribeApiNameListResponse
     */
    public function describeApiNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiNameListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量详情
     *  *
     * @param DescribeApiVariableRequest $request DescribeApiVariableRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiVariableResponse DescribeApiVariableResponse
     */
    public function describeApiVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量详情
     *  *
     * @param DescribeApiVariableRequest $request DescribeApiVariableRequest
     *
     * @return DescribeApiVariableResponse DescribeApiVariableResponse
     */
    public function describeApiVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 得到api列表包括用户购买的以及自定义的
     *  *
     * @param DescribeApisRequest $request DescribeApisRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisResponse DescribeApisResponse
     */
    public function describeApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->apiGroupId)) {
            $query['apiGroupId'] = $request->apiGroupId;
        }
        if (!Utils::isUnset($request->apiRegionId)) {
            $query['apiRegionId'] = $request->apiRegionId;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['apiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApis',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 得到api列表包括用户购买的以及自定义的
     *  *
     * @param DescribeApisRequest $request DescribeApisRequest
     *
     * @return DescribeApisResponse DescribeApisResponse
     */
    public function describeApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisWithOptions($request, $runtime);
    }

    /**
     * @summary 查询appKey列表
     *  *
     * @param DescribeAppKeyPageRequest $request DescribeAppKeyPageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppKeyPageResponse DescribeAppKeyPageResponse
     */
    public function describeAppKeyPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppKeyPage',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppKeyPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询appKey列表
     *  *
     * @param DescribeAppKeyPageRequest $request DescribeAppKeyPageRequest
     *
     * @return DescribeAppKeyPageResponse DescribeAppKeyPageResponse
     */
    public function describeAppKeyPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppKeyPageWithOptions($request, $runtime);
    }

    /**
     * @summary 审批开关
     *  *
     * @param DescribeAuditConfigRequest $request DescribeAuditConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditConfigResponse DescribeAuditConfigResponse
     */
    public function describeAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->auditRelationType)) {
            $query['auditRelationType'] = $request->auditRelationType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuditConfig',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 审批开关
     *  *
     * @param DescribeAuditConfigRequest $request DescribeAuditConfigRequest
     *
     * @return DescribeAuditConfigResponse DescribeAuditConfigResponse
     */
    public function describeAuditConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 审批详情
     *  *
     * @param DescribeAuditDetailsRequest $request DescribeAuditDetailsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditDetailsResponse DescribeAuditDetailsResponse
     */
    public function describeAuditDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuditDetails',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 审批详情
     *  *
     * @param DescribeAuditDetailsRequest $request DescribeAuditDetailsRequest
     *
     * @return DescribeAuditDetailsResponse DescribeAuditDetailsResponse
     */
    public function describeAuditDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary 审核列表展示、查询
     *  *
     * @param DescribeAuditPageListRequest $request DescribeAuditPageListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditPageListResponse DescribeAuditPageListResponse
     */
    public function describeAuditPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->auditStatus)) {
            $query['auditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuditPageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 审核列表展示、查询
     *  *
     * @param DescribeAuditPageListRequest $request DescribeAuditPageListRequest
     *
     * @return DescribeAuditPageListResponse DescribeAuditPageListResponse
     */
    public function describeAuditPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditPageListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询当前用户的事件名列表
     *  *
     * @param DescribeAuthEventNameListRequest $request DescribeAuthEventNameListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuthEventNameListResponse DescribeAuthEventNameListResponse
     */
    public function describeAuthEventNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuthEventNameList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuthEventNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询当前用户的事件名列表
     *  *
     * @param DescribeAuthEventNameListRequest $request DescribeAuthEventNameListRequest
     *
     * @return DescribeAuthEventNameListResponse DescribeAuthEventNameListResponse
     */
    public function describeAuthEventNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthEventNameListWithOptions($request, $runtime);
    }

    /**
     * @summary 策略列表
     *  *
     * @param DescribeAuthRulePageListRequest $request DescribeAuthRulePageListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuthRulePageListResponse DescribeAuthRulePageListResponse
     */
    public function describeAuthRulePageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuthRulePageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuthRulePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 策略列表
     *  *
     * @param DescribeAuthRulePageListRequest $request DescribeAuthRulePageListRequest
     *
     * @return DescribeAuthRulePageListResponse DescribeAuthRulePageListResponse
     */
    public function describeAuthRulePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthRulePageListWithOptions($request, $runtime);
    }

    /**
     * @summary 场景列表
     *  *
     * @param DescribeAuthSceneListRequest $request DescribeAuthSceneListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuthSceneListResponse DescribeAuthSceneListResponse
     */
    public function describeAuthSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuthSceneList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuthSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 场景列表
     *  *
     * @param DescribeAuthSceneListRequest $request DescribeAuthSceneListRequest
     *
     * @return DescribeAuthSceneListResponse DescribeAuthSceneListResponse
     */
    public function describeAuthSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthSceneListWithOptions($request, $runtime);
    }

    /**
     * @summary 场景列表
     *  *
     * @param DescribeAuthScenePageListRequest $request DescribeAuthScenePageListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuthScenePageListResponse DescribeAuthScenePageListResponse
     */
    public function describeAuthScenePageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $query['sceneName'] = $request->sceneName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuthScenePageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuthScenePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 场景列表
     *  *
     * @param DescribeAuthScenePageListRequest $request DescribeAuthScenePageListRequest
     *
     * @return DescribeAuthScenePageListResponse DescribeAuthScenePageListResponse
     */
    public function describeAuthScenePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthScenePageListWithOptions($request, $runtime);
    }

    /**
     * @summary 查看是否授权
     *  *
     * @param DescribeAuthStatusRequest $request DescribeAuthStatusRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuthStatusResponse DescribeAuthStatusResponse
     */
    public function describeAuthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuthStatus',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看是否授权
     *  *
     * @param DescribeAuthStatusRequest $request DescribeAuthStatusRequest
     *
     * @return DescribeAuthStatusResponse DescribeAuthStatusResponse
     */
    public function describeAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 平均执行耗时
     *  *
     * @param DescribeAvgExecuteCostReportRequest $request DescribeAvgExecuteCostReportRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvgExecuteCostReportResponse DescribeAvgExecuteCostReportResponse
     */
    public function describeAvgExecuteCostReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvgExecuteCostReport',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvgExecuteCostReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 平均执行耗时
     *  *
     * @param DescribeAvgExecuteCostReportRequest $request DescribeAvgExecuteCostReportRequest
     *
     * @return DescribeAvgExecuteCostReportResponse DescribeAvgExecuteCostReportResponse
     */
    public function describeAvgExecuteCostReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvgExecuteCostReportWithOptions($request, $runtime);
    }

    /**
     * @summary 基础查询
     *  *
     * @param DescribeBasicSearchPageListRequest $request DescribeBasicSearchPageListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBasicSearchPageListResponse DescribeBasicSearchPageListResponse
     */
    public function describeBasicSearchPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventBeginTime)) {
            $query['eventBeginTime'] = $request->eventBeginTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->eventEndTime)) {
            $query['eventEndTime'] = $request->eventEndTime;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $query['fieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['fieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBasicSearchPageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBasicSearchPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 基础查询
     *  *
     * @param DescribeBasicSearchPageListRequest $request DescribeBasicSearchPageListRequest
     *
     * @return DescribeBasicSearchPageListResponse DescribeBasicSearchPageListResponse
     */
    public function describeBasicSearchPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBasicSearchPageListWithOptions($request, $runtime);
    }

    /**
     * @summary 基础统计
     *  *
     * @param DescribeBasicStartRequest $request DescribeBasicStartRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBasicStartResponse DescribeBasicStartResponse
     */
    public function describeBasicStartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['appKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->endDs)) {
            $query['endDs'] = $request->endDs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->service)) {
            $query['service'] = $request->service;
        }
        if (!Utils::isUnset($request->startDs)) {
            $query['startDs'] = $request->startDs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBasicStart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBasicStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 基础统计
     *  *
     * @param DescribeBasicStartRequest $request DescribeBasicStartRequest
     *
     * @return DescribeBasicStartResponse DescribeBasicStartResponse
     */
    public function describeBasicStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBasicStartWithOptions($request, $runtime);
    }

    /**
     * @summary 查看旁路事件
     *  *
     * @param DescribeByPassShuntEventRequest $request DescribeByPassShuntEventRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeByPassShuntEventResponse DescribeByPassShuntEventResponse
     */
    public function describeByPassShuntEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['eventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeByPassShuntEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeByPassShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看旁路事件
     *  *
     * @param DescribeByPassShuntEventRequest $request DescribeByPassShuntEventRequest
     *
     * @return DescribeByPassShuntEventResponse DescribeByPassShuntEventResponse
     */
    public function describeByPassShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeByPassShuntEventWithOptions($request, $runtime);
    }

    /**
     * @summary 查询自定义累计变量的类型配置
     *  *
     * @param DescribeCustVariableConfigListRequest $request DescribeCustVariableConfigListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustVariableConfigListResponse DescribeCustVariableConfigListResponse
     */
    public function describeCustVariableConfigListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['bizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->timeType)) {
            $query['timeType'] = $request->timeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustVariableConfigList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustVariableConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询自定义累计变量的类型配置
     *  *
     * @param DescribeCustVariableConfigListRequest $request DescribeCustVariableConfigListRequest
     *
     * @return DescribeCustVariableConfigListResponse DescribeCustVariableConfigListResponse
     */
    public function describeCustVariableConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustVariableConfigListWithOptions($request, $runtime);
    }

    /**
     * @summary 累计变量详情
     *  *
     * @param DescribeCustVariableDetailRequest $request DescribeCustVariableDetailRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustVariableDetailResponse DescribeCustVariableDetailResponse
     */
    public function describeCustVariableDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustVariableDetail',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustVariableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 累计变量详情
     *  *
     * @param DescribeCustVariableDetailRequest $request DescribeCustVariableDetailRequest
     *
     * @return DescribeCustVariableDetailResponse DescribeCustVariableDetailResponse
     */
    public function describeCustVariableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustVariableDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询自定义累计变量列表
     *  *
     * @param DescribeCustVariablePageRequest $request DescribeCustVariablePageRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustVariablePageResponse DescribeCustVariablePageResponse
     */
    public function describeCustVariablePageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustVariablePage',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustVariablePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询自定义累计变量列表
     *  *
     * @param DescribeCustVariablePageRequest $request DescribeCustVariablePageRequest
     *
     * @return DescribeCustVariablePageResponse DescribeCustVariablePageResponse
     */
    public function describeCustVariablePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustVariablePageWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据源数据下载链接
     *  *
     * @param DescribeDataSourceDataDownloadUrlRequest $request DescribeDataSourceDataDownloadUrlRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataSourceDataDownloadUrlResponse DescribeDataSourceDataDownloadUrlResponse
     */
    public function describeDataSourceDataDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataSourceDataDownloadUrl',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSourceDataDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据源数据下载链接
     *  *
     * @param DescribeDataSourceDataDownloadUrlRequest $request DescribeDataSourceDataDownloadUrlRequest
     *
     * @return DescribeDataSourceDataDownloadUrlResponse DescribeDataSourceDataDownloadUrlResponse
     */
    public function describeDataSourceDataDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceDataDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据源所有字段
     *  *
     * @param DescribeDataSourceFieldsRequest $request DescribeDataSourceFieldsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataSourceFieldsResponse DescribeDataSourceFieldsResponse
     */
    public function describeDataSourceFieldsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataSourceCode)) {
            $query['dataSourceCode'] = $request->dataSourceCode;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataSourceFields',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSourceFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据源所有字段
     *  *
     * @param DescribeDataSourceFieldsRequest $request DescribeDataSourceFieldsRequest
     *
     * @return DescribeDataSourceFieldsResponse DescribeDataSourceFieldsResponse
     */
    public function describeDataSourceFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceFieldsWithOptions($request, $runtime);
    }

    /**
     * @summary 数据源列表接口
     *  *
     * @param DescribeDataSourcePageListRequest $request DescribeDataSourcePageListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataSourcePageListResponse DescribeDataSourcePageListResponse
     */
    public function describeDataSourcePageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataSourcePageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSourcePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 数据源列表接口
     *  *
     * @param DescribeDataSourcePageListRequest $request DescribeDataSourcePageListRequest
     *
     * @return DescribeDataSourcePageListResponse DescribeDataSourcePageListResponse
     */
    public function describeDataSourcePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourcePageListWithOptions($request, $runtime);
    }

    /**
     * @summary 决策结果波动检测
     *  *
     * @param DescribeDecisionResultFluctuationRequest $request DescribeDecisionResultFluctuationRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDecisionResultFluctuationResponse DescribeDecisionResultFluctuationResponse
     */
    public function describeDecisionResultFluctuationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDecisionResultFluctuation',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDecisionResultFluctuationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 决策结果波动检测
     *  *
     * @param DescribeDecisionResultFluctuationRequest $request DescribeDecisionResultFluctuationRequest
     *
     * @return DescribeDecisionResultFluctuationResponse DescribeDecisionResultFluctuationResponse
     */
    public function describeDecisionResultFluctuation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDecisionResultFluctuationWithOptions($request, $runtime);
    }

    /**
     * @summary 决策结果波动趋势
     *  *
     * @param DescribeDecisionResultTrendRequest $request DescribeDecisionResultTrendRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDecisionResultTrendResponse DescribeDecisionResultTrendResponse
     */
    public function describeDecisionResultTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDecisionResultTrend',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDecisionResultTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 决策结果波动趋势
     *  *
     * @param DescribeDecisionResultTrendRequest $request DescribeDecisionResultTrendRequest
     *
     * @return DescribeDecisionResultTrendResponse DescribeDecisionResultTrendResponse
     */
    public function describeDecisionResultTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDecisionResultTrendWithOptions($request, $runtime);
    }

    /**
     * @summary 详细统计
     *  *
     * @param DescribeDetailStartRequest $request DescribeDetailStartRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDetailStartResponse DescribeDetailStartResponse
     */
    public function describeDetailStartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['appKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->endDs)) {
            $query['endDs'] = $request->endDs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->service)) {
            $query['service'] = $request->service;
        }
        if (!Utils::isUnset($request->startDs)) {
            $query['startDs'] = $request->startDs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDetailStart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDetailStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 详细统计
     *  *
     * @param DescribeDetailStartRequest $request DescribeDetailStartRequest
     *
     * @return DescribeDetailStartResponse DescribeDetailStartResponse
     */
    public function describeDetailStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDetailStartWithOptions($request, $runtime);
    }

    /**
     * @summary 下载
     *  *
     * @param DescribeDownloadUrlRequest $request DescribeDownloadUrlRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadUrlResponse DescribeDownloadUrlResponse
     */
    public function describeDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['RegId'] = $request->regId;
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
            'action'      => 'DescribeDownloadUrl',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下载
     *  *
     * @param DescribeDownloadUrlRequest $request DescribeDownloadUrlRequest
     *
     * @return DescribeDownloadUrlResponse DescribeDownloadUrlResponse
     */
    public function describeDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件详情
     *  *
     * @param DescribeEventBaseInfoByEventCodeRequest $request DescribeEventBaseInfoByEventCodeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventBaseInfoByEventCodeResponse DescribeEventBaseInfoByEventCodeResponse
     */
    public function describeEventBaseInfoByEventCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventBaseInfoByEventCode',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventBaseInfoByEventCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件详情
     *  *
     * @param DescribeEventBaseInfoByEventCodeRequest $request DescribeEventBaseInfoByEventCodeRequest
     *
     * @return DescribeEventBaseInfoByEventCodeResponse DescribeEventBaseInfoByEventCodeResponse
     */
    public function describeEventBaseInfoByEventCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventBaseInfoByEventCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件总数量
     *  *
     * @param DescribeEventCountRequest $request DescribeEventCountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventCountResponse DescribeEventCountResponse
     */
    public function describeEventCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventCount',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件总数量
     *  *
     * @param DescribeEventCountRequest $request DescribeEventCountRequest
     *
     * @return DescribeEventCountResponse DescribeEventCountResponse
     */
    public function describeEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventCountWithOptions($request, $runtime);
    }

    /**
     * @summary 根据requestId查询事件详情
     *  *
     * @param DescribeEventDetailByRequestIdRequest $request DescribeEventDetailByRequestIdRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventDetailByRequestIdResponse DescribeEventDetailByRequestIdResponse
     */
    public function describeEventDetailByRequestIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->eventTime)) {
            $query['eventTime'] = $request->eventTime;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sRequestId)) {
            $query['sRequestId'] = $request->sRequestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventDetailByRequestId',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventDetailByRequestIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据requestId查询事件详情
     *  *
     * @param DescribeEventDetailByRequestIdRequest $request DescribeEventDetailByRequestIdRequest
     *
     * @return DescribeEventDetailByRequestIdResponse DescribeEventDetailByRequestIdResponse
     */
    public function describeEventDetailByRequestId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventDetailByRequestIdWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件历史详情
     *  *
     * @param DescribeEventLogDetailRequest $request DescribeEventLogDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventLogDetailResponse DescribeEventLogDetailResponse
     */
    public function describeEventLogDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->reqIdByLog)) {
            $query['reqIdByLog'] = $request->reqIdByLog;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventLogDetail',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventLogDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件历史详情
     *  *
     * @param DescribeEventLogDetailRequest $request DescribeEventLogDetailRequest
     *
     * @return DescribeEventLogDetailResponse DescribeEventLogDetailResponse
     */
    public function describeEventLogDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventLogDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件历史列表
     *  *
     * @param DescribeEventLogPageRequest $request DescribeEventLogPageRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventLogPageResponse DescribeEventLogPageResponse
     */
    public function describeEventLogPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->accountIdPRP)) {
            $query['accountIdPRP'] = $request->accountIdPRP;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->condition1AL)) {
            $query['condition1AL'] = $request->condition1AL;
        }
        if (!Utils::isUnset($request->condition2AL)) {
            $query['condition2AL'] = $request->condition2AL;
        }
        if (!Utils::isUnset($request->condition3AL)) {
            $query['condition3AL'] = $request->condition3AL;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceTypeLRP)) {
            $query['deviceTypeLRP'] = $request->deviceTypeLRP;
        }
        if (!Utils::isUnset($request->emailPRP)) {
            $query['emailPRP'] = $request->emailPRP;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->failReasonLRP)) {
            $query['failReasonLRP'] = $request->failReasonLRP;
        }
        if (!Utils::isUnset($request->ipPRP)) {
            $query['ipPRP'] = $request->ipPRP;
        }
        if (!Utils::isUnset($request->loginResultARP)) {
            $query['loginResultARP'] = $request->loginResultARP;
        }
        if (!Utils::isUnset($request->loginTypeLRP)) {
            $query['loginTypeLRP'] = $request->loginTypeLRP;
        }
        if (!Utils::isUnset($request->macPRP)) {
            $query['macPRP'] = $request->macPRP;
        }
        if (!Utils::isUnset($request->mobilePRP)) {
            $query['mobilePRP'] = $request->mobilePRP;
        }
        if (!Utils::isUnset($request->nickNamePRP)) {
            $query['nickNamePRP'] = $request->nickNamePRP;
        }
        if (!Utils::isUnset($request->operateSourceLRP)) {
            $query['operateSourceLRP'] = $request->operateSourceLRP;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->referPRP)) {
            $query['referPRP'] = $request->referPRP;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->registerIpPRP)) {
            $query['registerIpPRP'] = $request->registerIpPRP;
        }
        if (!Utils::isUnset($request->reqIdPBS)) {
            $query['reqIdPBS'] = $request->reqIdPBS;
        }
        if (!Utils::isUnset($request->scoreEBS)) {
            $query['scoreEBS'] = $request->scoreEBS;
        }
        if (!Utils::isUnset($request->scoreSBS)) {
            $query['scoreSBS'] = $request->scoreSBS;
        }
        if (!Utils::isUnset($request->serviceABS)) {
            $query['serviceABS'] = $request->serviceABS;
        }
        if (!Utils::isUnset($request->tagsLBS)) {
            $query['tagsLBS'] = $request->tagsLBS;
        }
        if (!Utils::isUnset($request->umidPDI)) {
            $query['umidPDI'] = $request->umidPDI;
        }
        if (!Utils::isUnset($request->userAgentPRP)) {
            $query['userAgentPRP'] = $request->userAgentPRP;
        }
        if (!Utils::isUnset($request->userNameTypeLRP)) {
            $query['userNameTypeLRP'] = $request->userNameTypeLRP;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventLogPage',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventLogPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件历史列表
     *  *
     * @param DescribeEventLogPageRequest $request DescribeEventLogPageRequest
     *
     * @return DescribeEventLogPageResponse DescribeEventLogPageResponse
     */
    public function describeEventLogPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventLogPageWithOptions($request, $runtime);
    }

    /**
     * @summary 事件分页查询
     *  *
     * @param DescribeEventPageListRequest $request DescribeEventPageListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventPageListResponse DescribeEventPageListResponse
     */
    public function describeEventPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['eventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventStatus)) {
            $query['eventStatus'] = $request->eventStatus;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventPageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 事件分页查询
     *  *
     * @param DescribeEventPageListRequest $request DescribeEventPageListRequest
     *
     * @return DescribeEventPageListResponse DescribeEventPageListResponse
     */
    public function describeEventPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventPageListWithOptions($request, $runtime);
    }

    /**
     * @summary 风险大盘
     *  *
     * @param DescribeEventResultBarChartRequest $request DescribeEventResultBarChartRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventResultBarChartResponse DescribeEventResultBarChartResponse
     */
    public function describeEventResultBarChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventResultBarChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventResultBarChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 风险大盘
     *  *
     * @param DescribeEventResultBarChartRequest $request DescribeEventResultBarChartRequest
     *
     * @return DescribeEventResultBarChartResponse DescribeEventResultBarChartResponse
     */
    public function describeEventResultBarChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventResultBarChartWithOptions($request, $runtime);
    }

    /**
     * @summary 事件概览列表
     *  *
     * @param DescribeEventResultListRequest $request DescribeEventResultListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventResultListResponse DescribeEventResultListResponse
     */
    public function describeEventResultListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventResultList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventResultListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 事件概览列表
     *  *
     * @param DescribeEventResultListRequest $request DescribeEventResultListRequest
     *
     * @return DescribeEventResultListResponse DescribeEventResultListResponse
     */
    public function describeEventResultList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventResultListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询策略下载列表
     *  *
     * @param DescribeEventTaskHistoryRequest $request DescribeEventTaskHistoryRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventTaskHistoryResponse DescribeEventTaskHistoryResponse
     */
    public function describeEventTaskHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventTaskHistory',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventTaskHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询策略下载列表
     *  *
     * @param DescribeEventTaskHistoryRequest $request DescribeEventTaskHistoryRequest
     *
     * @return DescribeEventTaskHistoryResponse DescribeEventTaskHistoryResponse
     */
    public function describeEventTaskHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTaskHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary 调用事件次数
     *  *
     * @param DescribeEventTotalCountReportRequest $request DescribeEventTotalCountReportRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventTotalCountReportResponse DescribeEventTotalCountReportResponse
     */
    public function describeEventTotalCountReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventTotalCountReport',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventTotalCountReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 调用事件次数
     *  *
     * @param DescribeEventTotalCountReportRequest $request DescribeEventTotalCountReportRequest
     *
     * @return DescribeEventTotalCountReportResponse DescribeEventTotalCountReportResponse
     */
    public function describeEventTotalCountReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTotalCountReportWithOptions($request, $runtime);
    }

    /**
     * @summary 批量导入策略
     *  *
     * @param DescribeEventUploadPolicyRequest $request DescribeEventUploadPolicyRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventUploadPolicyResponse DescribeEventUploadPolicyResponse
     */
    public function describeEventUploadPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventUploadPolicy',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量导入策略
     *  *
     * @param DescribeEventUploadPolicyRequest $request DescribeEventUploadPolicyRequest
     *
     * @return DescribeEventUploadPolicyResponse DescribeEventUploadPolicyResponse
     */
    public function describeEventUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件变量
     *  *
     * @param DescribeEventVariableListRequest $request DescribeEventVariableListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventVariableListResponse DescribeEventVariableListResponse
     */
    public function describeEventVariableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->filterDTO)) {
            $query['filterDTO'] = $request->filterDTO;
        }
        if (!Utils::isUnset($request->refObjId)) {
            $query['refObjId'] = $request->refObjId;
        }
        if (!Utils::isUnset($request->refObjType)) {
            $query['refObjType'] = $request->refObjType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventVariableList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventVariableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件变量
     *  *
     * @param DescribeEventVariableListRequest $request DescribeEventVariableListRequest
     *
     * @return DescribeEventVariableListResponse DescribeEventVariableListResponse
     */
    public function describeEventVariableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventVariableListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件模版
     *  *
     * @param DescribeEventVariableTemplateBindRequest $request DescribeEventVariableTemplateBindRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventVariableTemplateBindResponse DescribeEventVariableTemplateBindResponse
     */
    public function describeEventVariableTemplateBindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->inputs)) {
            $query['inputs'] = $request->inputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['templateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventVariableTemplateBind',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventVariableTemplateBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件模版
     *  *
     * @param DescribeEventVariableTemplateBindRequest $request DescribeEventVariableTemplateBindRequest
     *
     * @return DescribeEventVariableTemplateBindResponse DescribeEventVariableTemplateBindResponse
     */
    public function describeEventVariableTemplateBind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventVariableTemplateBindWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件模版
     *  *
     * @param DescribeEventVariableTemplateListRequest $request DescribeEventVariableTemplateListRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventVariableTemplateListResponse DescribeEventVariableTemplateListResponse
     */
    public function describeEventVariableTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->inputs)) {
            $query['inputs'] = $request->inputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['templateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventVariableTemplateList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventVariableTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件模版
     *  *
     * @param DescribeEventVariableTemplateListRequest $request DescribeEventVariableTemplateListRequest
     *
     * @return DescribeEventVariableTemplateListResponse DescribeEventVariableTemplateListResponse
     */
    public function describeEventVariableTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventVariableTemplateListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件变量
     *  *
     * @param DescribeEventsVariableListRequest $request DescribeEventsVariableListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventsVariableListResponse DescribeEventsVariableListResponse
     */
    public function describeEventsVariableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->filterDTO)) {
            $query['filterDTO'] = $request->filterDTO;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventsVariableList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventsVariableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件变量
     *  *
     * @param DescribeEventsVariableListRequest $request DescribeEventsVariableListRequest
     *
     * @return DescribeEventsVariableListResponse DescribeEventsVariableListResponse
     */
    public function describeEventsVariableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsVariableListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExcuteNumRequest $request DescribeExcuteNumRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExcuteNumResponse DescribeExcuteNumResponse
     */
    public function describeExcuteNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->degree)) {
            $query['Degree'] = $request->degree;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExcuteNum',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExcuteNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExcuteNumRequest $request DescribeExcuteNumRequest
     *
     * @return DescribeExcuteNumResponse DescribeExcuteNumResponse
     */
    public function describeExcuteNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcuteNumWithOptions($request, $runtime);
    }

    /**
     * @summary 校验字段名是否重复(基于用户单位)
     *  *
     * @param DescribeExistNameRequest $request DescribeExistNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExistNameResponse DescribeExistNameResponse
     */
    public function describeExistNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExistName',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExistNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验字段名是否重复(基于用户单位)
     *  *
     * @param DescribeExistNameRequest $request DescribeExistNameRequest
     *
     * @return DescribeExistNameResponse DescribeExistNameResponse
     */
    public function describeExistName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExistNameWithOptions($request, $runtime);
    }

    /**
     * @summary 场景是否存在
     *  *
     * @param DescribeExistSceneRequest $request DescribeExistSceneRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExistSceneResponse DescribeExistSceneResponse
     */
    public function describeExistSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $query['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExistScene',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExistSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 场景是否存在
     *  *
     * @param DescribeExistSceneRequest $request DescribeExistSceneRequest
     *
     * @return DescribeExistSceneResponse DescribeExistSceneResponse
     */
    public function describeExistScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExistSceneWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义变量详情
     *  *
     * @param DescribeExpressionVariableDetailRequest $request DescribeExpressionVariableDetailRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressionVariableDetailResponse DescribeExpressionVariableDetailResponse
     */
    public function describeExpressionVariableDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpressionVariableDetail',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressionVariableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义变量详情
     *  *
     * @param DescribeExpressionVariableDetailRequest $request DescribeExpressionVariableDetailRequest
     *
     * @return DescribeExpressionVariableDetailResponse DescribeExpressionVariableDetailResponse
     */
    public function describeExpressionVariableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressionVariableDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 函数列表
     *  *
     * @param DescribeExpressionVariableFunctionListRequest $request DescribeExpressionVariableFunctionListRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressionVariableFunctionListResponse DescribeExpressionVariableFunctionListResponse
     */
    public function describeExpressionVariableFunctionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpressionVariableFunctionList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressionVariableFunctionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 函数列表
     *  *
     * @param DescribeExpressionVariableFunctionListRequest $request DescribeExpressionVariableFunctionListRequest
     *
     * @return DescribeExpressionVariableFunctionListResponse DescribeExpressionVariableFunctionListResponse
     */
    public function describeExpressionVariableFunctionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressionVariableFunctionListWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义变量分页查询
     *  *
     * @param DescribeExpressionVariablePageRequest $request DescribeExpressionVariablePageRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressionVariablePageResponse DescribeExpressionVariablePageResponse
     */
    public function describeExpressionVariablePageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->value)) {
            $query['value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpressionVariablePage',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressionVariablePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义变量分页查询
     *  *
     * @param DescribeExpressionVariablePageRequest $request DescribeExpressionVariablePageRequest
     *
     * @return DescribeExpressionVariablePageResponse DescribeExpressionVariablePageResponse
     */
    public function describeExpressionVariablePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressionVariablePageWithOptions($request, $runtime);
    }

    /**
     * @summary 获取字段详情
     *  *
     * @param DescribeFieldByIdRequest $request DescribeFieldByIdRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFieldByIdResponse DescribeFieldByIdResponse
     */
    public function describeFieldByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFieldById',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFieldByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取字段详情
     *  *
     * @param DescribeFieldByIdRequest $request DescribeFieldByIdRequest
     *
     * @return DescribeFieldByIdResponse DescribeFieldByIdResponse
     */
    public function describeFieldById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 查询字段列表
     *  *
     * @param DescribeFieldListRequest $request DescribeFieldListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFieldListResponse DescribeFieldListResponse
     */
    public function describeFieldListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->inputs)) {
            $query['inputs'] = $request->inputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFieldList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFieldListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询字段列表
     *  *
     * @param DescribeFieldListRequest $request DescribeFieldListRequest
     *
     * @return DescribeFieldListResponse DescribeFieldListResponse
     */
    public function describeFieldList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询字段分页列表
     *  *
     * @param DescribeFieldPageRequest $request DescribeFieldPageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFieldPageResponse DescribeFieldPageResponse
     */
    public function describeFieldPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->classify)) {
            $query['classify'] = $request->classify;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFieldPage',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFieldPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询字段分页列表
     *  *
     * @param DescribeFieldPageRequest $request DescribeFieldPageRequest
     *
     * @return DescribeFieldPageResponse DescribeFieldPageResponse
     */
    public function describeFieldPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldPageWithOptions($request, $runtime);
    }

    /**
     * @summary 社群账户列表
     *  *
     * @param DescribeGroupAccountPageRequest $request DescribeGroupAccountPageRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupAccountPageResponse DescribeGroupAccountPageResponse
     */
    public function describeGroupAccountPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->communityNo)) {
            $query['communityNo'] = $request->communityNo;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->fieldKey)) {
            $query['fieldKey'] = $request->fieldKey;
        }
        if (!Utils::isUnset($request->fieldVal)) {
            $query['fieldVal'] = $request->fieldVal;
        }
        if (!Utils::isUnset($request->isPage)) {
            $query['isPage'] = $request->isPage;
        }
        if (!Utils::isUnset($request->order)) {
            $query['order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupAccountPage',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupAccountPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 社群账户列表
     *  *
     * @param DescribeGroupAccountPageRequest $request DescribeGroupAccountPageRequest
     *
     * @return DescribeGroupAccountPageResponse DescribeGroupAccountPageResponse
     */
    public function describeGroupAccountPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupAccountPageWithOptions($request, $runtime);
    }

    /**
     * @summary 社群列表查询条件
     *  *
     * @param DescribeGroupConditionListRequest $request DescribeGroupConditionListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupConditionListResponse DescribeGroupConditionListResponse
     */
    public function describeGroupConditionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupConditionList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupConditionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 社群列表查询条件
     *  *
     * @param DescribeGroupConditionListRequest $request DescribeGroupConditionListRequest
     *
     * @return DescribeGroupConditionListResponse DescribeGroupConditionListResponse
     */
    public function describeGroupConditionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupConditionListWithOptions($request, $runtime);
    }

    /**
     * @summary 社群列表
     *  *
     * @param DescribeGroupPageRequest $request DescribeGroupPageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupPageResponse DescribeGroupPageResponse
     */
    public function describeGroupPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->order)) {
            $query['order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->timeType)) {
            $query['timeType'] = $request->timeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupPage',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 社群列表
     *  *
     * @param DescribeGroupPageRequest $request DescribeGroupPageRequest
     *
     * @return DescribeGroupPageResponse DescribeGroupPageResponse
     */
    public function describeGroupPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupPageWithOptions($request, $runtime);
    }

    /**
     * @summary 当日发现的风险社群
     *  *
     * @param DescribeGroupStatisticsByTodayRequest $request DescribeGroupStatisticsByTodayRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupStatisticsByTodayResponse DescribeGroupStatisticsByTodayResponse
     */
    public function describeGroupStatisticsByTodayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupStatisticsByToday',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupStatisticsByTodayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 当日发现的风险社群
     *  *
     * @param DescribeGroupStatisticsByTodayRequest $request DescribeGroupStatisticsByTodayRequest
     *
     * @return DescribeGroupStatisticsByTodayResponse DescribeGroupStatisticsByTodayResponse
     */
    public function describeGroupStatisticsByToday($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupStatisticsByTodayWithOptions($request, $runtime);
    }

    /**
     * @summary 风险社群的近期趋势
     *  *
     * @param DescribeGroupTrendRequest $request DescribeGroupTrendRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupTrendResponse DescribeGroupTrendResponse
     */
    public function describeGroupTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->day)) {
            $query['day'] = $request->day;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupTrend',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 风险社群的近期趋势
     *  *
     * @param DescribeGroupTrendRequest $request DescribeGroupTrendRequest
     *
     * @return DescribeGroupTrendResponse DescribeGroupTrendResponse
     */
    public function describeGroupTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupTrendWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件名下的策略名是否存在
     *  *
     * @param DescribeHasRuleNameByEventCodeRequest $request DescribeHasRuleNameByEventCodeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHasRuleNameByEventCodeResponse DescribeHasRuleNameByEventCodeResponse
     */
    public function describeHasRuleNameByEventCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->excludeRuleId)) {
            $query['excludeRuleId'] = $request->excludeRuleId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHasRuleNameByEventCode',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHasRuleNameByEventCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件名下的策略名是否存在
     *  *
     * @param DescribeHasRuleNameByEventCodeRequest $request DescribeHasRuleNameByEventCodeRequest
     *
     * @return DescribeHasRuleNameByEventCodeResponse DescribeHasRuleNameByEventCodeResponse
     */
    public function describeHasRuleNameByEventCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHasRuleNameByEventCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 风险地图概览图表(饼图)
     *  *
     * @param DescribeHighRiskPieChartRequest $request DescribeHighRiskPieChartRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHighRiskPieChartResponse DescribeHighRiskPieChartResponse
     */
    public function describeHighRiskPieChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHighRiskPieChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHighRiskPieChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 风险地图概览图表(饼图)
     *  *
     * @param DescribeHighRiskPieChartRequest $request DescribeHighRiskPieChartRequest
     *
     * @return DescribeHighRiskPieChartResponse DescribeHighRiskPieChartResponse
     */
    public function describeHighRiskPieChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighRiskPieChartWithOptions($request, $runtime);
    }

    /**
     * @summary 策略命中波动检测
     *  *
     * @param DescribeHitRuleFluctuationRequest $request DescribeHitRuleFluctuationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHitRuleFluctuationResponse DescribeHitRuleFluctuationResponse
     */
    public function describeHitRuleFluctuationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['ruleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHitRuleFluctuation',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHitRuleFluctuationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 策略命中波动检测
     *  *
     * @param DescribeHitRuleFluctuationRequest $request DescribeHitRuleFluctuationRequest
     *
     * @return DescribeHitRuleFluctuationResponse DescribeHitRuleFluctuationResponse
     */
    public function describeHitRuleFluctuation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHitRuleFluctuationWithOptions($request, $runtime);
    }

    /**
     * @summary 主事件/旁路/分流策略命中TOP20
     *  *
     * @param DescribeHitRuleListRequest $request DescribeHitRuleListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHitRuleListResponse DescribeHitRuleListResponse
     */
    public function describeHitRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['eventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHitRuleList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHitRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 主事件/旁路/分流策略命中TOP20
     *  *
     * @param DescribeHitRuleListRequest $request DescribeHitRuleListRequest
     *
     * @return DescribeHitRuleListResponse DescribeHitRuleListResponse
     */
    public function describeHitRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHitRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary 策略命中趋势
     *  *
     * @param DescribeHitRuleTrendRequest $request DescribeHitRuleTrendRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHitRuleTrendResponse DescribeHitRuleTrendResponse
     */
    public function describeHitRuleTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['ruleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHitRuleTrend',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHitRuleTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 策略命中趋势
     *  *
     * @param DescribeHitRuleTrendRequest $request DescribeHitRuleTrendRequest
     *
     * @return DescribeHitRuleTrendResponse DescribeHitRuleTrendResponse
     */
    public function describeHitRuleTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHitRuleTrendWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件总数量
     *  *
     * @param DescribeInputFeildCountByEventCodeRequest $request DescribeInputFeildCountByEventCodeRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInputFeildCountByEventCodeResponse DescribeInputFeildCountByEventCodeResponse
     */
    public function describeInputFeildCountByEventCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInputFeildCountByEventCode',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInputFeildCountByEventCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件总数量
     *  *
     * @param DescribeInputFeildCountByEventCodeRequest $request DescribeInputFeildCountByEventCodeRequest
     *
     * @return DescribeInputFeildCountByEventCodeResponse DescribeInputFeildCountByEventCodeResponse
     */
    public function describeInputFeildCountByEventCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInputFeildCountByEventCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 任务列表
     *  *
     * @param DescribeListPocRequest $request DescribeListPocRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeListPocResponse DescribeListPocResponse
     */
    public function describeListPocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['RegId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeListPoc',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeListPocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 任务列表
     *  *
     * @param DescribeListPocRequest $request DescribeListPocRequest
     *
     * @return DescribeListPocResponse DescribeListPocResponse
     */
    public function describeListPoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListPocWithOptions($request, $runtime);
    }

    /**
     * @summary 获取监控对象列表
     *  *
     * @param DescribeLoanExecListRequest $request DescribeLoanExecListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoanExecListResponse DescribeLoanExecListResponse
     */
    public function describeLoanExecListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->batchNo)) {
            $query['batchNo'] = $request->batchNo;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->monitorObj)) {
            $query['monitorObj'] = $request->monitorObj;
        }
        if (!Utils::isUnset($request->monitorStatus)) {
            $query['monitorStatus'] = $request->monitorStatus;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoanExecList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoanExecListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取监控对象列表
     *  *
     * @param DescribeLoanExecListRequest $request DescribeLoanExecListRequest
     *
     * @return DescribeLoanExecListResponse DescribeLoanExecListResponse
     */
    public function describeLoanExecList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoanExecListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取贷中监控任务列表
     *  *
     * @param DescribeLoanTaskListRequest $request DescribeLoanTaskListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoanTaskListResponse DescribeLoanTaskListResponse
     */
    public function describeLoanTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->batchNo)) {
            $query['batchNo'] = $request->batchNo;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->monitorStatus)) {
            $query['monitorStatus'] = $request->monitorStatus;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoanTaskList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoanTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取贷中监控任务列表
     *  *
     * @param DescribeLoanTaskListRequest $request DescribeLoanTaskListRequest
     *
     * @return DescribeLoanTaskListResponse DescribeLoanTaskListResponse
     */
    public function describeLoanTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoanTaskListWithOptions($request, $runtime);
    }

    /**
     * @summary 打标列表
     *  *
     * @param DescribeMarkPageRequest $request DescribeMarkPageRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMarkPageResponse DescribeMarkPageResponse
     */
    public function describeMarkPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->isPage)) {
            $query['isPage'] = $request->isPage;
        }
        if (!Utils::isUnset($request->order)) {
            $query['order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskLogId)) {
            $query['taskLogId'] = $request->taskLogId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMarkPage',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMarkPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 打标列表
     *  *
     * @param DescribeMarkPageRequest $request DescribeMarkPageRequest
     *
     * @return DescribeMarkPageResponse DescribeMarkPageResponse
     */
    public function describeMarkPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMarkPageWithOptions($request, $runtime);
    }

    /**
     * @summary 查询是否有权限
     *  *
     * @param DescribeMenuPermissionRequest $request DescribeMenuPermissionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMenuPermissionResponse DescribeMenuPermissionResponse
     */
    public function describeMenuPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->permissionType)) {
            $query['permissionType'] = $request->permissionType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMenuPermission',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMenuPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询是否有权限
     *  *
     * @param DescribeMenuPermissionRequest $request DescribeMenuPermissionRequest
     *
     * @return DescribeMenuPermissionResponse DescribeMenuPermissionResponse
     */
    public function describeMenuPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMenuPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询任务的限制
     *  *
     * @param DescribeMonitorTaskLimitRequest $request DescribeMonitorTaskLimitRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorTaskLimitResponse DescribeMonitorTaskLimitResponse
     */
    public function describeMonitorTaskLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorTaskLimit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorTaskLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务的限制
     *  *
     * @param DescribeMonitorTaskLimitRequest $request DescribeMonitorTaskLimitRequest
     *
     * @return DescribeMonitorTaskLimitResponse DescribeMonitorTaskLimitResponse
     */
    public function describeMonitorTaskLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorTaskLimitWithOptions($request, $runtime);
    }

    /**
     * @summary 查询名单分页
     *  *
     * @param DescribeNameListRequest $request DescribeNameListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNameListResponse DescribeNameListResponse
     */
    public function describeNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['value'] = $request->value;
        }
        if (!Utils::isUnset($request->variableId)) {
            $query['variableId'] = $request->variableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNameList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询名单分页
     *  *
     * @param DescribeNameListRequest $request DescribeNameListRequest
     *
     * @return DescribeNameListResponse DescribeNameListResponse
     */
    public function describeNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListWithOptions($request, $runtime);
    }

    /**
     * @summary 下载名单列表
     *  *
     * @param DescribeNameListDownloadUrlRequest $request DescribeNameListDownloadUrlRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNameListDownloadUrlResponse DescribeNameListDownloadUrlResponse
     */
    public function describeNameListDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->variableId)) {
            $query['variableId'] = $request->variableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNameListDownloadUrl',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNameListDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下载名单列表
     *  *
     * @param DescribeNameListDownloadUrlRequest $request DescribeNameListDownloadUrlRequest
     *
     * @return DescribeNameListDownloadUrlResponse DescribeNameListDownloadUrlResponse
     */
    public function describeNameListDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 查询名单限制数
     *  *
     * @param DescribeNameListLimitRequest $request DescribeNameListLimitRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNameListLimitResponse DescribeNameListLimitResponse
     */
    public function describeNameListLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNameListLimit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNameListLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询名单限制数
     *  *
     * @param DescribeNameListLimitRequest $request DescribeNameListLimitRequest
     *
     * @return DescribeNameListLimitResponse DescribeNameListLimitResponse
     */
    public function describeNameListLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListLimitWithOptions($request, $runtime);
    }

    /**
     * @summary 名单内容查询
     *  *
     * @param DescribeNameListPageListRequest $request DescribeNameListPageListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNameListPageListResponse DescribeNameListPageListResponse
     */
    public function describeNameListPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->updateBeginTime)) {
            $query['updateBeginTime'] = $request->updateBeginTime;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['updateEndTime'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->value)) {
            $query['value'] = $request->value;
        }
        if (!Utils::isUnset($request->variableId)) {
            $query['variableId'] = $request->variableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNameListPageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNameListPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 名单内容查询
     *  *
     * @param DescribeNameListPageListRequest $request DescribeNameListPageListRequest
     *
     * @return DescribeNameListPageListResponse DescribeNameListPageListResponse
     */
    public function describeNameListPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListPageListWithOptions($request, $runtime);
    }

    /**
     * @summary 名单类型列表
     *  *
     * @param DescribeNameListTypeListRequest $request DescribeNameListTypeListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNameListTypeListResponse DescribeNameListTypeListResponse
     */
    public function describeNameListTypeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNameListTypeList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNameListTypeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 名单类型列表
     *  *
     * @param DescribeNameListTypeListRequest $request DescribeNameListTypeListRequest
     *
     * @return DescribeNameListTypeListResponse DescribeNameListTypeListResponse
     */
    public function describeNameListTypeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListTypeListWithOptions($request, $runtime);
    }

    /**
     * @summary 名单列表
     *  *
     * @param DescribeNameListVariablePageListRequest $request DescribeNameListVariablePageListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNameListVariablePageListResponse DescribeNameListVariablePageListResponse
     */
    public function describeNameListVariablePageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nameListType)) {
            $query['nameListType'] = $request->nameListType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNameListVariablePageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNameListVariablePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 名单列表
     *  *
     * @param DescribeNameListVariablePageListRequest $request DescribeNameListVariablePageListRequest
     *
     * @return DescribeNameListVariablePageListResponse DescribeNameListVariablePageListResponse
     */
    public function describeNameListVariablePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListVariablePageListWithOptions($request, $runtime);
    }

    /**
     * @summary 根据事件名称查询事件列表
     *  *
     * @param DescribeOperationLogPageListRequest $request DescribeOperationLogPageListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOperationLogPageListResponse DescribeOperationLogPageListResponse
     */
    public function describeOperationLogPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOperationLogPageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOperationLogPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据事件名称查询事件列表
     *  *
     * @param DescribeOperationLogPageListRequest $request DescribeOperationLogPageListRequest
     *
     * @return DescribeOperationLogPageListResponse DescribeOperationLogPageListResponse
     */
    public function describeOperationLogPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperationLogPageListWithOptions($request, $runtime);
    }

    /**
     * @summary 根据客户ID查询操作符映射列表
     *  *
     * @param DescribeOperatorListRequest $request DescribeOperatorListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOperatorListResponse DescribeOperatorListResponse
     */
    public function describeOperatorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOperatorList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOperatorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据客户ID查询操作符映射列表
     *  *
     * @param DescribeOperatorListRequest $request DescribeOperatorListRequest
     *
     * @return DescribeOperatorListResponse DescribeOperatorListResponse
     */
    public function describeOperatorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询操作符映射列表
     *  *
     * @param DescribeOperatorListBySceneRequest $request DescribeOperatorListBySceneRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOperatorListBySceneResponse DescribeOperatorListBySceneResponse
     */
    public function describeOperatorListBySceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOperatorListByScene',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOperatorListBySceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询操作符映射列表
     *  *
     * @param DescribeOperatorListBySceneRequest $request DescribeOperatorListBySceneRequest
     *
     * @return DescribeOperatorListBySceneResponse DescribeOperatorListBySceneResponse
     */
    public function describeOperatorListByScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorListBySceneWithOptions($request, $runtime);
    }

    /**
     * @summary 查询操作符映射列表
     *  *
     * @param DescribeOperatorListByTypeRequest $request DescribeOperatorListByTypeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOperatorListByTypeResponse DescribeOperatorListByTypeResponse
     */
    public function describeOperatorListByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOperatorListByType',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOperatorListByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询操作符映射列表
     *  *
     * @param DescribeOperatorListByTypeRequest $request DescribeOperatorListByTypeRequest
     *
     * @return DescribeOperatorListByTypeResponse DescribeOperatorListByTypeResponse
     */
    public function describeOperatorListByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorListByTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 查看是否授权Oss
     *  *
     * @param DescribeOssAuthStatusRequest $request DescribeOssAuthStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOssAuthStatusResponse DescribeOssAuthStatusResponse
     */
    public function describeOssAuthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssAuthStatus',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看是否授权Oss
     *  *
     * @param DescribeOssAuthStatusRequest $request DescribeOssAuthStatusRequest
     *
     * @return DescribeOssAuthStatusResponse DescribeOssAuthStatusResponse
     */
    public function describeOssAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 获取OSS Policy
     *  *
     * @param DescribeOssPolicyRequest $request DescribeOssPolicyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOssPolicyResponse DescribeOssPolicyResponse
     */
    public function describeOssPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssPolicy',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取OSS Policy
     *  *
     * @param DescribeOssPolicyRequest $request DescribeOssPolicyRequest
     *
     * @return DescribeOssPolicyResponse DescribeOssPolicyResponse
     */
    public function describeOssPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 获取文件上传凭证
     *  *
     * @param DescribeOssTokenRequest $request DescribeOssTokenRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOssTokenResponse DescribeOssTokenResponse
     */
    public function describeOssTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $query['uploadType'] = $request->uploadType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssToken',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文件上传凭证
     *  *
     * @param DescribeOssTokenRequest $request DescribeOssTokenRequest
     *
     * @return DescribeOssTokenResponse DescribeOssTokenResponse
     */
    public function describeOssToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件属性列表
     *  *
     * @param DescribeParamByEventCodesRequest $request DescribeParamByEventCodesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParamByEventCodesResponse DescribeParamByEventCodesResponse
     */
    public function describeParamByEventCodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->parma)) {
            $query['parma'] = $request->parma;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParamByEventCodes',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParamByEventCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件属性列表
     *  *
     * @param DescribeParamByEventCodesRequest $request DescribeParamByEventCodesRequest
     *
     * @return DescribeParamByEventCodesResponse DescribeParamByEventCodesResponse
     */
    public function describeParamByEventCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParamByEventCodesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取映射关系
     *  *
     * @param DescribeParamListRequest $request DescribeParamListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParamListResponse DescribeParamListResponse
     */
    public function describeParamListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['fileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['serviceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParamList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParamListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取映射关系
     *  *
     * @param DescribeParamListRequest $request DescribeParamListRequest
     *
     * @return DescribeParamListResponse DescribeParamListResponse
     */
    public function describeParamList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParamListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取任务详情
     *  *
     * @param DescribePocDetailRequest $request DescribePocDetailRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePocDetailResponse DescribePocDetailResponse
     */
    public function describePocDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePocDetail',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePocDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务详情
     *  *
     * @param DescribePocDetailRequest $request DescribePocDetailRequest
     *
     * @return DescribePocDetailResponse DescribePocDetailResponse
     */
    public function describePocDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePocDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 获取文件上传凭证
     *  *
     * @param DescribePocOssTokenRequest $request DescribePocOssTokenRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePocOssTokenResponse DescribePocOssTokenResponse
     */
    public function describePocOssTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePocOssToken',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePocOssTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文件上传凭证
     *  *
     * @param DescribePocOssTokenRequest $request DescribePocOssTokenRequest
     *
     * @return DescribePocOssTokenResponse DescribePocOssTokenResponse
     */
    public function describePocOssToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePocOssTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 获取poc任务列表
     *  *
     * @param DescribePocTaskListRequest $request DescribePocTaskListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePocTaskListResponse DescribePocTaskListResponse
     */
    public function describePocTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePocTaskList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePocTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取poc任务列表
     *  *
     * @param DescribePocTaskListRequest $request DescribePocTaskListRequest
     *
     * @return DescribePocTaskListResponse DescribePocTaskListResponse
     */
    public function describePocTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePocTaskListWithOptions($request, $runtime);
    }

    /**
     * @summary 判断是否开通Stack私域模式
     *  *
     * @param DescribePrivateStackRequest $request DescribePrivateStackRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePrivateStackResponse DescribePrivateStackResponse
     */
    public function describePrivateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrivateStack',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePrivateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 判断是否开通Stack私域模式
     *  *
     * @param DescribePrivateStackRequest $request DescribePrivateStackRequest
     *
     * @return DescribePrivateStackResponse DescribePrivateStackResponse
     */
    public function describePrivateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrivateStackWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量详情查询
     *  *
     * @param DescribeQueryVariableDetailRequest $request DescribeQueryVariableDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeQueryVariableDetailResponse DescribeQueryVariableDetailResponse
     */
    public function describeQueryVariableDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQueryVariableDetail',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeQueryVariableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量详情查询
     *  *
     * @param DescribeQueryVariableDetailRequest $request DescribeQueryVariableDetailRequest
     *
     * @return DescribeQueryVariableDetailResponse DescribeQueryVariableDetailResponse
     */
    public function describeQueryVariableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQueryVariableDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量列表查询
     *  *
     * @param DescribeQueryVariablePageListRequest $request DescribeQueryVariablePageListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeQueryVariablePageListResponse DescribeQueryVariablePageListResponse
     */
    public function describeQueryVariablePageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dataSourceCode)) {
            $query['dataSourceCode'] = $request->dataSourceCode;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQueryVariablePageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeQueryVariablePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量列表查询
     *  *
     * @param DescribeQueryVariablePageListRequest $request DescribeQueryVariablePageListRequest
     *
     * @return DescribeQueryVariablePageListResponse DescribeQueryVariablePageListResponse
     */
    public function describeQueryVariablePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQueryVariablePageListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询样本&场景下的变量列表
     *  *
     * @param DescribeRecommendSceneVariablesRequest $request DescribeRecommendSceneVariablesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecommendSceneVariablesResponse DescribeRecommendSceneVariablesResponse
     */
    public function describeRecommendSceneVariablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sampleId)) {
            $query['sampleId'] = $request->sampleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecommendSceneVariables',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecommendSceneVariablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询样本&场景下的变量列表
     *  *
     * @param DescribeRecommendSceneVariablesRequest $request DescribeRecommendSceneVariablesRequest
     *
     * @return DescribeRecommendSceneVariablesResponse DescribeRecommendSceneVariablesResponse
     */
    public function describeRecommendSceneVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendSceneVariablesWithOptions($request, $runtime);
    }

    /**
     * @summary 变量推荐详情查询接口
     *  *
     * @param DescribeRecommendTaskDetailRequest $request DescribeRecommendTaskDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecommendTaskDetailResponse DescribeRecommendTaskDetailResponse
     */
    public function describeRecommendTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecommendTaskDetail',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecommendTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 变量推荐详情查询接口
     *  *
     * @param DescribeRecommendTaskDetailRequest $request DescribeRecommendTaskDetailRequest
     *
     * @return DescribeRecommendTaskDetailResponse DescribeRecommendTaskDetailResponse
     */
    public function describeRecommendTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 变量推荐列表查询接口
     *  *
     * @param DescribeRecommendTaskPageListRequest $request DescribeRecommendTaskPageListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecommendTaskPageListResponse DescribeRecommendTaskPageListResponse
     */
    public function describeRecommendTaskPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['taskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecommendTaskPageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecommendTaskPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 变量推荐列表查询接口
     *  *
     * @param DescribeRecommendTaskPageListRequest $request DescribeRecommendTaskPageListRequest
     *
     * @return DescribeRecommendTaskPageListResponse DescribeRecommendTaskPageListResponse
     */
    public function describeRecommendTaskPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendTaskPageListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量下的指标信息
     *  *
     * @param DescribeRecommendVariablesVelocityRequest $request DescribeRecommendVariablesVelocityRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecommendVariablesVelocityResponse DescribeRecommendVariablesVelocityResponse
     */
    public function describeRecommendVariablesVelocityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->variableIdsStr)) {
            $query['variableIdsStr'] = $request->variableIdsStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecommendVariablesVelocity',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecommendVariablesVelocityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量下的指标信息
     *  *
     * @param DescribeRecommendVariablesVelocityRequest $request DescribeRecommendVariablesVelocityRequest
     *
     * @return DescribeRecommendVariablesVelocityResponse DescribeRecommendVariablesVelocityResponse
     */
    public function describeRecommendVariablesVelocity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendVariablesVelocityWithOptions($request, $runtime);
    }

    /**
     * @summary 查询支持的指标列表
     *  *
     * @param DescribeRecommendVelocitiesRequest $request DescribeRecommendVelocitiesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecommendVelocitiesResponse DescribeRecommendVelocitiesResponse
     */
    public function describeRecommendVelocitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->code)) {
            $query['code'] = $request->code;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecommendVelocities',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecommendVelocitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询支持的指标列表
     *  *
     * @param DescribeRecommendVelocitiesRequest $request DescribeRecommendVelocitiesRequest
     *
     * @return DescribeRecommendVelocitiesResponse DescribeRecommendVelocitiesResponse
     */
    public function describeRecommendVelocities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendVelocitiesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询ApiGateway支持的region列表
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询ApiGateway支持的region列表
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询请求命中详情
     *  *
     * @param DescribeRequestHitRequest $request DescribeRequestHitRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRequestHitResponse DescribeRequestHitResponse
     */
    public function describeRequestHitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sRequestId)) {
            $query['sRequestId'] = $request->sRequestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRequestHit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRequestHitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询请求命中详情
     *  *
     * @param DescribeRequestHitRequest $request DescribeRequestHitRequest
     *
     * @return DescribeRequestHitResponse DescribeRequestHitResponse
     */
    public function describeRequestHit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestHitWithOptions($request, $runtime);
    }

    /**
     * @summary 请求峰值
     *  *
     * @param DescribeRequestPeakReportRequest $request DescribeRequestPeakReportRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRequestPeakReportResponse DescribeRequestPeakReportResponse
     */
    public function describeRequestPeakReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRequestPeakReport',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRequestPeakReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 请求峰值
     *  *
     * @param DescribeRequestPeakReportRequest $request DescribeRequestPeakReportRequest
     *
     * @return DescribeRequestPeakReportResponse DescribeRequestPeakReportResponse
     */
    public function describeRequestPeakReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestPeakReportWithOptions($request, $runtime);
    }

    /**
     * @summary 下钻分析
     *  *
     * @param DescribeResultCountRequest $request DescribeResultCountRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResultCountResponse DescribeResultCountResponse
     */
    public function describeResultCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResultCount',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResultCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下钻分析
     *  *
     * @param DescribeResultCountRequest $request DescribeResultCountRequest
     *
     * @return DescribeResultCountResponse DescribeResultCountResponse
     */
    public function describeResultCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResultCountWithOptions($request, $runtime);
    }

    /**
     * @summary 风险地图概览图表(折线图)
     *  *
     * @param DescribeRiskLineChartRequest $request DescribeRiskLineChartRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskLineChartResponse DescribeRiskLineChartResponse
     */
    public function describeRiskLineChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskLineChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 风险地图概览图表(折线图)
     *  *
     * @param DescribeRiskLineChartRequest $request DescribeRiskLineChartRequest
     *
     * @return DescribeRiskLineChartResponse DescribeRiskLineChartResponse
     */
    public function describeRiskLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskLineChartWithOptions($request, $runtime);
    }

    /**
     * @summary 策略概览列表
     *  *
     * @param DescribeRuleBarChartRequest $request DescribeRuleBarChartRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleBarChartResponse DescribeRuleBarChartResponse
     */
    public function describeRuleBarChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleBarChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleBarChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 策略概览列表
     *  *
     * @param DescribeRuleBarChartRequest $request DescribeRuleBarChartRequest
     *
     * @return DescribeRuleBarChartResponse DescribeRuleBarChartResponse
     */
    public function describeRuleBarChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleBarChartWithOptions($request, $runtime);
    }

    /**
     * @summary 根据用户Id查询策略数
     *  *
     * @param DescribeRuleCountByUserIdRequest $request DescribeRuleCountByUserIdRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleCountByUserIdResponse DescribeRuleCountByUserIdResponse
     */
    public function describeRuleCountByUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleCountByUserId',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleCountByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据用户Id查询策略数
     *  *
     * @param DescribeRuleCountByUserIdRequest $request DescribeRuleCountByUserIdRequest
     *
     * @return DescribeRuleCountByUserIdResponse DescribeRuleCountByUserIdResponse
     */
    public function describeRuleCountByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleCountByUserIdWithOptions($request, $runtime);
    }

    /**
     * @summary 查询策略/版本详情
     *  *
     * @param DescribeRuleDetailByRuleIdRequest $request DescribeRuleDetailByRuleIdRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleDetailByRuleIdResponse DescribeRuleDetailByRuleIdResponse
     */
    public function describeRuleDetailByRuleIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleVersionId)) {
            $query['ruleVersionId'] = $request->ruleVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleDetailByRuleId',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleDetailByRuleIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询策略/版本详情
     *  *
     * @param DescribeRuleDetailByRuleIdRequest $request DescribeRuleDetailByRuleIdRequest
     *
     * @return DescribeRuleDetailByRuleIdResponse DescribeRuleDetailByRuleIdResponse
     */
    public function describeRuleDetailByRuleId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleDetailByRuleIdWithOptions($request, $runtime);
    }

    /**
     * @summary 查询策略命中详情
     *  *
     * @param DescribeRuleHitRequest $request DescribeRuleHitRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleHitResponse DescribeRuleHitResponse
     */
    public function describeRuleHitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleSnapshotId)) {
            $query['ruleSnapshotId'] = $request->ruleSnapshotId;
        }
        if (!Utils::isUnset($request->sRequestId)) {
            $query['sRequestId'] = $request->sRequestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询策略命中详情
     *  *
     * @param DescribeRuleHitRequest $request DescribeRuleHitRequest
     *
     * @return DescribeRuleHitResponse DescribeRuleHitResponse
     */
    public function describeRuleHit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitWithOptions($request, $runtime);
    }

    /**
     * @summary 查询策略列表
     *  *
     * @param DescribeRuleListByEventCodesListRequest $request DescribeRuleListByEventCodesListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleListByEventCodesListResponse DescribeRuleListByEventCodesListResponse
     */
    public function describeRuleListByEventCodesListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleListByEventCodesList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleListByEventCodesListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询策略列表
     *  *
     * @param DescribeRuleListByEventCodesListRequest $request DescribeRuleListByEventCodesListRequest
     *
     * @return DescribeRuleListByEventCodesListResponse DescribeRuleListByEventCodesListResponse
     */
    public function describeRuleListByEventCodesList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleListByEventCodesListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询策略列表
     *  *
     * @param DescribeRulePageListRequest $request DescribeRulePageListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRulePageListResponse DescribeRulePageListResponse
     */
    public function describeRulePageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleAuthType)) {
            $query['ruleAuthType'] = $request->ruleAuthType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['ruleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRulePageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRulePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询策略列表
     *  *
     * @param DescribeRulePageListRequest $request DescribeRulePageListRequest
     *
     * @return DescribeRulePageListResponse DescribeRulePageListResponse
     */
    public function describeRulePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulePageListWithOptions($request, $runtime);
    }

    /**
     * @summary 根据ruleId+version查询历史快照
     *  *
     * @param DescribeRuleSnapshotRequest $request DescribeRuleSnapshotRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleSnapshotResponse DescribeRuleSnapshotResponse
     */
    public function describeRuleSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->snapshotVersion)) {
            $query['snapshotVersion'] = $request->snapshotVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleSnapshot',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据ruleId+version查询历史快照
     *  *
     * @param DescribeRuleSnapshotRequest $request DescribeRuleSnapshotRequest
     *
     * @return DescribeRuleSnapshotResponse DescribeRuleSnapshotResponse
     */
    public function describeRuleSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleSnapshotWithOptions($request, $runtime);
    }

    /**
     * @summary 查询策略版本列表
     *  *
     * @param DescribeRuleVersionListRequest $request DescribeRuleVersionListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleVersionListResponse DescribeRuleVersionListResponse
     */
    public function describeRuleVersionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleVersionList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleVersionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询策略版本列表
     *  *
     * @param DescribeRuleVersionListRequest $request DescribeRuleVersionListRequest
     *
     * @return DescribeRuleVersionListResponse DescribeRuleVersionListResponse
     */
    public function describeRuleVersionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleVersionListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取老旧版本sdk下载列表
     *  *
     * @param DescribeSDKDownloadListRequest $request DescribeSDKDownloadListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSDKDownloadListResponse DescribeSDKDownloadListResponse
     */
    public function describeSDKDownloadListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->deviceType)) {
            $query['deviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->listType)) {
            $query['listType'] = $request->listType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSDKDownloadList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSDKDownloadListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取老旧版本sdk下载列表
     *  *
     * @param DescribeSDKDownloadListRequest $request DescribeSDKDownloadListRequest
     *
     * @return DescribeSDKDownloadListResponse DescribeSDKDownloadListResponse
     */
    public function describeSDKDownloadList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDKDownloadListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSafConsoleRequest $request DescribeSafConsoleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSafConsoleResponse DescribeSafConsoleResponse
     */
    public function describeSafConsoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->content)) {
            $query['content'] = $request->content;
        }
        if (!Utils::isUnset($request->service)) {
            $query['service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSafConsole',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSafConsoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSafConsoleRequest $request DescribeSafConsoleRequest
     *
     * @return DescribeSafConsoleResponse DescribeSafConsoleResponse
     */
    public function describeSafConsole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafConsoleWithOptions($request, $runtime);
    }

    /**
     * @summary 查询saf_de订单
     *  *
     * @param DescribeSafDeOrderRequest $request DescribeSafDeOrderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSafDeOrderResponse DescribeSafDeOrderResponse
     */
    public function describeSafDeOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSafDeOrder',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSafDeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询saf_de订单
     *  *
     * @param DescribeSafDeOrderRequest $request DescribeSafDeOrderRequest
     *
     * @return DescribeSafDeOrderResponse DescribeSafDeOrderResponse
     */
    public function describeSafDeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafDeOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 查询订单信息
     *  *
     * @param DescribeSafOrderRequest $request DescribeSafOrderRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSafOrderResponse DescribeSafOrderResponse
     */
    public function describeSafOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->exactProductCode)) {
            $query['exactProductCode'] = $request->exactProductCode;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSafOrder',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSafOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询订单信息
     *  *
     * @param DescribeSafOrderRequest $request DescribeSafOrderRequest
     *
     * @return DescribeSafOrderResponse DescribeSafOrderResponse
     */
    public function describeSafOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 查询接入配置
     *  *
     * @param DescribeSafStartConfigRequest $request DescribeSafStartConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSafStartConfigResponse DescribeSafStartConfigResponse
     */
    public function describeSafStartConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSafStartConfig',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSafStartConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询接入配置
     *  *
     * @param DescribeSafStartConfigRequest $request DescribeSafStartConfigRequest
     *
     * @return DescribeSafStartConfigResponse DescribeSafStartConfigResponse
     */
    public function describeSafStartConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafStartConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查询接入配置
     *  *
     * @param DescribeSafStartStepsRequest $request DescribeSafStartStepsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSafStartStepsResponse DescribeSafStartStepsResponse
     */
    public function describeSafStartStepsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->aliyunServer)) {
            $query['aliyunServer'] = $request->aliyunServer;
        }
        if (!Utils::isUnset($request->deviceTypesStr)) {
            $query['deviceTypesStr'] = $request->deviceTypesStr;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->serverRegion)) {
            $query['serverRegion'] = $request->serverRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSafStartSteps',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSafStartStepsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询接入配置
     *  *
     * @param DescribeSafStartStepsRequest $request DescribeSafStartStepsRequest
     *
     * @return DescribeSafStartStepsResponse DescribeSafStartStepsResponse
     */
    public function describeSafStartSteps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafStartStepsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取风险标签列表
     *  *
     * @param DescribeSafTagListRequest $request DescribeSafTagListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSafTagListResponse DescribeSafTagListResponse
     */
    public function describeSafTagListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['apiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSafTagList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSafTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取风险标签列表
     *  *
     * @param DescribeSafTagListRequest $request DescribeSafTagListRequest
     *
     * @return DescribeSafTagListResponse DescribeSafTagListResponse
     */
    public function describeSafTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafTagListWithOptions($request, $runtime);
    }

    /**
     * @summary 样本列表分页查询
     *  *
     * @param DescribeSampleDataListRequest $request DescribeSampleDataListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleDataListResponse DescribeSampleDataListResponse
     */
    public function describeSampleDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deleteTag)) {
            $query['deleteTag'] = $request->deleteTag;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryContent)) {
            $query['queryContent'] = $request->queryContent;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sampleId)) {
            $query['sampleId'] = $request->sampleId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleDataList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 样本列表分页查询
     *  *
     * @param DescribeSampleDataListRequest $request DescribeSampleDataListRequest
     *
     * @return DescribeSampleDataListResponse DescribeSampleDataListResponse
     */
    public function describeSampleDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDataListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询样本示例授权
     *  *
     * @param DescribeSampleDemoDownloadUrlRequest $request DescribeSampleDemoDownloadUrlRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleDemoDownloadUrlResponse DescribeSampleDemoDownloadUrlResponse
     */
    public function describeSampleDemoDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleDemoDownloadUrl',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleDemoDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询样本示例授权
     *  *
     * @param DescribeSampleDemoDownloadUrlRequest $request DescribeSampleDemoDownloadUrlRequest
     *
     * @return DescribeSampleDemoDownloadUrlResponse DescribeSampleDemoDownloadUrlResponse
     */
    public function describeSampleDemoDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDemoDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 查询样本下载授权信息
     *  *
     * @param DescribeSampleDownloadUrlRequest $request DescribeSampleDownloadUrlRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleDownloadUrlResponse DescribeSampleDownloadUrlResponse
     */
    public function describeSampleDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sampleId)) {
            $query['sampleId'] = $request->sampleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleDownloadUrl',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询样本下载授权信息
     *  *
     * @param DescribeSampleDownloadUrlRequest $request DescribeSampleDownloadUrlRequest
     *
     * @return DescribeSampleDownloadUrlResponse DescribeSampleDownloadUrlResponse
     */
    public function describeSampleDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 查询样本详情
     *  *
     * @param DescribeSampleInfoRequest $request DescribeSampleInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleInfoResponse DescribeSampleInfoResponse
     */
    public function describeSampleInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->versions)) {
            $query['versions'] = $request->versions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleInfo',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询样本详情
     *  *
     * @param DescribeSampleInfoRequest $request DescribeSampleInfoRequest
     *
     * @return DescribeSampleInfoResponse DescribeSampleInfoResponse
     */
    public function describeSampleInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询样本列表
     *  *
     * @param DescribeSampleListRequest $request DescribeSampleListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleListResponse DescribeSampleListResponse
     */
    public function describeSampleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sampleType)) {
            $query['sampleType'] = $request->sampleType;
        }
        if (!Utils::isUnset($request->sampleValue)) {
            $query['sampleValue'] = $request->sampleValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询样本列表
     *  *
     * @param DescribeSampleListRequest $request DescribeSampleListRequest
     *
     * @return DescribeSampleListResponse DescribeSampleListResponse
     */
    public function describeSampleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询场景列表
     *  *
     * @param DescribeSampleSceneListRequest $request DescribeSampleSceneListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleSceneListResponse DescribeSampleSceneListResponse
     */
    public function describeSampleSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleSceneList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询场景列表
     *  *
     * @param DescribeSampleSceneListRequest $request DescribeSampleSceneListRequest
     *
     * @return DescribeSampleSceneListResponse DescribeSampleSceneListResponse
     */
    public function describeSampleSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleSceneListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取标签列表
     *  *
     * @param DescribeSampleTagListRequest $request DescribeSampleTagListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleTagListResponse DescribeSampleTagListResponse
     */
    public function describeSampleTagListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleTagList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取标签列表
     *  *
     * @param DescribeSampleTagListRequest $request DescribeSampleTagListRequest
     *
     * @return DescribeSampleTagListResponse DescribeSampleTagListResponse
     */
    public function describeSampleTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleTagListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询样本上传授权信息
     *  *
     * @param DescribeSampleUploadPolicyRequest $request DescribeSampleUploadPolicyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleUploadPolicyResponse DescribeSampleUploadPolicyResponse
     */
    public function describeSampleUploadPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleUploadPolicy',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询样本上传授权信息
     *  *
     * @param DescribeSampleUploadPolicyRequest $request DescribeSampleUploadPolicyRequest
     *
     * @return DescribeSampleUploadPolicyResponse DescribeSampleUploadPolicyResponse
     */
    public function describeSampleUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 场景化服务事件下拉列表
     *  *
     * @param DescribeSceneAllEventNameCodeListRequest $request DescribeSceneAllEventNameCodeListRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSceneAllEventNameCodeListResponse DescribeSceneAllEventNameCodeListResponse
     */
    public function describeSceneAllEventNameCodeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneAllEventNameCodeList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneAllEventNameCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 场景化服务事件下拉列表
     *  *
     * @param DescribeSceneAllEventNameCodeListRequest $request DescribeSceneAllEventNameCodeListRequest
     *
     * @return DescribeSceneAllEventNameCodeListResponse DescribeSceneAllEventNameCodeListResponse
     */
    public function describeSceneAllEventNameCodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneAllEventNameCodeListWithOptions($request, $runtime);
    }

    /**
     * @summary 场景化风控事件列表
     *  *
     * @param DescribeSceneEventPageListRequest $request DescribeSceneEventPageListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSceneEventPageListResponse DescribeSceneEventPageListResponse
     */
    public function describeSceneEventPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->nameOrCode)) {
            $query['nameOrCode'] = $request->nameOrCode;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneEventPageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneEventPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 场景化风控事件列表
     *  *
     * @param DescribeSceneEventPageListRequest $request DescribeSceneEventPageListRequest
     *
     * @return DescribeSceneEventPageListResponse DescribeSceneEventPageListResponse
     */
    public function describeSceneEventPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneEventPageListWithOptions($request, $runtime);
    }

    /**
     * @summary 风控服务白盒化策略列表
     *  *
     * @param DescribeSceneRulePageListRequest $request DescribeSceneRulePageListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSceneRulePageListResponse DescribeSceneRulePageListResponse
     */
    public function describeSceneRulePageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleAuthType)) {
            $query['ruleAuthType'] = $request->ruleAuthType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['ruleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneRulePageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneRulePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 风控服务白盒化策略列表
     *  *
     * @param DescribeSceneRulePageListRequest $request DescribeSceneRulePageListRequest
     *
     * @return DescribeSceneRulePageListResponse DescribeSceneRulePageListResponse
     */
    public function describeSceneRulePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneRulePageListWithOptions($request, $runtime);
    }

    /**
     * @summary 分值区间数量分析
     *  *
     * @param DescribeScoreSectionNumLineChartRequest $request DescribeScoreSectionNumLineChartRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScoreSectionNumLineChartResponse DescribeScoreSectionNumLineChartResponse
     */
    public function describeScoreSectionNumLineChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->byPassEventCodes)) {
            $query['byPassEventCodes'] = $request->byPassEventCodes;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mainEventCodes)) {
            $query['mainEventCodes'] = $request->mainEventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->shuntEventCodes)) {
            $query['shuntEventCodes'] = $request->shuntEventCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScoreSectionNumLineChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScoreSectionNumLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分值区间数量分析
     *  *
     * @param DescribeScoreSectionNumLineChartRequest $request DescribeScoreSectionNumLineChartRequest
     *
     * @return DescribeScoreSectionNumLineChartResponse DescribeScoreSectionNumLineChartResponse
     */
    public function describeScoreSectionNumLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScoreSectionNumLineChartWithOptions($request, $runtime);
    }

    /**
     * @summary 主事件/旁路事件/分流事件分值区间占比
     *  *
     * @param DescribeScoreSectionPieChartRequest $request DescribeScoreSectionPieChartRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScoreSectionPieChartResponse DescribeScoreSectionPieChartResponse
     */
    public function describeScoreSectionPieChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['eventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScoreSectionPieChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScoreSectionPieChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 主事件/旁路事件/分流事件分值区间占比
     *  *
     * @param DescribeScoreSectionPieChartRequest $request DescribeScoreSectionPieChartRequest
     *
     * @return DescribeScoreSectionPieChartResponse DescribeScoreSectionPieChartResponse
     */
    public function describeScoreSectionPieChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScoreSectionPieChartWithOptions($request, $runtime);
    }

    /**
     * @summary 分值区间占比分析
     *  *
     * @param DescribeScoreSectionRatioLineChartRequest $request DescribeScoreSectionRatioLineChartRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScoreSectionRatioLineChartResponse DescribeScoreSectionRatioLineChartResponse
     */
    public function describeScoreSectionRatioLineChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->byPassEventCodes)) {
            $query['byPassEventCodes'] = $request->byPassEventCodes;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mainEventCodes)) {
            $query['mainEventCodes'] = $request->mainEventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->shuntEventCodes)) {
            $query['shuntEventCodes'] = $request->shuntEventCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScoreSectionRatioLineChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScoreSectionRatioLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分值区间占比分析
     *  *
     * @param DescribeScoreSectionRatioLineChartRequest $request DescribeScoreSectionRatioLineChartRequest
     *
     * @return DescribeScoreSectionRatioLineChartResponse DescribeScoreSectionRatioLineChartResponse
     */
    public function describeScoreSectionRatioLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScoreSectionRatioLineChartWithOptions($request, $runtime);
    }

    /**
     * @summary 查询任务ID列表
     *  *
     * @param DescribeSelectItemRequest $request DescribeSelectItemRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSelectItemResponse DescribeSelectItemResponse
     */
    public function describeSelectItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSelectItem',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSelectItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务ID列表
     *  *
     * @param DescribeSelectItemRequest $request DescribeSelectItemRequest
     *
     * @return DescribeSelectItemResponse DescribeSelectItemResponse
     */
    public function describeSelectItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSelectItemWithOptions($request, $runtime);
    }

    /**
     * @summary ServiceAppkey下拉
     *  *
     * @param DescribeServiceAppKeyRequest $request DescribeServiceAppKeyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceAppKeyResponse DescribeServiceAppKeyResponse
     */
    public function describeServiceAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceAppKey',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ServiceAppkey下拉
     *  *
     * @param DescribeServiceAppKeyRequest $request DescribeServiceAppKeyRequest
     *
     * @return DescribeServiceAppKeyResponse DescribeServiceAppKeyResponse
     */
    public function describeServiceAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 获取服务调用量
     *  *
     * @param DescribeServiceConsumeRequest $request DescribeServiceConsumeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceConsumeResponse DescribeServiceConsumeResponse
     */
    public function describeServiceConsumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['serviceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceConsume',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceConsumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务调用量
     *  *
     * @param DescribeServiceConsumeRequest $request DescribeServiceConsumeRequest
     *
     * @return DescribeServiceConsumeResponse DescribeServiceConsumeResponse
     */
    public function describeServiceConsume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceConsumeWithOptions($request, $runtime);
    }

    /**
     * @summary 下载服务调用量数据文件URL
     *  *
     * @param DescribeServiceConsumeDownloadUrlRequest $request DescribeServiceConsumeDownloadUrlRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceConsumeDownloadUrlResponse DescribeServiceConsumeDownloadUrlResponse
     */
    public function describeServiceConsumeDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['serviceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceConsumeDownloadUrl',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceConsumeDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下载服务调用量数据文件URL
     *  *
     * @param DescribeServiceConsumeDownloadUrlRequest $request DescribeServiceConsumeDownloadUrlRequest
     *
     * @return DescribeServiceConsumeDownloadUrlResponse DescribeServiceConsumeDownloadUrlResponse
     */
    public function describeServiceConsumeDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceConsumeDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取服务列表
     *  *
     * @param DescribeServiceListRequest $request DescribeServiceListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceListResponse DescribeServiceListResponse
     */
    public function describeServiceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务列表
     *  *
     * @param DescribeServiceListRequest $request DescribeServiceListRequest
     *
     * @return DescribeServiceListResponse DescribeServiceListResponse
     */
    public function describeServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceListWithOptions($request, $runtime);
    }

    /**
     * @summary 预估调用信息
     *  *
     * @param DescribeSimulationPreditInfoRequest $request DescribeSimulationPreditInfoRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSimulationPreditInfoResponse DescribeSimulationPreditInfoResponse
     */
    public function describeSimulationPreditInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->rulesStr)) {
            $query['rulesStr'] = $request->rulesStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSimulationPreditInfo',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSimulationPreditInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预估调用信息
     *  *
     * @param DescribeSimulationPreditInfoRequest $request DescribeSimulationPreditInfoRequest
     *
     * @return DescribeSimulationPreditInfoResponse DescribeSimulationPreditInfoResponse
     */
    public function describeSimulationPreditInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimulationPreditInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询任务记录数
     *  *
     * @param DescribeSimulationTaskCountRequest $request DescribeSimulationTaskCountRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSimulationTaskCountResponse DescribeSimulationTaskCountResponse
     */
    public function describeSimulationTaskCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataSourceConfig)) {
            $query['dataSourceConfig'] = $request->dataSourceConfig;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['dataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->filtersStr)) {
            $query['filtersStr'] = $request->filtersStr;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSimulationTaskCount',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSimulationTaskCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务记录数
     *  *
     * @param DescribeSimulationTaskCountRequest $request DescribeSimulationTaskCountRequest
     *
     * @return DescribeSimulationTaskCountResponse DescribeSimulationTaskCountResponse
     */
    public function describeSimulationTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimulationTaskCountWithOptions($request, $runtime);
    }

    /**
     * @summary 任务列表
     *  *
     * @param DescribeSimulationTaskListRequest $request DescribeSimulationTaskListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSimulationTaskListResponse DescribeSimulationTaskListResponse
     */
    public function describeSimulationTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSimulationTaskList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSimulationTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 任务列表
     *  *
     * @param DescribeSimulationTaskListRequest $request DescribeSimulationTaskListRequest
     *
     * @return DescribeSimulationTaskListResponse DescribeSimulationTaskListResponse
     */
    public function describeSimulationTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimulationTaskListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取project配置
     *  *
     * @param DescribeSlsUrlConfigRequest $request DescribeSlsUrlConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsUrlConfigResponse DescribeSlsUrlConfigResponse
     */
    public function describeSlsUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsUrlConfig',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlsUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取project配置
     *  *
     * @param DescribeSlsUrlConfigRequest $request DescribeSlsUrlConfigRequest
     *
     * @return DescribeSlsUrlConfigResponse DescribeSlsUrlConfigResponse
     */
    public function describeSlsUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查询支持仿真的策略列表
     *  *
     * @param DescribeSupportRuleListRequest $request DescribeSupportRuleListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSupportRuleListResponse DescribeSupportRuleListResponse
     */
    public function describeSupportRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSupportRuleList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询支持仿真的策略列表
     *  *
     * @param DescribeSupportRuleListRequest $request DescribeSupportRuleListRequest
     *
     * @return DescribeSupportRuleListResponse DescribeSupportRuleListResponse
     */
    public function describeSupportRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary 标签列表
     *  *
     * @param DescribeTagListRequest $request DescribeTagListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagListResponse DescribeTagListResponse
     */
    public function describeTagListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['RegId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 标签列表
     *  *
     * @param DescribeTagListRequest $request DescribeTagListRequest
     *
     * @return DescribeTagListResponse DescribeTagListResponse
     */
    public function describeTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagListWithOptions($request, $runtime);
    }

    /**
     * @summary 标签概览列表
     *  *
     * @param DescribeTagsBarChartRequest $request DescribeTagsBarChartRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsBarChartResponse DescribeTagsBarChartResponse
     */
    public function describeTagsBarChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->result)) {
            $query['result'] = $request->result;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagsBarChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsBarChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 标签概览列表
     *  *
     * @param DescribeTagsBarChartRequest $request DescribeTagsBarChartRequest
     *
     * @return DescribeTagsBarChartResponse DescribeTagsBarChartResponse
     */
    public function describeTagsBarChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsBarChartWithOptions($request, $runtime);
    }

    /**
     * @summary 标签波动检测
     *  *
     * @param DescribeTagsFluctuationRequest $request DescribeTagsFluctuationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsFluctuationResponse DescribeTagsFluctuationResponse
     */
    public function describeTagsFluctuationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagsFluctuation',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsFluctuationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 标签波动检测
     *  *
     * @param DescribeTagsFluctuationRequest $request DescribeTagsFluctuationRequest
     *
     * @return DescribeTagsFluctuationResponse DescribeTagsFluctuationResponse
     */
    public function describeTagsFluctuation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsFluctuationWithOptions($request, $runtime);
    }

    /**
     * @summary 获取标签列表
     *  *
     * @param DescribeTagsListRequest $request DescribeTagsListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsListResponse DescribeTagsListResponse
     */
    public function describeTagsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagsList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取标签列表
     *  *
     * @param DescribeTagsListRequest $request DescribeTagsListRequest
     *
     * @return DescribeTagsListResponse DescribeTagsListResponse
     */
    public function describeTagsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsListWithOptions($request, $runtime);
    }

    /**
     * @summary 标签命中数量分析
     *  *
     * @param DescribeTagsNumLineChartRequest $request DescribeTagsNumLineChartRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsNumLineChartResponse DescribeTagsNumLineChartResponse
     */
    public function describeTagsNumLineChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->byPassEventCodes)) {
            $query['byPassEventCodes'] = $request->byPassEventCodes;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mainEventCodes)) {
            $query['mainEventCodes'] = $request->mainEventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->shuntEventCodes)) {
            $query['shuntEventCodes'] = $request->shuntEventCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagsNumLineChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsNumLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 标签命中数量分析
     *  *
     * @param DescribeTagsNumLineChartRequest $request DescribeTagsNumLineChartRequest
     *
     * @return DescribeTagsNumLineChartResponse DescribeTagsNumLineChartResponse
     */
    public function describeTagsNumLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsNumLineChartWithOptions($request, $runtime);
    }

    /**
     * @summary 标签命中占比分析
     *  *
     * @param DescribeTagsRatioLineChartRequest $request DescribeTagsRatioLineChartRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsRatioLineChartResponse DescribeTagsRatioLineChartResponse
     */
    public function describeTagsRatioLineChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->byPassEventCodes)) {
            $query['byPassEventCodes'] = $request->byPassEventCodes;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mainEventCodes)) {
            $query['mainEventCodes'] = $request->mainEventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->shuntEventCodes)) {
            $query['shuntEventCodes'] = $request->shuntEventCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagsRatioLineChart',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsRatioLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 标签命中占比分析
     *  *
     * @param DescribeTagsRatioLineChartRequest $request DescribeTagsRatioLineChartRequest
     *
     * @return DescribeTagsRatioLineChartResponse DescribeTagsRatioLineChartResponse
     */
    public function describeTagsRatioLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsRatioLineChartWithOptions($request, $runtime);
    }

    /**
     * @summary 标签命中趋势
     *  *
     * @param DescribeTagsTrendRequest $request DescribeTagsTrendRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsTrendResponse DescribeTagsTrendResponse
     */
    public function describeTagsTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->result)) {
            $query['result'] = $request->result;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagsTrend',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 标签命中趋势
     *  *
     * @param DescribeTagsTrendRequest $request DescribeTagsTrendRequest
     *
     * @return DescribeTagsTrendResponse DescribeTagsTrendResponse
     */
    public function describeTagsTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsTrendWithOptions($request, $runtime);
    }

    /**
     * @summary 任务列表
     *  *
     * @param DescribeTaskListRequest $request DescribeTaskListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskListResponse DescribeTaskListResponse
     */
    public function describeTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->isPage)) {
            $query['IsPage'] = $request->isPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTaskList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 任务列表
     *  *
     * @param DescribeTaskListRequest $request DescribeTaskListRequest
     *
     * @return DescribeTaskListResponse DescribeTaskListResponse
     */
    public function describeTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskListWithOptions($request, $runtime);
    }

    /**
     * @summary 任务日志列表
     *  *
     * @param DescribeTaskLogListRequest $request DescribeTaskLogListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskLogListResponse DescribeTaskLogListResponse
     */
    public function describeTaskLogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->isPage)) {
            $query['IsPage'] = $request->isPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskLogId)) {
            $query['TaskLogId'] = $request->taskLogId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTaskLogList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 任务日志列表
     *  *
     * @param DescribeTaskLogListRequest $request DescribeTaskLogListRequest
     *
     * @return DescribeTaskLogListResponse DescribeTaskLogListResponse
     */
    public function describeTaskLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskLogListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件模版详情
     *  *
     * @param DescribeTemplateBaseInfoByTemplateIdRequest $request DescribeTemplateBaseInfoByTemplateIdRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplateBaseInfoByTemplateIdResponse DescribeTemplateBaseInfoByTemplateIdResponse
     */
    public function describeTemplateBaseInfoByTemplateIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['templateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateBaseInfoByTemplateId',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplateBaseInfoByTemplateIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件模版详情
     *  *
     * @param DescribeTemplateBaseInfoByTemplateIdRequest $request DescribeTemplateBaseInfoByTemplateIdRequest
     *
     * @return DescribeTemplateBaseInfoByTemplateIdResponse DescribeTemplateBaseInfoByTemplateIdResponse
     */
    public function describeTemplateBaseInfoByTemplateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateBaseInfoByTemplateIdWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件总数量
     *  *
     * @param DescribeTemplateCountRequest $request DescribeTemplateCountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplateCountResponse DescribeTemplateCountResponse
     */
    public function describeTemplateCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateCount',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplateCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件总数量
     *  *
     * @param DescribeTemplateCountRequest $request DescribeTemplateCountRequest
     *
     * @return DescribeTemplateCountResponse DescribeTemplateCountResponse
     */
    public function describeTemplateCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateCountWithOptions($request, $runtime);
    }

    /**
     * @summary 模版下载
     *  *
     * @param DescribeTemplateDownloadRequest $request DescribeTemplateDownloadRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplateDownloadResponse DescribeTemplateDownloadResponse
     */
    public function describeTemplateDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateDownload',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplateDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 模版下载
     *  *
     * @param DescribeTemplateDownloadRequest $request DescribeTemplateDownloadRequest
     *
     * @return DescribeTemplateDownloadResponse DescribeTemplateDownloadResponse
     */
    public function describeTemplateDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateDownloadWithOptions($request, $runtime);
    }

    /**
     * @summary 根据事件名称查询事件列表
     *  *
     * @param DescribeTemplatePageListRequest $request DescribeTemplatePageListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplatePageListResponse DescribeTemplatePageListResponse
     */
    public function describeTemplatePageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['templateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateSearchItem)) {
            $query['templateSearchItem'] = $request->templateSearchItem;
        }
        if (!Utils::isUnset($request->templateStatus)) {
            $query['templateStatus'] = $request->templateStatus;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['templateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplatePageList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplatePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据事件名称查询事件列表
     *  *
     * @param DescribeTemplatePageListRequest $request DescribeTemplatePageListRequest
     *
     * @return DescribeTemplatePageListResponse DescribeTemplatePageListResponse
     */
    public function describeTemplatePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatePageListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户使用过服务列表
     *  *
     * @param DescribeUsedServiceRequest $request DescribeUsedServiceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsedServiceResponse DescribeUsedServiceResponse
     */
    public function describeUsedServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsedService',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUsedServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户使用过服务列表
     *  *
     * @param DescribeUsedServiceRequest $request DescribeUsedServiceRequest
     *
     * @return DescribeUsedServiceResponse DescribeUsedServiceResponse
     */
    public function describeUsedService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsedServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取当前登录用户信息
     *  *
     * @param DescribeUserInfoRequest $request DescribeUserInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserInfoResponse DescribeUserInfoResponse
     */
    public function describeUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserInfo',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前登录用户信息
     *  *
     * @param DescribeUserInfoRequest $request DescribeUserInfoRequest
     *
     * @return DescribeUserInfoResponse DescribeUserInfoResponse
     */
    public function describeUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量绑定信息
     *  *
     * @param DescribeVariableBindDetailRequest $request DescribeVariableBindDetailRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVariableBindDetailResponse DescribeVariableBindDetailResponse
     */
    public function describeVariableBindDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->defineId)) {
            $query['defineId'] = $request->defineId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVariableBindDetail',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVariableBindDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量绑定信息
     *  *
     * @param DescribeVariableBindDetailRequest $request DescribeVariableBindDetailRequest
     *
     * @return DescribeVariableBindDetailResponse DescribeVariableBindDetailResponse
     */
    public function describeVariableBindDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableBindDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量详情
     *  *
     * @param DescribeVariableDetailRequest $request DescribeVariableDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVariableDetailResponse DescribeVariableDetailResponse
     */
    public function describeVariableDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVariableDetail',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVariableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量详情
     *  *
     * @param DescribeVariableDetailRequest $request DescribeVariableDetailRequest
     *
     * @return DescribeVariableDetailResponse DescribeVariableDetailResponse
     */
    public function describeVariableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量收费信息
     *  *
     * @param DescribeVariableFeeRequest $request DescribeVariableFeeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVariableFeeResponse DescribeVariableFeeResponse
     */
    public function describeVariableFeeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVariableFee',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVariableFeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量收费信息
     *  *
     * @param DescribeVariableFeeRequest $request DescribeVariableFeeRequest
     *
     * @return DescribeVariableFeeResponse DescribeVariableFeeResponse
     */
    public function describeVariableFee($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableFeeWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量详情
     *  *
     * @param DescribeVariableListRequest $request DescribeVariableListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVariableListResponse DescribeVariableListResponse
     */
    public function describeVariableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->refObjId)) {
            $query['refObjId'] = $request->refObjId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['sourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->typesStr)) {
            $query['typesStr'] = $request->typesStr;
        }
        if (!Utils::isUnset($request->value)) {
            $query['value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVariableList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVariableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量详情
     *  *
     * @param DescribeVariableListRequest $request DescribeVariableListRequest
     *
     * @return DescribeVariableListResponse DescribeVariableListResponse
     */
    public function describeVariableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量定义
     *  *
     * @param DescribeVariableMarketListRequest $request DescribeVariableMarketListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVariableMarketListResponse DescribeVariableMarketListResponse
     */
    public function describeVariableMarketListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->chargingMode)) {
            $query['chargingMode'] = $request->chargingMode;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paging)) {
            $query['paging'] = $request->paging;
        }
        if (!Utils::isUnset($request->queryContent)) {
            $query['queryContent'] = $request->queryContent;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scenesStr)) {
            $query['scenesStr'] = $request->scenesStr;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVariableMarketList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVariableMarketListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量定义
     *  *
     * @param DescribeVariableMarketListRequest $request DescribeVariableMarketListRequest
     *
     * @return DescribeVariableMarketListResponse DescribeVariableMarketListResponse
     */
    public function describeVariableMarketList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableMarketListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询配置信息
     *  *
     * @param DescribeVariableSceneListRequest $request DescribeVariableSceneListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVariableSceneListResponse DescribeVariableSceneListResponse
     */
    public function describeVariableSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['bizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->configKey)) {
            $query['configKey'] = $request->configKey;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['currentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paging)) {
            $query['paging'] = $request->paging;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVariableSceneList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVariableSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询配置信息
     *  *
     * @param DescribeVariableSceneListRequest $request DescribeVariableSceneListRequest
     *
     * @return DescribeVariableSceneListResponse DescribeVariableSceneListResponse
     */
    public function describeVariableSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableSceneListWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义变量测试
     *  *
     * @param ExpressionTestRequest $request ExpressionTestRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ExpressionTestResponse ExpressionTestResponse
     */
    public function expressionTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->expressionVariable)) {
            $query['expressionVariable'] = $request->expressionVariable;
        }
        if (!Utils::isUnset($request->expressionVariableIds)) {
            $query['expressionVariableIds'] = $request->expressionVariableIds;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExpressionTest',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExpressionTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义变量测试
     *  *
     * @param ExpressionTestRequest $request ExpressionTestRequest
     *
     * @return ExpressionTestResponse ExpressionTestResponse
     */
    public function expressionTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expressionTestWithOptions($request, $runtime);
    }

    /**
     * @summary 文件上传
     *  *
     * @param FileUploadRequest $request FileUploadRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return FileUploadResponse FileUploadResponse
     */
    public function fileUploadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->tab)) {
            $query['Tab'] = $request->tab;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FileUpload',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FileUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文件上传
     *  *
     * @param FileUploadRequest $request FileUploadRequest
     *
     * @return FileUploadResponse FileUploadResponse
     */
    public function fileUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fileUploadWithOptions($request, $runtime);
    }

    /**
     * @summary 创建或导入名单
     *  *
     * @param ImportNameListRequest $request ImportNameListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportNameListResponse ImportNameListResponse
     */
    public function importNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->data)) {
            $query['data'] = $request->data;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->importType)) {
            $query['importType'] = $request->importType;
        }
        if (!Utils::isUnset($request->nameListType)) {
            $query['nameListType'] = $request->nameListType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        if (!Utils::isUnset($request->variableId)) {
            $query['variableId'] = $request->variableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportNameList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建或导入名单
     *  *
     * @param ImportNameListRequest $request ImportNameListRequest
     *
     * @return ImportNameListResponse ImportNameListResponse
     */
    public function importNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importNameListWithOptions($request, $runtime);
    }

    /**
     * @summary 导入模板事件
     *  *
     * @param ImportTemplateEventRequest $request ImportTemplateEventRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportTemplateEventResponse ImportTemplateEventResponse
     */
    public function importTemplateEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventTemplateIds)) {
            $query['eventTemplateIds'] = $request->eventTemplateIds;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportTemplateEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportTemplateEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导入模板事件
     *  *
     * @param ImportTemplateEventRequest $request ImportTemplateEventRequest
     *
     * @return ImportTemplateEventResponse ImportTemplateEventResponse
     */
    public function importTemplateEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importTemplateEventWithOptions($request, $runtime);
    }

    /**
     * @summary 更新备注
     *  *
     * @param ModifyAppKeyRequest $request ModifyAppKeyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppKeyResponse ModifyAppKeyResponse
     */
    public function modifyAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['appKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppKey',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新备注
     *  *
     * @param ModifyAppKeyRequest $request ModifyAppKeyRequest
     *
     * @return ModifyAppKeyResponse ModifyAppKeyResponse
     */
    public function modifyAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑累计变量
     *  *
     * @param ModifyCustVariableRequest $request ModifyCustVariableRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCustVariableResponse ModifyCustVariableResponse
     */
    public function modifyCustVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->dataVersion)) {
            $query['dataVersion'] = $request->dataVersion;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCodes)) {
            $query['eventCodes'] = $request->eventCodes;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCustVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCustVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑累计变量
     *  *
     * @param ModifyCustVariableRequest $request ModifyCustVariableRequest
     *
     * @return ModifyCustVariableResponse ModifyCustVariableResponse
     */
    public function modifyCustVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑事件
     *  *
     * @param ModifyEventRequest $request ModifyEventRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEventResponse ModifyEventResponse
     */
    public function modifyEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->bizVersion)) {
            $query['bizVersion'] = $request->bizVersion;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->inputFieldsStr)) {
            $query['inputFieldsStr'] = $request->inputFieldsStr;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['templateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑事件
     *  *
     * @param ModifyEventRequest $request ModifyEventRequest
     *
     * @return ModifyEventResponse ModifyEventResponse
     */
    public function modifyEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventWithOptions($request, $runtime);
    }

    /**
     * @summary 修改事件状态
     *  *
     * @param ModifyEventStatusRequest $request ModifyEventStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEventStatusResponse ModifyEventStatusResponse
     */
    public function modifyEventStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->fromEventSatus)) {
            $query['fromEventSatus'] = $request->fromEventSatus;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->toEventSatus)) {
            $query['toEventSatus'] = $request->toEventSatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEventStatus',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEventStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改事件状态
     *  *
     * @param ModifyEventStatusRequest $request ModifyEventStatusRequest
     *
     * @return ModifyEventStatusResponse ModifyEventStatusResponse
     */
    public function modifyEventStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑自定义变量
     *  *
     * @param ModifyExpressionVariableRequest $request ModifyExpressionVariableRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyExpressionVariableResponse ModifyExpressionVariableResponse
     */
    public function modifyExpressionVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataVersion)) {
            $query['dataVersion'] = $request->dataVersion;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->expressionTitle)) {
            $query['expressionTitle'] = $request->expressionTitle;
        }
        if (!Utils::isUnset($request->expressionVariable)) {
            $query['expressionVariable'] = $request->expressionVariable;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->outlier)) {
            $query['outlier'] = $request->outlier;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyExpressionVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyExpressionVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑自定义变量
     *  *
     * @param ModifyExpressionVariableRequest $request ModifyExpressionVariableRequest
     *
     * @return ModifyExpressionVariableResponse ModifyExpressionVariableResponse
     */
    public function modifyExpressionVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressionVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 修改字段
     *  *
     * @param ModifyFieldRequest $request ModifyFieldRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFieldResponse ModifyFieldResponse
     */
    public function modifyFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->classify)) {
            $query['classify'] = $request->classify;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enumData)) {
            $query['enumData'] = $request->enumData;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyField',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改字段
     *  *
     * @param ModifyFieldRequest $request ModifyFieldRequest
     *
     * @return ModifyFieldResponse ModifyFieldResponse
     */
    public function modifyField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFieldWithOptions($request, $runtime);
    }

    /**
     * @summary 修改poc任务
     *  *
     * @param ModifyPocTaskRequest $request ModifyPocTaskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPocTaskResponse ModifyPocTaskResponse
     */
    public function modifyPocTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->accessType)) {
            $query['accessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->config)) {
            $query['config'] = $request->config;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['fileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['fileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['serviceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['taskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPocTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPocTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改poc任务
     *  *
     * @param ModifyPocTaskRequest $request ModifyPocTaskRequest
     *
     * @return ModifyPocTaskResponse ModifyPocTaskResponse
     */
    public function modifyPocTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPocTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 策略修改优先级
     *  *
     * @param ModifyRulePriorityRequest $request ModifyRulePriorityRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRulePriorityResponse ModifyRulePriorityResponse
     */
    public function modifyRulePriorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRulePriority',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRulePriorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 策略修改优先级
     *  *
     * @param ModifyRulePriorityRequest $request ModifyRulePriorityRequest
     *
     * @return ModifyRulePriorityResponse ModifyRulePriorityResponse
     */
    public function modifyRulePriority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRulePriorityWithOptions($request, $runtime);
    }

    /**
     * @summary 策略版本申请状态变更
     *  *
     * @param ModifyRuleStatusRequest $request ModifyRuleStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRuleStatusResponse ModifyRuleStatusResponse
     */
    public function modifyRuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->applyUserId)) {
            $query['applyUserId'] = $request->applyUserId;
        }
        if (!Utils::isUnset($request->applyUserName)) {
            $query['applyUserName'] = $request->applyUserName;
        }
        if (!Utils::isUnset($request->auditRemark)) {
            $query['auditRemark'] = $request->auditRemark;
        }
        if (!Utils::isUnset($request->auditUserId)) {
            $query['auditUserId'] = $request->auditUserId;
        }
        if (!Utils::isUnset($request->auditUserName)) {
            $query['auditUserName'] = $request->auditUserName;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['eventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleAuditType)) {
            $query['ruleAuditType'] = $request->ruleAuditType;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleVersionId)) {
            $query['ruleVersionId'] = $request->ruleVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRuleStatus',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 策略版本申请状态变更
     *  *
     * @param ModifyRuleStatusRequest $request ModifyRuleStatusRequest
     *
     * @return ModifyRuleStatusResponse ModifyRuleStatusResponse
     */
    public function modifyRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改模版
     *  *
     * @param ModifyTemplateRequest $request ModifyTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTemplateResponse ModifyTemplateResponse
     */
    public function modifyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->inputFields)) {
            $query['inputFields'] = $request->inputFields;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['templateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['templateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTemplate',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改模版
     *  *
     * @param ModifyTemplateRequest $request ModifyTemplateRequest
     *
     * @return ModifyTemplateResponse ModifyTemplateResponse
     */
    public function modifyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新模版状态
     *  *
     * @param ModifyTemplateStatusRequest $request ModifyTemplateStatusRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTemplateStatusResponse ModifyTemplateStatusResponse
     */
    public function modifyTemplateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->fromTemplateSatus)) {
            $query['fromTemplateSatus'] = $request->fromTemplateSatus;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['templateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->toTemplateSatus)) {
            $query['toTemplateSatus'] = $request->toTemplateSatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTemplateStatus',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTemplateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新模版状态
     *  *
     * @param ModifyTemplateStatusRequest $request ModifyTemplateStatusRequest
     *
     * @return ModifyTemplateStatusResponse ModifyTemplateStatusResponse
     */
    public function modifyTemplateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改变量信息
     *  *
     * @param ModifyVariableRequest $request ModifyVariableRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVariableResponse ModifyVariableResponse
     */
    public function modifyVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改变量信息
     *  *
     * @param ModifyVariableRequest $request ModifyVariableRequest
     *
     * @return ModifyVariableResponse ModifyVariableResponse
     */
    public function modifyVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 开通服务
     *  *
     * @param OpenConsoleSlsRequest $request OpenConsoleSlsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenConsoleSlsResponse OpenConsoleSlsResponse
     */
    public function openConsoleSlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenConsoleSls',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenConsoleSlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开通服务
     *  *
     * @param OpenConsoleSlsRequest $request OpenConsoleSlsRequest
     *
     * @return OpenConsoleSlsResponse OpenConsoleSlsResponse
     */
    public function openConsoleSls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openConsoleSlsWithOptions($request, $runtime);
    }

    /**
     * @summary 操作收藏
     *  *
     * @param OperateFavoriteVariableRequest $request OperateFavoriteVariableRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateFavoriteVariableResponse OperateFavoriteVariableResponse
     */
    public function operateFavoriteVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->operate)) {
            $query['operate'] = $request->operate;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateFavoriteVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateFavoriteVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 操作收藏
     *  *
     * @param OperateFavoriteVariableRequest $request OperateFavoriteVariableRequest
     *
     * @return OperateFavoriteVariableResponse OperateFavoriteVariableResponse
     */
    public function operateFavoriteVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateFavoriteVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 企业认证
     *  *
     * @param PermissionCheckRequest $request PermissionCheckRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PermissionCheckResponse PermissionCheckResponse
     */
    public function permissionCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['RegId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PermissionCheck',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PermissionCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 企业认证
     *  *
     * @param PermissionCheckRequest $request PermissionCheckRequest
     *
     * @return PermissionCheckResponse PermissionCheckResponse
     */
    public function permissionCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->permissionCheckWithOptions($request, $runtime);
    }

    /**
     * @summary 白盒化策略详情查询
     *  *
     * @param QueryAuthRuleDetailByRuleIdRequest $request QueryAuthRuleDetailByRuleIdRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAuthRuleDetailByRuleIdResponse QueryAuthRuleDetailByRuleIdResponse
     */
    public function queryAuthRuleDetailByRuleIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleVersionId)) {
            $query['ruleVersionId'] = $request->ruleVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAuthRuleDetailByRuleId',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAuthRuleDetailByRuleIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 白盒化策略详情查询
     *  *
     * @param QueryAuthRuleDetailByRuleIdRequest $request QueryAuthRuleDetailByRuleIdRequest
     *
     * @return QueryAuthRuleDetailByRuleIdResponse QueryAuthRuleDetailByRuleIdResponse
     */
    public function queryAuthRuleDetailByRuleId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuthRuleDetailByRuleIdWithOptions($request, $runtime);
    }

    /**
     * @summary 获取授权用户名
     *  *
     * @param QueryAuthUserNameRequest $request QueryAuthUserNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAuthUserNameResponse QueryAuthUserNameResponse
     */
    public function queryAuthUserNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->bindId)) {
            $query['bindId'] = $request->bindId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAuthUserName',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAuthUserNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取授权用户名
     *  *
     * @param QueryAuthUserNameRequest $request QueryAuthUserNameRequest
     *
     * @return QueryAuthUserNameResponse QueryAuthUserNameResponse
     */
    public function queryAuthUserName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuthUserNameWithOptions($request, $runtime);
    }

    /**
     * @summary 事件模版授权用户列表
     *  *
     * @param QueryAuthorizationUserListRequest $request QueryAuthorizationUserListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAuthorizationUserListResponse QueryAuthorizationUserListResponse
     */
    public function queryAuthorizationUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAuthorizationUserList',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAuthorizationUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 事件模版授权用户列表
     *  *
     * @param QueryAuthorizationUserListRequest $request QueryAuthorizationUserListRequest
     *
     * @return QueryAuthorizationUserListResponse QueryAuthorizationUserListResponse
     */
    public function queryAuthorizationUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuthorizationUserListWithOptions($request, $runtime);
    }

    /**
     * @summary 撤回
     *  *
     * @param RecallRuleAuditRequest $request RecallRuleAuditRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RecallRuleAuditResponse RecallRuleAuditResponse
     */
    public function recallRuleAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecallRuleAudit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecallRuleAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 撤回
     *  *
     * @param RecallRuleAuditRequest $request RecallRuleAuditRequest
     *
     * @return RecallRuleAuditResponse RecallRuleAuditResponse
     */
    public function recallRuleAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recallRuleAuditWithOptions($request, $runtime);
    }

    /**
     * @summary 删除事件
     *  *
     * @param RemoveEventRequest $request RemoveEventRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveEventResponse RemoveEventResponse
     */
    public function removeEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['createType'] = $request->createType;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['templateCode'] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除事件
     *  *
     * @param RemoveEventRequest $request RemoveEventRequest
     *
     * @return RemoveEventResponse RemoveEventResponse
     */
    public function removeEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEventWithOptions($request, $runtime);
    }

    /**
     * @summary 删除模版事件
     *  *
     * @param RemoveTemplateRequest $request RemoveTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTemplateResponse RemoveTemplateResponse
     */
    public function removeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['templateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTemplate',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除模版事件
     *  *
     * @param RemoveTemplateRequest $request RemoveTemplateRequest
     *
     * @return RemoveTemplateResponse RemoveTemplateResponse
     */
    public function removeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 模板下载
     *  *
     * @param SampleFileDownloadRequest $request SampleFileDownloadRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SampleFileDownloadResponse SampleFileDownloadResponse
     */
    public function sampleFileDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['RegId'] = $request->regId;
        }
        if (!Utils::isUnset($request->tab)) {
            $query['Tab'] = $request->tab;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SampleFileDownload',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SampleFileDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 模板下载
     *  *
     * @param SampleFileDownloadRequest $request SampleFileDownloadRequest
     *
     * @return SampleFileDownloadResponse SampleFileDownloadResponse
     */
    public function sampleFileDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sampleFileDownloadWithOptions($request, $runtime);
    }

    /**
     * @summary 保存自定义列
     *  *
     * @param SaveAnalysisColumnRequest $request SaveAnalysisColumnRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveAnalysisColumnResponse SaveAnalysisColumnResponse
     */
    public function saveAnalysisColumnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->columns)) {
            $query['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveAnalysisColumn',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveAnalysisColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保存自定义列
     *  *
     * @param SaveAnalysisColumnRequest $request SaveAnalysisColumnRequest
     *
     * @return SaveAnalysisColumnResponse SaveAnalysisColumnResponse
     */
    public function saveAnalysisColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAnalysisColumnWithOptions($request, $runtime);
    }

    /**
     * @summary 旁路/分流配置
     *  *
     * @param SaveByPassOrShuntEventRequest $request SaveByPassOrShuntEventRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveByPassOrShuntEventResponse SaveByPassOrShuntEventResponse
     */
    public function saveByPassOrShuntEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['eventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['eventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['eventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveByPassOrShuntEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveByPassOrShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 旁路/分流配置
     *  *
     * @param SaveByPassOrShuntEventRequest $request SaveByPassOrShuntEventRequest
     *
     * @return SaveByPassOrShuntEventResponse SaveByPassOrShuntEventResponse
     */
    public function saveByPassOrShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveByPassOrShuntEventWithOptions($request, $runtime);
    }

    /**
     * @summary 开启/停止旁路事件
     *  *
     * @param StartOrStopByPassShuntEventRequest $request StartOrStopByPassShuntEventRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return StartOrStopByPassShuntEventResponse StartOrStopByPassShuntEventResponse
     */
    public function startOrStopByPassShuntEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['eventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartOrStopByPassShuntEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartOrStopByPassShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启/停止旁路事件
     *  *
     * @param StartOrStopByPassShuntEventRequest $request StartOrStopByPassShuntEventRequest
     *
     * @return StartOrStopByPassShuntEventResponse StartOrStopByPassShuntEventResponse
     */
    public function startOrStopByPassShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startOrStopByPassShuntEventWithOptions($request, $runtime);
    }

    /**
     * @summary 开始执行任务
     *  *
     * @param StartSimulationTaskRequest $request StartSimulationTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartSimulationTaskResponse StartSimulationTaskResponse
     */
    public function startSimulationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartSimulationTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSimulationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开始执行任务
     *  *
     * @param StartSimulationTaskRequest $request StartSimulationTaskRequest
     *
     * @return StartSimulationTaskResponse StartSimulationTaskResponse
     */
    public function startSimulationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSimulationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 停止任务
     *  *
     * @param StopSimulationTaskRequest $request StopSimulationTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StopSimulationTaskResponse StopSimulationTaskResponse
     */
    public function stopSimulationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopSimulationTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopSimulationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止任务
     *  *
     * @param StopSimulationTaskRequest $request StopSimulationTaskRequest
     *
     * @return StopSimulationTaskResponse StopSimulationTaskResponse
     */
    public function stopSimulationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopSimulationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 批量创建策略
     *  *
     * @param SubmitImportTaskRequest $request SubmitImportTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitImportTaskResponse SubmitImportTaskResponse
     */
    public function submitImportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->url)) {
            $query['url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitImportTask',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitImportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量创建策略
     *  *
     * @param SubmitImportTaskRequest $request SubmitImportTaskRequest
     *
     * @return SubmitImportTaskResponse SubmitImportTaskResponse
     */
    public function submitImportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitImportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义变量开关
     *  *
     * @param SwitchExpressionVariableRequest $request SwitchExpressionVariableRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchExpressionVariableResponse SwitchExpressionVariableResponse
     */
    public function switchExpressionVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataVersion)) {
            $query['dataVersion'] = $request->dataVersion;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchExpressionVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchExpressionVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义变量开关
     *  *
     * @param SwitchExpressionVariableRequest $request SwitchExpressionVariableRequest
     *
     * @return SwitchExpressionVariableResponse SwitchExpressionVariableResponse
     */
    public function switchExpressionVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchExpressionVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 字段开关
     *  *
     * @param SwitchFieldRequest $request SwitchFieldRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchFieldResponse SwitchFieldResponse
     */
    public function switchFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchField',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 字段开关
     *  *
     * @param SwitchFieldRequest $request SwitchFieldRequest
     *
     * @return SwitchFieldResponse SwitchFieldResponse
     */
    public function switchField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchFieldWithOptions($request, $runtime);
    }

    /**
     * @summary 查询变量启用/禁用
     *  *
     * @param SwitchQueryVariableRequest $request SwitchQueryVariableRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchQueryVariableResponse SwitchQueryVariableResponse
     */
    public function switchQueryVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchQueryVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchQueryVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变量启用/禁用
     *  *
     * @param SwitchQueryVariableRequest $request SwitchQueryVariableRequest
     *
     * @return SwitchQueryVariableResponse SwitchQueryVariableResponse
     */
    public function switchQueryVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchQueryVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 一键切换上线
     *  *
     * @param SwitchToOnlineRequest $request SwitchToOnlineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchToOnlineResponse SwitchToOnlineResponse
     */
    public function switchToOnlineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['eventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchToOnline',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchToOnlineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 一键切换上线
     *  *
     * @param SwitchToOnlineRequest $request SwitchToOnlineRequest
     *
     * @return SwitchToOnlineResponse SwitchToOnlineResponse
     */
    public function switchToOnline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchToOnlineWithOptions($request, $runtime);
    }

    /**
     * @summary 累计变量开关
     *  *
     * @param SwitchVariableRequest $request SwitchVariableRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchVariableResponse SwitchVariableResponse
     */
    public function switchVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataVersion)) {
            $query['dataVersion'] = $request->dataVersion;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 累计变量开关
     *  *
     * @param SwitchVariableRequest $request SwitchVariableRequest
     *
     * @return SwitchVariableResponse SwitchVariableResponse
     */
    public function switchVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 判断任务名是否重复
     *  *
     * @param TaskNameByUserIdRequest $request TaskNameByUserIdRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TaskNameByUserIdResponse TaskNameByUserIdResponse
     */
    public function taskNameByUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['RegId'] = $request->regId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TaskNameByUserId',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TaskNameByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 判断任务名是否重复
     *  *
     * @param TaskNameByUserIdRequest $request TaskNameByUserIdRequest
     *
     * @return TaskNameByUserIdResponse TaskNameByUserIdResponse
     */
    public function taskNameByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskNameByUserIdWithOptions($request, $runtime);
    }

    /**
     * @summary 修改查询条件
     *  *
     * @param UpdateAnalysisConditionFavoriteRequest $request UpdateAnalysisConditionFavoriteRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAnalysisConditionFavoriteResponse UpdateAnalysisConditionFavoriteResponse
     */
    public function updateAnalysisConditionFavoriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->eventBeginTime)) {
            $query['eventBeginTime'] = $request->eventBeginTime;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->eventEndTime)) {
            $query['eventEndTime'] = $request->eventEndTime;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $query['fieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['fieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAnalysisConditionFavorite',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAnalysisConditionFavoriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改查询条件
     *  *
     * @param UpdateAnalysisConditionFavoriteRequest $request UpdateAnalysisConditionFavoriteRequest
     *
     * @return UpdateAnalysisConditionFavoriteResponse UpdateAnalysisConditionFavoriteResponse
     */
    public function updateAnalysisConditionFavorite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAnalysisConditionFavoriteWithOptions($request, $runtime);
    }

    /**
     * @summary 审批
     *  *
     * @param UpdateAuditRequest $request UpdateAuditRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAuditResponse UpdateAuditResponse
     */
    public function updateAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->auditMsg)) {
            $query['auditMsg'] = $request->auditMsg;
        }
        if (!Utils::isUnset($request->auditRelationType)) {
            $query['auditRelationType'] = $request->auditRelationType;
        }
        if (!Utils::isUnset($request->auditStatus)) {
            $query['auditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAudit',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 审批
     *  *
     * @param UpdateAuditRequest $request UpdateAuditRequest
     *
     * @return UpdateAuditResponse UpdateAuditResponse
     */
    public function updateAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuditWithOptions($request, $runtime);
    }

    /**
     * @summary 修改授权策略
     *  *
     * @param UpdateAuthRuleRequest $request UpdateAuthRuleRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAuthRuleResponse UpdateAuthRuleResponse
     */
    public function updateAuthRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleActions)) {
            $query['ruleActions'] = $request->ruleActions;
        }
        if (!Utils::isUnset($request->ruleExpressions)) {
            $query['ruleExpressions'] = $request->ruleExpressions;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleVersionId)) {
            $query['ruleVersionId'] = $request->ruleVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthRule',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改授权策略
     *  *
     * @param UpdateAuthRuleRequest $request UpdateAuthRuleRequest
     *
     * @return UpdateAuthRuleResponse UpdateAuthRuleResponse
     */
    public function updateAuthRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑旁路事件
     *  *
     * @param UpdateByPassShuntEventRequest $request UpdateByPassShuntEventRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateByPassShuntEventResponse UpdateByPassShuntEventResponse
     */
    public function updateByPassShuntEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['eventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['eventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateByPassShuntEvent',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateByPassShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑旁路事件
     *  *
     * @param UpdateByPassShuntEventRequest $request UpdateByPassShuntEventRequest
     *
     * @return UpdateByPassShuntEventResponse UpdateByPassShuntEventResponse
     */
    public function updateByPassShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateByPassShuntEventWithOptions($request, $runtime);
    }

    /**
     * @summary 修改数据源
     *  *
     * @param UpdateDataSourceRequest $request UpdateDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDataSourceResponse UpdateDataSourceResponse
     */
    public function updateDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['ossKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataSource',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改数据源
     *  *
     * @param UpdateDataSourceRequest $request UpdateDataSourceRequest
     *
     * @return UpdateDataSourceResponse UpdateDataSourceResponse
     */
    public function updateDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义查询变量修改
     *  *
     * @param UpdateQueryVariableRequest $request UpdateQueryVariableRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateQueryVariableResponse UpdateQueryVariableResponse
     */
    public function updateQueryVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->dataSourceCode)) {
            $query['dataSourceCode'] = $request->dataSourceCode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->expressionTitle)) {
            $query['expressionTitle'] = $request->expressionTitle;
        }
        if (!Utils::isUnset($request->expressionVariable)) {
            $query['expressionVariable'] = $request->expressionVariable;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->outlier)) {
            $query['outlier'] = $request->outlier;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateQueryVariable',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateQueryVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义查询变量修改
     *  *
     * @param UpdateQueryVariableRequest $request UpdateQueryVariableRequest
     *
     * @return UpdateQueryVariableResponse UpdateQueryVariableResponse
     */
    public function updateQueryVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQueryVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 更新策略
     *  *
     * @param UpdateRuleRequest $request UpdateRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRuleResponse UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->logicExpression)) {
            $query['logicExpression'] = $request->logicExpression;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleActions)) {
            $query['ruleActions'] = $request->ruleActions;
        }
        if (!Utils::isUnset($request->ruleExpressions)) {
            $query['ruleExpressions'] = $request->ruleExpressions;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['ruleStatus'] = $request->ruleStatus;
        }
        if (!Utils::isUnset($request->ruleVersionId)) {
            $query['ruleVersionId'] = $request->ruleVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRule',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新策略
     *  *
     * @param UpdateRuleRequest $request UpdateRuleRequest
     *
     * @return UpdateRuleResponse UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 更新策略基础信息
     *  *
     * @param UpdateRuleBaseRequest $request UpdateRuleBaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRuleBaseResponse UpdateRuleBaseResponse
     */
    public function updateRuleBaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->consoleRuleId)) {
            $query['consoleRuleId'] = $request->consoleRuleId;
        }
        if (!Utils::isUnset($request->eventCode)) {
            $query['eventCode'] = $request->eventCode;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['ruleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['ruleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRuleBase',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRuleBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新策略基础信息
     *  *
     * @param UpdateRuleBaseRequest $request UpdateRuleBaseRequest
     *
     * @return UpdateRuleBaseResponse UpdateRuleBaseResponse
     */
    public function updateRuleBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleBaseWithOptions($request, $runtime);
    }

    /**
     * @summary 批量修改样本
     *  *
     * @param UpdateSampleBatchRequest $request UpdateSampleBatchRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSampleBatchResponse UpdateSampleBatchResponse
     */
    public function updateSampleBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->regId)) {
            $query['regId'] = $request->regId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->versions)) {
            $query['versions'] = $request->versions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSampleBatch',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSampleBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量修改样本
     *  *
     * @param UpdateSampleBatchRequest $request UpdateSampleBatchRequest
     *
     * @return UpdateSampleBatchResponse UpdateSampleBatchResponse
     */
    public function updateSampleBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSampleBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 单用户API创建样本
     *  *
     * @param UploadSampleApiRequest $request UploadSampleApiRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadSampleApiResponse UploadSampleApiResponse
     */
    public function uploadSampleApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->dataValue)) {
            $query['DataValue'] = $request->dataValue;
        }
        if (!Utils::isUnset($request->sampleType)) {
            $query['SampleType'] = $request->sampleType;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadSampleApi',
            'version'     => '2021-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadSampleApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 单用户API创建样本
     *  *
     * @param UploadSampleApiRequest $request UploadSampleApiRequest
     *
     * @return UploadSampleApiResponse UploadSampleApiResponse
     */
    public function uploadSampleApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadSampleApiWithOptions($request, $runtime);
    }
}
