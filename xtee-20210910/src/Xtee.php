<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Xtee\V20210910\Models\AddSampleDataByCsvRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\AddSampleDataByCsvResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\AddSampleDataByTextRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\AddSampleDataByTextResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\BatchDeleteSampleDataRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\BatchDeleteSampleDataResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\BindVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\BindVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckCopyRuleVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckCopyRuleVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckCustVariableLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckCustVariableLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckExpressionVariableLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckExpressionVariableLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckFieldLimitRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckFieldLimitResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckUsageVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckUsageVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisConditionFavoriteRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisConditionFavoriteResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisExportTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisExportTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAppKeyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAppKeyResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateModelRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateModelResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreatePocEvRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreatePocEvResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateQueryVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateQueryVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRecommendEventRuleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRecommendEventRuleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRecommendTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRecommendTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleApiRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleApiResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleBatchRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleBatchResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleDataRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleDataResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSimulationTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSimulationTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeepCopyRuleRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeepCopyRuleResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteAnalysisConditionFavoriteRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteAnalysisConditionFavoriteResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteByPassShuntEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteByPassShuntEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteCustVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteCustVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteEventFieldRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteEventFieldResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleBatchMetaRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleBatchMetaResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleBatchRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleBatchResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleDataRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSampleDataResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSelfBindVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DeleteSelfBindVariableResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeInitDigRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeInitDigResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeInputFeildCountByEventCodeRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeInputFeildCountByEventCodeResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeListModelRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeListModelResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeModelDetailsByIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeModelDetailsByIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeModelOssPolicyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeModelOssPolicyResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRiskTagsLineChartRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRiskTagsLineChartResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleBatchOssPolicyRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleBatchOssPolicyResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSamplebatchPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSamplebatchPageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataByBatchUUidPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataByBatchUUidPageResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataPageRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataPageResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreListResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceCodeNameRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceCodeNameResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\DownloadSmapleBatchRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DownloadSmapleBatchResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ExpressionTestRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ExpressionTestResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\FileUploadRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\FileUploadResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportFieldRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportFieldResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportNameListRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportNameListResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportTemplateEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ImportTemplateEventResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ListVariableDefineRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ListVariableDefineResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelDeleteRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelDeleteResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelFileUploadRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelFileUploadResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelIsUsingRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelIsUsingResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelNameIsDuplicationRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelNameIsDuplicationResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelSampleDownloadRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModelSampleDownloadResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyRulePriorityRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyRulePriorityResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyRuleStatusRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyRuleStatusResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\OpenConsoleSlsRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\OpenConsoleSlsResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\OperateFavoriteVariableRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\OperateFavoriteVariableResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PermissionCheckRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PermissionCheckResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PocCreateTaskRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PocCreateTaskResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PocGetDownloadUrlRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PocGetDownloadUrlResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PocGetTokenRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PocGetTokenResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PocSendDataRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\PocSendDataResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthRuleDetailByRuleIdRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthRuleDetailByRuleIdResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RecallRuleAuditRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RecallRuleAuditResponse;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RemoveEventRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\RemoveEventResponse;
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
use AlibabaCloud\SDK\Xtee\V20210910\Models\UploadFileCheckRequest;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UploadFileCheckResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Xtee extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Add Sample Data via CSV.
     *
     * @param request - AddSampleDataByCsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSampleDataByCsvResponse
     *
     * @param AddSampleDataByCsvRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddSampleDataByCsvResponse
     */
    public function addSampleDataByCsvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ossFileName) {
            @$query['ossFileName'] = $request->ossFileName;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleBatchUuid) {
            @$query['sampleBatchUuid'] = $request->sampleBatchUuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSampleDataByCsv',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSampleDataByCsvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Sample Data via CSV.
     *
     * @param request - AddSampleDataByCsvRequest
     *
     * @returns AddSampleDataByCsvResponse
     *
     * @param AddSampleDataByCsvRequest $request
     *
     * @return AddSampleDataByCsvResponse
     */
    public function addSampleDataByCsv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSampleDataByCsvWithOptions($request, $runtime);
    }

    /**
     * Add list data through a text box for samples.
     *
     * @param request - AddSampleDataByTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSampleDataByTextResponse
     *
     * @param AddSampleDataByTextRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddSampleDataByTextResponse
     */
    public function addSampleDataByTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataValue) {
            @$query['dataValue'] = $request->dataValue;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleBatchUuid) {
            @$query['sampleBatchUuid'] = $request->sampleBatchUuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSampleDataByText',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSampleDataByTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add list data through a text box for samples.
     *
     * @param request - AddSampleDataByTextRequest
     *
     * @returns AddSampleDataByTextResponse
     *
     * @param AddSampleDataByTextRequest $request
     *
     * @return AddSampleDataByTextResponse
     */
    public function addSampleDataByText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSampleDataByTextWithOptions($request, $runtime);
    }

    /**
     * Batch Delete Sample List Data.
     *
     * @param request - BatchDeleteSampleDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteSampleDataResponse
     *
     * @param BatchDeleteSampleDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchDeleteSampleDataResponse
     */
    public function batchDeleteSampleDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->uuids) {
            @$query['uuids'] = $request->uuids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteSampleData',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Delete Sample List Data.
     *
     * @param request - BatchDeleteSampleDataRequest
     *
     * @returns BatchDeleteSampleDataResponse
     *
     * @param BatchDeleteSampleDataRequest $request
     *
     * @return BatchDeleteSampleDataResponse
     */
    public function batchDeleteSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteSampleDataWithOptions($request, $runtime);
    }

    /**
     * Variable binding operation.
     *
     * @param request - BindVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindVariableResponse
     *
     * @param BindVariableRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BindVariableResponse
     */
    public function bindVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->apiRegionId) {
            @$query['apiRegionId'] = $request->apiRegionId;
        }

        if (null !== $request->apiType) {
            @$query['apiType'] = $request->apiType;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->defineId) {
            @$query['defineId'] = $request->defineId;
        }

        if (null !== $request->defineIds) {
            @$query['defineIds'] = $request->defineIds;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->exceptionValue) {
            @$query['exceptionValue'] = $request->exceptionValue;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->outputField) {
            @$query['outputField'] = $request->outputField;
        }

        if (null !== $request->outputType) {
            @$query['outputType'] = $request->outputType;
        }

        if (null !== $request->params) {
            @$query['params'] = $request->params;
        }

        if (null !== $request->paramsList) {
            @$query['paramsList'] = $request->paramsList;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Variable binding operation.
     *
     * @param request - BindVariableRequest
     *
     * @returns BindVariableResponse
     *
     * @param BindVariableRequest $request
     *
     * @return BindVariableResponse
     */
    public function bindVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindVariableWithOptions($request, $runtime);
    }

    /**
     * Policy Replication Lineage Check.
     *
     * @param request - CheckCopyRuleVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCopyRuleVariableResponse
     *
     * @param CheckCopyRuleVariableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckCopyRuleVariableResponse
     */
    public function checkCopyRuleVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createType) {
            @$query['CreateType'] = $request->createType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->sourceRuleId) {
            @$query['SourceRuleId'] = $request->sourceRuleId;
        }

        if (null !== $request->sourceRuleIds) {
            @$query['SourceRuleIds'] = $request->sourceRuleIds;
        }

        if (null !== $request->targetEventCode) {
            @$query['TargetEventCode'] = $request->targetEventCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCopyRuleVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCopyRuleVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Policy Replication Lineage Check.
     *
     * @param request - CheckCopyRuleVariableRequest
     *
     * @returns CheckCopyRuleVariableResponse
     *
     * @param CheckCopyRuleVariableRequest $request
     *
     * @return CheckCopyRuleVariableResponse
     */
    public function checkCopyRuleVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCopyRuleVariableWithOptions($request, $runtime);
    }

    /**
     * Check if the cumulative number of variables exceeds the limit.
     *
     * @param request - CheckCustVariableLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCustVariableLimitResponse
     *
     * @param CheckCustVariableLimitRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckCustVariableLimitResponse
     */
    public function checkCustVariableLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCustVariableLimit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCustVariableLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check if the cumulative number of variables exceeds the limit.
     *
     * @param request - CheckCustVariableLimitRequest
     *
     * @returns CheckCustVariableLimitResponse
     *
     * @param CheckCustVariableLimitRequest $request
     *
     * @return CheckCustVariableLimitResponse
     */
    public function checkCustVariableLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCustVariableLimitWithOptions($request, $runtime);
    }

    /**
     * Check if Creating Variables Exceeds the Limit.
     *
     * @param request - CheckExpressionVariableLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckExpressionVariableLimitResponse
     *
     * @param CheckExpressionVariableLimitRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckExpressionVariableLimitResponse
     */
    public function checkExpressionVariableLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckExpressionVariableLimit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckExpressionVariableLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check if Creating Variables Exceeds the Limit.
     *
     * @param request - CheckExpressionVariableLimitRequest
     *
     * @returns CheckExpressionVariableLimitResponse
     *
     * @param CheckExpressionVariableLimitRequest $request
     *
     * @return CheckExpressionVariableLimitResponse
     */
    public function checkExpressionVariableLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkExpressionVariableLimitWithOptions($request, $runtime);
    }

    /**
     * Check if the number of fields exceeds the limit.
     *
     * @param request - CheckFieldLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckFieldLimitResponse
     *
     * @param CheckFieldLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckFieldLimitResponse
     */
    public function checkFieldLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckFieldLimit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckFieldLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check if the number of fields exceeds the limit.
     *
     * @param request - CheckFieldLimitRequest
     *
     * @returns CheckFieldLimitResponse
     *
     * @param CheckFieldLimitRequest $request
     *
     * @return CheckFieldLimitResponse
     */
    public function checkFieldLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFieldLimitWithOptions($request, $runtime);
    }

    /**
     * Validate Variable Reference.
     *
     * @param request - CheckUsageVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUsageVariableResponse
     *
     * @param CheckUsageVariableRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckUsageVariableResponse
     */
    public function checkUsageVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckUsageVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUsageVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validate Variable Reference.
     *
     * @param request - CheckUsageVariableRequest
     *
     * @returns CheckUsageVariableResponse
     *
     * @param CheckUsageVariableRequest $request
     *
     * @return CheckUsageVariableResponse
     */
    public function checkUsageVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUsageVariableWithOptions($request, $runtime);
    }

    /**
     * Policy Comparison.
     *
     * @param request - CompareCopyRuleVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareCopyRuleVariableResponse
     *
     * @param CompareCopyRuleVariableRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CompareCopyRuleVariableResponse
     */
    public function compareCopyRuleVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createType) {
            @$query['CreateType'] = $request->createType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->sourceRuleId) {
            @$query['SourceRuleId'] = $request->sourceRuleId;
        }

        if (null !== $request->sourceRuleIds) {
            @$query['SourceRuleIds'] = $request->sourceRuleIds;
        }

        if (null !== $request->targetEventCode) {
            @$query['TargetEventCode'] = $request->targetEventCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CompareCopyRuleVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareCopyRuleVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Policy Comparison.
     *
     * @param request - CompareCopyRuleVariableRequest
     *
     * @returns CompareCopyRuleVariableResponse
     *
     * @param CompareCopyRuleVariableRequest $request
     *
     * @return CompareCopyRuleVariableResponse
     */
    public function compareCopyRuleVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareCopyRuleVariableWithOptions($request, $runtime);
    }

    /**
     * Add Query Conditions.
     *
     * @param request - CreateAnalysisConditionFavoriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnalysisConditionFavoriteResponse
     *
     * @param CreateAnalysisConditionFavoriteRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateAnalysisConditionFavoriteResponse
     */
    public function createAnalysisConditionFavoriteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->condition) {
            @$query['condition'] = $request->condition;
        }

        if (null !== $request->eventBeginTime) {
            @$query['eventBeginTime'] = $request->eventBeginTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->eventEndTime) {
            @$query['eventEndTime'] = $request->eventEndTime;
        }

        if (null !== $request->fieldName) {
            @$query['fieldName'] = $request->fieldName;
        }

        if (null !== $request->fieldValue) {
            @$query['fieldValue'] = $request->fieldValue;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAnalysisConditionFavorite',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAnalysisConditionFavoriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Query Conditions.
     *
     * @param request - CreateAnalysisConditionFavoriteRequest
     *
     * @returns CreateAnalysisConditionFavoriteResponse
     *
     * @param CreateAnalysisConditionFavoriteRequest $request
     *
     * @return CreateAnalysisConditionFavoriteResponse
     */
    public function createAnalysisConditionFavorite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAnalysisConditionFavoriteWithOptions($request, $runtime);
    }

    /**
     * Create Export Task.
     *
     * @param request - CreateAnalysisExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnalysisExportTaskResponse
     *
     * @param CreateAnalysisExportTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAnalysisExportTaskResponse
     */
    public function createAnalysisExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->columns) {
            @$query['columns'] = $request->columns;
        }

        if (null !== $request->conditions) {
            @$query['conditions'] = $request->conditions;
        }

        if (null !== $request->eventBeginTime) {
            @$query['eventBeginTime'] = $request->eventBeginTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->eventEndTime) {
            @$query['eventEndTime'] = $request->eventEndTime;
        }

        if (null !== $request->fieldName) {
            @$query['fieldName'] = $request->fieldName;
        }

        if (null !== $request->fieldValue) {
            @$query['fieldValue'] = $request->fieldValue;
        }

        if (null !== $request->fileFormat) {
            @$query['fileFormat'] = $request->fileFormat;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scope) {
            @$query['scope'] = $request->scope;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAnalysisExportTask',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAnalysisExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Export Task.
     *
     * @param request - CreateAnalysisExportTaskRequest
     *
     * @returns CreateAnalysisExportTaskResponse
     *
     * @param CreateAnalysisExportTaskRequest $request
     *
     * @return CreateAnalysisExportTaskResponse
     */
    public function createAnalysisExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAnalysisExportTaskWithOptions($request, $runtime);
    }

    /**
     * Create AppKey.
     *
     * @param request - CreateAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppKeyResponse
     *
     * @param CreateAppKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAppKeyResponse
     */
    public function createAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppKey',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create AppKey.
     *
     * @param request - CreateAppKeyRequest
     *
     * @returns CreateAppKeyResponse
     *
     * @param CreateAppKeyRequest $request
     *
     * @return CreateAppKeyResponse
     */
    public function createAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppKeyWithOptions($request, $runtime);
    }

    /**
     * Create Accumulative Variable.
     *
     * @param request - CreateCustVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustVariableResponse
     *
     * @param CreateCustVariableRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCustVariableResponse
     */
    public function createCustVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->condition) {
            @$query['condition'] = $request->condition;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->historyValueType) {
            @$query['historyValueType'] = $request->historyValueType;
        }

        if (null !== $request->object) {
            @$query['object'] = $request->object;
        }

        if (null !== $request->outputs) {
            @$query['outputs'] = $request->outputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->subject) {
            @$query['subject'] = $request->subject;
        }

        if (null !== $request->timeType) {
            @$query['timeType'] = $request->timeType;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        if (null !== $request->twCount) {
            @$query['twCount'] = $request->twCount;
        }

        if (null !== $request->velocityFC) {
            @$query['velocityFC'] = $request->velocityFC;
        }

        if (null !== $request->velocityTW) {
            @$query['velocityTW'] = $request->velocityTW;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Accumulative Variable.
     *
     * @param request - CreateCustVariableRequest
     *
     * @returns CreateCustVariableResponse
     *
     * @param CreateCustVariableRequest $request
     *
     * @return CreateCustVariableResponse
     */
    public function createCustVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustVariableWithOptions($request, $runtime);
    }

    /**
     * Add Data Source.
     *
     * @param request - CreateDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataSourceResponse
     *
     * @param CreateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->ossKey) {
            @$query['ossKey'] = $request->ossKey;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataSource',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Data Source.
     *
     * @param request - CreateDataSourceRequest
     *
     * @returns CreateDataSourceResponse
     *
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceWithOptions($request, $runtime);
    }

    /**
     * Create Event.
     *
     * @param request - CreateEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEventResponse
     *
     * @param CreateEventRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateEventResponse
     */
    public function createEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->eventName) {
            @$query['eventName'] = $request->eventName;
        }

        if (null !== $request->inputFieldsStr) {
            @$query['inputFieldsStr'] = $request->inputFieldsStr;
        }

        if (null !== $request->memo) {
            @$query['memo'] = $request->memo;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->templateCode) {
            @$query['templateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['templateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['templateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Event.
     *
     * @param request - CreateEventRequest
     *
     * @returns CreateEventResponse
     *
     * @param CreateEventRequest $request
     *
     * @return CreateEventResponse
     */
    public function createEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventWithOptions($request, $runtime);
    }

    /**
     * Create Custom Variable.
     *
     * @param request - CreateExpressionVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExpressionVariableResponse
     *
     * @param CreateExpressionVariableRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateExpressionVariableResponse
     */
    public function createExpressionVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->expression) {
            @$query['expression'] = $request->expression;
        }

        if (null !== $request->expressionTitle) {
            @$query['expressionTitle'] = $request->expressionTitle;
        }

        if (null !== $request->expressionVariable) {
            @$query['expressionVariable'] = $request->expressionVariable;
        }

        if (null !== $request->outlier) {
            @$query['outlier'] = $request->outlier;
        }

        if (null !== $request->outputs) {
            @$query['outputs'] = $request->outputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateExpressionVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExpressionVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Custom Variable.
     *
     * @param request - CreateExpressionVariableRequest
     *
     * @returns CreateExpressionVariableResponse
     *
     * @param CreateExpressionVariableRequest $request
     *
     * @return CreateExpressionVariableResponse
     */
    public function createExpressionVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressionVariableWithOptions($request, $runtime);
    }

    /**
     * Add New Field.
     *
     * @param request - CreateFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFieldResponse
     *
     * @param CreateFieldRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateFieldResponse
     */
    public function createFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->classify) {
            @$query['classify'] = $request->classify;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->enumData) {
            @$query['enumData'] = $request->enumData;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateField',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add New Field.
     *
     * @param request - CreateFieldRequest
     *
     * @returns CreateFieldResponse
     *
     * @param CreateFieldRequest $request
     *
     * @return CreateFieldResponse
     */
    public function createField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFieldWithOptions($request, $runtime);
    }

    /**
     * Submit Task.
     *
     * @param request - CreateModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelResponse
     *
     * @param CreateModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucId) {
            @$query['BucId'] = $request->bucId;
        }

        if (null !== $request->counts) {
            @$query['Counts'] = $request->counts;
        }

        if (null !== $request->fileMD5) {
            @$query['FileMD5'] = $request->fileMD5;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelScene) {
            @$query['ModelScene'] = $request->modelScene;
        }

        if (null !== $request->parameterNum) {
            @$query['ParameterNum'] = $request->parameterNum;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->userLocalFileName) {
            @$query['UserLocalFileName'] = $request->userLocalFileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateModel',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submit Task.
     *
     * @param request - CreateModelRequest
     *
     * @returns CreateModelResponse
     *
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * Create POC.
     *
     * @param request - CreatePocEvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePocEvResponse
     *
     * @param CreatePocEvRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreatePocEvResponse
     */
    public function createPocEvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dateFormat) {
            @$query['DateFormat'] = $request->dateFormat;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->tab) {
            @$query['Tab'] = $request->tab;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePocEv',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePocEvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create POC.
     *
     * @param request - CreatePocEvRequest
     *
     * @returns CreatePocEvResponse
     *
     * @param CreatePocEvRequest $request
     *
     * @return CreatePocEvResponse
     */
    public function createPocEv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPocEvWithOptions($request, $runtime);
    }

    /**
     * Add New Custom Query Variable.
     *
     * @param request - CreateQueryVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQueryVariableResponse
     *
     * @param CreateQueryVariableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateQueryVariableResponse
     */
    public function createQueryVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataSourceCode) {
            @$query['dataSourceCode'] = $request->dataSourceCode;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->expression) {
            @$query['expression'] = $request->expression;
        }

        if (null !== $request->expressionTitle) {
            @$query['expressionTitle'] = $request->expressionTitle;
        }

        if (null !== $request->expressionVariable) {
            @$query['expressionVariable'] = $request->expressionVariable;
        }

        if (null !== $request->outlier) {
            @$query['outlier'] = $request->outlier;
        }

        if (null !== $request->outputs) {
            @$query['outputs'] = $request->outputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateQueryVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQueryVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add New Custom Query Variable.
     *
     * @param request - CreateQueryVariableRequest
     *
     * @returns CreateQueryVariableResponse
     *
     * @param CreateQueryVariableRequest $request
     *
     * @return CreateQueryVariableResponse
     */
    public function createQueryVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueryVariableWithOptions($request, $runtime);
    }

    /**
     * Create Recommended Event Strategy.
     *
     * @param request - CreateRecommendEventRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecommendEventRuleResponse
     *
     * @param CreateRecommendEventRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateRecommendEventRuleResponse
     */
    public function createRecommendEventRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->eventName) {
            @$query['eventName'] = $request->eventName;
        }

        if (null !== $request->recommendRuleIdsStr) {
            @$query['recommendRuleIdsStr'] = $request->recommendRuleIdsStr;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRecommendEventRule',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRecommendEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Recommended Event Strategy.
     *
     * @param request - CreateRecommendEventRuleRequest
     *
     * @returns CreateRecommendEventRuleResponse
     *
     * @param CreateRecommendEventRuleRequest $request
     *
     * @return CreateRecommendEventRuleResponse
     */
    public function createRecommendEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecommendEventRuleWithOptions($request, $runtime);
    }

    /**
     * Create Recommendation Task.
     *
     * @param request - CreateRecommendTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecommendTaskResponse
     *
     * @param CreateRecommendTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateRecommendTaskResponse
     */
    public function createRecommendTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleId) {
            @$query['sampleId'] = $request->sampleId;
        }

        if (null !== $request->variablesStr) {
            @$query['variablesStr'] = $request->variablesStr;
        }

        if (null !== $request->velocitiesStr) {
            @$query['velocitiesStr'] = $request->velocitiesStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRecommendTask',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRecommendTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Recommendation Task.
     *
     * @param request - CreateRecommendTaskRequest
     *
     * @returns CreateRecommendTaskResponse
     *
     * @param CreateRecommendTaskRequest $request
     *
     * @return CreateRecommendTaskResponse
     */
    public function createRecommendTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecommendTaskWithOptions($request, $runtime);
    }

    /**
     * Create Policy & Version.
     *
     * @param request - CreateRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRuleResponse
     *
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->eventName) {
            @$query['eventName'] = $request->eventName;
        }

        if (null !== $request->logicExpression) {
            @$query['logicExpression'] = $request->logicExpression;
        }

        if (null !== $request->memo) {
            @$query['memo'] = $request->memo;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleActions) {
            @$query['ruleActions'] = $request->ruleActions;
        }

        if (null !== $request->ruleBody) {
            @$query['ruleBody'] = $request->ruleBody;
        }

        if (null !== $request->ruleExpressions) {
            @$query['ruleExpressions'] = $request->ruleExpressions;
        }

        if (null !== $request->ruleName) {
            @$query['ruleName'] = $request->ruleName;
        }

        if (null !== $request->ruleStatus) {
            @$query['ruleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->ruleType) {
            @$query['ruleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRule',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Policy & Version.
     *
     * @param request - CreateRuleRequest
     *
     * @returns CreateRuleResponse
     *
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * Add Sample.
     *
     * @param request - CreateSampleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSampleResponse
     *
     * @param CreateSampleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSampleResponse
     */
    public function createSampleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->clientFileName) {
            @$query['clientFileName'] = $request->clientFileName;
        }

        if (null !== $request->clientPath) {
            @$query['clientPath'] = $request->clientPath;
        }

        if (null !== $request->fileType) {
            @$query['fileType'] = $request->fileType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleTag) {
            @$query['sampleTag'] = $request->sampleTag;
        }

        if (null !== $request->sampleType) {
            @$query['sampleType'] = $request->sampleType;
        }

        if (null !== $request->sampleValues) {
            @$query['sampleValues'] = $request->sampleValues;
        }

        if (null !== $request->uploadType) {
            @$query['uploadType'] = $request->uploadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSample',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Sample.
     *
     * @param request - CreateSampleRequest
     *
     * @returns CreateSampleResponse
     *
     * @param CreateSampleRequest $request
     *
     * @return CreateSampleResponse
     */
    public function createSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleWithOptions($request, $runtime);
    }

    /**
     * User-level Single API to Create Sample Batches.
     *
     * @param request - CreateSampleApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSampleApiResponse
     *
     * @param CreateSampleApiRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSampleApiResponse
     */
    public function createSampleApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->dataValue) {
            @$query['DataValue'] = $request->dataValue;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->sampleBatchType) {
            @$query['SampleBatchType'] = $request->sampleBatchType;
        }

        if (null !== $request->serviceList) {
            @$query['ServiceList'] = $request->serviceList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSampleApi',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSampleApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * User-level Single API to Create Sample Batches.
     *
     * @param request - CreateSampleApiRequest
     *
     * @returns CreateSampleApiResponse
     *
     * @param CreateSampleApiRequest $request
     *
     * @return CreateSampleApiResponse
     */
    public function createSampleApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleApiWithOptions($request, $runtime);
    }

    /**
     * Create Sample Batch.
     *
     * @param request - CreateSampleBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSampleBatchResponse
     *
     * @param CreateSampleBatchRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSampleBatchResponse
     */
    public function createSampleBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->batchName) {
            @$query['batchName'] = $request->batchName;
        }

        if (null !== $request->dataType) {
            @$query['dataType'] = $request->dataType;
        }

        if (null !== $request->dataValue) {
            @$query['dataValue'] = $request->dataValue;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->ossFileName) {
            @$query['ossFileName'] = $request->ossFileName;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleBatchType) {
            @$query['sampleBatchType'] = $request->sampleBatchType;
        }

        if (null !== $request->serviceList) {
            @$query['serviceList'] = $request->serviceList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSampleBatch',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSampleBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Sample Batch.
     *
     * @param request - CreateSampleBatchRequest
     *
     * @returns CreateSampleBatchResponse
     *
     * @param CreateSampleBatchRequest $request
     *
     * @return CreateSampleBatchResponse
     */
    public function createSampleBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleBatchWithOptions($request, $runtime);
    }

    /**
     * Create Sample Data.
     *
     * @param request - CreateSampleDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSampleDataResponse
     *
     * @param CreateSampleDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSampleDataResponse
     */
    public function createSampleDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->encryptType) {
            @$query['encryptType'] = $request->encryptType;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->riskValue) {
            @$query['riskValue'] = $request->riskValue;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        if (null !== $request->storePath) {
            @$query['storePath'] = $request->storePath;
        }

        if (null !== $request->storeType) {
            @$query['storeType'] = $request->storeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSampleData',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Sample Data.
     *
     * @param request - CreateSampleDataRequest
     *
     * @returns CreateSampleDataResponse
     *
     * @param CreateSampleDataRequest $request
     *
     * @return CreateSampleDataResponse
     */
    public function createSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleDataWithOptions($request, $runtime);
    }

    /**
     * Create Task.
     *
     * @param request - CreateSimulationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSimulationTaskResponse
     *
     * @param CreateSimulationTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSimulationTaskResponse
     */
    public function createSimulationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataSourceConfig) {
            @$query['dataSourceConfig'] = $request->dataSourceConfig;
        }

        if (null !== $request->dataSourceType) {
            @$query['dataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->filtersStr) {
            @$query['filtersStr'] = $request->filtersStr;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->rulesStr) {
            @$query['rulesStr'] = $request->rulesStr;
        }

        if (null !== $request->runTask) {
            @$query['runTask'] = $request->runTask;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->taskName) {
            @$query['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSimulationTask',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSimulationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Task.
     *
     * @param request - CreateSimulationTaskRequest
     *
     * @returns CreateSimulationTaskResponse
     *
     * @param CreateSimulationTaskRequest $request
     *
     * @return CreateSimulationTaskResponse
     */
    public function createSimulationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimulationTaskWithOptions($request, $runtime);
    }

    /**
     * Policy Replication.
     *
     * @param request - DeepCopyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeepCopyRuleResponse
     *
     * @param DeepCopyRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeepCopyRuleResponse
     */
    public function deepCopyRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createType) {
            @$query['CreateType'] = $request->createType;
        }

        if (null !== $request->custInsertInfo) {
            @$query['CustInsertInfo'] = $request->custInsertInfo;
        }

        if (null !== $request->custWriteInfo) {
            @$query['CustWriteInfo'] = $request->custWriteInfo;
        }

        if (null !== $request->expressionVariableInfo) {
            @$query['ExpressionVariableInfo'] = $request->expressionVariableInfo;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->queryExpressionVariableInfo) {
            @$query['QueryExpressionVariableInfo'] = $request->queryExpressionVariableInfo;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->sourceRuleId) {
            @$query['SourceRuleId'] = $request->sourceRuleId;
        }

        if (null !== $request->sourceRuleIds) {
            @$query['SourceRuleIds'] = $request->sourceRuleIds;
        }

        if (null !== $request->targetEventCode) {
            @$query['TargetEventCode'] = $request->targetEventCode;
        }

        if (null !== $request->targetEventName) {
            @$query['TargetEventName'] = $request->targetEventName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeepCopyRule',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeepCopyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Policy Replication.
     *
     * @param request - DeepCopyRuleRequest
     *
     * @returns DeepCopyRuleResponse
     *
     * @param DeepCopyRuleRequest $request
     *
     * @return DeepCopyRuleResponse
     */
    public function deepCopyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deepCopyRuleWithOptions($request, $runtime);
    }

    /**
     * Delete Query Condition.
     *
     * @param request - DeleteAnalysisConditionFavoriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAnalysisConditionFavoriteResponse
     *
     * @param DeleteAnalysisConditionFavoriteRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteAnalysisConditionFavoriteResponse
     */
    public function deleteAnalysisConditionFavoriteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAnalysisConditionFavorite',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAnalysisConditionFavoriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Query Condition.
     *
     * @param request - DeleteAnalysisConditionFavoriteRequest
     *
     * @returns DeleteAnalysisConditionFavoriteResponse
     *
     * @param DeleteAnalysisConditionFavoriteRequest $request
     *
     * @return DeleteAnalysisConditionFavoriteResponse
     */
    public function deleteAnalysisConditionFavorite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAnalysisConditionFavoriteWithOptions($request, $runtime);
    }

    /**
     * Delete Bypass Event.
     *
     * @param request - DeleteByPassShuntEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteByPassShuntEventResponse
     *
     * @param DeleteByPassShuntEventRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteByPassShuntEventResponse
     */
    public function deleteByPassShuntEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventId) {
            @$query['eventId'] = $request->eventId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteByPassShuntEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteByPassShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Bypass Event.
     *
     * @param request - DeleteByPassShuntEventRequest
     *
     * @returns DeleteByPassShuntEventResponse
     *
     * @param DeleteByPassShuntEventRequest $request
     *
     * @return DeleteByPassShuntEventResponse
     */
    public function deleteByPassShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteByPassShuntEventWithOptions($request, $runtime);
    }

    /**
     * Delete Accumulated Variable.
     *
     * @param request - DeleteCustVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustVariableResponse
     *
     * @param DeleteCustVariableRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCustVariableResponse
     */
    public function deleteCustVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->dataVersion) {
            @$query['dataVersion'] = $request->dataVersion;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->variableId) {
            @$query['variableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Accumulated Variable.
     *
     * @param request - DeleteCustVariableRequest
     *
     * @returns DeleteCustVariableResponse
     *
     * @param DeleteCustVariableRequest $request
     *
     * @return DeleteCustVariableResponse
     */
    public function deleteCustVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustVariableWithOptions($request, $runtime);
    }

    /**
     * Delete Data Source.
     *
     * @param request - DeleteDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataSource',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Data Source.
     *
     * @param request - DeleteDataSourceRequest
     *
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * Delete Event Field.
     *
     * @param request - DeleteEventFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventFieldResponse
     *
     * @param DeleteEventFieldRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteEventFieldResponse
     */
    public function deleteEventFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->fieldName) {
            @$query['fieldName'] = $request->fieldName;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEventField',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Event Field.
     *
     * @param request - DeleteEventFieldRequest
     *
     * @returns DeleteEventFieldResponse
     *
     * @param DeleteEventFieldRequest $request
     *
     * @return DeleteEventFieldResponse
     */
    public function deleteEventField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventFieldWithOptions($request, $runtime);
    }

    /**
     * Delete Custom Variable.
     *
     * @param request - DeleteExpressionVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExpressionVariableResponse
     *
     * @param DeleteExpressionVariableRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteExpressionVariableResponse
     */
    public function deleteExpressionVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataVersion) {
            @$query['dataVersion'] = $request->dataVersion;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExpressionVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExpressionVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Custom Variable.
     *
     * @param request - DeleteExpressionVariableRequest
     *
     * @returns DeleteExpressionVariableResponse
     *
     * @param DeleteExpressionVariableRequest $request
     *
     * @return DeleteExpressionVariableResponse
     */
    public function deleteExpressionVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressionVariableWithOptions($request, $runtime);
    }

    /**
     * 删除字段.
     *
     * @param request - DeleteFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFieldResponse
     *
     * @param DeleteFieldRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteFieldResponse
     */
    public function deleteFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteField',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除字段.
     *
     * @param request - DeleteFieldRequest
     *
     * @returns DeleteFieldResponse
     *
     * @param DeleteFieldRequest $request
     *
     * @return DeleteFieldResponse
     */
    public function deleteField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFieldWithOptions($request, $runtime);
    }

    /**
     * Delete Name List.
     *
     * @param request - DeleteNameListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNameListResponse
     *
     * @param DeleteNameListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteNameListResponse
     */
    public function deleteNameListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ids) {
            @$query['ids'] = $request->ids;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNameList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Name List.
     *
     * @param request - DeleteNameListRequest
     *
     * @returns DeleteNameListResponse
     *
     * @param DeleteNameListRequest $request
     *
     * @return DeleteNameListResponse
     */
    public function deleteNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNameListWithOptions($request, $runtime);
    }

    /**
     * Delete (pseudo) name list variable data.
     *
     * @param request - DeleteNameListDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNameListDataResponse
     *
     * @param DeleteNameListDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteNameListDataResponse
     */
    public function deleteNameListDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->variableId) {
            @$query['variableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNameListData',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNameListDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete (pseudo) name list variable data.
     *
     * @param request - DeleteNameListDataRequest
     *
     * @returns DeleteNameListDataResponse
     *
     * @param DeleteNameListDataRequest $request
     *
     * @return DeleteNameListDataResponse
     */
    public function deleteNameListData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNameListDataWithOptions($request, $runtime);
    }

    /**
     * Delete Query Variable.
     *
     * @param request - DeleteQueryVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQueryVariableResponse
     *
     * @param DeleteQueryVariableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteQueryVariableResponse
     */
    public function deleteQueryVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQueryVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQueryVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Query Variable.
     *
     * @param request - DeleteQueryVariableRequest
     *
     * @returns DeleteQueryVariableResponse
     *
     * @param DeleteQueryVariableRequest $request
     *
     * @return DeleteQueryVariableResponse
     */
    public function deleteQueryVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQueryVariableWithOptions($request, $runtime);
    }

    /**
     * Delete Policy Version.
     *
     * @param request - DeleteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->ruleVersionId) {
            @$query['ruleVersionId'] = $request->ruleVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRule',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Policy Version.
     *
     * @param request - DeleteRuleRequest
     *
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * Batch Delete Samples.
     *
     * @param request - DeleteSampleBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSampleBatchResponse
     *
     * @param DeleteSampleBatchRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteSampleBatchResponse
     */
    public function deleteSampleBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ids) {
            @$query['ids'] = $request->ids;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->versions) {
            @$query['versions'] = $request->versions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSampleBatch',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSampleBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Delete Samples.
     *
     * @param request - DeleteSampleBatchRequest
     *
     * @returns DeleteSampleBatchResponse
     *
     * @param DeleteSampleBatchRequest $request
     *
     * @return DeleteSampleBatchResponse
     */
    public function deleteSampleBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSampleBatchWithOptions($request, $runtime);
    }

    /**
     * Sample Deletion.
     *
     * @param request - DeleteSampleBatchMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSampleBatchMetaResponse
     *
     * @param DeleteSampleBatchMetaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSampleBatchMetaResponse
     */
    public function deleteSampleBatchMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->batchUuid) {
            @$query['batchUuid'] = $request->batchUuid;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSampleBatchMeta',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSampleBatchMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sample Deletion.
     *
     * @param request - DeleteSampleBatchMetaRequest
     *
     * @returns DeleteSampleBatchMetaResponse
     *
     * @param DeleteSampleBatchMetaRequest $request
     *
     * @return DeleteSampleBatchMetaResponse
     */
    public function deleteSampleBatchMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSampleBatchMetaWithOptions($request, $runtime);
    }

    /**
     * Delete Sample Data.
     *
     * @param request - DeleteSampleDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSampleDataResponse
     *
     * @param DeleteSampleDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSampleDataResponse
     */
    public function deleteSampleDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSampleData',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Sample Data.
     *
     * @param request - DeleteSampleDataRequest
     *
     * @returns DeleteSampleDataResponse
     *
     * @param DeleteSampleDataRequest $request
     *
     * @return DeleteSampleDataResponse
     */
    public function deleteSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSampleDataWithOptions($request, $runtime);
    }

    /**
     * Delete Custom System Variable.
     *
     * @param request - DeleteSelfBindVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSelfBindVariableResponse
     *
     * @param DeleteSelfBindVariableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSelfBindVariableResponse
     */
    public function deleteSelfBindVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSelfBindVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSelfBindVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Custom System Variable.
     *
     * @param request - DeleteSelfBindVariableRequest
     *
     * @returns DeleteSelfBindVariableResponse
     *
     * @param DeleteSelfBindVariableRequest $request
     *
     * @return DeleteSelfBindVariableResponse
     */
    public function deleteSelfBindVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSelfBindVariableWithOptions($request, $runtime);
    }

    /**
     * 高级查询获取左变量接口.
     *
     * @param request - DescribeAdvanceSearchLeftVariableListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvanceSearchLeftVariableListResponse
     *
     * @param DescribeAdvanceSearchLeftVariableListRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAdvanceSearchLeftVariableListResponse
     */
    public function describeAdvanceSearchLeftVariableListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvanceSearchLeftVariableList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvanceSearchLeftVariableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 高级查询获取左变量接口.
     *
     * @param request - DescribeAdvanceSearchLeftVariableListRequest
     *
     * @returns DescribeAdvanceSearchLeftVariableListResponse
     *
     * @param DescribeAdvanceSearchLeftVariableListRequest $request
     *
     * @return DescribeAdvanceSearchLeftVariableListResponse
     */
    public function describeAdvanceSearchLeftVariableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvanceSearchLeftVariableListWithOptions($request, $runtime);
    }

    /**
     * Advanced Query.
     *
     * @param request - DescribeAdvanceSearchPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvanceSearchPageListResponse
     *
     * @param DescribeAdvanceSearchPageListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAdvanceSearchPageListResponse
     */
    public function describeAdvanceSearchPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->condition) {
            @$query['condition'] = $request->condition;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->eventBeginTime) {
            @$query['eventBeginTime'] = $request->eventBeginTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->eventEndTime) {
            @$query['eventEndTime'] = $request->eventEndTime;
        }

        if (null !== $request->fieldName) {
            @$query['fieldName'] = $request->fieldName;
        }

        if (null !== $request->fieldValue) {
            @$query['fieldValue'] = $request->fieldValue;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvanceSearchPageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvanceSearchPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Advanced Query.
     *
     * @param request - DescribeAdvanceSearchPageListRequest
     *
     * @returns DescribeAdvanceSearchPageListResponse
     *
     * @param DescribeAdvanceSearchPageListRequest $request
     *
     * @return DescribeAdvanceSearchPageListResponse
     */
    public function describeAdvanceSearchPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvanceSearchPageListWithOptions($request, $runtime);
    }

    /**
     * 数据源列表.
     *
     * @param request - DescribeAllDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAllDataSourceResponse
     *
     * @param DescribeAllDataSourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAllDataSourceResponse
     */
    public function describeAllDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAllDataSource',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAllDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据源列表.
     *
     * @param request - DescribeAllDataSourceRequest
     *
     * @returns DescribeAllDataSourceResponse
     *
     * @param DescribeAllDataSourceRequest $request
     *
     * @return DescribeAllDataSourceResponse
     */
    public function describeAllDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDataSourceWithOptions($request, $runtime);
    }

    /**
     * Event List Query.
     *
     * @param request - DescribeAllEventNameAndCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAllEventNameAndCodeResponse
     *
     * @param DescribeAllEventNameAndCodeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAllEventNameAndCodeResponse
     */
    public function describeAllEventNameAndCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAllEventNameAndCode',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAllEventNameAndCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Event List Query.
     *
     * @param request - DescribeAllEventNameAndCodeRequest
     *
     * @returns DescribeAllEventNameAndCodeResponse
     *
     * @param DescribeAllEventNameAndCodeRequest $request
     *
     * @return DescribeAllEventNameAndCodeResponse
     */
    public function describeAllEventNameAndCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllEventNameAndCodeWithOptions($request, $runtime);
    }

    /**
     * Display all root variables when testing custom expressions.
     *
     * @param request - DescribeAllRootVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAllRootVariableResponse
     *
     * @param DescribeAllRootVariableRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAllRootVariableResponse
     */
    public function describeAllRootVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->deviceVariableIds) {
            @$query['deviceVariableIds'] = $request->deviceVariableIds;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->expressionVariableIds) {
            @$query['expressionVariableIds'] = $request->expressionVariableIds;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->nativeVariableIds) {
            @$query['nativeVariableIds'] = $request->nativeVariableIds;
        }

        if (null !== $request->queryVariableIds) {
            @$query['queryVariableIds'] = $request->queryVariableIds;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->velocityVariableIds) {
            @$query['velocityVariableIds'] = $request->velocityVariableIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAllRootVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAllRootVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Display all root variables when testing custom expressions.
     *
     * @param request - DescribeAllRootVariableRequest
     *
     * @returns DescribeAllRootVariableResponse
     *
     * @param DescribeAllRootVariableRequest $request
     *
     * @return DescribeAllRootVariableResponse
     */
    public function describeAllRootVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllRootVariableWithOptions($request, $runtime);
    }

    /**
     * Display All Fields.
     *
     * @param request - DescribeAnalysisColumnFieldListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAnalysisColumnFieldListResponse
     *
     * @param DescribeAnalysisColumnFieldListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeAnalysisColumnFieldListResponse
     */
    public function describeAnalysisColumnFieldListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAnalysisColumnFieldList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAnalysisColumnFieldListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Display All Fields.
     *
     * @param request - DescribeAnalysisColumnFieldListRequest
     *
     * @returns DescribeAnalysisColumnFieldListResponse
     *
     * @param DescribeAnalysisColumnFieldListRequest $request
     *
     * @return DescribeAnalysisColumnFieldListResponse
     */
    public function describeAnalysisColumnFieldList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisColumnFieldListWithOptions($request, $runtime);
    }

    /**
     * Query Custom Columns.
     *
     * @param request - DescribeAnalysisColumnListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAnalysisColumnListResponse
     *
     * @param DescribeAnalysisColumnListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAnalysisColumnListResponse
     */
    public function describeAnalysisColumnListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAnalysisColumnList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAnalysisColumnListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Custom Columns.
     *
     * @param request - DescribeAnalysisColumnListRequest
     *
     * @returns DescribeAnalysisColumnListResponse
     *
     * @param DescribeAnalysisColumnListRequest $request
     *
     * @return DescribeAnalysisColumnListResponse
     */
    public function describeAnalysisColumnList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisColumnListWithOptions($request, $runtime);
    }

    /**
     * Query Condition List.
     *
     * @param request - DescribeAnalysisConditionFavoriteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAnalysisConditionFavoriteListResponse
     *
     * @param DescribeAnalysisConditionFavoriteListRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAnalysisConditionFavoriteListResponse
     */
    public function describeAnalysisConditionFavoriteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAnalysisConditionFavoriteList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAnalysisConditionFavoriteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Condition List.
     *
     * @param request - DescribeAnalysisConditionFavoriteListRequest
     *
     * @returns DescribeAnalysisConditionFavoriteListResponse
     *
     * @param DescribeAnalysisConditionFavoriteListRequest $request
     *
     * @return DescribeAnalysisConditionFavoriteListResponse
     */
    public function describeAnalysisConditionFavoriteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisConditionFavoriteListWithOptions($request, $runtime);
    }

    /**
     * Download Query Results.
     *
     * @param request - DescribeAnalysisExportTaskDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAnalysisExportTaskDownloadUrlResponse
     *
     * @param DescribeAnalysisExportTaskDownloadUrlRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAnalysisExportTaskDownloadUrlResponse
     */
    public function describeAnalysisExportTaskDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAnalysisExportTaskDownloadUrl',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAnalysisExportTaskDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Download Query Results.
     *
     * @param request - DescribeAnalysisExportTaskDownloadUrlRequest
     *
     * @returns DescribeAnalysisExportTaskDownloadUrlResponse
     *
     * @param DescribeAnalysisExportTaskDownloadUrlRequest $request
     *
     * @return DescribeAnalysisExportTaskDownloadUrlResponse
     */
    public function describeAnalysisExportTaskDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalysisExportTaskDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Get API Details.
     *
     * @param request - DescribeApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiResponse
     *
     * @param DescribeApiRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeApiResponse
     */
    public function describeApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->apiId) {
            @$query['apiId'] = $request->apiId;
        }

        if (null !== $request->apiRegionId) {
            @$query['apiRegionId'] = $request->apiRegionId;
        }

        if (null !== $request->apiType) {
            @$query['apiType'] = $request->apiType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApi',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get API Details.
     *
     * @param request - DescribeApiRequest
     *
     * @returns DescribeApiResponse
     *
     * @param DescribeApiRequest $request
     *
     * @return DescribeApiResponse
     */
    public function describeApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiWithOptions($request, $runtime);
    }

    /**
     * Get API groups including those purchased by the user and custom ones.
     *
     * @param request - DescribeApiGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiGroupsResponse
     *
     * @param DescribeApiGroupsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->apiRegionId) {
            @$query['apiRegionId'] = $request->apiRegionId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiGroups',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get API groups including those purchased by the user and custom ones.
     *
     * @param request - DescribeApiGroupsRequest
     *
     * @returns DescribeApiGroupsResponse
     *
     * @param DescribeApiGroupsRequest $request
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupsWithOptions($request, $runtime);
    }

    /**
     * Query the limit information for creating API tasks.
     *
     * @param request - DescribeApiLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiLimitResponse
     *
     * @param DescribeApiLimitRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeApiLimitResponse
     */
    public function describeApiLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiLimit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the limit information for creating API tasks.
     *
     * @param request - DescribeApiLimitRequest
     *
     * @returns DescribeApiLimitResponse
     *
     * @param DescribeApiLimitRequest $request
     *
     * @return DescribeApiLimitResponse
     */
    public function describeApiLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiLimitWithOptions($request, $runtime);
    }

    /**
     * Get API Service Name.
     *
     * @param request - DescribeApiNameListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiNameListResponse
     *
     * @param DescribeApiNameListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApiNameListResponse
     */
    public function describeApiNameListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiNameList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get API Service Name.
     *
     * @param request - DescribeApiNameListRequest
     *
     * @returns DescribeApiNameListResponse
     *
     * @param DescribeApiNameListRequest $request
     *
     * @return DescribeApiNameListResponse
     */
    public function describeApiNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiNameListWithOptions($request, $runtime);
    }

    /**
     * Query Variable Details.
     *
     * @param request - DescribeApiVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiVariableResponse
     *
     * @param DescribeApiVariableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApiVariableResponse
     */
    public function describeApiVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable Details.
     *
     * @param request - DescribeApiVariableRequest
     *
     * @returns DescribeApiVariableResponse
     *
     * @param DescribeApiVariableRequest $request
     *
     * @return DescribeApiVariableResponse
     */
    public function describeApiVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiVariableWithOptions($request, $runtime);
    }

    /**
     * Get API list including purchased and customized APIs.
     *
     * @param request - DescribeApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisResponse
     *
     * @param DescribeApisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeApisResponse
     */
    public function describeApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->apiGroupId) {
            @$query['apiGroupId'] = $request->apiGroupId;
        }

        if (null !== $request->apiRegionId) {
            @$query['apiRegionId'] = $request->apiRegionId;
        }

        if (null !== $request->apiType) {
            @$query['apiType'] = $request->apiType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApis',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get API list including purchased and customized APIs.
     *
     * @param request - DescribeApisRequest
     *
     * @returns DescribeApisResponse
     *
     * @param DescribeApisRequest $request
     *
     * @return DescribeApisResponse
     */
    public function describeApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisWithOptions($request, $runtime);
    }

    /**
     * Query appKey List.
     *
     * @param request - DescribeAppKeyPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppKeyPageResponse
     *
     * @param DescribeAppKeyPageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAppKeyPageResponse
     */
    public function describeAppKeyPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppKeyPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppKeyPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query appKey List.
     *
     * @param request - DescribeAppKeyPageRequest
     *
     * @returns DescribeAppKeyPageResponse
     *
     * @param DescribeAppKeyPageRequest $request
     *
     * @return DescribeAppKeyPageResponse
     */
    public function describeAppKeyPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppKeyPageWithOptions($request, $runtime);
    }

    /**
     * Approval Switch.
     *
     * @param request - DescribeAuditConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditConfigResponse
     *
     * @param DescribeAuditConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAuditConfigResponse
     */
    public function describeAuditConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->auditRelationType) {
            @$query['auditRelationType'] = $request->auditRelationType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditConfig',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Approval Switch.
     *
     * @param request - DescribeAuditConfigRequest
     *
     * @returns DescribeAuditConfigResponse
     *
     * @param DescribeAuditConfigRequest $request
     *
     * @return DescribeAuditConfigResponse
     */
    public function describeAuditConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditConfigWithOptions($request, $runtime);
    }

    /**
     * Approval Details.
     *
     * @param request - DescribeAuditDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditDetailsResponse
     *
     * @param DescribeAuditDetailsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAuditDetailsResponse
     */
    public function describeAuditDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditDetails',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Approval Details.
     *
     * @param request - DescribeAuditDetailsRequest
     *
     * @returns DescribeAuditDetailsResponse
     *
     * @param DescribeAuditDetailsRequest $request
     *
     * @return DescribeAuditDetailsResponse
     */
    public function describeAuditDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditDetailsWithOptions($request, $runtime);
    }

    /**
     * Display and Query of Audit List.
     *
     * @param request - DescribeAuditPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditPageListResponse
     *
     * @param DescribeAuditPageListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAuditPageListResponse
     */
    public function describeAuditPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->auditStatus) {
            @$query['auditStatus'] = $request->auditStatus;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleName) {
            @$query['ruleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditPageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Display and Query of Audit List.
     *
     * @param request - DescribeAuditPageListRequest
     *
     * @returns DescribeAuditPageListResponse
     *
     * @param DescribeAuditPageListRequest $request
     *
     * @return DescribeAuditPageListResponse
     */
    public function describeAuditPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditPageListWithOptions($request, $runtime);
    }

    /**
     * Query the list of event names for the current user.
     *
     * @param request - DescribeAuthEventNameListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthEventNameListResponse
     *
     * @param DescribeAuthEventNameListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAuthEventNameListResponse
     */
    public function describeAuthEventNameListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuthEventNameList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthEventNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of event names for the current user.
     *
     * @param request - DescribeAuthEventNameListRequest
     *
     * @returns DescribeAuthEventNameListResponse
     *
     * @param DescribeAuthEventNameListRequest $request
     *
     * @return DescribeAuthEventNameListResponse
     */
    public function describeAuthEventNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthEventNameListWithOptions($request, $runtime);
    }

    /**
     * 策略列表.
     *
     * @param request - DescribeAuthRulePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthRulePageListResponse
     *
     * @param DescribeAuthRulePageListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAuthRulePageListResponse
     */
    public function describeAuthRulePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleName) {
            @$query['ruleName'] = $request->ruleName;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuthRulePageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthRulePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 策略列表.
     *
     * @param request - DescribeAuthRulePageListRequest
     *
     * @returns DescribeAuthRulePageListResponse
     *
     * @param DescribeAuthRulePageListRequest $request
     *
     * @return DescribeAuthRulePageListResponse
     */
    public function describeAuthRulePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthRulePageListWithOptions($request, $runtime);
    }

    /**
     * 场景列表.
     *
     * @param request - DescribeAuthSceneListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthSceneListResponse
     *
     * @param DescribeAuthSceneListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAuthSceneListResponse
     */
    public function describeAuthSceneListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuthSceneList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 场景列表.
     *
     * @param request - DescribeAuthSceneListRequest
     *
     * @returns DescribeAuthSceneListResponse
     *
     * @param DescribeAuthSceneListRequest $request
     *
     * @return DescribeAuthSceneListResponse
     */
    public function describeAuthSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthSceneListWithOptions($request, $runtime);
    }

    /**
     * Scene List.
     *
     * @param request - DescribeAuthScenePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthScenePageListResponse
     *
     * @param DescribeAuthScenePageListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAuthScenePageListResponse
     */
    public function describeAuthScenePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sceneName) {
            @$query['sceneName'] = $request->sceneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuthScenePageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthScenePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scene List.
     *
     * @param request - DescribeAuthScenePageListRequest
     *
     * @returns DescribeAuthScenePageListResponse
     *
     * @param DescribeAuthScenePageListRequest $request
     *
     * @return DescribeAuthScenePageListResponse
     */
    public function describeAuthScenePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthScenePageListWithOptions($request, $runtime);
    }

    /**
     * Check Authorization.
     *
     * @param request - DescribeAuthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthStatusResponse
     *
     * @param DescribeAuthStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAuthStatusResponse
     */
    public function describeAuthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuthStatus',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check Authorization.
     *
     * @param request - DescribeAuthStatusRequest
     *
     * @returns DescribeAuthStatusResponse
     *
     * @param DescribeAuthStatusRequest $request
     *
     * @return DescribeAuthStatusResponse
     */
    public function describeAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthStatusWithOptions($request, $runtime);
    }

    /**
     * Average Execution Time.
     *
     * @param request - DescribeAvgExecuteCostReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvgExecuteCostReportResponse
     *
     * @param DescribeAvgExecuteCostReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAvgExecuteCostReportResponse
     */
    public function describeAvgExecuteCostReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvgExecuteCostReport',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvgExecuteCostReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Average Execution Time.
     *
     * @param request - DescribeAvgExecuteCostReportRequest
     *
     * @returns DescribeAvgExecuteCostReportResponse
     *
     * @param DescribeAvgExecuteCostReportRequest $request
     *
     * @return DescribeAvgExecuteCostReportResponse
     */
    public function describeAvgExecuteCostReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvgExecuteCostReportWithOptions($request, $runtime);
    }

    /**
     * Basic Query.
     *
     * @param request - DescribeBasicSearchPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBasicSearchPageListResponse
     *
     * @param DescribeBasicSearchPageListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBasicSearchPageListResponse
     */
    public function describeBasicSearchPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->eventBeginTime) {
            @$query['eventBeginTime'] = $request->eventBeginTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->eventEndTime) {
            @$query['eventEndTime'] = $request->eventEndTime;
        }

        if (null !== $request->fieldName) {
            @$query['fieldName'] = $request->fieldName;
        }

        if (null !== $request->fieldValue) {
            @$query['fieldValue'] = $request->fieldValue;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBasicSearchPageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBasicSearchPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Basic Query.
     *
     * @param request - DescribeBasicSearchPageListRequest
     *
     * @returns DescribeBasicSearchPageListResponse
     *
     * @param DescribeBasicSearchPageListRequest $request
     *
     * @return DescribeBasicSearchPageListResponse
     */
    public function describeBasicSearchPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBasicSearchPageListWithOptions($request, $runtime);
    }

    /**
     * 基础统计
     *
     * @param request - DescribeBasicStartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBasicStartResponse
     *
     * @param DescribeBasicStartRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBasicStartResponse
     */
    public function describeBasicStartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['appKey'] = $request->appKey;
        }

        if (null !== $request->endDs) {
            @$query['endDs'] = $request->endDs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->service) {
            @$query['service'] = $request->service;
        }

        if (null !== $request->startDs) {
            @$query['startDs'] = $request->startDs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBasicStart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBasicStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 基础统计
     *
     * @param request - DescribeBasicStartRequest
     *
     * @returns DescribeBasicStartResponse
     *
     * @param DescribeBasicStartRequest $request
     *
     * @return DescribeBasicStartResponse
     */
    public function describeBasicStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBasicStartWithOptions($request, $runtime);
    }

    /**
     * View Bypass Event.
     *
     * @param request - DescribeByPassShuntEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeByPassShuntEventResponse
     *
     * @param DescribeByPassShuntEventRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeByPassShuntEventResponse
     */
    public function describeByPassShuntEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventId) {
            @$query['eventId'] = $request->eventId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeByPassShuntEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeByPassShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View Bypass Event.
     *
     * @param request - DescribeByPassShuntEventRequest
     *
     * @returns DescribeByPassShuntEventResponse
     *
     * @param DescribeByPassShuntEventRequest $request
     *
     * @return DescribeByPassShuntEventResponse
     */
    public function describeByPassShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeByPassShuntEventWithOptions($request, $runtime);
    }

    /**
     * Query the type configuration of custom accumulated variables.
     *
     * @param request - DescribeCustVariableConfigListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustVariableConfigListResponse
     *
     * @param DescribeCustVariableConfigListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCustVariableConfigListResponse
     */
    public function describeCustVariableConfigListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->bizType) {
            @$query['bizType'] = $request->bizType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->timeType) {
            @$query['timeType'] = $request->timeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustVariableConfigList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustVariableConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the type configuration of custom accumulated variables.
     *
     * @param request - DescribeCustVariableConfigListRequest
     *
     * @returns DescribeCustVariableConfigListResponse
     *
     * @param DescribeCustVariableConfigListRequest $request
     *
     * @return DescribeCustVariableConfigListResponse
     */
    public function describeCustVariableConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustVariableConfigListWithOptions($request, $runtime);
    }

    /**
     * Cumulative Variable Details.
     *
     * @param request - DescribeCustVariableDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustVariableDetailResponse
     *
     * @param DescribeCustVariableDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCustVariableDetailResponse
     */
    public function describeCustVariableDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustVariableDetail',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustVariableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cumulative Variable Details.
     *
     * @param request - DescribeCustVariableDetailRequest
     *
     * @returns DescribeCustVariableDetailResponse
     *
     * @param DescribeCustVariableDetailRequest $request
     *
     * @return DescribeCustVariableDetailResponse
     */
    public function describeCustVariableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustVariableDetailWithOptions($request, $runtime);
    }

    /**
     * Query Custom Accumulated Variable List.
     *
     * @remarks
     * List Query of Accumulated Variables
     *
     * @param request - DescribeCustVariablePageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustVariablePageResponse
     *
     * @param DescribeCustVariablePageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCustVariablePageResponse
     */
    public function describeCustVariablePageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustVariablePage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustVariablePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Custom Accumulated Variable List.
     *
     * @remarks
     * List Query of Accumulated Variables
     *
     * @param request - DescribeCustVariablePageRequest
     *
     * @returns DescribeCustVariablePageResponse
     *
     * @param DescribeCustVariablePageRequest $request
     *
     * @return DescribeCustVariablePageResponse
     */
    public function describeCustVariablePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustVariablePageWithOptions($request, $runtime);
    }

    /**
     * Get Data Source Data Download Link.
     *
     * @param request - DescribeDataSourceDataDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataSourceDataDownloadUrlResponse
     *
     * @param DescribeDataSourceDataDownloadUrlRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDataSourceDataDownloadUrlResponse
     */
    public function describeDataSourceDataDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataSourceDataDownloadUrl',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataSourceDataDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Data Source Data Download Link.
     *
     * @param request - DescribeDataSourceDataDownloadUrlRequest
     *
     * @returns DescribeDataSourceDataDownloadUrlResponse
     *
     * @param DescribeDataSourceDataDownloadUrlRequest $request
     *
     * @return DescribeDataSourceDataDownloadUrlResponse
     */
    public function describeDataSourceDataDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceDataDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Retrieve all fields of a data source.
     *
     * @param request - DescribeDataSourceFieldsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataSourceFieldsResponse
     *
     * @param DescribeDataSourceFieldsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDataSourceFieldsResponse
     */
    public function describeDataSourceFieldsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataSourceCode) {
            @$query['dataSourceCode'] = $request->dataSourceCode;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataSourceFields',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataSourceFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve all fields of a data source.
     *
     * @param request - DescribeDataSourceFieldsRequest
     *
     * @returns DescribeDataSourceFieldsResponse
     *
     * @param DescribeDataSourceFieldsRequest $request
     *
     * @return DescribeDataSourceFieldsResponse
     */
    public function describeDataSourceFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceFieldsWithOptions($request, $runtime);
    }

    /**
     * Data Source List Interface.
     *
     * @param request - DescribeDataSourcePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataSourcePageListResponse
     *
     * @param DescribeDataSourcePageListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDataSourcePageListResponse
     */
    public function describeDataSourcePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataSourcePageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataSourcePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Data Source List Interface.
     *
     * @param request - DescribeDataSourcePageListRequest
     *
     * @returns DescribeDataSourcePageListResponse
     *
     * @param DescribeDataSourcePageListRequest $request
     *
     * @return DescribeDataSourcePageListResponse
     */
    public function describeDataSourcePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourcePageListWithOptions($request, $runtime);
    }

    /**
     * Decision Result Fluctuation Detection.
     *
     * @param request - DescribeDecisionResultFluctuationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDecisionResultFluctuationResponse
     *
     * @param DescribeDecisionResultFluctuationRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDecisionResultFluctuationResponse
     */
    public function describeDecisionResultFluctuationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDecisionResultFluctuation',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDecisionResultFluctuationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Decision Result Fluctuation Detection.
     *
     * @param request - DescribeDecisionResultFluctuationRequest
     *
     * @returns DescribeDecisionResultFluctuationResponse
     *
     * @param DescribeDecisionResultFluctuationRequest $request
     *
     * @return DescribeDecisionResultFluctuationResponse
     */
    public function describeDecisionResultFluctuation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDecisionResultFluctuationWithOptions($request, $runtime);
    }

    /**
     * Decision Result Fluctuation Trend.
     *
     * @param request - DescribeDecisionResultTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDecisionResultTrendResponse
     *
     * @param DescribeDecisionResultTrendRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDecisionResultTrendResponse
     */
    public function describeDecisionResultTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDecisionResultTrend',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDecisionResultTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Decision Result Fluctuation Trend.
     *
     * @param request - DescribeDecisionResultTrendRequest
     *
     * @returns DescribeDecisionResultTrendResponse
     *
     * @param DescribeDecisionResultTrendRequest $request
     *
     * @return DescribeDecisionResultTrendResponse
     */
    public function describeDecisionResultTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDecisionResultTrendWithOptions($request, $runtime);
    }

    /**
     * Detailed Statistics.
     *
     * @param request - DescribeDetailStartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDetailStartResponse
     *
     * @param DescribeDetailStartRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDetailStartResponse
     */
    public function describeDetailStartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['appKey'] = $request->appKey;
        }

        if (null !== $request->endDs) {
            @$query['endDs'] = $request->endDs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->service) {
            @$query['service'] = $request->service;
        }

        if (null !== $request->startDs) {
            @$query['startDs'] = $request->startDs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDetailStart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDetailStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detailed Statistics.
     *
     * @param request - DescribeDetailStartRequest
     *
     * @returns DescribeDetailStartResponse
     *
     * @param DescribeDetailStartRequest $request
     *
     * @return DescribeDetailStartResponse
     */
    public function describeDetailStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDetailStartWithOptions($request, $runtime);
    }

    /**
     * Download.
     *
     * @param request - DescribeDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadUrlResponse
     *
     * @param DescribeDownloadUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDownloadUrlResponse
     */
    public function describeDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
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
            'action' => 'DescribeDownloadUrl',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Download.
     *
     * @param request - DescribeDownloadUrlRequest
     *
     * @returns DescribeDownloadUrlResponse
     *
     * @param DescribeDownloadUrlRequest $request
     *
     * @return DescribeDownloadUrlResponse
     */
    public function describeDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Query Event Details.
     *
     * @param request - DescribeEventBaseInfoByEventCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventBaseInfoByEventCodeResponse
     *
     * @param DescribeEventBaseInfoByEventCodeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeEventBaseInfoByEventCodeResponse
     */
    public function describeEventBaseInfoByEventCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventBaseInfoByEventCode',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventBaseInfoByEventCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Event Details.
     *
     * @param request - DescribeEventBaseInfoByEventCodeRequest
     *
     * @returns DescribeEventBaseInfoByEventCodeResponse
     *
     * @param DescribeEventBaseInfoByEventCodeRequest $request
     *
     * @return DescribeEventBaseInfoByEventCodeResponse
     */
    public function describeEventBaseInfoByEventCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventBaseInfoByEventCodeWithOptions($request, $runtime);
    }

    /**
     * Query Total Event Count.
     *
     * @param request - DescribeEventCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventCountResponse
     *
     * @param DescribeEventCountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEventCountResponse
     */
    public function describeEventCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventCount',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Total Event Count.
     *
     * @param request - DescribeEventCountRequest
     *
     * @returns DescribeEventCountResponse
     *
     * @param DescribeEventCountRequest $request
     *
     * @return DescribeEventCountResponse
     */
    public function describeEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventCountWithOptions($request, $runtime);
    }

    /**
     * Query event details based on the request ID.
     *
     * @param request - DescribeEventDetailByRequestIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventDetailByRequestIdResponse
     *
     * @param DescribeEventDetailByRequestIdRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeEventDetailByRequestIdResponse
     */
    public function describeEventDetailByRequestIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->eventTime) {
            @$query['eventTime'] = $request->eventTime;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sRequestId) {
            @$query['sRequestId'] = $request->sRequestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventDetailByRequestId',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventDetailByRequestIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query event details based on the request ID.
     *
     * @param request - DescribeEventDetailByRequestIdRequest
     *
     * @returns DescribeEventDetailByRequestIdResponse
     *
     * @param DescribeEventDetailByRequestIdRequest $request
     *
     * @return DescribeEventDetailByRequestIdResponse
     */
    public function describeEventDetailByRequestId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventDetailByRequestIdWithOptions($request, $runtime);
    }

    /**
     * Query Event History Details.
     *
     * @param request - DescribeEventLogDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventLogDetailResponse
     *
     * @param DescribeEventLogDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEventLogDetailResponse
     */
    public function describeEventLogDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->reqIdByLog) {
            @$query['reqIdByLog'] = $request->reqIdByLog;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventLogDetail',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventLogDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Event History Details.
     *
     * @param request - DescribeEventLogDetailRequest
     *
     * @returns DescribeEventLogDetailResponse
     *
     * @param DescribeEventLogDetailRequest $request
     *
     * @return DescribeEventLogDetailResponse
     */
    public function describeEventLogDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventLogDetailWithOptions($request, $runtime);
    }

    /**
     * 查询事件历史列表.
     *
     * @param request - DescribeEventLogPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventLogPageResponse
     *
     * @param DescribeEventLogPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEventLogPageResponse
     */
    public function describeEventLogPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->accountIdPRP) {
            @$query['accountIdPRP'] = $request->accountIdPRP;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->condition1AL) {
            @$query['condition1AL'] = $request->condition1AL;
        }

        if (null !== $request->condition2AL) {
            @$query['condition2AL'] = $request->condition2AL;
        }

        if (null !== $request->condition3AL) {
            @$query['condition3AL'] = $request->condition3AL;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->deviceTypeLRP) {
            @$query['deviceTypeLRP'] = $request->deviceTypeLRP;
        }

        if (null !== $request->emailPRP) {
            @$query['emailPRP'] = $request->emailPRP;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->failReasonLRP) {
            @$query['failReasonLRP'] = $request->failReasonLRP;
        }

        if (null !== $request->ipPRP) {
            @$query['ipPRP'] = $request->ipPRP;
        }

        if (null !== $request->loginResultARP) {
            @$query['loginResultARP'] = $request->loginResultARP;
        }

        if (null !== $request->loginTypeLRP) {
            @$query['loginTypeLRP'] = $request->loginTypeLRP;
        }

        if (null !== $request->macPRP) {
            @$query['macPRP'] = $request->macPRP;
        }

        if (null !== $request->mobilePRP) {
            @$query['mobilePRP'] = $request->mobilePRP;
        }

        if (null !== $request->nickNamePRP) {
            @$query['nickNamePRP'] = $request->nickNamePRP;
        }

        if (null !== $request->operateSourceLRP) {
            @$query['operateSourceLRP'] = $request->operateSourceLRP;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->referPRP) {
            @$query['referPRP'] = $request->referPRP;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->registerIpPRP) {
            @$query['registerIpPRP'] = $request->registerIpPRP;
        }

        if (null !== $request->reqIdPBS) {
            @$query['reqIdPBS'] = $request->reqIdPBS;
        }

        if (null !== $request->scoreEBS) {
            @$query['scoreEBS'] = $request->scoreEBS;
        }

        if (null !== $request->scoreSBS) {
            @$query['scoreSBS'] = $request->scoreSBS;
        }

        if (null !== $request->serviceABS) {
            @$query['serviceABS'] = $request->serviceABS;
        }

        if (null !== $request->tagsLBS) {
            @$query['tagsLBS'] = $request->tagsLBS;
        }

        if (null !== $request->umidPDI) {
            @$query['umidPDI'] = $request->umidPDI;
        }

        if (null !== $request->userAgentPRP) {
            @$query['userAgentPRP'] = $request->userAgentPRP;
        }

        if (null !== $request->userNameTypeLRP) {
            @$query['userNameTypeLRP'] = $request->userNameTypeLRP;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventLogPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventLogPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询事件历史列表.
     *
     * @param request - DescribeEventLogPageRequest
     *
     * @returns DescribeEventLogPageResponse
     *
     * @param DescribeEventLogPageRequest $request
     *
     * @return DescribeEventLogPageResponse
     */
    public function describeEventLogPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventLogPageWithOptions($request, $runtime);
    }

    /**
     * Paged Query for Events.
     *
     * @param request - DescribeEventPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventPageListResponse
     *
     * @param DescribeEventPageListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEventPageListResponse
     */
    public function describeEventPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->eventName) {
            @$query['eventName'] = $request->eventName;
        }

        if (null !== $request->eventStatus) {
            @$query['eventStatus'] = $request->eventStatus;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventPageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paged Query for Events.
     *
     * @param request - DescribeEventPageListRequest
     *
     * @returns DescribeEventPageListResponse
     *
     * @param DescribeEventPageListRequest $request
     *
     * @return DescribeEventPageListResponse
     */
    public function describeEventPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventPageListWithOptions($request, $runtime);
    }

    /**
     * Risk Dashboard.
     *
     * @param request - DescribeEventResultBarChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventResultBarChartResponse
     *
     * @param DescribeEventResultBarChartRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEventResultBarChartResponse
     */
    public function describeEventResultBarChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventResultBarChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventResultBarChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Risk Dashboard.
     *
     * @param request - DescribeEventResultBarChartRequest
     *
     * @returns DescribeEventResultBarChartResponse
     *
     * @param DescribeEventResultBarChartRequest $request
     *
     * @return DescribeEventResultBarChartResponse
     */
    public function describeEventResultBarChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventResultBarChartWithOptions($request, $runtime);
    }

    /**
     * Event Overview List.
     *
     * @param request - DescribeEventResultListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventResultListResponse
     *
     * @param DescribeEventResultListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEventResultListResponse
     */
    public function describeEventResultListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventResultList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventResultListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Event Overview List.
     *
     * @param request - DescribeEventResultListRequest
     *
     * @returns DescribeEventResultListResponse
     *
     * @param DescribeEventResultListRequest $request
     *
     * @return DescribeEventResultListResponse
     */
    public function describeEventResultList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventResultListWithOptions($request, $runtime);
    }

    /**
     * Query Policy Download List.
     *
     * @param request - DescribeEventTaskHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventTaskHistoryResponse
     *
     * @param DescribeEventTaskHistoryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEventTaskHistoryResponse
     */
    public function describeEventTaskHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventTaskHistory',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventTaskHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Policy Download List.
     *
     * @param request - DescribeEventTaskHistoryRequest
     *
     * @returns DescribeEventTaskHistoryResponse
     *
     * @param DescribeEventTaskHistoryRequest $request
     *
     * @return DescribeEventTaskHistoryResponse
     */
    public function describeEventTaskHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTaskHistoryWithOptions($request, $runtime);
    }

    /**
     * Event Invocation Count.
     *
     * @param request - DescribeEventTotalCountReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventTotalCountReportResponse
     *
     * @param DescribeEventTotalCountReportRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeEventTotalCountReportResponse
     */
    public function describeEventTotalCountReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventTotalCountReport',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventTotalCountReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Event Invocation Count.
     *
     * @param request - DescribeEventTotalCountReportRequest
     *
     * @returns DescribeEventTotalCountReportResponse
     *
     * @param DescribeEventTotalCountReportRequest $request
     *
     * @return DescribeEventTotalCountReportResponse
     */
    public function describeEventTotalCountReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTotalCountReportWithOptions($request, $runtime);
    }

    /**
     * Batch Import Policy.
     *
     * @param request - DescribeEventUploadPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventUploadPolicyResponse
     *
     * @param DescribeEventUploadPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEventUploadPolicyResponse
     */
    public function describeEventUploadPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventUploadPolicy',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Import Policy.
     *
     * @param request - DescribeEventUploadPolicyRequest
     *
     * @returns DescribeEventUploadPolicyResponse
     *
     * @param DescribeEventUploadPolicyRequest $request
     *
     * @return DescribeEventUploadPolicyResponse
     */
    public function describeEventUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * 查询事件变量.
     *
     * @param request - DescribeEventVariableListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventVariableListResponse
     *
     * @param DescribeEventVariableListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEventVariableListResponse
     */
    public function describeEventVariableListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->filterDTO) {
            @$query['filterDTO'] = $request->filterDTO;
        }

        if (null !== $request->refObjId) {
            @$query['refObjId'] = $request->refObjId;
        }

        if (null !== $request->refObjType) {
            @$query['refObjType'] = $request->refObjType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventVariableList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventVariableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询事件变量.
     *
     * @param request - DescribeEventVariableListRequest
     *
     * @returns DescribeEventVariableListResponse
     *
     * @param DescribeEventVariableListRequest $request
     *
     * @return DescribeEventVariableListResponse
     */
    public function describeEventVariableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventVariableListWithOptions($request, $runtime);
    }

    /**
     * Query Event Template.
     *
     * @param request - DescribeEventVariableTemplateBindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventVariableTemplateBindResponse
     *
     * @param DescribeEventVariableTemplateBindRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeEventVariableTemplateBindResponse
     */
    public function describeEventVariableTemplateBindWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->inputs) {
            @$query['inputs'] = $request->inputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->templateCode) {
            @$query['templateCode'] = $request->templateCode;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventVariableTemplateBind',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventVariableTemplateBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Event Template.
     *
     * @param request - DescribeEventVariableTemplateBindRequest
     *
     * @returns DescribeEventVariableTemplateBindResponse
     *
     * @param DescribeEventVariableTemplateBindRequest $request
     *
     * @return DescribeEventVariableTemplateBindResponse
     */
    public function describeEventVariableTemplateBind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventVariableTemplateBindWithOptions($request, $runtime);
    }

    /**
     * Query Event Template.
     *
     * @param request - DescribeEventVariableTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventVariableTemplateListResponse
     *
     * @param DescribeEventVariableTemplateListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeEventVariableTemplateListResponse
     */
    public function describeEventVariableTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->inputs) {
            @$query['inputs'] = $request->inputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->templateCode) {
            @$query['templateCode'] = $request->templateCode;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventVariableTemplateList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventVariableTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Event Template.
     *
     * @param request - DescribeEventVariableTemplateListRequest
     *
     * @returns DescribeEventVariableTemplateListResponse
     *
     * @param DescribeEventVariableTemplateListRequest $request
     *
     * @return DescribeEventVariableTemplateListResponse
     */
    public function describeEventVariableTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventVariableTemplateListWithOptions($request, $runtime);
    }

    /**
     * Query Event Variables.
     *
     * @param request - DescribeEventsVariableListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsVariableListResponse
     *
     * @param DescribeEventsVariableListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEventsVariableListResponse
     */
    public function describeEventsVariableListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->filterDTO) {
            @$query['filterDTO'] = $request->filterDTO;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventsVariableList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventsVariableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Event Variables.
     *
     * @param request - DescribeEventsVariableListRequest
     *
     * @returns DescribeEventsVariableListResponse
     *
     * @param DescribeEventsVariableListRequest $request
     *
     * @return DescribeEventsVariableListResponse
     */
    public function describeEventsVariableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsVariableListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeExcuteNumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExcuteNumResponse
     *
     * @param DescribeExcuteNumRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeExcuteNumResponse
     */
    public function describeExcuteNumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->degree) {
            @$query['Degree'] = $request->degree;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExcuteNum',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExcuteNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeExcuteNumRequest
     *
     * @returns DescribeExcuteNumResponse
     *
     * @param DescribeExcuteNumRequest $request
     *
     * @return DescribeExcuteNumResponse
     */
    public function describeExcuteNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcuteNumWithOptions($request, $runtime);
    }

    /**
     * Validate if the field name is duplicated (based on user\\"s organization).
     *
     * @param request - DescribeExistNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExistNameResponse
     *
     * @param DescribeExistNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeExistNameResponse
     */
    public function describeExistNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExistName',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExistNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validate if the field name is duplicated (based on user\\"s organization).
     *
     * @param request - DescribeExistNameRequest
     *
     * @returns DescribeExistNameResponse
     *
     * @param DescribeExistNameRequest $request
     *
     * @return DescribeExistNameResponse
     */
    public function describeExistName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExistNameWithOptions($request, $runtime);
    }

    /**
     * Check if Scene Exists.
     *
     * @param request - DescribeExistSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExistSceneResponse
     *
     * @param DescribeExistSceneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeExistSceneResponse
     */
    public function describeExistSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExistScene',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExistSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check if Scene Exists.
     *
     * @param request - DescribeExistSceneRequest
     *
     * @returns DescribeExistSceneResponse
     *
     * @param DescribeExistSceneRequest $request
     *
     * @return DescribeExistSceneResponse
     */
    public function describeExistScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExistSceneWithOptions($request, $runtime);
    }

    /**
     * Custom Variable Details.
     *
     * @param request - DescribeExpressionVariableDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressionVariableDetailResponse
     *
     * @param DescribeExpressionVariableDetailRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeExpressionVariableDetailResponse
     */
    public function describeExpressionVariableDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressionVariableDetail',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressionVariableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Custom Variable Details.
     *
     * @param request - DescribeExpressionVariableDetailRequest
     *
     * @returns DescribeExpressionVariableDetailResponse
     *
     * @param DescribeExpressionVariableDetailRequest $request
     *
     * @return DescribeExpressionVariableDetailResponse
     */
    public function describeExpressionVariableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressionVariableDetailWithOptions($request, $runtime);
    }

    /**
     * Function List.
     *
     * @param request - DescribeExpressionVariableFunctionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressionVariableFunctionListResponse
     *
     * @param DescribeExpressionVariableFunctionListRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeExpressionVariableFunctionListResponse
     */
    public function describeExpressionVariableFunctionListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressionVariableFunctionList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressionVariableFunctionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Function List.
     *
     * @param request - DescribeExpressionVariableFunctionListRequest
     *
     * @returns DescribeExpressionVariableFunctionListResponse
     *
     * @param DescribeExpressionVariableFunctionListRequest $request
     *
     * @return DescribeExpressionVariableFunctionListResponse
     */
    public function describeExpressionVariableFunctionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressionVariableFunctionListWithOptions($request, $runtime);
    }

    /**
     * Paged Query for Custom Variables.
     *
     * @param request - DescribeExpressionVariablePageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressionVariablePageResponse
     *
     * @param DescribeExpressionVariablePageRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeExpressionVariablePageResponse
     */
    public function describeExpressionVariablePageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->outputs) {
            @$query['outputs'] = $request->outputs;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->value) {
            @$query['value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressionVariablePage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressionVariablePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paged Query for Custom Variables.
     *
     * @param request - DescribeExpressionVariablePageRequest
     *
     * @returns DescribeExpressionVariablePageResponse
     *
     * @param DescribeExpressionVariablePageRequest $request
     *
     * @return DescribeExpressionVariablePageResponse
     */
    public function describeExpressionVariablePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressionVariablePageWithOptions($request, $runtime);
    }

    /**
     * Get Field Details.
     *
     * @param request - DescribeFieldByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFieldByIdResponse
     *
     * @param DescribeFieldByIdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFieldByIdResponse
     */
    public function describeFieldByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFieldById',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFieldByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Field Details.
     *
     * @param request - DescribeFieldByIdRequest
     *
     * @returns DescribeFieldByIdResponse
     *
     * @param DescribeFieldByIdRequest $request
     *
     * @return DescribeFieldByIdResponse
     */
    public function describeFieldById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldByIdWithOptions($request, $runtime);
    }

    /**
     * Query Field List.
     *
     * @param request - DescribeFieldListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFieldListResponse
     *
     * @param DescribeFieldListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFieldListResponse
     */
    public function describeFieldListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->condition) {
            @$query['condition'] = $request->condition;
        }

        if (null !== $request->inputs) {
            @$query['inputs'] = $request->inputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFieldList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFieldListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Field List.
     *
     * @param request - DescribeFieldListRequest
     *
     * @returns DescribeFieldListResponse
     *
     * @param DescribeFieldListRequest $request
     *
     * @return DescribeFieldListResponse
     */
    public function describeFieldList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldListWithOptions($request, $runtime);
    }

    /**
     * Query paged list of fields.
     *
     * @param request - DescribeFieldPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFieldPageResponse
     *
     * @param DescribeFieldPageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFieldPageResponse
     */
    public function describeFieldPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->classify) {
            @$query['classify'] = $request->classify;
        }

        if (null !== $request->condition) {
            @$query['condition'] = $request->condition;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFieldPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFieldPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query paged list of fields.
     *
     * @param request - DescribeFieldPageRequest
     *
     * @returns DescribeFieldPageResponse
     *
     * @param DescribeFieldPageRequest $request
     *
     * @return DescribeFieldPageResponse
     */
    public function describeFieldPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldPageWithOptions($request, $runtime);
    }

    /**
     * Community Account List.
     *
     * @param request - DescribeGroupAccountPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupAccountPageResponse
     *
     * @param DescribeGroupAccountPageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGroupAccountPageResponse
     */
    public function describeGroupAccountPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->communityNo) {
            @$query['communityNo'] = $request->communityNo;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->fieldKey) {
            @$query['fieldKey'] = $request->fieldKey;
        }

        if (null !== $request->fieldVal) {
            @$query['fieldVal'] = $request->fieldVal;
        }

        if (null !== $request->isPage) {
            @$query['isPage'] = $request->isPage;
        }

        if (null !== $request->order) {
            @$query['order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupAccountPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupAccountPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Community Account List.
     *
     * @param request - DescribeGroupAccountPageRequest
     *
     * @returns DescribeGroupAccountPageResponse
     *
     * @param DescribeGroupAccountPageRequest $request
     *
     * @return DescribeGroupAccountPageResponse
     */
    public function describeGroupAccountPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupAccountPageWithOptions($request, $runtime);
    }

    /**
     * Community List Query Conditions.
     *
     * @param request - DescribeGroupConditionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupConditionListResponse
     *
     * @param DescribeGroupConditionListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeGroupConditionListResponse
     */
    public function describeGroupConditionListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupConditionList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupConditionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Community List Query Conditions.
     *
     * @param request - DescribeGroupConditionListRequest
     *
     * @returns DescribeGroupConditionListResponse
     *
     * @param DescribeGroupConditionListRequest $request
     *
     * @return DescribeGroupConditionListResponse
     */
    public function describeGroupConditionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupConditionListWithOptions($request, $runtime);
    }

    /**
     * Community List.
     *
     * @param request - DescribeGroupPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupPageResponse
     *
     * @param DescribeGroupPageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeGroupPageResponse
     */
    public function describeGroupPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->order) {
            @$query['order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        if (null !== $request->timeType) {
            @$query['timeType'] = $request->timeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Community List.
     *
     * @param request - DescribeGroupPageRequest
     *
     * @returns DescribeGroupPageResponse
     *
     * @param DescribeGroupPageRequest $request
     *
     * @return DescribeGroupPageResponse
     */
    public function describeGroupPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupPageWithOptions($request, $runtime);
    }

    /**
     * Risk Communities Discovered Today.
     *
     * @param request - DescribeGroupStatisticsByTodayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupStatisticsByTodayResponse
     *
     * @param DescribeGroupStatisticsByTodayRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGroupStatisticsByTodayResponse
     */
    public function describeGroupStatisticsByTodayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupStatisticsByToday',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupStatisticsByTodayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Risk Communities Discovered Today.
     *
     * @param request - DescribeGroupStatisticsByTodayRequest
     *
     * @returns DescribeGroupStatisticsByTodayResponse
     *
     * @param DescribeGroupStatisticsByTodayRequest $request
     *
     * @return DescribeGroupStatisticsByTodayResponse
     */
    public function describeGroupStatisticsByToday($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupStatisticsByTodayWithOptions($request, $runtime);
    }

    /**
     * Recent Trends in Risk Communities.
     *
     * @param request - DescribeGroupTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupTrendResponse
     *
     * @param DescribeGroupTrendRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeGroupTrendResponse
     */
    public function describeGroupTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->day) {
            @$query['day'] = $request->day;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupTrend',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recent Trends in Risk Communities.
     *
     * @param request - DescribeGroupTrendRequest
     *
     * @returns DescribeGroupTrendResponse
     *
     * @param DescribeGroupTrendRequest $request
     *
     * @return DescribeGroupTrendResponse
     */
    public function describeGroupTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupTrendWithOptions($request, $runtime);
    }

    /**
     * Check if the policy name under the event name exists.
     *
     * @param request - DescribeHasRuleNameByEventCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHasRuleNameByEventCodeResponse
     *
     * @param DescribeHasRuleNameByEventCodeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeHasRuleNameByEventCodeResponse
     */
    public function describeHasRuleNameByEventCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->excludeRuleId) {
            @$query['excludeRuleId'] = $request->excludeRuleId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleName) {
            @$query['ruleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHasRuleNameByEventCode',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHasRuleNameByEventCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check if the policy name under the event name exists.
     *
     * @param request - DescribeHasRuleNameByEventCodeRequest
     *
     * @returns DescribeHasRuleNameByEventCodeResponse
     *
     * @param DescribeHasRuleNameByEventCodeRequest $request
     *
     * @return DescribeHasRuleNameByEventCodeResponse
     */
    public function describeHasRuleNameByEventCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHasRuleNameByEventCodeWithOptions($request, $runtime);
    }

    /**
     * Risk Map Overview Chart (Pie Chart).
     *
     * @param request - DescribeHighRiskPieChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHighRiskPieChartResponse
     *
     * @param DescribeHighRiskPieChartRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHighRiskPieChartResponse
     */
    public function describeHighRiskPieChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHighRiskPieChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHighRiskPieChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Risk Map Overview Chart (Pie Chart).
     *
     * @param request - DescribeHighRiskPieChartRequest
     *
     * @returns DescribeHighRiskPieChartResponse
     *
     * @param DescribeHighRiskPieChartRequest $request
     *
     * @return DescribeHighRiskPieChartResponse
     */
    public function describeHighRiskPieChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighRiskPieChartWithOptions($request, $runtime);
    }

    /**
     * Policy Hit Fluctuation Detection.
     *
     * @param request - DescribeHitRuleFluctuationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHitRuleFluctuationResponse
     *
     * @param DescribeHitRuleFluctuationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeHitRuleFluctuationResponse
     */
    public function describeHitRuleFluctuationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleStatus) {
            @$query['ruleStatus'] = $request->ruleStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHitRuleFluctuation',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHitRuleFluctuationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Policy Hit Fluctuation Detection.
     *
     * @param request - DescribeHitRuleFluctuationRequest
     *
     * @returns DescribeHitRuleFluctuationResponse
     *
     * @param DescribeHitRuleFluctuationRequest $request
     *
     * @return DescribeHitRuleFluctuationResponse
     */
    public function describeHitRuleFluctuation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHitRuleFluctuationWithOptions($request, $runtime);
    }

    /**
     * Top 20 Hits for Main Events/Bypass/Diversion Strategies.
     *
     * @param request - DescribeHitRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHitRuleListResponse
     *
     * @param DescribeHitRuleListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeHitRuleListResponse
     */
    public function describeHitRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->eventType) {
            @$query['eventType'] = $request->eventType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHitRuleList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHitRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Top 20 Hits for Main Events/Bypass/Diversion Strategies.
     *
     * @param request - DescribeHitRuleListRequest
     *
     * @returns DescribeHitRuleListResponse
     *
     * @param DescribeHitRuleListRequest $request
     *
     * @return DescribeHitRuleListResponse
     */
    public function describeHitRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHitRuleListWithOptions($request, $runtime);
    }

    /**
     * Hit Rule Trend.
     *
     * @param request - DescribeHitRuleTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHitRuleTrendResponse
     *
     * @param DescribeHitRuleTrendRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHitRuleTrendResponse
     */
    public function describeHitRuleTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleStatus) {
            @$query['ruleStatus'] = $request->ruleStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHitRuleTrend',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHitRuleTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Hit Rule Trend.
     *
     * @param request - DescribeHitRuleTrendRequest
     *
     * @returns DescribeHitRuleTrendResponse
     *
     * @param DescribeHitRuleTrendRequest $request
     *
     * @return DescribeHitRuleTrendResponse
     */
    public function describeHitRuleTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHitRuleTrendWithOptions($request, $runtime);
    }

    /**
     * Initialization Popup Information.
     *
     * @remarks
     * Add prompt information in BOPS, POC new page initialization popup prompts this information
     *
     * @param request - DescribeInitDigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInitDigResponse
     *
     * @param DescribeInitDigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeInitDigResponse
     */
    public function describeInitDigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInitDig',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInitDigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initialization Popup Information.
     *
     * @remarks
     * Add prompt information in BOPS, POC new page initialization popup prompts this information
     *
     * @param request - DescribeInitDigRequest
     *
     * @returns DescribeInitDigResponse
     *
     * @param DescribeInitDigRequest $request
     *
     * @return DescribeInitDigResponse
     */
    public function describeInitDig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInitDigWithOptions($request, $runtime);
    }

    /**
     * Query Total Number of Events.
     *
     * @param request - DescribeInputFeildCountByEventCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInputFeildCountByEventCodeResponse
     *
     * @param DescribeInputFeildCountByEventCodeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeInputFeildCountByEventCodeResponse
     */
    public function describeInputFeildCountByEventCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInputFeildCountByEventCode',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInputFeildCountByEventCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Total Number of Events.
     *
     * @param request - DescribeInputFeildCountByEventCodeRequest
     *
     * @returns DescribeInputFeildCountByEventCodeResponse
     *
     * @param DescribeInputFeildCountByEventCodeRequest $request
     *
     * @return DescribeInputFeildCountByEventCodeResponse
     */
    public function describeInputFeildCountByEventCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInputFeildCountByEventCodeWithOptions($request, $runtime);
    }

    /**
     * Display of Model List.
     *
     * @param request - DescribeListModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeListModelResponse
     *
     * @param DescribeListModelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeListModelResponse
     */
    public function describeListModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeListModel',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeListModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Display of Model List.
     *
     * @param request - DescribeListModelRequest
     *
     * @returns DescribeListModelResponse
     *
     * @param DescribeListModelRequest $request
     *
     * @return DescribeListModelResponse
     */
    public function describeListModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListModelWithOptions($request, $runtime);
    }

    /**
     * Task List.
     *
     * @param request - DescribeListPocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeListPocResponse
     *
     * @param DescribeListPocRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeListPocResponse
     */
    public function describeListPocWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeListPoc',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeListPocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Task List.
     *
     * @param request - DescribeListPocRequest
     *
     * @returns DescribeListPocResponse
     *
     * @param DescribeListPocRequest $request
     *
     * @return DescribeListPocResponse
     */
    public function describeListPoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListPocWithOptions($request, $runtime);
    }

    /**
     * Get Monitoring Object List.
     *
     * @param request - DescribeLoanExecListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoanExecListResponse
     *
     * @param DescribeLoanExecListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLoanExecListResponse
     */
    public function describeLoanExecListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->batchNo) {
            @$query['batchNo'] = $request->batchNo;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->monitorObj) {
            @$query['monitorObj'] = $request->monitorObj;
        }

        if (null !== $request->monitorStatus) {
            @$query['monitorStatus'] = $request->monitorStatus;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoanExecList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoanExecListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Monitoring Object List.
     *
     * @param request - DescribeLoanExecListRequest
     *
     * @returns DescribeLoanExecListResponse
     *
     * @param DescribeLoanExecListRequest $request
     *
     * @return DescribeLoanExecListResponse
     */
    public function describeLoanExecList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoanExecListWithOptions($request, $runtime);
    }

    /**
     * Get Loan Monitoring Task List.
     *
     * @param request - DescribeLoanTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoanTaskListResponse
     *
     * @param DescribeLoanTaskListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLoanTaskListResponse
     */
    public function describeLoanTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->batchNo) {
            @$query['batchNo'] = $request->batchNo;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->monitorStatus) {
            @$query['monitorStatus'] = $request->monitorStatus;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoanTaskList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoanTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Loan Monitoring Task List.
     *
     * @param request - DescribeLoanTaskListRequest
     *
     * @returns DescribeLoanTaskListResponse
     *
     * @param DescribeLoanTaskListRequest $request
     *
     * @return DescribeLoanTaskListResponse
     */
    public function describeLoanTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoanTaskListWithOptions($request, $runtime);
    }

    /**
     * Mark List.
     *
     * @param request - DescribeMarkPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMarkPageResponse
     *
     * @param DescribeMarkPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeMarkPageResponse
     */
    public function describeMarkPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->isPage) {
            @$query['isPage'] = $request->isPage;
        }

        if (null !== $request->order) {
            @$query['order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->taskLogId) {
            @$query['taskLogId'] = $request->taskLogId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMarkPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMarkPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mark List.
     *
     * @param request - DescribeMarkPageRequest
     *
     * @returns DescribeMarkPageResponse
     *
     * @param DescribeMarkPageRequest $request
     *
     * @return DescribeMarkPageResponse
     */
    public function describeMarkPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMarkPageWithOptions($request, $runtime);
    }

    /**
     * Check Permission.
     *
     * @param request - DescribeMenuPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMenuPermissionResponse
     *
     * @param DescribeMenuPermissionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMenuPermissionResponse
     */
    public function describeMenuPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->permissionType) {
            @$query['permissionType'] = $request->permissionType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMenuPermission',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMenuPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check Permission.
     *
     * @param request - DescribeMenuPermissionRequest
     *
     * @returns DescribeMenuPermissionResponse
     *
     * @param DescribeMenuPermissionRequest $request
     *
     * @return DescribeMenuPermissionResponse
     */
    public function describeMenuPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMenuPermissionWithOptions($request, $runtime);
    }

    /**
     * View Result.
     *
     * @param request - DescribeModelDetailsByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelDetailsByIdResponse
     *
     * @param DescribeModelDetailsByIdRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeModelDetailsByIdResponse
     */
    public function describeModelDetailsByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelId) {
            @$query['ModelId'] = $request->modelId;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModelDetailsById',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelDetailsByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View Result.
     *
     * @param request - DescribeModelDetailsByIdRequest
     *
     * @returns DescribeModelDetailsByIdResponse
     *
     * @param DescribeModelDetailsByIdRequest $request
     *
     * @return DescribeModelDetailsByIdResponse
     */
    public function describeModelDetailsById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelDetailsByIdWithOptions($request, $runtime);
    }

    /**
     * Get File Upload Credentials.
     *
     * @param request - DescribeModelOssPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelOssPolicyResponse
     *
     * @param DescribeModelOssPolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeModelOssPolicyResponse
     */
    public function describeModelOssPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModelOssPolicy',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelOssPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get File Upload Credentials.
     *
     * @param request - DescribeModelOssPolicyRequest
     *
     * @returns DescribeModelOssPolicyResponse
     *
     * @param DescribeModelOssPolicyRequest $request
     *
     * @return DescribeModelOssPolicyResponse
     */
    public function describeModelOssPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelOssPolicyWithOptions($request, $runtime);
    }

    /**
     * Query Task Limit.
     *
     * @param request - DescribeMonitorTaskLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorTaskLimitResponse
     *
     * @param DescribeMonitorTaskLimitRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMonitorTaskLimitResponse
     */
    public function describeMonitorTaskLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorTaskLimit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorTaskLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Task Limit.
     *
     * @param request - DescribeMonitorTaskLimitRequest
     *
     * @returns DescribeMonitorTaskLimitResponse
     *
     * @param DescribeMonitorTaskLimitRequest $request
     *
     * @return DescribeMonitorTaskLimitResponse
     */
    public function describeMonitorTaskLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorTaskLimitWithOptions($request, $runtime);
    }

    /**
     * Query Name List Pagination.
     *
     * @param request - DescribeNameListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNameListResponse
     *
     * @param DescribeNameListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeNameListResponse
     */
    public function describeNameListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->value) {
            @$query['value'] = $request->value;
        }

        if (null !== $request->variableId) {
            @$query['variableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNameList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Name List Pagination.
     *
     * @param request - DescribeNameListRequest
     *
     * @returns DescribeNameListResponse
     *
     * @param DescribeNameListRequest $request
     *
     * @return DescribeNameListResponse
     */
    public function describeNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListWithOptions($request, $runtime);
    }

    /**
     * Download Name List.
     *
     * @param request - DescribeNameListDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNameListDownloadUrlResponse
     *
     * @param DescribeNameListDownloadUrlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeNameListDownloadUrlResponse
     */
    public function describeNameListDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->variableId) {
            @$query['variableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNameListDownloadUrl',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNameListDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Download Name List.
     *
     * @param request - DescribeNameListDownloadUrlRequest
     *
     * @returns DescribeNameListDownloadUrlResponse
     *
     * @param DescribeNameListDownloadUrlRequest $request
     *
     * @return DescribeNameListDownloadUrlResponse
     */
    public function describeNameListDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Query Name List Limit.
     *
     * @param request - DescribeNameListLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNameListLimitResponse
     *
     * @param DescribeNameListLimitRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNameListLimitResponse
     */
    public function describeNameListLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNameListLimit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNameListLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Name List Limit.
     *
     * @param request - DescribeNameListLimitRequest
     *
     * @returns DescribeNameListLimitResponse
     *
     * @param DescribeNameListLimitRequest $request
     *
     * @return DescribeNameListLimitResponse
     */
    public function describeNameListLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListLimitWithOptions($request, $runtime);
    }

    /**
     * Query the content of the list.
     *
     * @param request - DescribeNameListPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNameListPageListResponse
     *
     * @param DescribeNameListPageListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeNameListPageListResponse
     */
    public function describeNameListPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->updateBeginTime) {
            @$query['updateBeginTime'] = $request->updateBeginTime;
        }

        if (null !== $request->updateEndTime) {
            @$query['updateEndTime'] = $request->updateEndTime;
        }

        if (null !== $request->value) {
            @$query['value'] = $request->value;
        }

        if (null !== $request->variableId) {
            @$query['variableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNameListPageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNameListPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the content of the list.
     *
     * @param request - DescribeNameListPageListRequest
     *
     * @returns DescribeNameListPageListResponse
     *
     * @param DescribeNameListPageListRequest $request
     *
     * @return DescribeNameListPageListResponse
     */
    public function describeNameListPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListPageListWithOptions($request, $runtime);
    }

    /**
     * List of Name Types.
     *
     * @param request - DescribeNameListTypeListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNameListTypeListResponse
     *
     * @param DescribeNameListTypeListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeNameListTypeListResponse
     */
    public function describeNameListTypeListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNameListTypeList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNameListTypeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List of Name Types.
     *
     * @param request - DescribeNameListTypeListRequest
     *
     * @returns DescribeNameListTypeListResponse
     *
     * @param DescribeNameListTypeListRequest $request
     *
     * @return DescribeNameListTypeListResponse
     */
    public function describeNameListTypeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListTypeListWithOptions($request, $runtime);
    }

    /**
     * Name List.
     *
     * @param request - DescribeNameListVariablePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNameListVariablePageListResponse
     *
     * @param DescribeNameListVariablePageListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeNameListVariablePageListResponse
     */
    public function describeNameListVariablePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameListType) {
            @$query['nameListType'] = $request->nameListType;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->value) {
            @$query['value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNameListVariablePageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNameListVariablePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Name List.
     *
     * @param request - DescribeNameListVariablePageListRequest
     *
     * @returns DescribeNameListVariablePageListResponse
     *
     * @param DescribeNameListVariablePageListRequest $request
     *
     * @return DescribeNameListVariablePageListResponse
     */
    public function describeNameListVariablePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNameListVariablePageListWithOptions($request, $runtime);
    }

    /**
     * Query event list by event name.
     *
     * @param request - DescribeOperationLogPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOperationLogPageListResponse
     *
     * @param DescribeOperationLogPageListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeOperationLogPageListResponse
     */
    public function describeOperationLogPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOperationLogPageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOperationLogPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query event list by event name.
     *
     * @param request - DescribeOperationLogPageListRequest
     *
     * @returns DescribeOperationLogPageListResponse
     *
     * @param DescribeOperationLogPageListRequest $request
     *
     * @return DescribeOperationLogPageListResponse
     */
    public function describeOperationLogPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperationLogPageListWithOptions($request, $runtime);
    }

    /**
     * Query the operator mapping list based on customer ID.
     *
     * @param request - DescribeOperatorListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOperatorListResponse
     *
     * @param DescribeOperatorListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeOperatorListResponse
     */
    public function describeOperatorListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOperatorList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOperatorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the operator mapping list based on customer ID.
     *
     * @param request - DescribeOperatorListRequest
     *
     * @returns DescribeOperatorListResponse
     *
     * @param DescribeOperatorListRequest $request
     *
     * @return DescribeOperatorListResponse
     */
    public function describeOperatorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorListWithOptions($request, $runtime);
    }

    /**
     * Query Operator Mapping List.
     *
     * @param request - DescribeOperatorListBySceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOperatorListBySceneResponse
     *
     * @param DescribeOperatorListBySceneRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeOperatorListBySceneResponse
     */
    public function describeOperatorListBySceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOperatorListByScene',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOperatorListBySceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Operator Mapping List.
     *
     * @param request - DescribeOperatorListBySceneRequest
     *
     * @returns DescribeOperatorListBySceneResponse
     *
     * @param DescribeOperatorListBySceneRequest $request
     *
     * @return DescribeOperatorListBySceneResponse
     */
    public function describeOperatorListByScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorListBySceneWithOptions($request, $runtime);
    }

    /**
     * Query Operator Mapping List.
     *
     * @param request - DescribeOperatorListByTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOperatorListByTypeResponse
     *
     * @param DescribeOperatorListByTypeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeOperatorListByTypeResponse
     */
    public function describeOperatorListByTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOperatorListByType',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOperatorListByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Operator Mapping List.
     *
     * @param request - DescribeOperatorListByTypeRequest
     *
     * @returns DescribeOperatorListByTypeResponse
     *
     * @param DescribeOperatorListByTypeRequest $request
     *
     * @return DescribeOperatorListByTypeResponse
     */
    public function describeOperatorListByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorListByTypeWithOptions($request, $runtime);
    }

    /**
     * Check Oss Authorization.
     *
     * @param request - DescribeOssAuthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssAuthStatusResponse
     *
     * @param DescribeOssAuthStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOssAuthStatusResponse
     */
    public function describeOssAuthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssAuthStatus',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check Oss Authorization.
     *
     * @param request - DescribeOssAuthStatusRequest
     *
     * @returns DescribeOssAuthStatusResponse
     *
     * @param DescribeOssAuthStatusRequest $request
     *
     * @return DescribeOssAuthStatusResponse
     */
    public function describeOssAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssAuthStatusWithOptions($request, $runtime);
    }

    /**
     * Get OSS Policy.
     *
     * @param request - DescribeOssPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssPolicyResponse
     *
     * @param DescribeOssPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeOssPolicyResponse
     */
    public function describeOssPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssPolicy',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get OSS Policy.
     *
     * @param request - DescribeOssPolicyRequest
     *
     * @returns DescribeOssPolicyResponse
     *
     * @param DescribeOssPolicyRequest $request
     *
     * @return DescribeOssPolicyResponse
     */
    public function describeOssPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssPolicyWithOptions($request, $runtime);
    }

    /**
     * Get File Upload Credentials.
     *
     * @param request - DescribeOssTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssTokenResponse
     *
     * @param DescribeOssTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeOssTokenResponse
     */
    public function describeOssTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->uploadType) {
            @$query['uploadType'] = $request->uploadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssToken',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get File Upload Credentials.
     *
     * @param request - DescribeOssTokenRequest
     *
     * @returns DescribeOssTokenResponse
     *
     * @param DescribeOssTokenRequest $request
     *
     * @return DescribeOssTokenResponse
     */
    public function describeOssToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssTokenWithOptions($request, $runtime);
    }

    /**
     * Query Event Property List.
     *
     * @param request - DescribeParamByEventCodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParamByEventCodesResponse
     *
     * @param DescribeParamByEventCodesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeParamByEventCodesResponse
     */
    public function describeParamByEventCodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->parma) {
            @$query['parma'] = $request->parma;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParamByEventCodes',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParamByEventCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Event Property List.
     *
     * @param request - DescribeParamByEventCodesRequest
     *
     * @returns DescribeParamByEventCodesResponse
     *
     * @param DescribeParamByEventCodesRequest $request
     *
     * @return DescribeParamByEventCodesResponse
     */
    public function describeParamByEventCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParamByEventCodesWithOptions($request, $runtime);
    }

    /**
     * Get File Upload Credentials.
     *
     * @param request - DescribePocOssTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePocOssTokenResponse
     *
     * @param DescribePocOssTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePocOssTokenResponse
     */
    public function describePocOssTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePocOssToken',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePocOssTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get File Upload Credentials.
     *
     * @param request - DescribePocOssTokenRequest
     *
     * @returns DescribePocOssTokenResponse
     *
     * @param DescribePocOssTokenRequest $request
     *
     * @return DescribePocOssTokenResponse
     */
    public function describePocOssToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePocOssTokenWithOptions($request, $runtime);
    }

    /**
     * Get POC Task List.
     *
     * @param request - DescribePocTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePocTaskListResponse
     *
     * @param DescribePocTaskListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePocTaskListResponse
     */
    public function describePocTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePocTaskList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePocTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get POC Task List.
     *
     * @param request - DescribePocTaskListRequest
     *
     * @returns DescribePocTaskListResponse
     *
     * @param DescribePocTaskListRequest $request
     *
     * @return DescribePocTaskListResponse
     */
    public function describePocTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePocTaskListWithOptions($request, $runtime);
    }

    /**
     * Determine if Stack Private Domain Mode is Enabled.
     *
     * @param request - DescribePrivateStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrivateStackResponse
     *
     * @param DescribePrivateStackRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePrivateStackResponse
     */
    public function describePrivateStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrivateStack',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrivateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Determine if Stack Private Domain Mode is Enabled.
     *
     * @param request - DescribePrivateStackRequest
     *
     * @returns DescribePrivateStackResponse
     *
     * @param DescribePrivateStackRequest $request
     *
     * @return DescribePrivateStackResponse
     */
    public function describePrivateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrivateStackWithOptions($request, $runtime);
    }

    /**
     * Query Variable Detail Query.
     *
     * @param request - DescribeQueryVariableDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQueryVariableDetailResponse
     *
     * @param DescribeQueryVariableDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeQueryVariableDetailResponse
     */
    public function describeQueryVariableDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeQueryVariableDetail',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeQueryVariableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable Detail Query.
     *
     * @param request - DescribeQueryVariableDetailRequest
     *
     * @returns DescribeQueryVariableDetailResponse
     *
     * @param DescribeQueryVariableDetailRequest $request
     *
     * @return DescribeQueryVariableDetailResponse
     */
    public function describeQueryVariableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQueryVariableDetailWithOptions($request, $runtime);
    }

    /**
     * 查询变量列表查询.
     *
     * @param request - DescribeQueryVariablePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQueryVariablePageListResponse
     *
     * @param DescribeQueryVariablePageListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeQueryVariablePageListResponse
     */
    public function describeQueryVariablePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->dataSourceCode) {
            @$query['dataSourceCode'] = $request->dataSourceCode;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeQueryVariablePageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeQueryVariablePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询变量列表查询.
     *
     * @param request - DescribeQueryVariablePageListRequest
     *
     * @returns DescribeQueryVariablePageListResponse
     *
     * @param DescribeQueryVariablePageListRequest $request
     *
     * @return DescribeQueryVariablePageListResponse
     */
    public function describeQueryVariablePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQueryVariablePageListWithOptions($request, $runtime);
    }

    /**
     * Query Variable List under Sample & Scenario.
     *
     * @param request - DescribeRecommendSceneVariablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecommendSceneVariablesResponse
     *
     * @param DescribeRecommendSceneVariablesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeRecommendSceneVariablesResponse
     */
    public function describeRecommendSceneVariablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleId) {
            @$query['sampleId'] = $request->sampleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecommendSceneVariables',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecommendSceneVariablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable List under Sample & Scenario.
     *
     * @param request - DescribeRecommendSceneVariablesRequest
     *
     * @returns DescribeRecommendSceneVariablesResponse
     *
     * @param DescribeRecommendSceneVariablesRequest $request
     *
     * @return DescribeRecommendSceneVariablesResponse
     */
    public function describeRecommendSceneVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendSceneVariablesWithOptions($request, $runtime);
    }

    /**
     * Variable Recommendation Details Query Interface.
     *
     * @param request - DescribeRecommendTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecommendTaskDetailResponse
     *
     * @param DescribeRecommendTaskDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRecommendTaskDetailResponse
     */
    public function describeRecommendTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecommendTaskDetail',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecommendTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Variable Recommendation Details Query Interface.
     *
     * @param request - DescribeRecommendTaskDetailRequest
     *
     * @returns DescribeRecommendTaskDetailResponse
     *
     * @param DescribeRecommendTaskDetailRequest $request
     *
     * @return DescribeRecommendTaskDetailResponse
     */
    public function describeRecommendTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendTaskDetailWithOptions($request, $runtime);
    }

    /**
     * Variable Recommendation List Query Interface.
     *
     * @param request - DescribeRecommendTaskPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecommendTaskPageListResponse
     *
     * @param DescribeRecommendTaskPageListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRecommendTaskPageListResponse
     */
    public function describeRecommendTaskPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->taskName) {
            @$query['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecommendTaskPageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecommendTaskPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Variable Recommendation List Query Interface.
     *
     * @param request - DescribeRecommendTaskPageListRequest
     *
     * @returns DescribeRecommendTaskPageListResponse
     *
     * @param DescribeRecommendTaskPageListRequest $request
     *
     * @return DescribeRecommendTaskPageListResponse
     */
    public function describeRecommendTaskPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendTaskPageListWithOptions($request, $runtime);
    }

    /**
     * Query Indicators Information under Variables.
     *
     * @param request - DescribeRecommendVariablesVelocityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecommendVariablesVelocityResponse
     *
     * @param DescribeRecommendVariablesVelocityRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeRecommendVariablesVelocityResponse
     */
    public function describeRecommendVariablesVelocityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        if (null !== $request->variableIdsStr) {
            @$query['variableIdsStr'] = $request->variableIdsStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecommendVariablesVelocity',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecommendVariablesVelocityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Indicators Information under Variables.
     *
     * @param request - DescribeRecommendVariablesVelocityRequest
     *
     * @returns DescribeRecommendVariablesVelocityResponse
     *
     * @param DescribeRecommendVariablesVelocityRequest $request
     *
     * @return DescribeRecommendVariablesVelocityResponse
     */
    public function describeRecommendVariablesVelocity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendVariablesVelocityWithOptions($request, $runtime);
    }

    /**
     * Query Supported Metrics List.
     *
     * @param request - DescribeRecommendVelocitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecommendVelocitiesResponse
     *
     * @param DescribeRecommendVelocitiesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRecommendVelocitiesResponse
     */
    public function describeRecommendVelocitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->code) {
            @$query['code'] = $request->code;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecommendVelocities',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecommendVelocitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Supported Metrics List.
     *
     * @param request - DescribeRecommendVelocitiesRequest
     *
     * @returns DescribeRecommendVelocitiesResponse
     *
     * @param DescribeRecommendVelocitiesRequest $request
     *
     * @return DescribeRecommendVelocitiesResponse
     */
    public function describeRecommendVelocities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendVelocitiesWithOptions($request, $runtime);
    }

    /**
     * Query the list of regions supported by ApiGateway.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of regions supported by ApiGateway.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * Query Request Hit Details.
     *
     * @param request - DescribeRequestHitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRequestHitResponse
     *
     * @param DescribeRequestHitRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRequestHitResponse
     */
    public function describeRequestHitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sRequestId) {
            @$query['sRequestId'] = $request->sRequestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRequestHit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRequestHitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Request Hit Details.
     *
     * @param request - DescribeRequestHitRequest
     *
     * @returns DescribeRequestHitResponse
     *
     * @param DescribeRequestHitRequest $request
     *
     * @return DescribeRequestHitResponse
     */
    public function describeRequestHit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestHitWithOptions($request, $runtime);
    }

    /**
     * Request Peak.
     *
     * @param request - DescribeRequestPeakReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRequestPeakReportResponse
     *
     * @param DescribeRequestPeakReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRequestPeakReportResponse
     */
    public function describeRequestPeakReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRequestPeakReport',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRequestPeakReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Request Peak.
     *
     * @param request - DescribeRequestPeakReportRequest
     *
     * @returns DescribeRequestPeakReportResponse
     *
     * @param DescribeRequestPeakReportRequest $request
     *
     * @return DescribeRequestPeakReportResponse
     */
    public function describeRequestPeakReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestPeakReportWithOptions($request, $runtime);
    }

    /**
     * Drill-down Analysis.
     *
     * @param request - DescribeResultCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResultCountResponse
     *
     * @param DescribeResultCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeResultCountResponse
     */
    public function describeResultCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResultCount',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResultCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Drill-down Analysis.
     *
     * @param request - DescribeResultCountRequest
     *
     * @returns DescribeResultCountResponse
     *
     * @param DescribeResultCountRequest $request
     *
     * @return DescribeResultCountResponse
     */
    public function describeResultCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResultCountWithOptions($request, $runtime);
    }

    /**
     * Risk map overview chart (line chart).
     *
     * @param request - DescribeRiskLineChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRiskLineChartResponse
     *
     * @param DescribeRiskLineChartRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRiskLineChartResponse
     */
    public function describeRiskLineChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRiskLineChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRiskLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Risk map overview chart (line chart).
     *
     * @param request - DescribeRiskLineChartRequest
     *
     * @returns DescribeRiskLineChartResponse
     *
     * @param DescribeRiskLineChartRequest $request
     *
     * @return DescribeRiskLineChartResponse
     */
    public function describeRiskLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskLineChartWithOptions($request, $runtime);
    }

    /**
     * Tag Hit Rate Tag Hit Dimension.
     *
     * @param request - DescribeRiskTagsLineChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRiskTagsLineChartResponse
     *
     * @param DescribeRiskTagsLineChartRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRiskTagsLineChartResponse
     */
    public function describeRiskTagsLineChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['EventCodes'] = $request->eventCodes;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRiskTagsLineChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRiskTagsLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tag Hit Rate Tag Hit Dimension.
     *
     * @param request - DescribeRiskTagsLineChartRequest
     *
     * @returns DescribeRiskTagsLineChartResponse
     *
     * @param DescribeRiskTagsLineChartRequest $request
     *
     * @return DescribeRiskTagsLineChartResponse
     */
    public function describeRiskTagsLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskTagsLineChartWithOptions($request, $runtime);
    }

    /**
     * Policy Overview List.
     *
     * @param request - DescribeRuleBarChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleBarChartResponse
     *
     * @param DescribeRuleBarChartRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRuleBarChartResponse
     */
    public function describeRuleBarChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleBarChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleBarChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Policy Overview List.
     *
     * @param request - DescribeRuleBarChartRequest
     *
     * @returns DescribeRuleBarChartResponse
     *
     * @param DescribeRuleBarChartRequest $request
     *
     * @return DescribeRuleBarChartResponse
     */
    public function describeRuleBarChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleBarChartWithOptions($request, $runtime);
    }

    /**
     * Query Policy Count by User ID.
     *
     * @param request - DescribeRuleCountByUserIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleCountByUserIdResponse
     *
     * @param DescribeRuleCountByUserIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRuleCountByUserIdResponse
     */
    public function describeRuleCountByUserIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleCountByUserId',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleCountByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Policy Count by User ID.
     *
     * @param request - DescribeRuleCountByUserIdRequest
     *
     * @returns DescribeRuleCountByUserIdResponse
     *
     * @param DescribeRuleCountByUserIdRequest $request
     *
     * @return DescribeRuleCountByUserIdResponse
     */
    public function describeRuleCountByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleCountByUserIdWithOptions($request, $runtime);
    }

    /**
     * Query policy/version details.
     *
     * @param request - DescribeRuleDetailByRuleIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleDetailByRuleIdResponse
     *
     * @param DescribeRuleDetailByRuleIdRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRuleDetailByRuleIdResponse
     */
    public function describeRuleDetailByRuleIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->ruleVersionId) {
            @$query['ruleVersionId'] = $request->ruleVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleDetailByRuleId',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleDetailByRuleIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query policy/version details.
     *
     * @param request - DescribeRuleDetailByRuleIdRequest
     *
     * @returns DescribeRuleDetailByRuleIdResponse
     *
     * @param DescribeRuleDetailByRuleIdRequest $request
     *
     * @return DescribeRuleDetailByRuleIdResponse
     */
    public function describeRuleDetailByRuleId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleDetailByRuleIdWithOptions($request, $runtime);
    }

    /**
     * Query rule hit details.
     *
     * @param request - DescribeRuleHitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleHitResponse
     *
     * @param DescribeRuleHitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRuleHitResponse
     */
    public function describeRuleHitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->requestTime) {
            @$query['requestTime'] = $request->requestTime;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->ruleSnapshotId) {
            @$query['ruleSnapshotId'] = $request->ruleSnapshotId;
        }

        if (null !== $request->sRequestId) {
            @$query['sRequestId'] = $request->sRequestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleHit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleHitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query rule hit details.
     *
     * @param request - DescribeRuleHitRequest
     *
     * @returns DescribeRuleHitResponse
     *
     * @param DescribeRuleHitRequest $request
     *
     * @return DescribeRuleHitResponse
     */
    public function describeRuleHit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitWithOptions($request, $runtime);
    }

    /**
     * Query policy list.
     *
     * @param request - DescribeRuleListByEventCodesListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleListByEventCodesListResponse
     *
     * @param DescribeRuleListByEventCodesListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeRuleListByEventCodesListResponse
     */
    public function describeRuleListByEventCodesListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleListByEventCodesList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleListByEventCodesListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query policy list.
     *
     * @param request - DescribeRuleListByEventCodesListRequest
     *
     * @returns DescribeRuleListByEventCodesListResponse
     *
     * @param DescribeRuleListByEventCodesListRequest $request
     *
     * @return DescribeRuleListByEventCodesListResponse
     */
    public function describeRuleListByEventCodesList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleListByEventCodesListWithOptions($request, $runtime);
    }

    /**
     * Query the list of policies.
     *
     * @param request - DescribeRulePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRulePageListResponse
     *
     * @param DescribeRulePageListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRulePageListResponse
     */
    public function describeRulePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleAuthType) {
            @$query['ruleAuthType'] = $request->ruleAuthType;
        }

        if (null !== $request->ruleName) {
            @$query['ruleName'] = $request->ruleName;
        }

        if (null !== $request->ruleStatus) {
            @$query['ruleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRulePageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRulePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of policies.
     *
     * @param request - DescribeRulePageListRequest
     *
     * @returns DescribeRulePageListResponse
     *
     * @param DescribeRulePageListRequest $request
     *
     * @return DescribeRulePageListResponse
     */
    public function describeRulePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulePageListWithOptions($request, $runtime);
    }

    /**
     * Query historical snapshots based on ruleId and version.
     *
     * @param request - DescribeRuleSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleSnapshotResponse
     *
     * @param DescribeRuleSnapshotRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRuleSnapshotResponse
     */
    public function describeRuleSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->snapshotVersion) {
            @$query['snapshotVersion'] = $request->snapshotVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleSnapshot',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query historical snapshots based on ruleId and version.
     *
     * @param request - DescribeRuleSnapshotRequest
     *
     * @returns DescribeRuleSnapshotResponse
     *
     * @param DescribeRuleSnapshotRequest $request
     *
     * @return DescribeRuleSnapshotResponse
     */
    public function describeRuleSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleSnapshotWithOptions($request, $runtime);
    }

    /**
     * Query Policy Version List.
     *
     * @param request - DescribeRuleVersionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleVersionListResponse
     *
     * @param DescribeRuleVersionListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRuleVersionListResponse
     */
    public function describeRuleVersionListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleVersionList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleVersionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Policy Version List.
     *
     * @param request - DescribeRuleVersionListRequest
     *
     * @returns DescribeRuleVersionListResponse
     *
     * @param DescribeRuleVersionListRequest $request
     *
     * @return DescribeRuleVersionListResponse
     */
    public function describeRuleVersionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleVersionListWithOptions($request, $runtime);
    }

    /**
     * SDK Download List.
     *
     * @param request - DescribeSDKDownloadListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSDKDownloadListResponse
     *
     * @param DescribeSDKDownloadListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSDKDownloadListResponse
     */
    public function describeSDKDownloadListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->deviceType) {
            @$query['deviceType'] = $request->deviceType;
        }

        if (null !== $request->listType) {
            @$query['listType'] = $request->listType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSDKDownloadList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSDKDownloadListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SDK Download List.
     *
     * @param request - DescribeSDKDownloadListRequest
     *
     * @returns DescribeSDKDownloadListResponse
     *
     * @param DescribeSDKDownloadListRequest $request
     *
     * @return DescribeSDKDownloadListResponse
     */
    public function describeSDKDownloadList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDKDownloadListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSafConsoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSafConsoleResponse
     *
     * @param DescribeSafConsoleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSafConsoleResponse
     */
    public function describeSafConsoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        if (null !== $request->service) {
            @$query['service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSafConsole',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSafConsoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSafConsoleRequest
     *
     * @returns DescribeSafConsoleResponse
     *
     * @param DescribeSafConsoleRequest $request
     *
     * @return DescribeSafConsoleResponse
     */
    public function describeSafConsole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafConsoleWithOptions($request, $runtime);
    }

    /**
     * Query saf_de Order.
     *
     * @param request - DescribeSafDeOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSafDeOrderResponse
     *
     * @param DescribeSafDeOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSafDeOrderResponse
     */
    public function describeSafDeOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSafDeOrder',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSafDeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query saf_de Order.
     *
     * @param request - DescribeSafDeOrderRequest
     *
     * @returns DescribeSafDeOrderResponse
     *
     * @param DescribeSafDeOrderRequest $request
     *
     * @return DescribeSafDeOrderResponse
     */
    public function describeSafDeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafDeOrderWithOptions($request, $runtime);
    }

    /**
     * Query Order Information.
     *
     * @param request - DescribeSafOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSafOrderResponse
     *
     * @param DescribeSafOrderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSafOrderResponse
     */
    public function describeSafOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->exactProductCode) {
            @$query['exactProductCode'] = $request->exactProductCode;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSafOrder',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSafOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Order Information.
     *
     * @param request - DescribeSafOrderRequest
     *
     * @returns DescribeSafOrderResponse
     *
     * @param DescribeSafOrderRequest $request
     *
     * @return DescribeSafOrderResponse
     */
    public function describeSafOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafOrderWithOptions($request, $runtime);
    }

    /**
     * Query Access Configuration.
     *
     * @param request - DescribeSafStartConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSafStartConfigResponse
     *
     * @param DescribeSafStartConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSafStartConfigResponse
     */
    public function describeSafStartConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSafStartConfig',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSafStartConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Access Configuration.
     *
     * @param request - DescribeSafStartConfigRequest
     *
     * @returns DescribeSafStartConfigResponse
     *
     * @param DescribeSafStartConfigRequest $request
     *
     * @return DescribeSafStartConfigResponse
     */
    public function describeSafStartConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafStartConfigWithOptions($request, $runtime);
    }

    /**
     * Query Access Configuration.
     *
     * @param request - DescribeSafStartStepsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSafStartStepsResponse
     *
     * @param DescribeSafStartStepsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSafStartStepsResponse
     */
    public function describeSafStartStepsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->aliyunServer) {
            @$query['aliyunServer'] = $request->aliyunServer;
        }

        if (null !== $request->deviceTypesStr) {
            @$query['deviceTypesStr'] = $request->deviceTypesStr;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->serverRegion) {
            @$query['serverRegion'] = $request->serverRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSafStartSteps',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSafStartStepsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Access Configuration.
     *
     * @param request - DescribeSafStartStepsRequest
     *
     * @returns DescribeSafStartStepsResponse
     *
     * @param DescribeSafStartStepsRequest $request
     *
     * @return DescribeSafStartStepsResponse
     */
    public function describeSafStartSteps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafStartStepsWithOptions($request, $runtime);
    }

    /**
     * Get Risk Tag List.
     *
     * @param request - DescribeSafTagListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSafTagListResponse
     *
     * @param DescribeSafTagListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSafTagListResponse
     */
    public function describeSafTagListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        if (null !== $request->apiId) {
            @$query['apiId'] = $request->apiId;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSafTagList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSafTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Risk Tag List.
     *
     * @param request - DescribeSafTagListRequest
     *
     * @returns DescribeSafTagListResponse
     *
     * @param DescribeSafTagListRequest $request
     *
     * @return DescribeSafTagListResponse
     */
    public function describeSafTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafTagListWithOptions($request, $runtime);
    }

    /**
     * Get File Upload Credentials.
     *
     * @param request - DescribeSampleBatchOssPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleBatchOssPolicyResponse
     *
     * @param DescribeSampleBatchOssPolicyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSampleBatchOssPolicyResponse
     */
    public function describeSampleBatchOssPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->batchName) {
            @$query['batchName'] = $request->batchName;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleBatchOssPolicy',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleBatchOssPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get File Upload Credentials.
     *
     * @param request - DescribeSampleBatchOssPolicyRequest
     *
     * @returns DescribeSampleBatchOssPolicyResponse
     *
     * @param DescribeSampleBatchOssPolicyRequest $request
     *
     * @return DescribeSampleBatchOssPolicyResponse
     */
    public function describeSampleBatchOssPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleBatchOssPolicyWithOptions($request, $runtime);
    }

    /**
     * Sample List.
     *
     * @param request - DescribeSampleDataByBatchUUidPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleDataByBatchUUidPageResponse
     *
     * @param DescribeSampleDataByBatchUUidPageRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSampleDataByBatchUUidPageResponse
     */
    public function describeSampleDataByBatchUUidPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->batchUuid) {
            @$query['batchUuid'] = $request->batchUuid;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->dataValue) {
            @$query['dataValue'] = $request->dataValue;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->updateBeginTime) {
            @$query['updateBeginTime'] = $request->updateBeginTime;
        }

        if (null !== $request->updateEndTime) {
            @$query['updateEndTime'] = $request->updateEndTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleDataByBatchUUidPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleDataByBatchUUidPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sample List.
     *
     * @param request - DescribeSampleDataByBatchUUidPageRequest
     *
     * @returns DescribeSampleDataByBatchUUidPageResponse
     *
     * @param DescribeSampleDataByBatchUUidPageRequest $request
     *
     * @return DescribeSampleDataByBatchUUidPageResponse
     */
    public function describeSampleDataByBatchUUidPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDataByBatchUUidPageWithOptions($request, $runtime);
    }

    /**
     * Paged Query of Sample List.
     *
     * @param request - DescribeSampleDataListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleDataListResponse
     *
     * @param DescribeSampleDataListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSampleDataListResponse
     */
    public function describeSampleDataListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->deleteTag) {
            @$query['deleteTag'] = $request->deleteTag;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->queryContent) {
            @$query['queryContent'] = $request->queryContent;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleId) {
            @$query['sampleId'] = $request->sampleId;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleDataList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paged Query of Sample List.
     *
     * @param request - DescribeSampleDataListRequest
     *
     * @returns DescribeSampleDataListResponse
     *
     * @param DescribeSampleDataListRequest $request
     *
     * @return DescribeSampleDataListResponse
     */
    public function describeSampleDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDataListWithOptions($request, $runtime);
    }

    /**
     * Sample List.
     *
     * @param request - DescribeSampleDataPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleDataPageResponse
     *
     * @param DescribeSampleDataPageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSampleDataPageResponse
     */
    public function describeSampleDataPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->dataValue) {
            @$query['dataValue'] = $request->dataValue;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->updateBeginTime) {
            @$query['updateBeginTime'] = $request->updateBeginTime;
        }

        if (null !== $request->updateEndTime) {
            @$query['updateEndTime'] = $request->updateEndTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleDataPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleDataPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sample List.
     *
     * @param request - DescribeSampleDataPageRequest
     *
     * @returns DescribeSampleDataPageResponse
     *
     * @param DescribeSampleDataPageRequest $request
     *
     * @return DescribeSampleDataPageResponse
     */
    public function describeSampleDataPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDataPageWithOptions($request, $runtime);
    }

    /**
     * Query Sample Example Authorization.
     *
     * @param request - DescribeSampleDemoDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleDemoDownloadUrlResponse
     *
     * @param DescribeSampleDemoDownloadUrlRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSampleDemoDownloadUrlResponse
     */
    public function describeSampleDemoDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleDemoDownloadUrl',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleDemoDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Sample Example Authorization.
     *
     * @param request - DescribeSampleDemoDownloadUrlRequest
     *
     * @returns DescribeSampleDemoDownloadUrlResponse
     *
     * @param DescribeSampleDemoDownloadUrlRequest $request
     *
     * @return DescribeSampleDemoDownloadUrlResponse
     */
    public function describeSampleDemoDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDemoDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Query Sample Download Authorization Information.
     *
     * @param request - DescribeSampleDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleDownloadUrlResponse
     *
     * @param DescribeSampleDownloadUrlRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSampleDownloadUrlResponse
     */
    public function describeSampleDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleId) {
            @$query['sampleId'] = $request->sampleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleDownloadUrl',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Sample Download Authorization Information.
     *
     * @param request - DescribeSampleDownloadUrlRequest
     *
     * @returns DescribeSampleDownloadUrlResponse
     *
     * @param DescribeSampleDownloadUrlRequest $request
     *
     * @return DescribeSampleDownloadUrlResponse
     */
    public function describeSampleDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Query Sample Details.
     *
     * @param request - DescribeSampleInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleInfoResponse
     *
     * @param DescribeSampleInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSampleInfoResponse
     */
    public function describeSampleInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->versions) {
            @$query['versions'] = $request->versions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleInfo',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Sample Details.
     *
     * @param request - DescribeSampleInfoRequest
     *
     * @returns DescribeSampleInfoResponse
     *
     * @param DescribeSampleInfoRequest $request
     *
     * @return DescribeSampleInfoResponse
     */
    public function describeSampleInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleInfoWithOptions($request, $runtime);
    }

    /**
     * Query Sample List.
     *
     * @param request - DescribeSampleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleListResponse
     *
     * @param DescribeSampleListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSampleListResponse
     */
    public function describeSampleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleType) {
            @$query['sampleType'] = $request->sampleType;
        }

        if (null !== $request->sampleValue) {
            @$query['sampleValue'] = $request->sampleValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Sample List.
     *
     * @param request - DescribeSampleListRequest
     *
     * @returns DescribeSampleListResponse
     *
     * @param DescribeSampleListRequest $request
     *
     * @return DescribeSampleListResponse
     */
    public function describeSampleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleListWithOptions($request, $runtime);
    }

    /**
     * Query Scene List.
     *
     * @param request - DescribeSampleSceneListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleSceneListResponse
     *
     * @param DescribeSampleSceneListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSampleSceneListResponse
     */
    public function describeSampleSceneListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleSceneList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Scene List.
     *
     * @param request - DescribeSampleSceneListRequest
     *
     * @returns DescribeSampleSceneListResponse
     *
     * @param DescribeSampleSceneListRequest $request
     *
     * @return DescribeSampleSceneListResponse
     */
    public function describeSampleSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleSceneListWithOptions($request, $runtime);
    }

    /**
     * Get Tag List.
     *
     * @param request - DescribeSampleTagListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleTagListResponse
     *
     * @param DescribeSampleTagListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSampleTagListResponse
     */
    public function describeSampleTagListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleTagList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Tag List.
     *
     * @param request - DescribeSampleTagListRequest
     *
     * @returns DescribeSampleTagListResponse
     *
     * @param DescribeSampleTagListRequest $request
     *
     * @return DescribeSampleTagListResponse
     */
    public function describeSampleTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleTagListWithOptions($request, $runtime);
    }

    /**
     * Query Sample Upload Authorization Information.
     *
     * @param request - DescribeSampleUploadPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleUploadPolicyResponse
     *
     * @param DescribeSampleUploadPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSampleUploadPolicyResponse
     */
    public function describeSampleUploadPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleUploadPolicy',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Sample Upload Authorization Information.
     *
     * @param request - DescribeSampleUploadPolicyRequest
     *
     * @returns DescribeSampleUploadPolicyResponse
     *
     * @param DescribeSampleUploadPolicyRequest $request
     *
     * @return DescribeSampleUploadPolicyResponse
     */
    public function describeSampleUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * Sample Batch List.
     *
     * @param request - DescribeSamplebatchPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSamplebatchPageResponse
     *
     * @param DescribeSamplebatchPageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSamplebatchPageResponse
     */
    public function describeSamplebatchPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->dataValue) {
            @$query['dataValue'] = $request->dataValue;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSamplebatchPage',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSamplebatchPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sample Batch List.
     *
     * @param request - DescribeSamplebatchPageRequest
     *
     * @returns DescribeSamplebatchPageResponse
     *
     * @param DescribeSamplebatchPageRequest $request
     *
     * @return DescribeSamplebatchPageResponse
     */
    public function describeSamplebatchPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSamplebatchPageWithOptions($request, $runtime);
    }

    /**
     * Dropdown list for scenario-based service events.
     *
     * @remarks
     * Dropdown list for scenario-based risk control events
     *
     * @param request - DescribeSceneAllEventNameCodeListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSceneAllEventNameCodeListResponse
     *
     * @param DescribeSceneAllEventNameCodeListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSceneAllEventNameCodeListResponse
     */
    public function describeSceneAllEventNameCodeListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSceneAllEventNameCodeList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSceneAllEventNameCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dropdown list for scenario-based service events.
     *
     * @remarks
     * Dropdown list for scenario-based risk control events
     *
     * @param request - DescribeSceneAllEventNameCodeListRequest
     *
     * @returns DescribeSceneAllEventNameCodeListResponse
     *
     * @param DescribeSceneAllEventNameCodeListRequest $request
     *
     * @return DescribeSceneAllEventNameCodeListResponse
     */
    public function describeSceneAllEventNameCodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneAllEventNameCodeListWithOptions($request, $runtime);
    }

    /**
     * List of Scenario-based Risk Control Events.
     *
     * @param request - DescribeSceneEventPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSceneEventPageListResponse
     *
     * @param DescribeSceneEventPageListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSceneEventPageListResponse
     */
    public function describeSceneEventPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->nameOrCode) {
            @$query['nameOrCode'] = $request->nameOrCode;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSceneEventPageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSceneEventPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List of Scenario-based Risk Control Events.
     *
     * @param request - DescribeSceneEventPageListRequest
     *
     * @returns DescribeSceneEventPageListResponse
     *
     * @param DescribeSceneEventPageListRequest $request
     *
     * @return DescribeSceneEventPageListResponse
     */
    public function describeSceneEventPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneEventPageListWithOptions($request, $runtime);
    }

    /**
     * White-boxed strategy list for risk control services.
     *
     * @remarks
     * Query the list of scenarized risk control event strategies
     *
     * @param request - DescribeSceneRulePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSceneRulePageListResponse
     *
     * @param DescribeSceneRulePageListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSceneRulePageListResponse
     */
    public function describeSceneRulePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleAuthType) {
            @$query['ruleAuthType'] = $request->ruleAuthType;
        }

        if (null !== $request->ruleName) {
            @$query['ruleName'] = $request->ruleName;
        }

        if (null !== $request->ruleStatus) {
            @$query['ruleStatus'] = $request->ruleStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSceneRulePageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSceneRulePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * White-boxed strategy list for risk control services.
     *
     * @remarks
     * Query the list of scenarized risk control event strategies
     *
     * @param request - DescribeSceneRulePageListRequest
     *
     * @returns DescribeSceneRulePageListResponse
     *
     * @param DescribeSceneRulePageListRequest $request
     *
     * @return DescribeSceneRulePageListResponse
     */
    public function describeSceneRulePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneRulePageListWithOptions($request, $runtime);
    }

    /**
     * Score Distribution.
     *
     * @param request - DescribeScoreListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScoreListResponse
     *
     * @param DescribeScoreListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeScoreListResponse
     */
    public function describeScoreListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScoreList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScoreListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Score Distribution.
     *
     * @param request - DescribeScoreListRequest
     *
     * @returns DescribeScoreListResponse
     *
     * @param DescribeScoreListRequest $request
     *
     * @return DescribeScoreListResponse
     */
    public function describeScoreList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScoreListWithOptions($request, $runtime);
    }

    /**
     * Score Range Quantity Analysis.
     *
     * @param request - DescribeScoreSectionNumLineChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScoreSectionNumLineChartResponse
     *
     * @param DescribeScoreSectionNumLineChartRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeScoreSectionNumLineChartResponse
     */
    public function describeScoreSectionNumLineChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->byPassEventCodes) {
            @$query['byPassEventCodes'] = $request->byPassEventCodes;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->mainEventCodes) {
            @$query['mainEventCodes'] = $request->mainEventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->shuntEventCodes) {
            @$query['shuntEventCodes'] = $request->shuntEventCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScoreSectionNumLineChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScoreSectionNumLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Score Range Quantity Analysis.
     *
     * @param request - DescribeScoreSectionNumLineChartRequest
     *
     * @returns DescribeScoreSectionNumLineChartResponse
     *
     * @param DescribeScoreSectionNumLineChartRequest $request
     *
     * @return DescribeScoreSectionNumLineChartResponse
     */
    public function describeScoreSectionNumLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScoreSectionNumLineChartWithOptions($request, $runtime);
    }

    /**
     * Proportion of Score Ranges for Main Events/Bypass Events/Diversion Events.
     *
     * @param request - DescribeScoreSectionPieChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScoreSectionPieChartResponse
     *
     * @param DescribeScoreSectionPieChartRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeScoreSectionPieChartResponse
     */
    public function describeScoreSectionPieChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->eventType) {
            @$query['eventType'] = $request->eventType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScoreSectionPieChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScoreSectionPieChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Proportion of Score Ranges for Main Events/Bypass Events/Diversion Events.
     *
     * @param request - DescribeScoreSectionPieChartRequest
     *
     * @returns DescribeScoreSectionPieChartResponse
     *
     * @param DescribeScoreSectionPieChartRequest $request
     *
     * @return DescribeScoreSectionPieChartResponse
     */
    public function describeScoreSectionPieChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScoreSectionPieChartWithOptions($request, $runtime);
    }

    /**
     * Score Section Ratio Analysis.
     *
     * @param request - DescribeScoreSectionRatioLineChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScoreSectionRatioLineChartResponse
     *
     * @param DescribeScoreSectionRatioLineChartRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeScoreSectionRatioLineChartResponse
     */
    public function describeScoreSectionRatioLineChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->byPassEventCodes) {
            @$query['byPassEventCodes'] = $request->byPassEventCodes;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->mainEventCodes) {
            @$query['mainEventCodes'] = $request->mainEventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->shuntEventCodes) {
            @$query['shuntEventCodes'] = $request->shuntEventCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScoreSectionRatioLineChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScoreSectionRatioLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Score Section Ratio Analysis.
     *
     * @param request - DescribeScoreSectionRatioLineChartRequest
     *
     * @returns DescribeScoreSectionRatioLineChartResponse
     *
     * @param DescribeScoreSectionRatioLineChartRequest $request
     *
     * @return DescribeScoreSectionRatioLineChartResponse
     */
    public function describeScoreSectionRatioLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScoreSectionRatioLineChartWithOptions($request, $runtime);
    }

    /**
     * Query Task ID List.
     *
     * @param request - DescribeSelectItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSelectItemResponse
     *
     * @param DescribeSelectItemRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSelectItemResponse
     */
    public function describeSelectItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSelectItem',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSelectItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Task ID List.
     *
     * @param request - DescribeSelectItemRequest
     *
     * @returns DescribeSelectItemResponse
     *
     * @param DescribeSelectItemRequest $request
     *
     * @return DescribeSelectItemResponse
     */
    public function describeSelectItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSelectItemWithOptions($request, $runtime);
    }

    /**
     * ServiceAppkey dropdown.
     *
     * @param request - DescribeServiceAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceAppKeyResponse
     *
     * @param DescribeServiceAppKeyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeServiceAppKeyResponse
     */
    public function describeServiceAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceAppKey',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ServiceAppkey dropdown.
     *
     * @param request - DescribeServiceAppKeyRequest
     *
     * @returns DescribeServiceAppKeyResponse
     *
     * @param DescribeServiceAppKeyRequest $request
     *
     * @return DescribeServiceAppKeyResponse
     */
    public function describeServiceAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceAppKeyWithOptions($request, $runtime);
    }

    /**
     * ServiceCodeName Information.
     *
     * @param request - DescribeServiceCodeNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceCodeNameResponse
     *
     * @param DescribeServiceCodeNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeServiceCodeNameResponse
     */
    public function describeServiceCodeNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->tab) {
            @$query['Tab'] = $request->tab;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceCodeName',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceCodeNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ServiceCodeName Information.
     *
     * @param request - DescribeServiceCodeNameRequest
     *
     * @returns DescribeServiceCodeNameResponse
     *
     * @param DescribeServiceCodeNameRequest $request
     *
     * @return DescribeServiceCodeNameResponse
     */
    public function describeServiceCodeName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceCodeNameWithOptions($request, $runtime);
    }

    /**
     * Get Service List.
     *
     * @param request - DescribeServiceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceListResponse
     *
     * @param DescribeServiceListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeServiceListResponse
     */
    public function describeServiceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Service List.
     *
     * @param request - DescribeServiceListRequest
     *
     * @returns DescribeServiceListResponse
     *
     * @param DescribeServiceListRequest $request
     *
     * @return DescribeServiceListResponse
     */
    public function describeServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceListWithOptions($request, $runtime);
    }

    /**
     * Estimate Call Information.
     *
     * @param request - DescribeSimulationPreditInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSimulationPreditInfoResponse
     *
     * @param DescribeSimulationPreditInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSimulationPreditInfoResponse
     */
    public function describeSimulationPreditInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->rulesStr) {
            @$query['rulesStr'] = $request->rulesStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSimulationPreditInfo',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSimulationPreditInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Estimate Call Information.
     *
     * @param request - DescribeSimulationPreditInfoRequest
     *
     * @returns DescribeSimulationPreditInfoResponse
     *
     * @param DescribeSimulationPreditInfoRequest $request
     *
     * @return DescribeSimulationPreditInfoResponse
     */
    public function describeSimulationPreditInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimulationPreditInfoWithOptions($request, $runtime);
    }

    /**
     * Query Task Record Count.
     *
     * @param request - DescribeSimulationTaskCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSimulationTaskCountResponse
     *
     * @param DescribeSimulationTaskCountRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSimulationTaskCountResponse
     */
    public function describeSimulationTaskCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataSourceConfig) {
            @$query['dataSourceConfig'] = $request->dataSourceConfig;
        }

        if (null !== $request->dataSourceType) {
            @$query['dataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->filtersStr) {
            @$query['filtersStr'] = $request->filtersStr;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSimulationTaskCount',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSimulationTaskCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Task Record Count.
     *
     * @param request - DescribeSimulationTaskCountRequest
     *
     * @returns DescribeSimulationTaskCountResponse
     *
     * @param DescribeSimulationTaskCountRequest $request
     *
     * @return DescribeSimulationTaskCountResponse
     */
    public function describeSimulationTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimulationTaskCountWithOptions($request, $runtime);
    }

    /**
     * Task List.
     *
     * @param request - DescribeSimulationTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSimulationTaskListResponse
     *
     * @param DescribeSimulationTaskListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSimulationTaskListResponse
     */
    public function describeSimulationTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSimulationTaskList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSimulationTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Task List.
     *
     * @param request - DescribeSimulationTaskListRequest
     *
     * @returns DescribeSimulationTaskListResponse
     *
     * @param DescribeSimulationTaskListRequest $request
     *
     * @return DescribeSimulationTaskListResponse
     */
    public function describeSimulationTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimulationTaskListWithOptions($request, $runtime);
    }

    /**
     * Get Project Configuration.
     *
     * @param request - DescribeSlsUrlConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsUrlConfigResponse
     *
     * @param DescribeSlsUrlConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSlsUrlConfigResponse
     */
    public function describeSlsUrlConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlsUrlConfig',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlsUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Project Configuration.
     *
     * @param request - DescribeSlsUrlConfigRequest
     *
     * @returns DescribeSlsUrlConfigResponse
     *
     * @param DescribeSlsUrlConfigRequest $request
     *
     * @return DescribeSlsUrlConfigResponse
     */
    public function describeSlsUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsUrlConfigWithOptions($request, $runtime);
    }

    /**
     * Query List of Policies Supporting Simulation.
     *
     * @param request - DescribeSupportRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSupportRuleListResponse
     *
     * @param DescribeSupportRuleListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSupportRuleListResponse
     */
    public function describeSupportRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSupportRuleList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSupportRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query List of Policies Supporting Simulation.
     *
     * @param request - DescribeSupportRuleListRequest
     *
     * @returns DescribeSupportRuleListResponse
     *
     * @param DescribeSupportRuleListRequest $request
     *
     * @return DescribeSupportRuleListResponse
     */
    public function describeSupportRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportRuleListWithOptions($request, $runtime);
    }

    /**
     * Tag List.
     *
     * @param request - DescribeTagListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagListResponse
     *
     * @param DescribeTagListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTagListResponse
     */
    public function describeTagListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tag List.
     *
     * @param request - DescribeTagListRequest
     *
     * @returns DescribeTagListResponse
     *
     * @param DescribeTagListRequest $request
     *
     * @return DescribeTagListResponse
     */
    public function describeTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagListWithOptions($request, $runtime);
    }

    /**
     * Tag Overview List.
     *
     * @param request - DescribeTagsBarChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsBarChartResponse
     *
     * @param DescribeTagsBarChartRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeTagsBarChartResponse
     */
    public function describeTagsBarChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->result) {
            @$query['result'] = $request->result;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagsBarChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsBarChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tag Overview List.
     *
     * @param request - DescribeTagsBarChartRequest
     *
     * @returns DescribeTagsBarChartResponse
     *
     * @param DescribeTagsBarChartRequest $request
     *
     * @return DescribeTagsBarChartResponse
     */
    public function describeTagsBarChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsBarChartWithOptions($request, $runtime);
    }

    /**
     * Tag Fluctuation Detection.
     *
     * @param request - DescribeTagsFluctuationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsFluctuationResponse
     *
     * @param DescribeTagsFluctuationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTagsFluctuationResponse
     */
    public function describeTagsFluctuationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagsFluctuation',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsFluctuationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tag Fluctuation Detection.
     *
     * @param request - DescribeTagsFluctuationRequest
     *
     * @returns DescribeTagsFluctuationResponse
     *
     * @param DescribeTagsFluctuationRequest $request
     *
     * @return DescribeTagsFluctuationResponse
     */
    public function describeTagsFluctuation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsFluctuationWithOptions($request, $runtime);
    }

    /**
     * Get Tag List.
     *
     * @param request - DescribeTagsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsListResponse
     *
     * @param DescribeTagsListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTagsListResponse
     */
    public function describeTagsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagsList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Tag List.
     *
     * @param request - DescribeTagsListRequest
     *
     * @returns DescribeTagsListResponse
     *
     * @param DescribeTagsListRequest $request
     *
     * @return DescribeTagsListResponse
     */
    public function describeTagsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsListWithOptions($request, $runtime);
    }

    /**
     * Tag Hit Count Analysis.
     *
     * @param request - DescribeTagsNumLineChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsNumLineChartResponse
     *
     * @param DescribeTagsNumLineChartRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTagsNumLineChartResponse
     */
    public function describeTagsNumLineChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->byPassEventCodes) {
            @$query['byPassEventCodes'] = $request->byPassEventCodes;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->mainEventCodes) {
            @$query['mainEventCodes'] = $request->mainEventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->shuntEventCodes) {
            @$query['shuntEventCodes'] = $request->shuntEventCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagsNumLineChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsNumLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tag Hit Count Analysis.
     *
     * @param request - DescribeTagsNumLineChartRequest
     *
     * @returns DescribeTagsNumLineChartResponse
     *
     * @param DescribeTagsNumLineChartRequest $request
     *
     * @return DescribeTagsNumLineChartResponse
     */
    public function describeTagsNumLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsNumLineChartWithOptions($request, $runtime);
    }

    /**
     * Tag Hit Ratio Analysis.
     *
     * @param request - DescribeTagsRatioLineChartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsRatioLineChartResponse
     *
     * @param DescribeTagsRatioLineChartRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeTagsRatioLineChartResponse
     */
    public function describeTagsRatioLineChartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->byPassEventCodes) {
            @$query['byPassEventCodes'] = $request->byPassEventCodes;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->mainEventCodes) {
            @$query['mainEventCodes'] = $request->mainEventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->shuntEventCodes) {
            @$query['shuntEventCodes'] = $request->shuntEventCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagsRatioLineChart',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsRatioLineChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tag Hit Ratio Analysis.
     *
     * @param request - DescribeTagsRatioLineChartRequest
     *
     * @returns DescribeTagsRatioLineChartResponse
     *
     * @param DescribeTagsRatioLineChartRequest $request
     *
     * @return DescribeTagsRatioLineChartResponse
     */
    public function describeTagsRatioLineChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsRatioLineChartWithOptions($request, $runtime);
    }

    /**
     * Tag Hit Trend.
     *
     * @param request - DescribeTagsTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsTrendResponse
     *
     * @param DescribeTagsTrendRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTagsTrendResponse
     */
    public function describeTagsTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->result) {
            @$query['result'] = $request->result;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagsTrend',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tag Hit Trend.
     *
     * @param request - DescribeTagsTrendRequest
     *
     * @returns DescribeTagsTrendResponse
     *
     * @param DescribeTagsTrendRequest $request
     *
     * @return DescribeTagsTrendResponse
     */
    public function describeTagsTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsTrendWithOptions($request, $runtime);
    }

    /**
     * Task List.
     *
     * @param request - DescribeTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskListResponse
     *
     * @param DescribeTaskListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTaskListResponse
     */
    public function describeTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->isPage) {
            @$query['IsPage'] = $request->isPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTaskList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Task List.
     *
     * @param request - DescribeTaskListRequest
     *
     * @returns DescribeTaskListResponse
     *
     * @param DescribeTaskListRequest $request
     *
     * @return DescribeTaskListResponse
     */
    public function describeTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskListWithOptions($request, $runtime);
    }

    /**
     * Task Log List.
     *
     * @param request - DescribeTaskLogListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskLogListResponse
     *
     * @param DescribeTaskLogListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeTaskLogListResponse
     */
    public function describeTaskLogListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->isPage) {
            @$query['IsPage'] = $request->isPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskLogId) {
            @$query['TaskLogId'] = $request->taskLogId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTaskLogList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTaskLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Task Log List.
     *
     * @param request - DescribeTaskLogListRequest
     *
     * @returns DescribeTaskLogListResponse
     *
     * @param DescribeTaskLogListRequest $request
     *
     * @return DescribeTaskLogListResponse
     */
    public function describeTaskLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskLogListWithOptions($request, $runtime);
    }

    /**
     * Query Total Event Count.
     *
     * @param request - DescribeTemplateCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplateCountResponse
     *
     * @param DescribeTemplateCountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTemplateCountResponse
     */
    public function describeTemplateCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplateCount',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTemplateCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Total Event Count.
     *
     * @param request - DescribeTemplateCountRequest
     *
     * @returns DescribeTemplateCountResponse
     *
     * @param DescribeTemplateCountRequest $request
     *
     * @return DescribeTemplateCountResponse
     */
    public function describeTemplateCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateCountWithOptions($request, $runtime);
    }

    /**
     * Template Download.
     *
     * @param request - DescribeTemplateDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplateDownloadResponse
     *
     * @param DescribeTemplateDownloadRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTemplateDownloadResponse
     */
    public function describeTemplateDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplateDownload',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTemplateDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Template Download.
     *
     * @param request - DescribeTemplateDownloadRequest
     *
     * @returns DescribeTemplateDownloadResponse
     *
     * @param DescribeTemplateDownloadRequest $request
     *
     * @return DescribeTemplateDownloadResponse
     */
    public function describeTemplateDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateDownloadWithOptions($request, $runtime);
    }

    /**
     * Query Event List by Event Name.
     *
     * @param request - DescribeTemplatePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplatePageListResponse
     *
     * @param DescribeTemplatePageListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTemplatePageListResponse
     */
    public function describeTemplatePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->templateName) {
            @$query['templateName'] = $request->templateName;
        }

        if (null !== $request->templateSearchItem) {
            @$query['templateSearchItem'] = $request->templateSearchItem;
        }

        if (null !== $request->templateStatus) {
            @$query['templateStatus'] = $request->templateStatus;
        }

        if (null !== $request->templateType) {
            @$query['templateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplatePageList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTemplatePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Event List by Event Name.
     *
     * @param request - DescribeTemplatePageListRequest
     *
     * @returns DescribeTemplatePageListResponse
     *
     * @param DescribeTemplatePageListRequest $request
     *
     * @return DescribeTemplatePageListResponse
     */
    public function describeTemplatePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatePageListWithOptions($request, $runtime);
    }

    /**
     * Get List of Services Used by User.
     *
     * @param request - DescribeUsedServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsedServiceResponse
     *
     * @param DescribeUsedServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUsedServiceResponse
     */
    public function describeUsedServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUsedService',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsedServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get List of Services Used by User.
     *
     * @param request - DescribeUsedServiceRequest
     *
     * @returns DescribeUsedServiceResponse
     *
     * @param DescribeUsedServiceRequest $request
     *
     * @return DescribeUsedServiceResponse
     */
    public function describeUsedService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsedServiceWithOptions($request, $runtime);
    }

    /**
     * Get Current Logged-in User Information.
     *
     * @param request - DescribeUserInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserInfoResponse
     *
     * @param DescribeUserInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeUserInfoResponse
     */
    public function describeUserInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserInfo',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Current Logged-in User Information.
     *
     * @param request - DescribeUserInfoRequest
     *
     * @returns DescribeUserInfoResponse
     *
     * @param DescribeUserInfoRequest $request
     *
     * @return DescribeUserInfoResponse
     */
    public function describeUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserInfoWithOptions($request, $runtime);
    }

    /**
     * Query Variable Binding Information.
     *
     * @param request - DescribeVariableBindDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVariableBindDetailResponse
     *
     * @param DescribeVariableBindDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVariableBindDetailResponse
     */
    public function describeVariableBindDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->defineId) {
            @$query['defineId'] = $request->defineId;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVariableBindDetail',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVariableBindDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable Binding Information.
     *
     * @param request - DescribeVariableBindDetailRequest
     *
     * @returns DescribeVariableBindDetailResponse
     *
     * @param DescribeVariableBindDetailRequest $request
     *
     * @return DescribeVariableBindDetailResponse
     */
    public function describeVariableBindDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableBindDetailWithOptions($request, $runtime);
    }

    /**
     * Query variable details.
     *
     * @param request - DescribeVariableDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVariableDetailResponse
     *
     * @param DescribeVariableDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVariableDetailResponse
     */
    public function describeVariableDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVariableDetail',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVariableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query variable details.
     *
     * @param request - DescribeVariableDetailRequest
     *
     * @returns DescribeVariableDetailResponse
     *
     * @param DescribeVariableDetailRequest $request
     *
     * @return DescribeVariableDetailResponse
     */
    public function describeVariableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableDetailWithOptions($request, $runtime);
    }

    /**
     * Query Variable Fee Information.
     *
     * @param request - DescribeVariableFeeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVariableFeeResponse
     *
     * @param DescribeVariableFeeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVariableFeeResponse
     */
    public function describeVariableFeeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ids) {
            @$query['ids'] = $request->ids;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVariableFee',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVariableFeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable Fee Information.
     *
     * @param request - DescribeVariableFeeRequest
     *
     * @returns DescribeVariableFeeResponse
     *
     * @param DescribeVariableFeeRequest $request
     *
     * @return DescribeVariableFeeResponse
     */
    public function describeVariableFee($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableFeeWithOptions($request, $runtime);
    }

    /**
     * Query Variable Details.
     *
     * @param request - DescribeVariableListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVariableListResponse
     *
     * @param DescribeVariableListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVariableListResponse
     */
    public function describeVariableListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->refObjId) {
            @$query['refObjId'] = $request->refObjId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->typesStr) {
            @$query['typesStr'] = $request->typesStr;
        }

        if (null !== $request->value) {
            @$query['value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVariableList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVariableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable Details.
     *
     * @param request - DescribeVariableListRequest
     *
     * @returns DescribeVariableListResponse
     *
     * @param DescribeVariableListRequest $request
     *
     * @return DescribeVariableListResponse
     */
    public function describeVariableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableListWithOptions($request, $runtime);
    }

    /**
     * Query Variable Definitions.
     *
     * @param request - DescribeVariableMarketListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVariableMarketListResponse
     *
     * @param DescribeVariableMarketListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVariableMarketListResponse
     */
    public function describeVariableMarketListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->chargingMode) {
            @$query['chargingMode'] = $request->chargingMode;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->paging) {
            @$query['paging'] = $request->paging;
        }

        if (null !== $request->queryContent) {
            @$query['queryContent'] = $request->queryContent;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scenesStr) {
            @$query['scenesStr'] = $request->scenesStr;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVariableMarketList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVariableMarketListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable Definitions.
     *
     * @param request - DescribeVariableMarketListRequest
     *
     * @returns DescribeVariableMarketListResponse
     *
     * @param DescribeVariableMarketListRequest $request
     *
     * @return DescribeVariableMarketListResponse
     */
    public function describeVariableMarketList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableMarketListWithOptions($request, $runtime);
    }

    /**
     * Query Configuration Information.
     *
     * @param request - DescribeVariableSceneListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVariableSceneListResponse
     *
     * @param DescribeVariableSceneListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVariableSceneListResponse
     */
    public function describeVariableSceneListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->bizType) {
            @$query['bizType'] = $request->bizType;
        }

        if (null !== $request->configKey) {
            @$query['configKey'] = $request->configKey;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->paging) {
            @$query['paging'] = $request->paging;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVariableSceneList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVariableSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Configuration Information.
     *
     * @param request - DescribeVariableSceneListRequest
     *
     * @returns DescribeVariableSceneListResponse
     *
     * @param DescribeVariableSceneListRequest $request
     *
     * @return DescribeVariableSceneListResponse
     */
    public function describeVariableSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVariableSceneListWithOptions($request, $runtime);
    }

    /**
     * Sample List Data Download.
     *
     * @param request - DownloadSmapleBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadSmapleBatchResponse
     *
     * @param DownloadSmapleBatchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DownloadSmapleBatchResponse
     */
    public function downloadSmapleBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->batchUuid) {
            @$query['batchUuid'] = $request->batchUuid;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadSmapleBatch',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadSmapleBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sample List Data Download.
     *
     * @param request - DownloadSmapleBatchRequest
     *
     * @returns DownloadSmapleBatchResponse
     *
     * @param DownloadSmapleBatchRequest $request
     *
     * @return DownloadSmapleBatchResponse
     */
    public function downloadSmapleBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSmapleBatchWithOptions($request, $runtime);
    }

    /**
     * Custom Variable Test.
     *
     * @param request - ExpressionTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExpressionTestResponse
     *
     * @param ExpressionTestRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExpressionTestResponse
     */
    public function expressionTestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->expression) {
            @$query['expression'] = $request->expression;
        }

        if (null !== $request->expressionVariable) {
            @$query['expressionVariable'] = $request->expressionVariable;
        }

        if (null !== $request->expressionVariableIds) {
            @$query['expressionVariableIds'] = $request->expressionVariableIds;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExpressionTest',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExpressionTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Custom Variable Test.
     *
     * @param request - ExpressionTestRequest
     *
     * @returns ExpressionTestResponse
     *
     * @param ExpressionTestRequest $request
     *
     * @return ExpressionTestResponse
     */
    public function expressionTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expressionTestWithOptions($request, $runtime);
    }

    /**
     * File Upload.
     *
     * @param request - FileUploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FileUploadResponse
     *
     * @param FileUploadRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FileUploadResponse
     */
    public function fileUploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->tab) {
            @$query['Tab'] = $request->tab;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FileUpload',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FileUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * File Upload.
     *
     * @param request - FileUploadRequest
     *
     * @returns FileUploadResponse
     *
     * @param FileUploadRequest $request
     *
     * @return FileUploadResponse
     */
    public function fileUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fileUploadWithOptions($request, $runtime);
    }

    /**
     * Batch Import.
     *
     * @param request - ImportFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportFieldResponse
     *
     * @param ImportFieldRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ImportFieldResponse
     */
    public function importFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportField',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Import.
     *
     * @param request - ImportFieldRequest
     *
     * @returns ImportFieldResponse
     *
     * @param ImportFieldRequest $request
     *
     * @return ImportFieldResponse
     */
    public function importField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importFieldWithOptions($request, $runtime);
    }

    /**
     * Create or Import Name List.
     *
     * @param request - ImportNameListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportNameListResponse
     *
     * @param ImportNameListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ImportNameListResponse
     */
    public function importNameListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->data) {
            @$query['data'] = $request->data;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->importType) {
            @$query['importType'] = $request->importType;
        }

        if (null !== $request->memo) {
            @$query['memo'] = $request->memo;
        }

        if (null !== $request->nameListType) {
            @$query['nameListType'] = $request->nameListType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        if (null !== $request->variableId) {
            @$query['variableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportNameList',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create or Import Name List.
     *
     * @param request - ImportNameListRequest
     *
     * @returns ImportNameListResponse
     *
     * @param ImportNameListRequest $request
     *
     * @return ImportNameListResponse
     */
    public function importNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importNameListWithOptions($request, $runtime);
    }

    /**
     * Import Template Event.
     *
     * @param request - ImportTemplateEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportTemplateEventResponse
     *
     * @param ImportTemplateEventRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportTemplateEventResponse
     */
    public function importTemplateEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventTemplateIds) {
            @$query['eventTemplateIds'] = $request->eventTemplateIds;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportTemplateEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportTemplateEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Import Template Event.
     *
     * @param request - ImportTemplateEventRequest
     *
     * @returns ImportTemplateEventResponse
     *
     * @param ImportTemplateEventRequest $request
     *
     * @return ImportTemplateEventResponse
     */
    public function importTemplateEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importTemplateEventWithOptions($request, $runtime);
    }

    /**
     * Query Variable Definition.
     *
     * @param request - ListVariableDefineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVariableDefineResponse
     *
     * @param ListVariableDefineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListVariableDefineResponse
     */
    public function listVariableDefineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->allowBind) {
            @$query['allowBind'] = $request->allowBind;
        }

        if (null !== $request->chargingMode) {
            @$query['chargingMode'] = $request->chargingMode;
        }

        if (null !== $request->currentPage) {
            @$query['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->paging) {
            @$query['paging'] = $request->paging;
        }

        if (null !== $request->queryContent) {
            @$query['queryContent'] = $request->queryContent;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->roleType) {
            @$query['roleType'] = $request->roleType;
        }

        if (null !== $request->scenesStr) {
            @$query['scenesStr'] = $request->scenesStr;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        if (null !== $request->typesStr) {
            @$query['typesStr'] = $request->typesStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVariableDefine',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVariableDefineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable Definition.
     *
     * @param request - ListVariableDefineRequest
     *
     * @returns ListVariableDefineResponse
     *
     * @param ListVariableDefineRequest $request
     *
     * @return ListVariableDefineResponse
     */
    public function listVariableDefine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVariableDefineWithOptions($request, $runtime);
    }

    /**
     * Delete.
     *
     * @param request - ModelDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelDeleteResponse
     *
     * @param ModelDeleteRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModelDeleteResponse
     */
    public function modelDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelDelete',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete.
     *
     * @param request - ModelDeleteRequest
     *
     * @returns ModelDeleteResponse
     *
     * @param ModelDeleteRequest $request
     *
     * @return ModelDeleteResponse
     */
    public function modelDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelDeleteWithOptions($request, $runtime);
    }

    /**
     * File Upload.
     *
     * @param request - ModelFileUploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelFileUploadResponse
     *
     * @param ModelFileUploadRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModelFileUploadResponse
     */
    public function modelFileUploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->objectName) {
            @$query['ObjectName'] = $request->objectName;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelFileUpload',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelFileUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * File Upload.
     *
     * @param request - ModelFileUploadRequest
     *
     * @returns ModelFileUploadResponse
     *
     * @param ModelFileUploadRequest $request
     *
     * @return ModelFileUploadResponse
     */
    public function modelFileUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelFileUploadWithOptions($request, $runtime);
    }

    /**
     * Enable, Disable.
     *
     * @param request - ModelIsUsingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelIsUsingResponse
     *
     * @param ModelIsUsingRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModelIsUsingResponse
     */
    public function modelIsUsingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelCode) {
            @$query['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->modelId) {
            @$query['ModelId'] = $request->modelId;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelIsUsing',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelIsUsingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enable, Disable.
     *
     * @param request - ModelIsUsingRequest
     *
     * @returns ModelIsUsingResponse
     *
     * @param ModelIsUsingRequest $request
     *
     * @return ModelIsUsingResponse
     */
    public function modelIsUsing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelIsUsingWithOptions($request, $runtime);
    }

    /**
     * Is Model Name Duplicated.
     *
     * @param request - ModelNameIsDuplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelNameIsDuplicationResponse
     *
     * @param ModelNameIsDuplicationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModelNameIsDuplicationResponse
     */
    public function modelNameIsDuplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelNameIsDuplication',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelNameIsDuplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Is Model Name Duplicated.
     *
     * @param request - ModelNameIsDuplicationRequest
     *
     * @returns ModelNameIsDuplicationResponse
     *
     * @param ModelNameIsDuplicationRequest $request
     *
     * @return ModelNameIsDuplicationResponse
     */
    public function modelNameIsDuplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelNameIsDuplicationWithOptions($request, $runtime);
    }

    /**
     * Template Download.
     *
     * @param request - ModelSampleDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelSampleDownloadResponse
     *
     * @param ModelSampleDownloadRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModelSampleDownloadResponse
     */
    public function modelSampleDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModelSampleDownload',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelSampleDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Template Download.
     *
     * @param request - ModelSampleDownloadRequest
     *
     * @returns ModelSampleDownloadResponse
     *
     * @param ModelSampleDownloadRequest $request
     *
     * @return ModelSampleDownloadResponse
     */
    public function modelSampleDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelSampleDownloadWithOptions($request, $runtime);
    }

    /**
     * Update Memo.
     *
     * @param request - ModifyAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppKeyResponse
     *
     * @param ModifyAppKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyAppKeyResponse
     */
    public function modifyAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->appKey) {
            @$query['appKey'] = $request->appKey;
        }

        if (null !== $request->memo) {
            @$query['memo'] = $request->memo;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppKey',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Memo.
     *
     * @param request - ModifyAppKeyRequest
     *
     * @returns ModifyAppKeyResponse
     *
     * @param ModifyAppKeyRequest $request
     *
     * @return ModifyAppKeyResponse
     */
    public function modifyAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppKeyWithOptions($request, $runtime);
    }

    /**
     * Edit Accumulated Variable.
     *
     * @param request - ModifyCustVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCustVariableResponse
     *
     * @param ModifyCustVariableRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyCustVariableResponse
     */
    public function modifyCustVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->condition) {
            @$query['condition'] = $request->condition;
        }

        if (null !== $request->dataVersion) {
            @$query['dataVersion'] = $request->dataVersion;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->eventCodes) {
            @$query['eventCodes'] = $request->eventCodes;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->outputs) {
            @$query['outputs'] = $request->outputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCustVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCustVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Accumulated Variable.
     *
     * @param request - ModifyCustVariableRequest
     *
     * @returns ModifyCustVariableResponse
     *
     * @param ModifyCustVariableRequest $request
     *
     * @return ModifyCustVariableResponse
     */
    public function modifyCustVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustVariableWithOptions($request, $runtime);
    }

    /**
     * Edit Event.
     *
     * @param request - ModifyEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEventResponse
     *
     * @param ModifyEventRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyEventResponse
     */
    public function modifyEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->bizVersion) {
            @$query['bizVersion'] = $request->bizVersion;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->eventName) {
            @$query['eventName'] = $request->eventName;
        }

        if (null !== $request->inputFieldsStr) {
            @$query['inputFieldsStr'] = $request->inputFieldsStr;
        }

        if (null !== $request->memo) {
            @$query['memo'] = $request->memo;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->templateType) {
            @$query['templateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Event.
     *
     * @param request - ModifyEventRequest
     *
     * @returns ModifyEventResponse
     *
     * @param ModifyEventRequest $request
     *
     * @return ModifyEventResponse
     */
    public function modifyEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventWithOptions($request, $runtime);
    }

    /**
     * Modify Event Status.
     *
     * @param request - ModifyEventStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEventStatusResponse
     *
     * @param ModifyEventStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEventStatusResponse
     */
    public function modifyEventStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->fromEventSatus) {
            @$query['fromEventSatus'] = $request->fromEventSatus;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->toEventSatus) {
            @$query['toEventSatus'] = $request->toEventSatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEventStatus',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEventStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Event Status.
     *
     * @param request - ModifyEventStatusRequest
     *
     * @returns ModifyEventStatusResponse
     *
     * @param ModifyEventStatusRequest $request
     *
     * @return ModifyEventStatusResponse
     */
    public function modifyEventStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventStatusWithOptions($request, $runtime);
    }

    /**
     * Edit Custom Variable.
     *
     * @param request - ModifyExpressionVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyExpressionVariableResponse
     *
     * @param ModifyExpressionVariableRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyExpressionVariableResponse
     */
    public function modifyExpressionVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataVersion) {
            @$query['dataVersion'] = $request->dataVersion;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->expression) {
            @$query['expression'] = $request->expression;
        }

        if (null !== $request->expressionTitle) {
            @$query['expressionTitle'] = $request->expressionTitle;
        }

        if (null !== $request->expressionVariable) {
            @$query['expressionVariable'] = $request->expressionVariable;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->outlier) {
            @$query['outlier'] = $request->outlier;
        }

        if (null !== $request->outputs) {
            @$query['outputs'] = $request->outputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyExpressionVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyExpressionVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Custom Variable.
     *
     * @param request - ModifyExpressionVariableRequest
     *
     * @returns ModifyExpressionVariableResponse
     *
     * @param ModifyExpressionVariableRequest $request
     *
     * @return ModifyExpressionVariableResponse
     */
    public function modifyExpressionVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressionVariableWithOptions($request, $runtime);
    }

    /**
     * Modify Field.
     *
     * @param request - ModifyFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFieldResponse
     *
     * @param ModifyFieldRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyFieldResponse
     */
    public function modifyFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->classify) {
            @$query['classify'] = $request->classify;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->enumData) {
            @$query['enumData'] = $request->enumData;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyField',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Field.
     *
     * @param request - ModifyFieldRequest
     *
     * @returns ModifyFieldResponse
     *
     * @param ModifyFieldRequest $request
     *
     * @return ModifyFieldResponse
     */
    public function modifyField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFieldWithOptions($request, $runtime);
    }

    /**
     * Modify Policy Priority.
     *
     * @param request - ModifyRulePriorityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRulePriorityResponse
     *
     * @param ModifyRulePriorityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyRulePriorityResponse
     */
    public function modifyRulePriorityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->priority) {
            @$query['priority'] = $request->priority;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRulePriority',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRulePriorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Policy Priority.
     *
     * @param request - ModifyRulePriorityRequest
     *
     * @returns ModifyRulePriorityResponse
     *
     * @param ModifyRulePriorityRequest $request
     *
     * @return ModifyRulePriorityResponse
     */
    public function modifyRulePriority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRulePriorityWithOptions($request, $runtime);
    }

    /**
     * Change the status of a policy version application.
     *
     * @param request - ModifyRuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRuleStatusResponse
     *
     * @param ModifyRuleStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyRuleStatusResponse
     */
    public function modifyRuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->applyUserId) {
            @$query['applyUserId'] = $request->applyUserId;
        }

        if (null !== $request->applyUserName) {
            @$query['applyUserName'] = $request->applyUserName;
        }

        if (null !== $request->auditRemark) {
            @$query['auditRemark'] = $request->auditRemark;
        }

        if (null !== $request->auditUserId) {
            @$query['auditUserId'] = $request->auditUserId;
        }

        if (null !== $request->auditUserName) {
            @$query['auditUserName'] = $request->auditUserName;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->eventType) {
            @$query['eventType'] = $request->eventType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleAuditType) {
            @$query['ruleAuditType'] = $request->ruleAuditType;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->ruleVersionId) {
            @$query['ruleVersionId'] = $request->ruleVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRuleStatus',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Change the status of a policy version application.
     *
     * @param request - ModifyRuleStatusRequest
     *
     * @returns ModifyRuleStatusResponse
     *
     * @param ModifyRuleStatusRequest $request
     *
     * @return ModifyRuleStatusResponse
     */
    public function modifyRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleStatusWithOptions($request, $runtime);
    }

    /**
     * Activate Service.
     *
     * @param request - OpenConsoleSlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenConsoleSlsResponse
     *
     * @param OpenConsoleSlsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OpenConsoleSlsResponse
     */
    public function openConsoleSlsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenConsoleSls',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenConsoleSlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activate Service.
     *
     * @param request - OpenConsoleSlsRequest
     *
     * @returns OpenConsoleSlsResponse
     *
     * @param OpenConsoleSlsRequest $request
     *
     * @return OpenConsoleSlsResponse
     */
    public function openConsoleSls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openConsoleSlsWithOptions($request, $runtime);
    }

    /**
     * Operate Favorites.
     *
     * @param request - OperateFavoriteVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateFavoriteVariableResponse
     *
     * @param OperateFavoriteVariableRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateFavoriteVariableResponse
     */
    public function operateFavoriteVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->operate) {
            @$query['operate'] = $request->operate;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateFavoriteVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateFavoriteVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Operate Favorites.
     *
     * @param request - OperateFavoriteVariableRequest
     *
     * @returns OperateFavoriteVariableResponse
     *
     * @param OperateFavoriteVariableRequest $request
     *
     * @return OperateFavoriteVariableResponse
     */
    public function operateFavoriteVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateFavoriteVariableWithOptions($request, $runtime);
    }

    /**
     * Enterprise Verification.
     *
     * @param request - PermissionCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PermissionCheckResponse
     *
     * @param PermissionCheckRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PermissionCheckResponse
     */
    public function permissionCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PermissionCheck',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PermissionCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enterprise Verification.
     *
     * @param request - PermissionCheckRequest
     *
     * @returns PermissionCheckResponse
     *
     * @param PermissionCheckRequest $request
     *
     * @return PermissionCheckResponse
     */
    public function permissionCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->permissionCheckWithOptions($request, $runtime);
    }

    /**
     * createTask.
     *
     * @param request - PocCreateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PocCreateTaskResponse
     *
     * @param PocCreateTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PocCreateTaskResponse
     */
    public function pocCreateTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dateFormat) {
            @$query['DateFormat'] = $request->dateFormat;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PocCreateTask',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PocCreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * createTask.
     *
     * @param request - PocCreateTaskRequest
     *
     * @returns PocCreateTaskResponse
     *
     * @param PocCreateTaskRequest $request
     *
     * @return PocCreateTaskResponse
     */
    public function pocCreateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pocCreateTaskWithOptions($request, $runtime);
    }

    /**
     * PocGetDownloadUrl.
     *
     * @param request - PocGetDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PocGetDownloadUrlResponse
     *
     * @param PocGetDownloadUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PocGetDownloadUrlResponse
     */
    public function pocGetDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PocGetDownloadUrl',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PocGetDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PocGetDownloadUrl.
     *
     * @param request - PocGetDownloadUrlRequest
     *
     * @returns PocGetDownloadUrlResponse
     *
     * @param PocGetDownloadUrlRequest $request
     *
     * @return PocGetDownloadUrlResponse
     */
    public function pocGetDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pocGetDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * getToken.
     *
     * @param request - PocGetTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PocGetTokenResponse
     *
     * @param PocGetTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return PocGetTokenResponse
     */
    public function pocGetTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PocGetToken',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PocGetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * getToken.
     *
     * @param request - PocGetTokenRequest
     *
     * @returns PocGetTokenResponse
     *
     * @param PocGetTokenRequest $request
     *
     * @return PocGetTokenResponse
     */
    public function pocGetToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pocGetTokenWithOptions($request, $runtime);
    }

    /**
     * sendData.
     *
     * @param request - PocSendDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PocSendDataResponse
     *
     * @param PocSendDataRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return PocSendDataResponse
     */
    public function pocSendDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchNo) {
            @$query['BatchNo'] = $request->batchNo;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->paramsList) {
            @$query['ParamsList'] = $request->paramsList;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PocSendData',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PocSendDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sendData.
     *
     * @param request - PocSendDataRequest
     *
     * @returns PocSendDataResponse
     *
     * @param PocSendDataRequest $request
     *
     * @return PocSendDataResponse
     */
    public function pocSendData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pocSendDataWithOptions($request, $runtime);
    }

    /**
     * Query White-box Strategy Details.
     *
     * @param request - QueryAuthRuleDetailByRuleIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAuthRuleDetailByRuleIdResponse
     *
     * @param QueryAuthRuleDetailByRuleIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryAuthRuleDetailByRuleIdResponse
     */
    public function queryAuthRuleDetailByRuleIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->ruleVersionId) {
            @$query['ruleVersionId'] = $request->ruleVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAuthRuleDetailByRuleId',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAuthRuleDetailByRuleIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query White-box Strategy Details.
     *
     * @param request - QueryAuthRuleDetailByRuleIdRequest
     *
     * @returns QueryAuthRuleDetailByRuleIdResponse
     *
     * @param QueryAuthRuleDetailByRuleIdRequest $request
     *
     * @return QueryAuthRuleDetailByRuleIdResponse
     */
    public function queryAuthRuleDetailByRuleId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuthRuleDetailByRuleIdWithOptions($request, $runtime);
    }

    /**
     * Recall.
     *
     * @param request - RecallRuleAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecallRuleAuditResponse
     *
     * @param RecallRuleAuditRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecallRuleAuditResponse
     */
    public function recallRuleAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecallRuleAudit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecallRuleAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recall.
     *
     * @param request - RecallRuleAuditRequest
     *
     * @returns RecallRuleAuditResponse
     *
     * @param RecallRuleAuditRequest $request
     *
     * @return RecallRuleAuditResponse
     */
    public function recallRuleAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recallRuleAuditWithOptions($request, $runtime);
    }

    /**
     * Delete Event.
     *
     * @param request - RemoveEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveEventResponse
     *
     * @param RemoveEventRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveEventResponse
     */
    public function removeEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->createType) {
            @$query['createType'] = $request->createType;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->templateCode) {
            @$query['templateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Event.
     *
     * @param request - RemoveEventRequest
     *
     * @returns RemoveEventResponse
     *
     * @param RemoveEventRequest $request
     *
     * @return RemoveEventResponse
     */
    public function removeEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEventWithOptions($request, $runtime);
    }

    /**
     * Template Download.
     *
     * @param request - SampleFileDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SampleFileDownloadResponse
     *
     * @param SampleFileDownloadRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SampleFileDownloadResponse
     */
    public function sampleFileDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->tab) {
            @$query['Tab'] = $request->tab;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SampleFileDownload',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SampleFileDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Template Download.
     *
     * @param request - SampleFileDownloadRequest
     *
     * @returns SampleFileDownloadResponse
     *
     * @param SampleFileDownloadRequest $request
     *
     * @return SampleFileDownloadResponse
     */
    public function sampleFileDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sampleFileDownloadWithOptions($request, $runtime);
    }

    /**
     * Save Custom Columns.
     *
     * @param request - SaveAnalysisColumnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveAnalysisColumnResponse
     *
     * @param SaveAnalysisColumnRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SaveAnalysisColumnResponse
     */
    public function saveAnalysisColumnWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->columns) {
            @$query['columns'] = $request->columns;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveAnalysisColumn',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveAnalysisColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Save Custom Columns.
     *
     * @param request - SaveAnalysisColumnRequest
     *
     * @returns SaveAnalysisColumnResponse
     *
     * @param SaveAnalysisColumnRequest $request
     *
     * @return SaveAnalysisColumnResponse
     */
    public function saveAnalysisColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAnalysisColumnWithOptions($request, $runtime);
    }

    /**
     * Bypass/Shunt Configuration.
     *
     * @param request - SaveByPassOrShuntEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveByPassOrShuntEventResponse
     *
     * @param SaveByPassOrShuntEventRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SaveByPassOrShuntEventResponse
     */
    public function saveByPassOrShuntEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventId) {
            @$query['eventId'] = $request->eventId;
        }

        if (null !== $request->eventName) {
            @$query['eventName'] = $request->eventName;
        }

        if (null !== $request->eventType) {
            @$query['eventType'] = $request->eventType;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveByPassOrShuntEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveByPassOrShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Bypass/Shunt Configuration.
     *
     * @param request - SaveByPassOrShuntEventRequest
     *
     * @returns SaveByPassOrShuntEventResponse
     *
     * @param SaveByPassOrShuntEventRequest $request
     *
     * @return SaveByPassOrShuntEventResponse
     */
    public function saveByPassOrShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveByPassOrShuntEventWithOptions($request, $runtime);
    }

    /**
     * Start/Stop Bypass Event.
     *
     * @param request - StartOrStopByPassShuntEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartOrStopByPassShuntEventResponse
     *
     * @param StartOrStopByPassShuntEventRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return StartOrStopByPassShuntEventResponse
     */
    public function startOrStopByPassShuntEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventId) {
            @$query['eventId'] = $request->eventId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartOrStopByPassShuntEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartOrStopByPassShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Start/Stop Bypass Event.
     *
     * @param request - StartOrStopByPassShuntEventRequest
     *
     * @returns StartOrStopByPassShuntEventResponse
     *
     * @param StartOrStopByPassShuntEventRequest $request
     *
     * @return StartOrStopByPassShuntEventResponse
     */
    public function startOrStopByPassShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startOrStopByPassShuntEventWithOptions($request, $runtime);
    }

    /**
     * Start Task Execution.
     *
     * @param request - StartSimulationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSimulationTaskResponse
     *
     * @param StartSimulationTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartSimulationTaskResponse
     */
    public function startSimulationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartSimulationTask',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartSimulationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Start Task Execution.
     *
     * @param request - StartSimulationTaskRequest
     *
     * @returns StartSimulationTaskResponse
     *
     * @param StartSimulationTaskRequest $request
     *
     * @return StartSimulationTaskResponse
     */
    public function startSimulationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSimulationTaskWithOptions($request, $runtime);
    }

    /**
     * Stop Task.
     *
     * @param request - StopSimulationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSimulationTaskResponse
     *
     * @param StopSimulationTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopSimulationTaskResponse
     */
    public function stopSimulationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopSimulationTask',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopSimulationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stop Task.
     *
     * @param request - StopSimulationTaskRequest
     *
     * @returns StopSimulationTaskResponse
     *
     * @param StopSimulationTaskRequest $request
     *
     * @return StopSimulationTaskResponse
     */
    public function stopSimulationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopSimulationTaskWithOptions($request, $runtime);
    }

    /**
     * Custom Variable Switch.
     *
     * @param request - SwitchExpressionVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchExpressionVariableResponse
     *
     * @param SwitchExpressionVariableRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SwitchExpressionVariableResponse
     */
    public function switchExpressionVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataVersion) {
            @$query['dataVersion'] = $request->dataVersion;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchExpressionVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchExpressionVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Custom Variable Switch.
     *
     * @param request - SwitchExpressionVariableRequest
     *
     * @returns SwitchExpressionVariableResponse
     *
     * @param SwitchExpressionVariableRequest $request
     *
     * @return SwitchExpressionVariableResponse
     */
    public function switchExpressionVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchExpressionVariableWithOptions($request, $runtime);
    }

    /**
     * Field Switch.
     *
     * @param request - SwitchFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchFieldResponse
     *
     * @param SwitchFieldRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SwitchFieldResponse
     */
    public function switchFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchField',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Field Switch.
     *
     * @param request - SwitchFieldRequest
     *
     * @returns SwitchFieldResponse
     *
     * @param SwitchFieldRequest $request
     *
     * @return SwitchFieldResponse
     */
    public function switchField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchFieldWithOptions($request, $runtime);
    }

    /**
     * Query Variable Enable/Disable.
     *
     * @param request - SwitchQueryVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchQueryVariableResponse
     *
     * @param SwitchQueryVariableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SwitchQueryVariableResponse
     */
    public function switchQueryVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchQueryVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchQueryVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Variable Enable/Disable.
     *
     * @param request - SwitchQueryVariableRequest
     *
     * @returns SwitchQueryVariableResponse
     *
     * @param SwitchQueryVariableRequest $request
     *
     * @return SwitchQueryVariableResponse
     */
    public function switchQueryVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchQueryVariableWithOptions($request, $runtime);
    }

    /**
     * One-click switch online.
     *
     * @param request - SwitchToOnlineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchToOnlineResponse
     *
     * @param SwitchToOnlineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SwitchToOnlineResponse
     */
    public function switchToOnlineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventId) {
            @$query['eventId'] = $request->eventId;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchToOnline',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchToOnlineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * One-click switch online.
     *
     * @param request - SwitchToOnlineRequest
     *
     * @returns SwitchToOnlineResponse
     *
     * @param SwitchToOnlineRequest $request
     *
     * @return SwitchToOnlineResponse
     */
    public function switchToOnline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchToOnlineWithOptions($request, $runtime);
    }

    /**
     * Cumulative Variable Switch.
     *
     * @param request - SwitchVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchVariableResponse
     *
     * @param SwitchVariableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SwitchVariableResponse
     */
    public function switchVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataVersion) {
            @$query['dataVersion'] = $request->dataVersion;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cumulative Variable Switch.
     *
     * @param request - SwitchVariableRequest
     *
     * @returns SwitchVariableResponse
     *
     * @param SwitchVariableRequest $request
     *
     * @return SwitchVariableResponse
     */
    public function switchVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchVariableWithOptions($request, $runtime);
    }

    /**
     * Determine if the task name is duplicated.
     *
     * @param request - TaskNameByUserIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskNameByUserIdResponse
     *
     * @param TaskNameByUserIdRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TaskNameByUserIdResponse
     */
    public function taskNameByUserIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regId) {
            @$query['RegId'] = $request->regId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TaskNameByUserId',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskNameByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Determine if the task name is duplicated.
     *
     * @param request - TaskNameByUserIdRequest
     *
     * @returns TaskNameByUserIdResponse
     *
     * @param TaskNameByUserIdRequest $request
     *
     * @return TaskNameByUserIdResponse
     */
    public function taskNameByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskNameByUserIdWithOptions($request, $runtime);
    }

    /**
     * Modify Query Conditions.
     *
     * @param request - UpdateAnalysisConditionFavoriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAnalysisConditionFavoriteResponse
     *
     * @param UpdateAnalysisConditionFavoriteRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateAnalysisConditionFavoriteResponse
     */
    public function updateAnalysisConditionFavoriteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->condition) {
            @$query['condition'] = $request->condition;
        }

        if (null !== $request->eventBeginTime) {
            @$query['eventBeginTime'] = $request->eventBeginTime;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->eventEndTime) {
            @$query['eventEndTime'] = $request->eventEndTime;
        }

        if (null !== $request->fieldName) {
            @$query['fieldName'] = $request->fieldName;
        }

        if (null !== $request->fieldValue) {
            @$query['fieldValue'] = $request->fieldValue;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAnalysisConditionFavorite',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAnalysisConditionFavoriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Query Conditions.
     *
     * @param request - UpdateAnalysisConditionFavoriteRequest
     *
     * @returns UpdateAnalysisConditionFavoriteResponse
     *
     * @param UpdateAnalysisConditionFavoriteRequest $request
     *
     * @return UpdateAnalysisConditionFavoriteResponse
     */
    public function updateAnalysisConditionFavorite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAnalysisConditionFavoriteWithOptions($request, $runtime);
    }

    /**
     * Approval.
     *
     * @param request - UpdateAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuditResponse
     *
     * @param UpdateAuditRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAuditResponse
     */
    public function updateAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->auditMsg) {
            @$query['auditMsg'] = $request->auditMsg;
        }

        if (null !== $request->auditRelationType) {
            @$query['auditRelationType'] = $request->auditRelationType;
        }

        if (null !== $request->auditStatus) {
            @$query['auditStatus'] = $request->auditStatus;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAudit',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Approval.
     *
     * @param request - UpdateAuditRequest
     *
     * @returns UpdateAuditResponse
     *
     * @param UpdateAuditRequest $request
     *
     * @return UpdateAuditResponse
     */
    public function updateAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuditWithOptions($request, $runtime);
    }

    /**
     * Modify Authorization Policy.
     *
     * @param request - UpdateAuthRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthRuleResponse
     *
     * @param UpdateAuthRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAuthRuleResponse
     */
    public function updateAuthRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleActions) {
            @$query['ruleActions'] = $request->ruleActions;
        }

        if (null !== $request->ruleExpressions) {
            @$query['ruleExpressions'] = $request->ruleExpressions;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->ruleVersionId) {
            @$query['ruleVersionId'] = $request->ruleVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthRule',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAuthRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Authorization Policy.
     *
     * @param request - UpdateAuthRuleRequest
     *
     * @returns UpdateAuthRuleResponse
     *
     * @param UpdateAuthRuleRequest $request
     *
     * @return UpdateAuthRuleResponse
     */
    public function updateAuthRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthRuleWithOptions($request, $runtime);
    }

    /**
     * Edit Bypass Event.
     *
     * @param request - UpdateByPassShuntEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateByPassShuntEventResponse
     *
     * @param UpdateByPassShuntEventRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateByPassShuntEventResponse
     */
    public function updateByPassShuntEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->eventId) {
            @$query['eventId'] = $request->eventId;
        }

        if (null !== $request->eventName) {
            @$query['eventName'] = $request->eventName;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateByPassShuntEvent',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateByPassShuntEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Bypass Event.
     *
     * @param request - UpdateByPassShuntEventRequest
     *
     * @returns UpdateByPassShuntEventResponse
     *
     * @param UpdateByPassShuntEventRequest $request
     *
     * @return UpdateByPassShuntEventResponse
     */
    public function updateByPassShuntEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateByPassShuntEventWithOptions($request, $runtime);
    }

    /**
     * Modify Data Source.
     *
     * @param request - UpdateDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataSourceResponse
     *
     * @param UpdateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->ossKey) {
            @$query['ossKey'] = $request->ossKey;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDataSource',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Data Source.
     *
     * @param request - UpdateDataSourceRequest
     *
     * @returns UpdateDataSourceResponse
     *
     * @param UpdateDataSourceRequest $request
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceWithOptions($request, $runtime);
    }

    /**
     * Modify Custom Query Variable.
     *
     * @param request - UpdateQueryVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQueryVariableResponse
     *
     * @param UpdateQueryVariableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateQueryVariableResponse
     */
    public function updateQueryVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->dataSourceCode) {
            @$query['dataSourceCode'] = $request->dataSourceCode;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->expression) {
            @$query['expression'] = $request->expression;
        }

        if (null !== $request->expressionTitle) {
            @$query['expressionTitle'] = $request->expressionTitle;
        }

        if (null !== $request->expressionVariable) {
            @$query['expressionVariable'] = $request->expressionVariable;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->outlier) {
            @$query['outlier'] = $request->outlier;
        }

        if (null !== $request->outputs) {
            @$query['outputs'] = $request->outputs;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateQueryVariable',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateQueryVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Custom Query Variable.
     *
     * @param request - UpdateQueryVariableRequest
     *
     * @returns UpdateQueryVariableResponse
     *
     * @param UpdateQueryVariableRequest $request
     *
     * @return UpdateQueryVariableResponse
     */
    public function updateQueryVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQueryVariableWithOptions($request, $runtime);
    }

    /**
     * Update Policy.
     *
     * @param request - UpdateRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRuleResponse
     *
     * @param UpdateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->logicExpression) {
            @$query['logicExpression'] = $request->logicExpression;
        }

        if (null !== $request->memo) {
            @$query['memo'] = $request->memo;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleActions) {
            @$query['ruleActions'] = $request->ruleActions;
        }

        if (null !== $request->ruleBody) {
            @$query['ruleBody'] = $request->ruleBody;
        }

        if (null !== $request->ruleExpressions) {
            @$query['ruleExpressions'] = $request->ruleExpressions;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['ruleName'] = $request->ruleName;
        }

        if (null !== $request->ruleStatus) {
            @$query['ruleStatus'] = $request->ruleStatus;
        }

        if (null !== $request->ruleType) {
            @$query['ruleType'] = $request->ruleType;
        }

        if (null !== $request->ruleVersionId) {
            @$query['ruleVersionId'] = $request->ruleVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRule',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Policy.
     *
     * @param request - UpdateRuleRequest
     *
     * @returns UpdateRuleResponse
     *
     * @param UpdateRuleRequest $request
     *
     * @return UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }

    /**
     * Update Basic Policy Information.
     *
     * @param request - UpdateRuleBaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRuleBaseResponse
     *
     * @param UpdateRuleBaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateRuleBaseResponse
     */
    public function updateRuleBaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->consoleRuleId) {
            @$query['consoleRuleId'] = $request->consoleRuleId;
        }

        if (null !== $request->eventCode) {
            @$query['eventCode'] = $request->eventCode;
        }

        if (null !== $request->memo) {
            @$query['memo'] = $request->memo;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->ruleId) {
            @$query['ruleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['ruleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRuleBase',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRuleBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Basic Policy Information.
     *
     * @param request - UpdateRuleBaseRequest
     *
     * @returns UpdateRuleBaseResponse
     *
     * @param UpdateRuleBaseRequest $request
     *
     * @return UpdateRuleBaseResponse
     */
    public function updateRuleBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleBaseWithOptions($request, $runtime);
    }

    /**
     * Batch Update Samples.
     *
     * @param request - UpdateSampleBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSampleBatchResponse
     *
     * @param UpdateSampleBatchRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSampleBatchResponse
     */
    public function updateSampleBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ids) {
            @$query['ids'] = $request->ids;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->tags) {
            @$query['tags'] = $request->tags;
        }

        if (null !== $request->versions) {
            @$query['versions'] = $request->versions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSampleBatch',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSampleBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Update Samples.
     *
     * @param request - UpdateSampleBatchRequest
     *
     * @returns UpdateSampleBatchResponse
     *
     * @param UpdateSampleBatchRequest $request
     *
     * @return UpdateSampleBatchResponse
     */
    public function updateSampleBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSampleBatchWithOptions($request, $runtime);
    }

    /**
     * Sample Inspection.
     *
     * @param request - UploadFileCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadFileCheckResponse
     *
     * @param UploadFileCheckRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UploadFileCheckResponse
     */
    public function uploadFileCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->batchName) {
            @$query['batchName'] = $request->batchName;
        }

        if (null !== $request->dataType) {
            @$query['dataType'] = $request->dataType;
        }

        if (null !== $request->ossFileName) {
            @$query['ossFileName'] = $request->ossFileName;
        }

        if (null !== $request->regId) {
            @$query['regId'] = $request->regId;
        }

        if (null !== $request->sampleTagType) {
            @$query['sampleTagType'] = $request->sampleTagType;
        }

        if (null !== $request->serviceList) {
            @$query['serviceList'] = $request->serviceList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadFileCheck',
            'version' => '2021-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadFileCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sample Inspection.
     *
     * @param request - UploadFileCheckRequest
     *
     * @returns UploadFileCheckResponse
     *
     * @param UploadFileCheckRequest $request
     *
     * @return UploadFileCheckResponse
     */
    public function uploadFileCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadFileCheckWithOptions($request, $runtime);
    }
}
